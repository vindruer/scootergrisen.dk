<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "LED (diode lys)";
$overskrift = "LED (diode lys)";
$metadescription = "lidt info om LED som er lys jeg prøvede at sætte på min scooter";

$databasecenter = array(

'
LED
' => '
LED er en diode (ensretter) der udsender lys.
De kan bruges i stedet for en glødetrådspære og har den fordel at de bruges meget mindre strøm og i teorien holder meget længere da de ikke har nogen tråd som bliver varm og med tiden smelter over.

Jeg var i føtex og så de havde nogen små flad 12 volt LED pære til 20 kroner stykket som jeg måske kunne bruge.
Jeg har i noget tid tænkt at det måske kunne være smart at havde et LED lys yderst på sidespejlene på min scooteren så andre måske bedre se man kommer kørende og bedre se hvor bred scooteren er.
Det er fordi jeg oplever meget tit bilister som holder halvt ude på cykelstien når de skal ud fra en sidevej og men der er trafik.
Og så syntes jeg det hjælper godt med at se scooteren på de modeller har har et ekstra lys tændt samtidig med nærlyset som Giantco Sprint for eksempel. Der sidder en lille lampe foran.

'.visbilled('1', 'billed3418.jpg', 'G4 12 volt LED', false, true).'
På pakken står 1,2W og på pæren står 1,5W.
Hvad end der er rigtigt så bruger den ikke meget strøm.
'.visbilled('1', 'billed3419.jpg', 'G4 12 volt LED', false, true).'
Her har jeg sat 12 volt jævnstrøm.
Lyset blænder rimelig meget.
Og den lyser i en bred vinkel i modsætning til mange LED lys som kun blænder lige frem for.
'.visbilled('1', 'billed3420.jpg', 'G4 12 volt LED lyser', false, true).'
Der er 21 LED i alt.
'.visbilled('1', 'billed3421.jpg', 'G4 12 volt LED tæt på', false, true).'
'.visbilled('1', 'billed3422.jpg', 'G4 12 volt LED tæt på', false, true).'
Budget. Billig billig. 20 kroner. Men det var vist også nedsat... eller koster de så lidt normalt ?
'.visbilled('1', 'billed3423.jpg', 'G4 12 volt LED bag fra', false, true).'
Her ses elektronikken.
Simpelt nok til at jeg kan forstå det... sådan da.
Nederst har vi stikket som bare er 2 spyd der er loddet til en ensretter må det vel være.
Pæren er åbenbart lavet til vekselstrøm men det fungere også med jævnstrøm.
Og da der er sådan en ensretter så er det lige meget hvordan man vender plus og minus. Pæren lyser lige meget hvad.
Der er 21 LED ialt.
Det er delt op i 7 parallele grupper som hver hedder "minus - LED - LED - LED - plus" også er der indskuds en modstand i hver gruppe et sted på 150 Ohm.
Der står 151 på nogen af modstandene. Det betyder 15 også 1 betyder at der skal være ét nul efter 15 så det er altså 150 Ohm.
Nogen af modstandene er hvide, det sikkert bare fordi den sorte side med tallene vender nedad.
'.visbilled('1', 'billed3424.jpg', 'G4 12 volt LED printplade', false, true).'
Ved den ene pære gik det ene spyd let af, det var ikke loddet ordentligt på.
'.visbilled('1', 'billed3425.jpg', 'G4 12 volt LED ben røget af', false, true).'
Og så er kanten af printpladen vist håndslebet så de passer i det hvide plastik så den yderste "strømbane" er næsten slebet over et sted.
'.visbilled('1', 'billed3426.jpg', 'G4 12 volt LED printplade', false, true).'

Nå men jeg vil prøve om jeg kan lode nogen ledninger/stik på også lime LED pærene fast på sidespejlene eller noget.
Så skriver jeg mere når jeg har prøvet det.

Her har jeg forbundet LED lysene med ledningsnettet og sat dem løst yderst på sidespejlene hvor jeg cirka havde tænkt mig de skulle sidde.
'.visbilled('1', 'billed3444.jpg', 'G4 12 volt LED lyser i sidespejl', false, true).'

'.visbilled('1', 'billed3445.jpg', 'G4 12 volt LED lyser i begge sidespejle', false, true).'
Her har jeg sat dem fast med gaffatape på bagsiden af sidespejlene i en vinkel der skulle mindre om fremad selvom det var lidt svært men det betyder ikke så meget med de har lys fordi de lyser ud i alle retning alligevel og ikke kun fremad så så mange andre LED lys gør.
'.visbilled('1', 'billed3446.jpg', 'G4 12 volt LED lyser om natten', false, true).'
Efter at have tændt dem i mørke syntes jeg ligepludselig ikke det var så god en ide længere så de sidder helt yderst på sidespejlene.
Folk kunne måske tro det var en meget bredere køretøj der kom også lyser de også rimelig kraftigt.

Så jeg tror det er bedre hvis jeg flytter dem mere ind mod midten.
Måske placer dem sådan at de lyser ned på frontskjoldet, det må gøre scooteren en del mere synling om natten.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
