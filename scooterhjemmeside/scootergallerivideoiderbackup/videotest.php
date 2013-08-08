<?php // æøå utf8 uden bom

include_once('php/opsetning_scooterhjemmeside.php');
include_once('../scooterhjemmeside/php/funktioner.php');
include_once('php/funktioner.php');

$title = "videoer";
$overskrift = "videoer";

$indhold = '';
$inputs = '';

$links = array();

$antalperside = 200;
$maximum = 90000;


$virkerfil = 'scootergallerivideoiddervirker.txt';
$dataind = file_get_contents($virkerfil);
$dataind = unserialize($dataind);
$idarrayvirker = $dataind;

if(isset($_GET["fra"])){

   $fra = $_GET["fra"];

}else{

   $fra = 0;

}
/*
$antalvist = 0;

for($i = $fra; $i <= $antalperside; $i++){

   if(in_array($i, $idarrayvirker)){

      $links[] = "http://www.scootergalleri.dk/vid_vis.aspx?VideoID=" . $i;
      $antalvist++;

   }

}
*/

/*
$antalvist = 0;   
foreach($idarrayvirker as $id){

      $links[] = "http://www.scootergalleri.dk/vid_vis.aspx?VideoID=" . $id;
      $antalvist++;

      if($antalvist >= $antalperside){

         break;

      }

}
*/

$randomkeys = array_rand($idarrayvirker, $antalperside);

if(count($idarrayvirker) >= $antalperside){

   // array_rand() finder godt nok tilfældige keys men de kommer til at stå i rækkefølge. Brug derfor shuffle() bagefter.

   $randomkeys = array_rand($idarrayvirker, $antalperside);

   shuffle($randomkeys);

   foreach($randomkeys as $randomkey){

      $videoid = $idarrayvirker[$randomkey];
      $links[] = "http://www.scootergalleri.dk/vid_vis.aspx?VideoID=" . $videoid;

   }

   $indhold .= '<div class="scootergalleriholder"><ul>';
   $indhold .= scootergallerioversigt($links);
   $indhold .= '</ul><div style="clear:both;"></div>';
   $indhold .= '<div id="scootergalleri_flerevideoer">';
   $indhold .= ahref($GLOBALS['domain'] . $_SERVER['SCRIPT_NAME'], 'Flere videoer');
   $indhold .= '</div>';
   $indhold .= '</div>';

}else{

   $indhold .= '$idarrayvirker (' . count($idarrayvirker) . ') er mindre end $antalperside (' . $antalperside .')';
   trigger_error('$idarrayvirker (' . count($idarrayvirker) . ') er mindre end $antalperside (' . $antalperside .')');

}



/*

for($tal = 0; $tal <= $maximum; $tal += $antalperside){

   $inputs .= input('0', 'submit', 'fra', $tal);

}

$indhold .= ''
   . formbox('1', '', '', $_SERVER['SCRIPT_NAME'], 'get', '', ''
      . $inputs
   );



*/
/*
$nesteside = $fra + $antalperside;
$indhold .= ''
   . formbox('1', '', '', $_SERVER['SCRIPT_NAME'], 'get', '', ''
      . input('1', 'button', 'fra', 'Næste ' . $antalperside, '', '', '', '', 'onclick="location.href=\'' . $_SERVER['SCRIPT_NAME'] . '?fra=' . $nesteside . '\';"')

   );
*/




















$databasecenter = array(

'
tilfældige videoer fra scootergalleri
' => ''
. $indhold

);

$databaseright = array(

'emner på siden' => array()

);

foreach($databasecenter as $key => $value){
   if(trim($key) != ""){ $databaseright["emner på siden"][trim($key)] = byttegn(trim($key)); }
}

vispre($title, $overskrift, $databaseright);
visoverskrift($overskrift);
foreach($databasecenter as $overskrift => $indhold){ echo visdel($overskrift, $indhold); }
visslut();
foreach($databaseright as $menuoverskrift => $menudata){ $GLOBALS['setup']['unimenuer'][$menuoverskrift] = $menudata; }
vispost();

?>
