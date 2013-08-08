<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/grundleggendeopsetning.php');
require_once('./php/language/da.php');
$setup['languageinuse'] = 'da';

$setup['en_eller_anden_besked_overst_pa_siden'] = '';

$setup['headekstra']             = '';
$setup['slutbodyekstra']         = '';
$setup['sidetopbesked']          = ""; // eventuelt en vigtig besked som vises næsten øverst i den midterste del af hver side
$setup['shortcuticon']           = "ikoner/shortcuticon0001.ico?version=2";
$setup['shortcuticon_lokalt']    = "ikoner/pilop.png";
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

$setup['vissprog']               = 0;
$setup['visreklame']             = 1;
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

$setup['smaikoner'] = array(
    array('gå til forummet', 'http://scootergrisen.dk/forum/', 'ikoner/ikon_forum.png', '52', '16')
   ,array('nyheder', 'nyheder.php', 'ikoner/ikon_nyheder.png', '16', '16')
   ,array('skriv en besked til mig som laver hjemmesiden', 'kontakt.php', 'ikoner/ikon_kontakt.png', '16', '16')
   ,array('introduktion', 'introduktion.php', 'ikoner/ikon_introduktion.png', '16', '16')
   ,array('kast terningen og besøg en tilfældig side på scootergrisen', 'tilfeldig.php', 'ikoner/ikon_tilfeldig.png', '16', '16')
   ,array('download', 'download.php', 'ikoner/go_down.png', '16', '16')
   ,array('typegodkendelser', 'typegodkendelser.php', 'ikoner/ikon_typegodkendelser.png', '16', '16')
   ,array('teoriprøve for lille knallert', 'teoriprove.php', 'ikoner/ikon_teoriprove.png', '16', '16')
   ,array('begrænsninger', 'begrensninger.php', 'ikoner/ikon_begrensninger.png', '16', '16')
   ,array('galleri', 'galleri.php', 'ikoner/ikon_galleri.png', '16', '16')
   ,array('kamera', 'kamera.php', 'ikoner/ikon_kamera.png', '16', '16')
   ,array('VIN checker', 'vinchecker.php', 'ikoner/ikon_vinchecker.png', '38', '16')
   ,array('links', 'links.php', 'ikoner/ikon_links.png', '16', '16')
   ,array('steder i danmark', 'stederidanmark.php', 'ikoner/ikon_stederidanmark.png', '16', '16')
   ,array('billeder fra gaden', 'billederfragaden.php', 'ikoner/ikon_billederfragaden.png', '16', '16')
   // til om vinteren ,array('vinterråd', 'vinterrad.php', 'ikoner/ikon_vinterrad.png', '16', '16')
   ,array('karburator', 'karburator.php', 'ikoner/ikon_karburator.png', '16', '16')
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
      ,array('knallertsider.dk',    'http://knallertsider.dk',       'knallertsider.dk.png')
      ,array('knallert-scooter.dk', 'http://knallert-scooter.dk',    'knallert-scooter.dk2.png')
      ,array('scootershop.dk',      'http://scootershop.dk',         'scootershop.dk.png')
      ,array('MSP-Tuning',          'http://www.msp-tuning.dk',      'www.msp-tuning.dk.jpg')
   );

$setup['spotlys'] = array(
   array(
       '/scooterhjemmeside/begrensninger.php'
      ,'/scooterhjemmeside/billeder/spotlys/begrensninger.gif'
      ,'begrænsninger'
      ,'kan fjernes hvis du vil køre hurtigere eller længere på literen'
   ), array(
       '/scooterhjemmeside/teoriprove.php'
      ,'/scooterhjemmeside/billeder/spotlys/teoriprove.gif'
      ,'prøv teoriprøven'
      ,'for lille knallert og se hvor lidt fejl du kan få'
   ), array(
       '/scooterhjemmeside/karburator.php'
      ,'/scooterhjemmeside/billeder/spotlys/karburator.png'
      ,'karburator'
      ,'er en af de bedste sider på hele hjemmesiden, hvis ikke den bedste'
   ), array(
       '/scooterhjemmeside/vinchecker.php'
      ,'/scooterhjemmeside/billeder/spotlys/vinchecker.gif'
      ,'check stelnummer'
      ,'tager imod stelnumre på 17 cifre og giver dig tilgengæld info om scooteren (måske)'
//   ), array(
//       '/scooterhjemmeside/vinterrad.php'
//      ,'/scooterhjemmeside/billeder/spotlys/vinterrad.png'
//      ,'vinterråd'
//      ,'handler om at holde varmen, fastfrosset låse, motorer der er sværre at starte og visir der dugger'
   ), array(
       '/scooterhjemmeside/lyd.php'
      ,'/scooterhjemmeside/billeder/spotlys/underholdninglyd.gif'
      ,'lyt til musik+lyd'
      ,'med blandt andet<br><span class="bold" style="font-family: consolas, monospace;">L Ron Harald</span><br><span class="bold" style="font-family: consolas, monospace;">Zanger Rinus</span><br>og<br><span class="bold" style="font-family: consolas, monospace;">Halløj i betalingsringen</span>'
   ), array(
       '/scooterhjemmeside/billederfragaden.php'
      ,'/scooterhjemmeside/billeder/spotlys/billederfragaden.gif'
      ,'billeder fra gaden'
      ,'er billeder jeg primært selv har taget af scootere og lidt andre køretøjer jeg har set køre rundt'
   ), array(
       '/forum/'
      ,'/scooterhjemmeside/billeder/spotlys/forum.png'
      ,'forum'
      ,'er stedet hvor vi skriver med hinanden om scootere/knallerter'
   ), array(
       '/scooterhjemmeside/stederidanmark.php'
      ,'/scooterhjemmeside/billeder/spotlys/stederidanmark.png'
      ,'steder i danmark'
      ,'er et kort hvor du kan finde butikker, værksteder og forhandlere af scootere og reservedele (nu med sorterbar tabel med alle stederne)'
   )
);

$scootergentag = ' scootere med billede, data og eventuelt manualer, eldiagrammer, reservedele og typegodkendelser.';

$kort = $setup['domainogdatamappe'];

$setup['menu'] = array(

      // billed2616 = midlertidigt billede

     'hovedmenu' => array(
       'forum'                => array($setup['domain'] . '/forum/'                          => 'her kan du snakke med andre om scootere/knallerter og alt muligt andet', 'thumbnail' => 'billed3238.jpg')
      ,'forsiden'             => array($setup['domain']                                      => 'gå til forsiden', 'thumbnail' => 'forsiden.jpg')
      ,'start'                => array($kort . '/' . 'start.php'                             => 'her kan du se alle menupunkterne med billeder så det er lettere at forstår hvad de forskellige sider handler om', 'thumbnail' => '.jpg')
      ,'nyheder'              => array($kort . '/' . 'nyheder.php'                           => 'her kan du se hvad der er blevet tilføjet/ændret på hjemmesiden for nyligt', 'thumbnail' => 'billed3233.jpg')
      ,'introduktion'         => array($kort . '/' . 'introduktion.php'                      => 'her kan du lære mere om hjemmesiden og hvordan du bruger den', 'thumbnail' => 'billed3240.jpg')
      ,'gratis reklame'       => array($kort . '/' . 'gratisreklame.php'                     => 'få en gratis reklame på hjemmesiden', 'thumbnail' => 'billed3730.jpg')
      ,'download'             => array($kort . '/' . 'download.php'                          => 'her kan du downloade manualer, eldiagrammer og lignende', 'thumbnail' => 'billed3234.jpg')
      ,'links'                => array($kort . '/' . 'links.php'                             => 'her kan du se links til danske scooter/knallert sider, forhandlere, producenter, forsikringsselvskaber', 'thumbnail' => 'billed3236.jpg')
      ,'tilfældig'            => array($kort . '/' . 'tilfeldig.php'                         => 'besøg en tilfældig side på hjemmesiden. Hvem ved måske finder du noget spændende', 'thumbnail' => 'billed3237.jpg')
      ,'todo'                 => array($kort . '/' . 'todo.php'                              => 'følg med i hver der skal sket i fremtiden på hjemmesiden', 'thumbnail' => 'todo.jpg')
      ,'kontakt'              => array($kort . '/' . 'kontakt.php'                           => 'skriv en besked til mig som laver hjemmesiden', 'thumbnail' => 'billed3239.jpg')

   ),'oplysninger' => array(
       'benzin'                     => array($kort . '/' . 'benzin.php'                      => 'forklare hvor benzin kommer fra, hvad det er lavet af og tilsat, oktan, additiver, benzinforbrug, kør længere på literen, alternativer til benzin', 'thumbnail' => 'billed2258.jpg')
      ,'bøger og blade'             => array($kort . '/' . 'bogerogblade.php'                => 'bøger og blade som handler om scootere og reservedele', 'thumbnail' => 'billed2259.jpg')
      ,'elektricitet og elektronik' => array($kort . '/' . 'elektricitetogelektronik.php'    => 'forklaring af volt, ampere, ohm, watt og elektronik komponenter', 'thumbnail' => 'billed2972.jpg')
      ,'forsikring'                 => array($kort . '/' . 'forsikring.php'                  => 'forklare hvad ansvarsforsikring, kaskoforsikring, selvrisiko betyder. Forsikringsbevis, telefonnumre, forsikringsselskaber', 'thumbnail' => 'billed2260.jpg')
      ,'køb af scooter'             => array($kort . '/' . 'kobafscooter.php'                => 'råd til køb af ny eller brugt scooter, hjemmesider hvor du kan købe og sælge', 'thumbnail' => 'billed2290.jpg')
      ,'love og regler'             => array($kort . '/' . 'loveogregler.php'                => 'hvilken regler der gælder når man køre på scooter, hvornår man kan få bøder og hvad man må og ikke må', 'thumbnail' => 'billed2614.jpg')
      ,'motorolie, gearolie, hydrauliskolie'                       => array($kort . '/' . 'olie.php'                        => 'forklare hvor olie kommer fra, motorolie, gearolie, forgaffelolie, viskositet, temperaturområder', 'thumbnail' => 'billed2261.jpg')
      ,'omregn og udregn'           => array($kort . '/' . 'omregn.php'                      => 'konverter mellem forskellige enheder, omregn benzinforbrug, enheder og forkortelser, omregn tilspændingsmoment, omregn dæktryk, udregn forbrændingskammervolume og slagvolume, udregn kompressionsforhold', 'thumbnail' => 'billed2262.jpg')
      ,'ordbog'                     => array($kort . '/' . 'ordbog.php'                      => 'forklaring af diverse forkortelser og ord', 'thumbnail' => 'billed2615.jpg')
      ,'registrering'               => array($kort . '/' . 'registrering.php'                => 'nummerplade, stelnummer, motornummer, fabrikationsplade, komponentmærkningsskilt, typeattest, anmeldelse til registrering', 'thumbnail' => 'billed2263.jpg')
      ,'sammenlign 2 takt, 4 takt og elektrisk' => array($kort . '/' . 'sammenlign.php'       => 'sammenlign bezinforbrug, støj, forurening, lugt gener, olieskift for scootere med 2 takt, 4 takt eller elektrisk motor', 'thumbnail' => 'billed3255.jpg')
      ,'smørelse og væsker'         => array($kort . '/' . 'smorelse.php'                    => 'bremsevæske, karburatorvæske, kobberfedt, kølervæske, låseolie, silikonefedt, rustbeskyttelse', 'thumbnail' => 'billed2264.jpg')
      ,'steder i danmark'           => array($kort . '/' . 'stederidanmark.php'              => 'danmarkskort med butikker, værksteder, forhandlere, importører og andre intersante steder', 'thumbnail' => 'billed2291.jpg')
      ,'teoriprøve'                 => array($kort . '/' . 'teoriprove.php'                  => 'spørgsmål der tester din viden om at køre på scooter i trafikken', 'thumbnail' => 'billed2382.jpg')
      ,'tilkøring'                  => array($kort . '/' . 'tilkoring.php'                   => 'råd til tilkøring af ny scooter eller nye motordele', 'thumbnail' => 'billed2292.jpg')
      ,'typegodkendelser'           => array($kort . '/' . 'typegodkendelser.php'            => 'typegodkendelser til diverse scooter modeller', 'thumbnail' => 'billed2265.jpg')
      ,'VIN checker'                => array($kort . '/' . 'vinchecker.php'                  => 'indtast et 17 cifret stelnummer og se måske data om scooteren så som producent og årgang', 'thumbnail' => 'billed3241.jpg')
      ,'vinterråd'                  => array($kort . '/' . 'vinterrad.php'                   => 'råd som primært er brugbare om vinteren', 'thumbnail' => 'billed2271.jpg')
      ,'værktøj'                    => array($kort . '/' . 'verktoj.php'                     => 'multimeter, skydelære, mikrometerskrue, universalholder, søgerblade, stroboskoplampe, momentnøgle', 'thumbnail' => 'billed2267.jpg')

   ),'scooterens dele' => array(
       array(
         '2 takt motor' => array(
             'de 2 takter'          => array($kort . '/' . '2takt_de2takter.php'             => 'animation hvor man kan se hvordan de 2 takter virker i en 2 takt motor', 'thumbnail' => 'billed3242.jpg')
            ,'motortyper'           => array($kort . '/' . '2takt_motortyper.php'            => 'billeder af nogen 2 takt motortyper', 'thumbnail' => 'billed3734.jpg')
            ,'reed valve'           => array($kort . '/' . '2takt_reedvalve.php'             => 'info om den ventil der sidder under indsugningsstudsen', 'thumbnail' => 'billed3258.jpg')
            ,'topstykke og cylinder'=> array($kort . '/' . '2takt_topstykkeogcylinder.php'   => 'lidt info om topstykke og cylinder på en 2 takt motor', 'thumbnail' => 'billed3260.jpg')
            ,'stempel'              => array($kort . '/' . '2takt_stempel.php'               => 'lidt info om stempel og stempelringe på en 2 takt motor', 'thumbnail' => 'billed3261.jpg')
            ,'olietank'             => array($kort . '/' . '2takt_olietank.php'              => 'olietankens placering, oliefilter, oliemåler, kontrollampe', 'thumbnail' => 'billed3263.jpg')
            ,'oliepumpe'            => array($kort . '/' . '2takt_oliepumpe.php'             => 'geardrevetoliepumpe, akseldrevetoliepumpe, kabelbetjentoliepumpe, automatisk centrifugaloliepumpe, kabelsplitter', 'thumbnail' => 'billed3264.jpg')
            ,'DITech'               => array($kort . '/' . 'specielt_ditech.php'             => 'et direkte indsprøjtningssystem hvor benzinen sprøjtes ind i motoren i stedet for at bruge en karburator. Findes på Aprilia SR og Scarabeo', 'thumbnail' => 'billed2665.jpg')
         ),'4 takt motor' => array(
             'de 4 takter'          => array($kort . '/' . 'motor_de4takter.php'             => 'lær om 4 takt motorens fire takter som motoren gentager igen og igen når den køre', 'thumbnail' => 'billed3289.jpg')
            ,'motortyper'           => array($kort . '/' . 'motor_motortyper.php'            => 'se forskellige 4 takt motortyper og lær hvad 139QMA og 139FMB-B betyder', 'thumbnail' => 'billed3290.jpg')
            ,'knastaksel'           => array($kort . '/' . 'motor_knastaksel.php'            => 'knastaksel har knaster som trykker ned på ventilerne så de åbner', 'thumbnail' => 'knastaksel.jpg')
            ,'topstykke og cylinder'=> array($kort . '/' . 'motor_topstykkeogcylinder.php'   => 'lær om 4 takt motorens topstykke og cylinder som er meget anderledes fra en 2 takt motor', 'thumbnail' => 'billed3292.jpg')
            ,'ventiler'             => array($kort . '/' . 'motor_ventiler.php'              => 'lær om 4 takt motorens ventiler som står for at lukke benzin og luft ind motoren og lukke udstødningsgasser ud af motoren', 'thumbnail' => 'billed3291.jpg')
            ,'forbrændingskammer'   => array($kort . '/' . 'motor_forbrendingskammer.php'    => 'se forbrændingskammeret i en 4 takt motor', 'thumbnail' => 'billed3293.jpg')
            ,'stempel'              => array($kort . '/' . 'motor_stempel.php'               => 'se stempel og stempelringe i en 4 takt motor', 'thumbnail' => 'billed3294.jpg')
            ,'krumtap'              => array($kort . '/' . 'motor_krumtap.php'               => 'lær om krumtap som laver stemplets frem og tilbage bevægelser om til roterende bevægelser', 'thumbnail' => 'motor_krumtap.jpg')
            ,'svinghjul'            => array($kort . '/' . 'motor_svinghjul.php'             => 'lær om svinghjulet som blandt andet står for at holde motoren i gang mellem hver takt', 'thumbnail' => 'billed3312.jpg')
            ,'knastkædestrammer'    => array($kort . '/' . 'motor_knastkedestrammer.php'     => 'knastkædestrammeren står for at holde kæden tilpas stram mellem krumtapakslen og topstykkets vippearmsaksel', 'thumbnail' => 'billed3296.jpg')
            ,'oliepumpe'            => array($kort . '/' . 'motor_oliepumpe.php'             => 'oliepumpen i en 4 takt motor står for at pumpe motorolien fra bunden af motoren op til topstykket og lejerne så motoren smørres og køles', 'thumbnail' => 'billed3297.jpg')
            ,'pakdåse'              => array($kort . '/' . 'motor_pakdase.php'               => 'pakdåser holder tæt blandt andet mellem krumtapakslen og motorblokken så motorolien ikke kan komme ud', 'thumbnail' => 'billed3298.jpg')
            ,'motorblok'            => array($kort . '/' . 'motor_motorblok.php'             => 'noget om motorblok delene som er de store dele hvor alle de andre dele samme i og som holder olien', 'thumbnail' => 'motorblok.jpg')
         ),'elektrisk' => array(
             'automatisk choker'    => array($kort . '/' . 'karburator.php#automatisk_choker'=> 'se hvordan den automatiske choker på karburatoren virker', 'thumbnail' => 'billed3266.jpg')
            ,'batteri'              => array($kort . '/' . 'elektrisk_batteri.php'           => 'forklaring af scooterens starterbatteri som findes på benzindrevne scootere', 'thumbnail' => 'billed3267.jpg')
            ,'benzinmåler'          => array($kort . '/' . 'benzintank.php#benzinmaler'      => 'forklaring af benzinmåleren som sidder i benzintanken', 'thumbnail' => 'billed3268.jpg')
            ,'el diagrammer'        => array($kort . '/' . 'elektrisk_eldiagrammer.php'      => 'forklaring af hvor de kan finde el diagrammer til scootere', 'thumbnail' => 'billed3269.jpg')
            ,'kontakter'            => array($kort . '/' . 'elektrisk_kontakter.php'         => 'bremsekontakt, støttebenskontakt, tændingslås', 'thumbnail' => 'billed3270.jpg')
            ,'lambdasonde'          => array($kort . '/' . 'elektrisk_lambdasonde.php'       => 'lambasonder er en ilt måler som sidder i udstødningen', 'thumbnail' => 'billed3271.jpg')
            ,'lys'                  => array($kort . '/' . 'elektrisk_lys.php'               => 'pære, fatningstyper og blinklysrelæ', 'thumbnail' => 'billed3272.jpg')
            ,'modstande'            => array($kort . '/' . 'elektrisk_modstande.php'         => 'modstande som bruges i forbindelse med forlyset og den automatiske choker', 'thumbnail' => 'billed3273.jpg')
            ,'horn'                 => array($kort . '/' . 'elektrisk_horn.php'              => 'den der siger dyt', 'thumbnail' => 'billed3274.jpg')
            ,'sikring'              => array($kort . '/' . 'elektrisk_sikring.php'           => 'glassikring, fladsikringer og sikringsholdere', 'thumbnail' => 'billed3275.jpg')
            ,'spoler'               => array($kort . '/' . 'elektrisk_spoler.php'            => 'generator, ladespole, lysspole, exciterspole, pickup, tændspole og andre spoler', 'thumbnail' => 'billed3276.jpg')
            ,'spændingsregulator'   => array($kort . '/' . 'elektrisk_spendingsregulator.php'=> 'står for at lave generatorens vækselstrøm om til jævnstrøm og samtidig begrænsningen spændingen', 'thumbnail' => 'billed3277.jpg')
            ,'starter'              => array($kort . '/' . 'elektrisk_starter.php'           => 'startermotor og starterrelæ', 'thumbnail' => 'billed3278.jpg')
            ,'stel forbindelse'     => array($kort . '/' . 'elektrisk_stelforbindelse.php'   => 'ledninger som forbinder batteri med scooterens stel og motorblokken', 'thumbnail' => 'billed3279.jpg')
            ,'tænding'              => array($kort . '/' . 'elektrisk_tending.php'           => 'forklaring af hvordan pickupen sender signal til CDI boksen som bestemmer hvornår tændrøret skal give gnist alt efter hvor mange o/min motoren køre med', 'thumbnail' => 'billed3280.jpg')
            ,'ur'                   => array($kort . '/' . 'elektrisk_ur.php'                => 'uret på instrumentpanelet', 'thumbnail' => 'billed3281.jpg')
         ),'elektrisk scooter' => array(
             'batteri'              => array($kort . '/' . 'elektriskscooter_batteri.php'          => 'batterityper, volt, Ah, Wh, vægt', 'thumbnail' => 'billed3244.jpg')
            ,'controller'           => array($kort . '/' . 'elektriskscooter_controller.php'       => 'controlleren indeholder elektronikken der sender strøm til motoren', 'thumbnail' => 'billed3245.jpg')
            ,'motor'                => array($kort . '/' . 'elektriskscooter_motor.php'            => 'motortyper og forklaring af hall sensor', 'thumbnail' => 'billed3246.jpg')
            ,'oplader'              => array($kort . '/' . 'elektriskscooter_oplader.php'          => 'batterioplader som bruges til at oplade batterierne i en elektrisk scooter', 'thumbnail' => 'billed3243.jpg')
            ,'Battery Management System' =>array($kort . '/' . 'elektriskscooter_bms.php'          => 'et system af elektronik som overvåger opladningen/afladningen af batteriene', 'thumbnail' => 'billed3247.jpg')
            ,'DC til DC konverter'  => array($kort . '/' . 'elektriskscooter_dctildckonverter.php' => 'elektronik som lave batterienes spænding om til 12 volt så strømmen kan bruges til 12 volt pære, blinklysrelæ og horn', 'thumbnail' => 'billed3248.jpg')
            ,'instrumentpanel'      => array($kort . '/' . 'elektriskscooter_instrumentpanel.php'  => 'billeder af diverse elektriske scooteres instrumentpaneler', 'thumbnail' => 'billed3249.jpg')
            ,'gashåndtag'           => array($kort . '/' . 'elektriskscooter_gashandtag.php'       => 'forskellige typer af gashåndtag til elektriske scootere', 'thumbnail' => 'billed3250.jpg')
            ,'knapper'              => array($kort . '/' . 'elektriskscooter_knapper.php'          => 'hornknapper, kørselsmodeknap, boostknap', 'thumbnail' => 'billed3251.jpg')
            ,'problemer'            => array($kort . '/' . 'elektriskscooter_problemer.php'        => 'her skriver jeg om de problemer som folk typisk har med elektriske scootere efterhånden som jeg kender til dem. Der er ikke så mange der har en elektrisk scooter så der er endnu ikke så mange problemer at skrive om', 'thumbnail' => 'billed3243.jpg')
            ,'filer'                => array($kort . '/' . 'elektriskscooter_filer.php'            => 'manualer, eldigrammer og andre filer til elektriske scootere', 'thumbnail' => 'billed3253.jpg')
            ,'videoer'              => array($kort . '/' . 'elektriskscooter_videoer.php'          => 'her samler jeg diverse videoer om elektriske scootere så man kan lære noget om dem', 'thumbnail' => 'billed3254.jpg')
         ),'luftfilter og udstødning' => array(
             'luftfilter'           => array($kort . '/' . 'luftfilter.php'                       => 'info om luftfilteret og slangerne forbundet til luftfilteret', 'thumbnail' => 'billed3288.jpg')
            ,'luftfiltertyper'      => array($kort . '/' . 'luftfilter_luftfiltertyper.php'       => 'info om forskellige luftfiltertyper som vådt papir, tørt papir og svamp', 'thumbnail' => 'billed3287.jpg')
            ,'kulstof beholder'     => array($kort . '/' . 'luftfilter_kulstofbeholder.php'       => 'info om kulstoftbeholderen som findes på et mindre andre scootere som står for at opsuge benzindampe for senere at suge dampene ind i motoren', 'thumbnail' => 'billed3286.jpg')
            ,'sekundært luft indsugnings system' => array($kort . '/' . 'luftfilter_sekundertluftindsugningssystem.php' => 'systemet suger ekstra luft ind i udstødningen så katalysatoren bedre at omdanne udstødningsgasserne', 'thumbnail' => 'billed3282.jpg')
            ,'udstødning'           => array($kort . '/' . 'udstodning.php'                       => 'lidt info om udstødninger og tværsnit gennem en udstødning så man kan se den inden i', 'thumbnail' => 'billed3283.jpg')
            ,'katalysator'          => array($kort . '/' . 'udstodning_katalysator.php'           => 'katalysatoren er et metal net der sidder i udstødningen som omdanne skadelige stoffer til mindre skadelige stoffer', 'thumbnail' => 'billed3284.jpg')
            ,'euro emissions standarder' => array($kort . '/' . 'udstodning_euroemission.php'     => 'se hvor meget af forskellige stoffer der må udledes under forskellige euro emission standarder', 'thumbnail' => 'billed3285.jpg')
         ),'transmission' => array(
             'variator'             => array($kort . '/' . 'transmission_variator.php'            => 'variatoren er et automatisk trinløst gear så man ikke skal skifte gear selv. Det findes på de fleste scootere', 'thumbnail' => 'billed3300.jpg')
            ,'forreste remskiver'   => array($kort . '/' . 'transmission_forresteremskiver.php'   => 'lær om de forreste remskiver hvor rullerne er', 'thumbnail' => 'billed3301.jpg')
            ,'kilerem'              => array($kort . '/' . 'transmission_kilerem.php'             => 'lær om kileremmen som køre på remskiverne', 'thumbnail' => 'billed3731.jpg')
            ,'bagerste remskiver'   => array($kort . '/' . 'transmission_bagersteremskiver.php'   => 'lær om de bagerste remskiver hvor koblingen er', 'thumbnail' => 'billed3732.jpg')
            ,'reduktionsgear'       => array($kort . '/' . 'transmission_reduktionsgear.php'      => 'lær om reduktionsgearet som nedsætter variatorens hastighed og sidder mellem variatoren og baghjulsakslen', 'thumbnail' => 'billed3304.jpg')
            ,'andet'                => array($kort . '/' . 'transmission_andet.php'               => 'andet info om transmissionen som ikke passer til de andre sider', 'thumbnail' => 'billed3305.jpg')
         )
      )
      ,'affjedring'                 => array($kort . '/' . 'affjedring.php'                  => 'teleskop forgaffel, svingarm, fjeder, støddæmper, forspænding', 'thumbnail' => 'billed2232.jpg')
      ,'begrænsninger'              => array($kort . '/' . 'begrensninger.php'               => 'begrænsninger gør så scooteren ikke kan køre så hurtigt. Se hvordan begrænsningerne sidder og hvordan de fjernes', 'thumbnail' => 'billed2233.jpg')
      ,'benzintank'                 => array($kort . '/' . 'benzintank.php'                  => 'benzindæksel, benzinfilter, benzinhane, benzinmåler', 'thumbnail' => 'billed2234.jpg')
      ,'bremser'                    => array($kort . '/' . 'bremser.php'                     => 'skivebremse og tromlebremse, caliper, stempel, abs, bremsekontakt', 'thumbnail' => 'billed2235.jpg')
      ,'brændstofindsprøjtning'     => array($kort . '/' . 'brandstofindsprojtning.php'           => 'direkte og indirekte indsprøjtning, ECU, injector, gasspjældshus', 'thumbnail' => 'billed2236.jpg')
      ,'dæk'                        => array($kort . '/' . 'dek.php'                         => 'dækkoder, diagonal, radial, belastningindex, hastighedsindex, slange, slangeløst, ventil, fælg, dækmønstre', 'thumbnail' => 'billed2237.jpg')
      ,'karburator'                 => array($kort . '/' . 'karburator.php'                  => 'CV og slide karburator, dyser, venturi, blandingsskrue, accelerator pumpe, air cut off valve, nåleventil, tomgangskredsløb, automatisk choker', 'thumbnail' => 'billed2239.jpg')
      ,'kickstarter'                => array($kort . '/' . 'kickstarter.php'                 => 'kickstarterarm, kickstarteraksel, gribehjul', 'thumbnail' => 'billed2240.jpg')
      ,'køling'                     => array($kort . '/' . 'koling.php'                      => 'passiv luftkøling, tvunget blæsekøling, væskekøling, oliekøler', 'thumbnail' => 'billed2241.jpg')
      ,'lejer'                      => array($kort . '/' . 'lejer.php'                       => 'dekodning af bogstaver og tal på lejer', 'thumbnail' => 'billed2613.jpg')
      ,'reservedelstegninger'       => array($kort . '/' . 'reservedelstegninger.php'        => 'eksploderet tegninger af scooterens dele', 'thumbnail' => 'billed2244.jpg')
      ,'sidespejle'                 => array($kort . '/' . 'sidespejle.php'                  => 'noget om sidespejle', 'thumbnail' => 'sidespejle.jpg')
      ,'speedometer'                => array($kort . '/' . 'speedometer.php'                 => 'speedometerdrev, speedometer, kilometertæller, speedometerkabel', 'thumbnail' => 'billed2245.jpg')
      ,'starterdrev'                => array($kort . '/' . 'starterdrev.php'                 => 'starterdrevet er den del som først drejes rundt af startermotoren', 'thumbnail' => 'billed2246.jpg')
      ,'støtteben'                  => array($kort . '/' . 'stotteben.php'                   => 'centerstøtteben, sidestøtteben', 'thumbnail' => 'billed2247.jpg')
      ,'tændrør'                    => array($kort . '/' . 'tendror.php'                     => 'tændrørs koder, varmeværdi, champion, ngk, denso, champion, bosch, torch, tændrørstyper, tændrørshætte, iridium, gnist', 'thumbnail' => 'billed2250.jpg')

   ),'service' => array(
       array(
         'fejlfinding' => array(
          'introduktion'            => array($kort . '/' . 'service_fejlfinding_introduktion.php'           => 'start her hvis du skal fejlfinde problemer på en scooter', 'thumbnail' => 'billed3447.jpg')
         ,'benzintank'              => array($kort . '/' . 'service_fejlfinding_benzintank.php'             => 'test benzinhanen og benzinmåleren i benzintanken', 'thumbnail' => 'billed3306.jpg')
         ,'bremser'                 => array($kort . '/' . 'service_fejlfinding_bremser.php'                => 'problemer med skivebremser og tromlebremser', 'thumbnail' => 'billed3726.jpg')
         ,'elektrisk'               => array($kort . '/' . 'service_fejlfinding_elektrisk.php'              => 'fejlfinding af de fleste elektriske dele på scootere', 'thumbnail' => 'billed2278.jpg')
         ,'karburator'              => array($kort . '/' . 'service_fejlfinding_karburator.php'             => 'fejlfind den automatiske choker, karburator, karburatorvarmer, mager/fed blanding', 'thumbnail' => 'billed3307.jpg')
         ,'kendte problemer'        => array($kort . '/' . 'service_fejlfinding_kendteproblemer.php'        => 'her skriver jeg om nogen af de kendte problemer og løsninger jeg har hørt om', 'thumbnail' => 'billed3729.jpg')
         ,'luftfilter og udstødning'=> array($kort . '/' . 'service_fejlfinding_luftfilterogudstodning.php' => 'sekundært luftfilter, røg', 'thumbnail' => 'billed3727.jpg')
         ,'motor'                   => array($kort . '/' . 'service_fejlfinding_motor.php'                  => 'kompression, olie', 'thumbnail' => 'billed3308.jpg')
         ,'starter'                 => array($kort . '/' . 'service_fejlfinding_starter.php'                => 'startermotor, starterrelæ', 'thumbnail' => 'billed3309.jpg')
         ,'styretøj'                => array($kort . '/' . 'service_fejlfinding_styretoj.php'               => 'problemer med at dreje, hjul der hopper, affjedring', 'thumbnail' => 'billed3728.jpg')
         ,'transmission'            => array($kort . '/' . 'service_fejlfinding_transmission.php'           => 'problemer med at køre, op af bakke, kilerem', 'thumbnail' => 'billed3310.jpg')
         )
      )
      ,'affjedring'                 => array($kort . '/' . 'service_affjedring.php'          => 'fyld olie i forgaffelrør', 'thumbnail' => 'billed2965.jpg')
      ,'bremser'                    => array($kort . '/' . 'service_bremser.php'             => 'kontroller bremsevæske niveau, udluftning af hydrauliske bremser', 'thumbnail' => 'billed2275.jpg')
      ,'dæk'                        => array($kort . '/' . 'service_dek.php'                 => 'lap dæk og slange', 'thumbnail' => 'billed2276.jpg')
      ,'elektrisk'                  => array($kort . '/' . 'service_elektrisk.php'           => 'kontrollere batteriet, oplad og ibrugtagning af nye batterier', 'thumbnail' => 'billed2277.jpg')
      ,'forlygte'                   => array($kort . '/' . 'service_forlygte.php'            => 'justere forlygten', 'thumbnail' => 'billed2279.jpg')
      ,'kabler'                     => array($kort . '/' . 'service_kabler.php'              => 'juster gaskablet og smør det', 'thumbnail' => 'billed2280.jpg')
      ,'karburator'                 => array($kort . '/' . 'service_karburator.php'          => 'justere karburatorens tomgang, blandingsskrue og svømmer højde', 'thumbnail' => 'billed2281.jpg')
      ,'køling'                     => array($kort . '/' . 'service_koling.php'              => 'kontrol, blanding, udluftning, dræning af kølervæske', 'thumbnail' => 'billed2966.jpg')
      ,'luftfilter og udstødning'   => array($kort . '/' . 'service_luftfilter.php'          => 'rens luftfilter, tøm drænslange, slib og mal udstødning', 'thumbnail' => 'billed2282.jpg')
      ,'motor'                      => array($kort . '/' . 'service_motor.php'               => 'montering af stempelringe', 'thumbnail' => 'billed2325.jpg')
      ,'olie'                       => array($kort . '/' . 'service_olie.php'                => 'skift motorolie og gearolie', 'thumbnail' => 'billed2283.jpg')
      ,'serviceskemaer'             => array($kort . '/' . 'service_serviceskemaer.php'      => 'serviceskemaer fra forskellige scootere', 'thumbnail' => 'billed2284.jpg')
      ,'tilspændingsmoment'         => array($kort . '/' . 'service_tilspendingsmoment.php'  => 'læs hvor meget de forskellige skruer, bolte, møtrikker skal spændes med en momentnøgle', 'thumbnail' => 'billed2285.jpg')
      ,'transmission'               => array($kort . '/' . 'service_transmission.php'        => 'kontrollere transmissions dele for slid', 'thumbnail' => 'billed2286.jpg')
      ,'tænding'                    => array($kort . '/' . 'service_tending.php'             => 'kontrollere tændingstiming med en stroboskoplampe', 'thumbnail' => 'billed2287.jpg')
      ,'tændrør'                    => array($kort . '/' . 'service_tendror.php'             => 'juster elektrode afstand og se på tændrøret om der er problemer med motoren, montering og se liste med tændrør på forskellige scooter modeller', 'thumbnail' => 'billed2288.jpg')
      ,'ventiler'                   => array($kort . '/' . 'service_ventiler.php'            => 'juster ventiler og se ventil spillerum for forskellige scootere', 'thumbnail' => 'billed2289.jpg')

   ),'tilbehør / Ekstra udstyr' => array(
       array(
           'batterioplader' => array(
             'CTEK XS 800'                => array($kort . '/' . 'specielt_ctekxs800.php'          => 'lær om battiopladeren CTEK XS 800', 'thumbnail' => 'billed3311.jpg')
            ,'OptiMate 4'                 => array($kort . '/' . 'specielt_optimate4.php'          => 'lær om battiopladeren OptiMate 4', 'thumbnail' => 'billed2257.jpg')
         )
      )
      ,'tyverisikring (låse og alarmer)'              => array($kort . '/' . 'tyverisikring.php'               => 'låsetyper og råd til beskyttelse af din scooter mod tyveri, alarmer gsm, gprs, gps sporing, tyvens værktøj', 'thumbnail' => 'billed2266.jpg')
      ,'omformer (12VDC til 220VAC)'                   => array($kort . '/' . 'specielt_omformer.php'           => 'speciel side om omformer som kan lave scooterens 12 volt jævnstrøm om til 220 volt vækselstrøm', 'thumbnail' => 'billed2971.jpg')
      ,'LED (diode lys)'            => array($kort . '/' . 'elektrisk_led.php'               => 'lidt info om LED som er lys jeg prøvede at sætte på min scooter', 'thumbnail' => 'billed3655.jpg')
      ,'fartbegrænser'              => array($kort . '/' . 'fartbegrenser.php'               => 'elektronik der kan nedsætte scooterens topfart eventuelt slå til og fra med en kontakt', 'thumbnail' => 'fartbegrenser.jpg')
      ,'malossi multivar'           => array($kort . '/' . 'malossimultivar.php'             => 'kit til transmissionen', 'thumbnail' => 'billed3440.jpg')
      ,'big bore kit'               => array($kort . '/' . 'bigborekit.php'                  => 'cylinder med større boring', 'thumbnail' => 'billed3654.jpg')
      ,'indsprøjtningskit'          => array($kort . '/' . 'indsprojtningskit.php'           => 'lav en motor med karburator om til en motor med indsprøjtning med et kit', 'thumbnail' => 'billed3655.jpg')
      ,'kamera'                     => array($kort . '/' . 'kamera.php'                      => 'info om kameraer som kan monteres på hjelmen så man kan optage når man køre', 'thumbnail' => 'billed3441.jpg')

   ),'specielt' => array(
       array(
           'rodekassen' => array(
             'andet'                      => array($kort . '/' . 'rodekassen_andet.php'            => 'diverse emner som endnu ikke er færdig skrevet', 'thumbnail' => 'billed2967.jpg')
            ,'elektrisk arbejde'          => array($kort . '/' . 'elektrisk_arbejde.php'           => 'lodning, krympeflex, sikringer, opladere, løse stik til CDI boks og sådan noget', 'thumbnail' => 'billed3655.jpg')
            ,'slid kan øge tophastigheden'=> array($kort . '/' . 'slidkanogetophastigheden.php'    => 'noget om at slid i variatoren måske kan øge scooterens topfart', 'thumbnail' => 'slidkanogetophastigheden.jpg')
            ,'forsøg på at finde ud af hvordan man får nummerplade på købt brugt scooter uden papir'              => array($kort . '/' . 'forsogpaatfindeudafhvordanmanfarnummerpladepakobtbrugtscooterudenpapir.php'               => 'her prøver jeg og finde ud af hvordan man får nummerplade på en scooter man har købt brugt uden papir', 'thumbnail' => 'forsogpaatfindeudafhvordanmanfarnummerpladepakobtbrugtscooterudenpapir.jpg')
            ,'nummerplade generator'      => array($kort . '/' . 'nummerplade.php'                 => '', 'thumbnail' => 'nummerplade.jpg')
         )
      )
      ,'ATV'                        => array($kort . '/' . 'atv.php'                         => 'her samler jeg info om ATV (All Terain Vehicle) så er der måske nogen der kan bruge det', 'thumbnail' => 'billed3442.jpg')
      ,'brændselscelle'             => array($kort . '/' . 'brandselscelle.php'              => 'lær om brændselscelle teknologi', 'thumbnail' => 'billed2273.jpg')

   ),'scootermærker' => array(
       'galleri'                    => array($kort . '/' . 'galleri.php'                       => 'her kan du se en oversigt over alle scootermærker og billeder af scooterne', 'thumbnail' => 'billed3444.jpg')
      ,array(
           'A - B - C - D' => array(
             'a2b'                        => array($kort . '/' . 'altoma2b.php'                    => 'se A2B' . $scootergentag, 'logo' => 'logo_a2b')
            ,'adly'                       => array($kort . '/' . 'altomadly.php'                   => 'se Adly' . $scootergentag, 'logo' => 'logo_adly')
            ,'agm'                        => array($kort . '/' . 'altomagm.php'                    => 'se AGM' . $scootergentag, 'logo' => 'logo_agm')
            ,'amp'                        => array($kort . '/' . 'altomamp.php'                    => 'se Amp' . $scootergentag, 'logo' => 'logo_amp')
            ,'apollo'                     => array($kort . '/' . 'altomapollo.php'                 => 'se Apollo' . $scootergentag, 'logo' => 'logo_apollo')
            ,'aprilia'                    => array($kort . '/' . 'altomaprilia.php'                => 'se Aprilia' . $scootergentag, 'logo' => 'logo_aprilia')
            ,'atala'                      => array($kort . '/' . 'altomatala.php'                  => 'se Atala' . $scootergentag, 'logo' => 'logo_atala')
            ,'avanti'                     => array($kort . '/' . 'altomavanti.php'                 => 'se Avanti' . $scootergentag, 'logo' => 'logo_avanti')
            ,'baotian'                    => array($kort . '/' . 'altombaotian.php'                => 'se Baotian' . $scootergentag, 'logo' => 'logo_baotian')
            ,'beta'                       => array($kort . '/' . 'altombeta.php'                   => 'se Beta' . $scootergentag, 'logo' => 'logo_beta')
            ,'busetto'                    => array($kort . '/' . 'altombusetto.php'                => 'se Busetto' . $scootergentag, 'logo' => 'logo_busetto')
            ,'cpi'                        => array($kort . '/' . 'altomcpi.php'                    => 'se CPI' . $scootergentag, 'logo' => 'logo_cpi')
            ,'derbi'                      => array($kort . '/' . 'altomderbi.php'                  => 'se Derbi' . $scootergentag, 'logo' => 'logo_derbi')
         ),'E - F - G - H - I' => array(
             'e-max'                      => array($kort . '/' . 'altomemax.php'                   => 'se E-max' . $scootergentag, 'logo' => 'logo_emax')
            ,'earthenergy'                => array($kort . '/' . 'altomearthenergy.php'            => 'se Earthenergy' . $scootergentag, 'logo' => 'logo_earthenergy')
            ,'ebretti'                    => array($kort . '/' . 'altomebretti.php'                => 'se Ebretti' . $scootergentag, 'logo' => 'logo_ebretti')
            ,'ego'                        => array($kort . '/' . 'altomego.php'                    => 'se eGO' . $scootergentag, 'logo' => 'logo_ego')
            ,'evt'                        => array($kort . '/' . 'altomevt.php'                    => 'se EVT' . $scootergentag, 'logo' => 'logo_evt')
            ,'eton'                       => array($kort . '/' . 'altometon.php'                   => 'se E-ton' . $scootergentag, 'logo' => 'logo_eton')
            ,'generic'                    => array($kort . '/' . 'altomgeneric.php'                => 'se Generic' . $scootergentag, 'logo' => 'logo_generic')
            ,'giantco'                    => array($kort . '/' . 'altomgiantco.php'                => 'se Giantco' . $scootergentag, 'logo' => 'logo_giantco')
            ,'Giantco E-Buddy'            => array($kort . '/' . 'specielt_giantcoebuddy.php'      => 'om den elektriske scooter Giantco E-Buddy', 'logo' => 'logo_giantco_ebuddy')
            ,'gilera'                     => array($kort . '/' . 'altomgilera.php'                 => 'se Gilera' . $scootergentag, 'logo' => 'logo_gilera')
            ,'govecs'                     => array($kort . '/' . 'altomgovecs.php'                 => 'se Govecs' . $scootergentag, 'logo' => 'logo_govecs')
            ,'hero majestic'              => array($kort . '/' . 'altomheromajestic.php'           => 'se Hero majestic' . $scootergentag, 'logo' => 'logo_heromajestic')
            ,'honda'                      => array($kort . '/' . 'altomhonda.php'                  => 'se Honda' . $scootergentag, 'logo' => 'logo_honda')
            ,'italjet'                    => array($kort . '/' . 'altomitaljet.php'                => 'se Italjet' . $scootergentag, 'logo' => 'logo_italjet')
         ),'J - K - L - M - N' => array(
             'jincheng'                   => array($kort . '/' . 'altomjincheng.php'               => 'se Jincheng' . $scootergentag, 'logo' => 'logo_jincheng')
            ,'jinlun'                     => array($kort . '/' . 'altomjinlun.php'                 => 'se Jinlun' . $scootergentag, 'logo' => 'logo_jinlun')
            ,'keeway'                     => array($kort . '/' . 'altomkeeway.php'                 => 'se Keeway' . $scootergentag, 'logo' => 'logo_keeway')
            ,'kinroad'                    => array($kort . '/' . 'altomkinroad.php'                => 'se Kinroad' . $scootergentag, 'logo' => 'logo_kinroad')
            ,'kreidler'                   => array($kort . '/' . 'altomkreidler.php'               => 'se Kreidler' . $scootergentag, 'logo' => 'logo_kreidler')
            ,'kymco'                      => array($kort . '/' . 'altomkymco.php'                  => 'se Kymco' . $scootergentag, 'logo' => 'logo_kymco')
            ,'Kymco Super 8'              => array($kort . '/' . 'specielt_kymcosuper8.php'        => 'her har jeg skrevet om nogen af de problemer jeg har haft med denne model', 'logo' => 'logo_kymco_super8')
            ,'lifan'                      => array($kort . '/' . 'altomlifan.php'                  => 'se Lifan' . $scootergentag, 'logo' => 'logo_lifan')
            ,'longjia (VGA)'              => array($kort . '/' . 'altomlongjia.php'                => 'se Longjia' . $scootergentag, 'logo' => 'logo_longjia')
            ,'luyuan'                     => array($kort . '/' . 'altomluyuan.php'                 => 'se Luyuan' . $scootergentag, 'logo' => 'logo_luyuan')
            ,'lynx'                       => array($kort . '/' . 'altomlynx.php'                   => 'se Lynx' . $scootergentag, 'logo' => 'logo_lynx')
            ,'nicom'                      => array($kort . '/' . 'altomnicom.php'                  => 'se Nicom' . $scootergentag, 'logo' => 'logo_nicom')
            ,'nordic e-bike'              => array($kort . '/' . 'altomnordicebike.php'            => 'se Nordic e-bike' . $scootergentag, 'logo' => 'logo_nordicebike')
            ,'malaguti'                   => array($kort . '/' . 'altommalaguti.php'               => 'se Malaguti' . $scootergentag, 'logo' => 'logo_malaguti')
            ,'motor mania'                => array($kort . '/' . 'altommotormania.php'             => 'se Motor Mania' . $scootergentag, 'logo' => 'logo_motormania')
            ,'norsjö'                     => array($kort . '/' . 'altomnorsjo.php'                 => 'se Norsjö' . $scootergentag, 'logo' => 'logo_norsjo')
         ),'O - P - Q - R - S' => array(
             'peugeot'                    => array($kort . '/' . 'altompeugeot.php'                => 'se Peugeot' . $scootergentag, 'logo' => 'logo_peugeot')
            ,'Peugeot E-Vivacity'         => array($kort . '/' . 'specielt_peugeotevivacity.php'   => 'om den elektriske scooter Peugeot E-Vivacity som dog ikke har været solgt i danmark', 'logo' => 'logo_peugeot_evivacity')
            ,'pgo'                        => array($kort . '/' . 'altompgo.php'                    => 'se PGO' . $scootergentag, 'logo' => 'logo_pgo')
            ,'piaggio'                    => array($kort . '/' . 'altompiaggio.php'                => 'se Piaggio' . $scootergentag, 'logo' => 'logo_piaggio')
            ,'puch'                       => array($kort . '/' . 'altompuch.php'                   => 'se Puch' . $scootergentag, 'logo' => 'logo_puch')
            ,'qingqi'                     => array($kort . '/' . 'altomqingqi.php'                 => 'se Qingqi' . $scootergentag, 'logo' => 'logo_qingqi')
            ,'regal raptor'               => array($kort . '/' . 'altomregalraptor.php'            => 'se Regal raptor' . $scootergentag, 'logo' => 'logo_regalraptor')
            ,'rieju'                      => array($kort . '/' . 'altomrieju.php'                  => 'se Rieju' . $scootergentag, 'logo' => 'logo_rieju')
            ,'romet'                      => array($kort . '/' . 'altomromet.php'                  => 'se Romet' . $scootergentag, 'logo' => 'logo_romet')
            ,'sachs'                      => array($kort . '/' . 'altomsachs.php'                  => 'se Sachs' . $scootergentag, 'logo' => 'logo_sachs')
            ,'secma'                      => array($kort . '/' . 'altomsecma.php'                  => 'se Secma' . $scootergentag, 'logo' => 'logo_secma')
            ,'scoopie'                    => array($kort . '/' . 'altomscoopie.php'                => 'se Scoopie' . $scootergentag, 'logo' => 'logo_scoopie')
            ,'skyteam'                    => array($kort . '/' . 'altomskyteam.php'                => 'se Skyteam' . $scootergentag, 'logo' => 'logo_skyteam')
            ,'solex'                      => array($kort . '/' . 'altomsolex.php'                  => 'se Solex' . $scootergentag, 'logo' => 'logo_solex')
            ,'suzuki'                     => array($kort . '/' . 'altomsuzuki.php'                 => 'se Suzuki' . $scootergentag, 'logo' => 'logo_suzuki')
            ,'swap'                       => array($kort . '/' . 'altomswap.php'                   => 'se SWAP' . $scootergentag, 'logo' => 'logo_swap')
            ,'sym'                        => array($kort . '/' . 'altomsym.php'                    => 'se Sym' . $scootergentag, 'logo' => 'logo_sym')
         ),'T - U - V - W - X - Y - Z' => array(
             'texas'                      => array($kort . '/' . 'altomtexas.php'                  => 'se Texas' . $scootergentag, 'logo' => 'logo_texas')
            ,'tgb'                        => array($kort . '/' . 'altomtgb.php'                    => 'se TGB' . $scootergentag, 'logo' => 'logo_tgb')
            ,'tms'                        => array($kort . '/' . 'altomtms.php'                    => 'se TMS' . $scootergentag, 'logo' => 'logo_tms')
            ,'tomos'                      => array($kort . '/' . 'altomtomos.php'                  => 'se Tomos' . $scootergentag, 'logo' => 'logo_tomos')
            ,'trilet'                     => array($kort . '/' . 'altomtrilet.php'                 => 'se Trilet' . $scootergentag, 'logo' => 'logo_trilet')
            ,'varg'                       => array($kort . '/' . 'altomvarg.php'                   => 'se Varg' . $scootergentag, 'logo' => 'logo_varg')
            ,'vespa'                      => array($kort . '/' . 'altomvespa.php'                  => 'se Vespa' . $scootergentag, 'logo' => 'logo_vespa')
            ,'xingyue'                    => array($kort . '/' . 'altomxingyue.php'                => 'se Xingyue' . $scootergentag, 'logo' => 'logo_xingyue')
            ,'yamaha'                     => array($kort . '/' . 'altomyamaha.php'                 => 'se Yamaha' . $scootergentag, 'logo' => 'logo_yamaha')
            ,'yamasaki'                   => array($kort . '/' . 'altomyamasaki.php'               => 'se Yamasaki' . $scootergentag, 'logo' => 'logo_yamasaki')
            ,'yiben'                      => array($kort . '/' . 'altomyiben.php'                  => 'se Yiben' . $scootergentag, 'logo' => 'logo_yiben')
            ,'zhenhua'                    => array($kort . '/' . 'altomzhenhua.php'                => 'se Zhenhua' . $scootergentag, 'logo' => 'logo_zhenhua')
            ,'zongshen'                   => array($kort . '/' . 'altomzongshen.php'               => 'se Zongshen' . $scootergentag, 'logo' => 'logo_zongshen')
         )
      )
      ,'andre mærker'               => array($kort . '/' . 'altomandre.php'                  => 'på denne side er der en blanding af forskellige scootermærker', 'thumbnail' => 'billed3445.jpg')
      ,'3 hjulet scootere'          => array($kort . '/' . 'specielt_3hjuletscootere.php'    => 'se hvilken 3 hjulet scootere man kan få lær om de dele som bakgear, differentialgear og parkeringsbremse', 'thumbnail' => 'billed2252.jpg')
      ,'fremtidens scootere'        => array($kort . '/' . 'fremtidensscootere.php'          => 'se hvilke scooter modeller der måske sælges i danmark i fremtiden', 'thumbnail' => 'billed2274.jpg')
      ,'galleri for modeller som mangler data'  => array($kort . '/' . 'galleri_manglerdata.php'                 => 'galleri til modeller der mangler data. Hjælp gerne med data, billeder, filer osv hvis du kan', 'thumbnail' => 'billed3446.jpg')
      ,'modeller som mangler data'  => array($kort . '/' . 'manglerdata.php'                 => 'der mangler data på disse modeller. Hjælp gerne med data, billeder, filer osv hvis du kan', 'thumbnail' => 'billed3446.jpg')
      ,'modeller med 2 takt motor'  => array($kort . '/' . '2takt_modellermed2taktmotor.php' => 'et forsøg på at lave en liste med alle de 2 takt scootere som har kunne fås i danmark', 'thumbnail' => 'billed3265.jpg')
      ,'elektriske scootere'        => array($kort . '/' . 'elektriskescootere.php'          => 'side kun med elektriske scootere så man kan se hvilke modeller har kan eller har kunne fås i danmark eller som er set i danmark', 'thumbnail' => 'elektriskescootere.jpg')

   ),'underholdning' => array(
       'billeder'                   => array($kort . '/' . 'billeder.php'                    => 'billeder fra internettet. En del af dem er sjove', 'thumbnail' => 'billed2268.jpg')
      ,'billeder fra gaden'         => array($kort . '/' . 'billederfragaden.php'             => 'billeder af scootere, knallert og andre køretøjer der kørende rundt på cykelstier og veje', 'thumbnail' => 'billed3725.jpg')
      ,'videoer'                    => array($kort . '/' . 'videoer.php'                     => 'videoer fra internettet', 'thumbnail' => 'billed2269.jpg')
      ,'spil'                       => array($kort . '/' . 'spil.php'                        => 'spil med scootere', 'thumbnail' => 'billed3733.jpg')
      ,'lyd'                        => array($kort . '/' . 'lyd.php'                         => 'lyd som har noget med scootere at gøre', 'thumbnail' => 'billed2617.jpg')

   )

);

$keywords = require_once('keywords.php');

require_once('./php/hovedopsetning.php');

?>