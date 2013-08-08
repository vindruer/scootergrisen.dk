<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "kilerem - Transmission";
$overskrift = "kilerem - Transmission";
$metadescription = "forklaring af scooterens kilerem som køre mellem remskiverne i variatoren";

$databasecenter = array(

'
kilerem
' => '
Her ses en kilerem.
'.visbilled('1', 'billed1981.jpg', 'kilerem', false, true).'
Kilerem kaldes også for bælte.

'.visflash('0', 'http://www.youtube.com/watch?v=QVR50z-gSq0', 'letsindig monter kilerem', true).'

Her ses en ny og en brugt kilerem.
'.visbilled('1', 'billed1995.jpg', 'kilerem', false, true).'
Kileremmen forbinder de forreste remskiver med de bagerste remskiver.

På kileremmen kan stå nogle tal som angiver kileremmens omkreds, bredde og vinkel.
'.visbilled('1', 'billed1461.jpg', 'kilerem tal', false, true).'

'.visbilled('1', 'billed3655.jpg', 'kilerem mål', false, true).'

'.afsnit('669 18 30 betyder','
669 mm i ydre omkreds.
18 mm i bredden (yderst).
30 grader vinkel på siderne.
').'

Nogen gange er der af en eller anden grund ikke angivet nogen vinkel.
Her står 729 x 17,5.
'.visbilled('1', 'billed1580.jpg', 'kilerem endurance 729x17,5', false, true).'

På kileremmen på min Kymco Super 8 står et reservedelsnummer i stedet for størrelse.
Her står Kymco 23100-KEB7-9000 Bando.
'.visbilled('1', 'billed1491.jpg', 'kilerem kymco bando', false, true).'
Her ses det mere tydeligt på en ny kilerem.
'.visbilled('1', 'billed1982.jpg', 'kilerem kymco 23100-KEB7-9000 bando', false, true).'
'.afsnit('forskellige kilerems størrelser','
'.
box(array('200', '150', '180', '140')
   ,array(
       array('scooter model',                  'størrelse',             'reservedelsnummer',       'ifølge')
      ,array('Baotian ?',                      '669 X 18 X 30',            'BT-114001-139QMA-0000',            '')
      ,array('Baotian ?',                      '',            '114001-139QMA-0200',            '(bando 27.3732)')
      ,array('Baotian ?',                      '',            '139QMB-147-000',            '(bando 27.3711)')
      ,array('Giantco Stealth',                '729 x 17,5',            '139.10.300-B',            'thansen.dk')
      ,array('Giantco G-Buddy',                '669 X 18,1',            '',                        'thansen.dk')
      ,array('Giantco Sprint',                 '669 X 18,1<br>669 X 18 X 30',            '139.10.300-A',            'thansen.dk')
      ,array('Giantco Venus',                  '669 X 18,1',            '139.10.300-A',            'thansen.dk')
      ,array('Giantco Lambros',                '788 X 17',              '',                        'thansen.dk')
      ,array('Giantco Spartan',                '788 X 17',              '',                        'thansen.dk')
      ,array('CPI Oliver',                     '788 X 17',              '',                        'thansen.dk')
      ,array('CPI Oliver',                     '785 X 6,6',             '',                        'thansen.dk (skulle sikkert stå 785 x 16,6)')
      ,array('CPI Oliver City',                '788 X 17',              '',                        'thansen.dk')
      ,array('CPI GTR',                        '788 X 17/28',           '',                        'thansen.dk')
      ,array('CPI Popcorn',                    '788 X 17',              '',                        'thansen.dk')
      ,array('CPI Popcorn',                    '785 X 6,6',             '',                        'thansen.dk (skulle sikkert stå 785 x 16,6)')
      ,array('CPI Popcorn',                    '',                      '24107G02F000',            'reservedelsmanual')
      ,array('CPI Popcorn',                    '788-17-28',             '24107G02F000',            '')
      ,array('Kymco Agility',                  '',                      '23100-KEB7-9000',         'reservedelsmanual')
      ,array('Kymco Agility',                  '654-18,0-30-8,5',       '',                        'set på nettet')
      ,array('Kymco Super 8',                  '',                      '23100-KEB7-900',          'reservedelsmanual')
      ,array('Kymco Super 8',                  '',                      '23100-KEB7-9000',         'set på kilerem')
      ,array('Kymco Super 8',                  '654-18,0-30-8,5',       '23100-KEB7-9000',         'siden findes ikke mere')
      ,array('Texas Chili',                    '',                      '408023',                  'reservedelsmanual')
      ,array('Texas Flash X30 2008',           '',                      '403905',                  'reservedelsmanual')
      ,array('Texas Flash 30-4',               '',                      '403905',                  'reservedelsmanual')
      ,array('Texas Flash 30-4',               '',                      '403905',                  'reservedelsmanual')
      ,array('Texas Flash S30 2008',           '',                      '403905',                  'reservedelsmanual')
      ,array('Texas Flash LZP LX6',            '',                      '403905',                  'reservedelsmanual')
      ,array('Texas Free 50-4 2006',           '',                      '403905',                  'reservedelsmanual')
      ,array('Sym Fiddle',                     '',                      '1B01BE201',               'reservedelsmanual')
      ,array('Sym Orbit',                      '',                      '1B01BE201',               'reservedelsmanual')
      ,array('Sym Mio',                        '',                      '1B01A1A01',               'reservedelsmanual')
      ,array('Vespa LX 4T',                    '',                      '82645R',                  'reservedelsmanual')
      ,array('PGO G-Max 125 cm³',              '',                      'C11220000001',            'reservedelsmanual')
      ,array('PGO Libra',                      '',                      'C11220000001',            'reservedelsmanual')
      ,array('PGO X-Hot',                      '',                      'C11220000001',            'reservedelsmanual')
      ,array('PGO PMX 50 cm³',                 '',                      'P1122000000',             'reservedelsmanual')
      ,array('PGO PMX 110 cm³',                '',                      'P9122000000',             'reservedelsmanual')
      ,array('PGO T-Rex 125/150 cm³',          '',                      'C11220000001',            'reservedelsmanual')
      ,array('',                               '',                      '',                        '')
   )
)
.'
').'
Her kan du se forskellige kilerem størrelser fra Malossi.
'.visfil('1', 'scooterhjemmeside/download/malossi_kilerem.pdf').'

'.afsnit('kilerem på 139QMA og 139QMB','
Her er noget tvivlsom info som jeg ikke er speciel sikker på er rigtig men muligvis kan bruges.

'.afsnit('139QMA (lang motorblok) typisk med 12" baghjul','
Bando 27.3732

Længde : 729 mm
Bredde : 18 mm
Vinkel : 30 mm
Højde : 8,5 mm
').'

'.afsnit('139QMB (kort motorblok) typisk med 10" baghjul','
Bando 27.3711

Længde : 669 mm
Bredde : 18 mm
Vinkel : 30 mm
Højde : 8 mm
').'

').'
'

/*

23100-GAK-9010 = 799-19-28-9,5
23100-KN7-6700 = 743-20-30-9,5
23100-KBFB-9000 = 721-18-30-8,5
23100-KCX-9000 = 781-20-30-9,5
23100-KEC4-9000 = 893-24-30-10,5
23100-KHE7-9000 = 729-18-30-8,5
23100-KEB7-9000 = 654-18,0-30-8,5
23100-GR1-752 = 738-18-30-8,0

1P3QMB : standard 669 length
139QMB = kort motorblok = ofte 10" hjul = kilerem 669-18-30
10" bakhjul QT-7, QT-9, QT-11, 669x18x30

139QMB (835 belt) long case
139QMA = lang motorblok = ofte 12-16" hjul = kilerem 729-17.7-30 eller 729-17.5-30
12" bakhjul QT-7, QT-12 788x17x28

836-17-30 = This is a ultra rare, hard to find 836 belt that must be used on the QJ1P39QMB-3 engine code Some have mistakenly called this a 835-17-30. This engine configuration is a strange amalgamation of a 2-stroke transmission CVT component mated to a modified 50cc 4-stroke engine case. These are the shorter belts
891-17-30

Motogino, Yamati Strada 729x17x28
125cc 10" bakhjul BT125-9 743x20x30
125cc 12" bakhjul BT125-2 842x20x30

*/

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
