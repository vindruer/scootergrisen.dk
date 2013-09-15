<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "motortyper - 4 takt motor";
$overskrift = "motortyper - 4 takt motor";
$metadescription = "forklaring af forskellige 4 takt motortyper der findes i scootere som 139QMA, 139QMB, 139FMA, 139FMB. Dekodning af motormodel tegn";

$databasecenter = array(

'
tvunget blæsekølet 4 takt motortyper
' => '
Her ses 139QMB som er tvunget blæsekølet med variator.
'.visbilled('1', 'billed0947.jpg', '139QMB motor', false, true).'
'.visbilled('1', 'billed3271.jpg', 'motor', false, true).'
Her ses en anden 139QMB motor.
Læg mærke til at der forrest på motoren sidder et rør på den ene model med en reed valve.
På andre motorr kan dette rør være fjernet også sidder reed valven direkte på udstødnings forrør.
'.visbilled('1', 'billed1047.jpg', '139QMB motor', false, true).'
'.
galleriholder(array(
    galleri('highslide', '', 'billed3787.jpg', array('Kymco Agility motor', 'komplet motorenhed på centerstøtteben og baghjul'))
   ,galleri('highslide', '', 'billed3786.jpg', array('Kymco Agility motor', 'komplet motorenhed på centerstøtteben og baghjul'))
))
.'
139QMA og 139QMB findes på mange af de kinesiske scootere.

Her ses 152QMI som vist nok er en 125 cm³ motor.
Læg mærke til at kickstarteren vender den anden vej så man kan bruge den mens man sidder på scooteren.
'.visbilled('1', 'billed0948.jpg', '152QMI motor', false, true).'
'

,'
passiv vindkølet 4 takt motortyper
' => '
Her ses 139FMA som er vindkølet med kædetræk.
'.visbilled('1', 'billed0946.jpg', '139FMA motor', false, true).'
Her ses 139FMB som er vindkølet med kædetræk.
'.galleriholder(array(galleri('highslidestandard', 'billed1557.jpg', 'billed1557.jpg', '139FMB motor'))). '
Her ses 139FMB-2 som er vindkølet med kædetræk.
Findes på Apollo Orion 30 og 36.
'.visbilled('1', 'billed0949.jpg', '139FMB-2 motor', false, true).'

Her ses 1P57FMJ som er 150 cm³ vindkølet med kædetræk.
'.visbilled('1', 'billed3172.jpg', '1P57FMJ motor', false, true).'
'

,'
væskekølet 4 takt motortyper
' => '
Her ses Motori Minarelli XF 50 som er en 50 cm³ 4 takt motor med 3 ventiler.
Gearolie kapacitet : 120 ml.
Elektrisk system : 130 W - 14 V.
Findes muligvis i en kinesisk kopi kaldet LJ1P38MB på VGA Mover og VGA Versus 4T.
'.visbilled('1', 'billed3857.jpg', 'Motori Minarelli XF', false, true).'
'

,'
4 takt motortyper tabel
' => '
139QMA og 139QMB er de kinesiske betegnelser for de motorer som sidder i de kinesiske 4 takt 50 cm³ scootere.

139QMA har en lang motorblok og bruges primært til 12" hjul.
139QMB har en kort motorblok og bruges primært til 10" hjul.
Dog kan både 139QMA og 139QMB fås med både 10" og 12" hjul.

Da 139QMA har længere motorblok har den en længere kilerem end 139QMB.
Måske har tandhjulet på krumtakakslen til oliepumpen 16 tænder på 139QMA og 22 tænder på 139QMB. Måske.

Der er mere info om 139QMA og 139QMB motoren i denne manual.
'.visfil('1', 'scooterhjemmeside/download/baotian_motor_servicemanual.pdf', 'Baotian motor servicemanual').'

I denne tabel kan du afkode den kinesiske måde at angive motortype.
For eksempel 139QMA, 139QMB, 139FMB-B og ZS1P39QMB.
Dele af tabellen har sikkert fejl. '.kontaktmig(true).' gerne hvis du har rettelser eller kan hjælpe med information til tabellen.
'.motortypetable().'

139FMB findes på Apollo Orion.
'

,'
diverse 4 takt motortyper
' => '
Kymco KG10 motoren findes på Agility og Agility Carry.
Kymco KL10 motoren findes på Super 8.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
