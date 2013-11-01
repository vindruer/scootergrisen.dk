<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "dæk";
$overskrift = "dæk";
$metadescription = "lær om dæk til scootere som dækkoder, diagonal og radial, ventil og fælg";

$databasecenter = array(

'
dækkoder
' => '
På siden af et dæk står der tal, bogstaver og tegn som fortæller en masse om dækket.
Her kommer en forklaring så du kan afkode dit dæk og forstå det bedre.

'.afsnit('hvad betyder 100/80-14 ?','
'.visbilled('1', 'billed0241.jpg', 'dæk 100/80-14', false, true).'
100 = mm bredt på det bredeste punkt.
80 = % højt af bredden (80% af 100 mm = 80 mm højt).
14 = dækkets indre diameter i tommer.
').'

'.afsnit('hvad så med 48L ?','
48 = Maksimal belastnings index (48 = 180 kg).
L = Maksimum hastigheds index (L = 120 km/t).
').'

'.afsnit('hvad betyder 3.50 x 10 ?','
Her oplyses dæk bredden i tommer.
3.50 = dæk bredde i tommer.
10 = dækkets indre diameter i tommer.
').'
'

,'
flere dækkoder
' => '
'.afsnit('koder som kan findes på dæk','
TT = Tube Tire (dæk med slange).
TL = Tubeless (slangeløst, dæk uden slange).
R = Radial (måden tråde i dækket er lagt på).
RF = Reinforced (forstærket).
M+S = Mud+Snow (godt til mudder og sne).
M/C = Beregnet til motorcykler.
').'

Der kan stå et 4 cifret tal på dækket, for eksempel 3207.
Dette står for ugen og året hvor dækket blev fremstillet

I dette tilfælde blev dækket fremstillet i uge 32 år 2007.
'.visbilled('1', 'billed0249.jpg', 'dæk fremstillings dato. Uge og år', false, true).'

En pil indikerer hvilken vej dækket skal vende når det monteres.
Nogle dæk har pile som vender begge veje alt efter om det monteres på for eller baghjul.
'.visbilled('1', 'billed0250.jpg', 'TWI og rotation', false, true).'

Her står "MAX. LOAD 180 Kg ( 397 LBS. ) AT 225 kPa ( 32 PSI. ) COLD.
Det fortæller om dækkets maksimale belastning og tryk men det er ikke dette dæktryk man normalt skal bruge.
'.visbilled('1', 'billed1844.jpg', 'dæk max load', false, true).'

TWI = Thread Wear Indicator.
Thread wear indicator er små forhøjninger i bunden af dækmønsteret som indikere hvornår dækket trænger til at blive skiftet ud.
'.visbilled('1', 'billed2204.jpg', 'dæk twi', false, true).'
Dækket bør udskiftes inden de små forhøjninger i bunden af mønstret er i samme højde som det yderste af dækket.
'.visbilled('1', 'billed2205.jpg', 'dæk twi', false, true).'
'.visbilled('1', 'billed3278.jpg', 'dæk twi', false, true).'

'.visbilled('1', 'billed0248.jpg', 'dæk twi', false, true).'

STD.RIM:MT2.50 = Dækket passer bedst på en fælg der er 2.50 tommer bred.
M betyder at dækket er beregnet til motorcykler.
T betyder muligvis fælgens bredde og at man kan bruge dækket på en fælg der er mellem 2,50 til 3,00 i bredden.
'.visbilled('1', 'billed0242.jpg', 'dæk std.rim:2.50 2.75', false, true).'

Her ses fælg størrelsen på forfælg og bagfælg.
Bagfælg og bagdæk plejer gerne og være lidt bredere end forfælg og fordæk.
'.visbilled('1', 'billed0252.jpg', 'fælg størrelse 14x2.50 14x3.0', false, true).'

Nylon betyder at trådene i karkassen eller bæltelagene er lavet af nylon.
'.visbilled('1', 'billed0244.jpg', 'dæk nylon e4', false, true).'

E4 i cirkel fortæller hvilket land dækket oprindeligt blev godkendt i og kaldes vist nok et ECE typegodkendelses nummer.
4 står for holland. 18 står for danmark.
'.visbilled('1', 'billed0251.jpg', 'dæk e4', false, true).'

'.afsnit('hvad betyder 2PR, 4PR og 8PR ?','
PR = Ply Rating.

4PR betyder at dækket er lavet med 4 bæltelag.
Bæltelagene ligger under slidbanen.
'.visbilled('1', 'billed0247.jpg', 'dæk pr ply rating bæltelag', false, true).'
Jo flere bæltelag jo stærkere skulle dækket være.

Her ses et dæk som er angivet med 8PR på indpakningen.
'.visbilled('1', 'billed2981.jpg', 'dæk med 8PR', false, true).'
').'
'

,'
diagonal og radial
' => '
Om dækket er diagonalt eller radialt fortæller om hvordan trådene i karkassen vender.
Diagonale dæk har tråde i karkassen som krydser centerlinien af dækket med cirka 40 grader.
Radiale dæk har tråde i karkassen som går direkte fra dæk kant til dæk kant og krydser centerlinien af dækket med 90 grader.
'.visbilled('1', 'billed0238.jpg', 'diagonal og radial', false, true).'
Her ses 3 forskellige dæk.
'.visbilled('1', 'billed0239.jpg', 'diagonal og radial', false, true).'

Diagonale lag giver et stift dæk med stor side stabilitet og bruges vist mest på køretøjer med under 4 hjul.
Radiale lag giver et smidigt dæk med større kørselskomfort og bruges vist mest på køretøjer med 4 eller flere hjul.

Diagonale dæk skulle være mere fleksible, give en blødere kørsel og mere rullemodstand i forhold til radiale dæk.

Set fra siden ser karkassen sådan her ud.
'.visbilled('1', 'billed0237.jpg', 'diagonal og radial', false, true).'
'.afsnit('ply','
Ply er tråde som er inden i dækket for at forstærke det.
Trådene kan for eksempel være lavet af nylon, stål, polyester eller tekstil.

Diagonale tråde kaldes også bias ply eller cross ply.
Radiale tråde kaldes også radial ply.
').'

Her kan man se 2 diagonale lag med stål tråde. Det er formodentligt bæltelag man kan se og ikke karkassen.
'.visbilled('1', 'billed2173.jpg', 'dæk hvor man kan se to bias stål ply', false, true).'
Her kan man se diagonale tråde.
'.visbilled('1', 'billed2174.jpg', 'dæk hvor man kan se tekstil ply', false, true).'
Her kan man se trådende på et 3.50-10" dæk.
Det er formodentligt et scooter dæk.
'.visbilled('1', 'billed2429.jpg', 'dæk hvor man kan se tekstil ply', false, true).'
'

,'
belastningsindex
' => '
Lad os sige vi har et dæk hvor der står 100/60-12 56J.
Så er 56 et belastningsindex.

56 betyder at dækket maksimalt bør belastes med 224 kg.

'.
box(array('150', '150')
   ,array(
       array('tegn'      ,'maksimal belastning') 
      ,array('0'         ,'45 kg')
      ,array('1'         ,'46,2 kg')
      ,array('2'         ,'47,5 kg')
      ,array('3'         ,'48,7 kg')
      ,array('4'         ,'50 kg')
      ,array('5'         ,'51,5 kg')
      ,array('6'         ,'53 kg')
      ,array('7'         ,'54,5 kg')
      ,array('8'         ,'56 kg')
      ,array('9'         ,'58 kg')
      ,array('10'        ,'60 kg')
      ,array('11'        ,'61,5 kg')
      ,array('12'        ,'63 kg')
      ,array('13'        ,'65 kg')
      ,array('14'        ,'67 kg')
      ,array('15'        ,'69 kg')
      ,array('16'        ,'71 kg')
      ,array('17'        ,'73 kg')
      ,array('18'        ,'75 kg')
      ,array('19'        ,'77,5 kg')
      ,array('20'        ,'80 kg')
      ,array('21'        ,'82,5 kg')
      ,array('22'        ,'85 kg')
      ,array('23'        ,'87,5 kg')
      ,array('24'        ,'90 kg')
      ,array('25'        ,'92,5 kg')
      ,array('26'        ,'95 kg')
      ,array('27'        ,'97,5 kg')
      ,array('28'        ,'100 kg')
      ,array('29'        ,'103 kg')
      ,array('30'        ,'106 kg')
      ,array('31'        ,'109 kg')
      ,array('32'        ,'112 kg')
      ,array('33'        ,'115 kg')
      ,array('34'        ,'118 kg')
      ,array('35'        ,'121 kg')
      ,array('36'        ,'125 kg')
      ,array('37'        ,'128 kg')
      ,array('38'        ,'132 kg')
      ,array('39'        ,'136 kg')
      ,array('40'        ,'140 kg')
      ,array('41'        ,'145 kg')
      ,array('42'        ,'150 kg')
      ,array('43'        ,'155 kg')
      ,array('44'        ,'160 kg')
      ,array('45'        ,'165 kg')
      ,array('46'        ,'170 kg')
      ,array('47'        ,'175 kg')
      ,array('48'        ,'180 kg')
      ,array('49'        ,'185 kg')
      ,array('50'        ,'190 kg')
      ,array('51'        ,'195 kg')
      ,array('52'        ,'200 kg')
      ,array('53'        ,'206 kg')
      ,array('54'        ,'212 kg')
      ,array('55'        ,'218 kg')
      ,array('56'        ,'224 kg')
      ,array('57'        ,'230 kg')
      ,array('58'        ,'236 kg')
      ,array('59'        ,'243 kg')
      ,array('60'        ,'250 kg')
      ,array('61'        ,'257 kg')
      ,array('62'        ,'265 kg')
      ,array('63'        ,'272 kg')
      ,array('64'        ,'280 kg')
      ,array('65'        ,'290 kg')
      ,array('66'        ,'300 kg')
      ,array('67'        ,'307 kg')
      ,array('68'        ,'315 kg')
      ,array('69'        ,'325 kg')
      ,array('70'        ,'335 kg')
      ,array('71'        ,'345 kg')
      ,array('72'        ,'355 kg')
      ,array('73'        ,'365 kg')
      ,array('74'        ,'375 kg')
      ,array('75'        ,'387 kg')
      ,array('76'        ,'400 kg')
      ,array('77'        ,'412 kg')
      ,array('78'        ,'425 kg')
      ,array('79'        ,'437 kg')
      ,array('80'        ,'450 kg')
      ,array('81'        ,'462 kg')
      ,array('82'        ,'475 kg')
      ,array('83'        ,'487 kg')
      ,array('84'        ,'500 kg')
      ,array('85'        ,'515 kg')
      ,array('86'        ,'530 kg')
      ,array('87'        ,'545 kg')
      ,array('88'        ,'560 kg')
      ,array('89'        ,'580 kg')
      ,array('90'        ,'600 kg')
      ,array('91'        ,'615 kg')
      ,array('92'        ,'630 kg')
      ,array('93'        ,'650 kg')
      ,array('94'        ,'670 kg')
      ,array('95'        ,'690 kg')
      ,array('96'        ,'710 kg')
      ,array('97'        ,'730 kg')
      ,array('98'        ,'750 kg')
      ,array('99'        ,'775 kg')
      ,array('100'       ,'800 kg')
      ,array('101'       ,'825 kg')
      ,array('102'       ,'850 kg')
      ,array('103'       ,'875 kg')
      ,array('104'       ,'900 kg')
      ,array('105'       ,'925 kg')
      ,array('106'       ,'950 kg')
      ,array('107'       ,'975 kg')
   )
)
.'
'

,'
hastighedsindex
' => '
Lad os sige vi har et dæk hvor der står 100/60-12 56J.
Så er J er et hastighedsindex.

Hvis der står J på dækket så er dækket beregnet til hastigheder på højst 100 km/t.

'.
box(array('150', '150')
   ,array(
       array('tegn på dæk'         ,'maksimal hastighed')
      ,array('A1'        ,'5 km/t') 
      ,array('A2'        ,'10 km/t')
      ,array('A3'        ,'15 km/t')
      ,array('A4'        ,'20 km/t')
      ,array('A5'        ,'25 km/t')
      ,array('A6'        ,'30 km/t')
      ,array('A7'        ,'35 km/t')
      ,array('A8'        ,'40 km/t')
      ,array('B'         ,'50 km/t')
      ,array('C'         ,'60 km/t')
      ,array('D'         ,'65 km/t')
      ,array('E'         ,'70 km/t')
      ,array('F'         ,'80 km/t')
      ,array('G'         ,'90 km/t')
      ,array('J'         ,'100 km/t')
      ,array('K'         ,'110 km/t')
      ,array('L'         ,'120 km/t')
      ,array('M'         ,'130 km/t')
      ,array('N'         ,'140 km/t')
      ,array('P'         ,'150 km/t')
      ,array('Q'         ,'160 km/t')
      ,array('R'         ,'170 km/t')
      ,array('S'         ,'180 km/t')
      ,array('T'         ,'190 km/t')
      ,array('U'         ,'200 km/t')
      ,array('H'         ,'210 km/t')
      ,array('V/VB'      ,'240 km/t')
      ,array('W'         ,'270 km/t')
      ,array('Y'         ,'300 km/t')
      ,array('V'         ,'over 210 km/t')
      ,array('VR'        ,'over 210 km/t')
      ,array('(V/VB)'    ,'over 240 km/t')
      ,array('Z'         ,'over 240 km/t')
      ,array('ZR'        ,'over 240 km/t')
      ,array('(W)'       ,'over 270 km/t')
   )
)
.'
'

,'
slangeløst
' => '
Du kan se om dækket er slangeløst ved at kigge på ventilen.
Hvis ventilen er tyk og buler ud der hvor den sidder fast i fælgen så er dækket slangeløst. Altså der er ingen slange i dækket.
'.visbilled('1', 'billed0224.jpg', 'Ventiler til slangeløse dæk', false, true).'
Her ses en ventil på et slangeløst dæk.
'.visbilled('1', 'billed0240.jpg', 'ventil på slangeløst dæk', false, true).'
Hvis ventilen har samme tykkelse hele vejen ind i hullet på fælgen så er der slange i dækket.
'

,'
nye dæk
' => '
Overfladen på nye dæk griber ikke så godt fast i vejen.

For ikke at vælte eller køre galt så skal ny dæk slides lidt før de bruges normalt.
Undgå at accelerer hurtigt, bremse hårdt, dreje skarpt og køre med høj hastighed med nye dæk de første 100 km.

'.visflash('0', "http://www.youtube.com/v/xPfw9cUfp3g", 'hvad der kan ske med helt nye dæk', true).'
'

,'
ventil
' => '
På scootere sidder ventiler af schrader typen også kaldet auto ventiler.

Ventilen kan enten være en del af slangen eller den kan være monteret på fælgen hvis det er et slangeløst dæk.

Her ses en ventil til slangeløse dæk med bøjet rør.
'.visbilled('1', 'billed0685.jpg', 'løs schrader ventil', false, true).'
Her ses en ventil til slangeløse dæk med lige rør.
'.visbilled('1', 'billed2194.jpg', 'slangeløs schrader ventil', false, true).'
Her ses den samme ventilen fra den anden side af fælgen.
'.visbilled('1', 'billed2195.jpg', 'schrader ventil set indenfra på fælg', false, true).'
Ventilen kan skrues ud med et værktøj som er indbygget på toppen af nogle ventilhætter.
'.visbilled('1', 'billed0234.jpg', 'schrader ventil', false, true).'
Eller med sådan et værktøj her.
'.visbilled('1', 'billed3760.jpg', 'schrader ventilværktøj', false, true).'
Her er ventilen skruet ud.
'.visbilled('1', 'billed0604.jpg', 'schrader ventil skruet ud', false, true).'
Her ses gevindet inden i røret hvor ventilen skrues ind.
'.visbilled('1', 'billed0605.jpg', 'schrader ventil indvendigt gevind', false, true).'
Her ses hvordan ventilen åbner når "pinden" trykkes i.
'.visbilled('1', 'billed0606.jpg', 'schrader ventil åben', false, true).'
Ved at trykke på "pinden" midt i ventilen kan man lukke luft ud.
'.visbilled('1', 'animation0001.gif', 'schrader ventil animation', false, true).'
Det bruges også når man måler dæktryk.
'

,'
dæk mønstre
' => '
Så vidt jeg ved er dæk mønstrets primære opgave at lede vand væk.

Et helt glat dæk uden dæk mønstre har bedre kontakt med vejen når vejen er tør men køre man med helt glatte dæk i regnvejr ville man lettere miste kontakten med vejen og vælte.

Her ses et dæk på en Kymco Super 8 4T.
'.visbilled('1', 'billed0057.jpg', 'dæk mønstre kymco super 8 4T', false, true).'
Her ses et brugt sheng shin 120/80-14 og et nyt horng fortune 130/70-14 med det mønster de kalder 952.
'.visbilled('1', 'billed2222.jpg', 'dæk mønstre kymco super 8 4T cheng shin tire 120/80-14 horng fortune motorcycle tire 130/70-14 8pr 952', false, true).'
'

,'
dæk savet over
' => '
Her ses et dæk der er blevet savet over.
'.visbilled('1', 'billed2220.jpg', 'gennemskåret dæk', false, true).'
Nederst i dækkanten hvor dækket sidder modfælgen er der en del ståltråde.
'.visbilled('1', 'billed2221.jpg', 'gennemskåret dæk ståltråde i dækkant', false, true).'
'

,'
fælg
' => '
Her ses en fælg.
'.visbilled('1', 'billed2198.jpg', 'slangeløs fælg', false, true).'
Da dette er en fælg til slangeløse dæk er der en forhøjning ved fælgkanten for at holde dækkket på plads.
'.visbilled('1', 'billed2196.jpg', 'ventil i slangeløs fælg', false, true).'
Forhøjningen gør at det er meget svært at sætte dækket op på kanten uden bruge af trykluft fra en kompressor.
Selv når dækket er flat kommer det ikke bare sådan lige ned fra forhøjningen.
'.visbilled('1', 'billed2197.jpg', 'ventil i slangeløs fælg', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
