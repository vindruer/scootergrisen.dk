<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "starter - Elektrisk";
$overskrift = "starter - Elektrisk";
$metadescription = "elektrisk starter motor og starterrelæ som sidder på en scooter og som bruges til at starte forbrændingsmotoren";

$databasecenter = array(

'
starter motor
' => '
Her ses en starter motor.
'.visbilled('1', 'billed0697.jpg', 'kymco super 8 starter motor', false, true).'
Her ses en starter motor monteret i motorblokken og 2 ledninger som har forbindelse til starterrelæet.
'.visbilled('1', 'billed0120.jpg', 'starter motor', false, true).'
Her ses en starter motor som er monteret i bunden af motoren.
'.visbilled('1', 'billed2693.jpg', 'startermotor monteret i bunden af motoren', false, true).'
Her ses tænderne fra start motoren.
'.visbilled('1', 'billed0969.jpg', 'kymco super 8 starter motor tandhjul', false, true).'
Her ses børsterne og det sted hvor børsterne har kontakt med rotoren.
'.visbilled('1', 'billed0698.jpg', 'starter motor kommutator børster', false, true).'
Her ses den ene børste som har kontakt med 2 af felterne på kommutatoren.
'.visbilled('1', 'billed0699.jpg', 'starter motor kommutator børste', false, true).'
Her ses børsterne og fjedrene bag dem som presser børsterne ind på kommutatoren.
'.visbilled('1', 'billed0702.jpg', 'starter motor børster', false, true).'
Børsterne slides og kan på nogle motorer udskiftes.

Her ses roteren som er den del som drejer rundt når starter motoren bruges.
'.visbilled('1', 'billed0700.jpg', 'starter motor roterende del', false, true).'
På indersiden af huset sidder 2 magneter.
'.visbilled('1', 'billed0701.jpg', 'starter motor magneter', false, true).'
Nogle folk har skrevet om at deres starter motoren køre den forkerte vej.
Retningen kan ændres ved at huset med de 2 magneter drejes en halv omgang sådan at den magnet som før var oppe nu er nede.
På den måde skulle startermotoren dreje den anden vej.

Starter motoren er den del på scooteren som har det største strømforbrug når den bruges. Til gengæld bruges den ikke så længe af gangen.
Jeg har målt min starter motor til at bruge 28 ampere. Hvilket ved 12 volt må give et strømforbrug på 336 watt.

'.visflash('0', 'http://www.youtube.com/watch?v=I-LYGt-xGOM', 'letsindig forklarer om starterdrev og startermotor', true).'
'

,'
starterrelæ
' => '
Starterrelæet bruges når man holder bremsen inde og trykker på starter knappen.
Starter knappen og starter motoren deler ikke samme elektriske forbindelse.
Ved at bruge et relæ behøver den store strømstyrke til starter motoren ikke at gå op til starter knappen.
Når relæet får strøm fra starter knappen dannes en separat elektrisk forbindelse mellem batteri og starter motor.

Her ses et starterrelæ.
'.visbilled('1', 'billed1762.jpg', 'starterrelæ', false, true).'
På det viste starterrelæ står "KYMCO D402 12VDC 50A 2007. 07".

Her ses hvor starterrelæet sidder på en Kymco Super 8.
Starterrelæet sidder i en gummi beskytter.
'.visbilled('1', 'billed1758.jpg', 'starterrelæ', false, true).'
'.visbilled('1', 'billed1759.jpg', 'starterrelæ', false, true).'
De 2 tykke ledninger går til batteriets plus (+) terminal og starter motoren da strømstyrken er meget stor her.
'.visbilled('1', 'billed1761.jpg', 'starterrelæ', false, true).'

'.afsnit('starterrelæet er forbundet med','
A : Batteriets (+) terminal
B : Starter motor
C : Starter knap (som går til stel når der trykkes på knappen)
D : For/bag bremsekontakter (som har videre forbindelse til batteriets plus (+) når der bremses)
').'

Når starter knappen trykkes ind sættes der strøm til spolen ved C og D.
En kerne i midten af spolen bliver magnetisk.
Den magnetiske kerne tiltrækker en plade og tilslutter forbindelsen mellem batteri og starter motor ved A og B.
'.visbilled('1', 'billed0119.jpg', 'starterrelæ', false, true).'
Tager man huset af starterrelæet kan man se hvordan relæet virker.
'.visbilled('1', 'billed1763.jpg', 'starterrelæ adskilt', false, true).'
Den øverste plade bliver tiltrukket af den magnetiske kerne i midten af spolen når der sættes strøm til spolen.
'.visbilled('1', 'animation0020.gif', 'starterrelæ animation', false, true).'
'.visflash('0', 'http://www.youtube.com/watch?v=FSKQiO-Fyss', 'se og hør relæet slå til og fra', true).'

Man skal bremse på for eller bagbremsen før starter knappen kan bruges.
Desuden sidder der på nogle scootere en kontakt ved sidestøttebenet så man kun kan starte når sidestøttebenet er slået op.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
