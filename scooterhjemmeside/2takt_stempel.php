<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "stempel - 2 takt motor";
$overskrift = "stempel - 2 takt motor";
$metadescription = "forklaring af stemplet i en scooter med 2 takt motor";

$databasecenter = array(

'
stempel
' => '
Stemplet i en 2 takt motor har gerne 2 stempelringe.
'.visbilled('1', 'billed0841.jpg', 'stempel med 2 stempelringe', false, true).'
'.visbilled('1', 'billed2208.jpg', 'stempel med 2 stempelringe', false, true).'
På nogle stempler kan der være en "ring expander" bag andenringen.
"Ring expanderen" absorbere stødet når stemplet rammer cylindervægen.
Det reducere motorstøjen.
'.visbilled('1', 'billed3098.jpg', 'stempel med ring expander tegning', false, true).'
Der findes også stempler som kun har 1 ring.
'.visbilled('1', 'billed3370.jpg', 'stempel med 1 ring', false, true).'

Nogle stempler i 2 takt motorer har huller i siden som vist nok gør at der kan suges benzin/luft ind tidligere end ellers.
'.visbilled('1', 'billed1369.jpg', 'stempler med huller i siden', false, true).'

Stemplet kan have en pil skal ved montering skal pege ned mod udstødningsporten.
'.visbilled('1', 'billed3363.jpg', 'pil på stempel', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
