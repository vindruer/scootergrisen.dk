<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "tænding - Service";
$overskrift = "tænding - Service";
$metadescription = "service af tænding på scooter (kontroller tændingstiming, tidlig tænding, justering af kontaktsæt)";

$databasecenter = array(

'
kontroller tændingstiming
' => '
Jeg har ikke selv prøvet dette så ved ikke om det er helt rigtigt.
'.kontaktmig(1).' gerne hvis du kan bekræft at det følgende er korrekt eller hvis du ser nogen fejl.

Kig i scooterens servicemanual og find ud af hvor mange o/min motoren skal køre med i tomgang og ved "full advance".
Det kan for eksempel være 1700 o/min ved tomgang og 3800 o/min ved "full advance".

Tændingstiming styres på de fleste scootere af en CDI boks og kan ikke justeres.
Men tændingstimingen kan kontrolleres for at udelukke fejl på CDI boksen.

For at kontroller tændingstimingen skal man bruge en stroboskoplampe.
'.visbilled('1', 'billed0812.jpg', 'stroboskoplampe', false, true).'

Man skal muligvis også bruge en omdrejningstæller som viser hvor mange o/min motoren køre med.

Varm motoren op ved at køre en tur på mindst 5 minutter.
Sluk motoren.
Sæt scooteren på centerstøtteben et sted hvor baghjulet ikke rør jorden.
Fjern blæserskjoldet på højre side af motoren ved svinghjulet.

Sæt stroboskoplampens induktive tang omkring tændrørskablet.
Pilen på tangen skal vende mod tændrørshætten (ellers kan den blinke ukonstant).

Sæt stroboskoplampens 2 små ledninger på et 12 volt batteri.
Jeg har læst at man ikke skal bruge scooterens eget batteri til stroboskoplampen da det kan give forkert resultat på grund af "løse" impuls signaler i scooterens elektriske system.
En bruger har skrevet at der normalt ikke er noget i vejen med at bruge køretøjets eget batteri.

Start motoren og lad den køre i tomgang.
Stroboskoplampen skulle gerne begynde at blinke når du holder aftrækkeren inde.
Stroboskoplampen giver et lysglimt hver gang tændrøret giver gnist.

Peg stroboskoplampen på hakket i motorblokken.

Stregen ved F mærket på svinghjulet skal være ud for hakket i motorblokken når motoren køre i tomgang.
'.visbilled('1', 'animation0012.gif', 'svinghjul mærker', false, true).'
Juster eventuelt tomgangen til det som oplyses i scooterens manual ved at bruge omdrejningstælleren, for eksempel 1700-1900 o/min.
Hvis tomgangen er indstillet korrekt og hakket peger på F mærket så virker tændingstimingen korrekt i tomgang.

Drej langsomt på gashåndtaget.

Når motorens omdrejninger øges vil tændrøret give gnist tidligere og mærkerne på svinghjulet vil flytte sig.

Hold motoren kørende ved det antal omdrejninger der er oplyst i scooterens servicemanual ud for "full advance".
For eksempel kan det være 3800 o/min.

Ved "full advance" skal hakket i motorblokken være mellem de 2 sidste mærker på svinghjulet.

Bag på tændingspistolen kan være en skala og en knap man kan dreje.
Denne knap bruges til at måle graderne hvor der tændes.

Når motoren køre i tomgang drejer man på knappen så lampen blinke ved T mærket.
Så viser det for eksempel på skalaen at i tomgang avancer tændingen med 10 grader.

Hvis man drejer knappen til 0 grader i tomgang skulle lampen blinke ved F mærket (her er stemplet helt i top).

Køre man motoren op i omdrejninger til den ikke avancer mere og dreje knappen til lampen blinker på T mærket så kan man se på skalaen hvor mange grader tændingen avancer. For eksempel 26 grader.

'.afsnit('Eksempel fra Piaggio Fly 150 cm³','
'.visbilled('1', 'billed0612.jpg', 'tændings timing', false, true).'
Ved tomgang (1700 o/min) skal hakket pege på linien ved F mærket.
Ved "full advance" (6000 o/min) og derover skal hakket pege mellem de 2 sidste mærker.
').'

'.afsnit('Eksempel fra Kymco Super 8 4T','
Ved tomgang (1700 o/min) skal hakket pege på linien ved F mærket og krumtapakslen er her drejet 13 grader før TDC.
Ved "full advance" (3800 o/min) og derover skal hakket pege mellem de 2 sidste mærker og krumtapakslen er her 28 grader før TDC.
').'
'

,'
tidlig tænding
' => '
CDI boksen er programmeret til at vente en bestemt tid fra den modtager signal fra pickupen og til den aflader kondensatoren til tændspolen.

Hvor tidligt tændrøret giver gnist afhænger af hvor mange o/min motoren køre med.

Denne kurve kaldes på engelsk "ignition advance" kurve.

Her ses tændingskurven for en Piaggio Fly 150 cm³.
'.visbilled('1', 'billed0408.jpg', 'tændingskurve piaggio fly 150 cm³', false, true).'
Ud fra kurven kan vi se:
Ved 2000 o/min giver tændrøret gnist når krumtapakslen er drejet 10 grader før TDC.
Ved 6000 o/min giver tændrøret gnist når krumtapakslen er drejet 26 grader før TDC.

Ved at skifte CDI kan man ændre tidspunktet hvor tændrøret giver gnist.
man kan også købe justerbare CDI\'er hvor man manuelt kan indstille hvor tidligt tændrøret skal give gnist.

Tilpas tidlig tænding giver bedre motorydelse.
For tidlig tænding kan skade motoren.

Tændingstidspunktet kan også ændres ved at flytte pickupen i forhold til forhøjningen på svinghjulet.
'.visbilled('1', 'billed0274.jpg', 'advance ignition timing', false, true).'
Det er dog ofte lettere at skifte CDI boksen end at flytte pickupen.

Tændingstidspunktet kan også ændres ved at skifte "woodruff key" med en key som har en forskudt form.
'.visbilled('1', 'billed0688.jpg', 'woodruff key skivefeder', false, true).'

Når svinghjulet monteres på krumtapakslen så passer "woodruff key" ind i et hak i midten af svinghjulet.
'.visbilled('1', 'billed0822.jpg', 'svinghjul', false, true).'
Ved at bruge en forskudt "woodruff key" kan tændingspunktet blive lidt tidligere eller lidt senere end med en lige "woodruff key".
'

,'
justering af kontaktsæt
' => '
'.visbilled('1', 'billed2551.jpg', 'justering af kontaktsæt', false, true).'
'.visbilled('1', 'billed2553.jpg', 'kontaktsæt afstand', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
