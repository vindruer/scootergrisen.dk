<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "batteri - Elektrisk";
$overskrift = "batteri - Elektrisk";
$metadescription = "lær om starterbatteriet der sidder i en scooter/knallert som bruges til at drive startermotoren og andet elektrisk udstyr";

$databasecenter = array(

'
batteri
' => '
Her skriver jeg om starterbatterier som bruges til at starte motoren.
Hvis du leder efter information om batterier til elektriske scootere så se '.ahref('elektriskscooter_batteri.php', 'elektrisk scooter # batterier').'.

Scooterens batteri sidder gerne midt i scooteren eller bagerst under sædet.

Her er der 2 skruer som skal fjernes først.
'.visbilled('1', 'billed1972.jpg', 'kymco super 8 4T batteri dæksel', false, true).'
Låget kan vippes op med en flad skruetrækker.
'.visbilled('1', 'billed1976.jpg', 'kymco super 8 4T batteri dæksel', false, true).'
Her ses batteriet.
Den røde ledning er monteret på plus (+) terminalen.
Den grønne ledning er monteret på minus (-) terminalen som er stelforbindelsen.
'.visbilled('1', 'billed1978.jpg', 'kymco super 8 4T batteri dæksel', false, true).'
På denne scooter sidder batteriet bagerst under sædet.
Her er ledningen på minus (-) terminalen sort.
'.visbilled('1', 'billed2374.jpg', 'pgo batteri rum', false, true).'
Hvis batteriet skal fjernes fra scooteren så fjern først den grønne/sorte ledning fra minus (-) terminalen (stelforbindelsen) for at undgå gnister og derefter den røde ledning fra plus (+) terminalen.

Der bruges primært 2 typer af starterbatterier til at starte motoren.

Vedligeholdelsesfrie og traditionelle.
Begge typer er bly-syre batterier.

'.afsnit('vedligeholdelsesfrit bly-syre batteri','
Kan kendes på at der ikke er nogen påfyldningsskruer.
'.visbilled('1', 'billed2308.jpg', 'kymco super 8 4T vedligeholdelsesfrit bly-syre batteri YTX7A-BS KY D410', false, true).'
På vedligeholdelsesfrie bly-syre batterier kan der stå MF eller "Maintenance Free".
Betegnes også VRLA (Valve Regulated Lead Acid) eller SLA (Sealed Lead Acid).
VRLA, SLA, AGM og MF referer allesammen til vedligeholdelsesfrie bly-syre batterier.
AGM står for Absorbed Glass Mat og er et glasfiber net mellem blypladerne som holder batterisyren fast.
Når batteriet fra nyt af har fået fyldt batterisyre på og lukket skal det aldrig have fyldt hverken vand eller syre på. Derfor kaldes det vedligeholdelsesfrit.
Vedligeholdelsesfrie bly-syre batterier selvaflader langsommere end traditionelle batterier.
Batterisyrens massefylde kan ikke måles med et hydrometer da det ikke er meningen man skal åbne batteriet.
Selvom batterisyren udvikler brint og ilt ved opladning så bliver det til vand igen inden i batteriet.
Blypladerne består af bly og calcium.
').'
'.afsnit('traditionelt bly-syre batteri','
Kan kendes på sine påfyldningsskruer som kan tages af.
'.visbilled('1', 'billed2142.jpg', 'traditionelt bly-syre batteri', false, true).'
Der skal engang imellem fyldes demineraliseret vand på for at holde væskeniveauet oppe.
Batterisyren i batteriet skal være mellem UPPER og LOWER mærkerne.
Massefylden kan måles med et hydrometer gennem påfyldningshullerne.
Kaldes flooded lead acid eller wet på engelsk.
Batterisyren udvikler brint og ilt når batteriet oplades som udluftes gennem et udluftningshul i siden af batteriet hvor en slange monteres.
Blypladerne består af bly og antimon.
').'
'.afsnit('batteri info','
De fleste scootere bruger 12 volt batteri.
12 volt batteri har 6 celler på cirka 2,12 til 2,2 volt hver når batteriet er fuldt opladt.

Ældre knallerter kan have 6 volt batteri som har 3 celler.

Det er bedst at holde batteriet fuldt opladt altid for at undgå problemer.
Hvis batteriet ikke holdes fuldt opladt kan det tage skade og vil ikke kunne holde en fuld opladning i fremtiden.
Køre man ikke så tit eller køre man kun korte ture kan det være nødvendigt at oplade batteriet engang imellem med en batterioplader.
').'
'.afsnit('adskildt vedligeholdelsesfrit AGM batteri','
Her se en celle fra et afskildt vedligeholdelsesfrit AGM batteri.
De sorte plader er de positive (+) elektroder.
De hvide måtter er AGM lag (absorbed glass mat) som er lavet af fin glasfiber som holder på batterisyren.
De grå plader er de negative (-) elektroder.
'.visbilled('1', 'billed2327.jpg', 'adkildt vedligeholdelsesfrit AGM bly-syre batteri', false, true).'
').'
'.afsnit('batteriets kemi','
Bly-syre batterier indeholder blyplader som kaldes elektroder.
Blypladerne er nedsænket i batterisyre som kaldes elektrolyt.
Blypladernes overflade og batterisyren ændre sig under opladning og afladning.

Tegningerne er forenklet med kun 2 blyplader. Batteriet har mange flere blyplader i virkeligheden.
'.visbilled('1', 'billed0283.jpg', 'batteriets kemi', false, true).'
'.
box(array('200', '100')
   ,array(
       array('kemisk betegnelse'        ,'står for')
      ,array(kemiskformel('pb')     ,'bly')
      ,array(kemiskformel('H2SO4')  ,'svovlsyre')
      ,array(kemiskformel('PbO2')   ,'blyperoxid')
      ,array(kemiskformel('PbSO4')  ,'blysulfat')
      ,array(kemiskformel('H2O')    ,'vand')
   )
)
.'
').'
'.afsnit('batteri koder','
Her ses et GS Yuasa GTX7A-BS batteri.
'.visbilled('1', 'billed0005.jpg', 'batteri gs gtx7a-bs', false, true).'
'.afsnit('GS Yuasa GTX7A-BS','
GS Yuasa = Producenten.
GT = Vedligeholdelsesfrit batteri.
X = Høj ydelse (har 12 ekstra bly plader som giver bedre start kraft).
7 = Ydelses niveau.
A = Placering af + og - terminalerne.
B = Terminal type.
S = Forseglet. Kan ikke spilde batterisyre.
').'

Her kan du afkode din Yuasa batteri kode.
'.visbilled('1', 'billed0266.jpg', 'Yuasa batteri koder', false, true).'
').'

'.afsnit('kapacitet (Ah)','
Ah står for "Ampere Hours" eller Ampere Timer på dansk.
Ah er batteriets kapacitet. Altså batteriets elektriske ladning.

Det er ikke altid at batteriets kapacitet er angivet på batteriet.
Og der står vist sjældent ved hvilken afladningsstrøm/tid kapaciteten er målt.
Batteriets kapacitet er kraftigt afhængig af afladningstiden og afladningsstrømmen (ampere).

'.afsnit('kapacitet for samme batteri (Kung Long WPX5L-B)','
På batteriet står 12V5Ah.

5 Ah er kapaciteten ved 10 timers afladning ved 0,5 ampere (ned til 10,50 volt).
4,25 Ah er kapaciteten ved 5 timers afladning ved 0,85 ampere (ned til 10,20 volt).
2,25 Ah er kapaciteten ved 1C (1 times) afladning ved 5 ampere (ned til 9,60 volt).
1,8 Ah er kapaciteten ved 3C (3 timers) afladning ved 15 ampere (ned til 9,60 volt).

Så den kapacitet som angives på dette batteri er altså målt ved 10 timers afladning ved 0,5 ampere ned til 10,50 volt.
Jeg ved ikke om det er en standard for batteriproducenterne at angive deres batteri kapacitet på denne måde.
').'
Koldt vejr nedsætter den kemiske proces i batteriet.
Derfor er batteriets kapacitet (Ah) i koldt vejr (om vinteren) lavere end i varmt vejr (om sommeren).
Blandt andet derfor opleves start problemer gerne i koldt vejr.
Batteriets Ah viser normalt kapaciteten ved 20 °Celsius.

Af en eller anden grund står der ikke altid på batteriet hvor mange Ah det har.
Dog kan der stå et tal i batteri modellen.
For eksempel 7 tallet i GTX7A-BS.
Dette tal passer gerne med Ah men nogle gange er batteriets Ah 1 eller 2 værdier mindre end dette tal.
YTZ7S har for eksempel 6 Ah og YTZ14S har 12Ah.
').'

'.afsnit('demineraliseret vand','
Vand fra vandhanen indeholder mineraler og salte.
Det kan ses på bunden af en gryde hvis man har kogt vand.
Hvis man bruger vandhanevand i batteriet ville det forringe batteriet fordi mineraler og salte vil give modstand.
Derfor skal man bruge demineraliseret vand i stedet for når der skal fyldes vand på et traditionelt bly-syre batteri.
Vedligeholdelsesfrie bly-syre batterier skal aldrig have fyldt demineraliseret vand på.
').'

'.afsnit('batterisyre','
Her ses en tom batterisyre beholder.
'.visbilled('1', 'billed2309.jpg', 'batterisyre', false, true).'
Batterisyre består af svovlsyre og vand.

Blandingsforholdet er cirka :
35% svovlsyre ('.kemiskformel('H2SO4').').
65% vand ('.kemiskformel('H2O').').

Blandingsforholdet af svovlsyre og vand svinger alt efter hvor opladt/afladt batteriet er.
Jo mere batteriet er opladt jo mere består batterisyren af svovlsyre.

Undgå kontakt med batterisyre.
Batterisyre er meget skadelig for øjne, hud og tøj.
').'

'.afsnit('massefylde','
Massefylde er masse (gram) per rumfang (cm³).
1 cm³ batterisyre kan for eksempel veje 1,280 gram.
Når 1 cm³ batterisyre vejer 1,280 gram så betår batterisyren af 35% svovlsyre ('.kemiskformel('H2SO4').') (eller måske mellem 32,3% - 34,7%) og resten er vand ('.kemiskformel('H2O').').

Et hydrometer bruges til at måle batterisyrens massefylde.
Altså hvor tung væsken er.

Batterisyre består af svovlsyre og vand.
Jo mere opladt batteriet er jo mere består batterisyren af svovlsyre og jo tungere er batterisyren.
Det er fordi svovlsyre er tungere end vand.

Batterisyren i denne beholder har en massefylde på 1,32 ved 20 °Celsius.
Det betyder at 1 cm³ af batterisyren vejer 1,32 gram.
'.visbilled('1', 'billed2310.jpg', 'batterisyre', false, true).'
Batteri producenterne bruger forskellig koncentration af batterisyre til forskellige batteri typer.

Massefylden påvirkes af temperaturen.
Jo højere temperatur er jo mindre vil 1 cm³ veje.
Massefylden falder med cirka 0,007 for hver 10 °Celsius temperaturen stiger.
').'

'.afsnit('gas','
Når et batteri oplades og batterispændingen har opnået 14 volt (ved 25 °Celsius) vil vandet ('.kemiskformel('H2O').') i batterisyren spalte til hydrogen ('.kemiskformel('H2').') og oxygen ('.kemiskformel('O2').').
Hydrogen gas stiger op ved de negative blyplader.
Oxygen gas stiger op ved de positive blyplader.

Hydrogen kaldes også brint.
Oxygen kaldes også ilt.

På et traditionelt bly-syre batteri kommer gasserne op ved påfyldningshullerne eller ud ved udluftningshullet i siden af batteriet.
På et vedligeholdelsesfri bly-syre batteri kan gasserne ikke komme ud da det er lukket så i stedet genbruges hydrogen og oxygen gasserne og laves igen om til vand øverst i batteriet.

Det er på grund af denne spaltning at man ikke skal bruge alle typer opladere på vedligeholdelsesfrie bly-syre batterier. Da opladeren måske kan lade batteriet for kraftigt.

Blandingen af brint og ilt gasser kaldes knaldgas og er meget eksplosivt hvis den antændes.
Derfor skal man sørge for udluftning når traditionelle batterier oplades.
Selvom vedligeholdelsesfrie bly-syre batteri ikke lader gasserne komme ud af batteriet under normale omstændigheder så er det nok en god ide at sørge for udluftning alligevel.
').'

'.afsnit('selvafladning','
Batteriet aflades af sig selv, selvom det ikke bliver brugt.
Dette fænomen kaldes selvafladning.
Høje temperaturer øger selvafladningen. Jo højere temperatur jo hurtigere selvaflader batteriet.
Vedligeholdelsesfrie bly-syre batterier aflades langsommere end traditionelle bly-syre batterier.

Batteriets selvafladning kan ligge på 0,3-1,5% af batteriets kapacitet per dag når temperaturen er 20-30 °Celsius.
Et batteri kan selvaflade sig selv fuldstændigt i løbet af 1-3 måneder.
').'

'.afsnit('opbevaring','
Hvis scooteren ikke skal bruges i en periode kan man fjerne kablet på den negative (-) terminal.
Dermed aflades batteriet ikke af scooterens udstyr som alarm og ur.

Batteriet bør opbevares køligt da det dermed aflades langsommere.
Mål volt niveauet og oplad en gang om måneden hvis nødvendigt for at holde det fuldt opladt.
Med automatiske opladere kan batteriet være tilsluttet til opladeren så længe man ønsker så finder opladeren selv ud af hvornår batteriet skal oplades.
').'

'.afsnit('frysning','
Vand fryser ved 0 °Celsius.
Batterisyre fryser ved cirka -60 °Celsius når batteriet er fuldt opladt.
Når batteriet aflades bliver mere af batterisyren omdannet til vand.
Jo mere afladt batteriet er jo færre minus grader skal der til før batterisyren fryser.
Så hvis batteriet er meget afladt så kan batterisyren fryse og da vand udvidder sig når det er frossent så kan det ødelægge batteriet.
').'

'.afsnit('rengøring','
Børst + og - terminalerne med en stålbørste.
Monter kablerne.
Smør terminalerne med fedt eller vaseline for at undgå korrision.
Rengør stykket mellem terminalerne for at undgå at der kan gå strøm over.
').'

'.afsnit('fjernelse af batterikabler','
Når kablerne skal fjernes fra batteriet så fjern først det negative (-) kabel som er stelforbindelsen.
Fjern derefter det positive (+) kabel.

Når du skal montere kablerne skal du starte med at montere det positive (+) kabel.

Ved at fjerne og montere kablerne i denne rækkefølge undgår man at lave gnister.

Det negative (-) kabel er ofte grønt, sort eller blåt.
Det positive (+) kabel er vist nok altid rødt.
').'

'.afsnit('levetid','
Det er vist meget normalt at batterier efter nogle år trænger til at blive skiftet ud.
Jeg har læst at 2 år skulle være en almindelig levetid for et batteri.

I et batteri datablad står "standard use : 3~5 years". Altså at batteriet har en levetid på 3-5 år.
').'

'.afsnit('sulfatering','
Når et batteri er afladt og ikke har været brugt i længere tid vil blysulfaten (PbSO4) som findes på blypladernes overflade begynde at danne krystaller.
Dette fænomen kaldes sulfatering.
'.visbilled('1', 'billed0281.jpg', 'sulfatering af blyplade', false, true).'
Disse krystaller er ikke elektrisk ledende og vil derfor give modstand i batteriet og dermed forringe batteriet.
Når et batteri bliver sulfateret kan det være svært at opnå en fuld opladning.
Sulfatering opstår kun hvis batteriet bliver afladt så hvis man vil undgå det skal man sørge for at holde batteriet fuldt opladt hele tiden.
').'

'.afsnit('desulfatering','
For at oplade et batteri som er blevet sulfateret kan det kræve en højere spænding end normalt.
Batteriet kan ikke tage imod en opladning ved normal spænding på grund af modstanden i blysulfat (PbSO4) krystallerne.
Der kan bruges en højere spænding på op til 22-25 volt og en meget lav ampere i 2 timer for at fjerne denne sulfatering og når batteriets indre modstand er faldet kan det oplades på normal vis.

Fuldautomatiske opladere finder selv ud af om batteriet er sulfateret og kræver speciel opladning.
').'

'.afsnit('CCA','
CCA står for "Cold Cranking Amps" eller "kold start ampere" på dansk.
Det er batteriets evne til at levere en høj ampere når temperaturen om vinteren er lav så man let kan starte motoren.
Et GTX7A-BS batteri har for eksempel 85 CCA.
Et Kung Long WPX5L-B batteri har 45 CCA.
Jeg har endnu ikke set det oplyst på scooter batterier hvor mange CCA de har, men det kan findes i datablade fra producenten.
CCA afhænger af antallet af bly plader og deres overflade areal.
CCA måles ved -18 °Celsius (0 °Fahrenheit).
').'

'.afsnit('lær mere om batterier','
'.visfil('1', 'scooterhjemmeside/download/yuasatechnicalmanual.pdf', 'Yuasa technical manual').'
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
