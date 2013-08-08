<?php // æøåÆØÅ UTF-8 uden BOM

// vis scootergalleri video i forummet
// find ud af om videoen er en FLV eller MP4 fil
// http://www.scootergalleri.dk/vid_vis.aspx?VideoID=20637

chdir('..');
require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$indhold = '';

if(isset($_GET["url"])){

   if(stripos($_GET["url"], 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=') === 0
      || stripos($_GET["url"], 'http://scootergalleri.dk/vid_vis.aspx?VideoID=') === 0
      || stripos($_GET["url"], 'http://www.scootergalleri.dk/video/') === 0
      || stripos($_GET["url"], 'http://scootergalleri.dk/video/') === 0){

      $videoid = hentvideoid($_GET["url"]);

      if(is_numeric($videoid)){

         if($videoid >= 0 && $videoid <= 200000){

            //$indhold .= visflashkode($_GET["url"]);
            $indhold .= visflash('0', $_GET["url"], '', true, '640', '390', '', false);

         }else{

            $indhold .= 'video id (' . $videoid . ') er for lavt eller for højt';

         }

      }else{

         $indhold .= 'video id (' . $videoid . ') er ikke et nummer';

      }

   }else{

      $indhold .= 'url= er ikke sat til en scootergalleri video.... eller er den.';

   }

}else{

   $indhold .= 'url= er ikke sat (For eksempel : ' . basename($_SERVER['SCRIPT_NAME']) . '?url=http://www.scootergalleri.dk/vid_vis.aspx?VideoID=XXXXX)';

}



echo $indhold;

function hentvideoid($url){

   if(stripos($url, 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=') === 0
      || stripos($url, 'http://scootergalleri.dk/vid_vis.aspx?VideoID=') === 0){

      if(stripos($url, 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=') === 0){

         $scootergalleri_videoid = str_replace("http://www.scootergalleri.dk/vid_vis.aspx?VideoID="
                                             , ""
                                             , $url
                                             );

      }

      if(stripos($url, 'http://scootergalleri.dk/vid_vis.aspx?VideoID=') === 0){

         $scootergalleri_videoid = str_replace("http://scootergalleri.dk/vid_vis.aspx?VideoID="
                                             , ""
                                             , $url
                                             );

      }

      return $scootergalleri_videoid;

   }elseif(stripos($url, 'http://www.scootergalleri.dk/video/') === 0
      || stripos($url, 'http://scootergalleri.dk/video/') === 0){

      $scootergalleri_videoid = intval(substr($url, strrpos($url, '/') + 1));
      return $scootergalleri_videoid;

   }


}



function visflashkode($url){

   $indhold = '';

   $indhold .= visflash('0', $url, '', true, '640', '390', '', false);

   return $indhold;

}



/*
-------------------------------------------------------------------------------

function scootergallerioversigt($database){

   $indhold = '';

   foreach($database as $url){

      if(stripos($url, 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=') === 0
      || stripos($url, 'http://scootergalleri.dk/vid_vis.aspx?VideoID=') === 0){

         if(stripos($url, 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=') === 0){

            $scootergalleri_videoid = str_replace("http://www.scootergalleri.dk/vid_vis.aspx?VideoID="
                                                , ""
                                                , $url
                                                );

         }

         if(stripos($url, 'http://scootergalleri.dk/vid_vis.aspx?VideoID=') === 0){

            $scootergalleri_videoid = str_replace("http://scootergalleri.dk/vid_vis.aspx?VideoID="
                                                , ""
                                                , $url
                                                );

         }

         $billedurl = 'http://video.scootergalleri.dk/uploads_video/' . $scootergalleri_videoid . '.flv.jpg';

         //$AgetHeaders = @get_headers($billedurl);
         //if (preg_match("|200|", $AgetHeaders[0])) {

         // 176 × 144
         // 320 × 240
         // 608 × 360
         // 640 × 352

         $width = '45';
         $height = '40';

         $indhold .= '<li>';
         $indhold .= ahref(

              'afspilvideo.php?url=' . $url
            , viseksterntbilled($billedurl, '')
            , 'target="_blank"'

         );

         $indhold .= '</li>';

         //$indhold .= visbilled('0', $billedurl, 'test');


         //}


      }

   }

   return $indhold;

}



function gem_scootergalleri_videoid($virker, $id, $filendelse = ''){

   $fil_virker_mp4 = "{$GLOBALS['setup']['tempfuld']}/scootergalleri_virker_mp4.txt";
   $fil_virker_flv = "{$GLOBALS['setup']['tempfuld']}/scootergalleri_virker_flv.txt";
   $fil_virker_ikke = "{$GLOBALS['setup']['tempfuld']}/scootergalleri_virker_ikke.txt";
   $datatilfil = $id . "\r\n";

   if($virker){

      if($filendelse != ''){

         if($filendelse == 'mp4'){

            $fil = "{$GLOBALS['setup']['tempfuld']}/scootergalleri_video_ider_som_er_testet_mp4.txt";

         }elseif($filendelse == 'flv'){

            $fil = "{$GLOBALS['setup']['tempfuld']}/scootergalleri_video_ider_som_er_testet_flv.txt";

         }

      }

   }else{

      // hvis er på localhost og ingen internet forbindelse så skal videoid
      // jo ikke gemmes som virker ikke men det gør den
      $fil = "{$GLOBALS['setup']['tempfuld']}/scootergalleri_video_ider_som_er_testet_ikke.txt";

   }

   if(checkomfindesellersopret("fil", $fil)){

      $bytesskrevet = file_put_contents($fil, $datatilfil, FILE_APPEND | LOCK_EX);

      if($bytesskrevet === false){

         trigger_error("der kunne ikke skrives til filen: \"$fil\".", E_USER_ERROR);

      }

   }

}
*/



?>
