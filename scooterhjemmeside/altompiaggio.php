<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "piaggio scootere med 50 cm³ motor";
$overskrift = "piaggio";
$metadescription = "specifikationer, download og typegodkendelser";

$setup['sideikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'piaggioape' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'Fra Januar 2012 fås denne model også som lille knallert (25 km/t, ikke 30 km/t).', 'Som lille knallert skal den ikke have nummerplade da den har 3 hjul og derfor betegnes som invalideknallert', '', 'dataen er lidt rodet for denne model da der er mange undermodeller.<br><br>Links til hjemmesider om Piaggio Ape : '.ahref('http://trehjul.dk/', 'trehjul.dk').', '.ahref('http://ape50.dk/', 'ape50.dk').', '.ahref('http://buchberg-mc.dk/butikken/produkter/piaggio-ape', 'buchberg-mc.dk').'')

   ),'generelt'            => array(
       'model'             => ens('model', 'piaggio ape', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '
pickup (kort lad i stål)<br>
pickup (langt lad i stål, 20 cm længere)<br>
van (1,5 m³ lukket lastrum)<br>
cross country (lad og styrtbøjle)<br>
mix ?<br>
top (langt lad i aluminium, 20 cm længere)<br>
web (i stil med cross country. Har ikke set den til salg i danmark)
', '', '', '')
      ,'pris'              => ens('pris', '44995', '47998', '', '') . '
<br>
44.998,- (pickup kort, pickup lang)<br>
46.998,- (top, cross country)<br>
47.998,- (van)<br>
'
      ,'hastighed'         => ens('hastighed', '25 og 45', '', '', '(45 km/t modellen har en tophastighed på 37-38 km/t i følge typegodkendelserne)')
      ,'farver'            => ens('farver', 'orange blå lyseblå hvid beige lime rød grøn sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.pgdanmark.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Piaggio C801M', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,8', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '38,4', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,8', 'kw', '5500', '') . '<br>' . ens('maxeffektogheste', '2,7', 'hk', '', '(i følge lidt ældre reklameblad : "APE - den perfekte EU TRANSPORTER 10.pdf")')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'Dell\'Orto SHBC 18/16', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '2660', '', '', '(top, pickup lang)')
 . ens('længde', '2490', '', '', '(pickup kort)')
 . ens('længde', '2660 eller 2700', '', '', '(pickup lang)')
 . ens('længde', '2520 eller 2700', '', '', '(cross country)')
 . ens('længde', '2500', '', '', '(van)')
      ,'bredde'            => ens('bredde', '1260', '', '', '(van set til 1200 mm)')
      ,'højde'             => ens('højde', '1550', '', '', '(top, pickup, pickup lang, cross country)')
 . ens('højde', '1590', '', '', '(van)')
 . ens('højde', '1610', '', '', '(cross country, web)')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1590', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '10', '', '', '')
      ,'forbrug'           => ens('forbrug', '
Forhandleren nok vil sige 25km/l men i praktiks kører de fleste mellem 18 til 20km/l
35 km/l ved 25 km/t uden last
cirka 20 km/l (i følge lidt ældre reklameblad : "APE - den perfekte EU TRANSPORTER 10.pdf")
', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.50', '10', '', '')
      ,'fælgbag'           => ens('fælg', '2.50', '10', '', '')
      ,'dækfor'            => ens('dæk1', '100', '90', '10', '61J')
      ,'dækbag'            => ens('dæk1', '100', '90', '10', '61J')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'svingarm med fjeder og støddæmper', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'uafhængig med fjeder og hydraulisk støddæmper ved hvert hjul', '', '', '')
      ,'bremserfor'        => ens('bremser', 'tromle', '124', 'mekanisk', 'hånd')
      ,'bremserbag'        => ens('bremser', 'tromle', '160', 'hydraulisk', 'fod')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', 'noget med 6 meter vendecirkel. De må vel være 3 meter venderadius. Også set 4800 mm venderadius for lidt ældre model')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '9', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '12', '80', '', '')
      ,'sikring'           => ens('sikring', '7,5', '', '', '')
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
      ,'antalgear'         => ens('antalgear', '4', 'og bakgear', '', '') . '<br>' . ens('antalgear', '3', 'og bakgear', '', '(på 25 km/t model)')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'bærende konstruktion stål plader enkelt ramme', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'ZAPC80000', 'ZAPC8000000128336 (Zulu News 45 E13584-04 OS527)', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '')
      ,'vægttør'           => ens('vægttør', '220-250', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '510', '', '', '(490 kg for lidt ældre model)')
      ,'bæreevne'          => 
   ens('bæreevne', '205', '', '', '(top, pickup kort, pickup lang)')
 . ens('bæreevne', '200', '', '', '(pickup)')
 . ens('bæreevne', '185', '', '', '(cross country) (200 kg for lidt ældre model)')
 . ens('bæreevne', '175', '', '', '(van) (170 kg for lidt ældre model)')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '18', '%', '', '(uden last)')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '85', '2750', '', '') . ' eller ' . ens('støj', '87', '2875', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'Bjarne Egedesø A/S', 'Scootcar Danmark', 'Thomas Møller Pedersen ApS', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', 'sporvidde : 1110 mm', 'mekanisk håndparkeringsbremse for begge baghjul', 'motor, gearkasse og differentiale er sammenbygget', '
<br>
lad længde :<br>
1420 mm (pickup lang)<br>
1270 mm (pickup kort)<br>
1420 mm (cross country)<br>
1260 mm (van)<br>
<br>
lad bredde :<br>
1200 mm (alle modeller ser det ud til)<br>
<br>
Udvendige lad/kasselængde :<br>
1250-1410 mm<br>
')

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

),'piaggiociao' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'piaggio ciao', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'C31', '', '', '')
      ,'varianter'         => ens('varianter', 'C311', 'C312', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '25', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', 'C311M (C311) eller C242M (C312)', '', '', '')
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
      ,'maxeffektogheste'  => ens('maxeffektogheste', '0,9', 'kw', '(C311M 25 km/t)', '') . ens('maxeffektogheste', '1,0', 'kw', '(C242M 25 km/t)', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'Dellorto SHA 12-7', '', '', '')
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
       'fælgfor'           => ens('fælg', '1.35', '17', '', '')
      ,'fælgbag'           => ens('fælg', '1.35', '17', '', '')
      ,'dækfor'            => ens('dæk2', '2', '17', '', '')
      ,'dækbag'            => ens('dæk2', '2', '17', '', '')
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
      ,'gearratio'         => ens('gearratio', 'ø55 - ø93,5', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '42', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '140', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt as', '', '', '')
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

),'piaggiofly2t' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'piaggio fly 2T', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'C44', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'C441M', '', '', '')
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
      ,'karburator'        => ens('karburator', 'Dellorto PHVA 17,5', '', '', '')
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
       'fælgfor'           => ens('fælg', '3.50', '12', '')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '120', '70', '12', '')
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
      ,'importør'          => ens('importør', 'C. Reinhardt as', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', 'Mellem de forreste remskivehalvdele er monteret afstandsskive på 5,9 mm,', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', 'på forreste udstødningsrør er påsvejst et resonatorrør med ø 24,0 x L: 140 mm.', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 9 i stelnummeret er 1 og angiver den maksimale hastighed = 30 km/t', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'piaggiofly4t' => array(

   'generelt'              => array(
       'model'             => ens('model', 'piaggio fly 4T', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', 'C44', '', '')
      ,'varianter'         => ens('varianter', 'Piaggio New Fly 50 4T 4V (4 ventiler)', '', '')
      ,'pris'              => ens('pris', '9995', '13995', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '')
      ,'farver'            => ens('farver', 'sort sølv rød', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.pgdanmark.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'C445M HI-PER4', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49-49,9', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '39-40', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,3-41,8', '', '')
      ,'ventiler'          => ens('ventiler', '2', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '10,7', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,7', 'kw', '7000')
      ,'moment'            => ens('moment', '', '', '')
      ,'karburator'        => ens('karburator', 'keihin CVK', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK CR8EB', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1880', '', '')
      ,'bredde'            => ens('bredde', '735', '', '')
      ,'højde'             => ens('højde', '785', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', 'blyfri', '')
      ,'benzintank'        => ens('benzintank', '7,2', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50 eller 2.50', '12', '')
      ,'fælgbag'           => ens('fælg', '3.50 eller 2.50', '12', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '120', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'hydraulisk teleskopgaffel', '32', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'stødabsorber', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '190-200', '', '2 stempler flydende caliper')
      ,'bremserbag'        => ens('bremser', 'tromle', '140', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '')
      ,'generator'         => ens('generator', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '')
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
      ,'oplader'           => ens('oplader', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '')
      ,'gear'              => ens('olie', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', '', '')
      ,'kobling'           => ens('kobling', 'automatisk', 'centrifugal', '')
      ,'antalgear'         => ens('antalgear', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LBMC4450100001', 'ZAP', 'ZAPC4450100001 (lille knallert, ved ikke om er 2 takt eller 4 takt)', 'LBMC4450100001028 (Piaggio Fly 4T lille)')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '')
      ,'vægttør'           => ens('vægttør', '97-100', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '107-111', '', '')
      ,'vægttotal'         => ens('vægttotal', '295', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '78', '4250', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '')
      ,'producent'         => ens('producent', 'Piaggio & C. S.p.A.', '', '')
      ,'andet'             => ens('andet', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '7,0 mm bøsning Ml. forr. remsk. halvdele', '2,2 mm bøsning Ml. forr. remsk. halvdele', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 9 i stelnummeret er "1" og angiver den maksimale hastighed = 30 km/t.', 'Tegn 7 i stelnummeret er 5 og angiver den maksimale hastighed = 45 km/t<br>Tegn 9 i stelnummeret er 0 og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'piaggioliberty2t' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'piaggio liberty 2T', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'C491', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Piaggio C421M eller Piaggio C371M eller Piaggio C426M', '', '', '')
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
      ,'karburator'        => ens('karburator', 'DellÒrto PHVA 17,5 eller Weber 18 OM', '', '', '')
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
       'fælgfor'           => ens('fælg', '2.15', '16', '', '')
      ,'fælgbag'           => ens('fælg', '2.75', '14', '', '')
      ,'dækfor'            => ens('dæk1', '90', '80', '16', '')
      ,'dækbag'            => ens('dæk1', '110', '80', '14', '')
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
      ,'stelnummer'        => ens('stelnummer', 'ZAPC49100', 'C42103', 'C42107', '')
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
       'begrænstransmis'   => ens('begrænstransmis', '', '', '* 6 mm bøsning Ml. forr. remsk. halvdele<br>Mellem forreste remskivehalvdele er monteret en afstandsbøsning med en brystbredde på 5,5 mm.<br>9,00 mm bøsning Forreste variator', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', 'Resonatorrør påsvejst forreste udstødningsrør ø 24 x 100 mm.', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 9 i stelnummeret er 3 eller 7 og angiver den maksimale hastighed = 30 km/t<br>Tegn 9 i stelnummeret er 2 og angiver den maksimale hastighed = 30 km/t<br>Tegn nr. 9 i stelnummeret er "1" og angiver den maksimale hastighed = 30 km/t', 'Tegn nr. 9 i stelnummeret er "0" og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'piaggioliberty4t' => array(

   'generelt'              => array(
       'model'             => ens('model', 'piaggio liberty 4T', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'C492', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.pgdanmark.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'C242M', 'Hi-PER4', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,9-50', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '39', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,8', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '11,5', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,6', 'kw', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'KEIHIN CVK', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1935', '', '', '')
      ,'bredde'            => ens('bredde', '760', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '785', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1320', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '95', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '6', '(hvor af 1 liter er reserve)', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.15', '16', '', '')
      ,'fælgbag'           => ens('fælg', '2.75', '14', '', '')
      ,'dækfor'            => ens('dæk1', '90', '80', '16', 'slangeløs')
      ,'dækbag'            => ens('dæk1', '110', '80', '14', 'slangeløs')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'hydraulisk teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'hydraulisk støddæmper', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '240', '', '2 stempler flydende caliper')
      ,'bremserbag'        => ens('bremser', 'tromle', '140', '', '')
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
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', '', '', '')
      ,'kobling'           => ens('kobling', 'automatisk', 'centrifugal', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'Single cradle tubular steel structure with die cast reinforcements', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'ZAPC4910100', 'ZAPC49200', 'ZAPC4910100001 (ved ikke om det er til 2 takt eller 4 takt)', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '3 (ifølge typegodkendelse)<br>2 (ifølge andre steder på nettet)', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '110', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '285', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '81', '3500', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'PG Danmark A/S', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '2,2 mm bøsning mellem forreste remskiver<br>2,2 mm bøsning I forr. variator', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', 'Tegn 9 i stelnummeret er "0" og angiver den maksimale hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'piaggionrg' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'piaggio NRG', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'C21', 'C451', 'C04', '')
      ,'varianter'         => ens('varianter', 'piaggio NRG DD', 'C452 (med indsprøjtning)', '', '')
      ,'pris'              => ens('pris', '15995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.pgdanmark.dk', '', '', '')

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
      ,'karburator'        => ens('karburator', 'Dellorto PHVA 12 eller Weber 12 OM (C041M / C211M) Dellorto PHVA 17,5 (C451M / C453M / C463M  / C216M)', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', 'Bing 71/20/104 (C452M)', '', '', '')
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
       'fælgfor'           => ens('fælg', '3.50', '13', '', '(C211M C041M)') . ens('fælg', '3.00', '13', '', '(C453M C452M)') . ens('fælg', '2.50', '13', '', '(C216M)') . ens('fælg', '3.00', '14', '', '(C451M)')
      ,'fælgbag'           => ens('fælg', '3.50', '13', '', '(C211M C041M)') . ens('fælg', '3.50', '13', '', '(C453M C452M)') . ens('fælg', '2.50', '13', '', '(C216M)') . ens('fælg', '3.50', '13', '', '(C451M)')
      ,'dækfor'            => ens('dæk1', '130', '60', '13', '(C211M C041M C216M)') . ens('dæk1', '120', '70', '13', '(C453M C452M)') . ens('dæk1', '120', '70', '14', '(C451M)')
      ,'dækbag'            => ens('dæk1', '130', '60', '13', '(C211M C041M C216M)') . ens('dæk1', '140', '60', '13', '(C453M C452M)') . ens('dæk1', '140', '60', '13', '(C451M)')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '220', '', '') . ens('bremser', 'skive', '190', '', '(C04)')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '', '') . ens('bremser', 'skive', '175', '', '(på model med indsprøjtning)') . ens('bremser', 'tromle', '100', '', '(C04)')
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
      ,'stelnummer'        => ens('stelnummer', 'ZAPC4530100001 (lille knallert)', 'ZAPC2100000026 (stor)', '', '')
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
       'begrænstransmis'   => ens('begrænstransmis', '', '9,00 mm bøsning Forreste variator', '6,0 eller 6,4 eller 6,5 mm bøsning mellem forreste remskive (karburator)<br>7,0 mm bøsning mellem forreste remskive (insprøjtning)', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', 'Resonatorrør påsvejst forreste udstødningsrør ø22 x 189 mm<br>Resonatorrør påsvejst forreste udstødningsrør ø 24,0 x 100 mm', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 9 i stelnummeret er 1 og angiver den maksimale hastighed = 30 km/t<br>Tegn 11 i stelnummeret er 4 og angiver den maksimale hastighed = 30 km/t', 'Tegn nr. 7 i stelnummeret er "1" og angiver den maksimale hastighed = 45 km/t<br>Tegn 8 i stelnummeret er 0 og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', 'måske ring i variator, plade ved indsugning på karbuartor, dyse (54 er måske standard, 72 er måske hvis pladen fjernes ... måske 75)')

   )

),'piaggiotyphoon' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'piaggio typhoon', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '15995', '', '', '(i følge 45scooter.dk)')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'TEC1T0283464 S07666-01 1997', 'TECT1T0285427 S07666-01 1997', 'ZAPC2900003000580 2007', '')
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

),'piaggiozip2t' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'noget data er fra ældre zip (måske lidt før 1997) fra 45scooter.dk', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'piaggio zip 2T', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '9995', '13995', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,4', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,3', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '10,9', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'Dell\'Orto PHVA 12', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1630', '', '', '')
      ,'bredde'            => ens('bredde', '640', '', '', '')
      ,'højde'             => ens('højde', '1050', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1160', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '4', '', '', '(ældre zip)') . ens('benzintank', '7,5', '', '', '(ny zip)')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '10', '', '')
      ,'fælgbag'           => ens('fælg', '', '10', '', '')
      ,'dækfor'            => ens('dæk1', '90', '90', '10', 'slangefri (ældre zip)') . ens('dæk1', '100', '80', '10', ' (ny zip)')
      ,'dækbag'            => ens('dæk1', '90', '90', '10', 'slangefri (ældre zip)') . ens('dæk1', '120', '70', '10', ' (ny zip)')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'tromle', '104', '', '(ældre zip)') . ens('bremser', 'skive', '', '', '(ny zip)')
      ,'bremserbag'        => ens('bremser', 'tromle', '100', '', '(ældre zip)')
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
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', 'A.T. (i følge 45scooter.dk)')
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
       'motor'             => ens('olie', '', '', '1,15', '')
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
      ,'reduktionsratio'   => ens('reduktionsratio', '1/31,85 - 1/14,22', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', 'kombineret ekspansion/absorpsion', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '70', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '200', '', '', '')
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

),'piaggiozip4t' => array(

   'generelt'              => array(
       'model'             => ens('model', 'piaggio zip 4T', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', 'C25', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '9995', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '')
      ,'farver'            => ens('farver', 'sort gul rød blå sølv', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.pgdanmark.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'C25CM HI-PER4', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,9', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '39', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,8', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '11,7', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,6-3,6', 'hk', '6500')
      ,'moment'            => ens('moment', '3,7', 'nm', '6750')
      ,'karburator'        => ens('karburator', 'keihin CVK', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK CR9EB', 'champion RG4HC', 'champion RG4PHP')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1670-1700', '', '')
      ,'bredde'            => ens('bredde', '680', '', '')
      ,'højde'             => ens('højde', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '750-820', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '')
      ,'benzintank'        => ens('benzintank', '7,3-7,5', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.15-2.50', '10', 'støbt aluminium')
      ,'fælgbag'           => ens('fælg', '3.00', '10', 'støbt aluminium')
      ,'dækfor'            => ens('dæk1', '100', '80', '10', '')
      ,'dækbag'            => ens('dæk1', '120', '70', '10', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '150-175', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '')
      ,'generator'         => ens('generator', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '')
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
      ,'oplader'           => ens('oplader', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '')
      ,'gear'              => ens('olie', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', '', '')
      ,'kobling'           => ens('kobling', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LBMC25C1600 LBMC25C1800 LBMC25C1000 LBMC25C1000001', 'ZAP', 'LBMC25C0400', 'LBMC25C0X00 (LBMC25C1200001 måske 2 takt) (LBMC25C1700001 måske 2 takt)') . 'LBMC25C1000001 (lille) LBMC25C0X0004 (stor zip 4t)'
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '')
      ,'vægttør'           => ens('vægttør', '', '80-89', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '86-95', '', '')
      ,'vægttotal'         => ens('vægttotal', '245', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '77', '4250', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '')
      ,'producent'         => ens('producent', 'Piaggio & C. S.p.A.', '', '')
      ,'andet'             => ens('andet', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '7,0 mm bøsning Ml. forr. remsk. halvdele', '2,7 mm bøsning Mellem forreste remskive', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', 'I CDI/tændspolen sidder en metal bro som man kan save over for at fjerne omdrejningsbegrænsningen.<br>'.galleriholder(array(galleri('highslide', '', 'billed0169.jpg', array('piaggio zip 4t', 'CDI begrænsning')))))
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 8 i stelnummeret er "1" og angiver den maksimale hastighed = 30 km/t.', 'Tegn 8 i stelnummeret er 0 og angiver den maksimale hastighed = 45 km/t')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'diverse dyser til Piaggio, Gilera og Vespa'   => 'dyser_piaggio_gilera_vespa.png'
   ,'ape servicemanual'                   => 'piaggio_ape_servicemanual.pdf'
   ,'ape servicemanual (gammel)'          => 'piaggio_ape_servicemanual_gammel.pdf'
   ,'ape reservedele'                     => 'piaggio_ape_reservedele.pdf'
   ,'ape reservedele 2009'                => 'piaggio_ape_reservedele_2009.pdf'
   ,'ape eldiagram 2012'                  => 'piaggio_ape_eldiagram.pdf'
   ,'ape RST eldiagram 2012'              => 'piaggio_ape_rst_eldiagram.pdf'
   ,'Vespa Ciao (P PX PV PXV) Bravo (P PV) SI (SIM SIV) servicemanual'                => 'vespa_ciao_bravo_si_servicemanual.pdf'
   ,'Vespa SI reservedele'                => 'vespa_si_reservedele.pdf'
   ,'fly 4T servicemanual'                => 'piaggio_fly_4t_servicemanual.pdf'
   ,'fly 4T 150 cm³ servicemanual'        => 'piaggio_fly_4t_150ccm_servicemanual.pdf'
   ,'fly 4T reservedele'                  => 'piaggio_fly_4t_reservedele.pdf'
   ,'fly zip LX liberty 4T eldiagram'     => 'piaggio_zip_fly_lx_liberty_4t_eldiagram.jpg'
   ,'liberty 4T brugermanual'             => 'piaggio_liberty_4t_brugermanual.pdf'
   ,'zip 4T indsugning'                   => 'piaggio_zip_4t_indsugning.gif'
   ,'zip 4T CDI begrænsning'              => 'piaggio_zip_4t_cdibegrensning.jpg'
   ,'zip 4T reservedele'                  => 'piaggio_zip_4t_reservedele.pdf'
   ,'piaggio catalogue of spare parts'    => 'piaggio_catalogue_of_spare_parts.zip'
   ,'piaggio 50cc four stroke restriction'=> 'piaggio_50cc_four_stroke_restriction.pdf'

),'typegodkendelser' => array(
    'Ape 37 km/t S10068'                            => 'typegodkendelser/Piaggio%20APE50%20%28S10068%29%20udstedt%2016-06-1999.pdf'
   ,'Ape 38 km/t E13584 (e3*92/61*0164)'            => 'typegodkendelser/Piaggio%20APE50%20%28E13584%29%20udstedt%2030-07-2004.pdf'
   ,'Ape 38 km/t E18920 (e3*92/61*0164)'            => 'typegodkendelser/Piaggio%20APE50%20%28E18920%29%20udstedt%2008-02-2011.pdf'

   ,'Ape Pickup / Pickup (kort) / Cross / Van 38 km/t E13584 (e3*92/61*0164)'       => 'typegodkendelser/Piaggio%20APE50%20%28E13584%29%20udstedt%2030-07-2004.pdf'
   ,'Ape Pickup / Pickup (kort) / Cross / Van 38 km/t E18920 (e3*92/61*0164)'       => 'typegodkendelser/Piaggio%20APE50%20%28E18920%29%20udstedt%2008-02-2011.pdf'
   ,'Ape Pickup / Pickup (kort) / Cross / Van 37 km/t S10068'       => 'typegodkendelser/Piaggio%20APE50%20%28S10068%29%20udstedt%2016-06-1999.pdf'

   ,'Ciao C311 C312 25 km/t E15386 (e11*92/61*0092)'       => 'typegodkendelser/Piaggio%20Ciao%20%28E15386%29%20udstedt%2016-05-2006.pdf'

   ,'Fly 4T ZAP 30 km/t E18243 (e4*2002/24*0788)'   => 'typegodkendelser/Piaggio%20Fly%20%28E18243%29%20udstedt%2028-05-2010.pdf'
   ,'Fly 4T ZAP 45 km/t E18249 (e11*2002/24*0788)'  => 'typegodkendelser/Piaggio%20Fly%20%28E18249%29%20udstedt%2028-05-2010.pdf'
   ,'Fly 4T 45 km/t E15967 (e4*2002/24*0788)'       => 'typegodkendelser/Piaggio%20FLY%2045%204T%20%28E15967%29%20udstedt%2023-11-2006.pdf'
   ,'Fly 4T 45 km/t E15967 (e4*2002/24*0788) 2'     => 'typegodkendelser/Piaggio%20FLY%2045%204T%20%28E15967%29%20udstedt%2023-11-2006_2.pdf'
   ,'Fly 4T LBM 30 km/t E17086 (e4*2002/24*0788)'   => 'typegodkendelser/Piaggio%20FLY%2045%204T%20%28E17086%29%20udstedt%2009-04-2008.pdf'
   ,'Fly 4T LBM 30 km/t E17086 (e4*2002/24*0788) 2' => 'typegodkendelser/Piaggio%20FLY%2045%204T%20%28E17086%29%20udstedt%2009-04-2008_2.pdf'

   ,'Fly 2T / 4T C441M / C442M 45 km/t E13794 (e11*2002/24*0128)'       => 'typegodkendelser/Piaggio%20FLY%20%28E13794%29%20udstedt%2023-11-2004.pdf'
   ,'Fly C44 C441M Dellorto PHVA 17,5 30 km/t E15361 (e11*2002/24*0128)'       => 'typegodkendelser/Piaggio%20FLY%20%28E15361%29%20udstedt%2010-05-2006.pdf'
   ,'Fly C44 C445M KEIHIN CVK 45 km/t E15691 (e4*2002/24*0788)'       => 'typegodkendelser/Piaggio%20FLY%20%28E15691%29%20udstedt%2003-08-2006.pdf'
   ,'Fly C44 C445M KEIHIN CVK 30 km/t E18243 (e4*2002/24*0788)'       => 'typegodkendelser/Piaggio%20Fly%20%28E18243%29%20udstedt%2010-06-2010.pdf'
   ,'Fly C44 C445M KEIHIN CVK 30 km/t E18243 (e4*2002/24*0788)'       => 'typegodkendelser/Piaggio%20Fly%20%28E18243%29%20udstedt%2028-05-2010.pdf'
   ,'Fly C44 C445M KEIHIN CVK 45 km/t E18249 (e11*2002/24*0788)'       => 'typegodkendelser/Piaggio%20Fly%20%28E18249%29%20udstedt%2028-05-2010.pdf'
   ,'Fly 2T C44 C441M PHVA 17,5 45 km/t E15966 (e11*2002/24*0128)'       => 'typegodkendelser/Piaggio%20FLY%2045%202T%20%28E15966%29%20udstedt%2023-11-2006.pdf'
   ,'Fly 45 4T C44 C445M Keihin CVK 45 km/t E15967 (e4*2002/24*0788)'       => 'typegodkendelser/Piaggio%20FLY%2045%204T%20%28E15967%29%20udstedt%2023-11-2006.pdf'
   ,'Fly 45 4T C44 C445M Keihin CVK 45 km/t E15967 (e4*2002/24*0788) 2'       => 'typegodkendelser/Piaggio%20FLY%2045%204T%20%28E15967%29%20udstedt%2023-11-2006_2.pdf'
   ,'Fly 45 4T LBM C44 C445M Keihin CVK 30 km/t E17086 (e4*2002/24*0788)'       => 'typegodkendelser/Piaggio%20FLY%2045%204T%20%28E17086%29%20udstedt%2009-04-2008.pdf'
   ,'Fly 45 4T LBM C44 C445M Keihin CVK 30 km/t E17086 (e4*2002/24*0788) 2'       => 'typegodkendelser/Piaggio%20FLY%2045%204T%20%28E17086%29%20udstedt%2009-04-2008_2.pdf'

   ,'Liberty 4T 45 km/t E18250 (e11*2000/7*0835)'   => 'typegodkendelser/Piaggio%20Liberty%20%28E18250%29%20udstedt%2028-05-2010.pdf'

   ,'Liberty ZAP C37 45 km/t E12631 (e11*2000/7*00052)'       => 'typegodkendelser/Piaggio%20Liberty%20%28E12631%29%20udstedt%2002-05-2003.pdf'
   ,'Liberty 2T ZAP C42 C421M 45 km/t E14042 (e11*2002/24*0107)'       => 'typegodkendelser/Piaggio%20Liberty%20%28E14042%29%20udstedt%2003-03-2005.pdf'
   ,'Liberty 2T C42 C421M C42103 C42107 30 km/t E15360 (e11*2002/24*0107)'       => 'typegodkendelser/Piaggio%20Liberty%20%28E15360%29%20udstedt%2010-05-2006.pdf'
   ,'Liberty C37 C375M 30 km/t E15628 (e11*2002/24*0107)'       => 'typegodkendelser/Piaggio%20Liberty%20%28E15628%29%20udstedt%2007-07-2006.pdf'
   ,'Liberty C49 2 takt ZAPC49100 4 takt ZAPC49200 45 km/t E17560 (e11*2002/24*0835)'       => 'typegodkendelser/Piaggio%20Liberty%20%28E17560%29%20udstedt%2011-02-2009.pdf'
   ,'Liberty C49 ZAP C421M 30 km/t E17561 (e11*2002/24*0835)'       => 'typegodkendelser/Piaggio%20Liberty%20%28E17561%29%20udstedt%2011-02-2009.pdf'
   ,'Liberty C49 ZAP C421M 30 km/t E18244 (e11*2000/7*0835)'       => 'typegodkendelser/Piaggio%20Liberty%20%28E18244%29%20udstedt%2028-05-2010.pdf'
   ,'Liberty C49 ZAP C421M ZAPC49100 C426M 2T / C424M ZAPC49200 C242M 4T 45 km/t E18250 (e11*2000/7*0835)'       => 'typegodkendelser/Piaggio%20Liberty%20%28E18250%29%20udstedt%2028-05-2010.pdf'

   ,'NRG ZAP C21 C211M 45 km/t A9968'       => 'typegodkendelser/Piaggio%20NRG%20%28A9968%29%20udstedt%2023-06-1999.pdf'
   ,'NRG ZAP C45 C453M (Dellorto PHVA 17.5) / C452M (Bing 71/20/104 Indsprøjtning) 45 km/t E13772 (e3*2002/24*0288)'       => 'typegodkendelser/Piaggio%20NRG%20%28E13772%29%20udstedt%2016-11-2004.pdf'
   ,'NRG C45 C453M 30 km/t E15362 (e11*2002/24*0288)'       => 'typegodkendelser/Piaggio%20NRG%20%28E15362%29%20udstedt%2010-05-2006.pdf'
   ,'NRG C21 C216M 30 km/t E15627 (e9*92/61*0051)'       => 'typegodkendelser/Piaggio%20NRG%20%28E15627%29%20udstedt%2007-07-2006.pdf'
   ,'NRG C45 C453M / C452 (med indsprøjtning) 45 km/t E15965 (e3*2002/24*0288)'       => 'typegodkendelser/Piaggio%20NRG%20%28E15965%29%20udstedt%2023-11-2006.pdf'
   ,'NRG C45 C463M 30 km/t E18238 (e3*2002/24*0288)'       => 'typegodkendelser/Piaggio%20NRG%20%28E18238%29%20udstedt%2028-05-2010.pdf'
   ,'NRG C45 C451M 45 km/t E18253 (e3*2002/24*288)'       => 'typegodkendelser/Piaggio%20NRG%20%28E18253%29%20udstedt%2031-05-2010.pdf'
   ,'(Bjarne Egedesø A/S) NRG ZAP C04 C041M 44 km/t S8200'       => 'typegodkendelser/Piaggio%20NRG%20%28S8200%29%20udstedt%2022-05-1997%281%29.pdf'
   ,'(C. Reinhardt as) NRG ZAP C04 C041M 44 km/t S8200'       => 'typegodkendelser/Piaggio%20NRG%20%28S8200%29%20udstedt%2022-05-1997.pdf'
   ,'NRG DD ZAP C451 C451M 45 km/t E17116 (e3*2002/24*288)'       => 'typegodkendelser/Piaggio%20NRG%20DD%20%28E17116%29%20udstedt%2024-04-2008.pdf'

   ,'Storm ZAP C29 C216M 30 km/t E17033 (e3*92/61*0054)'       => 'typegodkendelser/Piaggio%20Storm%20%28E17033%29%20udstedt%2026-03-2008.pdf'
   ,'Storm ZAP C29 C216M 45 km/t E17034 (e3*92/61*0054)'       => 'typegodkendelser/Piaggio%20Storm%20%28E17034%29%20udstedt%2026-03-2008.pdf'

   ,'Typhoon ZAP C29 C215M / C216M 45 km/t E11350 (e3*92/61*0054)'       => 'typegodkendelser/Piaggio%20Typhoon%20%28E11350%29%20udstedt%2002-05-2001.pdf'
   ,'Typhoon ZAP C29 C216M 45 km/t E14735 (e3*92/61*0054)'       => 'typegodkendelser/Piaggio%20Typhoon%20%28E14735%29%20udstedt%2014-12-2005.pdf'
   ,'Typhoon C29 C216M 30 km/t E15363 (e3*92/61*0054)'       => 'typegodkendelser/Piaggio%20Typhoon%20%28E15363%29%20udstedt%2010-05-2006.pdf'
   ,'Typhoon C29 C216M 45 km/t E15937 (e3*92/61*0054)'       => 'typegodkendelser/Piaggio%20Typhoon%20%28E15937%29%20udstedt%2013-11-2006.pdf'
   ,'Typhoon ZAP C50 C421M 30 km/t E19482 (e1*2002/24*0485)'       => 'typegodkendelser/Piaggio%20Typhoon%20%28E19482%29%20udstedt%2003-11-2011.pdf'

   ,'Vespa ET2 ZAP C16 C161M 45 km/t A8925'       => 'typegodkendelser/Piaggio%20Vespa%20ET2%20%28A8925%29%20udstedt%2026-01-1998.pdf'
   ,'Vespa ET2 ZAP C38 C381M 45 km/t E13358 (e3*92/61*0125)'       => 'typegodkendelser/Piaggio%20Vespa%20ET2%20%28E13358%29%20udstedt%2025-03-2004.pdf'

   ,'LX C38 ZAP C381M C45 30 km/t E18235 (e11*2000/*0125)'       => 'typegodkendelser/Piaggio%20LX%20%28E18235%29%20udstedt%2028-05-2010.pdf'
   ,'LX C38 ZAP C381M C45 45 km/t E18251 (e11*2000/*0125)'       => 'typegodkendelser/Piaggio%20LX%20%28E18251%29%20udstedt%2028-05-2010.pdf'
   ,'LX C38 C384M 25 km/t E15358 (e3*92/61*0125)'       => 'typegodkendelser/Piaggio%20LX%2050%20%28E15358%29%20udstedt%2010-05-2006.pdf'
   ,'LX C38 ZAP C381M 30 km/t E17035 (e3*92/61*0125)'       => 'typegodkendelser/Piaggio%20LX50%20%28E17035%29%20udstedt%2026-03-2008.pdf'
   ,'Vespa LX ZAP C38 C381M 45 km/t E14235 (e3*92/61*0125)'       => 'typegodkendelser/Piaggio%20Vespa%20LX%2050%20%28E14235%29%20udstedt%2002-05-2005.pdf'
   ,'(PG Danmark A/S) Vespa LX 50 C38 C381M 45 km/t E15968 (e3*92/61*0125)'       => 'typegodkendelser/Piaggio%20Vespa%20LX%2050%20%28E15968%29%20udstedt%2023-11-2006%281%29.pdf'
   ,'(C. Reinhards A/S) Vespa LX 50 C38 C381M 45 km/t E15968 (e3*92/61*0125)'       => 'typegodkendelser/Piaggio%20Vespa%20LX%2050%20%28E15968%29%20udstedt%2023-11-2006.pdf'

   ,'Zip 4T 30 km/t E18239 (e4*2002/24*0551)'       => 'typegodkendelser/Piaggio%20Zip%20%28E18239%29%20udstedt%2028-05-2010.pdf'
   ,'Zip 4T 30 km/t E17085 (e4*2002/24*0551)'       => 'typegodkendelser/Piaggio%20ZIP%204T%20%28E17085%29%20udstedt%2009-04-2008.pdf'
   ,'Zip 4T 30 km/t E17085 (e4*2002/24*0551) 2'     => 'typegodkendelser/Piaggio%20ZIP%204T%20%28E17085%29%20udstedt%2009-04-2008_2.pdf'
   ,'Zip 4T 45 km/t E18234 (e4*2002/24*0551)'       => 'typegodkendelser/Piaggio%20ZIP%20%28E18234%29%20udstedt%2028-05-2010.pdf'
   ,'Zip 4T 45 km/t E15936 (e4*2002/24*0551)'       => 'typegodkendelser/Piaggio%20ZIP%204T%20%28E15936%29%20udstedt%2013-11-2006.pdf'

   ,'Zip C25 C445M KEIHIN CVK 45 km/t E18234 (e4*2002/24*0551)'       => 'typegodkendelser/Piaggio%20ZIP%20%28E18234%29%20udstedt%2028-05-2010.pdf'
   ,'Zip C25 30 km/t E18239 (e4*2002/24*0551)'       => 'typegodkendelser/Piaggio%20Zip%20%28E18239%29%20udstedt%2028-05-2010.pdf'
   ,'Zip C25 30 km/t E19507 (e11*2002/24*0551)'       => 'typegodkendelser/Piaggio%20ZIP%20%28E19507%29%20udstedt%2021-11-2011.pdf'
   ,'Zip 2T C25 45 km/t E15935 (e3*92/61*0020)'       => 'typegodkendelser/Piaggio%20ZIP%202T%20%28E15935%29%20udstedt%2013-11-2006.pdf'
   ,'Zip 4T C25 45 km/t E15936 (e4*2002/24*0551)'       => 'typegodkendelser/Piaggio%20ZIP%204T%20%28E15936%29%20udstedt%2013-11-2006.pdf'
   ,'Zip 4T C25 (LBM) 30 km/t E17085 (e4*2002/24*0551)'       => 'typegodkendelser/Piaggio%20ZIP%204T%20%28E17085%29%20udstedt%2009-04-2008.pdf'
   ,'Zip 4T C25 (LBM) 30 km/t E17085 (e4*2002/24*0551)'       => 'typegodkendelser/Piaggio%20ZIP%204T%20%28E17085%29%20udstedt%2009-04-2008_2.pdf'
   ,'Zip 4T C25 Chongquin Zongshen C25CM 45 km/t E14739 (e4*2002/24*0551)'       => 'typegodkendelser/Piaggio%20Zip%2050%20%28E14739%29%20udstedt%2019-12-2005.pdf'
   ,'New Zip C25 2T C251M / 4T C252M / 2T (euro 2) C259M 45 km/t E10648 (e3*92/61*0020)'       => 'typegodkendelser/Piaggio%20New%20Zip%20%28E10648%29%20udstedt%2019-06-2000.pdf'

   //tom   ,'km/t E ()'       => 'typegodkendelser/Piaggio%20NRG%20%28A9207%29%20udstedt%2015-06-1998.pdf'

   ,'Piaggio C42 Liberty / Liberty S 45 km/t E15940 (e11*2002/24*0107)'            => 'typegodkendelser/Piaggio%20%20%28E15940%29%20udstedt%2016-11-2006.pdf'
//Liberty (ZAPC421) C421M 5,5 mm bøsning Forreste variator
//Liberty S (ZAPC42405) C426M 6,0 mm bøsning forreste variator
//Liberty S (ZAPC42501) C426M 6,0 mm bøsning forreste variator
//Tegn nummer 7 i stelnummeret er 1, 2, 4 eller 5 og angiver den maksimale hastighed = 45 km/t.
//PHV17,5

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
