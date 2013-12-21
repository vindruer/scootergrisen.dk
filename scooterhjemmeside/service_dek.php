<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "dæk - Service";
$overskrift = "dæk - Service";
$metadescription = "service af dæk på scooter, som afmontering, lapning og dæktryk måling";

$databasecenter = array(

'
skift slangeløst dæk
' => '
Hvis hjulet er monteret fra siden (typisk for baghjul) så hold hårdt på bremsen og skru møtrikken af.
'.visbilled('1', 'billed2193.jpg', 'kymco super 8 4T afmontering af baghjul stor gaffelnøgle', false, true).'
Hvis der sidder en klips/split gennem møtrikken så fjern den før du skruer på møtrikken.
'.visbilled('1', 'billed2460.jpg', 'møtrik med split', false, true).'
Hvis hjulet er monteret med bolt og møtrik (typisk for forhjul) så brug en ringnøgle til at holde bolten fast og en skralde til at skrue møtrikken af.
'.visbilled('1', 'billed2980.jpg', 'kymco super 8 4T afmontering af forhjul', false, true).'
Fjern hjulet fra scooteren.
'.visbilled('1', 'billed2183.jpg', 'kymco super 8 4T baghjul afmonteret', false, true).'
Slangeløse dæk sidder godt fast fordi der er en forhøjning på fælgkanten.
'.visbilled('1', 'billed2313.jpg', 'fælgkant forhøjning', false, true).'
Jeg stod og hoppede på dækket men det var ikke nok.
Så jeg lavede denne opstilling hvor jeg kunne presse dækkanten fri fra fælgkanten.
'.visbilled('1', 'billed2184.jpg', 'afmontering af slangeløst dæk', false, true).'
'.visbilled('1', 'billed2185.jpg', 'afmontering af slangeløst dæk', false, true).'
Her ses at dækkanten fri fra fælgkanten.
'.visbilled('1', 'billed2186.jpg', 'slangeløst dæk er skubbet af fælgkanten', false, true).'
Gør det samme på den anden side af dækket.

Sæt et dækjern under dækkanten og vip dækjernet samtidig med du presser dækket ned med foden i den modsatte side så dækkanten kommer ind midt på fælgen hvor der er dybest.
'.visbilled('1', 'billed2187.jpg', 'afmontering af slangeløst dæk med dækjern', false, true).'
Sæt det næste dækjern et stykke fra det første og vip begge dækjern ind mod midten.
'.visbilled('1', 'billed2188.jpg', 'afmontering af slangeløst dæk med dækjern', false, true).'
Sæt endnu et dækjern et stykke fra de andre og vip.
'.visbilled('1', 'billed2189.jpg', 'afmontering af slangeløst dæk med dækjern', false, true).'
Brug det midterste dækjern som nu er løst til at vippe igen.
Forsæt indtil hele dækkanten er fjernet fra fælgen.
'.visbilled('1', 'billed2190.jpg', 'afmontering af slangeløst dæk med dækjern', false, true).'
Nu skal vi have den anden dækkant af fælgen.
Brug igen dækjern til at vippe med.
'.visbilled('1', 'billed2191.jpg', 'afmontering af slangeløst dæk med dækjern', false, true).'
Mine dækjern er ikke så store men jeg brugte en hammer til at vippe med.
'.visbilled('1', 'billed2192.jpg', 'afmontering af slangeløst dæk med dækjern', false, true).'
'.visbilled('1', 'billed2314.jpg', 'kymco super 8 4T bagfælg', false, true).'

Så skal vi have fat i det nye slangeløse dæk.
'.visbilled('1', 'billed2181.jpg', 'horng fortune 130/70-14 tubeless', false, true).'
'.visbilled('1', 'billed2182.jpg', 'horng fortune 130/70-14 8pr 952 tubeless', false, true).'
Hvis der er en pil på siden af dækket så viser pilen hvordan dækket skal vende når det monteres.
'.visbilled('1', 'billed2982.jpg', 'pil på dækside', false, true).'
Sæt det nye dæk på fælgen.
'.visbilled('1', 'billed2200.jpg', 'nyt dæk er sat på fælg', false, true).'
Nu skal dækkanten op og sidde rigtig på fælgen.
For at gøre det skal man bruge trykluft med højt tryk.

Skru ventilen ud så luften kan komme hurtigere ind.
'.visbilled('1', 'billed2315.jpg', 'schrader ventil afmonteret', false, true).'
Jeg har prøvet at bruge håndpumpe, fodpumpe, trykluft fra tankstationer og dem som nogle cykelhandlere har udenfor deres butik men det er ikke sikkert der er tryk nok.
Desuden er der nogle pumper hvor det kræver at ventilen sidder i men hvis ventilen sidder i vil der muligvis ikke kunne komme luft hurtigt nok ind.

De gange jeg har fået sat et dæk op på fælgkanten har jeg gået til en cykel/scooter handler og et bil værksted hvor de har en kompressor med højt tryk.
Der har de trykluft med højt tryk også kan dækket pumpes op indtil det hopper op og sætter sig rigtigt.

Det giver et smæld når dækket sidder rigtigt.
Lige så snart dækket er hoppet op og sidder rigtigt på fælgen så fjernes trykluften og alt luften vil nu ryge ud igen fordi ventilen er fjernet.

Så skruer man ventilen i og pumper dækket op til korrekt dæktryk.
'.ahref('service_dek.php#kontroller_dektryk', 'Kontroller dæktryk').'.

Og vupti nyt dæk på.
'.visbilled('1', 'billed2202.jpg', 'nyt dæk monteret', false, true).'
'.visbilled('1', 'billed2201.jpg', 'kymco super 8 4T bagfra med nyt dæk', false, true).'
'

,'
kontroller dækmønstre
' => '
Kig efter efter et T.W.I. mærke på siden af dækket og kig så midt på dækket.
'.visbilled('1', 'billed2210.jpg', 'twi mærke på dækside', false, true).'
Dækket bør udskiftes inden dækmønstret er slidt ned til forhøjningen i bunden af mønstret.
'.visbilled('1', 'billed2211.jpg', 'twi mærke i bund af dækmønstre', false, true).'
Slidbanen kan også måles med enden af en skydelære.
'.visbilled('1', 'billed2209.jpg', 'kontrol af dækmønstre dybde', false, true).'
Her ses mit rimelige slidte fordæk.
Udover næsten at være slidt ned til TWI forhøjningen så er dækket slidt mere i den ene side end den anden af en eller anden grund.
Scooterens styring er desuden elendig og jeg mistænker det slidste fordæk kan være årsagen eller en del af årsagen.
Hvis jeg kommer kørende ligeud og der for eksempel er et nyere lag asfalt eller underlaget er skævt så styrre scooteren skævt.
Det er blevet ret slemt og sådan var det ikke da scooteren var nyere.
Når jeg engang får sat nye fordæk på kan jeg fortælle hvor meget det hjalp på styringen.
Det er i hvert fald ikke en særlig god ting i trafikken fordi jeg kan let komme til at køre måske en halv meter til siden selvom jeg er forberedt på det sker.
'.visbilled('1', 'billed3447.jpg', 'slidt fordæk', false, true).'

Ifølge loven skal dækmønstret være mindst 1,0 mm.
'

,'
kontroller dæktryk
' => '
Læs scooterens korrekte dæktryk i scooterens manual.
På nogle scootere står dæktrykket også på et klistermærke på selve scooteren.

Dæktrykket for forhjulet ligger typisk omkring 1,50 - 1,75 kg/cm².
Dæktrykket for baghjulet ligger typisk omkring 2,00 - 2,25 kg/cm².

Baghjulet plejer gerne og skulle have et lidt højere tryk end forhjulet fordi det meste af vægten ligger på baghjulet.

Kontroller dæktrykket med en dæktrykmåler når dækkene har samme temperatur som luften udenfor.
Altså når scooteren har stået stille i et godt stykke tid og ikke når man lige har kørt en lang tur.

Her ses en dæktryksmåler som kan måle i psi, bar, kpascal og kg/cm².
'.visbilled('1', 'billed0246.jpg', 'dæktryksmåler', false, true).'
Tryk på ON og vent til dæktrykmåleren har nulstillet sig.
'.visbilled('1', 'billed2583.jpg', 'dæktryksmåler', false, true).'
Pres dæktrykmåleren ned på ventilen i 3 sekunder.
'.visbilled('1', 'billed2584.jpg', 'dæktryksmåler', false, true).'
Tryk på ON for at skifte mellem psi, bar, kpascal og kg/cm².

Her er målingen 1,90 Bar.
'.visbilled('1', 'billed2585.jpg', 'dæktryksmåler', false, true).'
'.visbilled('1', 'billed1475.jpg', 'dæktryksmåler', false, true).'
Brug '.ahref('omregn.php#dektryk', 'dæktryk omregneren').' til at konvertere mellem psi, bar, kpascal og kg/cm².

Hvis dæktrykket er for lavt så pump luft i indtil det korrekte dæktryk er opnået.
Hvis dæktrykket er for højt så luk noget af luft ud ved at trykke i midten af ventilen.

Dækkets maksimale belastning og maksimale tryk kan stå på siden af dækket.
'.visbilled('1', 'billed0243.jpg', 'dæk max.load', false, true).'
Det betyder dog ikke at man skal pumpe dækket op til dette tryk.

Korrekt dæktryk skulle give de bedste køreegenskaber, længst mulig levetid for dækket og muligvis gøre det svære at punkter.

'.afsnit('lavt dæktryk','
Kan gøre det tungt at dreje.
Kan give en mere behagelig kørsel ved bump i vejen.
Større risiko for at punktere.
Større rullemodstand.
Køre ikke så langt på literen.
Bedre vejgreb.
').'
'.afsnit('højt dæktryk','
Gode styre egenskaber.
Giver en mindre behagelig kørsel ved bump i vejen.
Mindre rullemodstand.
Køre længere på literen.
Mindre vejgreb.
').'
'.afsnit('kolde og varme dæk','
Jeg har målt mine dæk til at have 2,05 kg/cm² foran og 2,25 kg/cm² lige efter jeg har haft kørt en god tur og de er blevet varme.
Efter de er kølet ned har jeg målt dem til 1,95 kg/cm² foran og 1,95 kg/cm² bagved.
Umiddelbart ville jeg have troet at de ville falde/stige lige meget i tryk på fordæk og bagdæk men det kan muligvis skyldes af bagdækket er lidt bredere og højere og muligvis også at største delen af vægten er på bagdækket og det dermed opvarmes mere end fordækket.
').'
'

,'
lap eller skift slange
' => '
'.afsnit('Afmonter baghjulet','
Fjern udstødningen.
Fjern hjulmøtrikken.
Få eventuelt en ven til at holde på bagbremsen mens du løsner hjulmøtrikken eller bind en snor hårdt om bremsegrebet.
').'

'.afsnit('fjern dækket fra fælgen','
Skru ventilen ud eller tryk midt i ventilen så alt luften kan komme ud af slangen.
Læg hjulet ned og stil dig på kanten af dækket med begge fødder og tryk kanten løs hele vejen rundt.
Vend hjulet om og gør det igen.

Læg mærke til at dækkanten nu er løs fra fælgen.
'.visbilled('1', 'billed0229.jpg', 'Baghjul', false, true).'
Pres nu ned på dækket med en hånd så dækkanten kommer ind midt i fælgen hvor der er dybest og stik så et dækjern ind i modsatte side og hold dækjernet som vist.

Sæt endnu et dækjern et stykke fra det første og vip dækkanten op over fælgen.
Sæt det sidste dækjern et stykke fra det andet og vip dækkanten op over fælgen.
Nu er det midterste dækjern løst og du forsætter med at vippe dækkanten over fælgen hele vejen rundt.
'.visbilled('1', 'billed0230.jpg', 'Fjernelse af dæk med dækjern', false, true).'
').'

'.afsnit('lap slangen','
Tag slangen ud og pump den op.
Put slangen under vand så du kan se hvor der kommer bobler.

Slib området omkring hullet med sandpapir og put et tyndt lag lim på.
Lad limen virke i 5 minutter.
Sæt lappen på mens slangen er pumpet op til samme størrelse som den ville have i dækket.
Pres ned over hele lappen.
Bøj lappen midt på så det gennemsigtigt plastik knækker på midten og træk plastikken af inde fra og ud.
Gnid hånden omkring lappen og giv det lidt talkum (pudder) så overskuende lim ikke sætter sig fast på indersiden af dækket.
'.visbilled('1', 'billed0231.jpg', 'Lapning af scooter slange', false, true).'
Put igen slangen under vand og check om der kommer flere bobler.

Når du har fundet hullet kan du ud fra ventilen og ventilhullet i fælgen finde ud af hvor der eventuelt er hul i dækket.
Fjern det som skyldes punkteringen.

Punkteringen skyldtes i dette tilfælde aluminiumspåner fra fælgen.
'.visbilled('1', 'billed0232.jpg', 'Aluminiumsspåner i dæk som er skyld i punktering', false, true).'
').'

'.afsnit('sæt dækket tilbage på fælgen','
Rens dækkant og fælgkant.
Giv slangen og indersiden af dækket lidt talkum.
På nogle dæk kan der være en pil siden af dækket som skal pege i kørselsretningen.
Sæt dækket halvt på fælgen.
Sæt slangen tilbage i dækket og put ventilen gennem ventilhullet på fælgen.
Pump en lille smule luft i slangen så undgår du at den kommer i klemme.
Brug dækjern til at vippe dækkanten tilbage på plads.

Pump mere luft i slangen og sæt dig på dækket eller pres ned med knæ og hænder for at få dækkant og fælgkant til at mødes.

Brug lidt vand med opvaskemiddel og put det på hvor dæk og fælg mødes og og pres så ned på dækket med knæet for at få dækkanten på plads.
'.visbilled('1', 'billed0233.jpg', 'Pres dækkanten ud så den sidder rigtigt i fælgen', false, true).'

Nogle fælge har en "hump" som gør det meget svært at få dækkanten til at sidde rigtigt med håndkraft.

Hvis dækket ikke vil sætte sig rigtigt så kan man prøve at pumpe slangen op så dækket presses ud og sætter sig rigtigt på fælgen men jeg har ikke selv prøvet dette så ved ikke om slangen eventuelt kan springe af det.

Pump dækket op til korrekt dæktryk som står i scooterens manual eller på et klistermærke på selve scooteren.
').'

Se også : '.ahref('service_dek.php#set_dek_pa_felg', 'sæt dæk på fælg').'.

'.visflash('0', 'http://www.youtube.com/watch?v=vOZlsGRtCN0', 'skift slange på elektrisk scooter med nav motor', true).'
'

,'
lap slangeløst dæk
' => '
Slangeløse dæk kan lappes udefra uden at man skal tage dæk af scooteren.

Her ses et lappesæt til slangeløse dæk.
'.visbilled('1', 'billed0223.jpg', 'Lappegrej', false, true).'

'.afsnit('sådan gør du','
Start med at fjerne det som er skyld i punkteringen.

Træk spiral-værktøjet ind og ud af hullet for at rengøre, gøre hullet rugt og få at gøre små huller tilpas store.

Put lim på nåle-værktøjet og træk det ind og ud af hullet for at fordele limen.

Sæt en "klisterpind" midt på nåle-værktøjet.

Stik nåle-værktøjet cirka 2/3 dele ind og træk nåle-værktøjet ud (det er så meningen at "klisterpinden" skal bliver siddende i dækket).

Hvis klisterpinden blev trukket med ud så bare prøv igen indtil den bliver siddende.

Lad "klisterpinden" sidde lidt og se om den bliver siddende samme sted (hvis hullet er for lille/stramt så vil "klisterpinden" blive presse ind eller ud af dækket. Hvis det sker så skal hullet laves større med spiral-værktøjet).

Pump dækket til korrekt dæktryk.

Skær det overskydende "klisterpind" af helt inde ved dækket.
').'

'.visflash('0', "http://www.youtube.com/watch?v=Ml-kU8QIw2g", 'HaSse viser hvordan man lapper et slangeløst dæk', true).'

Her er et billede fra t-hansen scooter reservedels bogen.
'.visbilled('1', 'billed1232.jpg', 't-hansen scooter sådan lapper du slangeløse dæk', false, true).'
Her ses nogle gamle lapning.
'.visbilled('1', 'billed2212.jpg', 'klister pind i slangeløst dæk', false, true).'
'.visbilled('1', 'billed2213.jpg', 'klister pind i slangeløst dæk', false, true).'
'.visbilled('1', 'billed2214.jpg', 'klister pind i slangeløst dæk', false, true).'
Og her ses dækket indefra.
'.visbilled('1', 'billed2215.jpg', 'klister pind i slangeløst dæk', false, true).'

Hvis du ikke kan finde hullet kan du gøre følgende.

Gør dækket vådt med vand og kig efter små bobler

Sæt scooteren på centerstøtteben udover et trin og sæt noget tungt på fodbrættet sådan at scooteren ikke kan vælter bagover.
'.visbilled('1', 'billed1234.jpg', 'kymco super 8 4T find hul i dæk med en spand vand', false, true).'
Bagenden kan så bevæges op og ned så det passer med spanden.
'.visbilled('1', 'billed1235.jpg', 'kymco super 8 4T find hul i dæk med en spand vand', false, true).'
Ved at holde dækket nede i spanden med vand vil man kunne se luftbobler komme op der hvor hullet er.
Når hullet er fundet og lappet kan man igen checke om der kommer bobler op ved lapningen og andre steder.

Man skulle også kunne lappe et slangeløst dæk indefra.
Ifølge billedet her skulle den bedste løsning være at lappe dækket indefra og sætte noget i hullet.
'.visbilled('1', 'billed0236.jpg', 'lapning af slangeløst dæk', false, true).'
'

,'
sæt dæk på fælg
' => '
Nogle dæk er lettere at få til at sidde rigtig på nogle fælgen end andre.

Nogle fælge har en "hump" som er en bule dækkanten skal over for at sidde rigtig på fælgen.

'.afsnit('trykluft','
Det letteste er at bruge en kompressor med trykluft til at pumpe dækket op så det sætter sig rigtigt på fælgen.
Der er mange cykel butikker som har en trykluftslange uden foran deres butik i åbningstiden som man kan bruge. Der skal muligvis bruges en adaptor da de ofte kun er beregnet til cykler med dunlop/presta ventiler.

Ventilen skrues ud så luften kan komme hurtigere ind.

På mange tankstationer har de transportable trykluft beholdere.
'.visbilled('1', 'billed2370.jpg', 'transporttabel trykluftbeholdere på tankstation', false, true).'
Jeg havde ikke held med dem de gange jeg har prøvet. Det er nok fordi der ikke er nok tryk på dem. Altså luften kommer ind lige så hurtigt som den komme ud mellem fælg og dækkant.

Har du ikke muligvis for at bruge en kompressor med trykluft må du forsøge dig med håndkraft.
').'

'.afsnit('håndkraft','
På en Kymco Agility lykkedes det mig uden det store besvær at få dækket til at sidde rigtigt på fælgen med lidt sæbevand på dækkanten og ved at presse med på dækket mens jeg trillede det.
'.visbilled('1', 'billed0233.jpg', 'Pres dækkanten ud så den sidder rigtigt i fælgen', false, true).'
På en CPI Oliver med slangeløst dæk lykkedes det mig med meget stort besvær at få den ene dækkant til at sidde rigtigt ved at stå på siden af dækket og presse det ned på fælgen.
Når den ene dækkant sad rigtigt kunne jeg pumpe luft i dækket og med lidt sæbeskum kunne jeg se hvor luften kom ud og kunne så rette på dækket indtil det holdt tæt nok til at dækket kunne pumpes op.
Ved at blive ved med at pumpe så springer dækkanten på plads så dækket sidder rigtigt på fælgen.
').'

'.afsnit('gas og ild','
Jeg har set at man kan sprøjte lightergas/startergas eller andet brandbar gas i dækket og når gassen blev antændt så hopper dækket på plads på fælgen.
'.visbilled('1', 'animation0024.gif', 'dæk hopper på fælg med gas og ild', false, true).'
'.visflash('0', "http://www.youtube.com/watch?v=KCaC7n3NWlU", 'Sætter slangeløst dæk på fælg med startergas', true).'
Lige efter dækket hopper på plads ser det ud til at der opstår vakuum inden i dækket så man skal hurtigt pumpe dækket efter så det ikke falder ned af fælgen igen.

Jeg har ikke selv prøvet denne metode med men jeg vil råde til at man gør det udendørs.
').'
'

,'
dækskifte
' => '
'.visflash('0', "http://www.youtube.com/v/anyY0UO5gqk", 'dæk skifte', true).'
'.visflash('0', "http://www.youtube.com/watch?v=A-PrN7P_7Ac", 'HaSse viser hvordan man skifter dæk', true).'
'

,'
afbalancering
' => '
'.visflash('0', "http://www.youtube.com/v/8WHkSPZJ3fI", 'afbalancering af hjul', true).'
Dette kaldes vistnok en statisk afbalancering.
Den tunge del af hjulet peger ned og man sætter små vægte på den modsatte øverste del for at få hjulet til at være lige tungt.

'.visbilled('1', 'billed2441.jpg', 'hjul afbalanceringsværktøj', false, true).'
'.visbilled('1', 'billed2442.jpg', 'hjul afbalanceringsværktøj på løftebuk', false, true).'
'.visbilled('1', 'billed2443.jpg', 'zink zn 5 10 afbalanceringsvægte', false, true).'
'

,'
afmonter baghjul
' => '
Her vil jeg afmontere baghjulet på min Kymco Super 8 4T med dobbelt støddæmper.

Fjern udstødningen.

Brems på bagbremsen eller stik en bjælke eller andet igennem fælgen så det ikke kan dreje rundt.

Fjern møtrikken med for eksempel en lang ringnøgle.
'.visbilled('1', 'billed1374.jpg', 'afmontering af baghjuls møtrik', false, true).'
Jo længere gaffelnøglen er jo lettere er det.

Fjern skruen ved støddæmperen og hiv eventuelt lidt op i støddæmpere mens du gør det for at skåne gevindet.

Fjern de skruer som holder bagskærmen i højre side af scooteren.

Bemærk hvordan delene sidder.
'.visbilled('1', 'billed1394.jpg', 'afstandsstykke ved baghjul', false, true).'
Nu kan "subframen" fjernes.
Jeg ved ikke hvad en "subframe" hedder på dansk.

'.visbilled('1', 'billed1375.jpg', 'baghjul', false, true).'
Bemærk afstandsstykket.
'.visbilled('1', 'billed1395.jpg', 'afstandsstykke ved baghjul', false, true).'

Nu kan baghjulet fjernes.
'.visbilled('1', 'billed1378.jpg', 'baghjul', false, true).'
'

,'
skift ventil
' => '
'.visflash('0', "http://www.youtube.com/watch?v=u_zrs5KwF98", 'HaSse viser hvordan man skifter ventil', true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
