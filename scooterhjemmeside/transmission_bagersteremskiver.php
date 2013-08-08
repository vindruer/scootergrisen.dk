<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "bagerste remskiver - Transmission";
$overskrift = "bagerste remskiver - Transmission";
$metadescription = "forklaring af en scootertransmissions bagerste remskiver hvor koblingen sidder";

$databasecenter = array(

'
bagerste remskiver med kobling
' => '
Her ses den bagerste del af variatoren.
'.visbilled('1', 'billed0967.jpg', 'variator remskiver', false, true).'

Den yderste del kaldes koblingsklokken.
'.visbilled('1', 'billed0557.jpg', 'koblingsklokke', false, true).'

'.visflash('0', "http://www.youtube.com/v/ZOnGeRYRpCQ", 'når koblingsklokken drejer rundt så drejer baghjulet også rundt', true).'

'.ahref('transmission_bagersteremskiver.php#fjern_motrikken_ved_koblingsklokken', 'Fjern møtrikken ved koblingsklokken').'

Her er møtrikken fjernet.
'.visbilled('1', 'billed1321.jpg', 'koblingsklokke', false, true).'

Her er koblingsklokken taget af.
'.visbilled('1', 'billed1322.jpg', 'koblingsklokke og kobling', false, true).'

Koblingen har gerne 3 koblingsbakker.
Undgå at røre belægningen med fedtede fingre.
'.visbilled('1', 'billed1326.jpg', 'kobling belægning kymco', false, true).'

Her er "enheden" taget af akslen.
'.visbilled('1', 'billed1323.jpg', 'reduktionsgear aksel', false, true).'

Her ses akslen hvor "enheden" drejer frit rundt på gennem 2 lejer.
'.visbilled('1', 'billed1324.jpg', 'reduktionsgear aksel', false, true).'

Her ses "enheden".
'.visbilled('1', 'billed1325.jpg', 'kobling og remskiver', false, true).'

"Enheden" har en koblingstrykfjeder som er holdt på plads af den store møtrik.
'.visbilled('1', 'billed3280.jpg', 'koblingstrykfjeder presset sammen', false, true).'

Når man skruer møtrikken af skal der holdes et tryk på kanten af koblingen for eksempel ved at presse ned i begge sider med fødderne.
'.visbilled('1', 'billed1327.jpg', 'afmonter kobling', false, true).'
Mens man presse ned med fødderne løsnes møtrikken.
'.visbilled('1', 'billed1328.jpg', 'afmonter kobling', false, true).'
Når møtrikken er fjernet løftes fødderne langsomt og fjederen udvidder sig.
'.visbilled('1', 'billed1329.jpg', 'kobling trykfjeder remskiver', false, true).'
Her se bagsiden af koblingen.
'.visbilled('1', 'billed1334.jpg', 'kobling koblingsbakker koblingsfjedre', false, true).'
På bagsiden af koblingen sidder nogle små koblingsfjedre. Gerne 3 styks.
'.visbilled('1', 'billed0562.jpg', 'kobling', false, true).'

'.afsnit('De små koblingsfjedre','
'.visbilled('1', 'billed0563.jpg', 'Små koblingsfjedre', false, true).'
Når koblingen drejer rundt bliver koblingsbakkerne slynget ud af centrifugalkraften og belægningen tager fat på indersiden af koblingsklokken.

Disse fjedre kan skiftes ud med stærkere eller svagere fjedre for at ændre hvor hurtigt koblingen skal dreje rundt før koblingen tager fat.

Fjederens hårdhed bestemmes af trådens tykkelse.
Jo tykkere tråd, jo flere omdrejninger skal der til før koblingen tager fat.
Fjederenes hårdhed kan typisk ses på dens farve. Nogen fjedre er helt malet og andre har en plet af maling.
De forskellige producenter bruger vist forskellige farver til at vise fjederens hårdhed.
Så man kan vist ikke sige at en bestemt farve er så og så hård.

Som du måske kan se på billederne så kan fjederenes ender have forskellig længde og de skal muligvis vende en bestemt vej i koblingen. Men jeg har ikke noget info om hvilken vej de skal vende og om det har nogen betydning.
').'

For at fjerne koblingsbakkerne skal nogle clips og skiver fjernes. Det kan gøres med en lille flad skruetrækker.
'.visbilled('1', 'billed1335.jpg', 'kobling koblingsbakker koblingsfjedre', false, true).'
Fjedrene kan fjernes og monteres med en tang.
'.visflash('0', "http://www.youtube.com/watch?v=D_Xzv59VhM4", 'fjern og monter koblingsfjedre med slangetang', true).'
'.visflash('0', "http://www.youtube.com/watch?v=BVZkF9-zE7Y", 'fjern og monter koblingsfjedre med låseringstang', true).'
'.visflash('0', "http://www.youtube.com/watch?v=sYfoqtmNxJA", 'HaSse viser hvordan man sætter fjedre på', true).'
'.visflash('0', "http://www.youtube.com/watch?v=8yv_g52Yz5I", 'på denne kobling kan man justere fjeder spændingen og tilføje vægte på bakkerne', true).'
Jeg har selv brugt ståltråd til at fjerne og montere fjedrene og syns det virker godt.

Når fjedre, clips og skiver er fjernet kan bakkerne tages af.
'.visbilled('1', 'billed1336.jpg', 'kobling koblingsbakker koblingsfjedre', false, true).'
Denne type kobling kaldes for slyngkobling da de 3 koblingsbakker bliver slynget ud når pladen drejer hurtigt nok rundt.

Hver bakke har en gummidæmper som formodentligt er til for at undgå det rasler.
'.visbilled('1', 'billed1337.jpg', 'kobling gummidæmpere', false, true).'
Her er bakkerne taget af.
'.visbilled('1', 'billed1338.jpg', 'kobling', false, true).'

Under koblingen ses en bøsning.
'.visbilled('1', 'billed1330.jpg', 'kobling støttebøsning trykfjeder remskiver', false, true).'
Her er støttebøsningen fjernet. Ved ikke hvad den gør godt for. Måske for at holde fjederen helt rigtigt på plads.
En bruger skriver at bøsningerne mimimer slid på fjederen og minimer også modstanden mellem fjederen og remskiven.
'.visbilled('1', 'billed1331.jpg', 'kobling støttebøsning trykfjeder remskiver', false, true).'
Nu kan vi fjerne koblingstrykfjederen.

'.afsnit('Den store trykfjeder','
Her ses koblingstrykfjederen i afslappet tilstand.
'.visbilled('1', 'billed1333.jpg', 'koblingstrykfjeder', false, true).'
Her ses koblingstrykfjederen når den er presset sammen.
'.visbilled('1', 'billed3250.jpg', 'koblingstrykfjeder', false, true).'
'.visbilled('1', 'billed3284.jpg', 'koblingstrykfjeder', false, true).'
Den store trykfjeder presser den yderste remskive ind på kileremmen.
Her ses en lilla trykfjeder monteret.
'.visbilled('1', 'billed0565.jpg', 'trykfjeder', false, true).'

Fjederenes hårdhed kan typisk ses på dens farve. Nogen fjedre er helt malet og andre har en plet af maling.
'.visbilled('1', 'billed0566.jpg', 'diverse trykfjedre', false, true).'
Fjederens hårdhed bestemmes af trådens tykkelse.
Jo tykkere tråd, jo strammer presser remskiven på kileremmen.
De forskellige producenter bruger forskellige farver til at vise fjederens hårdhed.
Så man kan vist ikke sige at en bestemt farve er så og så hård.

Trykfjederen kan skiftes til en svagere eller stærkere fjeder.

Når man sænker motorens omdrejninger er det koblingstrykfjederen som får kileremmen til at falde tilbage i lavere gearing.

Koblingstrykfjederen kan vist kaldes en kontrafjeder.

Koblingstrykfjederens hårdhed skal passe sammen med rullernes vægt.
').'

Her er koblingstrykfjederen fjernet.
'.visbilled('1', 'billed1332.jpg', 'kobling støttebøsning trykfjeder remskiver', false, true).'

Under koblingstrykfjederen er en del som muligvis kaldes en støttebøsning.

Her er støttebøsningen taget af.
'.visbilled('1', 'billed1339.jpg', 'remskiver spor støttebøsning', false, true).'

Støttebøsningen holder på noget fedt sammen med 2 gummi ringe.
Der er dog næsten ikke noget fedt her på billederne.
'.visbilled('1', 'billed1340.jpg', 'remskiver torque driver fedt gummi ringe', false, true).'

Den yderste remskive bevæger sig i nogle spor på nogle pins.
'.visbilled('1', 'animation0019.gif', 'remskiver torque driver animation', false, true).'

De skrå spor gør at den yderste remskive skal dreje lidt når den skal skifte gearing.
Det gør at gearingen ikke bare hurtigt køre op i højeste gearing.
Variatoren bliver altså lidt modvillig til at skifte gearing.

Her ses en remskive med forskellige spor.
De forskellige hældninger skulle gøre det muligt og indstille acceleration i forhold til trækkraft.
'.visbilled('1', 'billed0567.jpg', 'remskive med 3 forskellige hældninger', false, true).'

På min scooter er der 3 pins men der kan også være 2 eller flere.

Pinsne sidder løst.
Det er kun fedtet som holder dem på plads så de kan let trækkes ud med en spids tang.
'.visbilled('1', 'billed1341.jpg', 'remskive spor pin', false, true).'
Når de 3 pins er fjernet kan remskiverne trækkes fra hinanden.
'.visbilled('1', 'billed1342.jpg', 'remskive spor pin', false, true).'
På indersiden er der ligeledes 2 gummi ringe som holder på fedtet inden omkring pinsne og remskive sporne.
'.visbilled('1', 'billed1344.jpg', 'remskive spor', false, true).'
Ud over 3 huller til de 3 pins er der også et lidt mindre hul.
Dette hul er til at fylde fedt igennem når delene er samlet.
'.visbilled('1', 'billed1343.jpg', 'remskive pins huller', false, true).'
Der skal først påføres fedt når delene er samlet for at undgå at fedtet kommer udenfor o-ringene.

Her ses bagsiden af den inderste remskive.
'.visbilled('1', 'billed1346.jpg', 'remskive nåleleje', false, true).'
Den har et nåleleje.
'.visbilled('1', 'billed1347.jpg', 'remskive nåleleje', false, true).'
I bunden kan et kugleleje ses som holdes på plads af en clip.
Man kan også se en af pinsne.
'.visbilled('1', 'billed1348.jpg', 'remskive nåleleje pin kugleleje', false, true).'
Her ses det yderste leje fra ydersiden hvor koblingsklokken hviler på den inderste del af lejet når det hele er samlet.
'.visbilled('1', 'billed1350.jpg', 'stor møtrik ved kobling og koblingsklokke', false, true).'

Her ses en tegning hvor delene sidder på en anden måde.
'.visbilled('1', 'billed3362.jpg', 'tegning med lejer i inderste bagerste remskive', false, true).'
'

,'
fjern møtrikken ved koblingsklokken
' => '
Koblingsklokkemøtrikken kan fjernes med en luft/elektrisk slagmaskine som denne.
'.visbilled('1', 'billed0994.jpg', 'elektrisk slagmaskine', false, true).'
Har man ikke sådan en slagmaskine skal man bruge 2 stykker værktøj.
Et til at holde koblingsklokken så den ikke drejer rundt og et til at løsne møtrikken.

Koblingsklokken kan holdes med et specialværktøj som dette.
'.visbilled('1', 'billed3247.jpg', 'koblingsnøgle', false, true).'
'.visbilled('1', 'billed3249.jpg', 'afmonter koblingsklokke møtrik med koblingsnøgle og skraldenøgle', false, true).'

Eller med en universalholder som denne.
'.visbilled('1', 'billed0558.jpg', 'universalholder', false, true).'
'.visbilled('1', 'billed2826.jpg', 'universalholder', false, true).'

Eller med en universal gummibåndsholder... eller hvad den hedder.
'.visbilled('1', 'billed0559.jpg', 'universal gummibåndsholder', false, true).'

Jeg har prøvet at stikke en metalstang igennem baghjulsfælgen sådan at baghjulet ikke kan dreje rundt men når man lægger krafter i for at få møtrikken af så glider akslen rundt i reduktionsgearet. Men man ville måske kunne gøre det hvis møtrikken ikke sidder vildt stramt.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
