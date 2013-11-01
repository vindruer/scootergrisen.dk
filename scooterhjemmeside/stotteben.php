<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "støtteben";
$overskrift = "støtteben";
$metadescription = "forklaring af en scooters sidestøtteben, centerstøtteben, støttebenskontakt";

$databasecenter = array(

'
støtteben
' => '
Her ses et centerstøtteben.
'.visbilled('1', 'billed1795.jpg', 'kymco super 8 4T centerstøtteben', false, true).'
Støttebenet sidder fast med 2 bolte, 2 møtrikker og en dobbelt fjeder.
'.visbilled('1', 'billed1797.jpg', 'kymco super 8 4T centerstøtteben', false, true).'
'.visbilled('1', 'billed1796.jpg', 'kymco super 8 4T centerstøtteben', false, true).'
En gummidæmper søger for et blødt anslag mod motorblokken når støttebenet slås op og absorber motorens vibrationer under kørsel så støttebenet ikke sidder og rasler og slår mod motorblokken ved et bump i vejen.
'.visbilled('1', 'billed1803.jpg', 'kymco super 8 4T centerstøtteben gummidæmper', false, true).'
Fjederen kan afmonteres med et stykke ståltråd der er viklet som sig selv nogle gange.
Her har jeg brugt en hammer til at vippe fjederen af ved at holde hammeren mod støttebenet.
'.visbilled('1', 'billed1799.jpg', 'kymco super 8 4T montering af fjeder på centerstøtteben', false, true).'
Møtrikkerne kan afmonteres med et par gaffelnøgler.
'.visbilled('1', 'billed1798.jpg', 'kymco super 8 4T centerstøtteben afmontering af skrue og møtrik', false, true).'

Her ses dobbelt fjederen som er svejset sammen i enderne.
Bolten i venstre side af motoren (tætteste ved fjederen) var let af tage ud.
'.visbilled('1', 'billed1802.jpg', 'kymco super 8 4T centerstøtteben fjeder bolt møtrik', false, true).'

Bolten i højre side af motoren sad fast.

Jeg prøvede med WD-40 og at banke og presse bolte ud men det hjalp ikke og var svært at komme til så jeg lod den bare sidde.
'.visbilled('1', 'billed1801.jpg', 'smørring af støtteben med WD-40', false, true).'
'.visbilled('1', 'billed1800.jpg', 'smørring af støtteben med WD-40', false, true).'

Den bolt som jeg kunne få ud smurte jeg med fedt så den ikke sætter sig fast.

Her er støttebenet knækket af.
'.visbilled('1', 'billed3181.jpg', 'knækket støtteben', false, true).'
'

,'
støttebenskontakt
' => '
På nogle scootere findes en kontakt ved sidestøttebenet.
'.visbilled('1', 'billed1291.jpg', 'giantco stealth støttebenskontakt', false, true).'
'.visbilled('1', 'billed3345.jpg', 'støttebenskontakt', false, true).'
'.visbilled('1', 'billed2385.jpg', 'pgo støttebenskontakt', false, true).'
'.visbilled('1', 'billed3327.jpg', 'VGA Digita støttebenskontakt', false, true).'
Kontakten er en sikkerhedsfunktion så man ikke kan starte motoren når sidestøttebenet er slået ned.

Hvis sidestøttebenet var slået ned og af en eller anden grund sad fast og man startede motoren og kørte så kunne det være farligt når man skulle dreje til venstre og man ville muligvis kunne køre galt.

På Giantco scootere er støttebenskontakten forbundet med Pickup, CDI boks og tændingslås på den ene ledning og stelforbindelsen på den anden ledning.
'.visbilled('1', 'billed3315.jpg', 'diagram med støttebens forbindelse', false, true).'
Kontakten fungere ligesom en dødmandsknap (kill switch).

Hvis sidestøttebenet slås ud mens man køre så stopper motoren.

Jeg har af og til læst om problem med disse støttebenskontakter og om folk som slår dem fra fordi de ikke virker.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
