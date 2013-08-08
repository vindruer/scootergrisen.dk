<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "smørelse og væsker";
$overskrift = "smørelse og væsker";
$metadescription = "forklaring af forskellige slags smørrelser og væsker der bruges til scootere som kobberfedt, karburatorvæske og bremsevæske";

$databasecenter = array(

'
olie
' => '
For info om olie '.ahref('olie.php', 'læs olie siden').'.
'

,'
kobberfedt
' => '
'.visbilled('1', 'billed0342.jpg', 'kobberfedt', false, true).'

'.afsnit('bruges til','
Steder med høje temperatur.
Ved udstødningsrøret så det er let at få skruerne/møtrikkerne af.
Tændrørs gevind.
På bagsiden af skivebremseklodserne for at forhindre bremsen i at hyle og til bedre af overfører varme.
Kobling (nej ikke på belægningen).
Hængsler.
Gevind.
Bolte.
Møtrikker.
').'

'.afsnit('temperatur','
Bruges ved temperature fra cirka -40 til +1000 °Celsius.
').'

'.afsnit('angriber','
Gummi
Plastik
Aluminium
Rustfrit stål
(undgå kontakt med disse materialer)

Irriter huden.
').'

'.afsnit('grund til brug','
Beskytter mod korrision.
Forhændre rivning af gevind.
Forhændre fastbrænding.
').'

Beskytter mod korrision og bliver ikke vasket væk af vand.

Der var en som skrev om en kollega der havde fået udslæt af at bruge kobberfedt også havde skiftet det ud med keramisk pasta.
'

,'
keramisk pasta
' => '
'.visbilled('1', 'billed0344.jpg', 'keramisk pasta', false, true).'

'.afsnit('temperatur','
Bruges ved temperature fra cirka -40 til +1400 °Celsius.
').'

Så vidt jeg forstår kan keramisk pasta bruges de sammen steder som man ville bruge kobberfedt og at det er mindre skadeligt for huden.

indeholder ikke metal.
indeholder meget fine keramiske dele.
'

,'
silikonefedt
' => '
'.visbilled('1', 'billed0343.jpg', 'silikonefedt', false, true).'

'.afsnit('bruges til','
Gummi, plastik, nylon og andre kunststoffer.
O-ringe.
Gevind.
Beskyttelse af elektriske ledninger og stik.
Batteriterminaler.
Pære terminaler.
Kontakter.
Som tætningsmiddel (sprøjtes uden på stik for at forhindre vand i at komme ind)
Gummilisten under sædet.
Glidebøsning på bremsekaliber.
Tændingsdele.
Hængsler.
Holder gummi og plastik elastisk.
Kan bruges på forkromninger hvis man ønsker en gennemsigtig beskyttelsesfilm.
').'

'.afsnit('temperatur','
Bruges ved temperature fra cirka -50 til +200 °Celsius.
').'

'.afsnit('angriber','
Så vidt jeg ved anbribe silikonefedt ikke noget.
').'


Silikonefedt får ikke gummi til at hæve eller blive blødt.

Silikone er ikke elektrisk ledende så det bør ikke sprøjtes ind i stik for at få god forbindelse.
Derimod kan man sørge for god forbindelse i stikket først og derefter give det silikonefedt uden på for at beskytte stikket med korrision.
'

,'
karburatorvæske
' => '
Karburatorvæske kaldes også for karburatorsprit.

'.afsnit('obs','
Fra Juli 2010 bliver der tilføjet 5% ethanol i blyfri 92 og 95 oktan benzin solgt på danske tankstationer så det er muligvis blevet unødvendigt at bruge karburatorvæske.
').'

'.visbilled('1', 'billed0340.jpg', 'karburatorvæske', false, true).'

'.afsnit('hvorfor','
Karburatorvæske hældes i benzintanken om vinteren når temperaturen kommer under +5 °Celsius for at undgå at kondensvand i benzintank og karburator kan fryse til is.

Hvis der er vand i benzintanken og karburatoren vil vandet ligger under benzinen fordi vand er tungere end benzin og vand og benzin kan ikke blande sig.

Vand fryser til is ved 0 °Celsius.
Men hvis temperaturen er mellem 3 og 0 °Celsius er vandet flydende når det ligger stille men når det suges op gennem dyserne i karburatoren kan vandet blive koldere også kan det bliver til is.
For at forhindre eventuel vand i at blive til is kan man tilsætte karburatorvæske i benzintanken.
Blandingsforholdet står på beholderen og kan for eksempel være 1:100 eller 1:25.
').'

Karburatorvæsken blander sig med vandet og gør at vandet får et lavere frysepunkt end de 0 °Celsius som rent vand har.
'.visbilled('1', 'billed0958.jpg', 'karburatorvæske', false, true).'
Som det ses i videoen blander benzinen sig ikke med vandet og karburatorvæsken.
Selvom der i databladet fra Q8 står at det er fuld blandbart med benzin og vand.
'.visflash('0', "http://www.youtube.com/v/f5ugAnhbcJE", 'karburatorvæske og vand', true).'
Her er vandet i bunden af flasken frosset efter at flasken har stået udendørs i frostvejr.
Hvis dette skete i benzintanken ville der formodentligt ikke kunne løbe benzin ned til karburatoren.
'.visbilled('1', 'billed1083.jpg', 'karburatorvæske med frosset vand', false, true).'
Her har jeg haft rimeligt meget vand i flasken og ik så meget karburatorvæske så derfor har vand og karburatorvæske kunne fryse.
'.visflash('0', "http://www.youtube.com/v/EZod3L7LRTg", 'karburatorvæske og vand udsat for frost', true).'
På denne beholder står at karburatorvæsken indeholder ethanol/isopropylalkohol.
'.visbilled('1', 'billed2009.jpg', 'karburatorvæske ethanol/isopropylalkohol', false, true).'

Jeg har endnu ikke fundet ud af hvorfor der både er ethanol og isopropylalkohol i karburatorvæske i stedet for bare det ene.

'.afsnit('frysepunkt','
Vand fryser ved 0 °Celsius.
Isopropylalkohol fryser ved -89 °Celsius.
Ethanol fryser ved -114 °Celsius.
Ved at tilføje isopropylalkohol eller ethanol til vandet vil vandet få et lavere frysepunkt og dermed ikke blive til is.
').'

På en karburatorvæske beholder fra statoil står "Fjerner kondensvand i tanken" og "Holder brændstofsystemet fri for kondensvand" men så vidt jeg ved fjerner karburatorvæske ikke vandet men blander sig med vandet og sænker dermed frysepunktet så vandet ikke bliver til is. Men jeg mener ikke at karburatorvæske fjerner vandet.

Det kan muligvis være at ethanol eller isopropylalkohol har indvirkning på overfladespændingen på indersiden af benzintanken og karburatorenen sådan at der ikke så let vil kunne sætte sig kondensvand på vægen.
'

,'
bremsevæske
' => '
Her ses en dunk med bremsevæske og bremsevæsken som den ser ud fra ny.
'.visbilled('1', 'billed2562.jpg', 'castrol response synthetic brake fluid dot 4 bremsevæske', false, true).'
Her ses brugt bremsevæske som efter mere end 2 år er blevet mørkere.
Der er noget mørkt bundfald så det ser måske mørkere ud på billedet end det egentligt er.
'.visbilled('1', 'billed2570.jpg', 'brugt bremsevæske', false, true).'
'.visbilled('1', 'billed2496.jpg', 'castrol response synthetic brake fluid dot 4 bremsevæske', false, true).'
Her står at bremsevæsken lever op til blandt andet DOT 3 og DOT 4 standarderne.
'.visbilled('1', 'billed2497.jpg', 'castrol response synthetic brake fluid dot 4 bremsevæske', false, true).'

'.visbilled('1', 'billed0924.jpg', 'bremsevæske', false, true).'
'.afsnit('anvendelse','
Bremsevæske bruges til at overfører trykket fra bremsegrebet til bremsecaliperens stempler.
').'

'.afsnit('kogepunkt','
Bremsevæsken kan blive varm når der bremses.
Bremsevæsken bliver muligvis ikke særlig varm under normalt brug men lad os sige vi kørte ned af et bjerg hvor vi brugte bremsen meget.
Der opstår friktion mellem bremseskiven og bremseklodserne.
Varmen fra bremseklodserne overføres til stemplet som overfører varmen til bremsevæsken.
Bremsevæsken har et højt kogepunkt sådan at der ikke dannes damplommer i bremsevæsken når den bliver varm.
Bremsevæsken har både et højt kogepunkt og et lavt frysepunkt.

'.afsnit('tørkogepunkt','
Tørkogepunktet er det kogepunkt som bremsevæsken i en uåbnet beholder skal overholde.
').'
'.afsnit('vådkogepunkt','
Vådkogepunktet er det kogepunkt som man ved måling kan sammenligne med så man ved hvornår bremsevæsken skal udskiftes efter at den er begyndt at optage vand.
Bremsevæskens vådkogepunkt måles med 3,2 % vand i.
Når man måler bremsevæsken er det vådkogepunktet man skal sammenligne med.
').'
').'
'.afsnit('standarder','
DOT står for Department Of Transportation.
DOT 3 og DOT 4 er de eneste bremsevæsker jeg har set angivet til scootere.

'.afsnit('DOT 3','
Glycol baseret.
Skader maling, lak, plastik og gummi.

Tørkogepunkt på minimum 205 °Celsius.
Vådkogepunkt på minimum 140 °Celsius.
').'
'.afsnit('DOT 4','
Glycol baseret.
Skader maling, lak, plastik og gummi.

Tørkogepunkt på minimum 230 °Celsius.
Vådkogepunkt på 155 °Celsius.
').'
'.afsnit('DOT 5','
Silikone baseret.
Skader ikke maling, lak, plastik og gummi.

Tørkogepunkt på 260 °Celsius.
Vådkogepunkt på minimum 155-180 °Celsius.

Er langsommere til at danne tryk end glycol baseret bremsevæske.
Bremsen vil derfor føles mere svampet end med glycol baseret bremsevæske.
').'
'.afsnit('DOT 5.1','
Glycol baseret.
Skader maling, lak, plastik og gummi.

Tørkogepunkt på minimum 260-270 °Celsius.
Vådkogepunkt på minimum 180-191 °Celsius.
').'
').'

'.afsnit('fugt og vand','
Glybol baseret bremsevæsker absorbere vand.
Silikone baseret bremsevæske absorbere ikke vand.

Bremsevæske optager fugt (vand) fra luften så når der skal fyldes bremsevæske på scooteren skal der bruges en beholder som lige er blevet åbnet.

Vand i bremsevæsken giver et lavere kogepunkt.
Jo mere vand jo lavere kogepunkt.

Når bremsevæsken har optaget 2-3% vand bør den skiftes.

'.visflash('0', "http://www.youtube.com/watch?v=jYPTZCEJ718", 'her kan man se hvordan vand og bremsevæske blander sig med hinanden', true).'
').'

'.afsnit('angriber','
Bremsevæske er meget skadeligt for øjnene og skader maling, lak, plastik og gummi så undgå at spilde bremsevæske.
Brug handsker og beskyttelsesbriller.
').'

'.afsnit('videoer','
Se også '.ahref('http://repvideo.lars-mc.dk/repvideo/popupvideo.php?sptlv=1191949270', 'Information omkring bremsevæske (repvideo.lars-mc.dk)').'.
').'

Se også '.ahref('http://repvideo.lars-mc.dk/tekniskdata/pdf-docs/1191944431.pdf', 'Information omkring bremsevæske PDF (repvideo.lars-mc.dk)').'.
'

,'
kølervæske
' => '
'.visbilled('1', 'billed2461.jpg', 'kølervæske dunke blå rød gul', false, true).'
Kølervæske er en glycol baseret væske. Typisk bruges ethylenglycol.
Kølervæske kan fås konsenteret som skal blandes med demineraliseret vand inden det hældes i kølesystemet eller som færdigblandet.
Additiver i kølervæsken beskytter mod rust.

'.afsnit('blandingsforhold','
Blandingsforholdet er typisk 1:1. 50% demeraliseret vand og 50% ethylenglycol væske.
På Yamaha Giggle er blandingsforholdet 60% demeraliseret vand og 40% ethylenglycol væske.
Forskellige blandingsforhold giver forskelligt frysepunkt.

'.afsnit('Eksempler på blandingsforhold og frysepunkt','
22% ethylenglycol : kølervæsken fryser ved -10 °Celsius.
42% ethylenglycol : kølervæsken fryser ved -25 °Celsius.
52% ethylenglycol : kølervæsken fryser ved -40 °Celsius.

1:2,0 : frostsikrer til -18 ˚Celsius.
1:1,5 : frostsikrer til -24 ˚Celsius.
1:1,0 : frostsikrer til -36 ˚Celsius.

Statoil long life (rød farve) ved 20 vol% -9
Statoil long life (rød farve) ved 30 vol% -15
Statoil long life (rød farve) ved 40 vol% -23
Statoil long life (rød farve) ved 50 vol% -36
').'
').'

'.afsnit('udskiftnings interval','
Jeg har læst at kølervæsken bør udskiftes hvert 2. år ligegyldigt hvor mange km scooteren har kørt.
Den kølervæske som angives "longlife" skal skiftes hver 4. år.
').'

'.afsnit('kølervæsketype og farve','
Kølervæske kan være tilsat farve.
For eksempel blå, rød eller gul.
Farven fortæller ikke nødvendigvis hvilken type kølervæske det er.

Optimize fra T Hansen : Rød 1,2-ethandiol
Optimize fra T Hansen : Blå Monoethylen glycol
Optimize fra T Hansen : Gul Longlife (dyrest)

Castrol Anti-freeze : monoetylenglykol
Castrol Anti-freeze NF : monoethylenglycol
Castrol Anti-freeze SF : monoethylenglykol - konsentrat fri for silikat, amin, fosfat samt andre uorganiske inhibitorer. Det er en longlife væske. Ved blandingsforhold 1:1 udskiftes væsken hvert 4. år eller ifølge producentens foreskrifter. 
Castrol Special Coolant : monoetylenglykol - velegnet til systemer, hvor der indgår aluminium og kobber. Den er fri for nitrit, fosfater og aminer, borat og silikat.
').'

'.afsnit('glycoler','
Longlife
1,2-ethandiol

monoetylenglykol
Monoethylenglycol (long life 4 år)
diethylenglykol (frysepunktet og kogepunktet er højere så derfor bruges den i varmere lande end danmark)

propylenglycol (mindre giftig)
monopropylenglykolglykol MPG (ikke giftig. Let biologisk nedbrydelig. kan bruges hvor der laves fødevare som byggeri og mejeri.)
').'

'.afsnit('dyr og kølervæske','
Kølervæske smager sødt så dyr som hunde og katte kan godt lide det.
Derfor skal man undgå at spilde kølervæske og tørre det op hvis man spilder.
Hvis et dyr drikker kølervæske kan det blive omdannet til giftige stoffer i kroppen og det kan ødelægge nyrerne.
').'

'

,'
WD-40
' => '
WD-40 er en meget tyndtflydende væske som kan bruges mange steder.
'.visbilled('1', 'billed0739.jpg', 'WD-40', false, true).'
'.afsnit('som der står på dåsen','
Fjerner knirken
Fjerner fugtighed
Renser og beskytter
Løsner rustne dele
Løsner fastsiddende mekaniske dele

Fjerner mange former for voks, tjære, fedt og klæbemidler og efterlader en rustbeskyttende hinde.
Trænger ind, løsner og smører fastgroede og fastrustede dele så som møtrikker og mekaniske dele.
indeholder ikke silikone.
').'

WD-40 står for "Water Displacement 40th formula".

Se eventuelt '.ahref('http://wd40.com/faqs/#a91', 'wd40.com FAQS').'.
'

,'
tectyl
' => '
Tectyl er et rustbeskyttelsesmiddel.

Der findes forskellige tectyl produkter.

Her ses en gennemsigtig rustbeskyttelses spray.
'.visbilled('1', 'billed0858.jpg', 'tectyl', false, true).'

'.afsnit('som der står på dåsen','
Tectyl Glashelder/Klar er et farveløst, transparent, alsidigt rustbeskyttelsesmiddel til automotiv, industriel, marine og husholdningsbrug.
Beksytter også elektriske ledninger, kontakter og forkromede dele (cykelhjul).
Kan bruges på jern og ikke-jernmetaller.

Brugsanvisning: Omrystes omhyggeligt før brug.
Sprøjt med en afstand på 25 cm. Inden dåsen gemmes efter brug: vend dåsen med bunden i vejret, og sprøjt et par sekunder for at rense dysen.
Produktet kan fjernes med petroleum.
').'
'

,'
låseolie
' => '
Låseolie er et meget tyndt flydende smørremiddel som sprøjtes ind i låse for at smørre så låsen virker godt og for at undgå at låsen fryser fast om vinteren.

Her ses en lille dåse som er let at have med i scooteren.
'.visbilled('1', 'billed0859.jpg', 'låseolie', false, true).'

'.afsnit('som der står på dåsen','
Smører effektivt alle typer låse.
Forebygger isdannelse.
').'
Her ses en større dåse med låseolie.
'.visbilled('1', 'billed2446.jpg', 'låseolie abus pflege-spray PS 88', false, true).'
Giv låsen et godt sprøjt på et par sekunder og drej nøglen i låsen et par gange.
Når man lige har smurt låsen så vil der sidder låseolie på nøglen de næste mange gange man tager nøglen ud.
Så kan man tage lidt toiletpapir med i lommen så man kan tørre nøglen af inden man putter den i lommen.
'

,'
fedt på sprøjte
' => '
Hvis man købe nogle sprøjter på apoteket og fylder dem med fedt er der mere praktiskt når man skal bruge lidt fedt i stedet for at skal skrue låget af og på en beholder.
'.visbilled('1', 'billed1359.jpg', 'sprøjte med fedt', false, true).'
Desuden undgår man at fedtet bliver beskidt ved at bruge en sprøjte.
'

,'
cellulosefortynder
' => '
Cellulosefortynder kan bruges til at affedte før maling, fortynde maling eller til at fjerne maling.
'.visbilled('1', 'billed1360.jpg', 'cellulosefortynder', false, true).'
Da jeg skulle slibe og male min rustne udstødning anbefalede manden i malerbutikken at jeg brugte cellulosefortynder efter slibningen for at fjerne fedt fingre inden jeg skulle male.
Hvis der er malet med spray maling på plastik skjoldende så skulle det kunne fjernes med cellulose fortynder.
'

,'
epoxylim
' => '
Her ses en sprøjte med epoxylim.
'.visbilled('1', 'billed1158.jpg', 'epoxylim sprøjte araldite rapid', false, true).'
Jeg købte det engang da der var noget plastik som knak af i et toilet og det lykkedes mig at lime det fast med epoxylimen.

Efter hvad jeg har set i tv så skulle epoxylim være meget stærkt.

Her ses noget fra emballagen.
'.visbilled('1', 'billed1156.jpg', 'epoxylim emballage', false, true).'

Her ses hvordan man bruger limen.
'.visbilled('1', 'billed1153.jpg', 'epoxylim emballage brugsanvisning', false, true).'
'.visbilled('1', 'billed1157.jpg', 'epoxylim emballage brugsanvisning', false, true).'

Der er en del advarsler.
'.visbilled('1', 'billed1159.jpg', 'epoxylim advarsler', false, true).'
'.visbilled('1', 'billed1154.jpg', 'epoxylim advarsler', false, true).'
Her står noget om indholdet.
'.visbilled('1', 'billed1155.jpg', 'epoxylim advarsler Bisphenol A- Epoxiharpiks (MV < 700) 80-100% N((3Dimethylaminopropyl)-1,3 propylendiamin 1-10 %', false, true).'
Den ene del af sprøjten kaldes vist lim eller base og indeholder Bisphenol A- Epoxiharpiks (MV &lt; 700) 80-100%.
Den anden del af sprøjtes kaldes vist hærder og indeholder N((3Dimethylaminopropyl)-1,3 propylendiamin 1-10 %.
På grund af de 2 seperate rum kaldes det vist en 2 komponent lim.
De 2 dele kommer først i kontakt med hinanden når man skal bruges limen.

Her har jeg limet spidsen af min scooter som har været knækket og det har holdt rigtigt godt med epoxylim.
'.visbilled('1', 'billed1814.jpg', 'knækket plastik skjold med epoxylim', false, true).'
'.afsnit('erfaring','
Selvom der står at fuld styrke opnås efter cirka 1 time så vil jeg anbefale at vente meget længere.
Limen er stadig blød så vent så længe du kan inden du tager delen ibrug igen så tror jeg der er større chance for at limen har hård og du ikke skal gøre det om.
').'
'

,'
skruesikring
' => '
Skruesikring er en form for lim til at holde gevind sammen så de ikke går løs.
'.visbilled('1', 'billed2580.jpg', 'skruesikring loctite 2701', false, true).'
Her ses en bolt med påført skruesikring.
'.visbilled('1', 'billed2581.jpg', 'skruesikring på bolt gevind', false, true).'
Skruesikringen skal kun påføres på enden af gevindet så fordeler det sig når skruen monteres.
'.visbilled('1', 'billed3021.jpg', 'gevind med skruesikring', false, true).'
'.afsnit('som der står på beholderen','
'.visbilled('1', 'billed2582.jpg', 'skruesikring loctite 2701 bagside', false, true).'
').'
'.afsnit('som der står på papemballagen','
2701
loctite
skruesikring stærk
Høj vibration og chok resistent
Svær at adskille
Beskytter gevind mod korrosion

Forhindrer lækage og løsning fra vibrationer på gevindfastgørelser såsom bolte, møtrikker og studser.
Specielt egnet tl permanente gevindsamlinger hvor max. styrke er anbefalet. Meget svær at adskille med håndværktøj (varme til 300°C).
Brugsanvisning: Rengør delene. Påfør nok Loctite 2701 til at fylde de sammenskruede gevind. Hold delene sammen og læg til tørring.
Anvendelsesområde: Til gevind op til M20. Påføringstemperatur -55°C til 150°C. Håndteringsstyrke efter 10 - 30 min. og den fulde styrke opnås efter 12 timer. Gevind af andet materiale end metal, kontakt venligst Loctite for rådgivning af et passende produkt. Der er et luftrum i flasken, for at beholde produktet flydende.
Bedst før: se bunden af emballagen.
').'
'

,'
karburatorrens
' => '
'.visbilled('1', 'billed2311.jpg', 'karburatorrens', false, true).'
'.afsnit('som der står på dåsen','
'.visbilled('1', 'billed2312.jpg', 'karburatorrens', false, true).'
').'
'

,'
PTFE og teflon
' => '
'.visbilled('1', 'billed2447.jpg', 'bardahl super teflube +ptfe', false, true).'
PTFE står for Poly Tetra Flour Ethylene.
PTFE kaldes også for teflon som er et registeret varemærke af firmaet Dupont de nemours.
PTFE og teflon skulle altså være det samme så vidt jeg forstår.
PTFE har meget lille friktion og kan derfor være god at bruge der hvor man ønsker at ting glider let.

'.afsnit('som der står på dåsen','
'.visbilled('1', 'billed2448.jpg', 'bardahl super teflube +ptfe bagside', false, true).'
').'

'.afsnit('temperatur','
Bruges ved temperature fra -50 til +265 °Celsius.
').'
'

,'
varmefast maling
' => '
'.visbilled('1', 'billed1362.jpg', 'motip heat resistant 650 °Celsius', false, true).'

'.afsnit('som der står på dåsen','
Varmeresistent lag til overflader, som er udsat for meget høje temperaturer.
Slib overfladen og rengør den, den skal være tør og fri for fedt.
Beskyt omgivelserne.
Påfør ikke grunder.
Omrystes i to minutter før brug, spray et teststykke.
Sprayafstand 25 - 30 cm.
Påfør i flere tynde lag.
Bearbejdningstemperatur 15 - 25 °Celsius.
Beregn en time til tørring ved stuetemperatur.
Varm derefter op i 30 til 60 minutter (160 °Celsius) således at lagene af maling hærder.
Der udvikles røg i forbindelse med lakfernissens hærdningsproces.
Efter brug vendes bunden i vejret på  dåsen og der sprayes i flere sekunder.
Holdbar til: se på emballagen.
').'
'

,'
variatorfedt
' => '
'.visbilled('1', 'billed3279.jpg', 'malossi 7.1 grease MRG', false, true).'

'.afsnit('som der står på tuben','
Malossi 7.1
GREASE MRG

High resistance grease with mineral base and special formulation, with molybdenum sulphide additive.
cod. 7611882B

MRG has been studided for scooter variators and torque drivers. It grants a long lasting of rollers and of all the machanical parts.
NB It must be used only with variators they are for.
40 gr.
').'
'

,'
ventilslibepasta
' => '
Ventilslibepasta bruges sammen med '.ahref('verktoj.php#ventilslibepind', 'ventilslibepind').' til at slibe kontaktområdet ved ventilhovedet og ventilsædet i topstykket så ventilerne holder godt tæt så trykket ikke slipper ud når ventilen er lukket.

Ventilslibepasta kommer i grov som man bruger først og fin som man bruger bagefter.
'.visbilled('1', 'billed3751.jpg', 'ventilslibepasta', false, true).'
'.visbilled('1', 'billed3752.jpg', 'ventilslibepasta', false, true).'
'.visbilled('1', 'billed3750.jpg', 'groft og fint ventilslibepasta', false, true).'
Her ses ventilslibepasta på en ventil.
'.visbilled('1', 'billed3767.jpg', 'ventilslibepasta på ventil', false, true).'
Her ses posen med info som bøtterne kom i.
'.visbilled('1', 'billed3754.jpg', 'ventilslibepasta info på pose', false, true).'
'.afsnit('som der står på posen','
Ventilslibepasta

DK - Opbevares utilgængeligt for børn.

DK - Olieblandet siliciumkarbidpasta. Indeholder groft og fint slibemiddel. Giver en jævn og tryksikker ventiltilpasning.
Brugsanvisning: Kom ventilslibepastaen på ventilernes tætningsflade. Ventilsædet slibes ved hjælp af en slibepind med gummisugekop. Rengør ventilen og ventilsædet. Tørres derefter omhyggeligt af med en tør klud.

2 x 35 g
').'
'.afsnit('kan købes hos...','
'.ahref('http://www.biltema.dk/da/Bil---MC/Varktoj-og-varkstedsudstyr/Motor/Ventilslibepasta-fingrov-191383/', 'Biltema').'
').'
'

,'
skæreolie
' => '
Jeg har endnu ikke prøvet at bruge skæreolie men jeg har flere gange prøvet at bore i metal hvor mine bor bare var eller blev helt vildt sløbe så det tog vildt langt tid at bore med dem.
Hvis boret bliver for varmt så er det åbenbart ikke godt også skal man bruge sådan noget skæreolie til at køle boret med. Det smørre vist også lidt men det vigtigste skulle være at det køler boret.
'.visbilled('1', 'billed3762.jpg', 'skæreolie fra biltema', false, true).'
<!--
'.afsnit('som der står på dåsen','
...
').'
-->
'.afsnit('kan købes hos...','
'.ahref('http://www.biltema.dk/da/Bilpleje/Olie-og-Smoremidler/Ovrigt-smoremidler/Skareolie-364500/', 'Biltema').'
').'
'

,'
forgaffelolie
' => '
' . ahref('olie.php#forgaffelolie', 'Forgaffelolie') . '
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
