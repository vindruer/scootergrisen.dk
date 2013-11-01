<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['sidetopbesked'] = mb_ucfirst($GLOBALS['setup']['l_sidetopbesked_dennesidevarretstor']) . ' ' . menugenvej(array(mb_ucfirst($GLOBALS['setup']['l_m_scooterensdele']), mb_ucfirst($GLOBALS['setup']['l_m_scooterensdele_transmission']))) . ' ...';

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
