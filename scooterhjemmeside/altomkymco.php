<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "kymco scootere med 50 cm³ motor";
$overskrift = "kymco";
$metadescription = "specifikationer, download og typegodkendelser";

$setup['sideikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'kymcoagility' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'kymco agility', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'CK50QT-5', '', '', '')
      ,'varianter'         => ens('varianter', 'kymco agility sport (forreste blinklys er integreret i skjoldet)', 'kymco agility race (sjove farver)', '', '')
      ,'pris'              => ens('pris', '8995', '10995', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort sølv-sort blå-sølv-sort rød-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.waypoint.dk/sw1349.asp', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'KG10SA', '', '', '(KG10SA er måske 45 km/t, KG10SB er måske 25 km/t)')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '39', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,4', '', '', '')
      ,'ventiler'          => ens('ventiler', '2', 'OHC', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '0,04 - 0,08', '0,04 - 0,08', '', '')
      ,'kompression'       => ens('kompression', '11', '', '', '')
      ,'tomgang'           => ens('tomgang', '1700-1900', '100', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,4', 'kw', '7500', '')
      ,'moment'            => ens('moment', '3,2', 'nm', '7000', '')
      ,'karburator'        => ens('karburator', 'CVK', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK C7HSA', 'NGK CR7HSA', 'Champion P-RZ9HC', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1830', '', '', '')
      ,'bredde'            => ens('bredde', '690', '', '', '')
      ,'højde'             => ens('højde', '1130', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '112', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1325', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '92', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '5', '', '', '')
      ,'forbrug'           => ens('forbrug', '50', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.00', '12', '', '')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '56J')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '56J')
      ,'dæktrykfor'        => ens('dæktryk', '1,75', 'kgcm2', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,0', 'kgcm2', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '4', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '7', '', '', '')
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
       'motor'             => ens('olie', '15W-40', 'API : SF', '0,85', '0,7')
      ,'gear'              => ens('olie', '', '', '0,11 - 0,12', '0,10')
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
      ,'stelnummer'        => ens('stelnummer', 'RFB', 'LC2U60030A1 LC2U6003081200 LC2U6003091200 LC2U6006071200777 (lille knallert)', 'LC2U6003091', 'LC2U6003061200849')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '92,5', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '150', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'Nellemann & Drewsen ApS', '', '', '')
      ,'producent'         => ens('producent', 'Changzhou Kwang Yang Motor Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', 'hjelmholder og plads til integralhjelm under sædet', 'sædet til bagpassageren kan vippes op så det kan bruges som ryglæn', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '10,3 mm bøsning Ml. variatorhalvdele', '6,5 mm bøsning Ml. variatorhalvdele', '')
      ,'begrænstænding'    => ens('begrænstænding', '', 'ja', '', 'sav cirka 4 mm midt i enden af CDI boksen. Du skal save en lille ledning over.<br>' . visbilled('1', 'billed0165.jpg', 'kymco agility CDI boks ubegrænset sav tråd over') . '<br>'.ahref('http://www.youtube.com/watch?v=Nm-xNiczM58', 'Video hvor der bliver savet i CDI boksen').'')
      ,'begrænskarburator' => ens('begrænskarburator', '', 'standard begrænset hoveddyse: 80 / ubegrænset hoveddyse : 85', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', 'standard : 6,5 gram', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', 'indsnævring i luftkanal mellem luftfilterkasse og karburator')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 8 og 9 i stelnummeret er 30 el. 60 og angiver den maksimale hastighed = 30 km/t<br>Tegn nr. 8 i stelnummeret = 3 eller 6 der angiver maksimal hastighed = 30 km/t.', 'Tegn nr. 8 og 9 i stelnummeret = 00 der angiver maksimal hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'kymcoagilitycarry' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', 'jeg har læst at denne model er baseret på Kymco Agility R12 (som ikke har været solgt i danmark)', 'på nogen billeder er blinklysglasne orange og de sidder bagerst under ladet og på andre billeder er blinklysglasne klare og sidder forrest under ladet. På nogen billeder er der slet ikke noget lad forrest på scooteren også bruge de 2 normale forlygteglas', 'carry har bagagebære foran (det har delivery ikke) prisen oplyses hos kymco.dk til 10.995')

   ),'generelt'            => array(
       'model'             => ens('model', 'kymco agility carry', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '10995', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', 'hvid-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.waypoint.dk/sw1349.asp', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'KG10', '', '', '(måske KG10DB)')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '39', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,4', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '11', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,4', 'kw', '', '(i følge 45 km/t typegodkendelse)') . ens('maxeffektogheste', '3,7', 'hk', '7500', '(i følge 45 km/t kymco.dk)')
      ,'moment'            => ens('moment', '3,5', 'nm', '7000', '(ifølge 45 km/t kymco.dk)')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1935', '', '', '(i følge typegodkendelse)') . ens('længde', '1925', '', '', '(i følge kymco.dk)')
      ,'bredde'            => ens('bredde', '685-690', '', '', '')
      ,'højde'             => ens('højde', '1130', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '800-810', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1325-1350', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '5', '', '', '(i følge kymco)')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.00', '12', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', 'aluminium')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopisk', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'unit swing', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '200', '', '')
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
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', 'halogen')
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
       'transmissiontype'  => ens('transmissiontype', 'cvt', '', '', '')
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
      ,'vægttør'           => ens('vægttør', '105,5', '', '', '(i følge kymco)') . ens('vægttør', '106', '', '', '(i følge kymco.dk)')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '106', '', '', '(i følge 45 km/t typegodkendelse)')
      ,'vægttotal'         => ens('vægttotal', '212', '', '', '(i følge 45 km/t typegodkendelse)')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '71', '3750', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '6,5 mm afstandsbøsning  Ml. variatorhalvdele', '')
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

),'kymcoagilitydelivery' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'Delivery er ligesom Carry bortset fra der ikke er bagagebære foran på delivery og anderledes forlygte. Ellers skulle de vist være ens', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'kymco agility delivery', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '10995', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', 'hvid-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.waypoint.dk/sw1349.asp', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'KG10', '', '', '(måske KG10DD)')
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
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,4', 'kw', '', '(i følge 45 km/t typegodkendelse)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1935', '', '', '(i følge typegodkendelse)')
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
       'fælgfor'           => ens('fælg', '3.00', '12', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', 'aluminium')
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
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '102', '', '', '(i følge kymco.dk)')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '106', '', '', '(i følge 45 km/t typegodkendelse)')
      ,'vægttotal'         => ens('vægttotal', '227', '', '', '(i følge 45 km/t typegodkendelse)')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '71', '3750', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '6,5 mm afstandsbøsning  Ml. variatorhalvdele', '')
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

),'kymcok12' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'kymco k 12', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'SC10AE(DM)', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'RFBSC10AE46000188 S08627-01', 'RFBSC10AE46000428 S08627-01', 'RFBSC10AE46000502 S08627-01', 'RFBSC10AE46000196 (OS853)')
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

),'kymcolike' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'Kymco Like', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'Kymco Like 50 4T', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '10999', '11995', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', 'lyseblå beige hvid', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.waypoint.dk/sw1349.asp', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'KG10', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '39', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,4', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '11', '', '', '')
      ,'tomgang'           => ens('tomgang', '2000', '100', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,2', 'kw', '', '(i følge 30 km/t typegodkendelse)') . '<br>' . ens('maxeffektogheste', '2,6', 'hk', '7500', '(limit) (i følge kymco hjemmeside)') . '<br>' . ens('maxeffektogheste', '2,8', 'kw', '8500', '(i følge kymco hjemmeside)') . '<br>' . ens('maxeffektogheste', '3,6', 'hk', '7500', '(i følge kymco.dk)')
      ,'moment'            => ens('moment', '0,4', 'kgm', '7000', '(i følge kymco hjemmeside)') . '<br>' . ens('moment', '3,43', 'nm', '7000', '(i følge kymco hjemmeside)') . '<br>' . ens('moment', '3,4', 'nm', '7000', '(i følge kymco.dk)')
      ,'karburator'        => ens('karburator', 'CVK', '16', '', 'LGR3 (hoveddyse : #78 ifølge servicemanual for 50 cc)')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1940', '', '', '(i følge kymco)') . ens('længde', '1915', '', '', '(i følge typegodkendelse og scoot.dk og kymco.dk)')
      ,'bredde'            => ens('bredde', '695', '', '', '(i følge kymco)') . ens('bredde', '690', '', '', '(i følge typegodkendelse og scoot.dk og kymco.dk)')
      ,'højde'             => ens('højde', '1130', '', '', '') . ens('højde', '1115', '', '', '(i følge scoot.dk)') . ens('højde', '1120', '', '', '(i følge kymco.dk)')
      ,'sædehøjde'         => ens('sædehøjde', '775-780', '', '', '(begge tal fra kymco)')
      ,'frihøjde'          => ens('frihøjde', '145', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1320', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '7', '', '', '(ifølge kymco.dk)') . ens('benzintank', '6', '', '', '(i følge scoot.dk)')
      ,'forbrug'           => ens('forbrug', '47', '', '', '(i følge scoot.dk)')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50', '12', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', 'aluminium')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', 'nylon slangeløst')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', 'nylon slangeløst')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskop', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'under swing', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '220', '', '2 stempler')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '6', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '10', '', '', 'på rød ledning') . ens('sikring', '7', '', '', 'på sort ledning') . ens('sikring', '0,8', '', '', '(DC power socket, må være cigerettænder stik, på sort ledning)')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', 'DC', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/35', '', 'HS1 halogen')
      ,'lysbagbremse'      => ens('lys', '12', '5/21', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '12', '5', '2', '')
      ,'lysblink'          => ens('lys', '12', '10', '4', '')
      ,'lyskontrolblink'   => ens('lys', '12', '3,4', '2', '')
      ,'lyskontrollangt'   => ens('lys', '12', '1,7', '1', '')
      ,'lysnummerplade'    => ens('lys', '12', '5', '', '')
      ,'lysinstrument'     => ens('lys', '12', '1,7', '2', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '90', '', '0,21', '0,181')
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
       'stel'              => ens('stel', 'pipe under bone', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '')
      ,'vægttør'           => ens('vægttør', '101', '', '', '') . ens('vægttør', '99,8', '', '', '(i følge scoot.dk)')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '106', '', '', '(i følge 30 km/t typegodkendelse)')
      ,'vægttotal'         => ens('vægttotal', '256', '', '', '') . ens('vægttotal', '220', '', '', '(i følge scoot.dk')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '77', '3500', '', '(i følge 30 km/t typegodkendelse)')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'Nellemann & Drewsen ApS', '', '', '')
      ,'producent'         => ens('producent', 'Kwang Yang Motor Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', 'handskerum', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '9 mm afstandsbøsning Ml. variatorhalvdele', '', '')
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

),'kymcopeople' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'kymco people', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'B1', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '12995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sølv', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.waypoint.dk/sw1349.asp', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'BA10A eller BA10D', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '5,2', 'hk', '7000', '(ifølge kymco.dk)')
      ,'moment'            => ens('moment', '5,5', 'nm', '6500', '(ifølge 45 km/t kymco.dk)')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1850', '', '', '')
      ,'bredde'            => ens('bredde', '685', '', '', '')
      ,'højde'             => ens('højde', '1075', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '5,8', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '1.60', '16', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '2.15', '16', '', 'aluminium')
      ,'dækfor'            => ens('dæk1', '80', '80', '16', '')
      ,'dækbag'            => ens('dæk1', '100', '80', '16', '')
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
       'transmissiontype'  => ens('transmissiontype', 'cvt', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFBB1004091000', 'RFBB10040A1000 (lille)', 'RFBB1__20 (E13437)', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '95,5', '', '', '')
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
       'begrænstransmis'   => ens('begrænstransmis', '', 'Afstandsbøsning mellem forreste remskivehalvdele med brystbredde 11,0 mm.', 'afstandsskive mellem forreste remskivehalvdele med en tykkelse på 8,0 mm.', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', 'Begrænset løft af stempel i karburator, ved at der er monteret en bøsning over stempel ø13 x 10 mm.', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', 'Resonatorrør påsvejset forreste udstødningsrør ø23 x 200 mm.', 'Resonatorrør påsvejst forreste udstødningsrør ø25 x 270 mm eller ø23 x 200 mm', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 8 og 9 i stelnummeret er 40 og angiver den maksimale hastighed = 30 km/t', 'tegn nr 8 og 9 (2 og 0) i stelnummeret (VIN-mærkning) angiver version og hastighed, 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'kymcosuper84t' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'Se også '.ahref('specielt_kymcosuper8.php', 'Specielt for Kymco Super 8 4T').'.', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'kymco super 8 4T', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'CK50QT-6', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '12495', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort rød-sort hvid-rød-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.waypoint.dk/sw1349.asp', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'KL10', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '39', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,4', '', '', '')
      ,'ventiler'          => ens('ventiler', '2', 'SOHC', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '0,04 - 0,08', '0,04 - 0,08', '', '')
      ,'kompression'       => ens('kompression', '11', '(tryk : 14-18 kg/cm²)', '', '')
      ,'tomgang'           => ens('tomgang', '1900', '100', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,4', 'kw', '7500', '') . ens('maxeffektogheste', '3,7', 'hk', '7500', '(ifølge kymco.dk)')
      ,'moment'            => ens('moment', '3,2', 'nm', '7000', '') . ens('moment', '3,5', 'nm', '7000', '(ifølge kymco.dk)')
      ,'karburator'        => ens('karburator', '18,5 mm CVK', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'tvunget smøring og våd sump', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK CR7HSA', 'Champion P-RZ9HC', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1940-1955', '', '', '')
      ,'bredde'            => ens('bredde', '745-750', '', '', '')
      ,'højde'             => ens('højde', '1150-1220', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '112', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1365', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '92', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '5,5', '', '', '') . ens('benzintank', '6', '', '', '(ifølge kymco.dk)')
      ,'forbrug'           => ens('forbrug', '36-50', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.50', '14', '', '')
      ,'fælgbag'           => ens('fælg', '3.00', '14', '', '')
      ,'dækfor'            => ens('dæk1', '100', '80', '14', 'Cheng Shin 48L slangeløst')
      ,'dækbag'            => ens('dæk1', '120', '80', '14', 'Cheng Shin 58L slangeløst')
      ,'dæktrykfor'        => ens('dæktryk', '1,75', 'kgcm2', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,0', 'kgcm2', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '80', '')
      ,'affjedringbag'     => ens('affjedringbag', 'svingarm med 2 justerbare støddæmpere', '', '82', '')
      ,'bremserfor'        => ens('bremser', 'skive', '250', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '27', 'grader', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '45', '', '', '')
      ,'venderadius'       => ens('venderadius', '1,99', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '7', 'vedligeholdelsesfrit', 'GTX7A-BS')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '144', '', '')
      ,'sikring'           => ens('sikring', '7 og 7 og 10', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/35', '', 'halogen')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '12', '5', '2')
      ,'lysblink'          => ens('lys', '12', '10', '2')
      ,'lyskontrolblink'   => ens('lys', '12', '3,4', '2')
      ,'lyskontrollangt'   => ens('lys', '12', '1,7', '')
      ,'lysnummerplade'    => ens('lys', '12', '5', '')
      ,'lysinstrument'     => ens('lys', '12', '1,7', '2')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '10W-40 eller 15W-40', 'API : SG / SF', '0,85', '0,7')
      ,'gear'              => ens('olie', '90', '', '0,2', '0,18') . "<br>Der står i manualen at man skal fylde op til kanten af hullet men dette er mere end 0,18 liter så jeg skrev til Nellemann og Drewsen ApS som importere Kymco og de skrev tilbage at der skal fyldes 0,18 liter olie i så det med at man skal fylde op til kanten af hullet gælder ikke på denne model"
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'cvt', '', '', '')
      ,'kobling'           => ens('kobling', 'automatisk', 'centrifugal', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', 'Primær : 0,8-3,1<br>Sekundær : 11,05', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'under bone i stål', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LC2U7010082', 'LC2U7010072', 'LC2U700009', 'LC2U70400A1 LC2U7040091000, LC2U70100A2600 LC2U7010092600 LC2U70100B2600 (lille knallert)')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '106', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '112', 'ifølge typegodkendelsen', '', '')
      ,'vægttotal'         => ens('vægttotal', '262', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'vådt papir element', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'DOT 4', '', '', '')
      ,'støj'              => ens('støj', '77', '3750', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'Nellemann & Drewsen ApS', '', '', '')
      ,'producent'         => ens('producent', 'Changzhou Kwang Yang Motor Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '9,0 mm bred forhøjning på gliderør mellem forreste remskiver', '4,5 mm bred forhøjning på gliderør mellem forreste remskiver', '')
      ,'begrænstænding'    => ens('begrænstænding', '', 'ja', '', 'begrænsning kan fjernes ved at afmonter en af de lilla/røde ledninger på CDI stikket.<br>' . visbilled('1', 'billed0166.jpg', 'Kymco Super 8 4T CDI stik ubegrænset'))
      ,'begrænskarburator' => ens('begrænskarburator', '', 'standard begrænset hoveddyse : K80 / ubegrænset hoveddyse : K82', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', 'tragt på indersiden af luftfilterkassen :<br>' . visbilled('1', 'billed2323.jpg', 'Kymco Super 8 4T tragt i luftfilterkasse'), '', false)
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', 'standard : 6,5 gram', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 7 er 1 og angiver den maksimale hastighed = 30 km/t.<br>Tegn 7 er "1" / "4" og angiver den maksimale hastighed = 30 km/t.', 'Tegn 7 er "0" / "3" og angiver den maksimale hastighed = 45 km/t.<br>Tegn 8 og 9 er "0" og angiver den maksimale hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', 'Standard koblingstrykfjeder har blå malingsplet på', '', '')

   )

),'kymcosuper82t' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'Billeder er af en 4 takt. Mangler et korrekt billede<br>'.ahref('http://kymco.dk/Default.aspx?ID=27').'<br>'.ahref('http://www.kymco.com/product/overview.asp?MotorCTID=B5EF6E8B-B72D-4FF8-AEF7-93E9F9824668').'', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'kymco super 8 2T', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '12995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', 'hvid-sort rød-hvid-sort blå-hvid-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.waypoint.dk/sw1349.asp', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'KF10AA', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,5', 'kw', '', '(ifølge 30 km/t typegodkendelse)') . ens('maxeffektogheste', '3,4', 'hk', '6500', '(ifølge kymco.dk)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1955', '', '', '')
      ,'bredde'            => ens('bredde', '750', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '6', '', '', '(i følge kymco.dk)')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.00', '14', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '3.00', '14', '', 'aluminium')
      ,'dækfor'            => ens('dæk1', '120', '70', '14', '(i følge 30 km/t typegodkendelse)') . ens('dæk1', '100', '80', '14', '(i følge kymco.dk)')
      ,'dækbag'            => ens('dæk1', '120', '80', '14', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '250', '', '')
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
      ,'lysfor'            => ens('lys', '', '', '', 'halogen')
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
       'transmissiontype'  => ens('transmissiontype', 'cvt', '', '', '')
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
       'begrænstransmis'   => ens('begrænstransmis', '', '11 mm bøsning Ml. variatorhalvdele', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn nr. 8 og 9 i stelnummeret = 1/0 der angiver maksimal hastighed = 30 km/t.', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'kymcosuper9' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'kymco super 9', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'S1', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '13995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.waypoint.dk/sw1349.asp', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'SH10A (væskekølet) SH10B (væskekølet) SF10 SF10E SF10F (luftkølet) SF10L', '', '', '')
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
      ,'stelnummer'        => ens('stelnummer', 'RFBS1013051000', '', '', '')
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
       'begrænstransmis'   => ens('begrænstransmis', '', 'Afstandsbøsning mellem forreste remskivehalvdele med brystbredde 10,0 mm.', 'Afstandsskive mellem forreste remskivehalvdele med en tykkelse på 7,0 eller 8,0 eller 9,0 mm.', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', 'Begrænset løft af stempel i karburator, ved at der er monteret en bøsning over stempel ø13 x 10 mm.', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', 'Resonatorrør påsvejset forreste udstødningsrør ø23 x 270 mm.', 'Resonatorrør påsvejst forreste udstødningsrør ø 22 mm, længde 155 eller 270 eller 300 mm.', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'kymcovitality' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'kymco vitality', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'U3', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '9995', '10995', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort hvid', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.waypoint.dk/sw1349.asp', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'SF10', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '4,0', 'hk', '7000', '(ifølge kymco.dk)')
      ,'moment'            => ens('moment', '4,5', 'nm', '6000', '(ifølge 45 km/t kymco.dk)')
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
      ,'benzintank'        => ens('benzintank', '5,5', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.00', '12', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', 'aluminium')
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
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', 'halogen')
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
       'transmissiontype'  => ens('transmissiontype', 'cvt', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFBU30050A1000 RFBU30050A1000 (lille)', 'RFBU30050A1000354 (Lille knallert E18007-01)', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '97', '', '', '')
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
       'begrænstransmis'   => ens('begrænstransmis', '', '11 mm afstandsbøsning Ml. forr. variatorhalvdele', '8 mm afstandsbøsning Ml. forr. variatorhalvdele<br>Afstandsbøsning med afstandsstykke på 4,5 mm mellem forreste remskivehalvdele.', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn nummer 8 og 9 er "5" og "0", og angiver den maksimale hastighed = 30 km/t.', 'Tegn nummer 8 og 9 er "00" og angiver den maksimale hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'agility brugermanual'              => 'kymco_agility_brugermanual.pdf'
   ,'agility servicemanual'             => 'kymco_agility_servicemanual.pdf'
   ,'agility reservedele'               => 'kymco_agility_reservedele.pdf'
   ,'agility el diagram'                => 'kymco_agility_eldiagram.pdf'
   ,'like eldiagram'                    => 'kymco_like_eldiagram.pdf'
   ,'like servicemanual'                => 'kymco_like_servicemanual.pdf'
   ,'people servicemanual'              => 'kymco_people_servicemanual.pdf'
   ,'super 8 4T brugermanual'           => 'kymco_super8_4t_brugermanual.pdf'
   ,'super 8 4T servicemanual'          => 'kymco_super8_4t_servicemanual.pdf'
   ,'super 8 4T reservedele'            => 'kymco_super8_4t_reservedele.pdf'
   ,'super 8 4T el diagram'             => 'kymco_super8_4t_eldiagram.pdf'
   ,'super 8 2T servicemanual'          => 'kymco_super8_2t_servicemanual.pdf'
   ,'super 9 servicemanual'             => 'kymco_super9_servicemanual.pdf'
   ,'super 9 reservedele'               => 'kymco_super9_reservedele.pdf'
   ,'vitality servicemanual'            => 'kymco_vitality_servicemanual.pdf'
   ,'vitality reservedele'              => 'kymco_vitality_reservedele.pdf'
   ,'ZX servicemanual'                  => 'kymco_zx_servicemanual.pdf'
   ,'kymco katalog 2012'                => 'kymco_katalog_2012.pdf'
   ,'kymco VIN (stelnummer) forklaring' => 'kymco_vin_forklaring.jpg'

),'typegodkendelser' => array(
    'agility 30 km/t E15380 (e4*2002/24*403)'        => 'typegodkendelser/Kymco%20Agility%20%28E15380%29%20udstedt%2016-05-2006.pdf'
   ,'agility 45 km/t E14297 (e4*2002/24*0403)'       => 'typegodkendelser/Kymco%20Agility%20%28E14297%29%20udstedt%2026-05-2005.pdf'
   ,'agility 45 km/t E14297 (e4*2002/24*0403) 2'     => 'typegodkendelser/Kymco%20Agility%20%28E14297%29%20udstedt%2026-05-2005_2.pdf'
   ,'agility 30 km/t E20449 (e4*2002/24*0403) 2013'  => 'typegodkendelser/Kymco%20Agility%2050%20%28E20449%29%20udstedt%2030-04-2013.pdf'
   ,'agility 45 km/t E20450 (e4*2002/24*0403) 2013'  => 'typegodkendelser/Kymco%20Agility%2050%20%28E20450%29%20udstedt%2030-04-2013.pdf'
   ,'agility Carry 45 km/t E19686 (e4*2002/24*2602)'     => 'typegodkendelser/Kymco%20Agility%20Carry%20%28E19686%29%20udstedt%2022-03-2012.pdf'
   ,'agility Delivery 45 km/t E19687 (e4*2002/24*2602)'  => 'typegodkendelser/Kymco%20Agility%20Delivery%20%28E19687%29%20udstedt%2022-03-2012.pdf'
   ,'like 30 km/t E19643 (e4*2002/24*2230)'          => 'typegodkendelser/Kymco%20Like%2050%20%28E19643%29%20udstedt%2021-02-2012.pdf'
   ,'super 8 4T 30 km/t E16491 (e4*2002/24*1464)'       => 'typegodkendelser/Kymco%20Super%208%20%28E16491%29%20udstedt%2007-08-2007.pdf'
   ,'super 8 4T 30 km/t E17686 (e4*2002/24*1464)'       => 'typegodkendelser/Kymco%20Super%208%20%28E17686%29%20udstedt%2019-06-2009.pdf'
   ,'super 8 4T 45 km/t E16472 (e4*2002/24*1464) 2'     => 'typegodkendelser/Kymco%20Super%208%20%28E16472%29%20udstedt%2015-06-2007.pdf'
   ,'super 8 4T 45 km/t E17687 (e4*2002/24*1464) 2'     => 'typegodkendelser/Kymco%20Super%208%20%28E17687%29%20udstedt%2019-06-2009.pdf'
   ,'super 8 2T (KF10AA) 30 km/t E20670 (e4*2002/24*2143)'     => 'typegodkendelser/Kymco%20Super%208%2050%20%28E20670%29%20udstedt%2029-08-2013.pdf'
   ,'super 9 S1 (SF10L) 30 km/t typegodkendelse E15383 (e4*92/61*0074)'     => 'typegodkendelser/Kymco%20Super%209%20%28E15383%29%20udstedt%2016-05-2006.pdf'
   ,'super 9 S1 (SH10A SH10B SF10) 45 km/t typegodkendelse E12187 (e4*92/61*0074)'     => 'typegodkendelser/Kymco%20Super%209%20%28E12187%29%20udstedt%2012-09-2002.pdf'
   ,'super 9 S1 (SF10F) 45 km/t typegodkendelse E13539 (e4*92/61*0074)'     => 'typegodkendelser/Kymco%20Super%209%20%28E13539%29%20udstedt%2007-07-2004.pdf'
   ,'super 9 S1 (SF10F SF10E) 45 km/t typegodkendelse E14691 (e4*92/61*0074)'     => 'typegodkendelser/Kymco%20Super%209%20%28E14691%29%20udstedt%2025-11-2005.pdf'
   ,'vitality U3 45 km/t typegodkendelse E17725 (e4*2002/24*0283)'                => 'typegodkendelser/Kymco%20Vitality%20%28E17725%29%20udstedt%2013-07-2009.pdf'
   ,'vitality U3 30 km/t typegodkendelse E18007 (e4*2002/24*0283)'                => 'typegodkendelser/Kymco%20Vitality%20%28E18007%29%20udstedt%2016-02-2010.pdf'
   ,'people 45 km/t typegodkendelse E11957 (e4*92/61*0013)'                => 'typegodkendelser/Kymco%20People%20%28E11957%29%20udstedt%2022-04-2002.pdf'
   ,'people 45 km/t typegodkendelse E13437 (e4*92/61*0013)'                => 'typegodkendelser/Kymco%20People%2050%20%28E13437%29%20udstedt%2024-05-2004.pdf'
   ,'people 30 km/t typegodkendelse E15382 (e4*92/61*0013/A)'              => 'typegodkendelser/Kymco%20People%2050%20%28E15382%29%20udstedt%2016-05-2006.pdf'
//   ,'K12 typegodkendelse S8627 (tom)'              => 'typegodkendelser/Kymco%20K12%20%28S8627%29%20udstedt%2017-10-1997.pdf'

   ,'ZX Fever 45 km/t typegodkendelse E11808 (e1*92/61*00080)'              => 'typegodkendelser/Kymco%20Fever%20ZX%20%28E11808%29%20udstedt%2005-02-2002.pdf'
   ,'ZX Fever 45 km/t typegodkendelse E13439 (e1*92/61*00080)'              => 'typegodkendelser/Kymco%20ZX50%20Fever%20%28E13439%29%20udstedt%2025-05-2004.pdf'
   ,'ZX Fever 30 km/t typegodkendelse E15381 (e1*92/61*00080/C)'              => 'typegodkendelser/Kymco%20ZX50%20Fever%20%28E15381%29%20udstedt%2016-05-2006.pdf'
/*
ZX Fever
30:
Afstandsbøsning mellem forreste remskivehalvdele med brystbredde 10,0 mm.
Resonatorrør påsvejset forreste udstødningsrør ø23 x 200 mm.
Begrænset løft af stempel i karburator, ved at der er monteret en bøsning over stemplet ø13 x 10 mm.
Udstødningsrøret indvendige diameter ved flange er reduceret til ø12 mm.
Tegn 8 og 9 i stelnummeret er AA og angiver den maksimale hastighed = 30 km/t
45:
RFBSC10AS
SC10AS
elektronisk TCI tændingsmodul mærket SUTAI CKCXJK
afstandsskive mellem forreste variomatic halvdele med en tykkelse på 7,0 mm.
45:
RFBSC10AW
tegn nr 8 og 9 (A og W) i stelnummeret (VIN-mærkning) angiver version og hastighed, 45 km/t.
Resonatorrør påsvejst forreste udstødningsrør ø23 x 200 mm
afstandsbøsning mellem forreste remskivehalvdele med en tykkelse på 6,5 mm
forsnævring i forreste udstødningsrør ved monteringsflangen, med en lysning på ø 12,0 mm.
*/

   ,'Kymco B&W 50 S8 45 km/t E12182 (e4*92/61*0126)'            => 'typegodkendelser/Kymco%20B%26W%2050%20%28E12182%29%20udstedt%2010-09-2002.pdf'
   ,'Kymco Cobra SF Racer Exclusive Cross 45 km/t E12179 (e4*92/61*0103)'            => 'typegodkendelser/Kymco%20Cobra%20%28E12179%29%20udstedt%2010-09-2002.pdf'
   ,'Kymco Filly LX S2 45 km/t E12163 (e4*92/61*0104)'            => 'typegodkendelser/Kymco%20Filly%20LX%20%28E12163%29%20udstedt%2004-09-2002.pdf'
   ,'Kymco YUP50 S6 45 km/t E11733 (e4*92/61*0112)'            => 'typegodkendelser/Kymco%20YUP50%20%28E11733%29%20udstedt%2021-12-2001.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
