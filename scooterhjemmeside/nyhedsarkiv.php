<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "nyhedsarkiv";
$overskrift = "nyhedsarkiv";
$metadescription = "gamle nyheder om ændringer og tilføjelser der er sket på scootergrisen";

$nyheder = require_once('./php/nyhederdatabase.php');
$nyheder = array_splice($nyheder, 1);

$introduktion['introduktion'] = ''
   .'Her kan du læse de gamle nyheder der har været på scootergrisen.' . "\r\n"
   .'Siden kan for eksempel bruges hvis det er længe siden du har besøgt hjemmesiden og gerne vil se hvad der er sket i mellemtiden.'
   ;

$databasecenter = array_merge(

    $introduktion
   ,$nyheder

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>