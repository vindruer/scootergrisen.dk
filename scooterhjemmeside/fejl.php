<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "status kode";
$overskrift = "status kode";
$metadescription = "denne side vises når der sker en fejl eller lignende som når filen ikke findes eller adgang ikke er tilladt osv";

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

echo bygsiden($title, $overskrift, $metadescription, $databaseright, false, true, $databasecenter, false, true, true, false, false, false, true);

?>
