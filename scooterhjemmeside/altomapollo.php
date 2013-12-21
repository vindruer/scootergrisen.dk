<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "apollo offroader med 50 cm³ motor";
$overskrift = "apollo";
$metadescription = "specifikationer, download og typegodkendelser";

$setup['sideikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'apollo29' => array(

   'generelt'              => array(
       'model'             => ens('model', 'apollo 29', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'apollo orion/aragon (RS) 29', 'aragon 29 motard', '', '')
      ,'scootertype'       => ens('scootertype', 'A29E50M30', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '7995', '9995', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort-gul sort-rød', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.scooterhjoernet.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'APL139FMB', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '48', '', '', '')
      ,'køling'            => ens('køling', 'vind', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '9,0', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,2-3', 'hk', '7500', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'DE*NI PZ50QL', '', '', '(30 km/t)') . ens('karburator', 'DE*NI PZ19B', '', '', '(45 km/t)')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1620-1695', '', '', '')
      ,'bredde'            => ens('bredde', '750-760', '', '', '')
      ,'højde'             => ens('højde', '1000', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1300', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '90', '', 'eller højere', '')
      ,'benzintank'        => ens('benzintank', '3,2', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '1,85', '14', '', '')
      ,'fælgbag'           => ens('fælg', '1,85', '14', '', '')
      ,'dækfor'            => ens('dæk1', '90', '90', '14', '') . ' eller ' . ens('dæk2', '2.75', '14', '', '')
      ,'dækbag'            => ens('dæk1', '90', '90', '14', '') . ' eller ' . ens('dæk2', '2.75', '14', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'skive', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', 'GTX5L-BS')
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
       'motor'             => ens('olie', '15W40', 'SE', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', 'manuel', '', '', '')
      ,'antalgear'         => ens('antalgear', '4', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '15', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '37', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'L08', 'L08LGBL0081 L08LGBL0981000 (lille knallert ORION APL 50 QL, ikke sikkert det passer til denne model)', 'L08LGBL0781 (lille knallert ORION APL 50 QL, ikke sikkert det passer til denne model)', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '77-81', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '166', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '72', '2750', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'AMCO Denmark A/S', '', '', '')
      ,'producent'         => ens('producent', 'Zhejiang Apollo Sporting Product Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', 'på 2010 modeller skulle der på CDI boksen være en skrue bag noget gummi hvor man kan indstille hastigheden', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', 'lille "rør" på gasspjældet gør at gasspjældet ikke kan bevæge sig helt op')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'apollo30' => array(

   'generelt'              => array(
       'model'             => ens('model', 'apollo 30', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'apollo orion/aragon RS/RX 30', 'aragon 30 motard', '', '')
      ,'scootertype'       => ens('scootertype', 'A30E50M30', 'RX30ARA', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '9995', '12995', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort-grå sort-blå sort-grøn sort-gul sort-orange sort-rød', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'APL139FMB-2', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '', '')
      ,'køling'            => ens('køling', 'vind', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '8,0', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,2-2,2-3', 'kw', '7500', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'JINGKE PZ17B', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1695-1910', '', '', '')
      ,'bredde'            => ens('bredde', '760-770', '', '', '')
      ,'højde'             => ens('højde', '1020', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1300', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '90', '', 'eller højere', '')
      ,'benzintank'        => ens('benzintank', '3,2', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2,15-2,75', '17', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '2,15-2,75', '17', '', 'aluminium')
      ,'dækfor'            => ens('dæk1', '110', '70', '17', '') . ' eller ' . ens('dæk2', '2.75', '17', '', '')
      ,'dækbag'            => ens('dæk1', '110', '70', '17', '') . ' eller ' . ens('dæk2', '2.75', '17', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '2 stempler')
      ,'bremserbag'        => ens('bremser', 'skive', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '5', '', 'GTX5L-BS')
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
       'motor'             => ens('olie', '15W-40', 'API : SE', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'kæde', '', '', '')
      ,'kobling'           => ens('kobling', 'manuel', '', '', '')
      ,'antalgear'         => ens('antalgear', '4', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'L08LCBL0581 (lille knallert)', 'L08LCBL0981000 (lille)', 'L08LCBL0591000 (lille)', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '103-106', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '103-106', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '256', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '73', '2750', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'AMCO Denmark A/S', '', '', '')
      ,'producent'         => ens('producent', 'Zhejiang Apollo Sporting Product Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', 'på 2010 modeller skulle der på CDI boksen være en skrue bag noget gummi hvor man kan indstille hastigheden', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', 'gasspjæld')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'apollo36' => array(

   'generelt'              => array(
       'model'             => ens('model', 'apollo 36', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'apollo orion/aragon RX 36', 'aragon 36 motard', '', '')
      ,'scootertype'       => ens('scootertype', 'A36A50M30', 'RX36ARA', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '11995', '13995', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort-grøn sort-gul sort-rød', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.scooterhjoernet.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'APL139FMB-2', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '', '')
      ,'køling'            => ens('køling', 'vind', '', '', '')
      ,'boring'            => ens('boring', '39,0', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,4', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '0,05', '0,10', '', '(ifølge finsk brugermanual)')
      ,'kompression'       => ens('kompression', '8-9,0', '', '', '')
      ,'tomgang'           => ens('tomgang', '1500', '100', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,2', 'hk', '7500', '') . ens('maxeffektogheste', '1,4', 'kw', '5500', '(ifølge finsk brugermanual)')
      ,'moment'            => ens('moment', '2,5', 'nm', '4500', '(ifølge finsk brugermanual)')
      ,'karburator'        => ens('karburator', 'DE*NI PZ19', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'A7RTC', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '2080-2140', '', '', '')
      ,'bredde'            => ens('bredde', '820-830', '', '', '')
      ,'højde'             => ens('højde', '1200-1235', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', 'minimum 300', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1420-1430', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '90', '', 'eller højere', '')
      ,'benzintank'        => ens('benzintank', '8-8,4', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2,15', '17', '', 'stål eller aluminium')
      ,'fælgbag'           => ens('fælg', '2,15', '17', '', 'stål eller aluminium')
      ,'dækfor'            => ens('dæk1', '110', '70', '17', '') . ' eller ' . ens('dæk1', '100', '80', '17', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '17', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '54', '265', '')
      ,'affjedringbag'     => ens('affjedringbag', 'svinggaffel justerbar', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '300', '', '2 stempler')
      ,'bremserbag'        => ens('bremser', 'skive', '180', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '9', '', '12N9-4B-1')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '10', '', '', '')
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
       'motor'             => ens('olie', '15W-40', 'API : SE', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'kæde', '', '', '')
      ,'kobling'           => ens('kobling', 'manuel', '', '', '')
      ,'antalgear'         => ens('antalgear', '4', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'boksramme i stål', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'L08LCBL1891 (lille knallert)', 'L08LCBL1091 L08LCBL1291 L08LCBL1791000 (lille knallert)', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '112-118', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '112-118', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '268', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => "30 km/t : " . ens('støj', '74', '2750', '', '') . "<br>45 km/t : " . ens('støj', '81', '4250', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'AMCO Denmark A/S', '', '', '')
      ,'producent'         => ens('producent', 'Zhejiang Apollo Sporting Product Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', 'på 2010 modeller skulle der på CDI boksen være en skrue bag noget gummi hvor man kan indstille hastigheden', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', 'gasspjæld')
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
    'A36A50M brugermanual finsk'             => 'apollo_a36a50m_brugermanual_finsk.pdf'
   ,'A36A50M eldiagram'                      => 'apollo_a36a50m_eldiagram.jpg'

),'typegodkendelser' => array(
    'A29E50M30 30 km/t E17160 (e4*2002/24*1660)'    => 'typegodkendelser/Apollo%20A29E50M30%20%28E17160%29%20udstedt%2030-06-2008.pdf'
   ,'A29E50M30 45 km/t E17572 (e4*2002/24*1660)'    => 'typegodkendelser/Apollo%20A29E50M30%20%28E17572%29%20udstedt%2024-02-2009.pdf'
   ,'A30E50M30 30 km/t E17159 (e4*2002/24*1663)'    => 'typegodkendelser/Apollo%20A30E50M30%20%28E17159%29%20udstedt%2030-06-2008.pdf'
   ,'A30E50M30 40 km/t E17573 (e4*2002/24*1863)'    => 'typegodkendelser/Apollo%20A30E50M30%20%28E17573%29%20udstedt%2024-02-2009.pdf'
   ,'A36A50M30 30 km/t E17575 (e4*2002/24*2105)'    => 'typegodkendelser/Apollo%20A36A50M30%20%28E17575%29%20udstedt%2024-02-2009.pdf'
   ,'A36A50M30 45 km/t E17574 (e4*2002/24*2105)'    => 'typegodkendelser/Apollo%20A36A50M30%20%28E17574%29%20udstedt%2024-02-2009.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>