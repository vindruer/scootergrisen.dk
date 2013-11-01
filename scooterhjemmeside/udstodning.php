<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "udstødning - Luftfilter og udstødning";
$overskrift = "udstødning - Luftfilter og udstødning";
$metadescription = "lær om scooterens udstødning og indre opbygning med katalysator";

$databasecenter = array(

'
udstødning
' => '
Udstødningens opgave er blandt andet at dæmpe lyden.
En udstødning kaldes også for lydpotte.

Nogen udstødninger er med katalysator.

Denne udstødning har en metalring af foldet metalfolie som pakning mellem udstødning og cylinder.
Udstødningen har 2 rustfri stål plader for at beskytte mod forbrænding da udstødningen bliver meget varm.
På forrøret sidder en skrue som giver adgang til indersiden af forrøret så man kan måle udstødningsgasserne før de når katalysatoren.
'.visbilled('1', 'billed0210.jpg', 'udstødning', false, true).'
Udstødningen skrues fast på cylinderen (2 takt) eller topstykket (4 takt) med 2 bolte eller 2 møtrikker.
'.visbilled('1', 'billed0214.jpg', 'udstødnings skruer', false, true).'
Her ses hvordan en udstødning kan se ud indvendigt.
'.visbilled('1', 'billed0216.jpg', 'udstødning med katalysator tegning', false, true).'
Udstødningen kan være bygget med flere indvendige rør af varierende størrelse og længde så der dannes undertryk som hjælper med at suge udstødningsgasserne ud af cylinderen og også at suge luft ind gennem det sekundære luftfilter.
'.visbilled('1', 'billed1585.jpg', 'udstødning med katalysator tegning', false, true).'

Her ses en udstødning fra en TMS S3 hvor udstødningsgasserne kommer ud foran på udstødningen.
'.visbilled('1', 'billed1616.jpg', 'TMS S3 udstødning', false, true).'
'.visbilled('1', 'billed1617.jpg', 'TMS S3 udstødning', false, true).'

Her ses en baotian udstødning med påsvejset ophængsbeslag.
'.visbilled('1', 'billed2910.jpg', 'baotian udstødning med aluminiums omslag', false, true).'
Her ses en baotian udstødning med 2 løse bøjler der sættes omkring udstødningen og monteres på et seperat beslag.
'.visbilled('1', 'billed2909.jpg', 'baotian udstødning', false, true).'
'.visbilled('1', 'billed3170.jpg', 'udstødning', false, true).'
'.visbilled('1', 'billed2973.jpg', 'udstødning', false, true).'
'

,'
video
' => '
'.visflash('0', "http://www.youtube.com/watch?v=IjjDsibPff8", 'Her skiftes udstødningspakningen (Video lavet af Anders Bruun Nørring)', true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
