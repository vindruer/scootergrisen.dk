<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "Benzintank - Fejlfinding";
$overskrift = "Benzintank - Fejlfinding";
$metadescription = "find og ret fejl på scooterens/knallertens benzintank, automatisk benzinhane, benzinmåler, benzindæksel";

$databasecenter = array(

'
automatisk benzinhane
' => '
Tag benzinslangen af ved karburatoren (markeret med rødt) og peg den væk fra scooteren.
Tag vakuumslangen af ved indsugningsstudsen (markeret med grønt) og sug i den.
Når du suger skal der komme benzin ud i af benzinslangen og når du stopper med at suge skal benzinen også stoppe.
'.visbilled('1', 'billed1427.jpg', 'forklaring af den automatiske benzinhane', false, true).'
I denne video er kun benzinslangen taget af ved karburatoren.
Her kan man se hvordan benzinflowet er når motoren ikke kan starte (tændrørshætten er taget af).
Og benzinflowet mens motoren køre.
'.visflash('0', "http://www.youtube.com/watch?v=wQ6p3rRVqMo", 'test af benzinflow', true).'
'

,'
benzinmåler
' => '
'.afsnit('benzinmåler med 2 ledninger','
Mål Ohm værdien mellem de 2 ledninger.
'.visbilled('1', 'billed2803.jpg', 'benzinmåler ohm måling', false, true).'
Når svømmeren er helt oppe (fuld tank) kan der være 3-10 Ω.
Når svømmeren er helt nede (tom tank) kan der være 90-100 Ω.

'.afsnit('Peugeot Tweet data','
Svømmer er helt oppe (fuld tank) : 8 Ω ± 20%.
Svømmer er helt nede (tom tank) : 95 Ω ± 20%.
').'
').'

'.afsnit('benzinmåler med 3 ledninger','
Mål ohm værdierne på stikket mens svømmeren er helt oppe og mens svømmeren er helt nede.
'.visbilled('1', 'billed0302.jpg', 'benzinmåler', false, true).'
').'

For at teste om benzinmåler, ledningsnet og benzinviseren på instrumentpanelet virker kan man dreje tændingslåsen til ON og bevæge svømmeren op og ned for at se om benzinviseren går helt op og helt ned.
'.visbilled('1', 'billed0308.jpg', 'benzinviser', false, true).'
'

,'
benzindæksel
' => '
Kontroller at det lille hul i benzindækslet ikke er tilstoppet ved at puste igennem hullet.
'.visbilled('1', 'billed1438.jpg', 'benzindæksel med lille hul', false, true).'
Hvis hullet er tilstoppet kan der vistnok opstår vakuum i benzintanken sådan at benzinen ikke kan løbe ned til karburatoren.

Det er dog ikke på alle scootere at der er hul i benzindækslet.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
