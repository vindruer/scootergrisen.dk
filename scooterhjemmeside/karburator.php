<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['sideikon']               = 'ikoner/ikon_karburator2.png';

$title = "karburator";
$overskrift = "karburator";
$metadescription = "forklaring af CV og slide karburatorer som findes på scootere og knallerter";

$databasecenter = array(

'
introduktion
' => '
Karburatorens opgave er at blande benzin og luft og samtidig forstøve benzinen i luften så blandingen let kan antændes.
'.visbilled('1', 'billed0410.jpg', 'CV karburator på 4 takt motor', false, true).'

Der findes primært 2 typer af karburatore på scootere/knallerter.
"Slide" typen og CV typen.
'.visbilled('1', 'billed0014.jpg', 'tværsnit af slide og CV karburator typer', false, true).'

"Slide" typen findes primært på 2 takt scootere.
CV typen findes primært på 4 takt scootere.

CV står for Constant Velocity (eller Constant Vacuum).
Det er primært CV typen jeg skriver om her på siden.

Her ses en "slide" karburator og en CV karburator.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2659.jpg', array('slide karburator', 'fra Peugeot Buxy'))
   ,galleri('highslide', '', 'billed1764.jpg', array('CV karburator', 'fra Kymco Super 8 4T'))
))
.'
"Slide" typen kan kendes på at gaskablet er monteret øverst.
CV typen kan kendes på låget øverst og gaskablet som er monteret i siden.
'

,'
dele
' => '
'.
galleriholder(array(
    galleri('highslide', '', 'billed1785.jpg', array('karburatorens dele', 'CV karburator fra Kymco Super 8 4T'))
   ,galleri('highslide', '', 'billed0413.jpg', array('karburatorens dele', 'eksploderet tegning'))
   ,galleri('highslide', '', 'billed0423.jpg', array('tværsnit', ''))
   ,galleri('highslide', '', 'billed0479.jpg', array('tværsnit', 'luftgennemstrømning'))
   ,galleri('highslide', '', 'billed0428.jpg', array('CV karburator', 'gennemskåret'))
))
.'
'

,'
delenes virkningsområde
' => '
Motoren har brug for forskellig mængde benzin alt efter om motoren skal startes fra kold, køre i tomgang, accelerer, kører roligt eller med fuld gas.
Hoveddysen er karburatorens primære kilde til benzin ved normal kørsel men der er ikke nok vakuum til at suge nok benzin op fra hoveddysen i tomgang og meget lav hastighed.
Derfor har karburatoren forskellige hjælpe systemer for at hjælpe ved kold start, tomgang, lav hastighed og acceleration.

Hoveddysen, tomgangsdysen, nålen, luftskruen/blandingsskruen virker ved forskellige motor hastigheder og om de forskellige hjælpe systemer bliver brugt kommer an på hvor meget der drejes på gashåndtaget og dermed hvor hurtigt motoren kører.

Her kan du se hvornår de enkelte dele har betydning for benzin levering til motoren.
'.visbilled('1', 'billed0431.jpg', 'karburator delenes virknings område', false, true).'
Ved tomgang (gashåndtaget er sluppet) er det kun luftskruen/blandingsskruen og tomgangsdysen som bruges (dog har tomgangskruen og den automatiske choker også betydning).

Ved medium hastighed (gashåndtaget er drejet halvt) er det nålens position i nåledysen som har mest at sige.

Ved fuld gas (gashåndtaget er drejet helt) er det hullet i hoveddysen som bestemmer hvor meget benzin der maksimalt kan leveres til motoren.



Her ses delenes virkningsområde vist på en "slide" karburator alt efter hvor meget gasspjældet er oppe (altså hvor meget gashåndtaget er drejet).
'.visbilled('1', 'billed1084.jpg', 'karburator delenes virknings område', false, true).'
'

,'
venturi
' => '
Venturi effekten er et fænomen som opstår når gas eller væske passere gennem et smalt sted, her stiger luft hastigheden og trykket falder.

Et rør med en forsnævring kaldes et venturirør. På det smalle sted i røret bevæger luften sig hurtigere også falder trykket som får væsken til at stige op mod den smalle del af røret.
'.visbilled('1', 'billed0095.jpg', 'venturi trykforskel', false, true).'

Trykfaldet i karburatorens venturi bruges til at suge benzin op fra bunden af karburatoren.
'.visbilled('1', 'billed0096.jpg', 'karburator venturi', false, true).'
Luften kommer ind fra højre og når luften passere nålegasspjældet bliver der meget mindre plads som får luften til at bevæge sig hurtigere, trykket falder og benzin bliver suget op fra hullet ved nålen på grund af det lavere tryk (altså vakuum).
I karburatoren kan nålegasspjældet variere forsnævringen.
På "slide" karburatorer justeres forsnævringen ved at dreje på gashåndtaget.
På CK karburatorer justeres forsnævringen automatisk alt efter luftgennemstrømningen.

'.afsnit('prøv selv venturi effekten','
Når lufthastigheden stiger så falder trykket.

Prøv at hold 2 ark papir parallelt et stykke fra hinanden og pust ned imellem dem og se hvad der sker.
Prøv også at hold et papir i 2 af hjørnerne og puste tæt hen over det og se hvad der sker.

Det der sker kaldes "venturi effekten".
'.visbilled('1', 'billed0433.jpg', 'venturi effekten med papir', false, true).'
').'
'

,'
data
' => '
Her ses karburator data for Kymco Super 8 4T.
'.visbilled('1', 'billed0411.jpg', 'karburator data kymco super 8 4T', false, true).'
Skemaet fortæller os at karburatoren har en indre diameter på 18,5 mm.
At den er af CVK typen.
Svømmer højden skal være 10 mm fra karburator kanten.
Hoveddysen har størrelse #K80 hvis den er begrænset og K82 hvis den er ubegrænset.
Tomgangsdysen har størrelse #35.
I tomgang skal motoren køre med 1900 o/min.
Gashåndtaget skal kunne bevæges 2-6 mm uden at det påvirker vippegasspjældet.
Blandingsskruen skal være skruet 1,5 til 2,5 omgange ud fra bunden.

Her ses karburator data for Kymco Agility.
'.visbilled('1', 'billed0624.jpg', 'karburator data kymco agility', false, true).'

Her ses karburator data for Sachs Madass.
'.visbilled('1', 'billed0861.jpg', 'karburator data sachs madass', false, true).'
Denne karburator har en justerbar nål.
Der sidder altså en clip i enden a nålen som kan sætte i nogle hak og her skal den altså sidder i hak nummer 4 fra ovnen.
'

,'
benzinfilter
' => '
'.ahref('benzintank.php#benzinfilter', 'Benzinfilter').'
'

,'
benzinhane
' => '
'.ahref('benzintank.php#benzinhane', 'Benzinhane').'
'

,'
dyser
' => '
I bunden af karburatoren sidder benzindyserne som oftes blot kaldes dyser.

En dyse er et hul med en bestemt form og bestemt diameter.
Nogle dyser sidder fast i karburatoren og andre kan skrues ud og byttes med en dyse med større eller mindre hul.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0412.jpg', array('gennemskåret hoveddyse', ''))
))
.'
Her er hoveddyse, strålerør og nåledysen taget ud.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0465.jpg', array('karburator nedefra', 'bunden er taget af'))
   ,galleri('highslide', '', 'billed0466.jpg', array('hoveddyse, strålerør og nåledyse', ''))
))
.'
Dysens indre diameter bestemmer hvor meget benzin der maksimalt kan komme igennem dysen.
Hoveddyser med lille indre diameter bruges derfor til at begrænse scooterens topfart.
Når man snakker om at skifte dyse så er det ofte hoveddysen der snakkes om.

Tomgangsdysen virker sammen med luftskruen/blandingsskruen til at give den korrekte benzin og luft blanding ved tomgang og meget lav hastighed.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0467.jpg', array('hoveddysens indre diameter er meget mindre end både strålerøret og nåledysen', ''))
   ,galleri('highslide', '', 'billed0468.jpg', array('tomgangsdyse', ''))
   ,galleri('highslide', '', 'billed0469.jpg', array('nåledyse, hoveddyse', 'strålerør, tomgangsdyse'))
))
.'
Nogle karburatorer har en ekstra dyse som kaldes "starter jet" der bruges af den automatiske choker.
Der findes også karburatorer som har en ekstra dyse som kaldes "power jet".
'.
galleriholder(array(
    galleri('highslide', '', 'billed1032.jpg', array('hoveddyse, tomgangsdyse og starterdyse', ''))
))
.'
Hoveddysen og tomgangsdysen fås i forskellig størrelse som kan angives på dysen med et tal.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0470.jpg', array('tomgangsdysen er her mærket KY35', 'hovedysen er mærket K80. KY og K står her for Kymco da de er fra en Kymco karburator'))
))
.'
Tallene angiver deres indre diameter.
Jo større tal jo større indre diameter og jo mere benzin vil der kunne komme igennem ved fuld gas.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0853.jpg', array('hoveddyse 82 85H', ''))
))
.'
Tomgangsdysens hul er en del mindre en hoveddysens hul.
Jo mindre hullet er jo lettere er det at suge benzin op gennem dysen.
Når motoren køre i tomgang er der ikke nok vakuum til at suge benzin op gennem hoveddysen.
Derfor har vi tomgangsdysen som har et mindre hul og dermed er det lettere at suge benzin op.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0471.jpg', array('tomgangsdyse og hoveddyse indre diameter', ''))
))
.'
Når motoren køre suges der luft ind gennem en lille luft dyse ved indgangen til karburatoren.
Luften suges ind på ydersiden af strålerøret hvor det kommer ind gennem de små huller i strålerøret og forstøver benzinen som suges op gennem hoveddysen.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0473.jpg', array('luftdyse', ''))
   ,galleri('highslide', '', 'billed0472.jpg', array('hul efter luftdysen hvor strålerøret normalt sidder', ''))
))
.'
'

,'
dyse størrelser
' => '
Her er nogle eksempler på dyse størrelser.

'.afsnit('hoved dyse størrelser','
60, 62, 65, 68
70, 72, 75, 78
80, 82, 85, 88
90, 92, 95, 98
100, 102, 102, 108
110, 112, 115, 118
120, 122, 125, 128
130, 132, 135, 138
140, 142, 145, 148
150, 152, 155, 158
160, 165, 170, 175
180, 185, 190, 195
200
').'

'.afsnit('tomgangs dyse størrelser','
32, 35, 38
40, 42, 45, 48
50, 52
').'

'.afsnit('dyse størrelser til forskellige 2 takt scootere','
'
.visfil('1', 'scooterhjemmeside/download/dyser_piaggio_gilera_vespa.png', 'Piaggio, Gilera, Vespa')
.visfil('1', 'scooterhjemmeside/download/dyser_pgo.png', 'PGO')
.visfil('1', 'scooterhjemmeside/download/dyser_suzuki.png', 'Suzuki')
.'
').'
'

,'
blandingsskrue
' => '
I karburatoren sidder en skrue som justere hvor meget luft/benzin motoren får i tomgang og ved meget lav hastighed op til gashåndtaget er drejet cirka 1/4.

Skruen kaldes luftskrue eller blandingsskrue afhængig af om den kun justere luft (luftskrue) eller om den både justere luft og benzin (blandingsskrue).

'.afsnit('blandingsskrue','
'.visbilled('1', 'billed2144.jpg', 'Dell\'Orto karburator blandingsskrue', false, true).'
Sidder skruen på cylinder siden af karburatoren er det gerne en blandingsskrue.
Juster hvor meget luft og benzin der suges ud af det lille hul.
Drejes skruen ind kommer der mindre luft og benzin.
Drejes skruen ud kommer der mere luft og benzin.
').'

'.afsnit('luftskrue','
'.visbilled('1', 'billed2145.jpg', 'Dell\'Orto karburator luftskrue', false, true).'
Sidder skruen på luftfilter siden af karburatoren er det gerne en luftskrue.
Juster hvor meget luft der suges ind hvor tomgangsdysens benzin suges op.
Drejes skruen ind kommer der mindre luft.
Drejes skruen ud kommer der mere luft.
').'

Her ses en CV karburator med blandingsskrue.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1045.jpg', array('karburator blandingsskrue', ''))
   ,galleri('highslide', '', 'billed0485.jpg', array('karburator blandingsskrue', ''))
))
.'
Blandingsskruen har en meget fin spids som let kan bøje hvis man taber den.
Gevindet er også meget fint og derfor skal man ikke spænde den hårdt i bund.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1783.jpg', array('karburator blandingsskrue', ''))
   ,galleri('highslide', '', 'billed1782.jpg', array('karburator blandingsskrue', 'gummiring, metalskive, fjeder, skrue'))
))
.'
På denne blandingsskrue står 0.80.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1965.jpg', array('karburator blandingsskrue', '0.80'))
))
.'
De 0.80 betyder muligvis at spidsen på det bredeste punkt er 0,80 mm.
Her målt til 0,797 mm.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1966.jpg', array('karburator blandingsskrue', 'målt til 0,797 mm'))
))
.'
Her ses en gennemskåret karburator hvor blandingsskruen er monteret nedefra.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1750.jpg', array('karburator blandingsskrue', 'monteret nedefra'))
))
.'
'

,'
accelerator pumpe
' => '
Accelerator pumpen giver et sprøjt benzin når der fra sluppet gashåndtag drejes på gashåndtaget.
Det giver bedre acceleration.

Her ses accelerator pumpen.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0461.jpg', array('karburator', 'accelerator pumpe'))
))
.'
Når der trykkes på accelerator pumpen så presses der benzin op gennem en enrettet ventil og ud gennem et rør midt i karburatoren.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2146.jpg', array('karburator', 'accelerator pumpe'))
))
.'
Her ses membranen og fjederen som holder membranen oppe.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0462.jpg', array('karburator', 'accelerator pumpe adskilt'))
   ,galleri('highslide', '', 'billed0474.jpg', array('karburator svømmerhus', ''))
))
.'
Benzinen sprøjtes ud gennem det lille hul.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0463.jpg', array('karburator', 'accelerator pumpe rør'))
))
.'
'.afsnit('videoer','
'.ahref('http://www.youtube.com/watch?v=5p8qluBZqhI', 'Accelerator pumpen sprøjter benzin', false, true).'
').'
'

,'
air cut off valve
' => '
Air cut off valven sidder på siden af karburatoren under låget med de 2 skruer.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0447.jpg', array('CV karburator', 'Kymco'))
   ,galleri('highslide', '', 'billed2995.jpg', array('karburator air cut off valve', ''))
))
.'
Air cut off valvens opgave at at reducere mængden af luft som suges ind i motoren ved pludselig deacceleration.

Når man køre og pludselig giver slip på gashåndtaget så lukker vippegasspjældet og der vil ikke komme så meget luft og benzin til motoren.
Den mager blanding kan efterbrænde i udstødningen som kan sige pop pop pop.
Efterbrænding er når uforbrændt benzin og luft forbrændes i udstødningen.
Efterbrænding kan ske hvis der er for lidt benzin i blandingen til at antænde i forbrændingskammeret eller kompressionen er for lav fordi det ikke blev suges noget benzin ind i forbrændingskammeret.

Når gashåndtaget er sluppet suger motoren luft og benzin gennem tomgangskredsløbet.
For at undgå efterbrændingen i udstødningen lukker air cut off valve af for det meste af luften til tomgangskredsløbet.

Når gashåndtaget pludselig slippes så vil vakuumet som opstår i indsugningsstudsen suge en membranen ud i air cut off valve.
Når membranen er suget ud vil det meste af luften til tomgangskredsløbet blive lukket og på den måde vil der komme ekstra benzin til motoren og efterbrænding undgås.

Under låget sidder en fjeder som presser membranen ind.
'.visbilled('1', 'billed0641.jpg', 'CV karburator air cut off valve', false, true).'
Her ses membranen.
'.visbilled('1', 'billed0449.jpg', 'CV karburator air cut off valve gummimembran', false, true).'
På den anden side af membranen er en pind.
'.visbilled('1', 'billed3018.jpg', 'air cut off valve membran', false, true).'
Hullet til højre for membranen har forbindelse til indsugningsstudsen hvor vakuumet opstår.
'.visbilled('1', 'billed0458.jpg', 'ckv karburator air cut off valve vakuum hul', false, true).'
Hvis man ser ind i karburatoren fra cylinder siden kan man se et hul øverst til venstre der er forbundet med ydersiden af membranen.
'.visbilled('1', 'billed0448.jpg', 'CV karburator gasspjæld', false, true).'
På nogen karburatorer er der i stedet et hul i låget og en slange som går til indsugningsstudsen.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2996.jpg', array('karburator air cut off valve', ''))
))
.'
Under membranen er yderlige 2 huller.
'.visbilled('1', 'billed0459.jpg', 'CV karburator air cut off valve', false, true).'
Det midterste af de 3 huller har forbindelse med en smal luftdyse øverst i karburatoren og med tomgangskredsløbet.

Det venstre hul (det som er i midten af membranen) har forbindelse med en anden større luftdyse øverst i karburatoren og har en ventil som åbnes når metalpinden på membranen presses ind på den.
'.visbilled('1', 'billed0450.jpg', 'CV karburator air cut off valve huller', false, true).'
Luftdysen nederst til højre er smalt og der kan altid komme lidt luft igennem til tomgangskredsløbet.
Luftdysen nederst til venstre er større og der kan kun komme luft igennem ventilen og videre til tomgangskredsløbet hvis ventilen er åben.
'.visbilled('1', 'billed0460.jpg', 'CV karburator vakuum hus', false, true).'

Når motoren ikke køre eller køre "normalt" så presser membranens pind ind på ventilen som dermed holder ventilen åben også kan luft passer fra ventilens hul til hullet til højre for ventilen under membranen og videre til tomgangskredsløbet.
Ved pludselig deacceleration suges membranen ud så ventilen lukken og der kan ikke komme luft mellem de 2 huller under membranen.

Ved tomgang og "normal" kørsel vil der altså kunne komme luft gennem begge luftdyser til tomgangskredsløbet.
Men under pludselig deacceleration vil der kun kunne komme luft gennem den smalle luftdyse men ikke den store luftdyse.

Her er nogen tegninger.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3017.jpg', array('karburator tegning', 'med air cut off valve'))
   ,galleri('highslide', '', 'billed3019.jpg', array('karburator tegning', 'med air cut off valve'))
   ,galleri('highslide', '', 'billed2713.jpg', array('karburator tegning', 'med air cut off valve'))
))
.'
'

,'
svømmer og nåleventil
' => '
I bunden af karburatoren findes en svømmer og en nåleventil som sørger for at holde benzin niveauet på en bestemt højde.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1776.jpg', array('karburator', 'bunden taget af'))
   ,galleri('highslide', '', 'billed1771.jpg', array('svømmer og nåleventil', ''))
   ,galleri('highslide', '', 'billed1768.jpg', array('karburator', 'afmontering af svømmer pind'))
   ,galleri('highslide', '', 'billed1769.jpg', array('karburator', 'svømmer'))
   ,galleri('highslide', '', 'billed1770.jpg', array('karburator', 'svømmer og nåleventil'))
   ,galleri('highslide', '', 'billed1772.jpg', array('svømmer og nåleventil', ''))
   ,galleri('highslide', '', 'billed1773.jpg', array('nåleventil', 'og klips'))
   ,galleri('highslide', '', 'billed3173.jpg', array('nåleventil tegning', ''))
   ,galleri('highslide', '', 'billed1774.jpg', array('nåleventil', 'med gummi spids'))
   ,galleri('highslide', '', 'billed3356.jpg', array('nåleventil', 'med metal spids'))
   ,galleri('highslide', '', 'billed1775.jpg', array('karburator nåleventil hul', 'er komme benzinen ind i karburatoren fra studsen som ses til højre hvor benzinslangen sættes på'))
   ,galleri('highslide', '', 'billed1778.jpg', array('karburator', 'svømmer pind montering'))
   ,galleri('highslide', '', 'billed1777.jpg', array('karburator', 'svømmer plade nåleventil'))
))
.'
Svømmeren flyder oven på benzinen.
En plade på svømmeren presser nåleventilen op når benzin niveauet stiger og nåleventilen lukket for benzintilførselshullet.
Når benzin niveauet falder følger svømmeren med ned og nåleventilen åbner for hullet så der kan komme mere benzin ind.

Svømmeren holdes på plads i karburatoren med en pind.

Pinden der holder svømmeren kan fjernes ved at skubbe pinden til siden eller ved at fjerne en skrue afhængig af karburatoren.
Pinden kan have nogle riller i den ene ende som gør at den kan sidde fast.
Når pinden er skubbet til side kan svømmeren og nåleventilen tages op.

Nåleventilen sidder løst på svømmeren og kan let tages af.
På enden af nåleventilen sidder en klips som sørger for at svømmeren er i stand til at hive nåleventilen ud af hullet hvis den skulle sidde lidt fast.
På bagenden af nåleventilen sidder en pind som kan trykkes ind.
Inden i nåleventilen er en fjeder så når der trykkes på pinden kan den gå lidt ind i nåleventilen.

Spidsen kan være lavet af gummi som lukker for benzintilførelseshullet men kan også være i metal.

På nogle karburatorere kan benzintilførelseshullet (nåleventilhuset) skrues ud også kan det være et benzinfilter/benzinsi bagved.
Pladen på svømmeren kan bøjes en smule op eller ned for at ændre på svømmerhøjden og dermed benzin niveauet i karburatoren.
'

,'
tomgangskredsløbet
' => '
Ser vi ind i karburatoren fra cylindersiden og åbner vippegasspjældet ses vi nogle huller.
'.visbilled('1', 'billed0476.jpg', 'karburator huller', false, true).'
Det store hul til højre er fra den automatiske choker.

Det lille hul som står alene er fra tomgangskredsløbet efter blandingsskruen og er placeret lige før vippegasspjældet når det er lukket.
Når man justere på blandingsskruen så er det benzin og luft mængden der kommer ud af dette hul man justere.

De 3 små huller er også fra tomgangskredsløbet men før blandingsskruen og de er placeret lige bag vippegasspjældet når det er lukket.
Disse huller påvirkes ikke af blandingsskruen.

'.ahref('http://www.youtube.com/watch?v=vvSWSnpcBEE', 'Video : Når vippegasspjældet åbnes vil de 3 små huller komme mere og mere tilsyne', false, true).'

Her ses hullet hvor tomgangsdysen skrues i, i bunden af karburatoren.
Det er dette hul som har forbindelse med de 4 små huller.
'.visbilled('1', 'billed0477.jpg', 'tomgangsdyse hul', false, true).'
'

,'
gasspjæld
' => '
Gasspjældet er den del inden i karburatoren som bevæger sig når der drejes på gashåndtaget.

'.afsnit('dele og navne','
På grund af "slide" og CV karburatorens forskellige opbygning syntes jeg det har været forvirrende når folk har skrevet om gasspjæld da gasspjældet er forskellige dele på de to typer karburatorer.

På en "slide" karburator er gaskablet forbundet med en stempel ventil.
På en CV karburator er gaskablet forbundet med en vippe ventil.

'.visbilled('1', 'billed0097.jpg', 'slide CV type karburator', false, true).'

På en "slide" karburator er gasspjældet altså en stempel ventil.
På en CV karburator er gasspjældet altså en vippe ventil.
').'
'

,'
slide i forhold til CV
' => '
'.afsnit('"slide" karburator','
Gaskablet er forbundet med stempelgasspjældet i midten af karburatoren.
Giver man i tomgang hurtigt fuld gas åbnes stemplet med det samme men det er ikke sikkert at lufthastigheden er høj nok til at suge benzin nok op og det kan muligvis få motoren til at gå i stå.
Motoren kommer hurtigt op i omdrejninger når der drejes på gashåndtaget.
Bruger mere benzin end en CV karburator.
').'

'.afsnit('CV karburator','
Gaskablet er forbundet med vippegasspjældet.
Stemplet i midten af karburatoren bevæger sig op og ned alt efter hvor hurtigt luften kommer igennem karburatoren og dermed hvor hurtigt motoren køre.
Giver man i tomgang hurtigt fuld gas går der lidt tid før stemplet kommer helt op fordi motoren først skal op i omdrejninger.
Motoren er langsom om at komme op i omdrejninger når der drejes på gashåndtaget.
Bruger mindre benzin end en "slide" karburator.
').'
'

,'
karburatorvarmer
' => '
På for eksempel CPI Oliver og Sym Jet er der monteret et elektrisk varmelegeme på karburatoren kaldet karburatorvarmer.
'.visbilled('1', 'billed1204.jpg', 'karburatorvarmer', false, true).'
'.visbilled('1', 'billed2819.jpg', 'karburatorvarmer', false, true).'
Karburatorvarmerens opgave er vist nok at undgå is i karburatoren og at benzinen ikke kondensere på karburatorens inderside fremfor at blive suget ind i motoren.

På Sym Jet er der et "power filter" og en "thermo switch" som jeg ikke ved hvad gør.
'.visbilled('1', 'billed2696.jpg', 'karburatorvarmer', false, true).'

Her ses delene i et el diagram fra Sym Jet.
'.visbilled('1', 'billed2697.jpg', 'karburatorvarmer eldiagram', false, true).'

"Power filter" ved jeg ikke hvad gør.
"Power filter" får + og - fra batteriet når tændingen er på ON også er den forbundet til "thermo switch" med 2 ledninger.

"Thermo swtich" er så vidt jeg ved en kontakt der tænder og slukker for strømmen til karburatorenvarmeren alt efter hvor varm/kold omgivelserne er.
"Thermo swtich" får strøm fra generatoren når motoren køre.

Jeg forstiller mig at "thermo swtich" er afbrudt om sommeren og dermed får karburatorvarmeren ikke strøm og først når temperaturen kommer under et bestemt niveau tilsluttes strømmen til karburatorvarmeren som bliver varm og varmer karburatoren.

På scootere med væskekøling kan karburatoren i stedet for en karburatorvarmer være forbundet med vandpumpen med 2 slanger for at få varm kølervæske ind i karburatoren.



Her ses delene i et el diagram fra Derbi.
'.visbilled('1', 'billed3332.jpg', 'derbi karburatorvarmer eldiagram', false, true).'
Her er karburatorvarmeren kittet ekstra udstyr.
'.visbilled('1', 'billed3344.jpg', 'derbi karburatorvarmer eldiagram', false, true).'
I manualen med diagrammet står noget i stil med at strømmen til karburatorvarmeren aktiveres når termostaten kommer under 5 °Celsius.
'

,'
automatisk choker
' => '
En automatisk choker sørger for ekstra benzin til motoren når motoren er kold så den er lettere at starte og holde kørende indtil motoren er blevet varm.

Her ses en automatisk choker monteret på en karburator.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0457.jpg', array('automatisk choker', 'på karburator'))
   ,galleri('highslide', '', 'billed2147.jpg', array('automatisk choker', ''))
   ,galleri('highslide', '', 'billed3156.jpg', array('automatisk choker', 'spiden er helt ude'))
))
.'
Her ses de dele som man umiddelbart kan tage af.
På nålen står K5.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1784.jpg', array('automatisk choker', ''))
   ,galleri('highslide', '', 'billed2148.jpg', array('automatisk choker', 'adskilt'))
   ,galleri('highslide', '', 'billed0420.jpg', array('automatisk choker', 'skåret igennem'))
   ,galleri('highslide', '', 'billed2114.jpg', array('automatisk choker', 'tegning'))
   ,galleri('highslide', '', 'billed3024.jpg', array('automatisk choker', 'tegning'))
   ,galleri('highslide', '', 'billed3357.jpg', array('automatisk choker dele', ''))
))
.'
Når motoren kører kommer der strøm fra generatoren eller CDI boksen til chokeren og et keramisk varmelegeme i chokeren (kaldet PTC) bliver varmet op og en thermovoks udvider sig og ventilen og nålen bevæger sig lidt efter lidt ud fra chokeren og langsomt bliver der lukket for benzin og luft genvejen.

Når motoren har været slukket i 30 minutter er den automatiske choker trukket helt tilbage og genvejen er åben.
Når motoren startes tager det cirka 5 minutter for den automatiske choker at komme helt ud og lukke for genvejen.
Efter 5 minutter er motoren blivet varm nok så der ikke længere er brug for den ekstra benzin.

Her er ventilen så langt ude som den kan komme.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3102.jpg', array('automatisk choker', ''))
))
.'
Her ses hvordan nålen lukker for benzin hullet og ventilen lukker for luft gennemstrømningen.
'.visbilled('1', 'animation0018.gif', 'automatisk choker animation', false, true).'

'.ahref('http://www.youtube.com/watch?v=z23hlj6CQH0', 'Video : her kan man rigtig se hvordan den automatiske choker virker', false, true).'
'.visbilled('1', 'billed0487.jpg', 'karburator automatisk choker forklaring', false, true).'
Nålen lukker for benzinen.
Ventilen lukker for luften.

Luft suges ind gennem et hul ved indgangen af karburatoren.
'.visbilled('1', 'billed0455.jpg', 'automatisk choker luft indsugningshul', false, true).'
Benzinen kommer gennem choker dysen i bunden af karburatoren.
'.visbilled('1', 'billed0453.jpg', 'karburator svømmerhus', false, true).'
Benzinen suges op gennem et rør.
'.visbilled('1', 'billed0452.jpg', 'karburator benzinrør til automatisk choker', false, true).'
Luften kommer forbi hullet hvor den automatiske choker sidder og suger benzin op fra hullet i bunden.
'.visbilled('1', 'billed0444.jpg', 'automatisk choker hul', false, true).'
Luft og benzin blandingen kommer ud gennem hullet her og suges ind i cylinderen.
'.visbilled('1', 'billed0456.jpg', 'automatisk choker luft og benzinblandings udgang', false, true).'
Oven på den automatiske choker sidder et plastik låg.
Jeg har tænk over hvad det skulle gøre godt for og jeg tror det er for at holde på varmen som varmelegemet laver da varmen ellers ville kunne blive blæst væk og det kunne resultere i at chokeren blev kold og ville åbne for genvejen.

Ser man på el diagrammer er den automatiske choker forbundet med en modstand.
Denne modstand gøre at den automatisk choker er længere tid om at lukke.
Forbinder man chokeren direkte til scooterens batteri så bliver den hurtigt varm og kommer hurtigere ud end den normalt ville.

På min scooter får den automatisk choker jævnstrøm.
Den ene ledning er forbundet med batteriets plus (+) terminal (når tændingslåsen er drejet til ON) 
Den anden ledning er forbundet med en modstand og derefter videre til CDI boksen.
Modstanden gør at den automatiske choker kun får 6-7 volt i stedet for batteriets 12-14 volt.

På andre scootere kan den automatisk choker få vekselstrøm fra generatoren også gennem en modstand.

Det skulle ikke have nogen betydning hvordan den automatisk choker drejes andet end at så passe den bedst hvis der for eksempel sidder et gummi hus over karburatoren.
'

,'
membran stempel og nål
' => '
Her ses gummimembranen øverst, stemplet i midten og nålen i bunden.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1780.jpg', array('membran stempel nål', ''))
))
.'
Der er 2 huller i bunden af stemplet.
Det midterste hul er til nålen.
Det andet hul er så luften over membran kan suges ud og da der er atmosfærisk luft under membranen betyder det at stemplet og nålen bliver løftet.
Jo hurtigere luften suges igennem karburatoren jo mere vakuum vil der opstå og jo højere vil stemplet og nålen rejse sig.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2992.jpg', array('karburator', 'vakuum membran'))
))
.'

Gummi membranen har et "øre" som passer i et "øre" på karburatoren så stemplet vender rigtigt.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2643.jpg', array('karburator', 'hak til øre på gummimembran'))
))
.'
Nålen holdes på plads i stemplet af en fjeder og en plastikholder som sidder i et hak i bunden af stemplet.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1781.jpg', array('nål', ''))
))
.'
Denne nål er ikke umiddelbart justerbar. Men man kan måske justere den højere op ved at sætte skiver under.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1779.jpg', array('nål', ''))
))
.'
Denne nål kan justeres op eller ned ved at flytte en lille klips i nogle hak øverst på nålen.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1581.jpg', array('nål', ''))
   ,galleri('highslide', '', 'billed0862.jpg', array('nål', ''))
   ,galleri('highslide', '', 'billed3016.jpg', array('nål med klips', 'tegning'))
))
.'
Ved at flytte klipsen kan man justere hvor meget benzin der skal komme op fra gashåndtaget er drejet cirka 1/4 til 3/4.

Hvis klipsen flyttes ned så kommer nålen op også kommer der mere benzin.
Hvis klipsen flyttes op så kommer nålen ned også kommer der mindre benzin.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3368.jpg', array('nål med klips tegning', ''))
))
.'

De gange har jeg læst om hvilket hak nummer klipsen skal sidde i der har det vist altid været fra oven man skal tælle.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3369.jpg', array('nål med klips tegning', ''))
))
.'
'

,'
benzinslange
' => '
Her ses en benzinslange som sidder mellem den automatiske benzinhane og karburatoren.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1856.jpg', array('benzinslange', ''))
))
.'
Her ses at der sidder en klips i hver ende som sørger for at slangen bliver siddende på studsen.
Læg mærke til at slangen er lavet i 2 lag af forskelligt materiale.
Inderste er et tykt gummi rør og uden på er der et tynd plastik lag i et andet materiale.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1857.jpg', array('benzinslange', ''))
))
.'
'

,'
fjedre der ligner hinanden
' => '
Da jeg skildte min CV karburator ad fandt jeg ud af at der er 2 fjedre som minder meget om hinanden og at man godt kan komme til at bytte om på dem.
Jeg blev itvivl om hvilken fjeder der skulle sidde hvor.

Ved air cut off valven sidde denne fjeder.
Den har en tykkeste tråd og er derfor sværre at presse sammen.
'.visbilled('1', 'billed2660.jpg', 'CV karburator air cut off valve', false, true).'
Ved accelerator pumpen sidder denne fjeder.
Den har en tyndere tråd og er derfor lettere at presse sammen også har den 1 ekstra vending og er lidt længere.
'.visbilled('1', 'billed2661.jpg', 'CV karburator accelerator pumpe', false, true).'
Jeg er nogenlunde sikker på at den kraftige fjeder skal sidde ved air cut off valven og den slappe fjeder skal sidde ved accelerator pumpen.
'

,'
gaskabel
' => '
Her vises et gaskabel af den type som sidder på en scooter med CV karburator (findes mest på scootere med 4 takt motor).
'.visbilled('1', 'billed3885.jpg', 'styr, gashåndtag og gaskabel på Kymco', false, true).'
'.
galleriholder(array(
    galleri('highslide', '', 'billed2870.jpg', array('gaskabel gashåndtag ende', 'den ende af gaskablet som sidder ved gashåndtaget'))
   ,galleri('highslide', '', 'billed2872.jpg', array('gaskabel gashåndtag ende', 'gummibeskytter skubbet til siden'))
   ,galleri('highslide', '', 'billed2871.jpg', array('gaskabel gashåndtag ende', 'i det bøjede rør går en plastik strømpe omkring wiren'))
   ,galleri('highslide', '', 'billed2863.jpg', array('gaskabel gashåndtag ende', 'ende bøjet rør tæt på'))
   ,galleri('highslide', '', 'billed2862.jpg', array('gaskabel gashåndtag ende', 'ende plastikrør inden i det bøjede rør tæt på'))
   ,galleri('highslide', '', 'billed2864.jpg', array('gaskabel gashåndtag ende', 'ende plastikrør inden i det bøjede rør tæt på og gummi dut taget af'))
   ,galleri('highslide', '', 'billed2865.jpg', array('gaskabel gashåndtag ende', 'ende som sidder på karburator'))
   ,galleri('highslide', '', 'billed2867.jpg', array('gaskabel karburator ende plastik rør i bøjet rør tæt på', 'gevindet på det bøjede rør er fladt på et bestemt sted'))
   ,galleri('highslide', '', 'billed2873.jpg', array('cv karburator fra siden hvor gaskablet monteres', ''))
   ,galleri('highslide', '', 'billed2877.jpg', array('karburator i kymco super 8 4T LEJ2-IT', ''))
   ,galleri('highslide', '', 'billed2866.jpg', array('gaskabel karburator ende dele skubbet til side', ''))
   ,galleri('highslide', '', 'billed2868.jpg', array('gaskabel karburator ende gummi beskytter tæt på', 'gummidut gør at snavs og lignende ikke kan komme ind i kablet'))
   ,galleri('highslide', '', 'billed2869.jpg', array('gaskabel karburator ende gummi beskytter tæt på', 'her ses hvordan gummidutten skal sidde'))
))
.'
Det er ikke helt lige meget om gummidutten sidder på sin plads eller sidder løst på wiren.

Når gummidutten sidder løst på wiren er der chance for at den kiler sig fast mellem wiren og "hjulet" sådan at motoren ikke falder tilbage til tomgang men baghjulet bliver ved med at dreje.

Sagt på en anden måde... scooteren køre uden du rør gashåndtaget.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2874.jpg', array('karburator gaskabel', 'gummidutten sidder rigtigt'))
   ,galleri('highslide', '', 'billed2875.jpg', array('karburator gaskabel', 'gummidutten sidder forkert'))
   ,galleri('highslide', '', 'billed2876.jpg', array('karburator gaskabel', ''))
))
.'
Læs eventuelt '.ahref('service_kabler.php#smor_kabler', 'Smør kabler').'.
'

,'
karburatormærker og typer
' => '
Her er nogen af de karburatormærker og type man kan få til de scootere der findes på hjemmesiden.

'.afsnit('mærker', '
Dekni (Deni) Jeg er i tvivl og der kun er et mærke som hedder dekni eller om der også er et mærke som hedder deni. Der er måske en producent der hedder "Deni Carburetor Co. , Ltd.".
Keihin
Dell\'Orto
Mikuni
Jingke
Shengwey
Delkin
Hualung
').'

Her er nogen eksempel på karburatorer som de for eksempel er angivet i typegodkendelserne.

'.afsnit('eksempler som angivet i typegodkendelser', '
MIKUNI PZ19
mikuni VM 12 101 6
DEKNI 18J
DE NI PD18J
DENI PZ17C
DE*NI PZ19
Dell\'Orto PHVA
Dell\'Orto PHBN
Dell\'Orto SHBC
JINGKE PZ17B
PB12 Keihin
keihin CVK
Shengwey PZ19
Delkin PD18J
HUALUNG PZ16A
GURTNER PY12
Kymco (på min Kymco Super 8 4T sidder en karburator i Keihin CV stilen men det er vist Kymco der har lavet den).

Nogen gange står der ikke noget mærke men bare typen :

PD18J
PD19J
PZ17A
').'
'

,'
filer
' => '
'.visfil('1', 'scooterhjemmeside/download/dellortokarburator.pdf', 'Dell\'Orto "slide" karburatorer').'
'

,'
danske og engelske ord
' => '
Her ses danske og engelske ord for nogle af karburatorens dele.

'.
box(array('200', '200')
   ,array(
       array('dansk', 'engelsk')
      ,array('Hoveddyse', 'Main jet')
      ,array('Tomgangsdyse', 'Idle jet<br>Slow jet')
      ,array('Nåledysen', 'Needle jet')
      ,array('Strålerør', 'Needle jet base')
      ,array('Luftskrue', 'Air screw<br>Pilot air screw')
      ,array('Blandingsskrue', 'Fuel mixture screw')
      ,array('Luftskrue og blandingsskrue har også den fælles betegnelse...', 'Pilot screw')
      ,array('? Svømmeraksel ?', 'Float pivot')
   )
)
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
