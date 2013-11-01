<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "oplader - Elektrisk scooter";
$overskrift = "oplader - Elektrisk scooter";
$metadescription = "information med de batteriopladere til bruges til elektriske scootere";

$databasecenter = array(

'
oplader
' => '
Opladeren i en elektrisk scooter kan enten være indbygget i scooteren (intern oplader) eller den kan være ekstern.

Det smarte ved en indbyggede oplader er at man altid har den med og derfor ikke kan glemme den og desuden er den beskyttet mod regn.
En ekstern oplade kan man glemme/miste og de fleste eksterne opladere er så vidt jeg ikke regntætte.

Her ses en indbygget oplader på Peugeot Scoot\'elec.
Opladeren er den øverste del med blæseren.
'.visbilled('1', 'billed0106.jpg', 'peugeot scooter\'elec oplader og ecu', false, true).'
Her ses stikket som puttes i stikkontakten når batterierne skal oplades.
'.visbilled('1', 'billed0671.jpg', 'peugeot scooter\'elec oplader stik', false, true).'
I Peugeot Scoot\'elec brugermanualen står at man også kan få en ekstern oplader (så man bruger 2 opladere) og montere et specielt stik på scooteren og det skulle så giver en dobbelt så hurtig opladning.

Her ses en Yamaha EC-03 som har indbygget oplader.
'.visbilled('1', 'billed3165.jpg', 'yamaha EC-03 ledning under sæde', false, true).'
'.visbilled('1', 'billed3164.jpg', 'yamaha EC-03 ledning i stikkontakt', false, true).'

Her ses en ekstern 48 volt 5 ampere oplader som kan bruges til Scoopie 1500w.
'.visbilled('1', 'billed1098.jpg', 'scoopie 1500w oplader', false, true).'
'.visbilled('1', 'billed1097.jpg', 'scoopie 1500w oplader', false, true).'
Som der stå på opladeren er denne oplader kun til bly-syre batterier ("For Lead - acid Battery Only").
Der står også at den ikke er beregnet til udendørsbrug ("Indoor Use Only!").
'.visbilled('1', 'billed1099.jpg', 'scoopie 1500w oplader', false, true).'

Her ses en ekstern oplader til Scoopie 500watt.
'.visbilled('1', 'billed1308.jpg', 'oplader 48V-30E-T (B)', false, true).'

Ego Helio har en indbygget oplader men man kan købe denne eksterne oplader som muligvis er hurtigere til at oplade batterierne.
'.visbilled('1', 'billed1037.jpg', 'ego helio oplader', false, true).'

Her ses en anden oplader.
'.visbilled('1', 'billed1419.jpg', 'oplader', false, true).'
Og endnu en.
'.visbilled('1', 'billed1420.jpg', 'oplader', false, true).'
Her ses den oprindelige oplader til Giantco E-Buddy.
Modellen hedder PT486A.
'.visbilled('1', 'billed1725.jpg', 'Giantco E-Buddy oplader', false, true).'
Her ses opladeren til Giantco E-Buddy som T Hansen kalder for ECO.
Opladeren hedder Greensaver HB48062.
'.visbilled('1', 'billed2813.jpg', 'Giantco E-Buddy eco oplader', false, true).'
Her ses en ekstra oplader fra Harald Nyborg til deres Busetto ECC-800 scooter.
'.visbilled('1', 'billed1927.jpg', 'Busetto oplader fra harald nyborg', false, true).'
Her ses en ekstern oplader som er direkte forbundet med hvert enkelt batteri.
Jeg ved ikke om opladeren så er istand til at oplade hvert batteri parrallelt sådan at opladningen går hurtigere men det vil det være smart hvis den kan.
Jeg ved ikke hvad det runde stik hedder men det ser ud til at der er mindst 5 ben i stikket.
'.visbilled('1', 'billed3086.jpg', 'EVT 168 batterioplader kabler tegning', false, true).'
Her ses en oplader med flere lamper der viser hvor mange procent batterierne er opladt.
'.visbilled('1', 'billed3088.jpg', 'oplader', false, true).'

Her ses et opladerstik under sædet.
Det ligner et 3 benet XLR stik.
'.visbilled('1', 'billed3090.jpg', 'opladerstik i bagagerum under sæde', false, true).'
Her ses en oplader i en e-max scooter.
'.visbilled('1', 'billed3290.jpg', 'oplader i e-max', false, true).'
Her ses en oplader til en Tisong TM-300.
'.visbilled('1', 'billed3293.jpg', 'oplader i tisong tm-300', false, true).'
'

,'
opladerstik
' => '
På nogle elektrisk scootere er opladerstikket i scooteren af samme type som man kender det fra computere og andet 220 volt vekselstrømsudstyr.
'.visbilled('1', 'billed3347.jpg', 'giantco e-buddy opladningsstik', false, true).'
'.visbilled('1', 'billed3348.jpg', 'giantco e-buddy opladningsstik', false, true).'
Her ses en oplader som bruger samme type stik i opladeren og i scooteren.
'.visbilled('1', 'billed3349.jpg', 'greensaver HB48062 batterioplader til giantco e-buddy', false, true).'
Hvis man kom til forbinde scooterensopladerstik direkte med stikket til stikkontaktens 220 volt vekselstrøm (i stedet for stikkert fra opladeren) så ville det sikkert ikke være så godt.

Der kan godt nok være en hovedafbryder i nogle scootere som beskytter med kortslutning og måske andre ting men jeg ved ikke om den også er i stand til at beskytte mod dette.

I Giantco E-Buddy er en hovedafbryder hvor på der står "230V/400V~". Så den lyder ligesom til at være designet til 220 volt vekselstrøm så den ville nok ikke slå fra. Og det vil så betyde at batterierne får 220 volt vekselstrøm ved 50 Hz og det kan ikke være godt.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
