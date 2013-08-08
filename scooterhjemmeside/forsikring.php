<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "forsikring";
$overskrift = "forsikring";
$metadescription = "information om forsikring til scootere/knallerter";

$linksarray = require_once('./php/linksdatabase.php');
$linksarray = $linksarray['forsikringsselskaber'];

if(isset($linksarray)){

      $noget = '';
      $noget .= galleri('start');

      foreach($linksarray as $link){

         $noget .= galleri('link', $link[0], $link[1], $link[2]);

      }

      $noget .= galleri('slut');
      $forsikringsselskaberkode = $noget;

}

$databasecenter = array(

'
introduktion
' => '
Forsikringer bruges i tilfælde af der sker skade på en person eller ting eller hvis scooteren bliver skadet eller stjålet.
'.visbilled('1', 'billed0145.jpg', 'smadret scooter', false, true).'

'.afsnit('kort sagt','
Ansvarsforsikring dækker skader du laver ved et uheld på andre personer eller andres ting.
Kaskoforsikring dækker skader på din scooter og hvis den bliver stjålet.
Ulykkesforsikring dækker skader på dig selv.
').'
'

,'
ansvarsforsikring
' => '
Ansvarsforsikringen kaldes en lovpligtig forsikring fordi man ifølge loven skal have denne forsikring.

Ansvarsforsikringen bruges ved en ulykke hvor der sker skade på andre personer eller andres ting.
Ansvarsforsikringen dækker ikke skader som er sket på dig selv eller på din scooter.

En ansvarsforsikring koster fra cirka 900 kroner om året.

Ansvarsforsikringen er bundet til scooteren og gælder derfor også hvis den lånes ud til en anden person.
Kører man ind i en bil eller person og bilen eller personen kommer til skade så skal man ikke betale noget selv.
Forsikringen betaler skaden.

En ansvarsforsikring dækker ikke hærværk, tyveri eller skader på din scooter og dig selv. Til det skal du bruge en kaskoforsikring.
'

,'
kaskoforsikring
' => '
En kaskoforsikring er en forsikring man kan købe udover ansvarsforsikringen.

Du bestemmer selv om du vil have en kaskoforsikring.

En kaskoforsikring koster fra cirka 3000-5000 kroner om året oven i ansvarsforsikringen.

Kaskoforsikringen bruges hvis scooteren får skade, brænder, bliver stjålet eller bliver udsat for hærværk..
Kaskoforsikringen gælder også det ekstraudstyr du har fået sat på.

Man kan enten få et kontant beløb til at få lavet skaden eller få scooteren på værksted og få sat scooteren i samme stand som den var før skaden skete.

Umiddelbart vil jeg ikke anbefale folk at købe en kaskoforsikring da det er meget dyrt.
Jeg vil i stedet anbefale at bruge pengene på nogle gode låse, alarm og eventuelt en GPS tracker.
'

,'
hvordan får jeg en forsikring ?
' => '
Køber du en ny scooter kan de typisk lave forsikringen i butikken.
Du bestemmer selv hvilket forsikringsselskab du vil have.
I butikken udfylder du nogle papir og forsikringen dækker allerede inden forsikringsselskabet har fået dine penge.

Du kan også få en forsikring ved at ringe til det forsikringsselskab som du vil have.

Hvis du har købt en brugt scooter så gælder den tidligeres ejers forsikring i 3 uger efter købet og du kan bestille en forsikring over telefonen og den vil dække med det samme selv inden du har betalt det girokort de sender til dig.
'

,'
forsikringsbevis
' => '
Her ses et forsikringsbevis fra topdanmark som blev udfyldt i butikken da jeg købte min scooter.
'.visbilled('1', 'billed0829.jpg', 'forsikringsbevis topdanmark', false, true).'
Som der står så træder forsikringen i kraft den dag scooteren registeres selv før man har fået policen og betalt forsikringen.

Forsikringsbeviset skal vistnok medbringes på scootere som ikke har nummerplade.
Hvis scooteren har nummerplade er det ikke nødvendigt at medbringe forsikringsbevis.
'

,'
forsikring ved køb og salg af brugt scooter
' => '
Sælger du din scooter eller køber en brugt så vil den nye ejer være dækket af sælgerens forsikring i 3 uger efter salget.
Det er så op til køberen at oprette en ny forsikring inden de 3 uger er gået.
'

,'
priser
' => '
Jeg har ringet rundt til forskellige forsikringsselskaber og spurgt hvad deres knallertforsikring koster.
De fleste selskaber nægter at fortælle deres priser så man selv kan regne det ud.
Nogle selskaber vil ikke engang fortælle en pris med mindre man fortæller dem sit CPR nummer.
Og på deres hjemmeside kan man ofte ikke selv finde prisen på knallertforsikringer fordi de bliver prioriteret lavere end for eksempel bilforsikringer.
Der står ofte at man skal ringe til dem for at få en pris.

Forsikrings prisen kommer i nogle selskaber an på ens alder, om scooteren er med eller uden nummerplade.
Nogen selskaber har forskellig pris på 30 og 45 km/t mens andre har samme pris.
Hos et selskab skulle man have en indboforsikring for også at kunne få en knallert forsikring.

Det virker som om flere forsikringsselskaber bevidst gør det uoverskueligt at få et overblik over knallertforsikring.
Det første år kan forsikringen desuden koste mere end den gør efterfølgende.

Så hvis du vil vide hvad en knallertforsikring koster så ring til de forskellige selskaber og spørg.
'

,'
regler
' => '
'.visfil('1', 'scooterhjemmeside/download/alka_forsikringsbetingelser.pdf', 'alka forsikrings betingelser').'

'.ahref('http://www.topdanmark.dk/download/?file=documents/058_tdk_6384_6.po.pdf', 'Vilkår for registreringspligtige knallerter - Topdanmark').'.
'

,'
forsikringsselskaber
' => '
'.$forsikringsselskaberkode.'
'

,'
telefon numre
' => '
'.
box(array('120', '120', '200')
   ,array(
       array('selskab'       ,'telefon nummer' ,'telefon tid')
      ,array('alka'          ,'70 12 14 16'    ,'Mandag-torsag : 8:00-21:00<br>Fredag : 8:00-16:30')
      ,array('alm brand'     ,'96 10 17 17'    ,'Mandag : 8:30 - 16:00<br>Tirsdag-torsdag : 8:30-19:00<br>Fredag : 8:30-16:00')
      ,array('codan'         ,'33 55 55 50'    ,'Mandag-torsdag 8:00-18:45<br>Fredag 8:00-16:00')
      ,array('if'            ,'70 12 12 12'    ,'8:30 - 16:00')
      ,array('top danmark'   ,'44 68 33 11'    ,'')
      ,array('tryg'          ,'70 11 20 20'    ,'Mandag-torsdag : 8:00-20:00<br>Fredag : 8:00-18:00')
   )
)
.'
'

,'
opsigelse
' => '
Så vidt jeg forstår kan en ansvarsforsikring opsiges med 1 måneds varsel men dette gælder vist ikke for kaskoforsikringen.

Der er en bruger som har skrevet til mig omkring opsigelse af forsikring.
Brugeren skriver at han ønskede at opsige sin kaskoforsikring men stadig ville beholde sin ansvarsforsikring men topdanmark sagde at man ikke kunne opsige en del af forsikringen på den måde men at man skulle opsige hele forsikringen.

'.afsnit('alka forsikrings betingelser','
'.afsnit('opsigelse § 36','
Forsikringen vedvarer, indtil den med mindst 1 måneds varsel opsiges skriftligt til en forsikringsperiodes udløb.
Efter enhver skade er såvel forsikringstager som ALKA indtil 1 måned efter erstatningens udbetaling, skadens afslutning eller afvisning, berettiget til at ophæve forsikringen med 14 dages varsel.
Hvis ALKA på grund af forsikringens forløb, f.eks. efter gentagne skadetilfælde, stiller skærpede betingelser for dens fortsættelse eller opsiger forsikringen, sker registreringen heraf i den del af auto mobilforsikringsselskabernes fællesregister for motorkøretøjsforsikring, som vedrører forsikringstagere, der frembyder en særlig risiko.
Samtidig med en sådan registrering gives der forsikringstageren meddelelse herom med nærmere oplysning om klageadgang m.v. Registrering af nævnte fællesregister (Amaliegade 10, 1256 København K, tlf. 33 13 75 55) sker på grundlag af en tilladelse, meddelt af Registertilsynet på en række vilkår.
').'

'.afsnit('fortrydelsesret ved nytegning','
Efter kapitel 4 a i lov om visse forbrugeraftaler, jf. lovbekendtgørelse nr. 886 af 23. december
1987, som ændret ved lov nr. 262 af 6. maj 1993, har De fortrydelsesret.

'.afsnit('fortrydelsesfristen','
Fortrydelsesfristen er 14 dage.
Fristen regnes fra den dag, hvor De har fået forsikringsbetingelserne i hænde. Fristen regnes
dog tidligst fra det tidspunkt, hvor De har modtaget underretning om, at forsikringsaftalen er
indgået, hvis De har fået forsikringsbetingelserne i hænde før dette tidspunkt. Hvis De f.eks.
modtager forsikringsbetingelserne mandag den 1., har De frist til og med mandag den 15.
Hvis fristen udløber på en helligdag, en søndag, en lørdag eller grundlovsdagen, den 5. juni,
kan De vente til den følgende hverdag.
').'

'.afsnit('hvordan fortryder De?','
Inden fortrydelsesfristens udløb skal De underrette ALKA om, at De har fortrudt aftalen.
Gives denne underretning pr. post, er det tilstrækkeligt, at De sender brevet inden fristens
udløb. Hvis De vil sikre Dem bevis for, at De har fortrudt rettidigt, kan De f.eks. sende brevet
anbefalet og opbevare postkvitteringen.
').'
').'
Kilde :
'.visfil('1', 'scooterhjemmeside/download/alka_forsikringsbetingelser.pdf', 'alka forsikrings betingelser').'
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
