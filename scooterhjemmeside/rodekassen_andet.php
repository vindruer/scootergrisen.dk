<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "andet - Rodekassen";
$overskrift = "andet - Rodekassen";
$metadescription = "diverse info om diverse emner som ikke rigtig passer ind på nogen af de andre sider og som der ikke er særlig meget info om endnu";

$databasecenter = array(

'
giantco filer med kode beskyttelse
' => '
Jeg har nogen Giantco filer der kræver en kode for at man kan åbne dem.
Jeg kender ikke koden. Hvis du gør så '.kontaktmig().' gerne.
'.visfil('1', 'scooterhjemmeside/download/giantco_kodebeskyttet.zip', 'Giantco filer med kodebeskyttelse').'
Alle filerne skulle være beskyttet med 128-bit RC4 encryption (Acrobat 5 compatible).
Jeg har prøvet at gætte koden til 50cc 4t_engine v4.8(2008-7-12) og nåede til "aafuabi" før jeg ikke gad mere.
'

,'
T Hansen scooter priser gennem tiden
' => '
12-09-2013 (vga mover sat ned til 9.999,-) :

   VGA MOVER 30 km/t Tilbud Varenr.: 73300100000 VGA MOVER 30 km/t Sammenlign Kr. 9.999,00
   VGA Mover 45 km/t Tilbud Varenr.: 73300100050 VGA Mover 45 km/t Sammenlign Kr. 9.999,00
   VGA Versus 30 km/t 2-takt sort Varenr.: 73250100000 VGA Versus 30 km/t 2-takt sort Sammenlign Kr. 6.999,00
   VGA Versus 30 km/t 4-takt vandkølet sort NYHED Varenr.: 73250100001 VGA Versus 30 km/t 4-takt vandkølet sort Sammenlign Kr. 8.999,00
   VGA Versus 45 km/t 2-takt sort Varenr.: 73250100050 VGA Versus 45 km/t 2-takt sort Sammenlign Kr. 6.999,00
   VGA Versus 45 km/t 4-takt vandkølet sort NYHED Varenr.: 73250100051 VGA Versus 45 km/t 4-takt vandkølet sort Sammenlign Kr. 8.999,00
   VGA Grido 30 km/t sort/rød/grøn ITALY Varenr.: 73200100001 VGA Grido 30 km/t sort/rød/grøn ITALY Sammenlign Kr. 7.999,00
   VGA Grido 45 km/t sort/hvid Restsalg Varenr.: 73200100050 VGA Grido 45 km/t sort/hvid Sammenlign Før Kr. 7.999,00 Kr. 6.999,00
   VGA Grido 45 km/t sort/rød/grøn ITALY Varenr.: 73200100051 VGA Grido 45 km/t sort/rød/grøn ITALY Sammenlign Kr. 7.999,00
   VGA Digita 30 km/t Sort Dellorto Varenr.: 73100100001 VGA Digita 30 km/t Sort Dellorto Sammenlign Kr. 6.499,00
   VGA Digita 45 km/t sort Dellorto Varenr.: 73100100051 VGA Digita 45 km/t sort Dellorto Sammenlign Kr. 6.499,00
   VGA Digita 30 km/t sort PAKKETILBUD Tilbud Varenr.: 73100100049 VGA Digita 30 km/t sort PAKKETILBUD Sammenlign Før Kr. 7.497,00 Kr. 5.997,00
   VGA Digita 45 km/t sort PAKKETILBUD Tilbud Varenr.: 73100100099 VGA Digita 45 km/t sort PAKKETILBUD Sammenlign Før Kr. 7.497,00 Kr. 5.997,00

25-07-2013 (nyhed : versus 4 takt) :

   VGA MOVER 30 km/t Varenr.: 73300100000 VGA MOVER 30 km/t Sammenlign VGA MOVER 30 km/t Kr. 13.999,00 Kr. 13.999,00
   VGA Mover 45 km/t Varenr.: 73300100050 VGA Mover 45 km/t Sammenlign VGA Mover 45 km/t Kr. 13.999,00 Kr. 13.999,00
   VGA Versus 30 km/t 2-takt sort Varenr.: 73250100000 VGA Versus 30 km/t 2-takt sort Sammenlign VGA Versus 30 km/t 2-takt sort Kr. 6.999,00 Kr. 6.999,00
   VGA Versus 30 km/t 4-takt vandkølet sort NYHED  Varenr.: 73250100001 VGA Versus 30 km/t 4-takt vandkølet sortammenlign VGA Versus 30 km/t 4-takt vandkølet sort Kr. 8.999,00 Kr. 8.999,00
   VGA Versus 45 km/t 2-takt sort Varenr.: 73250100050 VGA Versus 45 km/t 2-takt sort Sammenlign VGA Versus 45 km/t 2-takt sort Kr. 6.999,00 Kr. 6.999,00
   VGA Versus 45 km/t 4-takt vandkølet sort NYHED Varenr.: 73250100051 VGA Versus 45 km/t 4-takt vandkølet sort Sammenlign VGA Versus 45 km/t 4-takt vandkølet sort Kr. 8.999,00 Kr. 8.999,00
   VGA Grido 30 km/t sort/rød/grøn ITALY Varenr.: 73200100001 VGA Grido 30 km/t sort/rød/grøn ITALY Sammenlign VGA Grido 30 km/t sort/rød/grøn ITALY Kr. 7.999,00 Kr. 7.999,00
   VGA Grido 45 km/t sort/rød/grøn ITALY Varenr.: 73200100051 VGA Grido 45 km/t sort/rød/grøn ITALY Sammenlign VGA Grido 45 km/t sort/rød/grøn ITALY Kr. 7.999,00 Kr. 7.999,00
   VGA Digita 30 km/t Sort Dellorto Varenr.: 73100100001 VGA Digita 30 km/t Sort Dellorto Sammenlign VGA Digita 30 km/t Sort Dellorto Kr. 6.499,00 Kr. 6.499,00
   VGA Digita 45 km/t sort Dellorto Varenr.: 73100100051 VGA Digita 45 km/t sort Dellorto Sammenlign VGA Digita 45 km/t sort Dellorto Kr. 6.499,00 Kr. 6.499,00
   VGA Digita 30 km/t sort PAKKETILBUD  Tilbud Varenr.: 73100100049 VGA Digita 30 km/t sort PAKKETILBUD Sammenlign VGA Digita 30 km/t sort PAKKETILBUD Kr. 5.996,00 Før Kr. 7.396,00 Kr. 5.996,00
   VGA Digita 45 km/t sort PAKKETILBUD  Tilbud  Varenr.: 73100100099 VGA Digita 45 km/t sort PAKKETILBUDammenlign VGA Digita 45 km/t sort PAKKETILBUD Kr. 5.996,00 Før Kr. 7.396,00 Kr. 5.996,00

21-05-2013 :

   VGA Digita 45 km/t sort/hvid/blå Restsalg Varenr.: 73100100050 VGA Digita 45 km/t sort/hvid/blå Sammenlign VGA Digita 45 km/t sort/hvid/blå Kr. 4.999,00 Før Kr. 5.999,00 Kr. 4.999,00
   VGA Digita 30 km/t Sort Dellorto Tilbud Varenr.: 73100100001 VGA Digita 30 km/t Sort Dellorto Sammenlign VGA Digita 30 km/t Sort Dellorto Kr. 5.999,00 Før Kr. 6.499,00 Kr. 5.999,00
   VGA Digita 45 km/t sort Dellorto Tilbud Varenr.: 73100100051 VGA Digita 45 km/t sort Dellorto Sammenlign VGA Digita 45 km/t sort Dellorto Kr. 5.999,00 Før Kr. 6.499,00 Kr. 5.999,00
   VGA Versus 30 km/t sort Varenr.: 73250100000 VGA Versus 30 km/t sort Sammenlign VGA Versus 30 km/t sort Kr. 6.999,00 Kr. 6.999,00
   VGA Versus 45 km/t sort Varenr.: 73250100050 VGA Versus 45 km/t sort Sammenlign VGA Versus 45 km/t sort Kr. 6.999,00 Kr. 6.999,00
   VGA Grido 30 km/t sort/rød/grøn ITALY Varenr.: 73200100001 VGA Grido 30 km/t sort/rød/grøn ITALY Sammenlign VGA Grido 30 km/t sort/rød/grøn ITALY Kr. 7.999,00 Kr. 7.999,00
   VGA Grido 45 km/t sort/rød/grøn ITALY Varenr.: 73200100051 VGA Grido 45 km/t sort/rød/grøn ITALY Sammenlign VGA Grido 45 km/t sort/rød/grøn ITALY Kr. 7.999,00 Kr. 7.999,00
   VGA MOVER 30 km/t Varenr.: 73300100000 VGA MOVER 30 km/t Sammenlign VGA MOVER 30 km/t Kr. 13.999,00 Kr. 13.999,00
   VGA Mover 45 km/t Varenr.: 73300100050 VGA Mover 45 km/t Sammenlign VGA Mover 45 km/t Kr. 13.999,00 Kr. 13.999,00

31-01-2013 :

   VGA Digita 30 km/t sort/hvid/blå Restsalg Varenr.: 73100100000 VGA Digita 30 km/t sort/hvid/blå Sammenlign  VGA Digita 30 km/t sort/hvid/blå Kr. 4.999,00 Før Kr. 5.999,00 Kr. 4.999,00
   VGA Digita 45 km/t sort/hvid/blå Restsalg Varenr.: 73100100050 VGA Digita 45 km/t sort/hvid/blå Sammenlign  VGA Digita 45 km/t sort/hvid/blå Kr. 4.999,00 Før Kr. 5.999,00 Kr. 4.999,00
   VGA Digita 30 km/t Sort Dellorto Varenr.: 73100100001 VGA Digita 30 km/t Sort Dellorto Sammenlign  VGA Digita 30 km/t Sort Dellorto Kr. 6.499,00 Kr. 6.499,00
   Scooter Digita 30 km/t PAKKETILBUD Tilbud Varenr.: 73100100049 Scooter Digita 30 km/t PAKKETILBUD Scooter Digita 30 km/t PAKKETILBUD Kr. 5.998,00 Før Kr. 7.498,00 Kr. 5.998,00
   VGA Digita 45 km/t sort Dellorto Varenr.: 73100100051 VGA Digita 45 km/t sort Dellorto Sammenlign   VGA Digita 45 km/t sort Dellorto Kr. 6.499,00 Kr. 6.499,00
   Scooter Digita 45 km/t PAKKETILBUD  Tilbud  Varenr.: 73100100099 Scooter Digita 45 km/t PAKKETILBUD   Scooter Digita 45 km/t PAKKETILBUD Kr. 5.998,00 Før Kr. 7.498,00 Kr. 5.998,00

   VGA Grido 30 km/t sort/hvid Restsalg Varenr.: 73200100000VGA Grido 30 km/t sort/hvidSammenlign  VGA Grido 30 km/t sort/hvid Kr. 6.999,00Før Kr. 7.999,00Kr. 6.999,00
   VGA Grido 45 km/t sort/hvid Restsalg Varenr.: 73200100050VGA Grido 45 km/t sort/hvidSammenlign  VGA Grido 45 km/t sort/hvid Kr. 6.999,00Før Kr. 7.999,00Kr. 6.999,00VGA Grido 30 km/t sort/rød/grøn ITALYVarenr.: 73200100001
   VGA Grido 30 km/t sort/rød/grøn ITALYSammenlign  VGA Grido 30 km/t sort/rød/grøn ITALY Kr. 7.999,00Kr. 7.999,00
   VGA Grido 45 km/t sort/rød/grøn ITALYVarenr.: 73200100051VGA Grido 45 km/t sort/rød/grøn ITALYSammenlign  VGA Grido 45 km/t sort/rød/grøn ITALY Kr. 7.999,00 Kr. 7.999,00

   VGA MOVER 30 km/tVarenr.: 73300100000VGA MOVER 30 km/tSammenlign  VGA MOVER 30 km/t Kr. 13.999,00Kr. 13.999,00
   VGA Mover 45 km/tVarenr.: 73300100050VGA Mover 45 km/tSammenlign  VGA Mover 45 km/t Kr. 13.999,00Kr. 13.999,00

   VGA Versus 30 km/t sortVarenr.: 73250100000VGA Versus 30 km/t sortSammenlign  VGA Versus 30 km/t sort Kr. 6.999,00Kr. 6.999,00
   VGA Versus 45 km/t sortVarenr.: 73250100050VGA Versus 45 km/t sortSammenlign  VGA Versus 45 km/t sort Kr. 6.999,00Kr. 6.999,00

08-11-2012 :

   VGA Digita 30 km/t sort/hvid/blå Restsalg Varenr.: 73100100000VGA Digita 30 km/t sort/hvid/blåVGA Digita 30 km/t sort/hvid/blå Kr. 4.999,00Før Kr. 5.999,00Kr. 4.999,00
   VGA Digita 30 km/t Sort Dellorto  NYHED Varenr.: 73100100001VGA Digita 30 km/t Sort Dellorto  VGA Digita 30 km/t Sort Dellorto Kr. 6.499,00Kr. 6.499,00
   VGA Digita 45 km/t sort/hvid/blå Restsalg Varenr.: 73100100050VGA Digita 45 km/t sort/hvid/blå  VGA Digita 45 km/t sort/hvid/blå Kr. 4.999,00Før Kr. 5.999,00Kr. 4.999,00
   VGA Digita 45 km/t sort Dellorto  NYHED Varenr.: 73100100051VGA Digita 45 km/t sort Dellorto  VGA Digita 45 km/t sort Dellorto Kr. 6.499,00Kr. 6.499,00

   VGA Grido 30 km/t sort/hvid Restsalg Varenr.: 7320010000VGA Grido 30 km/t sort/hvid  VGA Grido 30 km/t sort/hvid Kr. 6.999,00Før Kr. 7.999,00Kr. 6.999,00
   VGA Grido 45 km/t sort/hvid Restsalg Varenr.: 73200100050VGA Grido 45 km/t sort/hvid  VGA Grido 45 km/t sort/hvid Kr. 6.999,00Før Kr. 7.999,00Kr. 6.999,00
   VGA Grido 30 km/t sort/rød/grøn ITALYVarenr.: 73200100001VGA Grido 30 km/t sort/rød/grøn ITALYVGA Grido 30 km/t sort/rød/grøn ITALY Kr. 7.999,00Kr. 7.999,00
   VGA Grido 45 km/t sort/rød/grøn ITALYVarenr.: 73200100051VGA Grido 45 km/t sort/rød/grøn ITALY  VGA Grido 45 km/t sort/rød/grøn ITALY Kr. 7.999,00Kr. 7.999,00

   VGA MOVER 30 km/tVarenr.: 73300100000VGA MOVER 30 km/t  VGA MOVER 30 km/t Kr. 12.999,00Kr. 12.999,00

   VGA Versus 30 km/t sortVarenr.: 73250100000VGA Versus 30 km/t sortVGA Versus 30 km/t sort Kr. 6.999,00Kr. 6.999,00
   VGA Versus 45 km/t sortVarenr.: 73250100050VGA Versus 45 km/t sortVGA Versus 45 km/t sort Kr. 6.999,00Kr. 6.999,00


25-10-2012 :
         Varenr.: 73100100000 VGA Digita 30 km/t sort/hvid/blå VGA Digita 30 km/t sort/hvid/blå Kr. 5.999,00 Kr.
   NYHED Varenr.: 73100100001 VGA Digita 30 km/t Sort Dellorto VGA Digita 30 km/t Sort Dellorto Kr. 6.499,00 Kr.
         Varenr.: 73100100050 VGA Digita 45 km/t sort/hvid/blå VGA Digita 45 km/t sort/hvid/blå Kr. 5.999,00 Kr.
   NYHED Varenr.: 73100100051 VGA Digita 45 km/t sort Dellorto VGA Digita 45 km/t sort Dellorto Kr. 6.499,00 Kr.
   Varenr.: 73250100000 VGA Versus 30 km/t sort VGA Versus 30 km/t sort Kr. 6.999,00 Kr. 6.999,00 VGA Versus 45 km/t sort
   Varenr.: 73250100050 VGA Versus 45 km/t sort VGA Versus 45 km/t sort Kr. 6.999,00 Kr. 6.999,00
   VGA Grido 30 km/t sort/hvid  Restsalg  Varenr.: 73200100000VGA Grido 30 km/t sort/hvid VGA Grido 30 km/t sort/hvid Kr. 6.999,00 Før Kr. 7.999,00 Kr. 6.999,00
   VGA Grido 45 km/t sort/hvid  Restsalg  Varenr.: 73200100050 VGA Grido 45 km/t sort/hvid VGA Grido 45 km/t sort/hvid Kr. 6.999,00 Før Kr. 7.999,00 Kr. 6.999,00 VGA Grido 30 km/t sort/rød/grøn ITALY
   Varenr.: 73200100001 VGA Grido 30 km/t sort/rød/grøn ITALY VGA Grido 30 km/t sort/rød/grøn ITALY Kr. 7.999,00 Kr. 7.999,00 VGA Grido 45 km/t sort/rød/grøn ITALY
   Varenr.: 73200100051 VGA Grido 45 km/t sort/rød/grøn ITALY VGA Grido 45 km/t sort/rød/grøn ITALY Kr. 7.999,00 Kr. 7.999,00
   Varenr.: 73300100000 VGA MOVER 30 km/t VGA MOVER 30 km/t Kr. 12.999,00 Kr. 12.999,00

07-07-2012 :
   Normale :
      VGA Versus 30 km/t sort Kr. 7.999,00 Varenr.: 73250100000 Info om VGA Versus 30 km/t sort Køb VGA Versus 30 km/t sort til Kr. 7.999,00
      VGA Versus 45 km/t sort Kr. 7.999,00 Varenr.: 73250100050 Info om VGA Versus 45 km/t sort Køb VGA Versus 45 km/t sort til Kr. 7.999,00

30-06-2012 :
   Restsalg :
      CPI ARAGON S-Line 45 km/t blå Før Kr. 9.999,00 Kr. 7.999,00 Varenr.: 22160100051
   Demovare / udstillingsvare :
      CPI Oliver City 2011 30 km/t sort Før Kr. 7.999,00 Kr. 6.999,00 Varenr.: 22150100006
      Oliver City 2010 45 km/t sort Før Kr. 7.999,00 Kr. 6.999,00 Varenr.: 22150100054
   Normale :
      VGA Grido 30 km/t sort/hvid Kr. 7.999,00 Varenr.: 73200100000
      VGA Grido 45 km/t sort/hvid Kr. 7.999,00 Varenr.: 73200100050
      VGA Digita 30 km/t sort/hvid/blå Kr. 5.999,00 Varenr.: 73100100000
      VGA Digita 45 km/t sort/hvid/blå Kr. 5.999,00 Varenr.: 73100100050
      VGA Versus 30 km/t sort Kr. 7.999,00 Varenr.: 73250100000
      VGA Versus 45 km/t sort Kr. 7.999,00 Varenr.: 73250100050
   Tilbud :
      VGA MOVER 30 km/t Før Kr. 13.999,00 Kr. 12.999,00 Varenr.: 73300100000
      VGA Mover 45 km/t Før Kr. 13.999,00 Kr. 12.999,00 Varenr.: 73300100050

VGA Digita :
   Pris : 5.999,- (hos thansen.dk) checket (17-03-2011) og (06-06-2011) og (24-08-2011) og (08-10-2011) og (20-10-2011) og (06-11-2011) og (19-11-2011) og (10-02-2012) og (20-02-2012) og (27-02-2012) og (30-06-2012)
   Pris : 5.999,- (hos thansen.dk og tilbudsavis Marts 2012) checket (27-02-2012)
VGA Grido :
   Pris : 8.999,- (hos thansen.dk) checket (15-04-2011) og (06-06-2011) og (24-08-2011) og (08-10-2011) og (20-10-2011) og (06-11-2011) og (19-11-2011) og (10-02-2012) og (20-02-2012)
   Pris : 7.999,- (hos thansen.dk og tilbudsavis Marts 2012 (spar 1.000,-)) checket (27-02-2012)

29-02-2012 :
   VGA Mover 45 km/t Kr. 13.999,00 Varenr.: 73300100050 (Varen er midlertidigt udsolgt og forventes på lager igen den 05-07-2012.)

27-02-2012 :
   Demovare / udstillingsvare :
      CPI Aragon S-Line 30 km/t Blå Før Kr. 9.999,00 Kr. 7.999,00 Varenr.: 22160100001
      CPI Oliver City 2011 30 km/t sort Før Kr. 7.999,00 Kr. 6.999,00 Varenr.: 22150100006
      Oliver City 2010 45 km/t sort Før Kr. 7.999,00 Kr. 6.999,00 Varenr.: 22150100054
   Restsalg :
      CPI ARAGON S-Line 45 km/t blå Før Kr. 9.999,00 Kr. 7.999,00 Varenr.: 22160100051
   Normale :
      VGA Digita 30 km/t sort/hvid/blå Kr. 5.999,00 Varenr.: 73100100000
      VGA Digita 45 km/t sort/hvid/blå Kr. 5.999,00 Varenr.: 73100100050
      VGA MOVER 30 km/t Kr. 13.999,00 Varenr.: 73300100000 (Varen er midlertidigt udsolgt og forventes på lager igen den 14-03-2012.)
      VGA Mover 45 km/t Kr. 13.999,00 Varenr.: 73300100050 (Varen er midlertidigt udsolgt og forventes på lager igen den 14-03-2012.)
   Tilbud :
      VGA Grido 30 km/t sort/hvid Før Kr. 8.999,00 Kr. 7.999,00 Varenr.: 73200100000
      VGA Grido 45 km/t sort/hvid Før Kr. 8.999,00 Kr. 7.999,00 Varenr.: 73200100050

10-02-2012 :
   Normale (ikke rastsalg eller noget) :
      VGA Digita 30 km/t sort/hvid/blå Kr. 5.999,00 Varenr.: 73100100000
      VGA Digita 45 km/t sort/hvid/blå Kr. 5.999,00 Varenr.: 73100100050
      VGA MOVER 30 km/t Kr. 13.999,00 Varenr.: 73300100000 (Varen er midlertidigt udsolgt og forventes på lager igen den 09-03-2012.)
      VGA Mover 45 km/t Kr. 13.999,00 Varenr.: 73300100050 (Varen er midlertidigt udsolgt og forventes på lager igen den 09-03-2012.)
      VGA Grido 30 km/t sort/hvid Kr. 8.999,00 Varenr.: 73200100000
      VGA Grido 45 km/t sort/hvid Kr. 8.999,00 Varenr.: 73200100050
   Restsalg :
      Giantco Sprint, 45 km/t, sort/blå Før Kr. 6.999,00 Kr. 4.999,00 Varenr.: 31100100050
      Giantco G-10 2-takt 30 km/t rød/hvid Før Kr. 9.999,00 Kr. 6.999,00 Varenr.: 31400100000
      CPI Aragon S-Line 30 km/t Blå Før Kr. 9.999,00 Kr. 7.999,00 Varenr.: 22160100001
      CPI ARAGON S-Line 45 km/t blå Før Kr. 9.999,00 Kr. 7.999,00 Varenr.: 22160100051
      Giantco Venus II hvid 45 km/t Før Kr. 6.999,00 Kr. 4.999,00 Varenr.: 31210100050
   Demovare / udstillingsvare :
      Giantco Venus II hvid 45 km/t Før Kr. 6.999,00 Kr. 4.999,00 Varenr.: 31210100050
      Giantco Stealth 30 km/t sort Kr. 6.999,00 Varenr.: 31300100002
      CPI Aragon S-Line 30 km/t Blå Før Kr. 9.999,00 Kr. 7.999,00 Varenr.: 22160100001
      CPI Oliver City 2011 30 km/t sort Før Kr. 7.999,00 Kr. 6.999,00 Varenr.: 22150100006
      Oliver City 2010 45 km/t sort Før Kr. 7.999,00 Kr. 6.999,00 Varenr.: 22150100054

09-01-2012 :
   Normale (ikke rastsalg eller noget) :
      Giantco Stealth 30 km/t sort Kr. 6.999,00 Varenr.: 31300100002
      VGA Digita 30 km/t sort/hvid/blå Kr. 5.999,00 Varenr.: 73100100000
      VGA Digita 45 km/t sort/hvid/blå Kr. 5.999,00 Varenr.: 73100100050
      VGA Grido 30 km/t sort/hvid Kr. 8.999,00 Varenr.: 73200100000
      VGA Grido 45 km/t sort/hvid Kr. 8.999,00 Varenr.: 73200100050
   Restsalg :
      CPI Aragon S-Line 30 km/t Blå Før Kr. 9.999,00 Kr. 7.999,00 Varenr.: 22160100001
      CPI ARAGON S-Line 45 km/t blå Før Kr. 9.999,00 Kr. 7.999,00 Varenr.: 22160100051
      CPI Oliver City 2011 30 km/t sort Før Kr. 7.999,00 Kr. 6.999,00 Varenr.: 22150100006
      Oliver City 2010 45 km/t sort Før Kr. 7.999,00 Kr. 6.999,00 Varenr.: 22150100054
      Giantco E-Buddy sort metallic 45 km/t Før Kr. 7.999,00 Kr. 3.999,00 Varenr.: 31150100050
      Giantco Sprint, 45 km/t, sort/rød Før Kr. 6.999,00 Kr. 4.999,00 Varenr.: 31100100051
      Giantco Venus II hvid 30 km/t Før Kr. 6.999,00 Kr. 4.999,00 Varenr.: 31210100000
      Giantco Venus II hvid 45 km/t Før Kr. 6.999,00 Kr. 4.999,00 Varenr.: 31210100050
'

,'
ubrugte billeder
' => '
'.
galleriholder(array(
    galleri('highslide', '', 'billed3792.jpg', array('Kymco Agility motor', 'tryk ventilfjeder ned opsætning'))
   ,galleri('highslide', '', 'billed3814.jpg', array('Kymco Agility motor', 'motordele opsætning som de cirka sidder i motoren'))
   ,galleri('highslide', '', 'billed3815.jpg', array('Kymco Agility motor', 'motordele opsætning som de cirka sidder i motoren'))
   ,galleri('highslide', '', 'billed3821.jpg', array('Kymco Agility motor', 'motor dele'))
))
.'
'

,'
sidelængs bevægelse af krumtap
' => '
'.
galleriholder(array(
    galleri('highslide', '', 'billed3818.jpg', array('Kymco Agility motor', 'måling af sidelængs bevægelse af krumtap i motorblok'))
))
.'
'

,'
danmarks knallert union
' => '
Jeg har læst om noget som kaldes Danmarks Knallert Union (DKU).
Formanden skulle være Jesper Reinhardt som må være ham fra '.ahref('http://www.c-reinhardt.dk/', 'www.c-reinhardt.dk').' som blandt andet importer PGO scootere.

Men jeg syntes godt nok aldrig jeg før har læst om Danmarks Knallert Union.

I '.ahref('download/lovforslag_nr_l39.pdf','Lovforslag nr. L 39').' står at lovforslaget har været til høring hos blandt andet Danmarks Knallert Union.

Så Danmarks Knallert Union er måske nogen importører som politikerne spørger til råds når de skal lave lovgivning på scooter området.

Hvis du har mere info om Danmarks Knallert Union så '.kontaktmig().' gerne.
'

,'
peukert effect
' => '
At et standard 105Ah/K20 vådt blybatteri ikke kan give mere end 53 Ah ved en hurtig afladning ned til 11,5 V skyldes en meget gammel og velbeskreven effekt - "Peukerts effect". 
samme batteri ved forskellig afladningtider:
77 Ah / K10
90 Ah / K20
120 Ah / K100

Strømstyrken ganget med afladetiden giver kapaciteten. 
66 Ampere * 2 timer = 132 Ah ? (132 Ah / K20).
Afladt til 10,5 volt.
'

,'
reduktionsgear udregning
' => '
For at udregne reduktionsgearets ratio skal vi vide hvor mange tænder der er på tandhjulene.
Det kan står på tandhjulet som T40 for 40 tænder. Ellers kan man tæller dem selv.

Primær gearing (fra koblingsakslen til første tandhjul) : 10 og 40
Sekundære gearing (fra første tandhjul til andet tandhjul : 12 og 32

Får at få ratioen divider vi det antal tænder der drives rundt med det antal tænder som driver den.
40 / 10 = 4 (primære reduktion ratio)
32 / 12 = 2,66 (sekundære reduktion ratio)

Den endelige reduktions ratio fås ved at gange de 2 ratioer.
4 * 2,66 = 10,64 (endelige reduktion ratio)

Så når koblingsklokken har drejet 10,64 gange rundt så har baghjulet drejet 1 gang rundt. Så vidt jeg forstår.
Jo højere det endelige reduktions ratio tal er jo mere potentiale er der for hurtig acceleration. 
Jo lavere det endelige reduktions ratio tal er jo mere potentiale er der for høj topfart.
'

,'
noget fra transmissions siden
' => '
'.visbilled('1', 'billed0980.jpg', 'variator remskive ruller', false, true).'
Her ses hvor kileremmen kører.
'.visbilled('1', 'billed0981.jpg', 'variator remskive ruller', false, true).'
Her ses hvordan rullerne ligger når variatoren kører i laveste gear.
'.visbilled('1', 'billed0984.jpg', 'ruller i variator skål lavt gear', false, true).'
'.visbilled('1', 'billed0985.jpg', 'ruller i variator skål højt gear', false, true).'
'.afsnit('rulle vægt og farver','
Rullernes vægt kan vejes på en følsom vægt.
Nogen ruller har en farve som fortæller hvilken vægt de har men producenterne bruger ikke de samme farver.

Følgende eksempler stammer fra Malossi colorroll serien. (Hver farve bruges to gange)

'.
box(array('100', '100')
   ,array(
       array('farve'    ,'gram')
      ,array('violet'   ,'1,9')
      ,array('blå'      ,'2,1')
      ,array('sort'     ,'2,3')
      ,array('gul'      ,'2,5')
      ,array('grøn'     ,'2,6')
      ,array('rød'      ,'2,7')
      ,array('hvid'     ,'2,8')
      ,array('hvid'     ,'4,0')
      ,array('rød'      ,'4,6')
      ,array('grøn'     ,'5,1')
      ,array('gul'      ,'6,1')
      ,array('sort'     ,'7,1')
      ,array('blå'      ,'8,1')
      ,array('violet'   ,'9,1')
   )
)
.'
').'

'.
box(array('100', '100', '100', '170')
   ,array(
       array('farve'     ,'hårdhed (procent)'  ,'hårdhed (kg)'  ,'producent')
      ,array('Hvid'      ,''          ,'29(30) kg' ,'Malossi')
      ,array('?'         ,'+ 7 %'     ,''      ,'')
      ,array('Grøn'      ,'+ 15 %'    ,''      ,'')
      ,array('Orange'    ,'15 %'      ,''      ,'Metrakit Pro Race')
      ,array('Lilla'     ,'+ 22 %'    ,''      ,'Metrakit Pro Race')
      ,array('Pink'      ,'+ 22 %'    ,''      ,'Metrakit Pro Race')
      ,array('Rød'       ,'+ 22 %'    ,''      ,'')
      ,array('Blå'       ,'+ 30 %'    ,''      ,'')
      ,array('Sort'      ,'+ 50 %'    ,''      ,'(City brug)')
      ,array('Grøn'      ,'+ 60 %'    ,''      ,'Malossi')
      ,array('Blå'       ,''          ,'22 kg' ,'Athena')
      ,array('Grønblå'   ,''          ,'25 kg' ,'Athena')
      ,array('Gul'       ,''          ,'27 kg' ,'Athena')
      ,array('Mørk grøn' ,''          ,'30 kg' ,'Athena')
      ,array('Rød'       ,''          ,'32 kg' ,'Athena')
      ,array('Gul'       ,''          ,'24 kg' ,'Stylepro')
      ,array('?'         ,'+ 82 %'    ,''      ,'')
      ,array('Rød'       ,'+ 90 %'    ,''      ,'')
      ,array('Lilla'     ,''          ,'35 kg' ,'Athena')
      ,array('Blå'       ,'+ 106 %'   ,''      ,'Malossi')
   )
)
.'
OBS: +30% betyder at fjederen er 30% hårdere end en standard fjeder.
OBS: 30 kg skulle være det antal kg det kræver at trykke fjederen helt sammen.

En bruger skrev følgende til mig.
'.citat('
Trykfjederen bruges også til at presse remmen HELT ned på bøsningen, sammen med brugen af den rigtige mængde afstandsskiver.
').'

Jeg har læst følgende om Malossi fjedre:

Malossi Springs can be divided into three categories: 
REINFORCED SPRINGS (White) with high stiffness
SUPER REINFORCED SPRINGS (Yellow) with exceptionally-high stiffness
RACING SPRINGS (Red) designed for more exacting use and competition machines.
Malossi opgiver vist ikke % og kg.

'.
box(array('120', '120', '120', '120')
   ,array(
       array('farve' ,'hårdhed' ,'o/min'  ,'producent')
      ,array('hvid'  ,'Stiv'    ,''       ,'Malossi')
      ,array('gul'   ,'Stivere' ,''       ,'Malossi')
      ,array('rød'   ,'Stivest' ,''       ,'Malossi')
   )
)
.'
'.
box(array('120', '120', '120', '120')
   ,array(
       array('farve' ,'hårdhed' ,'o/min'  ,'producent')
      ,array('grøn'  ,'+15%'    ,'1500'   ,'')
      ,array('rød'   ,'+22%'    ,'2000'   ,'')
      ,array('blå'   ,'+30%'    ,'2500'   ,'')
   )
)
.'
'.
box(array('120', '120', '120', '120')
   ,array(
       array('farve' ,'hårdhed' ,'o/min'  ,'producent')
      ,array('blå'   ,'?'       ,'1000'   ,'')
      ,array('rød'   ,'?'       ,'1500'   ,'')
      ,array('gul'   ,'?'       ,'2000'   ,'')
   )
)
.'
'

,'
T Hansen thumbnail billeder
' => '
http://dynmedia.thg.dk/img/73306075007_0__500_1200.JPG (max 3000 x 3000)
http://media.thg.dk/DAT/pic/xs/73306075007.JPG (max 50)
http://media.thg.dk/DAT/pic/s/73306075007.JPG (max 100)
http://media.thg.dk/DAT/pic/m/73306075007.JPG (max 325)
http://media.thg.dk/DAT/pic/l/73306075007.JPG (max 600)
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
