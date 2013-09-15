<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "problemer - Elektrisk scooter";
$overskrift = "problemer - Elektrisk scooter";
$metadescription = "her samler jeg information om kendte problemer der kan opstå på elektriske scootere efterhånden som jeg får kenskab til dem";

$databasecenter = array(

'
introduktion
' => '
Her på siden skriver jeg om de problemer som folk oplever med elektriske scootere.
'

,'
problemer
' => '
'.afsnit('kort rækkevidde','
Der er nogen som oplever kort rækkevidde på deres elektriske scooter.

I koldt vejr (om vinteren) skulle en elektrisk scooter have betydelig lavere rækkevidde end i varmere vejr.
Det er vist almindeligt at scooteren har lavere rækkevidde jo koldere det er.

Problemet kan måske gøres mindre ved at opbevare scooteren i et opvarmet rum om vinteren.

Men der er også nogen der oplever kort rækkevidde selvom det ikke er specielt koldt.
Den virkelige rækkevidde kan være meget lavere end den rækkevidde som producenten/sælgeren oplyser.

Se også '.ahref('specielt_giantcoebuddy.php#rekkevidde', 'Giantco E-buddy rækkevidde').' hvor producenten lover 60-90 km og sælgeren (T Hansen) lover i starten over 60 km (eller op til 70 km).
Giantco E-buddy ejere skriver at de køre 55 km (for 30 km/t modellen).
Og 37-46 km (for 45 km/t modellen).
').'
'.afsnit('scoopie - strøm til motor afbrydes i 5-6 sekunder efter bremsning','
Der er en bruger med en Scoopie scooter som skriver at hvis den køre over 25 km/t og man så bremser så kan motoren ikke køre de næste 5-6 sekunder.
De 5-6 sekunders afbrydelse sker ikke under 25 km/t eller hvis man "huk-bremser".
Hvis du kender mere til dette og eventuelt har en løsning så '.kontaktmig().' gerne.
').'
'.afsnit('Giantco E-Buddy - Kørsel på ru eller ujævn vej afbryder strømmen til motoren','
Ukendt grund.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
