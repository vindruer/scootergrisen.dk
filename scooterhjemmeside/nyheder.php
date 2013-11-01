<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['nogetikon']               = 'ikoner/ikon_nyheder2.png';

$title = "nyheder om scootere og knallerter på scootergrisen.dk";
$overskrift = "nyheder om scootere og knallerter på scootergrisen.dk";
$metadescription = "læs de seneste tilføjelser og ændringer på Scootergrisen";

$nyheder = require_once './php/nyhederdatabase.php';

$introduktion['RSS nyheder'] = ''
   .'Tilmeld dig ' . ahref('http://' . $_SERVER['SERVER_NAME'] . '/' . $GLOBALS['setup']['datamappe'] . '/php/rss.php', visbilled('2', 'ikoner/rss_nyheder.png', 'RSS nyheder', null, null, null, null, null, null, null, null, null, null, null, 'vertical-align: middle;'), 'type="application/rss+xml"') . ' så får du automatisk nyhederne uden du behøver besøge hjemmesiden.' . "\r\n"
   ;

$databasecenter = array_merge(

   $nyheder,
   $introduktion

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>