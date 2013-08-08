<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "oliepumpe - 4 takt motor";
$overskrift = "oliepumpe - 4 takt motor";
$metadescription = "forklaring af oliepumpen der findes i 4 takt motorer på scootere som pumper olien op fra bunden af motoren ud til delene som skal smørres og køles";

$databasecenter = array(

'
oliepumpe
' => '
Denne side handler om oliepumpen som kan findes i en 4 takt motor.

Her ses en oliepumpe fra en Sachs Madass.
'.visbilled('1', 'billed0080.jpg', 'oliepumpe inder yder rotor', false, true).'
Oliepumpen har en indre rotor og en ydre rotor.

Den indre rotor er placeret lidt væk fra midten.
'.visbilled('1', 'billed0047.jpg', 'oliepumpe inder yder rotor', false, true).'

Når den indre rotor drejer så vil den skubbe til den ydre rotor som dermed også drejer.

Oliepumpen sidder typisk på højre side af motoren.
Den indre rotor er forbundet med et tandhjul som drejes rundt af krumtapakslen når motoren kører.
'.visbilled('1', 'billed0023.jpg', 'olie pumpe', false, true).'
Olien pumpes fra et hul til et andet.
'.visbilled('1', 'billed2157.jpg', 'olie pumpe huller', false, true).'
Oliepumpen kan også være drevet af en kæde i stedet for tandhjul.
'.visbilled('1', 'billed2512.jpg', 'højre side af motor oliepumpe kæde', false, true).'
'.visbilled('1', 'billed2513.jpg', 'oliepumpe kæde', false, true).'
Oliepumpen suger motorolie op fra bunden af motoren.
Når motorolien ligger i bunden af motoren som på de fleste 4 takt scootere så kaldes det en vådsump.
'.visbilled('1', 'billed1085.jpg', 'motor med vådsump', false, true).'
Nederst i motoren sidder en si som olien passer igennem.
'.visbilled('1', 'billed3740.jpg', '', false, true).'
'.visbilled('1', 'billed3741.jpg', '', false, true).'
En bruger skriver at gevindet på bundproppen hvor der står GY6 i er 29,6 mm i diameter og 1,5 mm i gevindstigning.
'.visbilled('1', 'billed3742.jpg', '', false, true).'
'.visbilled('1', 'billed3739.jpg', '', false, true).'
'.visbilled('1', 'billed3738.jpg', 'motorblokdel med oliepind og bundskrue', false, true).'
Efter sien suges olien videre til oliepumpen hvorefter den fordeler sig ud til både det højre krumtapkugleleje og op til cylinderen.
'.visbilled('1', 'billed1474.jpg', 'motorblok og cylinder olie passage', false, true).'
Motorolien pumpes op langs den ene pindbolt gennem cylinder og topstykke til knastakselholderen.
En pindbolt hedder "stud" på engelsk.
'.visbilled('1', 'billed0584.jpg', 'motorblok og cylinder olie passage', false, true).'
Olien kommer ud langs den øverste venstre pindbolt.
'.visbilled('1', 'billed0010.jpg', 'topstykke', false, true).'
Derefter pumpes olien gennem 2 huller.
'.visbilled('1', 'billed3062.jpg', 'vippearmsakselholder oliehul', false, true).'
Ved hullet længst inde pumpes olien ind i vippearmakslen for indsugningsventilen som har hul i enden så olien kan komme ind.
'.visbilled('1', 'billed3064.jpg', 'udstødning vippearmsaksel', false, true).'
Vippearmsakslen har 2 huller med oliespor hvor olien kan komme ud og lægge sig mellem akslen og vippearmen.
Olien kan komme ud gennem 2 huller i vippearmen.
Udskæringen på den tykke ende af akslen gør at akslens 2 oliespors huller kommer til at vende modsat at de 2 huller som er på vippearmen.
'.visbilled('1', 'billed3063.jpg', 'udstødning vippearmsaksel og vippearm', false, true).'
Olien kan også komme ud af et anden hul øverst på vippearmsakselholderen hvor der er en skrå rille.
Her kan olien komme ud og smørre knasten på knastakselen til udstødningsventilen.
'.visbilled('1', 'billed3150.jpg', 'vippearmsakselholder indefra', false, true).'
Olien kan så falde ned og smørre den nederste vippearmsaksel til udstødningsventilen som har en solid aksel uden nogle oliespor eller huller i.
'.visbilled('1', 'billed3151.jpg', 'vippearmsakselholder indefra', false, true).'

Her ses oliens rejse fra bunden af motoren gennem oliesien til oliepumpen og videre til krumtaplejer og op langs den ene pindbolt gennem cylinder og topstykke til knastakselholderen.
Når olien er pumpet op til ventilerne kan den løbe ned ved knastkæden tilbage til bunden af motoren.
Noget af olien kommer ud ved plejlstangen og plasker op på cylindervægen.
'.visbilled('1', 'billed0585.jpg', 'olie passage', false, true).'
Her ses oliens rejse på en knallert med gear.
På denne model pumpes olien ind gennem krumtapakslen.
'.visbilled('1', 'billed2918.jpg', 'olie passage', false, true).'

Her ses nogen adskilte oliepumper.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3810.jpg', array('Kymco Agility motor', 'miderste motorblok del med oliepumpe'))
   ,galleri('highslide', '', 'billed3811.jpg', array('Kymco Agility motor', 'miderste motorblok del med oliepumpe'))
   ,galleri('highslide', '', 'billed3796.jpg', array('Kymco Agility motor', 'oliepumpe aksel møtrik tandhjul'))
   ,galleri('highslide', '', 'billed3795.jpg', array('Kymco Agility motor', 'oliepumpetandhjul'))
   ,galleri('highslide', '', 'billed3797.jpg', array('Kymco Agility motor', 'oliepumpetandhjul er tager af metalholder'))
))
.'
'.visbilled('1', 'billed1208.jpg', 'olie pumpe adskilt', false, true).'
'.visbilled('1', 'billed0022.jpg', 'splittet olie pumpe', false, true).'
'.visbilled('1', 'billed2716.jpg', 'olie pumpe', false, true).'
'

,'
oliefilter
' => '
Jeg kender ikke nogen 4 takt 50 cm³ med oliefilter.
Der sidder ofte kun en oliesi i bunden af motoren.

Her ses oliefilteret (nummer 26) på en PGO T-Rex 125 cm³.
'.visbilled('1', 'billed2485.jpg', 'PGO T-Rex CP125 oliefilter', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
