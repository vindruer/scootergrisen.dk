<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "stempel - 4 takt motor";
$overskrift = "stempel - 4 takt motor";
$metadescription = "forklaring af stempel og stempelringe der sidder i en 4 takt motor på en scooter";

$databasecenter = array(

'
stempel og stempelringe
' => '
Her ses et stempel fra en 4 takt motor.
Man kan se det er til en 4 takt motor da der er fordybninger i toppen hvor ventilerne er.
'.visbilled('1', 'billed3077.jpg', 'stempel', false, true).'
Her ses stemplet med stempelringe, stempelpind og låsering.
'.visbilled('1', 'billed3043.jpg', 'stempel', false, true).'
Her ses stempelringene for en 4 takt motor.
Jeg kalder stempelringene for topring, andenring og oliering.
'.visbilled('1', 'billed0954.jpg', 'stempel stempelringe topring andenring oliering', false, true).'
Læg mærke til topringen og andenringen har forskellig form.

'.visbilled('1', 'billed0752.jpg', 'stempelringe topring andenring oliering', false, true).'

'.afsnit('topring','
Topringens opgave er at holde på trykket i forbrændingskammeret.
'.visbilled('1', 'billed3142.jpg', 'topring', false, true).'
Topringen har et mærke på den ene side som skal vende op mod toppen af stemplet.
'.visbilled('1', 'billed3144.jpg', 'topring tæt på mærke', false, true).'

Jeg har målt min topring til at være 0,777-0,785 mm tyk.
Mellemrummet mellem topringens ender har jeg målt til at være 4,98 mm i afslappet tilstand.
').'

'.afsnit('andenring','
Andenringens opgave er at holde på trykket i forbrændingskammeret og desuden at skrabe olie af cylindervægen med sin skrå form.
'.visbilled('1', 'billed3143.jpg', 'andenring', false, true).'
Andenringen har ligesom topringen et mærke på den ene side som skal vende op mod toppen af stemplet.
Umiddelbart kunne man tro at mærker på ringen var et 1-tal men eftersom dette er andenringen er det altså ikke et 1-tal men bare en streg.
'.visbilled('1', 'billed3145.jpg', 'andenring tæt på mærke', false, true).'

Jeg har målt min andenring til at være 0,777-0,789 mm tyk (hvilket næsten er præcis det samme som topringen).
Mellemrummet mellem andenringens ender har jeg målt til at være 4,63 mm i afslappet tilstand.
').'

'.afsnit('oliering','
Olieringens opgave er at justere oliemængden på cylindervægen så der er en tilpas mængde olie.
Olieringen består af 2 tynde ringe (kaldet siderails) og en 1 bølget ring (kaldet expander).
'.visbilled('1', 'billed3138.jpg', 'siderail op side', false, true).'
'.visbilled('1', 'billed3141.jpg', 'siderail op side tæt på', false, true).'
'.visbilled('1', 'billed3136.jpg', 'bølget ring', false, true).'
'.visbilled('1', 'billed3137.jpg', 'bølget ring tæt på', false, true).'
'.visbilled('1', 'billed3139.jpg', 'siderail ned side', false, true).'
'.visbilled('1', 'billed3140.jpg', 'siderail ned side tæt på', false, true).'
Overflødig olie skrabes af cylindervægen af de 2 tynde ringe (siderails).
Olien kan trænge ind gennem den bølgede ring og ind gennem nogle små huller i stemplet (kaldet returkanaler) ind til indersiden af stemplet hvor det kan returner til bunden af motoren.
'.visbilled('1', 'billed3078.jpg', 'stempel', false, true).'
'.visbilled('1', 'billed3069.jpg', 'stempel returkanaler', false, true).'
'.visbilled('1', 'billed0598.jpg', 'stempel returkanaler', false, true).'
'.visbilled('1', 'billed0597.jpg', 'oliepumpe passage', false, true).'
Dette stempel har en ekstra række med returkanaler.
'.visbilled('1', 'billed2969.jpg', 'stempel til 4 takt motor', false, true).'
Jeg har målt min ene siderail til at være 0,302-0,307 mm tyk.
Jeg har målt min anden siderail til at være 0,305-0,310 mm tyk.
Hvilket vil sige de er under halvt så tykke som topringen og andenringen.

Mellemrummet mellem ringenes ender har jeg målt til at være 1,55 mm (for den ene siderail) og 2,14 mm (for den anden siderail) i afslappet tilstand.
').'

'.afsnit('stempelpind og låseringe','
Her ses en stempelpind.
Den holder stemplet og plejlstangen sammen.
'.visbilled('1', 'billed3146.jpg', 'stempelpind', false, true).'
På begge sider af stemplet er en rille hvor der sidder en låsering som sørger for at stempelpinden bliver siddende.
'.visbilled('1', 'billed3148.jpg', 'stempel stempelpind låsering', false, true).'
Der er et lille hak i stemplet ved låseringen så man kan vippe låseringen ud med en lille flad skruetrækker eller med en lille spids tang.
På nogen låseringe er ender bukket indad så de er lettere at tage af og sætte på.
'.visbilled('1', 'billed3076.jpg', 'stempel', false, true).'
Her er den ene låsering taget ud og stemplet er skubbet til siden så stemplet kunne tages af plejlstangen.
'.visbilled('1', 'billed3045.jpg', 'stempel stempelpind låsering', false, true).'
'.visbilled('1', 'billed3044.jpg', 'stempel og låsering', false, true).'

Det er vigtigt at låseringene ved montering sidder helt rigtigt for hvis de går løs vil det ødelægge cylinder og stempel som minimum.

Åbningen på låseringene skal vende op eller ned. Ikke til siderne.

Jeg valgte kun at tage den ene låsering ud for minimere problemer med at sætte dem i igen.

Stempelpinden sidder godt fast i stemplet så den er ikke bare lige til at skubbe til side.
Jeg skubbede stempelpinden til siden med en lille skruetrækker som kunne kiles fast inden i stempelpiden.
Hvis det er svært at få stempelpinden af eller på så kan stemplet varmes op med en varmepistol.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
