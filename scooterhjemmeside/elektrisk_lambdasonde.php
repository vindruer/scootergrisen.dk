<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "lambdasonde - Elektrisk";
$overskrift = "lambdasonde - Elektrisk";
$metadescription = "en lambdasonde (også kaldet lambdasensor ogoxygensensor) måler ilt indholdet i udstødningsgasserne så forbrændingen/brændstofforbruget kan gøre optimalt";

$databasecenter = array(

'
lambdasonde
' => '
En lambdasonde kaldes også "lambdasensor" eller "oxygensensor" på engelsk.

Her ses en lambdasonde.
'.visbilled('1', 'billed1635.jpg', 'lambdasonde', false, true).'

Lambdasonden måler ilt indholdet i udstødningsgasserne.
Lambdasonden er elektrisk forbundet med ECUen.

'.visflash('0', 'http://www.youtube.com/watch?v=oSPZ5rl0QH8', 'her ses en video som forklare lidt om lambdasonder', true).'

Indtil videre er den eneste 50 cm³ scooter jeg har set med lambdasonde Honda Zoomer.
På Honda Zommer sidder en lambdasonde på udstødningsrøret før katalysatoren.
'.visbilled('1', 'billed1009.jpg', 'honda zoomer lambdasonde', false, true).'
Lambdasondens måling bruges til at justere hvor meget benzin der skal sprøjtes ind i forbrændingskammeret for at opnå en fuldstændig forbrænding.

En fuldstændig forbrænding af luft og benzin opnås når der er 14,7 dele luft til 1 del benzin (vægt mæssigt).
En fuldstædndig forbrænding kaldes lambda = 1.

Hvis lambda værdien er lavere end 1 så er der for meget benzin i udstødningsgasserne (fed blanding).
Hvis lambda værdien er højere end 1 så er der for meget luft i udstødningsgasserne (mager blanding).

ECUen kan ud fra signalet fra lambdasonden justere benzin/luft forholdet så blandingen bliver lambda tæt på 1.

Formålet med lambdasonden er at få en optimal forbrænding og sikre at katalysatoren har optimale betingelser til at omdanne skadelige udstødningsgasser til mindre skadelige stoffer så forureningen bliver mindre.
Hvis benzin/luft blandingsforholdet falder for meget uden for lamba = 1 så vil det betyde at katalysatoren ikke vil være i stand til at omdanne de skadelige stoffer så godt.

Ved lambda = 1 har lambdasonden vistnok en spænding på 1,0-1,2 volt.
Lambdasondens spænding (volt) til ECUen stiger hvis der er for meget benzin i udstødningsgasserne (fed blanding) og falder hvis der er for meget luft i udstødningsgasserne (mager blanding).
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
