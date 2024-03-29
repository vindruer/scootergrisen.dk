<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "videoer med scootere og knallerter - Underholdning";
$overskrift = "videoer med scootere og knallerter - Underholdning";
$metadescription = "scooterrelaterede videoer opdelt i forskellige kategorierne";

$setup['sideikon']               = 'ikoner/ikon_videoer2.png';

$underholdningdatabase = array(

/*

    1 = sjove
    2 = dyr
    3 = ombygget og opfindelser
    4 = udklædning
    5 = kendte personer
    6 = transport af ting
    7 = flere personer
    8 = reklamer
    9 = danske
   10 = on board cam
   11 = musik
   12 = dokumentar
   13 = vildt
   14 = tv og film
   15 = styrt
   16 = banekørsel
   17 = tricks

*/

//array('', '', '', '', ''),
array('233', 'http://www.youtube.com/watch?v=gP9SdEq08V0', '', 'Test af 125 Kubik', '9+14+16'),
array('232', 'http://www.youtube.com/watch?v=zNMtXs5n83A', '', 'Why NOT to Let Your Girlfriend Ride Your Moped', '1+15'),
array('231', 'http://www.youtube.com/watch?v=3CYc1STuZr0', '', 'Small Pistons Moped Touring 2013', '9+10'),
// findes ikke mere array('230', 'http://www.youtube.com/watch?v=_THo8jWo03w', '', 'Driving around Store heddinge city on scooter', '9+10'),
array('229', 'http://www.youtube.com/watch?v=KllNG262lYM', '', 'Full Assembly 50cc Scooter Moped Out of a Box (like a Pro)', ''),
// findes ikke mere array('228', 'http://www.youtube.com/watch?v=5MguTsCDn9E', '', 'Driving around Vordingborg city on scooter', '9+10'),
// findes ikke mere array('227', 'http://www.youtube.com/watch?v=G1FQhKEYty8', '', 'Driving over storestrøm bridge (storestrømsbroen) on scooter', '9+10'),
// findes ikke mere array('226', 'http://www.youtube.com/watch?v=g1LpY7u-PM4', '', 'Driving around Præstø city on scooter', '9+10'),
// findes ikke mere array('225', 'http://www.youtube.com/watch?v=IWEL4t89Lz8', '', 'Driving around Tappernøje city on scooter + NP Motor', '9+10'),
// findes ikke mere array('224', 'http://www.youtube.com/watch?v=iNcbl1CUzXg', '', 'AB 93 342 on the phone', '9+10'),
// findes ikke mere array('223', 'http://www.youtube.com/watch?v=_7Mf8c9KDG0', '', 'Driving around Ringsted on scooter', '9+10'),
// findes ikke mere array('222', 'http://www.youtube.com/watch?v=fDGauzkqaDA', '', 'Derestrict CDI unit on Kymco Super 8 (4 stroke 50 cc) scooter', '9+10'),
// findes ikke mere array('221', 'http://www.youtube.com/watch?v=_Oc0sIkZSEA', '', 'Refueling scooter at gas station', '9+10'),
array('220', 'http://www.youtube.com/watch?v=lqUzZGthUVU', '', 'Rock´N`Roll Camping. Puch Maxi', '5+9+14'),
array('219', 'http://www.youtube.com/watch?v=qhP9vhJdZs4', '', 'Nye regler for knallert 2013', '9'),
array('218', 'http://www.scootergalleri.dk/vid_vis.aspx?VideoID=106161', '', 'Lidt kørsel i Nordsjælland [GOPRO 3]', '9+10'),
array('217', 'http://www.youtube.com/watch?v=pN8_2htp2xQ', '', 'Station 2 - Knallerter i Augustenborg', '9+10+14'),
// findes ikke mere array('216', 'http://www.youtube.com/watch?v=sc3AuW2TWq0', '', 'police stops scooter for speeding', '9+10'),
array('215', 'http://www.youtube.com/watch?v=mHELyMmBoJI', '', 'Sportsmoto + Brønderslev Cykel og Scooter', '9'),
array('214', 'http://www.youtube.com/watch?v=pSa-DqSPuv8', '', 'VeloSolex Rally 2012', '9+14'),
// findes ikke mere array('213', 'http://www.youtube.com/watch?v=fspSffcdN-Y', '', 'Snow + winter tire front + worn "slick" tire back = Fun', '9+10+15'),
// findes ikke mere array('212', 'http://www.youtube.com/watch?v=EMF9anU-Zsk', '', 'From Fakse to Fakse ladeplads on scooter', '9+10'),
array('211', 'http://player.foxfdm.com/shared/1.0.448/pdk/swf/flvPlayer.swf', 'id=refPlayerplayer1212501885&skinurl=http://cdn.ficgohub.com/mpx/players/fuel/swf/skinFuel.swf&usebootloader=true&backgroundcolor=0x000000&controlbackgroundcolor=0x000000&controlcolor=0xffcc00&controlframecolor=0xE0E0E0&controlhovercolor=0xffffff&controlselectedcolor=0x000000&framecolor=0x000000&loadprogresscolor=0x7C7C7C&pagebackgroundcolor=0x131313&playprogresscolor=0xffcc00&scrubtrackcolor=0x131313&scrubbercolor=0xF2F2F2&scrubberframecolor=0xF2F2F2&textbackgroundcolor=0x383838&textcolor=0xBEBEBE&allowfullscreen=true&supportedmedia=mpeg4,f4m,flv,m3u,ogg,webm,mpeg,qt,3gpp,ism,wm,3gpp2,aac,asx,avi,move,mp3&releaseurlformatresolution=false&loglevel=error&releaseurl=http://link.theplatform.com/s/BhQjCC/swV7RlyV0cM3?format=smil&policy=10328&series=New+Vehicle+Delivery&timestamp=1467935314&autoplay=true&allowscriptaccess=always&previewscrubbing=true&usedefaultplayoverlay=false&disabledcolor=0x000000&pluginlayout=type=overlay|URL=http://cdn.ficgohub.com/mpx/players/gohula/swf/FuelLayoutPlugIn.as.swf?progressbarColor=0xffcc00&pluginfoxshare=type=overlay|URL=http://cdn.ficgohub.com/mpx/players/shared/1.0.448/swf/FoxSharePlugIn.swf|deepLink=http://natgeotv.com/uk/planet-mechanics/videos/new-vehicle-delivery?shared=true|fbembed=true&plugingoogleanalytics=type=tracking|url=http://player.foxfdm.com/shared/1.0.448/pdk/swf/googleAnalytics.swf|pattern=natgeotv.com%7Cuk%7CPlanet+Mechanics%7C%7Btitle%7D%7C266%7Chttp://natgeotv.com/uk/planet-mechanics/videos/new-vehicle-delivery%7C%7BisAd%7D%7C%7Bplaylist.player%7D|priority=2|ID=UA-33423726-4|TrackAds=true|Histograms=10&pluginvastswf=type=ad|url=http://player.foxfdm.com/shared/1.0.448/pdk/swf/vast.swf|priority=1|hosts=smartadserver.com,videostrip.com|mimeTypes=video%2Fmp4,video%2Fx-flv&pluginvastjs=type=ad|url=http://player.foxfdm.com/shared/1.0.448/pdk/js/plugins/vast.js|priority=1|hosts=smartadserver.com,videostrip.com|mimeTypes=video%2Fmp4,video%2Fx-flv', 'planet machanics - puch maxi drevet af komprimeret luft', '3+14'),
// findes ikke mere array('210', 'http://www.youtube.com/watch?v=uTmfyj5zIfE', '', 'Guy drops scooter while learning to drive', '9+10'),
// findes ikke mere array('209', 'http://www.youtube.com/watch?v=aSaITYWYikM', '', 'My first GoPro Hero 2 video upload', '9+10'),
array('208', 'http://www.youtube.com/watch?v=IDk5rccF8Tw', '', 'Dj Herning Feat Slössar & Slut - Knallert', '9+11'),
array('207', 'http://www.youtube.com/watch?v=Z1YoCfm7nxU', '', 'RYNO Motors Full Story', '3'),
array('206', 'http://www.scootergalleri.dk/video/guider/101281-saadan_fremstilles_en_scooter_piaggiogilera', '', 'How its made - Vespa', ''),
array('205', 'http://www.youtube.com/watch?v=N4GTeoN4ypM', '', 'Station 2 Politiet til kamp mod ulovlige knallerter', '9+12+14'),
// findes ikke mere array('204', 'http://www.youtube.com/watch?v=3Jgmh_g4bpY', '', 'Wind turbines near Copenhagen', '9+10'),
// findes ikke mere array('203', 'http://www.youtube.com/watch?v=iuhkN5R9Q8s', '', 'Copenhagen Pride Parade 2012', '9+10'),
// findes ikke mere array('202', 'http://www.youtube.com/watch?v=DRL7pWpmBMU', '', 'Trafik med snak 1', '9+10'),
// uploaderen har lukket sin konto array('201', 'http://www.youtube.com/watch?v=BCI-N1KJHWg', '', 'Politijagt Aars', '9+12+14'),
// uploaderen har lukket sin konto array('200', 'http://www.youtube.com/watch?v=p4yi_A7pvZg', '', 'Politiet jagter knallert over bro (KNALLERTJAGT)', '9+12+14'),
// uploaderen har lukket sin konto array('199', 'http://www.youtube.com/watch?v=utPEAttXZ9M', '', 'Politistationen - Vild knallertjagt i København', '9+12+14'),
// findes ikke mere array('198', 'http://www.youtube.com/watch?v=HPwNrcMbO-A', '', 'Kamera i styrthjelm 7 (med musik)', '9+10+11'),
array('197', 'http://www.youtube.com/watch?v=J0dA_HAu6qo', '', 'Til EM på Knallert', '9+14'),
// findes ikke mere array('196', 'http://www.youtube.com/watch?v=XdX_9HGpzrM', '', 'Kamera i styrthjelm 1 (test)', '9+10+14'),
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
// findes ikke mere array('181', 'http://www.youtube.com/watch?v=N_Pmxe9pSKE', '', 'Tur på scooter (frederiksberg og københavn)', '9+10'),
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

   // ret break.com videoer så de virker
   //array('149', 'http://embed.break.com/MTkxNjE0NQ==', 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2010%2f9%2f14%2fc8b101c7-6cfb-42b4-ad5b-a7d6ed861b63_1.flv', 'Crazy 85 MPH Moped Stunt', '13'),

array('148', 'http://vimeo.com/4129435', '', '2009 PoliniUSA Cup', '16'),
array('147', 'http://webtv.tvmkanal.dk/v.swf', 'photo_id=510374&token=9f11100979dd02687622f4c4a22f5765', 'teufelskerle - moped love', '9'),
array('146', 'http://webtv.tvmkanal.dk/v.swf', 'photo_id=512471&token=3cb303e3e38470e4e99a9e661e298f96', 'teufelskerle - knallert koach karburator', '9'),
array('145', 'http://webtv.tvmkanal.dk/v.swf', 'photo_id=512468&token=814b5e26f66223ed58f5d18e02fc6771', 'teufelskerle - knallert kloset', '9'),
array('144', 'http://www.youtube.com/watch?v=JOe_NCsCaag', '', 'teufelskerle - knallert kribs', '9'),

array('142', 'http://www.youtube.com/watch?v=1aYN6s1PGKg', '', 'powerscoot bicylinder Comet....', '3'),
array('141', 'http://www.youtube.com/watch?v=gElH2_7cGJY', '', 'Drømmer du om en dragster?', '9'),
array('140', 'http://www.youtube.com/watch?v=WY8SeUd13Q0', '', 'Road Racing our Kymco Super 8 150s', '10'),
//konto lukket array('139', 'http://www.youtube.com/watch?v=g3TFRxo7hrY', '', 'stereo love', '9'),
array('138', 'http://www.youtube.com/watch?v=9p0no9w1_8c', '', 'Björkenäs Mopedmuseum', ''),
//findes ikke array('137', 'http://www.youtube.com/watch?v=OGYigIx9HPY', '', 'Scooter Kørsel i Aabenraa', '9'),
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

   // ret break.com videoer så de virker
   //array('119', 'http://embed.break.com/MzAyODc2', 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2007%2f5%2f29%2f302876_32b0b512-60c3-472e-bef1-f6a870f697a6_prod.flv', 'køre på scooter ind i indkøbscenter', ''),

// virker måske ikke array('118', 'http://www.youtube.com/v/1yKWH7QDhig', '', 'scootercam', '10'),
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
//findes ikke array('64', 'http://www.youtube.com/watch?v=eCUUh-67e2k', '', 'diverse hjemmevideo klip', '14+15'),
//array('63', 'http://www.youtube.com/watch?v=QOzyEqUaVmM', '', 'diverse stunts og styrt', '15'),

array('61', 'http://www.dailymotion.com/video/x452zr', '', 'muppetshow - Gonzo på motorcykel op af rampe', '14'),
array('60', 'http://www.dailymotion.com/video/x3z9oy', '', 'neger på ny motorcykel', '14+15'),
//fjernet array('59', 'http://www.metacafe.com/fplayer/1237573/monkey_in_a_motorcycle.swf', '', 'abe i snor på lille motorcykel', ''),
//array('58', 'http://www.youtube.com/watch?v=ZFuTulIC0B8', '', 'nye dæk 1', '15'),
//array('57', 'http://www.youtube.com/watch?v=RPJmXJ_5u20', '', 'nye dæk 2', '15'),
array('56', 'http://www.youtube.com/watch?v=Xu2HMo63nyU', '', 'Jared over lille bakke', '15'),
//slettet fordi ophavskrav fra adrealine crew : array('55', 'http://www.youtube.com/watch?v=2HbFEChsrsQ', '', 'første gang på en motorcykel', ''),
array('54', 'http://www.youtube.com/v/YCj_4_0mh3Q', '', 'giv gas', '15'),
//privat array('53', 'http://www.youtube.com/watch?v=U9gdgqLAG0Q', '', 'stunts på baghjul', '17'),
//blokeret i dit land array('52', 'http://www.youtube.com/watch?v=3v_WJhF21qk', '', 'stunts med ild', '17'),
array('51', 'http://www.youtube.com/v/jGfIgn2H25s', '', 'løber og står op mens køre scooter', ''),
//fjernet array('50', 'http://blip.tv/play/2216176', '', 'polini cup 2009', '16'),

   // ret break.com videoer så de virker
   //array('49', 'http://embed.break.com/NTAyOTI5', 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2008%2f5%2f502929_38f6baa9-7fab-48bd-b749-2b22d3631c94_prod_1.flv', 'vælter på græs', '15'),
   //array('48', 'http://embed.break.com/NDIxNTAx', 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2007%2f12%2f421501_9d552e09-562d-4dc1-98b9-8c28f7899b97_prod.flv', 'problemer med at få scooteren ned fra støtteben', '1'),
   //array('47', 'http://embed.break.com/MTQyMDA0Mg==', 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2009%2f10%2f1420042_83f35dff-83cb-410d-a1f8-59a9753ed102_prod_1.flv', 'første gang på scooter', ''),

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

   // ret break.com videoer så de virker
   //array('30', 'http://embed.break.com/NTQyODM4'           , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2008%2f7%2fscooter-jump-failure-nutshot_1.flv', 'lige i nødderne', ''),
   //array('29', 'http://embed.break.com/MTM2NDcyNw=='       , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2009%2f9%2f1364727_51768b91-5822-40e9-8274-b76c17bd0882_prod_1.flv', 'madvogn trukket af scooter', ''),
   //array('28', 'http://embed.break.com/NjQ2OTk4'           , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2008%2f2%2f456850_6abf040a-ad48-42fd-ab76-0d6bfb08b270_prod.flv', 'hop over scooter', ''),
   //array('27', 'http://embed.break.com/NDU2ODUw'           , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2008%2f2%2f456850_6abf040a-ad48-42fd-ab76-0d6bfb08b270_prod.flv', 'hop ind i vindue', ''),

array('26', 'http://www.youtube.com/v/DATBAdyABi4'      , '', 'hund bag på', '2'),

   // ret break.com videoer så de virker
   //array('25', 'http://embed.break.com/NDIyNjU5'           , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2007%2f12%2fidiot-on-moped-goes-for-a-ride.flv', 'gashåndtaget sidder vist fast', ''),

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

   // ret break.com videoer så de virker
   //array('14', 'http://embed.break.com/NTgwNTk3'           , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2008%2f9%2ffunny-scooter-crash-ends-in-faceplant_1.flv', 'hej pæl', '15'),
   //array('13', 'http://embed.break.com/Njc1OTA3'           , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2009%2f2%2f675907_8df1deb5-00cf-472c-9b25-967d6532d67d_prod_1.flv', 'spiderman', '14'),

//fjernet array('12', 'http://embed.break.com/NzcwMzI2'           , '', 'transformers', ''), // slettet

   // ret break.com videoer så de virker
   //array('11', 'http://embed.break.com/Mjc1MjI3'           , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2007%2f4%2f16%2f275227_d113b4c2-5ead-4bdd-a4b5-225027f7074c_prod.flv', 'fra filmen taxi', '14'),
   //array('10', 'http://embed.break.com/MTUxNDIzMQ=='       , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2009%2f11%2f1514231_98f96e5c-0b9d-4089-8108-f25f47fba21e_prod_1.flv', 'god til at køre på baghjul', '17'),
   //array('9', 'http://embed.break.com/MzQ2ODc5'           , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2007%2f8%2f9%2f346879_6ec70798-6449-4305-8155-fba16872c658_prod.flv', 'knap så god til at køre på baghjul', '15'),
   //array('8', 'http://embed.break.com/MTgzNzU3'           , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2006%2f11%2f16%2f183757_6922c96c-e61a-4762-9d35-8406475a287a_prod.flv', 'hjemmelavet elektrisk knallert', '1'),
   //array('7', 'http://embed.break.com/MTA5NTMyOQ=='       , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2009%2f8%2fscooter-showoff-owned-by-pole_1.flv', 'Scooter Showoff Owned by Pole', '15'),

array('6', 'http://www.youtube.com/v/KHH7qm99Hbo'      , '', 'karrusel', '1'),
array('5', 'http://www.youtube.com/v/ccxuaxGc9Uk'      , '', 'styrt', '15'),
array('4', 'http://www.youtube.com/v/i8Pmx105_tk'      , '', 'hej hus', '15'),

   // ret break.com videoer så de virker
   //array('3', 'http://embed.break.com/MzA5NTE3'           , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2007%2f6%2f9%2f309517_7f824005-8a8a-4852-9650-869c1459acc8_prod.flv', 'svensker hop', '15'),
   //array('2', 'http://embed.break.com/MTYyMDEyMg=='       , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2010%2f1%2f1620122_e6d51f5d-5405-4184-ac0f-fdaf028a860f_prod_1.flv', 'det bare ikke hans omgang', '15+16'),
   //array('1', 'http://embed.break.com/NTI3MjQ0'           , 'sVidLoc=http%3a%2f%2fvideo1.break.com%2fdnet%2fmedia%2f2008%2f6%2f527244_01b26b57-0606-4749-aa8d-d57a97ca2d83_prod_1.flv', 'lidt farligt', '15')

);

$adfunsdfudsnfdsf = underholdning_henttitle($underholdningdatabase);

$title = $adfunsdfudsnfdsf[0] . ' - ' . my_mb_ucfirst($title);
$metadescription = 'Video ' . $adfunsdfudsnfdsf[1] . ' - ' . my_mb_ucfirst($metadescription);

$databasecenter = array_merge(

underholdning('videoer', '711', '400', $underholdningdatabase)

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
