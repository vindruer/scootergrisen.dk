<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "ventiler - 4 takt motor";
$overskrift = "ventiler - 4 takt motor";
$metadescription = "forklaring af ventilerne i en 4 takt motor på en scooter som står for at lukke benzin og luft ind og udstødningsgasser ud af forbrændingskammeret";

$databasecenter = array(

'
ventiler
' => '
Her ses 2 ventiler.
'.visbilled('1', 'billed3055.jpg', 'ventiler', false, true).'
Indsugningsventilens hoved er gerne lidt større end udstødningsventilen.
'.visbilled('1', 'billed3061.jpg', 'ventiler', false, true).'
Ventilerne sidder i topstykket.
'.visbilled('1', 'billed0893.jpg', 'topstykke ventiler', false, true).'
Hver ventil holdes stramt på plads af 1 eller 2 fjedre.
Fjederens opgave er at lukke ventilen.
Den ende af fjederen som har de tætteste vendingsafstande vender ind til topstykket.
En malings plet øvert på fjederen viser at den ende skal vende væk fra topstykket.
'.visbilled('1', 'billed0649.jpg', 'ventilløfter ventil tætningsring ventilfjeder', false, true).'
'.visbilled('1', 'billed3060.jpg', 'skive under ventilfjeder', false, true).'
2 låse sidder omkring et hak på enden af ventilen.
'.visbilled('1', 'billed3058.jpg', 'ventil og låse', false, true).'
'.visbilled('1', 'billed3057.jpg', 'ventilløfter og låse', false, true).'
Mellem fjeder og topstykke er en skive.
'.visbilled('1', 'billed3059.jpg', 'skive under ventilfjeder', false, true).'
På toppen af ventilstyret sidder en tætningsring.
'.visbilled('1', 'billed3046.jpg', 'topstykke ventil tætningsring', false, true).'
Her ses en tætningsring.
'.visbilled('1', 'billed2968.jpg', 'ventil tætningsring', false, true).'
Tætningsringen sørger for at olien i topstykket ikke kommer ned langs ventilen og ind i indsugningsporten og udstødningsporten og sørger også for at udstødningsgasser ikke komme op langs udstødningsventilen.
'.visbilled('1', 'billed3047.jpg', 'topstykke ventil tætningsring', false, true).'
'.
galleriholder(array(
    galleri('highslide', '', 'billed3798.jpg', array('Kymco Agility motor', 'topstykke med en afmonteret tætningsring'))
))
.'
Her ses 2 ventilstyr som sidder i topstykket.
Tætningsringen sidder fast på et hak i ventilstyret.
Ventilerne bevæger sig op og ned i ventilstyret.
'.visbilled('1', 'billed1751.jpg', 'ventilstyr', false, true).'
'.visbilled('1', 'billed2509.jpg', 'ventilstyr', false, true).'
Her ses indsugningsporten med det nederste af ventilstyret og ventilen.
'.visbilled('1', 'billed0646.jpg', 'topstykke indsugningsport', false, true).'
'.
galleriholder(array(
    galleri('highslide', '', 'billed3790.jpg', array('Kymco Agility motor', 'ventilstyr gennem indsugningshul'))
   ,galleri('highslide', '', 'billed3789.jpg', array('Kymco Agility motor', 'afmonterede ventilstyr'))
))
.'
Her ses ventilstyret fra forbrændingskammeret.
'.visbilled('1', 'billed3049.jpg', 'topstykke indsugningsport', false, true).'
Ventilen trykkes ned af en skrue på vippearmen.
'.visbilled('1', 'billed0894.jpg', 'ventil vippearm', false, true).'
Her kan man se hvordan det ser ud når ventilen åbner.
'.visbilled('1', 'billed0591.jpg', 'forbrændingskammer topstykke ventil', false, true).'
Her ses indsugningsventilen.
'.visbilled('1', 'billed3051.jpg', 'indsugningsventil', false, true).'
Her ses udstødningsventilen.
'.visbilled('1', 'billed3050.jpg', 'udstødningsventil', false, true).'
'.visbilled('1', 'billed3052.jpg', 'udstødningsventil', false, true).'
'.
galleriholder(array(
    galleri('highslide', '', 'billed3799.jpg', array('Kymco Agility motor', 'udstødningsventil'))
))
.'
Her ses udstødningsporten som er sort af kulstof fra udstødningsgasserne.
'.visbilled('1', 'billed0647.jpg', 'topstykke udstødningsport', false, true).'
Her ses et tværsnit af motoren hvor ventilerne kan ses.
'.visbilled('1', 'billed1080.jpg', '4 takt motor ventiler tegning', false, true).'
De fleste 4 takt 50 cm³ scootere har 2 ventiler men for eksempel har Yamaha Giggle 3 ventiler og Honda Zoomer har 4.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
