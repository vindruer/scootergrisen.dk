<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "kølingssystemer på knallert/scooter moterer";
$overskrift = "kølingssystemer på knallert/scooter moterer";
$metadescription = "information om forskellige kølingssystemer som findes på scootere";

$databasecenter = array(

'
passiv luftkøling
' => '
Motoren køles af den forbipasserende luft når scooteren køre.
'.visbilled('1', 'billed0148.jpg', 'passiv luftkøling', false, true).'
'

,'
tvunget blæsekøling
' => '
Dette er den mest udbredte kølemetode på 50 cm³ scootere.

Et blæsehjul på svinghjulet suger luft ind under blæserskjoldet.
'.visbilled('1', 'billed2604.jpg', 'blæserskjold', false, true).'
'.visbilled('1', 'billed2605.jpg', 'blæserhjul', false, true).'
Luften blæser omkring cylinder og topstykke for at køle motoren.
'.visbilled('1', 'billed2606.jpg', 'karburator indsugningsstuds blæserskjold', false, true).'
'.visbilled('1', 'billed3029.jpg', 'blæser og køleribber', false, true).'
'.visbilled('1', 'billed2627.jpg', 'blæserskjold på motor tegning', false, true).'
På denne motor blæses luften ud under motoren på udstødningsrøret.
'.visbilled('1', 'billed2607.jpg', 'ventildæksel reed valve udstødningsrør blæserskjold', false, true).'
'.visbilled('1', 'billed2608.jpg', 'udstødningsrørs under motor blæserudstødning', false, true).'
På denne motor blæses luften ud af siden og under motoren.
'.visbilled('1', 'billed2790.jpg', 'motor udblæsning og udstødningsrør', false, true).'
'.visbilled('1', 'billed3005.jpg', 'motor udblæsning og udstødningsrør', false, true).'
'.visbilled('1', 'billed2609.jpg', 'CY 50 2 takt motor tegning', false, true).'
'

,'
væskekøling
' => '
Topstykke og cylinder indeholder kølervæske som cirkuleres af en vandpumpe til en radiator hvor væsken køles af vinden og/eller en blæser.

Læg mærke til slangen på topstykket som går til øverst på køleren, nederst på køleren en anden slage som går til pumpen og endnu en slange fra pumpen til cylinderen.
'.visbilled('1', 'billed3908.jpg', 'væskekølet motor', false, true).'

Vandpumpen hjælper med at cirkulerer kølervæsken.
'.visbilled('1', 'billed0152.jpg', 'vandpumpe', false, true).'
Kølervæske fra radiatoren kommer fra den yderste slange ind midt på rotoren og bliver slynget ud til den inderste slange.
'.visbilled('1', 'billed1544.jpg', 'vandpumpe', false, true).'
'.visbilled('1', 'billed1545.jpg', 'vandpumpe', false, true).'
Den inderste slange kan være forbundet på cylinderen hvor kølervæsken strømmer i en "water jacket" omkring cylinderen og i topstykket.
'.visbilled('1', 'billed0642.jpg', 'væskekølet motor', false, true).'
Kølervæsken absorbere noget af varmen fra motoren og strømmer videre til en termostat som enten sidder i topstykket eller i et termostathus.

Her ses et termostathus.
'.visbilled('1', 'billed1549.jpg', 'kølervæske temperatur måler', false, true).'

I termostathuset sidder termostaten.
'.visbilled('1', 'billed1548.jpg', 'termostathus', false, true).'
Her ses termostaten.
'.visbilled('1', 'billed0149.jpg', 'termostat', false, true).'
Termostatien er en ventil som åbner og lukker alt efter hvor varm kølevæsken er.
Termostaten åbner og lukker for cirkulationen af kølevæske.

Når motoren er kold er termostaten lukket. Det holder kølervæsken stille inden omkring topstykke og cylinder indtil motoren har opnået optimal arbejdstemperatur.

Når kølervæsken bliver cirka 70-80 °Celsius begynder termostaten at åbne sig så noget af den varme kølervæske kan komme ud.
Ved cirka 100 °Celsius er termostaten helt åben.

Her ses en temperatursensor som måler kølervæskens temperatur.
'.visbilled('1', 'billed1534.jpg', 'kølervæske temperatur måler', false, true).'
Temperatursensoren kan være placeret på topstykket eller på termostathuset.
Temperatursensoren sidder på den side af termostathuset hvor kølervæsken er varmest.

Kølervæskens temperatur kan på nogle scootere ses på instrumentpanelet hvor der er en viser eller der kan være en lampe som lyser hvis temperaturen bliver for høj.
'.visbilled('1', 'billed0151.jpg', 'kølervæske temperatur måler', false, true).'
H = Hot = Varmt.
C = Cold = Koldt.

Efter termostaten strømmer kølervæsken videre til radiatoren.

Radiatoren kan sidde forrest på scooteren og være forsynet med en elektrisk blæser eller den kan sidde på højre side af motoren hvor svinghjulet/blæserhjulet bruges som blæser.
'.visbilled('1', 'billed2880.jpg', 'radiator forrest på scooter', false, true).'
'.visbilled('1', 'billed2808.jpg', 'radiator og blæser forrest på scooter', false, true).'
'.visbilled('1', 'billed1535.jpg', 'radiator blæser', false, true).'
Den varme kølervæske kommer ind øverste på radiatoren og passere gennem nogle smalle aflange rør med kølefinner imellem.
'.visbilled('1', 'billed1539.jpg', 'radiator finne og rør', false, true).'
Når scooteren køre eller blæseren er tændt vil vinden blæse gennem radiatorens kølefinner.
Vinden absorbere noget af varmen og dermed køles kølervæsken.

'.visbilled('1', 'billed1540.jpg', 'radiator blæser køling', false, true).'
Nederst på radiatoren sendes den afkølede kølervæske tilbage til vandpumpen og cirkulationen starter forfra.
'.visbilled('1', 'billed2809.jpg', 'radiator slanger', false, true).'

På radiatoren sidder en termokontakt som tænder og slukker for blæseren alt efter hvor varm kølervæsken er.
Hvis kølervæsken i radiatoren for eksempel bliver 100 °Celsius så starter blæseren.
'.visbilled('1', 'billed1536.jpg', 'radiator thermal switch', false, true).'

En reservetank indeholder en variende mængde kølevæske.
'.visbilled('1', 'billed0153.jpg', 'kølervæske trykdæksel', false, true).'

Reservetanken er med en slange forbundet med toppet af radiatoren/trykdækslet.
'.visbilled('1', 'billed1551.jpg', 'kølervæskebeholder', false, true).'
Kølervæske niveauet i reservetanken variere alt efter kølervæskens temperatur.

Kølervæskens kogepunkt øges ved at kølervæsken holdes under tryk.
Ved normalt tryk (atmosfærisk tryk) skulle kølervæskens kogepunkt være cirka 100 °Celsius.
Under tryk skulle kølervæskens kogepunkt kunne øges til for eksempel 125 °Celsius.

Der kan sidde et trykdæksel på radiatoren, reservetanken eller i nærheden.
Trykdækslet sørger for at holde et bestemt tryk i kølesystemet.

Her ses et tværsnit af et trykdæksel.
'.visbilled('1', 'billed1541.jpg', 'trykdæksel', false, true).'
Når kølervæsken opvarmes så udvidder kølervæsken sig og trykdækslet åbner og lukker noget kølervæske ud til kølervæskebeholderen.
'.visbilled('1', 'billed1542.jpg', 'trykdæksel', false, true).'
Når motoren slukkes og kølervæsken afkøles så trækker kølervæsken sig sammen også suges der kølervæske fra reservetanken ind gennem trykdækslet.
'.visbilled('1', 'billed1543.jpg', 'trykdæksel', false, true).'

Ved at holde kølervæsken under tryk skulle man undgå at kølervæsken fordamper samtidig med at der bliver bedre køling vist nok.

På nogle scooter bruges kølervæsken også til at varme karburatoren som så er forbundet med vandpumpen med en ekstra slange.

Læs om '.ahref('smorelse.php#kolerveske', 'Kølervæske').'

Her ses Yamaha Giggle hvor blæser og køler er placeret på højre side af motoren.
'.visbilled('1', 'billed0150.jpg', 'yamaha giggle generator blæser køler', false, true).'
Her ses køleren på Yamaha Neos.
'.visbilled('1', 'billed1013.jpg', 'yamaha neos køler', false, true).'
Her ses kølesystemet på Honda Zommer (med karburator).
'.visbilled('1', 'billed1550.jpg', 'honda zoomer kølesystem', false, true).'

'.afsnit('væskekølede scootere','
Så vidt jeg ved er de eneste væskekølede 4 takt 50 cm³ scootere der kan fås i danmark...
Yamaha Giggle
Yamaha Neos
Honda Zoomer
').'

'.afsnit('engelsk','
coolant = kølervæske
impeller = rotor i vandpumpe
').'
'

,'
oliekøler
' => '
Her ses en oliekøler fra en PGO T-Rex 150 cm³.
'.visbilled('1', 'billed2484.jpg', 'PGO T-Rex CP150 oliekøler', false, true).'
Her kan man se hvor slangerne er forbundet.
'.visbilled('1', 'billed2486.jpg', 'oliekøler slager', false, true).'

Jeg ved ikke om der overhovedet findes nogen 50 cm³ scootere med oliekøler på som standard men man kan i hvert fald  købe en oliekøler man selv kan sætte på.

Her ses et oliekøler sæt man kan købe og selv montere.
'.visbilled('1', 'billed0772.jpg', 'oliekøler', false, true).'
Her er sættet monteret på en Honda Zoomer.
'.visbilled('1', 'billed2487.jpg', 'oliekøler', false, true).'
'.visbilled('1', 'billed2991.jpg', 'oliekøler diagram', false, true).'
'

,'
ekstra billeder
' => '
Her ses en vandpumpe til en VGA Mover.
'.visbilled('1', 'billed3440.jpg', 'VGA Mover vandpumpe', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
