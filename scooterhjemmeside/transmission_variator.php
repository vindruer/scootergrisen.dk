<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "variator - Transmission";
$overskrift = "variator - Transmission";
$metadescription = "forklaring af scooterens variator som er et trinløst gear der skifter gearing automatisk alt efter motorens omdrejning og belastning på baghjulet";

$databasecenter = array(

'
variator
' => '
En variator kaldes også for CVT (Continuously Variable Transmission) eller variomatic.

Variatoren er et trinløst gear som automatisk skifter fra laveste til højeste gearing i en flydende bevægelse.

Her ses et variatordæksel.
'.visbilled('1', 'billed0171.jpg', 'variatordæksel', false, true).'
Her ses variatoren.
'.visbilled('1', 'billed0172.jpg', 'variator', false, true).'
Variatoren består af en kilerem i midten og 2 remskiver foran og 2 remskiver bagved.
'.visbilled('1', 'billed0542.jpg', 'variator remskiver', false, true).'
Her ses en kilerem som også kaldes et bælte.
'.visbilled('1', 'billed1991.jpg', 'kilerem bælte', false, true).'
Her er nogle videoer med variatorer i funktion.
'.visflash('0', "http://www.youtube.com/watch?v=-YLd8LWvqPA", '', true).'
'.visflash('0', "http://www.youtube.com/v/pjmv-dX2PWs", '', true).'
'.visflash('0', "http://www.youtube.com/watch?v=X5rU2J09wXc", '', true).'
'.visflash('1', 'flash0002.swf', 'her kan du prøve en variator (Klik på Go! knappen og brug pile tasterne til at ændre motorens hastighed)', true).'
De 6 grønne firkanter er ruller som bliver slynget ud af centrifugalkraften og dermed skubber den ene remskive tættere på den anden remskive. Kileremmen kører mellem remskiverne og bliver presset længere og længere ud.

Jo højere omdrejninger motoren kører med jo længere bliver rullerne slynget ud og jo højere kører kileremmen i de forreste remskiver.

'.visflash('0', "http://www.youtube.com/watch?v=2EjW-iSP-Q8", 'Her er en som skilder CVT ad og forklare hvad de forskellige dele gør', true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
