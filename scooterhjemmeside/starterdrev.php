<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "starterdrev";
$overskrift = "starterdrev";
$metadescription = "forklaring af starterdrevet som sidder mellem startermotoren og remskive eller kobling som går ud og drejer motoren i gang når den elektriske startermotor bruges";

$databasecenter = array(

'
starterdrev
' => '
Starterdrev kaldes også for bendixdrev.
På engelsk kaldes starterdrev for "starter pinion".

Her ses et starterdrev.
'.visbilled('1', 'billed0690.jpg', 'starterdrev', false, true).'
Starterdrevet bruges når man starter motoren med den elektriske startermotor. Altså når man trykker på starter knappen.

Her ses hvor starterdrevet kan sidde.
'.visbilled('1', 'billed0692.jpg', 'starterdrev', false, true).'
Den midterste del af starterdrevet bevæger sig ud samtidig med den drejer når starter motoren bruges og falder tilbage når starter motoren stopper.
'.visbilled('1', 'billed0691.jpg', 'starterdrev', false, true).'
Når den midterste del bevæger sig ud tager dens tænder fat i kanten af den yderste remskive som får krumtapakslen til at dreje rundt og motoren vil så starte.
'.visbilled('1', 'billed3171.jpg', 'startermotor starterdrev tegning', false, true).'

Her ses hullet hvor starterdrevet sidder i motorblokken.
Læg mærke til der sidder en ring i hullet.
Starter motorens aksel kan ses øverst.
'.visbilled('1', 'billed0694.jpg', 'variatordæksel starterdrev ring', false, true).'

Her ses hullet og ringen hvor starterdrevet sidder i variatordækslet.
'.visbilled('1', 'billed0071.jpg', 'variatordæksel starterdrev ring', false, true).'
På denne scooter sidder starterdrevet i bunden af motoren og der er en holder så starterdrevet ikke skal køre i variatordækslet.
'.visbilled('1', 'billed2692.jpg', 'starterdrev', false, true).'

På denne motor er der ikke nogen tænder på den yderste remskiver som starterdrevet kan tage fat i.
'.visbilled('1', 'billed2797.jpg', 'starterdrev', false, true).'
I stedet er der et tandhjul inden bag remskiverne.
'.visbilled('1', 'billed2796.jpg', 'starterdrev', false, true).'
På akslen sidder et afstandsstykke/bøsning.
'.visbilled('1', 'billed2795.jpg', 'starterdrev', false, true).'

Den midterste del af starterdrevet tager kun fat når den bevæger sig i den ene retning. I den anden retning glider den bare rundt uden at tage fat.
'.visbilled('1', 'billed0696.jpg', 'starterdrev adskilt', false, true).'

Delen øverst til venstre hedder vist et friløb og kan dreje frit den ene vej men ikke den anden.
Friløbet gør at motoren ikke kan trække starterdrevet og starter motoren op i omdrejninger så de kunne gå i stykker.
Hvis man bruger starterdrevet selvom forbrændingsmotoren er startet så skulle friløbet forhindre at starterdrevet ville gå i stykker.
'.visbilled('1', 'billed0693.jpg', 'starterdrev adskilt', false, true).'

'.visflash('0', 'http://www.youtube.com/watch?v=I-LYGt-xGOM', 'letsindig forklarer om starterdrev og startermotor', true).'
'.visflash('0', 'http://www.youtube.com/watch?v=o5pvzIdt184', 'letsindig monter starterdrev', true).'
'

,'
starterkobling
' => '
Her ses en anden form for startermekanisme som kaldes starterkobling.
Eller... den er derinde et sted i hvert fald selvom man ikke kan se så meget.
'.visbilled('1', 'billed0705.jpg', 'starterkobling', false, true).'
På denne motor er starter motoren og starterkoblingen placeret i højre side af motoren.
Starterkoblingen sidder på krumtapakslen og kan ses når man tager svinghjulet, statoren og det yderste af motorblokken af.
'.visbilled('1', 'billed2515.jpg', 'starterkobling', false, true).'
'.visbilled('1', 'billed2715.jpg', 'starterkobling', false, true).'
Her ses starterkoblingen.
'.visbilled('1', 'billed2517.jpg', 'starterkobling', false, true).'
'.visbilled('1', 'billed2999.jpg', 'starterkobling', false, true).'
'.visbilled('1', 'billed2998.jpg', 'starterkobling', false, true).'
'.visbilled('1', 'billed2997.jpg', 'starterkobling', false, true).'
'.visbilled('1', 'billed2665.jpg', 'starterkobling', false, true).'
Her ses idler gearet, starter mellemhjulet eller hvad det hedder.
Idler gearet sidder på en aksel mellem starter motoren og starterkoblingen.
Det største tandhjul (med de fine tænder) har kontakt med starter motoren.
Det mindste tandhjul (med de grove tænder) har kontakt med starterkoblingens tandhjul.
'.visbilled('1', 'billed2518.jpg', 'starterkobling', false, true).'
På krumtapakslen er et nåleleje som starterkoblingens store tandhjul drejer på.
På krumtapakslen sidder en speciel møtrik som holder starterkoblingen fast.
'.visbilled('1', 'billed2516.jpg', 'starterkobling', false, true).'
Møtrikken kan fjernes med et specielt '.ahref('verktoj.php#starterkoblings_verktoj', 'starterkoblings værktøj').'.
Møtrikken har muligvis venstre drejet gevind så man skal muligvis dreje modsat af de fleste andre møtrikker.

Starterkoblingen kan holdes med begge hænder også skal man kun kunne dreje i den ene retning.
'.visbilled('1', 'billed3000.jpg', 'starterkobling', false, true).'
'

,'
egne erfaringer
' => '
På min Kymco Super 8 var ringen i variatorskjoldet røget ud på et tidspunkt.
Ringen var åbenbart røget ud engang hvor variatordækslet har været taget af.
'.visbilled('1', 'billed0695.jpg', 'variatordæksel starterdrev ring mangler', false, true).'
Fordi der ikke var nogen ring så hang starterdrevets ende lidt lavere end normalt og det var altså nok til at tænderne på den yderste remskive kunne ramme starterdrevet og det kunne man høre som en raslen.
Efter noget tid var den ring som sidder uden om fjederen på starterdrevet blevet bukket så meget at den havde sat sig fast så fjederen ikke kunne udvidde sig.
Desuden virkede el starteren dårligt, det var som om batteriet var helt fladt selvom det ikke var så jeg måtte bruge kick starteren.

Ringen findes ikke i reservedelskataloget men det lykkes mig et købe 2 nye løse ringe.
'.visbilled('1', 'billed0817.jpg', 'starterdrev ring', false, true).'
Med ringen sat i virker min el starter meget meget bedre end den gjorde uden ringen.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
