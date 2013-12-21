<?php

chdir('..');
require_once './php/grundleggendeopsetning.php';

#
# Test værdier. Hvis de ikke er gyldige så exit
#

if ($_GET && isset($_GET['rating']) && isset($_GET['url'])) {

   if (!empty($_GET['url']) && preg_match('/^[a-z0-9_\-.\/\\\]*$/i', $_GET['url'])) {

      $url = $_GET['url'];

   } else {

      echo "computer says no";
      exit;

   }

   if (!empty($_GET['rating']) && is_numeric($_GET['rating']) && $_GET['rating'] >= 1 && $_GET['rating'] <= 5) {

      $rating = $_GET['rating'];

   } else {

      echo "computer says no";
      exit;

   }

   (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
      ? $sidsteip = $_SERVER["HTTP_X_FORWARDED_FOR"]
      : $sidsteip = $_SERVER['REMOTE_ADDR'];

} else {

   echo "computer says no";
   exit;

}



//
//  Opret forbindelse til server og vælg database
//

$db = new mysqli($GLOBALS['setup']['mysql_server'], $GLOBALS['setup']['mysql_bruger'], $GLOBALS['setup']['mysql_kodeord'], $GLOBALS['setup']['mysql_database']);

if ($db->connect_errno > 0) {

   // 'Kunne ikke forbinde til database [' . $db->connect_error . ']';
   return false;
   exit;

} else {

   if (!$db->set_charset("utf8")) {
   }else{
   }

   if ($stmtb = $db->prepare("SELECT * FROM {$GLOBALS['setup']['mysql_tablenavn']} WHERE url=?")) {

      $stmtb->bind_param('s', $url);
      $stmtb->execute();

      $stmtb->bind_result($xid, $xantalstemmer, $xtotal, $xgennemsnit, $xurl, $xsidsteip);

      // test om siden er stemt på i forvejen
      if ($stmtb->fetch()) {

         $stmtb->close();

         $nygennemsnit = round(($xtotal + $rating) / ($xantalstemmer + 1), 1);

         // opdater data på side der er stemt på
         // opdater kun hvis IP er anderledes end sidste stemme
         if ($sidsteip != $xsidsteip) {

            if (!$db->set_charset("utf8")) {
            }else{
            }

            if ($stmtc = $db->prepare("UPDATE {$GLOBALS['setup']['mysql_tablenavn']} SET antalstemmer=antalstemmer+1, totalrating=totalrating+?, gennemsnit=?, sidsteip=? WHERE url=?")) {

               $stmtc->bind_param('idss', $rating, $nygennemsnit, $sidsteip, $url);
               $stmtc->execute();

               if($stmtc->affected_rows == -1){

                  trigger_error('Fejl ! Ser ud til der gik noget galt ved forsøg på adgang til database');

               }

               $stmtc->close();

            }else{

               printf("Fejl: %s\n", $db->error);
               echo "?";
               exit;

            }

         } else {

            echo "X";
            exit;

         }

      } else {

         $stmtb->close();

         // opret ny data på side som er stemt på for første gang

         if ($stmtd = $db->prepare("INSERT INTO {$GLOBALS['setup']['mysql_tablenavn']} (antalstemmer, totalrating, gennemsnit, url, sidsteip) VALUES ('1', ?, ?, ?, ?)")) {

            $stmtd->bind_param('idss', $rating, $rating, $url, $sidsteip);
            $stmtd->execute();

            if($stmtd->affected_rows == -1){

               trigger_error('Fejl ! Ser ud til der gik noget galt ved forsøg på adgang til database');

            }

            $stmtd->close();

         }else{

            printf("Fejl: %s\n", $db->error);

         }

      }

   }

   if (isset($nygennemsnit)) {

      echo $nygennemsnit;

   } else {

      echo $rating;

   }

}

?>
