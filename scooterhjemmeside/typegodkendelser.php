<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$setup['nogetikon']               = 'ikoner/ikon_typegodkendelser.png';

$title = "typegodkendelser";
$overskrift = "typegodkendelser";
$metadescription = "typegodkendelser fra trafikstyrelsen til scootere/knallerter som højst må køre 30 og 45 km/t";

$databasecenter = array(

'
introduktion
' => '
<div style="float: left; margin: 30px;">'.visbilled('1', 'billed2612.jpg', 'typegodkendelse', false, true).'</div>'
.'<div>Her på siden er typegodkendelser 2 takt og 4 takt 50 cm³ scootere og elektriske scootere.

Typegodkendelserne stammer fra færdselsstyrelsens hjemmeside.

'.ahref('http://www.fstyr.biltorvet.dk/WebForm1.aspx', 'Gå direkte til færdselsstyrelsens typegodkendelser').'.

Typegodkendelser indeholder information om en bestemt scooter/knallert model.
Information om anmelderen, mærke, model, hastighed, fabrikantkode, begrænsninger, vægt, dimensioner, motor type, fælg, dæk og andet.

Det variere hvor meget information der er i typegodkendelserne og det er ikke alle modeller jeg har kunne finde en typegodkendelse til da færdselsstyrelsen ikke har en komplet liste med typegodkendelser.

For det meste er der separate typegodkendelse for en 25, 30 km/t (lille knallert) og 45 km/t (stor knallert) selvom de næsten indeholder samme information.

<mark>fstyr.dk skulle have skrevet til en anden på nettet at det ikke er hensigten at godkendelser på invalideknallerter er tilgængelige på internettet.
Så det kunne forklarer hvorfor der er nogen scootere jeg ikke kan finde typegodkendelser på hos fstyr.dk.
En invalideknallerter er dem med 3 hjul.</mark>
<div class="clearboth"></div>
</div>
'

,'
filer
' => '
'.vismappe($GLOBALS['setup']['datamappe'] . '/' . $GLOBALS['setup']['downloadmappe'] . '/' . 'typegodkendelser').'
'


);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
