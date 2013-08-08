<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "pakdåse - 4 takt motor";
$overskrift = "pakdåse - 4 takt motor";
$metadescription = "forklaring af pakdåse/simmerring som sidder omkring en aksel om holder tæt som olien ikke kan komme ud ved krumtapakslen hvor motorolien er og ved reduktionsgearet hvor gearolien er";

$databasecenter = array(

'
pakdåse
' => '
Pakdåse kaldes også for simmerring.
Ordet "simmerring" skulle komme fra et tysk firma kaldet "Simrit" som blandt andet laver simmerringe/pakdåser.

Pakdåser sidder og holder tæt omkring en aksel for at holde på olien.

Her ses en pakdåse.
'.visbilled('1', 'billed0532.jpg', 'pakdåse', false, true).'
Læg mærke til fjederen.
Denne viste model måler 19,8 x 30 x 5 mm.

Der sidder 2 pakdåser ved krumtapakslen som holder på motorolien.
Og 2 pakdåser ved reduktionsgearet som holder på gearolien.

Pakdåse monteres udefra i venstre side af motoren.
'.visbilled('1', 'billed0533.jpg', 'pakdåse montering venstre side af motor udefra', false, true).'
Pakdåsen skal sidde et bestemt antal mm fra kanten.

Pakdåse i venstre side af motoren:
'.visbilled('1', 'billed0535.jpg', 'pakdåse montering venstre side af motor udefra', false, true).'
Pakdåse monteres indefra i højre side af motoren:
'.visbilled('1', 'billed0534.jpg', 'pakdåse montering højre side af motor indefra', false, true).'
Pakdåse i højre side af motoren (set indefra):
'.visbilled('1', 'billed0536.jpg', 'pakdåse montering højre side af motor indefra', false, true).'
'.
galleriholder(array(
    galleri('highslide', '', 'billed3809.jpg', array('Kymco Agility motor', 'højre motorblok del'))
))
.'
'.visbilled('1', 'billed3744.jpg', 'pakdåse højre side af motor indefra', false, true).'
Her ses en brun ring på krumtapakslen hvor simmerringen holder tæt om akslen.
'.visbilled('1', 'billed3745.jpg', 'pakdåse højre side af motor indefra', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
