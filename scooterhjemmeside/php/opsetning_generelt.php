<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/grundleggendeopsetning.php';

$setup['headekstra']             = '';
$setup['sidetopbesked']          = '';
$setup['shortcuticon']           = "ikoner/shortcuticon0001.ico?version=2";
$setup['datamappe']              = "generelt";
$setup['billedmappe']            = "billeder";
$setup['dataogbilledmappe']      = "$setup[datamappe]/$setup[billedmappe]";

$setup['tempfuld']               = "$setup[roden]/$setup[tempmappe]";
$setup['domainogdatamappe']      = "$setup[domain]/$setup[datamappe]";

$setup['rodenogdatamappe']       = "$setup[roden]/$setup[datamappe]";

$setup['errorlogfilnavn']        = "fejl.txt";
$setup['sessionmappe']           = "$setup[tempfuld]/sessions";

$setup['visreklame']             = 0;

require_once './php/hovedopsetning.php';

?>