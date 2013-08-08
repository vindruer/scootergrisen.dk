<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "brændselscelle";
$overskrift = "brændselscelle";
$metadescription = "information om brændselscelleteknologi";

$databasecenter = array(

'
introduktion
' => '
Brændselsceller kan bruges i stedet for batterier på en elektrisk scooter.
Brændselsceller skal ikke oplades ligesom et batteri men får i stedet tilføjet brændstof i form af for eksempel brint fra en trykflaske.
Trykflasken kan så fyldes op eller skiftes når den er tom.

Brændselscelle teknologien er meget ny i forhold til forbrændingsmotoren.
Derfor findes der så vidt jeg ved ikke nogle scootere i danmark med brændselsceller.
Der kommer sikkert til at gå mange år før man kan købe en scooter med brændselsceller men her er alligevel noget information.

Hvis du kan bidrage med noget information til denne side eller har rettelser så må du gene skrive i '.forummet().' eller '.kontaktemig().'.
'

,'
scooter med brændselscelle
' => '
Her ses en scooter som bruger brændselsceller.
'.visbilled('1', 'billed0218.jpg', 'brændselscelle scooter', false, true).'
'

,'
hvad er en brændselscelle ?
' => '
En brændselscelle består af en katode, en membran og en anode.
Katoden svare til minus terminalen (-) på et batteri.
Anoden svare til plus terminalen (+) på et batteri.

En brændselscelle laver elektricitet når der tilføjes brint til katoden og ilt til anoden.

Elektriciteten kan drive en elektrisk motor som tilslutte mellem katoden og anoden.
'.visbilled('1', 'billed0220.jpg', 'brændselscelle', false, true).'

Ilt findes i luften så man skal muligvis kun medbringe en brint beholder på scooteren.

Udstødningen består kun af vand og varme.

En brændselscelle har ingen bevægelige dele.

Den egentlige teknologi ligger i membranen.

Her ses en brændselscelle på en anden måde.
'.visbilled('1', 'billed0219.jpg', 'brændselscelle', false, true).'
'.visflash('1', 'flash0001.swf', 'brændselscelle animation', true, '500', '400').'
Ilten tilføjes her fra en trykflaske.

'.afsnit('et brændselscelle anlæg på en scooter kunne bestå af','
En stabel brændselsceller.
En trykflaske med komprimeret brint.
En trykregulator.
Måske en ilt flaske.
').'

'.afsnit('Volt, ampere og watt','
1 brændselscelle kan for eksempel yde en spænding på 0,6 volt mellem katode og anode.

Ved at stable flere brændselsceller kan man opnå en højere spænding.

10 celler giver 6 volt.
20 celler giver 12 volt.
80 celler giver 48 volt.
400 celler giver 240 volt.

Brændselscellens ampere bestemmes af cellens størrelse/areal.
1 cm² kan for eksempel yde 0,5 ampere.
Hvis en brændselscelle er 4 x 5 cm så giver det et areal på 20 cm².

1 celle på 20 cm² giver 10 ampere.

20 celler på 4 x 5 cm giver 12 volt * 10 ampere = 120 watt.
').'

'.afsnit('brændselscelle typer','
PEM - protone exchange membrane - bruger ren brint
DMFC - direct methanol fuel cell - bruger metanol
SOFC - solid oxide fuel cell - faststof højtemperatur
').'

'.afsnit('brint eller metanol','
i stedet for at bruge brint kan man også bruge metanol.
Brint skulle være det reneste hvorimod metanol giver CO2 i udstødningen.
Metanol skulle være lettere at opbevare.
').'

'.afsnit('trykregulator','
Her ses en trykregulator som justere trykket der kommer ud af trykflasken til et passende tryk til brændselscellerne.
'.visbilled('1', 'billed0221.jpg', 'trykregulator i brændselscelle scooter', false, true).'
').'
'

,'
brint på flaske
' => '
En af udfordringerne ved at bruge brint er hvordan man skal opbevare det på en sikker måde.

Hvis man under normalt tryk og temperatur har 1 liter benzin og vil have den samme mængde energi i form af brint så vil brinten fylde over 3000 liter.

Det ville være upraktisk at køre rundt med 3000 liter brint.

For at få brinten til at fylde mindre findes der forskellige måder at opbevarer den på.

Brint kan komprimeres og lagres på en trykflaske.
Brint kan køles hvorved brint bliver flydende og fylder mindre.
Brint kan lagres på flasker med metalpulver (metalhydrid) som er mere sikker end de andre metoder da brinten her lagres ved meget lavere tryk.

Komprimeres brint til 200 bar fylder det 13 gange så meget som benzin (ved samme energi mængde).
Komprimeres brint til 700 bar fylder det 6,4 gange så meget som benzin (ved samme energi mængde).
Jo højere tryk jo mere brint kan man have i en trykflaske men jo mere farligt kan det blive hvis der skulle ske en ulykke.

Køles brint kan man få det til at fylde 3,6 gange så meget som benzin (ved samme energi mængde).

Ved at bruge metalpulver (metalhydrid) i flaskerne kan man opbevare brinten ved meget lavere tryk end de andre metoder og man kan komme helt ned til at energien i 1,7 liter brint svare til energien i 1 liter benzin.
'

,'
fordele ved brændselscelle teknologi
' => '
Udstødningen består kun af vand og varme (ved brug af brint).
Ingen bevægelige dele.
Meget færre dele i forhold til forbrændingsmotoren.
Lav vedligeholdelse.
'

,'
problemer ved brændselscelle teknologi
' => '
Brint er meget brandfarlig.
Trykflasker med højt tryk kan være farlige.
'

,'
hvornår ser vi en brændselscelle scooter på gaden ?
' => '
Hvis det nogensinde sker så kommer der sikkert til at gå mange år.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
