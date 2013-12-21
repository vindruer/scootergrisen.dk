<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "bremser - Service";
$overskrift = "bremser - Service";
$metadescription = "kontrol af bremsevæske niveau, udluftning, af hydrauliske bremser, udskiftning af bremsevæske, kontrol af bremseklodser, bremseskive, rensning af caliper og belægning, justering af tromlebremse";

$databasecenter = array(

'
kontroller bremsevæske niveau
' => '
Sæt scooteren på centerstøtteben et vandret sted og dreje styret så forhjulet peger ligeud.

Gennem et rundt glas i bremsevæskebeholderen kan man se bremsevæsken.

Bremsevæske niveauet skal mindst være op til LOWER/MIN mærket.
'.visbilled('1', 'billed0663.jpg', 'bremsevæskebeholder baotian', false, true).'

Minimums niveauet er ofte midt i glasset.

Her ses bremsevæskebeholderen på Kymco Super 8 4T som ikke har noget minimums mærke.
'.visbilled('1', 'billed0130.jpg', 'bremsevæskebeholder kymco super 8', false, true).'

Hvis der ikke er noget minimumsmærke så tror jeg godt man kan gå ud fra at minimumsnivauet er midt i glasset.

'.visbilled('1', 'billed0706.jpg', 'bremsevæske niveau', false, true).'

Her ses en bremsevæskebeholderen som både har UPPER og LOWER mærker.
'.visbilled('1', 'billed0661.jpg', 'bremsevæskebeholder sachs madass', false, true).'

Hvis bremsevæske niveauet er meget lavt er der chance for at luft kan komme ind i bremsesystemet hvilket går udover bremsefunktionen.
Hvis bremsevæske niveauet er lavt kan det være fordi bremseklodserne er slidte og trænger til at blive skiftet ud.
Når der monteres nye bremseklodser vil noget af bremsevæsken i bremsecaliperen blive presset tilbage til bremsevæskebeholderen ved styret fordi den nye bremsebelægning er tykkere og stemplet i bremsecaliperen skal derfor ikke bevæger sig så langt ud som med slidte bremseklodser.

Hvis bremsevæske niveauet er for højt kan det betyde at der ikke er plads til mere bremsevæske i bremsevæskebeholderen og man derfor skal har tømt lidt af bremsevæsken ud før stemplet i bremsecaliperen kan presses tilbage for at give plads til de nye bremsekloder med tykkere belægning.

Desuden skal der også være plads til membranen under låget.

Hvis der er for meget bremsevæske i og man skruet låget fast kan det betyder at der kommer tryk i bremsesystemet selvom man ikke presset på bremsegrebet.
Trykket kan gøre at bremseklodserne ikke slipper bremseskiven helt også varmes de op selvom man ikke bremser.
'

,'
udluftning af hydrauliske bremser
' => '
'.afsnit('hvornår skal bremsen udluftes','
Hvis bremsegrebet føles svampet når der bremses kan det skyldes luft i bremsesystemet.
Hvis bremsegrebet kan presses helt eller næsten helt i bund.
').'
'.afsnit('sådan gør du','
Brug gummihandsker.
Se på bremsevæskebeholderens låg hvilken type bremsevæske der skal bruges eller kig i scooterens manual.

På dette låg står at man skal bruge DOT4 bremsevæske.
'.visbilled('1', 'billed2563.jpg', 'bremsevæske beholder låg', false, true).'
På dette låg står at man skal bruge DOT3 eller DOT4 bremsevæske.
'.visbilled('1', 'billed2488.jpg', 'bremsevæske beholder låg', false, true).'
Sæt scooteren på centerstøtteben et vandret sted.
Drej styret så forhjulet peger ligeud.
Rengør bremsevæskebeholderens låg og omkring det.

Læg toiletpapir/køkkenrulle tæt omkring bremsevæskebeholderen for at fange eventuelt spild.
'.visbilled('1', 'billed2564.jpg', 'bremsevæske beholder låg med toiletpapir omkring', false, true).'
Skru låget af bremsevæskebeholderen.
'.visbilled('1', 'billed2565.jpg', 'bremsevæske beholder skruer', false, true).'
'.visbilled('1', 'billed2566.jpg', 'bremsevæske beholder skruer', false, true).'
Fjern metal låget.
'.visbilled('1', 'billed2569.jpg', 'bremsevæske beholder', false, true).'
Fjern plastik låget.
'.visbilled('1', 'billed2567.jpg', 'bremsevæske beholder', false, true).'
Fjern gummi membranen.
'.visbilled('1', 'billed2568.jpg', 'bremsevæske beholder', false, true).'
'.visbilled('1', 'billed0027.jpg', 'bremsevæske beholder', false, true).'
Pres langsomt nogle gange på bremsegrebet indtil der ikke kommer flere luftbobler op fra hullet i bunden.
Når du presser og giver slip på bremsegrebet så gør det langsomt for at undgå at bremsevæsken sprøjter op.

Hvis bremsevæskebeholderen er under halvt fyldt, så fyld bremsevæske i indtil den er over halvt fyldt.

Brug kun bremsevæske fra en nyligt åbnet bremsevæske dunk.
Har dunken været åbnet tidligere har bremsevæsken opsuges fugt fra luften.
Da vand (fugt) er uønsket i bremsesystemet skal man derfor vente med at åbne dunken til man skal bruge den.

Læg låget løst over bremsevæskebeholderen for at undgå eventuelt tilbage sprøjt.

Tag gummidutten af udluftningsskruen på bremsecaliperen.
'.visbilled('1', 'billed0133.jpg', 'skivebremse caliper udluftningsskrue', false, true).'
Sæt et stykke gennemsigtig slange i den rette tykkelse på udluftningsskruen.
Put den anden ende af slangen i en flaske eller lignende.
'.visbilled('1', 'billed2571.jpg', 'gennemsigtig slange på udluftningsskrue på bremsecaliper og i en flaske', false, true).'
Hvis du bruger en flaske som her så bor 2 huller i låget. 1 hul i slangens størrelse og 1 hul til at trykket i flaske kan slippe ud.
'.visbilled('1', 'billed2573.jpg', '2 huller i kapslen på en flaske og en gennemsigtig slange i det ene hul', false, true).'
Her har jeg sat en ringnøgle på udluftningsskruen som så holdes på plads af slangen så den ikke ryger af. Hvilket gør det lettere.
'.visbilled('1', 'billed2572.jpg', 'gennemsigtig slange på udluftningsskrue på bremsecaliper og i en flaske', false, true).'

'.afsnit('gentag A til G indtil der ikke kommer flere luftbobler ud ved udluftningsskruen','
A: Brems langsomt på bremsegrebet og hold presset.
B: Løsne udluftningsskruen langsomt.
E: Trykket falder nu i bremsegrebet.
C: Bremsevæsken kommer ud i den gennemsigtige slange.
D: Læg mærke til om der kommer luftbobler med ud.
F: Stram udluftningsskruen let fast inden bremsegrebet når helt i bund.
G: Giv langsomt slip på bremsegrebet.
').'

'.visbilled('1', 'billed1207.jpg', 'skivebremse caliper udluftning', false, true).'
Undgå at presse og give slip hurtigt på bremsegrebet da der kan komme tilbagesprøjt op af bremsevæskebeholderen.

Når der ikke kommer mere flere luftbobler ud i slangen spænder du udluftningsskruen rigtig fast og skruer låget på bremsevæskebeholderen og bremser på bremsegrebet nogle gange indtil det føles hårdt.

Det er vigtigt at bremsevæskebeholderen på intet tidspunkt bliver tom mens bremsesystemet udluftes.
Sørg for at fylde bremsevæske i bremsevæskebeholderen efterhånden som det bliver nødvendigt.
'.visbilled('1', 'billed2579.jpg', 'påfyldning af bremsevæske i bremsevæskebeholder', false, true).'

Der skal maksimalt fyldes bremsevæske op til 5 mm fra kanten da der skal være plads til membranen og på den måde undgår man også spild.

'.afsnit('hvis bremsegrebet stadig føles svampet','
Det kan skyldes meget små luft bobler som hænger i bremsevæsken.

Bind bremsegrebet fast for eksempel med en plastik strip så bremsevæsken er under tryk og vent nogle timer.
Udluft så bremsessystemet igen og se om der kommer mere luft ud.
').'
').'

Når du er færdig så skru et tæt låg på flasken og aflevere den på en genbrugsstation.
'.visbilled('1', 'billed2577.jpg', 'bremsevæske i flaske', false, true).'
'

,'
udskift bremsevæske
' => '
'.afsnit('hvornår skal bremsenvæsken udskiftes','
Bremsevæske bør skiftes inden 2 år eller inden 20.000 km hvad end der kommer først.
').'
Brug kun bremsevæske fra en nyligt åbnet bremsevæske dunk.

Følg de samme instruktioner som ved '.ahref('service_bremser.php#udluftning_af_hydrauliske_bremser', 'udluftning af hydrauliske bremser').'.
Her skal du blot blive ved med udluftningen indtil alt den gamle bremsevæske er kommet ud.

Den gamle bremsevæske er mørkere end den nye så det burde kunne ses hvornår den nye bremsevæske begynder at komme ud.
Men da det ikke er en god ide af gemme på en bremsevæske dunk der er blevet åbnet så kan man lige så godt få kørt en masse af den nye bremsevæske igennem.
'

,'
kontroller bremseklodser
' => '
Her ses 2 forskellige sæt bremseklodser.
'.visbilled('1', 'billed0686.jpg', 'bremseklodser med slid indikator', false, true).'
I bremsebelægningen er der nogle riller.

Med rillerne kan man se om bremseklodserne trænger til at blive udskiftet.
'.visbilled('1', 'billed0677.jpg', 'bremseklodser slid', false, true).'

Disse bremseklodser ser ikke ud til at have nogle riller.
'.visbilled('1', 'billed0678.jpg', 'bremsecaliper bremseklodser', false, true).'
Hvis bremseklodserne ikke har riller så kan man måle belægningens tykkelse og se i scooterens manual hvor tyk belægningen minimum skal være.

Det kan for eksempel være 2,0 mm.

Hvis belægningen er under denne tykkelse så skal de udskiftes.

Udskifter man bremseklodserne så skal man udskifte begge 2 samtidig, altså som et sæt.

Undgå at få fedt elle olie på bremsebelægningen eller at røre belægningen med beskidte fingre.

'.afsnit('asbest','
Bremsebelægning kan indeholde asbest som er skadelig at få i lungerne.
Jeg har læst hos færdselsstyrrelsen at 45 km/t scootere ikke må have bremsebelægning og koblingsbelægning med asbest.
Men det må 30 km/t scootere gerne.

For at være på den sikre side så brug en støvmaske og lad være med at puste omkring bremsen med trykluft og undgå støvet fra bremseklodser, caliper og bremseskive.
Tør støv af med et stykke vådt køkkenrulle eller en våd klud og smid den ud bagefter.

'.ahref('altomsym.php#symjet4', 'Sym jet 4').' er den eneste scooter jeg har læst om at bremsebelægningen skulle være uden asbest.
').'
'

,'
kontroller bremseskive
' => '
Ved at måle bremseskivens tykkelse kan man måle om den trænger til udskiftning.
'.visbilled('1', 'billed0687.jpg', 'bremseskive tykkelse', false, true).'
Se i scooterens servicemanual hvor tyk bremseskiven minimum skal være.
Der kan også stå en minimums tykkelse trykt på siden af bremseskiven for eksempel "MIN TH 3.5 mm".

For eksempel kan det være minimum 3,0 mm.
'

,'
rens bremsecaliper
' => '
Mellem gummiringene og bremsecaliperen kan med tiden kommer noget hvidt pulver som kan gøre at gummiringene presser så hårdt ind på stemplet at det ikke trækker sig tilbage når man giver slip på bremsegrebet.

Det vil betyde at bremsen blive ved med at bremse og dermed slides bremsebelægning og bremseskive unødigt og scooterens topfart nedsættes.

Man kan opdage det ved at hjulet ikke kan dreje frit rundt selvom det er løftet fra jorden, ved at den er tung at skubbe og ved at den drejer mærkeligt når man køre.

For at rense caliperen indvendigt er det nødvendigt at dræne alt bremsevæsken og fjerne stempel og gummi ringe.
'.visbilled('1', 'billed0142.jpg', 'bremsecaliper stempel gummi ring', false, true).'

Bemærk hvordan gummiringere vender inden de tages ud.

Man kan bruge alkohol (husholdnings sprit) til at rengøre bremsecaliperen.
Brug ikke petroleum-baseret rengøringsmidler da de kan få gummi til at udvide sig og blive skævt.
'

,'
bremser der hyler
' => '
Jeg har læst at man kan smøre lidt kobberfedt mellem bremsecaliperen og bagsiden af bremseklodserne der hvor de har kontakt med hinanden.
'.visbilled('1', 'billed2966.jpg', 'skivebremse', false, true).'
Det skulle gøre så bremserne ikke hyler og hjælpe med at overføre varmen når der bremses.
'

,'
kontroller tromlebremse
' => '
På nogle tromlebremser er der en slid indikator så man kan se om bremsebakkerne trænger til at blive udskiftet.

Få hjælp af en anden person til at bremse hårdt på bremsegrebet eller bind bremsegrebet stramt fast.

Hvis pilen på bremsearmen peger i midten af slid indikatoren så bør bremsebakkerne udskiftes.
'.visbilled('1', 'billed0740.jpg', 'tromlebremse slid indikator', false, true).'
Her ses en slid indikator/pil på bremsearmen.
'.visbilled('1', 'billed2798.jpg', 'slid indikator ved bagbremse', false, true).'
Her se mærket i motorblokken men der er ingen indikator/pil på bremsearmen.
'.visbilled('1', 'billed1383.jpg', 'slid indikator ved bagbremse', false, true).'

Hvis der ikke er nogen slid indikator så må man tage baghjulet af og måle bremsebelægningens tykkelse.

'.afsnit('måling af bremsebelægning','
Find bremsebelægningens minimums tykkelse i scooterens servicemanual.
For eksempel kan det være minimum 2,0 mm.

Mål bremsebelægningens tykkelse med en skydelære.

Bremsebelægningen slides ikke lige meget over det hele så derfor skal belægningen måles flere steder.
'.visbilled('1', 'billed0045.jpg', 'bremsebelægning måling', false, true).'
Hvis bremsbelægningen er under minimums tykkelsen noget sted så bør begge bremsebakker udskiftes som et sæt.
'.visbilled('1', 'billed1381.jpg', 'bremsebelægning', false, true).'
').'

'.afsnit('måling af bremsetromlen','
Find bremsetromlens maksimale indre diameter i scooterens servicemanual.
For eksempel kan det være maksimalt 110,5 mm.

I denne bremstromle står "MAX DIA 131 mm".
'.visbilled('1', 'billed1379.jpg', 'baghjuls bremsetromle', false, true).'
Mål bremsetromlens indre diameter med en skydelære.
'.visbilled('1', 'billed0046.jpg', 'bremsetromle måling', false, true).'
Vær opmærksom på det aller yderste af bremsetromle ikke slides af bremsebelægningen så derfor skal man ikke måle på det yderste sted nær kanten.
Skydelæren kan have små indhak som er beregnet til dette.
'.visbilled('1', 'billed3374.jpg', 'bremsetromle måling', false, true).'
').'
'

,'
juster tromlebremse
' => '
Tromlebremsen justeres ved at dreje på skruen ved bremsearmen.
'.visbilled('1', 'billed0135.jpg', 'tromlebremse bagbremse bremsearm juster', false, true).'
Drej justeringsskruen indtil bremsegrebet har det ønskede spillerum før bremsen tager fat.
Spillerummet står i manualen og kan for eksempel være 1-2 cm.
'.visbilled('1', 'billed0140.jpg', 'bremsegreb justering', false, true).'
Efterhånden som bremsebelægningen slides kan man dreje skruen mere ind.
'

,'
rens bremsebelægning
' => '
Slib let på bremsebelægningen med et stykke fint eller halvfint sandpapir hvis de er blevet blanke/glatte.
'.visbilled('1', 'billed0044.jpg', 'rensning af bremsebelægning sandpapir tromlebremse', false, true).'
Undgå at indånde støv fra bremsebelægningen da det kan indeholde asbest som er skadelig for lungerne.

Før slibning.
'.visbilled('1', 'billed1392.jpg', 'bremsebelægning før slibning', false, true).'
Efter slibning.
'.visbilled('1', 'billed1393.jpg', 'bremsebelægning efter slibning', false, true).'

Jeg vil anbefale at man sliber belægningen mens bremsebakkerne er monteret.
På den måde kommer man ikke til at røre ved belægningen med fedtede fingre efter slibningen.
'

,'
se også
' => '
'.ahref('http://repvideo.lars-mc.dk/repvideo/view.repair_video.php?id=18', 'Fremstilling af bremseslange til motorcykel (repvideo.lars-mc.dk)').'.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
