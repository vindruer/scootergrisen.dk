<?php // æøåÆØÅ UTF-8 uden BOM

###############################################################################
#                                                                             #
#   Vær opmærksom på at output her fra filen vil få betydning for andre filer #
#   Så hvis der laves output her vil det også komme med i thumnbails.php som  #
#   inkluder denne opsætnings fil                                             #
#                                                                             #
###############################################################################
#                                                                             #
#   Setup indstillinger som er ens for alle siderne                           #
#   både scooterhjemmeside, netkoder                                          #
#                                                                             #
###############################################################################



$setup['globaltopbesked']              = ''; // eventuelt en vigtig besked som vises øverst på alle sider
$setup['textformstorrelse']            = '100x15';
$setup['email_emne_kontakt']           = 'Kontakt';
$setup['email_emne_fejl']              = 'Fejl';
$setup['email_emne_foreslalink']       = 'Foreslag (scootergrisen)';
$setup['email_emne_upload']            = 'Upload';
$setup['lavthumbnailslille']           = 0;
$setup['lavthumbnailsmellem']          = 0;
$setup['hentstorrelsepabilleder']      = 1;
$setup['maxbredde']                    = 800; // bruges til billeder og advarsel hvis box er for bred
$setup['vispilop']                     = 1; // viser pilen nederst på hjemmesiden så man let kan hoppe til topppen
$setup['downloadmappe']                = "download";



if(count($_COOKIE) && isset($_COOKIE["versionmd5"])){

   if(VERSION === $_COOKIE["versionmd5"]){

      $setup['loggetind'] = 1;

   }

}



if(isset($_SERVER['REQUEST_METHOD'])){

   if($_SERVER['REQUEST_METHOD'] == "POST"){

      if(isset($_POST['funktion'])){

         if($_POST['funktion'] == "login"){

            if(VERSION === md5($_POST["bareetfelt"])){

               // sæt cookie så man bliver ved med at være logget ind
               setcookie("versionmd5", VERSION, 0, "/") || trigger_error("cookie blev ikke sendt");
               $setup['loggetind'] = 1;

            }

         }elseif($_POST['funktion'] == "logud"){

            // ved logud : Warning: Cannot modify header information - headers already sent by (output started at \P.DK\orsiden. psatning.php on line 48
            setcookie("versionmd5", "", time() - 3600, "/") || trigger_error("cookie blev ikke sendt");
            $setup['loggetind'] = 0;

         }

      }

   }

}






if($setup['loggetind']){

   if($_POST){

      if(isset($_POST['funktion'])){

         require_once('hovedloggetind.php');

      }

   }

}



function fejlbesked($fejlnummer, $fejl, $fil, $linie, $context){

   $tekst = '';
   $besked = '';

   $tekst .= "$fejlnummer - ";
   // 2 = E_WARNING

   if($linie != 0){

      $tekst .= "linie $linie";

   }

   if($fil != 'Unknown'){

      $tekst .= " i $fil";

   }

   $besked .= ''
           . ' - '
           . $fejl
           . ' - '
           . $tekst
           . ' '
           . '[ <span class="fejlbeskedfrafunktion">Status : ' . $fejl . '</span> ]'
           . ' '
           . '[ ' . $_SERVER["SCRIPT_NAME"] . ' ]'
           . "\r\n"
           ;


   if(isset($GLOBALS['fejl']['beskeder'])){

      $GLOBALS['fejl']['beskeder'][] = $besked;

   }

   error_log($tekst . ' [ ' . $fejl . ' ]');

}



ini_set('session.save_path', $setup['sessionmappe']);
ini_set('ignore_repeated_errors', 0);
ini_set('magic_quotes_runtime', 0); // This feature has been DEPRECATED as of PHP 5.3.0
ini_set('error_log', "{$setup['tempfuld']}/{$setup['errorlogfilnavn']}");
ini_set('default_charset', 'UTF-8'); // hvilken Content-type der skal sendes med i headeren
ini_set("mbstring.encoding_translation", "On");
ini_set("mbstring.substitute_character", "X");
ini_set("mbstring.detect_order", "auto");
ini_set("iconv.input_encoding", "UTF-8");
ini_set("iconv.internal_encoding", "UTF-8");
ini_set("iconv.output_encoding", "UTF-8");
ini_set('error_prepend_string', "$_SERVER[SERVER_NAME] - Fejl"); // før hver fejlbesked
ini_set('track_errors', 0); // $php_errormsg indeholder sidste fejl hvis 1

mb_detect_order("UTF-8, ISO-8859-1"); // kræver multibyte modul i php
mb_internal_encoding('UTF-8'); // kræver multibyte modul i php
mb_http_output("UTF-8"); // kræver multibyte modul i php

$setup['setlocalreturn'] = setlocale(LC_ALL, 'Danish_Denmark.1252', 'danish_denmark', 'danish', 'dk_DK', 'dk_DK@euro'); // setlocal påvirker ting som decimal tegn (. / ,) og dagnavn (sunday / søndag) | et "locale name" kan bestå af 3 dele for eksempel i "en_GB.1252" | en = sprog | _GB = land | .1252 = character set

if(defined('IN_PHPBB')){ // brug ikke i phpBB fordi så kommer der en masse "Undefined index..." fejlbeskeder
   set_error_handler('fejlbesked', E_ALL & ~E_NOTICE); // vis ikke E_NOTICE i phpBB3 fordi der giver "Undefined index" fejlbeskeder i logfilen
}else{
   set_error_handler('fejlbesked', E_ALL ^ E_WARNING); // uden parameter nummer 2 kaldes funktionen ved alle beskeder ligegyldigt hvad error_reporting er sat til.
}

?>