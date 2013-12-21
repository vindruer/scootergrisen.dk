<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['sideikon']               = 'ikoner/ikon_links2.png';

$title = "links til scooterrelaterede hjemmesider";
$overskrift = "links til scooterrelaterede hjemmesider";
$metadescription = "links til andre scooterrelaterede hjemmesider som forum, forhandlere, importører, producenter, køb og salg, benzinselskaber og forsikringsselskaber";

$linksarray = require_once './php/linksdatabase.php';

$databasecenter = array();

if(isset($linksarray)){

   foreach($linksarray as $deloverskrift => $links){

      $noget = '';

      $noget .= '<!--ignore-->';

      $noget .= galleri('start');

      foreach($links as $link){

         $noget .= galleri('link', $link[0], $link[1], $link[2]);

      }

      $noget .= galleri('slut');

      $noget .= '<!--ignore-->';

      $databasecenter[$deloverskrift] = $noget;

   }

}

$databasecenter['alle links'] = 'Du kan hente '.ahref('php/linksliste.php', 'en liste med alle linksne').' her fra siden hvis du vil.';

$databaseright = array(

//'emner på siden' => array()


);

foreach($databaseright as $key => $value){

   natsort($value);
   $databaseright[$key] = $value;

}

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
