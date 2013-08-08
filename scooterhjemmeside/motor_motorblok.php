<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "motorblok - 4 takt motor";
$overskrift = "motorblok - 4 takt motor";
$metadescription = "noget om motorblok delene på en 4 takt 50 ccm scooter / knallert";

$databasecenter = array(

'
motorblok dele
' => '
'.
galleriholder(array(
    galleri('highslide', '', 'billed3804.jpg', array('Kymco Agility motor', 'motorblok'))
   ,galleri('highslide', '', 'billed3805.jpg', array('Kymco Agility motor', 'motorblok'))
   ,galleri('highslide', '', 'billed3817.jpg', array('Kymco Agility motor', 'topstykke cylinder svinghjul variator motorblok'))
   ,galleri('highslide', '', 'billed3819.jpg', array('Kymco Agility motor', 'adskildt motor'))
   ,galleri('highslide', '', 'billed3820.jpg', array('Kymco Agility motor', 'adskildt motor'))
   ,galleri('highslide', '', 'billed3823.jpg', array('Kymco Agility motor', ''))
   ,galleri('highslide', '', 'billed3824.jpg', array('Kymco Agility motor', ''))
   ,galleri('highslide', '', 'billed3825.jpg', array('Kymco Agility motor', ''))
   ,galleri('highslide', '', 'billed3826.jpg', array('Kymco Agility motor', ''))
   ,galleri('highslide', '', 'billed3827.jpg', array('Kymco Agility motor', ''))
   ,galleri('highslide', '', 'billed3828.jpg', array('Kymco Agility motor', ''))
))
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
