<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['nogetikon']               = 'ikoner/ikon_loveogregler2.png';

$title = "love og regler til scootere og knallerter";
$overskrift = "love og regler til scootere og knallerter";
$metadescription = "information om den danske lovgivning til scootere/knallerter (lille knallert og stor knallert) der må køre 25, 30 og 45 km/t";

$databasecenter = array(

'
introduktion
' => '
På denne side samler jeg lovgivning og regler for scootere/knallerter.

Af og til spørger folk om man må lave en 30 km/t scooter om til en 45 km/t scooter, hvor meget man får i bøde hvis man køre for hurtigt, hvor hurtigt man må køre før man får en bøde og lignende sprøgsmål.

Det er meningen at man skal kunne finde svar på sådanne spørgsmål på denne side.

Næsten alt teksten på denne side er kopieret direkte fra andre hjemmesider.

<mark>Vær opmærksom på at bare fordi det står her på siden behøver det ikke være rigtigt.
Det kan være svært at finde ud af om en lov stadig gælder eller om der er kommet en ny lov.</mark>
'

,'
nyheder
' => '
'.afsnit('19. Januar 2013','
Der er kommet nye regler i forbindelse med undervisning til knallerkørekort.

De nye regler betyder blandt andet at man skal have førstehjælpskursus og at man får et kørekort i stedet for et knallertbevis og det bliver også dyrere.

Jeg har samlet info om de nye regler i forummet emnet '.ahref('http://scootergrisen.dk/forum/viewtopic.php?f=4&t=956', 'De nye regler om knallertundervisning (fra 19. Januar 2013)').'.
').'

'.afsnit('1. Januar 2012','
Der er kommet nye regler i forbindelse med hvor meget man får i bøde og hvornår man får bøde.

Blandt andet kan man nu allerede få bøde hvis man køre 1 km/t hurtigere end det tilladte.
').'
'

,'
kilder
' => '
Teksterne her på siden er primærst kopieret fra følgende sider.

'.ahref('http://www.trm.dk', 'www.trm.dk').'
'.ahref('http://www.sikkertrafik.dk', 'www.sikkertrafik.dk').'
'.ahref('https://www.retsinformation.dk', 'www.retsinformation.dk').'
'

,'
filer
' => '
'
.visfil('1', 'scooterhjemmeside/download/vejledning_om_syn_af_koretojer.pdf')
.visfil('1', 'scooterhjemmeside/download/direktiv_2002_24.pdf')
.visfil('1', 'scooterhjemmeside/download/direktiv_2006_126.pdf')
.visfil('1', 'scooterhjemmeside/download/lovforslag_nr_l39.pdf')
.'
'

,'
bøder
' => '
Den 1. Januar 2012 kom der nye regler for hvornår og hvor meget man får i bøde.

De nye regler betyder blandt andet at man nu kan få bøde blot man bliver målt til at køre 1 km/t hurtigere end det tilladte.

Bødetakster ved fartkontrol og rullefelt er ikke ens.
Efter hvad jeg kan forstå så må man gerne køre på en lille knallert som har en topfart på 39 km/t hvis bare man højst køre 30 km/t på den.

'.afsnit('bøder ved fartkontrol (for eksempel lasermåling)', '
Lille knallert kan få bøde hvis den bliver kørt med 31 km/t.
Stor knallert kan få bøde hvis den bliver kørt med 46 km/t.

'.ahref('http://www.sikkertrafik.dk/Site/Knallertteori/Foraeldre/Straf-og-boder/bodetakster.aspx', 'Bødetakster for lille knallert').'

'.ahref('http://www.sikkertrafik.dk/Raad-og-viden/I-bil/Boeder-og-straf/Boedetakster/Stor-knallert.aspx', 'Bødetakster for stor knallert').'
').'

'.afsnit('bøder på rullefelt (måling af topfart)', '
Lille knallert kan få bøde hvis den kan køre 40 km/t på rullefelt.
Stor knallert kan få bøde hvis den kan køre 60 km/t på rullefelt.

'.ahref('http://www.sikkertrafik.dk/Raad-og-viden/Knallert/Lille-knallert/Rullefelt.aspx', 'Rullefelt lille knallert').'

'.ahref('https://www.sikkertrafik.dk/Raad-og-viden/Knallert/Stor-knallert/Boeder-og-straffe-for-stor-knallert.aspx', 'Rullefelt stor knallert').'
').'
'.afsnit('ekstra oplysninger', '
Jeg syntes der er nogen modstridende oplysninger alt efter hvor man læser.
Som for eksempel i '.ahref('download/vejledning_om_syn_af_koretojer.pdf', 'Vejledning om syn af køretøjer').' hvor der blandt andet står følgende.

'.citat('
11.03.040 Knallert
(1) Ved standardtypegodkendelse tillades den fastsatte hastighedsgrænse overskredet
med højst 5%.
(2) Ved anden hastighedsmåling end nævnt i pkt. (1) må den fastsatte hastighedsgrænse
på 30 km/h for en lille knallert og 45 km/h for en stor knallert ikke kunne
overskrides med mere end 20 %.
').'
I '.ahref('http://www.youtube.com/watch?v=sc3AuW2TWq0', 'denne video').' kan du se hvordan det kan se ud når man bliver stopper for at køre for hurtigt på scooter.
').'
'

,'
Bekendtgørelse om detailforskrifter for køretøjers indretning og udstyr
' => '
'.afsnit('040 Knallert','
To- eller tre-hjulet køretøj med en forbrændingsmotor med et slagvolumen på ikke over 50 cm3 eller med elmotor og med en konstruktivt bestemt maksimal hastighed på højst 45 km/h.
').'

'.afsnit('7.01.041 Stor knallert','
(1) Motorens effekt skal være begrænset på en sådan måde, at knallertens maksimale hastighed kun vanskeligt kan forøges. Bestemmelsen kan anses for opfyldt, hvis knallerten opfylder et af nedenstående krav:
a) De tekniske krav i kapitel 7 om foranstaltninger mod ulovlige indgreb i Rådets direktiv 97/24/EF.
b) De tekniske krav i annex 6 til ECE-rekommendation R.E.3.
').'
'.afsnit('7.01.042 Lille knallert','
(1) Motorens effekt skal være begrænset på en sådan måde, at knallertens maksimale hastighed kun vanskeligt kan forøges. Bestemmelsen anses for opfyldt, hvis knallerten opfylder kravene i nedenstående pkt. a) eller både pkt. b) og c):
a) De tekniske krav i kapitel 7 om foranstaltninger mod ulovlige indgreb i Rådets direktiv 97/24/EF.
b) Effekt:
– Motorens største effekt må ikke overstige 0,9 kW (1,2 hk) og skal være begrænset på en sådan måde, at den kun vanskeligt kan forøges.
– Motorens største effekt må ikke overstige 2,2 kW (3 hk), når den i pkt. c) nævnte bøsning er fjernet.
– For el-motor må den nominelle effekt ikke overstige 0,9 kW.
– Motoren skal være således indrettet og begrænset, at ændringer eller udskiftninger af komponenter i indsugningssystemet (luftfilter, karburator, karburatorstuds mv.) og udstødningssystem (udstødningsrør, lyddæmper mv.) ikke kan medføre nogen væsentlig forøgelse af motorens effekt.
– Ved standardtypegodkendelse skal der foreligge en afprøvning af motorens maksimale effekt. Afprøvningen skal foretages efter DIN 70020 eller Rådets direktiv 95/1/EØF.
c) Indsugningssystem:
– Motorens indsugningskanal skal være forsynet med en hærdet bøsning af hårdhed mindst 60 Rc, som skal være indstøbt, indpresset og fastsvejset eller på lignende måde solidt fastgjort i motorens indsugningskanal. Bøsningen skal have en længde, der kan være indtil 2,5 mm mindre end indsugningskanalens længde, når den er anbragt i støbejern, og indtil 3,0 mm mindre, når den er anbragt i letmetal. Bøsningens gennemstrømningstværsnit (lysning) skal, bortset fra eventuelle mindre afrundinger (rejfninger) i hver ende, være af uforandret dimension i hele længden.
– Stemplet må i topstilling ikke dække nogen del af indsugningsåbningen i cylinderspejlet (indsugningsporten).
').'

'.afsnit('7.05.040 Knallert','
(1) Støjgrænseværdierne gældende for knallert er i overensstemmelse med grænseværdierne i kapitel 9 i EF-direktiv 97/24/EF.
(2) For knallert gælder følgende støjgrænser målt efter metode I:
a) 66 dB(A) for to-hjulet knallert med en konstruktivt bestemt maksimalhastighed på ikke over 25 km/h.
b) 71 dB(A) for to-hjulet knallert med en konstruktivt bestemt maksimalhastighed på over 25 km/h.
c) 76 dB(A) for tre-hjulet knallert.
').'

'.afsnit('8.02.040 Knallert','
(1) Knallert skal være forsynet med dæk med en mønsterdybde på mindst 1,0 mm.
').'


'.afsnit('9.01.041 Stor knallert','
(1) For tre-hjulet stor knallert gælder reglerne for tre-hjulet motorcykel. Dog kan tværsnitsdybden i det øverste lodrette radialplan gennem hjulets centrum være mindre end 30 mm, ligesom afstanden i pkt. 9.01.021 (1) d) kan forøges til 0,20 m.
').'
'.afsnit('9.01.042 Lille knallert','
(1) Lille knallert skal være forsynet med skærme over hjulene.
').'

'.afsnit('10.01.041 Stor knallert','
(1) To-hjulet knallert skal være forsynet med fodhvilere til fører.
').'
'.afsnit('10.01.042 Lille knallert','
(1) Lille knallert må ikke være forsynet med sæde, håndrem, fodhvilere eller lignende beregnet til passager.
(2) Lille knallert skal være forsynet med pedaler eller fodhvilere beregnet til fører.
').'

'.afsnit('10.04.042 Lille knallert','
(1) Lille knallert skal være forsynet med hastighedsmåler.
').'
'.afsnit('10.04.041 Stor knallert','
(1) Stor knallert skal være forsynet med hastighedsmåler.
').'

'.afsnit('041 lille knallert','
Knallert med en konstruktivt bestemt maksimal hastighed på højst 30 km/h, jf. dog punkt 041.

Lille knallert inddeles i:

'.afsnit('personknallert','
2 hjulet knallert, der er indrettet til personbefordring.
').'

'.afsnit('vareknallert','
2 hjulet knallert, der er indrettet til varetransport.
').'

'.afsnit('invalideknallert','
3 hjulet knallert, der er indrettet til befordring af invalideret fører alene.
Anden 3 hjulet knallert anses som stor knallert.
').'
').'

'.afsnit('042 stor knallert','
Knallert med en konstruktivt bestemt maksimal hastighed på over 30 km/h eller trehjulet knallert, bortset fra invalideknallert, med en konstruktivt bestemt maksimal hastighed på højst 30 km/h.
').'
'

,'
hastighedsmåling
' => '
En knallert må ved kontrolmåling ikke kunne overskride den fastsatte hastighedsgrænse på 30 km/t for lille knallert og 45 km/t for stor knallert med mere end 20 %.
Reglerne om kontrolmåling fremgår af Vejledning om syn af køretøjer, afsnit 11.03.

'.afsnit('11.03.001 Hastighedsmålemetode','
(1) Motordrevet køretøjs største hastighed beregnes som resultatet af lige mange
hastighedsmålinger foretaget i begge retninger på vandret vej.
(2) Anden målemetode end den under 11.03.001 (1) nævnte kan anvendes, hvis
der er dokumentation for ligeværdighed.

').'

'.afsnit('11.03.040 Knallert','
(1) Ved standardtypegodkendelse tillades den fastsatte hastighedsgrænse overskredet
med højst 5%.
(2) Ved anden hastighedsmåling end nævnt i pkt. (1) må den fastsatte hastighedsgrænse
på 30 km/h for en lille knallert og 45 km/h for en stor knallert ikke kunne
overskrides med mere end 20 %.
').'
'

,'
anhænger
' => '
En anhænger kaldes i lovtekster gerne for påhængsvogn.

Tidligere har det vist ikke været tilladt at have anhænger på en knallert/scooter hvad enten det var en lille eller stor knallert.
I lovteksten stod "Til knallert må ikke kobles påhængskøretøj.".

Men i '.ahref('download/lovforslag_nr_l39.pdf','Lovforslag nr. L 39').' står blandt andet noget om anhænger til 45 km/t knallert. Der står også "Loven træder i kraft den 1. april 2012.".

Umiddelbart lader det til at det nu er tilladt at køre med anhænger på en 45 km/t scooter.

Så er det bare om den skal være godkendt og om der overhovedet er nogen i danmark der sælger sådan nogen anhængere endnu og om man må bygge dem selv.

Påhængsvogn til stor knallert må maksimum have en totalvægt på 100 kg, maksimalt være 2,5 meter lang og maksimalt 1 meter bred. Dækmønster skal mindst være 1 mm og må ikke være indrettet til personbefordring.

Fra følgende fil har jeg kopieret noget tekst ud som handler om påhængsvogn til stor knallert.

'.visfil('1', 'scooterhjemmeside/download/vejledning_om_syn_af_koretojer.pdf', 'Vejledning om syn af køretøjer').'

'.afsnit('2. Identifikation og påskrifter','
02 Påskrifter om tilladt totalvægt, last m.v.

2.02.160 Påhængsvogn til stor knallert
(1)Påhængsvogn til stor knallert følger reglerne for påhængsvogn til bil.
').'



'.afsnit('3. Vægt og dimensioner','
01 Vægt og akseltryk m.v.

3.01.160 Påhængsvogn til stor knallert
(1)Tilladt totalvægt må ikke overstige 100 kg.
(2)Knallertfabrikantens erklæring om teknisk tilladt totalvægt af påhængskøretøj, jf. pkt. 3.01.200 (2) a), kan erstattes af en erklæring fra fabrikanten af tilkoblingsanordningen.
Denne erklæring skal omfatte knallerten.

02 Højde, bredde og længde

3.02.160 Påhængsvogn til stor knallert
(1)Længden må ikke overstige 2,50 m.
(2)Bredden må ikke overstige 1,00 m.
').'



'.afsnit('5. Bremser','
5.01.160 Påhængsvogn til stor knallert
(1)Såfremt påhængsvogn til stor knallert er forsynet med en driftsbremse, skal denne være en påløbsbremse.
').'



'.afsnit('6. El-anlæg, lygter, reflekser','
03 Lygter til markering

6.03.160 Påhængsvogn til stor knallert
(1)Påhængsvogn til stor knallert følger reglerne for påhængs-/sættevogn O1.

04 Lygter til signalgivning

6.04.160 Påhængsvogn til stor knallert
(1)Påhængsvogn til stor knallert følger reglerne for påhængs-/sættevogn til bil.
').'



'.afsnit('8. Bærende elementer','
02 Hjul

8.02.160 Påhængsvogn til stor knallert
(1)Påhængsvogn til stor knallert skal være forsynet med dæk med en mønsterdybde
på mindst 1,0 mm.
').'



'.afsnit('9. Karrosseri','
01 Karrosseri

9.01.160 Påhængsvogn til stor knallert
(1)Påhængsvogn til stor knallert skal være forsynet med hjulafskærmning efter reglerne for påhængs-/sættevogn O1.

02 Opbygning med lad m.v.

9.02.160 Påhængsvogn til stor knallert
(1)Påhængsvogn til stor knallert må ikke være indrettet til personbefordring.
').'
'

,'
dimensioner
' => '
(1) To-hjulet knallert må ikke have større bredde end 1,00 m.
'

,'
transport af ting
' => '
På knallert må ikke medføres genstande, der over 2 m lange, eller over 70 cm brede.
Genstande, der medføres, må ikke hindre knallertføreren i at have fuldt herredømme over knallerten eller i at knallertføreren kan give tegn.
'

,'
vægt
' => '
Tjenestevægt kan sættes lig med køreklar vægt.
Dog skal køreklar vægt tillægges vægten af føreren (75 kg) for knallerter, motorcykler og trehjulede biler samt for lette firehjulede biler (quadricykler) omfattet af EF-direktiv 2002/24/EF om typegodkendelse af knallerter og motorcykler mv.
'

,'
tundele
' => '
Det er forbudt at sælge tuningsdele, der kan anvendes til knallerter. Tuningsdele er udstyr, der kan anvendes i motor eller udveksling, så knallerten kan køre hurtigere end den fastsatte hastighedgrænse. Dette fremgår af bekendtgørelse nr. 142 af 14. april 1977 om forbud mod forhandling af særligt hastighedsøgende udstyr (»tuningsdele«), der kan anvendes til knallert.

'.afsnit('bekendtgørelse nr. 142 af 14. april 1977 ','
Bekendtgørelse om forbud mod forhandling af særligt hastighedsøgende udstyr (»tuningsdele«), der kan anvendes til knallert. (* 1)
I henhold til § 68, stk. 3, og § 118, stk. 3, i færdselslov nr. 287 af juni 1976 fastsættes:
§ 1. Ved tuningsdele forstås udstyr, der kan anvendes i motor eller udveksling på en knallert, således at køretøjet kan yde større hastighed end det er typegodkendt til.
Stk. 2. Som tuningsdele anses ikke udstyr, der er beregnet til at anvendes i motor eller udveksling på en knallert i overensstemmelse med justitsministeriets godkendelse af køretøjet.
§ 2. Forhandling af tuningsdele som nævnt i § 1 er forbudt.
§ 3. Overtrædelse af § 2 straffes med bøde.
§ 4. Bekendtgørelsen træder i kraft den 1. maj 1977.
').'
'

,'
nummerplade
' => '
Alle store knallerter skal registreres.
Fra 1. juli 2006 skal alle nye små knallerter registreres, dog ikke invalideknallerter.
'

,'
må man lave en lille knallert om til en stor knallert eller omvendt ?
' => '
Da det ikke er tilladt at foretage konstruktive ændringer på en knallert, er det ikke tilladt at ændre en lille knallert til en stor knallert eller omvendt.
'

,'
paragraf 28 i udstyrsbekendtgørelsen
' => '
'.afsnit('Stk. l.','
For påhængsvogn og sættevogn finder bestemmelserne i 13 og 15 om hængsler, ladbeslag o.lign. samt om reklamefigurer og identitetsmærker tilsvarende anvendelse, hvorhos hjulbeklædningen skal opfylde kravet i afsnit VII.
').'
'.afsnit('Stk. 2.','
Bestemmelserne i § 9 om skærme finder tilsvarende anvendelse på disse køretøjer, dog således at også forhjul skal være afskærmet efter bestemmelserne i § 9, stk. 3. For toakslet påhængsvogn, som styres ved drejning af forakslen om dennes midtpunkt, kan den del af skærmen over forhjulet, som vil få større højde over vejbanen end dækkets øverste punkt, dog undlades, såfremt dele af køretøjets karrosseri dækker hjulets overside i dækkets bredde.
I dette tilfælde kan endvidere den forreste del af overskærmen undlades.
').'
'.afsnit('Stk. 3.','
For påhængs- og sættevogn finder bestemmelserne i §16 om egentransport som led i et køretøjs opbygning, eller reparation og om kørsel med nyt køretøj mellem skib, bane og forretningslokale tilsvarende anvendelse.
Det er endvidere tilladt at undlade montering af driftsbremse, hvis køretøjet ikke fremføres med en hastighed af over 3o km/t, og at undlade montering af mere end ét hjul på hvert hjulnav i tilfælde, hvor der elles kræves tvillinghjul.
').'
'

,'
Vejledning om syn af køretøjer
' => '
'.visfil('1', 'scooterhjemmeside/download/vejledning_om_syn_af_koretojer.pdf', 'Vejledning om syn af køretøjer').'

'.afsnit('Afsnit 11 - Målemetoder','
'.afsnit('11.01.001 Støjmålemetode I (kørselsmåling)','
b) for motorcykel og knallert i kapitel 9 i EF direktiv 97/24/EØF (bilag II, pkt.
2.1-2.1.5.4, bilag III, pkt. 2.1-2.1.5.4, bilag IV, pkt. 2.1-2.2.5.4 og bilag VII).
').'

'.afsnit('11.01.V01 Støjmålemetode III (særlig målemetode for knallerter)','
Metoden er kun aktuel for lille knallert, der er taget i brug før 01.04.04.
(1) Lydtrykket måles i en højde af 1,2 m og i en afstand af 7,5 m fra køretøjets midterplan.
(2) Lydtrykket måles med knallertens drivhjul roterende på rullestandens uafbremsede
ruller med størst opnåelig hastighed i højeste gear.
Der foretages lige mange og mindst to målinger på hver side af knallerten og
gennemsnittet af samtlige de målte lydtryk registreres som køretøjets støjniveau.
Rulleprøvestanden skal være indrettet som vist på nedenstående tegning.
').'

'.afsnit('11.03.040 Knallert','
(1) Ved standardtypegodkendelse tillades den fastsatte hastighedsgrænse overskredet
med højst 5%.
(2) Ved anden hastighedsmåling end nævnt i pkt. (1) må den fastsatte hastighedsgrænse
på 30 km/h for en lille knallert og 45 km/h for en stor knallert ikke kunne
overskrides med mere end 20 %.
').'
').'
'

,'
Lov om ændring af færdselsloven (Konfiskation af knallerter m.v.)
' => '
§ 1

I færdselsloven, jf. lovbekendtgørelse nr. 1276 af 24. oktober 2007, foretages følgende ændringer:
1. I § 52, stk. 5, 1. pkt., indsættes efter »Børn med en legemshøjde på under 135 cm må ikke befordres på tohjulet motorcykel«: », medmindre barnet er fyldt 5 år og anvender et barnesæde eller andet sikkerhedsudstyr, der opfylder de krav, som fastsættes i medfør af § 68«.

2. I § 52, stk. 6, 1. pkt., udgår »på en passagersiddeplads uden sikkerhedssele«.

3. I § 55, stk. 2, 1. pkt., indsættes efter »udåndingsprøve«: », spytprøve, svedprøve eller øjenbesigtigelse«.

4. I § 82 indsættes som stk. 6 og 7:
»Stk. 6. Justitsministeren kan henlægge sine beføjelser efter stk. 5 til anden statslig myndighed. Justitsministeren kan endvidere henlægge administrationen af de efter stk. 5 fastsatte bestemmelser til anden offentlig myndighed, privat organisation el.lign. og i forbindelse hermed fastsætte regler om godkendelse af sådanne myndigheder og organisationer m.v. og i øvrigt fastsætte regler for myndighedens eller organisationens virksomhed i forbindelse med administrationen af opgaverne.
Stk. 7. Justitsministeren kan fastsætte regler om adgangen til at klage over afgørelser, der er truffet i henhold til bemyndigelse efter stk. 6, 2. pkt., herunder om, at afgørelser, der er truffet af offentlige myndigheder, ikke kan påklages til anden administrativ myndighed.«

5. § 105, stk. 3, 2. pkt., ophæves, og i stedet indsættes:
»De herefter fremkomne beløb anvendes uafrundet som grundlag for reguleringen af beløbene det følgende år. De årlige beløb afrundes til nærmeste med 1 million delelige kronebeløb.«

6. I § 119, stk. 2, nr. 2, ændres »og« til: »eller«.

7. I § 124 udgår »eller bilinspektionens«.

8. I § 133 a indsættes efter stk. 4 som nyt stykke:
»Stk. 5. En knallert, som er konstruktivt ændret med henblik på hastighedsforøgelse, eller som er i en sådan ulovlig stand, at den, for så vidt angår lille knallert, kan køre 43 km i timen eller derover og, for så vidt angår stor knallert, kan køre 64 km i timen eller derover, skal konfiskeres, hvis ejeren (brugeren) af knallerten en gang tidligere, inden for de seneste 3 år før det nye forhold er begået, har gjort sig skyldig i en tilsvarende overtrædelse af § 67, stk. 2. Konfiskation kan dog undlades, hvis særlige grunde taler derfor.«
Stk. 5 bliver herefter stk. 6.

9. Efter § 134 c indsættes:
»§ 134 d. Skatteministeren kan bemyndige told- og skatteforvaltningen til at udøve de beføjelser, der i denne lov er tillagt skatteministeren.
Stk. 2. Skatteministeren kan fastsætte regler om adgangen til at påklage afgørelser, der er truffet i henhold til bemyndigelse efter stk. 1, herunder at afgørelserne ikke skal kunne indbringes for ministeren. Skatteministeren kan endvidere fastsætte regler om, at visse typer af afgørelser kan påklages til Landsskatteretten, og om Landsskatterettens behandling af sådanne klagesager.
Stk. 3. Skatteforvaltningslovens § 48 finder tilsvarende anvendelse i forhold til afgørelser, der træffes i henhold til bemyndigelse efter stk. 1, og afgørelser af klagesager, der træffes efter regler fastsat i medfør af stk. 2. I tilfælde, hvor der i medfør af stk. 2 er fastsat regler om klageadgang til Landsskatteretten, finder skatteforvaltningslovens § 49 tilsvarende anvendelse i forhold til Landsskatterettens afgørelser af sådanne klagesager.«

§ 2

Stk. 1. Loven træder i kraft dagen efter bekendtgørelsen i Lovtidende.
Stk. 2. Overtrædelse af færdselslovens § 67, stk. 2, tillægges ikke gentagelsesvirkning efter færdselslovens § 133 a, stk. 5, som indsat ved denne lovs § 1, nr. 8, hvis overtrædelsen er begået inden lovens ikrafttræden, jf. dog stk. 3.
Stk. 3. Har ejeren (brugeren) af en knallert to gange før lovens ikrafttræden gjort sig skyldig i overtrædelse af færdselslovens § 67, stk. 2, ved at have foretaget konstruktive ændringer af en knallert, og gør den pågældende efter lovens ikrafttræden, og inden 3 år efter at den første overtrædelse er begået, sig skyldig i en overtrædelse af færdselslovens § 67, stk. 2, ved at være ejer (bruger) af knallert, der er konstruktivt ændret med henblik på hastighedsforøgelse, eller som er i en sådan ulovlig stand, at den, for så vidt angår lille knallert, kan køre 43 km i timen eller derover og, for så vidt angår stor knallert, kan køre 64 km i timen eller derover, skal der ske konfiskation efter færdselslovens § 133 a, stk. 5, som indsat ved denne lovs § 1, nr. 8.
Givet på Christiansborg Slot, den 17. juni 2008
'

,'
Kapitel 8 - Særlige regler for knallerter
' => '
§ 51. Knallert må ikke føres ved siden af andet køretøj.
Stk. 2. § 49, stk. 2 og 3, om placering på vej og kørsel i vejkryds gælder også for lille knallert.
Stk. 3. Tohjulet knallert skal trækkes over fortov eller gangsti. Knallert kan dog køres over fortov eller gangsti, når overkørslen sker fra en sidevej.
Stk. 4. Fører af tohjulet knallert skal under kørslen have begge fødder på pedalerne eller fodhvilerne og mindst den ene hånd på styret.
Stk. 5. Knallertkører må ikke under kørslen holde fast i andet køretøj eller i fører af eller passager på andet køretøj.
Stk. 6. På tohjulet knallert må ikke befordres andre personer end føreren. På trehjulet knallert må ikke befordres flere personer, end knallerten er konstrueret til.
Stk. 7. Passagerer under 5 år må ikke befordres på trehjulet knallert, medmindre passagersiddepladsen er forsynet med sikkerhedssele.
Stk. 8. På knallert må ikke medføres genstande, der er mere end 2 m lange eller 70 cm brede. Genstande, der medføres, må ikke hindre knallertkøreren i at have fuldt herredømme over knallerten eller i behørig tegngivning. Knallertkørere må heller ikke medføre genstande, der i øvrigt er til ulempe for den øvrige færdsel. Transportministeren kan fastsætte bestemmelser om største længde, bredde, højde og vægt for genstande, som befordres på knallerter, der er særligt indrettet til varetransport eller som invalidekøretøj.
'

,'
fra politiets hjemmeside
' => '
'.citat('
245 knallerter taget for at køre for hurtigt

Politiet har været på knallert- og cykelkontrol i hele landet

Fra den 11. til 14. maj afviklede politiet en landsdækkende, målrettet kontrol af knallerter og cykler. I løbet af de fire dage blev i alt 245 knallerter afsløret i at køre for stærkt. 232 af dem var små knallerter, som højst må køre 30 kilometer i timen. 13 af dem var store knallerter, som højst må kunne køre 45 kilometer i timen.

Politiet havde de såkaldte rullefelter med ude på kontrollen. Det er et apparat, hvor knallertens bagdæk placeres på to ruller. Knallerten startes, og politiet giver gas for at se, hvor hurtigt den kan køre.

<span class="bold">Kan en lille knallert køre 43 kilometer i timen eller mere, får ejeren en bøde, fordi den kan køre væsentligt hurtigere end tilladt. Hvis en stor knallert kan køre 64 kilometer i timen eller derover, udløser det en bøde. Fælles for begge knallerttyper gælder, at hvis knallerten bliver kontrolleret igen i løbet af tre år og stadig kan køre væsentligt for stærkt, bliver den konfiskeret af politiet.</span>

Kontrollen drejede sig dog ikke kun om hastighed. Derfor blev i alt 76 knallerter skrevet for fejl og mangler eller konstruktive ændringer. 18 fik bøder for ikke at have taget knallertbevis, og 72 blev snuppet uden styrthjelm.
18 kørte spirituskørsel på lille knallert, fire på stor knallert og 62 knallertkørere havde ikke tegnet ansvarsforsikring.

Politiet fik også fat i en del cyklister, som overtrådte loven. 98 kørte på fortovet eller en gangsti, da politiet kom forbi, og 19 cyklede over for rødt lys.
').'
Kilde : '.ahref('http://www.politi.dk/da/aktuelt/nyheder/2009/knallertresultat_15052009.htm').'
'

,'
direktiv 2002/24
' => '
EF-direktiv 2002/24/EF vedrørende standardtypegodkendelse af to- og trehjulede motordrevne køretøjer.
'.visfil('1', 'scooterhjemmeside/download/direktiv_2002_24.pdf').'
Direktivet er vedtaget i år 2002.

Det kan godt være det hedder EC direktiv eller EU direktiv.

I direktivet opdeles sådan :
2 hjulet scootere i klassen L1e.
3 hjulet scootere i klassen L2e.
Motorcykler er vist i klassen L3e... men er ikke sikker.
'

,'
direktiv 2006/126
' => '
EF-direktiv 2006/126/EF om kørekort (omarbejdning).
'.visfil('1', 'scooterhjemmeside/download/direktiv_2006_126.pdf').'
'

,'
reklamationsret
' => '
Reklamationsret betyder at du har ret til at klage til butikken hvor du for eksempel har købt din scooter over fejl og mangler på varen.

Reklamationsretten er den ret som købeloven giver dig.
Købeloven giver dig 2 års reklamationsret.
Det er ikke muligt at aftale en kortere frist.
De 2 års reklamationsret gælder for hele varen og ikke kun dele af varen.
Det vil sige butikken kan ikke lovligt sige at der for eksempel kun er 6 måneders reklamationsret på batterierne i en elektrisk scooter.

'.afsnit('købeloven', '
'.ahref('https://www.retsinformation.dk/Forms/R0710.aspx?id=1419', 'retsinformation.dk - Købeloven').'
'.ahref('http://www.forbrug.dk/Dine-rettigheder/Forbrugerguides/Koebelov', 'forbrug.dk - Købeloven').'
').'
'

,'
garanti
' => '
Garanti er noget som butikken eller producenten kan vælge at give dig.
En garanti er noget som giver dig bedre fordele end de 2 års reklamationsret som du allerede har ifølge købeloven.

Du har ikke krav på en garanti. Det bestemmer butikken selvom de vil give eller tilbyde.

En fabriksgaranti er en garanti der gives at producenten.

En garanti kan godt kun dække dele af varen og ikke hele varen.
Totalgaranti er en garanti der dækket hele varen og ikke kun dele af den.

En garanti erstatter ikke dine 2 års reklamationsret. Men gør dig bedre stillet.
'

,'
lovforslag nr L 39
' => '
'.visfil('1', 'scooterhjemmeside/download/lovforslag_nr_l39.pdf').'
'

,'
lyd
' => '
6.06.042 Lille knallert
(1)Lille knallert skal være forsynet med elektrisk lydsignalapparat og/eller med klart lydende klokke, som er anbragt på styret.
'

,'
typegodkendelser til stor knallert
' => '
Hos '.ahref('http://www.trafikstyrelsen.dk/DA/Syn-og-K%C3%B8ret%C3%B8jer/Typegodkendelser/Regler-om-typegodkendelse.aspx', 'trafikstyrelsen.dk').' står at stor knallert ikke behøver typegodkendelse.
'

,'
kørekort regler
' => '
På '.ahref('https://www.retsinformation.dk/Forms/R0710.aspx?id=145040', 'kørekortbekendtgørelsen (retsinformation.dk)').' står kørekort reglerne.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
