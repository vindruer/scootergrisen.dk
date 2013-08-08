<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "gilera 50 cm³ scootere";
$overskrift = "gilera";
$metadescription = "billeder, specifikationer, manualer, el diagrammer, reservedele og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'gileradna' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'gilera DNA', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '22995', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Piaggio Hi-PER2 PRO C271M', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,0-49,4', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '40,0', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,3', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'Dell\'Orto PHVA', '17,5', '', '') . ' eller ' . ens('karburator', 'Weber 18 OM', '', '', '') . ' eller ' . ens('karburator', 'Mikuni VM 16', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1920', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '9-9,5', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50', '14', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '3.50', '14', '', 'aluminium')
      ,'dækfor'            => ens('dæk1', '120', '70', '14', '')
      ,'dækbag'            => ens('dæk1', '140', '70', '14', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'hydraulisk upside down teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'svingarm', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '240', '', '')
      ,'bremserbag'        => ens('bremser', 'skive', '200', '', '')
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
       'motor'             => ens('olie', '', '', '1,8', '')
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
      ,'stelnummer'        => ens('stelnummer', 'ZAPC2700001', 'ZAPC2700000014', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '105', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '77', '3500', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', 'Bjarne Egedesø A/S', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', 'afstandskive mellem forreste remskivehalvdele med en tykkelse på 7,0 mm.', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', 'Resonatorrør påsvejst forreste udstødningsrør ø24 x 195 mm', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', 'kan muligvis køre 97 km/t ubegrænset. er muligvis begrænset med 2 skiver mellem de forreste remskiver, blindrør på udstødningens forrør og messingplade ved karburator og tragt i luftfilterkasse, for lille hoveddyse (standard : 56, skift til 58 eller 60)')

   )

),'gileraice' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'gilera ICE', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Piaggio C301M', '', '', '')
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
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'Dell\'Orto PHVA', '17,5', '', '') . ' eller ' . ens('karburator', 'Weber 18 OM', '', '', '')
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
       'fælgfor'           => ens('fælg', '3.00', '10', '', '')
      ,'fælgbag'           => ens('fælg', '3.00', '10', '', '')
      ,'dækfor'            => ens('dæk1', '120', '90', '10', '')
      ,'dækbag'            => ens('dæk1', '120', '90', '10', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'svingarm', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '200', 'hydraulisk', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', 'mekanisk', '')
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
      ,'stelnummer'        => ens('stelnummer', 'ZAPC30', '', '', '')
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
      ,'støj'              => ens('støj', '80', '3250', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', 'Bjarne Egedesø A/S', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', 'Afstandsskive mellem forreste remskivehalvdele med en tykkelse på 6,0 mm.', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', 'Resonatorrør påsvejst forreste udstødningsrør ø 24,0 x 152 mm.', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'gilerarcr' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'gilera RCR', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '18995', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Derbi EBS050', '', '', '') . ens('motormodel', 'EBE50', '', '', '(gammel model med 4 eller 6 gear)')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,9', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'PHVA 14', '', '', '(1C1A, EAT050)') . ens('karburator', 'PHVA 17.5', '', '', '(1F1A, D50C)')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK B9ES', 'Champion N2C', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '2036', '', '', '')
      ,'bredde'            => ens('bredde', '805-840', '', '', '')
      ,'højde'             => ens('højde', '1222', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '890', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1355', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '7', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '1.60 eller 1.85', '21', '', '')
      ,'fælgbag'           => ens('fælg', '2.15 eller 2.50', '18', '', '')
      ,'dækfor'            => ens('dæk1', '80', '90', '21', '')
      ,'dækbag'            => ens('dæk1', '110', '80', '18', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
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
      ,'antalgear'         => ens('antalgear', '3', 'manual', '', '(30 km/t)') . ens('antalgear', '6', 'manual', '', '(45 km/t)')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '11', '', '', '(D50B og D50C)') . ens('tandhjulfor', '12', '', '', '(EAT050)') . ens('tandhjulfor', '13-14', '', '', '(EBS050)')
      ,'tandhjulbag'       => ens('tandhjulbag', '53', '', '', '(D50B og D50C)') . ens('tandhjulbag', '65', '', '', '(EAT050)') . ens('tandhjulbag', '53', '', '', '(EBS050)')
      ,'tandhjulfor'       => ens('tandhjulfor', '14', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '53', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'ZAPCG11A', 'VTHSDR1E', 'ZAPG12F1A8H ZAPG11C1A4H261', 'ZAPG12F1A7H355')
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
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '1C1A, 2C1A, 1F1A og 2F1A 2006 : Tegn 9 i stelnummeret er "A" og angiver den maksimale hastighed = 30 km/t', 'G11D, G12D, 1A og 2A 2006 : Tegn nummer 7 i VIN-kode er A og angiver den godkendte maksimale hastighed 45 km/t<br>G11D og G12D 2006 : Tegn 9 i stelnummeret er A og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', 'Plade i indsugning ø6 mm.', '', '')

   )

),'gilerarunner' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '
Der er lavet mange udgaver af Gilera Runner.<br>
<br>
Gilera Runner : 1997-2001<br>
Gilera Runner DD (Double Disc) : 1998(1999)-2001<br>
<br>
Gilera Runner SP (SP50) : 1999-2004 - (nye farver)<br>
   12 liter<br>
   batteri under sæde<br>
   skivebag<br>
<br>
Gilera Runner LC DD (Gammel model)<br>
Gilera Runner AC DD (Ny model)<br>
<br>
Gilera Runner Purejet (PJ50) (indsprøjtning) : 2003-2004
', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'gilera runner', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '
gilera runner SD (Single Disc)<br>
gilera runner DD (Double Disc)<br>
gilera runner SP<br>
gilera runner PureJet (med brændstof indsprøjtning)
', '', '', '')
      ,'pris'              => ens('pris', '15995', '19995', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '(rød : Rosso Dragon, hvid : Bianco Fusion, mørkgrå : Nero Opaco (Special Series – Black Soul))')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '
Hi-PER2 PRO<br>
<br>
(SP) :
C451M
C463M
C463M
C146M
C141M
<br>
C362M
C364M
C365M
<br>
indsprøjtning :
C361M
C451M
C452M
<br>
alle undtaget purejet :
stel : ZAPC140
motor : C141M
<br>
purejet :
stel : ZAPC30100
stel : ZAPC3610
motor : ZAPC361M
<br>
', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,3', '', '', '(SD)') . ens('volume', '49,4', '', '', '(purejet)')
      ,'køling'            => ens('køling', 'blæse', '', '', '') . ' eller ' . ens('køling', 'væske', '', '', '')
      ,'boring'            => ens('boring', '40,0', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,3', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '11,8-12 (SD) 11,5 (purejet)', '0,7 (SD) 0,9 (purejet)', '', '')
      ,'tomgang'           => ens('tomgang', '(1800 SD)-2000', '(100 SD)', '', '(ikke purejet)') . ens('tomgang', '2000', '', '', '(purejet)')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
//SD: 2,1kw 5500
//3,3 kw 7250
//sp : 4,5cv 7250, purejet : 6 CV 7750
      ,'moment'            => ens('moment', '', '', '', '')
//SD: 3,3 kw 5500
//4,6 nm 6250
//sp : 4,7 nm 6000, purejet : 5,5 nm 7500
      ,'karburator'        => ens('karburator', 'Dell\'Orto PHVA', '17,5', '', '(på alle modeller undtaget PureJet og SD) - c141m - zapc140') . ens('karburator', 'Dell\'Orto PHVA', '12', '', '(SD)') . ens('karburator', 'Weber', '12', 'OM (eller 120M ?) med hoveddyse 68', '(SD)')
      ,'brændstof indsp..' => ens('brændstof indsp..', 'PureJet : ASDI (Gasspjældshus : Bing 71/20/104)', '', '', '(På Purejet) - 361m - zapc3610')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'Champion (SD : N84, N1C) eller RN1C', '', '', '(ikke purejet)') . ens('tændrør', 'Champion RG6YCA', '', '', '(kun purejet)')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '(1780 SD + purejet)-1800-1840(purejet+sp)-1880-1884', '', '', '')
      ,'bredde'            => ens('bredde', '715-(720 SD + purejet)-750(purejet+sp)', '', '', '')
      ,'højde'             => ens('højde', '(830 purejet)', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '810(purejet+sp)-(815 SD)', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1270(purejet+sp)-1280-(1290 SD + purejet)', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '7', '', '', '(SP + purejet)') . ens('benzintank', '8,5', '', '', '(SD)') . ens('benzintank', '12', '', '', '(SP + purejet)')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.00', '14', '', '(ZAPC46 - C463) 2005-') . ens('fælg', '3.50', '12', 'letmetal', '(C36 - c14 - C146M - C141M - ZAPC140 - C361M - C362M - C364M) purejet')
      ,'fælgbag'           => ens('fælg', '3.50', '13', '', '(ZAPC46 - C463) 2005-') . ens('fælg', '3.50', '12', 'letmetal', '(C36 - c14 - C146M - C141M - ZAPC140 - C361M - C362M - C364M) purejet')
      ,'dækfor'            => ens('dæk1', '120', '70', '14', '(ZAPC46 - C463) 2005-') . ens('dæk1', '120', '70', '12', '(C36 - c14 - C146M - C141M - ZAPC140 - C361M - C362M - C364M) purejet')
      ,'dækbag'            => ens('dæk1', '140', '60', '13', '(ZAPC46 - C463) 2005-') . ens('dæk1', '130', '70', '12', '(C36 - c14 - C146M - C141M - ZAPC140 - C361M - C362M - C364M) purejet')
/*
RC scooter : Min Runner SP er den her ZAPC463 og den er fra 2008....
RC scooter : Alle Runner SP fra 2005 kører med 14" foran og 13" bag på
RC scooter : ZAPC36 det havde min gamle Runner og den var fra 03 og havde 12" hjul både for og bag

26-8-2005  - C46  - 1413"
27-6-2006  - C463 - 1413"
26-2-2008  - C463 - 1413"
12-4-2010  - C46  - 1413"
28-5-2010  - C463 - 1413"
28-7-1997  - c14  - 12"
7-7-2006   - C36  - 12"
23-11-2006 - C36  - 12"
*/

      ,'dæktrykfor'        => ens('dæktryk', '1,6', 'bar', '', '(purejet)')
      ,'dæktrykbag'        => ens('dæktryk', '1,8', 'bar', '', '(purejet)')
      ,'affjedringfor'     => ens('affjedringfor', 'upside-down teleskopgaffel', '30', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'svingarm med 1 hydraulisk støddæmper', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '220(purejet)', 'hydraulisk', 'hånd')
      ,'bremserbag'        => ens('bremser', 'skive', '110-175(purejet)-220', 'hydraulisk', 'hånd (på senere modeller end SD. DD : Double Disc)') . ens('bremser', 'tromle', '', '', '(kun på SD : Single Disc)')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '4', '', '(SD)')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '7,5', '', '', '(SD)') . ens('sikring', '2 x 15 + 2 x 7,5', '', '', '(Purejet) ved batteri og underkølergitter foran')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '(bortset fra Purejet)')
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
       'motor'             => ens('olie', '', '', '1,8', '(Purejet : API TC++ eller bedre)')
      ,'gear'              => ens('olie', '80W90', 'API GL3', '0,075', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', 'cirka 0,9', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')
/*
ZAPC463 :
SP Dell\'Orto

C365M :

C361M : indsprøjtning Bing 71/20/104
C362M : Dell\'Orto PHVA 17,5 eller Weber 18 OM.
C364M : Dell\'Orto PHVA 17,5 eller Weber 18 OM.

C451M : 3,3 kw
C452M : 4,4 kw - purejet
*/
   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'ZAP', 'ZAPC3610 : purejet', 'ZAPC140 : SD', 'ZAPC463 : ? ZAPC46100, ZAPC1400000, ZAPC4620000 (2006), ZAPC1400003 (2000)') . ' ZAPC4630000 (SP) ZAPC3650000001'
      ,'udstødning'        => ens('udstødning', '(ekspansion + absorbering + katalysator - purejet)', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '(SP)')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '98', '', '', '(SD + purejet)') . ens('vægtkørerklar', '93', '', '', '(DD og SP)') . ens('vægtkørerklar', '103', '', '', '(SP)')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'DOT4', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'PG Danmark A/S', 'C. Reinhardt A/S', 'Bjarne Egedesø A/S', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', 'stelnummer : ZAPC1400000001001', 'motornummer : C141M / 1001', 'ved benene er 2 gitre som kan blæse varm luft fra radioationen hen på føren som vist er rart i koldt vejr.', '')

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

),'gilerasmt' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'gilera SMT', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '18995', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Derbi EBS050', '', '', '') . ens('motormodel', 'EBE50', '', '', '(gammel model med 4 eller 6 gear)')
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
      ,'karburator'        => ens('karburator', 'PHVA 14', '', '', '(2C1A EAT050)') . ens('karburator', 'PHVA 17.5', '', '', '(2F1A D50C)')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1972', '', '', '')
      ,'bredde'            => ens('bredde', '805-840', '', '', '')
      ,'højde'             => ens('højde', '1125', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '855', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1355', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '7', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.50', '17', '', '')
      ,'fælgbag'           => ens('fælg', '3.50', '17', '', '')
      ,'dækfor'            => ens('dæk1', '100-110', '80', '17', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '17', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
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
      ,'antalgear'         => ens('antalgear', '3', 'manual', '', '(30 km/t)') . ens('antalgear', '6', 'manual', '', '(45 km/t)')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '11', '', '', '(D50B og D50C)') . ens('tandhjulfor', '12', '', '', '(EAT050)') . ens('tandhjulfor', '14', '', '', '(EBS050)')
      ,'tandhjulbag'       => ens('tandhjulbag', '53', '', '', '(D50B og D50C)') . ens('tandhjulbag', '65', '', '', '(EAT050)') . ens('tandhjulbag', '53', '', '', '(EBS050)')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'ZAPCG12A', 'ZAPG12F1A8H417 ZAPG12F1A7H363 (lille knallert)', 'ZAPG12F1A9H429', '')
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
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 9 i stelnummeret er "A" og angiver den maksimale hastighed = 30 km/t', 'Tegn nummer 7 i VIN-kode er A og angiver den godkendte maksimale hastighed 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', 'Plade i indsugning ø6 mm.', '', '')

   )

),'gilerastalker' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'gilera stalker', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', 'gilera stalker naked', '', '', '')
      ,'pris'              => ens('pris', '11995', '12998', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Piaggio HI-PER2 PRO', 'C401M eller C131M', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,3-49,4', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,3', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '9,5 - 11,2', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '') // 4,3 cv 6500
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,9', 'kw', '', '(45 km/t typegodkendelse)')
      ,'moment'            => ens('moment', '4,5', 'nm', '7000', '') . ens('moment', '4,8', 'nm', '6000', '')
      ,'karburator'        => ens('karburator', 'Dell\'Orto PHVA', '17,5', '', '(ZAPC40)') . ' eller ' . ens('karburator', 'Dell\'Orto PHVA', '12', '', '(ZAPC13, piaggio C131M)') . ' eller ' . ens('karburator', 'Weber OM', '18', '', '') . ' eller ' . ens('karburator', 'Weber', '12', '', '(ZAPC13, piaggio C131M)')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'CHAMPION RN2C', 'måske NGK B9ES', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1760', '', '', '')
      ,'bredde'            => ens('bredde', '720', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '810-815', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1230-1240-1250', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '5-6 eller 5,6', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50', '10', '', 'letmetal')
      ,'fælgbag'           => ens('fælg', '3.50', '10', '', 'letmetal')
      ,'dækfor'            => ens('dæk1', '120', '90', '10', '56J (C401M)') . ' eller ' . ens('dæk1', '120', '70', '10', '(naked)') . ' eller ' . ens('dæk1', '120', '90', '12', '') . ' eller ' . ens('dæk1', '120', '70', '12', '(naked C401M)')
      ,'dækbag'            => ens('dæk1', '130', '90', '10', '61J') . ' eller ' . ens('dæk1', '120', '90', '10', '(C401M)') . ' eller ' . ens('dæk1', '120', '70', '10', '(naked)') . ' eller ' . ens('dæk1', '130', '90', '12', '') . ' eller ' . ens('dæk1', '120', '70', '12', '(naked C401M)')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '190', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', 'mekanisk', '') . ' eller ' . ens('bremser', 'tromle', '190', 'hydraulisk', '')
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
       'motor'             => ens('olie', '', '', '1,2', '')
      ,'gear'              => ens('olie', '80/90', 'API GL3', '0,075', '')
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
       'stel'              => ens('stel', 'svejsede stålrør med metalpladeforstærkning', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'ZAPC4010100 ZAPC4010100003 ZAPC4010100004 (lille knallert)', 'ZAPC13', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '80-87', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '190', '', '', '') . ens('vægttotal', '280', '', '', '(typegodkendelse)')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '79', '3500', '', '') . ens('støj', '80', '3250', '', '(45 km/t : C401M)')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', 'C40 naked : 9,0 mm bøsning I forreste variator', 'C40 naked : 6,5 mm bøsning', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '
ZAPC40 : Tegn 9 i stelnummeret er 1 og angiver den maksimale hastighed = 30 km/t<br>
<br>
ZAPC40 Naked : Tegn nr. 9 i stelnummeret er "3" og angiver den maksimale hastighed = 30 km/t.<br>
', '
ZAPC40 : Resonatorrør påsvejst forreste udstødningsrør ø24 x 152 mm og mellem forreste<br>remskivehalvdele er monteret en afstandsbøsning med en brystbredde på 5,5 mm.<br>
<br>
ZAPC40 : Tegn 7 i stelnummeret er 1 og angiver den maksimale hastighed = 45 km/t<br>
<br>
ZAPC13 45 km/t : Afstandsskive 6,5 mm tykkelse på forreste remskive<br>Resonatorrør påsvejst forreste udstødningsrør ø22 x 189 mm<br>
<br>
ZAPC40 Naked : Tegn nr. 7 i stelnummeret er "1" og angiver den maksimale hastighed = 45 km/t.
', '
')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', 'kan muligvis køre 70 km/t uden begænsninger')
   )

),'gilerastorm' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'gilera storm', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'måske piaggio storm ?', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '11995', '12995', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'C216M', '', '', '')
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
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'Dell\'Orto PHVA', '17,5', '', '')
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
       'fælgfor'           => ens('fælg', '3.50', '12', '', '')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'ZAPC2900004500', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '80', '3250', '', '(30 km/t)') . ens('støj', '82', '3250', '', '(45 km/t)')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '9,0 mm bøsning i forreste variatordel', '6,5 mm bøsning i forreste variatordel', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn nr. 12 i stelnummeret er "5" og angiver den maksimale hastighed = 30 km/t.', 'Tegn nr. 11 i stelnummeret er "4" og angiver den maksimale hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'diverse dyser til Piaggio, Gilera og Vespa'   => 'dyser_piaggio_gilera_vespa.png'
   ,'ICE brugermanual (finsk)'                     => 'gilera_ice_brugermanual.pdf'
   ,'RCR SMT brugermanual (finsk)'                 => 'gilera_rcr_smt_brugermanual.pdf'
   ,'runner Purejet brugermanual'                  => 'gilera_runner_purejet_brugermanual.pdf'
   ,'runner servicemanual tysk'                    => 'gilera_runner_servicemanual_tysk.pdf'
   ,'runner SP brugermanual (finsk)'               => 'gilera_runner_sp_brugermanual.pdf'
   ,'runner SP (ZAPC461) reservedele'              => 'gilera_runner_sp_zapc461_reservedele.pdf'
   ,'stalker brugermanual'                         => 'gilera_stalker_brugermanual.pdf'

),'typegodkendelser' => array(
    'DNA 45 km/t E10681 (e3*92/61*0040)'                         => 'typegodkendelser/Gilera%20DNA%20%28E10681%29%20udstedt%2006-07-2000.pdf'
   ,'ICE 45 km/t E11496 (e3*92/61*0079)'                         => 'typegodkendelser/Gilera%20ICE%20%28E11496%29%20udstedt%2031-07-2001.pdf'
   ,'RCR SMT 30 km/t (3 gear manuel) E15356 (e9*2002/24*0004)'   => 'typegodkendelser/Gilera%20-%20%28E15356%29%20udstedt%2010-05-2006.pdf'
   ,'RCR SMT 45 km/t (6 gear) E14348 (e9*2002/24*0004)'          => 'typegodkendelser/Gilera%20-%20%28E14348%29%20udstedt%2022-06-2005.pdf'
   ,'RCR SMT 45 km/t (6 gear) E14860 (e9*2002/24*0004)'          => 'typegodkendelser/Gilera%20-%20%28E14860%29%20udstedt%2030-01-2006.pdf'
   ,'RCR SMT 45 km/t E15369 (e9*2002/24*0004)'                   => 'typegodkendelser/Gilera%20-%20%28E15369%29%20udstedt%2011-05-2006.pdf'
   ,'RCR SMT 45 km/t E15964 (e9*2002/24*0004)'                   => 'typegodkendelser/Gilera%20-%20%28E15964%29%20udstedt%2023-11-2006.pdf'
   ,'runner 30 km/t E15626 (e3*92/61*0104)'                      => 'typegodkendelser/Gilera%20Runner%20%28E15626%29%20udstedt%2007-07-2006.pdf'
   ,'runner 30 km/t E18236 (e3*2002/24*0339)'                    => 'typegodkendelser/Gilera%20Runner%20%28E18236%29%20udstedt%2028-05-2010.pdf'
   ,'runner 45 km/t E12703 (e3*92/61*0104)'                      => 'typegodkendelser/Gilera%20Runner%20%28E12703%29%20udstedt%2006-06-2003.pdf'
   ,'runner 45 km/t E14481 (e3*2002/24*0339)'                    => 'typegodkendelser/Gilera%20Runner%20%28E14481%29%20udstedt%2026-08-2005.pdf'
   ,'runner 45 km/t E15963 (e3*92/61*0104)'                      => 'typegodkendelser/Gilera%20Runner%20%28E15963%29%20udstedt%2023-11-2006.pdf'
   ,'runner 45 km/t E18120 (e3*2002/24*0339)'                    => 'typegodkendelser/Gilera%20Runner%20%28E18120%29%20udstedt%2012-04-2010.pdf'
   ,'runner 45 km/t E18252 (e3*2002/24*0339)'                    => 'typegodkendelser/Gilera%20Runner%20%28E18252%29%20udstedt%2031-05-2010.pdf'
   ,'runner 45 km/t A8459'                                       => 'typegodkendelser/Gilera%20Runner%2045%20%28A8459%29%20udstedt%2028-07-1997.pdf'
   ,'runner SP 30 km/t E15587 (e3*2002/24*0339)'                 => 'typegodkendelser/Gilera%20Runner%20SP%20%28E15587%29%20udstedt%2027-06-2006.pdf'
   ,'runner SP 30 km/t E16984 (e3*2002/24*0339)'                 => 'typegodkendelser/Gilera%20Runner%20SP%20%28E16984%29%20udstedt%2026-02-2008.pdf'
   ,'stalker 30 km/t E15357 (e11*2000/7*0076)'                   => 'typegodkendelser/Gilera%20Stalker%20%28E15357%29%20udstedt%2010-05-2006.pdf'
   ,'stalker 30 km/t E15357 (e11*2000/7*0076) 2'                 => 'typegodkendelser/Gilera%20Stalker%20%28E15357%29%20udstedt%2010-05-2006%281%29.pdf'
   ,'stalker 30 km/t E18237 (e11*2000/7*0079)'                   => 'typegodkendelser/Gilera%20Stalker%20%28E18237%29%20udstedt%2028-05-2010.pdf'
   ,'stalker 45 km/t A8920'                                      => 'typegodkendelser/Gilera%20Stalker%20%28A8920%29%20udstedt%2022-01-1998.pdf'
   ,'stalker 45 km/t E13447 (e11*2000/7*00076)'                  => 'typegodkendelser/Gilera%20Stalker%20%28E13447%29%20udstedt%2028-05-2004.pdf'
   ,'stalker 45 km/t E15938 (e11*2000/7*00076)'                  => 'typegodkendelser/Gilera%20Stalker%20%28E15938%29%20udstedt%2013-11-2006.pdf'
   ,'stalker naked 30 km/t E17005 (e11*2000/7*00076)'            => 'typegodkendelser/Gilera%20Stalker%20Naked%20%28E17005%29%20udstedt%2019-03-2008.pdf'
   ,'stalker naked 45 km/t E17124 (e11*2000/7*00076)'            => 'typegodkendelser/Gilera%20Stalker%20Naked%20%28E17124%29%20udstedt%2014-05-2008.pdf'
   ,'storm 30 km/t E17293 (e3*92/61*0054)'                       => 'typegodkendelser/Gilera%20Storm%20%28E17293%29%20udstedt%2031-10-2008.pdf'
   ,'storm 45 km/t E17294 (e3*92/61*0054)'                       => 'typegodkendelser/Gilera%20Storm%20%28E17294%29%20udstedt%2031-10-2008.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
