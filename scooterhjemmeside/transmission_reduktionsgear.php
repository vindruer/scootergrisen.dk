<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "reduktionsgear - Transmission";
$overskrift = "reduktionsgear - Transmission";
$metadescription = "forklaring af scooterens reduktionsgear som reducer omdrejningerne fra variatoren til baghjulet";

$databasecenter = array(

'
reduktionsgear
' => '
Reduktionsgearet sidder helt bagerst på motorblokken.
'.visbilled('1', 'billed0970.jpg', 'variator koblingsklokke reduktionsgear', false, true).'
Reduktionsgearet består af aksler med tandhjul der forbinder koblingsklokken med baghjulet.
'.visbilled('1', 'billed0568.jpg', 'reduktionsgear', false, true).'
'.visbilled('1', 'billed1244.jpg', 'reduktionsgear', false, true).'
'.visbilled('1', 'billed0570.jpg', 'kymco super 8 reduktionsgear', false, true).'

Reduktionsgearet gør så baghjulet ikke drejer så hurtigt rundt.

Her ses reduktionsgearet fra Kymco Super 8.
'.visbilled('1', 'billed0569.jpg', 'kymco super 8 reduktionsgear', false, true).'
'.visbilled('1', 'billed2635.jpg', 'kymco super 8 reduktionsgear', false, true).'
Gearolien ligger i bunden og samles op af tandhjulene når de drejer rundt og smører vel så også kuglelejerne.
'.visbilled('1', 'billed2639.jpg', 'kymco super 8 reduktionsgear', false, true).'

Her ses reduktionsgearet fra Kymco Agility.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3800.jpg', array('Kymco Agility motor', 'adskildt reduktionsgear'))
   ,galleri('highslide', '', 'billed3801.jpg', array('Kymco Agility motor', 'reduktionsgear tandhjul'))
   ,galleri('highslide', '', 'billed3802.jpg', array('Kymco Agility motor', 'afmonterede tandhjul'))
   ,galleri('highslide', '', 'billed3803.jpg', array('Kymco Agility motor', 'motorblok'))
   ,galleri('highslide', '', 'billed3806.jpg', array('Kymco Agility motor', 'reduktionsgearhus'))
   ,galleri('highslide', '', 'billed3807.jpg', array('Kymco Agility motor', 'reduktionsgearhus med tandhjul'))
))
.'

Reduktionsgearet har gerne 3 aksler selvom jeg har også set nogen med 2.
De hedder på engelsk "drive shaft", "counter shaft" og "final shaft".

Her ses "drive shaft". Den forreste aksel.
'.visbilled('1', 'billed2636.jpg', 'reduktionsgear tandhjul og aksler', false, true).'
Her ses "counter shaft". Den midterste aksel.
'.visbilled('1', 'billed2637.jpg', 'reduktionsgear tandhjul og aksler', false, true).'
'.visbilled('1', 'billed2641.jpg', 'reduktionsgear tandhjul og aksler', false, true).'
Her ses "final shaft". Den bagerste aksel.
'.visbilled('1', 'billed2638.jpg', 'reduktionsgear tandhjul og aksler', false, true).'
'.visbilled('1', 'billed2640.jpg', 'reduktionsgear tandhjul og aksler', false, true).'

'.visflash('0', "http://www.youtube.com/v/ZOnGeRYRpCQ", 'hvis man skubber scooteren så vil baghjulet få tandhjulene i reduktionsgearet og koblingsklokken til at dreje med. Det er derfor en scooter er tung at skubbe', true).'
'.afsnit('Reduktions ratio','
Der opgives i nogle manualer en reduktions ratio.

For eksempel:
Første reduktion : 3,25.
Anden reduktion : 3,4.

Jeg tror dette betyder at når koblingsklokkeakslen har drejet 3,25 omgange så har den midterste aksel drejet 1 omgang.
Og når den midterste aksel har drejet 3,4 omgange så har baghjulsakslen drejet 1 omgange.
Det må betyde at når koblingsklokken har drejet 11,05 omgange så har baghjulet drejet 1 omgang.

Ved at skifte tandhjulene kan man opnå en anden gear ratio som så må give en anden acceleration/topfart.
').'

Øverst på reduktionsgearet er der et hul som er forbundet med luftfilteret gennem en slange. Hullet gør så der ikke kan opstå tryk/vakuum i rummet med reduktionsgearet.
'.visbilled('1', 'billed1377.jpg', 'reduktionsgear udluftningsslange', false, true).'
'.visbilled('1', 'billed3747.jpg', 'reduktionsgear udluftningsslange', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
