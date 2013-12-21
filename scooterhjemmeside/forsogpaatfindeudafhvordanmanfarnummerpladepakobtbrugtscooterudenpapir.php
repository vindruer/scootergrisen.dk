<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "forsøg på at finde ud af hvordan man får nummerplade på købt brugt scooter uden papir - Rodekassen";
$overskrift = "forsøg på at finde ud af hvordan man får nummerplade på købt brugt scooter uden papir - Rodekassen";
$metadescription = "her samler jeg info om hvordan man får nummerplade på en scooter man har købt brugt men hvor der ikke fulgte nogen papir med som man skal bruge når man skal have nummerplade på";

$databasecenter = array(

'
forsøg på at finde ud af hvordan man får nummerplade på købt brugt scooter uden papir
' => '
'.visbilled('1', 'billed3621.jpg', 'ansøgning om registreringsattest', false, true).'
'.visfil('1', 'scooterhjemmeside/download/ansogning_om_ny_registreringsattest.pdf').'

Køb af scooter uden typeattest/registreringsattest.
Kan fås hos CRM (Centralregisteret for motorkøretøjer) selvom man ikke er sidste registeret ejer af køretøjet. Selvom der vist er en del bøvl hos CRM.

'.citat('
Hej igen.

I værste fald er der desværre ingen anden udvej end skrotning af køretøjet.
En erstatnings registreringsattest skal ansøges hos (CRM) SKAT af den sidste registrerede ejer af køretøjet.


Med venlig hilsen

Kurt Jensen
Trafikstyrelsen
').'

'.citat('
Hej! -Og godmorgen.

Det er kun det firma, der repræsenterer fabrikanten her i landet, der kan udstedes en typeattest til.
Hvis det drejer sig om en Lille Knallert, er der kun den mulighed, at du kan få udstedt et ny CoC-dokument hos fabrikanten.
Det dokumenterer, at det stelnummer der er påført CoC-dokumentet er i overensstemmelse med EU-godkendelsen.
Hvis det drejer sig om en Stor Knallert, er der tillige den mulighed, at du kan få lavet en Data-erklæring ved fabrikanten
eller et anerkendt prøvningslaboratorium. Det er forbundet med en vis udgift.


Med venlig hilsen

Kurt Jensen
Trafikstyrelsen
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
