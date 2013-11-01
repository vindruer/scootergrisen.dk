<?php // æøåÆØÅ UTF-8 uden BOM

// bugs : hvis original billedet er 150 højt så bliver thumbnail billeder også 150 højt og ikke 160

// Dette script kræver at GD er installeret til PHP.

         //////////////////////////////////////////////////////////////////
        //                                                              //
       //    Vær opmærksom på output før billedet fra include filer    //
      //                                                              //
     //      Det kan betyde at billedet ikke vil blive vist          //
    //                                                              //
   //////////////////////////////////////////////////////////////////

chdir('..');
require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

if(!$GLOBALS['setup']['loggetind']){

   $billed = "{$GLOBALS['setup']['roden']}/{$GLOBALS['setup']['dataogbilledmappe']}/ikoner/erikkeloggetind.jpg";
   header('Content-type: image/jpeg');
   header('Content-Length: ' . filesize($billed));
   readfile($billed);
   exit();

}



    ///////////////
   //           //
  //   SETUP   //
 //           //
///////////////

$vedligeholdelse  = 0; // viser tekst info i stedet for at et billede
$fontfil          = "{$GLOBALS['setup']['roden']}/$setup[datamappe]/fonts/cambria.ttc";
$jpegkompression  = 90; // JPEG kvalitet 0 (dårligst, mindst) til 100 (bedst, størst)
$baggrundsfarve   = array(255, 255, 255); // RGB (0-255)
$filnavn2takt     = "{$GLOBALS['setup']['roden']}/{$GLOBALS['setup']['dataogbilledmappe']}/thumbnails_overlay/tilthumbnail_2takt.png";
$filnavn4takt     = "{$GLOBALS['setup']['roden']}/{$GLOBALS['setup']['dataogbilledmappe']}/thumbnails_overlay/tilthumbnail_4takt.png";
$filnavnelektrisk = "{$GLOBALS['setup']['roden']}/{$GLOBALS['setup']['dataogbilledmappe']}/thumbnails_overlay/tilthumbnail_elektrisk.png";
$filnavnhybrid    = "{$GLOBALS['setup']['roden']}/{$GLOBALS['setup']['dataogbilledmappe']}/thumbnails_overlay/tilthumbnail_hybrid.png";
$filnavn25        = "{$GLOBALS['setup']['roden']}/{$GLOBALS['setup']['dataogbilledmappe']}/thumbnails_overlay/tilthumbnail_25.png";
$filnavn30        = "{$GLOBALS['setup']['roden']}/{$GLOBALS['setup']['dataogbilledmappe']}/thumbnails_overlay/tilthumbnail_30.png";
$filnavn45        = "{$GLOBALS['setup']['roden']}/{$GLOBALS['setup']['dataogbilledmappe']}/thumbnails_overlay/tilthumbnail_45.png";
$filnavnzoom      = "{$GLOBALS['setup']['roden']}/{$GLOBALS['setup']['dataogbilledmappe']}/thumbnails_overlay/tilthumbnail_zoom.png";
$margin2takt      = array(0 , 30);
$margin4takt      = array(0 , 30);
$marginelektrisk  = array(0 , 30);
$marginhybrid     = array(0 , 30);
$margin25         = array(70,  0);
$margin30         = array(35,  0);
$margin45         = array(0 ,  0);
$marginzoom       = array(0 ,  0);
$beskeder         = array('');
$tekstoverbilled  = '';



    ///////////////////////////////////////////////
   //                                           //
  //   Check at alle nødvendige filer findes   //
 //                                           //
///////////////////////////////////////////////

check_om_filer_findes(
   array(
       $fontfil
      ,$filnavn2takt
      ,$filnavn4takt
      ,$filnavnelektrisk
      ,$filnavnhybrid
      ,$filnavn25
      ,$filnavn30
      ,$filnavn45
      ,$filnavnzoom
      )
   );



    ////////////////////////////////////
   //                                //
  //   Hent data fra query string   //
 //                                //
////////////////////////////////////

hentquery();



if(!file_exists($filnavn)){

   $GLOBALS['beskeder'][] = 'filen findes ikke : ' . $filnavn;
   exit;

}

    //////////////////////
   //                  //
  //   lav billedet   //
 //                  //
//////////////////////

if(isset($storrelse)){

   if($storrelse == 'lille'){

      $endeligstorrelse = array(180,160);
      $filnavn_som_skal_gemmes = "{$GLOBALS['setup']['rodenogdatamappe']}/{$GLOBALS['setup']['billedmappe']}/thumbnails/lille/" . basename($filnavn);

      specieltforlille($filurl, $sidelink);

      $billedresource = lavthumbnail('lille', $filnavn, $endeligstorrelse, $baggrundsfarve);

   }

   if($storrelse == 'mellem'){

      //$endeligstorrelse = array(550,400);
      //$endeligstorrelse = array(800,600);
      //$endeligstorrelse = array(800,null);
      //$endeligstorrelse = array(550,null);
      //$endeligstorrelse = array(650,null);
      $endeligstorrelse = array(null,500);
      $filnavn_som_skal_gemmes = "{$GLOBALS['setup']['rodenogdatamappe']}/{$GLOBALS['setup']['billedmappe']}/thumbnails/mellem/" . basename($filnavn);

      $billedresource = lavthumbnail('mellem', $filnavn, $endeligstorrelse, $baggrundsfarve);

   }

   if(isset($billedresource) && is_resource($billedresource)){

      outputbilled($billedresource, $filnavn_som_skal_gemmes, $jpegkompression);
      $GLOBALS['beskeder'][] = '$billedresource er sat til : ' . $billedresource;

   }else{

      $GLOBALS['beskeder'][] = '$billedresource er enten ikke sat eller ikke en resource';

   }

}



    ///////////////////////////////////////////////////////
   //                                                   //
  //   vis beskeder hvis i vedligeholdelses tilstand   //
 //                                                   //
///////////////////////////////////////////////////////

if($vedligeholdelse){

   visbeskeder($GLOBALS['beskeder']);

}



    ////////////////////
   //                //
  //   funktioner   //
 //                //
////////////////////

function check_om_filer_findes($filarray){

   foreach($filarray as $fil){

      if(file_exists($fil)){

         $GLOBALS['beskeder'][] = 'Filen findes : "' . $fil . '"';

      }else{

         $GLOBALS['beskeder'][] = 'Filen findes ikke : "' . $fil . '"';

      }
   }

}



function hentquery(){

   global $storrelse;
   global $filnavn;
   global $kmt;
   global $type;
   global $filurl;
   global $sidelink;

   if(isset($_SERVER["QUERY_STRING"])){

      if(isset($_GET["storrelse"])){

         $storrelse = $_GET["storrelse"];
         $GLOBALS['beskeder'][] = 'Storrelse sat til : ' . $storrelse;

      }else{

         $GLOBALS['beskeder'][] = 'Storrelse er ikke sat.';

      }

      if(isset($_GET["filnavn"])){

         $filnavn = $_GET["filnavn"];
         $filnavn = $GLOBALS['setup']['roden'] . '/' . $filnavn;
         $GLOBALS['beskeder'][] = 'Filnavn sat til : ' . $filnavn;

      }else{

         $GLOBALS['beskeder'][] = 'Filnavn er ikke sat.';

      }

      if(isset($_GET["kmt"])){

         $kmt = $_GET["kmt"];

      }

      if(isset($_GET["type"])){

         $type = $_GET["type"];

      }

      if(isset($_GET["filurl"])){

         $filurl = $_GET["filurl"];
         $GLOBALS['beskeder'][] = 'Filurl sat til : ' . $filurl;

      }

      if(isset($_GET["sidelink"])){

         $sidelink = $_GET["sidelink"];

      }

   }else{

      $GLOBALS['beskeder'][] = 'Query er tom.';

   }

}



function lavthumbnail($valg, $filnavn, $endeligstorrelse, $baggrundsfarve){

   global $filnavn2takt;
   global $filnavn4takt;
   global $filnavnelektrisk;
   global $filnavnhybrid;
   global $filnavn25;
   global $filnavn30;
   global $filnavn45;
   global $filnavnzoom;
   global $margin2takt;
   global $margin4takt;
   global $marginelektrisk;
   global $marginhybrid;
   global $margin25;
   global $margin30;
   global $margin45;
   global $marginzoom;

   $zoom = false; // standard værdi

   list($originalx, $originaly) = getimagesize($filnavn);

   $originalratio = $originalx/$originaly;



   if($endeligstorrelse[0] > $originalx){

      $endeligstorrelse[0] = $originalx;

   }

   if($endeligstorrelse[1] > $originaly){

      $endeligstorrelse[1] = $originaly;

   }

   if($endeligstorrelse[0] == null){

      $endeligstorrelse[0] = $endeligstorrelse[1] * $originalratio;

   }

   if($endeligstorrelse[1] == null){

      $endeligstorrelse[1] = $endeligstorrelse[0] / $originalratio;

   }



   if($endeligstorrelse[0] / $endeligstorrelse[1] > $originalratio){

      $thumbnailstorrelse[0] = $endeligstorrelse[1] * $originalratio;
      $thumbnailstorrelse[1] = $endeligstorrelse[1];

   }else{

      $thumbnailstorrelse[0] = $endeligstorrelse[0];
      $thumbnailstorrelse[1] = $endeligstorrelse[0] / $originalratio;

   }

   if($endeligstorrelse[0] > $originalx && $endeligstorrelse[1] > $originaly){

      $thumbnailstorrelse[0] = $originalx;
      $thumbnailstorrelse[1] = $originaly;

   }else{
/*
      if($valg == 'mellem'){

         if($endeligstorrelse[0] < $originalx && $endeligstorrelse[1] < $originaly){

            $zoom = true;

         }

      }
*/
   }



   // lav billede fra fil
   $originalbilled_resource = imagecreatefromjpeg($filnavn);

   // lav tomt billed
   $thumbnailresource = imagecreatetruecolor($thumbnailstorrelse[0], $thumbnailstorrelse[1]);
   $baggrund = imagecolorallocate($thumbnailresource, $baggrundsfarve[0], $baggrundsfarve[1], $baggrundsfarve[2]);
   imagefill($thumbnailresource, 0, 0, $baggrund);

   // kopier og ændre størrelse på del af billede med resampling
   // imagecopyresampled() er den funktion som tager længst tid i hele scriptet. For eksempel 2,6 sekunder
   imagecopyresampled($thumbnailresource, $originalbilled_resource, 0, 0, 0, 0, $thumbnailstorrelse[0], $thumbnailstorrelse[1], $originalx, $originaly);



   // lav det endelige billed
   $endeligresource  = imagecreatetruecolor($endeligstorrelse[0], $endeligstorrelse[1]);

   // sæt en farve og fuld billedet med farven
   $baggrund = imagecolorallocate($endeligresource , $baggrundsfarve[0], $baggrundsfarve[1], $baggrundsfarve[2]);
   imagefill($endeligresource , 0, 0, $baggrund);

   // kopier original billedet over på det nye billede i den korrekte thumbnail størrelse
   imagecopy($endeligresource , $thumbnailresource, $endeligstorrelse[0]/2 - $thumbnailstorrelse[0]/2, $endeligstorrelse[1]/2 - $thumbnailstorrelse[1]/2, 0, 0, $thumbnailstorrelse[0], $thumbnailstorrelse[1]);



   if($valg == 'lille'){

      if(isset($GLOBALS['tekstoverbilled'])){

         lavtekstoverbilled($endeligresource, $GLOBALS['tekstoverbilled']);

      }

      if(isset($GLOBALS['type'])){

         if($GLOBALS['type'] == "2 takt"){

            $lag = imagecreatefrompng($filnavn2takt);
            $lagx = imagesx($lag);
            $lagy = imagesy($lag);
            imagecopy($endeligresource , $lag, imagesx($endeligresource) - $lagx - $margin2takt[0], imagesy($endeligresource) - $lagy - $margin2takt[1], 0, 0, $lagx, $lagy);

         }

         if($GLOBALS['type'] == "4 takt"){

            $lag = imagecreatefrompng($filnavn4takt);
            $lagx = imagesx($lag);
            $lagy = imagesy($lag);
            imagecopy($endeligresource , $lag, imagesx($endeligresource) - $lagx - $margin4takt[0], imagesy($endeligresource) - $lagy - $margin4takt[1], 0, 0, $lagx, $lagy);

         }

         if($GLOBALS['type'] == "elektrisk"){

            $lag = imagecreatefrompng($filnavnelektrisk);
            $lagx = imagesx($lag);
            $lagy = imagesy($lag);
            imagecopy($endeligresource , $lag, imagesx($endeligresource) - $lagx - $marginelektrisk[0], imagesy($endeligresource) - $lagy - $marginelektrisk[1], 0, 0, $lagx, $lagy);

         }

         if($GLOBALS['type'] == "2 takt og elektrisk"){

            $lag = imagecreatefrompng($filnavnhybrid);
            $lagx = imagesx($lag);
            $lagy = imagesy($lag);
            imagecopy($endeligresource , $lag, imagesx($endeligresource) - $lagx - $marginhybrid[0] - $lagx - $lagx, imagesy($endeligresource) - $lagy - $marginhybrid[1], 0, 0, $lagx, $lagy);

            $lag = imagecreatefrompng($filnavn2takt);
            $lagx = imagesx($lag);
            $lagy = imagesy($lag);
            imagecopy($endeligresource , $lag, imagesx($endeligresource) - $lagx - $margin2takt[0] - $lagx, imagesy($endeligresource) - $lagy - $margin2takt[1], 0, 0, $lagx, $lagy);

            $lag = imagecreatefrompng($filnavnelektrisk);
            $lagx = imagesx($lag);
            $lagy = imagesy($lag);
            imagecopy($endeligresource , $lag, imagesx($endeligresource) - $lagx - $marginelektrisk[0], imagesy($endeligresource) - $lagy - $marginelektrisk[1], 0, 0, $lagx, $lagy);

         }

         if($GLOBALS['type'] == "4 takt og elektrisk"){

            $lag = imagecreatefrompng($filnavnhybrid);
            $lagx = imagesx($lag);
            $lagy = imagesy($lag);
            imagecopy($endeligresource , $lag, imagesx($endeligresource) - $lagx - $marginhybrid[0] - $lagx - $lagx, imagesy($endeligresource) - $lagy - $marginhybrid[1], 0, 0, $lagx, $lagy);

            $lag = imagecreatefrompng($filnavn4takt);
            $lagx = imagesx($lag);
            $lagy = imagesy($lag);
            imagecopy($endeligresource , $lag, imagesx($endeligresource) - $lagx - $margin4takt[0] - $lagx, imagesy($endeligresource) - $lagy - $margin4takt[1], 0, 0, $lagx, $lagy);

            $lag = imagecreatefrompng($filnavnelektrisk);
            $lagx = imagesx($lag);
            $lagy = imagesy($lag);
            imagecopy($endeligresource , $lag, imagesx($endeligresource) - $lagx - $marginelektrisk[0], imagesy($endeligresource) - $lagy - $marginelektrisk[1], 0, 0, $lagx, $lagy);

         }

      }

      if(isset($GLOBALS['kmt'])){

         if($GLOBALS['kmt'] == "25" || $GLOBALS['kmt'] == "2545" || $GLOBALS['kmt'] == "253045"){

            $lag = imagecreatefrompng($filnavn25);
            $lagx = imagesx($lag);
            $lagy = imagesy($lag);
            imagecopy($endeligresource , $lag, imagesx($endeligresource) - $lagx - $margin25[0], imagesy($endeligresource) - $lagy - $margin25[1], 0, 0, $lagx, $lagy);

         }

         if($GLOBALS['kmt'] == "253045" || $GLOBALS['kmt'] == "30" || $GLOBALS['kmt'] == "3045"){

            $lag = imagecreatefrompng($filnavn30);
            $lagx = imagesx($lag);
            $lagy = imagesy($lag);
            imagecopy($endeligresource , $lag, imagesx($endeligresource) - $lagx - $margin30[0], imagesy($endeligresource) - $lagy - $margin30[1], 0, 0, $lagx, $lagy);

         }

         if($GLOBALS['kmt'] == "253045" || $GLOBALS['kmt'] == "2545" || $GLOBALS['kmt'] == "3045" || $GLOBALS['kmt'] == "45"){

            $lag = imagecreatefrompng($filnavn45);
            $lagx = imagesx($lag);
            $lagy = imagesy($lag);
            imagecopy($endeligresource , $lag, imagesx($endeligresource) - $lagx - $margin45[0], imagesy($endeligresource) - $lagy - $margin45[1], 0, 0, $lagx, $lagy);

         }

      }

   }elseif($valg == 'mellem'){
/*
      if($zoom){

         $lag = imagecreatefrompng($filnavnzoom);
         $lagx = imagesx($lag);
         $lagy = imagesy($lag);
         imagecopy($endeligresource , $lag, imagesx($endeligresource) - $lagx - $marginzoom[0], imagesy($endeligresource) - $lagy - $marginzoom[1], 0, 0, $lagx, $lagy);

      }
*/
   }

   return $endeligresource ;

}



function specieltforlille($filurl, $sidelink){

   // Eksempel : filurl=altom.php

   $filurl = "{$GLOBALS['setup']['rodenogdatamappe']}/$filurl";

   (file_exists($filurl))
      ? $filindhold = file_get_contents($filurl, FILE_TEXT)
      : $GLOBALS['beskeder'][] = "Filen findes ikke : \"$filurl\"";

   $GLOBALS['beskeder'][] = '$filurl : ' . $filurl;
   $GLOBALS['beskeder'][] = '$sidelink : ' . $sidelink;

      // fjern data før $databasecenter som man indeholde scooter navne der giver den forkerte pris
      $filindhold = strstr($filindhold, '$databasecenter');

         $regex = "/$sidelink.+?'pris', '(.*?)', '(.*?)'/is";

         // preg_match_all
         // (noget)(noget)(noget)
         // $match[0] = alle 3 nogets
         // $match[1] = første noget
         // $match[2] = andet noget
         // $match[3] = sidste noget

         if(preg_match_all($regex, $filindhold, $match)){

               if(count($match)){

                  if($match[1][0] != ""){

                     ($match[2][0] != "")
                        ? $GLOBALS['tekstoverbilled'] = $match[1][0] . "-" . $match[2][0]
                        : $GLOBALS['tekstoverbilled'] = $match[1][0];

                     $GLOBALS['tekstoverbilled'] .= ",-";

                  }

               }else{

                     $GLOBALS['tekstoverbilled'] = "ingen pris";

               }

         }

   $GLOBALS['beskeder'][] = '$tekstoverbilled : ' . $GLOBALS['tekstoverbilled'];








   $regex = "/$sidelink.+?'motortype', '(.*?)'/is";

   // preg_match_all
   // (noget)(noget)(noget)
   // $match[0] = alle 3 nogets
   // $match[1] = første noget
   // $match[2] = andet noget
   // $match[3] = sidste noget

   if(preg_match_all($regex, $filindhold, $match)){

      $GLOBALS['beskeder'][] = 'preg_match_all() lykkedes';

         if(count($match)){

            if($match[1][0] != ""){

                  $motortypetmp = $match[1][0];

            }

         }else{

               $motortypetmp = "ingen hastighed";

         }

   }


   if(isset($motortypetmp)){

      $GLOBALS['type'] = $motortypetmp;

   }

   $GLOBALS['beskeder'][] = '$type : ' . $GLOBALS['type'];



   $regex = "/$sidelink.+?'hastighed', '(.*?)'/is";

   // preg_match_all
   // (noget)(noget)(noget)
   // $match[0] = alle 3 nogets
   // $match[1] = første noget
   // $match[2] = andet noget
   // $match[3] = sidste noget

   if(preg_match_all($regex, $filindhold, $match)){

         if(count($match)){

            if($match[1][0] != ""){

               $kmttemp = $match[1][0];

            }

         }else{

               $kmttemp = "ingen hastighed";

         }

   }




   if(isset($kmttemp)){

      switch($kmttemp){

         case '25' :

            $GLOBALS['kmt'] = 25;
            break;

         case '30' :

            $GLOBALS['kmt'] = 30;
            break;

         case '45' :

            $GLOBALS['kmt'] = 45;
            break;

         case '25 og 30' :

            $GLOBALS['kmt'] = 2530;
            break;

         case '25 og 45' :

            $GLOBALS['kmt'] = 2545;
            break;

         case '30 og 45' :

            $GLOBALS['kmt'] = 3045;
            break;

         case '25 og 30 og 45' :

            $GLOBALS['kmt'] = 253045;
            break;

      }

   }

   $GLOBALS['beskeder'][] = '$kmt : ' . $GLOBALS['kmt'];




   if(isset($GLOBALS['kmt'])){

      switch($GLOBALS['kmt']){

         case '25' :

            $GLOBALS['margin25'] = array(0 ,  0);
            break;

         case '30' :

            $GLOBALS['margin30'] = array(0 ,  0);
            break;

         case '45' :

            $GLOBALS['margin45'] = array(0 ,  0);
            break;

         case '2530' :

            $GLOBALS['margin25'] = array(35,  0);
            $GLOBALS['margin30'] = array(0 ,  0);
            break;

         case '2545' :

            $GLOBALS['margin25'] = array(35,  0);
            $GLOBALS['margin45'] = array(0 ,  0);
            break;

         case '3045' :

            $GLOBALS['margin30'] = array(35,  0);
            $GLOBALS['margin45'] = array(0 ,  0);
            break;

         case '253045' :

            $GLOBALS['margin25'] = array(70,  0);
            $GLOBALS['margin30'] = array(35,  0);
            $GLOBALS['margin45'] = array(0 ,  0);
            break;

      }

   }

   $GLOBALS['beskeder'][] = '$margin25 : ' . print_r($GLOBALS['margin25'], true);
   $GLOBALS['beskeder'][] = '$margin30 : ' . print_r($GLOBALS['margin30'], true);
   $GLOBALS['beskeder'][] = '$margin45 : ' . print_r($GLOBALS['margin45'], true);

}



function lavtekstoverbilled(&$billedresource, $tekstoverbilled){

   if(isset($tekstoverbilled) && $tekstoverbilled != ""){

      $fontstorrelse = 11;
      $vinkel = 0;
      $tekstx = 1;
      $teksty = $GLOBALS['endeligstorrelse'][1]-5;

      $tekstfarve = imagecolorallocate($billedresource, 255, 255, 255);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx-2, $teksty-2, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx-1, $teksty-2, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx  , $teksty-2, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx+1, $teksty-2, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx+2, $teksty-1, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx-2, $teksty-1, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx-1, $teksty-1, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx  , $teksty-1, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx+1, $teksty  , $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx+2, $teksty  , $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx-2, $teksty  , $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx-1, $teksty  , $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx  , $teksty  , $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx+1, $teksty  , $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx+2, $teksty  , $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx-2, $teksty  , $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx-1, $teksty  , $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx  , $teksty+1, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx+1, $teksty+1, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx+2, $teksty+1, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx-2, $teksty+1, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx-1, $teksty+2, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx  , $teksty+2, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx+1, $teksty+2, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx+2, $teksty+2, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);

      $tekstfarve = imagecolorallocate($billedresource, 0, 0, 0);
      imagefttext($billedresource, $fontstorrelse, $vinkel, $tekstx, $teksty, $tekstfarve, $GLOBALS['fontfil'], $tekstoverbilled);

   }

}



function outputbilled($resource, $fil, $jpegkompression){

   if($GLOBALS['vedligeholdelse']){

      if($GLOBALS['vedligeholdelse']){
         header('Content-type: text/html');
      }else{
         header('Content-type: image/jpeg');
      }

   }else{

      imagejpeg($resource, $fil, $jpegkompression); // gemmer billede resource til fil
      header('Content-type: image/jpeg');

   }

   if(!$GLOBALS['vedligeholdelse']){

      // outputter billede resource til browser
      if(imagejpeg($resource, null, $jpegkompression)){

         // frigiver hukommelse
         if(imagedestroy($resource)){

         }else{

            $GLOBALS['beskeder'][] = 'imagedestroy() fejlede';

         }

      }else{

         $GLOBALS['beskeder'][] = 'imagejpeg() fejlede';

      }

   }

}



function visbeskeder($data){

   echo 'Dette script laver thumbnails' . "<br>\r\n";

   foreach($data as $besked){

      echo $besked . "<br>\r\n";

   }

   echo "<br>\r\n";

}



// [26-Apr-2011 00:17:45] linie 266 i /customers/scootergrisen.dk/scootergrisen.dk/httpd.www/scooterhjemmeside/php/thumbnail.php [ getimagesize(): open_basedir restriction in effect. File(/customers/scootergrisen.dk/scootergrisen.dk/httpd.www/../billeder/sachsmadass.jpg) is not within the allowed path(s): (/customers/scootergrisen.dk/scootergrisen.dk/httpd.www:/customers/scootergrisen.dk/scootergrisen.dk/httpd.private:/customers/scootergrisen.dk/scootergrisen.dk/tmp:/var/www/diagnostics:/usr/share/php) ]
// [26-Apr-2011 00:17:45] linie 266 i /customers/scootergrisen.dk/scootergrisen.dk/httpd.www/scooterhjemmeside/php/thumbnail.php [ getimagesize(/customers/scootergrisen.dk/scootergrisen.dk/httpd.www/../billeder/sachsmadass.jpg): failed to open stream: Operationen er ikke tilladt ]
// [26-Apr-2011 00:17:45] linie 268 i /customers/scootergrisen.dk/scootergrisen.dk/httpd.www/scooterhjemmeside/php/thumbnail.php [ Division by zero ]
// [26-Apr-2011 00:17:45] linie 299 i /customers/scootergrisen.dk/scootergrisen.dk/httpd.www/scooterhjemmeside/php/thumbnail.php [ imagecreatefromjpeg(): open_basedir restriction in effect. File(/customers/scootergrisen.dk/scootergrisen.dk/httpd.www/../billeder/sachsmadass.jpg) is not within the allowed path(s): (/customers/scootergrisen.dk/scootergrisen.dk/httpd.www:/customers/scootergrisen.dk/scootergrisen.dk/httpd.private:/customers/scootergrisen.dk/scootergrisen.dk/tmp:/var/www/diagnostics:/usr/share/php) ]
// [26-Apr-2011 00:17:45] linie 299 i /customers/scootergrisen.dk/scootergrisen.dk/httpd.www/scooterhjemmeside/php/thumbnail.php [ imagecreatefromjpeg(/customers/scootergrisen.dk/scootergrisen.dk/httpd.www/../billeder/sachsmadass.jpg): failed to open stream: Operationen er ikke tilladt ]
// [26-Apr-2011 00:17:45] linie 302 i /customers/scootergrisen.dk/scootergrisen.dk/httpd.www/scooterhjemmeside/php/thumbnail.php [ imagecreatetruecolor(): Invalid image dimensions ]
// [26-Apr-2011 00:17:45] linie 303 i /customers/scootergrisen.dk/scootergrisen.dk/httpd.www/scooterhjemmeside/php/thumbnail.php [ imagecolorallocate() expects parameter 1 to be resource, boolean given ]
// [26-Apr-2011 00:17:45] linie 304 i /customers/scootergrisen.dk/scootergrisen.dk/httpd.www/scooterhjemmeside/php/thumbnail.php [ imagefill() expects parameter 1 to be resource, boolean given ]
// [26-Apr-2011 00:17:45] linie 308 i /customers/scootergrisen.dk/scootergrisen.dk/httpd.www/scooterhjemmeside/php/thumbnail.php [ imagecopyresampled() expects parameter 1 to be resource, boolean given ]
// [26-Apr-2011 00:17:45] linie 321 i /customers/scootergrisen.dk/scootergrisen.dk/httpd.www/scooterhjemmeside/php/thumbnail.php [ imagecopy() expects parameter 2 to be resource, boolean given ]

?>