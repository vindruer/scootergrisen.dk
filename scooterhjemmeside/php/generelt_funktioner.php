<?php // æøåÆØÅ UTF-8 uden BOM



function bygsiden(
     $sidetitle // 1
   , $overskrift // 2
   , $metadescription // 3
   , $databaseright // 4
   , $visrightcontent = true // 5
   , $vistop = true // 6
   , $databasecenter = null // 7
   , $gammel______visrightcontent = true // 8
   , $visfooter = true // 9
   , $normal_eller_scooter = true // 10
   , $databasecenter_b = null // 11
   , $databasecenter_b_for = true // 12
   , $visdinkommentar = true // 13
   , $bredcentercontent = false // 14
   , $br = true // 15
   ){

   // sider som bruger denne funktion på en speciel måde : generelt_fejl index spas visbilled fejl links

   $indhold = '';
   $delen = '';
   $htmlekstraattributter = '';
   $bodyekstraattributter = '';
   $ekstra_lige_efter_body_start = '';
   $globaltopbeskeddiv = '';
   $navigationsknapper = '';
   $slutbodyekstra = '';
   $fejlbeskeder = '';
   $footertekst = '';
   $footer_reklame_spotlys_counterogsocialemedier = '';
   $emnerpasidenoverskrift = $GLOBALS['setup']['l_uniholder_subjetsonpage'];
   $socialemedierscriptkode = '';
   //$analyticsscriptkode = '';

   $nymetadescription = '';
   //$metadescription = array();

   // få "emnerpasidenoverskrift" til at være øverst
   if(array_key_exists($emnerpasidenoverskrift, $databaseright)){

      unset($databaseright[$emnerpasidenoverskrift]);
      $databaseright = array_merge(array($emnerpasidenoverskrift => ''), $databaseright);

   }else{

      $databaseright = array_merge(array($emnerpasidenoverskrift => ''), $databaseright);

   }

   if($databasecenter_b){

      foreach($databasecenter_b as $key => $value){

         if(trim($key) != ""){ $databaseright[$emnerpasidenoverskrift][trim($key)] = byttegn(trim($key)); }

      }

      foreach($databasecenter_b as $overskrift_x => $indhold_x){
         $delen .= visdel($overskrift_x, $indhold_x, $br);
      }

   }

   if($normal_eller_scooter){

      foreach($databasecenter as $key => $value){

         if(trim($key) != ""){ $databaseright[$emnerpasidenoverskrift][trim($key)] = byttegn(trim($key)); }

      }

      foreach($databasecenter as $overskrift_x => $indhold_x){
         $delen .= visdel($overskrift_x, $indhold_x, $br);
      }

   }else{

      foreach($databasecenter as $key => $value){
         $databaseright[$emnerpasidenoverskrift][trim($value["generelt"]["model"])] = $key;
         $modelarray[] = str_ireplace("$overskrift ", '', (str_replace('"', '&quot;', $value["generelt"]["model"])));
      }

      $metadescription = implode(" - ", $modelarray) . ' | ' . my_mb_ucfirst($metadescription);

      foreach($databasecenter as $overskrift_x => $indhold_x){
         $delen .= visscooter($overskrift_x, $indhold_x);
      }

   }

   if(isset($GLOBALS['setup']['loggetind_pa_den_harde_made']) && $GLOBALS['setup']['loggetind_pa_den_harde_made']){

      $htmlekstraattributter .= ' class="loggetind_pa_den_harde_made"';

   }

   if($GLOBALS['setup']['lokalt']){

      //$htmlekstraattributter .= ' contenteditable="true" spellcheck="true"';

   }

   if(isset($GLOBALS['setup']['bodyparameter']) && $GLOBALS['setup']['bodyparameter'] != ''){

      $bodyekstraattributter .= ' ' . $GLOBALS['setup']['bodyparameter'];

   }

   //$ekstra_lige_efter_body_start .= '   <script type="text/javascript" src="/' . $GLOBALS['setup']['datamappe'] . '/javascript/highslide/highslide.js"></script>'."\r\n";

   // bruges på sider som omregn/udregn med kode som kun bruge på en eller få sider
   if(isset($GLOBALS['setup']['body']) && $GLOBALS['setup']['body'] != ''){

      $ekstra_lige_efter_body_start .= ''
               . '   '
               . trim(
                  str_replace("\r\n", "\r\n   ", $GLOBALS['setup']['body'])
                 )
               . "\r\n"
               ;

   }

   if(isset($GLOBALS['setup']["globaltopbesked"]) && $GLOBALS['setup']["globaltopbesked"] != ""){

      $globaltopbeskeddiv .= '   <div id="globaltopbesked" class="fontsize_large fontfamily_2 bordertype2 borderradius5px">' . $GLOBALS['setup']["globaltopbesked"] . '</div>'."\r\n";

   }

   if($GLOBALS['setup']['visnavigationsknapper']){

      $tilbagelink = "/";
      $opdaterlink = "/";
      (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] != '')
         ? $toplink = $GLOBALS['setup']['domain'] . $_SERVER['PHP_SELF'] . '?' . htmlspecialchars($_SERVER['QUERY_STRING']) . '#toppen'
         : $toplink = $GLOBALS['setup']['domain'] . $_SERVER['PHP_SELF'] . '#toppen';

      $navigationsknapper .= ''
         . '<div class="navigationsknapper">'."\r\n"
         . '   <div>'.ahref($tilbagelink, visbilled('2', 'ikoner/piltilbage.png', $GLOBALS['setup']['l_navigation_back']), 'id="tilbagelink"').'</div>'."\r\n"
         . '   <div>'.ahref($opdaterlink, visbilled('2', 'ikoner/refresh.png', $GLOBALS['setup']['l_navigation_update']), 'id="opdaterlink"').'</div>'."\r\n"
         . '   <div>'.ahref($toplink, visbilled('2', 'ikoner/pilop.png', $GLOBALS['setup']['l_navigation_top']), 'id="gatiltoplink"').'</div>'."\r\n"
         . '</div>'."\r\n"
         . "\r\n"
         ;

   }

   if(isset($GLOBALS['setup']['slutbodyekstra']) && $GLOBALS['setup']['slutbodyekstra'] != ''){

      $slutbodyekstra .= ''
         . trim(str_replace("\r\n", "\r\n", $GLOBALS['setup']['slutbodyekstra'])) . "\r\n"
         . "\r\n"
         ;

   }

   if($GLOBALS['setup']['loggetind']){

      $fejlbeskeder .= visfejlbeskeder();

   }

   foreach($databaseright as $menuoverskrift_x => $menudata_x){
      $GLOBALS['setup']['unimenuer'][$menuoverskrift_x] = $menudata_x;
   }

   if($metadescription){

      $nymetadescription = $metadescription;

   }

   $keywords = array();

   if($sidetitle){

      //$metadescription[] = $sidetitle;

   }

   if($databaseright){

      $metakeys = array_keys($databaseright);

      if(array_key_exists("generelt", $databaseright)){

         unset($databaseright["generelt"]);

      }

      if(array_key_exists($emnerpasidenoverskrift, $databaseright)){

         array_shift($metakeys); // slet

         if(is_array($databaseright[$emnerpasidenoverskrift])){

            $metakeys = array_merge(array_keys($databaseright[$emnerpasidenoverskrift]), $metakeys);

         }

      }

      $metakeys = str_replace('"', '', $metakeys);
      $metakeys = str_replace('<br>', '', $metakeys);

      foreach($metakeys as $value){

         //$metadescription[] = $value;

         if($nymetadescription){

            $nymetadescription .= ', ' . $value;

         }

         $keywords[] = $value;

      }

   }

   if(isset($GLOBALS['setup']['eftertitle'])){

      if($sidetitle){

         if($GLOBALS['setup']['eftertitle'] != ''){

            $title = my_mb_ucfirst($sidetitle) . ' - ' . $GLOBALS['setup']['eftertitle'];

         }else{

            $title = my_mb_ucfirst($sidetitle);

         }

      }else{

         $title = $GLOBALS['setup']['eftertitle'];

      }

   }else{

      $title = '';

   }


   if(!$GLOBALS['setup']['lokalt']){

      besog('gem');

   }

   $indhold .= ''
      . '<!DOCTYPE html>'."\r\n"
      . "\r\n"
      . '<html lang="da" id="toppen"' . $htmlekstraattributter . '>'."\r\n"
      . "\r\n"
      . htmlhead($title, $overskrift, $keywords, $metadescription)."\r\n"
      . "\r\n"
      . '<body class="fontfamily_1"' . $bodyekstraattributter . '>'."\r\n"
      . "\r\n"
      . $ekstra_lige_efter_body_start
      . "\r\n"


      . '<div class="altdetoverste_og_indholdet">'."\r\n"


      . toplinks($vistop, $metadescription, true, $sidetitle, $GLOBALS['setup']['menu'], $GLOBALS['setup']['smaikoner'])."\r\n"
      . '   <script type="text/javascript"></script>'."\r\n"
      . '   '
      . noscript(
         '<div class="javascriptogflashikkeaktiv fontfamily_2 fontsize_large bordertype2 borderradius5px">'
         . $GLOBALS['setup']['l_noscript'] . '.'
         .'</div>') . "\r\n"
      . "\r\n"
      . $globaltopbeskeddiv
      . "\r\n"
      ;

   if($visrightcontent){

      $indhold .= ''
         . '<div class="holdernoget">'."\r\n"
         . '<div class="colmask rightmenu">'."\r\n"
         . '<div class="colleft">'."\r\n"
         ;

   }

   $indhold .= ''
      . newline(9)
      . visoverskrift($overskrift, $bredcentercontent, true)
      . $delen
      . visslut($visrightcontent, $visdinkommentar)
      . vispost($visrightcontent, $visfooter)
      ;

   if($visrightcontent){

      $indhold .= ''
         . '</div> <!-- slut på class="colleft" -->'."\r\n"
         . '</div> <!-- slut på class="colmask rightmenu" -->'."\r\n"
         . '</div> <!-- slut på class="holdernoget" -->'."\r\n"
         ;

   }

   if($visfooter){

      $footertekst .= ''
         . visfootertekst($visrightcontent, $visfooter)
         ;

      $footer_reklame_spotlys_counterogsocialemedier .= ''
         . visfootertag($GLOBALS['setup']['visreklame'], $GLOBALS['setup']['visspotlys'], $GLOBALS['setup']['counterogsocialemedier'])
         ;

   }

   if(!$GLOBALS['setup']['lokalt']){

      $socialemedierscriptkode .= ''
         . '   <script type="text/javascript" src="//connect.facebook.net/da_DK/all.js#xfbml=1" id="facebook-jssdk"></script>'."\r\n"
         ;

   }

   $indhold .= ''
      . clearboth()
      . newline(3)
      . $fejlbeskeder

      . $footer_reklame_spotlys_counterogsocialemedier

      . '<div class="push"></div>'."\r\n"
      . '</div> <!-- class="altdetoverste_og_indholdet" -->'."\r\n"

      . $footertekst

      . $navigationsknapper

      . $slutbodyekstra // for eksempel syntaxhighlighter script

      // placer deferable javascript sidst, ellers kan de bloker for parrallel downloads
      . '   <script type="text/javascript" src="/' . $GLOBALS['setup']['datamappe'] . '/javascript/highslide/highslide.js"></script>'."\r\n"
      . '   <script type="text/javascript" src="/' . $GLOBALS['setup']['datamappe'] . '/javascript/orphus2.js"></script>'."\r\n"
      . '   <script type="text/javascript" src="/' . $GLOBALS['setup']['datamappe'] . '/javascript/jquery-1.8.2.min.js"></script>'."\r\n"
      . '   <script type="text/javascript" src="/tablesorter/js/jquery.tablesorter.js"></script>'."\r\n"
      . $socialemedierscriptkode
      //. $analyticsscriptkode
      . "\r\n"
      . clearboth() // clear før </body> eller rækker <body> ikke hele siden ned som <html>
      . "\r\n"
      . '</body>'."\r\n"
      . "\r\n"
      . '</html>' // sidste output til HTML siden hvis alt går efter planen
      ;

   return $indhold;

}



function toplinks($vistop, $metadescription, $toplinks, $title, $menuer, $smaikoner){

   $indhold = '';

   if($toplinks){

      if($vistop){

         if($GLOBALS['setup']['en_eller_anden_besked_overst_pa_siden']){

            $indhold .= ''
               . '<div class="en_eller_anden_besked_overst_pa_siden fontsize_xsmall margintype8 background_color_2">'
               . my_mb_ucfirst($GLOBALS['setup']['en_eller_anden_besked_overst_pa_siden'])
               . '</div>'."\r\n"
               . "\r\n"
               ;

         }

         $indhold .= ''
            . '   <div class="altdetoverste background_color_8 bordertype5 borderradius5pxbottom margintype6">'."\r\n"
            . '   <div class="altdetoversteb borderradius5pxbottom">'."\r\n"
            . "\r\n"
            . breadcrumbs()
            . dropdownmenu($menuer)
            . titlebar($title, $metadescription)
            . smaikonerbar($smaikoner)
            . '   </div>'."\r\n"
            . '   </div>'."\r\n"
            . "\r\n"
            ;

      }else{

         $indhold .= lidtplads('lodret');

      }

   }

   $indhold .= newline(10);

   return $indhold;

}



function smaikonerbar($smaikoner){

   $indhold = '';

   $indhold .= '<div class="colmask rightmenu margintype1">' . "\r\n";
   $indhold .= "\r\n";

//   $indhold .= '   <div id="overhovedlogoholder">' . "\r\n";
//   $indhold .= "\r\n";

   $indhold .= '      <div class="colleft">' . "\r\n";
   $indhold .= "\r\n";

   $indhold .= '         <div class="col1wrap">' . "\r\n";
   $indhold .= '            <div class="col1top smaikoner">' . "\r\n";

   if(isset($smaikoner)){

      $smaikonerlinks = $smaikoner;

   }

   $dfsfdssdfddsf = pathinfo($_SERVER["PHP_SELF"]);

   foreach($smaikonerlinks as $noget){

      $indhold .= '                  ';
      //$indhold .= '<span title="' . my_mb_ucfirst($noget[0]) . '"';
      //$indhold .= ' class="smaikoneraktuelikona"';
      //$indhold .= '>';
      $indhold .= ahref($noget[1], visbilled('2', $noget[2], $noget[0], null, null, null, 'class="smaikonerlink borderradius5px"', null, $noget[3], $noget[4]));
      //$indhold .= '</span>';
      $indhold .= "\r\n";

   }

   $indhold .= '            </div>'."\r\n"; // col1top
   $indhold .= '         </div>'."\r\n"; // col1wrap
   $indhold .= "\r\n";
   $indhold .= '         <div class="col2top">'."\r\n";



   (isset($_POST['sogetekst']))
      ? $sogetekst = filter_input(INPUT_POST, 'sogetekst', FILTER_SANITIZE_SPECIAL_CHARS)
      : $sogetekst = $GLOBALS['setup']['language_search'];

   $indhold .= '            ';
   $indhold .= '<form action="/' . $GLOBALS['setup']['datamappe'] . '/' . 'sog.php' . '" method="post" enctype="multipart/form-data" class="sogeform">';
   $indhold .= clearboth();
   $indhold .= '<input type="hidden" name="funktion" value="sog">';
   $indhold .= '<label for="sogetekst" class="displaynone"></label><input type="text" maxlength="100" id="sogetekst" name="sogetekst" size="20" class="inputtext sogesogefelt borderradius5px fontsize_11px fontfamily_2" placeholder="' . $sogetekst . '">';
   $indhold .= '<input type="submit" name="sog_sendbilled" value="" class="inputknap sogesogesubmit fontsize_11px fontfamily_2">';
   $indhold .= '</form>';
   $indhold .= "\r\n";

   $indhold .= '         </div>'."\r\n"; // slut på col2top
   $indhold .= "\r\n";
   $indhold .= '      </div>'."\r\n"; // slut på colleft
   $indhold .= "\r\n";
   $indhold .= '      ' . clearboth();
   $indhold .= "\r\n";
//   $indhold .= '   </div>'."\r\n"; // overhovedlogoholder
//   $indhold .= "\r\n";

   $indhold .= '</div>'."\r\n"; // colmask rightmenu
   $indhold .= "\r\n";
   $indhold .= clearboth();
   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";

   return $indhold;

}



function titlebar($title, $metadescription){

   $indhold = '';

   if(isset($GLOBALS['setup']['sideikon'])){

      $billede = $GLOBALS['setup']['sideikon'];

   }

   $indhold .= '   <div class="sideoverskriftholder margintype8">'."\r\n";
   $indhold .= "\r\n";

   $indhold .= '      ';
   $indhold .= ahref($GLOBALS['setup']['domain'] . '/', visbilled('2', $billede, my_mb_ucfirst($GLOBALS['setup']['l_cube']), null, null, null, 'class="sideoverskriftlogobillede"', null, '64', '64'), 'class="sideoverskriftlogo" id="dugnasivaivcmaismcasdcoumdso"', false) . "\r\n";
   $indhold .= "\r\n";

   $indhold .= '      ';
   $indhold .= '<div class="overskrifttitlemetadescriptionholder">'."\r\n";

   $nytitle = $title;
   $nytitle = str_replace('<', '&lt;', $nytitle);
   $nytitle = str_replace('>', '&gt;', $nytitle);
   $nytitle = my_mb_ucfirst($nytitle);

   $nymetadescription = $metadescription;
   $nymetadescription = str_replace('<', '&lt;', $nymetadescription);
   $nymetadescription = str_replace('>', '&gt;', $nymetadescription);
   $nymetadescription = my_mb_ucfirst($nymetadescription);

   $indhold .= '         ';

   $indhold .= '<h1 class="title fontsize_xxlarge fontfamily_6">';
   //$indhold .= ahref($GLOBALS['setup']['domain'] . $_SERVER["SCRIPT_NAME"], $nytitle, 'title="Link til den side som vises nu"');
   $indhold .= $nytitle;
   $indhold .= '</h1>';
   $indhold .= "\r\n";

   $indhold .= '         ';
   $indhold .= '<h2 class="metadescription fontsize_large fontfamily_8">';
   $indhold .= $nymetadescription;
   $indhold .= '</h2>';
   $indhold .= "\r\n";

   $indhold .= '      </div>'."\r\n"; // slut på class="overskrifttitlemetadescriptionholder"
   $indhold .= "\r\n";



/*
   $indhold .= '      ';
   $indhold .= '<div class="nyloginindhold fontsize_xsmall">'."\r\n";

   if(!$GLOBALS['setup']['loggetind']){

      $indhold .= ''
         . '         <script type="text/javascript">'."\r\n"
         . "\r\n"
         . '         function visskjulloginformular(tilstand, visid, skjulid) {'."\r\n"
         . "\r\n"
         . '            \'use strict\';'."\r\n"
         . "\r\n"
         . '            if(tilstand) {'."\r\n"
         . '               document.getElementById(visid).style.display = \'block\';'."\r\n"
         . '               document.getElementById(skjulid).style.display = \'none\';'."\r\n"
         . '            } else {'."\r\n"
         . '               document.getElementById(visid).style.display = \'none\';'."\r\n"
         . '               document.getElementById(skjulid).style.display = \'block\';'."\r\n"
         . '            }'."\r\n"
         . "\r\n"
         . '         }'."\r\n"
         . "\r\n"
         . '         </script>'."\r\n"
         . '         '."\r\n"

         . '         <div class="loginhover" id="loginhover">'."\r\n"
         . '            '
         . formbox('0', '', '', $_SERVER["PHP_SELF"], 'get', '', ''
            . input('0', 'button', '1', ' ', '', '', '', 'kodeord_bogstav logindknap fontsize_xsmall', 'onClick="visskjulloginformular(1, \'loginhoverform\', \'loginhover\');"')
         )."\r\n"
         . '         </div>'."\r\n"

         . '         <div id="loginhoverform" class="loginhoverform bordertype1 borderradius5px displaynone">'."\r\n"
         . '            <form method="post" action="/' . $GLOBALS['setup']['datamappe'] . '/' . 'statistik.php" enctype="multipart/form-data" name="loginhoverformular">'."\r\n"
         . '               <div><input type="submit" name="login" value="' . my_mb_ucfirst($GLOBALS['setup']['l_knap_login']) . '" class="inputknap fontsize_xsmall"></div>'."\r\n"
         . '               <div><input type="button" name="login" value="' . my_mb_ucfirst($GLOBALS['setup']['l_knap_luk']) . '" class="inputknap fontsize_xsmall" style="margin-right: .5em;" onClick="visskjulloginformular(0, \'loginhoverform\', \'loginhover\');"></div>'."\r\n"
         . '               <div class="megetlidtpladslodret clearboth"></div>'."\r\n"
         . '               <input type="hidden" name="funktion" value="login">'."\r\n"
         . '               <div><label>' . my_mb_ucfirst($GLOBALS['setup']['l_login_username']) . ': <input type="text" name="login_brugernavn" size="15" value="" placeholder="Brugernavn" class="inputtext fontsize_xsmall borderradius5px"></label></div>'."\r\n"
         . '               <div class="megetlidtpladslodret clearboth"></div>'."\r\n"
         . '               <div><label>' . my_mb_ucfirst($GLOBALS['setup']['l_login_password']) . ': <input type="password" name="bareetfelt" size="15" value="" placeholder="Kodeord" class="inputtext fontsize_xsmall borderradius5px"></label></div>'."\r\n"
         . '            </form>'."\r\n"
         . '         </div>'."\r\n"
         ;

   }else{

      $indhold .= ''
         . '<div class="loginhoverform bordertype2 borderradius5px">'."\r\n"
         . formbox('0', '', '', $_SERVER["PHP_SELF"], 'post', '', ''
            . '<div style="float: left;">' . my_mb_ucfirst($GLOBALS['setup']['l_login_youareloggedin']) . '</div>'
            . input('0', 'hidden', 'funktion', 'logud')
            . input('0', 'button', '1', '*', '', '', '', 'kodeord_bogstav logudknap inputknap fontsize_0 fontfamily_2', 'onfocus="blur();" onclick="form.submit();"')
         )
         . '<div>' . ahref($GLOBALS['setup']['domain'] . '/' . $GLOBALS['setup']['datamappe'] . '/' . 'statistik.php', 'Statistik') . '</div>'
         . '<div>' . ahref($GLOBALS['setup']['domain'] . '/' . $GLOBALS['setup']['datamappe'] . '/php/' . 'phpinfo.php', 'PHPinfo()') . '</div>'
         . '</div>'."\r\n"
         ;

   }

   $indhold .= '      </div>'."\r\n"; // slut på class="nyloginindhold"
   $indhold .= "\r\n";
*/




   $indhold .= '      ' . clearboth();
   $indhold .= "\r\n";
   $indhold .= '   </div>'."\r\n"; // slut på class="sideoverskriftholder"
   $indhold .= "\r\n";

   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";

   $indhold .= '   ' . clearboth();
   $indhold .= "\r\n";

   return $indhold;

}



function htmlhead($title, $overskrift, $keywords, $nymetadescription){

   $indhold = '';

   $indhold .= '<head>'."\r\n";
   $indhold .= "\r\n";
//   $indhold .= '   <!-- Bare fordi man er tyk kan man altså godt ha tynd mave : Robert Dølhus -->'."\r\n";
//   $indhold .= "\r\n";
//   $indhold .= '   <!-- ' . $GLOBALS['setup']['domain'] . $_SERVER['SCRIPT_NAME'] . ' -->'."\r\n";
//   $indhold .= "\r\n";

/*
   if(isset($GLOBALS['setup']['keywords']) && is_array($GLOBALS['setup']['keywords'])){

      $keywords = $GLOBALS['setup']['keywords'];

   }else{

      $keywords = array();

   }
*/
   if(isset($nymetadescription)){

      //$keywords = array_merge($keywords, $metadescription);
      $nymetadescription = my_mb_ucfirst($nymetadescription);

   }

   $indhold .= '   <meta charset="utf-8">'."\r\n";

   $indhold .= "\r\n";

   $nytitle = $title;
   $nytitle = str_replace('<', '&lt;', $nytitle);
   $nytitle = str_replace('>', '&gt;', $nytitle);
   $nytitle = my_mb_ucfirst($nytitle);

   $indhold .= '   <title>' . $nytitle . '</title>'."\r\n";
   $indhold .= "\r\n";

   $indhold .= '   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, maximum-scale=1, minimum-scale=1">'."\r\n";

   $indhold .= '   <meta name="author" content="scootergrisen">'."\r\n";
   $indhold .= '   <meta name="generator" content="Notepad++, PHP">'."\r\n";
   // keywords er måske ikke nødvendigt - fjernet 25-10-2012
   if($keywords){

      $indhold .= '   <meta name="keywords" content="' . implode(", ", $keywords) . '">'."\r\n";

   }

   //$indhold .= '   <meta name="description" content="' . implode(", ", $metadescription) . '">'."\r\n";
   $indhold .= '   <meta name="description" content="' . $nymetadescription . '">'."\r\n";
   $indhold .= '   <meta name="robots" content="index, follow, noarchive">'."\r\n";
   $indhold .= "\r\n";

   if(basename($_SERVER['SCRIPT_NAME']) == "index.php"){

      $indhold .= '   <meta name="msvalidate.01" content="' . $GLOBALS['setup']['msvalidate'] . '">'."\r\n";
      $indhold .= "\r\n";

   }

   $indhold .= '   <meta http-equiv="default-style" content="text/css">'."\r\n";
   $indhold .= "\r\n";

   $indhold .= '   <link rel="alternate" type="application/rss+xml" title="RSS nyheder" href="' . $GLOBALS['setup']['rssfeed'] . '">'."\r\n";
   $indhold .= "\r\n";

   ($GLOBALS['setup']['lokalt'])
      ? $indhold .= '   <link rel="shortcut icon" type="image/x-icon" href="/' . $GLOBALS['setup']['dataogbilledmappe'] . '/' . $GLOBALS['setup']['shortcuticon_lokalt'] . '">'."\r\n"
      : $indhold .= '   <link rel="shortcut icon" type="image/x-icon" href="/' . $GLOBALS['setup']['dataogbilledmappe'] . '/' . $GLOBALS['setup']['shortcuticon'] . '">'."\r\n";

   //$indhold .= '   <link rel="icon" type="image/png" sizes="30x30" href="/' . $GLOBALS['setup']['dataogbilledmappe'] . '/ikoner/' . 'netkoder30.png' . '">'."\r\n";
   //$indhold .= '   <link rel="icon" type="image/png" sizes="48x48" href="/' . $GLOBALS['setup']['dataogbilledmappe'] . '/ikoner/' . 'netkoder48.png' . '">'."\r\n";
   //$indhold .= '   <link rel="icon" type="image/png" sizes="60x60" href="/' . $GLOBALS['setup']['dataogbilledmappe'] . '/ikoner/' . 'netkoder60.png' . '">'."\r\n";
   $indhold .= "\r\n";

   // CSS
   $cachecontrol = '?v=' . filemtime($GLOBALS['setup']['rodenogdatamappe'] . '/css/stylesheet35.css');
   $indhold .= '   <link rel="stylesheet" type="text/css" href="/' . $GLOBALS['setup']['datamappe'] . '/css/stylesheet35.css' . $cachecontrol . '">'."\r\n";

   if(basename($_SERVER['SCRIPT_NAME']) != "index.php"){

      $indhold .= '   <link rel="stylesheet" type="text/css" href="/' . $GLOBALS['setup']['datamappe'] . '/javascript/highslide/highslide.css">'."\r\n";
      $indhold .= '   <link rel="stylesheet" type="text/css" href="/tablesorter/css/theme.default.css">'."\r\n";

   }

   $indhold .= "\r\n";

   // Javascript
   $indhold .= '   <script type="text/javascript" src="/' . $GLOBALS['setup']['datamappe'] . '/javascript/windowerror6.js' . '?v=' . filemtime($GLOBALS['setup']['rodenogdatamappe'] . '/javascript/windowerror6.js') . '"></script>'."\r\n";
   $indhold .= "\r\n";
   $indhold .= '   <script type="text/javascript" src="/' . $GLOBALS['setup']['datamappe'] . '/javascript/javascript8.js' . '?v=' . filemtime($GLOBALS['setup']['rodenogdatamappe'] . '/javascript/javascript8.js') . '"></script>'."\r\n";
   $indhold .= "\r\n";

   if(basename($_SERVER['SCRIPT_NAME']) != "index.php"){
   if(isset($GLOBALS['setup']['headekstra']) && $GLOBALS['setup']['headekstra'] != ''){

      $indhold .= ''
               . '   '
               . trim(
                  str_replace("\r\n", "\r\n   ", $GLOBALS['setup']['headekstra'])
                 )
               . "\r\n"
               . "\r\n"
               ;

   }
   }

   if(isset($GLOBALS['setup']['head']) && trim($GLOBALS['setup']['head']) != ''){

      $indhold .= ''
               . '   '
               . trim(
                  str_replace("\r\n", "\r\n   ", $GLOBALS['setup']['head'])
                 )
               . "\r\n"
               . "\r\n"
               ;

   }

   $indhold .= ''
      //. '   <script type="text/javascript" src="/' . $GLOBALS['setup']['datamappe'] . '/javascript/jquery.tablesorter.widgets.js"></script>'."\r\n" // tablesorter widgets (optional)
      //. "\r\n"
      //. '   <script type="text/javascript">'."\r\n"
      //. "\r\n"
      //. '   $(document).ready(function() {'."\r\n"
      //. "\r\n"
      //. '      // these default equivalents were obtained from a table of equivalents'."\r\n"
      //. '      // provided by sugar.js sorting alogrithms: http://sugarjs.com/sorting'."\r\n"
      //. '      $.tablesorter.characterEquivalents = {'."\r\n"
      //. '         "za" : "\u00e6;", // æ'."\r\n"
      //. '         "zb" : "\u00f8;", // ø'."\r\n"
      //. '         "zc" : "\u00e5;", // å'."\r\n"
      //. '         "ZA" : "\u00c6;", // Æ'."\r\n"
      //. '         "ZB" : "\u00d8;", // Ø'."\r\n"
      //. '         "ZC" : "\u00c5;"  // Å'."\r\n"
      //. '      };'."\r\n"
      //. "\r\n"
      //. '      $(\'table\').tablesorter({'."\r\n"
      //. '         theme          : \'blue\','."\r\n"
      //. '         widgets        : [\'zebra\', \'columns\'],'."\r\n"
      //. '         usNumberFormat : false,'."\r\n"
      //. '         sortReset      : true,'."\r\n"
      //. '         sortRestart    : true,'."\r\n"
      //. '         // Enable use of the characterEquivalents reference'."\r\n"
      //. '         sortLocaleCompare : true,'."\r\n"
      //. '         // if false, upper case sorts BEFORE lower case'."\r\n"
      //. '         ignoreCase : true'."\r\n"
      //. '      });'."\r\n"
      //. "\r\n"
      //. '   });'."\r\n"
      //. "\r\n"
      //. '   </script>'."\r\n"
      //. "\r\n"
      ;

   $indhold .= '</head>';

   return $indhold;

}



function dropdownmenu($leftcontentmenuer){
/*
   if($leftcontentmenuer){

      echo "sat";

   }else{

      echo "IKKE sat";

   }
*/
   $indhold = '';

   $indhold .= '   <div id="dropdownmenu_dims">'."\r\n";
   $indhold .= "\r\n";
   $indhold .= '      <div id="dropdownmenu" class="dropdownmenu fontsize_11px fontfamily_4 margintype6____firefoxbug">'."\r\n";
   $indhold .= "\r\n";

   $indhold .= '         <ul class="ulpunkta">'."\r\n";
   $indhold .= "\r\n";

   $sorterdemher = array(
                     'oplysninger'
                     ,'scooterens dele'
                     ,'service'
                     ,'tilbehør og udstyr'
                     ,'specielt'
                     ,'programmer'
                     ,'rodekassen'
                     ,'os'
                     ,'hardware'
                     ,'specielle filer'
                     //,'underholdning'

                     ,'information'
                     ,'things on scooter'

                     ,'accessories and equipment'
                     ,'special'
                     //,'scooter brands'
                     //,'entertainment'
                  );

   foreach($sorterdemher as $value){

      if(isset($leftcontentmenuer[$value])){

         uksort($leftcontentmenuer[$value], 'cmp_a');

      }

   }

   foreach($leftcontentmenuer as $menuoverskrift => $menudata){

      $indhold .= topmenu($menuoverskrift, $menudata, false, true);

   }

   $indhold .= '         </ul>'."\r\n";
   $indhold .= "\r\n";

   $indhold .= '         ' . clearboth();
   $indhold .= "\r\n";
   $indhold .= '      </div> <!-- slut på dropdownmenu -->'."\r\n";
   $indhold .= "\r\n";
   $indhold .= '   </div>  <!-- slut på dropdownmenu_dims -->'."\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";

   return $indhold;

}



function breadcrumbs(){

   $indhold = '';
   $nogetindhold = '';
   $breadcrumbsindhold = '';
   $GLOBALS['setup']['breadcrumbs'] = array();
   $link = '';

   $GLOBALS['setup']['breadcrumbs'][] = array(
       $GLOBALS['setup']['domain']
      ,'<span itemprop="title">' . $_SERVER['SERVER_NAME'] . '</span>'
      ,'itemprop="url"'
   );

   foreach($GLOBALS['setup']['menu'] as $keya => $valuea){
   
      foreach($valuea as $keyb => $valueb){
   
         foreach($valueb as $keyc => $valuec){
   
            if(is_array($valuec)){

               // submenuer
               foreach($valuec as $keyd => $valued){
 
                  foreach($valued as $keye => $valuee){

                     if($keye != 'thumbnail' && $keye != 'logo'){
                     if(basename($_SERVER["PHP_SELF"]) == basename($keye)){
                        $GLOBALS['setup']['breadcrumbs'][] = array('start.php#' . strtolower(byttegn($keya)), '<span itemprop="title">' . my_mb_ucfirst($keya) . '</span>', 'itemprop="url"');
                        $GLOBALS['setup']['breadcrumbs'][] = array('start.php#' . strtolower(byttegn($keya)), '<span itemprop="title">' . my_mb_ucfirst($keyc) . '</span>', 'itemprop="url"');
                        $GLOBALS['setup']['breadcrumbs'][] = array($keye, '<span itemprop="title">' . my_mb_ucfirst($keyd) . '</span>', 'itemprop="url"');
                     }
                     }
   
                  }
   
               }
   
            }else{

               // ikke submenuer
               if($keyc != 'thumbnail'){

                  (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] != '')
                     ? $link = $_SERVER['PHP_SELF'] . '?' . htmlspecialchars($_SERVER['QUERY_STRING'])
                     : $link = $_SERVER['PHP_SELF'];

                  if($link == $keyc){

                     $GLOBALS['setup']['breadcrumbs'][] = array('start.php#' . strtolower(byttegn($keya)), '<span itemprop="title">' . my_mb_ucfirst($keya) . '</span>', 'itemprop="url"');
                     $GLOBALS['setup']['breadcrumbs'][] = array($keyc, '<span itemprop="title">' . my_mb_ucfirst($keyb) . '</span>', 'itemprop="url"');
                  }

               }

            }

         }

      }

   }

if(1){

   $language_en_uk         = $GLOBALS['setup']['domainogdatamappe'] . '/php/language.php?language=en-UK';
   $language_da_dk         = $GLOBALS['setup']['domainogdatamappe'] . '/php/language.php?language=da-DK';
   $language_da_automatisk = $GLOBALS['setup']['domainogdatamappe'] . '/php/language.php?language=';

   $nogetindhold .= ''
      . '      <form name="skiftsprog" action="/' . $GLOBALS['setup']['datamappe'] . '/php/language.php" method="get" class="skiftmenusprog">'."\r\n"
      . '         <label>' . my_mb_ucfirst($GLOBALS['setup']['l_changelanguage']) . ' : '."\r\n"
      . '            <select class="inputselect fontsize_xsmall" name="language" size="1" id="languageselect">'."\r\n"
      . '               <option value="da"' . ((
         mb_strtolower($GLOBALS['setup']['languageinuse']) == 'da' ||
         mb_strtolower($GLOBALS['setup']['languageinuse']) == 'da-dk'
         ) ? ' selected' : '') . '>Dansk (da)</option>'."\r\n"
      . '               <option value="en"' . ((
         mb_strtolower($GLOBALS['setup']['languageinuse']) == 'en' ||
         mb_strtolower($GLOBALS['setup']['languageinuse']) == 'en-uk' ||
         mb_strtolower($GLOBALS['setup']['languageinuse']) == 'en-us'
         ) ? ' selected' : '') . '>English (en)</option>'."\r\n"
      . '               <option value=""' . ((mb_strtolower($GLOBALS['setup']['languageinuse']) == ''
         ) ? ' selected' : '') . '>' . my_mb_ucfirst($GLOBALS['setup']['l_changelanguage_automatic']) . '</option>'."\r\n"
      . '            </select>'."\r\n"
      . '         </label>'."\r\n"
      . '      </form>'."\r\n"
      . "\r\n"
      . '      ' . clearboth()."\r\n"
      . "\r\n"
      ;

}

   $breadcrumbs_noget = array();

   foreach($GLOBALS['setup']['breadcrumbs'] as $value){

      $breadcrumbs_noget[] = ''
         . '         <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">' . "\r\n"
         . '            ' . ahref($value[0], $value[1], $value[2]) . "\r\n"
         . '         </span>' . "\r\n";

   }

   //$tegn = '         <span class="breadcrumbspacer">&#187;</span>' . "\r\n";
   $tegn = '         <span class="breadcrumbspacer">»</span>' . "\r\n";

   $breadcrumbsindhold .= implode($tegn, $breadcrumbs_noget) . "\r\n";

   $indhold .= ''
      . '      <div class="breadcrumbs fontsize_xsmall">' . "\r\n"
      //. my_mb_ucfirst($GLOBALS['setup']['l_youarehere']) . "\r\n"
      . $breadcrumbsindhold
      . $nogetindhold
      . '      </div>' . "\r\n"
      . "\r\n"
      ;

   return $indhold;

}



function vispost($visrightcontent = true, $visfooter = true){

   $indhold = '';

   if($visrightcontent){


      $maskenoget = '';

      require_once './php/rate.php';
      $tilbage = hentrating($_SERVER['SCRIPT_NAME']);

      if(isset($tilbage[0])){

         if($tilbage[0] == null){
            $tilbage[0] = 20;
         }

      }

      if(isset($tilbage[1])){

         if($tilbage[1] == '-'){
            $maskenoget = 'Siden er ustemt.';
         }else{
            $maskenoget = '';
         }

         if($tilbage[1] == 'X'){
            $maskenoget = 'Du har allerede stemt på den viste side..';
         }else{
            $maskenoget = '';
         }

      }

         $spotmenu[$GLOBALS['setup']['l_uniholder_voteonpage']] = ''
            . '      <div id="stemholder">' . "\r\n"
            . "\r\n"
            . '         <a href="/" class="stemop" id="stemoplink"></a>' . "\r\n"
            . "\r\n"
            . '         <div class="stemtalholder fontsize_large background_color_5 borderradius5px">' . "\r\n"
            . '            <span id="stemtal">' . $tilbage[1] . '</span>' . "\r\n"
            //. '            ' . clearboth()
            . '         </div>' . "\r\n"
            . "\r\n"
            . '         <a href="/" class="stemned" id="stemnedlink"></a>' . "\r\n"
            . "\r\n"
            . '         <div class="stemmeterholder bordertype1 borderradius5px">' . "\r\n"
            . '            <meter class="ratemeter borderradius5px" id="ratemeter" min="20" low="45" high="60" max="100" optimum="100" value="' . $tilbage[0] . '"></meter>' . "\r\n"
            . '         </div>' . "\r\n"
            . "\r\n"
            . '         <div id="stemekstrabesked" class="margintype2 textaligncenter">' . $maskenoget . '</div>' . "\r\n"
            . "\r\n"
            . '      </div>' . "\r\n"
            . "\r\n"
            . '      <div class="margintype2 textaligncenter">'.ahref('/' . $GLOBALS['setup']['datamappe'] . '/' . 'ratingoversigt.php', my_mb_ucfirst($GLOBALS['setup']['l_uniholder_voteonpage_seeallvotes'])).'</div>' . "\r\n"
            . "\r\n"
            ;


      if($GLOBALS['setup']['loggetind']){

         $bagfarver = array('0df', 'df0', 'fd0', '0fd', '9c9', '99c', 'c99', 'cc9');

         $mappeliste = array(

             $GLOBALS['setup']['datamappe'] . '/php'
            ,$GLOBALS['setup']['tempmappe']
            ,''
            ,$GLOBALS['setup']['datamappe']

         );

         $options = "";
         $options .= '<option value="" selected="selected">Denne side</option>';

         foreach($mappeliste as $mappe){

            $filliste = hentfilliste("filer", $mappe);

            if(is_array($filliste)){

               $options .= '<option value=""></option>';
               $options .= '<option value="" class="bold italic fontsize_medium">/' . $mappe . '</option>';
               $farve = array_shift($bagfarver);

               foreach($filliste as $value){

                  $options .= '<option style="background: #' . $farve . '" value="' . $value . '" class="fontsize_xxsmall">' . basename($value) . '</option>';

               }

            }

         }

         $menuer[$GLOBALS['setup']['l_uniholder_deleteandcreate']] = ''
            . '<div class="adminnoget">'
            . '<div>'.ahref('/' . $GLOBALS['setup']['datamappe'] . '/' . 'statistik.php', 'Statistik').'</div>'
            . '<div>'.ahref('/' . $GLOBALS['setup']['datamappe'] . '/php/' . 'phpinfo.php', 'PHPinfo()').'</div>'
            . formbox('0', '', '', $_SERVER["PHP_SELF"], 'post', '', ''
               . input('0', 'hidden', 'funktion', 'logud')
               . input('1', 'submit', 'logud', 'Log ud')
            )
            . formbox('0', '', '', $_SERVER["PHP_SELF"], 'post', '', ''
               . input('0', 'hidden', 'funktion', 'sletdatafiler')
               . input('1', 'submit', 'filer', 'Slet midlertidige')
            )
            . formbox('0', '', '', $_SERVER["PHP_SELF"], 'post', '', ''
               . input('0', 'hidden', 'funktion', 'opretmapper')
               . input('1', 'submit', 'opretmapper', 'Opret mapper')
            )
            . formbox('0', '', '', $_SERVER["PHP_SELF"], 'post', '', ''
               . input('0', 'hidden', 'funktion', 'sletsymlink')
               . input('1', 'submit', 'sletsymlink', 'Slet symlink')
            )
            . formbox('0', '', '', $_SERVER["PHP_SELF"], 'post', '', ''
               . input('0', 'hidden', 'funktion', 'opretsymlink')
               . input('1', 'submit', 'opretsymlink', 'Opret symlink')
            )
            . formbox('0', '', '', '/' . $GLOBALS['setup']['datamappe'] . '/' . 'galleri.php', 'post', '', ''
               . input('0', 'hidden', 'funktion', 'lavthumbnails')
               . input('1', 'submit', 'thumbnails', 'lille')
               . input('1', 'submit', 'thumbnails', 'mellem')
               . input('1', 'submit', 'thumbnails', 'lille og mellem')
            )

            . formbox('0', '', '', '/' . $GLOBALS['setup']['datamappe'] . '/' . 'galleri_manglerdata.php', 'post', '', ''
               . input('0', 'hidden', 'funktion', 'lavthumbnails')
               . input('1', 'submit', 'thumbnails', 'lille')
               . input('1', 'submit', 'thumbnails', 'mellem')
               . input('1', 'submit', 'thumbnails', 'lille og mellem')
            )
            . formbox('0', '', '', $_SERVER["PHP_SELF"], 'post', '', ''
               . input('0', 'hidden', 'funktion', 'valgaffil')
               . input('1', 'select', 'rediger_valgtfil', $options, '1', 'vælg fil', 'rediger_valgfil', 'soiufsdiuf', 'style="width: 100%;"', 'over')
               . input('1', 'submit', 'rediger_sendknap', 'Gå til redigering')
            )
            . '</div>';


      }else{

         // orphus virker kun med billede link sat til id="orphus".
         // orphus virker ikke når er logget ind.

         $menuer[$GLOBALS['setup']['l_uniholder_foundaerror']] = ''
            . my_mb_ucfirst($GLOBALS['setup']['l_uniholder_foundaerror_message'])
            . '<br>'
            //. '<script type="text/javascript" src="/' . $GLOBALS['setup']['datamappe'] . '/javascript/orphus2.js"></script>'
            //. noscript('<div class="noscript bordertype2 borderradius5px">Javascript er ikke aktiv - orphus</div>')
            . '<div class="orphusogrssholder">'
            . ahref('http://www.orphus.ru', visbilled('2', 'ikoner/orphus.gif', 'orphus system', null, null, null, null, null, '121', '21'), 'id="orphus"')
            . '</div>'
            ;

         $menuer[$GLOBALS['setup']['l_uniholder_needhelp']] = ''
            . ''.kontaktmig(1).' ' . $GLOBALS['setup']['l_uniholder_needhelp_message'] . '.'
            ;

         $menuer[$GLOBALS['setup']['l_uniholder_rssnewsfeed']] = ''
            . my_mb_ucfirst($GLOBALS['setup']['l_uniholder_rssnewsfeed_message']) . '.'
            . ' '
            . '<div class="orphusogrssholder">'
            . ahref($GLOBALS['setup']['rssfeed'], visbilled('2', 'ikoner/rss_nyheder.png', 'RSS feed', null, null, null, 'class="verticalalignmiddle"', null, '101', '20'), 'type="application/rss+xml"')
            . '</div>'
            ;

         if(!$GLOBALS['setup']['loggetind']){

            // & skal ikke ændres til &amp; i det følgende
            $translatelink = ''
               . 'http://translate.google.com/translate?'
               . 'js=y'
               . '&prev=_t'
               . '&hl=en'
               . '&ie=UTF-8'
               . '&layout=1'
               . '&eotf=1'
               . '&u=' . rawurlencode($GLOBALS['setup']['domain'] . $_SERVER['PHP_SELF'])
               . '&sl=da'
               //. '&tl=en'
               ;

            $menuer[$GLOBALS['setup']['l_uniholder_translate']] = ''
               . '<div class="flag">'
               . ahref($translatelink . '&tl=en', visbilled('2', 'ikoner/united_kingdom_great_britain.png', 'english', '', null, null, 'class="ikon16x16"', null, '16', '16'))
               . ahref($translatelink . '&tl=sv', visbilled('2', 'ikoner/sweden.png', 'svenska', '', null, null, 'class="ikon16x16"', null, '16', '16'))
               . ahref($translatelink . '&tl=no', visbilled('2', 'ikoner/norway.png', 'norsk', '', null, null, 'class="ikon16x16"', null, '16', '16'))
               . ahref($translatelink . '&tl=fi', visbilled('2', 'ikoner/finland.png', 'suomi', '', null, null, 'class="ikon16x16"', null, '16', '16'))
               . ahref($translatelink . '&tl=de', visbilled('2', 'ikoner/germany.png', 'deutsch', '', null, null, 'class="ikon16x16"', null, '16', '16'))
               . ahref($translatelink . '&tl=nl', visbilled('2', 'ikoner/netherlands.png', 'nederlands', '', null, null, 'class="ikon16x16"', null, '16', '16'))
               . '<br>'
               . '<br>'
               // nogen browsere kan ikke vise kinesiske tegn direkte og viser firkanter i stedet
               . ahref($translatelink . '&tl=zh-TW', visbilled('2', 'ikoner/china.png', '中國 (chinese traditional)', '', null, null, 'class="ikon16x16"', null, '16', '16')) . '中國'
               . lidtplads('vandret')
               . ahref($translatelink . '&tl=zh-CN', visbilled('2', 'ikoner/china.png', '中国 (chinese simplified)', '', null, null, 'class="ikon16x16"', null, '16', '16')) . '中国'
               . '<br>'
               . '<br>'
               . ahref($translatelink . '&tl=en', 'More languages')
               . '</div>'
               ;

         }

      }

      if(isset($menuer)){
/*
         foreach($menuer as $key => $value){

            $indhold .= uniholder($key, $value);
            $indhold .= uniholder($key, $value);

         }
*/

         $GLOBALS['setup']['unimenuer'] = array_merge($spotmenu, $GLOBALS['setup']['unimenuer'], $menuer);

         foreach($GLOBALS['setup']['unimenuer'] as $overskrift => $data){

            $indhold .= uniholder($overskrift, $data);

         }

      }

      $indhold .= '</div> <!-- slut på class="col2" -->'."\r\n";

      $indhold .= newline(9);

   }

   $indhold .= clearboth();
   $indhold .= newline(9);

   return $indhold;

}



function visfootertag($visreklame = true, $visspotlys = true, $viscounterogsocialemedier = true){

   $indhold = '';

   $indhold .= ''
      . '<footer class="fontsize_small">'."\r\n"
      . "\r\n";

   if(!$GLOBALS['setup']['loggetind']){

      if($visreklame && $GLOBALS['setup']['reklamer']){

         $reklamer = $GLOBALS['setup']['reklamer'];

         $tilfeldigreklame = array_rand(

            $reklamer

         ,1);

         $indhold .= ''
            . '   <div id="reklameholder" class="background_color_7 box_shadow_1 bordertype1 borderradius5px margintype4">'
            . "\r\n"
            . '   <div id="reklamebaggrund">'
            . "\r\n"
            . "\r\n"
            . '      <div id="reklameoverskrift" class="fontsize_small">' . my_mb_ucfirst($GLOBALS['setup']['l_gratisreklamefor']) . ' ' . ahref($reklamer[$tilfeldigreklame][1], my_mb_ucfirst($reklamer[$tilfeldigreklame][0])) . ' <span id="reklamemindreskrift" class="fontsize_smaller">'.ahref('gratisreklame.php', my_mb_ucfirst($GLOBALS['setup']['l_gratisreklame_fadinegenreklame'])).'</span></div>'
            . "\r\n"
            . "\r\n"
            . '      <div id="reklame">'
            . "\r\n"
            . '         '.ahref($reklamer[$tilfeldigreklame][1], visbilled('1', 'reklamer/' . $reklamer[$tilfeldigreklame][2], my_mb_ucfirst($GLOBALS['setup']['l_gratisreklame_klikpabilledet']) . ' ' . $reklamer[$tilfeldigreklame][0], '', null, null, null, null, null, null, null, true))
            . "\r\n"
            . '      </div>'
            . "\r\n"
            . "\r\n"
            . '   </div>'
            . "\r\n"
            . '   </div>'
            . "\r\n"
            . "\r\n"
            ;

      }

      if($visspotlys && $GLOBALS['setup']['spotlys']){

         $indhold .= spotlysholder($GLOBALS['setup']['spotlys'], $GLOBALS['setup']['spotlysantal']);

      }

      if($viscounterogsocialemedier && !$GLOBALS['setup']['lokalt']){

/*
         $indhold .= ''
            //. '   <script type="text/javascript" src="http://www.chart.dk/js/unified.asp"></script>'."\r\n"
            . '   <script type="text/javascript">'."\r\n"
            ."\r\n"
            . '      function track_visitor_hjemmelavet(element_id, website_id) {'."\r\n"
            ."\r\n"
            . '         \'use strict\';'."\r\n"
            ."\r\n"
            . '         var element = document.getElementById(element_id),'."\r\n"
            . '             wid = website_id,'."\r\n"
            . '             wrnd = Math.random(),'."\r\n"
            . '             wref = document.referrer,'."\r\n"
            . '             wdoc = document.location,'."\r\n"
            . '             disx = screen.width,'."\r\n"
            . '             disy = screen.height,'."\r\n"
            . '             disd = 0,'."\r\n"
            . '             version = \'17\','."\r\n"
            . '             strTracker = \'\','."\r\n"
            . '             wtit = document.title;'."\r\n"
            ."\r\n"
            . '         if (navigator.appName !== "Netscape") { disd = screen.colorDepth; } else { disd = screen.pixelDepth; }'."\r\n"
            . '         if (top.document.referrer !== null) { wref = top.document.referrer; }'."\r\n"
            ."\r\n"
            . '         strTracker = "<a href=\'http://www.chart.dk/ref.asp?id=" + wid + "\' target=\'_blank\'>'
               .'<img src=\''
               .'http://cluster.chart.dk/reghit.asp'
               .'?secID=" + wrnd + "'
               .'&website_id=" + wid + "'
               .'&ref=" + encodeURI(wref) + "'
               .'&doc=" + encodeURI(wdoc) + "'
               .'&title=" + encodeURI(wtit) + "'
               .'&disx=" + disx + "'
               .'&disy=" + disy + "'
               .'&disd=" + disd + "'
               .'&v=" + version + "'
               .'\'></a>";'."\r\n"
            . '         element.innerHTML = strTracker;'."\r\n"
            ."\r\n"
            . '      }'."\r\n"
            ."\r\n"
            . '   </script>'."\r\n"
            . "\r\n"
            ;
*/

         $indhold .= ''
//            . '   <div id="fb-root"></div>'."\r\n"
//            . '   <script type="text/javascript">'."\r\n"
//            . '      (function(d, s, id) {'."\r\n"
//            . '         var js, fjs = d.getElementsByTagName(s)[0];'."\r\n"
//            . '         if (d.getElementById(id)) return;'."\r\n"
//            . '         js = d.createElement(s); js.id = id;'."\r\n"
//            . '         js.src = "//connect.facebook.net/da_DK/all.js#xfbml=1";'."\r\n"
//            . '         fjs.parentNode.insertBefore(js, fjs);'."\r\n"
//            . '      }(document, \'script\', \'facebook-jssdk\'));'."\r\n"
//            . '   </script>'."\r\n"
//            . "\r\n"
            ;

/*
         $indhold .= ''
            . '   <script type="text/javascript">'."\r\n"
            . '      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');'."\r\n"
            . '   </script>'."\r\n"
            . "\r\n"
            ;
*/
         $indhold .= ''
            . '   <div class="counterosv margintype4 fontsize_0">'."\r\n"

            . '<span class="socialmedieholder chartcounter">'
            . '<a href="http://www.chart.dk/ref.asp?id=' . $GLOBALS['setup']['chartid'] . '" target="_blank">'
            . '<img src="http://cluster.chart.dk/chart.asp?id=' . $GLOBALS['setup']['chartid'] . '" alt="Chart.dk">'
            . '</a>'
            . '</span>'

            . '<span class="socialmedieholder">'
            . '<span id="fb-root" class="displaynone"></span>' // lavede scrollbar da den var inline
            . '<span class="fb-like" data-href="' . $GLOBALS['setup']['domain']  . '/" data-send="false" data-layout="box_count" data-width="97" data-height="88" data-show-faces="false" data-font="verdana"></span>'
            . '</span>'

            //. '<span class="socialmedieholder">'
            //. '<span class="g-plusone" data-size="tall" data-href="' . $GLOBALS['setup']['domain']  . '" data-recommendations="false"></span>'
            //. '</span>'

            //. '<span class="socialmedieholder">'
            //. '<a href="https://twitter.com/share" class="twitter-share-button" data-url="' . $GLOBALS['setup']['domain'] . $_SERVER['PHP_SELF']  . '" data-lang="da" data-count="vertical">Tweet</a>'
            //. '</span>'."\r\n"

            . "\r\n"
            . '   ' . clearboth()
            . '   </div>'."\r\n"
            . "\r\n"
            ;

      }

   }

   $indhold .= ''
      . '</footer>'."\r\n"
      . "\r\n";

   return $indhold;

}



function visfootertekst($visrightcontent = true, $visfooter = true){

   $indhold = '';
   $bidder = array();
   $adskiller = '<span class="adskillerafenslags"></span>';

   $githublink = 'https://github.com/scootergrisen/' . $_SERVER['SERVER_NAME'] . '/blob/master' . $_SERVER['PHP_SELF'];

   // & skal ikke ændres til &amp; i det følgende
   $translatelink = ''
      . 'http://translate.google.com/translate?'
      . 'js=y'
      . '&prev=_t'
      . '&hl=en'
      . '&ie=UTF-8'
      . '&layout=1'
      . '&eotf=1'
      . '&u=' . rawurlencode($GLOBALS['setup']['domain'] . $_SERVER['PHP_SELF'])
      . '&sl=da'
      ;

   if($visrightcontent){

      // vis ikke "sidst opdateret" ved nyheder
      //  da de bruger eksterne filer som er nyere end selve siden
      //  og derfor giver et forkert indtryk af hvornår siden
      //  sidst er opdateret
      if(
         $_SERVER['SCRIPT_NAME'] != '/' . $GLOBALS['setup']['datamappe'] . '/' . 'nyheder.php'
      ){

         $filnavn = $GLOBALS['setup']['roden'] . $_SERVER['SCRIPT_NAME'];

         if(is_file($filnavn)){

            if($filendringunixtimestamp = filemtime($filnavn)){

               $bidder[] = ''
                  . '<span>'
                  . my_mb_ucfirst($GLOBALS['setup']['language_lastupdate'])
                  . ' '
                  . my_mb_ucfirst(utf8_encode(strftime("%A ", $filendringunixtimestamp)))
                  . my_mb_ucfirst(utf8_encode(ltrim(strftime("%d. ", $filendringunixtimestamp), '0'))) // ltrim sletter eventuelt 0 foran fordi windows og unix ikke begge kan bruge %d eller %#d
                  . my_mb_ucfirst(utf8_encode(strftime("%B %Y", $filendringunixtimestamp)))
                  . '</span>'
                  ;

            }else{

               trigger_error($GLOBALS['setup']['roden'] . ' eller ' . $_SERVER['PHP_SELF'] . ' er åbenbart ikke en godkendt sti');

            }

         }

      }

   }

   $bidder[] = ahref($GLOBALS['setup']['rssfeed'], visbilled('2', 'ikoner/rss.png', my_mb_ucfirst($GLOBALS['setup']['language_rssnews']), '', null, false, 'class="verticalalignmiddle"', null, '16', '16'), 'type="application/rss+xml"');

   $bidder[] = ahref($githublink, visbilled('2', 'ikoner/blacktocat-16.png', my_mb_ucfirst($GLOBALS['setup']['language_github']), '', null, false, 'class="verticalalignmiddle"', null, '16', '16'));

//   $bidder[] = ''
//      . '<span class="flag">'
//      . ahref($translatelink . '&tl=en', my_mb_ucfirst($GLOBALS['setup']['language_translate']))
//      . '</span>'
//      ;

   $bidder[] = ahref('kontakt.php', my_mb_ucfirst($GLOBALS['setup']['language_contact']));

   $bidder[] = visminemail();

   $indhold .= '   <div id="footertekst" class="margintype10 background_color_8 bordertype6 borderradius5pxtop fontsize_small">';
   $indhold .= implode($adskiller, $bidder);
   $indhold .= '</div>'."\r\n";
   $indhold .= "\r\n";

   return $indhold;

}



function visfejlbeskeder(){

   $indhold = '';

   if(!empty($GLOBALS['fejlbeskeder'])){

      (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] != '')
         ? $fejllink = $_SERVER['PHP_SELF'] . '?' . htmlspecialchars($_SERVER['QUERY_STRING']) . '#fejlbeskederzzz'
         : $fejllink = $_SERVER['PHP_SELF'] . '#fejlbeskederzzz';

      $indhold .= '   <div><a id="gatilfejllink" href="' . $fejllink . '">'.visbilled('2', 'ikoner/pilned.png', 'Der er sket en fejl i PHP').'</a></div>'."\r\n";

      $indhold .= '<a id="fejlbeskederzzz">&nbsp;</a>'."\r\n";

      $indhold .= '<div class="fejlbeskedholder fontfamily_2 fontsize_small">'."\r\n";
      $indhold .= '<div class="fejlbeskedoverskrift fontsize_large">Fejl</div>'."\r\n";

      foreach($GLOBALS['fejlbeskeder'] as $fejlbesked){

         $indhold .= '<!-- fejlbeskeder --><div class="fejlbesked">' . $fejlbesked . '</div>'."\r\n";

      }

      $indhold .= '</div>'."\r\n";
      $indhold .= "\r\n";

   }

   return $indhold;

}



function visoverskrift($overskrift, $bredcentercontent = false, $visoverskrift = true){

   $indhold = '';

   if($overskrift == ''){

      $visoverskrift = false;

   }

   $indhold .= '<div class="col1wrap">'."\r\n";
   $indhold .= "\r\n";

   ($bredcentercontent)
      ? $indhold .= '<div class="bredcentercontent">'
      : $indhold .= '<div class="col1">';

   $indhold .= "\r\n";
   $indhold .= "\r\n";

   if(!$GLOBALS['setup']['loggetind']){

      if($visoverskrift){

         $indhold .= '   <div id="overskriftholder">';
         $indhold .= "\r\n";

         if(isset($GLOBALS['setup']['sidetopbesked']) && $GLOBALS['setup']['sidetopbesked'] != ""){

            $indhold .= '   <div id="sidetopbesked" class="fontfamily_2 fontsize_large bordertype2 borderradius5px">';
            $indhold .= $GLOBALS['setup']['sidetopbesked'];
            $indhold .= '</div>'."\r\n";
            $indhold .= "\r\n";

         }

         $indhold .= '   </div>';
         $indhold .= "\r\n";
         $indhold .= "\r\n";


      }

   }

   if($_SERVER['REQUEST_METHOD'] == "POST"){
   if(isset($_POST['funktion'])){
   if($_POST['funktion'] == "valgaffil" || $_POST['funktion'] == "gemfil"){
   if((isset($_COOKIE["versionmd5"]) && VERSION === $_COOKIE["versionmd5"]) || $GLOBALS['setup']['loggetind']){

      $redigerindhold = '';

      if($_POST['funktion'] == "valgaffil"){

         (!isset($_POST['rediger_valgtfil']) || $_POST['rediger_valgtfil'] == '')
            ? $fil = $GLOBALS['setup']['roden'] . $_SERVER['PHP_SELF']
            : $fil = $_POST['rediger_valgtfil'];

         if(file_exists($fil)){

            $filnavnbasename = basename($fil);

            $datafrafil = file_get_contents($fil);
            $textareavalue = htmlentities($datafrafil, ENT_QUOTES, 'UTF-8'); // tekst som vises i textarea... ikke den tekst som gemmes

            $redigerindhold .= '<div class="redigerholder">';
            $redigerindhold .= '<div class="redigerbesked fontsize_small">Indhold af: ' . $fil . '</div>';

            $redigerindhold .= ''
               . formbox('0', '', '', $_SERVER['PHP_SELF'], 'post', '', ''
                  . input('0', 'hidden', 'funktion', 'gemfil')
                  . input('0', 'hidden', 'rediger_filsomskalgemmes', $fil)
                  . input('1', 'submit', 'redigerfil_sendknap', 'Gem ' . $filnavnbasename, '', '', 'rediger_knap', 'gemknap')
                  . input('1', 'textarea', 'redigerettekst', $textareavalue, $GLOBALS['setup']['textformstorrelse'], '', 'rediger_textarea', 'fontfamily_monospace', 'wrap="off" style="display: block; margin: 0 auto; width: 95%;"')
               );

            $redigerindhold .= '</div>';

         }else{

            $redigerindhold .= '<div class="fontsize_small">filen <span class="bold">"' . $fil . '"</span> findes ikke.</div>';

         }

         $indhold .= visdel("rediger $filnavnbasename", $redigerindhold, false);

      }elseif($_POST['funktion'] == "gemfil"){

         if(isset($_POST['rediger_filsomskalgemmes'])){

            $fil = $_POST['rediger_filsomskalgemmes'];
            $datasomskalskrives = $_POST['redigerettekst'];
            $bytesskrevet = file_put_contents($fil, $datasomskalskrives, FILE_TEXT | LOCK_EX);
            $filbackup = $GLOBALS['setup']['tempfuld'] . "/backup_" . basename($fil);

            $redigerindhold .= '<div class="redigerholder">';

            ($bytesskrevet !== false)
               ? $redigerindhold .= '<div style="background: #fff;">"' . basename($fil) . '" <span class="bold" style="color: #0f0; text-decoration: underline;">blev</span> gemt (alle ' . $bytesskrevet . ' bytes)</div>'
               : $redigerindhold .= basename($fil) . ' <span class="bold" style="color: #f00; text-decoration: underline;">blev ikke</span> gemt';

            if(checkomfindesellersopret("mappe", $GLOBALS['setup']['tempfuld'])){

               (copy($fil, $filbackup))
                  ? $redigerindhold .= '<div style="background: #fff;">"' . basename($filbackup) . '" <span class="bold" style="color: #0f0; text-decoration: underline;">blev</span> gemt</div>'
                  : $redigerindhold .= basename($filbackup) . '" <span class="bold" style="color: #f00; text-decoration: underline;">blev ikke</span> gemt';

            }

            $redigerindhold .= '</div>';

            $indhold .= visdel("Gemmer fil...", $redigerindhold);

         }

      }

   }
   }
   }
   }

   //echo $indhold;
   return $indhold;

}



function visdel($overskrift, $data, $br = true, $scootermodel = ''){

   $indhold = '';

   $overskrift = trim($overskrift);
   $data = trim($data);

   if($overskrift != 'hopover'){

      if($overskrift != ''){

         $indhold .= '   ' . clearboth();
         $indhold .= "\r\n";

         $indhold .= '   <a id="' . strtolower(byttegn($overskrift)) . '" class="clearboth"></a>';
         $indhold .= "\r\n";

         $indhold .= '   <div class="sideindholddel background_color_8 fontfamily_1 fontsize_small bordertype1 borderradius5px margintype1">';
//         $indhold .= '   <div class="sideindholddel background_color_8 fontfamily_1 fontsize_medium margintype1">';
         $indhold .= "\r\n";

         $indhold .= '      <h3 class="overskriftfordatacenter fontsize_xlarge fontfamily_7">';

         ($scootermodel != '')
            ? $indhold .= my_mb_ucfirst($scootermodel)
            : $indhold .= my_mb_ucfirst($overskrift);

         $indhold .= '</h3>'."\r\n";

      }else{

         $indhold .= '   <div class="sideindholddeludenoverskrift fontfamily_1 fontsize_small">';
         $indhold .= "\r\n";

      }
/*
      $indhold .= "\r\n";
      $indhold .= "\r\n";
      $indhold .= "\r\n";
*/
      if($br){

         $excludeTags = 'div(?=\ class="(kode\ outputb|kode\ outputa)")|script|style|pre|option'; // Mellem disse tags skal der ikke være <br>

         $regex = ""
            ."<!--ignore\-->.*?<!--ignore-->"  # Ignorer mellem disse to kommentarpar
            ."(?:<<br>>)?"                    # Fjern trailing <<br>>
            ."|"                               # Eller ...
            ."<($excludeTags)[^>]*>.*?</\\1>"  # Her matches der mellem excludeTags, fx <pre>abc</pre>
            ."(?:<<br>>)?"                    # Fjern trailing <<br>>
            ."|"                               # Eller ...
            ."<\\?php.*?\\?>"                  # Match mellem php-tags
            ."(?:<<br>>)?"                    # og fjern igen trailing <<br>>
            ;

         // Først erstat ALLE newlines med <<br>>:
         $data = str_replace("\r\n", "<<br>>\r\n", $data);

         // Så fjern de overflødige <<br>> mellem udvalgte tags:
         $data = preg_replace_callback("%$regex%isx", 'mycallback', $data);

         // Lav nu <<br>> om til det korrekte <br>
         $data = str_replace('<<br>>', '<br>', $data);

      }

      $indhold .= $data;

      $indhold .= "\r\n";
      $indhold .= '   </div> <!-- slut på class="sideindholddel" eller class="sideindholddeludenoverskrift" -->'."\r\n";
      $indhold .= "\r\n";

      $indhold .= "\r\n";
      $indhold .= "\r\n";
      $indhold .= "\r\n";

   }

   return $indhold;

}



function mycallback($matches){

   return str_replace('<<br>>', '', $matches[0]);

}



function visslut($visrightcontent = true, $visdinkommentar = true){

   $indhold = '';

   if($visdinkommentar){

      $indhold .= visdel($GLOBALS['setup']['l_contactform_title'], viskontakt(false, $GLOBALS['setup']['l_contactform_legend']));

   }
/*
   if($visrightcontent){

      // vis ikke "sidst opdateret" ved nyheder
      //  da de bruger eksterne filer som er nyere end selve siden
      //  og derfor giver et forkert indtryk af hvornår siden
      //  sidst er opdateret
      if(
         $_SERVER['SCRIPT_NAME'] != '/' . $GLOBALS['setup']['datamappe'] . '/' . 'nyheder.php'
      ){

         $filnavn = $GLOBALS['setup']['roden'] . $_SERVER['SCRIPT_NAME'];

         if(is_file($filnavn)){

            if($filendringunixtimestamp = filemtime($filnavn)){

               $indhold .=
                    '<div class="sidstendret">'
                  . 'Sidst opdateret : '
                  . my_mb_ucfirst(utf8_encode(strftime("%A %#d. ", $filendringunixtimestamp)))
                  . my_mb_ucfirst(utf8_encode(strftime("%B %Y", $filendringunixtimestamp)))
                  . '</div>'
                  ;

            }else{

               trigger_error($GLOBALS['setup']['roden'] . ' eller ' . $_SERVER['PHP_SELF'] . ' er åbenbart ikke en godkendt sti');

            }

         }

      }

   }
*/

   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= '</div> <!-- slut på class="centercontent" -->'."\r\n";
   $indhold .= '</div> <!-- slut på class="centercontentholder" -->'."\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= "\r\n";

   if($visrightcontent){

      $indhold .= "\r\n";
      $indhold .= "\r\n";
      $indhold .= "\r\n";
      $indhold .= '<div class="col2">'."\r\n";
      $indhold .= "\r\n";

   }

   //echo $indhold;
   return $indhold;

}



function uniholder($overskrift, $data){

   $indhold = '';
   $overskrift = trim($overskrift);

   if($data){

   (is_array($data))
      ? $menu = true
      : $menu = false;

   switch($overskrift){

      case $GLOBALS['setup']['l_uniholder_subjetsonpage'] :
         $ikon = true;
         $ikonfilnavn = 'ikoner/gatil.png';
         $sidelink = true;
         $linktolower = true;
         break;

      case 'download' :
      case 'typegodkendelser' :
         $ikon = true;
         $ikonfilnavn = 'ikoner/download.png';
         $sidelink = false;
         $linktolower = false;
         break;

      default :
         $ikon = false;
         $ikonfilnavn = 'ikoner/stjerne.png';
         $sidelink = false;
         $linktolower = true;
         break;

   }

   $indhold .= '   <div class="uniholder margintype1'; if($menu){ $indhold .= ' unimenu'; } $indhold .= '">' . "\r\n";
   $indhold .= '      <div class="uniindhold fontsize_xsmall fontfamily_1 background_color_8 bordertype1 borderradius5px">'."\r\n";
   $indhold .= '      <div class="unioverskrift fontsize_small fontfamily_1">' . my_mb_ucfirst($overskrift) . '</div>'."\r\n";

   if($overskrift == $GLOBALS['setup']['l_uniholder_subjetsonpage']){

      natcasesort($data);

   }

   if($menu){

      foreach($data as $key => $value){

         if($key == '0'){

         }elseif($key != 'hopover'){
         if($key == ''){

            trigger_error('mangler overskrift eller menu data i uniholder ('.basename($_SERVER['PHP_SELF']).')');

         }else{


            $key = str_replace('<br>', '', $key);

            if($ikon){

               $indhold .= '         <div class="sidelinkikonholder">';
               $indhold .= visbilled('2', $ikonfilnavn, '*', '', null, null, 'class="sidelinkikon"', null, '12', '12');
               $indhold .= '</div>';

            }

            if(is_array($value)){

               $tekst = key($value);
               $titletekst = $value[key($value)];

            }else{

               $tekst = $value;

            }

            $indhold .= '        <div class="lillelink fontfamily_1'; if($ikon){ $indhold .= ' lillelinkindent'; }

            if(basename($_SERVER["PHP_SELF"]) == basename($tekst)){

               $indhold .= ' id="aktuelside"';

            }

            $indhold .= '"';

            $indhold .= '>';

            $ahreftag = '';

            if($sidelink){

               $ahreftag .= $GLOBALS['setup']['domain'] . $_SERVER['PHP_SELF'];

               if(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] != ""){

                  $ahreftag .= '?' . htmlspecialchars($_SERVER['QUERY_STRING']);

               }

               $ahreftag .= '#';

            }

            if($overskrift == "download" || $overskrift == "typegodkendelser"){

               $ahreftag .= $GLOBALS['setup']['domainogdatamappe'] . '/' . 'download/';

            }

            // hvis linket laves små som jeg gjorde før i tiden så vil links med store bogstaver ikke virker i linux (webhotel hos one.com) fordi der skelnes mellem store og små bogstaver.
            // men hvis linket ikke laves små så virker det ikke med #hvad_er_MySQL
            if($menu){

               if($linktolower){

                  $ahreftag .= utf8strtolower($tekst);

               }else{

                  $ahreftag .= $tekst;

               }

            }

            if($overskrift == $GLOBALS['setup']['l_uniholder_subjetsonpage']){

               // htmlentities fucker op i tegn som æøå
               //$titletekst = "hop til &quot;" . my_mb_ucfirst(htmlentities($key, ENT_COMPAT, 'UTF-8')) . "&quot; på denne side";
               $titletekst = "hop til &quot;" . my_mb_ucfirst($key) . "&quot; på denne side";

            }elseif($overskrift == "download"){

               $titletekst = "download &quot;" . utf8strtolower($tekst) . "&quot;";

            }else{

               //$titletekst = "gå til &quot;" . $key . "&quot;";

            }

            if(isset($titletekst)){

               $ahreftag_ekstra = 'title="' . my_mb_ucfirst($titletekst) . '"';

            } else {

               $ahreftag_ekstra = '';

            }

            $indhold .= ahref(htmlentities($ahreftag, null, 'UTF-8'), my_mb_ucfirst($key), $ahreftag_ekstra);

            $indhold .= '</div>';
            $indhold .= "\r\n";

         }
         }

      }

   }else{

         $indhold .= "         <div>$data</div>"."\r\n";

   }

   $indhold .= '      </div>'."\r\n";
   $indhold .= '   </div>'."\r\n";
   $indhold .= "\r\n";
//   $indhold .= '   ' . lidtplads('lodret')."\r\n";
//   $indhold .= "\r\n";

   return $indhold;

   }

}



function topmenu($overskrift, $data){

   $indhold = '';
   $overskrift = trim($overskrift);
   $link = '';

   $indhold .= '            <li>'."\r\n";
   $indhold .= '               <a class="bordertype1transparent">' . my_mb_ucfirst($overskrift) . '</a>'."\r\n";
   $indhold .= '               <ul class="ulpunktb background_color_9 bordertype1">'."\r\n";

      foreach($data as $normalmenuoverskrift => $value){

         $ekstra = '';

         if($normalmenuoverskrift != '0'){

            // hent normal menu
            $normalmenuoverskrifttitle = my_mb_ucfirst($value[key($value)]);
            $normalmenuoverskrifttitle = trim($normalmenuoverskrifttitle); // fjern eventuelle mellerum før og efter pga validering
            $normalmenutekst = key($value);

            (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] != '')
               ? $link = $_SERVER['PHP_SELF'] . '?' . htmlspecialchars($_SERVER['QUERY_STRING'])
               : $link = $_SERVER['PHP_SELF'];

            if($link == $normalmenutekst){

               $ekstra = ' id="aktuelside"';

            }

            $indhold .= '                  <li>' . ahref($normalmenutekst, my_mb_ucfirst($normalmenuoverskrift), 'title="' . $normalmenuoverskrifttitle . '"'.$ekstra.'') . '</li>' . "\r\n";

         }else{

            // hent undermenu
            foreach($data as $array){

               foreach($array as $undermenuoverskrift => $noget){

                  if(is_array($noget)){

                     $indhold .= '               <li>' . "\r\n";
                     $indhold .= '                  <a><span class="sub">' . my_mb_ucfirst($undermenuoverskrift) . '</span></a>' . "\r\n";
                     $indhold .= '                  <ul class="ulpunktc background_color_9 bordertype1">'."\r\n";

                     foreach($noget as $submenukey => $submenuvalue){

                        $ekstra = '';

                        if($submenukey != 'logo' && $submenukey != 'thumbnail'){

                           $submenutitle = my_mb_ucfirst($submenuvalue[key($submenuvalue)]);
                           $submenutekst = $submenukey;
                           $linknoget = key($submenuvalue);

                           if($_SERVER["PHP_SELF"] == $linknoget){

                              $ekstra = ' id="aktuelside"';

                           }

                           $indhold .= '                     <li>' . ahref($linknoget, my_mb_ucfirst($submenutekst), 'title="' . $submenutitle . '"'.$ekstra.'') . '</li>' . "\r\n";

                        }

                     }

                     $indhold .= '                  </ul>'."\r\n";
                     $indhold .= '               </li>'."\r\n";
                     $indhold .= "\r\n";

                  }

               }

            }

         }

      }

   $indhold .= '               </ul>'."\r\n";
   $indhold .= '            </li>'."\r\n";
   $indhold .= "\r\n";

   return $indhold;

}



function visminemail(){

   return '<span class="foratundgaspam">'.noscript('[' . $GLOBALS['setup']['l_contact_d'] . ']').'</span>';

}



function return_bytes($data){

   $data = trim($data);
   $last = strtolower($data[strlen($data)-1]);

   switch($last){

      case 'k' :
         $data *= 1024;
         break;

      case 'm' :
         $data *= 1024;
         $data *= 1024;
         break;

      case 'g' :
         $data *= 1024;
         $data *= 1024;
         $data *= 1024;
         break;

      case 't' :
         $data *= 1024;
         $data *= 1024;
         $data *= 1024;
         $data *= 1024;
         break;

      default :
         break;

   }

   return $data;

}



function vismappe_element(
     $handling
   , $mappe
   , $filnavn
   , $filfuldsti
   , $tekst
   ){

   $indhold = '';
   $venstre = '';
   $hojre = '';
   $linie = '';
   $www = '';
   $popupbilled = '';
   $visbilledpopup = false;
   $dialogikon = 'page_white_put.png';

   $filnavnutf8encoded = utf8_encode($filnavn);
   $rawurlencodedfilnavn = iconv('cp1252', 'utf-8', $filnavnutf8encoded);
   $rawurlencodedfilnavn = rawurlencode(utf8_decode($rawurlencodedfilnavn));

   if($handling == "fil"){

      //if(($storrelse = filesize($GLOBALS['setup']['rodenogdatamappe'] . '/' . $mappe . '/' . $filnavn)) !== FALSE){
      if(($storrelse = filesize($GLOBALS['setup']['roden'] . '/' . $mappe . '/' . $filnavn)) !== FALSE){

         $storrelse = round($storrelse / 1024, 0);
         $storrelse .= " KB";

      }else{

         $storrelse = "ukendt";
         //trigger_error('filesize() kunne ikke finde filstørrelsen på (' . $GLOBALS['setup']['rodenogdatamappe'] . '/' . $mappe . '/' . $filnavn . ') og returnerede false');
         trigger_error('filesize() kunne ikke finde filstørrelsen på (' . $GLOBALS['setup']['roden'] . '/' . $mappe . '/' . $filnavn . ') og returnerede false');

      }




      $filendelse = substr(strrchr($filnavn, '.'), 1); // hent slutningen af fil navnet efter punktum

      switch(strtolower($filendelse)){

         case "ico" :
         case "bmp" :
         case "gif" :
         case "jpg" :
         case "jpeg" :
         case "png" :
         case "svg" :
            $ikon = "picture.png";
            break;

         case "pdf" :
            $ikon = "page_white_acrobat.png";
            break;

         case "oga" :
         case "mp3" :
         case "wav" :
         case "m4a" :
         case "wma" :
         case "weba" :
            $ikon = "sound.png";
            break;

         case "ogv" :
         case "mp4" :
         case "webm" :
         case "mpg" :
         case "wmv" :
            $ikon = "film.png";
            break;

         case "css" :
            $ikon = "css.png";
            break;

         case "js" :
            $ikon = "script_code.png";
            break;

         case "txt" :
         case "srt" :
         case "vtt" :
         case "ttml" :
            $ikon = "page_white_text.png";
            break;

         case "php" :
            $ikon = "page_white_php.png";
            break;

         case "html" :
            $ikon = "html.png";
            break;

         case "zip" :
            $ikon = "page_white_zip.png";
            break;

         case "exe" :
            $ikon = "application_double.png";
            break;

         default :
            $ikon = "page_white.png";
            break;

      }

      if(basename($_SERVER['PHP_SELF']) == "rss.php"
      || basename($_SERVER['PHP_SELF']) == "nyhederdatabase.php"){

         $visbilledpopup = false;

      }


   }elseif($handling == "mappe"){

         switch($tekst){

            case ".." :
               $ikon = "folder_up.png";
               $storrelse = "tilbage";
               break;

            default :
               $ikon = "folder.png";
               $storrelse = "mappe";
               break;

         }

   }else{

      $ikon = 'page_white.png';
      $storrelse = lidtplads('vandret');

   }

   $filikon            = visbilled('2', 'ikoner/' . $ikon, '*', '', null, null, 'class="upload_ikonholder upload_ikon ikon16x16"', null, '16', '16');
   $dialogikonhtmlkode = visbilled('2', 'ikoner/' . $dialogikon, 'åbn/gem dialog...', '', null, null, 'class="ikon16x16"', null, '16', '16');

   if($visbilledpopup){

      $idnummer = 'downloaduploadpopup_' . byttegn($tekst);

      $popupbilled .= '<span id="' . $idnummer . '" class="displaynone">';
      $popupbilled .= visbilled('0', $GLOBALS['setup']['datamappe'] . '/' . $mappe . '/' . $rawurlencodedfilnavn, 'billed', '', null, false, null, null, '300', null, null, null, null, true);
      $popupbilled .= '</span>';

   }

   if($mappe == 'download'){

      $dialog = ahref($GLOBALS['setup']['domainogdatamappe'] . '/' . $GLOBALS['setup']['downloadmappe'] . '/dialog/hent/' . $mappe . '/' . $rawurlencodedfilnavn, $dialogikonhtmlkode);

   }

   $tomtfelt = '&nbsp;';

   $b = "Brugermanual";
   $s = "Servicemanual";
   $e = "El diagram";
   $r = "Reservedelskatalog";

   if(strpos($filnavn, "brugermanual")){
      $typeb = '<span title="' . $b . '">B</span>';
      $types = $tomtfelt;
      $typee = $tomtfelt;
      $typer = $tomtfelt;
   }elseif(strpos($filnavn, "servicemanual")){
      $typeb = $tomtfelt;
      $types = '<span title="' . $s . '">S</span>';
      $typee = $tomtfelt;
      $typer = $tomtfelt;
   }elseif(strpos($filnavn, "eldiagram")){
      $typeb = $tomtfelt;
      $types = $tomtfelt;
      $typee = '<span title="' . $e . '">E</span>';
      $typer = $tomtfelt;
   }elseif(strpos($filnavn, "reservedele")){
      $typeb = $tomtfelt;
      $types = $tomtfelt;
      $typee = $tomtfelt;
      $typer = '<span title="' . $r . '">R</span>';
   }elseif(strpos($filnavn, "brugerogservicemanual")){
      $typeb = '<span title="' . $b . '">B</span>';
      $types = '<span title="' . $s . '">S</span>';
      $typee = $tomtfelt;
      $typer = $tomtfelt;
   }else{
      $typeb = $tomtfelt;
      $types = $tomtfelt;
      $typee = $tomtfelt;
      $typer = $tomtfelt;
   }



   // ikon
   //$venstre .= '<span class="">';
   //$venstre .= '<span class="upload_ikonholder upload_ikon">';
   $venstre .= $filikon;
   //$venstre .= '</span>';
   //$venstre .= '</span>';

   $venstre .= ' '; // så der er et mellemrum mellem ikon og tekst i RSS.php

   // tekst eller filnavn
   //$venstre .= '<span class="">';
   $venstre .= '<span class="upload_filnavnholder upload_filnavn">';
   $venstre .= $tekst;
   $venstre .= '</span>';
   //$venstre .= '</span>';

   $venstre .= ' '; // så der er et mellem rum så tekst og B ikke står helt op hinanden i RSS.php


   $hojre .= '<span class="filhojreholder">';

   if($typeb == $tomtfelt &&
      $types == $tomtfelt &&
      $typee == $tomtfelt &&
      $typer == $tomtfelt){

   }else{

      // B S E R
      $hojre .= ''
         . '<span class="upload_brugermanual upload_brugermanualfarve">'
         . $typeb
         . '</span>'

         . '<span class="upload_servicemanual upload_servicemanualfarve">'
         . $types
         . '</span>'

         . '<span class="upload_eldiagram upload_eldiagramfarve">'
         . $typee
         . '</span>'

         . '<span class="upload_reservedele upload_reservedelefarve">'
         . $typer
         . '</span>'
         ;

   }

   $hojre .= ' '; // så der er et mellem rum så R ikke står helt op af 1234KB i RSS.php



   // filstørrelse
   //$hojre .= '<span class="">';
   $hojre .= '<span class="upload_filstorrelseholder upload_filstorrelse">';
   $hojre .= $storrelse;
   $hojre .= '</span>';
   //$hojre .= '</span>';

   $hojre .= '</span>';



   $linie .= $venstre;
   $linie .= $hojre;
//   $linie .= clearboth();

//   ($visbilledpopup)
//      ? $www .= ahref($GLOBALS['setup']['domainogdatamappe'] . '/' . $mappe . '/' . $rawurlencodedfilnavn, $linie, 'onmouseover="TagToTip(\'' . $idnummer . '\');" onmouseout="UnTip();"')
//      : $www .= ahref($GLOBALS['setup']['domainogdatamappe'] . '/' . $mappe . '/' . $rawurlencodedfilnavn, $linie);

//   ($visbilledpopup)
//      ? $www .= ahref($GLOBALS['setup']['domain'] . '/' . $mappe . '/' . $rawurlencodedfilnavn, $linie, 'onmouseover="TagToTip(\'' . $idnummer . '\');" onmouseout="UnTip();"')
//      : $www .= ahref($GLOBALS['setup']['domain'] . '/' . $mappe . '/' . $rawurlencodedfilnavn, $linie);

   ($visbilledpopup)
      ? $www .= ahref('/' . $mappe . '/' . $rawurlencodedfilnavn, $linie, 'class="filholder filholdersub fontfamily_2 fontsize_small" onmouseover="TagToTip(\'' . $idnummer . '\');" onmouseout="UnTip();"')
      : $www .= ahref('/' . $mappe . '/' . $rawurlencodedfilnavn, $linie, 'class="filholder filholdersub fontfamily_2 fontsize_small"');

   $indhold .= $popupbilled;

//   $indhold .= '<div class="filholder filholdersub fontfamily_2 fontsize_small">';
//   $indhold .= '<div class="">';

   if(isset($dialog)){

      $indhold .= '<span class="abngemdialogikonholder abngemdialogikon">';
      //$indhold .= '<span class="">';
      $indhold .= $dialog;
      //$indhold .= '</span>';
      $indhold .= '</span>';

   }

   $indhold .= $www;

//   $indhold .= '</div>';
//   $indhold .= '</div>';
//   $indhold .= "\r\n";

   return $indhold;

}



function vismappe($mappe = ''){

   $indhold = '';

   //$standardmappe = $GLOBALS['setup']['downloadmappe'];

   if($mappe == ''){

      if(isset($_SERVER["QUERY_STRING"]) && $_SERVER["QUERY_STRING"] != ''){

         //$mappe = $_SERVER["QUERY_STRING"];

      }else{

         $mappe = $standardmappe;

      }

   }

   $indhold .= '<!--ignore-->' . "\r\n";
   $indhold .= '<div class="fillisteholder">' . "\r\n";

   //if(substr($mappe, 0, strlen($standardmappe)) == $standardmappe){

      //$filer = hentfilliste("filer", $GLOBALS['setup']['datamappe'] . "/" . $mappe);
      //$filer = hentfilliste("filer", $GLOBALS['setup']['roden'] . "/" . $mappe);
      $filer = hentfilliste("filer", $mappe);

      foreach($filer as $filfuldsti){

         $filfuldsti = utf8_encode($filfuldsti);
         $filfuldstibasename = basename($filfuldsti);

         // hvis ikke skjulte filer som starter med punktum (.)
         // som .htaccess og .pureftpd-upload.4d549482.15.529a.eba1ee30 som er en midertidlig fil som laves når en fil uploades og slettes når filen er uploadet.
         if($filfuldstibasename[0] != "."){

            $indhold .= vismappe_element('fil', $mappe, $filfuldstibasename, $filfuldsti, $filfuldstibasename);

         }

      }

   //}else{

     // $indhold .= 'ugyldig mappe (' . $mappe . ')';
     // trigger_error('ugyldig mappe (' . $mappe . ')');

   //}

   $indhold .= '</div>' . "\r\n";
   $indhold .= '<!--ignore-->' . "\r\n";

   return $indhold;

}



function visforeslalink($overskrift){

   $indhold = "";

   $indhold .= "<!--ignore-->";

   if(isset($_POST["funktion"]) && $_POST["funktion"] == 'sendlinkforeslag'){

      if(sendemail($GLOBALS['setup']['email_emne_foreslalink'], 'link : ' . $_POST['link'])){

         $indhold .= beskedenblevsendt(true);

      }else{

         $indhold .= beskedenblevsendt(false);

      }

   }else{

      $indhold .= ''
         . formbox('1', '', $overskrift, $_SERVER['PHP_SELF'], 'post', '', ''
            . input('0', 'hidden', 'funktion', 'sendlinkforeslag')
            . input('0', 'url', 'link', '', '30', 'adresse', 'foreslalink_adresse', '', 'required')
            . input('0', 'submit', 'foresla_knap', 'Send besked')
         );

   }

   $indhold .= "<!--ignore-->";

   return $indhold;

}



function sendemail($emne, $besked, $fra = ''){

   if(!$GLOBALS['setup']['lokalt']){

      $headers = '';

      if($fra != ''){

         $headers .= 'From: ' . $fra . ' <' . $fra . '>' . "\r\n";

      }else{

         $headers .= 'From: ' . $GLOBALS['setup']['minemail'] . ' <' . $GLOBALS['setup']['minemail'] . '>' . "\r\n";

      }

      $headers .= "Content-type: text/plain; charset=utf-8\r\n"; // sæt til samme encoding som HTML siden hvor formular sendes

      $til = $GLOBALS['setup']['minemail'];

      $besked = wordwrap($besked, 70, "\r\n"); // linier må ikke være større end 70 tegn i følge PHP manualen
      $besked = str_replace("\r\n", "\n", $besked); // skal åbenbart kun have \n som linieskift
      $besked = str_replace("\n.", "\n..", $besked); // windows fjerner linier som begynder med punktum
      $besked = str_replace("<br>", "\r\n", $besked); // lav <br> om til linieskift

      trigger_error("Dette er ikke en fejl - Email forsøges sendt\r\n" . $emne . "\r\n" . $besked . "\r\n" . $headers);

      // one.com begrænser eksterne fra email adresse så man max kan sende 20 per dag og mail() vil derefter returner false.
      // brug derfor en intern email adresse som xxx@domain.dk og viderestil disse emails til en ektern email adresse hvis det ønskes.
      if(mail($til, $emne, $besked, $headers)){

         return true;

      }else{

         return false;

      }

   }

}



function emailblevsendt($value, $besked = ''){

   if($besked != ''){

      $besked .= "<br><br>";

   }

   if($value){

         $besked .= 'E-mail blev sendt med succes og vodka.<br>';

   }else{

         $besked .= 'E-mail blev <span class="bold" style="color: #f00;">IKKE</span> sendt.<br><br>';
         $besked .= 'Serveren ville af en eller anden grund ikke sende e-mailen.<br><br>';

   }

   $besked .= 'Du kan eventuelt '.kontaktemig().' eller skrive direkte til ' . visminemail();

   echo visdel("E-mail status", $besked);

}



function beskedenblevsendt($handling){

   $indhold = '';

   if($handling){

      $indhold .= '<div class="textaligncenter">';
      $indhold .= visbilled('2', 'ikoner/brevsendt.png', 'brev sendt', null, null, null, 'class="margintype1"') . "\r\n";
      //$indhold .= lidtplads('lodret');
      $indhold .= 'Beskeden blev sendt.';
      $indhold .= '</div>';

   }else{

      $indhold .= '<div class="textaligncenter">';
      $indhold .= visbilled('2', 'status/udrabstegn.png', 'udråbstegn', null, null, null, 'class="margintype1"') . "\r\n";
      $indhold .= 'Ups' . "\r\n";
      $indhold .= "\r\n";
      //$indhold .= lidtplads('lodret');
      $indhold .= 'Beskeden blev af en eller anden grund ikke sendt.' . "\r\n";
      $indhold .= "\r\n";
      $indhold .= 'Kontakt mig eventuelt direkte på ' . visminemail() . '.';
      $indhold .= '</div>';

   }

   $indhold .= "\r\n";

   return $indhold;

}



function viskontakt($billed = true, $overskrift = ''){

   $indhold = '';

   if(isset($_POST["funktion"]) && $_POST["funktion"] == "kontakt"){

      (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
         ? $spamip_HTTP_X_FORWARDED_FOR = $_SERVER["HTTP_X_FORWARDED_FOR"]
         : $spamip_HTTP_X_FORWARDED_FOR = 'aner det ikke';

      (isset($_SERVER["REMOTE_ADDR"]))
         ? $spamip_REMOTE_ADDR = $_SERVER["REMOTE_ADDR"]
         : $spamip_REMOTE_ADDR = 'aner det ikke';

      if(isset($_POST["message"])){

         if($_POST["message"] == ''){

            if(sendemail(
                  $GLOBALS['setup']['email_emne_kontakt']
                  , $_POST["kommentar"] . "\r\n\r\n"
                     . 'Sendt fra : ' . $GLOBALS['setup']['domain'] . $_SERVER['PHP_SELF']
                  //   . 'message : ' . $_POST["message"] . "\r\n\r\n"
                  //   . 'HTTP_X_FORWARDED_FOR : ' . $spamip_HTTP_X_FORWARDED_FOR . "\r\n\r\n"
                  //   . 'REMOTE_ADDR : ' . $spamip_REMOTE_ADDR . "\r\n\r\n"
                  , $_POST["afsender"]
            )){

               $indhold .= beskedenblevsendt(true);

            }else{

               $indhold .= beskedenblevsendt(false);
               $indhold .= ''
                  . formbox('1', '', $overskrift, $_SERVER['PHP_SELF'], 'post', '', ''
                  . input('0', 'textarea', 'kommentar', $_POST["kommentar"], '40x14', 'Besked', 'kontakt_besked_b')
               );

            }

         }else{
/*
            (isset($_POST["afsender"]))
               ? $dasdsa_afsender = $_POST["afsender"]
               : $dasdsa_afsender = 'ikke sat';

            trigger_error(
                'Sikkert spam! "message" er ikke tom : ("' . $_POST["message"] . '")'
               .' og HTTP_X_FORWARDED_FOR : (' . $spamip_HTTP_X_FORWARDED_FOR . ')'
               .' og REMOTE_ADDR : (' . $spamip_REMOTE_ADDR . ')'
               .' og $_POST["kommentar"] : (' . $_POST["kommentar"] . ')'
               .' og Sendt fra : (' . $_SERVER['PHP_SELF'] . ')'
               .' og $_POST["afsender"] : (' . $dasdsa_afsender . ')'
               );
*/
            $indhold .= 'Det lader til at der blev forsøgt at sende spam.';

         }

      }else{

         trigger_error('message er ikke sat. Måske en fejl i formularen');

         $indhold .= 'Måske en fejl i formularen.';

         $indhold .= ''
            . formbox('1', '', $overskrift, $_SERVER['PHP_SELF'], 'post', '', ''
            . input('0', 'textarea', 'kommentar', $_POST["kommentar"], '40x14', 'Besked', 'kontakt_besked_b')
         );

         sendemail($GLOBALS['setup']['email_emne_kontakt'] . ' - message er ikke sat', 'HTTP_X_FORWARDED_FOR : ' . $spamip_HTTP_X_FORWARDED_FOR . "\r\n\r\n" . 'REMOTE_ADDR : ' . $spamip_REMOTE_ADDR . "\r\n\r\n" . $_POST["kommentar"] . "\r\n\r\n" . 'Sendt fra : ' . basename($_SERVER['PHP_SELF']), $_POST["afsender"]);

      }

   }else{

      if($billed){

         $indhold .= visbilled('2', 'ikoner/kontaktdyranimation.gif', 'dyr på blyant', null, null, null, 'class="kontaktdyr"', null, '68', '57');

      }

      $indhold .= ''
         . formbox('1', '', $overskrift, $_SERVER['PHP_SELF'], 'post', '', ''
            . input('0', 'hidden', 'funktion', 'kontakt')
            . input('1', 'email', 'afsender', '', '40', $GLOBALS['setup']['l_contactform_from'], 'kontakt_afsender_c', '', 'required')
            . input('1', 'textarea', 'kommentar', '', '40x5', $GLOBALS['setup']['l_contactform_message'], 'kontakt_besked_c', '', 'required')
            . input('1', 'text', 'message', '', '', '', '', 'antispam') // bruges mod spam. linien skal være der
            . input('1', 'submit', 'kontakt_sendknap_b', $GLOBALS['setup']['l_contactform_submit'], '', 'rykind', 'kontakt_sendknap_c')
            . '<div class="textaligncenter margintype0">' . my_mb_ucfirst($GLOBALS['setup']['l_contactform_alternative']) .' ' . visminemail() . '</div>'
         );

      $indhold .= ''
         //. '<div class="textaligncenter">' . my_mb_ucfirst($GLOBALS['setup']['l_contactform_alternative']) .' ' . visminemail() . '</div>'
         ;

   }

   return $indhold;

}



function galleri(
     $handling
   , $filurl = ''
   , $sidelink = ''
   , $tekst = ''
   , $onmouseover = '0'
   , $kmt = ''
   , $type = ''
   ){

   $indhold = '';

   if(is_array($tekst)){

      $tekstb = array();

      foreach($tekst as $value){

         if($value == ''){

            $value = '&nbsp;';

         }

         $tekstb[] = my_mb_ucfirst($value);

      }

      $tekst = implode('<br>', $tekstb);

   }else{

      $tekst = my_mb_ucfirst($tekst);

   }

   if($tekst == ''){

      $alttekst = $sidelink;

   }else{

      $alttekst = $tekst;
      $alttekst = str_replace("<br>", " ", $alttekst);
      $alttekst = str_replace("&nbsp;", "", $alttekst);
      $alttekst = str_replace('"', '', $alttekst); // Hvis <span style="xxx"> så er det ikke så godt fordi " fucker alt og title koden op.... alt="<span style="xxx">"
      $alttekst = trim($alttekst);

   }

   $titletekst = $alttekst;

   if(isset($sidelink)){

      //$sidelink = str_replace("-", "_", $sidelink);

   }

  switch($handling){

      case 'logo' :

         $indhold .= '<div class="producent borderradius5px">';

         $indhold .= ahref($filurl
            , visbilled('1', 'logoer/' . $sidelink . '.png', 'Hop til &quot;' . my_mb_ucfirst($tekst) . '&quot; på denne side', false, null, null, null, null, '90', '67')
            );

         $indhold .= '</div>';
         break;

      case 'logob' :

         $indhold .= '<div class="producent borderradius5px">';

         $indhold .= ahref($filurl
            , visbilled('1', 'logoer/' . $sidelink, 'Gå til &quot;' . my_mb_ucfirst($tekst) . '&quot; siden', false, null, null, null, null, '90', '67')
            );

         $indhold .= '</div>';
         break;

      case 'scooter' :

         if(stripos($sidelink, '_') === 0){

            $billedefil = 'manglerbillede';

         }else{

            $billedefil = $sidelink;

         }

         if($GLOBALS['setup']['lavthumbnailslille'] || $GLOBALS['setup']['lavthumbnailsmellem']){

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
               $billed .= 'filnavn=' . $GLOBALS['setup']['datamappe'] . '/' . $GLOBALS['setup']['billedmappe'] . '/' . $sidelink . '.jpg&amp;';
               $billed .= 'storrelse=lille';

               $indhold  = '';
               $indhold .= '<div class="scootermodel borderradius5px">';
               $indhold .= ahref($filurl . '#' . $sidelink, visbilled('0', $billed, $alttekst, '', null, null, null, null, '180', '160'));

               $indhold .= '<div class="thumbnailtekst fontsize_small">';
               $indhold .= ahref($filurl . '#' . $sidelink, my_mb_ucfirst($tekst));
               $indhold .= '</div>';

               $indhold .= clearboth();

               $indhold .= '</div>';

            }

            if($GLOBALS['setup']['lavthumbnailsmellem']){

               $indhold .= visbilled('0', $GLOBALS['setup']['datamappe'] . '/' . 'php/thumbnail.php?filnavn=' . $GLOBALS['setup']['datamappe'] . '/' . $GLOBALS['setup']['billedmappe'] . '/' . $sidelink . '.jpg&storrelse=mellem', $sidelink, '', null, null, null, '550', '400');

            }

         }else{

            $indhold .= '<div class="scootermodel borderradius5px">';

            $indhold .= ahref(
$filurl . '#' . $sidelink
, visbilled(
'1'
, 'thumbnails/lille/' . $billedefil . '.jpg'
, $alttekst
, null
, null
, null
, null
, null
, '180'
, '160'));

            $indhold .= '<div class="thumbnailtekst fontsize_small">';
            $indhold .= ahref($filurl . '#' . $sidelink, my_mb_ucfirst($tekst));
            $indhold .= '</div>';

            $indhold .= '</div>';

         }

         break;

      case 'link' :
      case 'linkb' :
      case 'thumbnail' :

         if($GLOBALS['setup']['lavthumbnailslille'] || $GLOBALS['setup']['lavthumbnailsmellem']){

            if($GLOBALS['setup']['lavthumbnailsmellem']){

               $indhold .= visbilled('0', $GLOBALS['setup']['datamappe'] . '/' . 'php/thumbnail.php?filnavn=' . $GLOBALS['setup']['datamappe'] . '/' . $GLOBALS['setup']['billedmappe'] . '/' . $sidelink . '.jpg&storrelse=mellem', $sidelink, '', null, null, null, '550', '400');

            }

         }

         if($handling == 'link' || $handling == 'linkb'){

            $ekstrakode = 'target="_blank"';

         }

         $indhold .= '<div class="scootermodel borderradius5px">';

         if($handling == 'link'){

            $indhold .= ahref($filurl, visbilled('1', 'links/' . $sidelink . '.jpg', $alttekst . ' screenshot', '', null, null, null, null, '180', '160'), $ekstrakode);

         }elseif($handling == 'linkb'){

            $indhold .= ahref($filurl, visbilled('0', $GLOBALS['setup']['domainogdatamappe'] . '/billeder/links/' . $sidelink . '.jpg', $alttekst . ' screenshot', '', null, null, null, null, '180', '160'), $ekstrakode);

         }elseif($handling == 'thumbnail'){

            $indhold .= ahref($filurl, visbilled('1', 'thumbnails/' . $sidelink, $alttekst, '', null, null, null, null, '180', '160'));

         }

         if($tekst != ""){

            $indhold .= '<div class="thumbnailtekst fontsize_small">';

            if($handling == 'link' || $handling == 'linkb'){

               $indhold .= ahref($filurl, $tekst, $ekstrakode);

            }else{

               $indhold .= ahref($filurl, $tekst);

            }

            $indhold .= '</div>';

         }

         $indhold .= '</div>';
         break;

      case 'highslide' :
      case 'highslidestandard' :


         if($handling == 'highslide'){

            $indhold .= '<div class="highslidenoget borderradius5px">';

            $indhold .= ahref('billeder/' . $sidelink,
               visbilled('1', 'thumbnails/' . $sidelink, $alttekst, '', null, null, null, null, '180', '160'),
                  'class="highslide" onclick="return hs.expand(this, { captionEval: \'this.thumb.alt\' })"'
            );
            $indhold .= '<div class="highslide-caption">' . '</div>';

            if($tekst != ""){

               $indhold .= '<div class="thumbnailtekst fontsize_small">';

               if($handling == 'link' || $handling == 'linkb'){

                  $indhold .= ahref($filurl, $tekst, $ekstrakode);

               }else{

                  $indhold .= $tekst;

               }

               $indhold .= '</div>';

            }

            $indhold .= '</div>';

         }elseif($handling == 'highslidestandard'){

            $indhold .= '<div style="text-align: center; margin: 10px 0;">';
            $indhold .= ahref('billeder/' . $filurl . '',
               visbilled('1', 'thumbnails/' . $sidelink . '', $alttekst, '', null, null, null, null, null, null, null, null, null, null, 'vertical-align: bottom; border: 3px dotted blue;'),
                  'class="highslide" onclick="return hs.expand(this, { captionEval: \'this.thumb.alt\' })"'
            );
            $indhold .= '<div class="highslide-caption">' . '</div>';
            $indhold .= '</div>';

         }

         break;

      case 'normal' :

         $indhold .= '<div class="scootermodel borderradius5px">';

         $indhold .= ahref($filurl, visbilled('1', $sidelink, $alttekst, '', null, null, null, null, '180', '160'));

         if($tekst != ""){

            $indhold .= '<div class="thumbnailtekst fontsize_small">';
            $indhold .= ahref($filurl, my_mb_ucfirst($tekst));
            $indhold .= '</div>';

         }

         $indhold .= '</div>';
         break;

      case 'start' :

         $indhold .= '<div class="galleriholder">';
         break;

      case 'slut' :

         $indhold .= clearboth();
         $indhold .= '</div>';
         break;

      default :

         break;

   }

   $indhold .= "\r\n";

   return $indhold;

}



function hentfilliste($handling, $mappe = ''){

   $liste = array();

   ($mappe == '')
      ? $mappe = "{$GLOBALS['setup']['roden']}"
      : $mappe = "{$GLOBALS['setup']['roden']}/$mappe";

   if(file_exists($mappe)){

      $mappehandle = opendir($mappe);

      if($mappehandle != FALSE){

         while(($fil = readdir($mappehandle)) !== false){

            if($fil != "." && $fil != ".."){

               if(is_dir("$mappe/$fil")){

                  if($handling == "mapper"){

                     $liste[] = "$mappe/$fil";

                  }

               }else{

                  if($handling == "filer"){

                     $liste[] = "$mappe/$fil";

                  }

               }

            }

         }

         closedir($mappehandle);

         natcasesort($liste);

         return $liste;

      }

   }

}



function checkomfindesellersopret($handling, $sti, $relativ = false){

   if($relativ){

      $sti = $GLOBALS['setup']['roden'] . '/' . $GLOBALS['setup']['datamappe'] . '/' . $sti;

   }

   switch ($handling){

      case "fil" :

         if(!file_exists($sti)){

            // forsøg at oprette filen
            if($filhandle = @fopen($sti, "a")){

               fclose($filhandle);
               return true;

            }else{

               trigger_error("Kunne ikke oprette filen: \"$sti\".", E_USER_ERROR);
               return false;

            }

         }else{

            return true;

         }

         break;

      case "mappe" :

         if(file_exists($sti) && is_file($sti)){

               trigger_error("Der findes en fil med samme navn som mappen der blev forsøgt oprettet: \"$sti\".", E_USER_ERROR);
               return false;
         }

         if(!file_exists($sti)){

            //forsøg at oprette filen
            if(mkdir($sti)){

               return true;

            }else{

               trigger_error("Kunne ikke oprette mappen: \"$sti\".", E_USER_ERROR);
               return false;

            }

         }else{

            return true;

         }

         break;

   }

}



function formbox(
     $formholder
   , $name
   , $overskrift
   , $action
   , $method
   , $ekstraformkode
   , $inputs
   ){

   $indhold = '';
   $indhold .= '<!--ignore-->';

   if($method != 'get' && $method != 'post'){

      trigger_error('form method (' . $method . ') er ikke get eller post');

   }

/*
   if(isset($overskrift) && $overskrift != ''){

      $indhold .= '<div class="formoverskrift">';
      $indhold .= my_mb_ucfirst($overskrift);
      $indhold .= '</div>';

   }
*/

   if($formholder == '1'){

      $indhold .= '<div class="formholder baggrundlinear1 borderradius5px">';

   }

   $indhold .= form('start', $name, $action, $method, '', $ekstraformkode);

   if(isset($overskrift) && $overskrift != ''){

      $indhold .= '<fieldset class="background_color_2 box_shadow_2 borderradius5px">';
      $indhold .= '<legend class="background_color_2 box_shadow_3">';
      $indhold .= my_mb_ucfirst($overskrift);
      $indhold .= '</legend>';

   }

   $indhold .= $inputs;

   if(isset($overskrift) && $overskrift != ''){

      $indhold .= '</fieldset>';

   }

   $indhold .= form('slut');

   if($formholder == '1'){

      $indhold .= '</div>';

   }

   $indhold .= '<!--ignore-->';
   return $indhold;

}



function form(
     $valg
   , $name = ''
   , $action = ''
   , $method = 'post'
   , $enctype = 'multipart/form-data'
   , $ekstra = ''
   ){

   $indhold = '';

   if($valg == 'start'){

      $indhold .= '<form';

      if($name != ''){

         $indhold .= ' name="'  . $name  . '"';

      }

      $indhold .= ' action="'  . $action  . '"';
      $indhold .= ' method="'  . $method  . '"';


      if($enctype == ''){

         $indhold .= ' enctype="multipart/form-data"';

      }else{

         $indhold .= ' enctype="' . $enctype . '"';

      }

      if($ekstra != ''){

         $indhold .= ' ' . $ekstra;

      }

      $indhold .= '>';

   }elseif($valg == 'slut'){

      $indhold .= '</form>';

   }

   $indhold .= clearboth();

   return $indhold;

}



function input(
     $block
   , $type
   , $name
   , $value
   , $size = ""
   , $label = ""
   , $id = ""
   , $class = ""
   , $ekstra = ""
   , $labelplacering = "før"
   , $maxlength = ""
   , $readonly = ""
   , $src = ""
   , $placeholder = ""
   ){

   $indhold = '';

   switch($type){

      case 'text' :
      case 'file' :
      case 'email' :
      case 'url' :
      case 'search' :
      case 'password' :
      case 'number' :
         $class = "inputtext fontsize_small fontfamily_1 borderradius5px $class";
         break;

      case 'textarea' :
         $class = "inputtextarea fontsize_small fontfamily_1 borderradius5px $class";
         break;

      case 'button' :
      case 'submit' :
      case 'file' :
      case 'reset' :
         $class = "inputknap fontsize_small fontfamily_1 $class";
         break;

      case 'radio' :
      case 'checkbox' :
         $class = "inputradio fontsize_small borderradius5px $class";
         break;

      case 'select' :
         $class = "inputselect fontsize_small fontfamily_1 borderradius5px $class";
         break;

      case 'image' :
         $class = "inputimage borderradius5px $class";
         break;

      case 'hidden' :
         break;

      default :
         trigger_error('ukendt input type valgt : "' . $type . '"');
         break;

   }



   $indhold .= '<div';

   if($type == "hidden"){
      $indhold .= ' class="displaynone"';
   }elseif($block == "0"){
      $indhold .= ' class="displayinline inputinline"';
   }elseif($block == "1"){
      $indhold .= ' class="displayblock inputblock"';
   }

   $indhold .= '>';



   if($type != "hidden"){
      if($id != ""){
         $indhold .= '<label for="' . $id . '">';
         if($label == ""){
         }elseif($label == "rykind"){
            $indhold .= '<span class="labelholderright">';
         }else{
            if($labelplacering == "" || $labelplacering == "før"){
               $indhold .= '<span class="labelholderright">';
               //$indhold .= my_mb_ucfirst($label) . " :";
               $indhold .= my_mb_ucfirst($label) . " :<br>";
            }elseif($labelplacering == "over"){
               $indhold .= '<span class="labelholderleft">';
               $indhold .= my_mb_ucfirst($label) . " :<br>";
            }elseif($labelplacering == "nej"){
               $indhold .= '<span class="labelholderleft displaynone">';
               $indhold .= my_mb_ucfirst($label) . " :<br>";
            }
         }
         if($label != ""){
            $indhold .= '</span>';
         }
         $indhold .= '</label>';
      }
   }

   if($type == "textarea"){
      $indhold .= '<textarea';
   }elseif($type == "select"){
      $indhold .= '<select';
   }else{
      $indhold .= '<input';
      $indhold .= ' type="' . $type . '"';
      if($type == "text" || $type == "email" || $type == "url" || $type == "search" || $type == "number"){
         if($maxlength != ""){
            $indhold .= ' maxlength="' . $maxlength . '"';
         }
         if($readonly == "readonly"){
            $indhold .= ' readonly="' . $readonly . '"';
         }
      }
   }

   if($id != ""){
      $indhold .= ' id="' . $id . '"';
   }

   $indhold .= ' name="' . $name . '"';

   if($type == "textarea"){
      list($cols, $rows) = explode("x", $size);
      $indhold .= ' cols="' . $cols . '"';
      $indhold .= ' rows="' . $rows . '"';
   }else{
      if($type != "select"){
         if(isset($value) && $type != "image"){
            // w3c siger : Attribute value not allowed on element input at this point. (image)
            if($type == "button" || $type == "submit" || $type == "file" || $type == "reset"){
               $indhold .= ' value="' . my_mb_ucfirst($value) . '"';
            }else{
               $indhold .= ' value="' . $value . '"';
            }
         }
         if($type == "image"){
            $indhold .= ' src="' . $src . '"';
            $indhold .= ' alt="' . $value . '"';
         }
      }
      if($type != "radio"){
      if($size != ""){
         $indhold .= ' size="' . $size . '"';
      }
      }
   }

   if($class != ""){
      $class = trim($class);
      $indhold .= ' class="' . $class . '"';
   }

   if($placeholder != ""){
      $indhold .= ' placeholder="' . $placeholder . '"';
   }

   if($ekstra != ""){ $indhold .= ' ' . $ekstra; }

   if($type == "textarea" || $type == "select"){
      // wrap="off" er ikke valid i W3C men brug den alligevel
      // totalvalidator : E620 The 'wrap' attribute is not valid for this tag
      // CSS 1 og 2 understøtter vist ikke textarea wrap noget så godt først i CSS 3
      //if($type == "textarea"){
         //$indhold .= ' wrap="off"';
      //}
      $indhold .= '>';
         if($value != ""){
            $indhold .= $value;
         }
   }else{
      $indhold .= '>';
   }

   if($type == "textarea"){
      $indhold .= '</textarea>';
   }elseif($type == "select"){
      $indhold .= '</select>';
   }


   if($type != "hidden"){
         if($id != ""){
            if($labelplacering == "efter"){
               $indhold .= '<label for="' . $id . '">';
                  $indhold .= " " . my_mb_ucfirst($label);
               $indhold .= '</label>';
            }
         }
   }

   if($type != "hidden"){
      if($block == "1"){
         $indhold .= clearboth();
      }
   }

   $indhold .= '</div>';

   return $indhold;

}



function besog($handling){

   $indhold = '';
   $fil = $GLOBALS['setup']['tempfuld'] . '/' . $GLOBALS['setup']['besogfilnavn'];

   if($handling == "gem"){

      (isset($_SERVER["HTTP_REFERER"]))
         ? $ref = $_SERVER["HTTP_REFERER"]
         : $ref = "";

      (isset($_SERVER["REQUEST_METHOD"]))
         ? $method = $_SERVER["REQUEST_METHOD"]
         : $method = "";

      // udeluk links
      if($ref != ""){
      if(
            stripos($ref, 'http://' . $_SERVER['HTTP_HOST']) !== 0
         && stripos($ref, 'http://au.ask.com/') !== 0
         && stripos($ref, 'http://baotianforum.se') !== 0
         && stripos($ref, 'http://cando.dk') !== 0
         && stripos($ref, 'http://cn.bing.com/') !== 0
         && stripos($ref, 'http://da.m.wikipedia.org/') !== 0
         && stripos($ref, 'http://da.wikipedia.org') !== 0
         && stripos($ref, 'http://da.wikipedia.org/') !== 0
         && stripos($ref, 'http://de.ask.com/') !== 0
         && stripos($ref, 'http://de.images.search.yahoo.com') !== 0
         && stripos($ref, 'http://de.images.search.yahoo.com/') !== 0
         && stripos($ref, 'http://de.search-results.com') !== 0
         && stripos($ref, 'http://de.search.yahoo.com/') !== 0
         && stripos($ref, 'http://dk.ask.com') !== 0
         && stripos($ref, 'http://dk.images.search.yahoo.com/') !== 0
         && stripos($ref, 'http://dk.search.yahoo.com/') !== 0
         && stripos($ref, 'http://dk.yhs4.search.yahoo.com/') !== 0
         && stripos($ref, 'http://du101w.dub101.mail.live.com/') !== 0
         && stripos($ref, 'http://du114w.dub114.mail.live.com/') !== 0
         && stripos($ref, 'http://ebookbrowse.com/') !== 0
         && stripos($ref, 'http://embed.break.com/') !== 0
         && stripos($ref, 'http://emefge.de/') !== 0
         && stripos($ref, 'http://eu.ask.com/web') !== 0
         && stripos($ref, 'http://find.tdc.dk') !== 0
         && stripos($ref, 'http://find.tdc.dk/') !== 0
         && stripos($ref, 'http://forum.finanzen.net/') !== 0
         && stripos($ref, 'http://forum.piaggioape.de/') !== 0
         && stripos($ref, 'http://forum.scootergrisen.dk') !== 0
         && stripos($ref, 'http://fr.ask.com/') !== 0
         && stripos($ref, 'http://fronter.com/') !== 0
         && stripos($ref, 'http://go.mail.ru') !== 0
         && stripos($ref, 'http://go.speedbit.com/') !== 0
         && stripos($ref, 'http://id.images.search.yahoo.com/') !== 0
         && stripos($ref, 'http://image.search.yahoo.co.jp/') !== 0
         && stripos($ref, 'http://images.google.com/') !== 0
         && stripos($ref, 'http://images.google.de/') !== 0
         && stripos($ref, 'http://images.google.fr/') !== 0
         && stripos($ref, 'http://images.google.nl/') !== 0
         && stripos($ref, 'http://images.google/') !== 0
         && stripos($ref, 'http://images.search.conduit.com') !== 0
         && stripos($ref, 'http://images.search.conduit.com/') !== 0
         && stripos($ref, 'http://images.search.yahoo.com') !== 0
         && stripos($ref, 'http://images.search.yahoo.com/') !== 0
         && stripos($ref, 'http://images.yandex.ru/') !== 0
         && stripos($ref, 'http://int.search-results.com') !== 0
         && stripos($ref, 'http://int.search-results.com/') !== 0
         && stripos($ref, 'http://isearch.avg.com') !== 0
         && stripos($ref, 'http://isearch.avg.com/') !== 0
         && stripos($ref, 'http://it.ask.com/') !== 0
         && stripos($ref, 'http://it.extpdf.com/') !== 0
         && stripos($ref, 'http://kereso.startlap.hu/') !== 0
         && stripos($ref, 'http://link.smartscreen.live.com') !== 0
         && stripos($ref, 'http://m.duitang.com/') !== 0
         && stripos($ref, 'http://m.facebook.com') !== 0
         && stripos($ref, 'http://m.facebook.com/') !== 0
         && stripos($ref, 'http://m.peeplo.com/') !== 0
         && stripos($ref, 'http://m.search.seznam.cz/') !== 0
         && stripos($ref, 'http://m.youtube.com') !== 0
         && stripos($ref, 'http://m.youtube.com/') !== 0
         && stripos($ref, 'http://mail.tdc.dk/') !== 0
         && stripos($ref, 'http://media1.break.com/') !== 0
         && stripos($ref, 'http://mixidj.delta-search.com/') !== 0
         && stripos($ref, 'http://mx.images.search.yahoo.com/') !== 0
         && stripos($ref, 'http://nl.ask.com') !== 0
         && stripos($ref, 'http://s.nsdsvc.com') !== 0
         && stripos($ref, 'http://scootergalleri.dk') !== 0
         && stripos($ref, 'http://search.babylon.com') !== 0
         && stripos($ref, 'http://search.conduit.com') !== 0
         && stripos($ref, 'http://search.lycos.it') !== 0
         && stripos($ref, 'http://search.mywebsearch.com') !== 0
         && stripos($ref, 'http://search.seznam.cz') !== 0
         && stripos($ref, 'http://search.seznam.cz/') !== 0
         && stripos($ref, 'http://search.sweetim.com') !== 0
         && stripos($ref, 'http://search.yahoo.com') !== 0
         && stripos($ref, 'http://signon.stofanet.dk') !== 0
         && stripos($ref, 'http://skuterypolnoc.ubf.pl') !== 0
         && stripos($ref, 'http://skutrforum.cz') !== 0
         && stripos($ref, 'http://soeg.jubii.dk/web?q=') !== 0
         && stripos($ref, 'http://stalkerzone.dk') !== 0
         && stripos($ref, 'http://suche.aolsvc.de') !== 0
         && stripos($ref, 'http://suche.t-online.de') !== 0
         && stripos($ref, 'http://techmind.dk/') !== 0
         && stripos($ref, 'http://toolbar.google.com') !== 0
         && stripos($ref, 'http://translate.google.') !== 0
         && stripos($ref, 'http://translate.googleusercontent.') !== 0
         && stripos($ref, 'http://trehjul.dk') !== 0
         && stripos($ref, 'http://tw.image.search.yahoo.com') !== 0
         && stripos($ref, 'http://uk.ask.com') !== 0
         && stripos($ref, 'http://www.baboom.dk') !== 0
         && stripos($ref, 'http://www.bikervietnam.com') !== 0
         && stripos($ref, 'http://www.billig-scooter.dk') !== 0
         && stripos($ref, 'http://www.bing.') !== 0
         && stripos($ref, 'http://www.delta-search.com/') !== 0
         && stripos($ref, 'http://www.eniro.dk/query?') !== 0
         && stripos($ref, 'http://www.ezz.dk') !== 0
         && stripos($ref, 'http://www.facebook.com') !== 0
         && stripos($ref, 'http://www.facebook.com/') !== 0
         && stripos($ref, 'http://www.facebook.com/l.php?u=') !== 0
         && stripos($ref, 'http://www.forum.piaggioape.de/') !== 0
         && stripos($ref, 'http://www.freepdfmanual.com/') !== 0
         && stripos($ref, 'http://www.general-files.com/') !== 0
         && stripos($ref, 'http://www.google.') !== 0
         && stripos($ref, 'http://www.guloggratis.dk') !== 0
         && stripos($ref, 'http://www.guloggratis.dk/') !== 0
         && stripos($ref, 'http://www.hobbielektronika.hu') !== 0
         && stripos($ref, 'http://www.hobbielektronika.hu/') !== 0
         && stripos($ref, 'http://www.jeghaderthansen.dk/') !== 0
         && stripos($ref, 'http://www.kandu.dk') !== 0
         && stripos($ref, 'http://www.kandu.dk/') !== 0
         && stripos($ref, 'http://www.kvasir.no') !== 0
         && stripos($ref, 'http://www.kvasir.no/') !== 0
         && stripos($ref, 'http://www.kymcoforum.com') !== 0
         && stripos($ref, 'http://www.kymcoforum.com/') !== 0
         && stripos($ref, 'http://www.lav-det-selv.dk') !== 0
         && stripos($ref, 'http://www.lav-det-selv.dk/') !== 0
         && stripos($ref, 'http://www.motorcykelforum.dk') !== 0
         && stripos($ref, 'http://www.mystores.dk') !== 0
         && stripos($ref, 'http://www.peeplo.dk') !== 0
         && stripos($ref, 'http://www.peeplo.dk/') !== 0
         && stripos($ref, 'http://www.scootergalleri.dk') !== 0
         && stripos($ref, 'http://www.search-results.com') !== 0
         && stripos($ref, 'http://www.search.ask.com/') !== 0
         && stripos($ref, 'http://www.skutrforum.cz') !== 0
         && stripos($ref, 'http://www.skutrforum.cz/') !== 0
         && stripos($ref, 'http://www.stalkerzone.dk') !== 0
         && stripos($ref, 'http://www.startbasen.dk') !== 0
         && stripos($ref, 'http://www.startsiden.no') !== 0
         && stripos($ref, 'http://www.startsiden.no/') !== 0
         && stripos($ref, 'http://www.suzuki-fz50.dk/') !== 0
         && stripos($ref, 'http://www.tuugo.dk/') !== 0
         && stripos($ref, 'http://www.udvikleren.dk') !== 0
         && stripos($ref, 'http://www.yamasaki-forum.com') !== 0
         && stripos($ref, 'http://www.yamasaki-forum.com/') !== 0
         && stripos($ref, 'http://www.youtube.com') !== 0
         && stripos($ref, 'http://www.youtube.com/') !== 0
         && stripos($ref, 'http://yandex.ru') !== 0
         && stripos($ref, 'http://youtube.com') !== 0
         && stripos($ref, 'https://www.facebook.com/') !== 0
         && stripos($ref, 'https://www.google.') !== 0
         && stripos($ref, 'http://www.searchmobileonline.com/') !== 0
         && stripos($ref, 'http://www.aolsearch.com/') !== 0
         && stripos($ref, 'https://m.facebook.com') !== 0
         && stripos($ref, 'http://www.apriliaforum.com/') !== 0
         && stripos($ref, 'http://www.buzzdock.com/') !== 0
         && stripos($ref, 'http://www1.search-results.com/') !== 0
         && stripos($ref, 'http://techmind.dk') !== 0
         && stripos($ref, 'http://archive.is/') !== 0
         && stripos($ref, 'http://www2.inbox.com/') !== 0
         && stripos($ref, 'http://nortonsafe.search.ask.com/') !== 0
         && stripos($ref, 'http://avg.nation.com/') !== 0
         && stripos($ref, 'http://www.alhea.com/') !== 0
         && stripos($ref, 'http://www.findhurtig.dk/') !== 0
         && stripos($ref, 'http://www.scooterklubben.dk/') !== 0
//         && stripos($ref, '') !== 0

         ){

         if(isset($_SERVER["REQUEST_URI"]) && $_SERVER["REQUEST_URI"] != "" && $_SERVER["REQUEST_URI"] != "/"){

            if(checkomfindesellersopret("fil", $fil)){

               if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){

                  $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];

               }else{

                  (isset($_SERVER["REMOTE_ADDR"]))
                     ? $ip = $_SERVER["REMOTE_ADDR"]
                     : $ip = "aner det ikke";

               }

               $dataud[] = date("j/n/Y H:i:s");
               $dataud[] = date("j/n");

               (substr($ref, 0, 7) == "http://")
                  ? $refc = substr($ref, 7)
                  : $refc = $ref;

               $refa = $ref;
               $refb = $ref;

               if($ref == ''){

                  $refc = "aner det ikke";

               }

               $dataud[] = $refa;
               $dataud[] = $refb;
               $dataud[] = $refc;

               if(isset($_SERVER["REQUEST_URI"]) && $_SERVER["REQUEST_URI"] != ""){

                  $request_uri = $_SERVER["REQUEST_URI"];
                  $request_uria = $request_uri;
                  $request_urib = $GLOBALS['setup']['domain'] . htmlspecialchars($request_uri);

                  // obs : hvis a.php?fil=b.php så står der b.php selvom det ikke var den fil som blev kaldt

                  if($request_uri == "/"){

                     $request_uric = $request_uri;

                  }else{

                     if(strstr($request_uri, '?')){

                        $requestqueryarray = explode('?', $request_uri);
                        $requestqueryarray = $requestqueryarray[0];
                        $request_uric = htmlspecialchars(substr($requestqueryarray, 1, 35));
                        $request_uric = substr(strrchr($request_uric, '/'), 1, 40);

                     }else{

                        $request_uric = htmlspecialchars(substr(strrchr($request_uri, '/'), 1, 35));

                     }


                  }

                  if($request_uric == ""){

                     $request_uric = "&nbsp;";

                  }

               }else{

                  $request_uri = "aner det ikke3";
                  $request_uria = $request_uri;
                  $request_urib = $GLOBALS['setup']['domain'] . '/' . $GLOBALS['setup']['datamappe'] . '/' . $request_uri;
                  $request_uric = $request_uri;

               }


               $dataud[] = $request_uria;
               $dataud[] = $request_urib;
               $dataud[] = $request_uric;
               $dataud[] = $method . ' - ' . $ip;

               $dataud = serialize($dataud);
               $dataud .= "\r\n";

               //$handle = fopen($fil, "r+");
               //fwrite($handle, $dataud);
               //fclose($handle);

               $bytesskrevet = file_put_contents($fil, $dataud, FILE_APPEND | LOCK_EX);

               if($bytesskrevet === false){

                  trigger_error("Der kunne ikke skrives til filen: \"$fil\".", E_USER_ERROR);

               }

            }

         }

      }
      }

   }elseif($handling == "vis"){

      if(file_exists($fil)){
      if(filesize($fil)){

         $filhandle = fopen($fil, 'r');
         $filindholdarray = file($fil);
         fclose($filhandle);

         foreach($filindholdarray as $key => $value){

            $dataind[] = unserialize($value);

         }

         $indhold .= '<div class="besogoverskrift">';
         $indhold .= '<div class="besoga fontsize_xsmall">Tidspunkt</div>';
         $indhold .= '<div class="besogb fontsize_xsmall">Kom måske fra</div>';
         $indhold .= '<div class="besogc fontsize_xsmall">Gik til</div>';
         $indhold .= '<div class="besogd fontsize_xsmall">IP</div>';
         $indhold .= clearboth();
         $indhold .= '</div>';

         $indhold .= '<div style="border-bottom: 1px solid #000;"></div>';
         $indhold .= clearboth();

         $indhold .= '<div>';

         foreach($dataind as $key => $value){

            $indhold .= '<div class="besogholder">';
            $indhold .= '<div class="besoga fontsize_xsmall"><div>' . $value[0] . '</div></div>';
            $indhold .= '<div class="besogb fontsize_xsmall"><div>'.ahref($value[2], htmlspecialchars(substr($value[2], 0, 50))).'</div></div>';
            $indhold .= '<div class="besogc fontsize_xsmall"><div>'.ahref($value[6], $value[7]).'</div></div>';
            $indhold .= '<div class="besogd fontsize_xsmall"><div>' . $value[8] . '</div></div>';
            $indhold .= '</div>';

            $indhold .= clearboth();
            $indhold .= "\r\n";

         }

         $indhold .= '</div>';

         $indhold .= clearboth();

      }else{

         $indhold .= 'Filen "' . basename($fil) . '" er tom.';

      }

      }else{

         $indhold .= 'Filen "' . basename($fil) . '" findes ikke.';

      }

      return $indhold;

   }

}



function gemsogningifil($sogetekst, $antalfundnesider){

   $fil = "{$GLOBALS['setup']['tempfuld']}/{$GLOBALS['setup']['sogetekstfilnavn']}";

   if($antalfundnesider > 99){

      $antalfundnesider = '' . $antalfundnesider;

   }elseif($antalfundnesider > 9){

      $antalfundnesider = ' ' . $antalfundnesider;

   }elseif($antalfundnesider <= 9){

      $antalfundnesider = '  ' . $antalfundnesider;

   }

   if(checkomfindesellersopret("fil", $fil)){

      $tid = date("d-m-Y") . " " . date("H:i:s");

      (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
         ? $ip = $_SERVER["HTTP_X_FORWARDED_FOR"]
         : $ip = $_SERVER['REMOTE_ADDR'];

      if(isset($_SERVER["HTTP_REFERER"])){

         $side = $_SERVER["HTTP_REFERER"];

         if(stripos($side, $GLOBALS['setup']['domain']) === 0){

            $side = str_replace($GLOBALS['setup']['domain']
                                             , ''
                                             , $side
                                             );
         }

      }else{

         $side = '';

      }

      $datatilfil = "$tid - $antalfundnesider fundne sider - $sogetekst - $ip - $side\r\n";

      $bytesskrevet = file_put_contents($fil, $datatilfil, FILE_APPEND | LOCK_EX);

      if($bytesskrevet === false){

         trigger_error("der kunne ikke skrives til filen: \"$fil\".", E_USER_ERROR);

      }

   }

}



function box($breddearray, $tekstarray, $kodeibunden = ''){

   $indhold = '';

   $count = count($breddearray);

   $elementpadding = 3;

   $totalbredde = array_sum($breddearray) + (count($breddearray) * ($elementpadding * 2));

   $tekstarrayhead = array_shift($tekstarray); // tag og fjern den først som til overskriften

   $indhold .= '   <!--ignore-->'."\r\n";
   $indhold .= '   <div class="overflowxauto">'."\r\n"; // gør at en bred table kan scrolles vandret på en lille skærm så man kan se hele tabellen selvom skærmen er for lille til at vise den på en gang
   $indhold .= '   <table class="fontsize_small tablesorter tablesorter-default" style="max-width: ' . $totalbredde . 'px; margin: 1em auto;">'."\r\n";

   $indhold .= '      <thead>'."\r\n";
   $indhold .= '         <tr>'."\r\n";

   if(count($tekstarrayhead) == 1){

      $indhold .= '            <th colspan="' . $count . '">' . my_mb_ucfirst($tekstarrayhead[0]) . '</th>'."\r\n";

   }else{

      foreach($tekstarrayhead as $data){

         $width = array_shift($breddearray);

         $data = str_replace("\r\n", "<br>", $data);

         $indhold .= '            <th style="width: ' . $width . 'px;">' . my_mb_ucfirst($data) . '</th>'."\r\n";

      }

   }

   $indhold .= '         </tr>'."\r\n";
   $indhold .= '      </thead>'."\r\n";

   $indhold .= '      <tbody>'."\r\n";

   foreach($tekstarray as $liniearray){

      $indhold .= '         <tr>'."\r\n";

      foreach($liniearray as $data){

         $data = str_replace("\r\n", "<br>", $data);

   $prefix = "<br>";
   if(substr($data, 0, strlen($prefix)) == $prefix){
      $data = substr($data, strlen($prefix));
   }

         $indhold .= '            <td>' . $data . '</td>'."\r\n";

      }

      $indhold .= '         </tr>'."\r\n";

   }

   $indhold .= '      </tbody>'."\r\n";

   if($kodeibunden != ''){

      $indhold .= '      <tfoot>'."\r\n";
      $indhold .= '         <tr>'."\r\n";
      $indhold .= '            <td colspan="' . $count . '" class="tableunderskrift">' . my_mb_ucfirst($kodeibunden) . '</td>'."\r\n";
      $indhold .= '         </tr>'."\r\n";
      $indhold .= '      </tfoot>'."\r\n";

   }

   $indhold .= '   </table>'."\r\n";
   $indhold .= '   </div>'."\r\n";
   $indhold .= '   <!--ignore-->'."\r\n";
   $indhold .= "\r\n";

   return $indhold;

}



function visflash(
     $lokalflashmappe
   , $oprindeligurl
   , $tekst = ''
   , $visdelflash = false
   , $width = "711"
   , $height = "400"
   , $flashvars = ''
   , $autoplay = false
   ){

   $indhold = '';

   if($lokalflashmappe != '0' && $lokalflashmappe != '1'){

      trigger_error('forkert værdi (' . $lokalflashmappe .') i ' . __FUNCTION__ . '()');

   }

   if($lokalflashmappe == '1'){

      $url = $GLOBALS['setup']['domainogdatamappe'] . '/flash/' . $oprindeligurl;

   }else{

      $url = $oprindeligurl;

   }

   $urlparameterarray = array();
   $flashvarsarray = array();

   if($flashvars != ''){

      $flashvarsarray = explode('&', $flashvars);

   }




   //
   //
   //   SÆT PLAYER, URL, URL PARAMETER og FLASHVARS
   //
   //

       if(stripos($url, 'http://www.youtube.com/') === 0){

      $url = str_replace("http://www.youtube.com/watch?v="
                       , "http://www.youtube.com/v/"
                       , $url
                       );

      $url = str_replace("http://www.youtube.com/v/"
                       , "http://www.youtube.com/v/"
                       , $url
                       );

      $urlparameterarray[] = 'fs=1';
      $urlparameterarray[] = 'rel=0';
      $urlparameterarray[] = 'showinfo=1';
      //$urlparameterarray[] = 'border=1';
      //$urlparameterarray[] = 'color1=0x040627';
      //$urlparameterarray[] = 'color2=0x9799BB';
      $urlparameterarray[] = 'iv_load_policy=1';
      $flashvarsarray[] = 'fs=1';
      $flashvarsarray[] = 'rel=0';
      $flashvarsarray[] = 'showinfo=1';
      $flashvarsarray[] = 'iv_load_policy=1';

      if($autoplay){

         $urlparameterarray[] = 'autoplay=1';

      }

   }elseif(stripos($url, 'http://vimeo.com/') === 0){

      $videoid = str_replace("http://vimeo.com/"
                                          , ""
                                          , $url
                                          );

      $url = 'http://vimeo.com/moogaloop.swf';

      $urlparameterarray[] = 'server=vimeo.com';
      $urlparameterarray[] = 'clip_id=' . $videoid;

      if($autoplay){

         $urlparameterarray[] = 'autoplay=true';

      }

   }elseif(stripos($url, 'http://video.google.com/videoplay?docid=') === 0){

      $videoid = str_replace("http://video.google.com/videoplay?docid="
                                          , ""
                                          , $url
                                          );

      $url = "http://video.google.com/googleplayer.swf";

      $urlparameterarray[] = 'docid=' . $videoid;
      $urlparameterarray[] = 'fs=true';

      if($autoplay){

         $urlparameterarray[] = 'fs=true';
         $flashvarsarray[] = 'autoPlay=true';

      }

   }elseif(stripos($url, 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=') === 0
      || stripos($url, 'http://scootergalleri.dk/vid_vis.aspx?VideoID=') === 0){

      // Download : http://video.scootergalleri.dk/uploads_video/86098.mp4
      // hos scootergalleri er nogle videoer FLV og nogle er MP4

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

      // gammel $url = 'http://www.scootergalleri.dk/scripts/videoplayer/player.swf';
      $url = 'http://www.scootergalleri.dk/Public/Javascript/Video/player5-6.swf';

      $fileUrl = 'http://video.scootergalleri.dk/uploads_video/' . $scootergalleri_videoid . '.mp4';

//$errorLevel = error_reporting(0);
      if($AgetHeaders = @get_headers($fileUrl, 1)){
//error_reporting($errorLevel);

         if(preg_match("|200|", $AgetHeaders['0'])){

            // gammel $flashvarsarray[] = 'file=/scootergalleri_video/uploads_video/' . $scootergalleri_videoid . '.mp4';
            $flashvarsarray[] = 'file=/ScooterGalleri_video/uploads_video/' . $scootergalleri_videoid . '.mp4';
            //gem_scootergalleri_videoid(true, $scootergalleri_videoid, 'mp4');

         }else{

            $fileUrl = 'http://video.scootergalleri.dk/uploads_video/' . $scootergalleri_videoid . '.flv';
//$errorLevel = error_reporting(0);
            if($AgetHeaders = @get_headers($fileUrl, 1)){
//error_reporting($errorLevel);

               if(preg_match("|200|", $AgetHeaders['0'])){

                  // gammel $flashvarsarray[] = 'file=/scootergalleri_video/uploads_video/' . $scootergalleri_videoid . '.flv';
                  $flashvarsarray[] = 'file=/ScooterGalleri_video/uploads_video/' . $scootergalleri_videoid . '.flv';
                  //gem_scootergalleri_videoid(true, $scootergalleri_videoid, 'flv');

               }else{

                  trigger_error('Hverken MP4 eller FLV formatet af videoen ' . $scootergalleri_videoid . ' kunne findes hos scootergalleri (Prøv : http://scootergalleri.dk/vid_vis.aspx?VideoID=' . $scootergalleri_videoid . ')');
                  //gem_scootergalleri_videoid(false, $scootergalleri_videoid);

               }

            }

         }

      }

      // nye param flashvars :
         // netstreambasepath=http%3A%2F%2Fwww.scootergalleri.dk%2Fvideo%2Fdiverse_scooter%2F100857-kayo_kobling_hjaelp_&amp;id=player&amp;frontcolor=0xE0E2E3&amp;backcolor=0x3B4B5B&amp;lightcolor=0xFFFFFF&amp;image=http%3A%2F%2Fvideo.scootergalleri.dk%2Fuploads_video%2F100857.flv.jpg&amp;file=%2FScooterGalleri_video%2Fuploads_video%2F100857.mp4&amp;streamer=rtmp%3A%2F%2Frtmp.bazoom.dk%2Fvod%2FScooterGalleri&amp;provider=rtmp&amp;controlbar.position=bottom
         // netstreambasepath=http://www.scootergalleri.dk/video/diverse_scooter/100857-kayo_kobling_hjaelp_&amp;id=player&amp;frontcolor=0xE0E2E3&amp;backcolor=0x3B4B5B&amp;lightcolor=0xFFFFFF&amp;image=http://video.scootergalleri.dk/uploads_video/100857.flv.jpg&amp;file=/ScooterGalleri_video/uploads_video/100857.mp4&amp;streamer=rtmp://rtmp.bazoom.dk/vod/ScooterGalleri&amp;provider=rtmp&amp;controlbar.position=bottom
/*
   netstreambasepath=http://www.scootergalleri.dk/video/diverse_scooter/100857-kayo_kobling_hjaelp_
   &amp;id=player
   &amp;frontcolor=0xE0E2E3
   &amp;backcolor=0x3B4B5B
   &amp;lightcolor=0xFFFFFF
   &amp;image=http://video.scootergalleri.dk/uploads_video/100857.flv.jpg
   &amp;file=/ScooterGalleri_video/uploads_video/100857.mp4
   &amp;streamer=rtmp://rtmp.bazoom.dk/vod/ScooterGalleri
      &amp;provider=rtmp
   &amp;controlbar.position=bottom
*/

      $flashvarsarray[] = 'controlbar.position=bottom';
      $flashvarsarray[] = 'id=player';
      $flashvarsarray[] = 'netstreambasepath=http://www.scootergalleri.dk/video/diverse_scooter/' . $scootergalleri_videoid . '';

      // gammel $flashvarsarray[] = 'streamer=rtmp://rtmp.bazoom.dk/vod/scootergalleri|rtmpt://rtmp.bazoom.dk/vod/scootergalleri';
      $flashvarsarray[] = 'streamer=rtmp://rtmp.bazoom.dk/vod/ScooterGalleri';

      // rtmpt = Real Time Messaging Protocol
      // RTMP packets can be exchanged via two HTTP tunneling protocols:
      // RTMP Tunneled (RTMPT), RTMP data is encapsulated and exchanged via HTTP
      // and messages from the client (the media player, in this case) are addressed to port 80
      // (the default for HTTP) on the server.

      $flashvarsarray[] = 'image=http://video.scootergalleri.dk/uploads_video/' . $scootergalleri_videoid . '.flv.jpg';

      // scootergalleri bruger jwplayer

      //* For FLV video: file=clip (without the .flv extension).
      //* For MP4 video: file=mp4:clip.mp4 (with mp4: prefix).
      //* For MP3 audio: file=mp3:song.mp3 (with mp3: prefix).
      //* For AAC audio: file=mp4:song.aac (with mp4: prefix).

      $flashvarsarray[] = 'stretching=uniform'; // none | uniform | fill | exactfit
      //$flashvarsarray[] = 'height=380';
      //$flashvarsarray[] = 'width=640';
      $flashvarsarray[] = 'frontcolor=0xE0E2E3';
      $flashvarsarray[] = 'backcolor=0x3B4B5B';
      $flashvarsarray[] = 'lightcolor=0xFFFFFF';
      //$flashvarsarray[] = 'loop=true';
      $flashvarsarray[] = 'menu=true';
      //$flashvarsarray[] = 'provider=rtmp';
      $flashvarsarray[] = 'smoothing=false';
      //$flashvarsarray[] = 'start=10';
      $flashvarsarray[] = 'icons=true';

      if($autoplay){

         $flashvarsarray[] = 'autostart=true&';

      }

   }elseif(stripos($url, 'http://www.scootergalleri.dk/video/') === 0
      || stripos($url, 'http://scootergalleri.dk/video/') === 0){

      // Download : http://video.scootergalleri.dk/uploads_video/86098.mp4
      // hos scootergalleri er nogle videoer FLV og nogle er MP4

      if(stripos($url, 'http://www.scootergalleri.dk/video/') === 0){

         $scootergalleri_videoid = str_replace("http://www.scootergalleri.dk/video/"
                                          , ""
                                          , $url
                                          );

      }

      if(stripos($url, 'http://scootergalleri.dk/video/') === 0){

         $scootergalleri_videoid = str_replace("http://scootergalleri.dk/video/"
                                          , ""
                                          , $url
                                          );

      }

      $sdfsdfddfdf = parse_url($url);

      $asodnfuasfnas = explode('/', $url);
      $scootergalleri_videoid = intval(substr($url, strrpos($url, '/') + 1));
      //echo $scootergalleri_videoid;
      //echo $asodnfuasfnas[4]; // guider | diverse_scooter | off_topic | ...
      //echo $sdfsdfddfdf['path'];

      // gammel $url = 'http://www.scootergalleri.dk/scripts/videoplayer/player.swf';
      $url = 'http://www.scootergalleri.dk/Public/Javascript/Video/player5-6.swf';

      $fileUrl = 'http://video.scootergalleri.dk/uploads_video/' . $scootergalleri_videoid . '.mp4';

//$errorLevel = error_reporting(0);
      if($AgetHeaders = @get_headers($fileUrl, 1)){
//error_reporting($errorLevel);

         if(preg_match("|200|", $AgetHeaders['0'])){

            // gammel $flashvarsarray[] = 'file=/scootergalleri_video/uploads_video/' . $scootergalleri_videoid . '.mp4';
            $flashvarsarray[] = 'file=/ScooterGalleri_video/uploads_video/' . $scootergalleri_videoid . '.mp4';
            //gem_scootergalleri_videoid(true, $scootergalleri_videoid, 'mp4');

         }else{

            $fileUrl = 'http://video.scootergalleri.dk/uploads_video/' . $scootergalleri_videoid . '.flv';
//$errorLevel = error_reporting(0);
            if($AgetHeaders = @get_headers($fileUrl, 1)){
//error_reporting($errorLevel);

               if(preg_match("|200|", $AgetHeaders['0'])){

                  // gammel $flashvarsarray[] = 'file=/scootergalleri_video/uploads_video/' . $scootergalleri_videoid . '.flv';
                  $flashvarsarray[] = 'file=/ScooterGalleri_video/uploads_video/' . $scootergalleri_videoid . '.flv';
                  //gem_scootergalleri_videoid(true, $scootergalleri_videoid, 'flv');

               }else{

                  trigger_error('Hverken MP4 eller FLV formatet af videoen ' . $scootergalleri_videoid . ' kunne findes hos scootergalleri (Prøv : http://scootergalleri.dk/vid_vis.aspx?VideoID=' . $scootergalleri_videoid . ')');
                  //gem_scootergalleri_videoid(false, $scootergalleri_videoid);

               }

            }

         }

      }

      // nye param flashvars :
         // netstreambasepath=http%3A%2F%2Fwww.scootergalleri.dk%2Fvideo%2Fdiverse_scooter%2F100857-kayo_kobling_hjaelp_&amp;id=player&amp;frontcolor=0xE0E2E3&amp;backcolor=0x3B4B5B&amp;lightcolor=0xFFFFFF&amp;image=http%3A%2F%2Fvideo.scootergalleri.dk%2Fuploads_video%2F100857.flv.jpg&amp;file=%2FScooterGalleri_video%2Fuploads_video%2F100857.mp4&amp;streamer=rtmp%3A%2F%2Frtmp.bazoom.dk%2Fvod%2FScooterGalleri&amp;provider=rtmp&amp;controlbar.position=bottom
         // netstreambasepath=http://www.scootergalleri.dk/video/diverse_scooter/100857-kayo_kobling_hjaelp_&amp;id=player&amp;frontcolor=0xE0E2E3&amp;backcolor=0x3B4B5B&amp;lightcolor=0xFFFFFF&amp;image=http://video.scootergalleri.dk/uploads_video/100857.flv.jpg&amp;file=/ScooterGalleri_video/uploads_video/100857.mp4&amp;streamer=rtmp://rtmp.bazoom.dk/vod/ScooterGalleri&amp;provider=rtmp&amp;controlbar.position=bottom
/*
   netstreambasepath=http://www.scootergalleri.dk/video/diverse_scooter/100857-kayo_kobling_hjaelp_
   &amp;id=player
   &amp;frontcolor=0xE0E2E3
   &amp;backcolor=0x3B4B5B
   &amp;lightcolor=0xFFFFFF
   &amp;image=http://video.scootergalleri.dk/uploads_video/100857.flv.jpg
   &amp;file=/ScooterGalleri_video/uploads_video/100857.mp4
   &amp;streamer=rtmp://rtmp.bazoom.dk/vod/ScooterGalleri
      &amp;provider=rtmp
   &amp;controlbar.position=bottom
*/

      $flashvarsarray[] = 'controlbar.position=bottom';
      $flashvarsarray[] = 'id=player';
      //$flashvarsarray[] = 'netstreambasepath=http://www.scootergalleri.dk/video/' . $asodnfuasfnas[4] . '/' . $scootergalleri_videoid . '';
      $flashvarsarray[] = 'netstreambasepath=http://www.scootergalleri.dk/video/' . $asodnfuasfnas[4] . '/' . $sdfsdfddfdf['path'] . '';

      // gammel $flashvarsarray[] = 'streamer=rtmp://rtmp.bazoom.dk/vod/scootergalleri|rtmpt://rtmp.bazoom.dk/vod/scootergalleri';
//      $flashvarsarray[] = 'streamer=rtmp://rtmp.bazoom.dk/vod/ScooterGalleri';
      $flashvarsarray[] = 'streamer=rtmp://rtmp.bazoom.dk/vod/ScooterGalleri';
      $flashvarsarray[] = 'provider=rtmp';

      // rtmpt = Real Time Messaging Protocol
      // RTMP packets can be exchanged via two HTTP tunneling protocols:
      // RTMP Tunneled (RTMPT), RTMP data is encapsulated and exchanged via HTTP
      // and messages from the client (the media player, in this case) are addressed to port 80
      // (the default for HTTP) on the server.

      $flashvarsarray[] = 'image=http://video.scootergalleri.dk/uploads_video/' . $scootergalleri_videoid . '.flv.jpg';

      // scootergalleri bruger jwplayer

      //* For FLV video: file=clip (without the .flv extension).
      //* For MP4 video: file=mp4:clip.mp4 (with mp4: prefix).
      //* For MP3 audio: file=mp3:song.mp3 (with mp3: prefix).
      //* For AAC audio: file=mp4:song.aac (with mp4: prefix).

      $flashvarsarray[] = 'stretching=uniform'; // none | uniform | fill | exactfit
      //$flashvarsarray[] = 'height=380';
      //$flashvarsarray[] = 'width=640';
      $flashvarsarray[] = 'frontcolor=0xE0E2E3';
      $flashvarsarray[] = 'backcolor=0x3B4B5B';
      $flashvarsarray[] = 'lightcolor=0xFFFFFF';
      //$flashvarsarray[] = 'loop=true';
      $flashvarsarray[] = 'menu=true';
      //$flashvarsarray[] = 'provider=rtmp';
      $flashvarsarray[] = 'smoothing=false';
      //$flashvarsarray[] = 'start=10';
      $flashvarsarray[] = 'icons=true';

      if($autoplay){

         $flashvarsarray[] = 'autostart=true&';

      }

      // param seamlesstabbing true

   }elseif(stripos($url, 'http://c.brightcove.com/services/viewer/federated_f8/1660631150') === 0){

      $flashvarsarray[] = 'videoId=52071833001';
      $flashvarsarray[] = 'playerId=1660631150';
      $flashvarsarray[] = 'viewerSecureGatewayURL=https://console.brightcove.com/services/amfgateway';
      $flashvarsarray[] = 'servicesURL=http://services.brightcove.com/services';
      $flashvarsarray[] = 'cdnURL=http://admin.brightcove.com';
      $flashvarsarray[] = 'domain=embed';

      if($autoplay){

         //$flashvarsarray[] = '';

      }

   }elseif(stripos($url, 'http://embed.break.com/') === 0
      || stripos($url, 'http://www.break.com/embed/') === 0){

      if(stripos($url, 'http://embed.break.com/') === 0){

      $videoid = str_replace("http://embed.break.com/"
                       , ""
                       , $url
                       );

      }

      if(stripos($url, 'http://www.break.com/embed/') === 0){

      $videoid = str_replace("http://www.break.com/embed/"
                       , ""
                       , $url
                       );

      }

      $url = "http://media1.break.com/break/swf/player12.swf";

      //$urlparameterarray[] = 'async=true';

      $flashvarsarray[] = 'icon=1B608EE7AFCE3765E176F3C6FBB98002B3D18C64572F2307D76EA476A272F8BD12E8' . mt_rand(1, 100000);
      $flashvarsarray[] = 'autoplay=0';

      if($autoplay){

         $flashvarsarray[] = 'autoplay=1';

      }

   }elseif(stripos($url, 'http://c.brightcove.com/services/viewer/federated_f8/1686060896') === 0){

      $flashvarsarray[] = 'videoId=53646719001';
      $flashvarsarray[] = 'playerId=1686060896';
      $flashvarsarray[] = 'viewerSecureGatewayURL=https://console.brightcove.com/services/amfgateway';
      $flashvarsarray[] = 'servicesURL=http://services.brightcove.com/services';
      $flashvarsarray[] = 'cdnURL=http://admin.brightcove.com';
      $flashvarsarray[] = 'domain=embed';

      if($autoplay){

         //$flashvarsarray[] = '';

      }

   }elseif(stripos($url, 'http://webtv.tvmkanal.dk/v.swf') === 0){

      if($autoplay){

         $flashvarsarray[] = 'autoPlay=1';

      }

   }elseif(stripos($url, 'http://www.metacafe.com/fplayer/') === 0){

      if($autoplay){

         $flashvarsarray[] = 'playerVars=autoPlay=yes';

      }

   }elseif(stripos($url, 'http://www.funnyordie.com/videos/') === 0){

      $videoid = str_replace("http://www.funnyordie.com/videos/"
                                          , ""
                                          , $url
                                          );

      $url = "http://player.ordienetworks.com/flash/fodplayer.swf";
      //$url = "http://public0.ordienetworks.com/flash/fodplayer.swf";

      $flashvarsarray[] = 'key=' . $videoid;

      if($autoplay){

         $urlparameterarray[] = 'autostart=1';

         // internal=true bruges til funnyordie ellers virker autostart=true ikke.
         //$flashvarsarray[] = 'url=' . urlencode($url); // url=http%3A%2F%2Fwww.dailymotion.com%2Fswf%2Fvideo%2Fx294b8_madass-125-rsr_sport%3Fautostart%3D1&amp;autoStart=1&amp;playerVars=autoPlay=yes&amp;autoplay=1&amp;autoStart=true&amp;internal=true&amp;playerMode=embedded
         //$flashvarsarray[] = 'autoStart=1';
         $flashvarsarray[] = 'internal=true'; // true laver desværre videoen lille
         $flashvarsarray[] = 'playerVars=autoPlay=yes';
         $flashvarsarray[] = 'autoplay=1';
         $flashvarsarray[] = 'autoStart=true';

      }

   }elseif(stripos($url, 'http://blip.tv/play/') === 0){

      $videoid = str_replace("http://blip.tv/play/"
                       , ""
                       , $url
                       );

      $url = "http://a.blip.tv/scripts/flash/stratos.swf";

      if($autoplay){

         $urlparameterarray[] = 'file=http://blip.tv/rss/flash/' . $videoid;
         //$urlparameterarray[] = 'showplayerpath=http://a.blip.tv/scripts/flash/stratos.swf';
         //$urlparameterarray[] = 'feedurl=http://mopedtv.blip.tv/rss/flash';
         //$urlparameterarray[] = 'brandname=blip.tv';
         //$urlparameterarray[] = 'brandlink=http://blip.tv/';
         //$urlparameterarray[] = 'utm_source=brandlink';
         //$urlparameterarray[] = 'enablejs=true';
         $urlparameterarray[] = 'autostart=true';

      }

   }elseif(stripos($url, 'http://www.dailymotion.com/video/') === 0){

      $url = str_replace("http://www.dailymotion.com/video/"
                       , "http://www.dailymotion.com/swf/video/"
                       , $url
                       );

      if($autoplay){

         $urlparameterarray[] = 'autostart=1';

         // internal=true bruges til funnyordie ellers virker autostart=true ikke.
         $flashvarsarray[] = 'url=' . urlencode($url); // url=http%3A%2F%2Fwww.dailymotion.com%2Fswf%2Fvideo%2Fx294b8_madass-125-rsr_sport%3Fautostart%3D1&amp;autoStart=1&amp;playerVars=autoPlay=yes&amp;autoplay=1&amp;autoStart=true&amp;internal=true&amp;playerMode=embedded
         $flashvarsarray[] = 'autoStart=1';
         $flashvarsarray[] = 'playerVars=autoPlay=yes';
         $flashvarsarray[] = 'autoplay=1';
         $flashvarsarray[] = 'autoStart=true';
         $flashvarsarray[] = 'internal=true';

      }

   }elseif(stripos($url, 'http://images.stupidvideos.com/2.0.2/swf/video.swf') === 0){

      $videoid = str_replace("http://images.stupidvideos.com/2.0.2/swf/video.swf?sk=7&si=2&i="
                       , ""
                       , $url
                       );

      $url = "http://images.stupidvideos.com/2.0.2/swf/video.swf";

      $urlparameterarray[] = 'sk=7';
      $urlparameterarray[] = 'si=2';
      $urlparameterarray[] = 'i=' . $videoid;
      $flashvarsarray[] = 'sk=7';
      $flashvarsarray[] = 'si=2';
      $flashvarsarray[] = 'i=' . $videoid;

      //so.addVariable("i",currentVideoID);
      //so.addVariable("p",escape(playlist));
      //so.addVariable('sk',7);
      //so.addVariable('si',2);
      //so.addVariable('sct',section);
      //so.addVariable('m',mute);
      //so.addVariable('imm',imm);
      //so.addVariable('uid',viewerID);
      //so.addVariable('usn',viewerName);

      // sa = Stop Autoplay
      // sa=1 = slåer autoplay fra
      if($autoplay){

         $urlparameterarray[] = 'as=0';
         $flashvarsarray[] = 'sa=0';

      }else{

         $urlparameterarray[] = 'as=1';
         $flashvarsarray[] = 'sa=1';

      }

   }else{



   }



   //
   //
   //   NOGET DER GÆLDER FOR ALLE
   //
   //

   $flashvarsarray[] = 'playerMode=embedded';


   //
   //
   //   SAMMENSÆT URL og FLASHVARS med &amp;
   //
   //

   if(empty($urlparameterarray)){

      $url_ferdig = $url;

   }else{

      $url_ferdig = $url . '?' . implode('&amp;', $urlparameterarray);

   }

   if(!empty($flashvarsarray)){

      $flashvars_encoded = implode('&amp;', $flashvarsarray);

   }

/*
   $indhold .= "<div>url : $url</div>";
   $indhold .= "<div>url_ferdig : $url_ferdig</div>";
   $indhold .= "<div>urlparameterarray : " . print_r($urlparameterarray,true) . "</div>";
   $indhold .= "<div>flashvars_encoded : $flashvars_encoded</div>";
*/

   //
   //
   //   <OBJECT>
   //
   //

   //$flashvars = str_replace("&", "&amp;", $flashvars);
   //$flashvars = trim($flashvars);

   // Flash OBJECT and EMBED tag attributes : http://kb2.adobe.com/cps/127/tn_12701.html
   // * classid is an attribute to the <object> tag. It tells Internet Explorer to load the ActiveX plug-in if it is not installed
   // * pluginspage is an attribute to the <embed> tag. It displays a link to the Shockwave download page if Netscape does not have it

   // HTML 5 : The codebase attribute on the object element is obsolete.
   // HTML 5 : Use the data and type attributes to invoke plugins.
   // HTML 5 : To set a parameter with the name codebase, use the param element.

   // <embed> bruges til at vise besked om at flash plugin ikke er aktivt
   // Note: The <embed> tag is deprecated. The World Wide Web Consortium (W3C) recommend using the <object> tag instead.
   // virker så ikke med safari og scootergalleri video. playeren vises men ikke custom farver og ingen video
   // $indhold .= '<embed src="' . $url . '" style="width: ' . $width . 'px; height: ' . $height . 'px;" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>';
   // $indhold .= '<param name="codebase" value="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0">';

   $indhold .= '<object class="video" type="application/x-shockwave-flash" data="' . $url_ferdig .'" width="' . $width . '" height="' . $height . '">';
   $indhold .= '<param name="movie" value="' . $url_ferdig . '">';

   //$indhold .= '<param name="flashvars" value="' . $flashvars . '">';

   if(!empty($flashvars_encoded)){

      $indhold .= '<param name="flashvars" value="' . $flashvars_encoded . '">';

   }

   //$indhold .= '<param name="allowScriptAccess" value="always">'; // Giver fejl i IE9.0 : "SCRIPT5007: Værdien af egenskaben 'SetReturnValue' kan ikke hentes: Objektet er null eller er ikke defineret"
                                                                  // Kan rettes med <object id="noget">
                                                                  // skal bruge på for eksempel funny og die når skal vælge video efter afspilling stopper
   $indhold .= '<param name="allowFullScreen" value="true">';
   $indhold .= '<param name="wmode" value="transparent">'; // skal have wmode transparent fordi ellers går dropdownmenus border bag om videoen i IE9

/*
Element param not allowed as child of element object in this context. (Suppressing further errors from this subtree.)
*/

   $indhold .= '<div>';
   $indhold .= 'Det kræver Adobe Flash Player for at kunne se indholdet.';
   $indhold .= "\r\n";
   $indhold .= "\r\n";
   $indhold .= 'Hvis du allerede har Flash installeret så kan det være fordi der ikke er forbindelse eller flash indholdet på anden måde ikke kunne hentes eller fordi flash er blokeret.';
   $indhold .= "\r\n";
   $indhold .= '<div style="margin: 10px; padding: 10px;"><span style="background: #fff; border: 10px solid #fff;">' . ahref('http://get.adobe.com/flashplayer/', 'Hent Adobe Flash Player', null, true) . '</span></div>';
   $indhold .= '</div>';

   $indhold .= '</object>';



   //
   //
   //   VIS
   //
   //

   if($visdelflash){

      $indhold = '<div class="visdelflash">' . $indhold . '</div>';

   }

   if(isset($tekst) && $tekst != ''){

      if(is_string($tekst)){

         $indhold = '<div class="visdelflashoverskrift">' . my_mb_ucfirst($tekst) . '</div>' . $indhold;

      }else{

         trigger_error('$tekst indeholder ikke en stringværdi i ' . __FUNCTION__ . '() ved "' . $oprindeligurl . '"');

      }

   }

   return $indhold;

}



function utf8strtolower($tekst){

   return utf8_encode(strtolower(utf8_decode($tekst)));

}



function byttegn($data){

   $fra = array(
       "æ","ø","å","Æ","Ø","Å","?"," ",",","."
      ,"(",")","/",",","'","[","]","¨","^","~","-","+","´","`"
      ,"ë","ÿ","ü","ï","ö","ä"
      ,"Ë",    "Ü","Ï","Ö","Ä"
      ,"ê",    "û","î","ô","â"
      ,"Ê",    "Û","Î","Ô","Â"
      ,"é","ý","ú","í","ó","á"
      ,"É","Ý","Ú","Í","Ó","Á"
      ,"è",    "ù","ì","ò","à"
      ,"È",    "Ù","Ì","Ò","À"
      ,"¹","²","³"
      ,"©"
      );

   $til = array(
       "e","o","a","e","o","a","_","_","_","_"
      ,"_","_","_","_","_","_","_","_","_","_","_","_","_","_"
      ,"e","y","u","i","o","a"
      ,"E",    "U","I","O","A"
      ,"e",    "u","i","o","a"
      ,"E",    "U","I","O","A"
      ,"e","y","u","i","o","a"
      ,"E","y","U","I","O","A"
      ,"e",    "u","i","o","a"
      ,"E",    "U","I","O","A"
      ,"1","2","3"
      ,"c"
      );

   return str_replace($fra, $til, $data);

}



function visbilled(
     $lokalbilledmappe // 1
   , $fil // 2
   , $tekst = '' // 3
   , $tagetaf = false // 4
   , $midten = false // 5
   , $linktilstortbilled = false // 6
   , $ekstrakode = '' // 7
   , $bruges_ikke_mere = null // 8
   , $width = '' // 9
   , $height = '' // 10
   , $margin = false // 11
   , $visoriginalbilled = false // 12
   , $scooterbilled = false // 13
   , $aldriglinkpabilled = false // 14
   , $ekstrastylekode = '' // 15
   ){

   $indhold = '';
   $billedtag = '';
   $billedtagstyle = '';
   $maxwidth = $GLOBALS['setup']['maxbredde'];
   $billedetblevikkefundetlokal = $GLOBALS['setup']['roden'] . '/' . $GLOBALS['setup']['dataogbilledmappe'] . '/ikoner/' . 'ukendtbilled.png';
   $billedetblevikkefundetweb = $GLOBALS['setup']['domain'] . '/' . $GLOBALS['setup']['dataogbilledmappe'] . '/ikoner/' . 'ukendtbilled.png';

   if($bruges_ikke_mere != null && $margin != false){
   if(!is_numeric($bruges_ikke_mere) || !is_numeric($margin)){

      trigger_error('fejl ved (8:' . print_r($bruges_ikke_mere, true) . ',11:' . print_r($margin, true) . ') : ' . $fil . ' - ' . $tekst);

   }
   }

   if($lokalbilledmappe == '0'){

      if(stripos($fil, 'http://') === 0){

         $billedsrclokal = false;
         $billedsrcweb = $fil;

      }else{

         $billedsrclokal = $GLOBALS['setup']['roden'] . '/' . $fil;
         //$billedsrcweb   = $GLOBALS['setup']['domain'] . '/' . $fil;
         $billedsrcweb   = '/' . $fil;

         // fjerner ? og det der er efter i forbindelse med brug af thumbnail.php?filnavn=dsfsdfdsfosv
         if(strstr($billedsrclokal, '?')){

            $billedsrclokal = explode('?', $billedsrclokal);
            $billedsrclokal = $billedsrclokal[0];
         }

         //$billedsrclokal = iconv('utf-8', 'cp1252', $billedsrclokal);

         // utf8_decode() bruges for ellers vil filnavne med ö ikke blive fundet
         if(!file_exists($billedsrclokal)){
            trigger_error("kunne ikke finde : \"$billedsrclokal\"", E_USER_ERROR);
            $tekst          = '&quot;' . $billedsrcweb . '&quot; blev ikke fundet';
            $billedsrclokal = $billedetblevikkefundetlokal;
            $billedsrcweb   = $billedetblevikkefundetweb;
         }

      }

   }elseif($lokalbilledmappe == '1'){

      $billedsrclokal = $GLOBALS['setup']['roden'] . '/' . $GLOBALS['setup']['dataogbilledmappe'] . '/' . $fil;
      //$billedsrcweb   = $GLOBALS['setup']['domain'] . '/' . $GLOBALS['setup']['dataogbilledmappe'] . '/' . $fil;
      $billedsrcweb   = '/' . $GLOBALS['setup']['dataogbilledmappe'] . '/' . $fil;

      if(strstr($billedsrclokal, '?')){

         $billedsrclokal = explode('?', $billedsrclokal);
         $billedsrclokal = $billedsrclokal[0];

      }

      // utf8_decode() bruges for ellers vil filnavne med ö ikke blive fundet
      if(!file_exists($billedsrclokal)){
         trigger_error("kunne ikke finde : \"$billedsrclokal\"", E_USER_ERROR);
         $tekst          = '&quot;' . $billedsrcweb . '&quot; blev ikke fundet';
         $billedsrclokal = $billedetblevikkefundetlokal;
         $billedsrcweb   = $billedetblevikkefundetweb;
      }

   }elseif($lokalbilledmappe == '2'){

      $billedsrclokal = $GLOBALS['setup']['roden'] . '/' . $GLOBALS['setup']['dataogbilledmappe'] . '/' . $fil;
      //$billedsrcweb   = $GLOBALS['setup']['domain'] . '/' . $GLOBALS['setup']['dataogbilledmappe'] . '/' . $fil;
      $billedsrcweb   = '/' . $GLOBALS['setup']['dataogbilledmappe'] . '/' . $fil;

      if(strstr($billedsrclokal, '?')){

         $billedsrclokal = explode('?', $billedsrclokal);
         $billedsrclokal = $billedsrclokal[0];

      }

      // utf8_decode() bruges for ellers vil filnavne med ö ikke blive fundet
      if(!file_exists($billedsrclokal)){
         trigger_error("kunne ikke finde : \"$billedsrclokal\"", E_USER_ERROR);
         $tekst          = '&quot;' . $billedsrcweb . '&quot; blev ikke fundet';
         $billedsrclokal = $billedetblevikkefundetlokal;
         $billedsrcweb   = $billedetblevikkefundetweb;
      }

   }

   if($GLOBALS['setup']['hentstorrelsepabilleder']){

      if($width == '' && $height == ''){

         if($billedinfo = getimagesize($billedsrclokal)){

            if(!$visoriginalbilled){

               if($billedinfo[0] > $maxwidth){

                  if(!$aldriglinkpabilled){

                     $linktilstortbilled = true;

                  }

               }

            }

         }else{

            trigger_error('Kunne ikke bruge getimagesize() på filen "' . $billedsrclokal . '".');

         }

      }

   }

   if($linktilstortbilled || $scooterbilled){

      //$ekstrakode .= ' onmouseover="Tip(\'Klik for at se billedet i fuld størrelse\');" onmouseout="UnTip();"';

   }

   if($linktilstortbilled){


   }

   $alttekst = str_replace('<br>', ' ', $tekst);
   $alttekst = str_replace('& ', '&amp; ', $tekst);
   $alttekst = str_replace('&nbsp;', '', $alttekst);
   $alttekst = trim($alttekst);
   $alttekst = my_mb_ucfirst($alttekst);
   $alttekst = str_replace('"', '', $alttekst);

   $titletekst = $alttekst;
   $titletekst = trim($titletekst); // fjern mellemrum pga validering
   $titletekst = str_replace('"', '', $titletekst);

   $billedtag .= '<img'
            .' src="' . $billedsrcweb . '"'
            .' alt="' . $alttekst . '"'
            .' title="' . $titletekst . '"'
            ;

   if(file_exists($billedsrclokal)){

      if(!$linktilstortbilled){

         if($width || $height){

            if($width){

               $billedtag .= ' width="' . $width . '"';

            }

            if($height){

               $billedtag .= ' height="' . $height . '"';

            }

         }else{

            if($billedinfo = getimagesize($billedsrclokal)){

               $billedtag .= ' width="' . $billedinfo[0] .'" height="' . $billedinfo[1] . '"';

            }else{

               trigger_error('Kunne ikke bruge getimagesize() på filen "' . $billedsrclokal . '".');

            }

         }

      }

   }

   if(file_exists($billedsrclokal)){

      if(!$linktilstortbilled){

         if($width || $height){
/*
            if($width){

               $billedtagstyle .= 'width: ' . $width . 'px;';

            }

            if($height){

               $billedtagstyle .= 'height: ' . $height . 'px;';

            }
*/
         }else{
/*
            if($billedinfo = getimagesize($billedsrclokal)){

               $billedtagstyle .= 'width: ' . $billedinfo[0] .'px; height: ' . $billedinfo[1] . 'px;';

            }else{

               trigger_error('Kunne ikke bruge getimagesize() på filen "' . $billedsrclokal . '".');

            }
*/
         }

      }

   }

   if($margin){

      $billedtagstyle .= 'margin-top: 10px; margin-bottom: 10px;';

   }

   if($GLOBALS['setup']['hentstorrelsepabilleder']){

      if($linktilstortbilled){

      if($width || $height){

         if($width){

            $billedtagstyle .= 'width: ' . $width .'px;';

         }

         if($height){

            $billedtagstyle .= 'height: ' . $height . 'px;';

         }

         $billedtagstyle .= 'border: 3px dotted blue;';

      }else{

         $endeligstorrelse = array($maxwidth,2000);

         if(list($originalx, $originaly) = getimagesize($billedsrclokal)){

            $originalratio = $originalx/$originaly;

            if($endeligstorrelse[0] / $endeligstorrelse[1] > $originalratio){

               $thumbnailstorrelse[0] = round($endeligstorrelse[1] * $originalratio);
               $thumbnailstorrelse[1] = $endeligstorrelse[1];

            }else{

               $thumbnailstorrelse[0] = $endeligstorrelse[0];
               $thumbnailstorrelse[1] = round($endeligstorrelse[0] / $originalratio);

            }

            if($endeligstorrelse[0] > $originalx && $endeligstorrelse[1] > $originaly){

               $thumbnailstorrelse[0] = $originalx;
               $thumbnailstorrelse[1] = $originaly;

            }

            $billedwidth = $thumbnailstorrelse[0];
            $billedheight = $thumbnailstorrelse[1];

            $billedtagstyle .= 'width: ' . $billedwidth . 'px; height: ' . $billedheight . 'px; border: 3px dotted blue;';

         }else{

            trigger_error('Kunne ikke bruge getimagesize() på filen "' . $billedsrclokal . '".');

         }

      }

      }

   }

   if($ekstrastylekode != ''){

      $billedtagstyle .= ' ' . $ekstrastylekode;

   }

   if($billedtagstyle != ''){

      $billedtag .= ' style="' . $billedtagstyle . '"';

   }

   if($ekstrakode != ''){

      $billedtag .= ' ' . $ekstrakode;

   }

   $billedtag .= '>';



   if($midten){

      $indhold .= '<span class="delbilled">';

   }

   if($linktilstortbilled){

      if($lokalbilledmappe == '1'){

         // med highslide JS
         $indhold .= ahref('billeder' . '/' . $fil, $billedtag, ' class="highslide" onclick="return hs.expand(this, { captionEval: \'this.thumb.alt\' })"');

      }else{

         $indhold .= ahref($GLOBALS['setup']['domainogdatamappe'] . '/' . 'visbilled.php?' . $fil, $billedtag);

      }

   }else{

      $indhold .= $billedtag;

   }

   if($tagetaf){

      $downloadikon = visbilled('2', 'ikoner/information.png', '*', '', null, null, 'class="ikon16x16"', null, '16', '16');
      $tagetaftekst = 'Billedet må meget gerne kopieres og bruges som du har lyst.' . "<br>"
                     .'For eksempel i diverse forum eller på din egen hjemmeside.';

      $tagetafkode = '';
      $tagetafkode .= '<div class="tagetafunderbillede">';

      $tagetafkode .= '<span';
      $tagetafkode .= ' onmouseover="Tip(\'' . $tagetaftekst . '\');"';
      $tagetafkode .= ' onmouseout="UnTip();">';
      $tagetafkode .= $downloadikon;
      $tagetafkode .= '</span>';

      $tagetafkode .= '</div>';

      $indhold .= $tagetafkode;

   }

   if($midten){

      $indhold .= '</span>';

   }

   return $indhold;

}



function visfil($valgafmappe, $sti, $tekst = ''){

   $indhold = '';

   if(isset($sti) && $sti != ''){

      $filnavn = basename($sti);
      $filnavn = urldecode($filnavn);
      $mappe = dirname($sti);

      ($tekst == '')
         ? $tekst = $filnavn
         : $tekst = my_mb_ucfirst($tekst);

      if($valgafmappe == "1"){

         $indhold .= vismappe_element('fil', $mappe, $filnavn, '', $tekst);

      }

   }

   return $indhold;

}



function visfilform($tekst){

   $indhold = '';

   $indhold .= '<div class="redigerholder">';

   $indhold .= ''
      . formbox('0', '', '', $_SERVER['PHP_SELF'], 'post', '', ''
         . input('0', 'hidden', 'funktion', 'visfil')
         . input('1', 'textarea', 'filindhold', $tekst, $GLOBALS['setup']['textformstorrelse'], '', '', 'fontfamily_monospace', 'style="width: 95%;"')
      );

   $indhold .= '</div>';

   return $indhold;

}



function kontaktmig($medstort = false){

   $indhold = '';

   $linktekst = $GLOBALS['setup']['l_contactme_a'];

   ($medstort)
      ? $linktekst = my_mb_ucfirst($linktekst)
      : $linktekst = $linktekst;

   $indhold .= ahref($GLOBALS['setup']['domainogdatamappe'] . '/' . 'kontakt.php', $linktekst);

   return $indhold;

}



function kontaktemig($medstort = false){

   $indhold = '';

   $linktekst = $GLOBALS['setup']['l_contactme_b'];

   ($medstort)
      ? $linktekst = my_mb_ucfirst($linktekst)
      : $linktekst = $linktekst;

   $indhold .= ahref($GLOBALS['setup']['domainogdatamappe'] . '/' . 'kontakt.php', $linktekst);

   return $indhold;

}



function forum($medstort = false){

   $indhold = '';

   $linktekst = 'forum';

   ($medstort)
      ? $linktekst = my_mb_ucfirst($linktekst)
      : $linktekst = $linktekst;

   $indhold .= ahref('http://scootergrisen.dk/forum/', $linktekst);

   return $indhold;

}



function forummet($medstort = false){

   $indhold = '';

   $linktekst = 'forummet';

   ($medstort)
      ? $linktekst = my_mb_ucfirst($linktekst)
      : $linktekst = $linktekst;

   $indhold .= ahref('http://scootergrisen.dk/forum/', $linktekst);

   return $indhold;

}



function dinkommentar($medstort = false){

   $indhold = '';

   $linktekst = 'din kommentar om siden';

   ($medstort)
      ? $linktekst = my_mb_ucfirst($linktekst)
      : $linktekst = $linktekst;

   $indhold .= ahref('#din_kommentar_til_siden', $linktekst);

   return $indhold;

}



function ahref($link, $tekst = '', $ekstrakode = '', $abninytab = false){

   $indhold = '';
   $url = '';

   if($link != ''){

      if($tekst === ''){

         $tekst = $link;

      }

      $link = str_replace("&", "&amp;", $link);

      if(
         stripos($link, 'http://') === 0
      || stripos($link, 'https://') === 0
      || stripos($link, 'ftp://') === 0
      || stripos($link, 'mailto:') === 0
      || stripos($link, 'javascript:') === 0
      || stripos($link, '//') === 0
      || stripos($link, '/') === 0
      ){

         $url .= $link;

      }elseif(stripos($link, '#') === 0){

         $url .= $GLOBALS['setup']['domainogdatamappe'] . '/' . basename($_SERVER['PHP_SELF']) . $link;

      }else{

         $url .= $GLOBALS['setup']['domainogdatamappe'] . '/' . $link;

      }

      if($ekstrakode != ''){

         $ekstrakode = ' ' . $ekstrakode;

      }

      $indhold .= '<a href="' . $url . '"';
      $indhold .= $ekstrakode;

      if($abninytab){

         $indhold .= ' target="_blank"';

      }

      $indhold .= '>' . $tekst . '</a>';

   }else{

      lavfejl('Tomt link');

   }

   return $indhold;

}



function noscript($data = ''){

   $indhold = '';

   $indhold .= '<noscript>';

   ($data != '')
      ? $indhold .= $data
      : $indhold .= '<div class="displaynone">' . $GLOBALS['setup']['l_noscript_emptymessage'] . '</div>';

   $indhold .= '</noscript>';

   return $indhold;

}



function listemedgrafik($array){

   $indhold = '';

   $indhold .= '<div class="listeholder">';

   foreach($array as $value){

      $value = my_mb_ucfirst($value);

      $indhold .= '<div class="listeprik">';
      $indhold .= '<div class="listetekst">' . $value  . '</div>';
      $indhold .= '</div>';

      $indhold .= clearboth();

   }

   $indhold .= '</div>';
   $indhold .= "\r\n";

   return $indhold;

}



function sortmultiarray(&$data){

   foreach($data as $key => $value){

      (is_array($value[2]))
         ? $col2[$key] = utf8strtolower($value[2][0])
         : $col2[$key] = utf8strtolower($value[2]);

   }

   array_multisort($col2, SORT_ASC, SORT_STRING, $data);

}



function afsnit($overskrift = '', $data = ''){

   $indhold = '';

   $overskrift = my_mb_ucfirst($overskrift);
   $data = trim($data, "\r\n");

   if($overskrift != ''){

      $indhold .= '<h4 class="afsnit_overskrift fontfamily_3 fontsize_larger fontfamily_7">';
      $indhold .= $overskrift;
      $indhold .= '</h4>';
   }

   if($data != ''){

      $indhold .= '<div class="afsnit_data">';
      $indhold .= $data;
      $indhold .= '</div>';

   }

   return $indhold;

}



function citat($data){

   $indhold = '';

   $data = trim($data);

   $indhold .= '<div class="citatholder bordertype2 borderradius5px">';
   $indhold .= '<div class="citat">';
   $indhold .= $data;
   $indhold .= '</div>';
   $indhold .= '</div>';

   return $indhold;

}



function mb_ucfirst($tekst){

   // hvis € (euro tegn) er med så laves det om til et ? (spørgsmåls tegn)
   // utf8_decode eller utf8_encode fucker unicode op
   return utf8_encode(ucfirst(utf8_decode($tekst)));

}



function my_mb_ucfirst($str){

    // funktion som ikke fucker unicode tegn i stedet for gamle mb_ucfirst

    $fc = mb_strtoupper(mb_substr($str, 0, 1));

    return $fc . mb_substr($str, 1);

}



function mb_ucwords($tekst){

   return utf8_encode(ucwords(utf8_decode($tekst)));

}



function visstatusform($vissogefterdet = true){

   $indhold = '';
   $billed = null;
   $besked = '';
   $automatiskfejlbesked = '';
   $beskedb = '';

   (isset($_SERVER["REDIRECT_STATUS"]))
      ? $statuskode = $_SERVER["REDIRECT_STATUS"]
      : $statuskode = '';

   (isset($_POST["afsender"]))
      ? $afsender = 'POST_AFSENDER_' . $_POST["afsender"]
      : $afsender = "";

   (isset($_POST["hvor"]))
      ? $hvor = 'POST_HVOR_' . $_POST["hvor"]
      : $hvor = 'REQUEST_URI_' . $_SERVER["REQUEST_URI"];

   (isset($_POST["kommentar"]))
      ? $kommentar = 'POST_KOMMENTAR_' . $_POST["kommentar"]
      : $kommentar = "";

   (isset($_SERVER["REQUEST_URI"]))
      ? $requesturi = 'REQUEST_URI_' . $_SERVER["REQUEST_URI"]
      : $requesturi = "";

   (isset($_SERVER["HTTP_REFERER"]))
      ? $httpreferer = 'HTTP_REFERER_' . $_SERVER["HTTP_REFERER"]
      : $httpreferer = "";

   (isset($_SERVER["SCRIPT_FILENAME"]))
      ? $script_filename = $_SERVER["SCRIPT_FILENAME"]
      : $script_filename = "";

   (isset($_SERVER["REDIRECT_URL"]))
      ? $redirect_url = $_SERVER["REDIRECT_URL"]
      : $redirect_url = "";

   if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){

      $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];

   }else{

      (isset($_SERVER["REMOTE_ADDR"]))
         ? $ip = $_SERVER["REMOTE_ADDR"]
         : $ip = "";

   }

   $hvor = urldecode($hvor);
   $requesturi = urldecode($requesturi);
   $httpreferer = urldecode($httpreferer);

   switch($statuskode){

      case '':

         //$billed = 'ok.png';
         //$besked .= 'ingen status kode';
         break;

      case '200':

         $billed = 'status/ok.png';
         $besked .= 'succes og vodka';
         break;

      case '301':

         $billed = 'status/flyt.png';
         $besked .= 'er vist flyttet';
         break;

      case '403':

         $billed = 'status/indkorselforbudt.png';
         $besked .= 'adgang nægtet';

         $faildatabase = array(
                               'fejl/fail0007.gif'
                              ,'fejl/fail0012.gif'
                              ,'fejl/fejl0006.jpg'
                              ,'fejl/fejl0018.jpg'
                              );

         $failrandom = array_rand($faildatabase,1);
         $billed = $faildatabase[$failrandom];
         break;

      case '404':

         $faildatabase = array(
                               'fejl/fail0001.gif'
                              ,'fejl/fail0002.gif'
                              ,'fejl/fail0003.gif'
                              ,'fejl/fail0004.gif'
                              ,'fejl/fail0005.gif'
                              ,'fejl/fail0006.gif'
                              ,'fejl/fail0007.gif'
                              ,'fejl/fail0008.gif'
                              ,'fejl/fail0009.gif'
                              ,'fejl/fail0010.gif'
                              ,'fejl/fail0011.gif'
                              ,'fejl/fail0012.gif'
                              ,'fejl/fail0013.gif'
                              );

         $failrandom = array_rand($faildatabase,1);

         $billed = $faildatabase[$failrandom];
         $besked .= 'blev ikke fundet';
         $besked .= '<br>';
         break;

      default:

         $billed = 'status/udrabstegn.png';
         $billed = '';
         $besked .= 'ukendt status kode';

         if($statuskode != ''){

            $besked .= " ($statuskode)";

         }

         $besked .= '';
         break;

   }

   $indhold .= '<div class="fejlstatusholder">';
   $indhold .= '<div class="fejlstatuskode fontsize_xxlarge">' . $statuskode . '</div>';
   $indhold .= '<div class="fejlstatustekst fontsize_large">' . my_mb_ucfirst($besked) . '</div>';
   $indhold .= clearboth();

   $indhold .= '</div>';

   if(isset($billed)){

      $indhold .= '<div>'.visbilled('1', $billed, 'status billed', false, true).'</div>';

   }

   if($hvor != ""){            $beskedb .= "$hvor" . "\r\n";         $automatiskfejlbesked .= "$hvor" . " | ";        }
   if($kommentar != ""){       $beskedb .= "$kommentar" . "\r\n";                                                     }
   if($afsender != ""){        $beskedb .= "$afsender" . "\r\n";                                                      }
   if($requesturi != ""){      $beskedb .= "$requesturi" . "\r\n";   $automatiskfejlbesked .= "$requesturi" . " | ";  }
   if($httpreferer != ""){     $beskedb .= "$httpreferer" . "\r\n";  $automatiskfejlbesked .= "$httpreferer";         }
   if($ip != ""){              $beskedb .= "$ip" . "\r\n";           $automatiskfejlbesked .= "$ip";                  }

   if(isset($_POST['funktion']) && $_POST['funktion'] == "sendfejlbeskedmanuelt"){

      if(isset($_POST["kommentar"]) && $_POST["kommentar"] != ""){

         if(sendemail("{$GLOBALS['setup']['email_emne_fejl']} - manuelt", $beskedb)){

            $indhold .= beskedenblevsendt(true);

         }else{

            $indhold .= beskedenblevsendt(false);

         }

      }else{

         $indhold .= 'Kommentar feltet skal være udfyldt.';

      }

   }else{

      $indhold .= ''
         . formbox('1', '', 'Skriv besked', $_SERVER['PHP_SELF'], 'post', '', ''
            . input('0', 'hidden', 'funktion', 'sendfejlbeskedmanuelt')
            . input('0', 'hidden', 'hvor', htmlentities($hvor, null, 'UTF-8'), '', '', 'fejl_a')
            . input('1', 'text', 'afsender', '', '40', 'Din e-mail (hvis du ønsker svar)', 'fejl_c')
            . input('1', 'text', 'kommentar', '', '40', 'Kommentar', 'fejl_b')
            . input('1', 'submit', '', 'Send besked', '', 'rykind', 'fejl_sendknapb')
         );

      if(isset($statuskode) && $statuskode != "" && $statuskode != "200"){
/*
         if($httpreferer != ""){

            trigger_error("fejl $statuskode : $automatiskfejlbesked");

         }
*/
         //sendemail("{$GLOBALS['setup']['email_emne_fejl']} - automatisk", $beskedb);

      }

   }

   return $indhold;

}



function lidtplads($retning, $span = false){

   $indhold = '';

   if($retning == 'lodret'){

      $indhold .= '<div class="lidtpladslodret"></div>';

   }elseif($retning == 'lodretlidt'){

      $indhold .= '<div class="megetlidtpladslodret"></div>';

   }elseif($retning == 'vandret'){

      if($span){

         $indhold .= '<span class="lidtpladsvandret"></span>';

      }else{

         $indhold .= '<div class="lidtpladsvandret"></div>';

      }

   }else{

      trigger_error('ukendt retning valgt for lidtplads(). Hverken lodret eller vandret');

   }

   return $indhold;

}



function kode($array, $original_kode){

   $type = $array[0];
   $vis = $array[1];

   if(isset($array[3])){

      $vistilstand = $array[3];

   }else{

      $vistilstand = 1;

   }

   $highlighttekst = '';

   if(isset($array[2]) && $array[2] != ''){

      $highlightalle = $array[2];

      $highlighttal = explode(' ', $highlightalle);

      foreach($highlighttal as $tal){

         $highlighttalarray[] = $tal;

      }

      $highlighttalmedkomma = implode(', ', $highlighttalarray);

      $highlighttekst = ' highlight: [' . $highlighttalmedkomma . ']';

   }

   $indhold = '';
   $output = '';
   $highlightedkode = '';
   $vis_markeraltknap = false;

   $original_kode = trim($original_kode);



   (strpos($vis, 'a') !== false)
      ? $vis_a = true
      : $vis_a = false;

   (strpos($vis, 'b') !== false)
      ? $vis_b = true
      : $vis_b = false;

   (strpos($vis, 'c') !== false)
      ? $vis_c = true
      : $vis_c = false;



   switch($type){

      case 'tekst' :
         $a = $original_kode;
         $a = str_replace("&", "&amp;", $a);
         $a = str_replace("<", "&lt;", $a);
         $a = str_replace(">", "&gt;", $a);
         $a = str_replace("  ", "&nbsp;&nbsp;", $a);

         $a = ''
         . '<script type="text/syntaxhighlighter" class="' . $highlighttekst . '"><![CDATA[' . "\r\n"
         . $a
         . ']]></script>' . "\r\n";

         $class = 'kode_plain';
         $vis_markeraltknap = false;

         if($vis_a){

            $uoriginal_kode = $original_kode;
            $uoriginal_kode = str_replace("&lt;", "&amplt;", $uoriginal_kode);
            $uoriginal_kode = str_replace("&gt;", "&ampgt;", $uoriginal_kode);
            $uoriginal_kode = str_replace("<", "&lt;", $uoriginal_kode);

            $a = ''
            . '<script type="text/syntaxhighlighter" class="brush: plain;' . $highlighttekst . '"><![CDATA[' . "\r\n"
            . $uoriginal_kode
            . ']]></script>' . "\r\n";

         }


         break;

      case 'php' :
         $class = 'kode_php';
         $vis_markeraltknap = true;

         if($vis_a){

            $uoriginal_kode = $original_kode;
            $uoriginal_kode = str_replace("&lt;", "&amplt;", $uoriginal_kode);
            $uoriginal_kode = str_replace("&gt;", "&ampgt;", $uoriginal_kode);
            $uoriginal_kode = str_replace("<", "&lt;", $uoriginal_kode);

            $a = ''
            . '<script type="text/syntaxhighlighter" class="brush: php; html-script: true;' . $highlighttekst . '"><![CDATA[' . "\r\n"
            . $uoriginal_kode
            . ']]></script>' . "\r\n";

         }

         if($vis_b || $vis_c){

            $dataout = str_replace("\'", "'", $original_kode);

            if(substr($dataout, 0, 5) == '<?php'){

               $dataout = str_replace("<?php", "<?php\r\n\r\nnamespace whatever;", $original_kode);

            }

            ob_start();
            eval("?>".$dataout."<?php ");
            $output = ob_get_contents();
            ob_end_clean();

            if($vis_b){

               $b = $output;
               $b = str_replace("<", "&lt;", $b);
               $b = str_replace(">", "&gt;", $b);
               $b = str_replace("  ", "&nbsp;&nbsp;", $b);
               $b = str_replace("\r\n", "<br>\r\n", $b);

            }

            if($vis_c){

               $c = $output;

            }

         }

         break;
/*
      case 'phpgammel' :
         $class = 'kode_php';
         $vis_markeraltknap = true;

         if($vis_a){

            $a = highlight_string($original_kode, true);
            $a = str_replace('<?php', '&lt;?php', $a);
            $a = str_replace('?>', '?&gt;', $a);
            // Når man marker alt i kode feltet og kopiere det så kommer der et ekstra mellem til sidst.
            // Det mellemrum bliver fjernet med de næste linier.
            //$a = str_replace("</span>\n</span>\n</code>", "</span></span></code>", $a);
            //$a = str_replace("</span>\n</span></code>", "</span></span></code>", $a);
            //$a = str_replace("</span>\n</code>", "</span></code>", $a);

         }

         if($vis_b || $vis_c){

            $dataout = str_replace("\'", "'", $original_kode);

            if(substr($dataout, 0, 5) == '<?php'){

               $dataout = str_replace("<?php", "<?php\r\n\r\nnamespace whatever;", $original_kode);

            }

            ob_start();
            eval("?>".$dataout."<?php ");
            $output = ob_get_contents();
            ob_end_clean();

            if($vis_b){

               $b = $output;
               $b = str_replace("<", "&lt;", $b);
               $b = str_replace(">", "&gt;", $b);
               $b = str_replace("  ", "&nbsp;&nbsp;", $b);
               $b = str_replace("\r\n", "<br>\r\n", $b);

            }

            if($vis_c){

               $c = $output;

            }

         }

         break;

      case 'htmlgammel' :
         $class = 'kode_html';
         $vis_markeraltknap = true;

         if($vis_a){

            $a = $original_kode;
            $a = str_replace("&lt;", "&amp;lt;", $a);
            $a = str_replace("&gt;", "&amp;gt;", $a);
            $a = highlighthtmlkode($a); // dette skal ikke udføres mellem <script> og </script>

         }

         if($vis_b){

            // der er ingen b til HTML fordi det er det samme som a da HTML ikke laver noget output

         }

         if($vis_c){

            $c = $original_kode;

         }

        break;
*/
      case 'html' :
      case 'html2' :
         $class = 'kode_html';
         $vis_markeraltknap = true;

         if($vis_a){

            $uoriginal_kode = $original_kode;
            //$uoriginal_kode = str_replace("<script", "&lt;script", $original_kode);
            //$uoriginal_kode = str_replace("</script", "&lt;script", $original_kode);
            $uoriginal_kode = str_replace("&lt;", "&amplt;", $uoriginal_kode);
            $uoriginal_kode = str_replace("&gt;", "&ampgt;", $uoriginal_kode);
            $uoriginal_kode = str_replace("<", "&lt;", $uoriginal_kode);

            $a = ''
            . '<script type="text/syntaxhighlighter" class="brush: js; html-script: true' . $highlighttekst . '"><![CDATA[' . "\r\n"
            . $uoriginal_kode
            . ']]></script>' . "\r\n";

         }

         if($vis_b){

            // der er ingen b til HTML fordi det er det samme som a da HTML ikke laver noget output

         }

         if($vis_c){

            $c = $original_kode;

         }

        break;

      default :
         trigger_error('"' . $type . '" er ikke en gyldig valgmulighed for syntax highlightning af kode.');
         $a = str_replace("<", "&lt;", $original_kode);
         $a = str_replace(">", "&gt;", $a);
         break;

   }



   if(isset($a)){

      $indhold .= '<div class="nogetkodenogetholder">';

      if($vis_markeraltknap){

         //$indhold .= '<button onClick="location.href(\'#ddf\')">';
         //$indhold .= 'Gå til resultat';
         //$indhold .= '</button>';

         //$indhold .= '<span style="width: 10px;"></span>';
/*
         $indhold .= '<button class="markeralt" onClick="SelectAllByParent(this);">';
         $indhold .= 'Marker alt';
         $indhold .= '</button>';
*/

         if($vistilstand == 1){

            $indhold .= '<button class="markeralt" onClick="visParentNoget(this);">';
            $indhold .= 'Skjul';
            $indhold .= '</button>';

         }else{

            $indhold .= '<button class="markeralt" onClick="visParentNoget(this);">';
            $indhold .= 'Vis';
            $indhold .= '</button>';

         }

         $indhold .= '<span class="dobbeltklikinfo">(' . my_mb_ucfirst($GLOBALS['setup']['l_kodeboks_dobbeltklik']) . ')</span>';
/*
         $indhold .= '<button class="markeralt" onClick="VisAllByParent(this);">';
         $indhold .= 'Vis';
         $indhold .= '</button>';

         $indhold .= '<button class="markeralt" onClick="SkjulAllByParent(this);">';
         $indhold .= 'Skjul';
         $indhold .= '</button>';
*/

         //$indhold .= '<button class="markeralt" onClick="window.document.location.href(\'xxx.php\');">';
         //$indhold .= 'Gem som fil';
         //$indhold .= '</button>';

         $indhold .= clearboth();

      }

      $indhold .= '<div class="kode nowrap fontsize_small bordertype4 borderradius5px';

      (isset($class))
         ? $indhold .= " $class"
         : $indhold .= '';

      $indhold .= '"';

      ($vistilstand == 1)
         ? $indhold .= ''
         : $indhold .= ' style="display: none;"';

      $indhold .= '>';
      $indhold .= $a;
      $indhold .= '</div>';

      $indhold .= '</div>';

   }

   if(isset($b)){

      if(isset($a)){

         $indhold .= '<div class="kode midt fontsize_small background_color_5 bordertype4 borderradius5px">';
         $indhold .= 'Koden ovenfor giver følgende resultat';
         $indhold .= '</div>';

      }

      $indhold .= '<!--ignore-->';
      $indhold .= '<div class="kode nowrap fontsize_small background_color_4 bordertype4 borderradius5px">';
      $indhold .= "\r\n";
      $indhold .= $b;
      $indhold .= "\r\n";
      $indhold .= '</div>';
      $indhold .= '<!--ignore-->';

   }

   if(isset($c)){

      if(isset($a) || isset($b)){

         $indhold .= '<div class="kode midt fontsize_small background_color_5 bordertype4 borderradius5px">';
         $indhold .= 'Koden ovenfor giver følgende resultat i din browser';
         $indhold .= '</div>';

      }

      $indhold .= '<!--ignore-->';
      $indhold .= '<div class="kode outputb fontsize_small fontfamily_5 background_color_4 bordertype4 borderradius5px">';
      $indhold .= $c;
      $indhold .= '</div>';
      $indhold .= '<!--ignore-->';

   }

   return $indhold;

}



function highlighthtmlkode($htmlkode){

   $tagPattern = "/<[^>]*>/";
   $result = preg_replace_callback($tagPattern, "matchCallback", $htmlkode);
   $result = str_replace(" ", "&nbsp;", $result);
   $result = str_replace("\r\n", "<br>", $result);
   $result = str_replace("<span&nbsp;", "<span ", $result);
   return $result;

}



function matchCallback($matches){

   // skal ikke udfører denne kode i javascript delen af koden <script></script> da der kan være > og < tegn i if(x > 0)...
   $match = str_replace("<", "&lt;", $matches[0]);
   $match = str_replace(">", "&gt;", $match);
   $attributePattern = '/([^=\s]*)\s*=\s*"([^"]*)"/';
   $replace = '</span><span class="htmlkodehighlight_attribut">${1}</span>=<span class="htmlkodehighlight_value">"${2}"</span><span class="htmlkodehighlight_tag">';
   return '<span class="htmlkodehighlight_tag">' . preg_replace($attributePattern, $replace, $match) . '</span>';

}



function viseksterntbilled($url, $alt = '', $width = '', $height = ''){

   $indhold = '';

   $indhold .= '<img src="' . $url . '" alt="' . $alt . '"';

   if($width != '' || $height != ''){

      $indhold .= ' style="';

      if($width != ''){

         $indhold .= 'width: ' . $width . 'px;';

      }

      if($height != ''){

         $indhold .= 'height: ' . $height . 'px;';

      }

      $indhold .= '"';

   }

   $indhold .= '>';

   return $indhold;

}



function bold($data){

   return '<span class="bold">' . $data . '</span>';

}



function sogspecialbesked($sogetekst){

   $indhold = '';

   if(strstr(mb_strtolower($sogetekst), 'pgo')){

      $indhold .= '<div>';
      $indhold .= '<div class="sogspecialbeskedholder">';
      $indhold .= '<div class="sogspecialbeskedoverskrift fontsize_large">* Info om PGO scootere *</div>';
      $indhold .= '<div class="sogspecialbeskedindhold">';

      $indhold .= 'Da der er mange som søger efter PGO'
                . ' og spørger om jeg ikke har noget om PGO'
                . ' har jeg valgt at skrive om PGO scootere.'
                . "\r\n"
                . "\r\n"
                . 'Se '.ahref('galleri.php#pgo', 'Galleri # PGO').' og '.ahref('altompgo.php', 'PGO').'.'
                . "\r\n"
                ;

      $indhold .= '</div>';
      $indhold .= '</div>';
      $indhold .= '</div>';
      $indhold .= "\r\n";

   }

   return $indhold;

}



function sog($sogetekst){

   //$body_regex    = '#(.*' . preg_quote($sogetekst, '#') . '.*)#Sis';
   $body_regex    = '#' . preg_quote($sogetekst, '#') . '#i';
   $title_regex   = '#\$overskrift = "(.*?)"#Sis';

   $mappe   = $GLOBALS['setup']['rodenogdatamappe'];
   $sider   = array();
   $seen    = array();
   $sorter  = false;
   $overskrifter  = array();

   if(is_readable($mappe) && ($d = dir($mappe))){

      while (false !== ($f = $d->read())){

         $path = $d->path . "/" . $f;

         if(is_file($path) && is_readable($path)){

            //$file = join('', file($path));
            $file = file_get_contents($path);

            //if(preg_match($body_regex, $file)){
            if(stripos($file, $sogetekst) !== false){

               $uri = basename($path);

               if(preg_match($title_regex, $file, $match)){

                  array_push($sider, array($uri, str_replace('\\', '', $match[1])));
                  $sorter = true;

               }else{

                  array_push($sider, array($uri, str_replace('\\', '', $uri)));
                  $sorter = true;

               }

            }

            $file = ''; // slet data ved ikke om det hjælper

         }

      }

      $d->close();

   }

   if($sorter){

      foreach($sider as $key => $row){

         $overskrifter[$key] = utf8strtolower($row[1]);

      }

      // SORT_ASC, SORT_DESC, SORT_REGULAR, SORT_NUMERIC, SORT_STRING.
      array_multisort($overskrifter, SORT_ASC, SORT_STRING, $sider);

   }

   return $sider;

}



function vissogeresultater(){

   $indhold = '';
   $fund = '';
   $fundnesider = array();

   $tip = '<div>Tip : Skriv kun et eller to ord og undgå tegn som + og - og / for at finde flest sider.</div>';

   if($_SERVER['REQUEST_METHOD'] == "POST"){
   if(isset($_POST['funktion'])){
   if($_POST['funktion'] == "sog"){
   if(isset($_POST['sogetekst'])){

      //$sogetekst = filter_input(INPUT_POST, 'sogetekst', FILTER_SANITIZE_SPECIAL_CHARS);
      $sogetekst = filter_input(INPUT_POST, 'sogetekst');
      $sogetekst = trim($sogetekst);
      $sogetekst = mb_substr($sogetekst, 0, 100);

      $sogetekstudenspecialtegn = $sogetekst;
      $sogetekstudenspecialtegn = str_replace('<', '&lt;', $sogetekstudenspecialtegn);
      $sogetekstudenspecialtegn = str_replace('>', '&gt;', $sogetekstudenspecialtegn);
      $sogetekstudenspecialtegn = $sogetekstudenspecialtegn;

      if($sogetekst == ''){

         $indhold .= "Søgningen er tom.\r\n";
         //$indhold .= "\r\n";
         //$indhold .= 'Skriv for eksempel <span class="bold">karburator</span> i søgefeltet og tryk på enter.' . "\r\n";

      }else{

         $fundnesider = sog($sogetekst);

      }

      if(count($fundnesider)){

         $derernogetpaderigtigesider = false;

         foreach($fundnesider as $k => $v){

            // sider som ikke skal med i søgningen
            if(   $v[0] == "sog.php"
               || $v[0] == "visbilled.php"
               || $v[0] == "fejl.php"
               || $v[0] == "sogningerfejlbesog.php"
               || $v[0] == "statistik.php"
               || $v[0] == "tilfeldig.php"
               || $v[0] == ".htaccess"
               || $v[0] == "elektrisk.php"
               || $v[0] == "motor.php"
               || $v[0] == "service_fejlfinding.php"
               || $v[0] == "specielt_2taktscootere.php"
               || $v[0] == "specielt_elektriskescootere.php"
               || $v[0] == "transmission.php"
               || $v[0] == "ratingoversigt.php"
               || $v[0] == "windows7.php"
               || $v[0] == "kode_get.php"
               || $v[0] == "forum.php"
            ){

               unset($fundnesider[$k]);

            }

         }

         foreach($fundnesider as $k => $v){

            $derernogetpaderigtigesider = true;

            $fund .= '<div>';

            if(isset($v[1]) && $v[1] != ''){

               $nytitle = $v[1];
               $nytitle = str_replace('<', '&lt;', $nytitle);
               $nytitle = str_replace('>', '&gt;', $nytitle);
               $nytitle = my_mb_ucfirst($nytitle);

               if(substr($v[0], 0, 5) == 'altom'){

                  $fund .= ahref($v[0], $nytitle);

               }else{

                  $fund .= ahref($v[0], $nytitle);

               }

            }else{

               $fund .= ahref($v[0], '[Ingen overskrift] - ' . $v[0]);

            }

            $fund .= '</div>';

         }

         if($derernogetpaderigtigesider){

            $indhold .= 'Fandt <span class="bold">"' . $sogetekstudenspecialtegn . '"</span> på ' . count($fundnesider) . (count($fundnesider) < 2 ? ' side' : ' sider') . '.' . "\r\n";
            $indhold .= "\r\n";
            //$indhold .= sogspecialbesked($sogetekst);
            $indhold .= $fund;

         }else{

            $indhold .= 'Teksten <span class="bold">"' . $sogetekstudenspecialtegn . '"</span> blev ikke fundet.' . "\r\n";
            $indhold .= "\r\n";
            //$indhold .= sogspecialbesked($sogetekst);
            $indhold .= $tip;

         }

      }else{

         if($sogetekst != ''){

            $indhold .= 'Teksten <span class="bold">"' . $sogetekstudenspecialtegn . '"</span> blev ikke fundet.' . "\r\n";
            $indhold .= "\r\n";
            $indhold .= mentedu($sogetekst);
            //$indhold .= sogspecialbesked($sogetekst);
            $indhold .= $tip;

         }

      }

      //if(!$GLOBALS['setup']['lokalt']){
      if($_SERVER['REQUEST_METHOD'] == "POST"){
      if(isset($_POST['funktion'])){
      if($_POST['funktion'] == "sog"){
      if(isset($_POST['sogetekst'])){

         //gemsogningifil($_POST['sogetekst'], count($fundnesider)); // brug eventuelt som backup hvis database ikke virker
         $indhold .= gemsogetekstidatabase($_POST['sogetekst'], count($fundnesider));

      }
      }
      }
      }
      //}

      return $indhold;

   }
   }
   }
   }

}



function mentedu($sogetekst){

   $indhold = '';
   $sogetekst = trim($sogetekst);
   $words = array();
   $ekstrasogeordfil = $GLOBALS['setup']['roden'] . '/' . $GLOBALS['setup']['datamappe'] . '/php/sogeord.php';

   $sogetekst = mb_strtolower($sogetekst); // lav til lower case eller bliver mente du ikke magen til når man starter med stor som når Firefox OS browser app automatisk gør det første bogstav stort når man søger

   if(file_exists($ekstrasogeordfil)){

      $words = include_once $ekstrasogeordfil;

   }

   $words = array_unique($words);

   // no shortest distance found, yet
   $shortest = -1;

   // loop through words to find the closest
   foreach($words as $word){

      // calculate the distance between the input word,
      // and the current word
      $lev = levenshtein($sogetekst, $word);

      // check for an exact match
      if($lev == 0){

         // closest word is this one (exact match)
         $closest = $word;
         $shortest = 0;

         // break out of the loop; we've found an exact match
         break;
      }

      // if this distance is less than the next found shortest
      // distance, OR if a next shortest word has not yet been found
      if($lev <= $shortest || $shortest < 0){

         // set the closest match, and shortest distance
         $closest  = $word;
         $shortest = $lev;

      }

   }

   if(!$shortest == 0){

      if(isset($closest[0])){
      if($closest[0] == $sogetekst[0]){
      if($closest[1] == $sogetekst[1]){

         $indhold .= 'Mente du : <span class="bold">"' . $closest . '"</span> ?';
         $indhold .= "\r\n";
         $indhold .= ''
            . formbox('0', '', '', $_SERVER["PHP_SELF"], 'post', '', ''
               . input('0', 'hidden', 'funktion', 'sog')
               . input('0', 'hidden', 'sogetekst', $closest, '30', '', 'sogetekst', '', '', '', '100')
               . input('0', 'submit', 'sog_sendknap', 'Ja da', '', '', '', '', '')
            );
         $indhold .= "\r\n";
         $indhold .= "\r\n";

      }
      }
      }

   }

   return $indhold;

}



function billede(){

   // Det er meningen at $_SERVER["QUERY_STRING"] skal sættes til
   // noget i stil med "xxxxxx/billeder/billedxxxx.jpg"

   $indhold = '';
   $billede = '';
   $tekst = array();

   if(isset($_SERVER["QUERY_STRING"])){

      if($_SERVER["QUERY_STRING"] == ''){

         $query = $GLOBALS['setup']['dataogbilledmappe'] . '/' . 'fejl/fail0001.gif';
         $tekst[] = 'Der er ikke valgt noget billede.';

      }else{

         $query = $_SERVER["QUERY_STRING"];
         $query = rawurldecode($query);

      }

      if(file_exists($GLOBALS['setup']['roden'] . '/' . $query)){

         $visbilledsrc = $query;

         //$billede = '<a href="javascript:history.back();">';
         //$billede .= visbilled('0', $visbilledsrc, 'forskellige billeder', '', null, false, 'onmouseover="Tip(\'Klik for at gå tilbage\');" onmouseout="UnTip();"', null, null, null, null, true, null, null, 'vertical-align: bottom; border: 0px solid #000;');
         $billede .= visbilled('0', $visbilledsrc, 'forskellige billeder', '', null, false, null, null, null, null, null, true, null, null, 'vertical-align: bottom; border: 0px solid #000;');
         //$billede .= '</a>';

      }else{

         $tekst[] = 'Billedet blev ikke fundet.';

         $faildatabase = array(
             'fejl/fail0001.gif'
            ,'fejl/fail0002.gif'
            ,'fejl/fail0003.gif'
            ,'fejl/fail0004.gif'
            ,'fejl/fail0005.gif'
            ,'fejl/fail0006.gif'
            ,'fejl/fail0007.gif'
            ,'fejl/fail0008.gif'
            ,'fejl/fail0009.gif'
            ,'fejl/fail0010.gif'
            );

         $failrandom = array_rand($faildatabase,1);
         $billedrandom = $faildatabase[$failrandom];
         $visbilledsrc = $GLOBALS['setup']['dataogbilledmappe'] . '/' . $billedrandom;

         $billede = visbilled('0', $visbilledsrc, 'forskellige billeder', '', null, false, '', null, null, null, null, true);

      }

   }

   if(!empty($tekst)){

      $indhold .= '<div style="margin: 20px auto; text-align: center; font-size: 150%;">';

      foreach($tekst as $value){

         $indhold .= $value . "<br>\r\n";

      }

      $indhold .= '</div>';

   }

   if(!empty($billede)){

      $indhold .= '<div style="margin: 0px auto; text-align: center;">';
      $indhold .= $billede;
      $indhold .= '</div>';

   }

   return $indhold;

}



function tag($data){

   $indhold = '';

   $indhold .= '<span class="tag fontfamily_5">';
   $indhold .= htmlentities($data, ENT_COMPAT, 'UTF-8');
   $indhold .= '</span>';

   return $indhold;

}



function attribut($data){

   $indhold = '';

   $indhold .= '<span class="attribut fontfamily_5">';
   $indhold .= $data;
   $indhold .= '</span>';

   return $indhold;

}



function cmp_a($a, $b){

    return strcasecmp($a, $b);

}



function flashblevikkefundet(){

   $indhold = '';

   $indhold .= '<div style="margin: 10px; padding: 10px; border: 1px dotted #888;">';
   $indhold .= 'Her skulle have været noget Adobe Flash Player indhold.' . "<br>\r\n";
   $indhold .= '<div style="margin: 10px;">' . visbilled('1', 'billed3177.jpg', 'flash logo') . '<span style="background: #fff; margin: 10px;">' . ahref('http://get.adobe.com/flashplayer/', 'Hent Adobe Flash Player', null, true) . '</span></div>';
   $indhold .= '</div>';

   return $indhold;

}



function high($tekst){

   $indhold = '';

   $indhold .= '<span class="fontfamily_5 bold">';
   $indhold .= $tekst;
   $indhold .= '</span>';

   return $indhold;

}



function knap($tekst){

   $indhold = '';

   // skal ikke break så knapper står på 2 linier men hvordan ?
   $indhold .= '<span class="tastaturknap bordertype2 borderradius5px background_color_2 box_shadow_1">';
   $indhold .= $tekst;
   $indhold .= '</span>';

   return $indhold;

}



function linkknap($link, $tekst, $abninytab = false){

   $indhold = '';

   // skal ikke break så knapper står på 2 linier men hvordan ?
   //$indhold .= "\r\n";
   //$indhold .= lidtplads('lodret');
   //$indhold .= '<div class="linkknapholder margintype2 linkknap fontsize_small">';
   $indhold .= ahref($link, my_mb_ucfirst($tekst), 'class="linkknap margintype2 fontsize_small baggrundlinearogskygge1 textshadow1 borderradius5px"', $abninytab);
   //$indhold .= '</div>';
   //$indhold .= lidtplads('lodret');
   //$indhold .= "\r\n";

   return $indhold;

}



function linkknap2($link, $tekst, $abninytab = false){

   $indhold = '';

   // skal ikke break så knapper står på 2 linier men hvordan ?
   //$indhold .= "\r\n";
   //$indhold .= lidtplads('lodret');
   //$indhold .= '<div class="">';
   $indhold .= ahref($link, my_mb_ucfirst($tekst), 'class="linkknap2 margintype3 fontsize_xxsmall baggrundlinear1 borderradius5px"', $abninytab);
   //$indhold .= '</div>';

   //$indhold .= '<div class="linkknapholder2 margintype3 linkknap2 fontsize_xxsmall">';
   //$indhold .= ahref($link, my_mb_ucfirst($tekst), 'class="baggrundlinear1 borderradius5px"', $abninytab);
   //$indhold .= '</div>';

   //$indhold .= lidtplads('lodret');
   //$indhold .= "\r\n";

   return $indhold;

}



function menugenvej($data){

   $indhold = '';

   if(is_array($data)){

      foreach($data as $key => $value){

         $indhold .= '<span class="menugenvej background_color_2">';
         $indhold .= my_mb_ucfirst($value);
         $indhold .= '</span>';

         if(count($data)-1 != $key){

            $indhold .= visbilled('2', 'ikoner/menupil.png', '→', null, null, null, 'class="menugenvejpil"', null, '11', '11');

         }

      }

   }else{

      trigger_error('Ikke et array : ' . $data);

   }

   //$indhold .= "\r\n";

   return $indhold;

}



function detteerentestside(){

   $indhold = '';

   $indhold .= 'En ud af flere testsider hvor jeg prøver forskellig kode';

   return $indhold;

}



function nyhed($data){

   $indhold = '';

   if(is_array($data)){

      foreach($data as $key => $value){

         $indhold .= afsnit($key, $value);

      }

   }

   return $indhold;

}



function stjerne($data){

   $indhold = '';

   $indhold .= '<span class="stjernenoget background_color_3 bordertype1 borderradius5px box_shadow_1">';
   $indhold .= '' . $data . '';
   $indhold .= '</span>';

   return $indhold;

}



function doraemonsays($data){

   $indhold = '';

/*
   $indhold .= '<!--ignore--><div style="
position: absolute;
left: 320px;
top: 55px;
    border-top-color: transparent;
    border-bottom-color: transparent;
    border-left-color: transparent;
    border-right-color: black;
    width: 0px;
    height: 0px;
    background: none repeat scroll 0% 0% transparent;
    border-bottom-width: 20px;
    border-right-width: 20px;
    border-left-width: 20px;
    border-top-width: 20px;
    border-style: solid;
"></div><!--ignore-->';
*/

   $indhold .= ''

      .'<div>'
      .visbilled('2', 'ikoner/doraemon2.png', 'doraemon siger noget', null, null, null, 'class="doraemonhasspokenitbilled"')
      .'<span class="doraemonhasspokenit bordertype2 borderradius5px">'
      .$data
      .clearboth()
      .'</span>'
      .'</div>'
      .clearboth()
      ."\r\n"
      ;

   return $indhold;

}



function underholdning_henttitle($database){

   $indhold = '';



   // hent alle numre fra database;

   $allenumrefradatabase = array();

   foreach($database as $data){

      if($data[0] == ''){

         trigger_error('der mangler et nummer i underholdning database ' . $_SERVER["PHP_SELF"]);

      }

      $allenumrefradatabase[] = $data[0];

   }



   // find video nummer ud fra query ( ?14 eller ?hund_pa_scooter )

   $nummer = $database[0][0];
   $query = $_SERVER["QUERY_STRING"];

   if(isset($query) && $query != ""){

      if(is_numeric($query)){

         $nummer = $query;

      }else{

         $alletitler = array();

         foreach($database as $value){

            $alletitler[] = $value[3];

         }

         if(array_unique($alletitler) != $alletitler){

            trigger_error("Der er titler som er ens i underholdning database");

         }

         foreach($database as $value){

            if(strtolower(byttegn(rawurldecode($query))) == strtolower(byttegn($value[3]))){

               $nummer = $value[0];
               $findes = true;
               break;

            }

         }

      }

   }



   // find ud af om video nummeret findes i database
   // virker kun ved ?34 og ikke ved ?hej_med_dig

   if(($idindex = array_search($nummer, $allenumrefradatabase)) !== false){

      $findes = true;

   }else{

      $findes = false;
      $nummer = $database[0][0];

   }



   // hent beskrivelse

   $data             = $database[$idindex];
   $idnoget          = $data[0];
   $beskrivelse      = my_mb_ucfirst($data[3]);

   if($beskrivelse == ""){

      $beskrivelse = "ingen kommentar";

   }



   $indhold = $beskrivelse;

   return array($indhold, $idnoget);

}



function underholdning($deloverskrift, $bredde, $hojde, $database){

   $indhold = '';



   // hent alle numre fra database;

   $allenumrefradatabase = array();

   foreach($database as $data){

      if($data[0] == ''){

         trigger_error('der mangler et nummer i underholdning database ' . $_SERVER["PHP_SELF"]);

      }

      $allenumrefradatabase[] = $data[0];

   }



   // find video nummer ud fra query ( ?14 eller ?hund_pa_scooter )

   $nummer = $database[0][0];
   $query = $_SERVER["QUERY_STRING"];

   if(isset($query) && $query != ""){

      if(is_numeric($query)){

         $nummer = $query;

      }else{

         $alletitler = array();

         foreach($database as $value){

            $alletitler[] = $value[3];

         }

         if(array_unique($alletitler) != $alletitler){

            trigger_error("Der er titler som er ens i underholdning database");

         }

         foreach($database as $value){

            if(strtolower(byttegn(rawurldecode($query))) == strtolower(byttegn($value[3]))){

               $nummer = $value[0];
               $findes = true;
               break;

            }

         }

      }

   }



   // find ud af om video nummeret findes i database
   // virker kun ved ?34 og ikke ved ?hej_med_dig

   if(($idindex = array_search($nummer, $allenumrefradatabase)) !== false){

      $findes = true;

   }else{

      $findes = false;
      $nummer = $database[0][0];

   }



   // hent adresse, flashvars, beskrivelse

   $data             = $database[$idindex];
   $adresse          = $data[1];
   $flashvars        = $data[2];
   $beskrivelse      = my_mb_ucfirst($data[3]);
   $beskrivelselink  = strtolower(byttegn(($data[3])));
   $kategorier       = explode('+', $data[4]);

/*
   $adresse = str_replace("http://www.youtube.com/watch?v="
                        , "http://www.youtube.com/v/"
                        , $adresse);

   $adresse = str_replace("http://www.youtube.com/v/"
                        , "http://www.youtube.com/v/"
                        , $adresse);
*/

   if($beskrivelse == ""){

      $beskrivelse = "ingen kommentar";

   }



   // pil venstre

   if(($idindex - 1) < 0){

      $forrigeindex          = $allenumrefradatabase[count($database)-1];
      $forrigedata           = $database[count($database)-1];

   }else{

      $forrigeindex          = $allenumrefradatabase[$idindex - 1];
      $forrigedata           = $database[$idindex - 1];

   }


   // pil højre

   if(($idindex + 1) >= count($database)){

      $nesteindex            = $allenumrefradatabase[0];
      $nestedata             = $database[0];

   }else{

      $nesteindex            = $allenumrefradatabase[$idindex + 1];
      $nestedata             = $database[$idindex + 1];

   }

   $forrigebeskrivelse       = urlencode(kortfinurl($forrigedata[3]));
   $nestebeskrivelse         = urlencode(kortfinurl($nestedata[3]));



   // video/billed indhold

   $billedellervideoindhold = '';

   if($deloverskrift == "billeder"){

      $korturl = 'ub';

      $endeligstorrelse = array($bredde,$hojde);

      $billed = 'billeder/'.$adresse;

      list($originalx, $originaly) = getimagesize($billed);

      $originalratio = $originalx/$originaly;

      if($endeligstorrelse[0] / $endeligstorrelse[1] > $originalratio){

         $thumbnailstorrelse[0] = round($endeligstorrelse[1] * $originalratio);
         $thumbnailstorrelse[1] = $endeligstorrelse[1];

      }else{

         $thumbnailstorrelse[0] = $endeligstorrelse[0];
         $thumbnailstorrelse[1] = round($endeligstorrelse[0] / $originalratio);

      }

      if($endeligstorrelse[0] > $originalx && $endeligstorrelse[1] > $originaly){

         $thumbnailstorrelse[0] = $originalx;
         $thumbnailstorrelse[1] = $originaly;

      }

      $billedwidth = $thumbnailstorrelse[0];
      $billedheight = $thumbnailstorrelse[1];

      // vis billede på egen side
      // $billedellervideoindhold .= ahref($GLOBALS['setup']['domainogdatamappe'] . '/' . 'visbilled.php?' . $GLOBALS['setup']['datamappe'] . '/' . $GLOBALS['billedmappe'] . '/' . $adresse, visbilled('1', $adresse, $beskrivelse, null, null, null, null, $billedwidth, $billedheight, false, null, null, true));

      // highslide JS
      $billedellervideoindhold .= ahref(
           $GLOBALS['setup']['billedmappe'] . '/' . $adresse
         , visbilled('1', $adresse, $beskrivelse, null, null, null, null, false, $billedwidth, $billedheight, false, null, null, true)
         , 'class="highslide" onclick="return hs.expand(this, { captionEval: \'this.thumb.alt\' })"'
         );

   }elseif($deloverskrift == "videoer"){

      $korturl = 'uv';

      $billedellervideoindhold .= visflash('0', $adresse, '', false, $bredde, $hojde, $flashvars, true);
      //$billedellervideoindhold .= visflash('0', $adresse, '', false, $bredde, $hojde, $flashvars, false);

   }elseif($deloverskrift == "hjemmeside videoer"){

      $korturl = 'nv';

      $billedellervideoindhold .= visflash('0', $adresse, '', false, $bredde, $hojde, $flashvars, true);
      //$billedellervideoindhold .= visflash('0', $adresse, '', false, $bredde, $hojde, $flashvars, false);

   }



   // vis mulighed for bruger at send besked hvis video ikke virker

   $footer = '';

   if($deloverskrift == "videoer"){

      //$footer .= '<div>';
      //$footer .= 'Det kræver Adobe Flash Player for at kunne se videoerne. ' . ahref('http://get.adobe.com/flashplayer/', 'Hent Adobe Flash Player');
      //$footer .= '</div>';

      //$footer .= '<div style="height: 10px; clear: both;"></div>';

      $footer .= '<div>';

      if(isset($_POST["funktion"]) && $_POST["funktion"] == "videovirkerikke"){

         if(sendemail($_POST["emne"], $_POST["kommentar"])){

            $footer .= beskedenblevsendt(true);

         }else{

            $footer .= beskedenblevsendt(false);
/*
Måske bedre ikke at vise beskeden da den indeholder alle mulige data.
            $footer .= ''
               . formbox('1', '', '', $_SERVER['PHP_SELF'], 'post', '', ''
                  . input('0', 'textarea', 'kommentar', $_POST["kommentar"], '20x4', 'Besked', 'kontakt_besked_b')
               );
*/
         }

      }else{

         $infoombrugerenscomputer = '';
         $infoombrugerenscomputer .= "<br>";
         $infoombrugerenscomputer .= "<br>";
         $infoombrugerenscomputer .= "--- _SERVER DATA ---<br>";
         $infoombrugerenscomputer .= "<br>";
         $infoombrugerenscomputer .= "<br>";

         foreach($_SERVER as $key => $value){

            $infoombrugerenscomputer .= "$key : $value<br>";

         }

         $infoombrugerenscomputer = trim($infoombrugerenscomputer); // på grund af validering skal der ikke være nogen linieskift og mellemrum

//         $footer .= '<br>' . "\r\n";

         $footer .= ''
            . formbox('0', '', '', $_SERVER['PHP_SELF'] . '?' . $nummer, 'post', '', ''
               . input('0', 'hidden', 'funktion', 'videovirkerikke')
               . input('0', 'hidden', 'emne', 'video virker ikke')
               . input('0', 'hidden', 'kommentar', $GLOBALS['setup']['domain'] . htmlspecialchars($_SERVER['REQUEST_URI']) . ' blev markeret som virker ikke.' . "<br>" . 'Link : ' . $adresse . "<br>" . 'Info om brugerens computer : ' . $infoombrugerenscomputer)
               . input('1', 'submit', 'videovirkerikke_sendknap', 'Send besked hvis videoen ikke længere virker', '', '', 'sjove_sendknap', '', '')
            );

      }

      $footer .= '</div>';

   }



   // liste

   $liste = '';

   foreach($database as $value){

      $etnummer         = $value[0];
      $adresse          = $value[1];
      $beskrivelseb     = my_mb_ucfirst($value[3]);
      $beskrivelselinkc = strtolower(byttegn(($value[3])));

      if($beskrivelseb == ""){

         $beskrivelseb = "ingen kommentar";

      }

      if($etnummer != ''){

         $liste .= '( ' . ahref($GLOBALS['setup']['domain'] . $_SERVER["PHP_SELF"] . '?' . $etnummer, $etnummer) . ' )';

      }else{

         $liste .= '( mangler nummer )';

      }

      $liste .= ' ';

      if($nummer != $etnummer){

         $liste .= ahref($GLOBALS['setup']['domain'] . $_SERVER["PHP_SELF"] . '?' . $beskrivelselinkc . '#' . $deloverskrift, $beskrivelseb);

      }else{

         $liste .= visbilled('2', 'ikoner/stjerne2.png', 'animation');
         $liste .= ahref($GLOBALS['setup']['domain'] . $_SERVER["PHP_SELF"] . '?' . $beskrivelselinkc . '#' . $deloverskrift, $beskrivelseb);
         $liste .= visbilled('2', 'ikoner/stjerne2.png', 'animation');

      }

      $liste .= "\r\n";

   }



   // kategorier

   $kategorier = array();

   foreach($database as $databasevalue){

      $etnummer         = $databasevalue[0];
      $adresse          = $databasevalue[1];
      $beskrivelseb     = my_mb_ucfirst($databasevalue[3]);
      $beskrivelselinkb = strtolower(byttegn(($databasevalue[3])));
      $kategorierfradata  = explode('+', $databasevalue[4]);

      if(isset($kategorierfradata)){

         foreach($kategorierfradata as $kategorierfradatavalue){

            switch($kategorierfradatavalue){

               case '1' :
                  $kategorier['sjove'][] = $databasevalue;
                  break;

               case '2' :
                  $kategorier['dyr'][] = $databasevalue;
                  break;

               case '3' :
                  $kategorier['ombygget og opfindelser'][] = $databasevalue;
                  break;

               case '4' :
                  $kategorier['udklædning'][] = $databasevalue;
                  break;

               case '5' :
                  $kategorier['kendte personer'][] = $databasevalue;
                  break;

               case '6' :
                  $kategorier['transport af ting'][] = $databasevalue;
                  break;

               case '7' :
                  $kategorier['flere personer'][] = $databasevalue;
                  break;

               case '8' :
                  $kategorier['reklamer'][] = $databasevalue;
                  break;

               case '9' :
                  $kategorier['danske'][] = $databasevalue;
                  break;

               case '10' :
                  $kategorier['on board cam'][] = $databasevalue;
                  break;

               case '11' :
                  $kategorier['musik'][] = $databasevalue;
                  break;

               case '12' :
                  $kategorier['dokumentar'][] = $databasevalue;
                  break;

               case '13' :
                  $kategorier['vildt'][] = $databasevalue;
                  break;

               case '14' :
                  $kategorier['tv og film'][] = $databasevalue;
                  break;

               case '15' :
                  $kategorier['styrt'][] = $databasevalue;
                  break;

               case '16' :
                  $kategorier['banekørsel'][] = $databasevalue;
                  break;

               case '17' :
                  $kategorier['tricks'][] = $databasevalue;
                  break;

               // HTML osv fra 100 og op

               case '101' :
                  $kategorier['HTML'][] = $databasevalue;
                  break;

               case '102' :
                  $kategorier['CSS'][] = $databasevalue;
                  break;

               case '103' :
                  $kategorier['Javascript'][] = $databasevalue;
                  break;

               case '104' :
                  $kategorier['PHP'][] = $databasevalue;
                  break;

               case '110' :
                  $kategorier['programmer'][] = $databasevalue;
                  break;

               case '111' :
                  $kategorier['grafik'][] = $databasevalue;
                  break;

               default :
                  $kategorier['ukategoriseret'][] = $databasevalue;
                  break;

            }

         }

      }

   }

   $kategoriindhold = '';

   foreach($kategorier as $kategoriboxnavn => $valueppp){

      $numreidennekategori = array();

      //array_push($numreidennekategori, array($kategoriboxnavn));

      foreach($valueppp as $aaa){

         //$qwqwqw = ahref($GLOBALS['setup']['domain'] . $_SERVER["PHP_SELF"] . '?' . $aaa[0], my_mb_ucfirst($aaa[3]));

         $denherbeskrivelse         = urlencode(kortfinurl($aaa[3]));

         ($aaa[3] != '')
            ? $nogetteksttillinket = my_mb_ucfirst($aaa[3])
            : $nogetteksttillinket = '[mangler tekst]';

         $qwqwqw = ahref($GLOBALS['setup']['domain'] . '/' . $korturl . '/' . $aaa[0] . '/' . $denherbeskrivelse, $nogetteksttillinket);

         if($aaa[0] != '' && $nummer == $aaa[0]){

            $qwqwqw = '<div class="kategorilinkholder kategorilinkvalgt">'
               . $qwqwqw
               . '</div>'
               ;

         }else{

            $qwqwqw = '<div class="kategorilinkholder">'
                 . $qwqwqw
                 . '</div>'
                 ;

         }

         array_push($numreidennekategori, array($qwqwqw));

      }

      array_unshift($numreidennekategori, array($kategoriboxnavn));

      $kategoriindhold =
         box(array('700')
            ,$numreidennekategori
         );

      $qwrouqnreoqer[$kategoriboxnavn] = $kategoriindhold;

   }


   // start på underholdningsholder

   $indhold .= '<div id="underholdningholder">';

   if(!$findes){

      $indhold .= '<div style="text-align: center; color: red;">';
      $indhold .= 'Linket blev ikke fundet. Viser i stedet det senest tilføjet.';
      $indhold .= '</div>';

   }

   $indhold .= '<div id="underholdningmenuholder">';

   $indhold .= '<div id="underholdningpilvenstre">';
   //$indhold .= ahref($GLOBALS['setup']['domain'] . $_SERVER["PHP_SELF"] . '?' . $forrigeindex, visbilled('2', 'pilvenstre.png', 'forrige', false, null, null, null, null, null, null, false));
   //$indhold .= ahref($GLOBALS['setup']['domain'] . '/' . $korturl . '/' . $forrigeindex . '/' . $forrigebeskrivelse, visbilled('2', 'pilvenstre.png', 'forrige', false, null, null, null, null, null, null, false));

//   $indhold .= ahref($GLOBALS['setup']['domain'] . '/' . $korturl . '/' . $forrigeindex . '/' . $forrigebeskrivelse, visbilled('2', 'pilvenstre2.png', 'forrige', false, null, null, null, null, null, null, false));
   $indhold .= ahref($GLOBALS['setup']['domain'] . '/' . $korturl . '/' . $forrigeindex . '/' . $forrigebeskrivelse, null, 'title="Forrige"');
   $indhold .= '</div>';

   $indhold .= '<div id="underholdningpilhojre">';
   //$indhold .= ahref($GLOBALS['setup']['domain'] . $_SERVER["PHP_SELF"] . '?' . $nesteindex, visbilled('2', 'pilhojre.png', 'næste', false, null, null, null, null, null, null, false));
   //$indhold .= ahref($GLOBALS['setup']['domain'] . '/' . $korturl . '/' . $nesteindex . '/' . $nestebeskrivelse, visbilled('2', 'pilhojre.png', 'næste', false, null, null, null, null, null, null, false));
//   $indhold .= ahref($GLOBALS['setup']['domain'] . '/' . $korturl . '/' . $nesteindex . '/' . $nestebeskrivelse, visbilled('2', 'pilhojre2.png', 'næste', false, null, null, null, null, null, null, false));
   $indhold .= ahref($GLOBALS['setup']['domain'] . '/' . $korturl . '/' . $nesteindex . '/' . $nestebeskrivelse, null, 'title="Næste"');
   $indhold .= '</div>';

   $indhold .= '<div id="underholdningbeskrivelseholder">';
   //$indhold .= ahref($GLOBALS['setup']['domain'] . $_SERVER["PHP_SELF"] . '?' . $beskrivelselink, $beskrivelse);
   $indhold .= '<div id="underholdningbeskrivelsetekst">';
   $indhold .= $beskrivelse;
   $indhold .= '</div>';
   $indhold .= '</div>';

   $indhold .= clearboth();

   $indhold .= '</div>'; // slut på underholdningmenuholder
   //$indhold .= "\r\n";

   //$indhold .= '<div id="underholdningindhold" style="width: ' . $bredde . 'px; height: ' . $hojde . 'px;">';
   $indhold .= '<div id="underholdningindhold">';
   $indhold .= $billedellervideoindhold;
   $indhold .= '</div>';

   $indhold .= '<div style="height: 10px; clear: both;"></div>';

   $indhold .= '<div class="textaligncenter">';
   $indhold .= $footer;
   $indhold .= '</div>';

   $indhold .= '</div>'; // slut på underholdningholder
//   $indhold .= "\r\n";


/*

   $indhold .= '<div>';
   $indhold .= my_mb_ucfirst($deloverskrift) . ' (nyeste tilføjet øverst) :';
   $indhold .= '</div>';

   $indhold .= '<div>';
   $indhold .= $liste;
   $indhold .= '</div>';

*/
   $indhold .= clearboth();

   $indhold .= "\r\n";

   $xxx[$deloverskrift] = $indhold;

   foreach($qwrouqnreoqer as $key => $value){

      $xxx[$key] = $value;

   }

   return $xxx;

}



function kortfinurl($data){

   // lav SEO venlig url så det ser flot ud

   $indhold = '';

   $indhold .= byttegn($data);
   $indhold = str_replace('__', '_', $indhold);
   $indhold = str_replace('_', '-', $indhold);
   $indhold = preg_replace('/\s[\s]+/', '-', $indhold); // fjern flere mellemrum
   $indhold = preg_replace('/[\s\W]+/', '-', $indhold); // fjern mellerum og non-alpha-numeric
   $indhold = preg_replace('/^[\-]+/', '', $indhold); // fjern - i starten
   $indhold = preg_replace('/[\-]+$/', '', $indhold); // fjern - i slutningen
   $indhold = strtolower($indhold);

   return $indhold;

}



function galleriholder($data){

   $indhold = '';

   $indhold .= '<!--ignore-->';

   $indhold .= galleri('start');

   foreach($data as $linkarray){

      $indhold .= $linkarray;

   }

   $indhold .= galleri('slut');

   $indhold .= '<!--ignore-->';

   return $indhold;

}



function spotlysholder($data, $spotlysantal){

   $indhold = '';
   //$width = 180;
   //$height = 160;

   $tilfeldigspotlys = array_rand(

      $data

   , $spotlysantal);

   //shuffle($tilfeldigspotlys);

   $widthtotal = 200 * $spotlysantal;

   $indhold .= '   <div class="spotlysholderholder baggrundlinear1 bordertype1 borderradius5px margintype4">'."\r\n";
   $indhold .= '      <div class="spotlysholderholderb fontsize_0">'."\r\n";

   foreach($tilfeldigspotlys as $noget){

      $value = $data[$noget];

      $aurl = $value[0];
      $imgurl = $value[1];
      $imgalt = $value[2];
      $overskrift = $value[2];
      $ekstratekst = $value[3];

      $indhold .= '         <a href="' . $aurl . '" class="spotlysholder background_color_2 fontsize_xsmall fontfamily_1 bordertype1 borderradius5px">';

      //$indhold .= visbilled('0', $imgurl, $imgalt, false, false, null, '" class="spotlysbillede"', null, $width, $height);
      $indhold .= visbilled('1', $imgurl, $imgalt, false, false, null, 'class="spotlysbillede"');

      $indhold .= '<div class="spotlyoverskrift fontsize_xlarge fontfamily_6">' . mb_strtoupper($overskrift) . '</div>';
      $indhold .= $ekstratekst;
      $indhold .= '</a>';
      $indhold .= "\r\n";

   }

   $indhold .= '         ' . clearboth();
   $indhold .= '      </div>'."\r\n";

   $indhold .= '   </div>'."\r\n";

   $indhold .= "\r\n";

   return $indhold;

}



function clearboth($newline = true){

   $indhold = '';

   $indhold .= '<div class="clearboth"></div>';

   if($newline){

      //$indhold .= '<!--ignore-->';
      $indhold .= "\r\n";
      //$indhold .= '<!--ignore-->';

   }


   return $indhold;

}



function lavfejl($tekst){

   $sti = debug_backtrace();

   $udput = $tekst . ' på linie ' . $sti[1]['line'] . ' i ' . $sti[1]['file'];

   trigger_error($udput, E_USER_ERROR);

}



function hrbar(){

   $indhold = '';

   $indhold .= '   <hr class="hrundersideoverskriftholder margintype4">'."\r\n"; // slut på class="hrundersideoverskriftholder"
   $indhold .= "\r\n";

   return $indhold;

}



function newline($antal){

   $indhold = '';

   for($i = 0; $antal <= 0; $i++){
      $indhold .= "\r\n";
   }

   return $indhold;

}



function gembilledeifiltilunderoverskrift($handling, $destination = '', $datatilfil){

   if($handling == "gem"){

      $fil = $GLOBALS['setup']['tempfuld'] . '/' . 'zxC_billeder.txt';

         if(checkomfindesellersopret("fil", $fil)){

            $bytesskrevet = file_put_contents($fil, $datatilfil, FILE_APPEND | LOCK_EX);

            if($bytesskrevet === false){

               trigger_error("der kunne ikke skrives til filen: \"$fil\".", E_USER_ERROR);

            }

         }

   }

}



function gemsogetekstidatabase($sogetekst, $antalfundnesider){

/*

CREATE TABLE `sogetekst` (
`id` int(11) NOT NULL auto_increment,
`tid` varchar (30) NOT NULL,
`ip` varchar (30) NOT NULL,
`sogetekst` varchar (256) NOT NULL,
`referer` varchar (256) NOT NULL,
`antalfundnesider` int (8) NOT NULL,
PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8 COLLATE utf8_danish_ci;

*/

   $indhold = '';
   $tablenavn = $GLOBALS['setup']['mysql_tablenavn_sogetekst'];
   $tid = '';
   $ip = '';
   $referer = '';

   $tid = date("d-m-Y") . " " . date("H:i:s");

   (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
      ? $ip = $_SERVER["HTTP_X_FORWARDED_FOR"]
      : $ip = $_SERVER['REMOTE_ADDR'];

   if(isset($_SERVER["HTTP_REFERER"])){

      $referer = $_SERVER["HTTP_REFERER"];

      if(stripos($referer, $GLOBALS['setup']['domain']) === 0){

         $referer = str_replace($GLOBALS['setup']['domain'], '', $referer);

      }

   }else{

      $referer = '';

   }

   if(mb_strlen($referer) > 256){

      $referer = mb_substr($referer, 0, 251) . '[...]';

   }

   if(mb_strlen($sogetekst) > 256){

      $sogetekst = mb_substr($sogetekst, 0, 251) . '[...]';

   }
/*
   echo ''
      . $indhold . "<br>\r\n"
      . $tablenavn . "<br>\r\n"
      . $tid . "<br>\r\n"
      . $ip . "<br>\r\n"
      . $referer . "<br>\r\n"
      . $sogetekst . "<br>\r\n"
      . $antalfundnesider . "<br>\r\n"
      ;
*/
   $db = new mysqli($GLOBALS['setup']['mysql_server'], $GLOBALS['setup']['mysql_bruger'], $GLOBALS['setup']['mysql_kodeord'], $GLOBALS['setup']['mysql_database']);

   if ($db->connect_errno > 0) {

      $indhold .= '<mark>Kunne ikke forbinde til database [' . $db->connect_error . ']</mark>';

   } else {

      if (!$db->set_charset("utf8")) {
      }else{
      }

      if ($stmt = $db->prepare("INSERT INTO $tablenavn (tid, ip, sogetekst, referer, antalfundnesider) VALUES (?, ?, ?, ?, ?)")) {

         $stmt->bind_param('sssss', $tid, $ip, $sogetekst, $referer, $antalfundnesider);
         $stmt->execute(); // [ Array to string conversion ]

         if($stmt->affected_rows != -1){

            //$indhold .= '<div style="color: red;">Ser ud til søgningen blev gemt i databasen</div>';

         }else{

            $indhold .= '<div style="color: red;">Fejl ! Ser ud til der gik noget galt ved forsøg på at gemme søgtekst i databasen</div>';
            trigger_error('Fejl ! Ser ud til der gik noget galt ved forsøg på at gemme søgtekst i databasen' . ' : ' . $tid . ' : ' . $ip . ' : ' . $sogetekst . ' : ' . $referer . ' : ' . $antalfundnesider);

         }

         $stmt->close();

      }else{

         // her sker fejl hvis table ikke findes
         $indhold .= '<div style="color: red;">Fejl : ' . $db->error . '</div>';
         trigger_error('Fejl : ' . $db->error);

      }

   }

   return $indhold;

}



function vissogningeridatabase($visantalsogninger){

   $indhold = '';
   $tbodyindhold = '';
   $sorter = 'id'; // standard
   $opned = 'DESC'; // standard
   $tablenavn = $GLOBALS['setup']['mysql_tablenavn_sogetekst'];

   $db = new mysqli($GLOBALS['setup']['mysql_server'], $GLOBALS['setup']['mysql_bruger'], $GLOBALS['setup']['mysql_kodeord'], $GLOBALS['setup']['mysql_database']);

   if ($db->connect_errno > 0) {

      $indhold .= '<mark>' . 'Kunne ikke forbinde til database [' . $db->connect_error . ']' . '</mark>';

   } else {

      if (!$db->set_charset("utf8")) {
      }else{
      }

      if ($stmt = $db->prepare("SELECT * FROM $tablenavn ORDER BY $sorter $opned LIMIT $visantalsogninger")) {

         $stmt->execute();

         if ($stmt->bind_result($id, $tid, $ip, $sogetekst, $referer, $antalfundnesider)) {

            while ($stmt->fetch()) {

               $tbodyindhold .= ''
                  . '<tr>'
                  . '<td>' . $id . '</td>'
                  . '<td>' . $tid . '</td>'
                  . '<td>' . $ip . '</td>'
                  . '<td>' . htmlentities($sogetekst, ENT_QUOTES, 'UTF-8') . '</td>' // søgetekst som "<style>" skal laves om så HTML koden på hjemmesiden ikke ødelægges
                  . '<td>' . htmlentities($referer, ENT_QUOTES, 'UTF-8') . '</td>' // søgetekst som "<style>" skal laves om så HTML koden på hjemmesiden ikke ødelægges
                  . '<td>' . $antalfundnesider . '</td>'
                  . '</tr>'
                  ;

            }

         }else{

            printf("Fejl: %s\n", $db->error);

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
            . '<th>Id</th>'
            . '<th>Tid</th>'
            . '<th>IP</th>'
            . '<th>Søgetekst</th>'
            . '<th>Referer</th>'
            . '<th>Fundne sider</th>'
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



function nogenmisser() {

   $indhold = '';

   $indhold .= ''
      .'<div class="ratingoversigtingendata borderradius5px background_color_10">'
      .'<h1>Wut! No data ?</h1>'
      .'<h2>Her er nogen misser i stedet</h2>'
      .'<img src="http://placekitten.com/40/160" alt="Miau 1" width="40" height="160" style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">'
      .'<img src="http://placekitten.com/81/160" alt="Miau 2" width="81" height="170" style="border-top-left-radius: 10px;">'
      .'<img src="http://placekitten.com/182/160" alt="Miau 3" width="182" height="180" style="border-top-left-radius: 10px;">'
      .'<img src="http://placekitten.com/133/160" alt="Miau 4" width="133" height="210" style="border-top-left-radius: 10px;">'
      .'<img src="http://placekitten.com/74/160" alt="Miau 5" width="74" height="230" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">'
      .'<img src="http://placekitten.com/35/160" alt="Miau 6" width="35" height="200" style="border-top-right-radius: 10px;">'
      .'<img src="http://placekitten.com/46/160" alt="Miau 7" width="46" height="170" style="border-top-right-radius: 10px;">'
      .'<img src="http://placekitten.com/57/160" alt="Miau 8" width="57" height="160" style="border-top-right-radius: 10px;">'
      .'<img src="http://placekitten.com/80/160" alt="Miau 9" width="80" height="140" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px;">'
      .'</div>'
      ;

   return $indhold;
}



// OBS: tomme linier før og efter < ?php ? > vil komme med i outputtet før <DOCTYPE...
?>
