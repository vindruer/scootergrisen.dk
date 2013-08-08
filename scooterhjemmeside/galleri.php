<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$setup['nogetikon']               = 'ikoner/ikon_galleri.png';

$title = "galleri";
$overskrift = "galleri";
$metadescription = "oversigt af scootermærker og modeller hvor der vises små billeder med navn, pris, motortype og hastighed";

$databasecenter = array(

'
scootermærker
' => ''
.galleriholder(array(
    galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'a2b', 'logo_a2b', 'a2b')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'adly', 'logo_adly', 'adly')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'agm', 'logo_agm', 'agm')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'amp',  'logo_amp', 'amp')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'apollo',  'logo_apollo', 'apollo')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'aprilia',  'logo_aprilia', 'aprilia')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'atala',  'logo_atala', 'atala')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'avanti',  'logo_avanti', 'avanti')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'baotian',  'logo_baotian', 'baotian')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'beta',  'logo_beta', 'beta')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'busetto',  'logo_busetto', 'busetto')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'cpi',  'logo_cpi', 'cpi')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'derbi',  'logo_derbi', 'derbi')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'earthenergy',  'logo_earthenergy', 'earthenergy')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'ebretti',  'logo_ebretti', 'ebretti')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'ego',  'logo_ego', 'ego')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'emax',  'logo_emax', 'e-max')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'evt',  'logo_evt', 'evt')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'e_ton',  'logo_eton', 'e-ton')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'generic',  'logo_generic', 'generic')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'giantco',  'logo_giantco', 'giantco')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'gilera',  'logo_gilera', 'gilera')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'govecs',  'logo_govecs', 'govecs')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'hero_majestic',  'logo_heromajestic', 'hero majestic')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'honda',  'logo_honda', 'honda')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'italjet',  'logo_italjet', 'italjet')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'jincheng',  'logo_jincheng', 'jincheng')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'jinlun',  'logo_jinlun', 'jinlun')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'keeway',  'logo_keeway', 'keeway')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'kinroad',  'logo_kinroad', 'kinroad')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'kreidler',  'logo_kreidler', 'kreidler')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'kymco',  'logo_kymco', 'kymco')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'lifan',  'logo_lifan', 'lifan')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'longjia',  'logo_longjia', 'longjia')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'luyuan',  'logo_luyuan', 'luyuan')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'lynx',  'logo_lynx', 'lynx')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'malaguti',  'logo_malaguti', 'malaguti')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'motor_mania',  'logo_motormania', 'motor mania')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'nicom',  'logo_nicom', 'nicom')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'nordic_e_bike',  'logo_nordicebike', 'nordic e-bike')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'norsjo',  'logo_norsjo', 'norsjö')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'peugeot',  'logo_peugeot', 'peugeot')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'pgo',  'logo_pgo', 'PGO')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'piaggio',  'logo_piaggio', 'piaggio')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'puch',  'logo_puch', 'puch')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'qingqi',  'logo_qingqi', 'qingqi')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'regal_raptor',  'logo_regalraptor', 'regal raptor')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'rieju',  'logo_rieju', 'rieju')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'romet',  'logo_romet', 'romet')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'sachs',  'logo_sachs', 'sachs')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'secma',  'logo_secma', 'secma')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'scoopie',  'logo_scoopie', 'scoopie')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'skyteam',  'logo_skyteam', 'skyteam')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'solex',  'logo_solex', 'solex')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'suzuki',  'logo_suzuki', 'suzuki')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'swap',  'logo_swap', 'swap')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'sym',  'logo_sym', 'sym')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'tante_paula',  'logo_tantepaula', 'tante paula')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'texas',  'logo_texas', 'texas')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'tgb',  'logo_tgb', 'tgb')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'tms',  'logo_tms', 'tms')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'tomos',  'logo_tomos', 'tomos')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'trilet',  'logo_trilet', 'trilet')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'varg',  'logo_varg', 'varg')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'vespa',  'logo_vespa', 'vespa')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'xingyue',  'logo_xingyue', 'xingyue')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'yamaha',  'logo_yamaha', 'yamaha')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'yamasaki',  'logo_yamasaki', 'yamasaki')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'yiben',  'logo_yiben', 'yiben')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'zhenhua',  'logo_zhenhua', 'zhenhua')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'zongshen',  'logo_zongshen', 'zongshen')
   ,galleri('logo', basename($_SERVER['SCRIPT_NAME']) . '#' . 'andre_merker',  'logo_andre', 'andre mærker')
))

,'
a2b
' => ''
.galleriholder(array(
    galleri('scooter', 'altoma2b.php', 'a2bmetro', 'A2B Metro')
))

,'
adly
' => ''
.galleriholder(array(
    galleri('scooter', 'altomadly.php', 'adlybaboon', 'Adly Baboon')
   ,galleri('scooter', 'altomadly.php', 'adlycat', 'Adly Cat')
   ,galleri('scooter', 'altomadly.php', 'adlygazelle', 'Adly Gazelle')
   ,galleri('scooter', 'altomadly.php', 'adlyjet', 'Adly Jet')
))

,'
agm
' => ''
.galleriholder(array(
    galleri('scooter', 'altomagm.php', 'agmbella', 'AGM Bella')
   ,galleri('scooter', 'altomagm.php', 'agmbellaextra', 'AGM Bella Extra')
   ,galleri('scooter', 'altomagm.php', 'agmbellagt', 'AGM Bella GT')
   ,galleri('scooter', 'altomagm.php', 'agmbellapimp', 'AGM Bella Pimp')
   ,galleri('scooter', 'altomagm.php', 'agmclassic', 'AGM Classic')
   ,galleri('scooter', 'altomagm.php', 'agmfashion', 'AGM Fashion')
   ,galleri('scooter', 'altomagm.php', 'agmhybrid', 'AGM Hybrid')
   ,galleri('scooter', 'altomagm.php', 'agmnano', 'AGM Nano')
   ,galleri('scooter', 'altomagm.php', 'agmvintage', 'AGM Vintage')
   ,galleri('scooter', 'altomagm.php', 'agmvx', 'AGM VX')
))

,'
amp
' => ''
.galleriholder(array(
    galleri('scooter', 'altomamp.php', 'ampvelocity', 'Amp Velocity')
   ,galleri('scooter', 'altomamp.php', 'amporsted', 'Amp Ørsted')
))

,'
apollo
' => ''
.galleriholder(array(
    galleri('scooter', 'altomapollo.php', 'apollo29', 'Apollo Orion/Aragon 29')
   ,galleri('scooter', 'altomapollo.php', 'apollo30', 'Apollo Orion/Aragon 30')
   ,galleri('scooter', 'altomapollo.php', 'apollo36', 'Apollo Orion/Aragon 36')
))

,'
aprilia
' => ''
.galleriholder(array(
    galleri('scooter', 'altomaprilia.php', 'apriliaclassic', 'Aprilia Classic')
   ,galleri('scooter', 'altomaprilia.php', 'apriliahabana', 'Aprilia Habana')
   ,galleri('scooter', 'altomaprilia.php', 'apriliamojito', 'Aprilia Mojito')
   ,galleri('scooter', 'altomaprilia.php', 'apriliapegaso', 'Aprilia Pegaso')
   ,galleri('scooter', 'altomaprilia.php', 'apriliars', 'Aprilia RS')
   ,galleri('scooter', 'altomaprilia.php', 'apriliarally', 'Aprilia Rally')
   ,galleri('scooter', 'altomaprilia.php', 'apriliarx', 'Aprilia RX')
   ,galleri('scooter', 'altomaprilia.php', 'apriliascarabeo4t', 'Aprilia Scarabeo 4T')
   ,galleri('scooter', 'altomaprilia.php', 'apriliasonic', 'Aprilia Sonic')
   ,galleri('scooter', 'altomaprilia.php', 'apriliasportcityone', 'Aprilia SportCity One')
   ,galleri('scooter', 'altomaprilia.php', 'apriliasr', 'Aprilia SR')
   ,galleri('scooter', 'altomaprilia.php', 'apriliasrditech', 'Aprilia SR Ditech')
   ,galleri('scooter', 'altomaprilia.php', 'apriliasx', 'Aprilia SX')
))

,'
atala
' => ''
.galleriholder(array(
    galleri('scooter', 'altomatala.php', 'atalahacker', 'Atala Hacker')
))

,'
avanti
' => ''
.galleriholder(array(
    galleri('scooter', 'altomavanti.php', 'avantibt49qt9n', 'avanti BT49QT-9N')
   ,galleri('scooter', 'altomavanti.php', 'avanticlassicsport', 'avanti Classic Sport')
   ,galleri('scooter', 'altomavanti.php', 'avantieagle', 'avanti Eagle')
   ,galleri('scooter', 'altomavanti.php', 'avantinostalgi', 'avanti Nostalgi')
   ,galleri('scooter', 'altomavanti.php', 'avantirocky', 'avanti Rocky')
   ,galleri('scooter', 'altomavanti.php', 'avantisport', 'avanti Sport')
   ,galleri('scooter', 'altomavanti.php', 'avantiwolf', 'avanti Wolf')
))

,'
baotian
' => ''
.galleriholder(array(
    galleri('scooter', 'altombaotian.php', 'baotianbt49gy1', 'Baotian BT49GY-1 Street Fighter')
   ,galleri('scooter', 'altombaotian.php', 'baotianeagle', 'Baotian Eagle')
   ,galleri('scooter', 'altombaotian.php', 'baotianf3', 'Baotian F3')
   ,galleri('scooter', 'altombaotian.php', 'baotiansport', 'Baotian Sport')
   ,galleri('scooter', 'altombaotian.php', 'baotianbt49py2b', 'Baotian BT49PY-2B')
   ,galleri('scooter', 'altombaotian.php', 'baotianbt49qt8', 'Baotian BT49QT-8')
   ,galleri('scooter', 'altombaotian.php', 'baotianbttdm5003', 'Baotian BTTDM500-3')
   ,galleri('scooter', 'altombaotian.php', 'baotiansupermoto', 'Baotian Supermoto')
   ,galleri('scooter', 'altombaotian.php', 'baotianclassic', 'Baotian Classic')
   ,galleri('scooter', 'altombaotian.php', 'baotianbt49qt10', 'Baotian BT49QT10')
   ,galleri('scooter', 'altombaotian.php', 'baotianretro', 'Baotian Retro')
   ,galleri('scooter', 'altombaotian.php', 'baotianrebel', 'Baotian Rebel')
   ,galleri('scooter', 'altombaotian.php', 'baotianrocky', 'Baotian Rocky')
   ,galleri('scooter', 'altombaotian.php', 'baotiancity', 'Baotian City')
   ,galleri('scooter', 'altombaotian.php', 'baotiandiablo', 'Baotian Diablo')
   ,galleri('scooter', 'altombaotian.php', 'baotianvictoria', 'Baotian Victoria')
))

,'
busetto
' => ''
.galleriholder(array(
    galleri('scooter', 'altombusetto.php', 'busettoecc800', 'Busetto ECC-800')
))

,'
beta
' => ''
.galleriholder(array(
    galleri('scooter', 'altombeta.php', 'betaarkac', 'Beta Ark AC')
   ,galleri('scooter', 'altombeta.php', 'betaarklc', 'Beta Ark LC')
   ,galleri('scooter', 'altombeta.php', 'betachrono', 'Beta Chrono')
   ,galleri('scooter', 'altombeta.php', 'betarrenduro', 'Beta RR Enduro')
   ,galleri('scooter', 'altombeta.php', 'betarrmotard', 'Beta RR Motard')
   ,galleri('scooter', 'altombeta.php', 'betaquadra', 'Beta Quadra')
))

,'
cpi
' => ''
.galleriholder(array(
    galleri('scooter', 'altomcpi.php', 'cpiaragon', 'CPI Aragon')
   ,galleri('scooter', 'altomcpi.php', 'cpiformula', 'CPI Formula')
   ,galleri('scooter', 'altomcpi.php', 'cpigtr', 'CPI GTR')
   ,galleri('scooter', 'altomcpi.php', 'cpihussar', 'CPI Hussar')
   ,galleri('scooter', 'altomcpi.php', 'cpioliver', 'CPI Oliver')
   ,galleri('scooter', 'altomcpi.php', 'cpiolivercity', 'CPI Oliver City')
   ,galleri('scooter', 'altomcpi.php', 'cpipopcorn', 'CPI Popcorn')
   ,galleri('scooter', 'altomcpi.php', 'cpisupercross', 'CPI Supercross')
   ,galleri('scooter', 'altomcpi.php', 'cpisupermoto', 'CPI Supermoto')
))

,'
derbi
' => ''
.galleriholder(array(
    galleri('scooter', 'altomderbi.php', 'derbiatlantis', 'Derbi Atlantis')
   ,galleri('scooter', 'altomderbi.php', 'derbigp1', 'Derbi GP1')
   ,galleri('scooter', 'altomderbi.php', 'derbihunter', 'Derbi Hunter')
   ,galleri('scooter', 'altomderbi.php', 'derbipredator', 'Derbi Predator')
   ,galleri('scooter', 'altomderbi.php', 'derbisendar', 'Derbi Senda R')
   ,galleri('scooter', 'altomderbi.php', 'derbisendasm', 'Derbi Senda SM')
   ,galleri('scooter', 'altomderbi.php', 'derbivamos', 'Derbi Vamos')
))

,'
e-ton
' => ''
.galleriholder(array(
    galleri('scooter', 'altometon.php', 'etonemo', 'E-ton e-mo')
))

,'
earthenergy
' => ''
.galleriholder(array(
    galleri('scooter', 'altomearthenergy.php', 'earthenergycity', 'Earthenergy City')
   ,galleri('scooter', 'altomearthenergy.php', 'earthenergyemma', 'Earthenergy Emma')
   ,galleri('scooter', 'altomearthenergy.php', 'earthenergyitalia', 'Earthenergy Italia')
   ,galleri('scooter', 'altomearthenergy.php', 'earthenergyretro', 'Earthenergy Retro')
   ,galleri('scooter', 'altomearthenergy.php', 'earthenergywhisper', 'Earthenergy Whisper')
))

,'
ebretti
' => ''
.galleriholder(array(
    galleri('scooter', 'altomebretti.php', 'ebretti', 'Ebretti 518')
))

,'
ego
' => ''
.galleriholder(array(
    galleri('scooter', 'altomego.php', 'egohelio', 'Ego Helio')
))

,'
emax
' => ''
.galleriholder(array(
    galleri('scooter', 'altomemax.php', 'emax80l', 'E-max 80L')
   ,galleri('scooter', 'altomemax.php', 'emax90s', 'E-max 90S')
   ,galleri('scooter', 'altomemax.php', 'emax110s', 'E-max 110S')
   ,galleri('scooter', 'altomemax.php', 'emax110sd', 'E-max 110S-D')
   ,galleri('scooter', 'altomemax.php', 'emax120l', 'E-max 120L')
   ,galleri('scooter', 'altomemax.php', 'emax120s', 'E-max 120S')
   ,galleri('scooter', 'altomemax.php', 'emax120sd', 'E-max 120S-D')
))

,'
evt
' => ''
.galleriholder(array(
    galleri('scooter', 'altomevt.php', 'evt168', 'EVT 168')
   ,galleri('scooter', 'altomevt.php', 'evt3w', 'EVT 3w')
   ,galleri('scooter', 'altomevt.php', 'evt4000e', 'EVT 4000e')
))

,'
generic
' => ''
.galleriholder(array(
    galleri('scooter', 'altomgeneric.php', 'genericcracker', 'Generic Cracker')
   ,galleri('scooter', 'altomgeneric.php', 'genericideo', 'Generic Ideo')
   ,galleri('scooter', 'altomgeneric.php', 'genericonyx', 'Generic Onyx')
   ,galleri('scooter', 'altomgeneric.php', 'genericrace', 'Generic Race')
   ,galleri('scooter', 'altomgeneric.php', 'generictriggersm', 'Generic Trigger SM')
   ,galleri('scooter', 'altomgeneric.php', 'generictriggerx', 'Generic Trigger X')
   ,galleri('scooter', 'altomgeneric.php', 'genericxor2', 'Generic XOR 2')
))

,'
giantco
' => ''
.galleriholder(array(
    galleri('scooter', 'altomgiantco.php', 'giantcoebuddy', 'Giantco E-Buddy')
   ,galleri('scooter', 'altomgiantco.php', 'giantcog10', 'Giantco G-10')
   ,galleri('scooter', 'altomgiantco.php', 'giantcogbuddy', 'Giantco G-Buddy')
   ,galleri('scooter', 'altomgiantco.php', 'giantcolambros', 'Giantco Lambros')
   ,galleri('scooter', 'altomgiantco.php', 'giantcospartan', 'Giantco Spartan')
   ,galleri('scooter', 'altomgiantco.php', 'giantcosprint', 'Giantco Sprint')
   ,galleri('scooter', 'altomgiantco.php', 'giantcostealth', 'Giantco Stealth')
   ,galleri('scooter', 'altomgiantco.php', 'giantcovenus', 'Giantco Venus')
))

,'
gilera
' => ''
.galleriholder(array(
    galleri('scooter', 'altomgilera.php', 'gileradna', 'Gilera DNA')
   ,galleri('scooter', 'altomgilera.php', 'gileraice', 'Gilera ICE')
   ,galleri('scooter', 'altomgilera.php', 'gilerarcr', 'Gilera RCR')
   ,galleri('scooter', 'altomgilera.php', 'gilerarunner', 'Gilera Runner')
   ,galleri('scooter', 'altomgilera.php', 'gilerasmt', 'Gilera SMT')
   ,galleri('scooter', 'altomgilera.php', 'gilerastalker', 'Gilera Stalker')
   ,galleri('scooter', 'altomgilera.php', 'gilerastorm', 'Gilera Storm')
))

,'
govecs
' => ''
.galleriholder(array(
    galleri('scooter', 'altomgovecs.php', 'govecsgos12', 'Govecs GO! S1.2')
   ,galleri('scooter', 'altomgovecs.php', 'govecsgot12', 'Govecs GO! T1.2')
   ,galleri('scooter', 'altomgovecs.php', 'govecsgos24', 'Govecs GO! S2.4')
   ,galleri('scooter', 'altomgovecs.php', 'govecsgot24', 'Govecs GO! T2.4')
))

,'
hero majestic
' => ''
.galleriholder(array(
    galleri('scooter', 'altomheromajestic.php', 'herogizmoks2', 'hero majestic hero gizmo KS2')
   ,galleri('scooter', 'altomheromajestic.php', 'heromajesticvogue', 'Hero Majestic Vogue')
))

,'
honda
' => ''
.galleriholder(array(
    galleri('scooter', 'altomhonda.php', 'hondadax', 'Honda Dax')
   ,galleri('scooter', 'altomhonda.php', 'hondamelody', 'Honda Melody')
   ,galleri('scooter', 'altomhonda.php', 'hondasfx', 'Honda SFX')
   ,galleri('scooter', 'altomhonda.php', 'hondasky', 'Honda Sky')
   ,galleri('scooter', 'altomhonda.php', 'hondavision2t', 'Honda Vision 2T')
   ,galleri('scooter', 'altomhonda.php', 'hondavision', 'Honda Vision')
   ,galleri('scooter', 'altomhonda.php', 'hondax8rs', 'Honda X8R-S')
   ,galleri('scooter', 'altomhonda.php', 'hondazoomer', 'Honda Zoomer')
))

,'
italjet
' => ''
.galleriholder(array(
    galleri('scooter', 'altomitaljet.php', 'italjetdragster', 'Italjet Dragster')
   ,galleri('scooter', 'altomitaljet.php', 'italjetformula', 'Italjet Formula')
   ,galleri('scooter', 'altomitaljet.php', 'italjetjetset', 'Italjet Jetset')
   ,galleri('scooter', 'altomitaljet.php', 'italjettorpedo', 'Italjet Torpedo')
   ,galleri('scooter', 'altomitaljet.php', 'italjetvelocifero', 'Italjet Velocifero')
))

,'
jincheng
' => ''
.galleriholder(array(
    galleri('scooter', 'altomjincheng.php', 'jinchengjc50q5', 'Jincheng JC50Q-5')
   ,galleri('scooter', 'altomjincheng.php', 'jinchengjc50q7', 'Jincheng JC50Q-7')
   ,galleri('scooter', 'altomjincheng.php', 'jinchengjc50q7a', 'Jincheng JC50Q-7A')
   ,galleri('scooter', 'altomjincheng.php', 'jinchengjc50q8', 'Jincheng JC50Q-8')
))

,'
jinlun
' => ''
.galleriholder(array(
    galleri('scooter', 'altomjinlun.php', 'jinlunjl50qt5', 'Jinlun JL50QT-5')
   ,galleri('scooter', 'altomjinlun.php', 'jinlunjl50qt7', 'Jinlun JL50QT-7')
))

,'
keeway
' => ''
.galleriholder(array(
    galleri('scooter', 'altomkeeway.php', 'keewayfact', 'Keeway F-Act')
   ,galleri('scooter', 'altomkeeway.php', 'keewayfactnaked', 'Keeway F-Act Naked')
   ,galleri('scooter', 'altomkeeway.php', 'keewayflash', 'Keeway Flash')
   ,galleri('scooter', 'altomkeeway.php', 'keewayfocus', 'Keeway Focus')
   ,galleri('scooter', 'altomkeeway.php', 'keewayhurricane', 'Keeway Hurricane')
   ,galleri('scooter', 'altomkeeway.php', 'keewaymatrix', 'Keeway Matrix')
   ,galleri('scooter', 'altomkeeway.php', 'keewayswan', 'Keeway Swan')
   ,galleri('scooter', 'altomkeeway.php', 'keewayxray', 'Keeway X-Ray')
))

,'
kinroad
' => ''
.galleriholder(array(
    galleri('scooter', 'altomkinroad.php', 'kinroadchopper', 'Kinroad Chopper')
   ,galleri('scooter', 'altomkinroad.php', 'kinroadxt50qt', 'kinroad fresh wind')
   ,galleri('scooter', 'altomkinroad.php', 'kinroadxt50qt2', 'kinroad windbell')
   ,galleri('scooter', 'altomkinroad.php', 'kinroadxt50qt2a', 'kinroad little fish / super fish ?')
   ,galleri('scooter', 'altomkinroad.php', 'kinroadxt200gy', 'kinroad offroad')
))

,'
kreidler
' => ''
.galleriholder(array(
    galleri('scooter', 'altomkreidler.php', 'kreidlergalacticaelectro', 'Kreidler Galactica Electro')
   ,galleri('scooter', 'altomkreidler.php', 'kreidlerhikeramaze', 'Kreidler Hiker Amaze')
   ,galleri('scooter', 'altomkreidler.php', 'kreidlerjigger3hjul', 'Kreidler Jigger 3 hjul')
   ,galleri('scooter', 'altomkreidler.php', 'kreidlerjiggercity', 'Kreidler Jigger City')
))

,'
kymco
' => ''
.galleriholder(array(
    galleri('scooter', 'altomkymco.php', 'kymcoagility', 'Kymco Agility')
   ,galleri('scooter', 'altomkymco.php', 'kymcoagilitycarry', 'Kymco Agility Carry')
   ,galleri('scooter', 'altomkymco.php', 'kymcoagilitydelivery', 'Kymco Agility Delivery')
   ,galleri('scooter', 'altomkymco.php', 'kymcok12', 'Kymco K12')
   ,galleri('scooter', 'altomkymco.php', 'kymcolike', 'Kymco Like')
   ,galleri('scooter', 'altomkymco.php', 'kymcopeople', 'Kymco People')
   ,galleri('scooter', 'altomkymco.php', 'kymcosuper8', 'Kymco Super 8')
   ,galleri('scooter', 'altomkymco.php', 'kymcosuper9', 'Kymco Super 9')
   ,galleri('scooter', 'altomkymco.php', 'kymcovitality', 'Kymco Vitality')
))

,'
longjia
' => ''
.galleriholder(array(
    galleri('scooter', 'altomlongjia.php', 'longjiadigita', 'Longjia Digita')
   ,galleri('scooter', 'altomlongjia.php', 'longjiaexactly', 'Longjia Exactly')
   ,galleri('scooter', 'altomlongjia.php', 'longjiagrido', 'Longjia Grido')
   ,galleri('scooter', 'altomlongjia.php', 'longjiah2', 'Longjia H-2')
   ,galleri('scooter', 'altomlongjia.php', 'longjiaversus', 'Longjia Versus')
   ,galleri('scooter', 'altomlongjia.php', 'longjiaversus4t', 'Longjia Versus 4T LC')
))

,'
lifan
' => ''
.galleriholder(array(
    galleri('scooter', 'altomlifan.php', 'lifanlf50qt26a', 'Lifan LF50QT-26A')
))

,'
luyuan
' => ''
.galleriholder(array(
    galleri('scooter', 'altomluyuan.php', 'luyuanpb706kqs4gb', 'luyuan PB706 KQS-4GB')
   ,galleri('scooter', 'altomluyuan.php', 'luyuanpb803a', 'luyuan PB803A')
   ,galleri('scooter', 'altomluyuan.php', 'luyuanymo6btla', 'Luyuan YMO-6BTL-A')
))

,'
lynx
' => ''
.galleriholder(array(
    galleri('scooter', 'altomlynx.php', 'lynx370', 'Lynx 370')
   ,galleri('scooter', 'altomlynx.php', 'lynx388', 'Lynx 388')
   ,galleri('scooter', 'altomlynx.php', 'lynx3882', 'Lynx 388-2')
   ,galleri('scooter', 'altomlynx.php', 'lynx389', 'Lynx 389')
   ,galleri('scooter', 'altomlynx.php', 'lynx398', 'Lynx 398')
   ,galleri('scooter', 'altomlynx.php', 'lynx690', 'Lynx 690')
))

,'
malaguti
' => ''
.galleriholder(array(
    galleri('scooter', 'altommalaguti.php', 'malaguticiak', 'Malaguti Ciak')
   ,galleri('scooter', 'altommalaguti.php', 'malagutifirefox', 'Malaguti Firefox')
))

,'
motor mania
' => ''
.galleriholder(array(
    galleri('scooter', 'altommotormania.php', 'motormaniabella', 'Motor mania Bella')
   ,galleri('scooter', 'altommotormania.php', 'motormaniadesire', 'Motor mania Desire')
   ,galleri('scooter', 'altommotormania.php', 'motormaniafino', 'Motor mania Fino')
   ,galleri('scooter', 'altommotormania.php', 'motormanias1', 'Motor mania S1')
   ,galleri('scooter', 'altommotormania.php', 'motormanias2', 'Motor mania S2')
   ,galleri('scooter', 'altommotormania.php', 'motormaniaspeedy', 'Motor mania Speedy')
   ,galleri('scooter', 'altommotormania.php', 'motormaniaspirit', 'Motor mania Spirit')
))

,'
nicom
' => ''
.galleriholder(array(
    galleri('scooter', 'altomnicom.php', 'nicomtdr48k15', 'Nicom TDR48K15')
))

,'
nordic e-bike
' => ''
.galleriholder(array(
    galleri('scooter', 'altomnordicebike.php', 'nordicebikebutterfly', 'Nordic E-bike Butterfly 18"')
   ,galleri('scooter', 'altomnordicebike.php', 'nordicebikedingdong', 'Nordic E-bike Ding-dong 16"')
   ,galleri('scooter', 'altomnordicebike.php', 'nordicebikef1', 'Nordic E-bike F1 16"')
   ,galleri('scooter', 'altomnordicebike.php', 'nordicebikefast100', 'Nordic E-bike Fast-100 16"')
   ,galleri('scooter', 'altomnordicebike.php', 'nordicebikeleilong', 'Nordic E-bike Leilong 16"')
   ,galleri('scooter', 'altomnordicebike.php', 'nordicebikepig', 'Nordic E-bike Pig 18"')
   ,galleri('scooter', 'altomnordicebike.php', 'nordicebiketravel', 'Nordic E-bike Travel 16"')
))

,'
norsjö
' => ''
.galleriholder(array(
    galleri('scooter', 'altomnorsjo.php', 'norsjocarrier4stroke', 'norsjö carrier 4 stroke')
   ,galleri('scooter', 'altomnorsjo.php', 'norsjocarrierelectronic', 'norsjö carrier electronic')
))

,'
peugeot
' => ''
.galleriholder(array(
    galleri('scooter', 'altompeugeot.php', 'peugeotbuxy', 'Peugeot Buxy')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotelyseo', 'Peugeot Elyseo')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotelystar', 'Peugeot Elystar')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotfox', 'Peugeot Fox')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotkisbee', 'Peugeot Kisbee')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotludix', 'Peugeot Ludix')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotscootelec', 'Peugeot Scoot\'Elec')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotspeedake', 'Peugeot Speedake')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotspeedfight1', 'Peugeot Speedfight 1')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotspeedfight2', 'Peugeot Speedfight 2')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotspeedfight3', 'Peugeot Speedfight 3')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotsquab', 'Peugeot Squab')
   ,galleri('scooter', 'altompeugeot.php', 'peugeottkr', 'Peugeot TKR')
   ,galleri('scooter', 'altompeugeot.php', 'peugeottrekker', 'Peugeot Trekker')
   ,galleri('scooter', 'altompeugeot.php', 'peugeottweet', 'Peugeot Tweet')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotvclic', 'Peugeot V-Clic')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotvivacity3', 'Peugeot Vivacity 3')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotvivacity4t', 'Peugeot Vivacity 4T')
   ,galleri('scooter', 'altompeugeot.php', 'peugeotzenith', 'Peugeot Zenith')
))

,'
pgo
' => ''
.galleriholder(array(
    galleri('scooter', 'altompgo.php', 'pgohot', 'PGO Hot')
   ,galleri('scooter', 'altompgo.php', 'pgohot12', 'PGO Hot 12')
   ,galleri('scooter', 'altompgo.php', 'pgohotnaked', 'PGO Hot Naked')
   ,galleri('scooter', 'altompgo.php', 'pgohotsp', 'PGO Hot SP')
   ,galleri('scooter', 'altompgo.php', 'pgop3knallert', 'PGO P3 Knallert')
   ,galleri('scooter', 'altompgo.php', 'pgobigmax', 'PGO Big Max')
   ,galleri('scooter', 'altompgo.php', 'pgobigmax12', 'PGO Big Max 12')
   ,galleri('scooter', 'altompgo.php', 'pgobigmaxnaked', 'PGO Big Max Naked')
   ,galleri('scooter', 'altompgo.php', 'pgobigmaxsp', 'PGO Big Max SP')
   ,galleri('scooter', 'altompgo.php', 'handitrikeclassic', 'Handitrike Classic')
   ,galleri('scooter', 'altompgo.php', 'pgocomet', 'PGO Comet')
   ,galleri('scooter', 'altompgo.php', 'pgotornado', 'PGO Tornado')
   ,galleri('scooter', 'altompgo.php', 'pgogmax', 'PGO G-Max')
   ,galleri('scooter', 'altompgo.php', 'pgoitsmagic', 'PGO Its Magic')
   ,galleri('scooter', 'altompgo.php', 'pgolibra', 'PGO Libra')
   ,galleri('scooter', 'altompgo.php', 'pgoxhot', 'PGO X-Hot')
   ,galleri('scooter', 'altompgo.php', 'pgorodoshow', 'PGO Rodoshow')
   ,galleri('scooter', 'altompgo.php', 'pgoligero', 'PGO Ligero')
   ,galleri('scooter', 'altompgo.php', 'pgoligerors', 'PGO Ligero RS')
   ,galleri('scooter', 'altompgo.php', 'pgogalaxy', 'PGO Galaxy')
   ,galleri('scooter', 'altompgo.php', 'pgopmxsport', 'PGO PMX Sport')
   ,galleri('scooter', 'altompgo.php', 'pgopmxnaked', 'PGO PMX Naked')
   ,galleri('scooter', 'altompgo.php', 'pgodrbig', 'PGO Dr Big')
   ,galleri('scooter', 'altompgo.php', 'pgodrbigsp', 'PGO Dr Big SP')
   ,galleri('scooter', 'altompgo.php', 'pgop3magnum', 'PGO P3 Magnum')
   ,galleri('scooter', 'altompgo.php', 'pgotrike', 'PGO Trike')
   ,galleri('scooter', 'altompgo.php', 'pgotrex', 'PGO T-Rex')
   ,galleri('scooter', 'altompgo.php', 'pgotrexsp', 'PGO T-Rex SP')
   ,galleri('scooter', 'altompgo.php', 'handitrikecomfort', 'Handitrike Comfort')
   ,galleri('scooter', 'altompgo.php', 'pgopse', 'PGO PSE')

))

,'
piaggio
' => ''
.galleriholder(array(
    galleri('scooter', 'altompiaggio.php', 'piaggioape', 'Piaggio Ape')
   ,galleri('scooter', 'altompiaggio.php', 'piaggiociao', 'Piaggio Ciao')
   ,galleri('scooter', 'altompiaggio.php', 'piaggiofly2t', 'Piaggio Fly 2T')
   ,galleri('scooter', 'altompiaggio.php', 'piaggiofly4t', 'Piaggio Fly 4T')
   ,galleri('scooter', 'altompiaggio.php', 'piaggioliberty2t', 'Piaggio Liberty 2T')
   ,galleri('scooter', 'altompiaggio.php', 'piaggioliberty4t', 'Piaggio Liberty 4T')
   ,galleri('scooter', 'altompiaggio.php', 'piaggionrg', 'Piaggio NRG')
   ,galleri('scooter', 'altompiaggio.php', 'piaggiotyphoon', 'Piaggio Typhoon')
   ,galleri('scooter', 'altompiaggio.php', 'piaggiozip2t', 'Piaggio Zip 2T')
   ,galleri('scooter', 'altompiaggio.php', 'piaggiozip4t', 'Piaggio Zip 4T')
))

,'
puch
' => ''
.galleriholder(array(
    galleri('scooter', 'altompuch.php', 'puchmaxie50', 'Puch maxi E50')
   ,galleri('scooter', 'altompuch.php', 'puchmaxi2', 'Puch maxi 2 gear')
   ,galleri('scooter', 'altompuch.php', 'puchmonzagrandprixn50', 'Puch monza grand prix N50')
   ,galleri('scooter', 'altompuch.php', 'puchr50', 'Puch R50')
   ,galleri('scooter', 'altompuch.php', 'puchds50', 'Puch DS50')
   ,galleri('scooter', 'altompuch.php', 'puchvz50', 'Puch VZ50')
   ,galleri('scooter', 'altompuch.php', 'puchvs50', 'Puch VS50')
   ,galleri('scooter', 'altompuch.php', 'puchms50', 'Puch MS50')
   ,galleri('scooter', 'altompuch.php', 'puchpionier', 'Puch Pionier')
   ,galleri('scooter', 'altompuch.php', 'maximanet', 'Maxi manet')
))

,'
qingqi
' => ''
.galleriholder(array(
    galleri('scooter', 'altomqingqi.php', 'hooperone', 'Hooper One')
   ,galleri('scooter', 'altomqingqi.php', 'hooperfourious', 'Hooper Fourious')
   ,galleri('scooter', 'altomqingqi.php', 'hooperleo', 'Hooper Leo')
   ,galleri('scooter', 'altomqingqi.php', 'qingqifizz', 'Qingqi Fizz')
   ,galleri('scooter', 'altomqingqi.php', 'qingqiscoopergt', 'QingQi Scooper GT')
))

,'
regal raptor
' => ''
.galleriholder(array(
    galleri('scooter', 'altomregalraptor.php', 'regalraptordd50e', 'regal raptor DD50E')
))

,'
rieju
' => ''
.galleriholder(array(
    galleri('scooter', 'altomrieju.php', 'riejupacific', 'Rieju Pacific')
   ,galleri('scooter', 'altomrieju.php', 'riejurs2', 'Rieju RS2')
   ,galleri('scooter', 'altomrieju.php', 'riejurs3', 'Rieju RS3')
))

,'
romet
' => ''
.galleriholder(array(
    galleri('scooter', 'altomromet.php', 'rometogar900', 'Romet Ogar 900 R-Racing')
))

,'
sachs
' => ''
.galleriholder(array(
    galleri('scooter', 'altomsachs.php', 'sachsmadass', 'Sachs Madass')
   ,galleri('scooter', 'altomsachs.php', 'sachssaxy', 'Sachs Saxy')
))

,'
secma
' => ''
.galleriholder(array(
    galleri('scooter', 'altomsecma.php', 'secmafunelec', 'Secma Fun Elec')
   ,galleri('scooter', 'altomsecma.php', 'secmafuntech', 'Secma Fun Tech')
))

,'
scoopie
' => ''
.galleriholder(array(
    galleri('scooter', 'altomscoopie.php', 'scoopie450w', 'Scoopie 450w')
   ,galleri('scooter', 'altomscoopie.php', 'scoopie500w', 'Scoopie 500w')
   ,galleri('scooter', 'altomscoopie.php', 'scoopie1500w', 'Scoopie 1500w')
   ,galleri('scooter', 'altomscoopie.php', 'scoopieretro64', 'Scoopie Retro 64')
   ,galleri('scooter', 'altomscoopie.php', 'scoopietxd500', 'Scoopie TXD500')
   ,galleri('scooter', 'altomscoopie.php', 'scoopietxd800', 'Scoopie TXD800')
))

,'
skyteam
' => ''
.galleriholder(array(
    galleri('scooter', 'altomskyteam.php', 'skyteamace', 'Skyteam Ace')
   ,galleri('scooter', 'altomskyteam.php', 'skyteambatone', 'Skyteam Bat.one')
   ,galleri('scooter', 'altomskyteam.php', 'skyteambatfox', 'Skyteam Bat.fox')
   ,galleri('scooter', 'altomskyteam.php', 'skyteambubbly', 'Skyteam Bubbly')
   ,galleri('scooter', 'altomskyteam.php', 'skyteamcobra', 'Skyteam Cobra')
   ,galleri('scooter', 'altomskyteam.php', 'skyteamdax', 'Skyteam Dax')
   ,galleri('scooter', 'altomskyteam.php', 'skyteamgorilla', 'Skyteam Gorilla')
   ,galleri('scooter', 'altomskyteam.php', 'skyteammonkey', 'Skyteam Monkey')
   ,galleri('scooter', 'altomskyteam.php', 'skyteampbr', 'Skyteam PBR')
   ,galleri('scooter', 'altomskyteam.php', 'skyteamskymax', 'Skyteam Skymax')
   ,galleri('scooter', 'altomskyteam.php', 'skyteamskymaxclub', 'Skyteam Skymax Club')
   ,galleri('scooter', 'altomskyteam.php', 'skyteamskymaxpro', 'Skyteam Skymax Pro')
   ,galleri('scooter', 'altomskyteam.php', 'skyteamskymaxse', 'Skyteam Skymax Special Edition')
   ,galleri('scooter', 'altomskyteam.php', 'skyteamst503', 'Skyteam ST50-3')
   ,galleri('scooter', 'altomskyteam.php', 'skyteamtrex', 'Skyteam T-REX')
))

,'
solex
' => ''
.galleriholder(array(
    galleri('scooter', 'altomsolex.php', 'esolex', 'e-solex')
))

,'
suzuki
' => ''
.galleriholder(array(
    galleri('scooter', 'altomsuzuki.php', 'suzukiaddress', 'Suzuki Address')
   ,galleri('scooter', 'altomsuzuki.php', 'suzukifz50', 'Suzuki FZ50')
   ,galleri('scooter', 'altomsuzuki.php', 'suzukik50', 'Suzuki K50')
   ,galleri('scooter', 'altomsuzuki.php', 'suzukikatana', 'Suzuki Katana')
   ,galleri('scooter', 'altomsuzuki.php', 'suzukirmx', 'Suzuki RMX')
   ,galleri('scooter', 'altomsuzuki.php', 'suzukisamurai', 'Suzuki Samurai')
   ,galleri('scooter', 'altomsuzuki.php', 'suzukismx', 'Suzuki SMX')
   ,galleri('scooter', 'altomsuzuki.php', 'suzukistreetmagic', 'Suzuki Street magic')
   ,galleri('scooter', 'altomsuzuki.php', 'suzukiuestilete', 'Suzuki Estilete')
   ,galleri('scooter', 'altomsuzuki.php', 'suzukizillion', 'Suzuki Zillion')
))

,'
swap
' => ''
.galleriholder(array(
    galleri('scooter', 'altomswap.php', 'swap2', 'Swap 2')
   ,galleri('scooter', 'altomswap.php', 'swap3', 'Swap 3')
))

,'
sym
' => ''
.galleriholder(array(
    galleri('scooter', 'altomsym.php', 'symcello', 'Sym Cello')
   ,galleri('scooter', 'altomsym.php', 'symdd', 'Sym DD')
   ,galleri('scooter', 'altomsym.php', 'symfiddle', 'Sym Fiddle')
   ,galleri('scooter', 'altomsym.php', 'symfiddle3hjul', 'Sym Fiddle 3 hjul')
   ,galleri('scooter', 'altomsym.php', 'symjet4', 'Sym Jet 4')
   ,galleri('scooter', 'altomsym.php', 'symjeteurox', 'Sym Jet Euro X')
   ,galleri('scooter', 'altomsym.php', 'symjetsportx', 'Sym Jet Sport X')
   ,galleri('scooter', 'altomsym.php', 'symmio', 'Sym Mio')
   ,galleri('scooter', 'altomsym.php', 'symorbit', 'Sym Orbit')
   ,galleri('scooter', 'altomsym.php', 'symorbit3hjul', 'Sym Orbit 3 hjul')
   ,galleri('scooter', 'altomsym.php', 'symsymphony', 'Sym Symphony')
   ,galleri('scooter', 'altomsym.php', 'symsymphonysr', 'Sym Symphony SR')
   ,galleri('scooter', 'altomsym.php', 'symtonik', 'Sym Tonik')
))

,'
tante paula
' => ''
.galleriholder(array(
    galleri('scooter', 'altomtantepaula.php', 'tantepaulaferdinandii', 'Tante Paula Ferdinand II')
   ,galleri('scooter', 'altomtantepaula.php', 'tantepaulamaximilianii', 'Tante Paula Maximilian II')
))

,'
texas
' => ''
.galleriholder(array(
    galleri('scooter', 'altomtexas.php', 'texaschili', 'Texas Chili')
   ,galleri('scooter', 'altomtexas.php', 'texascity', 'Texas City')
   ,galleri('scooter', 'altomtexas.php', 'texascomfort', 'Texas Comfort')
   ,galleri('scooter', 'altomtexas.php', 'texasflash', 'Texas Flash')
   ,galleri('scooter', 'altomtexas.php', 'texasfree', 'Texas Free')
   ,galleri('scooter', 'altomtexas.php', 'texasstreet', 'Texas Street')
   ,galleri('scooter', 'altomtexas.php', 'texaswhisper', 'Texas Whisper')
))

,'
tgb
' => ''
.galleriholder(array(
    galleri('scooter', 'altomtgb.php', 'tgb101r', 'TGB 101R')
   ,galleri('scooter', 'altomtgb.php', 'tgb104t', 'TGB 104T')
   ,galleri('scooter', 'altomtgb.php', 'tgb303rhawk', 'TGB 303R Hawk')
   ,galleri('scooter', 'altomtgb.php', 'tgbdelivery', 'TGB Delivery')
   ,galleri('scooter', 'altomtgb.php', 'tgbdelivery3hjul', 'TGB Delivery 3 hjul')
   ,galleri('scooter', 'altomtgb.php', 'tgbr50x', 'TGB R50X')
   ,galleri('scooter', 'altomtgb.php', 'tgbtrigger', 'TGB Trigger')
))

,'
tms
' => ''
.galleriholder(array(
    galleri('scooter', 'altomtms.php', 'tmsclassic', 'Tms Classic')
   ,galleri('scooter', 'altomtms.php', 'tmsm3', 'Tms M3')
   ,galleri('scooter', 'altomtms.php', 'tmsoffroad', 'Tms Offroad')
   ,galleri('scooter', 'altomtms.php', 'tmsretro', 'Tms Retro')
   ,galleri('scooter', 'altomtms.php', 'tmss3', 'Tms S3')
   ,galleri('scooter', 'altomtms.php', 'tmssprint', 'Tms Sprint')
   ,galleri('scooter', 'altomtms.php', 'tmsz2', 'Tms Z2')
))

,'
tomos
' => ''
.galleriholder(array(
    galleri('scooter', 'altomtomos.php', 'tomosclassic', 'Tomos Classic')
))

,'
trilet
' => ''
.galleriholder(array(
    galleri('scooter', 'altomtrilet.php', 'triletac504t', 'Trilet AC50 4T')
   ,galleri('scooter', 'altomtrilet.php', 'triletlc50', 'Trilet LC50')
   ,galleri('scooter', 'altomtrilet.php', 'trilet2000m', 'Trilet 2000M')
   ,galleri('scooter', 'altomtrilet.php', 'trilet2000h', 'Trilet 2000H')
   ,galleri('scooter', 'altomtrilet.php', 'trilet2000', 'Trilet 2000')
   ,galleri('scooter', 'altomtrilet.php', 'triletr5', 'Trilet R5')
   ,galleri('scooter', 'altomtrilet.php', 'triletveteran', 'Trilet Veteran')
))

,'
varg
' => ''
.galleriholder(array(
    galleri('scooter', 'altomvarg.php', 'vargbergen', 'Varg Bergen')
   ,galleri('scooter', 'altomvarg.php', 'vargnora', 'Varg Nora')
   ,galleri('scooter', 'altomvarg.php', 'vargoslo', 'Varg Oslo')
))

,'
vespa
' => ''
.galleriholder(array(
    galleri('scooter', 'altomvespa.php', 'vespaet2', 'vespa ET2')
   ,galleri('scooter', 'altomvespa.php', 'vespalx2t', 'Vespa LX 2T')
   ,galleri('scooter', 'altomvespa.php', 'vespalx4t', 'Vespa LX 4T')
))

,'
xingyue
' => ''
.galleriholder(array(
    galleri('scooter', 'altomxingyue.php', 'seeyesdmb09a', 'Seeyes DMB09A')
   ,galleri('scooter', 'altomxingyue.php', '_xingyuedm82', 'Xingyue DM82')
   ,galleri('scooter', 'altomxingyue.php', 'xingyuexy50zk', 'Xingyue XY50ZK')
))

,'
yamaha
' => ''
.galleriholder(array(
    galleri('scooter', 'altomyamaha.php', 'yamahaaerox', 'Yamaha Aerox')
   ,galleri('scooter', 'altomyamaha.php', 'yamahaaxis', 'Yamaha Axis')
   ,galleri('scooter', 'altomyamaha.php', 'yamahabwsspy', 'Yamaha BW-SPY')
   ,galleri('scooter', 'altomyamaha.php', 'yamahabws', 'Yamaha BWS')
   ,galleri('scooter', 'altomyamaha.php', 'yamahaec03', 'Yamaha EC-03')
   ,galleri('scooter', 'altomyamaha.php', 'yamahagiggle', 'Yamaha Giggle')
   ,galleri('scooter', 'altomyamaha.php', 'yamahajog', 'Yamaha Jog')
   ,galleri('scooter', 'altomyamaha.php', 'yamahaneos2t', 'Yamaha Neos 2T')
   ,galleri('scooter', 'altomyamaha.php', 'yamahaneoseasy2t', 'Yamaha Neos Easy 2T')
   ,galleri('scooter', 'altomyamaha.php', 'yamahaneos4t', 'Yamaha Neos 4T')
   ,galleri('scooter', 'altomyamaha.php', 'yamahaslider', 'Yamaha Slider')
   ,galleri('scooter', 'altomyamaha.php', 'yamahatzr', 'Yamaha TZR')
))

,'
yamasaki
' => ''
.galleriholder(array(
    galleri('scooter', 'altomyamasaki.php', 'yamasakiym508b', 'Yamasaki YM50-8B')
   ,galleri('scooter', 'altomyamasaki.php', 'yamasakiym50gys', 'Yamasaki YM50GYS')
   ,galleri('scooter', 'altomyamasaki.php', 'yamasakiym50qdt2', 'yamasaki YM50QDT-2')
))

,'
yiben
' => ''
.galleriholder(array(
    galleri('scooter', 'altomyiben.php', 'yibendanger', 'Yiben Danger')
   ,galleri('scooter', 'altomyiben.php', 'yibeneasy', 'Yiben Easy')
   ,galleri('scooter', 'altomyiben.php', 'yibenhunter', 'Yiben Hunter')
   ,galleri('scooter', 'altomyiben.php', 'yibenmatrix', 'Yiben Matrix')
   ,galleri('scooter', 'altomyiben.php', 'yibenskywalk', 'Yiben Skywalk')
))

,'
zhenhua
' => ''
.galleriholder(array(
    galleri('scooter', 'altomzhenhua.php', 'zhenhuadax', 'Zhenhua Dax')
   ,galleri('scooter', 'altomzhenhua.php', 'zhenhuagorilla', 'Zhenhua Gorilla')
   ,galleri('scooter', 'altomzhenhua.php', 'zhenhuamonkey', 'Zhenhua Monkey')
))

,'
zongshen
' => ''
.galleriholder(array(
    galleri('scooter', 'altomzongshen.php', 'zongshenzs50q3', 'Zongshen ZS50Q-3')
))

,'
andre mærker
' => ''
.galleriholder(array(
    galleri('scooter', 'altomandre.php', 'bendascoot', 'Benda Scoot')
   ,galleri('scooter', 'altomandre.php', 'benmallb852', 'Benmal LB-852')
   ,galleri('scooter', 'altomandre.php', 'cityscooterfreak', 'City scooter Freak')
   ,galleri('scooter', 'altomandre.php', 'sevetricks', 'SEV eTRICKS')
   ,galleri('scooter', 'altomandre.php', 'listo', 'Listo')
   ,galleri('scooter', 'altomandre.php', 'pexma', 'Pexma')
   ,galleri('scooter', 'altomandre.php', 'rmczanzara', 'RMC Zanzara')
   ,galleri('scooter', 'altomandre.php', 'shineray', 'Shineray')
   ,galleri('scooter', 'altomandre.php', 'sinskimc02a', 'Sinski MC02A')
   ,galleri('scooter', 'altomandre.php', 'strangerxfight', 'Stranger x-fight')
   ,galleri('scooter', 'altomandre.php', 'superbikext50qt2', 'Superbike XT50QT-2')
   ,galleri('scooter', 'altomandre.php', 'tisongtm300', 'Tisong TM-300')
   ,galleri('scooter', 'altomandre.php', 'tpgs303', 'TP GS-303')
   ,galleri('scooter', 'altomandre.php', 'vekenvkm50', 'Veken VK-M50')
   ,galleri('scooter', 'altomandre.php', 'xmotosxb31', 'xmotos XB31')
   ,galleri('scooter', 'altomandre.php', 'xmotosxb81', 'xmotos XB81')
   ,galleri('scooter', 'altomandre.php', 'zeroe', 'zero-e')
))

,'
se også...
' => '
'.linkknap('galleri_manglerdata.php', 'Galleri for modeller som mangler data').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
