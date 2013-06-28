<?php

$sketchy_data = array();
$sketchy_data[1] = "foo";
$sketchy_data[2] = "bar";
$sketchy_data['a'] = "baz";
$sketchy_data[4] = "";
$sketchy_data[] = 145;

foreach ($sketchy_data as $key => $value) {
 print "$key\t$value\n";
}
