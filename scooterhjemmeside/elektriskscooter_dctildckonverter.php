<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "DC til DC konverter - Elektrisk scooter";
$overskrift = "DC til DC konverter - Elektrisk scooter";
$metadescription = "forklaring af den koverter der sidder i en elektrisk scooter og som for eksempel laver batteriernes 48 volt om til 12 volt som kan bruges til lyset, blinklys relæ og hornet";

$databasecenter = array(

'
DC til DC konverter
' => '
En DC til DC konverter laver batteriernes volt (for eksempel 48 volt) om til 12 volt som bruges til diverse pærere (for, bag, stop, blink, instrumentpanel, nummerplade, position), blinklys relæ og horn.

Her ses en DC til DC konverter fra EVT 4000e.
'.visbilled('1', 'billed0100.jpg', 'EVT 4000e dc til dc konverter', false, true).'
Her ses en DC til DC konverter fra Giantco E-Buddy.
'.visbilled('1', 'billed1417.jpg', 'Giantco E-Buddy dc til dc konverter', false, true).'
'.afsnit('på den står','
DC-DC converter
Over current protection
Short circuit protection
Low voltage protection
Red/input : DC31V-59V
Yellow/output : DC12V
Black : Cathode wire
').'

Her ses DC til DC konverteren fra eldiagrammet til Lynx 690 (ZQTD-690).
'.visbilled('1', 'billed3121.jpg', 'ZQTD-690 eldiagram DC-DC konverter', false, true).'

'.afsnit('ledninger','
Rød : +48 volt (batteri +) (når tændingslås er drejet til ON).
Sort : Stelforbindelse (battieri -).
Gul : +12 volt til sikring og derefter til blandt andet lys, horn, blinklysrelæ.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
