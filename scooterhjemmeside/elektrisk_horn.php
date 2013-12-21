<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "horn - Elektrisk";
$overskrift = "horn - Elektrisk";
$metadescription = "info om den elektriske horn i en scooter/knallert som siger dyt og den skrue der kan være bag på";

$databasecenter = array(

'
horn
' => '
Her ses hornet fra en Kymco Super 8 4T.
'.visbilled('1', 'billed3894.jpg', 'horn kymco super 8 4T', false, true).'
Bag på hornet sidder en lille skrue der bruges til at "tune" hornet.
Hvis hornet ikke siger dyt kan det være fordi skruen ikke er indstillet rigtigt.
'.visbilled('1', 'billed0724.jpg', 'horn kymco super 8 4T', false, true).'

Horn knappen sidder gerne på venstre side af styret og aktiveres med venstre tommelfinger.
'.visbilled('1', 'billed3351.jpg', 'kontakter på kymco super 8 4T', false, true).'

Når man trykker hornknappen ind forbindelses hornet med batteriet og hornet siger "dyyyt".

På nogle elektriske scootere (hvor der ikke er startermotor) kan starter knappen også bruges som horn og på nogle modeller kan der være forskel på lydstyrken på de to knapper.
Så kan man bruge den ene knap med lav lydstyrke til cyklister og fodhænger så de ikke bliver så bange hvis man er lige bag dem.
Se '.ahref('elektriskscooter_knapper.php', 'Elektrisk scooter - Knapper').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
