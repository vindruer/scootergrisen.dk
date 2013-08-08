<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "ordbog";
$overskrift = "ordbog";
$metadescription = "en lille ordbog som forklare diverse scooterrelaterede forkortelser og ord";

$databasecenter = array(

'
introduktion
' => '
Her på siden skriver jeg blandet andet en forklaring på en del af de ord og forkortelser jeg er stød på i diverse manualer og andre steder men hvor jeg ikke først har vidst hvad det betød.
'

,'
ordbog
' => '
'.
box(array('120', '200', '200')
   ,array(
       array('ord', 'betydning', 'dansk betydning')
      ,array('vice', '', 'skruestik')
      ,array('tachometer', '', 'omdrejningstæller')
      ,array('PPM', 'parts per million', 'dele per million')
      ,array('gauge', '', 'måler')
      ,array('cam', '', 'knast')
      ,array('camshaft', '', 'knastaksel')
      ,array('carbon', '', 'kulstof')
      ,array('OHC', 'overhead cam', 'overliggende knastaksel')
      ,array('SOHC', 'single overhead cam', 'enkelt overliggende knastaksel')
      ,array('DOHC', 'double overhead cam', 'dobbelt overliggende knastaksel')
      ,array('WOT', 'wide open throttle', 'fuld gas')
      ,array('EEC', 'evaporative emission control', '')
      ,array('AI', 'air injection', '')
      ,array('PCV', 'Positive Crankcase Ventilation', '')
      ,array('PCV', 'purge control valve', '')
      ,array('AVCV', 'air vent control valve', '')
      ,array('AICV', 'air injection cut-off valve', '')
      ,array('TDC', 'Top Dead Center', 'Øverste dødpunkt')
      ,array('BDC', 'Bottom Dead Center', 'Nederste dødpunkt')
      ,array('curb weight', '', 'køreklar vægt')
      ,array('washer', '', 'skive')
      ,array('torque', '', 'moment')
      ,array('tapered', '', 'konisk<br>Det vil for eksempel sige at diameteren på en aksel ændre sig. Som der hvor svinghjulet monteres på krumtapakslen.')
      ,array('strainer', '', 'filter / si')
      ,array('mixture screw', '', 'blandingsskrue')
      ,array('starter jet', '', 'startdyse')
      ,array('main jet', '', 'hoveddyse')
      ,array('idler jet', '', 'tomgangsdyse')
      ,array('pulley', '', 'remskive / trisse')
      ,array('throttle body', '', 'gasspjældshus')
      ,array('akkumulator', '', 'batteri')
      ,array('indfarvet', '', 'delen er i samme farve som scooteren')
      ,array('blow by gas', '', 'når noget af trykket i forbrændingskammeret bevæger sig ned mellem stempel og cylindervæg i forbrændingstakten')

      ,array('FI', 'Fuel Injection', 'brændstofindsprøjtning')
      ,array('throttle body', '', 'gasspjældshus')
      ,array('lighting coil', '', 'lysspole')
      ,array('charging coil', '', 'ladespole')
      ,array('pickup coil<br>pulse coil', '', 'pickupspole')

      ,array('air screw', '', 'luftskrue')
      ,array('mixture screw<br>fuel mixture screw', '', 'blandingsskrue')

      ,array('coolant', '', 'kølervæske')
      ,array('impeller', '', 'rotor i vandpumpe')

      ,array('banking', '', 'tændingsbanken')
      ,array('stud', '', 'pindbolt')
      ,array('chain guide', '', 'knastkædeskinne')

      ,array('fork oil', '', 'gaffelolie til hydraulisk teleskop forgaffel')
      ,array('crude oil', '', 'råolie')

      ,array('I', 'Intensität', 'ampere')
      ,array('U', 'Unterschied', 'volt')
      ,array('R', 'Resistanz', 'ohm')
      ,array('P', 'Power', 'watt')

      ,array('LEV', 'Light Electric Vehicle', '')
      ,array('RTS', 'Remote Temperature Sensor', '')
      ,array('BDI', 'Battery Discharge Indicator', '')

      ,array('COC', 'Certificate Of Conformity', '')
      //,array('', '', '')

   )
)

,'
producent forkortelser
' => '
'.
box(array('100', '230', '200')
   ,array(
       array('producent', 'betydning', 'anden betydning')
      ,array('DERBI', 'DERived from BIcycle', '')
      ,array('KYMCO', 'Kwang Yang Motor COmpany', '')
      ,array('SYM', 'San Yang Motor', '')
      ,array('CPI', 'Collaboration Professional Innovation', '')
      ,array('REIJU', 'RIEra JUanola', 'Luis Riera Carré og Jaime Juanola Farrés er grundlæggerne')
      ,array('TGB', 'Taiwan Golden Bee', '')
      ,array('PGO', 'måske PiaGgiO', '')
      ,array('Gilera', 'Giuseppe Gilera (person)', '')
      //,array('', '', '')
      //,array('', '', '')
      //,array('', '', '')
      //,array('', '', '')
   )
)

,'
tegn
' => '
'.
box(array('200', '200')
   ,array(
       array('hurtigst måde at skrive', 'korrekt tegn')
      ,array('+-', '±')
      ,array('ohm', 'Ω')
      ,array('ccm', 'cm³')
      ,array('cm2', 'cm²')
      ,array('grader', '°')
      ,array('grader celsius', '°Celsius')
      ,array('<= >=', '≤ ≥')
      //,array('', '')
   )
)

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
