<?php // æøåÆØÅ UTF-8 uden BOM

// eksempel : visbilled.php?scooterhjemmeside/billeder/billed1234.jpg

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "billed visning";
$overskrift = "";
$metadescription = "billed visning";

$databasecenter = array(

'
' => '
' . billede()

);

$databaseright = array(

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, false, false, $databasecenter, false, false, true, false, false, false);

?>
