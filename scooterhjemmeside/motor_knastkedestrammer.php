<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "knastkædestrammer - 4 takt motor";
$overskrift = "knastkædestrammer - 4 takt motor";
$metadescription = "forklaring af knastkædestrammer som findes i 4 takt motorer på scooter som sørger for at holde knastkæden tilpas stram";

$databasecenter = array(

'
knastkædestrammer
' => '
Her ses knastkædestrammeren øverst på cylinderen.
'.visbilled('1', 'billed0586.jpg', 'motor uden blæseskjold', false, true).'
'.visbilled('1', 'billed0531.jpg', 'knastkædestrammer', false, true).'
Her ses knastkæden.
'.visbilled('1', 'billed1578.jpg', 'knastkæde', false, true).'
'.visbilled('1', 'billed3033.jpg', 'knastkæde', false, true).'
'.visbilled('1', 'billed3097.jpg', 'knastkæde', false, true).'
Her ses strammerbladene.
Et strammerblad kaldes også kædestyr, knastkædeskinne eller "chain guide" på engelsk.
'.visbilled('1', 'billed1579.jpg', 'strammerblade', false, true).'

Knastkæden slides med tiden og bliver længere.

Hvis der ikke var nogen knastkædestrammer ville kæden med tiden kunne blive så slap at den kunne hoppe af ligesom kæden på en cykel eller også bliver timingen af ventilerne forkert.

Knastkædestrammeren holder automatisk knastkæden tilpas stram ved at presse ned på det øverste strammerblad som så holder knastkæden tilpas stram.

Under den øverste skrue sidder en fjeder.
'.visbilled('1', 'billed0602.jpg', 'kædestrammer', false, true).'
Fjederen presser på en knastkædefølger.
Knastkædefølgerne har modhagere.
'.visbilled('1', 'billed0603.jpg', 'kædestrammer', false, true).'
Der sidder en lås som går ind på modhagerne sådan at knastkædefølgeren ikke kan komme tilbage.
På den måde holdes der et konstant pres på det øverste strammerblad også selvom man den øverste skrue og fjederen.
'.visbilled('1', 'billed0587.jpg', 'kædestrammer', false, true).'
Igennem hullet ses det øverste strammerblad som knastkædefølgeren presser ned på.
Lige under det øverste strammerblad er knastkæden.
'.visbilled('1', 'billed0530.jpg', 'kædestrammer hul i cylinder', false, true).'
Det øverste strammerblad holdes på plads af en skrue bag de forreste remskiver i variatoren.
'.visbilled('1', 'billed0588.jpg', 'knastkæde øverste strammerblad skrue', false, true).'
Det nederste strammerblad sidder på cylinderen med 2 hakker lige under pakningen.
'.visbilled('1', 'billed0895.jpg', 'nederste strammerblad', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
