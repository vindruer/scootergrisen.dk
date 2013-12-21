<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "benzin";
$overskrift = "benzin";
$metadescription = "forklaring af benzin, hvor det kommer fra, forklaring af oktan tal, additiver og bioethanol, benzinforbrug og råd til at køre længere på literen";

$GLOBALS['setup']['head'] = '
<style type="text/css">

#benzinforbrugform input {
   font-weight: bold;
   font-size: x-small;
   margin-bottom: 0;
   text-align: right;
}

</style>

<script type="text/javascript">

function visforbrugtabel(){

   var benzinforbrugkodeholder = document.getElementById(\'benzinforbrugkodeholder\'),
       output = \'\',
       liter  = [1,4.52,4.91,4.91,5.23,4.31,4.42,4.68,5,4.89,5.3,5.45,5.23,5.5,5.56,5.5,4.64,4.97],
       km     = [0,36,242,410,600,761,925,1088,1278.9,1431,1617,1810.9,2040,2279.5,2528.5,2782.6,3038,3245.5,3475.5],
       kml    = [],
       kmkort = [],
       qliter  = [],
       qkml    = [],
       qkmkort = [],
       qkm     = [],
       kmlsammenlagt = 0,
       count = 0,
       hojeste = 0,
       laveste = 1000,
       gennemsnit = 0;

   for (var loop = 0, l = liter.length; loop < l; loop++){

      kml[loop] = ((km[loop+1] - km[loop]) / liter[loop]);
      kmkort[loop] = (km[loop+1] - km[loop]);

   }

   output += \'\'
      + \'<div style="border-top: 2px solid #aaa; margin-top: 20px; margin-bottom: 20px;"></div>\'
      + \'<form id="benzinforbrugform" class="fontsize_xsmall">\'
      ;


   for (loop = 2; loop < liter.length; loop++){

      qliter[loop] = liter[loop].toFixed(2);
      qkmkort[loop] = kmkort[loop].toFixed(0);
      qkml[loop] = kml[loop].toFixed(0);
      qkm[loop] = km[loop].toFixed(0);

      qliter[loop] += \'\';
      qliter[loop] = qliter[loop].replace(/\./, ",");

      output += \'\'
         + \'<div class="forbruglinie">\'
         + \'Tanket <input style="border-width: 0;" type="text" size="3" name="liter" value="\'+qliter[loop]+\'"> liter ,\'
         + \'kørt <input style="border-width: 0;" type="text" size="3" name="kmkort" value="\'+qkmkort[loop]+\'"> km, hvilket giver \'
         + \' <input style="border-width: 0;" type="text" size="3" name="kml" value="\'+qkml[loop]+\'"> km/liter.\'
         + \' (Speedometer <input style="border-width: 0;" type="text" size="3" name="km" value="\'+qkm[loop]+\'"> km )\'
         + \'</div>\'
         ;

   }

   for (loop = 2; loop < kml.length; loop++){

      kmlsammenlagt += kml[loop];
      count++;

      if(kml[loop] > hojeste){

         hojeste = kml[loop];

      }

      if(kml[loop] < laveste){

         laveste = kml[loop];

      }

   }

   gennemsnit = kmlsammenlagt / count;

   hojeste = hojeste.toFixed(0);
   laveste = laveste.toFixed(0);
   gennemsnit = gennemsnit.toFixed(0);

   output += \'\'
      + \'<div style="border-top: 2px dotted #aaa; margin-top: 20px; margin-bottom: 20px;"></div>\'
      + \'<div class="forbruglinie">Laveste km/liter : <input style="border-width: 0;" type="text" size="4" name="" value="\'+laveste+\'"> km/liter.</div>\'
      + \'<div class="forbruglinie">Højeste km/liter : <input style="border-width: 0;" type="text" size="4" name="" value="\'+hojeste+\'"> km/liter.</div>\'
      + \'<div style="border-top: 2px dotted #aaa; margin-top: 20px; margin-bottom: 20px;"></div>\'
      + \'<div class="forbruglinie">Gennemsnitlig forbrug : <input style="border-width: 0;" type="text" size="4" name="" value="\'+gennemsnit+\'"> km/liter.</div>\'
      + \'</form>\'
      ;

   benzinforbrugkodeholder.innerHTML = output;

}

</script>
';

$databasecenter = array(

'
introduktion
' => '
'.visbilled('1', 'billed0123.jpg', 'olie boreplatform og raffinaderi', false, true).'
Benzin er den væske man fylder i benzintanken på en benzindrevet scooter.

Benzin består af kulbrinte som sammensat af kulstof og brint.
Der tilføjges additiver til benzinen for at give den forskellige egenskaber.
For eksempel tilføjes additiver for at øge benzinens oktantal.
Fra Juli 2010 bliver der tilføjet 5% bioethanol til den benzin der sælges i danmark.

Benzin fordamper meget let.

Benzin brænder kun på overfladen hvor det har kontakt med luft.
Derfor gælder det om at forstøve benzinen mest mulighed i luften for at få en god og komplet forbrænding i forbrændingskammeret.
'

,'
hvor kommer benzin fra ?
' => '
Benzin er en del af råolie.

Råolie kommer for eksempel fra en boreplatform som bore dybe huller i jorden.
Råolie fra undergrunden kan stamme fra små dyr og planter som kaldes plankton som har været døde i måske mange millioner år.
Plankton omfatter blandt andet gopler, tang, rejer, tanglopper, amøber og blågrønalger.
Plankton har så ligger nede i jorden under højt tryk og temperatur og er endt med at blive til råolie.

Råolien bliver sendt gennem et rør til et olie raffinaderi inde på land eller med et tankskib og her deler man råolien op til forskellige stoffer ved at varme den op.
Denne opvarmningsproces kaldes destillation.
Et af stofferne som udtages fra råolien ved destillation er benzin.
Andre stoffer er naturgas, diesel, olie, asfalt, petroleum og jet fuel.

I danmark har vi 2 olieraffinaderier.
Shell i Fredericia og Statoil i Kalundborg.
'

,'
oktan
' => '
Benzinens oktan tal er et udtryk for højt tryk benzinen kan tåle før den selvantænder.

For at undgå tændingsbanken skal benzinen have et passende højt oktantal.
Jo højere kompression motoren bruger, jo højere oktantal skal benzinen have for at undgå tændingsbanken.

Når oktantallet øges så øges temperaturen for hvornår benzinen selvantænder.
Hvis oktantallet er for lavt kan benzin/luft blandingen selvantænde før tændrøret giver gnist og det kan på længere sigt give motorskade.

'.afsnit('hvilken oktan skal jeg tanke ?','
Der står i scooterens manual hvilken oktan den skal have.
Det oktan tal der er angivet i manualen er det oktan tal man minimum skal tanke.
Man kan godt bruge et højere oktan tal det sker der ikke noget ved. Benzinen er bare dyrere.

Der sker altså ikke noget ved at tanke 95 oktan på en scooter som der står skal have 92 oktan.

Men det skulle ikke være godt at tanke 92 oktan i en scooter hvor der står at den skal have 95 oktan.
').'

I danmark kan man typisk købe benzin med 92 eller 95 oktan.
98 oktan kan fås på et mindre antal tankstationer.
Nogle benzinselskaber sælger deres eget mærke med for eksempel 99 oktan.
Oktantallet har ikke noget med procent at gøre så det kan godt ligge over 100.

Oktantallet på benzin opgives forskelligt i forskellige lande.

Det er fordi der bruges forskellige måder at måle oktantallet på.

I danmark bruger vi RON målemetoden til at vise oktantallet.
I canada bruger de RdON målemetoden.

RON står for Research Octane Number.
MON står for Motor Octane Number (MON er målt under højere omdrejninger).
RdON står for Road Octane Number (RdON er gennemsnittet af RON og MON).

AKI står for Anti Knock Index (det samme som RdON).
PON står for Pump Octane Number (det samme som RdON).

RON oktan 95 svarer til MON oktan 85.
RON oktan 95 svarer til RdON oktan 90-91.

I Aprilia manualer kan der stå følgende...
'.citat('
"Super DIN 51607 lead-free petrol, with a minimum octane rating of 95 (N.O.R.M.) and 85 (N.O.M.M.)."
').'
Her står N.O.R.M. for RON målemetoden.
Og N.O.M.M. står for MON målemetoden.

I dette tilfælde skal man i danmark bruge blyfri benzin på minimum 95 oktan.

'.afsnit('benzindæksel låg fra bil','
På dette låg fra en Seat bil står "91 RON MIN".
'.visbilled('1', 'billed1971.jpg', 'benzindæksel låg fra seat bil', false, true).'
Det betyder at man som minimum skal bruge 91 oktan. RON er den måle metode som oplyses på danske tankstationer. Og i danmark er den laveste oktan på tankstationerne 92.
Så her ville man skulle tanke 92 oktan.
').'

'

,'
additiver
' => '
Additiver er stoffer som tilsættes benzinen for at opnå forskellige egenskaber.
Man kan for eksempel tilsætte additiver for at opnå højere oktantal, rust beskyttelse eller mindre friktion.

Tetraethylbly og MTBE er additiver som blev/bliver tilsat benzinen for at øge oktantallet.

Man kan købe additiver og selv blande det i benzinen.
Det kan rense motoren for belægninger i forbrændingskammeret eller rense dyserne på motorer med brændstofindsprøjtning.
'

,'
bioethanol
' => '
Fra Juli 2010 bliver der tilføjet 5% bioethanol til alt den blyfri 92 og 95 oktan der bliver solgt på tankstationerne i danmark.

Det tilsættes for at nedsætte '.kemiskformel('CO2').' indholdet i udstødningsgasserne.

Benzin kan blandes med op til 10% ethanol og bruges i samme motor uden at der skulle opstå problemer.

Bioethanol er biologisk alkohol som kan laves af planter som hvede, majs, sukkerrør eller halm.
'

,'
ethanol og methanol
' => '
I Generic Onyx brugermanual står følgende.
'.citat('
Gasohol
There are two types of gasohol:
gasohol containing ethanol and that containing methanol.
Gasohol containing ethanol can be used if the ethanol content does not exceed 10%.
Gasohol containing methanol is not recommended by Generic because it can cause damage to the fuel system or vehicle performance problems.
').'
'

,'
alternativer til benzin
' => '
'.afsnit('LPG (Liquid Petroleum Gas)','
LPG kan fås på metal beholdere i forskellige størrelser som vi i danmark kender fra tankstationens orange gas flasker.

LPG kan bruges i en forbrændingsmotor i stedet for benzin.
LPG har et oktantal på 108.
LPG brænder meget rent og indeholder derfor ikke så mange skadelige udstødningsgasser i forhold til benzin.

'.visbilled('1', 'billed0124.jpg', 'LPG liquid petroleum gas flaske', false, true).'
'.visbilled('1', 'billed0819.jpg', 'LPG liquid petroleum gas i scooter', false, true).'
'.visbilled('1', 'billed0125.jpg', 'LPG liquid petroleum gas i scooter', false, true).'
'.visflash('0', "http://www.youtube.com/v/vO9FdgFRWaM", 'scooter som drives af LPG', true).'
').'
'

,'
benzinforbrug
' => '
Her er benzinforbruget for min Kymco Super 8 4T - 50 cm³ - 30 km/t.
Benzintanken rummer 5,5 liter.
<div id="benzinforbrugkodeholder"></div>
<script type="text/javascript">visforbrugtabel();</script>
'.noscript().'

'.afsnit('med og uden begrænsning i variator','
Med begrænset variator ligger benzinforbruget omkring 36 km/l.
Med ubegrænset variator ligger benzinforbruget omkring 46 km/l.

Se om du kan finde ud af hvornår i tabellen variatoren blev gjort ubegrænset og benzinforbruget blev lavere.
').'

'.afsnit('flere målinger efter scooteren er blevet lidt brugt','
Ved 12951,8 km tankede jeg 5,56 liter på tom tank
 og kørte til tom tank ved 13174,3 km. (40,01 km/liter)

Ved 13174,3 km tankede jeg 5,54 liter på tom tank
 og kørte til tom tank ved 13382,0 km. (37,49 km/liter)

Ved 13382,0 km tankede jeg 5,50 liter på tom tank
 og kørte til tom tank ved 13602,0 km. (40,00 km/liter)
').'
'

,'
kør længere på literen
' => '
'.afsnit('variator','
Hvis din scooter er begrænset i variatoren så bruger den mere benzin end hvis den var ubegrænset.
'.ahref('begrensninger.php#variator', 'Begrænsning i variator').'.
Min 30 km/t scooter kørte 36 km/l med begrænset variator og 46 km/l med ubegrænset variatoren. Hvilket er en forskel på cirka 20 %.
').'

'.afsnit('dæktryk','
Kør med korrekt dæktryk.
Lavt dæktryk giver større rullemodstand.
Se dæktrykket i scooterens manual eller på et klistermærke på scooteren og brug eventuelt '.ahref('omregn.php#dektryk', 'dæktryk omregner').' for at omregne mellem Kg/cm², PSI, Bar og Kpascal.
').'

'.afsnit('accelerationspumpe','
Slå accelerationspumpen på karburatoren fra ved at binde vipperarmen fast.
Accelerationspumpen giver et sprøjt benzin hver gang man har slipper gashåndtaget og drejer det igen.
'.visbilled('1', 'billed0483.jpg', 'karburator accelerator pumpe', false, true).'
Det kan muligvis give lidt problemer om vinteren når motoren er kold.
').'

'.afsnit('acceleration','
Undgå hurtig acceleration.
').'

'.afsnit('vægt','
Fjern unødig vægt fra scooteren.
Tøm hjelmrummet for unødvendige ting og afmonter dele som passager fodhvilere hvis de ikke bruges.
').'

'.afsnit('tændrør','
Jeg har læst at ved at skifte sit standard tændrør ud med et iridium tændrør ville man kunne køre længere på literen.
Jeg læste at man kunne køre 2 km længere per liter som skulle svare til 5 % længere.
Hvilket skulle svarer til at scooteren gik fra at køre 40 km/l til 42 km/l.
').'

'.afsnit('luftfilter','
Rens eller skift luftfilteret.
').'

'.afsnit('se frem i trafikken','
Når du ser rødt lys ved at kryds forude kan du slippe gassen inden du kommer derhen og undgå at skulle stoppe.
').'

'.afsnit('sluk motor','
Sluk motoren når du holder for rødt.
').'

'.afsnit('aerodynamik','
Jo mere strømlinet dig og din scooter er jo mindre vindmodstand er der.
Aerodynamik har større betydning betydning jo hurtigere man køre.
Så jo hurtigere man kører jo mere benzin vil man kunne spare ved at gøre sige mere strømlinet.
').'

'.afsnit('optimal hastighed','
Kører du tit den samme vej kan du finde en hastighed hvor det passer med lyskrydsene så du ikke skal holde for rødt så ofte.
').'
'

,'
benzin priser
' => '
Hvis vi siger at 1 liter benzin koster 10 kroner og vi køre 40 km/liter.
Så koster det 25 øre i benzin at køre 1 km.
10 kr / 40 km = 0,25 kr.
'
.galleriholder(array(
    galleri('link', 'http://www.fdmbenzinpriser.dk', 'www.fdmbenzinpriser.dk', 'FDM benzin priser', '', '', '', '')
))
.
'
'

,'
egne erfaringer
' => '
Med min scooter fulgte 2 manualer.
I den ene står der at jeg skal bruge blyfri oktan 92.
Og i den anden står der at jeg skal bruge blyfri oktan 95.
Jeg har ikke kunne mærke nogen forskel om jeg bruger oktan 92 eller 95 i min scooter.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
