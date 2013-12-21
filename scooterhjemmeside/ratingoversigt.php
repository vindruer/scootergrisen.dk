<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "stemmer";
$overskrift = "stemmer";
$metadescription = "se de sider der er blevet stemt på med ratingsystemet og hvor mange stemmer de har fået i gennemsnit osv";

$deloverskrift = '';
$oversigtindhold = '';
$tableindhold = '';

$db = new mysqli($GLOBALS['setup']['mysql_server'], $GLOBALS['setup']['mysql_bruger'], $GLOBALS['setup']['mysql_kodeord'], $GLOBALS['setup']['mysql_database']);

if ($db->connect_errno > 0) {

   // Når one.com mySQL er nede (samtidig med SQL ERROR [ mysqli ] Connection timed out [2002] på forum) :
   // Kunne ikke forbinde til database [Opkoblingen overskred tidsgr�nsen]
   $oversigtindhold .= '<h1>' . 'Kunne ikke forbinde til database [' . $db->connect_error . ']' . '</h1>';

} else {

   if (!$db->set_charset("utf8")) {
   }else{
   }

   if ($stmt = $db->prepare("SELECT * FROM {$GLOBALS['setup']['mysql_tablenavn']} WHERE `antalstemmer` >= 5")) {

      $stmt->execute();

      if ($stmt->bind_result($id, $antalstemmer, $total, $gennemsnit, $url, $sidsteip)) {

         while ($stmt->fetch()) {

            $url = str_replace("<", "&lt;", $url);
            $url = str_replace(">", "&gt;", $url);

            $tableindhold .= '<tr>';
            //$tableindhold .= '<td>' . $id . '</td>';
            $tableindhold .= '<td>' . $antalstemmer . '</td>';
            $tableindhold .= '<td>' . $total . '</td>';
            $tableindhold .= '<td>' . $gennemsnit . '</td>';
            $tableindhold .= '<td>' . $url . '</td>';
            $tableindhold .= '<td>' . $sidsteip . '</td>';
            $tableindhold .= '</tr>';

         }

      }

      $stmt->close();

   }

   if ($tableindhold != '') {

      $oversigtindhold .= '<div class="overflowxauto">';
      $oversigtindhold .= '<table class="fontsize_small tablesorter tablesorter-default">';

      $oversigtindhold .= '<thead>';
      $oversigtindhold .= '<tr>';
      //$oversigtindhold .= '<th>' . 'ID' . '</th>';
      $oversigtindhold .= '<th>' . 'stemmer' . '</th>';
      $oversigtindhold .= '<th>' . 'total' . '</th>';
      $oversigtindhold .= '<th>' . 'gennemsnit' . '</th>';
      $oversigtindhold .= '<th>' . 'url' . '</th>';
      $oversigtindhold .= '<th>' . 'sidste IP' . '</th>';
      $oversigtindhold .= '</tr>';
      $oversigtindhold .= '</thead>';

      $oversigtindhold .= '<tbody>';
      $oversigtindhold .= $tableindhold;
      $oversigtindhold .= '</tbody>';

      $oversigtindhold .= '</table>';
      $oversigtindhold .= '</div>';

   } else {

      $deloverskrift = 'ingen data at vise';
      $oversigtindhold .= nogenmisser();

   }

}

$databasecenter = array(

'
'.$deloverskrift.'
' => '
'.$oversigtindhold.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
