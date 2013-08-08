<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "videoer - Underholdning";
$overskrift = "videoer - Underholdning";
$metadescription = "scooterrelaterede videoer opdelt i forskellige kategorierne";

$underholdningdatabase = array(

/*

http://video.google.com/videoplay?docid=711935178741143089 viderestilles til http://www.youtube.com/watch?v=HTgDbJJmOsQ&feature=gv
http://video.google.com/videoplay?docid=7497863356280254008 viderestilles ikke... endnu ?

   case '1' : sjove
   case '2' : dyr
   case '3' : ombygget og opfindelser
   case '4' : udklædning
   case '5' : kendte personer
   case '6' : transport af ting
   case '7' : flere personer
   case '8' : reklamer
   case '9' : danske
   case '10' : on board cam
   case '11' : musik
   case '12' : dokumentar
   case '13' : vildt
   case '14' : tv og film
   case '15' : styrt
   case '16' : banekørsel
   case '17' : tricks
*/

//array('', '', '', '', ''),
//array('', '', '', '', ''),
//array('', '', '', '', ''),
//array('', '', '', '', ''),
//array('', '', '', '', ''),
//array('', '', '', '', ''),
//array('', '', '', '', '9+12+14'),
//array('', '', '', '', '9+12+14'),
//array('', '', '', '', '9+12+14'),
//array('', '', '', '', '9+12+14'),
//array('', '', '', '', '9+12+14'),
//array('', '', '', '', '9+12+14'),
//array('', '', '', '', '9+12+14'),
//array('', '', '', '', '9+12+14'),
//array('', '', '', '', '9+12+14'),
//array('', '', '', '', '9+12+14'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('', '', '', '', '9+10'),
//array('2', '', '', '', '9+10'),
//array('2', '', '', '', '9+10'),
//array('2', '', '', '', '9+10'),
//array('2', '', '', '', '9+10'),
//array('2', '', '', '', '9+10'),
//array('2', '', '', '', '9+10'),
//array('2', '', '', '', '9+10'),
//array('2', '', '', '', '9+10'),
//array('2', '', '', '', '9+10'),
array('220', 'http://www.youtube.com/watch?v=lqUzZGthUVU', '', 'Rock´N`Roll Camping. Puch Maxi', '5+9+14'),
array('219', 'http://www.youtube.com/watch?v=qhP9vhJdZs4', '', 'Nye regler for knallert 2013', '9'),
array('218', 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=106161', '', 'Lidt kørsel i Nordsjælland [GOPRO 3]', '9+10'),
array('217', 'http://www.youtube.com/watch?v=pN8_2htp2xQ', '', 'Station 2 - Knallerter i Augustenborg', '9+10+14'),
array('216', 'http://www.youtube.com/watch?v=sc3AuW2TWq0', '', 'Politiet stopper scootergrisen', '9+10'),
array('215', 'http://www.youtube.com/watch?v=mHELyMmBoJI', '', 'Sportsmoto + Brønderslev Cykel og Scooter', '9'),
array('214', 'http://www.youtube.com/watch?v=pSa-DqSPuv8', '', 'VeloSolex Rally 2012', '9+14'),
array('213', 'http://www.youtube.com/watch?v=fspSffcdN-Y', '', 'Snow + winther tire front + worn "slick" tire back = Fun', '9+10+15'),
array('212', 'http://www.youtube.com/watch?v=EMF9anU-Zsk', '', 'From Fakse to Fakse ladeplads on scooter', '9+10'),
array('211', 'http://player.foxfdm.com/shared/1.0.448/pdk/swf/flvPlayer.swf', 'id=refPlayerplayer1212501885&skinurl=http://cdn.ficgohub.com/mpx/players/fuel/swf/skinFuel.swf&usebootloader=true&backgroundcolor=0x000000&controlbackgroundcolor=0x000000&controlcolor=0xffcc00&controlframecolor=0xE0E0E0&controlhovercolor=0xffffff&controlselectedcolor=0x000000&framecolor=0x000000&loadprogresscolor=0x7C7C7C&pagebackgroundcolor=0x131313&playprogresscolor=0xffcc00&scrubtrackcolor=0x131313&scrubbercolor=0xF2F2F2&scrubberframecolor=0xF2F2F2&textbackgroundcolor=0x383838&textcolor=0xBEBEBE&allowfullscreen=true&supportedmedia=mpeg4,f4m,flv,m3u,ogg,webm,mpeg,qt,3gpp,ism,wm,3gpp2,aac,asx,avi,move,mp3&releaseurlformatresolution=false&loglevel=error&releaseurl=http://link.theplatform.com/s/BhQjCC/swV7RlyV0cM3?format=smil&policy=10328&series=New+Vehicle+Delivery&timestamp=1467935314&autoplay=true&allowscriptaccess=always&previewscrubbing=true&usedefaultplayoverlay=false&disabledcolor=0x000000&pluginlayout=type=overlay|URL=http://cdn.ficgohub.com/mpx/players/gohula/swf/FuelLayoutPlugIn.as.swf?progressbarColor=0xffcc00&pluginfoxshare=type=overlay|URL=http://cdn.ficgohub.com/mpx/players/shared/1.0.448/swf/FoxSharePlugIn.swf|deepLink=http://natgeotv.com/uk/planet-mechanics/videos/new-vehicle-delivery?shared=true|fbembed=true&plugingoogleanalytics=type=tracking|url=http://player.foxfdm.com/shared/1.0.448/pdk/swf/googleAnalytics.swf|pattern=natgeotv.com%7Cuk%7CPlanet+Mechanics%7C%7Btitle%7D%7C266%7Chttp://natgeotv.com/uk/planet-mechanics/videos/new-vehicle-delivery%7C%7BisAd%7D%7C%7Bplaylist.player%7D|priority=2|ID=UA-33423726-4|TrackAds=true|Histograms=10&pluginvastswf=type=ad|url=http://player.foxfdm.com/shared/1.0.448/pdk/swf/vast.swf|priority=1|hosts=smartadserver.com,videostrip.com|mimeTypes=video%2Fmp4,video%2Fx-flv&pluginvastjs=type=ad|url=http://player.foxfdm.com/shared/1.0.448/pdk/js/plugins/vast.js|priority=1|hosts=smartadserver.com,videostrip.com|mimeTypes=video%2Fmp4,video%2Fx-flv', 'planet machanics - puch maxi drevet af komprimeret luft', '3+14'),
array('210', 'http://www.youtube.com/watch?v=uTmfyj5zIfE', '', 'Guy drops scooter while learning to drive', '9+10'),
array('209', 'http://www.youtube.com/watch?v=aSaITYWYikM', '', 'My first GoPro Hero 2 video upload', '9+10'),
array('208', 'http://www.youtube.com/watch?v=IDk5rccF8Tw', '', 'Dj Herning Feat Slössar & Slut - Knallert', '9+11'),
array('207', 'http://www.youtube.com/watch?v=Z1YoCfm7nxU', '', 'RYNO Motors Full Story', '3'),
array('206', 'http://www.scootergalleri.dk/video/guider/101281-saadan_fremstilles_en_scooter_piaggiogilera', '', 'How its made - Vespa', ''),
array('205', 'http://www.youtube.com/watch?v=N4GTeoN4ypM', '', 'Station 2 Politiet til kamp mod ulovlige knallerter', '9+12+14'),
array('204', 'http://www.youtube.com/watch?v=3Jgmh_g4bpY', '', 'Wind turbines near Copenhagen', '9+10'),
array('203', 'http://www.youtube.com/watch?v=iuhkN5R9Q8s', '', 'Copenhagen Pride Parade 2012', '9+10'),
array('202', 'http://www.youtube.com/watch?v=DRL7pWpmBMU', '', 'Trafik med snak 1', '9+10'),
// uploaderen har lukket sin konto array('201', 'http://www.youtube.com/watch?v=BCI-N1KJHWg', '', 'Politijagt Aars', '9+12+14'),
// uploaderen har lukket sin konto array('200', 'http://www.youtube.com/watch?v=p4yi_A7pvZg', '', 'Politiet jagter knallert over bro (KNALLERTJAGT)', '9+12+14'),
// uploaderen har lukket sin konto array('199', 'http://www.youtube.com/watch?v=utPEAttXZ9M', '', 'Politistationen - Vild knallertjagt i København', '9+12+14'),
array('198', 'http://www.youtube.com/watch?v=HPwNrcMbO-A', '', 'Kamera i styrthjelm 7 (med musik)', '9+10+11'),
array('197', 'http://www.youtube.com/watch?v=J0dA_HAu6qo', '', 'Til EM på Knallert', '9+14'),
array('196', 'http://www.youtube.com/watch?v=XdX_9HGpzrM', '', 'Kamera i styrthjelm 1 (test)', '9+10+14'),
array('195', 'http://www.youtube.com/watch?v=SKutKWhJLL8', '', 'Broken Scooter', '1+14'),
array('194', 'http://www.youtube.com/watch?v=cmsvEhce_GQ', '', 'Rinus Met Romana op de scooter', '1+11'),
array('193', 'http://www.youtube.com/watch?v=FkVrAow6v0M', '', 'T Hansen sang', '1+9+11'),
array('192', 'http://www.youtube.com/watch?v=x2DgwY5QQBk', '', 'BPG Motors: UNO Development Video', '3'),
array('191', 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=3863', '', 'Koger/hekseringe :P', '9'),
array('190', 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=13369', '', 'Cross i kugle', '14'),
array('189', 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=12540', '', 'Tv2 politets indsats mod knallerter', '9+14'),
array('188', 'http://scootergalleri.dk/vid_vis.aspx?VideoID=50883', '', 'GTS - Police på skolen med felt ! :D', '9'),
array('187', 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=12762', '', 'Tv2 Øst (Ulovlige scooter)', '9+14'),
array('186', 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=69530', '', 'POLITIJAGT 3', '9+14'),
array('185', 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=49085', '', 'Dreng blev sparket ned af politiet', '9+14'),
array('184', 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=85738', '', '2 cylle rox bigbore 86 cc + nx 48.7 hk', '3+9'),
// for høj lyd array('183', 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=85777', '', 'Lebbe brænder', '9'),
array('182', 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=84528', '', 'Den ryger meget?, hvad sker der.', '9'),
array('181', 'http://www.youtube.com/watch?v=N_Pmxe9pSKE', '', 'Tur på scooter (frederiksberg og københavn)', '9+10'),
array('180', 'http://www.youtube.com/watch?v=YQluf_oLs8I', '', 'Knallertkontrol i Hvidovre', '9'),
array('179', 'http://www.youtube.com/watch?v=PCl2vikCI1w', '', 'Hvorfor kører du for stærkt?', '9'),
array('178', 'http://www.youtube.com/watch?v=lGXqQmU8L0Y', '', 'Ebeltoft scootertur 15/11', '9+10'),
array('177', 'http://www.youtube.com/watch?v=3gSl3AwI7N8', '', 'Good Thing its Scooter Rage', '11'),
array('176', 'http://www.youtube.com/watch?v=j5pSNd9Hy1s', '', 'Scootergalleris fedeste scootere!:D', '3+9+11'),
array('175', 'http://www.youtube.com/watch?v=rsuCyqxzRHA', '', 'klassiske knallerter', '9+14'),
// array('174', 'http://www.youtube.com/watch?v=YihpoYQMer8', '', 'Moped Drag Racing.4', ''),
array('173', 'http://www.youtube.com/watch?v=AHrPHYRXymc', '', 'scooterPOD', ''),
array('172', 'http://www.youtube.com/watch?v=yUdQPHxC78k', '', 'Racetour', '9'),
array('171', 'http://www.youtube.com/watch?v=o5F1ovhx0LI', '', '3 gode råd om scootertræf', '9'),
array('170', 'http://www.youtube.com/watch?v=I2Z_QgfEHLU', '', 'Få styr på din scooter', '9'),
array('169', 'http://www.youtube.com/watch?v=bIFyyrT9C5I', '', 'HSW - Herning scooter weekend', '9'),
array('168', 'http://www.youtube.com/watch?v=oUnMOc5kr7g', '', 'ScooterTV i Herning', '9'),
array('167', 'http://www.youtube.com/watch?v=_QQM_uHBaKc', '', 'hoverbike', '3+14'),
array('166', 'http://www.youtube.com/watch?v=NUXhJZZRUIg', '', 'New SUMO', '3+14'),
array('165', 'http://vimeo.com/2096533', '', 'Our first Motorsports HERO WIDE commercial...psyched.', '10'),
array('164', 'http://vimeo.com/8456118', '', 'Jorge Lorenzo en Salvados (La Sexta) con El Follonero', '14'),
array('163', 'http://www.youtube.com/watch?v=2aGCy-8U-ZE', '', 'Run - Scooter Documentary', '12+14'),
array('162', 'http://www.youtube.com/watch?v=HTgDbJJmOsQ', '', 'Scootermania', '12+14'),
array('161', 'http://vimeo.com/13978436', '', '1st Kodak ZX1 Video Mountain ride', '10'),
array('160', 'http://www.youtube.com/watch?v=jNzm2y9lMJM', '', 'Scooter crash-test', '9+15'),
array('159', 'http://www.youtube.com/watch?v=m2VcBay05Po', '', 'Nanna og Peter trailer', '9'),
array('158', 'http://www.youtube.com/watch?v=t7uvv7EYqg0', '', 'Ryno motors - self-balancing, one wheel, electric scooter 1', '3'),
array('157', 'http://www.youtube.com/watch?v=0wTfQiGFAKE', '', 'Ryno motors - self-balancing, one wheel, electric scooter 2', '3'),
//array('156', 'http://www.youtube.com/watch?v=2oK-5AMSB8A', '', 'Red Arrows Vespa Scooter LEJOG', ''),
array('155', 'http://www.youtube.com/watch?v=ZZRwChFUF1o', '', 'White Sands Mayhem Slow Race', ''),
array('154', 'http://www.youtube.com/watch?v=GIqbOECqQYE', '', 'Moped Safety Film Pt. 1', '14'),
array('153', 'http://www.youtube.com/watch?v=vox8vfTk1rs', '', 'Moped Safety Film Pt. 2', '14'),
array('152', 'http://www.youtube.com/watch?v=LyRu9RbloLw', '', 'kondom på udstødning', ''),
array('151', 'http://www.youtube.com/watch?v=RnIvhlKT7SY', '', '5Axis Machining cnc [www.disn.co.jp] 5Achs DMG/HyperMILL', ''),
array('150', 'http://www.youtube.com/watch?v=BJXfnWArBQA', '', 'Scoot Commute', '10'),
array('149', 'http://embed.break.com/MTkxNjE0NQ==', '', 'Crazy 85 MPH Moped Stunt', '13'),
array('148', 'http://vimeo.com/4129435', '', '2009 PoliniUSA Cup', '16'),
array('147', 'http://webtv.tvmkanal.dk/v.swf', 'photo_id=510374&token=9f11100979dd02687622f4c4a22f5765', 'teufelskerle - moped love', '9'),
array('146', 'http://webtv.tvmkanal.dk/v.swf', 'photo_id=512471&token=3cb303e3e38470e4e99a9e661e298f96', 'teufelskerle - knallert koach karburator', '9'),
array('145', 'http://webtv.tvmkanal.dk/v.swf', 'photo_id=512468&token=814b5e26f66223ed58f5d18e02fc6771', 'teufelskerle - knallert kloset', '9'),
array('144', 'http://www.youtube.com/watch?v=JOe_NCsCaag', '', 'teufelskerle - knallert kribs', '9'),
// fuldskærms reklame plus google reklame = for meget reklame array('143', 'http://www.dailymotion.com/video/x294b8_madass-125-rsr_sport', '', 'madass riviera stunt riders', ''),
array('142', 'http://www.youtube.com/watch?v=1aYN6s1PGKg', '', 'powerscoot bicylinder Comet....', '3'),
array('141', 'http://www.youtube.com/watch?v=gElH2_7cGJY', '', 'Drømmer du om en dragster?', '9'),
array('140', 'http://www.youtube.com/watch?v=WY8SeUd13Q0', '', 'Road Racing our Kymco Super 8 150s', '10'),
array('139', 'http://www.youtube.com/watch?v=g3TFRxo7hrY', '', 'stereo love', '9'),
array('138', 'http://www.youtube.com/watch?v=9p0no9w1_8c', '', 'Björkenäs Mopedmuseum', ''),
array('137', 'http://www.youtube.com/watch?v=OGYigIx9HPY', '', 'Scooter Kørsel i Aabenraa', '9'),
array('136', 'http://www.youtube.com/watch?v=2GXfQ_ngWds', '', 'de vilde hjerter trailer', '9'),
array('135', 'http://www.youtube.com/watch?v=BDp2ndWr2os', '', 'teufelskerle i aftenshowet', '9+14'),
array('134', 'http://www.youtube.com/watch?v=6j6I4ttcCeo', '', 'OWT - The Best Of OWT And Crashs', ''),
array('133', 'http://www.youtube.com/watch?v=E0F4kl3w9pQ', '', 'Vladimir og Kennedy: Bornholmere', '1+9+14'),
array('132', 'http://www.youtube.com/watch?v=p4kZWQF-HQM', '', 'gramsespektrum - Du minder mig om Limahl', '1+9+11+14'),
//array('131', 'http://www.youtube.com/watch?v=KLYYV5-tyYo', '', 'knallertkampagne', '9+14'),
array('130', 'http://www.youtube.com/watch?v=vvSkNsySREk', '', 'Yamaha Passola reperation', '9'),
array('129', 'http://www.youtube.com/watch?v=qH-Hn13twqw', '', 'politi på knallertkontrol', '9+14'),
array('128', 'http://www.youtube.com/watch?v=Qvq1jvVjsMc', '', 'veteranknallert vulkan årgang 1955', '9'),
array('127', 'http://www.youtube.com/watch?v=VroDginW8bk', '', 'Køhler knallerter reklame', '8+9'),
// uploader har lukket sin konto array('126', 'http://www.youtube.com/watch?v=A2GJP9jeKUU', '', 'TV/midt-vest : knallert Razzia i Herning', '9+14'),
array('125', 'http://www.youtube.com/watch?v=SHI0kkQv58E', '', 'ivar kører knallert på en vinterdag', ''),
//array('124', 'http://www.youtube.com/watch?v=uAuca300YQE', '', 'gammel mand på 3 hjulet scooter som ikke kan køre', ''),
// irriterende start lyd array('123', 'http://www.youtube.com/watch?v=X2SBdOFlgBQ', '', 'scootertræf', ''),
array('122', 'http://www.youtube.com/watch?v=kUHJeI0-a2I', '', 'det bare ikke hans omgang - set fra anden vinkel', '15+16'),
array('121', 'http://www.youtube.com/v/t__r95QIkwo', '', 'silver giant dragbike 2009', '3'),
array('120', 'http://www.youtube.com/watch?v=mplwn3WJG28', '', 'how it\'s made - Ball bearings', ''),
array('119', 'http://embed.break.com/MzAyODc2', '', 'køre på scooter ind i indkøbscenter', ''),
array('118', 'http://www.youtube.com/v/1yKWH7QDhig', '', 'scootercam', '10'),
//array('117', 'http://www.youtube.com/watch?v=LwapZ-sV6KI', '', 'scooter TV - Hvor ender de ulovlige scootere ?', ''),
//array('116', 'http://www.youtube.com/v/iRasoZMirRc', '', 'roller karussell', '1'), // Denne video er ikke tilgængelig i dit land. (har virket)
array('115', 'http://vimeo.com/11433301', '', '1. afdeling af DM for Supermoto Mini 18 HK på Lockarp i sverige', '9'),
//array('114', 'http://www.youtube.com/watch?v=4f6Pah8fVPM', '', 'scooter TV - Min vens anlæg', ''),
//array('113', 'http://www.youtube.com/watch?v=BFQr4C0Xuis', '', 'scooter TV - Frisure', ''),
//array('112', 'http://www.youtube.com/watch?v=RrAb8lDMmDY', '', 'scooter TV - Tysklandstur', ''),
array('111', 'http://www.youtube.com/watch?v=ZnCoQhKwDMk', '', '5 ting der bare ikke må ske hvis du møder politiet på scooter', '1+9'),
array('110', 'http://www.youtube.com/watch?v=h2fuLNhdJ9A', '', 'Spiritus kørsel på knallert - Politijagt kanal 5', '9+14'),
array('109', 'http://www.youtube.com/watch?v=2Thw5y1Kz00', '', 'go aften danmark - Knallert debat', '9+14'),
//array('108', 'http://www.youtube.com/watch?v=CNcjvfCMJeo', '', 'scooter TV - Træf 7000', ''),
array('107', 'http://images.stupidvideos.com/2.0.2/swf/video.swf?sk=7&si=2&i=61692', '', 'jeg skal bare over gaden', ''),
array('106', 'http://images.stupidvideos.com/2.0.2/swf/video.swf?sk=7&si=2&i=294144', '', 'fodgængerfelt', ''),
array('105', 'http://www.youtube.com/watch?v=rRKeqxoPNOg', '', 'high rollers weekend las vegas 2010', ''),
array('104', 'http://www.youtube.com/watch?v=e83ux0KH588', '', 'high rollers weekend las vegas 2009', ''),
array('103', 'http://www.youtube.com/v/AFQJo2jZCvU', '', 'chuck mead - I wish it was friday', '11'),
array('102', 'http://www.youtube.com/v/83CreXEeiXo', '', 'på baghjul', '17'),
array('101', 'http://www.youtube.com/v/EjMblyya7v0', '', 'små scooter piger', ''),
array('100', 'http://images.stupidvideos.com/2.0.2/swf/video.swf?sk=7&si=2&i=210787', '', 'lidt for bred', '15'),
array('99', 'http://images.stupidvideos.com/2.0.2/swf/video.swf?sk=7&si=2&i=180242', '', 'massere af scootere i trafikken', ''),
array('98', 'http://images.stupidvideos.com/2.0.2/swf/video.swf?sk=7&si=2&i=292115', '', '5 på 1', '7'),
array('97', 'http://www.youtube.com/v/xrOek4z32Vg', '', 'Fine young cannibals - Good thing', '11'),
array('96', 'http://www.youtube.com/watch?v=q70ql6R9P8Y', '', 'scootergris', '1'),
array('95', 'http://www.youtube.com/watch?v=ebEmEpEbAlU', '', 'Speedmeet 2009', '9'),
array('94', 'http://www.youtube.com/watch?v=hAYxcA9ht24', '', 'Speedmeet custom 2010', '9'),
array('93', 'http://www.youtube.com/watch?v=ezn-mhlBZyk', '', 'kat køre med på motorcykel', '2'),
//array('92', 'http://www.youtube.com/v/LJ2iDn_FAvk', '', 'hund på sports motorcykel', '2'),
array('91', 'http://www.youtube.com/v/bOhdU-ILPdI', '', 'hund køre med på motorcykel', '2'),
array('90', 'http://www.youtube.com/v/c75zy-2S8wU', '', 'hund køre med på scooter', '2'),
//array('89', 'http://www.youtube.com/v/383cOLY95qQ', '', 'vespa reklame', '8+14'), // slettet
//array('88', 'http://www.youtube.com/watch?v=UCZNB94naTk', '', 'mange klip med styrt og tricks', '17'),
array('87', 'http://www.youtube.com/watch?v=27pvXuJvBhA', '', 'motorcycle learning time!', ''),
array('86', 'http://www.youtube.com/watch?v=0aW-Vj5i7_U', '', 'dragrace dobbelt fail', '15+16'),
array('85', 'http://www.youtube.com/watch?v=dd1BS1rT2ps', '', 'hej mur', ''),
array('84', 'http://www.youtube.com/watch?v=v_SCViO-NQA', '', 'taiwan bike crazy', ''),
array('83', 'http://www.youtube.com/watch?v=aaeKrqJJqm0', '', 'discovery - the greatest motorcycle ever', '14'),
array('82', 'http://www.youtube.com/watch?v=BMky2NbE5x8', '', 'julemandens scooter kane', '4'),
array('81', 'http://www.youtube.com/watch?v=RebnHJhoHsE', '', 'Motorcycle Fail', '15'),
//array('80', 'http://www.youtube.com/watch?v=klZegYBt6CM', '', 'av', ''),
array('79', 'http://www.youtube.com/watch?v=N-c6na5FTos', '', 'burnout fail', ''),
array('78', 'http://www.youtube.com/watch?v=E6aIhj9_qIg', '', 'ghost rider - Uppsala run', '13'),
array('77', 'http://www.youtube.com/watch?v=jpJ_Fz6S1YY', '', 'ghost rider - The final ride', '13'),
array('76', 'http://www.youtube.com/watch?v=98B7fwgDMCY', '', 'ghost rider 2 - Goes wild', '13'),
array('75', 'http://www.youtube.com/watch?v=PYDpcUOLdBo', '', 'ghost rider - Goes crazy in europe', '13'),
array('74', 'http://www.youtube.com/watch?v=2ptYPCHoHwQ', '', 'ghost rider 4 - Goes undercover', '13'),
//array('73', 'http://www.youtube.com/watch?v=UGzR8CS5uYw', '', 'ghost rider 5 - Back to basics', '13'), // slettet. krav om ophavsret fra "high level og sweden ab".
//array('72', 'http://www.youtube.com/watch?v=ud_gXPCMUDw', '', 'ghost rider - Suzuki hayabusa turbo', '13'),
//array('71', 'http://www.youtube.com/watch?v=qA72omEfxPM', '', 'ghost rider aka patrik fürstenhoff uden hjelm', '13'),
array('70', 'http://www.youtube.com/watch?v=jwieel03c-w', '', 'suzuki Hayabusa kører speedometer fuldt ud', '13'),
array('69', 'http://www.youtube.com/watch?v=eOMOJTbpnJE', '', 'crucible BMW Biodiesel Motorcycle', '3'),
array('68', 'http://www.youtube.com/watch?v=BsKYXmaNsRo', '', 'slapper af og skriver sms på motorvejen', '13'),
//array('67', 'http://www.youtube.com/watch?v=DzjEVRu4QXk', '', 'fra dårligt til godt vejgreb', '15'), // blevet privat
array('66', 'http://www.youtube.com/watch?v=_DiURlssZJY', '', 'rammer ved siden af rampen... eller', '15'),
array('65', 'http://www.youtube.com/watch?v=8RpcQ5q_B_w', '', 'blærerøv på baghjul', '15+17'),
array('64', 'http://www.youtube.com/watch?v=eCUUh-67e2k', '', 'diverse hjemmevideo klip', '14+15'),
//array('63', 'http://www.youtube.com/watch?v=QOzyEqUaVmM', '', 'diverse stunts og styrt', '15'),
//array('62', 'http://video.google.com/videoplay?docid=7497863356280254008', '', 'ude og køre', ''),
array('61', 'http://www.dailymotion.com/video/x452zr', '', 'muppetshow - Gonzo på motorcykel op af rampe', '14'),
array('60', 'http://www.dailymotion.com/video/x3z9oy', '', 'neger på ny motorcykel', '14+15'),
array('59', 'http://www.metacafe.com/fplayer/1237573/monkey_in_a_motorcycle.swf', '', 'abe i snor på lille motorcykel', ''),
//array('58', 'http://www.youtube.com/watch?v=ZFuTulIC0B8', '', 'nye dæk 1', '15'),
//array('57', 'http://www.youtube.com/watch?v=RPJmXJ_5u20', '', 'nye dæk 2', '15'),
array('56', 'http://www.youtube.com/watch?v=Xu2HMo63nyU', '', 'Jared over lille bakke', '15'),
//slettet fordi ophavskrav fra adrealine crew : array('55', 'http://www.youtube.com/watch?v=2HbFEChsrsQ', '', 'første gang på en motorcykel', ''),
array('54', 'http://www.youtube.com/v/YCj_4_0mh3Q', '', 'giv gas', '15'),
array('53', 'http://www.youtube.com/watch?v=U9gdgqLAG0Q', '', 'stunts på baghjul', '17'),
array('52', 'http://www.youtube.com/watch?v=3v_WJhF21qk', '', 'stunts med ild', '17'),
array('51', 'http://www.youtube.com/v/jGfIgn2H25s', '', 'løber og står op mens køre scooter', ''),
array('50', 'http://blip.tv/play/2216176', '', 'polini cup 2009', '16'),
array('49', 'http://embed.break.com/NTAyOTI5', '', 'vælter på græs', '15'),
array('48', 'http://embed.break.com/NDIxNTAx', '', 'problemer med at få scooteren ned fra støtteben', '1'),
array('47', 'http://embed.break.com/MTQyMDA0Mg==', '', 'første gang på scooter', ''),
array('46', 'http://www.funnyordie.com/videos/f4871c1636', '', 'på baghjul ind i bord', '15+17'),
array('45', 'http://www.funnyordie.com/videos/fb4fd80f55', '', 'freaky robots', '14'),
array('44', 'http://www.funnyordie.com/videos/402cddfd5d', '', 'slip gashåndtaget', ''),
array('43', 'http://www.funnyordie.com/videos/d6a88b5a13', '', '2 mænd på scooter efter arbejde', ''),
array('42', 'http://www.youtube.com/watch?v=0UNr1XClnec', '', 'flamme kaster', ''),
//array('41', 'http://www.metacafe.com/fplayer/yt-tqdZFuGt1I4/chinese_man_throws_bicycle_at_thieves_on_scooter.swf', '', 'stjæler taske og får cykel', ''),
//array('40', 'http://www.youtube.com/watch?v=0mk5ut5p2rI', '', 'Mørk og jul - Lars hjortshøj fuld på knallert', '1+9+14'), // ophavsret sony music danmark ?
//array('39', 'http://c.brightcove.com/services/viewer/federated_f8/1686060896' , '', 'planet machanics . puch maxi drevet af komprimeret luft', '14'),
array('38', 'http://www.youtube.com/watch?v=6nABVvApDWM', '', 'danser med scooter', '15'),
array('37', 'http://www.youtube.com/watch?v=J88cg5wSX5o', '', 'problemer med at sætte scooter på støtteben', '1+14'),
array('36', 'http://www.youtube.com/watch?v=HZwdbfPDS-w', '', 'Jeg er en lille motorcykel', '1+9+14'),
array('35', 'http://www.youtube.com/watch?v=DGo1o5cddHc', '', 'training', '1'),
array('34', 'http://www.youtube.com/watch?v=w_kIUSr7-is', '', 'Hollywood holt - Throw a kit', '11'),
array('33', 'http://www.youtube.com/watch?v=6tlHM7_XgEY', '', 'L Ron Harald - E Puch Maxi sang', '11'),
array('32', 'http://www.youtube.com/v/4mHsybH2go8'      , '', 't-hansen slagter', '8+14'),
array('31', 'http://www.youtube.com/v/nvm0K_uy0zM'      , '', 't-hansen ko', '8+14'),
array('30', 'http://embed.break.com/NTQyODM4'           , '', 'lige i nødderne', ''),
array('29', 'http://embed.break.com/MTM2NDcyNw=='       , '', 'madvogn trukket af scooter', ''),
array('28', 'http://embed.break.com/NjQ2OTk4'           , '', 'hop over scooter', ''),
array('27', 'http://embed.break.com/NDU2ODUw'           , '', 'hop ind i vindue', ''),
array('26', 'http://www.youtube.com/v/DATBAdyABi4'      , '', 'hund bag på', '2'),
array('25', 'http://embed.break.com/NDIyNjU5'           , '', 'gashåndtaget sidder vist fast', ''),
array('24', 'http://www.metacafe.com/fplayer/311648/bear_riding_a_moped.swf'                            , '', 'bjørn køre scooter', ''),
array('23', 'http://www.metacafe.com/fplayer/898811/andreas_gustaffson_crazy_stunts_on_a_moped.swf'     , '', 'andreas gustaffson tricks', '17'),
array('22', 'http://www.metacafe.com/fplayer/257550/hanging_by_a_moped.swf'                             , '', 'på rulleskøjter', '17'),
array('21', 'http://www.metacafe.com/fplayer/2225319/moped_madness_in_vietnam.swf'                      , '', 'massere af scootere i vietnam', ''),
array('20', 'http://www.metacafe.com/fplayer/156473/skillfull_scooterdriver.swf'                        , '', 'tricks', '17'),
array('19', 'http://www.youtube.com/watch?v=hsVoXQXLPac', '', 'tv show styrt', '14+15'),
array('18', 'http://www.youtube.com/v/rFIU36Qrw58'      , '', 'drenge danser til techno', '11'),
array('17', 'http://www.youtube.com/v/VPGd0LCOVHk'      , '', 'hej jord', '15'),
array('16', 'http://www.youtube.com/v/B9oTS8PigNY'      , '', 'blind mand på scooter', '14'),
array('15', 'http://www.youtube.com/v/zBXgZ9HWF5E'      , '', 'tv rapporter styrter på vespa', '14+15'),
array('14', 'http://embed.break.com/NTgwNTk3'           , '', 'hej pæl', '15'),
array('13', 'http://embed.break.com/Njc1OTA3'           , '', 'spiderman', '14'),
//array('12', 'http://embed.break.com/NzcwMzI2'           , '', 'transformers', ''), // slettet
array('11', 'http://embed.break.com/Mjc1MjI3'           , '', 'fra filmen taxi', '14'),
array('10', 'http://embed.break.com/MTUxNDIzMQ=='       , '', 'god til at køre på baghjul', '17'),
array('9', 'http://embed.break.com/MzQ2ODc5'           , '', 'knap så god til at køre på baghjul', '15'),
array('8', 'http://embed.break.com/MTgzNzU3'           , '', 'hjemmelavet elektrisk knallert', '1'),
array('7', 'http://embed.break.com/MTA5NTMyOQ=='       , '', 'Scooter Showoff Owned by Pole', '15'),
array('6', 'http://www.youtube.com/v/KHH7qm99Hbo'      , '', 'karrusel', '1'),
array('5', 'http://www.youtube.com/v/ccxuaxGc9Uk'      , '', 'styrt', '15'),
array('4', 'http://www.youtube.com/v/i8Pmx105_tk'      , '', 'hej hus', '15'),
array('3', 'http://embed.break.com/MzA5NTE3'           , '', 'svensker hop', '15'),
array('2', 'http://embed.break.com/MTYyMDEyMg=='       , '', 'det bare ikke hans omgang', '15+16'),
array('1', 'http://embed.break.com/NTI3MjQ0'           , '', 'lidt farligt', '15')

);

$adfunsdfudsnfdsf = underholdning_henttitle($underholdningdatabase);

$title = $adfunsdfudsnfdsf[0] . ' - ' . mb_ucfirst($title);
$metadescription = 'Video ' . $adfunsdfudsnfdsf[1] . ' - ' . mb_ucfirst($metadescription);

$databasecenter = array_merge(

underholdning('videoer', '711', '400', $underholdningdatabase)

,array(

'
foreslå video
' => ''
. visforeslalink('foreslå en video som handler om scootere/knallerter')
)

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
