<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$filer_der_ikke_skal_vises = array(
    '.htaccess'
   ,'eksempler.php'
   ,'elektrisk.php'
   ,'fejl.php'
   ,'hentfil.php'
   ,'motor.php'
   ,'sog.php'
   ,'ratingoversigt.php'
   ,'sogningerfejlbesog.php'
   ,'statestik.php'
   ,'specielt_2taktscootere.php'
   ,'specielt_elektriskescootere.php'
   ,'test.php'
   ,'tilfeldig.php'
   ,'todo.php'
   ,'transmission.php'
   ,'usenet.php'
   ,'visbilled.php'
   ,'visfil.php'
   ,'login.php'
   );

$filer = hentfilliste('filer', $GLOBALS['setup']['datamappe']);

do{

   $tilfeldig_index = array_rand($filer, 1);
   $tilfeldig_fil = $filer[$tilfeldig_index];
   $tilfeldig_fil = basename($tilfeldig_fil);

}while(in_array($tilfeldig_fil, $filer_der_ikke_skal_vises));

$url = $GLOBALS['setup']['domainogdatamappe'] . '/' . basename($tilfeldig_fil);

header('Location: ' . $url);

exit;

?>
