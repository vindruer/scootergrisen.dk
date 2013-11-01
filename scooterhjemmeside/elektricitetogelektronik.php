<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "grundlæggende viden om elektricitet og elektronik";
$overskrift = "grundlæggende viden om elektricitet og elektronik";
$metadescription = "introduktion til elektricitet og elektronik. Forklaring af volt, ampere, watt, ohm, vekselstrøm og jævnstrøm, elektronik komponenter";

$databasecenter = array(

'
elektricitet
' => '
'.afsnit('basal viden om atomer','
Alt stof består af atomer. Dig, din scooter, den luft du indånder.

Et atom består af en kerne af neutroner og protoner og uden om kerner findes elektroner som bevæger sig rundt om kernen.

Elektronerne kan gå fri fra atomet og kaldes så frie elektroner.
'.visbilled('1', 'billed1002.jpg', 'atom kerne frie elektroner', false, true).'

Nogle materialer er gode til at lede elektricitet fordi elektronerne let kan gå fri fra sin bane omkring atomkernen.
Disse materialer er gode at bruge til elektriske ledninger. For eksempel kobber og aluminium.

Andre materialer er ikke gode til at lede elektricitet fordi der ikke er mange frie elektroner.
Disse materialer er gode til at bruge som isolation omkring ledningerne. For eksempel plastik og keramik.
').'
'.afsnit('elektrisk strøm','
Elektrisk strøm er bevægelsen af elektrisk ladning.
Denne ladning kan være i form af elektroner.

Når et negativt ladet materiale og et positivt ladet materiale forbindes med en ledning så vil frie elektroner fra det negativt ladet materiale bevæge sig over til det positive ladet materiale gennem ledningen.

Denne bevægelse af elektroner kaldes elektrisk strøm.

I lang tid troede folk at elektrisk strøm bevægede sig fra det positive til det negative.
Men så fandt man ud af at elektronerne faktisk bevæger sig fra det negative til det positive.

I stedet for at rette på fejlen vedtog man på at sige at elektrisk strøm bevæger sig fra positivt til negativt.
Og at elektroner bevæger sig fra negativt til positivt.

'.visbilled('1', 'billed1003.jpg', 'elektrisk strøm retning elektronernes strøm', false, true).'

Har vi et batteri med plus og minus og vi sætter en ledning mellem polerne så vil elektronerne bevæge sig fra minus (-) gennem ledningen til plus (+).
Og man siger så at strømmen går fra plus (+) til minus (-).



Den elektriske ladning kan også udgøres af ladede atomer (ioner) i stedet for fri elektroner.

'.afsnit('ioner','
Et ion er et elektrisk ladet atom eller molekyle der har mistet eller fået en eller flere elektroner.
Der findes både positivt og negativt ladede ioner.
Et atom der har optaget en eller flere elektroner er negativt ladet.
Et atom der har mistet en eller flere elektroner er positivt ladet.
').'

'.afsnit('elektrisk strøm i væske','
Væske med ioner kaldes elektrolyt.

Deminiraliseret vand har ikke ioner og kan derfor ikke lede elektrisk strøm.
Saltvand har ioner og kan derfor lede elektrisk strøm.

Det bruges i scooter batterier hvor væsken (elektrolytten) kan bestå af svovlsyre og vand.

Blyplader er sænket ned i væsken.

Når batteriet oplades eller aflades så reagere væsken med blypladerne og væsken og blypladerne ændres.
').'

').'
'.afsnit('Vekselstrøm og jævnstrøm','
Alt elektrisk udstyr på scooteren drives af enten vekselstrøm eller jævnstrøm.

Vekselstrøm sender først elektroner i den ene retning også i den anden retning og sådan bliver det ved frem og tilbage.
'.visbilled('1', 'billed1004.jpg', 'vekselstrøm', false, true).'
Vekselstrøm dannes i scooterens generator.

Jævnstrøm sender elektroner i den samme retning hele tiden.
'.visbilled('1', 'billed1005.jpg', 'jævnstrøm', false, true).'
Scooterens spændingsregulator laver generatorens vekselstrøm om til jævnstrøm som bruges til opladning af batteriet og til scooterens lys, horn og andet elektrisk udstyr.

Når vekselstrøm laves om til jævnstrøm er det ikke altid at der sendes den samme mængde elektroner hele tiden, men så længe elektronerne kun bevæger sig i én retning så kan man kalde det for jævnstrøm.
'.visbilled('1', 'billed3169.jpg', 'vekselstrøm til jævnstrøm', false, true).'
').'
'.afsnit('volt','
Volt er enheden for elektrisk spænding.
De fleste scootere har et 12 volt batteri.
Et lyn kan have flere millioner volt.
Mellem elektroderne på et tændrør springer også et lille lyn. Her er spændingen omkring 20000 volt.
Jo flere volt jo længere kan lynet/gnisten nå.
Der skal cirka 200 - 1000 volt til per millimeter.

Volt kan sammenlignes med trykket i en vandslange.
Jo flere volt jo mere tryk er der i vandslangen.
Peges vandslangen op vil vandstrålen sprøjte højere og højere når trykket øges i slangen (når spændingen stiger).
').'
'.afsnit('ampere','
Ampere er enheden for elektrisk strømstyrke.
Ampere er den mængde af elektroner som bevæger sig gennem en leder per sekund.
Det er ledningens tykkelse som sætter en grænse for hvor mange ampere der kan komme gennem ledningen før den bliver så varm at den smelter. Dette bruges i sikringer hvor tråd tykkelsen bestemmer hvor mange ampere der højst kan komme igennem før tråden smelter og afbryder strømmen.

Ampere kan sammenlignes med vandets bevægelse gennem en vandslangen.
Jo mere vand (elektroner) der bevæger sig gennem slangen jo større er strømstyrken (ampere).
Jo større diameter slangen har jo lettere vil en større mængde vand kunne bevæge sig gennem slangen.
').'
'.afsnit('ohm','
Ohm er enheden for elektrisk modstand.
Omega tegnet Ω er tegnet for Ohm.

Modstanden i en ledning kommer an på materialet og længden på ledningen.

Jo flere frie elektroner et materiale har jo mindre modstand har materialet.

Jo tykkere ledning jo mindre modstand.
Jo kortere ledning jo mindre modstand.

Sølv, kobber og aluminium har lav elektrisk modstand og er derfor velegnet som leder af elektricitet.
').'
'.afsnit('kredsløb','
Når en pære forbindes som vist så lyser pæren.
'.visbilled('1', 'billed1006.jpg', 'stelforbindelse', false, true).'
Strømmen løber langs pilene.
Samlingen af batteri, ledninger og pære kaldes et kredsløb så længe de er forbundet.
Minus (-) terminalen på batteriet er forbundet med stellet hvor strømmen også kan løbe igennem.
Så vidt jeg ved har de fleste scootere stel og motor forbundet med batteriets negative (-) terminal.
Men der er vist nogen ældre køretøjer som bruger den positive (+) terminal som stelforbindelse.

For at det elektriske udstyr skal virke så skal kredsløbet være helt. Strømmen skal både kunne komme ud til pæren og tilbage til batteriet.
').'
'.afsnit('serielt forbundet','
I et serielt forbundet kredsløb er 2 pærer forbundet som vist.
'.visbilled('1', 'billed1007.jpg', 'serielt serie forbindelse', false, true).'
Pærene deles om de 12 volt fra batteriet og får 6 volt hver.
Strømstyrken er den samme i hele kredsløbet.

Hvis den ene pære springer så stopper begge pærer med at lyse.
').'
'.afsnit('parallelt forbundet','
I et parallelt forbundet kredsløb er 2 pærer forbundet som vist.
'.visbilled('1', 'billed1008.jpg', 'parallel forbindelse', false, true).'
Begge pære får 12 volt fra batteriet.
Hvis den ene pære springer så vil den anden pære stadig lyse.
').'

'.afsnit('udregn','
Har er en cirkel der kan bruges til at udregne mellem alle 4 enheden (volt, ampere, ohm og watt).
Ligningerne gælder for modstande ved jævnstrøm.
'.visbilled('1', 'billed2390.jpg', 'ohm cirkel ? p u i r spændings effekt strømstyrke modstand', false, true).'
Hvis man kender værdien af 2 af enhederne (volt, ampere, ohm eller watt) så kan man udregne de sidste 2 værdier med cirklen.

'.afsnit('eksempler','
100 ohm * 7 ampere = 700 volt.
35 watt / 12 volt = 2,9 ampere.
12 volt / 2 ampere = 6 ohm.
12 volt * 2 ampere = 24 watt.
').'
').'

'.afsnit('I, U, R og P','
Nogen gange bruges bogstaverne I, U, R og P.

Bogstaverne stammer fra tysk og engelsk... Intensität, Unterschied, Resistanz og Power.

I = Intensität = Elektrisk strømstyrke = ampere.
U = Unterschied = Elektrisk spænding = volt.
R = Resistanz = Elektrisk modstand = ohm.
P = Power = Elektrisk effekt = watt.
').'
'

,'
elektronik
' => '
Her ses elektronikken i en DC CDI boks fra en Kymco Super 8.
'.galleriholder(array(galleri('highslidestandard', 'billed1143.jpg', 'billed1143.jpg', 'elektronik i CDI boks fra kymco super 8'))). '

Her ses en modstand.
'.visbilled('1', 'billed0682.jpg', 'elektronik modstand', false, true).'
Modstanden har nogle farvede ringe så man kan finde ud af hvor mange ohm den er på.
Den ser ud til at have farverne (orange, orange, brun, guld).
Hvilket betyder 330 Ω ± 5%.

Her ses en anden modstand som er meget lille.
'.visbilled('1', 'billed1146.jpg', 'elektronik modstand', false, true).'
Man kan se at det er en modstand ved at der står R11 (R = Resistor = Modstand) og med tallene på modstand "334" kan man finde ud af hvor mange ohm den er på.
Det 3. tal angiver antal nuller så den er på 330000 Ω.

Her ses en transformer.
'.visbilled('1', 'billed1147.jpg', 'transformer', false, true).'
Den laver spændingen højere eller lavere. For eksempel kan den lave 12 volt om til 220 volt.
Det skulle være en SMPS (Switch Mode Power Supply) som kører ved høj frekvens.
Den kører muligvis med noget som kaldes fly-back som er en metode til at regulere strømforsyning på. Kredsen der styrer det er KA7500C.

Her ses en krystal.
'.visbilled('1', 'billed1148.jpg', 'elektronik krystal TQ10.000 7QFND', false, true).'
En krystal vibrerer ved en bestemt frekvens når den får strøm... og noget med at den skal have et tuningskredsløb.
I ure bruger man for eksempel quartz krystaller til at få uret til at gå rimelig præcist.
10.000 betyder at krystallen laver en frekvens på 10000 KHertz.

Her ses en thyristor.
'.visbilled('1', 'billed1149.jpg', 'thyristor', false, true).'
Der står "NEC 2P4M P6Z" på den.
På printpladen er den angivet med Q.
'.visfil('1', 'scooterhjemmeside/download/elektronik_2p4m_2p5m_2p6m.pdf').'

Her ses en MOSFET.
MOSFET står for Metal Oxide Semiconductor Field Effect Transistor.
'.visbilled('1', 'billed1150.jpg', 'MOSFET', false, true).'
Den bruges vist til at lave vekselstrøm til transformatoren på primærsiden.
En transformator skal bruge vekselstrøm.
MOSFETen er skruet fast på et stykke aluminium fordi den bliver varm.
På den står "IRF530 I*R 649P 24 2L".
'.visfil('1', 'scooterhjemmeside/download/elektronik_irf530.pdf').'

Her ses en IC kreds som de kaldes.
IC står for integrated circuit (integreret kredsløb på dansk) og kan indeholde mange transistorer.
IC kredse kaldes også for chips og microchip.
'.visbilled('1', 'billed1144.jpg', 'IC kreds fra kymco super 8 4T CDI boks', false, true).'
Det står "KA7500C XG32A".

The KA7500C is used for the control circuit of the pulse-width modulation switching regulator. The KA7500C consists of 5V reference voltage circuit, two error amplifiers, flip flop, an output control circuit, a PWM comparator, a dead-time comparator and an oscillator. 

This device can be operated in the switching frequency of 1kHz to 300kHz. The precision of voltage reference (VREF) is improved up to ±1% with trimming. This provides a better output voltage regulation. The operating temperature range is (-25°C to +85°C)

Her ses en PIC som er en IC kreds.
'.visbilled('1', 'billed1151.jpg', 'PIC fra kymco super 8 4T CDI boks', false, true).'
M-logoet viser at chippen er lavet af et firma der hedder Microchip Technology Incorporated.
Det er en QTP (Quick Turn Programming) hvilket betyder at den er programmeret fra fabrikken.
Det sidste C i PIC16C indikere at sletning af data skal ske med ultraviolet lys, men da der ikke er noget vindue over chippen kan der kun skrives til chippen 1 gang.
Hvis der havde stået F i stedet for har den flash hvilket betyder at den kan slettes elektronik.
Den har 4 A/D konvertere og et PWM modul.
Den har ingen flash/EEPROM hukommelse og kan derfor ikke gemme data, når strømmen afbrydes og kan derfor ikke gemme data om antal omdrejninger. Derfor kan den ikke være programmeret til at blive defekt efter et bestemt stykke tid, som jeg havde en mistanke om, da forlyset på 2 kymco super 8 4T begyndte at slukke efter cirka 2 år på begge scootere.
Der står vistnok "PIC16C716-20/P 0709135" også er der muligvis en cirkel med GS til sidst.
På printpladen er den angivet med et U.
'.visfil('1', 'scooterhjemmeside/download/elektronik_pic16c712_716.pdf').'
'.ahref('http://ww1.microchip.com/downloads/en/DeviceDoc/41106B.pdf', 'PIC16C712/716 Data Sheet (41106B.pdf)').'

Her ses en elektrolyt kondensator.
'.visbilled('1', 'billed1145.jpg', 'elektrolyt kondensator', false, true).'
Den er på 35 Volt og 1000 µF.

Her ses en kondensator som skulle være den der aflades til tændspolen.
'.visbilled('1', 'billed1152.jpg', 'kondensator i kymco super 8 4T CDI boks', false, true).'
På printpladen er den angivet med C hvilket vist nok betyder kondensator.
Jeg syntes der står 155K på den hvis det giver mening.
Det betyder 155nF (nano Farad) som er dens kapacitet.

Her ses en thyristor.
På printkortet kaldes den SCR.
SCR står for Silicon Controlled Rectifier og er en thyristor type.
'.visbilled('1', 'billed0636.jpg', 'elektronik thyristor', false, true).'
Her ses en transistor.
På printkortet kaldes den Q.
'.visbilled('1', 'billed0676.jpg', 'transistor emitter base collector', false, true).'
Her ses en elektrolyt kondensator.
'.visbilled('1', 'billed0638.jpg', 'elektrolyt kondensator', false, true).'
Her ses en zener diode.
På printkortet kaldes den ZD.
'.visbilled('1', 'billed0639.jpg', 'elektronik zener diode', false, true).'
En almindelig diode ensretter strømmen så den kun kan bevæge sig i den ene retning.
En zener dioder fungere ligesom en almindelig diode men hvis volt niveauet overstiger et bestemt antal volt så kan strømmen også bevæge sig i den modsatte retning.
'

,'
kunstharpiks - resin
' => '
CDI, spændingsregulator og lyskontrol bokse er fyldt med kunstharpiks som på engelsk kaldes resin.
Resin betyder harpiks.
Der findes flere typer for eksempel:
epoxy resin.
epoxy rubber resin.

Jeg har læst at epoxy rubber resin kan opløses med acetone.

Det gode ved resin er at fugt ikke kan trænge ind til elektronikken.
Det dårlige ved resin er at den varme som elektronikken laver ikke så let kan komme væk.

Her ses en boks med gennemsigtig kunstharpiks.
'.visbilled('1', 'billed0956.jpg', 'boks med gennemsigtig kunstharpiks resin', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
