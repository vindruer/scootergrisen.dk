<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "Bremser - Fejlfinding";
$overskrift = "Bremser - Fejlfinding";
$metadescription = "find og ret fejl på scooterens/knallertens bremser (dårlig bremse funktion, bremsegreb pulserer, bremse vil ikke give slip)";

$databasecenter = array(

'
skivebremse
' => '
'.afsnit('dårlig bremse funktion','
• luft i bremsesystem
• slidt belægning eller skive
• bremsevæske lækage
• belægning er beskidt med olie, fedt, bremsevæske
• gammel bremsevæske
• fejl på bremsevæske beholderens dele
• skæv bremseskive
').'

'.afsnit('bremsegreb pulserer','
• skæv bremseskive
• bukket aksel
• bremsecaliper sidder løst
• hjul skævt eller skadet
• lejer skadet eller slidte
').'

'.afsnit('bremse vil ikke give slip','
• stempel i bremsevæskebeholder (master cylinder) sidder fast
• bremsegreb sidder fast
• bremse caliper stempel sidder fast på grund af slid eller "snavs" omkring o-ringe
• fejl på bremseklodsernes belægning
• bremserkloder monteret forkert
').'
'

,'
tromlebremse
' => '
'.afsnit('dårlig bremse funktion','
• kabel er forkert justeret
• slidt bremsebelægning
• slidt bremsetromle
• bremsebelægning har fået olie, fedt, bremsevæske eller andet på sig
• bremsearm sidder forkert
• slidt bremearms aksel
').'

'.afsnit('bremsegreb pulserer','
• bremsetrommel er skæv
• aksel er skæv
• hjul er skævt
• fejl på lejer
').'

'.afsnit('bremse vil ikke give slip','
• forkert justeret kabel (for stramt)
• kabel er ikke smurt tilstrækkeligt
• bremsebakke fjeder er slidt (tromlebremse)
• bremsearm og aksel ikke smurt tilstrækkeligt
• fejl på bremsebelægning
• forkert monteret bremsebakker
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
