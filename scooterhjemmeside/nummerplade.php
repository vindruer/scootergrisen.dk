<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "billede generator af knallert nummerplade";
$overskrift = "billede generator af knallert nummerplade";
$metadescription = "indtast registeringsnummer fra scooter/knallert og få et billede som ligner en nummerplade";

$setup['nogetikon']               = 'ikoner/ikon_nummerplade2.png';

$get_registeringsnummer = '';
$get_knallert = 'lille';

if(isset($_GET["registeringsnummer"]) && $_GET["registeringsnummer"] != ''){

   if(mb_strlen($_GET["registeringsnummer"]) > 0 && mb_strlen($_GET["registeringsnummer"]) <= 6){

      if(preg_match('/^[a-z0-9_æøåÆØÅ\-.\/\\\]*$/i', $_GET['registeringsnummer'])){

         $get_registeringsnummer = $_GET["registeringsnummer"];
         $title .= ' (' . $get_registeringsnummer . ')';
         $overskrift .= ' (' . $get_registeringsnummer . ')';

      }

   }

}

if(isset($_GET["knallert"]) && $_GET["knallert"] != ''){

   if($_GET["knallert"] == 'lille' || $_GET["knallert"] == 'stor'){

      $get_knallert = $_GET["knallert"];
      $title .= ' (' . $get_knallert . ' knallert)';
      $overskrift .= ' (' . $get_knallert . ' knallert)';

   }

}

($get_knallert == 'lille')
   ? $lillechecked = ' checked'
   : $lillechecked = '';

($get_knallert == 'stor')
   ? $storchecked = ' checked'
   : $storchecked = '';

$GLOBALS['setup']['head'] = '
<style type="text/css">

   .nummerpladegenerator {
      margin: 10px auto;
      text-align: center;
   }

   .nummerpladegenerator a {
      margin: 0 .5em;
   }

   .nummerpladegenerator h1 {
      margin: .5em;
      text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.5);
      font-weight: bold;
   }

   .nummerpladegenerator .breddeholder {
      margin: 1em;
   }

   .nummerpladegenerator form {
      margin: 1em;
   }

   .nummerpladegenerator input {
      /*border: 2px solid black;*/
      /*border-radius: 10px;*/
      /*font-family: consolas;*/
      /*color: black;*/
      margin: 1em;
      vertical-align: middle;
   }

   .nummerpladegenerator label {
      border-radius: 10px;
      padding: .2em;
      font-family: consolas;
      color: black;
      white-space: nowrap;
   }

   .nummerpladegenerator label.registeringsnummer {
      background: white;
   }

   .nummerpladegenerator label.gul {
      background: #D3C035;
      border: 5px solid black;
   }

   .nummerpladegenerator label.hvid {
      background: #eee;
      border: 5px solid darkred;
   }

   .nummerpladegenerator #canvas1 {
/*
      background: url(/scooterhjemmeside/billeder/billed0092.jpg) no-repeat center center;
      background-size: 110% 110%;

      background: url(/scooterhjemmeside/billeder/billed3776.jpg) no-repeat center center;
      background-size: 120% 120%;
*/
   }

   #downloadlink3 {
      margin: 1em;
   }

</style>

<script type="text/javascript">

   \'use strict\';

   var canvas1 = null,
       context1 = null,
       downloadlink3 = null,
       a = document.createElement(\'a\'),
       nummerpladetype = \'' . $get_knallert . '\',
       radiogul = null,
       radiohvid = null,
       highlightfarve = \'rgba(255, 255, 255, 0.3)\',
       baggrund_baggrund = null,
       kant_baggrund = null,
       hand = null,
       tegn_baggrund = null,
       baggrund_baggrund_gul = null,
       baggrund_baggrund_hvid = null,
       kant_baggrund_sort = null,
       kant_baggrund_rod = null,
       pattern = null,
       interval1 = null,
       registeringsnummer = \'' . $get_registeringsnummer . '\',
       standardfilnavn = \'nummerplade.png\';

   function velgstorrelse() {

      var index = document.abc.select1.options[document.abc.select1.selectedIndex].value;
      skiftstorrelse(index);

   }

   function skiftstorrelse(data) {

      if (data != \'\') {

         canvas1.width = data;
         canvas1.height = data / 1.16; // nummerplade er 1,16 gange breddere end højere
         tegnnummerplade(registeringsnummer, document.getElementsByName(\'knallerttype\'));

      }

   }

   function skifttype(data) {

      nummerpladetype = data;
      tegnnummerplade(registeringsnummer, document.getElementsByName(\'knallerttype\'));

   }

   function findradioverdi(radios) {

      for (var i = 0, length = radios.length; i < length; i++) {

         if (radios[i].checked) {

            return radios[i].value;
            break; // only one radio can be logically checked, don\'t check the rest

         }

      }

   }

   function tegnnummerplade(data, radios) {

      // skal ikke udføres hvis browser ikke forstår canvas ellers giver radiogul fejl fordi den er null
      if (!canvas1.getContext) {

         return;

      }

      nummerpladetype = findradioverdi(radios);

      if (nummerpladetype == \'lille\') {

         radiogul.checked = true;
         radiohvid.checked = false;
         baggrund_baggrund = baggrund_baggrund_gul;
         kant_baggrund = kant_baggrund_sort;

      } else if (nummerpladetype == \'stor\') {

         radiogul.checked = false;
         radiohvid.checked = true;
         baggrund_baggrund = baggrund_baggrund_hvid;
         kant_baggrund = kant_baggrund_rod;

      }

      var gul = "#D3C035",
          sort = "rgba(0, 0, 0, 0.92)",
          //font = \'Trebuchet MS\',
          font = \'consolas\',
          fontsize = canvas1.width / 2.45,
          registeringsnummer_linie1_x = canvas1.width / 2,
          registeringsnummer_linie1_y = 220,
          registeringsnummer_linie1_y = canvas1.height / 2 - fontsize / 9,
          registeringsnummer_linie2_x = canvas1.width / 2,
          registeringsnummer_linie2_y = 434,
          registeringsnummer_linie2_y = canvas1.height - fontsize / 3,
          kantstregbreddeb = canvas1.width / 24.5, // bestemmer hvor afrundede hjørnerne skal være
          highlighty = fontsize / 100, // bestemmer hvor afrundede hjørnerne skal være
          x = 1,
          y = 1,
          width = canvas1.width - x - x,
          height = canvas1.height - y - y,
          radius = canvas1.width / 10,
          xb = canvas1.width / 24.5,
          yb = canvas1.width / 24.5,
          widthb = canvas1.width - xb - xb,
          heightb = canvas1.height - yb - yb,
          radiusb = canvas1.width / 14,
          handwidth = hand.width,
          handheight = hand.height;

      context1.clearRect(0, 0, canvas1.width, canvas1.height);

      pattern = context1.createPattern(baggrund_baggrund, \'repeat\');
      context1.fillStyle = pattern; // vælg udfyldningsfarve (grøn)
      context1.beginPath();
      context1.moveTo(x, y+radius);
      context1.lineTo(x, y+height-radius);
      context1.quadraticCurveTo(x, y+height, x+radius, y+height);
      context1.lineTo(x+width-radius, y+height);
      context1.quadraticCurveTo(x+width, y+height, x+width, y+height-radius);
      context1.lineTo(x+width, y+radius);
      context1.quadraticCurveTo(x+width, y, x+width-radius, y);
      context1.lineTo(x+radius, y);
      context1.quadraticCurveTo(x, y, x, y+radius);
      context1.fill();

      context1.globalAlpha = 0.07;
      context1.drawImage(hand, xb*6, yb/2, handwidth, handheight); // sæt original billedet over på canvas i ny størrelse
      context1.drawImage(hand, xb*6, yb*9, handwidth, handheight); // sæt original billedet over på canvas i ny størrelse
      context1.drawImage(hand, xb*6, yb*17.5, handwidth, handheight); // sæt original billedet over på canvas i ny størrelse
      context1.globalAlpha = 1;

      pattern = context1.createPattern(kant_baggrund, \'repeat\');
      context1.fillStyle = pattern; // vælg udfyldningsfarve (grøn)
      context1.strokeStyle = highlightfarve;
      context1.beginPath();
      context1.moveTo(xb, yb+radiusb-highlighty);
      context1.lineTo(xb, yb+heightb-radiusb-highlighty);
      context1.quadraticCurveTo(xb, yb+heightb, xb+radiusb, yb+heightb-highlighty);
      context1.lineTo(xb+widthb-radiusb, yb+heightb-highlighty);
      context1.quadraticCurveTo(xb+widthb, yb+heightb, xb+widthb, yb+heightb-radiusb-highlighty);
      context1.lineTo(xb+widthb, yb+radiusb-highlighty);
      context1.quadraticCurveTo(xb+widthb, yb, xb+widthb-radiusb, yb-highlighty);
      context1.lineTo(xb+radiusb, yb-highlighty);
      context1.quadraticCurveTo(xb, yb, xb, yb+radiusb-highlighty);
      context1.lineWidth = kantstregbreddeb;
      context1.stroke();

      context1.strokeStyle = pattern;
      context1.beginPath();
      context1.moveTo(xb, yb+radiusb);
      context1.lineTo(xb, yb+heightb-radiusb);
      context1.quadraticCurveTo(xb, yb+heightb, xb+radiusb, yb+heightb);
      context1.lineTo(xb+widthb-radiusb, yb+heightb);
      context1.quadraticCurveTo(xb+widthb, yb+heightb, xb+widthb, yb+heightb-radiusb);
      context1.lineTo(xb+widthb, yb+radiusb);
      context1.quadraticCurveTo(xb+widthb, yb, xb+widthb-radiusb, yb);
      context1.lineTo(xb+radiusb, yb);
      context1.quadraticCurveTo(xb, yb, xb, yb+radiusb);

      context1.lineWidth = kantstregbreddeb;
      context1.stroke();

      context1.fillStyle = highlightfarve;
      context1.font = \'bold \' + fontsize + \'px \' + font; // vælg font (stil, størrelse, fontnavn)
      context1.textAlign = \'center\';
      context1.textBaseline = \'alphabetic\'; // har betydning for hvor teksten bliver tegnet

      if (nummerpladetype == \'lille\') {

         registeringsnummer_linie1_x = canvas1.width / 2;
         if (data[0]) { context1.fillText(data[0], registeringsnummer_linie1_x - fontsize / 1.5, registeringsnummer_linie1_y - highlighty); }
         if (data[1]) { context1.fillText(data[1], registeringsnummer_linie1_x, registeringsnummer_linie1_y - highlighty); }
         if (data[2]) { context1.fillText(data[2], registeringsnummer_linie1_x + fontsize / 1.5, registeringsnummer_linie1_y - highlighty); }
         if (data[3]) { context1.fillText(data[3], registeringsnummer_linie2_x - fontsize / 1.5, registeringsnummer_linie2_y - highlighty); }
         if (data[4]) { context1.fillText(data[4], registeringsnummer_linie2_x, registeringsnummer_linie2_y - highlighty); }
         if (data[5]) { context1.fillText(data[5], registeringsnummer_linie2_x + fontsize / 1.5, registeringsnummer_linie2_y - highlighty); }

      } else if (nummerpladetype == \'stor\') {

         registeringsnummer_linie1_x = canvas1.width / 1.55;
         if (data[0]) { context1.fillText(data[0], registeringsnummer_linie1_x - fontsize / 1.5, registeringsnummer_linie1_y - highlighty); }
         if (data[1]) { context1.fillText(data[1], registeringsnummer_linie1_x, registeringsnummer_linie1_y - highlighty); }
         if (data[2]) { context1.fillText(data[2], registeringsnummer_linie2_x - fontsize / 1.5, registeringsnummer_linie2_y - highlighty); }
         if (data[3]) { context1.fillText(data[3], registeringsnummer_linie2_x, registeringsnummer_linie2_y - highlighty); }
         if (data[4]) { context1.fillText(data[4], registeringsnummer_linie2_x + fontsize / 1.5, registeringsnummer_linie2_y - highlighty); }

      }

      pattern = context1.createPattern(tegn_baggrund, \'repeat\');
      context1.fillStyle = pattern;

      if (nummerpladetype == \'lille\') {

         registeringsnummer_linie1_x = canvas1.width / 2;
         if (data[0]) { context1.fillText(data[0], registeringsnummer_linie1_x - fontsize / 1.5, registeringsnummer_linie1_y); }
         if (data[1]) { context1.fillText(data[1], registeringsnummer_linie1_x, registeringsnummer_linie1_y); }
         if (data[2]) { context1.fillText(data[2], registeringsnummer_linie1_x + fontsize / 1.5, registeringsnummer_linie1_y); }
         if (data[3]) { context1.fillText(data[3], registeringsnummer_linie2_x - fontsize / 1.5, registeringsnummer_linie2_y); }
         if (data[4]) { context1.fillText(data[4], registeringsnummer_linie2_x, registeringsnummer_linie2_y); }
         if (data[5]) { context1.fillText(data[5], registeringsnummer_linie2_x + fontsize / 1.5, registeringsnummer_linie2_y); }

      } else if (nummerpladetype == \'stor\') {

         registeringsnummer_linie1_x = canvas1.width / 1.55;
         if (data[0]) { context1.fillText(data[0], registeringsnummer_linie1_x - fontsize / 1.5, registeringsnummer_linie1_y); }
         if (data[1]) { context1.fillText(data[1], registeringsnummer_linie1_x, registeringsnummer_linie1_y); }
         if (data[2]) { context1.fillText(data[2], registeringsnummer_linie2_x - fontsize / 1.5, registeringsnummer_linie2_y); }
         if (data[3]) { context1.fillText(data[3], registeringsnummer_linie2_x, registeringsnummer_linie2_y); }
         if (data[4]) { context1.fillText(data[4], registeringsnummer_linie2_x + fontsize / 1.5, registeringsnummer_linie2_y); }

      }

      // Ret linket så filnavnet kommet til at hedde det samme som registeringsnummer

      if (registeringsnummer != \'\') {

         a.download = data + \'.png\';

      } else {

         a.download = standardfilnavn;

      }

   }

   function startnummerplade() {

      canvas1 = document.getElementById("canvas1");

      if (canvas1.getContext) {

         context1 = canvas1.getContext(\'2d\'),
         radiogul = document.getElementById(\'radiogul\'),
         radiohvid = document.getElementById(\'radiohvid\'),
         downloadlink3 = document.getElementById(\'downloadlink3\')
         ;

         hand = new Image(); // lav nyt image objekt
         hand.src = \'/scooterhjemmeside/billeder/nummerpladehand.png\'; // sæt original billedets sti

         tegn_baggrund = new Image(); // lav nyt image objekt
         tegn_baggrund.src =  \'/scooterhjemmeside/billeder/nummerpladesort.png\';

         baggrund_baggrund_gul = new Image(); // lav nyt image objekt
         baggrund_baggrund_gul.src = \'/scooterhjemmeside/billeder/nummerpladegul.png\'; // sæt original billedets sti

         baggrund_baggrund_hvid = new Image(); // lav nyt image objekt
         baggrund_baggrund_hvid.src = \'/scooterhjemmeside/billeder/nummerpladehvid2.png\'; // sæt original billedets sti

         kant_baggrund_sort = new Image(); // lav nyt image objekt
         kant_baggrund_sort.src =  \'/scooterhjemmeside/billeder/nummerpladesort.png\';

         kant_baggrund_rod = new Image(); // lav nyt image objekt
         kant_baggrund_rod.src =  \'/scooterhjemmeside/billeder/nummerpladerod2.png\';

         interval1 = setInterval(doWhileLoading1, 100); // udføres hvis billederne endnu ikke er indlæst

      }

   }

   function doWhileLoading1() {

      if (hand.complete &&
          tegn_baggrund.complete &&
          baggrund_baggrund_gul.complete &&
          baggrund_baggrund_hvid.complete &&
          kant_baggrund_sort.complete &&
          kant_baggrund_rod.complete) {

         clearInterval(interval1);

         tegnnummerplade(registeringsnummer, document.getElementsByName(\'knallerttype\'));

         if (a.download !== undefined) {

            a.alt = \'Download billedet af nummerpladen\';
            a.title = \'Download billedet af nummerpladen\';
            a.href = \'javascript:return false;\';
            a.setAttribute(\'onclick\', \'this.href = canvas1.toDataURL();\');

            if (registeringsnummer != \'\') {

               a.download = registeringsnummer + \'.png\';

            } else {

               a.download = standardfilnavn;

            }

            a.textContent = "Gem billede";
            downloadlink3.appendChild(a);

         } else {

         }

      }

   }

   if (window.addEventListener) {

      window.addEventListener(\'load\', startnummerplade, false);

   }

</script>
';

$databasecenter = array(

'
generator
' => '
<!--ignore-->
<div class="nummerpladegenerator">

<form onsubmit="return false;" name="abc">

   <div>
      <label>Eksempler :
         <select class="inputselect" name="eksempler" onchange="window.location = this.value;" onselect="window.location = this.value;">
            <option value="' . $_SERVER["PHP_SELF"] . '">[tom]</option>
            <optgroup label="Lille knallert">
               <option value="' . $_SERVER["PHP_SELF"] . '?registeringsnummer=VS9433&amp;knallert=lille">VS9433</option>
               <option value="' . $_SERVER["PHP_SELF"] . '?registeringsnummer=VY7258&amp;knallert=lille">VY7258</option>
               <option value="' . $_SERVER["PHP_SELF"] . '?registeringsnummer=XM9447&amp;knallert=lille">XM9447</option>
               <option value="' . $_SERVER["PHP_SELF"] . '?registeringsnummer=VK6145&amp;knallert=lille">VK6145</option>
            </optgroup>
            <optgroup label="Stor knallert">
               <option value="' . $_SERVER["PHP_SELF"] . '?registeringsnummer=DD737&amp;knallert=stor">DD737</option>
               <option value="' . $_SERVER["PHP_SELF"] . '?registeringsnummer=RD685&amp;knallert=stor">RD685</option>
               <option value="' . $_SERVER["PHP_SELF"] . '?registeringsnummer=NS199&amp;knallert=stor">NS199</option>
            </optgroup>
         </select>
      </label>
   </div>

   <div>
      <label class="registeringsnummer">Indtast registeringsnummer : <input class="inputtext" name="indtastederegisteringsnummer" type="text" size="7" value="' . $get_registeringsnummer . '" maxlength="6" onkeyup="tegnnummerplade(this.value, document.getElementsByName(\'knallerttype\'));"></label>
   </div>

   <div>
      <label class="gul"><input class="inputradio" id="radiogul" type="radio" name="knallerttype" value="lille" onclick="tegnnummerplade(form.indtastederegisteringsnummer.value, document.getElementsByName(\'knallerttype\'));" ' . $lillechecked . '>Lille knallert</label>'.lidtplads('vandret').'<label class="hvid"><input class="inputradio" id="radiohvid" type="radio" name="knallerttype" value="stor" onclick="tegnnummerplade(form.indtastederegisteringsnummer.value, document.getElementsByName(\'knallerttype\'));" ' . $storchecked . '>Stor knallert</label>
   </div>

   <div class="breddeholder">
      <label>Vælg billede størrelse :
         <select class="inputselect" name="select1" onchange="velgstorrelse();">
            <option value="16">16' . ' x ' . floor(16/1.16) . '</option>
            <option value="32">32' . ' x ' . floor(32/1.16) . '</option>
            <option value="48">48' . ' x ' . floor(48/1.16) . '</option>
            <option value="64">64' . ' x ' . floor(64/1.16) . '</option>
            <option value="128">128' . ' x ' . floor(128/1.16) . '</option>
            <option value="256" selected>256' . ' x ' . floor(256/1.16) . '</option>
            <option value="580">580' . ' x ' . floor(580/1.16) . '</option>
            <option value="2000">2000' . ' x ' . floor(2000/1.16) . '</option>
         </select>
      </label>
   </div>

</form>

<div id="downloadlink3"></div>

<canvas id="canvas1" width="256" height="220">
Browseren understøtter ikke &lt;canvas&gt;
</canvas>

'.noscript().'

</div>
<!--ignore-->
'

,'
info om nummerplade
' => '
Nummerplade dimensioner for lille og stor knallert (bredde x højde) : 145 x 125 mm (1,16 gange breddere end højden)

Tegn højde : 36 mm (01-04-1976 til 29-02-2008), 45 mm (01-03-2008 til ?)

Skrifttype : ukendt sans-serif type ("consolas" minder lidt om den)

Links :
   <a href="http://www.nrpl.dk/high-2012.php">nrpl.dk</a>
   <a href="http://skat.dk/SKAT.aspx?oId=1825717">skat.dk</a>
   <a href="http://scootergrisen.dk/forum/viewtopic.php?f=3&amp;t=1450">Skrifttype på nummerplade</a>
   <a href="http://www.nrpl.dk/forum/viewtopic.php?f=4&amp;t=1331">Skrifttype på knallert nummerplade</a>
   <a href="http://www.nrpl.dk/forum/viewtopic.php?f=4&amp;t=1332">Symbol med øje-i-hånd (Argusøje)</a>
<p style="display: none; color: yellow;">Bugs : textBaseline = \'top\' ser ikke ens ud i Firefox og andre browsere</p>
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
