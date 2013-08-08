<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "kontakter - Elektrisk";
$overskrift = "kontakter - Elektrisk";
$metadescription = "lær om elektriske kontakter på en scooter som lyskontakter, støttebenskontakt og tændingslås";

$databasecenter = array(

'
kontakter
' => '
Her ses kontakterne på en Kymco Super 8.
'.visbilled('1', 'billed0401.jpg', 'kontakter kortlys langtlys blinklys horn positionslys tænd sluk starter knap', false, true).'
På langtlys/kortlyst vælgeren står der PASSING som åbenbart bruges i nogle lande til at give et blinke med det langelys for at vise at man har tænkt sig at overhale.
Når man trykker ned hvor der står PASSING så kommer knappen selv op igen.
'.visbilled('1', 'billed0868.jpg', 'kort og langtlys kontakt', false, true).'
'.visbilled('1', 'billed0869.jpg', 'kort og langtlys kontakt', false, true).'
'.visbilled('1', 'billed2341.jpg', 'kort og langtlys kontakt', false, true).'

'.visbilled('1', 'billed0872.jpg', 'lyskontakt', false, true).'
'.visbilled('1', 'billed0873.jpg', 'lyskontakt starter knap kabler ledning', false, true).'
'.visbilled('1', 'billed0876.jpg', 'lyskontakt', false, true).'
'.visbilled('1', 'billed0875.jpg', 'lyskontakt', false, true).'
'.visbilled('1', 'billed2010.jpg', 'starter knap', false, true).'
'.visbilled('1', 'billed0874.jpg', 'starter knap', false, true).'
'

,'
bremsekontakt
' => '
' . ahref('bremser.php#bremsekontakt', 'Bremsekontakt') . '
'

,'
støttebenskontakt
' => '
' . ahref('stotteben.php#stottebenskontakt', 'Støttebenskontakt') . '
'

,'
tændingslås
' => '
Tændingslåsen er der hvor du sætter nøglen i og drejer får du starter motoren.

Her ses tændingslåsen på en Kymco Super 8.
'.visbilled('1', 'billed0402.jpg', 'tændingslås', false, true).'
Ved LOCK og OFF position bliver CDI og pickup forbundet med stelforbindelsen.

Ved ON position bliver batteriets + terminal forbundet med scooterens elektriske systemer som spændingsregulator, CDI, automatisk choker, blinklys relæ, lys kontakt, for og bagbremse stop kontakter og benzinviser.
'.visbilled('1', 'billed1892.jpg', 'tændingslås', false, true).'
'.visbilled('1', 'billed1893.jpg', 'tændingslås', false, true).'
'.visbilled('1', 'billed1897.jpg', 'tændingslås', false, true).'
Her ses stikket til tændingslåsen. 
'.visbilled('1', 'billed1898.jpg', 'tændingslås', false, true).'
Ud over at virke som en kontakt virker tændinglåsen også som en lås... surprice.
Men det er en ret dårlig lås og den er nem at bryde op så det er en dårlig ide kun at låse sin scooter med tændingslåsen.
'.visbilled('1', 'billed1894.jpg', 'tændingslås', false, true).'
'.visbilled('1', 'billed2316.jpg', 'tændingslås', false, true).'
'.visbilled('1', 'billed2317.jpg', 'tændingslås', false, true).'
På min tændingslås sad ledningerne løst fra lodningerne hvilket ikke er godt når man har flyttet rundt på ledningerne tilpas mange gange kan de knække af ved lodningerne.
'.visbilled('1', 'billed1989.jpg', 'tændingslås', false, true).'
Så jeg lavede nogle huller og satte ledningerne fast med nogle strips.
'.visbilled('1', 'billed2319.jpg', 'tændingslås', false, true).'

Gad vide hvad den her dut er til.
'.visbilled('1', 'billed2318.jpg', 'tændingslås', false, true).'
På nogen scootere kan man også åbne sædelåsen ved tændingen. Så er der et kabel fra tændingslåsen til låselåsen. Måske er det det dutten er til. Eller ej.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
