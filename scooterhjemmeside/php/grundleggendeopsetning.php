<?php // æøåÆØÅ UTF-8 uden BOM

###############################################################################
#                                                                             #
#  1:                                                                         #
#  Den grundlæggende opsætning er den fil som kaldes først før alle de andre  #
#                                                                             #
#  2:                                                                         #
#  Derefter sættes stier som variere alt efter om det er                      #
#  scooterhjemmeside eller netkoder                                           #
#                                                                             #
#  3:                                                                         #
#  Derefter indsættes hovedopsetning med yderligere opsætning                 #
#                                                                             #
###############################################################################

require_once('./php/checkipreferer.php');
checkip(); // exit hvis IP adresse har spammet
checkreferer();

ini_set("date.timezone", "Europe/Copenhagen"); // for at undgå ...It is not safe to rely on the system's timezone settings... advarsel
//  [phpBB Debug] PHP Warning: in file /customers/c/e/1/scootergrisen.dk/httpd.www/scooterhjemmeside/php/grundleggendeopsetning.php on line 21: ini_set(): Cannot change zlib.output_compression - headers already sent
//ini_set('zlib.output_compression', '1'); // hvis kompression er sat til kan det betyde at output ikke bliver sendt til browseren selvom man bruge flush()... skal vist bruges før eventuelt buffer start (ob_start)
//ini_set('zlib.output_compression_level', '-1'); // 0 = ingen 9 = mest (-1 = server vælger)

$setup = array(); // skal indeholde indstillinger
$fejl = array(); // skal indeholde fejlbeskeder

$setup['loggetind'] = 0;

if($setup['loggetind']){

   $setup['loggetind_pa_den_harde_made'] = true;

}



if($setup['loggetind']){

   error_reporting(-1); // error_reporting(-1) = viser alle fejl også dem der tilføjes i fremtiden
   ini_set('display_startup_errors', 'on');
   ini_set('display_errors', true);
   ini_set('html_errors', 'false');
   ini_set("implicit_flush", true);

}else{

   error_reporting(0); // skjul fejlbeskeder for brugerne
   ini_set('display_startup_errors', 'off');
   ini_set('display_errors', false);
   ini_set('html_errors', 'false');
   ini_set("implicit_flush", false);

}

$setup['dialogsymlinkfil'] = "download/dialog/hent"; // uden / til sidst fordi det er et sym link. Altså en fil

$setup['tempmappe']      = "temp";
$setup['besogfilnavn']   = "besog.txt";

$setup['domain']         = "http://$_SERVER[SERVER_NAME]";

require_once('config_login.php');



$setup['roden'] = $_SERVER["DOCUMENT_ROOT"];



if($setup['roden'] == "C:/Users/Administrator/Desktop/scootergrisen.dk"){

   $setup['lokalt'] = true;

   ini_set('log_errors', 1);

   require_once('config_mysql_localhost.php');

   $setup['minemail'] = "info@localhost.localdomain"; // one.com begrænser eksterne email adresser til 20 om dagen på grund af spam. Derfor brug en intern email adresse og viderestil så de emails til den eksterne emailadresse.
   ini_set('sendmail_from', $setup['minemail']); // kun til windows systemer
   ini_set('SMTP', 'localhost'); // kun til windows systemer
   ini_set('smtp_port', '25'); // kun til windows systemer
   ini_set('mail.add_x_header', '1'); // PHP 5.3.0
   ini_set('mail.log', '1'); // PHP 5.3.0

}else{

   $setup['lokalt'] = false;

   ini_set('log_errors', 1);

   require_once('config_mysql_webhotel.php');

   $setup['minemail'] = "info@netkoder.dk"; // one.com begrænser eksterne email adresser til 20 om dagen på grund af spam. Derfor brug en intern email adresse og viderestil så de emails til den eksterne emailadresse.
   ini_set('sendmail_from', $setup['minemail']); // kun til windows systemer
   ini_set('SMTP', 'mailout.one.com'); // kun til windows systemer
   ini_set('smtp_port', '25'); // kun til windows systemer
   ini_set('mail.add_x_header', '1'); // PHP 5.3.0
   ini_set('mail.log', '1'); // PHP 5.3.0

}



$setup['keywords'] = array(
   ''
);



$setup['cookienavn_language'] = 'language';

?>