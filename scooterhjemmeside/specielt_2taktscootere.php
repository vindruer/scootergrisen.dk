<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$setup['sidetopbesked'] = 'Denne side var ret stor og tog lang tid at indlæse.<br><br>Derfor har jeg delt siden op på flere mindre sider som er hurtigere at indlæse.<br><br>Brug menuen som hedder '.menugenvej(array('Scooterens dele', '2 takt motor')).'...';

$title = "siden er blevet delt op";
$overskrift = "siden er blevet delt op";
$metadescription = "[]";

$databasecenter = array(

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
