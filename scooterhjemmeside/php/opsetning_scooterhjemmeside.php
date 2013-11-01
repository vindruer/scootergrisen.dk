<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/grundleggendeopsetning.php';

////////////////////////////////////

if(isset($_COOKIE)){

   if(count($_COOKIE) && isset($_COOKIE[$setup['cookienavn_language']])){

      $setup['languageselectedbyuser'] = $_COOKIE[$setup['cookienavn_language']];

   }

}

function detectlanguage(){

   if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){

      $langcode = explode(",", $_SERVER['HTTP_ACCEPT_LANGUAGE']);

      foreach($langcode as $value){

         if(strpos($value, ';')){

            $value = strstr($value, ';', true);

         }

         switch(mb_strtolower($value)){

            case "da" :
            case "da-dk" :
               return 'da';
               break;

            case "en" :
            case "en-uk" :
            case "en-us" :
               return 'en';
               break;

         }

      }

   }

   return 'da'; // standard

}

function velgsprog($sprog){

   switch(mb_strtolower($sprog)){
   
      case 'da' :
      case 'da-dk' :
         return './php/language/da.php';
         break;
   
      case 'en' :
      case 'en-uk' :
      case 'en-us' :
         return './php/language/en.php';
         break;
   
      default :
         return './php/language/en.php';
         break;
   
   }

}

if(isset($setup['languageselectedbyuser'])){

   $sprogkode = $setup['languageselectedbyuser'];

}else{

   $sprogkode = detectlanguage();

}


$sprogfil = velgsprog($sprogkode);
$setup['languageinuse'] = $sprogkode;

require './php/language/en.php'; // indlæs selvom den måske ikke skal bruges for at være sikker på at der ikke er fejl i også jeg ikke opdager det fordi jeg ser siden på et andet sprog
require './php/language/da.php'; // indlæs selvom den måske ikke skal bruges for at være sikker på at der ikke er fejl i også jeg ikke opdager det fordi jeg ser siden på et andet sprog
require $sprogfil;

////////////////////////////////////

$setup['en_eller_anden_besked_overst_pa_siden'] = '';

$setup['headekstra']             = '';
$setup['slutbodyekstra']         = '';
$setup['sidetopbesked']          = ""; // eventuelt en vigtig besked som vises næsten øverst i den midterste del af hver side
$setup['shortcuticon']           = "ikoner/shortcuticon0001.ico?version=2";
$setup['shortcuticon_lokalt']    = "ikoner/shortcuticon0001_negativ.ico";
$setup['datamappe']              = "scooterhjemmeside";
$setup['billedmappe']            = "billeder";

$setup['dataogbilledmappe']      = "$setup[datamappe]/$setup[billedmappe]";
$setup['tempfuld']               = "$setup[roden]/$setup[tempmappe]";
$setup['domainogdatamappe']      = "$setup[domain]/$setup[datamappe]";
$setup['rodenogdatamappe']       = "$setup[roden]/$setup[datamappe]";

$setup['sogetekstfilnavn']       = "sogninger_scooterhjemmeside.txt";
$setup['errorlogfilnavn']        = "fejl.txt";
$setup['onerrorfilnavn']         = "onerror.txt";
$setup['sessionmappe']           = "$setup[tempfuld]/sessions";
$setup['vinsogninger']           = "vinsogninger.txt";

$setup['vissprog']               = 1;
$setup['visreklame']             = 0;
$setup['visspotlys']             = 1;
$setup['counterogsocialemedier'] = 1;
$setup['eftertitle']             = '';
$setup['footertekst']            = 'scootergrisen.dk';
$setup['unimenuer']              = array();

$setup['sideikon']               = 'ikoner/ikon_scootergrisen.png';
$setup['nogetikon']              = 'ikoner/scootergrisen64.png';
$setup['chartid']                = '139030';
$setup['googlesiteverification'] = 'JzPPj-CChB7SYIK756n4ZUdRFaRaQAJd9UNm2AuXQHc';
$setup['msvalidate']             = '3F759ED51FA4F6FB8F2962FF0C1FD4A2';
$setup['googleanalytics1']       = 'UA-44409622-1';
$setup['googleanalytics2']       = 'scootergrisen.dk';

$setup['smaikoner'] = array(
    array($setup['l_smaikoner_forum'], 'http://scootergrisen.dk/forum/', 'ikoner/ikon_forum.png', '52', '16')
   ,array($setup['l_smaikoner_start'], 'start.php', 'ikoner/ikon_start.png', '16', '16')
   ,array($setup['l_smaikoner_nyheder'], 'nyheder.php', 'ikoner/ikon_nyheder.png', '16', '16')
   ,array($setup['l_smaikoner_kontakt'], 'kontakt.php', 'ikoner/ikon_kontakt.png', '16', '16')
   ,array($setup['l_smaikoner_introduktion'], 'introduktion.php', 'ikoner/ikon_introduktion.png', '16', '16')
   ,array($setup['l_smaikoner_tilfeldig'], 'tilfeldig.php', 'ikoner/ikon_tilfeldig.png', '16', '16')
   ,array($setup['l_smaikoner_download'], 'download.php', 'ikoner/go_down.png', '16', '16')
   ,array($setup['l_smaikoner_typegodkendelser'], 'typegodkendelser.php', 'ikoner/ikon_typegodkendelser.png', '16', '16')
   ,array($setup['l_smaikoner_teoriprove'], 'teoriprove.php', 'ikoner/ikon_teoriprove.png', '16', '16')
   ,array($setup['l_smaikoner_begrensninger'], 'begrensninger.php', 'ikoner/ikon_begrensninger.png', '16', '16')
   ,array($setup['l_smaikoner_galleri'], 'galleri.php', 'ikoner/ikon_galleri.png', '16', '16')
   ,array($setup['l_smaikoner_kamera'], 'kamera.php', 'ikoner/ikon_kamera.png', '16', '16')
   ,array($setup['l_smaikoner_vinchecker'], 'vinchecker.php', 'ikoner/ikon_vinchecker.png', '38', '16')
   ,array($setup['l_smaikoner_links'], 'links.php', 'ikoner/ikon_links.png', '16', '16')
   ,array($setup['l_smaikoner_stederidanmark'], 'stederidanmark.php', 'ikoner/ikon_stederidanmark.png', '16', '16')
   ,array($setup['l_smaikoner_vinterrad'], 'vinterrad.php', 'ikoner/ikon_vinterrad.png', '16', '16')
   ,array($setup['l_smaikoner_karburator'], 'karburator.php', 'ikoner/ikon_karburator.png', '16', '16')
   ,array($setup['l_smaikoner_nummerplade'], 'nummerplade.php', 'ikoner/ikon_nummerplade.png', '16', '16')
   ,array($setup['l_smaikoner_billeder'], 'billeder.php', 'ikoner/ikon_billeder.png', '16', '16')
   ,array($setup['l_smaikoner_videoer'], 'videoer.php', 'ikoner/ikon_videoer.png', '16', '16')
   ,array($setup['l_smaikoner_serivefejlfindingintroduktion'], 'service_fejlfinding_introduktion.php', 'ikoner/ikon_fejlfinding.png', '63', '16')
   ,array($setup['l_smaikoner_loveogregler'], 'loveogregler.php', 'ikoner/ikon_loveogregler.png', '16', '16')
   ,array($setup['l_smaikoner_registrering'], 'registrering.php', 'ikoner/ikon_registrering.png', '16', '16')
   ,array($setup['l_smaikoner_tendror'], 'tendror.php', 'ikoner/ikon_tendror.png', '16', '16')
);

$setup['top_random_billeder'] = array(
   'billeder/billed3777.jpg',
   'billeder/billed1591.jpg',
   'billeder/billed1592.jpg',
   'billeder/billed1593.jpg',
   'billeder/billed1594.jpg',
   'billeder/billed1595.jpg',
   'billeder/billed1596.jpg',
   'billeder/billed1597.jpg',
   'billeder/billed1598.jpg',
   'billeder/billed1599.jpg',
   'billeder/billed1600.jpg',
   'billeder/billed1601.jpg',
   'billeder/billed1602.jpg',
   'billeder/billed1603.jpg',
   'billeder/billed1604.jpg',
   'billeder/billed1605.jpg',
   'billeder/billed1618.jpg',
   'billeder/billed1619.jpg',
   'billeder/billed1620.jpg',
   'billeder/billed1621.jpg',
   'billeder/billed1622.jpg',
   'billeder/billed1624.jpg',
   'billeder/billed1625.jpg',
   'billeder/billed1626.jpg',
   'billeder/billed1627.jpg',
   'billeder/billed1637.jpg',
   'billeder/billed1638.jpg',
   'billeder/billed1640.jpg',
   'billeder/billed1641.jpg',
   'billeder/billed1646.jpg',
   'billeder/billed1647.jpg',
   'billeder/billed1648.jpg',
   'billeder/billed1649.jpg',
   'billeder/billed1650.jpg',
   'billeder/billed1652.jpg',
   'billeder/billed1653.jpg',
   'billeder/billed1654.jpg',
   'billeder/billed1655.jpg',
   'billeder/billed1662.jpg',
   'billeder/billed1663.jpg',
   'billeder/billed1664.jpg',
   'billeder/billed1665.jpg',
   'billeder/billed1666.jpg',
   'billeder/billed1667.jpg',
   'billeder/billed1668.jpg',
   'billeder/billed1669.jpg',
   'billeder/billed1670.jpg',
   'billeder/billed1671.jpg',
   'billeder/billed1672.jpg',
   'billeder/billed1678.jpg',
   'billeder/billed1677.jpg',
   'billeder/billed1679.jpg',
   'billeder/billed1680.jpg',
   'billeder/billed1681.jpg',
   'billeder/billed1683.jpg',
   'billeder/billed1684.jpg',
   'billeder/billed1686.jpg',
   'billeder/billed1687.jpg',
   'billeder/billed1688.jpg',
   'billeder/billed1693.jpg',
   'billeder/billed1694.jpg',
   'billeder/billed1695.jpg',
   'billeder/billed1696.jpg',
   'billeder/billed1697.jpg',
   'billeder/billed1698.jpg',
   'billeder/billed1699.jpg',
   'billeder/billed1700.jpg',
   'billeder/billed1701.jpg',
   'billeder/billed1702.jpg',
   'billeder/billed1703.jpg',
   'billeder/billed1704.jpg',
   'billeder/billed1705.jpg',
   'billeder/billed1706.jpg',
   'billeder/billed1707.jpg',
   'billeder/billed1708.jpg',
   'billeder/billed1710.jpg',
   'billeder/billed1711.jpg',
   'billeder/billed1712.jpg',
   'billeder/billed1713.jpg',
   'billeder/billed1714.jpg',
   'billeder/billed1715.jpg',
   'billeder/billed1716.jpg',
   'billeder/billed1719.jpg',
   'billeder/billed1720.jpg',
   'billeder/billed1721.jpg',
   'billeder/billed1722.jpg',
   'billeder/billed1729.jpg',
   'billeder/billed1737.jpg',
   'billeder/billed3662.jpg',
   'billeder/billed3663.jpg',
   'billeder/billed3664.jpg',
   'billeder/billed3665.jpg',
   'billeder/billed3666.jpg',
   'billeder/billed3667.jpg',
   'billeder/billed3668.jpg',
   'billeder/billed3670.jpg',
   'billeder/billed3671.jpg',
   'billeder/billed3672.jpg',
   'billeder/billed3673.jpg',
   'billeder/billed3674.jpg',
   'billeder/billed3675.jpg',
   'billeder/billed3676.jpg',
   'billeder/billed3677.jpg',
   'billeder/billed3678.jpg',
   'billeder/billed3679.jpg',
   'billeder/billed3680.jpg',
   'billeder/billed3681.jpg',
   'billeder/billed3682.jpg',
   'billeder/billed3683.jpg',
   'billeder/billed3685.jpg',
   'billeder/billed3686.jpg',
   'billeder/billed3687.jpg',
   'billeder/billed3688.jpg',
   'billeder/billed3691.jpg',
   'billeder/billed3692.jpg',
   'billeder/billed3693.jpg',
   'billeder/billed3694.jpg',
   'billeder/billed3696.jpg',
   'billeder/billed3697.jpg',
   'billeder/billed3698.jpg',
   'billeder/billed3699.jpg',
   'billeder/billed3700.jpg',
   'billeder/billed3701.jpg',
   'billeder/billed3702.jpg',
   'billeder/billed3703.jpg',
   'billeder/billed3704.jpg',
   'billeder/billed3705.jpg',
   'billeder/billed3706.jpg',
   'billeder/billed3707.jpg',
   'billeder/billed3557.jpg',
   'billeder/billed3558.jpg',
   'billeder/billed3559.jpg',
   'billeder/billed3562.jpg',
   'billeder/billed3563.jpg',
   'billeder/billed3564.jpg',
   'billeder/billed3565.jpg',
   'billeder/billed3566.jpg',
   'billeder/billed3567.jpg',
   'billeder/billed3568.jpg',
   'billeder/billed3569.jpg',
   'billeder/billed3570.jpg',
   'billeder/billed3571.jpg',
   'billeder/billed3572.jpg',
   'billeder/billed3573.jpg',
   'billeder/billed3574.jpg',
   'billeder/billed3575.jpg',
   'billeder/billed3576.jpg',
   'billeder/billed3577.jpg',
   'billeder/billed3580.jpg',
   'billeder/billed3583.jpg',
   'billeder/billed3584.jpg',
   'billeder/billed3596.jpg',
   'billeder/billed3597.jpg',
   'billeder/billed3598.jpg',
   'billeder/billed3599.jpg',
   'billeder/billed3602.jpg',
   'billeder/billed3603.jpg',
   'billeder/billed3604.jpg',
   'billeder/billed3605.jpg',
   'billeder/billed3606.jpg',
   'billeder/billed3708.jpg',
   'billeder/billed3709.jpg',
   'billeder/billed3550.jpg',
   'billeder/billed1690.jpg',
   'billeder/billed1691.jpg',
   'billeder/billed1678.jpg',
   'billeder/billed1682.jpg',
   'billeder/billed3590.jpg',
   // knallerter
   'billeder/billed1639.jpg',
   'billeder/billed3560.jpg',
   'billeder/billed3561.jpg',
   'billeder/billed3601.jpg',
   'billeder/billed1969.jpg',
   'billeder/billed3695.jpg',
   'billeder/billed1628.jpg',
   'billeder/billed1685.jpg',
   'billeder/billed1692.jpg',
   'billeder/billed1623.jpg',
   'billeder/billed1709.jpg',
   'billeder/billed1717.jpg'

);

$setup['reklamer'] = array(
       array('SkyTeam danmark',     'http://www.skyteam-dk.dk',      'www.skyteam-dk.dk.png')
      ,array('Daxshop.dk',          'http://www.daxshop.dk',         'www.daxshop.dk.png')
      ,array('FantomBike.dk',       'http://www.fantombike.dk',      'www.fantombike.dk.png')
      ,array('scoot.dk',            'http://www.scoot.dk',           'www.scoot.dk.png')
      //,array('knallertsider.dk',    'http://knallertsider.dk',       'knallertsider.dk.png')
      ,array('knallert-scooter.dk', 'http://knallert-scooter.dk',    'knallert-scooter.dk2.png')
      ,array('scootershop.dk',      'http://scootershop.dk',         'scootershop.dk.png')
      ,array('MSP-Tuning',          'http://www.msp-tuning.dk',      'www.msp-tuning.dk.jpg')
   );

$setup['spotlys'] = array(
   array(
       '/scooterhjemmeside/begrensninger.php'
      ,'/scooterhjemmeside/billeder/spotlys/begrensninger.gif'
      ,$setup['l_spotlys_begrensninger']
      ,$setup['l_spotlys_begrensninger_description']
   ), array(
       '/scooterhjemmeside/teoriprove.php'
      ,'/scooterhjemmeside/billeder/spotlys/teoriprove.gif'
      ,$setup['l_spotlys_teoriprove']
      ,$setup['l_spotlys_teoriprove_description']
   ), array(
       '/scooterhjemmeside/karburator.php'
      ,'/scooterhjemmeside/billeder/spotlys/karburator.png'
      ,$setup['l_spotlys_karburator']
      ,$setup['l_spotlys_karburator_description']
   ), array(
       '/scooterhjemmeside/vinchecker.php'
      ,'/scooterhjemmeside/billeder/spotlys/vinchecker.gif'
      ,$setup['l_spotlys_vinchecker']
      ,$setup['l_spotlys_vinchecker_description']
//   ), array(
//       '/scooterhjemmeside/vinterrad.php'
//      ,'/scooterhjemmeside/billeder/spotlys/vinterrad.png'
//      ,$setup['l_spotlys_vinterrad']
//      ,$setup['l_spotlys_vinterrad_description']
   ), array(
       '/scooterhjemmeside/lyd.php'
      ,'/scooterhjemmeside/billeder/spotlys/underholdninglyd.gif'
      ,$setup['l_spotlys_lyd']
      ,$setup['l_spotlys_lyd_description']
   ), array(
       '/scooterhjemmeside/billeder.php'
      ,'/scooterhjemmeside/billeder/spotlys/billeder.gif'
      ,$setup['l_spotlys_billeder']
      ,$setup['l_spotlys_billeder_description']
   ), array(
       '/forum/'
      ,'/scooterhjemmeside/billeder/spotlys/forum.png'
      ,$setup['l_spotlys_forum']
      ,$setup['l_spotlys_forum_description']
   ), array(
       '/scooterhjemmeside/stederidanmark.php'
      ,'/scooterhjemmeside/billeder/spotlys/stederidanmark.png'
      ,$setup['l_spotlys_stederidanmark']
      ,$setup['l_spotlys_stederidanmark_description']
   )
);

$scootergentag = ' scootere med billede, data og eventuelt manualer, eldiagrammer, reservedele og typegodkendelser.';

$kort = $setup['domainogdatamappe'];

if(0){

   $top10 = '<span style="color: rgba(255, 0, 0, 1); margin-left: .5em;" class="bold fontsize_small" title="Blandt top 10 sider med flest unikke sidevisninger (siden cirka)">Top 10</span>'; // Blandt de mest populære sider top 30
   $top20 = '<span style="color: rgba(255, 0, 0, 1); margin-left: .5em;" class="bold fontsize_xsmall" title="Blandt top 20 sider med flest unikke sidevisninger (siden cirka)">Top 20</span>'; // Blandt de mest populære sider top 30
   $top30 = '<span style="color: rgba(255, 0, 0, 1); margin-left: .5em;" class="fontsize_xxsmall" title="Blandt top 30 sider med flest unikke sidevisninger (siden cirka)">Top 30</span>'; // Blandt de mest populære sider top 30

}else{

   $top10 = '';
   $top20 = '';
   $top30 = '';

}

$setup['menu'] = array(

      // billed2616 = midlertidigt billede

     $setup['l_m_forummenu'] => array(
       $setup['l_m_forummenu_boardindex'] . $top10  => array('http://scootergrisen.dk/forum/index.php'                           => $setup['l_m_forummenu_boardindex_description'], 'thumbnail' => 'billed3738.jpg')
      ,$setup['l_m_forummenu_activetopics']         => array('http://scootergrisen.dk/forum/search.php?search_id=active_topics'                          => $setup['l_m_forummenu_activetopics_description'], 'thumbnail' => 'billed3739.jpg')
      ,$setup['l_m_forummenu_sog']                  => array('http://scootergrisen.dk/forum/search.php'                          => $setup['l_m_forummenu_sog_description'], 'thumbnail' => 'billed3740.jpg')

   ),$setup['l_m_hovedmenu'] => array(
       //$setup['l_m_hovedmenu_forum']                => array($setup['domain'] . '/forum/'                          => $setup['l_m_hovedmenu_forum_description'], 'thumbnail' => 'billed3238.jpg')
       $setup['l_m_hovedmenu_forsiden']             => array($setup['domain']                                      => $setup['l_m_hovedmenu_forsiden_description'], 'thumbnail' => 'forsiden.jpg')
      ,$setup['l_m_hovedmenu_introduktion']         => array($kort . '/' . 'introduktion.php'                      => $setup['l_m_hovedmenu_introduktion_description'], 'thumbnail' => 'billed3240.jpg')
      ,$setup['l_m_hovedmenu_start'] . $top20       => array($kort . '/' . 'start.php'                             => $setup['l_m_hovedmenu_start_description'], 'thumbnail' => 'billed2616.jpg')
      ,$setup['l_m_hovedmenu_nyheder']              => array($kort . '/' . 'nyheder.php'                           => $setup['l_m_hovedmenu_nyheder_description'], 'thumbnail' => 'billed3233.jpg')
      ,$setup['l_m_hovedmenu_tilfeldig']            => array($kort . '/' . 'tilfeldig.php'                         => $setup['l_m_hovedmenu_tilfeldig_description'], 'thumbnail' => 'billed3237.jpg')
      ,$setup['l_m_hovedmenu_todo']                 => array($kort . '/' . 'todo.php'                              => $setup['l_m_hovedmenu_todo_description'], 'thumbnail' => 'todo.jpg')
      ,$setup['l_m_hovedmenu_login']                => array($kort . '/' . 'login.php'                             => $setup['l_m_hovedmenu_login_description'], 'thumbnail' => 'billed3742.jpg')
      ,$setup['l_m_hovedmenu_ratingoversigt']       => array($kort . '/' . 'ratingoversigt.php'                    => $setup['l_m_hovedmenu_ratingoversigt_description'], 'thumbnail' => 'billed3743.jpg')
      ,$setup['l_m_hovedmenu_sog'] . $top10         => array($kort . '/' . 'sog.php'                               => $setup['l_m_hovedmenu_sog_description'], 'thumbnail' => 'billed3741.jpg')
      ,$setup['l_m_hovedmenu_gratisreklame']        => array($kort . '/' . 'gratisreklame.php'                     => $setup['l_m_hovedmenu_gratisreklame_description'], 'thumbnail' => 'billed3730.jpg')
      ,$setup['l_m_hovedmenu_kontakt']              => array($kort . '/' . 'kontakt.php'                           => $setup['l_m_hovedmenu_kontakt_description'], 'thumbnail' => 'billed3239.jpg')

   ),$setup['l_m_oplysninger'] => array(
       $setup['l_m_oplysninger_forsikring']                 => array($kort . '/' . 'forsikring.php'                  => $setup['l_m_oplysninger_forsikring_description'], 'thumbnail' => 'billed2260.jpg')
      ,$setup['l_m_oplysninger_kobafscooter'] . $top20      => array($kort . '/' . 'kobafscooter.php'                => $setup['l_m_oplysninger_kobafscooter_description'], 'thumbnail' => 'billed2290.jpg')
      ,$setup['l_m_oplysninger_registrering'] . $top10      => array($kort . '/' . 'registrering.php'                => $setup['l_m_oplysninger_registrering_description'], 'thumbnail' => 'billed2263.jpg')
      ,$setup['l_m_oplysninger_tilkoring']                  => array($kort . '/' . 'tilkoring.php'                   => $setup['l_m_oplysninger_tilkoring_description'], 'thumbnail' => 'billed2292.jpg')
      ,$setup['l_m_oplysninger_bogerogblade']               => array($kort . '/' . 'bogerogblade.php'                => $setup['l_m_oplysninger_bogerogblade_description'], 'thumbnail' => 'billed2259.jpg')
      ,$setup['l_m_oplysninger_vinterrad']                  => array($kort . '/' . 'vinterrad.php'                   => $setup['l_m_oplysninger_vinterrad_description'], 'thumbnail' => 'billed2271.jpg')
      ,$setup['l_m_oplysninger_elektricitetogelektronik']   => array($kort . '/' . 'elektricitetogelektronik.php'    => $setup['l_m_oplysninger_elektricitetogelektronik_description'], 'thumbnail' => 'billed2972.jpg')
      ,$setup['l_m_interaktive_vinchecker'] . $top10           => array($kort . '/' . 'vinchecker.php'                  => $setup['l_m_interaktive_vinchecker_description'], 'thumbnail' => 'billed3241.jpg')
      ,$setup['l_m_interaktive_omregn']                        => array($kort . '/' . 'omregn.php'                      => $setup['l_m_interaktive_omregn_description'], 'thumbnail' => 'billed2262.jpg')
      //,$setup['l_m_oplysninger_ordbog']                     => array($kort . '/' . 'ordbog.php'                      => $setup['l_m_oplysninger_ordbog_description'], 'thumbnail' => 'billed2615.jpg')
      ,$setup['l_m_scootermerker_sammenlign']                  => array($kort . '/' . 'sammenlign.php'                  => $setup['l_m_scootermerker_sammenlign_description'], 'thumbnail' => 'billed3255.jpg')
      ,$setup['l_m_oplysninger_loveogregler'] . $top20      => array($kort . '/' . 'loveogregler.php'                => $setup['l_m_oplysninger_loveogregler_description'], 'thumbnail' => 'billed2614.jpg')

   ),$setup['l_m_dokumenter'] => array(
       $setup['l_m_dokumenter_download'] . $top10              => array($kort . '/' . 'download.php'                          => $setup['l_m_dokumenter_download_description'], 'thumbnail' => 'billed3234.jpg')
      ,$setup['l_m_dokumenter_typegodkendelser']               => array($kort . '/' . 'typegodkendelser.php'            => $setup['l_m_dokumenter_typegodkendelser_description'], 'thumbnail' => 'billed2265.jpg')

   ),$setup['l_m_scootermerker'] => array(
       $setup['l_m_scootermerker_galleri']                            => array($kort . '/' . 'galleri.php'                       => $setup['l_m_scootermerker_galleri_description'], 'thumbnail' => 'billed3444.jpg')
      ,array(
           $setup['l_m_scootermerker_1'] => array(
             $setup['l_m_scootermerker_1_a2b']                        => array($kort . '/' . 'altoma2b.php'                    => $setup['l_m_scootermerker_1_a2b_description'], 'logo' => 'logo_a2b.png')
            ,$setup['l_m_scootermerker_1_adly']                       => array($kort . '/' . 'altomadly.php'                   => $setup['l_m_scootermerker_1_adly_description'], 'logo' => 'logo_adly.png')
            ,$setup['l_m_scootermerker_1_agm']                        => array($kort . '/' . 'altomagm.php'                    => $setup['l_m_scootermerker_1_agm_description'], 'logo' => 'logo_agm.png')
            ,$setup['l_m_scootermerker_1_amp']                        => array($kort . '/' . 'altomamp.php'                    => $setup['l_m_scootermerker_1_amp_description'], 'logo' => 'logo_amp.png')
            ,$setup['l_m_scootermerker_1_apollo']                     => array($kort . '/' . 'altomapollo.php'                 => $setup['l_m_scootermerker_1_apollo_description'], 'logo' => 'logo_apollo.png')
            ,$setup['l_m_scootermerker_1_aprilia']                    => array($kort . '/' . 'altomaprilia.php'                => $setup['l_m_scootermerker_1_aprilia_description'], 'logo' => 'logo_aprilia.png')
            ,$setup['l_m_scootermerker_1_atala']                      => array($kort . '/' . 'altomatala.php'                  => $setup['l_m_scootermerker_1_atala_description'], 'logo' => 'logo_atala.png')
            ,$setup['l_m_scootermerker_1_avanti']                     => array($kort . '/' . 'altomavanti.php'                 => $setup['l_m_scootermerker_1_avanti_description'], 'logo' => 'logo_avanti.png')
            ,$setup['l_m_scootermerker_1_baotian']                    => array($kort . '/' . 'altombaotian.php'                => $setup['l_m_scootermerker_1_baotian_description'], 'logo' => 'logo_baotian.png')
            ,$setup['l_m_scootermerker_1_benzhouyiying']              => array($kort . '/' . 'altombenzhouyiying.php'          => $setup['l_m_scootermerker_1_benzhouyiying_description'], 'logo' => 'logo_benzhouyiying.png')
            ,$setup['l_m_scootermerker_1_beta']                       => array($kort . '/' . 'altombeta.php'                   => $setup['l_m_scootermerker_1_beta_description'], 'logo' => 'logo_beta.png')
            ,$setup['l_m_scootermerker_1_busetto']                    => array($kort . '/' . 'altombusetto.php'                => $setup['l_m_scootermerker_1_busetto_description'], 'logo' => 'logo_busetto.png')
            ,$setup['l_m_scootermerker_1_cpi']                        => array($kort . '/' . 'altomcpi.php'                    => $setup['l_m_scootermerker_1_cpi_description'], 'logo' => 'logo_cpi.png')
            ,$setup['l_m_scootermerker_1_derbi']                      => array($kort . '/' . 'altomderbi.php'                  => $setup['l_m_scootermerker_1_derbi_description'], 'logo' => 'logo_derbi.png')
         ),$setup['l_m_scootermerker_2'] => array(
             $setup['l_m_scootermerker_2_eton']                       => array($kort . '/' . 'altometon.php'                   => $setup['l_m_scootermerker_2_eton_description'], 'logo' => 'logo_eton.png')
            ,$setup['l_m_scootermerker_2_earthenergy']                => array($kort . '/' . 'altomearthenergy.php'            => $setup['l_m_scootermerker_2_earthenergy_description'], 'logo' => 'logo_earthenergy.png')
            ,$setup['l_m_scootermerker_2_ebretti']                    => array($kort . '/' . 'altomebretti.php'                => $setup['l_m_scootermerker_2_ebretti_description'], 'logo' => 'logo_ebretti.png')
            ,$setup['l_m_scootermerker_2_ego']                        => array($kort . '/' . 'altomego.php'                    => $setup['l_m_scootermerker_2_ego_description'], 'logo' => 'logo_ego.png')
            ,$setup['l_m_scootermerker_2_emax']                       => array($kort . '/' . 'altomemax.php'                   => $setup['l_m_scootermerker_2_emax_description'], 'logo' => 'logo_emax.png')
            ,$setup['l_m_scootermerker_2_evt']                        => array($kort . '/' . 'altomevt.php'                    => $setup['l_m_scootermerker_2_evt_description'], 'logo' => 'logo_evt.png')
            ,$setup['l_m_scootermerker_2_generic']                    => array($kort . '/' . 'altomgeneric.php'                => $setup['l_m_scootermerker_2_generic_description'], 'logo' => 'logo_generic.png')
            ,$setup['l_m_scootermerker_2_giantco'] . $top30           => array($kort . '/' . 'altomgiantco.php'                => $setup['l_m_scootermerker_2_giantco_description'], 'logo' => 'logo_giantco.png')
            ,$setup['l_m_scootermerker_2_giantcoebuddy']              => array($kort . '/' . 'specielt_giantcoebuddy.php'      => $setup['l_m_scootermerker_2_giantcoebuddy_description'], 'logo' => 'logo_giantco_ebuddy.png')
            ,$setup['l_m_scootermerker_2_gilera']                     => array($kort . '/' . 'altomgilera.php'                 => $setup['l_m_scootermerker_2_gilera_description'], 'logo' => 'logo_gilera.png')
            ,$setup['l_m_scootermerker_2_govecs']                     => array($kort . '/' . 'altomgovecs.php'                 => $setup['l_m_scootermerker_2_govecs_description'], 'logo' => 'logo_govecs.png')
            ,$setup['l_m_scootermerker_2_heromajestic']               => array($kort . '/' . 'altomheromajestic.php'           => $setup['l_m_scootermerker_2_heromajestic_description'], 'logo' => 'logo_heromajestic.png')
            ,$setup['l_m_scootermerker_2_honda']                      => array($kort . '/' . 'altomhonda.php'                  => $setup['l_m_scootermerker_2_honda_description'], 'logo' => 'logo_honda.png')
            ,$setup['l_m_scootermerker_2_italjet']                    => array($kort . '/' . 'altomitaljet.php'                => $setup['l_m_scootermerker_2_italjet_description'], 'logo' => 'logo_italjet.png')
         ),$setup['l_m_scootermerker_3'] => array(
             $setup['l_m_scootermerker_3_jincheng']                   => array($kort . '/' . 'altomjincheng.php'               => $setup['l_m_scootermerker_3_jincheng_description'], 'logo' => 'logo_jincheng.png')
            ,$setup['l_m_scootermerker_3_jinlun']                     => array($kort . '/' . 'altomjinlun.php'                 => $setup['l_m_scootermerker_3_jinlun_description'], 'logo' => 'logo_jinlun.png')
            ,$setup['l_m_scootermerker_3_keeway']                     => array($kort . '/' . 'altomkeeway.php'                 => $setup['l_m_scootermerker_3_keeway_description'], 'logo' => 'logo_keeway.png')
            ,$setup['l_m_scootermerker_3_kinroad']                    => array($kort . '/' . 'altomkinroad.php'                => $setup['l_m_scootermerker_3_kinroad_description'], 'logo' => 'logo_kinroad.png')
            ,$setup['l_m_scootermerker_3_kreidler']                   => array($kort . '/' . 'altomkreidler.php'               => $setup['l_m_scootermerker_3_kreidler_description'], 'logo' => 'logo_kreidler.png')
            ,$setup['l_m_scootermerker_3_kymco']                      => array($kort . '/' . 'altomkymco.php'                  => $setup['l_m_scootermerker_3_kymco_description'], 'logo' => 'logo_kymco.png')
            ,$setup['l_m_scootermerker_3_kymcosuper8']                => array($kort . '/' . 'specielt_kymcosuper8.php'        => $setup['l_m_scootermerker_3_kymcosuper8_description'], 'logo' => 'logo_kymco_super84t.png')
            ,$setup['l_m_scootermerker_3_lifan']                      => array($kort . '/' . 'altomlifan.php'                  => $setup['l_m_scootermerker_3_lifan_description'], 'logo' => 'logo_lifan.png')
            ,$setup['l_m_scootermerker_3_longjia']                    => array($kort . '/' . 'altomlongjia.php'                => $setup['l_m_scootermerker_3_longjia_description'], 'logo' => 'logo_longjia.png')
            ,$setup['l_m_scootermerker_3_luyuan']                     => array($kort . '/' . 'altomluyuan.php'                 => $setup['l_m_scootermerker_3_luyuan_description'], 'logo' => 'logo_luyuan.png')
            ,$setup['l_m_scootermerker_3_lynx']                       => array($kort . '/' . 'altomlynx.php'                   => $setup['l_m_scootermerker_3_lynx_description'], 'logo' => 'logo_lynx.png')
            ,$setup['l_m_scootermerker_3_malaguti']                   => array($kort . '/' . 'altommalaguti.php'               => $setup['l_m_scootermerker_3_malaguti_description'], 'logo' => 'logo_malaguti.png')
            ,$setup['l_m_scootermerker_3_motormania']                 => array($kort . '/' . 'altommotormania.php'             => $setup['l_m_scootermerker_3_motormania_description'], 'logo' => 'logo_motormania.png')
            ,$setup['l_m_scootermerker_3_nicom']                      => array($kort . '/' . 'altomnicom.php'                  => $setup['l_m_scootermerker_3_nicom_description'], 'logo' => 'logo_nicom.png')
            ,$setup['l_m_scootermerker_3_nordicebike']                => array($kort . '/' . 'altomnordicebike.php'            => $setup['l_m_scootermerker_3_nordicebike_description'], 'logo' => 'logo_nordicebike.png')
            ,$setup['l_m_scootermerker_3_norsjo']                     => array($kort . '/' . 'altomnorsjo.php'                 => $setup['l_m_scootermerker_3_norsjo_description'], 'logo' => 'logo_norsjo.png')
         ),$setup['l_m_scootermerker_4'] => array(
             $setup['l_m_scootermerker_4_peugeot'] . $top30           => array($kort . '/' . 'altompeugeot.php'                => $setup['l_m_scootermerker_4_peugeot_description'], 'logo' => 'logo_peugeot.png')
            ,$setup['l_m_scootermerker_4_peugeotevivacity']           => array($kort . '/' . 'specielt_peugeotevivacity.php'   => $setup['l_m_scootermerker_4_peugeotevivacity_description'], 'logo' => 'logo_peugeot_evivacity.png')
            ,$setup['l_m_scootermerker_4_pgo'] . $top20               => array($kort . '/' . 'altompgo.php'                    => $setup['l_m_scootermerker_4_pgo_description'], 'logo' => 'logo_pgo.png')
            ,$setup['l_m_scootermerker_4_piaggio'] . $top30           => array($kort . '/' . 'altompiaggio.php'                => $setup['l_m_scootermerker_4_piaggio_description'], 'logo' => 'logo_piaggio.png')
            ,$setup['l_m_scootermerker_4_puch'] . $top30              => array($kort . '/' . 'altompuch.php'                   => $setup['l_m_scootermerker_4_puch_description'], 'logo' => 'logo_puch.png')
            ,$setup['l_m_scootermerker_4_qingqi']                     => array($kort . '/' . 'altomqingqi.php'                 => $setup['l_m_scootermerker_4_qingqi_description'], 'logo' => 'logo_qingqi.png')
            ,$setup['l_m_scootermerker_4_regalraptor']                => array($kort . '/' . 'altomregalraptor.php'            => $setup['l_m_scootermerker_4_regalraptor_description'], 'logo' => 'logo_regalraptor.png')
            ,$setup['l_m_scootermerker_4_rieju']                      => array($kort . '/' . 'altomrieju.php'                  => $setup['l_m_scootermerker_4_rieju_description'], 'logo' => 'logo_rieju.png')
            ,$setup['l_m_scootermerker_4_romet']                      => array($kort . '/' . 'altomromet.php'                  => $setup['l_m_scootermerker_4_romet_description'], 'logo' => 'logo_romet.png')
            ,$setup['l_m_scootermerker_4_sachs']                      => array($kort . '/' . 'altomsachs.php'                  => $setup['l_m_scootermerker_4_sachs_description'], 'logo' => 'logo_sachs.png')
            ,$setup['l_m_scootermerker_4_secma']                      => array($kort . '/' . 'altomsecma.php'                  => $setup['l_m_scootermerker_4_secma_description'], 'logo' => 'logo_secma.png')
            ,$setup['l_m_scootermerker_4_scoopie']                    => array($kort . '/' . 'altomscoopie.php'                => $setup['l_m_scootermerker_4_scoopie_description'], 'logo' => 'logo_scoopie.png')
            ,$setup['l_m_scootermerker_4_skyteam']                    => array($kort . '/' . 'altomskyteam.php'                => $setup['l_m_scootermerker_4_skyteam_description'], 'logo' => 'logo_skyteam.png')
            ,$setup['l_m_scootermerker_4_solex']                      => array($kort . '/' . 'altomsolex.php'                  => $setup['l_m_scootermerker_4_solex_description'], 'logo' => 'logo_solex.png')
            ,$setup['l_m_scootermerker_4_solo']                       => array($kort . '/' . 'altomsolo.php'                   => $setup['l_m_scootermerker_4_solo_description'], 'logo' => 'logo_solo.png')
            ,$setup['l_m_scootermerker_4_suzuki']                     => array($kort . '/' . 'altomsuzuki.php'                 => $setup['l_m_scootermerker_4_suzuki_description'], 'logo' => 'logo_suzuki.png')
            ,$setup['l_m_scootermerker_4_swap']                       => array($kort . '/' . 'altomswap.php'                   => $setup['l_m_scootermerker_4_swap_description'], 'logo' => 'logo_swap.png')
            ,$setup['l_m_scootermerker_4_sym']                        => array($kort . '/' . 'altomsym.php'                    => $setup['l_m_scootermerker_4_sym_description'], 'logo' => 'logo_sym.png')
         ),$setup['l_m_scootermerker_5'] => array(
             $setup['l_m_scootermerker_5_tantepaula']                 => array($kort . '/' . 'altomtantepaula.php'             => $setup['l_m_scootermerker_5_tantepaula_description'], 'logo' => 'logo_tantepaula.png')
            ,$setup['l_m_scootermerker_5_texas']                      => array($kort . '/' . 'altomtexas.php'                  => $setup['l_m_scootermerker_5_texas_description'], 'logo' => 'logo_texas.png')
            ,$setup['l_m_scootermerker_5_tgb']                        => array($kort . '/' . 'altomtgb.php'                    => $setup['l_m_scootermerker_5_tgb_description'], 'logo' => 'logo_tgb.png')
            ,$setup['l_m_scootermerker_5_tms']                        => array($kort . '/' . 'altomtms.php'                    => $setup['l_m_scootermerker_5_tms_description'], 'logo' => 'logo_tms.png')
            ,$setup['l_m_scootermerker_5_tomos']                      => array($kort . '/' . 'altomtomos.php'                  => $setup['l_m_scootermerker_5_tomos_description'], 'logo' => 'logo_tomos.png')
            ,$setup['l_m_scootermerker_5_trilet']                     => array($kort . '/' . 'altomtrilet.php'                 => $setup['l_m_scootermerker_5_trilet_description'], 'logo' => 'logo_trilet.png')
            ,$setup['l_m_scootermerker_5_varg']                       => array($kort . '/' . 'altomvarg.php'                   => $setup['l_m_scootermerker_5_varg_description'], 'logo' => 'logo_varg.png')
            ,$setup['l_m_scootermerker_5_vespa']                      => array($kort . '/' . 'altomvespa.php'                  => $setup['l_m_scootermerker_5_vespa_description'], 'logo' => 'logo_vespa.png')
            ,$setup['l_m_scootermerker_5_xingyue']                    => array($kort . '/' . 'altomxingyue.php'                => $setup['l_m_scootermerker_5_xingyue_description'], 'logo' => 'logo_xingyue.png')
            ,$setup['l_m_scootermerker_5_yamaha']                     => array($kort . '/' . 'altomyamaha.php'                 => $setup['l_m_scootermerker_5_yamaha_description'], 'logo' => 'logo_yamaha.png')
            ,$setup['l_m_scootermerker_5_yamasaki']                   => array($kort . '/' . 'altomyamasaki.php'               => $setup['l_m_scootermerker_5_yamasaki_description'], 'logo' => 'logo_yamasaki.png')
            ,$setup['l_m_scootermerker_5_yiben']                      => array($kort . '/' . 'altomyiben.php'                  => $setup['l_m_scootermerker_5_yiben_description'], 'logo' => 'logo_yiben.png')
            ,$setup['l_m_scootermerker_5_zhenhua']                    => array($kort . '/' . 'altomzhenhua.php'                => $setup['l_m_scootermerker_5_zhenhua_description'], 'logo' => 'logo_zhenhua.png')
            ,$setup['l_m_scootermerker_5_zongshen']                   => array($kort . '/' . 'altomzongshen.php'               => $setup['l_m_scootermerker_5_zongshen_description'], 'logo' => 'logo_zongshen.png')
         )
      )
      ,$setup['l_m_scootermerker_altomandre']                  => array($kort . '/' . 'altomandre.php'                  => $setup['l_m_scootermerker_altomandre_description'], 'thumbnail' => 'billed3445.jpg')
      ,$setup['l_m_scootermerker_specielt_3hjuletscootere'] . $top20 => array($kort . '/' . 'specielt_3hjuletscootere.php'    => $setup['l_m_scootermerker_specielt_3hjuletscootere_description'], 'thumbnail' => 'billed2252.jpg')
      ,$setup['l_m_scootermerker_fremtidensscootere']          => array($kort . '/' . 'fremtidensscootere.php'          => $setup['l_m_scootermerker_fremtidensscootere_description'], 'thumbnail' => 'billed2274.jpg')
      ,$setup['l_m_scootermerker_galleri_manglerdata']         => array($kort . '/' . 'galleri_manglerdata.php'         => $setup['l_m_scootermerker_galleri_manglerdata_description'], 'thumbnail' => 'billed3446.jpg')
      ,$setup['l_m_scootermerker_manglerdata']                 => array($kort . '/' . 'manglerdata.php'                 => $setup['l_m_scootermerker_manglerdata_description'], 'thumbnail' => 'billed3446.jpg')
      ,$setup['l_m_scootermerker_2takt_modellermed2taktmotor'] => array($kort . '/' . '2takt_modellermed2taktmotor.php' => $setup['l_m_scootermerker_2takt_modellermed2taktmotor_description'], 'thumbnail' => 'billed3265.jpg')
      ,$setup['l_m_scootermerker_elektriskescootere']          => array($kort . '/' . 'elektriskescootere.php'          => $setup['l_m_scootermerker_elektriskescootere_description'], 'thumbnail' => 'elektriskescootere.jpg')

   ),$setup['l_m_scooterensdele'] => array(
       array(
         $setup['l_m_scooterensdele_2taktmotor'] => array(
             $setup['l_m_scooterensdele_2taktmotor_de2takter']                   => array($kort . '/' . '2takt_de2takter.php'             => $setup['l_m_scooterensdele_2taktmotor_de2takter_description'], 'thumbnail' => 'billed3242.jpg')
            ,$setup['l_m_scooterensdele_2taktmotor_motortyper']                  => array($kort . '/' . '2takt_motortyper.php'            => $setup['l_m_scooterensdele_2taktmotor_motortyper_description'], 'thumbnail' => 'billed3734.jpg')
            ,$setup['l_m_scooterensdele_2taktmotor_reedvalve']                   => array($kort . '/' . '2takt_reedvalve.php'             => $setup['l_m_scooterensdele_2taktmotor_reedvalve_description'], 'thumbnail' => 'billed3258.jpg')
            ,$setup['l_m_scooterensdele_2taktmotor_topstykkeogcylinder']         => array($kort . '/' . '2takt_topstykkeogcylinder.php'   => $setup['l_m_scooterensdele_2taktmotor_topstykkeogcylinder_description'], 'thumbnail' => 'billed3260.jpg')
            ,$setup['l_m_scooterensdele_2taktmotor_stempel']                     => array($kort . '/' . '2takt_stempel.php'               => $setup['l_m_scooterensdele_2taktmotor_stempel_description'], 'thumbnail' => 'billed3261.jpg')
            ,$setup['l_m_scooterensdele_2taktmotor_olietank']                    => array($kort . '/' . '2takt_olietank.php'              => $setup['l_m_scooterensdele_2taktmotor_olietank_description'], 'thumbnail' => 'billed3263.jpg')
            ,$setup['l_m_scooterensdele_2taktmotor_oliepumpe']                   => array($kort . '/' . '2takt_oliepumpe.php'             => $setup['l_m_scooterensdele_2taktmotor_oliepumpe_description'], 'thumbnail' => 'billed3264.jpg')
            ,$setup['l_m_scooterensdele_2taktmotor_ditech']                      => array($kort . '/' . 'specielt_ditech.php'             => $setup['l_m_scooterensdele_2taktmotor_ditech_description'], 'thumbnail' => 'billed2665.jpg')
         ),$setup['l_m_scooterensdele_4taktmotor'] => array(
             $setup['l_m_scooterensdele_4taktmotor_de4takter']                   => array($kort . '/' . 'motor_de4takter.php'             => $setup['l_m_scooterensdele_4taktmotor_de4takter_description'], 'thumbnail' => 'billed3289.jpg')
            ,$setup['l_m_scooterensdele_4taktmotor_motortyper']                  => array($kort . '/' . 'motor_motortyper.php'            => $setup['l_m_scooterensdele_4taktmotor_motortyper_description'], 'thumbnail' => 'billed3290.jpg')
            ,$setup['l_m_scooterensdele_4taktmotor_knastaksel']                  => array($kort . '/' . 'motor_knastaksel.php'            => $setup['l_m_scooterensdele_4taktmotor_knastaksel_description'], 'thumbnail' => 'knastaksel.jpg')
            ,$setup['l_m_scooterensdele_4taktmotor_topstykkeogcylinder']         => array($kort . '/' . 'motor_topstykkeogcylinder.php'   => $setup['l_m_scooterensdele_4taktmotor_topstykkeogcylinder_description'], 'thumbnail' => 'billed3292.jpg')
            ,$setup['l_m_scooterensdele_4taktmotor_ventiler']                    => array($kort . '/' . 'motor_ventiler.php'              => $setup['l_m_scooterensdele_4taktmotor_ventiler_description'], 'thumbnail' => 'billed3291.jpg')
            ,$setup['l_m_scooterensdele_4taktmotor_forbrendingskammer']          => array($kort . '/' . 'motor_forbrendingskammer.php'    => $setup['l_m_scooterensdele_4taktmotor_forbrendingskammer_description'], 'thumbnail' => 'billed3293.jpg')
            ,$setup['l_m_scooterensdele_4taktmotor_stempel']                     => array($kort . '/' . 'motor_stempel.php'               => $setup['l_m_scooterensdele_4taktmotor_stempel_description'], 'thumbnail' => 'billed3294.jpg')
            ,$setup['l_m_scooterensdele_4taktmotor_krumtap']                     => array($kort . '/' . 'motor_krumtap.php'               => $setup['l_m_scooterensdele_4taktmotor_krumtap_description'], 'thumbnail' => 'motor_krumtap.jpg')
            ,$setup['l_m_scooterensdele_4taktmotor_svinghjul']                   => array($kort . '/' . 'motor_svinghjul.php'             => $setup['l_m_scooterensdele_4taktmotor_svinghjul_description'], 'thumbnail' => 'billed3312.jpg')
            ,$setup['l_m_scooterensdele_4taktmotor_knastkedestrammer']           => array($kort . '/' . 'motor_knastkedestrammer.php'     => $setup['l_m_scooterensdele_4taktmotor_knastkedestrammer_description'], 'thumbnail' => 'billed3296.jpg')
            ,$setup['l_m_scooterensdele_4taktmotor_oliepumpe']                   => array($kort . '/' . 'motor_oliepumpe.php'             => $setup['l_m_scooterensdele_4taktmotor_oliepumpe_description'], 'thumbnail' => 'billed3297.jpg')
            ,$setup['l_m_scooterensdele_4taktmotor_pakdase']                     => array($kort . '/' . 'motor_pakdase.php'               => $setup['l_m_scooterensdele_4taktmotor_pakdase_description'], 'thumbnail' => 'billed3298.jpg')
            ,$setup['l_m_scooterensdele_4taktmotor_motorblok']                   => array($kort . '/' . 'motor_motorblok.php'             => $setup['l_m_scooterensdele_4taktmotor_motorblok_description'], 'thumbnail' => 'motorblok.jpg')
         ),$setup['l_m_scooterensdele_elektrisk'] => array(
             $setup['l_m_scooterensdele_elektrisk_karburator']                   => array($kort . '/' . 'karburator.php#automatisk_choker'=> $setup['l_m_scooterensdele_elektrisk_karburator_description'], 'thumbnail' => 'billed3266.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_batteri']            => array($kort . '/' . 'elektrisk_batteri.php'           => $setup['l_m_scooterensdele_elektrisk_elektrisk_batteri_description'], 'thumbnail' => 'billed3267.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_benzintank']                   => array($kort . '/' . 'benzintank.php#benzinmaler'      => $setup['l_m_scooterensdele_elektrisk_benzintank_description'], 'thumbnail' => 'billed3268.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_eldiagrammer']       => array($kort . '/' . 'elektrisk_eldiagrammer.php'      => $setup['l_m_scooterensdele_elektrisk_elektrisk_eldiagrammer_description'], 'thumbnail' => 'billed3269.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_kontakter']          => array($kort . '/' . 'elektrisk_kontakter.php'         => $setup['l_m_scooterensdele_elektrisk_elektrisk_kontakter_description'], 'thumbnail' => 'billed3270.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_lambdasonde']        => array($kort . '/' . 'elektrisk_lambdasonde.php'       => $setup['l_m_scooterensdele_elektrisk_elektrisk_lambdasonde_description'], 'thumbnail' => 'billed3271.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_lys']                => array($kort . '/' . 'elektrisk_lys.php'               => $setup['l_m_scooterensdele_elektrisk_elektrisk_lys_description'], 'thumbnail' => 'billed3272.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_modstande']          => array($kort . '/' . 'elektrisk_modstande.php'         => $setup['l_m_scooterensdele_elektrisk_elektrisk_modstande_description'], 'thumbnail' => 'billed3273.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_horn']               => array($kort . '/' . 'elektrisk_horn.php'              => $setup['l_m_scooterensdele_elektrisk_elektrisk_horn_description'], 'thumbnail' => 'billed3274.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_sikring']            => array($kort . '/' . 'elektrisk_sikring.php'           => $setup['l_m_scooterensdele_elektrisk_elektrisk_sikring_description'], 'thumbnail' => 'billed3275.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_spoler']             => array($kort . '/' . 'elektrisk_spoler.php'            => $setup['l_m_scooterensdele_elektrisk_elektrisk_spoler_description'], 'thumbnail' => 'billed3276.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_spendingsregulator'] => array($kort . '/' . 'elektrisk_spendingsregulator.php'=> $setup['l_m_scooterensdele_elektrisk_elektrisk_spendingsregulator_description'], 'thumbnail' => 'billed3277.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_starter']            => array($kort . '/' . 'elektrisk_starter.php'           => $setup['l_m_scooterensdele_elektrisk_elektrisk_starter_description'], 'thumbnail' => 'billed3278.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_stelforbindelse']    => array($kort . '/' . 'elektrisk_stelforbindelse.php'   => $setup['l_m_scooterensdele_elektrisk_elektrisk_stelforbindelse_description'], 'thumbnail' => 'billed3279.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_tending'] . $top20   => array($kort . '/' . 'elektrisk_tending.php'           => $setup['l_m_scooterensdele_elektrisk_elektrisk_tending_description'], 'thumbnail' => 'billed3280.jpg')
            ,$setup['l_m_scooterensdele_elektrisk_elektrisk_ur']                 => array($kort . '/' . 'elektrisk_ur.php'                => $setup['l_m_scooterensdele_elektrisk_elektrisk_ur_description'], 'thumbnail' => 'billed3281.jpg')
         ),$setup['l_m_scooterensdele_elektriskscooter'] => array(
             $setup['l_m_scooterensdele_elektriskscooter_batteri']               => array($kort . '/' . 'elektriskscooter_batteri.php'          => $setup['l_m_scooterensdele_elektriskscooter_batteri_description'], 'thumbnail' => 'billed3244.jpg')
            ,$setup['l_m_scooterensdele_elektriskscooter_controller']            => array($kort . '/' . 'elektriskscooter_controller.php'       => $setup['l_m_scooterensdele_elektriskscooter_controller_description'], 'thumbnail' => 'billed3245.jpg')
            ,$setup['l_m_scooterensdele_elektriskscooter_motor']                 => array($kort . '/' . 'elektriskscooter_motor.php'            => $setup['l_m_scooterensdele_elektriskscooter_motor_description'], 'thumbnail' => 'billed3246.jpg')
            ,$setup['l_m_scooterensdele_elektriskscooter_oplader']               => array($kort . '/' . 'elektriskscooter_oplader.php'          => $setup['l_m_scooterensdele_elektriskscooter_oplader_description'], 'thumbnail' => 'billed3243.jpg')
            ,$setup['l_m_scooterensdele_elektriskscooter_bms']                   => array($kort . '/' . 'elektriskscooter_bms.php'              => $setup['l_m_scooterensdele_elektriskscooter_bms_description'], 'thumbnail' => 'billed3247.jpg')
            ,$setup['l_m_scooterensdele_elektriskscooter_dctildckonverter']      => array($kort . '/' . 'elektriskscooter_dctildckonverter.php' => $setup['l_m_scooterensdele_elektriskscooter_dctildckonverter_description'], 'thumbnail' => 'billed3248.jpg')
            ,$setup['l_m_scooterensdele_elektriskscooter_instrumentpanel']       => array($kort . '/' . 'elektriskscooter_instrumentpanel.php'  => $setup['l_m_scooterensdele_elektriskscooter_instrumentpanel_description'], 'thumbnail' => 'billed3249.jpg')
            ,$setup['l_m_scooterensdele_elektriskscooter_gashandtag']            => array($kort . '/' . 'elektriskscooter_gashandtag.php'       => $setup['l_m_scooterensdele_elektriskscooter_gashandtag_description'], 'thumbnail' => 'billed3250.jpg')
            ,$setup['l_m_scooterensdele_elektriskscooter_knapper']               => array($kort . '/' . 'elektriskscooter_knapper.php'          => $setup['l_m_scooterensdele_elektriskscooter_knapper_description'], 'thumbnail' => 'billed3251.jpg')
            ,$setup['l_m_scooterensdele_elektriskscooter_problemer']             => array($kort . '/' . 'elektriskscooter_problemer.php'        => $setup['l_m_scooterensdele_elektriskscooter_problemer_description'], 'thumbnail' => 'billed3243.jpg')
            ,$setup['l_m_scooterensdele_elektriskscooter_filer']                 => array($kort . '/' . 'elektriskscooter_filer.php'            => $setup['l_m_scooterensdele_elektriskscooter_filer_description'], 'thumbnail' => 'billed3253.jpg')
            ,$setup['l_m_scooterensdele_elektriskscooter_videoer']               => array($kort . '/' . 'elektriskscooter_videoer.php'          => $setup['l_m_scooterensdele_elektriskscooter_videoer_description'], 'thumbnail' => 'billed3254.jpg')
         ),$setup['l_m_scooterensdele_luftfilterogudstodning'] => array(
             $setup['l_m_scooterensdele_luftfilterogudstodning_luftfilter']      => array($kort . '/' . 'luftfilter.php'                       => $setup['l_m_scooterensdele_luftfilterogudstodning_luftfilter_description'], 'thumbnail' => 'billed3288.jpg')
            ,$setup['l_m_scooterensdele_luftfilterogudstodning_luftfiltertyper'] => array($kort . '/' . 'luftfilter_luftfiltertyper.php'       => $setup['l_m_scooterensdele_luftfilterogudstodning_luftfiltertyper_description'], 'thumbnail' => 'billed3287.jpg')
            ,$setup['l_m_scooterensdele_luftfilterogudstodning_kulstofbeholder'] => array($kort . '/' . 'luftfilter_kulstofbeholder.php'       => $setup['l_m_scooterensdele_luftfilterogudstodning_kulstofbeholder_description'], 'thumbnail' => 'billed3286.jpg')
            ,$setup['l_m_scooterensdele_luftfilterogudstodning_sekundertluftindsugningssystem'] => array($kort . '/' . 'luftfilter_sekundertluftindsugningssystem.php' => $setup['l_m_scooterensdele_luftfilterogudstodning_sekundertluftindsugningssystem_description'], 'thumbnail' => 'billed3282.jpg')
            ,$setup['l_m_scooterensdele_luftfilterogudstodning_udstodning']      => array($kort . '/' . 'udstodning.php'                       => $setup['l_m_scooterensdele_luftfilterogudstodning_udstodning_description'], 'thumbnail' => 'billed3283.jpg')
            ,$setup['l_m_scooterensdele_luftfilterogudstodning_katalysator']     => array($kort . '/' . 'udstodning_katalysator.php'           => $setup['l_m_scooterensdele_luftfilterogudstodning_katalysator_description'], 'thumbnail' => 'billed3284.jpg')
            ,$setup['l_m_scooterensdele_luftfilterogudstodning_euroemission']    => array($kort . '/' . 'udstodning_euroemission.php'          => $setup['l_m_scooterensdele_luftfilterogudstodning_euroemission_description'], 'thumbnail' => 'billed3285.jpg')
         ),$setup['l_m_scooterensdele_transmission'] => array(
             $setup['l_m_scooterensdele_transmission_variator']                  => array($kort . '/' . 'transmission_variator.php'            => $setup['l_m_scooterensdele_transmission_variator_description'], 'thumbnail' => 'billed3300.jpg')
            ,$setup['l_m_scooterensdele_transmission_forresteremskiver']         => array($kort . '/' . 'transmission_forresteremskiver.php'   => $setup['l_m_scooterensdele_transmission_forresteremskiver_description'], 'thumbnail' => 'billed3301.jpg')
            ,$setup['l_m_scooterensdele_transmission_kilerem']                   => array($kort . '/' . 'transmission_kilerem.php'             => $setup['l_m_scooterensdele_transmission_kilerem_description'], 'thumbnail' => 'billed3731.jpg')
            ,$setup['l_m_scooterensdele_transmission_bagersteremskiver']         => array($kort . '/' . 'transmission_bagersteremskiver.php'   => $setup['l_m_scooterensdele_transmission_bagersteremskiver_description'], 'thumbnail' => 'billed3732.jpg')
            ,$setup['l_m_scooterensdele_transmission_reduktionsgear']            => array($kort . '/' . 'transmission_reduktionsgear.php'      => $setup['l_m_scooterensdele_transmission_reduktionsgear_description'], 'thumbnail' => 'billed3304.jpg')
            ,$setup['l_m_scooterensdele_transmission_andet']                     => array($kort . '/' . 'transmission_andet.php'               => $setup['l_m_scooterensdele_transmission_andet_description'], 'thumbnail' => 'billed3305.jpg')
         )
      )
      ,$setup['l_m_scooterensdele_affjedring']              => array($kort . '/' . 'affjedring.php'                  => $setup['l_m_scooterensdele_affjedring_description'], 'thumbnail' => 'billed2232.jpg')
      ,$setup['l_m_scooterensdele_begrensninger'] . $top10  => array($kort . '/' . 'begrensninger.php'               => $setup['l_m_scooterensdele_begrensninger_description'], 'thumbnail' => 'billed2233.jpg')
      ,$setup['l_m_scooterensdele_benzintank']              => array($kort . '/' . 'benzintank.php'                  => $setup['l_m_scooterensdele_benzintank_description'], 'thumbnail' => 'billed2234.jpg')
      ,$setup['l_m_scooterensdele_bremser']                 => array($kort . '/' . 'bremser.php'                     => $setup['l_m_scooterensdele_bremser_description'], 'thumbnail' => 'billed2235.jpg')
      ,$setup['l_m_scooterensdele_brandstofindsprojtning']  => array($kort . '/' . 'brandstofindsprojtning.php'      => $setup['l_m_scooterensdele_brandstofindsprojtning_description'], 'thumbnail' => 'billed2236.jpg')
      ,$setup['l_m_scooterensdele_dek']                     => array($kort . '/' . 'dek.php'                         => $setup['l_m_scooterensdele_dek_description'], 'thumbnail' => 'billed2237.jpg')
      ,$setup['l_m_scooterensdele_karburator'] . $top10     => array($kort . '/' . 'karburator.php'                  => $setup['l_m_scooterensdele_karburator_description'], 'thumbnail' => 'billed2239.jpg')
      ,$setup['l_m_scooterensdele_kickstarter']             => array($kort . '/' . 'kickstarter.php'                 => $setup['l_m_scooterensdele_kickstarter_description'], 'thumbnail' => 'billed2240.jpg')
      ,$setup['l_m_scooterensdele_koling']                  => array($kort . '/' . 'koling.php'                      => $setup['l_m_scooterensdele_koling_description'], 'thumbnail' => 'billed2241.jpg')
      ,$setup['l_m_scooterensdele_lejer']                   => array($kort . '/' . 'lejer.php'                       => $setup['l_m_scooterensdele_lejer_description'], 'thumbnail' => 'billed2613.jpg')
      ,$setup['l_m_scooterensdele_reservedelstegninger']    => array($kort . '/' . 'reservedelstegninger.php'        => $setup['l_m_scooterensdele_reservedelstegninger_description'], 'thumbnail' => 'billed2244.jpg')
      ,$setup['l_m_scooterensdele_sidespejle']              => array($kort . '/' . 'sidespejle.php'                  => $setup['l_m_scooterensdele_sidespejle_description'], 'thumbnail' => 'sidespejle.jpg')
      ,$setup['l_m_scooterensdele_speedometer']             => array($kort . '/' . 'speedometer.php'                 => $setup['l_m_scooterensdele_speedometer_description'], 'thumbnail' => 'billed2245.jpg')
      ,$setup['l_m_scooterensdele_starterdrev']             => array($kort . '/' . 'starterdrev.php'                 => $setup['l_m_scooterensdele_starterdrev_description'], 'thumbnail' => 'billed2246.jpg')
      ,$setup['l_m_scooterensdele_stotteben']               => array($kort . '/' . 'stotteben.php'                   => $setup['l_m_scooterensdele_stotteben_description'], 'thumbnail' => 'billed2247.jpg')
      ,$setup['l_m_scooterensdele_styretoj']                => array($kort . '/' . 'styretoj.php'                    => $setup['l_m_scooterensdele_styretoj_description'], 'thumbnail' => 'billed3736.jpg')
      ,$setup['l_m_scooterensdele_tendror'] . $top20        => array($kort . '/' . 'tendror.php'                     => $setup['l_m_scooterensdele_tendror_description'], 'thumbnail' => 'billed2250.jpg')

   ),$setup['l_m_service'] => array(
       array(
         $setup['l_m_service_fejlfinding'] => array(
             $setup['l_m_service_fejlfinding_introduktion'] . $top10    => array($kort . '/' . 'service_fejlfinding_introduktion.php'           => $setup['l_m_service_fejlfinding_introduktion_description'], 'thumbnail' => 'billed3447.jpg')
            ,$setup['l_m_service_fejlfinding_benzintank']               => array($kort . '/' . 'service_fejlfinding_benzintank.php'             => $setup['l_m_service_fejlfinding_benzintank_description'], 'thumbnail' => 'billed3306.jpg')
            ,$setup['l_m_service_fejlfinding_bremser']                  => array($kort . '/' . 'service_fejlfinding_bremser.php'                => $setup['l_m_service_fejlfinding_bremser_description'], 'thumbnail' => 'billed3726.jpg')
            ,$setup['l_m_service_fejlfinding_elektrisk'] . $top20       => array($kort . '/' . 'service_fejlfinding_elektrisk.php'              => $setup['l_m_service_fejlfinding_elektrisk_description'], 'thumbnail' => 'billed2278.jpg')
            ,$setup['l_m_service_fejlfinding_karburator']               => array($kort . '/' . 'service_fejlfinding_karburator.php'             => $setup['l_m_service_fejlfinding_karburator_description'], 'thumbnail' => 'billed3307.jpg')
            ,$setup['l_m_service_fejlfinding_kendteproblemer']          => array($kort . '/' . 'service_fejlfinding_kendteproblemer.php'        => $setup['l_m_service_fejlfinding_kendteproblemer_description'], 'thumbnail' => 'billed3729.jpg')
            ,$setup['l_m_service_fejlfinding_luftfilterogudstodning']   => array($kort . '/' . 'service_fejlfinding_luftfilterogudstodning.php' => $setup['l_m_service_fejlfinding_luftfilterogudstodning_description'], 'thumbnail' => 'billed3727.jpg')
            ,$setup['l_m_service_fejlfinding_motor']                    => array($kort . '/' . 'service_fejlfinding_motor.php'                  => $setup['l_m_service_fejlfinding_motor_description'], 'thumbnail' => 'billed3308.jpg')
            ,$setup['l_m_service_fejlfinding_starter']                  => array($kort . '/' . 'service_fejlfinding_starter.php'                => $setup['l_m_service_fejlfinding_starter_description'], 'thumbnail' => 'billed3309.jpg')
            ,$setup['l_m_service_fejlfinding_styretoj']                 => array($kort . '/' . 'service_fejlfinding_styretoj.php'               => $setup['l_m_service_fejlfinding_styretoj_description'], 'thumbnail' => 'billed3728.jpg')
            ,$setup['l_m_service_fejlfinding_transmission']             => array($kort . '/' . 'service_fejlfinding_transmission.php'           => $setup['l_m_service_fejlfinding_transmission_description'], 'thumbnail' => 'billed3310.jpg')
       ),$setup['l_m_service_verktojskassen'] => array(
             $setup['l_m_service_verktojskassen_verktoj']               => array($kort . '/' . 'verktoj.php'                     => $setup['l_m_service_verktojskassen_verktoj_description'], 'thumbnail' => 'billed2267.jpg')
       ),$setup['l_m_service_elektrisk'] => array(
             $setup['l_m_service_elektrisk_elektriskarbejde']           => array($kort . '/' . 'elektrisk_arbejde.php'           => $setup['l_m_service_elektrisk_elektriskarbejde_description'], 'thumbnail' => 'billed3655.jpg')
       ),$setup['l_m_vesker'] => array(
             $setup['l_m_vesker_benzin']                     => array($kort . '/' . 'benzin.php'                      => $setup['l_m_vesker_benzin_description'], 'thumbnail' => 'billed2258.jpg')
            ,$setup['l_m_vesker_olie']                       => array($kort . '/' . 'olie.php'                        => $setup['l_m_vesker_olie_description'], 'thumbnail' => 'billed2261.jpg')
            ,$setup['l_m_vesker_smorelse']                   => array($kort . '/' . 'smorelse.php'                    => $setup['l_m_vesker_smorelse_description'], 'thumbnail' => 'billed2264.jpg')
         )
      )
      ,$setup['l_m_service_affjedring']                              => array($kort . '/' . 'service_affjedring.php'          => $setup['l_m_service_affjedring_description'], 'thumbnail' => 'billed2965.jpg')
      ,$setup['l_m_service_bremser'] . $top30                        => array($kort . '/' . 'service_bremser.php'             => $setup['l_m_service_bremser_description'], 'thumbnail' => 'billed2275.jpg')
      ,$setup['l_m_service_dek'] . $top30                            => array($kort . '/' . 'service_dek.php'                 => $setup['l_m_service_dek_description'], 'thumbnail' => 'billed2276.jpg')
      ,$setup['l_m_service_elektrisk']                               => array($kort . '/' . 'service_elektrisk.php'           => $setup['l_m_service_elektrisk_description'], 'thumbnail' => 'billed2277.jpg')
      ,$setup['l_m_service_forlygte']                                => array($kort . '/' . 'service_forlygte.php'            => $setup['l_m_service_forlygte_description'], 'thumbnail' => 'billed2279.jpg')
      ,$setup['l_m_service_kabler']                                  => array($kort . '/' . 'service_kabler.php'              => $setup['l_m_service_kabler_description'], 'thumbnail' => 'billed2280.jpg')
      ,$setup['l_m_service_karburator'] . $top20                     => array($kort . '/' . 'service_karburator.php'          => $setup['l_m_service_karburator_description'], 'thumbnail' => 'billed2281.jpg')
      ,$setup['l_m_service_koling']                                  => array($kort . '/' . 'service_koling.php'              => $setup['l_m_service_koling_description'], 'thumbnail' => 'billed2966.jpg')
      ,$setup['l_m_service_luftfilter']                              => array($kort . '/' . 'service_luftfilter.php'          => $setup['l_m_service_luftfilter_description'], 'thumbnail' => 'billed2282.jpg')
      ,$setup['l_m_service_motor']                                   => array($kort . '/' . 'service_motor.php'               => $setup['l_m_service_motor_description'], 'thumbnail' => 'billed2325.jpg')
      ,$setup['l_m_service_olie']                                    => array($kort . '/' . 'service_olie.php'                => $setup['l_m_service_olie_description'], 'thumbnail' => 'billed2283.jpg')
      ,$setup['l_m_service_serviceskemaer']                          => array($kort . '/' . 'service_serviceskemaer.php'      => $setup['l_m_service_serviceskemaer_description'], 'thumbnail' => 'billed2284.jpg')
      ,$setup['l_m_service_tilspendingsmoment']                      => array($kort . '/' . 'service_tilspendingsmoment.php'  => $setup['l_m_service_tilspendingsmoment_description'], 'thumbnail' => 'billed2285.jpg')
      ,$setup['l_m_service_transmission']                            => array($kort . '/' . 'service_transmission.php'        => $setup['l_m_service_transmission_description'], 'thumbnail' => 'billed2286.jpg')
      ,$setup['l_m_service_tending']                                 => array($kort . '/' . 'service_tending.php'             => $setup['l_m_service_tending_description'], 'thumbnail' => 'billed2287.jpg')
      ,$setup['l_m_service_tendror']                                 => array($kort . '/' . 'service_tendror.php'             => $setup['l_m_service_tendror_description'], 'thumbnail' => 'billed2288.jpg')
      ,$setup['l_m_service_ventiler'] . $top30                       => array($kort . '/' . 'service_ventiler.php'            => $setup['l_m_service_ventiler_description'], 'thumbnail' => 'billed2289.jpg')

   ),$setup['l_m_tilbehorekstraudstyr'] => array(
       array(
           $setup['l_m_tilbehorekstraudstyr_batterioplader'] => array(
             $setup['l_m_tilbehorekstraudstyr_batterioplader_ctekxs800']                 => array($kort . '/' . 'specielt_ctekxs800.php'          => $setup['l_m_tilbehorekstraudstyr_batterioplader_ctekxs800_description'], 'thumbnail' => 'billed3311.jpg')
            ,$setup['l_m_tilbehorekstraudstyr_batterioplader_optimate4']                 => array($kort . '/' . 'specielt_optimate4.php'          => $setup['l_m_tilbehorekstraudstyr_batterioplader_optimate4_description'], 'thumbnail' => 'billed2257.jpg')
         )
      )
      ,$setup['l_m_tilbehorekstraudstyr_tyverisikring'] . $top30     => array($kort . '/' . 'tyverisikring.php'               => $setup['l_m_tilbehorekstraudstyr_tyverisikring_description'], 'thumbnail' => 'billed2266.jpg')
      ,$setup['l_m_tilbehorekstraudstyr_omformer']                   => array($kort . '/' . 'specielt_omformer.php'           => $setup['l_m_tilbehorekstraudstyr_omformer_description'], 'thumbnail' => 'billed2971.jpg')
      ,$setup['l_m_tilbehorekstraudstyr_led']                        => array($kort . '/' . 'elektrisk_led.php'               => $setup['l_m_tilbehorekstraudstyr_led_description'], 'thumbnail' => 'billed3737.jpg')
      ,$setup['l_m_tilbehorekstraudstyr_fartbegrenser'] . $top30     => array($kort . '/' . 'fartbegrenser.php'               => $setup['l_m_tilbehorekstraudstyr_fartbegrenser_description'], 'thumbnail' => 'fartbegrenser.jpg')
      ,$setup['l_m_tilbehorekstraudstyr_malossimultivar']            => array($kort . '/' . 'malossimultivar.php'             => $setup['l_m_tilbehorekstraudstyr_malossimultivar_description'], 'thumbnail' => 'billed3440.jpg')
      ,$setup['l_m_tilbehorekstraudstyr_bigborekit']                 => array($kort . '/' . 'bigborekit.php'                  => $setup['l_m_tilbehorekstraudstyr_bigborekit_description'], 'thumbnail' => 'billed3654.jpg')
      ,$setup['l_m_tilbehorekstraudstyr_indsprojtningskit']          => array($kort . '/' . 'indsprojtningskit.php'           => $setup['l_m_tilbehorekstraudstyr_indsprojtningskit_description'], 'thumbnail' => 'billed3655.jpg')
      ,$setup['l_m_tilbehorekstraudstyr_kamera']                     => array($kort . '/' . 'kamera.php'                      => $setup['l_m_tilbehorekstraudstyr_kamera_description'], 'thumbnail' => 'billed3441.jpg')

   ),$setup['l_m_specielt'] => array(
//       array(
//           $setup['l_m_specielt_rodekassen']  => array(
             $setup['l_m_specielt_rodekassen_andet']                       => array($kort . '/' . 'rodekassen_andet.php'            => $setup['l_m_specielt_rodekassen_andet_description'], 'thumbnail' => 'billed2967.jpg')
            ,$setup['l_m_specielt_rodekassen_slidkanogetophastigheden']    => array($kort . '/' . 'slidkanogetophastigheden.php'    => $setup['l_m_specielt_rodekassen_slidkanogetophastigheden_description'], 'thumbnail' => 'slidkanogetophastigheden.jpg')
            ,$setup['l_m_specielt_rodekassen_forsogpaatfindeudafhvordanmanfarnummerpladepakobtbrugtscooterudenpapir']               => array($kort . '/' . 'forsogpaatfindeudafhvordanmanfarnummerpladepakobtbrugtscooterudenpapir.php'               => $setup['l_m_specielt_rodekassen_forsogpaatfindeudafhvordanmanfarnummerpladepakobtbrugtscooterudenpapir_description'], 'thumbnail' => 'forsogpaatfindeudafhvordanmanfarnummerpladepakobtbrugtscooterudenpapir.jpg')
//         )
//      )
      ,$setup['l_m_specielt_rodekassen_brandselscelle']                    => array($kort . '/' . 'brandselscelle.php'              => $setup['l_m_specielt_rodekassen_brandselscelle_description'], 'thumbnail' => 'billed2273.jpg')

   ),$setup['l_m_underholdning'] => array(
       $setup['l_m_interaktive_nummerplade']                   => array($kort . '/' . 'nummerplade.php'                 => $setup['l_m_interaktive_nummerplade_description'], 'thumbnail' => 'nummerplade.jpg')
      ,$setup['l_m_underholdning_billeder']                    => array($kort . '/' . 'billeder.php'                    => $setup['l_m_underholdning_billeder_description'], 'thumbnail' => 'billed2268.jpg')
      ,$setup['l_m_underholdning_videoer']                     => array($kort . '/' . 'videoer.php'                     => $setup['l_m_underholdning_videoer_description'], 'thumbnail' => 'billed2269.jpg')
      ,$setup['l_m_underholdning_spil']                        => array($kort . '/' . 'spil.php'                        => $setup['l_m_underholdning_spil_description'], 'thumbnail' => 'billed3733.jpg')
      ,$setup['l_m_underholdning_lyd']                         => array($kort . '/' . 'lyd.php'                         => $setup['l_m_underholdning_lyd_description'], 'thumbnail' => 'billed2617.jpg')

   ),$setup['l_m_undervisning'] => array(
       $setup['l_m_interaktive_teoriprove'] . $top10           => array($kort . '/' . 'teoriprove.php'                  => $setup['l_m_interaktive_teoriprove_description'], 'thumbnail' => 'billed2382.jpg')

   ),$setup['l_m_andresteder'] => array(
       $setup['l_m_hovedmenu_links']                => array($kort . '/' . 'links.php'                       => $setup['l_m_hovedmenu_links_description'], 'thumbnail' => 'billed3236.jpg')
      ,$setup['l_m_hovedmenu_stederidanmark']       => array($kort . '/' . 'stederidanmark.php'              => $setup['l_m_hovedmenu_stederidanmark_description'], 'thumbnail' => 'billed2291.jpg')
      ,$setup['l_m_hovedmenu_facebookfanside']      => array('http://www.facebook.com/scootergrisen'         => $setup['l_m_hovedmenu_facebookfanside_description'], 'thumbnail' => 'billed3735.jpg')

//   ),$setup['l_m_omhjemmesiden'] => array(

   )

);

$keywords = require_once './php/keywords.php';

require_once './php/hovedopsetning.php';

?>