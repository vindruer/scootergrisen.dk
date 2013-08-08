<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "status kode";
$overskrift = "status kode";
$metadescription = "fejlside";

$databasecenter = array(

'
status formular
' => '
'.visstatusform().'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, false, true, $databasecenter, false, false, true, false, false, false, true);

?>
