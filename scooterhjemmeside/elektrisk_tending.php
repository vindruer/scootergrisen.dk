<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "tænding - Elektrisk";
$overskrift = "tænding - Elektrisk";
$metadescription = "forklaring af tændingssystemet på scootere som tændingspunkt, CDI, TCI, ignition advance kurve";

$databasecenter = array(

'
introduktion
' => '
Her på siden skriver jeg om hvordan tændrøret kommer til at give gnist.
'.visbilled('1', 'billed1792.jpg', 'tænding pick CDI tændspole tændrør', false, true).'
'

,'
forløb
' => '
På svinghjulet sidder en forhøjning som passer tæt forbi pickupen når motoren kører.
Pickup spolen sender signal til CDI boksen.
CDI boksen bestemmer ud fra hvor hurtig motoren kører og en "ignition advance" kurve hvornår tændrøret skal give gnist.
CDI boksens kondensator aflades til tændspolen.
Tændspolen laver den lave spænding fra CDI om til højspænding til tændrøret.
Højspændingen mellem tændrørets elektroder får en gnist til at opstå.
Gnisten antænder benzin/luft blandingen i forbrændingskammeret.
'

,'
tændingspunkt
' => '
Tændingspunktet er det tidspunkt hvor tændrøret giver gnist og afhænger af hvor mange o/min motoren køre med.

Når motoren køre giver tændrøret gnist når stemplet næsten er øverst i kompressions takten.

Når motorens o/min stiger så bestemmer CDI boksens "ignition advance" kurve at tændingspunktet skal foregå lidt tidligere.

Her ses et eksempel på hvordan tændingspunktet ændres ved forskellige motor hastigheder.
'.visbilled('1', 'billed1756.jpg', 'ignition advance kurve piaggio fly 150 cm³', false, true).'
Her ses en "ignitions advance" kurve fra en XT50QT.
'.visbilled('1', 'billed1841.jpg', 'ignition advance kurve xt50qt', false, true).'

Det tidligste tidspunkt hvor tændrøret kan give gnist kaldes "full advance".
Selvom motorens o/min øges så vil tændingspunktet ikke blive tidligere end ved "full advance".

Pickupen laver en "puls" med + og - spænding når forhøjningen på svinghjulet passere tæt forbi pickupen.
'.visbilled('1', 'billed1754.jpg', 'pickup svinghjul forhøjning kymco super 8', false, true).'
'.visbilled('1', 'billed1755.jpg', 'pickup volt', false, true).'
'.visbilled('1', 'billed1073.jpg', 'pickup puls volt spænding', false, true).'
Pulsen fra pickupen laves i CDI boksen om til 2 grund bølgeformer (waveform A og waveform B).

Waveform A markere hvornår forhøjningen passere pickupen og ændres ikke af motorens hastighed.
Waveform A markere det tidligste og seneste tidspunkt for tændingspunktet.
'.visbilled('1', 'billed1074.jpg', 'waveform a', false, true).'
Waveform B variere alt efter hvor mange o/min motoren køre med.
Her er linierne markeret med N1 til N4.
N1 bruges ved laveste o/min.
N2 bruges ved lidt højere o/min.
N3 bruges ved endnu højere o/min.
N4 bruges ved højeste o/min (full advance).
'.visbilled('1', 'billed1077.jpg', 'waveform b', false, true).'

Tændingspunktet (hvor tændrøret giver gnist) findes ved at lægge waveform A og waveform B oven på hinanden.
Punktet hvor linierne krydser er tændingspunktet..
Hvis linierne i waveform A og waveform B ikke krydser hinanden (N1) så er det forhøjningen på svinghjulet som bestemmer tændingspunktet. Så gives der gnist når forhøjningen forlader pickupen.
'.visbilled('1', 'billed1075.jpg', 'waveform a og waveform b', false, true).'

Her ses hvor mange grader krumtapakslen er drejet ved de forskellige tændingspunktet.
Tændingspunktet variere her fra 10 til 35 grader før TDC.
'.visbilled('1', 'billed1076.jpg', 'krumtapaksel vinkel', false, true).'
Det tidligste tændingspunkt er her ved 35 grader før TDC (høj hastighed).
Det seneste tændingspunkt er her ved 10 grader før TDC (tomgang).

Her ses hvordan tændrøret giver gnist tidligere jo højere o/min motoren køre med.
'.visbilled('1', 'animation0005.gif', 'pickup scr gate spark advance', false, true).'

Her er en animation med screenshots fra et computer program.
Jeg går ud fra den røde linie er pickupen og at den høje grønne linie er tændingspunktet.
'.visbilled('1', 'animation0004.gif', 'oscilloscope-xsc1', false, true).'
'

,'
CDI
' => '
En CDI er en boks med elektronik som styrer hvornår tændrøret skal give gnist.

CDI står for Capacitive Discharge Ignition eller Capacitor Discharge Ignition.

Her ses 2 CDI bokse.
'.visbilled('1', 'billed0291.jpg', 'CDI', false, true).'
Her ses en CDI med indbygget tændspole.
'.visbilled('1', 'billed1527.jpg', 'CDI med tændspole', false, true).'
Elektronikken er indkapslet i kunstharpiks så fugt ikke kan komme ind.

CDI boksen er oftes ikke justerbar.
Det vil sige det er ikke noget at indstille.
CDI boksen har ingen bevægelige dele.

CDI boksen indeholder en kondensator (Capacitor på engelsk) som fungerer ligesom et batteri.
Kondensatoren oplades af generatoren (AC CDI) eller batteriet (DC CDI) og aflades derefter hurtigt til tændspolen som giver en gnist ved tændrøret.

'.afsnit('sådan virker CDI boksen','
Kondensatoren oplades.
CDI boksen får signal fra pickupen.
CDI boksen udregner hvornår tændrøret skal give gnist afhængig af motorens omdrejningshastighed.
Kondensatoren aflades til tændspolen.
Tændspolen laver de cirka 220 volt fra CDI boksen om til cirka 20000 volt og tændrøret giver gnist.
(Nogle steder på nettet står at CDI boksen afgiver cirka 400-600 volt og at tændspolen laver spændingen om til cirka 40000 volt.)

Efter som svinghjulet drejer 2 omgange før en 4 takt motor har gennemført sine 4 takter så vil jeg mene det foregår sådan her for på en 4 takt motor.
'.visbilled('1', 'billed0735.jpg', 'signal fra pickup og volt på kondensator', false, true).'
Og sådan her på en 2 takt motor.
'.visbilled('1', 'billed2449.jpg', 'signal fra pickup og volt på kondensator', false, true).'
').'

Tændingspunktet hvor tændrøret giver gnist variere alt efter hvor hurtigt motoren køre.
Jo hurtigere motoren køre jo tidligere vil tændrøret give gnist.
Der findes en grænse for hvor tidligt CDI boksen vil sætte tændingspunktet og dette punkt kaldes full advance.

Her ses et diagram fra Piaggio Fly 150 cm³ hvor full advance opnås ved 6000 o/min og her giver tændrøret gnist når krumtapakslen er 26 grader før TDC.
'.visbilled('1', 'billed1576.jpg', 'tomgang full advance grader før TDC omdrejninger i minuttet', false, true).'
Selvom motorens o/min øges over 6000 o/min så vil tændrøret forsat give gnist når krumtapakslen er drejet til 26 grader før TDC.

Jeg har læst at CDI boksen er designet til at øge spændingen til tændspolen efterhånden som motorens o/min øges.

'.afsnit('CDI boks typer','
Nogle CDI bokse får strøm fra batteriet og de kaldes DC CDI fordi de får jævnstrøm.
Andre CDI bokse får strøm fra generatoren og de kaldes AC CDI fordi de får vekselstrøm.

DC CDI får cirka samme spænding fra batteriet lige meget hvor hurtigt motoren køre, som er en fordel ved de helt lave o/min.
AC CDI er afhængig af at motoren skal køre hurtigt nok så generatoren kan producerer spænding nok. Det kan være et problem ved de helt lave o/min.
'.visbilled('1', 'billed3336.jpg', 'AC CDI i forhold til DC CDI ved de helt lave omdrejninger', false, true).'

DC CDI bokse skulle gerne være lidt større end AC CDI bokse fordi der skal være noget ekstra elektronik i men jeg kender ikke til nogen sikker måde at fastslå om en CDI er AC eller DC.

Her ses to AC CDI.
'.visbilled('1', 'billed2699.jpg', '2 styks AC CDI', false, true).'
Her ses en DC CDI.
'.visbilled('1', 'billed2700.jpg', 'DC CDI', false, true).'
').'

'.afsnit('AC CDI','
Får vekselstrøm fra generatoren.

'.afsnit('her ses nogen eksempel på hvordan en AC CDI kan være forbundet','
Dødmandsknap.
Generator.
Tændspole.
Stel.
Pickup.
').'
'.visbilled('1', 'billed2912.jpg', 'CDI lednings diagram', false, true).'
'.visbilled('1', 'billed0276.jpg', 'CDI lednings diagram', false, true).'
'.visbilled('1', 'billed1963.jpg', 'CDI lednings diagram', false, true).'
'.visbilled('1', 'billed2527.jpg', 'CDI stik med 4 ben forbundet til pickup stel tændspole generator', false, true).'
'.visbilled('1', 'billed2539.jpg', 'CDI stik forbindelser fra Baotian 139qma 139qmb motormanual', false, true).'
'.visbilled('1', 'billed2646.jpg', 'CDI fra Baotian 139qma 139qmb motormanual', false, true).'

'.afsnit('AC CDI fra CPI Oliver City','
'.visbilled('1', 'billed3544.jpg', 'CPI Oliver City', false, true).'
'.visfil('1', 'scooterhjemmeside/download/cpi_olivercity_eldiagram_cdi_generator.jpg').'
').'
').'

'.afsnit('DC CDI','
Får jævnstrøm fra batteriet.
Da DC CDI boksen får jævnstrøm er der en ekstra DC/AC konverter hvilket gør boksen lidt større end en AC CDI boks.
DC CDI giver mere præcis tændings timing og motoren er lettere at starte om vinteren (ifølge '.ahref('http://en.wikipedia.org/wiki/Capacitor_discharge_ignition', 'Wikipedia').').

'.afsnit('på Kymco Super 8 4T er CDI boksen forbundet med','
Tændspole.
Lyskontrol boks.
Tændingslås (batteriets + terminal når tændingslåsen er drejet til ON).
Stel.
Automatisk choker (gennem en modstand).
Pickup.
'.visbilled('1', 'billed0293.jpg', 'CDI stik fra Kymco Super 8', false, true).'
').'
').'

'.afsnit('adskilt','
Her ses CDI boksen fra en Kymco Super 8.
'.visbilled('1', 'billed1090.jpg', 'Kymco Super 8 4T CDI', false, true).'
Elektronikken er omgivet af noget sort kunstharpiks som normalt er hårdt og svært at få af.

Men hvis man varmer kunstharpiksen med en varmepistol bliver det blødt og kan fjernes lidt af gangen.
'.visbilled('1', 'billed1091.jpg', 'Kymco Super 8 4T CDI adskilt', false, true).'
'.visbilled('1', 'billed1092.jpg', 'Kymco Super 8 4T CDI adskilt', false, true).'
'.visbilled('1', 'billed1094.jpg', 'Kymco Super 8 4T CDI adskilt', false, true).'
'.visbilled('1', 'billed1093.jpg', 'Kymco Super 8 4T CDI adskilt', false, true).'
'.galleriholder(array(galleri('highslidestandard', 'billed1577.jpg', 'billed1577.jpg', 'Kymco Super 8 4T CDI adskilt'))). '
').'

'.afsnit('justerbare CDI','
På justerbare CDI bokse kan man justere hvor tidlig tændingen skal være med en lille skruetrækker.
'.visbilled('1', 'billed2987.jpg', 'justerbar CDI', false, true).'
Nogle CDI bokse har desuden en ledning med en kontakt så man kan skifte mellem 2 forskellige indstillinger.
Det kan muligvis bruges til at skifte mellem 2 forskellige tophastigheder.
'.visbilled('1', 'billed1555.jpg', 'justerbar CDI', false, true).'
'.visbilled('1', 'billed1584.jpg', 'justerbar CDI', false, true).'
').'
'

,'
TCI
' => '
TCI står for Transistor Controlled Ignition.

TCI styrer ligesom CDI tændingstidspunktet men er bare lavet på en anden måde end en CDI boks.

TCI findes blandt andet på '.ahref('altomhonda.php#hondazoomer', 'Honda Zoomer').' og nogle Yamaha modeller.

TCI boksen har et mere simpelt design i forhold til CDI og den bruger ikke nogen kondensator.
'

,'
kontaktsæt
' => '
På ældre knallerter uden CDI er det et kontaktsæt som bestemmer hvornår tændrøret skal give gnist.
'.visbilled('1', 'billed2552.jpg', 'kontaktsæt', false, true).'
Krumtapakslen har en blød firkantet form der hvor den har kontakt med kontaktsættet som får kontakten til at åbne og lukke når motoren køre.
'

,'
pickup
' => '
Se '.ahref('elektrisk_spoler.php#pickup', 'Spoler - Elektrisk').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
