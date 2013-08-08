<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "billeder - Underholdning";
$overskrift = "billeder - Underholdning";
$metadescription = "sjove og anderledes scooter/knallerter billeder";

$databasecenter = array(

'
billeder
' => '
'
.galleriholder(array(
    galleri('highslide', '', 'billed3302.jpg', array('poover'))
   ,galleri('highslide', '', 'billed3256.jpg', array('mange scootere i kø'))
   ,galleri('highslide', '', 'billed2504.jpg', array('glad familie'))
   ,galleri('highslide', '', 'billed2508.jpg', array('alternativ kørestilling'))
   ,galleri('highslide', '', 'billed2482.jpg', array('2 etagers scooter ombygning'))
   ,galleri('highslide', '', 'billed2428.jpg', array('pgo kage'))
   ,galleri('highslide', '', 'billed2420.jpg', array('suzuki brødrister'))
   ,galleri('highslide', '', 'billed2415.jpg', array('kat i hjelm'))
   ,galleri('highslide', '', 'billed2394.jpg', array('vildt højt styr'))
   ,galleri('highslide', '', 'billed2389.jpg', array('scooter parkering'))
   ,galleri('highslide', '', 'billed2381.jpg', array('styrthjelm med pels'))
   ,galleri('highslide', '', 'billed2380.jpg', array('incrrect'))
   ,galleri('highslide', '', 'billed2219.jpg', array('barnevogn'))
   ,galleri('highslide', '', 'billed2218.jpg', array('trækvogn'))
   ,galleri('highslide', '', 'billed2156.jpg', array('med print'))
   ,galleri('highslide', '', 'billed2154.jpg', array('massere af scootere i taipei'))
   ,galleri('highslide', '', 'billed2110.jpg', array('styrthjelm i aluminium'))
   ,galleri('highslide', '', 'billed2048.jpg', array('specielt køretøj'))
   ,galleri('highslide', '', 'billed2002.jpg', array('lang vespa'))
   ,galleri('highslide', '', 'billed2001.jpg', array('no pets'))

   ,galleri('highslide', '', 'billed1812.jpg', array('scooter transport på motorcykel'))
   ,galleri('highslide', '', 'billed1807.jpg', array('drikker milkshake med hjelm på'))

   ,galleri('highslide', '', 'billed1742.jpg', array('William Gelbke\'s Roadog'))
   ,galleri('highslide', '', 'billed1741.jpg', array('tank'))
   ,galleri('highslide', '', 'billed1740.jpg', array('Kaneda\'s motorcykel fra Akira'))
   ,galleri('highslide', '', 'billed1739.jpg', array('dårligt oversat'))

   ,galleri('highslide', '', 'billed1661.jpg', array('scoot\'o\'tape'))
   ,galleri('highslide', '', 'billed1660.jpg', array('If it aint broke dont fix it'))
   ,galleri('highslide', '', 'billed1659.jpg', array('anhænger med mange mennesker'))
   ,galleri('highslide', '', 'billed1658.jpg', array('puch maxi med får'))
   ,galleri('highslide', '', 'billed1657.jpg', array('stearinlys'))
   ,galleri('highslide', '', 'billed1656.jpg', array('henrik på velo solex'))

   ,galleri('highslide', '', 'billed1645.jpg', array('røvhorn'))

   ,galleri('highslide', '', 'billed1583.jpg', array('alternative styrthjelme'))
   ,galleri('highslide', '', 'billed1582.jpg', array('meget glad for sin knallert'))
   ,galleri('highslide', '', 'billed1571.jpg', array('rigdon'))
   ,galleri('highslide', '', 'billed1514.jpg', array('hornsleth ducati'))
   ,galleri('highslide', '', 'billed1421.jpg', array('kymco flower garden'))

   ,galleri('highslide', '', 'billed1353.jpg', array('48 cylindere'))
   ,galleri('highslide', '', 'billed1351.jpg', array('suzuki hayabusa chrome'))
   ,galleri('highslide', '', 'billed1317.jpg', array('michael schumacher på scooter'))
   ,galleri('highslide', '', 'billed1316.jpg', array('kreidler florett'))
   ,galleri('highslide', '', 'billed1315.jpg', array('hund bag på'))
   ,galleri('highslide', '', 'billed1314.jpg', array('tar lige en lur'))
   ,galleri('highslide', '', 'billed1313.jpg', array('på vej til computer fest'))
   ,galleri('highslide', '', 'billed1312.jpg', array('sjov gammel scooter'))
   ,galleri('highslide', '', 'billed1257.jpg', array('puch maxi drevet af komprimeret luft'))
   ,galleri('highslide', '', 'billed1086.jpg', array('3 hjulet ombygning'))
   ,galleri('highslide', '', 'billed0932.jpg', array('reklamekylling'))
   ,galleri('highslide', '', 'billed0933.jpg', array('5 på 1'))
   ,galleri('highslide', '', 'billed0935.jpg', array('hund styre'))
   ,galleri('highslide', '', 'billed0936.jpg', array('jet motorer'))
   ,galleri('highslide', '', 'billed0937.jpg', array('lidt for meget vand'))
   ,galleri('highslide', '', 'billed0938.jpg', array('køleskab transport'))
   ,galleri('highslide', '', 'billed0939.jpg', array('grise transport'))
   ,galleri('highslide', '', 'billed0940.jpg', array('skolepiger'))
   ,galleri('highslide', '', 'billed0941.jpg', array('højt styr'))
   ,galleri('highslide', '', 'billed0878.jpg', array('på vej til fest'))
   ,galleri('highslide', '', 'billed0879.jpg', array('neger med høns'))
   ,galleri('highslide', '', 'billed0880.jpg', array('darth vader'))
   ,galleri('highslide', '', 'billed0881.jpg', array('nygift'))
   ,galleri('highslide', '', 'billed0882.jpg', array('vand transport'))
   ,galleri('highslide', '', 'billed0883.jpg', array('masser af julemænd'))
   ,galleri('highslide', '', 'billed0884.jpg', array('pensionist vogn og can-am'))
   ,galleri('highslide', '', 'billed0885.jpg', array('julemand med fart på'))
   ,galleri('highslide', '', 'billed0886.jpg', array('scooter på scooter'))
   ,galleri('highslide', '', 'billed0887.jpg', array('scooter med lad'))
   ,galleri('highslide', '', 'billed0888.jpg', array('far til fire'))
   ,galleri('highslide', '', 'billed0889.jpg', array('scootergris'))
   ,galleri('highslide', '', 'billed0890.jpg', array('ikke helt standard lyserød majesty'))
   ,galleri('highslide', '', 'billed0891.jpg', array('sidevogns folkevogn'))
   ,galleri('highslide', '', 'billed0892.jpg', array('flettet scooter'))
   ,galleri('highslide', '', 'billed0901.jpg', array('bare rolig. Scooteren er okay'))
   ,galleri('highslide', '', 'billed0904.jpg', array('5 på 1 i kina'))
   ,galleri('highslide', '', 'billed0905.jpg', array('2 store hunde'))
   ,galleri('highslide', '', 'billed0906.jpg', array('alternativ måde at sidde på'))
   ,galleri('highslide', '', 'billed0907.jpg', array('ballonscooter'))
   ,galleri('highslide', '', 'billed0908.jpg', array('snescooter'))
   ,galleri('highslide', '', 'billed0910.jpg', array('hegn transport'))
   ,galleri('highslide', '', 'billed0911.jpg', array('høns og ænder transport'))
   ,galleri('highslide', '', 'billed0912.jpg', array('spejl transport'))
   ,galleri('highslide', '', 'billed0913.jpg', array('5 på 1 et varmt sted'))
   ,galleri('highslide', '', 'billed0914.jpg', array('2 store dæk'))
   ,galleri('highslide', '', 'billed0915.jpg', array('lille hund bag på'))
   ,galleri('highslide', '', 'billed0916.jpg', array('hund mellem ben'))
   ,galleri('highslide', '', 'billed0917.jpg', array('ægge transport'))
   ,galleri('highslide', '', 'billed0918.jpg', array('hund på ryg'))
))
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
