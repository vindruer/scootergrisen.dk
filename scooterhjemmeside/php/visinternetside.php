<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$q = '';

   $url = "http://localhost/chat/index.php";
   $url = "http://localhost/scooterhjemmeside/php/phpinfo.php";
   $url = "http://localhost/chat/";
   $url = "http://localhost/todo.txt";
   $url = "http://localhost/";

if(isset($_GET['url'])){

   $url = $_GET['url'];

}

if(isset($_GET['mode'])){

   $mode = $_GET['mode'];

}else{

   $mode = 'udenbr';

}

if(isset($_GET['title'])){

   $title = $_GET['title'];
   $overskrift = $_GET['title'];
   $deloverskrift = $_GET['title'];

}else{

   $title = "vis side";
   $overskrift = "vis side";
   $deloverskrift = "vis side";

}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FAILONERROR, true);

if(curl_exec($ch) === false){

   $q .= 'Fejl : ' . '<span style="font-weight:bold;">' . curl_error($ch) . '</span>';

}else{

   $q .= curl_exec($ch);

}

curl_close($ch);

$databasecenter = array(

'
'.$deloverskrift.'
' => '
' . $q

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $databaseright);

if($mode == "br"){

   foreach($databasecenter as $overskrift => $indhold){ echo visdel($overskrift, $indhold, true); }

}elseif($mode == "udenbr"){

   foreach($databasecenter as $overskrift => $indhold){ echo visdel($overskrift, $indhold, false); }

}

visslut(null, false);

?>
