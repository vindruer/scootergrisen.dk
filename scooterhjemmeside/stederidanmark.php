<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['sideikon']               = 'ikoner/ikon_stederidanmark2.png';

$title = "danmarkskort med forhandlere af scootere og reservedele";
$overskrift = "danmarkskort med forhandlere af scootere og reservedele";
$metadescription = "kort som viser diverse scooterbutikker, værksteder og forhandlere i danmark hvor man kan købe scootere og knallerter eller dele og udstyr til dem";

/*

    Latitude ranges between -90 and 90 degrees, inclusive. Values above or below this range will be clamped to the nearest value within this range. For example, specifying a latitude of 100 will set the value to 90.
    Longitude ranges between -180 and 180 degrees, inclusive. Values above or below this range will be wrapped such that they fall within the range [-180, 180). For example, 480, 840 and 1200 will all be wrapped to 120 degrees.
*/

$GLOBALS['setup']['head'] = '
<style type="text/css">

   #kortholder {
      border: 1px solid rgba(0,0,0,0.25);
      height: 550px;
      margin: 0 auto;
   }

</style>



<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">

var kortholder = null,
    latlng = null,
    her = null,
    map = null,
    kmlurl = null,
    ctaLayer = null,
    besked = null;

function initialize(){

   kortholder = document.getElementById("kortholder");

   if (google !== undefined) {

var styles = [
  {
    featureType: "poi",
    elementType: "labels",
    stylers: [
      { visibility: "off" }
    ]
  }
];

var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

      // når man inslæser en kml fil så zoomer og centrers kortet automatisk
      // i forhold til indholdet så disse indstillinger ignoreres
      latlng = new google.maps.LatLng(56.18, 11.544800),
          myOptions = {
         zoom: 7 // 0-19
         ,
         center: latlng
         ,
         //mapTypeId: google.maps.MapTypeId.ROADMAP
         //mapTypeId: google.maps.MapTypeId.SATELLITE
         mapTypeId: google.maps.MapTypeId.HYBRID
         //mapTypeIds: [google.maps.MapTypeId.HYBRID, \'map_style\']
         ,
         mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR // DEFAULT | HORIZONTAL_BAR | DROPDOWN_MENU
            ,
            style: google.maps.NavigationControlStyle.ZOOM_PAN // DEFAULT | SMALL | ANDROID | ZOOM_PAN
         }

      };

      map = new google.maps.Map(kortholder, myOptions);

      //map.mapTypes.set(\'map_style\', styledMap);
      //map.setMapTypeId(\'map_style\');

      kmlurl = "http://scootergrisen.dk/scooterhjemmeside/kml/kml.php"; // skal vist være på webhotel kan ikke være localhost så vises det ikke på kortet

      kmlurl += "?rand=" + (new Date()).valueOf(); // tilføj noget i URLen så google maps ikke cacher kml filen
      ctaLayer = new google.maps.KmlLayer(
         kmlurl
         ,{
            preserveViewport: true // så kml indholdet ikke bestemmer zoom og center
         }
      );
      ctaLayer.setMap(map);

   } else {

      besked = "Der er formodentligt ikke forbindelse til internettet.<br>Så kortet kan ikke vises.";
      kortholder.style.background = "#aaa";
      kortholder.innerHTML = \'<div style="margin: 230px auto; text-align: center;">\' + besked + \'</div>\';
      console.log(besked);

   }

}

function skiftplacering(lat, lng) {

   her = new google.maps.LatLng(lng, lat),
   map.panTo(her);
   map.setZoom(12);
   location.hash = \'#kortholder\';

}

if (window.addEventListener) {

   window.addEventListener("load", initialize, false);

}

</script>
';

$oversigtindhold = '';
$tableindhold = '';
$tablenavn = 'stederidanmark';
$sorter = 'navn'; // standard
$opned = 'ASC'; // standard

$db = new mysqli($GLOBALS['setup']['mysql_server'], $GLOBALS['setup']['mysql_bruger'], $GLOBALS['setup']['mysql_kodeord'], $GLOBALS['setup']['mysql_database']);

if ($db->connect_errno > 0) {

   $oversigtindhold .= '<h1>' . 'Kunne ikke forbinde til database [' . $db->connect_error . ']' . '</h1>';

} else {

   if (!$db->set_charset("utf8")) {
   }else{
   }

   if ($stmt = $db->prepare("SELECT * FROM $tablenavn ORDER BY $sorter $opned")) {

      $stmt->execute();

      if ($stmt->bind_result($id, $navn, $adresse, $postnummer, $by, $hjemmeside, $style, $lat, $lng, $besked, $type)) {

         while ($stmt->fetch()) {

            $navn = my_mb_ucfirst($navn);

            ($adresse == '')
               ? $adresseeventuelt = ''
               : $adresseeventuelt = '<a href="javascript:skiftplacering(' . $lat . ',' . $lng . ');">' . $adresse . '</a>';

            $by = my_mb_ucfirst($by);

            ($hjemmeside == '')
               ? $eventueltlink = ''
               : $eventueltlink = ahref($hjemmeside, $hjemmeside, '', true);

            $besked = my_mb_ucfirst($besked);
            $type = my_mb_ucfirst($type);

            $tableindhold .= '<tr>';
            //$tableindhold .= '<td>' . $id . '</td>';
            $tableindhold .= '<td>' . $navn . '</td>';
            $tableindhold .= '<td>' . $adresseeventuelt . '</td>';
            $tableindhold .= '<td>' . $postnummer . '</td>';
            $tableindhold .= '<td>' . $by . '</td>';
            $tableindhold .= '<td>' . $eventueltlink . '</td>';
            //$tableindhold .= '<td>' . $style . '</td>';
            //$tableindhold .= '<td>' . $lat . '</td>';
            //$tableindhold .= '<td>' . $lng . '</td>';
            $tableindhold .= '<td>' . $besked . '</td>';
            //$tableindhold .= '<td>' . $type . '</td>';
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
      $oversigtindhold .= '<th>Navn</th>';
      $oversigtindhold .= '<th>Adresse</th>';
      $oversigtindhold .= '<th>Postnummer</th>';
      $oversigtindhold .= '<th>By</th>';
      $oversigtindhold .= '<th>Hjemmeside</th>';
      $oversigtindhold .= '<th>Besked</th>';
      //$oversigtindhold .= '<th>Type</th>';
      $oversigtindhold .= '</tr>';
      $oversigtindhold .= '</thead>';

      $oversigtindhold .= '<tbody>';
      $oversigtindhold .= $tableindhold;
      $oversigtindhold .= '</tbody>';

      $oversigtindhold .= '</table>';
      $oversigtindhold .= '</div>';

   } else {

      $oversigtindhold .= nogenmisser();

   }

}

$databasecenter = array(

'
' => '
<div id="kortholder" class="borderradius5px"></div>
'.$oversigtindhold.'
'

,'
forklaring
' => '
På kortet vises diverse scooter butikker, værksteder og forhandlere i danmark hvor man kan købe scootere eller ting til scootere.
'.kontaktmig(true).' gerne hvis du kender steder som endnu ikke er med på kortet.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
