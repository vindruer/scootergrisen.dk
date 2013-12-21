<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['sideikon']               = 'ikoner/ikon_kamera2.png';

$title = "kamera (hjelmkamera / actionkamera)";
$overskrift = "kamera (hjelmkamera / actionkamera)";
$metadescription = "kamera der kan bruges til at optage video og lyd mens man køre på scooter/cykel/ski/svømmer/osv så man kan dele sine oplevelser med andre";

$databasecenter = array(

'
introduktion
' => '
Her følger information om forskellige kamera producenter og deres forskellige kamera modeller.

Af kamera producenter kan blandt andet nævnes GoPro, Contour, Drift, VIO POV, Interphone, Sony, Gobandit og JVC.

Se også forum emnet '.ahref('http://scootergrisen.dk/forum/viewtopic.php?f=4&t=851', 'Kamera i styrthjelm').' hvor vi snakker om det og viser de videoer vi og andre har optaget og linker til andre sider som handler om disse kamera.
'

,'
gopro
' => '
'.visbilled('1', 'billed3725.jpg', 'gopro logo', false, true).'
'
.linkknap('http://gopro.com/products/', 'gopro.com products')
.linkknap('http://gopro.com/product-comparison-hd-hero2-hd-hero-cameras/', 'Sammenlign<br>GoPro Hero2 / GoPro Hero')
.linkknap('http://www.gopro.com/product-comparison-hero3-cameras', 'Sammenlign<br>GoPro Hero3 (white / silver / black)')
.'
'.
box(array('170', '170', '150', '270')
   ,array(
       array('kamera',              'udgave',               'pris (US $)', 'andet')
      ,array('HD Hero (original)',              'HD helmet hero',                '239.99', '')
      ,array('HD Hero (original)',              'HD surf hero',                  '229.99', '')
      ,array('HD Hero (original)',              'HD motorsports hero',           '239.99', '')
      ,array('HD Hero (original)',              'HD naked hero',                 '199.99', '')
      ,array('HD Hero (original)',              'HD hero 960',                   '149.99', 'muligvis det eneste som ikke kan 1080')
      ,array('HD Hero2 (professional)',         'HD hero2 outdoor',              '299.99', 'med 3,5 mm stereo jack stik til ekstern mikrofon')
      ,array('HD Hero2 (professional)',         'HD hero2 motorsports',          '299.99', 'med 3,5 mm stereo jack stik til ekstern mikrofon')
      ,array('HD Hero2 (professional)',         'HD hero2 surf',                 '299.99', 'med 3,5 mm stereo jack stik til ekstern mikrofon')
      ,array('SD Hero 170 (gammelt)',           '',                '', 'video opløsning : 512 × 384')
      ,array('HD Hero3',         'HD hero3 white edition',                 '199.99 (1899,- DKK)', 'Wi-Fi er indbygget<br>op til 15/Mbs video bitrate<br>Bruger MicroSD hukommelseskort')
      ,array('HD Hero3',         'HD hero3 silver edition',                '299.99', 'Wi-Fi er indbygget<br>op til 35/Mbs video bitrate<br>Bruger MicroSD hukommelseskort')
      ,array('HD Hero3',         'HD hero3 black edition',                 '399.99', 'Wi-Fi er indbygget<br>Wi-Fi fjernbetjening medfølger<br>2 x bedre lavtlysydelse i forhold til Hero2 og Hero3 white og silver edition<br>Kan optage i 4K, 2,7K og 1440p opløsning<br>op til 45/Mbs video bitrate<br>Bruger MicroSD hukommelseskort')
      ,array('HD Hero3+',        'HD hero3+ silver edition',                '299.99 (2699,- DKK)', '')
      ,array('HD Hero3+',        'HD hero3+ black edition',                 '399.99 (3599,- DKK)', '')
   )
)
.'
'
.galleriholder(array(
    galleri('highslide', '', 'billed3897.jpg', array('GoPro Hero 3+', ''))

   ,galleri('highslide', '', 'billed3642.jpg', array('GoPro Hero 3', ''))
   ,galleri('highslide', '', 'billed3641.jpg', array('GoPro Hero 3', ''))
   ,galleri('highslide', '', 'billed3640.jpg', array('GoPro Hero 3', ''))

   ,galleri('highslide', '', 'billed3634.jpg', array('GoPro Hero 2', 'i boks'))
   ,galleri('highslide', '', 'billed3626.jpg', array('GoPro Hero 2', 'boks og indhold'))
   ,galleri('highslide', '', 'billed3735.jpg', array('GoPro Hero 2', ''))

   ,galleri('highslide', '', 'billed3482.jpg', array('GoPro Hero 2', 'forfra'))
   ,galleri('highslide', '', 'billed3483.jpg', array('GoPro Hero 2', 'siden TV USB mikrofon'))
   ,galleri('highslide', '', 'billed3484.jpg', array('GoPro Hero 2', 'bagside batterilåg'))
   ,galleri('highslide', '', 'billed3485.jpg', array('GoPro Hero 2', 'siden miniHDMI fullSD'))
   ,galleri('highslide', '', 'billed3486.jpg', array('GoPro Hero 2', 'i hus forfra'))
   ,galleri('highslide', '', 'billed3487.jpg', array('GoPro Hero 2', 'skeleton door'))
   ,galleri('highslide', '', 'billed3488.jpg', array('GoPro Hero 2', 'i hus forfra'))
   ,galleri('highslide', '', 'billed3489.jpg', array('GoPro Hero 2', 'outdoor'))
   ,galleri('highslide', '', 'billed3490.jpg', array('GoPro Hero 2', 'outdoor holder'))
   ,galleri('highslide', '', 'billed3491.jpg', array('GoPro Hero 2', 'hvid plastik sikring'))

   ,galleri('highslide', '', 'billed3492.jpg', array('GoPro Hero', 'LCD ekstra batteri 3D hus'))
))
.'
'.visflash('0', 'http://www.youtube.com/watch?v=PXfamVXsb54', 'hero 2 udpakning', true).'
'.linkknap('http://www.youtube.com/watch?v=XIpgI0CBPXM', 'video :<br>GoPro How To: Start Using Your HD HERO2 Camera', true).'
'

,'
contour
' => '
'.visbilled('1', 'billed3726.jpg', 'contour logo', false, true).'
'
.linkknap('http://store.contour.com/', 'contour.com Products')
.linkknap('http://contour.com/products/compare_cameras', 'Sammenlign<br>Contour Roam2 / Contour+2')
.'
'.
box(array('170', '170', '130', '270')
   ,array(
       array('kamera',              'udgave',               'pris', 'andet')
      ,array('contour roam', 'roam watersports', '', 'med laser')
      ,array('contour GPS', '', '', '')
      ,array('contour+', '', '', 'med 2,5 mm jack til ekstern mikrofon')
      ,array('contour+2', '', 'set til 3495,-<br>$ 399,99 USD', 'Slow Motion - 854 x 480 @ 120/100, 60/50, or 30/25fps<br>Waterproof Case medfølger<br>microSD følger ikke med i danmark')
      ,array('contour roam2', '', '$ 199,99 USD', '')
   )
)
.'
'
.galleriholder(array(
    galleri('highslide', '', 'billed3493.jpg', array('contour roam'))
   ,galleri('highslide', '', 'billed3494.jpg', array('contour roam'))
   ,galleri('highslide', '', 'billed3495.jpg', array('contour roam'))
   ,galleri('highslide', '', 'billed3499.jpg', array('contour roam'))
))
.'
'
.galleriholder(array(
    galleri('highslide', '', 'billed3496.jpg', array('contour GPS'))
   ,galleri('highslide', '', 'billed3497.jpg', array('contour GPS'))
   ,galleri('highslide', '', 'billed3498.jpg', array('contour GPS'))
   ,galleri('highslide', '', 'billed3504.jpg', array('contour GPS'))
))
.'
'
.galleriholder(array(
    galleri('highslide', '', 'billed3500.jpg', array('contour+'))
   ,galleri('highslide', '', 'billed3501.jpg', array('contour+'))
   ,galleri('highslide', '', 'billed3502.jpg', array('contour+'))
   ,galleri('highslide', '', 'billed3503.jpg', array('contour+'))
))
.'
'
.galleriholder(array(
    galleri('highslide', '', 'billed3622.jpg', array('contour+2'))
   ,galleri('highslide', '', 'billed3623.jpg', array('contour+2'))
   ,galleri('highslide', '', 'billed3624.jpg', array('contour+2'))
   ,galleri('highslide', '', 'billed3625.jpg', array('contour+2'))
))
.'
'
.galleriholder(array(
    galleri('highslide', '', 'billed3648.jpg', array('contour roam2'))
   ,galleri('highslide', '', 'billed3649.jpg', array('contour roam2'))
))
.'
'.visflash('0', 'http://www.youtube.com/watch?v=m61Ttym-X6k', 'contour+ udpakning', true).'
'.linkknap('http://www.youtube.com/watch?v=sqAoccWVwVE', 'video :<br>sammenligning af contour / contour gps / contour+ kameraene', true).'

Før kameraet hed Contour hed det vist VholdR og firmaet hed Twenty20.
I Twenty20 VholdR står at det kun understøtter kort op til 2 GB.
'

,'
drift innovation
' => '
'.visbilled('1', 'billed3519.jpg', 'drift logo', false, true).'
'
.linkknap('http://driftinnovation.com/', 'driftinnovation.com')
.linkknap('http://driftinnovation.com/camera/', 'camera')
.linkknap('http://driftinnovation.com/compare-cameras/', 'sammenlign<br>Drift HD Ghost / Drift HD / Drift HD720')
.'
Drift kameraet lader til at være et kamera der er let at betjene.
Drift har skærm og fjernbetjening, roterbartbillede/linse.
Billede er ikke lige så detaljeret som GoPro Hero og Contour.
'.
box(array('170', '170', '100', '270')
   ,array(
       array('kamera',              'ekstra info',               'pris', 'andet')
      ,array('HD Ghost 1080P', '2 tommer LCD skærm<br>WiFi<br>3,5 mm ekstern mikrofon indgang<br>højtaler<br>1700mAh batteri<br>mini HDMI stik<br>vandtæt til 3 meter<br>fjernbetjening med 350mAh batteri', '', '')
      ,array('HD 720p', 'kort', '', 'HDMI')
      ,array('HD 1080p', 'kort', '', 'med 2,5 mm jack til ekstern mikrofon')
      ,array('HD170', 'lang', '', 'ekstern mikrofon med fladt stik kaldet AV på kamera')
      ,array('HD170 (stealth?) rød', 'lang', '', ' 1080p')
      ,array('X170', '', '', 'bruger 2 x AA batterier<br>720x480@30fps')
   )
)
.'
'
.galleriholder(array(
    galleri('highslide', '', 'billed3652.jpg', array('Drift HD Ghost 1080P', ''))
   ,galleri('highslide', '', 'billed3653.jpg', array('Drift HD Ghost 1080P', ''))

   ,galleri('highslide', '', 'billed3521.jpg', array('Drift HD 1080P', ''))
   ,galleri('highslide', '', 'billed3522.jpg', array('Drift HD 1080P', ''))
   ,galleri('highslide', '', 'billed3523.jpg', array('Drift HD 1080P', ''))
   ,galleri('highslide', '', 'billed3524.jpg', array('Drift', 'fjernbetjening'))
   ,galleri('highslide', '', 'billed3525.jpg', array('Drift HD 1080P', 'på side af styrthjelm'))
   ,galleri('highslide', '', 'billed3526.jpg', array('Drift HD 1080P', 'øverst på styrthjelm'))
   ,galleri('highslide', '', 'billed3527.jpg', array('Drift HD 1080P', 'batteri låg'))
   ,galleri('highslide', '', 'billed3528.jpg', array('Drift HD 1080P', 'på græs'))
   ,galleri('highslide', '', 'billed3529.jpg', array('Drift HD 1080P', 'på mudden'))
   ,galleri('highslide', '', 'billed3530.jpg', array('Drift', 'underside'))
   ,galleri('highslide', '', 'billed3531.jpg', array('Drift HD 720P', 'låg'))
   ,galleri('highslide', '', 'billed3532.jpg', array('Drift HD 1080P', 'remote fjernbetjening'))
   ,galleri('highslide', '', 'billed3533.jpg', array('Drift HD 1080P', 'ekstern mikrofon'))
   ,galleri('highslide', '', 'billed3534.jpg', array('Drift HD 1080P', 'på side af styrthjelm + lampe'))
   ,galleri('highslide', '', 'billed3535.jpg', array('Drift HD 1080P', 'på holder'))

   ,galleri('highslide', '', 'billed3536.jpg', array('Drift HD170', 'rød'))
   ,galleri('highslide', '', 'billed3537.jpg', array('Drift HD170', 'rød'))

   ,galleri('highslide', '', 'billed3516.jpg', array('Drift HD170', 'bagfra'))
   ,galleri('highslide', '', 'billed3517.jpg', array('Drift HD170', 'bagfra stik i'))
   ,galleri('highslide', '', 'billed3518.jpg', array('Drift HD170', 'bagfra stik i silikone låg på'))
))
.'
'.visflash('0', 'http://www.youtube.com/watch?v=OlCbOW-8FgM', 'Drift HD Review', true).'
'.linkknap('http://www.youtube.com/watch?v=lpfHWBpZepY', 'video :<br>My Helmet Camera Setup: Drift Stealth HD170', true).'
'

,'
VIO POV
' => '
'.visbilled('1', 'billed3727.jpg', 'VIO logo', false, true).'
'
.linkknap('http://www.vio-pov.com/', 'www.vio-pov.com')
.linkknap('http://www.vio-pov.com/products-all/pov-hd.html', 'VIO POV.HD')
.'
'.
box(array('170', '170', '100', '270')
   ,array(
       array('kamera',              'ekstra info',               'pris', 'andet')
      ,array('VIO POV.HD', '', '$599.99<br>4.500,00', '')
      ,array('VIO POV 1.5', '', '', '')
      ,array('VIO POV 1', '', '', '')
      ,array('VIO POV.T', '', '', '')
   )
)
.'
'
.galleriholder(array(
    galleri('highslide', '', 'billed3607.jpg', array('POV.HD'))
   ,galleri('highslide', '', 'billed3608.jpg', array('POV 1.5'))
   ,galleri('highslide', '', 'billed3609.jpg', array('POV 1'))
))
.'
'.visflash('0', 'http://www.youtube.com/watch?v=mNeS_I9R3BA', 'POV.HD Out Of Box', true).'
'

,'
interphone
' => '
'.visbilled('1', 'billed3728.jpg', 'interphone logo', false, true).'
'.linkknap('http://www.interphone.cellularline.com/', 'interphone.cellularline.com').'
'.
box(array('170', '170', '100', '270')
   ,array(
       array('kamera',              'ekstra info',               'pris', 'andet')
      ,array('MOTIONCAM01', '
laser
2 LED lys
vandtæt
5 Megapixel 1/2.5 CMOS sensor
120° lense
A) 720p 60: 1280 * 720p 60 fps H.264 AVI
B) 720p 30: 1280 * 720p 30 fps H.264 AVI
C) FULL HD 30: 1920 * 1080p 30 fps H.264 AVI
D) 1080p 30: 1440 * 1080p 30 fps H.264 AVI
Micro SD card up to 32 GB
High speed USB 2.0
HDMI and TV-OUT
Built-in high-capacity lithium battery allows up
to 2.5 hours of video recording
Photographic resolution: 12 megapixels, JPG
format
', 'Set til 1999,- kroner hos '.ahref('http://mx-plus.dk/','mx-plus.dk').'', '')
   )
)
.'
'
.galleriholder(array(
    galleri('highslide', '', 'billed3612.jpg', array('Interphone motioncam01', ''))
   ,galleri('highslide', '', 'billed3617.jpg', array('Interphone motioncam01', 'forfra'))
   ,galleri('highslide', '', 'billed3613.jpg', array('Interphone motioncam01', 'bagfra'))
   ,galleri('highslide', '', 'billed3614.jpg', array('Interphone motioncam01', 'nedefra'))
   ,galleri('highslide', '', 'billed3615.jpg', array('Interphone motioncam01', 'bagfra med vantæt låg'))
   ,galleri('highslide', '', 'billed3616.jpg', array('Interphone motioncam01', 'indpakning'))
   ,galleri('highslide', '', 'billed3618.jpg', array('Interphone motioncam01', 'monteringsudstyr'))
))
.'
Der finde mange andre kamera der ligner det her under forskellige navne og måske lidt anderledes ved fronten men hvor huset osv er ens.

Chitec CT-RD32S er vist det oprindelige navn.

polaroid XS20.

Chitec digital inc

Interphone, Rollei, ERA 
'

,'
sony
' => '
'.visbilled('1', 'billed3729.jpg', 'sony logo', false, true).'
'.linkknap('http://www.sony.dk/product/cam-action-cam/hdr-as15', 'sony.dk').'
'.
box(array('170', '170', '100', '270')
   ,array(
       array('kamera',              'ekstra info',               'pris', 'andet')
      ,array('HDR-AS15', 'med Wi-Fi', '2499', '')
      ,array('HDR-AS10', 'uden Wi-Fi ?', '', 'er vist ikke solgt i danmark')
   )
)
.'
'
.galleriholder(array(
    galleri('highslide', '', 'billed3512.jpg', array('sony HDR-AS15', ''))
   ,galleri('highslide', '', 'billed3513.jpg', array('sony HDR-AS15', ''))
   ,galleri('highslide', '', 'billed3514.jpg', array('sony HDR-AS15', ''))
   ,galleri('highslide', '', 'billed3515.jpg', array('sony HDR-AS15', 'i vandtæt hus'))
   ,galleri('highslide', '', 'billed3722.jpg', array('sony HDR-AS15', ''))
   ,galleri('highslide', '', 'billed3723.jpg', array('sony HDR-AS15', ''))
   ,galleri('highslide', '', 'billed3724.jpg', array('sony AKA-LU1', 'holder med LCD skærm'))
))
.'
'.linkknap('http://www.youtube.com/watch?v=Y7C2G4fAA1U', 'video :<br>REVIEW - Sony AKA-LU1 Action Camera LCD Handycam Handheld Grip Camcorder Attachment for HDR-AS15', true).'
'

,'
gobandit
' => '
'.visbilled('1', 'billed3730.jpg', 'gobandit logo', false, true).'
'.linkknap('http://www.gobandit.com/', 'gobandit.com').'
GoBandit Race (set til 2295) '.ahref('http://www.motopro.dk/').' '.ahref('http://www.extremeshop.dk/').'

GoBandit Live (set til 2995) '.ahref('http://www.gobandit.com/live.php').'
+ sensor read
+ phone line

'
.galleriholder(array(
    galleri('highslide', '', 'billed3635.jpg', array('gobandit live', 'fra siden'))
   ,galleri('highslide', '', 'billed3636.jpg', array('gobandit live', 'bagfra'))
   ,galleri('highslide', '', 'billed3637.jpg', array('gobandit RAM holder', ''))
))
.'
Med GoBandit kan man efterfølgende tilvælge at få et overlay lagt på sin video med data fra GPS som så kan vise hastighed og lignende ligesom man kender det fra politioptagelser hvor man kan se hvor hurtigt de køre.
'

,'
JVC
' => '
'.visbilled('1', 'billed3731.jpg', 'gobandit logo', false, true).'
JVC GC-XA1EU (JVC Adixxion XA1)
'.linkknap('http://www.jvc.dk/product.php?id=GC-XA1EU&catid=100156', 'jvc.dk').'
'
.galleriholder(array(
    galleri('highslide', '', 'billed3712.jpg', array('JVC GC-XA1EU', '(JVC Adixxion XA1)'))
   ,galleri('highslide', '', 'billed3713.jpg', array('JVC GC-XA1EU', '(JVC Adixxion XA1)'))
   ,galleri('highslide', '', 'billed3714.jpg', array('JVC GC-XA1EU', '(JVC Adixxion XA1)'))
   ,galleri('highslide', '', 'billed3715.jpg', array('JVC GC-XA1EU', '(JVC Adixxion XA1)'))
   ,galleri('highslide', '', 'billed3716.jpg', array('JVC GC-XA1EU', '(JVC Adixxion XA1)'))
   ,galleri('highslide', '', 'billed3717.jpg', array('JVC GC-XA1EU', '(JVC Adixxion XA1)'))
   ,galleri('highslide', '', 'billed3718.jpg', array('JVC GC-XA1EU', '(JVC Adixxion XA1)'))
   ,galleri('highslide', '', 'billed3719.jpg', array('JVC GC-XA1EU', '(JVC Adixxion XA1)'))
   ,galleri('highslide', '', 'billed3720.jpg', array('JVC GC-XA1EU', '(JVC Adixxion XA1)'))
   ,galleri('highslide', '', 'billed3721.jpg', array('JVC GC-XA1EU', '(JVC Adixxion XA1)'))
))
.'
'

,'
manualer, osv
' => '
Jeg har samlet manualer og andre filer til de forskellige kamera modeller så du let kan hente dem.
'
.visfil('1', 'scooterhjemmeside/download/gopro_filer.zip', 'Gopro filer')
.visfil('1', 'scooterhjemmeside/download/contour_filer.zip', 'Contour filer')
.visfil('1', 'scooterhjemmeside/download/drift_filer.zip', 'Drift filer')
.visfil('1', 'scooterhjemmeside/download/vio_filer.zip', 'VIO filer')
.visfil('1', 'scooterhjemmeside/download/interphone_filer.zip', 'Interphone filer')
.'
'

,'
magacin.dk
' => '
'.ahref('http://www.magacin.dk/', 'magacin.dk').' som blandt andet laver TV udsendelser om motorcykler og biler har har lavet lidt om kamera.

'.ahref('http://www.magacin.dk/motorcykler/program-54-31012013/vi116/time07:42', 'TV Shows (31.01.2013) : Program #54').'
'.ahref('http://www.magacin.dk/motorcykler/gammelt-video-kamera-overrasker/ar3831/', 'Nyheder - Test (21/1-2013) : Gammelt video-kamera overrasker').'
'.ahref('http://www.magacin.dk/biler/program-46-27092012/vi107/time13:59', 'TV Shows (27.09.2012) : Program #46').'
'.ahref('http://www.magacin.dk/biler/gopro-hero-2-jvc-gc-xa1eu-el-gobandit-action-kamera/ar3526/', 'Nyheder - Test (21/9-2012) : GoPro Hero 2, JVC GC-XA1EU el. GoBandit action kamera').'
'.ahref('http://www.magacin.dk/biler/gopro-hero-2-vs-jvc-vs-gobandit/ar3517/', 'Nyheder - Test (18/9-2012) : GoPro Hero 2 vs JVC vs GoBandit').'
'.ahref('http://www.magacin.dk/motorcykler/det-bedste-onboard-kamera/ar1605/', 'Nyheder - Tilbehør (14/9-2010) : Det bedste onboard-kamera').'
'.ahref('http://www.magacin.dk/biler/sejeste-gadget/ar307/', 'Nyheder - Tilbehør (17/7-2009) : Sejeste gadget').'
'

,'
begyndelsen
' => '
Efter hvad jeg kan læse på nettet så skulle Mark Schulze være den første der lavede det her med at sætte et kamera på en styrthjelm og optage mens han kørte på mountainbike.

Det gjorde han lige da der kom et kamera med solidstate sensor også en VHS optager og batteri i rygsækken.
'.visbilled('1', 'billed3520.jpg', 'Mark Schulze kamera på styrthjelm', false, true).'

'.linkknap('http://vimeo.com/17012076', 'Mark Schulze Wearing His Helmet Cam Invention', true).'
'.linkknap('http://vimeo.com/10711229', 'video :<br>Mammoth Mountain Kamikaze Downhill, 1988', true).'
'

,'
forhandlere
' => '
Her samler jeg links til forhandlere af hjelmkamera.
'
.linkknap('http://www.actionvideo.dk/', 'actionvideo.dk')
.linkknap('http://hjelmkamera.dk/', 'hjelmkamera.dk')
.'
'

,'
typiske problemer
' => '
Her skriver jeg om nogen af de problemer man typisk oplever på folks optagelser.

'.afsnit('rystede billede', '
Er kameraet monteret et vibrerende sted på scooteren kan det give rystelser.
For eksempel hvis man monter det på styret kan det give mange rystelser fra motoren og ujævn vej.
Vibrationer fra motoren kan give et bølgende billede da de fleste hjelmkamera bruger CMOS sensorer.

Det bedste sted at montere kameraet er på/i styrthjelmen da kroppen fungere støddæmpende.

Gode optagelser er dog også set ved montering på forgaflen.
').'

'.afsnit('vindstøj', '
Den indbyggede mikrofon i mange kamera er bare ikke god i vind og vil give vindstøj.
Derfor vil det bedste nok være at montere en ekstern mikrofon inden i styrthjelmen og forbinde den til kameraet hvis der ekstern mikrofonindgang på kameraet.

Hvis der ikke er ekstern mikrofon indgang kan man placere kameraet inden i styrthjelmen bag visiret hvis der er plads.
Ellers kan man pakke kameraet ind i noget pels eller en strømpe eller noget for at reducere støjen hvis mikrofonen er udenfor hjelmen.

Jeg har også har vindstøj-frie-optagelser ved at have mikrofonen bunden af hætten på min jakke.
').'

'.afsnit('dropped frames', '
Jeg har læst at hvis man har et forholdsvist langsomt hukommelseskort (for eksempel class 2) og man optager i 1920x1080 så kan videoen komme til at hakke fordi hukommelseskortet ikke er hurtigt nok til at gemmes dataen.
Det kan rettet med et hurtigere hukommelseskort som class 10.

Jeg har også set '.ahref('http://www.youtube.com/watch?v=rMYNjWceV0w', 'denne videoanmeldelse').' af et RD32 kamera der bare var dårligt så selvom personen brugte et class 10 hukommelseskort så var frame 3 og 4 for eksempel den samme frame, og 7 og 8 kunne være den samme osv og nogen gange var der en hel række frames itræk som var ens.
').'

'.afsnit('dårlig billedekvalitet', '
Mit kamera kan for eksempel højst optage i 640x480 20fps. Det giver ikke et specielt detaljeret billede.
Begynder jeg og redigere i videoerne og konvertere så bliver det endnu dårligere.

Videooptagelserne bliver klart mere seværdige hvis man anskaffer sig et kamera der kan optage i høj opløsning og hurtig fps.
De bedste kamera hvad angår detaljeret billede er nok GoPro Hero og Contour.

Der skal siges at selvom Drift for eksempel kan lave videoer i 1080p ligesom GoPro Hero så er GoPro Hero langt mere detaljeret i de videoer jeg har set.
Så det er ikke så let at vide hvad kamera det giver det bedste billede.
Ofte oplyses kun hvad størrelse video der kan gemmes i men det betyder jo ikke at billedesensorchippen rent faktisk kan registere lige så mange punkter.
Altså man kan jo godt tage et billede i 640x480 pixels og forstørre det 3 gange til 1920x1440 pixels men det bliver billedet jo ikke mere deltaljeret af.

Der er ofte sparsomme oplysninger om sensorchippen i forbindelse med hjelmkamera.
').'

'.afsnit('lodrette streger', '
Her er nogen billeder fra mit kamera hvor solens kraftigste lys kan give lodrette striber i videoen.
'.visbilled('1', 'billed3581.jpg', 'lodrette streger ved stærkt lys', false, true).'
'.visbilled('1', 'billed3582.jpg', 'lodrette streger ved stærkt lys', false, true).'
').'

'.afsnit('Skråt billede', '
Sensorchips af CMOS typen scanner her linie i billeder en af gangen.
Det kan give et skråt billede hvis man bevæger kameraet hurtigt eller filmer noget som bevæger sig hurtigt.
Det kan også give et lodret bølgende billede hvis kameraet er monteret et sted som vibrer meget som på en scooter når motoren køre.
Det kan også give en helt specielt effekt hvis man filmer en propel på et fly som drejer hurtigt, så kan det se ud som om propellen ikke er forbundet til flyet.

Effekten er vist større jo mere lys der er, det har vist noget med lukkehastigheden at gøre.
Så hvis man giver kameraet solbriller på kan man vist nedsætte denne effekt.
').'
'

,'
tanker om de forskellige kamera
' => '
Her er de indtryk jeg har fået af de forskellige kamera ved at læse om dem på nettet og se optagelser.
Dog har jeg ikke selv prøvet nogen af kameraene.
'.
box(array('170', '300', '300')
   ,array(
       array('kamera',                          'godt',               'dårligt')
      ,array('gopro hero',              'meget detaljeret billede',                'ligner lort på siden af hjelmen')
      ,array('contour', 'meget detaljeret billede<br>ser godt ud på siden af hjelmen', 'contour+ modellen som er den eneste contour med ekstern mikrofonindgang er vildt dyr')
      ,array('drift', 'let at brugt<br>ser godt ud på siden af hjelmen<br>farverne ser ud som i virkeligheden<br>Skærm + fjernbetjening følger med som standard', 'ikke så detaljeret billede som gopro hero og contour')
   )
)
.'
Personligt vil jeg have et kamera med ekstern mikrofonindgang og hælder jeg mest til at købe GoPro Hero 2 da den har meget detaljeret billede og en ok god pris. Contour+ er vildt dyr så den køber jeg nok ikke. Drift virker god på alle måder men har ikke så detaljeret billede, alene på grund af det vælger jeg drift fra.
'

,'
filstørrelser og uploadtid
' => '
Det første kamera jeg brugte som hjelmkamera er et almindeligt kompakt digital kamera (Canon PowerShot A470).
Det optager videoer i MJPEG (Motion JPEG) hvilket vist vil sige den ikke kompriner videoer så godt fordi 1 times optagelse fylder 4 GB og det er i højeste opløsning 640x480 ved 20fps.
Det vil sige 15 minutters optagelse fylder 1 GB og det kan jo godt tage lang til at uploade så meget data hvis ens internet forbindelse ikke er så hurtig.

Man kan godt gøre filen mindre men ved at reencode den i et program på computeren men det betyder ofte dårligere billedekvalitet.

Så må man opveje om man vil have den bedste videokvalitet eller om det skal gå hurtigt at uploade videoerne.
Jeg vil klart vælge at uploade videoerne i så høj kvalitet så mulig og hvis det så betyder at det tager 24 timer af uploade videoen så må det bare tage den tid, man kan jo sagtens brugeren computeren til noget andet imens videoen uploader i baggrunden.
'

,'
hukommelseskort
' => '
Jeg købte mit '.ahref('http://www.fcomputer.dk/hardware/lagring/flash/kort/micro-sd/samsung/essential-flashskort-32gb-microsdhc-class10.html', 'Samsung 32GB microSDHC class 10').' til 311 kroner på det tidspunkt.
Det er på størrelse med en tommelfingernegl og der fulgte en fullSD adaptor med.

SD står for Secure Digital.

SD hukommelseskort fås i forskellige fysiske størrelser kaldet fullSD, miniSD og microSD.
Hvis man køber et microSD kort så kan man bruge det i både GoPro Hero, Contour og Drift, eventuelt ved at bruge en fullSD adaptor.
Hvis man køber et fullSD kort så kan det ikke bruges det i et kamera med microSD kortlæser fordi kortet er for stort fysisk.

Udover den fysiske størrelse er der forskellige standarder af hukommelse.

SDSC (Standard Capacity) er op til 2 GB.
SDHC (High Capacity) er op til 32 GB.
SDXC (eXtended-Capacity) er op til 2048 GB.

Der er forskel på hvor hurtigt der kan gemmes/læses fra kortet og hvis man optager videoer i meget høj opløsning som 1920x1080 så skal kortet være hurtigt.
Så vidt jeg ved vil videoen hakke hvis man bruger et kort der ikke er hurtigt nok.
Hastigheden kan angives med ordet "class" og det går vist fra class 2 til class 10 hvor 10 er det hurtigere og det er vist en måde og vise at kortet som mimimum kan gemme med 10 MB/s.

Med 32GB er der plads til rigtig meget video og batteriet løber nok tør nogen gange før der ikke er mere plads på hukommelseskortet.

Hos '.ahref('https://www.sdcard.org/downloads/formatter_3/', 'sdcard.org').' kan downloade SD formatter så man kan formater sine kort med det optimale filsystem så man er sikker på den bedste ydelse.
De skriver i hvert fald på nettet noget om at det ikke er godt og formater med kameraet for eksempel. Selvom kamera producenten nok vil sige man skal formater med deres produkt.
'

,'
MJPEG
' => '
Mit første kamera jeg brugte til at optage mens jeg kørte på scooter hedder Canon PowerShot A470.

Det er et kompakt digital kamera som ikke er designet til at være hjelmkamera.

Det optager videoer i MJPEG (Motion JPEG) hvilket vil sige at det ikke er særlig godt komprimeret.

1 times optagelse fylder 4 GB og det er i den højeste opløsning på 640x480 ved 20fps.
'.visbilled('1', 'billed3594.jpg', 'AVI Information', false, true).'
'

,'
gopro hero 2 erfaring
' => '
Jeg har i Oktober 2012 købt mig et GoPro Hero 2 kamera og her vil jeg løbende skrive om mine erfaring med dette kamera.

Jeg vil primært skrive om de problemer jeg har med kameraet så andre kan lærer af dem.

Her har jeg sat 2 af de buede klisterholdere på min styrthjelm.
'.visbilled('1', 'billed3906.jpg', 'GoPro Hero klisterholder øverst på styrthjelm', false, true).'
Jeg har sat lidt gaffatape på så kameraet ikke sidder og rokker. Hvis gaffatapen ikke er på sidder det en lille smule løst i holdderen.
'.visbilled('1', 'billed3905.jpg', 'GoPro Hero klisterholder på siden af styrthjelm', false, true).'

De 2 knapper der sidder i huset som beskytter kameraet er rigeligt stramme.
Det hjælper at sprøjte lidt WD-40 ind der hvor metal stangen køre ind og ud i gummipakningerne. Det gav et mere jævn tryk.
Ligeledes hjalp det på lukkemekanismen i sort plastik så den lukker jævn i stedet for det giver et hak fordi plastikket er helt tørt.

Det hus det fulgte med kameraet har ikke nogen åbning til ekstern mikrofon.
Derfor har jeg boet et hul i mit hus.
'.visbilled('1', 'billed3643.jpg', 'boret hul i gopro hus til ekstern mikrofon', false, true).'
'.visbilled('1', 'billed3644.jpg', 'ekstern mikrofon igennem gopro hus', false, true).'
Jeg har også lavet hul til USB stikket.
Det blev kedeligt og tage kameraet ud af huset hver gang man skulle overfører data og oplade batteriet.
'.visbilled('1', 'billed3734.jpg', 'USB stik igennem gopro hus', false, true).'
Jeg skal også prøve og se om jeg kan tilslutte kameraet til scooterens batteriet gennem en omformer så jeg kan optage i længere tid.
Jeg har ikke prøvet det så meget endnu da det er kedeligt med de ledninger.
'.visbilled('1', 'billed3733.jpg', 'USB stik igennem gopro hus', false, true).'

På '.ahref('http://gopro.com', 'gopro.com').' anbefaler de ikke nogen bestemt ekstern mikrofon men der står at deres team har brugt klipsmikrofoner med 2.5 volt bias.
Så vidt jeg forstår skulle en dynamisk mikron med lav modstand være bedst.
En kondensator mikrofon er så vist jeg kan læse mig til for følsom til sådan noget med vind.

Firmware opdatering :
Hvis man vil kan man opdater firmware i sit kamera som kan give nogen nye muligheder.
Programmet CineForm Studio / GoPro Studio kan bruges til at se om der er en opdatering klar og til at hjælpe med at hente og opdatere firmwaren.

Manual opdateringen forgår ved at man downloade en fil kaldet '.ahref('http://software.gopro.com/Firmware/HD2/HD2-firmware.bin', 'HD2-firmware.bin').'.
Den ligger man i roden af hukommelseskortet.
Så holder man udløserknappen inde (den øverste).
Tryk på tænd knappen én gang og kameraet tænder.
Tryk så 3 gange på tænd knappen.
På kameradisplayet ses så et logo og et versionstal.
Kameraet slukker når opdateringen er færdig.

Når opdateringen er færdig så slet '.high('HD2-firmware.bin').' filen fra hukommelseskortet, ellers tror jeg nok opdateringen kan gå i gang igen.

Der stod V50 (den gamle version) første gang jeg opdaterede.
Lidt efter stod der V198 (den nye version).

Mærkeligt nok står der så V33 på displayet når jeg har version 124 på, fordi der åbenbart følger en opdatering til WiFi enheden med som er ekstra udstyr som jeg ikke her.

Overføre filer :
Man kan enten overføre filer gennem USB eller ved at tage SD kortet ud og sætte det i computeren.
USB overførsel er lettest men også langsomst.

CineForum Studio :
Det videoredigeringsprogram som hedder '.ahref('http://gopro.com/software-app/cineform-studio/', 'CineForum Studio').' ('.ahref('http://software.gopro.com/PC/GoProCineFormStudioPC-1.3.2.169.zip', 'direkte download').') er ret dårligt så kan ikke anbefale at bruge det.
Både fordi man ikke kan sætte 2 klip sammen men også fordi når man gemmes i 720p (det format jeg ønsker at bruge) så laver programmet fejl i encodingen så video størrelsen bliver 1280x736 (AR 327:184) eller noget i den stil og det kan give en grøn linie nederst i afspilleren i VLC og MPC, også hvis man uploader til youtube. Dog ikke nogen grøn linie i windows media player.

GoPro Studio :
Senere er kommet et videoredigeringsprogram som hedder '.ahref('http://software.gopro.com/PC/GoProStudioPC-2.0.0.285.exe', 'GoPro Studio (direkte download)').' som jeg endnu ikke har prøvet. Kan være det er noget bedre.

På hukommelseskortet findes en filen '.high('MISC\version.txt').'.
Sådan her så filen ud fra ny før jeg opdaterede.
<pre style="background: gray; color: black; padding: 10px; overflow-x: scroll;"><code class="fontsize_small">{
"info version":"1.0",
"firmware version":"HD2.08.12.50",
"camera type":"HD2",
}
</code></pre>

'.high('MISC\version.txt').' efter første opdatering.
<pre style="background: gray; color: black; padding: 10px; overflow-x: scroll;"><code class="fontsize_small">{
"info version":"1.0",
"firmware version":"HD2.08.12.198.WIFI.R47.00",
"camera type":"HD2",
}
</code></pre>

'.high('MISC\version.txt').'. efter nedgradering til version 124.
<pre style="background: gray; color: black; padding: 10px; overflow-x: scroll;"><code class="fontsize_small">{
"info version":"1.0",
"firmware version":"HD2.08.12.124.WIFI.R33.00",
"camera type":"HD2",
}
</code></pre>

'.high('MISC\version.txt').'. efter opdatering til version 312.
<pre style="background: gray; color: black; padding: 10px; overflow-x: scroll;"><code class="fontsize_small">{
"info version":"1.0",
"firmware version":"HD2.08.12.312.WIFI.R68.02",
"camera type":"HD2",
}
</code></pre>

Det vidste sig at kameraet kunne finde på at fryse i starten af en optagelse efter opdatering til version 198 så derfor har jeg nedgraderet til version 124 hvilket jeg har læst på nettet at andre også havde problemet med.

'.ahref('http://software.gopro.com/Firmware/HD2/HD2-firmware.bin').' peger på den seneste firmware.
Det vil sige når der kommer en ny firmware så kommer linket automatisk til at pege på den nye firmware.

Diverse firmware versioner kan downloades her :
'.ahref('http://software.gopro.com/Firmware/v124/HD2-firmware.bin').'
'.ahref('http://software.gopro.com/Firmware/v198/HD2-firmware.bin').'
Du kan læse om forskellen mellem forskellige versioner på '.ahref('http://gopro.com/support/articles/firmware-release-information', 'firmware-release-information').'.

Du kan også finde firmware filer i følgende zip fil hvor jeg har samlet diverse GoPro Hero filer.
'.visfil('1', 'scooterhjemmeside/download/gopro_filer.zip', 'Gopro filer').'

Af en eller anden grund fik jeg en fil kaldet ".zzz" i roden af kortet. Ved ikke hvorfor.

Batteritid :
Ved 1080p 30fps kan jeg optage i 1:42:10.

Da FAT32 filsystemet har en maksimal filstørrelse grænse på 4 GB kan lange optagelser bliver opdelt i flere filer.
Maks filstørrelse : 3,66 GB (3.935.240.874 byte)

Ved 1080p 30fps kan man optage i 34:42 før der begyndes på en ny fil.
'

,'
straffelovens paragraf 264
' => '
I forbindelse med at man tager billede/video/lyd af folk på gaden så møder man måske nogen der mener at det er ulovligt.

Her er lidt lovtekst om det.

Så vidt jeg kan forstå må man altså gerne tage billeder hvis blot det/dem man filmer er på et offentligt sted.
'.citat('
§ 264. Med bøde eller fængsel indtil 6 måneder straffes den, som uberettiget

1) skaffer sig adgang til fremmed hus eller andet ikke frit tilgængeligt sted,

2) undlader at forlade fremmed grund efter at være opfordret dertil.

Stk. 2. Begås det i stk. 1, nr. 1, nævnte forhold med forsæt til at skaffe sig eller gøre sig bekendt med oplysninger om en virksomheds erhvervshemmeligheder, eller foreligger der i øvrigt særligt skærpende omstændigheder, kan straffen stige til fængsel indtil 6 år. Som særligt skærpende omstændighed anses navnlig tilfælde, hvor forholdet er begået under sådanne omstændigheder, at det påfører andre en betydelig skade eller indebærer en særlig risiko herfor.

<span style="color: red;">§ 264 a. Den, som uberettiget fotograferer personer, der befinder sig på et ikke frit tilgængeligt sted, straffes med bøde eller fængsel indtil 6 måneder. Det samme gælder den, der ved hjælp af kikkert eller andet apparat uberettiget iagttager sådanne personer.</span>

§ 264 b. (Ophævet)

§ 264 c. De i §§ 263, 264 og 264 a indeholdte straffebestemmelser finder tilsvarende anvendelse på den, der uden at have medvirket til gerningen skaffer sig eller uberettiget udnytter oplysninger, som er fremkommet ved overtrædelsen.

<span style="color: red;">§ 264 d. Med bøde eller fængsel indtil 6 måneder straffes den, der uberettiget videregiver meddelelser eller billeder vedrørende en andens private forhold eller i øvrigt billeder af den pågældende under omstændigheder, der åbenbart kan forlanges unddraget offentligheden. Bestemmelsen finder også anvendelse, hvor meddelelsen eller billedet vedrører en afdød person.</span>
').'
'

,'
redigeringsprogrammer
' => '
Her er nogen programmer der kan bruges til at rediger video med :

Avid Media Composer
Adobe Premiere CS
Final Cut Pro
Sony Vegas
iMovie
Premiere Elements
Windows Movie Maker

Avidemux 2.6.0 kan klipper i en video uden er reencode videoen (vælg Output format : MP4 Muxer).
Så kan man klippe starten og slutningen uden at miste kvalitet.
'

,'
overførselshastighed
' => '
Her skriver jeg lidt op de overførselshastigheder jeg oplever når jeg skal kopiere fra hukommelseskortet til computeren.

Hvis jeg sætter micro SD hukommelseskortet direkte i computer så bliver der overført med 16,7 MByte/sekund.

Gennem USB 2 er det 6,86 MByte/sekund.

Det går fint nok og overfører gennem USB kabel hvis man har noget andet man kan lave på computeren imens.
Men hvis man har meget data og man vil have det overført hurtigt muligt så går det hurtigere ved at sætte hukommelseskortet direkte i computeren hvis man har mulighed for det.
'

,'
vinkel
' => '
Mit GoPro Hero 2 kan indstilles til 3 forskellige synsvinkler.
Det kommer dog an på hvad opløsning man optager i, i nogle opløsninger er der ikke mulighed for at skifte synsvinkel.

Jo større synsvinkel man bruger jo mindre vigtigt er det at kameraet peger præcist
'

,'
fokus under vand
' => '
Hvis man tager mit GoPro Hero 2 kamera under vand i det vandtætte hus med den buede linse så er billedet ud af fokus.

For at få fokus kan man placer en flad linse foran sådan at vandet ikke kommer i kontakt med den buede linse.
Linsen skal være ret stor sådan at kanten af linsen (metalringen) ikke kommer med i billedet når man bruger wide synsvinkel.

Man kunne også lave en lille boks eller noget af gennemsigtig plexiglas så hele kameraet er inden i boksen.

Jeg har endnu ikke selv prøvet dette men kan være jeg prøver det på et tidspunkt.
'

,'
kamerafolk på nettet
' => '
Her er links til nogen af dem der optager mens de køre så du kan se hvad det hele går ud på og hvorfor det er så fedt.
'.
box(array('170', '170', '170', '170')
   ,array(
       array('bruger','kamera','hvor','køretøj')
      ,array(''.ahref('http://www.youtube.com/user/TheGardenSnake', 'TheGardenSnake').'','Drift / GoPro','Canada (eller også er det USA)','supermoto')
      ,array(''.ahref('http://www.youtube.com/user/13mordeth', '13mordeth').'','kompakt kamera under visiret','Taiwan','motorcykel<br>scooter')
      ,array(''.ahref('http://www.youtube.com/user/SonofthewindsInc', 'SonofthewindsInc').'','GoPro','Storbritannien London','cykel')
      ,array(''.ahref('http://www.youtube.com/user/187Premises', '187Premises').'',              'Contour',               'Storbritannien London', 'motorcykel')
      ,array(''.ahref('http://www.youtube.com/user/BaronVonGrumble', 'BaronVonGrumble').'',              'Drift',               'Storbritannien', 'motorcykel')
      ,array(''.ahref('http://www.youtube.com/user/scootergrisen', 'scootergrisen').'',              'GoPro Hero 2 + Canon PowerShot A470',               'Sjælland', 'scooter')
      ,array(''.ahref('http://www.youtube.com/channel/UCynm_mGw_E3V7dQd5sspXXA', 'Per Hald (katana)').'',              'Contour Roam',               '', 'scooter')
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
