<?php // æøå utf8 uden bom

// find ud af om scootergalleri video id findes og gem i fil.

echo 'start';
echo "\r\n";

include_once('php/opsetning_scooterhjemmeside.php');
include_once('../scooterhjemmeside/php/funktioner.php');
include_once('php/funktioner.php');
$virkerfil = 'scootergallerivideoiddervirker.txt';
$virkerikkefil = 'scootergallerivideoiddervirkerikke.txt';
$sidsteidfil = 'scootergallerisidsteidfil.txt';

$maximum = 90000;
$checkantalpergang = 10000;

$idarray = array();
$idarrayvirker = array();
$idarrayvirkerikke = array();

   $dataind = file_get_contents($virkerfil);
   $dataind = unserialize($dataind);
   $idarrayvirker = $dataind;

if(file_exists($sidsteidfil)){

   $dataind = file_get_contents($sidsteidfil);
   $fra = $dataind;

}else{

   $fra = end($idarrayvirker);

}
   $fra++;

   echo "<br/><pre>";
   echo "starter fra : " . $fra;
   echo "<br/>";

$gange = 0;

for($teller = $fra; $gange < $checkantalpergang && $teller <= $maximum; $teller++){

   $idarray[] = $teller;
   $gange++;

}

//print_r($idarray);

$gange = 0;

foreach($idarray as $id){

      $url = 'http://video.scootergalleri.dk/uploads_video/' . $id . '.flv.jpg';

      $headers = @get_headers($url);

      //print_r($headers);

      if (preg_match("|200|", $headers[0])) {

         echo $id . " : ";
         echo $headers[0];
         $idarrayvirker[] = $id;

      }else{

         echo $id . " : ";
         echo $headers[0];
         $idarrayvirkerikke[] = $id;

      }

      echo "\r\n";

   $gange++;

   if($gange >= 20){

      $dataud = $idarrayvirker;
      $dataud = serialize($dataud);
      $bytesskrevet = file_put_contents($virkerfil, $dataud, FILE_TEXT | LOCK_EX);

      $dataud = $id;
      $bytesskrevet = file_put_contents($sidsteidfil, $dataud, FILE_TEXT | LOCK_EX);
      $gange = 0;
      flush();

   }

$sidsteid = $id;

}




$dataud = $idarrayvirker;
$dataud = serialize($dataud);
$bytesskrevet = file_put_contents($virkerfil, $dataud, FILE_TEXT | LOCK_EX);
echo 'bytes skrevet til filen "' . $virkerfil . '" : ' . $bytesskrevet . "\r\n";

$dataud = $idarrayvirkerikke;
$dataud = serialize($dataud);
$bytesskrevet = file_put_contents($virkerikkefil, $dataud, FILE_TEXT | LOCK_EX);
echo 'bytes skrevet til filen "' . $virkerikkefil . '" : ' . $bytesskrevet . "\r\n";

$dataud = $sidsteid;
$bytesskrevet = file_put_contents($sidsteidfil, $dataud, FILE_TEXT | LOCK_EX);
echo 'bytes skrevet til filen "' . $sidsteidfil . '" : ' . $bytesskrevet . "\r\n";


echo "<br/>\r\n";
echo '--------------------------------------------------';
echo '-------------- DATA HENTET  ---------------';
echo '--------------------------------------------------';
echo "<br/>\r\n";
echo "\r\n";


echo "<br/>\r\n";
echo "sidste : ";
echo "<br/>\r\n";

$dataind = file_get_contents($sidsteidfil);

echo $dataind;
echo "<br/>\r\n";
flush();

$dataind = file_get_contents($virkerfil);
$dataind = unserialize($dataind);

print_r($dataind);

echo 'slut';
echo "<br/>\r\n";
echo "\r\n";

?>
