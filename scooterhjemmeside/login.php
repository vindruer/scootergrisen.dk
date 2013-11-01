<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "logind";
$overskrift = "logind";
$metadescription = "her kan jeg som laver hjemmesiden logge ind og se statestik og server opsætning, det er ikke meningen at andre skal kunne logge ind her";

$indhold = '';

if(!$GLOBALS['setup']['loggetind']){

   $indhold .= ''
      . formbox('1', 'loginhoverformular', 'logind formular', $_SERVER['PHP_SELF'], 'post', '', ''
         . input('1', 'hidden', 'funktion', 'login', '', '', '', '', '')
         . input('1', 'text', 'login_brugernavn', '', '30', 'brugernavn', 'difhndoiunfsanosdufna_a', '', '')
         . input('1', 'password', 'bareetfelt', '', '30', 'kodeord', 'difhndoiunfsanosdufna_b', '', '', '', '')
         . input('1', 'submit', 'logind', 'Logind', '', 'rykind', 'difhndoiunfsanosdufna_c')
      ) . "\r\n"
      ;

}else{

   $indhold .= ''
      . formbox('1', 'loginhoverformular', 'logud formular', $_SERVER['PHP_SELF'], 'post', '', ''
      . input('1', 'hidden', 'funktion', 'logud', '', '', '', '', '')
      . '<div>' . mb_ucfirst($GLOBALS['setup']['l_login_youareloggedin']) . '</div>'
      . '<div>'
      . ahref($GLOBALS['setup']['domain'] . '/' . $GLOBALS['setup']['datamappe'] . '/' . 'statestik.php', 'Statestik')
      . ', '
      . ahref($GLOBALS['setup']['domain'] . '/' . $GLOBALS['setup']['datamappe'] . '/php/' . 'phpinfo.php', 'PHPinfo()')
      . '</div>'
      . input('1', 'submit', 'logud', 'Logud', '', 'rykind', 'difhndoiunfsanosdufna_a')
      ) . "\r\n"
      ;

}


$databasecenter = array(

'
login og logud
' => '
<!--ignore-->
'.$indhold.'
<!--ignore-->
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
