<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "forbrændingskammer - 4 takt motor";
$overskrift = "forbrændingskammer - 4 takt motor";
$metadescription = "lær om forbrændingskammeret på en 4 takt motor på en scooter";

$databasecenter = array(

'
forbrændingskammer
' => '
Her ses topstykket med indsugningsventilen til venstre tændrøret foroven og udstødningsventilen til højre.
Indsugningsventilen er en smule større end udstødningsventilen.
'.visbilled('1', 'billed0589.jpg', 'forbrændingskammer topstykke', false, true).'
Og her efter lidt rengøring.
'.visbilled('1', 'billed0590.jpg', 'forbrændingskammer topstykke', false, true).'
Dette kaldes et "hemispheric" eller "semi-hemispheric" forbrændingskammeret fordi det er en afrundning ligesom det øverste på en større kugle.

Her ses stemplet og pakningen.
'.visbilled('1', 'billed0592.jpg', 'forbrændingskammer cylinder stempel', false, true).'
Der står IN øverst på stemplet (NI på hovedet) som indikere hvilken vej stemplet skal vende.
IN skal vende op til indsugningsventilen.
IN står for intake på engelsk som betyder indsugning på dansk.
Man kan også se at det øverste halvmåne mærke i stemplet er lidt større end det nederste da indsugningsventilen er lidt større end udstødningsventilen.
'.visbilled('1', 'billed0593.jpg', 'forbrændingskammer cylinder', false, true).'
Her ses et stempel som er ret sort på toppen.
Den sorte belægning skyldes måske at olieringen har klæbet sig fast i stemplet så den ikke så godt har kunne skrabe olie af cylindervægen.
'.visbilled('1', 'billed3158.jpg', 'stempel top', false, true).'

'.
galleriholder(array(
    galleri('highslide', '', 'billed3793.jpg', array('Kymco Agility motor', 'topstykke med rengjort forbrændingskammer'))
   ,galleri('highslide', '', 'billed3794.jpg', array('Kymco Agility motor', 'topstykke'))
))
.'
'.visflash('0', "http://www.youtube.com/v/sEf8va1S7Sw", 'Her ses ind i forbrændingskammeret', true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
