<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "motorolie, gearolie, hydrauliskolie";
$overskrift = "motorolie, gearolie, hydrauliskolie";
$metadescription = "forklaring af olie til motorer, hvor olien kommer fra, om den er mineralsk, syntetisk, gearolie, motorolie, forgaffelolie, standarder, SAE, API, JASO, viskositet";

$databasecenter = array(

'
introduktion
' => '
Olie bruges i motoren, reduktionsgearet og i hydrauliske støddæmperne.
'.visbilled('1', 'billed0384.jpg', 'oliedunk castrol power rs r4 4t sae 5w-40 ultimate power and performance full synthetic motor oil trizone 5W40 W5 carcare supertech engine oil synthetic hi-tech oil for modern engines', false, true).'
Olien lægger sig som en tynd film mellem delene så de ikke kommer i direkte kontakt med hinanden.
'

,'
mineralsk og syntetisk
' => '
'.afsnit('mineralsk','
Raffineret olie som for eksempel kommer fra undergrunden.
Olien er et natur produkt men udover den naturlige olie er der tilføjet additiver.
Dets temperaturområde dækker et lille område.
Billigt.
').'

'.afsnit('syntetisk','
Menneskeskabt på fabrik ud fra mineralsk olie som er blevet kemisk bearbejdet for at gøre den ensartet.
Kan bruges ved et bredt temperaturområde.
Kan holde i længere tid mellem olieskift.
Tåler højere temperature.
Dyrt.
').'

'.afsnit('semi syntetisk','
En blanding af mineralsk og syntetisk olie.
').'
'

,'
motorolie
' => '
Motorolie beskytter, rengøre og køler motorens dele.

Motorolie bruges til at smøre og køle motorens bevægelige dele som krumtap lejer, plejlstangs lejer, cylindervæg, knastkæde, knastaksel, vippearmaksler og på nogle scootere også koblingen.

Her ses noget Castrol GPS motorolie.
'.visbilled('1', 'billed2492.jpg', 'rød motorolie castrol', false, true).'
Her ses noget Mobil 1 motorolie.
'.visbilled('1', 'billed2170.jpg', 'olie i glas', false, true).'
Her ses ned i en W5 carcare oliedunk.
'.visbilled('1', 'billed1071.jpg', 'oliedunk med olie', false, true).'

'.afsnit('motorolie passage','
Her ses motoroliens vej fra bunden af motoren gennem oliesien til oliepumpen og videre til højre krumtapleje og det nederste plejlstangsleje og op langs den ene pindbolt gennem cylinder og topstykke til vippearmakslerne og knastakslen og tilbage til bunden af motoren i venstre side ned langs knastkæden.
'.visbilled('1', 'billed0397.jpg', 'olie passage', false, true).'
Jeg er ikke sikker men jeg tror måske der er et hul gennem plejlstangen så olien kan komme op til den øverste del af plejlstangen og nålelejet der.
Jeg ved ikke hvordan det venstre krumtapleje bliver smurt.
Der er noget med at olien kan plaske op nede fra krumtappen når den drejer rundt og dermed kan sprøjte op på cylinderen og indersiden af stemplet for at køle det.
').'

'.afsnit('olie forbrug','
En smule af den olie som findes i motoren passere forbi stempelringene, ind i forbrændingskammeret og ud gennem udstødningsventilen til udstødningen.
Olie forbruget stiger ved høje omdrejninger.
').'

'.afsnit('ny og brugt motorolie','
Her ses forskellen mellem ny og brugt motorolie.
Den nye motorolie er klar og den brugte motorolie er meget sort.
'.visbilled('1', 'billed1837.jpg', 'ny og brugt motorolie', false, true).'
'.visbilled('1', 'billed1838.jpg', 'brugt motorolie', false, true).'
Her hældes brugt motorolie over i en større beholder inden det afleveres på genbrugspladsen.
'.visbilled('1', 'billed1839.jpg', 'brugt motorolie', false, true).'
').'

'.afsnit('motorolie beregnet til biler','
Kan man bruge motorolie beregnet til biler i en scooter ?.

Bil motorolie kan indeholde additiver som nedsætter friktionen og dermed nedsætte brændstof forbruget.
Hvis man har en scooter hvor koblingen er i motorolie så vil koblingen komme til at glide.
På de fleste scooter er koblingen ikke i motorolie.
Sachs Madass har dog koblingen i motorolie og der står i manualen at man ikke skal bruge motorolie beregnet til biler med tilføjet additiver som nedsætter friktion.
Motorolie med additiver som nedsætter friktionen kaldes også "energy conserving", energi besparende eller letløbsolie.

Det skulle muligvis også være et problem hvis gearne er i motorolie da olien vist så ikke vil beskytte gearne godt nok.
De fleste scootere har ikke gear.

Jeg har selv brugt bil motorolie i min scooter og det lader til at virke fint. Dog har jeg nogle gange haft problemer med kompression men jeg ved ikke om det kan skyldes olien.
Da jeg prøvede med en motorolie til motorcykler så syntes jeg af den virkede mere tyk i det. Motoren kørte på en lidt anden måde. Det som om at med bil motorolien løb motoren lettere hvilket passer meget godt med at der er tilføjet additiver som nedsætter friktionen.

Så hvis scooteren har tør kobling (som de fleste scootere har) så vil jeg mene at man godt kan bruge motorolie beregnet til biler.
').'
'.afsnit('motorolie emballage','
Her følger nogle eksempler på hvad der kan står på motorolie emballage.
').'
'.afsnit('Mobil Super 2000 X1','
'.visbilled('1', 'billed2172.jpg', 'Mobil Super 2000 X1', false, true).'
'.afsnit('forsiden','
Mobil Super 2000 X1
10W-40
Semi-Synthetic
Motor Oil
4L
').'
'.afsnit('bagsiden','
Meets API SJ/SL/CF; ACEA A3/B3
Approved MB-Approval 229.1; VW 505 00
Quality Level VW 500 00

Semisyntetisk motorolie, som er udviklet til suveræn motorbeskyttelse under vidt forskellige kørselsforhold. Formuleret så den beskytter din motor bedre end almindelige olier. Vi kan især anbefale denne olie hvis  du lejlighedsvis belaster din motor hårdt og derfor har brug for at forhindrede skader, der opstår ved store motorbelastninger. Se &lt;&lt;i&gt;&gt; hvor der gives vigtige helbreds- og miljø oplysninger.

&lt;&lt;i&gt;&gt; Sikkerhedsdatablad kan rekvireres af erhvervsmæssige brugere. Beskyt miljøet. Bortskaf spildolie som anvist af myndighederne. Undgå hudkontakt. Bland ikke spildolie med rensevæske, bremsevæske eller kølervæske. 80601113

U880577
819704A

Made in EU
AIO 64

ExxonMobil Lubricants &amp; Specialities Europe, Division of ExxonMobil Petroleum &amp; Chemical, Polderdijkweg, B-2030 Antwerpen, Belgium.
Mobil, Mobil Oil and the Flying Horse design are trademarks of Exxon Mobil Corporation or one of its subsidiaries.
').'
').'
'.afsnit('Motorex Racing Pro 4t','
'.visbilled('1', 'billed2493.jpg', 'motorex racing pro 4t 5w 30', false, true).'
'.visbilled('1', 'billed2494.jpg', 'motorex racing pro 4t 5w 30 bagside 1', false, true).'
'.visbilled('1', 'billed2495.jpg', 'motorex racing pro 4t 5w 30 bagside 2 på dansk', false, true).'
Af en eller anden grund står der ingen API på den dunk jeg købte så jeg leverede den tilbage.
').'

'.afsnit('W5 carcare','
'.visbilled('1', 'billed2388.jpg', 'W5 carcare motorolie fra lidl', false, true).'
'.visbilled('1', 'billed2386.jpg', 'W5 carcare motorolie fra lidl', false, true).'
'.visbilled('1', 'billed2387.jpg', 'W5 carcare motorolie fra lidl', false, true).'
').'
'

,'
gearolie
' => '
Gearolie beskytter reduktionsgearet.

Her ses noget Fuchs Silkolene gearolie.
'.visbilled('1', 'billed2489.jpg', 'fuchs silkolene gearolie i målebære', false, true).'
Her ses en tube med gearolie.
'.visbilled('1', 'billed2490.jpg', 'fuchs silkolene gearolie scooter gear oil 80W-90 125ml', false, true).'
Her står at gearoliens viskositet er 80W-90 og kvaliteten er API GL3 og GL4.
'.visbilled('1', 'billed2491.jpg', 'fuchs silkolene gearolie scooter gear oil SAE 80W-90, API GL3 % GL4', false, true).'
'

,'
forgaffelolie
' => '
Forgaffelolie bestemmer hårdheden på den hydrauliske teleskopgaffel.
Forgaffelolie kaldes fork oil på engelsk.

Forgaflens rør indeholder denne olie.

Viskositeten kan for eksempel være SAE 2,5W til SAE 30.
5W er meget tyndtflydende og giver en blød affjedring.
Jo højere tal jo hårdere bliver dæmpningen.
Støddæmperens hårdhed bestemmes også af hvor meget olie er i rørene.
Jo mere olie jo hårdere. Jo mindre olie (og dermed mere luft over olien) jo blødere, da luften kan trykkes sammen.
'.visbilled('1', 'billed1507.jpg', 'forgaffel olie', false, true).'

Hos enghave motor fik jeg en kopi af følgende skema som de bruger til at finde ud af hvad slags motul gaffelolie der passer til de forskellige producenters data.
'.
box(array('120', '120', '120', '120', '220')
   ,array(
       array('suzuki'         ,'kayaba'      ,'showa'         ,'SAE'         ,'motul fork oil')
      ,array('L01 / SS-05'    ,'L01'         ,'SS-05'         ,'2,5W'        ,'100% factory line very light')
      ,array('SS-07'          ,'--'          ,'SS-07'         ,'5W'          ,'100% factory line light<br>100% expert light')
      ,array('# 10 / SS-08'   ,'10G'         ,'SS-08'         ,'5W20'        ,'100% factory line medium<br>100% expert medium')
      ,array('# 15 / SS-02'   ,'15G'         ,'SS-02'         ,'10W20'       ,'100% expert medium/heavy')
   )
)
.'
'

,'
standarder
' => '
'.afsnit('SAE','
SAE er en forkortelse for Society of Automotive Engineers.

SAE angiver oliens viskositet.
Altså hvor tyndtflydende/tyktflydende olien er.

For eksempel : SAE 50 eller SAE 10W-40.

W = Winter = Vinter = olien er egnet til brug om vinteren.



Motorolie og gearolie bruger forskellige SAE tal til at opgive deres viskositet.
Det er vist lavet sådan så man ikke kommer til at bruge gearolie i stedet for motorolie og omvendt.

En 75W gearolie svarer til en 15W motorolie i viskositet.

Her kan SAE viskositets tallene sammenlignes for motorolie og gearolie.
'.visbilled('1', 'billed0387.jpg', 'Sammenlign motorolie og gearolie SAE viskositet', false, true).'



SAE tallene for motorolie går fra 0W til 60.

SAE 0W er en meget tyndt flydende olie.
SAE 60 er en meget tykt flydende olie.

Når SAE 50 kun har et tal er det en single grade olie.
Når SAE 10W-40 har to tal (10W) og (40) så er det en multigrade olie.

'.afsnit('singlegrade','
Eksempel : SAE 20W
Kan anvendes i et lille temperaturområde.
').'
'.afsnit('multigrade','
Eksempel : SAE 10W-40
Kan anvendes i et bredt temperaturområde.
Har fået tilføjet additiver som holder olien mere tykt flydende ved højere temperature.
').'
'.visbilled('1', 'billed0385.jpg', 'SAE motorolie', false, true).'

Det første tal (10W) angiver oliens viskositet ved -18 °Celsius.
Det andet tal (40) angiver oliens viskositet ved 100 °Celsius.

Jo lavere det først tal (10W) er jo mere tyndt flydende er olien i koldt vejr om vinteren og jo lettere er det at starte motoren.
Jo højere det andet tal (40) er jo mere tykt flydende er olien ved høje temperature og det beskytter motoren bedst.

SAE 10W-40 (multigrade) betyder at olien flyder lige så tyndt som en SAE 10W (singlegrade) olie ved lav temperatur og lige så tykt som en SAE 40 (singlegrade) ved høj temperatur.

Ved lav temperatur er olien tykt flydende.
Ved høj temperatur er olien tyndt flydende.

Når man starter en kold motor er olien mest kold og tyktflydende og har derfor sværrest ved at blive pumpet ud og smører motorens dele.
Derfor vil man gerne have en tyndt flydende olie ved koldstart så olien hurtigt pumpes ud og smører motordelene og når olien bliver varm skal den holde sig tykt flydende nok til at beskytte motordelene.

I Aprilia Scarabeo servicemanualen anbefales det at bruge 5W-40 motorolie men der står også at hvis motoren belastes meget eller man køre i et varmt land så anbefales det at bruge 5W-50 eller 10W-50.

Hvilken viskositet man skal bruge i sin motor afhænger af temperaturen udenfor der hvor man bruger scooteren. Altså hvor varmt/koldt der er i det område/land man bor i.

'.afsnit('SAE 5W-40','
Bruges typisk i koldt klima som Sverige og Canada.
').'

'.afsnit('SAE 10W-40','
Bruges typisk i tempereret klima som England og Danmark.
').'

'.afsnit('SAE 15W-40','
Bruges typisk i varmt klima som Italien, Spanien og Egypten.
').'

På de følgende billeder kan det ses hvilken udendørs temperatur område de forskellige motorolie viskositeter egner sig til.
'.visbilled('1', 'billed0394.jpg', 'SAE motorolie', false, true).'
'.visbilled('1', 'billed0376.jpg', 'SAE motorolie', false, true).'
'.visbilled('1', 'billed0377.jpg', 'SAE motorolie', false, true).'
Som det ses på billederne kan en 10W-40 motorolie bruges når udendørs temperaturen er mellem cirka -25 til +30 °Celsius.

Jeg har læst at hvis man bruger en højere viskositet end anbefalet så kan det give dårlig acceleration og at det kan skade oliepumpen og smørringssystemet og give modstand i motoren.

Viskositet måles med Centistokes (cst). Jo højere tal jo tykkere er olien.
Men jeg syns ikke jeg har set enheden Centistrokes blive brugt så meget.

Før i tiden hvor der kun fandtes singlegrade olie skulle man køre med en tynd olie om vinteren og en tyk olie om sommeren.
Med multigrade olie kan man bruge den samme olie hele året rundt.
').'

'.afsnit('API','
API er en forkortelse for American Petroleum Institute.

API angiver motoroliens kvalitet.

For eksempel : API SJ.

API SA er den ældste standard.
Så kommer SB, SC, SD, SE, SF, SG, SH, SJ, SL og SM hvor hver standard er blevet forbedret i forhold til den sidste og er beregnet til nyere og nyere motorer.
'.visbilled('1', 'billed0378.jpg', 'API motorolie', false, true).'
En motorolie der opfylder API SM standarden opfylder også de standarder som kommer før SM.
Har man en motor som kræver API SJ motorolie så kan man også bruge API SL og API SM.

S\'et står for Service og bruges til benzin drevne motoren.
Der kan også står API CF eller API SL/CF og her bruges C\'et for at vise det er til diesel motorer.

Gearolie angives for eksempel med API GL4 eller API GL5.
').'

'.afsnit('ACEA','
ACEA er en forkortelse for Association des Constructeurs Européens d\'Automobiles.

ACEA angiver oliens kvalitet.
Er en europæisk standard tilsvarende API.

For eksempel : ACEA A3.

A\'et angiver at det drejer sin om en benzindrevet motor.
'.
box(array('70', '430')
   ,array(
       array('ACEA', 'forklaring')
      ,array('A1',   'Fuel economy petrol')
      ,array('A2',   'Standard performance level (now obsolete)')
      ,array('A3',   'High performance and/or extended drain')
      ,array('A4',   'Reserved for future use in certain direct injection engines')
      ,array('A5',   'Combines A1 fuel economy with A3 performance')
   )
)
.'
').'

'.afsnit('JASO','
JASO er en forkortelse for Japanese Automotive Standards Organization.

JASO angiver oliens kvalitet.
Er en japansk standard tilsvarende API og ACEA.

For eksempel : JASO T 903:2006 - MA.

Et JASO mærke på motorolie emballagen kan se ud som dette.
'.visbilled('1', 'billed2522.jpg', 'JASO mærke', false, true).'

Til 4 takt motorer bruges en standard som hedder JASO T 903 eller JASO T 904.
I JASO T 903 standarden findes flere klasser : MA, MA1, MA2, MB.

MA = Uden friktions modifiers = Beregnet til våd kobling.
MA1 = lav friktions olie.
MA2 = højere friktion = egnet til våd kobling.
MB = Med friktions modifiers = Laveste friktion.

MA og MA2 bruges til motorer med våd kobling (motorolien er i kontakt med koblingen).
MB er ikke egnet til motorer med våd kobling.

Til 2 takt motorer bruges JASO M 345 (FA, FB, FC).
').'

'.afsnit('MB, VW og andre','
Der kan udover API, ACEA og JASO også være oplyst standarder som MB og VW.
For eksempel : MB 229.1 og VW 502.00/505.00.

Disse standarder er lavet af bil producenterne for at være sikker på olien lever op til deres krav.
').'
'

,'
temperatur i danmark
' => '
Temperaturen i danmark svinger mellem cirka -10 til +32 °Celsius.
Gennemsnits temperaturen i danmark er cirka +9 °Celsius.

Ekstreme temperature målt i danmark:
Højeste temperatur målt i danmark er +36,4 °Celsius (målt i 1975).
Laveste temperatur målt i danmark er -31,2 °Celsius (målt i 1982).

SAE 10W-40 motorolie skulle derfor passe meget godt til temperaturen i danmark.
SAE 5W-40 motorolie kan også bruges og skulle give lettere motorstart om vinteren da olien er mere tyndtflydende ved lave temperaturer.
'

,'
hvor kommer olien fra ?
' => '
Olien kan for eksempel hentes op af undergrunden af en boreplatform.
Denne olie kaldes råolie. På engelsk kaldes råolie for "crude oil".

Råolie kan for eksempel bestå af...
46,2 % benzin
28,6 % diesel
10,1 % petrokemikalier
0,95 % jet fuel
0,40 % asfalt

Råolie laves til olieprodukter hos et olieraffinaderi.
'.visbilled('1', 'billed0390.jpg', 'olie raffinaderi', false, true).'

Syntetisk olie fremstilles af råolie i et laboratorie.
Her udvindes bestemte dele fra den mineralsk olie og der tilsættes additiver.

Her ses et laboratorie hos Motul som fremstiller syntetisk olie.
'.visbilled('1', 'billed0389.jpg', 'Motul', false, true).'
Her ses Motorex i Østrig.
'.visbilled('1', 'billed2444.jpg', 'Motorex', false, true).'
'.visbilled('1', 'billed2445.jpg', 'Motorex', false, true).'
'

,'
egne erfaringer
' => '
Her ses nogle af de motorolier jeg har brugt i min scooter.
'.visbilled('1', 'billed2171.jpg', 'forskellige motorolie dunke', false, true).'
'.
box(array('260', '150', '80', '60', '120')
   ,array(
       array('motorolie',                      'butik',                   'kroner', 'liter', 'kroner/liter')
      ,array('IQ-X EXTRA 10W-40',              'T-Hansen',                '69',   '1',     '69')
      ,array('Shell Helix Plus 10W-40',        'Bilka',                   '169',  '4',     '42,25')
      ,array('Castrol Power1 GPS 10W-40',      'scooter forhandler',      '156',  '1',     '156')
      ,array('Mobil Super 2000 X1 10W-40',     'Bilka',                   '199',  '4',     '49,75')
      ,array('Motul 5100 ester 10W-40',        'Enghave motor',           '140',  '1',     '140')
      ,array('W5 supertech 5W-40',             'Lidl',                    '35',   '1',     '35')
   )
)
.'
Castrol\'s 1 liter dunk har en smal indbygget tragt som passer ned i hullet ved oliepinden og gør det meget lettere at fylde olie på i forhold til de andre dunke hvor man skal bruge en tragt.
'.visbilled('1', 'billed0786.jpg', 'motorolie påfyldning kymco super 8', false, true).'
Hvis man køber en dunk med smal indbygget traget så kan man bruge den igen ved at fylde andre olier på fra dunke som ikke har smal tragt. Kan anbefales.

Da jeg kørte med Shell Helix Plus olien kom der et hvidt lag på næsen af tændrøret som jeg har læst muligvis stammer fra additiver som er tilsat olien.
'.visbilled('1', 'billed0492.jpg', 'Hvid belægning på tændrør', false, true).'
Jeg er dog ikke helt sikker på at det hvide lag på tændrøret er på grund af olie da der var nogle problemer med den motor.
'

,'
additiver
' => '
Additiver er stoffer som tilsættes for at opnår bestemte egenskaber.

'.afsnit('antioxidant','
Forhindre olien i at går i forbindelse med luftens ilt.
').'
'.afsnit('heavy detergent','
Rengøringsmiddel som sørger for at slam ikke falder ned i bunden af motoren men bliver holdt flydende så det kan blive filtreret i et eventuelt oliefilter.
').'
'.afsnit('basisk','
Forhindre syredannelse.
').'
'.afsnit('antikorrosion','
Giver en beskyttende hinde på metaloverfladerne.
').'
'.afsnit('antislid','
Giver en beskyttende hinde på metaloverfladerne.
').'
'.afsnit('frysepunktnedsættende','
Gør olien mere tyndtflydende ved lave temperature.
Det giver lettere motorstart og hurtigere olietryk.
').'
'.afsnit('friktionsnedsættende','
Giver mindre fiktion i motoren.
Ikke egnet til motorer med våd kobling da koblingen så vil glide.
Det friktionsnedsættende stof kan for eksempel være molybdenum.
').'
Man kan også købe additiver og selv blande det i olien eller benzinen.
For eksempel kan man købe "octane booster" som øger oktantallet i benzinen.
Man kan også købe additiver som renser motoren for belægninger i forbrændingskammeret eller renser dyserne på motorer med brændstofindsprøjtning.
'

,'
motorolie til 2 takt motor
' => '
Her ses nogle forskellige dunke med motorolie til 2 takt motorer.
'.visbilled('1', 'billed0925.jpg', '2 takt motorolie', false, true).'
Nogle dunke har et langt plastikrør man kan hives ud så det er lettere at fylde olie på uden at spilde.

På nyere 2 takt scootere hældes motorolien i en olietank.

På ældre 2 takt knallerter som Puch Maxi blandes motorolien i benzinen inden den fyldes i benzintanken.
Blandingsforholdet kan for eksempel være 2 % olie i benzinen.
Eller skrevet på en anden måde 1:50 (1 del olie til 50 dele benzin).

Motorolien på 2 takt scootere genbruges ikke men kommer igennem motoren og ud af udstødningen.
Det er derfor udstødningen fra en 2 takt motor ofte stinker meget.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
