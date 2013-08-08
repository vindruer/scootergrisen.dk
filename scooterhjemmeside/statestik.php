<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "statestik som besøg, søgetekst og fejlbeskeder";
$overskrift = "statestik som besøg, søgetekst og fejlbeskeder";
$metadescription = "statestik";

$indholdarray = '';

if($GLOBALS['setup']['loggetind']){

   $filsogninger        = "{$GLOBALS['setup']['tempfuld']}/{$GLOBALS['setup']['sogetekstfilnavn']}";
   $filfejl             = "{$GLOBALS['setup']['tempfuld']}/{$GLOBALS['setup']['errorlogfilnavn']}";
   $filtodo             = "{$GLOBALS['setup']['roden']}/todo.txt";
   $filvin              = "{$GLOBALS['setup']['tempfuld']}/{$GLOBALS['setup']['vinsogninger']}";
   $filonerror          = "{$GLOBALS['setup']['tempfuld']}/{$GLOBALS['setup']['onerrorfilnavn']}";
   $sogningerkode       = '';
   $fejlkode            = '';
   $todokode            = '';
   $vinkode             = '';
   $onerrorkode         = '';

   if(file_exists($filsogninger)){

      if(filesize($filsogninger)){

         $sogningerkode = visfilform(file_get_contents($filsogninger, NULL, NULL, 0, 1048576));

      }else{

         $sogningerkode = 'Filen "' . basename($filsogninger) . '" er tom.';

      }

   }else{

      $sogningerkode = 'Filen "' . basename($filsogninger) . '" findes ikke.';

   }

   if(file_exists($filfejl)){

      if(filesize($filfejl)){

         $fejlkode = visfilform(file_get_contents($filfejl, NULL, NULL, 0, 1048576));

      }else{

         $fejlkode = 'Filen "' . basename($filfejl) . '" er tom.';

      }

   }else{

      $fejlkode = 'Filen "' . basename($filfejl) . '" findes ikke.';

   }

   if(file_exists($filtodo)){

      if(filesize($filtodo)){

         $todokode = visfilform(file_get_contents($filtodo, NULL, NULL, 0, 1048576));

      }else{

         $todokode = 'Filen "' . basename($filtodo) . '" er tom.';

      }

   }else{

      $todokode = 'Filen "' . basename($filtodo) . '" findes ikke.';

   }

   if(file_exists($filvin)){

      if(filesize($filvin)){

         $vinkode = visfilform(file_get_contents($filvin, NULL, NULL, 0, 1048576));

      }else{

         $vinkode = 'Filen "' . basename($filvin) . '" er tom.';

      }

   }else{

      $vinkode = 'Filen "' . basename($filvin) . '" findes ikke.';

   }

   if(file_exists($filonerror)){

      if(filesize($filonerror)){

         $onerrorkode = visfilform(file_get_contents($filonerror, NULL, NULL, 0, 1048576));

      }else{

         $onerrorkode = 'Filen "' . basename($filonerror) . '" er tom.';

      }

   }else{

      $onerrorkode = 'Filen "' . basename($filonerror) . '" findes ikke.';

   }

   $indholdarray['søgetekst']       = vissogningeridatabase(30);
   $indholdarray['fejl']            = $fejlkode;
   $indholdarray['error events']    = $onerrorkode;
   $indholdarray['besøg']           = besog('vis');
   //$indholdarray['søgninger']       = $sogningerkode;
   $indholdarray['todo']            = $todokode;
   //$indholdarray['VIN']             = $vinkode;

}else{

   $indholdarray['info'] = ''
      . 'Du skal egentligt være logget ind for at se disse data.'
      . "<br>\r\n"
      . visbilled('2', 'billed3829.jpg', 'misser', false, true)
      ;

}

$databasecenter = $indholdarray;

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true, null, null, null, null, false);

?>
