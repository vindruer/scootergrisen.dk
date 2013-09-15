<?php

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$get_registeringsnummer = '';
$get_knallert = 'lille';

   if(isset($_GET["registeringsnummer"]) && $_GET["registeringsnummer"] != ''){

      if(mb_strlen($_GET["registeringsnummer"]) > 0 && mb_strlen($_GET["registeringsnummer"]) <= 6){

         if(preg_match('/^[a-z0-9_æøåÆØÅ\-.\/\\\]*$/i', $_GET['registeringsnummer'])){

            $get_registeringsnummer = $_GET["registeringsnummer"];

         }

      }

   }

   if(isset($_GET["knallert"]) && $_GET["knallert"] != ''){

      if($_GET["knallert"] == 'lille' || $_GET["knallert"] == 'stor'){

         $get_knallert = $_GET["knallert"];

      }

   }

?>
<!DOCTYPE html>

<html>

<head>

   <meta charset="utf-8">
   <title>Nummerplade billede generator til at lave et billede af en scooter/knallert nummerplade</title>
   <meta name="description" content="Indtast registeringsnummer fra scooter/knallert og få et billede som ligner en nummerplade">

   <style type="text/css">

      html {
         min-height: 100%;
      }

      body {
         font-size: x-small;
         margin: 10px auto;
         text-align: center;
         background: #222;
         color: #ccc;
         font-family: 'open sans';
         background-image: -webkit-linear-gradient(-45deg, #333, #888);
         background-image: -ms-linear-gradient(-45deg, #333, #888);
         background-image: linear-gradient(-45deg, #333, #888);
      }

      h1 {
         margin: .5em;
         text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.5);
         font-weight: bold;
      }

      .breddeholder {
         margin: 1em;
      }

      form {
         margin: 1em;
      }

      input {
         font-size: large;
         border: 2px solid black;
         border-radius: 10px;
         font-family: consolas;
         color: black;
         margin: 1em;
      }

      label {
         font-size: large;
         background: #D3C035;
         border: 5px solid black;
         border-radius: 10px;
         padding: .2em;
         font-family: consolas;
         color: black;
         white-space: nowrap;
      }

      label.gul {
         background: #D3C035;
         border: 5px solid black;
      }
      label.hvid {
         background: #eee;
         border: 5px solid darkred;
      }

      @font-face {
         font-family: 'Open Sans';
         src: url('/scooterhjemmeside/fonts/OpenSans-Semibold-webfont.eot');
         src: local('☺'), url('/scooterhjemmeside/fonts/OpenSans-Semibold-webfont.woff') format('woff'), url('/scooterhjemmeside/fonts/OpenSans-Semibold-webfont.ttf') format('truetype'), url('/scooterhjemmeside/fonts/OpenSans-Semibold-webfont.svg') format('svg');
         font-weight: normal;
         font-style: normal;
      }

      a {
         margin: 0 .5em;
      }

      a:link, a:visited, a:active {
         color: yellow;
      }

      #canvas1 {
/*
         background: url(/scooterhjemmeside/billeder/billed0092.jpg) no-repeat center center;
         background-size: 110% 110%;

         background: url(/scooterhjemmeside/billeder/billed3776.jpg) no-repeat center center;
         background-size: 120% 120%;
*/

      }

   </style>

</head>

<body>

<h1>Nummerplade billede generator til lille knallert og stor knallert</h1>

   <a href="/" style="position: fixed; top: .1em; left: .1em;">Tilbage...</a>

<div>
   Eksempler :
   <a href="<?php echo $_SERVER["PHP_SELF"]; ?>?registeringsnummer=VS9433&knallert=lille">VS9433</a>
   <a href="<?php echo $_SERVER["PHP_SELF"]; ?>?registeringsnummer=VY7258&knallert=lille">VY7258</a>
   <a href="<?php echo $_SERVER["PHP_SELF"]; ?>?registeringsnummer=XM9447&knallert=lille">XM9447</a>
   <a href="<?php echo $_SERVER["PHP_SELF"]; ?>?registeringsnummer=VK6145&knallert=lille">VK6145</a>
   <a href="<?php echo $_SERVER["PHP_SELF"]; ?>?registeringsnummer=DD737&knallert=stor">DD737</a>
   <a href="<?php echo $_SERVER["PHP_SELF"]; ?>?registeringsnummer=RD685&knallert=stor">RD685</a>
   <a href="<?php echo $_SERVER["PHP_SELF"]; ?>?registeringsnummer=NS199&knallert=stor">NS199</a>
   <a href="<?php echo $_SERVER["PHP_SELF"]; ?>">[tom]</a>
</div>

<form onsubmit="return false;" name="abc">
   <label>Indtast registeringsnummer : <input name="indtastederegisteringsnummer" type="text" size="7" value="<?php echo $get_registeringsnummer; ?>" maxlength="6" onkeyup="tegnnummerplade(this.value, document.getElementsByName('knallerttype'));"></label>
   <div></div>
   <label class="gul"><input id="radiogul" type="radio" name="knallerttype" value="lille" onclick="tegnnummerplade(form.indtastederegisteringsnummer.value, document.getElementsByName('knallerttype'));" <?php if($get_knallert == 'lille'){ echo ' checked'; } ?>>Lille knallert</label>
   <label class="hvid"><input id="radiohvid" type="radio" name="knallerttype" value="stor" onclick="tegnnummerplade(form.indtastederegisteringsnummer.value, document.getElementsByName('knallerttype'));" <?php if($get_knallert == 'stor'){ echo ' checked'; } ?>>Stor knallert</label>

<div class="breddeholder">
   <select onchange="velgstorrelse();" name="select1">
      <option value="">Vælg bredde på billedet</option>
      <option value="16">16<?php echo ' x ' . floor(16/1.16); ?></option>
      <option value="32">32<?php echo ' x ' . floor(32/1.16); ?></option>
      <option value="48">48<?php echo ' x ' . floor(48/1.16); ?></option>
      <option value="64">64<?php echo ' x ' . floor(64/1.16); ?></option>
      <option value="128">128<?php echo ' x ' . floor(128/1.16); ?></option>
      <option value="256" selected>256<?php echo ' x ' . floor(256/1.16); ?></option>
      <option value="580">580<?php echo ' x ' . floor(580/1.16); ?></option>
      <option value="2000">2000<?php echo ' x ' . floor(2000/1.16); ?></option>
   </select>
</div>

   <span id="downloadlink3"></span>
</form>

<canvas id="canvas1" width="256" height="220">
Browseren understøtter ikke &lt;canvas&gt;
</canvas>

<div>
   <p>Plade bredde : 145 mm</p>
   <p>Plade højde : 125 mm</p>
   <p>Plade højde bredde aspect ratio : 1,16</p>
   <p>Tegn højde : 36 mm (01-04-1976 til 29-02-2008)</p>
   <p>Tegn højde : 45 mm (01-03-2008 til ?)</p>
   <p>Skrifttype : ukendt sans-serif (consolas minder lidt om den)</p>
   <p>Links : <a href="http://www.nrpl.dk/high-2012.php">nrpl.dk</a> <a href="http://skat.dk/SKAT.aspx?oId=1825717">skat.dk</a> <a href="http://scootergrisen.dk/forum/viewtopic.php?f=3&t=1450">Skrifttype på nummerplade</a></p>
   <p style="display: none; color: yellow;">Bugs : textBaseline = 'top' ser ikke ens ud i Firefox og andre browsere</p>
</div>

<script type="text/javascript">

   'use strict';

   var canvas1 = document.getElementById("canvas1"),
       context1 = null,
       downloadlink3 = document.getElementById('downloadlink3'),
       a = document.createElement('a'),
       nummerpladetype = '<?php echo $get_knallert; ?>',
       radiogul = document.getElementById('radiogul'),
       radiohvid = document.getElementById('radiohvid'),
       highlightfarve = 'rgba(255, 255, 255, 0.3)',
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
       registeringsnummer = '<?php echo $get_registeringsnummer; ?>';

   function velgstorrelse() {

      var index = document.abc.select1.options[document.abc.select1.selectedIndex].value;
      skiftstorrelse(index);

   }

   function skiftstorrelse(data) {

      if (data != '') {

         canvas1.width = data;
         canvas1.height = data / 1.16; // nummerplade er 1,16 gange breddere end højere
         tegnnummerplade(registeringsnummer, document.getElementsByName('knallerttype'));

      }

   }

   function skifttype(data) {

      nummerpladetype = data;
      tegnnummerplade(registeringsnummer, document.getElementsByName('knallerttype'));

   }

   function findradioverdi(radios) {

      for (var i = 0, length = radios.length; i < length; i++) {

         if (radios[i].checked) {

            return radios[i].value;
            break; // only one radio can be logically checked, don't check the rest

         }

      }

   }

   function tegnnummerplade(data, radios) {

      nummerpladetype = findradioverdi(radios);

      if (nummerpladetype == 'lille') {

         radiogul.checked = true;
         radiohvid.checked = false;
         baggrund_baggrund = baggrund_baggrund_gul;
         kant_baggrund = kant_baggrund_sort;

      } else if (nummerpladetype == 'stor') {

         radiogul.checked = false;
         radiohvid.checked = true;
         baggrund_baggrund = baggrund_baggrund_hvid;
         kant_baggrund = kant_baggrund_rod;

      }

      var gul = "#D3C035",
          sort = "rgba(0, 0, 0, 0.92)",
          //font = 'Trebuchet MS',
          font = 'consolas',
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

      pattern = context1.createPattern(baggrund_baggrund, 'repeat');
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

      pattern = context1.createPattern(kant_baggrund, 'repeat');
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
      context1.font = 'bold ' + fontsize + 'px ' + font; // vælg font (stil, størrelse, fontnavn)
      context1.textAlign = 'center';
      context1.textBaseline = 'alphabetic'; // har betydning for hvor teksten bliver tegnet

      if (nummerpladetype == 'lille') {
      
         registeringsnummer_linie1_x = canvas1.width / 2;
         if (data[0]) { context1.fillText(data[0], registeringsnummer_linie1_x - fontsize / 1.5, registeringsnummer_linie1_y - highlighty); }
         if (data[1]) { context1.fillText(data[1], registeringsnummer_linie1_x, registeringsnummer_linie1_y - highlighty); }
         if (data[2]) { context1.fillText(data[2], registeringsnummer_linie1_x + fontsize / 1.5, registeringsnummer_linie1_y - highlighty); }
         if (data[3]) { context1.fillText(data[3], registeringsnummer_linie2_x - fontsize / 1.5, registeringsnummer_linie2_y - highlighty); }
         if (data[4]) { context1.fillText(data[4], registeringsnummer_linie2_x, registeringsnummer_linie2_y - highlighty); }
         if (data[5]) { context1.fillText(data[5], registeringsnummer_linie2_x + fontsize / 1.5, registeringsnummer_linie2_y - highlighty); }
      
      } else if (nummerpladetype == 'stor') {
      
         registeringsnummer_linie1_x = canvas1.width / 1.55;
         if (data[0]) { context1.fillText(data[0], registeringsnummer_linie1_x - fontsize / 1.5, registeringsnummer_linie1_y - highlighty); }
         if (data[1]) { context1.fillText(data[1], registeringsnummer_linie1_x, registeringsnummer_linie1_y - highlighty); }
         if (data[2]) { context1.fillText(data[2], registeringsnummer_linie2_x - fontsize / 1.5, registeringsnummer_linie2_y - highlighty); }
         if (data[3]) { context1.fillText(data[3], registeringsnummer_linie2_x, registeringsnummer_linie2_y - highlighty); }
         if (data[4]) { context1.fillText(data[4], registeringsnummer_linie2_x + fontsize / 1.5, registeringsnummer_linie2_y - highlighty); }
      
      }

      pattern = context1.createPattern(tegn_baggrund, 'repeat');
      context1.fillStyle = pattern;

      if (nummerpladetype == 'lille') {

         registeringsnummer_linie1_x = canvas1.width / 2;
         if (data[0]) { context1.fillText(data[0], registeringsnummer_linie1_x - fontsize / 1.5, registeringsnummer_linie1_y); }
         if (data[1]) { context1.fillText(data[1], registeringsnummer_linie1_x, registeringsnummer_linie1_y); }
         if (data[2]) { context1.fillText(data[2], registeringsnummer_linie1_x + fontsize / 1.5, registeringsnummer_linie1_y); }
         if (data[3]) { context1.fillText(data[3], registeringsnummer_linie2_x - fontsize / 1.5, registeringsnummer_linie2_y); }
         if (data[4]) { context1.fillText(data[4], registeringsnummer_linie2_x, registeringsnummer_linie2_y); }
         if (data[5]) { context1.fillText(data[5], registeringsnummer_linie2_x + fontsize / 1.5, registeringsnummer_linie2_y); }

      } else if (nummerpladetype == 'stor') {

         registeringsnummer_linie1_x = canvas1.width / 1.55;
         if (data[0]) { context1.fillText(data[0], registeringsnummer_linie1_x - fontsize / 1.5, registeringsnummer_linie1_y); }
         if (data[1]) { context1.fillText(data[1], registeringsnummer_linie1_x, registeringsnummer_linie1_y); }
         if (data[2]) { context1.fillText(data[2], registeringsnummer_linie2_x - fontsize / 1.5, registeringsnummer_linie2_y); }
         if (data[3]) { context1.fillText(data[3], registeringsnummer_linie2_x, registeringsnummer_linie2_y); }
         if (data[4]) { context1.fillText(data[4], registeringsnummer_linie2_x + fontsize / 1.5, registeringsnummer_linie2_y); }

      }

   }

   function start() {

      hand = new Image(); // lav nyt image objekt
      hand.src = '/scooterhjemmeside/billeder/nummerpladehand.png'; // sæt original billedets sti

      tegn_baggrund = new Image(); // lav nyt image objekt
      tegn_baggrund.src =  '/scooterhjemmeside/billeder/nummerpladesort.png';

      baggrund_baggrund_gul = new Image(); // lav nyt image objekt
      baggrund_baggrund_gul.src = '/scooterhjemmeside/billeder/nummerpladegul.png'; // sæt original billedets sti

      baggrund_baggrund_hvid = new Image(); // lav nyt image objekt
      baggrund_baggrund_hvid.src = '/scooterhjemmeside/billeder/nummerpladehvid2.png'; // sæt original billedets sti

      kant_baggrund_sort = new Image(); // lav nyt image objekt
      kant_baggrund_sort.src =  '/scooterhjemmeside/billeder/nummerpladesort.png';

      kant_baggrund_rod = new Image(); // lav nyt image objekt
      kant_baggrund_rod.src =  '/scooterhjemmeside/billeder/nummerpladerod2.png';

      interval1 = setInterval(doWhileLoading1, 100); // udføres hvis billederne endnu ikke er indlæst

   }

   function doWhileLoading1() {

      if (hand.complete &&
          tegn_baggrund.complete &&
          baggrund_baggrund_gul.complete &&
          baggrund_baggrund_hvid.complete &&
          kant_baggrund_sort.complete &&
          kant_baggrund_rod.complete) {

         clearInterval(interval1);

         tegnnummerplade(registeringsnummer, document.getElementsByName('knallerttype'));

         if (a.download !== undefined) {

            a.alt = 'Download billedet af nummerpladen';
            a.title = 'Download billedet af nummerpladen';
            a.href = 'javascript:return false;';
            a.setAttribute('onclick', 'this.href = canvas1.toDataURL();');
            a.download = "nummerplade.png";
            a.textContent = "Gem billede";
            downloadlink3.appendChild(a);

         } else {

         }

      }

   }

   if (canvas1.getContext) {

      context1 = canvas1.getContext('2d');

      if (window.addEventListener) {

         window.addEventListener('load', start, false);

      }

   }

</script>

</body>

</html>
