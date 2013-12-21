<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "ebretti scootere med elektrisk motor";
$overskrift = "ebretti";
$metadescription = "specifikationer, download og typegodkendelser";

$setup['sideikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter = array(

'ebretti' => array(

   'generelt'              => array(
       'model'             => ens('model', 'ebretti 518', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'EB-1500-TK', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '13999', '16999', '', '')
      ,'hastighed'         => ens('hastighed', '25 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort grå hvid grøn pink rød', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'JYS48V10-1500W', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '48', '', 'børsteløs nav', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '1000', 'w', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1500', 'w', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1740', '', '', '(ifølge ebretti.nl og dansk brugermanual)') . '<br>' . ens('længde', '1900', '', '', '(ifølge typegodkendelse)')
      ,'bredde'            => ens('bredde', '650', '', '', '(ifølge ebretti.nl og dansk brugermanual)') . '<br>' . ens('bredde', '750', '', '', '(ifølge typegodkendelse)')
      ,'højde'             => ens('højde', '1130', '', '', '(ifølge dansk brugermanual)')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1220', '', '', '(ifølge dansk brugermanual)')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.50', '10', '', '')
      ,'fælgbag'           => ens('fælg', '2.50', '10', '', '')
      ,'dækfor'            => ens('dæk2', '3.50', '10', '', '')
      ,'dækbag'            => ens('dæk2', '3.50', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '48', '33', 'VRLA silicium', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/35', '', '')
      ,'lysbagbremse'      => ens('lys', '12', '5/21', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '58', '', '', '(Opladningsenergiforbrug : 1-4 KWh)')
      ,'ladetid'           => ens('ladetid', 'maksimum 6', '(ifølge ebretti.nl på engelsk)', '', '') . '<br>' . ens('ladetid', 'cirka 6', 'hvis batteriet ikke er helt tappet (ifølge ebretti.dk)', '', '') . '<br>' . ens('ladetid', '4-6 og 6-8', '(ifølge ebretti.nl)', '', '') . '<br>' . ens('ladetid', '6-8', '(ifølge dansk brugermanual)', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '60-80 og 70', '25', '(ifølge ebretti.dk)') . '<br>' . ens('rækkevidde', '', 'op til 75', '25', '(ifølge dansk brugermanual)') . '<br>' . ens('rækkevidde', '', '40-50 og 50', '45', '(ifølge ebretti.dk)') . '<br>' . ens('rækkevidde', '', 'op til 50', '45', '(ifølge dansk brugermanual)') . '<br>' . ens('rækkevidde', '', 'under 50', '', '(ifølge tv2.dk (go sommer danmark))')
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
      ,'stelnummer'        => ens('stelnummer', 'LAYTCA0009K (lille knallert)', 'LAYTCA0009K015692 (RU697 E17788-01)', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '120-122', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '272', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '150', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', 'under 15', 'grader', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'Børge Kildemoes Cykelfabrik A/S<br>Ebretti europe BV', '', '', '')
      ,'producent'         => ens('producent', 'Ebretti PTY Ltd.', '', '', '')
      ,'andet'             => ens('andet', 'Bagageopbevaring under sædet', 'ebretti.dk skriver "Undgå at køre batterierne helt i bund."', '', '')

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
    'specifikationer fra dansk brugermanual'     => 'ebretti_518_specifikationer.jpg'

),'typegodkendelser' => array(
    'EB-1500-TK 25 km/t E17789 (e4*2002/24*2153)'         => 'typegodkendelser/Ebretti%20EB-1500-TK%20%28E17789%29%20udstedt%2001-09-2009.pdf'
   ,'EB-1500-TK 45 km/t E17788 (e4*2002/24*2153)'         => 'typegodkendelser/Ebretti%20EB-1500-TK%20%28E17788%29%20udstedt%2001-09-2009.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false);

?>
