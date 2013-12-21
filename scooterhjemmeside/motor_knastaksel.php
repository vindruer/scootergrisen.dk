<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "knastaksel - 4 takt motor";
$overskrift = "knastaksel - 4 takt motor";
$metadescription = "knastaksel billeder fra en 4 takt scooter motor fra Kymco Super 8 4T og Kymco Agility";

$databasecenter = array(

'
knastaksel billeder
' => '
'
.galleriholder(array(
    galleri('highslide', '', 'billed3836.jpg', array('knastakselholder', 'Kymco Super 8 4T'))
   ,galleri('highslide', '', 'billed3839.jpg', array('knastakselholder', 'Kymco Super 8 4T'))
   ,galleri('highslide', '', 'billed3837.jpg', array('knastaksel i topstykke', 'Kymco Super 8 4T'))
   ,galleri('highslide', '', 'billed3838.jpg', array('topstykke', 'Kymco Super 8 4T'))
   ,galleri('highslide', '', 'billed3842.jpg', array('knastaksel i topstykke', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3841.jpg', array('knastaksel i topstykke', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3845.jpg', array('topstykke, knastkæde, knastaksel og knastakselholder med vippearme', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3843.jpg', array('knastakselholder, vippearme, knastaksel og knastkæde', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3844.jpg', array('knastakselholder, knastaksel og topstykke', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3830.jpg', array('2 styk knastaksler', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3831.jpg', array('knastaksel', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3832.jpg', array('2 styk knastaksler', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3833.jpg', array('2 styk knastaksler', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3834.jpg', array('2 styk knastaksler', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3835.jpg', array('2 styk knastaksler', 'Kymco Agility. hullerne på tandhjulet bruges når knastkæden skal sættes på så krumtapakslen og knastakslen kommer til at køre korrekt samme så ventilerne åbne og lukker på de rigtige tidspunkter'))
   ,galleri('highslide', '', 'billed3840.jpg', array('knastakselleje 16002C3 CHINA KJ NTN', 'Kymco Super 8 4T'))
   ,galleri('highslide', '', 'billed3847.jpg', array('knastakselleje 16002C3 CHINA JW', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3849.jpg', array('knastakselleje 16002C3 CHINA JW NTN', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3846.jpg', array('knastakselleje 16002 C3 JAPAN 2005.08.27 10', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3848.jpg', array('knastakselleje 16002 C3 JAPAN 2005.09.91 08 NTN', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3850.jpg', array('vippearm', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3851.jpg', array('vippearm', 'Kymco Agility'))
   ,galleri('highslide', '', 'billed3852.jpg', array('knastaksel, vippearm, ventil', 'Kymco Agility'))
))
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
