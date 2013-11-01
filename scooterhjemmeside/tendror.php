<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['nogetikon']               = 'ikoner/ikon_tendror2.png';

$title = "tændrør";
$overskrift = "tændrør";
$metadescription = "tændrøretsdele, varmeværdi, tændrørskoder, NGK, Denso, Bosch, Champion, Torch, gnist, slid, tændrørshætte, typer, iridium";

$databasecenter = array(

'
introduktion
' => '
Tændrørets opgave er at antænde luft/benzin blandingen i forbrændingskammeret med en gnist.
'.visbilled('1', 'billed0318.jpg', 'brugt CR7HSA tændrør elektroder isolator og gevind', false, true).'
Gnisten opstår når tændspolen laver en høj spænding på måske 12000-25000 volt mellem centerelektroden og sideelektroden.

For at tændrøret skal virke optimalt skal det have den rette elektrode afstand og en varmeværdi som passer til motoren og den måde motoren bruges.
'

,'
tændrørets dele
' => '
'.visbilled('1', 'billed0807.jpg', 'denso tændrørs dele terminal isolator modstand pakning centerelektrode med kobber kerne sideelektrode', false, true).'
Terminalskruen øverst på tændrøret kan skrues af alt efter hvad der passer i tændrørshætten.
Isolatoren er lavet af keramik og holder centerelektroden og sideelektroden elektrisk adskildt.
Modstanden mindske radiostøj så elektrisk udstyr ikke påvirkes så meget.
Pakningen giver vel lidt blødhed når man spænder tændrøret fat. Går ikke ud fra det holder tæt men ved det ikke.
Centerelektroden kan have kobber inden i for bedre at lede varmen væk fra forbrændingskammeret.
'.visbilled('1', 'billed3159.jpg', 'NGK R tændrørs dele', false, true).'
'

,'
hvor er tændrøret ?
' => '
Tændrøret sidder i topstykket.

På en 4 takt motor sidder tændrøret gerne på højre side af topstykket.
'.visbilled('1', 'billed0319.jpg', 'CR7HSA tændrør i topstykke på 4 takt motor udefra', false, true).'
Her ses topstykket indefra og tændrørets ses til højre.
'.visbilled('1', 'billed0645.jpg', 'CR7HSA tændrør i topstykke på 4 takt motor indefra forbrændingskammer ventiler', false, true).'

På en 2 takt motor sidder tændrøret gerne forrest i midten af topstykket.
'.visbilled('1', 'billed2464.jpg', 'tændrør i topstykke på 2 takt motor udefra', false, true).'
'

,'
tændrørs koder
' => '
På tændrør står en kode som fortæller en masse om tændrøret.

På dette tændrør står CR7HSA.
'.visbilled('1', 'billed0320.jpg', 'NGK CR7HSA tændrør i topstykke fra 4 takt motor', false, true).'
'.afsnit('CR7HSA forklaring','
C = Gevindet er 10 mm i diameter og der skal bruges en 16 mm tændrørsnøgle.
R = Resistor. Tændrøret har en 5000 Ω modstand for at mindske radiostøj.
7 = Varmeværdien. Formen på isolatoren under gevindet.
H = Gevindet er 12,7 mm langt.
S = Centerelektroden er 2,6 mm tyk og har en kerne af kobber.
A = Terminal med gevind.
').'

På dette tændrør står BP7HS.
'.visbilled('1', 'billed2462.jpg', 'NGK BP7HS tændrør', false, true).'
'.afsnit('BP7HS forklaring','
B = Gevindet er 14 mm i diameter og der skal bruges en 20,6 mm tændrørsnøgle.
P = Projected. Gnistgabet er længere fremme.
7 = Varmeværdien. Formen på isolatoren under gevindet.
H = Gevindet er 12,7 mm langt.
S = Centerelektroden er 2,6 mm tyk og har en kerne af kobber.
').'
CR7HSA og BP7HS er tændrørs koder som bruges af producenten NGK og disse tændrør kaldes for standard tændrør.

Af andre tændrørs producenter kan nævnes Denso, Champion, Bosch og Torch.

Hver tændrørs producent bruger deres egne koder.
'

,'
varmeværdi
' => '
Varmeværdien er tændrørets evne til at overføre varme.

For eksempel står 7 tallet i CR7HSA for tændrørets varmeværdi.

Når benzin/luft blandingen antændes så udvikles der varme i forbrændingskammeret.

Noget af varmen i forbrændingskammeret "opsuges" af tændrøret.

Tændrøret leder varmen videre primært gennem gevind og pakning til topstykket.
'.visbilled('1', 'billed0788.jpg', 'tændrør varmeoverførelse til topstykke og videre', false, true).'

Hvis tændrøret er hurtig til at lede varmen videre så holder det sig koldt og kaldes derfor et koldt tændrør.
Hvis tændrøret er langsomt til at lede varmen videre så beholder det mere af varmen og kaldes derfor et varmt tændrør.

NGK CR5HSA kaldes et varmt tændrør.
NGK CR9HSA kaldes et koldt tændrør.

Varmeværdien hænger sammen med formen af isolatoren.
'.visbilled('1', 'billed0789.jpg', 'tændrør med forskellige varmeværdier/isolatorform', false, true).'
Her ses et varmt og et koldt tændrør hvor gevindet er savet af.
'.visbilled('1', 'billed1804.jpg', 'varmt og koldt tændrør med gevindet savet af så man bedre kan se isolatoren med forskellige isolatorform varmeværdi', false, true).'
Her ses et NGK CR7HSA hvor gevindet er skåret af.
'.visbilled('1', 'billed2164.jpg', 'NGK CR7HSA med gevindet savet af så man bedre kan se isolatoren', false, true).'

Den bedste brugstemperatur for tændrør er mellem 450-850 °Celsius.
Et tændrør med rette varmeværdi vil i motoren blive varmt nok til at afbrænde belægninger og samtidig koldt nok til ikke at antænde benzin/luft blandingen på grund af varmen.
'.visbilled('1', 'billed2165.jpg', 'tændrør temperaturskema spark plug temperature surface ignition range', false, true).'

Tændrørets varmeværdi skal passe til motoren og til kørslen.

Her ses et velfungerende tændrør.
'.visbilled('1', 'billed1748.jpg', 'velfungerende tændrør varmeværdien passer til motoren og kørslen', false, true).'

'.afsnit('for varmt tændrør','
Hvis tændrøret er for varmt så kan det få benzin/luft blandingen til at antænde før tændrøret har givet gnist (tændingsbanken) og elektroderne kan smelte.

Ser tændrøret sådan her ud kan man prøve at skifte til et koldere tændrør.
'.visbilled('1', 'billed0930.jpg', 'tændrør med smeltede elektroder varmeværdien er for varm til motoren og kørslen', false, true).'
').'

'.afsnit('for koldt tændrør','
Hvis tændrøret er for koldt så kommer der en sort tør kulstof belægning på tændrøret så gnisten kan ikke springe så let.

Ser tændrøret sådan her ud kan man prøve at skifte til et varmere tændrør.
'.visbilled('1', 'billed0929.jpg', 'tændrør med kulstof belægning varmeværdien er for kold til motoren og kørslen', false, true).'
').'

'.afsnit('varmt tændrør','
Bruges ved bykørsel, korte ture og lave omdrejninger.
Leder langsomt varmen væk.
NGK bruger lave tal til varme tændrør. For eksempel CR5HSA.
').'

'.afsnit('koldt tændrør','
Bruges i motorer med høj ydelse, høje omdrejninger som racermaskiner.
Leder hurtigt varmen væk.
NGK bruger høje tal til kolde tændrør. For eksempel CR9HSA.
').'

'.afsnit('varmeværdi tal','
De forskellige tændrørs producenter bruger forskellige varmeværdi tal.
For eksempel svare NGK\'s varmværdi tal 7 til Denso\'s 22 og Bosch\'s 5 og Champion\'s 8 eller 7.
'.visbilled('1', 'billed0776.jpg', 'tændrør varmeværdiskema glødetal varmt koldt denso NGK champion bosch', false, true).'
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
I skemaet ved "Firing End Construction" angives A og B som "Special Design" som vist kan have forskellig betydning afhængig af tændrørmodel men på CR7HSA skulle A\'et betyde at der er gevind på top terminalen og B\'et skulle betyder at der er en "nut", alstå ikke gevind (eller måske dims der kan skrues på gevindet ?). Selvom der vist ikke er noget som hedder CR7HSB.
'.visbilled('1', 'billed0796.jpg', 'NGK tændrørs koder til standard tændrør', false, true).'

Disse tændrørs koder bruges til NGK Iridium IX tændrør.
'.visbilled('1', 'billed3168.jpg', 'NGK tændrørs koder til iriduim IX tændrør', false, true).'

Her kan du konvertere fra et NGK standard tændrør til et NGK iridium IX tændrør.
CR7HSA kan for eksempel skiftes ud med et CR7HIX.
'.visbilled('1', 'billed0779.jpg', 'tændrørs konvertingstabel til NGK standard tændrør og NGK iridium IX tændrør', false, true).'

'.ahref('http://www.ngksparkplugs.com/products/spark_plugs/index.asp?mode=nml', 'www.ngksparkplugs.com').'
'

,'
denso
' => '
'.visbilled('1', 'billed2463.jpg', 'denso U20FS? tændrør', false, true).'
'
.visfil('1', 'scooterhjemmeside/download/tendror_denso_trainingmanual.pdf', 'denso spark plugs training manual')
.visfil('1', 'scooterhjemmeside/download/tendror_denso_katalog.pdf', 'denso tændrørs katalog')
.visfil('1', 'scooterhjemmeside/download/tendror_denso_discovering.pdf', 'Discovering denso technology')
.
'

Disse tændrørs koder bruges til Denso standard tændrør.
For eksempel U20FRSU.
'.visbilled('1', 'billed0797.jpg', 'denso tændrørs koder til standard tændrør', false, true).'
Disse tændrørs koder bruges til Denso iridium power tændrør.
For eksempel IUF22.
'.visbilled('1', 'billed0793.jpg', 'denso tændrørs koder til iridium tændrør', false, true).'
Disse tændrørs koder bruges også til Denso iridium power tændrør og er et mere komplet skema.
For eksempel IUF22.
'.galleriholder(array(galleri('highslidestandard', 'billed0795.jpg', 'billed0795.jpg', 'denso tændrørs koder til iridium tændrør mere komplet skema'))). '
Alle Denso Iridium Power tændrør er med 5000 Ω modstand.

'.ahref('http://www.globaldenso.com/en/products/aftermarket/plug/', 'www.globaldenso.com').'
'

,'
champion
' => '
Disse tændrørs koder bruges til champion standard tændrør.
For eksempel P-RZ9HC (dog står der ikke hvad P\'et står for).
'.visbilled('1', 'billed0798.jpg', 'champion tændrørs koder til standard tændrør', false, true).'
Hvis du har en bedre tændrørs kode oversigt for Champion end den viste så må du gerne '.kontaktemig().'.
'

,'
bosch
' => '
Disse tændrørs koder bruges til bosch tændrør.
Jeg har aldrig set en scooter hvor der har været angivet et bosch tændrør men jeg ville skyde på at det ville hedde noget i stil med UR5AC til 4 takt motor.
'.visbilled('1', 'billed0799.jpg', 'bosch tændrørs koder', false, true).'
'

,'
torch
' => '
'.visbilled('1', 'billed0771.jpg', 'Torch A7RTC tændrør', false, true).'
Her kan du konventere fra Torch til NGK.
Torch A7RTC svarer til NGK CR7HSA.
Torch T1137C svarer til NGK C7HSA.
'.visbilled('1', 'billed0818.jpg', 'skema til konverting mellem Torch og NGK tændrør', false, true).'

'.high('http://www.torchsparkplug.com/english/about.asp').'.
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
Centerelektrodens spids består af en nikkellegering og er 2,5 mm bred.
'.visbilled('1', 'billed2158.jpg', 'standard tændrør med 2,5 mm centerelektrodespids', false, true).'
').'

'.afsnit('platin tændrør','
Centerelektrodens spids består af en platin legering og kan være 1,1 mm bred.
Spidsen slides mindre end standard tændrør og holder derfor længere.
'.visbilled('1', 'billed2161.jpg', 'platin tændrør med 1,1 mm centerelektrodespids', false, true).'
').'

'.afsnit('iridium tændrør','
Centerelektrodens spids består af en iridium legering og kan være ned til 0,4 mm bred.
Spidsen slides mindre end både standard og platin tændrør og holder derfor længere.
'.visbilled('1', 'billed2162.jpg', 'iridium tændrør med 0,4 mm centerelektrodespids', false, true).'
').'

Den smalle centerelektrodespids på platin og iridium tændrør gør det lettere for gnisten at springe da det kræver færre volt.
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
'.visbilled('1', 'billed1450.jpg', 'tændrør og tændrørsæske', false, true).'
Tændrøret i en 2 takt motor kan for eksempel hedde NGK BP7HS eller NGK BPR7HS.

Tændrøret i en 2 takt motor giver gnist dobbelt så ofte som i en 4 takt motor så derfor slides elektroderne cirka dobbelt så hurtigt og skal derfor justeres/udskiftes cirka dobbelt så ofte.
'

,'
egne erfaringer
' => '
Her ses et NGK CR7HSA tændrør efter 2000 km i en Kymco Super 8 4T.
På sideelektroden og isolatoren er der kommet en hård hvid belægning.
Jeg har læst at den hvide belægning kan skyldes additiver i olie og benzin, olie som kommer ind i forbrændingskammeret, dårlig benzinkvalitet og hvor længe motoren bliver brugt af gangen. Altså hvis man køre korte ture så bliver tændrøret ikke varmt nok til at brænde belægninger af.
'.visbilled('1', 'billed0492.jpg', 'NGK CR7HSA tændrør med hvid belægning', false, true).'

Her ses et Champion P-RZ9HC tændrør efter formodentligt 4000 km i en Kymco Agility.
Gevindet er meget sort af olie.
Sideelektroden, centerelektroden og isolator er brun.
Der lader til at dette tændrør virker fint selvom gevindet er meget sort af af olie.
Det meget sorte gevind kan måske hænge sammen med at scooteren ikke har fået skiftet motorolie i lang tid og udstødningen lugtede da også meget af olie.
'.visbilled('1', 'billed0505.jpg', 'Champion P-RZ9HC tændrør med sort gevind', false, true).'
'

,'
tændrørshætte
' => '
Her ses tændrørshætten monteret på tændrøret i højre side af motoren.
'.visbilled('1', 'billed0507.jpg', 'tændrørshætte på tændrør i 4 takt motor', false, true).'
Tændrørshætten har en gummimuffe.
'.visbilled('1', 'billed0508.jpg', 'tændrørshætte', false, true).'
Der kan tages af.
'.visbilled('1', 'billed0509.jpg', 'tændrørshætte med gummimuffe taget af', false, true).'
Inden i tændrørshætten sidder en skrue som kan skrues ud.
'.visbilled('1', 'billed0510.jpg', 'skrue i tændrørshætte', false, true).'
Under skruen sidder en modstand på 5000 Ω.
Modstanden presses mod bagsiden af skruen med en fjeder som har videre forbindelse gennem tændrørshætten.
Modstanden nedsætter radiostøj ligesom der kan være modstand i et tændrør.
'.visbilled('1', 'billed0511.jpg', 'skrue, 5000 Ω modstand og fjederklips fra tændrørshætte', false, true).'
Skruen har en fjederklips som holder fat i tændrørets gevind i enden.
'.visbilled('1', 'billed0512.jpg', 'gevind på tændrørsenden', false, true).'
I den anden ende af tændrørshætten sidder en skrue hvor tændrørskablet skrues i.
'.visbilled('1', 'billed0513.jpg', 'skrue i tændrørshætte til tændkabel', false, true).'
Her ses en gennemsigtig tændrørshætte.
'.visbilled('1', 'billed2540.jpg', 'gennemsigtig tændrørshætte', false, true).'
'

,'
iridium
' => '
Tændrør med iridium skulle på flere måder være bedre end standard tændrør med nikkel.

Her ses et iridium tændrør.
'.visbilled('1', 'billed0780.jpg', 'iridium BPR7EIX tændrør', false, true).'
Det er kun spidsen på centerelektroden som indeholder iridium.

Spidsen svejses på centerelektroden med laser.
'.visbilled('1', 'billed0790.jpg', 'tændrør med lasersvejset iridium centerelektrodespids', false, true).'
Spidsen kan bestå af en blanding af 90% iridium og 10% rhodium.

Iridium er hårdere og har et højere smeltepunkt end andre metaller som bruges i tændrør.
'.visbilled('1', 'billed0791.jpg', 'smeltepunkt styrke elektrisk modstand hårdhed iridium platin nikkel guld sølv', false, true).'
Fordi iridium er så hårdt og har så højt et smeltepunkt så fjernes der ikke så meget materiale når tændrøret giver gnist i forhold til et standard tændrør med nikkel.
Og fordi der ikke fjernes så meget materiale kan man lave en smallere centerelektrodespids som holder længere end en tykkere centerelektrodespids i nikkel.
'.visbilled('1', 'billed0782.jpg', 'tændrør centerelektrode bredde standard 2,5 mm platin 1,1 mm iridium 0,4 mm', false, true).'
Denso laver iridium tændrør med en centerelektrodespids på 0,4 mm.
NGK laver iridium tændrør med en centerelektrodespids på 0,6 mm.
Jo smallere spidsen er jo færre volt skal der til før gnisten springer.

Her ses en ny iridium spids og efter 16000 km.
'.visbilled('1', 'billed0781.jpg', 'tændrør med iridium centerelektrodespids nyt og efter 16000 km', false, true).'

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
'.visbilled('1', 'billed0792.jpg', 'tændrør flammefront og opsugning af varme', false, true).'

Ved at gøre centerelektrodespidsen smallere og lave en V eller U fordybning i sideelektroden kan "quenching" effekten minimeres fordi elektroderne opsuger mindre varme og flammefronten bedre kan vokse.
').'

'.afsnit('Brændstof økonomi','
Ifølge Denso kan en Honda Dio (2 takt 50 cm³) ved 30 km/t kunne køre cirka 2 km længere per liter med denso iridium power tændrør i forhold til standard denso tændrør.
Det er cirka 5% længere.
'.visbilled('1', 'billed2163.jpg', 'fuel average denso iridium brændstof økonomi honda dio 2 takt W20FS-U IWF-22 km/l', false, true).'
Kilde (side 6) :
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
Når tændrøret får en spændingsforskel mellem sine elektroder på flere tusinde volt vil det som er imellem elektroderne (luft/benzin) som normalt ikke er elektriktrisk ledene bliver ioniseret og der opstår en gnist.

Gnisten er der i cirka 1/1000 sekunder og er cirka 10.000 °Celsius.
'.visbilled('1', 'billed0787.jpg', 'gnist mellem elektroderne på et tændrør', false, true).'
Jo større elektrode afstand jo flere volt skal der til før gnisten kan springe og jo kraftigere bliver gnisten.
Jo mere spids elektroderne er jo mindre volt skal der til før gnisten kan springe.

Her kan man se området hvor gnisten har ramt sideelektroden.
'.visbilled('1', 'billed1858.jpg', 'slid på tændrørs elektroderne hvor man kan se hvor gnisten har ramt', false, true).'
'

,'
adskilt
' => '
Her har jeg savet et NGK CR7HSA tændrør i stykker så man kan se hvordan det ser ud inden i.
'.visbilled('1', 'billed1949.jpg', 'NGK CR7HSA tændrør med gevind savet af', false, true).'
'.visbilled('1', 'billed1950.jpg', 'gevind og sideelektrode fra NGK CR7HSA tændrør', false, true).'
'.visbilled('1', 'billed1951.jpg', 'NGK CR7HSA tændrør med gevind og ring savet af', false, true).'
'.visbilled('1', 'billed1952.jpg', 'NGK CR7HSA tændrør med hexagon til tændrørsnøgle', false, true).'
Her ses 2 tætningsringe og mellem dem er talkum.
De 2 ringe og talkummet sørge for at holde tændrøret tæt så der ikke kan komme tryk ud fra forbrændingskammeret.
Det ser ud til at tændrøret holder tæt ved den nederste ring som er brun på den side som vender nedad.
'.visbilled('1', 'billed1953.jpg', 'NGK CR7HSA tændrør med tætningsringe og talkum', false, true).'
Man ses at den øverste del af isolatoren er glaseret mens den nederste del ikke er glaseret.
'.visbilled('1', 'billed1954.jpg', 'NGK CR7HSA tændrør med tætningsringe og talkum', false, true).'
'.visbilled('1', 'billed1956.jpg', 'NGK CR7HSA tændrør dele med talkum', false, true).'
Under det hvide pasta står 7.4.3.9 -* hvad end det betyder.
'.visbilled('1', 'billed1955.jpg', 'NGK CR7HSA tændrør dele', false, true).'

Her har jeg knust isolatoren så vi kan se hvad der er inde i.

Her ses centerelektroden.
'.visbilled('1', 'billed1957.jpg', 'NGK CR7HSA tændrør med ødelagt isolator så man kan se centerelektroden', false, true).'
Her er centerelektroden savet over og man kan se kobberkernen som gør at varmen i centerelektroden bliver ledt hurtigere væk.
'.visbilled('1', 'billed1964.jpg', 'NGK CR7HSA tændrør centerelektrodespids savet også hvor man kan se kobber kernen', false, true).'
Centerelektroden har kontakt med modstanden.
'.visbilled('1', 'billed1959.jpg', 'modstand i NGK CR7HSA tændrør og centerelektrodespids', false, true).'
Modstanden er det sorte i midten.
'.visbilled('1', 'billed1960.jpg', 'modstand i NGK CR7HSA tændrør', false, true).'
På den anden side har modstanden forbindelse videre til terminalen.
'.visbilled('1', 'billed1962.jpg', 'NGK CR7HSA tændrør ødelagt isolator hvor man kan se modstanden og toppen af centerelektroden', false, true).'
'

,'
videoer
' => '
'.visflash('0', "http://www.youtube.com/watch?v=XCEOFslSXv0", 'her ses hvordan tændrør fremstilles', true).'
'.visflash('0', "http://www.youtube.com/v/sEf8va1S7Sw", 'her ses ind i forbrændingskammeret hvor man kan se gnisten', true).'
'.visflash('0', 'http://www.youtube.com/watch?v=LbR75wq9nmM', 'tændrørets varmeværdi', true).'
'.visflash('0', 'http://www.youtube.com/watch?v=wFkCVNhXMF0', 'forskellen på forskellige typer NGK tændrør', true).'
'

,'
lær mere om tændrør
' => '
'.galleriholder(array(
    galleri('link', 'http://www.ngk-elearning.com/', 'www.ngk-elearning.com', 'NGK E-Learning')
)).'
'

,'
eksempler på tændrør brugt i scootere
' => '
NGK BPR6HS
NGK BPR7HS
NGK BR7ES
NGK BR7HS
NGK BR8ES
NGK BR8HS
NGK BR8HSA
NGK BR9ES
NGK C7HSA
NGK CR7E
NGK CR7HSA
NGK CR7HSA-9
NGK CR8EB
NGK ER8EH-N
NGK-R CPR8E
Torch A7TC
4E7TC
A7RTC
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
