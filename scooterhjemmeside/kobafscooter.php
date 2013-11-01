<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "råd til køb af ny eller brugt scooter/knallert";
$overskrift = "råd til køb af ny eller brugt scooter/knallert";
$metadescription = "forsikring, typeattest, nummerplade, slutseddel og links til hjemmesider med brugte scootere/knallerter";

$linksarray = require_once './php/linksdatabase.php';
$forsikringsselskaberarray = $linksarray['forsikringsselskaber'];
$kobogsalgarray = $linksarray['køb og salg'];

if(isset($forsikringsselskaberarray)){

      $forsikringsselskaberkode = '';
      $forsikringsselskaberkode .= galleri('start');

      foreach($forsikringsselskaberarray as $link){

         $forsikringsselskaberkode .= galleri('link', $link[0], $link[1], $link[2]);

      }

      $forsikringsselskaberkode .= galleri('slut');

}

if(isset($kobogsalgarray)){

      $kobogsalgkode = '';
      $kobogsalgkode .= galleri('start');

      foreach($kobogsalgarray as $link){

         $kobogsalgkode .= galleri('link', $link[0], $link[1], $link[2]);

      }

      $kobogsalgkode .= galleri('slut');

}

$databasecenter = array(

'
introduktion
' => '
Her på siden kan du få nogle råd hvis du skal købe ny eller brugt scooter.

'.kontaktmig(1).' gerne hvis du selv har købt scooter og har nogen gode råd til denne side.
'

,'
køb af ny scooter
' => '
'.afsnit('opret forsikring','
Nogle butikker kan hjælpe dig med at oprette en forsikring når du køber en scooter hos dem.
Beslut dig for om du vil oprette forsikring hos det forsikringsselskab de tilbyder i butikken eller om du selv vil tage kontakt til et andet forsikringsselskab.

Her ses nogle forsikringsselskaber.
'.$forsikringsselskaberkode.'
Når du opretter en forsikring så får du et forsikringsbevis.
Enten i butikken eller af det forsikringsselskab du vælger.
Forsikringen kan gælde med det samme selv før du har betalt for den.
').'

'.afsnit('typeattest','
Når du køber en ny scooter får du en typeattest som er underskrevet af importøren og forhandleren.
Se '.ahref('registrering.php#typeattest', 'Typeattest').'.
').'

'.afsnit('nummerplade','
Hvis du køber din nye scooter i en butik som tilbyder at hente nummerpladen for dig så beslut om du vil lade butikken gør det eller om du selv vil hente og købe nummerpladen hos skat.
Butikken skal gerne have 500-1000 kroner hvis de skal hente nummerpladen.

<mark>Reglerne for hvornår man kan købe nummerplade har ændret sig så det er ikke sikkert man kan købe nummerplade hos skat mere, jeg mangler info om dette. Så det er ikke sikkert det følgende er rigtigt.</mark>

Hvis du selv vil købe din nummerplade så tag dit forsikringsbevis og typeattest med til skat.
I butikken eller hos skat kan du få et papir som hedder "Anmeldelse til syn og/eller registrering af motorkørertøjer m.v." (også kaldet MO 2A) som du udfylder.

Så afleverer du alle 3 papirer til skat og betaler for nummerpladen.
Nummerpladen til både lille og stor knallert koster 590 kroner.
Tidligere kostede det 90 kroner for en nummerplade til en lille knallert men det er vist lavet om.

Jeg kan ikke huske om de beholder alle papirerne men du kan eventuelt tage en kopi af papirerne hvis du vil kunne huske dem.

Det kan tage flere timer at stå i kø hos skat så tag noget underholdning med.
').'
'

,'
køb af brugt scooter
' => '
Mit bedste råd til køb af brugt scooter er at du skal prøve at køre på scooteren inden du køber den.
Når du prøver en tur kan du måske mærke, høre og føle om der er noget i vejen med scooteren.
Køber du en scooter som ikke kan starte kan der være mange grunde til at den ikke kan starte og det kan blive dyrt og tage lang tid at lave, specielt hvis du ikke selv kan lave den og skal betale en mekaniker for at lave den.

Her er nogle links til hjemmesider hvor du kan finde brugte scootere og selv kan oprette en annonce.

'.afsnit('hjemmesider med brugte scootere','
'.$kobogsalgkode.'
').'

'.afsnit('det vigtigste','
Kør en tur på den.
Passer scooterens højde til dig.
Kan du nå jorden med fødderne når du holder stille uden at du skal ned fra sædet.
Rammer styret dine ben når der drejes.
Virker både el og kickstarter.
Kan den holde sig selv kørende i tomgang.
Virker alle lys (kort/langt, bag, bremse, blink, position, instrument, nummerplade).
Virker bremserne.

Jo flere km den har kørt jo mere slidt er den.
Spørg sælgeren om at se papir som typeattest/registerings attest og kvitteringer.
Få en snak med ejeren og spørg om alt er originalt eller om der er skiftet nogle dele på den.
Spørg om den har været udsat ulykker så stellet eller andre dele eventuelt er skæve.
Spørg ejeren hvor hurtigt den kan køre og prøv det selv.
Check at ratlås, sædelås, topbokslås, ekstra lås virker og at alle nøglerne følger med.
Check at stelnummer og motornummer ikke er forsøgt fjernet eller ændret.
Undersøg scooterens ny pris. Det kan være at scooteren nu kan købes billigere end dengang sælgeren købte sin fra ny.
').'

'.afsnit('det mindre vigtige','
Spørg sælgeren om hvad der er i stykker og hvad der ikke virker så godt og overvej om du vil betale de ekstra penge til køb af nye dele og den tid det vil tage dig og lave det og løn til mekaniker hvis du ikke kan lave det selv.
Check for rust (specielt udstødningen er tit rusten).
Tag fat i scooterens dele og check at de sidder fast.
Plastikskjoldende er ofte i stykker og er måske ikke et problem hvis du kan leve med det. Men det kan måske være dyrt/svært at få fat i nye skjolde.
Tænk på at nogle scootermærker/modeller har større sandsynlighed for at blive stjålet.
Check dækkene for slid.
').'

'.afsnit('andet','
Følger der ekstra udstyr med... topboks, alarm, ekstra lås, hjelm.
Følger manualen med.
Hvis du har set scooteren i en annonce så se om alt nu også er som der stod i annoncen eller om sælgeren direkte har løjet om noget.
Hvis noget på scooteren skal laves af en mekaniker kan det blive dyrt.
').'
<!--
'.afsnit('efter købet','
Tidligere var det hos skats nummerpladeekspedition men skulle købe nymmerplade med det er nu ændret til synshaller og forhandlere som kan ses her : '.ahref('http://www.skat.dk/SKAT.aspx?oId=2048380&vId=0').'.

...
Du tager reg. attesten med fra tidligere ejer og afleverer den hos synshallen, herefter får du en gul reg. attest som er en midlertidig en, og du får pladen udleveret. Nogle dage efter kommer der en grå en fra Skat, som er den originale. I mellemtiden har forsikringsselskabet sendt dig et girokort, til betaling af ansvar/kasko.
...

Hvis du køber en brugt scooter så skal du inden 3 uger aflevere en anmeldelse til skats nummerpladeekspedition og fortælle du er den nye ejer.
Du skal også kontakte et forsikringsselskab inden de 3 uger og lave en ansvarsforsikring.
Den gamle ejers forsikring gælder i 3 uger efter købet.
'.ahref('links.php#forsikringsselskaber', 'Se forsikringsselskaber').'.
Når du har fået forsikringspapirene skal du have scooteren registeret i dit navn hos skats nummerpladeekspedition.
Det er gratis.
Du skal vistnok medbring dit forsikringsbevis og en anmeldelses blanket som du kan få hos skat.
Du kan finde det nærmeste nummerpladeekspedition her : '.ahref('http://www.skat.dk/SKAT.aspx?oID=349004', 'http://www.skat.dk/SKAT.aspx?oID=349004').'
Er det ikke sådan det foregår ?.
').'
-->
'.afsnit('undgå at blive snydt','
Spørg om sælgeren har kvitteringen fra dengang sælgeren købte scooteren.

Kontakt eventuelt politiet for at høre om den er meldt stjålet.
Hvis din lokale politistation ikke vil oplyse om den er stjålet over telefonen så prøv at ringe til en anden station eller tag scooteren med ned til politiet.
Der er nogen på nettet der skriver at politiet ikke vil oplyse om den er stjålet i telefonen.

Tag eventuelt en ven med som ved noget om scootere hvis du ikke selv ved så meget så i kan være to om at vurdere scooteren.
Print en slutseddel som dig og sælgeren kan udfylde sammen for at undgå eventuelle problemer og misforståelser.
Du (køberen) beholder slutsedlen når den er udfyldt.
').'

'.afsnit('slutseddel','
Ved købet kan du og sælgeren udfylde denne slutseddel som bevis for købet hvis der skulle blive nogle problemer senere.
'
.galleriholder(array(
    galleri('thumbnail', 'download/slutseddel_fra_politiet.pdf', 'andet/slutseddel_fra_politiet.jpg', 'slutseddel fra politiet', '', '', '', '')
   //,galleri('thumbnail', 'download/slutseddel_fra_fdm.pdf', 'andet/slutseddel_fra_fdm.jpg', 'slutseddel fra FDM', '', '', '', '')
))
. '
').'

'.afsnit('køb af brugt scooter uden nummerplade','
Der er af og til nogen der skriver om at de vil købe eller har købt en brugt scooter som ikke har nogen nummerplade og papir og derfor ikke ved om det er en 30 eller 45 km/t scooter.

Hvis det er en 30 km/t scooter som er købt fra ny før den 1. Juli 2006 så skal den ikke have nummerplade på selvom den bliver solgt igen senere.

Men det kunne også være en 45 km/t scooter som har haft nummerplade på men hvor den er blevet taget af.
For eksempel hvis forsikringen er blevet afmeldt.

Der er vist også noget med at det kan give problemer hvis der ikke er nogen typeattest/registerings attest med til scooteren.

Man kan måske ud fra stelnummeret se om det er en 30 eller 45 km/t.
I nogle typegodkendelser kan stå "Tegn 8 og 9 i stelnummeret er 30 el. 60 og angiver den maksimale hastighed = 30 km/t".
Så hvis det var en Kymco Agility og stelnummeret hedder xxxxxxx30xxxxxxxx så skulle det altså betyde at det er en 30 km/t scooter.

Se om du kan finde scooteren i '.ahref('galleri.php', 'galleri').'.
Måske der står noget om det på scooterens side.

Du kan også se nederst i hver '.ahref('typegodkendelser.php', 'typegodkendelse').'.
Kig på scooterns fabrikationsplade hvor typegodkendelsesnummeret står og sammenlign med det der står i typegodkendelsen.
').'
'

,'
køb af scooter på hjemmesiden
' => '
Der har været en del brugere som har sprugt hvordan de kan købe de scootere der er på hjemmesiden ('.ahref('galleri.php', 'galleri').').

Jeg sælger ikke scootere eller noget andet gennem hjemmesiden så derfor kan man ikke købe eller bestille noget.

De priser jeg skriver ved de forskellige scootere er priser jeg har set hos forhandlerne og set på andre hjemmesider.
Hvis der for eksempel står 9.995 - 10.995,- så betyder det at det billigste jeg har set den til er 9.995,- og det dyreste jeg har set den til er 10.995,-.
Oven i den pris kommer så godt som altid leveringsomkostninger og nummerplade.

Du kan finde forhandlere på links siden ('.ahref('links.php#forhandlere', 'forhandlere').' og '.ahref('links.php#producenter', 'producenter').').

Kendte mærker som Aprilia, Kymco, Honda, Yamaha, Piaggio, Sym, PGO har gerne en forhandler liste på deres danske hjemmeside så man let kan finde en forhandler af de mærker.

De fleste kinesiske køretøjer som Apollo, Baotian, Kinroad, Qingqi, Skyteam, Yiben, Zongshen og hvad de ellers hedder har typisk ikke nogen dansk hjemmeside. Derfor kan det være sværre at finde en forhandler af de mærker.

Mærker som Earthenergy, Motor Mania, Texas, TMS, Yiben, Xmotos er blevet solgt i en periode men så kan forhandleren havde holdt op med at sælge dem eller gået over til et andet mærke eller firmaet er gået konkurs eller andet og derfor kan det være svært at finde ud af om og hvad de kan købes.

Så det er ikke alle scootere på hjemmesiden som stadig kan købes. I hvert fald ikke som ny.

Hvis det er en af de kinesiske scootere man vil købe så sælges en lignende model muligvis under et andet navn.

Du velkommen til at '.kontaktemig().' hvis du stadig ikke kan finde en forhandler.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
