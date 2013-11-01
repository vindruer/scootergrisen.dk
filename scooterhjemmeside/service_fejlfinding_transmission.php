<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "Transmission - Fejlfinding";
$overskrift = "Transmission - Fejlfinding";
$metadescription = "find og ret fejl på scooterens/knallertens transmission (variator, kobling)";

$databasecenter = array(

'
transmission
' => '
'.afsnit('lav fart op ad bakke','
Hvis rullernes vægt giver en god acceleration og god topfart når der køres ligeud, men farten så falder meget når der køres op af en lille bakke så kan det være fordi koblingstrykfjederen er for slap.
').'

'.afsnit('noget med ruller og koblingstrykfjeder','
Hvis koblingstrykfjederen er for stram er det ikke sikkert at rullerne er tunge nok til af få remmen helt ud i det yderste af de forreste remskiver og dermed er topfarten lavere.
').'

'.afsnit('dårlig ydelse','
• variator slidt eller ikke smurt nok
• slidt eller knækket koblingstrykfjeder
• koblingsbelægning eller koblingsklokke slidt
• fedt på koblingsbelægning
• kilerem er slidt
').'

'.afsnit('kobling slipper ikke helt','
• svage eller knækket koblingsbakkefjedre
• forkert justeret tomgangsskrue
').'

'.afsnit('motoren kan køre men scooteren kan ikke','
• slidt/skadet kilerem
• skadet remskiver
• slidt/knækket/deform koblingstrykfjeder
• koblingsbelægning defekt/slidt
• skadet reduktionsgear
').'

'.afsnit('motor fejl tænder ved begyndende kørsel eller scooteren hopper pludseligt','
• koblingstrykfjeder knækket
• koblingsklokke og kobling sidder fast
• noget med koblingen er defekt/slidt
').'

'.afsnit('dårlig kørsel i starten (dårlig kørsel op af bakke)','
• slidt/skadet kilerem
• slidte ruller
• slidt/knækket/deform koblingstrykfjeder
• fedt på kilerem
').'

'.afsnit('sprængt kilerem','
Der er nogen der af og til skriver om at deres kilerem er sprængt og hvad grunden kan være.
'.visbilled('1', 'billed3233.jpg', 'sprængt kilerem', false, true).'
Jeg vil tro det skyldes dårlig kvalitet.
').'

'.afsnit('ødelagt variator','
En dag begyndte min variator at larme og vibraer og ændre gearing ureglmæssigt.
Det var fordi at den yderste remskive ved kobingen og cylinderen med sporene var gået fra hinanden.
'.visbilled('1', 'billed3272.jpg', 'ødelagt variator', false, true).'
Jeg ved ikke om det er muligt at lave ved svejsning for eksempel men jeg købte nye remskiver og kobling også virkede det igen.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
