<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "Styretøj - Fejlfinding";
$overskrift = "Styretøj - Fejlfinding";
$metadescription = "find og ret fejl på scooterens/knallertens styretøj (tungt at dreje styr, styrer til en side eller sporer ikke lige, forhjul hopper, blød for dæmpning, støj fra for dæmper, baghjul ekser, blød baghjuls affjedring)";

$databasecenter = array(

'
styretøj
' => '
'.afsnit('tungt at dreje styr','
• styrlejer er spændt for meget
• styrkuglelejer er knækket
• for lavt dæktryk
').'

'.afsnit('styrer til en side eller sporer ikke lige','
• uens for affjedringer
• bukket forgaffel
• bukket foraksel eller ujævnt dæk
').'

'.afsnit('forhjul hopper','
• bøjet fælg
• for stor kugleleje spillerum
• bukket ege plade
• fejl på dæk
• forkert spænding af aksel møtrik
').'

'.afsnit('blød for dæmpning','
• svag dæmper fjeder
• for lidt forgaffel olie
').'

'.afsnit('støj fra for dæmper','
• Noget er bukket
• forgaffel er ikke spændt ordentligt fast
• for lidt smørring
').'

'.afsnit('baghjul ekser','
• bukket fælg
• fejl på dæk
• akslen er ikke strammet nok
').'

'.afsnit('blød baghjuls affjedring','
• svag fjeder
• fejl på dæmper
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
