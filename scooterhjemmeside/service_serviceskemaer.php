<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "Serviceskemaer - Service";
$overskrift = "Serviceskemaer - Service";
$metadescription = "serviceskemaer fra diverse scootere hvor man kan se hvor ofte service arbejde skal udføres";

$databasecenter = array(

'
introduktion
' => '
Her er nogle serviceskemaer fra forskellige brugermanualer og servicemanualer til scootere med 4 takt motor.

På en ny motor skal både motorolien og gearolien typisk skiftes ved 300 km.
I nogle serviceskemaer står at motorolien og/eller gearolien også skal skiftes ved 1000 km.

Motorolien skal herefter typisk udskiftes for hver 2000 km.
Gearolien skal herefter typisk skiftes for hver 5000 km.

Hvis man ønsker at have høj forbrændings effektivitet og reducer udstødningsgasserne kan man skifte motorolien for hver 1000 km står der i nogen manualer.

Der findes også scootere som aldrig skal have skiftet gearolie også er der ikke nogen drænbolt på reduktionsgearet. Her regner producenten åbenbart med at den samme gearolie kan holde i hele scooterens levetid.
'

,'
Kymco Agility
' => '
'.visbilled('1', 'billed0747.jpg', 'kymco agility service skema', false, true).'
'

,'
Kymco Super 8 4T
' => '
'.visbilled('1', 'billed1103.jpg', 'kymco super 8 4T service skema', false, true).'
'.visbilled('1', 'billed1726.jpg', 'kymco super 8 4T engine oil klistermærke på blæser skjold', false, true).'
'

,'
Yamaha Giggle
' => '
'.visbilled('1', 'billed0743.jpg', 'yamaha giggle service skema', false, true).'
'

,'
Baotian
' => '
'.visbilled('1', 'billed2645.jpg', 'baotian service skema', false, true).'
'.visbilled('1', 'billed2648.jpg', 'baotian bt50qt-9 service skema', false, true).'
'.visbilled('1', 'billed0744.jpg', 'baotian service skema', false, true).'
'

,'
Aprilia Scarabeo 4T
' => '
'.visbilled('1', 'billed0745.jpg', 'aprilia scarabeo 4T service skema', false, true).'
'

,'
Sym Mio
' => '
'.visbilled('1', 'billed0748.jpg', 'sym mio service skema', false, true).'
'

,'
TMS S3
' => '
De følgende klistermærker sidder vist nok på mange Baotian scootere og de scooter mærker som er magen til Baotian men bruger andre navne så som TMS.

På luftfilteret sidder dette klistermærke.
'.visbilled('1', 'billed1614.jpg', 'TMS S3 luftfilter klistermærke', false, true).'

'.afsnit('på klistermærket står','
Cautions

• Engine oil shall be replaced in the first 300km
and every 3000km afterwards.

• Air cleaner element shalle be cleaned every
2000km and be replaced every 5000km.
').'

På blæserskjoldet sidder dette klistermærke.
'.visbilled('1', 'billed1615.jpg', 'TMS S3 blæserskjold klistermærke', false, true).'

'.afsnit('på klistermærket står','
Engine oil usage

The running-in distance for a new motorcycle
is 1000KM and speed shall be limited.....
40KM/H during this running-in period. Engine
oil shall be replaced and filter shall be cleaned
in the first 300KM running. Afterwards ....
replace the engine oil every 3000KM
Volume:1.0L

Please apply 4-stroke motorcycle-used engine
oil SAE15W/40 or SAE10W/40. When the tem-
perature is below -5 °C. please use engine oil
SAE10W/30.
').'
'

,'
Giantco med 4 takt motor
' => '
'.visbilled('1', 'billed3241.jpg', 'giantco 4 takt service skema', false, true).'
'

,'
Giantco E-Buddy
' => '
'.visbilled('1', 'billed3875.jpg', 'giantco E-Buddy service skema', false, true).'
'

,'
Derbi 2 takt 6 gear
' => '
Her ses serviceskemaet fra '.ahref('download/derbi_50cc_6speed_servicemanual.pdf', 'Derbi 6 gear servicemanual').'.
'.visbilled('1', 'billed3367.jpg', 'derbi 6 gear serviceskema', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
