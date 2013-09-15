<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "motortyper - 2 takt motor";
$overskrift = "motortyper - 2 takt motor";
$metadescription = "forklaring af forskellige 2 takt motor typer til scootere";

$databasecenter = array(

'
introduktion
' => '
Mange scootere med 2 takt 50 cm³ motor har en motor af Motori Minarelli typen. Ofte blot kaldt en Minarelli motor.
Det kan være en original eller en kopi som er baseret på en Motori Minarelli motoren så den ligner den meget.

Tit bliver der skrevet om kort eller lang Minarelli som hentyder til længden om motorblokken.

Kort minarelli findes kun med tromlebremse.
Lang minarelli findes både med tromlebremse og skrivebremse.

Både kort og lang fås som AC og LC.

Motori Minarelli motorer skulle findes i MBK, Yamaha, Aprilia, Malaguti, Beta og Rieju.

Se også '.ahref('http://www.minarelli.com/prodottieng.html', 'Motori Minarelli - Products').'.

Kort minarelli kan muligvis kendes på støddæmper ophæng og at der sidder leje i variatordækslet til at holde ved koblingen.
'

,'
luftkølet 2 takt motortyper
' => '
Her ses Motori Minarelli CY 50.
2 takt tvunget blæsekølet.
Hul til støddæmper sidder meget bagud ?.
Variatordækslet er dybt ?.
Gearolie kapacitet : 100 ml.
Elektrisk system : 60 W - 12 V / 120 w – 12 v.
Sidder oliepumpen i højre side ?
'.visbilled('1', 'billed3861.jpg', 'Motori Minarelli CY', false, true).'
'.visbilled('1', 'billed0802.jpg', '2 takt motor CY 50', false, true).'

Her ses Motori Minarelli MY 50.
2 takt tvunget blæsekølet.
Hul til støddæmper sidder øverst ?.
Variatordækslet er ret fladt ?.
Gearolie kapacitet : 110 ml.
Elektrisk system : 60 W - 12 V / 120 w – 12 v.
Sidder oliepumpen i venstre side ?
'.visbilled('1', 'billed3862.jpg', 'Motori Minarelli MY', false, true).'
'.visbilled('1', 'billed0801.jpg', '2 takt motor MY 50', false, true).'

Her ses Motori Minarelli CW 50.
2 takt lodret tvunget blæsekølet.
Gearolie drænskrue sidder på en skæv måde.
Gearolie kapacitet : 110 ml.
Elektrisk system : 60 W - 12 V / 120 W – 12 V
Skulle findes i tidlige udgave af diverse Yamaha scootere. Jog og BWS.
'.visbilled('1', 'billed3858.jpg', 'Motori Minarelli CW', false, true).'

Her ses motortypen LJ1PE40QMB-2. Det er vist en kinesiske kopi af en Motori Minarelli motor type. Det ligner CY 50 bortset fra støddæmper ophænget siddet øverst på motorblokken men jeg ved ikke om det er en kopi af den.
2 takt motor tvunget blæsekølet.
'.visbilled('1', 'billed3286.jpg', 'LJ1PE40QMB-2 motor', false, true).'

Her ses Peugeot HA1.
'.visbilled('1', 'billed3868.jpg', 'peugeot horisontal luftkølet HA1 motor', false, true).'
'

,'
væskekølet 2 takt motortyper
' => '
Her ses Motori Minarelli AM 50.
2 takt væskekølet.
Gearolie kapacitet : 820 ml.
Elektrisk system : 95 W - 12 V / 130W- 12V.
6 gear.

AM6 = 6 gear ?.
AM5 = 5 gear ?.
AM4
AM3 = 3 gear ?.

Motoren sidder på motard/cross typer.

Den kinesiske betegnelse kan vist være 1E40MB.

Aprilia Classic, Aprilia Pegaso, Aprilia RS, Aprilia RX, Aprilia SX.
Beta RR Enduro.
Beta RR Motard.

CPI Supercross (CPI 51A).
CPI Supermoto.

Derbi Senda R
Derbi Senda SM

Generic SM, Generic Trigger X.

Gilera RCR
Gilera SMT

Keeway X-Ray.

Rieju RS2
Rieju RS3

Yamaha TZR (Minarelli A136E).
'.visbilled('1', 'billed3859.jpg', 'Motori Minarelli AM', false, true).'

Her ses Motori Minarelli MA 50.
2 takt væskekølet.
Gearolie kapacitet :  110 ml.
Elektrisk system : 60 W - 12 V / 120 W – 12 V.
'.visbilled('1', 'billed3860.jpg', 'Motori Minarelli MA', false, true).'
'.visbilled('1', 'billed0803.jpg', '2 takt motor MA 50', false, true).'

Her ses Peugeot HL2.
'.visbilled('1', 'billed3869.jpg', 'peugeot horisontal væskekølet HL2 motor', false, true).'

Her ses Peugeot HL1.
Direkte brændstofindsprøjtning.
'.visbilled('1', 'billed3870.jpg', 'peugeot horisontal væskekølet indsprøjtning HL1 motor', false, true).'
'

,'
motortyper tabel
' => '
Motortyper som LJ1PE40QMB-2 kan dekodes i denne tabel.

Dele af tabellen har sikkert fejl. '.kontaktmig(true).' gerne hvis du har rettelser eller kan hjælpe med information til tabellen.
'.motortypetable().'
'

,'
diverse 2 takt motortyper
' => '
'.
box(array('200', '300', '200')
   ,array(
       array('producent', 'type', 'andet')
      ,array('
Motori Minarelli
', '
CY 50 (2 takt - Blæse - Variator)
MY 50 (2 takt - Blæse - Variator)
CW 50 (2 takt - Blæse - Variator)
AM 50 (2 takt - Væske - Gear)
MA 50 (2 takt - Væske - Variator)

A123E (Yamaha Aerox)
A136E (Yamaha TZR)
AM6 (Rieju RS2)
7MY (Beta)
20MY (Beta Ark)
35MY (Beta Ark)

C_ ~ ?
_Y ~ vandret tvunget blæsekølet ?
_A ~ vandret væskekølet ?
M_ ~ lodret ?
A_ ~ 6 gear kædetræk ?
_M ~ 6 gear kædetræk ?
_W ~ lodret tvunget blæsekølet ?
XF ~ 4 takt vandret væske ?
', '

')
      ,array('
Morini Franco Motori
', '
AH50L
S6-E
S5-E
S5-T
S5-GS
S6-C
S6-C COMPETITION 50 cm³
S6-S SPORT 50 cm³
S6-T TRAINEE 50 cm³
S6-E ELECTRONIC 50 cm³
M65-C COMPETITION 65 cm³
Franco Motori (italjet)
AH50L (secma funtech)
Franco (Trilet 2000M + LC50)
FM50T (italjet torpedo)
findes blandt andet på Italjet og Secma FunTech
', '

')
      ,array('
Derbi
', '
EBS050
', '

')
      ,array('
', '

', '
Standard moto easy rider SM-50
')
      ,array('
Yamaha
', '
5BR (yamaha aerox)
', '

')
      ,array('
Puch
', '
M-1
M-2
M-3
M-4
M-5
M-6
M-7
M-8
M-9
Z50
ZA50
MS
MSA
', '

')
      ,array('
Piaggio
', '
Hi-PER2 PRO (low-pressure connector next to the intake)
Hi-PER2 (påfyldningshul med oliepind øverst bagerst på motoren)
Hi-PER1 (gearoil påfyldningsskrue og drænskrue nederst på fælg siden af motoren)
'.ahref('http://www.tuningmatters.com/2011/10/23/review-piaggio-engine-differences-hi-per-2-vs-piaggio-old/').'
C281M (italjet torpedo)
C801M (Piaggio Ape)
C421M (Piaggio Liberty 2T)
C371M (Piaggio Liberty 2T)
C426M (Piaggio Liberty 2T)

C216M
C290M (mojito)

PA C373M
C377M
', '

')
      ,array('
aprilia
', '
A00 (habana)
', '

')
      ,array('
PGO
', '
P0
P1
P2
P5
PB192
E1
E1A
', '

')
      ,array('
Kinesiske
', '
LJ1PE40QMB (Longjia)
LJ1PE40QMB-2 (Longjia)
XS1P37QMA-2
XS1PE39QMA (Jet 4 R)
  1E40QMB (generic) 49,2 cc
  1E40QMB-2  = 49,6
  1E40QMB-4 (generic) 49 cc
  1E40MB     = 49,2 - 49,6
  1E40MB-2   = 49,6
QJ1E40MB-2 = 49
  1E40QMB-2
  1E40QMB-4
KW1E40QMB     1,5 kw
KW1E40QMB-4   2,0-2,1 kw
B1E40QBM (45 km/h version peugeot speedfight 3)
B1E40QMB (25 km/h version peugeot speedfight 3)
B1E40MB (væskekølet peugeot speedfight 3)
', '

')
      ,array('

', '

', '

')
   )
)
.'
'.ahref('http://beedspeed.com/html-pages/WhatEngine.htm').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
