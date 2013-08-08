<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "motortyper - 2 takt motor";
$overskrift = "motortyper - 2 takt motor";
$metadescription = "forklaring af forskellige 2 takt motor typer til scootere";

$databasecenter = array(

'
2 takt motortyper
' => '
MY 50 er en tvunget blæsekølet 2 takt motor.
'.visbilled('1', 'billed0801.jpg', '2 takt motor MY 50', false, true).'
CY 50 er en tvunget blæsekølet 2 takt motor.
'.visbilled('1', 'billed0802.jpg', '2 takt motor CY 50', false, true).'
MA 50 er en væskekølet 2 takt motor.
'.visbilled('1', 'billed0803.jpg', '2 takt motor MA 50', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
