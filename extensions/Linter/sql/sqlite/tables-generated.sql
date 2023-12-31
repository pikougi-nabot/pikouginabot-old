-- This file is automatically generated using maintenance/generateSchemaSql.php.
-- Source: tables.json
-- Do not modify this file directly.
-- See https://www.mediawiki.org/wiki/Manual:Schema_changes
CREATE TABLE /*_*/linter (
  linter_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  linter_page INTEGER UNSIGNED NOT NULL,
  linter_namespace INTEGER DEFAULT NULL,
  linter_cat INTEGER UNSIGNED NOT NULL,
  linter_start INTEGER UNSIGNED NOT NULL,
  linter_end INTEGER UNSIGNED NOT NULL,
  linter_params BLOB NOT NULL, linter_template BLOB DEFAULT '' NOT NULL,
  linter_tag BLOB DEFAULT '' NOT NULL
);

CREATE INDEX linter_page ON /*_*/linter (linter_page);

CREATE INDEX linter_cat_namespace ON /*_*/linter (linter_cat, linter_namespace);

CREATE UNIQUE INDEX linter_cat_page_position ON /*_*/linter (
  linter_cat, linter_page, linter_start,
  linter_end
);

CREATE INDEX linter_cat_template ON /*_*/linter (linter_cat, linter_template);

CREATE INDEX linter_cat_tag ON /*_*/linter (linter_cat, linter_tag);
