<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "topstykke og cylinder - 4 takt motor";
$overskrift = "topstykke og cylinder - 4 takt motor";
$metadescription = "forklaring af topstykke og cylinder der sidder på en 4 takt motor på en scooter";

$databasecenter = array(

'
afmontering af topstykke og cylinder
' => '
Fjern karburator, indsugningsstuds, udstødning og blæserskjolde omkring motoren.
'.visbilled('1', 'billed0527.jpg', 'motor', false, true).'
Læg mærke til UP mærket og pilen på isolatorstykket som viser hvilken vej den skal vende.
'.visbilled('1', 'billed0528.jpg', 'isolator mellem indsugningsstuds og cylinder', false, true).'
Isolatorstykket skulle være der for at varmen fra topstykket ikke så meget overføres til indsugningsstudsen og karburatoren så benzinen fordamper for tidligt.

Fjern knastkædestrammeren (løsn den øverste skrue først mens knastkædestrammeren sidder på da den ellers kan være svær at få af).
Fjern gummilisten på topstykket.
Fjern ventildækslet.
'.visbilled('1', 'billed0571.jpg', 'motor uden blæserskjold', false, true).'
Drej knastakslen ved at træde på kickstarteren så det store hul på tandhjulet vender væk fra motoren og de 2 små huller/mærker er parralelle med topstykkets kant.
'.visbilled('1', 'billed0572.jpg', 'knastaksel tandhjuls huller og mærker', false, true).'
Fjern de 2 skruer i siden af topstykket.
'.visbilled('1', 'billed0580.jpg', 'topstykke skruer', false, true).'
Fjern de 4 møtrikker på knastakselholderen på kryds lidt efter lidt så trykket lettes lidt efter lidt på alle møtrikkerne.
Under hver møtrik er en skive.
'.visbilled('1', 'billed0573.jpg', 'knastakselholder ventiler', false, true).'
Fjern knastakselholderen.
Læg mærke til at der står EX nederst som skal vende ned mod udstødningsventilen ved montering.
'.visbilled('1', 'billed0574.jpg', 'knastakselholder afmonter', false, true).'
Her ses knastakslen og 2 kuglelejer.
'.visbilled('1', 'billed0575.jpg', 'knastaksel ventiler', false, true).'
Indersiden af knastakselholderen skal passe med kuglelejerne på knastakslen når den monteres igen.
'.visbilled('1', 'billed0599.jpg', 'knastakselholder', false, true).'
Set fra siden kan man se 2 vippearms aksler.
Vippearms akslerne kan drejes med en stor flad skruetrækker så de sidder rigtigt når knastakselholderen skal monteres på topstykket.
'.visbilled('1', 'billed0576.jpg', 'knastakselholder pins', false, true).'
Der er gevind i vippearms akslerne så de kan tages ud med en bolt hvis de sidder fast.
'.visbilled('1', 'billed3056.jpg', 'knastakselholder', false, true).'
Her ses 2 vippearms aksler og 2 vippearme.
'.visbilled('1', 'billed3065.jpg', 'knastaksler og vippearme', false, true).'
'.visbilled('1', 'billed1791.jpg', 'vippearm aksler', false, true).'
Her ses skruen som trykker ned på ventilerne og som holder fast på vippearmen med en møtrik.
'.visbilled('1', 'billed3470.jpg', 'vippearm aksle justeringsskrue', false, true).'
Her ses 2 bøsninger som sørger for at delene sidder rigtigt sammen.
'.visbilled('1', 'billed0578.jpg', 'bøsninger', false, true).'
Fjern de 2 bøsninger.
Fjern kæden fra tandhjulet og lad kæden hænge ned fra cylinderkanten og fjern knastakslen.
'.visbilled('1', 'billed0601.jpg', 'knastaksel', false, true).'
'.visbilled('1', 'billed0579.jpg', 'topstykke', false, true).'
På min scooter sidder rammer stellet topstykket og pindboltene til indsugningsstudsen når man prøver at tage topstykket af.
Derfor skal man (på min scooter i hvert fald) skrue pindboltene af før man kan tage topstykket af.
'.visbilled('1', 'billed0581.jpg', 'cylinder og topstykke adskilt', false, true).'
På min scooter skal man desuden tage scooteren ned fra centerstøttebenet og presse ned på bagenden af scooteren før man lige kan få topstykket forbi stellet.
'.visbilled('1', 'billed3104.jpg', 'topstykke ved afmontering', false, true).'
Pindboltene kan fjernes ved at spænde to møtrikker sammen på gevindet.
'.visbilled('1', 'billed3034.jpg', 'topstykke bolt', false, true).'
Så kan pindbolten skrues af med den nederste møtrik.
'.visbilled('1', 'billed3035.jpg', 'topstykke bolt', false, true).'
Fjern topstykket.
'.visbilled('1', 'billed3042.jpg', 'topstykke', false, true).'
Fjern pakningen.
'.visbilled('1', 'billed0582.jpg', 'cylinder og stempel', false, true).'
Fjern de 2 bøsninger.
Fjern det nederste strammerblad under kæden.
'.visbilled('1', 'billed3036.jpg', 'cylinder på motor', false, true).'
Fjern cylinderen.
'.visbilled('1', 'billed0583.jpg', 'motorblok og cylinder', false, true).'
Her ses slidet i cylinderen.
Den nederste del af cylinderen bliver ikke slidt af stempelringene.
'.visbilled('1', 'billed3149.jpg', 'cylinder inderside bund', false, true).'
'.visbilled('1', 'billed3157.jpg', 'cylinder inderside top', false, true).'
'.visbilled('1', 'billed3037.jpg', 'cylinder strammerblad', false, true).'
Put en ren klud omkring plejlstangen så den dækker hullet i motorblokken.
'.visbilled('1', 'billed3041.jpg', 'stempel og klud i hul', false, true).'

'.afsnit('angående montering', '
Knastkædestrammeren skal først monteres efter kæden er sat på tandhjulet og knastakselholderen igen er monteret.
Skruen på toppen af knastkædestrammeren skal fjernes også skal knastkædestrammeren nulstilles.
Fjederen og den øverste skrue skal monteres som det sidste.
'.ahref('motor_knastkedestrammer.php', 'Knastkædestrammer').'
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
