<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$setup['nogetikon']               = 'ikoner/ikon_teoriprove2.png';

$title = "teoriprøve til lille knallert (den gamle teoriprøve)";
$overskrift = "teoriprøve til lille knallert (den gamle teoriprøve)";
$metadescription = "online udgaven af den gamle knallert teoriprøve som de 15-17 årige tidligere fik når de skulle have knallertbevis";

$GLOBALS['setup']['head'] = '
<style type="text/css">

.teoriprovemenu {
   margin: 0 auto;
   text-align: center;
}

.teoriprovemenu input {
   margin-bottom: 5px; /* så der er lidt mellemrum hvis knapperne wrapper */
}

.teori_sporgsmal_holder {
   margin: 0 auto;
   width: 682px;
}

.stortekst {
   margin: 10px;
   text-align: center;
   font-size: 150%;
}

.teori_sporgsmal {
   position: relative;
   margin-top: 10px;
   margin-bottom: 20px;
}

.teori_sporgsmal input[type=radio] {
   position: absolute;
   margin: 0;
   padding: 0;
}

.teori_sporgsmal label {
   border: 1px solid #bbb;
   position: absolute;
   border-radius: 10px;
}

.teori_sporgsmal label:hover {
   border-color: #0b0;
}

.teori_sporgsmal_holder_holder input[type=submit] {
   padding: 5px;
}

.forrige_og_neste_knap {
   width: 30%;
}

.tillykke_tekst {
   text-align: center;
   font-size: 200%;
   color: green;
   margin: 20px;
}

</style>
';

$vedligeholdelse = 0;
$labelbredde = 50;
$labelhojde = 30;
$xxx = '';
$yyy = '';
$session_navn = 'teoriprove_svar';

session_name($session_navn);
session_start();

$teori_tekst_a = 'A : Indledende manøvrer m.v.';
$teori_tekst_b = 'B : Manøvrer i vejkryds';
$teori_tekst_c = 'C : Afsluttende manøvrer på vej';

$vis_introduktion = 0;
$vis_billed = 0;
$vis_oversigt = 0;
$vis_knallertbevis = 0;
$vis_materiale = 0;
$vis_slet = 0;

$top_knapper = 1;



   /*
   A: Indledende manøvrer m.v.
   1: Risikoen ved knallertkørsel.
   2: Enemanøvrer.
   3: De første manøvrer på vej.

   B: Manøvrer i vejkryds
   4: Krydsning (ligeudkørsel i kryds).
   5: Højresving.
   6: Venstresving.

   C: Afsluttende manøvrer på vej
   7: Møde og overhaling.
   8: Kørsel i tæt og blandet trafik.
   9: Inden du selv kører.
   */



$sporgsmaldatabase = array(

   // A

    '1' => array(
       'a01.jpg'
      ,$teori_tekst_a
      ,array(
          '1' => array(array('ja', '16', '119'), array('nej', '97', '119'))
         ,'2' => array(array('ja', '16', '215'), array('nej', '97', '215'))
         ,'3' => array(array('ja', '16', '295'), array('nej', '97', '295'))
      )
   )

   ,'2' => array(
       'a02.jpg'
      ,$teori_tekst_a
      ,array(
          '1' => array(array('ja', '16', '120'), array('nej', '97', '120'))
         ,'2' => array(array('ja', '16', '200'), array('nej', '97', '200'))
         ,'3' => array(array('ja', '16', '280'), array('nej', '97', '280'))
      )
   )

   ,'3' => array(
       'a03.jpg'
      ,$teori_tekst_a
      ,array(
          '1' => array(array('ja', '16', '104'), array('nej', '97', '104'))
      )
   )

   ,'4' => array(
       'a04.jpg'
      ,$teori_tekst_a
      ,array(
          '1' => array(array('ja', '16', '135'), array('nej', '97', '135'))
         ,'2' => array(array('ja', '16', '199'), array('nej', '97', '199'))
         ,'3' => array(array('ja', '16', '279'), array('nej', '97', '279'))
      )
   )

   ,'5' => array(
       'a05.jpg'
      ,$teori_tekst_a
      ,array(
          '1' => array(array('ja', '16', '120'), array('nej', '97', '120'))
         ,'2' => array(array('ja', '16', '184'), array('nej', '97', '184'))
         ,'3' => array(array('ja', '16', '248'), array('nej', '97', '248'))
      )
   )

   ,'6' => array(
       'a06.jpg'
      ,$teori_tekst_a
      ,array(
          '1' => array(array('ja', '16', '120'), array('nej', '97', '120'))
         ,'2' => array(array('ja', '16', '184'), array('nej', '97', '184'))
      )
   )

   ,'7' => array(
       'a07.jpg'
      ,$teori_tekst_a
      ,array(
          '1' => array(array('ja', '16', '109'), array('nej', '97', '109'))
         ,'2' => array(array('ja', '16', '189'), array('nej', '97', '189'))
      )
   )

   ,'8' => array(
       'a08.jpg'
      ,$teori_tekst_a
      ,array(
          '1' => array(array('ja', '16', '104'), array('nej', '97', '104'))
         ,'2' => array(array('ja', '16', '168'), array('nej', '97', '168'))
      )
   )

   ,'9' => array(
       'a09.jpg'
      ,$teori_tekst_a
      ,array(
          '1' => array(array('ja', '16', '104'), array('nej', '97', '104'))
         ,'2' => array(array('ja', '16', '168'), array('nej', '97', '168'))
      )
   )

   ,'10' => array(
       'a10.jpg'
      ,$teori_tekst_a
      ,array(
          '1' => array(array('ja', '16', '103'), array('nej', '97', '103'))
         ,'2' => array(array('ja', '16', '167'), array('nej', '97', '167'))
         ,'3' => array(array('ja', '16', '234'), array('nej', '97', '234'))
      )
   )

   ,'11' => array(
       'a11.jpg'
      ,$teori_tekst_a
      ,array(
          '1' => array(array('ja', '16', '136'), array('nej', '97', '136'))
         ,'2' => array(array('ja', '16', '216'), array('nej', '97', '216'))
      )
   )

   // B

   ,'12' => array(
       'b01.jpg'
      ,$teori_tekst_b
      ,array(
          '1' => array(array('ja', '16', '119'), array('nej', '97', '119'))
         ,'2' => array(array('ja', '16', '199'), array('nej', '97', '199'))
      )
   )

   ,'13' => array(
       'b02.jpg'
      ,$teori_tekst_b
      ,array(
          '1' => array(array('ja', '16', '80'), array('nej', '97', '80'))
         ,'2' => array(array('ja', '16', '133'), array('nej', '97', '133'))
         ,'3' => array(array('ja', '16', '186'), array('nej', '97', '186'))
         ,'4' => array(array('ja', '16', '240'), array('nej', '97', '240'))
         ,'5' => array(array('ja', '16', '293'), array('nej', '97', '293'))
      )
   )

   ,'14' => array(
       'b03.jpg'
      ,$teori_tekst_b
      ,array(
          '1' => array(array('ja', '16', '117'), array('nej', '97', '117'))
         ,'2' => array(array('ja', '16', '194'), array('nej', '97', '194'))
         ,'3' => array(array('ja', '16', '304'), array('nej', '97', '304'))
      )
   )

   ,'15' => array(
       'b04.jpg'
      ,$teori_tekst_b
      ,array(
          '1' => array(array('ja', '16', '103'), array('nej', '97', '103'))
         ,'2' => array(array('ja', '16', '167'), array('nej', '97', '167'))
      )
   )

   ,'16' => array(
       'b05.jpg'
      ,$teori_tekst_b
      ,array(
          '1' => array(array('ja', '16', '104'), array('nej', '97', '104'))
         ,'2' => array(array('ja', '16', '168'), array('nej', '97', '168'))
         ,'3' => array(array('ja', '16', '248'), array('nej', '97', '248'))
      )
   )

   ,'17' => array(
       'b06.jpg'
      ,$teori_tekst_b
      ,array(
          '1' => array(array('ja', '16', '104'), array('nej', '97', '104'))
         ,'2' => array(array('ja', '16', '168'), array('nej', '97', '168'))
         ,'3' => array(array('ja', '16', '232'), array('nej', '97', '232'))
      )
   )

   ,'18' => array(
       'b07.jpg'
      ,$teori_tekst_b
      ,array(
          '1' => array(array('ja', '16', '93'), array('nej', '97', '93'))
         ,'2' => array(array('ja', '16', '146'), array('nej', '97', '146'))
         ,'3' => array(array('ja', '16', '199'), array('nej', '97', '199'))
         ,'4' => array(array('ja', '16', '253'), array('nej', '97', '253'))
         ,'5' => array(array('ja', '16', '306'), array('nej', '97', '306'))
      )
   )

   ,'19' => array(
       'b08.jpg'
      ,$teori_tekst_b
      ,array(
          '1' => array(array('ja', '16', '120'), array('nej', '97', '120'))
         ,'2' => array(array('ja', '16', '200'), array('nej', '97', '200'))
      )
   )

   ,'20' => array(
       'b09.jpg'
      ,$teori_tekst_b
      ,array(
          '1' => array(array('ja', '16', '104'), array('nej', '97', '104'))
         ,'2' => array(array('ja', '16', '184'), array('nej', '97', '184'))
      )
   )

   ,'21' => array(
       'b10.jpg'
      ,$teori_tekst_b
      ,array(
          '1' => array(array('ja', '16', '104'), array('nej', '97', '104'))
      )
   )

   // B

   ,'22' => array(
       'c01.jpg'
      ,$teori_tekst_c
      ,array(
          '1' => array(array('ja', '16', '119'), array('nej', '97', '119'))
         ,'2' => array(array('ja', '16', '199'), array('nej', '97', '199'))
      )
   )

   ,'23' => array(
       'c02.jpg'
      ,$teori_tekst_c
      ,array(
          '1' => array(array('ja', '16', '120'), array('nej', '97', '120'))
         ,'2' => array(array('ja', '16', '200'), array('nej', '97', '200'))
      )
   )

   ,'24' => array(
       'c03.jpg'
      ,$teori_tekst_c
      ,array(
          '1' => array(array('ja', '16', '104'), array('nej', '97', '104'))
         ,'2' => array(array('ja', '16', '168'), array('nej', '97', '168'))
         ,'3' => array(array('ja', '16', '248'), array('nej', '97', '248'))
      )
   )

   ,'25' => array(
       'c04.jpg'
      ,$teori_tekst_c
      ,array(
          '1' => array(array('ja', '16', '103'), array('nej', '97', '103'))
         ,'2' => array(array('ja', '16', '167'), array('nej', '97', '167'))
         ,'3' => array(array('ja', '16', '247'), array('nej', '97', '247'))
      )
   )

   ,'26' => array(
       'c05.jpg'
      ,$teori_tekst_c
      ,array(
          '1' => array(array('ja', '16', '104'), array('nej', '97', '104'))
         ,'2' => array(array('ja', '16', '184'), array('nej', '97', '184'))
      )
   )

   ,'27' => array(
       'c06.jpg'
      ,$teori_tekst_c
      ,array(
          '1' => array(array('ja', '16', '136'), array('nej', '97', '136'))
         ,'2' => array(array('ja', '16', '200'), array('nej', '97', '200'))
      )
   )

   ,'28' => array(
       'c07.jpg'
      ,$teori_tekst_c
      ,array(
          '1' => array(array('ja', '16', '125'), array('nej', '97', '125'))
         ,'2' => array(array('ja', '16', '205'), array('nej', '97', '205'))
      )
   )

   ,'29' => array(
       'c08.jpg'
      ,$teori_tekst_c
      ,array(
          '1' => array(array('ja', '16', '120'), array('nej', '97', '120'))
         ,'2' => array(array('ja', '16', '184'), array('nej', '97', '184'))
         ,'3' => array(array('ja', '16', '264'), array('nej', '97', '264'))
      )
   )

   ,'30' => array(
       'c09.jpg'
      ,$teori_tekst_c
      ,array(
          '1' => array(array('ja', '16', '120'), array('nej', '97', '120'))
         ,'2' => array(array('ja', '16', '184'), array('nej', '97', '184'))
         ,'3' => array(array('ja', '16', '264'), array('nej', '97', '264'))
      )
   )

   ,'31' => array(
       'c10.jpg'
      ,$teori_tekst_c
      ,array(
          '1' => array(array('ja', '16', '119'), array('nej', '97', '119'))
         ,'2' => array(array('ja', '16', '199'), array('nej', '97', '199'))
         ,'3' => array(array('ja', '16', '298'), array('nej', '97', '298'))
      )
   )

   ,'32' => array(
       'c11.jpg'
      ,$teori_tekst_c
      ,array(
          '1' => array(array('ja', '16', '120'), array('nej', '97', '120'))
         ,'2' => array(array('ja', '16', '200'), array('nej', '97', '200'))
         ,'3' => array(array('ja', '16', '280'), array('nej', '97', '280'))
      )
   )


);



$de_rigtige_svar = array(

   // A

    '1'  => array(1 => 'nej', 'ja', 'nej')
   ,'2'  => array(1 => 'nej', 'nej', 'ja')
   ,'3'  => array(1 => 'nej')
   ,'4'  => array(1 => 'nej', 'nej', 'ja')
   ,'5'  => array(1 => 'nej', 'ja', 'nej')
   ,'6'  => array(1 => 'ja', 'nej')
   ,'7'  => array(1 => 'nej', 'ja')
   ,'8'  => array(1 => 'nej', 'nej')
   ,'9'  => array(1 => 'nej', 'ja')
   ,'10' => array(1 => 'nej', 'nej', 'ja')
   ,'11' => array(1 => 'nej', 'ja')

   // B

   ,'12'  => array(1 => 'nej', 'ja')
   ,'13'  => array(1 => 'ja', 'ja', 'ja', 'nej', 'nej')
   ,'14'  => array(1 => 'nej', 'nej', 'ja')
   ,'15'  => array(1 => 'nej', 'ja')
   ,'16'  => array(1 => 'ja', 'nej', 'nej')
   ,'17'  => array(1 => 'nej', 'nej', 'ja')
   ,'18'  => array(1 => 'nej', 'nej', 'ja', 'ja', 'nej')
   ,'19'  => array(1 => 'nej', 'ja')
   ,'20'  => array(1 => 'nej', 'ja')
   ,'21'  => array(1 => 'nej')

   // C

   ,'22'  => array(1 => 'nej', 'ja')
   ,'23'  => array(1 => 'ja', 'nej')
   ,'24'  => array(1 => 'nej', 'ja', 'nej')
   ,'25'  => array(1 => 'nej', 'ja', 'ja')
   ,'26'  => array(1 => 'ja', 'nej')
   ,'27'  => array(1 => 'ja', 'nej')
   ,'28'  => array(1 => 'nej', 'ja')
   ,'29'  => array(1 => 'nej', 'nej', 'ja')
   ,'30'  => array(1 => 'nej', 'ja', 'nej')
   ,'31'  => array(1 => 'ja', 'nej', 'nej')
   ,'32'  => array(1 => 'nej', 'ja', 'ja')

);



if($_SERVER['REQUEST_METHOD'] == "GET"){

   if(isset($_GET['billed'])){

      $billed = $_GET['billed'];
      $vis_billed = 1;
      $title = 'Billede ' . $billed . ' - ' . mb_ucfirst($title);
      $metadescription = 'Billede ' . $billed . ' af ' . count($sporgsmaldatabase) . ' - ' . mb_ucfirst($metadescription);

   }else{

      $vis_introduktion = 1;

   }

}



if($_SERVER['REQUEST_METHOD'] == "POST"){

   if(isset($_POST['billed'])){

      $billed = $_POST['billed'];

   }

   if(isset($_POST['funktion'])){

      switch($_POST['funktion']){

         case "Introduktion" :

            $vis_introduktion = 1;
            if(isset($billed)){
               gemsessionsvar($billed);
            }
            break;

         case "Start teoriprøven" :

            $vis_billed = 1;
            if(isset($billed)){
               gemsessionsvar($billed);
            }
            $billed = 1;
            break;

         case "Forrige billede" :

            $vis_billed = 1;
            $billed_forrige = $billed;
            if(isset($billed)){
               gemsessionsvar($billed);
            }
            $billed--;
            break;

         case "Næste billede" :

            $vis_billed = 1;
            $billed_forrige = $billed;
            if(isset($billed)){
               gemsessionsvar($billed);
            }
            $billed++;
            break;

         case "Oversigt" :

            $vis_oversigt = 1;
            if(isset($billed)){
               gemsessionsvar($billed);
            }
            break;

         case "Knallertbevis" :

            $vis_knallertbevis = 1;
            if(isset($billed)){
               gemsessionsvar($billed);
            }
            break;

         case "Materiale og lydfiler" :

            $vis_materiale = 1;
            if(isset($billed)){
               gemsessionsvar($billed);
            }
            break;

         case "Slet mine svar" :

            $vis_slet = 1;
            $_SESSION = array();
            setcookie($session_navn, '', time() - 3600, '/') || trigger_error("cookie blev ikke sendt");
            session_destroy();
            break;

         default :

            $vis_introduktion = 1;
            break;

      }

   }

}



function gemsessionsvar($data){

   $billed_forrige = $data;
   if(isset($_POST['sporgsmal_1'])){ $_SESSION['svar'][$billed_forrige]['1'] = $_POST['sporgsmal_1']; }
   if(isset($_POST['sporgsmal_2'])){ $_SESSION['svar'][$billed_forrige]['2'] = $_POST['sporgsmal_2']; }
   if(isset($_POST['sporgsmal_3'])){ $_SESSION['svar'][$billed_forrige]['3'] = $_POST['sporgsmal_3']; }
   if(isset($_POST['sporgsmal_4'])){ $_SESSION['svar'][$billed_forrige]['4'] = $_POST['sporgsmal_4']; }
   if(isset($_POST['sporgsmal_5'])){ $_SESSION['svar'][$billed_forrige]['5'] = $_POST['sporgsmal_5']; }

}



if(isset($billed)){

   if(!array_key_exists($billed, $sporgsmaldatabase)){

      unset($billed);
      $vis_billed = 0;
      $vis_oversigt = 1;

   }

}



if(isset($_SESSION['svar'])){

   $brugerens_svar = $_SESSION['svar'];

}else{

   $brugerens_svar = array();

}



$xxx .= '<form method="post" enctype="multipart/form-data" action="'.$_SERVER['SCRIPT_NAME'].'">';



if($vedligeholdelse){

   $xxx .= ''
      . box(array('250', '250')
         ,array(
             array('variabel', 'værdi')
            ,array('$_SERVER[REQUEST_METHOD]', $_SERVER['REQUEST_METHOD'])
            ,array('$vis_introduktion', $vis_introduktion)
            ,array('$vis_billed', $vis_billed)
            ,array('$vis_oversigt', $vis_oversigt)
            ,array('$vis_knallertbevis', $vis_knallertbevis)
            ,array('$vis_materiale', $vis_materiale)
            ,array('$vis_slet', $vis_slet)
            //,array('$billed', $billed)
            ,array('', '')
         )
      );

}



if($top_knapper){

   $knapper = array(
       'Introduktion'
      ,'Start teoriprøven'
      ,'Oversigt'
      ,'Knallertbevis'
      ,'Materiale og lydfiler'
      ,'Slet mine svar'
      );

   $xxx .= '<div class="teoriprovemenu">';

//   $xxx .= '<form method="post" enctype="multipart/form-data" action="'.$_SERVER['SCRIPT_NAME'].'">';

   foreach($knapper as $knap){

      $xxx .= '<input type="submit" name="funktion" value="' . $knap . '"';

      if(
         $knap == 'Introduktion' && $vis_introduktion
      || $knap == 'Start teoriprøven' && $vis_billed
      || $knap == 'Oversigt' && $vis_oversigt
      || $knap == 'Knallertbevis' && $vis_knallertbevis
      || $knap == 'Materiale og lydfiler' && $vis_materiale
      || $knap == 'Slet mine svar' && $vis_slet
      ){

         $xxx .= ' style="border-style: inset;"';

      }

      $xxx .= '>';
      $xxx .= lidtplads('vandret');

   }

//   $xxx .= '</form>';

   $xxx .= '</div>';

   $xxx .= lidtplads('lodret');

}



if($vis_introduktion){

   $indrykdata = ''
               . '<div style="float: right; margin-left: 20px; margin-bottom: 20px; display: inline;">'
               . visbilled('1', 'billed2505.jpg', 'max 30 km zone')
               . '</div>'
               . 'Velkommen til online udgaven af den gamle knallert teoriprøve.'
               . "\r\n"
               . "\r\n"
               . 'Dette var teoriprøven som de 15-17 årige tog på ungdomsskolen når de skulle have knallertbevis.'
               . "\r\n"
               . "\r\n"
               . 'Teoriprøven blev brugt for lille knallert som højst måtte køre 30 km/t.'
               . "\r\n"
               . "\r\n"
               . 'Teoriprøven består af ialt ' . count($sporgsmaldatabase) . ' billeder fordelt i 3 evaluerende prøver kaldet A, B og C.'
               . "\r\n"
               . "\r\n"
               . 'A : Indledende manøvrer m.v.'
               . "\r\n"
               . 'B : Manøvrer i vejkryds'
               . "\r\n"
               . 'C : Afsluttende manøvrer på vej'
               . "\r\n"
               . "\r\n"
               . 'På ungdomsskolen havde man 10 minutter til at svare på hver af de 3 evaluerende prøver.'
               . "\r\n"
               . 'Altså man havde 30 minutter til at svare på alle spørgsmålene.'
               . "\r\n"
               . "\r\n"
               . 'Her på hjemmesiden er der ikke nogen tidsgrænse så tag dig bare god tid.'
               . "\r\n"
               . "\r\n"
               . 'Vær opmærksom på at der kan være fejl så stol ikke automatisk på alt så du måske kommer til at gøre noget forkert i trafikken.'
               . "\r\n"
               . "\r\n"
               . 'Teoriprøven bruger cookies/sessions til at gemme svarene mellem sideskift.'
               . "\r\n"
               . "\r\n"
               . 'Held og lykke.'
               . "\r\n"
               . "\r\n"
//               . '<form method="post" enctype="multipart/form-data" action="'.$_SERVER['SCRIPT_NAME'].'">'
               . 'Tryk på <input type="submit" name="funktion" value="Start teoriprøven"> for at begynde.'
//               . '</form>'
               . "\r\n"
               . '<div class="clearboth"></div>'
               . "\r\n"
               . "\r\n"
               ;

   $xxx .= '<div style="margin: 10px;">';
   $xxx .= afsnit('Introduktion', $indrykdata);
   $xxx .= '</div>';

}elseif($vis_billed){

      $data = $sporgsmaldatabase[$billed];
      $billedurl = '/scooterhjemmeside/billeder/teoriprove/' . $data[0];
      $tekst = $data[1];
      $ja_nej_kordinater = $data[2];

      $xxx .= lidtplads('lodret');

      $xxx .= '<div class="teori_sporgsmal_holder">';

      $xxx .= '<div style="text-align: center;">';
      $xxx .= $billed . ' / ' . count($sporgsmaldatabase);
      $xxx .= '</div>';

      $xxx .= '<div style="text-align: center;">';
      $xxx .= $tekst;
      $xxx .= '</div>';

      $xxx .= '<div style="text-align: center; margin: auto;">';
//      $xxx .= '<form method="post" enctype="multipart/form-data" action="'.$_SERVER['SCRIPT_NAME'].'" style="text-align: center; margin: auto;">';

      //$billed++;
      $xxx .= '<input type="hidden" name="billed" value="'.$billed.'">';

      $xxx .= '<div class="teori_sporgsmal" style="background: url('.$billedurl.') no-repeat;">';
      // så teori_sporgsmal højden automatisk bliver sat
      $xxx .= '<img src="'.$billedurl.'" alt="billed" style="visibility:hidden;">';

      foreach($ja_nej_kordinater as $sporgsmalnummer => $b){

         $name_id_for = 'sporgsmal_' . $sporgsmalnummer;

         foreach($b as $d){

            // $d = array('ja', '123', '123');
            $jaellernej = $d[0];
            $labelleft = $d[1] - (round($labelbredde / 2, 0));
            $labeltop = $d[2] - (round($labelhojde / 2, 0)) + 5;
            $inputradioleft = $d[1] - 18;
            $inputradiotop = $d[2];

            $input_extrakode = '';

            if(isset($brugerens_svar)){

               $aktueltbilled = $billed;

               if(isset($brugerens_svar[$aktueltbilled][$sporgsmalnummer])){

                  if($brugerens_svar[$aktueltbilled][$sporgsmalnummer] == $jaellernej){

                     $input_extrakode = ' checked="checked"';

                  }

               }

            }

            $id_og_for = $name_id_for . '_' . $jaellernej;

            $xxx .= '<input'
                  . ' type="radio"'
                  . ' name="'.$name_id_for.'"'
                  . ' id="'.$id_og_for.'"'
                  . ' value="'.$jaellernej.'"'
                  . ' style="left: '.$inputradioleft.'px; top: '.$inputradiotop.'px;"'
                  . $input_extrakode
                  . '>'
                  ;

            $xxx .= '<label'
                  . ' for="'.$id_og_for.'"'
                  . ' style="width: '.$labelbredde.'px; height: '.$labelhojde.'px; left: '.$labelleft.'px; top: '.$labeltop.'px;"'
                  . '></label>'
                  ;

         }

      }

      $xxx .= '</div>';

      $xxx .= lidtplads('lodret');

      $forrigebilled = $billed - 1;

      if(array_key_exists($forrigebilled, $sporgsmaldatabase)){

         $xxx .= '<input type="submit" name="funktion" value="Forrige billede" class="forrige_og_neste_knap bold fontsize_medium">';

      }else{

         $xxx .= '<input disabled="disabled" type="submit" name="funktion" value="Forrige billede" class="forrige_og_neste_knap bold fontsize_medium" style="visibility:hidden;">';

      }

      $xxx .= lidtplads('vandret');
      $xxx .= '<span style="margin: 0 50px;"></span>';

      $xxx .= '<input type="submit" name="funktion" value="Næste billede" class="forrige_og_neste_knap bold fontsize_medium">';

//      $xxx .= '</form>';

      $xxx .= '</div>';

      $xxx .= '</div>';

      $xxx .= lidtplads('lodret');

}elseif($vis_oversigt){

   if($de_rigtige_svar == $brugerens_svar){

      $xxx .= '<div class="tillykke_tekst bold">';
      $xxx .= 'Tillykke !';
      $xxx .= '<br>';
      $xxx .= 'Alle dine svar er rigtige';
      $xxx .= '</div>';

   }

   $galleri_elementer = array();

   foreach($sporgsmaldatabase as $key => $value){

      $galleri_tekst = '';
      $galleri_tekst_b = '';

      if(array_key_exists($key, $de_rigtige_svar)){

         if(array_key_exists($key, $brugerens_svar)){

            if(count($brugerens_svar[$key]) == count($de_rigtige_svar[$key])){

               $galleri_tekst = '<span style="color: green;">Besvaret</span>';
               $result = array_diff_assoc($brugerens_svar[$key], $de_rigtige_svar[$key]);

               if($result){

                  $galleri_tekst_b = '<span style="color: red;">' . count($result) . ' Fejl</span>';

               }else{

                  $galleri_tekst_b = '<span style="color: green;">Perfekt</span>';

               }

            }else{

               $galleri_tekst = '<span style="color: orange;">Mangler svar</span>';
               $result = array_diff_assoc($brugerens_svar[$key], $de_rigtige_svar[$key]);

               if($result){

                  $galleri_tekst_b = '<span style="color: red;">' . count($result) . ' Fejl</span>';

               }

            }

         }else{

            $galleri_tekst = '<span style="color: orange;">Ubesvaret</span>';

         }

      }else{

         $galleri_tekst = '<span style="color: blue;">Ukendt</span>';

      }

      $galleri_elementer[] = galleri('thumbnail'
         , $GLOBALS['setup']['domain'] . $_SERVER['SCRIPT_NAME'] . '?billed=' . $key
         , '../teoriprove/thumbnails/'.$value[0]
         //, '../teoriprove/thumbnails/'.str_replace('.jpg', '', $value[0])
         , array('Billede ' . $key, $galleri_tekst, $galleri_tekst_b)
         );

   }

   $xxx .= galleriholder($galleri_elementer);

}elseif($vis_knallertbevis){

   $xxx .= 'Efter den 19. Januar 2013 får man et kørekort i AM kategoriet i stedet for et knallertbevis.' . "\r\n";
   $xxx .= "\r\n";
   $xxx .= 'Følgende information gælder derfor ikke længere.';
   $xxx .= "\r\n";
   $xxx .= "\r\n";
   $xxx .= "\r\n";
   $xxx .= 'Her ses et knallertbevis. Forsiden og bagsiden' . "\r\n";
   $xxx .= "\r\n";
   $xxx .= visbilled('1', 'billed3316.jpg', 'knallertbevis forside', false, false);
   $xxx .= visbilled('1', 'billed3317.jpg', 'knallertbevis bagside', false, false);
   $xxx .= "\r\n";
   $xxx .= 'Knallertbeviset skal medbringes når man køre på knallert.' . "\r\n";
   $xxx .= "\r\n";
   $xxx .= 'Knallertbeviset bruges til at vise politiet at man har været til undervisning og dermed må køre på lille knallert (30 km/t).' . "\r\n";
   $xxx .= "\r\n";
   $xxx .= 'Før man kan få et knallertbevis skal man deltage i undervisning på ungdomsskolens knallertkøreskole.' . "\r\n";
   $xxx .= "\r\n";
   $xxx .= 'Undervisningen er gratis.' . "\r\n";
   $xxx .= "\r\n";
   $xxx .= "\r\n";
   $xxx .= "\r\n";
   $xxx .= 'Kommunen laver knallertbeviset og det koster gerne 100 kroner.' . "\r\n";
   $xxx .= "\r\n";
   $xxx .= 'Man kan begynde på knallert undervisningen når man er fyldt 15 år.' . "\r\n";
   $xxx .= "\r\n";
   $xxx .= 'Knallertbeviset kan fås dagen før man fylder 16 år og gælder til man fylder 18 år.' . "\r\n";
   $xxx .= 'Når man er fyldt 18 år så behøver man ikke et knallertbevis for at køre på lille knallert (30 km/t) heller ikke hvis man aldrig har været til undervisning.' . "\r\n";
   $xxx .= "\r\n";
   $xxx .= 'Hvis man har traktorkørekort så kan man bruge det til at køre på lille knallert også behøver man ikke have knallertbevis.' . "\r\n";
   $xxx .= "\r\n";

}elseif($vis_materiale){

   $playerurl = $GLOBALS['setup']['domainogdatamappe'] . '/' . 'flash' . '/' . 'player_mp3_multi.swf';
   $playlistfil = '/scooterhjemmeside/lyd/playlist_teori.txt';

   // http://flash-mp3-player.net/players/multi/documentation/
   // You need to encode mp3 with 44KHz.
   $flashvarsarray = array();
   $flashvarsarray[] = 'volume=50'; // 0-200
   $flashvarsarray[] = 'showvolume=1';
   $flashvarsarray[] = 'showinfo=0';
   $flashvarsarray[] = 'autoplay=0';
   $flashvarsarray[] = 'showlist=1';
   $flashvarsarray[] = 'playlist=' . $playlistfil;
   $flashvarsarray[] = 'width=550';
   $flashvarsarray[] = 'height=150';
   $flashvarsarray[] = 'showslider=1';
   $flashvarsarray[] = 'showloading=always';
   $flashvarsarray[] = 'volumewidth=100';
   $flashvarsarray[] = 'showplaylistnumbers=0';
   $flashvarsarray[] = 'playlistalpha=100';

   $flashvars = implode('&amp;', $flashvarsarray);

   $xxx .= 'Billederne i den online teoriprøve stammer fra :' . "\r\n";
   $xxx .= visfil('1', 'scooterhjemmeside/download/knallertprove.pdf');
   $xxx .= "\r\n";

   $xxx .= 'De rigtige svar stammer fra :' . "\r\n";
   $xxx .= visfil('1', 'scooterhjemmeside/download/knallertprove_lerervejledning.pdf');
   $xxx .= "\r\n";

   $xxx .= 'Her kan du afspille nogen lydfiler :' . "\r\n";
   $xxx .= '<!--ignore-->' . "\r\n";
   $xxx .= '<object type="application/x-shockwave-flash" data="' . $playerurl . '" style="width: 550px; height: 150px;">' . "\r\n";
   $xxx .= '<param name="movie" value="' . $playerurl . '">' . "\r\n";
   $xxx .= '<param name="FlashVars" value="' . $flashvars . '">' . "\r\n";
   $xxx .= flashblevikkefundet();
   $xxx .= '</object>' . "\r\n";
   $xxx .= '<!--ignore-->' . "\r\n";
   $xxx .= "\r\n";
   $xxx .= 'Den bog der refereres til i lydfilerne har jeg desværre ikke.' . "\r\n";
   $xxx .= "\r\n";

   $xxx .= 'Lydfilerne kan downloades her :' . "\r\n";
   $xxx .= visfil('1', 'scooterhjemmeside/lyd/teori_A1_for_du_korer.mp3');
   $xxx .= visfil('1', 'scooterhjemmeside/lyd/teori_A2_knallertens_udstyr.mp3');
   $xxx .= visfil('1', 'scooterhjemmeside/lyd/teori_A3_ud_pa_vejen_for_forste_gang.mp3');
   $xxx .= visfil('1', 'scooterhjemmeside/lyd/teori_B_vejkryds.mp3');
   $xxx .= visfil('1', 'scooterhjemmeside/lyd/teori_C_nar_du_moder_andre_trafikanter.mp3');
   $xxx .= visfil('1', 'scooterhjemmeside/lyd/teori_knallerter_og_trafiksikkerhed.mp3');

}elseif($vis_slet){

   $xxx .= '<div class="stortekst bold">';
   $xxx .= 'Dine svar er nu slettet *snøft*';
   $xxx .= '</div>';

   $xxx .= visbilled('1', 'billed2506.jpg', 'mis', false, true);

   $xxx .= '<div class="stortekst bold">';
   $xxx .= '<div>';
   $xxx .= 'Nu kan du eller en anden tage testen forfra.';
   $xxx .= '</div>';
   $xxx .= '<div style="margin-top: 10px;">';
   $xxx .= 'Tryk på <input type="submit" name="funktion" value="Start teoriprøven"> for at begynde forfra.';
   $xxx .= '</div>';
   $xxx .= '</div>';

}



$xxx .= '</form>';



$yyy .= '<div class="teori_sporgsmal_holder_holder">';
$yyy .= $xxx;
$yyy .= '</div>';



$databasecenter = array(

'
teoriprøve for lille knallert
' => '
'.$yyy.'
<div class="bold borderradius5px" style="background: darkred; color: white; text-align: center; padding: 10px;">Den 19. Januar 2013 kom der nye regler i forbindelse med teoriundervisning og kørekort.<br>Det betyder at denne teoriprøve ikke længere er den samme som den man får når man skal til teoriundervisning.<br>Læs mere i forummet emnet '.ahref('http://scootergrisen.dk/forum/viewtopic.php?f=4&t=956', 'De nye regler om knallertundervisning (fra 19. Januar 2013)', 'style="color: pink;"').'<br><br>Prøv også '.ahref('http://www.sikkertrafik.dk/Site/Knallertteori.aspx', 'Klar til Knallert', 'style="color: pink;"').' hvor du kan teste om du er klar til den nye teoriprøve.</div>
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
