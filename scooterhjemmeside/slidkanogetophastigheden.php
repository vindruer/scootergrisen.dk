<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "slid kan øge tophastigheden - Rodekassen";
$overskrift = "slid kan øge tophastigheden - Rodekassen";
$metadescription = "info om at jo mere slidt en scooter er jo større tophastighed man den muligvis have";

$databasecenter = array(

'
slid øger måske scooterens hastighed
' => '
Jeg så en video hvor der bliver fortalt at slid på den begrænsende ring i variatoren med tiden øger scooterens hastighed.

Det syntes jeg lyder lidt mærkeligt så jeg har undersøgt det på min egen scooter.

Der er ikke nogen ring på min scooter men i stedet en forhøjning på gliderøret som gør det samme.

Forhøjningen på dette gliderør er kun 0,7 mm høj.
Der er ikke noget slid at se på forhøjningen andet end lidt af kromet er faldet af kanten.
'.visbilled('1', 'billed2817.jpg', 'variator slid', false, true).'
Forhøjningen rammer en bøsning i remskiveskåle hvergang scooteren kommer op på cirka 20 km/t.
'.visbilled('1', 'billed2814.jpg', 'variator slid', false, true).'
Bøsningen i remskiven bliver slidt lidt.
'.visbilled('1', 'billed2815.jpg', 'variator slid', false, true).'
Slidet har jeg målt til 0,225 mm.
Man kan se slidet har presset metallet op i nogen spidser som jeg sikkert har målt på så måske er slidet faktiskt mindre.
'.visbilled('1', 'billed2816.jpg', 'variator slid', false, true).'
Nu har jeg ikke kørt med det gliderør med forhøjning heletiden så ved ikke hvor mange kilometer jeg har kørt med det.
Men et bud kunne være 5000 km som så har givet 0,225 mm slid på bøsningen i remskiven.

Forhøjningens længde er 8,72 mm.
Med slidet svarer det til at længden var 8,5 mm hvilket godt nok ville øge hastigheden men sikkert kun med 0,5 km/t.

Forskellen på gliderør med 8,72 mm forhøjning og glat gliderør er 20 km/t.
Det vil sige at 0,436 mm slid i gennemsnit svare til 1 km/t efter hvad jeg kan regne ud.



Efter at have kørt i lang tid med det begrænset gliderør og hvor der har været vibrationer i motoren kom bøsningen til at blive slidt sådan her.
Bøsningen er slidt cirka 3,5 mm ned fra hvor bøsningens kant var originalt.
'.visbilled('1', 'billed3555.jpg', 'variator slid', false, true).'
'.visbilled('1', 'billed3553.jpg', 'variator slid', false, true).'
'.visbilled('1', 'billed3556.jpg', 'variator slid', false, true).'
'.visbilled('1', 'billed3554.jpg', 'variator slid', false, true).'
Da bøsningen i remskiveskålen blev slidt mere og mere blev topfarten højere og højere.
Tror scooteren kunne køre 10 km/t hurtigere på grund af slidet.

Jeg ved ikke hvad vibrationerne i motoren skyldes. Men de blev stærkere og stærkere jo mere slidt delene blev.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
