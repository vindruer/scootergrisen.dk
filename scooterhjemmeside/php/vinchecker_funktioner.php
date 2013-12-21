<?php // æøåÆØÅ UTF-8 uden BOM



function visvinidatabase($visantalsogninger){

   $indhold = '';
   $tbodyindhold = '';
   $sorter = 'id'; // standard
   $opned = 'DESC'; // standard
   
   $db = new mysqli($GLOBALS['setup']['mysql_server'], $GLOBALS['setup']['mysql_bruger'], $GLOBALS['setup']['mysql_kodeord'], $GLOBALS['setup']['mysql_database']);
   
   if ($db->connect_errno > 0) {
   
      $indhold .= '<mark>' . 'Kunne ikke forbinde til database [' . $db->connect_error . ']' . '</mark>';
   
   } else {
      
      if (!$db->set_charset("utf8")) {
      }else{
      }

      if ($stmt = $db->prepare("SELECT * FROM {$GLOBALS['setup']['mysql_tablenavn_vin']} ORDER BY $sorter $opned LIMIT $visantalsogninger")) {
   
         $stmt->execute();
   
         if ($stmt->bind_result($id, $stelnummer, $kommentar, $tid)) {
   
            while ($stmt->fetch()) {
   
               $tbodyindhold .= ''
                  . '<tr>'
                  . '<td>' . $id . '</td>'
                  . '<td>' . $stelnummer . '</td>'
                  . '<td>' . $kommentar . '</td>'
                  . '<td>' . $tid . '</td>'
                  . '</tr>'
                  ;
   
            }
   
         }
   
         $stmt->close();
   
      }
   
      if ($tbodyindhold != '') {
   
         $indhold .= ''
            . '<div style="text-align: center; background: #222; color: #ddd; padding: 10px;" class="fontsize_medium bold">'
            . 'Seneste '.$visantalsogninger.' søgninger'
            . '</div>'

            . '<div class="overflowxauto">'
            . '<table class="fontsize_small tablesorter tablesorter-default">'
   
            . '<thead>'
            . '<tr>'
            . '<th>ID</th>'
            . '<th>Indtastede stelnummer</th>'
            . '<th>Indtastede kommentar</th>'
            . '<th>Tidspunkt for søgning</th>'
            . '</tr>'
            . '</thead>'

            . '<tbody>'
            . $tbodyindhold
            . '</tbody>'

            . '</table>'
            . '</div>'
            ;
   
      } else {
   
         $indhold .= nogenmisser();
   
      }
   
   }
   
   return $indhold;

}



function gemvinidatabase($vin, $kommentartilvin, $tid){

/*

CREATE TABLE `stelnumre` (
`id` int(11) NOT NULL auto_increment,
`stelnummer` varchar (30) NOT NULL,
`kommentartilvin` varchar (300) NOT NULL,
`tid` varchar (30) NOT NULL,
PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8 COLLATE utf8_danish_ci;

*/

   $indhold = '';

   $db = new mysqli($GLOBALS['setup']['mysql_server'], $GLOBALS['setup']['mysql_bruger'], $GLOBALS['setup']['mysql_kodeord'], $GLOBALS['setup']['mysql_database']);
   
   if ($db->connect_errno > 0) {
   
      $indhold .= '<mark>Kunne ikke forbinde til database [' . $db->connect_error . ']</mark>';
   } else {
   
      if (!$db->set_charset("utf8")) {
      }else{
      }

      if ($stmtd = $db->prepare("INSERT INTO {$GLOBALS['setup']['mysql_tablenavn_vin']} (stelnummer, kommentartilvin, tid) VALUES (?, ?, ?)")) {

         $stmtd->bind_param('sss', $vin, $kommentartilvin, $tid);
         $stmtd->execute();

         if($stmtd->affected_rows != -1){

            //$indhold .= '<div>Ser ud til søgningen blev gemt i databasen</div>';

         }else{

            trigger_error('Fejl ! Ser ud til der gik noget galt ved forsøg på adgang til database');

         }

         $stmtd->close();

      }else{
      
         printf("Fejl: %s\n", $db->error);
      
      }
   
   }

   return $indhold;

}



function vincheckdigitchecker(){

// lav så man kan se om det er en 25, 30 eller 45.

   $indhold = '';
   $vin = '';
   $vinarray = array();
   $samlet = 0;
   $sidstetilstand = '';
   $kommentartilvin = '';

   $vinliste = array(
       'LT50QT-29' => 'LLMTCB2954L053104' // LT50QT-29
      ,'Kymco Super 8 4T 50 cm³, 30 km/t' => 'LC2U7010072600558'
      ,'VGA Digita' => 'L4HDEBBP8B6000746'
      ,'Keeway Hurricane' => 'TSYTAB2'
      ,'Keeway Focus 45 km/t' => 'TSYTABMP16C'
      ,'Leone Swan (Keeway Swan)' => 'LBBB57308'
      ,'Jincheng JC50Q-5' => 'LJCPCBLCX11000237'
      ,'Tisong TM-300' => 'LLMESBTS08L000670'
      ,'VGA Mover 30 km/t' => 'L4HDENBP6C6'
      ,'Xiaofeilu HRTK122-1 (lithium)' => 'LXDT1ZW0_97000001'
      ,'Xiaofeilu HRTK122-1 (silicon)' => 'LXDTXZW0_97000001'
      ,'Xiaofeilu HRTK122-1' => 'ZJM'
      ,'PGO G-Max' => 'RFVM2M2C141000001'
      ,'PGO Trike/T-Rex/Dr Big' => 'RFVCPCPC131011730' // fra PGO Trike brugermanual
      //PGO T-REX 150 4T - RFVCPCPC531002780
      ,'Beta Arc' => 'ZD3BS4C4'
      ,'Sym Mio' => 'RFGHU05WX6S'
      ,'Baotian BT49QT-9 / Texas Flash' => 'L82TCAP9771144787'
      ,'BT49QT-9' => 'L82TCAP9T81'
      ,'Giantco Stealth 45 km/t' => 'LNGTGBDLX9C404361'

   );

   if(isset($_POST["funktion"]) && $_POST["funktion"] == "vincheckdigitchecker"){

      if(isset($_POST["vin"])){
      // � = EF BF BD (eller EF BF for første tegn)

         $vin = $_POST["vin"];
         // obs $_POST["vin"] er vist en string og ikke et array
/*
         if(!isset($vin[0])){ $vin[0] = ''; }
         if(!isset($vin[1])){ $vin[1] = ''; }
         if(!isset($vin[2])){ $vin[2] = ''; }
         if(!isset($vin[3])){ $vin[3] = ''; }
         if(!isset($vin[4])){ $vin[4] = ''; }
         if(!isset($vin[5])){ $vin[5] = ''; }
         if(!isset($vin[6])){ $vin[6] = ''; }
         if(!isset($vin[7])){ $vin[7] = ''; }
         if(!isset($vin[8])){ $vin[8] = ''; }
         if(!isset($vin[9])){ $vin[9] = ''; }
         if(!isset($vin[10])){ $vin[10] = ''; }
         if(!isset($vin[11])){ $vin[11] = ''; }
         if(!isset($vin[12])){ $vin[12] = ''; }
         if(!isset($vin[13])){ $vin[13] = ''; }
         if(!isset($vin[14])){ $vin[14] = ''; }
         if(!isset($vin[15])){ $vin[15] = ''; }
         if(!isset($vin[16])){ $vin[16] = ''; }
var_dump($_POST["vin"]);
echo '<br>';
var_dump($vin);
*/
      }

      if(isset($_POST["kommentartilvin"])){

         $kommentartilvin = $_POST["kommentartilvin"];

      }

   }

   $indhold .= doraemonsays(
       'Velkommen til den meget experimentale knap-så-fantastiske VIN Checker til scootere og knallerter.'
      . "\r\n" . "\r\n"
      .'Her kan du <span style="text-decoration: underline;">måske</span> få information om en scooter/knallert ud fra det <span class="bold">17 cifret stelnummer</span> (kaldet VIN) som findes på nyere modeller.' . "\r\n" . "\r\n"
      .'Hvis du har et stelnummer fra en gammel knallert som ikke er på 17 tegn så kan du ikke bruge det her.' . "\r\n" . "\r\n"
      .'Se også ' . ahref('registrering.php#stelnummer', 'Registrering#stelnummer') . "\r\n"
   );

   $indhold .= lidtplads('lodret');

   $dataliste = '';
   $dataliste .= '<datalist id="vinliste">';

/*
   foreach($vinliste as $value){

      $dataliste .= '<option label="' . $value . '" value="' . $value . '">';

   }
*/

   foreach($vinliste as $key => $value){

      $dataliste .= '<option label="' . $key . '" value="' . $value . '">';

   }

   $dataliste .= '</datalist>';

   if(!$GLOBALS['setup']['lokalt']){

      $sidstetilstand = 'checked'; // standard tilstand

   }

   if(isset($_POST["funktion"]) && $_POST["funktion"] == "vincheckdigitchecker"){

      if(isset($_POST["skalgrisenbliveklogere"])){

         $sidstetilstand = 'checked';

      }else{

         $sidstetilstand = '';

      }

   }

   $indhold .= ''
      . formbox('1', '', 'VIN checker', $_SERVER['PHP_SELF'], 'post', '', ''
         . input('0', 'hidden', 'funktion', 'vincheckdigitchecker')
         . input('1', 'text', 'vin', $vin, '33', 'Indtast VIN (17 tegn)', 'fejl_sogetekst', '', 'list="vinliste" title="Skriv et VIN (stelnummer) på 17 tegn og brug kun tegnene 0-9 og a-z eller A-Z."', '', '20')
         . input('1', 'text', 'kommentartilvin', $kommentartilvin, '33', 'skriv eventuelt en kommentar', 'fejl_kommentartilvin', '', 'title="Skriv eventuelt til kommentar som for eksempel hvis du ved noget om hvad scooter stelnummeret passer til så jeg kan forbedre VIN checkeren"', '', '')
         // placeholder="" pattern="[0-9a-zA-Z]{17}"
         . $dataliste
         . input('1', 'checkbox', 'skalgrisenbliveklogere', '', '', 'Gem VIN til scootergrisen', 'blablablacheckbox', '', $sidstetilstand)
         . input('1', 'submit', 'qqqqqqqqq_sendknap', 'Undersøg VIN', '', 'rykind', 'qqqqqqqqq_sendknap')
         //. input('1', 'button', 'qqqqqqqqq_resetknap', 'Ryd', '', 'rykind', 'qqqqqqqqq_resetknap', '', 'onclick="fejl_sogetekst.value=\'\';"')
         . input('1', 'reset', 'qqqqqqqqq_resetknap', 'Ryd', '', 'rykind', 'qqqqqqqqq_resetknap', '', '')
      );

   //if(1){
   if(isset($_POST["funktion"]) && $_POST["funktion"] == "vincheckdigitchecker"){

      $tid = date("j-n-Y H:i:s");

      //if(!$GLOBALS['setup']['lokalt']){

         if(isset($_POST["skalgrisenbliveklogere"])){

            // gem først til fil som backup hvis mysql ikke virker
            //gemvinifil('gem', $GLOBALS['setup']['vinsogninger'], $tid . ' : ' . $vin . ' : ' . $kommentartilvin . "\r\n");
            $indhold .= gemvinidatabase($vin, $kommentartilvin, $tid);

         }else{

            // gem først til fil som backup hvis mysql ikke virker
            //gemvinifil('gem', $GLOBALS['setup']['vinsogninger'], $tid . ' : ' . '[Valgt ikke at gemme]' . "\r\n");
            $indhold .= gemvinidatabase('[Valgt ikke at gemme]', $kommentartilvin, $tid);

         }

      //}

      if($vin == ''){

            $indhold .= '<hr>';
            $indhold .= '<div class="textaligncenter">';
            $indhold .= '<br>';
            $indhold .= 'Der er jo ikke indtastet noget.' . '<br>';
            $indhold .= '<div>'.visbilled('2', 'fejl/fejl0009.jpg', 'status billed', false, true).'</div>';
            $indhold .= '</div>';

      }else{

            // huske det er en string ikke et array

            if(isset($vin[0])){ $vinarray[0] = $vin[0]; }else{ }
            if(isset($vin[1])){ $vinarray[1] = $vin[1]; }else{ }
            if(isset($vin[2])){ $vinarray[2] = $vin[2]; }else{ }
            if(isset($vin[3])){ $vinarray[3] = $vin[3]; }else{ }
            if(isset($vin[4])){ $vinarray[4] = $vin[4]; }else{ }
            if(isset($vin[5])){ $vinarray[5] = $vin[5]; }else{ }
            if(isset($vin[6])){ $vinarray[6] = $vin[6]; }else{ }
            if(isset($vin[7])){ $vinarray[7] = $vin[7]; }else{ }
            if(isset($vin[8])){ $vinarray[8] = $vin[8]; }else{ }
            if(isset($vin[9])){ $vinarray[9] = $vin[9]; }else{ }
            if(isset($vin[10])){ $vinarray[10] = $vin[10]; }else{ }
            if(isset($vin[11])){ $vinarray[11] = $vin[11]; }else{ }
            if(isset($vin[12])){ $vinarray[12] = $vin[12]; }else{ }
            if(isset($vin[13])){ $vinarray[13] = $vin[13]; }else{ }
            if(isset($vin[14])){ $vinarray[14] = $vin[14]; }else{ }
            if(isset($vin[15])){ $vinarray[15] = $vin[15]; }else{ }
            if(isset($vin[16])){ $vinarray[16] = $vin[16]; }else{ }

            if(isset($vin[17])){ $vinarray[17] = $vin[17]; }else{ }
            if(isset($vin[18])){ $vinarray[18] = $vin[18]; }else{ }
            if(isset($vin[19])){ $vinarray[19] = $vin[19]; }else{ }

            if(isset($vinarray[0])){ $samlet += (checkdigitlavom($vinarray[0]) * 8); }
            if(isset($vinarray[1])){ $samlet += (checkdigitlavom($vinarray[1]) * 7); }
            if(isset($vinarray[2])){ $samlet += (checkdigitlavom($vinarray[2]) * 6); }
            if(isset($vinarray[3])){ $samlet += (checkdigitlavom($vinarray[3]) * 5); }
            if(isset($vinarray[4])){ $samlet += (checkdigitlavom($vinarray[4]) * 4); }
            if(isset($vinarray[5])){ $samlet += (checkdigitlavom($vinarray[5]) * 3); }
            if(isset($vinarray[6])){ $samlet += (checkdigitlavom($vinarray[6]) * 2); }
            if(isset($vinarray[7])){ $samlet += (checkdigitlavom($vinarray[7]) * 10); }
            if(isset($vinarray[8])){ $samlet += (checkdigitlavom($vinarray[8]) * 0); }
            if(isset($vinarray[9])){ $samlet += (checkdigitlavom($vinarray[9]) * 9); }
            if(isset($vinarray[10])){ $samlet += (checkdigitlavom($vinarray[10]) * 8); }
            if(isset($vinarray[11])){ $samlet += (checkdigitlavom($vinarray[11]) * 7); }
            if(isset($vinarray[12])){ $samlet += (checkdigitlavom($vinarray[12]) * 6); }
            if(isset($vinarray[13])){ $samlet += (checkdigitlavom($vinarray[13]) * 5); }
            if(isset($vinarray[14])){ $samlet += (checkdigitlavom($vinarray[14]) * 4); }
            if(isset($vinarray[15])){ $samlet += (checkdigitlavom($vinarray[15]) * 3); }
            if(isset($vinarray[16])){ $samlet += (checkdigitlavom($vinarray[16]) * 2); }

            $modulus = $samlet % 11;

            ($modulus == 10)
               ? $udregnetcheckdigit = 'X'
               : $udregnetcheckdigit = $modulus;


            $indhold .= 'Antal tegn : ' . vinlengde($vinarray) . '<br>';
            $indhold .= 'Tegn ([a-z][A-Z][0-9]) : ' . checktegn($vin) . '<br>';

            if(count($vinarray) == 17){

               $indhold .= 'Tegn brugt ved bestemt placering : ' . vintegn($vin) . '<br>';

            }

            $indhold .= 'Andre bemærkninger : ' . checkforkendetegn($vinarray) . '<br>';
            $indhold .= '<br>';

            $indhold .= '[1] Kontinent : ';
            if(isset($vinarray[0])){
               $indhold .= vinkontinent($vinarray[0]);
            }else{
               $indhold .= 'mangler tegn';
            }
            $indhold .= '<br>';

            $indhold .= '[1-2] Land : ';
            if(isset($vinarray[1]) && isset($vinarray[2])){
               $indhold .= behandlvin($vinarray[0].$vinarray[1]);
            }else{
               $indhold .= 'mangler tegn';
            }
            $indhold .= '<br>';

            $indhold .= '[1-3] Producent (mærker) : ';
            if(isset($vinarray[0]) && isset($vinarray[1]) && isset($vinarray[2])){
            $indhold .= vincheckproducent($vinarray[0].$vinarray[1].$vinarray[2]);
            }else{
               $indhold .= 'mangler tegn';
            }
            $indhold .= '<br>';

            $indhold .= '[9] Kontroltegn : ';
            if(isset($vinarray[8])){
               $indhold .= ' ' . vincheckcheckdigit($vinarray[8], $udregnetcheckdigit);
            }else{
               $indhold .= 'mangler tegn';
            }
            $indhold .= '<br>';

            $indhold .= '[10] Produktionsår : ';
            if(isset($vinarray[9])){
               $indhold .= vincheckargang($vinarray[9]);
            }else{
               $indhold .= 'mangler tegn';
            }
            $indhold .= '<br>';

            $indhold .= '[12-17] Serienummer : ';
            if(isset($vinarray[11]) && isset($vinarray[12]) && isset($vinarray[13]) && isset($vinarray[14]) && isset($vinarray[15]) && isset($vinarray[16])){
               $indhold .= $vinarray[11] . $vinarray[12] . $vinarray[13] . $vinarray[14] . $vinarray[15] . $vinarray[16];
            }else{
               $indhold .= 'mangler tegn';
            }
            $indhold .= '<br>';




            $indhold .= '<br>';

            $indhold .= '<div style="font-family: consolas; font-size: 200%;">';
            $indhold .= 'Indtastede VIN : ' . mb_strtoupper($vin);
            $indhold .= '<br>';
            $indhold .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▲▲▲▲▲▲▲▲';
            $indhold .= '<br>';
            $indhold .= 'Tegn Position :: &nbsp;&nbsp;&nbsp;45678901';
            $indhold .= '<br>';
            $indhold .= '</div>';
            $indhold .= '<br>';

            $indhold .= 'Eventuel extra information : ';
            if(isset($vinarray[0]) && isset($vinarray[1]) && isset($vinarray[2])){
               $indhold .= vincheckextrainfo($vinarray[0].$vinarray[1].$vinarray[2]);
            }else{
               $indhold .= 'mangler tegn';
            }
            $indhold .= '<br>';

            $indhold .= '<br>';
            $indhold .= '<br>';
            $indhold .= '<br>';




         if(count($vinarray) == 17){
         if(isset($vinarray[8])){

            $indhold .= '<div style="background: #6cc; padding: 0; border: 2px dashed #6aa; padding: 1em;" class="borderradius5px">';
            $indhold .= '<h3 style="margin: auto; text-align: center;">Test af kontroltegn (tegn nummer 9 i VIN) for at se om VIN er gyldigt</h3>';
            $indhold .= '<h5 style="margin: auto; text-align: center;">...af en eller anden grund validere mange VIN ikke selvom de er rigtige...</h5>';
            $indhold .= '<br>';

            $indhold .= '<div class="kontroltegnforme borderradius5px">';
            $indhold .= 'Position (1-17) :'
               . formbox('0', '', '', $_SERVER['PHP_SELF'], 'post', '', ''
                  . input('0', 'text', 'vin1', '1', '2')
                  . input('0', 'text', 'vin2', '2', '2')
                  . input('0', 'text', 'vin3', '3', '2')
                  . input('0', 'text', 'vin4', '4', '2')
                  . input('0', 'text', 'vin5', '5', '2')
                  . input('0', 'text', 'vin6', '6', '2')
                  . input('0', 'text', 'vin7', '7', '2')
                  . input('0', 'text', 'vin8', '8', '2')
                  . input('0', 'text', 'vin9', '9', '2')
                  . input('0', 'text', 'vin10', '10', '2')
                  . input('0', 'text', 'vin11', '11', '2')
                  . input('0', 'text', 'vin12', '12', '2')
                  . input('0', 'text', 'vin13', '13', '2')
                  . input('0', 'text', 'vin14', '14', '2')
                  . input('0', 'text', 'vin15', '15', '2')
                  . input('0', 'text', 'vin16', '16', '2')
                  . input('0', 'text', 'vin17', '17', '2')
               );

            $indhold .= 'VIN (stelnummer) :'
               . formbox('0', '', '', $_SERVER['PHP_SELF'], 'post', '', ''
                  . input('0', 'text', 'vin1', $vinarray[0], '2')
                  . input('0', 'text', 'vin2', $vinarray[1], '2')
                  . input('0', 'text', 'vin3', $vinarray[2], '2')
                  . input('0', 'text', 'vin4', $vinarray[3], '2')
                  . input('0', 'text', 'vin5', $vinarray[4], '2')
                  . input('0', 'text', 'vin6', $vinarray[5], '2')
                  . input('0', 'text', 'vin7', $vinarray[6], '2')
                  . input('0', 'text', 'vin8', $vinarray[7], '2')
                  . input('0', 'text', 'vin9', $vinarray[8], '2')
                  . input('0', 'text', 'vin10', $vinarray[9], '2')
                  . input('0', 'text', 'vin11', $vinarray[10], '2')
                  . input('0', 'text', 'vin12', $vinarray[11], '2')
                  . input('0', 'text', 'vin13', $vinarray[12], '2')
                  . input('0', 'text', 'vin14', $vinarray[13], '2')
                  . input('0', 'text', 'vin15', $vinarray[14], '2')
                  . input('0', 'text', 'vin16', $vinarray[15], '2')
                  . input('0', 'text', 'vin17', $vinarray[16], '2')
               );

            $indhold .= 'Bogstaver er blevet omregnet til tal (tegn 9 som er checkdigit skal ikke regnes med) :'
               . formbox('0', '', '', $_SERVER['PHP_SELF'], 'post', '', ''
                  . input('0', 'text', 'vin1', checkdigitlavom($vinarray[0]), '2')
                  . input('0', 'text', 'vin2', checkdigitlavom($vinarray[1]), '2')
                  . input('0', 'text', 'vin3', checkdigitlavom($vinarray[2]), '2')
                  . input('0', 'text', 'vin4', checkdigitlavom($vinarray[3]), '2')
                  . input('0', 'text', 'vin5', checkdigitlavom($vinarray[4]), '2')
                  . input('0', 'text', 'vin6', checkdigitlavom($vinarray[5]), '2')
                  . input('0', 'text', 'vin7', checkdigitlavom($vinarray[6]), '2')
                  . input('0', 'text', 'vin8', checkdigitlavom($vinarray[7]), '2')
                  . input('0', 'text', 'vin9', '', '2')
                  . input('0', 'text', 'vin10', checkdigitlavom($vinarray[9]), '2')
                  . input('0', 'text', 'vin11', checkdigitlavom($vinarray[10]), '2')
                  . input('0', 'text', 'vin12', checkdigitlavom($vinarray[11]), '2')
                  . input('0', 'text', 'vin13', checkdigitlavom($vinarray[12]), '2')
                  . input('0', 'text', 'vin14', checkdigitlavom($vinarray[13]), '2')
                  . input('0', 'text', 'vin15', checkdigitlavom($vinarray[14]), '2')
                  . input('0', 'text', 'vin16', checkdigitlavom($vinarray[15]), '2')
                  . input('0', 'text', 'vin17', checkdigitlavom($vinarray[16]), '2')
               );

            $indhold .= 'Vægt som tallene ovenfor skal ganges med :'
               . formbox('0', '', '', $_SERVER['PHP_SELF'], 'post', '', ''
                  . input('0', 'text', 'vin1', '8', '2')
                  . input('0', 'text', 'vin2', '7', '2')
                  . input('0', 'text', 'vin3', '6', '2')
                  . input('0', 'text', 'vin4', '5', '2')
                  . input('0', 'text', 'vin5', '4', '2')
                  . input('0', 'text', 'vin6', '3', '2')
                  . input('0', 'text', 'vin7', '2', '2')
                  . input('0', 'text', 'vin8', '10', '2')
                  . input('0', 'text', 'vin9', '', '2')
                  . input('0', 'text', 'vin10', '9', '2')
                  . input('0', 'text', 'vin11', '8', '2')
                  . input('0', 'text', 'vin12', '7', '2')
                  . input('0', 'text', 'vin13', '6', '2')
                  . input('0', 'text', 'vin14', '5', '2')
                  . input('0', 'text', 'vin15', '4', '2')
                  . input('0', 'text', 'vin16', '3', '2')
                  . input('0', 'text', 'vin17', '2', '2')
               );

            $indhold .= 'Tal * vægt :'
               . formbox('0', '', '', $_SERVER['PHP_SELF'], 'post', '', ''
                  . input('0', 'text', 'vin1', checkdigitlavom($vinarray[0]) * 8, '2')
                  . input('0', 'text', 'vin2', checkdigitlavom($vinarray[1]) * 7, '2')
                  . input('0', 'text', 'vin3', checkdigitlavom($vinarray[2]) * 6, '2')
                  . input('0', 'text', 'vin4', checkdigitlavom($vinarray[3]) * 5, '2')
                  . input('0', 'text', 'vin5', checkdigitlavom($vinarray[4]) * 4, '2')
                  . input('0', 'text', 'vin6', checkdigitlavom($vinarray[5]) * 3, '2')
                  . input('0', 'text', 'vin7', checkdigitlavom($vinarray[6]) * 2, '2')
                  . input('0', 'text', 'vin8', checkdigitlavom($vinarray[7]) * 10, '2')
                  . input('0', 'text', 'vin9', checkdigitlavom($vinarray[8]) * 0, '2')
                  . input('0', 'text', 'vin10', checkdigitlavom($vinarray[9]) * 9, '2')
                  . input('0', 'text', 'vin11', checkdigitlavom($vinarray[10]) * 8, '2')
                  . input('0', 'text', 'vin12', checkdigitlavom($vinarray[11]) * 7, '2')
                  . input('0', 'text', 'vin13', checkdigitlavom($vinarray[12]) * 6, '2')
                  . input('0', 'text', 'vin14', checkdigitlavom($vinarray[13]) * 5, '2')
                  . input('0', 'text', 'vin15', checkdigitlavom($vinarray[14]) * 4, '2')
                  . input('0', 'text', 'vin16', checkdigitlavom($vinarray[15]) * 3, '2')
                  . input('0', 'text', 'vin17', checkdigitlavom($vinarray[16]) * 2, '2')
                  .' = ' . $samlet
               );

            $indhold .= '</div>';
            $indhold .= '<br>';

            $indhold .= $samlet . ' modulus 11 = ' . $modulus . ' (det vil sige 11 går et vist antal hele gange op i ' . $samlet . ' også er der ' . $modulus . ' tilbage. Hvis resultatet er 10 ændres det til X<br>';
            $indhold .= '<br>';
            $indhold .= 'For at validere testen skal check digit (tegn nummer 9 i VIN) være : ' .  $udregnetcheckdigit . '<br>';
            $indhold .= 'Check digit er : ' .  $vinarray[8] . '<br>';
            $indhold .= '<br>';

            if(mb_strtolower($vinarray[8]) == mb_strtolower($udregnetcheckdigit)){

               $indhold .= '<span style="color: darkgreen;">';
               $indhold .= 'Det indtastede VIN klarede testen. Derfor er der en god sandsynlighed for at det indtastede VIN er gyldigt.';
               $indhold .= '</span>';

            }else{

               $indhold .= '<span style="color: darkred;">';
               $indhold .= 'Det indtastede VIN klarede IKKE testen. Derfor kan det indtastede VIN dog godt være gyldigt.' . '<br>';
               $indhold .= '</span>';

            }

            $indhold .= '</div>';

         }else{

            $indhold .= 'Der er ikke indtastede noget checkdigit (Tegn 9 mangler).';
            $indhold .= '<br>';

         }
         }

      }

   }

   return $indhold;

}



function checkdigitlavom($data){

   $indhold = '';

   switch(mb_strtolower($data)){

      case '0' : $indhold = '0'; break;
      case '1' : $indhold = '1'; break;
      case '2' : $indhold = '2'; break;
      case '3' : $indhold = '3'; break;
      case '4' : $indhold = '4'; break;
      case '5' : $indhold = '5'; break;
      case '6' : $indhold = '6'; break;
      case '7' : $indhold = '7'; break;
      case '8' : $indhold = '8'; break;
      case '9' : $indhold = '9'; break;

      case 'a' : $indhold = '1'; break;
      case 'b' : $indhold = '2'; break;
      case 'c' : $indhold = '3'; break;
      case 'd' : $indhold = '4'; break;
      case 'e' : $indhold = '5'; break;
      case 'f' : $indhold = '6'; break;
      case 'g' : $indhold = '7'; break;
      case 'h' : $indhold = '8'; break;

      case 'j' : $indhold = '1'; break;
      case 'k' : $indhold = '2'; break;
      case 'l' : $indhold = '3'; break;
      case 'm' : $indhold = '4'; break;
      case 'n' : $indhold = '5'; break;

      case 'p' : $indhold = '7'; break;

      case 'r' : $indhold = '9'; break;
      case 's' : $indhold = '2'; break;
      case 't' : $indhold = '3'; break;
      case 'u' : $indhold = '4'; break;
      case 'v' : $indhold = '5'; break;
      case 'w' : $indhold = '6'; break;
      case 'x' : $indhold = '7'; break;
      case 'y' : $indhold = '8'; break;
      case 'z' : $indhold = '9'; break;
      default : $indhold = '?'; break;

   }

   return $indhold;

}



function vincheckargang($data){

   $indhold = '';

   switch(mb_strtolower($data)){

      case 'a' : $indhold = array('1980', '2010'); break;
      case 'b' : $indhold = array('1981', '2011'); break;
      case 'c' : $indhold = array('1982', '2012'); break;
      case 'd' : $indhold = array('1983', '2013'); break;
      case 'e' : $indhold = array('1984', '2014'); break;
      case 'f' : $indhold = array('1985', '2015'); break;
      case 'g' : $indhold = array('1986', '2016'); break;
      case 'h' : $indhold = array('1987', '2017'); break;

      case 'j' : $indhold = array('1988', '2018'); break;
      case 'k' : $indhold = array('1989', '2019'); break;
      case 'l' : $indhold = array('1990', '2020'); break;
      case 'm' : $indhold = array('1991', '2021'); break;
      case 'n' : $indhold = array('1992', '2022'); break;

      case 'p' : $indhold = array('1993', '2023'); break;

      case 'r' : $indhold = array('1994', '2024'); break;
      case 's' : $indhold = array('1995', '2025'); break;
      case 't' : $indhold = array('1996', '2026'); break;

      case 'v' : $indhold = array('1997', '2027'); break;
      case 'w' : $indhold = array('1998', '2028'); break;
      case 'x' : $indhold = array('1999', '2029'); break;
      case 'y' : $indhold = array('2000', '2030'); break;

      case '1' : $indhold = array('2001', '2031'); break;
      case '2' : $indhold = array('2002', '2032'); break;
      case '3' : $indhold = array('2003', '2033'); break;
      case '4' : $indhold = array('2004', '2034'); break;
      case '5' : $indhold = array('2005', '2035'); break;
      case '6' : $indhold = array('2006', '2036'); break;
      case '7' : $indhold = array('2007', '2037'); break;
      case '8' : $indhold = array('2008', '2038'); break;
      case '9' : $indhold = array('2009', '2039'); break;

      default : $indhold = '?'; break;

   }

   if(is_array($indhold)){

      if($indhold[1] > date("Y")){

         $indhold = $indhold[0];

      }else{

         $indhold = $indhold[0] . ' eller ' . $indhold[1];

      }

   }

   return $indhold;

}



function vincheckcheckdigit($tegn9, $udregnettegn){

   $indhold = '';

   if(isset($tegn9)){

      if(mb_strtolower($tegn9) == mb_strtolower($udregnettegn)){

         $indhold .= 'valider';

      }else{

         $indhold .= 'valider ikke';

      }

   }else{

      $indhold .= 'tegn mangler';

   }

   return $indhold;
   //return var_dump($tegn9);

}



function behandlvin($data){

   $indhold = '';

   //if($data != ''){

      //if(count($data) <= 17){

         // Hvis der er 2 eller flere lande med samme navn så giver preg_match() fejl.
         // muligvis problem med æøå
         $lande_regex = ''
         // afrika
         . '(?P<sydafrika>a[a-h])'
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
         . '|(?P<romenien>u[u-z])' #æ
         . '|(?P<slovakiet>u[5-7])'
         . '|(?P<ooooostrig>v[a-e])'#ø
         . '|(?P<frankrig>v[f-r])'
         . '|(?P<spanien>v[s-w])'
         . '|(?P<jogoslovakiet>v[x-z1-2])'
         . '|(?P<kroatien>v[3-5])'
         . '|(?P<estland>v[6-90])'
         . '|(?P<tyskland2>w[a-z1-90])'
         . '|(?P<bulgarien>x[a-e])'
         . '|(?P<grekenland>x[f-k])'#æ
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

            if($match){

               foreach($match as $key => $value){

                  if(!is_numeric($key) && $value !== ''){

                     $indhold .= my_mb_ucfirst(
                                    str_replace('_', ' ', 
                                    str_replace('eeeee', 'æ',
                                    str_replace('ooooo', 'ø',
                                       $key
                                    )
                                    )
                                    )
                                 );
                     break;

                  }else{

                  }

               }

            }else{

               $indhold .= '?';

            }

         }else{

            $indhold .= '?';
            trigger_error('preg_match returnerede false');

         }

      //}else{

        // trigger_error('Stelnummer (' . $data . ') er vist ikke et VIN i ' . basename($_SERVER['PHP_SELF']));

      //}

   //}

   return $indhold;

}



function vinkontinent($data){

   $indhold = '';

   $lande_regex = ''
   . '(?P<afrika>[a-h])'
   . '|(?P<asien>[j-r])'
   . '|(?P<europa>[s-z])'
   . '|(?P<nordamerika>[1-5])'
   . '|(?P<oceanien>[6-7])'
   . '|(?P<sydamerika>[8-9])'
   ;

   if(preg_match("%$lande_regex%xi", $data, $match) !== false){

      if($match){

         foreach($match as $key=>$value){

            if(!is_numeric($key) && $value !== ''){

               $indhold .= my_mb_ucfirst($key);
               break;

            }

         }

      }else{

         $indhold .= '?';

      }

   }else{

      trigger_error('preg_match returnerede false');

   }

   return $indhold;

}



function vintegn($data){

   $indhold = '';

   // i, o og q (I, O og Q)
   // 10 : Tegnene i, o, q, u, z og 0 (I, O, Q, U, Z og nul) bruges ikke i model årgangs tegnet.
   // [ABCDEFGH JKLMN P RSTUVWXYZ]
   //          I     O Q           = bruges ikke
   $regex = '/^'
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]' // tegn 1
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]'
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]'
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]'
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]'
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]'
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]'
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]'
      . '[0|1|2|3|4|5|6|7|8|9|x]' // tegn 9
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|v|w|x|y|1|2|3|4|5|6|7|8|9]' // tegn 10
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]'
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]'
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]'
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]'
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]'
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]'
      . '[a|b|c|d|e|f|g|h|j|k|l|m|n|p|r|s|t|u|v|w|x|y|z|0|1|2|3|4|5|6|7|8|9]' // tegn 17
      . '/i';

   if(preg_match($regex, $data)){

      $indhold .= '<span style="color: darkgreen;">';
      $indhold .= 'ok';
      $indhold .= '</span>';

   }else{

      $indhold .= '<span style="color: darkred; border-bottom: 3px dotted #f00;">';
      $indhold .= 'Ugyldige tegn brugt på deres bestemte placering';
      $indhold .= '</span>';

   }

   return $indhold;

}



function checkforkendetegn($data){

   $indhold = '';

   if(isset($data[0]) && isset($data[1]) && isset($data[2])){

      if(mb_strtoupper($data[0] . $data[1] . $data[2]) == 'PGO'){

         $indhold .= ''
            . '<span style="color: darkred;">'
            . 'Efter som det indtastede starter med PGO er det formodentligt et stelnummer fra en ældre PGO scooter fra før de brugte VIN. Du kan derfor ikke bruge dette stelnummeret her. De oplysninger du få vil ikke være rigtige.'
            . '</span>'
            ;

      }elseif(mb_strtoupper($data[0]) == '*'){

         $indhold .= ''
            . '<span style="color: darkred;">'
            . 'Efter som det indtastede starter med * er det ikke et gyldigt VIN. *-tegn før og efter VIN er ikke en del er stelnummeret og skal derfor ikke med i indtastningen.'
            . '</span>'
            ;

      }elseif(mb_strtoupper($data[0] . $data[1] . $data[2]) == 'E4*'){

         $indhold .= ''
            . '<span style="color: darkred;">'
            . 'Efter som det indtastede starter med E4* er det formodentligt et typegodkendelsesnummer der er indtastet og det kan derfor ikke bruger her. Indtast i stedet et VIN på 17 tegn.'
            . '</span>'
            ;

      }else{

         $indhold .= ''
            . '<span style="color: darkgreen;">'
            . 'Ingen'
            . '</span>'
            ;

      }

   }

   return $indhold;

}



function vinlengde($data){

   $indhold = '';

   if(count($data) == 17){

      $indhold .= '<span style="color: darkgreen;">';
      $indhold .= 'ok';
      $indhold .= '</span>';

   }else{

      $indhold .= '<span style="color: darkred; border-bottom: 3px dotted #f00;">';
      $indhold .= 'Forkert antal tegn (' . count($data) . ' tegn brugt, skal være 17)';

      if(count($data) == 5 || count($data) == 6){

         $indhold .= ' (Er det et registreringsnummer fra en nummerplade du har indtastet ? Hvis det er så kan du ikke indtaste det her, det er kun til VIN/stelnummer på 17 tegn)';

      }

      $indhold .= '</span>';

   }

   return $indhold;

}



function vincheckproducent($data){

   // hovedsted at gemme alle VIN 123 til producentdata.

   $indhold = '';

   switch(mb_strtoupper($data)){
// Zhejiang eller Zhenjiang

      // producent først også eventuelt modeller i parenteser for at vise hvad modeller det er brugt på

      case 'CT8' : $indhold = '(sanili)'; break;
      case 'JH2' : $indhold = 'Honda'; break;
      case 'L08' : $indhold = 'Zhejiang Apollo Sporting Product Co., Ltd. (Apollo/Orion)'; break;
      case 'L1E' : $indhold = 'Zhenjiang Lingyun Motorcycle Co., Ltd.'; break;
      case 'L3J' : $indhold = 'Sky team corporation limited (Skyteam) | Jiangsu Sacin Motorcycle Co., Ltd.'; break;
      case 'L4H' : $indhold = 'Ningbo Longjia Motorcycle Co., Ltd. (Longjia, VGA)'; break;
      case 'L4S' : $indhold = 'Zhejiang Xingyue Vehicle Co., Ltd.'; break;
      case 'L4Y' : $indhold = 'Qingqi Group Ningbo Rhon Motorcycle Co., Ltd.'; break;
      case 'L5C' : $indhold = 'Zhejiang Kangdi Vehicles Co. Ltd.'; break;
      case 'L5N' : $indhold = 'Zhejiang Tao Tao Industry Co., Ltd.'; break;
      case 'L5X' : $indhold = 'Cixi Konced Motorcycle Co., Ltd.'; break;
      case 'L5Y' : $indhold = 'Taizhou Zhongneng MC Co. (avanti nostalgi, AGM)'; break;
      case 'L6A' : $indhold = '(TP GS-303)'; break;
      case 'L6M' : $indhold = 'Tmec Power Technology Co., Ltd.'; break;
      case 'L82' : $indhold = '(Avanti, Baotian, Texas, Skyteam Bat Fox)'; break;
      case 'L8X' : $indhold = 'Zhejiang (Summit) Huawin Motorcycle Co., Ltd.'; break;
      case 'L8Y' : $indhold = 'Zhejiang Jmstar Shenke Motorcycle Co., Ltd. | Zhejiang Jonway Motorcycle Mfg. Co., Ltd.'; break;
      case 'L98' : $indhold = '(X-motos)'; break;
      case 'L9N' : $indhold = 'Taotao Group Co., Ltd.'; break;
      case 'LAA' : $indhold = 'Jialing'; break;
      case 'LAE' : $indhold = 'Qingqi Group Motorcycle Co., Ltd. (Peugeot V-clic)'; break;
      case 'LAN' : $indhold = 'Changzhou Yamasaki Motorcycle Co., Ltd. (Yamasaki)'; break;
      case 'LAY' : $indhold = 'Yadea (YD1000D YD1500D Texas)'; break;
      case 'LB2' : $indhold = 'Geely'; break;
      case 'LB5' : $indhold = 'Foshan City Fosti Motorcycle Manufacturing Co., Ltd.'; break;
      case 'LBB' : $indhold = 'Zhejiang Qianjing (Qianjiang ?) Motorcycle Co., Ltd. (Keeway, Leone Swan, Generic)'; break;
      case 'LBD' : $indhold = '(Benda Scoot)'; break;
      case 'LBM' : $indhold = 'Piaggio'; break;
      case 'LBX' : $indhold = 'Jiangsu Kinroad Xintian Motorcycle Co., Ltd. (Kinroad, Texas, Giantco Sprint 1999)'; break;
      case 'LBY' : $indhold = 'Shanghai Shenke Motorcycle Co., Ltd.'; break;
      case 'LC2' : $indhold = 'Changzhou Kwang Yang Motor Co., Ltd. (Kymco)'; break;
      case 'LC3' : $indhold = 'Wuxi Jinhong Motorcycle Co., Ltd. / jinhua shiwei electromechanical Co., Ltd. (Shiweii, Swei Swen) | Jinhua Shiwei Vehicle Company Ltd.'; break;
      case 'LCE' : $indhold = 'Chunfeng Holding Group Co., Ltd. (CFMOTO)'; break;
      case 'LD3' : $indhold = '(thumpstar road ripper)'; break;
      case 'LD5' : $indhold = 'Benzhou Vehicle Industry Group Co., Ltd. (Yiying, Stranger X-fight, Razer Sport, Zhen/AGM Bella)'; break;
      case 'LD6' : $indhold = 'Zhejiang Leike Machine Industry Co., Ltd.'; break;
      case 'LE6' : $indhold = 'Jiangsu Chituma Co Ltd'; break;
      case 'LE8' : $indhold = 'Guangzhou Panyu Haunan Motors Industry Co., Ltd. (FYM Feiying)'; break;
      case 'LF3' : $indhold = 'Chongqing Lifan Industry Co., Ltd. (Lifan)'; break;
      case 'LFE' : $indhold = 'Wuxi Futong Motorcycles Co., Ltd. | Zhejiang Kaikai Meiduo Locomotive Co., Ltd.'; break;
      case 'LFF' : $indhold = 'Zhejiang Taizhou Wangye Power Co., Ltd.'; break;
      case 'LFG' : $indhold = 'Taizhou Chuanl Motorcycle Manufacturing Co., Ltd. (TMS)'; break;
      case 'LFU' : $indhold = 'Lifeng Group Co., Ltd. (Regal Raptor, Dadyw, Jensen)'; break;
      case 'LFY' : $indhold = 'Baotian MC Industrial Co/Changshu Light MC Factory/Zhejiang Zhongneng MC Co (Busetto, Lynx) (måske : Cixi Konced Motorcycle Co., Ltd.)'; break;
      case 'LJ4' : $indhold = 'Shanghai Jmstar Motorcycle Co.'; break;
      case 'LJ5' : $indhold = 'Cixi Kingring Motorcycle Co., Ltd. (Jinlun Skyteam)'; break;
      case 'LJE' : $indhold = 'Jiangmen Dihao Motorcycle Co., Ltd. (Huoniao RMC, HN50QT-K zan zara)'; break;
      case 'LJC' : $indhold = 'Jincheng Corporation (Jincheng)'; break;
      case 'LJL' : $indhold = 'Zhejiang Lingyu Vehicle Industry Co. Ltd. (Huatian JL50QT-16 HT50QT-16)'; break;
      case 'LLJ' : $indhold = 'Xinling (Scoopie)'; break;
      case 'LL8' : $indhold = 'Jiangsu Linhai Power Machinery Group'; break;
      case 'LLM' : $indhold = 'Tisong Group Co., Ltd. (Motor mania Speedy)'; break;
      case 'LMF' : $indhold = 'Zhongyu (listo)'; break;
      case 'LNG' : $indhold = 'Jiangmen Giantco Motorcycle Co., Ltd (Giantco)'; break;
      case 'LPR' : $indhold = 'Yamaha Motor Taiwan Co., Ltd. (Yamaha)'; break;
      case 'LRZ' : $indhold = '(Amp, erider, x-treme)'; break;
      case 'LT8' : $indhold = '(Sanili)'; break;
      case 'LTD' : $indhold = '(Zhenhua)'; break;
      case 'LUJ' : $indhold = '(Joma GT4 Nitro : NEW ERA 50EC-8, east dragon)'; break;
      case 'LV7' : $indhold = 'Qingqi (Hooper One)'; break;
      case 'LX6' : $indhold = 'Jiangmen City Huari Group Co., Ltd. (Baotian, Texas)'; break;
      case 'LXA' : $indhold = 'Jiangmen Qipai Motorcycle Co., Ltd.'; break;
      case 'LXD' : $indhold = 'Shanghai Huari Enterprise Development Co., Ltd. (Dongfang)'; break;
      case 'LXM' : $indhold = 'Xiamen Xiashing Motorcycle Co., Ltd. (Sym Cello)'; break;
      case 'LXX' : $indhold = 'Zhejiang Nicom Electric Vehicle Co., Ltd. (Nicom)'; break;
      case 'LXY' : $indhold = 'Chongqing Shineray Motorcycle Manufacturing Co., Ltd. (Linxx Shineray)'; break;
      case 'LYD' : $indhold = 'Taizhou City Kaitong MC Manufacture Co (Yiben, danscooter)'; break;
      case 'LZL' : $indhold = '(Hyosung)'; break;
      case 'LZP' : $indhold = 'Zhongshan Guochi MC/Zhongxing Group Co. Ltd. (Baotian, Baotian BT49PY-2B)'; break;
      case 'LZR' : $indhold = 'Zhejiang Jiajia Juneng Motorcycle Technology Co., Ltd.'; break;
      case 'LZS' : $indhold = 'Zongshen Industrial Group'; break;
      case 'MD4' : $indhold = 'Majestic Auto Limited (Hero gizmo)'; break;
      case 'MD7' : $indhold = 'LML Limited (LML)'; break;
      case 'RF1' : $indhold = 'Shang Wei (Swap)'; break;
      case 'RF8' : $indhold = 'Electric Vehicle Technologies (EVT)'; break;
      case 'RFB' : $indhold = 'Kwang Yang Motorcycle Co., Ltd. (Kymco)'; break;
      case 'RFC' : $indhold = 'Taiwan Golden Bee (TGB)'; break;
      case 'RFG' : $indhold = 'SanYang Motor (Sym)'; break;
      case 'RFL' : $indhold = 'Her Chee Industrial Co., Ltd. (adly)'; break;
      case 'RFT' : $indhold = '(CPI)'; break;
      case 'RFV' : $indhold = 'Motive Power Industry Co., Ltd. (PGO)'; break;
      case 'RGU' : $indhold = '(AGM Vintage)'; break;
      case 'RHC' : $indhold = '(A2B)'; break;
      case 'RK1' : $indhold = 'E-Ton Power Tech Co., Ltd. (E-ton)'; break;
      case 'RKZ' : $indhold = 'Kin Sui Cheng Industrial Co/Taiwan Helio Tech (EGO)'; break;
      case 'SVE' : $indhold = '(Govecs)'; break;
      case 'SZC' : $indhold = 'Vectrix Sp. z.o.o.'; break;
      case 'TSY' : $indhold = '(Keeway)'; break;
      case 'UH7' : $indhold = '(VA 503 B)'; break;
      case 'UH9' : $indhold = 'Trilet og Lauge Jensen'; break;
      case 'VA4' : $indhold = '(generic)'; break;
      case 'VG5' : $indhold = '(Yamaha)'; break;
      case 'VGA' : $indhold = 'Peugeot Motorcycles'; break;
      case 'VMT' : $indhold = '(Secma fun tech)'; break;
      case 'VS3' : $indhold = '(SEV eTRICKS)'; break;
      case 'VTH' : $indhold = 'Nacional Motor, S.A. (Derbi, Gilera RCR)'; break;
      case 'VTL' : $indhold = 'Yamaha'; break;
      case 'VTP' : $indhold = 'Zhejiang Lanbei Vehicle Co., Ltd. (Rieju, Benmal LB-852)'; break;
      case 'WSF' : $indhold = 'Sachs-Fahrzeug Und Motorentechnik Gmbh (Sachs)'; break;
      case 'WTP' : $indhold = '(Tante Paula)'; break;
      case 'YU6' : $indhold = '(Norsjö)'; break;
      case 'ZAP' : $indhold = '(Piaggio, Gilera, Vespa)'; break;
      case 'ZEN' : $indhold = '[aner det ikke, gør du ?]'; break;
      // ZEN50RLMMF9900008
      case 'ZBN' : $indhold = '(benelli)'; break;
      case 'ZCG' : $indhold = 'Cagiva - MV Agusta / Husqvarna (cagiva)'; break;
      case 'ZD3' : $indhold = '(beta)'; break;
      case 'ZD4' : $indhold = 'Piaggio & C. SpA Company (Aprilia)'; break;
      case 'ZDM' : $indhold = 'Ducati motor'; break;
      case 'ZDP' : $indhold = '(derbi)'; break;
      case 'ZJM' : $indhold = '(Xiaofeilu HRTK122-1)'; break;
      case 'ZKH' : $indhold = 'Cagiva - MV Agusta / Husqvarna'; break;
      case 'ZZ1' : $indhold = 'Tomos'; break;
      case 'VRE' : $indhold = '(e-solex)'; break;

      // ukendte som brugere har søgt efter
      case 'VTM' : $indhold = '[aner det ikke, gør du ?]'; break;
      case 'Z04' : $indhold = '[aner det ikke, gør du ?]'; break;
      // Z04PBA000X5006570
      // ZO4PBA0002S011767
      case 'VTT' : $indhold = '(suzuki)'; break;
      case 'U5Y' : $indhold = '[aner det ikke, gør du ?]'; break;
      // U5YHM511ADL001332
      case '7AP' : $indhold = '[aner det ikke, gør du ?]'; break;
      case 'AFV' : $indhold = '[aner det ikke, gør du ?]'; break;
      case 'ASI' : $indhold = '[aner det ikke, gør du ?]'; break;
      case 'DGM' : $indhold = '[aner det ikke, gør du ?]'; break;
      case 'JYA' : $indhold = '[aner det ikke, gør du ?]'; break;
      // JYA3MLT09MA007183
      // JYA3KJ00000319313
      // JYACB10C000000431
      case 'KL1' : $indhold = '[aner det ikke, gør du ?]'; break;
      // JSAEMA81S00304784 SUZUKI WAGON R+


      // fra "WMI CHINA.xls" filen
      case 'L0A' : $indhold = 'Zhejiang Sanye Fuxin Motorcycle Co., Ltd.'; break;
      case 'L11' : $indhold = 'Shenzhen Suzika Motorcycle Industrial Co'; break;
      case 'L1D' : $indhold = 'Jiangsu Xiongfeng Vehcile Co., Ltd.'; break;
      case 'L1E' : $indhold = 'Zhejiang Lingyun Motorcycle Co., Ltd.'; break;
      case 'L1L' : $indhold = 'Foshan City Nanhia District Dali Luhao'; break;
      case 'L1P' : $indhold = 'Chongqing Dajiang Motorcycle Co. Ltd.'; break;
      case 'L1Z' : $indhold = 'Shantou Dongwei Motorcycle Co., Ltd.'; break;
      case 'L2B' : $indhold = 'Jiangsu Baodiao Locomotive Co., Ltd.'; break;
      case 'L2Y' : $indhold = 'Yantai ETDZ Huyue Motorcycle Co., Ltd.'; break;
      case 'L36' : $indhold = 'Hangzhou Motorcycle Factory'; break;
      case 'L3J' : $indhold = 'Jiangsu Sacin Motor Co., Ltd.'; break;
      case 'L3Y' : $indhold = 'Jiangmen Liantong Hualong Motorcycle Co'; break;
      case 'L3Y' : $indhold = 'Ningbo Motorcycle Factory'; break;
      case 'L3Z' : $indhold = 'Zhejiang Huangyan Sanye Group Company Lt'; break;
      case 'L4B' : $indhold = 'Xingyue Group Co. Ltd.'; break;
      //case 'L4H' : $indhold = 'Ningbo Longjia Motorcycle Co., Ltd.'; break;
      case 'L4S' : $indhold = 'Zhejiang Xingyue Vehicle Co., Ltd.'; break;
      case 'L4T' : $indhold = 'PMI Northern Company Ltd'; break;
      case 'L4U' : $indhold = 'Guangdong Jinhao Motorcycle Co. Ltd.'; break;
      case 'L4Y' : $indhold = 'Qingqi Group Ningbo Rhon Motorycle Co Lt'; break;
      case 'L5D' : $indhold = 'Guangdong Dafu Motorcycle Co., Ltd.'; break;
      case 'L5M' : $indhold = 'Cixi Konced Motorcycle Co. Ltd.'; break;
      case 'L5X' : $indhold = 'Cixi Kangxin Motorcycle Co., Ltd'; break;
      case 'L5X' : $indhold = 'Cixi Konced Motorcycle Co. Ltd.'; break;
      case 'L5Y' : $indhold = 'Taizhou Zhongneng Motorcycle Co., Ltd.'; break;
      case 'L5Y' : $indhold = 'Taizhou Zhongneng Motorcycle Co., Ltd.'; break;
      case 'L6X' : $indhold = 'Chongqing Dongben Industry Co., Ltd.'; break;
      case 'L6X' : $indhold = 'Chongqing Dongben Industry Co., Ltd.'; break;
      case 'L7J' : $indhold = 'Jiangsu Zhongxing Motorcycle Co., Ltd.'; break;
      case 'L82' : $indhold = 'Jiangmen Sino-Hong Kong Baotian Motorcyc'; break;
      case 'L8D' : $indhold = 'Tianjin Bada Industry General Corpporati'; break;
      case 'L8X' : $indhold = 'Zhejiang Summit Huawin Motorcycle Co., Ltd.'; break;
      case 'L8Y' : $indhold = 'Shanghai Shenke Motorcycle Co., Ltd.'; break;
      case 'L8Y' : $indhold = 'Zhejiang Jmstar Shenke Motorcycle Co., Ltd.'; break;
      case 'LA4' : $indhold = 'Shanghai Zhongmo Industrial Co'; break;
      case 'LAA' : $indhold = 'China Jialing Industrial Co., Ltd.'; break;
      case 'LAD' : $indhold = 'Jiangsu Zhongqi Dongzheng Yinxiang Motor'; break;
      case 'LAE' : $indhold = 'Qingqi Group Motorcycle Co., Ltd.'; break;
      case 'LAE' : $indhold = 'Qingqi Group Motorcycle Co., Ltd.'; break;
      case 'LAE' : $indhold = 'China Qingqi Group Inc'; break;
      case 'LAG' : $indhold = 'Shanghai Xingfu Motorcycle Work'; break;
      case 'LAH' : $indhold = 'Chongqing Shuangqing Mechanical &'; break;
      case 'LAK' : $indhold = 'Changzhou Meitian Lanxiang Motorcycle Co'; break;
      case 'LAL' : $indhold = 'Sundiro Honda Motorcycle Co., Ltd.'; break;
      case 'LAN' : $indhold = 'Changzhou Yamasaki Motorcycle Co., Ltd.'; break;
      case 'LAP' : $indhold = 'Jianshe Industries Co., Ltd.'; break;
      case 'LAP' : $indhold = 'Chongqing Jianshe Motorcycle Co., Ltd..'; break;
      case 'LAR' : $indhold = 'Tsing Hua Industrial Co., Ltd.'; break;
      case 'LAT' : $indhold = 'Luoyang Northern Ek-Chor Motorcycle CoL'; break;
      case 'LAV' : $indhold = 'Hongying Motorcycle Factory'; break;
      case 'LAW' : $indhold = 'Qianjiang Group Corp'; break;
      case 'LAX' : $indhold = 'Taizhou Linhai Benteng Power Machinery C'; break;
      case 'LAY' : $indhold = 'Nanfang Space Navigation Science &'; break;
      case 'LAY' : $indhold = 'Nanfant Motor Co., Ltd.'; break;
      case 'LAZ' : $indhold = 'Chongqing Guangyi Motorcycle Co., Ltd.'; break;
      case 'LB2' : $indhold = 'Geely Group Zhejiang Motorcycle Co., Ltd.'; break;
      case 'LB4' : $indhold = 'Chongqing Yinxiang Motorcycle Group'; break;
      case 'LB5' : $indhold = 'Foshan City Fosti Motorcycle Mfg Co. Ltd'; break;
      case 'LB6' : $indhold = 'Henan Xinge Motorcycle Co. Ltd.'; break;
      case 'LB7' : $indhold = 'Tibet New Summit Motorcycle Co., Ltd.'; break;
      //case 'LBB' : $indhold = 'Zhejiang Qianjiang Motorcycle Co., Ltd.'; break;
      case 'LBD' : $indhold = 'Zhejiang Zhongnan Group'; break;
      case 'LBD' : $indhold = 'Zhejiang Changling Benjian Vehicle Co Lt'; break;
      case 'LBF' : $indhold = 'Luoyang Northern Enterprises Group Co Lt'; break;
      case 'LBJ' : $indhold = 'Jiangsu Creative Motorcycle Co., Ltd.'; break;
      case 'LBM' : $indhold = 'Zongshen Piaggio Foshan Motorcycle Co Lt'; break;
      case 'LBP' : $indhold = 'China Chongqing Jainshe'; break;
      case 'LBR' : $indhold = 'Zengcheng Benma Exterprises Limited'; break;
      case 'LBT' : $indhold = 'Zhuhai Benteng Motorcycle Co., Ltd.'; break;
      case 'LBX' : $indhold = 'Jiangsu Kinroad Xintian Motorcycle Manuf'; break;
      case 'LC2' : $indhold = 'Changzhou Kwangyang Motor Co., Ltd.'; break;
      case 'LC3' : $indhold = 'Wuxi Jinhong Motorcycle Co. Ltd.'; break;
      case 'LC4' : $indhold = 'Qianjiang Jiatong Motorcycle Mfg Co. Ltd'; break;
      case 'LC4' : $indhold = 'Chongqing Liyang Jiatong Motorcycle Mfg'; break;
      case 'LC5' : $indhold = 'Guangdong Meixian Huada Enterprise Group'; break;
      case 'LC6' : $indhold = 'Jiangmen Dachangjiang Group Co., Ltd.'; break;
      case 'LCE' : $indhold = 'Chunfeng Holding Group Co., Ltd.'; break;
      case 'LCE' : $indhold = 'Chunfeng Hangzhou Motorcycles'; break;
      case 'LCG' : $indhold = 'Chongqing Shuangqing Mechanical &'; break;
      case 'LCL' : $indhold = 'Taizhou Chunlan Motorcycle Factory'; break;
      case 'LCM' : $indhold = 'Changchun Chanling Group Co., Ltd.'; break;
      case 'LCS' : $indhold = 'Jiangsu Sunhou S&T Motorcycle Co., Ltd.'; break;
      case 'LD0' : $indhold = 'State-Run Changjiang Power Machinery Fac'; break;
      case 'LD3' : $indhold = 'GuangDong Tayo Motorcycle Technology Co'; break;
      case 'LD5' : $indhold = 'Benzhou Vehicle Industry Group Ltd'; break;
      case 'LD6' : $indhold = 'Zhejiang Leike Machinery Industry Co'; break;
      case 'LD8' : $indhold = 'Ningbo Xinxin Longteng Motorcycle Co., Ltd.'; break;
      case 'LDA' : $indhold = 'Zengcheng Haorizi Mtorocycle Co., Ltd.'; break;
      case 'LDH' : $indhold = 'Shandong Huari Motorcycle Co., Ltd.'; break;
      case 'LDL' : $indhold = 'Guangdong Taiyang Motorcycle Industry Co'; break;
      case 'LDL' : $indhold = 'Guangdong Guangben Electronics & Machine'; break;
      case 'LDX' : $indhold = 'Guangzhou Zingfu Motorcycle Co., Ltd.'; break;
      case 'LE6' : $indhold = 'Jiangsu Chituma Co., Ltd.'; break;
      case 'LE6' : $indhold = 'Wuxi Celimo Vehicle Manufacturing Co., Ltd.'; break;
      case 'LE8' : $indhold = 'Guangzhou Panyu HuaNan Motors Group Co'; break;
      case 'LEA' : $indhold = 'Kangchao Group Guangzhou Motorcycle'; break;
      case 'LEH' : $indhold = 'Zhejiang Riya Motorcycle Co., Ltd.'; break;
      case 'LEL' : $indhold = 'Yeu-Tyan Machinery Mfg Co., Ltd.'; break;
      case 'LEX' : $indhold = 'Exigis'; break;
      case 'LEY' : $indhold = 'Zengcheng Dongyang Motorcycle'; break;
      case 'LF3' : $indhold = 'Lifan Industry (Group) Co., Ltd.'; break;
      case 'LF4' : $indhold = 'Guangdong Fuxing Motorcycle Industry Co'; break;
      case 'LF6' : $indhold = 'Guangzhou Fonkwang Motorcycle Co., Ltd.'; break;
      case 'LF6' : $indhold = 'Guangzhou Fonkwang Industrial Co., Ltd.'; break;
      case 'LFE' : $indhold = 'Zhejiang Kaikai Meiduo Locomotive Co., Ltd.'; break;
      case 'LFE' : $indhold = 'Wuxi Futong Motorcycle Co., Ltd.'; break;
      case 'LFF' : $indhold = 'Zhejiang Taizhou Wangye Power Co., Ltd.'; break;
      case 'LFG' : $indhold = 'Taizhou Chuanl Motorcycle Manufacturing'; break;
      case 'LFH' : $indhold = 'Phoenix Co., Ltd.'; break;
      case 'LFK' : $indhold = 'Jiangmen City Better Motorcycle Co., Ltd.'; break;
      case 'LFL' : $indhold = 'Hefei Motorcycle Factory'; break;
      case 'LFU' : $indhold = 'Lifeng Group Co., Ltd.'; break;
      //case 'LFY' : $indhold = 'Changshu Light Motorcycle Factory'; break;
      case 'LG5' : $indhold = 'Jiangxi Ganjiang Machine Works'; break;
      case 'LG8' : $indhold = 'Guangxi Yulin Fengtian Motorcycle Ltd Co'; break;
      case 'LGN' : $indhold = 'Nanning Machinery Plant Guangxi China'; break;
      case 'LGT' : $indhold = 'Guangdong Yulong Motorcycle Co., Ltd.'; break;
      case 'LGT' : $indhold = 'DongGuan City DaYu Motorcycle Co., Ltd.'; break;
      case 'LGV' : $indhold = 'Heshan Guoji Nanlian Motorcycle Industry'; break;
      case 'LH4' : $indhold = 'Yanshi Postal Motorcycle Factory'; break;
      case 'LHJ' : $indhold = 'Chongqing Astronautic Bashan'; break;
      case 'LHJ' : $indhold = 'Chongqing Astronautical Bashan'; break;
      case 'LHR' : $indhold = 'Shandong Huari Motorcycle Co., Ltd.'; break;
      case 'LJ4' : $indhold = 'Shanghai Jmstar Motorcycle Co., Ltd.'; break;
      case 'LJ5' : $indhold = 'CIXI Kingring Motorcycle Co., Ltd.'; break;
      case 'LJ7' : $indhold = 'Zhongxing Group Co. Ltd.'; break;
      //case 'LJC' : $indhold = 'Jincheng Corporation'; break;
      case 'LJE' : $indhold = 'Jiangmen Dihao Motorcycle Co., Ltd.'; break;
      case 'LJL' : $indhold = 'Zhejiang Huatian Industrial Co., Ltd.'; break;
      case 'LJL' : $indhold = 'Zhejiang Lingyu Vehicle Industry Co., Ltd.'; break;
      case 'LK1' : $indhold = 'Guangzhou Sanya Motorcycle Co., Ltd.'; break;
      case 'LKB' : $indhold = 'Foton Lovol Intl Heavy Industry Co., Ltd.'; break;
      case 'LKB' : $indhold = 'Shangdong Foton Heavy Industries Co. Ltd'; break;
      case 'LKB' : $indhold = 'Foton Lovol Intl Heavy Industry Co., Ltd.'; break;
      case 'LKK' : $indhold = 'Jiangsu Jinjie Motor Manufacturer Co'; break;
      case 'LKN' : $indhold = 'Hunan Kinglong Kwang Yang Motor Co., Ltd.'; break;
      case 'LKN' : $indhold = 'Hunan Kwang Yang Motor Co., Ltd.'; break;
      case 'LKX' : $indhold = 'Chongqing Kington Liyang Motorcycle Manu'; break;
      case 'LKX' : $indhold = 'Chongqing Kington Industry Group Co., Ltd.'; break;
      case 'LKZ' : $indhold = 'Tiama Automobile Group Co. Ltd.'; break;
      case 'LL8' : $indhold = 'Jiangsu Linhai Power Machinery Grp Corp'; break;
      case 'LL8' : $indhold = 'China Foma (Group) Co., Ltd.'; break;
      case 'LL8' : $indhold = 'China Foma (Group) Co., Ltd.'; break;
      case 'LLA' : $indhold = 'Shanghai Honling Motorcycle Manufacture'; break;
      case 'LLC' : $indhold = 'Chongqing Loncin Industry Group Co., Ltd.'; break;
      case 'LLC' : $indhold = 'Chongqing Loncin Motor Co., Ltd.'; break;
      case 'LLJ' : $indhold = 'Jiangsu Xinling Motorcycle Co., Ltd.'; break;
      case 'LLM' : $indhold = 'Zhejiang Lingtian Motorcycle Co., Ltd.'; break;
      case 'LLM' : $indhold = 'Sichuan Lingtian Motorcycle Co., Ltd.'; break;
      case 'LLM' : $indhold = 'Zhejiang Hongzhou Motorcycle Co., Ltd.'; break;
      case 'LLP' : $indhold = 'Zhejiang Jiajue Motorcycle Mfg Co., Ltd.'; break;
      case 'LLP' : $indhold = 'Zhejiang Jiajue Motorcycle Mfg Co., Ltd.'; break;
      case 'LLP' : $indhold = 'Zhejiang Jiajue Motorcycle Mfg Co., Ltd.'; break;
      case 'LM1' : $indhold = 'Tai Ling Engineering & Development Co'; break;
      case 'LMH' : $indhold = 'Jiangsu Guowei Motor Co., Ltd.'; break;
      case 'LMM' : $indhold = 'Huizhou MCT Motorcycle Co., Ltd.'; break;
      case 'LNG' : $indhold = 'Jiangmen Giantco Motorcycle Co., Ltd.'; break;
      case 'LNM' : $indhold = 'Nanjing Motorcycle Factory'; break;
      case 'LNS' : $indhold = 'Nanning XCS Motor Co., Ltd.'; break;
      case 'LP5' : $indhold = 'Guangzhou Tianma Group Tianma'; break;
      case 'LP6' : $indhold = 'Guangzhou Panyu Haojian Motorcycle'; break;
      case 'LP6' : $indhold = 'Guangzhou Panyu Haojian Motorcycle'; break;
      case 'LP7' : $indhold = 'Congqing Shuagshi Motor Mfg. Co. Ltd.'; break;
      case 'LPP' : $indhold = 'Jiangxi Hongdu Aviation Industry Group C'; break;
      case 'LPR' : $indhold = 'Yamaha Motor Taiwan Co., Ltd.'; break;
      case 'LRF' : $indhold = 'Guangzhou Zengcheng Yinghao Motorcycle'; break;
      case 'LRT' : $indhold = 'Hebei Sinski Chuantian Vehicles'; break;
      case 'LRY' : $indhold = 'Chongqing Guangyu Motorcycle Manufacture'; break;
      case 'LS2' : $indhold = 'Jiangsu DHCLBC Vehicle Manufacture Co Lt'; break;
      case 'LS2' : $indhold = 'Jiangsu DHCLBC Vehicle Manufacture Co Lt'; break;
      case 'LSN' : $indhold = 'Shandong Zhongqi Motorcycle (Group) Manu'; break;
      case 'LSR' : $indhold = 'Chongqing Koayeng Motorcycle Industry'; break;
      case 'LSR' : $indhold = 'Chongqing Hi-bird Motorcycle Ind Co., Ltd.'; break;
      case 'LSR' : $indhold = 'Chongqing Hi-Bird Motorcycle Industry Co'; break;
      case 'LSS' : $indhold = 'Shandong Landun Motorcycle Co. Ltd.'; break;
      case 'LT4' : $indhold = 'Taizhou Jiaojiang Zhiwei Motorcycle Mfg'; break;
      case 'LT8' : $indhold = 'Sanli Engine Co., Ltd.'; break;
      case 'LTB' : $indhold = 'Qingxin Liantong Industry Limited'; break;
      case 'LTD' : $indhold = 'Taixing Sandi Motorcycle Co., Ltd.'; break;
      case 'LTL' : $indhold = 'Shenyang Tianli Motorcycle Mfg Co., Ltd.'; break;
      case 'LTM' : $indhold = 'Sundiro Honda Motorcycle Co., Ltd.'; break;
      case 'LTX' : $indhold = 'Tianjin Zhongyang Xunda Motor Co., Ltd.'; break;
      case 'LTZ' : $indhold = 'Foshan Nanhai Zhongmo Science & Tech'; break;
      case 'LUA' : $indhold = 'Chongqing Hensim Group Co., Ltd.'; break;
      case 'LUH' : $indhold = 'Wuxi Hongyan Motorcycle Limited Company'; break;
      case 'LUJ' : $indhold = 'Jiangsu East Dragon Motor Group Co., Ltd.'; break;
      case 'LUJ' : $indhold = 'Changzhou East Dragon Motor Co., Ltd.'; break;
      case 'LUP' : $indhold = 'Guangzhou Sonlink Industrial Co. Ltd.'; break;
      case 'LVJ' : $indhold = 'Guangzhou Jiafeng Motorcycle Manufacture'; break;
      case 'LVJ' : $indhold = 'Guangzhou Kinion Motorcycle Co., Ltd.'; break;
      case 'LVL' : $indhold = 'Shandong Shouguang Wanlong Industrial Co'; break;
      case 'LVW' : $indhold = 'Foshan Nanhai Yiho Hardware Electric'; break;
      case 'LVW' : $indhold = 'First United Industrial Foshan Ltd.'; break;
      case 'LW0' : $indhold = 'Shanghai Jianshe Motorcycle Co., Ltd.'; break;
      case 'LW8' : $indhold = 'Chongqing Wanhu Mechanical & Electrical'; break;
      case 'LWA' : $indhold = 'Guangzhou Tianheng Motorcycle  Industry'; break;
      case 'LWB' : $indhold = 'Wuyang-Honda Motors (Guangzhou) Co., Ltd.'; break;
      case 'LWB' : $indhold = 'Wuyang-Honda Motors (Guangzhou) Co., Ltd.'; break;
      case 'LWG' : $indhold = 'Chongqing Huansong  Industries Group Co'; break;
      case 'LWG' : $indhold = 'Chongqing Huansong  Industries Group Co'; break;
      case 'LWJ' : $indhold = 'Guangzhou Linye Machinery & Electronics'; break;
      case 'LWM' : $indhold = 'Chongqing Wonjan Motorcycle Mfg Co., Ltd.'; break;
      case 'LWP' : $indhold = 'Guangdong Yinhe Motorcycle Group Co. Ltd'; break;
      case 'LWP' : $indhold = 'Guangdong Yinhe Motorcycle Industrial Co'; break;
      case 'LWY' : $indhold = 'Guangzhou Wuyang Motors Co., Ltd.'; break;
      case 'LX5' : $indhold = 'Zhejiang Haoqing Motorcycle Co., Ltd.'; break;
      //case 'LX6' : $indhold = 'Jiangmen City Huari Group Co., Ltd.'; break;
      case 'LX8' : $indhold = 'Chongqing Xgjao Motorcycle Co., Ltd.'; break;
      case 'LXA' : $indhold = 'Jiangmen Qipaii Motorcycle Co., Ltd.'; break;
      case 'LXD' : $indhold = 'Ningbo Dongfang Lingyun Vehicle Made Co'; break;
      case 'LXE' : $indhold = 'Jiangsu Sinski Vehicle Science & Technology Co., Ltd.'; break;
      case 'LXJ' : $indhold = 'Zhuzhou Motorcycle Factory'; break;
      case 'LXK' : $indhold = 'Shanghai Meitian Motorcycle Co., Ltd.'; break;
      case 'LXM' : $indhold = 'Xiamen Xiashing Motorcycle Co., Ltd.'; break;
      case 'LXS' : $indhold = 'Guangzhou Dayang Motorcycle Co., Ltd.'; break;
      //case 'LXY' : $indhold = 'Chongqing Shineray Motorcycle Manufactur'; break;
      //case 'LXY' : $indhold = 'Chongqing Shineray Motorcycle Co., Ltd.'; break;
      case 'LY0' : $indhold = 'Changzhou Flight Motorcycle Co., Ltd.'; break;
      case 'LY4' : $indhold = 'Chongqing Yingang Science & Tech Group'; break;
      case 'LYA' : $indhold = 'Qingqi Group Hubei Motorcycle Co., Ltd.'; break;
      case 'LYD' : $indhold = 'Taizhou City Kaitong Motorcycle Mfg Co L'; break;
      case 'LYE' : $indhold = 'Chongqing Kaler Motorcycle Mfg Co., Ltd.'; break;
      case 'LYF' : $indhold = 'Guangzhou Dongyi Motorcycle Co., Ltd.'; break;
      case 'LYF' : $indhold = 'Dongguan Dongyi Motorcycle Co., Ltd.'; break;
      case 'LYH' : $indhold = 'Senzhen City  Linzhishanyang Motor Co Lt'; break;
      case 'LYL' : $indhold = 'Wuxi Jinbawang Motorcycle Manufacturing'; break;
      case 'LYM' : $indhold = 'Zhuzhou Jianshe Yamaha Motorcycle Co., Ltd.'; break;
      case 'LYN' : $indhold = 'Zhenjiang Yuejin Machinery Co., Ltd.'; break;
      case 'LYR' : $indhold = 'Chongqing Shuangqing Mechanical &'; break;
      case 'LYS' : $indhold = 'Shannan Jinying Motorcycle Co., Ltd.'; break;
      case 'LZ4' : $indhold = 'Jiangsu Linzhi Shangyang Group Co., Ltd.'; break;
      case 'LZ8' : $indhold = 'Zhejiang Xingfu Motorcycle Machine CoLt'; break;
      case 'LZB' : $indhold = 'Zhejiang Sanyou Group Motorcycle Company'; break;
      case 'LZB' : $indhold = 'Zhejiang Sanyou Group Motorcycle Company'; break;
      case 'LZE' : $indhold = 'Zhuhai Zhujiang Vehicle Co., Ltd.'; break;
      case 'LZK' : $indhold = 'Chongqing Shuangzing Mech & Elec Co., Ltd.'; break;
      case 'LZL' : $indhold = 'Zengcheng Haili Motorcycle Ltd'; break;
      //case 'LZP' : $indhold = 'Zhongshan Guochi Motorcycle Industrial C'; break;
      case 'LZS' : $indhold = 'Zongshen Industrial Group'; break;
      case 'LZX' : $indhold = 'Chongqing Shuangqing Mech & Elect Co., Ltd.'; break;

      default : $indhold = 'Ukendt ('.kontaktmig().' gerne hvis du ved noget om det)'; break;

   }

   return $indhold;

}



function checktegn($data){

   $indhold = '';

   if(preg_match("/^[a-zA-Z0-9]*$/u", $data) === 1){

      $indhold .= '<span style="color: darkgreen;">';
      $indhold .= 'ok';
      $indhold .= '</span>';

   }else{

      $indhold .= '<span style="color: darkred; border-bottom: 3px dotted #f00;">';
      $indhold .= 'Ugyldige tegn brugt';
      $indhold .= '</span>';

   }

   if(strstr($data, '*') !== false){

      $indhold .= '<span style="color: darkred; border-bottom: 3px dotted #f00;">';
      $indhold .= ' (*-tegn før og efter VIN er ikke en del af VIN så det skal ikke med)';
      $indhold .= '</span>';

   }

   if(strstr($data, '/') !== false){

      $indhold .= '<span style="color: darkred; border-bottom: 3px dotted #f00;">';
      $indhold .= ' (/-tegn er ikke en del af VIN)';
      $indhold .= '</span>';

   }

   return $indhold;

}



function gemvinifil($handling, $destination = '', $datatilfil){

   if($handling == "gem"){

      $fil = $GLOBALS['setup']['tempfuld'] . '/' . $GLOBALS['setup']['vinsogninger'];

      if($destination){

         if(checkomfindesellersopret("fil", $fil)){

            $bytesskrevet = file_put_contents($fil, $datatilfil, FILE_APPEND | LOCK_EX);

            if($bytesskrevet === false){

               trigger_error("der kunne ikke skrives til filen: \"$fil\".", E_USER_ERROR);

            }

         }
  
      }

   }

}



function vincheckextrainfo($data){

/* Almen kina VIN tydning : */
/*
For eksempel :
L3Z TCBP 426 A 000186
L82 TCAP 977 1 144787
L92 TCAP 977 1 144787
LBX TCB2 B07 X 040003
LD5 TCBP A01 0 5F0001
LD5 GY0A CB7 F 010004
LD5 GYOA CB7 F 01OOO4
LE6 TCBD WJ6 9 190032
LE6 TCBD WJ6 9 190008
LND TGBD L1A C 300751
LND TGBD LIA C 300751
LTD TCJP 238 0 050005
LX6 TB37 016 1 003059
LX6 TCAP 906 1 603328
LX6 TCAP 916 1 518241 BAOTIAN VK7526
LX6 TCAP C37 4 003821
LXG TCAP C37 K 003186
LY6 TCAP 996 1 518259
LZP TCAP 546 1 000817
LZP TCAP 876 1 007786
LZP TCAP 886 1 708529
LZP TCBP 906 1 004923
LZP TCHP 984 3 029618
LZS TCBP 395 6 031007
LZS XCBL C95 5 161186
LZP TCAP 516 1 000516
LZP TCAP 526 1 000542
LZP TCAP 896 1 007711
LZS TCBP 385 6 031001
LC3 TCBS A07 0 000184 (elektrisk SHIWEII SW002)

            array('4',     'body type',      '
   A = Karting
   P = Common model
   X = Cub
-  T = Scooter
   K = 3 hjulet til personer
   H = 3 hjulet til vare
   S = AVT
   Z = Specielt formål køretøj
   Y = Offroad
   D = Lowspeed køretøj
')
           ,array('5',     'engine type',          '
-   C = 1 cylinder lodret inclined luftkølet (hmm også set ved elektrisk SHIWEII SW002)
    G = 1 cylinder horisontal luftkølet
    D = 1 cylinder lodret inclined væskekølet
    H = 1 cylinder horisontal væskekølet
    L = Flere cylindre appose eller inline luftkølet
    M = Flere cylindre appose eller inline væskekølet
    R = Flere cylindre V type luftkølet
    S = Flere cylindre V type væskekølet
    V = Flere cylindre opposed luftkølet
    W = Flere cylindre opposed væskekølet
')
           ,array('6',     'engine displacement',      '
     A = <50 cc
-    B = ?
     C = 50 cc
     D = 70 cc
     E = 80 cc
     F = 90 cc
     G = 100 cc
     H = 110 cc
     J = 125 cc
     K = 150 cc
     L = 175 cc
     M = 200 cc
     N = 250 cc
     P = 300 cc
     R = 350 cc
     S = 400 cc
     T = 450 cc
     U = 500 cc
     V = 600 cc
     W = 650 cc
     X = 700 cc
     Y = 750 cc
     Z = >750 cc
')
           ,array('7', 'camshaft position',        '
      D = Overhead camshaft
      X = Underhead camshaft
      P = ?
      B = ?
      L = ?

      ?
      P = CVT
      L = Kæde
      Z = Aksel

      S = (set ved elektrisk SHIWEII SW002)
')
           ,array('8', 'starter og transmission',        '
A = Elstart, kæde transmission
B = Elstart, bælte transmission
Y = Elstart, aksel transmission
D = Elstart, anden transmission

E = Fodpedalstart, kæde transmission
F = Fodpedalstart, bælte transmission
G = Fodpedalstart, aksel transmission
H = Fodpedalstart, anden transmission

J = Elstart/fodpedalstart, kæde transmission
K = Elstart/fodpedalstart, bælte transmission
L = Elstart/fodpedalstart, aksel transmission
M = Elstart/fodpedalstart, anden transmission

N = Håndstart, kæde transmission
P = Håndstart, bælte transmission
R = Håndstart, aksel transmission
S = Håndstart, anden transmission

T = Elstart/håndstart, kæde transmission
U = Elstart/håndstart, bælte transmission
V = Elstart/håndstart, aksel transmission
W = Elstart/håndstart, anden transmission
*/

   $indhold = '';

   switch(mb_strtoupper($data)){

/*
      case '' :
         $noget = array(
            array(
            array('4',     '?',      '

')
           ,array('5',     '?',          '

')
           ,array('6',     '?',      '

')
           ,array('7',     '?',         '

')
           ,array('8',     '?',    '

')
           ,array('9',     '?',    '

')
           ,array('11',    '?',       '

')
            )
         );
         break;

*/

      case 'L08' :
         $noget = array(
            array(
            array('4',     '?',      '
L
')
           ,array('5',     '?',          '
G
')
           ,array('6',     '?',      '
B
')
           ,array('7',     '?',         '
L
')
           ,array('8',     '?',    '
0
')
           ,array('9',     '?',    '
0
')
           ,array('11',    '?',       '
1
')
            )
         );
         break;

      case 'L1E' :
         $noget = array(
            array(
            array('4',     'motorcycle type',      '
T = Velux scooter (LY150T-3)
M = Motorcycle
R = Retro scooter (LY150T-5)
F = Fury scooter (LY150T-6)
A = Tracer scooter (LY150T-7A)
E = Aero
')
           ,array('5',     'cubic capacity of the engine',          '
    B = 50 cc
    P = 150 cc
    R = 250 cc
')
           ,array('6',     'engine name',      '
     J = Lingyun motor
')
           ,array('7', 'make',        '
      D = Diamo
')
           ,array('8', 'net brake horsepower',        '
       9 = 9 Brake horsepower
       9 = 9,38 Brake horsepower
       A = 10 Brake horsepower
       B = 11 Brake horsepower
')
           ,array('11',    'plant',       'A = Zhejiang Lingyun Motorcycle Co., Ltd.')
           ,array('12?',    'model måned',       '
           1 = Januar
           2 = Februar
           ...
           B = November
')
            )
         );
         break;

      case 'L3J' :
         $noget = array(
            array(
            array('4-10',     '?',      '
022502C = ?
042501C = ?
15250AC9900028 = ?
')
           ,array('11',    '?',       '
8 = ?
9 = ?
A = ?
')
            )
         );
         break;

      case 'L4H' :
         $noget = array(
            array(
            array('4',     'vehicle make',      '
G = Longjia
D = ? (VGA vel)
H = ?
')
           ,array('5',     'vehicle type NO.',          '
P = Bike
T = Scooter (måske 45 km/t)
X = Cub
E = ? (måske 30 km/t)
A = ? (måske 25 km/t, også set ved VGA Mover 45 km/t)
')
           ,array('6',     'Engine type NO.',      '
G = 2 takt passiv luftkølet
B = 2 takt tvunget luftkølet
J = 2 takt vandkølet
K = 4 takt passiv luftkølet
E = 4 takt tvunget luftkølet
N = 4 takt vandkølet
Y = 4 takt oliekølet
')
           ,array('7', 'rated engine capacity',        '
A = <50ml
B = 50ml
C = 60ml
D = 70ml
E = 80ml
F = 90ml
G = 100ml
H = 110ml
J = 125ml
K = 150ml
L = 175ml
M = 200ml
N = 250ml
P = 300ml
R = 350ml
S = 400ml
T = 500ml
U = 600ml
V = 650ml
W = 750ml
X = >750ml
')
           ,array('8', 'drive type NO.',        '
L = Kæde
Z = Aksel
P = Bælte
T = Andre
')
           ,array('11',    '',       '
6 = Ningbo Longjia Motorcycle Co., Ltd.
8 = ?
')
            )
         );
         break;


      case 'L4S' :
         $noget = array(
            array(
            array('4',     'body type',      '
A = Karting
P = Common model
X = Cub
T = Scooter
K = 3 hjulet til personer
H = 3 hjulet til vare
S = AVT
Z = Specielt formål køretøj
Y = Offroad
D = Lowspeed køretøj
')
           ,array('5',     'engine type',          '
C = 1 cylinder lodret inclined luftkølet
G = 1 cylinder horisontal luftkølet
D = 1 cylinder lodret inclined væskekølet
H = 1 cylinder horisontal væskekølet
L = Flere cylindre appose eller inline luftkølet
M = Flere cylindre appose eller inline væskekølet
R = Flere cylindre V type luftkølet
S = Flere cylindre V type væskekølet
V = Flere cylindre opposed luftkølet
W = Flere cylindre opposed væskekølet
')
           ,array('6',     'engine displacement',      '
A = <50 cc
C = 50 cc
D = 70 cc
E = 80 cc
F = 90 cc
G = 100 cc
H = 110 cc
J = 125 cc
K = 150 cc
L = 175 cc
M = 200 cc
N = 250 cc
P = 300 cc
R = 350 cc
S = 400 cc
T = 450 cc
U = 500 cc
V = 600 cc
W = 650 cc
X = 700 cc
Y = 750 cc
Z = >750 cc
')
           ,array('7', 'camshaft position',        '
D = Overhead camshaft
X = Underhead camshaft
')
           ,array('8', 'starter og transmission',        '
A = Elstart, kæde transmission
B = Elstart, bælte transmission
Y = Elstart, aksel transmission
D = Elstart, anden transmission

E = Fodpedalstart, kæde transmission
F = Fodpedalstart, bælte transmission
G = Fodpedalstart, aksel transmission
H = Fodpedalstart, anden transmission

J = Elstart/fodpedalstart, kæde transmission
K = Elstart/fodpedalstart, bælte transmission
L = Elstart/fodpedalstart, aksel transmission
M = Elstart/fodpedalstart, anden transmission

N = Håndstart, kæde transmission
P = Håndstart, bælte transmission
R = Håndstart, aksel transmission
S = Håndstart, anden transmission

T = Elstart/håndstart, kæde transmission
U = Elstart/håndstart, bælte transmission
V = Elstart/håndstart, aksel transmission
W = Elstart/håndstart, anden transmission
')
           ,array('11',    'plant location',       '
1 = Gushan, Yongkang, Zhejiang, Kina
2 = Gushan, Yongkang, Zhejiang, Kina
6 = Jinhua, Zhejiang, Kina
8 = Jinhua, Zhejiang, Kina
9 = Yongkang, Zhejiang, Kina
')
            )
         );
         break;

      case 'L4Y' :
         $noget = array(
            array(
            array('4',     'vehicle type',            '')
           ,array('5',     'engine type',             '')
           ,array('6',     'fuel type',               '')
           ,array('7',     'displacement',            '')
           ,array('8',     'design serial No.',       '')
           ,array('11',    'assembly nummer',         '')
            )
         );
         break;

      case 'L5X' :
         $noget = array(
            array(
            array('4',     'motorcycle type',      'P = Common two wheels motorcycle')
           ,array('5',     'body type',            'C = 4 takt luftkølet')
           ,array('6',     'engine type',          'J = engine displacement 125 cc')
           ,array('7 + 8', 'net brake horse power','7-L = Chain transmission
8-L = Sequential design
number(the eleventh design)
')
           ,array('11',    'plant location',       '6 = Assembly plant number (two wheels motorcycle plant)')
            )
         );
         break;

      case 'L5Y' :
         $noget = array(
            array(
            array('4',     '?',      '
A = ?
')
           ,array('5',     '?',          '
C = ?
')
           ,array('6',     '?',      '
B = ?
D = ?
')
           ,array('7',     '?',         '
P = ?
')
           ,array('8',     '?',    '
A = ?
2 = ?
')
           ,array('9',    '?',       '
X = ?
7 = ?
8 = ?
3 = ?
1 = ?
5 = ?
')
           ,array('11',    '?',       '
1 = ?
')
            )
         );
         break;

      case 'L6M' :
         $noget = array(
            array(
            array('4',     'motorcycle type',      'Y = Cross-country')
           ,array('5',     'engine type',          'B = Luftkølet 4 takt')
           ,array('6',     'engine capacity',      'M = 200 cc')
           ,array('7',     'transmission',         'L = Kæde')
           ,array('8',     'factory serial No',    'F = ?')
           ,array('11',    'plant location',       '1 = Jiangsu, kina')
            )
         );
         break;

      case 'L82' :
         $noget = array(
            array(
            array('4',     '?',      '
L82TCAP9771144787 (Baotian BT49QT-9 / Texas Flash E16855-01 VT6237)

T = ?
')
           ,array('5',     '?',          '
C = ?
')
           ,array('6',     '?',      '
A = ?
')
           ,array('7',     '?',         '
P = ?
')
           ,array('8',     '?',    '
9 = ?
0 = ?
')
           ,array('9',     '?',    '
1 = ?
6 = ?
9 = ?
0 = ?
')
           ,array('11',    '?',       '
1 = ?
6 = ?
')
            )
         );
         break;

      case 'L8X' :
         $noget = array(
            array(
            array('4',     'motorcycle type',      '
T = Two-wheel scooter
P = Two-wheel motorcycle
X = Two-wheel cub
H = Three-wheel special use motorcycle
Z = Three-wheel motorcycle
Y = Off road
B = Tricycle with side car
S = Four-wheel ATV
')
           ,array('5',     'body type',          '
B = HY125T-8 / HY150T-8
P = HY50QT-6
G = HY50QT-4
T = HY50QT-7
L = HY125T-12
S = HY125T-6
')
           ,array('6',     'engine type',          '
A = Single cylinder, 2-stroke, air-cooled
B = Single cylinder, 4-stroke, air-colled
C = 2-cylinder, 4-stroke, air-colled
')
           ,array('7 + 8',     'net brake horse power',         '
A1 = 3,4 HP
B2 = 7,4 HP
C3 = 9,1 HP
D4 = 30 HP
E5 = 18 HP
')
           ,array('11',    'plant location',       '
0 = Huangyan
1 = Chongqing / Chendu
2 = Guangdong
3 = Fuzhou
')
            )
         );
         break;

      case 'LAE' :
         $noget = array(
            array(
            array('4',     'type og motorcycle',      '
A = ?
M = 3 hjulet motorcykel')
           ,array('5',     'body type',           '
    B = Zap Xebra T
    A = Zap Xebra S
    G/6 = ?
')
           ,array('6',     'engine type',      '
     2 = Zap electric
     E = Electric
     Z = ?
')
           ,array('7 + 8', 'net brake horsepower',        '
46 = 4-6 HK
48 = ?')
           ,array('9', '',        '
0 = ?')
           ,array('11',    'plant location',       '
G = Shandong province
6 = ?
B = ?')
           ,array('alle', '',        '
LAEAGZ4006B831737
LAEA6Z48099201135
')
            )
         );
         break;

      case 'LAN' :
         $noget = array(
            array(
            array('4',     'motorcycle type',      '
P = 2 hjul Yamasaki
T = 2 hjul Motofino
X = 2 hjul MF/YM scooter
K = 3 hjul Yamasaki
H = 3 hjul Motofino
A = 4 hjul MF/YM duno buggy
')
           ,array('5',     'engine type',          '
A = 2 takt luftkølet
B = 2 takt væskekølet
C = 4 takt luftkølet
D = 4 takt væskekølet
')
           ,array('6',     'engine displacement',      '
B = 50 ml
F = 90 ml
G = 100 ml
H = 110 ml
J = 125 ml
K = 150 ml
L = 200 ml
M = 250 ml
')
           ,array('7', 'net braking power',        '
1 = <= 3 KW
2 = 3-5 KW
3 = 5-7 KW
4 = 7-10 KW
5 = 10 KW
')
           ,array('8',    'seat number',       '
B = 1
C = 2
')
           ,array('11',    'plant of manufacture',       '
0/O = ?
')
            )
         );
         break;

      case 'LBB' :
         $noget = array(
            array(
            array('4',     'vehicle type',         '
B = ?
P = Motorcycle
S = ATV
T = Scooter
')
           ,array('5',     'engine type',          '
A = Single cylinder, two stroke
B = Single cylinder, four stroke
9 = ?
')
           ,array('6',     'engine volumetric',      '
4 = ?
B = 50 cc
C = 60 cc
F = 90 cc
G = 100 cc
')
           ,array('7 + 8',     'vehicle design version',         '
30 = ?')
           ,array('11',    'production plant/line',       '
C = Jingpin assembly factory
B = Mekeda assembly factory
(Wenling city, china)
')
         ),array(
            array('4',     'type of motorcycle',         '
1 = 1 passenger
2 = 2 passenger
')
           ,array('5',     '',          '
T = Twist N\' Go -TNG
')
           ,array('6',     'engine type',      '
2 = 1 cylinder, A/C, 2-stroke, 49 cc
4 = 1 cylinder, A/C, 4-stroke, 125 cc
7 = 1 cylinder, A/C, 4-stroke, 150 cc
9 = 1 cylinder, W/C, 4-stroke, 250 cc
')
           ,array('7',     'net brake horsepower',         '
2 = <2 HP
5 = <5 HP
7 = <7 HP
9 = <9 HP
1 = <12 HP
0 = <15 HP
6 = <17 HP
3 = <19 HP
')
           ,array('11',    'plant of manufacture',       '
B = Zhejiang Qianjiang Motorcycle Co., Ltd.
')
         ),array(
            array('4+5+6',     '?',         '
B93 = Ideo
D01 = Trigger SM, Trigger X
B92 = Race
B30 = XOR 2

B94 = Keeway f-act, Keeway RY8, Keeway RY9, Keeway Matrix
B41 = Keeway flash
B03 = Keeway hurricane
B57 = Leone Swan (Keeway Swan)
D04 = X-Ray (? 0A = cross, 1B = motard)
')
           ,array('7+8',     '?',         '
65
3B
3D
30
30
3C
30
30
30
30
')
           ,array('9',    '?',       '
0
1
2
3
6
7
8
X
')
           ,array('11',    '?',       '
B
')
            )
         );
         break;

      case 'LBX' :
         $noget = array(
            array(
            array('4',     'vehicle shape',      '
T = scooter
P = bike
Y = offroad
')
           ,array('5',     'motor type',          '
A = ?
C = 4 takt
')
           ,array('6',     'motor volume',      '
B = 50 cc
')
           ,array('7',     'design series no.',         '
2 = ?
3 = ?
P = ?
L = ?
')
           ,array('8',     'design modifacation no',    '
0 = ?
A = ?
B = ?
')
           ,array('8+9+10',     '?',    '
035 = set ved 
A05 = set ved stor knallert KINROAD WINDBELL XT50QT-2-01
A26 = set ved kinroad prince stor knallert
A35 = set ved 45 km/t XT50Q-02
A55 = set ved 
AX1 = ?
B07 = set ved 
B08 = set ved lille knallert mk-trade
B1A = set ved lille knallert XT50Q-A-01
B29 = set ved KINROAD PRINCE XT50Q-A-00
B4A = set ved 
B5A = set ved 
B78 = set ved 
B98 = set ved 
BX8 = set ved 
BX9 = set ved 
')
           ,array('11',    'workshop',       '
X = ?
Y = ?
')
            )
         );
         break;

      case 'LC2' :
         $noget = array(
            array(
            array('4 + 5', 'vehicle model',      '
B1 = People 50 2T
B9 = People S 50 4T
U3 = Vitality 50 4T
U6 = Agility 50 4T, Agility 125
U7 = Super 8 50
U8 = Super 8 150
')
           ,array('6',     'engine displacement',          '
A = Op til 50 cc
C = 50 til 75 cc
E = 76 til 100 cc
G = 101 til 125 cc
J = 126 til 150 cc
H = 151 til 200 cc
K = 201 til 250 cc
M = 251 til 300 cc
N = 301 til 350 cc
P = 351 til 400 cc
R = 401 til 450 cc
S = 451 til 500 cc
T = 501 til 600 cc
U = 601 til 700 cc
V = 701 til 800 cc
W = 901 til 900 cc
X = større end 901 cc
')
           ,array('11',    'plant location',       '
B = Taiwan
C = Changzhou city, ROC
1 = ?
2 = ?
')
         ),array(
            array('4',     'vehicle type',      '
W = On-road
')
           ,array('5',     'engine displacement',            '
A = Op til 50 cc
C = 50 til 75 cc
E = 76 til 100 cc
G = 101 til 125 cc
J = 126 til 150 cc
K = 151 til 250 cc
M = 251 til 300 cc
P = 301 til 400 cc
R = 401 til 450 cc
S = Større end 451 cc
')
           ,array('6 + 7', 'net brake horsepower',          '
01 = ?
04 = 4,45 HK
09 = 8,59 HK
')
           ,array('8',     'california certification','
A = Californien certifikat
3 = Ikke californien certifikat
C = Ikke californien certifikat
0 = ?
')
           ,array('11',    'plant location',       '
B = Taiwan, ROC
C = Changzhou city, ROC
1 = ?
2 = ?
')
            )
         );
         $nogetandet = array(
            array(
                array('kymco agility', '', 'Tegn 8 og 9 i stelnummeret er 30 el. 60 og angiver den maksimale hastighed = 30 km/t', '', '')
               ,array('kymco super 8 4T', '', 'Tegn 7 er 1 og angiver den maksimale hastighed = 30 km/t.<br>Tegn 7 er "1" / "4" og angiver den maksimale hastighed = 30 km/t.', 'Tegn 7 er "0" / "3" og angiver den maksimale hastighed = 45 km/t.<br>Tegn 8 og 9 er "0" og angiver den maksimale hastighed = 45 km/t.', '')
            )
         );
         break;

      case 'LC3' :
         $noget = array(
            array(
            array('4',     'motorcycle type',      '
T = Scooter
L = ATV
')
           ,array('5',     'engine type',          '
D = 1 cylinder luftkølet
E = Flere cylindre luftkølet
')
           ,array('6',     'engine displacement',      '
A = 50 cc
J = 125 cc
K = 150 cc
N = 250 cc
T = 500 cc
')
           ,array('7', 'drive type',        '
P = CVT
L = Kæde
Z = Aksel
')
           ,array('8',    'motorcycle series',       '
1 = the first series
3 = the third series
4 = the fourth series
5 = the fifth series
6 = the sixth series
K = the 19th series
M = the 22th series
')
           ,array('11',    'plant location',       '')
            )
         );
         break;

      case 'LE6' :
         $noget = array(
            array(
            array('1-17',     '',      '
LE6TCBDWJ69190008 : CTM50QT-7 (JIANGSU CHITUMA PARENT COMPANY. e4*2002/24*0487*01. *LE6TCBDWJ69190008*. 82 db(A) - 4000min-1.)
')
           ,array('4',     '',      '
T = ?
')
           ,array('5',     '',          '
C = ?
')
           ,array('6',     '',      '
B = ?
')
           ,array('7', '',        '
D = ?
')
           ,array('8',    '',       '
')
           ,array('11',    '',       '
9 = ?
')
            )
         );
         break;

      case 'LF3' :
         $noget = array(
            array(
            array('4',     'motorcycle type',      '
P = Cruiser
T = Scooter
Y = Enduro
')
           ,array('5',     'engine type',          '
A = 2 takt
C = 4 takt
')
           ,array('6',     'body type',      '
B = Tour
J = Sport
K = Dirt bike
N = Street
')
           ,array('7', 'net brake horse power',        '
0G = 16,3 HK
00 = 13,6 HK
2A = 3,0 HK
2F = 8,0 HK
60 = 8,5 HK
')
           ,array('11',    'plant location',       '
C = Wuxi, Jiangsu, Kina
D = Shapingba, Chongqing, Kina
G = Shapingba, Chongqing, Kina
')
            )
         );
         break;

      case 'LFU' :
         $noget = array(
            array(
            array('4+5+6+7',     '?',      '
E3BL
')
           ,array('8+9',     '?',    '
A1 (set ved Jensen Chopper)
A2 (set ved Jensen Chopper)
A4 (set ved Jensen Chopper)
A6
C0 (set ved regal raptor DD50E)
C2 (set til Dadyw DD50QE-3)
')
           ,array('11',    '?',       '
0 = ?
A = ?
')
            )
         );
         break;

      case 'LFY' :
         $noget = array(
            array(
            array('4+5+6+7',     '?',      '
TB3 Z1 23 0 = busetto ECC-800
TBF Z1 4A 1 = busetto ECC-800 (set på 45 km/t hos harald nyborg måske står der LPY ?)
TBF Z1 5A 1000 = lynx 388-2 (Busetto ZQTD-388-2 2LB)
')
           ,array('7',     '?',    '
Z = ?
')
           ,array('8',     '?',    '
1 = ?
')
           ,array('9',     '?',    '
')
           ,array('11',    '?',       '
')
            )
         );
         break;

      case 'LJ4' :
         $noget = array(
            array(
            array('4',     '?',      '
AA25F975603526 = ?
')
           ,array('5',     '?',          '

')
           ,array('6',     '?',      '

')
           ,array('7',     '?',         '

')
           ,array('8',     '?',    '

')
           ,array('9',     '?',    '

')
           ,array('11',    '?',       '

')
            )
         );
         break;

      case 'LJC' :
         $noget = array(
            array(
            array('4',     '?',        '
P = ?
')
           ,array('5',     '?',        '
C = ?
')
           ,array('6',     '?',        '
B = ?
')
           ,array('7',     '?',        '
L = ?
')
           ,array('8',     '?',        '
B = ? (måske JC50Q-8) LJCPCBLB0Y1000510 LJCPCBLB341000761
C = ? (måske JC50Q-5) LJCPCBLC051001189
F = ?
')
           ,array('9',     '?',        '
X = ?
')
           ,array('11',    '?',        '
1 = ?
')
            )
         );
         break;

      case 'LLM' :
         $noget = array(
            array(
            array('4',     'motorcycle type',      'T = Scooter')
           ,array('5',     'engine type',          'C = Luftkølet 4 takt')
           ,array('6',     'engine capacity',      'B = 50 cc')
           ,array('7 + 8', 'design number',        '29 = ?')
           ,array('11',    'plant location',       'L = Linhai, Zhejiang, Kina')
            )
         );
         break;

      case 'LNG' :
         $noget = array(
            array(
            array('4',     'måske bodytype',      '
T = ? (set til Giantco 2 takt og 4 takt, betyder måske benzindrevet motor) betyder måske scooter
D = ? (set til Giantco E-buddy 30 km/t, betyder måske elektrisk motor)
')
           ,array('5',     'måske motortype',          '
G = ? (set til Giantco G-Buddy, Sprint, Stealth) betyder måske 4 takt motor
E = ? (set til Giantco Venus, G-10, Spartan, Lambros) betyder måske 2 takt motor
X = ? (set til Giantco E-buddy 30 km/t) betyder måske elektrisk motor
Q = ? (måske fejl kan være det skulle være G)
')
           ,array('6',     'måske motorvolume',      '
B = ? (set til Giantco G-Buddy, Sprint, Stealth, Venus, G-10, Spartan, Lambros) betyder måske 50 cc
Z = ? (set til Giantco E-buddy 30 km/t)
3 = ?
')
           ,array('7',     'noget med motor',         '
D = ? (betyder måske 4 takt motor)
L = ? (betyder måske 2 takt motor)
F = ? (set til Giantco E-buddy 30 km/t så betyder måske elektrisk motor)
0/O = ?
')
           ,array('8',     'transmission',    '
L = ? (set til både 2 takt og 4 takt) betyder måske CVT med kilerem
K = ? (set til Giantco E-buddy 30 km/t) betyder måske uden transmission
')
           ,array('9',     '?',    '
0 = ?
1 = ?
2 = ?
3 = ?
4 = ?
5 = ?
6 = ?
7 = ?
8 = ?
9 = ?
X = ?
')
           ,array('11',    'produktionssted',       '
C = ?
')
           ,array('12-14',    '?',       '
123 = ?
300 = ?
301 = ?
302 = ?
304 = ? (set ved lille knallter)
306 = ?
309 = ?
404 = ? (set ved 45 km/t)
408 = ?
')
            )
         );

         $nogetandet = array(
            array(
                array('giantco e-buddy', '', 'Tegn 12 i stelnummeret er "3" og angiver maksimal hastighed = 30 km/t.', 'Tegn 12 i stelnummeret er "4" og angiver maksimal hastighed = 45 km/t.', '')
               ,array('giantco g-buddy', '', 'Tegn 12 i stelnummeret er "3" og angiver maksimal hastighed = 30 km/t.', 'Tegn 12 i stelnummeret er "4" og angiver maksimal hastighed = 45 km/t.', '')
               ,array('giantco sprint', '', 'Tegn 12 i stelnummeret er 3 og angiver den maksimale hastighed = 30 km/t', 'Tegn 12 i stelnummeret er 4 og angiver den maksimale hastighed = 45 km/t', '')
               ,array('giantco stealth', '', 'Tegn 12 i stelnummeret er "3" og angiver den maksimale hastighed = 30 km/t.', 'Tegn 12 i stelnummeret er "4" og angiver den maksimale hastighed = 45 km/t.', '')
               ,array('giantco venus', '', 'Tegn 12 i stelnummeret er "3" og angiver den maksimale hastighed = 30 km/t.', 'Tegn 12 i stelnummeret er "4" og angiver den maksimale hastighed = 45 km/t.', '')
            )
         );
         break;

      case 'LX6' :
         $noget = array(
            array(
            array('4',     '?',      '
T
')
           ,array('5',     '?',          '
B
C
')
           ,array('6',     '?',      '
3
A
')
           ,array('7',     '?',         '
7
P
')
           ,array('8',     '?',    '
0
7
9
B
C
')
           ,array('9',     '?',    '
0
1
3
6
8
9
')
           ,array('11',    '?',       '
1
4
L
')
            )
         );
         break;

      case 'LXD' :
         $noget = array(
            array(
            array('4',     '?',      '
AAB103 = ?
AAB104 = ?
AAB107 = set ved lille crane
AAB10X = ?
')
           ,array('5',     '?',          '

')
           ,array('6',     '?',      '

')
           ,array('7',     '?',         '

')
           ,array('8',     '?',    '

')
           ,array('9',     '?',    '

')
           ,array('11',    '?',       '
0
9
')
            )
         );
         break;

      case 'LXE' :
         $noget = array(
            array(
            array('4',     'motorcycle type',      '
M = motor driven cycle
A = electric motor drien cycle

G = ?
')
           ,array('5+6',     'engine type',          '
EP = electric power
SP = silicon power
LP = lithium power

D1 = ?
')
           ,array('7+8',     'net brake horsepower',         '
30 = 3.0 kilowatts = 4.02 HP
20 = 2.0 kilowatts
15 = 1.5 kilowatts
10 = 1.0 kilowatts

40 = ?
')
           ,array('11',    'plant location',       '
W = Wuxi City, China

E = ?
')
            )
         );
         break;

      case 'LXM' :
         $noget = array(
            array(
            array('4+5',     '?',      '
AJ = Cello/Allo
AD = Jet 4
AE = Sym Orbit II S (4 takt)

AF = måske Orbit/Symply
AY = Symphony
')
           ,array('6+7',     '?',          '
05 = ?
')
           ,array('8',     '?',    '
W = ?
')
           ,array('9',     '?',    '
X = ?
3 = ?
')
           ,array('11',    '?',       '
X = ?
')
            )
         );
         break;

      case 'LXY' : 
         $noget = array(
            array(
            array('4',     'motorcycle type',      '
JCBL0270 = måske sinski shineray XY50PYIE
JCBL0570 = måske sinski shineray XY50PYIE
JCBL0870 = måske sinski shineray XY50PYIE
JCBL0760N20851 = Linxx

J = ?
S = Sport bike
')
           ,array('5',     'body type',          '
C = ?
B = Base
')
           ,array('6',     '',      '
B = ?
1 = 50 cc
2 = 110 cc
3 = 150 cc
4 = 200 cc
5 = 250 cc
6 = 500 cc     
7 = 750 cc
')
           ,array('7', '',        '
L0 = ?
01 = 1 HK
09 = 9 HK
12 = 12 HK
14 = 14 HK
22 = 22 HK
45 = 45 HK
70 = 70 HK
')
           ,array('11',    '',       '
C = Chongqing, Kina
')
            )
         );
         break;

      case 'LZP' : 
         $noget = array(
            array(
            array('4',     '',      '
T
')
           ,array('5',     '',          '
C
')
           ,array('6',     '',      '
A
B
')
           ,array('7', '',        '
P
')
           ,array('8+9', '',        '
A3
90
')
           ,array('11',    '',       '
1
')
            )
         );
         break;

      case 'MD4' :
         $noget = array(
            array(
            array('4+5+6',     '?',      '
HMG = ? (måske betyder det Gizmo)
')
           ,array('7+8',     '?',          '
50 = ?
')
           ,array('9',     '?',      '
S = ?
')
           ,array('11',     '?',         '
L = ?
')
            )
         );
         break;

      case 'RFB' :
         $noget = array(
            array(
            array('4 + 5', 'vehicle model',      '
B1 = People 50 2T
B2 = People 150
B5 = People 250
B9 = People S 50 4T
D1 = People S 125, People S 200
D2 = People S 250
R2 = Venox 250
R5 = Quannon 150
S1 = Super 9 A/C 2T, Super 9 50
S4 = Grandvista 250
S6 = Sting 50
S7 = B&W 250
SC = ? (RFBSC10AA46160192, RFBSC10AZ43000148)
T7 = Xciting 250, Xciting 250I, Xciting R 250I, Xciting 250 RI, Xciting 500, Xciting 500I, Xciting R 500I, Xciting 500I ABS, Xciting 500 RI ABS
T9 = Yager GT 200I
U1 = ? (RFBU10000B5200106)
U3 = Vitality 50 4T, Vitality 50
U6 = Agility 50 4T, Agility 125
U7 = Super 8 50
U8 = Super 8 150, Sento 50

RFB51013041000156
RFBB1004041000114
RFBS610AZ43000148
RFBSC10AZ43000148
RFBSC10AA46160192
RFBSC10AA51600623
RFBU10000B5200106
')
           ,array('6',     'engine displacement',          '
0 = ?
A = Op til 50 cc
C = 50 til 75 cc
E = 76 til 100 cc
G = 101 til 125 cc
J = 126 til 150 cc
H = 151 til 200 cc
K = 201 til 250 cc
M = 251 til 300 cc
N = 301 til 350 cc
P = 351 til 400 cc
R = 401 til 450 cc
S = 451 til 500 cc
T = 501 til 600 cc
U = 601 til 700 cc
V = 701 til 800 cc
W = 901 til 900 cc
X = større end 901 cc
')
           ,array('7 + 8', 'net brake horsepower','
04 = 4,45 HK
05 = ?
09 = 8,59 HK
')
           ,array('11',    'plant location',       '
1 = ?
B = Taiwan
C = Changzhou city, ROC
')
         ),array(
            array('4',     'vehicle type',      'W = On-road')
           ,array('5',     'engine displacement',            '
A = Op til 50 cc
C = 50 til 75 cc
E = 76 til 100 cc
G = 101 til 125 cc
J = 126 til 150 cc
K = 151 til 250 cc
M = 251 til 300 cc
P = 301 til 400 cc
R = 401 til 450 cc
S = Større end 451 cc
')
           ,array('6 + 7', 'net brake horsepower',          '
04 = 4,45 HK
09 = 8,59 HK
')
           ,array('8',     'california certification','
A = Californien certifikat
3 = Ikke californien certifikat
C = Ikke californien certifikat
')
           ,array('11',    'plant location',       '
B = Taiwan, ROC
C = Changzhou city, ROC
')
         ),array(
            array('4',     'motorcycle type',      '
A = 16" flat bed scooter
R = Step over frame
S = Flat bed scooter
')
           ,array('5',     'body type',            '
S = Scooter model
R = Motorcycle
A = 16" scooter model
')
           ,array('6',     'engine type',          '
A = 49 cc
J = 152 cc
K = 249 cc
')
           ,array('7 + 8', 'net brake horse power','
AE = 1,9 HK
AF = 1,8 HK
A2 = 1,5 HK
AS = 1,6 HK
BA = 11 HK
BK = 18 HK
CG = 28 HK
')
           ,array('11',    'plant location',       'B = Taiwan ROC')
            )
         );
         $nogetandet = array(
            array(
                array('kymco agility', '', 'Tegn 8 og 9 i stelnummeret er 30 el. 60 og angiver den maksimale hastighed = 30 km/t', '', '')
            )
         );
         break;

     case 'RFC' :
         $noget = array(
            array(
            array('4-6',     '?',      '
BH1 = 101S (city front ligner lidt pgo hot)
BH1 Sd1 (ch1-a, ch1-c, ch1-c) = 101R
BH1 BHB-C = ?
BR1 = Hawk
BK1-B = express
BK1-E = ligesom express bare uden boks
BM1 = bullet (R50X)
CH1 = city 4T (ligner 104T)
? = City RS 2T
? = Hawk X-Race

BR8
BR9 (303R 150 cm³)
BF8
BF9
BK8
BK9 (delivery 150 cm³)
BH8

GA5 GF5 GI5 GE5 BH1 BR1 BK1 (49,3 cm³)

GF9 GI9 GE9 BH5 (82,4 cm³)
')
           ,array('7+8',     '?',          '
25 = ?
BK = ? (set ved express RFCBK1BKA5Y og RFCBK1BKB9Y)
')
           ,array('9',     '?',    '
A = ?
B = ?
')
           ,array('11',    '?',       '
Y = ?
')
            )
         );
         break;

      case 'RFG' :
         $noget = array(
            array(
            array('4+5',     '?',      '
HU = Sym Mio
AV = Orbit/Symply 4 takt
AW = Fiddle
BK = Jet Sport X
FT = ?

(
LXM:
AJ = Cello/Allo
AD = Jet 4
AE = Sym Orbit II S (4 takt)
)

ukendt 1-3 :
AC = Cello/Allo
JD = Jet 4 R
JE = Orbit 2 takt
AY = Symphony
AZ = Symphony SR
FW = Tonik
BL = Jet Euro X

ukendt 1-3 over 50 cm³ :
HE = Attila RS-21 EFI
AD = Jet 4
LM = GTS/Joymax
LH = HD
LA = Joyride
')
           ,array('6+7',     '?',          '
05 = 50 cm³
11 = 125 cm³
12 = 125 cm³ (124,5 cm³)
15 = 150 cm³ (149,5 cm³)
18 = 200 cm³ (171,2 cm³)
25 = 250 cm³
')
           ,array('8',     '?',          '
A = ? (set ved Sym Tonik)
W = (set ved 2 takt med bevægelig forskærm og glat sæde, skivebremse foran, Også set ved Sym Mio HU)
T = (set ved 2 takt uden bevægelig forskærm og sæde med kant, tromlebremse foran)
U = (set ved 2 takt bevægelig forskærm og sæde med kant, tromlebremse foran)
V = ?
')
           ,array('9',     '?',      '
X = ?
1 = ?
2 = ?
3 = ?
')
           ,array('11',     '?',    '
S = ?
X = ?
')
            )
         );
         break;

      case 'RFL' :
         $noget = array(
            array(
            array('4+5',     'model/type',      '
KS T05A 5A000 = baboon
KS F05A 7A014 = baboon (måske noget med 13")
KS T05A 5A001 = gazelle
AT JT50 VA001 = jet 45 km/t S07813-01
AT-50JT ? = måske silver fox (SF) (baboon) og panther (PA)
AT JT50 XA003 849 = ?
K8 F05A 6A012 496 = ? kun den ene nok
KS F05A 6A012 496 = ? kun den ene nok


D ~ silver fox (baboon) og gazelle og jet og cat
K ~ baboon og gazelle

(
SF = silverfox (baboon)
TB = gazelle
PA = panther
ST-50 = ?
SS-50 = ?
)

4 type
5 variant
6 variant
7 motor
8 motor
9 motor



AT = ?
K8 = ? kun den ene nok
KS = ? kun den ene nok
')
           ,array('6+7',     '?',      '
JT = ?
F0 = ?
')
           ,array('8',     '?',    '
5 = ?
')
           ,array('9',     '?',    '
0 = ?
A = ?
')
           ,array('11',    '?',       '
A = ?
')
            )
         );
         break;

      case 'RFT' :
         $noget = array(
            array(
            array('4+5',     'model/type',      '
FB = Club (ligner aragon S-line på en prik)
JA = GTR
JP = Popcorn, Action
JB = (skulle måske være JP eller JR)
JR = Aragon, Hussar, Oliver, Formula
SM = Super moto
SX = Super cross
')
           ,array('6+7',     '?',      '
25 = maksimal hastighed er muligvis 25 km/t
30 = maksimal hastighed er 30 km/t
45 = maksimal hastighed er 45 km/t
50 = ?
BO = ? (måske fejl)
')
           ,array('8',     '?',    '
A = ?
A4 = ?
AW = ?
AX = ?
B = ?
')
           ,array('9',     '?',    '
4 = ?
5 = ?
W = ?
X = ?
')
           ,array('11',    '?',       '
1 = ? (skulle måske være L)
5 = ?
L = ?
')
            )
         );
         break;

      case 'RFV' :
         $noget = array(
            array(
            array('4+5+6+7',     'model',      '
B2   = (måske X-Hot)
BFP2 = Libra
CPCP = T-Rex, Dr Big, Trike
E1E1 = Comet
M2M2 = G-max (også kaldet alloro)
PAAU = ?
PAUA = Ligero, new Ligero (nok kun en af dem)
PAUB = Ligero, new Ligero (nok kun en af dem)
PEDS = ?
PE__ = Bubu (Rodoshow)
PLPS = ? (brugerindsendt, måske tastefejl)
PMMS = PMX Sport, PMX Naked
PMPS = Big-max, Hot, (måske X-Hot) (post)
PSE2 = elektrisk 2 hjulstrukket 30 km/t (ligner PGO Hot)
PSPD = (set ved Big-Max S07476-01 1999)
PSPS = Big-Max (Måske Hot, måske noget med før/optil 2001)
TR3  = Trike
XRXR = ?
ESPS = ? (måske fejl indtastning)
FSPS = ? (måske fejl indtastning)
')
           ,array('8+9',     'måske motortype ?',    '
11
21
22
25
30
45
50
C1 (set ved CPCP - brugerindsendt)
C2
D1 (set ved PSPS - brugerindsendt)
E1 (set ved E1E1 - brugerindsendt)
P0
P1
P2
P3
P4
PB
PD
DY
X0 (set ved XRXR - brugerindsendt)

Hvis tegn 8 er "2" eller "3" så kan det betyde at det er en 30 km/t.
Hvis tegn 8 er "4" eller "5" så kan det betyde at det er en 45 km/t.
Hvis tegn 9 er "1" eller "5" så kan det betyde at det er en 45 km/t.
')
           ,array('11',    '?',       '
0 = ? (set ved RFVPSPSD110111180)
1 = ?
4 = ?
6 = ?
')
            )
           ,array(
            array('4+5+6+7+8',     'model',      '
TR345 = Trike 45 km/t (ifølge typegodkendelse)
TR330 = Trike ... det vel så en 30 km/t vil jeg gætte på
')
           ,array('9',     '?',      '
X = ?
D7 = ?
D8 = ?
')
           ,array('11',     '?',      '
1 = ?
')
            )
         );
         break;

      case 'RFY' :
         $noget = array(
            array(
            array('4',     '?',      '
RFY50EBXA3B000018
RFY50EBXAYB000077
')
           ,array('5',     '?',          '

')
           ,array('6',     '?',      '

')
           ,array('7',     '?',         '

')
           ,array('8',     '?',    '

')
           ,array('9',     '?',    '

')
           ,array('11',    '?',       '

')
            )
         );
         break;

      case 'RKZ' :
         $noget = array(
            array(
            array('4',     '?',      '
M
')
           ,array('5',     '?',          '
E
')
           ,array('6',     '?',      '
1
3
')
           ,array('7',     '?',         '
0
')
           ,array('8',     '?',    '
2
')
           ,array('9',     '?',    '
2
')
           ,array('11',    '?',       '
D
M
')
            )
         );
         break;

      case 'TSY' :
         $noget = array(
            array(
            array('4',     '?',         '
T = ? (betyder sikkert scooter)
')
           ,array('5',     '?',         '
A = ? (betyder sikkert 2 takt luftkølet)
')
           ,array('6',     '?',         '
B = ? (betyder sikkert 50ml motor volume)
')
           ,array('7',     '?',         '
M = ?
2 = ?
')
           ,array('8+9',     '?',         '
P1 = (måske keeway focus)
')
           ,array('9',    '?',       '
6 = ?
7 = ?
')
           ,array('11',    '?',       '
C = ?
')
            )
         );
         break;

      case 'UH9' :
         $noget = array(
            array(
            array('*',     '?',      '
UH9AC504T07RC1026
UH9AC504T__RC1___ = Trilet AC50 4T
UH9TRLC50__RC1___ = Trilet LC 50
UH9T2000M__RC1___ = Trilet 2000M
')
           ,array('4-9',     'model',      '
AC504T = Trilet AC50 4T
TRLC50 = Trilet LC 50
T2000M = Trilet 2000M
')
           ,array('XX-XX',     '?',          '
RC1 = ?
')
           ,array('6',     '?',      '

')
           ,array('7',     '?',         '

')
           ,array('8',     '?',    '

')
           ,array('9',     '?',    '

')
           ,array('11',    '?',       '

')
            )
         );
         break;

      case 'VGA' :
         $noget = array(
            array(
            array('4-*',     '?',      '
42000000006291
51BOAM00340055
B1AABA00700371
G1AA1000203185
S1800800043720
S1800B00043720
S18DAM00340775
S18DAMD0340775
S18DAMO0340775
S1A00B00003981
S1ACAA00100383
S1B00800043720
S1B00B00043669
S1B00B00045007
S1B00B00092934
S1BADA00348670
S1BCAM00100071
S1BCAM00100395
S1BCAMQ0100395
S1BDAM00340071
S1BDAM00340615
S1BDAM00340775
S1BDAM00360189
S1BDAMO0340775
S1BDAMOO340615
S1BDMA00340775
S1BOOBOOO45007
S1BOOBOOO45OO7
S1BOOBOOO92934
S1CADA00316415
S1CADA00345606
S1CDAM0003400A
S1CDAM0034000A
S1CDAM00340011
S1CDAM00340026
S1CDAM00340222
S1CDAM00340326
S1CDAM00340386
S1CDAMOO340326
S1CDAN00340326
SICDAM00340326
V1AAAB0J000042

[4] 8 = ?
[4] A = ?
[4] B = ?
[4] F = ?
[4] L = ?
[4] S = ?
[4] T = ?
[4] V = ?

87COOL00012503
B1COOA00012503
S16OOA00012503
S16OOB00012503
S16OOC00012503
S16OOL00012503
S1A10000006217
S1B00000033051
S1B00A00033051
S1COO800012503
S1COOA00012503
S7COOA00012503
S7COOL00012503
S7COOT00012503
STCOO300012503
STCOOA00012503
STCOOR00012503
STCOOT00012503
T1A8AA00100246
V1AAAB0J000231

AGACAA0C___ (v-clic lille)
B1ADAA00500
F1AAAB0J___ (lille speedfight)
F1AAAB0J000 (speedfight 3)
L1AAEB00___ (ludix pro)
L1ABBL00120 (ludix pro)
L1ABBP00___ (ludix pro)
L1ABCA00140 (ludix pro lille)
S1A10000___ (squab 45 km/t S07827)
S1ACAA00100
S1ADAM00340 (TKR)
S1B00A00029065 (speedfight S08190-01)
S1B00B00029 (speedfight)
S1B00B00031 (speedfight 1998 S08191-01)
S1BCAM00100
S1BDAM00___ (speedfight)
S1BDAM00340
S1BDAM00360 (lille speedfight)
S1BDAM00361 (speedfight)
S1CAAA00100
S1CDAM00360 (vivacity)
T1ABAA00101
V1AAAB0J000 (vivacity)
V1ACAA0J030 (lille vivacity 3)

42000000 = Zenith 45km Alle 
425000 = Buxy 45km  
425000 = Speedake 45km  
A1AAAA00 = Jet C-TECH 45km Uden SBC 
A1AAJA00 = Jet Force 45km F - Med SBC 
A1AAJA01 = Jet Force 45km F - Med SBC 
A1AAJB00 = Jet Force 45km  
A1AAJB00 = Jet Force 45km  
E1A000 = Electric 45km  
G1AA000 = Elyseo 45km 50 cm³ 
G1AA1000 = Elystar TSDI 45km  
G1AAJ000 = Elystar TSDI 45km  
G1AAP000 = Elystar Advance 45km  
G2AA000 = Elyseo Mc 100 cm³ 
L1ABAM000 = LUDIX ONE 10" 25KM  
L1ABBA000 = LUDIX Elegance 14" 25KM  
L1ABBM000 = LUDIX Classic 14" 25KM  
L1ABBM000 = LUDIX Elegance 14" 45KM  
L1ABCA000 = LUDIX SNAKE 10" 25KM  
M00 = TKR knallert 30km AC FURIOUS VGAS!
S1A00A000 = Trekker 45km Offroad 
S1A00B000 = Trekker 45km Road 
S1A10000 = Squab 45km AC 
S1ACAA00 = TKR knallert 30km WRC 
S1ADAM00 = TKR knallert 30km  
S1ADAM00 = TKR knallert 30km AC 206 WRC 
S1B00A00 = Speedfight I 45km AC 
S1B00A00 = Speedfight I 45km ACE 
S1B00A00 = Speedfight II 45km  
S1B00A01 = Speedfight II 45km  
S1B00B00 = Speedfight I 45km LC 
S1B00B000 = Speedfight I 45km LCE 
S1B00B000 = Speedfight I 45km LCE PROST 
S1B00B000 = Speedfight I 45km X-TEAM 
S1B00B000 = Speedfight II 45km AC 
S1B00B0009 = Speedfight II 45km LX OG LXP 
S1B00B001 = Speedfight II 45km AC 
S1BABA00 = Speedfight II 45km AC 
S1BACA00 = Speedfight II 45km  
S1BADA00 = Speedfight II Knallert 45km WRC 
S1BBAA00 = Speedfight II 45km AC 
S1BBAA00 = Speedfight II 45km WRC 
S1BBBA = Speedfight II 45km LCE 
S1BBBA00 = Speedfight II Knallert 45km X-RACE 
S1BCAM00 = Speedfight II Knallert 30km AC 
S1BCAM01 = Speedfight II Knallert 30km AC 307 WRC 
S1BCAM02 = Speedfight II Knallert 30km Rally Victory 
S1BDAM = Speedfight II Knallert 30km AC 
S1BDAM00 = Speedfight II 30km AC 
S1BDAM00 = Speedfight II Knallert 30km  
S1BDAM01 = Speedfight II Knallert 30km LC 
S1C00A000 = Viva City 45km  
S1C00A000 = Viva City 45km Sport Line 
S1CAAA00 = Viva City 45km AC 
S1CADA00 = Viva City 45km AC 
S1CAEA00 = Viva Compact 30km AC 
S1CCAA00 = Viva City 30km AC 
S1CCAA00 = Viva City  30km AC 
S1CDAM00 = Viva City knallert 30km AC 
S1CDAM00 = Viva City knallert 30km Silversport 
S2AB00 = Speedfight II MC LX OG LXP 
T1ABAA00 = Fox knallert 25km  

Jet C-T R-Cup 45km  
Jet C-T Rally 45km Uden SBC 
Looxor 45km  
Looxor Post 45km  Alle Post

---

ukendt første 3 tegn :

G1A = Elyséo
G1A = Elystar
T1 = Fox
A1 = Jet-Force
K1 = Kisbee
B1 = Looxor
L1 = Ludix Classic
L1 = Ludix Elegance
L1 = Ludix One
L1 = Ludix Pro
L1 = Ludix Snake
E1A = Scoot\'Elec
F1 = Speedfight 3
S1BBAA (vandkølet) = Speedfight
S1BACA (luftkølet) = Speedfight
S1B = Speedfight
S1B00A = Speedfight
S1B00B = Speedfight
S1A = Squab / Trekker off Road / Trekker Road
S1 = TKR
S1 = Trekker
LW1 = Tweet
AG = V-Clic
L1 = V-Clic
L1e = V-Clic
V1 = Viva 3
S1 = Vivacity
S1C = Vivacity
')
           ,array('5',     '?',      '
1 = ?
7 = ?
G = ?
T = ?
')
           ,array('6+7+8+9',     '?',      '
6OOA
6OOB
6OOC
6OOL
A100
A8AA
AAAB
ADAA = ?
ADAM = ?
B000
B00A = ?
BDAM = ?
CADA = ?
CDAM = ?
COO3
COO8
COOA
COOL
COOR
COOT
0000
BOAM
AABA
AA10
8008
800B
8DAM
A00B
ACAA
B008
B00B
BADA
BCAM
BDAM
BDMA
BOOB
CADA
CDAM
CDAN
AAAB

')
           ,array('11',     '?',      '
0 = ?
J = ?
C = ?
')
            )
         );
         break;

      case 'VG5' :
         $noget = array(
            array(
            array('4-5',     'type ?',      '
VG55BR00000307323
VG55BR00002314497
VG5SA034099001817
VG5SA035000003565
VG5SA051099021380
VG5SA46A000001261

SA45 YN50EM
SA421 Aerox R NS50
SA424 Aerox R Naked NS50N

SA14 = ? (måske yamaha aerox YQ50)
........ måske 5BR (set yamaha aerox)
SA03 = ? (måske yamaha Why)
SA05 = ? (måske BWS - CW50RS)

SA48 - CS50M (Jog R)
SA05 - CW50RS
SA09 - slider
SA19 - YN50M - neos
SA21 - YN50 - neos
SA03 - why
SA34 - YN50M - neos
SA46 - YN50F (Neos 4T)
S180 - ?
S1B0 - ?
SA14 - YQ50
SA40 - YN50FM (Neos 4T)

5BR - aerox DT50R
5BR00000307323
5BR00002314497

4TD00000100 = yamaha BWS (S07791-01 YAMAHA MBK CW50RS)
4TD00000101
4TD00000100899

SA19 = ?
SA22 = ? Muligvis Yamaha Jog
SA34 = ?
SA40 = ?

(VG5)
5BR - aerox DT50R
SA48 - CS50M (JOG R)
SA05 - CW50RS
SA09 - slider
SA03 - why
SA46 - YN50F (neos 4T)
SA14 - YQ50

(VTL)
4SJ - ?
4YV - TZR
5AD - neos
5BK - neos
RA03 - ZTR
SA05 - 
SA15 - YN50
SA19 - YN50M
SA21 - YN50
SA22 - SC50 (jog)
SA22D
SA34 - YN50M
SA40 - YN50F - YN50FM 
SA48 - jog r
(SA221, luftkølet)
(SA226, vandkølet)
(SA224, Luftkølet, Euro 2)
(SA22V, luftkølet, Euro2)
(SA22X, vandkølet, Euro2)
SA229
SA22E

(LPR)
SA35 - XF50 (giggle)

(ZJM)
70 - DT50 (ZJM70K104 ZJM70K1A4)
70 - DT50 (ZJM70K107 ZJM70K1A7)
')
           ,array('8+9+10',     '?',      '
000
100
')
           ,array('11',     '?',      '
2 = ?
0 = ?
')
            )
         );
         break;

      case 'VMT' :
         $noget = array(
            array(
            array('4-5',     '?',      '
CSBUG101 = secma fun tech
')
           ,array('5',     '?',      '
')
           ,array('6+7+8+9',     '?',      '
')
           ,array('11',     '?',      '
')
            )
         );
         break;

      case 'VTH' :
         $noget = array(
            array(
            array('4+5',     'type ?',      '
FR
SA
AL = ? (set til Atlantis)
AL2AE26G233 = Atlantis
AL2AE26G240 = Atlantis
AL2A1A4G217 = Atlantis
AL2A1A4G217899 = Atlantis
AL2AE26G240193 = Atlantis
ATL 0EA = (set til Atlantis Luftkølet)
ATL 0EB = (set til Atlantis Vandkølet)
SR = ? (set til Derbi Senda SM og Derbi Senda X)
SR 1C1A4H267610
SD = ?
SD R1EBYH146822
PR = ? (set til Derbi GP1)
PRED = ? (set til Derbi GP1)
PR1A1A5G = GP1
ER = ?
GPRR = ? (set til GPR)
GR1D1A6H337967 = GPR
HUNTERVG065 = Hunter
? = Paddock
PREDABWG093 (45 km/t) = Predator
VAM0SHSG041 = Vamos
FR2F1A7H350272
SDR1EBYH139600 = Senda
SR2C1A6H338035 = Senda
SR2C1A6H313131
SR2C1A6H328015
SR2F1A7H350272
SR2F1A8H419082
')
           ,array('6+7',     '?',      '
1A = ? (set til Derbi GP1)
R1
1C
12
1C
2C
2D
2F
ZF

')
           ,array('6',     'variant ?',      '
1
2
R
')
           ,array('7',     'version/hastighed ?',         '
C
D
1
A
F
')
           ,array('8+9',     'version ?',    '
1A
2A
EB
FA
88
')
           ,array('11',    '?',       '
G
H
0
')
            )
         );
         break;

      case 'VTL' :
         $noget = array(
            array(
            array('4-7',     '?',      '
VTL5AD00000318913
VTLSA194000000870
VTLSA194000000877
VTLSA345000000015

VTLRA031000000001 (yamaha TZR 50)
VTLRA032000000001 (MBK X-POWER)

5AD0 = ? (brugerinsendt. måske tastefejl)
SA19 = ?
SA22 = ? Muligvis Yamaha Jog
SA34 = ? YAMAHA YN50M - muligvis neos
SA40 = ?

(VG5)
5BR - aerox DT50R
SA48 - CS50M (JOG R)
SA05 - CW50RS
SA09 - slider
SA03 - why
SA46 - YN50F (neos 4T)
SA14 - YQ50

(VTL)
5AD - neos
4YV - TZR
5BK - neos
RA03 - ZTR
SA05 - 
SA15 - YN50
SA19 - YN50M
SA21 - YN50
SA22 - SC50 (jog)
SA22D
SA34 - YN50M
SA40 - YN50F - YN50FM 
SA48 - jog r
(SA221, luftkølet)
(SA226, vandkølet)
(SA224, Luftkølet, Euro 2)
(SA22V, luftkølet, Euro2)
(SA22X, vandkølet, Euro2)
SA229
SA22E
4YVOOOOO101457
5AD00000319009
5AD00000328173
SA229000000162
SA229000000412
SA345000000368
SA401000012020
SA401500012020

(LPR)
SA35 - XF50 (giggle)

(ZJM)
70 - DT50 (ZJM70K104 ZJM70K1A4)
70 - DT50 (ZJM70K107 ZJM70K1A7)

')
           ,array('5',     'måske motorvolume?',          '
A = måske 49 cc eller mindre
B = måske 50-69 cc
osv
')
            )
         );
         break;

      case 'VTP' :
         $noget = array(
            array(
            array('4',     '?',      '
RS204000 = ?
RS210D00500020 = RIEJU RS 2 MATRIX
RS210D00500022 = ?
')
           ,array('5',     '?',          '

')
           ,array('6',     '?',      '

')
           ,array('7',     '?',         '

')
           ,array('8',     '?',    '

')
           ,array('9',     '?',    '

')
           ,array('11',    '?',       '

')
            )
         );
         break;

      case 'VTT' :
         $noget = array(
            array(
            array('4',     '?',      '
VTTAA113001000340
VTTAA113001000348
VTTAAJ11300100509
VTTBA112100102475
VTTSA120000519680
VTTSA128800514182
VTTSA12B000513040
VTTSA12B800514182
VTTSA12BB00514182
VTTSA12BOOO514672

VTTAAD11500101891 Suzuki Katana S08273 AY50 / AY50W 45 km/t S8273

VTTBA112100102721
VTTBA112100101317 Suzuki Estilete UF 50 Z (2001) jj643 E10497-01
VTTCA1JA000539124 Suzuki address AP 50 Wednesday, January 29, 1997 jj639  S07425-01 (står addressR på klistermærke)
VTTAT711500100008 Suzuki Zillion UX 50 (2000) jj656 A09865-01
VTTAAH11A00100686 Suzuki katana AY 50 W (2001) S09899-02
VTTAAE11G00100364 = ?
VTTAA113001000340
VTTAA113001000348

VTTCA1JA000538467
VTTCA1JA000539124
VTTSA12B000515000
VTTSA1ZB000520780

A = ?
B = ?
C = ?
S = ?
')
           ,array('5',     '?',          '
A = ?
T = ?
')
           ,array('6',     '?',      '
1
7
H
')
           ,array('7',     '?',         '
1
2
J
Z
')
           ,array('8',     '?',    '
1
2
A
B
')
           ,array('9',     '?',    '
0
1
5
A
')
           ,array('11',    '?',       '
0 = ?
')
            )
         );
         break;

      case 'ZAP' :
         $noget = array(
            array(
            array('4+5+6+7',     '?',          '
60400000049295
64010100013613
64010100023613
64010100033613
64010100043613
64010100053613
64010100063613
64010100073613
64010100083613
64010100093613

C0600000078158
C1600000070635
C2100002001294
C2500005560206
C4530100001531
C4630000001091

E3630000001499

C01 = Piaggio Sfera RST 50
C03000 00001001 = Piaggio Ciao M.Y. 99
C04 = NRG MC2
C05000 00001001 = Piaggio Si Mix
C06 = Piaggio Zip RST / Piaggio Zip RST med skivebremse
C07 = Piaggio Zip Fast Rider RST
C09 = Eaglet automatic
C11 = Piaggio Zip SP 50
C12 = Piaggio liberty 50 2T
C1200 00001091 = Vespa ET2 injection
C13 = ? (set ved gilera stalker)
C14 = ? (set ved gilera runner (undtaget PureJet), runner SD, 2000)
C16 = Vespa ET2 50
C19 = Piaggio Typhoon 50 XR
C21 = NRG
C21 = NRG Extreme
C21000 03000001 = NRG MC3 DT
C21000 00026 = ?
C24 = ? (set ved vespa ciao (ifølge easyparts.nl))
C24120 00001001 = Piaggio Ciao
C25 = Piaggio Zip + New Zip
C25 = ? (set ved piaggio zip 4T (ifølge easyparts.nl))
C25000 00001001 = Piaggio Zip Catalyzed
C25000 01000278 = Piaggio Zip 50 4T
C25000 03000001 = Zip electric
C25000 04000001 = Piaggio Zip H20
C25000 07001001 = Piaggio Zip Catalyzed (euro 2)
C25000 08000001 = Piaggio Zip 4T (euro 2)
C25000 09000001 = Piaggio Zip H20 (euro 2)
C26000 = Vespa 50 4T
C26100 = Vespa ET4 50
C27 = ? (set ved gilera DNA 50)
C27____1 = gilera DNA GP Experience
C27____2 = gilera DNA GP Experience euro 2
C282 = Piaggio liberty 50 4T
C29 = ? (set ved gilera storm (ifølge easyparts.nl))
C29 = Piaggio Typhoon
C29000 00001001 = Piaggio Typhoon 50 M.Y. 2004
C29000 02000001 = Piaggio Typhoon 50 M.Y. 2004 (euro 2)
C30 000 00001001 = Gilera ICE
C30 = ? (set ved gilera ICE, gilera runner PureJet)
C311 = Piaggio Ciao (25 km/t)
C31200 00001001 = Piaggio Ciao (25 km/t)
C32000 00001001 = NRG MC3
C32000 01000001 = NRG PureJet
C32000 02000001 = NRG MC3 DD
C34100 00001209 = Piaggio Diesis 50
C34300 00001001 = Piaggio Diesis 50 (euro 2)
C36 = ? (set ved gilera runner PureJet, (poggiali), runner 2003 12" hjul)
C361 = ? runner 50 PureJet
C362 = ? runner 50 poggiali
C36200 00004739 = runner 50 SP (euro 1)
C36400 00001009 = runner 50 SP (euro 2)
C37 = Piaggio Liberty
C372 = Piaggio liberty 50 2T
C373 = Piaggio liberty 50 4T (euro 2)
C37401 = Piaggio liberty 50 PTT
C38 = Vespa ET2
C38 = ? (set ved vespa LX (både 2 takt og 4 takt))
C38100 00001001 = Vespa ET2 50 (euro 2)
C38101 00001001 = Vespa LX 50 2T
C38200 = Vespa ET4 50 (euro 2)
C38300 00001001 = Vespa LX 50 4T
C40 = ? (set ved gilera stalker)
C40100 00001001 = gilera stalker (euro 2)
C42 = Piaggio Liberty (set ved Piaggio liberty 4T (ifølge easyparts.nl))
C421 = Piaggio liberty 50 2T RST
C422 = Piaggio liberty 50 4T RST
C42401 = Piaggio liberty 50 4T RST Delivery
C44 = ? (set ved piaggio fly 4T)
C441 = piaggio fly 50 2T
C442 = piaggio fly 50 4T
C45 = NRG (Dellorto PHVA 17.5) og (Bing 71/20/104 Indsprøjtning)
C45 = ? (set ved Piaggio NRG)
C451 = Piaggio NRG Power DD
C452 = Piaggio NRG Power PureJet
C453 = Piaggio NRG Power DT
C46 = ? (set ved gilera runner sp 2008, 2006)
C49 = Piaggio Liberty (set ved piaggio liberty 4T)
C491 = Piaggio Liberty 2T
C492 = Piaggio Liberty 4T
C50 = Piaggio Typhoon
C80 = ? (set ved piaggio ape)

G11/GI1A1A4 = ? (set ved gilera RCR)
G11C1A4H261945 = ?
G11C1A4H264226
G12 = ? (set ved gilera RCR, gilera SMT)
G12C1A6H338108 = GILERA SMT 50 2C1A
G12F1A8H417606 = ?
G11C1A4H257442
G11C1A4H257493
G11F1A8H417667 = ?

G12C1A4H263432
G12F1A8H417630 = ?
G12F1A7H363820 = ?
G12F1A8H417570 = ?
G12F1A9H429879 = ?
G1400000506177

GI2A1A4 = Gilera SMT
GPRREB = GPR 50
')
           ,array('8',     '?',    '
0 = ?
1 = ?
A = ?
')
           ,array('9',     '?',    '
0 = ?
1 = ?
2 = ?
9 = ?
T = ?
A = ?
')
           ,array('11',    '?',       '
kan være undermodel.
0 = ?
1 = ?
2 = ?
3 = ?
4 = ?
5 = ?
H = ?
R = ?
')
           ,array('?',    '?',       '
ZAP
   XXX type
      XX Variant
        X Version
         XX Løbenummer
ZAP
   XXX type
      X Variant
       XX Version
         XX Løbenummer
')
            )
         );
         break;

      case 'ZD3' :
         $noget = array(
            array(
            array('4+5',     '?',      '
BS = Ark AC og Ark LC
')
           ,array('6',     '?',          '
4
')
           ,array('7+8',     '?',      '
C3 (måske betyder det med 7MA motor)
C4 (måske betyder det med 20MY motor)
C5
C6
00
')
           ,array('9',     '?',    '
0
')
           ,array('11',    '?',       '
0 = ?
')
            )
         );
         break;

      case 'ZD4' :
         $noget = array(
            array(
            array('4+5+6+7+8',     '?',      '
LYB 000 V S000104
LYB 000 V S000089
LYB 000 V S000783
LYB 000 Y 5007327
MD0 100 Y S060375
PBA 000 W S000674
TL0 000 4 S000523
TLC 000 4 9000523
TLC 000 4 S000523

LP0 200 Y S002509 = aprilia classic S09712-01
LYB 000 V S       = aprilia RS
LYB 000 W S       = aprilia RS
MD0 100 1 S063242 = ?
MD0 100 S 0050993
MD0 100 T S052871 = ?
MD0 100 Y S060369
MN0 100 K S105381
MM0 100 W S       = aprilia RS
MU0 300 1 S104076 = aprilia RX S09164-01
MZB 100 W S       = aprilia RS
MZB 100 W 5002507
MZB 100 W S004550
NZB 100 W S004550
PB                = sonic luftkølet 45
PB0 00
PBA 00
PBA 000 1 S0108   = ?
PBA 000 1 S010858
PBA 000 1 S010868
PBA 000 1 S011454
PBA 000 2 S01180A
PBA 000 2 S012036
PBB 000 1 S002687
PDA 000 1 S011454
PF                = scarabeo
PGA 000 X S       = aprilia RS
PKE 000 1 S100367 = aprilia habana E09914-01
PKE 100 1 S102186 = aprilia habana E09914-01
PVB 002 7 H359    = aprilia SX
PVL 002 A H448    = aprilia SX (lille knallert)
PL0 006 6 H332061
PVM 004 A H453    = aprilia RX (lille)
RLA 100 Y S       = RS (LC)
RLA 100 Y S106918
RLB 100 1 S120453 = aprilia SR E10504-04 (LC)
RLE 100 1 S101794 = ?
RLE 100 2 6103566 = ?
SBB 000 9 4001    = aprilia sportcity one
SBB 005 9 4       = aprilia sportcity one
SBB 006 9 4001    = aprilia sportcity one
SBB 00X 9 4001    = aprilia pegaso (lille)
SC                = scarabeo DITech
TE0 000 4 S       = RS (LC)
TFB 005 8 S000    = aprilia mojito (lille knallert)
TG                = scarabeo
TH                = (00 = tromlebremse bag)
TH                = (01 = skivebremse bag)
TH                = scarabeo
TL                = sonic (0 = luftkølet, A = vandkølet) 45
TLB               = sonic 25
TLC               = sonic 30
TLC 000 4 5000    = aprilia sonic
TLC 005 5 S       = aprilia sonic
TLC 003 5 S000368
TLC 008 5 S000026
TMA 000 3 S000645 = ?
TMR 000 3 S000058 = ?
VF0 00            = SR (Med Indsprøjtning)
VFB 00            = SR (Med Indsprøjtning)
VFB 000 4 5000742
VFB 003 5 S000901 = SR 50 R (LZ409)
VFD 00            = SR (Med karburator)
VFD 008 6 S       = SR
VFG 001 7 5000    = aprilia SR (aprilia sr 50 r factory, ved ikke om det er med ditech motor)
VFG 008 7 S000    = aprilia SR ditech
VFG 009 7 S000    = aprilia SR ditech
')
           ,array('7',     '?',    '
0 = ?
1 = ?
2 = ?
3 = ?
')
           ,array('8',     '?',    '
0 = ? (måske 50 cc)
')
           ,array('11',    '?',       '
0 = ?
9 = ?
S = ?
')
            )
         );
         break;

      case 'ZDM' :
         $noget = array(
            array(
            array('4-5-6',     'type',      '
M10 = ?
')
           ,array('7',     'variant/version',         '
0 = ?
')
           ,array('8',     '?',    '
A = ?
')
           ,array('9',     '?',    '
A = ?
')
           ,array('11',    'produktionssted',       '
B = Bologna
')
            )
         );
         break;

      case 'ZDP' :
         $noget = array(
            array(
            array('4',     '?',      '
A = ?
')
           ,array('5',     '?',          '
B = ?
')
           ,array('6',     '?',      '
G = ?
')
           ,array('7',     '?',         '
0 = ?
')
           ,array('8',     '?',    '
1 = ?
')
           ,array('9',     '?',    '
1 = ?
2 = ?
5 = ?
8 = ?
X = ?
')
           ,array('11',    '?',       '
H = ?
')
            )
         );
         break;

      default : $indhold = 'Ingen'; break;

   }

   if(isset($noget)){
   foreach($noget as $valuea){
   $indhold .= '<br>';
   $indhold .= '<table class="vincheckerekstrainformation borderradius5px">';

   $indhold .= '<tr><th style="text-align: left;">' . 'Tegn nummer' . '</th><th style="text-align: left;">' . 'Betydning' . '</th><th style="text-align: left;">' . 'Eksempel' . '</th></tr>';

   foreach($valuea as $valueb){

      $indhold .= '<tr>';

      foreach($valueb as $valuec){

         $valuec = trim($valuec);
         $indhold .= '<td style="text-align: left; vertical-align: top;">' . my_mb_ucfirst($valuec) . '</td>';

      }

      $indhold .= '</tr>';

   }
   $indhold .= '</table>';
   }
   }

   if(isset($nogetandet)){
   $indhold .= '<br>';
   $indhold .= '<br>';
   $indhold .= 'Her følger forsøg på at kunne fortælle om scooteren er en 25, 30 eller 45 km/t model ud fra stelnummeret.' . '<br>';
   $indhold .= 'Data stammer fra '.ahref('typegodkendelser.php', 'typegodkendelserne').'.' . '<br>';
   $indhold .= '<br>';

   foreach($nogetandet as $valuea){
   $indhold .= '<br>';

   foreach($valuea as $valueb){
   $indhold .= '<table class="vincheckerekstrainformationomhastighed borderradius5px">';

      if(isset($valueb[0]) && $valueb[0] != ''){

         $indhold .= '<tr><td colspan="3" style="text-align: center;">' . mb_ucwords($valueb[0]) . '</td></tr>';

      }

      if(isset($valueb[1]) && $valueb[1] != ''){

         $indhold .= '<tr><td>25 km/t : </td><td>' . my_mb_ucfirst($valueb[1]) . '</td></tr>';

      }

      if(isset($valueb[2]) && $valueb[2] != ''){

         $indhold .= '<tr><td>30 km/t : </td><td>' . my_mb_ucfirst($valueb[2]) . '</td></tr>';

      }

      if(isset($valueb[3]) && $valueb[3] != ''){

         $indhold .= '<tr><td>45 km/t : </td><td>' . my_mb_ucfirst($valueb[3]) . '</td></tr>';

      }

      if(isset($valueb[4]) && $valueb[4] != ''){


      }

   $indhold .= '</table>';
   $indhold .= '<br>';
   }

   }
   $indhold .= '<br>';
   $indhold .= 'Det er slet ikke sikkert at data passer til det indtastede stelnummer ('.mb_strtoupper($data).'). Undersøg selv typegodkendelsesnummeret på din scooter og sammenlign med typegodkendelsen. Og undersøg selv at typeanmeldelsesnummeret (der står øverst i typegodkendelsen) passer med typeattesten til scooteren hvis du har sådan et stykke papir.';
   $indhold .= visbilled('1', 'billed3337.jpg', 'typegodkendelse og typeattest sammenligning', false, true);
   $indhold .= '<br>';
   }

   return $indhold;

}



?>
