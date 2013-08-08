<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "controller - Elektrisk scooter";
$overskrift = "controller - Elektrisk scooter";
$metadescription = "information om den controller der sidder i elektriske scootere og som sender strøm til motoren";

$databasecenter = array(

'
controller
' => '
Her ses en controller.
'.visbilled('1', 'billed1095.jpg', 'scoopie 1500w controller SWEI SWK 152048 1500-2000W 48V JINHAU SHIWEI ELECTRON CO. LTD.', false, true).'
Controlleren indeholder en del elektronik.
'.visbilled('1', 'billed1418.jpg', 'Elektrisk motor controller fra EVT', false, true).'
Controlleren bestemmer hvor hurtigt motoren skal dreje ud fra hvor meget gashåndtaget er drejet.
Jo mere gashåndtaget drejes jo flere volt sender controlleren til motoren og jo hurtigere drejer motoren.

Her ses en controller på en Peugeot Scoot\'elec.
'.visbilled('1', 'billed2178.jpg', 'Peugeot Scoot\'elec controller', false, true).'
Her ses en controller på en EVT 4000e.
'.visbilled('1', 'billed0101.jpg', 'EVT 4000e controller', false, true).'
Her ses en controller fra en Giantco E-buddy.
'.visbilled('1', 'billed2177.jpg', 'Giantco E-buddy controller', false, true).'
Her ses en controller fra en Texas Whisper.
'.visbilled('1', 'billed2971.jpg', 'Texas Whisper controller', false, true).'
Controlleren er med en del stik forbundet med blandt andet batteri, motor, gashåndtag, bremsekontakter, instrumentpanel.
'.visbilled('1', 'billed1100.jpg', 'controller', false, true).'
'.visbilled('1', 'billed3133.jpg', 'controller med 10 ledninger', false, true).'
'.visbilled('1', 'billed1272.jpg', '25A Infineon Based Brushless Motor Controller', false, true).'
Fwd/Rev : Giver muligvis mulighed for at køre baglæns (bakgear).
Throttle : Håndtaget levere 1-4 volt afhængig af hvor meget man drejer på håndtaget.
Ebrake : Giver mulighed for at batterierne oplades når man bremser.
Hall sensor : Sensorer der sidder i motoren.
Cycle Analyst : Muligvis forbundet med instrumentpanelet for at give info om batteri spænding, hastighed osv.

Her ses en controller og de ting den er tilsluttet til.
'.visbilled('1', 'billed1306.jpg', 'controller 36V 30.5 LVP 22 AMP', false, true).'
Den viste kontroller stammer nok fra en cykel med de bremsegreb men det er sikkert forbundet på samme måde på en scooter.

Her ses en controller indefra.
'.visbilled('1', 'billed3092.jpg', 'controller elektronik bagplade taget af', false, true).'
'.visbilled('1', 'billed2986.jpg', 'controller elektronik', false, true).'
'.visbilled('1', 'billed3110.jpg', 'Shenzhen Sucteam Technology BL7228 controller', false, true).'
'.visbilled('1', 'billed3131.jpg', 'Shenzhen Sucteam Technology BL7228 controller', false, true).'
'.visbilled('1', 'billed3113.jpg', 'Shenzhen Sucteam Technology BL7228 controller', false, true).'
'.visbilled('1', 'billed3111.jpg', 'Shenzhen Sucteam Technology BL7228 controller', false, true).'
'.visbilled('1', 'billed3112.jpg', 'Shenzhen Sucteam Technology BL7228 controller', false, true).'

Her ses et controller printkort tæt på.
Der er en LED lampe som kan blinke og vist nok vise fejlkoder alt efter hvor mange gange den blinker.
'.visbilled('1', 'billed3152.jpg', 'controller elektronik rød LED', false, true).'
De 3 fase ledninger angives som U, V, W.
De 3 signaler fra hall sensorene angives også som U, V, W.
Det ser ikke ud til at U, V, og W skal have en bestemt farvet ledning fordi V og W farverne er omvendt for fase og hall sensor ledningerne.

Stelforbindelse til hall sensorene ser ud til at være angivet med et H med en streg under.
Strømmen til hall sensorene er angivet med ... svært at se.

Ukendt grøn ledning er angivet med RX1.

Rød ledning fra "batteri +" er angivet med D+.
'.visbilled('1', 'billed3153.jpg', 'controller elektronik', false, true).'
'.visbilled('1', 'billed3154.jpg', 'controller elektronik', false, true).'

'.visbilled('1', 'billed1307.jpg', 'controller elektronik', false, true).'

Her ses et klistermærke på en controller.
'.visbilled('1', 'billed3298.jpg', 'controller sort', false, true).'
'.visbilled('1', 'billed3297.jpg', 'controller klistermærke', false, true).'
'.visbilled('1', 'billed3326.jpg', 'motor ledning forklaring fase hall sensor', false, true).'
'.visbilled('1', 'billed3299.jpg', 'controller køleplade med kølepasta', false, true).'
'.visbilled('1', 'billed3300.jpg', 'controller elektronik fase c b a VM+ VSS-', false, true).'

Det store sorte stik forbindes til motoren.
De store røde stik forbindes til batterierne.
Det lille sorte stik må være til gashåndtaget.
Det lille hvide stik er måske til instrumentpanelet så man kan se hvor meget strøm der er på batterierne og om controlleren er overophedet.
'.visbilled('1', 'billed0650.jpg', 'EVT 4000e controller stik', false, true).'
'.visbilled('1', 'billed3130.jpg', '2 anderson SB stik i EVT scooter', false, true).'
Her ses et SB50 stik som laves af anderson power products.
SB50 kan bruges op til 50 ampere.
'.visbilled('1', 'billed3091.jpg', '2 polet anderson SB50 ampere stik', false, true).'
SB stikkene er kønsløse. Det vil sige har man 2 ens stik kan de forbindes.
'.visbilled('1', 'billed3119.jpg', '2 grå anderson SB stik', false, true).'


Her ses en controller med noget info på.
'.visbilled('1', 'billed1464.jpg', 'controller CK1-80', false, true).'
Der står blandet andet at gashåndtaget levere mellem 1,2 og 4,3 volt.

Her ses de forskellige stik fra controlleren.
'.visbilled('1', 'billed1465.jpg', 'controller stik', false, true).'

På eldiagrammet til Lynx ZQTD-690 er der på controlleren nogle ledninger som kaldes "phase sequence self-adaption" og "anti-theft alarm" og "speed limit".
'.visbilled('1', 'billed3015.jpg', 'ZQTD-690 controller diagram', false, true).'

'.afsnit('phase sequence self-adaption','
Jeg ved ikke hvad det betyder.
').'

'.afsnit('anti-theft alarm','
Formodentligt 2 stik til en alarm man kan købe som ekstra udstyr.

Rød : +48V aram power
Sort : -

Grøn : aram signal
Brun : motor rotate detection
Gul : +48V when aram

Der står "aram" men skulle nok står "alarm".
').'

'.afsnit('speed limit','
Det er et hastighedsbegrænsende stik som formodentligt begrænset scooteren til for eksempel 25 km/t når stikket er samlet og måske 55 km/t når det afskilles.

Der er en bruger som har skrevet til mig at der på ZQTD-960 controlleren er 2 speed limit grænser (måske enda 3).
Den anden skulle være omkring 40 km/t og aktiveres ved at forbinde hvid/rød til ... hinanden ? (connecting white/red wire to another).
Måske er der en tredie hastighed hvis man forbinder både grå og hvid/rød.
Jeg skrev til brugeren at der ikke var nogen hvid/rød ledning og brugeren skriver så at der mangler nogen ledninger på diagrammet.
').'

'.afsnit('phase angle','
På controlleren kan står "Phase angle: 120°", "Degree : 120°" eller lignende.
Det betyder måske noget med den vinkel hall sensorene er placeret iforhold til hinanden i motoren men jeg er ikke sikker.

Måske sådan.
'.visbilled('1', 'billed3093.jpg', 'hall sensor position vinkel', false, true).'
Eller sådan.
'.visbilled('1', 'billed3120.jpg', 'hall sensor position vinkel', false, true).'
120° er vist mest almindeligt.
Det kan også være 60°.

På nogle controllere er det et stik man kan tage fra hinanden alt efter om controlleren skal forbindes til en 60° eller 120° motor.
Når stikket er taget fra hinanden kan controllen være indstillet til en 120° motor og samles stikket er controllen indstillet til en 60° motor.
').'

'.afsnit('brake high low noget','
Her ses en controller hvor der står "BRAKE : HIGH LEVEL".
'.visbilled('1', 'billed3072.jpg', 'BBK SCDC motor controller model A4880-TM6', false, true).'

Jeg er ikke sikker på hvad dette betyder.

På en controller kan der være en ledning til controllen som kan gives 12-72 volt når der bremses for at stoppe motoren.
Det skulle være på scootere som har bremselyse og ledningen skulle forbindelse det den positive ledning på bremselyset.
Måske har det noget med at gøre at der på en controller kan stå "Brake: High".

Der kan også være 2 andre ledninger på et stik som vist har 5 volt og måske bruges til bremsekontakterne.
Når de kortsluttes stopper motoren.
').'

'.afsnit('EVT controller information (Digital Intelligent Controller System)','
'.afsnit('controller overophednings beskyttelse','
Når controlleren bliver for varm afgiver den kun halvdelen af strømmen eller slukker helt for strømmen.
OH lampe tændt og bip lyd hvert sekund.
Strømmen afbrydes i 10 sekunder.
').'
'.afsnit('motor overophednings beskyttelse (90° celsius)','
OH lampe blinker og bip lyd hvert sekund.
Strømmen afbrydes i 10 sekunder.
').'
'.afsnit('overstrømstyrke beskyttelse','
Hvis strømstyrken bliver for høj et bestemt stykke tid afbrydes strømmen.
').'
'.afsnit('batteri energi advarsel','
Når der er cirka 10% rækkevidde/energi tilbage på batterierne så kommer der en bip lyd og strømmen til motoren halvveres.
Bip lyden forsætter indtil batteriet er afladt til et vist niveau hvor strømmen afbrydes helt.
').'
'.afsnit('2 kørsels indstillinger','
'.visbilled('1', 'billed1396.jpg', 'EVT4000e E P knap', false, true).'
E = Economic mode giver op til 70% af effekten og det giver mindre kraft og længere rækkevidde.

P = Power mode giver op til 100% af effekten og det giver maksimal kraft og kortere rækkevidde.
').'
'.afsnit('strømmen afbrydes når der bremses','
Strømmen afbrydes når der bremses så man ikke kan accelerer og bremse samtidig.
Dette er for at beskytte mod unødigt batteriforbrug og for at undgå overophedning.
Strømmen tilsluttes 0,5 sekunder efter bremsen frigives.
').'
'.afsnit('batteri afladt afbrydelse','
Strømmen afbrydes når batteriernes spænding falder under 40 volt (for et 48 volt system) eller under 60 volt (for et 72 volt system).
L1 tændt med bip lyd i 10 sekunder.
').'
Læs mere om EVT motor, controller og oplader.
'.visfil('1', 'scooterhjemmeside/download/evt_electrificationkits.pdf').'
').'



'.afsnit('controller typer','
Jeg ved endnu ikke så meget om controller typer men her er det jeg har indtil videre.

'.afsnit('PM brush/series wound DC','
Pulse-width modulation with semiconductors.
').'
'.afsnit('PM brushless','
Same as for PM brush/series, but require switching 3 or more phases as well, and requires motor position input to switch the phases.
Det er vist denne type som gerne bruges i scootere med navmotor.
').'
'.afsnit('AC Induction','
VFD (variable frequency drive) of some type.
').'
').'

'.afsnit('PWM - Pulse Width Modulation','
Hvis man tilslutter et batteri direkte til en motor så køre motoren for fuld hastighed.
Fjerner man batteriet så stopper motoren.

For at få motoren til at køre ved forskellige hastigheder kan man sætte en variabel modstand mellem batteri og motor så motorens hastighed kan reguleres.
Ulempen ved at bruge en variabel modstand er at en del af energien går tabt i modstanden i form af varme.
For at undgå dette energitab kan man i stedet bruge en kontakt til at tænde og slukke for strømmen meget hurtigt.

Forbinder man et batteri til en motor og sætter en tænd/sluk kontakt imellem vil man kunne få motoren til at køre med forskellig hastighed ved at tænde og slukke hurtigt for kontakten.

Her tændes og slukkes kontakten og den er tændt og slukke lige længe af gange.
Det vil betyde at motoren kommer til at køre ved halv hastighed.
'.visbilled('1', 'billed3115.jpg', 'pulse wave', false, true).'
Ved at variere (modulere) hvor længe kontakten skal være tændt/slukket kan man bestemme motorens hastighed.

Her er kontakten kun tændt kort tid og det vil få motoren til at køre langsomt.
'.visbilled('1', 'billed3116.jpg', 'pulse wave', false, true).'

Her er kontakten næsten tændt hele tiden og motoren vil næsten køre med maksimal hastighed.
'.visbilled('1', 'billed3114.jpg', 'pulse wave', false, true).'

Denne måde at tænde og slukke for strømmen og variere hvor længe der skal være tændt/slukket kaldes PWM (Pulse Width Modulation).

Tænd/sluk hastigheden kan ske ved for eksempel 20 KHz.
Det betyder at strømmen tændes og slukkes 20.000 gange per sekund.



Et PWM signal kan også have 3 værdier (+ 0 -) i stedet for kun 2 værdier (tænd og sluk) også kan man lave et vekselstrøms signal.
På billedet dannes der en sinus lignende vekselstrøms kurve på 20 millisekunder.
Så i løbet af 1 sekunder vil der være dannet 50 kurver, altså 50 Hz.
'.visbilled('1', 'billed0675.jpg', 'pwm pulse width modulation', false, true).'

De scootere jeg har læst om bruger vist allesammen en DC (jævnstrøm) motor.
').'

'.afsnit('MOSFET','
I en controller sidder noget elektronik som kaldes MOSFET.
Det er disse MOSFETs der står for at tænde og slukke hurtigt for strømmen til motoren så man kan køre ved forskellige hastigheder.

I nogle controllere er der 6 MOSFET og i andre er der 12 MOSFET. Ved ikke hvad forskel det gør.

MOSFETne udvikler varme så derfor er de skruet fast til et stykke metal som kan føre varmen væk.
'.visbilled('1', 'billed3107.jpg', 'mosfet', false, true).'
Det hvide pasta mellem MOSFET hjælper med at overføre varmen.
'.visbilled('1', 'billed3109.jpg', 'mosfet', false, true).'
'.visbilled('1', 'billed3108.jpg', 'mosfet', false, true).'
').'
'

,'
Sevcon controller
' => '
Her er noget info om '.ahref('http://www.sevcon.com/', 'Sevcon').' controllere som muligvis bruges i Govecs og Peugeot E-Vivacity.
Peugeot E-Vivacity bruger muligvis Sevcon Gen 4 size 2 og det kunne se ud som om controlleren er under sædet bag ved hvor man har sine fødder når man køre.

Her ses nogle Sevcon Gen 4 controllere.
'.visbilled('1', 'billed2653.jpg', 'Sevcon Gen 4 controllere', false, true).'
'.visbilled('1', 'billed2652.jpg', 'Sevcon Gen 4 controller tegning', false, true).'

Mere info : '.ahref('http://www.sevcon.com/ac-controllers/gen4%E2%84%A2.aspx', 'AC Controllers : Gen4').'
Gen 4 controlleren er CANopen kompatibel.
'

,'
samleboks
' => '
På en elektrisk scooter kan sidde en samleboks (eller hvad vi nu skal kalde den, samleskinne måske) hvor man samler de ledninger som bærer flest ampere (højeste strømstyrke).

Her ses en samleboks fra en Giantco E-buddy.
Der er 5 skruer/pladser hvor man kan samle 10 ledninger i samleboksen.
'.visbilled('1', 'billed3435.jpg', 'Giantco E-buddy gul samleboks skildt ad', false, true).'
'.visbilled('1', 'billed3434.jpg', 'Giantco E-buddy gul samleboks i scooter', false, true).'

'.visbilled('1', 'billed3431.jpg', 'grøn samleboks ', false, true).'
'.visbilled('1', 'billed3433.jpg', 'grøn samleboks', false, true).'
'.visbilled('1', 'billed3432.jpg', 'grøn samleboks', false, true).'

Her ses et udklip fra et el diagram hvor man kan se hvilke ledninger der går til samleboksen.
'.visbilled('1', 'billed3436.jpg', 'samleboks el diagram', false, true).'
3 af skruerne (blå, grøn, gul) bruges til at forbinde controlleren med de 3 fase ledninger til motoren.
1 af skruerne (sort) bruges til at forbinde controlleren med batteri minus (-) (stel).
1 af skruerne (rød) bruges til at forbinde controlleren med batteri plus (+) (+48 volt) (gennem hovedafbryderen).
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
