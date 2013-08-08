<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "motor - Service";
$overskrift = "motor - Service";
$metadescription = "service af motor på scooter";

$databasecenter = array(

'
knastaksel
' => '
Mål begge knaster på det bredeste punkt.
'.visbilled('1', 'billed2625.jpg', 'måling af knastaksel knast bredde', false, true).'
'.visbilled('1', 'billed2623.jpg', 'måling af knastaksel', false, true).'
'.visbilled('1', 'billed2647.jpg', 'måling af knastaksel', false, true).'
'.afsnit('Kymco Super 8 (50 cm³) data','
Knasten til indsugningsventilen skal minimum være 26,038 mm.
Knasten til udstødningsventilen skal minimum være 25,407 mm.
').'
'

,'
vippearme og vippearmsaksler
' => '
Mål den indre diameter på begge vippearme.
Mål den ydre diameter på begge vippearmsaksler.
'.visbilled('1', 'billed2626.jpg', 'måling af vippearme', false, true).'

'.afsnit('Kymco Super 8 (50 cm³) data','
Den indre diameter på begge vippearme skal maksimalt være 10,10 mm.
Den ydre diameter på begge vippearmsaksler skal minimum være 9,91 mm.
').'
'.afsnit('Kymco Super 8 (50 cm³) måling','
Jeg har målt den indre diameter på indsugningsventilens vippearm til at være 10,00 mm.
Jeg har målt den indre diameter på udstødningsventilens vippearm til at være 10,03 mm.

Jeg har målt den ydre diameter på indsugningsventilens vippearmsaksel til at være 9,975 mm.
Jeg har målt den ydre diameter på udstødningsventilens vippearmsaksel til at være 9,975 mm.
').'
'

,'
ventilfjedre
' => '
Mål højden på den ydre og indre ventilfjeder i afslappet tilstand (uden at de er presset sammen).
'.visbilled('1', 'billed2628.jpg', 'måling af ventilfjedre', false, true).'
'.visbilled('1', 'billed2914.jpg', 'måling af ventilfjedre', false, true).'
Nogle scootere har 1 fjeder per ventil (ydreventil).
Andre scootere har 2 fjedre per ventil (ydreventil og indreventil).

'.afsnit('Kymco Super 8 (50 cm³) data','
Den ydre ventilfjeder skal minimum være 33,3 mm.
Den indre ventilfjeder skal minimum være 30,1 mm.

Selvom data stammer fra Kymco Super 8 servicemanualen så har min Kymco Super 8 kun 1 fjeder per ventil (den ydrefjeder).
').'
'.afsnit('Kymco Super 8 (50 cm³) måling','
Jeg har målt den ydrefjeder for indsugningsventilen til at være 35,71 mm.
Jeg har målt den ydrefjeder for udstødningsventilen til at være 35,78 mm.

Efter som der ikke er nogle indrefjedre har jeg ingen måling på dem.
').'
'

,'
ventiler
' => '
Se eventuelt '.ahref('service_ventiler.php','Service af ventiler').'.

Mål bredden af ventilerne på ventilstammen (midt på ventilen hvor den køre op og ned i ventilstyret).
'.visbilled('1', 'billed2629.jpg', 'måling af ventiler', false, true).'
'.visbilled('1', 'billed2915.jpg', 'måling af ventiler', false, true).'

'.afsnit('Kymco Super 8 (50 cm³) data','
Indsugningsventilen skal minimum være 4,9 mm.
Udstødningsventilen skal minimum være 4,9 mm.
').'
'.afsnit('Kymco Super 8 (50 cm³) måling','
Jeg har målt midt på indsugningsventilen : 4,980 mm.
Jeg har målt midt på udstødningsventilen : 4,957 mm.
').'
'

,'
stempel
' => '
Mål stemplets ydre diameter 90 grader fra stempelpindshullet og cirka 7-12 mm fra bunden.
Det variere fra scooter model til scooter model hvor langt fra bunden af stemplet man skal måle.
'.visbilled('1', 'billed2630.jpg', 'måling af stempel', false, true).'
'.visbilled('1', 'billed2688.jpg', 'måling af stempel', false, true).'

'.afsnit('Kymco Super 8 (50 cm³) data','
9 mm fra bunden skal stemplets ydre diameter minimum være 38,9 mm.
').'
'.afsnit('Kymco Super 8 (50 cm³) måling','
Jeg har målt stemplets ydre diameter 90 grader fra stempelpindshullet og 9 mm fra bunden : 38,96 mm.
').'

Mål den indre diameter på stempelpindshullet med stempelpinden taget ud.
'.visbilled('1', 'billed2632.jpg', 'måling af stempelpindshul på stempel', false, true).'

'.afsnit('Kymco Super 8 (50 cm³) data','
Stempelpindshullet skal maksimalt være 13,04 mm.
').'
'.afsnit('Kymco Super 8 (50 cm³) måling','
Jeg har målt stempelpindshullet indre diameter til at være 12,9-12,99 mm.
').'

Mål stempelpindens ydre diameter.
'.visbilled('1', 'billed2634.jpg', 'måling af stempelpind', false, true).'
'.visbilled('1', 'billed2916.jpg', 'måling af stempelpind', false, true).'
'.visbilled('1', 'billed3147.jpg', 'måling af stempelpind', false, true).'

'.afsnit('Kymco Super 8 (50 cm³) data','
Stempelpinden skal minimum være 12,96 mm.
').'

Mål mellemrummet mellem topringen og stemplets vandrette kant hvor topringen skal sidde.
Mål mellemrummet mellem andenringen og stemplets vandrette kant hvor andenringen skal sidde.
'.visbilled('1', 'billed2633.jpg', 'måling af stempel og stempelrings spillerum', false, true).'

'.afsnit('Kymco Super 8 (50 cm³) data','
Mellemrummet for topringen skal maksimalt være 0,09 mm.
Mellemrummet for andenringen skal maksimalt være 0,09 mm.
').'
'

,'
stempelringe
' => '
Skub topringen ned i cylinderens nederst del med stemplet og mål mellemrummet mellem ringens ender.
Fjern topringen og gør det samme for andenringen.
(Jeg ved dog ikke om ringene skal sidde i den uslidte del af cylinden eller der hvor der er slid).
'.visbilled('1', 'billed2631.jpg', 'måling af stempelringe i cylinder', false, true).'

'.afsnit('Kymco Super 8 (50 cm³) data','
Topringen skal maksimalt have et mellemrum på 0,45 mm.
Andenringen skal maksimalt have et mellemrum på 0,45 mm.
').'
'.afsnit('Kymco Super 8 (50 cm³) måling','
Topring i bund hvor cylinder ikke er slidt : 0,275 mm.
Andenring i bund hvor cylinder ikke er slidt : 0,285 mm.
Siderail i bund hvor cylinder ikke er slidt : 0,52 mm.

For at sammenligne har jeg også målt stempelringene i bunden af cylinderen hvor den er slidt og i toppen af cylinderen hvor den er slidt.

Topring i bund hvor cylinder er slidt : 0,285 mm.
Andenring i bund hvor cylinder er slidt : 0,32 mm.

Topring i top hvor cylinder er slidt : 0,32 mm.
Andenring i top hvor cylinder er slidt : 0,33 mm.
').'
'

,'
bemærkning til ringgabbing og montering
' => '
Da jeg aldrig har prøvet at skifte stempel og stempelringe er jeg ikke sikker på at følgende oplysninger er helt korrekte.
Du er velkommen til at '.kontaktemig().' hvis du ser noget som er forkert eller kan bidrage med noget information.
'

,'
kontrol af ringgab
' => '
Inden stempelringene monteres på stemplet skulle det være en god ide at kontrollere og om nødvendigt justere det mellemrum der er mellem ringenes ender.

Ringene udvidder sig når de bliver varme (når motoren køre) så derfor skal der være et bestemt mellemrum mellem enderne så enderne ikke rammer hinanden.

Hvis mellemrummet er for lille kan enderne mødes også kan ringen gå i stykker og lave skade i motoren.
For stort mellemrum giver dårlig forsegling/kompression og for meget blowby gas.

Jeg har læst at man ved målingen skal placere ringen i cylinderen der hvor diameteren er mindst.
Det vil sige nær bunden af cylinden da slidet er mindst her fordi stempelringene ikke kommer derned når motoren køre.
'.visbilled('1', 'billed1288.jpg', 'stempelring i cylinder søgerblad', false, true).'
Hvis cylinderen er ny er det formodentligt ligegyldigt hvor i cylinderen man placer ringen ved målingen.
Brug stemplet til at skubbe ringen ned i cylinderen så den er cirka 15-20 mm fra bunden.
'.visbilled('1', 'billed3081.jpg', 'skub stempelring ind i cylinder med stempel', false, true).'
'.visbilled('1', 'billed3075.jpg', 'stempelring i cylinder', false, true).'
'.visbilled('1', 'billed3074.jpg', 'stempelring i cylinder', false, true).'
'.visbilled('1', 'billed3073.jpg', 'stempelring i cylinder', false, true).'
Brug søgerblade til at måle mellemrummet mellem enderne på ringen.
Sammenlign med data fra scooterens servicemanual.
'.visbilled('1', 'billed3079.jpg', 'stempelring i cylinder søgerblade', false, true).'
'.visbilled('1', 'billed3080.jpg', 'stempelring i cylinder søgerblade tætpå', false, true).'

'.afsnit('Baotian BT139QMA/BT139QMB data','
Topring : 0,08 til 0,20 mm.
Andenring : 0,05 til 0,20 mm.
').'

'.afsnit('Kymco Super 8 (50 cm³) data','
Placer ring ved cylinder bund.
Topring : 0,08 til 0,20 mm.
Andenring : 0,05 til 0,20 mm.
Oliering : 0,20 til 0,70 mm.
').'

'.afsnit('Piaggio Zip 4 takt (50 cm³) data (fra "Haynes 4082" bogen)','
Topring : 0,08 til 0,20 mm.
Andenring : 0,05 til 0,20 mm.
Oliering : 0,02 til 0,70 mm.
').'

'.afsnit('Kinroad Fresh Wind (XT50QT) (50 cm³) data','
Topring : 0,1 til 0,15 mm (5 til 8 mm i afslappet tilstand).
Andenring : 0,1 til 0,15 mm (5 til 8 mm i afslappet tilstand).
Oliering : 0,2 til 0,35 mm.
').'

Hvis mellemrummet er for lille så skal enderne files kortere.
Hvis mellemrummet er for stort så skal der bruges en ny større ring, eller også kan man bare bruge ringen alligevel.

Når enderne files så vær forsigtig ikke at skade ringen, tryk let med filen og hold den samme vinkel på enderne.

Når topringen har korrekt mellemrum så kontrollere andenringen og de 2 tynde ringe i olieringen.
Den bølgede ring i olieringen skal ikke kontrolleres. Det er meningen af dens ender skal mødes.

Når ringenes ender har de rigtige mellemrum er de klar til at blive sat på stemplet.
'

,'
montering af stempelringe
' => '
'.afsnit('montering af stempelringe','
Start med at sæt den bølgede oliering på stemplet.
Så de 2 tynde ringe over og under den bølgede ring.
Så andenringen.
Og til sidst topringen.
Mærker på ringenes ender (som 1R og 2R) skal vende op mod toppen af stemplet.
Udvid kun ringenes ender nok til at de kan sættes på stemplet da de måske kan knækket hvis man udvidder dem for meget.
Undgå at skade stemplet når du sætter stempelringene på.
'.visbilled('1', 'billed1211.jpg', 'afmontering af stempelringe', false, true).'

Ringene kan også monteres med et specielt værktøj.
'.visbilled('1', 'billed1356.jpg', 'montering af stempelringe med specielt værktøj', false, true).'
').'
'.afsnit('drej stempelringene','
Placer ringene så enderne på topringen, andenringen og den bølgede oliering vender med 120 graders forskydning.
De 2 tynde ringe i olieringen forskydes 20 mm til hver sin side.
'.visbilled('1', 'billed0953.jpg', 'stempelringe stempel 120 grader 20 mm topring andenring oliering', false, true).'
Her er en anden tegning som viser at topringens åbning vender modsat IN mærket på stemplet.
'.visbilled('1', 'billed1212.jpg', 'stempelringe stempel 120 grader 20 mm topring andenring oliering', false, true).'
Jeg ved ikke om det betyder noget hvilken vej åbningen vender men det virker da logisk at topringen skal vende modsat indsugningen da det meste at motorolie måske så vil være nede ved åbningen og bedre kan forsegle hullet.

Her ses en anden måde som stempelringene kan vendes på.
'.visbilled('1', 'billed2852.jpg', 'stempelringe', false, true).'
Jeg ved ikke om den ene måde er bedre end den anden men det handler om at ringenes ender ikke skal stå lige over hinanden.
').'
'.afsnit('og til sidst','
Smør lidt motorolie på stempelringene og stemplet før det monteres i cylinderen.
').'
'.afsnit('video','
'.visflash('0', 'http://www.youtube.com/watch?v=W1mp0vXkWRI', 'sætter stempelringe på og stempel i motor', true).'
').'
'

,'
krumtap og plejlstang
' => '
Placer krumtapakslen på 2 V blokke så krumtapakslen kan dreje frit rundt på lejerne.
'.visbilled('1', 'billed2745.jpg', 'krumtap på v blokke', false, true).'

Mål spillerummet til siden for plejlstangens store ende.
'.visbilled('1', 'billed2734.jpg', 'måling af spillerum ved plejlstangens store ende', false, true).'
'.afsnit('Kymco Super 8 (50 cm³) data','
Maksimalt 0,55 mm.
').'
'.afsnit('Sym Jet (50 cm³) data','
Maksimalt 0,60 mm.
').'
'.afsnit('PGO G-Max (50 cm³) data','
Maksimalt 0,71 mm.
').'

Bevæg plejlstangen i X og Y retningerne og mål spillerummet.
'.visbilled('1', 'billed2735.jpg', 'måling af plejlstang slør tegning', false, true).'
'.visbilled('1', 'billed2743.jpg', 'måling af plejlstang slør', false, true).'
'.afsnit('Kymco Super 8 (50 cm³) data','
Maksimalt 0,05 mm.
').'
'.afsnit('Sym Jet (50 cm³) data','
Maksimalt 0,04 mm.
').'
'.afsnit('PGO G-Max (50 cm³) data','
Maksimalt 0,04 mm.
').'

Mål ved de i servicemanualen angivne punkter på akslen og drej akslen for at se hvor skæv akslen er (kaldet runout).
'.visbilled('1', 'billed2793.jpg', 'punkter for måling at krumtapakslen skævhed tegning', false, true).'
'.afsnit('Kymco Super 8 (50 cm³) data','
I manualen står ikke hvor man skal måle men der er billede der viser det selvom de godt nok har klippet antal mm væk i manualen men det ser ud til der står 90 mm til variator siden og 50 eller 60 mm til svinghjuls siden målt fra ydersiderne af vægtene.
'.visbilled('1', 'billed2744.jpg', 'måling at krumtapakslen skævhed', false, true).'
Maksimalt 0,10 mm.
').'
'.afsnit('Sym Jet (50 cm³) data','
Punkt A måles fra midten af plejlstangen ud til svinghjulssiden.
Punkt B måles fra midten af plejlstangen ud til variatorsiden.
'.visbilled('1', 'billed2736.jpg', 'måling at krumtapakslen skævhed', false, true).'
Punkt A (svinghjulsside) : Maksimalt 0,10 mm.
Punkt B (variatorside): Maksimalt 0,10 mm.
').'
'.afsnit('PGO G-Max (50 cm³) data','
Mål 60 mm ud til begge sider fra vægtenes ydersider.
'.visbilled('1', 'billed3371.jpg', 'måling at krumtapakslen skævhed', false, true).'
Andet sted står dog at man skal måle 90 mm ved punkt A. Men det er muligvis til PGO G-Max 4 takt (125 og 150 cm³).
'.visbilled('1', 'billed3372.jpg', 'måling at krumtapakslen skævhed', false, true).'
Punkt A : Maksimalt 0,1 mm.
Punkt B : Maksimalt 0,1 mm.
').'
'

,'
2 takt
' => '
Her er lidt info til 2 takt motor.

Her kan man se hvordan delene sidder.
'.visbilled('1', 'billed2822.jpg', 'eksploderet 2 takt motor tegning', false, true).'
Når man sætter cylinderen over stemplet skal ringenes åbning vende så de passer med de pins der sidder i stempelringsbanerne.
'.visbilled('1', 'billed2823.jpg', '2 takt cylinder stempel tegning', false, true).'
Spænd møtrikkerne på kryds lidt af gangen.
På Sym Jet skal møtrikkerne for eksempel spændes med 1,6-2,0 kgf-m.
'.visbilled('1', 'billed2824.jpg', 'spænd topstykke på kryds tegning', false, true).'
Der er ikke vigtigt hvilken møtrik du starter med bare du spænder den møtrik som er længt væk som nummer 2.
'

,'
data
' => '
Kig i scooterens servicemanual for at finde ud af hvor meget de enkelte dele må være slidt før de bør udskiftes..

Her er data for Kymco Super 8 50 cm³.
'.
box(array('350', '150', '150')
   ,array(
       array('del',                                        'standard (mm)',    'slid grænse (mm)')
      ,array('knastaksel knast bredde (indsugning)',       '26,438',           '26,038')
      ,array('knastaksel knast bredde (udstødning)',       '25,807',           '25,407')
      ,array('vippearm indre diamter (ind og ud)',         '10,000 - 10,015',  '10,10')
      ,array('vippearmsaksel ydre diameter (ind og ud)',   '9,972 - 9,987',    '9,91')
      ,array('ventilfjeder højde (ydre ventil)',           '34,35',            '33,3')
      ,array('ventilfjeder højde (indre ventil)',          '31,1',             '30,1')
      ,array('ventil bredde ved stamme (indsugning)',      '4,975 - 4,990',    '4,9')
      ,array('ventil bredde ved stamme (udstødning)',      '4,955 - 4,970',    '4,9')
      ,array('ventilsæde bredde (ind og ud)',              '1,0',              '1,8')
      ,array('topring ende mellemrum',                     '0,08 - 0,20',      '0,45')
      ,array('andenring ende mellemrum',                   '0,05 - 0,20',      '0,45')
      ,array('siderails ende mellemrum (de tynde)',        '0,20 - 0,70',      '')
      ,array('stempel ydre diameter',                      '',                 '38,9')
      ,array('stempel stempelpindshul indre diameter',     '',                 '13,04')
      ,array('stempelpind ydre diamater',                  '12,994 - 13,000',  '12,96')
      ,array('stempel mod stempelpind spillerum',          '0,002 - 0,014',    '')
   )
)
.'
Her er data for Baotian BT49QT/BT50QT med BT139QMA og BT139QMB 50 cm³ motor.
'.
box(array('350', '150', '150')
   ,array(
       array('del',                                        'standard (mm)',    'slid grænse (mm)')
      ,array('knastaksel knast bredde (indsugning)',       '25,745 ± 0,03',    '25,345')
      ,array('knastaksel knast bredde (udstødning)',       '25,55 ± 0,03',     '25,15')
      ,array('vippearm indre diamter (ind og ud)',         '10,0 - 10,022',    '10,1')
      ,array('vippearmsaksel ydre diameter (ind og ud)',   '9,987 - 9,972',    '9,91')
      ,array('ventilfjeder højde (ydre ventil)',           '34,1 ± 0,2',       '32')
      ,array('ventilfjeder højde (indre ventil)',          '30,5 ± 0,2',       '28,5')
      ,array('ventil bredde ved stamme (indsugning)',      '4,975 - 4,99',     '4,92')
      ,array('ventil bredde ved stamme (udstødning)',      '4,955 - 4,97',     '4,90')
      ,array('topring ende mellemrum',                     '0,08 - 0,20',      '0,5')
      ,array('andenring ende mellemrum',                   '0,05 - 0,20',      '0,5')
      ,array('stempel ydre diameter',                      '38,99 - 38,97',    '38,93')
      ,array('stempel stempelpindshul indre diameter',     '13,002 - 13,008',  '13,04')
      ,array('stempelpind ydre diamater',                  '12,992 - 12,998',  '12,97')
      ,array('cylinder indre diamter',                     '39,0 - 39,01',     '39,1')
   )
)
.'
Her er data for PGO G-Max 50 cm³.
'.
box(array('350', '150', '150')
   ,array(
       array('del',                                        'standard (mm)',    'slid grænse (mm)')
      ,array('knastaksel knast bredde (indsugning)',       '25,745 ± 0,03',    '25,345')
      ,array('knastaksel knast bredde (udstødning)',       '25,55 ± 0,03',     '25,15')
      ,array('vippearm indre diamter (ind og ud)',         '10,0 - 10,022',    '10,1')
      ,array('vippearmsaksel ydre diameter (ind og ud)',   '9,987 - 9,972',    '9,91')
      ,array('ventilfjeder højde (ydre ventil)',           '34,1 ± 0,2',       '32')
      ,array('ventilfjeder højde (indre ventil)',          '30,5 ± 0,2',       '28,5')
      ,array('ventil bredde ved stamme (indsugning)',      '4,975 - 4,99',     '4,92')
      ,array('ventil bredde ved stamme (udstødning)',      '4,955 - 4,97',     '4,90')
      ,array('topring ende mellemrum',                     '',                 '0,4')
      ,array('andenring ende mellemrum',                   '',                 '0,4')
      ,array('stempel ydre diameter (12 mm fra bund)',      '39,950 - 39,970', '39,895')
      ,array('stempel stempelpindshul indre diameter',      '13,013 - 13,022 ?',     '13,045 eller 14,032')
      ,array('stempelpind ydre diamater',                  '12,992 - 12,998',  '12,97 eller 9,970 ?')
      ,array('cylinder indre diamter',                      '39,995 - 40,015', '40,050')
      ,array('mellemrum mellem stempel og cylinder',        '0,045 - 0,065',   '0,10')
      ,array('mellemrum mellem stempel og stempelpind',     '0,004 - 0,018',   '0,030')
      ,array('plejlstang lille ende indre diameter',        '13,996 - 14,007', '14,025')
   )
)
.'
Brug mikrometerskrue, skydelære og søgerblade til at måle med.
'

,'
kontroller ventilhoved og ventilsæde kontaktområde før slibning
' => '
Afmonter ventilen fra topstykket.

Fjern kulstof fra ventilen og topstykket.
Hvis ventilen er brændt, skadet eller ujævn så udskift ventilen med en ny.

Put lidt "prussian blue" på ventilhovedets kontaktområde.
Jeg ved ikke helt hvad "prussian blue" er men det er vist blå farve så man kan se om tingene passer godt sammen.
'.visbilled('1', 'billed3753.jpg', 'prussian blue', false, true).'
Muligvis kan man bare bruge en tusch.
'.visbilled('1', 'billed2993.jpg', 'tusch på ventilsæde', false, true).'
Eller en blyant.
'.visbilled('1', 'billed2994.jpg', 'blyant på ventil', false, true).'
'.visbilled('1', 'billed2851.jpg', 'ventilhoved tegning', false, true).'
Indsæt ventilen i topstykket og pres ned for at lave et tydeligt aftryk af kontaktområdet.
'.visbilled('1', 'billed2829.jpg', 'ventil i topstykke tegning', false, true).'
Fjern ventilen og kontroller ventilhovedets kontaktområde.
'.visbilled('1', 'billed2849.jpg', 'ventil kontaktområde', false, true).'
Mål kontaktområdets bredde på ventilsæde og ventilhoved.
'.visbilled('1', 'billed2831.jpg', 'måling af ventilsæde i topstykke og ventil kontaktområde', false, true).'
Sammenlign med data fra scooterens servicemanual.

'.afsnit('Sym XS 125 K data','
Ventilsæde maksimal bredde : 1,5 mm.
Ventilhoved kontaktområde maksimal bredde : 1,8 mm.
').'

Hvis kontaktområdet er for bredt eller for smalt så skal ventilsædet slibes.
'

,'
slib ventilsæde
' => '
Formålet med at slibe ventilsædet i topstykket er at genskabe den korrekte ventilsæde bredde i den rette vinkel samtidig med at kontaktområdet kommer til at ligge midt på ventilenhovedets kontaktområde.
'.visbilled('1', 'billed2856.jpg', 'ventilsæde bredde 45 grader vinkel tegning', false, true).'
Det giver en god forsegling så kompressionstrykket ikke kan slippe ud af forbrændingskammeret.

Vi skal bruge 3 slibere med vinklerne 60°, 32° og 45°.
'.visbilled('1', 'billed2832.jpg', 'ventilslibere i forskellige vinkler 60 32 45 grader tegning', false, true).'
Sliberne holdes og drejes med en sliberholder.
Påfør lidt olie på sliberne inden du bruger dem.
Tryk ned på sliberen med 4-5 kg og drej fra side til side.
'.visbilled('1', 'billed2833.jpg', 'slibning af ventilsæde tegning', false, true).'
'.visbilled('1', 'billed2917.jpg', 'slibning af ventilsæde', false, true).'
Fjern rughed fra ventilsædet med en  45° sliber.
'.visbilled('1', 'billed2834.jpg', 'rughed på ventilsæde 45 grader tegning', false, true).'
Fjern den øverste 1/4 af det gamle ventilsæde med en 32° sliber.
'.visbilled('1', 'billed2835.jpg', 'ventilsliber 32 grader tegning', false, true).'
Fjern den nederste 1/4 af det gamle ventilsæde med en 60° sliber.
'.visbilled('1', 'billed2836.jpg', 'ventilsliber 60 grader tegning', false, true).'
Slib ventilsædet med en 45° sliber indtil den korrekte ventilsædebredde er opnået.
Bredden står i scooterens servicemanual.
'.visbilled('1', 'billed2837.jpg', 'ventilsliber 45 grader tegning', false, true).'
Det kan for eksempel være 1,0 mm.
'.visbilled('1', 'billed2855.jpg', 'ventilsæde bredde 45 grader vinkel tegning', false, true).'

Put lidt "prussian blue" på ventilhovedets kontaktområde.
Indsæt ventilen i topstykket og pres ned for at lave et tydeligt aftryk af kontaktområdet.
'.visbilled('1', 'billed2850.jpg', 'ventil i topstykke tegning', false, true).'
Kontaktområdet skal være midt på ventilhovedets blanke flade.
'.visbilled('1', 'billed2857.jpg', 'ventilsæde kontakt område perfekt tegning', false, true).'
Hvis kontaktområdet er for højt så slib ventilsædet lavere med en 32° sliber.
'.visbilled('1', 'billed2838.jpg', 'ventilsæde kontakt område for højt tegning', false, true).'
Hvis kontaktområdet er for lavt så slib ventilsædet højere med en 60° sliber.
'.visbilled('1', 'billed2839.jpg', 'ventilsæde kontakt område for lavt tegning', false, true).'
Hvis du har rette ventilsæde højden så afslut med 45° sliberen.
Slib til den rette ventilsæde bredde igen er opnået.
'.visbilled('1', 'billed2855.jpg', 'ventilsæde bredde 45 grader vinkel tegning', false, true).'

Efter ventilsædet er slebet skal ventilen "lappes".
'

,'
lap ventil
' => '
Formålet med at lappe ventil og ventilsæde er at få en god forsejling så trykket ikke slipper ud.

Det kaldes "lapping" på engelsk. Jeg ved ikke hvad det hedder på dansk så jeg kalder det at lappe.

Sørg for at delene er rengjorte.

Påfør lidt groft ventilslibepasta på ventilhovedetskontaktområde og "lap" ventilen frem og tilbage med hænderne med et let tryk.

Man kan bruge en pind med en sugekop på.
Hvis man ikke har sådan en pind kan man efter man har sat ventilen i topstykket presse en slange i passende stram størrelse over enden af ventilen og bruge slangen til at dreje ventilen med.
Hvis man ikke har så meget tålmodighed så kan man spænde en boremaskine på ventilenden.

Løft af og til ventilen fra ventilsædet for at fordele ventilslibepastaen.
'.visbilled('1', 'billed2840.jpg', 'lapping af ventilsæde', false, true).'
'.visbilled('1', 'billed2913.jpg', 'ventillappe værktøj med sugekop', false, true).'
'.visbilled('1', 'billed3768.jpg', 'ventil med slange', false, true).'
'.visbilled('1', 'billed3766.jpg', 'ventil med ventilslibepasta', false, true).'

Hold topstykket lodret for at undgå at slibemidlet skal kommer ned mellem ventilkrop og ventilstyr.
Bliv ved indtil der er en fin ubrudt ensartet ring hele vejen rundt på ventilhovedet.

Rengør topstykke og ventil for ventilslibepasta.

Gentag "lapping" med fint ventilslibepasta.
Rengør igen topstykke og ventil for ventilslibepasta.

Gentag kontrol af kontaktområde mellem ventilsæde og ventilhoved med "prussian blue".
Man kan måske bruge en blyant til at tage på ventilhovedet for at se kontaktområdet i stedet for "prussian blue" hvad end det er.

Når slibningen er slut og delene er rengjort så sæt ventilen i topstykket og hold den på plads med en finger.

Hæld en ikke brandbar væske i porten og se om ventilen holder tæt.
Vent 5 minutter og se om der er kommet noget væske igennem.
'.visbilled('1', 'billed2853.jpg', 'test om ventilsæde er tæt', false, true).'
Når ventilerne er sat i topstykket med fjeder og det hele så udfør testen igen og lad topstykke stå i nogle minutter og se om der er trængt noget benzin igennem.

Der er en bruger der har hældt væske i forbrædningskammeret for at teste tætheden på den måde men så er det nok sværre at se om væsken kommer ud.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3791.jpg', array('Kymco Agility motor', 'tætningstest med væske'))
))
.'
Selvom benzin fordamper jo hurtigt så måske det er en dårlig ide at bruge benzin.
'.visbilled('1', 'billed2854.jpg', 'test om ventilsæde er tæt', false, true).'

'.afsnit('ting','
Emery, lapping compound, grinding compound, silicon carbide er vist det samme og betyder ventilslibepasta.
Prussian blue, mechanic blueing dye (dykem) er vist det samme og er blå farve der bruges til at se hvor delene har rørt hinanden.
').'

'.afsnit('resultat','
Her er resultat efter først gang jeg har prøvet at lappe ventiler.
Jeg endte med at gøre det med boremaskine da de ventilslibepinde jeg havde købte havde for store sugekopper.
Det ligesom om ringene i topstykket er mere tydelige når der er blitz på.
Ringene blev lidt rillede, ikke sådan helt spejlblanke som de måske skal være.
Men jeg syntes da det hjalp lidt på motoren.
'.
galleriholder(array(
    galleri('highslide', '', 'billed3769.jpg', array('ventiler og ventilsæde som er blevet lappet', ''))
   ,galleri('highslide', '', 'billed3770.jpg', array('ventiler og ventilsæde som er blevet lappet (med blitz)', ''))
   ,galleri('highslide', '', 'billed3771.jpg', array('ventilsæde som er blevet lappet (tæt på)', ''))
   ,galleri('highslide', '', 'billed3788.jpg', array('Kymco Agility motor', 'slebet ventilsæde'))
))
.'
').'
'

,'
videoer
' => '
'.visflash('0', 'http://www.youtube.com/watch?v=fhXsH12Rg6s', 'Valve Lapping').'
'.visflash('0', 'http://www.youtube.com/watch?v=unrds-2Pcog', 'How to Reseat _ Lap Valves (Basic Valve Job)').'
'.visflash('0', 'http://www.youtube.com/watch?v=CM4dHlnxtHg', 'GY6 150CC Valve & Spring Replacement - Grinding').'
'

,'
slibe data
' => '
Data for Honda Dax.
'.
box(array('350', '150', '150')
   ,array(
       array('del',                                        'skal være (mm)',    'maksimalt (mm)')
      ,array('ventilsæde kontaktområde bredde',            '1,0 - 1,3', '2,0')
      ,array('ventilsæde ydre diameter indsugningsventil<br>(ST 50)',        '22,5', '')
      ,array('ventilsæde ydre diameter udstødningsventil<br>(ST 50)',        '19,5', '')
      ,array('ventilsæde ydre diameter indsugningsventil<br>(ST 70 og CT 70)',        '24,5', '')
      ,array('ventilsæde ydre diameter udstødningsventil<br>(ST 70 og CT 70)',        '21,5', '')
   )
)
.'

Data for Honda Zoomer (med karburator).
'.
box(array('350', '150', '150')
   ,array(
       array('del',                                        'skal være (mm)',    'maksimalt (mm)')
      ,array('ventilsæde kontaktområde bredde',            '1,0',               '1,5')
   )
)
.'

Data for Yamaha Giggle.
'.
box(array('350', '150', '150')
   ,array(
       array('del',                                        'skal være (mm)',    'maksimalt (mm)')
      ,array('ventilsæde kontaktområde bredde',            '0,9 - 1,1',         '1,6')
   )
)
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
