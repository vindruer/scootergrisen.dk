<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "luftfiltertyper - Luftfilter og udstødning";
$overskrift = "luftfiltertyper - Luftfilter og udstødning";
$metadescription = "forklaring af forskellige luftfiltertyper der findes på scootere. vådt papir, tørt papir, svamp";

$databasecenter = array(

'
luftfiltertyper
' => '
'.afsnit('vådt papir typen','
Lavet af vådt papir med lim som er bukket for at opnå en større overflade.
'.visbilled('1', 'billed1526.jpg', 'luftfilterkasse luftfilter af papirtypen kymco super 8 4T', false, true).'
'.visbilled('1', 'billed3352.jpg', 'nyt luftfilter i pose', false, true).'
Beregnet til at blive udskiftet med et nyt filter frem for at blive ved med at rense og genbruge det.
Kan ikke rengøres så godt med trykluft på grund af limen.
').'

'.afsnit('tørt papir typen','
Lavet af tørt papir som er bukket for at opnå en større overflade.
'.visbilled('1', 'billed0865.jpg', 'luftfilter rundt', false, true).'
Kan renses med trykluft.
').'

'.afsnit('svamp typen','
Svampen er lavet af polyuretan.
'.visbilled('1', 'billed0334.jpg', 'Luftfilter af svamptypen', false, true).'
For at svampen bedre kan filtrer luften gøres den våd med olie.
Svampen kan rengøres, tørres, olieres og bruges igen.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
