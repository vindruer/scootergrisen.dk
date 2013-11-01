<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "Kendte problemer - Fejlfinding";
$overskrift = "Kendte problemer - Fejlfinding";
$metadescription = "fejl på scootere som jeg har hørt om flere gange";

$databasecenter = array(

'
kendte problemer
' => '
Problem :
Motor begyndte at tabe kraft og gå ud. Starter rimeligt normalt når er kold og går fint i tomgang i 30 sekunder også dør den. hvis gasser op kan den holde længere tid i tomgang men ender med at gå ud. hvis motoren har kørt og går ud kan den være længe om at starte.

Løsning :
Udstødnignsventilen havde ikke noget spillerum. Efter justering af udstødningsventil virkede motoren fint.



Problem :
Efter 3-5 minutter ligesom motoren bliver varm går den ud. Står den nogen dage mindst og startes igen kan den køre 3-5 minutter helt normalt igen.

Løsning :
Bor hul i benzindækslet.



Problem :
Motoren har svært ved at tage gas når det er vinter og den er kold.

Løsning :
Bortset fra at det kan være helt normalt at motoren skal køre i tomgang og varme op et par minutter så kan det muligvis hjælpe med et iridium tændrør.



'.afsnit('tændrør begynder at gniste når tændingen er drejet til ON','
Giantco ejere skriver om at deres tændrør begynder at gniste allerede når de sætter nøglen i tændingen og drejer til ON.
Fejlen skulle ligge i CDI boksen og løsningen skulle være at købe en ny CDI boks som de hos t-hansen kalder "CDI enhed B version".
').'



Problem :
Når man giver gas kan motoren ikke tage flere omdrejninger og den trækker næsten ikke.
Ned af bakke kan den tage lidt flere omdrejninger.

Løsning :
Gummimembran øverst på gasspjæld i karburator kan være revnet.



Problem :
I dag da jeg skulle på arbejde, kørte jeg 1km og så virkede det som om den druknede, den gik stadig i tomgang men hver gang jeg gav gas tog den omdrejninger i 5 sekunder og kunne ikke tage gas, det gjorde den hele vejen hjem.

Løsning :
Jeg gik alle slangerne efter og fandt en revnet vacuumslange, jeg skiftede den og så kørte dn perfekt.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
