<?php

require_once('CsvParser.php');

use hw\CsvParser\CsvParser;

$parseData = null;

$csvpp = new CsvParser('src/data.csv');
$parseData = $csvpp->parse();
$csvpp->show($parseData);


