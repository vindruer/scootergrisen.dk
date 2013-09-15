<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "spoler - Elektrisk";
$overskrift = "spoler - Elektrisk";
$metadescription = "elektriske spoler der sidder på scootere/knallerter som pickupspole, fødespole, ladespole, lysspole, tændspole";

$databasecenter = array(

'
generator
' => '
Generatoren består af et svinghjul med magneter og en stator med en eller flere spoler.
'.visbilled('1', 'billed0897.jpg', 'generator svinghjul stator pickup', false, true).'

Når motoren køre så drejer svinghjulet rundt og der laves strøm i spolerne til scooterens lys og til opladning af batteriet.
Hvis scooteren har en AC CDI så er der også en spole som laver strøm til CDI boksen.

Generatoren findes på højre side af motoren under blæserskjoldet.
'.visbilled('1', 'billed0050.jpg', 'blæserskjold generator', false, true).'
Den gule og den lyserøde ledning går til generatorens spole.
'.visbilled('1', 'billed1765.jpg', 'generator og pickup ledninger', false, true).'
Under '.ahref('motor_svinghjul.php', 'svinghjulet').' sidder statoren.

Her ses statoren.
'.visbilled('1', 'billed3375.jpg', 'stator', false, true).'
'.
galleriholder(array(
    galleri('highslide', '', 'billed3808.jpg', array('Kymco Agility motor', 'stator og pickup'))
))
.'
Denne stator har én spole.
'.visbilled('1', 'billed3387.jpg', 'stator', false, true).'
'.visbilled('1', 'billed3401.jpg', 'stator', false, true).'
'.visbilled('1', 'billed3402.jpg', 'stator', false, true).'
'.visbilled('1', 'billed3403.jpg', 'motorblok hvor stator og pickup er taget af', false, true).'
Denne stator har i hvert fald 2 spoler.
Den del af statoren hvor der er viklet tape omkring ledningerne er tændingsspolen ("source coil" eller "excitation coil" på engelsk) som laver strøm til CDI boksen på scootere med AC CDI.
'.visbilled('1', 'billed0824.jpg', 'stator', false, true).'
'.visbilled('1', 'billed1554.jpg', 'stator og pickup', false, true).'

'.visbilled('1', 'billed3543.jpg', 'stator og pickup CPI Oliver City', false, true).'
'.visbilled('1', 'billed3545.jpg', 'stator og pickup CPI Oliver City', false, true).'

'.visbilled('1', 'billed3381.jpg', 'stator og pickup', false, true).'
'.visbilled('1', 'billed3382.jpg', 'stator og pickup', false, true).'
'.visbilled('1', 'billed3383.jpg', 'stator og pickup', false, true).'
'.visbilled('1', 'billed2548.jpg', 'stator og pickup', false, true).'
På ældre knallerter er hver spole gerne viklet om generatorankre.
'.visbilled('1', 'billed2325.jpg', 'stator og pickup', false, true).'
'.visbilled('1', 'billed2549.jpg', 'generatoranker for vekselstrøm', false, true).'
'.visbilled('1', 'billed2550.jpg', 'generatoranker for brokoblet ensrettet jævnstrøm', false, true).'
Når motoren køre vil svinghjulet dreje rundt og der bliver lavet elektricitet i statorens spoler fordi magnetfeltet ændre sig.
Jo hurtigere motoren køre jo flere volt vil spolerne danne.
En spændingsregulator bruges så til at begrænse hvor mange volt der skal sendes videre til det elektriske udstyr som batteri og lys.

'.afsnit('generator spoler','
Nogle scootere har 1 spole i generatoren som bruges til både forlyset og til opladning af batteriet.
Andre scootere har 1 spole til forlyset og 1 spole til opladning af batteriet.

Her kan man se forskellen på hvordan en generator med 1 spole og 2 spoler kan se ud i el diagrammer.
'.visbilled('1', 'billed1788.jpg', 'generator el diagram 1 spole 2 spoler', false, true).'
').'

Statorens spoler er forbundet med spændingsregulatoren.
'.visbilled('1', 'billed0285.jpg', 'generator cd batteri spændingsregulator', false, true).'
'.visbilled('1', 'billed0277.jpg', 'generator spændingsregulator batteri tegning', false, true).'
Generatoren på en Kymco Super 8 4T har en kapacitet på 144 watt ved 5000 o/min.
Det vil sige at generatoren maksimalt kan levere 144 watt til alt elektrisk udstyr på scooteren.
Hvis der er et større forbrug vil det gå ud over batteri opladningen.

Generatoren laver vekselstrøm.

De fleste 50 cm³ scootere har en generator med 1 fase fordi de har et lille strøm forbrug.
'.visbilled('1', 'billed0033.jpg', 'generator spole vekselstrøms kurve magneter svinghjul 1 fase', false, true).'

Der findes også generatorer med 3 faser som bruges på scootere med stort strømforbrug.
'.visbilled('1', 'billed0034.jpg', 'generator spole vekselstrøms kurve magneter svinghjul 3 faser', false, true).'

Ved at afmontere stikket fra statoren til spændingsregulatoren har jeg i tomgang målt 46 volt.
Og ved fuld hastighed har jeg målt 111 volt.
'

,'
spoler
' => '
Jeg syns det har været lidt svært at forstå hvad de forskellige spoler hedder og er til og det ser ud til at variere meget fra scooter til scooter hvor mange spoler der er og hvad de er forbundet til.

Her vil jeg skrive om spolernavne, ohm værdier og det jeg tror jeg ved om spoler indtil videre.
'.visbilled('1', 'billed2703.jpg', 'generator spoler tegning', false, true).'
'.visbilled('1', 'billed2740.jpg', 'generator spoler tegning', false, true).'

'.
box(array('120', '120', '120', '120')
   ,array(
       array('dansk spolenavn'            ,'engelsk spolenavn'                               ,'har forbindelse til'   ,'forklaring')
      ,array('pickupspole'                ,'pickup coil<br>pulse coil<br>pulse generator'  ,'CDI boksen'            ,'generer pulssignal hver gang svinghjulet drejer en omgang som bruges af CDI boksen til at beregne tidspunktet hvor tændrøret skal give gnist')
      ,array('fødespole ?'                ,'exciter coil<br>source coil'                    ,'CDI boksen'            ,'Findes på scootere med AC CDI.<br>Generer cirka 200 volt vækselstrøm til CDI boksen som af CDI boksen sendes videre til tændspolen når tændrøret skal give gnist')
      ,array('ladespole'                  ,'charging coil'                                   ,'spændingsregulator'    ,'bruges til at oplade batteriet når motoren køre')
      ,array('lysspole'                   ,'lighting coil'                                   ,'forlyspære når forlyset er tændt på lyskontakten.<br>Lysmodstand når forlyset er slukket på lyskontakten.'              ,'generer vækselstrøm som bruges til forlys pæren(e).')
   )
)
.'

'.visbilled('1', 'billed2704.jpg', 'tændspole tegning', false, true).'
'.
box(array('120', '120', '120', '120')
   ,array(
       array('dansk spolenavn'            ,'engelsk spolenavn'                               ,'er forbundet med'   ,'forklaring')
      ,array('tændspole'                  ,'ignition coil'                                   ,'Primærspolen er forbundet med CDI boks og stel.<br>Sekundærspolen er forbundet med tændrørets centerelektrode gennem tændrørskablet.'   ,'Primærspolen fås cirka 200 volt af CDI boksen som i tændspolen laves om til cirka 20000 volt som sendes til tændrørets centerelektrode.')
   )
)
.'

På ældre knallerter som nogle modeller af Puch Maxi kan tændspolen være indbygget i generatoren.
Desuden kan der være ekstra spoler til forlys, stoplys og baglys som her har hver sin spole.
'.visbilled('1', 'billed2705.jpg', 'tændspole tegning', false, true).'

Her er nogen eksempler på hvad spolernes Ohm værdi kan være.
Spolernes Ohm værdier variere fra scooter til scooter så check i scooterens servicemanual for de rigtige værdier.
'.
box(array('150', '150', '100')
   ,array(
       array('spole'                     ,'eksempler på Ohm værdier'   ,'')
      ,array('pickup'                    ,'50-200 (100 cm³)<br>602 ± 20% (50 cm³)<br>80-160<br>40-300<br>cirka 150'   ,'')
      ,array('? exciter coil'            ,'400-800 (100 cm³)<br>115 ± 20% (50 cm³)<br>cirka 550'   ,'')
      ,array('ladespole'                 ,'0,2-1,0<br>0,1-1,0<br>0,2-1,2'   ,'')
      ,array('lysspole'                  ,'0,2-0,8<br>0,1-0,8<br>0,1-1,0'   ,'')

      ,array('tændspole primærspole'     ,'0,21±10% (100 cm³)<br>0,31 ± 15%<br>190-230<br>0,1-1,0<br>cirka 1'   ,'')
      ,array('tændspole sekundærspole'   ,'3000-5000<br>8200-9300<br>5000'   ,'')
   )
)
.'
'

,'
pickup
' => '
Pickupen indeholder en spole som sender et puls signal på op til 2,1 volt til CDI boksen hver gang svinghjulet har drejet 1 omgang.
CDI boksen bruger signalet til at beregne hvornår tændrøret skal give gnist.

Pickupen sidder gerne på højre side af motoren øverst lige inden under blæserskjoldet.
Pickupen kaldes også for pulser eller pulser coil på engelsk.
'.visbilled('1', 'billed0051.jpg', 'blæserskjold pickup', false, true).'
Her ses ledningen der går ned til pickupen og generatoren.
'.visbilled('1', 'billed0052.jpg', 'generator pickup ledning', false, true).'
Den blå/gule ledning med gennemsigtig plastik på enden går til pickupens spole.
'.visbilled('1', 'billed1766.jpg', 'pickup og generator ledning', false, true).'
Her ses pickupen.
Når forhøjningen på svinghjulet nærmer sig og forlader pickupen vil der blive dannet elektricitet i pickupens spole.
Forhøjningen på svinghjulet kaldes reluctor eller rotor reluctor på engelsk.
'.visbilled('1', 'billed0290.jpg', 'pickup', false, true).'
Her ses den gule/blå ledning igen. Pickupen har stelforbindelse igennem metalpladen med de 2 skruehuller.
'.visbilled('1', 'billed0494.jpg', 'pickup ledninger', false, true).'
Her ses en pickup med 2 ledninger (grøn/hvid og hvid/blå).
Da denne pickup har 2 ledninger bruger den formodentligt ikke stelforbindelse igennem metalpladen.
'.visbilled('1', 'billed3542.jpg', 'pickup CPI Oliver City', false, true).'
Pickupen er magnetisk.
'.visbilled('1', 'billed0288.jpg', 'pickup/pulser', false, true).'
'.afsnit('info som jeg ikke ved om er rigtigt men det er muligvis brugbart','
På svinghjulet sidder en forhøjning som passere pickupen når motoren køre.
'.visbilled('1', 'billed3030.jpg', 'svinghjul forhøjning', false, true).'
Forhøjningen kan have forskellig længe fra scooter til scooter og markerer det tidligst mulige og seneste mulige tændingspunkt.
'.visbilled('1', 'billed0960.jpg', 'svinghjul forhøjning tændingspunkt', false, true).'
Når forhøjningen nærmer sig pickupen dannes der en positiv puls på omkring +2 volt.   
Når forhøjningen forlader pickupen så dannes der en negativ puls på omkring -2 volt.
'.visbilled('1', 'billed1000.jpg', 'pickup volt', false, true).'
').'

Her ses signalet fra pickupen når motoren køre ved meget lav hastighed.
Opløsning : (X : 5ms/div, Y : 2V/div)
Jeg håber volt og ms er angivet rigtigt på billedet men det er ikke sikkert.
'.visbilled('1', 'billed1104.jpg', 'signal fra pickup til CDI', false, true).'
'

,'
tændspole
' => '
Tændspole kaldes også for højspændingsspole.

Tændspolen er på den ene side forbundet med CDI boksen og stel.
Den grønne ledning er forbundet med stel.
Den tynde sorte ledning er forbundet med CDI boksen.

På den anden side sidder det tykke tændrørskabel som er forbundet med tændrørshætten.

Tændspolens funktion er at lave de lave volt fra CDI boksen om til høje volt som kan få en gnist til at springe mellem tændrørets elektroder.

'.visbilled('1', 'billed0287.jpg', 'tændspole', false, true).'
Tændspolen laver de 220 volt (eller måske 400-600 volt) fra CDI boksen om til 20000 (eller måske 40000 volt).

Sådan kan en tændspole se ud i et el diagram.
'.visbilled('1', 'billed2694.jpg', 'tændspole tegning', false, true).'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
