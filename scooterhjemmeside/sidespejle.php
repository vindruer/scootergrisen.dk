<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "sidespejle";
$overskrift = "sidespejle";
$metadescription = "lidt om sidespejle på scootere/knallerter (billeder af en skrue som sidder inden i sidespejlet hvor man kan spænde den hårdere hvis sidespejlet er for løst så spejlet rykker sig)";

$databasecenter = array(

'
sidespejle
' => '
Mit højre sidespejl blev ved med at dreje nedad når jeg kørte på bump i vejen og lignende.

Det ser ud til at sidespejlet er samlet på den måde at de har strammer skruen inden i sidespejlet også sat spejlet på til sidst.
Men jeg syntes ikke det ser ud til at man kan tage spejlet ud igen og hvis jeg prøvede ville det måske gå istykker så jeg boerede i stedet et hul helt ude på enden af spejlet modsat stangen som holder sidespejlet på styret.

Inde i sidespejlet er der en 8 mm møtrik med nylon lås.
Under skruen er en fjeder.
'.visbilled('1', 'billed3025.jpg', 'inderside af højre sidespejl', false, true).'
'.visbilled('1', 'billed3026.jpg', 'inderside af højre sidespejl', false, true).'
'.visbilled('1', 'billed3027.jpg', 'skrue på inderside af højre sidespejl', false, true).'
Ved at borer hullet stort kunne jeg få noget værktøj ind og stramme møtrikken så det sidder mere stram og ikke så let flytter sig ved bump i vejen.
Hvis du borer hul i sidespejlet så pas på idet boret går helt igennem fordi hvis det rammer spejlet kan boet tage noget af spejlets reflekterende bagside af.

Det værktøj jeg har var lige kort nok til at nå igennem så jeg måtte lave lidt om på værktøjet.
Men måske det er lettere at bore 2 huller ved siden af hinanden på bagsiden af sidespejlet ved møtrikken så man lige kan få en lille ringnøgle ind.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
