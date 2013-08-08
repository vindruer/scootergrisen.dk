<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "EVT elektriske scootere";
$overskrift = "EVT";
$metadescription = "billeder, specifikationer, manualer, el diagrammer, reservedele og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'evt168' => array(

   'generelt'              => array(
       'model'             => ens('model', 'EVT 168', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '25999', '33000', '')
      ,'hastighed'         => ens('hastighed', '45', '', '')
      ,'farver'            => ens('farver', 'blå grøn lilla orange', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.el-knallert.dk', 'http://solkongen.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '48', '1500', 'børsteløs direkte drevet', '')
      ,'volume'            => ens('volume', '', '', '')
      ,'køling'            => ens('køling', '', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1500', 'w', '755')
      ,'moment'            => ens('moment', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1650', '', '')
      ,'bredde'            => ens('bredde', '740', '', '')
      ,'højde'             => ens('højde', '1090', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1210', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2,15', '10', '')
      ,'fælgbag'           => ens('fælg', '2,15', '10', '')
      ,'dækfor'            => ens('dæk2', '3.00', '10', '', '')
      ,'dækbag'            => ens('dæk2', '3.00', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '30', 'psi', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '36', 'psi', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', 'tromle', '', '')
      ,'bremserbag'        => ens('bremser', 'skive', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '48', '30 eller 40', 'lithium', '')
      ,'batterispec2'      => ens('batterispec2', '48', '50', 'vedligeholdelsesfri', '(4 stk 12 volt 50 Ah)')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', 'max 7', '800-1000', '20.000-40.000', 'for lithium') . "<br>" . ens('batterilevetid', '1,5-2', '200-300', '', 'for bly-syre')
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
      ,'oplader'           => ens('oplader', '', '7', '400')
      ,'ladetid'           => ens('ladetid', '4,5-6', 'op til 90 % opladning', '') . "<br>" . ens('ladetid', '8-10', 'fuld opladning', '')
      ,'rækkevidde'        => 'vedligeholdelsesfri : ' . ens('rækkevidde', '50', '', 'langt indstilling : 60-70 km') . '<br>eller<br>Lithium polymer 30 Ah : ' . ens('rækkevidde', '40-50', '', '(langt indstilling : 46-57,5 km)') . '<br>eller<br>Lithium polymer 40 Ah : ' . ens('rækkevidde', '60-70', '', '(langt indstilling : 69-80,5 km)')
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
      ,'stelnummer'        => ens('stelnummer', 'RF8', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '128', 'med batterier', '')
      ,'vægttotal'         => ens('vægttotal', '230', '', '')
      ,'bæreevne'          => ens('bæreevne', '100', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '12', 'grader', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', 'Sportster A/S<br>DSR Scandinavia', '', '')
      ,'producent'         => ens('producent', 'Electric Vehicle Technologies', '', '')
      ,'andet'             => ens('andet', '2 hastigheds indstillinger :<br>hurtig-indstilling: 45 km/t<br>langt-indstilling: 35 km/t<br>der vil komme en bib lyd når der er 10% energi tilbage i batterierne, så er der cirka 5 til 8 km tilbage og kunne kører.', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', 'elektronisk styreenhed', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'evt3w' => array(

   'generelt'              => array(
       'model'             => ens('model', 'EVT 3w', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '')
      ,'varianter'         => ens('varianter', 'EVT 325 (25 km/t)', 'EVT 325L (25 km/t med lithium batterier)', 'EVT 345 (45 km/t)')
      ,'pris'              => ens('pris', '37500', '38750', '(med lithium batterier koster den 50.000,- kroner)')
      ,'hastighed'         => ens('hastighed', '25 og 45', '', '')
      ,'farver'            => ens('farver', 'sølv', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://solkongen.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', 'der sidder 2 motore i denne scooter. 1 i hvert baghjul', '')
      ,'elmotorspec'       => ens('elmotorspec', '48', '1500', 'børsteløs DC', '')
      ,'volume'            => ens('volume', '', '', '')
      ,'køling'            => ens('køling', '', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '1500', 'w', '', 'x 2 (der er 2 motorer, 1 i hvert baghjul)')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1500', 'w', '755')
      ,'moment'            => ens('moment', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1780', '', '')
      ,'bredde'            => ens('bredde', '900', '', '')
      ,'højde'             => ens('højde', '1020', '', 'uden sidespejle')
      ,'sædehøjde'         => ens('sædehøjde', '780', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1280', '', 'baghjuls afstand: 600 mm')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2,15', '10', '')
      ,'fælgbag'           => ens('fælg', '2,15', '10', '')
      ,'dækfor'            => ens('dæk2', '3,00', '10', '', '')
      ,'dækbag'            => ens('dæk2', '3,00', '10', '', '') . '<br>eller<br>' . ens('dæk1', '100', '60', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '30', 'psi', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '36', 'psi', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'hydraulisk støddæmper', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'hydraulisk støddæmper', '', '')
      ,'bremserfor'        => ens('bremser', 'tromle', '', '', '(ifølge www.sportster.dk)')
      ,'bremserbag'        => ens('bremser', 'skive', '', '', '(ifølge www.sportster.dk)')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '48', '50', 'vedligeholdelsesfrie bly-syre', '(4 stk 12 volt)')
      ,'batterispec2'      => ens('batterispec2', '48', '60', 'lithium polymer', '(4 stk 12 volt)')
      ,'batterivægt'       => ens('batterivægt', '32', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '1,5-2', '200-300', '', '')
      ,'generator'         => ens('generator', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/35', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '12', '21', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '4')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '48', '7', '400-450', 'impulslader<br>fuldopladning bruger cirka 2 Kwh (indbygget oplader)')
      ,'ladetid'           => ens('ladetid', '4,5-6', 'giver op til 90% opladning', '')
      ,'rækkevidde'        => ens('rækkevidde', '', 'EVT 325: 60', '', '') . "<br>" . ens('rækkevidde', '', 'EVT 345: 50', '', '') . "<br>" . ens('rækkevidde', '', '42-58', '', '')  . "<br>" . ens('rækkevidde', '', '40-65', '', '') . "<br>" . ens('rækkevidde', '', 'EVT 325 med vedligeholdelsesfri batterier : op til 50', '', '(ifølge www.sportster.dk)') . "<br>" . ens('rækkevidde', '', 'EVT 325 med lithium batterier : op til 90', '', '(ifølge www.sportster.dk)') . "<br>" . ens('rækkevidde', '50-70-90', 'EVT 3W med lithium polymer batterier', '', '(ifølge evt.com.tw)')
      ,'controller'        => ens('controller', '48', '120', '', 'DC PWM<br>E-Scooter intelligent controller')

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
      ,'stelnummer'        => ens('stelnummer', 'RF8', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '145', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '167', 'med batterier', '')
      ,'vægttotal'         => ens('vægttotal', '332', '', '')
      ,'bæreevne'          => ens('bæreevne', '100-165', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '25', '%', '(12 grader)')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', 'ja', 'med bakalarm', '')
      ,'importør'          => ens('importør', 'Sportster A/S', '', '')
      ,'producent'         => ens('producent', 'Electric Vehicle Technologies', '', '')
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

),'evt4000e' => array(

   'generelt'              => array(
       'model'             => ens('model', 'EVT 4000e', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '20375', '33000', '')
      ,'hastighed'         => ens('hastighed', '45', '', '')
      ,'farver'            => ens('farver', 'sølv grøn blå gul', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.el-knallert.dk', 'http://solkongen.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '48', '1500', 'børster direkte drevet', '')
      ,'volume'            => ens('volume', '', '', '')
      ,'køling'            => ens('køling', '', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1500', 'w', '', '')
      ,'moment'            => ens('moment', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1700', '', '')
      ,'bredde'            => ens('bredde', '630-640-647-650', '', '')
      ,'højde'             => ens('højde', '990-1010', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1240-1260', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2,15', '10', '')
      ,'fælgbag'           => ens('fælg', '2,15', '10', '')
      ,'dækfor'            => ens('dæk2', '3,00', '10', '', '')
      ,'dækbag'            => ens('dæk2', '3,00', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '30', 'psi', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '36', 'psi', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '')
      ,'bremserbag'        => ens('bremser', 'skive', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '48', '30-40-50', 'bly-syre', '(4 stk 12 volt)')
      ,'batterispec2'      => ens('batterispec2', '49,4', '30 eller 40', 'lithium polymer', '')
      ,'batterivægt'       => ens('batterivægt', '60', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '1,5 - 2', '200-300', '5.000', '(bly-syre)') . '<br>eller<br>' . ens('batterilevetid', 'max 7', '800-1000', '20000-40000', '(lithium polymer)')
      ,'generator'         => ens('generator', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/35', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '12', '5', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '4')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '12', '5', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '7', '400-480')
      ,'ladetid'           => ens('ladetid', '4,5-6', 'op til 90 % opladning', '')
      ,'rækkevidde'        => 'bly-syre : ' . ens('rækkevidde', '35-50', '', 'langt indstilling : 60-70 km') . '<br>eller<br>Lithium polymer 30 Ah : ' . ens('rækkevidde', '40-50', '', '(langt indstilling : 46-57,5 km)') . '<br>eller<br>Lithium polymer 40 Ah : ' . ens('rækkevidde', '60-70', '', '(langt indstilling : 69-80,5 km)')
      ,'controller'        => ens('controller', '', '', '', 'PWM Pulse Width Modulation<br>2 funktioner - Power og Economic.<br>Power for maksimum hastighed.<br>Economic for længere rækkevidde<br>Overophednings beskyttelse (slukker hvis den bliver for varm) og over current protection')

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
      ,'stelnummer'        => ens('stelnummer', 'RF8', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '127', 'med batterier', '')
      ,'vægttotal'         => ens('vægttotal', '280', '', '')
      ,'bæreevne'          => ens('bæreevne', '100', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '14', 'grader', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', 'Sportster A/S<br>DSR Scandinavia', '', '')
      ,'producent'         => ens('producent', 'Electric Vehicle Technologies', '', '')
      ,'andet'             => ens('andet', '2 hastigheds indstillinger :<br>hurtig-indstilling: 45 km<br>langt-indstilling: 35 km', '', '')

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
    '168 brugermanual'                  => 'evt168_brugermanual.pdf'
   ,'168 servicemanual'                 => 'evt168_servicemanual.pdf'
   ,'3w brugermanual'                   => 'evt3w_brugermanual.pdf'
   ,'4000e brugermanual'                => 'evt4000e_brugermanual.pdf'
   ,'4000e servicemanual'               => 'evt4000e_servicemanual.pdf'
   ,'electrification kits'              => 'evt_electrificationkits.pdf'

),'typegodkendelser' => array(
    '168 45 km/t E13425 (e4*92/61*0150)'       => 'typegodkendelser/EVT%20168%20%28E13425%29%20udstedt%2017-05-2004.pdf'
   ,'168 45 km/t E15834 (e4*92/61*0150)'       => 'typegodkendelser/EVT%20168%20%28E15834%29%20udstedt%2006-10-2006.pdf'
   ,'3w 45 km/t E14556 (e4*2002/24*0539)'      => 'typegodkendelser/EVT%20345%20%28E14556%29%20udstedt%2004-10-2005.pdf'
   ,'4000e 45 km/t E13424 (e4*92/61*0111)'     => 'typegodkendelser/EVT%204000E%20%28E13424%29%20udstedt%2017-05-2004.pdf'
   ,'4000e 45 km/t E15833 (e4*92/61*0111)'     => 'typegodkendelser/EVT%204000E%20%28E15833%29%20udstedt%2006-10-2006.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
