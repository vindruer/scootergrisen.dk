<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "stelforbindelse - Elektrisk";
$overskrift = "stelforbindelse - Elektrisk";
$metadescription = "stelforbindelsen på en scooter giver forbindelse mellem batteriet, scooterens stel og motorblokken";

$databasecenter = array(

'
stelforbindelse
' => '
Her ses stelforbindelsen til motoren.
Det er den grønne ledning under en af de skruer som holder startermotoren.
'.visbilled('1', 'billed3032.jpg', 'kymco super 8 4T motor stelforbindelse', false, true).'
Der er også en stelforbindelse på stellet... som jeg mangler billede af.

Ledningen på motorblok og stel er forbundet med batteriets minus (-) terminal.
Stelforbindelsen er vigtig da motoren ikke vil kunne starte eller køre ordentligt hvis forbindelsen er afbrudt eller dårlig.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
