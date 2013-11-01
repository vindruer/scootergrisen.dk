<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "affjedring";
$overskrift = "affjedring";
$metadescription = "forklaring af forskellige affjedringstyper på en scooter";

$databasecenter = array(

'
introduktion
' => '
Affjedring hjælper med at give en mere behagelig køretur på ujævn vej.

Forhjulet er typisk affjedret med en hydraulisk teleskopisk gaffel eller en svingarm.

Baghjulet er typisk affjedret med en hydraulisk støddæmper med fjeder hvor hele motoren fungere som en svingarm.
'.visbilled('1', 'billed1811.jpg', 'støddæmper med fjeder', false, true).'

Fjederen ujævner bump på vejen.
Støddæmperen stabiliserer scooteren så den ikke bliver ved med at hoppe op og ned.

Hvis du har billeder/erfaring med at adskille en forgaffel/støddæmper så skriv gerne i '.forummet().' eller '.kontaktmig().'.
'

,'
forhjul
' => '
Teleskop forgaflen kan fås i en konventionel type og "upside down" type.

Den konventionelle type fås igen i 2 type.
På den ene konventionelle type kaldet "motorcykel type" kan gaffelbroen og gaffelbenene tages fra hinanden.
På den anden konventionelle type kan de ikke tages fra hinanden.

'.afsnit('teleskop forgaffel - konventionel','
Her ses en teleskop forgaffel af den konventionelle type.
'.visbilled('1', 'billed0032.jpg', 'teleskop forgaffel', false, true).'
Gaffelbenene er her montere på en gaffelbro.
'.visbilled('1', 'billed1443.jpg', 'teleskop forgaffel', false, true).'
På denne type kan gaffelbenene afmonteres fra gaffelbroen.
'.visbilled('1', 'billed1444.jpg', 'teleskop forgaffel', false, true).'
Her er forgaflen monteret i et såkaldt "triple tree".
'.visbilled('1', 'billed1736.jpg', 'teleskop forgaffel med triple tree sachs madass', false, true).'
').'

'.afsnit('teleskop forgaffel - upside down','
Her ses en teleskop forgaffel af "upside down" typen.
'.visbilled('1', 'billed1014.jpg', 'teleskop forgaffel upside down', false, true).'
På "upside down" typen er det inderste rør nederst.
'.visbilled('1', 'billed2107.jpg', 'teleskop forgaffel upside down', false, true).'
').'

Der findes også "traling link" typen og "leading link" typen som vist hedder svingarms affjedring.

'.afsnit('trailing link','
Her ses en trailing link affjedring.
'.visbilled('1', 'billed1733.jpg', 'AGM Vintage trailing link', false, true).'
Her ses en anden scooter med trailing link.
'.visbilled('1', 'billed1734.jpg', 'Vespa LX trailing link', false, true).'
Og endnu en.
'.visbilled('1', 'billed0115.jpg', 'trailing link', false, true).'
Og endnu en.
'.visbilled('1', 'billed1673.jpg', 'trailing link', false, true).'
').'

'.afsnit('leading link','
Her ses en scooter med "leading link" affjedring.
'.visbilled('1', 'billed1735.jpg', 'leading link', false, true).'
').'

'.afsnit('hårdhed og olie','
På scootere med teleskop forgaffel kan dæmpningens hårdhed justeres ved at ændre mængden og viskositen af olien i rørene.

En SAE 5W olie giver en blød dæmpning.
En SAE 20W olie giver en hård dæmpning.

Der er luft over olien i rørene som presses sammen når teleskop forgaflen trykkes sammen.

Mindre olie vil give en blødere dæmpning fordi der vil være mere luft over olien som kan trykkes sammen.
Mere olie vil give en hårdere dæmpning da der er mindre luft over olien som kan trykkes sammen.
Der er dog grænse for hvor lidt og hvor meget olien man kan komme i.

Det skulle være vigtigt at der er samme mængde olie i hvert rør.

I nogle manualer står at man kan bruge ATF (Automatic Transmission Fluid) i forgaffel rørne.
').'
'

,'
forgaffelolie
' => '
' . ahref('olie.php#forgaffelolie', 'Forgaffelolie') . '
'

,'
teleskop forgaffel adskilt
' => '
Her ses en teleskop forgaffel med aftagelige gaffelben.
'.visbilled('1', 'billed2223.jpg', 'forgaffel', false, true).'
'.visbilled('1', 'billed1486.jpg', 'Yamaha Giggle forgaffel', false, true).'
1 = fork spring
2 = damper bolt washer (skive)
2 = damper rod bolt (dæmper skrue)
3 = damper rod (dæmper)
sealing ring (stempel ring)
4 = rebound spring
spring seat
5 = inner tube (indre rør) (gaffel ben)
6 = dust seal (støvring)
7 = circlip (låsering)
8 = oil seal (simmerring)
9 = outer tube (ydre rør)

For at scooteren ikke skal tippe forover mens forhjulet er fjernet så kan man lægge en stak aviser eller noget under scooteren.

Afmonter bremsecaliper og lad den hænge i bremseslangen.

Afmonter forhjulet.

Afmonter forskærmen og eventuelt skjolde for at kunne komme til.

Det skulle være bedst at arbejde med ét gaffelben af gangen så man ikke kommer til at bytte om på delene.

Fjern skruerne i gaffelbroen.
'.visbilled('1', 'billed1988.jpg', 'forgaffel', false, true).'
Skub gaffelbenet et par cm op og spænd det midlertidigt fast igen for at kunne fjerne top skruen.

Fjern top skruen.
'.visbilled('1', 'billed1498.jpg', 'forgaffel', false, true).'

Top skruen kan også fjernes hvis inderrøret spændes fast i en skruetvinge med aluminiumskæber og med stof omkring for ikke at skade inderrøret.
'.visbilled('1', 'billed1479.jpg', 'forgaffel', false, true).'
Under top skruen er en lang fjeder som vist nok er under tryk selvom gaffelbenet er helt udstrakt.
Så pres ind på top skruen når den fjernes.

Der er olie i røret så hav en beholder klar til at hælde olien i.

Fjern gaffelbenet fra gaffelbroen.
'.visbilled('1', 'billed1482.jpg', 'forgaffel', false, true).'

Komplet gaffelben.
'.visbilled('1', 'billed3405.jpg', 'teleskopisk gaffel støddæmper VGA Mover', false, true).'
'.visbilled('1', 'billed1504.jpg', 'forgaffel CPI', false, true).'

Fjern den lange fjeder.
'.visbilled('1', 'billed1503.jpg', 'forgaffel', false, true).'
Mål den lange fjeder.
På Kymco Super 8 4T skal fjederen være 226,5 mm.
På Kymco Agility skal fjederen være 206,4 mm.
På Honda Zoomer skal fjederen minimum være 125,9 mm.
På Yamaha Giggle skal fjederen minimum være 198,2 mm.
Hvis fjederen er progressiv (forskellig afstand mellem vendingerne) så skal de tætte vendinger vende op.

Hæld olien ud i beholderen.
Pump røret helt i bund nogle gange for at få olien ud.
'.visbilled('1', 'billed1513.jpg', 'forgaffel', false, true).'
Hvis olien hældes i målebeholder kan man bruge det som guide til at se hvor meget olie der skal være i røret.

Nedefra ses skruen som holder dæmperen.
'.visbilled('1', 'billed1836.jpg', 'forgaffel', false, true).'
Spænd det ydre rør fast i skruestikken.
'.visbilled('1', 'billed1478.jpg', 'forgaffelsrør spændt fast i skruetvinge', false, true).'
Man skal muligvis have et langt special værktøj til at holde på dæmperen inden i røret når man løsner den nederste skrue.
Så der må være et hex hul på toppen af dæmperen.
'.visbilled('1', 'billed1510.jpg', 'forgaffel i skruetvinge tegning', false, true).'

Dette specielle værktøj kan bruges til at holde dæmperen.
'.visbilled('1', 'billed3268.jpg', 'forgaffel afmonterings værktøj buzzetti 9100 9102', false, true).'
'.visbilled('1', 'billed1612.jpg', 'forgaffel afmonterings værktøj tegning buzzetti 9100 9102', false, true).'

Hold dæmperen fast inden i røret med special værktøjet og afmonter skruen i enden og skiven under skruen.

Hvis du ikke har dette lange special værktøj kan skruen måske fjernes ved at den lange fjeder monteres igen og rørene presses sammen.
Fjederens pres mod dæmperen skulle muligvis være nok til at den ikke kan dreje rundt og dermed kan skruen fjernes uden special værktøj.

Nu kan det indre og det ydre rør tages fra hinanden.
'.visbilled('1', 'billed1483.jpg', 'forgaffel bottom case guide bushing bebound spring fork tube', false, true).'
Guide bush.
Sidder på enden af dæmperen.
'.visbilled('1', 'billed1500.jpg', 'forgaffel guide bush', false, true).'
Inderrør.
'.visbilled('1', 'billed1501.jpg', 'forgaffel inderrør', false, true).'
Dæmper med stempelringe.
'.visbilled('1', 'billed1496.jpg', 'forgaffel dæmper med stempelringe', false, true).'
Returfjeder.
Sidder på dæmperen.
'.visbilled('1', 'billed1495.jpg', 'forgaffel returfjeder', false, true).'
Her ses hvordan delene sidder sammen.
'.visbilled('1', 'billed2802.jpg', 'forgaffel dele tegning', false, true).'
'.visbilled('1', 'billed2801.jpg', 'forgaffel dele tegning', false, true).'
'.visbilled('1', 'billed1481.jpg', 'forgaffel dele tegning', false, true).'
Fjern støvringen.
'.visbilled('1', 'billed1529.jpg', 'forgaffel støvring på gaffelben', false, true).'
'.visbilled('1', 'billed3330.jpg', 'forgaffel støvring afmontering', false, true).'
Støvring.
'.visbilled('1', 'billed1502.jpg', 'forgaffel støvring', false, true).'
Fjern klipsen.
Fjern simmerringen.
Fold et stykke pap under værktøjet for ikke at skade røret.
'.visbilled('1', 'billed1511.jpg', 'forgaffel fjern klips og simmerring tegning', false, true).'
'.visbilled('1', 'billed3331.jpg', 'forgaffel fjern simmerring værktøj', false, true).'
Fjern kun simmerringen hvis den skal udskiftes da den bliver skadet af at blive taget ud.

Klips.
'.visbilled('1', 'billed1497.jpg', 'forgaffel klips', false, true).'
Simmerring.
'.visbilled('1', 'billed1499.jpg', 'forgaffel simmerring', false, true).'

'.afsnit('video','
Der er en video hos lars-mc.dk som viser hvordan man skifter simmerring og olie og hvordan man laver et special værktøj til at holde dæmperen.
'.ahref('http://repvideo.lars-mc.dk/repvideo/view.repair_video.php?id=4', 'Video fra lars-mc.dk : Udskiftning af simmerringe og forgaffelolie på forgaffel').'
').'
'

,'
baghjul
' => '
Her ses en scooter med en enkelt fjeder og støddæmper.
'.visbilled('1', 'billed1012.jpg', 'fjeder og støddæmper', false, true).'
Her ses en scooter med fjeder og støddæmper på begge sider af baghjulet.
'.visbilled('1', 'billed1397.jpg', 'fjeder og støddæmper', false, true).'
'.visbilled('1', 'billed1389.jpg', 'fjeder og støddæmper ved baghjul', false, true).'
Fjeder og støddæmper er monteret gennem en gummibøsning øverst og nederst.
'.visbilled('1', 'billed1373.jpg', 'fjeder og støddæmper', false, true).'
'.visbilled('1', 'billed1371.jpg', 'fjeder og støddæmper monteret på gummibøsning', false, true).'
Denne fjeder er justerbar.
'.visbilled('1', 'billed1372.jpg', 'fjeder med justerbar forspænding', false, true).'
Ved at dreje ringen under fjederen i nogle hak kan man justere fjederens forspænding.

Fjederen kan fra fabrikken for eksempel være indstillet til en forspænding som passer til en person på 70 kg.
Hvis man for eksempel skal køre 2 personer på scooteren kan fjederen justeres strammere så bagenden ikke bliver så lav på grund af den ekstra vægt.
'.visbilled('1', 'billed0030.jpg', 'justering af fjeder metal ring', false, true).'
I en Piaggio manual står at den slappeste forspænding er til offroad brug.
I samme manual også står at forkert indstilling af forspændingen i forhold til førens vægt og eventuel passager kan resultere i dårligere køre komfort og kørslens præcision.

Det kan være nødvendigt at afmontere luftfilter og udstødning for at komme til at dreje ringen.



På de fleste scootere fungerer hele motoren som en svingarm.

Motoren er forbundet med stellet gennem et led.
'.visbilled('1', 'billed0116.jpg', 'swing unit', false, true).'
Her ses leddet som forbinder stel og motor.
På engelsk kaldes den "engine hanger". Motor ophæng på dansk.
'.visbilled('1', 'billed0117.jpg', 'led mellem stel og motor', false, true).'
De 2 fjedre på leddet bruges når man sætter scooteren på centerstøtteben for at dæmpe stødet mod stellet.
'.visbilled('1', 'billed1242.jpg', 'led mellem stel og motor', false, true).'
'.visbilled('1', 'billed2622.jpg', 'kymco super 8 4T motor og stel', false, true).'
Mellem leddet og motoren sidder 2 gummi bøsninger.

Her ses en gummibøsning hvor leddet er forbundet til motorblokken.
'.visbilled('1', 'billed0118.jpg', 'gummi bøsning i motorblok', false, true).'
Gummibøsningerne virker støddæmpene og gør så motor og baghjul kan give sig sidelæns.
Gummibøsningerne nedsætter vist også vibrationer fra motoren så vibrationer ikke forplanter sig så meget videre i stellet.
'.visbilled('1', 'billed1484.jpg', 'gummibøsning til motorblok', false, true).'

På nogen scootere er motoren monteret til stellet gennem kuglejer i stedet for gummibøsninger.
'.visbilled('1', 'billed2792.jpg', 'motorophængsaksel leje', false, true).'
'.visbilled('1', 'billed2791.jpg', 'motorophængsaksel leje', false, true).'
'

,'
dut på støddæmper
' => '
Her ses en støddæmper og fjeder fra en VGA Mover.
Øverst er en "dut" som jeg endnu ikke ved hvad er til.
'.visbilled('1', 'billed3647.jpg', 'støddæmper fra VGA Mover', false, true).'
'

,'
svingarm
' => '
Her ses en svingarm fra en elektrisk scooter.
'.visbilled('1', 'billed3303.jpg', 'giantco e-buddy svingarm', false, true).'
'.visbilled('1', 'billed2970.jpg', 'svingarm', false, true).'
'

,'
styretøj
' => '
Nogle begreber der ikke oplyses så tit ved en scooter er caster og trail.
Caster og trail har betydning for scooterens retningsstabilitet, selvopretning og kørsel om hjørner.

Jeg ved ikke så meget om det men jeg tror det betyder hvor let man for eksempel kan køre uden hænder og hvor meget plads man skal bruge for at dreje rundt.
Hvis man ser en chopper motorcykel med lang forgaffel så skal den måske bruge mange meter for at kunne dreje rundt i modsætning til en almindelig cykel som kan gøre det på meget mindre plads.

'.afsnit('caster og trail','
'.visbilled('1', 'billed1508.jpg', 'caster og trail', false, true).'
Som der står på billedet så har caster og trail betydning for stabilitet og sådan.
Der står at en stor caster og trail giver god stabilitet ved høj hastighed men samtidig dårlig stabilitet og manorering ved lav hastighed.
').'
'.afsnit('caster','
Vinkel i grader.

Styrestabilitet.
Selvopretning.
Letter kørsel om hjørner.
').'
'.afsnit('trail','
For at kende trail skal man kende caster vinklen først.

Trail variere med hjul størrelsen.

Trail kaldes efterløb på dansk.
.
').'
'.visbilled('1', 'billed2799.jpg', 'caster og trail', false, true).'
'.afsnit('scooter data','
Det er sjældent man ser caster og trail oplyst.
Men de få gange jeg har set det har castervinklen været mellem 25,5 til 27 °.
Efterløb har jeg set oplyst til mellem 75 - 84 mm.
').'
'

,'
stel
' => '
Stellet er på de fleste scootere er lavet af rør som er svejset sammen.
Den mest udbredt stel konstruktion hedder vist dobbelt rørramme eller "under bone", "low deck backbone", "double cradle tubular frame" på engelsk.
Rørne er gerne lavet i stål.

Her ses et stel som vistnok kaldes et underbone stel.
'.visbilled('1', 'billed0999.jpg', 'stel', false, true).'
Her ses stellet fra Kymco Super 8 4T.
'.visbilled('1', 'billed1243.jpg', 'Kymco Super 8 4T stel', false, true).'
Her ses stellet fra Baotian BT50QT-9.
'.visbilled('1', 'billed3329.jpg', 'Baotian BT50QT-9 stel', false, true).'
På stellet monteres så plastik skjoldene og alle de andre dele.

Piaggio Vespa stel er lavet på en anden måde end de fleste scootere.

Her ses et stel fra en Piaggio Vespa ET4.
'.visbilled('1', 'billed0998.jpg', 'piaggio vespa et4', false, true).'
Her er stellet også skjoldet. Altså hvis scooteren vælter og får en skramme så går det udover selve stellet.
Det kaldes vistnok en selvbærende konstruktion.

Yamaha Giggle skulle have et stel som kaldes "double-cradle steel tubular U frame" hvad end det betyder.

Her ses et stel fra en E-max elektrisk scooter hvor der er plads til batterier i bunden.
'.visbilled('1', 'billed3295.jpg', 'e-max', false, true).'
'.visbilled('1', 'billed3296.jpg', 'e-max', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
