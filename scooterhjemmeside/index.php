<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "scootergrisen.dk - En hjemmeside om scootere og knallerter";
$overskrift = "scootergrisen.dk - En hjemmeside om scootere og knallerter";
$metadescription = "her finder du info om scootere og knallerter som findes i Danmark, der må køre 25, 30 og 45 km/t";

$setup['visreklame']             = 0;
$setup['visspotlys']             = 1;
$setup['spotlysantal']           = count($setup['spotlys']);
$setup['counterogsocialemedier'] = 1;

$GLOBALS['setup']['head'] = '
<style type="text/css">

.mobileenhederoverskrift {
   margin: 1em auto;
   padding: 1em;
   text-align: center;
}

html {
   height: 100%; /* css footer and stay down */
}

body {
   height: 100%; /* css footer and stay down */
}

.altdetoverste_og_indholdet { /* css footer and stay down */
   min-height: 100%;
   margin: 0 auto -40px; /* the bottom margin is the negative value of the footers height */
}

.footertekst, .push { /* css footer and stay down */
   height: 40px; /* .push must be the same height as .footer */
   clear: both;
}

</style>
';

$databasecenter = array(

'
' => '
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, false, true, $databasecenter, true, true, true, null, null, false);

?>
