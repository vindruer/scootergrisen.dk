<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "reservedelstegninger";
$overskrift = "reservedelstegninger";
$metadescription = "reservedelstegninger til diverse 2 takt og 4 takt scootere og knallerter";

$databasecenter = array(

'
introduktion
' => '
Her på siden er en del reservedelstegninger fra forskellige manualer.

Du kan finde flere reservedelstegninger i manualerne under '.ahref('download.php', 'download').'.
'

,'
Honda Dax motor
' => ''
.galleriholder(array(
    galleri('highslide', '', 'billed2100.jpg', array('Honda Dax', 'topstykke dæksel', 'indsugningsstuds', 'tændrør'))
   ,galleri('highslide', '', 'billed2101.jpg', array('Honda Dax', 'cylinder', 'topstykke', ''))
   ,galleri('highslide', '', 'billed2102.jpg', array('Honda Dax', 'knastaksel', 'ventiler', ''))
   ,galleri('highslide', '', 'billed2103.jpg', array('Honda Dax', 'knastkædestrammer', '', ''))
   ,galleri('highslide', '', 'billed2104.jpg', array('Honda Dax', 'højre motorblok dæksel', '', ''))
   ,galleri('highslide', '', 'billed2105.jpg', array('Honda Dax', 'kobling', '', ''))
   ,galleri('highslide', '', 'billed2106.jpg', array('Honda Dax', 'venstre motorblok dæksel', 'generator', ''))
))
.'
'.visfil('1', 'scooterhjemmeside/download/honda_dax_motor_reservedele.pdf').'
'

,'
Sym Mio
' => ''
.galleriholder(array(
    galleri('highslide', '', 'billed2049.jpg', array('Sym Mio', 'blæser skjold', '', ''))
   ,galleri('highslide', '', 'billed2050.jpg', array('Sym Mio', 'topstykke', '', ''))
   ,galleri('highslide', '', 'billed2051.jpg', array('Sym Mio', 'knastaksel', 'knastkæde', ''))
   ,galleri('highslide', '', 'billed2052.jpg', array('Sym Mio', 'højre motorblok yderst', 'starterkobling', ''))
   ,galleri('highslide', '', 'billed2053.jpg', array('Sym Mio', 'cylinder', '', ''))
   ,galleri('highslide', '', 'billed2054.jpg', array('Sym Mio', 'højre motorblok inderst', 'oliepind', ''))
   ,galleri('highslide', '', 'billed2055.jpg', array('Sym Mio', 'generator', '', ''))
   ,galleri('highslide', '', 'billed2056.jpg', array('Sym Mio', 'variatordæksel', 'kickstarter', ''))
   ,galleri('highslide', '', 'billed2057.jpg', array('Sym Mio', 'forreste remskiver', 'kilerem', ''))
   ,galleri('highslide', '', 'billed2058.jpg', array('Sym Mio', 'bagerste remskiver', 'kobling', ''))
   ,galleri('highslide', '', 'billed2059.jpg', array('Sym Mio', 'reduktionsgear', '', ''))
   ,galleri('highslide', '', 'billed2060.jpg', array('Sym Mio', 'venstre motorblok', 'startermotor', ''))
   ,galleri('highslide', '', 'billed2061.jpg', array('Sym Mio', 'krumtap', '', ''))
   ,galleri('highslide', '', 'billed2062.jpg', array('Sym Mio', 'karburator', '', ''))

   ,galleri('highslide', '', 'billed2063.jpg', array('Sym Mio', 'styr skjold', 'spejle', ''))
   ,galleri('highslide', '', 'billed2064.jpg', array('Sym Mio', 'styr', '', ''))
   ,galleri('highslide', '', 'billed2065.jpg', array('Sym Mio', 'bag skjold', 'bag lys', ''))
   ,galleri('highslide', '', 'billed2066.jpg', array('Sym Mio', 'for skjold', '', ''))
   ,galleri('highslide', '', 'billed2067.jpg', array('Sym Mio', 'forgaffel', 'center støtteben', ''))
   ,galleri('highslide', '', 'billed2068.jpg', array('Sym Mio', 'for under skjold', '', ''))
   ,galleri('highslide', '', 'billed2069.jpg', array('Sym Mio', 'midt ned skjold', 'batteri', 'bag støddæmper'))
   ,galleri('highslide', '', 'billed2070.jpg', array('Sym Mio', 'skjold bag', '', ''))
   ,galleri('highslide', '', 'billed2071.jpg', array('Sym Mio', 'fodhvilere for passager', '', ''))
   ,galleri('highslide', '', 'billed2072.jpg', array('Sym Mio', 'for hjul', '', ''))
   ,galleri('highslide', '', 'billed2073.jpg', array('Sym Mio', 'bag hjul', '', ''))
   ,galleri('highslide', '', 'billed2074.jpg', array('Sym Mio', 'sæde', 'hjelmboks', ''))
   ,galleri('highslide', '', 'billed2075.jpg', array('Sym Mio', 'ledningsnet', '', ''))
   ,galleri('highslide', '', 'billed2076.jpg', array('Sym Mio', 'benzintank', 'håndtag', ''))
   ,galleri('highslide', '', 'billed2077.jpg', array('Sym Mio', 'stel', '', ''))
   ,galleri('highslide', '', 'billed2078.jpg', array('Sym Mio', 'luftfilter', '', ''))
   ,galleri('highslide', '', 'billed2079.jpg', array('Sym Mio', 'udstødning', '', ''))
))
.'
'.visfil('1', 'scooterhjemmeside/download/sym_mio_reservedele.pdf').'
'

,'
Giantco motor
' => ''
.galleriholder(array(
    galleri('highslide', '', 'billed2081.jpg', array('Giantco', 'blæser skjold', '', ''))
   ,galleri('highslide', '', 'billed2082.jpg', array('Giantco', 'ventildæksel', '', ''))
   ,galleri('highslide', '', 'billed2083.jpg', array('Giantco', 'sekundært luft indtag', '', ''))
   ,galleri('highslide', '', 'billed2084.jpg', array('Giantco', 'topstykke', '', ''))
   ,galleri('highslide', '', 'billed2085.jpg', array('Giantco', 'knastaksel', 'vippearme', 'ventiler'))
   ,galleri('highslide', '', 'billed2086.jpg', array('Giantco', 'knastkæde', '', ''))
   ,galleri('highslide', '', 'billed2087.jpg', array('Giantco', 'cylinder', '', ''))
   ,galleri('highslide', '', 'billed2088.jpg', array('Giantco', 'motorblok højre', '', ''))
   ,galleri('highslide', '', 'billed2089.jpg', array('Giantco', 'generator', '', ''))
   ,galleri('highslide', '', 'billed2090.jpg', array('Giantco', 'oliepumpe', '', ''))
   ,galleri('highslide', '', 'billed2091.jpg', array('Giantco', 'starter motor', '', ''))
   ,galleri('highslide', '', 'billed2092.jpg', array('Giantco', 'variatordæksel', '', ''))
   ,galleri('highslide', '', 'billed2093.jpg', array('Giantco', 'forreste remskiver', 'kickstarter', ''))
   ,galleri('highslide', '', 'billed2094.jpg', array('Giantco', 'bagerste remskiver', 'kilerem', 'kobling'))
   ,galleri('highslide', '', 'billed2095.jpg', array('Giantco', 'reduktionsgear', '', ''))
   ,galleri('highslide', '', 'billed2096.jpg', array('Giantco', 'motorblok venstre', '', ''))
   ,galleri('highslide', '', 'billed2097.jpg', array('Giantco', 'krumtap', '', ''))
   ,galleri('highslide', '', 'billed2098.jpg', array('Giantco', 'komplet motor', '', ''))
   ,galleri('highslide', '', 'billed2099.jpg', array('Giantco', 'karburator', '', ''))
))
.'
'.visfil('1', 'scooterhjemmeside/download/giantco_motor_reservedele.pdf').'
'

,'
Giantco Sprint
' => ''
.galleriholder(array(
    galleri('highslide', '', 'billed2011.jpg', array('Giantco Sprint', 'forlys', '', ''))
   ,galleri('highslide', '', 'billed2012.jpg', array('Giantco Sprint', 'speedometer', '', ''))
   ,galleri('highslide', '', 'billed2013.jpg', array('Giantco Sprint', 'styr', 'skivebremse', ''))
   ,galleri('highslide', '', 'billed2014.jpg', array('Giantco Sprint', 'styr', 'tromlebremse', ''))
   ,galleri('highslide', '', 'billed2015.jpg', array('Giantco Sprint', 'forgaffel', 'skivebremse', ''))
   ,galleri('highslide', '', 'billed2016.jpg', array('Giantco Sprint', 'forgaffel', 'tromlebremse', ''))
   ,galleri('highslide', '', 'billed2017.jpg', array('Giantco Sprint', 'skjold', 'forlys', ''))
   ,galleri('highslide', '', 'billed2018.jpg', array('Giantco Sprint', 'skjold', 'front', ''))
   ,galleri('highslide', '', 'billed2019.jpg', array('Giantco Sprint', 'skjold', 'front', ''))
   ,galleri('highslide', '', 'billed2020.jpg', array('Giantco Sprint', 'skjold', 'bag', ''))
   ,galleri('highslide', '', 'billed2021.jpg', array('Giantco Sprint', 'skjold', 'bag vinge og center', ''))
   ,galleri('highslide', '', 'billed2022.jpg', array('Giantco Sprint', 'skjold', 'nederst', ''))
   ,galleri('highslide', '', 'billed2023.jpg', array('Giantco Sprint', 'hjul aluminium', 'for', 'skivebremse'))
   ,galleri('highslide', '', 'billed2024.jpg', array('Giantco Sprint', 'hjul aluminium', 'bag ', 'tromlebremse'))
   ,galleri('highslide', '', 'billed2025.jpg', array('Giantco Sprint', 'hjul stål', 'for', 'tromlebremse'))
   ,galleri('highslide', '', 'billed2026.jpg', array('Giantco Sprint', 'hjul stål', 'bag', 'tromlebremse'))
   ,galleri('highslide', '', 'billed2027.jpg', array('Giantco Sprint', 'luftfilter', '', ''))
   ,galleri('highslide', '', 'billed2028.jpg', array('Giantco Sprint', 'benzintank', 'benzinmåler', 'benzinhane'))
   ,galleri('highslide', '', 'billed2029.jpg', array('Giantco Sprint', 'sæde', 'hjelm boks', ''))
   ,galleri('highslide', '', 'billed2030.jpg', array('Giantco Sprint', 'for skærm', '', ''))
   ,galleri('highslide', '', 'billed2031.jpg', array('Giantco Sprint', 'udstødning', 'stål', ''))
   ,galleri('highslide', '', 'billed2032.jpg', array('Giantco Sprint', 'udstødning', 'aluminium', ''))
   ,galleri('highslide', '', 'billed2033.jpg', array('Giantco Sprint', 'bag støddæmper', 'center støtteben', ''))
   ,galleri('highslide', '', 'billed2034.jpg', array('Giantco Sprint', 'blinklys', 'for', ''))
   ,galleri('highslide', '', 'billed2035.jpg', array('Giantco Sprint', 'baglys', '', ''))
   ,galleri('highslide', '', 'billed2036.jpg', array('Giantco Sprint', 'ledningsnet', 'batteri', 'horn låse'))
   ,galleri('highslide', '', 'billed2037.jpg', array('Giantco Sprint', 'elektriske dele', '', ''))
   ,galleri('highslide', '', 'billed2038.jpg', array('Giantco Sprint', 'stel', 'stel dele', ''))
   ,galleri('highslide', '', 'billed2039.jpg', array('Giantco Sprint', 'forbremse', 'skivebremse', ''))
   ,galleri('highslide', '', 'billed2040.jpg', array('Giantco Sprint', 'værktøj', 'klistermærke', 'manual'))
   ,galleri('highslide', '', 'billed2041.jpg', array('Giantco Sprint', 'top boks', 'lille', ''))
   ,galleri('highslide', '', 'billed2042.jpg', array('Giantco Sprint', 'top boks', 'stor', ''))
   ,galleri('highslide', '', 'billed2043.jpg', array('Giantco Sprint', '70 cc big bore kit', '', ''))
   ,galleri('highslide', '', 'billed2044.jpg', array('Giantco Sprint', 'alarm', '', ''))
))
.'
'.visfil('1', 'scooterhjemmeside/download/giantco_sprint_reservedele.pdf').'
'

,'
Kymco Super 8
' => ''
.galleriholder(array(
    galleri('highslide', '', 'billed0830.jpg', array('Kymco Super 8', 'motorblok', '', ''))
   ,galleri('highslide', '', 'billed0831.jpg', array('Kymco Super 8', 'topstykke', '', ''))
   ,galleri('highslide', '', 'billed0832.jpg', array('Kymco Super 8', 'cylinder', 'stempel', 'krumtap'))
   ,galleri('highslide', '', 'billed0833.jpg', array('Kymco Super 8', 'motorblok højreside dæksel', '', ''))
   ,galleri('highslide', '', 'billed0834.jpg', array('Kymco Super 8', 'variator', '', ''))
   ,galleri('highslide', '', 'billed0835.jpg', array('Kymco Super 8', 'startermotor', 'oliepumpe', ''))
   ,galleri('highslide', '', 'billed0836.jpg', array('Kymco Super 8', 'blæserdæksel', 'generator', ''))
   ,galleri('highslide', '', 'billed0837.jpg', array('Kymco Super 8', 'reduktionsgear', '', ''))
   ,galleri('highslide', '', 'billed0838.jpg', array('Kymco Super 8', 'karburator', '', ''))

   ,galleri('highslide', '', 'billed1048.jpg', array('Kymco Super 8', 'forlys', '', ''))
   ,galleri('highslide', '', 'billed1049.jpg', array('Kymco Super 8', 'speedometer', '', ''))
   ,galleri('highslide', '', 'billed1050.jpg', array('Kymco Super 8', 'styr', 'styr skjold', ''))
   ,galleri('highslide', '', 'billed1051.jpg', array('Kymco Super 8', 'bremse (master cylinder)', 'caliper', ''))
   ,galleri('highslide', '', 'billed1052.jpg', array('Kymco Super 8', 'front skjolde', '', ''))
   ,galleri('highslide', '', 'billed1053.jpg', array('Kymco Super 8', 'styrlejer', 'for affjedring', ''))
   ,galleri('highslide', '', 'billed1054.jpg', array('Kymco Super 8', 'forhjul', '', ''))
   ,galleri('highslide', '', 'billed1055.jpg', array('Kymco Super 8', 'baghjul', '', ''))
   ,galleri('highslide', '', 'billed1056.jpg', array('Kymco Super 8', 'sæde', '', ''))

   ,galleri('highslide', '', 'billed1057.jpg', array('Kymco Super 8', 'benzintank', '', ''))
   ,galleri('highslide', '', 'billed1058.jpg', array('Kymco Super 8', 'batteri', '', ''))
   ,galleri('highslide', '', 'billed1059.jpg', array('Kymco Super 8', 'midter skjolde', 'hjelm rum', ''))
   ,galleri('highslide', '', 'billed1060.jpg', array('Kymco Super 8', 'luftfilter', '', ''))
   ,galleri('highslide', '', 'billed1061.jpg', array('Kymco Super 8', 'udstødning', '', ''))
   ,galleri('highslide', '', 'billed1062.jpg', array('Kymco Super 8', 'støtteben', 'kickstarter arm', ''))
   ,galleri('highslide', '', 'billed1063.jpg', array('Kymco Super 8', 'bag affjedring', '', ''))
   ,galleri('highslide', '', 'billed1064.jpg', array('Kymco Super 8', 'for blinklys', '', ''))
   ,galleri('highslide', '', 'billed1065.jpg', array('Kymco Super 8', 'baglys', 'bagskærme', ''))

   ,galleri('highslide', '', 'billed1066.jpg', array('Kymco Super 8', 'ledningsnet', '', ''))
   ,galleri('highslide', '', 'billed1067.jpg', array('Kymco Super 8', 'stel', '', ''))
   ,galleri('highslide', '', 'billed1068.jpg', array('Kymco Super 8', 'sekundært luftfilter', '', ''))
   ,galleri('highslide', '', 'billed1069.jpg', array('Kymco Super 8', 'klistermærker', '', ''))
))
.'
'.visfil('1', 'scooterhjemmeside/download/kymco_super8_reservedele.pdf').'
'

,'
Hero Stallion og Panther motor
' => ''
.galleriholder(array(
    galleri('highslide', '', 'billed2118.jpg', array('Hero Stallion og Panther', 'topstykke og cylinder', '', ''))
   ,galleri('highslide', '', 'billed2119.jpg', array('Hero Stallion og Panther', 'topsykke dæksel', 'indsugningsstuds', ''))
   ,galleri('highslide', '', 'billed2120.jpg', array('Hero Stallion og Panther', 'knastaksel', 'ventiler', ''))
   ,galleri('highslide', '', 'billed2121.jpg', array('Hero Stallion og Panther', 'knastkæde', 'knastkædestrammer', ''))
   ,galleri('highslide', '', 'billed2122.jpg', array('Hero Stallion og Panther', 'højre motorblok dæksel', '', ''))
   ,galleri('highslide', '', 'billed2123.jpg', array('Hero Stallion og Panther', 'kobling', '', ''))
   ,galleri('highslide', '', 'billed2124.jpg', array('Hero Stallion og Panther', 'venstre motorblok dæksel', 'generator', ''))
   ,galleri('highslide', '', 'billed2125.jpg', array('Hero Stallion og Panther', 'motorblok', 'oliepumpe', ''))
   ,galleri('highslide', '', 'billed2126.jpg', array('Hero Stallion og Panther', 'krumtap', 'stempel', ''))
   ,galleri('highslide', '', 'billed2127.jpg', array('Hero Stallion og Panther', 'aksler', '', ''))
   ,galleri('highslide', '', 'billed2128.jpg', array('Hero Stallion og Panther', 'starter enhed', '', ''))
   ,galleri('highslide', '', 'billed2129.jpg', array('Hero Stallion og Panther', 'gearskifter enhed', '', ''))
   ,galleri('highslide', '', 'billed2130.jpg', array('Hero Stallion og Panther', 'gearskifter pedal', 'fodhviler', ''))
   ,galleri('highslide', '', 'billed2131.jpg', array('Hero Stallion og Panther', 'udstødning', '', ''))
   ,galleri('highslide', '', 'billed2132.jpg', array('Hero Stallion og Panther', 'karburator', '', ''))
   ,galleri('highslide', '', 'billed2133.jpg', array('Hero Stallion og Panther', 'luftfilter', '', ''))
))
.'
'.visfil('1', 'scooterhjemmeside/download/hero_motor_reservedele.pdf').'
'

,'
CPI Popcorn
' => ''
.galleriholder(array(
    galleri('highslide', '', 'billed2746.jpg', array('CPI Popcorn', 'topstykke og cylinder', '', ''))
   ,galleri('highslide', '', 'billed2747.jpg', array('CPI Popcorn', 'stempel og krumtap', '', ''))
   ,galleri('highslide', '', 'billed2748.jpg', array('CPI Popcorn', 'blæserskjolde', '', ''))
   ,galleri('highslide', '', 'billed2749.jpg', array('CPI Popcorn', 'oliepumpe', '', ''))
   ,galleri('highslide', '', 'billed2750.jpg', array('CPI Popcorn', 'luftfilter', '', ''))
   ,galleri('highslide', '', 'billed2751.jpg', array('CPI Popcorn', 'karburator', '', ''))
   ,galleri('highslide', '', 'billed2752.jpg', array('CPI Popcorn', 'motorblok', 'variatordæksel', ''))
   ,galleri('highslide', '', 'billed2753.jpg', array('CPI Popcorn', 'kickstarter', 'startermotor', 'starterkobling'))
   ,galleri('highslide', '', 'billed2754.jpg', array('CPI Popcorn', 'variator', '', ''))
   ,galleri('highslide', '', 'billed2755.jpg', array('CPI Popcorn', 'generator', '', ''))
   ,galleri('highslide', '', 'billed2756.jpg', array('CPI Popcorn', 'reed valve', '', ''))
   ,galleri('highslide', '', 'billed2757.jpg', array('CPI Popcorn', 'reduktionsgear', '', ''))

   ,galleri('highslide', '', 'billed2758.jpg', array('CPI Popcorn', 'stel', '', ''))
   ,galleri('highslide', '', 'billed2759.jpg', array('CPI Popcorn', 'instrumentpanel', '', ''))
   ,galleri('highslide', '', 'billed2760.jpg', array('CPI Popcorn', 'styr kontakter', '', ''))
   ,galleri('highslide', '', 'billed2761.jpg', array('CPI Popcorn', 'skjold', 'front', ''))
   ,galleri('highslide', '', 'billed2762.jpg', array('CPI Popcorn', 'skjold', 'side', ''))
   ,galleri('highslide', '', 'billed2763.jpg', array('CPI Popcorn', 'olietank', '', ''))
   ,galleri('highslide', '', 'billed2764.jpg', array('CPI Popcorn', 'bag støddæmper', '', ''))
   ,galleri('highslide', '', 'billed2765.jpg', array('CPI Popcorn', 'for affjedring', '', ''))
   ,galleri('highslide', '', 'billed2766.jpg', array('CPI Popcorn', 'benzintank', 'benzinmåler', 'benzinhane'))
   ,galleri('highslide', '', 'billed2767.jpg', array('CPI Popcorn', 'sæde', 'bagagebærer', ''))
   ,galleri('highslide', '', 'billed2768.jpg', array('CPI Popcorn', 'for hjul', '', ''))
   ,galleri('highslide', '', 'billed2769.jpg', array('CPI Popcorn', 'for bremse', '', ''))
   ,galleri('highslide', '', 'billed2770.jpg', array('CPI Popcorn', 'bag hjul', 'bagbremse', ''))
   ,galleri('highslide', '', 'billed2771.jpg', array('CPI Popcorn', 'styr', 'kabler', ''))
   ,galleri('highslide', '', 'billed2772.jpg', array('CPI Popcorn', 'fodplade', 'støtteben', 'forhvilere'))
   ,galleri('highslide', '', 'billed2773.jpg', array('CPI Popcorn', 'skjold', 'foran ben', ''))
   ,galleri('highslide', '', 'billed2774.jpg', array('CPI Popcorn', 'skjold', 'for oppe', 'sidespejle'))
   ,galleri('highslide', '', 'billed2775.jpg', array('CPI Popcorn', 'forlys', '', ''))
   ,galleri('highslide', '', 'billed2776.jpg', array('CPI Popcorn', 'baglys', '', ''))
   ,galleri('highslide', '', 'billed2777.jpg', array('CPI Popcorn', 'udstødning', '', ''))
   ,galleri('highslide', '', 'billed2778.jpg', array('CPI Popcorn', 'elektrisk udstyr 1', '', ''))
   ,galleri('highslide', '', 'billed2779.jpg', array('CPI Popcorn', 'elektrisk udstyr 2', '', ''))
   ,galleri('highslide', '', 'billed2780.jpg', array('CPI Popcorn', 'værktøj', '', ''))
))
.'
'.visfil('1', 'scooterhjemmeside/download/cpi_popcorn_reservedele.pdf').'
'

,'
Sachs Madass
' => ''
.galleriholder(array(
    galleri('highslide', '', 'billed2919.jpg', array('Sachs Madass', 'forlygte', '', ''))
   ,galleri('highslide', '', 'billed2920.jpg', array('Sachs Madass', 'speedometer', '', ''))
   ,galleri('highslide', '', 'billed2921.jpg', array('Sachs Madass', 'styr', '', ''))
   ,galleri('highslide', '', 'billed2922.jpg', array('Sachs Madass', 'styrstamme', 'nedre gaffelbro', ''))
   ,galleri('highslide', '', 'billed2923.jpg', array('Sachs Madass', 'øvre gaffelbro', '', ''))
   ,galleri('highslide', '', 'billed2924.jpg', array('Sachs Madass', 'forgaffelben', '', ''))
   ,galleri('highslide', '', 'billed2925.jpg', array('Sachs Madass', 'forbremse', '', ''))
   ,galleri('highslide', '', 'billed2926.jpg', array('Sachs Madass', 'forskærm', '', ''))
   ,galleri('highslide', '', 'billed2927.jpg', array('Sachs Madass', 'forhjul', '', ''))
   ,galleri('highslide', '', 'billed2928.jpg', array('Sachs Madass', 'luftfilter', '', ''))
   ,galleri('highslide', '', 'billed2929.jpg', array('Sachs Madass', 'fodhviler', '', ''))
   ,galleri('highslide', '', 'billed2930.jpg', array('Sachs Madass', 'bagbremsepedal', 'gearskiftpedal', 'version 1'))
   ,galleri('highslide', '', 'billed2931.jpg', array('Sachs Madass', 'bagbremsepedal', 'gearskiftpedal', 'version 2'))
   ,galleri('highslide', '', 'billed2932.jpg', array('Sachs Madass', 'udstødning', 'version 1', ''))
   ,galleri('highslide', '', 'billed2933.jpg', array('Sachs Madass', 'udstødning', 'version 2', ''))
   ,galleri('highslide', '', 'billed2934.jpg', array('Sachs Madass', 'stel', 'benzinhane', ''))
   ,galleri('highslide', '', 'billed2935.jpg', array('Sachs Madass', 'motorhænger', '', ''))
   ,galleri('highslide', '', 'billed2936.jpg', array('Sachs Madass', 'bag støddæmper', '', ''))
   ,galleri('highslide', '', 'billed2937.jpg', array('Sachs Madass', 'bagskærm', '', ''))
   ,galleri('highslide', '', 'billed2938.jpg', array('Sachs Madass', 'baghjul', '', ''))
   ,galleri('highslide', '', 'billed2939.jpg', array('Sachs Madass', 'bagbremse', 'version 1', ''))
   ,galleri('highslide', '', 'billed2940.jpg', array('Sachs Madass', 'bagbremse', 'version 2', ''))
   ,galleri('highslide', '', 'billed2941.jpg', array('Sachs Madass', 'svingarm', 'fodhviler for passager', ''))
   ,galleri('highslide', '', 'billed2942.jpg', array('Sachs Madass', 'sæde', 'gammel', ''))
   ,galleri('highslide', '', 'billed2943.jpg', array('Sachs Madass', 'sæde', 'ny', ''))
   ,galleri('highslide', '', 'billed2944.jpg', array('Sachs Madass', 'baglygte', '', ''))
   ,galleri('highslide', '', 'billed2945.jpg', array('Sachs Madass', 'blinklys', '', ''))
   ,galleri('highslide', '', 'billed2946.jpg', array('Sachs Madass', 'ledningsnet', 'elektrisk udstyr', ''))
   ,galleri('highslide', '', 'billed2947.jpg', array('Sachs Madass', 'klistermærker', '', ''))
   ,galleri('highslide', '', 'billed2948.jpg', array('Sachs Madass', 'topstykke', '', ''))
   ,galleri('highslide', '', 'billed2949.jpg', array('Sachs Madass', 'cylinder', '', ''))
   ,galleri('highslide', '', 'billed2950.jpg', array('Sachs Madass', 'ventiler', '', ''))
   ,galleri('highslide', '', 'billed2951.jpg', array('Sachs Madass', 'knastkæde', '', ''))
   ,galleri('highslide', '', 'billed2952.jpg', array('Sachs Madass', 'motorblok', 'oliepumpe', ''))
   ,galleri('highslide', '', 'billed2953.jpg', array('Sachs Madass', 'krumtap', 'stempel', ''))
   ,galleri('highslide', '', 'billed2954.jpg', array('Sachs Madass', 'startermotor', '', ''))
   ,galleri('highslide', '', 'billed2955.jpg', array('Sachs Madass', 'venstre motorskjold', 'generator', ''))
   ,galleri('highslide', '', 'billed2956.jpg', array('Sachs Madass', 'starterkobling', '', ''))
   ,galleri('highslide', '', 'billed2957.jpg', array('Sachs Madass', 'højre motorskjold', '', ''))
   ,galleri('highslide', '', 'billed2958.jpg', array('Sachs Madass', 'kobling', '', ''))
   ,galleri('highslide', '', 'billed2959.jpg', array('Sachs Madass', 'gear', '', ''))
   ,galleri('highslide', '', 'billed2960.jpg', array('Sachs Madass', 'gearskifter', '', ''))
   ,galleri('highslide', '', 'billed2961.jpg', array('Sachs Madass', 'kickstarteraksel', '', ''))
   ,galleri('highslide', '', 'billed2962.jpg', array('Sachs Madass', 'karburator', '', ''))
   ,galleri('highslide', '', 'billed2963.jpg', array('Sachs Madass', 'komplet motor', '', ''))
))
.'
'.visfil('1', 'scooterhjemmeside/download/sachs_madass_reservedele.pdf').'
'

,'
Piaggio Zip 4T
' => ''
.galleriholder(array(
    galleri('highslide', '', 'billed3182.jpg', array('Piaggio Zip 4T', 'komplet motor', '', ''))
   ,galleri('highslide', '', 'billed3183.jpg', array('Piaggio Zip 4T', 'motorblok', '', ''))
   ,galleri('highslide', '', 'billed3184.jpg', array('Piaggio Zip 4T', 'krumtapaksel', '', ''))
   ,galleri('highslide', '', 'billed3185.jpg', array('Piaggio Zip 4T', 'cylinder', 'stempel', ''))
   ,galleri('highslide', '', 'billed3186.jpg', array('Piaggio Zip 4T', 'topstykke', '', ''))
   ,galleri('highslide', '', 'billed3187.jpg', array('Piaggio Zip 4T', 'vippearme', 'knastaksel', ''))
   ,galleri('highslide', '', 'billed3188.jpg', array('Piaggio Zip 4T', 'ventildæksel', 'motorblæseskjold', ''))
   ,galleri('highslide', '', 'billed3189.jpg', array('Piaggio Zip 4T', 'variator', '', ''))
   ,galleri('highslide', '', 'billed3190.jpg', array('Piaggio Zip 4T', 'variator', 'kobling', ''))
   ,galleri('highslide', '', 'billed3191.jpg', array('Piaggio Zip 4T', 'variator luftindsugning', '', ''))
   ,galleri('highslide', '', 'billed3192.jpg', array('Piaggio Zip 4T', 'oliepumpe', '', ''))
   ,galleri('highslide', '', 'billed3193.jpg', array('Piaggio Zip 4T', 'kickstarter', '', ''))
   ,galleri('highslide', '', 'billed3194.jpg', array('Piaggio Zip 4T', 'generator', '', ''))
   ,galleri('highslide', '', 'billed3195.jpg', array('Piaggio Zip 4T', 'motoroliefilter', '', ''))
   ,galleri('highslide', '', 'billed3196.jpg', array('Piaggio Zip 4T', 'reduktionsgear', '', ''))
   ,galleri('highslide', '', 'billed3197.jpg', array('Piaggio Zip 4T', 'tromlebremse', '', ''))
   ,galleri('highslide', '', 'billed3198.jpg', array('Piaggio Zip 4T', 'indsugningsstuds', 'luftrør', ''))
   ,galleri('highslide', '', 'billed3199.jpg', array('Piaggio Zip 4T', 'karburator', '', ''))
   ,galleri('highslide', '', 'billed3200.jpg', array('Piaggio Zip 4T', 'udstødning', '', ''))
   ,galleri('highslide', '', 'billed3201.jpg', array('Piaggio Zip 4T', 'luftfilter', '', ''))
   ,galleri('highslide', '', 'billed3202.jpg', array('Piaggio Zip 4T', 'sekundært luftfilter', '', ''))
   ,galleri('highslide', '', 'billed3203.jpg', array('Piaggio Zip 4T', 'stel', '', ''))
   ,galleri('highslide', '', 'billed3204.jpg', array('Piaggio Zip 4T', 'støtteben center', '', ''))
   ,galleri('highslide', '', 'billed3205.jpg', array('Piaggio Zip 4T', 'skjold', 'front', ''))
   ,galleri('highslide', '', 'billed3206.jpg', array('Piaggio Zip 4T', 'skjold', 'handskerum', ''))
   ,galleri('highslide', '', 'billed3207.jpg', array('Piaggio Zip 4T', 'skjold', 'fødder', ''))
   ,galleri('highslide', '', 'billed3208.jpg', array('Piaggio Zip 4T', 'skjold', 'under', ''))
   ,galleri('highslide', '', 'billed3209.jpg', array('Piaggio Zip 4T', 'skjold', 'skærme', ''))
   ,galleri('highslide', '', 'billed3210.jpg', array('Piaggio Zip 4T', 'hjelmrum', '', ''))
   ,galleri('highslide', '', 'billed3211.jpg', array('Piaggio Zip 4T', 'skjold', 'bag højre venstre', ''))
   ,galleri('highslide', '', 'billed3212.jpg', array('Piaggio Zip 4T', 'mærker', '', ''))
   ,galleri('highslide', '', 'billed3213.jpg', array('Piaggio Zip 4T', 'sæde', '', ''))
   ,galleri('highslide', '', 'billed3214.jpg', array('Piaggio Zip 4T', 'sidespejle', '', ''))
   ,galleri('highslide', '', 'billed3215.jpg', array('Piaggio Zip 4T', 'ratlås', '', ''))
   ,galleri('highslide', '', 'billed3216.jpg', array('Piaggio Zip 4T', 'benzintank', 'olietank', 'benzinhane'))
   ,galleri('highslide', '', 'billed3217.jpg', array('Piaggio Zip 4T', 'skjold', 'styr', ''))
   ,galleri('highslide', '', 'billed3218.jpg', array('Piaggio Zip 4T', 'styr', '', ''))
   ,galleri('highslide', '', 'billed3219.jpg', array('Piaggio Zip 4T', 'motorophæng', '', ''))
   ,galleri('highslide', '', 'billed3220.jpg', array('Piaggio Zip 4T', 'forgaffel', '', ''))
   ,galleri('highslide', '', 'billed3221.jpg', array('Piaggio Zip 4T', 'fjeder med støddæmper', '', ''))
   ,galleri('highslide', '', 'billed3222.jpg', array('Piaggio Zip 4T', 'forhjul', '', ''))
   ,galleri('highslide', '', 'billed3223.jpg', array('Piaggio Zip 4T', 'baghjul', '', ''))
   ,galleri('highslide', '', 'billed3224.jpg', array('Piaggio Zip 4T', 'bremsecaliper', '', ''))
   ,galleri('highslide', '', 'billed3225.jpg', array('Piaggio Zip 4T', 'kabler', '', ''))
   ,galleri('highslide', '', 'billed3226.jpg', array('Piaggio Zip 4T', 'kontakter', '', ''))
   ,galleri('highslide', '', 'billed3227.jpg', array('Piaggio Zip 4T', 'forlys', '', ''))
   ,galleri('highslide', '', 'billed3228.jpg', array('Piaggio Zip 4T', 'baglys', '', ''))
   ,galleri('highslide', '', 'billed3229.jpg', array('Piaggio Zip 4T', 'starterrelæ', 'horn', 'batteri'))
   ,galleri('highslide', '', 'billed3230.jpg', array('Piaggio Zip 4T', 'spændingsregulator', 'CDI med tændspole', ''))
   ,galleri('highslide', '', 'billed3231.jpg', array('Piaggio Zip 4T', 'ledningsnet', '', ''))
))
.'
'.visfil('1', 'scooterhjemmeside/download/piaggio_zip_4t_reservedele.pdf').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
