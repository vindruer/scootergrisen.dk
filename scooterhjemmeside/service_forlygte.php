<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "forlygte - Service";
$overskrift = "forlygte - Service";
$metadescription = "service af forlygten på scooter (justering af nærlyset)";

$databasecenter = array(

'
justering af forlygte
' => '
For at scooterens forlygte skal kunne lyse vejen godt op men samtidig ikke blænde modkørende så skal nærlyset pege lidt ned.

Før man juster forlygten skal scooterens dæk havde '.ahref('service_dek.php#kontroller_dektryk', 'korrekt dæktryk').'.

Vælg nærlyset.
'.visbilled('1', 'billed0329.jpg', 'nærlys og fjernlys kontakt', false, true).'
Forlygtens hældning justeres på en skrue bag forlygten op under front skjoldet eller lige omkring forlygten foran på scooteren.
'.visbilled('1', 'billed0331.jpg', 'scooter forlygte justerings skrue', false, true).'
Den nemmeste måde er nok at køre en tur om aftenen/natten et sted hvor det er mørkt (ingen gadebelysning) så man kan se hvordan vejen lyses op og lave justeringer i løbet af turen indtil man er tilfreds.

På denne Kymco Super 8 4T sidder justeringsskruen inde bag forlygten oppe over forhjulet og det kan være lidt svært at komme ind og finde skruen hver gang man skal justere.
'.visbilled('1', 'billed3888.jpg', 'scooter forlygte justerings skrue', false, true).'
Der er tilsyneladende også mulighed for at justere skruen med et værktøj fra siden.
'.visbilled('1', 'billed3887.jpg', 'scooter forlygte justerings skrue', false, true).'
'

,'
lovgivning
' => '
Både lille og stor knallert skal være forsynet med mindst 1 nærlyslampe.
Hverken lille eller stor knallert behøver have fjernlys men de må gerne.


§ 32
(1) En fremadrettet, hvid eller gullig nærlyslygte, der uden at blænde kan oplyse vejen mindst 30 m foran knallerten.


6.02 Lygter til belysning

6.02.002 Fjernlyslygter
(1) Fjernlyslygte
c) skal kunne oplyse vejbanen mindst 100 meter foran køretøjet

6.02.003 Nærlyslygter
(1) Nærlyslygte
c) skal kunne oplyse vejbanen mindst 30 meter foran køretøjet
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
