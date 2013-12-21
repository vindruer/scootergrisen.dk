<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "Kendte problemer - Fejlfinding";
$overskrift = "Kendte problemer - Fejlfinding";
$metadescription = "fejl på scootere som jeg har hørt om flere gange";

$databasecenter = array(

'
problem 1
' => '
'.afsnit('problem','
Motor begyndte at tabe kraft og gå ud. Starter rimeligt normalt når er kold og går fint i tomgang i 30 sekunder også dør den. hvis gasser op kan den holde længere tid i tomgang men ender med at gå ud. hvis motoren har kørt og går ud kan den være længe om at starte.
').'
'.afsnit('løsning','
Udstødnignsventilen havde ikke noget spillerum. Efter justering af udstødningsventil virkede motoren fint.
').'
'

,'
problem 2
' => '
'.afsnit('problem','
Efter 3-5 minutter ligesom motoren bliver varm går den ud. Står den nogen dage mindst og startes igen kan den køre 3-5 minutter helt normalt igen.
').'
'.afsnit('løsning','
Bor hul i benzindækslet.
').'
'

,'
problem 3
' => '
'.afsnit('problem','
Motoren har svært ved at tage gas når det er vinter og den er kold.
').'
'.afsnit('løsning','
Bortset fra at det kan være helt normalt at motoren skal køre i tomgang og varme op et par minutter så kan det muligvis hjælpe med et iridium tændrør.
').'
'

,'
problem 4
' => '
'.afsnit('problem','
tændrør begynder at gniste når tændingen er drejet til ON.
').'
'.afsnit('løsning','
Giantco ejere skriver om at deres tændrør begynder at gniste allerede når de sætter nøglen i tændingen og drejer til ON.
Fejlen skulle ligge i CDI boksen og løsningen skulle være at købe en ny CDI boks som de hos t-hansen kalder "CDI enhed B version".
').'
'

,'
problem 5
' => '
'.afsnit('problem','
Når man giver gas kan motoren ikke tage flere omdrejninger og den trækker næsten ikke.
Ned af bakke kan den tage lidt flere omdrejninger.
').'
'.afsnit('løsning','
Gummimembran øverst på gasspjæld i karburator kan være revnet.
').'
'

,'
problem 6
' => '
'.afsnit('problem','
I dag da jeg skulle på arbejde, kørte jeg 1km og så virkede det som om den druknede, den gik stadig i tomgang men hver gang jeg gav gas tog den omdrejninger i 5 sekunder og kunne ikke tage gas, det gjorde den hele vejen hjem.
').'
'.afsnit('løsning','
Jeg gik alle slangerne efter og fandt en revnet vacuumslange, jeg skiftede den og så kørte dn perfekt.
').'
'

,'
problem 7
' => '
'.afsnit('problem','
Skivebremse går stramt.
Når man har bremset og givet slip på bremsegrevet så drejer hjulet ikke frit rundt.
Der er hvidt pulver mellem bremsekaliperen og gummiringene omkring stemplet som gør at gummiringene bliver presset for hårdt ind på stemplet så det har svært ved at trække sig ind.
').'
'.afsnit('løsning','
Fjern alt det hvide pulver.
Da det kræver at man taget stemplet ud så vil bremsevæske komme ud og det skal man så være klar til at samle op og når bremsekaliperen er renset og sat på igen så skal der fyldes ny bremsevæske på og bremsesysemet skal udluftes.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
