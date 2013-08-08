<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "ur - Elektrisk";
$overskrift = "ur - Elektrisk";
$metadescription = "uret som kan findes i en scooter";

$databasecenter = array(

'
ur
' => '
Her ses uret fra Kymco Super 8.
'.visbilled('1', 'billed2354.jpg', 'kymco super 8 digital ur', false, true).'
På de 2 knapper nederst i hjørnerne kan man indstille tid og dato.
'.visbilled('1', 'billed2355.jpg', 'kymco super 8 digital ur', false, true).'
'.visbilled('1', 'billed2356.jpg', 'kymco super 8 digital ur', false, true).'
Der er 4 ledninger.
Den grønne er stelforbindelse.
De 3 andre får + 12 volt fra batteriets + terminal.
'.visbilled('1', 'billed2357.jpg', 'kymco super 8 digital ur', false, true).'
Brun (LED) : (batteri +) gennem tændingslås og lys kontakt. (baggrundslys)
Sort (EN) : (batteri +) gennem tændingslås. (tallene vises)
Rød (12V) : (batteri +) hele tiden (for at kunne huske tiden).
Grøn (G) : (batteri -) stelforbindelse.
'.visbilled('1', 'billed2358.jpg', 'kymco super 8 digital ur led en 12v g', false, true).'

'.afsnit('indstilling af ur/dato' ,'
Hold begge knapper inden i nogle sekunder indtil uret begynder at blinke.

Tryk på højre knap for at øge tallet og venstre for at gå videre.

Uret har AM som er de tidligste 12 timer og PM som er de seneste timer på døgnet.

Efter uret kan datoen indstilles, det første tal til venste er måneden. så hvis datoen er 103 så er det den 3. Januar.
').'

'.afsnit('andet' ,'
Uret i min scooter går med tiden forkert, så det kan man ikke regne med.
Jeg vil tro det er fordi uret ikke får de samme antal volt hele tiden men ved det ikke.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
