<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "motor - Elektrisk scooter";
$overskrift = "motor - Elektrisk scooter";
$metadescription = "information om den elektriske motor der findes i elektriske scootere som hub motor (nav motor), ikke-hub motor, kul børster, børsteløs, hall sensor";

$databasecenter = array(

'
motor
' => '
Der findes primært 2 steder at placere motoren på en elektrisk scooter.
Motoren kan være indbygget i baghjulet. Dette kaldes for en hub motor (nav motor på dansk) og kræver ingen transmission.
Motoren kan også sidde væk fra baghjulet og kraften overføres så med en rem til baghjulet.
Hub motoren skulle være at fortrække da man undgår kraft tab fra en transmission.

Der findes motorer med kul børster og uden kul børster.
En børsteløs motor skulle være at fortrække da der ikke er nogen kul børster som kan slides og med tiden skal skiftes.

'.afsnit('Hub motor (nav motor)','
Motoren er placeret inden i baghjulets fælg.

Her ses en hub motor.
'.visbilled('1', 'billed0143.jpg', 'Elektrisk motor hub hjul', false, true).'

'.afsnit('findes blandt andet på','
Earthenergy City
EVT 168
EVT 3w
EVT 4000e
Giantco E-Buddy
').'

Her ses en scooter med hub motor.
'.visbilled('1', 'billed1096.jpg', 'Elektrisk motor hub hjul', false, true).'
På motoren står "Swei SWD152048 500-800W 48V jinhau shiwen electromechanical co ltd".
'.visbilled('1', 'billed1101.jpg', 'Elektrisk motor hub hjul Swei SWD152048 500-800W 48V jinhau shiwei electromechanical co Ltd.', false, true).'
Jeg forstår det ikke helt fordi på controlleren på samme scooter står der 1500-2000W.
Men det betyder måske bare at controlleren kan klare op til 1500-2000W.

Hub motoren sidder inden i baghjulet og bruger ikke nogen transmission så der er altså ikke noget kraft som går tabt i transmissionen.

Her ses kablet til motoren som går ud gennem akslen på højre side.
'.visbilled('1', 'billed0102.jpg', 'elektrisk motor hub hjul EVT 4000e', false, true).'
'.visbilled('1', 'billed0652.jpg', 'elektrisk motor hub hjul EVT 4000e stik', false, true).'
Det sorte stik fra motoren forbindes med controlleren.
'.visbilled('1', 'billed3128.jpg', 'EVT dc til dc konverter og lednigner og stik', false, true).'
Her ses controlleren.
'.visbilled('1', 'billed3129.jpg', 'EVT scooter controller', false, true).'
'.visbilled('1', 'billed3118.jpg', 'elektrisk motor hub', false, true).'
'.visbilled('1', 'billed3342.jpg', 'elektrisk motor hub', false, true).'

Her kan man se hvor kablet til motoren går ud på en Ebretti 518.
'.visbilled('1', 'billed1724.jpg', 'Ebretti motor kabel', false, true).'
Her ses en Scoopie scooter hvor kablet til motoren går igennem hele akslen.
'.visbilled('1', 'billed1675.jpg', 'scoopie motor kabel', false, true).'
Her ses højre side af baghjulet hvor der der en blå klap.
Det er en navlås så man kan låse baghjulet.
'.visbilled('1', 'billed1676.jpg', 'scoopie motor baghjul navlås tromlebremse', false, true).'
Under den store møtrik på baghjulsakslen sidder en plade.
'.visbilled('1', 'billed3273.jpg', 'plade til at holde baghjulsaksel', false, true).'
Pladen er også skruet fast på stellet gaflen med en bolt.
Jeg vil tro at pladen er der for at man lettere kan få baghjulet til at sidde lige i gaflen når man skal spænde de store møtrikker og for at akslen vender rigtigt.
'.visbilled('1', 'billed3094.jpg', 'elektrisk scooter baghjul svingarm', false, true).'
'.visbilled('1', 'billed3095.jpg', 'elektrisk scooter baghjul', false, true).'
Her ses ledningerne fra motoren.
De 3 tykke ledninger er fase ledninger.
De 5 tynde ledninger er hall sensor ledninger.
'.visbilled('1', 'billed3096.jpg', 'ledninger fra motor', false, true).'

Er ting jeg ikke forstår ved denne Scoopie scooter er at baghjulet er sat fast med bagudvendt åbning i svingarmen.
Det må så vidt jeg kan tænke mig til være en dårlig ide hvis baghjulet ikke er spændt ordentligt fast og man bruges bagbremsen hårdt.
Det vil ifølge mig kunne gøre at baghjulet ryger af og det jo ikke godt.
Men det kan da godt være der er lavet en sikkerhedsanordning som jeg ikke kan se.
Umiddelbart ligner det også et sted som vil være meget udsat for rust.

Her ses baghjulet fra en EVT 168 hvor akslen er monteret i svinggaflen nedefra.
'.visbilled('1', 'billed3084.jpg', 'EVT 168 baghjul', false, true).'
Her ses et motorkabelskjold som beskytter kablet til motoren hvis scooteren vælter.
'.visbilled('1', 'billed3085.jpg', 'EVT 168 motor kabelbeskytter', false, true).'
').'

'.afsnit('ikke hub motor','
Motoren er her placeret væk fra baghjulet og kraften overføres gennem transmissionen.
Transmissionen kan bestå af 1 rem som på Peugeot E-Vivacity.
Eller 2 remme som på eGO Helio.
Eller en rem og reduktionsgear som på Peugeot Scoot\'elec.

'.afsnit('findes blandt andet på','
Peugeot Scoot\'elec
eGO Helio
').'

Her ses motoren fra Peugeot Scoot\'elec.
'.visbilled('1', 'billed0669.jpg', 'elektrisk motor peugeot scoot\'elec leroy somer', false, true).'
På Peugeot Scoot\'elec overføres kraften gennem en rem til reduktionsgearet og videre til baghjulet.

Her ses motoren fra Peugeot E-Vivacity.
'.visbilled('1', 'billed2000.jpg', 'elektrisk motor peugeot e-vivacity', false, true).'

Her ses motoren på en Govecs scooter.
'.visbilled('1', 'billed3611.jpg', 'govecs scooter motor', false, true).'
Her ses tandremmen som overfører kraften fra motoren til baghjulet på en Govecs scooter.
'.visbilled('1', 'billed3610.jpg', 'govecs tandrem', false, true).'

Her ses motoren fra eGO Helio.
'.visbilled('1', 'billed0672.jpg', 'elektrisk motor ego helio', false, true).'
På eGO Helio overføres kraften gennem 2 remme til baghjulet.
'.visbilled('1', 'billed1455.jpg', 'ego helio bælte rem', false, true).'
'.visbilled('1', 'billed1285.jpg', 'ego helio rem', false, true).'
Ser man på billedet af motoren kan man se at der er en rem i venstre side men at baghjulet har en rem i højre side.
Så der er formodentligt 2 remme og en eller anden aksel eller måske et gearsystem inden bag motoren.
').'

'.afsnit('børster eller ej','
En motor kan overfører elektricitet gennem nogle kul børster til spolerne på rotoren.
Andre motorer har ingen børster og kaldes børsteløse eller "brushless".
').'

'.afsnit('med kul børster','
Kul børster slides med tiden og skal udskiftes.
').'

'.visbilled('1', 'billed1305.jpg', 'Elektrisk motor hub hjul', false, true).'
'.visbilled('1', 'billed1304.jpg', 'Elektrisk motor hub hjul', false, true).'
Der er 8 børster i denne motor.
'.visbilled('1', 'billed1300.jpg', 'kulbørster elektrisk motor hub hjul adskilt', false, true).'
Børsterne rammer kommutatoren i bunden.
'.visbilled('1', 'billed1299.jpg', 'kommutator elektrisk motor hub hjul adskilt', false, true).'

Børsterne kan også knække.
'.visbilled('1', 'billed1301.jpg', 'knækket børster på elektrisk motor', false, true).'

Her ses en Ego Helio motor som bruger kul børster.
'.visbilled('1', 'billed1297.jpg', 'elektrisk motor ego helio', false, true).'
Kul børster er godt nok ikke med på billedet men man kan se kommutatoren hvor kul børsterne rammer.
'.visbilled('1', 'billed1298.jpg', 'elektrisk motor ego helio', false, true).'

Her ses en motor fra en Peugeot Scoot\'elec som bruger kul børster.
'.visbilled('1', 'billed3126.jpg', 'elektrisk motor peugeot scoot elec', false, true).'
Her er 1 af de 4 kulbørster taget op.
'.visbilled('1', 'billed3127.jpg', 'elektrisk motor peugeot scoot elec', false, true).'

'.afsnit('uden kul børster (børsteløs)','
Børsteløse motorer har ingen kul børster.
').'

Tror nok dette er en børsteløs motor.
'.visbilled('1', 'billed1463.jpg', 'motor uden børster', false, true).'

EVT 168 og Giantco E-Buddy bruger motor uden børster.

Her ses motoren på Giantco E-Buddy som skulle være uden kul børster.
'.visbilled('1', 'billed1290.jpg', 'giantco e-Buddy motor i baghjul bagbremse dæk', false, true).'
'.visbilled('1', 'billed3304.jpg', 'giantco e-Buddy motor', false, true).'
'.visflash('0', "http://www.youtube.com/watch?v=H0ppMNLr37s", 'Giantco E-Buddy motorlyd', true).'


Her ses motoren på en e-max scooter.
'.visbilled('1', 'billed3591.jpg', 'e-max motor', false, true).'
'.visbilled('1', 'billed3291.jpg', 'e-max motor', false, true).'
'.visbilled('1', 'billed3292.jpg', 'e-max motor', false, true).'

'.afsnit('yamaha YIPU AC Synchronous motor','
Her ses motoren på en Yamaha EC-03.
'.visbilled('1', 'billed3162.jpg', 'Yamaha EC-03 bag', false, true).'
Her ses en gennemskåret motor fra en Yamaha EC-03.
'.visbilled('1', 'billed3160.jpg', 'Yamaha EC-03 motor gennemskåret', false, true).'
YIPU motoren har sol og planet gear.
').'

'.afsnit('motorbremse med genopladning (regen)','
Nogle elektriske scootere oplader batterierne når motorbremsen er i funktion.
Motorbremsen er i funktion når man kommer kørende og giver slip på gashåndtaget sådan at scooteren taber fart.
Her vil motoren virke som en dynamo/generator som lave elektricitet som bruges til at oplade batterierne.

i stedet for at bruge forbremsen og bagbremsen kan man altså bruge motorbremsen og på den måde opnå længere rækkevidde end hvis man ikke have genopladnings funktionen.

Peugeot Scoot\'elec benytter sig at dette motorbremse genopladnings system.

Kaldes måske Ebrake.
').'

'.afsnit('motor effekt (watt)','
Motoren kan have en effekt på for eksempel 700, 1000, 1500 eller 2500 watt.
Effekten fortæller om motorens strømforbrug.
Der kan oplyses 2 forskellige motor effekt.
Et nominel (rated) forbrug som er lavest og et maksimum forbrug som er højest.

En motor kan være oplyst som 800 watt (nominel) og 1600 watt (maksimum).
Så vidt jeg ved betyder det at motoren ved almindelig kørsel bruger 800 watt og ved acceleration eller kørsel op af bakke kan strømbruget komme op på maksimalt 1600 watt.

Ved mange scootere oplyses der kun et tal ved motorens effekt og det er oplyses ikke altid om det er den nominelle eller maksimale effekt.

Hvis motoren oplyses som 48V1500W så kunne det betyde at motorens nominelle effekt er på 1500 watt.
').'

'.afsnit('motor typer','
Der er 2 motor typer der hedder "AC Asynchronous" og "Permanent Magnet Synchronous".
Jeg ved ikke så meget om det endnu.
').'
'

,'
hall sensor
' => '
På scootere med børsteløs motor kan der være noget som kaldes "hall sensor", "hall effekt sensor" eller "hall switch" som sidder i motoren og er forbundet med controlleren.

Hall sensorene register rotorens position.
Altså hvordan baghjulet er drejet.

Her ses en hall sensor.
'.visbilled('1', 'billed1302.jpg', 'hall sensor', false, true).'
Her ses 3 hall sensorer i en motor.
'.visbilled('1', 'billed1303.jpg', 'tre hall sensorer i motor', false, true).'
Her ses 3 hall sensorer i en anden motor.
'.visbilled('1', 'billed3117.jpg', 'tre hall sensorer i motor', false, true).'
Det ser ud til at der altid er 3 styks hall sensorer hvis det er en børsteløs motor.

Efter hvad jeg kan forstå får alle 3 hall sensorer +5 volt (rød) og stelforbindelse (sort) fra controlleren.
Hver sensor giver hver deres signal tilbage til controlleren så vist nok er enten 0 eller +5 volt alt efter rotorens position.
Nogle controllere giver +12 volt til hall sensorene i stedet for +5 volt også giver hall sensorene også +12 volt tilbage som signal.
'.visbilled('1', 'billed2984.jpg', 'hall sensor forbindelser', false, true).'
Stikket til hall sensorene har altså 5 ledninger.

Her ses hvordan hall sensorerne kan være forbundet fra motor til controller.
'.visbilled('1', 'billed2985.jpg', 'hall sensor el diagram', false, true).'
De 3 signaler fra hall sensorene bruges af controlleren til at finde ud af hvornår og gennem hvilken af de 3 fase ledningerne til motoren der skal sendes strøm.

Her ses 2 signaler.
Nederst ses signalet fra en af hall sensorene som tænder og slukker hårdt.
Øverst er strømmen til den motor fase som trigges af hall sensoren og den tænder og slukker med en "kurve".
'.visbilled('1', 'billed3132.jpg', 'hall sensor og motor fase signaler', false, true).'

Her er et billede jeg fik tilsendt om at teste hallsensorer med LED men jeg forstår det ikke helt.
'.visbilled('1', 'billed3912.jpg', 'simple circuit, Hall sensors monitoring.', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
