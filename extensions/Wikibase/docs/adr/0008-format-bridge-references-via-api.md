# 8) Format Bridge references via API {#adr_0008}

Date: 2020-02-17

## Status

accepted

## Context

Data Bridge is a browser-side application that allows users to edit Wikidata from Wikibase Client wikis.
This involves showing users references for the statements they are editing, in a readable format.
The guiding example for this format is the following reference from the [South Pole Telescope] article:

> ["South Pole Telescope eyes birth of first massive galaxies"](https://antarcticsun.usap.gov/science/contenthandler.cfm?id=2737). United States Antarctic Program. 14 September 2012. Retrieved 11 February 2017.

Which is generated by Lua code from the following Wikidata reference:

> - reference URL: https://antarcticsun.usap.gov/science/contenthandler.cfm?id=2737 (`url`)
> - retrieved: 11 February 2017 (`time`)
> - title: South Pole Telescope eyes birth of first massive galaxies (English) (`monolingualtext`)
> - publication date: 14 September 2012 (`time`)
> - publisher: [United States Antarctic Program][Q955267] (`wikibase-item`)

This reference already involves the formatting of four different datatypes, none of which are otherwise supported by Data Bridge in its initial iteration.
Additionally, other extensions can register additional datatypes (examples include WikibaseLexeme, Math, and Score), which may appear in references as well.
This makes formatting references browser-side unattractive:
we would have to implement formatting a great number of datatypes, and provide a mechanism for other extensions to hook formatters for their own datatypes into Data Bridge.
By contrast, the server-side code already knows how to format every datatype for presentation,
both for repository and client functionality.

Wikibase has an API for formatting individual values (`wbformatvalue`),
but this is limited to a single value at a time,
which means formatting several rich references may require a lot of API requests.
Additionally, some values should be combined in the reference:
most importantly, the reference URL and title should be combined into a link with that target URL and text.

In the future, Data Bridge will also support editing of references ([T245640]),
so there is also a need to support displaying references that have not yet been saved, and are not present on the target item.

## Decision

To format these references, we will add an action API module to Wikibase Client.
This module will accept a reference JSON blob and return HTML.
Knowledge such as combining certain values, or the order of properties, is encoded into this module:
Data Bridge should be able to use its output unmodified.

We envision that this functionality will also be useful to others:
both as an API module, for other API users,
and as a Lua function, for wiki content
(especially on wikis that don’t have their own sophisticated reference formatting modules yet).
However, the initial version will be marked internal, and only serve the needs of Data Bridge.

The action API is chosen because Wikibase does not yet use any other style of API,
so it is the most straightforward option.
Wikibase Client (rather than Wikibase Repository) is chosen
because the desired snak formatting aligns more closely with that on the client.

## Consequences

A `wbformatreference` API module will be added to Wikibase Client,
with a parameter for the reference (in JSON) to format,
a parameter for the “style” of the formatted reference (with `internal-data-bridge` as the only allowed value)
and a parameter for the output format (with `html` as the only allowed value).
The style and output format parameters allow for future expansion,
but initially only the one option needed for Data Bridge will be implemented.

Settings for the property IDs of the following properties will be added to the client configuration,
making the repository properties associated with those roles configurable:
- reference URL
- title
- stated in
- author
- publisher
- publication date
- retrieved date

The reference formatting functionality will be encapsulated in a PHP service,
not directly implemented in the API module itself,
for future reuse;
that service will return wikitext, to be parsed into HTML in the API module.
Reference snaks are emitted in the order of the properties listed above,
with all other properties (if any) inserted before the retrieved date.
The retrieved date is prefixed with the word “retrieved” (translatable),
everything else is separated with a simple period (also translatable, some languages would use the fullwidth version).
The reference URL and title are combined into a single link if both are present.
The properties themselves (or their labels) are not included, and items in the values are only shown using their labels, not as links.
(Those labels are shown in the user language – `uselang` parameter in the API – and apply language fallbacks, as usual.)

## Differentiation from recent Wikibase Repository approach and outlook for frontend architecture in Wikibase

At the time of writing, this ADR saw some controversy around the technological approach suggested,
as adding an API to render markup in PHP is in stark contrast to the direction
(TypeScript/JavaScript with optional [server-side rendering][SSR])
which has been taken for presentation work over the last years in Wikibase Repository.

The decision here happens for Wikibase Client, obeying by the nature of the tech stack there.
Very similar rendering already exists, implemented in PHP and run on the server,
since it’s needed during normal page rendering
(see [Data transclusion][]: `{{#statements:}}`/`{{#property:}}`, `mw.wikibase.formatValue()`/`renderSnaks()`/`formatValues()`),
and we anticipate the need to make our new rendering available in the data transclusion (Lua) as well,
and consequently want to maximize synergies with – and follow similar paradigms like – it.

At this time we see a conceptual difference between the use of Wikibase content in Wikibase Repository and Wikibase Client.

In Wikibase Repository we are striving for – and will continue to do so –
a consistent technology stack using TypeScript/JavaScript to present its content.

In Wikibase Client, Wikibase’s content is not merely presented, but becomes another wiki’s (the client wiki’s) content,
following the receiving wiki’s rules, which then is presented.
As such, different rules can and will apply.

Entirely switching to one or the other approach for presentation in both MediaWiki and Wikibase
(“JS SSR page rendering for all”) may eliminate the apparent inconsistencies technologically,
but at the time of writing it is not possible to achieve a higher level of synergy between the solutions in Wikibase Repository and Wikibase Client than described here.
In addition, from a product perspective, a difference in requirements may remain irrespective of technological limitations.

We will ensure that we stay flexible for inevitable change through clear isolation of concerns
(e.g. see isolation of the logic in a service),
ensure that this is feasible to move away from as we slowly develop our technological abilities,
both within Wikibase as well as (e.g. as part of [Frontend Architecture Working Group][FAWG]) in MediaWiki.

[South Pole Telescope]: https://en.wikipedia.org/wiki/South_Pole_Telescope
[Q955267]: https://www.wikidata.org/wiki/Q955267
[T245640]: https://phabricator.wikimedia.org/T245640
[SSR]: https://wikitech.wikimedia.org/wiki/WMDE/Wikidata/SSR_Service#Overview
[Data transclusion]: https://www.mediawiki.org/wiki/Wikibase/Installation/Advanced_configuration#Data_transclusion
[FAWG]: https://www.mediawiki.org/wiki/Frontend_Architecture_Working_Group
