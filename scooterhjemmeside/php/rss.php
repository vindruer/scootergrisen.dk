<?php // æøåÆØÅ UTF-8 uden BOM

// RSS feed nyheder for http://scootergrisen.dk/

chdir('..');
require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$nyheder = require_once './php/nyhederdatabase.php';

$servername = $_SERVER['SERVER_NAME'];
$channeltitle = "Scootergrisen nyt"; // Det som kommer til at slå i Bookmarks toolbar når man tilføjer det i en browser
$description = "Nyheder fra Scootergrisen";
$logo = 'http://' . $_SERVER['SERVER_NAME'] . '/' . $GLOBALS['setup']['dataogbilledmappe'] . '/ikoner/' . 'rsschannellogo.png';
$logo_width = '111';
$logo_height = '41';
$self = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER["SCRIPT_NAME"];
$itemlink = 'http://' . $servername . '/' . $GLOBALS['setup']['datamappe'] . '/nyheder.php';
$language = 'da';
$tegnfra_title =       array("<"     ,"&lt;"  , ">"     , "&gt;" , "\""    , "/"     );
$tegntil_title =       array("&#x3C;","&#x3C;", "&#x3E;","&#x3E;", "&#034;", "&#047;");
$tegnfra_description = array("&"    , "<"   , ">"   );
$tegntil_description = array("&amp;", "&lt;", "&gt;");

if(isset($nyheder)){

   $items = '';

   foreach($nyheder as $dato => $nyhed){

      $dato = trim($dato);

      if($dato != "hopover"){

         $nydato = explode(" ", $dato);

         $dato = mb_ucfirst($dato);

         $nyhed = trim($nyhed);
         $nyhed = str_replace("\r\n", "<br>", $nyhed);

         $overskrift = $nyhed;
         $overskrift = str_replace("<br>", " ", $overskrift);
         $overskrift = strip_tags($overskrift); // fjerner HTML tags som '.ahref('*', ' og ').' og <br>
         $overskrift = mb_substr($overskrift, 0, 60); // overskrift er max x antal tegn
         $overskrift .= "...";
         $overskrift = str_replace($tegnfra_title, $tegntil_title, $overskrift);

         $nyhed = str_replace($tegnfra_description, $tegntil_description, $nyhed);

         $nydato[0] = utf8strtolower($nydato[0]);
         $nydato[3] = utf8strtolower($nydato[3]);
         $nydato[2] = rtrim($nydato[2], '.');

         switch ($nydato[0]){

            case 'mandag'  : $nydato[0] = "Mon"; break;
            case 'tirsdag' : $nydato[0] = "Tue"; break;
            case 'onsdag'  : $nydato[0] = "Wed"; break;
            case 'torsdag' : $nydato[0] = "Thu"; break;
            case 'fredag'  : $nydato[0] = "Fri"; break;
            case 'lørdag'  : $nydato[0] = "Sat"; break;
            case 'søndag'  : $nydato[0] = "Sun"; break;

         }

         switch ($nydato[3]){

            case 'januar'    : $nydato[3] = "Jan"; break;
            case 'februar'   : $nydato[3] = "Feb"; break;
            case 'marts'     : $nydato[3] = "Mar"; break;
            case 'april'     : $nydato[3] = "Apr"; break;
            case 'maj'       : $nydato[3] = "May"; break;
            case 'juni'      : $nydato[3] = "Jun"; break;
            case 'juli'      : $nydato[3] = "Jul"; break;
            case 'august'    : $nydato[3] = "Aug"; break;
            case 'september' : $nydato[3] = "Sep"; break;
            case 'oktober'   : $nydato[3] = "Oct"; break;
            case 'november'  : $nydato[3] = "Nov"; break;
            case 'december'  : $nydato[3] = "Dec"; break;

         }

         $items .= ''
            . '   <item>' . "\r\n"
            . "      <pubDate>$nydato[0], $nydato[2] $nydato[3] $nydato[4] 00:00 +0100</pubDate>"."\r\n"
            . '      <link>' . $itemlink . '#' . strtolower(byttegn($dato)) . '</link>'."\r\n"
            . '      <guid isPermaLink="false">nyhed' . $nydato['2'] . $nydato['3'] . $nydato['4'] . '</guid>'."\r\n"
            . "      <title>$overskrift</title>\r\n"
            //. "      <title>$dato</title>\r\n"
            . '      <description>' . $nyhed . '</description>' . "\r\n"
            . "   </item>\r\n"
            . "\r\n"
            ;

      }

   }

}

$indhold  = ''
   . '<?xml version="1.0" encoding="UTF-8" ?>' . "\r\n"
   . "\r\n"
   . '<!-- Dette er RSS feed nyhederne for http://' . $servername . ' -->' . "\r\n"
   . '<!-- Med dette RSS feed kan du automatisk modtage nyheder fra hjemmesiden -->' . "\r\n"
   . '<!-- Hvis du ser denne tekst i en browser betyder det måske at din browser ikke understøtter RSS feed eller også kan RSS feed funktionen være slået fra -->' . "\r\n"
   . "\r\n"
   . '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">' . "\r\n"
   . "\r\n"
   . '<channel>' . "\r\n"
   . "\r\n"
   . '<atom:link href="' . $self . '" rel="self" type="application/rss+xml"/>' . "\r\n"
   . "\r\n"
   . '   <title>' . $channeltitle . '</title>' . "\r\n"
   . '   <link>http://' . $servername . '/</link>' . "\r\n" // skal være samme som <image>s <link>
   . '   <description>' . $description . '</description>' . "\r\n"
   . '   <language>' . $language . '</language>' . "\r\n"
   . '   <webMaster>SLETDETMEDSTORT' . $GLOBALS['setup']['minemail'] . ' (' . $servername . ')</webMaster>' . "\r\n"
   . '   <managingEditor>SLETDETMEDSTORT' . $GLOBALS['setup']['minemail'] . ' (' . $servername . ')</managingEditor>' . "\r\n"
   . '   <copyright>Brug som du har lyst</copyright>' . "\r\n"
   . '   <pubDate>Mon, 05 Jan 2009 10:00 +0100</pubDate>' . "\r\n"
   . '   <generator>Notepad++ PHP Apache</generator>' . "\r\n"
   . "\r\n"
   . '   <image>' . "\r\n"
   . '      <title>' . $channeltitle . '</title>' . "\r\n" // skal være samme som channel title
   . '      <link>http://' . $servername . '/</link>' . "\r\n" // skal være samme som <channel>s <link>
   . '      <url>' . $logo . '</url>' . "\r\n"
   . '      <width>' . $logo_width . '</width>' . "\r\n"
   . '      <height>' . $logo_height . '</height>' . "\r\n"
   . '      <description>RSS feed logo</description>' . "\r\n"
   . '   </image>' . "\r\n"
   . "\r\n"
   . $items
   . "</channel>\r\n"
   . "\r\n"
   . "</rss>\r\n"
   ;

header("Content-Type: application/rss+xml; charset=UTF-8");

print $indhold;

/*

validator : http://www.feedvalidator.org

     date-time   =  [ day "," ] date time        ; dd mm yy
                                                 ;  hh:mm:ss zzz

     day         =  "Mon"  / "Tue" /  "Wed"  / "Thu" /  "Fri"  / "Sat" /  "Sun"

     date        =  1*2DIGIT month 2DIGIT        ; day month year
                                                 ;  e.g. 20 Jun 82

     month       =  "Jan"  /  "Feb" /  "Mar"  /  "Apr"
                 /  "May"  /  "Jun" /  "Jul"  /  "Aug"
                 /  "Sep"  /  "Oct" /  "Nov"  /  "Dec"

     time        =  hour zone                    ; ANSI and Military

     hour        =  2DIGIT ":" 2DIGIT [":" 2DIGIT]
                                                 ; 00:00:00 - 23:59:59

     zone        =  "UT"  / "GMT"                ; Universal Time
                                                 ; North American : UT
                 /  "EST" / "EDT"                ;  Eastern:  - 5/ - 4
                 /  "CST" / "CDT"                ;  Central:  - 6/ - 5
                 /  "MST" / "MDT"                ;  Mountain: - 7/ - 6
                 /  "PST" / "PDT"                ;  Pacific:  - 8/ - 7
                 /  1ALPHA                       ; Military: Z = UT;
                                                 ;  A:-1; (J not used)
                                                 ;  M:-12; N:+1; Y:+12
                 / ( ("+" / "-") 4DIGIT )        ; Local differential
                                                 ;  hours+min. (HHMM)

*/

?>
