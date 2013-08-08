<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "sachs 50 cm³ knallerter";
$overskrift = "sachs";
$metadescription = "billeder, specifikationer, manualer, el diagrammer, reservedele og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'sachsmadass' => array(

   'generelt'              => array(
       'model'             => ens('model', 'sachs madass', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', '649', '649 003 : 4 gears model', '649 004 : automatisk gear model')
      ,'varianter'         => ens('varianter', 'sachs madass (2004)', 'sachs madass mark II (2005)', 'MKIII')
      ,'pris'              => ens('pris', '12499', '15998', '', '')
      ,'hastighed'         => ens('hastighed', '25 og 30 og 45', '', '')
      ,'farver'            => ens('farver', 'sort sølv hvid', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.koehler-knallerter.dk', 'http://www.daxshoppen.dk', 'http://mesters-motor-shop.dk', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '4 gear model : FY139FMB<br>Automatisk model : FY139FMB-B', '649', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '')
      ,'køling'            => ens('køling', 'vind', '', '')
      ,'boring'            => ens('boring', '39', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,4', '', '')
      ,'ventiler'          => ens('ventiler', '2', 'OHC', '')
      ,'ventiljustering'   => ens('ventiljustering', '0,05 - 0,08', '0,05 - 0,08', '')
      ,'kompression'       => ens('kompression', '10', '', '')
      ,'tomgang'           => ens('tomgang', '1800', '200', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,0', 'kw', '7000') . ens('maxeffektogheste', '1,96', 'kw', '', '(ifølge 25 km/t typegodkendelse)')
      ,'moment'            => ens('moment', '3,2', 'nm', '4300')
      ,'karburator'        => ens('karburator', 'mikuni VM 12 101 6', '13', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK CR7HSA', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1830', '', '')
      ,'bredde'            => ens('bredde', '780', '', 'uden sidespejle')
      ,'højde'             => ens('højde', '1010', '', 'uden sidespejle')
      ,'sædehøjde'         => ens('sædehøjde', '835-865', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1235', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '91', 'blyfri', 'minimum')
      ,'benzintank'        => ens('benzintank', '5,0-5,1', '(4,6 liter + 0,35 liter i reserve)', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '1.85', '16', 'alminium')
      ,'fælgbag'           => ens('fælg', '2.50', '16', 'alminium')
      ,'dækfor'            => ens('dæk1', '90', '90', '16', '48J') . ens('dæk1', '90', '80', '16', 'M/C 45P (ifølge daxshoppen.dk)')
      ,'dækbag'            => ens('dæk1', '120', '80', '16', '60J') . ens('dæk1', '120', '70', '16', 'M/C 57P (ifølge daxshoppen.dk)')
      ,'dæktrykfor'        => ens('dæktryk', '2,0', 'bar', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,5', 'bar', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'hydraulisk teleskopgaffel', '37', '100', '')
      ,'affjedringbag'     => ens('affjedringbag', 'mono shock', '', '65', '')
      ,'bremserfor'        => ens('bremser', 'skive', '260', 'hydraulisk', '2 stempler i glidende caliper')
      ,'bremserbag'        => ens('bremser', 'skive', '215', 'mekanisk eller hydraulisk')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '3 eller 6', 'vedligeholdelsesfrit')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '')
      ,'generator'         => ens('generator', '', '150', '')
      ,'sikring'           => ens('sikring', '15', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '')
      ,'lysfor'            => ens('lys', '12', '15 eller 55', '2')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '12', '0,46', '', 'LED')
      ,'lysbremse'         => ens('lys', '12', '0,96', '', 'LED')
      ,'lyspositions'      => ens('lys', '12', '5', '')
      ,'lysblink'          => ens('lys', '12', '21', '4')
      ,'lyskontrolblink'   => ens('lys', '12', '3', '')
      ,'lyskontrollangt'   => ens('lys', '12', '3', '')
      ,'lysnummerplade'    => ens('lys', '12', '3', '')
      ,'lysinstrument'     => ens('lys', '12', '3', '')
      ,'oplader'           => ens('oplader', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '15W-40', 'mineralsk (API : SG eller højere)', '1,0', '0,80')
      ,'gear'              => ens('olie', '', '', '')
      ,'forgaffel'         => ens('olie', '10W', 'i hvert rør', '0,180', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'kæde', '', '')
      ,'kobling'           => ens('kobling', 'manuel', 'multiplade', 'våd', '(4 gear model)') . '<br>' . ens('kobling', 'automatisk', 'multiplade', 'olie sprøjt', '(automatisk model)')
      ,'antalgear'         => ens('antalgear', '4', 'manuel', 'skift med fod') . '<br>eller<br>' . ens('antalgear', '2', 'automatisk', '')
      ,'gearratio'         => ens('gearratio', '1. gear : 36/11 (3,273)<br>2. gear : 31/16 (1,938)<br>3. gear : 27/20 (1,350)<br>4. gear : 24/23 (1,044)', '', '4,059')
      ,'tandhjulfor'       => ens('tandhjulfor', '11', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '53', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'WSF649B1080 WSF649B1080000 (lille knallert)', 'WSF649B1050 (lille knallert)', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '85', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '89,5', '', '')
      ,'vægttotal'         => ens('vægttotal', '280', '', '')
      ,'bæreevne'          => ens('bæreevne', '190,5', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'tørt papir', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'DOT 4', '', '')
      ,'støj'              => ens('støj', '69', '3000', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', '', '', '')
      ,'producent'         => ens('producent', 'Sachs Fahrzeug und Motorentechnik GmbH', '', '')
      ,'andet'             => ens('andet', 'kæde : chain pinion : 11 tænder', 'sprocket : 53 tænder', 'drive chain : 420')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '10 mm bøsning over gasspjæld i karburator', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 7 i stelnummeret er "B" og angiver den maksimale hastighed = 30 km/t', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', 'omdrejningsbegrænser boks som er forbundet mellem ledningnet og CDI boks', '', '')

   )

),'sachssaxy' => array(

   'generelt'              => array(
       'model'             => ens('model', 'sachs saxy', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', '638', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '12990', '', '')
      ,'hastighed'         => ens('hastighed', '25 og 45', '', '')
      ,'farver'            => ens('farver', 'blå', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'FY139FMB-B', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '')
      ,'køling'            => ens('køling', 'vind', '', '')
      ,'boring'            => ens('boring', '39', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,4', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '0,05 - 0,08', '0,05 - 0,08', '')
      ,'kompression'       => ens('kompression', '10', '', '')
      ,'tomgang'           => ens('tomgang', '1800', '200', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,0', 'kw', '7000', '<br>45 km/t version : 1,8 Kw ved 8500 o/min<br>25 km/t version : 1,6 Kw ved 6200 o/min')
      ,'moment'            => ens('moment', '2,45', 'nm', '5500')
      ,'karburator'        => ens('karburator', 'mikuni konstant vakuum type VM 12 101 6', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK CR7HSA', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1795', '', '')
      ,'bredde'            => ens('bredde', '630', '', 'uden sidespejle')
      ,'højde'             => ens('højde', '1125', '', 'uden sidespejle')
      ,'sædehøjde'         => ens('sædehøjde', '845', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1190', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '91', 'blyfri', 'eller højere')
      ,'benzintank'        => ens('benzintank', '6,5', '', 'hvor af 1,0 liter reserve')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '1.50', '17', 'aluminium')
      ,'fælgbag'           => ens('fælg', '1.50', '17', 'aluminium')
      ,'dækfor'            => ens('dæk2', '2.75', '17', '', '46J')
      ,'dækbag'            => ens('dæk2', '2.75', '17', '', '46J')
      ,'dæktrykfor'        => ens('dæktryk', '2,0', 'bar', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,5', 'bar', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '37', '110', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '48', '')
      ,'bremserfor'        => ens('bremser', 'tromle', '130', 'mekanisk')
      ,'bremserbag'        => ens('bremser', 'tromle', '130', 'mekanisk')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '3', 'vedligeholdelsesfrit')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '')
      ,'generator'         => ens('generator', '12', '60', '')
      ,'sikring'           => ens('sikring', '15', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '')
      ,'lysfor'            => ens('lys', '12', '15', '')
      ,'lysbagbremse'      => ens('lys', '12', '5/21', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '')
      ,'lyskontrolblink'   => ens('lys', '12', '3', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '12', '3', '')
      ,'oplader'           => ens('oplader', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '15W-40', 'mineralsk (API : SG eller højere)', '0,7', '')
      ,'gear'              => ens('olie', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '')
      ,'antalgear'         => ens('antalgear', '2 automatisk', '', '')
      ,'gearratio'         => ens('gearratio', '1. Gear : 36/11 (3,273)<br>2. Gear : 31/16 (1,938)<br>4,059', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'stål', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '79', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '83,5', '', '')
      ,'vægttotal'         => ens('vægttotal', '203,5', '', '')
      ,'bæreevne'          => ens('bæreevne', '120', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'skum', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', '', '', '')
      ,'producent'         => ens('producent', 'Sachs Fahrzeug und Motorentechnik GmbH', '', '')
      ,'andet'             => ens('andet', 'kæde : drive pinion : 11 tænder', 'Tandhjul : 45 km/t version : 48 tænder', 'tandhjul : 25 km/t version : 60 tænder<br>Drive chain : 420')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', 'tandhjulet på baghjulet er på 60 tænder', '', 'tandhjulet på baghjulet er på 48 tænder', '')
      ,'begrænstænding'    => ens('begrænstænding', 'CDI BB 182 Alpha Technik', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', 'Tegn 7 i stelnummeret er B og angiver den maksimale hastighed = 25 km/t', '', 'Tegn 7 i stelnummeret er A og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'madass brugermanual 2004'               => 'sachs_madass_brugermanual_2004.pdf'
   ,'madass brugermanual 2008'               => 'sachs_madass_brugermanual_2008.pdf'
   ,'madass servicemanual'                   => 'sachs_madass_servicemanual.pdf'
   ,'madass reservedele'                     => 'sachs_madass_reservedele.pdf'
   ,'madass reservedele Spider'              => 'sachs_madass_reservedele_spider.pdf'
   ,'madass el diagram'                      => 'sachs_madass_eldiagram.pdf'
   ,'madass el diagram<br>(uden koblingskontakt og noget med lys og schottky diode)' => 'sachs_madass_eldiagram_1.png'
   ,'madass el diagram<br>(uden koblingskontakt)'   => 'sachs_madass_eldiagram_2.png'
   ,'madass el diagram<br>(med koblingskontakt)'    => 'sachs_madass_eldiagram_3.png'
   ,'saxy brugermanual'                      => 'sachs_saxy_brugermanual.pdf'
   ,'saxy reservedele'                       => 'sachs_saxy_reservedele.pdf'
   ,'saxy el diagram'                        => 'sachs_saxy_eldiagram.gif'

),'typegodkendelser' => array(
    'madass 30 km/t E17188 (e1*2002/24*0212)'         => 'typegodkendelser/Sachs%20MadAss%20%28E17188%29%20udstedt%2021-07-2008.pdf'
   ,'madass 45 km/t E13381 (e1*2002/24*0212)'         => 'typegodkendelser/Sachs%20RC%20505-MadAss%20%28E13381%29%20udstedt%2021-04-2004.pdf'
   ,'madass 30 km/t E15487 (e1*2002/24*0212)'         => 'typegodkendelser/Sachs%20RC%20505-MadAss%20%28E15487%29%20udstedt%2002-06-2006.pdf'

   ,'madass 25 km/t E19829 (e1*2002/24*0212)'         => 'typegodkendelser/Sachs%20MadAss%20%28E19829%29%20udstedt%2010-07-2012.pdf'

   ,'saxy 25 km/t E15692 (e1*2002/24*0265)'           => 'typegodkendelser/Sachs%20Saxy%2025%20%28E15692%29%20udstedt%2003-08-2006.pdf'
   ,'saxy 45 km/t E15488 (e1*2002/24*0265)'           => 'typegodkendelser/Sachs%20Saxy%2045%20%28E15488%29%20udstedt%2002-06-2006.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
