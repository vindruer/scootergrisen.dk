<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "topstykke og cylinder - 2 takt motor";
$overskrift = "topstykke og cylinder - 2 takt motor";
$metadescription = "forklaring af topstykke og cylinder på en scooter med 2 takt motor";

$databasecenter = array(

'
topstykke og cylinder
' => '
Her ses topstykke og cylinder fra en 2 takt motor.
'.visbilled('1', 'billed0679.jpg', '2 takt tændrør topstykke cylinder', false, true).'

På så godt som alle 2 takt motorer med karburator består topstykket kun af ét stykke metal og ingen bevægelige dele.
I forhold til en 4 takt motor så er 2 takt motorens topstykke meget mere simpelt og lettere at afmonter.

'.visbilled('1', 'billed3884.jpg', '2 takt cylinder', false, true).'

'.visbilled('1', 'billed0840.jpg', '2 takt tændrør topstykke pakning cylinder tegning', false, true).'
Cylinderen har skyllekanaler hvor benzin/luft/olie presses op når stemplet bevæger sig ind.
'.visbilled('1', 'billed0922.jpg', 'cylinder til 2 takt motor', false, true).'
'.visbilled('1', 'billed1451.jpg', 'motorblok', false, true).'
'.visbilled('1', 'billed0923.jpg', 'cylinder skyllekanal tværsnit tegning', false, true).'
Her ses en passiv luftkølet cylinder til en 2 takt motor.
Og hold da op for nogen kølefinner.
'.visbilled('1', 'billed1015.jpg', 'cylinder til 2 takt motor', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
