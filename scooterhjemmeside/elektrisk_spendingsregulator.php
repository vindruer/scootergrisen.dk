<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "spændingsregulator - Elektrisk";
$overskrift = "spændingsregulator - Elektrisk";
$metadescription = "forklaring af spændingsregulatoren på en scooter som begrænser spændingen fra generatoren og laver vækselstrøm om til jævnstrøm";

$databasecenter = array(

'
spændingsregulator
' => '
Spændingsregulatorens opgave er at begrænse generatorens volt niveau og ensrette generatorens vekselstrøm til jævnstrøm.

Sådan kan en spændingsregulator se ud.
'.visbilled('1', 'billed0271.jpg', 'spændingsregulator', false, true).'
Her ses en spændingsregulator fra en Kymco Super 8.
'.visbilled('1', 'billed0001.jpg', 'spændingsregulator fra kymco super 8', false, true).'
'.visbilled('1', 'billed3276.jpg', 'spændingsregulator med flat stik', false, true).'
Spændingsregulatoren bliver varm så derfor har den kølefinner.

Jo flere o/min motoren køre med jo flere volt vil generatoren producere.

Ved 3000 o/min kan generatoren for eksempel producere 25-35 volt.

Her ses spændingsregulator data for Kymco Agility.
'.visbilled('1', 'billed0626.jpg', 'kymco agility spændingsregulator data', false, true).'
Her ses spændingsregulator data for Kymco Super 8.
'.visbilled('1', 'billed2307.jpg', 'kymco super 8 spændingsregulator data', false, true).'

'.afsnit('typer','
Der findes forskellige typer spændingsregulatorer.

Spændingsregulatoren på en Kymco Agility er af typen "Single-phase half-wave SCR".
Spændingsregulatoren på en Kymco Super 8 er af typen "Single-phase full-wave SCR".
Generatoren levere ofte 1 fase til spændingsregulatoren.

SCR betyder thyristor.
').'

'.afsnit('faser','
Generatoren levere enten 1 fase eller 3 faser.
De fleste generatorer på 50 cm³ scootere har 1 fase.
På større scootere kan generatoren have 3 faser.
'.visbilled('1', 'billed0405.jpg', '1 fase og 3 faser', false, true).'
').'
'.afsnit('ensretning','
Spændingsregulatoren laver generatorens vekselstrøm om til jævnstrøm.
Altså strøm som kun bevæger sig i en retning.

"Half-wave" metoden bruger 1 diode til fjerne halvdelen af vekselstrømmen.
Her bliver den gennemsnitlige jævnstrøms værdi cirka 37 % af sinus kurvens højeste punkt.
'.visbilled('1', 'billed0403.jpg', 'half-wave ensretning', false, true).'
'.visbilled('1', 'billed2470.jpg', '1 diode ensretning', false, true).'
"Full-wave" metoden bruger 4 dioder til at vende halvdelen af faserne.
Her bliver den gennemsnitlige jævnstrøms værdi cirka 63 % af sinus kurvens højeste punkt.
'.visbilled('1', 'billed0404.jpg', 'full-wave ensretning', false, true).'
'.visbilled('1', 'animation0021.gif', 'full-wave ensretning med 4 dioder', false, true).'
'.visbilled('1', 'billed2467.jpg', '4 dioder brokobling', false, true).'
Her ses "full-wave" ensretning af en generator med 3 faser.
'.visbilled('1', 'billed0407.jpg', '3 faser ensretning', false, true).'
Som det ses giver "full-wave" ensretning af 3 faser den meste stabile jævnstrøm.
').'

'.afsnit('udjævning','
For at udglatte jævnstrømskurven efter ensretning med dioder kan man bruge en kondensator.
'.visbilled('1', 'billed2469.jpg', '4 dioder og kondensator', false, true).'
'.visbilled('1', 'billed2468.jpg', 'udjævning med kondensator', false, true).'
Udjævning med kondensator.
'.visbilled('1', 'billed2471.jpg', 'udjævning', false, true).'
Jo større kondensator jo mere stabil (flad) bliver kurven.
'.visbilled('1', 'billed2472.jpg', 'udjævning med kondensator', false, true).'
').'

'.afsnit('reguleringsmetode','
Spændingsregulatoren begrænser volt niveauet til 14-15 volt og sender de overskydende volt til stelforbindelsen gennem thyristoren (SCR).
').'

'.afsnit('adskilt spændingsregulator','
Elektronikken i spændingsregulatoren er fastholdt og beskyttet af kunstharpiks som kaldes resin på engelsk.
Resin er det blanke i midten.
'.visbilled('1', 'billed0718.jpg', 'spændingsregulator kymco super 8 resin', false, true).'
Resin er rimelig hårdt ved stuetemperatur men det kan blødgøres med en varmeblæser og fjernes med en lille skruetrækker.
'.visbilled('1', 'billed0628.jpg', 'spændingsregulator kymco super 8 resin', false, true).'
Når resinen er fjernet kan man skrue en skrue ud og fjerne elektronikken fra huset.
'.visbilled('1', 'billed0629.jpg', 'spændingsregulator kymco super 8 resin fjernet', false, true).'
Thyristorene bliver varme under brug og sidder på pladen der skrues fast på huset.
Det hvide pasta i mellem plade og hus sørger for god varmeoverførsel.
'.visbilled('1', 'billed0631.jpg', 'spændingsregulator kymco super 8 køleplade', false, true).'
Her ses 2 runde ensrettere som den røde ledning (batteriets + terminal) er forbundet til.
Under de 2 ensrettere ses 2 thyristorer også kaldet SCR.
Det er disse 2 thyristorer som bliver varme.
'.visbilled('1', 'billed0630.jpg', 'spændingsregulator kymco super 8 ensretter thyristor SCR', false, true).'
De 4 runde med hvid kant er ensrettere.
'.visbilled('1', 'billed0632.jpg', 'spændingsregulator kymco super 8 ensrettere køleplade', false, true).'
Øverst ses de 2 thyristorer mærket SCR.
Så er der en thyristor mærket Q1.
Så er der nogle modstande mærket R1, R2, R3 osv.
Så er der nogle zener dioder mærket ZD (dem med glas).
Så er der en elektrolyt kapacistor nederst til højre.
'.visbilled('1', 'billed0633.jpg', 'spændingsregulator kymco super 8 thyristor SCR zener diode modstand kapacistor transistor', false, true).'
Her ses hvordan spændingsregulatoren er forbundet til generator, tændingslås, sikring og batteri.
'.visbilled('1', 'billed0635.jpg', 'spændingsregulator kymco super 8 ledningsnet', false, true).'
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
