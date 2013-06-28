<?php
#$id = $_REQUEST['id'];
$id = $argv[1];

$name_data = array();
$name_data[] = "Joe";
$name_data[] = "Jane";
$name_data[] = "Nick";
$name_data[] = "Sarah";

function lookupNameByID($id) {
 global $name_data;
 return $name_data[$id];
}

$name = lookupNameByID($id);

print "Hello, $name\n";
