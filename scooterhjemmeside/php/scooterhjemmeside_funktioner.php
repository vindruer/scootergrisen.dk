<?php // æøåÆØÅ UTF-8 uden BOM



function alletryk($tal, $enhed){

   $indhold = '';
   $tal = str_replace(",", ".", $tal);

   switch($enhed){

      case 'kgcm2' :
         $indhold = ''
            .                           str_replace(".", ",", $tal) . " kg/cm²"
            . " ~ " . str_replace(".", ",", round($tal*14.223,2))   . " psi"
            . " ~ " . str_replace(".", ",", round($tal/1.02,2))     . " bar"
            . " ~ " . str_replace(".", ",", round($tal*98.07,2))    . " kpascal"
            ;
         break;

      case 'psi' :
         $indhold = ''
            .                           str_replace(".", ",", $tal) . " psi"
            . " ~ " . str_replace(".", ",", round($tal*0.068948,2)) . " bar"
            . " ~ " . str_replace(".", ",", round($tal*6.895,2))    . " kpascal"
            . " ~ " . str_replace(".", ",", round($tal/14.223,2))   . " kg/cm²"
            ;
         break;

      case 'bar' :
         $indhold = ''
            .                           str_replace(".", ",", $tal) . " bar"
            . " ~ " . str_replace(".", ",", round($tal*100,2))      . " kpascal"
            . " ~ " . str_replace(".", ",", round($tal*1.02,2))     . " kg/cm²"
            . " ~ " . str_replace(".", ",", round($tal/0.068948,2)) . " psi"
            ;
         break;

      case 'kpascal' :
         $indhold = ''
            .                           str_replace(".", ",", $tal) . " kpascal"
            . " ~ " . str_replace(".", ",", round($tal/98.07,2))    . " kg/cm²"
            . " ~ " . str_replace(".", ",", round($tal/6.895,2))    . " psi"
            . " ~ " . str_replace(".", ",", round($tal/100,2))      . " bar"
            ;
         break;

      default :
         $indhold = 'ukendt';
         break;
   }

   return $indhold;

}



function effektogmoment($handling, $taloriginal = '', $enhed = ''){

   $indhold = '';
   $ingenenhed = 'ingen enhed valgt i ' . basename($_SERVER['REQUEST_URI'] . ' ' . $handling . ' ' . $taloriginal . ' ' . $enhed);
   $ukendtenhed = 'ukendt enhed "' . $enhed . '" i ' . basename($_SERVER['REQUEST_URI']);
   $ukendthandling = 'ukendt handling "' . $handling . '" i ' . basename($_SERVER['REQUEST_URI']);
   $ikketal = '"' . $taloriginal . '" er ikke et tal i ' . basename($_SERVER['REQUEST_URI']);

   $tal = $taloriginal;
   $tal = str_replace(",", ".", $tal);

   if(is_numeric($tal)){

      if($handling == 'effekt'){

         switch($enhed){

            case 'w' :
               $indhold = ''
               .                          str_replace(".", ",", $tal) . " watt"
               . " ~ " . str_replace(".", ",", round($tal/745.7,2))  . " hestekræfter"
               ;
               break;

            case 'kw' :
               $indhold = ''
               .                          str_replace(".", ",", $tal) . " kilowatt"
               . " ~ " . str_replace(".", ",", round($tal/0.7457,2))  . " hestekræfter"
               ;
               break;

            case 'hk' :
               $indhold = ''
               .                         str_replace(".", ",", $tal) . " hestekræfter"
               . " ~ " . str_replace(".", ",", round($tal*0.7457,2)) . " kilowatt"
               ;
               break;

            case '' :
               trigger_error($ingenenhed);
               $indhold = 'ingen enhed valgt';
               break;

            default :
               trigger_error($ukendtenhed);
               $indhold = 'ukendt enhed';
               break;

         }

      }elseif($handling == 'moment'){

         switch($enhed){

             case 'nm' :
               $indhold = ''
                  .                          str_replace(".", ",", $tal) . " Nm"
                  . " ~ " . str_replace(".", ",", round($tal*0.102,2))   . " Kgm"
                  ;
               break;

            case 'kgm' :
               $indhold = ''
                  .                       str_replace(".", ",", $tal)  . " Kgm"
                  . " ~ " . str_replace(".", ",", round($tal*9.804,2)) . " Nm"
                  ;
               break;

            case 'lb-ft' :
               $indhold = ''
                  .                       str_replace(".", ",", $tal)  . " Lb-ft"
                  . " ~ " . str_replace(".", ",", round($tal*1.356,2)) . " Nm"
                  ;
               break;

            case '' :
               trigger_error($ingenenhed);
               $indhold = 'ingen enhed valgt';
               break;

            default :
               trigger_error($ukendtenhed);
               $indhold = 'ukendt enhed';
               break;

         }

      }else{

         trigger_error($ukendthandling);

      }

   }else{

      //trigger_error($ikketal);
      $indhold = "$taloriginal $enhed";

   }

   return $indhold;

}



function ens($valg, $a, $b = '', $c = '', $d = '', $e = 'pladderballe'){

   $indhold = '';

   if($e != 'pladderballe'){

      trigger_error('der er for mange argumenter i ' . __function__ . '() "' . str_replace("<", "&lt;", $a) . ' ' . str_replace("<", "&lt;", $b) . ' ' . str_replace("<", "&lt;", $c) . ' ' . str_replace("<", "&lt;", $d) . ' ' . str_replace("<", "&lt;", $e) . '"');

   }

   if($a || $b || $c || $d){

      switch ($valg){

         // ensdethele($for,$data,$enhed,$efter,$ucfirst,$ucwords,$br)
         // ensdethele('før', $a, 'enhed', 'efter', ucfirst, ucwords, br);

         case 'ogsåkaldet' :
         case 'varianter' :
            $a = ensdethele('', $a, '', '', '', 0, 1, 1);
            $b = ensdethele('', $b, '', '', '', 0, 1, 1);
            $c = ensdethele('', $c, '', '', '', 0, 1, 1);
            $d = ensdethele('', $d, '', '', '', 0, 1, 1);
            break;

         case 'elmotorspec' :
            $a = ensdethele('', $a, 'volt', '', '', 0, 0, 1);
            $b = ensdethele('', $b, 'watt', '', '', 0, 0, 1);
            $c = ensdethele('', $c, '', '', '', 1, 0, 1);
            $d = ensdethele('', $d, '', '', '', 1, 0, 1);
            break;

         case 'medfølger' :
            $a = ensdethele('', $a, '', '', '', 0, 0, 1);
            $b = ensdethele('', $b, '', '', '', 0, 0, 1);
            $c = ensdethele('', $c, '', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 1);
            break;

         case 'efterløb' :
            $a = ensdethele('', $a, 'mm', '', '', 0, 0, 1);
            $b = ensdethele('', $b, '', '', '', 0, 0, 1);
            $b = ensdethele('', $b, '', '', '', 0, 0, 1);
            $c = ensdethele('', $c, '', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 1);
            break;

         case 'castervinkel' :
            $b = ensdethele(' ', $b, array('grader'), '', '', 0, 0, 1);
            break;

         case 'stigeevne' :
            $b = ensdethele(' ', $b, array('grader', '%'), '', '', 0, 0, 1);
            break;

         case 'pris' :
            $valuta = 'Danske Kroner (DKK)';
            if($a && $b){
               $a = number_format($a, 0, ",", ".") . ' - ';
               $a = ensdethele('', $a, '', '', '', 0, 0, 0);
               $b = number_format($b, 0, ",", ".") . ',- ' . $valuta;
               $b = ensdethele('', $b, '', '', '', 0, 0, 1);
            }elseif($a){
               $a = number_format($a, 0, ",", ".") . ',- ' . $valuta;
               $a = ensdethele('', $a, '', '', '', 0, 0, 1);
            }
            $c = ensdethele('', $c, '', '', '', 1, 0, 1);
            $d = ensdethele('', $d, '', '', '', 1, 0, 1);
            $d .= ''
               . 'Der sælges ikke køretøjer gennem denne hjemmeside. '.ahref('kobafscooter.php#kob_af_scooter_pa_hjemmesiden', 'Læs mere').''
               ;
            break;

         case 'hastighed' :
            $a = ensdethele('', $a, 'km/t', '', '', 0, 0, 1);
            $b = ensdethele('', $b, '', '', '', 0, 0, 1);
            $c = ensdethele('', $c, '', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 1);
            break;

         case 'farver' :
            if($a){
               $farver = explode(" ", $a);
               $a = "";
               foreach ($farver as $value){
                  $a .= ensdethele(scooterfarve($value), $value, '', '<span style="display: block; clear: both;"></span>', '', 1, 1, 0);
               }
            }
            $b = ensdethele('', $b, '', '', '', 1, 0, 1);
            $c = ensdethele('', $c, '', '', '', 1, 0, 1);
            $d = ensdethele('', $d, '', '', '', 1, 0, 1);
            break;

         case 'motortype' :
            $a = ensdethele('', '', '', '', $a, 0, 0, 1);
            $b = ensdethele('', '', '', '', $b, 1, 0, 1);
            $c = ensdethele('', '', '', '', $c, 1, 0, 1);
            $d = ensdethele('', '', '', '', $d, 1, 0, 1);
            break;

         case 'volume' :
            $a = ensdethele('', $a, 'cm³', '', '', 0, 0, 0);
            $b = ensdethele(' ', $b, '', '', '', 0, 0, 0);
            $c = ensdethele(' ', $c, '', '', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 0);
            break;

         case 'køling' :
            $a = ensdethele('', '', '', '', $a, 0, 0, 1);
            break;

         case 'ventiler' :
            $a = ensdethele('', $a, '', ' ventiler', '', 0, 0, 1);
            $b = ensdethele('', '', '', '', $b, 0, 0, 1);
            $c = ensdethele('', $c, '', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 1);
            break;

         case 'ventiljustering' :
            $a = ensdethele('', $a, 'mm', ' for indsugningsventil', '', 0, 0, 1);
            $b = ensdethele('', $b, 'mm', ' for udstødningsventil', '', 0, 0, 1);
            $c = ensdethele('', $c, '', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 1);
            break;

         case 'kompression' :
            $a = ensdethele('', $a, '', ' : 1', '', 0, 0, 1);
            $b = ensdethele('', $b, '', '', '', 0, 0, 1);
            $c = ensdethele('', $c, '', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 1);
            break;

         case 'tomgang' :
            if($a && $b){
               $a = ensdethele('', $a, '', ' ±', '', 0, 0, 0);
               $b = ensdethele(' ', $b, 'o/min', '', '', 0, 0, 0);
            }else{
               $a = ensdethele('', $a, 'o/min', '', '', 0, 0, 0);
            }
            $c = ensdethele(' ', $c, '', '', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 0);
            break;

         case 'nomieffektogheste' :
         case 'maxeffektogheste' :
            $a = effektogmoment('effekt', $a, $b);
            $b = "";
            if($a && $c){
               $c = ensdethele(' ved', $c, 'o/min', '', '', 0, 0, 0);
            }
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 1);
            break;

         case 'moment' :
            $a = effektogmoment('moment', $a, $b);
            $b = "";
            if($a && $c){
               $c = ensdethele(' ved', $c, 'o/min', '', '', 0, 0, 0);
            }
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 0);
            break;

         case 'benzin' :
            $a = ensdethele('', $a, 'oktan', '', '', 0, 0, 0);
            $b = ensdethele(' ', $b, '', '', '', 0, 0, 0);
            $c = ensdethele(' ', $c, '', '', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 0);
            break;

         case 'dæktryk' :
            $a = alletryk($a, $b);
            $b = "";
            $c = ensdethele(' ', $c, '', '', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 1);
            break;

         case 'bremser' :
            $a = ensdethele('', $a, '', 'bremse', '', 1, 0, 1);
            $b = ensdethele('', $b, 'mm', '', '', 0, 0, 1);
            $c = ensdethele('', $c, '', '', '', 1, 0, 1);
            $d = ensdethele('', $d, '', '', '', 1, 0, 1);
            break;

         case 'starterbatteri' :
         case 'batterispec1' :
         case 'batterispec2' :
            $a = ensdethele('', $a, 'volt', '', '', 0, 0, 0);
            $b = ensdethele(' ', $b, 'Ah', '', '', 0, 0, 1);
            $c = ensdethele(' ', $c, '', '', '', 1, 0, 1);
            $d = ensdethele(' ', $d, '', '', '', 1, 0, 0);
            break;

         case 'generator' :
            $a = ensdethele('', $a, 'volt', '', '', 0, 0, 1);
            $b = ensdethele('', $b, 'watt', '', '', 0, 0, 1);
            $c = ensdethele('', $c, '', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 1);
            break;

         case 'sikring' :
            $a = ensdethele('', $a, 'ampere', '', '', 0, 0, 0);
            $b = ensdethele(' ', $b, '', '', '', 0, 0, 0);
            $c = ensdethele(' ', $c, '', '', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 1);
            break;

         case 'elstart' :
         case 'kickstart' :
         case 'bakgear' :
            $a = ensdethele('', $a, array('ja', 'nej'), '', '', 0, 0, 1);
            $b = ensdethele('', $b, '', '', '', 1, 0, 1);
            $c = ensdethele('', $c, '', '', '', 1, 0, 1);
            $d = ensdethele('', $d, '', '', '', 1, 0, 1);
            break;

         case 'lys' :
            $a = ensdethele('', $a, 'volt', '', '', 0, 0, 0);
            $b = ensdethele(' ', $b, 'watt', '', '', 0, 0, 1);
            $c = ensdethele('', $c, '', ' styks', '', 0, 0, 1);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 0);
            break;

         case 'olie' :
            $a = ensdethele('SAE', $a, '', '', '', 0, 0, 1);
            $b = ensdethele(' ', $b, '', '', '', 0, 0, 1);
            if($c && $d){
               $c = ensdethele(' ', $c, 'liter', ' total', '', 0, 0, 1);
               $d = ensdethele(' ', $d, 'liter', ' ved udskiftning', '', 0, 0, 0);
            }else{
               $c = ensdethele(' ', $c, 'liter', '', '', 0, 0, 0);
            }
            break;

         case 'karburator' :
            $a = ensdethele('', $a, '', '', '', 0, 0, 0);
            $b = ensdethele(' ', $b, 'mm', '', '', 0, 0, 0);
            $c = ensdethele(' ', $c, '', '', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 1);
            break;

         case 'affjedringfor' :
         case 'affjedringbag' :
            $a = ensdethele('', $a, '', '', '', 0, 0, 1);
            $b = ensdethele('Diameter :', $b, 'mm', '', '', 0, 0, 1);
            $c = ensdethele('Slaglængde :', $c, 'mm', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 0);
            break;

         case 'støj' :
            $a = ensdethele('', $a, 'dB(A)', '', '', 0, 0, 0);
            $b = ensdethele(' ved', $b, 'o/min', '', '', 0, 0, 0);
            $c = ensdethele(' ', $c, '', '', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 1);
            break;

         case 'controller' :
            $a = ensdethele('', $a, 'volt', '', '', 0, 0, 1);
            $b = ensdethele('', $b, 'ampere', '', '', 0, 0, 1);
            $c = ensdethele('', $c, 'watt', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 1);
            break;

         case 'producent' :
            $a = ensdethele('', $a, '', '', '', 0, 0, 1);
            $b = ensdethele('', $b, '', '', '', 1, 0, 1);
            break;

         case 'antalgear' :
            $a = ensdethele('', $a, 'gear', '', '', 0, 0, 0);
            $b = ensdethele(' ', $b, '', '', '', 0, 0, 0);
            $c = ensdethele(' ', $c, '', '', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 1);
            break;

         case 'venderadius' :
            $a = ensdethele('', $a, 'meter', '', '', 0, 0, 1);
            break;

         case 'oplader' :
            $a = ensdethele('', $a, 'volt', '', '', 0, 0, 1);
            $b = ensdethele('', $b, 'ampere', '', '', 0, 0, 1);
            $c = ensdethele('', $c, 'watt', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 1);
            break;

         case 'ladetid' :
            $a = ensdethele('', $a, '', ' timer', '', 0, 0, 0);
            $b = ensdethele(' ', $b, '', '', '', 0, 0, 0);
            $c = ensdethele(' ', $c, '', '', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 1);
            break;

         case 'batterilevetid' :
            $a = ensdethele('', $a, '', ' år', '', 0, 0, 1);
            $c = ensdethele('', $c, 'km', '', '', 0, 0, 0);
            $b = ensdethele('', $b, '', ' opladninger', '', 0, 0, 1);
            break;

         case 'rækkevidde' :
            $a = ensdethele('', $a, '', ' km/l', '', 1, 0, 0);
            $b = ensdethele('', $b, '', ' km/opladning', '', 0, 0, 0);
            $c = ensdethele(' ved ', $c, 'km/t', '', '', 0, 0, 1);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 1);
            break;

         case 'forbrug' :
            /*
            if($b == ""){
               $a = ensdethele('', $a, '', ' km/l', '', 0, 0, 1);
            }else{
               $a = ensdethele('', $a, 'km', '', '', 0, 0, 1);
               $b = ensdethele(' ved ', $b, '', ' km/t', '', 0, 0, 1);
            }
            $c = ensdethele('', $c, '', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 1);
            */
            // På grund af upræcise data og begrænsninger har jeg fjernet info om forbrug indtil videre
            $a = '';
            $b = '';
            $c = '';
            $d = '';
            break;

         case 'fælg' :
         case 'dæk2' :
            $a = ensdethele('', $a, '', ' - ', '', 0, 0, 0);
            $b = ensdethele('', $b, '', '"', '', 0, 0, 1);
            $c = ensdethele('', $c, '', '', '', 1, 0, 1);
            $d = ensdethele('', $d, '', '', '', 1, 0, 1);
            break;


         case 'dæk1' :
            $a = ensdethele('', $a, '', '/', '', 0, 0, 0);
            $b = ensdethele('', $b, '', '-', '', 0, 0, 0);
            $c = ensdethele('', $c, '', '"', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 1);
            break;

         case 'bagagevolume' :
         case 'kølervæske' :
         case 'benzintank' :
            $a = ensdethele('', $a, 'liter', '', '', 0, 0, 1);
            $b = ensdethele('', $b, '', '', '', 1, 0, 1);
            $c = ensdethele('', $c, '', '', '', 1, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 1);
            break;

         case 'model' :
            $a = ensdethele('', $a, '', '', '', 0, 1, 0);
            $b = ensdethele('', $b, '', '', '', 0, 1, 0);
            $c = ensdethele('', $c, '', '', '', 0, 1, 0);
            $d = ensdethele('', $d, '', '', '', 0, 1, 0);
            break;

         case 'scootertype' :
            $a = ensdethele('', $a, '', '', '', 0, 1, 1);
            $b = ensdethele('', $b, '', '', '', 0, 1, 1);
            $c = ensdethele('', $c, '', '', '', 0, 1, 1);
            $d = ensdethele('', $d, '', '', '', 0, 1, 1);
            break;

         case 'motormodel' :
            $a = ensdethele('', $a, '', '', '', 0, 1, 1);
            $b = ensdethele('', $b, '', '', '', 0, 0, 1);
            $c = ensdethele('', $c, '', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 1);
            break;

         case 'længde' :
         case 'bredde' :
         case 'højde' :
         case 'sædehøjde' :
         case 'frihøjde' :
         case 'akselafstand' :
         case 'slaglængde' :
         case 'boring' :
            $a = ensdethele('', $a, 'mm', '', '', 0, 0, 0);
            $b = ensdethele(' ', $b, '', '', '', 0, 0, 0);
            $c = ensdethele(' ', $c, '', '', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 1);
            break;

         case 'vægttotal' :
         case 'vægttør' :
         case 'vægtkørerklar' :
         case 'bæreevne' :
         case 'batterivægt' :
            $a = ensdethele('', $a, 'kg', '', '', 0, 0, 0);
            $b = ensdethele(' ', $b, '', '', '', 0, 0, 0);
            $c = ensdethele(' ', $c, '', '', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 1);
            break;

         case 'drejevinkel' :
            $a = ensdethele('', $a, 'grader', '', '', 0, 0, 1);
            $b = ensdethele('', $b, '', '', '', 0, 0, 1);
            $c = ensdethele('', $c, '', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 0, 0, 1);
            break;

         case 'tandhjulfor' :
         case 'tandhjulbag' :
            $a = ensdethele('', $a, '', ' tænder', '', 0, 0, 1);
            $b = ensdethele('', $b, '', '', '', 0, 0, 1);
            $c = ensdethele('', $c, '', '', '', 0, 0, 1);
            $d = ensdethele('', $d, '', '', '', 1, 0, 1);
            break;

         case 'stelnummer' :
            $a = ensdethele('', $a, '', vinfindland($a), '', 1, 0, 0);
            $b = ensdethele(' ', $b, '', vinfindland($b), '', 1, 0, 0);
            $c = ensdethele(' ', $c, '', '', '', 1, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 1, 0, 1);
            break;

         case 'tændingssystem' :
            $a = ensdethele('', $a, array('cdi', 'tci', 'tdi'), '', '', 0, 0, 1);
            $b = ensdethele('', $b, '', '', '', 1, 0, 1);
            $c = ensdethele('', $c, '', '', '', 1, 0, 1);
            $d = ensdethele('', $d, '', '', '', 1, 0, 1);
            break;

         case 'kobling' :
            $a = ensdethele('', $a, '', '', '', 1, 0, 1);
            $b = ensdethele('', $b, '', '', '', 1, 0, 1);
            $c = ensdethele('', $c, '', '', '', 1, 0, 1);
            $d = ensdethele('', $d, '', '', '', 1, 0, 1);
            break;

         case 'transmissiontype' :
            $a = ensdethele('', $a, array('ingen', 'cvt', 'CVT', 'kæde', 'sol og planet gear', 'bælte'), '', '', 0, 0, 0);
            $b = ensdethele(' ', $b, '', '', '', 0, 0, 0);
            $c = ensdethele(' ', $c, '', '', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 0);
            break;

         case 'eger' :
         case 'smøring' :
         case 'forgaffel' :
         case 'stel' :
         case 'gearratio' :
         case 'reduktionsratio' :
         case 'udstødning' :
         case 'luftfiltertype' :
         case 'bremsevæske' :
         case 'euroemission' :
            $a = ensdethele('', $a, '', '', '', 0, 0, 0);
            $b = ensdethele(' ', $b, '', '', '', 0, 0, 0);
            $c = ensdethele(' ', $c, '', '', '', 0, 0, 0);
            $d = ensdethele(' ', $d, '', '', '', 0, 0, 0);
            break;

         case 'besked' :
            $a = ensdethele('', str_replace("\r\n", '<br>', trim($a)), '', '', '', 1, 0, 1);
            $b = ensdethele('<br>', str_replace("\r\n", '<br>', trim($b)), '', '', '', 1, 0, 1);
            $c = ensdethele('<br>', str_replace("\r\n", '<br>', trim($c)), '', '', '', 1, 0, 1);
            $d = ensdethele('<br>', str_replace("\r\n", '<br>', trim($d)), '', '', '', 1, 0, 1);
            break;

         case 'brændstof indsp..' :
         case 'tændrør' :
         case 'importør' :
         case 'andet' :
            $a = ensdethele('', $a, '', '', '', 1, 0, 1);
            $b = ensdethele('', $b, '', '', '', 1, 0, 1);
            $c = ensdethele('', $c, '', '', '', 1, 0, 1);
            $d = ensdethele('', $d, '', '', '', 1, 0, 1);
            break;

         case 'forhandlere' :
            if($a){ $a = ensdethele('', ahref($a, str_replace('http://', '', $a), '', true), '', '', '', 0, 0, 1); }
            if($b){ $b = ensdethele('', ahref($b, str_replace('http://', '', $b), '', true), '', '', '', 0, 0, 1); }
            if($c){ $c = ensdethele('', ahref($c, str_replace('http://', '', $c), '', true), '', '', '', 0, 0, 1); }
            if($d){ $d = ensdethele('', ahref($d, str_replace('http://', '', $d), '', true), '', '', '', 0, 0, 1); }
            break;

         case 'begrænstransmis' :
         case 'begrænstænding' :
         case 'begrænskarburator' :
         case 'begrænsluftfilter' :
         case 'begrænscontroller' :
         case 'begrænsruller' :
         case 'begrænsindsug' :
         case 'begrænsudstødning' :
         case 'begrænsindnum' :
         case 'begrænsandet' :
         case 'begrænsstelnum' :
            $a = ensdethele('25 km/t : <br>', $a, '', '', '', 1, 0, 1); // 25
            $b = ensdethele('30 km/t : <br>', $b, '', '', '', 1, 0, 1); // 30
            $c = ensdethele('45 km/t : <br>', $c, '', '', '', 1, 0, 1); // 45
            $d = ensdethele('', $d, '', '', '', 1, 0, 1);
            $d .= ''
               //. '(Der kan være forskel i begrænsningerne fra årgang til årgang. Se eventuelt den typegodkendelse der passer til scooteren.)'
               ;
            break;

         case 'efterlyst_nummer' :
         case 'efterlyst_region' :
         case 'efterlyst_indrykdato' :
         case 'efterlyst_besked' :
         case 'efterlyst_producent' :
         case 'efterlyst_model' :
         case 'efterlyst_farve' :
         case 'efterlyst_argang' :
         case 'efterlyst_kendetegn' :
         case 'efterlyst_stelnummer' :
         case 'efterlyst_motornummer' :
         case 'efterlyst_nummerplade' :
         case 'efterlyst_politikreds' :
         case 'efterlyst_kontakt' :
            $a = ensdethele('', $a, '', '', '', 1, 0, 1);
            $b = ensdethele('', $b, '', '', '', 1, 0, 1);
            $c = ensdethele('', $c, '', '', '', 1, 0, 1);
            $d = ensdethele('', $d, '', '', '', 1, 0, 1);
            break;

         default :
            trigger_error("der er ikke valgt nogen handling for \"$valg\" i ens()", E_USER_ERROR);
            break;

      }

      if($a){

         $indhold .= $a;

      }

      if($b){

         ($a)
            ? $indhold .= "$b"
            : $indhold .= $b;

      }

      if($c){

         ($a || $b)
            ? $indhold .= "$c"
            : $indhold .= $c;

      }

      if($d){

         ($a || $b || $c)
            ? $indhold .= "$d"
            : $indhold .= $d;

      }

      // $indhold = str_replace("&", "&amp;", $indhold);
      // kan ikke huske hvorfor & skal laves om til &amp;
      // Viser &amp; i stedet for mellemrum ved B S R E visfil()

      return $indhold;

   }

}



function visscooter($scooter, $data){

   $indhold = '';
   $billedefil = '';

   if(isset($data["generelt"]["model"])){

      $scootermodel = $data["generelt"]["model"];

   }else{

      $scootermodel = 'model navn ikke valgt';

   }

   // $data["generelt"]["model"] kan godt nok indeholde <br> og andet fordi det er data efter ens() er udført
   $scootermodel = str_replace('<br>', '', $scootermodel); // midlertidig ikke så god løsning

   // hvis starter med '_' så er det fordi det mangler et billede
   // og der i stedet skal vises et standard billede
   if(isset($scooter)){

      if(stripos($scooter, '_') === 0){

         $billedefil = 'manglerbillede';

      }else{

         $billedefil = $scooter;

      }

      if($scooter != 'hopover'){

         $info = array(

            'specielt'            => array(
               'besked'            => 'besked'

            ),'generelt'            => array(
                'model'             => 'model'
               ,'ogsåkaldet'        => 'også kaldet'
               ,'scootertype'       => 'scootertype'
               ,'varianter'         => 'varianter'
               ,'pris'              => 'pris'
               ,'hastighed'         => 'hastighed'
               ,'farver'            => 'farver'
               ,'forhandlere'       => 'forhandlere'

            ),'motor'               => array(
                'motormodel'        => 'motormodel'
               ,'motortype'         => 'motortype'
               ,'elmotorspec'       => 'elektrisk motor specifikation'
               ,'volume'            => 'volume'
               ,'køling'            => 'køling'
               ,'boring'            => 'boring'
               ,'slaglængde'        => 'slaglængde'
               ,'ventiler'          => 'ventiler'
               ,'ventiljustering'   => 'ventil justering'
               ,'kompression'       => 'kompression'
               ,'tomgang'           => 'tomgang'
               ,'nomieffektogheste' => 'nominel ydelse'
               ,'maxeffektogheste'  => 'maksimal ydelse'
               ,'moment'            => 'moment'
               ,'karburator'        => 'karburator'
               ,'brændstof indsp..' => 'brændstof indsprøjtning'
               ,'smøring'           => 'smøring'
               ,'tændrør'           => 'tændrør'

            ),'dimensioner'         => array(
                'længde'            => 'længde'
               ,'bredde'            => 'bredde'
               ,'højde'             => 'højde'
               ,'sædehøjde'         => 'sædehøjde'
               ,'frihøjde'          => 'frihøjde'
               ,'akselafstand'      => 'akselafstand'

            ),'brændstof'           => array(
                'benzin'            => 'benzin'
               ,'benzintank'        => 'benzintank'
               ,'forbrug'           => 'forbrug'

            ),'hjul'                => array(
                'fælgfor'           => 'fælg for'
               ,'fælgbag'           => 'fælg bag'
               ,'dækfor'            => 'dæk for'
               ,'dækbag'            => 'dæk bag'
               ,'dæktrykfor'        => 'dæktryk for'
               ,'dæktrykbag'        => 'dæktryk bag'
               ,'affjedringfor'     => 'affjedring for'
               ,'affjedringbag'     => 'affjedring bag'
               ,'bremserfor'        => 'forbremse'
               ,'bremserbag'        => 'bagbremse'
               ,'eger'              => 'eger'
               ,'castervinkel'      => 'castervinkel'
               ,'efterløb'          => 'efterløb'
               ,'drejevinkel'       => 'drejevinkel'
               ,'venderadius'       => 'venderadius'

            ),'elektrisk'           => array(
                'starterbatteri'    => 'batteri' // på de modeller som ikke har el start vil det være forkert at kalde det et starterbatteri
               ,'batterispec1'      => 'batteri specifikationer'
               ,'batterispec2'      => 'batteri specifikationer 2'
               ,'batterivægt'       => 'batteri vægt'
               ,'batterilevetid'    => 'batteri levetid'
               ,'generator'         => 'generator'
               ,'sikring'           => 'sikring'
               ,'tændingssystem'    => 'tændingssystem'
               ,'elstart'           => 'elstart'
               ,'kickstart'         => 'kickstart'
               ,'lysfor'            => 'lys - for'
               ,'lysbagbremse'      => 'lys - bag/bremse'
               ,'lysbag'            => 'lys - bag'
               ,'lysbremse'         => 'lys - bremse'
               ,'lyspositions'      => 'lys - positions'
               ,'lysblink'          => 'lys - blink'
               ,'lyskontrolblink'   => 'lys - kontrolblink'
               ,'lyskontrollangt'   => 'lys - kontrollangt'
               ,'lysnummerplade'    => 'lys - nummerplade'
               ,'lysinstrument'     => 'lys - instrument'
               ,'oplader'           => 'oplader'
               ,'ladetid'           => 'ladetid'
               ,'rækkevidde'        => 'rækkevidde'
               ,'controller'        => 'controller'

            ),'olie og væsker'      => array(
                'motor'             => 'motorolie'
               ,'gear'              => 'gearolie'
               ,'forgaffel'         => 'forgaffelolie'
               ,'kølervæske'        => 'kølervæske'

            ),'transmission'        => array(
                'transmissiontype'  => 'transmissiontype'
               ,'kobling'           => 'kobling'
               ,'antalgear'         => 'antalgear'
               ,'gearratio'         => 'gear ratio'
               ,'tandhjulfor'       => 'tandhjul - for'
               ,'tandhjulbag'       => 'tandhjul - bag'
               ,'reduktionsratio'   => 'reduktions ratio'

            ),'ekstra'              => array(
                'stel'              => 'stel'
               ,'stelnummer'        => 'stelnummer'
               ,'udstødning'        => 'udstødning'
               ,'euroemission'      => 'euro emission'
               ,'vægttør'           => 'vægt tør'
               ,'vægtkørerklar'     => 'vægt kørerklar'
               ,'vægttotal'         => 'vægt total'
               ,'bæreevne'          => 'bæreevne'
               ,'luftfiltertype'    => 'luftfilter'
               ,'stigeevne'         => 'stigeevne'
               ,'medfølger'         => 'medfølger'
               ,'bremsevæske'       => 'bremsevæske'
               ,'støj'              => 'støj (standmåling)'
               ,'bagagevolume'      => 'bagagevolume'
               ,'bakgear'           => 'bakgear'
               ,'importør'          => 'importør / Ansøger'
               ,'producent'         => 'producent'
               ,'andet'             => 'andet'

            ),'begrænsninger'       => array(
                'begrænstransmis'   => 'transmission'
               ,'begrænstænding'    => 'tændingssystem'
               ,'begrænskarburator' => 'karburator'
               ,'begrænsluftfilter' => 'luftfilter'
               ,'begrænscontroller' => 'controller'
               ,'begrænsruller'     => 'ruller'
               ,'begrænsindsug'     => 'indsugning'
               ,'begrænsudstødning' => 'udstødning'
               ,'begrænsstelnum'    => 'stelnummer og hastighed'
               ,'begrænsandet'      => 'andet'

            ),'efterlyst'           => array(
                'efterlyst_nummer'          => 'efterlysnings nummer'
               ,'efterlyst_region'          => 'region / landsdel'
               ,'efterlyst_indrykdato'      => 'indryknings dato'
               ,'efterlyst_besked'          => 'besked fra ejer'
               ,'efterlyst_producent'       => 'producent'
               ,'efterlyst_model'           => 'model'
               ,'efterlyst_farve'           => 'farve'
               ,'efterlyst_argang'          => 'årgang'
               ,'efterlyst_kendetegn'       => 'kendetegn'
               ,'efterlyst_stelnummer'      => 'stelnummer'
               ,'efterlyst_motornummer'     => 'motornummer'
               ,'efterlyst_nummerplade'     => 'nummerplade'
               ,'efterlyst_politikreds'     => 'anmeldt i politikreds'
               ,'efterlyst_kontakt'         => 'kontakt oplysninger'

            )

         );

         $indhold .= '      <div class="scooterbilledholder">';

         if($GLOBALS['setup']['loggetind']){

            $filnavn = basename($_SERVER["PHP_SELF"]);

            $indhold .= '<div>';
            $indhold .= ahref($GLOBALS['setup']['domainogdatamappe'] . '/' . 'php/thumbnail.php?filnavn=' . $GLOBALS['setup']['datamappe'] . '/' . $GLOBALS['setup']['billedmappe'] . '/' . $billedefil . '.jpg&storrelse=mellem', 'mellem');
            $indhold .= lidtplads('vandret');
            $indhold .= ahref($GLOBALS['setup']['domainogdatamappe'] . '/' . 'php/thumbnail.php?filnavn=' . $GLOBALS['setup']['datamappe'] . '/' . $GLOBALS['setup']['billedmappe'] . '/' . $billedefil . '.jpg&storrelse=lille&sidelink=' . $billedefil . '&filurl=' . $filnavn, 'lille');
            $indhold .= '</div>';

         }

         if($GLOBALS['setup']['lavthumbnailslille']){

            $billed  = '';
            $billed .= $GLOBALS['setup']['datamappe'] . '/' . 'php/thumbnail.php?';
            $billed .= "filurl=$filurl&amp;";
            $billed .= "sidelink=$sidelink&amp;";
            if($kmt == "25"){ $billed .= "kmt=25&amp;"; }
            if($kmt == "25"){ $billed .= "kmt=25&amp;"; }
            if($kmt == "2545"){ $billed .= "kmt=2545&amp;"; }
            if($kmt == "30"){ $billed .= "kmt=30&amp;"; }
            if($kmt == "45"){ $billed .= "kmt=45&amp;"; }
            if($kmt == "3045"){ $billed .= "kmt=3045&amp;"; }
            if($kmt == "253045"){ $billed .= "kmt=253045&amp;"; }
            if($type == "elektrisk"){ $billed .= "type=elektrisk&amp;"; }
            if($type == "hybrid"){ $billed .= "type=hybrid&amp;"; }
            $billed .= 'filnavn=' . $GLOBALS['setup']['datamappe'] . '/' . $GLOBALS['setup']['billedmappe'] . '/' . $billedefil . '.jpg&amp;';
            $billed .= 'storrelse=lille';

            $indhold .= '<div class="scootermodel borderradius5px">';
            $indhold .= ahref($filurl . '#' . $billedefil, visbilled('0', $billed, $alttekst, '', null, null, null, null, '180', '160'));

            $indhold .= '<div class="thumbnailtekst fontsize_small">';
            $indhold .= ahref($filurl . '#' . $billedefil, mb_ucfirst($tekst));
            $indhold .= '</div>';

            $indhold .= '<div class="clearboth"></div>';

            $indhold .= '</div>';

         }

         ($GLOBALS['setup']['lavthumbnailsmellem'])
            ? $indhold .= visbilled('0', $GLOBALS['setup']['datamappe'] . '/' . 'php/thumbnail.php?filnavn=' . $GLOBALS['setup']['datamappe'] . '/' . $GLOBALS['setup']['billedmappe'] . '/' . $billedefil . '.jpg&storrelse=mellem', $billedefil, '', null, null, null, '550', '400')
            : $indhold .= ahref(
                 $GLOBALS['setup']['billedmappe'] . '/' . $billedefil . '.jpg'
               , visbilled('1', 'thumbnails/mellem/' . $billedefil . '.jpg', $scootermodel, null, null, null, null, null, null, null, null, true)
               , 'class="highslide" onclick="return hs.expand(this, { captionEval: \'this.thumb.alt\' })"'
               )
               . '<div class="highslide-caption">' . '</div>'
               ;

/*
            $indhold .= ahref('billeder/' . $sidelink . '.jpg',
               visbilled('1', 'thumbnails/' . $sidelink . '.jpg', $alttekst, '', null, null, null, null, '180', '160', null, null, null, null, 'vertical-align: bottom;'),
                  'class="highslide" onclick="return hs.expand(this, { captionEval: \'this.thumb.alt\' })"'
            );
            $indhold .= '<div class="highslide-caption">' . $tekst . '</div>';
*/

         $indhold .= '</div>';
         $indhold .= "\r\n";

      }

      foreach($data as $afsnitnavn => $afsnit){

         $tom = true;

         foreach($afsnit as $key => $value){

            if($value){

               $tom = false;

            }

         }

         if(isset($afsnitnavn) && !$tom){

            $indhold .= '      <div class="overskriftfordatascooter fontsize_medium">' . mb_ucfirst($afsnitnavn) . '</div>';
            $indhold .= "\r\n";

         }

         foreach($afsnit as $key => $value){

            if($value != ''){

               if(array_key_exists($key, $info[$afsnitnavn])){

/*
                  if($GLOBALS['setup']['loggetind']){

                     $indhold .= '<div class="cols">'. "\r\n";
                     $indhold .= '<span class="colleft">' . mb_ucfirst($info[$afsnitnavn][$key]) . ' </span>'. "\r\n";
                     $indhold .= '<span class="colright">';
                     $indhold .= input('0', 'text', 'noget', mb_ucfirst(htmlspecialchars($value)), '50');
                     $indhold .= '</span>'. "\r\n";
                     $indhold .= '<div class="clearboth"></div>'. "\r\n";
                     $indhold .= '</div>'. "\r\n";

                  }else{
*/
                     $indhold .= '         <div class="xcols"';

                     // rich snippet noget test
                     if ($key == 'model') {

                        $indhold .= ' itemscope itemtype="http://schema.org/Offer"';

                     }

                     $indhold .= '>'. "\r\n";

                     $indhold .= '            <span class="xcolleft">' . mb_ucfirst($info[$afsnitnavn][$key]) . '</span>'. "\r\n";


                     $indhold .= '            <span class="xcolright"';

                     // rich snippet noget test
                     if ($key == 'model') {

                        $indhold .= ' itemprop="name"';

                     }

                     $indhold .= '>' . mb_ucfirst($value) . '</span>'. "\r\n";

                     $indhold .= '            <div class="clearboth"></div>'. "\r\n";

                     $indhold .= '         </div>'. "\r\n";
/*
                  }
*/
               }else{

                  trigger_error('scooter data afsnit ( ' . $key . ' = ' . $value . ' ) ikke fundet i hovedlisten');

               }

            }

         }

         if(isset($afsnitnavn) && !$tom){

            $indhold .= '         <div class="xcolunder"></div>';
            $indhold .= "\r\n";
            $indhold .= "\r\n";

         }

      }

      if(false){
      //if($GLOBALS['setup']['loggetind']){

         $indhold .= '<div class="overskriftfordatascooter fontsize_medium">Administrator værktøjer</div>';
         $indhold .= "\r\n";

         $indhold .= '<div class="xcols">'. "\r\n";
         $indhold .= '<span class="xcolleft">' . '</span>'. "\r\n";
         $indhold .= '<span class="xcolright">';
         $indhold .= input('1', 'button', 'noget_gemknap', 'Gem data');
         $indhold .= '</span>'. "\r\n";
         $indhold .= '<div class="clearboth"></div>'. "\r\n";
         $indhold .= '</div>'. "\r\n";

         $indhold .= '<div class="xcolunder"></div>';
         $indhold .= "\r\n";
         $indhold .= "\r\n";

      }

      return visdel($scooter, $indhold, false, $scootermodel);

   }

}



function fejlfinding($handling, $tekst, $meretekst = "", $pil = 1){

   $indhold = '';

   switch ($handling){

      case 'a' :
         if($tekst != ""){
            $indhold .= '<div class="fejlfinding_a borderradius5px">' . mb_ucfirst($tekst) . '</div>';
         }
         break;

      case 'b' :
         $indhold .= '<div class="fejlfinding_etogtoholder">';

         if($tekst == ''){
            $indhold .= '<div></div>';
         }else{
            $indhold .= '<div class="fejlfinding_et borderradius5px">' . mb_ucfirst($tekst) . '</div>';
         }

         $indhold .= '<div class="fejlfinding_to borderradius5px">' . mb_ucfirst($meretekst) . '</div>';
         $indhold .= '<div class="clearboth"></div>';
         $indhold .= '</div>';
         break;

      case 'c' :
         $indhold .= '<div class="fejlfinding_cogdholder">';

         if($pil){
            $indhold .= '<div class="fejlfinding_c">Forsæt til næste punkt</div>';
         }else{
            $indhold .= '<div></div>';
         }

         $indhold .= '<div class="fejlfinding_d">';
         foreach ($tekst as $key){

            $indhold .= mb_ucfirst($key);
            $indhold .= "\r\n";

         }
         $indhold .= '</div>';

         $indhold .= '<div class="clearboth"></div>';
         $indhold .= '</div>';
         $indhold .= '<div style="height: 30px;"></div>';
         break;

   }

   return $indhold;

}



function scooterfarve($tekst){

   $indhold = '';
   $farver = explode("-", $tekst);

   foreach($farver as $farve){

      switch($farve){

         case 'lime':

            $hexfarve = 'E1EBAA';
            break;

         case 'beige':

            $hexfarve = 'FEE3B9';
            break;

         case 'koks':

            $hexfarve = '67625C';
            break;

         case 'brun':

            //$hexfarve = 'D8C6BA'; // sym mio brun
            $hexfarve = '764D37';
            break;

         case 'lysebrun':

            $hexfarve = 'CABF9F';
            break;

         case 'orange':

            $hexfarve = 'f80';
            break;

         case 'sølv':

            $hexfarve = 'E7E7E7';
            break;

         case 'krom':
            $hexfarve = 'DFE6EC';
            break;

         case 'grå':
            $hexfarve = 'aaa';
            break;

         case 'mørkegrå':

            $hexfarve = '555';
            break;

         case 'guld':

            $hexfarve = 'CAAE96';
            break;

         case 'hvid':

            $hexfarve = 'fff';
            break;

         case 'gul':

            $hexfarve = 'ff0';
            break;

         case 'lysgul':

            $hexfarve = 'F3E9C6';
            break;

         case 'grøn':

            $hexfarve = '417545';
            break;

         case 'rød':

            $hexfarve = 'E92525';
            break;

         case 'bordeaux':

            $hexfarve = '800000';
            break;

         case 'pink':
         case 'lyserød':

            $hexfarve = 'f8c';
            break;

         case 'blå':

            $hexfarve = '0C609E';
            break;

         case 'lyseblå':

            $hexfarve = '108AE0';
            break;

         case 'mørkeblå':

            $hexfarve = '0C609E';
            break;

         case 'champagne':

            $hexfarve = 'DE973D';
            break;

         case 'lilla':

            $hexfarve = 'C26498';
            break;

         case 'sort':

            $hexfarve = '000';
            break;

         case 'chrome':

            $hexfarve = 'fff';
            break;

         default:

            $hexfarve = 'fff';
            $blevikkefundet = true;
            trigger_error('scooter farven : "' . $farve . '" findes ikke i listen over kendte farver ' . $_SERVER['PHP_SELF'] , E_USER_ERROR);
            break;

      }

      if(isset($hexfarve)){

         $indhold .= '<span class="scooterfarve" style="background: #' . $hexfarve . ';">';

         if(isset($blevikkefundet)){

            $indhold .= '?';

         }

         $indhold .= '</span>';
         $indhold .= '<span class="scooterfarveefter"></span>';

      }

   }

   return $indhold;

}



function stederidanmark($bredde, $hojde){

   // For at exportere google maps kortet skriv "&output=kml" til sidst i urlen.
   // http://maps.google.dk/maps/ms?ie=UTF8&hl=da&msa=0&msid=114241181508189917491.00048307d8a0034e1af84&t=h&output=kml

   $indhold = '';

   $url = ''
      . 'http://maps.google.dk/maps/ms'
      . '?'
      . 'ie=UTF8'
      . '&hl=da'
      . '&msa=0'
      . '&msid=215658291799303280221.0004b74ecd608111ed8cb'
      . '&t=h'
      . '&ll=56.057176,11.693905'
      . '&spn=2.791225,6.836578'
      ;

   $urlamp = ''
      . 'http://maps.google.dk/maps/ms'
      . '?'
      . 'ie=UTF8'
      . '&amp;hl=da'
      . '&amp;msa=0'
      . '&amp;msid=215658291799303280221.0004b74ecd608111ed8cb'
      . '&amp;t=h'
      . '&amp;ll=56.057176,11.693905'
      . '&amp;spn=2.791225,6.836578'
      ;

   // $urla giver fejl i xenu : http://localhost/%22http://maps.google.dk/maps/ms?ie=UTF8&amp;hl=da&amp;msa=0&amp;msid=114241181508189917491.00048307d8a0034e1af84&amp;t=h&amp;ll=56.057176,11.693905&amp;spn=2.791225,6.836578&amp;output=embed"></iframe></div>"
   $urla = $url . '&output=embed';
   $urlb = $url . '&source=embed';

   $iframekode = ''
      . '<div style="margin: auto; text-align: center;">'
      . '<iframe'
      . ' width="' . $bredde . '"'
      . ' height="' . $hojde . '"'
      . ' style="margin: auto;"'
      . ' frameborder="0"'
      . ' scrolling="no"'
      . ' marginheight="0"'
      . ' marginwidth="0"'
      . ' src="' . $urla . '"'
      . '></iframe>'
      . '</div>'
      ;

   $indhold .= '<div style="text-align: center;">';

   $indhold .= $iframekode;

   $indhold .= '<div>';
   $indhold .= ahref($urla, 'Vis i fuld størrelse', null, true);
   $indhold .= lidtplads('vandret');
   $indhold .= ' | ';
   $indhold .= lidtplads('vandret');
   $indhold .= ahref($urlb, 'Vis i google maps', null, true);
   $indhold .= '</div>';
   $indhold .= "\r\n";

   $indhold .= '<div>';
   $indhold .= 'Du kan vise kortet på din egen hjemmeside ved at bruge følgende kode.';
   $indhold .= '</div>';

   $indhold .= '</div>';
   $indhold .= "\r\n";

   // xenu linksleuth giver forbidden request her (http://localhost/"http://maps.google..... men det må være en fejl i xenu programmet
   $indhold .= input('1', 'text', 'stederidanmarkembedkode', str_replace('&amp;', '&amp;amp;', htmlspecialchars($iframekode)), '40', 'embed kode', 'stederidanmarkembedkode', '', '', '');
/*
*/
   return $indhold;

}



function vudering($data){

   $indhold = '';
   $billed = '';
   $filnavnplus  = 'ikoner/plus.gif';
   $filnavnminus = 'ikoner/minus.gif';
   $billedplus  = '<span class="plusogminusbilled">' . visbilled('2', $filnavnplus, 'plus tegn', '', null, null, null, null, '12', '9') . '</span>';
   $billedminus = '<span class="plusogminusbilled">' . visbilled('2', $filnavnminus, 'minus tegn', '', null, null, null, null, '12', '9') . '</span>';

   if($data){

      $indhold .= '<div class="plusogminusholder">';

      foreach($data as $value){

         switch($value[0]){

            case '+' :
               $billed = $billedplus;
               break;

            case '-' :
               $billed = $billedminus;
               break;

            default :
               trigger_error('ukendt valg i vudering()');
               break;

         }

         if($billed != ''){

               $indhold .= $billed;

               $indhold .= '<span class="plusogminustekst">';
               $indhold .= mb_ucfirst($value[1]);
               $indhold .= '</span>';

               $indhold .= '<div class="clearboth"></div>';

         }

      }

      $indhold .= '</div>';

      $indhold .= '<div class="plusogminusforklaring">';
      $indhold .= 'Forklaring : ';
      $indhold .= $billedplus  . ' = godt';
      $indhold .= lidtplads('vandret');
      $indhold .= $billedminus . ' = dårligt';
      $indhold .= '</div>';

   }

   return $indhold;

}



function visdermanglernoget(){

   $indhold = '';

   if(isset($_POST["funktion"]) && $_POST["funktion"] == "manglerdernoget"){

      if(sendemail('Der mangler noget', 'Hvad mangler der ? : ' . $_POST["kommentar"] . "\r\n\r\n" . 'Afsender : ' . $_POST["afsender"], $_POST["afsender"])){

         $indhold .= beskedenblevsendt(true);

      }else{

         $indhold .= beskedenblevsendt(false);

         $indhold .= ''
            . formbox('1', '', 'mangler der noget ?', $_SERVER['PHP_SELF'], 'post', '', ''
               . input('0', 'text', 'kommentar', $_POST["kommentar"], '30', 'Det du skrev', 'tekst', '', '', '', '100')
            );

      }

   }else{

      $indhold .= lidtplads('lodret');
      $indhold .= ''
         . formbox('1', '', 'mangler der noget ?', $_SERVER['PHP_SELF'], 'post', '', ''
            . input('0', 'hidden', 'funktion', 'manglerdernoget')
            . input('1', 'email', 'afsender', '', '30', 'Afsender (din e-mail)', 'nogetmedafsender', '', '')
            . input('1', 'text', 'kommentar', '', '30', 'hvad mangler der ?', 'tekst', '', '', '', '100')
            . input('1', 'submit', 'sog_manglerdernogetknap', 'Send', '', 'rykind', 'mangler_sendknap_c')
         );

   }

   return $indhold;

}



function ensdethele(
     $for = ''
   , $data = ''
   , $enhed = ''
   , $efter = ''
   , $forkortelse = ''
   , $ucfirst = 0
   , $ucwords = 0
   , $br = 0
   ){

   $indhold = '';

   if($data && $enhed){

      if(is_array($enhed)){

         if(in_array($data, $enhed)){

            enskort($data);

         }else{

            trigger_error('ukendt enhed "' . $data . '" valgt');

         }

      }

   }

   if($data){

      $indhold .= $data;

   }

   if($data && $enhed){

      if(!is_array($enhed)){

         $enheder = array(
             'mm' => 'mm'
            ,'volt' => 'volt'
            ,'km/t' => 'km/t'
            ,'ccm' => 'cm³'
            ,'liter' => 'liter'
         );

         if(array_key_exists($enhed, $enheder)){

            $indhold .= ' ' . $enheder[$enhed];

         }else{

            $indhold .= ' ' . $enhed;

         }

      }

   }

   if($data && $efter){

      $indhold .= $efter;

   }

   if($forkortelse){

      enskort($forkortelse);
      $indhold .= $forkortelse;

   }

   if($ucfirst){

      $indhold = mb_ucfirst($indhold);

   }

   if($ucwords){

      $indhold = mb_ucwords($indhold);

   }

   if($data && $for){

      $indhold = $for . ' ' . $indhold;

   }

   if($br){

      if($indhold != ''){

         $indhold .= '<br>';

      }

   }

   return $indhold;

}



function enskort(&$kort){

   $fraogtil = array(

       '2 takt'                 => '2 takt forbrændingsmotor'
      ,'4 takt'                 => '4 takt forbrændingsmotor'
      ,'elektrisk'              => 'elektrisk motor'
      ,'4 takt og elektrisk'    => 'hybrid (både 4 takt forbrændingsmotor og elektrisk motor)'

      ,'blæse' => 'tvunget blæsekølet'
      ,'vind'  => 'passiv vindkølet'
      ,'væske' => 'væskekølet'

      ,'total' => 'ved adskildelse'
      ,'skift' => 'ved olieskift'

      ,'cdi' => 'CDI'
      ,'tci' => 'TCI'
      ,'tdi' => 'TDI'
 
      ,'cvt' => 'CVT'

      ,'OHC'  => 'OHC (overliggende knastaksel)'
      ,'SOHC' => 'SOHC (enkel overliggende knastaksel)'
      ,'DOHC' => 'DOHC (dobbelt overliggende knastaksel)'

      ,'EEV' => 'EEV (Enhanced Environmentally friendly Vehicle)' // hmmm virker ikke
      ,'' => ''

   );

   if(isset($fraogtil[$kort])){

      $kort = $fraogtil[$kort];

   }

}



function vinfindland($data){

   $indhold = '';

   if($data != ''){

      if(count($data) <= 17){

         // Hvis der er 2 eller flere lande med samme navn så giver preg_match() fejl.
         // muligvis problem med æøå
         $lande_regex = ''
         // afrika
         . '(?P<sydamerika>a[a-h])'
         . '|(?P<iverykysten>a[j-n])'
         . '|(?P<angola>b[a-e])'
         . '|(?P<kenya>b[f-k])'
         . '|(?P<tanzania>b[l-r])'
         . '|(?P<benin>c[a-e])'
         . '|(?P<malagasy>c[f-k])'
         . '|(?P<tunesien>c[l-r])'
         . '|(?P<egypten>d[a-e])'
         . '|(?P<marokko>d[f-k])'
         . '|(?P<zambia>d[l-r])'
         . '|(?P<etiopien>e[a-e])'
         . '|(?P<mozambique>e[f-k])'
         . '|(?P<ghana>f[a-e])'
         . '|(?P<nigeriamadagascar>f[f-k])'
         // asien
         . '|(?P<japan>j[a-z1-90])'
         . '|(?P<srilanka>k[a-e])'
         . '|(?P<israel>k[f-k])'
         . '|(?P<sydkorea>k[l-r])'
         . '|(?P<kina>l[a-z1-90])'
         . '|(?P<indien>m[a-e])'
         . '|(?P<indonesien>m[f-k])'
         . '|(?P<thailand>m[l-r])'
         . '|(?P<parkistan>n[f-k])'
         . '|(?P<tyrkiet>n[l-r])'
         . '|(?P<filipinerne>p[a-e])'
         . '|(?P<singapore>p[f-k])'
         . '|(?P<malaysia>p[l-r])'
         . '|(?P<forenedearabiskeimerater>r[a-e])'
         . '|(?P<taiwan>r[f-k])'
         . '|(?P<vietman>r[l-r])'
         // europa
         . '|(?P<stor_britanien>s[a-m])'
         . '|(?P<tyskland1>s[n-t])'
         . '|(?P<polen>s[u-z])'
         . '|(?P<switzh>t[a-h])'
         . '|(?P<tjoslovakiet>t[j-p])'
         . '|(?P<ungarn>t[r-v])'
         . '|(?P<portugal>t[w-z1])'
         . '|(?P<danmark>u[h-m])'
         . '|(?P<irland>u[n-t])'
         . '|(?P<romeeeeenien>u[u-z])' #æ
         . '|(?P<slovakiet>u[5-7])'
         . '|(?P<ooooostrig>v[a-e])'#ø
         . '|(?P<frankrig>v[f-r])'
         . '|(?P<spanien>v[s-w])'
         . '|(?P<jogoslovakiet>v[x-z1-2])'
         . '|(?P<kroatien>v[3-5])'
         . '|(?P<estland>v[6-90])'
         . '|(?P<tyskland2>w[a-z1-90])'
         . '|(?P<bulgarien>x[a-e])'
         . '|(?P<greeeeekenland>x[f-k])'#æ
         . '|(?P<holland>x[l-r])'
         . '|(?P<ruslandussr>x[s-w])'
         . '|(?P<luxemborg>x[x-z1-2])'
         . '|(?P<rusland>x[3-90])'
         . '|(?P<belgien>y[a-e])'
         . '|(?P<finland>y[f-k])'
         . '|(?P<malta>y[l-r])'
         . '|(?P<sverige>y[s-w])'
         . '|(?P<norge>y[x-z1-2])'
         . '|(?P<hviderusland>y[3-5])'
         . '|(?P<ukraine>y[6-90])'
         . '|(?P<italien>z[a-r])'
         . '|(?P<slovenien>z[x-z1-2])'
         . '|(?P<lithaun>z[3-5])'
         // nord amerika
         . '|(?P<usa1>1[a-z1-90])'
         . '|(?P<canada>2[a-z1-90])'
         . '|(?P<mexiko>3[a-w])'
         . '|(?P<kosta_riga>3[x-z1-7])'
         . '|(?P<usa2>4[a-z1-90])'
         . '|(?P<usa3>5[a-z1-90])'
         // oceanien
         . '|(?P<australien>6[a-w])'
         . '|(?P<new_zealand>7[a-e])'
         // syd amerika
         . '|(?P<argentina>8[a-e])'
         . '|(?P<chile>8[f-k])'
         . '|(?P<ekvador>8[l-r])'
         . '|(?P<peru>8[s-w])'
         . '|(?P<venezuela>8[x-z1-2])'
         . '|(?P<brasilien1>9[a-e])'
         . '|(?P<colombia>9[f-k])'
         . '|(?P<praguay>9[l-r])'
         . '|(?P<uruguay>9[s-w])'
         . '|(?P<trinidad_og_tababo>9[x-z1-2])'
         . '|(?P<brasilien2>9[3-9])'
         ;

         if(preg_match("%$lande_regex%xi", $data, $match) !== false){

            foreach($match as $key=>$value){

               if(!is_numeric($key) && $value!==''){

                  $indhold .= ' (';
                  $indhold .= mb_ucfirst(
                                 str_replace('_', ' ', 
                                 str_replace('eeeee', 'æ',
                                 str_replace('ooooo', 'ø',
                                    $key
                                 )
                                 )
                                 )
                              );
                  $indhold .= ')';
                  break;

               }

            }

         }else{

            trigger_error('preg_match returnerede false');

         }

      }else{

         trigger_error('Stelnummer (' . $data . ') er vist ikke et VIN i ' . basename($_SERVER['PHP_SELF']));

      }

   }

   return $indhold;

}



function kemiskformel($data){

   $data = preg_replace('/(R)(\d+)/',        "$1<SUP>$2</SUP>",        $data);
   $data = preg_replace('/([^R\.])(\d+)/',   "$1<SUB>$2</SUB>",        $data);
   $data = preg_replace('/\)([a-z])/',       ")<SUB><I>$1</I></SUB>",  $data);
   $data = preg_replace('/\./',              "&middot;",               $data);
   $data = preg_replace('/==/',              "&equiv;",                $data);
   $data = preg_replace('/\*/',              "&bull;",                 $data);

   return $data;

}



?>