<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "elektriske scootere";
$overskrift = "elektriske scootere";
$metadescription = "oversigt med elektriske scootere som findes i danmark";

$databasecenter = array(

'
modeller med elektrisk motor
' => ''
.galleriholder(array(
    galleri('scooter', 'altoma2b.php', 'a2bmetro', 'A2B Metro')
   ,galleri('scooter', 'altomamp.php', 'ampvelocity', 'Amp Velocity')
   ,galleri('scooter', 'altomamp.php', 'amporsted', 'Amp Ørsted')
   ,galleri('scooter', 'altombaotian.php', 'baotianbttdm5003', 'Baotian BTTDM500-3')
   ,galleri('scooter', 'altometon.php', 'etonemo', 'E-ton e-mo')
   ,galleri('scooter', 'altomearthenergy.php', 'earthenergycity', 'Earthenergy City')
   ,galleri('scooter', 'altomearthenergy.php', 'earthenergyemma', 'Earthenergy Emma')
   ,galleri('scooter', 'altomearthenergy.php', 'earthenergyitalia', 'Earthenergy Italia')
   ,galleri('scooter', 'altomearthenergy.php', 'earthenergyretro', 'Earthenergy Retro')
   ,galleri('scooter', 'altomearthenergy.php', 'earthenergywhisper', 'Earthenergy Whisper')
   ,galleri('scooter', 'altomebretti.php', 'ebretti', 'Ebretti 518')
   ,galleri('scooter', 'altomego.php', 'egohelio', 'Ego Helio')
   ,galleri('scooter', 'altomemax.php', 'emax80l', 'E-max 80L')
   ,galleri('scooter', 'altomemax.php', 'emax90s', 'E-max 90S')
   ,galleri('scooter', 'altomemax.php', 'emax110s', 'E-max 110S')
   ,galleri('scooter', 'altomemax.php', 'emax110sd', 'E-max 110S-D')
   ,galleri('scooter', 'altomemax.php', 'emax120l', 'E-max 120L')
   ,galleri('scooter', 'altomemax.php', 'emax120s', 'E-max 120S')
   ,galleri('scooter', 'altomemax.php', 'emax120sd', 'E-max 120S-D')
   ,galleri('scooter', 'altomevt.php', 'evt168', 'EVT 168')
   ,galleri('scooter', 'altomevt.php', 'evt3w', 'EVT 3w')
   ,galleri('scooter', 'altomevt.php', 'evt4000e', 'EVT 4000e')
   ,galleri('scooter', 'altomgiantco.php', 'giantcoebuddy', 'Giantco E-Buddy')
   ,galleri('scooter', 'altomgovecs.php', 'govecsgos12', 'Govecs GO! S1.2')
   ,galleri('scooter', 'altomgovecs.php', 'govecsgot12', 'Govecs GO! T1.2')
   ,galleri('scooter', 'altomgovecs.php', 'govecsgos24', 'Govecs GO! S2.4')
   ,galleri('scooter', 'altomkreidler.php', 'kreidlergalacticaelectro', 'Kreidler Galactica Electro')
   ,galleri('scooter', 'altomkreidler.php', 'kreidlerhikeramaze', 'Kreidler Hiker Amaze')
   ,galleri('scooter', 'altomluyuan.php', 'luyuanymo6btla', 'Luyuan YMO-6BTL-A')
   ,galleri('scooter', 'altomlynx.php', 'lynx370', 'Lynx 370')
   ,galleri('scooter', 'altomlynx.php', 'lynx388', 'Lynx 388')
   ,galleri('scooter', 'altomlynx.php', 'lynx3882', 'Lynx 388-2')
   ,galleri('scooter', 'altomlynx.php', 'lynx389', 'Lynx 389')
   ,galleri('scooter', 'altomlynx.php', 'lynx398', 'Lynx 398')
   ,galleri('scooter', 'altomlynx.php', 'lynx690', 'Lynx 690')
   ,galleri('scooter', 'altomnicom.php', 'nicomtdr48k15', 'Nicom TDR48K15')
   ,galleri('scooter', 'altomnordicebike.php', 'nordicebikebutterfly', 'Nordic E-bike Butterfly 18"')
   ,galleri('scooter', 'altomnordicebike.php', 'nordicebikedingdong', 'Nordic E-bike Ding-dong 16"')
   ,galleri('scooter', 'altomnordicebike.php', 'nordicebikef1', 'Nordic E-bike F1 16"')
   ,galleri('scooter', 'altomnordicebike.php', 'nordicebikefast100', 'Nordic E-bike Fast-100 16"')
   ,galleri('scooter', 'altomnordicebike.php', 'nordicebikeleilong', 'Nordic E-bike Leilong 16"')
   ,galleri('scooter', 'altomnordicebike.php', 'nordicebikepig', 'Nordic E-bike Pig 18"')
   ,galleri('scooter', 'altomnordicebike.php', 'nordicebiketravel', 'Nordic E-bike Travel 16"')
   ,galleri('scooter', 'altomnorsjo.php', 'norsjocarrierelectronic', 'norsjö carrier electronic')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotscootelec', 'Peugeot Scoot\'Elec')
   ,galleri('scooter', 'altompgo.php', 'pgopse', 'PGO PSE')
   ,galleri('scooter', 'altomscoopie.php', 'scoopie450w', 'Scoopie 450w')
   ,galleri('scooter', 'altomscoopie.php', 'scoopie500w', 'Scoopie 500w')
   ,galleri('scooter', 'altomscoopie.php', 'scoopie1500w', 'Scoopie 1500w')
   ,galleri('scooter', 'altomscoopie.php', 'scoopieretro64', 'Scoopie Retro 64')
   ,galleri('scooter', 'altomscoopie.php', 'scoopietxd500', 'Scoopie TXD500')
   ,galleri('scooter', 'altomscoopie.php', 'scoopietxd800', 'Scoopie TXD800')
   ,galleri('scooter', 'altomswap.php', 'swap2', 'Swap 2')
   ,galleri('scooter', 'altomswap.php', 'swap3', 'Swap 3')
   ,galleri('scooter', 'altomtantepaula.php', 'tantepaulaferdinandii', 'Tante Paula Ferdinand II')
   ,galleri('scooter', 'altomtantepaula.php', 'tantepaulamaximilianii', 'Tante Paula Maximilian II')
   ,galleri('scooter', 'altomtexas.php', 'texaswhisper', 'Texas Whisper')
   ,galleri('scooter', 'altomvarg.php', 'vargbergen', 'Varg Bergen')
   ,galleri('scooter', 'altomvarg.php', 'vargnora', 'Varg Nora')
   ,galleri('scooter', 'altomvarg.php', 'vargoslo', 'Varg Oslo')
   ,galleri('scooter', 'altomyamaha.php', 'yamahaec03', 'Yamaha EC-03')
   ,galleri('scooter', 'altomandre.php', 'benmallb852', 'Benmal LB-852')
   ,galleri('scooter', 'altomandre.php', 'tisongtm300', 'Tisong TM-300')
   ,galleri('scooter', 'altomandre.php', 'zeroe', 'zero-e')
))

,'
modeller med elektrisk motor og 4 takt motor
' => ''
.galleriholder(array(
    galleri('scooter', 'altomagm.php', 'agmhybrid', 'AGM Hybrid')
   ,galleri('scooter', 'altomandre.php', 'vekenvkm50', 'Veken VK-M50')
))

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
