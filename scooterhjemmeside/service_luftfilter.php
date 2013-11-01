<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "luftfilter og udstødning - Service";
$overskrift = "luftfilter og udstødning - Service";
$metadescription = "service af luftfilter, drænslange og udstødning på scooter";

$databasecenter = array(

'
rens luftfilter
' => '
'.afsnit('rensning af papir typen','
Fjern papirelementet fra luftfilterkassen.
'.visbilled('1', 'billed1524.jpg', 'luftfilter kasse papirtype kymco super 8', false, true).'
Brug trykluft til at puste snavset ud.
Pust på den rene side som har vendt indad da snavset sidder på ydersiden og derfor vil blive blæst af.
'.visbilled('1', 'billed0345.jpg', 'Luftfilter af papirtypen renses med trykluft pistol', false, true).'
Hvis du pustet på ydersiden vil snavset bare sætte sig endnu bedre fast.
Papirfilter typen er beregnet til at blive skiftet ud med et nyt fremfor at blive ved med at rense det.

Nogle papirfiltre indeholder en "lim" som fanger støvet og som derfor ikke så godt kan renses.

'.afsnit('alternativ rensning af papir typen','
Jeg har prøvet at rense mit papir type luftfilter med varmt sæbevand.
Jeg lagde filteret med den beskidte side nedad også sprøjtede med et par opvaskemiddelbeholdere ned på filteret.
Bagefter sprøjtede jeg filteret igennem med varmt rent vand og lagde det til tørre.
Filteret blev lidt bølget fordi vandet har får papiret til at udvidde sig men ellers jeg det virkede rigtig godt og meget af snavset kom ud.

Jeg prøvede at tørre filteret lidt med en varmepistol men jeg tro hurtigt man kan skade papiret hvis man ikke er forsigtig så det er nok bedre at lægge filteret til tørre på en radiator.
').'
').'

'.afsnit('rengøring af svamp typen','
Fjern svampen fra luftfilterkassen.
'.visbilled('1', 'billed0660.jpg', 'Luftfilter svamp', false, true).'
Læg svampen i en spand varmt vand med opvaskemiddel.
Pres på svampen så snavs og olie bliver opløst men undgå at vride svampen da det kan være den går i stykker af det.
Skyld svampen i rent vand og pres så alt snavs og opvaskemiddel skylles ud.
Sæt svampen til tørre eller blæs den tør med trykluft.
'.visbilled('1', 'billed0334.jpg', 'Luftfilter af svamptypen', false, true).'
Når svampen er helt tør gøres den våd over det hele med enten motorolie, gearolie eller en speciel filter olie.
Vent til svampen er helt tør inden der puttes olie på ellers vil olien blive fortyndet og svampen vil ikke filtrer så godt.
Pres svampen så olien optages i svampen.
Pres overskydende olie ud af svampen.
Lad filteret tørre lidt på en avis.
Filteret er nu klar til montering.

'.afsnit('benzin eller ej','
Svampen kan også rengøres med benzin med det frarådes i nogle manualer på grund af brandfaren.
I nogle manualer står der at benzin kan ødelægge svampen.
I nogle manualer står at man kan fugte luftfilteret med 50% motorolie og 50% benzin.
').'
'.afsnit('olie','
I Honda Dax servicemanualen anbefales det at bruge SAE 10W30 motorolie.
I Honda common servicemanualen anbefales det at bruge SAE 80-90 gearolie.
Man kan også få speciel filter olie.
').'
').'
'.afsnit('bruger erfaring','
Der var en som skrev at lige gyldigt hvor lidt olie han puttede på luftfilteret efter rensning så var det ikke godt.
Motoren kunne ikke få luft.
Han skrev godt nok ikke hvad type luftfilter det var.
').'
'

,'
tøm drænslange
' => '
Drænslangen skal tømmes engang imellem inden slangen er helt fyldt.
'.visbilled('1', 'billed0007.jpg', 'drænslange fra luftfilter', false, true).'
For at tømme drænslangen skal man tage proppen af som sidder på enden af slangen og lade det løbe ud på et stykke køkkenrulle.

De gange jeg har tømt drænslangen har den indeholdt olie, vand og noget hvidt slam.
'

,'
afmonter udstødning
' => '
Start med at skru varmeskjoldende af udstødning.
Skru så boltene/møtrikkerne af ved cylinder/topstykke.
Og til sidst boltene som holder udstødningen på motorblokken.

Her ses en lidt rusten udstødning.
'.visbilled('1', 'billed1364.jpg', 'rusten udstødning', false, true).'
Forrøret ruster mest.
Formodentligt fordi forrøret er den del af udstødningen som bliver mest varm.
'.visbilled('1', 'billed1410.jpg', 'rusten udstødning', false, true).'
'.visbilled('1', 'billed1411.jpg', 'rusten udstødning', false, true).'
Svejsninger ruster også.
'.visbilled('1', 'billed1409.jpg', 'rusten udstødning', false, true).'
'

,'
slib udstødning
' => '
Sæt en prop, svamp eller lidt avispapir i hver ende af udstødningen.

'.afsnit('briller og maske','
Brug støvmaske når du sliber og maler.
Brug beskyttelsesbriller så du ikke får løse ståltråde i øjnene.
').'

For at få det bedste resultat skal man slibe helt ned til det blanke metal.
Jo mere grundig du er med slibningen, jo bedre bliver resultatet i sidste ende.

'.afsnit('sandblæsning','
En sandblæsning skulle vistnok give det bedste resultat.
Jeg har aldrig prøvet det men man kan prøve at spørge hos en lokal maskine smedie hvor meget det vil koste.
Hvis man får udstødningen sandblæst så skulle det være bedst at sætter skruerne i gevindene så de ikke tager skade.
').'

'.afsnit('slibning i hånden','
Man kan slibe udstødningen i hånden med sandpapir.
Men det tog meget lang tid da jeg gjorde det så det vil jeg ikke anbefale.
Det er desuden også svært at komme til at slibe alle steder med sandpapir.
'.visbilled('1', 'billed1367.jpg', 'sandpapir korn 60', false, true).'
').'

'.afsnit('slibning med boremaskine','
Til boremaskinen kan man købe forskelligt tilbehør.
Her ses en stålbørste monteret.
'.visbilled('1', 'billed1363.jpg', 'stålbørste til boremaskine', false, true).'

Min boremaskine går op til 3300 o/min og det syntes jeg er lidt for langsomt.

Stålbørsten viste sig at være rigtig god til at fjerne maling de steder hvor der ikke var rust.
Den kunne også godt fjerne rust de steder hvor der var let rust men de steder hvor rusten var dyb var stålbørsten ikke så god til at fjerne rusten men polerede i stedet for at fjerne det.
').'

'.afsnit('slibning med vinkelsliber','
En vinkelsliber er vistnok meget hurtigere i omdrejningerne og vil formodentligt være hurtigere til at udføre arbejdet iforhold til en boremaskine.

En bruger skriver at vinkelsliberen ligger bedre i hånden iforhold til en tung boremaskine.
Da vinkelsliberen holdes ud til siden så har man nok meget bedre kontrol end med en boremaskine som hopper rundt hvis man bruge den lige på.

'.afsnit('vinkelsliber med flap disk','
Man kan få sådan nogle skiver med overlappende stykker sandpapir som hedder flap diske til vinkelslibere som skulle være gode på de store flade områder.
Man skal bare passe på ikke at komme til at slibe metallet for tyndt for så går der lettere hul på udstødningen når rusten kommer igen.
').'
'.afsnit('vinkelsliber med stålbørste','
En stålbørste på vinkelsliberen kan komme ind i alle krogene hvor flap disken ikke kan komme.
').'
').'

'.afsnit('andre måder at fjerne rust på','
Jeg har læst at ståluld skulle være godt at slibe med.
Jeg har også læst at man kan bruge tyktflydende rustfjerner og lade det sidde i 10 timer så skulle rusten være væk.
').'
'

,'
affedt udstødning
' => '
Når du er færdig med at slibe skal overfladen affedtes for at malingen kan sidde godt fast.
Udstødningen kan affedtes med køkkenrulle og cellulosefortynder.
'.visbilled('1', 'billed1368.jpg', 'cellulosefortynder', false, true).'
Man kan vist også bruge acetone.

Undlad at røre udstødningen efter du har affedtet den.
'

,'
mal udstødning
' => '
Hvis du bruger spraymaling så gør det et sted hvor det ikke blæser.

Brug eventuelt en stor papkasse/flyttekasse til at spraymale i.

Den maling jeg har brugt hedder Motip heat resistance og er på spraydåse.
'.visbilled('1', 'billed1366.jpg', 'motip heat resistant', false, true).'
Ryst dåsen i 2 minutter.
Påfør ved stuetemperatur (15 - 25 °Celsius).
Mal i flere tynde lag og vent noget tid mellem hver lag så det kan nå at tørre lidt.
Når du har opnået det ønskede antal lag så lad udstødningen tørre 1 time ved stuetemperatur.
Herefter skal udstødningen opvarmes til 160 °Celsius i 30 til 60 minutter for at hærde malingen.

Se også '.ahref('smorelse.php#varmefast_maling', 'varmefest maling').'.

'.afsnit('hærdning af maling','
Da der nok ikke er så mange der har en ovn som kan rumme en udstødning så må vi i stedet for montere udstødning på scooter og køre en tur så den bliver varm.
Man skal nok ikke bare køre en lang tur på 30 til 60 minutter så bliver udstødningen nok for varm.
Jeg ved ikke hvor varm udstødningen bliver men hvis man kører 5 minutter og stopper motoren i 1 minut og køre køre 2 minutter og stopper i 1 minut og køre 2 minutter osv osv så burde man vel kunne holde en nogenlunde ensartet temperatur men har dog ingen erfaring med det.

Forrøret bliver jo hurtigere varmt end resten af udstødningen.
').'
'

,'
resultat
' => '
'.afsnit('resultat med sort maling','
'.visbilled('1', 'billed0326.jpg', 'malet udstødning', false, true).'
Efter noget tid kunne jeg dog se rusten kom igen.
Formodentligt fordi jeg ikke have slebet helt ned til det blanke metal.
').'

'.afsnit('resultat med gennemsigtig maling (30-04-2010)','
Før opvarmningen var forrøret blankt.
'.visbilled('1', 'billed1412.jpg', 'udstødning med varmefast maling klarlak', false, true).'
Under opvarmning blev forrøret lidt efter lidt mørkt.
Her ses resultatet efter 2 dages kørsel.
'.visbilled('1', 'billed1398.jpg', 'udstødning med varmefast maling klarlak', false, true).'
'.visbilled('1', 'billed1399.jpg', 'udstødning med varmefast maling klarlak', false, true).'
'.visbilled('1', 'billed1400.jpg', 'udstødning med varmefast maling klarlak', false, true).'
Jeg ved ikke om det er blevet mørkt fordi jeg opvarmede udstødningen for hurtigt eller det bare er normalt at det bliver sådan.
').'
'.afsnit('resultat med gennemsigtig maling efter 2 måneder (24-06-2010)','
Oppe fra ser det fint ud og forrøret er blevet helt mørkt.
'.visbilled('1', 'billed1587.jpg', 'udstødning med varmefast maling klarlak', false, true).'
Nede fra er der kommer let rust igen.
'.visbilled('1', 'billed1588.jpg', 'udstødning med varmefast maling klarlak', false, true).'
').'
'.afsnit('resultat med gennemsigtig maling efter 6 måneder (21-10-2010)','
'.visbilled('1', 'billed2179.jpg', 'udstødning med varmefast maling klarlak', false, true).'
'.visbilled('1', 'billed2180.jpg', 'udstødning med varmefast maling klarlak', false, true).'
').'
'.afsnit('min konklusion','
Selvom rusten vender tilbage vil jeg mene det er bedre at slibe og male sin udstødning engang imellem for at minimer rusten så udstødningen holder længere. Altså at rusten ikke trænger igennem og laver hul så hurtigt som den ellers ville have gjort hvis ikke man sleb og malede.
').'
'

,'
andet
' => '
Der er blevet skrevet at man kan bruge zinkspray (eventuelt aluzinkspray) på det bare metal og køre med det nogle dage så det er blevet varmet lidt igennem.
Derefter tørres det hele af også påføres varmefast maling.
Det skulle give en flot blank grå/sølv finish.
'

,'
måling af udstødningsgasser
' => '
Jeg har prøvet at måle udstødningsgasserne på min scooter.

Jeg målet i 3 omgange.

'.afsnit('måling ved hul i forrør. Motor er lige startet','
CO = 8,442 %
HC = 1860 ppm (dele per million)
'.kemiskformel('CO2').' = 4,96 %
COcor = 9,45 %
').'
'.afsnit('måling bagerst på udstødning','
CO = 3,324 %
HC = 1172 ppm (dele per million)
'.kemiskformel('CO2').' = 8,43 %
COcor = 4,24
').'
'.afsnit('måling bagerst på udstødning. Motor er varm','
CO = 1,693 %
HC = 711 ppm (dele per million)
'.kemiskformel('CO2').' = 8,19 %
COcor = 2,57
').'
PPM = Parts Per Million = dele per million.

I servicemanualen til Kymco Super 8 4T står der at udstødningen ved tomgang normalt indeholder 2-3 % CO og maksimum 700 ppm HC.

Den sidste måling hvor motoren er varm passer meget godt med de tal der står i manualen.



Der er en bruger der har skrevet at personen har fået disse data fra importøren til Kymco Agility 50 :

CO : 0,458 g/km
HC + NOx : 0,391 g/km
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
