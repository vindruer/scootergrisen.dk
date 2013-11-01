<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "gashåndtag - Elektrisk scooter";
$overskrift = "gashåndtag - Elektrisk scooter";
$metadescription = "information om det gashåndtag der sidder i elektriske scootere som typisk er elektrisk og ikke med kabel";

$databasecenter = array(

'
gashåndtag
' => '
Der findes flere forskeligge typer gashåndtag til elektriske scootere.
Ordet "gashåndtag" er vel nok misvisende på en elektrisk scooter. '.kontaktmig(1).' gerne hvis du har et bedre ord.

Her ses en EVT 4000e elektrisk scooter som bruger gashåndtag med wire.
Læg mærke til gaskablet under gashåndtaget ligesom på en scooter med forbrændingsmotor.
'.visbilled('1', 'billed3082.jpg', 'elektrisk scooter med gashåndtag og gaskabel', false, true).'
Kablet går ind i controlleren ved kobber skruen.
'.visbilled('1', 'billed3083.jpg', 'controller med gaskabel', false, true).'
Her ses en Peugeot Scoot\'elec hvor gaskabelet ender på en sensor.
'.visbilled('1', 'billed3125.jpg', 'gaskabel og sensor', false, true).'

Her ses et gashåndtag fra en Giantco E-buddy.
Stikket har 3 ledninger som forbindes med controlleren (grøn, rød, sort).
'.visbilled('1', 'billed1553.jpg', 'gashåndtag fra elektrisk scooter', false, true).'

Et gashåndtag med ledninger kan indeholde en variabel modstand eller en hall sensor.

Jeg ved endnu ikke så meget om det endnu.

'.afsnit('ledninger på gashåndtag (eksempel fra Lynx ZQTD-690 eldiagram)','
Rød : +5Volt.
Blå : - (stel).
Grøn : Signal (1,2 - 4,3 volt alt efter hvor meget håndtaget er drejet).

Alle ledningerne er forbundet til controlleren.
').'

'.afsnit('gashåndtag typer','
Mekanisk wire forbundet til sensor andet sted (for eksempel inde i controller).
Potentiometer 5K Ohm (3 ledninger) (fejl detektion)
Voltage (hall sensor) (3 ledninger) (ingen fejl detektion)
').'

Her ses et diagram for et 5K Ohm potentiometer gashåntag.
'.visbilled('1', 'billed3122.jpg', '5kohm potentiometer throttle diagram', false, true).'
'.afsnit('speed limit pot','
Et ekstra potientionmeter på for eksempel 100K Ohm kan fungere som topfarts begrænser.
').'

Her ses et diagram for et 5 volt gashåndtag.
'.visbilled('1', 'billed3123.jpg', '5volt throttle diagram', false, true).'

'.afsnit('gashåndtag signal typer','
Single-ended (maksimum hastighed = 5K Ohm eller 5 Volt)
Inverse single-ended (maksimum hastighed = 0 Ohm eller 0 Volt)
Wigwag
Inverse wigwag
').'

'.visbilled('1', 'billed3124.jpg', 'single ended wigwag gashåntag til elektrisk scooter', false, true).'

Her ses lidt af et eldiagram til Tisong TM-300 hvor man kan se at gashåndtaget er forbundet til controlleren.
Den røde ledning fra gashåndtaget gå gennem kickstarterkontakten så der kun er forbindelse når sidestøttebenet er slået op.
'.visbilled('1', 'billed3393.jpg', 'el diagram kickstand switch acceleratin handlebar controller', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
