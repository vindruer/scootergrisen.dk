<?php

/*

ret ? tegn

PNG transparent virker ikke på google maps men gif trans gør

<ExtendedData>
   <Data name="Address">
      <value>Generatorvej 33  2730 Herlev, Denmark</value>
   </Data>
      <Data name="Website">
      <value>http://søborgmc.dk/</value>
   </Data>
</ExtendedData>
*/

chdir('..');
require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

header("Content-Type: text/plain; charset=UTF-8");

$tablenavn = 'stederidanmark';
$indhold = '';
$indhold_styles = '';
$indhold_placemark = '';
$oversigtindhold = '';

$style_og_ikoner = array(
    'style1'  => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style2'  => '/scooterhjemmeside/billeder/kml/thansen4.gif'
   //,'style2'  => '/scooterhjemmeside/billeder/kml/dut.png'
   ,'style3'  => '/scooterhjemmeside/billeder/kml/biltema.gif'
   ,'style4'  => '/scooterhjemmeside/billeder/kml/jupiter.png'
   ,'style5'  => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style6'  => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style7'  => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style8'  => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style9'  => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style10' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style11' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style12' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style13' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style14' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style15' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style16' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style17' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style18' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style19' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style20' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style21' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style22' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style23' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style24' => '/scooterhjemmeside/billeder/kml/fribikeshop.png'
   ,'style25' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style26' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style27' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style28' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style29' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style30' => 'http://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png'
   ,'style31'  => 'http://maps.google.com/mapfiles/marker_grey.png'
   );

foreach($style_og_ikoner as $key => $value){

   $indhold_styles .= ''
      . '   <Style id="' . $key . '">' . "\r\n"
      . '      <IconStyle>' . "\r\n"
      //. '         <scale>1</scale>' . "\r\n"
      . '         <Icon>' . "\r\n"
      . '            <href>' . $value . '</href>' . "\r\n"
      . '         </Icon>' . "\r\n"
      . '         <hotSpot x="0.5" y="0" xunits="fraction" yunits="fraction"/>' . "\r\n"
      . '      </IconStyle>' . "\r\n"
      . '   </Style>' . "\r\n"
      . "\r\n"
      ;

}

$db = new mysqli($GLOBALS['setup']['mysql_server'], $GLOBALS['setup']['mysql_bruger'], $GLOBALS['setup']['mysql_kodeord'], $GLOBALS['setup']['mysql_database']);

if ($db->connect_errno > 0) {

   $oversigtindhold .= '<h1>' . 'Kunne ikke forbinde til database [' . $db->connect_error . ']' . '</h1>' . "\r\n";

} else {

   if (!$db->set_charset("utf8")) {
   }else{
   }

   if ($stmt = $db->prepare("SELECT * FROM $tablenavn")) {

      $stmt->execute();

      if ($stmt->bind_result($id, $navn, $adresse, $postnummer, $by, $hjemmeside, $style, $lat, $lng, $besked, $type)) {

         while ($stmt->fetch()) {

            $navn = str_replace('&', '&amp;', $navn);
            $lat = str_replace(',', '.', $lat);
            $lng = str_replace(',', '.', $lng);

            $description = '';

            if($adresse != ''){  $description .= '<div>' . mb_ucfirst($adresse) . '</div>'; }
            if($postnummer != '' && $by != ''){ $description .= '<div>' . $postnummer . ' ' . mb_ucfirst($by) . '</div>'; }
            if($hjemmeside != ''){   $description .= '<div>' . ahref($hjemmeside, rtrim(str_replace('http://', '', $hjemmeside), '/')) . '</div>'; }
            if($besked != ''){   $description .= '<div>' . mb_ucfirst($besked) . '</div>'; }
            if($type != ''){     $description .= '<div>' . mb_ucfirst($type) . '</div>'; }
            if($id != ''){       $description .= '<div class="description_id">' . 'ID nummer : ' . $id  . '</div>'; }

            $indhold_placemark .= ''
               . '   <Placemark>' . "\r\n"
               . '      <name>' . mb_ucfirst($navn) . '</name>' . "\r\n"
               . '      <Snippet>' . 'x' . '</Snippet>' . "\r\n"
               . '      <description><![CDATA[' . $description . ']]></description>' . "\r\n"
               . '      <styleUrl>' . $style . '</styleUrl>' . "\r\n"
               . '      <Point>' . "\r\n"
               . '         <coordinates>' . $lat . ',' . $lng . '' . '</coordinates>' . "\r\n"
               . '      </Point>' . "\r\n"
               . '   </Placemark>' . "\r\n"
               . "\r\n"
               ;

         }

      }

      $stmt->close();

   }

   if ($indhold_placemark == '') {

      $oversigtindhold . ''
         . '<div class="ratingoversigtingendata">'
         . '<h1>Ingen data at vise</h1>'
         . '<h2>Her er nogen misser i stedet for</h2>'
         . '<img src="http://placekitten.com/180/160" alt="Miau 1" width="180" height="160">'
         . '<img src="http://placekitten.com/181/160" alt="Miau 2" width="181" height="160">'
         . '<img src="http://placekitten.com/182/160" alt="Miau 3" width="182" height="160">'
         . '<img src="http://placekitten.com/183/160" alt="Miau 4" width="183" height="160">'
         . '</div>'
         . "\r\n"
         ;

   }

}

$indhold .= ''
   . '<?xml version="1.0" encoding="UTF-8"?>' . "\r\n"
   . '<kml xmlns="http://www.opengis.net/kml/2.2"' . "\r\n"
   . '     xmlns:atom="http://www.w3.org/2005/Atom">' . "\r\n"
   . "\r\n"
   . '<Document>' . "\r\n"
   . "\r\n"
   . '   <name>Scooter/knallert-steder i Danmark</name>' . "\r\n"
   . '   <atom:author>' . "\r\n"
   . '      <atom:name>Scootergrisen</atom:name>' . "\r\n"
   . '   </atom:author>' . "\r\n"
   . '   <atom:link href="http://scootergrisen.dk/scooterhjemmeside/kml/1.php" />' . "\r\n"
   . '   <description><![CDATA[Butikker, værksteder, forhandlere og andre steder som kan have interesse for scooter/knallert-folket.' . "\r\n"
   . '' . "\r\n"
   . 'Kontakt mig hvis du kender et sted som skal med på kortet eller hvis du har en rettelse :' . "\r\n"
   . '' . "\r\n"
   . 'http://scootergrisen.dk/scooterhjemmeside/kontakt.php]]></description>' . "\r\n"
   . '' . "\r\n"
   . $indhold_styles
   . $indhold_placemark
   . '</Document>' . "\r\n"
   . '' . "\r\n"
   . '</kml>' . "\r\n"
   ;

if($oversigtindhold != ''){

   echo 'Fejl : ' . $oversigtindhold;

}else{

   echo $indhold;

}

/*

DROP TABLE `stederidanmark`;
CREATE TABLE `stederidanmark` (
`id` int (11) NOT NULL auto_increment,
`navn` varchar (150) NOT NULL,
`adresse` varchar (150) NOT NULL,
`postnummer` int (4) NOT NULL,
`by` varchar (150) NOT NULL,
`hjemmeside` varchar (256) NOT NULL,
`style` varchar (150) NOT NULL,
`lat` varchar (9) NOT NULL,
`lng` varchar (9) NOT NULL,
`besked` varchar (150) NOT NULL,
`type` varchar (150) NOT NULL,
PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8 COLLATE utf8_danish_ci;

DELETE FROM `stederidanmark` WHERE 1;
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scootergården (SGNC)','Vordingborgvej 16','4773','Stensved','http://www.sgnc.dk','#style1','12.023284','54.995331','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Billigscooter','Roholmsvej 15','2620','Albertslund','http://billigscooter.dk','#style1','12.359858','55.667248','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Lykke Cykler og Motor ApS','Holbækvej 8','4330','Hvalsø','http://www.lykkecykler-motor.dk','#style21','11.861997','55.596458','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scootcar','Nyholms alle 3','2610','Rødovre','http://www.scootcar.dk','#style12','12.444978','55.670818','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Køhler Knallerter','Vasevej 107','3460','Birkerød','http://www.koehler-knallerter.dk','#style7','12.434976','55.827488','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Friis Jensen Biler I/S','Holebyvej 34','4894','Øster Ulslev','http://www.friisjensenbiler.dk','#style1','11.626006','54.696758','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('2 Hjuls Centeret ApS','Jupitervej 7','4500','Nykøbing sjælland','http://www.sayjes.dk/','#style1','11.661647','55.929722','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Søborg Mc','Generatorvej 33','2730','Herlev','http://søborgmc.dk/','#style1','12.461865','55.729805','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Jespers Cykler','Søndergade 4','4130','Viby Sjælland','http://www.jesperscykler.dk','#style1','12.024305','55.548935','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('AutoCentro A/S','Færgevej 17','4970','Rødby','http://autocentro.dk','#style1','11.360203','54.661564','Har ikke knallerter mere','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Fensmark Cykler','Stenskovvej 25B','4684','Holmegaard (Fensmark)','','#style1','11.796379','55.280666','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Mc-teknik','Gurrevej 56','3000','Helsingør','http://www.atmcteknik.dk/','#style1','12.592658','56.034592','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('daxshoppen.dk','Skalbakken 17','2720','Vanløse','http://www.daxshoppen.dk','#style11','12.484697','55.693100','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('MC-Nord Bornholm','Store Torvegade 98','3700','Rønne','http://www.mc-nord.dk','#style27','14.703792','55.110710','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Dans Værksted','Århusgade 32','9900','Frederikshavn','http://www.dansverksted.dk/','#style1','10.521353','57.452789','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scooterworld','Ole Rømers Vej 12','8670','Låsby','http://www.scooterworld.dk','#style1','9.817073','56.151245','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scooter Center','Amager Landevej 275','2770','Kastrup','','#style1','12.629986','55.614819','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Kimergård Cykler','Torvegade 34','4640','Faxe','http://www.kimergaard.dk','#style23','12.119411','55.259144','http://www.speed-up.dk http://www.hebo-racing.dk er holdt op med scootere','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Gerts Scooterservice (gammel adresse)','Hovedgade 42','3730','Nexø (Snogebæk)','http://www.gertsscooterservice.dk','#style28','15.112194','55.023788','Flyttet til Rønnevej 111 Nylars 3720 Åkirkeby','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Gerts Scooterservice','Rønnevej 111','3720','Åkirkeby (Nylars)','http://www.gertsscooterservice.dk','#style28','14.830395','55.071268','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scootergården (Århus)','Karupvej 1','8000','Århus C','http://www.scootergaarden.dk','#style1','10.179906','56.155411','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scootercenter - Stenløse','Frydensbergvej 31','3660','Stenløse','http://www.scooter-center.dk','#style1','12.201442','55.773922','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('NP motor','Rødlersvej 9','4733','Tappernøje','http://npmotor.dk','#style20','11.983009','55.164396','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Århus scooter','Klostergade 74','8000','Århus C','http://www.aarhusscooter.dk','#style1','10.203289','56.158611','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Speedline A/S','Sverigesvej 19','8660','Skanderborg','http://www.speedline.dk/','#style30','9.957944','56.052948','http://www.speed-meet.dk/','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Hjørringvej 143B','9900','Frederikshavn','http://www.thansen.dk','#style2','10.508149','57.446346','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Sæbyvej 12','9800','Hjørring','http://www.thansen.dk','#style2','10.012008','57.447601','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Østergade 46','9700','Brønderslev','http://www.thansen.dk','#style2','9.949194','57.264675','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Løven 5','9200','Aalborg','http://www.thansen.dk','#style2','9.872388','57.001465','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Industrivej 2','7700','Thisted','http://www.thansen.dk','#style2','8.707277','56.962837','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Vestre Boulevard 29B','9600','Aars','http://www.thansen.dk','#style2','9.502365','56.812363','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Thurøvej 17','9500','Hobro','http://www.thansen.dk','#style2','9.805630','56.626465','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Holstebrovej 76','7800','Skive','http://www.thansen.dk','#style2','9.003643','56.569633','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Skous Gade 3','7620','Lemvig','http://www.thansen.dk','#style2','8.310999','56.551540','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Fælledvej 1','7600','Struer','http://www.thansen.dk','#style2','8.581685','56.479687','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Holstebrovej 81C','8800','Viborg','http://www.thansen.dk','#style2','9.365464','56.445457','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Marsvej 47','8960','Paderup','http://www.thansen.dk','#style2','10.060448','56.428638','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Nyholmvej 17','7500','Holstebro','http://www.thansen.dk','#style2','8.621934','56.376781','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Rugvænget 8','8500','Grenaa','http://www.thansen.dk','#style2','10.875609','56.395710','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Gåseagervej 8','8250','Egå','http://www.thansen.dk','#style2','10.280510','56.214020','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Anelystparken 26','8381','Tilst','http://www.thansen.dk','#style2','10.099753','56.182751','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Silkeborgvej 43','8000','Århus C','http://www.thansen.dk','#style2','10.179957','56.156036','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Håndværkervej 8A','8600','Silkeborg','http://www.thansen.dk','#style2','9.537828','56.184437','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Saturnvej 4B','7430','Ikast','http://www.thansen.dk','#style2','9.144315','56.136749','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Silkeborgvej 80A','7400','Herning','http://www.thansen.dk','#style2','8.992631','56.133053','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Skaadsmosevej 10','6950','Ringkøbing','http://www.thansen.dk','#style2','8.275616','56.085499','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Jægervej 9','6900','Skjern','http://www.thansen.dk','#style2','8.514453','55.952545','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Ladegårdsbakken 16','8660','Skanderborg','http://www.thansen.dk','#style2','9.937676','56.047394','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Rådhusgade 94','8300','Odder','http://www.thansen.dk','#style2','10.152421','55.982418','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Ove Jensens Alle 11A','8700','Horsens','http://www.thansen.dk','#style2','9.848964','55.857761','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Trehøjevej 14','7200','Grindsted','http://www.thansen.dk','#style2','8.898700','55.763870','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Damhaven 3B','7100','Vejle','http://www.thansen.dk','#style2','9.529816','55.704437','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Toftegårdsvej 1','6800','Varde','http://www.thansen.dk','#style2','8.492419','55.608204','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Vejlevej 137','7000','Fredericia','http://www.thansen.dk','#style2','9.707792','55.568348','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Egtved Alle 3D','6000','Kolding','http://www.thansen.dk','#style2','9.461168','55.516121','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Østre Gjesingvej 23A','6715','Esbjerg','http://www.thansen.dk','#style2','8.457271','55.507881','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Bygnaf 9','6100','Haderslev','http://www.thansen.dk','#style2','9.496341','55.252079','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Kometvej 4','6230','Rødekro','http://www.thansen.dk','#style2','9.363255','55.070034','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Langebro 42','6200','Aabenraa','http://www.thansen.dk','#style2','9.416388','55.036297','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Nørremarksvej 29','6270','Tønder','http://www.thansen.dk','#style2','8.861139','54.946068','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Grundtvigs Alle 186','6400','Sønderborg','http://www.thansen.dk','#style2','9.810163','54.921902','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Sønder Ringvej 35','6000','Kolding','http://www.thansen.dk','#style2','9.477122','55.472736','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Aabro Fald 8','7900','Nykøbing Mors','http://www.thansen.dk','#style2','8.833276','56.790272','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Stensgårdvej 1','5500','Middelfart','http://www.thansen.dk','#style2','9.769211','55.510487','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Dalvænget 18','5610','Assens','http://www.thansen.dk','#style2','9.910934','55.259838','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Grønløkkevej 9','5000','Odense','http://www.thansen.dk','#style2','10.366555','55.395279','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Gørtlervej 11','5220','Odense','http://www.thansen.dk','#style2','10.427691','55.380756','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Vestergade 167','5700','Svendborg','http://www.thansen.dk','#style2','10.589284','55.064693','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Frisengårdsvej 7','5800','Nyborg','http://www.thansen.dk','#style2','10.791723','55.317371','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Mellemgade 18A','5600','Faaborg','http://www.thansen.dk','#style2','10.242520','55.096825','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Håndværkervej 80','4000','Roskilde','http://www.thansen.dk','#style2','12.123971','55.641903','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Banegårdsvej 23','2600','Glostrup','http://www.thansen.dk','#style2','12.401159','55.663960','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Artillerivej 151','2300','København S','http://www.thansen.dk','#style2','12.567128','55.653671','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Skovgårdsvej 23','3200','Helsinge','http://www.thansen.dk','#style2','12.176074','56.022038','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Klostermosevej 123','3000','Helsingør','http://www.thansen.dk','#style2','12.566584','56.028767','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Industrivej 1A','3300','Frederiksværk','http://www.thansen.dk','#style2','12.006678','55.978653','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Gefionsvej 20','3400','Hillerød','http://www.thansen.dk','#style2','12.268228','55.932381','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Askelundsvej 2C','3600','Frederikssund','http://www.thansen.dk','#style2','12.075603','55.844208','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Rosenkæret 43','2860','Søborg','http://www.thansen.dk','#style2','12.485683','55.738892','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Virkeholm 6','2730','Herlev','http://www.thansen.dk','#style2','12.420602','55.724483','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Sandbækvej 3','2610','Rødovre','http://www.thansen.dk','#style2','12.430987','55.693302','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Kirstinehøj 31B','2770','Kastrup','http://www.thansen.dk','#style2','12.612307','55.616142','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Gammel Køge Landevej 77','2500','Valby','http://www.thansen.dk','#style2','12.510815','55.652901','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Industridalen 1','2635','Ishøj','http://www.thansen.dk','#style2','12.337877','55.620995','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Fabriksparken 18','2600','Glostrup','http://www.thansen.dk','#style2','12.388039','55.684772','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Frejasvej 28','4300','Holbæk','http://www.thansen.dk','#style2','11.672923','55.703846','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Stejlhøj 36','4400','Kalundborg','http://www.thansen.dk','#style2','11.129995','55.678329','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Industrivej 4','4180','Sorø','http://www.thansen.dk','#style2','11.565111','55.444618','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Industriparken 4','4100','Ringsted','http://www.thansen.dk','#style2','11.792032','55.432594','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Kinavej 5','4200','Slagelse','http://www.thansen.dk','#style2','11.328266','55.388462','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Theilgaards Vej 4','4600','Køge','http://www.thansen.dk','#style2','12.185753','55.478600','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Grønlandsgade','4690','Haslev','http://www.thansen.dk','#style2','11.938688','55.329227','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Motalavej 145','4220','Korsør','http://www.thansen.dk','#style2','11.141092','55.349709','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Holsted Park 8C','4700','Næstved','http://www.thansen.dk','#style2','11.779624','55.250328','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Krondrevet 1','4760','Vordingborg','http://www.thansen.dk','#style2','11.894559','55.018547','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Kirunavej 3','4900','Nakskov','http://www.thansen.dk','#style2','11.157941','54.823471','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Werner Larsens Vej 2A','4930','Maribo','http://www.thansen.dk','#style2','11.517309','54.780876','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Kystvejen 13','4800','Nykøbing Falster','http://www.thansen.dk','#style2','11.850643','54.758938','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Østre Ringvej 2','3700','Rønne','http://www.thansen.dk','#style2','14.730016','55.093048','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('T Hansen','Roskildevej 537','2605','Brøndby','http://www.thansen.dk','#style2','12.421095','55.667703','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Fri cykler Agerskov','Hovedgaden 31','6534','Agerskov','http://www.agerskovcykler.dk','#style24','9.134048','55.130024','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Fri Cykler og Have I/S','Vagtelvænget 1','5610','Assens','http://www.fribikeshop.dk/','#style24','9.912468','55.259758','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Fri cykler','Københavnsvej 137','4600','Køge','http://www.fricykler-4600.dk','#style24','12.187985','55.485779','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Fri cykler - Tårsvej Cykelbørs','Tårsvej 57','4900','Nakskov','http://www.fricykler.dk','#style24','11.125554','54.837517','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Jupiter cykler','Hovedvejen 182','2600','Glostrup','http://jupitercykler.dk','#style4','12.386602','55.665405','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Jupiter cykler','Jernbanepladsen 67','2800','Kongens Lyngby','http://jupitercykler.dk','#style4','12.500725','55.769501','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Jupiter cykler','Amagerbrogade 197','2300','København S','http://jupitercykler.dk','#style4','12.612686','55.650478','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Jupiter cykler','Lygten 2B','2400','København','http://jupitercykler.dk','#style4','12.537914','55.702793','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Jupiter cykler','Tagensvej 43','2200','København','http://jupitercykler.dk','#style4','12.553226','55.699692','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Jupiter cykler','Hvidovrevej 137','2650','Hvidovre','http://www.jupitercykler.dk','#style4','12.474427','55.653870','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Jupiter cykler','Mørkhøjvej 225','2730','Herlev','http://jupitercykler.dk','#style4','12.472453','55.726360','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scooter city','Hillerødgade 30','2200','København N','http://www.scootercity.dk','#style1','12.537140','55.696907','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scooter city','Rugvænget 23','2630','Tåstrup','http://www.scootercity.dk','#style1','12.288461','55.649700','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scooter city (lukket)','Maglegårdsvej 7','4000','Roskilde','http://www.scootercity.dk','#style31','12.078974','55.628422','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scooter city','Falkevej 4','4600','Køge','http://www.scootercity.dk','#style1','12.180283','55.473263','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Skyteam Danmark','Thinggyden 2','5631','Ebberup','http://www.skyteam-dk.dk','#style1','9.984335','55.249481','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scooterland','K. Christensens Vej 5','9200','Aalborg','http://www.scooterland.dk','#style1','9.894830','57.013092','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Dansk Cykel & Knallert Museum','Sorøvej 8','4171','Glumsø','http://www.dckm.dk','#style17','11.684678','55.355907','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Pers Cykler Odense ApS','Vesterbro 95','5000','Odense C','http://www.perscykler.dk/','#style1','10.370986','55.394676','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Victor Cykler','Skibhusvej 146','5000','Odense','http://www.victor-cykler.dk/','#style1','10.394816','55.411823','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Frihjul (Rafnsson Cykler & Scooter ApS)','Røde Mellemvej 16','2300','København','','#style1','12.593228','55.652451','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Jakobs smedie','Præstegårdsvænget 3B','7755','Bedsted','http://www.jakobssmedie.dk','#style1','8.390215','56.818600','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Vespa parts','Langelandsvej 45','2000','Frederiksberg','http://www.vespaparts.dk','#style15','12.530926','55.686153','http://www.retroscooter.dk','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Buhl Jensen','Gormsgade 14-16','7100','Vejle','http://www.buhljensen.dk','#style1','9.536197','55.715088','Har eget værksted','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Vejle cykel central','Gormsgade 6','7100','Vejle','http://www.vejlecyklecentral.dk','#style1','9.536925','55.714508','Har eget værksted','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Lindved knallertcenter','Agersbølvej 1','7100','Vejle','http://www.lindvedknallertcenter.dk','#style1','9.579166','55.792953','Har eget værksted','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scooter gården','Nygyde 4','5642','Millinge','http://scooter-g%C3%A5rden.dk','#style1','10.204191','55.134243','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Tempo cykler & knallerter','Ringstedvej 11','4000','Roskilde','http://www.tempocykler.dk','#style1','12.071140','55.632629','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Touringshop.dk','Vibeholmsvej 24','2605','Brøndby','http://www.touringshop.dk','#style13','12.417511','55.665890','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Vollerup 2 hjul center','Mommarkvej 46','6400','Sønderborg','http://www.vollerup2hjul.dk','#style1','9.861586','54.924156','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Roberts MC','Smedevænget 34','6430','Nordborg','http://www.robertsmc.dk','#style1','9.859436','54.991692','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Dansk motor company APS','Gammel Køge landevej 166','2500','valby','http://www.danskmotorco.dk','#style31','12.504925','55.647308','Stedet er lukket','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Hansen scooter','Kjellerupvej 33','8620','Kjellerup','http://www.hansensmc.dk','#style1','9.424455','56.335178','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Næstved MC værksted','Farimagsvej 18-20','4700','Næstved','http://www.naestvedmcvaerksted.dk','#style1','11.764327','55.232704','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Sigurd Cordes','Industrivej 7','6630','Rødding','http://cordes.dk','#style1','9.050508','55.374062','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('DTN scooter','Sankt Jørgensbjerg 46','4400','Kalundborg','http://www.dtn-scooter.dk','#style1','11.102023','55.680729','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Køge MC og båd center','Falkevej 38','4600','Køge','http://www.mc-center.dk','#style25','12.169987','55.473305','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Kværndrup cykel og knallert forretning','Nyborgvej 1','5772','Kværndrup','','#style1','10.524913','55.178669','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Enghave motor','Enghavevej 16','1674','København V','http://www.enghavemotor.dk','#style5','12.545638','55.670090','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Nordbornholms cykelforretning','Pilegade 1','3770','Allinge','http://www.nordbornholmscykelforretning.dk','#style26','14.802107','55.276062','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Bikecenter','Gaabensevej 114','4800','Nykøbing Falster','http://www.bikecenter.dk','#style31','11.867349','54.782089','Butikke er lukket','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('J.L. Cykler','Kæpgårdsvej 7','4840','Nørre Alslev','http://www.jl-cykler.dk','#style1','11.882849','54.898567','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Lykke Cykler','Adelgade 40','4720','Præstø','http://www.lykkecykler.dk','#style1','12.040549','55.121510','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('BikX','Snedkervænget 6','4700','Næstved','http://www.bikx.dk','#style1','11.772431','55.193501','http://onwheels.dk','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Sostack','Østergade 53','6230','Rødekro','http://sostack.dk','#style1','9.348062','55.070786','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('PP Cykler','Amager Centret 110','2300','København S','http://www.ppcykler.dk','#style1','12.604728','55.662518','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Stjerneborg Cykler','Amagerbrogade 163','2300','København S','http://www.stjerneborg-cykler.dk','#style31','12.610974','55.654205','Butikken er lukket','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scoot.dk','Hvidsværmervej 119','2610','Rødovre','http://www.scoot.dk','#style6','12.442717','55.697430','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Dragør Cykel & Motorservice','A.P. Møllers Allé 7','2791','Dragør','http://dragørcykler.dk/','#style1','12.660676','55.601330','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scooter Hjørnet','Søborg Hovedgade 1','2870','københavn','http://www.scooterhjoernet.dk','#style9','12.524768','55.727638','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Midtsjællands knallertservice','Pedersborg Torv 8','4180','Sorø','http://www.knallertservice.dk','#style16','11.558070','55.452995','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Cykelsmeden','Hovedgaden 14','4571','Grevinge','','#style1','11.551202','55.799587','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Midtfyns cykel og knallertforretning','Østre Ringvej 26','5750','Ringe','','#style1','10.483608','55.237682','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Fjellerup cykel og knallertfforretning','Kløvmosevej 9','5856','Ryslinge','','#style1','10.563868','55.235134','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Hemme cykler','Storegade 36','6700','Esbjerg','http://www.hemmecykler.dk','#style1','8.467426','55.471638','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Videbæk scooter','Søndergade 10','6920','Videbæk','','#style1','8.631624','56.090382','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Børkop cykelforretning','Vestergade 17','7080','Børkop','http://www.boerkopcykler.dk','#style1','9.646868','55.643517','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Cykel & autobørsen','Søndermarken 3','7361','Ejstrupholm','http://www.cykelogautoboersen.dk','#style1','9.297459','55.982090','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Skovs cykler og knallerter','Bredgade 63','7400','Herning','http://www.skovs-cykler.dk','#style1','8.967437','56.136337','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Østbyens cykel & knallertcenter','Østerbakken 62B','7700','Thisted','','#style1','8.706469','56.956772','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Cykel og scooter smeden','Thorstedvej 62','7700','Thisted','http://www.scootersmeden.dk','#style1','8.666569','56.960533','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('J R auto & scooter','Glaspustervej 1','7730','Hanstholm','','#style1','8.622213','57.115990','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Hurup cykel & knallertcenter','Bredgade 74-76','7760','Hurup Thy','','#style1','8.424212','56.748295','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('B O cykler','Gasværksvej 3-7','7900','Nykøbing Mors','http://www.b-o-cykler.dk','#style1','8.852513','56.793480','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('LP Cykler & Maskiner','Nørrealle 5','8400','Ebeltoft','','#style1','10.681479','56.201195','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Galten Knallert & Cykelværksted','Smedeskovvej 24','8464','Galten','','#style1','9.909351','56.159016','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Mønsted Cykelforretning','Bredgade 20','8800','Viborg','','#style1','9.188890','56.445393','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Kjær\'s Cykler','Halvej 2','8961','Allingåbro','','#style1','10.323804','56.464149','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Auning Cykelforretning','Centervej 21C','8963','Auning','','#style1','10.372676','56.431126','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Sæby Scooter & Cross Center','Fallavej 4','9300','Sæby','','#style1','10.494824','57.325584','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Jammerbugten\'s Scooter & MC','Fredensvej 2','9460','Brovst','','#style1','9.523802','57.095985','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('JG Scooter & Motorservice','Ringvejen 6','9560','Hadsund','','#style1','10.106169','56.726517','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Cykel & Scooterhuser','Østergade 8','9460','Brovst','http://www.cykelscooterhuset.dk','#style1','9.524355','57.097359','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Mønsted cykler','Bredgade 20','8800','Viborg','http://www.monstedcykler.dk','#style1','9.188890','56.445393','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('RH Cross Service','Vonsildvej 34','6000','Kolding','http://www.rhcross.dk','#style1','9.476252','55.456108','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Minimotor','Industrivej 1','6000','Kolding','http://www.minimotor.dk','#style1','9.472636','55.470764','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Struck\'s MC','Holmevej 6','6240','Løgumkloster','http://www.struck.dk','#style1','9.039226','55.000046','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Glejbjerg Motorservice','Boldingvej 11','6752','Glejbjerg','http://www.glejbjerg-motorservice.dk','#style1','8.812595','55.555103','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('KS Motor A/S','Jens Grøns Vej 23','7100','Vejle','http://www.ks-motor.dk','#style1','9.570470','55.677212','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Midtjydsk MC','Neptunvej 10','7430','Ikast','http://www.midtjydskmc.dk','#style1','9.141659','56.137527','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Vesterbro Cykler & Knallertcenter','Saxogade 111','1662','København V','','#style1','12.551671','55.666592','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Powerscooter','Gammel Køge Landevej 660','2660','Brøndby Strand','http://powerscooter.dk','#style31','12.429445','55.618046','(Skiftede navn til cykel pitten som også er lukket)','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Italian bike store','Ålekistevej 184','2720','Vanløse','http://www.haasum.dk','#style1','12.480657','55.693016','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Københavns auto','Gammel Køge Landevej 384','2650','Hvidovre','http://www.kbh-auto.dk','#style1','12.477553','55.626556','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Knallertbiksen','Håndværkerbyen 15 A','2670','Greve','http://www.knallertbiksen.dk','#style19','12.293910','55.590569','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Gårde autoservice','Svanehøjvej 19','6870','Ølgod','http://www.gaardeautoservice.dk','#style1','8.616267','55.763130','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Bikes4You','Vestergade 54','5492','Vissenbjerg','http://www.bikes4you.dk','#style1','10.120651','55.387642','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('JMC knallerter','Lavgade 2','6100','Haderslev','http://www.jmcknallerter.dk','#style1','9.488012','55.248627','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scooter-Shoppen A/S','Høegh Guldbergs Gade 1','8700','Horsens','http://www.scooter-shoppen.dk','#style1','9.855069','55.859322','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scooter-Shoppen A/S','Gammelgårdsvej 7','7130','Juelsminde','http://www.scooter-shoppen.dk','#style1','9.971139','55.711349','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Tarp Cykler','Tarp byvej 32','6715','Esbjerg N','http://www.tarpcykler.dk','#style1','8.458625','55.527184','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('West import','Ormhøjgårdvej 1','8700','Horsens','http://www.west-import.dk','#style29','9.835863','55.843590','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Køge Autocenter','Københavnsvej 245','4600','Køge','http://www.koge-autocenter.dk','#style1','12.198719','55.504105','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Vordingborg mc center','Algade 7','4760','Vordingborg','http://www.vomc.dk','#style1','11.902345','55.012760','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Vi Cykler (tidligere Kaj pryds)','Bygaden 74','5953','Tranekær','http://www.kajpryds.dk','#style1','10.802903','54.960526','Butikken er solgt og har skiftet navn til Vi Cykler','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Bro cykel og knallertforretning','Møllesøvej 6','5970','Ærøskøbing','','#style1','10.419962','54.838879','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Thy scooter lager','Hvarregårdsvej 1','7700','Thisted','http://www.scooterbutikken.dk','#style1','8.634047','56.999554','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Jarvis cykler','Vesterø Havnegade 29','9940','Læsø','http://www.jarvis-laesoe.dk','#style1','10.923600','57.291527','Jeg er ikke sikker på dette sted overhovedet har noget med scootere at gøre men der er muligvis scooter udlejning.','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Cykel service','Venusvej 4','7000','Fredericia','http://www.cykelservice.dk','#style1','9.722683','55.567604','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Sigma Mc','Balstrupvej 92','4100','Ringsted','http://sigma-mc.dk','#style1','11.812963','55.434940','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Hilmars cykler','Adelgade 51','4880','Nysted','http://www.hilmars-audio.dk','#style1','11.728925','54.666660','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('MC hjørnet','Krakasvej 9','3400','Hillerød','http://www.mchjoernet.dk','#style8','12.512728','55.672306','Butikken er flyttet til Hillerød Gamle adresse: Roskildevej 46 2000 Frederiksberg http://www.mchjoernet.dk','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('MC hjørnet','Krakasvej 9','3400','Hillerød','http://www.mchjoernet.dk','#style1','12.263714','55.930130','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Ringsted motor','Roskildevej 236','4100','Ringsted','http://www.ringsted-motor.com','#style18','11.807490','55.464146','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('høng cykler & knallerter','Hovedgaden 22','4270','Høng','http://www.hongcykler.dk/','#style1','11.288072','55.509068','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('scootershop.dk V/Asnæs importen ApS','Adelers Alle 2','4540','Fårevejle','http://scootershop.dk/','#style1','11.439887','55.803188','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('cykel centret','Tårnborgvej 2','4220','Korsør','http://cykel-centret.dk/','#style1','11.142020','55.332233','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('El-drive','Vestergade 14C','4850','Stubbekøbing','http://www.el-drive.dk','#style31','12.040755','54.890499','Butikken er lukket','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Finns cykler','Vestergade 15A','4230','Skælskør','http://finns-cykler.dk/','#style1','11.289401','55.254105','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Cykelbixen','Nykøbingvej 64','4840','Nørre Alslev','http://www.cykelbixen.dk','#style1','11.858609','54.885864','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Racing Shop','Agtrupvej 45','6000','Kolding','http://www.racingshop.dk','#style1','9.474056','55.483212','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Storm cykler','Kochsgade 51','5000','Odense C','http://stormcykler.dk','#style1','10.402763','55.404781','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Kurt\'s scootere & knallerter','Bernstorffsvej 2','5000','Odense','http://www.kurtscooter.dk','#style1','10.396923','55.389874','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Bruun-Larsen & søn','Vesterbro 29-31','5000','Odense C','http://www.bruun-larsen.dk','#style1','10.377244','55.393818','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Heines MC','Stubbekøbingvej 44','4800','Nykøbing Falster','http://www.heines-mc.dk','#style1','11.870013','54.776035','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Cymo Centret ApS','Banegårdsvej 3-5','9500','Hobro','http://www.cymo-centret.dk','#style1','9.792497','56.643026','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Hellested cykelforretning','Bygaden 48','4652','Hårlev (Hellested)','http://www.hellestedcykler.dk','#style22','12.251620','55.329533','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('midtfyns mc- og autoreparation A/S','Erhvervsvangen 6','5792','Årslev','http://www.midtfyns-mc.dk','#style1','10.465635','55.305805','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Den gamle smedie','Smedegade 36','8305','Samsø','http://www.dengamlesmedie.webbyen.dk','#style1','10.595184','55.831139','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Claus May motorcykel center','Møllebakken 18','5690','Tommerup','http://www.clausmaymc.dk','#style1','10.203048','55.324185','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('MSP Tuning Aps','Roholmsvej 15','2620','Albertslund','http://www.msp-tuning.dk','#style1','12.360139','55.667305','Er flyttet til Baldershøj 36A 2635 Ishøj','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('MSP Tuning Aps','Roskildevej 342 Kld','2630','Taastrup','http://www.msp-tuning.dk','#style1','12.303942','55.658438','Er flyttet til Baldershøj 36A 2635 Ishøj','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('MSP Tuning Aps','Baldershøj 36A','2635','Ishøj','http://www.msp-tuning.dk','#style1','12.316610','55.615941','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Cykel pedersen','Brogade 31','5700','Svendborg','http://www.cykelpedersen.dk','#style1','10.611406','55.058469','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scooter Martin (gammel adresse)','Skovsbovej 1','5900', 'Rudkøbing (Sdr. Longelse)','http://www.scootermartin.dk','#style1','10.778304','54.904635','Er flyttet til Spodsbjergvej 147 b 5900 Rudkøbing','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scooter Martin (ny adresse)','Spodsbjergvej 147 b','5900','Rudkøbing','http://www.scootermartin.dk','#style1','10.735654','54.934900','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('BB Motor','Håndværkervej 7','4652','Hårlev','http://www.bbmotor.dk','#style14','12.228614','55.342534','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('RacingShop','Agtrupvej 45','6000','Kolding','http://www.racingshop.dk','#style1','9.474039','55.483232','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Scoot-R','Vesterborgvej 3B','4953','Vesterborg','http://www.scoot-r.dk','#style1','11.281176','54.845954','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Motorgården A/S','Mosevangen 12','9230','Svenstrup','http://motorgaarden-mc.dk','#style1','9.857246','56.979193','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Special Motorcykler Aps','Kaolinvej12','9220','Aalborg Øst','http://www.specialmc.dk','#style1','9.970773','57.055494','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Hepi Service','Rullegårdsvej 4','9940','Læsø','','#style1','10.990624','57.258301','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Bojes Auto & Knallerter','Mygdalvej 6','9850','Hirtshals (Asdal)','http://www.bojes-auto.webbyen.dk','#style1','10.029216','57.549105','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('G.S. Carlsen & Søn','Barfredsvej 82 - 84','9900','Frederikshavn','http://www.gsc-biler.dk','#style1','10.531978','57.445052','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Biltema Aalborg','Stenbukken 21','9200','Aalborg SV','http://biltema.dk','#style3','9.868688','56.996480','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Biltema Horsens','Høegh Guldbergs Gade 15','8700','Horsens','http://biltema.dk','#style3','9.850989','55.853806','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Biltema Rødekro','Kometvej 6','6230','Rødekro','http://biltema.dk','#style3','9.362524','55.069703','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Biltema Odense','Risingsvej 61','5000','Odense C','http://biltema.dk','#style3','10.422699','55.402448','','');
INSERT INTO stederidanmark (navn, adresse, postnummer, `by`, hjemmeside, style, lat, lng, besked, type) VALUES ('Biltema Næstved','Vestergårdsvej 28','4700','Næstved','http://biltema.dk','#style3','11.790933','55.253963','','');

*/

?>