<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "fremtidens scootere";
$overskrift = "fremtidens scootere";
$metadescription = "scooter/knallert modeller som kan fås i danmark engang i fremtiden";

$databasecenter = array(

'
introduktion
' => '
Her på siden har jeg midlertidigt de scootermodeller som jeg ved eller tror kommer til at blive solgt i danmark i fremtiden.
Når jeg ser at scooterne er til at købe så flytte jeg dem ind på deres side som kan findes i '.ahref('galleri.php', 'Galleri').'.

Hvis du leder efter PGO PSE så er den flyttet over på '.ahref('altompgo.php#pgopse', 'PGO siden').'.
Hvis du leder efter Kymco Agility Carry eller Kymco Agility Delivery så er de flyttet over på '.ahref('altomkymco.php', 'Kymco siden').'.
Hvis du leder efter VGA Versus (Longjia LJ50QT-F) så er den flyttet over på '.ahref('altomlongjia.php#longjiaversus', 'Longjia siden').'.
Hvis du leder efter VGA Mover (Longjia H-2) så er den flyttet over på '.ahref('altomlongjia.php#longjiah2', 'Longjia siden').'.
Hvis du leder efter Kymco Like så er den flyttet over på '.ahref('altomkymco.php#kymcolike', 'Kymco siden').'.
Hvis du leder efter Peugeot E-Vivacity så er den flyttet over på '.ahref('specielt_peugeotevivacity.php', 'Peugeot E-Vivacity siden').'.
'

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
//   ,'' => ''

),'typegodkendelser' => array(
//   ,'' => ''

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
