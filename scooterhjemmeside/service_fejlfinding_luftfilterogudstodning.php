<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "Luftfilter og udstødning - Fejlfinding";
$overskrift = "Luftfilter og udstødning - Fejlfinding";
$metadescription = "find og ret fejl på scooterens/knallertens luftfiler, sekundært luftfilter, udstødning";

$databasecenter = array(

'
sekundært luftfilter
' => '
Afmonter de 2 tykke slanger på det sekundære luftfilter.
Tag vakuumslangen af ved indsugningstudsen.

Hold munden tæt om et de tykke huller og pust.
Der skal kunne komme luft ud af det andet store hul.

Sug nu kraftigt i vakuumslangen og klem slangen så vakuumet holdes.
Hold igen munden tæt om et af de tykke huller og pust.
Nu skulle der ikke kunne komme luft igennem til det andet store hul.

Man skal suge rimelig kraftigt før "air injection cutoff valve" lukker helt.
'.visbilled('1', 'billed0310.jpg', 'sekundært luftfiler med air injection cutoff valve', false, true).'
'

,'
udstødning
' => '
4 takt scootere skal helst ikke give røg fra udstødningen.
Dog kan der ved kold start godt komme lidt røg som aftager når motoren er blevet varmet op.
Dette skyldes at når motoren er kold er stempelringene trukket mest sammen og her vil en smule af olien kunne komme forbi mellem stempelringene og cylinder vægen.

Hvid røg fra udstødningen kan skyldes at ventilernes olie forsejlingsringe ikke slutter tæt.
Prøv at tage slangen af som sidder øverst på ventildækslet og se om der kommer hvid røg ud.

Der er en som har skrevet der kan være vand i udstødningen og at der ikke kan gnist før vandet blev fjernet.

'.afsnit('støj fra udstødningen','
• fej på air injection cut off valve
• fejl på vakuumslange
• fejl på reed valve
').'

'.afsnit('hvid røg fra udstødning (på 4 takt motor)','
• slidte ventilkrop eller ventilstyr
• skadet ventil tætningsringe
• slidt oliering på stempel
• slidt cylinder
• motorolie niveau for højt
').'

'.afsnit('hvid/blå røg fra udstødning (på 2 takt motor)','
• oliepumpe kabel forkert justeret
• olie i udstødningssystem (hvis scooteren bruges til korte ture så ophobes olien i udstødningen. Kør en lang tur for at brænde olien af)
').'

'.afsnit('sort røg (for fed blanding)','
• tilstoppet luftfilter
• hoveddyse for stor eller løs
• fejl på automatisk choker
• forkert svømmerhøjde
• nåleventil lukker ikke rigtigt
').'

'.afsnit('brun røg (mager blanding)','
• hoveddyse for lille eller tilstoppet
• benzin flyder ikke frit
• nåleventil åbner ikke nok
• forkert svømmerhøjde
• bukket benzinslange
• luft utæt omkring karbuartor/indsugningsstuds
• fejl på luftfilter
• forkert tændingstiming
').'

'.afsnit('unormal støj','
• forkert ventil spillerum
• ventil sætter sig fast eller ventil fjeder knækket
• skadet eller slidt knastaksel
• slidt knastkæde strammerblad
• slidt knastaksel og rocker arme
').'

'.afsnit('for meget røg fra udstødningen','
• slidte eller skadet stempelringe
• slidt eller skadet cylinder og stempel
').'

'.afsnit('udstødning siger knald ved deacceleration','
• mager blanding i tomgangs system
• fejl på air cut off valve
').'

'.afsnit('højt CO niveau i tomgang','
• skadet eller tilstoppet reed valve
• skader eller tilstoppet air injection cut off valve
• tilstoppet luftfilter
').'

'.afsnit('"backfiring" ved pludselig deacceleration','
• skadet reed valve (virker ikke)
• fejl på air injection cut off valve (kan ikke lukke)
• karburator er forkert indstillet
• fejl på air cut off valve
• utæt vakuumslange
').'
'

,'
2 takt motor røg og overophedning
' => '
'.afsnit('2 takt motor med oliepumpe','
'.afsnit('for meget røg eller/og kulstof på tændrør','
• oliepumpen pumper for meget olie
• lav motorolie kvalitet
').'

'.afsnit('overophedning eller stempel har sat sig','
• ingen olie i olietank eller tilstoppet olieslanger
• luft i olieslanger
• oliepumpe pumper for lidt olie
• tilstoppet oliesi/oliefilter
• olien flyder ikke ud af olietanken
• tilstoppet atmosfærisk hul på olietankdæksel
').'
').'

'.afsnit('2 takt motor uden oliepumpe','
'.afsnit('for meget røg eller/og kulstof på tændrør','
• forkert dyse størrelse, luft temperatur og bane tilstand ?
• for meget olie i benzinen
• benzin/olien blandingen er for gammel. Benzin har fordampet.
').'

'.afsnit('overophedning eller stempel har sat sig','
• frokert dyse størrelse, luft temperatur og bane tilstand ?
• benzin/olie blanding er for gammel. Oxideret olie/dårlig smørrelse
• Dårlig olie kvalitet
• Forkert blandingsforhold. For lidt olie iforhold til benzin.
• Det rigtige blandingsforhold er ikke brugt.
').'

').'
'


);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
