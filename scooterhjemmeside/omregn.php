<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "omregn og udregn";
$overskrift = "omregn og udregn";
$metadescription = "tilspændingsmoment, dæktryk, benzinforbrug, slagvolume, forbrændingskammer volume, kompressionsforhold, effekt, hastighed, konverterings tabeller, enheder og forkortelser";

$GLOBALS['setup']['head'] = '
<style type="text/css">

.formomregnerinfo {
   margin-left: auto;
   margin-right: auto;
   text-align: center;
}

.omregnudregnresultat {
   border-bottom: 3px double #888;
}

</style>
';

function musover($id, $funktion, $ting, $data){

   $indhold = '';

   $id = 'mus_' . $id;

   $indhold .= '<span id="' . $id . '" style="display: none;">';
   $indhold .= $data;
   $indhold .= '</span>';

   $indhold .= '<span';
   $indhold .= ' onmouseover="' . $funktion . '(\'' . $id . '\');"';
   $indhold .= ' onmouseout="UnTip();">';
   $indhold .= $ting;
   $indhold .= '</span>';

   return $indhold;

}

$GLOBALS['setup']['body'] = '
<script type="text/javascript" src="/' . $GLOBALS['setup']['datamappe'] . '/javascript/tooltip.js"></script>
'.noscript().'
<script type="text/javascript" src="/' . $GLOBALS['setup']['datamappe'] . '/javascript/omregnudregn1.js"></script>
'.noscript().'
';

$databasecenter = array(

'
introduktion
' => '
Her på siden kan du omregne for eksempel dæktryk fra PSI til bar eller tilspændingsmoment fra lb-ft til Nm.

Ved tilspændingsmoment opgives for eksempel "kgf m" eller "kg m". Begge enheder betyder det samme. F\'et er bare for at understrege at der er tale om en kraft og ikke en vægt.
'

,'
tilspændingsmoment
' => ''
. formbox('1', '', 'omregn tilspændingsmoment mellem Nm, Kg-m og Lb-ft', '#', 'get', '', ''
   . input('1', 'number', 'dataind', '', '16', 'Indtast tilspændingsmoment', 'moment_dataind', '', 'onkeyup="konverter(this.form, \'moment\');" onchange="konverter(this.form, \'moment\');" onkeypress="return disableEnterKey(event);"', '', '6', '')
   . input('1', 'select', 'fraogtil', 
       '<option value="nmtilkgm" selected="selected">Nm ---&gt; Kg-m</option>'
      .'<option value="nmtillbft"                   >Nm ---&gt; Lb-ft</option>'
      .'<option value="kgmtilnm"                    >Kg-m -&gt; Nm</option>'
      .'<option value="kgmtillbft"                  >Kg-m -&gt; Lb-ft</option>'
      .'<option value="lbfttilnm"                   >Lb-ft &gt; Nm</option>'
      .'<option value="lbfttilkgm"                  >Lb-ft &gt; Kg-m</option>'
      , '6', 'Vælg fra og til enheder', 'fratil_moment', '', 'onchange="konverter(this.form, \'moment\');" onkeypress="return disableEnterKey(event);"', '', '', '')
   . input('1', 'text', 'dataud', '', '16', 'Resultat', 'moment_dataud', 'omregnudregnresultat', '', '', '', 'readonly')
)
. '<div class="formomregnerinfo">' . musover('a', 'TagToTip', visbilled('2', 'ikoner/info.png', 'hold markør her for info'), 'Nm = Newton Meter<br>Kg-m = Kilo Gram kraft per Meter<br>Lb-ft = Pund kraft per fod<br><br>Kg-m og Kgf-m og m-kg er det samme<br>Lb-ft og Lbf-ft og ft-lb er det samme') . '</div>'

,'
dæktryk
' => ''  
. formbox('1', '', 'omregn dæktryk mellem kg/cm², psi, bar og kpascal', '#', 'get', '', ''
   . input('1', 'number', 'dataind', '', '18', 'Indtast dæktryk', 'daktryk_dataind', '', 'onkeyup="konverter(this.form, \'daktryk\');" onchange="konverter(this.form, \'daktryk\');" onkeypress="return disableEnterKey(event);"', '', '6', '')
   . input('1', 'select', 'fraogtil', 
       '<option value="kgcm2tilpsi" selected="selected">Kg/cm² -&gt; PSI</option>'
      .'<option value="kgcm2tilbar"          >Kg/cm² -&gt; Bar</option>'
      .'<option value="kgcm2tilkpascal"      >Kg/cm² -&gt; Kpascal</option>'
      .'<option value="psitilkgcm2"          >PSI ----&gt; Kg/cm²</option>'
      .'<option value="psitilbar"            >PSI ----&gt; Bar</option>'
      .'<option value="psitilkpascal"        >PSI ----&gt; Kpascal</option>'
      .'<option value="bartilkgcm2"          >Bar ----&gt; Kg/cm²</option>'
      .'<option value="bartilpsi"            >Bar ----&gt; PSI</option>'
      .'<option value="bartilkpascal"        >Bar ----&gt; Kpascal</option>'
      .'<option value="kpascaltilkgcm2"      >Kpascal &gt; Kg/cm²</option>'
      .'<option value="kpascaltilpsi"        >Kpascal &gt; PSI</option>'
      .'<option value="kpascaltilbar"        >Kpascal &gt; Bar</option>'
      , '12', 'Vælg fra og til enheder', 'fratil_daktryk', '', 'onchange="konverter(this.form, \'daktryk\');" onkeypress="return disableEnterKey(event);"', '', '', '')
   . input('1', 'text', 'dataud', '', '18', 'Resultat', 'daktryk_dataud', 'omregnudregnresultat', '', '', '', 'readonly')
)
. '<div class="formomregnerinfo">' . musover('b', 'TagToTip', visbilled('2', 'ikoner/info.png', 'hold markør her for info'), 'Kg/cm² = kilogram per kvadrat centimeter<br>PSI = pounds per square inch (pund per kvadrat tomme)<br>1 Bar = gennemsnits trykket ved havoverfladen<br>Kpascal = Kilo pascal<br><br>PSI er det samme som Lb/in2<br>Lb/in2 = libra per square inch (pund per kvadrat tomme)') . '</div>'

,'
benzinforbrug
' => ''
. formbox('1', '', 'omregn benzinforbrug mellem km/l og mpg', '#', 'get', '', ''
   . input('1', 'number', 'dataind', '', '25', 'Indtast KM/L eller MPG', 'benzin_dataind', '', 'onkeyup="omregn_benzinforbrug(this.form);" onchange="omregn_benzinforbrug(this.form);" onkeypress="return disableEnterKey(event);"', '', '6')
   . input('1', 'select', 'fraogtil', 
       '<option value="mpgimptilmpgus" selected="selected">mpg (imperial) ----&gt; mpg (us)</option>'
      .'<option value="mpgimptilkml"                      >mpg (imperial) ----&gt; Km/l</option>'
      .'<option value="mpgimptill100km"                   >mpg (imperial) ----&gt; L/100 km</option>'

      .'<option value="mpgustilmpgimp"                    >mpg (us) ----------&gt; mpg (imperial)</option>'
      .'<option value="mpgustilkml"                       >mpg (us) ----------&gt; Km/l</option>'
      .'<option value="mpgustill100km"                    >mpg (us) ----------&gt; L/100 km</option>'

      .'<option value="kmltilmpgimp"                      >Km/l --------------&gt; mpg (imperial)</option>'
      .'<option value="kmltilmpgus"                       >Km/l --------------&gt; mpg (us)</option>'
      .'<option value="kmltill100km"                      >Km/l --------------&gt; L/100 km</option>'

      .'<option value="l100kmtilmpgimp"                   >L/100 km ----------&gt; mpg (imperial)</option>'
      .'<option value="l100kmtilmpgus"                    >L/100 km ----------&gt; mpg (us)</option>'
      .'<option value="l100kmtilkml"                      >L/100 km ----------&gt; Km/l</option>'

   , '12', 'Vælg fra og til enheder', 'fratil_benzinforbrug', '', 'onchange="omregn_benzinforbrug(this.form);" onkeypress="return disableEnterKey(event);"', '', '', '')
   . lidtplads('lodret')
   . input('1', 'text', 'dataud_resultat1', '', '25', 'Resultat', 'benzin_dataud1', 'omregnudregnresultat', '', '', '', 'readonly')
)
. '<div class="formomregnerinfo">' . musover('c', 'TagToTip', visbilled('2', 'ikoner/info.png', 'hold markør her for info'), 'mpg = Miles Per Gallon<br>Km/l = Kilo Meter per Liter<br><br>gpm = Gallons Per Mile<br>l/km = Liter per Kilo Meter<br>L/100 km = Liter per 100 Kilo Meter<br><br>Imperial gallons bruges blandt andet i england<br>Us gallons bruges blandet andet i usa') . '</div>'

,'
slagvolume
' => ''
. formbox('1', '', 'udregn motorens slagvolume', '#', 'get', '', ''
   . input('1', 'number', 'dataind_boring', '', '16', 'indtast diameter/boring (mm)', 'slagvolume_dataind1', '', 'onkeyup="udregn_volume(this.form);" onchange="udregn_volume(this.form);" onkeypress="return disableEnterKey(event);"', '', '6', '')
   . input('1', 'number', 'dataind_slaglengde', '', '16', 'indtast højde/slaglængde (mm)', 'slagvolume_dataind2', '', 'onkeyup="udregn_volume(this.form);" onchange="udregn_volume(this.form);" onkeypress="return disableEnterKey(event);"', '', '6', '')
   . input('1', 'text', 'dataud_volume', '', '16', 'resultat (slagvolume i cm³)', 'slagvolume_dataud1', 'omregnudregnresultat', '', '', '6', 'readonly')
)
. '<div class="formomregnerinfo">' . musover('d', 'TagToTip', visbilled('2', 'ikoner/info.png', 'hold markør her for info'), 'Boring = Cylinderens indre diameter. Målt fra væg til væg<br>Slaglængde = Den længde som stemplet bevæger sig fra det højeste punkt til det laveste punkt<br>mm = Milimeter<br>cm³ = kubik centimeter') . '</div>'
. '
Slagvolume = (cylinder diameter i cm i anden x PI) / 4 x slaglængde i cm.
'.visbilled('1', 'billed2175.jpg', 'cylinder volume', false, true).'
'

,'
forbrændingskammer volume
' => ''
. formbox('1', '', 'udregn motorens forbrændingskammer volume', '#', 'get', '', ''
   . input('1', 'number', 'forb_dataind_slagvolume', '', '16', 'indtast slagvolume (cm³)', 'forb_slagvolume_dataind1', '', 'onkeyup="udregn_forbvolume(this.form);" onchange="udregn_forbvolume(this.form);" onkeypress="return disableEnterKey(event);"', '', '6', '')
   . input('1', 'number', 'forb_dataind_kompression', '', '16', 'indtast kompression', 'forb_kompression_dataind2', '', 'onkeyup="udregn_forbvolume(this.form);" onchange="udregn_forbvolume(this.form);" onkeypress="return disableEnterKey(event);"', '', '6', '')
   . input('1', 'text', 'forb_dataud_forbvolume', '', '16', 'resultat (forbrændingskammer volume i cm³)', 'forb_forbvolume_dataud1', 'omregnudregnresultat', '', '', '6', 'readonly')
)
. '<div class="formomregnerinfo">' . musover('e', 'TagToTip', visbilled('2', 'ikoner/info.png', 'hold markør her for info'), 'Slagvolume = Området i cylinderen over stemplet fra TDC til BDC (uden forbrændingskammer volume)<br>Kompression = Det kompressionsforhold som indholdet i cylinderen presses sammen af stemplet') . '</div>'
. '
Forbrændingskammer volumen = slagvolume / (kompression - 1).
'.visbilled('1', 'billed0155.jpg', 'cylinder volume', false, true).'

Kymco Super 8 4T har en motor volume på 49,5 cm³ og et kompressionsforhold på 11:1.
49,5 cm³ / (11 - 1) = 4,95 cm³.
Forbrændingskammeret har altså en volume på 4,95 cm³.

Apollo 30 har en motor volume på 49,5 og et kompressionsforhold på 8:1.
49,5 cm³ / (8 - 1) = 7,07 cm³.
Forbrændingskammeret har altså en volume på 7,07 cm³.

Yamaha Giggle har en motor volume på 49 cm³ og et kompressionsforhold på 12:1.
49 cm³ / (12 - 1) = 4,45 cm³.
Forbrændingskammeret har altså en volume på 4,45 cm³.
'

,'
kompressionsforhold
' => ''
. formbox('1', '', 'udregn motorens kompressionsforhold', '#', 'get', '', ''
   . input('1', 'number', 'kompression_dataind_slagvolume', '', '16', 'indtast slagvolume (cm³)', 'kompression_slagvolume_dataind2', '', 'onkeyup="udregn_kompression(this.form);" onchange="udregn_kompression(this.form);" onkeypress="return disableEnterKey(event);"', '', '6', '')
   . input('1', 'number', 'kompression_dataind_forbvolume', '', '16', 'indtast forbrændingskammer volume (cm³)', 'kompression_forbvolume_dataind1', '', 'onkeyup="udregn_kompression(this.form);" onchange="udregn_kompression(this.form);" onkeypress="return disableEnterKey(event);"', '', '6', '')
   . input('1', 'text', 'kompression_dataud_kompression', '', '16', 'resultat (kompressionsforhold)', 'kompression_kompression_dataud1', 'omregnudregnresultat', '', '', '6', 'readonly')
)
. '<div class="formomregnerinfo">' . musover('f', 'TagToTip', visbilled('2', 'ikoner/info.png', 'hold markør her for info'), 'Slagvolume = Området i cylinderen over stemplet fra TDC til BDC (uden forbrændingskammer volume)<br>Forbrændingskammer volume = Området over stemplet når det er øverst i cylinderen (TDC)') . '</div>'
. '
Kompression = (forbrændingskammer volume + slagvolume) / forbrændingskammer volume.
'

,'
effekt
' => ''
. formbox('1', '', 'omregn effekt mellem Kw (Kilo Watt) og Hk (Heste Kræfter)', '#', 'get', '', ''
   . input('1', 'number', 'dataind', '', '16', 'Indtast værdi', 'effekt_dataind', '', 'onkeyup="konverter(this.form, \'effekt\');" onchange="konverter(this.form, \'effekt\');" onkeypress="return disableEnterKey(event);"', '', '6', '')
   . input('1', 'select', 'fraogtil', 
       '<option value="kwtilhkmet" selected="selected">Kw -------------&gt; Hk (metric)</option>'
      .'<option value="kwtilhkmec"                    >Kw -------------&gt; Hk (mechanical)</option>'
      .'<option value="hkmettilkw"                    >Hk (metric) ----&gt; Kw</option>'
      .'<option value="hkmectilkw"                    >Hk (mechanical) &gt; Kw</option>'
      , '4', 'Vælg fra og til enheder', 'fratil_effekt', '', 'onchange="konverter(this.form, \'effekt\');" onkeypress="return disableEnterKey(event);"', '', '', '')
   . input('1', 'text', 'dataud', '', '16', 'Resultat', 'effekt_dataud', 'omregnudregnresultat', '', '', '', 'readonly')
)
. '<div class="formomregnerinfo">' . musover('g', 'TagToTip', visbilled('2', 'ikoner/info.png', 'hold markør her for info'), 'Kw = Kilo Watt = 1000 Watt<br>Hk = Heste Kræfter<br>Metric Hk bruges vist nok mest i europa<br>Mechanical Hk bruges vist nok mest i england og usa') . '</div>'

,'
hastighed
' => ''
. formbox('1', '', 'omregn hastighed mellem Km/t (Kilo Meter / Time) og mph (Miles Per Hour)', '#', 'get', '', ''
   . input('1', 'number', 'dataind', '', '16', 'Indtast værdi', 'hastighed_dataind', '', 'onkeyup="konverter(this.form, \'hastighed\');" onchange="konverter(this.form, \'hastighed\');" onkeypress="return disableEnterKey(event);"', '', '6', '')
   . input('1', 'select', 'fraogtil', 
       '<option value="kmttilmph" selected="selected">Km/t &gt; mph</option>'
      .'<option value="mphtilkmt"                    >mph -&gt; Km/t</option>'
      , '2', 'Vælg fra og til enheder', 'fratil_hastighed', '', 'onchange="konverter(this.form, \'hastighed\');" onkeypress="return disableEnterKey(event);"', '', '', '')
   . input('1', 'text', 'dataud', '', '16', 'Resultat', 'hastighed_dataud', 'omregnudregnresultat', '', '', '', 'readonly')
)
. '<div class="formomregnerinfo">' . musover('h', 'TagToTip', visbilled('2', 'ikoner/info.png', 'hold markør her for info'), 'Km/t = Kilo Meter per Time<br>mph = Miles Per Hour = Mil Per Time') . '</div>'

,'
konverterings tabeller
' => ''

. box(array('140', '30', '140', '30', '140')
   ,array(
       array('kraft')
      ,array('kgf, kg',   '*', '9,81',     '=', 'n')
      ,array('lbf, lb',   '*', '4,448',    '=', 'n')
      ,array('n',         '*', '0,225',    '=', 'lbf ,lb')
   )
)

. box(array('140', '30', '140', '30', '140')
   ,array(
       array('moment af kraft (tilspændingsmoment)')
      ,array('lbf ft, lb ft',     '*', '1,356',    '=', 'nm')
      ,array('lbf ft, lb ft',     '*', '0,138',    '=', 'kgf m')
      ,array('lbf ft, lb ft',     '*', '12',       '=', 'lbf in, lb in')
      ,array('nm',                '*', '0,102',    '=', 'kgf m')
      ,array('nm',                '*', '8,85',     '=', 'lbf in')
      ,array('nm',                '*', '0,738',    '=', 'lbf ft')
      ,array('kgf m, kg m, m kg', '*', '9,804',    '=', 'nm')
      ,array('kgf m, kg m, m kg', '*', '7,233',    '=', 'lbf ft, lb ft, ft lb')
      ,array('kgf m, kg m, m kg', '*', '86,794',   '=', 'lbf in, lb in, in lb')
   )
)

. box(array('140', '30', '140', '30', '140')
   ,array(
       array('vægt')
      ,array('kg',        '*', '2,205',    '=', 'lb')
      ,array('g',         '*', '0,03527',  '=', 'oz')
      ,array('pounds',    '*', '0,454',    '=', 'kg')
   )
)

. box(array('140', '30', '140', '30', '140')
   ,array(
       array('hastighed')
      ,array('km/t',      '*', '0,6214',   '=', 'mph')
      ,array('mph',       '*', '1,609',    '=', 'km/t')
   )
)

. box(array('140', '30', '140', '30', '140')
   ,array(
       array('længde')
      ,array('km',        '*', '0,6214',   '=', 'miles')
      ,array('m',         '*', '3,281',    '=', 'feet')
      ,array('m',         '*', '1,094',    '=', 'yards')
      ,array('cm',        '*', '0,3937',   '=', 'inches')
      ,array('mm',        '*', '0,03937',  '=', 'inches')
      ,array('inches',    '*', '25,4',     '=', 'mm')
      ,array('feet',      '*', '0,305',    '=', 'm')
      ,array('miles',     '*', '1,609',    '=', 'km')
   )
)

. box(array('140', '30', '140', '30', '140')
   ,array(
       array('volume')
      ,array('cm³',       '*', '0,06102',  '=', 'in³')
      ,array('liter',     '*', '0,8799',   '=', 'imp quarts (qt)')
      ,array('liter',     '*', '0,2199',   '=', 'imp gal')
      ,array('in³',       '*', '16,387',   '=', 'cm³')
      ,array('imp gal',   '*', '4,546',    '=', 'liter')
      ,array('us gal',    '*', '3,785',    '=', 'liter')
      ,array('imp gal',   '*', '1,201',    '=', 'us gal')
      ,array('us gal',    '*', '0,833',    '=', 'imp gal')
   )
)

. box(array('140', '30', '140', '30', '140')
   ,array(
       array('brændstof forbrug')
      ,array('km/l',      '*', '2,825',    '=', 'mpg (imp)')
      ,array('km/l',      '*', '2,352',    '=', 'mpg (us)')
      ,array('mpg (imp)', '*', '0,354',    '=', 'km/l')
      ,array('mpg (us)',  '*', '0,425',    '=', 'km/l')
   )
)

. box(array('140', '30', '140', '30', '140')
   ,array(
       array('diverse')
      ,array('kg/mm',     '*', '55,997',   '=', 'lb/in')
      ,array('kg/cm²',    '*', '14,2234',  '=', 'psi, lb/in²')
   )
)

. box(array('140', '30', '140', '30', '140')
   ,array(
       array('temperatur')
      ,array('°C',        '', '(°C * 1,8) + 32',    '=', '°F')
      ,array('°F',        '', '(°F - 32) * 0,56',   '=', '°C')
   )
)


,'
enheder og forkortelser
' => ''
. box(array('170', '170', '170')
   ,array(
       array('kraft')
      ,array('n',       'newton',  '')
      ,array('lbf, lb', 'pounds force',  'pund kraft')
   )
)

. box(array('170', '170', '170')
   ,array(
       array('moment af kraft (tilspændingsmoment)')
      ,array('lbf in, in lb',        'pounds force inches',  'pund kraft per tommer')
      ,array('lbf ft, lb ft, ft lb', 'pounds force feet',    'pund karft per fod')
      ,array('nm',      'newton meter',    '')
      ,array('kgf m, kg m, m kg',    'kilo gram force meter',    'kilo gram kraft per meter')
   )
)

. box(array('170', '170', '170')
   ,array(
       array('vægt')
      ,array('oz',      'ounces',  '')
      ,array('lb',      'pounds (libra)',  'pund')
   )
)

. box(array('170', '170', '170')
   ,array(
       array('hastighed')
      ,array('km/t',    '',  'kilo meter per time')
      ,array('mph',     'miles per hour',  'mil per time')
   )
)

. box(array('170', '170', '170')
   ,array(
       array('længde')
      ,array('ft',      'feet',  'fod')
      ,array('in',      'inches',  'tommer')
   )
)

. box(array('170', '170', '170')
   ,array(
       array('volume')
      ,array('in²',     'square inches',  'kvadrat tommer')
      ,array('in³',     'cubic inches',  'kubik tommer')
      ,array('cc, ccm, cm³',         'cubic centimeter',  'kubik centimeter')
      ,array('gallon (imp)',         'imperial gallon',  'bruges blandet andet i england')
      ,array('gallon (us)',          'us gallon',  'bruges blandt andet i usa')
   )
)

. box(array('170', '170', '170')
   ,array(
       array('tryk')
      ,array('kg/cm²',  '', 'kilo gram per kvadrat centimeter')
      ,array('psi, lb/in²',          'pounds per square inch', 'pund per kvadrat tommer')
      ,array('bar',     '',  '1 bar = gennemsnits tryk ved havoverfladen')
      ,array('kPa',     '', 'kilo pascal')
      ,array('mbar',    '', 'milli bar')
   )
)

. box(array('170', '170', '170')
   ,array(
       array('effekt')
      ,array('w',       'watt',  '')
      ,array('hp',      'horsepower',  'hestekræfter')
   )
)

. box(array('170', '170', '170')
   ,array(
       array('diverse')
      ,array('°C',      'degree celsius',  '°Celsius')
      ,array('°F',      'degree fahrenheit',  '°Fahrenheit')
   )
)

);



$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
