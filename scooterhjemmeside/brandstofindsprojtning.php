<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "brændstofindsprøjtning";
$overskrift = "brændstofindsprøjtning";
$metadescription = "forklaring af brændstofindsprøjtningssystemer som findes på nogle scootere. DITech, PUREjet, TSDI, aSDI, PGM-FI, SePI";

$databasecenter = array(

'
brændstofindsprøjtning
' => '
I stedet for at bruge en karburator til at levere benzin til motoren kan man bruge brændstofindsprøjtning.

Brændstofindsprøjtning kaldes Fuel Injection (FI) på engelsk.

Fordelen ved brændstofindsprøjtning er lavere benzin forbrug og mindre forurening.

Der findes en håndfuld 50 cm³ scooter modeller i danmark som fås med brændstofindsprøjtning.

'.afsnit('4 takt 50 cm³ scootere med brændstofindsprøjtning','
Honda Vision
Honda Zoomer
Yamaha Giggle
Yamaha Neos
').'

'.afsnit('2 takt 50 cm³ scootere med brændstofindsprøjtning','
Aprilia SR DITech
Aprilia Scarabeo DITech
Piaggio NRG
Piaggio NRG MC3
Piaggio Runner
Peugeot Elystar
Peugeot Luxor
').'

'.afsnit('indsprøjtningssystemer','
Der bruges 2 forskellige typer indsprøjtningssystemer.
Direkte indsprøjtning og indirekte indsprøjtning.
').'
'

,'
direkte indsprøjtning
' => '
På motorer med direkte indsprøjtning sprøjtes benzinen direkte ind i forbrændingskammeret fra topstykket.
'.visbilled('1', 'billed0126.jpg', 'direkte brændstofindsprøjtning', false, true).'
Direkte indsprøjtning kaldes Direct Injection (DI) eller Direct Fuel Injection (DFI) på engelsk.
Derudover bruges også forskellige betegnelse alt efter producent.

Aprilia kalder deres system for DITech (Direct Injection Technology).
Piaggio kalder deres system for PUREjet (Piaggio Ultralow emission Research Engine).
Peugeot kalder deres system for TSDI (Two Stroke Direct Injection).

Direkte indsprøjtning bruges for eksempel på Aprilia SR DITech.

Her ses et direkte indsprøjtnings system kaldet aSDI (air-assisted Synerject Direct Injection) på en 2 takt motor.
'.visbilled('1', 'billed0395.jpg', '2 takt direkte brændstofindsprøjtning system', false, true).'
Det smarte ved en 2 takt motor med direkte indsprøjtning i forhold til en 2 takt motor med karburator er at der først sprøjtes benzin ind i forbrændingskammeret når stemplet er kommer op fordi udstødningsporten så der er altså meget lavere mængder benzin som passere gennem motoren ubrugt. Det giver mindre forurening og scooteren køre længere på literen.

Her ses nogen billeder fra Peugeot TSDI systemet.
'.visbilled('1', 'animation0025.gif', 'Air injector', false, true).'
'.visbilled('1', 'billed3654.jpg', 'Air injector2', false, true).'
'.visbilled('1', 'animation0026.gif', 'Functining princip', false, true).'
'

,'
indirekte indsprøjtning
' => '
På motorer med indirekte indsprøjtning sprøjtes benzinen ind ved indsugningsporten før indsugningsventilen (4 takt).
'.visbilled('1', 'billed1460.jpg', '4 takt indirekte brændstofindsprøjtning system', false, true).'
Indirekte indsprøjtning kaldes Port Fuel Injection (PFI) på engelsk.
Derudover bruges også forskellige betegnelse alt efter producent.

Honda kalder deres system for PGM-FI (Programmed Fuel Injection).

Indirekte indsprøjtning bruges for eksempel på Yamaha Giggle, Yamaha Neos og Honda Zoomer.

Her ses et indirekte indsprøjtnings system kaldet SePI (Synerject electronic Port Injection) på en 4 takt motor.
'.visbilled('1', 'billed0375.jpg', '4 takt indirekte brændstofindsprøjtning system', false, true).'
'

,'
injector
' => '
Injectoren indeholder en ventil som åbnes og lukkes elektrisk af ECU.

Benzin injectoren sprøjter benzinen under tryk ind i motoren som forstøves når den sprøjtes ud af dysen (spidsen af injectoren).
'.visbilled('1', 'billed0490.jpg', 'brændstofindsprøjtning injector', false, true).'
Her ses et tværsnit af en injector.
'.visbilled('1', 'billed0607.jpg', 'brændstofindsprøjtning injector', false, true).'

På Aprilia SR DITech er der både en luft injector og en benzin injector.
'.visbilled('1', 'billed2882.jpg', 'injector', false, true).'
Benzinen sprøjtes fra benzin injectoren videre til luft injectoren og ind i forbrændingskammeret.
'.visbilled('1', 'billed2883.jpg', 'injector tegning', false, true).'
Spidsen af luft injectoren er en del af forbrændingskammeret.
'

,'
ECU
' => '
ECU er en boks med elektronik som er forbundet med mange af scooterens elektriske dele.

ECU står for Engine Control Unit.

Her ses en ECU fra Honda Zoomer.
'.visbilled('1', 'billed0653.jpg', 'ECU honda zoomer', false, true).'
Her ses en ECU fra Aprilia SR DITech.
'.visbilled('1', 'billed1747.jpg', 'aprilia sr DITech', false, true).'
Her ses en ECU fra Peugeot Scoot\'elec.
'.visbilled('1', 'billed0654.jpg', 'instrumentlys pære', false, true).'
I en Aprilia SR DITech ECU er der en 8 bit 8 Mhz CPU med 32KB ROM + 1KB RAM + 2,5 KB EEPROM og der er 22 ben i stikket til ECU\'en.
I en Aprilia SR DITech ECU er der en 8 bit 8 Mhz CPU med 32KB ROM + 1KB RAM + 2,5 KB EEPROM og der er 22 ben i stikket til ECU\'en.

ECU\'en er forbundet med en masse sensorer der måler lufttryk, lufttemperatur, motortemperatur, krumtap position, gasspjælds position og er desuden forbundet med tændspole, injector og benzinpumpe.

Hvis ECU\'en registrer en fejl så gemmer den en fejlkode i hukommelsen som senere kan aflæses med en fejlkodelæser.
For eksempel "Yamaha FI diagnostic tool" eller en gameboy med "Aprilia DITech interface".
'

,'
Gasspjældshus
' => '
Gasspjældshuset sidder der hvor karburatoren ville have siddet på en motor med karburator.

Modsat en karburator hvor der både kommer benzin og luft igennem så kommer der kun luft igennem et gasspjældshus.

Gasspjældshuset kaldes throttle body på engelsk.

Gasspjældshuset har et vippegasspjæld og en temperatur, tryk og vippegasspjælds vinkel sensor.

Gasspjældshuset er forbundet med ECU.

Gaskablet er forbundet med vippegasspjældet ligesom på en CV karburator.
'.visbilled('1', 'billed0491.jpg', 'gasspjældshus', false, true).'
Her ses gasspjældshuset på en Aprilia SR DITech.
'.visbilled('1', 'billed0928.jpg', 'gasspjældshus på Aprilia SR DITech motor', false, true).'
'

,'
indsprøjtningskit
' => '
Man kan købe indsprøjtningskit så man kan lave en scooter med karburator om til indsprøjtning.

Hvis man vælger et indsprøjtningskit med indireke indsprøjtning så behøver man ikke ændre på topstykket, så kan man nøjes med at fjerne karburator og indsugningsstuds og montere en indsugningsstuds med injector.

Se mere i forummet hvis der er en bruger som har lavet sin Kymco Agility om fra karburator til indirekte indsprøjtning : '.ahref('http://scootergrisen.dk/forum/viewtopic.php?f=8&t=809', 'Projekt: Indsprøjtningskit på scooter').'.
'.visbilled('1', 'billed3619.jpg', 'indsprøjtningskit på Kymco Agility', false, true).'
'

,'
Lær mere
' => '
'
.visfil('1', 'scooterhjemmeside/download/synerject_asdi_sepi.pdf', 'Synerject Advanced Electronic Fuel Injection Systemsbi')
.visfil('1', 'scooterhjemmeside/download/sym_fuel_injection_system.pdf', 'SYM fuel injection system')
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
