<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "baotian scootere med 50 cm³ og elektrisk motor";
$overskrift = "baotian";
$metadescription = "specifikationer, download og typegodkendelser";

$setup['sideikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'baotianbt49gy1' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'tror nok jeg har set den nævnt i mc revyen 2010', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'Baotian BT49GY-1 Street Fighter', '', '', '')
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

),'baotianbttdm5003' => array(

   'generelt'              => array(
       'model'             => ens('model', 'baotian BTTDM500-3', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BTTDM500-3', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '7995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', 'hurtig-indstilling: 34 km/t', 'langt-indstilling: 25 km/t', '')
      ,'farver'            => ens('farver', 'rød', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '48', '500', '', '')
      ,'volume'            => ens('volume', '', '', '')
      ,'køling'            => ens('køling', '', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '')
      ,'moment'            => ens('moment', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1750', '', '')
      ,'bredde'            => ens('bredde', '680', '', '')
      ,'højde'             => ens('højde', '1070', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1250', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '')
      ,'dækfor'            => ens('dæk2', '3.00', '10', '', '')
      ,'dækbag'            => ens('dæk2', '3.00', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '48', '22', '', '(4 stk 12 volt)')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '')
      ,'generator'         => ens('generator', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '')
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
      ,'oplader'           => ens('oplader', '220', '3', '')
      ,'ladetid'           => ens('ladetid', '8-12', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '40', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '')
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
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '92', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '150', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', '', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Sino-Hongkong Baotian Motorcycle Industrial Co., Ltd.', '', '')
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

),'baotiansport' => array(

   'generelt'              => array(
       'model'             => ens('model', 'baotian sport', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'baotian euro sport', '', '')
      ,'scootertype'       => ens('scootertype', 'BT49QT-7', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '')
      ,'farver'            => ens('farver', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '')
      ,'moment'            => ens('moment', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '')
      ,'højde'             => ens('højde', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '95', 'blyfri', '')
      ,'benzintank'        => ens('benzintank', '', '', '')
      ,'forbrug'           => ens('forbrug', '40', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '', '', 'aluminium')
      ,'dækfor'            => ens('dæk2', '', '12', '', '')
      ,'dækbag'            => ens('dæk2', '', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '')
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
      ,'tændingssystem'    => ens('tændingssystem', '', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'LX6TCAP7061 (lille knallert)', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '85', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', '', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Sino-Hongkong Baotian Motorcycle Industrial Co., Ltd.', '', '')
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

),'baotianbt49qt8' => array(

   'generelt'              => array(
       'model'             => ens('model', 'baotian BT49QT-8', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BT49QT-8', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '6995', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '')
      ,'farver'            => ens('farver', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.bikedanmark.dk/2008/5.htm', 'http://www.scoot.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2', 'hk', '')
      ,'moment'            => ens('moment', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '') 
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '')
      ,'højde'             => ens('højde', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '95', 'blyfri', '')
      ,'benzintank'        => ens('benzintank', '', '', '')
      ,'forbrug'           => ens('forbrug', '40', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '')
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
      ,'tændingssystem'    => ens('tændingssystem', '', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'LZPTCAP8461708', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', '', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Sino-Hongkong Baotian Motorcycle Industrial Co., Ltd.', '', '')
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

),'baotianclassic' => array(

   'generelt'              => array(
       'model'             => ens('model', 'baotian classic', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BT50QT-9', 'BT50QT-9H', '')
      ,'varianter'         => ens('varianter', 'Baotian Classic Sport (med 12" hjul)', '', '')
      ,'pris'              => ens('pris', '5995', '7499', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '')
      ,'farver'            => ens('farver', 'rød gul-sort rød-sort', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.onlinescooter.dk', 'http://www.scoot.dk', 'http://www.scooterhjoernet.dk', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'BT139QMB', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,2', 'kw', '7500-8000')
      ,'moment'            => ens('moment', '2,7', 'nm', '6500')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1673', '', '')
      ,'bredde'            => ens('bredde', '663', '', '')
      ,'højde'             => ens('højde', '1100', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '95', 'blyfri', '')
      ,'benzintank'        => ens('benzintank', '6,5', '', '')
      ,'forbrug'           => ens('forbrug', '40-45', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '')
      ,'dækfor'            => ens('dæk2', '3.5', '10-12', '', '')
      ,'dækbag'            => ens('dæk2', '3.5', '10-12', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '')
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
       'starterbatteri'    => ens('starterbatteri', '12', '5', '')
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
       'motor'             => ens('olie', '15W-40', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'LZPTCBP9043 (45 km/t BT50QT-9H E14145)', 'LZPTCBP9061004923 (BAOTIAN, BT, 50 QT-9H Stor knallert E14737-01)', '', '')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '')
      ,'euroemission'      => ens('euroemission', '4', '', '')
      ,'vægttør'           => ens('vægttør', '82-85', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '235', '', '')
      ,'bæreevne'          => ens('bæreevne', '150', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', '', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Sino-Hongkong Baotian Motorcycle Industrial Co., Ltd.', '', '')
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

),'baotiansupermoto' => array(

   'generelt'              => array(
       'model'             => ens('model', 'baotian supermoto', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'baotian racing', 'baotian classic racing', 'baotian super sport')
      ,'scootertype'       => ens('scootertype', 'BT49QT-9D', 'måske BT49QT-9S3', 'BT49QT-9')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '4995', '7995', '', '')
      ,'hastighed'         => ens('hastighed', '25 og 30 og 45', '', '')
      ,'farver'            => ens('farver', 'grøn rød sort', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.scooterhjoernet.dk', 'http://www.yndgaardauto.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '10,5', '', '')
      ,'tomgang'           => ens('tomgang', '1900', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,2', 'kw', '7500')
      ,'moment'            => ens('moment', '2,9', 'nm', '7000')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1660', '', '')
      ,'bredde'            => ens('bredde', '663', '', '')
      ,'højde'             => ens('højde', '1100', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1210', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.15', '12', '')
      ,'fælgbag'           => ens('fælg', '2.15', '12', '')
      ,'dækfor'            => ens('dæk1', '110', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '110', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'støddæmper', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '')
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
      ,'tændingssystem'    => ens('tændingssystem', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'L82TCAP9681', 'L82TCAP9781 (BT49QT-9 SUPERMOTO lille knallert)', 'L82TCAP9491 (30 km/t)', 'L82TCAP9181017') . 'L82TCAP9X81017 (lille BT49QT-9 SUPERMOTO) L82TCAP98A1001600 (lille BAOTIAN BT49QT 9D1) LX6TCAP9161518241 (BT49QT-9D30 E15727-01)'
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '85', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', '', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Sino-Hongkong Baotian Motorcycle Industrial Co., Ltd.', '', '')
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

),'baotianbt49qt10' => array(

   'generelt'              => array(
       'model'             => ens('model', 'baotian BT49QT-10', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BT49QT-10', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '')
      ,'farver'            => ens('farver', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '1900', '100', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,2', 'kw', '7500')
      ,'moment'            => ens('moment', '2,7', 'nm', '7000')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '')
      ,'højde'             => ens('højde', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1330', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '90', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '')
      ,'dækfor'            => ens('dæk2', '3.5', '10', '', '')
      ,'dækbag'            => ens('dæk2', '3.5', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremserfor', '', '', '')
      ,'bremserbag'        => ens('bremserbag', '', '', '')
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
       'motor'             => ens('olie', '15W-40', 'API : SF', '')
      ,'gear'              => ens('olie', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', '', '')
      ,'kobling'           => ens('kobling', 'automatisk', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '')
      ,'vægttør'           => ens('vægttør', '85', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '235', '', '(det kan vist ikke være rigtigt ?)')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', '', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Sino-Hongkong Baotian Motorcycle Industrial Co., Ltd.', '', '')
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

),'baotianretro' => array(

   'generelt'              => array(
       'model'             => ens('model', 'baotian retro', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'baotian italian', '', '')
      ,'scootertype'       => ens('scootertype', 'BT49QT-11', 'BT50QT-11', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '3500', '7500', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '')
      ,'farver'            => ens('farver', 'pink sort rød', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.bikedanmark.dk/2008/5.htm', 'http://www.onlinescooter.dk', 'http://www.scoot.dk', 'http://www.scooterhjoernet.dk')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '139QMA (BT49QT-11)', '139QMB (BT50QT-11)', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,2', 'kw', '8000')
      ,'moment'            => ens('moment', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1650', '', '')
      ,'bredde'            => ens('bredde', '650', '', '')
      ,'højde'             => ens('højde', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '95', 'blyfri', '')
      ,'benzintank'        => ens('benzintank', '5,5', '', '')
      ,'forbrug'           => ens('forbrug', '50', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.15', '10', '')
      ,'fælgbag'           => ens('fælg', '2.15', '10', '')
      ,'dækfor'            => ens('dæk2', '3.50', '10', '', '51J')
      ,'dækbag'            => ens('dæk2', '3.50', '10', '', '51J')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '')
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
       'starterbatteri'    => ens('starterbatteri', '', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'LX6TCAPB661502', 'L82TCAPB581000', 'L82TCAPB081000 (lille)', '')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '')
      ,'euroemission'      => ens('euroemission', '4', '', '')
      ,'vægttør'           => ens('vægttør', '82', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '160', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', '', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Sino-Hongkong Baotian Motorcycle Industrial Co., Ltd.', '', '')
      ,'andet'             => ens('andet', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '7,0 mm bøsning i variator', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', 'ja', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'baotianrebel' => array(

   'generelt'              => array(
       'model'             => ens('model', 'baotian rebel', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BT49QT-12', 'BT49QT-12D30', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '6995', '7995', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '')
      ,'farver'            => ens('farver', 'rød blå', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.bikedanmark.dk/2008/5.htm', 'http://www.scoot.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2', 'hk', '7000')
      ,'moment'            => ens('moment', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '')
      ,'højde'             => ens('højde', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '95', 'blyfri', '')
      ,'benzintank'        => ens('benzintank', '', '', '')
      ,'forbrug'           => ens('forbrug', '40', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '')
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
      ,'tændingssystem'    => ens('tændingssystem', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'LX6TCAPC861', 'L82TCAPC384 L82TCAPC284002 (30 km/t)', 'L82TCAPC284 (30 km/t)', 'L82TCAPC484 (lille knallert)')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '92', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', 'fjernbetjening', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', '', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Sino-Hongkong Baotian Motorcycle Industrial Co., Ltd.', '', '')
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

),'baotianrocky' => array(

   'generelt'              => array(
       'model'             => ens('model', 'baotian rocky', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BT49QT-12E1, BT49QT-12 12P1', 'BT49QT-12d', 'BT49QT-22')
      ,'varianter'         => ens('varianter', 'Baotian GTX Sport Racing', '', '')
      ,'pris'              => ens('pris', '8995', '9995', '', '')
      ,'hastighed'         => ens('hastighed', '25 og 30 og 45', '', '')
      ,'farver'            => ens('farver', 'rød-sort blå-sort', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.scooterhjoernet.dk', 'http://www.gaardeautoservice.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '139QMA eller 139QMA-A', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '39', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,4', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,61', 'kw', '8000')
      ,'moment'            => ens('moment', '3,65', 'nm', '5500')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK C7HSA', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1850', '', '')
      ,'bredde'            => ens('bredde', '680', '', '')
      ,'højde'             => ens('højde', '1150', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1300', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '92-95', 'blyfri', '')
      ,'benzintank'        => ens('benzintank', '4,0', '(Der er en bruger som har 2 af disse modeller og har skrevet at den kan rumme 4,0 liter)', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50', '12', '') . ' eller ' . ens('fælg', '2.15', '12', '(ifølge typegodkendelse)')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '') . ' eller ' . ens('fælg', '2.15', '12', '(ifølge typegodkendelse)')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '56J')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '56J')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'telefskop forgaffel', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'støddæmper', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '155', '', 'med ABS')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '5-7', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '')
      ,'generator'         => ens('generator', '', '', '')
      ,'sikring'           => ens('sikring', '10', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35', '', '')
      ,'lysbagbremse'      => ens('lys', '12', '5/21', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '', '')
      ,'lyskontrolblink'   => ens('lys', '12', '5', '', '')
      ,'lyskontrollangt'   => ens('lys', '12', '5', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '')
      ,'gear'              => ens('olie', '', '', '0,12')
      ,'forgaffel'         => ens('olie', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', '', '')
      ,'kobling'           => ens('kobling', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '')
      ,'gearratio'         => ens('gearratio', 'minimum : 14,96', 'maksimum : 28,86', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'L82TCAPC791', 'L82TCAPC186', 'LX6TCAP9371027', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '88', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '92', '', '')
      ,'vægttotal'         => ens('vægttotal', '242', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '80', '4000', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', 'Evalds Lædertøjs Import<br>SPH Import ApS', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Sino-Hongkong Baotian Motorcycle Industrial Co., Ltd.', '', '')
      ,'andet'             => ens('andet', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', 'muligvis ring mellem forreste remskiver')
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

),'baotianf3' => array(

   'generelt'              => array(
       'model'             => ens('model', 'baotian F3', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BT49QT-12P', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '6795', '8495', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort hvid', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
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
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,9', 'hk', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1650-1660', '', '', '')
      ,'bredde'            => ens('bredde', '650-66', '', '', '')
      ,'højde'             => ens('højde', '1120', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '92', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '12', 'aluminium', '')
      ,'fælgbag'           => ens('fælg', '', '12', 'aluminium', '')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
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
      ,'lysfor'            => ens('lys', '', '', '2', 'halogen')
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
      ,'kobling'           => ens('kobling', 'automatisk', '', '', '')
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
      ,'bæreevne'          => ens('bæreevne', '155-160', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Sino-Hongkong Baotian Motorcycle Industrial Co., Ltd.', '', '')
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

),'baotiancity' => array(

   'generelt'              => array(
       'model'             => ens('model', 'baotian city', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BT49QT-20', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '8995', '11000', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '')
      ,'farver'            => ens('farver', 'blå-hvid sort-orange sort-gul', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.onlinescooter.dk', 'http://www.scooterhjoernet.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '139QMA', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '10,5', '', '')
      ,'tomgang'           => ens('tomgang', '1900', '100', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,4', 'kw', '8500') . ens('maxeffektogheste', '2,61', 'kw', '', '(ifølge 30 km/t typegodkendelse)')
      ,'moment'            => ens('moment', '3,29', 'nm', '6500', '')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1880', '', '')
      ,'bredde'            => ens('bredde', '700-740', '', '')
      ,'højde'             => ens('højde', '1330', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1330', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '90', 'blyfri', '')
      ,'benzintank'        => ens('benzintank', '6,0', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50', '13', 'aluminium')
      ,'fælgbag'           => ens('fælg', '3.50', '13', 'aluminium')
      ,'dækfor'            => ens('dæk1', '130', '60', '13', '')
      ,'dækbag'            => ens('dæk1', '130', '60', '13', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '1 støddæmper', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '155', '')
      ,'bremserbag'        => ens('bremser', 'skive', '155', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '5', '')
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
       'motor'             => ens('olie', '15W-40', 'API : SF', '')
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
      ,'stelnummer'        => ens('stelnummer', 'L82TCAPL991', 'L82TCAPL691', 'L82TCAPL191000', 'L82TCAPL5A1001 L82TCAPL891000051 (lille)')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '')
      ,'vægttør'           => ens('vægttør', '92', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '95', '', '')
      ,'vægttotal'         => ens('vægttotal', '242-251', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '81', '4000', '', '(ifølge 30 km/t typegodkendelse)')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', 'AMCO Denmark ApS', 'P. S. Handel & Service ApS', '')
      ,'producent'         => ens('producent', 'Jiangmen Sino-Hongkong Baotian Motorcycle Industrial Co., Ltd.', '', '')
      ,'andet'             => ens('andet', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', 'bøsning i forreste variatordel', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', 'ja', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'baotianbt49py2b' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'Baotian BT49PY-2B', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BT49PY-2B', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', 'grøn', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Baotian 139FMA', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,0-49,7', '', '', '')
      ,'køling'            => ens('køling', 'vind', '', '', '')
      ,'boring'            => ens('boring', '39,0', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,5', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '8,8', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,4', 'kw', '7500', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1400', '', '', '')
      ,'bredde'            => ens('bredde', '710', '', '', '')
      ,'højde'             => ens('højde', '880', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '600', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '920', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.50', '8', '', '')
      ,'fælgbag'           => ens('fælg', '2.50', '8', '', '')
      ,'dækfor'            => ens('dæk2', '3.50', '8', '', '')
      ,'dækbag'            => ens('dæk2', '3.50', '8', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'svingarm med fjedre', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '150', 'hydraulisk', 'hånd')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', 'mekanisk', 'fod')
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
      ,'antalgear'         => ens('antalgear', '4', 'manuel', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '14', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '37', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'rørstel', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LZPPCAL2X61', '', '', '')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '66', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '68', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '148', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '83', '3750', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'Bike Danmark Aps', '', '', '')
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

),'baotianeagle' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'baotian eagle', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'avanti eagle', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BT49QT-9F3', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '7995', '', '', '')
      ,'hastighed'         => ens('hastighed', '25', '', '', '')
      ,'farver'            => ens('farver', 'blå-hvid-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
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

),'baotiandiablo' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'baotian diablo', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BT49QT-20C4', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '9995', '', '', '')
      ,'hastighed'         => ens('hastighed', '25', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
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

),'baotianvictoria' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'Baotian Victoria', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BT49QT-21B1', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '11500', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.scooterhjoernet.dk', 'http://www.onlinescooter.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '139QMA-A', '', '', '')
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
      ,'importør'          => ens('importør', 'P. S. Handel & Service ApS ('.ahref('http://www.onlinescooter.dk/').')', '', '', '')
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
    'motor brugermanual'                  => 'baotian_motor_brugermanual.pdf'
   ,'motor servicemanual'                 => 'baotian_motor_servicemanual.pdf'
   ,'BT50QT el diagram'                   => 'bt50qt_eldiagram.jpg'
   ,'BT49QT-7 og bt49qt-8 servicemanual'  => 'bt49qt-7_bt49qt-8_servicemanual.pdf'
   ,'BT49QT-7 el diagram'                 => 'bt49qt-7_eldiagram.jpg'
   ,'BT50QT-9 brugermanual'               => 'bt50qt-9_brugermanual.pdf'
   ,'BT50QT-9 el diagram'                 => 'bt50qt-9_eldiagram.jpg'
   ,'BT50QT-9 BT49QT-3 servicemanual'     => 'bt50qt-9_bt49qt-3_servicemanual.pdf'
   ,'BT50QT-9 reservedele'                => 'baotian_bt50qt9_reservedele.pdf'
   ,'BT50QT-9 reservedele 2'              => 'baotian_bt50qt9_reservedele_2.pdf'
   ,'BT50QT-11 brugermanual'              => 'bt50qt-11_brugermanual.pdf'

),'typegodkendelser' => array(
    'BT49PY-2B 45 km/t E14806 (e4*2002/24*0387)'           => 'typegodkendelser/Baotian%20BT49PY-2B%20%28E14806%29%20udstedt%2010-01-2006.pdf'
   ,'QT50-3 25 km/t E15489 (e4*2002/24*0427)'              => 'typegodkendelser/Baotian%20-%20%28E15489%29%20udstedt%2002-06-2006.pdf'
   ,'BT49QT-7 30 km/t E16350 (e4*2002/24*1054)'            => 'typegodkendelser/Baotian%20-%20%28E16350%29%20udstedt%2023-04-2007.pdf'
   ,'BT49QT-7 Euro Sport 45 km/t E15820 (e4*2002/24*0386)' => 'typegodkendelser/Baotian%20Euro%20Sport%20%28E15820%29%20udstedt%2005-10-2006.pdf'
   ,'BT49QT-8 25 km/t E15690 (e4*2002/24*0489)'            => 'typegodkendelser/Baotian%20-%20%28E15690%29%20udstedt%2003-08-2006.pdf'
   ,'BT50QT-9 city 45 km/t E15705 (e4*2002/24*0328)'       => 'typegodkendelser/Baotian%20-%20%28E15705%29%20udstedt%2008-08-2006.pdf'
   ,'BT50QT-9H 45 km/t E14145 (e4*2002/24*0328)'           => 'typegodkendelser/Baotian%20-%20%28E14145%29%20udstedt%2007-04-2005.pdf'
   ,'BT49QT-9 45 km/t E16874 (e4*2002/24*1398)'            => 'typegodkendelser/Baotian%20-%20%28E16874%29%20udstedt%2022-01-2008.pdf'
   ,'BT49QT-9 30 km/t E16875 (e4*2002/24*1398)'            => 'typegodkendelser/Baotian%20-%20%28E16875%29%20udstedt%2022-01-2008.pdf'
   ,'BT49QT-9 45 km/t E16876 (e4*2002/24*1398)'            => 'typegodkendelser/Baotian%20-%20%28E16876%29%20udstedt%2022-01-2008.pdf'
   ,'BT49QT-9 45 km/t E17318 (e4*2002/24*1398)'            => 'typegodkendelser/Baotian%20-%20%28E17318%29%20udstedt%2014-11-2008.pdf'
   ,'BT49QT-9 30 og 25 km/t E18215 (e4*2002/24*1398)'      => 'typegodkendelser/Baotian%20Baotian%20BT49QT-9%20%28E18215%29%20udstedt%2025-05-2010.pdf'
   ,'BT49QT-9 30 km/t E16464 (e11*2002/24*1009)'           => 'typegodkendelser/BAOTIAN%20BT49QT-9%20%28E16464%29%20udstedt%2012-06-2007.pdf'
   ,'BT49QT-9 30 og 25 km/t E16478 (e4*2002/24*1009)'      => 'typegodkendelser/Baotian%20BT49QT-9%20%28E16478%29%20udstedt%2028-06-2007.pdf'
   ,'BT49QT-9D30 30 km/t E15727 (e4*2002/24*1009)'         => 'typegodkendelser/Batioan%20-%20%28E15727%29%20udstedt%2024-08-2006.pdf'
   ,'BT49QT-9D30 30 km/t E17612 (e4*2002/24*1398)'         => 'typegodkendelser/Baotian%20BT49QT%20%28E17612%29%20udstedt%2001-04-2009.pdf'
   ,'BT49QT-9 30 og 25 km/t E16519 (e4*2002/24*1398)'      => 'typegodkendelser/BAOTIAN%20BT49QT-9%20%28E16519%29%20udstedt%2028-08-2007.pdf'
   ,'BT49QT-9 Supermoto 30 km/t E17038 (e4*2002/24*1398)'  => 'typegodkendelser/Baotian%20BT49QT-9%20%28E17038%29%20udstedt%2027-03-2008.pdf'
   ,'BT49QT-9 Supermoto 45 km/t E17138 (e4*2002/24*1398)'  => 'typegodkendelser/Baotian%20BT49QT-9d45%20%28E17138%29%20udstedt%2002-06-2008.pdf'
   ,'BT50QT-9 45 km/t E13944 (e4*92/61*0218)'              => 'typegodkendelser/Baotian%20BT50QT-9%20%28E13944%29%20udstedt%2020-01-2005.pdf'
   ,'BT50QT-9 45 km/t E14448 (e4*2002/24*0328)'            => 'typegodkendelser/Baotian%20BT50QT-9%20%28E14448%29%20udstedt%2016-08-2005.pdf'
   ,'BT50QT-9 45 km/t E14761 (e4*2002/24*0328)'            => 'typegodkendelser/Baotian%20BT50QT-9%20%28E14761%29%20udstedt%2003-01-2006.pdf'
   ,'BT49QT-9 25 km/t E19286 (e4*2002/24*1398)'            => 'typegodkendelser/Baotian%20-%20%28E19286%29%20udstedt%2012-08-2011.pdf'
   ,'QT50-9D30 (L82TCAP9X91016) 30 km/t E16625 (e4*2002/24*1398)'           => 'typegodkendelser/Batioan%20-%20%28E16625%29%20udstedt%2018-10-2007.pdf'
   ,'QT50-9 45 km/t E15490 (e4*2002/24*0427)'              => 'typegodkendelser/Baotian%20-%20%28E15490%29%20udstedt%2006-06-2006.pdf'
   ,'BTQT-9 30 km/t E16865 (e4*2002/24*1398)'              => 'typegodkendelser/Baotian%20BTQT-9%20%28E16865%29%20udstedt%2018-01-2008.pdf'
   ,'BTQT-9 45 km/t E16866 (e4*2002/24*1398)'              => 'typegodkendelser/Baotian%20BTQT-9%20%28E16866%29%20udstedt%2018-01-2008.pdf'
   ,'BT49QT-10 45 km/t E15283 (e4*2002/24*0490)'           => 'typegodkendelser/Baotian%20-%20%28E15283%29%20udstedt%2019-04-2006.pdf'
   ,'BT49QT-11 Retro 30 km/t E19982 (e4*2002/24*1424)'     => 'typegodkendelser/Baotian%20Retro%2030%20%28E19982%29%20udstedt%2030-08-2012.pdf'
   ,'BT49QT-11da Retro 30 km/t E19846 (e4*2002/24*1010)'   => 'typegodkendelser/Baotian%20Retro%20%28E19846%29%20udstedt%2013-07-2012.pdf'
   ,'BT49QT-11a30 30 km/t E19868 (e4*2002/24*1424)'        => 'typegodkendelser/Baotian%20-%20%28E19868%29%20udstedt%2023-07-2012.pdf'
   ,'BT50QT-11 45 km/t E14447 (e4*2002/24*0292)'           => 'typegodkendelser/Baotian%20BT50QT-11%20%28E14447%29%20udstedt%2016-08-2005.pdf'
   ,'BT50QT-11 45 km/t E14762 (e4*2002/24*292)'            => 'typegodkendelser/Baotian%20BT50QT-11%20%28E14762%29%20udstedt%2003-01-2006.pdf'
   ,'BT49QT-11 Retro 45 km/t E16347 (e4*2002/24*1010)'     => 'typegodkendelser/Baotian%20Retro%20%28E16347%29%20udstedt%2023-04-2007.pdf'
   ,'BT49QT-11 Retro 45 km/t E17549 (e4*2002/24*1424)'     => 'typegodkendelser/Baotian%20Retro%20%28E17549%29%20udstedt%2005-02-2009.pdf'
   ,'BT49QT-11 Retro 45 km/t E17550 (e4*2002/24*1424)'     => 'typegodkendelser/Baotian%20Retro%20%28E17550%29%20udstedt%2005-02-2009.pdf'
   ,'BT49QT-11 Retro 45 km/t E16784 (e4*2002/24*1010)'     => 'typegodkendelser/Baotian%20Retro%2045%20%28E16784%29%20udstedt%2011-12-2007.pdf'
   ,'BT49QT-11a45 (Mpecorp) 45 km/t E20189 (e4*2002/24*1424)'    => 'typegodkendelser/Baotian%20-%20%28E20189%29%20udstedt%2021-12-2012.pdf'
   ,'QT50-11 45 km/t E15491 (e4*2002/24*0292)'             => 'typegodkendelser/Baotian%20-%20%28E15491%29%20udstedt%2006-06-2006.pdf'
   ,'BT49QT-12 30 km/t E16143 (e4*2002/24*1058)'           => 'typegodkendelser/Baotian%20-%20%28E16143%29%20udstedt%2024-01-2007.pdf'
   ,'BT49QT-12 30 km/t E16348 (e4*2002/24*1058)'           => 'typegodkendelser/Baotian%20BTM%20%28E16348%29%20udstedt%2023-04-2007.pdf'
   ,'BT49QT-12 30 km/t E16871 (e4*2002/24*1397)'           => 'typegodkendelser/Baotian%20-%20%28E16871%29%20udstedt%2022-01-2008.pdf'
   ,'BT49QT-12 45 km/t E16872 (e4*2002/24*1397)'           => 'typegodkendelser/Baotian%20-%20%28E16872%29%20udstedt%2022-01-2008.pdf'
   ,'BT49QT-12 30 og 25 km/t E16748 (e4*2002/24*1397)'     => 'typegodkendelser/BAOTIAN%20BT49QT-12%20%28E16748%29%20udstedt%2029-11-2007.pdf'
   ,'BT49QT-12 45 eller 30 km/t E16349 (e4*2002/24*1058)'  => 'typegodkendelser/Baotian%20BTM%20%28E16349%29%20udstedt%2023-04-2007.pdf'
   ,'BT49QT-12 Hero 30 km/t E17616 (e4*2002/24*1397)'      => 'typegodkendelser/Baotian%20BT49QT%20%28E17616%29%20udstedt%2001-04-2009.pdf'
   ,'BT49QT-12 Hero 45 km/t E17617 (e4*2002/24*1397)'      => 'typegodkendelser/Baotian%20BT49QT%20%28E17617%29%20udstedt%2001-04-2009.pdf'
   ,'BT49QT-12 Rocky 30 km/t E16465 (e11*2002/24*1058)'    => 'typegodkendelser/BAOTIAN%20BT49QT-12%20%28E16465%29%20udstedt%2007-06-2007.pdf'
   ,'BT49QT-12 Rocky 30 km/t E16488 (e4*2002/24*1397)'     => 'typegodkendelser/BAOTIAN%20BT49QT-12%20%28E16488%29%20udstedt%2026-09-2007.pdf'
   ,'BT49QT-12 Rocky 30 km/t E17039 (e4*2002/24*1397)'     => 'typegodkendelser/Baotian%20BT49QT-12-d30%20%28E17039%29%20udstedt%2027-03-2008.pdf'
   ,'BT49QT-12 Rocky 30 km/t E17246 (e4*2002/24*1397)'     => 'typegodkendelser/Baotian%20BT49QT-12-d30%20%28E17246%29%20udstedt%2014-10-2008.pdf'
   ,'BT49QT-12 Rocky 30 km/t E17246 (e4*2002/24*1397) 2'   => 'typegodkendelser/Baotian%20BT49QT-12-d30%20%28E17246%29%20udstedt%2030-10-2008.pdf'
   ,'BT49QT-12 Rocky 45 km/t E17139 (e4*2002/24*1397)'     => 'typegodkendelser/Baotian%20BT49QT-12-d45%20%28E17139%29%20udstedt%2002-06-2008.pdf'
   ,'BT49QT-12 Rebel 30 km/t E16782 (e4*2002/24*1058)'     => 'typegodkendelser/Baotian%20Rebel%2030%20%28E16782%29%20udstedt%2011-12-2007.pdf'
   ,'BT49QT-12 Rebel 30 km/t E16867 (e4*2002/24*1397)'     => 'typegodkendelser/Baotian%20BT49QT-12d30%20%28E16867%29%20udstedt%2018-01-2008.pdf'
   ,'BT49QT-12 Rebel 30 km/t E17553 (e4*2002/24*1397)'     => 'typegodkendelser/Baotian%20Rebel%20%28E17553%29%20udstedt%2005-02-2009.pdf'
   ,'BT49QT-12 Rebel 30 km/t E17554 (e4*2002/24*1397)'     => 'typegodkendelser/Baotian%20Rebel%20%28E17554%29%20udstedt%2011-02-2009.pdf'
   ,'BT49QT-12 Rebel 45 km/t E16783 (e4*2002/24*1058)'     => 'typegodkendelser/Baotian%20Rebel%2045%20%28E16783%29%20udstedt%2011-12-2007.pdf'
   ,'BR49QT-12 Rebel 45 km/t E16868 (e4*2002/24*1397)'     => 'typegodkendelser/Baotian%20BR49QT12d45%20%28E16868%29%20udstedt%2018-01-2008.pdf'
   ,'BT49QT-12 Rebel 45 km/t E17551 (e4*2002/24*1397)'     => 'typegodkendelser/Baotian%20Rebel%20%28E17551%29%20udstedt%2005-02-2009.pdf'
   ,'BT49QT-12 Rebel 45 km/t E17552 (e4*2002/24*1397)'     => 'typegodkendelser/Baotian%20Rebel%20%28E17552%29%20udstedt%2005-02-2009.pdf'

   // CDI-boks og bøsning Under sæde h. s. på stel
   // P. S. Handel & Service ApS
   ,'BT49QT-12 (BT1E40QMA ?) 30 km/t E20558 (e4*2002/24*1397)'    => 'typegodkendelser/Baotian%20BT49QT-12%20%28E20558%29%20udstedt%2001-07-2013.pdf'
   ,'BT49QT-12 (BT1E40QMA ?) 45 km/t E20559 (e4*2002/24*1397)'    => 'typegodkendelser/Baotian%20BT49QT-12%20%28E20559%29%20udstedt%2001-07-2013.pdf'

   ,'BT49QT-20 City 30 km/t E17569 (e4*2002/24*1824)'      => 'typegodkendelser/Baotian%20BT49QT-20%20%28E17569%29%20udstedt%2023-02-2009.pdf'
   ,'BT49QT-20 City 30 km/t E17569 (e4*2002/24*1824) 2'    => 'typegodkendelser/Baotian%20BT49QT-20%20%28E17569%29%20udstedt%2023-02-2009_2.pdf'
   ,'BT49QT-20 City 30 km/t E19740 (e4*2002/24*1824)'      => 'typegodkendelser/Baotian%20BT49QT-20%20%28E19740%29%20udstedt%2018-04-2012.pdf'
   ,'BT49QT-20 City 45 km/t E17568 (e4*2002/24*1824)'      => 'typegodkendelser/Baotian%20BT49QT-20%20%28E17568%29%20udstedt%2023-02-2009.pdf'
   ,'BT49QT-20 City 45 km/t E17568 (e4*2002/24*1824) 2'    => 'typegodkendelser/Baotian%20BT49QT-20%20%28E17568%29%20udstedt%2023-02-2009_2.pdf'
   ,'BT49QT-21 Victoria 30 km/t L82 E20456 (e4*2002/24*2185)'       => 'typegodkendelser/Baotian%20BT49QT-21%20%28E20456%29%20udstedt%2008-05-2013.pdf'
   ,'BT49QT-21 Victoria 45 km/t L82 E20457 (e4*2002/24*2185)'       => 'typegodkendelser/Baotian%20BT49QT-21%20%28E20457%29%20udstedt%2008-05-2013.pdf'
   ,'BTTDM500-3 30 km/t E16351 (e4*2002/24*1112)'          => 'typegodkendelser/Baotian%20EL%20scooter%20%28E16351%29%20udstedt%2023-04-2007.pdf'


/*
Racing 10" fås i sort og er vores laveste scooter.. pris 5050 + lev.

Sport med 12" hjul. og fås i 3 farver Rød. Gul og Blå pris 5799 + lev

Racing 12" fås i Sort og sølv. med 12" hjul pris 5799 + lev

Rocky fås i 3 farver Rød/Sort, is-blå og Sort pris 6799 + lev

City med 13" hjul får i Rød/hvid og Hvid/Blå pris 7799 + lev
obs City er med skivebremse for og bag,
*/

   // fælles :
   // P. S. Handel & Service ApS
   // http://www.onlinescooter.dk/
   // L82

   // BT49QT-9d25 9s1 = 2.75 x 10 3.50 - 10 (?)
   // BT49QT-9d25 9o3 = 2.75 x 12 110/70 - 12
   // BT49QT-9d25 9s3 = 2.75 x 12 110/70 - 12
   // BT49QT-9d25 3f3 = 2.75 x 12 110/70 - 12
   ,'BT49QT-9d25 30 km/t E19802 (e4*2002/24*1398)'  => 'typegodkendelser/Baotian%20BT49QT-9d25%20%28E19802%29%20udstedt%2012-06-2012.pdf'
   // BT49QT-9d45 9s1 = 2.75 x 10 3.50 - 13 (?)
   // BT49QT-9d45 9o3 = 2.75 x 12 110/70 - 12
   // BT49QT-9d45 9s3 = 2.75 x 12 110/70 - 12
   // BT49QT-9d45 3f3 = 2.75 x 12 110/70 - 12
   ,'BT49QT-9d45 45 km/t E19805 (e4*2002/24*1398)'  => 'typegodkendelser/Baotian%20BT49QT-9d45%20%28E19805%29%20udstedt%2012-06-2012.pdf'

   // 3.50 x 12 120/70 - 12
   ,'BT49QT-12 30 km/t E19803 (e4*2002/24*1397)'    => 'typegodkendelser/Baotian%20BT49QT-12%20%28E19803%29%20udstedt%2012-06-2012.pdf'
   // 3.50 x 12 120/70 - 12
   ,'BT49QT-12 45 km/t E19806 (e4*2002/24*1397)'    => 'typegodkendelser/Baotian%20BT49QT-12%20%28E19806%29%20udstedt%2012-06-2012.pdf'

   // 3.50 x 13 130/60 - 13
   ,'BT49QT-20A 30 km/t E19804 (e4*2002/24*1824)'    => 'typegodkendelser/Baotian%20BT49QT-20%20%28E19804%29%20udstedt%2012-06-2012.pdf'
   // 3.50 x 12 130/60 - 13
   ,'BT49QT-20A 45 km/t E19807 (e4*2002/24*1824)'    => 'typegodkendelser/Baotian%20BT49QT-20%20%28E19807%29%20udstedt%2012-06-2012.pdf'



   ,'BT49QT-9 BT49QT-9S BT49QT-9D30 BT49QT-9R3 BT49QT-903 9F3 30 km/t E16717 (e4*2002/24*1398)'            => 'typegodkendelser/BAOTIAN%20-%20%28E16717%29%20udstedt%2019-11-2007.pdf'
   ,'BT49QT-9d30 30 km/t E16873 (e4*2002/24*1398)'            => 'typegodkendelser/BAOTIAN%20%20%28E16873%29%20udstedt%2022-01-2008.pdf'
   ,'BT49QT 11A 25 km/t E19116 (e4*2002/24*1424)'            => 'typegodkendelser/Baotian%20BT49QT%20%28E19116%29%20udstedt%2023-05-2011.pdf'
   ,'BT49QT 20C Diablo 25 km/t E19117 (e4*2002/24*1824)'            => 'typegodkendelser/Baotian%20BT49QT%20%28E19117%29%20udstedt%2023-05-2011.pdf'
   ,'BT49QT 20C 25 km/t E19118 (e4*2002/24*1824)'            => 'typegodkendelser/Baotian%20BT49QT%20%28E19118%29%20udstedt%2023-05-2011.pdf'
   ,'BT49QT 11A 25 km/t E19119 (e4*2002/24*1424)'            => 'typegodkendelser/Baotian%20BT49QT%20%28E19119%29%20udstedt%2023-05-2011.pdf'
   ,'BT49QT-11da Retro 30 km/t E18182 (e4*2002/24*1010)'            => 'typegodkendelser/Baotian%20Retro%20%28E18182%29%20udstedt%2023-04-2010.pdf'

   ,'Batioan QT50-12D30 30 km/t E16626 (e4*2002/24*1397)'            => 'typegodkendelser/Batioan%20-%20%28E16626%29%20udstedt%2018-10-2007.pdf'

   )

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
