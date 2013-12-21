<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "norsjö vareknallert med 50 cm³ og elektrisk motor";
$overskrift = "norsjö";
$metadescription = "specifikationer, download og typegodkendelser";

$setup['sideikon']               = 'logoer/logo_norsjo.png';

$databasecenter = array(

'norsjocarrier4stroke' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'kan bestilles hos '.ahref('http://www.norsjo.com/', 'norsjo.com').'<br>Se svenske priser i '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/' . 'download/norsjo_prisliste.pdf', 'norsjo_prisliste.pdf').'', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'norsjö carrier 4 stroke', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '10', '', '', '')
      ,'varianter'         => ens('varianter', 'norsjö carrier 4 stroke short (lad på 95x95 cm)', 'norsjö carrier 4 stroke long (lad på 120 cm i længden)', '', '')
      ,'pris'              => ens('pris', '32217', '', '(fra 39647,- SEK (Svenske kroner) se prisliste)', '')
      ,'hastighed'         => ens('hastighed', '35', '(er en stor knallert med hvid 45 km/t nummerplade)', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.norsjo.com', 'http://www.scootcar.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'zongshen ZS139FMB', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '39', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '40,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,8', 'kw', '7600', '')
      ,'moment'            => ens('moment', '3,1', 'nm', '7600', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK CR7HSA', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '2318', '', '', 'short') . '<br>' . ens('længde', '2568', '', '', 'long')
      ,'bredde'            => ens('bredde', '997', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '95', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '5', '(0,5 liter reservetank)', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.00', '8', '', '')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', '')
      ,'dækfor'            => ens('dæk2', '4.00', '8', '55 M', '')
      ,'dækbag'            => ens('dæk1', '110', '100', '12', '67 J')
      ,'dæktrykfor'        => ens('dæktryk', '400', 'kpascal', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '400', 'kpascal', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '2 gummi dæmpere', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '2 fjedre og støddæmpere', '', '', '')
      ,'bremserfor'        => ens('bremser', 'tromle', '', 'hydraulisk', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', 'hydraulisk', '')
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
      ,'lysfor'            => ens('lys', '12', '35/35', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '12', '4', '', 'BA9s')
      ,'lysbremse'         => ens('lys', '12', '10', '', 'BA15s')
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
       'motor'             => ens('olie', '10W-40', 'API : SG', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', 'centrifugal', '', '')
      ,'antalgear'         => ens('antalgear', '4', 'manuel (eller halvautomatisk ?)', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '15', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '65', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '173', 'short', '', '') . '<br>' . ens('vægtkørerklar', '180', 'long', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '200', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '73', '3800', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'H.C.Hovmand Engineering A/S', '', '', '')
      ,'producent'         => ens('producent', 'Norsjö Moped AB', '', '', '')
      ,'andet'             => ens('andet', 'Ud over for og bagbremse har den også en mekanisk parkeringsbremse', '', '', '')

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

),'norsjocarrierelectronic' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'kan bestilles hos '.ahref('http://www.norsjo.com/', 'norsjo.com').'<br>Se svenske priser i '.ahref($GLOBALS['setup']['domainogdatamappe'] . '/' . 'download/norsjo_prisliste.pdf', 'norsjo_prisliste.pdf').'', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'norsjö carrier electronic', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '20 (2011A)', '', '', '')
      ,'varianter'         => ens('varianter', 'norsjö carrier electronic short (lad på 95x95 cm)', 'norsjö carrier electronic long (lad på 120 cm i længden)', '', '')
      ,'pris'              => ens('pris', '43616', '', '(fra 53674,- SEK (Svenske kroner) se prisliste)', '')
      ,'hastighed'         => ens('hastighed', '30', '(er en stor knallert med hvid 45 km/t nummerplade)', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.norsjo.com', 'http://www.scootcar.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Advanced D.C. Inc Sepex', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '24', '2000', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '3000', 'w', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '2357', '', '', 'short') . '<br>' . ens('længde', '2607', '', '', 'long')
      ,'bredde'            => ens('bredde', '997', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.00', '8', '', '')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', '')
      ,'dækfor'            => ens('dæk2', '4.00', '8', '', '55 M')
      ,'dækbag'            => ens('dæk1', '110', '100', '12', '67 J')
      ,'dæktrykfor'        => ens('dæktryk', '400', 'kpascal', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '400', 'kpascal', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '2 gummi dæmpere', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '2 fjedre og støddæmpere', '', '', '')
      ,'bremserfor'        => ens('bremser', 'tromle', '', 'hydraulisk', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', 'hydraulisk', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '24', '175', '', '(12 stk batterier) Kan fås med 96, 128, 160 Ah og 82, 164 Ah XFC')
      ,'batterispec2'      => ens('batterispec2', '', '96', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', 'hovedsikring : 160', '', '', '') . '<br>' . ens('sikring', 'motor controller : 5', '', '', '') . '<br>' . ens('sikring', 'batteri indikator : 5', '', '', '') . '<br>' . ens('sikring', 'volt konverter : 5', '', '', '') . '<br>' . ens('sikring', 'lys, indikatorer : 10', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/35', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '12', '4', '', 'BA9s')
      ,'lysbremse'         => ens('lys', '12', '10', '', 'BA15s')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', 'Curtis 1620FS indbygget')
      ,'ladetid'           => ens('ladetid', '8-13', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', 'Curtis 1243-43XX PMC')

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
      ,'tandhjulfor'       => ens('tandhjulfor', '10', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '85', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'YU6', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '285', 'Egenvægt : 199 kg', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '328', 'short', '', '') . '<br>' . ens('vægtkørerklar', '335', 'long', '', '')
      ,'vægttotal'         => ens('vægttotal', '580', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '177', 'short', '', '') . '<br>' . ens('bæreevne', '170', 'long', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'H.C.Hovmand Engineering A/S', 'P.M. Danmark A/S', '', '')
      ,'producent'         => ens('producent', 'Norsjö Moped AB', '', '', '')
      ,'andet'             => ens('andet', '', 'DC til DC konverter (24 til 12 volt) : PPV 6S DCDC', 'Ud over for og bagbremse har den også en mekanisk parkeringsbremse', '')

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

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'carrier 4 stroke brugermanual'       => 'norsjo_carrier_4stroke_brugermanual.pdf'
   ,'carrier 4 stroke el diagram'         => 'norsjo_carrier_4stroke_eldiagram.pdf'
   ,'carrier 4 stroke kontrolboks'        => 'norsjo_carrier_4stroke_kontrolboks.pdf'
   ,'carrier 4 stroke reservedele'        => 'norsjo_carrier_4stroke_reservedele.pdf'
   ,'carrier electronic brugermanual'     => 'norsjo_carrier_electronic_brugermanual.pdf'
   ,'carrier electronic el diagram'       => 'norsjo_carrier_electronic_eldiagram.pdf'
   ,'carrier electronic kontrolboks'      => 'norsjo_carrier_electronic_kontrolboks.pdf'
   ,'carrier electronic reservedele'      => 'norsjo_carrier_electronic_reservedele.pdf'
   ,'prisliste'                           => 'norsjo_prisliste.pdf'

),'typegodkendelser' => array(
    'carrier 4 stroke 35 km/t (stor knallert) E15234 (e5*2002/24*0006)'    => 'typegodkendelser/Norsjo%20Carrier%20%28E15234%29%20udstedt%2003-04-2006.pdf'
   ,'carrier electronic 30 km/t (stor knallert) E15233 (e5*2002/24*0007)'    => 'typegodkendelser/Norsjo%20Carrier%20%28E15233%29%20udstedt%2003-04-2006.pdf'
   ,'carrier electronic 30 km/t (stor knallert) E16754 (e5*2002/24*0007)'    => 'typegodkendelser/Norsjo%20Carrier%20Elec%202011A%20%28E16754%29%20udstedt%2003-12-2007.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
