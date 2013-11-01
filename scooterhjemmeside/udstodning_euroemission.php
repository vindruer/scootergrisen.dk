<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "euro emissions standarder - Luftfilter og udstødning";
$overskrift = "euro emissions standarder - Luftfilter og udstødning";
$metadescription = "euro emmisions standarderne fortæller om hvor meget af forskellige stoffer (CO, HC, NOx) der er i køretøjets udstødningsgasser";

$databasecenter = array(

'
euro emissions standarder
' => '
Euro emmisions standarderne fortæller om hvor meget af forskellige stoffer (CO, HC, NOx) der er i køretøjets udstødningsgasser.

De fleste nyere 50 cm³ scootere angives gerne med EURO 2.
'.visbilled('1', 'billed1634.jpg', 'euro emissions standarder', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
