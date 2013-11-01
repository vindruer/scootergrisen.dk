<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "elektrisk - Service";
$overskrift = "elektrisk - Service";
$metadescription = "service af elektriske dele på scootere og knallerter, ibrugtagning af nyt batteri, kontrol af batteri, service af ECU";

$databasecenter = array(

'
kontroller batteri
' => '
Batteriets volt niveau kan måles med et multimeter.
'.visbilled('1', 'billed0741.jpg', 'multimeter', false, true).'

'.afsnit('Mål batteriets volt niveau','
Fjern første det negative (-) kabel fra batteriet.
Fjern derefter det positive (+) kabel fra batteriet.
Fjern batteriet fra scooteren.
Hvis scooteren lige har været brugt så vent 30 minutter så spændingen kan stabilisere sig og målingen bliver korrekt.
Indstil multimeteret til jævnstrøm (=).
Forbind multimeteret til batteriet. Rød til + og sort til -.
Aflæs volt niveauet på multimeteret (for eksempel 12,65 volt).

Denne måling kaldes en ubelastet måling da der ikke bliver brugt strøm fra batteriet under målingen.

Sammenlign målingen med tallene i tabellen.
'.visbilled('1', 'billed0262.jpg', 'batteri opladningsniveau i forhold til volt', false, true).'
Måler du 12,5 volt eller mindre på et vedligeholdelsesfrit bly-syre batteri eller 12,1 volt eller mindre på et tradionelt batteri så trænger batteriet til '.ahref('service_elektrisk.php#oplad_batteri', 'opladning').'.
').'
'.afsnit('Belastet måling','
En belastet måling giver en mere præcis måling af batteriets opladningsniveau end den ubelastede måling.

For at være sikker på at batteriet kan levere en høj strømstyrke ved højt strømforbrug når man bruger starter motoren kan man udfører en belastningsprøve.

En belastningsprøve kan udføres med en belastningstester som måler batteriets volt niveau mens det bliver udsat for et højt strømforbrug.

Typisk bruges der et strømforbrug som er 3 gange højere end batteriets Ah i 10-15 sekunder.

Ved at se batteriets volt niveau 10-15 sekunder inde i belastningsprøven kan man få en ide om batteriets tilstand.

Hvis batteriets volt niveau falder under 10,5 volt 10-15 sekunder inden i belastningsprøven så trænger batteriet til '.ahref('service_elektrisk.php#oplad_batteri', 'opladning').'.

'.visflash('0', "http://www.youtube.com/v/XuZhf2J-NIg", 'brug af belastningsmåler', true).'
').'

'.afsnit('Massefylde måling','
Et hydrometer bruges til måling af batterisyrens massefylde.
'.visbilled('1', 'billed0263.jpg', 'Hydrometer', false, true).'
Det er kun meningen at man skal måle batterisyrens massefylde på traditionelle bly-syre batterier med skruer.
Vedligeholdelsesfrie bly-syre batterier har en plastik strip som det ikke er meningen man skal tage af da det vil give ubalance i batteriets celler og forringe batteri ydelsen (har jeg læst).

Nogle hydrometer har 5 små kugler i stedet for en flyder.
Hydrometeret med flyderen skulle være mere præcis end den med kuglerne.

'.afsnit('Sådan gør du','
Skru skruerne af batteriet.

Sæt hydrometerets "snabel" ned i et af hullerne og sug en smule batterisyre op.

Aflæs hydrometeret. For eksempel 1,250 (skriv det eventuelt ned).
'.visbilled('1', 'billed2045.jpg', 'hydrometer aflæsning', false, true).'

Lad batterisyren løbe tilbage i samme hul som det blev suget op fra.

Gentag målingen for de andre huller.
').'

Sammenlign med tallene i tabellen:
'.visbilled('1', 'billed0821.jpg', 'opladnings niveau hydrometer flyder multimeter 5 kugler', false, true).'
Generelt viser en massefylde på 1,265-1,280 at batteriet er fuldt opladt.

Massefylden påvirkes af temperaturen.
Målingen skal normalt tages ved 20-25 °Celsius.

Jo højere temperatur jo lavere vil hydrometeret vise.
Massefylden falder med cirka 0,007 for hver 10 °Celsius temperaturen stiger.
').'
'

,'
oplad batteri
' => '
Hvis det er et traditionelt bly-syre batteri som skal oplades så skru påfyldningsskruerne af og lad dem sidde løst over hullerne.

'.afsnit('Tilslut oplader','
Sluk for opladeren inden du tilslutter kablerne for at undgå gnister.

Forbind først opladerens positive (+) røde tang til batteriets positive (+) terminal.
Forbind derefter opladerens negative (-) sorte tang til batteriets negative (-) terminal.
'.visbilled('1', 'billed0296.jpg', 'batteri sat til opladning', false, true).'
').'

'.afsnit('Opladning med automatisk oplader','
Tænd for opladeren.

Den automatiske oplader finde selv ud af hvor mange ampere og volt der skal lades med og hvornår batteriet er fuldt opladt.

Opladerens lamper viser hvornår opladningen er færdig.
'.visbilled('1', 'billed0877.jpg', 'OptiMate 4 batterioplader lamper', false, true).'
').'

'.afsnit('Opladning med "constant current" oplader','
Indstil opladeren til 1/10 ampere af batteriets Ah.
Hvis det er et 7 Ah batteri så indstil opladeren til 0,7 ampere.

På batteriet kan for eksempel stå STD. : 0,7A x 5~10h.
'.visbilled('1', 'billed0297.jpg', 'batteri', false, true).'
Det betyder at batteriet kan oplades med 0,7 ampere i 5 til 10 timer.
Umiddelbart vil jeg tro at de 5 til 10 timers ladetid er hvis batteriet er 50% opladt.

Tænd for opladeren.

Ladetiden afhænger af hvor afladt batteriet er.

Her ses hvor længe et vedligeholdelsesfrit bly-syre batteri skal oplades hvis man bruger en "constant current" oplader.
'.visbilled('1', 'billed0259.jpg', 'VRLA batteri opladnings niveau', false, true).'
Har man et 7 Ah vedligeholdelsesfrit bly-syre batteri med en spænding på 12,2 volt så kan det oplades i 5 til 11 timer med en "constand current" oplader som er sat til 0,7 ampere.
').'

'.afsnit('Opladningener i gang','
Hold øje med opladerens lys/viser og se om batteriet oplades.

Check engang imellem om batteriet er så varmt at det er ubehageligt at røre.
Hvis batteriet bliver ubehageligt at røre så afbryd opladningen, lad batteriet køle ned og forsæt opladningen.
').'

'.afsnit('Efter opladningen','
Vent mindst 30 minutter efter opladningen og '.ahref('service_elektrisk.php#kontroller_batteri', 'kontroller batteri').'.

Et vedligeholdelsesfrit bly-syre batteri skal minimum have 12,8 volt.
Et traditionelt bly-syre batteri skal minimum have 12,4 volt.

Oplad batteriet yderligere hvis det ikke har opnået det ønskede volt niveau.

Hvis batteriet ikke kan holde det ønskede volt niveau så kan det være fordi batteriet har taget skade hvis det for eksempel har været afladt længe eller hvis det bare er normalt brugt og trænger til udskiftning.
').'

'.afsnit('Hurtig opladning','
På batteriet kan for eksempel stå QUICK : 3A x 1h.
Oplad batteriet med 3 ampere i 1 time med en "constant current" oplader.

Hurtig opladning (Quickcharge) bør kun bruges i nødstilfælde da det ikke er godt for batteriet.

I servicemanualen til Yamaha giggle står for eksempel "Warning - Do not quick charge a batteri".

Yuasa skriver om quickcharing : "don\'t".
').'
'

,'
oplader typer
' => '
Dette er nok den simpleste oplader type.
Her skal man selv afbryde opladningen.
Denne oplader type er kun beregnet til traditionelle batterier.
'.visbilled('1', 'billed0260.jpg', 'batterioplader', false, true).'

Her ses en automatisk oplader som hedder '.ahref('specielt_optimate4.php', 'TecMate OptiMate 4').'.
Den kan bruges til traditionelle, vedligeholdelsesfrie og gel batterier.
Den har ingen knapper og man kan lade den være tilsluttet batteriet så længe man har lyst.
Lader man oplader stå tilsluttet i lang tid stå den og holde batteriet fuldt opladt selvom batteriet selvaflader.
Lamperne fortæller hvad opladeren er i gang med og om batteriets tilstand.
'.visbilled('1', 'billed0258.jpg', 'OptiMate 4 batterioplader', false, true).'

Her ses en automatisk oplader som hedder Yuasa MB-2020.
Der er en tænd/sluk knap og en knap hvor man kan indstille om den skal oplade et nyt batteri (NEW) eller et brugt batteri som har været opladt før (NORMAL).
'.visbilled('1', 'billed0268.jpg', 'Yuasa batterioplader', false, true).'

Her ses en automatisk oplader som hedder '.ahref('specielt_ctekxs800.php', 'CTEK XS 800').'.
'.visbilled('1', 'billed0275.jpg', 'CTEK batterioplader', false, true).'

'.afsnit('constant current og constant voltage','
En oplader type hedder "constant current" fordi de oplader med de samme antal ampere hele tiden som ikke ændres under opladningen.
En "constant current" oplader kan for eksempel oplade med 5 ampere.

En anden oplader type hedder "constant voltage" fordi de oplader med de sammen antal volt hele tiden som ikke ændres under opladningen.
En "constant voltage" oplader kan for eksempel oplade med 14,40 til 14,70 volt.
').'

'.afsnit('variable current og variable voltage','
En "variable voltage" oplader variere volt niveauet under opladningen.
En "variable current" oplader variere ampere niveauet under opladningen.
').'
'

,'
ladekurver
' => '
'.afsnit('ladekurver','
Når en automatisk oplader ændre volt og ampere niveau under opladningen får vi det jeg kalder ladekurver.

Her ses ladekurver for CTEK XS 800 med 3 forskellige opladningsstadier.
Hoved opladningen er den periode hvor 80% af opladningen sker.
Absorbering oplader til næsten 100%.
Puls holder batteriet fuldt opladet mellem 95% og 100%.
'.visbilled('1', 'billed0264.jpg', 'puls lader', false, true).'

En automatisk oplader kan stå og skifte mellem de forskellige faser flere gange under opladningen.

Her ses flere ladekurver som en oplader kan gennemgå.
'.visbilled('1', 'billed0265.jpg', 'Lade kurver', false, true).'

Her ses ladekurver for OptiMate 4.
Den røde periode til venstre startes hvis batteriet er sulfateret.
De gule perioder i midten er selve hoved opladningen.
De grønne perioder til højre er vedligeholdelse som holder batteriet fuldt opladt.
'.visbilled('1', 'billed0284.jpg', 'OptiMate ladekurver', false, true).'

Lamperne på opladeren fortæller hvilken periode opladeren er i gang med og hvor mange ampere batteriet oplades med.
'.visbilled('1', 'billed0298.jpg', 'OptiMate 4 lys lamper', false, true).'
').'

'.afsnit('følg med under opladningen','
Ved at tilslutte 2 multimetre kan man følge med under opladningen.
De 2 multimetre viser hvor mange volt og ampere batteriet bliver opladt med.
'.visbilled('1', 'billed0122.jpg', 'batteri volt ampere oplader', false, true).'
').'
'

,'
ibrugtagning af nyt batteri
' => '
'.afsnit('ibrugtagning af nyt traditionelt bly-syre batteri','
Skru propperne af batteriet og gem dem.
Tag hætten af udluftningshullet og smid den ud.
Batterisyren skal være mellem 15 og 30 °Celsius altså stuetemperatur.
Fyld batterisyre i hver celle op til UPPER mærket.
Sæt propperne løst på deres pladser uden at skrue dem fast. De skal bare sørge for at batteriet ikke spytter syre ud men samtidig tillade at der kan komme gas ud.
Lad batteriet stå i 30 minutter.
Bank lidt på siden af batteriet så alle boblerne frigøres fra blypladerne.
Fyld igen batterisyre på op til UPPER mærket hvis syreniveauet er faldet.
Inden det monteres i scooteren skal det oplades.
Hvis batteriet kun får påfyldt syre uden at blive opladt vil de kun have en 80% opladning.
Oplad batteriet med 1/10 ampere af den kapacitet batteriet er på. Altså hvis batteriet er et 7 Ah batteri så skal det oplades med 0,7 Ampere.
Oplad det i 3 til 5 timer.
Hvis syre niveauet er faldet så påfylde syre op til UPPER mærket igen og oplad derefter i 1 time. Hvis syreniveauet ikke er faldet skal det ikke oplades.
Herefter skal der aldrig fyldes syre på igen.
Når opladningen er færdig skruer du propperne fast med fingerne, de skal ikke skrues for stramt i.
Fjern eventuelt spildt syre med vand og bagepulver (bagepulver Na2CO3 neutraliserer syren).
Tilslut ventilationsslangen og monter batteriet i scooteren og sørg for slangen går ned gennem det rigtig hul i batterirummet.
Monter først det positive (+) kabel.
Monter derefter det negative (-) kabel.
Smør terminalerne med et tyndt lag vaseline eller fedt for at undgå korrision.

Når man tager et nyt traditionelt bly-syre batteri ibrug skal man først skrue propperne ud når det skal bruges.

'.ahref('http://repvideo.lars-mc.dk/repvideo/view.repair_video.php?id=7', 'Videoer fra lars-mc.dk : Påmontering af nyt batteri').'

').'

'.afsnit('ibrugtagning af nyt vedligeholdelsesfrit bly-syre batteri','
'.visbilled('1', 'billed0083.jpg', 'ibrugtagning af nyt vedligeholdelsesfrit bly-syre batteri', false, true).'
Sæt skruer og gevind på batteri terminalerne.
Monter batteriet i scooteren.
Monter først det positive (+) kabel.
Monter derefter det negative (-) kabel.
Smør terminalerne med et tyndt lag vaseline eller fedt for at undgå korrision.

Jeg har lavet denne video der viser hvordan man gør.
'.visflash('0', "http://www.youtube.com/watch?v=bJVqdOsVHig", 'ibrugtagning af nyt vedligeholdelsesfrit bly-syre batteri', true).'
Se også '.ahref('http://repvideo.lars-mc.dk/repvideo/view.repair_video.php?id=22', 'Klargøring af servicefri batteri (repvideo.lars-mc.dk)').'.
Se også '.ahref('http://repvideo.lars-mc.dk/repvideo/view.repair_video.php?id=7', 'Påmontering af nyt batteri (repvideo.lars-mc.dk)').'.

'.visbilled('1', 'billed2297.jpg', 'kymco YTX7A-BS kasse', false, true).'
'.visbilled('1', 'billed2298.jpg', 'vedligeholdelsesfrit bly-syre batteri kymco YTX7A-BS åben kasse', false, true).'
'.visbilled('1', 'billed2300.jpg', 'vedligeholdelsesfrit bly-syre batteri kymco YTX7A-BS batterisyrebeholder skruer til terminaler', false, true).'
Her ses batteriet, batterisyren og skruer og gevind.
'.visbilled('1', 'billed2301.jpg', 'vedligeholdelsesfrit bly-syre batteri kymco YTX7A-BS batterisyrebeholder skruer til terminaler', false, true).'
'.visbilled('1', 'billed2302.jpg', 'vedligeholdelsesfrit bly-syre batteri kymco YTX7A-BS', false, true).'
Skruer og gevind
'.visbilled('1', 'billed2303.jpg', 'skruer og gevind til batteriterminaler', false, true).'
Først puttes gevindet i også skures skruen i.
'.visbilled('1', 'billed2306.jpg', 'montering af gevind og skrue på batteriterminal oppe fra', false, true).'
Gevindet kan også vendes lodret så skruen kan monteres fra siden.
'.visbilled('1', 'billed2304.jpg', 'montering af gevind og skrue på batteriterminal forfra', false, true).'
').'
'

,'
service af ECU
' => '
ECU\'en indeholder en computer med hukommelse som kan gemme fejlkoder.

Hvis ECU\'en opdager en fejl på de sensorer den er forbundet med så gemmer den en fejlkode i hukommelsen.

Fejlkoden kan så aflæses på scooterens instrumentpanel eller med et specielt elektronisk værktøj.

Disse værktøjer er muligvis kun tiltænkt forhandlere.

'.afsnit('Kymco FI diagnostic tool','
På en Kymco kan man bruge en "Kymco FI diagnostic tool".
'.visbilled('1', 'billed2478.jpg', 'kymco fi diagnostic tool', false, true).'
'.visbilled('1', 'billed2481.jpg', 'kymco fi diagnostic tool', false, true).'
').'

'.afsnit('Yamaha FI diagnostic tool','
På en Yamaha Giggle kan man bruge en "Yamaha FI diagnostic tool".
Her ses "Yamaha FI diagnostic tool" som viser o/min, motor temperatur og fejlkode.
'.visbilled('1', 'billed0488.jpg', 'yamaha fi diagnostic tool', false, true).'
En fejlkode "39" fortæller at ECU\'en har problemer med brændstof injectoren eller forbindelsen hertil.
').'

'.afsnit('Piaggio / Gilera (Purejet)','
På en Gilera Runner med Purejet er der sådan et stik her.
'.visbilled('1', 'billed3283.jpg', 'gilera runner purejet stik', false, true).'
I manualen står bare at stikket er "forbeholdt de Autoiseret Piaggio-Gilera Serviceværksteder".
').'

'.afsnit('Aprilia DITech interface','
På en Aprilia SR DITech kan man bruge en gameboy med "Aprilia DITech interface".
Her ses en gameboy med "Aprilia DITech interface" som viser o/min, batteri spænding og motor temperatur.
'.visbilled('1', 'billed0489.jpg', 'aprilia DITech interface', false, true).'
'.visbilled('1', 'billed1408.jpg', 'gameboy med aprilia DITech interface', false, true).'
'.visbilled('1', 'billed1238.jpg', 'aprilia DITech interface', false, true).'
ECU\'en kan programmeres/opdateres ved at downloade "ECU maps".
'.visfil('1', 'scooterhjemmeside/download/aprilia_ditech_interface_ecu_maps.zip', 'Aprilia DITech interface ECU maps').'

'.visflash('0', "http://www.youtube.com/watch?v=ZkLCpKmF4a4", 'brug af gameboy med DITech interface på Aprilia SR50 DITech', true).'
'.visflash('0', "http://www.youtube.com/watch?v=XXK8NHum4Zw", 'brug af gameboy med DITech interface', true).'

Her ses menuerne fra gameboyen med Aprilia DITech interface:
'.visbilled('1', 'billed0396.jpg', 'aprilia DITech interface gameboy menuer', false, true).'

Hvis du vil vide mere om Aprilia DITech så '.ahref('http://www.apriliaforum.com/forums/showthread.php?t=115697', 'læs DITech faq hos apriliaforum.com').'.
').'

'.afsnit('TEP 96','
På en Peugeot Scoot\'Elec kan man bruge en TEP 96.
'.visbilled('1', 'billed0104.jpg', 'Peugeot Scoot\'Elec TEP 96', false, true).'
').'

'.afsnit('datascan OB91','
Denne datascan stammer fra en Sym Attila RS-21 EFI 150 servicemanual.
'.visbilled('1', 'billed2216.jpg', 'datascan OB91 fra Sym Attila RS-21 EFI 150 servicemanual', false, true).'
Her ses nogle af menuerne.
'.visbilled('1', 'billed2217.jpg', 'datascan OB91 fra Sym Attila RS-21 EFI 150 servicemanual menuer', false, true).'
').'

'.afsnit('OBD','
Der er en standard som hedder OBD.
OBD står for On Board Diagnostics.
Det bruges i biler men jeg ved ikke om det bruges i scootere med ECU.
Men hvis det gør så er det smart.
Så kan man bruge den samme scanne til forskellige scootere i stedet for at man skal have en scanner til ditech og en anden til yamaha og en tredie til Peugeot.
').'

'.afsnit('CANopen','
I Peugeot E-Vivacity sidder vist nok en Sevcon Gen 4 size 2 controller.
Den er fuldt CANopen kompatibel.
Jeg ved ikke så meget om dette endnu.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
