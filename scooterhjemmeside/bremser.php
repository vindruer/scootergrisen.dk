<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "bremser";
$overskrift = "bremser";
$metadescription = "lær om bremserne på en scooter. Skivebremse, tromlebremse, ABS, bremsekabel, bremsekontakt";

$databasecenter = array(

'
bremsetyper
' => '
Der findes primært 2 slags bremser på scootere.
Det er skivebremse og tromlebremse.

Og der findes primært 2 måder at aktiver bremserne på.
Bremserne kan aktiveres  med bremsegreb på styret eller en fodpedal foran højre fodhviler.

Og der findes primært 3 måder af overfører kraften fra bremsegrebet/fodpedalen.
Kraften kan overføres hydraulisk gennem bremsevæske eller mekanisk gennem et kabel eller en stang.
'

,'
forbremse
' => '
Forbremsen aktiveres så vidt jeg ved altid med bremsegrebet på højre side af styret.
'.visbilled('1', 'billed0054.jpg', 'højre bremsegreb', false, true).'
De fleste scootere har hydraulisk aktiveret skivebremse som forbremse.
'

,'
skivebremse
' => '
Her ses en bremseskive og en bremsecaliper.
'.visbilled('1', 'billed0132.jpg', 'skivebremse', false, true).'
Skivebremsen er hydraulisk aktiveret på næsten alle scootere.
Hydraulisk betyder at kraften fra bremsegrebet overføres til bremseklodserne gennem bremsevæske som er flydende.

Bremsevæskebeholderen er ofte indbygget i bremsegrebet som det ses her.
'.visbilled('1', 'billed2558.jpg', 'bremsevæskebeholder', false, true).'
Her kan man se bremsevæsken.
'.visbilled('1', 'billed2578.jpg', 'bremsevæskebeholder låg skruet af', false, true).'
Der er 3 "låg".
Metal låget, plastik låget og gummi membranen.
'.visbilled('1', 'billed2576.jpg', 'bremsevæskebeholder metal låg plastik låg gummi membran nedefra', false, true).'
I metal låget er der i 2 små hakker så atmosfærisk luft kan komme ind under metal låget og ind gennem et hul midt i plastik låget så gummimembranen kan bevæge sig ned uden at der sammen vakuum over gummi membranen.
'.visbilled('1', 'billed2575.jpg', 'bremsevæskebeholder metal låg plastik låg gummi membran oppefra', false, true).'
På siden af bremsevæskebeholderen kan man kigge gennem et rundt vindue for at se bremsevæskeniveauet.
'.visbilled('1', 'billed0400.jpg', 'bremsevæskebeholder', false, true).'
Bremsegrebet presser ind på en støvhætte hvor der er et stempel under som sætter bremsevæsken under tryk.
'.visbilled('1', 'billed2642.jpg', 'bremsevæskebeholder stempel låsering', false, true).'

'.visbilled('1', 'billed3174.jpg', 'bremsevæskebeholder stempel', false, true).'
Selve bremsevæskebeholderen øverst med vinduet sættes ikke under tryk.
'.visbilled('1', 'billed3087.jpg', 'bremsevæskebeholder tværsnit tegning', false, true).'
Trykket går gennem en banjobolt og banjofitting ved bremsevæskebeholderen, gennem en slange og igennem endnu en banjo fitting og banjobolt på bremsecaliperen.
'.visbilled('1', 'billed2556.jpg', 'bremsevæskebeholder banjo', false, true).'
'.visbilled('1', 'billed2557.jpg', 'bremsecaliper banjo', false, true).'
Trykket i bremsesystemet får et eller flere stempler i bremsecaliperen til at bevæge sig ud.

Her ses en bremsecaliper med stemplet taget ud.
'.visbilled('1', 'billed0141.jpg', 'bremsecaliper stempel gummi ring', false, true).'
Inden i bremsecaliperen er en eller flere gummi ringe som slutter tæt om stemplet så bremsevæsken ikke kan komme ud.
Gummi ringene får også stemplet til at trække sig lidt tilbage når man giver slip på bremsegrebet så trykket på bremseklodserne fjernes.

Stemplet/stemplerne trykker på bremseklodsen som trykker ind på bremseskiven.
Hele bremsecaliperhuset kan bevæge sig ind og ud på beslaget der er spændt fast på forgaflen.
Så selvom stemplet/stemplerne kun presser på den ene side så presses bremseklodserne på begge sider ind mod bremseskiven og scooteren bremses.
'.visbilled('1', 'billed3373.jpg', 'bremsecaliper fra PGO', false, true).'

Her ses en bremsecaliper med 2 stempler.
'.visbilled('1', 'billed0664.jpg', 'bremsecaliper med 2 stempler', false, true).'

Øverst på bremsecaliperen sidder en udluftningsskrue med gummidut på som bruges til at udlufte bremsesystemet og til når man skal skrifte bremsevæske.
'.visbilled('1', 'billed2574.jpg', 'udluftningsskrue på bremsecaliper gummidut', false, true).'
'.visbilled('1', 'billed3175.jpg', 'udluftningsskrue og gummidut', false, true).'

Her ses bremsecaliperen fra den modsatte side.
'.visbilled('1', 'billed0134.jpg', 'skivebremse', false, true).'

Hydrauliske bremser skal ikke justeres ligesom mekaniske bremser.
Efterhånden som bremseklodserne slides så presses der automatisk mere bremsevæske fra bremsevæskeholderen ind i bremsesystemet.
På den måde fungere justeringen automatisk.

Når bremseklodserne skal skiftes presser man stemplet ind i bremsecaliperen som får noget af bremsevæsken fra bremsesystemet til at løbe tilbage til bremsevæskebeholderen også er der plads til de nye bremseklodser med tykkere belægning.
'

,'
bremsevæske
' => '
' . ahref('smorelse.php#bremseveske', 'Bremsevæske')

,'
ABS
' => '
ABS står for Anti-lock Braking System eller Anti Blocking System.

Meningen med ABS er at hjulet ikke skal blokere når man bremsesr.
Hvis hjulet blokerer mister man styringen af scooteren og det er ikke muligt at dreje fordi scooteren forsætter ligeud selvom forhjulet drejes til siden.

På scootere/motorcykler med ABS sidder der en sensor og en rotor ved hjulet.
'.visbilled('1', 'billed2392.jpg', 'ABS sensor på motorcykel', false, true).'
'.visbilled('1', 'billed2393.jpg', 'ABS sensor på motorcykel', false, true).'
'.visbilled('1', 'billed2477.jpg', 'ABS sensor på kymco xciting 500RiABS', false, true).'
Sensoren er forbundet med en ABS ECU som på grund af rotoren er i stand til at registrer om hjulet drejer rundt og hvor hurtigt.
'.visbilled('1', 'billed2479.jpg', 'ABS ECU og hydraulisk enhed på kymco xciting 500RiABS', false, true).'
Her ses en ABS ECU som er forbundet med en hydraulisk enhed.
'.visbilled('1', 'billed2480.jpg', 'ABS ECU og hydraulisk enhed på kymco xciting 500RiABS', false, true).'
Kommer man kørende og bremser hårdt så vil ABS ECU og den hydraulisk enhed give et pulserende tryk i bremsesystemet så hjulet så bremse hurtigt skifter mellem at bremse og ikke at bremse.
Resultatet er at selvom man bremser hårdt så bloker hjulet ikke og man har bedre chance for at komme ud af en farlig situation.

Jeg har ikke set ABS på nogle 50 cm³ scootere men der findes et andet system.

Her ses en skivebremse med en uægte ABS "enhed".
"Enheden" er indsat mellem bremsecaliperen og banjofittings.
'.visbilled('1', 'billed0139.jpg', 'skivebremsecaliper med muligvis trykregulator', false, true).'
Man kan ikke kalde dette system for ABS da hjulet stadig kan blokere.
Men det angives sikkert som ABS i salgsmateriale.

Så vidt jeg forstår kan "enheden" gøre bremsesystemet lidt større sådan at når trykket i bremsesystemet kommer over et bestemt punkt så er der et stempel i "enheden" som bevæger sig lidt så trykket ikke bliver lige så højt som det ellers ville blive.
'.visbilled('1', 'billed1468.jpg', 'zhong ning muligvis trykregulator', false, true).'
Her følger nogle flere billeder af "enheden" som er blevet skilt ad.
'.visbilled('1', 'billed1469.jpg', 'zhong ning muligvis trykregulator', false, true).'
'.visbilled('1', 'billed1470.jpg', 'zhong ning muligvis trykregulator', false, true).'
Her kan man åbenbart justere "enheden".
'.visbilled('1', 'billed1471.jpg', 'zhong ning muligvis trykregulator', false, true).'
'.visbilled('1', 'billed1472.jpg', 'zhong ning muligvis trykregulator', false, true).'
Det ser ud til at når trykket i bremsesystemet når et bestemt tryk så vil fjederen gøre at trykket ikke bliver så højt så det ellers ville blive.
Jeg forstiller mig at man kan eller måske næsten kan presse bremsegrebet i bund og at bremsegrebet føles mere svampet.
Men jeg har aldrig prøvet systemet.
'.visbilled('1', 'billed1473.jpg', 'zhong ning muligvis trykregulator', false, true).'
'

,'
bagbremse
' => '
På scootere med automatisk kobling (hvor man ikke skal skifte gear) aktiveres bagbremsen gerne med bremsegrebet på venstre side af styret.
'.visbilled('1', 'billed0055.jpg', 'venstre bremsegreb', false, true).'
På scootere med manuel kobling (hvor man skal skifte gear) aktiveres bagbremsen gerne med en bremsepedal på højre side foran fodhvileren.
'.visbilled('1', 'billed1749.jpg', 'bagbremse pedal', false, true).'
'.visbilled('1', 'billed2324.jpg', 'bagbremse pedal', false, true).'
De fleste scootere har tromlebremse på baghjulet.
'

,'
tromlebremse
' => '
Tromlebremsen aktiveres ofte mekanisk ved at overføre kraft fra bremsegrebet til bremsearmen gennem et kabel.

Ved hjulet sidder en bremsearm og en skrue til justering af bremsegrebets spillerum.
'.visbilled('1', 'billed0135.jpg', 'bremsearm', false, true).'
Når der bremses drejer akslen som kaldes bremsenøgle og skubber de 2 bremsebakker væk fra hinanden.
'.visbilled('1', 'billed1391.jpg', 'bremsearm', false, true).'
Her ses bremsebakkerne.
2 fjedre holde bremsebakkerne sammen og hiver wiren tilbage når bremsegrebet slippes.
'.visbilled('1', 'billed1387.jpg', 'bremsebakker til tromlebremse', false, true).'
'.visbilled('1', 'billed1385.jpg', 'tromlebremsearm baghjulsaksel', false, true).'
Læg mærke til at bremsebakkerne er slidt forskelligt.
Der er ligesom nogle rille på den ene bremsebakke.
'.visbilled('1', 'billed1388.jpg', 'bremsebakker til tromlebremse', false, true).'

'.visbilled('1', 'billed0025.jpg', 'tromlebremse', false, true).'

Bremsearmen fjernes ved at løsne skruen på bremsearmen og skubbe den af med en flad skruetrækker.
'.visbilled('1', 'billed1383.jpg', 'bagbremse bremseaksel bremsearm mærke', false, true).'

Bremsearmen og bremsenøglen har et hak/mærke som sikre at de vender i den rigtige vinkel.
'.visbilled('1', 'billed1384.jpg', 'bremsearm aksel hak mærke', false, true).'
Bremsearmen har en fjeder som hjælper med at trække wiren tilbage når man giver slip på bremsegrebet.
'.visbilled('1', 'billed1390.jpg', 'bremsearm aksel fjeder', false, true).'
Bremsenøglen har en gummi ring for at holde snavs ude.

Tromlebremse findes primært på baghjulet men der er også scootere som har tromlebremse på forhjulet.
'.visbilled('1', 'billed0806.jpg', 'tromlebremse på sym mio forhjul', false, true).'
'

,'
bremsekabel
' => '
Her ses den ene ende af et bremsekabel.
'.visbilled('1', 'billed2722.jpg', 'bremsekabel nippel', false, true).'
Her ses hvor bremsekablet sidder ved venstre bremsegreb.
'.visbilled('1', 'billed2723.jpg', 'bremsekabel bremsegreb', false, true).'
'

,'
bremsekontakt
' => '
Her ses en bremsekontakt ved højre bremsegreb.
'.visbilled('1', 'billed2561.jpg', 'kymco super 8 4T højre bremsekontakt', false, true).'
Bremsekontakter bruges til at tænde bremselyset når der bremses og som en sikkerhedsfunktion der gør at man skal bremse før man kan bruge el starteren til at starte motoren.

Når bremsegrebet er sluppet presser bremsegrebet ind på kontakten også er forbindelsen mellem terminalerne afbrudt.
'.visbilled('1', 'billed2405.jpg', 'kymco super 8 4T højre bremsekontakt ind', false, true).'
Når man bremser kommer dutten ud og forbindelsen mellem de to terminaler tilsluttes og bremselyset tændes og el starteren kan bruges.
'.visbilled('1', 'billed2406.jpg', 'kymco super 8 4T højre bremsekontakt ud', false, true).'
'.visbilled('1', 'billed2407.jpg', 'kymco super 8 4T højre bremsekontakt ud', false, true).'

Her ses en bremsekontakt ved venstre bremsegreb.
'.visbilled('1', 'billed2717.jpg', 'venstre bremsekontakt', false, true).'
For at fjerne bremsekontakten skal man først fjerne bremsegrebet også presse bagfra.
'.visbilled('1', 'billed2724.jpg', 'venstre bremsekontakt', false, true).'
På min scooter er der en slange som er smeltet om ledningerne så man skal skære det af før man kan få ledningerne igennem.
'.visbilled('1', 'billed2718.jpg', 'venstre bremsekontakt', false, true).'
'.visbilled('1', 'billed2726.jpg', 'venstre bremsekontakt', false, true).'
'.visbilled('1', 'billed2719.jpg', 'venstre bremsekontakt', false, true).'
'.visbilled('1', 'billed2720.jpg', 'venstre bremsekontakt', false, true).'
'.visbilled('1', 'billed2721.jpg', 'venstre bremsekontakt', false, true).'
Her kan man se at når dutte er presset ind (bremsegreb sluppet) så er der ikke forbinelse mellem ledningerne.
Når man bremser kommer dutten ud og forbindelsen mellem ledningerne tilsluttes gennem en lille metal ring.
'.visbilled('1', 'animation0022.gif', 'venstre bremsekontakt animation', false, true).'
'.visbilled('1', 'animation0023.gif', 'venstre bremsekontakt animation', false, true).'
Der er et hul under bremsekontakten som måske er til så vand/fugt kan komme ud.
'.visbilled('1', 'billed2725.jpg', 'venstre bremsekontakt', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
