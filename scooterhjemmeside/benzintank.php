<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "benzintank";
$overskrift = "benzintank";
$metadescription = "forklaring af benzintanken på en scooter, benzindækslet med hul i, benzinviseren på instrumentpanelet, benzinmåler i benzintanken med svømmer, benzinfilter, benzinhane som åbner for benzinen og benzinpumpe";

$databasecenter = array(

'
benzintank
' => '
Her ses en benzintank.
'.visbilled('1', 'billed1851.jpg', 'kymco super 8 4T benzintank', false, true).'
I bunden af denne benzintank er der svejset en studs på hvor benzinslangen monteres.
'.visbilled('1', 'billed1845.jpg', 'kymco super 8 4T benzintank studs', false, true).'
'.visbilled('1', 'billed1846.jpg', 'kymco super 8 4T benzintank studs', false, true).'
Igennem hullet til benzinmåleren kan vi se bunden af benzintanken hvor studsen ses.
'.visbilled('1', 'billed1848.jpg', 'kymco super 8 4T benzintank inderside studs', false, true).'
På nogle benzintanke er der i stedet for en studs svejset et gevind i bunden af benzintanken hvor man skruer benzinhanen fast.
'

,'
benzindæksel
' => '
Her ses et benzindæksel.
Der er et lille hul i dette benzindæksel så der ikke kan opstår tryk/vakuum i benzintanken.
'.visbilled('1', 'billed1435.jpg', 'benzindæksel', false, true).'
'.visbilled('1', 'billed1432.jpg', 'benzindæksel', false, true).'
'.visbilled('1', 'billed1436.jpg', 'hul til benzintank', false, true).'
Der er 2 hakker som passer til 2 hakker på benzindækslet.
'.visbilled('1', 'billed1437.jpg', 'hul til benzintank', false, true).'
'.visbilled('1', 'billed1434.jpg', 'benzindæksel', false, true).'
'

,'
benzinviser
' => '
Jeg kalder indtil videre denne del for benzinviser selvom folk nok kalder den benzinmåler.

Den kunne måske også kaldes benzinindikator.

Her ses den i hvert fald hvad end den hedder.
'.visbilled('1', 'billed2342.jpg', 'benzinviser', false, true).'
'.visbilled('1', 'billed2359.jpg', 'benzinviser', false, true).'
Instrumentet kaldes vistnok et galvanometer.
'.visbilled('1', 'billed2345.jpg', 'benzinviser', false, true).'
På bagsiden af instrumentpanelet er der 3 lange skruer som har forbindelse indtil benzinviserens terminaler.
Den sorte ledning er fra batteriets + terminal når tændingslåsen er på ON.
Den blå/hvide og gul/hvide går begge til benzinmåleren i benzintanken.
'.visbilled('1', 'billed2352.jpg', 'instrumentpanel bagside benzinviser', false, true).'
'.visbilled('1', 'billed2353.jpg', 'kymco super 8 4T instrumentpanel', false, true).'
Modstand har 4 farveringe (rød grøn sort guld) hvilket efter hvad jeg kan finde frem til er 25 Ω ± 5%.
'.visbilled('1', 'billed2346.jpg', 'benzinviser', false, true).'
'.visbilled('1', 'billed2347.jpg', 'benzinviser', false, true).'
'.visbilled('1', 'billed2348.jpg', 'benzinviser', false, true).'
I det "ben" hvor der ikke går nogen skrue igennem er der et stykke plastik som kan drejes på med en skruetrækker.
'.visbilled('1', 'billed2349.jpg', 'benzinviser', false, true).'
Plastikken holder på hvad jeg vil tro er en meget lille magnet.
Ved at dreje magneten kan man få viseren (den røde pil) til at falde til ro det sted man ønsker.
Drejes magneten forket kan man få viseren til at virke modsat. Altså går op i stedet for ned og omvendt.
'.visbilled('1', 'billed2350.jpg', 'benzinviser', false, true).'
Her er "pilen" taget af.
'.visbilled('1', 'billed2351.jpg', 'benzinviser', false, true).'
'

,'
benzinmåler
' => '
Her ses en benzinmåler monteret i en benzintank.
'.visbilled('1', 'billed1767.jpg', 'benzinmåler på benzintank og stik', false, true).'
Her er benzinmåleren taget op.
'.visbilled('1', 'billed1847.jpg', 'kymco super 8 4T benzintank benzinmåler afmonteret', false, true).'
Benzinmåleren har en svømmer som flyder oven på benzinen samt 2 variable modstande som ændre ohm værdi i takt med at benzinen og dermed svømmeren bevæger sig op og ned.

Her ses benzinmåleren.
'.visbilled('1', 'billed1849.jpg', 'kymco super 8 4T benzinmåler', false, true).'
Stikket har 3 ledninger.
Den ene ledning er stelforbindelse.
De 2 andre ledninger går til benzinmåleren på instrumtpanelet som får 12 volt fra batteriets + (plus) terminal når tændingslåsen er drejet til ON.
'.visbilled('1', 'billed0409.jpg', 'benzinmåler', false, true).'
Hvorfor der er 2 variable modstande i stedet for kun 1 modstand ved jeg ikke men måske er det for at opnå større præcision eller stabilitet.

Her ses benzinmåleren i sin laveste og højeste position.
'.visbilled('1', 'billed1850.jpg', 'kymco super 8 4T benzinmåler', false, true).'
'.visbilled('1', 'billed2225.jpg', 'kymco super 8 4T benzinviser instrumentpanel', false, true).'

'.visbilled('1', 'billed2360.jpg', 'kymco super 8 4T benzinmåler', false, true).'
'.visbilled('1', 'billed2361.jpg', 'kymco super 8 4T benzinmåler modstand', false, true).'
'.visbilled('1', 'billed2362.jpg', 'kymco super 8 4T benzinmåler fjeder der glider i modstand', false, true).'
'

,'
video
' => '
'.visflash('0', "http://www.youtube.com/watch?v=qSyCjcKTyBM", 'her ses hvordan benzinmåleren og benzinviseren virker sammen', true).'
'

,'
benzinfilter
' => '
Her ses et benzinfilter.
'.visbilled('1', 'billed1038.jpg', 'benzinfilter', false, true).'
Benzinfilteret filtrer benzinen så snavs og rust fra benzintanken ikke kommer ind i karburatoren hvor det kan sætte sig fast ved nåleventilen og i dyserne.

På dette benzinfilter står der UP og FLOW og er der en pil der viser hvilken vej benzinen skal flyde.
'.visbilled('1', 'billed1852.jpg', 'benzinfilter', false, true).'
Her har jeg tegnet det med sort så det ses mere tydeligt.
'.visbilled('1', 'billed1853.jpg', 'benzinfilter', false, true).'
'

,'
benzinhane
' => '
En benzinhane åbner og lukker for benzintilførelsen mellem benzintank og karburator.

Hvis karburatoren er utæt så vil benzinen i bunden af karburatoren løbe ud.
Benzinhanen sørger for at alt benzinen i benzintanken ikke også løber med ud.

Der findes 2 typer benzinhaner. Automatisk og manuel.

'.afsnit('automatisk benzinhane','
Den automatiske benzinhane åbner automatisk for benzin til karburatoren når motoren køre og lukker automatisk når motoren er stoppet.

Her ses en automatisk benzinhane.
'.visbilled('1', 'billed1854.jpg', 'automatisk benzinhane', false, true).'
IN tilsluttes op mod benzintanken.
OUT tilsluttes ned mod karburatoren.
'.visbilled('1', 'billed1855.jpg', 'automatisk benzinhane', false, true).'
Den øverste slange er vakuumslangen som tilsluttes indsugningsstudsen.
'.visbilled('1', 'billed0486.jpg', 'automatisk benzinhane', false, true).'
Når der er vakuum i vakuumslangen vil der kunne flyde benzin mellem de 2 andre slanger.
'.visbilled('1', 'billed0415.jpg', 'brændstofsystem og slanger', false, true).'

Nogle automatiske benzinhaner er skruet i benzintanken også er der kun 2 slanger tilsluttet.
Det hvide rør er en si.
'.visbilled('1', 'billed1402.jpg', 'automatisk benzinhane', false, true).'
Her er en tegning der viser hvordan den automatiske benzinhane kan se ud indeni.
På tegningen er der hul til atomosfærisk lufttryk men det er ikke alle benzinhaner der har det.
Men på benzinhaner med 4 slanger kan en af slangerne gå til toppen af benzintanken for at få atomosfærisk lufttryk.
'.visbilled('1', 'billed3020.jpg', 'automatisk benzinhane tegning', false, true).'
').'

'.afsnit('manuel benzinhane','
På en manuel benzinhane skal man selv åbne og lukke benzinhanen før og efter kørsel.

Her ses en Sachs Madass med manual benzinhane.
'.visbilled('1', 'billed2911.jpg', 'manuel benzinhane', false, true).'
Her ses en manuel benzinhane med 3 indstillinger.
'.visbilled('1', 'billed0082.jpg', 'manuel benzinhane', false, true).'
Håndtaget kan drejes til hovedtank, luk og reservetank.
'.visbilled('1', 'billed1309.jpg', 'manuel benzinhane', false, true).'

Køre man på hovedtanken og løber tør for benzin så kan man dreje håndtaget til reservetanken også har man for eksempel 0,35 liter tilbage så man kan nå at køre hen til en tankstation.

Drejes håndtaget nedad så gælder symbolet øverst også er hovedtanken valgt.
Drejes håndtaget opad så gælder symbolet nederst også er reservetanken valgt.

Har man en scooter/knallert med manuel benzinhane så skal man selv lukke for benzinhanen efter endt tur og åbne den igen når man skal køre.
').'
'

,'
benzinpumpe
' => '
Her ses 2 benzinpumper.
'.visbilled('1', 'billed2115.jpg', 'firkantet benzinpumpe', false, true).'
'.visbilled('1', 'billed2116.jpg', 'rund benzinpumpe', false, true).'
En benzinpumpe findes på scootere hvor benzintanken er placeret i bunden af scooteren.
Benzinpumpen er istand til at pumpe benzinen op over benzintanken.
'.visbilled('1', 'billed2714.jpg', 'benzintank benzinpumpe', false, true).'
'.visbilled('1', 'billed2709.jpg', 'benzintank benzinpumpe karburator', false, true).'
Benzinpumper kan vist både være elektriske og ikke elektriske.

De minder om automatiske benzinhaner og slangerne er forbundet på samme både.
Det pulserende vakuum fra slangen til indsugningsstudsen sørger for at pumpe benzinen op så vidt jeg forstår.

'.visbilled('1', 'billed2820.jpg', 'benzinpumpe', false, true).'
'.visbilled('1', 'billed2821.jpg', 'benzinpumpe', false, true).'
'

,'
noget andet
' => '
'.visbilled('1', 'billed2727.jpg', 'benzinpumpe i benzintank', false, true).'
'.visbilled('1', 'billed2728.jpg', 'benzinktank i bunden af scooter', false, true).'
'.visbilled('1', 'billed2729.jpg', 'store slange på benzintank', false, true).'
'.visbilled('1', 'billed2730.jpg', 'benzinpumpe i benzintank slanger og stik taget af', false, true).'
'.visbilled('1', 'billed2731.jpg', 'benzinkpumpe taget op af benzintank', false, true).'
'.visbilled('1', 'billed2732.jpg', 'benzinpumpe og benzinmåler enhed', false, true).'
Denne tegning forklarer det vist meget godt.
'.visbilled('1', 'billed2881.jpg', 'SePI Synerject electronic Port Injection tegning', false, true).'

'

,'
egne erfaringer
' => '
På min scooter var der en metal dims på tværs af hullet hvor man fylder benzin på.
'.visbilled('1', 'billed2615.jpg', 'scooter benzintank opfyldningshul', false, true).'
Metal dimsen på tværs er der vist for at vise at man ikke skal fylde benzin over den.

Men den var irriterende fordi så kan man ikke få benzinpistolen ordentligt ned i hullet og benzinen kan sprøjte op fordi det rammer den metal dims og kanten af hullet.
Mange benzinstationer har et system hvor benzinpistolen selv slår fra hvis der kommer benzin op hvilket så gør at benzinpistolen hele tiden slog fra også skulle man fylde benzin på meget langsomt så den ikke slog fra.

Jeg klippede så den metal dims over og bøjede enderne ind til siderne så nu kan jeg få benzinpistolen helt ned og fylde benzin på hurtigt uden at benzinpistolen slår fra hele tiden og det sprøjter ikke op med benzin.
'.visbilled('1', 'billed2616.jpg', 'scooter benzintank opfyldningshul', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
