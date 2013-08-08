<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "køling - Service";
$overskrift = "køling - Service";
$metadescription = "service af væskekølingsystem på scooter";

$databasecenter = array(

'
væskekøling
' => '
'.afsnit('advarsel om at fjerne trykdækslet','
Når du vil fjerne trykdækslet så vent til motoren og dermed kølervæsken er kølet helt ned og fjern så radiatordækslet langsomt.
Hold et håndklæde over trykdækslet for en sikkerheds skyld.

Hvis du fjerner trykdækslet mens motoren og dermed kølervæsken er varm og under tryk så kan den varme kølervæske sprøjte op og man kan blive skoldet.

Så vidt jeg ved kan kølervæsken være over 100 °Celsius.
').'

'.afsnit('dræning af kølervæske','
Hvis man vil have kølervæsken ud skal man først lade kølervæsken blive kold før man langsomt tager trykdækslet af kølervæske beholderen eller radiatoren.

Derefter kan man løsne drænskruen på vandpumpen i bunden af motoren og lade kølervæsken løbe ud i en beholder.
'.visbilled('1', 'billed1537.jpg', 'kølervæske drænskrue på vandpumpe', false, true).'
').'

'.afsnit('udluftning','
Udluftning af kølesystemet går ud på at fjerne luft fra kølesystemet.

<mark>
Jeg vil tro motoren/kølervæsken skal være kold før man gør det her.
Der er dog en bruger der har skrevet til mig at motoren skal køres så varm at termostaten åbner helt da man ellers ikke får eventuel luft ud ved termostaten.
</mark>

Start motoren.
Fjern by-pass slangen fra termostathuset og se om der er luftbobler i den kølervæske som kommer ud.
(Man skal vel have en beholder at samle kølervæsken op med).
Sæt by-pass slangen på igen når der ikke er luftbobler i den kølervæske som kommer ud.
'.visbilled('1', 'billed2811.jpg', 'by-pass slange', false, true).'
Tag trykdækslet af (kølevæsken skal være kold).
Start motoren og lad den køre i tomgang 2-3 minutter.
Drej gashåndtaget hurtigt 3-4 gange for at fjerne luft bobler fra systemet.
Stop motoren.
Fyld kølervæske på køleren op til "filler neck" hvis nødvendigt.
Check niveauet i reservetanken og fyld op til MAX mærket.
'.visbilled('1', 'billed1546.jpg', 'kølervæske påfyldning', false, true).'
').'

'.afsnit('kontroller kølervæske niveau','
Niveauet plejer vist nok at skulle checkes når motoren er kold.
(I Honda Zoomer servicemanualen står at niveauet skal aflæses mens motoren har normal arbejdstemperatur, altså er varm)
Niveauet skal aflæses mens scooteren står på et vandret sted på center støtteben.
Niveauet skal være mellem MIN og MAX mærkerne.
'.visbilled('1', 'billed2810.jpg', 'reservetank niveau', false, true).'
'.visbilled('1', 'billed2812.jpg', 'reservetank niveau', false, true).'
').'

'.afsnit('kølervæske blandingsforhold','
Honda Zoomer : 1:1 antifrys:vand. (kølervæske med "silicate inhibitors" kan slide vandpumpe "seals" for tidligt eller bloker radiator passagerne).
Yamaha Giggle : 4:6 antifrys:vand. (check niveau mens motor er kold)

Der skal bruges destilleret vand.

Vand fra vandhanen indeholder kalk som vist nok med tiden vil kunne sætte sig og blokere passager i radiatorens smalle aflange rør.
').'

'.afsnit('måling af kølervæske med hydrometer','
Kølervæsken kan måles med et hydrometer for at finde ud af blandings procenten af vand og ethylenglycol.
Sug noget kølervæske op fra kølervæske beholderen med hydrometeret.
'.visbilled('1', 'billed1538.jpg', 'kølervæske hydrometer', false, true).'
'.visbilled('1', 'billed1547.jpg', 'kølervæske hydrometer', false, true).'
Hvis kølervæsken er 20 °Celsius og man måler 1,072 på hydrometeret så må det betyde at kølervæsken består af 45 % glycol ethylene og dermed 55 % vand.... har jeg ret ?

Hvis hydrometeret viser 1,072 så betyder det at 1 cm² af kølervæsken vejen 1,072 gram.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
