<?php // æøåÆØÅ UTF-8 uden BOM

// generer \r\n-adskildt liste med alle linksne fra linksdatabase.php
// indsæt linket (http://localhost/scooterhjemmeside/php/linksliste.php)
// i webshot programmet så tager programmet screenshots af alle linksne

chdir('..');
require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$database = require_once './php/linksdatabase.php';

header('Content-type: text/plain');

$indhold = '';

foreach($database as $key => $value){

   foreach($value as $linkelement){

      $indhold .= $linkelement[0] . "\r\n";

   }

}

echo $indhold;

?>