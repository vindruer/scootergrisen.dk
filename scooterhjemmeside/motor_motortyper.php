<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "motortyper - 4 takt motor";
$overskrift = "motortyper - 4 takt motor";
$metadescription = "forklaring af forskellige 4 takt motortyper der findes i scootere som 139QMA, 139QMB, 139FMA, 139FMB. Dekodning af motormodel tegn";

$databasecenter = array(

'
4 takt motortyper
' => '
139QMA og 139QMB er de kinesiske betegnelser for de motorer som sidder i de kinesiske 4 takt 50 cm³ scootere.

139QMA har en lang motorblok og bruges primært til 12" hjul.
139QMB har en kort motorblok og bruges primært til 10" hjul.
Dog kan både 139QMA og 139QMB fås med både 10" og 12" hjul.

Da 139QMA har længere motorblok har den en længere kilerem end 139QMB.
Måske har tandhjulet på krumtakakslen til oliepumpen 16 tænder på 139QMA og 22 tænder på 139QMB. Måske.

Der er mere info om 139QMA og 139QMB motoren i denne manual.
'.visfil('1', 'scooterhjemmeside/download/baotian_motor_servicemanual.pdf', 'Baotian motor servicemanual').'

I denne tabel kan du afkode den kinesiske måde at angive motortype.
For eksempel 139QMA, 139QMB, 139FMB-B og ZS1P39QMB.
Dele af tabellen har sikkert fejl. '.kontaktmig(true).' gerne hvis du har rettelser eller kan hjælpe med information til tabellen.
'.
box(array('80', '170', '270')
   ,array(
       array('tegn'      ,'beskrivelse', 'muligheder')
      ,array('ZS'        ,'producent', 
'[blank]
APL = Zhejiang Apollo
BD = Benda fada
BN = (AGM/Fosti/Motor Mania)
BT = Baotian
BT = Benzhou
CK = Kymco
DD = Dadyw
FY = Feiying/fym/huanan (Sachs)
HS = Hsun
HT = Huatian
HY = Jiangmen Giantco
JC = Jincheng
JL = JinLun
KW = Keeway
LB = Lingben/Longbo ? (Texas)
LC = Jincheng
LF = Lifan
LJ = Longjia
SL = Sanli
XS = (Peugeot Tweet 4T/Sym)
XT = Kinroad
YB = Yiben (danscooter)
YM = Yamasaki
YY = Yiying
ZN = Zhongshen/znen
ZS = Zhongshen
ZS = Zongshen
ZY = Jiangmen
QM = qingqi ? (peugeot v-clic LAE)
')
      ,array('1'         ,'antal cylindre', '1')
      ,array('P'         ,'layout', '[blank]<br>V<br>P<br>D (vertical geely)')
      ,array('E'         ,'takt', '[blank] = 4 takt<br>E = 2 takt')
      ,array('39'        ,'cylinder boring i mm', '38 eller 39 eller 40 (for cirka 50 cm³)')
      ,array('Q'         ,'køling', '[blank] = væskekølet<br>F = passiv vindkølet<br>Q = tvunget blæsekølet<br>Y = oliekølet')
      ,array('M'         ,'brug', 'M = Motorcykel<br>A = Automobil (bil)')
      ,array('B'         ,'slagvolume (cm³)', 'A = under 50 (lang motorblok)<br>B = 50 (kort motorblok)<br>C = 60<br>D = 70<br>E = 80<br>F = 90<br>G = 100<br>H = 110<br>I = 125<br>J = 150<br>K = 170/175<br>L = 200<br>M = 250<br>N = 300<br>O = <br>P = 350<br>Q = 400<br>R = 500<br>S = 600<br>T = 650<br>U = 700<br>V = 750<br>W = 800<br>X = 900<br>Y = 1000<br>YG = 1100<br>YL >= 1200<br>')
      ,array('-3'        ,'design version', 'kan for eksempel være at monteringspunktet til støddæmperen er placeret et andet sted')
   )
)
.'
Her ses 139QMB som er tvunget blæsekølet med variator.
'.visbilled('1', 'billed0947.jpg', '139QMB motor', false, true).'
'.visbilled('1', 'billed3271.jpg', 'motor', false, true).'
Her ses en anden 139QMB motor.
'.visbilled('1', 'billed1047.jpg', '139QMB motor', false, true).'
Læg mærke til at der forrest på motoren sidder et rør på den ene model med en reed valve.
På den anden motor er dette rør fjernet og her vil reed valven sidde direkte på udstødnings forrør.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3786.jpg', array('Kymco Agility motor', 'komplet motorenhed på centerstøtteben og baghjul'))
   ,galleri('highslide', '', 'billed3787.jpg', array('Kymco Agility motor', 'komplet motorenhed på centerstøtteben og baghjul'))
))
.'

Her ses 139FMA som er vindkølet med kædetræk.
'.visbilled('1', 'billed0946.jpg', '139FMA motor', false, true).'
Her ses 139FMB som er vindkølet med kædetræk.
'.galleriholder(array(galleri('highslidestandard', 'billed1557.jpg', 'billed1557.jpg', '139FMB motor'))). '
Her ses 1P57FMJ som er vindkølet med kædetræk.
'.visbilled('1', 'billed3172.jpg', '1P57FMJ motor', false, true).'
Her ses 139FMB-2 som er vindkølet med kædetræk.
'.visbilled('1', 'billed0949.jpg', '139FMB-2 motor', false, true).'
Her ses 152QMI som vist nok er en 125 cm³ motor.
Læg mærke til at kickstarteren vender den anden vej så man kan bruge den mens man sidder på scooteren.
'.visbilled('1', 'billed0948.jpg', '152QMI motor', false, true).'
Her ses LJ1PE40QMB-2 som er en tvunget blæsekølet 2 takt motor.
'.visbilled('1', 'billed3286.jpg', 'LJ1PE40QMB-2 motor', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
