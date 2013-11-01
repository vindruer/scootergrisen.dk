<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "ego scootere med elektrisk motor";
$overskrift = "ego";
$metadescription = "specifikationer, download og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'egohelio' => array(

   'generelt'              => array(
       'model'             => ens('model', 'ego helio', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '14825', '', '')
      ,'hastighed'         => ens('hastighed', '30', '(20/25/30/25-37) hurtig-indstilling: 37 km/t', 'langt-indstilling: 25 km/t', 'top hastigheden er elektronisk begrænset og muligvis er "special dk edition" begrænset til 30 km/t')
      ,'farver'            => ens('farver', 'rød-sølv sort-sølv', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.el-knallert.dk', 'http://solkongen.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '24', '1500', 'børster', '3000 o/min<br>computer styret<br>Automatisk motorbremse med genopladningsfunktion (Oplader når du bremser)')
      ,'volume'            => ens('volume', '', '', '')
      ,'køling'            => ens('køling', '', '', '')
      ,'boring'            => ens('boring', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '') 
      ,'ventiler'          => ens('ventiler', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '816', 'w', '', '<br>Der står vistnok 1,99 Hestekræfter på motoren')
      ,'moment'            => ens('moment', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1630-1650', '', '')
      ,'bredde'            => ens('bredde', '580-610', '', '')
      ,'højde'             => ens('højde', '1120-1130', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1130', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', 'dobbelt væg')
      ,'fælgbag'           => ens('fælg', '', '', 'dobbelt væg')
      ,'dækfor'            => ens('dæk2', '1.95', '20', '', '')
      ,'dækbag'            => ens('dæk2', '1.95', '20', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '60', 'psi', 'for blødere kørsel', '') . '<br>' . ens('dæktryk', '100', 'psi', 'for bedre kontrol og rækkevidde', '')
      ,'dæktrykbag'        => ens('dæktryk', '60', 'psi', 'for blødere kørsel', '') . '<br>' . ens('dæktryk', '100', 'psi', 'for bedre kontrol og rækkevidde', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '')
      ,'bremserbag'        => ens('bremser', 'v-fælg', '', '')
      ,'eger'              => ens('eger', '48 per fælg', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '24', '34', 'bly syre gel sealed deep discharge', '(2 stk 12 volt)')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', 'op til 5', '', 'over 13.000')
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
      ,'oplader'           => ens('oplader', '', '6', '', 'indbygget')
      ,'ladetid'           => ens('ladetid', '6 timer for 100 %', '<br>3 timer for 80 %', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '25-35', '', 'hurtig-indstilling') . "<br>" . ens('rækkevidde', '', '30-40', '', 'langt-indstilling<br>ekstra 24 volt batteri kan købes som giver 50% længere rækkevidde')
      ,'controller'        => ens('controller', '', '180', '', 'maksimum')

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
       'stel'              => ens('stel', 'annoiseret aluminium', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RKZME10224D', 'RKZME30227M', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '')
      ,'vægttør'           => ens('vægttør', '59-61,5', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '110', '<br>og 45 kg i eventuel anhænger', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '15', '%', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', '', '', '')
      ,'producent'         => ens('producent', 'eGO Vehicles Inc.', '', '')
      ,'andet'             => ens('andet', 'automatisk motorbremse og bremselys ved fartreduktion', 'automatisk motorbremse med genopladningsfunktion (Oplader når du bremser)', 'display til visning af batteristatus<br>Speedometer med kilometertæller<br>Bælte drevet<br>Blinklys for og bag<br>Horn<br>For og bag lys plus bremselys')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', 'Tegn 6 i stelnummeret er "7" og angiver den maksimale hastighed = 24 km/t eller 30 km/t.', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'helio brugermanual'                  => 'ego_helio_brugermanual.pdf'

),'typegodkendelser' => array(
    'helio 24 og 30 km/t E15401 (e9*92/61*0119)' => 'typegodkendelser/EGO%20Cycle%20Helio%20%28E15401%29%20udstedt%2015-05-2006.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
