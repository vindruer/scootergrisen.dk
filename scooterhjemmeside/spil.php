<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "computerspil med scootere og knallerter - Underholdning";
$overskrift = "computerspil med scootere og knallerter - Underholdning";
$metadescription = "computerspil hvor man kan kører på scooter/knallert";

$flash = 'Adobe flash player<br>' . ahref('http://get.adobe.com/flashplayer/', visbilled('1', 'billed2459.jpg', 'Adobe flash player logo', null, null, null, null, null, null, null, null, null, null, null, 'vertical-align: bottom;'), null, true) . "\r\n";
$shockwave = 'Adobe shockwave player<br>' . ahref('http://get.adobe.com/shockwave/', visbilled('1', 'billed2458.jpg', 'Adobe shockwave player logo', null, null, null, null, null, null, null, null, null, null, null, 'vertical-align: bottom;'), null, true) . "\r\n";

$databasecenter = array(

'
introduktion
' => '
Her på siden samler jeg spil hvor man kan køre på scooter.
'.kontaktmig(1).' gerne hvis du kender flere spil med scootere.
'

,'
gilera runner hometown hookup
' => '
'.visbilled('1', 'billed2457.jpg', 'gilera runner hometown hook-up screenshot', false, true).''
.'<div style="text-align: center;">Krav :<br>'.$flash.'</div>'
.linkknap('http://racer.spilxl.dk/scooter-race-2.html', 'spil hos spilxl.dk', true)
.'
'

,'
scooter ace
' => '
'.visbilled('1', 'billed2454.jpg', 'scooter ace screenshot', false, true).''
.'<div style="text-align: center;">Krav :<br>'.$shockwave.'
Lavet af : Playerthree</div>'
.linkknap('http://www.fingertime.com/scooterace/', 'spil hos fingertime.com', true)
.linkknap('http://www.y8.com/games/Scooter_Ace', 'spil hos y8.com', true)
.'
'

,'
scooter guru
' => '
'.visbilled('1', 'billed2453.jpg', 'scooter guru screenshot', false, true).''
.'<div style="text-align: center;">Krav :<br>'.$shockwave.'
Lavet af : Mama Gama</div>'
.linkknap('http://www.mamagama.com/scooter_guru/scooter_guru.html', 'spil hos mamagama.com', true)
.'
'

,'
scooter war3z
' => '
'.visbilled('1', 'billed2452.jpg', 'scooter war3z screenshot', false, true).'
'.visflash('0', "http://www.youtube.com/watch?v=nFvz8oou3yM", 'scooter war3z video', true).''
.'<div style="text-align: center;">Krav :<br>Grafikkort som Geforce2, Radeon7500 eller bedre

Lavet af : '.ahref('http://www.team6-games.com/', 'Team6 game studio').'</div>'
.linkknap('download/scooterwar3zdemo.exe', 'download scooterwarez demo')
.'
Det fulde spil koster penge.

Hvis grafikken ser forkert ud så kan det være fordi grafikkortet ikke lever op til minimumkravene.
Ellers prøv og opdater skærmkort driveren og DirectX.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
