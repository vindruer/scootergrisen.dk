<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "billeder - Underholdning";
$overskrift = "billeder - Underholdning";
$metadescription = "sjove og anderledes scooter/knallerter billeder";

$databasecenter = array(

'
scootere
' => '
'
.galleriholder(array(
    galleri('highslide', '', 'billed3777.jpg', array('Peugeot Speedfight R Cup'))
   ,galleri('highslide', '', 'billed1591.jpg', array('Vespa'))
   ,galleri('highslide', '', 'billed1592.jpg', array('Vespa (måske Vespa PX 150 E)'))
   ,galleri('highslide', '', 'billed1593.jpg', array('CPI Oliver'))
   ,galleri('highslide', '', 'billed1594.jpg', array('CPI Oliver (den kører vist over for rødt)'))
   ,galleri('highslide', '', 'billed1595.jpg', array('AGM Vintage'))
   ,galleri('highslide', '', 'billed1596.jpg', array('AGM Retro'))
   ,galleri('highslide', '', 'billed1597.jpg', array('Kymco Agility'))
   ,galleri('highslide', '', 'billed1598.jpg', array('Piaggio Vespa S'))
   ,galleri('highslide', '', 'billed1599.jpg', array('Kymco Super 8 4T'))
   ,galleri('highslide', '', 'billed1600.jpg', array('CPI GTR'))
   ,galleri('highslide', '', 'billed1601.jpg', array('Peugeot Speedfight'))
   ,galleri('highslide', '', 'billed1602.jpg', array('Kymco Super Fever ZX50'))
   ,galleri('highslide', '', 'billed1603.jpg', array('Piaggio Vespa ET2'))
   ,galleri('highslide', '', 'billed1604.jpg', array('PGO T-Rex'))
   ,galleri('highslide', '', 'billed1605.jpg', array('Kymco Super 8 4T'))
   ,galleri('highslide', '', 'billed1618.jpg', array('TMS S3 hos Jem og fix'))
   ,galleri('highslide', '', 'billed1619.jpg', array('Giantco Stealth'))
   ,galleri('highslide', '', 'billed1620.jpg', array('PGO T-Rex eller Big Max'))
   ,galleri('highslide', '', 'billed1621.jpg', array('Vespa LX'))
   ,galleri('highslide', '', 'billed1622.jpg', array('PGO Comet'))
   ,galleri('highslide', '', 'billed1624.jpg', array('Texas Free 50-4'))
   ,galleri('highslide', '', 'billed1625.jpg', array('Vespa GTS250.... ie tror jeg nok... ja udstødningen ruster også på en scooter til 65000,- kroner'))
   ,galleri('highslide', '', 'billed1626.jpg', array('Sym Fiddle II'))
   ,galleri('highslide', '', 'billed1627.jpg', array('Peugeot JetForce R-Cup'))
   ,galleri('highslide', '', 'billed1637.jpg', array('Sym Orbit'))
   ,galleri('highslide', '', 'billed1638.jpg', array('Giantco Sprint Sport'))
   ,galleri('highslide', '', 'billed1640.jpg', array('TGB Delivery'))
   ,galleri('highslide', '', 'billed1641.jpg', array('PGO... over for rødt... uden hjelm... så kører det for dig'))
   ,galleri('highslide', '', 'billed1646.jpg', array('Peugeot TKR Furious'))
   ,galleri('highslide', '', 'billed1647.jpg', array('Piaggio Zip'))
   ,galleri('highslide', '', 'billed1648.jpg', array('Rieju Pacific'))
   ,galleri('highslide', '', 'billed1649.jpg', array('Sym Fiddle II'))
   ,galleri('highslide', '', 'billed1650.jpg', array('Aprilia Sportcity One'))
   ,galleri('highslide', '', 'billed1652.jpg', array('PGO Hot'))
   ,galleri('highslide', '', 'billed1653.jpg', array('Giantco Spartan'))
   ,galleri('highslide', '', 'billed1654.jpg', array('Piaggio Fly'))
   ,galleri('highslide', '', 'billed1655.jpg', array('Vespa PX 150 E'))
   ,galleri('highslide', '', 'billed1662.jpg', array('CPI Oliver'))
   ,galleri('highslide', '', 'billed1663.jpg', array('Scoopie'))
   ,galleri('highslide', '', 'billed1664.jpg', array('Piaggio Typhoon XR'))
   ,galleri('highslide', '', 'billed1665.jpg', array('Vespa ET'))
   ,galleri('highslide', '', 'billed1666.jpg', array('Peugeot Speedfight 3'))
   ,galleri('highslide', '', 'billed1667.jpg', array('Vespa Sprint'))
   ,galleri('highslide', '', 'billed1668.jpg', array('Peugeot Looxor'))
   ,galleri('highslide', '', 'billed1669.jpg', array('Vespa LXV'))
   ,galleri('highslide', '', 'billed1670.jpg', array('Kymco Agility'))
   ,galleri('highslide', '', 'billed1671.jpg', array('Aprilia Habana / Aprilia Mojito'))
   ,galleri('highslide', '', 'billed1672.jpg', array('PGO T-Rex'))
   ,galleri('highslide', '', 'billed1678.jpg', array('Vespa ET'))
   ,galleri('highslide', '', 'billed1677.jpg', array('AGM Bella'))
   ,galleri('highslide', '', 'billed1679.jpg', array('Peugeot Trekker Road'))
   ,galleri('highslide', '', 'billed1680.jpg', array('Kymco Agility'))
   ,galleri('highslide', '', 'billed1681.jpg', array('Kymco Agility'))
   ,galleri('highslide', '', 'billed1683.jpg', array('Piaggio Fly'))
   ,galleri('highslide', '', 'billed1684.jpg', array('Cagiva City (tror jeg den hedder)'))
   ,galleri('highslide', '', 'billed1686.jpg', array('Gilera Stalker'))
   ,galleri('highslide', '', 'billed1687.jpg', array('PGO Dr Big SP'))
   ,galleri('highslide', '', 'billed1688.jpg', array('Giantco Sprint'))
   ,galleri('highslide', '', 'billed1693.jpg', array('Giantco G-Buddy'))
   ,galleri('highslide', '', 'billed1694.jpg', array('ukendt model'))
   ,galleri('highslide', '', 'billed1695.jpg', array('Vespa LX'))
   ,galleri('highslide', '', 'billed1696.jpg', array('Peugeot Speedfight'))
   ,galleri('highslide', '', 'billed1697.jpg', array('TGB Delivery'))
   ,galleri('highslide', '', 'billed1698.jpg', array('Baotian + Baotian + Peugeot Looxor'))
   ,galleri('highslide', '', 'billed1699.jpg', array('Peugeot Ludix One'))
   ,galleri('highslide', '', 'billed1700.jpg', array('Vespa LX50'))
   ,galleri('highslide', '', 'billed1701.jpg', array('Regal Raptor DD50E'))
   ,galleri('highslide', '', 'billed1702.jpg', array('PGO G-Max'))
   ,galleri('highslide', '', 'billed1703.jpg', array('Giantco Stealth'))
   ,galleri('highslide', '', 'billed1704.jpg', array('ukendt model'))
   ,galleri('highslide', '', 'billed1705.jpg', array('Peugeot Speedfight'))
   ,galleri('highslide', '', 'billed1706.jpg', array('Honda Zoomer'))
   ,galleri('highslide', '', 'billed1707.jpg', array('Kymco Super 8 4T'))
   ,galleri('highslide', '', 'billed1708.jpg', array('Gilera Stalker'))
   ,galleri('highslide', '', 'billed1710.jpg', array('Yamaha Neos'))
   ,galleri('highslide', '', 'billed1711.jpg', array('Måske en AGM Bella (ret må man da kalde en grøn scooter)'))
   ,galleri('highslide', '', 'billed1712.jpg', array('Ebretti 518'))
   ,galleri('highslide', '', 'billed1713.jpg', array('Måske AGM Bella'))
   ,galleri('highslide', '', 'billed1714.jpg', array('Piaggio Zip'))
   ,galleri('highslide', '', 'billed1715.jpg', array('Piaggio NRG'))
   ,galleri('highslide', '', 'billed1716.jpg', array('PGO Ligero'))
   ,galleri('highslide', '', 'billed1719.jpg', array('Giantco G-Buddy'))
   ,galleri('highslide', '', 'billed1720.jpg', array('PGO G-Max'))
   ,galleri('highslide', '', 'billed1721.jpg', array('Kymco Vitality'))
   ,galleri('highslide', '', 'billed1722.jpg', array('TGB Delivery'))
   ,galleri('highslide', '', 'billed1729.jpg', array('Texas Flash X30 + Aprilia Scarabeo'))
   ,galleri('highslide', '', 'billed1737.jpg', array('2 scootere 6 personer 0 styrthjelme over for rødt... så kører det for jer'))
   ,galleri('highslide', '', 'billed3662.jpg', array('Sym Fiddle'))
   ,galleri('highslide', '', 'billed3663.jpg', array('Giantco Sprint'))
   ,galleri('highslide', '', 'billed3664.jpg', array('Kymco ZX'))
   ,galleri('highslide', '', 'billed3665.jpg', array('Yamaha Neos'))
   ,galleri('highslide', '', 'billed3666.jpg', array('PGO Comet'))
   ,galleri('highslide', '', 'billed3667.jpg', array('Vespa'))
   ,galleri('highslide', '', 'billed3668.jpg', array('PGO Hot'))
   ,galleri('highslide', '', 'billed3670.jpg', array('PGO PMX'))
   ,galleri('highslide', '', 'billed3671.jpg', array('Baotian Rebel (BT49QT-12)'))
   ,galleri('highslide', '', 'billed3672.jpg', array('Vespa'))
   ,galleri('highslide', '', 'billed3673.jpg', array('Peugeot Vivacity'))
   ,galleri('highslide', '', 'billed3674.jpg', array('Piaggio Typhoon'))
   ,galleri('highslide', '', 'billed3675.jpg', array('Hopper Leo'))
   ,galleri('highslide', '', 'billed3676.jpg', array('Giantco G-Buddy'))
   ,galleri('highslide', '', 'billed3677.jpg', array('Giantco Sprint'))
   ,galleri('highslide', '', 'billed3678.jpg', array('Piaggio Zip'))
   ,galleri('highslide', '', 'billed3679.jpg', array('Giantco Lambros'))
   ,galleri('highslide', '', 'billed3680.jpg', array('Giantco Sprint'))
   ,galleri('highslide', '', 'billed3681.jpg', array('Peugeot Speedfight'))
   ,galleri('highslide', '', 'billed3682.jpg', array('PGO Dr. Big'))
   ,galleri('highslide', '', 'billed3683.jpg', array('Peugeot Vivacity'))
   ,galleri('highslide', '', 'billed3685.jpg', array('Yamaha Neos'))
   ,galleri('highslide', '', 'billed3686.jpg', array('Piaggio Fly'))
   ,galleri('highslide', '', 'billed3687.jpg', array('CPI Aragon'))
   ,galleri('highslide', '', 'billed3688.jpg', array('Piaggio Typhoon'))
   ,galleri('highslide', '', 'billed3691.jpg', array('AGM LX 125 ccm'))
   ,galleri('highslide', '', 'billed3692.jpg', array('Peugeot Speedfight'))
   ,galleri('highslide', '', 'billed3693.jpg', array('Baotian Supermoto (BT49QT-9)'))
   ,galleri('highslide', '', 'billed3694.jpg', array('Vespa LX'))
   ,galleri('highslide', '', 'billed3696.jpg', array('Piaggio Typhoon'))
   ,galleri('highslide', '', 'billed3697.jpg', array('PGO New Ligero'))
   ,galleri('highslide', '', 'billed3698.jpg', array('Yamaha Neos'))
   ,galleri('highslide', '', 'billed3699.jpg', array('Kymco Agility'))
   ,galleri('highslide', '', 'billed3700.jpg', array('Piaggio Vespa 150'))
   ,galleri('highslide', '', 'billed3701.jpg', array('Vespa x 2 (foran Vespa Riders en café på Frederiksberg... det er vist lavet om til Vespa Cafe (http://vespabusiness.dk/)'))
   ,galleri('highslide', '', 'billed3702.jpg', array('2 Vespaer (+ 1 inden bag ruden)'))
   ,galleri('highslide', '', 'billed3703.jpg', array('Motor Mania Speedy. Læg mærke til kickstarteren som bruges som støtteben'))
   ,galleri('highslide', '', 'billed3704.jpg', array('Baotian Rebel (BT49QT-12)'))
   ,galleri('highslide', '', 'billed3705.jpg', array('En eller anden italiensk model'))
   ,galleri('highslide', '', 'billed3706.jpg', array('pølse'))
   ,galleri('highslide', '', 'billed3707.jpg', array('pølse'))
   ,galleri('highslide', '', 'billed3557.jpg', array('Yamaha Neos'))
   ,galleri('highslide', '', 'billed3558.jpg', array('CPI Oliver City'))
   ,galleri('highslide', '', 'billed3559.jpg', array('Peugeot v-clic'))
   ,galleri('highslide', '', 'billed3562.jpg', array('Vespa (LX tror jeg)'))
   ,galleri('highslide', '', 'billed3563.jpg', array('AGM Retro'))
   ,galleri('highslide', '', 'billed3564.jpg', array('PGO Hot + TMS S3'))
   ,galleri('highslide', '', 'billed3565.jpg', array('PGO Galaxy'))
   ,galleri('highslide', '', 'billed3566.jpg', array('Otello'))
   ,galleri('highslide', '', 'billed3567.jpg', array('VGA Digita + VGA Grido'))
   ,galleri('highslide', '', 'billed3568.jpg', array('VGA Digita'))
   ,galleri('highslide', '', 'billed3569.jpg', array('Kymco Agility + Kymco Agility + Kymco Agility + Kymco Agility'))
   ,galleri('highslide', '', 'billed3570.jpg', array('Piaggio NRG MC3'))
   ,galleri('highslide', '', 'billed3571.jpg', array('Kymco Agility'))
   ,galleri('highslide', '', 'billed3572.jpg', array('Peugeot TKR'))
   ,galleri('highslide', '', 'billed3573.jpg', array('Honda Sky'))
   ,galleri('highslide', '', 'billed3574.jpg', array('Kymco People'))
   ,galleri('highslide', '', 'billed3575.jpg', array('Giantco Sprint Sport'))
   ,galleri('highslide', '', 'billed3576.jpg', array('Yamaha Neos'))
   ,galleri('highslide', '', 'billed3577.jpg', array('Aprilia Scarabeo'))
   ,galleri('highslide', '', 'billed3580.jpg', array('Vespa 50'))
   ,galleri('highslide', '', 'billed3583.jpg', array('AGM Retro (med nybolig klistermærker)'))
   ,galleri('highslide', '', 'billed3584.jpg', array('E-Max 110S-D'))
   ,galleri('highslide', '', 'billed3596.jpg', array('PGO RodoShow'))
   ,galleri('highslide', '', 'billed3597.jpg', array('Giantco G-Buddy'))
   ,galleri('highslide', '', 'billed3598.jpg', array('Måske en Baotian'))
   ,galleri('highslide', '', 'billed3599.jpg', array('Kymco Agility'))
   ,galleri('highslide', '', 'billed3602.jpg', array('Giantco Sprint Sport'))
   ,galleri('highslide', '', 'billed3603.jpg', array('PGO Trike'))
   ,galleri('highslide', '', 'billed3604.jpg', array('Peugeot V-Clic'))
   ,galleri('highslide', '', 'billed3605.jpg', array('Honda Lead. Fransk nummerplade'))
   ,galleri('highslide', '', 'billed3606.jpg', array('Gid jeg havde et kamera der var bedre til at optage ting i bevægelse'))
   ,galleri('highslide', '', 'billed3708.jpg', array('CPI Oliver City'))
   ,galleri('highslide', '', 'billed3709.jpg', array('Piaggio Ape (Zulu News)'))
      ,galleri('highslide', '', 'billed3550.jpg', array('PGO PSE (e-post, e-hot) elektrisk post scooter'))
   ,galleri('highslide', '', 'billed1690.jpg', array('Giantco G-Buddy'))
   ,galleri('highslide', '', 'billed1691.jpg', array('PGO'))
   ,galleri('highslide', '', 'billed1678.jpg', array('Vespa'))
   ,galleri('highslide', '', 'billed1682.jpg', array('Kymco Agility'))
   ,galleri('highslide', '', 'billed3590.jpg', array('E-Max 110S-D'))
))
.'
'

,'
knallerter
' => '
'
.galleriholder(array(
    galleri('highslide', '', 'billed1639.jpg', array('Puch Maxi'))
   ,galleri('highslide', '', 'billed3560.jpg', array('Trilet'))
   ,galleri('highslide', '', 'billed3561.jpg', array('Suzuki FZ50'))
   ,galleri('highslide', '', 'billed3601.jpg', array('Nøddeknækkeren... eller ?'))
   ,galleri('highslide', '', 'billed1969.jpg', array('Simson Albatros'))
   //,galleri('highslide', '', 'billed1738.jpg', array(''))
   ,galleri('highslide', '', 'billed3695.jpg', array('Puch Maxi'))
   //,galleri('highslide', '', 'billed1633.jpg', array(''))
   ,galleri('highslide', '', 'billed1628.jpg', array('Trilet 2000M'))
   ,galleri('highslide', '', 'billed1685.jpg', array('Trilet AC50'))
   ,galleri('highslide', '', 'billed1692.jpg', array('Honda Wallaroo'))
   ,galleri('highslide', '', 'billed1623.jpg', array('ukendt model'))
   ,galleri('highslide', '', 'billed1709.jpg', array('TP GS-303'))
   ,galleri('highslide', '', 'billed1717.jpg', array('Yamasaki YM50-8B'))
))
.'
'

,'
motorcykler
' => '
'
.galleriholder(array(
    galleri('highslide', '', 'billed1610.jpg', array('Honda CBR'))
   ,galleri('highslide', '', 'billed1611.jpg', array('Ducati + Suzuki'))
   ,galleri('highslide', '', 'billed1606.jpg', array('MC x 6'))
   ,galleri('highslide', '', 'billed1607.jpg', array('Ducati 999s'))
   ,galleri('highslide', '', 'billed1608.jpg', array('Ducati 1098'))
   ,galleri('highslide', '', 'billed1609.jpg', array('Buell 1125CR'))
   ,galleri('highslide', '', 'billed1642.jpg', array('Suzuki GS500E'))
   ,galleri('highslide', '', 'billed1643.jpg', array('BMW'))
   ,galleri('highslide', '', 'billed1718.jpg', array('Piaggio MP3'))
   ,galleri('highslide', '', 'billed1730.jpg', array('Suzuki Burgman 400'))
   ,galleri('highslide', '', 'billed3600.jpg', array('Motorcykel tank'))
   ,galleri('highslide', '', 'billed3710.jpg', array('væltet motorcykel'))
   ,galleri('highslide', '', 'billed3711.jpg', array('anhænger'))
))
.'
'

,'
cykler
' => '
'
.galleriholder(array(
    galleri('highslide', '', 'billed1589.jpg', array('anhænger med duer'))
))
.'
'

,'
biler
' => '
'
.galleriholder(array(
    galleri('highslide', '', 'billed2003.jpg', array('Kewet Buddy'))
   ,galleri('highslide', '', 'billed2004.jpg', array('Think City'))
   ,galleri('highslide', '', 'billed2005.jpg', array('Think City'))
   ,galleri('highslide', '', 'billed2008.jpg', array('Think City'))
))
.'
'

,'
ATVer
' => '
'
.galleriholder(array(
    galleri('highslide', '', 'billed1644.jpg', array('Hyosung'))
))
.'
'

,'
andet
' => '
'
.galleriholder(array(
    galleri('highslide', '', 'billed3595.jpg', array('Pendel. Man kan køre op i den i en kørestol'))
   ,galleri('highslide', '', 'billed3689.jpg', array('Butik...'))
   ,galleri('highslide', '', 'billed3690.jpg', array('...med en masse ældre Piaggio Vespaer'))
   ,galleri('highslide', '', 'billed3684.jpg', array('Mini Crosser'))
   ,galleri('highslide', '', 'billed3669.jpg', array('Måske en Giantco G-Buddy. Billedet viser meget godt fordelingen af antal cykler, scootere og biler i københavnsområdet'))
   ,galleri('highslide', '', 'billed1590.jpg', array('Reklame scootere'))
))
.'
'

,'
kopiering af billederne
' => '
Jeg (scootergrisen) har selv taget næsten alle billederne ovenfor.
Hvis du skulle have lyst til at kopierne billederne og bruge dem til et eller andet som i en avis, på din hjemmeside eller hvad det måtte være så må du gerne det. Du behøver ikke spørge først.
Du må gerne skrive hvor du har billedet fra ('.ahref('http://scootergrisen.dk/', 'scootergrisen.dk').') men du behøver ikke.
'

,'
billeder fra nettet
' => '
'
.galleriholder(array(
    galleri('highslide', '', 'billed3863.jpg', array('standbike board'))
   ,galleri('highslide', '', 'billed3302.jpg', array('poover'))
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
