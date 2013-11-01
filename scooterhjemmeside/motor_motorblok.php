<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "motorblok - 4 takt motor";
$overskrift = "motorblok - 4 takt motor";
$metadescription = "noget om motorblok delene på en 4 takt 50 cm³ scooter / knallert";

$databasecenter = array(

'
motorblok dele
' => '
Her ses motorblok dele fra en adskildt Kymco Agility motor.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3804.jpg', array('Kymco Agility motor', 'venstre motorblok del udefra'))
   ,galleri('highslide', '', 'billed3805.jpg', array('Kymco Agility motor', 'venstre motorblok del udefra'))
   ,galleri('highslide', '', 'billed3817.jpg', array('Kymco Agility motor', 'topstykke cylinder svinghjul variator motorblok'))
   ,galleri('highslide', '', 'billed3819.jpg', array('Kymco Agility motor', 'adskildt motor'))
   ,galleri('highslide', '', 'billed3820.jpg', array('Kymco Agility motor', 'adskildt motor'))
   ,galleri('highslide', '', 'billed3823.jpg', array('Kymco Agility motor', 'venstre motorblok del indefra'))
   ,galleri('highslide', '', 'billed3824.jpg', array('Kymco Agility motor', 'højre motorblok indre del indefra'))
   ,galleri('highslide', '', 'billed3825.jpg', array('Kymco Agility motor', 'højre motorblok indre del udefra'))
   ,galleri('highslide', '', 'billed3826.jpg', array('Kymco Agility motor', 'højre motorblok ydre del indefra'))
   ,galleri('highslide', '', 'billed3827.jpg', array('Kymco Agility motor', 'højre motorblok ydre del udefra med stator'))
   ,galleri('highslide', '', 'billed3828.jpg', array('Kymco Agility motor', 'reduktionsgear motorblok del indefra'))
))
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
