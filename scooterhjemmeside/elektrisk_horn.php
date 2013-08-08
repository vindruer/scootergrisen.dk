<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "horn - Elektrisk";
$overskrift = "horn - Elektrisk";
$metadescription = "info om hornet i en scooter";

$databasecenter = array(

'
horn
' => '
Her ses hornet fra en Kymco Super 8.
'.visbilled('1', 'billed0724.jpg', 'horn kymco super 8', false, true).'
Den lille skrue bag på hornet bruges til at "tune" hornet.
Hvis hornet ikke siger dyt kan det være fordi skruen ikke er indstillet rigtigt.

Horn knappen sidder gerne på venstre side af styret og aktiveres med venstre tommelfinger.
'.visbilled('1', 'billed3351.jpg', 'kontakter på kymco super 8', false, true).'

Når man trykker hornknappen ind forbindelses hornet med batteriet og hornet siger "dyyyt".

Se også '.ahref('elektriskscooter_knapper.php', 'Elektrisk scooter - Knapper').' hvor nogen elektriske scootere har 2 knapper til horn da el starter knappen ikke bruges til en starter motor.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
