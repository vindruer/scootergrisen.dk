<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "ventiler - Service";
$overskrift = "ventiler - Service";
$metadescription = "justering af ventiler på en 4 takt 50 cm³ scooter motor";

$databasecenter = array(

'juster ventiler' =>
'
Motoren skal være kold (max 35 °Celsius) inden ventilerne justeres ellers bliver justeringen forkert.

Kig i scooterens manual og find ventilspillerummet for både indsugnings og udstødningsventilen.
Se eventuelt '.ahref('service_ventiler.php#ventil_spillerum_fra_manualer', 'Ventil spillerum fra manualer').'.

Du skal bruge søgerblade i korrekt tykkelse.
'.visbilled('1', 'billed0514.jpg', 'søgerblade', false, true).'
Sæt scooteren på centerstøtteben indenfor eller et sted hvor det ikke blæser så der ikke kommer sandkorn ind i motoren.

Fjern sædet og plastikskjoldet foran motoren for at få adgang til ventildækslet.

Fjern ventildækslet.
'.visbilled('1', 'billed0515.jpg', 'ventildæksel topstykke', false, true).'
Knastakslen skal nu drejes så vippearmene ikke trykker ned på ventilerne.

Ventilerne er helt lukket når stemplet er ved TDC (Top Dead Center) i kompressionstakten.

Drej knastakslen ved at bruge kickstarteren eller ved at fjerne blæserskjoldet på højre side af motoren og dreje svinghjulet.
'.visbilled('1', 'billed0714.jpg', 'blæser på svinghjul', false, true).'
Drej indtil det store hul på kædens tandhjul peger væk fra motoren og de 2 mindre huller/mærker er parallelle med kanten af topstykket.
'.visbilled('1', 'billed0516.jpg', 'knastaksel tandhjul huller mærker', false, true).'
Svinghjulet har et T mærke med en streg som skal stå ud for et hak i motorblokken.
'.visbilled('1', 'billed0517.jpg', 'svinghjul t mærke', false, true).'
'.visbilled('1', 'billed0518.jpg', 'svinghjul t mærke', false, true).'
Når svinghjulet drejer 1 omgang så drejer knastakslen kun en halv omgang.
Så hvis du ikke kan se det store hul på tandhjulet selvom T-mærket på svinghjulet står rigtigt så skal du bare dreje svinghjulet 1 omgang til.

Når mærkerne på knastkæde tandhjulet og T mærket på svinghjulet står rigtigt betyder det at vippearmene ikke trykker ned på ventilerne.

Nu kan vi begynde at justere ventil spillerummet.

Løsn låsemøtrikken på den ene ventil.
'.visbilled('1', 'billed0519.jpg', 'ventil justering', false, true).'
Placer søgerblad i den korrekte tykkelse mellem ventil og justerskrue.
Løsen justerskruen lidt hvis søgerbladet ikke kan komme ind.
'.visbilled('1', 'billed0520.jpg', 'ventil justering', false, true).'
Drej justerskruen med for eksempel en lille svensknøgle indtil den går lidt stramt på søgerbladet men løst nok til at søgerbladet stadig kan bevæges med en smule modstand.

Hold justerskruen stille og spænd låsemøtrikken fast.
'.visbilled('1', 'billed0521.jpg', 'ventil justering', false, true).'
Check igen at søgerbladet kan bevæges med en smule modstand.

Prøv om du kan få et søgerblad imellem som er en størrelse tykkere.

Juster igen hvis nødvendigt.

Gør det samme for den anden ventil og bruge den korrekte tykkelse søgerblad.

Justeringen er korrekt når søgerbladet kan bevæge sig mellem ventil og justerskrue med en smule modstand og det ikke er muligt at få et tykkere søgerblad ind mellem ventil og justerskrue.
Hvis ventilspillerummet skal indstilles til 0,08 mm så må et 0,09 mm ikke kunne komme ind.

Hvis du undrer dig over at et tykkere søgerblad kan komme lidt ind mellem ventil og justerskrue men ikke helt ind så er det fordi kontaktpunktet mellem ventil og justerskrue ikke er helt fladt men derimod er justerskruens ende afrundet så det kun er midten der har kontakt med ventilen.
'.visbilled('1', 'billed0522.jpg', 'ventil vippearm kontaktpunkt', false, true).'
Her ses vippearmen og justerskruen nedefra.
'.visbilled('1', 'billed0537.jpg', 'kobling og koblingsfjeder', false, true).'
Læg mærke til hvordan skruen er slidt.

Grunden til at der skal være et lille mellemrum mellem ventil og justerskrue er fordi metallet udvidder sig når det bliver varmt.

Ventilen bliver simpelhen længere når den bliver varm.

Hvis der ikke var noget eller nok mellemrum ville ventilerne ikke kunne lukke helt når de blev varme og dermed ville motoren miste kompression.
Ventilerne ville ikke kunne få kontakt med ventilsædet som er det sted ventilerne rører ved topstykket når de er lukket.
'.visbilled('1', 'billed0715.jpg', 'ventilsæde ventilstyr', false, true).'
Får ventilerne ikke kontakt med ventilsædet så kan de ikke så godt komme af med deres varme også kan ventilerne blive for varme og muligvis bukke eller smelte.

Hvis ventilspillerummet er for lille vil kompressionen blive lavere og tomgangen blive dårlig, lavere motorkraft og det kan resultere i brændte/ødelagte ventiler.
Hvis ventilspillerummet er for stort vil det resultere i støj fra ventilerne når motoren køre.

Det er bedre at køre med for stort ventilspillerum end for lille hvis man skulle vælge.
'

,'
anden måde
' => '
Der findes andre slags motorer hvor det ser lidt anderledes ud når man skal justere ventiler.
Så her er nogle billeder som viser hvordan man gør på dem.

Her ses motoren fra Sachs Madass.
'.visbilled('1', 'billed2421.jpg', 'sachs madass', false, true).'
Motoren drejes modsat urets retning indtil T mærket ses gennem hullet.
'.visbilled('1', 'billed2422.jpg', 'sachs madass', false, true).'
De små hakker i gevindet skal stå ud for stregen ved siden af T mærket.
'.visbilled('1', 'billed2423.jpg', 'sachs madass', false, true).'
T mærket skal kunne ses ved kompressionstakten. Jeg ved så ikke om det er meningen man skal mærke sig frem til kompressionstakten som er der hvor der er mest modstand når man drejer.
Men ellers tror jeg nok man kan checke det ved at der er et O mærket på knastakseltandhjulet som skal stå ud for hakket yderst på topstykket.
'.visbilled('1', 'billed2427.jpg', 'sachs madass', false, true).'
Da svinghjulet sidder på venstre side af motoren vil mærkerne stå i modsat rækkefølge iforhold til motorer hvor svinghjulet sidder på højre side af motoren.
'.visbilled('1', 'billed2424.jpg', 'sachs madass', false, true).'
Her kan man kontrollere...
'.visbilled('1', 'billed2425.jpg', 'sachs madass', false, true).'
...og justere ventilerne.
'.visbilled('1', 'billed2426.jpg', 'sachs madass', false, true).'
'

,'
video
' => '
'.visflash('0', "http://www.youtube.com/watch?v=s0K-ytyjOFg", 'ventil justering', true).'
'.visflash('0', "http://www.youtube.com/watch?v=vQ9ccGXtZL0", 'forklare en masse om ventiler og vigtigheden af korrekt ventilspillerum', true).'
'

,'
shims
' => '
På nogle få 50 cm³ scooter modeller er der shims i stedet for justerskruer.
Shims er små flade metal skiver med en bestemt tykkelse.

Her ses 2 shims i forskellig tykkelse.
'.visbilled('1', 'billed2474.jpg', 'shims', false, true).'

Her ses 2 shims fra Yamaha Giggle.
'.visbilled('1', 'billed0717.jpg', 'yamaha giggle shims', false, true).'

På scootere med shims justeres ventilspillerummet ved at skifte shims til en anden tykkelse.

På Yamaha Giggle skal indsugningsventilerne (der er 2) have et spillerum på 0,10-0,16 mm.

Ventilspillerummet kontrolleres ved at måle ventilspillerummet med søgerblade.
Hvis spillerummet er 0,25 mm så kigger man på den shim som sidder i og ved at sætte en shim i som er 0,10 mm tykkere får vi et nyt spillerum på 0,15 mm.

Hvis den oprindelige shim har nummer 175 så skal den skiftes ud med en shim med nummer 185 for at gøre ventilspillerummet 0,10 mm mindre.
'.visbilled('1', 'billed2473.jpg', 'yamaha giggle shims indsugning', false, true).'

En shim med nummer 175 er 1,75 mm tyk.

Shim tykkelserne hopper for eksempel med 0,05 mm.

Se eventuelt '.ahref('http://repvideo.lars-mc.dk/repvideo/view.repair_video.php?id=27', 'Larsmc.dk - Ventiljustering ved hjælp af shims').'
'

,'
ventil spillerum fra manualer
' => '
Her ses ventil spillerum som jeg har samlet fra manualerne under '.ahref('download.php', 'Download').'.
De er til 50 cm³ scootere.
'.
box(array('170', '170', '170')
   ,array(
       array('model', 'indsugningsventil (mm)', 'udstødningsventil (mm)')
      ,array('139QMA/139QMB',    '0,06',              '0,08')
      ,array('Apollo 36',        '0,05',              '0,10')
      ,array('Baotian',          '0,06',              '0,08')
      ,array('FY50QT',           '0,10',              '0,10')
      ,array('Honda Dax ST50',   '0,05 (± 0,02)',     '0,05 (± 0,02)')
      ,array('Kinroad Chopper (XT50Q)',  '0,05',              '0,08')
      ,array('Kinroad XT50GY',   '0,05',              '0,08')
      ,array('Kinroad XT50PY',   '0,05',              '0,08')
      ,array('Kinroad XT50QT',   '0,05',              '0,08')
      ,array('Kinroad XT50QT-2', '0,05',              '0,08')
      ,array('Kymco Agility',    '0,04',              '0,04')
      ,array('Kymco Super 8',    '0,04 eller 0,08',   '0,04 eller 0,08')
      ,array('Peugeot Tweet',    '0,05 (± 0,02)',     '0,10 (± 0,02)')
      ,array('Piaggio Fly',      '0,10',              '0,15')
      ,array('Sachs Madass',     '0,05 (± 0,02)',     '0,08 (± 0,02)')
      ,array('Sachs Saxy',       '0,05',              '0,08')
      ,array('Skyteam Dax',      '0,05',              '0,05')
      ,array('Skyteam Monkey',   '0,05',              '0,05')
      ,array('Skyteam PBR',      '0,05',              '0,05')
      ,array('Sym Fiddle',       '0,03 (± 0,02)',     '0,05 (± 0,02)')
      ,array('Sym Mio',          '0,05 (± 0,02)',     '0,10 (± 0,02)')
      ,array('Sym Orbit',        '0,03 (± 0,02)',     '0,03 eller 0,05 (± 0,02)')
      ,array('Yamaha Giggle',    '0,10-0,16',         '0,18-0,24')
      ,array('Yamasaki YM50-8B', '0,05',              '0,08')
   )
)
.'
De spillerum jeg har læst fleste gange er 0,05 mm for begge ventilen eller 0,05 mm for indsugningsventilen og 0,08 mm for udstødningsventilen.

Ifølge bogen "Haynes - Scooters" skal stort set alle de nævnte 4 takt scootere i bogen indstilles til 0,10 mm på indsugningsventilen og 0,15 mm på udstødningsventilen.
Blandt andet "Piaggio Fly 50 4T", "Piaggio Zip 50 4T", "Vespa ET4 50".
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
