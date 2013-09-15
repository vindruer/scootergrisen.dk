<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "Motor - Fejlfinding";
$overskrift = "Motor - Fejlfinding";
$metadescription = "find og ret fejl på scooterens motor";

$databasecenter = array(

'
kompression forklaring
' => '
Kompression er udtryk for hvor meget cylinderens indhold presses sammen.

Det kan for eksempel være 10:1.

10:1 betyder at når stemplet bevæger sig fra sin nederste position til sig øverste position så presser den indholdet i cylinderen sammen så det fylder 10 gange mindre.
'.visbilled('1', 'billed0526.jpg', 'kompression', false, true).'
I Kymco Super 8 4T servicemanualen står der at cylinder kompressionen er 11:1 og at kompressions trykket er 14-18 kg/cm².

Kompressionen kan testes med en '.ahref('verktoj.php#kompressionstester', 'kompressionstester').'.
'

,'
kompressionstest
' => '
Træd langsomt på kickstarteren og mærk om der er forskel på modstanden eller om det er lige let at træde hele tiden.
Det skal være let at træde nogen gange og svært andre gange så er der kompression.

Selvom der er kompression er det ikke sikkert der er nok kompression.
For at få en præcis måling af kompressionen kan man bruge en kompressionstester.

'.afsnit('kompressionstest','
Skru tændrøret ud og monter kompressionstesteren i tændrørshullet.
Nogle kompressionstestere fås med forskellige adaptorer hvor en af dem kan skrues i tændrørshullet og der er også nogen kompressionstestere som har en gummidut så man skal presse den mod tændrørshullet mens man tester.

Gashåndtaget drejes hele vejen rundt og el starteren bruges i nogle sekunder indtil viseren ikke kan komme højere op.
'.visbilled('1', 'billed1448.jpg', 'kompressionstest af scooter motor', false, true).'
Den højeste måling skulle gerne kunne nås i løbet af 4-7 sekunder.

Kompressionstesteren holder målingen indtil man trykker på en knap for at nulstille den.

Her er målt cirka 135 PSI (930 KPascal).
'.visbilled('1', 'billed1445.jpg', 'kompressionstester', false, true).'

Sammenlign målingen med det der står i scooterens servicemanual.

Kymco Super 8 4T skal have et tryk på 16-18 kg/cm².
Sym Mio skal have et tryk på 9 ± 2 kg/cm².
I "Haynes 4768" bogen står at en måling omkring 190 PSI (13 Bar, 13 Kg/cm², 1310 Kpascal) indikere at cylinderen er i god stand.

Hvis trykket stiger hurtigt og jævnt så er det godt.
Hvis trykket er lavt i starten og stiger lidt efter lidt kan det være fordi stempelringene klistre eller sempelringene og cylinderen er slidte.
Hvis trykket er lavt og ikke stiger kan det være ventilerne ikke holder tæt eller utæt topstykke pakning.

Hvis trykket er for lavt så sprøjt en smule olie ind gennem tændrørshullet (cirka en teskefuld) og mål igen. Hvis trykket nu er højere så er stempelringene eller cylinderen slidt.
Hvis trykket forsat er lavt efter olien er kommet i så er det ventilerne eller topstykke pakningen som ikke holder tæt.
').'

'.afsnit('kompression for høj','
• for meget kulstof belægning i forbrændingskammer
').'

'.afsnit('kompression for lav','
• forkert ventil spillerum
• brændte eller bukkede ventiler
• forkert ventil timing
• knækket ventil fjeder
• dårlig ventil og ventilsæde kontakt
• utæt topstykke pakning
• topsykker ikke spændt ordentligt fast
• bulet ellet flækket topstykke
• tændrør sidder løst
• slidt eller skadet cylinder, stempel og stempelringe
').'
'

,'
mister kompression midlertidigt
' => '
Jeg har af og til haft et problem med at motoren fuldstændigt mister kompression.
Problemet kan komme med nogle/mange måneders mellemrum.

Hvis motoren er kold så kan der rimelig hurtigt komme kompression igen ved bare at blive ved og ved med at prøve at starte.
Hvis motoren er varm så kan der gå 30 minutter før der igen er kompression selvom man står hele tiden og forsøger at starte.

Jeg har haft udstødningsventilen ude og man kan se en del kulstof på ventilkroppen.
Der hvor ventilenkroppen går ind i ventilstyret ser det ud til at kulstoffet har kilet sig fast mellem ventil og ventilstyr sådan at ventilen måske har sat jeg fast når den er åben.
'.visbilled('1', 'billed3053.jpg', 'ventil med kulstof', false, true).'
Her er ventilen rengjort.
'.visbilled('1', 'billed3054.jpg', 'ventil gengjort', false, true).'
Jeg har rengjort ventilen den 20-06-2011 så vil jeg se om problemet med mistet kompression kommer tilbage eller om det er væk nu hvor ventilen er blevet rengjort.
...
Jeg oplevede nogen måneder senere... cirka 4 måneder senere at scooteren efter at have stået stille nogen dage og jeg skulle starte den igen at den mistede kompression og jeg igen skulle stå lang tid og forsøge at starte den.
Så det hjælpe åbenbart ikke på problemet at rense ventilerne.
'

,'
olie
' => '
'.afsnit('olie niveau for lavt','
• almindeligt olie forbrug
• utætheder
• slidte eller forkert monteret stempelringe
• slidte ventilstyr eller tætningsringe
').'

'.afsnit('for lavt olietryk','
• olie niveau for lavt
• tilstoppet oliefilter eller olie passage
• forkert olie
').'
'

,'
videoer
' => '
Se også '.ahref('http://repvideo.lars-mc.dk/repvideo/view.repair_video.php?id=24', 'Kompressionstest og fejlfinding (repvideo.lars-mc.dk)').'.
'

,'
tændingsbanken
' => '
Tændingsbanken kaldes også detonation.
Tændingsbanken kaldes banking på engelsk.

Når benzin og luft blandingen presses sammen i forbrændingskammeret så stiger temperaturen.
Hvis kompressionen bliver høj nok kan benzin og luftblandingen selvantænde.
Denne selvantænding af benzin og luft blandingen kaldes tændingsbanken.

Jo højere oktantal benzinen har jo højere kompression kan det udsættes for før det selvantænder.

Jo højere kompression motoren bruger jo højere oktantal kræves i benzinen for at undgå tændingsbanken.

Tændingsbanken kan høres som en bankende metallisk lyd og opleves som en ujævn motorgang.

Tændingsbanken opstår når benzin/luft blandingen selvantænder i forbrændingskammeret før tændrøret giver gnist.
Det får stemplet til kortvarigt at bevæge sig i den modsatte retning fordi det endnu ikke er nået toppen af cylinderen.

Tændingsbanken giver stor belastning på stempel, plejlstang og krumtap og kan på længere sigt give motorskade.

Tændingsbanken kan skyldes brug af benzin med for lavt oktantal eller det kan skyldes for meget kulstof belægning i forbrændingskammeret som dermed giver højere kompression på grund af mindre volume i forbrændingskammeret.

'.ahref('benzin.php#oktan', 'Oktan').'
'

,'
TDC og BDC
' => '
Når motoren køre bevæger stemplet sig op og ned i cylinderen.

'.afsnit('TDC','
Når stemplet er helt i toppen af cylinderen kaldes dette punkt for TDC (Top Dead Center).
På dansk kaldes TDC for øverste dødpunkt (ØD).
'.visbilled('1', 'billed2152.jpg', 'TDC', false, true).'
').'
'.afsnit('BDC','
Når stemplet er helt i bunden af cylinderen kaldes dette punkt for BDC (Bottom Dead Center).
På dansk kaldes BDC for nederste dødpunkt (ND).
'.visbilled('1', 'billed2153.jpg', 'BDC', false, true).'
').'
Længden stemplet rejser op og ned i cylinderen fra TDC til BDC kaldes slaglængden.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
