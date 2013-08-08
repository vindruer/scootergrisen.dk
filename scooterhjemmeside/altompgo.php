<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "PGO 50 cm³ og elektrisk scootere";
$overskrift = "PGO";
$metadescription = "billeder, specifikationer, manualer, el diagrammer, reservedele og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$databasecenter_b = array(

'
Om PGO
' => '
'.visbilled('1', 'billed2379.jpg', 'PGO scooters logo', false, null, null, null, true).'
PGO er ifølge importøren '.ahref('http://www.c-reinhardt.dk/', 'C. Reinhardt A/S').' danmarks mest solgte scooter mærke selvom T Hansen påstår det samme om Giantco.
De skriver i PGO scooter katalogerne at PGO Hot og PGO Big Max er de mest solgte scootere i danmark.
'

,'
modeller der ligner hinanden
' => '
Mange af modellerne minder meget om hinanden men jeg har valgt at vise et billede af hver så man kan se forskellen.

'.afsnit('Hot og Big Max','
Ser ud til at være identisk borset fra hastigheden.
Hot er 30 km/t.
Big Max er 45 km/t.
').'

'.afsnit('Dr. Big og T-Rex','
Ser ud til at være identisk borset fra hastigheden.
Dr Big er 30 km/t.
T-Rex er 45 km/t.
').'

'.afsnit('Ligero, Rodoshow og Bubu','
Ligner hinanden.
PE = Bubu, Rodoshow (rodoshow har vist en mere afrundet front end ligero som er lidt kantet)
PA = Ligero
').'

'.afsnit('Ligero RS, Its magic og Galaxy','
Ligner hinanden.
').'

'.afsnit('under modeller','
Eksempelvis fås PGO Hot i 3 udgaver :
'.afsnit('','
PGO Hot (c reinhardt kalder den classic)
PGO Hot 12" (c reinhardt kalder den special) (3 ege fælge ?)
PGO Hot SP (6 ege fælge ?)
').'
[blank] = 10" stålfælge, ensfarvet skjolde.
12" = 12" aluminiumsfælge.
SP = 12" aluminiumsfælge, 2 farvet skjolde, 2 stempler i for bremsecaliper, wave bremseskive foran, kraftigere forgaffel.
(SP er måske kort for SPecial eller SPort ?)

Og så er der nogen modeller der ender på RS.
For eksempel PGO Ligero RS.
RS = Ved ikke hvad det står for.

Scootertypen for PGO PMX Naked kan angives som PMS-50DN. 
DN = Naked (der ikke er plastik skjolde oppe omkring styret/indstumenterne).


PGO kalder forskellige versioner for "special edition" og "economic version".
"economic version" er noget med forhjul/forbremse (lille smal rund) og bagagebærer (tyndt metalrør) at gøre. Måske en billigudgave.
').'
'

,'
motortyper
' => '
Det ser ud til de fleste PGO med 50 cm³ motor har motortypen P2.
Der er også nogle som har P5.
Jeg har også læst om motortypen P1 i en ældre manual.

Der ser ud til at P betyder at det er en 50 cm³ motor.
'.visbilled('1', 'billed3179.jpg', 'pgo motortype motornummer P5', false, true).'
'.visbilled('1', 'billed3178.jpg', 'pgo motortype motornummer P2', false, true).'
'.visbilled('1', 'billed3404.jpg', 'pgo motortype motornummer P0', false, true).'
P9 er vist 82 cm³ motor.
På 100, 125 og 150 cm³ motor starter motortypen med C.
For eksempel C1E5.
'.visbilled('1', 'billed3180.jpg', 'pgo motortype motornummer', false, true).'

'.afsnit('under modeller','
P1 (Big Max PS 21-4-1999)
P2 (G-Max, TR-3)
P2 ERA (t-rex 45, big max, big max post, PMX, PMX sport + naked)
P2 ERB (dr big 30)
P2 ERC (Hot PMPS) måske 5-7 kg lettere end ERB
P5 (Ligero, Bubu 24-5-2002)
PB192 (Libra, X-Hot)
E1 (Comet 45 km/t)
E1A (Comet 30 km/t)
').'

De første 2 tegn på motoren er model type.
Resten af tegnene er produktions serie nummer.
'

,'
sportsudstødning
' => '
I PGO scooterkataloget 2012-2013 er der billeder hvor man kan se der er knækudstødning på.

Ved Hot SP og Big Max SP : C Reinhardt skriver i en rettet udgave af kataloget at Sportsudstødning kun på SPL2 modellerne.

SPL1 koster 11495.
SPL2 koster 11995.

Ved G-Max står "Sportsudstødning, kun på sort & hvid/grå model".
'

,'
erhvervsmodel
' => '
Der findes erhvervsmodeller som er lavet til at bære tasker.

Her ses en erhvervsmodel med sorte skjolde.
'.visbilled('1', 'billed2430.jpg', 'pgo hot post model', false, true).'

Her ses en erhvervsmodel som Post danmark bruger med orange skjolde.
'.visbilled('1', 'billed2475.jpg', 'pgo post model', false, true).'
Og her en elektrisk model.
'.visbilled('1', 'billed3550.jpg', 'elektrisk pgo post model', false, true).'

Det er vist kun PGO Hot og PGO Big Max der er lavet som erhvervsmodel til tasker.
'

,'
andre model typer
' => '
PGO - UOPLYST :
   RFVPAUB3061001
   RFVPAUB3071002
   RFVPAUA30A1001
   RFVPAUB3091003

PGO - HOT 50 PMPS lille knallert :
   RFVPMPS2291218
   RFVPMPS2291218
   RFVPMPS2291216
   RFVPMPS2291217
   RFVPMPS22A1219
   RFVPMPS2291218
   RFVPMPS2291218
   RFVPMPS22A1219
   RFVPMPS22A1219
   RFVPMPS22A1218
   RFVPMPS22A1219
'

);

$databasecenter = array(

'pgobigmax' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO big max', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'PS-50', '', '', '')
      ,'varianter'         => ens('varianter', 'post model', '', '', '')
      ,'pris'              => ens('pris', '9995', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', 'sort rød grå', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'P2', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'separat pumpe', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP7HS', 'NGK BPR7HS', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1785', '', '', '')
      ,'bredde'            => ens('bredde', '670', '', '', '')
      ,'højde'             => ens('højde', '1104', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '780', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1195', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '5,1-5,5', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', 'stål')
      ,'fælgbag'           => ens('fælg', '', '', '', 'stål')
      ,'dækfor'            => ens('dæk1', '120', '90', '10', '')
      ,'dækbag'            => ens('dæk1', '130', '90', '10', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '3', '', 'YT4L-BS')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '18/18', '2', 'kort og langt (eller 35W x 1 ?)')
      ,'lysbagbremse'      => ens('lys', '12', '5/21', '1', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '4', '(eller 16W x 4)')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '30', 'FC', '1,1', '')
      ,'gear'              => ens('olie', '140', '', '0,110', '0,90')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', 'med kilerem', '', '')
      ,'kobling'           => ens('kobling', 'tør centrifugal', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFVPMPS2141', 'RFVPMPS2151', 'RFVPMPS22B1', 'PGS0PS50618160 PG0PS50618288 PG0PS50618840 (ikke vin. stor knallert 1998 S07476-01) RFVPSPS5011002 (2001)')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '80-87', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'tørt papir', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '', '')
      ,'producent'         => ens('producent', 'Motive Power Industry Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '4mm bøsning mellem forreste remskive', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', 'Resonatorrør påsvejst forreste udstødningsrør ø 22 mm, længde 280 mm.', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', 'Tegn nr. 9 i stelnummer er 1, det angiver at hastigheden er 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgobigmax12' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'som Big Max bare med 12 tommer hjul og aluminiumsfælge med 3 ege.', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO big max 12', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '10995', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', 'hvid sort rød grå', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '12', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '', '12', '', 'aluminium')

   )

),'pgobigmaxnaked' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO big max naked', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '11995', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', 'hvid-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   )

),'pgobigmaxsp' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'SP modellen er med 2 farvet skjolde, wave bremseskive, kraftigere forgaffel og det ser ud til der er 2 stempler i bremsecaliperen', '6 ege', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO big max SP', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'PS-50', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '11495', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', 'rød-sort blå-sort brun-sort grå-sort sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '120', '90', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '90', '12', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', 'wave form')
      ,'bremserbag'        => ens('bremser', '', '', '', '')

   )

),'pgohot' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'som Big Max bortset fra hastigheden', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO Hot', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'PMPS', '', '', '')
      ,'varianter'         => ens('varianter', 'post model', '', '', '')
      ,'pris'              => ens('pris', '9995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFVPMPS22A1 (lille knallert)', 'RFVPMPS22B1', 'RFVPMPS2271 (post)', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '8.00 mm bøsning Forreste variator', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', 'nej', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', 'muligvis rør eller tragt af en slags', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', 'muligvis plade med lille hul. Eller tragt ved membran (efter 2003/2004)', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', 'muligvis blindrør', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 8 i stelnummeret er 2 og angiver den maksimale hastighed = 30 km/t', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgohot12' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'som Big Max 12 bortset fra hastigheden', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO Hot 12', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '10995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   )

),'pgohotnaked' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO hot naked', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '11995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   )

),'pgohotsp' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'som Big Max SP bortset fra hastigheden', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO Hot SP', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '11495', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   )

),'pgotrex' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO t-rex', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'CP-50', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '13995', '14995', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'P2', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '6,8', '', '', '')
      ,'tomgang'           => ens('tomgang', '1900', '100', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'automatisk separat pumpe', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP7HS', 'NGK BPR7HS', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1870', '', '', '')
      ,'bredde'            => ens('bredde', '815', '', '', '')
      ,'højde'             => ens('højde', '1286', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '770', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1284', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '6,7', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.00', '12', '', '') . ' eller ' . ens('fælg', '3.50', '12', '', '')
      ,'fælgbag'           => ens('fælg', '3.00', '12', '', '') . ' eller ' . ens('fælg', '3.50', '12', '', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '120', '70', '12', '') . ' eller ' . ens('dæk1', '130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '2,0', 'kgcm2', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,0', 'kgcm2', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskop', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '190', 'hydraulisk', '2 stempler')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '41', 'grader', 'til begge sider', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '18', '2', '')
      ,'lysbagbremse'      => ens('lys', '12', '10/3', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '4', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '30', 'FC', '1,0', '')
      ,'gear'              => ens('olie', '140', '', '0,110', '0,90')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', 'med kilerem', '', '')
      ,'kobling'           => ens('kobling', 'tør centrifugal', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '52/13 og 44/13', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'stål rør', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFVCPCP2171', 'RFVCPCPP211003 (stor knallert 2001)', '', '')
      ,'udstødning'        => ens('udstødning', 'diffusible absorption', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '99', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'SAEJ-1703F-DOT3 & DOT4', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '', '')
      ,'producent'         => ens('producent', 'Motive Power Industry Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '4,0 mm bøsning mellem forreste remskive<br>eller<br>Afstandsskive, 5,5 mm tykkelse, mellem forreste remskivehalvdele<br>(2001 : Mellem bageste remskivehalvdele er monteret en bøsning med brystbredde på 7,1 mm. (i følge typegodkendelse. Dette er måske forkert, det skulle måske have stået mellem de forreste remskiver og ikke de bagerste))', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', 'Elektronisk tændingsenhed mrk. SR-03B', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', 'tragt ved membran (efter 2003-2004)', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '(2001 : I lyddæmperrørets flange (ved motor) er isvejst en bøsning med indv. diam. 14 mm, længde 20 mm. Lyddæmperens fastgørelse er sikret med specialbolte.)<br>eller<br>(2003 : Resonatorrør påsvejst forreste udstødningsrør ø22 x 280 mm og afstandsskive mellem)', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', 'Tegn 9 i stelnummeret er 1 og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgotrexsp' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'som T-Rex. SP er med 2 farvet skjolde, wave bremseskive', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO t-rex SP', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '14995', '', '', '')
      ,'hastighed'         => ens('hastighed', '45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', 'wave form')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')

   )

),'pgodrbig' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'som T-Rex bortset fra hastigheden', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO dr big', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'CP', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '13995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFVCPCP22A1', 'RFVCPCP22B1', 'RFVCPCP2291203 (lille knallert)', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '8,0 mm bøsning Forreste variator', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', 'tragt ved membran (efter 2003-2004)', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 8 i stelnummeret er 2 og angiver den maksimale hastighed = 30 km/t', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgodrbigsp' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'som T-Rex SP bortset fra hastigheden', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO dr big SP', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '14995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgotrike' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'PGO Trike er en ombygget PGO T-Rex', 'der kan købes en masse ekstra udstyr som ryglæn, fodbremse, stokkeholder alt efter behov', 'på 45 km/t modellen skulle det være tilladt at sidde 2 personer', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO trike', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'PGO TR3-50', '', '', '')
      ,'scootertype'       => ens('scootertype', 'CP-50', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '39995', '42995', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort grå', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', 'http://www.scootcar.dk', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'P2', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'separat pumpe', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP7HS', 'NGK BPR7HS', 'Champion L82YC', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1930', '', '', '')
      ,'bredde'            => ens('bredde', '880', '', '', '')
      ,'højde'             => ens('højde', '1145', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '770-858', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1385', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '6,7', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '2 styks')
      ,'dæktrykfor'        => ens('dæktryk', '2,0', 'kgcm2', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '1,5', 'kgcm2', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '2 stempler. med parkeringsbremse (der er en dut man kan låse det venstre bremsegreb med)')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '2 styks')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '3', '', 'YTX4L-BS')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '18/18', '2', '(eller 35/35W x 1)')
      ,'lysbagbremse'      => ens('lys', '12', '5/21', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '4', '')
      ,'lyskontrolblink'   => ens('lys', '12', '1,7', '1', '')
      ,'lyskontrollangt'   => ens('lys', '12', '1,7', '1', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '12', '1,7', '2', 'speedometerlys')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '30', 'FC', '1,1', '')
      ,'gear'              => ens('olie', '140', '', '0,110', '0,90')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', 'med kilerem og differentiale gear', '', '')
      ,'kobling'           => ens('kobling', 'tør centrifugal', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFVTR345 (45 km/t) (ifølge typegodkendelse)', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '120-133', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'tørt', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'FMVSS DOT 3 eller SAE J1703', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', 'ja', 'er vist nok monteret som standard', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '', '')
      ,'producent'         => ens('producent', 'Motive Power Industry Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', 'Differential gear olie total : 0,330 liter, udskift : 0,300 liter', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', 'Resonatorrør påsvejst forreste udstødningsrør ø22 x 280 mm', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', 'Tegn 8 i stelnummeret er 5 og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', 'bakgearet har begrænset hastighed', '', '', '')

   )

),'pgop3knallert' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO P3 knallert', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'PM-50', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '27495', '', 'måske er prisen uden moms. hvis prisen er uden moms vil den koste 34.368,75', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,6', 'hk', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'PD30', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'seperat', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP7HS', 'NGK BPR7HS', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1890', '', '', '')
      ,'bredde'            => ens('bredde', '790', '', '', '')
      ,'højde'             => ens('højde', '1110', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '740', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '107', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1345', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '91-95', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '5,1', '', '', '')
      ,'forbrug'           => ens('forbrug', '20-25', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', 'magnesium ? ligner godt nok stål')
      ,'fælgbag'           => ens('fælg', '', '', '', 'magnesium ? ligner godt nok stål')
      ,'dækfor'            => ens('dæk1', '120', '90', '10', '')
      ,'dækbag'            => ens('dæk1', '130', '90', '10', '')
      ,'dæktrykfor'        => ens('dæktryk', '1,30', 'kgcm2', '', '') . ' eller ' . ens('dæktryk', '1,5-1,8', 'bar', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '1,50', 'kgcm2', '', '') . ' eller ' . ens('dæktryk', '1,5-1,8', 'bar', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', '', '', '', '')
      ,'bremserbag'        => ens('bremser', '', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '2,175', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '4', 'YT4L-BS', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', 'svinghjulsmagnet', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '12', '18/18', '1', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '12', '5', '2', '')
      ,'lysbremse'         => ens('lys', '12', '15', '2', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '4', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '12', '1,7', '2', 'speedometerlys')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '1,1', '')
      ,'gear'              => ens('olie', '80W90', '', '0,130 ?', '0,110 ?')
      ,'forgaffel'         => ens('olie', '10W', '', '0,063', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', 'tør', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '')
      ,'vægttør'           => ens('vægttør', '110', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '120', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'oliefugtet filter', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'DOT 3 eller DOT 4', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'måske Medico Nord', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', 'indstigningshøjde : 31 cm', 'afstand mellem bagskærme : 39 cm', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgop3magnum' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO P3 Magnum', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'CP-50', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '28495', '', 'måske er prisen uden moms. hvis prisen er uden moms koster den 35.618,75', 'Jeg har fået at vide at en som har en at den kostede nogen og 60.000,-')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,6', 'hk', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'PD30', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'seperat', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP7HS', 'NGK BPR7HS', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '2040', '', '', '')
      ,'bredde'            => ens('bredde', '790', '', '', '')
      ,'højde'             => ens('højde', '1150', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '810', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '107', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1445', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '91-95', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '6,7', '', '', '')
      ,'forbrug'           => ens('forbrug', '20-25', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', 'magnesium ? ligner godt nok aluminium')
      ,'fælgbag'           => ens('fælg', '', '', '', 'magnesium ? ligner godt nok aluminium')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '1,25', 'kgcm2', '', '') . ' eller ' . ens('dæktryk', '1,5-1,8', 'bar', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '1,75', 'kgcm2', '', '') . ' eller ' . ens('dæktryk', '1,5-1,8', 'bar', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', '', '', '', '')
      ,'bremserbag'        => ens('bremser', '', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '3,400', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '4', 'YT4L-BS', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', 'svinghjulsmagnet', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '12', '18/18', '1', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '12', '5', '2', '(sidder øverst på bagskærmene)')
      ,'lysbremse'         => ens('lys', '12', '15', '2', '(sidder øverst på bagskærmene)')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '4', '(sidder øverst på bagskærmene)')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '12', '1,7', '2', 'speedometerlys')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '1,1', '')
      ,'gear'              => ens('olie', '80W90', '', '0,130 ?', '0,110 ?')
      ,'forgaffel'         => ens('olie', '20W', '', '0,090', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', '', 'og derefter kæde', '')
      ,'kobling'           => ens('kobling', 'tør', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '')
      ,'vægttør'           => ens('vægttør', '120', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '120', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'oliefugtet filter', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'DOT 3 eller DOT 4', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', 'kan fås med bakgear men er vist ikke standard', '', '')
      ,'importør'          => ens('importør', 'måske Medico Nord', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', 'indstigningshøjde : 31 cm', 'afstand mellem bagskærme : 39 cm', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'handitrikeclassic' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'Classic (Big Max)', 'Sport (PMX)', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'handitrike classic', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'STR', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '30625', '', '', '(30 km/t er angivet til 24500,- kroner uden moms)')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'PGO P2', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,0', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,0', 'kw', '', '(i følge 45 km/t typegodkendelse')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1710', '', '', 'Classic (Big Max)') . ens('længde', '1807', '', '', 'Sport (PMX)')
      ,'bredde'            => ens('bredde', '900', '', '', '')
      ,'højde'             => ens('højde', '810 eller 1104', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1195', '', '', 'Classic (Big Max)') . ens('akselafstand', '1173', '', '', 'Sport (PMX)')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.5', '10', '', '') . ens('fælg', '3.0', '12', '', '')
      ,'fælgbag'           => ens('fælg', '3.5', '10', '', '') . ens('fælg', '3.0', '12', '', '')
      ,'dækfor'            => ens('dæk1', '120', '90', '10', '') . ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '90', '10', '') . ens('dæk1', '130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '190', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '', '2 styks')
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
       'stel'              => ens('stel', 'rørstel', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '100-104', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '270', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '171', '', '', '(bruger)')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'HandiConsult', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', 'sporvidde : 735 mm', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', 'elektronisk i tændingsmodul', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'handitrikecomfort' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'handitrike comfort 45 km/t er godkendt til 2 personer', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'handitrike comfort', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', 'handitrike comfort', 'handitrike comfort S (med andet sæde og ryglæn og armhvilere og vist også topboks', 'comfort R (med bakgear)', '')
      ,'pris'              => ens('pris', '', 'comfort 45 km/t 25.500 uden moms', 'comfort 28.500 uden moms 30 km/t', 'comfort R 29.800 uden moms 30 km/t')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'PGO P2', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,0', '', '', '')
      ,'køling'            => ens('køling', '', '', '', '')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,0', 'kw', '', '(i følge 45 km/t typegodkendelse)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1870-1890-1900', '', '', '')
      ,'bredde'            => ens('bredde', '858-900', '', '', '')
      ,'højde'             => ens('højde', '1125-1150', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1284', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '3.0', '12', '', '')
      ,'fælgbag'           => ens('fælg', '3.0', '12', '', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '190', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '110', '', '2 styks')
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
       'stel'              => ens('stel', 'rørstel', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', 'med katalysator', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '100-104', '', '', 'comfort') . ' ' . ens('vægttør', '120', '', '', 'comfort r')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '270', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '171', '', '', '(bruger)')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'HandiConsult', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', 'sporvidde : 735 mm', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', 'Elektronisk i tændingsmodul', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgogmax' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO g-max', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'PGO alloro', '', '', '')
      ,'scootertype'       => ens('scootertype', 'M2-50', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '15995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'P2', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'separat pumpe', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP7HS', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '820-840', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '7,5', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '2,0', 'kgcm2', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,0', 'kgcm2', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '3', 'vedligeholdelsesfrit', 'YTX4L-BS')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', 'svingshjulsmagnet')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35', '1', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '12', '5', '1', '')
      ,'lysbremse'         => ens('lys', '12', '21', '1', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '4', '')
      ,'lyskontrolblink'   => ens('lys', '12', '1,7', '1', '')
      ,'lyskontrollangt'   => ens('lys', '12', '1,7', '1', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '12', '1,7', '2', 'speedometerlys') . ' og ' . ens('lys', '12', '1,7', '1', 'olieadvardselslampe')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '30', 'FC', '1,0', '')
      ,'gear'              => ens('olie', '140 eller 85W-140', '', '0,110', '0,90')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', 'med kilerem', '', '')
      ,'kobling'           => ens('kobling', 'tør', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFVM2M230A1', 'RFVM2M23091', 'RFVM2M230B1 (lille knallert)', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '90-105', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'svamp', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'FMVSS DOT 3 eller SAE J1703', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '', '')
      ,'producent'         => ens('producent', 'Motive Power Industry Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '9,0 mm bøsning Forreste variator', '5,0 mm bøsning mellem forreste remskive', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '2004 : Skive i insugningen mellem cylinder og indsugningsrør med en begrænset lysning på ø 9,5 mm.', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '2004 : Resornatorrør påsvejst forreste udstødningsrør med L: 200 mm og ø: 22,0 mm.', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 8 i stelnummeret er 3 og angiver den maksimale hastighed = 30 km/t', 'Tegn 8 i stelnummeret er 5 og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgolibra' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO libra', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'PGO i\'me', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BF-50 B1', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '13995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'rød-sort hvid-sort blå-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'PB192', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'separat pumpe', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP7HS', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '780', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '6,0-7,0', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '2,0', 'kgcm2', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,0', 'kgcm2', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '3', '', 'YTX4L-BS')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', 'svingshjulsmaget')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/35', '1', 'kort/langt halogen')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '13,5', '0,41', '', '')
      ,'lysbremse'         => ens('lys', '13,5', '1,89', '', '') . ' og ' . ens('lys', '12', '5', '1', 'bag eller bremselys')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '13,5', '1,58', '', 'for') . ' og ' . ens('lys', '13,5', '1,45', '', 'bag')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '30', 'FC', '1,0', '')
      ,'gear'              => ens('olie', '140', '', '0,110', '0,90')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', 'med kilerem', '', '')
      ,'kobling'           => ens('kobling', 'tør centrifugal', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFVBFP24591', 'RFVBFP230B1', 'RFVBFP23091 RFVBFP23091000 (lille knallert)', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '')
      ,'vægttør'           => ens('vægttør', '98-101', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'svamp', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'FMVSS Dot3 or SAE J1703', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '', '')
      ,'producent'         => ens('producent', 'Motive Power Industry Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '9,0 mm bøsning I forreste variator', '5,0 mm bøsning I forreste variator', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn nr. 8 i stelnummeret er "3" og angiver den maksimale hastighed = 30 km/t.', 'Tegn nr. 8 i stelnummeret er "4" og angiver den maksimale hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgoxhot' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO x-hot', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'BF-50 B2', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '14995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'hvid-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'PB192', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'separat pumpe', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP7HS', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '780', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '6,0-7,0', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '110', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '120', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '2,0', 'kgcm2', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,0', 'kgcm2', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '3', '', 'YTX4L-BS')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', 'svingshjulsmaget')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '55/35', '1', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '13,5', '0,034', '', '')
      ,'lysbremse'         => ens('lys', '13,5', '0,66', '', '') . ' og ' . ens('lys', '12', '5', '1', 'bag eller bremselys')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '13,5', '1,58', '', 'for') . ' og ' . ens('lys', '13,5', '1,45', '', 'bag')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '30', 'FC', '1,0', '')
      ,'gear'              => ens('olie', '140', '', '0,110', '0,90')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', 'med kilerem', '', '')
      ,'kobling'           => ens('kobling', 'tør centrifugal', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFVB2P23091', 'RFVPMPS2261 (lille knallert, måske forkert stelnummer, er måske til big-max eller hot)', 'RFVB2P23091000', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '2', '', '', '')
      ,'vægttør'           => ens('vægttør', '98-101', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'svamp', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', 'FMVSS Dot3 or SAE J1703', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '', '')
      ,'producent'         => ens('producent', 'Motive Power Industry Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn nr. 8 i stelnummeret er "3" og angiver den maksimale hastighed = 30 km/t.', 'Tegn nr. 8 i stelnummeret er "4" og angiver den maksimale hastighed = 45 km/t.', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgorodoshow' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'Ligner PGO Ligero meget men PGO RodoShow er vist en ældre model. Frontskjoldet er mere blødt rundt på RodoShow og mindt under sædet er der en runding i skjoldene som er mere blød på RodoShow.', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO Rodoshow', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'PE', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '', 'set på cykelsti så mon ikke den i hvert fald har kunne fås som 30 km/t')
      ,'farver'            => ens('farver', 'rød', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '', '', '', '')
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
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
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
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '')
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
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
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
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgoligero' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'forskærm bevæger sig op og ned med hjulet... eller også gør den ikke men det står der noget om i diverse manualer... i modsætning til anden mod hvor der ikke er nogen skærm', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO ligero', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'PA-50', 'PA50DA', '', '')
      ,'varianter'         => ens('varianter', 'PGO new ligero', '', '', '')
      ,'pris'              => ens('pris', '9995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'rød sort hvid', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'P5', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '6,8', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '2,4', 'kw', '6500', '')
      ,'moment'            => ens('moment', '3,6', 'nm', '6250', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'separat pumpe', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP7HS', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1710', '', '', '')
      ,'bredde'            => ens('bredde', '645', '', '', '')
      ,'højde'             => ens('højde', '1060', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '740', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1210', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '5,1-6,3', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.15', '10', '', 'stål')
      ,'fælgbag'           => ens('fælg', '2.15', '10', '', 'stål')
      ,'dækfor'            => ens('dæk1', '90', '90', '10', '')
      ,'dækbag'            => ens('dæk1', '90', '90', '10', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '', '', 'YTX4L-BS')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/30', '1', '') . ' og ' . ens('lys', '12', '35/35', '1', '?')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '12', '5', '1', '')
      ,'lysbremse'         => ens('lys', '12', '21', '1', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '4', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '30', 'FC', '1,0', '')
      ,'gear'              => ens('olie', '140', '', '0,110', '0,90')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', 'med kilerem', '', '')
      ,'kobling'           => ens('kobling', 'tør centrifugal', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFVPAUA3091 (lille knallert)', 'RFVPAUB3061', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '80-100', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', 'svamp', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '', '')
      ,'producent'         => ens('producent', 'Motive Power Industry Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgoligerors' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'forskærm er en del af scooterkroppens skjold og bevæger sig ikke op og ned som forhjulet', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO ligero RS', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'PA-50', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '9995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'rød-sort blå-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'P5', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'separat pumpe', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP7HS', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1710', '', '', '')
      ,'bredde'            => ens('bredde', '645', '', '', '')
      ,'højde'             => ens('højde', '1060', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '740', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1210', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '5,1', '', '', '(katalog 2008)') . ' eller ' . ens('benzintank', '6,3', '', '', '(brugermanual)')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '')
      ,'dækfor'            => ens('dæk1', '90', '90', '10', '')
      ,'dækbag'            => ens('dæk1', '90', '90', '10', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '', '', 'YTX4L-BS')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '35/30', '1', '') . ' og ' . ens('lys', '12', '35/35', '1', '?')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '4', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '30', 'FC', '1,0', '')
      ,'gear'              => ens('olie', '140', '', '0,110', '0,90')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', 'med kilerem', '', '')
      ,'kobling'           => ens('kobling', 'tør centrifugal', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFV', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '80-100', '', '', '')
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
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '', '')
      ,'producent'         => ens('producent', 'Motive Power Industry Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgogalaxy' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'ligner PGO Ligero RS og Its magic', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO galaxy', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '9995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   )

),'pgocomet' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO comet', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'E1', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '8995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'blå rød', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'E1A (30 km/t)', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'separat pumpe', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP7HS', 'NGK BPR7HS', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '710', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '6', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.15', '10', '', '')
      ,'fælgbag'           => ens('fælg', '2.15', '10', '', '')
      ,'dækfor'            => ens('dæk1', '90', '90', '10', '')
      ,'dækbag'            => ens('dæk1', '90', '90', '10', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '30', 'FC', '1,0', '')
      ,'gear'              => ens('olie', '140', '', '0,110', '0,90')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', 'med kilerem', '', '')
      ,'kobling'           => ens('kobling', 'tør centrifugal', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFVE1__45', 'RFVE1E14541 (stor knallert E13383)', 'RFVE1E13071 RFVE1E13071003 (lille knallert)', 'RFVE1E1E1X1000768')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '70', '', '', '')
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
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '', '')
      ,'producent'         => ens('producent', 'Motive Power Industry Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '5,5 mm bøsning Forreste variator', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '(2004 : Resonatorrør påsvejst forreste udstødningsrør ø 25 mm, længde 320 mm.)', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 8 i stelnummeret er 3 og angiver den maksimale hastighed = 30 km/t', 'Tegn 9 i stelnummeret er 5 og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgotornado' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'skulle være magen til PGO Hot borset fra fronten hvor forlyset sidder', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO tornado', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   )

),'pgopmxsport' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO PMX sport', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'PM-50', 'SPORT PMMS', 'PMS (MS)', 'PMX (PM)')
      ,'varianter'         => ens('varianter', 'PGO PMX sport PMMS', 'PGO PMX no fear PMMS', '', '')
      ,'pris'              => ens('pris', '10995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'rød-sort hvid-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '40', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '39,2', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', 'separat pumpe', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP7HS', 'NGK BPR7HS', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '810', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '5,1', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', 'aluminium')
      ,'fælgbag'           => ens('fælg', '', '', '', 'aluminium')
      ,'dækfor'            => ens('dæk1', '120', '70', '12', '')
      ,'dækbag'            => ens('dæk1', '130', '70', '12', '')
      ,'dæktrykfor'        => ens('dæktryk', '', '', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '', '', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', '', '')
      ,'bremserbag'        => ens('bremser', 'tromle', '', '', '')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '12', '', '', '')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', 'ja', '', '', '')
      ,'lysfor'            => ens('lys', '12', '', '', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '30', 'FC', '1,0', '')
      ,'gear'              => ens('olie', '140', '', '0,110', '0,90')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'CVT', 'med kilerem', '', '')
      ,'kobling'           => ens('kobling', 'tør centrifugal', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFVPMMS2281', 'RFVPMMS22B1', 'RFVPMMS2181', 'RFVPMMS2171 (45 km/t) RFVPMMS2271203 (pmx no fear)')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '80', '', '', '')
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
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '', '')
      ,'producent'         => ens('producent', 'Motive Power Industry Co., Ltd.', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '8.00 mm bøsning Forreste variator', 'Bøsning ø 4 mm Mellem forreste remskiver', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn 8 i stelnummeret er "2" og angiver den maksimale hastighed = 30 km/t.', 'Tegn 9 i stelnummeret er 1 og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgopmxnaked' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'samme som PGO PMX bare uden skjolde ved instrumentpanel, andet styr og digitale instrumenter med blåt lys og diodeblinklys og baglys.', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO PMX naked', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'NAKED PMMS', 'PMS50N', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '12995', '', '', '')
      ,'hastighed'         => ens('hastighed', '30 og 45', '', '', '')
      ,'farver'            => ens('farver', 'sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'RFVPMMS2291', 'RFVPMMS22A1 (lille knallert)', 'RFVPMMS2281 RFVPMMS22A12 (lille knallert)', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '4mm bøsning mellem forreste remskive', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', '', 'Tegn 9 i stelnummeret er 1 og angiver den maksimale hastighed = 45 km/t', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

),'pgoitsmagic' => array(

     'specielt'            => array(
       'besked'            => ens('besked', '', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO Its magic', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'PGO Its magic black magic PA50DB (sort)', 'PGO Its magic white magic (hvid)', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '9995', '10995', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', 'sort hvid', '', '', '')
      ,'forhandlere'       => ens('forhandlere', 'http://www.c-reinhardt.dk/content/dk/find_forhandler_af_motorcykler_og_scootere', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', '', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '10', '', 'stål')
      ,'fælgbag'           => ens('fælg', '', '10', '', 'stål')

   )

),'pgopse' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'Special scooter til post danmark. PGO kalder den vist e-post eller e-hot.<br>Det ligner en PGO Hot naked men med elektrisk motor i begge hjul.', 'Post danmark har formodentligt dem med nummerplade XX6220 til XX6274. Altså 54 styks (måske flere ?) med første registreringsdato 14. December 2011. Men så vidt jeg ved kan man ikke købe dem som privatperson, det sikkert kun post danmark der har dem indtil videre. C Reinhardt (importøren) fortæller at private måske i 2013 kan købe denne model hvis efterspørgelsen er der.', 'det ser ud til at der er monteret en boks bag på scooteren med batterier.', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'PGO PSE', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', 'e-post', 'e-hot', '', '')
      ,'scootertype'       => ens('scootertype', 'PSE', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', 'orange-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Type/mærkning : EH', '', '', '')
      ,'motortype'         => ens('motortype', 'elektrisk', '2 styks, 1 i hvert hjul', '', '')
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
      ,'maxeffektogheste'  => ens('maxeffektogheste', '3,2', 'kw', '', '(i følge 30 km/t typegodkendelse)')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', '', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '1910', '', '', '(i følge typegodkendelse)')
      ,'bredde'            => ens('bredde', '670', '', '', '(i følge typegodkendelse)')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '2.50', '12', '', '')
      ,'fælgbag'           => ens('fælg', '2.50', '12', '', '')
      ,'dækfor'            => ens('dæk1', '100', '90', '12', '') . ens('dæk1', '120', '70', '12', '(i en af typegodkendelserne er der 2 slags dækstørrelser)')
      ,'dækbag'            => ens('dæk1', '100', '90', '12', '') . ens('dæk1', '120', '70', '12', '(i en af typegodkendelserne er der 2 slags dækstørrelser)')
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
      ,'batterispec1'      => ens('batterispec1', '48', '80', '', '(der er batterier under sædet + i topboks bagerst på scooteren)')
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
      ,'rækkevidde'        => ens('rækkevidde', '', 'over 120', '', '(i følge C Reinhardt (importøren) skulle den have en rækkevidde på et godt stykke over 120 km på en opladning men er aldrig rigtigt testet)')
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
      ,'stelnummer'        => ens('stelnummer', 'RFVPSE2AAC1000 (lille)', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '134 eller 209', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '324', '', '', '')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', '', '', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', 'C. Reinhardt A/S', '', '', '')
      ,'producent'         => ens('producent', '', '', '', '')
      ,'andet'             => ens('andet', '', '', '', '')

   ),'begrænsninger'       => array(
       'begrænstransmis'   => ens('begrænstransmis', '', '', '', '')
      ,'begrænstænding'    => ens('begrænstænding', '', '', '', '')
      ,'begrænskarburator' => ens('begrænskarburator', '', '', '', '')
      ,'begrænsluftfilter' => ens('begrænsluftfilter', '', '', '', '')
      ,'begrænscontroller' => ens('begrænscontroller', '', '', '', '')
      ,'begrænsruller'     => ens('begrænsruller', '', '', '', '')
      ,'begrænsindsug'     => ens('begrænsindsug', '', '', '', '')
      ,'begrænsudstødning' => ens('begrænsudstødning', '', '', '', '')
      ,'begrænsstelnum'    => ens('begrænsstelnum', '', 'Tegn nr. 7 i stelnummeret er "2" og angiver den maksimale hastighed = 30 km/t', '', '')
      ,'begrænsandet'      => ens('begrænsandet', '', '', '', '')

   )

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'Big max og Hot brugermanual'      => 'pgo_bigmax_hot_brugermanual.pdf'
   ,'Big max servicemanual'            => 'pgo_bigmax_servicemanual.pdf'
   ,'G-Max brugermanual'               => 'pgo_gmax_brugermanual.pdf'
   ,'G-Max brugermanual 2'             => 'pgo_gmax_brugermanual2.pdf'
   ,'G-Max servicemanual'              => 'pgo_gmax_servicemanual.pdf'
   ,'G-Max reservedele'                => 'pgo_gmax_reservedele.pdf'
   ,'Libra og X-hot brugermanual'      => 'pgo_libra_xhot_brugermanual.pdf'
   ,'Libra og X-hot reservedele'       => 'pgo_libra_xhot_reservedele.pdf'
   ,'Ligero brugermanual'              => 'pgo_ligero_brugermanual.pdf'
   ,'Ligero servicemanual'             => 'pgo_ligero_servicemanual.pdf'
   ,'PMX brugermanual'                 => 'pgo_pmx_brugermanual.pdf'
   ,'PMX brugermanual 2'               => 'pgo_pmx_brugermanual2.pdf'
   ,'PMX reservedele'                  => 'pgo_pmx_reservedele.pdf'
   ,'PMX Naked eldiagram'              => 'pgo_pmx_naked_eldiagram.pdf'
   ,'PMX Naked reservedele'            => 'pgo_pmx_naked_reservedele.pdf'
   ,'Trike brugermanual'               => 'pgo_trike_brugermanual.pdf'
   ,'T-Rex reservedele'                => 'pgo_trex_reservedele.pdf'
   ,'T-Rex servicemanual'              => 'pgo_trex_servicemanual.pdf'
   ,'Rodoshow reservedele'             => 'pgo_rodoshow_reservedele.pdf'
   ,'P3 brugermanual'                  => 'pgo_p3_brugermanual.pdf'
   ,'PGO dyser'                        => 'dyser_pgo.png'
   ,'katalog 2012-2013'                => 'pgo_katalog_2012_2013.pdf'
   ,'katalog 2011-2012'                => 'pgo_katalog_2011_2012.pdf'
   ,'katalog 2010-2011'                => 'pgo_katalog_2010_2011.pdf'
   ,'katalog 2008'                     => 'pgo_katalog_2008.pdf'

),'typegodkendelser' => array(
    'Big Max 45 km/t E12485 (e12*92/61*0005)' => 'typegodkendelser/PGO%20-%20%28E12485%29%20udstedt%2021-02-2003.pdf'
   ,'Big Max 45 km/t E15827 (e9*92/61*0005) 1' => 'typegodkendelser/PGO%20BIG%20MAX%20%28E15827%29%20udstedt%2006-10-2006.pdf'
   ,'Big Max 45 km/t E15827 (e9*92/61*0005) 2' => 'typegodkendelser/PGO%20Big%20Max%20%28E15827%29%20udstedt%2006-10-2006%282%29.pdf'
   ,'Big Max 45 km/t S9613' => 'typegodkendelser/PGO%20Big%20Max%20%28S9613%29%20udstedt%2021-04-1999.pdf'
   ,'Comet 30 km/t E15379 (e4*92/61*0209)' => 'typegodkendelser/PGO%20Comet%20%28E15379%29%20udstedt%2011-05-2006.pdf'
   ,'Comet 45 km/t E13383 (e4*92/61*0209)' => 'typegodkendelser/PGO%20Comet%20%28E13383%29%20udstedt%2023-04-2004.pdf'
   ,'Comet 45 km/t E15822 (e4*92/61*0209)' => 'typegodkendelser/PGO%20Comet%20%28E15822%29%20udstedt%2006-10-2006.pdf'
   ,'Dr Big 30 km/t E15377 (e12*92/61*0007)' => 'typegodkendelser/PGO%20Dr.%20Big%20%28E15377%29%20udstedt%2011-05-2006.pdf'
   ,'G-Max 30 km/t E15378 (e4*2002/24*0312)' => 'typegodkendelser/PGO%20G-Max%20%28E15378%29%20udstedt%2011-05-2006.pdf'
   ,'G-Max 45 km/t E13653 (e4*2002/24*0312)' => 'typegodkendelser/PGO%20-%20%28E13653%29%20udstedt%2002-09-2004.pdf'
   ,'G-Max 45 km/t E15824 (e4*2002/24*0312)' => 'typegodkendelser/PGO%20G-Max%20%28E15824%29%20udstedt%2006-10-2006.pdf'
   ,'Hot PMX 30 km/t E15374 (e12*92/61*0005)' => 'typegodkendelser/PGO%20-%20%28E15374%29%20udstedt%2017-10-2007.pdf'
   ,'Hot post 30 km/t E15619 (e12*92/61*0005) 1' => 'typegodkendelser/PGO%20-%20%28E15619%29%20udstedt%2005-07-2006.pdf'
   ,'Hot post 30 km/t E15619 (e12*92/61*0005) 2' => 'typegodkendelser/PGO%20-%20%28E15619%29%20udstedt%2005-07-2006%282%29.pdf'
   ,'Libra X-Hot 30 km/t E17563 (e4*92/61*2171)' => 'typegodkendelser/PGO%20BF50%20%28E17563%29%20udstedt%2016-02-2009.pdf'
   ,'Libra X-Hot 45 km/t E17564 (e4*92/61*2171)' => 'typegodkendelser/PGO%20BF50%20%28E17564%29%20udstedt%2016-02-2009.pdf'
   ,'Ligero 30 km/t E15375 (e4*2002/24*0285)' => 'typegodkendelser/PGO%20-%20%28E15375%29%20udstedt%2011-05-2006.pdf'
   ,'Ligero 30 km/t E17719 (e4*2002/24*0285)' => 'typegodkendelser/PGO%20-%20%28E17719%29%20udstedt%2030-06-2009.pdf'
   ,'Ligero 45 km/t E15172 (e4*2002/24*0285)' => 'typegodkendelser/PGO%20PA50%20%28E15172%29%20udstedt%2008-03-2006.pdf'
   ,'Ligero 45 km/t E15350 (e4*2002/24*0285)' => 'typegodkendelser/PGO%20-%20%28E15350%29%20udstedt%2010-05-2006.pdf'
   ,'Ligero 45 km/t E15823 (e4*2002/24*0285)' => 'typegodkendelser/PGO%20LIGERO%2050%20%28E15823%29%20udstedt%2006-10-2006.pdf'
   ,'PMX PMS Big Max 45 km/t E11692 (e12*92/61*0005)' => 'typegodkendelser/PGO%20-%20%28E11692%29%20udstedt%2027-11-2001.pdf'
   ,'PMX 45 km/t E15173 (e12*92/61*0005)' => 'typegodkendelser/PGO%20PMX%20%28E15173%29%20udstedt%2008-03-2006.pdf'
   ,'PMX Sport 45 km/t E15826 (e12*92/61*0005)' => 'typegodkendelser/PGO%20PMX%20%28E15826%29%20udstedt%2006-10-2006.pdf'
   ,'T-Rex 45 km/t E11691 (e12*92/61*0007)' => 'typegodkendelser/PGO%20T-REX%20%28E11691%29%20udstedt%2027-11-2001.pdf'
   ,'T-Rex 45 km/t E12528 (e12*92/61*0007)' => 'typegodkendelser/PGO%20-%20%28E12528%29%20udstedt%2010-03-2003.pdf'
   ,'T-Rex 45 km/t E15825 (e9*92/61*0007)' => 'typegodkendelser/PGO%20T-REX%20%28E15825%29%20udstedt%2006-10-2006.pdf'
   ,'T-Rex 45 km/t A9936' => 'typegodkendelser/PGO%20T-REX%2050%20%28A9936%29%20udstedt%2014-06-1999.pdf'
   ,'TR-3 45 km/t E12361 (e4*92/61*0178)' => 'typegodkendelser/PGO%20-%20%28E12361%29%20udstedt%2006-01-2003.pdf'
   ,'TR-3 45 km/t E15821 (e4*92/61*0178)' => 'typegodkendelser/PGO%20-%20%28E15821%29%20udstedt%2006-10-2006.pdf'
   //,'tom (PGO PMX (A9194) udstedt 09-06-1998.pdf)' => 'typegodkendelser/PGO%20PMX%20%28A9194%29%20udstedt%2009-06-1998.pdf'
   ,'PGO PSE 30 km/t E19516 (e4*2002/24*2817) 1'  => 'typegodkendelser/PGO%20-%20%28E19516%29%20udstedt%2028-11-2011.pdf'
   ,'PGO PSE 30 km/t E19516 (e4*2002/24*2817) 2a'  => 'typegodkendelser/PGO%20-%20%28E19516%29%20udstedt%2013-01-2012.pdf'
   ,'PGO PSE 30 km/t E19516 (e4*2002/24*2817) 2b'  => 'typegodkendelser/PGO%20-%20%28E19516%29%20udstedt%2013-01-2012_2.pdf'

   ,'Handitrike Classic (Big Max) / Sport (PMX) (stel : XL9STR4_____351) 45 km/t E12140 (e1*92/61*00159)'  => 'typegodkendelser/Handitrike%20-%20%28E12140%29%20udstedt%2015-08-2002.pdf'
   ,'Handitrike Comfort (T-Rex) (stel : XL9STR4____351) 45 km/t E12141 (e1*92/61*00160) '  => 'typegodkendelser/Handitrike%20Comfort%20%28E12141%29%20udstedt%2015-08-2002.pdf'

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false, $databasecenter_b);

?>
