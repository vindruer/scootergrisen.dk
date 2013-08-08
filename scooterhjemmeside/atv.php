<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "ATV";
$overskrift = "ATV";
$metadescription = "her samler jeg de filer jeg finder om ATV'er";

$databasecenter = array(

'
introduktion
' => '
Der er en sjælden gang imellem nogen der skriver til mig om ATV spørgsmål.

Jeg ved ikke noget om ATV\'er men jeg samler det jeg eventuelt finder om ATV\'er her på siden så andre kan få glæde af det.

'
.visfil('1', 'scooterhjemmeside/download/cpi_jw_50_90_100_servicemanual.pdf', 'CPI JW 50/90/100 servicemanual')
.visfil('1', 'scooterhjemmeside/download/kazuma_jaguar_500_brugermanual.pdf', 'Kazuma Jaguar 500 brugermanual')
.visfil('1', 'scooterhjemmeside/download/kazuma_jaguar_500_supplement.pdf', 'Kazuma Jaguar 500 supplement')
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
