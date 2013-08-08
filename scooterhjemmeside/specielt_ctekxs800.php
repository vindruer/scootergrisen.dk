<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "CTEK XS 800 - Batterioplader";
$overskrift = "CTEK XS 800 - Batterioplader";
$metadescription = "info om batteriopladeren CTEK XS 800 som er beregnet til at oplade alle typer 12 volt bly-syrebatterier, åbne, vedligeholdelsesfrie (MF), AGM og de fleste GEL-batterier. Batteristørrelser fra 1,2 til 32 Ah. Laderen kan vedligeholde batterier op til 60 Ah";

$databasecenter = array(

'
introduktion
' => '
CTEK XS 800 er en automatisk batterioplader fra '.ahref('http://www.ctek.se/dk/da','CTEK sweden AB').'.
'.ahref('http://www.ctek.se/dk/da/chargers/XS%200.8','Se mere om CTEK XS 0.8 hos CTEK').'.

'.kontaktmig(1).' gerne hvis du har lyst til at tage billeder og lave videoer af opladeren her til siden.

Der er åbenbart forskellige udgaver med forskellige lamper.
'.visbilled('1', 'billed0275.jpg', 'CTEK batterioplader', false, true).'
'.visbilled('1', 'billed3455.jpg', 'CTEK batterioplader', false, true).'
'.visbilled('1', 'billed3456.jpg', 'CTEK batterioplader', false, true).'
'.visbilled('1', 'billed3457.jpg', 'CTEK kabler', false, true).'

CTEK XS 800 er beregnet til at oplade :
Batterispænding : 12 volt.
Batterikapacitet : 1,2 - 32 Ah. (Laderen kan vedligeholde batterier op til 60 Ah).
Batteritype : startbatterier og dybdecyklysbatterier af blysyre typen (traditionelle åbne, MF, VRLA, AGM og de fleste GEL-batterier).

Oplader data :
Tretrins helautomatisk
Ladekarakteristik : IUoUp.
Maksimal ladestrøm : 0,8 ampere.
'

,'
manual
' => '
'.visfil('1', 'scooterhjemmeside/download/batterioplader_ctekxs800.pdf', 'CTEK XS 800 manual').'
'

,'
tilslutning af laderen til et batteri
' => '
'.citat('
Tilslutning af laderen til et batteri, der er monteret i et køretøj:

1. Vægkontakten skal være slået fra, når batterikablerne kobles til eller fra.

2. Find den pol, der er jordet (koblet til chassiset). Den pol, der er jordet, er i reglen minuspolen.

3. Opladning af negativt jordet batteri. Kobl det røde kabel til den positive pol på batteriet og det sorte kabel til køretøjets chassis. Pas på ikke at tilslutte det sorte kabel i nærheden af benzinledningen eller batteriet.

4. Opladning af positivt jordet batteri. Kobl det sorte kabel til den negative pol på batteriet og det røde kabel til køretøjets chassis. Pas på ikke at tilslutte det røde kabel i nærheden af benzinledningen eller batteriet.
').'
'.citat('
Tilslutning af laderen til et batteri, der ikke er monteret i et køretøj:

1. Vægkontakten skal være slået fra, når batterikablerne kobles til eller fra.

2. Kobl det røde kabel til den positive pol på batteriet og det sorte kabel til den negative pol.
').'
'

,'
opladning
' => '
'.citat('
1. Når du har kontrolleret, at batterikablerne er korrekt tilkoblet, kan du starte opladningen ved at koble laderen til stikkontakten i væggen. Hvis batterikablerne er fejlkoblede, vil polvendingsbeskyttelsen sørge for, at der ikke sker skade på lader eller batteri. Så vil fejlkontrollampen lyse. I så fald skal du starte forfra fra punkt 1 under ”Tilslutning af laderen...”

2. Nu vil kontrollampen for ladning eller kontrollampen for vedligeholdelsesladning lyse. Når kontrollampen for vedligeholdelsesladning lyser, er batteriet ladet helt op. Når batteriets spænding daler, vil laderen sende en impuls til batteriet. Impulsens længde afhænger af, hvor meget spændingen er dalet. Laderen kan være tilsluttet i flere måneder.

3. Hvis der ikke sker noget. Hvis der ikke tændes nogen kontrollampe, kan tilslutningen til batteriet eller chassiset være mangelfuld, eller også kan batteriet være defekt eller have for lav polspænding. En anden årsag kan være, at der ikke er nogen spænding i vægkontakten.

4. Ladningen kan afbrydes når som helst ved at tage stikket ud af vægkontakten. Træk altid stikket ud af vægkontakten, inden du frakobler batterikablerne. Når du afbryder opladningen af et batteri, der er monteret på et køretøj, skal batterikablet fra chassiset altid kobles fra, inden du kobler det andet batterikabel fra.

5. Hvis kontrollampen for opladning og kontrollampen for vedligeholdelsesladning blinker på skift, skyldes det følgende forhold:

• Hvis kontrollamperne blinker en gang i sekundet, er batteriet sandsynligvis sulfateret. Hvis de blinker i mere end 60 minutter, er batteriet opbrugt og skal udskiftes.

• Hvis der forekommer blink med et par minutters mellemrum, har batteriet stor selvafladning og skal formentlig udskiftes.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
