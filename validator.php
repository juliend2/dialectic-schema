<?php

require 'vendor/autoload.php';

use Swaggest\JsonSchema\Schema;

$schema_json = file_get_contents('./dialectic-schema.json');
$schema = Schema::import(json_decode($schema_json));

$dialectic_file = $argv[1] ?? null;

if (!$dialectic_file || !file_exists($dialectic_file)) {
  print "Please provide the path to a dialectic-schema-compatible json file.\n";
  exit(1);
}

$dialectic_json = file_get_contents($dialectic_file);

try {
  $schema->in(json_decode($dialectic_json));
  print "JSON is valid with the dialectic-schema.\n";
} catch(Exception $e) {
  print $e;
}
