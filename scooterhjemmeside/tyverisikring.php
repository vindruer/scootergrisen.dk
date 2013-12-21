<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "tyverisikring (låse og alarmer) til scootere og knallerter";
$overskrift = "tyverisikring (låse og alarmer) til scootere og knallerter";
$metadescription = "lær hvordan du kan sikre din scooter/knallert mod tyveri med låser, alarmer og GPS sporing";

$GLOBALS['setup']['head'] = '
<style type="text/css">

.plusogminusholder {
   margin: 20px;
}

.plusogminusbilled {
   padding-top: 0;
   padding-bottom: 0;
   border: 0 solid #000;
}

.plusogminusbilled img {
   padding: 6px 5px 0;
   margin: 0;
}

.plusogminusforklaring {
   margin-left: 40px;
}

.plusogminustekst {
   margin-left: 5px;
}

</style>
';


$databasecenter = array(

'
introduktion
' => '
Her kan du læse hvordan du sikre din scooter mod tyveri.
'.visbilled('1', 'billed0712.jpg', 'scooter dæk låst til lygtepæl', false, true).'
'

,'
råd
' => '
'.listemedgrafik(array(
    'Brug låsene. Det hjælper ikke at låsene ligger i hjelmrummet når tyven kommer forbi og stjæler scooteren.'
   ,'Tag scooteren ind om natten hvis du har mulighed for det.'
   ,'Lås baghjulet fast til for eksempel en lygtepæl, cykelstativ eller lignende. Det er bedst at låse baghjulet fast fordi det er letteste for tyven af afmontere forhjulet.'
   ,'Stil ikke scooteren ved togstationer og busstoppesteder da chancen for tyveri er særlig stor her.'
   ,'Tag nogle gode billeder af din scooter så du har noget at vise hvis den skulle blive stjålet.'
   ,'Vælg en scooter model som ikke er populær at stjæle når du skal købe ny scooter.'
   ,'Stil scooteren på steder hvor der kommer mange mennesker forbi regelmæssigt så tyven ikke kan står og arbejde uden nogen ser det.'
   ,'Hvis du ikke låser scooteren fast til noget så kan 2 tyve løfte den ind i en bil og køre væk.'
   ,'Hvis du kun bruger styrlås og skivebremselås så kan tyven løfte forhjulet og trille scooteren væk på baghjulet.'
   ,'Styrlåsen er let at brække op så bruge også andre låse.'
   ,'Tag styrthjelm og andet af værdi med når du forlader scooteren.'
))
.'
Det kriminalpræventive råd har lavet denne folder med råd.
'.visfil('1', 'scooterhjemmeside/download/stopmcellerknallerttyven.pdf', 'stop MC eller knallerttyven').'
'

,'
låsetyper
' => '
'.afsnit('tændingslås','
'.visbilled('1', 'billed0358.jpg', 'tændingslås').'
Indbygget i de fleste scootere hvor styret kan låses fast så det drejer til siden hele tiden.
'.vudering(array(
    array('+',  'meget let at bruge')
   ,array('+',  'man kan ikke glemme at tage låsen med')
   ,array('-', 'kan let ødelægges ved at dreje styret')
   ,array('-', 'tyven kan løfte op i forhjulet og trille scooteren væk')
   )).'
').'

'.afsnit('kæde','
'.visbilled('1', 'billed0356.jpg', 'kæde').'
Består af led og kan have en stofstrømpe udenom for at beskytte fælg og maling.
'.vudering(array(
    array('+',  'god sikkerhed')
   ,array('+',  'fleksibel, kan låses om pæl/træ/cykelstativ')
   ,array('+',  'man kan selv vælge hvilken lås man vil bruge til kæden')
   ,array('-', 'tung')
   ,array('-', 'besværlig at bruge')
   )).'
').'

'.afsnit('bøjlelås','
'.visbilled('1', 'billed0355.jpg', 'bøjlelås').'
'.vudering(array(
    array('+',  'god sikkerhed')
   ,array('+',  'svær at bide og save over')
   ,array('-', 'kan ikke foldes sammen')
   ,array('-', 'kan ikke bruges på alle fælge')
   )).'
').'

'.afsnit('skivebremselås','
'.visbilled('1', 'billed0354.jpg', 'skrivebremselås').'
Låser et hjul så det ikke kan drejes mere rundt end en omgang.
'.vudering(array(
    array('+',  'lille og let at bruge')
   ,array('+',  'kan ofte låses uden brug af nøgle')
   ,array('-', 'kræver at scooteren har skivebremse')
   ,array('-', 'man kan glemme at låsen sidder på når man køre')
   )).'
').'

'.afsnit('wirelås','
<div style="float: left;">'
.visbilled('1', 'billed0357.jpg', 'wirelås')
.visbilled('1', 'billed0369.jpg', 'wirelås')
.'</div>
<div class="clearboth"></div>
Meget fleksibel. Består typisk af wirere som er beskyttet af led som igen er beskyttet med plastik.
'.vudering(array(
    array('+',  'let at bruge')
   ,array('+',  'fleksibel')
   ,array('+',  'kan ofte låses uden brug af nøgle')
   ,array('-', 'nogle modeller er lette at bide over')
   )).'
').'

'.afsnit('specielle låse','
<div style="float: left;">'
.visbilled('1', 'billed0371.jpg', 'griplock lås')
.visbilled('1', 'billed1318.jpg', 'griplock lås')
.visbilled('1', 'billed0372.jpg', 'speciel lås')
.'</div>
<div class="clearboth"></div>
Her ses nogle lidt mere specielle låse som man ikke ser så tit.
'.vudering(array(
   )).'
').'

'.afsnit('alarmer','
<div style="float: left;">'
.visbilled('1', 'billed0360.jpg', 'alarm med fjernbetjening')
.visbilled('1', 'billed0370.jpg', 'kædelås og skrivebremselås med alarm')
.'</div>
<div class="clearboth"></div>
De fleste alarmer har nok bevægelses sensor og giver en høj lyd når alarmen bevæges.
Nogle alarmer fås med 2-vejs fjernbetjening som kan give besked når der sker noget.

Hvis tyven kan se en alarm på scooteren vil tyven muligvis opgive at stjæle scooteren.
En høj alarm lyd skal nok virke afskrækkende på tyven.
'.vudering(array(
    array('+',  'kan give lyd signal så tyven skræmmes væk')
   ,array('+',  'universal alarm til ledningsnet er let at montere på de scootere som har et forberedt stik')
   ,array('-',  'universal alarm til ledningsnet er svær at montere på de scootere som ikke har et forberedt stik')
   ,array('-',  'kan løbe tør for strøm')
   )).'
').'

'.afsnit('startspærre','
Nogle scootere kan have en nøgle som sender et elektronisk signal når man sætter nøglen i tændingen og drejer til ON.

Det elektroniske signal opfanges af en antenne omkring tændingslåsen som er forbundet med selve startspærre elektronikken som også kaldes immobiliser.

'.visbilled('1', 'billed0722.jpg', 'startspærre').'
På Sym Mio er der en knap under sædet så motoren ikke kan startes.
Knappen afbryder forbindelsen mellem pickup og CDI.
'.vudering(array(
   )).'
').'

'.afsnit('GSM, GPRS, GPS sporing','
<div style="float: left;">'
.visbilled('1', 'billed0366.jpg', 'gps micro tracker')
.visbilled('1', 'billed0750.jpg', 'gps micro tracker')
.visbilled('1', 'billed1453.jpg', 'gps micro tracker adapter')
.'</div>
<div class="clearboth"></div>
Bruger mobiltelefonnettet til at sende SMS beskeder med koordinationer fra GPS satellitterne om hvor den befinder sig.
Positionen kan man så indtaste på for eksempel en GPS navigator eller kortsystem på nettet for at se hvor trackeren befinder sig.
Der skal indsættes et SIM kort i trackeren som man selv skal købe.
Du kan også ringe til trackeren som har en indbygget mikrofon så du eventuelt kan høre hvad tyven siger.
Trackerens nøjagtighed er på under 5 meter.
Trackeren kan have et indbyggede batteri ligesom en mobiltelefon med for eksempel 48 timers standby og 2 timers aflytning men kan også fås med større batteri med for eksempel 1500 timers standby (62 døgn).
Og hvis man ønsker kan trackeren tilsluttes scooterens batteri og dermed forlænge standby tiden.
Det er nok vigtigt at lave en strøm kilde til trackeren som er skjult og svær at finde for tyven.
Man skal betale det eventuelle abonnement man vælger at købe med sit SIM kort.
'.vudering(array(
    array('+',  'unik mulighed for at finde scooteren')
   ,array('+',  'meget lille')
   ,array('+',  'indbygget mikrofon')
   ,array('-', 'afhængig af mange led skal virke. Batteriet, GSM nettet og GPS satellitterne')
   ,array('-', 'kort batteri levetid hvis tyven afbryder strømmen')
   )).'
').'
'

,'
tyvens værktøj
' => '
'.afsnit('boltsaks','
'.visbilled('1', 'billed0361.jpg', 'boltsaks').'
Dette værktøj kan klippe hængelåse, kæde led og wire over.
').'

'.afsnit('nedstryger','
'.visbilled('1', 'billed0362.jpg', 'nedstryger').'
En metalsav der kan skærer mindre stykker metal over. Det er svært for tyven at save kæde led da det er svært at holde et led helt stille mens der saver. Hærdet metal vil muligvis være svært at save i for dette værktøj.
').'

'.afsnit('vinkelsliber','
'.visbilled('1', 'billed0363.jpg', 'vinkelsliber').'
De fleste vinkelslibere kræver nok en stik kontakt men man kan også få disse med batteri så de kan tages med overalt.
Det er svært at beskytte sig med metal med en vinkelsliber da den kan skærer sig igennem det meste hvis bare der er tid nok.
Derimod larmer det utrolig meget at bruge en vinkelsliber.
').'

'.afsnit('hammer, skruetrækker og bidetang','
'.visbilled('1', 'billed0364.jpg', 'hammer skruetrækker bidetang').'
Kan bruges til at komme ind til tændingslåsen for at kortslutte tændingen så tyven kan starte scooteren uden brug af nøglen.
Bidetangen kan bruges til at klippe wirelåse over.
').'

'.afsnit('tid','
'.visbilled('1', 'billed0365.jpg', 'ur').'
Når vi snakker om låse så kan alle låse i hele verden nok åbnes, det handler mest om tid.
Så hvis scooteren står et ødet sted så er det næsten lige meget hvilken lås der er på.
').'

'.afsnit('dirkesæt','
'.visbilled('1', 'billed0367.jpg', 'dirkesæt').'
Med et dirkesæt og lidt træning vil man kunne åbne diverse låse.
Nogle låse er lettere og åbne end andre så det gælder om at købe en lås det ikke er let at dirke.
').'

'.afsnit('bankenøgler','
'.visbilled('1', 'billed0368.jpg', 'nøgler').'
Man kan købe eller selv lave bankenøgler som virker ved at man har en nøgle som passer i låsen men hvor alle "hakkerne" er filet ned til det laveste niveau.
Så kan man prøve at åbne låsen på "normal vis" ved at banke på nøglen og uden at ødelægge låsen.
').'
'

,'
hvis din scooter er blevet stjålet 
' => '
Ring til politiet på 114 og meld din scooter stjålet eller '.ahref('http://www.politi.dk/da/servicemenu/selvbetjening/', 'anmelde den stjålet online').'.

Gå en tur rundt i området der hvor den blev stjålet.
Det kan være tyven har smidt den fra sig 200 meter nede af vejen.
'

,'
hvorfor stjæler folk scootere ?
' => '
Her er nogle gæt...

Fordi de keder sig.
Fordi de ikke har råd til selv at købe en scooter.
Fordi de selv har fået stjålet deres scooter.
Fordi de skylder eller mangler penge.
Fordi deres venner stjæler scootere.
Fordi deres venner har scooter.
Fordi de mangler reservedele.
Fordi de skal vise hvor seje de er for deres venner.
Fordi de er trætte af at vente på bussen.
Fordi forældrene ikke har formået at opdrage deres afkom.
'

,'
stjålet scooter
' => '
Her ses en scooter efter tyveri.

Ratlåsen blev ødelagt ved at dreje styret.
4 skruer blev fjernet.
'.visbilled('1', 'billed0683.jpg', 'kymco super 8 4T stjålet og brudt op ved tændingslås', false, true).'
Der blev banket hul ind til tændingsstikket som blev afmonteret.
Tyvene har åbenbart forsøgt at starte scooteren uden nøgle.
'.visbilled('1', 'billed0684.jpg', 'kymco super 8 4T stjålet og brudt op ved tændingslås', false, true).'
'

,'
dårlig samlet lås
' => '
En af de kædelåse jeg har købt hos t-hansen viste sig at være dårligt samlet.

Plastikken omkring låsen kan fjernes nogenlunde let med en skruetrækker.
'.visbilled('1', 'billed1179.jpg', 'dårlig lås fra t-hansen', false, true).'
Igennem låsehuset sidder en bolt som er trykt i begge ender.
Det er så meningen at trykket skulle få bolten til at udvidde sig i enderne så den sidder fast.
'.visbilled('1', 'billed1182.jpg', 'dårlig lås fra t-hansen', false, true).'
På min lås er den ene ende af bolten bare ikke udvidet så den sidder ikke fast.
Man kan med en finger let trykke bolten igennem til den anden side.
'.visbilled('1', 'billed1180.jpg', 'dårlig lås fra t-hansen', false, true).'
Og så kan lås og kæde tages fra hinanden.
'.visbilled('1', 'billed1181.jpg', 'dårlig lås fra t-hansen', false, true).'
Jeg bruger ikke denne lås på min scooter mere efter jeg fandt ud af hvor let den er at skille ad.
'

,'
tændingslås
' => '
'.ahref('elektrisk_kontakter.php#tendingslas', 'Tændingslås').'
'

,'
sædelås
' => '
'.visbilled('1', 'billed1896.jpg', 'kymco super 8 4T sædelås', false, true).'
'.visbilled('1', 'billed1895.jpg', 'kymco super 8 4T sædelås', false, true).'
'.visbilled('1', 'billed1864.jpg', 'kymco super 8 4T sædelås', false, true).'
'.visbilled('1', 'billed1860.jpg', 'kymco super 8 4T sædelås', false, true).'
'.visbilled('1', 'billed1865.jpg', 'kymco super 8 4T sædelås adskildt', false, true).'
'.visbilled('1', 'billed1866.jpg', 'kymco super 8 4T sædelås', false, true).'

'.visbilled('1', 'billed1863.jpg', 'kymco super 8 4T sædelås', false, true).'
'.visbilled('1', 'billed1861.jpg', 'kymco super 8 4T sædelås', false, true).'
'.visbilled('1', 'billed1862.jpg', 'kymco super 8 4T sædelås', false, true).'
'

,'
steel mate
' => '
Set hos '.ahref('http://www.thansen.dk/product.asp?c=727122236&n=1388158449&pn=1388158518', 'T Hansen').'.
'.visbilled('1', 'billed2369.jpg', 'steel mate alarm til scooter', false, true).'
'.visfil('1', 'scooterhjemmeside/download/steelmate_brugermanual.pdf').'
'.visflash('0', 'http://www.youtube.com/watch?v=loj_XtcrfR0', 'steel mate 886G').'
'

,'
beeper x6r
' => '
Modellen hedder måske også JJ-MB-04-1.
Set hos '.ahref('http://www.pixmania.com/dk/dk/home.html', 'Pixmania').' men de har den ikke mere i skrivende stund.
'
.visfil('1', 'scooterhjemmeside/download/beeperx6r_brugermanual.pdf')
.visfil('1', 'scooterhjemmeside/download/beeperx6r_eldiagram.png')
.visfil('1', 'scooterhjemmeside/download/pixmaniax6r_brugermanual.pdf')
.visfil('1', 'scooterhjemmeside/download/pixmaniax6r_eldiagram.png')
.'
'.visflash('0', 'http://www.dailymotion.com/video/xehyn0', 'montering og demonstration af Beeper X6R').'
'

,'
tnt
' => '
Set hos '.ahref('http://www.speedline.dk/da/scooter/alarm-tnt-sa-187146/', 'speedline.dk').'.
'.visbilled('1', 'billed2498.jpg', 'TNT alarm', false, true).'
'.visbilled('1', 'billed2545.jpg', 'TNT alarm', false, true).'
'.visflash('0', 'http://www.youtube.com/watch?v=F6giSkpO_JM', 'demonstration af TNT alarm').'
'

,'
piranha c559
' => '
Set hos '.ahref('http://www.mcshopamok.dk/product/piranha-c559-tyverialarm-1640/', 'mcshopamok.dk').' og '.ahref('download/pgo_katalog_2011_2012.pdf', 'PGO scooter 2011-2012 (se side 15)').'.
'.visbilled('1', 'billed2435.jpg', 'piranha alarm', false, true).'
'.visbilled('1', 'billed2436.jpg', 'piranha fjernbetjeninger', false, true).'
'

,'
spinsat z-sat
' => '
Set hos '.ahref('http://www.mcshopamok.dk/product/spinsat-z-sat-satellitovervaagning-1641/', 'mcshopamok.dk').'.

Med GSM og GPS.

'.visbilled('1', 'billed2450.jpg', 'spinsat z-sat', false, true).'
'.visbilled('1', 'billed2451.jpg', 'spinsat z-sat', false, true).'
'

,'
smart kit 1011
' => '
Set hos '.ahref('http://elektronik-lavpris.dk/product_info.php?products_id=13064', 'elektronik lavpris').'.
Man skal selv samle og lode elektronikken og købe en boks og sirene til.
'.visbilled('1', 'billed2409.jpg', 'smart-kit no 1011', false, true).'
'

,'
honest
' => '
Set hos '.ahref('http://www.dba.dk/', 'den blå avis').' og '.ahref('http://www.speedline.dk/da/scooter/alarm-honest-traadloes-s-dc/', 'speedline.dk').'.
Både alarmen og fjernbetjeningen er trådløse. Der er ingen ledninger som skal monteres.
'.visbilled('1', 'billed2402.jpg', 'nemalarm', false, true).'
Der er en tænd og sluk knap på siden af alarmen.
'.visbilled('1', 'billed2403.jpg', 'nemalarm', false, true).'
Alarmen bruger et 9 volt batteri.
'.visbilled('1', 'billed2404.jpg', 'nemalarm', false, true).'
'.visflash('0', 'http://www.youtube.com/watch?v=zgS4l5yI5Is', 'honest alarm demonstration').'
'

,'
alarm montering
' => '
På nogle scootere er der forberedt et stik i ledningsnettet så man let kan tilslutte en alarm.
Det er vist gerne de kinesiske scootere der har dette forberedte stik.
'.visbilled('1', 'billed2546.jpg', 'stik til alarm', false, true).'
Løkken (kortslutningen) forbinder CDI boksen med dødmandsknappen (og tændingslåsen).
'.visbilled('1', 'billed3335.png', 'baotian BT49QT-7 eldiagram med tydelige ledning til alarmstikket', false, true).'
Når man bruger dødmandsknappen (eller tændingslåsen drejes til OFF) så jordes ledningen til CDI boksen og motoren stopper.
Det er sikkert anderledes på andre scootere.
'.visbilled('1', 'billed2395.jpg', 'stik til alarm', false, true).'
Man tager bare stikket med løkken af og sætte stikket fra alarmen i.
'.visbilled('1', 'billed2908.jpg', 'stik med kortslutning', false, true).'
'.visbilled('1', 'billed2396.jpg', 'stik med kortslutning', false, true).'
Der er også en ekstra stelforbindelsesledning som skrues fast til stellet.
Det kan sikkert være en god ide at slibe malingen af så der er god forbindelse.
'.visbilled('1', 'billed2547.jpg', 'stik med kortslutning', false, true).'

Hvis scooterens ledningsnet ikke har et forberedt stik til alarmen så bruges det medfølgende stik som sættes til alarmen og de løse ledninger forbindes/loddes som det er vist i el diagrammeret.
'.visbilled('1', 'billed2431.jpg', 'alarm stik til lodning', false, true).'
'

,'
alarm el diagrammer
' => '
Det kan godt være jeg er idiot til at læse el diagrammer til alarmer men jeg syntes godt nok ikke de er lette at forstå.
Det er ikke altid der er gjort så meget ud af at oversætte til de rigtige ord.

Her er nogen af de alarm el diagrammer jeg har kunne finde.

'.visbilled('1', 'billed3269.jpg', 'el diagram til scooter alarm', false, true).'
'.visbilled('1', 'billed2397.jpg', 'el diagram til scooter alarm', false, true).'
'.visbilled('1', 'billed2399.jpg', 'el diagram til scooter alarm', false, true).'
'.visbilled('1', 'billed2398.jpg', 'el diagram til scooter alarm', false, true).'
'.visbilled('1', 'billed2499.jpg', 'el diagram til scooter alarm', false, true).'
'.visbilled('1', 'billed2400.jpg', 'el diagram til scooter alarm', false, true).'
'.visbilled('1', 'billed2401.jpg', 'el diagram til scooter alarm', false, true).'
'.visbilled('1', 'billed3246.jpg', 'el diagram til scooter alarm', false, true).'

Den blå ledning som kaldes Engine start/Start +/Starting wire skal forbindes til ledningen mellem startknap og starterrelæ.
Den grå ledning som kaldes Engine-off/AC Ignition disable/Off wire skal forbindes til dødmandsknappen.

På "Battery ignition type" forbindes 2 ledninger fra alaram til tændingslåsen.
På "None battery ignition type" forbindes 4 ledninger fra alaram til tændingslåsen.
'

,'
experimental eldiagram til universal alarm på scooter
' => '
Ud fra de alarm diagrammer jeg har set har jeg prøvet og tegne et diagram på dansk som er lettere at forstå.

Jeg arbejder stadig på det så det er sikkert ikke så let at forstå endu og det er ikke sikkert jeg har tegnet ledningerne rigtigt endnu.

Men her er hvad jeg har lavet indtil videre.
'.visbilled('1', 'billed2432.jpg', 'experimental eldiagram til universal alarm på scooter', false, true).'
Jeg er i tvivl ved følgende ledninger : hvid/sort, sort/hvid, grå, pink.

Det ser ud til at der er 2 eller 3 forskellige måder at forbinde ledningerne på alt efter om scooter har "batteri tænding/DC CDI" eller "ikke batteri tænding/AC CDI".

Her ses ledningerne som forbindes/loddes til ledningsnettet og stikket forbindes til alarmen.
'.visbilled('1', 'billed2544.jpg', 'stik til alarm med 8 ledninger sort rød grå pink blå gul gul/grøn orange', false, true).'
Der er plads til 9 ben (ledere) i stikket men det er ikke sikkert allesammen bruges.

Her ses at den sorte (eller sort/hvide) ledning er blevet klippet over også er den pink og den grå ledning sat på de afklippede ender.
'.visbilled('1', 'billed2543.jpg', 'sort eller sort/hvid ledning klippet over og pink og grå ledning fra alarm monteret', false, true).'

'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
