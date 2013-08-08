<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "bøger og blade";
$overskrift = "bøger og blade";
$metadescription = "scooterrelaterede bøger og blade";

$databasecenter = array(

'
introduktion
' => '
Her på siden kan du finde information om bøger, blade, magaziner og reservedelskataloger som handler om knallerter og scootere.
'.visbilled('1', 'billed2155.jpg', 'diverse scooter bøger og blade', false, true).'
'

,'
manualer
' => '
På '.ahref('download.php', 'download siden').' kan du finde manualer til de forskellige scooter modeller.
'

,'
haynes 4082
' => '
'.visbilled('1', 'billed1215.jpg', 'haynes 4082 scooters twist and go automatic transmission 50 til 250 cc with carburettor engines haynes service and repair manual', false, true).'
Titel : Twist and Go (automatic transmission) Scooters 50 to 250 cc with carburettor engines
Sider : 330
Sprog : Engelsk
Udgiver : '.ahref('http://haynes.co.uk/', 'Haynes').'
<div style="float: left; margin-right: 10px;">
'
.galleriholder(array(
    galleri('highslide', '', 'billed2293.jpg', array('Four-stroke engines', '', ''))
   ,galleri('highslide', '', 'billed2294.jpg', array('data', 'aprilia Leonardo 125', 'aprilia Rally 50'))
))
.'
</div>
Bogen har forklaring af 2 takt motor, 4 takt motor, væskekøling, tænding, transmission, stel, affjedring, bremser, hjul, dæk, elektrisk, fejlfinding, værktøjs tips, konverteringstabel og en data sektion på bestemte scooter modeller som udgør 100 sider i bogen.

Bogen handler om både 2 og 4 takt scootere men der er mest fokus på 2 takt.

Data sektionen på 100 sider har data på Aprilia, Gilera, Honda, Malaguti, MBK, Peugeot, Piaggio, Suzuki, Sym, Vespa og Yamaha fra 50 til 250 cm³.

Mange af modellerne i data sektionen er nok ikke specielt udbredte i danmark.
<div class="clearboth"></div>

'.afsnit('scooter modeller i data sektionen','
Aprilia Leonardo 125
Aprilia Rally 50
Aprilia Sonic FT og GP
Aprilia SR50 (1994 - 1999)
Gilera Ice
Gilera Runner 50 (1997 - 2005)
Gilera Runner 50 (2006 og nyere)
Gilera Runner FX125 og FXR180
Gilera Runner VX125 og VXR180/200
Gilera SKP (Stalker)
Honda FES125 Pantheon
Honda FES250 Foresight
Honda NES125 @125
Honda SCV100 Lead
Honda SES125 Dylan
Honda SFX50
Honda SGX50 Sky
Honda SH50
Honda SH125
Honda SZX50 (X8R-S og X8R-X)
Malaguti F12 50 Phantom luftkølet
Malaguti F12 50 Phantom væskekølet
Malaguti F12 50 Spectrum
Malaguti F15 Firefox
Malaguti Madison 125 og 150
MBK Doodo 125
MBK Mach G 50
MBK Nitro 50
MBK Nitro 100
MBK Ovetto 50
MBK Ovetto 100
MBK Rocket
MBK Skyliner 125
MBK Stunt 50
MBK Thunder 125
Peugeot Elyseo 50
Peugeot Elyseo 100
...
').'

'.afsnit('min mening','
God bog hvis man vil vide en masse om scootere.
Specielt hvis man vil vide en masse om 2 takt scootere.
Data sektionen er lidt spildt hvis man ikke kan bruge de data og udgør cirka 1/3 af bogen (100 sider).
').'
'

,'
haynes 4768
' => '
'.visbilled('1', 'billed1518.jpg', 'haynes 4768 chinese taiwanese & korean scooters 50, 100, 125, 150 & 200 cc twist and go', false, true).'
Titel : Chinese Taiwanese & Korean Scooters 50, 100, 125, 150 & 200 cc Twist and Go
Sider : 260
Sprog : Engelsk
Udgiver : '.ahref('http://haynes.co.uk/', 'Haynes').'
<div style="float: left; margin-right: 10px;">
'
.galleriholder(array(
    galleri('highslide', '', 'billed2610.jpg', array('Brakes, wheels and tyres', ''))
   ,galleri('highslide', '', 'billed2611.jpg', array('data', 'Baotian'))
))
.'
</div>
Bogen handler meget om de 2 takt og 4 takt 50 cm³ scootere som vi køre på her i danmark.

Data sektionen er på 34 sider og har data på Baotian, Keeway, Kymco, Sym og TGB.
<div class="clearboth"></div>

'.afsnit('min mening','
Vel nok den bedste bog jeg kender hvis man vil vide noget om 4 takt scootere.
').'
'

,'
haynes teknisk ordbog
' => '
Til Haynes bøgerne følger denne lille ordbog med som oversætter nogle engelske ord til dansk.
'.visbilled('1', 'billed1216.jpg', 'haynes teknisk ordbog engelsk dansk', false, true).'
Sider : 28
'

,'
t-hansen scooter udstyr og reservedele
' => '
'.visbilled('1', 'billed1217.jpg', 'thansen scooter reservedelsbog thansen.dk danmarks største udvalg i udstyr og reservedele til scooter', false, true).'
Titel : Scooter - Udstyr og reservedele
Sider : 676 (April 2007)
Sprog : Dansk
Udgiver : '.ahref('http://www.thansen.dk', 'http://www.thansen.dk').'
'
.galleriholder(array(
    galleri('highslide', '', 'billed2887.jpg', array('kickstarter', ''))
   ,galleri('highslide', '', 'billed2888.jpg', array('sidespejle', ''))
   ,galleri('highslide', '', 'billed2889.jpg', array('udstødning', ''))
))
.'
Bogen indeholder reservedele til diverse scootere og der er massere af billeder i så den er meget god at kigge i.

Bogen kan købes eller fås gratis i T Hansens butikker ('.ahref('http://www.thansen.dk', 'http://www.thansen.dk').').

Udover en masse reservedele som bogen næsten kun indeholder så er der også rundt omkring i bogen specielle sider som "værd at vide", "monteringstip" og "sådan lapper du slangeløse dæk".

'
.galleriholder(array(
    galleri('highslide', '', 'billed1220.jpg', array('værd at vide', 'cylinder'))
   ,galleri('highslide', '', 'billed1221.jpg', array('værd at vide', 'stempel'))
   ,galleri('highslide', '', 'billed1222.jpg', array('monteringstip', 'stempel'))
   ,galleri('highslide', '', 'billed1223.jpg', array('tændrørsliste', ''))
   ,galleri('highslide', '', 'billed1224.jpg', array('værd at vide', 'tændrør'))
   ,galleri('highslide', '', 'billed1225.jpg', array('monteringstip', 'krumtap'))
   ,galleri('highslide', '', 'billed1226.jpg', array('monteringstip', 'krumtap'))
   ,galleri('highslide', '', 'billed1227.jpg', array('værd at vide', 'karburator'))
   ,galleri('highslide', '', 'billed1228.jpg', array('monteringstip', 'variomatic'))
   ,galleri('highslide', '', 'billed1229.jpg', array('monteringstip', 'variomatic'))
   ,galleri('highslide', '', 'billed1233.jpg', array('leje', 'tegnforklaring'))
   ,galleri('highslide', '', 'billed2227.jpg', array('sådan lapper du', ' slangeløse dæk'))
))
.'
'

,'
scoot magazine nord amerika
' => '
I nord amerika udkommer et blad som hedder Scoot magazine.

Her ses nummer 53 af scoot magazine.
'.visbilled('1', 'billed1431.jpg', 'scoot magazine', false, true).'

Her kan du læse nummer 53 af scoot magazine fra december 2009.
'.visfil('1', 'scooterhjemmeside/download/scootmagazine53.pdf', 'scoot magazine 53').'

Læs mere på '.ahref('http://www.thescootclub.com', 'http://www.thescootclub.com').'.

'

,'
scoot dansk
' => '
I danmark er der lavet et blad som hedder Scoot.

Her ses Scoot nummer 2.
'.visbilled('1', 'billed1430.jpg', 'scoot! magazine dansk', false, true).'
Det kunne tidligere købes hos zootscoot.dk som er blevet købt af '.ahref('http://speedline.dk', 'http://speedline.dk').'.
'

,'
scooternøglen
' => '
Scooternøglen er et reservedelskatalog som laves af '.ahref('http://www.maxmc.dk/', 'Max MC Import').'.

Her ses nummer 5 fra 2011.
'.visbilled('1', 'billed3232.jpg', 'scooternøglen 5', false, true).'
Kataloget indeholder primært reservedele men derudover findes også forhandlerliste, hjelme, tøj, olie, haynes bøger og værktøj.

Her kan du se scooternøglen nummer 5.
'.visfil('1', 'scooterhjemmeside/download/scooternoglen5.pdf', 'Scooternøglen 5').'

Du kan også se den online version hvor siderne downloades efterhånden som du bladre.
'.ahref('http://viewer.zmags.com/publication/89afab79').'.
'

,'
magacin
' => '
Det eneste tv program jeg kender i danmark som kommer tæt på at handle om scootere er "MC Magacinet" som jeg har set på kanal københavn som vist nu hedder kanal hovedstaden og programmet bliver vist også vist på DK4.
Programmet handler primært om test af nye motorcykel modeller. Der har også været en udsendelse med elektriske offroad maskiner.
Udsendelserne kan ses på '.ahref('http://www.magacin.dk').'.
'

,'
mc revyen
' => '
MC revyen er et blad som primært indeholder motorcykler men der er også scootere i.
'.visbilled('1', 'billed2137.jpg', 'MC revyen 2010 forsiden', false, true).'
I 2010 udgaven er der 87 scootere der må køre 30 og 45 km/t.
'.visbilled('1', 'billed2138.jpg', 'MC revyen 2010 side 144 og 145', false, true).'
Hver model har et billede og diverse data.
'.visbilled('1', 'billed2139.jpg', 'MC revyen 2010 Giantco Lambros', false, true).'
Der er også scootere på over 50 cm³ i bladet som kræver motorcykel kørekort.
'

,'
touring nyt
' => '
Touring nyt handler om motorcykler.
'.visbilled('1', 'billed2296.jpg', 'touring nyt motorcyklistens blad', false, true).'

Så vidt jeg ved kan man ikke købe det i nogle butikker. Man skal vist være medlem for at få bladet.
Men de kan lånes på biblioteket.
'

,'
honda common service manual
' => '
Denne manual er nok den bedste generelle manual jeg har set.

Forklaringerne i manualen er ofte bedre end det man finder i scooterens egen service manual.

Her er 1988 udgaven som fylder mindst.
'.visfil('1', 'scooterhjemmeside/download/honda_common_servicemanual.pdf', 'Honda common service manual (1998 udgave)').'

Her er 2004 udgaven som fylder en del mere.
'.visfil('1', 'scooterhjemmeside/download/honda_common_servicemanual_2004.pdf', 'Honda common service manual (2004 udgave)').'

Jeg ved ikke om man kan købe den nogen steder eller hvor meget den koster.
'

,'
under 50 kubik
' => '
'.visbilled('1', 'billed2901.jpg', 'Under 50 kubik af Jens Jessen GT forlag', false, true).'
Titel : Under 50 kubik
Sider : 176
Sprog : Dansk
Forfatter : Jens Jessen
Udgiver : GT Forlag
<div style="float: left; margin-right: 10px;">
'
.galleriholder(array(
    galleri('highslide', '', 'billed2903.jpg', array('side 82 og 83'))
   ,galleri('highslide', '', 'billed2904.jpg', array('side 146 og 147'))
))
.'
</div>
<div class="clearboth"></div>
'.afsnit('fra bogens bagside','
'.citat('
Under 50 kubik fortæller den spændende historie om knallertens store guldalder i halvtredserne og tresserne, hvor der blev fremstillet mere end 2 millioner knallerter i Danmark. Aldrig hverken før eller senere i motoriseringens danske historie er der blevet fremstillet så mange køretøjer. Under 50 kubik lægger vægt på de største danske knallertmærker, som Diesella, B.F.C., Wooler, Skylon, SCO og Derby, men også de mange mindre knallertmærker, er for en dels vedkommende taget med.

Under 50 kubik er skrevet af journalist og forfatter Jens Jessen, som tidligere har skrevet seks bøger om bl.a. motorcykler og biler. Bogen er skrevet med stor indsigt og viden, og hvor det har været muligt, er fabrikkernes eget historiske materiale fundet frem. Bogen indeholder desuden et meget stort antal historiske fotos, som offentliggøres for første gang.
').'
').'
'

,'
overhaling i 3. gear
' => '
'.visbilled('1', 'billed2902.jpg', 'overhaling i 3. gear af Jens Jessen GT forlag', false, true).'
Titel : Overhaling i 3. gear
Sider : 224
Sprog : Dansk
Forfatter : Jens Jessen
Udgiver : GT Forlag
Denne bog er en efterfølger til "Under 50 kubik".
<div style="float: left; margin-right: 10px;">
'
.galleriholder(array(
    galleri('highslide', '', 'billed2905.jpg', array('side 82 og 83'))
   ,galleri('highslide', '', 'billed2906.jpg', array('side 222 og 223'))
))
.'
</div>
<div class="clearboth"></div>
'.afsnit('fra bogens bagside','
'.citat('
Overhaling i 3. gear er den naturlige efterfølger til Under 50 kubik, der behandler de store danske knallertmærker. Denne gang handler det om de store udenlandske knallertmærkers indtog i Danmark fra den spæde start i begyndelsen af halvtredserne og frem til begyndelsen af firserne, hvor det hele var slut. Først kom NSU, siden Mobylette, VeloSolex, Puch og Tomos. Senere gik det løs med Kreidler, Everton, Honda, Yamaha og Suzuki. Men overhalding i 3. gear svigter ikke de mange mindre mærker som Monark, KTM, Casal, Garelli, Fantic, Zündapp, VeloVap og Gilera, som alle har en plads i bogen.

Overhaling i 3. gear er skrevet med stor indsigt og viden af motorjournalist og forfatter Jens Jessen, som tidligere har skrevet syv bøger om bl.a. biler og motorcykler. I bogen er der lagt stor vægt på illustrationerne, og hvor det har været muligt, er der anvendt fabriksfotos. Halvtredsernes, tressernes og halvfjerdsernes tidsånd er skildret med et stort antal autentiske fotos, fra dengang håret var langt, og der var trompeter i bukerne.
').'
').'
'

,'
livsstil på 2 hjul
' => '
Hos en motorcykel forhandler fik jeg denne avis.
'.visbilled('1', 'billed3366.jpg', 'livsstil på 2 hjul avis', false, true).'
'

,'
danske knallerter
' => '
I følgende fil snakkes der på et tidspunkt om en bog der hedder "danske knallerter".
'.visfil('1', 'scooterhjemmeside/lyd/halloj_i_betalingsringen_knallert_snak.mp3').'
Jeg har ikke noget info om bogen men hvis du kender den så '.kontaktmig().' gerne.
'

,'
bibliotek
' => '
Man kan prøve at kigge under nummer 62.726 på forskellige biblioteker for at se bøger om knallerter, scootere og motorcykler.

På nogen biblioteker er der måske ikke noget interessant at komme efter men så kan man prøve et andet bibliotek og se om der er noget der.

Hvis der er nogen bestemte bøger du vil se så kan det være at biblioteket kan bestille det fra et andet bibliotek eller indkøbe det.
Prøv og snak på de ansatte hvis der er noget bestemt du vil have.

De gange jeg har kigget har de fleste bøger handlet om motorcykler eller gamle knallerter.
Bøger som primært handler om nyere scootere er vist en sjældenhed og mener ikke jeg har set det på biblioteket.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
