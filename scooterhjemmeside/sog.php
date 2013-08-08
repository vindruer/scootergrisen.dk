<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "søg på scootergrisen.dk";
$overskrift = "søg på scootergrisen.dk";
$metadescription = "søg efter tekst på scootergrisen.dk (undtaget forummet som har sin egen søgefunktion)";

$databasecenter = array(

'
resultater
' => '
'.vissogeresultater().'
'

,'
mangler der noget ?
' => '
Hvis du syns der mangler noget på hjemmesiden og du ikke kan finde det i menuerne eller ved at søge så kan du give mig besked her.

Læs gerne '.ahref('#hjelp_til_sogning', 'Hjælp til søgning').' før du skriver hvad du syns der mangler. Det kan jo være det allerede er på hjemmesiden et sted.

'.visdermanglernoget().'

Hvis du skriver din e-mail adresse så kan jeg kontakte dig hvis det du ikke kunne finde faktisk findes på hjemmesiden.
'

,'
hjælp til søgning
' => '
'.afsnit('søgning efter 2 takt','
Da denne hjemmeside primært handler om 4 takt scootere og elektriske scootere vil søgning efter de fleste 2 takt knallerter/scootere og motordelene hertil formodentligt ikke give det ønskede resultat.
').'
Det er i de fleste tilfælde bedst at begrænse søgningen til 1 eller 2 ord og undgå at bruge tegn som + og - og /.
Der søges efter den sætning du skriver og ikke på hvert enkelt ord.
Det vil sige at hvis du søger efter <span class="bold">piaggio zip 4t</span> så vises de sider hvor præcis den sætning findes.
Sider med <span class="bold">piaggio zip</span> vises ikke.
Giver <span class="bold">piaggio zip 4t</span> ikke det ønskede resultat så prøv med <span class="bold">piaggio zip</span> eller <span class="bold">piaggio</span>.
Søgefunktionen er ikke i stand til at søge på hele hjemmesiden så den kan altså ikke finde alt.

'.
box(array('300')
   ,array(
       array('eksempler på gode søgninger')
      ,array('karburator')
      ,array('spændingsregulator')
      ,array('tændrør')
      ,array('giantco sprint')
      ,array('BT49QT-3')
   )
)
.'
'.
box(array('320', '200')
   ,array(
       array('eksempler på mindre gode søgninger', 'prøv i stedet')
      ,array('Pakning v/plastdæksel', 'pakning')
      ,array('dæk + regnvejr', 'dæk')
      ,array('Sachs MadAss 50cc', 'Sachs MadAss')
      ,array('manual til honda dax', 'honda dax')
      ,array('tænding - 4 takt', 'tænding')
      ,array('udskiftning/bagpære', 'bagpære')
      ,array('licensproduceret Honda DAX motor', 'Honda DAX')
      ,array('XB31 XMOTOS', 'XMOTOS XB31')
   )
)
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
