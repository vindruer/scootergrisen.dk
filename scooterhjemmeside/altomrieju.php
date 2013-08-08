<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "rieju 50 cm³ scootere";
$overskrift = "rieju";
$metadescription = "billeder, specifikationer, manualer, el diagrammer, reservedele og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'riejupacific' => array(

   'generelt'              => array(
       'model'             => ens('model', 'rieju pacific', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'rieju pacific FR evasion racing edition', '', '')
      ,'scootertype'       => ens('scootertype', 'YH50QT', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '7998', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '')
      ,'farver'            => ens('farver', 'hvid-blå-sort', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.tmpparts.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '139QM', 'GY6', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '39', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,4', '', '')
      ,'ventiler'          => ens('ventiler', '2', 'OHC', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '7,5', '', '')
      ,'tomgang'           => ens('tomgang', '1500', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,0', 'kw', '') . '<br>' . ens('maxeffektogheste', '3,9', 'hk', '', '(ifølge www.tmpparts.dk)')
      ,'moment'            => ens('moment', '3,0', 'nm', '4500')
      ,'karburator'        => ens('karburator', 'DENI PD18J', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', 'HS', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1840-1845', '', '')
      ,'bredde'            => ens('bredde', '665-704', '', '')
      ,'højde'             => ens('højde', '1179-1200', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '795', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1290-1450', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '95', 'blyfri', '')
      ,'benzintank'        => ens('benzintank', '6,0', '', '')
      ,'forbrug'           => ens('forbrug', '50', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.50-3.00', '12', 'aluminium legering', '')
      ,'fælgbag'           => ens('fælg', '2.50-3.00', '12', 'aluminium legering', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '120-130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '1,9', 'kgcm2', 'for person under 81 kg') . '<br>' . ens('dæktryk', '2,0', 'kgcm2', 'for person over 81 kg')
      ,'dæktrykbag'        => ens('dæktryk', '2,2', 'kgcm2', 'for person under 81 kg') . '<br>' . ens('dæktryk', '2,4', 'kgcm2', 'for person over 81 kg')
      ,'affjedringfor'     => ens('affjedringfor', 'hydraulisk teleskopgaffel', '31', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '1 støddæmper', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '180', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '4', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '')
      ,'generator'         => ens('generator', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '')
      ,'lysfor'            => ens('lys', '', '', '', 'dobbelt poly ellipsoidal halogen')
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
       'motor'             => ens('olie', '15W-40', '', '0,85', '')
      ,'gear'              => ens('olie', '90', '', '0,11')
      ,'forgaffel'         => ens('olie', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '')
      ,'kobling'           => ens('kobling', 'automatisk', 'centrifugal', '')
      ,'antalgear'         => ens('antalgear', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'stål', '', '')
      ,'stelnummer'        => ens('stelnummer', 'VTP', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '')
      ,'vægttør'           => ens('vægttør', '81-89', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '84-99', '', '')
      ,'vægttotal'         => ens('vægttotal', '239', '', '')
      ,'bæreevne'          => ens('bæreevne', '159', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '83', '3500', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', 'Thomas Møller Pedersen ApS', '', '')
      ,'producent'         => ens('producent', 'Rieju S.A.', '', '')
      ,'andet'             => ens('andet', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', 'ja', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'riejurs2' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'rieju RS2', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', 'rieju RS2 matrix (RS2-FR)', 'rieju RS2 matrix pro', '', '')
      ,'pris'              => ens('pris', '25998', '28998', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'minarelli AM6', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', 'væske', '', '', '')
      ,'boring'            => ens('boring', '40,3', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,6', 'kw', '', '(ifølge 30 og 45 km/t typegodkendelse)') . ens('maxeffektogheste', '8-10', 'hk', '', '(ifølge koehler-knallerter.dk ved 30 km/t matrix pro)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'Dell\'Orto PHBN 16', '', '', '')
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
       'fælgfor'           => ens('fælg', '2.50 eller 2.75', '17', '', '')
      ,'fælgbag'           => ens('fælg', '2.50 eller 3.50', '17', '', '')
      ,'dækfor'            => ens('dæk1', '90 eller _100_', '80', '17', '') . ens('dæk1', '100', '80', '17', 'Pirelli Sport Demon (ifølge koehler-knallerter.dk ved matrix pro)')
      ,'dækbag'            => ens('dæk1', '110 eller _130_', '80', '17', '') . ens('dæk1', '130', '70', '17', 'Pirelli Sport Demon (ifølge koehler-knallerter.dk ved matrix pro)')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'hydraulisk upside-down gaffel', '35', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '280', '', '')
      ,'bremserbag'        => ens('bremser', 'skive', '220', '', '')
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
      ,'antalgear'         => ens('antalgear', '6', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '11', '', '', '') . ens('tandhjulfor', '13', '', '', '(ifølge koehler-knallerter.dk ved matrix pro)')
      ,'tandhjulbag'       => ens('tandhjulbag', '61', '', '', '') . ens('tandhjulbag', '47', '', '', '(ifølge koehler-knallerter.dk ved matrix pro)')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'VTPRS210D00 VTPRS210D00900 VTPRS204D00827 (lille knallert)', 'VTPRS204D00 VTPRS204D00726 (lille knallert matrix)', '', '')
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
      ,'importør'          => ens('importør', 'Thomas Møller Pedersen ApS', 'Itago A/S', '', '')
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
      ,'begrænsudstødning' => ens('begrænsudstødning', '', 'Reduktionsrør ø10x25 i forrør i udstødning', 'Bøsning', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'riejurs3' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'rieju RS3', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
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
      ,'antalgear'         => ens('antalgear', '6', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'VTPRS310D00000235 (stor knallert E18545-01)', '', '', '')
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
      ,'begrænsandet'      => ens('begrænsandet', '', '', 'muligvis blindrør på udstødning, elektronisk og tandhjul', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'brugermanual'                                          => 'rieju_pacific_brugermanual.pdf'

),'typegodkendelser' => array(
    'pacific 45 km/t E17266 (e9*2002/24*0142)'              => 'typegodkendelser/Rieju%20Pacific%2050%20%28E17266%29%20udstedt%2029-10-2008.pdf'
   ,'SMX50 MR 45 km/t E17642 (e9*92/61*0074*14R2)'          => 'typegodkendelser/Reiju%20SMX50%20%28E17642%29%20udstedt%2018-05-2009.pdf'
   ,'RS2 30 km/t E17267 (e11*2000/7*0068*06)'               => 'typegodkendelser/Rieju%20RS2%20%28E17267%29%20udstedt%2029-10-2008.pdf'
   ,'RS2 45 km/t E17847 (e11*2000/7*0068*06)'               => 'typegodkendelser/Rieju%20RS2%20%28E17847%29%20udstedt%2003-11-2009.pdf'
   ,'RS2 Matrix 30 km/t E15348 (e11*2000/7*0068)'           => 'typegodkendelser/Rieju%20RS2%20Matrix%20%28E15348%29%20udstedt%2011-10-2007.pdf'
   ,'RS3 D 45 km/t E18545 (e11*2000/7*1056)'                => 'typegodkendelser/Rieju%20RS3%20%28E18545%29%20udstedt%2022-09-2010.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>