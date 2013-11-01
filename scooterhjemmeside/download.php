<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['nogetikon']               = 'ikoner/go_down.png';

$title = "Manualer, el diagrammer, reservedele og andre filer";
$overskrift = "Manualer, el diagrammer, reservedele og andre filer";
$metadescription = "Download filer til scootere/knallerter som brugermanualer, servicemanualer, el diagrammer, reservedele og andre filer";

$setup['nogetikon']               = 'ikoner/ikon_download2.png';

$databasecenter = array(

'
introduktion
' => '
Filerne er mærket med <span class="upload_brugermanualfarve">B</span> <span class="upload_servicemanualfarve">S</span> <span class="upload_eldiagramfarve">E</span> <span class="upload_reservedelefarve">R</span> så det er let at se hvilke filer som er <span class="upload_brugermanualfarve">Brugermanualer</span>, <span class="upload_servicemanualfarve">Servicemanualer</span>, <span class="upload_eldiagramfarve">El diagrammer</span>, <span class="upload_reservedelefarve">Reservedele</span> og også så man kan se hvilke filer som ikke er nogle af delene.

PDF filer kan åbnes med '.ahref('http://get.adobe.com/reader/', 'Adobe Reader').'.
ZIP filer kan åbnes med '.ahref('http://www.7-zip.org/', '7-Zip').'.

Se under '.ahref('typegodkendelser.php', 'typegodkendelser').' for download af typegodkendelser.

Hvis du ikke kan finde det du søger her på siden så prøv de links jeg samler i forum emnet '.ahref('http://scootergrisen.dk/forum/viewtopic.php?f=4&t=898', 'Hjemmesider med manualer').'.
'

,'
filer
' => '
'.vismappe($GLOBALS['setup']['datamappe'] . '/' . $GLOBALS['setup']['downloadmappe']).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
