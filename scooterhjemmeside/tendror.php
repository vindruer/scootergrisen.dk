<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "tændrør";
$overskrift = "tændrør";
$metadescription = "tændrøretsdele, varmeværdi, tændrørskoder, NGK, Denso, Bosch, Champion, Torch, gnist, slid, tændrørshætte, typer, iridium";

$databasecenter = array(

'
introduktion
' => '
Tændrørets opgave er at antænde luft/benzin blandingen i forbrændingskammeret med en gnist.
'.visbilled('1', 'billed0318.jpg', 'tændrør', false, true).'

Tændrøret er monteret i topstykket og forbundet med tændspolen som giver tændrøret en elektrisk spænding på flere tusind volt (måske 12000-25000 volt) som får en gnist til at springe mellem centerelektroden og sideelektroden.

For at tændrøret skal virke optimalt skal det have den rette elektrode afstand og en varmeværdi som passer til motoren og den måde motoren bruges.
'

,'
tændrørets dele
' => '
'.visbilled('1', 'billed0807.jpg', 'tændrørets dele', false, true).'
Terminalskruen øverst på tændrørets kan skrues af alt efter hvad der passer i tændrørshætten.
'.visbilled('1', 'billed3159.jpg', 'tændrørets dele', false, true).'
'

,'
hvor er tændrøret ?
' => '
Tændrøret sidder i topstykket.

På en 4 takt motor sidder tændrøret gerne på højre side af topstykket.
'.visbilled('1', 'billed0319.jpg', 'tændrør i motor', false, true).'
Her ses topstykket indefra og tændrørets ses til højre.
'.visbilled('1', 'billed0645.jpg', 'tændrør i topstykke indefra forbrændingskammer ventiler', false, true).'

På en 2 takt motor sidder tændrøret gerne aller forrest midt på topstykket.
'.visbilled('1', 'billed2464.jpg', 'tændrør i topstykke på 2 takt motor', false, true).'
'

,'
tændrørs koder
' => '
På tændrør står en kode.
Koden fortæller en masse om tændrøret.

På dette tændrør står CR7HSA.
'.visbilled('1', 'billed0320.jpg', 'tændrør NGK CR7HSA', false, true).'
'.afsnit('CR7HSA forklaring','
C = Gevindet er 10 mm i diameter og der skal bruges en 16 mm tændrørsnøgle.
R = Resistor. Tændrøret har en 5000 Ω modstand for at mindske radiostøj.
7 = Varmeværdien.
H = Gevindet er 12,7 mm langt.
S = Centerelektroden er 2,6 mm tyk og har en kerne af kobber.
A = Speciel konstruktion ('.kontaktmig().' gerne hvis du ved hvad A står for).
').'

På dette tændrør står BP7HS.
'.visbilled('1', 'billed2462.jpg', 'tændrør NGK BP7HS', false, true).'
'.afsnit('BP7HS forklaring','
B = Gevindet er 14 mm i diameter og der skal bruges en 20,6 mm tændrørsnøgle.
P = Projected. Gnistgabet er længere fremme end normalt.
7 = Varmeværdien.
H = Gevindet er 12,7 mm langt.
S = Centerelektroden er 2,6 mm tyk og har en kerne af kobber.
').'
CR7HSA og BP7HS er tændrør som fremstilles af NGK og kaldes for standard tændrør.

Af andre tændrørs producenter kan nævnes Denso, Champion, Bosch og Torch.

Hver tændrørs producent bruger deres egne koder.

Udover standard tændrør som bruger nikkel og kobber i elektroderne kan man også få tændrør med for eksempel platin eller iridium på elektrodeenderne og smallere elektrodespids for at give tændrøret bedre egenskaber.
'

,'
varmeværdi
' => '
Varmeværdien er tændrørets evne til at overføre varme.

For eksempel står 7 tallet i CR7HSA for tændrørets varmeværdi.

Når benzin/luft blandingen antændes så udvikles der varme.

Noget af varmen i forbrændingskammeret "opsuges" af tændrøret.

Tændrøret leder varmen videre primært gennem gevind og pakning til topstykket.
'.visbilled('1', 'billed0788.jpg', 'tændrør varmeoverførelse', false, true).'

Hvis tændrøret er hurtig til at lede varmen videre så holder det sig koldt og kaldes derfor et koldt tændrør.
Hvis tændrøret er langsomt til at lede varmen videre så beholder det mere af varmen og kaldes derfor et varmt tændrør.

NGK CR5HSA kaldes et varmt tændrør.
NGK CR9HSA kaldes et koldt tændrør.

Varmeværdien hænger sammen med formen af isolatoren.
'.visbilled('1', 'billed0789.jpg', 'tændrør varmeværdi', false, true).'
Her ses et varmt og et koldt tændrør hvor gevindet er savet af.
'.visbilled('1', 'billed1804.jpg', 'varmt og koldt tændrør varmeværdi', false, true).'
Her ses et NGK CR7HSA hvor gevindet er skåret af.
'.visbilled('1', 'billed2164.jpg', 'NGK CR7HSA med gevindet savet af', false, true).'

'.visflash('0', 'http://www.youtube.com/watch?v=LbR75wq9nmM', 'tændrørets varmeværdi', true).'

Den bedste brugstemperatur for tændrør er mellem 450-850 °Celsius.
Et tændrør med rette varmeværdi vil i motoren blive varmt nok til at afbrænde belægninger og samtidig koldt nok til ikke at antænde benzin/luft blandingen på grund af varmen.
'.visbilled('1', 'billed2165.jpg', 'tændrør temperatur', false, true).'

Tændrørets varmeværdi skal passe til motoren og til kørslen.

Her ses et velfungerende tændrør.
'.visbilled('1', 'billed1748.jpg', 'tændrør', false, true).'

'.afsnit('for varmt tændrør','
Hvis tændrøret er for varmt så kan det få benzin/luft blandingen til at antænde før tændrøret har givet gnist (tændingsbanken) og elektroderne kan smelte.
'.visbilled('1', 'billed0930.jpg', 'tændrør smeltet', false, true).'
Ser tændrøret sådan ud kan man prøve at skifte til et koldere tændrør.
').'

'.afsnit('for koldt tændrør','
Hvis tændrøret er for koldt så kommer der en sort tør kulstof belægning på tændrøret så gnisten kan ikke springe så let.
'.visbilled('1', 'billed0929.jpg', 'tændrør kulstof belægning', false, true).'
Ser tændrøret sådan ud kan man prøve at skifte til et varmere tændrør.
').'

'.afsnit('varmt tændrør','
Bruges ved by kørsel, korte ture og lave omdrejninger.
NGK tændrør har et lavt varmeværdi tal. For eksempel CR5HSA.
Leder langsomt varmen væk.
').'

'.afsnit('koldt tændrør','
Bruges i motorer med høj ydelse, høje omdrejninger som racermaskiner.
NGK tændrør har et højt varmeværdi tal. For eksempel CR9HSA.
Leder hurtigt varmen væk.
').'

'.afsnit('varmeværdi tal','
De forskellige tændrørs producenter bruger forskellige varmeværdi tal.
For eksempel svare NGK\'s varmværdi tal 7 til Denso\'s 22 og Bosch\'s 5 og Champion\'s 8 eller 7.
'.visbilled('1', 'billed0776.jpg', 'tændrør varmeværdi glødetal denso ngk champion bosch', false, true).'
Læg mærke til at Denso og NGK bruger lave tal til deres varme tændrør mens Champion og Bosch bruger høje tal.

Jeg læste på en go cart side at i koldt vejr med regn kunne man bruge Denso IW24.
Og jo varmere det var i vejret jo koldere tændrør skulle man køre med.
IW27, IW29, IW31 og helt op til IW34 som bruges hvis det er mere end meget varmt vejr.
Måske er go carts\'ne passiv vindkølet og det er derfor man skal skifte varmeværdi efter vejret.
').'
'

,'
NGK
' => '
Disse tændrørs koder bruges til NGK standard tændrør.
For eksempel CR7HSA.
'.visbilled('1', 'billed0796.jpg', 'ngk tændrørs koder standard', false, true).'

Disse tændrørs koder bruges til NGK Iridium IX tændrør.
'.visbilled('1', 'billed3168.jpg', 'ngk tændrørs koder iriduim IX', false, true).'

Her kan du konvertere fra et NGK standard tændrør til et NGK iridium IX tændrør.
CR7HSA kan for eksempel skiftes ud med et CR7HIX.
'.visbilled('1', 'billed0779.jpg', 'tændrør tabel fra standard til iridium ix', false, true).'
'.visflash('0', 'http://www.youtube.com/watch?v=wFkCVNhXMF0', 'forskellen på forskellige typer NGK tændrør', true).'

'.ahref('http://www.ngksparkplugs.com/products/spark_plugs/index.asp?mode=nml', 'www.ngksparkplugs.com').'
'

,'
denso
' => '
'.visbilled('1', 'billed2463.jpg', 'denso tændrør', false, true).'
'
.visfil('1', 'scooterhjemmeside/download/tendror_denso_trainingmanual.pdf', 'denso spark plugs training manual')
.visfil('1', 'scooterhjemmeside/download/tendror_denso_katalog.pdf', 'denso tændrørs katalog')
.visfil('1', 'scooterhjemmeside/download/tendror_denso_discovering.pdf', 'Discovering denso technology')
.
'

Disse tændrørs koder bruges til Denso standard tændrør.
For eksempel U20FRSU.
'.visbilled('1', 'billed0797.jpg', 'denso tændrørs koder', false, true).'
Disse tændrørs koder bruges til Denso iridium power tændrør.
For eksempel IUF22.
'.visbilled('1', 'billed0793.jpg', 'denso iridium tændrørs koder', false, true).'
Disse tændrørs koder bruges også til Denso iridium power tændrør og er mere komplet.
For eksempel IUF22.
'.galleriholder(array(galleri('highslidestandard', 'billed0795.jpg', 'billed0795.jpg', 'denso tændrørs koder'))). '
Alle Denso Iridium Power tændrør er med 5000 Ω modstand.

'.ahref('http://www.globaldenso.com/en/products/aftermarket/plug/', 'www.globaldenso.com').'
'

,'
champion
' => '
Disse tændrørs koder bruges til champion standard tændrør.
For eksempel P-RZ9HC (dog står der ikke hvad P\'et står for).
'.visbilled('1', 'billed0798.jpg', 'champion tændrørs koder', false, true).'
Hvis du har en bedre tændrørs kode oversigt for Champion end den viste så må du gerne '.kontaktemig().'.
'

,'
bosch
' => '
Disse tændrørs koder bruges til bosch tændrør.
Jeg har faktisk aldrig set en scooter hvor der har været angivet et bosch tændrør men jeg ville skyde på at det ville hedde noget i stil med UR5AC.
'.visbilled('1', 'billed0799.jpg', 'bosch tændrørs koder', false, true).'
'

,'
torch
' => '
For eksempel Torch A7RTC.
'.visbilled('1', 'billed0771.jpg', 'tændrør A7TC', false, true).'
Her kan du konventere fra Torch til NGK.
Torch A7RTC svarer til NGK CR7HSA.
Torch T1137C svarer til NGK C7HSA.
'.visbilled('1', 'billed0818.jpg', 'torch ngk tændrørs koder', false, true).'

'.ahref('http://www.torchsparkplug.com/english/about.asp', 'www.torchsparkplug.com').'
'

,'
kryds referencer
' => '
Hvis du for eksempel har læst at din scooter skal bruge et Denso U20FRSU tændrør og du gerne vil vide hvad tændrørs koden hedder for et tilsvarende NGK tændrør så besøg '.ahref('http://www.denso.co.jp/ja/products/aftermarket/repair_parts/plug/cross_ref/index.html', 'kryds referencer af tændrørs koder').'.
'

,'
tændrørs typer
' => '
Forskellen på de forskellige tændrørstyper findes primært der hvor gnisten opstår.
Centerelektrodens spids og sideelektroden kan indeholde forskellige metaller.
Elektrodernes spids kan for eksempel indeholde kobber, nikkel, platin, iridium, sølv, guld eller palladium.
Elektrodernes spids kan være smallere eller have en fordybning.

'.afsnit('standard tændrør','
'.visbilled('1', 'billed2158.jpg', 'standard tændrør', false, true).'
Centerelektrodens spids består af en nikkel legering og er 2,5 mm bred.
').'

'.afsnit('platin tændrør','
'.visbilled('1', 'billed2161.jpg', 'platin tændrør', false, true).'
Centerelektrodens spids består af en platin legering og kan være 1,1 mm bred.
Spidsen slides mindre end standard tændrør og holder derfor længere.
').'

'.afsnit('iridium tændrør','
'.visbilled('1', 'billed2162.jpg', 'iridium tændrør', false, true).'
Centerelektrodens spids består af en iridium legering og kan være ned til 0,4 mm bred.
Spidsen slides mindre end både standard og platin tændrør og holder derfor længere.
').'

Den smalle centerelektrodespids på platin og iridium tændrør gør det lettere for gnisten at springe da det kræver færre volt.

'.visflash('0', 'http://www.youtube.com/watch?v=wFkCVNhXMF0', 'forskellen på forskellige typer NGK tændrør', true).'
'

,'
slid
' => '
Hver gang tændrøret giver gnist fjernes materiale fra elektroderne.

For standard tændrør fjernes cirka 0,01-0,02 mm per 1000 km.
Cirka det dobbelte for 2 takt motorer da de giver gnist dobbelt så ofte.

Ved at bruge tændrør med platin eller iridium slides elektroderne ikke så hurtigt da metallerne har et højere smeltepunkt og er hårdere end nikkel som bruges i standard tændrør.
'

,'
tændrør 2 takt motor
' => '
'.visbilled('1', 'billed1450.jpg', 'tændrør og æske', false, true).'
Tændrøret i en 2 takt motor kan for eksempel hedde NGK BP7HS eller NGK BPR7HS.

Tændrøret i en 2 takt motor giver gnist dobbelt så ofte som i en 4 takt motor så derfor slides elektroderne cirka dobbelt så hurtigt og skal derfor justeres/udskiftes cirka dobbelt så ofte.
'

,'
egne erfaringer
' => '
Her ses et NGK CR7HSA tændrør efter 2000 km i en Kymco Super 8.
På sideelektroden og isolatoren er der kommet en hård hvid belægning.
Jeg har læst at den hvide belægning kan skyldes additiver i olie og benzin, olie som kommer ind i forbrændingskammeret, dårlig benzinkvalitet og hvor længe motoren bliver brugt af gangen. Altså hvis man køre korte ture så bliver tændrøret ikke varmt nok til at brænde belægninger af.
'.visbilled('1', 'billed0492.jpg', 'Tændrør NGK CR7HSA', false, true).'

Her ses et Champion P-RZ9HC tændrør efter formodentligt 4000 km i en Kymco Agility.
Gevindet er meget sort af olie.
Sideelektroden, centerelektroden og isolator er brun.
Der lader til at dette tændrør virker fint selv om gevindet er meget sort af af olie.
Det meget sorte gevind kan måske hænge sammen med at scooteren ikke har fået skiftet olie i lang tid og udstødningen lugtede da også meget af olie.
'.visbilled('1', 'billed0505.jpg', 'Tændrør Champion P-RZ9HC', false, true).'
'

,'
tændrørshætte
' => '
Her ses tændrørshætten monteret på tændrøret i højre side af motoren.
'.visbilled('1', 'billed0507.jpg', 'tændrørshætte i motor', false, true).'
'.visbilled('1', 'billed0508.jpg', 'tændrørshætte', false, true).'
'.visbilled('1', 'billed0509.jpg', 'tændrørshætte', false, true).'
Inden i tændrørshætten sidder en skrue som kan skrues ud.
'.visbilled('1', 'billed0510.jpg', 'tændrørshætte', false, true).'
Under skruen sidder en modstand på 5000 Ω.
Modstanden presses mod bagsiden af skruen med en fjeder som har videre forbindelse gennem tændrørshætten.
Modstanden nedsætter radiostøj ligesom der kan være modstand i et tændrør.
'.visbilled('1', 'billed0511.jpg', 'skrue modstand og fjeder fra tændrørshætte', false, true).'
Skruen har en klips som sørger for at tændrørshætten bliver siddende på tændrørets gevind i enden.
'.visbilled('1', 'billed0512.jpg', 'tændrørsgevind', false, true).'
I den anden ende af tændrørshætten sidder en skrue hvor tændrørskablet skrues i.
'.visbilled('1', 'billed0513.jpg', 'tændrørshætte skrue', false, true).'
Her ses en gennemsigtig tændrørshætte.
'.visbilled('1', 'billed2540.jpg', 'gennemsigtig tændrørshætte', false, true).'
'

,'
iridium
' => '
Tændrør med iridium skulle på flere måder være bedre end standard tændrør med nikkel.

Her ses et iridium tændrør.
'.visbilled('1', 'billed0780.jpg', 'tændrør iridium BPR7EIX', false, true).'
Det er kun spidsen på centerelektroden som indeholder iridium.

Spidsen svejses på centerelektroden med laser.
'.visbilled('1', 'billed0790.jpg', 'tændrør iridium', false, true).'
Spidsen kan bestå af en blanding af 90% iridium og 10% rhodium.

Iridium er hårdere og har et højere smeltepunkt end andre metaller som bruges i tændrør.
'.visbilled('1', 'billed0791.jpg', 'smeltepunkt styrke elektrisk modstand hårdhed iridium platin nikkel guld sølv', false, true).'
Fordi iridium er så hårdt og har så højt et smeltepunkt så fjernes der ikke så meget materiale når tændrøret giver gnist i forhold til et standard tændrør med nikkel.
Og fordi der ikke fjernes så meget materiale kan man lave en smallere centerelektrodespids.
'.visbilled('1', 'billed0782.jpg', 'tændrør centerelektroder standard platin iridium', false, true).'
Denso laver iridium tændrør med en centerelektrodespids på 0,4 mm.
NGK laver iridium tændrør med en centerelektrodespids på 0,6 mm.
Jo smallere spidsen er jo færre volt skal der til før gnisten springer.

Her ses en ny iridium spids og efter 16000 km.
'.visbilled('1', 'billed0781.jpg', 'tændrør iridium spids', false, true).'

Fordi der fjernes så lidt materiale så skulle det ikke være nødvendigt at justere elektrode afstanden på iridium tændrør.

'.afsnit('Skift fra standard til iridium','
Bruger scooteren for eksempel NGK CR7HSA som standard tændrør så kan man bruge NGK CR7HIX hvis man ønsker et NGK tændrør med iridium.
Eller Denso IUF22 hvis man ønsker et Denso iridium tændrør.
').'

'.afsnit('flammekerne','
Efter gnisten er "sprunget" antændes benzin/luft blandingen og der dannes en flammekerne.
Varmen fra flammekernen får det omliggende benzin/luft til at antændes.
Noget af varmen opsuges af elektroderne.
Denne opsugning af varme kaldes "quenching".
Hvis elektroderne opsuger varmen hurtigere end flammekernen kan lave varmen så slukkes den ellers antændt benzin/luft.

'.visbilled('1', 'billed0800.jpg', 'tændrør quenching flammekerne', false, true).'

Jo smallere centerelektroden er jo mindre varme opsuger den når flammekernen opstår og jo hurtigere kan flammefronten vokse.
'.visbilled('1', 'billed0792.jpg', 'tændrør flammefront', false, true).'

Ved at gøre centerelektrodespidsen smallere og lave en V eller U fordybning i sideelektroden kan "quenching" effekten minimeres fordi elektroderne opsuger mindre varme og flammefronten bedre kan vokse.
').'

'.afsnit('Brændstof økonomi','
Ifølge Denso kan en Honda Dio (2 takt 50 cm³) ved 30 km/t kunne køre cirka 2 km længere per liter med denso iridium power tændrør i forhold til standard denso tændrør.
Det er cirka 5% længere.
'.visbilled('1', 'billed2163.jpg', 'denso iridium brændstof økonomi honda dio 2 takt', false, true).'
Kilde (på side 6) :
'.visfil('1', 'scooterhjemmeside/download/tendror_denso_discovering.pdf', 'Discovering denso technology').'
').'

'.afsnit('rengøring','
Denso skriver at man bør undgå at bruge en metal børste til at rengøre deres iridium tændrør fordi spidsen er så fin og kan tage skade.
Denso skriver at man godt kan bruge en nylon børste (tandbørste).
').'

'.afsnit('justering af elektrode afstand','
Det skulle muligvis slet ikke være nødvendigt at justere elektrode afstanden på iridium tændrør men hvis man gør så skal man passe på ikke at skade spidsen.
').'

'.afsnit('lær mere om brug af iridium i tændrør','
'.visfil('1', 'scooterhjemmeside/download/tendror_iridium.pdf', 'Development of New Iridium Alloy for Spark Plug electrodes').'
').'
'

,'
gnist
' => '
Når tændrøret får en spændingsforskel mellem sine elektroder på flere tusind volt vil det mellemrum der er mellem elektroderne som normalt ikke er elektriktrisk ledene bliver ioniseret og der opstår en gnist.

Gnisten er der i cirka 1/1000 sekunder og er cirka 10000 °Celsius.
'.visbilled('1', 'billed0787.jpg', 'tændrør gnist', false, true).'
Jo større elektrode afstand jo flere volt skal der til før gnisten kan springe og jo kraftigere bliver gnisten.
Jo mere spids elektroderne er jo mindre volt skal der til før gnisten kan springe.

Her kan man se området hvor gnisten rammer sideelektroden.
'.visbilled('1', 'billed1858.jpg', 'tændrør gnist område', false, true).'

'.visflash('0', "http://www.youtube.com/v/sEf8va1S7Sw", 'Her ses ind i forbrændingskammeret hvor man kan se gnisten', true).'
'

,'
adskilt
' => '
Her har jeg savet et tændrør i stykker så man kan se hvordan det ser ud inde i.
'.visbilled('1', 'billed1949.jpg', 'tændrør adskilt NGK CR7HSA', false, true).'
'.visbilled('1', 'billed1950.jpg', 'tændrør adskilt NGK CR7HSA', false, true).'
'.visbilled('1', 'billed1951.jpg', 'tændrør adskilt NGK CR7HSA', false, true).'
'.visbilled('1', 'billed1952.jpg', 'tændrør adskilt NGK CR7HSA', false, true).'
Her ses 2 tætningsringe og mellem dem er talkum.
De 2 ringe og talkummet sørge for at holde tændrøret tæt så der ikke kan komme tryk ud fra forbrændingskammeret.
Det ser ud til at tændrøret holder tæt ved den nederste ring som er brun på den side som vender nedad.
'.visbilled('1', 'billed1953.jpg', 'tændrør adskilt NGK CR7HSA', false, true).'
Man kan se at den øverste del af isolatoren er glaseret mens den nederste del ikke er glaseret.
'.visbilled('1', 'billed1954.jpg', 'tændrør adskilt NGK CR7HSA', false, true).'
'.visbilled('1', 'billed1956.jpg', 'tændrør adskilt NGK CR7HSA', false, true).'
Under det hvide pasta står 7.4.3.9 -* hvad end det betyder.
'.visbilled('1', 'billed1955.jpg', 'tændrør adskilt NGK CR7HSA', false, true).'

Ved at knuse isolatoren kan vi se hvad der er inde i.

Her ses centerelektroden.
'.visbilled('1', 'billed1957.jpg', 'tændrør adskilt NGK CR7HSA', false, true).'
Her er centerelektroden savet over og man kan se kobberkernen som gør at varmen i centerelektroden bliver ledt hurtigere væk.
'.visbilled('1', 'billed1964.jpg', 'tændrør adskilt NGK CR7HSA', false, true).'
Centerelektroden har kontakt med modstanden.
'.visbilled('1', 'billed1959.jpg', 'tændrør adskilt NGK CR7HSA', false, true).'
Modstanden er det sorte i midten.
'.visbilled('1', 'billed1960.jpg', 'tændrør adskilt NGK CR7HSA', false, true).'
På den anden side har modstanden forbindelse videre til terminalen.
'.visbilled('1', 'billed1962.jpg', 'tændrør adskilt NGK CR7HSA', false, true).'
'

,'
video
' => '
'.visflash('0', "http://www.youtube.com/watch?v=XCEOFslSXv0", 'Her ses hvordan tændrør kan blive fremstillet', true).'
'

,'
lær mere
' => '
'.galleriholder(array(
    galleri('link', 'http://www.ngk-elearning.com/', 'www.ngk-elearning.com', 'NGK E-Learning')
)).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
