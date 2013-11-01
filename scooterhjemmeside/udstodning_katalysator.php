<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "katalysator - Luftfilter og udstødning";
$overskrift = "katalysator - Luftfilter og udstødning";
$metadescription = "katalysatoren er et 'net' der sidder i udstødningen og hjælper med at omdanne skadelige udstødningsgasser til mindre skadelige stoffer";

$databasecenter = array(

'
katalysator
' => '
En katalysator er et stof som hjælper med en kemisk reaktion uden selv at blive ændret.

I en udstødning med katalysator sidder et "net" med stor overflade som er belagt med stofferne platin (Pt), palladium (Pd) eller rhodium (Rh) som er katalysatorerne.

Katalysatorstofferne sidder på det runde "net" som ligner bølgepap.
'.visbilled('1', 'billed2109.jpg', 'udstødning med katalysator', false, true).'
'.visbilled('1', 'billed2108.jpg', 'udstødning med katalysator', false, true).'
Katalysatoren omdanner skadelige udstødningsgasser til mindre skadelige stoffer.

'.afsnit('udstødningsgasserne består blandt andet af','
Kulbrinte (HC) som er uforbrændt benzin
Kulilte (CO)
Kuldioxid ('.kemiskformel('CO2').')
Kvælstofilte (NOx)
').'

En 2 vejs katalysator kan omdanner 2 stoffer. HC og CO
En 3 vejs katalysator kan omdanner 3 stoffer. HC og CO og NOx

NOx laves om til '.kemiskformel('O2').' og '.kemiskformel('N2').' ved at tilføje ilt.
CO laves om til '.kemiskformel('CO2').' ved at tilføje ilt.
HC laves om til '.kemiskformel('CO2').' og '.kemiskformel('H2O').'.

Katalysatoren begynder at virke når katalysatoren er cirka 300 °Celsius.
Katalysatoren virker bedst når den er cirka 600 °Celsius.
Hvis temperaturen overstiger 900-1000 °Celsius så bliver den aktive overflade ødelagt.

Der tilføjes luft til udstødningsgasserne før de når katalysatoren for at hjælpe med at omdanne gasserne.
Den ekstra luften ilter udstødningsgasserne.
Katalysatoren spalter kvælstofilte (NOx) til '.kemiskformel('N2').' og '.kemiskformel('O2').'.
Kulilte (CO) og kulbrinte (HC) omdannes ved hjælp af den tilføjte luft til vanddamp og kuldioxid.

'.afsnit('blyholdig benzin','
Hvis man bruger blyholdig benzin så sætter blyet sig fast på katalysator stofferne og katalysatoren holder op med at virke.
Derfor skal man ikke bruge benzin med bly. Men det er vist ikke noget problem da man vist ikke kan købe benzin med bly mere.
').'

Under optimale forhold består udstødningsgasserne efter katalysatoren primært af '.kemiskformel('O2').', '.kemiskformel('N2').', CO2 og '.kemiskformel('H2O').'.
Katalysatoren virker bedst når motoren kører med et blandingsforhold på mellem 14,6-14,8 dele luft til 1 del benzin (vægtmæssigt).
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
