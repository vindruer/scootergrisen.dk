<?php

function hentrating($url) {

$indhold = '';

#
# Test værdier. Hvis de ikke er gyldige så exit
#

if (isset($url)) {

   if (preg_match('/^[a-z0-9_\-.\/\\\]*$/i', $url)) {

   } else {

      echo "computer says no";
      exit;

   }

} else {

   echo "computer says no";
   exit;

}



//
//  Opret forbindelse til server og database
//

$db = new mysqli($GLOBALS['setup']['mysql_server'], $GLOBALS['setup']['mysql_bruger'], $GLOBALS['setup']['mysql_kodeord'], $GLOBALS['setup']['mysql_database']);

if ($db->connect_errno > 0) {

   //$indhold .= 'Kunne ikke forbinde til database [' . $db->connect_error . ']';
   return false;
   exit;

} else {

   if ($url) {

      if ($stmt = $db->prepare("SELECT * FROM {$GLOBALS['setup']['mysql_tablenavn']} WHERE url=?")) {

         $stmt->bind_param('s', $url);
         $stmt->execute();
         $stmt->bind_result($xid, $xantalstemmer, $xtotal, $xgennemsnit, $xurl, $xsidsteip);

         while ($stmt->fetch()) {

            if ($xtotal != 0 AND $xantalstemmer != 0) {

               $width = round(100 / 5 * $xgennemsnit);

            } else {

               $width = 0;

            }

            $indhold .= $width;

         }

         $stmt->close();

      } else {

         // $db->error
         exit;

      }

   } else {

      exit;

   }

   if (!isset($xgennemsnit)) {

      $xgennemsnit = '-';

   }

   return array($indhold, $xgennemsnit);

}

}

?>
