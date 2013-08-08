<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "malossi multivar";
$overskrift = "malossi multivar";
$metadescription = "info, billeder og filer om Malossi Multivar som er et reservedelskit til variatoren på en scooter";

$databasecenter = array(

'
montering af Malossi Multivar
' => '
'.visflash('0', "http://www.youtube.com/watch?v=wv_RCsz-tlw", 'Montering af Malossi Multivar 5113790 på Kymco Super 8', true).'
'

,'
hæfte
' => '
Her er hæftet som følger med i Malossi multivar pakken.
'.visfil('1', 'scooterhjemmeside/download/malossi_multivar.pdf', 'Malossi multivar (01/2011 - 73 3863)').'
'

,'
pakke numre
' => '
Her følger 3 af Malossi multivar pakkerne kaldet 5113139, 5113269 og 5113790.

<span style="color: red;">Jeg har markeret noget af teksten med rødt der hvor der er forskel mellem pakke 5113139, 5113269 og 5113790 så man lettere kan se forskellen.</span>

Tallene på tegning passer til tallene i følgendende tabeller.
'.visbilled('1', 'billed3411.jpg', 'malossi multivar', false, true).'
'

,'
5113139
' => '
Pakken 5113139 passer ifølge medfølgende hæfte og '.ahref('http://www.malossistore.co.uk/Prodotto.aspx?type=M&&C=5113139', 'malossistore').' til :
BAOTIAN ECO BIKE 50 4T (139 QMB)
BAOTIAN REBEL - ROCKY - TANCO 9/12 50 4T
GARELLI FLEXI\' 50 4T euro 2 (1P139 QMB)
GARELLI TIESSE FOUR 50 4T euro 2 (1P39QMB)
HUPPER MONTECARLO 30 50 4T (139QMB)
MALAGUTI DVD 50 4T (139 QMB)
PEUGEOT V-CLIC 50 4T
WT MOTORS BILBAO 50 4T (PEDA 139QMB)

Pakken 5113139 består af følgende.
'.
box(array('150', '150', '150', '150')
   ,array(
       array('nummer på tegning', 'del', 'beskrivelse', 'varenummer')
      ,array('1', 'Adaptorskive', '(medfølger ikke)', '')
      ,array('2', 'Bagplade', 'målt til 2,6 mm i tykkelse', '25 8068B')
      ,array('3', 'Styr', '3 styks<br>nylon', '37 8175')
      ,array('4', 'Ruller', '6 styks<br>16x13 mm<br><span style="color: red;">7,0 gram</span><br>Kaldet HTRoll', '<span style="color: red;">66 9823.M0</span>')
      ,array('5', 'Remskiveskål', 'Hul til bøsning målt til indre diameter : 19,99-20,04 mm', '61 8125B')
      ,array('6', 'Gliderør', 'Målt til længe : 38,77 mm og ydre diameter : 19,96 mm og tykkelse 2,96 mm', '<span style="color: red;">2311096B</span>')
      ,array('7', 'Begrænser ring', '(medfølger ikke)', '')
      ,array('8', 'yderste remskive', '(medfølger ikke)', '')
      ,array('', 'Trykfjeder', 'Hvid<br>4,0 mm tråd diameter<br>Reinforced<br>Målt til 4,12-4,30 mm (inklusiv maling) og 103,82-105,69 mm i længde', '<span style="color: red;">2912658.W0</span>')
      ,array('', 'Klistermærker', '3 styks', '')
      ,array('', 'Hæfte', '32 sider', '73 3863')
   )
)
.'
'

,'
5113269
' => '
Pakken 5113269 (set i gammel hæfte fra 08/2007) passer til :
Kymco Agility - People // Peo. S (BB10) 4t euro 2, Vitality (SG10) 4t euro 2

Pakken 5113269 består af følgende.
'.
box(array('150', '150', '150', '150')
   ,array(
       array('nummer på tegning', 'del', 'beskrivelse', 'varenummer')
      ,array('1', 'Adaptorskive', '(medfølger ikke)', '')
      ,array('2', 'Bagplade', '', '25 8068B')
      ,array('3', 'Styr', '3 styks<br>nylon', '37 8175')
      ,array('4', 'Ruller', '6 styks<br>16x13 mm<br><span style="color: red;">6,0 gram</span><br>Kaldet HTRoll', '<span style="color: red;">66 9823.L0</span>')
      ,array('5', 'Remskiveskål', '', '61 8125B')
      ,array('6', 'Gliderør', '', '<span style="color: red;">23 8854B</span>')
      ,array('7', 'Begrænser ring', '', '0812673B')
      ,array('8', 'yderste remskive', '(medfølger ikke)', '')
      ,array('', 'Trykfjeder', 'Hvid<br>4,0 mm tråd diameter<br>Reinforced', '<span style="color: red;">29 8360.W0</span>')
      ,array('', 'Klistermærker', '3 styks', '')
      ,array('', 'Hæfte', '32 sider', '73 3863')
   )
)
.'
'

,'
5113790
' => '
Pakke 5113790 passer ifølge malossistore.co.uk og medfølgende hæfte til :
KYMCO AGILITY R10/R12/R16 - RS 50 4T euro 2 (KL10B)
KYMCO DINK 50 4T euro 2
KYMCO PEOPLE 50 4T euro 2
KYMCO PEOPLE S 50 4T euro 2 (BB10)
KYMCO SENTO 50 4T euro 2
KYMCO SUPER 8 50 4T euro 2 (KL10)
KYMCO VITALITY 50 4T euro 2 (SG10)
SYM SYMPLY 50 4T euro 2 (XS1P39QMB)

Pakken 5113790 består af følgende.
'.
box(array('150', '150', '150', '150')
   ,array(
       array('nummer på tegning', 'del', 'beskrivelse', 'varenummer')
      ,array('1', 'Adaptorskive', '(medfølger ikke) *<br>målt til 0,96-0,99 mm i bredden', '')
      ,array('2', 'Bagplade', 'målt til 2,48-2,49 mm i tykkelse', '25 8068B')
      ,array('3', 'Styr', '3 styks<br>nylon', '37 8175')
      ,array('4', 'Ruller', '6 styks<br>16x13 mm<br><span style="color: red;">6,0 gram</span><br>Kaldet HTRoll', '<span style="color: red;">66 9823.L0</span>')
      ,array('5', 'Remskiveskål', '', '61 8125B')
      ,array('6', 'Gliderør', 'målt til 19,96-19,99 mm i ydre diameter<br>2,98-3,06 mm ydre-mindre-diameter<br>36,50-36,56 mm bredde<br>14,02 mm indre diameter', '<span style="color: red;">2313741B</span>')
      ,array('7', 'Begrænser ring', 'målt til 6,975 mm i bredde', '0812673B')
      ,array('8', 'yderste remskive', '(medfølger ikke)', '')
      ,array('', 'Trykfjeder', 'Hvid<br>4,0 mm tråd diameter<br>Reinforced<br>Målt til 105,33-106,05 mm i længde<br>4,18-4,24 mm i trådtykkelse (med maling)', '<span style="color: red;">2912658.W0</span>')
      ,array('', 'Klistermærker', '3 styks', '')
      ,array('', 'Hæfte', '32 sider', '73 3863')
   )
)
.'
* Selvom der i hæftet står af adaptorskiven (1 mm bred) ikke medfølger så gjorde den det i den pakke jeg fik.
'

,'
billeder af 5113139
' => '
Her er nogen billeder af Malossi multivar 5113139 købt hos scoot.dk.
'
.galleriholder(array(
    galleri('highslide', '', 'billed3406.jpg', array('malossi multivar 5113139', ''))
   ,galleri('highslide', '', 'billed3407.jpg', array('malossi multivar 5113139', ''))
   ,galleri('highslide', '', 'billed3408.jpg', array('malossi multivar 5113139', ''))
   ,galleri('highslide', '', 'billed3409.jpg', array('malossi multivar 5113139', 'her ses skålen fra Malossi multivar kittet'))
   ,galleri('highslide', '', 'billed3410.jpg', array('malossi multivar 5113139', 'her ses den originale skål fra Kymco Super 8 til sammenligning. Læg mærke til der er lidt forskel på banerne hvor rullerne ligger'))
   ,galleri('highslide', '', 'billed3412.jpg', array('malossi multivar 5113139', ''))
   ,galleri('highslide', '', 'billed3413.jpg', array('malossi multivar 5113139', ''))
   ,galleri('highslide', '', 'billed3414.jpg', array('malossi multivar 5113139', ''))
   ,galleri('highslide', '', 'billed3415.jpg', array('malossi multivar 5113139', ''))
   ,galleri('highslide', '', 'billed3416.jpg', array('malossi multivar 5113139', ''))
   ,galleri('highslide', '', 'billed3417.jpg', array('malossi multivar 5113139', ''))
))
.'
'

,'
billeder af 5113269
' => '
Her er nogen billeder af Malossi multivar 5113269 købt hos kgi.dk.
'
.galleriholder(array(
    galleri('highslide', '', 'billed3448.jpg', array('malossi multivar 5113269', ''))
   ,galleri('highslide', '', 'billed3449.jpg', array('malossi multivar 5113269', ''))
   ,galleri('highslide', '', 'billed3450.jpg', array('malossi multivar 5113269', ''))
   ,galleri('highslide', '', 'billed3451.jpg', array('malossi multivar 5113269', ''))
   ,galleri('highslide', '', 'billed3452.jpg', array('malossi multivar 5113269', ''))
   ,galleri('highslide', '', 'billed3453.jpg', array('malossi multivar 5113269', ''))
   ,galleri('highslide', '', 'billed3454.jpg', array('malossi multivar 5113269', ''))
))
.'
'

,'
billeder af 5113790
' => '
Her er nogen billeder af Malossi multivar 5113790 købt hos speedline.dk.
'
.galleriholder(array(
    galleri('highslide', '', 'billed3471.jpg', array('malossi multivar 5113790', ''))
   ,galleri('highslide', '', 'billed3472.jpg', array('malossi multivar 5113790', ''))
   ,galleri('highslide', '', 'billed3473.jpg', array('malossi multivar 5113790', ''))
   ,galleri('highslide', '', 'billed3474.jpg', array('malossi multivar 5113790', ''))
   ,galleri('highslide', '', 'billed3475.jpg', array('malossi multivar 5113790', ''))
   ,galleri('highslide', '', 'billed3476.jpg', array('malossi multivar 5113790', ''))
   ,galleri('highslide', '', 'billed3477.jpg', array('malossi multivar 5113790', ''))
   ,galleri('highslide', '', 'billed3478.jpg', array('malossi multivar 5113790', ''))
   ,galleri('highslide', '', 'billed3479.jpg', array('malossi multivar 5113790', ''))
   ,galleri('highslide', '', 'billed3480.jpg', array('malossi multivar 5113790', ''))
   ,galleri('highslide', '', 'billed3481.jpg', array('malossi multivar 5113790', ''))
))
.'
'

,'
bruger kommentar
' => '
En bruger skrev følgende til mig.
'.citat('
De siger godt nok at multivaren er lettere, men den er et par gram tungere end originalen på en kymco Agility, så der er i forhold til Kymco (som også er kvalitet) ikke en optimering på dét punkt.

Når vi er kommet forbi den ting, så er der kun store ting at sige om multivaren. Dens optimerede rullebaner gør at man hurtigere gearer op samt at man kan opnå en smugle højere gearing end originalen, hvilket både giver en "friskere" scooter og (uden begrænsning) en hurtigere og mere økonomisk. :)

Den hvide trykfjeder i Agility kittet kræver 30 kg tryk at trykke fuldstændig sammen, hvilket er det samme som originalen på agilityen, som i forvejen er lavet til 80 kubiks cylinder. Denne fjeder kaldes også 800 RPM fjeder. :)

En trykfjeder fungerer sådan, at den trykker kontra variatoren, og det kræver derfor flere krafter at trykke en kraftigere fjeder ud. Fordelen ved en kraftigere fjeder er, at den så folder sig ud hurtigere, og så presser variatoren tilbage i hvile-position hurtigere, således at omdrejningerne holdes høje, hvilket mest er nødvendigt på racermaskiner, hvor man gerne vil have høje omdrejninger i et sving, selvom man har sluppet gassen, således at man stadig er tæt på toppen af effektbåndet når man så igen giver gas efter svinget. :D
').'
'

,'
citater fra hæftet
' => '
Hæftet består af tekst på mange sporg.
Her er de engelske tekster fra hæftet.
'.citat('
In the past the automatic speed variators with V-type transmission belts had quite low performances and they were used only on the economical mopeds which had limited power. Nowadays the automatic variators achieved higher performances
and they are fi tted on all automatic scooters from 50 to 600 cc. with 2,94 kW to 40 kW power. The choice of the motorcycle producers had the purpose to improve the drive of these vehicles. Considering the potentiality of such devices, MALOSSI
management has directed the efforts of his engineers towards the study of a new range of variators specifi cally calculated and calibrated for these new scooters and mopeds, with the purpose to get their best running and therefore to meet with
the requests of the most exacting users. MULTIVAR is the answer of Malossi experts who have been studying and producing special parts for automatic mopeds, racing engines and patented variators. MULTIVAR is defi ned “third generation”
for the technology of its plan and for the characteristics of the materials which it composes; it is the result of an advanced and rational synthesis in comparison with the present devices. It is compact, light, balanced and indestructible; it is very
easy to fi t and to modify; it is calibrated for specifi c applications, studied in details, complete of all parts and it does not require any maintenance. A range of rollers with different weights and driven pulley springs with increased loads has been
created to enable the mechanics to calibrate the MULTIVAR as they like. All the variator spare parts are available at MALOSSI sale points (see the page of Malossi catalogue). MULTIVAR is the result of a study devised in order to get a production
of variators with interchangeable components that can cover the whole range of automatic mopeds from 50 to 600 cc.
').'
'.citat('
MAIN CHARACTERISTICS
Big excursion capacity. The utilisation curve is highly progressive. Specifi c calibration for every kind of vehicle, with possibility to modify the utilisation rate. It works completely dry. Self-lubricating movements.
TECHNICAL DATA
- Range of use from 28 mm to 88 mm of medium diameter (useful dimensions from 20 mm to 90/95 mm).
- Movable half pulley in a special aluminium-silicon alloy with treatment on surface.
- Sliding bushing in sintered self-lubricating bronze.
- Central hub in a special alloyed hardened and rectifi ed steel.
- Roller guide cover in steel with head treatment and burnish on surface.
- Rollers in nylon with high resistance to wear and calibrated weight added with both glass fi bre or special molybdenum sulphide.
- Driven pulley pressure spring in special hardened steel, stove-enamelled in different colours depending on each calibration.
- Fixed pulley in galvanised steel (Piaggio mopeds).
').'
'.citat('
Multivar MHR
Years of experience on the race track have spurred us to create a special automatic speed change gear for racing. The kit contains a 101 mm diameter mobile half pulley made of a special cast aluminium alloy. The contact surface between pulley and
belt is super-fi nished with a diamond tool to guarantee a constant coeffi cient of friction, calculated to prevent both belt slip and premature wear. To satisfy the innumerable calibrations required by racing scooters, depending on track type and tuning
of the motor, the kit contains 2 series of 6 rollers set and a counterspring in pre-hardened silicon-chrome steel alloy with counterclockwise (racing) winding. In addition, other springs of the same class with different loads are available as options (see
pg. 31).
ATTENTION: Multivar is supplied complete of all parts; it is not necessary to fi t covers or other parts not provided in our kit. The covers fi tted on the original variators have the function of retaining the grease. Multivar works without grease and
the working parts are built with self-lubricating materials; this is the reason why Multivar does not require the cover.
ATTENTION: Always verify that the correct components are being used, during assembly, so that the variator nut will seat fully and make sure the hub-spacer assembly, wherever present, has the same total dimension as the original. The everchanging
engine designs may cause a compatibility issue for Malossi products. In order to avoid damage to the vehicle we ask you to make sure the assembly is correct. We are not responsible for any damages to the vehicle.
').'
'.citat('
FITTING INSTRUCTIONS (scooters and motorcycles)
1) Clean carefully the outside area of the crankcase at the drive side, on which we will work.
2) Remove the crankcase at the drive side, taking care of no losing or damaging the tightening sockets and screws (Photo 1a).
3) Unscrew the variator locking nut on the crankshaft (Photo 1b).
4) Take off completely the original variator from the crankshaft (Photo 2).
5) In case there is the calibrated spring inside the kit, remove the clutch unit (Photos 3a-3b).
6) In order to fi t the driven pulley pressure spring, unscrew the locking nut of the bearer-block fl ange (Photos 4a-4b), paying attention to the spring thrust.
7) Fit the new spring supplied in the kit (Photo 5).
8) Reassemble the clutch unit as in origin (Photo 6). Check the wear on your belt; if it isn’t perfect, we suggest you replace it with one of our Malossi Belts or MHR in Kevlar. Reassemble the clutch unit with the belt fi tted to the pulley, and
tighten the lock nut (Photo 7).
9) Assemble the guides (3) into the cover (2) as shown in the variator assembly diagram, take care in fi tting the assembly (Photo 8).
').'
'.citat('
10) Only for art. 5112075
Fit the roll steel mass into the rollers (Fig. 1). Do it by hand or, if you prefer to use a mechanic tool, work with the greatest care. You must observe a perfect orthogonality.
11) Put the rollers (4) in the moving half pulley (5) (Photo 9).
12) Insert the completed cover (2) in the moving half pulley with rollers inside (Photos 10 - 11).
13) Insert the sleeve (1), (if any), on the crankshaft.
14) Insert the hub (6) into the moving half pulley (Photos 12 - 13) and fi t with caution the complete unit onto the crankshaft, making sure the rollers stay in place (Photo 14).
15) Fit the variator assembly, insert the limiter spacer (7) into the hub, place the belt on the hub (Photo 15). Fit the fi xed original half pulley (8) or alternatively, the half pulley supplied in the kit. Assemble
the cooling fan and the fi xing washer, if any.
16) Insert the clamping bolt and screw down with fi ngers (Photo 16).
17) Slacken the belt pressing it in the middle, so that it is not narrowed between the pulley and the notched belt during locking of the crankshaft bolt, or the assembly of the variator may be distorted
(Photo 17).
18) The bolt on the crankshaft which fi xes the variator must be tightened, as suggested by the manufacturer.
').'
'.citat('
Multivar 51 7075 - 5113161

ATTENTION
In the clutch kit of Yamaha/Minarelli 50 engine: inside the antagonist spring set, there are two dust-covers in stamped plate. To fi t in the new reinforced spring set, it is necessary to take away the external cover in order to avoid dangerous
interferences with the new spring.
ATTENTION
In the Multivar art. 51 7075 - 5113161 there are two spacers: art. 08 7059B, which is 2 mm thick and art. 0811670B, which is 5 mm thick.
The art. 0811670B, which is thicker, must only be fi tted to scooters equipped with Minarelli engines having a fanned crankcase made from the year 2000 onwards, e.g. Malaguti F12 etc., whilst the fi rst one, which is 2 mm thick,
must be fi tted to all the other scooter models.
').'
'.citat('
Multivar 5111561 APRILIA Scarabeo Ditech, Sr Ditech (Aprilia) LC, Sr Replica 2000 (Aprilia) LC

FITTING INSTRUCTIONS

- Follow the “Fitting Instruction” at page 6 from point 1 to point 11.
12) Insert the complete cover (7) in the moving half pulley with rollers inside (Photos 10 - 11).
13) Insert the hub (3) into the moving half pulley (Photos 12 -13) and fi t with caution the complete unit into the crankshaft, making sure the rollers stay in their seats (Photo 14).
14) Insert the variator completely and place the belt on the hub (Photo 15). Fit the fi xed original half pulley (1). Assemble the cooling fan and the fi xing washer, if any.
15) Insert the sleeve (8) included into the kit into the crankshaft.
16) Insert the starting unit , the washer and the clamping bolt. (Photo 16).
17) Release the belt, pressing it in the middle. In order to avoid that the variator assembly is distorted, take care not to allow that the toothed belt is narrowed between the pulleys while the crankshaft bolt is being locked. (Photo 17).
18) The bolt on the crankshaft which fi xes the variator must be tightened, as suggested by the manufacturer.
The vehicles which have the variator fi xed half pulley facing the inside of the crankcase have a fi tting order reversed in comparison with the scooters.
For the part which changes, please follow this order. Sandwich the spacer on the crankshaft, where it is provided, and then fi t the fi xed half pulley with its hub, paying attention to the side of fi tting. Place the rollers in the movable half pulley, the sliders
in the cover and this last one in the half pulley. Put the belt on the hub and fi t the movable half pulley, keeping the rollers blocked in their races. Moreover, put the collar and the nut and locked everything with care, trying not to make mistakes. Where it
is provided, fi t the small cover with the 3 fastening screws included in the kit.
').'
'.citat('
Multivar OVER RANGE 5112800 Motori / engines / Moteurs / Motoren / Motores Minarelli-Yamaha

The never-ending power increase drove us to design an extraordinary variator!
The innovative elements of this MHR variator for OVER RANGE are:
- far better running (running further improved);
- rollers from Ø 16x13 to Ø 19x15,5 , to grant a longer gear curve;
- reinforced variator structure on bushing side, to allow greater stability and length in gear curve.
FITTING INSTRUCTIONS
- To install the new wider range variator on Minarelli and Yamaha engines, you have to remove the components of the electrical starting system located inside the drive casing (Fig.
1 - 2).
- Fit the cursors (3) on the cover (2) observing the installation diagram of the variator, making sure you insert it up to its stop point.
- Position the rollers (4) on the mobile split pulley (5).
- Fit the cover (2) with cursors above the mobile split pulley with rollers.
').'
'.citat('
Multivar OVER RANGE 5112800 Motori / engines / Moteurs / Motoren / Motores Minarelli-Yamaha

- Replace the original spacer with the Malossi one (1) inserted into the kit and insert it on the crankshaft (Fig. 3).
- Fit the hub (6) in the mobile split pulley and carefully insert the entire unit on the crankshaft, making sure that the rollers do not come out of their tracks.
- Install the entire variator unit up to its stop point (Fig. 4), and locate the belt on the hub. Fit the fi xed split pulley (8) supplied with the kit, the starting unit and the washer.
- Insert the tightening nut and screw it down with your fi ngers.
- Loosen the belt, tighten it a mid-point, making sure that when the crankshaft nut is tightened, the timing belt is not tightened between the pulleys, thus de-synchronising pack closure
of the entire variator unit.
- Tighten the nut securing the variator on the crankshaft, using the torque recommended by the engine manufacturer.
Finish installation by re-fi tting the casing, taking care to tighten all the cover screws to a 1.1 kgm torque.
').'
'.citat('
USEFULL SUGGESTIONS
MULTlVAR
In several cases it operates on the revolution gears between engine and wheels, as a gear which has two speeds more than the original gear. This is a great advantage in order to reach the best engine power distribution.
MULTIVAR is sold already calibrated for engines provided with a high power couple, but you can set it as you like, simply replacing the rollers included in the kit with others having different weights (always original MALOSSI).
ROLLERS - Operation
Due to the rotation the weight of the rolls becomes centrifugal force; the higher the roll’s weight, the lower the gear change time.
And vice-versa.
').'
'.citat('
DIRECTIONS HOW TO CALIBRATE THE VARIATOR
Variator calibration
To optimize your engine’s performances, adopt rolls that in operation maintain the engine in the highest power rotation regime. By diminishing the rolls’ weight the engine rises the RPM; on the contrary by increasing the rolls’ weight the RPM
decrease.
Spring
The pressure spring is vital to give the right amount of load to the transmission belt which must be balanced with the force developed by the centrifuge masses, in relation to the kind of engine coupling. If the belt slips, it will be necessary to fi t a spring
with more load. Then recalibrate the MULTIVAR. On the contrary if you fi t a spring with too much load, a lot of engine power will be lost due to friction and the transmission belt, together with the pulleys, will be rapidly destroyed.
').'
'.citat('
Transmission Belt
Check the belt every 2000-3000 Km; be sure that it is of high quality and that there are no damages. It must not be worn 1,5 mm more than the A and B points of the original belt (see the drawing). If you have any doubt or problems, replace it
with a Malossi belt which you will fi nd with its code number in the corresponding table of this sheet or in Malossi Catalogues.
N.B.: The quality of the transmission belt is very important in order to increase its life and the life of the variator; the belt has to be neither too rigid nor too soft. The quality of the mix determines the right grip either in hot or cold
conditions; a lack of power and performance can occur if the quality is poor.
MULTIVAR MAINTENANCE
In case of racing use, check the wear of rollers and cursors every 1000-1500 Kms. If Multivar is used on the road, check these parts every 5000-6000 Kms. Multivar has not to be lubricated and if it is used in very dusty places it must
be washed frequently with oil and dried with compressed air. Use exclusively rollers and original Malossi spare parts; ask always for products packed and sealed up with Malossi mark. Order Malossi products specifying the part number
mentioned on the instruction manual provided together with Multivar.
').'
'.citat('
We hope you found the above instructions suffi ciently clear. However, if any points are not particularly clear, please contact us completing the special form inserted in the “contact” section on our Internet site (www.malossi.com).
We thank you in advance for any comments and suggestions you may wish to send us.
So goodbye from us all at Malossi, and please accept our compliments. Have Fun. GOOD LUCK and … see you next time.
The descriptions in this publication are not binding. Malossi reserves the right to make modifi cations, if it considers them necessary, and does not accept any responsibility for any typographic or printing errors. This publication replaces all previous
publications referring to the updating matters contained therein.
WARRANTY
Look up warranty terms in our website www.malossi.com.
These products are reserved solely for races in locations reserved for those purposes and in accordance with the regulations issued by the competent authorities for sports events. We decline any and all responsibility for improper
use.
').'
'.citat('
COLORROLL

Polyamide-resin rollers with hard-wearing fi bres.
The low rate of wear caused by slipping (3.5 μm/
km) ensures exceptional life and dimensional
stability thus allowing notable distances to be
covered even at high temperatures.

66 7147<span style="color: red;">.70</span> gr. 2,5

ATTENTION:
When ordering, remember to
follow the part number with
the code letter/number that
represents the desired weight.
See example above in RED.
').'
'.citat('
HTRoll

HTROLL
for original speed variators.
HTRolls are made with CBT with a specifi c formula and bear
the relative basic weight on one side. HTRolls represent a
technical spare part for the original one, in a complete series
of calibration elements capable of varying your scooter’s
transmission ratio and the pucking up.

66 9420<span style="color: red;">.Q0</span> gr. 2,7

ATTENTION:
When ordering, remember to
follow the part number with
the code letter/number that
represents the desired weight.
See example above in RED.
').'
'.citat('
Variable-speed drive adjuster spring

Silicon-steel springs with high carbon content, heattreated,
dynamically balanced, kiln painted, designed and calculated for each
specifi c application.
Malossi Springs can be divided into three categories:
• REINFORCED SPRINGS with high stiffness
• SUPER REINFORCES SPRINGS with exceptionally-high stiffness
• RACING SPRINGS designed for more exacting use and
competition machines

.A0 = Azzurro, Bleu, Blue clair, Blau, Azul .V0 = Viola, Viola, Violet, Violett, Violet
.G0 = Verde, green, Vert, Grun, Verde .W0 = Bianco, White,Blanche, Weiss, Blanco
.R0 = Rosso, Red, Rouge, Rot, Roja .Y0 = Giallo, Yellow, Jaune, Gelb, Amarillo
(RI) = Rinforzata / Reinforced / Renforcé / Verstärkte / Renforzado
(SR) = Super Rinforzata/Super Reinforced/Super Renforcé / Super Verstärkte/ Super Renforzado
(RA) = Racing
( • ) Incremento di rigidità rispetto l\'originale / Increase in rigidy compared to the original / Augmentation de
rigiditè par rapport à l\'original / Steigerung der Härte im Vergleich zum Original / Encremento de rigidez
respecto al original
').'
'.citat('
Racing spring

Spring for Malossi clutch
Pre-hardened carbon steel springs, with
high yield strength, that are protected
by a high heat-resistant painting in
various colours. The different colouring
shows the load of each spring series.

SPRING SET for Malossi Clutch Fly - Delta
').'
'

,'
en lang historie om at få den rigtige pakke
' => '
'.afsnit('1. forsøg hos scoot.dk','
Jeg købte i Maj 2012 "Malossi multivar 5113139" hos '.ahref('http://scoot.dk').' til 599,- kroner.

Jeg vidste på det tidspunkt ikke særlig meget om det og vidste ikke der fandtes forskellige kit.
Troede egentligt bare der var en slags.
Da jeg købte det spurgte jeg om det passede til Kymco Super 8 og fik at vide det passede til alle 4 takt (underforstået alle 4 takt med 50 ccm motor).

Jeg får udleveret en pakke som har været åbnet.

Da jeg monter delene (borset fra fjederen) går kickstarteren på når motoren startes og det får mig til at tro at delene ikke passer.
Jeg prøver så og afmonter og påmonter det igen men kickstarteren går stadig på så undersøge nærmere og læser hæftet som følger med hvor jeg kan se at der findes mange slage Malossi multivar pakker.

På det jeg har fået står 5113139 og det skulle passer til diverse Baotian 4 takt 139QMB modeller.
I hæftet som fulgte med fra 2007 er Kymco Super 8 ikke nævnt men det er Kymco Agility (som minder en del om Super 8) hvor der står at det er et andet kit som passer til den som hedder 5113269.
Jeg læser så i hæftet at rullevægten er forskellige i pakke 5113139 og 5113269 og trykfjederen har forskellige reservedelsnumre, hvilket får mig til at tro at der må være en forskel.
Jeg tænker at gliderøret må være for bredt siden min kickstarter gik på.

Jeg vil jo gerne have det helt rigtige og ikke bare nogen som passer nogenlunde.
Jeg ringer til scoot.dk og han siger de har monteret det på mange Kymco Super 8 og der har kickstarteren ikke gået på.
Så måske har min låsering på kickstarten været røget ud af sit hak eller noget så delene er kommet længere ind.

Standard gliderøret som sidder i scooteren fra ny har en længde på 37,95 mm.
Gliderøret i pakke 5113139 har jeg målt til at have en længde på 38,77 mm (0,82 mm længere).
Det er jo ikke særlig meget længere så ved ikke om det er derfor kickstarteren gik på.
Jeg tænker også om bagpladen kunne være tykkere. Malossi bagpladen (25 8068B) har jeg målt til at være 2,6 mm tyk. Jeg måler standard bagpladen på et senere tidspunkt. Hvis den er tyndere er det måske mere sandsynligt at der var derfor kickstarteren gik på.

Scoot.dk vil ikke bestille det rigtige kit.
Det noget med de skal købe 10 af gangen og det ville han vist ikke.
De bruger kun den ene slags siger han.

Jeg afmonter kickstarteren så jeg kan komme til at køre på scooteren uden den går på.
Imens venter jeg på at få det plastikstyr som manglede i pakken som havde været åbnet.

Han tilbyder mig et andet plastikstyr men jeg vil have det originale.

Nå man jeg får aldrig det plastikstyr fordi i mellem tiden har jeg jo fundet ud af at det ikke er den rigtige pakke han har solgt mig.
Så jeg afmonterede det og fik mine penge tilbage så jeg kunne købe den rigtige pakke et andet sted.
').'
'.afsnit('2. forsøg hos scootercity københavn','
Prøvede at bestille det hos scootercity men i telefonen snakkede han om KGI og man kunne bestille på nettet, men jeg havde jo ikke dankort så regnede ikke med jeg kunne bestille det der men så fandt han ud af at man kunne bruge bankoverførsel.
').'
'.afsnit('3. forsøg hos kgi.dk','
Ringer til KGI og spørger om de har den Malossi multivar pakke med 5113790 og får at vide at det har de. Jeg bestiller på nettet. KGI har deres eget reservedelsnummer men der står ikke Malossi\'s nummer. Inden jeg betaler med bankoverførsel ringer jeg for at checke at det nu det nu også den rigtig bakke. Uden at sige hvad nummer det skal være spørger jeg hvad nummer det er og får at vide at det er 5113790. Det er den rigtige siger jeg så og nogen dage efter hente jeg min pakke hos post danmark...

Og så har KGI selvfølgelig sendt den forkerte pakke. Nemlig Malossi multivar 5113269 :(...

Forskellen på pakke 5113269 og 5113790 er reservedelsnummeret på gliderøret og trykfjederen... det står bare ikke hvad forskel der er men der må da være en forskel siden de har forskellige reservedelsnumre tænker jeg.

Ringer til KGI for at høre hvorfor de har sendet den forkerte pakke og snakker med 2 forskellige om at det er det samme som er i pakken Malossi har bare ændret nummeret.
Men jeg kan ikke se noget sted at 5113269 skulle passe til Kymco Super 8.

Jeg vælger så og skrive til Malossi og spørge om hvad forskellen er på de 2 pakker.

'.afsnit('spørg malossi','
Jeg fik følgende svar fra '.ahref('http://www.malossistore.co.uk/', 'MalossiStore UK').'.

'.citat('
The 5113269 is no longer available and has been replaced by the 5113790. If components in the kit are different then this will be what the difference is between the 2 kits.

Thank You

MalossiStore UK
').'
Godt så. De skriver altså at hvis der er forskel på nogen af delene... ja så er der forskel på de dele.

Jeg skrev også til '.ahref('http://www.malossi.com/').' men modtag aldrig svar.
').'
').'
'.afsnit('4. forsøg hos sgncparts.dk','
Bestile den 01-06-2012 hos sgncparts.dk.
Efter flere telefonen samtaler og lang tids ventetid og forsøg på at bestille fra italien og spanien kunne de alligevel ikke sælge mig 5113790 da dem de køber hos sendt de gamle 5113269 pakker.
Jeg fik først at vide den 27-06-2012 at han alligevel ikke kunne sælge det til mig. Så der var en del ventetid hvilket jeg ikke havde noget imod hvis bare han kunne få den rigtige pakke men det kunne han så ikke aliigevel.
').'
'.afsnit('5. forsøg hos speedline.dk','
Sjovt nok var det første sted jeg nok kiggede på '.ahref('http://www.speedline.dk/da/scooter/variator-malossi-multivar-m5113790/').' men da man ikke kunne betale med bankoverførsel købte jeg det ikke der og troede det kostede 200 kroner kun i forsendelse og efterkrav (det viste sig så "kun" at være 134 kroner for forsendelse og efterkrav. Først troede jeg der kom 75 kroners forsendelse oven i).

Jeg ringer til speedline.dk tirsdag den 03-07-2012 for at være sikker på de har Malossi multivar 5113790 og han pakker så en kasse op og ser at det har de.
Så jeg bestiller på deres hjemmeside og 2 dage senere henter jeg min pakke hos post danmark.
Og dejligt nok da jeg åbner pakken er det den rigtige (og længe ventede) Malossi multivar 5113790.
'.visflash('0', "http://www.youtube.com/watch?v=piZHWebvcZw", 'Pakke med Malossi Multivar 5113790 fra speedline.dk', true).'
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
