<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "forreste remskiver - Transmission";
$overskrift = "forreste remskiver - Transmission";
$metadescription = "forklaring af en scootertransmissions forreste remskiver hvor rullerne er";

$databasecenter = array(

'
forreste remskiver
' => '
'.visflash('0', "http://www.youtube.com/watch?v=VqwrFMF6s4U", 'Her ses at det kun er den inderste remskive som bevæger sig ind og ud', true).'
For at tage de forreste remskiver af skal møtrikken forrest i variatoren fjernes.
'.visbilled('1', 'billed0993.jpg', 'variator', false, true).'
' . ahref('transmission_forresteremskiver.php#fjern_motrikken_ved_de_forreste_remskiver', 'Fjern møtrikken ved de forreste remskiver') . '

Under møtrikken er en skive, en "griber", blæserhjulet og den yderste remskive som kan tages af.
'.visbilled('1', 'billed0173.jpg', 'variator forreste remskive kilerem gliderør', false, true).'
'.visbilled('1', 'billed0174.jpg', 'remskive', false, true).'
Den yderste remskive passer i nogle hak på krumtapakslen.
Mellem akslen og kileremmen sidder gliderøret som den inderste remskive glider på.
'.visbilled('1', 'billed0976.jpg', 'variator forreste remskive kilerem gliderør', false, true).'
For at tage kileremmen af kan man klemme kileremmen sammen på midten så den presser sig ned i de bagerste remskiver.
Så kommer kileremmen til at sidde løst på gliderøret og kan tages af.
'.visbilled('1', 'billed0995.jpg', 'variator forreste remskive kilerem gliderør', false, true).'
Løft kileremmen af gliderøret og lad den eventuelt bliver siddende på de bagerste remskiver hvis du kun skal arbejde på den forreste del af variatoren.
'.visbilled('1', 'billed0996.jpg', 'variator forreste remskive kilerem gliderør', false, true).'

Tag 2 fingre ind bag den inderste remskive og træk det hele ud.
Hvis du tager remskiven af uden at holde på bagpladen så kan rullerne falde ud.
'.visbilled('1', 'billed0179.jpg', 'variator remskive gliderør', false, true).'

Her er hele den forreste del af variatoren taget ud.
'.visbilled('1', 'billed0175.jpg', 'krumtapaksel', false, true).'
Her ses bagsiden af den inderste remskive og bagpladen.
'.visbilled('1', 'billed0977.jpg', 'variator remskive skål bagplade', false, true).'
Her ses bagpladen, gliderøret, den inderste remskive og rullerne.
'.visbilled('1', 'billed0177.jpg', 'remskive rulleskål gliderør', false, true).'
Bagpladen har 3 plastik styr hvor remskiven og bagpladen kan glider mod hinanden.
'.visbilled('1', 'billed0979.jpg', 'bagplade', false, true).'
Under bagpladen ligger rullerne.
'.visbilled('1', 'billed1996.jpg', 'variator remskive ruller', false, true).'
Rullerne bevæger sig i nogle baner i skålen.
'.visbilled('1', 'billed0992.jpg', 'variator rulle', false, true).'
Her ses hvordan rullerne ligger når variatoren kører i laveste og højeste gearing.
De blå skumfiduser er der bare for at vise hvor rullerne ligger i højeste gearing.
'.visbilled('1', 'billed0988.jpg', 'variator skål laveste gear højeste gear', false, true).'
Jo hurtigere motoren køre jo mere vil den inderste remskive og bagplade presse sig fra hinanden.
'.visbilled('1', 'animation0010.gif', 'variator skål laveste gear højeste gear', false, true).'
Da bagpladen ikke kan bevæge sig bagud så er det remskiven som bevæger sig frem.
Når remskiven bevæge sig frem bevæger kileremmen sig højere op mellem remskiverne.
'.visbilled('1', 'billed2825.jpg', 'variator mellem forreste remskiver', false, true).'
'

,'
ruller
' => '
Her ses nogle ruller.
'.visbilled('1', 'billed1980.jpg', 'variator ruller 6,5 gram kymco', false, true).'
En rulle består af en metal ring som er presset/limet i en plastikholder.
'.visbilled('1', 'billed0546.jpg', 'adskilt variator rulle', false, true).'
Rullerne fås med forskellig vægt.
Det er metal ringen som bestemmer hvor tung rullen er.
Jo tykkere metal ringen er jo tungere er rullen.

Her ses 2 rulle med forskellig vægt.
Læg mærke til at metal ringen er lidt tykkere på den tungeste rulle.
'.visbilled('1', 'billed0983.jpg', 'ruller', false, true).'

På denne pakke står at rullernes vægt er 6,5 gram.
'.visbilled('1', 'billed1979.jpg', 'variator ruller 6,5 gram kymco', false, true).'
Rullernes vægt har betydning for acceleration og topfart.

Rullerne kan skiftes ud med lettere eller tungere ruller for at ændre acceleration og muligvis topfart.

Rullernes vægt skal passe til koblingstrykfjederens hårdhed.
Så hvis man ændre koblingstrykfjederens hårdhed skal man nok også ændre rullernes vægt.

'.afsnit('Lette ruller','
Lette ruller kræver flere omdrejninger for at blive slynget ud og resultatet er hurtigere acceleration.
Men hvis rullerne er for lette kan de ikke slynges helt ud og dermed bliver topfarten lavere fordi variatoren ikke kan komme op i højeste gearing.
').'

'.afsnit('Tunge ruller','
Tunge ruller kræver færre omdrejninger for at blive slynget ud og resultatet er langsommere acceleration.
Men man er mere sikker på at opnå fuld topfart da variatoren kan komme op i højeste gearing ved færre omdrejninger.
').'

'.visflash('0', "http://www.youtube.com/watch?v=MoU2EhXgHbQ", 'variator test med 8 grams og 4 grams ruller', true).'

Rullernes vægt kan også kombineres hvis man bruger 3 af en vægt og 3 af en anden vægt også skulle man så få en mellem ting af de to vægte.
'.visbilled('1', 'billed0774.jpg', 'variator med 2 slags ruller', false, true).'
For eksempel hvis man bruge 3 styks 5,5 gram og 3 styks 6,0 gram så skulle det svarer til at man brugte 6 styks 5,75 gram.

'.afsnit('Rullernes størrelse','
Rullerne til min Kymco Super 8 4T er på 16 mm i diameter og 13 mm på den anden led.
Det er vist en meget almindelig rulle størrelse men de forskellige scooter modeller kan bruge andre størrelser.
').'

Enderne på rullerne er forskellige.
'.visbilled('1', 'billed0544.jpg', 'Variator ruller', false, true).'
Så det er ikke lige meget hvilken vej de bliver lagt i skålen.
For at rullernes levetid skal være så lang så mulig og for at minimere slid på skålen så skal rullernes åbne ender lægges så de vender i urets retning når de lægges ned i skålen.
'.visbilled('1', 'billed0547.jpg', 'variator ruller monterings retning', false, true).'
Her ses slidet i skålens sider i begge retninger.
'.visbilled('1', 'billed0990.jpg', 'variator skål slid fra ruller', false, true).'
Der er godt nok slid i begge retninger men jeg mener selv at det største slid på skålen primært er i den ene retning.
Det er derfor bedst at lægger den lukkede ende af ruller der hvor det største slid er.

Læg mærke til hvordan rullernes åbne og lukkede ender vender i skålen.
'.visbilled('1', 'billed1997.jpg', 'variator rulle', false, true).'

'.afsnit('slid på ruller','
Her ses nogle lidt slidte ruller.
'.visbilled('1', 'billed0978.jpg', 'variator remskive ruller', false, true).'
Som man kan se bliver rullerne slidt ujævnt.
Dette skyldes vel nok at rullerne ikke ruller som man nok ville tro med det navn men at de i stedet for glider og bliver slidt de samme steder. 
'.visbilled('1', 'billed0982.jpg', 'variator remskive ruller', false, true).'
Bemærk de 2 steder hvor denne rulle er slidt.
Det ene slid er fra skålen og det andet slid er fra bagpladen.
'.visbilled('1', 'billed0548.jpg', 'rulle med kanter', false, true).'
Her ses hvordan rullen presser på remskiver som bevæger sig ud og presser kileremmen op.
'.visbilled('1', 'billed0549.jpg', 'ruller ruller ikke ruller glider', false, true).'
Da rullen presser sig ud vil den nok ikke være i stand til at rulle samtidig og dermed slides rullen det samme sted fordi den ikke ruller.
').'
'.afsnit('slidte ruller og topfart','
Jo mere slidte rullerne bliver jo lavere topfart får scooteren.
Det er fordi slidte ruller har en mindre diameter så de ikke kan presse remskiven lige så meget ud som nye ruller kan.
').'
'

,'
ruller der ikke er runde
' => '
Man kan også få ruller som ikke er runde.
'.visbilled('1', 'billed0931.jpg', 'dr pulley rulle', false, true).'
'.visbilled('1', 'billed0997.jpg', 'skiver mellem gliderør og yderste remskive', false, true).'
Jeg ved ikke hvad fordelen ved disse "ruller" skulle være.
Måske kan man være sikke på at alle "rullerne" slides ens hvilket man ikke kan med runde ruller fordi de slides forskelligt og det kan med tiden give ubalance som kan give vibrationer.
'

,'
skiver
' => '
Mellem den yderste remskive og gliderøret kan der sidder en eller flere tynde skiver.
'.visbilled('1', 'billed0689.jpg', 'skiver mellem gliderør og yderste remskive', false, true).'
Jeg har læst at skriverne bruges til at opnå et bedre match mellem gear ratio og motoren omdrejninger når motorens moment ikke er stærkt nok.

Man kan sætte 0, 1, 2 eller 3 skiver på.

Efter hvad jeg kan forstå giver det en lavere topfart og hurtigere acceleration jo flere skiver man sætter på.

Skiverne indsættes muligvis for at få kileremmen så langt ned så muligt så man opnår hurtigere acceleration.
'

,'
fjern møtrikken ved de forreste remskiver
' => '
Den letteste måde er med en luft/elektrisk slag maskine.
Det kan dog virke lidt voldsomt.
'.visbilled('1', 'billed0181.jpg', 'elektrisk slagmaskine sana', false, true).'
Du kan også kile en lille gaffelnøgle fast mellem remskivens tænder og motorblokken.
Denne metode bruger jeg selv og jeg kan godt anbefale den.
'.visbilled('1', 'billed1490.jpg', 'afmontering af remskive møtrik', false, true).'
Her er en video der viser hvordan man gør.
'.visflash('0', 'http://www.youtube.com/watch?v=zYCasW5pY24', '', true).'
Du kan også bruge en oliefiltertang.
'.visbilled('1', 'billed0182.jpg', 'afmontering af remskive', false, true).'
Du kan også købe et specielt stykke metal du spænder fast i de samme huller som holdt variatordækslet med de samme skruer som bruges til variatordækslet.
På metalstykket er der nogle tænder som holder remskiven fast så du har begge hænder fri.
'.visbilled('1', 'billed0185.jpg', 'værktøj til afmontering af remskive', false, true).'
'.visbilled('1', 'billed3254.jpg', 'buzzetti 5582 værktøj til afmontering af remskive', false, true).'
Der er flere forskellige udformninger af dette stykke metal alt efter hvad scooter model den skal passe på.
'.visbilled('1', 'billed3253.jpg', 'værktøj til afmontering af remskive', false, true).'
'.visbilled('1', 'billed1428.jpg', 'værktøj til afmontering af remskive', false, true).'
Dette værktøj kan gå ind og holde på gribehjulet på de modeller som ikke har tænder i kanten af remskiven.
'.visbilled('1', 'billed3255.jpg', 'buzzetti gribehjulsholder værktøj til afmontering af remskive', false, true).'
Du kan også bruge et stykke træ og en stor flad skruetrækker...
'.visbilled('1', 'billed0187.jpg', 'afmontering af remskive', false, true).'
Du kan også bruge en stempelstopper som skrues i tændrørshullet og forhindre motoren i at dreje rundt.
'.visbilled('1', 'billed0188.jpg', 'stempelstopper', false, true).'
Du kan også holde svinghjulet med en universalholder på den modsatte side af motoren.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
