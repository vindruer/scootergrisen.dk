<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['sideikon']               = 'ikoner/ikon_registrering2.png';

$title = "registrering af scootere og knallerter";
$overskrift = "registrering af scootere og knallerter";
$metadescription = "info om nummerplade, stelnummer, motornummer, typeattest, registreringsattest, typegodkendelse osv til scootere og knallerter";

$databasecenter = array(

'
bemærk
' => '
Den måde man køber nummerplade har ændret sig.
Hvor man tidligere kun kunne købe nummerplade hos skat skal/kan? man i fremtiden købe nummerplade hos en synshal eller en forhandler som er godkendt til at sælge dem.
Jeg har endnu ikke så meget info om dette da jeg ikke selv har prøvet det.
'

,'
nummerplade til lille knallert
' => '
En lille knallert som højst må køre 30 km/t kan have en gul nummerplade med 2 bogstaver, 4 tal og en sort ramme.
'.visbilled('1', 'billed0154.jpg', 'nummerplade til lille knallert med 2 bogstaver, 4 tal, gul baggrund og sort ramme', false, true).'
Når der sælges en ny 30 km/t scooter så skal der monteres en gul nummerplade.
Det gælder dog ikke for 30 km/t invalideknallert (med 3 hjul).

Køber man en brugt 30 km/t scooter er det ikke altid der skal være nummerplade på. Det kommer an på hvornår scooteren blev solgt første gang fra fabriksny af.
En 30 km/t scooter der er solgt fra ny før 1. Juli 2006 har ikke nummerplade og skal ikke have nummerplade selvom den sælges senere.

'.ahref('download/vejledning_om_syn_af_koretojer.pdf', 'Vejledning om syn af køretøjer').' :
'.citat('
En lille knallert skal kun registreres, hvis den er erhvervet som fabriksny
den 1. juli 2006 eller senere. En invalideknallert skal ikke registreres.
').'

Kigge man på nummerpladen lige på eller tager et billede af nummerpladen med blitz lige på så kan man måske se nogle symboler med et øje i en hånd.
Jeg går ud fra at symbolerne er til for at sikre sig mod hjemmelavede nummerplader.
Læs mere om argusøje symbolet på '.ahref('http://www.denstoredanske.dk/Sprog,_religion_og_filosofi/Religion_og_mystik/Guder_i_antik_litteratur/Argos', 'denstoredanske.dk/.../Argos').'.
'.visbilled('1', 'billed1253.jpg', 'nummerplade til lille knallert med argusøje symbol øje i hånd', false, true).'

En gul nummerplade til lille knallert koster 590,- kroner hos skats motorcentre.
Derudover kan de også købes hos synshaller (nummerpladeoperatør) som vist nok selv må bestemme hvad pris det vil sælge nummerpladen for.
Læse mere på '.ahref('http://www.skat.dk/SKAT.aspx?oId=1817298', 'skat.dk').'.

Tidligere kostede en gul nummerplade til lille knallert kun 90 kroner hos skats motorcentre som dengang var de eneste steder man kunne få dem, men det er lavet om nu så prisen er højere og man kan få købe nummerplade hos skats motorcentre og i synshaller (nummerpladeoperatør).

Bogstaverne på gul nummerplade til lille knallert starter fra VB.
Tallene på gul nummerplade til lille knallert går fra 5500 til 9999.

Nummerpladen er 145 mm bred og 125 mm høj.
'

,'
nummerplade til stor knallert
' => '
En stor knallert som højst må køre 45 km/t har en hvid nummerplade med 2 bogstaver, 3 tal og en rød ramme.
'.visbilled('1', 'billed0092.jpg', 'nummerplade til stor knallert med 2 bogstaver, 3 tal, hvid baggrund og rød ramme', false, true).'
En 45 km/t nummerplade koster 590,- kroner.

Tallene på hvid nummerplade til stor knallert går fra 001 til 699.

Nummerpladen er 145 mm bred og 125 mm høj.
'

,'
motorcykel nummerplade
' => '
For at sammenligne er en motorcykel nummerplade hvid, har 2 bogstaver, 5 tal og en rød ramme.
'.visbilled('1', 'billed0006.jpg', 'nummerplade til motorcykel med 2 bogstaver, 5 tal, hvid baggrund og rød ramme', false, true).'
'

,'
stelnummer
' => '
Stelnummeret på nyere scootere kaldes også for VIN.
VIN står for Vehicle Identification Number.

Ældre knallerter bruger ikke dette system.

Et VIN kan kendes på at det er 17 tegn langt og kan bestå af både tal og bogstaver.
Her ses et VIN. De to stjerner i starteren og slutning er ikke en del af VIN.
'.visbilled('1', 'billed0350.jpg', 'stelnummer på scooter', false, true).'

Stelnummeret kan ofte ses ved at fjerne et stykke plastik over fodbrættet.
'.visbilled('1', 'billed0348.jpg', 'stelnummer på scooter', false, true).'
Stelnummeret kan også stå på en '.ahref('#fabrikationsplade', 'fabrikationsplade').'.

Stelnummeret kan nogle gange bruges til at finde ud af om scooteren er godkendt som 30 km/t eller 45 km/t scooter ved at sammenligne med scooterens typegodkendelse.

VIN indeholder ikke (eller sjældent ?) bogstaverne i, o og q (I, O og Q) da de kan læses forkert som 1 (et) og 0 (nul).

Brug '.ahref('vinchecker.php', 'VIN checker').' til at dekode VIN og måske få nogle oplysninger om scooteren.

Her er en forklaring på hvad tegn 1 til 17 i VIN betyder.
'.
box(array('100', '200', '200')
   ,array(
       array('VIN tegn', 'forklaring', 'dybere forklaring')
      ,array('1', 'kontinent', 'A - H = Afrika
J - R = Asien
S - Z = Europa
1 - 5 = Nord amerika
6 - 7 = Oceanien
8 - 9 = Syd amerika
')
      ,array('1 og 2', 'land', 'Afrika
AA-AH = South Africa
AJ-AN = Ivory Coast
AP-A0 = [ikke tildelt]
BA-BE = Angola
BF-BK = Kenya
BL-BR = Tanzania
BS-B0 = [ikke tildelt]
CA-CE = Benin
CF-CK = Malagasy
CL-CR = Tunisia
CS-C0 = [ikke tildelt]
DA-DE = Egypt
DF-DK = Morocco
DL-DR = Zambia
DS-D0 = [ikke tildelt]
EA-EE = Ethiopia
EF-EK = Mozambique
EL-E0 = [ikke tildelt]
FA-FE = Ghana
FF-FK = Nigeria / Madagascar
FL-F0 = [ikke tildelt]
GA-G0 = [ikke tildelt]
HA-H0 = [ikke tildelt]

Asien
JA-J0 = Japan
KA-KE = Sri Lanka
KF-KK = Israel
KL-KR = Korea (South)
KS-K0 = [ikke tildelt]
LA-L0 = China
MA-ME = India
MF-MK = Indonesia
ML-MR = Thailand
MS-M0 = [ikke tildelt]
NF-NK = Pakistan
NL-NR = Turkey
NS-N0 = [ikke tildelt]
PA-PE = Philipines
PF-PK = Singapore
PL-PR = Malaysia
PS-P0 = [ikke tildelt]
RA-RE = United Arab Emirates
RF-RK = Taiwan
RL-RR = Vietnam
RS-R0 = [ikke tildelt]
 
Europa
SA-SM = Great Britain
SN-ST = Germany
SU-SZ = Poland
S1-S0 = [ikke tildelt]
TA-TH = Switzerland
TJ-TP = Czechoslovakia
TR-TV = Hungary
TW-T1 = Portugal
T2-T0 = [ikke tildelt]
UA-UG = [ikke tildelt]
UH-UM = Denmark
UN-UT = Ireland
UU-UZ = Romania
U1-U4 = [ikke tildelt]
U5-U7 = Slovakia
U8-U0 = [ikke tildelt]
VA-VE = Austria
VF-VR = France
VS-VW = Spain
VX-V2 = Yugoslavia
V3-V5 = Croatia
V6-V0 = Estonia
WA-W0 = Germany
XA-XE = Bulgaria
XF-XK = Greece
XL-XR = Netherlands
XS-XW = U.S.S.R.
XX-X2 = Luxembourg
X3-X0 = Russia
YA-YE = Belgium
YF-YK = Finland
YL-YR = Malta
YS-YW = Sweden
YX-Y2 = Norway
Y3-Y5 = Belarus
Y6-Y0 = Ukraine
ZA-ZR = Italy
ZS-ZW = [ikke tildelt]
ZX-Z2 = Slovenia
Z3-Z5 = Lithuania
Z6-Z0 = [ikke tildelt]
 
Nord amerika
1A-10 = United States
2A-20 = Canada
3A-3W = Mexico
3X-37 = Costa Rica
38-30 = [ikke tildelt]
4A-40 = United States
5A-50 = United States

Oceanien
6A-6W = Australia
6X-60 = [ikke tildelt]
7A-7E = New Zealand
7F-70 = [ikke tildelt]

Syd amerika
8A-8E = Argentina
8F-8K = Chile
8L-8R = Ecuador
8S-8W = Peru
8X-82 = Venezuela
83-80 = [ikke tildelt]
9A-9E = Brazil
9F-9K = Colombia
9L-9R = Paraguay
9S-9W = Uruguay
9X-92 = Trinidad &amp; Tobago
93-99 = Brazil
90 = [ikke tildelt]
')
      ,array('2 og 3', 'producent', '
')
      ,array('4', 'beskrivelse af køretøj', '')
      ,array('5', 'beskrivelse af køretøj', '')
      ,array('6', 'beskrivelse af køretøj', '')
      ,array('7', 'beskrivelse af køretøj', '')
      ,array('8', 'beskrivelse af køretøj', '')
      ,array('9', 'kontrol tegn', 'Kontroltegnet bruges til at udregne om VIN er korrekt eller om nogle tegn kan være forkert<br><br>Dog er der mange VIN som ikke validere i kontroltegn testen selvom VIN er det rigtige')
      ,array('10', 'model år', 'A = 1980 2010
B = 1981 2011
C = 1982 2012
D = 1983 2013
E = 1984 2014
F = 1985 2015
G = 1986 2016
H = 1987 2017
J = 1988 2018
K = 1989 2019
L = 1990 2020
M = 1991 2021
N = 1992 2022
P = 1993 2023
R = 1994 2024
S = 1995 2025
T = 1996 2026
V = 1997 2027
W = 1998 2028
X = 1999 2029
Y = 2000 2030
1 = 2001 2031
2 = 2002 2032
3 = 2003 2033
4 = 2004 2034
5 = 2005 2035
6 = 2006 2036
7 = 2007 2037
8 = 2008 2038
9 = 2009 2039

Model året løber fra 1. september det forrige år til 31 august det år som står i VIN.

Tegnene i, o, q, u, z og 0 (I, O, Q, U, Z og nul) bruges ikke i model årgangs tegnet.
')
      ,array('11', 'fabrikskode/fabrikationssted', '')
      ,array('12', 'serie nummer', '')
      ,array('13', 'serie nummer', '')
      ,array('14', 'serie nummer', '')
      ,array('15', 'serie nummer', '')
      ,array('16', 'serie nummer', '')
      ,array('17', 'serie nummer', '')
   )
)
.'

'.
box(array('10', '250', '250')
   ,array(
       array('VIN tegn', 'første forklaring', 'anden forklaring')
      ,array('1',  'World Manufacturer Identifier', 'World Manufacturer Identifier')
      ,array('2',  'World Manufacturer Identifier', 'World Manufacturer Identifier')
      ,array('3',  'World Manufacturer Identifier', 'World Manufacturer Identifier')
      ,array('4',  'Vehicle Descriptor Section', 'Vehicle Attributes')
      ,array('5',  'Vehicle Descriptor Section', 'Vehicle Attributes')
      ,array('6',  'Vehicle Descriptor Section', 'Vehicle Attributes')
      ,array('7',  'Vehicle Descriptor Section', 'Vehicle Attributes')
      ,array('8',  'Vehicle Descriptor Section', 'Vehicle Attributes')
      ,array('9',  'Check Digit', 'Check Digit')
      ,array('10', 'Vehicle Identifier Section', 'Model Year')
      ,array('11', 'Vehicle Identifier Section', 'Plant Code')
      ,array('12', 'Vehicle Identifier Section', 'Sequential Number')
      ,array('13', 'Vehicle Identifier Section', 'Sequential Number')
      ,array('14', 'Vehicle Identifier Section', 'Sequential Number')
      ,array('15', 'Vehicle Identifier Section', 'Sequential Number')
      ,array('16', 'Vehicle Identifier Section', 'Sequential Number')
      ,array('17', 'Vehicle Identifier Section', 'Sequential Number')
   )
)
.'

'.
box(array('140', '240')
   ,array(
       array('forkortelse', 'forklaring')
      ,array('WMI', 'World Manufacturer Identifier')
      ,array('VDS', 'Vehicle Descriptor Section')
      ,array('VIS', 'Vehicle Identifier Section')
   )
)
.'

Her ses en VIN forklaring fra XT50QT typegodkendelse (side 110).
'.visfil('1', 'scooterhjemmeside/download/xt50qt_eectypegodkendelse.pdf').'
'.visbilled('1', 'billed1843.jpg', 'stelnummer VIN forklaring', false, true).'

Her er noget data fra nogle '.ahref('typegodkendelser.php', 'typegodkendelser').'.
'.
box(array('100', '100', '100', '100', '100')
   ,array(
       array('VIN tegn',  'Zhongyu ZY50QT-7 typegodkendelse', 'Sym Mio typegodkendelse', 'EVT 4000E typegodkendelse', 'Giantco Sprint typegodkendelse')
      ,array('1',  '', '', '', '')
      ,array('2',  '', '', '', '')
      ,array('3',  '', '', '', '')
      ,array('4',  'Type/T', 'Type/H', 'Type/E', 'Type/T')
      ,array('5',  'Motor', 'Type/U', 'Type/4', 'Motor')
      ,array('6',  'Motor', 'Type/0', 'Variant', 'Motor')
      ,array('7',  'Transmission', 'Type/5', 'Variant', 'Motor')
      ,array('8',  'Fabrikant', 'Type/W', 'Version', 'Transmission')
      ,array('9',  'Kontroltegn', 'Udfyldningstegn', 'Version', 'Kontroltegn')
      ,array('10',  'Produktionsår', 'Produktionsår', 'Fabrikantkode', 'Produktionsår')
      ,array('11',  'Produktionssted', 'Produktionssted', 'Fabrikantkode', 'Produktionssted')
      ,array('12',  '', '', '', '')
      ,array('13',  '', '', '', '')
      ,array('14',  '', '', '', '')
      ,array('15',  '', '', '', '')
      ,array('16',  '', '', '', '')
      ,array('17',  '', '', '', '')
   )
)
.'

Her ses hvad nogle scooteres VIN kan starte med og hvilket scootermærke det er.
'.
box(array('120', '400')
   ,array(
       array('3 første tegn i VIN', 'scootermærke')
      ,array('RHC', 'A2B')
      ,array('L82', 'Avanti')
      ,array('L08', 'Apollo')
      ,array('L5Y', 'AGM (Taizhou Zhingneng MC Co.)')
      ,array('RGU', 'AGM Vintage')
      ,array('LZP', 'Baotian (Zhongshan Guochi MC/Zhongxing Group Co. Ltd.)')
      ,array('L82', 'Baotian')
      ,array('LX6', 'Baotian')
      ,array('LFY', 'Busetto (Lynx) (Baotian MC Industrial Co/Changshu Light MC Factory/Zhejiang Zhongneng MC Co)')
      ,array('RFT', 'CPI')
      ,array('RK1', 'E-ton')
      ,array('RF8', 'EVT')
      ,array('RKZ', 'EGO (Kin Sui Cheng Industrial Co/Taiwan Helio Tech)')
      ,array('LNG', 'Giantco')
      ,array('MD4', 'Hero Majestic')
      ,array('JH2', 'Honda')
      ,array('LJE', 'Huoniao RMC (HN50QT-K måske zanzara hos amco) (Jiangmen Dihao Motorcycle Co., Ltd.)')
      ,array('LBX', 'Jiangsu Kinroad Xintian Motorcycle Co., Ltd.')
      ,array('LC2', 'Kymco')
      ,array('RFB', 'Kymco')
      ,array('YU6', 'Norsjö')
      ,array('LXX', 'Nicom')
      ,array('L4H', 'Ningbo Longjia Motorcycle Co., Ltd.')
      ,array('LAE', 'Peugeot (China Qingqi Group, Ltd/Jinan Quingqi Moto/Shanghe Light MC/ Shandong Pioneer MC Co)')
      ,array('ZAP', 'Piaggio')
      ,array('LBM', 'Piaggio')
      ,array('VGA', 'Peugeot (Peugeot Motorcycles)')
      ,array('WSF', 'Sachs (Sachs-Fahrzeug Und Motorentechnik Gmbh)')
      ,array('LAE', 'Qingqi (China Qingqi Group, Ltd/Jinan Quingqi Moto/Shanghe Light MC/ Shandong Pioneer MC Co)')
      ,array('LV7', 'Qingqi (Hooper One)')
      ,array('LFU', 'Regal Raptor')
      ,array('VTP', 'Rieju')
      ,array('LLJ', 'Scoopie (Xinling)')
      ,array('L3J', 'Skyteam')
      ,array('LC3', 'Shiweii (Swei Swen)')
      ,array('LT8', 'Sanili')
      ,array('RF1', 'Swap')
      ,array('RFG', 'Sym')
      ,array('LLM', 'Tisong')
      ,array('LLJ', 'Xinling (Scoopie TXD500a/800a)')
      ,array('LAY', 'Yadea (YD1000D YD1500D Texas)')
      ,array('L98', 'Xmotos')
      ,array('LAN', 'Yamasaki')
      ,array('LPR', 'Yamaha')
      ,array('LYD', 'Yiben (Taizhou City Kaitong MC Manufacture Co)')
      ,array('LD5', 'Yiying (Stranger x-fight) (Benzhou Vehicle Ind. Grp Co, Ltd)')
      ,array('LMF', 'Zhongyu')
      ,array('LZS', 'Zongshen (Zongshen Industrial Group)')
      ,array('L4S', 'XINGYUE')
   )
)
.'
'

,'
VIN checker
' => '
Prøv at indtast et VIN (17 cifret stelnummer) i '.ahref('vinchecker.php', 'VIN checkeren').' og måske kan du få oplysninger om scooteren/knallerter som producent, model, årgang, osv.
'

,'
motornummer
' => '
Motornummerets placering er forskellig afhængig af motortypen.

På mange 4 takt 50 cm³ motorer (GY6, 139QM) står motornummeret under variatordækslet ved støttebenet.
'.visbilled('1', 'billed0349.jpg', 'motornummer', false, true).'
Motornummeret er de tal som står mellem stjernerne nederst.
'.visbilled('1', 'billed1613.jpg', 'BT139QMA motortype og motornummer', false, true).'

På nogle 2 takt motortyper står motornummeret ved baghjulet omkring støddæmperen hvis man kigger oppe fra.
'.visbilled('1', 'billed0156.jpg', 'motornummer', false, true).'
Eller hvis man ser på motoren bagfra.
'.visbilled('1', 'billed0026.jpg', 'motornummer', false, true).'
'.visbilled('1', 'billed2434.jpg', 'motornummer på pgo', false, true).'
'

,'
fabrikationsplade
' => '
Fabrikationspladen indeholder info om producent, typegodkendelsesnummer, stelnummer og støjniveau.
'.visbilled('1', 'billed0078.jpg', 'fabrikationsplade', false, true).'
'.visbilled('1', 'billed3106.jpg', 'fabrikationsplade', false, true).'
'

,'
komponentmærkningsskilt
' => '
Under sædet ved benzintanken sidder dette klistermærke på min Kymco Super 8 4T (30 km/t).
'.visbilled('1', 'billed0079.jpg', 'komponentmærkningsskilt kymco super 8 4T klistermærke', false, true).'
Det kaldes et komponentmærkningsskilt i typegodkendelsen.

Det giver oplysninger om blandt andet luftfilter, udstødning og remskiver.

Her ses samme data fra typegodkendelsen.
'.visbilled('1', 'billed2787.jpg', 'komponentmærkningsskilt', false, true).'

Her ses komponentmærkningsskiltet fra en Jinlun JL50QT-5.
'.visbilled('1', 'billed3343.jpg', 'komponentmærkningsskilt', false, true).'

Her ses endnu et komponentmærkningsskilt.
'.visbilled('1', 'billed3361.jpg', 'komponentmærkningsskilt', false, true).'
'

,'
typeattest
' => '
Så vidt jeg forstår er en typeattest et stykke papir som importøren af køretøjet underskriver og sender til scooter butikken når butikken køber en scooter af importøren.

Butikken underskriver typeattesten når scooteren sælges og giver det til den der køber scooteren.

Her ses en typeattest.
'.visbilled('1', 'billed0827.jpg', 'færdselsstyrelsen typeattest for motordrevet køretøj Kymco Super 8 4T CK50QT-6', false, true).'

Læg mærke til der står nederst at forhandleren erklærer at scooteren er fabriksny, klargjort efter fabrikantens anvisninger og er i forskriftsmæssig stand.

På typeattesten står typegodkendelsesnummer og typeanmeldelsesnummer som kan bruges til at finde den typegodkendelse som passer til scooteren.
'

,'
registreringsattest
' => '
Den gang jeg købte min scooter mener jeg ikke at jeg fik nogen registreringsattest.

Jeg har ikke helt styr på hvordan det forgår med registreringsattest.

Der fås vist kun registreringsattest til de køretøjer som skal have nummerplade på. Så de fås vist ikke til lille knallert solgt fra ny før 1. Juli 2006 eller til lille invalideknallert som ikke skal have nummerplade på.

Men her er en midlertidig registreringsattest som man vist får hos synshallen/forhandleren.
'.visbilled('1', 'billed3467.jpg', 'midlertidig registreringsattest', false, true).'

Den rigtige registreringsattest fås vist af skat og måske med posten ?
'.visbilled('1', 'billed3468.jpg', 'registreringsattest S34-A', false, true).'

Her ses en gammel registreringsattest i A5 format.
'.visbilled('1', 'billed3469.jpg', 'gammel registreringsattest', false, true).'

Det vist noget med når man købet en brugt scooter så skal man have registreringsattesten med.
'

,'
anmeldelse til registrering MO 2A
' => '
Her ses "Anmeldelse til syn og/eller registrering af motorkørertøjer m.v.".
Også kaldet MO 2A.
'.visbilled('1', 'billed0828.jpg', 'anmeldelse til syn og/eller registrering af motorkørertøjer m.v.', false, true).'

'.afsnit('Den gang jeg købte nummerplade hos skat forgik det sådan her','
Noget af papiret udfyldes i butikken og når man aflevere papiret hos skat så udfylder de den øverste del (forbeholdt for motorkontoret) med blandt andet nummerplade nummer.

Man får en kopi af papiret.
').'
Idag er det nok lavet om.
'

,'
typegodkendelse
' => '
Se '.ahref('typegodkendelser.php', 'typegodkendelser').'.

Typegodkendelsesnummeret på min Kymco Super 8 4T hedder "e4*2002/24*1464" (det står på fabrikationspladen).

Typeanmeldelsesnummeret er "E 16491" (det står i typeattesten).

De numre står også i typegodkendelsen som passer til scooteren.
Der kan være flere forskellige typegodkendelser til samme scootermodel.

Ved at bruge typegodkendelsesnummeret og typeanmeldelsesnummeret kan man se om man har fat i den korrekte typegodkendelse som passer til scooteren.
'.visbilled('1', 'billed3337.jpg', 'typegodkendelse og typeattest sammenligning', false, true).'

Hvis typegodkendelsen er efter år 2000 cirka ser typeanmeldelsesnummeret ud til at starte med E og typegodkendelsen kaldes så for "Anmeldt EF-typegodkendelse".
Før år 2000 cirka starter typeanmeldelsesnummeret med S (Der er nogle få hvor de starter med A eller G) og typegodkendelsen kaldes så for "Standard typegodkendelse" eller "Godkendelseserklæring".

Starter typeanmeldelsesnummeret med E så har scooteren et EF-typegodkendelsesnummer i stil med "e11*2002/24*1234".
Starter typeanmeldelsesnummeret med S eller A eller G så har scooteren ikke et EF-typegodkendelsesnummer.

Da 30 km/t invalideknallerter med 3 hjul ikke skal registeres så findes der vist ikke nogen typegodkendelser til dem.

Fra '.ahref('http://www.trafikstyrelsen.dk/DA/Syn-og-K%C3%B8ret%C3%B8jer/Typegodkendelser/Regler-om-typegodkendelse.aspx').'.
'.citat('
Forskellige former for typegodkendelser

Der findes fire forskellige former af typegodkendelser, og hvilken godkendelse, man skal bruge, afhænger bl.a. af, om man kun skal have godkendt et enkelt køretøj eller en hel serie. Indehaveren af en godkendelse har pligt til at oplyse Trafikstyrelsen om ændringer på køretøjet, som kan have betydning for godkendelsen.

1. Standardtypegodkendelse, omfatter flere ens, seriefremstillede, helt færdigopbyggede køretøjer. (For tiden normalt varebiler og påhængs- og campingvogne). Godkendelsen kan ske på baggrund af enten en ansøgning eller en anmeldelse. Det er kun køretøjsfabrikanter eller deres repræsentanter (importører), der kan få standardtypegodkendt et køretøj.
2. Anmeldt EF-typegodkendelse, omfatter flere ens, seriefremstillede, helt færdigopbyggede køretøjer, hvor køretøjet i sin helhed er EF-godkendt, eller flere ens, seriefremstillede, ikke færdigopbyggede køretøjer hvor det ikke færdigopbyggede køretøj er EF-typegodkendt. Det er kun køretøjsfabrikanter eller deres repræsentanter (importører), der kan anmelde en EF-typegodkendelse.
3. Typegodkendelse, omfatter flere ens chassiser. Godkendelsen kan ske på baggrund af enten en ansøgning eller en anmeldelse. Det er kun køretøjsfabrikanter eller deres repræsentanter (importører), der kan få typegodkendt et køretøj.
4. Godkendelseserklæring, omfatter et enkelt chassis. Godkendelsen kan ske på baggrund af enten en ansøgning eller en anmeldelse.
').'
'

,'
statistik
' => '
På '.high('http://www.mclf.dk/statistikmff/').' kunne man tidligere se noget statistik om nyregisteret scootere og hvilke modeller der er solgt, hvor mange og hvor i landet de er solgt (siden er lukket nu).

Jeg fik dog downloadet noget data og her er eksempler på data sorteret efter hvilke modeller der sælges flest af.

'.visfil('1', 'scooterhjemmeside/download/knallert_statistik.zip').'

Lille knallerter : Uge 1 - 31 (2012)
'.
box(array('70', '250')
   ,array(
       array('Solgt', 'Mærke Model')
      ,array('1872', 'PGO HOT 50 / PMX 50')
      ,array('978', 'VGA DIGITA')
      ,array('337', 'VGA GRIDO')
      ,array('324', 'LEONE SWAN')
      ,array('275', 'PGO DR. BIG')
      ,array('188', 'PGO PA 50')
      ,array('162', 'PEUGEOT SPEEDFIGHT 3')
      ,array('143', 'PEUGEOT LUDIX PRO')
      ,array('141', 'KYMCO VITALITY')
      ,array('125', 'KYMCO AGILITY')
      ,array('118', 'KEEWAY F-ACT')
      ,array('100', 'PGO PA 50')
      ,array('95', 'GENERIC TRIGGER 50')
      ,array('91', 'PGO BF 50')
      ,array('85', 'YAMAHA SC 50 M')
      ,array('84', 'KYMCO SUPER 8')
      ,array('71', 'PIAGGIO TYPHOON')
      ,array('67', 'GENERIC RACE')
      ,array('63', 'PIAGGIO ZIP')
      ,array('61', 'CPI ARAGON S-LINE')
      ,array('60', 'SYM ORBIT II 50S')
      ,array('60', 'PGO G-MAX')
      ,array('60', 'DERBI SENDA')
      ,array('51', 'YAMAHA YN 50 M')
      ,array('51', 'TOMOS CLASSIC')
      ,array('50', 'PIAGGIO STALKER')
      ,array('48', 'BAOTIAN SUPERMOTO')
      ,array('44', 'LEONE SWAN')
      ,array('42', 'YAMAHA YN 50 FM')
      ,array('40', 'VGA VERSUS')
      ,array('40', 'SYM SYMPHONY')
      ,array('39', 'HOOPER ONE 30')
      ,array('38', 'YAMAHA YN 50 FM NEO')
      ,array('36', 'SYM FIDDLE II')
      ,array('35', 'SYM MIO 50')
      ,array('35', 'SYM JET SPORT X')
      ,array('34', 'PEUGEOT TWEET')
      ,array('34', 'KEEWAY HURRICANE')
      ,array('33', 'SYM ORBIT II 50 TS')
      ,array('33', 'SYM JET 4 R 50')
      ,array('32', 'HOOPER LEO')
      ,array('29', 'PIAGGIO ZIP')
      ,array('24', 'PIAGGIO FLY')
      ,array('24', 'PEUGEOT KISBEE')
      ,array('23', 'KEEWAY RY 6')
      ,array('22', 'SYM SYMPHONY SR 50')
      ,array('22', 'PIAGGIO NRG')
      ,array('21', 'BENDA SCOOT')
      ,array('20', 'VGA UKENDT')
      ,array('20', 'PIAGGIO LX')
      ,array('20', 'PEUGEOT VIVA 3')
      ,array('20', 'BAOTIAN QT 50 9D-30')
      ,array('19', 'VGA MOVER')
      ,array('19', 'HOOPER FOURIOUS 30')
      ,array('18', 'PEUGEOT TKR')
      ,array('18', 'GIANTCO STEALTH')
      ,array('17', 'YAMAHA JOG')
      ,array('17', 'UKENDT UKENDT')
      ,array('16', 'PIAGGIO LIBERTY')
      ,array('16', 'CPI OLIVER CITY')
      ,array('15', 'YAMAHA SC 50 M')
      ,array('15', 'E MAX UKENDT')
      ,array('14', 'SYM ORBIT 50')
      ,array('14', 'SYM DD 50')
      ,array('14', 'KYMCO PEOPLE 50')
      ,array('14', 'KYMCO LIKE 50')
      ,array('13', 'YAMASAKI MC 30')
      ,array('12', 'SYM JET 4 50')
      ,array('12', 'BAOTIAN UKENDT')
      ,array('12', 'BAOTIAN QT 50 12D-30')
      ,array('11', 'PIAGGIO ZIP 4T')
      ,array('11', 'PIAGGIO RUNNER')
      ,array('11', 'GIANTCO VENUS II')
      ,array('11', 'BAOTIAN BT 49 QT')
      ,array('10', 'ZHENHUA DAX')
   )
)
.'

Stor knallert : Uge 1 - 31 (2012)
'.
box(array('70', '250')
   ,array(
       array('Solgt', 'Mærke Model')
      ,array('218', 'VGA DIGITA')
      ,array('183', 'PGO BIG MAX')
      ,array('149', 'VGA GRIDO')
      ,array('81', 'HONDA NSC 50')
      ,array('46', 'EMAX 110 S')
      ,array('37', 'PGO T-REX')
      ,array('35', 'PEUGEOT SPEEDFIGHT 3')
      ,array('34', 'CPI ARAGON S-LINE')
      ,array('29', 'PGO BF 50')
      ,array('27', 'PIAGGIO APE 50')
      ,array('27', 'PGO G-MAX')
      ,array('22', 'YAMAHA YN 50 F')
      ,array('20', 'ADLY MOTO UKENDT')
      ,array('19', 'KYMCO SUPER 8')
      ,array('18', 'SYM JET 4')
      ,array('16', 'PEUGEOT VIVA 3')
      ,array('15', 'VGA MOVER')
      ,array('15', 'KYMCO AGILITY')
      ,array('13', 'E MAX 110 S')
      ,array('12', 'UKENDT UKENDT')
      ,array('12', 'SYM ORBIT II 50')
      ,array('12', 'GIANTCO VENUS II')
      ,array('11', 'PIAGGIO LX')
      ,array('11', 'PEUGEOT TWEET')
      ,array('10', 'VGA VERSUS')
      ,array('10', 'PGO LIGERO 50')
      ,array('10', 'KYMCO VITALITY')
   )
)
.'
'

,'
coc
' => '
Hvad er COC og hvad skal man bruge det til ?
Jeg ved det endnu ikke men samler info om det har...


COC står for Certificate Of Conformity.
Certificate Of Conformity kaldes vist også homologation eller EU-overensstemmelsesattest.

COC er et stykke papir der udstedes af producenten af køretøjet.
COC skulle være et bevis på at køretøjet er CE godkendt.
Det vil sige at det lever op til diverse minimum regler for det land det skal sælges i.

Jeg fik dog ikke noget COC papir da jeg købte min scooter fra ny.

'.visbilled('1', 'billed3638.jpg', 'COC', false, true).'
'.visbilled('1', 'billed3639.jpg', 'COC', false, true).'

'.visfil('1', 'scooterhjemmeside/download/tisong_tm300_coc.pdf', 'tisong TM-300 COC').'

'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
