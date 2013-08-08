<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "oliepumpe - 2 takt motor";
$overskrift = "oliepumpe - 2 takt motor";
$metadescription = "forklaring af oliepumpen som sidder på en 2 takt motor som pumper olie fra olietanken ind til omkring indsugningsstuden hvorefter olien kan smørre motordelene";

$databasecenter = array(

'
oliepumpe
' => '
Denne side handler om oliepumpen som kan findes i en 2 takt motor.

'.kontaktmig(1).' gerne hvis du vil har billeder af oliepumper som jeg må bruge på hjemmesiden.

Oliepumpen får olie gennem den tykkeste slange fra olietanken.
Når motoren køre pumpes olien gennem den tynde slange til karburator, indsugningsstuds eller motorblok hvor den kommer ind i krumtaphuset og smørre motorens bevægelige dele.

Her ses en oliepumpe som vist nok kaldes en intern oliepumpe eller gear drevet oliepumpe.
'.visbilled('1', 'billed0919.jpg', 'oliepumpe', false, true).'
Denne type oliepumpe drives af et plastik tandhjul på krumtapakslen.
'.visbilled('1', 'billed1355.jpg', 'oliepumpe', false, true).'
Her ses en oliepumpe som er drevet af en tandrem fra krumtapakslen.
'.visbilled('1', 'billed3266.jpg', 'oliepumpe', false, true).'

Her ses en oliepumpe som vist nok kaldes en ekstern oliepumpe eller aksel drevet oliepumpe.
'.visbilled('1', 'billed0920.jpg', 'oliepumpe', false, true).'
'.visbilled('1', 'billed1441.jpg', 'oliepumpe', false, true).'
Her ses den eksterne oliepumpe monteret oppe fra.
'.visbilled('1', 'billed1440.jpg', 'oliepumpe motor', false, true).'
Oliepumpens aksel går gennem et hul i motorblokken og tænderne får kontakt med krumtapakslen som driver oliepumpen rundt.
'.visbilled('1', 'billed1442.jpg', 'oliepumpe', false, true).'

Oliepumpen kan enten være kabelbetjent eller automatisk.

På kabelbetjente oliepumper styres oliemængden af gaskablet gennem en kabelsplitter så både karburator og oliepumpe åbner samtidig når gashåndtaget drejes.
'.visbilled('1', 'billed1452.jpg', 'gaskabel med kabelsplitter', false, true).'
'.visbilled('1', 'billed3022.jpg', 'gaskabel med kabelsplitter', false, true).'
På denne scooter pumpes olien til indsugningsstudsen.
'.visbilled('1', 'billed2691.jpg', 'slange fra oliepumpe til indsugningsstuds', false, true).'
På denne scooter pumpes olien til karburatoren.
'.visbilled('1', 'billed3004.jpg', 'leader karburator på Leone Swan', false, true).'
Kabelbetjente oliepumper skal være justeret korrekte så motoren får den rigtige mængde olie.

Hvis man juster gåshandtagets spillerum ved styret så skal man bagefter justere oliepumpen hvis det er en kabelbetjent oliepumpe.

Der sidder 2 justeringsmærker som skal stå ud for hinanden når gashåndtaget er enten sluppet eller fuldt drejet.
'.visbilled('1', 'billed3281.jpg', 'oliepumpe justeringsmærker', false, true).'
'.visbilled('1', 'billed3267.jpg', 'oliepumpe justeringsmærker', false, true).'
'.visbilled('1', 'billed2907.jpg', 'oliepumpe justeringsmærker', false, true).'
'.visbilled('1', 'billed1203.jpg', 'oliepumpe justeringsmærker', false, true).'
'.visbilled('1', 'billed3400.jpg', 'oliepumpe justeringsmærker', false, true).'

Måske er der nogen oliepumper hvor der ikke er justeringsmærker.

Her ses at der er en stopper som den drejelige del kan hvile mod.
'.visbilled('1', 'billed2519.jpg', 'stopper på oliepumpe', false, true).'

Her ses kablet til oliepumpen øverst til højre.
'.visbilled('1', 'billed3012.jpg', 'leone swan motor nedefra udstødning oliepumpe', false, true).'
Her er et lille vindue så kan man måske justere oliepumpen uden at afmontere noget.
'.visbilled('1', 'billed3013.jpg', 'leone swan oliepumpe justeringsmærke', false, true).'

Hvis oliepumpen er med automatisk styring af oliemængde kaldes det vist en centrifugal pumpe.

Der kan sidde en udluftningsskrue på oliepumpen til at lukke luft ud af oliepumpen.
'.visbilled('1', 'billed2789.jpg', 'oliepumpe udluftningsskrue', false, true).'
'.visbilled('1', 'billed3282.jpg', 'oliepumpe justeringsmærker', false, true).'
Sørg først for at der ikke er luft i slangen fra olietanken og i oliefilteret.
Monter slangen på oliepumpen.
Løsn udluftningsskruen og vent til der kommer olie ud uden luft i og stram skruen igen.
Afmonter olieslangen ved indsugningsstuden/karburatoren.
Drej tændingslåsen til OFF.
Træd på kickstarteren indtil der flyder olie ud af slangen uden luft.
Monter igen slangen på indsugningsstuden/karburatoren.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
