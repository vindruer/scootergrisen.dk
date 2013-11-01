<?php // æøåÆØÅ UTF-8 uden BOM

chdir('..');
require_once './php/opsetning_scooterhjemmeside.php';

if(isset($_GET) && isset($_GET['language'])){

   switch($_GET['language']){

      case 'da' :
      case 'da-DK' :
         $cookieverdi = 'da-DK';
         break;

      case 'en' :
      case 'en-UK' :
         $cookieverdi = 'en-UK';
         break;

      case '' :
         $cookieverdi = ''; // slet cookie
         break;

      default :
         $cookieverdi = 'en-UK';
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
   <meta name="description" content="Bruges til at skifte sprog på hjemmesiden">

   <style type="text/css">

      body  {
         text-align: center;
         color: gold;
         background: grey;
      }

   </style>

</head>

<body>

<h1>Brug "' . basename($_SERVER['SCRIPT_NAME']) . '?language=XX" for at skfite sprog</h1>
<h1>Use "' . basename($_SERVER['SCRIPT_NAME']) . '?language=XX" to change language</h1>

</body>

</html>
';

   echo $indhold;

}

?>