<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "vinterråd";
$overskrift = "vinterråd";
$metadescription = "råd der specielt er brugbare om vinteren til scootere";

$databasecenter = array(

'
introduktion
' => '
Her findes råd der specielt er brugbare om vinteren.
'.visbilled('1', 'billed1165.jpg', 'kymco super 8 med sne på', false, true).'
Hvis du har et vinterråd så '.kontaktmig().' gerne.
'

,'
hold varmen
' => '
Når man køre i koldt vejr kan man hurtigt komme til at fryse.
For mit eget vedkommende har jeg mest haft det koldt om fingre, hals, tær og bryst i den rækkefølge.
Fryser man meget kommer man til at ryste og det går ud over kørslen.

'.afsnit('opbevaring af beklædning','
Hjelm, vanter, jakke og anden beklædning bør opbevares indenfor i varmen så det er varmt når du skal afsted.
Hvis din hjelm ligger udenfor i scooteren så er den kold når du skal have den på og du vil have det koldt allerede fra starten.
').'
'.afsnit('inden man køre','
Det er godt at bevæge hele kroppen og drikke en varm kop te eller andet varmt inden man skal køre for så er man varm indvendig og vil kunne holde varmen i længere tid.
').'
'.afsnit('fingre','
Det er ikke sjovt at fryse på fingrene og det kan godt gøre ondt hvis man køre langt eller det er meget koldt.

Et par '.ahref('#vanter', 'vanter').' hjælper på at holde varmen.
Man kan bruge et par '.ahref('#tynde_vanter', 'tynde vanter').' under de almindelige vanter som hjælper en del mere med at holde varmen.

'.ahref('#scooterluffer', 'Scooterluffer').' kan hjælpe endnu mere med at holde varmen.
Scooterlufferne beskytter både med vind, regn og sne.
Så hvis man bruger et par tynde vanter, almindelige vanter og scooter luffer så kan man nogenlunde holde varmen med mindre man køre langt.

Det er godt at have mere end et par vanter for så kan man skifte hvis det ene par bliver våde.

Der findes også '.ahref('vinterrad.php#handtag_med_varme', 'håndtag med varme').'.
').'
'.afsnit('hals','
Halsen kan beskyttes med et '.ahref('#halsror', 'halsrør').' som man trækker over hovedet ligesom en hue også der bare hul hele vejen igennem så den kan sidde omkring hals, øre og også mund og næse hvis man vil.
Den er rigtig god og jeg er meget glad for den jeg købte.

Man kan også bruge et halstørklæde men det kan være sværre at få til at sidde rigtigt og det kan gå løst.
').'
'.afsnit('tær','
Det kan selvfølgelig hjælpe at tage nogle ordentlige strømper og støvler på.
Hvis man bevæger tærne mens man køre så hjælper det vistnok på at få varmen.
').'
'.afsnit('bryst','
Hvis jeg har kørt en lang tur så kan jeg godt komme til at fryse på brystet selvom jeg syns jeg har rimelig meget tøj på.
Det må være fordi mit tøj ikke er vindtæt.
Man kan eventuelt tage noget stof, en t-shirt eller noget og lægge ind på brystet for at beskytte mod vinden.
').'
'.afsnit('efter man har kørt','
Det er en god ide at lægge sit kolde og våde tøj til tørre på radiationen lige når man kommer indenfor.
Gør man ikke det ender man med at skulle tage vådt tøj på næste gang man skal ud og køre og så mister man meget hurtigere varmen.
').'
'

,'
vinterproblemer
' => '
Om vinteren har jeg oplevet følgende problemer.

Svært at starte motor med el starteren.
Motoren kan gå istå hvis man lige har startet fra kold og giver gas.
Motoren skal køre i tomgang et par minutter før den kan trække.
Motoren går ud når man lige har startet, kørt lidt og stoppet for rødt i et lyskryds.

Disse problemer kan vist løses ved at sørge for batteriet er fuldt opladt, ved at lade scooteren køre i tomgang nogle minutter før man køre og korrekt justering af tomgang.
'

,'
låseolie
' => '
Låseolie er godt at bruge hele året rundt for at låsene virker let.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1166.jpg', array('låseolie', ''))
))
.'
Om vinteren kan eventuel vand i låsene fryse til is også kan det være svært bruge låsen.
Ved at spøjrte låseolie ind i låsen bliver vandet erstattet med noget som har en lavere frysepunkt og derfor ikke fryser om vinteren.

Låseolien kan bruges i tændingslås, sædelås, topbokslås, kædelås osv.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1167.jpg', array('tændingslås', ''))
))
.'
Du kan også bruge WD-40 eller anden tyndtflydende smørelse i stedet for låseolie.
En lille dåse låseolie er dog lettere at have med i scooteren da den ikke fylder så meget.

Efter du har sprøjtet hullet godt med smørrelse så kan det være en god ide og hænge noget toiletpapir eller en klud ved låsen for eksempel ved baggagekrogen så du kan tørre nøglen af efter den har været i låsen de kommende uger da der vil være smørrelse på låsen når du tager den ud.

Skulle det ske at din lås er frosset fast så kan du tø låsen op ved at hold munden tæt om nøglehullet og langsomt blæse din varme ånde ind i låsen.
'

,'
lås på jorden
' => '
Når man låser sin scooter gennem fælgen så er det en god ide at hænge kæden op på bagskærmen.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2391.jpg', array('lås hændt op på bagskærm', ''))
))
.'
På den måde bliver låsen ikke overdækket med sne.

Lad låsens nøglehul pege ned ad.

På min kædelås er der en stofstrømpe omkring kæden som suger vand hvis den ligger på jorden.
Ved at hænge låsen op undgår man at få så meget vand med ned i bagagerummet.
'

,'
ben tæppe eller hvad det hedder
' => '
Man kan få sådan et tæppe af en slags til at have over benene.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2417.jpg', array('ben varmer ting', ''))
))
.'
Jeg kan godt komme til at fryse på lårene specielt hvis jeg ikke tager overtræksbukser på men det lidt besværtligt med de her overtræksbukser så måske det ville være rart med sådan en ben varmer eller hvad man skal kalde den så vinden ikke blæser direkte ind på lårene og i regnvejr man kan måske slippe for at skulle skifte sko.
'

,'
garage
' => '
Med en scooter garage slipper man for at skrabe sne og is af scooteren inden man skal afsted.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2410.jpg', array('scooter garage', ''))
   ,galleri('highslide', '', 'billed2411.jpg', array('scooter garage', ''))
))
.'
De fås i forskellige størrelser.
Det er en god ide at fastgøre garagen på en eller anden måde da den ellers kan blæse af med vinden.

Det er lidt besværligt at bruge en scooter garage men omvendt kan det også være besværligt at skulle stå og fjerne sne og is.
Hvis man sætter garagen på lige efter man har kørt så skal man undgå at sætte den over udstødningen da garagen ellers kan smelte.

Den scooter garage jeg har er dog ikke vandtæt når det først er blevet vådt men det hjælper alligevel en del.
'

,'
motorolie
' => '
Det skulle give lettere motorstart at bruge en motorolie med lavere viskositet om vinteren.
Bruger man normalt 10W-40 motorolie så skulle det være lettere at starte motoren når den er kold med 5W-40 motorolie.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0737.jpg', array('oliedunk bagside', ''))
   ,galleri('highslide', '', 'billed0950.jpg', array('oliedunk castrol power rs r4 4t sae 5w-40 ultimate power and performance full synthetic motor oil trizone', ''))
))
.'
Jeg har prøvet at skifte fra 10W-40 til 5W-40 og jeg syntes at motoren har lettere ved at holde sig selv i tomgang når man lige har startet den fra kold.
Min scooter skal dog stadig stå og varme op i 2 minutter får man rigtig kan komme nogen steder.

Men jeg syntes at med 10W-40 så gik den lettere i stå når man lige havde startede den fra kold. Og den kunne måske gå ud 3-4 gange før den kunne holde sig selv kørende i tomgang.
Med 5W-40 syntes jeg den havde lettere ved at holde sig i tomgang selvom den også godt kunne gå i stå måske 1-2 gange.

På dette klistermærke fra en TMS S3 står at hvis temperaturen er under -5 °Celsius så skal man bruge SAE 10W/30 motorolie.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2169.jpg', array('tms s3 blæserskjold klistermærke engine oil usage', ''))
))
.'
Efter hvad jeg ved så giver 10W/30 ikke lettere motorstart end 10W/40 fordi det første tal er det samme.
'

,'
dæk
' => '
Vinterdæk skulle have bedre vejgreb om vinteren fordi gummiet er blødere end på almindelige dæk.

Her ses et Schwalbe Ice man vinterdæk med pigge. Men kan også få samme dæk uden pigge.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2413.jpg', array('vinter dæk med pigge', ''))
))
.'
Her ses hvad jeg vil kalde et grovmønsteret dæk. Mon ikke det er godt at køre i sne med.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2414.jpg', array('dæk med groft mønster', ''))
))
.'
Nu har jeg aldrig selv haft et vinterdæk men jeg har sat et så kaldt helårsdæk på mit baghjul som har et grovere mønster end det originale.

Orgininalt dæk til venster. Helårsdæk til højre.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2412.jpg', array('2 forskellige dæk', ''))
))
.'
'

,'
karburatorvæske
' => '
OBS : Fra Juli 2010 bliver der tilført 5 % bioethanol til blyfri 92 og 95 oktan benzin på de danske tankstationer. Så det er muligvis ikke længere nødvendigt at bruge karburatorvæske om vinteren da de 5 % ethanol muligvis virke på samme måde som karburatorvæske ville gøre.

Når temperaturen udenfor begynder at komme under 5 °Celsius så kan man hælde karburatorvæske i benzintanken for at undgå problemer med eventuel vand i benzintanken og karburatoren der fryser til is.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0738.jpg', array('karburatorvæske', ''))
))
.'
Karburatorvæsken gør så vandet ikke fryser til is som ellers kunne give problemer.
'
. ahref('smorelse.php#karburatorveske', 'Karburatorvæske')

,'
batteri
' => '
Om vinteren har batteriet mindre kapacitet (Ah) på grund af den lave temperatur.
Det kan man opdage ved at el starteren ikke længere kan starte motoren.
Motorolien er desuden mere tykt flydende jo koldere det er som gør det mere besværligt for el starteren.

Det er altid vigtigt at holde batteriet fuldt opladt ligegyldigt temperaturen men det er mere tydeligt om vinteren hvis batteriet ikke er fuldt opladt.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2419.jpg', array('batteri bliver opladt med tecmate OptiMate 4', ''))
))
.'

Oplad dit batteri og mål om det er i stand til at holde opladningen.
Hvis batteriet ikke kan oplades fuldt så kan det være tid til at købe et nyt batteri.
Hvis du køber et nyt batteri så husk at oplade det fuldt inden du sætter det i scooteren.
'
. ahref('service_elektrisk.php', 'Service af elektrisk')

,'
vind beskyttere
' => '
På nogle Baotian scootere sidder der nogle vind beskyttere foran håndtagene som beskytter fingrene mod vinden så man ikke fryser så meget.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0777.jpg', array('vind beskyttere', ''))
))
.'
Gad vide om man ikke kunne lave sådan nogle selv.
'

,'
scooterluffer
' => '
Der er nogen som kalder dem styrluffer.
Lufferne monteres over håndtag, bremsegreb og kontakter.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0899.jpg', array('scooterluffer', ''))
))
.'
Lufferne beskytter hænderne mod vind, regn og sne.
Desuden beskyttes kontakterne også mod vand.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1082.jpg', array('scooterluffer på scooter', ''))
))
.'
Jeg har bundet lufferne sammen på midten med nogle strips så det er lettere at komme til kontakterne.

De viste luffer er foret på det meste af indersiden, har en velcro lukning der lukkes omkring sidespejlene.
De skulle passe til mange modeller.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0900.jpg', array('scooterluffer', ''))
))
.'

'.afsnit('Erfaring','
Jeg syntes lufferne er rigtig gode og jeg har slet ikke frosset så meget om fingrene siden jeg fik dem.

Det kan være nødvendigt at vende luffernes ender nedad når man parker sådan at regn og sne ikke kan komme ind.
Foret i enderne kan godt suge lidt regn vand til sig.

Hvis man tager hånden ud mens man køre kan det være lidt besværligt at finde hullet i luffen så man kan få hånden ind igen hvilket ikke er så smart hvis man køre et glat sted eller snart skal bremse.

Lufferne sidder løst på scooteren hvilket gør at de er meget lette at stjæle så det ville nok være en god ide at finde en måde at fastmonter dem på måske ved at lave nogle huller i lufferne og låse dem fast.
').'
'

,'
håndtag med varme
' => '
Man kan fjerne sine håndtag og montere nogle nye håndtag med varme.

Håndtagene forbindes til scooterens batteri og der er gerne en kontakt med 3 muligheder (varm, lidt varm, sluk).

Her ses Saito SG-1
'.
galleriholder(array(
    galleri('highslide', '', 'billed0337.jpg', array('Saito SG-1 håndtag med varme', ''))
))
.'

Her ses Oxford Hot Grips
'.
galleriholder(array(
    galleri('highslide', '', 'billed0338.jpg', array('Oxford hot grips håndtag med varme', ''))
))
.'

Her ses Daytona
'.
galleriholder(array(
    galleri('highslide', '', 'billed0339.jpg', array('Daytona håndtag med varme', ''))
))
.'

Håndtagene med varme fås med en indre diameter på (22 mm) 7/8 tomme eller (25,6 mm) 1 tomme.
Længden på håndtagene variere fra 125 til 135 mm.

Her ses styr og håndtag på Kymco Super 8.
Det højre håndtag (gashåndtaget) sidder fast på en plastik cylinder hvor gaskablets ende er monteret.
Det venstre håndtag sidder fast direkte på styret.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0024.jpg', array('kymco super 8 styr og håndtag', ''))
))
.'

Den sorte plastik del og den gennemsigtige plastik del kan hives fra hinanden.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0721.jpg', array('kymco super 8 gashåndtag', ''))
   ,galleri('highslide', '', 'billed1250.jpg', array('kymco super 8 gashåndtag', ''))
))
.'

Her ses den indre diameter af den hårde plastik cylinder fra gashåndtaget. 22 mm.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0719.jpg', array('kymco super 8 gashåndtag', ''))
))
.'
Her ses den indre diameter af den bløde plastik del fra gashåndtaget. 25,6 mm.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0720.jpg', array('kymco super 8 gashåndtag', ''))
))
.'

Inden man montere håndtagene med varme er det måske en god ide at checke om generatoren er i stand til at levere strøm nok sådan at det ikke går ud over batteriopladningen.

'.afsnit('Erfaring','
Der er en bruger som har skrevet til mig at han bruger Saito varmehåndtag på en PGO Dr. Big og at det virker som det skal.
Der skulle være god varme ned til cirka -10 °Celsius.
Man skal huske at slukke for håndtagene når man stopper.
Brugeren skriver også at han slukker for dem når han har fået varmen og der ikke har været problemer med strømforbruget.
').'

'.kontaktmig().' gerne hvis du har erfaring med at bruge håndtag med varme, om de passer på scootere og om det giver problemer med det ekstra strøm forbrug.
'

,'
elektriske håndvarmere
' => '
Her se 2 elektriske håndvarmere.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1087.jpg', array('håndvarmer', ''))
))
.'
De indeholder et genopladeligt lithium-ion batteri og oplades via USB stik. For eksempel i en computer.

Ifølge emballagen kan de holde varmen i 2-4 timer og tager 2 timer af oplade.
Temperaturen skulle være cirka 40 °Celsius.

'.
galleriholder(array(
    galleri('highslide', '', 'billed1088.jpg', array('håndvarmer', ''))
))
.'
Der fulgte nogle strikhylstre/kondomer/strømper med i 3 forskellige farver.
Men man kan ikke rigtig få varmen med den på så jeg bruger dem uden.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1089.jpg', array('håndvarmer', ''))
))
.'

De er ikke gode at have inden under vanterne på grund af formen også bliver det for varmt at få varmen det samme sted hele tiden.
Men de kan bruges før og efter kørslen til at varme fingrene.
Eller hvis man holder en pause eller mens man er inde og handle kan man holde om dem for at få varmen.
'

,'
ikke elektriske håndvarmere
' => '
Man kan få såden nogen håndvarmere hvor der er en væske i og en metalklikker.
Når man bøjer metalklikkeren så starter væske med at krystalisere samtidig med at den bliver varm.
Så kan man varme sig lidt på dem i 1 time eller 2.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2879.jpg', array('OBH nordica 4046/2006 håndvarmere', ''))
))
.'
Jeg har målt en varmepude til 56° Celsius lige efter krystalliseringen.

For at genbruge dem skal man putter dem i kogende vand med en klud omkring indtil krystallerne er helt opløste så væske igen er klar.

De er okay gode.
'

,'
vejsalt
' => '
Vejsalt bruges om vinteren til at smelte is på vejene.
Desværre virker vejsalt og andet salt meget korroderende i kombination med vand.
Det får med andre ord scootere til at ruste hurtigere.

Man kan vaske scooteren med koldt vand og lidt rengøringsmiddel efter motoren er kølet ned.

Brug ikke varmt vand da det vil accelerer den korrosive virkning af saltet.

Dele som kan ruste kan eventuelt beskyttes med for eksempel '.ahref('smorelse.php#tectyl', 'tectyl').'.
'

,'
pleje
' => '
Hos t-hansen kan/kunne man købe et efterårs/vinter klargøringssæt som lød meget smart hvis man ikke helt ved hvilken ting man skal købe.

Sættet indeholder 6 spray dåser og består af:

Krombeskyttelse (beskytter krom dele mod rust).
Silikonespray (beskyttelse af ledninger og gummi).
Rustbeskyttelse (brun beskyttelse til indvendigt på skærm, måske kun beregnet til metal skærme).
Bremserens (renser bremseskive og tromlebremse).
Varmebestandig maling (beskytter udstødningen mod rust).
Teflon (bruges oven på den varmebestandige maling for ekstra beskyttelse).
'

,'
visir uden dug
' => '
'.afsnit('Hvad er dug ?','
Dug er vand damp der danner små dråber når det rammer en overflade.

Dug opstår når varm fugtig luft (fra næse og mund) rammer en kold overflade (visiret).

Når varm fugtig luft kommer i kontakt med det kolde visir nedkøles luften.
Når luften nedkøles kan det ikke holde den samme mængde vand så det overskydende vand sætter sig på visiret som dug (små vand dråber).

Når dug sætter sig på visiret i små dråber kan man ikke se godt se igennem visiret.
').'

'.afsnit('overfladespænding','
Ved at ændre visirets overfladespænding kan vi gøre visiret gennemsigtigt.
En ændring af overfladespændingen kan enten få vandet til at prelle af eller få dråberne til at samle sig og lægge sig som en tynd film man let kan se igennem.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0927.jpg', array('lotusblad', ''))
))
.'
Begge dele vil gøre visiret gennemsigtigt.

Ændring af overfladespændingen kan opnås ved at påfører noget på visiret.

'.afsnit('spray','
'.
galleriholder(array(
    galleri('highslide', '', 'billed0926.jpg', array('synoptik anti-dug', ''))
))
.'
Man kan få anti dug spray som man sprøjter på visiret og fordeler med en klud.
Det virker fint nok men holder ikke så længe.

Så vidt jeg ved indeholder anti dug spray isopropylalkohol (isopropanol). Jeg ved dog ikke om det er det som giver anti dug effekten.

Spray på, fordel væsken, lad det tørre. Poler efter med blødt papir/klud (ikke mikrofiber klud).
').'

'.afsnit('Opvaskemiddel','
Opvaskemiddel skulle også virke som antidug middel (poler det tørre visir med et par dråber opvaskemiddel på en tør klud.
').'

'.afsnit('voks','
'.visflash('0', 'http://www.youtube.com/watch?v=1M4rfTNGi_8', '').'
I videoen frarådes det at bruge en klude som at blevet vaske med skyllemiddel til at polere med.
').'

'.afsnit('andet','
Måske virker afspændingsmiddel fra opvaskemaskinen ?
').'

'.afsnit('Nanoteknologi','
Et tyndt lag titandioxid (TiO2) bestrålet med UV lys (for eksempel fra solen) kan få en overflade til at have en antidug effekt ved at de små vand dråber samler sig som en tynd film som er let at se igennem.
'.visfil('1', 'scooterhjemmeside/download/nanoteknologi.pdf', 'nanoteknologi').'
').'

').'

'.afsnit('slange','
Den varme fugtige luft kan ledes væk ved at ånde ud i en slange som monteres på hjelmen.
På den måde kommer den varme fugtige luft ud af hjelmen og ikke op på visiret.
').'

'.afsnit('termorude','
Ved at indsætte et ekstra lag klart plastik på indersiden af visiret kan man lave en termorude.
I kanten af plastikken kan der være klister eller silikone så der er et rum med stille stående luft mellem visiret og plastik laget.

'.afsnit('FogCity FogShield','
Man kan få en plastik film som FogCity FogShield.
FogCity FogShield gør udsynet lidt uklart og lys fra trafikken virker forstyrrende og det anbefales ikke at bruge det om natten da man mest lægger mærke til det når det er mørkt.
Der står at det ikke ikke er godt til frost vejr.
Jeg prøvede at bruge det men efter kom tid tog jeg det af igen.
').'

'.afsnit('pin lock','
'.
galleriholder(array(
    galleri('highslide', '', 'billed2416.jpg', array('pinlock visir', ''))
))
.'
Pin lock er det system som findes på nogle visir.
Så vidt jeg kan forstå sidder der 2 huller i visiret og man sætter 2 plastikdutter i som så kan holde et stykke plastic med silikone kant.
Fordi der er silikone og ikke klister så kan man tage det af og på som man har lyst imodsætning til FogCity.
'.visflash('0', 'http://www.youtube.com/watch?v=W4Ic-UYBo7I', '').'
Jeg ved ikke om man kan bore 2 huller i et visir for at få det til at bruge de her pin lock lag.
').'
').'
'

,'
halsrør
' => '
Dette er nok et af de bedste køb jeg har gjort hvad angår at holde varmen.
Det er ligesom en hue med hul hele vejen igennem man trækker ned over hovedet også kan man bedre holde varmen om ører, hals, mund, næse.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2229.jpg', array('halsrør', ''))
))
.'
'

,'
vanter
' => '
Her ses 2 par vanter.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2230.jpg', array('vanter', ''))
))
.'
'

,'
tynde vanter
' => '
Her ses et par tynde vanter som kan bruges inden under de andre vanter for at holde ekstra godt på varmen.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2878.jpg', array('tynde vanter', ''))
))
.'
De ser måske ikke ud til at hjælpe så meget men det gør de.
Jeg er rigtig glade for dem.
Man kan også bruge dem alene hvis de andre vanter er for varme at have på.
'

,'
heldragt
' => '
En heldragt kan være rigtig god om vinteren og specielt hvis man skal køre langt.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3661.jpg', array('heldragt', ''))
))
.'
Det er næsten helt behageligt at køre om vinteren med sådan en heldragt når det er rigtig koldt.

Den heldragt jeg har er dog meget tæt så den er ikke så god at have på når det ikke er helt vildt koldt fordi fugten kan ikke komme ud så man bliver våd hvilket ikke er så rart men når det er vildt koldt om vinteren så er den tilgengæld rigtig rigtig god.

Min heldragt er lidt handikappet at gå rundt med og hvis man går indendørs i en butik for eksempel så går der kort tid så har man det alt for varmt og den er ikke så hurtig og tage af og på.
'

,'
vinter opbevaring
' => '
Hvis du ikke skal bruge din scooter i en længere periode (flere måneder) er her en video der viser hvordan man forbereder scooteren før den gemmes væk.

Så får du muligvis færre problemer når du igen skal bruge din scooter.

'.visflash('0', 'http://www.youtube.com/watch?v=AnsLLvXoZBU', 'vinter opbevaring').'

Videoen viser...
At man skal tilføje stabiliseringsadditiv til benzinen og fylde tanken helt op for at undgå rust i tanken.
At man skal sprøjte olie ind gennem tændrørshullet så stempel og stempelringene ikke sætter sig fast.
At batteriet skal afmonteres og sættes til en automatisk oplader i opbevarings perioden.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
