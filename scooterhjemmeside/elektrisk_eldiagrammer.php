<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "el diagrammer - Elektrisk";
$overskrift = "el diagrammer - Elektrisk";
$metadescription = "et el diagram viser hvordan ledningsnettet er forbundet til alle de elektriske dele på scooteren";

$databasecenter = array(

'
el diagrammer
' => '
Et el diagram viser hvordan ledningsnettet er forbundet til alle de elektriske dele på scooteren.
'.visbilled('1', 'billed0253.jpg', 'el diagram', false, true).'
El diagrammer til bestemte scootere kan findes gennem '.ahref('galleri.php', 'galleri').'.

Alle el diagrammer kan også ses under '.ahref('download.php', 'download').'.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
