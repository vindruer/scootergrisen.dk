<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "longjia (VGA) 50 cm³ scootere";
$overskrift = "longjia (VGA)";
$metadescription = "billeder, specifikationer, manualer, el diagrammer, reservedele og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_longjia.png';

$databasecenter = array(

'longjiadigita' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'longjia digita', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'longjia firefly', 'VGA digita', '', '')
      ,'scootertype'       => ens('scootertype', 'LJ50QT-2L', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '4999', '6999', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort-hvid-blå', 'sort', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.thansen.dk', 'http://www.bike-station.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'LJ1PE40QMB-2', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '6,5', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,8', 'kw', '7500', '(i følge producent hjemmeside)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'mikuni', '16', '', '') . ' eller ' . ens('karburator', 'TK 16P-6F', '', '', '') . ' eller ' . ens('karburator', 'Dell\'Orto PHVA 12 PS', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BPR7HS', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1690', '', '', '')
      ,'bredde'            => ens('bredde', '645', '', '', '')
      ,'højde'             => ens('højde', '1130', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1220', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '5,5', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.50', '10', '', 'aluminium') . ' eller ' . ens('fælg', '2.50', '12', '', '(på model med Dell\'Orto karburator)')
      ,'fælgbag'           => ens('fælg', '2.50', '10', '', 'aluminium') . ' eller ' . ens('fælg', '2.50', '12', '', '(på model med Dell\'Orto karburator)')
      ,'dækfor'            => ens('dæk2', '3.50', '10', '', '') . ' eller ' . ens('fælg', '3.50', '12', '', '(på model med Dell\'Orto karburator)')
      ,'dækbag'            => ens('dæk2', '3.50', '10', '', '') . ' eller ' . ens('fælg', '3.50', '12', '', '(på model med Dell\'Orto karburator)')
      ,'dæktrykfor'        => ens('dæktryk', '2,0', 'bar', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,0', 'bar', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '1 støddæmper', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '160', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '4', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '10', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/35', '', '')
      ,'lysbagbremse'      => ens('lys', '12', '21/5', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '12', '5', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '', '')
      ,'lyskontrolblink'   => ens('lys', '12', '1,7', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', 'API TC / JASO FC / ISO-L-EGD', '', '')
      ,'gear'              => ens('olie', '80W90', '', '0,11', '')
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
       'stel'              => ens('stel', 'rørramme i stål', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'L4HDEBBP8B6 (lille knallert)', 'L4HDEBBP6B6', 'L4HDEBBP2B6', 'L4HDEBBP1B6 (30 km/t)') . 'L4HGABBP0A6000 (longjia firefly -01 lille knallert)'
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '')
      ,'vægttør'           => ens('vægttør', '78', '', '', '')
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
      ,'importør'          => ens('importør', 'GR Trading', 'T. Hansen Gruppen A/S', '', '')
      ,'producent'         => ens('producent', 'Ningbo Longjia Motorcycle Co., Ltd.', '', '', '')
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
      ,'begrænsstelnum'    => ens('begrænsstelnum', 'Tegn nr. 5 er et "A" og angiver maksimal hastighed = 25 km/t.', 'Tegn nr. 5 i stelnummeret er et "E" og angiver maksimal hastighed = 30 km/t.', 'Tegn nr. 5 i stelnummeret er et "T" og angiver maksimal hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'longjiaexactly' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'longjia exactly', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'AMC exactly', 'branson, sachs speedforce, ginomoto', 'BS50 sting', 'versus-2TX')
      ,'scootertype'       => ens('scootertype', 'LJ50QT-K', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '25', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://outgear.dk/?id=21&recordid=282', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'LJ1PE40QMB', '', '', '')
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
      ,'karburator'        => ens('karburator', 'mikuni', '16', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1830', '', '', '')
      ,'bredde'            => ens('bredde', '705', '', '', '')
      ,'højde'             => ens('højde', '1165', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1290', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.50', '12', '', '')
      ,'fælgbag'           => ens('fælg', '2.50', '12', '', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '')
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
      ,'stelnummer'        => ens('stelnummer', 'L4H', 'L4HGTBBP', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '87', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '92', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '242', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '85', '3750', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'Asian Motor Company ApS', '', '', '')
      ,'producent'         => ens('producent', 'Ningbo Longjia Motorcycle Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', 'Gasspjælds vandring', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', 'Tegn 5 i stelnummeret er A og angiver den maksimale hastighed = 25 km/t', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'longjiagrido' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'longjia grido', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'VGA grido', '', '', '')
      ,'scootertype'       => ens('scootertype', 'LJ50QT-H', '', '', '')
      ,'varianter'         => ens('varianter', 'italy (sort-rød-grøn)', '', '', '')
      ,'pris'              => ens('pris', '6999', '9999', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort-hvid', 'sort-rød-grøn', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.thansen.dk', 'http://www.mc-center.dk', 'http://www.bike-station.dk', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'LJ1PE40QMB', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,2', '', '', '')
      ,'køling'            => ens('køling', '40', '', '', '')
      ,'boring'            => ens('boring', '39,2', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '6,5', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,8', 'kw', '7500', '(i følge producent hjemmeside)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'mikuni', '16', '', '') . ' eller ' . ens('karburator', 'TK 16P-6F', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BPR7HS', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1830-1870', '', '', '')
      ,'bredde'            => ens('bredde', '700-705', '', '', '')
      ,'højde'             => ens('højde', '1120-1165', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '760', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1290', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '4,7', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50', '12', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', 'aluminium')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '2,0', 'bar', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,3', 'bar', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '1 støddæmper', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '190', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '7', '', '(ifølge T Hansen brugermanual)')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '10', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/35', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', 'LED')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', 'LED')
      ,'lysblink'          => ens('lys', '12', '10', '2', '(foran. Bagved er der LED)')
      ,'lyskontrolblink'   => ens('lys', '12', '1,7', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', 'API TC / JASO FC / ISO-L-EGD', '', '')
      ,'gear'              => ens('olie', '80W90', '', '0,11', '')
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
       'stel'              => ens('stel', 'rørramme i stål', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'L4HGEBBP5B6 (30 km/t)', 'L4HGABBPX96 (lille knallert)', 'L4HGABBP096 (lille knallert)', '')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '')
      ,'vægttør'           => ens('vægttør', '88-90', '', '', '')
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
      ,'importør'          => ens('importør', 'GR Trading', 'T. Hansen Gruppen A/S', '', '')
      ,'producent'         => ens('producent', 'Ningbo Longjia Motorcycle Co., Ltd.', '', '', '')
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
      ,'begrænsstelnum'    => ens('begrænsstelnum', 'Tegn nr. 5 er et "A" og angiver maksimal hastighed = 25 km/t.', 'Tegn nr. 5 i stelnummeret er et "E" og angiver maksimal hastighed = 30 km/t.', 'Tegn nr. 5 i stelnummeret er et "T" og angiver maksimal hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'longjiah2' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '
Denne model er specielt egnet til post/avis/reklame uddeling og udbringning.

T Hansen kalder denne model for VGA Mover.

Se også forum emnet : '.ahref('http://scootergrisen.dk/forum/viewtopic.php?f=3&t=703', 'Nyhed : VGA Mover (4 takt væskekølet)').'
', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'longjia H-2', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'VGA mover', 'H-2 50 4T', '', '')
      ,'scootertype'       => ens('scootertype', 'LJ50QT-6', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '12999', '13999', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'hvid-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.thansen.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'LJ1P38MB', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,3', '', '', '')
      ,'køling'            => ens('køling', 'væske', '', '', '')
      ,'boring'            => ens('boring', '38', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '43,5', '', '', '')
      ,'ventiler'          => ens('ventiler', '3', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '12', '', '', '')
      ,'tomgang'           => ens('tomgang', '1800', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,6', 'kw', '', '(30 km/t typegodkendelse og kw samme som T Hansen)') . ens('maxeffektogheste', '3,2', 'kw', '', '(45 km/t typegodkendelse og kw samme som T Hansen)') . ens('maxeffektogheste', '3,2', 'kw', '8000', '(longjia.com)')
      ,'moment'            => ens('moment', '2,2', 'nm', '5400', '(30 km/t i følge T Hansen)') . '<br>' . ens('moment', '3,8', 'nm', '7500', '(45 km/t i følge T Hansen)') . '<br>' . ens('moment', '4,2', 'nm', '6500', '(i følge longjia.com)')
      ,'karburator'        => ens('karburator', 'DeKni', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK CR7E', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1890', '', '', '')
      ,'bredde'            => ens('bredde', '700-714', '', '', '')
      ,'højde'             => ens('højde', '1145', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '780', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1340-1365', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', 'minimum 91', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '7', '', '', '(i følge T Hansen)')
      ,'forbrug'           => ens('forbrug', '30', '', '', '(i følge en T Hansen ansat som fortalte der var lavet en test hvor den blev sat til at køre ved fuldgas i 14 dage)')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50', '12', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', 'aluminium')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '2,0', 'bar', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,3', 'bar', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '1 støddæmper med justerbar giga stor fjeder og der er sådan en ventil øverst ligesom om man kan få olie/fedt ind og ud eller hvad den end er til', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '190', '', '')
      ,'bremserbag'        => ens('bremser', 'skive', '190', '', 'med parkeringsbremsefunktion (der er en dut man kan trykke ned når man holder der venstre bremsegreb inde som låser bremsen)')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '7', 'vedligeholdelsesfrit', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '15', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', 'XFDH12BB LJ7B1-30 eller XFDH12BB LJ7B1-45', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/35', '', '')
      ,'lysbagbremse'      => ens('lys', '12', '21/5', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '12', '5', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '4', '')
      ,'lyskontrolblink'   => ens('lys', '12', '3', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '15W40', 'API : SL/CF', '', '0,78')
      ,'gear'              => ens('olie', '80W90', '', '0,13', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', 'G12', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'cvt', 'kilerem', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'forstærket rørramme i stål ', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'L4HDENBP6C6', '', '', '(set på 30 km/t model)') . 'L4HDANBP1C6000036 (stor knallert)'
      ,'udstødning'        => ens('udstødning', '', 'e4 Longjia YD9', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '(i følge typegodkendelse)')
      ,'vægttør'           => ens('vægttør', '104-105', '', '', '(i følge T Hansen)')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '104', '', '', '(i følge typegodkendelse)')
      ,'vægttotal'         => ens('vægttotal', '254', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '190', '', '', '(ifølge T Hansen)')
      ,'luftfiltertype'    => ens('luftfiltertype', '', 'e4 Longjia 7B1', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'DOT 4', '', '', '')
      ,'støj'              => ens('støj', '75', '3500', '', '(30 km/t)') . ens('støj', '78', '4250', '', '(45 km/t)')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'T. Hansen Gruppen A/S', '', '', '')
      ,'producent'         => ens('producent', 'Ningbo Longjia Motorcycle Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', 'digitalt HSRC instrumentpanel', 'speedometer går op til 70 km/t (set på 30 km/t model).', '2 sidestøtteben (1 i hver side) med plader på enden så de ikke synker ned i jorden. Centerstøtteben kan købes som ekstraudstyr.', 'der er usædvanlig god fodplads og stor plads bagerst på scooteren hvor ekstra udstyr kan monteres
<br>
<div style="text-align: center; margin: auto;"><br>
<h3 style="text-align: center; margin: auto;">Ekstra udstyr</h3><br>
'
.galleriholder(array(
    galleri('highslide', '', 'billed3749.jpg', array('Beslag for avistaske, front, dobbelt', '1.499,-'))
   ,galleri('highslide', '', 'billed3437.jpg', array('Bagagebærer bag', '799,-'))
   ,galleri('highslide', '', 'billed3438.jpg', array('Avistaske', '499,- per styk'))
   ,galleri('highslide', '', 'billed3439.jpg', array('Transportboks med lås', '1.699,-'))
   ,galleri('highslide', '', 'billed3645.jpg', array('Bagagebærer, STOR, Foran', '499,-'))
   ,galleri('highslide', '', 'billed3646.jpg', array('Beslag for avistaske til frontmontering', '499,-'))
))
.'
</div><br>
'.ahref('http://www.thansen.dk/product.asp?c=8585017488&n=-879358269&pn=-686822290', 'Beslag for avistaske, front, dobbelt (1.499,-)').'<br>
'.ahref('http://www.thansen.dk/product.asp?c=6865671661&n=-879358269&pn=-879350576', 'Bagagebærer inkl. sidebeslag (799,-)').'<br>
'.ahref('http://www.thansen.dk/product.asp?c=6865671661&n=1686362334&pn=-836874179', 'Avistaske (499,- per styk)').'<br>
'.ahref('http://www.thansen.dk/product.asp?c=6865671661&n=-879358269&pn=-879350558', 'Transportboks isoleret med lås (1.699,-)').'<br>
'.ahref('http://www.thansen.dk/product.asp?c=7803453770&n=-879358269&pn=-778409204', 'Beslag for avistaske til frontmontering (499,-)').'<br>
'.ahref('http://www.thansen.dk/product.asp?c=6865671661&n=-879358269&pn=-879350574', 'Bagagebærer, STOR, Foran (499,-) (sat ned fra 899,- til 499,- som restsalg)').'<br>
<br>
De kalder boksen for "isoleret transportboks" fordi det ikke er godkendt til mad. Men det kan være den bliver godkendt.
')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', 'ja', 'ja', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn nr. 5 i stelnummeret er et "E" og angiver maksimal hastighed = 30 km/t.', 'Tegn nr. 5 i stelnummeret er et "A" og angiver maksimal hastighed = 45 km/t. (måske en fejl ? ved de andre står gerne at "A" er 25 km/t og at "T" er 45 km/t)', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'longjiaversus' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'longjia versus', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'VGA versus', '', '', '')
      ,'scootertype'       => ens('scootertype', 'LJ50QT-F', '', '', '')
      ,'varianter'         => ens('varianter', 'LJ50QT-F-07 (30 km/t)', 'LJ50QT-F-08 (45 km/t)', '', '')
      ,'pris'              => ens('pris', '6999', '7999', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.thansen.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,2', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '40,0', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,3', 'kw', '', '(ifølge 30 km/t typegodkendelse)') . ens('maxeffektogheste', '1,3', 'hk', '', '(ifølge 30 km/t thansen.dk)') . ens('maxeffektogheste', '2,3', 'kw', '', '(ifølge 45 km/t typegodkendelse)') . ens('maxeffektogheste', '2,3', 'hk', '', '(ifølge 45 km/t thansen.dk)')
      ,'moment'            => ens('moment', '3,2', 'nm', '6000', '(ifølge 30 og 45 km/t thansen.dk)')
      ,'karburator'        => ens('karburator', 'Dell\'Orto PHVA 12 PS', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BPR7HS', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1830', '', '', '')
      ,'bredde'            => ens('bredde', '705', '', '', '')
      ,'højde'             => ens('højde', '11265', '', '', '(ifølge T Hansen bruger manual. Mon ik der er et tal for meget)')
      ,'sædehøjde'         => ens('sædehøjde', '760', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1290', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '5', '', '', '')
      ,'forbrug'           => ens('forbrug', 'op til 22', '', '', '(ifølge 30 km/t thansen.dk)') . ens('forbrug', 'op til 25', '', '', '(ifølge 45 km/t thansen.dk)')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50', '12', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', 'aluminium')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '2,0', 'bar', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,3', 'bar', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '7', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '10', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/35', '', '')
      ,'lysbagbremse'      => ens('lys', '12', '21/5', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '12', '5', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '4', '')
      ,'lyskontrolblink'   => ens('lys', '12', '1,7', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', 'API TC / JASO FC / ISO-L-EGD', '', '')
      ,'gear'              => ens('olie', '80W90', '', '0,11', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'cvt', 'kilerem', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'rørramme i stål', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'L4H', '', '', 'L4HGTBBP2C6006286 (stor) L4HGTBBP3A6015556 (fra T Hansen manual)')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '92', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'DOT 4', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'T. Hansen Gruppen A/S', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', 'I CDI-enhed Under dæksel v. batteri', 'I CDI-enhed Under dæksel v. batteri', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn nr. 5 i stelnummeret er et "E" og angiver maksimal hastighed = 30 km/t.', 'Tegn nr. 5 i stelnummeret er et "T" og angiver maksimal hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'longjiaversus4t' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '
Først set den 22. Juli 2013 på '.ahref('http://thansen.dk', 'thansen.dk').'.

'.ahref('http://www.thansen.dk/product.asp?c=9318069051&n=-1422285006&pn=-600825768', 'VGA Versus 4T LC 30 km/t').'
'.ahref('http://www.thansen.dk/product.asp?c=9318069051&n=-1422285006&pn=-600825765', 'VGA Versus 4T LC 45 km/t').'

T Hansen skriver :
'.citat('
Som knallert 30, garanterer vi minimum 30 km/l.
Som knallert 45, garanterer vi minimum 35 km/l.
').'

Ser eventuelt forum emnet '.ahref('http://scootergrisen.dk/forum/viewtopic.php?f=3&t=1391', 'Nyhed : VGA Versus LJ50QT-2F (4 takt væskekølet)').'.
', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'longjia versus 4T LC', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'VGA Versus 4T LC', '', '', '')
      ,'scootertype'       => ens('scootertype', 'LJ50QT-2F', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '8999', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'LJ1P38MB', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', 'væske', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '3', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,2', 'hk', '', '(30 km/t i følge thansen.dk)') . ens('maxeffektogheste', '4,3', 'hk', '', '(45 km/t i følge thansen.dk)') . ens('maxeffektogheste', '1,6', 'kw', '', '(30 km/t i følge 30 km/t typegodkendelse)') . ens('maxeffektogheste', '3,2', 'kw', '', '(45 km/t i følge 45 km/t typegodkendelse)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'CVK', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1830', '', '', '')
      ,'bredde'            => ens('bredde', '705', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '92', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '5,0', '', '', '')
      ,'forbrug'           => ens('forbrug', 'minimum 30', '', '', '(30 km/t i følge thansen.dk som dog også skrive Op til 30 Km/L)') . ens('forbrug', 'minimum 35', '', '', '(45 km/t i følge thansen.dk som dog også skrive Op til 35 Km/L)')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50', '12', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', 'aluminium')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '(lavprofildæk i følge thansen.dk)')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '(lavprofildæk i følge thansen.dk)')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'hydraulisk teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'oliedæmpet fjederben', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '190', '', '')
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
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '(xfdh12______ lj7b1-______)')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', 'glødepære')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', 'glødepære')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', 'glødepære')
      ,'lysblink'          => ens('lys', '', '', '', 'glødepære')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '10W40', 'API SL/CF', '1,1', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'cvt', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'L4H', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '91', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '241', '', '', '(i følge thansen.dk)') . ens('vægttotal', '245', '', '', '(i følge 30 og 45 km/t typegodkendelser)')
      ,'bæreevne'          => ens('bæreevne', '150', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '75', '3500', '', '(i følge 30 km/t typegodkendelse)') . ens('støj', '78', '3500', '', '(i følge 45 km/t typegodkendelse)')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'T. Hansen Gruppen A/S', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', 'analogt speedometer', '
Dyse 4 mm 88 Versus 4-t vandkølet
Hoveddyse std. Versus 4-t vandkølet : http://www.thansen.dk/product.asp?c=9413662671&n=-833826165&pn=-664175331
Afstandsskive ved variom. Versus 4-t : http://www.thansen.dk/product.asp?c=9318069051&n=-833826164&pn=-664164605
Bøsning for variomaticskål Versus 4-t : http://www.thansen.dk/product.asp?c=9318069051&n=-833826164&pn=-664165263
stator : 12 stjernet 1 spole (hvid + rød/(rød/gul?))
pickup : blå/hvid + rød
', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', 'Elektronisk (CDI) Højre side på stel', 'Elektronisk (CDI) Højre side på stel', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn nr. 5 i stelnummeret er et "E" og angiver maksimal hastighed = 30 km/t.', 'Tegn nr. 5 i stelnummeret er et "A" og angiver maksimal hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'digita brugermanual'                 => 'longjia_digita_brugermanual.pdf'
   ,'exactly LJ50QT-K brugermanual'       => 'longjia_exactly_brugermanual.pdf'
   ,'grido brugermanual'                  => 'longjia_grido_brugermanual.pdf'
   ,'grido LJ50QT-H eldiagram'            => 'longjia_grido_eldiagram.pdf'
   ,'mover brugermanual'                  => 'longjia_mover_brugermanual.pdf'
   ,'mover LJ50QT-6 (H2) 4T eldiagram'    => 'longjia_mover_eldiagram.pdf'
   ,'versus brugermanual'                 => 'longjia_versus_brugermanual.pdf'
   ,'LJ50QT-L brugermanual'               => 'longjia_lj50qtl_brugermanual.pdf'
   ,'LJ50QT-4M (F3, Willy) detaljeret typegodkendelse (e4*2002/24*2441*00)'         => 'typegodkendelser/longjia_lj50qt4m_detaljeret_typegodkendelse.pdf'

),'typegodkendelser' => array(
    'firefly LJ50QT-2L 25 km/t E18165 (e4*2002/24*2281)'   => 'typegodkendelser/LONGJIA%20Firefly%20%28E18165%29%20udstedt%2020-04-2010.pdf'
   ,'digita LJ50QT-2L 30 km/t (10") E18918 (e4*2002/24*2281)'    => 'typegodkendelser/VGA%20Digita%20%28E18918%29%20udstedt%2007-02-2011.pdf'
   ,'digita LJ50QT-2L 30 km/t (10" og 12") E18918 (e4*2002/24*2281)'    => 'typegodkendelser/VGA%20Digita%20%28E18918%29%20udstedt%2007-12-2011.pdf'
   ,'digita LJ50QT-2L 45 km/t E18919 (e4*2002/24*2281)'    => 'typegodkendelser/VGA%20Digita%20%28E18919%29%20udstedt%2007-02-2011.pdf'
   ,'exactly LJ50QT-K 25 km/t E16469 (e2*2002/24*1375)'    => 'typegodkendelser/Longjia%20-%20%28E16469%29%20udstedt%2013-06-2007.pdf'
   ,'exactly LJ50QT-K-00 certifikat (e4*2002/24*1375*00)'  => 'typegodkendelser/longjia_LJ50QT-K-00_typegodkendelse_certifikat.pdf'
   ,'exactly LJ50QT-K-01 certifikat (e4*2002/24*1375*01)'  => 'typegodkendelser/longjia_LJ50QT-K-01_typegodkendelse_certifikat.pdf'
   ,'exactly LJ50QT-K-02 certifikat (e4*2002/24*1375*02)'  => 'typegodkendelser/longjia_LJ50QT-K-02_typegodkendelse_certifikat.pdf'
   ,'grido LJ50QT-H 25 km/t E17810 (e4*2002/24*2279)'      => 'typegodkendelser/LONGJIA%20Grido%20%28E17810%29%20udstedt%2014-09-2009.pdf'
   ,'grido LJ50QT-H 30 km/t E18921 (e4*2002/24*2279)'      => 'typegodkendelser/VGA%20GRIDO%20%28E18921%29%20udstedt%2010-05-2011.pdf'
   ,'grido LJ50QT-H 45 km/t E18922 (e4*2002/24*2279)'      => 'typegodkendelser/VGA%20GRIDO%20%28E18922%29%20udstedt%2010-05-2011.pdf'
   ,'mover LJ50QT-6 30 km/t E19624 (e4*2002/24*2733)'      => 'typegodkendelser/VGA%20Mover%20%28E19624%29%20udstedt%2026-01-2012.pdf'
   ,'mover LJ50QT-6 45 km/t E19623 (e4*2002/24*2733)'      => 'typegodkendelser/VGA%20Mover%20%28E19623%29%20udstedt%2026-01-2012.pdf'
   ,'versus LJ50QT-F-07 30 km/t E19813 (e4*2002/24*2281)'  => 'typegodkendelser/VGA%20Versus%20%28E19813%29%20udstedt%2014-06-2012.pdf'
   ,'versus LJ50QT-F-08 45 km/t E19814 (e4*2002/24*2281)'  => 'typegodkendelser/VGA%20Versus%20%28E19814%29%20udstedt%2014-06-2012.pdf'

   ,'versus 4T LC LJ50QT-2F 30 km/t E20557 (e4*2002/24*2985)'  => 'typegodkendelser/VGA%20%20Versus%20LC%20%28E20557%29%20udstedt%2020-06-2013.pdf'
   ,'versus 4T LC LJ50QT-2F 45 km/t E20556 (e4*2002/24*2985)'  => 'typegodkendelser/VGA%20Versus%20LC%20%28E20556%29%20udstedt%2020-06-2013.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
