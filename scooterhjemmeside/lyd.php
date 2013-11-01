<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "lyd og musik med scootere og knallerter - Underholdning";
$overskrift = "lyd og musik med scootere og knallerter - Underholdning";
$metadescription = "musik og lydfiler hvor scootere og knallerterne bliver nævnt";

$playerurl = $GLOBALS['setup']['domainogdatamappe'] . '/' . 'flash' . '/' . 'player_mp3_multi.swf';
$playlistfil = '/scooterhjemmeside/lyd/playlist_lyd.txt';

   // http://flash-mp3-player.net/players/multi/documentation/
   // You need to encode mp3 with 44KHz.
   $flashvarsarray = array();
   $flashvarsarray[] = 'volumewidth=100';
   $flashvarsarray[] = 'volumeheight=10';
   $flashvarsarray[] = 'volume=30'; // 0-200
   $flashvarsarray[] = 'showvolume=1';
   $flashvarsarray[] = 'showinfo=0';
   $flashvarsarray[] = 'autoplay=0';
   $flashvarsarray[] = 'showlist=1';
   $flashvarsarray[] = 'playlist=' . $playlistfil;
   $flashvarsarray[] = 'width=550';
   $flashvarsarray[] = 'height=250';
   $flashvarsarray[] = 'showslider=1';
   $flashvarsarray[] = 'showloading=always';
   $flashvarsarray[] = 'showplaylistnumbers=0';
   $flashvarsarray[] = 'playlistalpha=100';

   $flashvars = implode('&amp;', $flashvarsarray);

$databasecenter = array(

'
medieafspiller
' => '
<!--ignore-->
<div style="margin: auto; text-align: center;">
<object type="application/x-shockwave-flash" data="' . $playerurl . '" style="width: 550px; height: 250px;">
<param name="movie" value="' . $playerurl . '">
<param name="FlashVars" value="' . $flashvars . '">
'.flashblevikkefundet().'
</object>
</div>
<!--ignore-->
'

,'
download lydfilerne
' => '
'
.visfil('1', 'scooterhjemmeside/lyd/metromanaopdescooter.mp3')
.visfil('1', 'scooterhjemmeside/lyd/emaxipuchsang.mp3')
.visfil('1', 'scooterhjemmeside/lyd/halloj_i_betalingsringen_knallert_snak.mp3')
.visfil('1', 'scooterhjemmeside/lyd/teori_A1_for_du_korer.mp3')
.visfil('1', 'scooterhjemmeside/lyd/teori_A2_knallertens_udstyr.mp3')
.visfil('1', 'scooterhjemmeside/lyd/teori_A3_ud_pa_vejen_for_forste_gang.mp3')
.visfil('1', 'scooterhjemmeside/lyd/teori_B_vejkryds.mp3')
.visfil('1', 'scooterhjemmeside/lyd/teori_C_nar_du_moder_andre_trafikanter.mp3')
.visfil('1', 'scooterhjemmeside/lyd/teori_knallerter_og_trafiksikkerhed.mp3')
.visfil('1', 'scooterhjemmeside/lyd/4stroke.mp3')
.visfil('1', 'scooterhjemmeside/lyd/flemming_kroll_i_live_01.mp3')
.visfil('1', 'scooterhjemmeside/lyd/flemming_kroll_i_live_05.mp3')
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
