<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "forsiden";
$overskrift = "forsiden";
$metadescription = "her finder du info om scootere og knallerter som kan eller har kunne købes i Danmark, der må køre 30 og 45 km/t";

$GLOBALS['setup']['head'] = '
<style type="text/css">

html {
                  height: 100%; /* css footer and stay down */
}

body {
                  height: 100%; /* css footer and stay down */
}

.altdetoverste_og_indholdet { /* css footer and stay down */
                  min-height: 100%;
                  margin: 0 auto -40px; /* the bottom margin is the negative value of the footers height */
}

.footertekst, .push { /* css footer and stay down */
                  height: 40px; /* .push must be the same height as .footer */
clear: both;
}

.velkomstbeskederholder {
   margin: 10px 10px 0 10px;
   padding: 10px 0;
   text-align: center;
   color: #3B424C;
}

.velkomstbeskedlinie {
   border-bottom: .5px dotted gray; /* fallback */
   border-bottom: .5px dotted rgba(0,0,0,0.5);
   margin: 10px 0;
}

.velkomstbeskeda {
   padding: 5px;
}

.velkomstbeskeda:first-letter {
   font-size: x-large;
   color: black;
}

.velkomstbeskedb {
   margin: 15px;
}

.githuboverskrift {
   margin-bottom: 15px;
   color: gold;
   text-shadow:
      -1px -1px 0 black,
      -1px 0 0 black,
      -1px 1px 0 black,
      0 -1px 0 black,
      0 0 0 black,
      0 1px 0 black,
      1px -1px 0 black,
      1px 0 0 black,
      1px 1px 0 black,
      0 0 20px yellow;
}

.githuboverskrift a, .githuboverskrift a:visited, .githuboverskrift a:active {
   color: #faa;
}

.githuboverskrift a img {
}

</style>
';

$setup['visreklame']             = 0;
$setup['visspotlys']             = 0;
$setup['counterogsocialemedier'] = 1;

//$nyheder = require_once('./php/nyhederdatabase.php');
//$nyheder = array_splice($nyheder, 0, 1);
//$nyhederforsteoverskrift = key($nyheder);

//<div class="velkomstbeskedb fontsize_small">'.linkknap('nyheder.php', 'seneste nyheder<br>' . $nyhederforsteoverskrift . '').'</div>
//<div class="velkomstbeskedb fontsize_small">'.linkknap('http://scootergrisen.dk/forum/', 'Kom ind og skriv<br>med os andre i forummet').'</div>

$databasecenter = array(

'
' => '
<!--ignore-->
<div class="velkomstbeskederholder borderradius5px">
<div class="githuboverskrift fontsize_xlarge" style="">Kildekoden til scootergrisen.dk er nu på '.ahref('https://github.com/scootergrisen/scootergrisen.dk', 'GitHub').' <span style="color: gold;">!</span></div>
<div class="githuboverskrift fontsize_medium" style="">Nu kan du hjælpe med at forbedre koden bag hjemmesiden</div>
<div class="githuboverskrift fontsize_xxsmall" style="">Kildekoden er primært skrevet i HTML, CSS, Javascript og PHP</div>
'.ahref('https://github.com/scootergrisen/scootergrisen.dk', visbilled('2', 'ikoner/octocat241x200.png', 'Octocat (Spruttekat ?)', '', null, false, null, null, '241', '200'), '').'
<div class="githuboverskrift fontsize_small" style="">Jeg har tilføjet et 
<span id="spruttekat">
'.ahref('https://github.com/scootergrisen/scootergrisen.dk/blob/master' . $_SERVER['PHP_SELF'], visbilled('2', 'ikoner/blacktocat-16.png', 'Kildekoden på GitHub', '', null, false, null, null, '32', '32', null, true, null, null, 'vertical-align: middle;')).'
</span>
 ikon nederst på hver side hvor du kan gå til kildekoden på GitHub for den viste side</div>
</div>
<!--ignore-->
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, false, true, $databasecenter, true, true, true, null, null, false);

?>
