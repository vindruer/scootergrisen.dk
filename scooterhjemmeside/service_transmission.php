<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "transmission - Service";
$overskrift = "transmission - Service";
$metadescription = "service af transmission på scooter";

$databasecenter = array(

'
kilerem
' => '
Mål kileremmen på det bredeste punkt.
'.visbilled('1', 'billed0755.jpg', 'kilerem tykkelse', false, true).'
Her måles en ny kilerem.
'.visbilled('1', 'billed1984.jpg', 'kilerem tykkelse', false, true).'
Her måles en brugt kilerem.
'.visbilled('1', 'billed1994.jpg', 'kilerem tykkelse', false, true).'
Jeg har målt min brugte kilerem til at være mellem 16,10 til 16,45 mm bred afhængigt af hvor man måler.

Sammenlign med data fra scooterens servicemanual.
Kileremmen på Kymco Super 8 skal minimum være 16,5 mm.
Er den smallere bør den udskiftes.

Undersøg også kileremmen for skader som revner.

Her ses en ny kilerem.
'.visbilled('1', 'billed1992.jpg', 'kilerem', false, true).'
Her ses en brugt kilerem som trænger til at blive skiftet ud.
'.visbilled('1', 'billed1993.jpg', 'kilerem', false, true).'

'.visbilled('1', 'billed1985.jpg', 'kilerem', false, true).'
'.visbilled('1', 'billed1986.jpg', 'kilerem', false, true).'
'.visflash('0', "http://www.youtube.com/watch?v=ml5jVRu5EiY", 'HaSse viser hvordan man skifter kilerem', true).'
'

,'
koblingsbelægning
' => '
Mål koblingsbelægnings tykkelsen.

Belægningen slides ikke lige meget over det hele.

Jeg vil mene man skal måle midt på belægningen.
'.visbilled('1', 'billed0757.jpg', 'kobling belægning tykkelse', false, true).'
Sammenlign med data fra scooterens servicemanual.
Koblingsbelægningen på Kymco Super 8 skal minimum være 1,5 mm.
Er en af belægningerne tyndere end minimum så bør alle koblingsbakkerne udskiftes.
Alle koblingsbakkerne bør udskiftes sammen så de er lige tykke.
'

,'
koblingsklokke
' => '
Mål den indre diameter på koblingsklokken.
'.visbilled('1', 'billed0764.jpg', 'koblingsklokken', false, true).'
Mål inden i koblingsklokken hvor slidet er og ikke ved kanten hvor der ikke har været noget slid.
'.visbilled('1', 'billed0857.jpg', 'koblingsklokken', false, true).'
Sammenlign med data fra scooterens servicemanual.
Koblingsklokken på Kymco Super 8 skal maksimalt være 107,5 mm.
Er koblingsklokkens indre diameter større bør den udskiftes.

Læg mærke til at koblingsklokken indre diameter slides større så de 107,5 mm er altså maksimum.
'

,'
koblingstrykfjeder
' => '
Mål koblingstrykfjederens længde i afslappet tilstand.
'.visbilled('1', 'billed0759.jpg', 'koblingtrykfjeder længde', false, true).'
Sammenlign med data fra scooterens servicemanual.
Koblingstrykfjederen på Kymco Super 8 skal minimum være 97 mm.
Er fjederen kortere bør den udskiftes.
'

,'
ruller
' => '
Mål rullerne på det smalleste sted.
'.visbilled('1', 'billed0756.jpg', 'rulle tykkelse', false, true).'

Her måles en ny rulle.
'.visbilled('1', 'billed1987.jpg', 'rulle tykkelse', false, true).'

Her måles en brugt rulle.
'.visbilled('1', 'billed1948.jpg', 'rulle tykkelse målt med skydelære', false, true).'
De brugte ruller her er målt til at være følgende på det smalleste punkt målt midt på rullerne:
15,79 mm.
15,82 mm.
15,96 mm.
15,97 mm.
15,99 mm.
16,00 mm.
Rullernes bredeste punkt er desuden målt til max 16.30 mm hvilket nok er deres mål fra ny.

Sammenlign med data fra scooterens servicemanual.
Rullerne på Kymco Super 8 skal minimum være 15,4 mm.
Er en af rullerne smallere end minimum bør alle rullerne udskiftes.

Hvis rullerne er slidte kan det være en god ide at udskifte dem selvom de ikke er slidt under minimum.
Slidte ruller giver lavere topfart og kan også give vibrationer.
'

,'
skift ruller
' => '
Fjern skruerne som holder variatordækslet.
'.visbilled('1', 'billed0550.jpg', 'cvt variator dæksel', false, true).'
'.ahref('transmission_forresteremskiver.php#fjern_motrikken_ved_de_forreste_remskiver', 'Fjern møtrikken ved de forreste remskiver').'
'.visbilled('1', 'billed0551.jpg', 'cvt variator variomatic', false, true).'
Fjern kileremmen.
'.visbilled('1', 'billed0553.jpg', 'cvt variator remskive kilerem', false, true).'
Tag fat med 2 fingre på bagsiden af den inderste remskive og tag den ud.

Vend remskiven og fjern pladen på bagsiden.
'.visbilled('1', 'billed0554.jpg', 'cvt variator remskive rulle skål ruller bøsning gliderør', false, true).'
Fjern de gamle ruller fra skålen.

Rengør skålen.

For at minimere slid på skålen skal rullerne vendes rigtigt.

Rullerne skal vendes så de lukkede ender på rullerne (den ende med mest plastik) vender modsat urets retning når de lægges ned i skålen.
'.visbilled('1', 'billed0547.jpg', 'cvt variator rulle monterings retning', false, true).'
'.visbilled('1', 'billed0555.jpg', 'cvt variator rulle monterings retning', false, true).'
'.visbilled('1', 'billed1999.jpg', 'variator rulle monterings retning', false, true).'
'.visbilled('1', 'billed0556.jpg', 'cvt variator rulle monterings retning', false, true).'
Saml det hele igen og spænd møtrikken til det moment som står i scooterens servicemanual hvis du har mulighed for at bruge en momentnøgle.

For eksempel cirka 5,5 til 6,5 kgf/m.
Hvis du ikke har nogen momentnøgle så må du gætte dig til hvor meget den skal spændes.
'

,'
rullefedt
' => '
Nogle ruller kan smøres med højtemperatur fedt.
Ved nogle ruller kan der følge fedt med rullerne.

Nogle ruller skal ikke smørres.
Jeg har også læst om selvsmørende ruller.

Hvis man bruger fedt på rullerne så skulle det være vigtigt at bruge samme mængde ved hver rulle da det ellers kan give vibrationer.
Bruger man fedt på rullerne vil det formodentligt blive slynget ud yderst i skålen også skal man måske ikke bruge fedt i de skåle som er åbne på bagsiden.
På nogen skåle sidder der en o ring på skålen og en bagplade som så kan holde på fedtet.

Jeg har læst at man ikke skal smørre rullerne men kun smøre banerne i skålen hvor rullerne glider.
'

,'
smørring
' => '
I Piaggio Fly 150 cm³ servicemanual står at man skal fylde 6-7 gram fedt ind gennem hullet indefra koblingsenheden indtil det kommer ud gennem hullet på den modsatte side.
Man kan muligvis bruge lithium fedt eller molybdenum disulphide fedt.
'.visbilled('1', 'billed2710.jpg', 'remskive fedt 6gr.', false, true).'
Her bruges en sprøjte med et bøjet rør på til at kunne sprøjte fedtet ind.
'.visbilled('1', 'billed3176.jpg', 'fedtindsprøjter', false, true).'
Ellers kan man smørre mellem o-ringene inden remskiverne samles.
'.visbilled('1', 'billed2807.jpg', 'remskive fedt', false, true).'
Når remskiverne så er samlet skal man tørre alt fedtet af udenfor o-ringene så det ikke kommer på remskiverne og kileremmen.

I Kymco Like 50/125 cm³ servicemanual står at man skal fylde 9-9,5 gram fedt ind som kan holde til 230 °Celsius.

Stifterne på koblingspladen kan renses og smørres meget lidt så bakkerne frit kan bevæge sig.
'.visbilled('1', 'billed2967.jpg', 'kobling', false, true).'
Når koblingen er samlet så tør alt det smørrelse af som du kan for eller vil det blive slynget ud i koblingsklokken.
'

,'
data
' => '
Kig i scooterens servicemanual for at finde ud af hvor meget de enkelte dele må være slidt før de bør udskiftes..

Her er data for Kymco Super 8 50 cm³.
'.
box(array('250', '150', '150')
   ,array(
       array('del',                             'standard (mm)',    'slid grænse (mm)')
      ,array('kilerem bredde',                  '17,5',             '16,5')
      ,array('koblingsbelægning tykkelse',      '',                 '1,5')
      ,array('koblingsklokke indre diameter',   '107,0-107,2',      '107,5')
      ,array('koblingstrykfjeder længde',       '',                 '97')
      ,array('ruller bredde',                   '15,920-16,080',    '15,4')
   )
)
.'
Her er data for Baotian BT49QT/BT50QT med BT139QMA/BT139QMB 50 cm³ motor.
'.
box(array('250', '150', '150')
   ,array(
       array('del',                             'standard (mm)',    'slid grænse (mm)')
      ,array('kilerem bredde',                  '18 ± 0,3',         '16')
      ,array('kilerem bredde (anden type)',     '17,5',             '16')
      ,array('koblingsbelægning tykkelse',      '',                 '2')
      ,array('koblingsklokke indre diameter',   '107-107,2',        '107,5')
      ,array('koblingstrykfjeder længde',       '',                 '')
      ,array('ruller bredde',                   '16 ± 0,08',        '15,5')
   )
)
.'
Her er data for PGO G-Max 50 cm³.
'.
box(array('250', '150', '150')
   ,array(
       array('del',                             'standard (mm)',    'slid grænse (mm)')
      ,array('kilerem bredde',                  '18,0 - 19,0',      '17')
      ,array('koblingsbelægning tykkelse',      '3',                '1,5 eller 2,5')
      ,array('koblingsklokke indre diameter',   '117,0 - 117,2',    '117,5')
      ,array('koblingstrykfjeder længde',       '87,9',             '82,5')
      ,array('ruller bredde',                   '15,992 - 16,008',  '15,50')
   )
)
.'
Her er data for Sym Orbit (AV05W-6) 50 cm³.
'.
box(array('250', '150', '150')
   ,array(
       array('del',                             'standard (mm)',    'slid grænse (mm)')
      ,array('kilerem bredde',                  '17,50',                '16,8')
      ,array('koblingsbelægning tykkelse',      '4,000',                '3,10 (andet sted i manual står 2,0)')
      ,array('koblingsklokke indre diameter',   '107,00 - 107,20',      '107,50 (andet sted i manual står 107,2)')
      ,array('koblingstrykfjeder længde',       '97,20',                '90 (andet sted i manual står 93,2)')
      ,array('ruller bredde',                   '15,920 - 16,080',      '15,570')
   )
)
.'
Brug en skydelære til at måle med.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
