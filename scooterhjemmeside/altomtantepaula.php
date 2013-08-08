<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "tante paula elektrisk knallertløbehjul";
$overskrift = "tante paula";
$metadescription = "billeder, specifikationer, manualer, el diagrammer, reservedele og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'tantepaulaferdinandii' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'denne model kan klappes sammen og er egnet til camping', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'tante paula ferdinand II', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '10799', '', '', '')
      ,'hastighed'         => ens('hastighed', '20', '(20 km/t i følge typegodkendelse) (klassifiseres som lille knallert max 30 km/t)', '', '')
      ,'farver'            => ens('farver', 'sølv', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.tantepaula.dk/forhandlere-af-tante-paula-elektro-scooter.html', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '36', '500', '', '')
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
       'længde'            => ens('længde', '1380', '(1380 sammenklappet)', '', '')
      ,'bredde'            => ens('bredde', '550', '(350 sammenklappet)', '', '')
      ,'højde'             => ens('højde', '1250', '(690 sammenklappet)', '', '')
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
      ,'dækfor'            => ens('dæk1', '', '', '12,5', 'kenda all-weather med slange')
      ,'dækbag'            => ens('dæk1', '', '', '12,5', 'kenda all-weather med slange')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'polymer affjedret forgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'sving arm med fjeder', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'skive', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '36', '15', 'bly-gel', '(3 stk 12 volt)')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '13', '', '', '')
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
      ,'oplader'           => ens('oplader', '36', '1,670', '', '')
      ,'ladetid'           => ens('ladetid', '5-6', '', '', '(med den originale oplader)')
      ,'rækkevidde'        => ens('rækkevidde', '', 'op til 30', '', '')
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
       'stel'              => ens('stel', 'dobbelt rørstel i stål', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'WTP', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '28', '(uden batteri)', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '140', '', '', '')
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
      ,'andet'             => ens('andet', 'Skandic & Nordic Reisemobile GmbH', '', '', '')

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
      ,'begrænsandet'      => ens('begrænsandet', 'elektronisk i styreboks', '', '', '')

   )

),'tantepaulamaximilianii' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'denne model kan klappes sammen og er egnet til camping', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'tante paula maximilian II', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '15599', '', '', '')
      ,'hastighed'         => ens('hastighed', '25 og 32', '(32 km/t i følge en typegodkendelse som klassifiseres den som stor knallert max 45 km/t)', '', '')
      ,'farver'            => ens('farver', 'sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.tantepaula.dk/forhandlere-af-tante-paula-elektro-scooter.html', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'XYD-18A2', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '1000', 'DC', '')
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
       'længde'            => ens('længde', '1390', '(1390 sammenklappet)', '', '')
      ,'bredde'            => ens('bredde', '660', '(350 sammenklappet)', '', '')
      ,'højde'             => ens('højde', '1130', '(620 sammenklappet)', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.00', '8', '', 'aluminium') . ' eller ' . ens('fælg', '2.00', '8', '', '')
      ,'fælgbag'           => ens('fælg', '2.00', '8', '', 'aluminium') . ' eller ' . ens('fælg', '2.00', '8', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '12,5', '') . ' eller ' . ens('dæk1', '50', '100', '8', '')
      ,'dækbag'            => ens('dæk1', '', '', '12,5', '') . ' eller ' . ens('dæk1', '50', '100', '8', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'polymer affjedret forgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'sving arm med fjeder', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'skive', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '36', '12', 'silicium-gel', '(3 stk 12 volt)')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '14,5', '', '', '')
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
      ,'oplader'           => ens('oplader', '36', '1,670', '', '')
      ,'ladetid'           => ens('ladetid', '5-6', '', '', '(med original oplader)')
      ,'rækkevidde'        => ens('rækkevidde', '', '25-30', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'ingen', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'WTP', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '30', '(uden batteri)', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '43', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '133-163', '', '', '')
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
      ,'andet'             => ens('andet', 'Skandic & Nordic Reisemobile GmbH', '', '', '')

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
      ,'begrænsandet'      => ens('begrænsandet', 'elektronisk i styreboks', '', 'elektronisk i styreboks', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
//   ,'' => ''

),'typegodkendelser' => array(
    'ferdinand II 20 km/t E19186 (e1*2002/24*0319)'           => 'typegodkendelser/Tante%20Paula%20Ferdinand%20II%20%28E19186%29%20udstedt%2020-07-2011.pdf'
   ,'maximilian II 25 km/t E19500 (e1*2002/24*0319)'          => 'typegodkendelser/Tante%20Paula%20Maximilian%20II%20%28E19500%29%20udstedt%2011-11-2011.pdf'
   ,'maximilian II 32 km/t E19187 (e1*2002/24*0319)'          => 'typegodkendelser/Tante%20Paula%20Maximilian%20II%20%28E19187%29%20udstedt%2012-07-2011.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
