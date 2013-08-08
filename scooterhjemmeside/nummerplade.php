<!DOCTYPE html>

<html>

<head>

   <meta charset="utf-8">
   <title>Ufærdig nummerplade generator til at lave et billede af en scooter/knallert nummerplade</title>
   <meta name="description" content="ufærdig nummerplade generator side">

   <style type="text/css">

      body {
         margin: 10px auto;
         text-align: center;
      }

      #canvas1 {
         background: url(/scooterhjemmeside/billeder/billed3776.jpg) no-repeat center center;
      }

   </style>

</head>

<body>

<h1>Her vil jeg prøve og lave en nummerplade generator så man kan indtaste et registeringsnummer også bliver der lavet i billede i de rigtige dimensioner osv så det liger en rigtig nummerplade</h1>
<h2>Men det er ikke lavet endnu</h2>
lav nummerplade generator ligesom på http://www.nrpl.dk/high-2012.php
plade størrelse : 125 × 145 mm (1,16 højere end bred ?)
tegn højde : 36 mm


<canvas id="canvas1" width="464" height="400" style="border: 1px solid #c3c3c3;">
Browseren understøtter ikke &lt;canvas&gt;
</canvas>

<script type="text/javascript">

   var canvas1 = document.getElementById("canvas1"),
       context1 = null;

   if (canvas1.getContext) {

      context1 = canvas1.getContext('2d');

      context1.fillStyle = "#080"; // vælg udfyldningsfarve (grøn)
      //context1.fillRect(0, 0, canvas1.width, canvas1.height); // tegn udfyldt firkant på hele canvas

   }

</script>

</body>

</html>
