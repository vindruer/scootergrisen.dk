<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "tændrør - Service";
$overskrift = "tændrør - Service";
$metadescription = "service af tændrør på scooter (diagnose, elektrode afstand, rengøring, montering, tændrør på forskellige scootere)";

$databasecenter = array(

'
diagnose
' => '
Ved at se på tændrøret kan man finde ud af om der eventuelt er problemer med motoren.

For at få en god aflæsning af tændrøret skal man have kørt i noget tid som man normalt gør og så stoppe motoren uden at lade den stå og køre i tomgang.
'.visbilled('1', 'billed0493.jpg', 'tændrørs diagnose', false, true).'
'

,'
elektrode afstand
' => '
Læs i scooterens manual for korrekt elektrode afstand.
'.visbilled('1', 'billed1859.jpg', 'tændrørs elektrode afstand', false, true).'

Den korrekte afstand er typisk 0,6-0,7 mm eller 0,7 mm.

Elektrode afstanden kan kontrolleres med søgerblade eller et specielt værktøj beregnet til tændrør.

Kanten på dette værktøj kan bruges til at kontroller elektriske afstanden og hullet kan bruges til at bukke side elektroden.
'.visbilled('1', 'billed0770.jpg', 'tændrørs elektrode afstand værktøj champion gap opener', false, true).'
Denne målelære kan også bruges til at kontroller og justere elektrode afstanden.
'.visbilled('1', 'billed2167.jpg', 'tændrørs målelære', false, true).'

'.visflash('0', 'http://www.youtube.com/watch?v=lk70oyUEftY', 'kontroller og juster elektrode afstand på tændrør', true).'

'.afsnit('Lille afstand risiko','
Gnist kan være for svag til at antænde benzin/luft blandingen.
').'
'.afsnit('Lille afstand fordel','
Tændrøret giver gnist hver gang.
').'

'.afsnit('Stor afstand risiko','
Tændrøret giver måske ikke gnist eller på forkert tidspunkt ved høj hastighed.
').'
'.afsnit('Stor afstand fordel','
Gnist er kraftig som giver god forbrænding.
').'
'

,'
rengøring
' => '
Tændrøret kan rengøres med en stålbørste for at fjerne kulstof, olie og andre belægninger.
'

,'
montering
' => '
Første gang et nyt tændrør monteres presses pakningen sammen.

Her ses 2 tændrør af samme type. Det ene er nyt og har aldrig været monteret og det andet har været monteret flere gange. Læg mærke til at pakningen er presset sammen på det brugte tændrør.
'.visbilled('1', 'billed1903.jpg', 'nyt og brugt NGK CR7HSA tændrør', false, true).'

Sæt tændrøret i tændrørsnøglen.
'.visbilled('1', 'billed1904.jpg', 'tændrørsnøgle', false, true).'
Skru derefter tændrøret i motoren så meget du kan med fingerne først.
'.visbilled('1', 'billed1906.jpg', 'tændrørsnøgle med tændrør', false, true).'
'.visbilled('1', 'billed1907.jpg', 'tændrørsnøgle', false, true).'
Skrue derefter tændrøret yderlige ½ omgang hvis det er et nyt tændrør.
'.visbilled('1', 'billed1905.jpg', 'montering af tændrør med tændrørsnøgle og skruetrækker', false, true).'

På denne tændrørspakken ses at tændrøret først skal drejes i med fingerne.
Derefter skal et nyt tændrør med pakning spændes ½ omgang med værktøj.
Tændrør uden pakning skal spændes 1/16 omgang med værktøj.
'.visbilled('1', 'billed1902.jpg', 'NGK tændrørs pakke med instruktion', false, true).'

Et nyt tændrør med pakning skal spændes 1/2 - 2/3 omgang ifølge NGK E-Learning.
'.visbilled('1', 'billed1908.jpg', 'montering af nyt tændrør', false, true).'
Et brugt tændrør med pakning skal spændes 1/12 - 1/8 omgang ifølge NGK E-Learning.
'.visbilled('1', 'billed1909.jpg', 'montering af brugt tændrør', false, true).'

'.afsnit('montering med momentnøgle','
Læs i scooterens manual hvor meget moment kraft tændrøret skal spændes med.
Moment kraften skrives gerne som Nm eller Kgf-m (m-kg).

'.afsnit('tændrørs tilspændingsmoment fra manualer','
'.
box(array('150', '100', '70', '70')
   ,array(
       array('model',                  'kgf-m (m-kg)',    'Nm',      'ft-lb')
      ,array('139qma/139qmb',          '1,2',             '12',      '')
      ,array('Aprilia Scarabeo 4T',    '2',               '20',      '')
      ,array('Denso anbefaler',        '',                '10-15',   '')
      ,array('Kymco Agility',          '1,0-1,4',         '',        '')
      ,array('Kymco Super 8 4T',       '1,0-1,4',         '',        '')
      ,array('NGK anbefaler',          '1,0-1,2',         '10-12',   '5,8-7,2')
      ,array('Piaggio Fly',            '',                '10-15',   '')
      ,array('Piaggio Fly 150 cm³',    '',                '12-14',   '')
      ,array('Sachs Madass',           '',                '20',      '')
      ,array('Sym Mio',                '1,0-1,4',         '',        '')
      ,array('Sym Orbit 4 takt',       '1,0-1,4',         '',        '')
      ,array('Yamaha Giggle',          '1,3',             '13',      '9,4')
   )
)
.'
').'
'.ahref('omregn.php#tilspendingsmoment', 'Konverter tilspændingsmoment').' mellem kgf-m (m-kg), Nm og ft-lb.
Start med at skru tændrøret i med fingerne så meget du kan.

Brug en momentnøgle og spænd tændrøret til det ønskede moment.

De tilspændings moment som oplyses gælder muligvis kun for et nyt tændrør uden smurt gevind.
').'
'

,'
hvornår skal tændrøret renses, justeres og udskiftes ?
' => '
Det svinger fra manual til manual hvornår man skal rense og udskifte tændrøret.

Typisk står der at tændrøret skal renses for hver 2000-3000 km.
Typisk står der at tændrøret skal udskiftes for hver 5000-10000 km eller når det er nødvendigt.
Typisk står der ikke noget om hvornår man skal kontrollere og justere elektrode afstanden.
I en manual står at elektrode afstanden skal kontroller og justeres for hver 8000 km.

På 2 takt motorer giver tændrøret gnist dobbelt så ofte som på 4 takt motorer så derfor slides tændrøret her cirka dobbelt så hurtigt og skal derfor også udskiftes dobbelt så ofte.

I Sym Jet (2 takt) manual står at tændrøret skal renses ved 300 km og derefter for hver 3000 km og udskiftes for hver 12000 km.
I Sym Euro X (2 takt) står der at tændrøret skal renses ved 300 km og udskift for hver 3000 km.

Så der kan være stor forskel fra manual til manual.
'

,'
tændrør på forskellige scootere
' => '
Her ses hvilke tændrør der passer til de forskellige 50 cm³ scootere.
Data stammer fra manualerne under '.ahref('download.php', 'download').'.
'.
box(array('180', '80', '80', '80', '80')
   ,array(
       array('model',  'NGK',   'Champion',   'Torch',   'Andet')
      ,array('139qm',                 'C7HSA',                   'Z9Y',             '',                           '')
      ,array('139qma<br>139qmb',      'C7HSA',                   '',                'A7RTC<br>A7RC',             '')
      ,array('aprilia scarabeo',      'CR8EB<br>CR9EB<br>CR9E','RG4HC<br>RG4PHP','',                           '')
      ,array('aprilia sportcity one', 'CR8EB',                   '',                '',                           '')
      ,array('baotian BT50QT',        'C7HSA',                   '',                '',                           '')
      ,array('baotian rocky',         'C7HSA',                   '',                '',                           '')
      ,array('baotian',               'CR6HSA<br>CR7HSA',       '',                'A7RTC<br>A7RC',             '')
      ,array('city scooter freak',    'C7HSA',                   '',                '',                           '')
      ,array('FY50QT',                'CR7HS',                   '',                '',                           '')
      ,array('giantco G-Buddy',       'CR7HSA',                  '',                '',                           '')
      ,array('giantco motor',         'C7HSA<br>CR7HSA',        '',                'A7RTC<br>A7TC',             '')
      ,array('giantco sprint',        'C7HSA<br>CR7HSA',        '',                '',                           '')
      ,array('giantco stealth',       'CR7HSA',                  '',                '',                           '')
      ,array('giantco venus',         'CR7HSA',                  '',                '',                           '')
      ,array('honda ST50',            'C6H<br>C6HS<br>CR6HSA', '',                '',                           'ND U20FS<br>ND U24FS')
      ,array('honda ST70',            'C7H<br>C7HS',            '',                '',                           'ND U24FS')
      ,array('honda zoomer',          'ER8EH-N',                 '',                '',                           '')
      ,array('kinroad chopper',       '',        '',         'A7TC',                           '')
      ,array('kymco agility',         'C7HSA<br>CR7HSA',        'P-RZ9HC',         '',                           '')
      ,array('kymco super 8 4T',      'CR7HSA',                  'P-RZ9HC',         '',                           '')
      ,array('listo',                 'C7HSA',                   '',                '',                           '')
      ,array('motor mania fino',      'CR7HSA',                  '',                '4E7TC',                      '')
      ,array('motor mania racing s1', '',                        '',                'A7RTC',                      '')
      ,array('motor mania racing s2', '',                        '',                'A7RTC',                      '')
      ,array('motor mania speedy',    '',                        '',                'A7RTC',                      '')
      ,array('piaggio fly',           'CR8EB<br>CR9EB',          'RG4HC',                '',                           'Denso U24ESR-NB')
      ,array('piaggio fly 150 cm³',   '',                        'RG6YC',           '',                           '')
      ,array('rieju pacific',         '',                        '',                '',                           'HS')
      ,array('sachs madass',          'CR7HSA',                  '',                '',                           '')
      ,array('sachs saxy',            'CR7HSA',                  '',                '',                           '')
      ,array('skyteam dax',           '',                        '',                'A7TC',                       '')
      ,array('skyteam monkey',        '',                        '',                'A7TC',                       '')
      ,array('skyteam PBR',           '',                        '',                '',                           'Thunder 1E6')
      ,array('sym fiddle II',         'CR7HSA',                  '',                'A7RC',                       '')
      ,array('sym mio',               'C6HSA<br>CR6HSA',        '',                '',                           '')
      ,array('sym orbit 4 takt',      '',                        '',                'A7RC',                       '')
      ,array('texas chili',           '',                        '',                '',                           'Denso U20FSRU')
      ,array('texas city',            '',                        '',                '',                           'Denso U20FSRU')
      ,array('texas flash',           '',                        '',                '',                           'Denso U20FSRU')
      ,array('texas free',            '',                        '',                '',                           'Denso U20FSRU')
      ,array('texas street',          '',                        '',                '',                           'Denso U20FSRU')
      ,array('TMS classic',           'C7HSA',                   '',                '',                           '')
      ,array('TMS retro',             'C7HSA',                   '',                '',                           '')
      ,array('TMS Z2',                'C7HSA',                   '',                '',                           '')
      ,array('yamaha giggle',         'CR7E',                    '',                '',                           '')   )
)
.'
De fleste scootere på listen bruger NGK C7HSA eller NGK CR7HSA.

ND (se ved Honda ST) er muligvis et gammelt navn for Denso.
De bruger i hvert fald  lignende tændrørs koder.
'

,'
iridium tændrør
' => '
Iridium tændrør har en meget fin centerelektrode spids og derfor anbefales det ikke at bruge en stålbørste til rengøring.
Brug i stedet en nylon børste (tandbørste).

Desuden anbefales det ikke at justere elektrode afstanden da søgerblade kan skade den fine centerelektrode sådan at tændrøret ikke yder 100%.
Desuden skulle det være unødvendigt at justere elektrode afstanden på iridium tændrør fordi de slides meget lidt.
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
