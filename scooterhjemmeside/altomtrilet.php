<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "trilet 50 cm³ 3 hjulet invalideknallert";
$overskrift = "trilet";
$metadescription = "billeder, specifikationer, manualer, el diagrammer, reservedele og typegodkendelser";

$setup['nogetikon']               = 'logoer/logo_' . strtolower(str_replace(' ', '', $overskrift)) . '.png';

$setup['sidetopbesked'] = ''.kontaktmig(1).' hvis du kan hjælpe med info til denne side';

$databasecenter_b = array(

'
Om Trilet
' => '
Trilet skulle være lavet i danmark af '.ahref('http://www.aksos.dk/reva-aalborg', 'Reva Aalborg').'.

Jeg skrev til Reva Aalborg som blandt andet svarede følgende.
'.citat('
Der findes instruktionsbøger på de nyeste, men ingen reparationsmanual.
Produktionen ophørte i 2009.
Reparation foretages af kommunernes hjælpemiddelcentraler. (Hvis den er bevilget til borgeren.)
Ellers er det lokale cykel/knallertmekanikere der foretager eftersyn og rep.
Vi har ingen værksteder, hverken her, eller rundt om i DK.
')
.citat('
Produktionsår er ca

Puch    1968 til 1990
Honda   1990 til 2000
Morini  2000 til 2005
LC50    2004 til 2006 (Med samme motor som Morini)
AC504T  2006 til 2009 (Slut produktion)
').'
'

,'
links
' => '
'.afsnit('Trilet links', '
'.ahref('http://trilets.tumblr.com/', 'I just love when Trilets block my way...').'
'.ahref('http://www.mo-ped.se/knallert/trilet.htm', 'mo-ped.se').'
'.ahref('http://www.aksos.dk/reva-aalborg', 'Reva Aalborg').'
').'
'.afsnit('reservedele til Trilet med Puch motor kan muligvis findes her', '
'.ahref('http://www.west-import.dk/').'
'.ahref('http://www.scootertuning.ch/index.php/cat/c23_Fahrwerk.html/page/2').'
'.ahref('http://www.mopedspeed.dk/').'
'.ahref('http://www.puchverkstan.se/').'
'.ahref('http://www.jmpbparts.com/').'
'.ahref('http://www.motormarket.dk/').'
'.ahref('http://tempocykler.dk/velkommen').'
'.ahref('http://www.puch-wieser.at/shop.html').'
'.ahref('http://www.puchparts.dk/').'
'.ahref('http://www.puchshop.de/catalog/home.php').'
'.ahref('http://www.norscand.com/default.aspx').'
'.ahref('http://www.puch-rbo.at/WEBEDITION/default.htm').'
'.ahref('http://www.puch-zweirad.de/').'
'.ahref('http://www.mopedspeed.dk/web-shop/puch-/').'
'.ahref('http://www.cycle-tech.ch/de/q1/Kapitel_Mofa/Chapter.aspx').'
').'
'

,'
trilet stelfarver
' => '
Triletens logo og stelfarve kan afslører hvad motormærke der sidder i.
'.visbilled('1', 'billed3853.jpg', 'trilet 2000, trilet 2000M, trilet 2000M', false, true).'
'.visbilled('1', 'billed3854.jpg', 'trilet R5', false, true).'
'

,'
trilet motortyper gennem tiden
' => '
2000M = Morini Franco motor (cirka 2000 til 2005)
2000H = Honda motor (cirka 1990 til 2000)
2000 = Puch motor (enten MSA (? til ?) eller ZA50 (? til 1990))

MSA er en MS motor med 2 automatiske gear (MSA-utomatisk) og den rigtige betegnelse skulle være M5.
Skulle også findes med M3 med kickstarter (brugt på Puch MS50 1966 og VS50 1966-1967).
M5 med anden svinghjulsmagnet og en snorstartanordning (brugt i Puch R50 1967-1968 og Puch MS50 1969-? for post væsenet).

Puch MSA er den gamle Puch motor model med tvunget blæsekøling og udstødning går ud bagved i højre side fordi bagved i venstre side sidder batteriet. Har også stålkasse midt-bagpå som er smallere. kæde træk. Elstarter trækker gennem kilerem.

Puch ZA50 er den nyere Puch motor model som er fartvindkølet (Trilet R5 årgang 1989 type 5) har kæde træk fra tandhjul til tandhjul hvor der er en stor sort stålkasse midt-bagpå hvor motoren er ophængt i.
'.visbilled('1', 'billed3855.jpg', 'trilet motortyper gennem tiden', false, true).'
'

);

$databasecenter = array(

'triletac504t' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'produktionsår cirka : 2006 - 2009', '', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'trilet AC50 4T', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', 'AC504T', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', 'grå', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'EEC', '', '', '')
      ,'motortype'         => ens('motortype', '4 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '48', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
      ,'boring'            => ens('boring', '39', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '41,5', '', '', '')
      ,'ventiler'          => ens('ventiler', '2', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '10,5', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,5', 'kw', '6000', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', '', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK C7HSA', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', 'max 2030', '', '', '')
      ,'bredde'            => ens('bredde', 'max 865', '', '', '')
      ,'højde'             => ens('højde', 'max 1700', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1420', '', '', '(sporvidde : 750 mm)')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '95', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '5,4', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '2 styks')
      ,'dækfor'            => ens('dæk1', '80', '100', '16', '')
      ,'dækbag'            => ens('dæk1', '80', '100', '16', '2 styks')
      ,'dæktrykfor'        => ens('dæktryk', '2,5', 'bar', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,5', 'bar', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', 'hydraulisk', '')
      ,'bremserbag'        => ens('bremser', 'skive', '', 'hydraulisk', '2 styks')
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
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '12', '15', '2', '')
      ,'lysbagbremse'      => ens('lys', '12', '21/5', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '', '', '')
      ,'lyskontrolblink'   => ens('lys', '12', '5', '', 'for') . ' og ' . ens('lys', '12', '21', '', 'bag')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '10W40', 'API : LS', '', '')
      ,'gear'              => ens('olie', '80W90', '', '0,12', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'cvt', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'UH9AC504T____RC1______', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '180', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '320', '', '', '')
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
      ,'andet'             => ens('andet', '
Placering af Fabrikationsplade: På bageste travers i stel<br>
Placering af Indpræget stelnummer: På forreste travers i stel<br>
Placering af Komponentmærkningsskilt: I bagagerum
', '', '', '')

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

),'triletlc50' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'produktionsår cirka : 2004 - 2006', 'LC kan muligvis kendes på riller venstre side foran baghjul og køler er måske i bunden', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'trilet LC50', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '', '')
      ,'farver'            => ens('farver', 'grå', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Morini Franco', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,4', '', '', '')
      ,'køling'            => ens('køling', 'væske', '', '', '')
      ,'boring'            => ens('boring', '41', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '37,4', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '12', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,8', 'hk', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'Dell\'Orto PHVA 12', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP6HS', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', 'max 203', '', '', '')
      ,'bredde'            => ens('bredde', 'max 86,5', '', '', '')
      ,'højde'             => ens('højde', 'max 1700', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1420', '', '', '(sporvidde: 750 mm)')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '95', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '7,1', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '2 styks')
      ,'dækfor'            => ens('dæk1', '80', '100', '16', '')
      ,'dækbag'            => ens('dæk1', '80', '100', '16', '2 styks')
      ,'dæktrykfor'        => ens('dæktryk', '2,5', 'bar', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '2,5', 'bar', '', '')
      ,'affjedringfor'     => ens('affjedringfor', '', '', '', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'skive', '', 'hydraulisk', '')
      ,'bremserbag'        => ens('bremser', 'skive', '', 'hydraulisk', '2 styks')
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
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '12', '15', '2', '')
      ,'lysbagbremse'      => ens('lys', '12', '21/5', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '21', '', '')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '12', '', '', '')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '1,2', '')
      ,'gear'              => ens('olie', '30W', '', '0,1', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', 'cirka 6,5 liter', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'cvt', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', '', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'UH9TRLC50____RC1______', '', '', '')
      ,'udstødning'        => ens('udstødning', '', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '180', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '320', '', '', '')
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
      ,'andet'             => ens('andet', '
Placering af Fabrikationsplade: På bageste travers i stel<br>
Placering af Indpræget stelnummer: På forreste travers i stel<br>
Placering af Komponentmærkningsskilt: I bagagerum<br>
<br>
Gribe/støttebøjle er ekstraudstyr
', '', '', '')

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

),'trilet2000m' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'produktionsår cirka : 2000 - 2005', 'set med rund eller firkantet forlygte', '', '')

   ),'generelt'            => array(
       'model'             => ens('model', 'trilet 2000M', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '39500', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '', '')
      ,'farver'            => ens('farver', 'gul-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Morini Franco', '', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '49,4', '', '', '')
      ,'køling'            => ens('køling', 'væske', '', '', '')
      ,'boring'            => ens('boring', '41', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '37,4', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '12', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '1,8', 'hk', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'Dell\'Orto PHVA12', '', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BP6HS, Bosch WR7BC, Champion RL87YC', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', 'max 2000', '', '', '')
      ,'bredde'            => ens('bredde', 'max 850', '', '', '')
      ,'højde'             => ens('højde', 'max 1000', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1350', '', '', '(sporvidde: 730 mm)')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '95', 'blyfri', '', '')
      ,'benzintank'        => ens('benzintank', '7', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '16', '', '')
      ,'fælgbag'           => ens('fælg', '', '16', '', '2 styks')
      ,'dækfor'            => ens('dæk2', '2½', '16', '', '')
      ,'dækbag'            => ens('dæk2', '2½', '16', '', '2 styks')
      ,'dæktrykfor'        => ens('dæktryk', '40', 'psi', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '40', 'psi', '', '')
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
      ,'lysfor'            => ens('lys', '12', '35/35', '', '')
      ,'lysbagbremse'      => ens('lys', '12', '21/5', '', '')
      ,'lysbag'            => ens('lys', '', '', '', '')
      ,'lysbremse'         => ens('lys', '', '', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '12', '10', '2', 'for') . ' og ' . ens('lys', '12', '21', '2', 'bag')
      ,'lyskontrolblink'   => ens('lys', '', '', '', '')
      ,'lyskontrollangt'   => ens('lys', '', '', '', '')
      ,'lysnummerplade'    => ens('lys', '', '', '', '')
      ,'lysinstrument'     => ens('lys', '12', '', '', 'LED') . ' og ' . ens('lys', '12', '5', '', '(kontrollampe til olie)')
      ,'oplader'           => ens('oplader', '', '', '', '')
      ,'ladetid'           => ens('ladetid', '', '', '', '')
      ,'rækkevidde'        => ens('rækkevidde', '', '', '', '')
      ,'controller'        => ens('controller', '', '', '', '')

   ),'olie og væsker'      => array(
       'motor'             => ens('olie', '', '', '1,0', '')
      ,'gear'              => ens('olie', '30W', '', '0,1', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '3,0', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', 'cvt', '', '', '+ kæde til bagaksel')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'gult', '', '', '')
      ,'stelnummer'        => ens('stelnummer', 'UH9T2000M____RC1______', '', '', '')
      ,'udstødning'        => ens('udstødning', 'sort afrundet udstødning ?', '', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '125', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '310', '', '', '')
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
      ,'andet'             => ens('andet', '
Placering af Fabrikationsplade: På bageste travers i stel<br>
Placering af Indpræget stelnummer: På forreste travers under sæde<br>
Placering af Komponentmærkningsskilt: I bagagerum
', '', '', '')

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

),'trilet2000h' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'produktionsår cirka : 1990 - 2000 (2002)', 'set med firkantet eller dobbelt forlygte', '', '
<br>
set med RCA - AALBORG ÅRG. 02 TYPE 7')
   ),'generelt'            => array(
       'model'             => ens('model', 'trilet 2000H', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '47000', '', '(Ny pris i 02 ca. 47000 kr.)', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', 'blå-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Honda AB25E', '(er muligvis samme motor som på Honda Wallaroo PK50)', 'motorblokken er meget lang og går længere tilbage end baghjulsakslerne også tilbage med kæde. Trækker vist kun på højre baghjul.', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '(typstykket er frit)')
      ,'boring'            => ens('boring', '', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '', '', '', '')
      ,'moment'            => ens('moment', '', '', '', '')
      ,'karburator'        => ens('karburator', 'Keihin PA38J', '12', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'NGK BR4HSA eller ND W14FR-L (Danmark)', 'NGK BPR6HSA eller ND W20FR-L (Norge)', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '', '', '', '')
      ,'bredde'            => ens('bredde', '', '', '', '')
      ,'højde'             => ens('højde', '', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '', '', '', '')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '', '', '', '')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '4', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', '')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '2 styks')
      ,'dækfor'            => ens('dæk2', '2½', '16', '', '')
      ,'dækbag'            => ens('dæk2', '2½', '16', '', '2 styks')
      ,'dæktrykfor'        => ens('dæktryk', '40', 'psi', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '40', 'psi', '', '')
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
       'starterbatteri'    => ens('starterbatteri', '12', '4', '', 'vedligeholdelsesfrit')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', 'cdi', '', '', '')
      ,'elstart'           => ens('elstart', 'ja', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '', '5 eller 15', '2', '')
      ,'lysbagbremse'      => ens('lys', '', '', '', '')
      ,'lysbag'            => ens('lys', '', '5', '2', '')
      ,'lysbremse'         => ens('lys', '', '21', '2', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '21', '2', '')
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
       'transmissiontype'  => ens('transmissiontype', 'cvt', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'blåt', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', 'ligger lige under motorblokken og er lidt kortere end motorblokken', '', '', '')
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
      ,'bagagevolume'      => ens('bagagevolume', '38', '', '', '')
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

),'trilet2000' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'produktionsår cirka : ? - 1990', 'set med dobbelt forlygte', '6 volt', 'Set med REVA - AALBORG ÅRG. 1989 TYPE 5
set DKK0__ mærke på model med gammel puch motor på den bjælke der er bagsæd over bagaksel')

   ),'generelt'            => array(
       'model'             => ens('model', 'trilet 2000', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '', '')
      ,'farver'            => ens('farver', 'rød-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'puch ZA50 eller Puch MSA', '', '', '')
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
      ,'fælgbag'           => ens('fælg', '', '', '', '2 styks')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '2 styks')
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
      ,'antalgear'         => ens('antalgear', '2', '', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'rødt', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', 'Puch ZA50 har lang udstødning som stikker ud bagved i venstre side', 'Puch MSA har lang udstødning som stikker ud bagved i højre side (fordi der er batteri bagerst i venstre side)', '', '')
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

),'triletr5' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'produktionsår cirka : 1989', '', '6 volt', 'set med rund forlygte')

   ),'generelt'            => array(
       'model'             => ens('model', 'trilet R5', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '30', '', '', '')
      ,'farver'            => ens('farver', 'rød-sort', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'Puch ZA50', '(standard typegodkendelsesnummer : DK-M-018)', '', 'kan se ind til topstykke (fart vindkølet) dog er frontpladen i vejen for vinden')
      ,'motortype'         => ens('motortype', '2 takt', 'hårdforkromet aluminium', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '48,8', '', '', '')
      ,'køling'            => ens('køling', 'blæserhjul', '', '', '')
      ,'boring'            => ens('boring', '38', '', '', '')
      ,'slaglængde'        => ens('slaglængde', '43', '', '', '')
      ,'ventiler'          => ens('ventiler', '', '', '', '')
      ,'ventiljustering'   => ens('ventiljustering', '', '', '', '')
      ,'kompression'       => ens('kompression', '9,8', '', '', '')
      ,'tomgang'           => ens('tomgang', '', '', '', '')
      ,'nomieffektogheste' => ens('nomieffektogheste', '', '', '', '')
      ,'maxeffektogheste'  => ens('maxeffektogheste', '0,875', 'kw', '3700', '(1,2 PS)')
      ,'moment'            => ens('moment', '2,65', 'nm', '2500', '(0,27 kpm (kgf m ?))')
      ,'karburator'        => ens('karburator', 'bing 1/12 med manuel choker', 'hoveddyse : 50/52 (efter behov)', '', '')
      ,'brændstof indsp..' => ens('brændstof indsp..', '', '', '', '')
      ,'smøring'           => ens('smøring', '', '', '', '')
      ,'tændrør'           => ens('tændrør', 'bosch W95 eller tilsvarende', '', '', '')

   ),'dimensioner'         => array(
       'længde'            => ens('længde', '2000', '', '', '')
      ,'bredde'            => ens('bredde', '790', '', '', '')
      ,'højde'             => ens('højde', '975', '', '', '')
      ,'sædehøjde'         => ens('sædehøjde', '610', '', '', '(sædehøjde fra fodplade : 460 mm)')
      ,'frihøjde'          => ens('frihøjde', '', '', '', '')
      ,'akselafstand'      => ens('akselafstand', '1385', '', '', '(sporvidde : 675 mm)')

   ),'brændstof'           => array(
       'benzin'            => ens('benzin', '', '', '', '')
      ,'benzintank'        => ens('benzintank', '4', '', '', '')
      ,'forbrug'           => ens('forbrug', '', '', '', 'cirka 2,5 liter/100km')

   ),'hjul'                => array(
       'fælgfor'           => ens('fælg', '', '', '', '')
      ,'fælgbag'           => ens('fælg', '', '', '', '2 styks')
      ,'dækfor'            => ens('dæk2', '2½', '16', '', '')
      ,'dækbag'            => ens('dæk2', '2½', '16', '', '2 styks')
      ,'dæktrykfor'        => ens('dæktryk', '29', 'psi', '', '')
      ,'dæktrykbag'        => ens('dæktryk', '34', 'psi', '', '')
      ,'affjedringfor'     => ens('affjedringfor', 'teleskopgaffel', '', '50', '')
      ,'affjedringbag'     => ens('affjedringbag', '', '', '', '')
      ,'bremserfor'        => ens('bremser', 'tromle', '104', '', 'håndgreb på højre side af styret')
      ,'bremserbag'        => ens('bremser', 'tromle', '104', '2 styks', 'vippestyr')
      ,'eger'              => ens('eger', '', '', '')
      ,'castervinkel'      => ens('castervinkel', '', '', '')
      ,'efterløb'          => ens('efterløb', '', '', '')
      ,'drejevinkel'       => ens('drejevinkel', '', '', '', '')
      ,'venderadius'       => ens('venderadius', '', '', '', '')

   ),'elektrisk'           => array(
       'starterbatteri'    => ens('starterbatteri', '6', '', '', 'nr. 105')
      ,'batterispec1'      => ens('batterispec1', '', '', '', '')
      ,'batterispec2'      => ens('batterispec2', '', '', '', '')
      ,'batterivægt'       => ens('batterivægt', '', '', '', '')
      ,'batterilevetid'    => ens('batterilevetid', '', '', '', '')
      ,'generator'         => ens('generator', '', '', '', '')
      ,'sikring'           => ens('sikring', '', '', '', '')
      ,'tændingssystem'    => ens('tændingssystem', '', '', '', '')
      ,'elstart'           => ens('elstart', '', '', '', '')
      ,'kickstart'         => ens('kickstart', '', '', '', '')
      ,'lysfor'            => ens('lys', '', '15/15', '', 'NIOX W1202S')
      ,'lysbagbremse'      => ens('lys', '', '', '', 'Hella 2SD-003 182-051/61')
      ,'lysbag'            => ens('lys', '', '5', '', '')
      ,'lysbremse'         => ens('lys', '', '18', '', '')
      ,'lyspositions'      => ens('lys', '', '', '', '')
      ,'lysblink'          => ens('lys', '', '18', '', 'NIOX W76L (for)')
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
      ,'gear'              => ens('olie', '', '', '0,275', '')
      ,'forgaffel'         => ens('olie', '', '', '', '')
      ,'kølervæske'        => ens('kølervæske', '', '', '', '')

   ),'transmission'        => array(
       'transmissiontype'  => ens('transmissiontype', '', '', '', '')
      ,'kobling'           => ens('kobling', 'centrifugal', 'i oliebad', '', '')
      ,'antalgear'         => ens('antalgear', '2', 'automatisk', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'rødt', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', '')
      ,'udstødning'        => ens('udstødning', 'Puch ZA50 har lang udstødning som stikker ud bagved', 'udstødning i venstre___ side = ny puch motor ? type 5 = ny motor ?', '', '')
      ,'euroemission'      => ens('euroemission', '', '', '', '')
      ,'vægttør'           => ens('vægttør', '112', '', '', '')
      ,'vægtkørerklar'     => ens('vægtkørerklar', '', '', '', '')
      ,'vægttotal'         => ens('vægttotal', '225', '', '', '(foraksel belastning : 65 kg, bagaksel belastning : 160 kg)')
      ,'bæreevne'          => ens('bæreevne', '', '', '', '')
      ,'luftfiltertype'    => ens('luftfiltertype', '', '', '', '')
      ,'stigeevne'         => ens('stigeevne', 'cirka 9', '%', '', '')
      ,'medfølger'         => ens('medfølger', '', '', '', '')
      ,'bremsevæske'       => ens('bremsevæske', '', '', '', '')
      ,'støj'              => ens('støj', '', '', '', '')
      ,'bagagevolume'      => ens('bagagevolume', '32', '', '', '')
      ,'bakgear'           => ens('bakgear', '', '', '', '')
      ,'importør'          => ens('importør', '', '', '', '')
      ,'producent'         => ens('producent', '', '', '', 'NBV Aalborg ?')
      ,'andet'             => ens('andet', 'man skal trykke ned på styret for at bremse
Fabrikationsplade : På sædets højre bærejern<br>
Indpræget navn : På instrumentspanel og bagagerum<br>
Indpræget typebetegnelse : På sædets højre bærejern<br>
Indpræget stelnummer : På venstre side af kronrør<br>
Godkendelsesnummer i stel : På sædets højre bærejern<br>
Godkendelsesnummer pa motor : På krumtaphusets højre overside<br>
', '', '', '')

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

),'triletveteran' => array(

     'specielt'            => array(
       'besked'            => ens('besked', 'produktionsår cirka : 1968 - ? jeg ved ikke præcist hvad denne model hedder. Måske hedder den bare Trilet og måske er det den første Trilet model der er lavet.', '6 kantet classic puch forlygte med instrument øverst eller rund forlygte', '', 'bremser ved tryk ned på styret. findes i nogen forskellige type. Den med fjedre under sæde er vist den ældste
<br>
Set med REVA - AALBORG ÅRG. 1983 TYPE 3 (Puch MSA motor)
Set med REVA Aalborg (uden ÅRG. og TYPE)
Set stelnummer på rør mellem fodplade og højre baghjul (5210XXX045XX ? noget i den stil).
')

   ),'generelt'            => array(
       'model'             => ens('model', 'trilet veteran', '', '', '')
      ,'ogsåkaldet'        => ens('ogsåkaldet', '', '', '', '')
      ,'scootertype'       => ens('scootertype', '', '', '', '')
      ,'varianter'         => ens('varianter', '', '', '', '')
      ,'pris'              => ens('pris', '', '', '', '')
      ,'hastighed'         => ens('hastighed', '', '', '', '')
      ,'farver'            => ens('farver', '', '', '', '')
      ,'forhandlere'       => ens('forhandlere', '', '', '', '')

   ),'motor'               => array(
       'motormodel'        => ens('motormodel', 'puch MSA', '(måske samme motor som fra Puch MS50 ?)', '', '')
      ,'motortype'         => ens('motortype', '2 takt', '', '', '')
      ,'elmotorspec'       => ens('elmotorspec', '', '', '', '')
      ,'volume'            => ens('volume', '', '', '', '')
      ,'køling'            => ens('køling', 'blæse', '', '', '')
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
      ,'fælgbag'           => ens('fælg', '', '', '', '2 styks')
      ,'dækfor'            => ens('dæk1', '', '', '', '')
      ,'dækbag'            => ens('dæk1', '', '', '', '2 styks')
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
       'transmissiontype'  => ens('transmissiontype', 'kæde', '', '', '')
      ,'kobling'           => ens('kobling', '', '', '', '')
      ,'antalgear'         => ens('antalgear', '2', 'automatisk', '', '')
      ,'gearratio'         => ens('gearratio', '', '', '', '')
      ,'tandhjulfor'       => ens('tandhjulfor', '', '', '', '')
      ,'tandhjulbag'       => ens('tandhjulbag', '', '', '', '')
      ,'reduktionsratio'   => ens('reduktionsratio', '', '', '', '')

   ),'ekstra'              => array(
       'stel'              => ens('stel', 'måske grønt (rund forlygte) ? rødt ?', '', '', '')
      ,'stelnummer'        => ens('stelnummer', '', '', '', 'skulle sidde ved højre baghjul og være på 6 cifre... måske er dette ikke stelnummer med godkendelsesnummer ?')
      ,'udstødning'        => ens('udstødning', 'meget kort, bred og flad udstødning lige under motor', '', '', '')
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
      ,'producent'         => ens('producent', 'Reva Aalborg', '', '', '')
      ,'andet'             => ens('andet', 'bag på står REVA AALBORG og på nogle modeller står også årgang og type', 'snor til højre for sædet bruges til at starte motoren (ligesom en plæneklipper/motorsav)', 'sædet er affjedret med 4 fjedre på model med rund forlygte, horn under sæde', '')

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

)

);

$databaseright = array(

//'emner på siden' => array()

'download' => array(
    'AC50 4T instruktionsbog'    => 'trilet_ac50_4t_instruktionsbog.pdf'
   ,'LC50 instruktionsbog'       => 'trilet_lc50_instruktionsbog.pdf'
   ,'2000M instruktionsbog'      => 'trilet_2000m_instruktionsbog.pdf'
   ,'2000H instruktionsbog'      => 'trilet_2000h_instruktionsbog.pdf'
   ,'2000H eldiagram'            => 'trilet_2000h_eldiagram.pdf'
   ,'2000 eldiagram'             => 'trilet_2000_eldiagram.pdf'
   ,'R5 instruktionsbog'         => 'trilet_r5_instruktionsbog.pdf'
   ,'R5 eldiagram'               => 'trilet_r5_eldiagram.pdf'
   ,'flere filer'                => 'trilet_flere.zip'

),'typegodkendelser' => array(
//   ,'' => ''

)

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, false, $databasecenter_b);

?>
