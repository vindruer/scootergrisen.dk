<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "modstande - Elektrisk";
$overskrift = "modstande - Elektrisk";
$metadescription = "elektriske modstande der sidder en eller to af på nogle scootere og bruges når forlyset slukkes og af den automatiske choker";

$databasecenter = array(

'
modstande
' => '
Her ses en Giantco Sprint med 2 modstande.
Den lange er på 30 Watt 5,9 Ω.
Den korte er på 5 Watt 5 Ω.
'.visbilled('1', 'billed2511.jpg', 'giantco sprint modstande', false, true).'
Den lange modstand bruges når man slukker forlyset.
Den korte modstand bruges af den automatiske choker.

'.afsnit('modstand til forlys','

Når man slukket for forlyset så hverken nærlys eller positionslys er tændt går elektriciteten igennem en modstand som har samme modstand som forlyset.

På nogle scootere får både lys og batteri strøm fra den samme spole i generatoren.

Hvis der ikke var nogen lys modstand og man slukkede for forlyset så ville det påvirke batteri opladningen som ville blive ustabil.
Når forlyset slukkes så går strømmen igennem modstanden som på den måde holder batteri opladningen stabil.

På Kymco Agility er lysmodstanden på 30 watt 7,5 Ω.
På Kymco Super 8 4T er der ikke nogen modstand til forlyset fordi der bruges en lys kontrol boks.
På scootere hvor det ikke er muligt at slukke forlyset er der ikke nogen lysmodstand.
').'

'.afsnit('modstand til automatisk choker','
Her ses en 5 watt 12 Ω modstand fra en Kymco Super 8.
'.visbilled('1', 'billed0002.jpg', 'karburator modstand fra kymco super 8', false, true).'
Modstanden til den automatiske choker gør at den automatiske choker ikke lukker så hurtigt ved at den ikke får så meget strøm som den ville uden modstanden.

Modstanden sidder i forbindelse mellem den automatiske choker og strømkilden.
Strømkilden kan være generatoren eller batteriet.

På de fleste scootere får den automatiske choker strøm fra generatoren.
'.visbilled('1', 'billed1249.jpg', 'karburator modstand', false, true).'
'.visbilled('1', 'billed2733.jpg', 'karburator modstand', false, true).'

På Kymco Super 8 4T får den automatiske choker strøm fra batteriet (jævnstrøm).
På Kymco Super 8 4T sidder modstanden i forbindelse mellem CDI og den automatiske choker.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
