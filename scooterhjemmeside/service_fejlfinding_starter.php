<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "Starter - Fejlfinding";
$overskrift = "Starter - Fejlfinding";
$metadescription = "find og ret fejl på scooterens/knallertens starterrelæ, starter motor";

$databasecenter = array(

'
starterrelæ
' => '
Afmonter stikket til starter motoren.
Forbind et multimeter sat til volt jævnstrøm på den del af stikket som går til starterrelæet.
Drej tændingslåsen til ON.
Klem på for eller bagbremsen og tryk på starter knappen.
På nogle scootere sidder der en kontakt ved side støttebenet så sidestøttebenet skal slås op.
Starterrelæet skal sige "klik" når man trykket på starter knappen.
Se om multimeteret kan måle noget når du holder starter knappen inde.

'.visflash('0', 'http://www.youtube.com/watch?v=FSKQiO-Fyss', 'test af starterrelæ', true).'
'

,'
starter motor
' => '
'
. fejlfinding('a', 'drej tændingslåsen til ON, hold bremsegrebet inde og kontroller om bremselyset bag på lyser')
. fejlfinding('b', 'bremselyset lyser', 'bremselyset lyser ikke')
. fejlfinding('c', array(
 'sprængt sikring'
,'svagt/afladt batteri'
,'fejl på bremsekontakt'
,'fejl på tændingslås'
,'dårlig forbindelse, knækket eller kortsluttet kabler'
))

. fejlfinding('a', 'drej tændingslåsen til ON, hold bremsgrebet inde og tryk på starter knappen')
. fejlfinding('b', 'startermotor drejer rundt', 'startermotor drejer ikke rundt')
. fejlfinding('c', array(
 'svagt/afladt batteri'
,'dårlig forbindelse, knækket eller kortsluttet kabler'
,'fejl på starter motor'
,'fejl på starterrelæ'
,'fejl på starter knap'
,'sidestøtteben er ikke slået op eller fejl på sidestøttebens kontakten'
), null, 0)

. fejlfinding('a', 'undersøg om starter motoren drejer den rigtige vej rundt')
. fejlfinding('b', 'drejer den rigtige vej', 'drejer den forkert vej')
. fejlfinding('c', array(
 'børster er monteret forkert (prøv at drej børstepladen en halv omgang)'
,'huset er monteret forkert (prøv at drej huset en halv omgang)'
,'terminalerne er monteret forkert'
), null, 0)

.'
Med et multimeter sat til ohm mål om der er forbindelse mellem hvert par af kommutator felterne (der hvor børsterne rammer).
Der skal være forbindelse mellem hvert par (2 felter som er naboer).
'.visbilled('1', 'billed1808.jpg', 'startermotor fejlsøgning for forbindelse', false, true).'
'.visbilled('1', 'billed2111.jpg', 'startermotor fejlsøgning for forbindelse', false, true).'

Mål også om der er forbindelse mellem akslen og hvert kommutator felt.
Der skal ikke være forbindelse mellem akslen og nogle af kommutator felterne.
'.visbilled('1', 'billed1809.jpg', 'startermotor fejlsøgning for kortslutning', false, true).'
'.visbilled('1', 'billed2112.jpg', 'startermotor fejlsøgning for kortslutning', false, true).'

Mål også om der er forbindelse mellem den ene børste og terminalen på siden af starter motoren.
Der skal være forbindelse.



Her måles kulbørsternes længde.
'.visbilled('1', 'billed3856.jpg', 'startermotor kulbørste længde måling', false, true).'
Minimum længde kan for eksempel være 8,5 mm (Kymco Super 8).
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
