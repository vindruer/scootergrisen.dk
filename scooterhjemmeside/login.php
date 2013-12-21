<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "log ind";
$overskrift = "log ind";
$metadescription = "her kan jeg som laver hjemmesiden logge ind og se statistik og server opsætning, det er ikke meningen at andre skal kunne logge ind her";

$indhold = '';

if(!$GLOBALS['setup']['loggetind']){

   $indhold .= ''
      . formbox('1', 'loginhoverformular', 'log ind formular', 'statistik.php', 'post', '', ''
         . input('1', 'hidden', 'funktion', 'login', '', '', '', '', '')
         . input('1', 'text', 'login_brugernavn', '', '30', 'brugernavn', 'difhndoiunfsanosdufna_a', '', '')
         . input('1', 'password', 'bareetfelt', '', '30', 'kodeord', 'difhndoiunfsanosdufna_b', '', '', '', '')
         . input('1', 'submit', 'logind', 'Log ind', '', 'rykind', 'difhndoiunfsanosdufna_c')
      ) . "\r\n"
      ;

}else{

   $indhold .= ''
      . formbox('1', 'loginhoverformular', 'logud formular', $_SERVER['PHP_SELF'], 'post', '', ''
      . input('1', 'hidden', 'funktion', 'logud', '', '', '', '', '')
      . '<div>' . my_mb_ucfirst($GLOBALS['setup']['l_login_youareloggedin']) . '</div>'
      . lidtplads('lodret')
      . '<div>'
      . ahref('/' . $GLOBALS['setup']['datamappe'] . '/' . 'statistik.php', 'Statistik')
      . ', '
      . ahref('/' . $GLOBALS['setup']['datamappe'] . '/php/' . 'phpinfo.php', 'PHPinfo()')
      . '</div>'
      . lidtplads('lodret')
      . input('1', 'submit', 'logud', 'Logud', '', 'rykind', 'difhndoiunfsanosdufna_a')
      ) . "\r\n"
      ;

}


$databasecenter = array(

'
log ind og log ud
' => '
'.$indhold.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
