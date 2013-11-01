<?php // æøåÆØÅ UTF-8 uden BOM

// vis flv/mp4 video i forummet

chdir('..');
require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$indhold = '';

if(isset($_GET["file"])){

   $indhold .= '<object type="application/x-shockwave-flash" data="/scooterhjemmeside/flash/jwplayer.swf" width="550" height="412">' . "\r\n";

   $indhold .= '<param name="movie" value="/scooterhjemmeside/flash/jwplayer.swf">' . "\r\n";
   $indhold .= '<param name="allowFullScreen" value="true">' . "\r\n";
   $indhold .= '<param name="FlashVars" value="file=' . $_GET["file"] . '';

   if(isset($_GET["image"])){

      $indhold .= '&image=' . $_GET["image"];

   }

   $indhold .= '">' . "\r\n";

   $indhold .= 'Flash virker ikke.' . "\r\n";

   $indhold .= '</object>' . "\r\n";

}else{

   $indhold .= 'file= er ikke sat' . "\r\n";

}

echo $indhold;

?>
