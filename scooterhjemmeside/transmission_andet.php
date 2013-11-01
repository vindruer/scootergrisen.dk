<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "andet - Transmission";
$overskrift = "andet - Transmission";
$metadescription = "balance mellem ruller og koblingstrykfjeder, vibrationer";

$databasecenter = array(

'
balance mellem ruller og koblingstrykfjeder
' => '
Følgende er noget jeg fandt på nettet som jeg har oversat...

Pointen med at skifte rullernes vægt og koblingstrykfjederens hårdhed er at få motoren til at køre med de o/min hvor den yder størst kraft.
Det antal o/min hvor motoren yder størst kraft er forskellig for forskellige scooter modeller.
Hvis motoren yder bedst ved 7500 o/min så opnår man den bedste acceleration/hastighed her.
Accelerer man med 5000 eller 8500 o/min så vil man ikke accelerer så hurtigt fordi motoren ikke yder optimalt.

Ved at skifte rullernes vægt og koblingstrykfjederens hårdhed så kan man få motoren til at køre med sin højeste kraft både under acceleration og ved fuld fart.

Jo tungere ruller jo mere kraft vil rullerne presse på bagpladen med og jo hurtigere vil kileremmen komme op i gear.
Hvis rullerne er FOR tunge så vil kileremmen komme i højt gear for hurtigt hvilket giver dårlig acceleration.

Jo lettere ruller jo flere o/min skal der til for at rullerne blive slynget ud.
Når motoren køre med for høje o/min så vil motoren ikke yde optimalt.
Hvis rullerne er FOR lette så vil kileremmen ikke kunne komme helt op i gear og det giver god acceleration men lav topfart.

Den yderste remskive ved koblingen er "torque controlled", altså moment kontrolleret.
Den yderste remskive bevæger sig i nogle skrå baner og presses ind mod kileremmen af koblingstrykfjederen.
De skrå baner gør så kileremmen ikke komme ned for hurtigt.
Når man køre op ad bakke så er det meningen at koblingstrykfjederen skal presse de bagerste remskiver sammen så kileremmen kommer ned i lavt gear.

Hvis rullerne giver god acceleration og topfart men hastigheden pludseligt falder meget når du køre op ad en lille bakke så kan det være fordi koblingstrykfjederen er for slap.

Hvis du skifter til en hårdere koblingstrykfjeder så kan det være nødvendigt at skifte til tungere ruller.
Hvis du skifter til en slappere koblingstrykfjeder så kan det være nødvendigt at skifte til lettere ruller.

Der er en fin balance mellem koblingstrykfjederens hårdhed og rullernes vægt som findes ved at forsøge sig frem.

En "performance" variator kan give en mere jævn acceleration end standard variatoren fordi skålen med rullerne og bagpladen har en anden vinkel.

Er bruger skrev følgende til mig.
'.citat('
En hårdere trykfjeder vil kunne presse scooteren ned i gear hurtigere end omdrejningerne falder, således at omdrejningerne fortsat er høje når gassen slippes, indtil man er i aller laveste gear. Dette kan som du siger bruges til bakker, men også til, hvis man har kørt med fuld gas, slipper gassen for at komme forbi en forhindring med lavere hastighed, og så vil gasse op igen. Normalt vil omdrejningerne være faldet her, uden at man er kommet særlig langt ned i gear, hvilket betyder at motoren tungtrækker langt uden for effektbåndet, når man skal accellerere op igen.

Dette kan så undgås ved at putte en trykfjeder i, som presser scooteren ned i gear, hurtigere end omdrejningerne falder, da man så er tættere på effektbåndet når man er kommet forbi forhindringen med lavere hastighed, og så vil op i hastighed igen.

Dette er tilsyneladende også grunden til at trykfjedre nogle steder indekseres efter et omdrejningstal, hvor den hvide malossi fjeder kræver 30 kg at blive helt presset sammen (det samme som Agility\'s standart) og så hedder 800 RPM fjeder. Amerikanerene mente dog at man skulle op i 1500 til 2200 før at det kunne bruges til noget, men det skyldes måske, at de konstant høje omdrejninger passer bedre til deres meget aggressive kørestil. Det er muligvis også fordi at de kører i byer som San Fransisco, hvor der er mange bakker og sving, hvor at man efter at have sluppet gassen for at dreje, så hurtigt kan geare op igen. :)
').'
'

,'
vibrationer
' => '
Jeg havde i lang tid nogle vibrationer når jeg kom over 30 km/t.

Da jeg satte nye ruller i så gik vibrationerne væk.
De gamle ruller var på 6,5 gram og de nye på 5,5 gram.
Jeg ved ikke om det var rullernes vægt som hjalp på vibrationerne eller om det var fordi de nye ruller ikke er slidte.

Da jeg kiggede på skålen lod jeg mærke til at der i i kanten af skålen er et hak ved hver rulle hvor rullerne rammer skålen når variatoren er i højeste gear.
'.visbilled('1', 'billed1021.jpg', 'remskive skål rulle slid', false, true).'
Her ses hakket hvor rullen rammer.
Det ser ikke ud som om rullen har været ud at røre yderste i skålen.
'.visbilled('1', 'billed1022.jpg', 'remskive skål rulle slid', false, true).'
Her ses et andet sted i skålen hvor man kan se at rullen har været helt oppe at røre yderste i skålen.
'.visbilled('1', 'billed1023.jpg', 'remskive skål rulle slid', false, true).'
Her ses at rullen ikke slider skålen ens.
Yderst i skålen er der mere slid i urets retning.
'.visbilled('1', 'billed1024.jpg', 'remskive skål rulle slid', false, true).'
Det er ligesom om rullen har rullet skævt i skålen.
'.visbilled('1', 'billed1025.jpg', 'remskive skål rulle slid', false, true).'
Jeg tror det er fordi der er de der hak yderst i skålen som gør at rullerne bliver ramt og derfor sidder skævt når variatoren er i højeste gear.
Det ville vel også være fint nok hvis alle rullerne sad lige skævt.
Men jeg kan se at det ikke er alle hakkene som er slidt lige meget så derfor tror jeg at nogle at rullerne godt kan komme helt ud i skålen mens andre sidder lidt skævt når variatoren er i højeste gear.
De skævt siddende ruller laver så en ubalance som jeg så mener at skyld i de vibrationer jeg har mærket på min scooter.

Jeg har også læst at hvis man bruger fedt så rullerne så kan det give vibrationer hvis man ikke bruger samme mængde fedt ved hver rulle.

Her ses hvordan rullerne er slidte.
'.visbilled('1', 'billed1033.jpg', 'ruller slid', false, true).'
'

,'
luftindtag
' => '
Forrest på variatordækslet sidder der et luftindtag.
På hullet i variatordækslet sidder et gummirør som går lidt op under skjoldet så vand og snavs fra vejen ikke så let kan komme ind.

For at afmontere røret kan man bruge en tang.
'.visbilled('1', 'billed2818.jpg', 'variatordæksel luftindtag afmontering', false, true).'

På nogen scootere som CPI er der i stedet for hul yderst på variatordækslet også sidder der en svamp.
'

,'
kædetransmission
' => '
Der findes scootere med kædetransmission som en del af motorblokken som det ses her.
'.visbilled('1', 'billed3358.jpg', 'scooter med kæde transmission i motorblok', false, true).'
Det er vist ikke særlig mange 50 cm³ scootere/knallerter i danmark med den form for transmission men Suzuki FZ50 bruger den vist.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
