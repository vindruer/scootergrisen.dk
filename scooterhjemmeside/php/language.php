<?php // æøåÆØÅ UTF-8 uden BOM

chdir('..');
require_once('./php/opsetning_scooterhjemmeside.php');

if(isset($_GET) && isset($_GET['language'])){

      switch($_GET['language']){

         case 'da' :
         case 'da_DK' :
            $cookieverdi = 'da_DK';
            break;

         case 'en' :
         case 'en_UK' :
            $cookieverdi = 'en_UK';
            break;

         case '' :
            $cookieverdi = ''; // slet cookie
            break;

         default :
            $cookieverdi = 'en_UK';
            break;

      }

      setcookie($setup['cookienavn_language'], $cookieverdi, 0, "/") || trigger_error("cookie blev ikke sendt");

      if(isset($_SERVER['HTTP_REFERER'])){

         header("location: " . $_SERVER['HTTP_REFERER']);
         exit;

      }

}else{

   $indhold = '
<!DOCTYPE html>

<html>

<head>

   <meta charset="utf-8">
   <title>Vælg sprog</title>
   <meta name="description" content="Brugen til at skifte mellem sprog på hjemmesiden">

   <style type="text/css">

      body  {
         text-align: center;
         color: gold;
         background: grey;
      }

   </style>

</head>

<body>

<h1>Brug "' . $_SERVER['SCRIPT_NAME'] . '?language=XX" til at vælge sprog</h1>

</body>

</html>
';

   echo $indhold;

}

?>