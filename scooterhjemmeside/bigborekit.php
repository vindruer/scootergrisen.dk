<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "big bore kit (større cylinder) til scootere og knallerter";
$overskrift = "big bore kit (større cylinder) til scootere og knallerter";
$metadescription = "cylinderkit med flere cm³ på grund af større diameter i cylinderen end standard cylinderne på 50 cm³";

$databasecenter = array(

'
big bore kit
' => '
Et "big bore kit" forøger motorens volume fra de normale 50 cm³ til for eksempel 70, 77, 87, 88 eller 90 cm³.

Et "big bore kit" kan bestå af cylinder, stempel, stempelringe, stempelpind, låseringe, pakninger og eventuelt topstykke.
'.visbilled('1', 'billed1415.jpg', 'big bore kit', false, true).'
Man kan godt få kits uden topstykke da det åbenbart ikke altid er nødvendigt er skifte topstykke.
'.visbilled('1', 'billed1515.jpg', 'big bore kit', false, true).'

Her er data fra Giantco om big bore kit.
'. box(array('200', '180', '180', '180')
   ,array(
       array('del',                    '50 cm³',     '70 cm³',         '90 cm³')
      ,array('boring',                 '39 mm',  '46,5 mm', '50 mm')
      ,array('slaglængde',             '41,5 mm',  '41,5 mm', '41,5 mm')
      ,array('cm³',                    '49,6 cm³',  '70,4 cm³', '81,4 cm³')
      ,array('maksimal motorydelse',   '2,2 KW<br>ved 8000 o/min',  '2,8 KW<br>ved 8000 o/min', '3,2 KW<br>ved 8000 o/min')
      ,array('vuderet motorydelse',    '2,0 KW<br>ved 7500 o/min',  '2,6 KW<br>ved 7500 o/min', '3,0 KW<br>ved 7500 o/min')
      ,array('malsimalt moment',       '2,5 Nm<br>ved 6500 o/min',  '3,8 Nm<br>ved 6500 o/min', '4,1 Nm<br>ved 6500 o/min')
      ,array('stigningsvinkel',        '10 grader',  '13 grader', '15 grader')
      ,array('fra stop til 100 meter på',         '11,22 sekunder',  '9,95 sekunder', '9,01 sekunder')
   )
)
.'
Læg mærke til at det kit som kaldes 90 cm³ i virkeligheden kun er på 81,4 cm³.

Når man skifter fra 50 cm³ til større cm³ så skal ventilspillerummet vist nok gøres større.
Det kan for eksempel være at på en 50 cm³ cylinder skal ventilerne indstillet til 0,05 mm for indsugning og 0,08 mm for udstødning.
Ved 70 cm³ skal ventilerne muligvis indstilles til 0,1 mm på indsugning og 0,12 mm på udstødning.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
