<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "derbi 50 cm³ scootere";
$overskrift = "derbi";
$metadescription = "billeder, specifikationer, manualer, el diagrammer, reservedele og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter_b = array(

'
Bonus info
' => '
Når indikatoren lyser, overstiger kølevandets temperatur 105 °C.
olie : Når advarselslampen lyser, er der 0,26 liter tilbage i tanken.
Når benzinlampen lyser, er der 1,29 liter tilbage i benzintanken.

'.citat('
Sendaen fik et "facelift" i 2006 mener jeg (og igen i 2008-modellerne). \'04-modellen har et rundt hul i sideskjoldet foran, hvor de nye har et usammenhængende hul/indhak.
').'

VTHSR1D1A
VTHSR2D1A
VTHSR2D1A5
VTHSDR1CB2H186821
---
49,9
13:1
SAE 10W30 tai 10W40 Gear
0,65 Litraa

Ø35mm / 2,75 dl - Ø36mm / 2,85 dl - Ø37mm / 3,10 dl - 7,5 W
Z12 - Z13
Z70
DOT 4

Dell\'Orto PHVA 14
7,0 liter
12 4ah
35/35
21/5
1,2
12v 65w
cdi
22\' @ 3000
NGK B8ES Champion N3C
(0,6 mm)
----
brugermanual : 
flerplader oliebad kobling
Hovedgear: Med præcisionstandhjul, 21/78
Gearvælger: Vælger med gaffel og fordelertromle aktiveret med
eksternt gearskifte.
Forhold:
1. gear 11/34 4. gear 20/24
2. gear 15/30 5. gear 22/23
3. gear 18/27 6. gear 23/22

Type: Kæde, med 12,70 mm ledafstand og rullediameter 7,75 mm.
Udveksling: 13/53 / 14/53
(Skandinavisk)

TDC-fortænding: 1,2 mm
NGK B8ES
12 V pære 35/35 W (Senda X-Treme X-Race R/SM)
Stop-/baglygte: 12 V 21/5 W (Senda X-Treme X-Race R/SM)
Blinklys: 12 V-pære, 10 W
stel : Delta Box
Hydraulisk gaffel
Drejearm med progressiv hydraulisk stødabsorbtion
Hydraulisk skivebremse

Benzintank: Volumen 6,5 L / Reserve 1,3 L
Olietank: Volumen 1 L / Reserve 0,25 l.

Senda X-Treme X-Race
Fuld længde: 2030 mm
Akselafstand: 1355 mm.
Bredde (styr): 780 mm.

Olietanken har plads til 1 liter og en reserve på 0,25 liter. Anvend altid syntetisk SAE 30.

0,6-0,7

Olie til bundkarret:
• Viskositet: SAE 10W 40
• Kvalitet: API GL4
• Kapacitet: 650 cm3 (0,65 l)
'

);

$databasecenter = array(

'derbiatlantis' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'derbi atlantis', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'derbi bullet', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', '', '', '', '')
      ,'bremserbag'        => ens('bremser', '', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'VTHAL2AE26G233 VTHAL2AE26G240 VTHAL2AE26G240193 VTHAL2A1A4G217899 (lille knallert)', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'derbiatlantis3hjul' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'Derbi Atlantis 3 hjul', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '39995', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', '', '', '', '')
      ,'bremserbag'        => ens('bremser', '', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'derbigp1' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'derbi GP1 ser ud til at kunne fås i 2 udgaver. Racing og Open. Jeg ved ikke hvilken udgave disse data er til.', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'derbi GP1', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Derbi C366M', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,0', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '40,0', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,6', 'kw', '', '(i følge 45 km/t typegodkendelse))')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'PHVA 17,5', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1900', '', '', '')
      ,'bredde'            => ens('bredde', '735', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1330', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3,50', '14', '', '')
      ,'fælgbag'           => ens('fælg', '3.75', '14', '', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '14', '')
      ,'dækbag'            => ens('dæk1', '140', '60', '14', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'bagudvendt svinggaffel', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '245', 'hydraulisk', '')
      ,'bremserbag'        => ens('bremser', 'skive', '180', 'mekanisk', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', 'Z19', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', 'Z45', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'specialprofil', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'VTHPR1A1A5G (45 km/t E14188)', '', '', '')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '120', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '290', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'Carl Andersen Motorcykler A/S', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '6,0 mm afstandsskive melle de forreste remskivehalvdele', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '2 stk. Resonatorrør påsvejst forreste udstødningsrør ø24 x 196 mm og ø24 x 200 mm', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'derbihunter' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'derbi hunter', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', '', '', '', '')
      ,'bremserbag'        => ens('bremser', '', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'VTHHUNTERVG065048 S08133-01', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'derbipredator' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'derbi predator', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', '', '', '', '')
      ,'bremserbag'        => ens('bremser', '', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'VTHPREDABWG093 (45 km/t)', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'derbisendar' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'Denne model har nobret større dæk, mindre skivebremse foran i forhold til Derbi Senda SM', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'derbi senda R', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', 'Derbi Senda R X-Race', 'Derbi Senda R X-Treme', 'Derbi Senda R DRD Racing ?', '')
      ,'pris'              => ens('pris', '19995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://pgdanmark.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', 'aluminiumscylinder', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,9', '', '', '')
      ,'køling'            => ens('køling', 'væske', '', '', '')
      ,'boring'            => ens('boring', '39,86', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '40', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '11,5', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,1', 'kw', '', '(i følge 30 km/t typegodkendelse med EAT050 motor)') . ens('maxeffektogheste', '1,85', 'kw', '', '(i følge 45 km/t typegodkendelse med EBS050 motor)') . ens('maxeffektogheste', '2,35', 'kw', '', '(i følge 45 km/t typegodkendelse med EBS050 motor)') . ens('maxeffektogheste', '2,1', 'kw', '', '(i følge 30 og 45 km/t typegodkendelse med D50B eller D50C motor)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'PHVA 14', '', '', '(op til 9-5-2006 i følge typegodkendelserne) på motor EBS050 og EAT050') . ens('karburator', 'PHVA 17,5', '', '', '(efter 13-9-2006 i følge typegodkendelserne) på motor D50B og D50C')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'automatisk oliepumpe', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1900', '', '', '') . ens('længde', '2030-2035', '', '', '(i følge typegodkendelserne)')
      ,'bredde'            => ens('bredde', '805', '', '', '') . ens('bredde', '840', '', '', '(i følge typegodkendelse 2004)') . ens('bredde', '780', '', '', '(i følge typegodkendelse 2000 2002)') . ens('bredde', '830', '', '', '(i følge typegodkendelse 2002)')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '875', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1355 eller 1410', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '8,0', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '') . ' eller ' . ens('fælg', '1.60', '21', '', '')
      ,'fælgbag'           => ens('fælg', '1.85', '18', '', '(ser ud til at være fra 2006 og frem)') . ' eller ' . ens('fælg', '2.15', '18', '', '(ser ud til at være op til 2004')
      ,'dækfor'            => ens('dæk1', '80', '90', '21', '')
      ,'dækbag'            => ens('dæk1', '110', '80', '18', '')
      ,'dæktrykfor'        => ens('dæktryk', '1,0', 'kgcm2', '', '(1 person)') . ens('dæktryk', '1,1', 'kgcm2', '', '(2 personer)')
      ,'dæktrykbag'        => ens('dæktryk', '1,2', 'kgcm2', '', '(1 person)') . ens('dæktryk', '1,3', 'kgcm2', '', '(2 personer)')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '240', 'hydraulisk', '')
      ,'bremserbag'        => ens('bremser', 'skive', '180', 'hydraulisk', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '6', 'manuel', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', 'Z11 - Z14', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', 'Z53 - Z70', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'stål', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'VTHSR__1A', 'VTHSR1D1A', 'VTHSDR1', 'ZDPABG01XBH ZDPABG011BH ZDPABG018BH') . ' ZDPABG015BH (lille knallert), ZDPABG012BH (lille knallert) VTHSENDARVH065 (stor 1997) VTHSDR1EBYH139600 (E10501)'
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '97', '', '', '(bare angivet som vægt)') . ens('vægttør', '90', '', '', '(i følge typegodkendelserne)')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '96', '', '', '(i følge typegodkendelse efter 1996)') . ens('vægtkørerklar', '80', '', '', '(i følge typegodkendelse 2000)') . ens('vægtkørerklar', '90', '', '', '(i følge typegodkendelse 2002)')
      ,'vægttotal'         => ens('vægttotal', '270', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'DOT 4', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'PG Danmark A/S', 'Carl Andersen Motorcykler A/S', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '9-5-2006 EAT050 : Plade i indsugning Ø6', '2002 + 2004 EBS050 : Hjerteklapventilens åbning mellem bøjlerne, målt fra yderside til yderside skal være 23 mm. Sikret ved at indsugningsrøret er fastgjort til cylinderen med "sprængbolte". (med Hjerteklapventilens regner jeg med der menes reedvalve)', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '9-5-2006 EAT050 : Resonatorrør Ø30mm L: 218 mm, indgang i udstødning Ø14 mm', '2004 EBS050 : Bøsning isvejst forreste del af udstødningsrør med begrænset lysning ø 12 mm og indvendig længde i udstødningsrør på 115 mm.', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '9-5-2006 : Tegn nummer 7 i VIN-kode er C og angiver den godkendte maksimale hastighed 30 km/t<br>2007 + 2010 : Tegn nr. 7 i stelnummeret er "F" og angiver den maksimale hastighed = 30 km/t', '13-9-2006 : Tegn 7 i stelnummeret er D og angiver den maksimale hastighed = 45 km/t<br>2007 + 2010 : Tegn nr. 7 i stelnummeret er "A" og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'derbisendasm' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'Denne model har mindre dæk uden nubber, større skivebremse foran i forhold til Derbi Senda R', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'derbi senda SM', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', 'Derbi Senda SM X-Race', 'Derbi Senda SM X-Treme', 'Derbi Senda SM DRD Racing ?', '')
      ,'pris'              => ens('pris', '19995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://pgdanmark.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', 'aluminiumscylinder', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,9', '', '', '')
      ,'køling'            => ens('køling', 'væske', '', '', '')
      ,'boring'            => ens('boring', '39,86', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '40', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '11,5', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,1', 'kw', '', '(i følge 30 km/t typegodkendelse med EAT050 motor)') . ens('maxeffektogheste', '1,85', 'kw', '', '(i følge 45 km/t typegodkendelse med EBS050 motor)') . ens('maxeffektogheste', '2,35', 'kw', '', '(i følge 45 km/t typegodkendelse med EBS050 motor)') . ens('maxeffektogheste', '2,1', 'kw', '', '(i følge 30 og 45 km/t typegodkendelse med D50B eller D50C motor)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'PHVA 14', '', '', '(op til 9-5-2006 i følge typegodkendelserne) på motor EBS050 og EAT050') . ens('karburator', 'PHVA 17,5', '', '', '(efter 13-9-2006 i følge typegodkendelserne) på motor D50B og D50C')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'automatisk oliepumpe', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1900', '', '', '') . ens('længde', '1980', '', '', '(i følge typegodkendelserne)')
      ,'bredde'            => ens('bredde', '805', '', '', '') . ens('bredde', '840', '', '', '(i følge typegodkendelse 2004)') . ens('bredde', '780', '', '', '(i følge typegodkendelse 2000 2002)') . ens('bredde', '830', '', '', '(i følge typegodkendelse 2002)')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '875', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1355 eller 1410', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '8,0', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.50', '17', '', '')
      ,'fælgbag'           => ens('fælg', '3.50', '17', '', '')
      ,'dækfor'            => ens('dæk1', '100', '80', '17', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '17', '')
      ,'dæktrykfor'        => ens('dæktryk', '1,7', 'kgcm2', '', '(1 person)') . ens('dæktryk', '1,8', 'kgcm2', '', '(2 personer)')
      ,'dæktrykbag'        => ens('dæktryk', '2,0', 'kgcm2', '', '(1 person)') . ens('dæktryk', '2,2', 'kgcm2', '', '(2 personer)')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '260', 'hydraulisk', '')
      ,'bremserbag'        => ens('bremser', 'skive', '180', 'hydraulisk', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '6', 'manuel', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', 'Z11 - Z14', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', 'Z53 - Z70', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'stål', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'VTHSR__2A', '___SR2D1A', 'VTHSR2F1A8H VTHSR2F1A7H350 (lille knallert)', 'VTHSR2C1A6H VTHSR2F1AAH VTHSR2F1AAH450 (lille)')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '118', '', '', '(bare angivet som vægt)') . ens('vægttør', '90', '', '', '(i følge typegodkendelserne)')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '96', '', '', '(i følge typegodkendelse efter 1996)') . ens('vægtkørerklar', '80', '', '', '(i følge typegodkendelse 2000)') . ens('vægtkørerklar', '90', '', '', '(i følge typegodkendelse 2002)')
      ,'vægttotal'         => ens('vægttotal', '270', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'DOT 4', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'PG Danmark A/S', 'Carl Andersen Motorcykler A/S', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '9-5-2006 EAT050 : Plade i indsugning Ø6', '2002 + 2004 EBS050 : Hjerteklapventilens åbning mellem bøjlerne, målt fra yderside til yderside skal være 23 mm. Sikret ved at indsugningsrøret er fastgjort til cylinderen med "sprængbolte". (med Hjerteklapventilens regner jeg med der menes reedvalve)', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '9-5-2006 EAT050 : Resonatorrør Ø30mm L: 218 mm, indgang i udstødning Ø14 mm', '2004 EBS050 : Bøsning isvejst forreste del af udstødningsrør med begrænset lysning ø 12 mm og indvendig længde i udstødningsrør på 115 mm.<br>13-9-2006 D50B : Bøs i udstødning Ø12', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '9-5-2006 : Tegn nummer 7 i VIN-kode er C og angiver den godkendte maksimale hastighed 30 km/t<br>2007 + 2010 : Tegn nr. 7 i stelnummeret er "F" og angiver den maksimale hastighed = 30 km/t', '13-9-2006 : Tegn 7 i stelnummeret er D og angiver den maksimale hastighed = 45 km/t<br>2007 + 2010 : Tegn nr. 7 i stelnummeret er "A" og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'derbivamos' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'derbi vamos', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', 'derbi vamos r', '', '', '')
      ,'pris'              => ens('pris', '12995', '13000', '', '(cirka pris i følge 45scooter.dk)')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '41', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '37,4', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '7,4', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '4,3', 'hk', '6800', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1680', '', '', '')
      ,'bredde'            => ens('bredde', '685', '', '', '')
      ,'højde'             => ens('højde', '1120', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '750', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '4,5', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '100', '80', '10', '')
      ,'dækbag'            => ens('dæk1', '100', '80', '10', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'upsidedown teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '155', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '120', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '1,0', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'VTHVAM0SHSG041331 S07673-01', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '60', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    '50cc 6 speed servicemanual'          => 'derbi_50cc_6speed_servicemanual.pdf'
   ,'derbi GP1 brugermanual'              => 'derbi_gp1_brugermanual.pdf'
   ,'derbi GP1 servicemanual'             => 'derbi_gp1_servicemanual.pdf'
   ,'servicemanual'                       => 'derbi_servicemanual.pdf'
   ,'senda brugermanual'                  => 'derbi_senda_brugermanual.pdf'
   ,'senda R 2000-2001 reservedele'       => 'derbi_senda_r_2000_2001_reservedele.pdf'
   ,'senda SM 2000-2001 reservedele'      => 'derbi_senda_sm_2000_2001_reservedele.pdf'
   ,'senda SM black edition / DRD edition 2003 reservedele'    => 'derbi_senda_sm_black_edition_drd_edition_2003_reservedele.pdf'
   ,'senda SM DRD pro 2005-2006 reservedele'                   => 'derbi_senda_sm_drd_pro_2005_2006_reservedele.pdf'
   ,'senda SM racer 2003 reservedele'     => 'derbi_senda_sm_racer_2003_reservedele.pdf'
   ,'senda SM X-Trem 2003 reservedele'    => 'derbi_senda_sm_xtrem_2003_reservedele.pdf'
   ,'senda SM X-Trem 2006 reservedele'    => 'derbi_senda_sm_xtrem_2006_reservedele.pdf'
   ,'derbi flere reservedele'             => 'derbi_flere_reservedele.zip'

),'typegodkendelser' => array(
    'Atlantis 30 km/t E15400 (e9*92/61*0087/B)'       => 'typegodkendelser/Derbi%20Atlantis%20%28E15400%29%20udstedt%2018-05-2006.pdf'
   ,'Atlantis VTH AL 1 / 1A 45 km/t E16455 (e9*92/61*0087)'       => 'typegodkendelser/DERBI%20Atlantis%20%28E16455%29%20udstedt%2025-05-2007.pdf'
   ,'Atlantis VTH AL 45 km/t E12043 (e9*92/61*0087)'       => 'typegodkendelser/Derbi%20Atlantis%20%28E12043%29%20udstedt%2006-06-2002.pdf'
   ,'Atlantis VTH ATL 0EA (Luftkølet) / 0EB (Vandkølet) 45 km/t E10282 (e9*92/61*0014)'       => 'typegodkendelser/Derbi%20Atlantis%20%28E10282%29%20udstedt%2010-11-1999.pdf'
   ,'GP1 VTHPR 1A 45 km/t E14188 (e9*2002/24*0043)'       => 'typegodkendelser/Derbi%20GP1%2050%20%28E14188%29%20udstedt%2018-04-2005.pdf'
   ,'GP1 VTHPRED 45 km/t E11490 (e9*92/61*0033)'       => 'typegodkendelser/Derbi%20GP1%20%28E11490%29%20udstedt%2026-07-2001.pdf'

   ,'GPR RF 45 km/t E19151 (e11*2002/24*0963)'       => 'typegodkendelser/Derbi%20GPR%20%28E19151%29%20udstedt%2023-06-2011.pdf'
   ,'GPR VTHGPRR 45 km/t E12290 (e9*92/61*0052)'       => 'typegodkendelser/Derbi%20GPR%20%28E12290%29%20udstedt%2011-11-2002.pdf'
   ,'GPR50 GR Racing (GR1D1A) / Nude (GR1D1B) 45 km/t E15763 (e9*2002/24*0011)'       => 'typegodkendelser/Derbi%20GPR50%20%28E15763%29%20udstedt%2013-09-2006.pdf'
   ,'GPR50 VTHGR Racing (1A, Euro2) / Nude (1B, Euro2) 45 km/t E13949 (e9*2002/24*0011)'       => 'typegodkendelser/Derbi%20GPR50%20%28E13949%29%20udstedt%2026-01-2005.pdf'
   ,'GPR50R VTH GPRR AB 45 km/t S9007'       => 'typegodkendelser/Derbi%20GPR50R%20%28S9007%29%20udstedt%2027-02-1998.pdf'
   ,'Hunter 45 km/t S8133 _ 1'       => 'typegodkendelser/Derbi%20Hunter%20%28S8133%29%20udstedt%2025-02-1997%281%29.pdf'
   ,'Hunter 45 km/t S8133'       => 'typegodkendelser/Derbi%20Hunter%20%28S8133%29%20udstedt%2025-02-1997.pdf'
   ,'Paddock Hunt 45 km/t S8221 _ 1'       => 'typegodkendelser/Derbi%20Paddock%20%28S8221%29%20udstedt%2030-04-1997%281%29.pdf'
   ,'Paddock Hunt 45 km/t S8221 _ 2'       => 'typegodkendelser/Derbi%20Paddock%20%28S8221%29%20udstedt%2030-04-1997%282%29.pdf'
   ,'Paddock Hunt 45 km/t S8221'       => 'typegodkendelser/Derbi%20Paddock%20%28S8221%29%20udstedt%2030-04-1997.pdf'
   ,'Predator PRED 45 km/t S9427'       => 'typegodkendelser/Derbi%20Predator%20%28S9427%29%20udstedt%2028-09-1998.pdf'

   ,'senda R + SM 30 km/t E15349 (e9*2002/24*0001) 2006'    => 'typegodkendelser/Derbi%20Senda%20%28E15349%29%20udstedt%2009-05-2006.pdf'
   ,'senda R + SM 30 km/t E16710 (e9*2002/24*0001) 2007'    => 'typegodkendelser/Derbi%20Senda%20%28E16710%29%20udstedt%2016-11-2007.pdf'
   ,'senda R + SM 30 km/t E18242 (e9*2002/24*0001) 2010'    => 'typegodkendelser/Derbi%20Senda%20%28E18242%29%20udstedt%2028-05-2010.pdf'
   ,'senda R 45 km/t E10501 (e9*92/61*0027) 2000'           => 'typegodkendelser/Derbi%20Senda%20R%20%28E10501%29%20udstedt%2024-03-2000.pdf'
   ,'senda R 45 km/t E10680 (e9*92/61*0027) 2002'           => 'typegodkendelser/Derbi%20Senda%20R%20%28E10680%29%20udstedt%2005-07-2000.pdf'
   ,'senda R + SM 45 km/t E13611 (e9*2002/24*0001) 2004'    => 'typegodkendelser/Derbi%20Senda%20%28E13611%29%20udstedt%2017-08-2004.pdf'
   ,'senda R + SM 45 km/t E15764 (e9*2002/24*0001) 2006'    => 'typegodkendelser/Derbi%20Senda%20%28E15764%29%20udstedt%2013-09-2006.pdf'
   ,'senda R + SM 45 km/t E16711 (e9*2002/24*0001) 2007'    => 'typegodkendelser/Derbi%20Senda%20%28E16711%29%20udstedt%2016-11-2007.pdf'
   ,'senda R + SM 45 km/t E18246 (e9*2002/24*0001) 2010'    => 'typegodkendelser/Derbi%20Senda%20%28E18246%29%20udstedt%2028-05-2010.pdf'
   ,'senda R 45 km/t E20400 (e11*2002/24*1050) 2013'        => 'typegodkendelser/Derbi%20Senda%20R%20%28E20400%29%20udstedt%2009-04-2013.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false, $databasecenter_b);

?>
