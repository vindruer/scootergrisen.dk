<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "tilkøring af ny scooter/knallert eller nye motor dele";
$overskrift = "tilkøring af ny scooter/knallert eller nye motor dele";
$metadescription = "info om tilkøring af ny scooter/knallert eller nye dele";

$databasecenter = array(

'
tilkøring af 4 takt
' => '
En ny scooter skal tilkøres så delene slides til på den rigtige måde.

Korrekt tilkøring skulle forlænge motorens liv.

Tilkøring vil sige at køre roligt de første cirka 1000 km og ikke køre lange ture eller med gashåndtaget fuldt drejet i længere tid.

Hvis man sætter ny cylinder, stempel, stempelringe eller krumtap i en brugt motor så skal delene også tilkøres.

Dette eksempel stammer fra Kymco Super 8 4T manualerne og giver en ide om tilkøring men antal km kan variere fra manual til manual.
Skyteam Dax brugermanualen skriver for eksempel at tilkørslen er 1600 km.

'.afsnit('Generelle råd ved tilkøring','
Varm motoren op i 2-3 minutter inden du køre så olien bliver varm og smører bedst.
Kør under 30 km/t de første 1000 km.
Undgå pludselig acceleration.
Variere hastigheden under kørslen fremfor at køre med samme hastighed hele tiden.
Kør ikke lange ture.
Kør ikke med fuld gas.
Lad ikke motoren stå i tomgang i længere tid i varmt vejr da den let overophedes.
').'

'.afsnit('0 til 150 km','
Undgå at dreje gashåndtaget mere end 1/3 i længere tid.
Stop motoren hver time og lad den køle 5-10 minutter.
Variere hastigheden under kørslen fremfor at køre med samme hastighed hele tiden.
Undgå pludselig og længere varende bremsninger. På den måde sikre man at bremsebelægningens friktionsmateriale sætter sig korrekt.
').'

'.afsnit('150 til 500 km','
Undgå at dreje gashåndtaget mere end halvt i længere tid.
').'

'.afsnit('500 til 1000 km','
Undgå at dreje gashåndtaget mere end 3/4 i længere tid.
').'

'.afsnit('over 1000 km','
Undgå at køre med fuld gas i lang tid.
Variere hastigheden engang imellem.
').'

Ifølge "Haynes - Scooters" bogen er der ikke nogen ide i at holde scooter på en bestemt maksimum hastighed under tilkørslen i stedet for er det meningen at man ikke skal blive ved med at belaste motoren og man skal variere motor hastigheden.

I Aprilia SportCity One brugermanualen står at man om muligt skal køre på veje med mange sving og/eller i bakkelandskaber, hvor motoren, ophænget og bremserne udsættes for en effektiv tilkørsel.

Hvis motoren bruges for hårdt de første 1000 km kan cylinder, stempel og stempelringe blive slidt unormalt eller sætte sig fast.
'

,'
tilkøring af 2 takt
' => '
Den her seddel stammer fra en Leone Swan med 2 takt motor.
'.visbilled('1', 'billed3003.jpg', 'important notice fra seddel på Leone Swan', false, true).'
Der står at første gang man fylder benzin i benztintanken skal man også tilføje 25ml 2 takt motorolie per liter benzin for at undgå slid og skader og for at motoren kan tilkørres bedre.
Man skal også tilføje 2 takt motorolie i olietanken.

Så selvom motoren får olie fra olietanken/oliepumpen så skal den altså lige i starten (den første tankfuld) havde ekstra olie som man giver ved at tilføje olie i benzintanken.



Det her mærke stammer fra en Generic scooter.
'.visbilled('1', 'billed3360.jpg', 'attention mærke fra generic scooter', false, true).'
Der står at man skal tilføje 2,5 % special 2 takts motorolie i benzinen før man starter det nye køretøj.
'

,'
olieskift
' => '
Der variere lidt fra manual til manual hvornår man skal skifte olie man her er hvad der typisk kan stå for en scooter med 4 takt motor.

Når den nye scooter har kørt 300 km skal motorolien og gearolien skiftes.

Efter 1000 km skal motorolien skiftes igen.
Nogle manualer skriver at gearolien også skal skiftes ved 1000 km.

Herefter skal motorolien skiftes for hver 1000-2000 km.
Gearolien skal skiftes ved 5000 km og herefter for hver 5000 km.

Jeg har også læst om scootere hvor man slet ikke skal skifte gearolie.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
