<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "Introduktion til fejlfinding af scootere og knallerter";
$overskrift = "Introduktion til fejlfinding af scootere og knallerter";
$metadescription = "find og ret fejl på scootere/knallerter der for eksempel ikke vil starte eller køre dårligt";

$setup['sideikon']               = 'ikoner/ikon_fejlfinding2.png';

$databasecenter = array(

'
introduktion
' => '
På denne side er det meningen at du skal kunne få hjælp til at finde og rette fejl på scootere og knallerter.

Fejlfindingssiderne handler primært om scootere som har 4 takt motor med karburator.

Du kan også spørge i '.forummet().' eller '.kontaktemig().' hvis du vil have hjælp.
'

,'
forudsætninger for at motoren kan starte
' => '
Et udbredt problem er at motoren ikke kan starte.

For at motoren skal kunne starte skal følgende ting være iorden.

'.afsnit('kickstarter','
Kickstarteren skal være i stand til at dreje krumtapakslen rundt.
Hvis den ikke kan det kan det være fordi delene ikke sidder rigtigt for eksempel hvis variatordækslet ikke er sat helt rigtigt på.
Hvis kickstarterarmen ikke springer tilbage af sig selv kan det være fordi kickstarterakslen trænger til smørring eller fjederen ikke virker.
'.ahref('kickstarter.php', 'Kickstarter').'
').'

'.afsnit('el starter','
El starteren skal ligesom kickstarteren være i stand til at dreje krumtapakslen rundt.

Check '.ahref('elektrisk_sikring.php#sikring', 'sikringerne').'
'.ahref('service_fejlfinding_elektrisk.php#darlig_forbindelse', 'Dårlig forbindelse').'
'.ahref('service_fejlfinding_starter.php', 'Starter').' og '.ahref('elektrisk_starter.php', 'Starter').'
Batteriet er afladt - '.ahref('service_elektrisk.php#kontroller_batteri', 'Kontroller batteri').'
'.ahref('#batteri_oplades_for_lidt', 'Batteri oplades for lidt').'.
'.ahref('#batteri_oplades_for_meget', 'Batteri oplades for meget').'.
Hvis batteriet oplades for lidt eller for meget så kan det være '.ahref('service_fejlfinding_elektrisk.php#spendingsregulator', 'spændingsregulatoren').' der er fejl på.
På nogle scootere er der en '.ahref('stotteben.php#stottebenskontakt', 'støttebenskontakt').' ved sidestøttebenet så el starteren kun kan få strøm hvis sidestøttebenet er slået op.
Ved bremsegrebene sidder '.ahref('bremser.php#bremsekontakt', 'bremsekontakter').'. Test kontakerne ved at kontroller at bremselyset lyser når bremserne bruges.
Undersøg stelforbindelsesledningerne til stel og motorblok har god kontakt.
Undersøg '.ahref('elektrisk_kontakter.php#tendingslas', 'tændingslås').'.
'.ahref('starterdrev.php', 'Starterdrev').'
').'

'.afsnit('benzin','
Kontroller at det lille hul i '.ahref('service_fejlfinding_benzintank.php#benzindeksel', 'benzindækslet').' ikke er tilstoppet.
Fyld benzin i benzintanken.
Hvis scooteren har gammel benzin i tank og karburator så tøm tank og karburator og fyldt frisk benzin på.
Undersøg om '.ahref('benzintank.php#benzinfilter', 'benzinfilteret').' er tilstoppet.
Kontroller den '.ahref('service_fejlfinding_benzintank.php#automatisk_benzinhane', 'automatiske benzinhane').'.
Kontroller '.ahref('karburator.php#svommer_og_naleventil', 'nåleventilen').' og '.ahref('service_karburator.php#juster_svommer_hojde', 'svømmer højde').'.
Rens karburatorens '.ahref('karburator.php#dyser', 'hoveddyse og tomgangsdyse').' og de små gange i karburatoren med '.ahref('smorelse.php#karburatorrens', 'karburatorrens').' eller trykluft.
').'

'.afsnit('luft','
'.ahref('service_luftfilter.php#rens_luftfilter', 'Rens luftfilter').' eller sæt et nyt i.
').'

'.afsnit('korrekt blandingsforhold af benzin og luft','
Kontroller at dele som luftfilter, karburator, indsugningsstuds, isolatorstykke, topstykke og vakuumslange sidder tæt sammen så der ikke kan komme falsk luft ind.
Undersøg vakuumslanger for utætheder.
'.ahref('service_fejlfinding_karburator.php#mager_fed_blanding', 'Mager/fed blanding').'
').'

'.afsnit('kompression','
'.ahref('service_fejlfinding_motor.php#kompression', 'Kompression').'
').'

'.afsnit('gnist','
'.ahref('#tendror', 'Tændrør').'
'.ahref('service_elektrisk.php#kontroller_batteri', 'Kontroller batteri').'
'.ahref('service_fejlfinding_elektrisk.php#generator', 'Generator').'
'.ahref('service_fejlfinding_elektrisk.php#pickup', 'Pickup').'
'.ahref('service_fejlfinding_elektrisk.php#tendspole__tendrorskabel_og_tendrorshette', 'Tændspole, tændrørkabel og tændrørshætte').'
'.ahref('service_fejlfinding_elektrisk.php#darlig_forbindelse', 'Dårlig forbindelse').'
Check '.ahref('elektrisk_sikring.php#sikring', 'sikringerne').'
').'
'

,'
motor vil ikke starte eller er svær at starte
' => '
'
. fejlfinding('a', 'check om benzin når karburator ved at løsne drænskruen i bunden af karburatoren')
. fejlfinding('b', 'benzin når karburator', 'benzin når ikke karburator')
. fejlfinding('c', array(
 'tom benzintank'
,'tilstoppet benzinslange mellem benzintank og karburator'
,'tilstoppet nåleventil hul'
,'tilstoppet slanger i "fuel tank evaporation system"'
,'tilstoppet benzindæksel åndehul'
,'tilstoppet benzinfilter'
,'tilstoppet benzinsi i benzintank'
,'fejl på automatisk benzinhane eller benzinpumpe'
,'tilstoppet/bukket/skadet/afmonteret vakuumslange på automatisk benzinhane eller benzinpumpe'
))

. fejlfinding('a', 'fjern tændrør og sæt det i tændrørshætten og hold tændrørets gevind på motorblokken mens forsøges startet')
. fejlfinding('b', 'god gnist', 'svag eller ingen gnist')
. fejlfinding('c', array(
 'fejl på tændrør'
,'kulstof/olie belægning på tændrør'
,'fejl på CDI'
,'fejl på generator'
,'fejl på pickup spole'
,'fejl/kortslutning på tændspole'
,'fejl/kortslutning på tændrørskabel'
,'fejl på starter knap'
))

. fejlfinding('a', 'test cylinder kompression')
. fejlfinding('b', 'normal kompression', 'lav eller ingen kompression')
. fejlfinding('c', array(
 'ventil spillerum for lille'
,'dårlig ventil og ventilsæde kontakt'
,'slidt cylinder, stempel og stempelringe'
,'utæt topstykke pakning'
,'ødelagt ventil'
,'forkert ventil timing'
,'tændrør sidder løst'
,'topstykke er ikke spændt nok'
,'ødelagt ventilfjeder'
,'utæt motorblok for "pre-compression" (2 takt)'
))

. fejlfinding('a', 'forsøg at start motor på normal vis')
. fejlfinding('b', 'forbrændning opnås ikke', 'forbrændning opnås men kan ikke køre i tomgang')
. fejlfinding('c', array(
 'fejl på automatisk choker'
,'luft utæt ved indsugningsstuds'
,'forkert tændings timing'
,'forkert justeret tomgangskrue'
,'forkert justeret blandingsskrue'
))

. fejlfinding('a', 'fjern tændrør og efterse igen')
. fejlfinding('b', 'tørt tændrør', 'vådt tændrør')
. fejlfinding('c', array(
 'oversvømmet karburator. For højt benzinniveau'
,'fejl på automatisk choker'
,'gashåndtag/vippegasspjæld er åbnet for meget'
))

. fejlfinding('a', 'undersøg '.ahref('service_fejlfinding_karburator.php#automatisk_choker', 'automatisk choker').'')

,'
motor mangler kraft
' => '
'
. fejlfinding('a', 'start motor og drej langsomt på gashåndtaget')
. fejlfinding('b', 'motor omdrejninger øges', 'motor omdrejninger øges ikke nok')
. fejlfinding('c', array(
 'tilstoppet luftfilter'
,'dårlig benzin kvalitet'
,'der kommer ikke nok benzin'
,'tilstoppet benzindæksel åndehul'
,'tilstoppet slanger i "fuel tank evaporation system"'
,'tilstoppet udstødning'
,'fejl på automatisk choker'
,'revnet gummi membran på nålegasspjæld'
,'fejl på automatisk benzinhane'
,'svagt batteri'
,'løst kabel eller forbindelse'
))

. fejlfinding('a', 'drejer baghjulet rundt når der gives gas ?')
. fejlfinding('b', 'ja', 'nej')
. fejlfinding('c', array(
 'slidt/knækket kilerem'
,'svag eller knækket koblingstrykfjeder'
,'slidte ruller'
,'fejl på remskiver'
,'koblingsbelægning eller koblingsklokke slidt/skadet'
,'skadet reduktionsgear'
))

. fejlfinding('a', 'check tændings timing med stroboskoplampe')
. fejlfinding('b', 'korrekt timing', 'forkert timing')
. fejlfinding('c', array(
 'fejl på CDI'
,'fejl på pickup spole'
,'fejl på generator'
))

. fejlfinding('a', 'check ventil spillerum')
. fejlfinding('b', 'korrekt', 'forkert')
. fejlfinding('c', array(
 'forkert justering af ventil spillerum'
,'slidte ventilsæder (ventil for langt fremme)'
))

. fejlfinding('a', 'test cylinder kompression')
. fejlfinding('b', 'normal kompression', 'ingen eller lav kompression')
. fejlfinding('c', array(
 'dårlig ventil og ventilsæde kontakt'
,'slidt cylinder og stempelringe'
,'utæt topstykke pakning'
,'forkert ventil timing'
,'ventiler skadet'
,'utæt motorblok for "pre-compression" (2 takt)'
))

. fejlfinding('a', 'check om karburator dyserne er tilstoppet')
. fejlfinding('b', 'ikke tilstoppet', 'tilstoppet')
. fejlfinding('c', array(
 'tilstoppet karburator dyser'
))

. fejlfinding('a', 'fjern tændrør og efterse')
. fejlfinding('b', 'tændrør er tørt og ikke misfarvet', 'tændrør har kulstof/oliebelægning eller er misfarvet')
. fejlfinding('c', array(
 'kulstof/olie belægning'
,'tændrør er ikke blevet rengjort nok'
,'forkert varmeværdi på tændrør'
))

. fejlfinding('a', 'fjern oliepind og check olieniveau og olie')
. fejlfinding('b', 'korrekt olieniveau og olie er ikke forurenet', 'forkert olieniveau eller olie er forurenet')
. fejlfinding('c', array(
 'olieniveau for højt'
,'olieniveau for lavt'
,'olie er ikke blevet skiftet'
))

. fejlfinding('a', 'fjern cylinder "head oil pipe bolt" og efterse')
. fejlfinding('b', '"valve train" smøres korrekt', '"valve train" smøres ikke korrekt')
. fejlfinding('c', array(
 'tilstoppet "oil pipe"'
,'fejl på olie pumpe'
))

. fejlfinding('a', 'check om motor overophedes')
. fejlfinding('b', 'motor overophedes ikke', 'motor overophedes')
. fejlfinding('c', array(
 'slidt cylinder, stempel og stempelringe'
,'for lidt benzin i benzin/luft blanding'
,'dårlig benzin kvalitet'
,'for meget kulstof belægning i forbrændingskammer'
,'for tidlig tænding'
))

. fejlfinding('a', 'accelerer hurtigt flere gange eller kør ved høj hastighed')
. fejlfinding('b', 'motor banker ikke', 'motor banker')
. fejlfinding('c', array(
 'for meget kulstof belægning i forbrændingskammer'
,'dårlig benzin kvalitet'
,'for lidt benzin i benzin/luftblanding'
,'for tidlig tænding'
), null, 0)

,'
motor dårlig ydelse (specielt ved tomgang og lav hastighed)
' => '
'
. fejlfinding('a', 'check tændings timing med stroboskoplampe')
. fejlfinding('b', 'korrekt timing', 'forkert timing')
. fejlfinding('c', array(
 'fejl på CDI'
,'fejl på pickup spole'
,'fejl på generator'
))

. fejlfinding('a', 'check/juster karburator blandingsskrue/luftskrue')
. fejlfinding('b', 'korrekt justeret', 'forkert justeret')
. fejlfinding('c', array(
 'benzin/luftblanding for fed'
,'benzin/luftblanding for mager'
))

. fejlfinding('a', 'check området omkring indsugningsstudsen for luftutætheder')
. fejlfinding('b', 'ingen luftutætheder', 'luftutæt')
. fejlfinding('c', array(
 'dårlig o-ring'
,'karburator skruer ikke spændt nok'
,'skadet isolator gummi'
,'ødelagt vakuumslange'
))

. fejlfinding('a', 'fjern tændrør og sæt det i tændrørshætten og hold tændrørets gevind på motorblokken mens motoren startes')
. fejlfinding('b', 'god gnist', 'svag eller middel gnist')
. fejlfinding('c', array(
 'fejl eller kulstof/olie belægning på tændrør'
,'fejl på CDI'
,'fejl på generator'
,'fejl på tændspole'
,'fejl/kortslutning på tændrørskabel'
,'fejl på starter knap'
))

. fejlfinding('a', 'check air cut-off valve')
. fejlfinding('b', 'god', 'fejl')
. fejlfinding('c', array(
 'fejl på air cut-off valve'
,'skadet vakuumslange'
,'tilstoppet eller skadet udluftningshul'
))

. fejlfinding('a', 'fjern slangen fra ventildækslet og se om der kommer hvid røg')
. fejlfinding('b', 'ingen røg', 'hvid røg')
. fejlfinding('c', array(
 'slidte, defekte eller fastsatte stempelringe'
), null, 0)

,'
motor dårlig ydelse ved høj hastighed
' => '
'
. fejlfinding('a', 'check tændings timing med stroboskoplampe')
. fejlfinding('b', 'korrekt timing', 'forkert timing')
. fejlfinding('c', array(
 'fejl på CDI'
,'fejl på pickup spole'
,'fejl på generator'
))

. fejlfinding('a', 'check benzin tilførelse fra benzinhane')
. fejlfinding('b', 'benzin flyder frit', 'benzin flyder ikke frit')
. fejlfinding('c', array(
 'tom benzintank'
,'tilstoppet benzinslange eller benzinfilter'
,'tilstoppet benzindæksel åndehul'
))

. fejlfinding('a', 'check ventil spillerum')
. fejlfinding('b', 'korrekt', 'forkert')
. fejlfinding('c', array(
 'forkert justeret ventil spillerum'
,'slidt knastaksel'
,'slidt ventilsæde'
))

. fejlfinding('a', 'test cylinder kompression')
. fejlfinding('b', 'normal kompression', 'unormal kompression')
. fejlfinding('c', array(
 'dårlig ventil og ventilsæde kontakt'
,'slidt cylinder og stempelringe'
,'utæt topstykke pakning'
,'forkert ventil timing'
))

. fejlfinding('a', 'check benzinpumpe for benzin tilførelse')
. fejlfinding('b', 'benzin flyder frit', 'benzin flyder ikke frit')
. fejlfinding('c', array(
 'tom benzintank'
,'tilstoppet benzinslange eller benzinfilter'
,'fejl på kulstof beholder'
,'fejl på automatisk choker'
))

. fejlfinding('a', 'check om karburator dyserne er tilstoppet')
. fejlfinding('b', 'ikke tilstoppet', 'tilstoppet')
. fejlfinding('c', array(
 'tilstoppede dyser'
))

. fejlfinding('a', 'check ventil timing')
. fejlfinding('b', 'korrekt', 'forkert')
. fejlfinding('c', array(
 'knastaksel justeringsmærke ikke justeret korrekt'
))

. fejlfinding('a', 'check ventil fjeder spænding')
. fejlfinding('b', 'ikke svag', 'svag fjeder')
. fejlfinding('c', array(
 'fejl på fjeder'
), null, 0)

,'
motor dårlig acceleration
' => '
'.afsnit('fejl antænding ved acceleration','
• fejl på tændingssystem
• mager blanding
• fejl på accelerator pumpe
').'

'.afsnit('dårlig acceleration','
• karburator utæt eller tilstoppet
• fejl på automatisk choker
• fejl på tænding (CDI eller pickup)
• motorolie viskositet for høj
• bremser sidder fast (på bremseskriver kan snavs have sat sig ved stempel forsejlingsringene
• kobling glider
• kilerem slidt
• fejl på variator
').'
'

,'
motor lyde
' => '
'.afsnit('tændingsbanken','
• Forkert blandingsforhold
• Benzinen har for lavt oktantal
• Forkert tændingstiming
• Motoren bliver ikke kølet nok
• Forkert tændrør varmeværdi
').'

'.afsnit('for meget motor støj','
• for stort kugleleje spillerum
• for stort plejlstangs rulleleje spillerum
').'

'.afsnit('unormal støj fra stempel','
• slidt cylinder, stempel og stempelringe
• slidt stempel pind hul og stempel pind
').'

'.afsnit('støj eller vibrationer','
• lejer eller aksel slidt
• tandhjul slidte eller knækket
• koblingsklokke slidt ujævnt
• aksel bukket
• løs koblingsmøtrik eller koblingsklokkemøtrik
').'
'

,'
batteri
' => '
'.afsnit('ingen strøm','
• dødt batteri
• afmonteret batteri kabler
• sikring sprunget
• fejl på tændingssystem
').'

'.afsnit('lav strøm','
• svagt batteri
• batterikabler sidder løst
• fejl på ladesystem
• fejl på spændingsregulator
').'

'.afsnit('mellem strøm','
• batterikabler sidder løst
• kabler sidder løst ved ladesystemet
• løs forbindelse eller kortslutning i lys systemet
').'

'.afsnit('tegn på at batteriet trænger til opladning','
• Startermotoren har svært ved at dreje motoren i gang.
• Lyset på scooteren er svagt.
• Blinklyset blinker uregelmæssigt eller holder op med at blinke.
• Hornet er lavt.
• Scooteren har ikke været brugt i over 2 uger.
• I koldt vejr nedsættes batteriets kapacitet (Ah) så om vinteren lægger man mere mærke til at batteriet ikke er fuldt.
').'
'

,'
batteri oplades for lidt
' => '
'
. fejlfinding('a', 'start motor og mål volt på batteri')
. fejlfinding('b', 'volt stiger', 'volt stiger ikke')
. fejlfinding('c', array(
 'dødt batteri'
,'fejl på batteri'
))

. fejlfinding('a', 'mål modstand på generator spole/spoler')
. fejlfinding('b', 'normal', 'for høj modstand')
. fejlfinding('c', array(
 'fejl på generator spole'
,'knækket gul ledning'
,'løs forbindelse'
))

. fejlfinding('a', 'forbind batteriets (+) kabel til spændingsregulator stikkets røde ledning og forbind batteriets (-) kabel til jordforbindelse og mål volt')
. fejlfinding('b', 'normal volt', 'ingen volt')
. fejlfinding('c', array(
 'knækket rød ledning'
))

. fejlfinding('a', 'check om spændingsregulator stik er løst')
. fejlfinding('b', 'normal', 'unormalt')
. fejlfinding('c', array(
 'fejl på spændingsregulator'
,'dårlig forbundet stik'
))

. fejlfinding('a', 'fejl på generator')

,'
batteri oplades for meget
' => '
'
. fejlfinding('a', 'kør en lang tur og mærk om batteriet er varmt')
. fejlfinding('b', 'ikke varmt', 'varmt')
. fejlfinding('c', array(
 'fejl på batteri'
,'batteriet har for lille kapacitet (Ah)'
))

. fejlfinding('a', 'forbind batteriets (+) kabel med spændingsregulator stikkets sorte eller grønne ledning og forbind batteriets (-) kabel til jordforbindelse og mål volt')
. fejlfinding('b', 'batteri har volt når tændingslås er drejet til ON', 'batteri har ingen volt når tændingslås er drejet til ON')
. fejlfinding('c', array(
 'knækket sort eller grøn ledning'
))

. fejlfinding('a', 'check om spændingsregulator stik er løst')
. fejlfinding('b', 'normal', 'unormal')
. fejlfinding('c', array(
 'dårligt forbundet stik'
))

. fejlfinding('a', 'fejl på spændingsregulator')

,'
tændrør
' => '
'
. fejlfinding('a', 'udskift med nyt tændrør og check igen')
. fejlfinding('b', 'svag eller ingen gnist', 'god gnist')
. fejlfinding('c', array(
 'fejl på gammelt tændrør'
))

. fejlfinding('a', 'check om tændrørshætte og tændrørskabel sidder løst')
. fejlfinding('b', 'ikke løst', 'løst')
. fejlfinding('c', array(
 'løs tændrørshætte'
))

. fejlfinding('a', 'check om CDI stik er løst')
. fejlfinding('b', 'ikke løst', 'løst')
. fejlfinding('c', array(
 'dårligt forbundet stik'
))

. fejlfinding('a', 'mål modstand mellem CDI stik terminaler')
. fejlfinding('b', 'normal', 'unormal')
. fejlfinding('b', '', 'check de relaterede dele')
. fejlfinding('b', '', 'normal')
. fejlfinding('c', array(
 'knækket hoved ledningsnet'
,'dårligt forbundet stik'
))

. fejlfinding('b', '', 'unormal')
. fejlfinding('c', array(
 'fejl på starter knap'
,'fejl på pickup spole'
,'fejl på tændspole'
))

. fejlfinding('a', 'check CDI med en CDI tester')
. fejlfinding('b', 'normal', 'unormal')
. fejlfinding('c', array(
 'fejl på CDI'
))

. fejlfinding('a', 'check tændspole med CDI tester')
. fejlfinding('b', '', 'unormal')
. fejlfinding('c', array(
 'fejl på tændspole'
), null, 0)

.'
'.afsnit('tændrør begynder at gniste når tændingen er drejet til ON','
Giantco ejere skriver om at deres tændrør begynder at gniste allerede når de sætter nøglen i tændingen og drejer til ON.
Fejlen skulle ligge i CDI boksen og løsningen skulle være at købe en ny CDI boks som de hos t-hansen kalder "CDI enhed B version".
').'
'
. fejlfinding('a', 'fjern tændrøret, sæt det i tændrørshætten og hold tændrørets gevind på motorblokken og start motoren')
. fejlfinding('b', 'fed blå gnist mellem elektroderne', 'tynd, gul eller ingen gnist')
. fejlfinding('c', array(
 'fejl på tændrør'
,'forkert elektrode afstand på tændrør'
))
. fejlfinding('a', 'check tændrørets modstand mellem centerelektroden og toppen af tændrøret. Sammenlign modstanden med et nyt tændrør af korrekt type')
. fejlfinding('b', 'lille eller ingen forskel', 'stor forskel')
. fejlfinding('c', array(
 'sæt nyt tændrør i motor'
))
. fejlfinding('a', '')
. fejlfinding('b', '', 'lortet virker stadig ikke')
. fejlfinding('c', array(
 'løse, korroderet eller skadet ledninger eller forbindelser'
,'fejl på tændrør'
,'fejl på højspændingsspole'
,'fejl på tændrørshætte'
,'fejl på tændingslås'
,'fejl på startsspærre'
,'fejl på generator'
,'fejl på pickup'
,'fejl på CDI/ECU'
), null, 0)

.'
Tændrørets modstand kan måles med et multimeter mellem toppen af tændrøret og centerelektrodens spids.
'

,'
benzinforbrug for højt
' => '
'
. fejlfinding('a', 'check om variatoren er begrænset ved de forreste remskiver')
. fejlfinding('b', 'ubegrænset', 'begrænset med ring eller lignende')
. fejlfinding('c', array(
 'fjern ringen/pladen eller skift bøsningen mellem de forreste remskiver'
,''
))

. fejlfinding('a', 'check dækkene for korrekt dæktryk når de er kolde')
. fejlfinding('b', 'korrekt dæktryk', 'forkert dæktryk')
. fejlfinding('c', array(
 'pump dækkene til korrekt dæktryk'
))

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
