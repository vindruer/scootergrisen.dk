<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "el diagrammer - Elektrisk";
$overskrift = "el diagrammer - Elektrisk";
$metadescription = "el diagrammer viser hvordan ledningsnettet er forbundet til alle de elektriske dele på scooteren";

$databasecenter = array(

'
el diagrammer
' => '
Et el diagram viser hvordan ledningerne er forbundet til alle de elektriske dele.
'.visbilled('1', 'billed0253.jpg', 'el diagram', false, true).'
Alle el diagrammerne kan ses under '.ahref('download.php', 'Download').'.
Nogle el diagrammer findes i en fil for sig selv mens andre kan findes i brugermanualen/servicemanualen som regel i slutningen af manualen.

Du kan også finde el diagrammerne til de forskellige scooter mærker ved at kigge i '.ahref('galleri.php', 'galleri').' og gå ind på det scootermærke du søger for eksempel '.ahref('altomkymco.php', 'Kymco').' også kig ude til højre under download om der skulle være nogle eldiagrammer. Det er ikke alle scootermærker og modeller jeg har kunne finde el diagrammer til.
'

,'
ledningsfarver
' => '
El diagrammer med farvede ledninger er gode så man let kan finde farven.
Men der findes mange sort/hvid el diagrammer hvor farverne er angivet med forkortelser som ikke altid er let at forstå.
Også er der nogle sort/hvid el diagrammer helt uden angivelse af ledningsfarver.
Og der er el diagrammer i så dårlig opløsning/komprimering at man ikke kan læse teksten.

Her vil jeg prøve og samle noget info om dette som måske kan bruges til at afkode el diagrammer.

Forskellige el diagrammer bruger forskellige forkortelser til at angive farve.
Jeg har kigget i nogle el diagrammer for at se hvad forkortelser der bruges mest og her er resultatet med de mest brugte forkortelser øverst.
For eksempel bruges '.high('R').' næsten altid til at angive '.high('Red').'.
'.high('B').' kan både betyde '.high('Black').' og '.high('Blue').' så den kan ikke altid regne med.
'.
box(array('200', '200')
   ,array(
       array('helfarvede forkortelse', 'farve')
      ,array('R',             '<span style="color: black; background: red;">Red</span>')
      ,array('W',             '<span style="color: black; background: white;">White</span>')
      ,array('Y',             '<span style="color: black; background: yellow;">Yellow</span>')
      ,array('O',             '<span style="color: black; background: orange;">Orange</span>')
      ,array('GR',            '<span style="color: white; background: grey;">Grey</span>')
      ,array('BR',            '<span style="color: white; background: brown;">Brown</span>')
      ,array('G',             '<span style="color: white; background: green;">Green</span>')
      ,array('B<br>BK',       '<span style="color: white; background: black;">Black</span>')
      ,array('LG',            '<span style="color: black; background: lightgreen;">Light Green</span>')
      ,array('P',             '<span style="color: black; background: pink;">Pink</span>')
      ,array('LB<br>LBL',     '<span style="color: black; background: lightblue;">Light Blue</span>')
      ,array('B<br>L<br>BL',  '<span style="color: white; background: blue;">Blue</span>')
      ,array('DG',            '<span style="color: white; background: darkgreen;">Dark Green</span>')
      ,array('P',             '<span style="color: white; background: purple;">Purple</span>')
   )
)
.'

'.
box(array('200', '200', '200')
   ,array(
       array('to farvede forkortelse', 'primær farve', 'streg farve (tracer)')
      ,array('R/W',  'Red',      'White')
      ,array('B/R',  'Black',    'Red')
      ,array('B/W',  'Black',    'White')
      ,array('BL/W', 'Blue',     'White')
      ,array('G/R',  'Green',    'Red')
      ,array('G/Y',  'Green',    'Yellow')
      ,array('Y/G',  'Yellow',   'Green')
   )
)
.'
Her ses nogen ledningsfarver fra '.ahref('download/kymco_agility_eldiagram.pdf', 'Kymco Agility eldiagram').'.
Rød ser dog pink ud og hvid ser lysegrå ud fordi baggrunden er hvid.
'.visbilled('1', 'billed3866.png', 'el diagram ledningsfarver', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
