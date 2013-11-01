<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "reed valve - 2 takt motor";
$overskrift = "reed valve - 2 takt motor";
$metadescription = "forklaring af reed valve (bladventil) som sidder under indsugningsstudsen på en scooter med 2 takt motor";

$databasecenter = array(

'
reed valve
' => '
Reed valven sidder under indsugningsstudsen.
Reed valve betyder bladventil på dansk.
'.visbilled('1', 'billed2662.jpg', 'peugeot buxy indsugningsstuds karburator', false, true).'
En reed valve er et eller flere meget tynde blade som fungere som en ensretter.
Luft, benzin og olie kan suges ind i krumtaphuset men kan ikke komme den anden vej.
'.visbilled('1', 'billed1352.jpg', 'reed valve i motor', false, true).'
'.visbilled('1', 'billed2706.jpg', 'reed valve i motor', false, true).'
De tynde blade kaldes reeds på engelsk.
Ved hver reed blad sidder en stopper plade som ikke bevæger sig. Den sørger for at reed bladet bukker jævnt og ikke for meget.

Her ses hvordan bladene åbner for gennemstrømning.
'.visbilled('1', 'billed0903.jpg', 'reed valve', false, true).'
Reed valve blade er vist typisk lavet af metal men kan også være lavet i kulstof som her.
'.visbilled('1', 'billed0902.jpg', 'reed valve blade', false, true).'
Når stemplet bevæger sig ud opstår der vakuum i krumtaphuset som åbner bladene og luft, benzin og olie suges ind i motoren under stemplet.
Når stemplet bevæger sig ind opstår der tryk i krumtaphuset som lukker bladene og der kan ikke komme luft, benzin og olie tilbage gennem reed valven.

Reed valven kan kontrolleres ved at holde den op mod noget lys for at se om den slutter helt tæt.

På ældre knallerter som Puch Maxi er der ingen reed valve.
Jeg har læst at trykket i krumtaphuset så kan gå tilbage gennem karburatoren og at luftfilteret så det kan blive vådt af benzin fordi der ikke er nogen reed valve til at stoppe det.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
