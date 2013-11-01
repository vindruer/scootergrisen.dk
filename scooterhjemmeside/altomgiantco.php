<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "giantco scootere med 50 cm³ og elektrisk motor";
$overskrift = "giantco";
$metadescription = "specifikationer, download og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

// giantcohk.com virker ikke mere (checket den 12-01-2012 ... sjovt nok efter T Hansen er holdt op med det mærke).

$databasecenter_b = array(

'
el diagrammer
' => '
Her følger 3 forskellige el diagrammer til Giantco scootere. Først et sort/hvid, så et i farver også et jeg selv har lavet.

Her er et sort/hvid el diagram som skulle passe til Giantco Sprint, Venus og G-Buddy.
Det skulle også passe til Giantco Stealth bortset fra at der på Stealth er en ekstra forlyspære og nogle ekstra pærer ved instrumentpanelet.
På dette el diagram får forlyset jævnstrøm fra spændingsregulatoren (øverste venstre ledning gul til sort).
'.visbilled('1', 'billed1239.jpg', 'giantco el diagram', false, true).'

Her er et el diagram med farver.
På dette el diagram får forlyset vekselstrøm fra generatoren (gul ledning fra stator går til lyskontakt til højre på styret).
'.visfil('1', 'scooterhjemmeside/download/giantco_eldiagram.pdf').'

Ud fra det sort/hvide el diagram har jeg lavet dette experimentale el diagram i vektor grafik med farver i forskellige formater.
'.visbilled('1', 'billed1757.jpg', 'giantco experimental el diagram', false, true).'
Her er det samme experimentale el diagram i PDF og SVG format.
'.visfil('1', 'scooterhjemmeside/download/giantco_eldiagram_experimental.pdf')
.visfil('1', 'scooterhjemmeside/download/giantco_eldiagram_experimental.svg').'

'.afsnit('bemærk', '
Jeg mangler ledningsfarverne ved den automatiske choker og batteri og sikringen ved batteriet.

Hvis du har en Giantco scooter må du meget gerne '.kontaktemig().' eller skrive i '.forummet().' hvis du har nogen kommentar eller rettelser til el diagrammerne.

Ud fra de billeder man kan se hos T Hansen hvor man kan se ledningsfarverne på diverse dele så ser det ikke altid ud til at passe på el diagrammerne. Det kan måske være fordi farverne på el diagrammerne kun viser farverne på ledningsnettet og ikke farverne de ledninger som går fra stikket og hen til delene.
').'
'
/*
,'
navne og producent
' => '
Type starter med HY = ?
HF = ?
JL = ? JinLang ?
Stelnummer starter med LNG = Jiangmen Giantco Motorcycle Co., Ltd.

På '.ahref('http://www.thansen.dk/supersearchnew.asp?c=9738757867&startid=714770783&n=1726626229&brandid=-1177915524&modelid=1726626229#result', 'thansen').' kan man se at nogen af reservedelene fås i 2 udgaver fra forskellig producent (HF) og (JL).
Blandt andet beslag, gaffelbro, holdere, bøsning ved motorophæng, støtteben, motorophæng, styr og fodplade.
'
*/
);

$databasecenter = array(

'giantcoebuddy' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'Se også '.ahref('specielt_giantcoebuddy.php', 'Giantco E-Buddy').' hvor jeg samler alt hvad jeg kan finde om denne model.', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'giantco e-buddy', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'HY1000QTD', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '4999', '7999', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.thansen.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '48', '1000', 'børsteløs jævnstrøm nav', '510 o/min')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,36', 'hk', '510', '')
      ,'moment'            => ens('moment', '16', 'nm', '', '(ifølge t-hansen brugermanual)') . '<br>' . ens('moment', '13,8 og 16', 'nm', '', '(ifølge giantco.com)')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1670-1680', '', '', '')
      ,'bredde'            => ens('bredde', '663-670', '', '', '')
      ,'højde'             => ens('højde', '1100', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1220', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.15', '10', 'aluminium', '')
      ,'fælgbag'           => ens('fælg', '2.15', '10', 'aluminium eller stål', '')
      ,'dækfor'            => ens('dæk2', '3.50', '10', '', '')
      ,'dækbag'            => ens('dæk2', '3.50', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '1,75', 'kgcm2', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,00', 'kgcm2', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'svinggaffel med 2 støddæmpere', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '160', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '48', '33', '4 stk silicone (forseglet silica)<br>Guineng china silicone power battery 6-DW-33Ah (12B33Ah) Jiang Men Yu Yang Special Storage Battery CO., Ltd Made in China', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '11,6', '', '', 'per batteri (46,4 kg ialt for alle 4 batterier)')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '62,4', '6', '400', 'model : PT486A (impulslader)')
      ,'ladetid'           => ens('ladetid', '5-6', '', '', '') . ' (ifølge giantco.com)<br>' . ens('ladetid', '5-8', '', '', '') . ' (ifølge giantco.com)<br>' . ens('ladetid', '6-8', '', '', '') . ' (ifølge t-hansen hjemmeside, brugermanual og oplader manual)'
      ,'rækkevidde'        => ens('rækkevidde', '', 'op til 60', '', '(ifølge t-hansen hjemmeside for 30 km/t modellen)') . '<br>' . ens('rækkevidde', '', 'op til 45', '', '(ifølge t-hansen hjemmeside for 45 km/t modellen)') . '<br>' . ens('rækkevidde', '', 'over 60', '', '(ifølge t-hansen hjemmeside før i tiden for både 30 og 45 km/t)') . '<br>' . ens('rækkevidde', '', 'op til 60', '', '(ifølge t-hansen hjemmeside)') . '<br>' . ens('rækkevidde', '', 'op til 70', '', '(ifølge t-hansen brugermanual)') . '<br>' . ens('rækkevidde', '', '60-90', '', '(ifølge giantco.com)')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'rørramme i stål', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LNGDXZFKX9C (30 km/t)', 'LNGDXZFK49C300 LNGDXZFKX9C300 LNGDXZFK59C300 LNGDXZFK89C300 (lille)', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '105', 'det må være med batterier', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '111', 'det må være med batterier', '', '')
      ,'vægttotal'         => ens('vægttotal', '261', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '150', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'T. Hansen Gruppen A/S', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Giantco Motorcycle Co., Ltd.', '', '')
      ,'andet'             => ens('andet', 'overflow protection : 35 ampere (30 ± 0,5 Ampere ifølge giantco.com)', 'kredsløbsbeskyttelse : 30 ± 0,5 Ampere (ifølge brugermanual)', 'low voltage protection : 42 ± 0,5 volt', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', 'begrænsningen kan fjernes ved at afmonterer et sort stik med hvide ledninger som går ud af controlleren')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 12 i stelnummeret er "3" og angiver maksimal hastighed = 30 km/t.', 'Tegn 12 i stelnummeret er "4" og angiver maksimal hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'giantcog10' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'giantco G-10', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'HY-T-10', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.thansen.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '1PE40QMB', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,84', 'kw', '', '(ifølge 30 og 45 km/t typegodkendelse)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50', '13', '', '')
      ,'fælgbag'           => ens('fælg', '3.50', '13', '', '')
      ,'dækfor'            => ens('dæk1', '130', '60', '13', '')
      ,'dækbag'            => ens('dæk1', '130', '60', '13', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', '', '', '', '')
      ,'bremserbag'        => ens('bremser', '', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LNGTEBLL2AC', 'LNGTEBLL7AC300', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '10,5 mm bøsning i forreste remskive', '6,8 mm bøsning i forreste remskive', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn nr. 12 i stelnummeret er "3" og angiver maksimal hastighed = 30 km/t.', 'Tegn nr. 12 i stelnummeret er "4" og angiver maksimal hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'giantcogbuddy' => array(

   'generelt'              => array(
       'model'             => ens('model', 'giantco g-buddy', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'HY50QT-3B', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '4999', '6999', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.thansen.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '139QM', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5-49,6', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '39', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,5', '', '', '')
      ,'ventiler'          => ens('ventiler', '2', 'SOHC', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '0,10', '0,10', '(ifølge thansen e-mail svar)', '')
      ,'kompression'       => ens('kompression', '10,4-10,5', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,5', 'kw', '6000', '(ifølge t-hansen brugermanual og typegodkendelse)<br>') . ens('maxeffektogheste', '3,5', 'hk', '7000', '(ifølge thansen.dk)<br>') . ens('maxeffektogheste', '2,2', 'kw', '7500', '(ifølge giantco.com)')
      ,'moment'            => ens('moment', '3,5', 'nm', '3500', '(ifølge t-hansen brugermanual)<br>') . ens('moment', '3,9', 'nm', '6000', '(ifølge thansen.dk)<br>') . ens('moment', '2,5', 'nm', '6500', '(ifølge giantco.com)')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK CR7HSA', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1650-1680-1710', '', '', '')
      ,'bredde'            => ens('bredde', '615-654', '', '', '')
      ,'højde'             => ens('højde', '1040-1100', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1200-1210', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '92', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '6,4', '', '', '(ifølge thansen og brugermanual)<br>') . ens('benzintank', '5,8', '', '', '(ifølge giantco)')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.15', '10', 'aluminium', '')
      ,'fælgbag'           => ens('fælg', '2.15', '10', 'aluminium', '')
      ,'dækfor'            => ens('dæk2', '3.50', '10', '', '')
      ,'dækbag'            => ens('dæk2', '3.50', '10', '', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'støddæmper', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '160', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '5', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '15', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '0,7-0,8', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'rørramme i stål', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LNGTGBDL9AC30 LNGTGBDL3AC300 LNGTGBDL29C304 (lille) LNGTGBDL8AC', 'LNGTGBDL39C', 'LNGTGBDLXAC (lille knallert)', 'LNGTGBDL5AC (lille knallert), LNGTGBDL9AC LNGTGBDL5AC300 LNGTGBDL2AC300 LNGTGBDL6AC300 LNGTGBDL8AC300 LNGTGBDL1AC300 LNGTGBDL3AC300 LNGTGBDL3AC300 LNGTGBDL89C304 LNGTGBDL8AC300 LNGTGBDL69C304 LNGTGBDL5AC300 LNGTGBDL89C304 (lille knallert)')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '')
      ,'vægttør'           => ens('vægttør', '75-80-82', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '235', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '150', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '77', '3000', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'T. Hansen Gruppen A/S', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Giantco Motorcycle Co., Ltd.', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '9,0 mm skive Ml. forr. remskivehalvdele', '5,0 mm skive Ml. forr. remskivehalvdele', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 12 i stelnummeret er "3" og angiver maksimal hastighed = 30 km/t.', 'Tegn 12 i stelnummeret er "4" og angiver maksimal hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'giantcolambros' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'giantco lambros', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'HY50QT-20A', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.thansen.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '1PE40QMB', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,84', 'kw', '', '(ifølge 30 og 45 km/t typegodkendelse)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50', '12', '', '')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', '', '', '', '')
      ,'bremserbag'        => ens('bremser', '', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LNGTEBLL49C301 LNGTEBLL19C301 LNGTEBLL59C301 LNGTEBLL69C301431 (lille knallert)', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '10,5 mm bøsning i forreste remskive', '6,8 mm bøsning i forreste remskive', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 12 i stelnummeret er "3" og angiver den maksimale hastighed = 30 km/t.', 'Tegn 12 i stelnummeret er "4" og angiver den maksimale hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'giantcospartan' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'giantco spartan', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'HY50QT-20', 'd3 (30 km/t)', 'd4 (45 km/t)', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.thansen.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '1PE40QMB', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,84', 'kw', '', '(ifølge 30 og 45 km/t typegodkendelse)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.50', '12', '', '')
      ,'fælgbag'           => ens('fælg', '3.50', '12', '', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', '', '', '', '')
      ,'bremserbag'        => ens('bremser', '', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '', '')
      ,'gear'              => ens('olie', '', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LNGTEBLL39C300 LNGTEBLLX9C300 LNGTEBLL99C300 LNGTEBLL98C300 LNGTEBLL18C300 (lille knallert)', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '10,5 mm bøsning i forreste remskive', '6,8 mm bøsning i forreste remskive', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 12 i stelnummeret er "3" og angiver den maksimale hastighed = 30 km/t.', 'Tegn 12 i stelnummeret er "4" og angiver den maksimale hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'giantcosprint' => array(

   'generelt'              => array(
       'model'             => ens('model', 'giantco sprint', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'giantco sprint SE 3 D23', '', '')
      ,'scootertype'       => ens('scootertype', 'HY50QT-3SE', '', '')
      ,'varianter'         => ens('varianter', 'giantco sprint sport', '', '')
      ,'pris'              => ens('pris', '4999', '6999', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '')
      ,'farver'            => ens('farver', 'sort-blå sort-rød sort-gul', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.thansen.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Jiangmen Giantco 139QM', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,7', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '39', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,5', '', '')
      ,'ventiler'          => ens('ventiler', '2', 'SOHC', '')
      ,'ventiljustering'   => ens('ventiljustering', '0,05', '0,08', '(ifølge ?)') . '<br>' . ens('ventiljustering', '0,10', '0,10', '(ifølge thansen e-mail svar)', '')
      ,'kompression'       => ens('kompression', '10,5', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,5-1,82', 'kw', '6000')
      ,'moment'            => ens('moment', '2,9-3,5', 'nm', '3500')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK CR7HSA', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1650', '', '')
      ,'bredde'            => ens('bredde', '615-725', '', '')
      ,'højde'             => ens('højde', '1040-1180', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1200', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '91', 'blyfri', '')
      ,'benzintank'        => ens('benzintank', '6,4', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '')
      ,'dækfor'            => ens('dæk1', '100', '60', '12', '')
      ,'dækbag'            => ens('dæk1', '100', '60', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '1,75', 'kgcm2', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,00', 'kgcm2', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'hydraulisk teleskopgaffel', '', '60', '')
      ,'affjedringbag'     => ens('affjedringbag', 'hydraulisk med fjeder', '', '30', '')
      ,'bremserfor'        => ens('bremser', 'skive', '155', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '4', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '')
      ,'generator'         => ens('generator', '', '', '')
      ,'sikring'           => ens('sikring', '15', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '10W-40', 'API : SE, SF eller SG', '0,8', '0,7')
      ,'gear'              => ens('olie', '80', '', '0,150', '')
      ,'forgaffel'         => ens('olie', '5 eller 10', '', '0,050')
      ,'kølervæske'        => ens('kølervæske', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', '', '')
      ,'kobling'           => ens('kobling', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LNGTGBDL89C LNGTGBDL79C304', 'LNGTGBDL38C', 'LBX (1999)', 'LNGTGBDL48C, LNGTGBDL77C (lille knallert), LNGTGBDL46C (lille knallert), LNGTGBDL87C LNGTGBDL99C303 LNGTGBDL17C309 (lille knallert) LNGTGBDL37C302235 (SPRINT SE, 3 SE D23 E15465-01)')
      ,'udstødning'        => ens('udstødning', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '')
      ,'vægttør'           => ens('vægttør', '73-80', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '80', '', '')
      ,'vægttotal'         => ens('vægttotal', '233', '', '')
      ,'bæreevne'          => ens('bæreevne', '160', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'svamp 2 lag', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '69,5-78', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', 'T. Hansen Gruppen A/S', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Giantco Motorcycle Co., Ltd.', '', '')
      ,'andet'             => ens('andet', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '6,5 eller 9,0 mm skive mellem forreste remskive halvdele', 'Mellem forreste remskivehalvdele er monteret en bøsning med brystbredde 2,5 eller 5,0 mm', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 12 i stelnummeret er 3 og angiver den maksimale hastighed = 30 km/t', 'Tegn 12 i stelnummeret er 4 og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'giantcostealth' => array(

   'generelt'              => array(
       'model'             => ens('model', 'giantco stealth', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', 'HY50QT-10', 'D4', '')
      ,'varianter'         => ens('varianter', '', '', '')
      ,'pris'              => ens('pris', '6999', '8999', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '')
      ,'farver'            => ens('farver', 'blå sølv', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.thansen.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '1P39QMB', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,5-49,6', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '39', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,5-42', '', '')
      ,'ventiler'          => ens('ventiler', '2', 'SOHC', '')
      ,'ventiljustering'   => ens('ventiljustering', '0,10', '0,10', '(ifølge thansen e-mail svar)', '')
      ,'kompression'       => ens('kompression', '10,4-10,5', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,11', 'kw', '', '(ifølge typegodkendelse)') . '<br>' . ens('maxeffektogheste', '1,5', 'kw', '6000', '(ifølge brugermanual)') . '<br>' . ens('maxeffektogheste', '2,6', 'kw', '7000', '(ifølge thansen)')
      ,'moment'            => ens('moment', '2,5', 'nm', '6500') . '<br>' . ens('moment', '3,5', 'nm', '13500', '(ifølge brugermanual)') . '<br>' . ens('moment', '3,9', 'nm', '6000', '(ifølge thansen)')
      ,'karburator'        => ens('karburator', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK CR7HSA', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1730-1830', '', '')
      ,'bredde'            => ens('bredde', '645-680', '', '')
      ,'højde'             => ens('højde', '1130-1180', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1200-1270-1280', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '')
      ,'benzintank'        => ens('benzintank', '4,2-5', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2,75', '', 'aluminium', '(ifølge thansen.dk)') . '<br>' . ens('fælg', '3,50', '12', '', '(ifølge typegodkendelse)')
      ,'fælgbag'           => ens('fælg', '2,75', '', 'aluminium', '(ifølge thansen.dk)') . '<br>' . ens('fælg', '3,50', '12', '', '(ifølge typegodkendelse)')
      ,'dækfor'            => ens('dæk1', '110', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '120', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '1,90', 'kgcm2', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,30', 'kgcm2', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'hydraulisk teleskopgaffel', '', '')
      ,'affjedringbag'     => ens('affjedringbag', 'hydraulisk', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '190', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '5', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '')
      ,'generator'         => ens('generator', '', '', '')
      ,'sikring'           => ens('sikring', '15', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '')
      ,'lysfor'            => ens('lys', '12', '35/35', '2')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '12', '21/5', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '4')
      ,'lyskontrolblink'   => ens('lys', '12', '3', '2')
      ,'lyskontrollangt'   => ens('lys', '12', '5', 'måske 2')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '10W40', 'API : SE, SF, SG eller SL/CF', '0,7')
      ,'gear'              => ens('olie', '', '', '')
      ,'forgaffel'         => ens('olie', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', '', '')
      ,'kobling'           => ens('kobling', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LNGTGBDL58C (lille knallert)', 'LNGTGBDL79C LNGTGBDL89C302 LNGTGBDL69C304 LNGTGBDL28C302 LNGTGBDL58C301 LNGTGBDL99C304 (lille knallert)', 'LNGTGBDLX9C404361 (stor)', 'LNGTGBDL68C302876')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '')
      ,'vægttør'           => ens('vægttør', '90', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '240', '', '')
      ,'bæreevne'          => ens('bæreevne', '150', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '')
      ,'støj'              => ens('støj', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', 'T. Hansen Gruppen A/S', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Giantco Motorcycle Co., Ltd.', '', '')
      ,'andet'             => ens('andet', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '9,0 mm skive mellem forreste remskive', '5,0 mm skive mellem forreste remskive', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', 'standard hoveddyse : 86', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 12 i stelnummeret er "3" og angiver den maksimale hastighed = 30 km/t.', 'Tegn 12 i stelnummeret er "4" og angiver den maksimale hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'giantcovenus' => array(

   'generelt'              => array(
       'model'             => ens('model', 'giantco venus', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '')
      ,'scootertype'       => ens('scootertype', 'HY50QT-6', '', '')
      ,'varianter'         => ens('varianter', 'giantco venus', 'giantco venus II', '')
      ,'pris'              => ens('pris', '6999', '7999', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '')
      ,'farver'            => ens('farver', 'sort-sølv hvid', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.thansen.dk', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'HY139QMB', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,7', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '')
      ,'boring'            => ens('boring', '39', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,5', '', '')
      ,'ventiler'          => ens('ventiler', '2', 'SOHC', '')
      ,'ventiljustering'   => ens('ventiljustering', '0,05', '0,08', '(ifølge ?)') . '<br>' . ens('ventiljustering', '0,10', '0,10', '(ifølge thansen e-mail svar)', '')
      ,'kompression'       => ens('kompression', '10,5-10,55', '', '')
      ,'tomgang'           => ens('tomgang', '1700', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,82', 'kw', '6000') . '<br>' . ens('maxeffektogheste', '2,6', 'kw', '7000', '(ifølge thansen)')
      ,'moment'            => ens('moment', '2,9', 'nm', '6000') . '<br>' . ens('moment', '3,9', 'nm', '6000', '(ifølge thansen)')
      ,'karburator'        => ens('karburator', '', '19', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK CR7HSA', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1720', '', '')
      ,'bredde'            => ens('bredde', '630', '', '')
      ,'højde'             => ens('højde', '1080', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '760', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1200', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '91', 'blyfri', '')
      ,'benzintank'        => ens('benzintank', '6', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.15', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '2.15', '', 'aluminium/stål')
      ,'dækfor'            => ens('dæk2', '3.50', '10', 'slangeløst 4PR', '')
      ,'dækbag'            => ens('dæk2', '3.50', '10', 'slangeløst 4PR', '')
      ,'dæktrykfor'        => ens('dæktryk', '1,75', 'kgcm2', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,00', 'kgcm2', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'hydraulisk teleskopgaffel', '', '60', '')
      ,'affjedringbag'     => ens('affjedringbag', 'hydraulisk med fjeder', '', '30', '')
      ,'bremserfor'        => ens('bremser', 'skive', '155-160', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '4', '', '(ifølge brugermanual)') . '<br>eller<br>' . ens('starterbatteri', '12', '7', 'vedligeholdelsesfrit 150x85x95')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '')
      ,'generator'         => ens('generator', '', '', '')
      ,'sikring'           => ens('sikring', '15', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '')
      ,'lysfor'            => ens('lys', '', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '10W-40', 'API : SE, SF eller SG', '0,8', '0,7') . "<br><br>" . ens('olie', '', '', '0,6', 'cirka 0,6') . ' (ifølge brugermanul)'
      ,'gear'              => ens('olie', '80', '', '0,150', '')
      ,'forgaffel'         => ens('olie', '5 eller 10', 'mineralsk', '0,050', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', '', '')
      ,'kobling'           => ens('kobling', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'LNGTEBDL68C', 'LNGTEBDL59C', 'LNGTEBDL08C300', 'LNGTEBDL59C300 LNGTEBDL98C300 (lille) LNGTEBDL4AC300 (lille venus II)')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '')
      ,'vægttør'           => ens('vægttør', '73', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '78', '', '')
      ,'vægttotal'         => ens('vægttotal', '233', '', '')
      ,'bæreevne'          => ens('bæreevne', '158', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'svamp', '2 lag', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'DOT 4', '', '')
      ,'støj'              => ens('støj', '69,5-78', '3000', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '')
      ,'importør'          => ens('importør', 'T. Hansen Gruppen A/S', '', '')
      ,'producent'         => ens('producent', 'Jiangmen Giantco Motorcycle Co., Ltd.', '', '')
      ,'andet'             => ens('andet', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '9,0 mm bøsning mellem forreste remskiver', '5,0 mm bøsning mellem forreste remskiver', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 12 i stelnummeret er "3" og angiver den maksimale hastighed = 30 km/t.', 'Tegn 12 i stelnummeret er "4" og angiver den maksimale hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'motor reservedele'                => 'giantco_motor_reservedele.pdf'
   ,'adskillelse og samling af giantco motor (cylinder/topstykke)'             => 'adskillelse_og_samling_af_giantco_motor_cylinder_topstykke.pdf'
   ,'e-Buddy brugermanual'             => 'giantco_ebuddy_brugermanual.pdf'
   ,'e-Buddy el diagram'               => 'giantco_ebuddy_eldiagram.jpg'
   ,'e-Buddy el diagram experimental'  => 'giantco_ebuddy_eldiagram_experimental.pdf'
   ,'e-Buddy el diagram experimental (SVG)'  => 'giantco_ebuddy_eldiagram_experimental.svg'
   ,'PT486A oplader manual'            => 'pt486a.pdf'
   ,'greensaver HB48062 oplader manual'        => 'greensaver_hb48062.pdf'
   ,'greensaver HB48062 oplader manual dansk'  => 'greensaver_hb48062_dansk.pdf'
   ,'g-Buddy brugermanual'             => 'giantco_gbuddy_brugermanual.pdf'
   ,'sprint brugermanual'              => 'giantco_sprint_brugermanual.pdf'
   ,'sprint reservedele'               => 'giantco_sprint_reservedele.pdf'
   ,'stealth brugermanual'             => 'giantco_stealth_brugermanual.pdf'
   ,'venus brugermanual'               => 'giantco_venus_brugermanual.pdf'
   ,'venus reservedele'                => 'giantco_venus_reservedele.pdf'
   ,'giantco el diagram'               => 'giantco_eldiagram.pdf'
   ,'giantco el diagram experimental'  => 'giantco_eldiagram_experimental.pdf'
   ,'giantco 2takt el diagram'         => 'giantco_2t_eldiagram.pdf'
   ,'giantco katalog 2009 engelsk'     => 'giantco_katalog_2009_engelsk.pdf'
   ,'giantco katalog 2010 engelsk'     => 'giantco_katalog_2010_engelsk.pdf'
   ,'giantco katalog 2011 engelsk'     => 'giantco_katalog_2011_engelsk.pdf'
   ,'giantco katalog 2012 engelsk'     => 'giantco_katalog_2012_engelsk.pdf'
   ,'giantco filer med kodebeskyttelse (jeg kender ikke koden)' => 'giantco_kodebeskyttet.zip'

),'typegodkendelser' => array(
    'E-Buddy 30 km/t E17906 (e4*2002/24*2403)'  => 'typegodkendelser/Giantco%20e-Buddy%20%28E17906%29%20udstedt%2014-12-2009.pdf'
   ,'E-Buddy 45 km/t E17907 (e4*2002/24*2403)'  => 'typegodkendelser/Giantco%20e-Buddy%20%28E17907%29%20udstedt%2014-12-2009.pdf'
   ,'G-Buddy 30 km/t E17894 (e4*92/61*0172)'    => 'typegodkendelser/Giantco%20g-Buddy%20%28E17894%29%20udstedt%2026-11-2009.pdf'
   ,'G-Buddy 45 km/t E17895 (e4*92/61*0172)'    => 'typegodkendelser/Giantco%20g-Buddy%20%28E17895%29%20udstedt%2026-11-2009.pdf'
   ,'G-10 30 km/t E18075 (e4*2002/24*1785)'     => 'typegodkendelser/Giantco%20G10%20%28E18075%29%20udstedt%2010-03-2010.pdf'
   ,'G-10 45 km/t E18074 (e4*2002/24*1785)'     => 'typegodkendelser/Giantco%20G10%20%28E18074%29%20udstedt%2010-03-2010.pdf'
   ,'Lambros 30 km/t E17555 (e4*2002/24*1785)'  => 'typegodkendelser/Giantco%20Lambros%20%28E17555%29%20udstedt%2010-03-2009.pdf'
   ,'Lambros 45 km/t E17556 (e4*2002/24*1785)'  => 'typegodkendelser/Giantco%20Lambros%20%28E17556%29%20udstedt%2010-03-2009.pdf'
   ,'Spartan 30 km/t E17271 (e4*2002/24*1785)'  => 'typegodkendelser/Giantco%20Spartan%20%28E17271%29%20udstedt%2029-10-2008.pdf'
   ,'Spartan 45 km/t E17270 (e4*2002/24*1785)'  => 'typegodkendelser/Giantco%20Spartan%20%28E17270%29%20udstedt%2023-10-2008.pdf'
   ,'Sprint 30 km/t E15465 (e4*92/61*0172)'     => 'typegodkendelser/Giantco%20Sprint%20SE%20%28E15465%29%20udstedt%2001-06-2006.pdf'
   ,'Sprint 30 km/t E15465 (e4*92/61*0172) 2'   => 'typegodkendelser/Giantco%20Sprint%20SE%20%28E15465%29%20udstedt%2001-06-2006_2.pdf'
   ,'Sprint 45 km/t E14667 (e4*92/61*0172)'     => 'typegodkendelser/Giantco%20Sprint%20SE%20%28E14667%29%20udstedt%2021-11-2005.pdf'
   ,'Sprint 45 km/t E14667 (e4*92/61*0172) 2'   => 'typegodkendelser/Giantco%20Sprint%20SE%20%28E14667%29%20udstedt%2021-11-2005_2.pdf'
   ,'Stealth 30 km/t E16843 (e4*2002/24*1785)'  => 'typegodkendelser/Giantco%20Stealth%20%28E16843%29%20udstedt%2008-01-2008.pdf'
   ,'Stealth 45 km/t E16844 (e4*2002/24*1785)'  => 'typegodkendelser/Giantco%20Stealth%20%28E16844%29%20udstedt%2008-01-2008.pdf'
   ,'Venus 30 km/t E15917 (e4*2002/24*0330)'    => 'typegodkendelser/Giantco%20Venus%20%28E15917%29%20udstedt%2031-10-2006.pdf'
   ,'Venus 45 km/t E15918 (e4*2002/24*0330)'    => 'typegodkendelser/Giantco%20Venus%20%28E15918%29%20udstedt%2031-10-2006.pdf'
   ,'Venus II 30 km/t E18077 (e4*2002/24*0330)' => 'typegodkendelser/Giantco%20Venus%20II%20%28E18077%29%20udstedt%2010-03-2010.pdf'
   ,'Venus II 45 km/t E18076 (e4*2002/24*0330)' => 'typegodkendelser/Giantco%20Venus%20II%20%28E18076%29%20udstedt%2010-03-2010.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false, $databasecenter_b);

?>
