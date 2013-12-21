<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "affjedring - Service";
$overskrift = "affjedring - Service";
$metadescription = "service af affjedring på scootere og knallerter, hvor meget olie der skal i rørene";

$databasecenter = array(

'
olie i forgaffelrør
' => '
'.visbilled('1', 'billed2965.jpg', 'hælder olie i forgaffelrør', false, true).'
Der skal være en bestemt mængde olie i forgaffelrørene.
Og der skal være lige meget i hvert rør.

'.afsnit('Kymco Super 8 4T','
Ifølge Kymco Super 8 4T servicemanualen kan man bruge motorolie i støddæmper rørene.
I manualen kaldes olien for SS#8.
Og der skal fyldes 0,097 liter ± 0,001 liter i hvert rør (97 cc ± 1 cc).
').'

'.afsnit('Piaggio Fly 150 cm³','
I Piaggio Fly 150 cm³ servicemanualen står der at man skal fylde 0,030 liter ± 0,001 liter i hvert rør (30 cc ± 1 of "FORK PG" SAE 20W fork oil).
').'

'.afsnit('Yamaha Giggle','
I servicemanualen står at man skal fylde 0,042 liter "fork oil 10W" i hvert rør.
').'

'.afsnit('PGO G-Max 50 cm³','
I servicemanualen står at man skal fylde 0,084 liter SAE 10W20 i hvert rør (84 cc).
').'

'.afsnit('CPI Oliver City','
En bruger skrev følgende til mig...
'.citat('
I en CPI Oliver City skal der ifølge
T. Hansens mekaniker 120 ml. olie i hvert forgaffelrør.
').'
').'

'

,'
forgaffelolie
' => '
'.ahref('olie.php#forgaffelolie', 'Forgaffelolie').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
