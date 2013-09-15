<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "e-ton elektrisk scooter";
$overskrift = "e-ton";
$metadescription = "billeder, specifikationer, manualer, el diagrammer, reservedele og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_eton.png';

$databasecenter = array(

'etonemo' => array(

   'generelt'              => array(
       'model'             => ens('model', 'e-ton e-mo', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'matra e-mo', '', '', '')
      ,'scootertype'       => ens('scootertype', 'EV3A', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '14995', '', '', '')
      ,'hastighed'         => ens('hastighed', '25 og 30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort hvid', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk', 'http://www.koehler-knallerter.dk', 'http://www.tg-motor.dk', 'http://www.hv-care.dk/')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'C130A', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '48', '', 'børsteløs DC', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '750', 'w', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1020-1200', 'w', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1550-1557', '', '', '')
      ,'bredde'            => ens('bredde', '650-655', '', '', '')
      ,'højde'             => ens('højde', '1000', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '760', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '115', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1050', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '1.40', '14', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '1.40', '14', '', 'aluminium')
      ,'dækfor'            => ens('dæk2', '2.25', '14', '', '')
      ,'dækbag'            => ens('dæk2', '2.25', '14', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '33', 'psi', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '33', 'psi', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '50', '')
      ,'affjedringbag'     => ens('affjedringbag', '1 støddæmper', '', '30', '')
      ,'bremserfor'        => ens('bremser', 'tromle', '85', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '85', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '40', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '48', '10', 'lithium ion (LiMn2O4)', 'aftageligt')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '5,6', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '', '35/35', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '21/5', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '10', '4', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', 'ind : 180~264 volt<br>ud : DC 52 ~ 58,6 volt')
      ,'ladetid'           => ens('ladetid', '1,5-2', '80 %', '(ifølge c reinhardt)', '') . '<br>' . ens('ladetid', '2,5', '100 %', '(ifølge c reinhardt)', '') . '<br>' . ens('ladetid', '2', '100 %', '(ifølge www.e-ton.com.tw)', '')
      ,'rækkevidde'        => ens('rækkevidde', '', 'max 35', '', '(baseret på en temperatur på 18 ° (celsius ?), 70 kg person, nye fuldt opladte batterier ved konstant hastighed)')
      ,'controller'        => ens('controller', '48', '', '750', '') . '<br>' . 'power/normal'

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
       'stel'              => ens('stel', 'stål', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RK1EJC0E_AA000 (30 km/t)', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '44,4 (uden batteri)', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '49-50', '(med batteri)', '', '')
      ,'vægttotal'         => ens('vægttotal', '125', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '18', '%', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '', '')
      ,'producent'         => ens('producent', 'E-ton power tech Co., Ltd. / ji-ee industry Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', 'mekanisk og elektronisk tyversikring med kodeord', 'Hvis tegn nummer 5 i stelnummeret er "H" er maksimal hastighed = 25 km/t', 'Hvis tegn nummer 5 i stelnummeret er "J" er maksimal hastighed = 30 km/t', 'Hvis tegn nummer 6 i stelnummeret er "C" er maksimal hastighed = 45 km/t')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', 'elektronisk begrænset under trinbræt (skulle står C650AEGC på den del som er begrænset... formodentligt controlleren)', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', 'Tegn 5 i stelnummeret er "H" og angiver maksimal hastighed = 25 km/t.', 'Tegn 5 i stelnummeret er "J" og angiver maksimal hastighed = 30 km/t.', 'Tegn 6 i stelnummeret er "C" og angiver maksimal hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
//   ,''    => ''

),'typegodkendelser' => array(
    'EV3A 25 km/t E17881 (e4*2002/24*2135)'         => 'typegodkendelser/E-Ton%20-%20%28E17881%29%20udstedt%2012-11-2009.pdf'
   ,'EV3A 30 km/t E18191 (e4*2002/24*2135)'         => 'typegodkendelser/E-TON%2025%20%28E18191%29%20udstedt%2027-04-2010.pdf'
   ,'EV3A 45 km/t E18192 (e4*2002/24*2135)'         => 'typegodkendelser/E-TON%2030%20%28E18192%29%20udstedt%2027-04-2010.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
