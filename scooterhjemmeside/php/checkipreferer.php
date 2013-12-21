<?php

function checkip(){

   if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){

      $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];

   }elseif(isset($_SERVER["REMOTE_ADDR"])){

      $ip = $_SERVER["REMOTE_ADDR"];

   }

   if(isset($ip)){

      switch($ip){

         case '94.242.237.127' : // /scooterhjemmeside/php/fejl.php bvnfgtdppufshsjtfo nzvitjseqk osv
            exit;
            break;

         // 2-3-4 besøg på samme sekund med refere fra .ru sider mest
         case '176.102.219.6' :
         case '46.118.126.194' :
         case '193.106.136.60' :
         case '46.119.118.152' :
         case '37.115.112.210' :
         case '213.110.133.221' :
         case '178.137.128.238' :
         case '193.106.136.57' :
         case '37.115.113.47' :
         case '176.8.88.90' :
         case '5.248.83.93' :
         case '178.137.5.60' :
         case '193.106.136.63' :
         case '91.207.9.226' :
         case '46.118.152.23' :
         case '178.137.93.32' :
         case '176.102.192.10' :
         case '37.115.113.47' :
         case '193.106.136.55' :
         case '176.8.91.143' :
         case '193.106.136.40' :
         case '178.137.19.179' :
         case '94.153.64.49' :
         case '193.106.136.48' :
         case '46.119.124.40' :
         case '193.106.136.40' :
         case '178.137.128.25' :
         case '91.207.4.186' :
         case '46.119.120.35' :
         case '193.106.136.33' :
         case '178.137.129.249' :
         case '46.118.118.106' :
         case '193.106.136.51' :
         case '178.137.5.247' :
         case '91.223.75.117' :
         case '91.223.75.118' :
         case '193.106.136.39' :
         case '37.139.52.23' :
         case '178.137.128.210' :
         case '176.123.0.57' :
         case '178.137.129.194' :
         case '193.106.136.45' :
         case '193.106.136.52' :
         case '193.106.136.61' :
         case '94.153.64.136' :
         case '94.153.64.185' :
         case '94.153.64.46' :
         case '94.153.64.9' :
         case '94.153.65.222' :
         case '94.153.65.74' :
            exit;
            break;

         // Ref : http://onlineddos.blogspot.dk/ (Online DDOS Tool To Take Down Bad Website Pls Do Not Take Down Good Sites! ) ; IP : 83.93.177.55 ; besøgt hjemmesiden 1311 gange fra 1/10/2012 15:56:48 - 1/10/2012 15:59:14 (cirka 8-9 besøg i sekundet) med beskeden "Oh, stop it you!"
         // bruger url redirect til sig selv i stedet for case '83.93.177.55' :

         // email spammer
         case '1.192.126.252' :
         case '10.10.2.163' :
         case '103.246.246.146' :
         case '109.163.226.218' :
         case '113.195.134.231' :
         case '114.148.68.116' :
         case '119.39.102.99' :
         case '119.39.91.95' :
         case '122.194.5.201' :
         case '125.39.93.69' :
         case '130.59.108.135' :
         case '166.70.129.147' :
         case '174.139.180.106' :
         case '177.81.1.177' :
         case '187.123.88.207' :
         case '190.12.40.98' :
         case '190.12.40.98' :
         case '190.153.122.10' :
         case '195.5.18.41' :
         case '196.215.31.11' :
         case '198.101.201.70' :
         case '2.51.253.169' :
         case '202.167.250.43' :
         case '204.28.120.180' :
         case '206.136.227.5' :
         case '207.164.21.4' :
         case '208.115.109.28' :
         case '208.65.192.1' :
         case '208.66.72.114' :
         case '208.66.75.162' :
         case '209.161.7.9' :
         case '209.203.120.48' :
         case '212.143.93.29' :
         case '212.252.168.253' :
         case '213.202.77.135' :
         case '213.210.216.34' :
         case '216.167.113.42' :
         case '218.6.15.69' :
         case '23.22.35.145' :
         case '23.23.184.222' :
         case '24.235.98.154' :
         case '46.21.144.52' :
         case '50.116.40.184' :
         case '50.17.188.122' :
         case '59.34.1.151' :
         case '69.60.2.242' :
         case '72.46.128.10' :
         case '72.46.134.138' :
         case '76.164.194.90' :
         case '76.164.196.82' :
         case '76.164.227.10' :
         case '76.164.232.66' :
         case '78.159.102.169' :
         case '82.210.31.77' :
         case '86.12.154.49' :
         case '86.99.222.66' :
         case '91.232.96.16' :
         case '94.23.1.28' :
         case '94.23.33.36' :
         case '99.169.46.190' :
            exit;
            break;

         // dobbelt hits hvor ref står til at komme fra en side hvor mine links ikke ser ud til at være
         case '109.120.157.179' :
         case '178.137.129.128' :
         case '192.162.19.183' :
         case '195.242.218.133' :
         case '195.68.223.198' :
         case '89.108.102.171' :
         case '92.249.127.111' :
         case '93.170.1.53' :
         case '94.153.64.85' :
         case '95.168.172.156' :
            exit;
            break;

         // stop here<a href=> </a> for your all your adult cheap sex toys demands
         case '158.255.7.240' :
            exit;
            break;

         // QDqZFTnmLWqQvj IFZADT http://www.FPU7vqiRhHghotBHegWQdZiVgO8pMSe6.com
         case '188.143.232.84' :
            exit;
            break;

         // ePjzhR  <a href="http://srgsggjxkmnf.com/">srgsggjxkmnf</a>, [url=http://yolruausfqfq.com/]yolruausfqfq[/url], [link=http://asrjqhxpssho.com/]asrjqhxpssho[/link], http://tgaokhptwwsj.com/
         case '91.201.64.25' :
         case '46.119.115.22' :
         case '176.65.164.111' :
            exit;
            break;

         // shell_asp%3Bme.jpg, jackalshell.php
         case '94.18.41.135' :
            exit;
            break;

         // spam
         case '123.240.216.194' :
            exit;
            break;

         // 19. okt. 2011 : uploadet filer : ss_jpg.php, c99__php.gif
         case '78.163.118.123' :
            exit;
            break;

         // 14. okt. 2011 : uploadet filer : mailing.txt, add.php, sender.php, mailing.php
         case '46.37.180.212' :
            exit;
            break;

         // 30-12-2010 uploadet 3 filer med php kode (privit_12.php, z_c99.phtml, good.php3)
         case '46.153.200.161' :
            exit;
            break;

         // 15-01-2011 uploadet 4 filer med php kode (2.php, ates.php, negm_php.jpg, zxh_sm.php)
         case '79.91.234.219' :
            exit;
            break;

         // 18-01-2011 uploadet 4 filer med php kode (c99_php.jpg, c99.php, rootacces_php.jpg, hehe.php)
         case '80.167.88.109' :
            exit;
            break;

         // 19-02-2011 har e-mail spammet gennem et længere stykke tid med jævnemellemrum. Skriver beskeder i formularer som : VaAEnL  <a href="http://lazyoxdfvouw.com/">lazyoxdfvouw</a>, [url=http://savgmdxdbgww.com/]savgmdxdbgww[/url], [link=http://jwwycafaexlo.com/]jwwycafaexlo[/link], http://lhwyieoidjef.com/
         case '79.142.65.199' :
         case '91.214.45.223' :
         case '79.142.79.11' :
         case '88.255.36.50' :
         case '188.92.75.82' :
         case '91.201.66.39' :
         case '109.230.217.91' :
         case '68.54.110.142' :
         case '46.98.74.124' :
         case '92.240.201.107' :
         case '167.192.16.20' :
            exit;
            break;

         // <a href="http://cigarettesx.com/marlboro_red_gold_medium.html">Marlboro Medium Red Gold</a> [url=http://cigarettesx.com/marlboro_red_gold_medium.html]Marlboro Medium Red Gold[/url] [link=http://cigarettesx.com/marlboro_red_gold_medium.html]Marlboro Medium Red Gold[/link]
         case '91.121.162.102' :
         case '80.228.85.107' :
         case '213.0.89.52' :
         case '125.39.154.75' :
         case '62.162.28.226' :
            exit;
            break;

         case '202.3.66.95' :
         case '46.43.64.71' :
         case '195.251.250.244' :
         case '62.157.186.18' :
         case '91.201.66.39' :
         case '88.198.6.112' :
         case '119.46.78.178' :
         case '189.85.60.18' :
         case '174.134.42.74' :
         case '87.104.52.94' :
         case '41.73.204.35' :
         case '184.106.97.64' :
         case '46.43.64.71' :
         case '189.3.215.146' :
         case '86.51.10.146' :
         case '59.124.27.108' :
         case '62.134.244.160' :
         case '46.188.4.32' :
         case '207.87.111.50' :
         case '192.75.88.186' :
         case '128.214.14.129' :
         case '62.157.186.18' :
         case '98.233.202.215' :
         case '81.186.138.152' :
         case '194.63.239.233' :
         case '212.138.110.4' :
            exit;
            break;

      }

   }

}



function checkreferer(){

   // får nogen besøg med referer som .ru sider hvor de besøger 2 gange inden for samme eller 2 sekund

   if(isset($_SERVER["HTTP_REFERER"])){

      $referer = $_SERVER["HTTP_REFERER"];

      switch($referer){

         case 'http://www.rbsurgut.ru/' : header("Location: http://www.rbsurgut.ru/"); exit; break;
         case 'http://rostovdrive.ru/' : header("Location: http://rostovdrive.ru/"); exit; break;
         case 'http://infoscript.ru/' : header("Location: http://infoscript.ru/"); exit; break;
         case 'http://xn----7sbbhhkrpdb5aehfs3bc.xn--p1ai/' : header("Location: http://xn----7sbbhhkrpdb5aehfs3bc.xn--p1ai/"); exit; break;
         case 'http://www.foto-star.ru/' : header("Location: http://www.foto-star.ru/"); exit; break;
         case 'http://seoprodvig.ru/karta/' : header("Location: http://seoprodvig.ru/karta/"); exit; break;
         case 'http://lovejewel.ru/' : header("Location: http://lovejewel.ru/"); exit; break;
         case 'http://onlineddos.blogspot.dk/' : header("Location: http://onlineddos.blogspot.dk/"); exit; break;
         case 'http://xn----7sbhagdbck2epbabs6b.xn--p1ai/' : header("Location: http://xn----7sbhagdbck2epbabs6b.xn--p1ai/"); exit; break;
         case 'http://music.utrolive.ru/news.php?readmore=579' : header("Location: http://music.utrolive.ru/news.php?readmore=579"); exit; break;
         case 'http://vseskazki.su/' : header("Location: http://vseskazki.su/"); exit; break;
         case 'http://housemilan.ru/news.php?readmore=422' : header("Location: http://housemilan.ru/news.php?readmore=422"); exit; break;
         case 'http://oilcity-rb.ru/' : header("Location: http://oilcity-rb.ru/"); exit; break;
         case 'http://avena.com.ua/' : header("Location: http://avena.com.ua/"); exit; break;
         case 'http://bankomans.com/' : header("Location: http://bankomans.com/"); exit; break;
         case 'http://housemilan.ru/news.php?readmore=423' : header("Location: http://housemilan.ru/news.php?readmore=423"); exit; break;
         case 'http://music.utrolive.ru/news.php?readmore=682' : header("Location: http://music.utrolive.ru/news.php?readmore=682"); exit; break;
         case 'http://filmishki.info/' : header("Location: http://filmishki.info/"); exit; break;
         case 'http://www.design-interiors.com.ua/' : header("Location: http://www.design-interiors.com.ua/"); exit; break;
         case 'http://zayceva.net/' : header("Location: http://zayceva.net/"); exit; break;
         case 'http://4gamers.clanbb.ru/' : header("Location: http://4gamers.clanbb.ru/"); exit; break;
         case 'http://housemilan.ru/news.php?readmore=354' : header("Location: http://housemilan.ru/news.php?readmore=354"); exit; break;
         case 'http://rieltor-pro.ru/' : header("Location: http://rieltor-pro.ru/"); exit; break;
         case 'http://dlm.dn.ua/' : header("Location: http://dlm.dn.ua/"); exit; break;
         case 'http://bulgaria.bbeasy.ru/' : header("Location: http://bulgaria.bbeasy.ru/"); exit; break;
         case 'http://penfriends-international.com/' : header("Location: http://penfriends-international.com/"); exit; break;

         case 'http://housemilan.ru/news.php?readmore=394' :
            header("Location: http://housemilan.ru/news.php?readmore=394");
            exit;
            break;

         case 'http://music.utrolive.ru/news.php?readmore=640' :
            header("Location: http://music.utrolive.ru/news.php?readmore=640");
            exit;
            break;

         case 'http://uafilmstop.net' :
            header("Location: http://uafilmstop.net");
            exit;
            break;

         case 'http://postel-kiev.com.ua/' :
            header("Location: http://postel-kiev.com.ua/");
            exit;
            break;

         case 'http://housemilan.ru/news.php?readmore=406' :
            header("Location: http://housemilan.ru/news.php?readmore=406");
            exit;
            break;

         case 'http://domania.bbhit.ru/' :
            header("Location: http://domania.bbhit.ru/");
            exit;
            break;

         case 'http://joomlasecret.ru/' :
            header("Location: http://joomlasecret.ru/");
            exit;
            break;

         case 'http://mazzay.by/' :
            header("Location: http://mazzay.by/");
            exit;
            break;

         case 'http://www.videomastera.ru/' :
            header("Location: http://www.videomastera.ru/");
            exit;
            break;

         case 'http://www.teenbdtube.com/' :
            header("Location: http://www.teenbdtube.com/");
            exit;
            break;

         case 'http://viatel.offtopic.su/' :
            header("Location: http://viatel.offtopic.su/");
            exit;
            break;

         case 'http://music.utrolive.ru/news.php?readmore=641' :
            header("Location: http://music.utrolive.ru/news.php?readmore=641");
            exit;
            break;

         case 'http://ofira.ru/' :
            header("Location: http://ofira.ru/");
            exit;
            break;

      }

   }

}

?>
