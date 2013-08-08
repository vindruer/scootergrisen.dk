<?php // æøåÆØÅ UTF-8 uden BOM

// Kode som kun skal inkluderes i hovedopsetning.php hvis man er logget ind

function opretsymlink(){

   $indhold = '';

   $target = $GLOBALS['setup']['rodenogdatamappe'] . '/';
   $indhold .= $target;
   $indhold .= "<br>\r\n";

   $link = $GLOBALS['setup']['rodenogdatamappe'] . '/' . $GLOBALS['setup']['dialogsymlinkfil'];
   $indhold .= $link;
   $indhold .= "<br>\r\n";

   if(file_exists($link)){

      $indhold .= "symlink findes";
      $indhold .= "\r\n";

   }else{

      $indhold .= "symlink findes ikke. Forsøger at oprette...";
      $indhold .= "\r\n";

      if(symlink($target, $link)){

         $indhold .= "symlink blev oprettet";
         $indhold .= "\r\n";

      }else{

         $indhold .= "symlink blev ikke oprettet";
         $indhold .= "\r\n";

      }

      if(file_exists($link)){

         $indhold .= "nu findes symlink";
         $indhold .= "\r\n";

      }else{

         $indhold .= "symlink findes stadig ikke";
         $indhold .= "\r\n";

      }

   }

   return $indhold;

}



if($_POST['funktion'] == "lavthumbnails"){

   if(isset($_POST['thumbnails'])){

      if($_POST['thumbnails'] == "lille"){

         $setup['lavthumbnailslille'] = 1;

      }elseif($_POST['thumbnails'] == "mellem"){

         $setup['lavthumbnailsmellem'] = 1;

      }elseif($_POST['thumbnails'] == "lille og mellem"){

         $setup['lavthumbnailslille'] = 1;
         $setup['lavthumbnailsmellem'] = 1;

      }

   }

}elseif($_POST['funktion'] == "sletdatafiler"){

   if((isset($_POST['filer'])) && ($_POST['filer'] == "Slet midlertidige")){

      if(file_exists("{$GLOBALS['setup']['tempfuld']}/{$GLOBALS['setup']['errorlogfilnavn']}")){          unlink("{$GLOBALS['setup']['tempfuld']}/{$GLOBALS['setup']['errorlogfilnavn']}");     }
      if(file_exists("{$GLOBALS['setup']['tempfuld']}/{$GLOBALS['setup']['besogfilnavn']}")){             unlink("{$GLOBALS['setup']['tempfuld']}/{$GLOBALS['setup']['besogfilnavn']}");        }
      if(file_exists("{$GLOBALS['setup']['tempfuld']}/{$GLOBALS['setup']['onerrorfilnavn']}")){           unlink("{$GLOBALS['setup']['tempfuld']}/{$GLOBALS['setup']['onerrorfilnavn']}");      }
      //if(file_exists("{$GLOBALS['setup']['tempfuld']}/{$GLOBALS['setup']['sogetekstfilnavn']}")){         unlink("{$GLOBALS['setup']['tempfuld']}/{$GLOBALS['setup']['sogetekstfilnavn']}");    }

   }

}elseif($_POST['funktion'] == "opretmapper"){

   checkomfindesellersopret('mappe', $GLOBALS['setup']['tempfuld']);
   checkomfindesellersopret('mappe', $GLOBALS['setup']['sessionmappe']);

}elseif($_POST['funktion'] == "opretsymlink"){

   echo opretsymlink();

}elseif($_POST['funktion'] == "sletsymlink"){

   if(file_exists("{$GLOBALS['setup']['rodenogdatamappe']}/{$GLOBALS[setup][dialogsymlinkfil]}")){

      if(unlink("{$GLOBALS['setup']['rodenogdatamappe']}/{$GLOBALS[setup][dialogsymlinkfil]}")){

         echo "symlink slettet";

      }else{

         echo "symlink blev ikke slettet";

      }

   }else{

      echo "symlink findes ikke";

   }

}



?>