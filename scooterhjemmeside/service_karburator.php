<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "karburator - Service";
$overskrift = "karburator - Service";
$metadescription = "service af karburator på scooter";

$databasecenter = array(

'
rens karburator
' => '
Til rensning af karburatoren kan bruges '.ahref('smorelse.php#karburatorrens', 'karburatorrens').' og trykluft ('.ahref('http://repvideo.lars-mc.dk/repvideo/popupvideo.php?sptlv=1190296519', 'Komplet karburatorrensning... (repvideo.lars-mc.dk)').').
Har man ikke andet kan man eventuelt bruge benzin men pas på brandfaren og brug kun benzin i meget små mængder.

Inden rengørig er det måske en god ide at fjerne gummi ringe fordi jeg mener at have læst at de måske ikke kan tåle rengøringsmidler og måske hæver (bliver større) hvis de kommer i kontakt med bestemte stoffer.

Skru bunden af karburatoren.
Der ligger gerne noget snavs i bunden som kan fjernes med karburatorrens.
'.visbilled('1', 'billed2663.jpg', 'slide karburator bund', false, true).'
Skru dyser og strålerør ud.
'.visbilled('1', 'billed1456.jpg', 'CV karburator fra kymco super 8 svømmer', false, true).'

Sprøjt/blæs igennem dyser og strålerør.

Kontroller at der er et fint rundt hul igennem dyserne.
'.visbilled('1', 'billed1457.jpg', 'tomgangsdyse hoveddyse fra kymco super 8 karburator', false, true).'
På siden af strålerøret og tomgangsdysen er nogen små huller der også skal sprøjtes/blæses igennem.
'.visbilled('1', 'billed1459.jpg', 'nåledyse hoveddyse strålerør tomgangsdyse', false, true).'

Fjern pinden som holder svømmeren.
På nogle karburatorer skal svømmerpinden bankes ud og på andre er der en skrue der skal fjernes.
'.visbilled('1', 'billed1790.jpg', 'karburator svømmer nåleventil', false, true).'
Fjern svømmeren og nåleventilen og kontroller at spidsen på nåleventilen er god stand.
'.visbilled('1', 'billed1789.jpg', 'karburator svømmer nåleventil', false, true).'
Sprøjt/blæs ned igennem hullet hvor nåleventilen sad.
Eventuel snavs kommer ud hvor ved studsen hvor benzinslangen sad.
Man skal ikke kun sprøjte/blæse ind gennem studsen hvor benzinslangen sad fordi så kan det være at eventuelt snavs bare sætter sig bedre fast.
Der var en bruger som skrev at han 4 gange havde forsøgt at rense karburatoren og 5. gang blæste han så ned i hullet hvor nåleventilen have siddet fremfor kun at blæse ind i studsen hvor benzinslangen sad. Det viste sig så at der sad noget som tilstoppede hullet men det kom så ud da han blæste igennem hullet indefra i stedet for udefra.
'.visbilled('1', 'billed2664.jpg', 'karburator nåleventil hul', false, true).'

Skild karburatoren ad så meget du kan og har lyst til og sprøjt/blæs igennem alle de mange huller/gange.
Se mere på '.ahref('karburator.php', 'karburator siden').'.

Der er enkelte steder ved accelerationspumpen og air cut off valven hvor der sidder ensrettere så her kan der altså kun sprøjtes/blæses i den ene retning.
Undgå at blæse med trykluft på gummimembranerne da de muligvis vil kunne tage skade.

'.visflash('0', 'http://www.youtube.com/watch?v=2ZaPvXkxQ0c', 'brug af karburatorrens til rengøring', true).'
I videoen anbefaler han at putte en smule silikone spray på nåleventilens gummi spids efter den er renset for at undgå at nåleventilen sætter sig fast.
'

,'
juster tomgang
' => '
Varm motoren op ved at kører en tur på mindst 5 minutter.
Sæt scooteren på centerstøtteben et sted så baghjulet ikke rør jorden.
Åben sædet og få adgang til karburatoren.
Start motoren og lad den køre i tomgang.

Drej på tomgangsskruen og find det punkt hvor baghjulet begynder at dreje rundt og drej skruen lidt tilbage så baghjulet stopper.

Her ses tomgangsskruen på en CV karburator.
'.visbilled('1', 'billed1046.jpg', 'CV karburator på 4 takt motor tomgangsskrue', false, true).'
Her ses tomgangsskruen på en "slide" karburator.
'.visbilled('1', 'billed0098.jpg', 'slide karburator tomgangsskrue', false, true).'
Her ses tomgangsskruen på en anden "slide" karburator.
'.visbilled('1', 'billed2542.jpg', 'peugeot buxy slide karburator tomgangsskrue', false, true).'
Baghjulet skal ikke dreje rundt i tomgang.
Hvis baghjulet drejer rundt i tomgang så vil koblingen blive slidt unødigt.

Drej og giv slip på gashåndtaget og bemærk hvordan motoren falder tilbage til tomgang.

Det kan godt være du skal fin justere et par gange indtil du finder den helt rigtige indstilling.

Justering skal foregå mens motoren er varm og den automatiske choker er i "fuld funktion".
Den automatiske choker lukker i løbet af 5 minutter efter den kolde motoren er blevet startet så kør en tur på 5 minutter inden du begynder at justere tomgangen.

Efter justeringen af tomgangen og motoren igen er blevet kold så er det normalt at baghjulet vil høre lidt rundt de første få minutter indtil den automatiske choker begynder at lukke.
Det kan være lidt irriterende at baghjulet drejer rundt når man lige har startet scooteren men så må man fin justere sig frem til en løsning der passer.

'.afsnit('fordele og ulemper', '
'.afsnit('langsom tomgang', '
Motoren kan finde på at gå istå når den køre i tomgang.

Baghjulet drejer ikke rundt i tomgang.

Det kan betyde at motoren går istå når man holder for rødt i et lyskryds.
Tomgangen kan holdes oppe ved at dreje lidt på gashåndtaget.
').'
'.afsnit('hurtig tomgang', '
Motoren holder sig selv kørende i tomgang uden at gå istå.

Baghjulet kan finde på at dreje rundt når motoren køre i tomgang.

Det kan betyde at man skal holde på bremsen når man holder i et lyskryds da scooteren ellers vil køre frem.
Slider koblingen/kileremmen unødigt.
').'
').'
'

,'
juster blandingsskrue
' => '
Jeg syntes ikke rigtig jeg har haft held med at justere blandingsskruen.
Hvis du har noget info om justering af blandingsskruen kan du '.kontaktemig().'.

Her er hvad jeg tror jeg ved indtil videre...

Varm motoren op ved at køre en tur på mindst 5 minutter.

Skru blandingsskruen stille og roligt ind indtil den når ibund (ikke hårdt).
Skriv ned hvor mange omgange du drejede blandingsskruen så du eventuelt kan stille den tilbage senere.
Skru blandingsskruen ud som der står i servicemanualen til scooteren (for eksempel 2 omgange).
Dette kalder vi for grund indstillingen.

Sæt scooteren på centerstøtteben og lad motoren køre i tomgang.

Skru tomgangsskruen lidt ind så motoren kommer til at køre med lidt højere omdrejninger end normalt.
Lav eventuelt et tusch mærke på gevindet så du lettere kan skrue skruen tilbage til det samme punkt senere.

Skru langsomt ind og ud på blandingsskruen indtil motoren køre med højeste o/min.
'.visbilled('1', 'billed1245.jpg', 'blandingsskrue på CV karburator', false, true).'
Drej let 2-3 gange på gashåndtaget.
Skru tomgangsskruen tilbage til normal tomgang.
Check at motoren køre jævnt ved at små justere på blandingsskruen.

Skruer du i urets retning giver det mindre luft/benzin.
Skruer du modsat urets retning giver det mere luft/benzin.

Når der i manualen står at blandingsskruen skal være 1,5 til 2,5 åben så betyder det at du først skal skrue den ibund også skal den skrues 1,5 til 2,5 omgange tilbage.

Når blandingsskruen skrues ibund så drej stille og roligt indtil du kan mærke den stopper.
Blandingsskruen har et meget fint gevind som formodentligt slet kan ødelægges hvis man drejer for hårdt.

Jeg har checket blandingsskruen på en kymco super 8 og den var 3/4 omgang skruet ud og på en kymco agility var den 5/8 omgang skruet ud.
Det passer ikke med de 2 ± ½ omgange som står i servicemanualerne. Jeg ved ikke hvorfor det ikke stemmer.

'.afsnit('Honda Zoomer med karburator data','
I Honda Zoomer servicemanual (med karburator) står at man først skal fjerne vakuumslangen til PAIR control valve (sekundært luftindsugnings system) og lave et vakuum i den og tilstoppe hullet til indsugningsstudsen.
Det gør at der ikke suges ekstra luft ind gennem det sekundære luftindsugnings system.
Der står at normal tomgangshastighed er 2000 o/min og at man motoren skal justeres til at køre 1600 o/min før justeringen af blandingsskruen.
'.visbilled('1', 'billed1246.jpg', 'justering af blandingsskrue på honda zoomer med karburator', false, true).'
').'
'

,'
skrue med fladt hovede
' => '
På nogen karburatorere kan blandingsskruen/luftskruen have et fladt hovede så man ikke kan bruge en skruetrækker som her.
'.visbilled('1', 'billed2656.jpg', 'karburator', false, true).'
Der kan vist nok også sidde noget plastik/lim af en slags som man skal fjerne for at komme ind til skruen.

Hvis man kigger godt efter kan man se at skruens hovede ikke er helt rundt.
'.visbilled('1', 'billed2657.jpg', 'karburator', false, true).'
Skruens hoved har denne form.
'.visbilled('1', 'billed2658.jpg', 'luftskrue hoved form', false, true).'
Måske kunne man lave sit eget værktøj til skruen ved at folde et stykke fladt metal rundt om et skruegevind i samme diameter som skruens hoved også bukke kanten lidt ind.

Hvis det er luftskruen eller blandingsskruen der har sådan et fladt hoved så er det jo ikke fordi det skal særlig meget kraft til at dreje på skruen så umiddelbart tror jeg godt man kan.
'

,'
juster svømmer højde
' => '
På nogle karburatorer skal svømmeren være parallel med kanten af karburatoren.
'.visbilled('1', 'billed0627.jpg', 'karburator svømmer piaggio fly 150 ccm', false, true).'

På andre karburatorer skal man måle afstanden fra bunden af svømmeren til kanten af karburatoren.

Her måles svømmer højden til 9 mm.
'.visbilled('1', 'billed0621.jpg', 'karburator svømmerhøjde vinkel', false, true).'

Vægten af selve svømmeren kan presse ned på nåleventilen så højden måles forkert hvis karburatoren vender på hovedet.
Derfor kan man holde karburatoren på siden sådan at nåleventilen lige lukker for hullet men uden at vægten fra svømmeren presser yderligere på nåleventilen.

Hvis svømmerhøjden ikke passer med det der bliver oplyst i manualen så kan man bukke den lille metalplade som trykker på nåleventilen lidt indtil det passer.
'.visbilled('1', 'billed0620.jpg', 'karburator svømmer metalplade', false, true).'

Her ses et værktøj som er beregnet til at måle svømmer højden.
'.visbilled('1', 'billed0617.jpg', 'karburator måling af svømmer højde', false, true).'

Her ses et eksempel fra en Sachs Madass karburator som skal have en svømmerhøjde på 18 mm.
'.visbilled('1', 'billed0081.jpg', 'karburator svømmer sachs madass', false, true).'

'.visflash('0', 'http://www.youtube.com/watch?v=VnyrRtaA2Wo', 'forskellige måder at kontrollere svømme højden på', true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
