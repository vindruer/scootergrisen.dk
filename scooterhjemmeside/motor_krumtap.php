<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "krumtap - 4 takt motor";
$overskrift = "krumtap - 4 takt motor";
$metadescription = "forklaring af krumtappen som sidder i en 4 takt motor og omdanner stemplets frem og tilbage bevægelser til roterende bevægelser";

$databasecenter = array(

'
introduktion
' => '
Her ses 2 krumtap til en 4 takt motor.
'.visbilled('1', 'billed3743.jpg', 'krumtap til 4 takt motor', false, true).'
På højre side hvor akslen er konisk sidder svinghjulet og tandhjulet er til oliepumpen.

På venstre side sidder remskiven og kæden til ventilakslen.

Der er 2 kuglelejer som er i forskellig størrelse på de viste modeller.

I midten er plejlstangen som forbinder krumtapakslen med stemplet.
På venstre side side ser det ud til at motorolien kan komme ind krumtappen for at smørre plejlstangen.

'.
galleriholder(array(
    galleri('highslide', '', 'billed3783.jpg', array('krumtap venstre side'))
   ,galleri('highslide', '', 'billed3780.jpg', array('venstre leje 6204/PS'))
   ,galleri('highslide', '', 'billed3779.jpg', array('højre leje 63/02/PS'))
   ,galleri('highslide', '', 'billed3781.jpg', array('plejlstang lille ende til stempelpind'))
   ,galleri('highslide', '', 'billed3778.jpg', array('remskive ende'))
   ,galleri('highslide', '', 'billed3784.jpg', array('remskive ende tæt på'))
   ,galleri('highslide', '', 'billed3813.jpg', array('Kymco Agility motor', 'krumtap i motorblok'))
   ,galleri('highslide', '', 'billed3812.jpg', array('Kymco Agility motor', 'miderste motorblok del hvor højre krumtapleje skal sidde'))
   ,galleri('highslide', '', 'billed3816.jpg', array('Kymco Agility motor', 'motordele opsætning som de cirka sidder i motoren'))
   ,galleri('highslide', '', 'billed3822.jpg', array('Kymco Agility motor', 'motorblok hvor venstre krumtap leje skal sidde'))

))
.'

'.visflash('0', 'http://www.youtube.com/watch?v=bf07DxbENR0', '', true).'
'.visflash('0', 'http://www.youtube.com/watch?v=iNj3VbBCRRM', '', true).'

'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
