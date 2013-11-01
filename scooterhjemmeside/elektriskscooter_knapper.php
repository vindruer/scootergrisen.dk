<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "knapper - Elektrisk scooter";
$overskrift = "knapper - Elektrisk scooter";
$metadescription = "information om knapper der kan findes på elektriske scootere som hornknap, mode, boost, bak";

$databasecenter = array(

'
introduktion
' => '
Her vil jeg skrive om de knapper som specielt kun findes på elektriske scootere.
'

,'
hornknap
' => '
Den knap som på en benzindrevet scooter bruges til el starteren kan på en elektrisk scooter være brugt til hornet.

På en elektrisk scooter kan der altså være 2 horn knapper.

Her ses en Scoopie scooter med 2 gule horn knapper.
'.visbilled('1', 'billed1674.jpg', 'scoopie styr', false, true).'
Her ses en Busetto ECC-800 med 2 gule horn knapper.
'.visbilled('1', 'billed1928.jpg', 'busetto ECC-800 styr instrumentpanel', false, true).'
På '.ahref('download/busettoecc800_eldiagram.jpg', 'Busetto ECC-800 eldiagram').' ser det ud til at begge horn knapper gør præcis det samme.

På Peugeot Scoot\'elec skulle der være 2 forskellig lydstyrke.
Så kan man bruge den lave hornlyd til cyklister som er lige foran en men som ikke kan høre den elektriske scootere så de ikke får et alt for stort chock.
'

,'
mode og boost og bak
' => '
Her ses 2 knapper på en E-max scooter hvor der står "MODE" og "boost".
'.visbilled('1', 'billed3289.jpg', 'E-max højre håndtag og knapper MODE boost', false, true).'
'.visbilled('1', 'billed3592.jpg', 'E-max højre håndtag og knapper MODE boost', false, true).'
"MODE" knappen bruges nok til at vælge mellem hurtig-kørsel og økonomi-køresel som påvirker topfarten og rækkevidden.

"boost" knappen bruges til kortvarigt at kunne øge motorydelsen (ikke topfarten) så man for eksempel bedre kan komme op af en bakke.
"boost" knappen kan bruges i 60 sekunder af gangen. Så skal man trykke igen hvis man vil have ekstra motorydelse igen.
For at få den ekstra motorydelse skal man køre mindst 5 km/t.

Her ses en knap knap på E-Max der bruges til at køre baglæns.
'.visbilled('1', 'billed3593.jpg', 'E-max bakknap', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
