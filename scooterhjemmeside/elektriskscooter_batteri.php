<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "batteri - Elektrisk scooter";
$overskrift = "batteri - Elektrisk scooter";
$metadescription = "information om de batterier der findes i en elektrisk scooter, batterityper, kapacitet, volt, rækkevidde, batterier i forskellige elektriske scootere";

$databasecenter = array(

'
batteri
' => '
Batterierne i en elektrisk scooter er en meget vigtig del af scooteren.
Batterierne har betydning for scooterens vægt, rækkevidde og pris.

Nye batterier kan godt koste halvdelen af scooterens ny pris.

Batterierne i en elektrisk scooter kaldes "deep cycle" eller "deep discharge".
Det betyder at de er beregnet til at blive afladt meget i modsætning til starterbatteriet i en ikke elektrisk scooter som ikke er beregnet til at blive afladt så meget.

'.afsnit('Batteri typer','
Lithium Li-ion (Lithium ion)
Lithium Li-polymer (Lithium polymer)
Lithium LiFePO4 (Lithium iron phosphate) (Lithium jern fosfat)

Ni-MH (Nickel metal hydride)

Bly-syre åben flooded (wet) (traditionelt)
Bly-syre lukket SLA
Bly-syre lukket VRLA
Bly-syre lukket AGM (vedligeholdelsesfrit)
Bly-syre - gel (svovlsyren er blandet med silica fume (Mikrosilica))
Bly-syre - silicon/silica gel (er en variant af gel typen som bruger "silicate salt" som elektrolyt)

Ni-Cd (Nickel Cadmium)
').'

'.afsnit('Batteri typer forklaring','
Ni-Cd er en ældre type som vist ikke bruges mere (brugt i Peugeot Scoot\'elec).

Bly-syre er billigste, tyngeste og fylder meget.
Bly-syre gel (brugt i eGO Helio).
Bly-syre gel silicon/silica (brugt i Giantco E-Buddy).

Lithium er en nyere type. De er dyre, lette, fylder ikke så meget og kan oplades/aflades mange gange.
Lithium Li-ion (brugt i EVT 168).
Lithium LiFePO4 (brugt i Busetto ECC-800).

De fleste elektrisk scootere bruger enten en variant af bly-syre eller en variant af lithium.
Ni-Cd og Ni-MH bruges så vidt jeg ved sjældent eller så godt som aldrig i elektriske scootere.
').'

'.afsnit('volt','
En elektrisk scooter kan for eksempel have 4 batterier på 12 volt hver.
Ved at forbinde batterierne i serie får man 48 volt.

48 volt er vist det mest benyttede "system" på elektriske scootere solgt i danmark men man kan også få scootere der bruger 18, 24 eller 64 volt.
').'

'.afsnit('kapacitet - Ah','
Når batterierne forbindes i serie beholdes kapaciteten.
Ved at forbinde 4 batterier i serie som hvert er på 12 volt 50 Ah så får vi 48 volt 50 Ah.
Kapaciteten er altså det sammen når batterierne forbindes i serie.

På eGo Helio findes 2 styks 12 volt batterier.
Man kan derudover købe et ekstra 24 volt batteri som så vidt jeg ved forbindes parrallelt og på den måde beholdes de samme antal volt mens Ah øges og dermed øges rækkevidden.
').'

'.afsnit('watt timer - Wh','
Ved at gange volt med Ah får vi Wh (watt timer).

V * Ah = Wh.

Har er nogle eksempler :

Scooter med 12 volt batterier på 50 Ah = 600 watt timer.
Scooter med 24 volt batterier på 34 Ah = 816 watt timer. (eGo Helio)
Scooter med 48 volt batterier på 33 Ah = 1584 watt timer. (Giantco E-Buddy)
Scooter med 18 volt batterier på 100 Ah = 1800 watt timer. (Peugeot Scoot\'elec)
Scooter med 48 volt batterier på 50 Ah = 2400 watt timer. (EVT 3w)

Watt timer kan vistnok sammenlignes med størrelsen af benzintanken på en benzindrevet scooter.
').'

'.afsnit('vægt','
Her kan man se kapaciteten iforhold til vægten for forskellige batterityper.
'.visbilled('1', 'billed1929.jpg', 'batteri typer wh i forhold til kg', false, true).'
Bly-syre batterier er de tungeste.
Lithium batterier er de letteste.
').'

'.afsnit('afladnings procent - antal opladninger - batteri levetid','
"Deep cycle" bly-syre batterier kan måske aflades 60%.
"Deep cycle" lithium batterier kan måske aflades op til 95%.
Jo dybere batterierne kan aflades jo længere rækkevidde kan man få per opladning.
Jo dybere batterierne aflades mellem hver opladning jo kortere levetid får batterierne.

Hvis batterierne kun aflades 50% mellem hver opladning så vil de få en længere levetid end hvis de aflades 80% mellem hver opladning.

Elektronik i controller eller "battery managment system" beskytter batterierne mod at blive afladt for meget ved at slukke for strømmen til motoren når batteri spændendingen kommer under et vist niveau.
Controlleren kan for eksempel afbryde strømmen når batterispændingen falder under 42 ± 0,5 Volt på en scooter med 48 Volt system.



Jo flere gange batterierne kan aflades/oplades jo længere levetid har batterierne før de trænger til at blive skiftet ud.

"Deep cycle" bly-syre batterier kan måske oplades 200-300 gange.
"Deep cycle" lithium batterier kan måske oplades 500-2500 gange.

Her ses et billede for bly-syre batterier som viser at antal opladninger hænger sammen med hvor meget batterierne aflades.
'.visbilled('1', 'billed1289.jpg', 'afladnings procent og antal opladninger agm og gel', false, true).'

Hvis batterierne aflades så scooteren ikke kan køre mere mellem hver opladning så holder de ikke så længe som hvis de kun aflades delvist mellem hver opladning.

Batterierne mister gradvist evnen til at modtage en fuld opladning og det vil så sige at rækkevidden langsomt falder i takt med hvor mange gange batterierne har være opladt.

Efter hvad jeg har læst skal batterierne typisk skiftes efter 2 til 4 år.
').'
'

,'
garanti periode og reklamationsret
' => '
I Giantco E-Buddy brugermanualen står at T Hansen giver scooterens silicone batterier 1 års garanti eller 250 opladninger hvad end der kommer først.

Det er vist helt almindeligt at sælgeren skriver at batterierne er som en sliddel som ikke er dækket af de normale 2 år reklamationsret.

Købeloven siger at der er 2 års reklamationsret også på batterierne.
'

,'
batterier i forskellige elektriske scootere
' => '
'.afsnit('batterier i EVT 168','
Her ses 2 af batterierne i en EVT 168.
'.visbilled('1', 'billed1414.jpg', 'evt scooter batterier', false, true).'
').'

'.afsnit('batterier i Busetto ECC-800','
Her ses det aftagelige batteri fra Busetto ECC-800.
'.visbilled('1', 'billed2455.jpg', 'busetto ECC-800 batteri', false, true).'
').'

'.afsnit('batterier i E-ton E-mo','
Her ses det aftagelige batteri fra E-ton E-mo.
'.visbilled('1', 'billed1575.jpg', 'e-ton e-mo batteri', false, true).'
').'

'.afsnit('batterier i scooter som ligner Kreidler Hiker Amaze','
Her ses det aftagelige batteri fra en scooter som ligner Kreidler Hiker Amaze.
'.visbilled('1', 'billed3070.jpg', 'ukendt scooter med aftageligt batteri', false, true).'
'.visbilled('1', 'billed3071.jpg', 'ukendt scooter med aftageligt batteri', false, true).'
').'

'.afsnit('batterier i Peugeot Scoot\'elec','
Peugeot Scoot\'elec var vist en af de første elektriske scootere i danmark, hvis ikke den første.

Her ses de 3 batterier som findes i Peugeot Scoot\'elec.
'.visbilled('1', 'billed0670.jpg', 'peugeot scooter\'elec batterier', false, true).'
Nummer 13 viser en 200 ampere sikring.
Batterierne er forbundet med nogle vand slanger.
'.visbilled('1', 'billed0656.jpg', 'peugeot scooter\'elec batterier', false, true).'
Batterierne er af NiCd typen.
Hvert batteri er på 6 volt 100 Ah.
'.visbilled('1', 'billed0657.jpg', 'peugeot scooter\'elec batterier', false, true).'
Her ses en temperatur sensor.
'.visbilled('1', 'billed0107.jpg', 'peugeot scooter\'elec batteri temperatur sensor', false, true).'
Den bruges formodentligt til at afbryder opladningen hvis temperaturen bliver for høj.
Det er noget med at opladningen vistnok ikke starter hvis der er over 55 °Celsius.

Jeg har læst i manualerne af hvis man skal udskifte 1 af de 3 batterier og det nye batteri er afladt så skal de 2 gamle batterier aflades så de har samme volt som det nye batteri.
Derefter skal batterierne monteres i scooteren og oplades.
').'

'.afsnit('batterier i eGO Helio','
Her ses de 2 batterier som sidder i eGO Helio.
De er på 12 volt begge to.
'.visbilled('1', 'billed0673.jpg', 'batterier elektrisk motor ego helio', false, true).'
Ved at montere et ekstra 24 volt batteri kan rækkevidden forlænges.
'.visbilled('1', 'billed1124.jpg', 'ekstra batteri på ego helio', false, true).'
'.visbilled('1', 'billed1454.jpg', 'ekstra batteri på ego helio', false, true).'
').'

'.afsnit('batterier i ukendt scooter (SW 0002)','
'.visbilled('1', 'billed3089.jpg', 'batterier i elektrisk scooter', false, true).'
').'

'.afsnit('batterier i Texas Whisper','
Her ses et af de batterier der måske sidder i Texas Whisper (Selvom 17 Ah vist ikke er rigtigt).
'.visbilled('1', 'billed2972.jpg', 'leader vrla batteri ct17-12LX 12V 12Ah', false, true).'
').'

'.afsnit('batterier i Tisong City 1 TM-300','
'.visbilled('1', 'billed3427.jpg', 'Tisong City 1 TM-300', false, true).'
'.visbilled('1', 'billed3428.jpg', 'Tisong City 1 TM-300', false, true).'
'.visbilled('1', 'billed3429.jpg', 'Tisong City 1 TM-300', false, true).'
'.visbilled('1', 'billed3430.jpg', 'Tisong City 1 TM-300', false, true).'
').'
'

,'
silicone/silicium batterier
' => '
Silicone er et engelsk ord som på dansk hedder silicium.
Silicone batterier er en variant af bly-syre gel typen med silica gel som elektrolyt.
Silicate er et engelsk ord som på dansk hedder silikat og består af en blanding af silicium og ilt.

Det engelske ord silicone betyder ikke det sammen danske ord silikone.

Her ses et silicone batteri fra producenten '.ahref('http://www.greensaver.cn/index_en.html', 'Greensaver').'.
'.visbilled('1', 'billed1573.jpg', 'greensaver battery silicone power mainteance free 12 volt 36 ah 2 hr', false, true).'

Her ses et silicone batteri fra Giantco E-buddy.
'.visbilled('1', 'billed3546.jpg', 'giantco e-buddy batteri guineng china silicone power battery 6-DW-33Ah (12B33Ah) Jiang Men Yu Yang Special Storage Battery CO., Ltd Made in China', false, true).'

Her ses et silicone batteri fra en ukendt scooter.
'.visbilled('1', 'billed3135.jpg', 'guineng 6-DW-20Ah(12V20Ah) China Silicone Power Battery', false, true).'

Kreidler Hiker Amaze bruger også silicone batterier.
'

,'
rækkevidde måling
' => '
I en manual har jeg læst følgende omkring måling af gennemsnitlig rækkevidde.

'.citat('
The average driving range is obtained under standard conditions as follows:

Load Weight: 75kg/170lbs; Temperature: 20degC/70degF; Wind Speed: ≤3M-
s/10ft-s; Non-stop Driving; mild stop starting conditions; flat Road NB: testing
Stop when 42V±0,5V battery power remains.
').'
'.afsnit('Oversat betyder det at...', '
Den gennemsnitlige rækkevidde er udregnet under standard forhold på følgende måde :

Belastning (vægt af fører) : 75 kg.
Temperatur : 20 °Celsius.
Vindhastighed : ≤ 3 Meter/s.
Uafbrudt kørsel med milde stop start forhold på flad vej.
Testen slutter når der er 42 ± 0,5 Volt tilbage på batteriet.
').'
Jeg ved ikke om det er en standard der er almindeligt brugt når en scooters rækkevidde skal måles.
'

,'
nye batterier
' => '
I de forskellige manualer står at nye batterier skal oplades/aflades nogen gange får de opnår fuld kapacitet.

Det kan for eksempel være 10-15 opladninger/afladninger der skal til.
'

,'
hvor kan jeg købe nye batterier til min elektriske scooter ?
' => '
Der er af og til nogen der spørger mig hvor man kan købe nye batterier til deres elektriske scooter.

Jeg har sjældent et godt svar til spørgsmålet men her vil jeg samle information om hvor man måske kan købe batterier til elektriske scootere efterhånden som jeg får viden om det.

Man kan jo prøve der hvor scooteren er købt eller spørger dem der har importeret den hvis man kan finde dem.
Det lader til at mange af dem som har solgt elektriske scootere lukker eller stopper rimelig hurtigt.

Først skal man finde ud af hvilke batterier der sidder i scooteren.
De nye batterier skal være samme slags så de passer til batteriopladeren.
Man kan sikkert godt købe en anden type batterier men så skal man nok også have en ny batterioplader.
Ah behøver så vidt jeg kan forstå ikke at være det samme, men tallet har betydning for rækkevidde og eventuel opladningstid.

De batterier man skal købe skal hedde "dybde-cycle", "deep cycle", "dybde afladelige" eller noget i den stil.
Hvis man købe starterbatterier kommer de nok hurtigt til at blive ubrugelige da de ikke er beregnet til at blive afladt særlig meget.

Ellers kan man prøve følgende steder.

'.ahref('http://dk.rs-online.com/web/p/genopladelige-blybatterier/7270451/', 'GEL batterier fra RS Components (varenummer : 727-0451)').'
'.ahref('http://dk.rs-online.com/web/p/genopladelige-blybatterier/7270420/', 'AGM batterier fra RS Components (varenummer : 727-0420)').'
Hvis du bestille hos rs components så skriv 00000000 som CVR nummer hvis du er privatkunde.

'.ahref('http://jysk-akku.dk/').' (Der er en bruger som har købt batterier til sin Tisong City 1 TM-300 her. I skrivende stund har jeg dog ikke hørt om batterierne passede og hvordan det går med at bruge dem).

'.ahref('http://www.batterishoppen.dk/produkter/CTD1226.htm').' (der er en der har købt 4 batterier her til sin Giantco E-Buddy selvom dimensionerne ikke er helt de samme så batterierne skulle ligge på siden).
'.ahref('http://billigebatterier.dk/product.asp?product=1364').'.

'.ahref('http://www.batteribyen.dk/hus-og-have-batterier/elektriske-koeretoejer').'
'.ahref('http://victron.dk/group.asp?group=20&sort=&page=1').'
'.ahref('http://www.vbat.co.uk/Deep-Cycle-AGM-GEL-Sealed-Lead-Acid-Batteries.asp').'
'.ahref('http://stratosol.dk/category/batterier-20/').'
'.ahref('http://kerychip.dk/oscommerce_st/catalog/index.php?cPath=32_71').'

'.ahref('http://www.thansen.dk/').' (De har batterier til Giantco E-buddy, måske de passer til andre også).
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
