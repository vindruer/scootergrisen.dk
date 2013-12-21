<?php // æøåÆØÅ UTF-8 uden BOM

ini_set("date.timezone", "Europe/Copenhagen"); // for at undgå ...It is not safe to rely on the system's timezone settings... advarsel

include "class.xmlresponse.php";

if ($_POST && isset($_POST['msg']) && isset($_POST['url']) && isset($_POST['line']) && isset($_POST['useragent'])) {

   $filename = "{$_SERVER['DOCUMENT_ROOT']}/temp/onerror.txt";

   $msg = $_POST['msg'];
   $url = $_POST['url'];
   $line = $_POST['line'];
   $useragent = $_POST['useragent'];
   $tid = date("j/n/Y H:i:s");

   if($filhandle = fopen($filename, "a")) {

      //$logline = "[$msg] [linie $line i $url] [IP : {$_SERVER['REMOTE_ADDR']}] [" . date("M d H:i:s") . "]";
      $logline = "[$tid] [$msg] [$line] [$url] [$useragent]";
      fwrite($filhandle, "$logline\r\n");
      fclose($filhandle);

   }

}

$xml = new xmlResponse();
$xml->start();
$xml->end();

?>