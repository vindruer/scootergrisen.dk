<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "Giantco E-Buddy";
$overskrift = "Giantco E-Buddy";
$metadescription = "cirka alt om den elektriske scooter Giantco E-Buddy som T Hansen solgte fra 2010 til 2012";

$databasecenter = array(

'
introduktion
' => '
Denne side handler om Giantco E-Buddy og alt den info jeg kan samle om den.
'.visbilled('1', 'billed2588.jpg', 'giantco e-buddy', false, true).'

Giantco E-Buddy er en elektrisk scooter som T-hansen begyndte at sælge i Marts 2010.

I Juni 2011 fik jeg i en T Hansen butik at vide at Giantco E-Buddy er udgået fordi de ikke har solgt så mange.
På det tidspunkt var der blevet solgt nogle og 50 (eller også var det nogle og 70) i hele danmark.

I Januar 2012 blev Giantco E-Buddy fjernet fra T Hansens hjemmeside. Der blev muligvis solgt nogen demo modeller herefter som de sidste.

'.kontaktmig(true).' gerne eller kom ind og skriv i '.forummet().' hvis du ejer denne scooter da jeg gerne vil vide mere om den.
'.visbilled('1', 'billed1292.jpg', 'giantco E-Buddy', false, true).'
Her er den vist med video og musik anlæg som er ekstra udstyr (der er højtalere i handskerummet).
'.visbilled('1', 'billed1320.jpg', 'giantco E-Buddy', false, true).'

Se også:
'
.galleriholder(array(
    galleri('scooter', 'altomgiantco.php', 'giantcoebuddy', 'Giantco E-Buddy', '', '3045', 'elektrisk', '')
   ,galleri('link', 'http://www.thansen.dk', 'www.thansen.dk', 'T Hansen', '', '', '', '')
))
. '
'

,'
brugermanual
' => '
Her er brugermanualen til Giantco E-Buddy.
'.visfil('1', 'scooterhjemmeside/download/giantco_ebuddy_brugermanual.pdf').'
'

,'
el diagram
' => '
Her ses el diagrammet fra brugermanualen.
'.visbilled('1', 'billed1263.jpg', 'Giantco E-Buddy el diagram', false, true).'
Der er en fejl i el diagrammet øverst hvor der står "controller". Det er ikke en controller. Det er en DC til DC konverter.

Ved at bruge el diagrammet fra brugermanualen har jeg lavet et el diagram med farver.

Jeg kalder det "Giantco E-Buddy experimental el diagram".
'.visbilled('1', 'billed1271.jpg', 'Giantco E-Buddy el diagram experimental', false, true).'
'.visfil('1', 'scooterhjemmeside/download/giantco_ebuddy_eldiagram_experimental.pdf').'
'

,'
instrumentpanel
' => '
Her ses instrumentpanelet på Giantco E-Buddy.
'.visbilled('1', 'billed1293.jpg', 'Giantco E-Buddy instrumentpanel', false, true).'
Opladningsviseren er forbundet til stel og batteriets plus (+) terminal når tændingslåsen er drejet til ON.
Viseren virker altså ligesom et voltmeter der viser hvor mange volt der er på batterierne.

Ifølge brugermanualen skal batterierne oplades når viseren kommer ned i det røde felt.

'.visflash('0', "http://www.youtube.com/watch?v=HEpggpBroWg", 'Giantco E-buddy 45 km/t', true).'
'

,'
gashåndtag
' => '
Her ses gashåndtaget.
'.visbilled('1', 'billed1562.jpg', 'giantco e-Buddy gashåndtag', false, true).'
Eller også ser det sådan her ud.
'.visbilled('1', 'billed3350.jpg', 'giantco e-Buddy gashåndtag', false, true).'
Gashåndtaget er med 3 ledere forbundet med controlleren.
'.visbilled('1', 'billed1267.jpg', 'giantco e-Buddy el diagram gashåndtag controller', false, true).'

'.afsnit('dette er blot et gæt','
1 : 5 volt
2 : Stelforbindelse
3 : 1-4 volt

Gashåndtaget får 5 volt og stelforbindelse fra controlleren.
Afhængig af hvor meget man drejer på gashåndtaget så levere gashåndtaget fra 1 til 4 volt tilbage til controlleren som bruges til at bestemme hvor hurtigt motoren skal køre.
').'
'

,'
controller
' => '
Her ses controlleren.
På controlleren til 30 km/t står HY30/1000.
'.visbilled('1', 'billed2524.jpg', 'giantco e-Buddy 30 km/t controller HY30/1000', false, true).'
På controlleren til 45 km/t står HY45/1000.
'.visbilled('1', 'billed1558.jpg', 'giantco e-Buddy 45 km/t controller HY45/1000', false, true).'

'.afsnit('så vidt jeg kan se står der på HY30/1000','
JH
BLDC motor controller
Model: A4880-GZY2
Operating voltage: 48VDC
Current limit: 35A
Phase angle: 120°
Brake: high level
Lot no: JH100521350010
').'

'.afsnit('så vidt jeg kan se står der på HY45/1000','
JH
BLDC motor controller
Model: A4880 G7Y1A
Operating voltage: 48VDC
Current limit: 35A
Phase angle: 120°
Brake: high level
Lot no: JH100304810014
').'

Controlleren sidder under sædelåsen.
'.visbilled('1', 'billed3541.jpg', 'giantco e-Buddy', false, true).'
'.visbilled('1', 'billed3318.jpg', 'giantco e-Buddy 30 km/t controller HY30/1000', false, true).'
'.visbilled('1', 'billed3323.jpg', 'giantco e-Buddy 30 km/t controller HY30/1000', false, true).'

Her ses hvad controlleren er forbundet med.
Der er en fejl i eldigrammet. Så der hvor der står "controller" øverst, det er ikke en controller men en DC til DC konverter.
'.visbilled('1', 'billed1270.jpg', 'giantco e-Buddy el diagram controller', false, true).'
Controlleren er forbundet med kontakter ved forbremse, bagbremse og sidestøtteben.
Disse kontakter får bremselyset til at lyse og det lader til at controlleren ikke tillader strøm til motoren mens disse kontakter er aktiveret.
Det lader til at hvis man bremser og drejer på gashåndtaget så vil controlleren ikke sende strøm til motoren.
'

,'
samleboks
' => '
Her ses en samleboks.
'.visbilled('1', 'billed2525.jpg', 'giantco e-Buddy controller samleboks', false, true).'
Samleboksen bruges til at forbinde controlleren med motorens 3 fase ledninger, stel (batteri minus) og +48 volt (batteri plus).

Samleboksen forbinder nogen af de tykkeste ledninger som transporter de største strømstyrker.
'.visbilled('1', 'billed3237.jpg', 'giantco e-Buddy controller samleboks', false, true).'
'.visbilled('1', 'billed3319.jpg', 'giantco e-Buddy controller ledninger', false, true).'

Der er ikke nogen samleboks at se på E-Buddy eldiagrammet men her kan man se en samleboks fra et eldigram til en anden scooter.
'.visbilled('1', 'billed3001.jpg', 'controller samleboks', false, true).'
Der er 5 skruer/pladser hvor man kan samle ledninger i samleboksen.

3 af skruerne (blå, grøn, gul) bruges til at forbinde controlleren med de 3 fase ledninger til motoren.
1 af skruerne (sort) bruges til at forbinde controlleren med batteri minus (-) (stel).
1 af skruerne (rød) bruges til at forbinde controlleren med batteri plus (+) (+48 volt) (gennem hovedafbryderen).
'

,'
hovedafbryder
' => '
Her ses hovedafbryderen.
'.visbilled('1', 'billed1559.jpg', 'Giantco E-Buddy hovedafbryder', false, true).'
Hovedafbryderen beskytter mod kortslutning.
'.afsnit('på den står','
CHNT
DZ47-60
C60
230V/400V~
').'

'.afsnit('ifølge www.dhanophan.co.th','
DZ47 series miniature circuit breaker

DZ = Plastic casing breaker
47 = Miniature circuit breaker
60 = Casing class rated current (60 ampere)

Rated short circuit breaking capacity : 4000 (levetiden er 4000 afbrydelser).
').'

Hovedafbryderen sidder under låget i hjelmrummet.
'.visbilled('1', 'billed1264.jpg', 'Giantco Sprint hjelmrum', false, true).'
'.visbilled('1', 'billed3355.jpg', 'hovedafbryderen i hjelmrum', false, true).'

'.visbilled('1', 'billed1260.jpg', 'Giantco E-Buddy hovedafbryder', false, true).'

'.afsnit('fra brugermanual','
Der er placeret en hovedafbryder under låget nederst i sæderummet.
Denne er designet til at beskytte køretøjets elektriske system, hvis der sker en kortslutning.
Vær opmærksom på at det ikke er muligt at oplade batteriet, når kontakten er i position ”OFF”.
').'

Det lader til at hovedafbryderen er en PHFI afbryder ligesom der er i et hus som selv afbryder strømmen i tilfælde af et pludseligt højt strømforbrug som kan skyldes en kortslutning.
'

,'
oplader
' => '
Her ses den første batterioplader til Giantco E-Buddy der blev vist på T Hansens hjemmeside.
Modellen hedder PT486A.
'.visbilled('1', 'billed1560.jpg', 'giantco e-Buddy batterioplader', false, true).'
'.visbilled('1', 'billed3539.jpg', 'giantco e-Buddy batterioplader', false, true).'
Bag på opladeren er en ON/OFF kontakt og hul til en blæser som fylde næsten hele bagsiden.

'.afsnit('på den står','
PT486A
intelligent
multifrequency quick
pulse battery charger
').'

Her er manualen til PT486A batteriopladeren.
'.visfil('1', 'scooterhjemmeside/download/pt486a.pdf').'

'.afsnit('info fra manualen','
Opladertype : impuls lader beregnet til silicone batterier.
Udgangsspænding : 62,4 volt.
Ladeeffekt udgang : 6 ampere.
Forbrug : 400 watt.
Arbejdstemperatur : -20 til +40 °Celsius.
Opladeren skal stå et ventileret sted under opladningen.
Opladeren er ikke vandtæt.
').'

'.afsnit('i opladermanualen står','
Sørg for at bruge batteriets kapacitet så meget som muligt, inden det lades op igen. Dette forlænger levetiden.
').'
Det er jeg ikke enig med. Tværtimod.
Efter hvad jeg ellers har læst så vil jeg mene at batteriernes levetid reduceres hvis man aflader batterierne så meget så muligt før hver opladning.
Jeg vil mene at batterierne holder længere hvis man oplader så ofte man har mulighed for det.

'.afsnit('opladningstid','
Det skulle typisk tage 6-8 timer at oplader batterierne.
Opladningstiden kommer an på hvor afladte batterierne er.
').'

T-hansen anbefaler at man oplader scooteren i et opvarmet rum.



Senere kom Greensaver HB48062 batteriopladeren på T Hansens hjemmeside.
T Hansen kalder den for ECO.

'.afsnit('Greensaver HB48062 (ECO)','
'.visbilled('1', 'billed3234.jpg', 'giantco e-buddy eco oplader', false, true).'
Her er manualer til Greensaver HB48062.
'
.visfil('1', 'scooterhjemmeside/download/greensaver_hb48062.pdf')
.visfil('1', 'scooterhjemmeside/download/greensaver_hb48062_dansk.pdf')
.'
Den har 2 lamper.
1 lyser rødt (power).
1 lyser rødt, gult eller grønt (charging).
').'
'.visbilled('1', 'billed3235.jpg', 'giantco e-buddy i gang med at blive opladt med greensaver HB48062 batterioplader', false, true).'
'.visbilled('1', 'billed3540.jpg', 'giantco e-buddy i gang med at blive opladt med greensaver HB48062 batterioplader', false, true).'
'.visbilled('1', 'billed3548.jpg', 'giantco e-buddy i gang med at blive opladt med greensaver HB48062 batterioplader batterier er taget ud', false, true).'
'.visbilled('1', 'billed3549.jpg', 'giantco e-buddy i gang med at blive opladt med greensaver HB48062 batterioplader batterier er taget ud', false, true).'
'.afsnit('Greensaver HB48062 (ECO) lamper','
power lyser rødt = opladeren får strøm.
charging blinker grønt 3 gange = opladerens elektronik testes.
charging lyser ikke = ikke forbundet.
charging lyser rødt = oplader.
charging lyser gult = batteri har nået 90 % opladning og equalization begynder.
charging lyser grønt (blinker) = trickle charging i 1 time.
charging lyser grønt (konstant) = batteriet er fuldt opladt.
').'
'.afsnit('Greensaver HB48062 data','
Model : HB48062
Input volt : AC 90-264 Volt / 47~63 Hertz
Input power : Maksimum 420 Watt
Output voltage : DC 59,5 Volt +- 0,5 Volt
Output current : 6 Ampere +- 0,3 Ampere
Battery pack voltage : 48 Volt
Temperature applicable : -20 ~ +40 grader celsius
CE godkendt.
Aluminium kasse
Længde : 183 mm
Bredde : 110 mm 
Højde : 64 mm
Vægt : 1,22 kg
Passer til batteri : SP27-12 × 4
Trickle charge : 1 time, stopper automatisk
').'

Her er priserne på de 2 opladere fra T Hansens hjemmeside.
PT486A kostede 599,- kroner.
Greensaver HB48062 (ECO) kostede 899,- kroner.
'

,'
opladerstik
' => '
Her ses opladerstikket.
'.visbilled('1', 'billed1252.jpg', 'giantco e-Buddy opladerstik', false, true).'
Stikket er beskyttet af et plastik låg som vippes op når stikket fra opladeren skal i.
'.visbilled('1', 'billed1259.jpg', 'Giantco E-Buddy instrumentpanel', false, true).'
Grøn ledning er forbundet ved L (Leder) (Batteri -).
Rød ledning er forbundet ved N (Nul) (Batteri +).
Det ser ikke ud til at jord forbindelsen bruges i stikket.
'.visbilled('1', 'billed1561.jpg', 'giantco E-Buddy opladerstik', false, true).'
'.visbilled('1', 'billed3274.jpg', 'giantco E-Buddy opladerstik', false, true).'
Det ser det ud til at stikket er af samme type som på for eksempel computer udstyr.
'.visbilled('1', 'billed1566.jpg', 'giantco E-Buddy opladerstik', false, true).'
Jeg har læst at disse stik er meget almindelige på kinesiske scootere i kina.
Hvis en uviden person sætter en ledning direkte fra stikkontakten til scooterens ladestik så vil det formodentligt ødelægge batterierne.

I el diagrammet skulle opladerstikket være forbundet til batterierne gennem hovedafbryderen som det ses her.
'.visbilled('1', 'billed1266.jpg', 'Giantco E-Buddy el diagram oplader stik og hovedafbryder og batterier', false, true).'
Men en Giantco E-buddy ejer fortæller at han har kigget efter på 2 e-buddy hvor opladerstikket har været tilsluttet direkte til batterierne altså uden om hovedafbryderen.

Det lader til man kan måle batteriernes volt ved at måle på ladestikket i scooteren.
'

,'
sådan oplades batterierne
' => '
Hovedafbryderen skal være på ON.
'.visbilled('1', 'billed1275.jpg', 'Giantco E-Buddy opladning', false, true).'
Stil opladerens kontakt til OFF.
'.visbilled('1', 'billed1276.jpg', 'Giantco E-Buddy opladning', false, true).'
Forbind opladeren til scooteren.
'.visbilled('1', 'billed1277.jpg', 'Giantco E-Buddy opladning', false, true).'
Forbind opladeren til stikkontakten og tænd for stikkontakten.

Power lampen lyser for at vise at der er strøm til opladeren.
PT486A : Power lampen lyser rødt.
Greensaver HB48062 (ECO) : Power lampen lyser grønt.
'.visbilled('1', 'billed1278.jpg', 'Giantco E-Buddy opladning', false, true).'
Stil opladerens kontakt til ON.
Charging lampen på opladeren lyser rødt for at vise at nu er opladningen i gang.
'.visbilled('1', 'billed1279.jpg', 'Giantco E-Buddy opladning', false, true).'
Vent mens batterierne oplades.

Det kan tage 6-8 timer.
'.visbilled('1', 'billed1280.jpg', 'Giantco E-Buddy opladning', false, true).'
PT486A : Charging lampen slukker når opladningen er færdig.
Greensaver HB48062 (ECO) : Charging lampen lyser konstant grønt når opladningen er færdig.
'.visbilled('1', 'billed1281.jpg', 'Giantco E-Buddy opladning', false, true).'
Stil opladerens kontakt til OFF.
'.visbilled('1', 'billed1282.jpg', 'Giantco E-Buddy opladning', false, true).'
Sluk for stikkontakten og fjern opladerens stik fra stikkontakten.
'.visbilled('1', 'billed1283.jpg', 'Giantco E-Buddy opladning', false, true).'
Fjern derefter stikket fra scooteren.
'.visbilled('1', 'billed1284.jpg', 'Giantco E-Buddy opladning', false, true).'
Luk plastiklåget på opladerstikket.

Hurra batterierne er nu opladt.

'.afsnit('brugermanualen modsiger sig selv','

'.afsnit('i scooterens brugermanual står','
Når batterierne på scooteren er fuldt opladet, slukkes den højre indikatorlampe på laderen.
').'

'.afsnit('i scooterens brugermanual står også','
Batteriopladeren må først frakobles når den grønne kontrollampe på opladeren lyser.
').'
Det er nok fordi T Hansen har solgt 2 forskellige opladere. PT486A og Greensaver HB48062 (ECO) hvor deres lamper lyser forskelligt og med forskellig farve.
Så kontroller hvilken oplader du bruge.
').'
'

,'
batterier
' => '
Der er 4 batterier i Giantco E-Buddy.

Hvert batteri er på 12 volt 33 Ah.
På batteriet står Guineng china silicone power battery 6-DW-33Ah (12B33Ah) Jiang Men Yu Yang Special Storage Battery CO., Ltd Made in China.
En Giantco e-buddy ejer har målt batteriet til at veje 11,6 kg. Det vil sige 46,4 kg ialt for de 4 batterier der er i scooteren.
'.visbilled('1', 'billed3538.jpg', 'giantco e-buddy batteri guineng china silicone power battery 6-DW-33Ah (12B33Ah) Jiang Men Yu Yang Special Storage Battery CO., Ltd Made in China', false, true).'

Batterierne er af typen silicone (forseglet silica). som er en lukket bly-syre batteritype.
De 4 batterier er forbundet i serie og levere cirka 48 volt ialt.
Det er disse batterier der sidder i Giantco E-Buddy som standard.

'.visbilled('1', 'billed3306.jpg', 'giantco e-buddy under sædet', false, true).'
Dem der sælges på T Hansens hjemmeside er grå og hedder vist Landport LPC12-33(12V33AH) Maintenance-free Sealed Lead-acid Battery.
Det ser ikke ud til det er silica batteri som dem der sidder i fra ny.
'.visbilled('1', 'billed3305.jpg', 'giantco e-buddy batteri', false, true).'

'.afsnit('nye batterier','
T-hansen skriver at batterierne først opnår fuld kapacitet efter cirka 20 afladninger og opladninger.
Altså hvis man købte en nye Giantco E-Buddy så skal man lige have kørt noget tid sådan at man har afladt/opladt batterierne 20 gange før batterierne kan modtage en fuld opladning og dermed fås den fulde rækkevidde.

'.afsnit('pris for nye batterier','
Først kostede et batteri 749,- eller 749,75 hos T Hansen.
Så kostede det 899,- per batteri.
Og så kostede det 999,- per batteri (15. September 2011 - sidst jeg kiggede).
Giantco E-Buddy bruger 4 styks batterier så det bliver 999 * 4 = 3996,- kroner for et batteriskift.

T Hansen begyndte også at sælge en batteripakke med 36 Ah batterier til 3899,- kroner (974,- per batteri).
Og senere blev den udskiftet med en batteripakke med 27 Ah også til 3899,- kroner. De kalder den "27 Ah 2H".
Senere kan man også købe "27 Ah 2H" batterier enkelt styks til 1099,- kroner.

Umiddelbart lyder det jo som en meget høj pris.
Men man betaler jo ikke for benzin, motorolie, gearolie, tændrør, ruller, kilerem, karburatorvæske osv som man gør på en scooter med forbrændingsmotor.
Så måske koster det ikke nødvendigvis mere at have en elektrisk scooter hvis man sammenligner med en scooter med forbrændingsmotor.
').'
').'

'.afsnit('brugte batterier','
Når batterierne er gamle og brugte efter lang tids brug og mange opladninger så skal de ifølge t-hansen afleveres på et miljødepot.
Det vil sige på en genbrugsstation.
').'

'.afsnit('hvert batteri måler ifølge thansen.dk','
Højde : 17 cm.
Bredde : 19,5 cm.
Længde : 13 cm.
').'

'.afsnit('alternative batterier','
Som et alternativ til at købe batterierne hos T Hansen kan man <span style="text-decoration: underline;">måske</span> bruge '.ahref('http://dk.rs-online.com/web/p/genopladelige-blybatterier/7270451/', 'disse GEL batterier fra RS Components (varenummer : 727-0451)').' eller '.ahref('http://dk.rs-online.com/web/p/genopladelige-blybatterier/7270420/', 'disse AGM batterier fra RS Components (varenummer : 727-0420)').'.
Hvis du bestille hos rs components så skriv 00000000 som CVR nummer hvis du er privatkunde.
Der er en brugeren som har gjort mig opmærksom på dem men brugeren har ikke prøvet dem selv.

Men det kunne jo være et intersant og billigere og måske bedre alternativ hvis T Hansen bliver ved med at sætte deres batteri priser op.
').'
'.afsnit('reklamationret og garanti','
T-hansen skriver i brugermanualen at de giver 1 års garanti på batterierne eller at de kan oplades 250 gange. Hvad end der kommer først.

Der er i følge T Hansen ikke de normale 2 års reklamationsret på batterierne da batterierne kan have en levetid på under 2 år. Selvom der vist i følge købeloven altid er 2 års reklamationsret.

Batteriernes kapacitet aftager med tiden og betyder at jo mere brugte batterierne er jo lavere kapacitet har de og jo kortere kan scooteren køre per opladning.

T-hansen skriver at kapaciteten ved -10 °Celsius er cirka halvdelen af hvad kapaciteten er ved +20 °Celsius.
Det må så betyde at scooteren kun har halvdelen af rækkevidden om vinteren.
').'
Her ses pladsen hvor 3 af de 4 batterier sidder. Den sidste batteriplads er helt bagerst på scooteren.
'.visbilled('1', 'billed3547.jpg', 'Giantco E-Buddy batterikasse', false, true).'
'

,'
DC til DC konverter
' => '
Her ses DC til DC konverteren.
'.visbilled('1', 'billed1416.jpg', 'Giantco E-Buddy dc til dc konverter', false, true).'
'.afsnit('på den står','
DC-DC convertor
Over current protection
Short circuit protection
Low voltage protection
Red/input : DC31V-59V
Yellow/output : DC12V
Black : Cathode wire
').'

Den laver 48 volt fra batterierne om til 12 volt som bruges til lys, horn og blinklys relæ.

På el diagrammet fra brugermanualen er der en fejl.
Der er 2 dele som kaldes controller.
Den del som kaldes controller og har 3 ledere er DC til DC konverteren.
'.visbilled('1', 'billed1287.jpg', 'Giantco E-Buddy controller dc til dc konverter', false, true).'
'

,'
motor
' => '
Her ses baghjulet med motoren indbygget i fælgen.
'.visbilled('1', 'billed1261.jpg', 'Giantco E-Buddy svingarm motor', false, true).'
Motoren kaldes "JJDM-48-1000" i typegodkendelsen og det står også på venstre side af motoren.
'.visbilled('1', 'billed1262.jpg', 'Giantco E-Buddy motor', false, true).'
'.visbilled('1', 'billed3322.jpg', 'Giantco E-Buddy motor svinggaffel højre side', false, true).'
'.visbilled('1', 'billed3321.jpg', 'Giantco E-Buddy motor svinggaggel venstre side', false, true).'
'.visbilled('1', 'billed3320.jpg', 'Giantco E-Buddy motor afmonteret', false, true).'
'.visbilled('1', 'billed3307.jpg', 'Giantco E-Buddy motor afmonteret', false, true).'
I el diagrammet kan man se at motoren er forbundet til controlleren igennem 8 ledninger.
'.visbilled('1', 'billed1268.jpg', 'Giantco E-Buddy eldiagram motor controller', false, true).'
De 3 øverste (Gul, Grøn, Blå) er faserne som gå til motorens spoler gennem de tykke ledninger.

De 5 nederste er til hall sensorene som registerer hjulets position.
(Rød) er nok +12VDC og (Sort) er nok stel. De går nok begge til hver sensor.
(Blå, Grøn, Gul) går nok til hver sin sensor.
'.visflash('0', "http://www.youtube.com/watch?v=H0ppMNLr37s", 'Giantco E-Buddy motorlyd', true).'
'

,'
starter knap
' => '
På en elektrisk scooter er der ikke nogen starter motor så derfor bruges starterknappen ikke til at starte motoren.

Man kan godt trykke på starter knappen men der sker ikke noget.

I brugermanualen står at starter knappen ikke har nogen funktion.
'.visbilled('1', 'billed1265.jpg', 'Giantco E-Buddy starter knap', false, true).'
Men det lader til at ledningerne stadig er der.
'.visbilled('1', 'billed1563.jpg', 'Giantco E-Buddy starter knap', false, true).'
Så man kunne eventuelt give knappen en funktion.
'

,'
rækkevidde
' => '
Ifølge T-hansen hjemmeside (i starten) : Over 60 km.
Ifølge T-hansen hjemmeside 30 km/t (rettet til) : Op til 60 km.
Ifølge T-hansen hjemmeside 45 km/t (rettet til) : Op til 45 km.
Ifølge T-hansen hjemmeside 45 km/t (igen rettet til) : Op til 35 km.
Ifølge T-hansen butiks plakat : Mere end 60 km.
Ifølge T-hansen brugermanual : Op til 70 km.
Ifølge Giantco.com hjemmeside : 60-90 km.

30 km/t modellen har længere rækkevidde end 45 km/t modellen i praksis.
Fordi jo hurtigere man køre jo kortere rækkevidde er der.

'.afsnit('erfaring fra ejere','
En Giantco E-Buddy ejer skriver at 45 km/t modellen har en rækkevidde på 37 km.
Den fik han byttet til en 30 km/t model som har en rækkevidde på 55 km.

En anden Giantco E-Buddy ejer skriver at 45 km/t modellen har en rækkevidde på 46 km på en opladning.

En anden Giantco E-Buddy ejer har en 45 km/t (51 km/t på speedometer) og skriver at i September kørte den maksimum 40 km/opladning.

En anden Giantco E-Buddy ejer har købt en let brugt E-Buddy hos T Hansen som havde kørt 108 km da de ikke havde flere nye tilbage. Rækkevidden viste sig kun at være 10 km selv efter 6 opladninger blev rækkevidden ikke længere. En måling af batterierne viste at det ene batteri ikke havde den spænding det skulle have så scooteren blev sendt til reperation. Jeg tilføjer mere når jeg har hørt hvordan det gik om om rækkevidden blev god.

En anden Giantco E-Buddy ejer (Barden) køre 44 km/opladning om sommmer/efterår og 28-30 km/opladning på tørre vinterdage med frost. Og det er med 2 år gamle batterier.

En anden Giantco E-Buddy ejer :
Min E-Buddy har kørt ca 12,600km og jeg lader hver 2nd dag i sommer månederne (op til 55km pr, ladning) og HVER dag i vintertiden (MAX 20km pr. ladning)
Jeg kører i snit ca 20km om dagen 

'.afsnit('kørsel om vinteren','
Der var en bruger som skrev at efter en nat med minus 12-15 °Celsius frost var der problemer med rækkevidden og han måtte trække scooteren de sidste 10 km hjem.
').'
').'
'

,'
prøvetur
' => '
'.afsnit('prøvetur 1','
Jeg fik lov til at prøve en kort tur rundt i butikken hos t-hansen og så en ansat køre på den.
Den er utrolig støjsvag.
Det overraskede mig at den ikke giver mere lyd end den gjorde.
Hvis jeg skulle beskrive lyden så er det sådan en "rillet" svag lyd.
Måske som en batteridrevet boremaskine bare "rillet" i lyden.
Den accelerer meget hurtig.
Når man drejer på håndtaget så giver det et ryk i armene.
').'
'.afsnit('prøvetur 2','
Så fik jeg prøvet endnu en Giantco E-buddy.
Denne gang udendørs bag T Hansen så jeg kunne prøver den lidt mere rigtigt.
Den var ret sjov at køre.
Blinklyset siger ikke "klik klik" når man blinker hvilket jeg jo er vandt til fra min egen scooter.
Når man bremser og bremsekontakterne bliver slået til så slås motoren fra så man kan ikke holde bremsen inde og give gas kun lidt indtil bremsekontakten aktiveres hvilket den gør når man har trykket bremsegrebet lidt ind.
Jeg fik en snak om at der var solgt 7 Giantco E-buddy i den T Hansen butik og noget med 50-70 stykker i hele danmark. Kan ikke huske det præcise tal.
Men jeg fik også at vide at den var udgået altså ligesom om at de ikke har tænkt sig at blive ved med at sælge dem så det jo lidt nedslående.
Ham jeg snakkede med snakkede om at folk viste interesse for dem men at de måske enten ikke ville give den pris for den eller også hvis folk bor i lejlighed så kan de jo ikke oplade den fordi man ikke kan tage batterierne ud og hvis man gjore er de jo tunge.
Sidste gang jeg prøvede en E-buddy var det som om at man ikke kunne accellere langsomt men det kunne man godt denne gang.
Viseren på instrumentpanelet som viser opladningsniveauet hopper hurtigt op når man drejer tændingslåsen til ON og falder hurtigt ned når man drejer til OFF.
Det er ikke ligesom benzinviser på min scooter som meget langsomt går op og ned.
Det var lidt bakkede der hvor jeg kørte og da jeg skulle op af en måske lidt stejl bakke kørte den meget langsomt. Kun 10 km/t eller måske lidt hurtigere men det gik langsomt.
Lige så snart den kørte lige ud eller ned af bakke kunne den køre fint hurtigt og accelere fint syns jeg.
Jeg kunne godt mærke at den ligesom ikke har så meget kraft i sig som min egen scooter (Kymco Super 8 4T, 50 ccm) men den var meget sjov og køre på og kunne sagtens forstille mig man kunne have meget sjov ud af at køre på den og ikke mindst nyde hvor stille den er.
Affjedringen var blød så det syns jeg var godt.
Bremserne var ikke specielt gode men bremse kunne de da.
En sjov detalje er at det efter sædet er et klistermærke hvor der står noget om at man skal huske at skifte motorolie og bruge karburatorvæske hvilket man jo ikke skal på en elektriske scooter.
Starter knappen på højre side at styret gør ikke noget. Jeg tænkte den måske blev brugt som horn men det gør den ikke.
').'
'

,'
andet
' => '
'.afsnit('overflow protection : 35 ampere','
Jeg vil tro at overflow protection betyder at scooterens strømforbrug ikke kan overstige 35 ampere (35 ampere * 48 volt = 1680 watt) hvilket vel er en sikkerheds funktion... måske i tilfælde af kortslutning.
').'

'.afsnit('low voltage protection : 42 ± 0,5 volt','
Når batteri spændingen falder til under en bestemt værdi så slå controlleren strømmen fra.
Dette sker for at beskytte batterierne mod for dyb afladning som ville afkorte batteriernes levetid.
').'

'

,'
begrænsninger
' => '
På controlleren til 30 km/t er et sort stik med helt hvide ledninger som kan tages fra hinanden for at fjerne hastighedsbegrænsningen.
Der skulle ikke være dette stik på 45 km/t controlleren.
'.visbilled('1', 'billed1564.jpg', 'Giantco E-Buddy controller begrænsningsstik', false, true).'
'.visbilled('1', 'billed3324.jpg', 'Giantco E-Buddy controller begrænsningsstik', false, true).'
En bruger har skrevet at hans 30 km/t e-buddy gik fra at køre 30 km/t til at køre 50 km/t efter stikket blev taget fra hinanden.
En anden bruger har skrevet at hans 30 km/t e-buddy køre 45-50 km/t efter stikket er taget fra hinanden.
Jeg mener at en ansat i en T Hansen butik sagde at den kørte 55 km/t hvis man klippede en ledning.

Den højere hastighed giver en lavere rækkevidde.
Hvis man køre 30 km/t kan man køre længere end hvis man køre 50 km/t.

På controlleren er der også et andet sort stik med blå/hvide ledninger hvor controlleren er forbundet med sig selv.
Men det er vist ikke en begrænsning.
'.visbilled('1', 'billed3325.jpg', 'Giantco E-Buddy controller', false, true).'
'

,'
cirka 5 øre per km
' => '
T-hansen skriver at det kun koster cirka 5 øre per km at køre på Giantco E-Buddy.
De 5 øre er formodentligt den pris det koster at oplade batterierne i elektricitet og ikke noget andet.

Hvis det koster 5 øre per km og den har en rækkevidde på 40-60 km så må det jo koste 2-3 kroner for en fuld opladning.

Det koster vistnok cirka 21 øre i benzin per km hvis en benzindrevet scooter kan køre 46 km/l og 1 liter benzin koster 10 kroner.
Hvis det skulle koste 5 øre i benzin per km for en benzindrevet scooter så skulle den køre 200 km/l.

Lad os sige vi køre 10000 km på en benzindrevet scooter som kan køre 46 km/l.
Der bruges cirka 217 liter på at køre 10000 km.
Lad og sige at 1 benzin koster 10 kroner.
De 217 liter benzin koster så 2170 kroner.
Det koster altså 0,217 kroner alene til køb af benzin per km.

4 nye batterier til Giantco E-Buddy koster hos t-hansen 2999,- kroner (prisen er senere steget til 3899,- kroner).
Hvis vi siger at batterierne kan holde til 10.000 km bare for et eksempel.
Så koster det 0,2999-0,3899 kroner alene til køb af batterier per km.

Så selvom 2999,- og 3899,- umiddelbart lyder som en høj pris for nye batterier så hvis man sammenligner med en scooter med forbrændingsmotor så er prisen vist ikke så høj alligevel.
Dertil kommer de penge men spare på motorolie, gearolie, tændrør, ruller, kilerem, karburatorvæske osv som ikke skal skiftes på en elektrisk scooter.

Alligevel er der noget som siger mig at man ikke skal købe en elektrisk scooter for at spare penge.
Jeg tror ikke at det alt i alt er billigere at have en elektrisk scooter end en scooter med forbrændingsmotor.
'

,'
sikringer
' => '
I brugermanualen står kredsløbsbeskyttelse : 30 ± 0,5 ampere. Jeg ved ikke om det er en sikring som hentydes til eller om hovedafbryderen slår fra ved 30 ampere.

Ifølge el diagrammet skulle der være en 15 ampere sikring ved den del som på kaldes "controller" men som er en DC til DC konverter.

På ledningsnettet her kan jeg dog se 2 sikringsholdere.
'.visbilled('1', 'billed1565.jpg', 'Giantco E-Buddy ledningsnet', false, true).'
Den ene sikring har røde ledninger og jeg vil tro den sidder mellem det enes batteris + terminal og enten hovedafbryderen, opladerstikket, controlleren eller tændingslåsen.
'

,'
dæktryk
' => '
En bruger blev overrasket over at dæktrykker betyder meget for topfarten.
Topfarten havde en forskel på 5 km/t.
Går ud fra det betyder at en lidt for lavt dæktryk vil betyde en 5 km/t lavere topfart.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
