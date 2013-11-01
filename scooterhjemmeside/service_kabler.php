<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "kabler - Service";
$overskrift = "kabler - Service";
$metadescription = "service af kabler på scooter som gaskabel og speedometerkabel";

$databasecenter = array(

'
juster gaskabel
' => '
Gashåndtaget skal have lidt spillerum så man er sikker på at gaskablet er helt slapt når gashåndtaget er sluppet.

Find gashåndtagets spillerum i scooterens manual.
Spillerummet kan for eksempel være 2-6 mm.

Det betyder at gashåndtaget skal kunne drejes 2-6 mm før gaskablet er stram nok til at karburatorens gasspjæld bevæger sig og motorens omdrejninger øges.

Du kan lave et mærke på gashåndtaget og sætte et stykke tape på styret hvor du kan 
'.visbilled('1', 'billed1248.jpg', 'gashåndtag', false, true).'

Gaskablet justeres 2 steder.

Først justeres gaskablet ved karburatoren så man får en grov justering.
Drej lidt på gashåndtaget under justeringen for at få se spillerummet.
'.visbilled('1', 'billed0615.jpg', 'CV karburator', false, true).'

Derefter fin justeres spillerummet under gashåndtager samtidig med man drejer på gashåndtaget for at få det ønskede spillerum.
'.visbilled('1', 'billed0616.jpg', 'justering af gaskabel ved gashåndtag', false, true).'
'

,'
smør kabler
' => '
Her følger nogle forskellige måder at smøre kabler på.

Som smørremiddel kan bruges smørreolier med '.ahref('smorelse.php#ptfe_og_teflon', 'PTFE/Silikone').'.

'.afsnit('kabelsmørre','
Her ses en kabelsmørre som bruges sammen med et smørremiddel på trykdåse der har et rør på.
'.visbilled('1', 'billed0341.jpg', 'kabelsmørre og trykdåse med strå', false, true).'
Kabelenden placeres i kabelsmørren og strammes fast med skruen.

Røret fra trykdåsen stikkes i hullet på siden af kabelsmørren.

Så trykker man helt ned på trykdåsen og holde trykket i noget tid så trykket fra trykdåsen kan presse smørremidlet hele vejen igennem kablet.

Når smørremidlet kommer ud af den anden ende af kablet så er det smurt.

Det hjælper ikke er trykke lidt og give slip og trykke lidt igen osv for det er trykket fra dåsen som skal presse smørremidlet igennem kablet så det gælder op at holde det tryk indtil hele kablet er smurt.

Der er meget spild af smørremidlet så hold sugende papir tæt omkring kabelsmørren og brug gummihandsker.
'.visflash('0', "http://www.youtube.com/watch?v=TFMVlQRrBDE", '', true).'
'.afsnit('smørring af gaskabel med kabelsmørre','
'.visbilled('1', 'billed2861.jpg', 'kabelsmørre', false, true).'
'.visbilled('1', 'billed2860.jpg', 'kabelsmørre', false, true).'
Spænd møtrikken fast i kabelsmørren som det ses her og brug trykdåsen til at smørre kablet.
'.visbilled('1', 'billed2858.jpg', 'kabelsmørre', false, true).'
Og vupti. Smørremidlet kommer ud i den anden ende. Både før og efter det bøjede rør.
'.visbilled('1', 'billed2859.jpg', 'kabelsmørre', false, true).'
').'
').'

'.afsnit('hjemmelavet','
Klip et lille hul i hjørnet af en gennemsigtig plastikpose og tape den fast på enden af kablet.
Hæld det ønskede smørelse i posen.
Hiv op og ned i wiren for at få smørelsen ind i kablet.
Hold eventuelt posen lukket i enden og pres på posen for at få smørelsen ind i kablet.
Kablet er smurt når smørelsen kommer ud af den anden ende af kablet hvilket godt kan tage sin tid.
'.visbilled('1', 'billed0336.jpg', 'Smør kabler', false, true).'
').'

'.afsnit('tryksmører','
Hvis man skulle være så heldig og få fat i en tryksmører så kan man presse smørelsen ind.
'.visbilled('1', 'billed0346.jpg', 'tryksmører', false, true).'
Jeg ved ikke hvor man kan få sådan en tryksmører men det virker smart.
').'
'

,'
knækket speedometer wire
' => '
Speedometer kablet er det kabel som bevæger sig mest og hurtigst.

Speedometer wiren på min scooter knak efter bare 3500 km.
'.visbilled('1', 'billed0146.jpg', 'knækket speedometer wire', false, true).'
Jeg har en ide om at det kan skyldes vand i kablet eller også er det bare dårlig kvalitet.

Gummibeskytteren som sidder på enden af kablet ved forhjulet har virket som en regnvands opsamler og et lille hul har tilladt vandet at komme ind til wiren som dermed har fortyndet olien derinde og har gjort at wiren har kommet tættere på indersiden af kablet og ved 60 km/t knak det så en dag.

Afmonter speedometer kablet ved forhjulet og læg mærke til om olien virker meget tynd på grund af vand.
Hvis der er vand i så afmonter hele kablet og tør vandet af og smør kablet og monter det igen.
Smør eventuelt en god del fedt på gummibeskytteren eller find på en måde så regnvand ikke samler sig og igen ender inden i kablet.
'

,'
WD-40
' => '
Der er en del personer der fraråder at bruge '.ahref('smorelse.php#wd_40', 'WD-40').' til at smørre kabler med da det er meget tyndflydende og ikke smørre særlig godt/længe.

Det er ikke fordi WD-40 skader kablet eller noget i den stil. Det er bare ikke beregnet til det men kan godt bruges hvis man ikke har andet og man skal have et rustent kabel til at glide bedre. Så kan man eventuelt bruge noget egnet smørremiddel senere når man får det. For eksempel med '.ahref('smorelse.php#ptfe_og_teflon', 'PTFE/Silikone').'.
'

,'
videoer
' => '
'.ahref('http://repvideo.lars-mc.dk/repvideo/view.repair_video.php?id=9', 'Udskiftning af koblingskabel (repvideo.lars-mc.dk)').'.
'.ahref('http://repvideo.lars-mc.dk/repvideo/popupvideo.php?sptlv=1185375396', 'Smøring af koblingskabel (repvideo.lars-mc.dk)').'.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
