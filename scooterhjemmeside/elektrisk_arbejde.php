<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "elektrisk arbejde";
$overskrift = "elektrisk arbejde";
$metadescription = "side om elektrisk arbejde som lodning, krympeflex, sikringer, opladere, løse stik til CDI boks og sådan noget (mangler en masse info)";

$databasecenter = array(

'
krympeflex
' => '
Krymflex er plastikrør der krymper når de får varme. Altså de bliver mindre.
'.visbilled('1', 'billed3758.jpg', 'krympeslange krympeflex', false, true).'
Krympeflex bruges for eksempel når man har loddet 2 ledningerne sammen til at dække det uisolerede område ved at skubbe et stykke krympeflex i passende bredde og tykkelse hen over de uisolerede område også varme krympeflexen op med et varmepistol.
I løbet af få sekunder krymper plastikrøret sammen og sætte sig tæt omkring ledningerne.

For at krympeflexen skal sidde tæt skal du vælge den størrelse der lige er stor nok til at komme på. Hvis du vælger en for stor krympeflex fordi du ikke kunne et sted hvor de sælger den korrekte størrelse så er det ikke sikkert krympeflexen kan krympe nok også vel den ikke kunne sidde tæt og det giver et dårligt resultat.

'.afsnit('kan købes hos...','
'.ahref('http://www.biltema.dk/da/Sog/?query=krympeslange', 'Biltema').'
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
