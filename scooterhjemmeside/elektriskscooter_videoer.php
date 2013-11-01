<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "videoer - Elektrisk scooter";
$overskrift = "videoer - Elektrisk scooter";
$metadescription = "diverse videoer som handler om elektriske scootere";

$databasecenter = array(

'
videoer
' => '
Her er nogen videoer hvor man kan se diverse ting på en elektrisk scooter.

'.visflash('0', "http://www.youtube.com/watch?v=HEpggpBroWg", 'Giantco E-buddy 45 km/t', true).'
'.visflash('0', "http://www.youtube.com/watch?v=6S7OmqlUq-c", 'Begrænser stik på controller (40 km/t eller 20 km/t)', true).'

<div style="text-align: center;">
<div>Udpak og saml elektrisk scooter (Luyuan HB2)</div>
<!--ignore-->
<video width="424" height="262" controls preload="metadata" poster="/scooterhjemmeside/billeder/posters/luyuan_hb2_udpakogsaml.png" onloadedmetadata="this.volume=0.3;">
   <source src="/scooterhjemmeside/videoer/luyuan_hb2_udpakogsaml.ogv" type="video/ogg">
   <source src="/scooterhjemmeside/videoer/luyuan_hb2_udpakogsaml.mp4" type="video/mp4">
   Da din browser ikke understøtter HTML 5 &lt;video&gt; kan videoen ikke afspilles her.
   '.visbilled('1', 'posters/removerearwheel.png', 'Udpak og saml elektrisk scooter (Luyuan HB2) poster').'
</video>
<!--ignore-->
<div>Afmonter baghjul på elektrisk scooter (Luyuan MM-20Y)</div>
<!--ignore-->
<video width="480" height="368" controls preload="metadata" poster="/scooterhjemmeside/billeder/posters/removerearwheel.png" onloadedmetadata="this.volume=0.3;">
   <source src="/scooterhjemmeside/videoer/removerearwheel.ogv" type="video/ogg">
   <source src="/scooterhjemmeside/videoer/removerearwheel.mp4" type="video/mp4">
   Da din browser ikke understøtter HTML 5 &lt;video&gt; kan videoen ikke afspilles her.
   '.visbilled('1', 'posters/removerearwheel.png', 'Afmonter baghjul på elektrisk scooter (Luyuan MM-20Y) poster').'
</video>
<!--ignore-->
</div>

'.visflash('0', "http://www.youtube.com/watch?v=-QFX37O5EZg", '', true).'
'.visflash('0', "http://www.youtube.com/watch?v=xfmsmsng9NI", '', true).'
'.visflash('0', "http://www.youtube.com/watch?v=4er2ya0PkDM", '', true).'
'.visflash('0', "http://www.youtube.com/watch?v=qWYNTZ2Rosc", '', true).'
'.visflash('0', "http://www.youtube.com/watch?v=efYFOHnXh0E", '', true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
