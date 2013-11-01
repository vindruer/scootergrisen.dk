<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "kulstof beholder - Luftfilter og udstødning";
$overskrift = "kulstof beholder - Luftfilter og udstødning";
$metadescription = "forklaring af den kulstof beholder der findes på nogen scootere som suger benzindamper";

$databasecenter = array(

'
kulstof beholder
' => '
På nogle scootere findes en beholder med aktivt kulstof.
Kulstof beholderen kaldes "charcoal canister" på engelsk.

Det aktive kulstof i beholderen opsuger benzindampe fra benzintanken.
Når motoren køre så åbner "purge control valven" på grund af vakuum i indsugningsstudsen og benzindampe i det aktive kul suges ind sammen med frisk luft.

På scootere med kulstof beholder slutter benzindækslet helt tæt.

Her ses systemet fra en Sym Mio.
'.visbilled('1', 'billed0217.jpg', 'kulstof beholder kredsløb', false, true).'
Når motoren køre vil vakuumet i indsugningsstudsen åbne "purge control valve".
Når "purge control valve" er åben kan benzindampene fra kulstof beholderen suges ind ved karburatoren.
Så vidt jeg kan se fungere "purge control valve" ligesom en automatisk benzinhane.

Her ses systemet fra en Piaggio Fly 150 cm³.
'.visbilled('1', 'billed0212.jpg', 'kulstof beholder kredsløb', false, true).'
"Roll-over valve" lukker hvis scooteren vælter sådan at benzin fra benzintanken ikke løber ind i kulstofbeholderen.
Når der bruges benzin fra bentanken så tillader "Roll-over valve" at samme mængde luft kan komme ind i benzintanken.
'.visbilled('1', 'billed0028.jpg', 'kulstof beholder roll-over valve sikkerhedsventil safety valve', false, true).'
Sikkerhedsventilen virker begge veje.
Det et eller andet med at luften suges hen til indsugningsstudsen når vakuumet er over 200mbar.
Det vist noget med at vakuumet ikke er så stort i tomgang så her er sikkerhedsventilen lukket.
'.visbilled('1', 'billed0373.jpg', 'kulstof beholder roll-over valve sikkerhedsventil safety valve', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
