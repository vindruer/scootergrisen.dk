<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "værktøj til scootere og knallerter";
$overskrift = "værktøj til scootere og knallerter";
$metadescription = "forklaring af forskelligt værktøj der bruges på scootere og knallerter";

$databasecenter = array(

'
skydelære
' => '
Bruges til at måle for eksempel bremsebelægningens tykkelse, kobling klokkens indre diameter eller dybde måling.
'.visbilled('1', 'billed0114.jpg', 'værktøj skydelære', false, true).'
Her ses en skydelære med digitalt display.
'.visbilled('1', 'billed1924.jpg', 'værktøj skydelære', false, true).'
De store spidser nederst bruges til at måle udvendig diameter.
'.visbilled('1', 'billed2437.jpg', 'værktøj skydelære', false, true).'
De små spidser øverst bruges til at måle indvendig diameter.

Enden bruges til at måle dybde.
'.visbilled('1', 'billed2438.jpg', 'værktøj skydelære', false, true).'
'.afsnit('kan købes hos...','
'.ahref('http://www.harald-nyborg.dk/listproduct.asp?webgrp=20240', 'Harald Nyborg').'
').'
'

,'
mikrometerskrue
' => '
Bruges til meget præcis måling af for eksempel bremseskive, stempel og stempelpind hvor en skydelære ikke er præcis nok.
'.visbilled('1', 'billed0113.jpg', 'værktøj mikrometerskrue', false, true).'
Her ses en mikrometerskrue hvor man selv skal aflæse på skalaerne for at udregne tykkelsen.
'.visbilled('1', 'billed0017.jpg', 'værktøj mikrometerskrue', false, true).'
Her ses en mikrometerskrue med digitalt display hvor man hurtigt kan se tykkelsen.
'.visbilled('1', 'billed1923.jpg', 'værktøj mikrometerskrue', false, true).'
På mikrometerskruen står hvor tykke ting den kan måle.
For eksempel 0-25 mm.

Umiddelbart kan man kun måle udvendig diameter men man kan bruge mikrometerskruen sammen med et lille teleskop værktøj for at måle den indre diameter af for eksempel ventilstyr eller plejlstang.
'.afsnit('video','
'.ahref('http://repvideo.lars-mc.dk/specialtools/popupvideo.php?sptlv=1191605574', 'Information omkring mikrometerskrue (repvideo.lars-mc.dk)').'
').'
'

,'
universalholder
' => '
Bruges blandt andet til at holde svinghjulet mens møtrikken spændes/løsnes.
'.visbilled('1', 'billed0108.jpg', 'værktøj universalholder', false, true).'
'.visbilled('1', 'billed2689.jpg', 'værktøj universalholder på svinghjul', false, true).'
'.afsnit('kan købes hos...','
'.ahref('http://www.thansen.dk/product.asp?c=5901901641&n=1387906156&pn=1387907717', 'T Hansen').'
').'
'.visbilled('1', 'billed3391.jpg', 'hjemmelavet svinghjulsholder', false, true).'
'

,'
koblingsværktøj
' => '
Bruges til at holde koblingsklokken.
'.visbilled('1', 'billed3260.jpg', 'buzzetti koblingsværktøj holder koblingsklokke', false, true).'
Og til at løsne/stramme den store flade møtrik som holder koblingen.
'.visbilled('1', 'billed3259.jpg', 'buzzetti koblingsværktøj stor flad koblingsmøtrik', false, true).'
'.afsnit('kan købes hos...','
'.ahref('http://speedline.dk/da/scooter/soeg/koblingstool/', 'speedline.dk').'
').'
'

,'
remskiveholder
' => '
Bruges til at holde den forreste yderste remskiver så man kan løsne/stramme møtrikken.
'.visbilled('1', 'billed3270.jpg', 'buzzetti remskiveholder', false, true).'
'.visbilled('1', 'billed3262.jpg', 'buzzetti remskiveholder', false, true).'
'.visbilled('1', 'billed3261.jpg', 'buzzetti remskiveholder', false, true).'
Fås i mange varianter som passer til forskellige scooter modeller.

Her ses en remskiveholder som går ind og holder gribehjulet i midten.
'.visbilled('1', 'billed3263.jpg', 'buzzetti remskiveholder', false, true).'
'.afsnit('kan købes hos...','
'.ahref('http://speedline.dk/da/scooter/soeg/variatortool/', 'speedline.dk').'
'.ahref('http://www.thansen.dk/products.asp?c=8633159468&n=1387906156', 'thansen.dk').'
').'
'

,'
svinghjulsaftrækker
' => '
Bruges til at trække svinghjulet af krumtapakslen.
'.visbilled('1', 'billed1017.jpg', 'værktøj svinghjulsaftrækker', false, true).'
'.visbilled('1', 'billed2690.jpg', 'værktøj svinghjulsaftrækker på svinghjul', false, true).'
Her ses en svinghjulsaftrækker med 2 gevindstørrelser.
'.visbilled('1', 'billed3377.jpg', 'værktøj svinghjulsaftrækker M24x1 M26x1', false, true).'
'.visbilled('1', 'billed3378.jpg', 'værktøj svinghjulsaftrækker M24x1 M26x1 monteret i svinghjul', false, true).'
Her ses andre type svinghjulsaftrækkere.
'.visbilled('1', 'billed3398.jpg', 'værktøj svinghjulsaftrækker', false, true).'
'.visbilled('1', 'billed0726.jpg', 'værktøj svinghjulsaftrækker', false, true).'
'

,'
tapnøgle
' => '
Bruges til at justere forspændingen på baghjulets støddæmper.
'.visbilled('1', 'billed0110.jpg', 'værktøj tapnøgle til støddæmper', false, true).'
'

,'
søgerblade
' => '
Bruges blandt andet til at måle ventil spillerum, tændrørs elektrode afstand og platin afstand.
'.visbilled('1', 'billed0112.jpg', 'værktøj søgerblade', false, true).'
Fås enkelt styks eller i sæt med forskellige størrelser.

'.afsnit('video','
'.ahref('http://repvideo.lars-mc.dk/specialtools/popupvideo.php?sptlv=1191606011', 'Information omkring søgerblade (repvideo.lars-mc.dk)').'
').'
'

,'
ventil justering
' => '
Bruges sammen med søgerblad til at juster ventilernes spillerum.

Den her bruges til justerskruen.
'.visbilled('1', 'billed0725.jpg', 'værktøj ventil justering', false, true).'
'.visbilled('1', 'billed3399.jpg', 'værktøj ventil justering', false, true).'
Her ses et sæt bestående af 2 dele til både justerskrue og låsemøtrik.
'.visbilled('1', 'billed0111.jpg', 'værktøj ventil justering', false, true).'
'.visbilled('1', 'billed2800.jpg', 'værktøj ventil justering', false, true).'
De får åbenbart i forskellige størrelser som her i 8, 9 og 10 mm.
'.visbilled('1', 'billed3466.jpg', 'værktøj ventil justering 3 sæt', false, true).'
'.afsnit('kan købes hos...','
'.ahref('http://www.daxshoppen.dk/ventil_justerings_n%C3%B8gle-p-416.html', 'Daxshoppen').'
'.ahref('http://www.texas.dk/reservedele/produkter/?partno=08-073', 'Texas').'
'.ahref('http://www.thansen.dk/product.asp?c=8726845915&n=1387906156&pn=-1122652401', 'T Hansen').'
'.ahref('http://www.thansen.dk/product.asp?c=8726845915&n=-1514325734&pn=-899859198', 'T Hansen').'
').'
'

,'
momentnøgle
' => '
Bruges til at spænde skruer og møtrikker tilpas hårdt.

Moment måles for eksempel i Nm, kgf-m, lbf-ft og lbf-in.

På denne momentnøglen kan man dreje på håndtaget for at indstille til det ønskede moment.
'.visbilled('1', 'billed0019.jpg', 'værktøj momentnøgle', false, true).'
Hovedet på momentnøglen giver et knæk og siger klik når det valgte moment er opnået.
'.visbilled('1', 'billed1429.jpg', 'momentnøgle på remskive møtrik i variator', false, true).'

For eksempel kan man få en momentnøgle der kan indstilles til 42-210 Nm.
Det er ikke alle momentnøgler som kan indstilles lavt nok som det man skal bruge nogle steder på en scooter.
'

,'
trykluft kompressor
' => '
De fleste kompressorer jeg har set består af en elektrisk motor og en tryktank.
Den elektriske motor fylder tanken med luft indtil den har opnået et bestemt tryk.
De er rimelig store, vejer en del og larmer så der er vist ikke så mange der har sådan en derhjemme.

Men jeg har set man kan få en kompakt kompressor på størrelse med en rygtaske.

'.afsnit('Kan for eksempel bruges til','
Montering af dæk.
Rense papir luftfilter.
Blæsetørre svamp luftfilter efter rengøring.
Puste snavs væk fra motor inden man skiller den ad.
Rensning af dyser og passager i karburator.
').'
'

,'
gummibøsningsaftrækker/montering
' => '
Bruges til at skifte gummibøsninger der hvor motorblokken er monteret på stellet og ved baghjulets støddæmper.
'.visbilled('1', 'billed0680.jpg', 'gummibøsninger værktøj afmontering montering', false, true).'
'

,'
lejeaftrækker
' => '
Bruges til at trække kuglelejer af.
'.visbilled('1', 'billed0681.jpg', 'lejeaftrækker', false, true).'
Det vist meget normalt at kuglelejerne tager skade når man tager dem af fordi man hiver i den ring som ikke sidder fast også går det altså ud over kuglerne.
Kuglelejer kan også fjernes og monteres ved at køle eller varme kuglelejet eller den del som kuglelejet sidder på.

Hvis kuglelejet på krumtapakslen skal fjernes så kan man varme på kuglelejets inderste ring som så vil udvidde sig en smule så det er lettere at få af.

'.visflash('0', 'http://www.youtube.com/watch?v=q38HUzr043c', 'brug af ydre lejeaftrækker', true).'

Her ses en anden aftrækker.
'.visbilled('1', 'billed1516.jpg', 'lejeaftrækker', false, true).'
'

,'
lift
' => '
Bruges til at løfte scooteren op så den er lettere at arbejde med og man ikke får ondt i ryg og knæ.
'.visbilled('1', 'billed1413.jpg', 'scooterlift', false, true).'
Scooteren trilles op på liften på en rampe, sættes på centerstøtteben og forhjulet spændes fast.
Så træder man på en hydraulisk pumpe så scooteren kommer op i luften.
'.visbilled('1', 'billed0962.jpg', 'scooterlift', false, true).'
Man kan også få elektriske lifte hvor man trykket på en knap for at løfte scooteren op.
Der kan være en låsefunktion sådan at scooteren ikke kan sænkes ved en fejl eller hvis strømmen afbrydes.
'

,'
kompressionstester
' => '
Bruges til at måle om trykket i forbrændingskammeret er korrekt.
'.visbilled('1', 'billed1446.jpg', 'kompressionstester', false, true).'
Kompressionstesteren fås både med gevind som skrues i tændrørs hullet og med gummistuds som presses mod tændrørshullet.

Der får forskellige adaptorer med forskellig gevind størrelse.

'.visbilled('1', 'billed1447.jpg', 'kompressionstester', false, true).'
Kompressionstesteren holder målingen indtil man trykker på en knap for at nulstille den.
'

,'
honer
' => '
Bruges til at gøre cylindervægen fin.

Honeren kan monteres på en boremaskine også køres honeren op og ned i cylinderen nogle gange i et vist tempo så slibningen får en bestemt vinkel i cylinderen der hjælper olien med at fordele sig så vidt jeg ved.
'.visbilled('1', 'billed1466.jpg', 'cylinder honer', false, true).'
Her kan man se at cylinderen er blevet slebet i en bestemt vinkel da den blev lavet.
Det er så meningen at man skal holde den samme vinkel når man honer cylinderen så vidt jeg ved.
'.visbilled('1', 'billed2711.jpg', 'cylinder maskine slibningsvinkel', false, true).'
'.visbilled('1', 'billed3134.jpg', 'cylinder maskine slibningsvinkel', false, true).'
'.visflash('0', 'http://www.youtube.com/watch?v=HQfh6AZxL08', 'honing af cylinder på maskine', true).'
'.visflash('0', 'http://www.youtube.com/watch?v=u9mZClv5Nfo', 'honing af cylinder med flex-hone børste på boremaskine', true).'
'

,'
skruestik
' => '
Bruges til at spænde ting fast man skal arbejde på.
'.visbilled('1', 'billed1806.jpg', 'skruestik', false, true).'
Skruestikken fast monteres på en bordplade.
Man kan få aluminiumskæber til at sætte i skruestikken sådan at man ikke så let skader det man skruer fast.
'

,'
tændrørs målelære
' => '
Bruges til at kontroller og juster tændrørets elektrode afstand.
'.visbilled('1', 'billed2166.jpg', 'tændrørs målelære', false, true).'
'

,'
tændrørsnøgle
' => '
Bruges til at monter og afmonter tændrøret.

Inden i tændrørsnøglen kan sidde en gummi dut som holder fast i enden på tændrøret så det ikke ryger ud.

Denne tændrørsnøgle passer til 17 mm i den ene ende og P i den anden ende er lidt mindre.
'.visbilled('1', 'billed1899.jpg', 'tændrørsnøgle', false, true).'
På siden af denne tændrørsnøgle er 4 huller så man med for eksempel en skruetrække kan dreje tændrørsnøglen.
'.visbilled('1', 'billed1900.jpg', 'montering af tændrør med tændrørsnøgle og skruetrækker', false, true).'
'

,'
starterkoblings værktøj
' => '
Bruges til at fjerne/montere møtrikken som holder starterkoblingen på de scootere hvor starterkoblingen er placeret i højre side af motoren.
'.visbilled('1', 'billed2514.jpg', 'værktøj til starterkoblings møtrik', false, true).'
Det er vist noget med at møtrikken har gevind den anden vej af de fleste andre gevind så man skal måske dreje i urets retning for at løsne den.
'

,'
ventilsædesliber
' => '
Dette værktøj hedder muligvis ventilsædefræser. Er ikke sikker på det rette danske navn.

Bruges til at slibe/skære ventilsæderne i topstykket hvor ventilerne skal holde tæt.

Sliberne fås i forskellige vinkler.
'.visbilled('1', 'billed2842.jpg', 'slibere i forskellig vinkel', false, true).'
En sliber sættes på sliberholder.
'.visbilled('1', 'billed2843.jpg', 'sliber holder', false, true).'
Den lange smalle spids på sliberholderen passer i ventilstyret i topstykket.
'.visbilled('1', 'billed2964.jpg', 'ventilsliber bruges i topstykke', false, true).'
Hvis ventilsædet ikke rammer ventilen i den rigtige højde kan man bruge de forskellige vinklede slibere til at tilpasse højden.

Her ses nogle andre slibere.
'.visbilled('1', 'billed2847.jpg', 'ventilslibere tegning forskellige vinkler', false, true).'
'.visbilled('1', 'billed2848.jpg', 'ventilsliber holder cutter holder', false, true).'

'

,'
multimeter
' => '
Bruges til at måle spænding (volt), strømstyrke (ampere) og modstand (ohm).
'.visbilled('1', 'billed0741.jpg', 'multimeter velleman DVM850BL', false, true).'
Nogle multimetre har en funktion så der kommer en lyd hvis der er forbindelse i den ledning man måler på. På den måde kan man hurtigt teste om der er forbindelse i en ledning uden man behøver kigge på displayet.

På den viste model skal man sætte den røde ledning i et andet hul hvis man vil måle over 200 mA. I det andet hul kan man måle op til 10 ampere.
'

,'
omdrejningstæller
' => '
Bruges til at måle hvor hurtigt motoren kører.
'.visbilled('1', 'billed2483.jpg', 'omdrejningstæller', false, true).'
'

,'
stroboskoplampe
' => '
Bruges til at kontrollere tændingstimingen.
Altså tidspunktet hvor tændrøret giver gnist i forhold til mærkerne på svinghjulet.
'.visbilled('1', 'billed0021.jpg', 'værktøj stroboskoplampe', false, true).'
De 2 små kabler tilsluttes et batteri (helst ikke scooterens eget batteri).
Den store "klo" sættes omkring tændrørskablet.

Lampen peges på mærkerne på svinghjulet og hakket i motorblokken når motoren køre.
Lampen giver et lysglimt hver gang tændrøret giver gnist.
'

,'
CDI tester
' => '
I diverse servicemanualer er der ofte en tegning af en CDI tester.
Jeg har godt nok aldrig set en eller hørt om nogen der har prøvet at bruge sådan en.

Her ses en CDI tester.
'.visbilled('1', 'billed1567.jpg', 'CDI tester', false, true).'
'.visbilled('1', 'billed1439.jpg', 'CDI tester', false, true).'
Kontakten til venstre har åbenbart 5 indstillinger hvor man kan teste CDI boksen på forskellige måder.
'.visbilled('1', 'billed1569.jpg', 'CDI tester', false, true).'

'
. box(array('150', '150', '150')
   ,array(
       array('Kontakt',    'God CDI',     'Fejl på CDI')
      ,array('1. OFF',     'Ingen gnist', '----')
      ,array('2. P',       '|',           '----')
      ,array('3. EXT',     '|',           'God gnist')
      ,array('4. ON1',     'God gnist',   'Ingen gnist')
      ,array('5. ON2',     'God gnist',   'Ingen gnist')
   )
)

.'
Udover at teste CDI boksen kan den også teste tændspolen, tændrørskablet og tændrørshætten.
'.visbilled('1', 'billed1568.jpg', 'CDI tester', false, true).'
'

,'
ventilfjederkompressor
' => '
Bruges til at holde ventilfjederne sammenpresset så man kan tage låsene op ved enden af ventilen eller sætte dem i.
'.visbilled('1', 'billed3346.jpg', 'ventilfjederkompressor værktøj', false, true).'
Ventilfjederne skal kun presse så lidt sammen som nødvendigt for at tage låsene af og på.
Som alternativ til sådan et fint værktøj kan man bruge en ringgaffelnøgle i passende størrelse og presse ned med den og bruge en magnet til at få låsene op.
'

,'
stempelstopper
' => '
Bruges til at skrue i tændrørshullet så stemplet stopper og krumtappen ikke kan dreje hele vejen rundt.
Når krumtappen ikke kan dreje kan man løsne og stramme møtrikkerne på krumtapakslen ved remskiven og svinghjulet og også boltene der holder blæserhjulet fast på svinghjulet.
'.visbilled('1', 'billed3736.jpg', 'stempelstopper værktøj 2 takt 14 mm', false, true).'
'.visbilled('1', 'billed3737.jpg', 'stempelstopper værktøj 4 takt 10 mm', false, true).'
'

,'
ventilslibepind
' => '
Bruges til suge sig fast på ventilhovedet så man kan dreje ventilen ved slibning.

Bruges sammen med '.ahref('smorelse.php#ventilslibepasta', 'ventilslibepasta').' til at få god forsejling mellem ventil og ventilsæde i topstykke så trykker ikke slipper ud.

Her ses to ventilslibepinde.
'.visbilled('1', 'billed3757.jpg', 'ventilslibepind', false, true).'
Sugekopper kan have forskellig størrelse.
'.visbilled('1', 'billed3756.jpg', 'ventilslibepind', false, true).'
Det viste sig desværre at de ventilslibepinde jeg har købt ikke passer til ventilerne i en 50 cm³.
Den mindste sugekop på 19 mm i diameter kan godt nok lige suge sig fast på den store indsugningsventil men når man presser ned går gummikanten på topstykket.
Buzzetti 5090 fås med størrelse 16 mm det kan være den passer bedre.
'.visbilled('1', 'billed3755.jpg', 'ventilslibepind info', false, true).'
'.afsnit('som der står på indpakningen','
DK
Til slibning af ventilsæder.
Bruges sammen med ventilslibepasta.
Med træskaft og sugekopper af gummi.
Længde: 245 og 255 mm.
Sugekop: Ø19/22 mm og Ø22/32 mm.
').'
'.afsnit('kan købes hos...','
'.ahref('http://www.biltema.dk/da/Bil---MC/Varktoj-og-varkstedsudstyr/Motor/Ventilsliber-191393/', 'Biltema').'
').'
'

,'
ventilværktøj
' => '
Kaldes vist også ventilnålværktøj og ventilkegleværktøj.

Bruges til at afmontere og montere ventilen i en schrader ventil.

Så kan man hurtigt få luft ind og ud af dækket når man for eksempel skal have et slangeløst dæk til at hopper på plads på fælgen eller når man vil have alt luften ud af dækket uden at man skal trykke ventilen ind.
'.visbilled('1', 'billed3759.jpg', 'schrader ventilværktøj', false, true).'
'.visbilled('1', 'billed3761.jpg', 'schrader ventilværktøj', false, true).'

'.afsnit('kan købes hos...','
'.ahref('http://www.biltema.dk/da/Bil---MC/Varktoj-og-varkstedsudstyr/Hjul-og-Dak/Ventilnalvarktoj-191333/', 'Biltema').'
').'
'

,'
forgaffelværktøj
' => '
Bruges til at at holde dæmperen ind i forgaffelrøret så bolten i bunden af forgaffelrøret kan skrues ud.
'.visbilled('1', 'billed3765.jpg', 'buzzetti 9100 eller 9102', false, true).'
Buzzetti laver dette værktøj i 2 størrelser.
Buzzetti 9100 som er til 5-13 mm i spidsen og 340 mm lang.
Buzzetti 9102 som er til 14-17 mm i spidsen og 600 mm lang.
'.visbilled('1', 'billed3764.jpg', 'buzzetti 9100 eller 9102', false, true).'
'.visbilled('1', 'billed3763.jpg', 'buzzetti 9100 eller 9102', false, true).'

'.afsnit('kan købes hos...','
'.ahref('http://www.thansen.dk/product.asp?c=8657343927&n=1387906156&pn=1387907619', 'thansen.dk').'
').'
'

,'
mere værktøj
' => '
'
.visfil('1', 'scooterhjemmeside/download/specialverktoj.pdf', 'special værktøj')
.visfil('1', 'scooterhjemmeside/download/sym_tools_manual.pdf', 'SYM tools manual')
.visfil('1', 'scooterhjemmeside/download/tgb_special_tools_catalogue.pdf', 'TGB special værktøj')
.visfil('1', 'scooterhjemmeside/download/buzzetti_verktoj_katalog.pdf', 'Buzzetti værktøj katalog')
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
