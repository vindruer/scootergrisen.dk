<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "kickstarter";
$overskrift = "kickstarter";
$metadescription = "information om kickstartern der sidder på scootere/knallerter og som bruges til at starte forbrændingsmotoren";

$databasecenter = array(

'
introduktion
' => '
Kickstarteren bruges til at starte motoren.

Kickstarteren kan også bruges til at mærke om der er modstand/kompression i motoren.
'

,'
kickstarter
' => '
På denne motor med gear sidder kickstarteren på højre side af motoren.
'.visbilled('1', 'billed1031.jpg', 'kickstarter', false, true).'
På scootere med variator sidder kickstarteren gerne på venstre side af scooteren på variatordækslet.
'.visbilled('1', 'billed1030.jpg', 'kymco super 8 4T kickstarter på variatordæksel', false, true).'
Enden af kickstarterarmen kan ofte slås ud når kickstarteren skal bruges og ind når den ikke skal bruges.
'.visbilled('1', 'billed1930.jpg', 'kymco super 8 4T kickstarter på variatordæksel', false, true).'
For at fjerne kickstarterarmen skal skruen fjernes helt. Ellers kan man ikke tage kickstarterarmen af.
Sådan er det i hvert fald på min scooter.
'.visbilled('1', 'billed1931.jpg', 'kymco super 8 4T kickstarter på variatordæksel', false, true).'
Man kan eventuelt kile en fladskruetrækker ind i kickstarterarmens åbning for at gøre det lettere at fjerne den fra akslen.
'.visbilled('1', 'billed1933.jpg', 'kymco super 8 4T kickstarter', false, true).'
Her er kickstarterarmen taget af.
Læg mærke til skruens gevind som passer i en bane på akslen. Det er derfor skruen skal helt af før man kan fjerne kickstarterarmen.
'.visbilled('1', 'billed1932.jpg', 'kymco super 8 4T kickstarter', false, true).'
Kickstarterakslen holdes på plads af en låsering.
'.visbilled('1', 'billed1934.jpg', 'kymco super 8 4T kickstarter', false, true).'
Låseringen kan fjernes med en låseringstang.
'.visbilled('1', 'billed1935.jpg', 'kymco super 8 4T kickstarter', false, true).'
Bag låseringen sidder en skive.
'.visbilled('1', 'billed1936.jpg', 'kymco super 8 4T kickstarter', false, true).'
Så er der ikke mere af fjerne på kickstarteren udefra.
'.visbilled('1', 'billed1937.jpg', 'kymco super 8 4T kickstarter', false, true).'

Her ses variatordækslet indefra.
'.visbilled('1', 'billed1941.jpg', 'kymco super 8 4T kickstarter', false, true).'
Til venstre ses kickstarterakslen som er den aksel man kan se udefra.
Til højre ses gribehjulet som er den del der går ind og tager fat så motoren kan starte.
Gribehjulet kaldes også startersnekke.
'.visbilled('1', 'billed1942.jpg', 'kymco super 8 4T kickstarter', false, true).'
Helt til venstre ses en stopper som halvmånen kan hvile mod når gribehjulet er fjernet.
Hvad man ikke kan se på billederne er at der er en svejsning mellem tænderne på halvmånens ende. Det er derfor halvmånen stopper som den gør på billedet.

Her er kickstarterakslen og gribehjulet taget ud.
'.visbilled('1', 'billed1944.jpg', 'kymco super 8 4T kickstarter', false, true).'
I midten sidder en bøsning.
Og så er der en plastik ring.
'.visbilled('1', 'billed1945.jpg', 'kymco super 8 4T kickstarter', false, true).'
Her er alle kickstarter delene fjernet fra variatordækslet.
'.visbilled('1', 'billed1946.jpg', 'kymco super 8 4T kickstarter', false, true).'

'.visbilled('1', 'billed1943.jpg', 'kymco super 8 4T kickstarter', false, true).'

Omkring møtrikken på den yderste remskive sidder en griber som er den gribehjulet får fat når træder på kickstarteren.
'.visbilled('1', 'billed1753.jpg', 'variator', false, true).'

Når man træder på kickstarteren så bevæger gribehjulet sig ud og tager fat i griberen om krumtapakslen drejes rundt som så får motoren til at starte.

Her er griberen taget af så man kan se hvordan gribehjulet og griberen passer sammen.
'.visbilled('1', 'billed1947.jpg', 'kymco super 8 4T kickstarter', false, true).'
'.visbilled('1', 'billed1938.jpg', 'kymco super 8 4T kickstarter', false, true).'

På gribehjulet er monteres en friktionsfjeder som giver lidt modstand så gribehjulet ikke kan dreje helt frit rundt.
Hvis man lige har trådt på kickstarteren og foden glider af så sørger friktionsfjederen for at kickstarterarmen ikke bare springer hårdt tilbage.

Undgår at bruge for meget fedt på fjederen og i hullet hvor gribehjulet sidder da det kan få kickstarterarmen til at være lang tid om at komme tilbage og desuden kan gribehjulet have svært ved at falde helt på plads og kan derfor blive slået af griberen.

'.visflash('0', 'http://www.youtube.com/watch?v=xww69L1bd3o', 'letsindig viser hvordan man sætter kickstarterdelene på', true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
