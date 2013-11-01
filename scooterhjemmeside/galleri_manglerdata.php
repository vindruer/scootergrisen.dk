<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "galleri for scooter og knallert modeller som mangler data";
$overskrift = "galleri for scooter og knallert modeller som mangler data";
$metadescription = "galleri til mindre kendte scooter/knallert modeller som jeg næsten ikke har noget information om";

$databasecenter = array(

'
introduktion
' => '
På denne galleri side har du en oversigt over modellerne fra '.ahref('manglerdata.php', 'scooter og knallert modeller som mangler data-siden').' som er modeller jeg næsten ikke har noget data på. Nogen af dem har jeg ikke engang billeder på.

Hvis du kan hjælpe med info, manualer, billeder, osv til disse modeller så '.kontaktmig().' gerne eller kom ind og skriv i '.forummet().'.
'

,'
modeller med billede
' => ''
.galleriholder(array(
    galleri('scooter', 'manglerdata.php', 'benelli491gt', 'benelli 491 GT')
   ,galleri('scooter', 'manglerdata.php', 'daelimsfive', 'daelim s-five')
   ,galleri('scooter', 'manglerdata.php', 'fanticchopper', 'fantic chopper')
   ,galleri('scooter', 'manglerdata.php', 'futongft50qt3', 'futong FT50QT-3')
   ,galleri('scooter', 'manglerdata.php', 'huasahs50qt7', 'huasa HS50QT-7')
   ,galleri('scooter', 'manglerdata.php', 'jmstarjsd50qt27', 'jmstar JSD50QT-27')
   ,galleri('scooter', 'manglerdata.php', 'jomanitrogt4', 'joma nitro gt4')
   ,galleri('scooter', 'manglerdata.php', 'kyburzdxp', 'Kyburz DXP')
   ,galleri('scooter', 'manglerdata.php', 'lyrick525', 'lyric K525')
   ,galleri('scooter', 'manglerdata.php', 'mgbdelivery', 'MGB Delivery')
   ,galleri('scooter', 'manglerdata.php', 'qunshenge808', 'Qunsheng E808')
   ,galleri('scooter', 'manglerdata.php', 'rmcspiga', 'RMC spiga')
   ,galleri('scooter', 'manglerdata.php', 'simsonalbatros', 'Simson Albatros')
   ,galleri('scooter', 'manglerdata.php', 'socaflea', 'soca flea 0.5')
   ,galleri('scooter', 'manglerdata.php', 'standardmotoeasyrider', 'standard moto easy rider')
   ,galleri('scooter', 'manglerdata.php', 'thumpstarroadripper', 'Thumpstar Road Ripper')
   ,galleri('scooter', 'manglerdata.php', 'transportel1200combi', 'Transportel 1200 combi')
   ,galleri('scooter', 'manglerdata.php', 'tugger', 'Tugger')
   ,galleri('scooter', 'manglerdata.php', 'xiaofeiluhrtk122', 'xiaofeilu HRTK122-1')
   ,galleri('scooter', 'manglerdata.php', 'yadeaem05', 'yadea em05')
))

,'
modeller uden billede
' => ''
.galleriholder(array(
    galleri('scooter', 'manglerdata.php', '_baotianswitch', 'baotian switch')
   ,galleri('scooter', 'manglerdata.php', '_baotianv4', 'baotian v4')
   ,galleri('scooter', 'manglerdata.php', '_dongfangcrane', 'dong fang crane')
   ,galleri('scooter', 'manglerdata.php', '_eastdragon', 'east dragon')
   ,galleri('scooter', 'manglerdata.php', '_hm', 'HM noget')
   ,galleri('scooter', 'manglerdata.php', '_jensenchopper', 'jensen chopper')
   ,galleri('scooter', 'manglerdata.php', '_jonwayfreedom', 'jonway freedom')
   ,galleri('scooter', 'manglerdata.php', '_macalcity', 'Macal PJ 50 city')
   ,galleri('scooter', 'manglerdata.php', '_pgobubu', 'PGO bubu')
   ,galleri('scooter', 'manglerdata.php', '_sanilisl50qt5', 'sanili SL50QT-5')
   ,galleri('scooter', 'manglerdata.php', '_sanilisl50qt8', 'sanili SL50QT-8')
   ,galleri('scooter', 'manglerdata.php', '_tobiliner50tq', 'TobiLiner 50TQ')
   ,galleri('scooter', 'manglerdata.php', '_xingyuedm82', 'Xingyue DM82')
   ,galleri('scooter', 'manglerdata.php', '_yadeaouhu', 'yadea OUHU')
   ,galleri('scooter', 'manglerdata.php', '_yibensport', 'Danscooter Yiben Sport')
))

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
