<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "lys - Elektrisk";
$overskrift = "lys - Elektrisk";
$metadescription = "lær om lyset på en scooter, pære, blinklys relæ";

$databasecenter = array(

'
pære
' => '
Her ses en scooter med en forlyspære som ikke er med halogen.
'.visbilled('1', 'billed2828.jpg', 'forlyspære', false, true).'
'.visbilled('1', 'billed3002.jpg', 'forlyspære', false, true).'
Her ses en scooter med en halogen forpære.
'.visbilled('1', 'billed2827.jpg', 'halogen pære i scooter', false, true).'
Her ses en 12 volt 35/35 watt halogen forpære med HS1 sokkel.
35/35 watt betyder at pæren har 2 glødetråde. Et til kortlys og et til langtlys.
H\'et står for halogen som er den gas der er inden i glasset.
'.visbilled('1', 'billed0003.jpg', 'halogen pære', false, true).'
'.visbilled('1', 'billed0063.jpg', 'halogen pære 12 volt 35/35 watt HS1', false, true).'

Her ses stikket som har 3 ben.
'.visbilled('1', 'billed0955.jpg', 'halogen pære 3 stik stel kortlys langtlys', false, true).'

Forlys pæren har 2 glødetråde.
Den øverste glødetråd lyser når når man bruger nærlyset.
Den nederste glødetråde lyser når man bruger fjernlyset.
Læg mærke til hvordan nærlysets glødetråd er krakeleret og fjernlys glødetråden ser helt ny ud. Det er fordi det mest er nærlyset som bliver brugt.
'.visbilled('1', 'billed0004.jpg', 'halogen pære', false, true).'
Her ses forskellen på kortlys og langtlys.
'.visbilled('1', 'animation0006.gif', 'kortlys langtlys', false, true).'
Kortlys.
'.visbilled('1', 'billed2321.jpg', 'kymco super 8 4T kort lys', false, true).'
Langtlys.
'.visbilled('1', 'billed2322.jpg', 'kymco super 8 4T langt lys', false, true).'
Når det langelys er valgt tænde langtlys indikatoren på indtrumentpanelet.
'.visbilled('1', 'billed2343.jpg', 'langtlys indikator', false, true).'

Kun en af glødetrådene lyser af gangen.
Før troede jeg at begge glødetråde lyste når man brugte det lange lys men det gør de ikke.

Nærlysets glødetråd har en skærm under sig som gør at lyset ikke kastes ned.
'.visbilled('1', 'billed3014.jpg', 'pære', false, true).'
Det lys som kastes op af pæren rammer parabolen som fungere som et spejl og sender lyset frem og ned.
Da der ikke kastes lys direkte ned er der ikke så meget lys som kastes op af parabolen.

Her er sat lidt strøm til begge glødetråde så man kan se trådene gløde.
Normalt lyser glødetrådene meget mere kraftigt end på billedet og kun 1 af glødetrådene lyser af gangen.
'.visbilled('1', 'billed0957.jpg', 'halogen pære glødetråde der lyser', false, true).'
Undgå at røre halogen pærens glas.
Finger aftryk på halogenpære kan få glasset til at springe når det bliver varmt.
Hvis man har rørt glasses med fingrene kan det rengøres med en ren klud og husholdnings sprit (alkohol) når glasset er helt kølet ned.

Her ses en 12 volt 10 watt blinklys pære hvor pærens glas er farvet orange.
'.visbilled('1', 'billed1816.jpg', 'blinklys pære 12 volt 10 watt', false, true).'
Når pæren er farvet behøver lygten ikke at være det.
'.visbilled('1', 'billed0056.jpg', 'blinklys gul pære slukket', false, true).'
'.visbilled('1', 'billed0059.jpg', 'blinklys gul pære tændt', false, true).'
Her ses fatningen.
'.visbilled('1', 'billed1815.jpg', 'blinklys fatning', false, true).'
Her ses bagskjoldene og baglygten indefra.
'.visbilled('1', 'billed1869.jpg', 'kymco super 8 4T baglygte bagskjolde', false, true).'
Her ses at baglygtens plastik er farvet rød og gul.
Så behøver pærenes glas ikke at være farvet.
'.visbilled('1', 'billed1874.jpg', 'kymco super 8 4T baglygte', false, true).'
'.visbilled('1', 'billed1888.jpg', 'kymco super 8 4T baglygte blinklys', false, true).'
Her kan man se hvordan den ene stift på pærens sokkel sidder i fatningen. 
'.visbilled('1', 'billed1870.jpg', 'blinklyspære 12V 10W', false, true).'
På siden af pærens sokkel sidder 2 stifter lidt forskudt som gør at pæren kun kan monteres på én måde.
'.visbilled('1', 'billed1817.jpg', 'blinklyspære sokkel', false, true).'
'.visbilled('1', 'billed1887.jpg', 'blinklyspære og holder', false, true).'
En fjeder under pæren sørger for at holde pæren fast i fatningen.
'.visbilled('1', 'billed1871.jpg', 'blinklyspæreholder', false, true).'
Denne blinklys pære er på 12 volt 10 watt.
'.visbilled('1', 'billed1872.jpg', 'r10w 12v 10w e1', false, true).'
På denne scooter er blinklyslygtens yderste plastik klart også er plastikken omkring pæren farvet orange.
'.visbilled('1', 'billed0852.jpg', 'blinklys gul glas pære', false, true).'
Her ses en baglys/bremselys pære.
Kun baglys glødetråden er tændt.
'.visbilled('1', 'billed0058.jpg', 'baglys bremselys pære baglys tændt', false, true).'
Her ses baglyset og nummerpladelyset i mørke.
Bremselyset er ikke tændt.
'.visbilled('1', 'billed2507.jpg', 'kymco super 8 4T baglys og nummerplade lys i mørke', false, true).'
Her ses baglygten indefra.
'.visbilled('1', 'billed1889.jpg', 'kymco super 8 4T baglygte', false, true).'
Baglys pæren kan tages ud inde ved at dreje på fatningen.
'.visbilled('1', 'billed1890.jpg', 'kymco super 8 4T baglygte', false, true).'
'.visbilled('1', 'billed1875.jpg', 'kymco super 8 4T baglygte', false, true).'
På baglys pærens sokkel sidder 2 stifer som er forskudt i højden sådan at pæren kun kan monteres på én måde i fatningen.
'.visbilled('1', 'billed1891.jpg', 'baglyspære og holder', false, true).'
'.visbilled('1', 'billed1879.jpg', 'baglyspæreholder', false, true).'

Her ses en 12 volt 21/5 watt pære.
Så vidt jeg ved kaldes soklen BAY15d.
'.visbilled('1', 'billed0161.jpg', 'baglys bremselys pære fatning tilslutning', false, true).'
'.visbilled('1', 'billed0163.jpg', 'baglys bremselys pære 12V 21/5W', false, true).'
Den tynde glødetråd er baglyset og lyser når tændingen er drejet til ON.
Den tykke glødetråd er bremselyset og lyser når der bremses.
Der sidder en kontakt ved begge bremsegreb som tænder den tykke glødetråd når man bremser.
Når der bremses lyser begge glødetråde.
Bremselysets glødetråd lyser en del kraftigere end baglysets glødetråd.
'.visbilled('1', 'billed0162.jpg', 'baglys bremselys pære glødetråde 5 watt 21 watt', false, true).'
Her ses en 12 volt 5 watt positionslys pære som sidder i bunden af forlygten.
'.visbilled('1', 'billed0060.jpg', 'positionslys kymco super 8 4T', false, true).'
Her ses forlygten inde fra med 2 positionslys i bunden og 2 halogenlys øverst.
'.visbilled('1', 'billed3886.jpg', 'forlygte indefra kymco super 8 4T', false, true).'
Positionslyset kan tændes selvom motoren ikke køre så andre kan se scooteren hvis man for eksempel holder et mørkt sted om natten og motoren ikke kan starte og man dermed ikke kan tænde for forlyset.
Positionslyset kan også tændes hvis forlys pæren er sprunget så man i det mindste har lidt forlys på indtil man får skiftet forlys pæren.

Her ses nummerpladelyset.
'.visbilled('1', 'billed0061.jpg', 'nummerpladelys kymco super 8 4T', false, true).'
'.visbilled('1', 'billed1881.jpg', 'nummerpladelys kymco super 8 4T', false, true).'
'.visbilled('1', 'billed1882.jpg', 'nummerpladelys kymco super 8 4T', false, true).'
'.visbilled('1', 'billed1880.jpg', 'pære holder og ledning', false, true).'
Holderen er lavet af silikone og er blødt.
'.visbilled('1', 'billed1883.jpg', 'pære og silikoneholder', false, true).'
'.visbilled('1', 'billed1884.jpg', 'pære', false, true).'
'.visbilled('1', 'billed1885.jpg', 'pære sokkel', false, true).'
'.visbilled('1', 'billed1886.jpg', 'pæreglas', false, true).'

Her ses en instrumentlys pære som baggrundsbelyser benzinviseren og speedometeret op.
'.visbilled('1', 'billed0399.jpg', 'instrumentlys pære', false, true).'

Her ses hvordan de forskellige pære typer kan se ud og hvad de bruges til.
'.visbilled('1', 'billed0048.jpg', 'pære typer', false, true).'

'.afsnit('sokkel koder', '
Der findes vist flere former for sokkelkoder men nogen af dem jeg har læst om angives som BAY15d, BA20d, BA15s og lignende. Disse koder skulle gerne kunne afkodes i denne tabel.
Hvis data i tabellen ikke passer eller du kan bidrage med mere information til tabellen så '.kontaktmig().' gerne.
'.
box(array('80', '170', '270')
   ,array(
       array('tegn'      ,'muligheder'                 ,'forklaring')
      ,array('BA'        ,'BA = BAjonet'               ,'bajonet betyder at pæren ved montering skal stikkes ind og drejes rundt.<br><br>Der er 2 stifter på siden af soklen som passer i fatningen.<br>'.visbilled('1', 'billed2674.jpg', 'sokkel stifter').''.visbilled('1', 'billed2672.jpg', 'sokkel bajonet').'')
      ,array('Y'         ,'Y = Indekseret<br>U = Orange farvet glas'             ,'indekseret betyder at stifterne på siden af soklen sidder i forskellig højde så pæren kun kan monteres på én måde og kun i en fatningen som er lavet til forskudte stifter.<br>'.visbilled('1', 'billed2671.jpg', 'sokkel indekseret').'<br>Bruges på pærer hvor der er mere end 1 glædetråd.')
      ,array('20'        ,'soklens diameter i mm'      ,''.visbilled('1', 'billed2670.jpg', 'sokkel diameter').'')
      ,array('s'         ,'s = single<br>d = double'  ,'single betyder at der kun er ét kontaktpunkt i bunden af soklen.<br>Bruges på pærer med 1 glædetråd.<br>'.visbilled('1', 'billed2667.jpg', 'sokkel s').'<br>Double betyder at der er 2 kontaktpunkter i bunden af soklen.<br>Bruges på pærer med 2 glødetråde.<br>'.visbilled('1', 'billed2668.jpg', 'sokkel d').''.visbilled('1', 'billed2669.jpg', 'sokkel d').'<br>')
      ,array(''          ,''                           ,'')
   )
)
.'
').'
'.afsnit('andre koder', '
'.afsnit('P21/5W', '
På en pære til baglygten kan stå P21/5W.
Jeg ved ikke hvad P står for.
21/5W betyder at pæren har 2 glødetråde. En på 21 watt og en på 5 watt.
Tråden på 21 watt er tyk og bruges som bremselyset.
Tåden på 5 watt er tynd og bruges som baglyset.
').'
'.afsnit('R10W', '
På en pære til blinklyset bagpå kan stå R10W.
Jeg ved ikke hvad R står for.
10W betyder nok 10 watt.
').'
'.afsnit('HS1', '
På en pære til forlyset (kort og langt) kan stå HS1.
'.visbilled('1', 'billed0065.jpg', 'pære type HS1', false, true).'
H står vist for Halogen.
Jeg ved ikke hvad S1 står for.
').'
'.afsnit('H8', '
Her ses en H8 pære.
'.visbilled('1', 'billed2738.jpg', 'pære type H8', false, true).'
'.visbilled('1', 'billed2739.jpg', 'pære type H8', false, true).'
Jeg ved ikke om H8 altid er på 35 watt og med 1 glødetråd men det kan den i hvert fald være.
').'
').'
'.afsnit('glødetråd', '
En glødetråd er den tråd i pæren som udsender lys når der er sat strøm til.
Glødetråden kan være lavet af wolfram (også kaldet tungsten).
Glødetråden er viklet som en spiral.

Her ses en glødetråd til forpærens nærlys som er knækket/brændt over så den ikke virker.
'.visbilled('1', 'billed0064.jpg', 'knækket glødetråd', false, true).'
').'
'.afsnit('gas', '
Inden i pærens glas finder en gas.
Gassen kan være krypton, aragon eller halogen som er såkaldte inaktive gasser der ikke reagere med glødetråden.

Hvis man ødelægger glasset så slipper gassen ud.
Og hvis man så sætter strøm til pæren så vil glødetråden hurtigt brænde over fordi glødetråden reagere med luften.
').'
'.afsnit('halogen', '
Halogen er en af grundstofferne fra den halogene gruppe i det periodiske system.
Halogen er altså ikke et bestemt stof men en gruppe af forskellige stoffer.

I en konventionel glødetråds pære med tungstens tråd fordamper noget af tråden med tiden og sætter sig på indersiden af glasset som et mørkt lag.
Med tiden vil pæren blive mere mørk.

På grund af denne fordampning kan pærens temperatur ikke være for høj fordi så sker fordampningen hurtigere.
Men ved at tilføje noget halogen gas inden i pæren og lavet glass i quartz som bedre tåler høj varme kan man lave pærer med højere temperatur.
Og højere temperatur giver mere lys.
Så en halogen pære kan give med lys end en tilsvarrende traditionel pære.
').'
'

,'
blinklys relæ
' => '
Her ses et blinklys relæ.
'.visbilled('1', 'billed0870.jpg', 'blinklys relæ', false, true).'

Blinklys relæet får blinklyset til at blinke fremfor at lyse konstant.
Blinklys relæet giver en klik klik klik lyd hver gang relæet slår til og fra.
Klik klik klik lyden minder om at man skal slukke for blinklyset hvis man skulle have glemt det.

Øverst på blinklys relæet sidder en metalplade med hul i som jeg vil tro er til for at forstærke lyden.
'.visbilled('1', 'billed0871.jpg', 'blinklys relæ', false, true).'
Blinklys relæet sidder oppe under instrumentpanelet.
'.visbilled('1', 'billed0068.jpg', 'blinklys relæ', false, true).'

'.afsnit('blinklys relæet er forbundet med','
Stel
Batteriets (+) terminal (når tændingslåsen er drejet til ON)
Blinklys kontakten
').'
På blinklys relæet står at den blinker med 85 blink i minuttet ved 12,8 volt.
10Wx2+3.4(3)W er pærenes watt.

Blinklys pærerne er på 10 watt hver.
Blinklys indikator pærene på instrumentpanalet er på 3,4 watt.

Blinkefrekvensen er afhængig af pærenes modstand så hvis en af pærende springer eller pærene udskiftes med en pære med anden modstand/watt så ændres blinklysets blinkehastighed.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
