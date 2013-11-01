<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "DITech - 2 takt motor";
$overskrift = "DITech - 2 takt motor";
$metadescription = "forklaring af DITech motoren der er en 2 takt motor med direkte indsprøjtning som blandt andet findes på nogle Aprilia SR og Aprilia Scarabeo modeller";

$databasecenter = array(

'
introduktion
' => '
På denne side vil jeg samle det jeg kan finde om DITech motoren som kan findes i nogle modeller af Aprilia SR og Scarabeo.
'.visbilled('1', 'billed2677.jpg', 'Aprilia DITech motor', false, true).'

Jeg har lavet denne side fordi jeg havde nogen filer liggende og tænkte det ville være bedre at lægge dem på hjemmesiden så andre kan have glæde af dem.

Se også '.ahref('brandstofindsprojtning.php', 'Brændstofindsprøjtning').' og '.ahref('service_elektrisk.php#service_af_ecu', 'Service af ECU').'.
'

,'
filer
' => '
'
.visfil('1', 'scooterhjemmeside/download/aprilia_sr_brugermanual.pdf')
.visfil('1', 'scooterhjemmeside/download/aprilia_sr_servicemanual.pdf')
.visfil('1', 'scooterhjemmeside/download/aprilia_sr_ditech_eldiagram.pdf')
.'
'
.visfil('1', 'scooterhjemmeside/download/aprilia_scarabeo_servicemanual.pdf')
.'
'
.visfil('1', 'scooterhjemmeside/download/aprilia_ditech_quick_workshop_manual.pdf')
.'
'
.visfil('1', 'scooterhjemmeside/download/aprilia_ditech_interface_ecu_maps.zip')
.'
'
.visfil('1', 'scooterhjemmeside/download/synerject_asdi_sepi.pdf')
.'
'
.visfil('1', 'scooterhjemmeside/download/aprilia_ditech_updating.pdf')
.'
Hvis du har flere filer så '.kontaktmig().' gerne.
'

,'
videoer
' => '
'.afsnit('afmonter injector (removal of the injection system)', '
<!--ignore-->
<video id="ditechvideo5" width="320" height="240" controls preload="metadata" poster="/scooterhjemmeside/billeder/posters/ditech_removal_of_the_injection_system.png">
   <source src="/scooterhjemmeside/videoer/ditech_removal_of_the_injection_system.ogv" type="video/ogg">
   <source src="/scooterhjemmeside/videoer/ditech_removal_of_the_injection_system.mp4" type="video/mp4">
   Da din browser ikke understøtter HTML 5 &lt;video&gt; kan videoen ikke afspilles her.
   '.visbilled('1', 'posters/ditech_removal_of_the_injection_system.png', 'afmonter injector (removal of the injection system) poster').'
</video>
<!--ignore-->

Videoen kan hentes i følgende formater : 
   '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_removal_of_the_injection_system.wmv', 'wmv')
.' '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_removal_of_the_injection_system.ogv', 'ogv')
.' '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_removal_of_the_injection_system.mp4', 'mp4')
.'
').'

'.afsnit('skift injector forsejlingsring (changing the injector ring seal)', '
<!--ignore-->
<video id="ditechvideo1" width="320" height="240" controls preload="metadata" poster="/scooterhjemmeside/billeder/posters/ditech_changing_the_injector_ring_seal.png">
   <source src="/scooterhjemmeside/videoer/ditech_changing_the_injector_ring_seal.ogv" type="video/ogg">
   <source src="/scooterhjemmeside/videoer/ditech_changing_the_injector_ring_seal.mp4" type="video/mp4">
   Da din browser ikke understøtter HTML 5 &lt;video&gt; kan videoen ikke afspilles her.
   '.visbilled('1', 'posters/ditech_changing_the_injector_ring_seal.png', 'skift injector forsejlingsring (changing the injector ring seal) poster').'
</video>
<!--ignore-->

Videoen kan hentes i følgende formater : 
   '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_changing_the_injector_ring_seal.wmv', 'wmv')
.' '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_changing_the_injector_ring_seal.ogv', 'ogv')
.' '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_changing_the_injector_ring_seal.mp4', 'mp4')
.'
').'

'.afsnit('monter injector (refitting the injection system)', '
<!--ignore-->
<video id="ditechvideo4" width="320" height="240" controls preload="metadata" poster="/scooterhjemmeside/billeder/posters/ditech_refitting_the_injection_system.png">
   <source src="/scooterhjemmeside/videoer/ditech_refitting_the_injection_system.ogv" type="video/ogg">
   <source src="/scooterhjemmeside/videoer/ditech_refitting_the_injection_system.mp4" type="video/mp4">
   Da din browser ikke understøtter HTML 5 &lt;video&gt; kan videoen ikke afspilles her.
   '.visbilled('1', 'posters/ditech_refitting_the_injection_system.png', 'monter injector (refitting the injection system) poster').'
</video>
<!--ignore-->

Videoen kan hentes i følgende formater : 
   '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_refitting_the_injection_system.wmv', 'wmv')
.' '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_refitting_the_injection_system.ogv', 'ogv')
.' '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_refitting_the_injection_system.mp4', 'mp4')
.'
').'

'.afsnit('undersøg kompressor (checking the compressor unit)', '
<!--ignore-->
<video id="ditechvideo2" width="320" height="240" controls preload="metadata" poster="/scooterhjemmeside/billeder/posters/ditech_checking_the_compressor_unit.png">
   <source src="/scooterhjemmeside/videoer/ditech_checking_the_compressor_unit.ogv" type="video/ogg">
   <source src="/scooterhjemmeside/videoer/ditech_checking_the_compressor_unit.mp4" type="video/mp4">
   Da din browser ikke understøtter HTML 5 &lt;video&gt; kan videoen ikke afspilles her.
   '.visbilled('1', 'posters/ditech_checking_the_compressor_unit.png', 'undersøg kompressor (checking the compressor unit) poster').'
</video>
<!--ignore-->

Videoen kan hentes i følgende formater : 
   '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_checking_the_compressor_unit.wmv', 'wmv')
.' '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_checking_the_compressor_unit.ogv', 'ogv')
.' '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_checking_the_compressor_unit.mp4', 'mp4')
.'
').'

'.afsnit('monter en ny krumtap (fitting a new crankshaft)', '
<!--ignore-->
<video id="ditechvideo3" width="320" height="240" controls preload="metadata" poster="/scooterhjemmeside/billeder/posters/ditech_fitting_a_new_crankshaft.png">
   <source src="/scooterhjemmeside/videoer/ditech_fitting_a_new_crankshaft.ogv" type="video/ogg">
   <source src="/scooterhjemmeside/videoer/ditech_fitting_a_new_crankshaft.mp4" type="video/mp4">
   Da din browser ikke understøtter HTML 5 &lt;video&gt; kan videoen ikke afspilles her.
   '.visbilled('1', 'posters/ditech_fitting_a_new_crankshaft.png', 'monter en ny krumtap (fitting a new crankshaft) poster').'
</video>
<!--ignore-->

Videoen kan hentes i følgende formater : 
   '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_fitting_a_new_crankshaft.wmv', 'wmv')
.' '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_fitting_a_new_crankshaft.ogv', 'ogv')
.' '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/videoer/ditech_fitting_a_new_crankshaft.mp4', 'mp4')
.'
').'

<!--ignore-->
<script type="text/javascript">

   video1 = document.getElementById("ditechvideo1");
   video2 = document.getElementById("ditechvideo2");
   video3 = document.getElementById("ditechvideo3");
   video4 = document.getElementById("ditechvideo4");
   video5 = document.getElementById("ditechvideo5");

   video1.volume = 0.5;
   video2.volume = 0.5;
   video3.volume = 0.5;
   video4.volume = 0.5;
   video5.volume = 0.5;

</script>
<!--ignore-->
'

,'
ECU fejlkoder
' => '
Dette er hvad jeg har læst mig til men jeg har aldrig prøvet det selv så ikke sikkert det er rigtigt.

Der er noget som vist nok hedder "dealer mode" hvor man ud fra en lampe der blinker et bestemt antal gange kan finde ud af om der er noget i vejen med scooteren og hvor fejlen er.

'.afsnit('for at komme i "dealer mode"','
Sluk motoren og lad tændingen stå ved OFF.
Drej gashåndtaget hele vejen og hold den der.
Drej tændingen til ON uden at starte motoren.
INJECTION CHECK tænder i 2 sekunder.
Når INJECTION CHECK slukker så giv slip på gashåndtaget inden der er gået 3 sekunder.
Hvis alt gik efter planen så er scooteren nu i "dealer mode".
').'

'.afsnit('antal blink ved fejlkode','
Når "dealer mode" er aktiveret vil INJECTION CHECK begynder at blinke hvis der er nogen fejl.
Tæl hvor mange gange lampen blinker.
Der er 4 sekunder mellem hvert blink.

... det er noget men den kan blinke igen hvis der er flere fejl men ved ikke lige så meget om hvordan.
Lampen gentager blinkesekvenserne 4 gange.

Hvis der nu er 2 fejl så bliver blinkesekvensen sådan her...
[10 - 12] ... [10 - 12] ... [10 - 12] ... [10 - 12]

Sammenlign antal blink med denne tabel.
'.visbilled('1', 'billed2686.jpg', 'DITech lampe blink tabel fejlkoder', false, true).'
').'

'.afsnit('nulstil','
Når man har rettet fejlen på scooteren kan man køre "system check" 4 gange for nulstille så lampen ikke indikere at der er fejl mere.
Jeg ved så ikke lige hvad "system check" er for noget.
Måske betyder det at man skal dreje nøglen til OFF også til ON 4 gange og lade systemet starte op hver gang.
').'

'.afsnit('lampe prioitet','
1 (højeste) - blinker
2 - lyser konstant
3 - lyser ikke
').'

'

,'
gameboy interface seriel kabel forbindelser
' => '
Her kan man se hvordan ledningerne i stikkene mellem gameboy DITech interfacet og computerens seriel port er forbundet.
Kan vel bruges til at lave sit eget kabel.
'.visbilled('1', 'billed2687.jpg', 'aprilia ditech interface cartridge gameboy serial cable schematic db-9 ps/2', false, true).'
'

,'
aprilia SR typer
' => '
Der findes vist en del forskellige Aprilia SR både med karburator og med Purejet og med Ditech motor.

Motormodellen C364M er med karburator og angives også som C 364.
Motormodellen C361M er med Purejet motor og angives også som IE 361.
Motormodellen med ditech motor angives også som IE 50.

IE står for electronic injection.

'.visbilled('1', 'billed2701.jpg', 'ie 361 ie 50 c 364', false, true).'
'.visbilled('1', 'billed2702.jpg', 'aprilia sr motortyper', false, true).'
'

,'
diverse billeder
' => '
Her ses nogle billeder fra Aprilia SR50 DITech.
'.visbilled('1', 'billed1404.jpg', 'aprilia DITech motor', false, true).'
'.visbilled('1', 'billed1354.jpg', 'aprilia DITech motor cutaway', false, true).'
'.visbilled('1', 'billed2510.jpg', 'aprilia DITech motor cutaway', false, true).'
'.visbilled('1', 'billed2884.jpg', 'injectorenhed', false, true).'
'.visbilled('1', 'billed2885.jpg', 'DITech injector slanger tegning', false, true).'

Der hvor der normalt ville sidde en karburator sidder i stedet et gasspjældshus (throttle body på engelsk).
'.visbilled('1', 'billed0846.jpg', 'aprilia DITech throttlebody reed valve indsugningsstuds', false, true).'
Benzin og luft sprøjtes ind fra topstykket hvor tændrøret normalt sidder.
'.visbilled('1', 'billed0847.jpg', 'aprilia DITech motor 2 takt direkte indsprøjtning', false, true).'
'.visbilled('1', 'billed0844.jpg', 'aprilia DITech topstykke cylinder', false, true).'
'.visbilled('1', 'billed0845.jpg', 'aprilia DITech stempel', false, true).'
Her ses en del som rammes af krumtappen og laver komprimeret luft som hjælper med at sprøjte benzin og luft ind i forbrændingskammeret tror jeg nok.
'.visbilled('1', 'billed0849.jpg', 'aprilia DITech kompressor', false, true).'
'.visbilled('1', 'billed0848.jpg', 'aprilia DITech', false, true).'

Her ses benzin injectoren og luft injectoren og deres gummiringe.
'.visbilled('1', 'billed1467.jpg', 'aprilia DITech benzin og luft injector', false, true).'
Her ses luft injectoren.
'.visbilled('1', 'billed1405.jpg', 'aprilia DITech luft injector', false, true).'

Den sorte spids er en del forbrændingskammeret.
'.visbilled('1', 'billed1406.jpg', 'aprilia DITech forbrændingskammer topstykke', false, true).'
'.visbilled('1', 'billed1407.jpg', 'aprilia DITech indsprøjtning', false, true).'

Her ses en luft injector før rengøring.
'.visbilled('1', 'billed2890.jpg', 'aprilia DITech luft injector', false, true).'
...og efter rengøring.
'.visbilled('1', 'billed2891.jpg', 'aprilia DITech luft injector rengjort', false, true).'
Her ses luft injectoren som sidder monteret i topstykket.
'.visbilled('1', 'billed2892.jpg', 'aprilia DITech luft injector rengjort', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
