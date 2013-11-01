<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "sekundært luft indsugnings system - Luftfilter og udstødning";
$overskrift = "sekundært luft indsugnings system - Luftfilter og udstødning";
$metadescription = "tilføjer ekstra luft til udstødningsgasserne før de når katalysatoren som hjælper katalysatoren med at omdanne gasserne til mindre skadelige gasser";

$databasecenter = array(

'
sekundært luft indsugnings system
' => '
På nogle scootere findes et sekundært luft indsugnings system.
På engelsk kaldes det pulse secondary air supply (PAIR) system.

Systemet findes primært (eller måske kun) på scootere med katalysator i udstødningen.

Systemet tilføjer ekstra luft til udstødningsgasserne før de når katalysatoren.
Den ekstra luft hjælper katalysatoren med at brænde uforbrændt benzin i udstødningsgasserne.
HC (benzin) laves i katalysatoren om til '.kemiskformel('CO2').' (kuldioxid) og '.kemiskformel('H2O').' (vand) som betragtes som mindre skadelige.

Her ses et sekundært luft indsugnings system.
'.visbilled('1', 'billed1041.jpg', 'sekundært luftfilter', false, true).'
Der opstår vakuum ved udstødningens forrør på grund af udstødningens opbygning.
Udstødningen er lavet med rør af forskellige tykkelse og længde for at opnå dette vakuum der både hjælpe med at få luft ind gennem reed valven men også at suge udstødningsgasserne ud af cylinderen når udstødnings ventilen åbner.

Når der opstår vakuum i udstødningens forrør så åbner reed valven og der suges frisk luft ind i forrøret gennem det sekundære luftfilter.
'.visbilled('1', 'billed1040.jpg', 'sekundært luftfilter', false, true).'
Når der opstår tryk i udstødningens forrør så vil reed valven lukke så udstødningsgasserne ikke kan komme ud til det sekundære luftfilter.
'.visbilled('1', 'billed1043.jpg', 'sekundært luftfilter', false, true).'
Her ses det sekundære luftfilter med air injector cut off valve.
Den kaldes også PAIR control valve eller pulse secondary air injection control valve.
'.visbilled('1', 'billed3105.jpg', 'sekundært luftfilter', false, true).'
'.visbilled('1', 'billed0499.jpg', 'sekundært luftfilter', false, true).'
Kommer man kørende og pludseligt giver slip på gashåndtaget så vil der opstå et kraftigt vakuum i indsugningsstudsen og vakuumslangen til "air injection cutoff valve".
Vakuumet vil lukke for det sekundære luftfilter så luften ikke kan komme gennem de 2 store slanger på det sekundære luftfilter.
På den måde tilføjes der ikke luft til udstødningsgasserne ved deacceleration som ellers ville kunne give knald lyde fra udstødningen.
'.visbilled('1', 'billed1042.jpg', 'sekundært luftfilter', false, true).'
Reed valven er en ensretter så der kun kan komme luft ind men ikke ud.
'.visbilled('1', 'billed0501.jpg', 'ventildæksel', false, true).'
'.visbilled('1', 'billed0538.jpg', 'ventildæksel reed valve', false, true).'
Her er reedvalven taget ud.
'.visbilled('1', 'billed0539.jpg', 'ventildæksel reed valve', false, true).'
Her ses reed valven.
Den kaldes også PAIR check valve eller pulse secondary air injection check valve.
'.visbilled('1', 'billed0540.jpg', 'reed valve', false, true).'
Den bøjede metalplade stopper reed valvens tynde plade så den ikke kan bukke for meget.
'.visbilled('1', 'billed0541.jpg', 'reed valve', false, true).'
Luften suges ind gennem hullet her til udstødningskanalen hvor luften blandes med udstødningsgasserne lige efter udstødningsventilen.
'.visbilled('1', 'billed0502.jpg', 'hul som går ind til udstødningsgasserne lige efter udstødningsventilen', false, true).'
Her ses udstødningsporten hvor luften blandes med udstødningsgasserne.
'.visbilled('1', 'billed0647.jpg', 'topstykke udstødningsport', false, true).'
Her ses et sekundært luft indsugnings system på en Sym motor.
'.visbilled('1', 'billed1205.jpg', 'sekundært luftindsugning på sym', false, true).'
Hes ses en såkaldt frisklufsenhed til en Giantco scooter.
'.visbilled('1', 'billed2983.jpg', 'giantco friskluftsenhed', false, true).'
Friskluftsenheden ser ud til at indeholde reedvalven og en air cut off valve men ikke noget luftfilter.
Da friskluftsenheden indeholder reedvalven sidder der ikke nogen reedvalve på topstykkedækslet.

Her har brugeren "Barden" tegnet hvordan delene er forbundet på en Giantco Sprint.
'.visbilled('1', 'billed3238.jpg', 'giantco sprint vakuumslange forbindelse mellem benzinhane indsugningsstuds reedvalve luftfilter topstykke', false, true).'
Her ses en PGO hvor et rør på udstødningens forrør er forbundet til reedvalven nedefra, så en kort slange til et luftfilter og endnu en slange som sidder på variatorhuset.
'.visbilled('1', 'billed3239.jpg', 'pgo sekundært luftindsugning', false, true).'
'.visbilled('1', 'billed3359.jpg', 'pgo sekundært luftindsugning', false, true).'
Luften suges ind gennem dette hul under variatordækslet, gennem luftfilteret, gennem reedvalven og ind i udstødningen når der er vakuum i forrøret.
'.visbilled('1', 'billed3240.jpg', 'pgo sekundært luftindsugning hul i variatordæksel', false, true).'
På nogle scootere sidder reed valven på udstødningens forrør.
'.visbilled('1', 'billed0610.jpg', 'reed valve ved udstødning', false, true).'
'.visbilled('1', 'billed0805.jpg', 'reed valve', false, true).'

'.visbilled('1', 'billed3907.jpg', 'under sædeboks på PGO G-Max sekundært luftfilter og reedvalve over cylinder på motor', false, true).'
'.visbilled('1', 'billed3880.jpg', 'sekundært luftfilter på motor', false, true).'
'.visbilled('1', 'billed3882.jpg', 'sekundært luftfilter på motor', false, true).'
Her ses det sekundære luftfilter, slangen til reed valve, røret videre til forrøret helt oppe ved cylinderen.
'.visbilled('1', 'billed3881.jpg', 'sekundært luftfilter på motor', false, true).'
'.visbilled('1', 'billed3883.jpg', 'reed valve mellem sekundært luftfilter og udstødning', false, true).'
'.visbilled('1', 'billed3876.jpg', 'reed valve mellem sekundært luftfilter og udstødning', false, true).'
'.visbilled('1', 'billed3877.jpg', 'adskildt reed valve', false, true).'

'.visbilled('1', 'billed3878.jpg', 'sekundært luftfilter', false, true).'
Dette sekundære luftfilter kan skilles ad.
'.visbilled('1', 'billed3879.jpg', 'åbnet sekundært luftfilter', false, true).'

På de scootere hvor reed valven sidder på forrøret er hullet i topstykket lukket også er der ikke noget bøjet rør aller forrest på motoren.
'.visbilled('1', 'billed0751.jpg', 'lukket hul i topstykke', false, true).'
'.visbilled('1', 'billed2990.jpg', 'lukket hul i topstykke', false, true).'

På denne scooter (Leone/Keeway Swan 2 takt) er der svejset et lille rør på udstødningsrøret.
'.visbilled('1', 'billed3011.jpg', 'leone swan motor nede fra udstødning', false, true).'
På det lille rør sidder en slange som går op til reedvalven.
'.visbilled('1', 'billed3007.jpg', 'leone swan motor nede fra', false, true).'
Reedvalven ses øverst til højre.
Jeg ved så ikke hvor den har videre forbindelse til.
'.visbilled('1', 'billed3008.jpg', 'leone swan motor nede fra tændrørshætte', false, true).'

På nogen scootere kaldes systemet for PAIR (Pulse secondary AIR injection).
'.visbilled('1', 'billed2844.jpg', 'pair check valve pair control valve tegning', false, true).'
På denne tegning ser det ud til at det sekundære luftfilteret sidder i luftfilter kassen som PAIR control valven får sin luft fra også indeholder den vel ikke noget filter.
'.visbilled('1', 'billed2845.jpg', 'pair check valve pair control valve tegning', false, true).'

'.afsnit('slangerne','
Ifølge servicemanualen til Kymco Super 8 4T er det meget vigtigt at slange længden er den samme ved eventuelt udskiftning.
Jeg tror det er den tykke slange som har et lille smalt stykke slange limet på hvor længden er vigtig.
Den tykke slangen som suger frisk luft ind til det sekundære luftfilter har et kort stykke slange limet på som er halvt så tykt som resten af slangen.
Jeg ved ikke hvorfor den har fået limet en mindre slange på for det må jo mindske luft indsugningen.
').'
Her ses det sekundære indsugningssystem som findes på Kymco 4 takt modeller.
'.visbilled('1', 'billed0495.jpg', 'Sekundært luftfilter system kymco 4 takt', false, true).'
Her ses det sekundære indsugningssystem som findes på Kymco 2 takt modeller.
'.visbilled('1', 'billed3873.jpg', 'Sekundært luftfilter system kymco 2 takt', false, true).'
Kymco kalder systemet for clean air system eller Secondary Air Suction System (SASS).
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
