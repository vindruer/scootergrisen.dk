<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "3 hjulet knallerter, scootere, vareknallerter, invalideknallerter, trikes";
$overskrift = "3 hjulet knallerter, scootere, vareknallerter, invalideknallerter, trikes";
$metadescription = "oversigt med 3 hjulet scooter og knallert køretøjer som er egnet til personer med handikap eller som varetransport";

$databasecenter = array(

'
introduktion
' => '
Her på siden samler jeg information om 3 hjulet scootere og knallerter som findes i danmark.
Køretøjerne betegnes tit som invalideknallert da en del af dem er egnet personer med handikap som ikke ville kunne køre på en 2 hjulet.

Hvis du kender flere 3 hjulet modeller så '.kontaktmig().' gerne.

Her følger de 3 hjulet scootere som jeg kender til sorteret efter om de har elektrisk motor, 4 takt motor eller 2 takt motor.
'

,'
modeller med elektrisk motor
' => '
'
.galleriholder(array(
    galleri('scooter', 'altomevt.php', 'evt3w', 'EVT 3w')
   ,galleri('scooter', 'altomnorsjo.php', 'norsjocarrierelectronic', 'norsjö carrier electronic')
   ,galleri('scooter', 'altomswap.php', 'swap3', 'Swap 3')
   ,galleri('scooter', 'manglerdata.php', 'transportel1200combi', 'Transportel 1200 combi')
   ,galleri('scooter', 'manglerdata.php', 'tugger', 'Tugger')
))
.'
'

,'
modeller med 4 takt motor
' => '
'
.galleriholder(array(
    galleri('scooter', 'manglerdata.php', 'mgbdelivery', 'MGB Delivery')
   ,galleri('scooter', 'altomnorsjo.php', 'norsjocarrier4stroke', 'norsjö carrier 4 stroke')
   ,galleri('scooter', 'altomsym.php', 'symfiddle3hjul', 'Sym Fiddle 3 hjul')
   ,galleri('scooter', 'altomsym.php', 'symorbit3hjul', 'Sym Orbit 3 hjul')
   ,galleri('scooter', 'altomtrilet.php', 'triletac504t', 'Trilet AC50 4T')
))
.'
'

,'
modeller med 2 takt motor
' => '
'
.galleriholder(array(
    galleri('scooter', 'altomderbi.php', 'derbiatlantis3hjul', 'Derbi Atlantis 3 hjul')
   ,galleri('scooter', 'altomkreidler.php', 'kreidlerjigger3hjul', 'Kreidler Jigger 3 hjul')
   ,galleri('scooter', 'altompgo.php', 'pgop3knallert', 'PGO P3 Knallert')
   ,galleri('scooter', 'altompgo.php', 'pgop3magnum', 'PGO P3 Magnum')
   ,galleri('scooter', 'altompgo.php', 'pgotrike', 'PGO Trike')
   ,galleri('scooter', 'altompiaggio.php', 'piaggioape', 'Piaggio Ape')
   ,galleri('scooter', 'altomtgb.php', 'tgbdelivery3hjul', 'TGB Delivery 3 hjul')
   ,galleri('scooter', 'altomtrilet.php', 'triletlc50', 'Trilet LC50')
   ,galleri('scooter', 'altomtrilet.php', 'trilet2000m', 'Trilet 2000M')
   ,galleri('scooter', 'altomtrilet.php', 'trilet2000h', 'Trilet 2000H')
   ,galleri('scooter', 'altomtrilet.php', 'trilet2000', 'Trilet 2000')
   ,galleri('scooter', 'altomtrilet.php', 'triletr5', 'Trilet R5')
   ,galleri('scooter', 'altomtrilet.php', 'triletveteran', 'Trilet Veteran')
   ,galleri('scooter', 'manglerdata.php', 'simsonalbatros', 'Simson Albatros')
   ,galleri('scooter', 'altomsecma.php', 'secmafuntech', 'Secma Fun Tech')
   ,galleri('scooter', 'manglerdata.php', 'socaflea', 'Soca Flea')
   ,galleri('scooter', 'altomtgb.php', 'tgbtrigger', 'TGB Trigger')
))
.'
'

,'
specielle dele
' => '
I det følgende skriver om jeg dele der primært findes på 3 hjulet scootere og knallerter.
'

,'
differential gear
' => '
Når man køre lige ud rotere alle 3 hjul med samme hastighed men når man drejer vil hjul på samme aksel rotere med forskellig hastighed.
Hvis hjulene sidder på samme aksel (uden differential gear) så vil dækkene blive vredet mod jorden i det man drejede.

Et differential gear giver hjulene mulighed for at rotere med forskellig hastighed så man undgår dette vred.

Her ses differential gearet på en PGO TR3.
'.visbilled('1', 'billed1746.jpg', 'differential på PGO TR3', false, true).'
'.visbilled('1', 'billed3650.jpg', 'PGO TR-3 differential gear', false, true).'
'.visbilled('1', 'billed3651.jpg', 'PGO TR-3 differential gear', false, true).'

Her ses en Swap 3 som jeg ikke ved om har differential gear.
'.visbilled('1', 'billed1126.jpg', 'SWAP 3 bagfra', false, true).'
'

,'
bakgear
' => '
D for Drive. Kør frem.
'.visbilled('1', 'billed2382.jpg', 'gear vælger på PGO TR3', false, true).'
N for Neutral. Frigear.
'.visbilled('1', 'billed2383.jpg', 'gear vælger på PGO TR3', false, true).'
R for Reverse. Kør baglæns.
'.visbilled('1', 'billed2384.jpg', 'gear vælger på PGO TR3', false, true).'

Her ses bakgearvælgeren fra PGO P3 knallert/Magnum (fra Medico Nord).

Her er fremadkørsel valgt.
'.visbilled('1', 'billed3394.jpg', 'gear vælger på PGO P3 knallert/magnum', false, true).'
Her er baglænskørsel valgt.
'.visbilled('1', 'billed3395.jpg', 'gear vælger på PGO P3 knallert/magnum', false, true).'
'

,'
bak alarm
' => '
Bak alarm giver en lyd når der bakkes så folk kan høre man bakker.
'

,'
parkeringsbremse
' => '
Parkeringsbremsen kan for eksempel være en pind som kan holde bremsegrebet inde så bremsen er aktiveret selv når man giver slip.

Her er parkeringsbremsen slået fra.
'.visbilled('1', 'billed3396.jpg', 'parkeringsbremse på PGO P3 knallert/magnum', false, true).'
Her er parkeringsbremsen slået til.
'.visbilled('1', 'billed3397.jpg', 'parkeringsbremse på PGO P3 knallert/magnum', false, true).'
'

,'
ekstra udstyr
' => '
Da 3 hjulet scootere ofte bruges af personer med handikap kan der til nogle modeller fås ekstra udstyr alt efter personens handikap/ønske.

Her er noget af det ekstra udstyr der kan fås.

'.listemedgrafik(array(
    'Ekstra støddæmper ved baghjul (så der er 2 støddæmpere i stedet for 1).'
   ,'Ryglæn.'
   ,'Armlæn.'
   ,'Stokkeholder.'
   ,'Rollatorholder.'
   ,'Gashåndtag i venstre side (i stedet for højre side).'
   ,'Gaspedal ved fod.'
   ,'Lav sædehøjde.'
   ,'Fodbremse (hvis man ikke har kræfter nok til håndbremse).'
   ,'Til TGB Delivery fås en elektrisk "varmeboks" til at holde maden varm.'
   ,'Norsjö carrier 4 stroke, Norsjö carrier electronic og Piaggio Ape fås med forskellige lad.'
))
.'
'

,'
ombygning
' => '
'.afsnit('hastighed','
Da mange kunder til 3 hjulet scootere nok ikke har kørekort så fås de mange invalideknallerter kun som lille knallert (30 km/t).

Det kan godt lade sig gøre at lave en 45 km/t 3 hjulet scooter der er bare ikke så mange kunder til det.
PGO TR3 fås både som 30 og 45 km/t.

3 hjulet scooter må køre på vej, cykelsti og gågade hvis specielt ærinde for eksempel læge eller butik.
På gågade må man maksimalt køre 6 km/t.
').'

'.afsnit('generelt om ombygning','
Hvis man vil ombygge en scooter så skal man søge færdselsstyrelsen om godkendelse.
Man kan søge om 30 og 45 km/t.
').'

'.afsnit('ombyggere','
Her er nogen af de firmaer der køber 2 hjulede scootere og ombygger dem til 3 hjulet og hvilke modeller de laver.

'.afsnit('power wheels','
'.ahref('http://www.power-wheels.dk', 'www.power-wheels.dk').' ombygger 2 hjulet scootere til 3 hjulet.
Udover at der monteres et ekstra hjul bliver stellet også galvaniseret.

'.afsnit('power wheels ombygger følgende modeller','
Derbi Atlantis.
Sym Fiddle II.
Sym Orbit 4 takt.
TGB Delivery.
').'
').'

'.afsnit('medico nord','
'.ahref('http://www.mediconord.dk', 'www.mediconord.dk').'

'.afsnit('medico nord ombygger følgende modeller','
PGO Dr Big ombygges til P3 Magnum.
PGO Hot ombygges til P3 Knallert.
').'
').'

'.afsnit('C Reinhardt','
'.ahref('http://www.c-reinhardt.dk', 'www.c-reinhardt.dk').'

'.afsnit('C Reinhardt ombygger følgende modeller','
PGO Dr Big ombygges til PGO TR3.
PGO T-Rex ombygges til PGO TR3.
').'
').'

').'
'

,'
links
' => '
Her er links til hjemmesider der har relation til 3 hjulet scootere og knallerter.
<!-- Server not found '.ahref('http://www.sahva-knallert.dk/', 'www.sahva-knallert.dk').' -->
'.listemedgrafik(array(
    ahref('http://www.power-wheels.dk', 'www.power-wheels.dk')
   ,ahref('http://www.sportster.dk', 'www.sportster.dk')
   ,ahref('http://www.cr-mobility.dk', 'www.cr-mobility.dk')
   ,ahref('http://www.mediconord.dk', 'www.mediconord.dk')
   ,ahref('http://bike-shoppen.dk/Scootere/Handicapscooter.aspx', 'bike-shoppen.dk')
   ,ahref('http://3hjulede.cordes.dk/', '3hjulede.cordes.dk')
   ,ahref('http://www.hmi-basen.dk/', 'hmi-basen.dk')
))
.'
'

,'
video
' => '
<!--ignore-->
<div style="text-align: center; margin: 0 auto;">
<div style="margin-bottom: 1em;">PGO TR-3 invalideknallert på messe med C. Reinhardt</div>
<div style="margin-bottom: 1em;">
<video width="320" height="240" style="width: 640px; height: 480px;" controls preload="metadata" poster="/scooterhjemmeside/billeder/posters/pgotr3pamesse.png" onloadedmetadata="this.volume=0.5;">
   <source src="/scooterhjemmeside/videoer/pgotr3pamesse.ogv" type="video/ogg">
   <source src="/scooterhjemmeside/videoer/pgotr3pamesse.mp4" type="video/mp4">
   <source src="/scooterhjemmeside/videoer/pgotr3pamesse.webm" type="video/webm">
   <track kind="subtitles" src="/scooterhjemmeside/track/pgotr3pamesse_da.vtt" srclang="da" label="Dansk VTT" default>
   <track kind="subtitles" src="/scooterhjemmeside/track/pgotr3pamesse_da.srt" srclang="da" label="Dansk SRT">
   Da din browser ikke understøtter HTML 5 &lt;video&gt; kan videoen ikke afspilles her.
   '.visbilled('1', 'posters/pgotr3pamesse.png', 'PGO TR-3 invalideknallert på messe').'
</video>
</div>

<div style="margin-bottom: 1em;">
Videoen kan hentes i følgende formater : 
   '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/pgotr3pamesse.wmv', 'wmv')
.' '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/pgotr3pamesse.ogv', 'ogv')
.' '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/pgotr3pamesse.mp4', 'mp4')
.' '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/pgotr3pamesse.webm', 'webm')
.'
</div>
<div style="margin-bottom: 1em;">Videoen stammer fra '.ahref('http://cr-mobility.dk/', 'cr-mobility.dk').'</div>
</div>
<!--ignore-->
'

,'
filer
' => '
I følgende fil samler jeg kataloger og andre filer til 3 hjulet scootere og knallert efterhånden som jeg finder dem.

'.visfil('1', 'scooterhjemmeside/download/3hjulet_filer.zip').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
