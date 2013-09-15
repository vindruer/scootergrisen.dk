<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "Kymco Super 8 4T";
$overskrift = "Kymco Super 8 4T";
$metadescription = "ting jeg har oplevet på min Kymco Super 8 4T, fejl, defekter";

$databasecenter = array(

'
introduktion
' => '
Her på siden vil jeg skrive om nogen ting jeg har oplevet på min Kymco Super 8 4T.

Specielt de problemer jeg har haft.
'.visbilled('1', 'billed2226.jpg', 'kymco super 8 4T', false, true).'
Hvis du kigger på mange af de andre sider på hjemmesiden så kan du se mange billeder fra Kymco Super 8 4T hvis der er en eller anden del du vil se hvordan ser ud og sådan.
'

,'
lys kontrol boks
' => '
Lys kontrol boksen er en underlig boks som findes på Kymco Super 8 4T.
'.visbilled('1', 'billed0256.jpg', 'lys kontrol boks kymco TYC-D401', false, true).'
Det ligner en CDI boks men det er det ikke.
'.visbilled('1', 'billed0854.jpg', 'lys kontrol boks kymco TYC-D401', false, true).'
'.visbilled('1', 'billed0855.jpg', 'lys kontrol boks kymco TYC-D401', false, true).'
Lys kontrol boksen bruges i til at tænde for de 2 forlys pære.
I stedet for at strømmen til de 2 forlys pærer skal gå igennem lyskontakten ved håndtaget så går strømmen igennem lys kontrol boksen og lyskontakten bruges som en fjernbetjening til at styre lys kontrol boksen.

'.afsnit('har følgende opgaver','
At slukke forlyset når motoren er stoppet.
At tænde forlyset når motoren køre.
At sende halvt så mange volt (6 volt) til forlyset når motoren kører i lav tomgang.
At konstant bruge 1,5 mA fra batteriet. Også når tændingslåsen er drejet til OFF.
At forvirre mig.
').'

'.afsnit('indstillinger','
Slukket lys.
Svagt lys (ved lav tomgang sendes kun 6 volt til pærene i forhold til de normale 12 volt).
Kort lys.
Langt lys.
').'

Hvis den ene forlys pære springer kan den anden desværre ikke blive ved med at lyse. Den kan godt lyse i 1-2 sekunder men lys kontrol boksen vælger åbenbart at enten skal begge pære lyse eller også skal ingen af dem lyse.
Men man kan dog bruge det langelys eller positionslyset.

Her ses hvad lys kontrol boksen er forbundet med.
'.visbilled('1', 'billed0856.jpg', 'lys kontrol boks kymco TYC-D401', false, true).'
Lys kontrol boksen modtager et pulserende signal fra CDI boksen når motoren køre.

'.afsnit('signal fra CDI til lys kontrol boks','
Her ses signalet ved lav gas.
Opløsning : (X til 2ms/div, Y til 4V/div).
'.visbilled('1', 'billed1105.jpg', 'signal fra CDI til lys kontrol boks ved lav gas', false, true).'
Her ses signalet ved fuld gas.
Opløsning : (X til 1ms/div, Y til 4V/div).
'.visbilled('1', 'billed1106.jpg', 'signal fra CDI til lys kontrol boks ved fuld gas', false, true).'
').'

Når lys kontrol boksen modtager dette puls signal så tændes forlyset.
Hvis lys kontrol boksen ikke modtager dette signal så vil forlyset ikke kunne lyse.
Jeg har målt +1,6 til +2,0 volt jævnstrøm på ledningen fra CDI boksen.

Jeg har haft nogle problemer på min Kymco Super 8 4T som bare slukker forlyset (både kort og langtlys) og efter noget tid tænder det så igen og slukker igen efter noget tid.

Grunden til dette er fordi CDI boksen er defekt og kun nogle gange laver det pulserende signal som lys kontrol boksen skal bruge for at tænde forlyset.
Strømmen til positionslyset går ikke igennem lys kontrol boksen så positionslyset påvirkes ikke.

'.visflash('0', "http://www.youtube.com/v/D4Ahihd5Y7E", 'lys kontrol boksen er forbundet ligesom den ville være på scooteren bortset fra ledningen til CDI boksen', true).'
'.visflash('0', "http://www.youtube.com/v/udwYtSV_7D0", '12 volt transformer er forbundet i stedet for scooterens batteri som strømkilde. Transformatoren kan ikke få begge pære til at lyse. Sikkert fordi den ikke kan levere nok ampere. Den levere vist omkring 1,2 ampere', true).'
Se og lyt til hvordan den analoge viser pulsere. Dette pulserende signal er det som får forlyset til at blive ved med at lyse.
'.visflash('0', "http://www.youtube.com/v/TVwcQtX2DZI", 'analog måler forbundet og digital multimeter mellem batteriets minus terminal (stel) og benet i CDI boksen som går til lys kontrol boksen', true).'
Min CDI boks var defekt for når jeg slukker motoren og tænder den igen sender CDI boksen ikke noget pulserende signal.

Der er en anden bruger som har haft nøjagtigt det samme problem og hans CDI boks blev også defekt efter cirka 20-24 måneder ligesom min.


'.afsnit('adskilt','
Der er en bruger som har taget nogle billeder og fortalt hvad boksen indeholder af elektronik.
'.visbilled('1', 'billed1183.jpg', 'kymco super 8 4T lys kontrol boks skilt ad', false, true).'

'.afsnit('indeholder følgende elektronik','
1 effektmodstand - for strømmåling
1 PIC12C508 - microcontroleren som styrer lyset
2 x Opto isolators LTV-817C - galvanisk adskillelse langt/kort lys
1 LM358 (smd) - operationsforstærker
2 x P-MOSFET transistor IRF5305 - tænd/sluk af langt/kort lys
4 dioder M7 - beskyttelse.
3 x L6 NPN transistor. Bruges til at drive gate (konvertering af spænding)
En bunke andre komponenter.
').'

Her er stikket og ledningen loddet af.
'.galleriholder(array(galleri('highslidestandard', 'billed1184.jpg', 'billed1184.jpg', 'kymco super 8 4T lys kontrol boks skilt ad'))). '
'.visbilled('1', 'billed1185.jpg', 'kymco super 8 4T lys kontrol boks skilt ad', false, true).'

Hvorfor sidder der 2 modstande mellem batteriets terminaler som konstant bruger cirka 1,5 mA fra batteriet ?
'.visbilled('1', 'billed1214.jpg', 'kymco super 8 4T lys kontrol boks skilt ad', false, true).'
'.visbilled('1', 'billed1786.jpg', 'omg kat', false, true).'

'.afsnit('kommentar fra scootergrisen','
Jeg har målt på de 2 ben på lys kontrol boksen med modstandende og jeg måler 3000-3500 Ω og ganske rigtigt så stå lys kontrol boksen konstant og bruger strøm fra batteriet også selvom tændingslåsen er drejet til OFF.
Når lys kontrol boksen er forbundet så måler jeg 0,01 ampere mellem batteriets plus (+) terminal og stel.
Fjernes lys kontrol boksen så måles der 0,00 ampere.
').'

'.afsnit('en bruger skriver','
'.citat('
Som sædvanligt, forundres man, over et sådant design.

En af de sjoveste, er de to modstande længst til venstre - mod stikket. De er på 4.7kOhm hver, og sidder direkte over plus og minus til batteriet. Altså, udenom tændingskontakten. Jeg kan ikke se, at de er sat på, af anden årsag, end at skulle slagte batteriet - de virker som var en belastning anbragt mellem plus og minus, med en modstand på 9.4kOhm. De er aktive hele tiden, også når tændingen er slukket, da strømmen til lyset går udenom tændingskontakten. De to modstande trækker 1.5mA. Dertil, er sat noget mere på - jeg ved ikke, hvor meget det trækkes. Men modstandende er skæge. De gør intet, udover at varme printet op.

Der er brugt to opto-isolatorer. Fornuftigt, da lyset har egen forsyning. Men hvor er opto isolatoren til CDI-signalet? Den er vist glemt. Der er kun optoisolering på kort og langt lys.

Det kan diskuteres, hvor vigtigt det er med optokoblere til nær/fjernlys. Umiddelbart, skulle man måske tro det betød noget, da lys og tænding er på hver sin forsyning. Men det betyder ikke noget, da signalerne er "langsomme". Det betyder, at f.eks. PIC processoren, nemt kan fjerne støjen, ved at ignorere hvis der er et lille "hul" i spændingen. Derimod, er det sværre med signalet fra CDIen. Og ikke mindst, at samtidigt beskytte CDIen. Den skal jo ikke have strøm på indgangen fra lyskontrol boksen, når scooterens tænding er slukket - så det skal sikres at strømmen ikke går baglands ind i CDIen.

Det undrer også lidt, hvorfor PIC kredsen har 0V på minus - og ikke i stedet 12V på plus. Det havde en dygtig designer gjort. Havde der været 12V på plus, og 7V på kredsens minus (5V over kredsen), så var drivertransistorene undgået, der kun har til formål at flytte spændingen, fordi PIC kredsen er sat på "forkert". Strømmålemodstandens output, havde været indenfor PICens område, og strøm vil kunne måles, f.eks. hvis den havde haft A/D konverter, eller komperator (der kunne få kredsen til at slukke lyset, ved for stor strøm, så effektafsætning undgås i målemodstand).

LM358 er en operationsforstærker. Dens funktion kan jeg ikke se. Måske fungerer den som komperator, for at kunne slukke lyset, hvis strømmen bliver for stor. Det kan også ske, at den bruger strøm, når tændingen er slukket. Den bruger ca. 1mA hvis den er "på".

En ting er sikkert: Jeg betragter "kortslutning" og fjernelse af lyskontrolboksen, som en feature!

Energien, som lyskontrolboksen sparer batteriet for, ved at blænde ned i kryds, betaler sig ikke, da det er stor sandsynlighed for, at der ved kørsel i middel lades op, uanset boksen mangler. Og da den samtidigt æder strøm, når alt er slukket, så dræner den batteriet mer end den giver.
').'
').'
').'

'.afsnit('lyskontrol boks med kortslutning','
Her er nogen billeder fra en bruger hvor boksen var revnet bag på også ligner det der er sket en kortslutning mellem + og - stikkene af en eller anden grund.
'.visbilled('1', 'billed3443.jpg', 'Kymco CDI boks revnet', false, true).'
'.visbilled('1', 'billed3441.jpg', 'Kymco CDI printplade', false, true).'
'.visbilled('1', 'billed3442.jpg', 'Kymco CDI printplade bagside', false, true).'
').'
'

,'
lys kontrol boks modifikation
' => '
Grundet det dårlige design i forbindelse med forlyset på Kymco Super 8 4T har jeg undersøgt hvordan man kan få lavet forlyset så det bare virker og man ikke skal tænke på om det nu er tændt eller slukket (fordi CDI boksen ikke altid laver signal til lys kontrol boksen).

De fleste scootere har så vidt jeg ved kun 1 forpære men denne scooter har 2 forpære på 35/35 watt hver.
Forlyset alene bruge altså 70 watt. Hvilket er en strømstyrke på cirka 5,8 ampere (70 watt / 12 volt).
Jeg vil mene at denne større strømstyrke til forlyset har gjort at kymco har valgt at lave designet med en lys kontrol boks.
Lys kontrol boksen fungere i stil med et relæ hvor de 5,8 ampere går gennem boksen og ikke igennem kontakterne for kort/langt lys og tænd og sluk kontakterne og tændingslåsen.

Ideen med lys kontrol boksen er god nok men desværre har det ikke virket så godt i virkeligheden.
Forlyset kan finde på at tænde og slukke af sig selv da lys kontrol boksen er afhængig af en pulserede signal fra CDI boksen.
CDI boksen kan desværre finde på ikke at lave dette signal i perioder også slukker forlyset måske uden at man lægger mærke til det og det kan jo være farligt i trafikken. 
Det er altså ikke lys kontrol boksen der er noget i vejen med men den er bare unødvendig.

Indtil videre har jeg fundet 3 forskellige løsninger

'.afsnit('den lette løsning','
Fjern lys kontrol boksen helt fra scooteren.
Kortslut den blå/sorte og blå ledning.
Kortslut den hvide/sorte og hvide ledning.
'.visbilled('1', 'billed2320.jpg', 'kymco super 8 4T lys kontrol boks stik kortslutning', false, true).'
Udskift 7 amperes sikringen som sidder på sorte ledninger med en 15 amperes sikring.
Hvis det ikke kan lade sig gøre at få en glas sikring på 15 ampere så monter en sikringsholder til fladesikringer.
'.visbilled('1', 'billed2366.jpg', 'sikringsholder og sikring på 15 ampere', false, true).'
Ulempen ved denne løsning er at store dele af ledningsnettet nu kan udsættes for 15 ampere og det er jo ikke sikkert ledningerne er lavet til det når der har siddet en 7 amperes sikring i oprindeligt så derfor har jeg ikke brugt denne løsning på min scooter.
').'

'.afsnit('den geniale løsning','
Ved at bruge 2 relæer kan man helt undgå at skulle ændre på ledningsnettet eller sikringernes ampere.
Det skulle klart være den bedste løsning.

Jeg har ikke selv prøvet det men der er flere brugere som har gjort det og skrevet at det virker.

Lys kontrol boksen fjernes også monteres de 2 relæ som vist her.
'.galleriholder(array(galleri('highslidestandard', 'billed2786.jpg', 'billed2786.jpg', '2 relæ i stedet for lys kontrol boks kymco super 8 4T'))). '
Her er nogen billeder fra en bruger som har skiftet lys kontrol boksen ud med 2 relæ ('.ahref('http://www.biltema.dk/da/Bil---MC/Bilreservedele/Elsystem/Rela/', 'kan købes i biltema').').
'.visbilled('1', 'billed3310.jpg', '2 relæ i stedet for lys kontrol boks kymco super 8 4T', false, true).'
'.visbilled('1', 'billed3311.jpg', '2 relæ i stedet for lys kontrol boks kymco super 8 4T', false, true).'
'.visbilled('1', 'billed3308.jpg', '2 relæ i stedet for lys kontrol boks kymco super 8 4T', false, true).'
'.visbilled('1', 'billed3309.jpg', '2 relæ i stedet for lys kontrol boks kymco super 8 4T', false, true).'
'.visbilled('1', 'billed3312.jpg', '2 relæ i stedet for lys kontrol boks kymco super 8 4T', false, true).'
'.visbilled('1', 'billed3313.jpg', '2 relæ i stedet for lys kontrol boks kymco super 8 4T', false, true).'
'.visbilled('1', 'billed3314.jpg', 'relæ tegning', false, true).'
').'
'

,'
ledningsnet
' => '
Reservedelsnummer på ledningsnet.
'.visbilled('1', 'billed1878.jpg', 'kymco 32100-lej2-e00 ledningsnet', false, true).'
Stik fra ledningsnettet til baglygten.
'.visbilled('1', 'billed1876.jpg', 'kymco super 8 4T baglygtestik', false, true).'
Stik fra baglygten med baglys og blinklys.
'.visbilled('1', 'billed1877.jpg', 'kymco super 8 4T baglygtestik', false, true).'
'

,'
gliderør
' => '
Jeg har målt mit gliderøret med forhøjning til :
Længde : 37,95 mm.
Yder diameter : 19,98 mm.
Yder diameter forhøjning : 21,39 mm.
Forhøjningen længde : 8,72 mm.
Forhøjningen højde : 0,7 mm.
Indre diameter : 14,03 mm.

Jeg har målt det til 38,12 x 19,99 x 13,97 mm.

Jeg har målt mit glatte gliderør til :
Længde : 38,12 mm.
Yder diameter : 19,99 mm.
Indre diameter : 13,97 mm.
Det glatte gliderør er nok ikke originalt Kymco.
'

,'
sikringer der smelter
' => '
Jeg har haft nogen problemer hvor den ene sikring på 7 ampere er blevet for varm sådan lige på grænsen til at smelte.
På et tidspunkt er sikringen blevet så varm at den har smeltet hul i sikringsholderen som er af plastik.

Her ses en af gangene hvor sikringen er holdt op med at virke.
I stedet for at smelte hurtigt så har sikringen været varm i lang tid og har virket også efter måske nogle måneders brug så er den blevet defekt.
'.visbilled('1', 'billed2675.jpg', 'defekt sikring fra kymco super 8 4T', false, true).'
Jeg tror at Kymco er kommet til at bytte om på en 7 og 10 amperes sikring eller også skulle de begge havde været 10 amperes sikringer.
Efter at have byttet 7 ampers sikringen ud med en 10 amperes sikring så virker det fint og der er ikke noget problem med at sikringen bliver for varm.
'

,'
spændingsregulator
' => '
Min spændingsregulator er blevet defekt 2 gange.
Så jeg har 2 gange måtte købe en ny.

Jeg ved ikke hvorfor den er blevet defekt.
Jeg opdager det ved at batteriet er afladt så meget at scooteren ikke kan køre fordi CDI boksen får strøm fra batteriet.
'

,'
bagerste støddæmpere
' => '
Personligt syns jeg at den bagerste affjedring er alt for hård.

Der er 2 støddæmpere og fjedre bag på Kymco Super 8 4T hvor der på de fleste 50 cm³ scootere kun er 1 så måske det er derfor den er så hård i affjedringen.

Hvis jeg køre lange ture så får jeg ondt i ryggen på grund af den hårde affjedring også er det ikke specielt rart at køre på huller i vejen og lignende.

Efter jeg har haft min Kymco Super 8 4T i cirka 3 år ser det ud til at min venstre støddæmper er blevet utæt.
'.visbilled('1', 'billed2781.jpg', 'støddæmper utæt kymco super 8 4T', false, true).'
Det ser ud til at den er utæt der hvor stempelstangen går ind i inderrøret.
Det ser i hvert fald vådt ud her.
'.visbilled('1', 'billed2782.jpg', 'støddæmper utæt kymco super 8 4T', false, true).'
Og så er væsken løbet ned ad støddæmperen og her kan man se at bolten ser våd ud og der er lidt vådt øverst på motorblokken.
'.visbilled('1', 'billed2784.jpg', 'støddæmper utæt kymco super 8 4T', false, true).'
Nu hvor den ene støddæmper blev utæt vil jeg prøve hvordan det er at køre uden støddæmpere.
Altså kun med fjedre.

Så jeg borede et hul nederst på hver støddæmper for at få olien/væsken ud.
'.visbilled('1', 'billed2783.jpg', 'støddæmper med boret hul kymco super 8 4T', false, true).'
Jeg prøvede at suge olien op med toilet papir men det flød ikke frit ud af sig selv.
'.visbilled('1', 'billed2785.jpg', 'støddæmper med boret hul kymco super 8 4T', false, true).'
Men skal presse på scooterens bagende en masse gange får at pumpe væsken ud.

Jeg brugte et 7 mm bor.
Det kan være hvis man bruger et større bor at olien så kan løbe frit ud.

Der var svært at få alt olien ud så jeg kørte bare på scooteren også satte nogen toilet papir på som kunne suge men prøvede også at køre uden toiletpapir også blev motorblokken og fælgen svinet til med olien så der findes sikkert en mere elegant løsning end min.

Efter olien er kommet ud virker stæddæmperne ikke så det er kun fjedrene som står for affjedringen.
Det føles mere blødt at køre.

Scooteren hopper mere og det er sjovere at køre sådan.
Det er mere rart for ryggen uden støddæmpere.

Jeg var ude og køre et sted med mudder med hjulspor som er blevet tørt for at teste affjedringen.
Umiddelbart kan man sige at nu hvor stæddæmperne ikke kan stoppe fjedrene i at hoppe så går der noget længere tid før scooteren falder til ro.
Så det giver nok dårligere kontrol over at styre scooteren hvis man køre et sted med meget ujævnt underlag fordi den hopper i længere tid.

Jeg fjernede olien fra støddæmperne den 14-05-2011 og det har jeg ikke fortrudt.

Hvis jeg skulle gøre det igen så ville jeg bruge et større bor også bore hullet helt nederst på støddæmperen så olien kan komme lettere ud.

Nu (21-04-2012) er der kommet det problem at støddæmper kan finde på at sætte sig fast hvis man køre på et bump i vejen og fjederen bliver presset lidt mere sammen end normalt.
Jeg vil tro det er fordi indensiden på støddæmperrøret er begyndt at ruste og når stemplet/ringene så kommer ned et sted hvor de ikke kommer så tit så kiler den sig formodentligt fast i rusten.
Så kan man holde foden i bagfælgen og hive op i enden af scooteren så hopper støddæmperen op igen.
'

,'
møtrik størrelser
' => '
Koblingsklokkemøtrik er 14 mm udvendigt.

Koblingsmøtrik er 39 mm udvendigt og 28 mm gevind indvendigt.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
