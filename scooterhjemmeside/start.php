<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['nogetikon']               = 'ikoner/ikon_start2.png';

$title = "start (menu med billeder)";
$overskrift = "start (menu med billeder)";
$metadescription = "viser hjemmesidens menu med små billeder så det er lettere at forstå hvad siderne handler om";

$mappemedstartbilleder = 'start';

$indhold = '';

$del = array();

$del = array(

'
introduktion
' => '
Her på siden ses de samme links som er i dropdownmenuen øverst på hjemmesiden.
Her er der bare billeder så det er lettere at forstå hvad siderne handler om.
'

);

$leftcontentmenuer = $GLOBALS['setup']['menu'];



if(isset($leftcontentmenuer["oplysninger"])){

   ksort($leftcontentmenuer["oplysninger"], SORT_LOCALE_STRING);

}

if(isset($leftcontentmenuer["scooterens dele"])){

   ksort($leftcontentmenuer["scooterens dele"], SORT_LOCALE_STRING);

}

if(isset($leftcontentmenuer["service"])){

   ksort($leftcontentmenuer["service"], SORT_LOCALE_STRING);

}

if(isset($leftcontentmenuer["specielt"])){

   ksort($leftcontentmenuer["specielt"], SORT_LOCALE_STRING);

}

if(isset($leftcontentmenuer["fremtiden"])){

   ksort($leftcontentmenuer["fremtiden"], SORT_LOCALE_STRING);

}

if(isset($leftcontentmenuer["rodekassen"])){

   ksort($leftcontentmenuer["rodekassen"], SORT_LOCALE_STRING);

}

if(isset($leftcontentmenuer["underholdning"])){

   ksort($leftcontentmenuer["underholdning"], SORT_LOCALE_STRING);

}


/*
foreach($leftcontentmenuer as $key => $value){

   $indholdb = '';

   $indholdb .= galleri('start');

   foreach($value as $navn => $array){

      if($key == $GLOBALS['setup']['l_m_scootermerker']){

         $indholdb .= galleri('logob', key($array),  $array['logo'], $navn);

      }else{

         $indholdb .= galleri('thumbnail', key($array), $array['thumbnail'], $navn);

      }

   }

   $indholdb .= galleri('slut');

   $del[$key] = $indholdb;

}
*/

foreach($leftcontentmenuer as $menuoverskrift => $menudata){

   $indholdb = '';

   $indholdb .= galleri('start');

      foreach($menudata as $normalmenuoverskrift => $value){

         if($normalmenuoverskrift != '0'){
         //if($menuoverskrift != $GLOBALS['setup']['l_m_scootermerker']){

            // hent normal menu
            $normalmenuoverskrifttitle = mb_ucfirst($value[key($value)]);

            if($value['thumbnail'] != ''){

               $thumb = $value['thumbnail'];

            }else{

               $thumb = '_tom.jpg'; // tomt billede

            }

            $normalmenutekst = key($value);

            // filtet start.php fra
            if($normalmenutekst != $GLOBALS['setup']['domain'] . $_SERVER["SCRIPT_NAME"]){

               $indholdb .= galleri('thumbnail', $normalmenutekst, $mappemedstartbilleder . '/' . $thumb, $normalmenuoverskrift);

            }

         //}
         }else{

            // hent undermenu
            foreach($menudata as $array){

               foreach($array as $undermenuoverskrift => $noget){
                  if(is_array($noget)){

                     foreach($noget as $submenukey => $submenuvalue){

                     if(isset($GLOBALS['setup']['l_m_scootermerker']) && $menuoverskrift == $GLOBALS['setup']['l_m_scootermerker']){

                           $submenutitle = mb_ucfirst($submenuvalue[key($submenuvalue)]);
                           $thumb = $submenuvalue['logo'];
                           $navn = $submenukey;
                           $url = key($submenuvalue);
                           //$indhold .= '<li>' . ahref(key($submenuvalue), mb_ucfirst($submenutekst), 'title="' . $submenutitle . '"') . '</li>' . "\r\n";

                        $indholdb .= galleri('logob', $url,  $thumb, $navn);

                     }else{

                           // undermenuoverskrifter
                           $submenutitle = mb_ucfirst($submenuvalue[key($submenuvalue)]);

                           if(isset($submenuvalue['thumbnail'])){

                              $thumb = $submenuvalue['thumbnail'];

                           }else{

                              trigger_error('thumbnail mangler ved "' . $submenutitle . '"');

                           }

                           $navn = $submenukey;
                           $url = key($submenuvalue);
                           $indholdb .= galleri('thumbnail', $url,  $mappemedstartbilleder . '/' . $thumb, $navn);

                     }

                     }

                  }

               }

            }

         }

      }

   $indholdb .= galleri('slut');

   $del[$menuoverskrift] = $indholdb;

}

$databasecenter = $del;

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>