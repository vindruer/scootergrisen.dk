<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "styretøj";
$overskrift = "styretøj";
$metadescription = "noget om scooteren styr som bruges til at ændre retning på scooteren når den køre";

$databasecenter = array(

'
billeder
' => '
Styretøj er de dele som gør at scooteren ændre retning når man drejer på styret.

Det kan bestå af et styr som med en bolt er sat fast til styrestammen der går gennem kronrøret og har forbindelse til gaffelbroen.
Øverst og nederst i kronrøret sidder lejer som gør at man kan dreje styret og dermed forhjulet.

'.visbilled('1', 'billed3895.jpg', 'styr på scooter', false, true).'

Under bolten sidder en buet bøsning som når man spænder bolten ikke maser styret omkring styrestrammen, det er kun den ene retning at røret fra styret presses ind på styrstammerøret.
'.visbilled('1', 'billed3898.jpg', 'bolt og dims til at spænde styret fast på styrestammen', false, true).'

Her er nogen billeder fra min Kymco Super 8 4T.

Styret sidder fast med en bolt.
På bunden af styret sidder en høj kant som gør at man ikke kan dreje styret når tændingslåsen er låst.
'.visbilled('1', 'billed3889.jpg', 'styr taget af gaffelbrorør Kymco Super 8 4T', false, true).'
'.visbilled('1', 'billed3890.jpg', 'styr taget af gaffelbrorør Kymco Super 8 4T', false, true).'
Øverst ved kronrøret sidder 2 store tynde møtrikker som er spændt kontra.
'.visbilled('1', 'billed3891.jpg', 'styr taget af gaffelbrorør Kymco Super 8 4T', false, true).'
Når de 2 møtrikker er skruet af kan styrestammen fjernes fra scooteren.
Øverst sidder en kuglering med små kugler.
Ser ud til der er 20 små kugler på Kymco Super 8 4T.
'.visbilled('1', 'billed3893.jpg', 'øverste kronrørsleje på Kymco Super 8 4T', false, true).'
Her ses den nederste kuglering eller det som er tilbage af den, den er gået i smadder på min scooter.
Der ser ud til at være 15 store kugler på Kymco Super 8 4T.
Læg mærke til de 2 forhøjninger på gaffelbroen der rammer en påvejset plade nederst på kronrøret som gør at styret ikke kan drejes mere end cirka 45 grader til siderne.
'.visbilled('1', 'billed3892.jpg', 'nederste kronrørsleje på Kymco Super 8 4T', false, true).'

Et problem der kan været i forbindelse med at tage styret op og af styrestammen er at de hydrauliske slanger til bremserne måske ikke er lange.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
