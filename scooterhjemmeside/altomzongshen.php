<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "zongshen 50 cm³ knallert";
$overskrift = "zongshen";
$metadescription = "billeder, specifikationer, manualer, el diagrammer, reservedele og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'zongshenzs50q3' => array(

   'generelt'              => array(
       'model'             => ens('model', 'zongshen ZS50Q-3', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'ZS50Q-3', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '10995', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', 'rød grå', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'ZS139FMB', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '48', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '39', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '40,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '8,8', '', '', '')
      ,'tomgang'           => ens('tomgang', '1500', '400', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,1', 'kw', '4000', '')
      ,'moment'            => ens('moment', '3,0', 'nm', '3000', '')
      ,'karburator'        => ens('karburator', 'CVK50', '(hoveddyse : #95, tomgangsdyse : #10)', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'C7HSA', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1980', '', '', '')
      ,'bredde'            => ens('bredde', '690', '', '', '')
      ,'højde'             => ens('højde', '1040', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1250', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '95', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '3,5', '(hvor af 0,5 liter er reserve)', '', '')
      ,'forbrug'           => ens('forbrug', '50', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '1.40', '17', '', '')
      ,'fælgbag'           => ens('fælg', '1.60', '17', '', '')
      ,'dækfor'            => ens('dæk2', '2.50', '17', '', '')
      ,'dækbag'            => ens('dæk2', '2.75', '17', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '1,75', 'bar', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,0', 'bar', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'svinggaffel med justerbar støddæmper', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '220', 'hydraulisk', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', 'mekanisk', 'fod')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '5', '', 'CB5L-B')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '50', '', '')
      ,'sikring'           => ens('sikring', '10', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/35', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '12', '21/5', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '12', '3,4', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '12', '5', '', '')
      ,'lysinstrument'     => ens('lys', '12', '1,7', '', '')
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
      ,'kobling'           => ens('kobling', 'manuel / halvautomatisk', 'oliekølet', 'multiplade', '')
      ,'antalgear'         => ens('antalgear', '4', '', '', '')
      ,'gearratio'         => ens('gearratio', '1.gear : 11-36<br>2.gear : 16-31<br>3.gear : 18-29<br>4.gear : 20-27<br>Total gear udveksling : 3,167', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '12', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '38', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'Rør / profil stel', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LZSXCBLC', 'LZSXCBLC855160255 (stor SD525)', '', '')
      ,'udstødning'        => ens('udstødning', 'med katalysator og luftindsugning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '90', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '95', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '175-250', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '79', '3000', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'PF-Agentur', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', 'Horn : 12 volt Ac 95 dB', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', 'ja (mærket EU086)')
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
//   ,'' => ''

),'typegodkendelser' => array(
    'ZS50Q-3 45 km/t E12812 (e4*92/61*0158)' => 'typegodkendelser/Zongshen%20ZS50%20Q-3%20%28E12812%29%20udstedt%2005-08-2003.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
