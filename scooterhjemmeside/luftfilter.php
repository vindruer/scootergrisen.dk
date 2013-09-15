<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "luftfilter - Luftfilter og udstødning";
$overskrift = "luftfilter - Luftfilter og udstødning";
$metadescription = "forklaring for luftfilteret på en scooter og dets tilslutninger";

$databasecenter = array(

'
introduktion
' => '
Luftfilterets primære opgave er at filtrere luften som suges ind i karburator og cylinder.
Hvis luften ikke filtreres ordentligt kan ting som sandkorn komme ind i karburator og cylinder hvor de kan tilstoppe dyser og slide på cylindervæg og stempelringe.

Her ses et luftfilter med svamp element.
'.visbilled('1', 'billed2375.jpg', 'pgo luftfilterkasse luftfilter element svamp', false, true).'

Her ses luftfilteret på en Peugeot Buxy.
'.visbilled('1', 'billed2655.jpg', 'peugeot buxy luftfilterkasse luftfilter element svamp', false, true).'
Her ses svamp elementet.
'.visbilled('1', 'billed2541.jpg', 'peugeot buxy luftfilterkasse luftfilter element svamp', false, true).'
Her er svampen taget ud.
'.visbilled('1', 'billed2654.jpg', 'peugeot buxy luftfilterkasse luftfilter element svamp', false, true).'

Her ses et luftfilter med vådt papir element.
'.visbilled('1', 'billed1525.jpg', 'kymco super 8 4T luftfilterkasse luftfilter', false, true).'
Her ses en splittet luftfilterkasse.
'.visbilled('1', 'billed0441.jpg', 'kymco super 8 4T luftfilter splittet tegning', false, true).'
Her ses luftfilterkassens tilslutninger.
'.visbilled('1', 'billed0009.jpg', 'kymco super 8 4T luftfiltkassens tilslutninger', false, true).'

Luftfilteret kan indeholde et lille separat rum med en svamp.
Dette lille rum er tilsluttet ventildækslet gennem en slange så krumtaphuset kan ånde så der ikke opstår tryk/vakuum som ville kunne nedsætte motorens ydelse.
På nogle scootere er slangen fra ventildækslet ikke tilsluttet noget.
'.visbilled('1', 'billed0049.jpg', 'motor blow-by gas slange ', false, true).'
Ventildækslets inderside har en plade med hul forneden.
Pladen kaldes for "breather system baffle plate" på engelsk.
'.visbilled('1', 'billed0208.jpg', 'ventildæksel', false, true).'
Under pladen er en labyrint som gør det svært for olien at komme op men stadig muligt for motoren at ånde.
'.visbilled('1', 'billed0213.jpg', 'ventildæksel', false, true).'

Slangen fra ventildækslet til luftfilteret er til for at genbruge "blow-by gas" så det suges ind i motoren igen.
"Blow-by gas" fra ventildækslet kommer ind til det lille rum og opsuges af en svamp.
Dampene separeres i det lille rum hvor genbruges ved igen at blive suget til karburatoren.
Fugt og olie i svampen løber ned i den gennemsigtige drænslange nederst på luftfilterkassen.

'.visbilled('1', 'billed0215.jpg', 'blow by', false, true).'
På denne 139FMB motor er der en slange bagerst på motoren så "blow-by gas" bare ledes ud i luften uden at blive genbrugt.
'.galleriholder(array(galleri('highslidestandard', 'billed3023.jpg', 'billed3023.jpg', '139FMB motor'))). '
Slangen kaldes crankvase breather tube på engelsk.

'.visbilled('1', 'billed1492.jpg', 'kymco super 8 4T luftfilterkasse', false, true).'
Gennem det lille hul suges dampe fra "blow-by gas" igen ind til karburatoren.
'.visbilled('1', 'billed1493.jpg', 'kymco super 8 4T luftfilterkasse', false, true).'
I bunden kan man se lidt olie som er kommet fra slangen på ventildækslet.
'.visbilled('1', 'billed1494.jpg', 'kymco super 8 4T luftfilterkasse', false, true).'

Her ses drænslange.
Drænslangen er gennemsigtig så man kan se om der er noget inden i.
'.visbilled('1', 'billed0482.jpg', 'drænslange fra luftfilter', false, true).'

Den sidste øverste slange på luftfilteret er forbundet med reduktionsgear rummet hvor gearolien er så der ikke opstår tryk eller vakuum i rummet.
'.visbilled('1', 'billed1489.jpg', 'kymco super 8 4T udluftningsslange til reduktionsgear', false, true).'
'.visbilled('1', 'billed3748.jpg', 'kymco super 8 4T udluftningsslange til reduktionsgear', false, true).'
'.visbilled('1', 'billed1487.jpg', 'kymco super 8 4T udluftningsslange til reduktionsgear', false, true).'
'.visbilled('1', 'billed1488.jpg', 'kymco super 8 4T hul i luftfilterkasse til udluftningsslange til reduktionsgear', false, true).'

På indsugningskanalen mellem luftfilterkassen og karburatoren kan der sidde en prop.
Jeg tror det er meningen at man så kan måle lufthastigheden eller på anden måde måle luften i forbindelse med at måle udstødningsgasserne for at finde ud af om forbrændingen foregår optimalt.
'.visbilled('1', 'billed0211.jpg', 'luftfilter dut', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
