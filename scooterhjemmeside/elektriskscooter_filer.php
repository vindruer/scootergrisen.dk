<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "filer - Elektrisk scooter";
$overskrift = "filer - Elektrisk scooter";
$metadescription = "brugermanualer, servicemanualer, el diagrammer, reservedele og andre filer til elektriske scootere";

$databasecenter = array(

'
manualer og andre filer
' => '
Her har jeg samlet diverse brugermanualer, servicemanualer, eldiagrammer, reservedelskataloger og andre filer til elektriske scootere.

Filerne findes også under '.ahref('download.php', 'download').' men her på siden er det kun de filer som har med elektriske scootere at gøre.

'
.visfil('1', 'scooterhjemmeside/download/busettoecc800_brugermanual.pdf')
.visfil('1', 'scooterhjemmeside/download/busettoecc800_eldiagram.jpg')
.visfil('1', 'scooterhjemmeside/download/busettoecc800_samleanvisning.pdf')
.'
'
.visfil('1', 'scooterhjemmeside/download/norsjo_carrier_electronic_brugermanual.pdf')
.visfil('1', 'scooterhjemmeside/download/norsjo_carrier_electronic_eldiagram.pdf')
.visfil('1', 'scooterhjemmeside/download/norsjo_carrier_electronic_kontrolboks.pdf')
.visfil('1', 'scooterhjemmeside/download/norsjo_carrier_electronic_reservedele.pdf')
.'
'
.visfil('1', 'scooterhjemmeside/download/curtis_handheldprogrammer1311_motorcontroller1228.pdf')
.'
'
.visfil('1', 'scooterhjemmeside/download/ebretti_518_specifikationer.jpg')
.'
'
.visfil('1', 'scooterhjemmeside/download/giantco_ebuddy_brugermanual.pdf')
.visfil('1', 'scooterhjemmeside/download/giantco_ebuddy_eldiagram.jpg')
.visfil('1', 'scooterhjemmeside/download/giantco_ebuddy_eldiagram_experimental.pdf')
.visfil('1', 'scooterhjemmeside/download/giantco_ebuddy_eldiagram_experimental.svg')
.visfil('1', 'scooterhjemmeside/download/pt486a.pdf')
.visfil('1', 'scooterhjemmeside/download/greensaver_hb48062.pdf')
.visfil('1', 'scooterhjemmeside/download/greensaver_hb48062_dansk.pdf')
.'
'
.visfil('1', 'scooterhjemmeside/download/evt168_servicemanual.pdf')
.visfil('1', 'scooterhjemmeside/download/evt4000e_servicemanual.pdf')
.'
'
.visfil('1', 'scooterhjemmeside/download/ego_helio_brugermanual.pdf')
.'
'
.visfil('1', 'scooterhjemmeside/download/lynx_690_eldiagram.pdf')
.'
'
.visfil('1', 'scooterhjemmeside/download/peugeot_scootelec_brugermanual.pdf')
.visfil('1', 'scooterhjemmeside/download/peugeot_scootelec_diagnostic.pdf')
.visfil('1', 'scooterhjemmeside/download/peugeot_scootelec_eldiagram.pdf')
.visfil('1', 'scooterhjemmeside/download/peugeot_scootelec_eldiagram2.jpg')
.visfil('1', 'scooterhjemmeside/download/peugeot_scootelec_servicemanual.pdf')
.'
'
.visfil('1', 'scooterhjemmeside/download/texas_whisper_brugermanual.pdf')
.visfil('1', 'scooterhjemmeside/download/texas_whisper_reservedele_2006.pdf')
.visfil('1', 'scooterhjemmeside/download/texas_whisper_reservedele_2007.pdf')
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
