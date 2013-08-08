<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "de 2 takter - 2 takt motor";
$overskrift = "de 2 takter - 2 takt motor";
$metadescription = "forklaring af de 2 takter på en 2 takt motor";

$databasecenter = array(

'
introduktion
' => '
Her ses en 2 takt 50 cm³ motor.
'.visbilled('1', 'billed2377.jpg', '2 takt motor', false, true).'
'

,'
de 2 takter
' => '
En 2 takt motor med karburator gentager følgende 2 takter igen og igen når den køre.

'.afsnit('De 2 takter','
1. Benzin/luft/olie suges ind i motorblokken under stemplet når stemplet bevæger sig op.
2. Benzin/luft/olie presses op over stemplet gennem skyllekanalerne når stemplet bevæger sig ned.
').'
'.visbilled('1', 'animation0003.gif', '2 takt motor princippet', false, true).'
Når stemplet er nede er skyllekanalerne og udstødningsporten åbnet samtidig og noget at benzin/luft/olie blandingen passere uforbrændt videre ud til udstødningen.
Derfor kan udstødningen have en speciel form som gør at noget af trykbølgen går baglæns og presser den uforbrændte blanding tilbage i cylinderen.

På 2 takt motorer med '.ahref('brandstofindsprojtning.php', 'brændstofindsprøjtning').' der kan benzinen sprøjtes ind fra topstykket efter stemplet har passeret udstødningsporten så man undgår at sende uforbrændt benzin ud til udstødningen.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
