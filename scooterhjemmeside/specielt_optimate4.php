<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "TecMate OptiMate 4 - Batterioplader";
$overskrift = "TecMate OptiMate 4 - Batterioplader";
$metadescription = "TecMate OptiMate 4 er en automatisk batterioplader til 12 volt bly-syre batterier og kan for eksempel bruges til scootere, knallerter og motorcykler hvor batteriet har en kapacitet på mellem 2 til 50 Ah";

$databasecenter = array(

'
introduktion
' => '
OptiMate 4 er en automatisk batterioplader fra '.ahref('http://www.tecmate-int.com', 'TecMate').'.
'.galleriholder(array(galleri('highslidestandard', 'billed1178.jpg', 'billed1178.jpg', 'TecMate OptiMate 4 batterioplader'))). '

ptiMate 4 har ingen knapper.
OptiMate 4 har beskyttelse mod forkert tilsluttet kabler.
OptiMate 4 stopper selv med at oplade.

'.afsnit('OptiMate 4 kan oplade disse 12 volt bly-syre batteri typer','
Traditionelle
Vedligeholdelsesfrie
Gel
Jeg har desuden skrevet til TecMate og spurgt om man kan bruge OptiMate 4 til at oplade silicon (silicium) batterier og det kan man godt da de er en variant af bly-syre gel typen skrev de.
').'

OptiMate 4 anbefales til batterier med en kapacitet på 2-50 Ah.
Den kan godt bruges til batterier med en større kapacitet end 50 Ah. Det vil bare tage lang tid.

'.afsnit('specifikationer','
Ind : 220-240 volt 0,085 ampere.
Ud : maksimalt 0,8 ampere 12 watt.
').'
'

,'
manual
' => '
'
.visfil('1', 'scooterhjemmeside/download/optimate4_manual.pdf', 'OptiMate 4 manual')
.visfil('1', 'scooterhjemmeside/download/optimate4_lamper.pdf', 'OptiMate 4 lamper')
.visfil('1', 'scooterhjemmeside/download/optimate4_chargingprogram.jpg', 'OptiMate 4 charging program')
.'
'

,'
tilbehør
' => '
Man kan tilslutte forskelligt tilbehør til opladerens stik.
'.visbilled('1', 'billed2149.jpg', 'TecMate OptiMate 4 stik', false, true).'
'.visbilled('1', 'billed2150.jpg', 'TecMate OptiMate 4 stik', false, true).'

I pakken følger der 2 slags kabler med.
Et med krokodillenæb.
Og et som kan fastmonteres på batteriet (med indbygget sikring på den ene ledning).
'.visbilled('1', 'billed2151.jpg', 'TecMate OptiMate 4 tilbehør fast montering krokodillenæb', false, true).'
Ved at bruge kablet der kan fast monteres behøver man ikke åbne batteri rummet for at oplade sit batteri.

Man kan købe andre typer kabler som for eksempel tilslutning gennem cigarettænder stik.
'

,'
lamperne
' => '
En plastikfilm viser hvilken farver lamperne har.
'.visbilled('1', 'billed1202.jpg', 'TecMate OptiMate 4 plastikfilm på', false, true).'
Plastikfilmen kan trækkes af hvis man ønsker det.
'.visbilled('1', 'billed1177.jpg', 'TecMate OptiMate 4 plastikfilm af', false, true).'

Her er kablerne sat forkert på batteriet.
Altså der er byttet om på + og -.
Denne lampe virker også selvom opladeren ikke er forbundet med stikkontakten. I hvert fald hvis der er strøm på batteriet.
'.visbilled('1', 'billed1170.jpg', 'TecMate OptiMate 4 lamper', false, true).'
Hvis batteriet er meget afladt eller sulfateret, altså har været afladt længe så startes en speciel opladning med højere volt (op til 16 volt) og meget lav ampere.
'.visbilled('1', 'billed1176.jpg', 'TecMate OptiMate 4 lamper', false, true).'
Hvis batteriet er i endnu værre tilstand, altså hvis batteriet ikke har være opladt i måneder så startes en speciel opladning med højere volt (op til 22 volt) og endnu lavere ampere.
'.visbilled('1', 'animation0016.gif', 'TecMate OptiMate 4 lamper', false, true).'
Her er hovedopladningen i gang.
'.visbilled('1', 'animation0014.gif', 'TecMate OptiMate 4 lamper', false, true).'
Når batteriet har opnået en spænding på 14,3 volt så blinker lampen i 30 minutter mens det vurderes om batteriet trænger til yderligere opladning.
'.visbilled('1', 'animation0017.gif', 'TecMate OptiMate 4 lamper', false, true).'
Det er noget med at hoved opladningen er færdig når batteriet modtager mindre end 200 mA ved 13,6 volt.

Når batteriet er færdig opladt så lyser en eller to af lamperne over TEST.

Hvis den grønne lampe lyser så er batteriet i god form.

Opladeren tester i 30 minutter og derefter vedligeholder den batteriet i 30 minutter og gentager lige indtil opladeren afbrydes.

Når 1 eller 2 af lamperne over TEST blinker så testes batteriet.
'.visbilled('1', 'animation0015.gif', 'TecMate OptiMate 4 lamper', false, true).'
Når den grønne lampe over TEST lyser konstant så vedligeholdelses batteriet, det vil sige batteriet holdes fuldt opladt.
'.visbilled('1', 'billed1171.jpg', 'TecMate OptiMate 4 lamper', false, true).'
Hvis batteriet mister spænding under test perioden på 30 minutter så vil den grønne og gul lyse samtidig.
'.visbilled('1', 'billed1175.jpg', 'TecMate OptiMate 4 lamper', false, true).'
Mister batteriet yderlige spænding vil kun den gule lampe lyse.
'.visbilled('1', 'billed1172.jpg', 'TecMate OptiMate 4 lamper', false, true).'
Mister batteriet yderlige spænding vil den gule og røde lampe lyse.
'.visbilled('1', 'billed1174.jpg', 'TecMate OptiMate 4 lamper', false, true).'
Mister batteriet yderlige spænding vil kun den røde lampe lyse.
'.visbilled('1', 'billed1173.jpg', 'TecMate OptiMate 4 lamper', false, true).'
'

,'
sådan bruges OptiMate 4
' => '
OptiMate 4 kan oplade batteriet både mens det sidder i scooteren eller mens det er tager ud.

Tilslut det røde krokodillenæb (+) til batteriets plus (+) terminal.
Tilslut det sorte krokodillenæb (-) til batteriets minus (-) terminal.
'.visbilled('1', 'billed1191.jpg', 'GTX7A-BS kymco GS CK 12 volt bly syre batteri vedligeholdelsesfrit oplades', false, true).'
Tilslut derefter opladeren til stikkontakten.

Tænd for stikkontakten.

Alle lamperne lyser kortvarigt op.

Opladeren måler batteriets spænding og starter en passende opladningsproces.

Normalt starter hovedopladningen.
'.visbilled('1', 'billed0964.jpg', 'TecMate OptiMate 4 tændt', false, true).'
Du kan se på lamperne hvad opladeren er i gang med.
'.visbilled('1', 'billed1201.jpg', 'TecMate OptiMate 4 lamper forklaring', false, true).'

Når opladningen er færdig vil den grønne lampe over TEST lyse for at vise at opladningen er færdig og at batteriet er i god form.
'.visbilled('1', 'billed1192.jpg', 'TecMate OptiMate 4 lamper', false, true).'

Opladeren vedligeholder batteriet så det holdes fuldt opladt så længe opladeren er tilsluttet.

Sluk for stikkontakten.
Fjern stikket fra stikkontakten.
Fjern derefter kablerne fra batteriet.
'

,'
adskilt
' => '
'.galleriholder(array(
 galleri('highslide', 'billed1186.jpg', 'billed1186.jpg', 'TecMate OptiMate 4 TM14x series R1.1 041207 toppen skruet af')
,galleri('highslide', 'billed1187.jpg', 'billed1187.jpg', 'TecMate OptiMate 4 TP1 TP2 TP3 TP4 TP5 TP6 P_BKGD P_0V P_RST P_VREF3.3V MINUTE')
,galleri('highslide', 'billed1189.jpg', 'billed1189.jpg', 'TecMate OptiMate 4 elektronik')
)). '

1)
Her er toppen skruet af.
I kanten ses en sort gummiliste som gør opladeren vandtæt/regntæt.

2)
På printkortet står TM14x series R1.1 041207.
Her ses at der er en ekstra tilslutningsmulighed... hvad end det er til.
TP står for Test Points.
Jeg har skrevet til TecMate og spurgt hvad stikker er til og venter på svar... (skrevet 30-10-2012).

3)
Her ses undersiden af printkortet.
De 2 tykke ledninger går til batteriet og de 2 smalle går til transformeren.
'

,'
links
' => '
'.ahref('http://www.tecmate-int.com/').'
'.ahref('http://www.tecmate-int.com/optimate4_detail.php').'
'

,'
egne erfaringer
' => '
'.afsnit('batteri kan ikke opnå en fuld opladning','
Jeg har opladt mit vedligeholdelsesfrie bly-syre batteri med OptiMate 4 men kunne ikke få det fuldt opladt til de 13,1 volt som står i manualen.
Jeg skrev til TecMate som laver opladeren og spurgte hvorfor.

'.afsnit('TecMate skrev','
There are some good reasons for what you measured on these batteries.
If these AGM batteries are not new, it’s possible that they “behave” as a classic filler cap battery. In that case, it’s normal that you measure only 12,6v.
But if the batteries are new, it’s still possible that they were not well charged for the very first time at the point of sales.  If this is the case, it means that your batteries have a capacity lower than 100% and so you can’t measure 13,1v.
We advise you to let the charger connected as long as possible.  It’s not impossible that after a while, the voltage will increase from 12,6 till e.g. 12,9 v.
').'
Så måske har de ikke opladt batteriet i butikken da jeg købte scooteren eller også er det bare fordi det ikke var helt nyt da jeg opladte batteriet.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
