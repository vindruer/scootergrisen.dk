<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['nogetikon']               = 'ikoner/ikon_kontakt2.png';

$title = "kontakt scootergrisen (mig som laver hjemmesiden)";
$overskrift = "kontakt scootergrisen (mig som laver hjemmesiden)";
$metadescription = "her kan du stille spørgsmål eller komme med forslag til hjemmesiden eller hvad du ellers har lyst til at skrive til mig";

$GLOBALS['setup']['head'] = '
<style type="text/css">

.kontaktdyr {
   display: block;
   margin: 0 auto;
}

</style>
';

$databasecenter = array(

'
kontakt formular
' => '
' . viskontakt(true, $GLOBALS['setup']['l_contactme_c']) . '
'

,'
venter du på svar ?
' => '
Det sker af og til at folk som skriver til mig glemmer at skrive deres e-mail adresse, skriver en ugyldig e-mail adresse eller at deres indbakke er fuld så de ikke kan modtage mit svar.

Hvis du har skrevet til mig og syntes der er gået lang tid uden svar så prøv og skriv igen og vær sikkert på at e-mail adressen er skrevet rigtigt.

Brug eventuelt en anden e-mail adresse eller kom ind i '.forummet().' og skriv.

Se også forum emnet '.ahref('http://scootergrisen.dk/forum/viewtopic.php?f=5&t=254', 'Til jer som ikke har fået svar på hjemmesiden').' hvor jeg svare på de e-mails hvor det ikke har været muligt at sende en e-mail tilbage.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true, null, null, false);

?>
