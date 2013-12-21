<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "skift menu sprog";
$overskrift = "skift menu sprog";
$metadescription = "vælg hvilket sprog menuen skal vises med";

   $language_en_uk         = $GLOBALS['setup']['domainogdatamappe'] . '/php/language.php?language=en-UK';
   $language_da_dk         = $GLOBALS['setup']['domainogdatamappe'] . '/php/language.php?language=da-DK';
   $language_da_automatisk = $GLOBALS['setup']['domainogdatamappe'] . '/php/language.php?language=';

$databasecenter = array(

'
vælg sprog
' => '
<!--ignore-->
'.my_mb_ucfirst($GLOBALS['setup']['l_changelanguage']).'
 : 
<span class="skiftmenusprog" style="white-space: nowrap;">
'.lidtplads('vandret', true).'
'.ahref($language_en_uk, visbilled('2', 'ikoner/united_kingdom_great_britain.png', $GLOBALS['setup']['l_flag_english'], '', null, null, 'class="ikon16x16"', null, '16', '16')).'
'.lidtplads('vandret', true).'
'.ahref($language_da_dk, visbilled('2', 'ikoner/denmark.png', $GLOBALS['setup']['l_flag_dansk'], '', null, null, 'class="ikon16x16"', null, '16', '16')).'
'.lidtplads('vandret', true).'
'.ahref(
 $language_da_automatisk
 ,my_mb_ucfirst($GLOBALS['setup']['l_changelanguage_automatic'])
 ,'title="' . my_mb_ucfirst($GLOBALS['setup']['l_changelanguage_automatic_description']) . '"'
).'
</span>

'.lidtplads('vandret', true).'
<span style="color: rgba(0, 0, 0, 0.5); margin: 0 .5em;">|</span>
'.lidtplads('vandret', true).'
<span style="white-space: nowrap;">
'.my_mb_ucfirst($GLOBALS['setup']['l_changelanguage_current']).'
 : 
'.$GLOBALS['setup']['languageinuse'].'
</span>
<!--ignore-->
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
