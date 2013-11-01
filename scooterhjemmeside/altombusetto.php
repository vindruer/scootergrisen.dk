<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "busetto scooter med elektrisk motor";
$overskrift = "busetto";
$metadescription = "specifikationer, download og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'busettoecc800' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'skulle sikkert have heddet Busetto EEC-800 i stedet for Busetto ECC-800', 'fås muligvis også i en 350 watt udgave', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'busetto ECC-800', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'lynx 388-2', 'ABAT ZQTD-388-2', '', '')
      ,'scootertype'       => ens('scootertype', 'ZQTD-388-2', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '8495', '9995', '', '')
      ,'hastighed'         => ens('hastighed', '25 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.clands-shop.dk/product.asp?product=735', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'ABAT', 'WEQ800', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '48', '800', 'børsteløs jævnstrøm', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '800', 'w', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1600', 'w', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1900', '', '', '')
      ,'bredde'            => ens('bredde', '680', '', '', '')
      ,'højde'             => ens('højde', '1100', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1250', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk2', '3,0', '18', '', 'ifølge harald-nyborg.dk')
      ,'dækbag'            => ens('dæk2', '3,0', '18', '', 'ifølge harald-nyborg.dk') . '<br>' . ens('dæk1', '80', '90', '14', 'Celimo nylon (aflæst på dæk)')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', 'hydraulisk', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', 'mekanisk', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '22', 'lithium LiFePO4 aftageligt', 'I brugermanualen står at den også kan fås med 15 Ah') . '<br>' . visbilled('1', 'billed2456.jpg', 'busetto ECC-800 batteri')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '2-3', 'cirka 1500', '', 'ifølge brugermanual og harald-nyborg.dk')
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
      ,'oplader'           => ens('oplader', '54,6', '2, 3 eller 5', '', '')
      ,'ladetid'           => ens('ladetid', '3-11', 'afhængig af lader og batteristørrelse', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '55-60', '', '(ifølge harald-nyborg.dk)')
      ,'controller'        => ens('controller', '', '', '', 'WZK483515-01')

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
      ,'stelnummer'        => ens('stelnummer', 'LFYTBFZ14A1 (set på 45 km/t hos harald nyborg måske står der LPY ?)', 'LFYTB3Z1230 LFYTBFZ15A1000 (BUSETTO ZQTD-388-2 2LB)', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '45', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '150', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '105', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'DOT 3 eller 4', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', 'Cixi Konced Motorcycle Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', 'Maksimum spænding : 54,6 volt', 'Minimum spænding : 42 volt', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', 'controller kan gøres ubegrænset ved at tage et stik ud på controlleren også skulle en 25 km/t køre cirka 50 km/t', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', 'Elektronisk i motor (ifølge typegodkendelse) men der menes sikkert controlleren', '', '', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'busetto ecc-800 brugermanual'               => 'busettoecc800_brugermanual.pdf'
   ,'busetto ecc-800 eldiagram'                  => 'busettoecc800_eldiagram.jpg'
   ,'busetto ecc-800 samleanvisning'             => 'busettoecc800_samleanvisning.pdf'

),'typegodkendelser' => array(
    'ZQTD-388-2 25 km/t E18267 (e4*2002/24*2531)'         => 'typegodkendelser/Busetto%20ZQTD-388-2%20%28E18267%29%20udstedt%2002-06-2010.pdf'
   ,'ZQTD-388-2 45 km/t E18266 (e4*2002/24*2531)'         => 'typegodkendelser/Busetto%20ZQTD-388-2%20%28E18266%29%20udstedt%2002-06-2010.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
