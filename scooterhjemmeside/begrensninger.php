<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['sideikon']               = 'ikoner/ikon_begrensninger2.png';

$title = "begrænsninger på scootere og knallerter som nedsætter topfarten";
$overskrift = "begrænsninger på scootere og knallerter som nedsætter topfarten";
$metadescription = "begrænsninger på scootere og knallerter får dem til at køre langsommere og kan også gøre at de bruger mere benzin, larmer mere og slides hurtigere. Her kan du lærer om hvor begrænsningerne sidder og hvordan du fjerner dem.";

$databasecenter = array(

'
introduktion
' => '
'.visbilled('1', 'billed2586.jpg', 'speedometer', false, true).'
Begrænsninger er ændringer på scootere og knallerter som producenten udfører for at overholde loven i det land hvor køretøjet skal sælges.

Formålet med begrænsningerne er at nedsætte scooterens topfart til enten 25, 30 eller 45 km/t.

Begrænsningerne kan også have uønskede bivirkninger som højere benzin forbrug, højere olie forbrug, mere støj, mere varmeudvikling og mere slid på delene på grund af motoren køre med unødigt høje omdrejninger.

Forskellen på scootere og knallerter der har en topfart på enten 25, 30 og 45 km/t ligger i begrænsningerne som er lidt forskellige.
'

,'
hvor er begrænsningerne ?
' => '
Ofte er scootere og knallerter begrænset flere steder.
For eksempel kan der være 5 begrænsninger, men det kommer an på hvilken model det er.

Hvis du vil vide hvordan en bestemt scooter er begrænset så find den i '.ahref('galleri.php', 'Galleri').' også gå ind på dens side og se om der står noget i dataen.
Se også '.ahref('http://www.billig-scooter.dk/portal/begraensninger_oversigt.php', 'Begrænsninger / oversigt (billig-scooter.dk)').' som viser hvor nogle scootere er begrænset.
'.ahref('http://www.scootergalleri.dk/forum', 'scootergalleri.dk/forum').' har også en masse info om begrænsninger som du kan prøve og søge efter.



Her følger en oversigt med forskellige begrænsninger, billeder og kort forklaring.

'.afsnit('variator','
Der kan sidde en løs ring mellem de forreste remskiver.
For at fjerne denne begrænsning skal ringen fjernes.
'.visbilled('1', 'billed0084.jpg', 'gliderør med ring', false, true).'

På gliderøret kan være en forhøjning.
For at fjerne denne begrænsning skal man købe et glat gliderør og udskifte det.
'.visbilled('1', 'billed1035.jpg', 'begrænsning gliderør med forhøjning glat gliderør', false, true).'

Plade bag på den inderste remskive.
For at fjerne denne begrænsning skal pladen fjernes.
'.visbilled('1', 'billed1034.jpg', 'begrænsning plade i remskive', false, true).'
').'

'.afsnit('CDI','
CDI boksen kan begrænse hvor mange omdrejninger motoren maksimalt kan køre med.
For at fjerne denne begrænsning skal CDI boksen skiftes ud med en ubegrænset CDI boks eller der kan på nogle modeller fjernes en ledning, klippes en ledning over eller saves et bestemt sted i boksen for at save en ledning over inden i boksen.
'.visbilled('1', 'billed0086.jpg', 'CDI kymco super 8', false, true).'
').'
'.afsnit('ECU','
ECU\'en kan ligesom CDI\'en boksen være begrænset.
For at fjerne denne begrænsning kan man for eksempel omprogrammer ECU\'en med en gameboy med aprilia DITech interface.
'.visbilled('1', 'billed0091.jpg', 'ECU honda zoomer aprilia DITech', false, true).'
').'
'.afsnit('controller','
Controlleren (findes på elektrisk scooter) kan ligesom CDI og ECU være begrænset.
For at fjerne denne begrænsning kan man for eksempel hive et stik fra hinanden.
'.visbilled('1', 'billed2168.jpg', 'controller begrænsning stik', false, true).'
').'
'.afsnit('pickup ved kobling','
En pickup i variatordækslet kan være forbundet med CDI boksen for at måle hvor hurtigt koblingsklokken og dermed baghjulet drejer rundt.
For at fjerne denne begrænsning skal ledningen fjernes fra stikket.
'.visbilled('1', 'billed0093.jpg', 'pickup i variator skjold ved koblingsklokke', false, true).'
').'

'.afsnit('karburator','
Karburatorens hoveddyse kan have en mindre indre diameter.
For at fjerne denne begrænsning skal der sættes en større hoveddyse i og samtidig skal begrænsningen i luftfilterkassen fjernes så benzin/luft blandingsforholdet forbliver korrekt.
'.visbilled('1', 'billed0087.jpg', 'karburator kymco super 8', false, true).'

Der kan sidde en skrue på indersiden af vakuumlåget som forhindre vakuumstemplet i at komme helt op.
For at fjerne denne begrænsning skal skruen fjernes.
'.visbilled('1', 'billed0088.jpg', 'karburator låg skrue', false, true).'

Ved siden af tomgangsskruen kan der sidde en "stopper" som gør at vippegasspjældet ikke kan drejes fuldt.
For at fjerne denne begrænsning skal "stopperen" muligvis bukkes eller saves af.
'.visbilled('1', 'billed0730.jpg', 'karburator vippegasspjælds stopper', false, true).'
').'

'.afsnit('ruller','
Jeg er ikke sikker på at rullerne bruges som hastighedsbegrænsning men der kan i hvert fald være forskel på deres vægt alt efter om scooteren er begrænset eller ej.
Rullerne kan være lettere eller tungere end ubegrænset.
For at fjerne denne begrænsning skal rullerne skiftes ud med ruller med den korrekte vægt.
'.visbilled('1', 'billed0085.jpg', 'variator ruller', false, true).'
').'

'.afsnit('tragt i luftfilterkasse','
Der kan sidde en tragt i luftfilterkassen som giver større modstand for luften der suges ind.
For at fjerne denne begrænsning skal tragten fjernes og samtidig skal hoveddysen i karburatoren skiftes til en større hoveddyse så benzin/luft forholdet forbliver korrekt.
'.visbilled('1', 'billed1523.jpg', 'begrænsning tragt i luftfilter kasse kymco super 8', false, true).'
').'

'.afsnit('kobling','
Den store koblingstrykfjeder kan være for stram så de bagerste remskiver ikke kan kommer helt fra hinanden.
For at fjerne denne begrænsning skal koblingstrykfjederen skiftes ud med en tilpas stram fjeder.
Koblingsstøttebøsningen kan også være for høj.
Rullernes vægt skal muligvis ændres hvis man sætter en anden koblingstrykfjeder i så de passer sammen.
'.visbilled('1', 'billed0090.jpg', 'koblingstrykfjeder', false, true).'
').'

'.afsnit('isolatorstykke, tragt og plade med huller','
Isolatorstykket mellem indsugningsstudsen og cylinderen kan have en mindre indre diameter som giver modstand for benzin/luft gennemstrømningen.
For at fjerne denne begrænsning skal isolatorstykket skiftes ud med et isolatorstykke som har samme indre diameter som indsugningsporten til topstykket eller diamteren kan bores op.
'.visbilled('1', 'billed0727.jpg', 'isolatorstykke', false, true).'

Der kan sidde en tragt under indsugningsstudsen som begrænser den mængde luft/benzin der kan suges ind i motoren.
For at fjerne denne begrænsning skal tragten fjernes.
'.visbilled('1', 'billed1968.jpg', 'begrænsning ved reed valve', false, true).'

Der kan sidde en metalplade mellem karburator og luftfilterkanalen som begrænser mængden af luft.
For at fjerne denne begrænsning skal metalpladen fjernes.
Der skal muligvis også en større hoveddyse i når metalpladen fjernes.
'.visbilled('1', 'billed2176.jpg', 'plade med huller i karburator', false, true).'

').'

'.afsnit('udstødning','
Forrøret på udstødningen kan have mindre indre diameter.
For at fjerne denne begrænsning kan man på nogle udstødninge skrue forrøret af og købe et ubegrænset forrør og sætte på, ellers kan hele udstødningen skiftes til en ubegrænset udstødning.

Der kan sidde en påsvejset ring/tragt i starten af forrøret som også giver mindre indre diameter.
For at fjerne denne begrænsning kan svejsepunkterne bores væk og ringen/tragten fjernes.
'.visbilled('1', 'billed3900.jpg', 'begrænsnings ring påsvejset i udstødning', false, true).'

Der kan være svejset et blindrør på forrøret.
For at fjerne denne begrænsning skal blindrøret svejses af nær forrøret hvorefter stumpen kan klemmes sammes og svejses tæt, eller man kan købe en ubegrænset udstødning uden blindrør.
'.visbilled('1', 'billed3901.jpg', 'begrænsning blindrør påsvejset udstødning', false, true).'
').'

'.afsnit('gearskift','
På modeller med for eksempel 6 gear kan gearskiftemekanismen være begrænset så man for eksempel kun kan bruge de laveste 3 gear.
For at fjerne denne begrænsning skal gearskiftemekanismen udskiftes med en ubegrænset gearskiftemekanisme.
'.visbilled('1', 'billed2465.jpg', 'gearskiftemekanisme', false, true).'
'.visbilled('1', 'billed3334.jpg', 'gearskiftemekanisme', false, true).'
').'

'.afsnit('tandhjul','
På modeller med kædetræk kan forreste og bagerste tandhjul have en anden størrelse (antal tænder) som giver en lavere gearing.
For at fjerne denne begrænsning skal for eksempel det bagerste tandhjul udskiftet med et tandhjul med færre tænder eller det forreste tandhjul udskiftet med et tandhjul med flere tænder.
'.visbilled('1', 'billed2466.jpg', 'tandhjul 14 og 48 tænder', false, true).'
').'

'.afsnit('plomb i cylinder','
I indsugningshullet på cylinderen kan sidde en såkaldt plomb (kan vel også staves plumb) der er en aflang ring der begrænser mængden af luft/benzin ved at gøre diameteren mindre.
For at fjerne denne begræsning kan ringen bores ud eller man kan købe en ubegrænset cylinder uden plomb.
'.visbilled('1', 'billed1731.jpg', 'cylinder med plomb', false, true).'
').'

'.afsnit('cylinder stopper','
I motorblokken hvor cylinderskørtet sættes ind kan være en kant som gør at uoriginale cylindere ikke kan sættes i fordi skørtet rammer kanten.
Den originale cylinder kan sættes i fordi den har til tilsvarende indhak på cylinderskørtet.
Kan ses her '.ahref('http://www.scootergalleri.dk/fotoalbum/tuningprojekter/83105-hjaelp_til_speedfight_2').'
').'

'.afsnit('knækbolte','
Knækbolte er ikke begrænsninger men de kan indikere hvor der er en begrænsning.
Så hvis der sidder en knækbolt på indsugningsstudsen eller på forrøret så kunne det være et tegn på at der er en begræsning under indsugningsstudsen eller at forrøret er begrænset.
').'

'.afsnit('andre begrænsninger','
Du kan skrive i '.forummet().' eller '.kontaktemig().' hvis du kender andre typer begrænsninger.
').'
'

,'
video
' => '
'.visflash('0', "http://www.youtube.com/watch?v=42WXjFKyyic", 'her viser HaSse hvor begrænsningerne sidder', true).'
'

,'
variator
' => '
På nogle scootere er variatoren begrænset med en løs ring på gliderøret.
På andre scootere med en forhøjning på gliderøret.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3772.jpg', array('gliderør', 'med og uden forhøjning og en løs ring ved siden af'))
   ,galleri('highslide', '', 'billed3773.jpg', array('gliderør', 'med og uden forhøjning og en løs ring sat på det glatte gliderør'))
))
.'
Og på andre scootere er der en plade bag på den inderste remskive.

Ringen, forhøjningen og pladen gør at remskiverne ikke kan komme helt sammen som gør at kileremmen ikke kan komme ud og kører i det yderste af remskiverne.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2806.jpg', array('remskive slid', ''))
))
.'
Resultatet er lavere topfart, unødigt høje omdrejninger, højere benzinforbruget, mere støj, mere slid på delene og mere varmeudvikling.

Fjern variatordækslet og '.ahref('transmission_forresteremskiver.php#fjern_motrikken_ved_de_forreste_remskiver', 'fjern møtrikken ved de forreste remskiver').'.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0171.jpg', array('variator', 'med variatordæksel'))
   ,galleri('highslide', '', 'billed0172.jpg', array('variator', 'uden variatordæksel'))
   ,galleri('highslide', '', 'billed0173.jpg', array('variator', 'den yderste remskive er fjernet'))
))
.'

'.afsnit('ring på gliderør','
Hvis der sidder en løs ring på gliderøret så er det den løse ring der er begrænsningen.
Fjern den løse ring for at fjerne begrænsningen.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0183.jpg', array('gliderør med ring', ''))
))
.'
').'

'.afsnit('forhøjning på gliderør','
Hvis der er en forhøjning på gliderøret så er det gliderøret der er begrænsningen.
Tag den inderste remskive ud med 2 fingre bag på remskiven så rullerne ikke falder ud.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0179.jpg', array('variator remskive gliderør', ''))
))
.'
Her ses et begrænset gliderør med forhøjning.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2136.jpg', array('begrænset gliderør i forreste indre remskive', ''))
))
.'
For at fjerne begrænsningen skal man købe et glat gliderør.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0178.jpg', array('gliderør glat', ''))
   ,galleri('highslide', '', 'billed2135.jpg', array('ubegrænset og begrænset gliderør og forreste indre remskive', ''))
))
.'
Forhøjningen på det begrænset gliderør rammer bøsningen inderst i remskiven.
'.
galleriholder(array(
    galleri('highslide', '', 'billed2805.jpg', array('sted hvor begrænset gliderør rammer i forreste indre remskive', ''))
))
.'
').'

'.afsnit('plade bag på inderste remskive','
Hvis der er 3 skruer bag på den inderste remskive så er det en plade som er begrænsningen.
For at fjerne begrænsningen skal pladen fjernes.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1125.jpg', array('remskive med bagplade', ''))
   ,galleri('highslide', '', 'billed0190.jpg', array('remskive med bagplade', ''))
))
.'
').'
'.afsnit('','
Ring ved remskive ved kobling som måske gør at kileremmen ikke kan komme helt ned mellem de bagerste remskiver.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3874.jpg', array('remskive med ring', ''))
))
.'
').'
'

,'
CDI
' => '
CDI boksen kan begrænse motorens maksimale omdrejninger.
For at fjerne begrænsningen kan man skifte CDI boksen ud med en ubegrænset CDI boks.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0168.jpg', array('CDI', ''))
))
.'

På nogle CDI bokse kan kan fjerne begrænsningen ved at fjerne en ledning fra stikket hvor der går en ledning ud fra CDI boksen og ind igen.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0196.jpg', array('CDI begrænsning ledning på Kymco Super 8', ''))
))
.'
Eller ved at klippe en ledning over.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1572.jpg', array('Peugeot V-clic CDI begrænsning', ''))
))
.'
Eller ved at save en ledning over inden i CDI boksen.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0731.jpg', array('Kymco Agility CDI begrænsning', ''))
   ,galleri('highslide', '', 'billed0732.jpg', array('Piaggio Zip 4T CDI begrænsning', ''))
   ,galleri('highslide', '', 'billed1570.jpg', array('Piaggio Zip 4T CDI begrænsning', ''))
))
.'

På CDI boksen til Baotian (BT139QMA/BT139QMB) kan man muligvis se forskel på en 25 km/t CDI og en 45 km/t CDI ved at kigge i bunden af stikket.
CDI boksen til 25 km/t skulle være sort i bunden.
CDI boksen til 45 km/t skulle være hvid i bunden.
Desuden mangler der et ben eller der er kun 1 grøn ledning til 45 km/t CDI boksen hvor der til 25 km/t CDI boksen er 2 grønne ledninger.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0729.jpg', array('CDI', ''))
))
.'
Måske kan man fjerne begrænsningen på 25 km/t CDI boksen ved at fjerne den grønne ledning som mangler på 45 km/t CDI boksen.

'.afsnit('advarsel','
Hvis du kører med ubegrænset CDI og begrænset variator så kommer motoren til at køre med høje omdrejninger og jeg har læst at dette kan føre til motorskade.
Så gør variatoren ubegrænset FØR du gør CDI boksen ubegrænset.
').'
'

,'
ruller
' => '
Jeg er ikke helt sikker på om ruller bruges til at begrænse scootere men det tror jeg nok.

Rullerne ligger på bagsiden af den inderste remskive.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0201.jpg', array('variator ruller', ''))
))
.'

Standard rulle vægt kan for eksempel være 6,5 gram men variere fra scooter model til scooter model.

Jeg har læst i en reservedels manual til CPI Popcorn at deres 25/30 og 45 km/t modeller har 6,3 grams ruller og deres 58 km/t model har 5,8 grams ruller.

Hvis koblingens trykfjeder er meget stram er det ikke sikkert at rullerne er tunge nok til at blive slynget helt ud.
'

,'
karburator
' => '
'.afsnit('hoveddyse','
I bunden af karburatoren sidder en hoveddyse.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0192.jpg', array('hoveddyse i karburator', ''))
))
.'
Her ses en hoveddyse størrelse K80.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0733.jpg', array('tomgangs hoveddyse', ''))
))
.'

Hoveddysen kan skrues ud og erstattes med en større hoveddyse.
For eksempel størrelse 82 eller 85 som har en større indre diameter.
Dermed kan der komme mere benzin igennem ved fuld gas.
Kig i scooterens servicemanual og se om der står noget om hoveddyse størrelse.
Hvis hoveddysen gøres ubegrænset så skal luftfilterkassen også gøre ubegrænset så luft/benzin forholdet er korrekt.

Her er nogle dyse størrelse. Det godt nok fra 2 takt scootere men jeg har ikke andet.

'
.visfil('1', 'scooterhjemmeside/download/dyser_piaggio_gilera_vespa.png', 'Piaggio, Gilera, Vespa')
.visfil('1', 'scooterhjemmeside/download/dyser_pgo.png', 'PGO')
.visfil('1', 'scooterhjemmeside/download/dyser_suzuki.png', 'Suzuki')
.'
').'

'.afsnit('stopper under vakuumlåg','
Der kan sidde en skrue på indersiden af karburatorens vakuumlåg.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0167.jpg', array('messingskrue i karburatorens vakuumlåg', ''))
))
.'
Denne skrue begrænser vakuumstemplet i at bevæge sig hele vejen op så der ikke kan komme så meget luft og benzin gennem karburatoren.

For at fjerne begrænsningen skal man fjerne skruen.
').'

'.afsnit('stopper ved vippegasspjæld','
Ved siden af tomgangsskruen på karburatoren kan der sidde en "stopper" som gør at vippegasspjældet ikke kan drejes fuldt når gashåndtaget drejes.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0734.jpg', array('karburator vippegasspjælds stopper', ''))
))
.'
Denne begrænsning kan formodentligt fjernes ved at bukke "stopperen" eller ved at save den af.
').'
'

,'
isolatorstykke
' => '
Under indsugningsstudsen sidder et isolatorstykke.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0728.jpg', array('isolatorstykke', ''))
))
.'
Isolatorstykket kan have en mindre indre diameter end normalt sådan at der ikke kan komme så meget benzin og luft igennem.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0727.jpg', array('isolatorstykke', ''))
))
.'
For at fjerne denne begrænsning skal isolatorstykket skiftes ud med et isolatorstykke som har samme indre diameter som indsugningsporten i topstykket.
Man kan muligvis bore hullet op eller bruge bruge en fil til at lave hullet større.

Der kan også sidde en metal tragt eller en plade med huller i mellem indsugningsstudsen og karburatoren som har samme funktion.
For at fjerne disse begrænsninger skal tragten eller pladen fjernes.
'

,'
luftfilterkasse
' => '
I luftfilterkassen kan der sidde en tragt som begrænser den mængde luft som suges ind gennem luftfilteret.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1519.jpg', array('luftfilterkasse kymco super 8', ''))
))
.'
På denne tegning kan man se at hullet i luftfilterkassen først er 25 mm i diameter man at tragten gør diameteren mindre til 15 mm.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3028.jpg', array('luftfilterkasse med begrænsende tragt', ''))
))
.'
Her ses tragten i luftfilterkassen.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1520.jpg', array('begrænsning tragt i kymco super 8', ''))
))
.'
Her er tragten taget af.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1521.jpg', array('begrænsning tragt i kymco super 8', ''))
))
.'
I enden af tragten kan man se at den indre diameter bliver mindre så der ikke kan komme så meget luft igennem.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1522.jpg', array('begrænsning tragt i kymco super 8', ''))
))
.'
Fjerner man tragten suges der mere luft ind i karburatoren.
For at benzin/luft forholdet skal passe sammen så skal man også skifte til en større hoveddyse i karburatoren hvis tragten fjernes.
Hvis man fjerner tragten uden at skifte til en større hoveddyse så vil motoren få for meget luft i forhold til benzin.

Jeg har prøvet at fjerne tragten uden at skifte hoveddyse og hvis jeg så giver fuld gas med det samme køre den langsomt.
Hvis jeg drejer langsomt på gashåndtaget og venter til scooteren er kommet op i fart så kan man give mere gas også køre den fint men kan ikke opnå topfart når hoveddysen er begrænset.
Desuden gav det en dybere lyd da jeg fjernede tragten på min scooter.
'

,'
kobling
' => '
'.afsnit('koblingstrykfjeder','
Koblingstrykfjederen kan være for stram til at bæltet kan komme ned i den inderste del af remskiverne.
Hvis man skifter den stramme koblingstrykfjeder ud med en svagere fjeder skulle det øge topfarten og give bedre brændstoføkonomi.
Koblingstrykfjederens hårdhed kan ofte ses på dens farve.

'.
galleriholder(array(
    galleri('highslide', '', 'billed0195.jpg', array('koblings trykfjeder', ''))
))
.'
Det lader til at en stiv koblingstrykfjeder er velegnet til racing brug og får bæltet til at tage hurtigere fat.
Og at en svag koblingstrykfjeder er velegnet til bykørsel, men at bæltet ikke bider så godt fast, altså langsom acceleration.

På min Kymco Super 8 4T sidder en stram koblingstrykfjeder med en klat blå maling.
Det lader til at en hvid eller grøn (malossi) fjeder skulle være bedre på min scooter.
').'

'.afsnit('pickup','
En pickup i variatordækslet måler hvor hurtigt koblingsklokken drejer rundt og dermed hvor hurtigt scooteren køre.

Her ses pickupen.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0093.jpg', array('pickup i variator skjold ved koblingsklokke', ''))
))
.'
Her ses forhøjningen på koblingsklokken som passer tæt forbi pickupen.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0094.jpg', array('forhøjning på koblingsklokke', ''))
   ,galleri('highslide', '', 'billed3258.jpg', array('forhøjning på koblingsklokke', ''))
))
.'
Pickupen er forbundet med CDI boksen gennem en ledning som går ud forrest på variatordækslet.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3242.jpg', array('inderside af varitordæksel hvor der sidder en pickup', ''))
   ,galleri('highslide', '', 'billed3732.jpg', array('pick med ledning til fartbegrænsning', ''))
   ,galleri('highslide', '', 'billed3243.jpg', array('ledning som går til pickup inden i variatordækslet', ''))
))
.'
Begrænsningen kan fjernes ved at trækker stikket fra hinanden mellem pickupen og CDI boksen.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3166.jpg', array('stik mellem pickup i variator og CDI', ''))
   ,galleri('highslide', '', 'billed3167.jpg', array('adskildt stik mellem pickup i variator og CDI', ''))
))
.'
').'
'

,'
udstødning
' => '
På 2 takt scootere er udstødningen ofte begrænset i modsætning til 4 takt scootere hvor udstødningen så vidt jeg ved næsten aldrig er begrænset.

Her ses en udstødning med blindrør.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1241.jpg', array('udstødning', ''))
))
.'
Blindrøret er et stykke rør som er svejset på forrøret for at begrænse scooteren.
For at fjerne denne begrænsning kan blindrøret saves af og hullet lukkes ved svejsning eller udstødningen kan udskiftes med en uden blindrør.

Her ses en udstødning med blindrør og aftageligt forrør.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3006.jpg', array('udstødning med blindrør', 'og aftageligt forrør'))
))
.'
Her kan man nøjes med at skifte forrøret ud med et ubegrænset forrør uden blindrør.

Forrøret på udstødningen kan have en mindre indre diameter som begrænser scooteren.
Her ses en udstødning hvor forrøret kan skrues af som skiftes ud med et ubegrænset med større diamter.
'.
galleriholder(array(
    galleri('highslide', '', 'billed0843.jpg', array('udstødning', ''))
))
.'

Der kan sidde en skive mellem udstødning og cylinder som giver en mindre indre diameter og dermed begrænser scooteren.
'.
galleriholder(array(
    galleri('highslide', '', 'billed1967.jpg', array('begrænsning', 'ved udstødning'))
   ,galleri('highslide', '', 'billed3244.jpg', array('begrænsning', 'ved udstødning'))
))
.'
'

,'
knækbolte
' => '
Knækbolte er bolte hvor en del af boltens hoved knækker af når den bliver spændt.
Det vil sige man kan ikke bruge det samme værktøj til at skrue bolte af som det der blev brugt til at spænde den fast.

Knækbolte bruges for at gøre det sværre at få bolten af.

Her ses et forrør som er sat på udstødningen med 3 bolte hvor af 1 af boltene er en knækbolt.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3010.jpg', array('knækbolt', 'på udstødningsforrør'))
))
.'
Knækbolte kan også sidde hvor udstødningen monteres på cylinderen eller hvor indsugningsstuden monteres på motorblokken.
'

,'
motorblok
' => '
I motorblokken hvor cylinderen sættes i kan der være en kant som gør at man kun kan sætte en original cylinder i.
Den originale cylinder har et indhak i cylinderskørtet så det kan sættes i.
En uoriginal cylinder med lige skørt vil ramme kanten i motorblokken så det ikke kan komme i.

For at andre cylindre kan sættes i kan man slibe kanten væk i motorblokken.

Kan ses her '.ahref('http://www.scootergalleri.dk/fotoalbum/tuningprojekter/83105-hjaelp_til_speedfight_2').'
'

,'
egne erfaringer
' => '
Her er mine erfaringer fra min Kymco Super 8 4T (50 cm³ 30 km/t).
Hastighederne vist her er dem som vises på speedometeret. Speedometeret viser 5-10 %.

'.afsnit('med alle begrænsninger','
Hastigheden er max 35 km/t.
Benzinforbruget er 36km/liter.
').'
'.afsnit('med ubegrænset variator (glat gliderør)','
Hastigheden er 46-56 km/t.
Benzinforbruget er 46km/liter.
Motoren køre med lavere omdrejninger, larmer ikke så meget og udvikler mindre varme.
').'
'.afsnit('med ubegrænset variator (glat gliderør) og ubegrænset CDI','
Hastigheden er 63 km/t.
').'
'.afsnit('med ubegrænset luftkasse (tragt fjernet)','
Hastigheden er uændret.
Dybere motorlyd.
Umiddelbart bedre trækkraft ved igangsætning.
Giver man fuld gas fra tomgang får motoren for meget luft så man skal give gas lidt af gangen.

Det lader til at hvis man ændre på luftfilterkassen ved at fjerne tragten skal man også sætte en større hoveddyse i karburatoren for at have optimal virkning ellers får motoren for meget luft i forhold til benzin.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
