-- This file is automatically generated using maintenance/generateSchemaSql.php.
-- Source: extensions/Wikibase/repo/sql/abstract/wb_changes_subscription.json
-- Do not modify this file directly.
-- See https://www.mediawiki.org/wiki/Manual:Schema_changes
CREATE TABLE /*_*/wb_changes_subscription (
  cs_row_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  cs_entity_id BLOB NOT NULL, cs_subscriber_id BLOB NOT NULL
);

CREATE UNIQUE INDEX cs_entity_id ON /*_*/wb_changes_subscription (cs_entity_id, cs_subscriber_id);

CREATE INDEX cs_subscriber_id ON /*_*/wb_changes_subscription (cs_subscriber_id);
