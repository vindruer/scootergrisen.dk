<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "søg på scootergrisen.dk";
$overskrift = "søg på scootergrisen.dk";
$metadescription = "søg efter tekst på scootergrisen.dk (forummet har sin egen søgefunktion)";

if($sogeresultat = vissogeresultater()){

   $sogeoverskrift = 'resultater';

}else{

   $sogeoverskrift = 'søgning';
   $sogeresultat = ''
      . 'Søg på hjemmesiden ved at bruge søgefeltet oppe til højre.'."\r\n"
      . "\r\n"
      . 'Forummet har sin egen søgefunktion : '.ahref('http://scootergrisen.dk/forum/search.php', 'Søg i forum').'.'
      ;

}

if($sogeresultat != ''){


}else{


}

$databasecenter = array(

'
'.$sogeoverskrift.'
' => '
'.$sogeresultat.'
'

,'
hjælp til søgning
' => '
Der søges efter den sætning du skriver og ikke på hvert enkelt ord.
Det vil sige hvis du søger efter <span class="bold">piaggio zip 4t</span> så vises de sider hvor den sætning findes.
Sider med <span class="bold">piaggio zip</span> vises ikke.
Hvis <span class="bold">piaggio zip 4t</span> ikke giver det ønskede resultat så prøv med <span class="bold">piaggio zip</span> eller <span class="bold">piaggio</span>.
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
.''.
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

,'
mangler der noget ?
' => '
Hvis du syntes der mangler noget på hjemmesiden og du ikke kan finde det i menuerne eller ved at søge så kan du give mig besked her.

Hvis du skriver din e-mail adresse så kan jeg kontakte dig hvis det du ikke kunne finde faktisk findes på hjemmesiden.
'.visdermanglernoget().'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
