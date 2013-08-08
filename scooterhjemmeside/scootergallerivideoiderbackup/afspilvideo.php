<?php // æøå utf8 uden bom

include_once('php/opsetning_scooterhjemmeside.php');
include_once('../scooterhjemmeside/php/funktioner.php');
include_once('php/funktioner.php');

$title = "videoer";
$overskrift = "videoer";

$indhold = '';

if($_GET["url"]){

   $indhold .= visflash('0', $_GET["url"], '', true, '550', '400', '', true);
   $indhold .= '<div style="margin:auto; text-align:center;">';
   $indhold .= ahref($_GET["url"], $_GET["url"]);
   $indhold .= '</div>';

}

$databasecenter = array(

'
' => ''
. $indhold

);

vispre($title, $overskrift, array(), false, false);
visoverskrift($overskrift, true);
foreach($databasecenter as $overskrift => $indhold){ echo visdel($overskrift, $indhold); }
visslut(false, false);
vispost(false, false);

?>
