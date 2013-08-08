<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "olie - Service";
$overskrift = "olie - Service";
$metadescription = "service af olie på scooter";

$databasecenter = array(

'
kontroller motorolie niveau
' => '
Sæt scooteren på centerstøtteben et vandret sted.
Det er vigtigt at scooteren står et vandret sted ellers bliver målingen forkert.
Lad motoren køre i tomgang i 2-3 minutter.
Stop motoren.

Vent 2-3 minutter så olien kan falde til ro.
Skru oliepinden ud.
'.visbilled('1', 'billed0613.jpg', 'oliepind i kymco super 8 motor', false, true).'
Tør oliepinden med en klud og sæt den tilbage i hullet UDEN at dreje den.
Tag oliepinden op og se olieniveauet på pinden.

Olien skal være mellem maksimum og minimum mærkerne.
'.visbilled('1', 'billed0392.jpg', 'oliepind maksimum og minimum mærker', false, true).'
Her er olieniveauet for højt.
'.visbilled('1', 'billed0784.jpg', 'oliepind olieniveau for højt', false, true).'
Her er olieniveauet fint.
'.visbilled('1', 'billed0053.jpg', 'oliepind olieniveau okay', false, true).'
Her er olieniveauet rimeligt lavt.
'.visbilled('1', 'billed0783.jpg', 'oliepind lavt', false, true).'

På for eksempel Piaggio Scarabeo skal olieniveauet måles mens motoren er kold (vent mindst 10 minutter efter motoren er stoppet) og oliepinden skal skrues helt i bund inden man aflæser niveauet.
'.visbilled('1', 'billed0609.jpg', 'oliepind på piaggio motor', false, true).'
'.visbilled('1', 'billed2841.jpg', 'oliepind på piaggio motor', false, true).'
På nogle scootere som Piaggio og Sachs kan man kontroller olieniveauet gennem et glas i bunden af motoren.
'.visbilled('1', 'billed0608.jpg', 'olieniveau glas på piaggio motor', false, true).'

Hvis olieniveauet er tæt på minimum mærket så fyld motorolie i hullet indtil olieniveauet er tæt ved maksimum mærket men ikke over.

'.afsnit('For meget eller for lidt olie','
For meget motorolie kan påvirke motorydelsen. Olie kan komme op forbi stempelringene og ind i forbrændingskammeret.
For lidt motorolie kan overophede motoren og slide motoren hurtigere end normalt.
').'
'

,'
skift motorolie
' => '
Læs hvilken type motorolie og mængde der skal bruges i scooterens manual.

For eksempel 0,7 liter SAE 10W-40 API:SG.

Kør en tur eller lad motoren kører i tomgang i 3 minutter for at varme olien op så den er lettere at få ud.
Sluk motoren.
Sæt scooteren på centerstøtteben et vandret sted.
Skru oliepinden ud.
Det er bedst at starte med at dræne olien fra venstre drænbolt da man har bedre kontrol over hvor olien kommer ud.
Sæt en skål eller lignende under den venstre drænbolt.
Fjern drænbolten i venstre side og vent mens olien løber ud.
'.visbilled('1', 'billed0380.jpg', 'Venstre motorolie drænbolt', false, true).'
'.visbilled('1', 'billed0667.jpg', 'Venstre motorolie drænbolt olie løber ud', false, true).'
Tip eventuelt scooteren en smule for at få mest mulig olie ud.
Spænd bolten fast når de ikke kommer mere olie ud.

Flyt skålen hen under den højre drænbolt.
Fjern den højre drænbolt og vent mens resten af olien løber ud.
'.visbilled('1', 'billed0393.jpg', 'Højre motorolie drænbolt', false, true).'
'.visbilled('1', 'billed2974.jpg', 'Højre motorolie drænbolt', false, true).'
Rens oliesien.
'.visbilled('1', 'billed0640.jpg', 'Højre motorolie drænbolt oliesi fjeder', false, true).'
Olien kommer ude fra og ind i filteret så eventuelle urenheder sidder gerne på ydersiden af sien.
'.visbilled('1', 'billed0383.jpg', 'Motorolie dræn bolt og filter', false, true).'
Olien suges op gennem hullet i midten.
'.visbilled('1', 'billed0388.jpg', 'Højre motorolie drænbolt hul', false, true).'
Saml oliesi, fjeder og drænbolt og skrue det på plads.
Spænd drænbolten fast.

Påfyld den rette mængde motorolie (for eksempel 0,7 liter) i hullet hvor oliepinden sad.
'.visbilled('1', 'billed0785.jpg', 'motorolie påfyldning kymco super 8', false, true).'
Skru oliepinden i.

Start motoren og lad den køre i tomgang i 5 minutter for at varme den nye olie op.

'.ahref('service_olie.php#kontroller_motorolie_niveau', 'Gå til "kontroller motorolie niveau"').'.

Olieniveauet skal være tæt på maksimum mærket på oliepinden men ikke over.

Fyld mere olie i hullet hvis olieniveauet ikke er tæt på maksimum mærket.

Løsen den venstre drænskrue og lad lidt olie løbe ud hvis olieniveauet er over maksimum mærket.

Kør en tur og check for utætheder under motoren.

Skriv i scooterens serviceskema/manual hvor mange km scooteren har kørt så kan du holde styr på hvordan du skal skifte motorolie igen.

Motorolien skal typisk skiftes for hver 1000 eller 2000 km.
'

,'
kontroller gearolie niveau
' => '
Nogle scootere har vistnok en oliepind så man let kan kontrollere gearolie niveauet.

På nogle scootere skal man fylde gearolie op til kanten af påfyldningshullet og på den måde finder man det rette niveau.

På min Kymco Super 8 er der ikke nogle oliepind ved gearolien og man skal heller ikke fylde op til kanten af påfyldningshullet.
Hvis man vil kontroller mængden af gearolie så kan man dræne alt olien i et målebære og på den måde finde ud af om der er den korrekte mængde olie i.
'

,'
skift gearolie
' => '
Læs hvilken type gearolie og mængde der skal bruges i scooterens manual.

For eksempel 0,18 liter SAE 90.

På nogle scootere skal man fylde op til kanten af påfyldningshullet og derfor opgives der ikke en mængde.

På nogle scootere står der på motorblokken hvor meget olie der skal i.
'.visbilled('1', 'billed2373.jpg', 'gearolie påfyldning', false, true).'

Kør en tur så motorblokken er godt varm.
Det er bedst at skifte gearolie når motorblokken er godt varm for så varmes gearolien.
Når gearolien er varm løber den hurtigere ud og man får mere af den gamle olie ud.

Sæt scooteren på centerstøtteben et vandret sted.
Sæt en skål under drænbolten.
'.visbilled('1', 'billed2372.jpg', 'gearolie påfyldning og dræn bolte', false, true).'
'.visbilled('1', 'billed0381.jpg', 'gearolie bolte', false, true).'
Fjern påfyldningsbolten.
Fjern drænbolten og lad olien løbe ud.
'.visbilled('1', 'billed2988.jpg', 'gearolie løber ud af reduktionsgear drænhul', false, true).'
Når der ikke kommer mere olie ud skrues drænbolten på og spændes fast.

Påfyld den angivne mængde gearolie gennem påfyldningshullet.
Hvis du har en scooter hvor der skal påfyldes til kanten af påfyldningshullet så fyld på indtil der kommer olie ud af hullet og vent så indtil der ikke løber mere olie ud.
'.visbilled('1', 'billed0382.jpg', 'Gearolie påfyldnings bolt', false, true).'
'.visbilled('1', 'billed2989.jpg', 'gearolie løber ud af reduktionsgear påfyldningshul', false, true).'
Skru påfyldningsbolten på og spænd den fast.
Tør eventuelt oliespild af.

Kør en tur og check for utætheder.

'.afsnit('Ingen drænskrue','
Jeg har læst om at nogle Peugeot Vivacity (2 takt) hvor der ikke var nogen drænskrue og at den samme gearolie skulle bruges i hele scooterens liv.
Man kan så kontrollere olieniveauet og fylde mere olie på hvis nødvendigt.
Jeg kender ikke til nogen 4 takt eller elektriske scootere uden drænskrue.
').'
'

,'
video instruktion
' => '
'.visflash('0', "http://www.youtube.com/v/q2fSVNYZsSc", 'skift motorolie og gearolie.', true).'
'.visflash('0', "http://www.youtube.com/watch?v=F5y8WbV5cnY", 'HaSse viser hvordan man skifter motorolie', true).'
'.visflash('0', "http://www.youtube.com/watch?v=PQUKvhTsAEc", 'HaSse viser hvordan man skifter gearolie', true).'
Se også '.ahref('http://repvideo.lars-mc.dk/repvideo/view.repair_video.php?id=26', 'Olieskift og nyt oliefilter på motor (repvideo.lars-mc.dk)').'.
'

,'
beskyt dig selv
' => '
Brugt motorolie kan give hudkraft hvis olien gentagne gange har kontakt med huden i lang tid.
Brug derfor gummihandsker og/eller smør hænderne med creme inden du har kontakt med olien.
Vask hænderne grundigt efter du har haft olie på hænderne.
Brug eventuelt et egnet produkt til at fjerne olie fra hænderne da almindelig håndsæbe ikke fjerner olien så let.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
