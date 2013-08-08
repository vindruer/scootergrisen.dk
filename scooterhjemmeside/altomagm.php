<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "AGM 50 cm³ og hybrid scootere";
$overskrift = "AGM";
$metadescription = "billeder, specifikationer, manualer, el diagrammer, reservedele og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'agmbella' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'AGM bella', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'AGM retro', 'ZNEN ZN 2B', '')
      ,'scootertype'       => ens('scootertype', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '9995', '10995', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '')
      ,'farver'            => ens('farver', 'hvid sort lyserød lyseblå mørkegrå rød orange', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://billigscooter.dk', 'http://www.retro-scooter.dk', '', '')

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
      ,'tomgang'           => ens('tomgang', '', '', '')
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
      ,'forbrug'           => ens('forbrug', '30-40', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', 'hydraulisk')
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
      ,'stelnummer'        => ens('stelnummer', 'L5YACBPAX81 (45 km/t ZNEN ZN 2B)', 'L5YACBPAX81 (lille knallert bella af en slags ZNEN BELLA)', 'L5YACDPA781 (ZHEN Bella af en slags)', '')
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
      ,'producent'         => ens('producent', 'Fosti Motorcycle Co., Ltd.', '', '')
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

),'agmbellapimp' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'AGM bella pimp', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'AGM retro pimp', 'AGM bella pimped', 'ZNEN ZN50QT-E')
      ,'scootertype'       => ens('scootertype', ' ZN50QT-E', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '10995', '11795', '')
      ,'hastighed'         => ens('hastighed', '25 og 30 og 45', '', '')
      ,'farver'            => ens('farver', 'lyseblå-hvid lysebrun-hvid', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://billigscooter.dk', 'http://www.retro-scooter.dk', '', '')

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
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,9', 'hk', '')
      ,'moment'            => ens('moment', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1891', '', '')
      ,'bredde'            => ens('bredde', '872', '', '')
      ,'højde'             => ens('højde', '1090', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1255', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '92', 'blyfri', '')
      ,'benzintank'        => ens('benzintank', '5', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk2', '2.50', '10', '', '')
      ,'dækbag'            => ens('dæk2', '2.50', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '155', '')
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
      ,'stelnummer'        => ens('stelnummer', 'L5YACBPA8A1 (lille knallert ZNEN 50QT-E)', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '91', '', '')
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
      ,'producent'         => ens('producent', 'Fosti Motorcycle Co., Ltd.', '', '')
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

),'agmbellagt' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'AGM bella GT', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'AGM retro GT', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '10995', '', '')
      ,'hastighed'         => ens('hastighed', '25', '', '')
      ,'farver'            => ens('farver', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'BN139QMB', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,6', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,25', 'kw', '')
      ,'moment'            => ens('moment', '', '', '')
      ,'karburator'        => ens('karburator', 'PD18J', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1891', '', '')
      ,'bredde'            => ens('bredde', '872', '', '')
      ,'højde'             => ens('højde', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2,50', '10', '', '')
      ,'fælgbag'           => ens('fælg', '2,50', '10', '', '')
      ,'dækfor'            => ens('dæk2', '3,50', '10', '', '')
      ,'dækbag'            => ens('dæk2', '3,50', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', '', '', '')
      ,'bremserbag'        => ens('bremser', '', '', '')
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
      ,'vægttør'           => ens('vægttør', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '91', '', '')
      ,'vægttotal'         => ens('vægttotal', '241', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '83', '3500', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', '', '', '')
      ,'producent'         => ens('producent', 'Fosti Motorcycle Co., Ltd.', '', '')
      ,'andet'             => ens('andet', '', '', '')

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

),'agmbellaextra' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'AGM bella extra', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'AGM retro extra', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '9995', '11500', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'lysgul sort grå grøn brun', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://billigscooter.dk', 'http://www.retro-scooter.dk', '', '')

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

),'agmclassic' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'AGM classic', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '')
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
      ,'tomgang'           => ens('tomgang', '', '', '')
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
       'benzin'            => ens('benzin', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', '', '', '')
      ,'bremserbag'        => ens('bremser', '', '', '')
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
      ,'producent'         => ens('producent', 'Fosti Motorcycle Co., Ltd.', '', '')
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

),'agmfashion' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'AGM fashion', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', 'HN50QT-K', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '7995', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '')
      ,'farver'            => ens('farver', '', '', '')
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
      ,'tomgang'           => ens('tomgang', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,6', 'kw', '6000')
      ,'moment'            => ens('moment', '2,6', 'nm', '6000')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1880', '', '')
      ,'bredde'            => ens('bredde', '675', '', '')
      ,'højde'             => ens('højde', '1155', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1400', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '')
      ,'benzintank'        => ens('benzintank', '5', '', '')
      ,'forbrug'           => ens('forbrug', '50', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', '', '', '')
      ,'bremserbag'        => ens('bremser', '', '', '')
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
      ,'vægttør'           => ens('vægttør', '118', '', '')
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
      ,'producent'         => ens('producent', 'Fosti Motorcycle Co., Ltd.', '', '')
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

),'agmnano' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'AGM nano', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'måske V963-1', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '10495', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'hvid sort guld grå', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://billigscooter.dk', '', '', '')

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

),'agmhybrid' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'AGM hybrid', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'veken hybrid VK-M50', 'abat ZQHD-808', '')
      ,'scootertype'       => ens('scootertype', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '14995', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '')
      ,'farver'            => ens('farver', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.clands-shop.dk/group.asp?group=54', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt og elektrisk', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '')
      ,'køling'            => ens('køling', '', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '')
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
       'benzin'            => ens('benzin', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', '', '', '')
      ,'bremserbag'        => ens('bremser', '', '', '')
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
      ,'producent'         => ens('producent', 'Fosti Motorcycle Co., Ltd.', '', '')
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

),'agmvintage' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'på nogen modeller er sædet delt op i to dele', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'AGM vintage', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'KF50', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '10800', '16995', '', '')
      ,'hastighed'         => ens('hastighed', '25 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort grøn lyseblå blå', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.retro-scooter.dk', 'http://www.tollose-caravan.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'CPI 61 W', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49-49,5', '', '', '')
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
       'længde'            => ens('længde', '1860', '', '', '')
      ,'bredde'            => ens('bredde', '760', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '92', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '5', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.50', '10', '', '')
      ,'fælgbag'           => ens('fælg', '2.50', '10', '', '')
      ,'dækfor'            => ens('dæk2', '3.50', '10', '', '')
      ,'dækbag'            => ens('dæk2', '3.50', '10', '', '')
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
      ,'vægtkørerklar'     => ens('vægtkørerklar', '94', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '244', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '84', '3750', '', '')
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
      ,'begrænsstelnum'    => ens('begrænsstelnum', 'Tegn 7 er "2" og angiver maksimal hastighed = 25 km/t.', '', 'Tegn 7 er "5" og angiver maksimal hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'agmvx' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'AGM VX', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '6800', '11500', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort hvid', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.tollose-caravan.dk', '', '', '')

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

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'bella eldiagram'                  => 'bella_eldiagram.jpg'

),'typegodkendelser' => array(
    'AGM retro V641 ZN50QT-E BN139QMB (L5Y) 25 km/t E17767 (e4*2002/24*1269)'            => 'typegodkendelser/AGM%20V641%20%28E17767%29%20udstedt%2019-08-2009.pdf'
   ,'AGM retro V641 ZN50QT-E BN139QMB (L5Y) 45 km/t E17768 (e4*2002/24*1269)'            => 'typegodkendelser/AGM%20V641%20%28E17768%29%20udstedt%2019-08-2009.pdf'
   ,'AGM V641 ZN50QT-E BN139QMB 25 km/t E19080 (e4*2002/24*1269)'    => 'typegodkendelser/AGM%20V641%20%28E19080%29%20udstedt%2028-04-2011.pdf'
   ,'AGM V641 ZN50QT-E BN139QMB 45 km/t E19081 (e4*2002/24*1269)'    => 'typegodkendelser/AGM%20V641%20%28E19081%29%20udstedt%2028-04-2011.pdf'
   ,'Zhongneng ZN50QT-E 2-ZN2B BM139QMB 25 km/t E17622 (e4*2002/24*1269)'    => 'typegodkendelser/ZHONGNENG%20ZN50QT-E%20%28E17622%29%20udstedt%2015-04-2009.pdf'
   ,'Zhongneng ZN50QT-E 2-ZN2B BM139QMB 25 km/t E17623 (e4*2002/24*1269)'    => 'typegodkendelser/ZHONGNENG%20ZN50QT-E%20%28E17623%29%20udstedt%2015-04-2009.pdf'
   ,'Zhongneng ZN50QT-E 2-ZN2A BM139QMB 45 km/t E17633 (e4*2002/24*1269)'    => 'typegodkendelser/ZHONGNENG%20-%20%28E17633%29%20udstedt%2027-04-2009.pdf'
   ,'Zhongneng ZN50QT-E 1-ZN2A BM139QMB 45 km/t E17635 (e4*2002/24*1269)'    => 'typegodkendelser/Zhongneng%20-%20%28E17635%29%20udstedt%2028-04-2009.pdf'
   ,'V641 ZN50QT-E 25 km/t E19849 (e4*2002/24*1269)'                => 'typegodkendelser/AGM%20V641%20%28E19849%29%20udstedt%2013-07-2012.pdf'
   ,'V641 ZN50QT-E 45 km/t E19850 (e4*2002/24*1269)'                => 'typegodkendelser/AGM%20V641%20%28E19850%29%20udstedt%2013-07-2012.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>