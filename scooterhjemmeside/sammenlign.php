<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "sammenlign 2 takt, 4 takt og elektrisk";
$overskrift = "sammenlign 2 takt, 4 takt og elektrisk";
$metadescription = "generelle forskellige mellem scootere med 2 takt, 4 takt og elektrisk motor så man kan se fordele og ulemper";

$databasecenter = array(

'
sammenligning af scootere med 2 takt, 4 takt og elektrisk motor
' => '
Følgende forskelle gælder generelt for scootere.

'.
box(array('200', '150', '150', '150')
   ,array(
       array(''                        ,'2 takt'        ,'4 takt'          ,'elektrisk')
      ,array('benzin forbrug'          ,'højest'        ,'lavere'          ,'ingen')
      ,array('støj'                    ,'mest'          ,'mindre'          ,'lidt')
      ,array('forurening'              ,'mest'          ,'mindre'          ,'ingen')
      ,array('lugt gener'              ,'mest'          ,'mindre'          ,'ingen')
      ,array('påfyld/skift motorolie'  ,'lettere'       ,'besværligst'     ,'')
      ,array('skille motor ad'         ,'lettere'       ,'besværligst'     ,'')
      ,array('vedligeholdelse'         ,'lettere'       ,'besværligst'     ,'let')
      ,array('dele'                    ,'færre'         ,'flest'           ,'')
      ,array('acceleration'            ,'hurtig'        ,'langsomst'       ,'hurtigst')
      ,array('tændrør giver gnist'     ,'hver gang stemplet er i top'     ,'hver anden gang stemplet er i top'          ,'har ikke tændrør')
      ,array('motor moment'            ,'middel'        ,'lavest'          ,'højest')
   )
)
.'
Der findes 2 takt scootere med direkte indsprøjtning som kan køre lige så langt eller længere på literen som en 4 takt med karburator men de er ikke så udbredte.
Der findes også 2 takt scootere som ikke larmer så meget.
'

,'
fordele og ulemper ved elektriske scootere
' => '
Her følger nogle af de fordele og ulemper ved elektriske scootere i forhold til scootere med forbrændingsmotor.
'

,'
fordele ved elektriske scootere
' => '
'.listemedgrafik(array(
    'ingen udstødningsgasser'
   ,'mindre støj'
   ,'ingen tomgang'
   ,'motoren skal ikke varmes op'
   ,'mindre vibrationer'
   ,'på grund af færre dele er der mindre vedligeholdelse og udgifter hertil'
   ,'ingen benzinudgifter'
   ,'ingen udstødningsrør/lyddæmper'
   ,'ingen transmission (på modeller med nav motor)'
   ,'ingen gearolie (på nær modeller som Peugeot Scoot\'elec)'
   ,'ingen motorolie'
   ,'ingen CDI'
   ,'ingen tændspole'
   ,'ingen tændrør'
   ,'ingen benzinslanger og vakuumslanger'
   ,'ingen benzintank'
   ,'ingen benzinhane'
   ,'ingen karburator'
   ,'ingen automatisk choker'
   ,'ingen automatisk choker modstand'
   ,'ingen starter motor'
   ,'ingen starterrelæ'
   ,'ingen generator'
   ,'ingen pickup'
   ,'ingen lys modstand'
   ,'ingen gaskabel (Nogle få modeller har dog gaskabel. For eksempel Peugeot Scoot\'elec og EVT)'
)).'
'

,'
ulemper ved elektriske scootere
' => '
'.listemedgrafik(array(
    'lang opladningstid (for eksempel 4-8 timer)'
   ,'kort rækkevidde (for eksempel 40-50 km per opladning)'
   ,'kortere rækkevidde om vinteren'
   ,'rækkevidden bliver kortere og kortere jo mere brugte batterierne bliver'
   ,'mangel på tilgængelige stikkontakter så man kan oplade sin scooter i det hele taget'
   ,'kan være svært at oplade hvis man for eksempel bor i lejlighed'
   ,'kan være langsom op af bakke'
   ,'batterierne kan optage meget plads'
   ,'batterier af bly-syre typen kan være ret tunge (for eksempel 50-60 kg)'
   ,'batterierne er dyre (kan for eksempel koste halvdelen af scooterens ny pris)'
   ,'batterierne skal udskiftes efter noget tid (måske 2 år)'
   ,'der er nok ikke så mange der har erfaring med elektriske scootere så der kan muligvis være langt til nærmeste værksted'
   ,'der er ikke så mange der forhandler elektriske scootere og reservedele til dem'
)).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
