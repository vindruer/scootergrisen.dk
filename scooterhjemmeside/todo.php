<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "todo";
$overskrift = "todo";
$metadescription = "her skriver jeg om målsætninger for hjemmesiden. Ting der skal ske, rettes og skrives om i fremtiden.";

$filtodo = "{$GLOBALS['setup']['roden']}/todo.txt";
$todokode = '';

if(file_exists($filtodo)){

   if(filesize($filtodo)){

      $todokode = file_get_contents($filtodo, NULL, NULL, 0, 1048576);
      $todokode = htmlentities($todokode, ENT_QUOTES, 'UTF-8'); // tekst som vises i textarea... ikke den tekst som gemmes

   }else{

      $todokode = 'Filen "' . basename($filtodo) . '" er tom.';

   }

}else{

   $todokode = 'Filen "' . basename($filtodo) . '" findes ikke.';

}

$databasecenter = array(

'
målsætning
' => '
'.afsnit('1000 besøg i gennemsnit per dag på chart.dk','
Kunne godt tænke mig at kommer op på 1000 besøg om dagen på '.ahref('http://chart.dk/', 'chart.dk').' hvor det er tager som gennemsnittet af en uge.
Bare for at det kunne da være sjov.
').'
'.afsnit('konkurrence','
Lav konkurrence hvor man kan vinde Haynes 4768 eller en batterioplader eller noget hvis man svare på nogen spørgsmål eller tegner en tegning eller noget.
').'
'

,'
brugerne skriver der mangler...
' => '
'
.citat('at finde størelsen på drivremen til agm bella scooter fra 2009')
.citat('scooter Lifan 300, brukarmanual etc')
.citat('starterrelæ honda vision 1998')
.citat('baghjulslør udskiftning af leje')
.citat('adresse til fabrikksalg fra india og kina.')
.citat('sideskjold')
.citat('moment for at spænne topstykke og knæstterne efter udskriftning af vintiller')
.citat('I mangler noget om honda melody mini :)')
.'
'

,'
brugerne vil gerne have info om...
' => '
'
.citat('yamaha neos 4t begrænsniger')
.citat('kan ikke finde diagram og tændings indstilling af pgo comet årg 05')
.citat('info om indsugnings forstærkere :)')
.citat('2 takt')
.citat('skjolde')
.citat('tuning')
.'
'

,'
todo.txt
' => '
'.$todokode.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
