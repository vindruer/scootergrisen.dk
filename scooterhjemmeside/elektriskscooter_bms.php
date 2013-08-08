<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "Battery Management System - Elektrisk scooter";
$overskrift = "Battery Management System - Elektrisk scooter";
$metadescription = "i nogle elektriske scootere kan være noget elektronik som kaldes BMS (Battery Management System) som bruges i forbindelse med afladning og opladning";

$databasecenter = array(

'
battery management system
' => '
BMS står for Battery Management System.

BMS er elektronik som overvåger opladningen/afladningen af batterierne.

BMS findes på nogle elektriske scootere men ikke alle.

'.afsnit('BMS kan stå for følgende opgaver', '
'
.listemedgrafik(array(
    'Opladning og afladning.'
   ,'Kontroller om der aflades/oplades med for mange ampere.'
   ,'Temperaturmåling af batterierne. Kan stoppe opladningen fra hvis temperaturen bliver for høj.'
   ,'Balancering af battericeller sidst i opladningsprocessen. Så hver celle/batteri er lige meget opladt.'
   ,'State Of Charge (SOC) information.'
))
.'
').'
BMS kan være forbundet som det ses her.
'.visbilled('1', 'billed2593.jpg', 'battery management system', false, true).'

Her ses et BMS kort fra en Vectrix VX-1.
'.visbilled('1', 'billed2521.jpg', 'Vectrix VX-1 BMS', false, true).'

BMS elektronikken kan både findes ét sted som så overvåger alle cellerne/batterierne som en helhed eller på hvert enkelt celle/batteri som så kan overvåges hver for sig.

Det skulle være bedst at overvåge hver celle hver for sig.

Her ses noget BMS elektronik som monteres på hver celles + og - terminaler.
'.visbilled('1', 'billed3341.jpg', 'battery management system elektronik', false, true).'
Her ses en celle hvor BMS elektronikken sættes på.
'.visbilled('1', 'billed3340.jpg', 'battericelle', false, true).'
BMS elektronikken på hver celle forbindes med stik.
'.visbilled('1', 'billed3339.jpg', 'celler med battery management system elektronik på hver celle', false, true).'

'.kontaktmig(1).' gerne hvis du har mere information om BMS.

Det er vist ikke alle elektriske scootere der har BMS men jeg mangler info om dette.

'.visbilled('1', 'billed3353.jpg', 'elektrisk scooter system med oplader, BMS controller, 3 batterier', false, true).'
'.visbilled('1', 'billed3354.jpg', 'elektrisk scooter med 3 aftagelige batterier', false, true).'

'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
