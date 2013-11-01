<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "omformer (12 VDC til 220 VAC)";
$overskrift = "omformer (12 VDC til 220 VAC)";
$metadescription = "omformeren kan lave 12 volt jævnstrøm fra scooterens battteri om til 230 volt vekselstrøm så man for eksempel kan bruge en almindelig mobiltelefonoplader eller en pære";

$databasecenter = array(

'
220 volt omformer
' => '
Med en omformer kan man komme til at bruge 220 volt udstyr i sin scooter.
'.visbilled('1', 'billed2894.jpg', 'NQ-12001 150 watt 12 volt jævnstrøm til 230 volt vekselstrøm omformer forbundet til batteri', false, true).'
Omformeren laver batteriets 12 volt jævnstrøm om til 220 volt vækselsrtøm.

Denne omformer har både et 220 volt vekselstrøms stik og et USB stik med 5 volt jævnstrøm.
'.visbilled('1', 'billed2895.jpg', 'NQ-12001 150 watt 12 volt jævnstrøm til 230 volt vekselstrøm omformer stik', false, true).'
Når denne omformer at tilsluttet batteriet bruger den 0,20 ampere fra batteriet selvom der ikke er tilsluttet noget til omformeren.
Det svare vistnok til at omformeren bruger 3 watt uden noget tilsluttes.

Med omformeren kan man for eksempel oplade sin telefon i scooteren.
'.visbilled('1', 'billed2896.jpg', 'NQ-12001 150 watt 12 volt jævnstrøm til 230 volt vekselstrøm omformer forbundet til mobiltelefon', false, true).'
Når min telefon oplades bruges der 0,41 ampere fra batteriet.

Man kan også bruge en pære til at få lys.
Her er det en 5 watt (35mA) sparepære (kompakt lysstofrør).
'.visbilled('1', 'billed2897.jpg', 'NQ-12001 150 watt 12 volt jævnstrøm til 230 volt vekselstrøm omformer forbundet til batteri og pære', false, true).'
'.visbilled('1', 'billed2900.jpg', 'pære 5W 35mA', false, true).'
Når den 5 watt sparepære er tændt bruges der 0,71 ampere fra batteriet.

Når en 15 watt (108mA) sparepære er tændt bruges der 1,50 ampere fra batteriet.

Her er det en 28 watt glødetrådspære.
'.visbilled('1', 'billed2898.jpg', '28 watt glødetråd', false, true).'
Når den 28 watt glødetrådspære er tændt bruges der 2,94 ampere fra batteriet.

Når en 60 watt glødetrådspære er tændt bruges der 5,97 ampere fra batteriet.

Denne omformer kan levere op til 150 watt.
'.visbilled('1', 'billed2899.jpg', 'NQ-12001 150 watt 12 volt jævnstrøm til 230 volt vekselstrøm omformer', false, true).'

Jeg har kun brugt omformeren i min scooter for at prøve det så jeg ved ikke hvor mange ampere/watt man kan tillade sig at bruge.
For bruger man for meget strøm vil det jo dræne batteriet for meget.

Man kan sige er der nok lettere at have en lommelygte med hvis man har brug for lys så slipper man også for ledningerne.
Er man ved at løbe tør for strøm på sin telefon så er det måske meget smart at kunne bruge omformeren til at levere strøm indtil man er færdig med at bruge telefonen.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
