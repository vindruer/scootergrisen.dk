<?php // æøåÆØÅ UTF-8 uden BOM

// Viser en masse info om PHP

chdir('..');
require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';

$indhold = '';

if($GLOBALS['setup']['loggetind']){

$indhold .= '
<style type="text/css">

   body {
      margin: auto;
   }

   .clearboth {
      clear: both;
   }

   .mina {
      padding: 10px;
      margin: 10px;
      float: left;
      border: 1px solid #000;
   }

   .minb {
      margin: 10px;
      float: right;
   }

   .minc {
      padding: 5px;
      margin: 10px;
   }

   .mind {
      height: 10px;
   }

   .mine {
      border: 1px solid #000;
      padding: 10px;
      margin: 10px;
   }

   .minf {
      border-radius: 20px;
   }

</style>
';

   $extensions = get_loaded_extensions();
   natcasesort($extensions);

   $indhold .= ''
      . '<div class="mina">'."\r\n"
      . 'PHP Version : ' . phpversion() . "<br>\r\n"
      . 'Operativ system : ' . php_uname('s') . "<br>\r\n"
      . 'Hostname : ' . php_uname('n') . "<br>\r\n"
      . 'Release name : ' . php_uname('r') . "<br>\r\n"
      . 'Version : ' . php_uname('v') . "<br>\r\n"
      . 'Machine type : ' . php_uname('m') . "<br>\r\n"
      ;

   if(isset($GLOBALS['setup']['setlocalreturn'])){

      $indhold .= 'Setlocalreturn : ' . $GLOBALS['setup']['setlocalreturn'] . "<br>\r\n";

   }

   $indhold .= ''
      . 'utf8_encode(strftime(\'%c\')) : ' . utf8_encode(strftime('%c')) . "<br>\r\n"
      . '</div>'."\r\n"

      . '<div class="minb">'."\r\n"
      . '<div class="clearboth mind"></div>'."\r\n"
      . '</div>'."\r\n"

      . '<div class="clearboth"></div>'."\r\n"

      . '<div class="minc">Loaded extionsions :</div>'."\r\n"
      . '<div class="mine">'."\r\n"
      . implode(", ", $extensions)
      . '</div>'."\r\n"
      ;

   // phpinfo() laver desværre <!DOCTYPE og <HTML osv

   phpinfo(INFO_ALL);

   // phpinfo(INFO_GENERAL);
   // phpinfo(INFO_VARIABLES);
   // phpinfo(INFO_CONFIGURATION);
   // phpinfo(INFO_ENVIRONMENT);
   // phpinfo(INFO_MODULES);
   // phpinfo(INFO_CREDITS);
   // phpinfo(INFO_LICENSE);

}else{

   $indhold .= ''
      . '<!DOCTYPE html>' . "\r\n"
      . "\r\n"
      . '<html>' . "\r\n"
      . "\r\n"
      . '<head>' . "\r\n"
      . "\r\n"
      . '   <meta charset="utf-8">' . "\r\n"
      . '   <title>Ikke så meget</title>' . "\r\n"
      . "\r\n"
      . '</head>' . "\r\n"
      . "\r\n"
      . '<body>' . "\r\n"
      . "\r\n"
      . '<h1>Du skal egentligt være logget ind for at se indholdet</h1>' . "\r\n"
      . "\r\n"
      . '</body>' . "\r\n"
      . "\r\n"
      . '</html>'
      ;

}

echo $indhold;

?>