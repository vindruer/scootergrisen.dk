<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "Elektrisk - Fejlfinding";
$overskrift = "Elektrisk - Fejlfinding";
$metadescription = "find og ret fejl på scooterens/knallertens elektriske udstyr (tændspole, generator, pickup, spændingsregulator, kortslutning, dårlig forbindelse)";

$databasecenter = array(

'
tændspole, tændrørskabel og tændrørshætte
' => '
Ohm værdierne her stammer fra Kymco Super 8 4T og er ikke nødvendigvis de samme på andre scooter modeller.
Check scooterens servicemanual for de rigtige ohm værdier.

Fjern de 2 små ledninger fra tændspolens.
Mål ohm værdien på de 2 terminaler på tændspolen.
'.visbilled('1', 'billed0303.jpg', 'tændspole', false, true).'
Dette måler den primære spoles modstand.
'.visbilled('1', 'billed0709.jpg', 'tændspole ohm', false, true).'
Der skal være 0,1-1,0 Ω (på en Kymco Super 8).
Der skal være 0,2-0,3 Ω (eller 0,153 - 0,187 Ω ved 20 °Celsius) (på en Kymco Like).

Mål ohm værdien på tændspolens sekundære spole med tændrørshætten.
Mellem stelforbindelsen (den grønlige terminal) og i tændrørshætten.
'.visbilled('1', 'billed0710.jpg', 'tændspole ohm', false, true).'
Der skal være 7000-12000 Ω (på en Kymco Super 8).
Der skal være 7000-8400 Ω (eller 10000 - 14000 Ω ved 20 °Celsius) (på en Kymco Like).

Skru tændrørshætten af.

Mål ohm værdien på tændspolens sekundære terminal (stelforbindelsen) og på enden af tændrørskablet.
'.visbilled('1', 'billed0711.jpg', 'tændspole ohm', false, true).'
Der skal være 3000-5000 Ω (på en Kymco Super 8).
Der skal være 2500-3200 Ω (eller 7000 - 9000 Ω ved 20 °Celsius) (på en Kymco Like).

Tændrørshætten indeholder en modstand på cirka 5000 Ω (på en Kymco Super 8).
Der sidder en skrue i tændrørshætten som kan skrues ud. Check at skruen ikke er løs.
Check at tændrørskablet sidder godt fast i begge ender.

'.afsnit('højspænding normal men ingen gnist på tændrør','
• fejl på tændrør
• fejl på tændrørshætte
').'

'.afsnit('højspænding middel','
• fejl på tændings knap (switch)
• dårlig forbindelse i CDI stik
• dårlig forbundet eller knækket CDI stelforbindelse
• fejl på pickup
• løst højspændingskabel
• fejl på CDI
').'

'.afsnit('højspænding for lav','
• svagt batteri eller lav motor hastighed
• løs forbindelse i tændingssystem
• fejl på tændspole
• fejl på CDI
• fejl på pickup
').'

'.afsnit('ingen eller middel højspænding','
• fejl på tændspole
• svagt batteri
• fejl på oplader kredsløb
').'

'.afsnit('ingen højspænding','
• fejl på tændings knap (switch)
• dødt batteri eller fejl på spændingsregulator
• fejl på oplader kredsløb
• fejl på tændspole
• fejl på CDI
').'
'

,'
kortslutning
' => '
En kortslutning vil konstant trække strøm fra batteriet og resultatet kan være et afladt batteri så du ikke kan bruger el starteren.

'.afsnit('Sådan tester du for kortslutning','
Hvis der er monteret en alarm eller lignende så afmonter den inden testen da den bruger strøm.

Drej tændingslåsen til OFF.

Afmonter ledningen på batteriets minus (-) terminal (stel forbindelsen) og forbinde et multimeter sat til ampere mellem den afmonterede ledning og batteriets minus (-) terminal.
'.visbilled('1', 'billed0036.jpg', 'kortslutnings test', false, true).'
Nu kan man se hvor meget strøm der bruges når scooteren ikke er ibrug.
Strømforbruget skal helst ikke være over 0,01 ampere men afhænger af scooter modellen.

I servicemanualen til Sym Mio står der at "leaking current" skal være mindre end 1 mA.

Hvis du kan måle over 0,01 ampere så kunne det tyde på en kortslutning.
').'

'.afsnit('Egen erfaring','
På min scooter er strømforbruget 0,01 ampere ved OFF.
0,01 ampere er normalt på min scooter (Kymco Super 8) fordi der er en lys kontrol boks som konstant bruge lidt strøm.

1,00 ampere ved ON.
Når tændingslåsen står på ON og jeg trækker i bremsen så bremselyset lyser så er strømforbruget 2,45 ampere.
').'
'

,'
generator
' => '
Generatorens spoler kan måles ved at tage stikket af som kommer op fra generatorens spoler og måle mellem dem og stelforbindelse (motorblokken) med et multimeter sat til Ohm.
'.visbilled('1', 'billed2554.jpg', 'generator og pickup stik kymco super 8', false, true).'

'.afsnit('Hvis statoren har 1 spole','
På el diagrammer kan en generator med 1 spole se sådan her ud.
'.visbilled('1', 'billed0707.jpg', 'generator tegning med 1 spole', false, true).'
Mål ohm værdien mellem de 2 ledninger som kommer fra statoren og sammenligne med data fra scooterens servicemanual.

Her måles 1,4 Ω på en helt ny stator.
'.visbilled('1', 'billed3384.jpg', 'statorspole ohm måling', false, true).'

På Kymco Super 8 4T skal man kunne måle en modstand på 0,1-1,0 Ω mellem de 2 lednigner fra generatoren ifølge servicemanualen. Men det lader til en måling på 1,4 Ω også er god.
'.visbilled('1', 'billed0898.jpg', 'generator data kymco super 8', false, true).'
Under 2 Ω (set i Generic Ideo servicemanual, grøn/rød - motorblok).

Her kan man se at det er den gule og lyserøde ledning som går om bag svinghjulet og ned til statoren man skal måle modstanden på.
'.visbilled('1', 'billed0314.jpg', 'generator stator ledninger', false, true).'
Mål også Ohm mellem hver ledning fra spolen og stelforbindelsen (motorblokken).
Her skal der ikke være forbindelse.
').'

'.afsnit('Hvis statoren har 2 spoler','
På el diagrammer kan en generator med 2 spoler se sådan her ud.
'.visbilled('1', 'billed1787.jpg', 'generator tegning med 2 spoler', false, true).'
Hvis statoren har 2 spoler så skal man måle ohm værdien på 1 af ledningerne fra statoren og stelforbindelsen (motorblokken).
Derefter måler man på den anden ledning fra statoren og stelforbindelsen (motorblokken).
'.visbilled('1', 'billed0306.jpg', 'fejlfinding af generator', false, true).'
De 2 målinger sammenlignes med data fra scooterens servicemanual.

På Kymco Agility skal man kunne måle 0,2-1,2 Ω på ladespolen og 0,1-1,0 Ω på lysspolen.
På Kymco Like skal man kunne måle 0,4-2 Ω på ladespolen og 0,3-2 Ω på lysspolen.
'.visbilled('1', 'billed0625.jpg', 'generator data kymco agility', false, true).'
Under 2 Ω (set i Generic Ideo servicemanual, hvid - motorblok).

I en Generic servicemanual står at man skal kunne måle 0,5-0,8 Ω på den ene spole og 0,6-1,1 Ω på en anden.
').'

'.afsnit('videoer','
Her er nogen videoer hvor der er en som prøver at finde ud af hvorfor batteriet ikke bliver opladt.
'.visflash('0', 'http://www.youtube.com/watch?v=HDhoR2gRa_o', 'Måler forbindelse fra sator og motor', true).'
(spolen er kortsluttet til motorblokken. Det skal den ikke)

'.visflash('0', 'http://www.youtube.com/watch?v=wcxH3hc15D4', 'Måler vækselsstrøm direkte fra generator', true).'
(måler volt på stator med stikket taget fra og motor køre 23-5X også fucker tallene op med højere omdrejning, kunne være fordi der er en dårligforbindelse)

'.visflash('0', 'http://www.youtube.com/watch?v=kvQW-hgSk6c', 'Måler på spændingsomdeler fra generator', true).'
(motor køre 2,2 volt vekselstrøm på spændingsregulator gul-lyserød)

'.visflash('0', 'http://www.youtube.com/watch?v=h0rtDGVOi4k', 'Måler på batteriet', true).'
(volt stiger ikke nok når motor kører, målt på batteri)
').'

'.afsnit('exciting / source coil (spole som laver strøm til AC CDI)','
Denne spole findes på scootere med AC CDI boks som får strøm fra generatoren (imodsætning til CD CDI som får strøm fra batteriet).

Ledningen fra "exciting coil" kan for eksempel være sort/rød.

For at kontrollere spolen fjernes stikket også måler man mellem den sort/røde ledning fra spolen og motorblokken.

Der skal for eksempel være :
350-450 Ω (set i Baotian motor servicemanual).
140-220 Ω (set i Generic servicemanual).
200 ± 20 Ω ved 20 ° Celsius (set i Generic Ideo servicemanual, blå/hvid eller grøn/hvid - motorblok).
').'
'

,'
pickup
' => '
Her ses pickup\'ens blå/gule ledning.
'.visbilled('1', 'billed0314.jpg', 'generator stator ledninger', false, true).'
Mål ohm værdien på pickup\'ens ledning og stelforbindelsen (motorblokken).

Der skal kunne måles en modstand på 80-160 Ω på en Kymco Super 8.
Der skal kunne måles en modstand på 80-160 Ω (eller 100 - 150 Ω ved 20 °Celsius) på en Kymco Like.
(Dog står der i samme manual at modstanden skal være 40-300 Ω ved 20 °Celsius)
'.visbilled('1', 'billed0300.jpg', 'pickup/pulser', false, true).'
'

,'
spændingsregulator
' => '
'.afsnit('tips til at vide hvornår spændingsregulatoren er defekt','
Pærene springer konstant.
Lyset variere meget afhængig af motorens hastighed.
Batteriet bliver ikke opladt eller over oplades (bliver for varmt).
').'

'.afsnit('reguleret ladespændingsmåling','
For at teste om spændingsregulatoren er istand til at begrænse volt niveauet fra generatorens ladespole kan vi lave en reguleret ladespændingsmåling.

Forbind et multimeter sat til volt jævnstrøm mellem batteriets plus (+) og minus (-) terminaler.
Sluk scooterens lys.
Start motoren og lad den blive varm.
Drej en lille smule på gashåndtaget for at få motoren til at køre i hurtig tomgang.
Volt niveauet skal gerne være mellem 13-16 volt jævnstræm afhængig af scooteren.
Tænd for scooterens lys og bemærk om volt niveauet bliver lavere. Det skal ikke blive lavere af betydning.

På Kymco Super 8 4T skal man kunne måle 14-15 volt ved 5000 omdrejninger/minuttet.
'.visbilled('1', 'billed2555.jpg', 'kymco super 8 4T spændingsregulator data', false, true).'
Se i scooterens servicemanual for de præcise data.
').'

'.afsnit('ohm måling','
Måling af spændingsregulatorens Ohm værdier kræver et "specielt" multimeter da et almindeligt multimeter ikke vil give korrekt måling.

Mål ohm værdierne på de forskellig ben i stikket og sammenlign med tallene i servicemanualen.

Dette eksempel stammer fra Kymco Super 8.
'.visbilled('1', 'billed0299.jpg', 'fejlfinding af spændingsregulator', false, true).'

På en defekt spændingsregulator kunne jeg måle 2 volt mens motoren kørte ved de 2 ledninger som går til statoren.

Dette eksempel stammer fra en Generic servicemanual.
'.visbilled('1', 'billed3364.jpg', 'fejlfinding af spændingsregulator', false, true).'

'.afsnit('Angående måling af ohm på spændingsregulator og CDI','
Jeg har læst at man ikke kan bruge alle slags multimeter til udføre disse test på grund af halvledere.
Modstanden i en halvleder kommer an på hvor mange volt halvlederen får under målingen.
Jeg har læst at man kan bruge en Sanwa eller Kowa tester.

Sanwa Electric Tester SP-10D (07208-0020000) sættes på KΩ.
Kowa Electric Tester TH-5H sættes på 100Ω.
').'
').'
'

,'
CDI
' => '
Måling af CDI kræver et "specielt" multimeter da et almindelig multimeter ikke vil give korrekt måling.

Dette eksempel er fra Kymco Agility.

Fjern CDI boksen fra stikket og mål på benene i CDI boksen.

'.visbilled('1', 'billed0316.jpg', 'CDI test', false, true).'

'.afsnit('Angående måling af ohm på spændingsregulator og CDI','
Jeg har læst at man ikke kan bruge alle slags multimeter til udføre disse test på grund af halvledere.
Modstanden i en halvleder kommer an på hvor mange volt halvlederen får under målingen.
Jeg har læst at man kan bruge en Sanwa eller Kowa tester.

Sanwa Electric Tester SP-10D (07208-0020000) sættes på KΩ.
Kowa Electric Tester TH-5H sættes på 100Ω.
').'
'

,'
air injector
' => '
Mål ohm værdien på air injector stikket med et multimeter.
På en Aprilia Scarabeo med direkte indsprøjtning skal der være 1,3 Ω.
'

,'
fuel injector
' => '
Mål ohm værdien på fuel injector stikket med et multimeter.
På en Aprilia Scarabeo med direkte indsprøjtning skal der være 1,8 Ω.
'

,'
lys
' => '
'.afsnit('lyset tændes ikke','
• pære sprængt
• fejl på knap
• knækket kabel
• sprængt sikring
• svagt batteri
• dårlig forbindelse eller kortslutning
• fejl på blinklys relæ
').'

'.afsnit('forlys bliver svagt','
• kan være helt normalt når motoren køre med lave omdrejninger (lav tomgang)
• kabel eller knap elektrisk modstand er for høj
• fejl på spændingsregulator

Når motoren køre i tomgang kan forlyset skifte til at lyse svagere.
Hvis man så drejer gashåndtaget lidt så motoren køre lidt hurtigere så lyset forlyset normalt igen.
Det er så vidt jeg ved spændingsregulatoren som "skruer ned" for strømmen.
i stedet for at forlyset får de normale 12 volt så får de kun 6 volt når motoren køre i langsom tomgang.
De 6 volt får forlyset til at lyse svagere.
Det er muligvis for at undgå at motoren skal gå ud at spændingsregulatoren skruer ned for forlyset.
').'

'.afsnit('forlyset skifter ikke når der skiftes til kortlys og langtlys','
• fejl på eller sprængt pære
• fejl på kortlys/langtlys knap
').'

'.afsnit('forlyset slukker og tænder af sig selv','
Kymco Super 8 4T ejere har haft problemer hvor de 2 forlys pære har slukket og tændt af sig selv.
Det skyldes af lys kontrol boksen ikke altid får signal fra CDI boksen.
Fejlen ligger i CDI boksen som af en eller anden grund ikke altid laver dette signal.
Problemer har for 2 kymco super 8 4T ejere kommet efter cirka 20 måneder fra scooteren blev købt fra ny.
Problemet kan rettes ved at købe en ny CDI boks.
').'
'

,'
dårlig forbindelse
' => '
Da jeg en dag startede min scooter efter den havde stået i regnvejr ville den ikke køre mere end 50 meter så begyndte den at hakke i det og gik så ud.
Efter at havde stået i lang tid og forsøgt at starte den, lykkedes det for mig at køre hjem uden motorstop. Dog virkede forlyset ikke rigtigt.

Dagen efter virkede ingenting når jeg drejede nøglen i tændingen.
Der var sprunget en sikring.

Jeg tog det forreste skjold af for at kigge ind til forlyset for at se om der var noget regn der kunne havde trængt ind.

Så fandt jeg dette på stikket til tændingslåsen.
'.visbilled('1', 'billed1294.jpg', 'tændingslås stik ir', false, true).'
Der er en masse småsten/sand på og det er tydeligt at stikket har været vådt.

Det hvide er måske salt fra vejen da dette er taget lige i begyndelsen af foråret.
Det grøn/blå må være ir fra den røde lednings ben.
'.visbilled('1', 'billed1295.jpg', 'tændingslås stik ir', false, true).'
Stikket har hængt nedad så der har nok hængt dråber i stikket så der kan gå strøm mellem den røde og sorte ledning.

Jeg brugte en tandbørste til at rense stikket med men så knak den røde ledning af.
'.visbilled('1', 'billed1296.jpg', 'tændingslås stik ir ben knækket', false, true).'
Så afisolerede jeg den røde ledning og satte den i stikket og samlede stikket, skiftede sikringen også virkede den igen.

Jeg tror det er bedst at finde en måde og lukke under kablerne så vand osv ikke kan blive slynget op nede fra dækket.
'

,'
horn
' => '
Hornet kan testes ved at forbinde det direkte til batteriet.
'.visbilled('1', 'billed2047.jpg', 'horn justering', false, true).'
Bag på hornet sidder en skrue som man kan justere på hvis hornet ikke giver lyd eller lyden ikke er høj nok.
'.visbilled('1', 'billed2046.jpg', 'horn kymco super 8', false, true).'
'

,'
starterrelæ
' => '
Da der var en bruger som spurgte hvor mange Ohm spolen i et typisk starterrelæ skal have målte jeg min spole til 80,5 Ohm.
Spolen er mellem de 2 mindste/tyndeste terminaler.
'.visbilled('1', 'billed3785.jpg', 'starterrelæ stik', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
