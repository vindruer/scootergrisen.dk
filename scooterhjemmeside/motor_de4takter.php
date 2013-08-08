<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$setup['nogetikon']               = 'animation0002.gif';

$title = "de 4 takter - 4 takt motor";
$overskrift = "de 4 takter - 4 takt motor";
$metadescription = "forklaring af de 4 takter på en 4 takt motor. Indsugning, kompression, forbrænding, udstødning på en 4 takt motor og animation af motorgangen";

$databasecenter = array(

'
introduktion
' => '
Her ses en 4 takt 50 cm³ motor.
'.visbilled('1', 'billed0523.jpg', 'GY6 4 takt motor', false, true).'
'

,'
de 4 takter
' => '
En 4 takt motor med karburator gentager følgende 4 takter igen og igen når den køre.

'.afsnit('de 4 takter','
1. Indsugning - Benzin og luft suges ind.
2. Kompression - Benzin og luft presses sammen.
3. Forbrænding - Benzin og luft antændes af tændrøret.
4. Udstødning - Gasserne sendes videre til udstødningen.
').'
'.visbilled('1', 'animation0002.gif', '4 takt motor princip', false, true).'
Her kan man se ind i en 4 takt motor.
'.visbilled('1', 'billed2113.jpg', '4 takt motor', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
