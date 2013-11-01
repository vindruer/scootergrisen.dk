<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "A2B cykel-knallert med elektrisk motor";
$overskrift = "A2B";
$metadescription = "specifikationer, download og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'a2bmetro' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'A2B metro', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'A2B metro EU', '', '', '')
      ,'scootertype'       => ens('scootertype', 'UM011', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '26999', '', '', '')
      ,'hastighed'         => ens('hastighed', '25', '', '', '(20 km/t i følge brugermanual)')
      ,'farver'            => ens('farver', 'hvid sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.actiumplus.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'børsteløs gearløs 250 watt UM=11', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', 'navmotor i baghjul', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '250-500', 'watt', '', '(250 watt i følge ultramotor.com) (500 watt i følge brugermanul)')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '500-800', 'watt', '', '(500 watt i følge ultramotor.com og typegodkendelse) (800 watt i følge brugermanul)')
      ,'moment'            => ens('moment', 'op til 35', 'nm', '', '') . ' eller ' . ens('moment', 'maximum 50', 'nm', '', '(i følge brugermanual)')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1790', '', '', '')
      ,'bredde'            => ens('bredde', '695', '', '', '')
      ,'højde'             => ens('højde', '1105', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.00', '12 eller 20', '', '(12" ifølge typegodkendelse, 20" ifølge brugermanual)')
      ,'fælgbag'           => ens('fælg', '3.00', '12 eller 20', '', '(12" ifølge typegodkendelse, 20" ifølge brugermanual)')
      ,'dækfor'            => ens('dæk2', '3.00', '12 eller 20', '', '(12" ifølge typegodkendelse, 20" ifølge brugermanual)')
      ,'dækbag'            => ens('dæk2', '3.00', '12 eller 20', '', '(12" ifølge typegodkendelse, 20" ifølge brugermanual)')
      ,'dæktrykfor'        => ens('dæktryk', '2,8', 'bar', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,8', 'bar', '', '')
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
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '36', '11,4', 'lithium ion', '410 Wh (Sanyo) konfiguration : 10S6P')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '3,3', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '500', '', '(op til 80% kapacitet)')
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
      ,'oplader'           => ens('oplader', '42', '4,0', '', '(sikring på 10 ampere)')
      ,'ladetid'           => ens('ladetid', '3-4', '', '', '(100%)') . ens('ladetid', '2', '', '', '(80%)')
      ,'rækkevidde'        => ens('rækkevidde', '', 'op til 25', '', '') . ' eller ' . ens('rækkevidde', '', '32', '', '(i følge brugermanualen på flad vej uden stop)')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '7', 'udvendige', 'Shimano Alivio', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'TIG svejset 6061 aluminium', 'størrelse : 49cm (19")', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RHC', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '33,9', '', '', '(uden batteri)')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '37,2', '', '', '(med batteri)')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '140', '', '', '(10 kg på bagagebærer)')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '5', 'grader', '', '(kun ved brug af elektrisk motor)')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'HF Cykler A/S', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', 'batteriet er inde i den del af stellet som er mellem pedalerne og styret.', 'Derudover kan man købe et ekstra batteri som monteres uden bagagebæreren', 'el motor tilfører ekstra kraft ved brug af pedaler', '')

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
    'metro brugermanual'              => 'a2b_metro_brugermanual.pdf'
   ,'metro servicemanual'             => 'a2b_metro_servicemanual.pdf'

),'typegodkendelser' => array(
    'metro 25 km/t E18985 (e13*2002/24*0416)'=> 'typegodkendelser/A2B%20Metro%20%28E18985%29%20udstedt%2009-03-2011.pdf'
 
)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>