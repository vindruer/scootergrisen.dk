<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "svinghjul - 4 takt motor";
$overskrift = "svinghjul - 4 takt motor";
$metadescription = "forklaring af svinghjulet som sidder i en motor fra en scooter som holder drejningen af krumtapakslen i gang fra forbrænding til forbrænding";

$databasecenter = array(

'
svinghjul
' => '
På scootere med variator sidder svinghjulet gerne på højre side af motoren under blæserskjoldet.
'.visbilled('1', 'billed3385.jpg', 'blæserskjold generator', false, true).'

Det hvide plastik med finner er blæserhjulet.
'.visbilled('1', 'billed0279.jpg', 'blæserhjul', false, true).'
Under blæserhjulet er svinghjulet.
'.visbilled('1', 'billed3031.jpg', 'blæserhjul svinghjul generator', false, true).'

Her ses svinghjulet.
'.visbilled('1', 'billed3380.jpg', 'svinghjul', false, true).'
Svinghjulet har magneter på indersiden i den tykke kant.
Der er formodentligt 4 magnet i denne stator.
'.visbilled('1', 'billed3376.jpg', 'svinghjul inderside', false, true).'

På akslen hvor svinghjulet sidder er der et hak hvor en "woodruff key" skal sidde.
'.visbilled('1', 'billed3379.jpg', 'woodruff key hul i krumtapaksel', false, true).'
En "woodruff key" er et lille stykke metal der gør at svinghjulet ikke glider rundt på akslen.
Man kan få forskudte "woodruff key" som ændre tændingstidspunktet så tændrøret giver gnist lidt tidligere eller lidt senere end ved en lige "woodruff key".
'.visbilled('1', 'billed3386.jpg', 'woodruff key skivefeder', false, true).'
'.visbilled('1', 'billed3746.jpg', 'woodruff key skivefeder på krumtapaksel oliepumpetandhjul', false, true).'
I midten af svinghjulet er et hak som passer til en "woodruff key".
'.visbilled('1', 'billed3388.jpg', 'svinghjul', false, true).'
"Woodruff key" hedder på dansk skivefeder.
I T-Hansens reservedelsbog hedder den not.

På svinghjulets yderside er en forhøjning som passer tæt forbi '.ahref('elektrisk_spoler.php#pickup', 'pickupen').' når svinghjulet drejer rundt.
Det giver signal til CDI boksen om hvornår tændrøret skal give gnist.
'.visbilled('1', 'billed3392.jpg', 'svinghjul forhøjning', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
