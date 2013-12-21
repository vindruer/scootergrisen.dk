<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';
require_once './php/vinchecker_funktioner.php';

$setup['sideikon']               = 'ikoner/ikon_vinchecker2.png';

$title = "VIN checker til scootere og knallerter";
$overskrift = "VIN checker til scootere og knallerter";
$metadescription = "indtast 17 cifret stelnummer fra en scooter/knallert og se om du kan få oplysninger som producent, årgang, mærke, model og hastighed";

$GLOBALS['setup']['head'] = '
<style type="text/css">

.vincheckerekstrainformation {
   background: #faa;
   border: 2px inset #faa;
   border-spacing: 15px;
   padding: 5px;
   margin: 5px;
   font-family: consolas, monospace;
}

.vincheckerekstrainformationomhastighed {
   background: #aff;
   border: 2px inset #faa;
   border-spacing: 15px;
   padding: 5px;
}

.kontroltegnforme {
   /*background: #aff;*/
   /*border: 2px inset #aff;*/
   /*border-spacing: 15px;*/
   /*padding: 5px;*/
}

.kontroltegnforme input {
   background: #aff;
   border: 2px inset #aff;
   border-spacing: 15px;
   padding: 5px;
   border-width: 0;
   text-align: center;
}

</style>
';

$databasecenter = array(

'
VIN checker
' => '
'.vincheckdigitchecker().'
'

,'
links til andre VIN checkere og andet info
' => '
'.ahref('https://motorregister.skat.dk/dmr-front/appmanager/skat/dmr?_nfpb=true&_nfpb=true&_pageLabel=vis_koeretoej_side&_nfls=false', 'motorregister.skat.dk').' (søg på nummerplade og stelnummer)
'.ahref('http://selvbetjening.trafikstyrelsen.dk/', 'selvbetjening.trafikstyrelsen.dk').' (søg på nummerplade og stelnummer) (ved nogle kan man se synsrapporter (nok kun 45 km/t))
'.ahref('http://www.fstyr.biltorvet.dk/WebForm1.aspx', 'fstyr.biltorvet.dk').' (find typegodkendelser ud fra stelnummer, finder dog sjældent noget)

'.ahref('http://www.nummerplade.net/', 'nummerplade.net').' (søg på både nummerplade og stelnummer)
'.ahref('http://nummerplade.billigbilpleje.dk/', 'nummerplade.billigbilpleje.dk').' (søg på nummerplade)

'.ahref('http://www.analogx.com/contents/vinview.htm', 'AnalogX VIN View').' (VIN checker)
'.ahref('http://www.nrpl.dk/', 'nrpl.dk').' ("Privat website om danske nummerplader og deres historie")
'

,'
data
' => '
Data i VIN checkeren stammer fra diverse filer, programmer, '.ahref('typegodkendelser.php', 'typegodkendelser').' og de VIN som brugerne har indsendt her på siden.

Her er nogen af de filer jeg har hentet info fra til VIN checkeren.

'
.visfil('1', 'scooterhjemmeside/download/vindecoding.zip')
.visfil('1', 'scooterhjemmeside/download/piaggio_catalogue_of_spare_parts.zip')
.'
'.ahref('ftp://ftp.nhtsa.dot.gov/mfrmail/', 'ftp.nhtsa.dot.gov').' (her har jeg fundet en del info om at dekode VIN)
'

,'
VIN søgninger
' => '
'.visvinidatabase(30).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
