<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "rating oversigt";
$overskrift = "rating oversigt";
$metadescription = "se de sider der er blevet stemt på med ratingsystemet og hvor mange stemmer de har fået i gennemsnit osv";

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

   if ($stmt = $db->prepare("SELECT * FROM {$GLOBALS['setup']['mysql_tablenavn']}")) {

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

      $oversigtindhold .= '<table class="tablesorter">';

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

   } else {

      $oversigtindhold .= '<div class="ratingoversigtingendata borderradius5px">';
      $oversigtindhold .= '<h1>Ingen data at vise</h1>';
      $oversigtindhold .= '<h2>Her er nogen misser i stedet for</h2>';
      $oversigtindhold .= '<img src="http://placekitten.com/180/160" alt="Miau 1" width="180" height="160">';
      $oversigtindhold .= '<img src="http://placekitten.com/181/160" alt="Miau 2" width="181" height="160">';
      $oversigtindhold .= '<img src="http://placekitten.com/182/160" alt="Miau 3" width="182" height="160">';
      $oversigtindhold .= '<img src="http://placekitten.com/183/160" alt="Miau 4" width="183" height="160">';
      $oversigtindhold .= '</div>';

   }

}

$databasecenter = array(

'
' => '
'.$oversigtindhold.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
