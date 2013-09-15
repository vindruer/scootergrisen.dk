<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "Tilspændingsmoment - Service";
$overskrift = "Tilspændingsmoment - Service";
$metadescription = "lær om tilspændingsmomenter af skruer og bolte på scootere";

$databasecenter = array(

'
introduktion
' => '
'.visbilled('1', 'billed2371.jpg', 'tilspændingsmoment tegning', false, true).'

Her ses en momentnøgle som bruges til at spænde skruer/møtrikker med et bestemt moment (tilpas hårdt).
'.visbilled('1', 'billed2231.jpg', 'momentnøgle', false, true).'
'

,'
tilspændingsmoment
' => '
Kig i scooterens servicemanual for at finde ud af hvor meget de enkelte møtrikker skal spændes med.

Her ses nogle eksempler på tilspændingsmoment.

Brug '.ahref('omregn.php#tilspendingsmoment', 'omregn tilspændingsmoment').' for at konverter mellem kgf-m, Nm og lb-ft.

'.
box(array('260', '70', '70', '70', '70', '70', '80')
   ,array(
       array('placering',                                'antal',    'gevind diameter mm', 'kgf-m',     'Nm',         'lb-ft', 'bemærkninger')
      ,array('forreste remskive møtrik',                 '',         '', '5,5-6,5 (3,5-4,0)',   '',           '', '')
      ,array('koblingsklokke møtrik',                    '',         '', '3,5-4,5',   '',           '', '')
      ,array('koblingsplade møtrik',                     '',         '', '5,0-6,0',   '',           '', '')
      ,array('baghjuls møtrik',                          '',         '', '',          '110',        '', '')
      ,array('variator møtrik ?',                        '',         '', '',          '80',         '', '')
      ,array('svinghjuls møtrikken',                     '',         '', '',          '56',         '', '')
      ,array('tændrør',                                  '',         '', '',          '10-14',      '', '')
      ,array('stor motorolie drænskrue',                 '',         '', '',          '10-20',      '', '')
      ,array('ventiljusterings låsemøtrik',              '',         '', '',          '0,7-0,9',    '', '')
                     
      ,array('topstykke bolt a (i siden)',               '2',         '6',     '0,7-1,1', '', '', 'dobbelt ende bolt')
      ,array('topstykke bolt b (med skiver)',            '4',         '6',     '0,7-1,1', '', '', 'brug olie på gevind 1.8~2.2')
      ,array('drænskrue ved oliesi',                     '1',         '30',    '1,0-2,0', '', '', '')
      ,array('udstødning låse bolt',                     '2',         '6',     '0,7-1,1', '', '', 'dobbelt ende bolt')
      ,array('topstykke flange møtrik',                  '4',         '7',     '1,2-1,6', '', '', 'brug olie på gevind')
      ,array('ventil justering låse møtrik',             '2',         '3',     '0,07-0,09', '', '', '')
      ,array('knastkædestrammer slipper bolt',           '1',         '8',     '0,4-0,7', '', '', '0.8~1.2 brug olie på o-ring')
      ,array('olie bolt',                                '1',         '8',     '1,1-1,5', '', '', '')
      ,array('koblings ydre møtrik',                     '1',         '10',    '3,5-4,5', '', '', '')
      ,array('kobling drive plate møtrik',               '1',         '28',    '5,0-6,0', '', '', '')
      ,array('starter motor monterings bolt',            '2',         '6',     '0,8-1,2', '', '', '')
      ,array('oliepumpe møtrik',                         '3',         '4',     '0,1-0,3', '', '', '')
      ,array('forreste remskive møtrik (ved ruller)',    '1',         '10',    '5,5-6,5', '', '', '')
      ,array('tændrør',                                  '1',         '10',    '1,0-1,4', '', '', '')
      ,array('generator stator bolt',                    '2',         '6',     '0,8-1,2', '', '', '')
      ,array('knastkædestrammer bolt (top)',             '1',         '6',     '0,8-1,2', '', '', '0.45~0.6')
                     
      ,array('pickup bolt',                              '2',         '0,46-0,6', '',          '',    '', '')
      ,array('udstødning låse bolt 2',                   '2',         '',      '3.0-3.6', '', '', 'dem ved cylinder')
      ,array('knastkædestrammer slipper bolt 2',         '1',         '',              '0.8~1.2', '', '', '')

      ,array('steering stem lock nut',                   '1',         '25,4',  '8,0-12,0',  '', '', 'u møtrik')
      ,array('foraksel møtrik',                          '1',         '10',    '5,0-7,0',  '', '', 'u møtrik')
      ,array('bagaksel møtrik',                          '1',         '14',    '11,0-13,0',  '', '', 'u møtrik')
      ,array('bag støddæmper øvre bolt',                 '1',         '10',    '4,0-5,0',  '', '', '')
      ,array('bag støddæmper nedre bolt',                '1',         '8',     '2,0-3,0',  '', '', '')
      ,array('speedometer kabel set screw',              '1',         '5',     '0,45-0,6',  '', '', '')
      ,array('bag støddæmper låsemøtrik',                '1',         '8',     '3,0-3,6',  '', '', 'brug låsevæske')
   )
)
.'
'

,'
standard tilspændingsmoment
' => '
Dette skema kan bruges som guide til hvor meget der skal spændes hvis der ikke er oplyst noget tilspændingsmoment.
'.visbilled('1', 'billed0038.jpg', 'standard tilspændings moment for skruer og møtrikker', false, true).'
'
.'
Standardard tilspændingsmoment fra Kymco Super 8 4T servicemanual.
'.
box(array('250', '100')
   ,array(
       array('type',                                        'moment af kraft (kgf-m)')
      ,array('5 mm bolt eller møtrik',                      '0,45-0,6')
      ,array('6 mm bolt eller møtrik',                      '0,6-1,2')
      ,array('8 mm bolt eller møtrik',                      '1,8-2,5')
      ,array('10 mm bolt eller møtrik',                     '3,0-4,0')
      ,array('12 mm bolt eller møtrik',                     '5,0-6,0')
      ,array('5 mm skrue',                                  '0,35-0,5')
      ,array('6 mm skrue, SH bolt',                         '0,7-1,1')
      ,array('6 mm flange bolt, møtrik',                    '1,0-1,4')
      ,array('8 mm flange bolt, møtrik',                    '2,4-3,0')
      ,array('10 mm flange bolt, møtrik',                   '3,5-4,5')
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
