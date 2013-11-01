<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "indsprøjtningskit til scooter med 4 takt motor";
$overskrift = "indsprøjtningskit til scooter med 4 takt motor";
$metadescription = "ombyg en scooter motor med karburator til indsprøjtning med et indsprøjtningskit";

$databasecenter = array(

'
introduktion
' => '
Denne side handler om at lave en scooter med karburator om til indsprøjtning.

indsprøjtningskittet der bruges er '.ahref('http://www.ecotrons.com/Small_Engine_EFI_PNP_kit.html', 'Small Engine Fuel Injection Kit - 35cc to 300cc fra ecotroncs.com').'.

Infoen på siden er samlet af de erfaringer brugeren Baddi har gjort sig da han har monteret og tunet kittet på sin Kymco Agility og de problemer han har oplevet så andre kan lære af dem.
Se også forum emnet '.ahref('http://scootergrisen.dk/forum/viewtopic.php?f=8&t=809', 'Projekt: Indsprøjtningskit på scooter').'.

'.visflash('0', "http://www.youtube.com/watch?v=wrbKGRnB06U", 'Kymco Agility med indsprøjtningskit og tilsluttet computer', true).'
'.visflash('0', "http://www.youtube.com/watch?v=3GhNxu8hs_A", 'forskellige dele i kittet', true).'

'.visbilled('1', 'billed3628.jpg', 'ecotrans', false, true).'
'.visbilled('1', 'billed3629.jpg', 'kymco agility med indsprøjtningskit', false, true).'
'.visbilled('1', 'billed3631.jpg', 'kymco agility med indsprøjtningskit', false, true).'
'.visbilled('1', 'billed3632.jpg', 'kymco agility med indsprøjtningskit', false, true).'
'.visbilled('1', 'billed3633.jpg', 'kymco agility med indsprøjtningskit', false, true).'
'.visbilled('1', 'billed3630.jpg', 'kymco agility med indsprøjtningskit benzintank slanger', false, true).'

Brændstofindsprøjteren fra dette kit sidder et udsat sted og da den er lavet af plastik kan den knække hvis man køre på et bump med Kymco Agility så sædekassen rammer og brændstofindsprøjteren kan knække.
Så sørg for at der er noget frirum over og plads nok til at affjedringen kan gå i bund.
'.visbilled('1', 'billed3627.jpg', 'kymco agility med indsprøjtningskit benzinindsprøjter knækket', false, true).'

'.citat('
Ulæst indlægaf Baddi » 14. oktober 2012 21:48
De erfaringer jeg har gjort mig med hensyn til problemer og ting man skal være opmærksom på er:
- Sørg for at hele systemet er tæt, både benzin og luftvejene skal have spændebånd af ordenlig kvalitet.
- Er tomgangsomdrejningerne meget høje og begynder at gå ukontrollerbart op og ned skyldes det falsk luft.
- Vær OBS på alle O-ringe.
- Sørg for at der er plads til alle dele, selvom bagstøddæmperen komprimeres (når man kører over et bump). Dette gælder både indsprøjter m. slanger og O2-sensoren i udstødningen.
- Det er muligvis nødvendigt at skifte udstødningsrøret til et med større diameter, for at der er plads til O2-sensoren (den er rimelig stor i forhold til det originale rør synes jeg).
- Med standart indstillinger kan man starte og køre, men justeringer er nødvendig for at få den rette blanding.
- Med aaalt for fed blanding og tomgangsomdrejninger omkring 3-4000 var forbruget 24 km/l uden begrænsning.
- Med tomgangsomdrejninger omkring 2400 og skruet lidt ned for benzinen (stadig for fed) er forbruget omkring 40-50 km/l med begrænsning (Har ikke kørt en hel tank igennen med skive i endnu.), hvor forbruget med karburator med samme opsætning (også begrænsningen) var omkring 55 på literen. Husk at hvis du kører med begrænsning har du ikke brug for fuld gas, hverken med karburator eller indsprøjtning, så giv kun så meget gas at du ikke rammer omdrejningsbegrænsningen. :)
- Hvis du får fejlmeldinger fra MAP-sensor er det falsk luft, hvis du samtidig måler normalt tryk når du ikke prøver at starte og måler et fald, når du så prøver.
- Kan du ikke starte (og du ikke har ændret på benzinblandingen), så tjek stadig standarttingene som benzintilførsel og gnist.
- Benzintilførslen kan du tjekke ved at tage "hætten" af indsprøjteren og hælde et par dråber ud så der er luft i slangen, og så prøv at starte. Forsvinder boblen ikke, kommer der enten ikke noget benzin, eller indsprøjteren tænder ikke. Tjek benzinfilteret for tilstopning, hvis du kan høre benzinpumpen brumme.


Der er selvfølgelig stadig gode ting, som eksempelvis en smugle mere kraft og mere kontrol over og viden om motoren samt muligheden for at gemme måledata på sin bærbare computer mens man kører. :mrgreen:
Der skulle også være store benzinbesparelser at hente, men det har jeg ikke lige lagt mærke til endnu, idet jeg stadig mangler at justere benzinblandingen ind og at tjekke helt efter falsk luft. :p
').'
'

,'
problemer og løsninger
' => '
Brændstofindsprøjteren knækker når affjedring på scooter går i bund da sædekasse rammer.
- Sørg for den ikke kan ramme når sidekasse går ned, sav eventuelt hul i sædekasse så der er plads.

O2 sensoren kan knækker hvis forrøret på udstødningen bukker på en måde så for eksempel passagerfodhvilere kan ramme når affjedringen går i bund.

Kan være utæt hvor gasspjældshuset og indsugningsmanifolden mødes da der er nogen rille til oringen.
- Sæt en tykkere o-ring i.
'

,'
filer
' => '
'.visfil('1', 'scooterhjemmeside/download/indsprojtningskit.zip', 'indsprøjtningskit (billeder og programmer)').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
