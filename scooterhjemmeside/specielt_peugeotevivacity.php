<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "Peugeot E-Vivacity";
$overskrift = "Peugeot E-Vivacity";
$metadescription = "billeder, specifinationer, filer om den elektriske scooter Peugeot E-Vivacity";

$databasecenter = array(

'peugeotevivacity' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'Denne model kom ikke til danmark men kunne fås fra September 2011 i nogle lande.<br><br>Jeg skrev til P.G.Danmark A/S og fik følgende svar...<br>'.citat('E- Vivacity vil ikke blive taget til Danmark da Peugeots pris vil gøre at den praktisk talt ville være usælgelig. Hvis den skulle tages hjem ville den formodentlig komme til at koste 34995kr og dette er en del for dyrt. Og da vi før har haft dårlig erfaring med El scooter og dansk klima venter vi og ser tiden an.').'Jeg har senere fundet ud af at '.ahref('http://www.bbmotor.dk/', 'BB Motor').' skulle have haft en Peugeot E-Vivacity som de vist solgte/sendte videre til en anden forhandler som havde en kunde der ville købe den så måske finder der alligevel nogen i danmark.', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'peugeot e-vivacity', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '') . 'jeg har set billeder af 2 varianter af denne model. På den ene kan bæltet se udefra og der er en stor ring ved siden af baghjulet hvor bæltet har fat. På den anden variant er der et lukket system som formodentligt er ligesom på Peugeot Scoot\'Elec hvor er det et bælte og reduktionsgear men jeg er ikke sikker.'
      ,'pris'              => ens('pris', '', '', '', 'Set til 3600 euro på udenlandske hjemmesider. Hvilket svarer til cirka 27.000 danske kroner<br>P.G.Danmak A/S skrev at den formodentligt ville koste 34995 kroner hvis den blev solgt i danmark')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', 'hvid blå', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', 'børsteløs luftkølet synkron motor med permanente magneter (synchronous brushless motor with permanent magnets)', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', 'air convection', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '3000', 'w', '', '') . ' eller ' . ens('maxeffektogheste', '4000', 'w', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1910', '', '', '')
      ,'bredde'            => ens('bredde', '680', '', '', '')
      ,'højde'             => ens('højde', '1168', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '786', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1338', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '3.5', '12', '', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', 'R')
      ,'dækbag'            => ens('dæk1', '120', '70', '12', 'R slangeløs')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'hydraulisk teleskopisk forgaffel', '32', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '1 hydraulisk justerbar støddæmper', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '200', '', '')
      ,'bremserbag'        => ens('bremser', 'skive', '190', '', '') . ' eller ' . ens('bremser', 'tromle', '110', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', 'lithium ion cobalt', '(2,9 kWh ifølge ?) (2 batteri på 1 KWh hver ifølge e-vivacity.com)') . '<br>2,0 KWh ifølge peugeot data fil' . '<br>Alt efter hvor man læser på nettet har scooteren enten 1 eller 2 batterier'
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '25', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', 'Ved 80% afladning : cirka 1000', '40000', '')
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
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '4', '', 'for en fuld opladning', '') . '<br>' . ens('ladetid', '2', '', 'for 80% opladning', '') . '<br>' . ens('ladetid', '5', '', 'fra flade batteri til fuld opladning', '(ifølge e-vivacity.com)') . '<br>' . ens('ladetid', '3', '', 'for 80% opladning', '(ifølge e-vivacity.com og peugeot data fil)') . '<br>' . ens('ladetid', '3', '', 'fuld opladning (hvis man køber en valgfri oplader)', '(ifølge e-vivacity.com)')
      ,'rækkevidde'        => ens('rækkevidde', '', '80-100', '', '') . '<br>eller<br>' . ens('rækkevidde', '', '60', '45', '(ifølge e-vivacity.com og peugeot data fil)')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'bælte', '', '', '(jeg har set billeder af 2 varianter, på den ene kan man se bæltet udefra også er der en stor ring ved baghjulet og på den anden variant er der en lukket transmission som formodentligt er samme type som på Peugeot Scoot\'Elec hvor der er et bælte og reduktionsgear')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'steel double cradle', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '90', 'uden batterier', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '115', 'med batterier', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '35', 'plads til fullface hjelm under sæde', 'rum forrest på scooteren med plads til pilot hjelm', '')
      ,'bakgear'           => ens('bakgear', 'ja', 'gear og gear. Der er nok ikke noget gear men den kan køre baglæns', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', 'der er kabel under sædet til opladning', 'kørsels indstillinger : normal / economical / langsomt frem / baglæns', '', '')

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

$databasecenter_b = array(

'
hvornår kan den købes ?
' => '
Peugeot E-Vivacity sælges ikke i danmark.

Ifølge '.ahref('http://e-vivacity.com', 'e-vivacity.com').' kunne Peugeot E-vivacity først fås fra Marts 2011.
Senere blev det rettet til sidste halvdel af 2011 (Altså Juni - December 2011).
Senere blev det rettet til September 2011.
Senere blev det rettet til Marts 2012.
'

,'
2 versioner
' => '
Ud fra billederne jeg har set af Peugeot E-Vivacity så er der lavet 2 forskellige versioner af scooteren.
'.visbilled('1', 'billed2591.jpg', 'peugeot e-vivacity', false, true).'

Her ses et design hvor det ser ud til at der er en indvendig rem og reduktionsgear som på Peugeot Scoot\'Elec (Peugeots første elektriske scooter) og med tromlebremse.
'.visbilled('1', 'billed2620.jpg', 'peugeot e-vivacity design med variator udseende og tromlebremse', false, true).'
Her ses et andet design hvor remmen sidder udvendigt og direkte forbindelser motor med baghjul uden reduktionsgear. Og så er der skivebremse.
'.visbilled('1', 'billed2621.jpg', 'peugeot e-vivacity design med udvendig kilerem og skivebremse', false, true).'

Jeg tror det første design med tromlebremse måske har været en prototype eller noget og at Peugeot er gået over til det andet design med skivebremse og at det er den man vil kunne komme til at købe.

En anden mulighed er at de tilbyder scooteren i begge versioner.
'

,'
billeder
' => '
'.visbilled('1', 'billed2537.jpg', 'E-Vivacity logo', false, true).'
'.visbilled('1', 'billed2528.jpg', 'Peugeot E-Vivacity tidlig design', false, true).'
'.visbilled('1', 'billed2529.jpg', 'Peugeot E-Vivacity tidlig design', false, true).'
'.visbilled('1', 'billed2530.jpg', 'Peugeot E-Vivacity tidlig design', false, true).'
'.visbilled('1', 'billed2531.jpg', 'Peugeot E-Vivacity tidlig design', false, true).'
'.visbilled('1', 'billed2532.jpg', 'Peugeot E-Vivacity tidlig design', false, true).'
'.visbilled('1', 'billed2533.jpg', 'Peugeot E-Vivacity tidlig design', false, true).'
'.visbilled('1', 'billed2534.jpg', 'Peugeot E-Vivacity instrumentpanel', false, true).'
'.visbilled('1', 'billed2535.jpg', 'Peugeot E-Vivacity tidlig design', false, true).'
'.visbilled('1', 'billed2536.jpg', 'Peugeot E-Vivacity tidlig design', false, true).'
'

,'
controller
' => '
Controlleren i Peugeot E-Vivacity er muligvis '.ahref('http://www.sevcon.com/', 'Sevcon').' Gen 4 size 2.
Det kunne se ud som om controlleren er under sædet bag ved hvor man har sine fødder når man køre.
Mere info : '.ahref('http://www.sevcon.com/ac-controllers/gen4%E2%84%A2.aspx', 'AC Controllers : Gen4').'
Gen 4 controlleren er CANopen kompatibel.
'

,'
batterier
' => '
Batterierne består af 2 styk Lithium ion (af cobalt typen vist nok).
Hvert batteri er på 1 KWh som giver 2 KWh ialt.
Jeg har læst at batterierne skulle være lavet af producenten Saft.

Der er en indbygget oplader i scooteren.
Man kan købe en ekstra oplader og på den måde bruge 2 opladere til at oplade med samtidig for på den måde bliver opladningstiden kortere.
'

,'
instrumentpanel
' => '
LCD skærm med farver.
'.visbilled('1', 'billed2538.jpg', 'Peugeot E-Vivacity instrumentpanel', false, true).'
Der findes 2 knapper på instrumentpanelet.
MODE knappen (nederst) og RESET/UPDATE knappen (til højre).

Ved tryk på MODE knappen skiftes mellem 4 kørselstyper :
   Normal
   Economical (økonomisk)
   Forward (meget langsomt fremad)
   Reverse (baglæns)

Ved tryk på RESET/UPDATE knappen :
   nulstil eller opdater
   (bruges sikkert til at nulstille triptælleren og indstille uret)

3 temperaturmålere :
   omgivelser (°C eller °F)
   batteri (6 felter fra Cold til Hot)
   motor (6 felter fra Cold til Hot)

"motor diagnosis indicator light" :
   ved ikke noget om den men mon ikke den blinker/lyser hvis der er problemer med motoren

Batteri opladningsniveau (midt på instrumentpanelet) :
   10 felter viser hvor meget batterierne er opladt (hvert felt viser 10 %).
   nederst står hvor mange km/miles der er tilbage på opladningen.

'.visbilled('1', 'billed2603.jpg', 'Peugeot E-Vivacity instrumentpanel med forklaring', false, true).'
På billedet ses at der også kan være en rød lampe ude til venstre som bruges til alarm.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false, $databasecenter_b);

?>
