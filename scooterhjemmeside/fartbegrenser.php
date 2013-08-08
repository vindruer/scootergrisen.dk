<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "fartbegrænser (politiværn)";
$overskrift = "fartbegrænser (politiværn)";
$metadescription = "har forsøger jeg og samle info om fartbegrænser til scootere/knallerter som med et tryk på en knap kan ændre topfarten";

$databasecenter = array(

'
fartbegrænser
' => '
Fartbegrænser kan også kaldes politiværn.

Der har været nogen brugere som har efterspurgt og søgt efter info om fartbegrænser.
Altså en boks hvor man kan nedsætte scooterens topfart.
Eventuelt hvor der er en knap så man kan slå fartbegrænseren til og fra.

Jeg har så meget info om fartbegrænser endnu men jeg samler det her hvis jeg finder noget.

Denne fartbegrænser er nok den jeg har set mest på nettet.
Det dur vist kun på en 2 takt scooter.
'.visbilled('1', 'billed3775.jpg', 'fartbegrænser', false, true).'

Der er vist sjældent der er nogen fartbegrænser der dur på en 4 takt men her er en fra '.ahref('http://www.scooter-spare-parts.de/shop/Drehzahlbegrenzer/DZB-4T-Roller-ohne-speedsensor/speedotronic-Drehzahlbegrenzer-Triplecheck-mit-Magnet-Taster::303.html', 'scooter-spare-parts.de').' der gør.
'.visbilled('1', 'billed3774.jpg', 'fartbegrænser', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
