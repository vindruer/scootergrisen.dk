<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "fartbegrænser (politiværn)";
$overskrift = "fartbegrænser (politiværn)";
$metadescription = "har forsøger jeg og samle info om fartbegrænser til scootere/knallerter som med et tryk på en knap kan ændre topfarten";

$databasecenter = array(

'
fartbegrænser
' => '
Fartbegrænser kaldes også politiværn.

Der har været nogen brugere som har efterspurgt info om fartbegrænser.

En fartbegrænser er en boks som kan nedsætte scooterens topfart.
Typisk med en knap så man kan slå fartbegrænseren til og fra.

Der findes forskellige modeller.
'

,'
fartbegrænser til 2 takt motor
' => '
Her ses den fartbegrænser der bliver skrevet om og solgt mest på nettet.
Navnet er ukendt.
Den har en ON/OFF kontakt og to ledninger (rød og sort) som skal forbindelses til scooteren.
Denne model dur på scootere med 2 takt motor som har ekstern pickup.
'.visbilled('1', 'billed3775.jpg', 'fartbegrænser', false, true).'

'.afsnit('montering...','
Sort ledning skal have stelforbindelse.
Rød ledning skal sættes på ledningen som går fra pickup til CDI med den medfølgende strømtyv.
').'
'.afsnit('justering...','
Der er 2 justerings "cirkler" der kan drejes med en skruetrækker.

Den ene cirkel kan drejes i 16 trin for at vælge topfart (0 1 2 3 4 5 6 7 8 9 A B C D E F).
0 = Hurtig.
.
.
.
F = Langsom.

Den anden cirkel er til fin justering.
').'
'.afsnit('brug...','
ON/OFF kontakten bruges til at slå fartbegrænsningen til og fra.

OFF : Fartbegrænser er slået fra. Normal ubegrænset topfart.
ON : Fartbegrænser slået til. Topfarten er begrænset.
').'
'.afsnit('udgaver...','
Fartbegrænser med 3 ledninger og magnet kontakt :

Rød : 12 volt fra tændingslåsen
Sort : stelforbindelse
Blå (eller grøn) : pickup

Oversat fra tysk : Til alle køretøjer med ekstern pickup i tændingen.
').'
'.afsnit('monteringsvejledninger...','
Her er links til nogen monteringsvejledninger.
'.visbilled('1', 'billed3864.jpg', 'rev-limiter with switch', false, true).'
'.visbilled('1', 'billed3865.jpg', 'Fine Adjustment For Small RPM-Terminator Mounting Instructions', false, true).'
'.ahref('http://www.speedline.dk/images/vejledning/SW-1000055.jpg', 'monteringsvejledning').'
'.ahref('http://www.scooter-center.com/medias/sys_master/8865914683422/Einbauanleitung%20%28SCK2000%29.pdf', 'Einbauanleitung (SCK2000).pdf').'
'.ahref('http://www.scooter-center.com/medias/sys_master/8866165948446/Einbauanleitung%20%28SCK6000%29.pdf', 'Einbauanleitung (SCK6000).pdf').'
').'
'.afsnit('kan købes hos...','
'.ahref('http://www.kgi.dk/product-1473.php', 'kgi.dk').' Set til 139,95 kroner ("Kan kun monteres på modeller med pickup ved svinghjulet")
'.ahref('http://www.speedline.dk/da/scooter/fartbegraenser-s-sw-1000055/', 'speedline.dk').' Set til 139,95 kroner (har kun 1 juster cirkel) '.ahref('http://www.speedline.dk/images/vejledning/SW-1000055.jpg', 'monteringsvejledning').'
'.ahref('http://www.msp-tuning.dk/pi/Motoforce_fartbegr%C3%A6nser_2731_.aspx', 'msp-tuning.dk').' Set til 189,- kroner
'.ahref('http://www.scooter-dele.dk/piz.asp?ID=1952&aid=23844', 'scooter-dele.dk').' Set til 99,- kroner
'.ahref('http://www.protunahandels.de/product.asp?c=314157754&n=19084216&pn=19084219', 'protunahandels.de').' Set til 99,- kroner ("Rød ledning skal på statoren.")
'.ahref('http://www.scooterland.dk/default.asp?PageID=3&ProductCategoryID=2430,3,43,181&ProductID=5789&Mode=ShowProduct&HotPrice=', 'scooterland.dk').' Set til 129,- kroner
').'
'.afsnit('modeller som denne fartbegrænser skulle virke (eller ikke virke) på...','

'.
box(array('250', '250', '200', '200')
   ,array(
       array(''.ahref('http://www.speedline.dk/da/scooter/fartbegraenser-s-sw-1000055/', 'speedline.dk').' skriver...', ''.ahref('http://www.msp-tuning.dk/pi/Motoforce_fartbegr%C3%A6nser_2731_.aspx', 'msp-tuning.dk').' skriver...', ''.ahref('http://www.protunahandels.de/product.asp?c=314157754&n=19084216&pn=19084219', 'protunahandels.de').' skriver...', ''.ahref('http://www.kgi.dk/product-1473.php', 'kgi.dk').' skriver...')
      ,array('
Varen passer på :

Aprilia Amico
Aprilia Area 51
Aprilia Habana Custom (1999-2004 - Morini motor)
Aprilia Habana Custom (efter 2004 - Piaggio motor)
Aprilia Rally (AC)
Aprilia Rally (LC)
Aprilia Scarabeo (Minarelli vandret)
Aprilia Sonic (AC)
Aprilia Sonic (LC)
Aprilia Sportcity One 2T
Aprilia SR 50 (Minarelli vandret - AC)
Aprilia SR 50 (Minarelli vandret - LC)
Aprilia SR 50 lodret (Minarelli lodret) og SR 50 R Factory (karburator)
Benelli 491 (før 2003 - AC)
Benelli 491 (før 2003 - LC) og K2 (AC)
Beta Ark (AC) og Ark (LC)
CPI Aragon
CPI GTR (LC)
CPI Hussar
CPI Oliver
CPI Popcorn og Super Motard
Derbi Atlantis Bullet (fra 06/2002 - Piaggio motor)
Derbi Atlantis Wave (før 06/2002)
Derbi GP1
Derbi GPR (før 2006)
Derbi Senda (2003-2005)
Derbi Senda (2006-2010) og Senda SM (fra 2011)
Generic Ideo (AC)
Generic Trigger SM
Generic Trigger X og XOR 50 (AC)
Giantco Lambros og Spartan
Gilera DNA
Gilera Ice
Gilera Runner (før 08/2005 - AC)
Gilera Runner (før 08/2005 - LC)
Gilera Runner SP (efter 08/2005 - AC)
Gilera Stalker og Storm
Honda SFX og X8R
Keeway F-Act
Keeway Flash
Keeway Focus og Huricane
Kymco Fever ZX
Kymco K12
Kymco People og Super 9
Peugeot Buxy
Peugeot Jet C-tech
Peugeot Looxor
Peugeot Ludix
Peugeot Speedake
Peugeot Speedfight 2 (AC)
Peugeot Speedfight 2 (LC)
Peugeot TKR
Peugeot Vivacity (før 2008)
Peugeot XPS og XR6
PGO Big Max 10"
PGO Big Max 12" - 3 eger
PGO Big Max 12" - 6 eger
PGO Black Magic
PGO Comet
PGO Dr. Big/T-rex
PGO G-Max
PGO Galaxy
PGO Hot50 10"
PGO Hot50 12" - 3 eger
PGO Hot50 12" - 6 eger
PGO Libra
PGO Ligero
PGO New Ligero
PGO PMX
PGO PMX Naked
PGO PMX Sport
PGO Rodoshow
PGO T-rex 110ccm
PGO Tornado
PGO TR3
PGO White Magic og X-Hot
Piaggio ET2
Piaggio Fly 2T
Piaggio Liberty
Piaggio LX 50 2T
Piaggio New Zip 2T
Piaggio NRG Mc2 (LC)
Piaggio NRG Mc3 (AC)
Piaggio NRG Power DT
Piaggio Typhoon (efter 2010)
Piaggio Typhoon (før 2010)
Piaggio Zip (efter 1999) og Zip SP (efter 2006)
Rieju MRX-RRX og RS2 Matrix (før 2006)
Sym DD
Sym Jet Euro X
Sym Jet Sport X SR og Jet50
TGB 101R og 303R Hawk
Yamaha Aerox (efter 2004)
Yamaha Aerox (før 2003)
Yamaha Axis
Yamaha BWS/Spy
Yamaha DT50
Yamaha Jog AS/FS
Yamaha Jog R
Yamaha Jog RR
Yamaha Neos 2T (efter 07/2007)
Yamaha Neos 2T (før 07/2007)
Yamaha Slider (før 2004) og TZR
', '
Varen passer på :

Adly Cat
Adly Jet
Adly Silverfox
Adly Super sonic
Adly Thunderbike
Aprilia Amico
Aprilia Area 51
Aprilia Habana (Morini motor)
Aprilia Habana (Piaggio motor)
Aprilia Rally (AC)
Aprilia Rally (LC)
Aprilia RS50 ..2006
Aprilia RX50 ..2006
Aprilia Scarabeo
Aprilia Sonic (AC)
Aprilia Sonic (LC)
Aprilia SR50 (AC)
Aprilia SR50 (LC)
Aprilia SR50 2000 (Morini motor)
Aprilia SR50 Ditech (Morini motor)
Aprilia SR50 Ditech GP1 (Piaggio motor)
Aprilia SR50 Lodret
Aprilia SR50 R (Piaggio motor)
Aprilia SR50 R Factory
Aprilia SX50 2006 &gt;
Benelli 491 (AC)
Benelli 491 (LC)
Benelli K2
Beta Ark (AC)
Beta Ark (LC)
CPI Aragon
CPI GTR (LC)
CPI Oliver
CPI Popcorn/Hussar
Derbi Atlantis
Derbi Atlantis Bullet
Derbi GP1
Derbi GPR
Derbi Senda &lt;-2006
Derbi Senda 2007-&gt;
Derbi Senda sm
Giantco Lambros
Giantco Spartan
Gilera DNA
Gilera Ice
Gilera Runner (AC)
Gilera Runner (LC)
Gilera Runner Purejet
Gilera SMT &lt;2006
Gilera Stalker
Gilera Storm
Honda SFX
Honda X8R
Italjet Dragster
Keeway Flash
Keeway Focus
Keeway Hurricane
Kymco Fever ZX
Kymco K12
Kymco People
Kymco Super 9
Peugoet Buxy
Peugoet Jet C-tech
Peugoet Looxer
Peugoet Ludix
Peugoet Speedake
Peugoet Speedfight 2 (AC)
Peugoet Speedfight 2 (LC)
Peugoet TKR
Peugoet Vivacity
PGO Bigmax
PGO Comet
PGO Dr. Big
PGO Galaxy
PGO G-Max
PGO Hot50
PGO Libra
PGO Ligero
PGO New ligero
PGO PMX
PGO PMX Naked
PGO PMX Sport
PGO Rodoshow
PGO Tornado
PGO TR3
PGO White Magic
PGO X-hot
Piaggio ET2
Piaggio Fly
Piaggio Liberty
Piaggio LX50 2T
Piaggio New Zip 2T
Piaggio NRG (AC)
Piaggio NRG (LC)
Piaggio NRG Mc3
Piaggio NRG Power DT
Piaggio NRG Purejet
Piaggio Typhoon
Piaggio Typhoon new
Piaggio Zip
Piaggio Zip SP
Puch Maxi
Rieju MRX-RRX
Rieju RS2
Suzuki Adress
Suzuki Estilete
Suzuki Katana (AC)
Suzuki Katana (LC)
Suzuki RMX
Suzuki SMX
Suzuki Street Magic
Sym DD
Sym Jet Euro X
Sym Jet50
Sym Sym Jet Sport X SR
TGB 101R
TGB 104T
TGB 303R Hawk
TMS Classic
VGA Digita
VGA Grido
Yamaha Aerox &lt;2003
Yamaha Aerox 2004&gt;
Yamaha Axis
Yamaha Bw\'s / Spy
Yamaha DT
Yamaha Jog
Yamaha Jog R (AC)
Yamaha Jog RR (LC)
Yamaha Neo\'s
Yamaha Slider
Yamaha TZR
', '
Virker ikke på :

Suzuki
Atala
ItalJet
Tomos
Derbi Vamos
Morini-motorer
', '
Kan ikke monteres på Derbi/Piaggio/Aprillia med Leonelli tændinger.
Heller ikke på 4 takt maskiner.

Passer til: 	

Adly Silverfox
Aprilia Amico
Aprilia Area51
Aprilia Gulliver
Aprilia Habana Custom
Aprilia Habana Morini motor
Aprilia Rally
Aprilia Rally LC
Aprilia RS 50 06->
Aprilia RS 50 93-95
Aprilia RS 50 96-98
Aprilia RS 50 99-05
Aprilia RX 50
Aprilia Scarabeo 2T 97-05
Aprilia Sonic
Aprilia SR
Aprilia SR AC 97-01
Aprilia SX-RX 50 2006
Benelli 491 Minarelli motor
Beta Ark
CPI GTR 50 LC
CPI Hussar 01- 02 Euro 1
CPI Hussar Euro 2
CPI Oliver City Euro2
CPI Oliver City Sport Euro 2
CPI Popcorn
Derbi Atlantis 2T
Derbi Atlantis Bullet
Derbi Predator
Derbi Senda 2000 til 2002
Derbi Senda 50 fra 2003 - 2005
Derbi Senda DRD fra 2010 (D50B0)
Derbi Senda DRD Pro til 2010 (D50B0)
Derbi Senda fra 2006-10 (D50B0)
Derbi Vamos
Gilera DNA
Gilera Ice 50
Gilera Runner
Gilera Runner SP
Gilera SMT/RCR 2006-10
Gilera Stalker
Honda SFX
Honda X8R
Italjet Formula 50 
Kymco K12
Kymco People 50cc 2T
Kymco Super 9
Kymco Super 9 L/C
Kymco ZX Fever
Malaguti F10
Malaguti Phantom F-12
Peugeot Buxy
Peugeot Elyseo 50
Peugeot Elystar 50
Peugeot Looxor
Peugeot Ludix Classic
Peugeot Ludix One
Peugeot Ludix Post
Peugeot Ludix Snake
Peugeot Speedake
Peugeot Speedfight 2 ac/lc
Peugeot Squab
Peugeot TKR
Peugeot Trekker
Peugeot Vivacity
Peugeot XPS
Peugeot XR6
Peugeot Zenith
PGO Big Max 10" hjul
PGO Big Max 12" 3 eger
PGO Big Max 12" 6 eger
PGO Black Magic
PGO Comet
PGO Dr. Big
PGO G-Max
PGO Galaxy
PGO Hot50 10" hjul
PGO Hot50 12" 3 eger
PGO Hot50 12" 6 eger
PGO Ligero
PGO PMX Naked
PGO PMX/PMX Sport
PGO Rodo Show 50
PGO T-REX 30 km/t.
PGO T-REX 45 km/t.
PGO Tornado
PGO TR3-50
PGO X-Rider  50
PGO XL Rider 50
Piaggio Ciao Gammel model
Piaggio NRG
Piaggio NRG Extreme
Piaggio NRG MC3
Piaggio NRG Power DT
Piaggio Skipper 125
Piaggio Typhoon  50
Piaggio Zip
Piaggio Zip SP
Rieju Drac 1999-2000
Rieju RS 2 Matrix <- 2006
Rieju Spike
Sherco Enduro 50
Suzuki Address
Suzuki Estilette
Suzuki Katana (LC)
Suzuki Street Magic
Sym DD
Sym Jet
Sym Jet Euro X 50
TMP Baboon
TMP Gazelle
Vespa Ciao
Yamaha Aerox 1999 - 2003
Yamaha Aerox from 2003
Yamaha Aerox til 1999
Yamaha BWs
Yamaha BWs NG
Yamaha DT50
Yamaha Jog
Yamaha Jog R/RR
Yamaha Jog Spaceinnovation
Yamaha Neos 2T -> 2008
Yamaha Neos 2T 2008->
Yamaha Slider
Yamaha TZR 50
Yamaha Why
')
   )
)
.'
').'
'
.visflash('0', 'http://www.scootergalleri.dk/video/guider/96746-fartbegraenser_', 'video - Fartbegrænser (blå/gul på PGO Hot SP)', true)
.visflash('0', 'http://www.scootergalleri.dk/video/guider/88528-politivaern_guide_og_effekt', 'video - Politiværn Guide og Effekt (rød på Gilera Stalker)', true)
.visflash('0', 'http://www.scootergalleri.dk/video/guider/89845-politivaern', 'video - Politiværn', true)
.visflash('0', 'http://www.scootergalleri.dk/video/guider/79500-hvordan_politi_vaern_skal_tilsluttes___', 'video - Hvordan Politi-værn skal tilsluttes... (blå/hvid (eller hvid/grøn) ledning på CPI)', true)
.'

'.ahref('http://www.scootergalleri.dk/fotoalbum/diverse_scooter/50407-dobbelttjekning__af_fartbegraenser', 'Anden fartbegrænser').'.
'

,'
fartbegrænser til 4 takt motor
' => '
Fartbegrænser til nogle 4 takt motorer kan købes hos '.ahref('http://www.scooter-spare-parts.de/shop/Drehzahlbegrenzer:::1.html', 'scooter-spare-parts.de').'.

'.afsnit('de har opdelt deres fartbegrænsere i 4 kategorier', '
Standard (motor med karburator)
DITech/Purejet/TSDI (motor med indsprøjtning)
Motor med pickup ved koblingsklokken
Motor uden pickup ved koblingsklokken
').'
'
.visbilled('1', 'billed3774.jpg', 'fartbegrænser', false, false)
.visbilled('1', 'billed3866.jpg', 'fartbegrænser speedotronic Drehzahlbegrenzer Doublecheck mit Magnet-/Taster', false, false)
.visbilled('1', 'billed3867.jpg', 'fartbegrænser speedotronic speedlimiter 4-Takt', false, false)
.'

Nogen fås med magnet/knap. Noget de kalder doublecheck, triplecheck.

Her er en manual jeg fik tilsendt af dem.
'.visfil('1', 'scooterhjemmeside/download/speedotronic%20Drehzahlbegrenzer%20Doublecheck-Triplecheck%20Einbauanleitung.pdf', 'speedotronic Drehzahlbegrenzer Doublecheck-Triplecheck Einbauanleitung.pdf').'

'.afsnit('kan købes hos...','
'.ahref('http://www.scooter-spare-parts.de/shop/Drehzahlbegrenzer:::1.html', 'scooter-spare-parts.de').' set til 23,95 - 119,95 € (178 - 894 DK Kroner).
').'

'.
box(array('350')
   ,array(
       array(''.ahref('http://www.scooter-spare-parts.de/shop/Drehzahlbegrenzer/DZB-4T-Roller-ohne-speedsensor/speedotronic-Drehzahlbegrenzer-Triplecheck-mit-Magnet-Taster::303.html', 'scooter-spare-parts.de').' skriver at en af fartbegrænserne passer på følgende modeller...')
      ,array('
Baotian:
-Baotian-BT49QT-11 Retro
-Baotian-BT49QT-12A1
-Baotian-BT49QT-12A2 Terminator
-Baotian-BT49QT-12B2
-Baotian-BT49QT-12B2 Terminator
-Baotian-BT49QT-12B3 Diablo
-Baotian-BT49QT-12C1 Rebel
-Baotian-BT49QT-12D1 Hero
-Baotian-BT49QT-12E1 Rocky
-Baotian-BT49QT-12F1 Tanco
-Baotian-BT49QT-12G
-Baotian-BT49QT-12P1 Tiger
-Baotian-BT49QT-12P2
-Baotian-BT49QT-18C1 B010 (1E40QMA)
-Baotian-BT49QT-18E1 Rocky (1E40QMA)
-Baotian-BT49QT-18F1 Tanco (1E40QMA)
-Baotian-BT49QT-20A2
-Baotian-BT49QT-28A (1E40QMA)
-Baotian-BT49QT-28B Terminator
-Baotian-BT49QT-2A Big Panther
-Baotian-BT49QT-2C Falcon
-Baotian-BT49QT-2C4
-Baotian-BT49QT-3
-Baotian-BT49QT-6A
-Baotian-BT49QT-6A1
-Baotian-BT49QT-6A4
-Baotian-BT49QT-6B
-Baotian-BT49QT-6B1
-Baotian-BT49QT-6B4
-Baotian-BT49QT-7 Smart Rider
-Baotian-BT49QT-7A
-Baotian-BT49QT-9 Sprint
-Baotian-BT49QT-9F
-Baotian-BT49QT-9F1 Eagle
-Baotian-BT49QT-9F3 Eagle
-Baotian-BT49QT-9R1
-Baotian-BT49QT-9R3
-Baotian-BT49QT-9S1
-Baotian-BT50QT-11 Retro
-Baotian-BT50QT-9 Ecobike

Benzhou:
-Benzhou-City Star (YY50QT)
-Benzhou-Formula 2000 (YY50QT-6A)
-Benzhou-Formula One (YY50QT-6)
-Benzhou-Retro Star (YY50QT-15)
-Benzhou-YY50QT-2
-Benzhou-YY50QT-3
-Benzhou-YY50QT-4
-Benzhou-YY50QT-5 Formula One
-Benzhou-YY50QT-6A Formula Z000
-Benzhou-YY50QT-6B
-Benzhou-YY50QT-6D
-Benzhou-YY50QT-6E
-Benzhou-YY50QT-7A
-Benzhou-YY50QT-A(B15)
-Benzhou-YY50QT-A(B16)
-Benzhou-YY50QT-8
-Benzhou-YY50QT-9
-Benzhou-YY50QT-10A
-Benzhou-YY50QT-11
-Benzhou-YY50QT-14
-Benzhou-YY50QT-15
-Benzhou-YY50QT-15A
-Benzhou-YY50QT-21
-Benzhou-YY50QT-21A
-Benzhou-YY50QT-22
-Benzhou-YY50QT-26
-Benzhou-YY50QT-26A
-Benzhou-YY50QT-27 (2-Takt)
-Benzhou-YY50QT-C
-Benzhou-YY50QT-D(QQ)
-Benzhou-YY50QT-G

Buffalo:
-Buffalo Hero 50
-Buffalo Spiker
-Buffalo Tanco 50
-Buffalo Warrior 50

Eppella:
-Eppella GMX 25
-Eppella GMX 50

Explorer:
-Explorer Race GT50

FlexTech:
-FlexTech Athena
-FlexTech Dolphin
-FlexTech Firenze 25
-FlexTech Firenze 50
-FlexTech Fun 50
-FlexTech Napoli 50
-FlexTech Spedy
-FlexTech Sprint
-FlexTech Topdrive
-FlexTech Topspeed
-FlexTech TVZ 25
-FlexTech TVZ 50 (Buffalo)
-FlexTech Venus II
-FlexTech Hurrican X1
-FlexTech Hurrican X2

Matorro:
-Matorro Hawk

Huatian:
-Huatian-HT50QT-10
-Huatian-HT50QT-16
-Huatian-HT50QT-22
-Huatian-HT50QT-25
-Huatian-HT50QT-26
-Huatian-HT50QT-36
-Huatian-HT50QT-6
-Huatian-HT50QT-7
-Huatian-HT50QT-9

Jack Fox:
-Jack Fox Apollo 50 (YY50QT-26A)
-Jack Fox City Star (YY50QT)
-Jack Fox F3000 (YY50QT-6E)
-Jack Fox Formula 2000 (YY50QT-6A)
-Jack Fox Formula One (YY50QT-6)
-Jack Fox GT50 (YY50QT-6B)
-Jack Fox GT50 2 (YY50QT-27)
-Jack Fox Retro Cruiser (YY50QT-21A)
-Jack Fox Retro Star 2 (YY50QT-15A)

Juncheng:
-Jincheng JC50QT-15

Jinlun:
-Jinlun Fighter 50 (JL50QT-5)
-Jinlun JL50QT-6

Jmstar:
-Jmstar Accipiter 50 (JSD50QT-21C) 4T
-Jmstar B09 Sunfire Racing 50 (JSD50QT-27) 4T
-Jmstar Breeze 50 (JSD50QT-13) 4T
-Jmstar Eagle 50 (JSD50QT-21) 4T
-Jmstar Falcon 50 (JSD50QT-21A) 4T
-Jmstar Sunny 50 (JSD50QT-27) 4T
-Jmstar Z-Bike 50 (JSD50QT-15) 4T
-Jmstar Zeus 50 (JSD50QT-15C) 4T

Johnway:
-Johnway AA

Karcher:
-Karcher ZY50QT-7

Kinroad:
-Kinroad XT50QT-2
-Kinroad XT50QT-2A
-Kinroad XT50QT-6A
-Kinroad XT50QT-6B
-Kinroad XT50QT-6C
-Kinroad XT50QT-6N
-Kinroad XT50QT-108A
-Kinroad XT50QT-10

Magnet:
-Magnet 4T

MKS Ecobike:
-MKS Panther II

Longjia:
-Longjia-LJ50QT-E 4T
-Longjia-LJ50QT-F 2T
-Longjia-LJ50QT-F-01 2T
-Longjia-LJ50QT-K 2T

REX
- REX Escape 50
- REX E-Rex
- REX Rex 50
- REX Rexy 50
- REX RS 4
- REX Silverstreet 50
- REX RS250
- REX RS400
- REX RS450
- REX RS460
- REX RS500
- REX RS600
- REX RS700
- REX RS750
- REX RS900
- REX RS1000
- REX RS1100

Rhon:
-Rhon LH50TQ-5
-Rhon LH50TQ-6
-Rhon LH50TQ-9
-Rhon LH50TQ-B

Rieju:
-Rieju YH50QT Corero 50
-Rieju YH50QT-2

Sachs:
-Sachs 49er I

Sanli:
-Sanli SL50QT-8
-Sanli TS50QT-8
-Sanli XTR-50

Sukida:
-Sukida Dolphin 50
-Sukida Roma 50 (SK50QT-9)
-Sukida Sprint-10 50 (SK50QT-A)
-Sukida Sprint-12 50 (SK50QT-B)
-Sukida Venus 50
-Sukida SK50QT-A

Yamasaki:
-Yamasaki YM50QT-C
-Yamasaki YM50QT-C3
-Yamasaki YM50QT-F1
-Yamasaki YM50QT-F4

Yoyo:
-Yoyo 4T

Xinling:
-Xinling TMX50C
-Xinling TMX50D
-Xinling TMX50E
-Xinling TMX50QT-A
-Xinling XL50QT-B
-Xinling XL50TP-7
-Xintian (Kinroad) XT50QT

Zhejiang:
-Zhejiang Hongzhou HL50QT-16(1)
-Zhejiang Hongzhou HL50QT-16(2)
-Zhejiang Hongzhou HL50QT-16(3)
-Zhejiang Hongzhou HL50QT-16(4)
-Zhejiang Hongzhou HL50QT-16(5)
-Zhejiang Hongzhou HL50QT-16(6)
-Zhejiang Hongzhou HL50QT-16(7)
-Zhejiang Hongzhou HL50QT-2(1)
-Zhejiang Hongzhou HL50QT-21(11)
-Zhejiang Hongzhou HL50QT-21(12)
-Zhejiang Hongzhou HL50QT-21(3)
-Zhejiang Hongzhou HL50QT-21(5)
-Zhejiang Hongzhou HL50QT-21(6)
-Zhejiang Hongzhou HL50QT-21(7)
-Zhejiang Hongzhou HL50QT-21(8)
-Zhejiang Hongzhou HL50QT-21(9)
-Zhejiang Hongzhou HL50QT-35(1)
-Zhejiang Hongzhou HL50QT-43

Zhongyu:
-Zhongyu ZY50QT-3
-Zhongyu ZY50QT-5
-Zhongyu-ZY50QT-7

Zongshen:
-Zongshen-ZS50QT-4 (Cab 50)

Znen:
-Znen ZN50QT-6
-Znen ZN50QT-11
-Znen ZN50QT-15
-Znen ZN50QT-A
-Znen ZN50QT-E
')
   )
)
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
