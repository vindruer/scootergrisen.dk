<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "instrumentpanel - Elektrisk scooter";
$overskrift = "instrumentpanel - Elektrisk scooter";
$metadescription = "billeder af instrumentpanelet fra diverse elektriske scootere";

$databasecenter = array(

'
instrumentpanel
' => '
Her vises instrumentpaneler fra forskellige elektriske scootere.

Her ses instrumentpanelet fra en EVT scooter.
'.visbilled('1', 'billed0103.jpg', 'EVT instrumentpanel', false, true).'
O.H (Over Heat) lampen blinker hvis controlleren bliver for varm.

Her ses instrumentpanelet fra Elvin.
'.visbilled('1', 'billed1102.jpg', 'Elvin instrumentpanel', false, true).'

Her ses instrumentpanelet fra Giantco E-Buddy.
'.visbilled('1', 'billed1258.jpg', 'Giantco E-Buddy instrumentpanel', false, true).'

Her ses instrumentpanelet fra E-ton E-mo.
'.visbilled('1', 'billed1574.jpg', 'E-ton E-mo instrumentpanel', false, true).'

Her ses instrumentpanelet fra Ebretti 518.
'.visbilled('1', 'billed1723.jpg', 'Ebretti 518 instrumentpanel', false, true).'

Her ses instrumentpanelet fra Busetto ECC-800.
'.visbilled('1', 'billed2712.jpg', 'Busetto ECC-800 instrumentpanel', false, true).'

Her ses instrumentpanelet fra Veken VK-M50 som er en hybrid scooter med både 4 takt forbrændingsmotor og elektrisk motor.
'.visbilled('1', 'billed3620.jpg', 'Veken VK-M50 instrumentpanel', false, true).'

Her ses instrumentpanelet fra Peugeot Scoot\'elec.
'.visbilled('1', 'billed0659.jpg', 'Peugeot Scoot\'elec instrumentpanel', false, true).'
Øverst kan man indtaste en kode for at låse scooteren op.
Ved at taste V1 skiftes til økonomi kørsel (længere rækkevidde).
Ved at taste V2 skiftes til normal kørsel (hurtigere).
'.visbilled('1', 'billed1286.jpg', 'Peugeot Scoot\'elec instrumentpanel lamper', false, true).'

Her ses instrumentpanelet fra Yamaha EC-03.
'.visbilled('1', 'billed3163.jpg', 'Yamaha EC-03 instrumentpanel', false, true).'

Her ses instrumentpanelet fra en E-max scooter.
'.visbilled('1', 'billed3288.jpg', 'E-max', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
