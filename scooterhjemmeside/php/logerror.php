<?php // æøåÆØÅ UTF-8 uden BOM

include "class.xmlresponse.php";

if ($_POST && isset($_POST['msg']) && isset($_POST['url']) && isset($_POST['line'])) {

   $filename = "{$_SERVER['DOCUMENT_ROOT']}/temp/onerror.txt";

   $msg = $_POST['msg'];
   $url = $_POST['url'];
   $line = $_POST['line'];
   $browser = $_SERVER["HTTP_USER_AGENT"];
   $tid = date("j/n/Y H:i:s");

   if($filhandle = fopen($filename, "a")) {

      //$logline = "[$msg] [linie $line i $url] [browser : $browser] [IP : {$_SERVER['REMOTE_ADDR']}] [" . date("M d H:i:s") . "]";
      $logline = "[$tid] [$msg] [$line] [$url] [$browser]";
      fwrite($filhandle, "$logline\r\n");
      fclose($filhandle);

   }

}

$xml = new xmlResponse();
$xml->start();
$xml->end();

?>