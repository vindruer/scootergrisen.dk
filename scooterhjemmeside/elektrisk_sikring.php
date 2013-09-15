<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "sikring - Elektrisk";
$overskrift = "sikring - Elektrisk";
$metadescription = "elektriske sikringer der beskytter ledningsnettet ved for stor strømstyrke";

$databasecenter = array(

'
sikring
' => '
Sikringer beskytter det elektriske system ved fejl.

Hvis der sker en kortslutning i det elektriske system så vil sikringens tråd smelte først sådan at det ikke går ud over ledningsnettet eller andet elektrisk udstyr.

Sikringer er mærket med det antal ampere de kan tåle før tråden smelter.

Her ses en glassikring på 7 ampere.
'.visbilled('1', 'billed0398.jpg', '7 ampere sikring', false, true).'
Sikringen ligger i en holder.
'.visbilled('1', 'billed0860.jpg', 'sikring sikringsholder', false, true).'
På Kymco Super 8 4T findes 3 sikringer.
'.visbilled('1', 'billed1039.jpg', 'sikring sikringsholder kymco super 8 4T', false, true).'
Sikringen indeholder en metal tråd på en bestemt tykkelse.
Jo tykkere tråd, jo flere ampere kan sikringen tåle.

Her ses en anden type sikring.
'.visbilled('1', 'billed0611.jpg', 'sikring', false, true).'
Øverst står hvor mange ampere den er på og det ser ud til at man kan teste sikringen uden at tage den ud. Der er i hvert fald  hul til metallet.
'.visbilled('1', 'billed1794.jpg', 'sikring', false, true).'

'.afsnit('defekte sikringer', '
Her ses en 7 ampere sikring som er smeltet på en anderledes måde. Der er ikke forbindelse i denne sikring.
i stedet for at smelte har sikringen i længere tid været lige på grænsen af at smelte så den har været varm men ikke varm nok til at smelte tråden hurtigt.
'.visbilled('1', 'billed1840.jpg', 'defekt sikring', false, true).'
Her ses nogen defekte sikringer.
'.visbilled('1', 'billed2143.jpg', 'defekte sikringer', false, true).'
'.visbilled('1', 'billed2295.jpg', 'sikring smeltet', false, true).'
Denne sikring er sprunget. Det kan ses ved at metallet i midten er smeltet over og ikke længere har forbindelse.
'.visbilled('1', 'billed1793.jpg', 'sikring', false, true).'
Her ses en sikringsholder til fladsikringer.
'.visbilled('1', 'billed2367.jpg', 'sikringsholder', false, true).'
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
