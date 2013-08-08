<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "Karburator - Fejlfinding";
$overskrift = "Karburator - Fejlfinding";
$metadescription = "find og ret fejl på scooterens karburator";

$databasecenter = array(

'
mager/fed blanding
' => '
'.afsnit('mager blanding (for lidt benzin i forhold til luft)','
• tilstoppet benzin dyser
• fejl på nåleventil
• svømmehøjde for lav
• tilstoppet benzin system
• indsugningsstuds luft utæt
• fejl på nålegaspjælds funktion
• fejl på vippegasspjælds funktion
• tilstoppet benzintank dæksel
• tilstoppet benzinfilter
').'

'.afsnit('fed blanding (for meget benzin i forhold til luft)','
• fejl på automatisk choker
• fejl på nåleventil
• svømmehøjde for høj
• tilstoppet luft dyser
• beskidt luftfilter
• oversvømmet karburator
').'
'

,'
karburator
' => '
'.afsnit('oversvømmet','
• forkert svømmerhøjde
• nåleventil slidt, sidder fast eller snavs sidder fast
').'
'

,'
automatisk choker
' => '
Der findes nogen forskellige måder at teste om den automatiske choker virker alt efter hvor grundig man vil være.

'.afsnit('Den lette måde (mål elektrisk modstand)','
Vent 30 minutter hvis motoren lige har kørt så den automatiske choker kan trække sig sammen og blive kold.
Afmonter choker stikket.
Mål på choker stikket med et multimeter sat til ohm.
'.visbilled('1', 'billed0305.jpg', 'fejlfinding af automatisk choker ohm måling', false, true).'
'.visbilled('1', 'billed2708.jpg', 'fejlfinding af automatisk choker ohm måling', false, true).'
Ifølge manualen til Kymco Agility og Kymco Super 8 må der maksimalt være 10 Ω.
Jeg har målt 2 automatiske chokere til at være på 15 Ω og de ser ud til at virke fint.
Så den automatisk choker kan godt virke normalt selvom modstanden er lidt over 10 Ω.

I "Haynes 4768" bogen står 20-40 Ω.
').'

'.afsnit('Den anden lette måde (mål udpresning)','
Vent 30 minutter hvis motoren lige har kørt så den automatiske choker kan trække sig sammen.
Afmonter chokeren.
Mål hvor langt ventilen er ude i forhold til kanten af den automatiske choker med enden af en skydelære.
Tag ledningerne ud af stikket.
Forbind chokerne direkte til scooterens batteri.
'.visbilled('1', 'billed3099.jpg', 'automatisk choker monteret til batteri', false, true).'
Toppen af chokeren skal blive varm efter kort tid.
Lad chokeren være forbundet til batteriet i 5 minutter.
Mål igen hvor langt ventilen er ude i forhold til kanten af den automatiske choker.
'.visbilled('1', 'billed3100.jpg', 'automatisk choker', false, true).'
'.visbilled('1', 'billed3101.jpg', 'måling af ventil på automatisk choker mens den er ude', false, true).'
Jeg har læst at ventilen skal bevæge sig cirka 3 til 6 mm ud afhængig af karburator typen.
Jeg har målt min choker ventil til at bevæge sig 5 mm ud.

Det er sådan set ligegyldigt om man måler ved ventilen eller spidsen af nålen de bevæger sig lige meget ud, det er bare lettere at bruge enden af skydelære på ventilen.
').'

'.afsnit('Den grundige måde (pust igennem hul)','
Vent 30 minutter hvis motoren lige har kørt så den automatiske choker kan trække sig sammen.
Tøm karburatoren for benzin ved at løsne drænskruen i bunden af karburatoren og tag karburatoren af motoren.
Lad den automatiske choker blive siddende på karburatoren.
Pust gennem en slange ind i lufthullet til den automatisk choker.
'.visbilled('1', 'billed1209.jpg', 'fejlfinding af automatisk choker pust', false, true).'
På den anden side af karburatoren skulle du med en finger kunne mærke at der kommer luft ud.
'.visbilled('1', 'billed0309.jpg', 'karburator luft indsugning til den automatiske choker og udgang', false, true).'
Hvis det er en CV karburator så kan du i stedet for slangen puste ind i karburatoren fra cylinder siden med munden tæt om åbningen.

Forbind chokeren til scooterens batteri i 5 minutter.
'.visbilled('1', 'billed1210.jpg', 'fejlfinding af automatisk choker pust', false, true).'
Pust igen.
Nu skulle det være sværere at puste og du skulle ikke kunne mærke luft med fingeren på den anden side.
Vent 30 minutter så den automatiske choker kan trække sig sammen og pust igen.
Hvis du igen kan mærke luften komme ud med en finger så virker den automatiske choker som den skal.
').'
'

,'
karburatorvarmer
' => '
Mål ohm værdien mellem terminalen og siden.
'.visbilled('1', 'billed2695.jpg', 'karburatorvarmer', false, true).'
På en Sym Sport X 50 skal den have en modstand på 7 Ω ± 10%.
På en Derbi skal den have en modstand på 8 Ω ± 3 (ved 15-20 °Celsius).

For at teste om termostaten får strøm kan en 12 volt pære forbindes mellem den gul/grønne og grønne ledning.
For at teste om karburatorvarmeren får strøm skal kan en 12 volt pære forbindes mellem de 2 sorte ledninger (termostatens skal være under 5 °Celsius).
'.visbilled('1', 'billed3333.jpg', 'karburatorvarmertermostat', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
