<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "andre knallerter og scootere med 50 cm³ og elektrisk motor";
$overskrift = "andre";
$metadescription = "specifikationer, download og typegodkendelser";

$setup['sideikon']               = 'logoer/logo_andre.png';

$databasecenter = array(

'bendascoot' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'benda scoot', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BD50QT-14D', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '4995', '6890', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', 'sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.bikedanmark.dk/2008/5.htm', 'http://www.scoot.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '139QMB', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,6', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '39', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,5', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,8', 'kw', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'PD19J', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1670', '', '', '')
      ,'bredde'            => ens('bredde', '635', '', '', '')
      ,'højde'             => ens('højde', '1070', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '80', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1200', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '4,4 eller 6,0', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2,50', '12', '', '')
      ,'fælgbag'           => ens('fælg', '2,50', '12', '', '') . ' eller ' . ens('fælg', '2,75', '10', '', '')
      ,'dækfor'            => ens('dæk1', '100', '60', '12', '45J') . ' eller ' . ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '100', '60', '12', '45J') . ' eller ' . ens('dæk2', '3,50', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '190', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '4', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'LBDTCBPB891', 'LBDTCBPB381000 LBDTCBPB481000', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '')
      ,'vægttør'           => ens('vægttør', '78', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '81', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '156', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '100', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '75', '3500', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'Bike danmark ApS', '', '', '')
      ,'producent'         => ens('producent', 'Zhejiang Changling Benjian Vehicle Co., Ltd.', '', '', '')
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
      ,'begrænsstelnum'    => ens('begrænsstelnum', 'Tegn 8 i stelnummeret er "B" og angiver den maksimale hastighed = 25 km/t.', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'benmallb852' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'benmal LB-852', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'BM 2000', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '25', '', '', '(typegodkendelse siger stor knallert)')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '', '')
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
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,0', 'kw', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1080', '', '', '')
      ,'bredde'            => ens('bredde', '640', '', '', '')
      ,'højde'             => ens('højde', '1050', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50', '12', '', '')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', '')
      ,'dækfor'            => ens('dæk1', '90', '90', '12', '')
      ,'dækbag'            => ens('dæk1', '90', '90', '12', '')
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
      ,'stelnummer'        => ens('stelnummer', 'VTP', '', '', '')
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
      ,'importør'          => ens('importør', 'BM MOTOR ApS', '', '', '')
      ,'producent'         => ens('producent', 'Zhejiang Lanbei Vehicle Co., Ltd.', '', '', '')
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
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', 'Elektronisk i Elektronikboks')

   )

),'cityscooterfreak' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'city scooter freak', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'baotian BT49QT-12', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BT49QT-12', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '8995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'gul sølv grå', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,6', 'kw', '7500')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK C7HSA', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1850', '', '')
      ,'bredde'            => ens('bredde', '650', '', '')
      ,'højde'             => ens('højde', '1150', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1300', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '92', 'blyfri', 'minimum')
      ,'benzintank'        => ens('benzintank', '6,5', '', '')
      ,'forbrug'           => ens('forbrug', '50', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '12', 'aluminium')
      ,'fælgbag'           => ens('fælg', '', '12', 'aluminium')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', 'med ABS')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '5', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '')
      ,'generator'         => ens('generator', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '12', '21', '')
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
       'motor'             => ens('olie', '15W-40', '', '')
      ,'gear'              => ens('olie', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LX6TCAPC174 (lille knallert E16300)', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '88', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '150', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', 'fjernbetjent alarm', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', '', '', '')
      ,'producent'         => ens('producent', '', '', '')
      ,'andet'             => ens('andet', '', '', '')

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

),'sevetricks' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'SEV eTRICKS', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'ETR', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', 'fransk vejledende pris : 2790 euro (cirka 20.802,- danske kroner)')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'SX48V1000W', 'DC børsteløs Leroy Somer CNC dæksel i aluminium, stator med resin beskyttelse, ring magnet', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '1000', 'w', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,0', 'kw', '', '(ifølge typegodkendelse)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1732', '', '', '(i følge typegodkendelse)')
      ,'bredde'            => ens('bredde', '740', '', '', '(i følge typegodkendelse)')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2 1/8', '16', '', 'aluminium dobbelt væggende')
      ,'fælgbag'           => ens('fælg', '2 1/8', '16', '', '')
      ,'dækfor'            => ens('dæk2', '2.25', '16', '', '')
      ,'dækbag'            => ens('dæk2', '2.25', '16', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'justerbar hydraulisk', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'justerbar hydraulisk støddæmper', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', 'wave', '')
      ,'bremserbag'        => ens('bremser', 'skive', '', 'wave', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '16', '48', 'Lithium polymer', '(in-frame) (ekstra batteri af samme volt og Ah kan købes som ekstra udstyr)')
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
      ,'ladetid'           => ens('ladetid', '3,25', '100%', '', '(ved brug af den medfølgende oplader)') . ens('ladetid', '2', '100%', '', '(ved brug af hurtigoplader som kan købes som ekstra udstyr)')
      ,'rækkevidde'        => ens('rækkevidde', '', '20-30', '', '') . '<br>' . ens('rækkevidde', '', '60', '', '(med ekstra batteri som kan købes som ekstra udstyr)')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'kæde', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'aluminium 6082 (single-frame og decks udsat for T6 behandling)', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'VS3', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '42', '', '', '(i følge typegodkendelse)')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '79', '', '', '(homologated version)')
      ,'vægttotal'         => ens('vægttotal', '137', '', '', '(i følge typegodkendelse)')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'Nellemann & Drewsen ApS', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', 'baggrundsbelyst digital instrument (Speedometer, Max speed, Daily mileage, Total mileage, Time of course...)', '', '', '')

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

),'listo' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'listo', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'zhongyu ZY50QT-7', '', '')
      ,'scootertype'       => ens('scootertype', 'ZY50QT-7', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '4995', '7495', '')
      ,'hastighed'         => ens('hastighed', '45', '', '')
      ,'farver'            => ens('farver', 'rød sølv sort', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'ZS1P39QMB', 'Lin Hai 139QMB (stelnummer CB)', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '38,5', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,5', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '10,5', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,1', 'kw', '7000', '') . ens('maxeffektogheste', '2,2', 'kw', '', '(ifølge 45 km/t typegodkendelse)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'H98C0DZ', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', 'tryk og sumpsmøring', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK C7HSA', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1660', '', '')
      ,'bredde'            => ens('bredde', '665', '', '')
      ,'højde'             => ens('højde', '1100', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '80', 'minimum', '')
      ,'akselafstand'      => ens('akselafstand', '1210', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '92', 'blyfri', '')
      ,'benzintank'        => ens('benzintank', '5,5', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.15', '10', '')
      ,'fælgbag'           => ens('fælg', '2.15', '10', '')
      ,'dækfor'            => ens('dæk2', '3.00', '10', '')
      ,'dækbag'            => ens('dæk2', '3.00', '10', '')
      ,'dæktrykfor'        => ens('dæktryk', '21', 'psi', '')
      ,'dæktrykbag'        => ens('dæktryk', '25', 'psi', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'svingarm med støddæmper', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '153', 'hydraulisk')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '45', '', '')
      ,'venderadius'       => ens('venderadius', '3,2', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '4', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '')
      ,'generator'         => ens('generator', '', '', '')
      ,'sikring'           => ens('sikring', '10', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '')
      ,'lysfor'            => ens('lys', '12', '35', '', '')
      ,'lysbagbremse'      => ens('lys', '12', '8/21', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '12', '5', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '', '')

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
       'stel'              => ens('stel', 'rørstel', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LMFTCBPD141', 'LMFTCBPD741', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '80', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '84', '', '')
      ,'vægttotal'         => ens('vægttotal', '160-164', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'polyurethane plastik kerne', '', '')
      ,'stigeevne'         => ens('stigeevne', 'under 6', 'grader', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '93', '4000', '(ifølge 45 km/t typegodkendelse)')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', 'P. Lindberg Maskinforretning A/S', '', '')
      ,'producent'         => ens('producent', '', '', '')
      ,'andet'             => ens('andet', '', '', '')

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

),'pexma' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'pexma', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'Kangda Zongsshen KD50QT-4', '', '', '')
      ,'scootertype'       => ens('scootertype', 'KD50QT-4', 'PM50QT-4', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', 'sort sølv-grå-rød', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'ZS1P39QMB', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '38,5', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,5', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '10,5', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,9', 'hk', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1680', '', '', '')
      ,'bredde'            => ens('bredde', '638', '', '', '')
      ,'højde'             => ens('højde', '1010', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1180', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '92', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '6,0', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50 eller 2.15', '10', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '3.50 eller 2.15', '10', '', 'aluminium')
      ,'dækfor'            => ens('dæk1', '3.00', '10', '', '')
      ,'dækbag'            => ens('dæk1', '3.00', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'støddæmper', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '155', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '', '')
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
       'transmissiontype'  => ens('transmissiontype', 'CVT', '', '', '')
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
      ,'vægtkørerklar'     => ens('vægtkørerklar', '75', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'SPH Import ApS', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', 'åbning af gasspjæld', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 8 i stelnummeret er 3 og angiver den maksimale hastighed = 30 km/t', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'rmczanzara' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'RMC zan zara', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'huoniao zan zara', '', '', '')
      ,'scootertype'       => ens('scootertype', 'HN50QT-K', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '8995', '9999', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort hvid', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.scooterhjoernet.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '139QMA eller 1P39QMB', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '10,5', '', '', '')
      ,'tomgang'           => ens('tomgang', '1900', '100', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '2,9', 'nm', '7500', '')
      ,'karburator'        => ens('karburator', 'PD18J', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1790-1820', '', '', '')
      ,'bredde'            => ens('bredde', '675-685', '', '', '')
      ,'højde'             => ens('højde', '1150', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1330', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '90', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.5', '12', '', '')
      ,'fælgbag'           => ens('fælg', '2.5', '12', '', '')
      ,'dækfor'            => ens('dæk1', '110-120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '110-120', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
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
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
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
       'motor'             => ens('olie', '15W-40', 'API : SF', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'LJEJCBPK38A', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '92?', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '90?', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '240-242', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '76-78', '3250', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'AMCO Denmark A/S', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', 'ja', 'ja', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'shineray' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'hedder måske sinski shineray', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'shineray', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'linxx', 'top star', '', '')
      ,'scootertype'       => ens('scootertype', 'XY50PYIE', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '6999', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '1P39FMB', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,8', 'kw', '', '(i følge 45 km/t typegodkendelse)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'KG A 10', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1450', '', '', '')
      ,'bredde'            => ens('bredde', '790', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '92', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '4', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.15', '10', '', '')
      ,'fælgbag'           => ens('fælg', '2.15', '10', '', '')
      ,'dækfor'            => ens('dæk2', '3.50', '10', '', '')
      ,'dækbag'            => ens('dæk2', '3.50', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '2 stempeler')
      ,'bremserbag'        => ens('bremser', 'skive', '', '', '2 stempeler')
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
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
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
       'transmissiontype'  => ens('transmissiontype', 'kæde', '', '', '')
      ,'kobling'           => ens('kobling', 'manuel', '', '', '')
      ,'antalgear'         => ens('antalgear', '4', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '14', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '36', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LXYJCBL0270', 'LXYJCBL0870', 'LXYJCBL0570', 'LUJTCBP2X6A (25 km/t E16170) LXYJCBL0760N20851 (E16510-01 OY651 stor)')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '69', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '72', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '147', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '75', '4250', '', '(i følge 45 km/t typegodkendelse)')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'Asian Motor Company ApS', 'MotoRevo AB', '', '')
      ,'producent'         => ens('producent', 'Chongqing Shineray Motorcycle Manufacturing Co., Ltd.', '', '', '')
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
      ,'begrænsstelnum'    => ens('begrænsstelnum', 'Tegn 9 i stelnummeret er 2 og angiver den maksimale hastighed = 25 km/t', '', 'Tegn 9 i stelnummeret er 1 og angiver den maksimale hastighed = 45 km/t<br>Tegn nr. 6 er et "B" og angiver maksimal hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'sinskimc02a' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'sinski MC02A', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'fantasy chopper', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '7499', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '139FMB JF50 (måske jialing JL-MC02A)', '', '', '')
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
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,6', 'kw', '', '(i følge 45 km/t typegodkendelse)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1870', '', '', '')
      ,'bredde'            => ens('bredde', '700', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.5', '12', '', '')
      ,'fælgbag'           => ens('fælg', '4.5', '12', '', '(der skulle nok står 10" i stedet for 12")')
      ,'dækfor'            => ens('dæk1', '90', '90', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '60', '10', '')
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
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', 'SANXIN01')
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
      ,'antalgear'         => ens('antalgear', '4', 'manuel', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LXEGD14026E000219', 'LXEGD14036E000228 (NE499 E15464-01)', 'LXEGD14026E000219 (stor NN544 E15464-01)', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '75', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '150', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'Bike Danmark Aps', '', '', '')
      ,'producent'         => ens('producent', 'Jiangsu Sinski Vehicle Science & Technology Co., Ltd.', '', '', '')
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

),'superbikext50qt2' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'superbike XT50QT-2', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'måske : baotian classic sport', 'Kinroad Little Fish XT50QT-2A', '', '')
      ,'scootertype'       => ens('scootertype', 'XT50QT-2', 'BT49QT-9', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '6995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', 'blå rød sort gul sølv', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '139QMB', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49-50', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '39', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,1', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '0,05', '0,08', '', '')
      ,'kompression'       => ens('kompression', '9,2', '', '', '')
      ,'tomgang'           => ens('tomgang', '1500', '100', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,7', 'hk', '7500', '')
      ,'moment'            => ens('moment', '3,0', 'nm', '4500', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'A7TC', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1670', '', '', '')
      ,'bredde'            => ens('bredde', '640', '', '', '')
      ,'højde'             => ens('højde', '1060', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '130', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1190', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '92 eller 95', '', '', '')
      ,'benzintank'        => ens('benzintank', '5,5', '', '', '')
      ,'forbrug'           => ens('forbrug', '47', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk2', '3.50', '10', '', '')
      ,'dækbag'            => ens('dæk2', '3.50', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '225', 'kpascal', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '250', 'kpascal', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskop', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'fjeder og dæmper', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', 'uægte ABS')
      ,'bremserbag'        => ens('bremser', '', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '2', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '7', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
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
      ,'kobling'           => ens('kobling', '', 'centrifugal', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'rør', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '78', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '228', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '150', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '18', 'grader', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', 'alarm med fjernbetjening', '', '', '')

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

),'tisongtm300' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'tisong TM-300', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'tisong city', 'swift', 'pacer', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '', '')
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
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,5', 'kw', '', '')
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
       'fælgfor'           => ens('fælg', '', '10', '', '')
      ,'fælgbag'           => ens('fælg', '', '10', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '10', '')
      ,'dækbag'            => ens('dæk1', '', '', '10', '')
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
      ,'batterispec1'      => ens('batterispec1', '48', '40', '', '')
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
      ,'rækkevidde'        => ens('rækkevidde', '', '60-80', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'LLM', 'LLMESBTS08L000670', '', '')
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
      ,'importør'          => ens('importør', '3D-Unika', '', '', '')
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

),'tpgs303' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'den der meget lave chopper model hvor man nærmest skraber røven hen af asfalten', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'TP GS-303', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'måske peace', '', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'L6ACCBL347A', '', '', '')
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
      ,'producent'         => ens('producent', 'måske "China Peaceyuli Group Co., Limited" eller "Zhejiang Peace Co.,Ltd"', '', '', '')
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

),'vekenvkm50' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'veken VK-M50', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'veken hybrid VK-M50', 'abat ZQHD-808', '', '')
      ,'scootertype'       => ens('scootertype', 'VK-M50', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '9995', '14995', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.clands-shop.dk/group.asp?group=54', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'IP39 og børsteløs nav motor', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt og elektrisk', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '48', '800', '', '')
      ,'volume'            => ens('volume', '49,5', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '800', 'w', '', '') . '<br>' . ens('nomieffektogheste', '2,26', 'kw', '7500', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1600', 'w', '', '')
      ,'moment'            => ens('moment', '2,91', 'nm', '6500', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1880', '', '', '')
      ,'bredde'            => ens('bredde', '680', '', '', '')
      ,'højde'             => ens('højde', '1160', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '140', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '4,9', '', '', '')
      ,'forbrug'           => ens('forbrug', '80-85', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '14', '', '')
      ,'fælgbag'           => ens('fælg', '', '14', '', '')
      ,'dækfor'            => ens('dæk1', '80', '90', '14', 'R14')
      ,'dækbag'            => ens('dæk1', '80-90', '90', '14', 'R14')
      ,'dæktrykfor'        => ens('dæktryk', '200', 'kpascal', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '220', 'kpascal', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '48', '12', 'lithium (LiFePo4)', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
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
      ,'oplader'           => ens('oplader', '54,8', '2,5', '', '')
      ,'ladetid'           => ens('ladetid', '5-7', '', '', '')
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
      ,'euroemission'      => ens('euroemission', '2', '', '', '')
      ,'vægttør'           => ens('vægttør', '90', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '105', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '120', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', 'Den elektriske motor bruges ved hastigheder under 25 km/t.', 'Skifter automatisk til benzin motor når man i 5 sekunder har kørt ved hastigheder over 25 km/t.', 'Når benzinmotoren køre så oplades batterierne.', 'Kan indstilles til kun at køre på den elektriske motor eller til kun at køre på benzin motoren eller til at den automatisk skifter alt efter hastigheden.<br><br>Den elektriske motor er indbygget i baghjulet.<br><br>'.visbilled('1', 'billed1310.jpg', 'Veken VK-M50').'<br>Benzin motoren er formodentligt helt almindelig. Men koblingsbakke fjedrene er nok mere stramme end normalt da benzin motoren skal tage fat mens scooteren køre 25 km/t.')

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

),'xmotosxb31' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'xmotos XB31', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'XB-31-50L', 'X31MD50', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '7995', '', '', '')
      ,'hastighed'         => ens('hastighed', '25', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Lifan 139FMB-B', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49-49,5', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '39', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,4', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '9,0', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,3', 'kw', '', '') . '<br>' . ens('maxeffektogheste', '2,0', 'kw', '', '(i følge xmotos.com)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '2010', '', '', '(motard)') . '<br>' . ens('længde', '2030', '', '', '(off road)')
      ,'bredde'            => ens('bredde', '855', '', '', '')
      ,'højde'             => ens('højde', '1095', '', '', '(motard)') . '<br>' . ens('højde', '1100', '', '', '(off road)')
      ,'sædehøjde'         => ens('sædehøjde', '910', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '320', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1325', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '90', '', 'eller højere', '')
      ,'benzintank'        => ens('benzintank', '4,5', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '19', '', '') . ' eller ' . ens('fælg', '2.50', '17', '', '')
      ,'fælgbag'           => ens('fælg', '', '16', '', '') . ' eller ' . ens('fælg', '2.50', '17', '', '')
      ,'dækfor'            => ens('dæk1', '70', '100', '19', 'off road') . ' eller ' . ens('dæk1', '110', '70', '17', 'motard')
      ,'dækbag'            => ens('dæk1', '90', '100', '16', 'off road') . ' eller ' . ens('dæk1', '110', '70', '17', 'motard')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'upside-down hydraulisk ikke justerbar', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'hydraulisk støddæmper', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', 'hydraulisk', '')
      ,'bremserbag'        => ens('bremser', 'skive', '', 'hydraulisk', '')
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
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
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
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', 'manuel', 'våd', 'multiplade', '')
      ,'antalgear'         => ens('antalgear', '5', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'L98', 'L98B1A3D6A1000 (ukendt xmotos model)', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '')
      ,'vægttør'           => ens('vægttør', '93', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '96', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '192', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '165', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '66', '2750', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'HP Trading ApS', '', '', '')
      ,'producent'         => ens('producent', 'Zhejiang Xmotos Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', 'Tegn 7 i stelnummeret er "3" og angiver maksimal hastighed = 25 km/t.', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', 'ja')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', 'Tegn 7 i stelnummeret er "3" og angiver maksimal hastighed = 25 km/t.', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'xmotosxb81' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'xmotos XB81', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'XB81', 'X81MD50', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '6995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'loncin', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '39', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,4', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '8,8', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,45', 'kw', '', '(i følge xmotos.com)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1790', '', '', '')
      ,'bredde'            => ens('bredde', '830', '', '', '')
      ,'højde'             => ens('højde', '960', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '880', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '355', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1250', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '90', '', 'eller over', '')
      ,'benzintank'        => ens('benzintank', '4,7', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '19', '', '') . ' eller ' . ens('fælg', '2.50', '17', '', '')
      ,'fælgbag'           => ens('fælg', '', '16', '', '') . ' eller ' . ens('fælg', '2.50', '17', '', '')
      ,'dækfor'            => ens('dæk1', '70', '100', '17', 'off road') . ' eller ' . ens('dæk1', '80-90', '90', '14', 'motard')
      ,'dækbag'            => ens('dæk1', '90', '100', '14', 'off road') . ' eller ' . ens('dæk1', '90', '100', '14', 'motard')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'upside-down hydraulisk ikke justerbar', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'hydraulisk støddæmper', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '210', 'hydraulisk', 'dobbelt caliper')
      ,'bremserbag'        => ens('bremser', 'skive', '200', 'hydraulisk', 'dobbelt caliper')
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
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
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
       'transmissiontype'  => ens('transmissiontype', 'kæde', '', '', '')
      ,'kobling'           => ens('kobling', 'manuel', 'våd', 'multiplade', '')
      ,'antalgear'         => ens('antalgear', '5', '', '', '') . '<br>' . ens('antalgear', '4', '', '', '(i følge xmotos.com)')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'L98B1A3D6A1000 (ukendt xmotos model)', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '81', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '155', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'HP Trading ApS', '', '', '')
      ,'producent'         => ens('producent', 'Zhejiang Xmotos Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', 'ja')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'zeroe' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'Kunne findes på http://www.zero-e.dk/ som er lukket nu', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'zero-e', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '6995', '12995', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '1500', 'kulfri', '')
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
       'længde'            => ens('længde', '1700', '', '', '')
      ,'bredde'            => ens('bredde', '880', '', '', '')
      ,'højde'             => ens('højde', '1270', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '', '', '', 'aluminium')
      ,'dækfor'            => ens('dæk1', '', '', '10', '')
      ,'dækbag'            => ens('dæk1', '', '', '10', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '48', '38', 'silicium', '(4 stk 12 volt)')
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
      ,'oplader'           => ens('oplader', '', '9', '', '')
      ,'ladetid'           => ens('ladetid', '3', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '60', '', '(ifølge mc-importen.dk)') . '<br>' . ens('rækkevidde', '', '50-70', '', '(ifølge zero-e.dk)')
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
      ,'vægttotal'         => ens('vægttotal', '203', '', '', '')
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
      ,'andet'             => ens('andet', 'Ved fuld opladning pr. gang har batteriet en levetid mellem 350 og 400 opladninger d.v.s ca. 1 år. ', '', '', '')

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

),'blacknroll' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'black\'n\'roll S4800D', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '8695', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', 'sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.yndgaardauto.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'J.H.M', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '0,62', 'kw', '', '(i følge 30 km/t typegodkendelse)')
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
      ,'benzintank'        => ens('benzintank', '1,4', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '1,2', '19', '', '')
      ,'fælgbag'           => ens('fælg', '1,2', '19', '', '')
      ,'dækfor'            => ens('dæk2', '1,75', '19', '', '')
      ,'dækbag'            => ens('dæk2', '1,75', '19', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'tromle', '80', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '80', '', '')
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
      ,'vægtkørerklar'     => ens('vægtkørerklar', '31', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'SPH Import ApS', '', '', '')
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
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 9 i stelnummeret er D og angiver den maksimale hastighed = 30 km/t', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'city scooter freak (City Scooter XT50QT-2) brugermanual'      => 'cityscooter_xt50qt-2_brugermanual.pdf'
   ,'listo (Zhongyu ZY50QT-7) brugermanual'                  => 'zhongyu_zy50qt-7_brugermanual.pdf'
   ,'tisong TM-300 brugermanual'          => 'tisong_tm300_brugermanual.pdf'
   ,'tisong TM-300 eldiagram'             => 'tisong_tm300_eldiagram.pdf'
   ,'tisong TM-300 COC'                   => 'tisong_tm300_coc.pdf'
   ,'superbike XT50QT-2 brugermanual'     => 'xt50qt2_brugermanual.pdf'

),'typegodkendelser' => array(
    'benda scoot 25 km/t E17548 (e4*2002/24*1771)' => 'typegodkendelser/Benda%20Scoot%20%28E17548%29%20udstedt%2005-02-2009.pdf'
   ,'benmal LB-852 25 km/t E18548 (e11*2002/24*0869)' => 'typegodkendelser/Benmal%20LB-852%20%28E18548%29%20udstedt%2022-09-2010.pdf'
   ,'city scooter BT49QT-12 45 km/t E16277 (e4*2002/24*1058)'    => 'typegodkendelser/Baotian%20BT49QT-12%20%28E16277%29%20udstedt%2027-03-2007.pdf'
   ,'city scooter freak BT49QT-12 30 km/t E16300 (e4*2002/24*1058)'    => 'typegodkendelser/Baotian%20BT49QT-12%20%28E16300%29%20udstedt%2029-03-2007.pdf'
   ,'city scooter freak BT49QT-3 25 km/t E15562 (e4*2002/24*0427)'    => 'typegodkendelser/Baotian%20-%20%28E15562%29%20udstedt%2016-06-2006.pdf'
   ,'city scooter freak BT49QT-12-d30 30 km/t E16793 (e11*2002/24*1058)'    => 'typegodkendelser/Baotian%20BT49QT-12-d30%20%28E16793%29%20udstedt%2024-01-2008.pdf'
   ,'city scooter freak BT49QT-12-d30 30 km/t E16887 (e4*2002/24*1397)'    => 'typegodkendelser/Baotian%20BT49QT-12-d30%20%28E16887%29%20udstedt%2025-01-2008.pdf'
   ,'city scooter freak BT49QT-12-d45 45 km/t E16794 (e11*2002/24*1058)'    => 'typegodkendelser/Baotian%20BT49QT-12-d45%20%28E16794%29%20udstedt%2024-01-2008.pdf'
   ,'city scooter freak BT49QT-12-d45 45 km/t E16888 (e4*2002/24*1397)'    => 'typegodkendelser/Baotian%20BT49QT-12-d45%20%28E16888%29%20udstedt%2025-01-2008.pdf'
   ,'listo 44 km/t E13278 (e4*92/61*0194)' => 'typegodkendelser/Zhongyu%20ZY50QT-7%20%28E13278%29%20udstedt%2009-03-2004.pdf'
   ,'pexma 30 km/t E15583 (e11*2002/24*0187)'      => 'typegodkendelser/Pexma%20PM50QT-4%20%28E15583%29%20udstedt%2027-06-2006.pdf'
   ,'Kangda Zongsshen KD50QT-4 30 km/t E15387 (e11*2002/24*0187)'            => 'typegodkendelser/Kangda%20Zongsshen%20%28E15387%29%20udstedt%2016-05-2006.pdf'
   ,'shineray XY50PYIE 25 km/t E16170 (e11*2002/24*0328)' => 'typegodkendelser/SHINERAY%20-%20%28E16170%29%20udstedt%2012-02-2007.pdf'
   ,'shineray XY50PYIE 45 km/t E16169 (e11*2002/24*0328)' => 'typegodkendelser/SHINERAY%20-%20%28E16169%29%20udstedt%2012-02-2007.pdf'
   ,'shineray Linxx XY50PYIE 45 km/t E16510 (e11*2002/24*0328)' => 'typegodkendelser/Linxx%2050cc%20%28E16510%29%20udstedt%2017-08-2007.pdf'
   ,'tisong TM-300 45 km/t E17206 (e11*2002/24*0297)' => 'typegodkendelser/Tisong%20city%20%28E17206%29%20udstedt%2020-08-2008.pdf'
   ,'xmotos XB31 25 km/t E18100 (e13*2002/24*0327)' => 'typegodkendelser/Xmotos%20-%20%28E18100%29%20udstedt%2026-03-2010.pdf'
   ,'HUONIAO RMC HN50QT-K 30 km/t E17168 (e4*2002/24*1599)' => 'typegodkendelser/HUONIAO%20RMC%20HN50QT-K%20%28E17168%29%20udstedt%2014-07-2008.pdf'
   ,'HUONIAO RMC HN50QT-K 45 km/t E17169 (e4*2002/24*1599)' => 'typegodkendelser/HUONIAO%20RMC%20HN50QT-K%20%28E17169%29%20udstedt%2014-07-2008.pdf'
   ,'Sinski MC02A (GD140) 45 km/t E15464 (e4*2002/24*0583)' => 'typegodkendelser/Sinski%20MC02A%20%28E15464%29%20udstedt%2001-06-2006.pdf'

   ,'Baoxin TWS Scooty BX 45 km/t S8194'            => 'typegodkendelser/Baoxin%20TWS%20Scooty%20%28S8194%29%20udstedt%2020-03-1997.pdf'
//TWS Reservdelar AB
//LBB
//MIKUNI 13-195
//Taiwan NF Company NF-50 2 takt
//2.15 x 10
//2.15 x 10
//3.50-10
//3.50-10

   ,'Black`n Roll S4800D 30 km/t E15545 (e2*2002/24*0014)'            => 'typegodkendelser/Black%60n%20Roll%20S4800D%20%28E15545%29%20udstedt%2015-06-2006.pdf'
//SPH Import ApS
//J.H.M
//1,2 x 19
//1,2 x 19
//1,75 - 19
//1,75 - 19
//Tegn 9 i stelnummeret er D og angiver den maksimale hastighed = 30 km/t

   ,'Branson BS49 45 km/t E12244 (e4*92/61*0144)'            => 'typegodkendelser/Branson%20BS49%20%28E12244%29%20udstedt%2007-10-2002.pdf'
//Amager Trailer Center
//LE8T
//KEIHIN CVK
//Branson FY139QMB 4 takt
//2.15 x 10
//2.15 x 10
//3.50 - 10
//3.50 - 10

   ,'Cagiva Cucciolo P3 45 km/t A9790'            => 'typegodkendelser/Cagiva%20Cucciolo%20%28A9790%29%20udstedt%2026-03-1999.pdf'
//F.I. Motorcykler A/S
//ZCG
//P3
//PHVA 12
//Derbi EMH050 2 takt
//1.85 x 16
//2.15 x 16
//2 3/4 - 16
//3 1/4 - 16
//Hastighedsbegrænsning: Art/placering: Afstandsskive, 1,0 mm tykkelse, mellem forreste remskivehalvdele.

//http://www.scootergalleri.dk/galleri/256847-cagiva_cucciolo_byttet

   ,'Chun Lan CL50KT 45 km/t S9891'            => 'typegodkendelser/Chun%20Lan%20-%20%28S9891%29%20udstedt%2010-06-1999.pdf'
//Arrin A/S
//LCL
//Skive, tykk. = 6,5 mm Mell. forr. remskivehalvd
//Chun Lan 1E 39 FM 2 takt
//2.15 x 10
//2.15 x 10
//3.00-10
//3.00-10

   ,'Chun Lan Starway CL50QT 45 km/t E10592 (e4*92/61*0015)'            => 'typegodkendelser/Chunlan%20Starway%20%28E10592%29%20udstedt%2016-05-2000.pdf'
//Hot Products Co. Holst & Tharaldsen A/S
//CLC
//PZ17
//ChunLan 1E39FM 2 takt
//2.15 x 10
//2.15 x 10
//100/80 - 10
//100/80 - 10
//Hastighedsbegrænsning: Begrænset åbning af hjerteklap, der er placeret mellem indsugningtrøret og cylinderen, og sikret mod adskillelse med knækbolt. Åbningshøjden i hjelteklappen er begrænset til 2,5 mm.

   ,'Di Blasi R7E 45 km/t E10124 (e1*92/61*0034)'            => 'typegodkendelser/Di%20Blasi%20-%20%28E10124%29%20udstedt%2009-09-1999.pdf'
//Mobility AS
//ZCH
//DELL'ORTO SHA1412L
//Di Blasi M1 2 takt
//2.50 x 5"
//2.50 x 5"
//4.00 - 5"
//4.00 - 5"

   ,'FYM FY50QT 45 km/t E14783 (e4*2002/24*0336)'            => 'typegodkendelser/FYM%20-%20%28E14783%29%20udstedt%2005-01-2006.pdf'
//Max MC Import A/S
//LE8
//KEIHIN CVK
//Jiangsu Linhai Motor
//FY139QMB
//4 takt
//2.15 x 10
//2.15 x 10
//3.50 - 10
//3.50 - 10
//Hastighedsbegrænsning: Art/Placering: Afstandsskive mellem forreste remskivehalvdele med en tykkelse på 7,0 mm

   ,'Huatian JL50QT-16 (JL50QT-6 / HT50QT-16) 40 km/t E16497 (e11*2002/24*0359)'            => 'typegodkendelser/Huatian%20-%20%28E16497%29%20udstedt%2007-08-2007.pdf'
//CBIZ Partner AB
//LJL
//PT18J
//ZHEJIANG HUATIAN I CO. LTD. JL139QMB
//3.50 x 10 51J
//3.50 x 10 51J
//100/60-12
//100/60-12
//Tegn nr. 12 er "E" og angiver den maksimale hastighed = 40 km/t.

//måske jinlun ?

   ,'Hyosung Sense C 45 km/t E12156 (e4*92/61*0033)'            => 'typegodkendelser/Hyosung%20-%20%28E12156%29%20udstedt%2030-08-2002.pdf'
//Nic. Christiansen Gruppen
//KM4CA1
//Elektronisk tænding (CDI)
//Sense (Mikum kaburator)
//Sense (Sunglim kaburator)
//Hyosung SD50 2 takt
//2.15 x 10
//2.15 x 10
//100/80 - 10
//100/80 - 10

   ,'Hyosung Prima C 45 km/t E12157 (e4*92/61*0034)'            => 'typegodkendelser/Hyosung%20-%20%28E12157%29%20udstedt%2030-08-2002.pdf'
//Nic. Christiansen Gruppen
//KM4C
//Elektronisk tænding
//Hyosung SF50 2 takt
//3.0 x 12
//3.0 x 12
//110/70 - 12
//120/70 - 12

   ,'Hyosung SB-50 CA1 45 km/t S8235'            => 'typegodkendelser/Hyosung%20SB-50%20%28S8235%29%20udstedt%2025-06-1997.pdf'
//Scan-Parts A/S
//KM4_____7
//MIKUNI 39C2
//Hyosung SB50 2 takt
//2.15 x 10
//2.15 x 10
//3.50-10
//3.50-10

   ,'Hyosung SF50 C 45 km/t A9998'            => 'typegodkendelser/Hyosung%20SF50%20%28A9998%29%20udstedt%2016-06-1999.pdf'
//Trading Group Denmark A/S
//KM4
//CDI-tændingsmodul, placeret under forreste skjold.
//Hyosung CA1 2 takt
//3.0 x 12
//3.0 x 12
//110/70 - 12
//120/70 - 12

//http://www.scootergalleri.dk/galleri/60523-hyosung_sf50

   ,'Kalkhoff Pro Connect S Dame 40 km/t E18300 (e1*2002/24*0444)'            => 'typegodkendelser/Kalkhoff%20Pro%20Connect%20S%20Dame%20%28E18300%29%20udstedt%2029-06-2010.pdf'
   ,'Kalkhoff Pro Connect S Dame 40 km/t E18301 (e1*2002/24*0444)'            => 'typegodkendelser/Kalkhoff%20Pro%20Connect%20S%20Dame%20%28E18301%29%20udstedt%2029-06-2010.pdf'
//e1*2002/24*0444
//9 Gear S (Small, 45 cm stel)
//9 Gear M (Medium, 50 cm stel)
//9 Gear L (Large, 55 cm stel)
   ,'Kalkhoff Pro Connect S Herre 40 km/t E18299 (e1*2002/24*0431)'            => 'typegodkendelser/Kalkhoff%20Pro%20Connect%20S%20Herre%20%28E18299%29%20udstedt%2029-06-2010.pdf'
   ,'Kalkhoff Pro Connect S Herre 40 km/t E18302 (e1*2002/24*0431)'            => 'typegodkendelser/Kalkhoff%20Pro%20Connect%20S%20Herre%20%28E18302%29%20udstedt%2029-06-2010.pdf'
//e1*2002/24*0431
//9 Gear S (Small, 45 cm stel)
//9 Gear M (Medium, 50 cm stel)
//9 Gear L (Large, 55 cm stel)
//9 Gear XL (eXtra Large, 60 cm stel)

//fælles for både dame og herre :
//0,3 kw max
//motor : Panasonic NUA009D (EBDCC2)
//iCycle ApS
//22 kg køreklar
//40 km/t max
//21 x 660
//21 x 660
//37 x 622
//37 x 622

   ,'Motorhispania Furia FU01 45 km/t S10373'            => 'typegodkendelser/Motorhispania%20Furia%20%28S10373%29%20udstedt%2007-03-2000.pdf'
//Svenska Motorimporten
//VTV
//Bøsn. m/ lysn. = 11,5 mm I udstødningsrør
//karburator : SHA 14 -12 L eller PHBN 12
//Minarelli AM6 2 takt 6 gear manuel
//1.6 x 21
//1.85 x 18
//80/90 - 21
//110/80 - 18

//http://www.scootergalleri.dk/galleri/22195-motorhispania_furia_6v_
//http://www.scootergalleri.dk/galleri/7703-motorhispania_furia_supermotard

   ,'Oxygen OX04 44 km/t E16546 (e11*2002/24*0522)'            => 'typegodkendelser/Oxygen%20-%20%28E16546%29%20udstedt%2012-09-2007.pdf'
//ZGZ
//C. Reinhardt A/S
//elektrisk
//motor mærkning : 4195
//3,0 kw max
//44 km/t max
//2.50 x 10
//3.50 x 12
//100/80 - 10
//120/70 - 12

//http://www.oxygenworld.it/ er ved at likvidere

   ,'Siamoto Birdie 50 BR10 45 km/t E9937 (e9*92/61*0011)'            => 'typegodkendelser/Siamoto%20Birdie%2050%20%28E9937%29%20udstedt%2015-06-1999.pdf'
//SPH Import A/S
//ZED
//SIAMOTO IE40FM 2 takt
//2.50 x 10
//2.50 x 10
//100/90 - 10
//100/90 - 10
//Godkendelsen har tidligere være udstedt til: Grafisk InnoVision, Eremitageparken 187, 2800 Lyngby, tlf: 45 93 40 88

//http://www.scootergalleri.dk/galleri/186049-siamoto_birdie
//http://www.scootergalleri.dk/galleri/247972-siamoto_birdie_50___solgt
//står NANFAN_ på variatorskjoldet

   ,'Wangye Superbyke WY50QT-16A Trend 45 km/t E15969 (e4*2002/24*1104)'            => 'typegodkendelser/Wangye%20Superbyke%20%28E15969%29%20udstedt%2023-11-2006.pdf'
//A1 Import
//CPi Boks ved motor
//1PE40QMB
//3,50 x 12
//3,50 x 12
//120/70 - 12
//120/70 - 12
//Tegn 4 i stelnummeret er W og angiver den maksimale hastighed = 45 km/t

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>