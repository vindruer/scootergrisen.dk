<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "lejer";
$overskrift = "lejer";
$metadescription = "information om lejer der sidder i scootere og dekodning af lejekoder";

$databasecenter = array(

'
introduktion
' => '
Et leje består ofte af 2 ringe og runde kugler imellem.
Lejer bruges de steder hvor der er noget som skal dreje let.
Der er lejer ved blandt andet forhjul, styr, startermotor, knastaksel, plejlstang, krumtap, bagerste remskive, reduktionsgear og baghjul.

De fleste lejer er kuglelejer (med runde kugler).
Men der findes også nålelejer med aflange "nåle" som ved plejstang og bagerste remskive.
'

,'
dekodning af lejekoder
' => '
'.
box(array('90', '150', '150', '50')
   ,array(
       array('tal på leje', 'indvendig<br>diameter<br>(mm)', 'udvendig<br>diameter<br>(mm)', 'bredde<br>(mm)')
      ,array('6000',  '10', '26', '8')
      ,array('6001',  '12', '28', '8')
      ,array('6002',  '15', '32', '9')
      ,array('6003',  '17', '35', '10')
      ,array('6004',  '20', '42', '12')
      ,array('6005',  '25', '47', '12')
      ,array('6006',  '30', '55', '13')
      ,array('6200',  '10', '30', '9')
      ,array('6201',  '12', '32', '10')
      ,array('6202',  '15', '35', '11')
      ,array('6203',  '17', '40', '12')
      ,array('6204',  '20', '47', '14')
      ,array('6205',  '25', '52', '15')
      ,array('6206',  '30', '62', '16')
      ,array('62/22', '22', '50', '14')
      ,array('62/28', '28', '58', '16')
      ,array('6300',  '10', '35', '11')
      ,array('6301',  '12', '37', '12')
      ,array('6302',  '15', '42', '13')
      ,array('6303',  '17', '47', '14')
      ,array('6304',  '20', '52', '15')
      ,array('6305',  '25', '62', '17')
   )
)
.'
'.visbilled('1', 'billed2228.jpg', 'leje tværsnit udvendig diameter indvendig diameter bredde', false, true).'
'.afsnit('ekstra tegn','
'.
box(array('100', '300')
   ,array(
       array('tegn', 'forklaring')
      ,array('Z', '1 gummi støvplade')
      ,array('ZZ', '2 gummi støvplader')
      ,array('U', '1 metal støvplade')
      ,array('UU', '2 metal støvplader')
      ,array('RS1', '1 gummitætning')
      ,array('2RS1', '2 gummitætninger')
      ,array('C3', 'større radialt slør<br>Bruges til høje omdrejninger')
   )
)
.'
').'
'.visbilled('1', 'billed2650.jpg', 'leje slør axial radial', false, true).'
'

,'
forhjulsleje
' => '
Her ses et forhjuls leje fra en Kymco Super 8.
På lejet står CJE CHINA 6301Z.
'.visbilled('1', 'billed1835.jpg', 'forhjuls leje fra kymco super 8', false, true).'
6301 betyder at lejet har en indvendig diameter på 12 mm og en udvendig diameter på 37 mm og en bredde på 12 mm.
Z betyder at lejet har 1 støvplade (som er den plade teksten står på).
'

,'
knastakselleje
' => '
Her ses et knastakselleje fra en Kymco Super 8.
På lejet står 16002C3 CHINA KJ NTN.
'.visbilled('1', 'billed2624.jpg', 'knastakselleje fra kymco super 8 4T 16002C3 china kj ntn', false, true).'
Jeg ved ikke hvad det første 1 tal står for.
6002 betyder at lejet har en indvendig diameter på 15 mm og en udvendig diameter på 32 mm og en bredde på 9 mm.
C3 betyder at lejet har et større radialt slør.

NTN er vist en producent som fremstiller lejer.
'

,'
remskiveleje
' => '
Her ses det inderste remskiveleje fra en Kymco Super 8.
'.visbilled('1', 'billed2649.jpg', 'remskive nåleleje', false, true).'
Og her fra Baotian hvor der står HK172518RS som står for 17 x 25 x 28 mm.
'.visbilled('1', 'billed3264.jpg', 'remskive nåleleje WJL HK172518RS', false, true).'
'.visbilled('1', 'billed3265.jpg', 'remskive nåleleje WJL HK172518RS', false, true).'
'.visbilled('1', 'billed3287.jpg', 'remskiveleje', false, true).'
I bunden ses det yderste remskiveleje.
Man kan se der står RS på som skulle betryde at det har gummitætningsring.
'.visbilled('1', 'billed2651.jpg', 'remskive yderste leje', false, true).'
Her ses det kugleleje som sidder lige under koblingsklokken.
'.visbilled('1', 'billed3257.jpg', 'remskive yderste leje 6901RS', false, true).'
'

,'
videoer
' => '
'.visflash('0', "http://www.youtube.com/watch?v=CybdAmXX_YY", 'HaSse viser hvordan man skifter forhjulslejer', true).'
'.visflash('0', "http://www.youtube.com/watch?v=iKp7elwAv58", 'HaSse viser hvordan man montere reduktionsgearlejer', true).'
'.visflash('0', "http://www.youtube.com/watch?v=mplwn3WJG28", 'her ses hvordan kuglelejer laves', true).'
Se også '.ahref('http://repvideo.lars-mc.dk/repvideo/view.repair_video.php?id=25', 'Udskiftning af forhjulslejer (repvideo.lars-mc.dk)').'.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
