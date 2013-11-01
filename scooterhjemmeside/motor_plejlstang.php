<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "plejlstang - 4 takt motor";
$overskrift = "plejlstang - 4 takt motor";
$metadescription = "forklaring af plejlstangen som forbinder stemplet med krumtapakslen i en forbrændingsmotor";

$databasecenter = array(

'
plejlstang
' => '
Plejlstangen forbinder stemplet med krumtapakslen.
'.visbilled('1', 'billed3040.jpg', 'plejlstang', false, true).'
Stemplet holdes på plads af stempelpinden i plejlstangens lille ende.
4 takt motorer har vist ingen nåleleje her.
2 takt motorer har vist gerne et nåleleje mellem plejlstangen og stempelpinden.
'.visbilled('1', 'billed3038.jpg', 'plejlstang lille ende', false, true).'

Plejlstangens store ende sidder ved krumtappen.
'.visbilled('1', 'billed3039.jpg', 'plejlstang stor ende', false, true).'
Plejlstangen holdes på plads i krumtappen med en bolt.
Bolten kan fjernes hvis krumtapakslens kugelejer fjernes først.
'.visbilled('1', 'billed3103.jpg', 'stempel plejlstang krumtapaksel tegning', false, true).'
Her ses at der er 2 huller på plejlstangens lille ende.
Jeg vil tro at hullerne er til for at olien der kommer ind gennem oliepassagerne i stempler kan kan komme og smørre.
'.visbilled('1', 'billed3068.jpg', 'plejlstang lille ende', false, true).'
På nogle plejlstænger er der vist boret et hul på langs igennem plejlstangen for at olien kan blive pumpet fra plejlstangens store ende til plejlstangens lille ende men der er ikke boret et hul på denne plejlstang.

Her kan man se motorolien i bunden af motoren.
'.visbilled('1', 'billed3067.jpg', 'plejlstang og krumtap', false, true).'
Så vidt jeg forstår bliver olien pumpet ud her på begge sider af plejlstangens store ende hvor der er 2 huller.
Olien plasker op på cylinder og stempel.
'.visbilled('1', 'billed3066.jpg', 'plejlstang og krumtap', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
