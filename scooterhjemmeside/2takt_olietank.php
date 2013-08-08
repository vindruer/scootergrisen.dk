<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "olietank - 2 takt motor";
$overskrift = "olietank - 2 takt motor";
$metadescription = "forklaring af olietanken på en scooter med 2 takt motor";

$databasecenter = array(

'
olietank
' => '
På denne scooter fylder man olie på under gummilåget som er under sædet.
'.visbilled('1', 'billed2433.jpg', 'olietank dæksel', false, true).'
Her ses olietanken.
'.visbilled('1', 'billed2794.jpg', 'olietank', false, true).'
Her ses olietanken på en anden scooter.
'.visbilled('1', 'billed3275.jpg', 'olietank', false, true).'
Der kan sidde en aftagelig gummikant omkring påfyldningshullet som fanger eventuel oliespild når kan fylder olie på.
'.visbilled('1', 'billed2707.jpg', 'olietank dæksel', false, true).'
'.visbilled('1', 'billed1251.jpg', 'olietank oliepumpe karburator olie niveau kontakt', false, true).'
I olietanken sidder en kontakt med en svømmer som bevæge sig op og ned sammen med olieniveauet.
'.visbilled('1', 'billed2418.jpg', 'olietank kontakt', false, true).'
Når olieniveauet er lavt så lyser en rød lampe på instrumentpanelet for at fortælle at der skal fyldes mere olie på.
'.visbilled('1', 'billed1651.jpg', 'olielampe', false, true).'
Her sidder olietanken forrest under sædet hvor et skjold kan fjernes med scooterens nøgle.
'.visbilled('1', 'billed2440.jpg', 'olietank dæksel', false, true).'
'.visbilled('1', 'billed2788.jpg', 'olietank dæksel', false, true).'
På denne scooter fylder man olie på nederst i bagagerummet.
'.visbilled('1', 'billed2439.jpg', 'olietank dæksel', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
