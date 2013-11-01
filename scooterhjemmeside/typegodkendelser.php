<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$setup['nogetikon']               = 'ikoner/ikon_typegodkendelser2.png';

$title = "typegodkendelser til scootere og knallerter";
$overskrift = "typegodkendelser til scootere og knallerter";
$metadescription = "typegodkendelser fra trafikstyrelsen til scootere/knallerter som højst må køre 25, 30 og 45 km/t";

/*
Der er noget galt ved nogen datoer står at der ikke er nogen men det burde der være. Set ved Axxxx'ere omkring 1997-1999

udstederlsesdato :

gennemgå for kopier med samme nummer, kan være flere med samme Axxxx nummer.

31-01-1996
   tom
29-02-1996
   tom
31-03-1996
   tom
30-04-1996
   tom
31-05-1996  
   tom
30-06-1996
   tom
31-07-1996
   tom
31-08-1996
   tom
30-09-1996
   tom
31-10-1996
   tom
30-11-1996
   tom
31-12-1996
   tom

31-01-1997
   tom
28-02-1997
   tom
31-03-1997
   tom
30-04-1997
		<option value="TyS¤¤¤2010">Derbi Paddock (S8221) udstedt 30-04-1997</option>              x

	
31-05-1997
		<option value="TyS¤¤¤2039">Piaggio NRG (S8200) udstedt 22-05-1997</option>             X

	
30-06-1997
   tom
31-07-1997
   tom
31-08-1997
   tom
30-09-1997
   tom
31-10-1997
   tom
30-11-1997
   tom
31-12-1997
   tom


01-01-1998

31-01-1998
		<option value="TyS¤¤¤2011">Derbi Hunter (S8133) udstedt 25-02-1997</option>

	
28-02-1998
   tom
31-03-1998
		<option value="TyS¤¤¤2417">Derbi Paddock (S8221) udstedt 30-04-1997</option>

	
30-04-1998
   tom
31-05-1998
   tom
30-06-1998
   tom
31-07-1998
   tom
31-08-1998
   tom
30-09-1998
   tom
31-10-1998
   tom
30-11-1998
   tom
31-12-1998
   tom



01-01-1999

31-01-1999
   tom
28-02-1999
   tom
31-03-1999
   tom
30-04-1999
   tom
31-05-1999
   tom
30-06-1999
   tom
31-07-1999
   tom
31-08-1999
   tom
30-09-1999
   tom
31-10-1999
   tom
30-11-1999
   tom
31-12-1999
   tom



31-01-2000
   tom
29-02-2000
   tom
31-03-2000
   tom
30-04-2000
   tom
31-05-2000
   tom
30-06-2000
   tom
31-07-2000
   tom
31-08-2000
   tom
30-09-2000
   tom
31-10-2000
   tom
30-11-2000
   tom
31-12-2000
   tom




01-01-2001

31-01-2001
   tom
28-02-2001
   tom
31-03-2001
   tom
30-04-2001
   tom
31-05-2001
   tom
30-06-2001
   tom
31-07-2001
   tom
31-08-2001
   tom
30-09-2001
   tom
31-10-2001
   tom
30-11-2001
   tom
31-12-2001
   tom




31-01-2002
   tom
28-02-2002
   tom
31-03-2002
   tom
30-04-2002
   tom
31-05-2002
   tom
30-06-2002
   tom
31-07-2002
   tom
31-08-2002
   tom
30-09-2002
   tom
31-10-2002
   tom
30-11-2002
   tom
31-12-2002
   tom



31-01-2003
   tom
28-02-2003
   tom
31-03-2003
   tom
30-04-2003
   tom
31-05-2003
   tom
30-06-2003
   tom
31-07-2003
   tom
31-08-2003
   tom
30-09-2003
   tom
31-10-2003
   tom
30-11-2003
   tom
31-12-2003
   tom



01-01-2004

31-01-2004
   tom
29-02-2004
   tom
31-03-2004
   tom
30-04-2004
   tom
31-05-2004
   tom
30-06-2004
   tom
31-07-2004
   tom
31-08-2004
   tom
30-09-2004
   tom
31-10-2004
   tom
30-11-2004
   tom
31-12-2004
   tom




01-01-2005

31-01-2005
   tom
28-02-2005
   tom
31-03-2005
   tom
30-04-2005
   tom
31-05-2005
         <option value="TyS¤¤¤20809">Kinroad - Xin Tian XT 50 Q (E14196) udstedt 19-04-2005</option>
		<option value="TyS¤¤¤21180">Kymco Agility (E14297) udstedt 26-05-2005</option>

	
30-06-2005
   tom
31-07-2005
   tom
31-08-2005
   tom
30-09-2005
		<option value="TyS¤¤¤21855">Baotian BT50QT-11 (E14447) udstedt 16-08-2005</option>
		<option value="TyS¤¤¤21856">Baotian BT50QT-9 (E14448) udstedt 16-08-2005</option>
		<option value="TyS¤¤¤22104">Sanili SL 50QT-8 (E14506) udstedt 08-09-2005</option>

	
31-10-2005
		<option value="TyS¤¤¤22327">EVT 345 (E14556) udstedt 04-10-2005</option>

	
30-11-2005
		<option value="TyS¤¤¤21968">Gilera Runner (E14481) udstedt 26-08-2005</option>
		<option value="TyS¤¤¤22840">Kymco Super 9 (E14691) udstedt 25-11-2005</option>

	
31-12-2005
		<option value="TyS¤¤¤12416">Peugeot Speedfight (S12069) udstedt 20-06-2002</option>
		<option value="TyS¤¤¤23029">Piaggio Typhoon (E14735) udstedt 14-12-2005</option>
		<option value="TyS¤¤¤23049">Baotian BT50QT-9 (E14737) udstedt 16-12-2005</option>
		<option value="TyS¤¤¤23060">Piaggio Zip 50 (E14739) udstedt 19-12-2005</option>

	



01-01-2006

31-01-2006
		<option value="TyS¤¤¤23189">Baotian BT50QT-9 (E14761) udstedt 03-01-2006</option>
		<option value="TyS¤¤¤23190">Baotian BT50QT-11 (E14762) udstedt 03-01-2006</option>
         <option value="TyS¤¤¤23246">FYM - (E14783) udstedt 05-01-2006</option>
		<option value="TyS¤¤¤23247">SYM MIO 50 (E14784) udstedt 05-01-2006</option>
		<option value="TyS¤¤¤23310">Jinlun JL50QT-7 (E14799) udstedt 09-01-2006</option>
		<option value="TyS¤¤¤23311">Jinlun JL50QT-5 (E14800) udstedt 09-01-2006</option>
		<option value="TyS¤¤¤23331">Baotian BT49PY-2B (E14806) udstedt 10-01-2006</option>
		<option value="TyS¤¤¤23353">Qingqi QM50QGY (E14810) udstedt 13-01-2006</option>
		<option value="TyS¤¤¤23354">Jincheng JC50Q-8 (E14811) udstedt 13-01-2006</option>
		<option value="TyS¤¤¤23587">Gilera - (E14860) udstedt 30-01-2006</option>

	
28-02-2006
		<option value="TyS¤¤¤23284">Jincheng JC50Q-5 (E14794) udstedt 06-01-2006</option>
		<option value="TyS¤¤¤23669">Kinroad XT 50 GY (E14864) udstedt 03-02-2006</option>
		<option value="TyS¤¤¤23797">Generic X0R (E15044) udstedt 21-02-2006</option>

	
31-03-2006
		<option value="TyS¤¤¤23283">Jincheng JC50Q-7A (E14793) udstedt 06-01-2006</option>
		<option value="TyS¤¤¤24181">Generic Cracker (E15165) udstedt 07-03-2006</option>
		<option value="TyS¤¤¤24200">PGO PA50 (E15172) udstedt 08-03-2006</option>
		<option value="TyS¤¤¤24204">PGO PMX (E15173) udstedt 08-03-2006</option>
		<option value="TyS¤¤¤24205">Baotian BTTDM500-3 (E15174) udstedt 08-03-2006</option>
		<option value="TyS¤¤¤24438">CPI Supermoto (E15218) udstedt 27-03-2006</option>
		<option value="TyS¤¤¤24439">CPI Supercross (E15219) udstedt 27-03-2006</option>

	
30-04-2006
		<option value="TyS¤¤¤24481">Norsjö Carrier (E15233) udstedt 03-04-2006</option>
		<option value="TyS¤¤¤24482">Norsjö Carrier (E15234) udstedt 03-04-2006</option>
		<option value="TyS¤¤¤24528">Yiying YY50QT (E15252) udstedt 06-04-2006</option>
		<option value="TyS¤¤¤24597">Aprilia Scarabeo 50 (E15273) udstedt 12-04-2006</option>

	
31-05-2006
		<option value="TyS¤¤¤24694">Baotian - (E15368) udstedt 11-05-2006</option>
		<option value="TyS¤¤¤24892">Derbi Senda (E15349) udstedt 09-05-2006</option>
		<option value="TyS¤¤¤24897">Aprilia RS50 (E15347) udstedt 09-05-2006</option>
		<option value="TyS¤¤¤24904">PGO - (E15350) udstedt 10-05-2006</option>
		<option value="TyS¤¤¤24908">East Dragon - (E15351) udstedt 10-05-2006</option>
         <option value="TyS¤¤¤24910">SYM DD50 (E15352) udstedt 10-05-2006</option>
         <option value="TyS¤¤¤24911">SYM Jet Euro X 50 (E15353) udstedt 10-05-2006</option>
		<option value="TyS¤¤¤24918">Piaggio LX 50 (E15358) udstedt 10-05-2006</option>
		<option value="TyS¤¤¤24919">Piaggio Liberty (E15360) udstedt 10-05-2006</option>
		<option value="TyS¤¤¤24921">Piaggio FLY (E15361) udstedt 10-05-2006</option>
		<option value="TyS¤¤¤24923">Piaggio Typhoon (E15363) udstedt 10-05-2006</option>
		<option value="TyS¤¤¤24940">Aprilia SR50 Ditech (E15366) udstedt 11-05-2006</option>
		<option value="TyS¤¤¤24942">DADYW - (E15367) udstedt 11-05-2006</option>
		<option value="TyS¤¤¤24944">Gilera - (E15369) udstedt 11-05-2006</option>
		<option value="TyS¤¤¤24950">PGO - (E15375) udstedt 11-05-2006</option>
		<option value="TyS¤¤¤24953">PGO G-Max (E15378) udstedt 11-05-2006</option>
		<option value="TyS¤¤¤24954">PGO Comet (E15379) udstedt 11-05-2006</option>
		<option value="TyS¤¤¤24971">Kymco Super 9 (E15383) udstedt 16-05-2006</option>
		<option value="TyS¤¤¤24973">Malaguti Firefox F15 LC (E15385) udstedt 16-05-2006</option>
		<option value="TyS¤¤¤24975">Piaggio Ciao (E15386) udstedt 16-05-2006</option>
         <option value="TyS¤¤¤24980">Kangda Zongsshen (E15387) udstedt 16-05-2006</option>
		<option value="TyS¤¤¤25035">Her Chee Gazelle (E15398) udstedt 18-05-2006</option>
		<option value="TyS¤¤¤25044">Her Chee Baboon (E15399) udstedt 18-05-2006</option>
		<option value="TyS¤¤¤25045">Derbi Atlantis (E15400) udstedt 18-05-2006</option>

	
30-06-2006
		<option value="TyS¤¤¤24539">Baotian - (E15283) udstedt 19-04-2006</option>
		<option value="TyS¤¤¤24922">Piaggio NRG (E15362) udstedt 10-05-2006</option>
		<option value="TyS¤¤¤24924">Yamaha YN50M (E15364) udstedt 10-05-2006</option>
		<option value="TyS¤¤¤24925">Yamaha SC50M (E15365) udstedt 10-05-2006</option>
		<option value="TyS¤¤¤24947">Keeway Matrix (E15372) udstedt 11-05-2006</option>
		<option value="TyS¤¤¤24948">Keeway Focus (E15373) udstedt 11-05-2006</option>
		<option value="TyS¤¤¤24952">PGO Dr. Big (E15377) udstedt 11-05-2006</option>
		<option value="TyS¤¤¤24972">Malaguti Firefox F15 AC (E15384) udstedt 16-05-2006</option>
		<option value="TyS¤¤¤25229">Sinski MC02A (E15464) udstedt 01-06-2006</option>
		<option value="TyS¤¤¤25233">Generic Ideo (E15468) udstedt 01-06-2006</option>
		<option value="TyS¤¤¤25235">Generic Ideo (E15469) udstedt 01-06-2006</option>
		<option value="TyS¤¤¤25236">Aprilia Scarabeo (E15470) udstedt 01-06-2006</option>
		<option value="TyS¤¤¤25237">Aprilia Sonic 50 (E15471) udstedt 01-06-2006</option>
         <option value="TyS¤¤¤25238">Aprilia Rally 50 (E15472) udstedt 01-06-2006</option>
		<option value="TyS¤¤¤25239">Yiying - (E15473) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25240">Yiying - (E15474) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25241">Yiying - (E15475) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25242">Peugeot Vivacity (E15476) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25244">Peugeot Ludix Snake (E15478) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25245">Peugeot Ludix One (E15479) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25246">Peugeot Ludix Elegance (E15480) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25250">Peugeot Speedfight (E15482) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25252">Thumpstar Road Ripper 50 (E15484) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25253">Malaguti DRAKON NKD 50 (E15485) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25254">Malaguti Firefox F12 AC (E15486) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25256">Sachs RC 505/MadAss (E15487) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25257">Sachs Saxy 45 (E15488) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25259">Baotian - (E15489) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25260">Baotian - (E15490) udstedt 06-06-2006</option>
		<option value="TyS¤¤¤25263">Baotian - (E15491) udstedt 06-06-2006</option>
		<option value="TyS¤¤¤25265">Baotian - (E15493) udstedt 06-06-2006</option>
         <option value="TyS¤¤¤25441">Benzhou YY50QT-A (E15543) udstedt 14-06-2006</option>
		<option value="TyS¤¤¤25449">SYM MIO 50 (E15544) udstedt 15-06-2006</option>
         <option value="TyS¤¤¤25450">Black`n Roll S4800D (E15545) udstedt 15-06-2006</option>
		<option value="TyS¤¤¤25451">Qunsheng ES (E15546) udstedt 15-06-2006</option>
		<option value="TyS¤¤¤25482">Baotian - (E15562) udstedt 16-06-2006</option>
		<option value="TyS¤¤¤25516">Pexma PM50QT-4 (E15583) udstedt 27-06-2006</option>
		<option value="TyS¤¤¤25590">Adly Moto Silver Fox (E15284) udstedt 13-06-2006</option>
         <option value="TyS¤¤¤25606">Aprilia - (E15586) udstedt 27-06-2006</option>
		<option value="TyS¤¤¤25630">Adly Moto - (E15584) udstedt 27-06-2006</option>
		<option value="TyS¤¤¤25631">Adly Moto - (E15585) udstedt 27-06-2006</option>
		<option value="TyS¤¤¤25632">Gilera Runner SP (E15587) udstedt 27-06-2006</option>
		<option value="TyS¤¤¤25633">Skyteam - (E15588) udstedt 27-06-2006</option>
		<option value="TyS¤¤¤25634">Skyteam PBR50 (E15589) udstedt 27-06-2006</option>
		<option value="TyS¤¤¤25635">Skyteam Dax 50 (E15590) udstedt 27-06-2006</option>
		<option value="TyS¤¤¤25684">Yiying - (E15611) udstedt 29-06-2006</option>
		<option value="TyS¤¤¤25685">Yiying YY50QT (E15612) udstedt 29-06-2006</option>

	
31-07-2006
		<option value="TyS¤¤¤25243">Peugeot Ludix Classic (E15477) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤25683">Yiying - (E15610) udstedt 29-06-2006</option>
		<option value="TyS¤¤¤25704">Baotian BTTDM500-3 (E15614) udstedt 04-07-2006</option>
		<option value="TyS¤¤¤25713">Yiying - (E15617) udstedt 04-07-2006</option>
		<option value="TyS¤¤¤25775">Peugeot Ludix Elegance (E15625) udstedt 07-07-2006</option>
		<option value="TyS¤¤¤25776">Gilera Runner (E15626) udstedt 07-07-2006</option>
		<option value="TyS¤¤¤25778">Piaggio NRG (E15627) udstedt 07-07-2006</option>
		<option value="TyS¤¤¤25779">Piaggio Liberty (E15628) udstedt 07-07-2006</option>

	
31-08-2006
		<option value="TyS¤¤¤26045">Baotian - (E15690) udstedt 03-08-2006</option>
		<option value="TyS¤¤¤26047">Piaggio FLY (E15691) udstedt 03-08-2006</option>
		<option value="TyS¤¤¤26048">Sachs Saxy 25 (E15692) udstedt 03-08-2006</option>
		<option value="TyS¤¤¤26049">Peugeot Looxor (E15693) udstedt 03-08-2006</option>
		<option value="TyS¤¤¤26066">JMSTAR 45 (E15699) udstedt 04-08-2006</option>
		<option value="TyS¤¤¤26067">Kinroad Prince (E15700) udstedt 04-08-2006</option>
		<option value="TyS¤¤¤26097">Baotian - (E15705) udstedt 08-08-2006</option>
		<option value="TyS¤¤¤26202">CPI Supermoto (E15733) udstedt 25-08-2006</option>

	
30-09-2006
		<option value="TyS¤¤¤26290">Derbi GPR50 (E15763) udstedt 13-09-2006</option>
		<option value="TyS¤¤¤26319">Korado Manet 312 (E15762) udstedt 13-09-2006</option>
		<option value="TyS¤¤¤26320">Derbi Senda (E15764) udstedt 13-09-2006</option>
		<option value="TyS¤¤¤26402">Kinroad Prince (E15781) udstedt 25-09-2006</option>
		<option value="TyS¤¤¤26491">Snow Surprise (E15803) udstedt 28-09-2006</option>

	
31-10-2006
         <option value="TyS¤¤¤24311">Transportel 1200 Combi (E15199) udstedt 16-03-2006</option>
		<option value="TyS¤¤¤24945">CPI GTR (E15370) udstedt 11-05-2006</option>
		<option value="TyS¤¤¤26203">CPI Supercross (E15734) udstedt 25-08-2006</option>
		<option value="TyS¤¤¤26555">Baotian Euro Sport (E15820) udstedt 05-10-2006</option>
		<option value="TyS¤¤¤26557">PGO - (E15821) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤26558">PGO Comet (E15822) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤26559">PGO LIGERO 50 (E15823) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤26560">PGO G-Max (E15824) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤26561">PGO T-REX (E15825) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤26562">PGO PMX (E15826) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤26570">EVT 4000E (E15833) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤26571">EVT 168 (E15834) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤26572">TGB - (E15835) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤26573">TGB - (E15836) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤26574">TGB - (E15837) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤26575">TGB - (E15838) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤26576">TGB - (E15839) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤26577">TGB - (E15840) udstedt 06-10-2006</option>

	
30-11-2006
   tom
31-12-2006
		<option value="TyS¤¤¤27198">Piaggio NRG (E15965) udstedt 23-11-2006</option>
		<option value="TyS¤¤¤27469">Hero Majestic City Flex Deluxe (E16012) udstedt 18-12-2006</option>
		<option value="TyS¤¤¤27470">Hero Majestic Vogue (E16013) udstedt 18-12-2006</option>
		<option value="TyS¤¤¤27514">Hero Majestic Gizmo EFFY (E16032) udstedt 21-12-2006</option>
		<option value="TyS¤¤¤27539">New Era 50EC-8 (E16041) udstedt 22-12-2006</option>
		<option value="TyS¤¤¤27572">Kymco People 50 (E15382) udstedt 16-05-2006</option>
		<option value="TyS¤¤¤27573">Kymco ZX50 Fever (E15381) udstedt 16-05-2006</option>





01-01-2007


		<option value="TyS¤¤¤26852">Yiying - (E15916) udstedt 31-10-2006</option>
		<option value="TyS¤¤¤26856">TGB - (E15920) udstedt 31-10-2006</option>
         <option value="TyS¤¤¤26997">DONGFANG V-30 (E15931) udstedt 09-11-2006</option>
		<option value="TyS¤¤¤27051">Piaggio ZIP 2T (E15935) udstedt 13-11-2006</option>
		<option value="TyS¤¤¤27052">Piaggio ZIP 4T (E15936) udstedt 13-11-2006</option>
		<option value="TyS¤¤¤27053">Piaggio Typhoon (E15937) udstedt 13-11-2006</option>
		<option value="TyS¤¤¤27054">Gilera Stalker (E15938) udstedt 13-11-2006</option>
		<option value="TyS¤¤¤27195">Gilera Runner (E15963) udstedt 23-11-2006</option>
		<option value="TyS¤¤¤27197">Gilera - (E15964) udstedt 23-11-2006</option>
		<option value="TyS¤¤¤27199">Piaggio FLY 45 2T (E15966) udstedt 23-11-2006</option>
		<option value="TyS¤¤¤27200">Piaggio FLY 45 4T (E15967) udstedt 23-11-2006</option>
		<option value="TyS¤¤¤27201">Piaggio Vespa LX 50 (E15968) udstedt 23-11-2006</option>
         <option value="TyS¤¤¤27202">Wangye Superbyke (E15969) udstedt 23-11-2006</option>
		<option value="TyS¤¤¤27571">Kymco Agility (E15380) udstedt 16-05-2006</option>
		<option value="TyS¤¤¤28057">Generic - (E16142) udstedt 24-01-2007</option>

	

		<option value="TyS¤¤¤28058">Baotian - (E16143) udstedt 24-01-2007</option>
		<option value="TyS¤¤¤28160">Peugeot Ludix Pro (E16150) udstedt 01-02-2007</option>
		<option value="TyS¤¤¤28244">Skyteam ST50-3 (E16167) udstedt 12-02-2007</option>
		<option value="TyS¤¤¤28245">Skyteam ST50-3 09 (E16168) udstedt 12-02-2007</option>
		<option value="TyS¤¤¤28246">SHINERAY - (E16169) udstedt 12-02-2007</option>
		<option value="TyS¤¤¤28334">KEEWAY Matrix (E16203) udstedt 20-02-2007</option>
		<option value="TyS¤¤¤28410">Swei Swen Prince (E16208) udstedt 26-02-2007</option>
		<option value="TyS¤¤¤28411">Swei Swen King (E16209) udstedt 26-02-2007</option>

	

         <option value="TyS¤¤¤27078">Piaggio  (E15940) udstedt 16-11-2006</option>
		<option value="TyS¤¤¤28473">YIYING SAMPRA (E16236) udstedt 01-03-2007</option>
		<option value="TyS¤¤¤28477">Baotian BT49QT-12 (E16277) udstedt 27-03-2007</option>
		<option value="TyS¤¤¤28489">TGB - (E16242) udstedt 05-03-2007</option>
		<option value="TyS¤¤¤28757">Baotian BT49QT-12 (E16300) udstedt 29-03-2007</option>

	

		<option value="TyS¤¤¤28953">Baotian Retro (E16347) udstedt 23-04-2007</option>
		<option value="TyS¤¤¤28954">Baotian BTM (E16348) udstedt 23-04-2007</option>
		<option value="TyS¤¤¤28956">Baotian BTM (E16349) udstedt 23-04-2007</option>
		<option value="TyS¤¤¤28958">Baotian EL scooter (E16351) udstedt 23-04-2007</option>
		<option value="TyS¤¤¤28959">Baotian - (E16350) udstedt 23-04-2007</option>

	

		<option value="TyS¤¤¤29088">KEEWAY X-RAY (E16390) udstedt 02-05-2007</option>
		<option value="TyS¤¤¤29119">Baotian BT49QT-12-d45 (E16393) udstedt 08-05-2007</option>
		<option value="TyS¤¤¤29232">Keeway Matrix (E15355) udstedt 10-05-2006</option>
		<option value="TyS¤¤¤29366">Keeway Flash (E16033) udstedt 25-05-2007</option>
		<option value="TyS¤¤¤29367">Keeway Flash (E16034) udstedt 25-05-2007</option>
		<option value="TyS¤¤¤29379">DERBI Atlantis (E16455) udstedt 25-05-2007</option>

	

		<option value="TyS¤¤¤29120">Baotian - (E16394) udstedt 07-06-2007</option>
		<option value="TyS¤¤¤29448">Dadyw Regal Raptor (E16463) udstedt 07-06-2007</option>
		<option value="TyS¤¤¤29455">BAOTIAN BT49QT-12 (E16465) udstedt 07-06-2007</option>
		<option value="TyS¤¤¤29494">BAOTIAN BT49QT-9 (E16464) udstedt 12-06-2007</option>
		<option value="TyS¤¤¤29506">Longjia - (E16469) udstedt 13-06-2007</option>
		<option value="TyS¤¤¤29540">Kymco Super 8 (E16472) udstedt 15-06-2007</option>
		<option value="TyS¤¤¤29662">Baotian BT49QT-9 (E16478) udstedt 28-06-2007</option>

	

         <option value="TyS¤¤¤29683">SYM Jet SportX (E16483) udstedt 02-07-2007</option>
		<option value="TyS¤¤¤29687">CSR BRAVER (E16485) udstedt 04-07-2007</option>
		<option value="TyS¤¤¤29689">CSR KNIGHT (E16486) udstedt 04-07-2007</option>

	

		<option value="TyS¤¤¤29691">Linxx 50cc (E16510) udstedt 17-08-2007</option>
		<option value="TyS¤¤¤30035">CPI Aragon (E15984) udstedt 06-08-2007</option>
		<option value="TyS¤¤¤30045">Kymco Super 8 (E16491) udstedt 07-08-2007</option>
		<option value="TyS¤¤¤30067">Aprilia SR 50 R (E16505) udstedt 09-08-2007</option>
		<option value="TyS¤¤¤30258">BAOTIAN BT49QT-9 (E16519) udstedt 28-08-2007</option>

	

		<option value="TyS¤¤¤30362">Yamaha XF50 (E16549) udstedt 21-09-2007</option>
         <option value="TyS¤¤¤30494">Oxygen - (E16546) udstedt 12-09-2007</option>
		<option value="TyS¤¤¤30495">EGO Cycle Helio (E15401) udstedt 15-05-2006</option>
		<option value="TyS¤¤¤30642">Baotian BT49QT-12-d30 (E16562) udstedt 25-09-2007</option>
		<option value="TyS¤¤¤30706">YAMAHA YN50M (E16564) udstedt 26-09-2007</option>
		<option value="TyS¤¤¤30738">TMS Offroad 50cc (E16568) udstedt 28-09-2007</option>
		<option value="TyS¤¤¤30739">TMS Classic 50cc (E16569) udstedt 28-09-2007</option>

	

         <option value="TyS¤¤¤30053">Huatian - (E16497) udstedt 07-08-2007</option>
		<option value="TyS¤¤¤30963">Baotian BT50QT-9 (E16615) udstedt 18-10-2007</option>
		<option value="TyS¤¤¤31043">TMS Retro (E16620) udstedt 17-10-2007</option>
		<option value="TyS¤¤¤31046">TMS Sprint (E16621) udstedt 17-10-2007</option>
         <option value="TyS¤¤¤31052">SYM Jet SportX (E16624) udstedt 18-10-2007</option>
		<option value="TyS¤¤¤31053">Batioan - (E16625) udstedt 18-10-2007</option>
         <option value="TyS¤¤¤31054">Batioan - (E16626) udstedt 18-10-2007</option>
		<option value="TyS¤¤¤31069">Peugeot Ludix Pro (E16631) udstedt 22-10-2007</option>

	

		<option value="TyS¤¤¤31263">Peugeot Ludix Elegance (E16676) udstedt 06-11-2007</option>
		<option value="TyS¤¤¤31265">TMS Z2 (E16677) udstedt 06-11-2007</option>
         <option value="TyS¤¤¤31266">TMS 10V (E16678) udstedt 06-11-2007</option>
		<option value="TyS¤¤¤31440">Derbi Senda (E16710) udstedt 16-11-2007</option>
		<option value="TyS¤¤¤31443">Derbi Senda (E16711) udstedt 16-11-2007</option>
		<option value="TyS¤¤¤31654">Aprilia Mojito 50 (E16747) udstedt 29-11-2007</option>
		<option value="TyS¤¤¤31661">BAOTIAN BT49QT-12 (E16748) udstedt 29-11-2007</option>

	
01-12-2007
		<option value="TyS¤¤¤31693">Norsjö Carrier Elec 2011A (E16754) udstedt 03-12-2007</option>
		<option value="TyS¤¤¤31694">PGO - (E15374) udstedt 17-10-2007</option>
		<option value="TyS¤¤¤31695">Batioan - (E15727) udstedt 24-08-2006</option>
		<option value="TyS¤¤¤31852">TMS Classic 50cc (E16792) udstedt 12-12-2007</option>
		<option value="TyS¤¤¤31964">Keeway f-act, matrix,RY8 &amp;9 (E16824) udstedt 20-12-2007</option>
		<option value="TyS¤¤¤31965">Keeway f-act, matrixRY8 &amp;9 (E16825) udstedt 20-12-2007</option>

	
01-01-2008


		<option value="TyS¤¤¤26855">TGB - (E15919) udstedt 31-10-2006</option>
		<option value="TyS¤¤¤31856">Baotian BT49QT-12-d30 (E16793) udstedt 24-01-2008</option>
		<option value="TyS¤¤¤31857">Baotian BT49QT-12-d45 (E16794) udstedt 24-01-2008</option>
		<option value="TyS¤¤¤32051">Giantco Stealth (E16843) udstedt 08-01-2008</option>
		<option value="TyS¤¤¤32052">Giantco Stealth (E16844) udstedt 08-01-2008</option>
		<option value="TyS¤¤¤32099">Baotian Texas (E16855) udstedt 09-01-2008</option>
		<option value="TyS¤¤¤32184">Baotian BT49QT-12-d30 (E16859) udstedt 16-01-2008</option>
		<option value="TyS¤¤¤32209">Baotian BTQT-9 (E16865) udstedt 18-01-2008</option>
		<option value="TyS¤¤¤32211">Baotian BT49QT-12d30 (E16867) udstedt 18-01-2008</option>
		<option value="TyS¤¤¤32212">Baotian BR49QT12d45 (E16868) udstedt 18-01-2008</option>
		<option value="TyS¤¤¤32239">Baotian - (E16871) udstedt 22-01-2008</option>
		<option value="TyS¤¤¤32240">Baotian - (E16875) udstedt 22-01-2008</option>
		<option value="TyS¤¤¤32243">Baotian - (E16872) udstedt 22-01-2008</option>
         <option value="TyS¤¤¤32244">BAOTIAN  (E16873) udstedt 22-01-2008</option>
		<option value="TyS¤¤¤32245">Baotian - (E16874) udstedt 22-01-2008</option>
		<option value="TyS¤¤¤32246">Baotian - (E16876) udstedt 22-01-2008</option>
		<option value="TyS¤¤¤32295">Baotian BT49QT-12-d30 (E16887) udstedt 25-01-2008</option>
		<option value="TyS¤¤¤32296">Baotian BT49QT-12-d45 (E16888) udstedt 25-01-2008</option>

	

		<option value="TyS¤¤¤32353">TGB 101R (E16891) udstedt 04-02-2008</option>
		<option value="TyS¤¤¤32366">TMS Z2 (E16893) udstedt 05-02-2008</option>
		<option value="TyS¤¤¤32380">TMS Retro (E16894) udstedt 05-02-2008</option>
		<option value="TyS¤¤¤32381">TMS Offroad 50cc (E16895) udstedt 05-02-2008</option>
		<option value="TyS¤¤¤32542">Kinroad - (E16968) udstedt 18-02-2008</option>
         <option value="TyS¤¤¤32563">Kinroad-xintian - (E16982) udstedt 22-02-2008</option>

	

		<option value="TyS¤¤¤31819">Baotian Rebel 30 (E16782) udstedt 11-12-2007</option>
		<option value="TyS¤¤¤31821">Baotian Rebel 45 (E16783) udstedt 11-12-2007</option>
		<option value="TyS¤¤¤31822">Baotian Retro 45 (E16784) udstedt 11-12-2007</option>
		<option value="TyS¤¤¤32767">Gilera Stalker Naked (E17005) udstedt 19-03-2008</option>
		<option value="TyS¤¤¤32867">Piaggio Storm (E17033) udstedt 26-03-2008</option>
		<option value="TyS¤¤¤32868">Piaggio Storm (E17034) udstedt 26-03-2008</option>
		<option value="TyS¤¤¤32869">Piaggio LX50 (E17035) udstedt 26-03-2008</option>
		<option value="TyS¤¤¤32883">Kinroad Little Fish (E17047) udstedt 28-03-2008</option>

	

		<option value="TyS¤¤¤1353">Beta Ark (A8147) udstedt 04-03-1997</option>
		<option value="TyS¤¤¤14070">Gilera Stalker (A8920) udstedt 22-01-1998</option>
		<option value="TyS¤¤¤14092">Piaggio Vespa ET2 (A8925) udstedt 26-01-1998</option>
		<option value="TyS¤¤¤14205">Gilera Runner 45 (A8459) udstedt 28-07-1997</option>
		<option value="TyS¤¤¤2031">Yamaha Neo's (A8258) udstedt 07-05-1997</option>
		<option value="TyS¤¤¤2252">Yamaha Aerox (A8719) udstedt 30-10-1997</option>
		<option value="TyS¤¤¤2451">Yamaha DT50R (A9084) udstedt 07-04-1998</option>
		<option value="TyS¤¤¤2488">Yamaha TZR50 (A9156) udstedt 14-05-1998</option>
		<option value="TyS¤¤¤2515">PGO PMX (A9194) udstedt 09-06-1998</option>
check om er tom		<option value="TyS¤¤¤2518">Piaggio NRG (A9207) udstedt 15-06-1998</option>
		<option value="TyS¤¤¤28247">SHINERAY - (E16170) udstedt 12-02-2007</option>
		<option value="TyS¤¤¤32210">Baotian BTQT-9 (E16866) udstedt 18-01-2008</option>
		<option value="TyS¤¤¤32953">Piaggio ZIP 4T (E17085) udstedt 09-04-2008</option>
		<option value="TyS¤¤¤32954">Piaggio FLY 45 4T (E17086) udstedt 09-04-2008</option>
		<option value="TyS¤¤¤33000">Yiben YB50QT-15 (E17107) udstedt 21-04-2008</option>
		<option value="TyS¤¤¤33001">Yiben WJM50QT-9A (E17109) udstedt 21-04-2008</option>
		<option value="TyS¤¤¤33002">Yiben YB50QT-3 (E17110) udstedt 21-04-2008</option>
		<option value="TyS¤¤¤33016">Luyuan PB803A (E17115) udstedt 23-04-2008</option>
		<option value="TyS¤¤¤33019">Piaggio NRG DD (E17116) udstedt 24-04-2008</option>
		<option value="TyS¤¤¤33025">Jonway 05T (E17118) udstedt 25-04-2008</option>
		<option value="TyS¤¤¤33026">Jonway 5T (E17119) udstedt 25-04-2008</option>
		<option value="TyS¤¤¤3610">Peugeot Vivacity50 (A9789) udstedt 25-03-1999</option>
         <option value="TyS¤¤¤3611">Cagiva Cucciolo (A9790) udstedt 26-03-1999</option>
		<option value="TyS¤¤¤3760">Yamaha WHY (A9843) udstedt 04-05-1999</option>
		<option value="TyS¤¤¤3834">Suzuki UX50 (A9865) udstedt 17-05-1999</option>
		<option value="TyS¤¤¤3915">Peugeot Elyséo (A9896) udstedt 31-05-1999</option>
		<option value="TyS¤¤¤4064">Yamaha CW50RS (A9941) udstedt 15-06-1999</option>
		<option value="TyS¤¤¤4116">Piaggio NRG (A9968) udstedt 23-06-1999</option>
         <option value="TyS¤¤¤4238">Hyosung SF50 (A9998) udstedt 16-06-1999</option>
		<option value="TyS¤¤¤4444">Benelli Pepe (A10085) udstedt 16-06-1999</option>
		<option value="TyS¤¤¤8301">PGO T-REX 50 (A9936) udstedt 14-06-1999</option>

	

		<option value="TyS¤¤¤33083">Luyuan LEV006 (E17122) udstedt 14-05-2008</option>
		<option value="TyS¤¤¤33084">Luyuan PB706 (E17123) udstedt 14-05-2008</option>
		<option value="TyS¤¤¤33085">Gilera Stalker Naked (E17124) udstedt 14-05-2008</option>
		<option value="TyS¤¤¤33133">SYM Fiddle II (E17134) udstedt 27-05-2008</option>

	

		<option value="TyS¤¤¤33190">SHIWEII SW0002 (E17143) udstedt 12-06-2008</option>
		<option value="TyS¤¤¤33195">Peugeot C-Clic (E17145) udstedt 12-06-2008</option>
		<option value="TyS¤¤¤33274">Baotian Texas (E17158) udstedt 26-06-2008</option>

	

		<option value="TyS¤¤¤10130">Aprilia Scarabeo 50 Ditech (E11586) udstedt 13-09-2001</option>
		<option value="TyS¤¤¤10326">Yamaha Slider (E11616) udstedt 03-10-2001</option>
         <option value="TyS¤¤¤10480">Daelim S-Five (E11650) udstedt 23-10-2001</option>
		<option value="TyS¤¤¤10690">CPI - (E11684) udstedt 20-11-2001</option>
		<option value="TyS¤¤¤10691">CPI - (E11690) udstedt 26-11-2001</option>
		<option value="TyS¤¤¤10694">PGO T-REX (E11691) udstedt 27-11-2001</option>
		<option value="TyS¤¤¤10698">PGO - (E11692) udstedt 27-11-2001</option>
		<option value="TyS¤¤¤10751">Trigger 50 (E11697) udstedt 29-11-2001</option>
         <option value="TyS¤¤¤10896">Kymco YUP50 (E11733) udstedt 21-12-2001</option>
		<option value="TyS¤¤¤11286">Kymco Fever ZX (E11808) udstedt 05-02-2002</option>
		<option value="TyS¤¤¤11759">Aprilia RS50 (E11944) udstedt 08-04-2002</option>
		<option value="TyS¤¤¤11871">Kymco People (E11957) udstedt 22-04-2002</option>
		<option value="TyS¤¤¤12132">PGO BUBU (E12015) udstedt 24-05-2002</option>
         <option value="TyS¤¤¤12135">Aprilia RX 50 (E12016) udstedt 27-05-2002</option>
		<option value="TyS¤¤¤12261">Derbi Atlantis (E12043) udstedt 06-06-2002</option>
         <option value="TyS¤¤¤12323">Sym Jet 50 (E12049) udstedt 11-06-2002</option>
		<option value="TyS¤¤¤12488">Yamaha SC50 (E12078) udstedt 26-06-2002</option>
         <option value="TyS¤¤¤12746">Hyosung - (E12156) udstedt 30-08-2002</option>
         <option value="TyS¤¤¤12747">Hyosung - (E12157) udstedt 30-08-2002</option>
		<option value="TyS¤¤¤12852">Handitrike - (E12140) udstedt 15-08-2002</option>
		<option value="TyS¤¤¤12856">Handitrike Comfort (E12141) udstedt 15-08-2002</option>
         <option value="TyS¤¤¤13033">Kymco Filly LX (E12163) udstedt 04-09-2002</option>
         <option value="TyS¤¤¤13065">Kymco Cobra (E12179) udstedt 10-09-2002</option>
         <option value="TyS¤¤¤13069">Kymco B&amp;W 50 (E12182) udstedt 10-09-2002</option>
		<option value="TyS¤¤¤13073">Kymco Super 9 (E12187) udstedt 12-09-2002</option>
		<option value="TyS¤¤¤13230">SWAP - (E12235) udstedt 02-10-2002</option>
         <option value="TyS¤¤¤13265">Branson BS49 (E12244) udstedt 07-10-2002</option>
		<option value="TyS¤¤¤13484">SOCA Flea 0.5 (E12286) udstedt 07-11-2002</option>
		<option value="TyS¤¤¤13498">Derbi GPR (E12290) udstedt 11-11-2002</option>
		<option value="TyS¤¤¤13532">Italjet Jetset 50 AC (E12301) udstedt 14-11-2002</option>
		<option value="TyS¤¤¤13536">Italjet Torpedo 50 AC (E12302) udstedt 14-11-2002</option>
		<option value="TyS¤¤¤13605">Suzuki - (E12316) udstedt 27-11-2002</option>
		<option value="TyS¤¤¤13818">PGO - (E12361) udstedt 06-01-2003</option>
		<option value="TyS¤¤¤14224">PGO - (E12485) udstedt 21-02-2003</option>
		<option value="TyS¤¤¤14296">Yamaha YQ50 (E12503) udstedt 04-03-2003</option>
		<option value="TyS¤¤¤1432">Beta Chrono (G68266) udstedt 02-05-1997</option>
		<option value="TyS¤¤¤14345">Italjet Dragster 50 LC (E12526) udstedt 10-03-2003</option>
		<option value="TyS¤¤¤14346">Italjet Formula 50 LC (E12527) udstedt 10-03-2003</option>
		<option value="TyS¤¤¤14350">PGO - (E12528) udstedt 10-03-2003</option>
		<option value="TyS¤¤¤14493">Peugeot Fox (E12583) udstedt 31-03-2003</option>
		<option value="TyS¤¤¤14551">Peugeot Speedfight (E12599) udstedt 16-04-2003</option>
		<option value="TyS¤¤¤14557">Aprilia Sonic (E12600) udstedt 22-04-2003</option>
		<option value="TyS¤¤¤14585">Peugeot Vivacity (E12611) udstedt 29-04-2003</option>
		<option value="TyS¤¤¤14588">Peugeot Trekker (E12612) udstedt 29-04-2003</option>
		<option value="TyS¤¤¤14622">Piaggio Liberty (E12631) udstedt 02-05-2003</option>
         <option value="TyS¤¤¤14759">Aprilia Rally (E12680) udstedt 21-05-2003</option>
		<option value="TyS¤¤¤14763">Aprilia Scarabeo 50 (E12681) udstedt 22-05-2003</option>
		<option value="TyS¤¤¤14854">Gilera Runner (E12703) udstedt 06-06-2003</option>
		<option value="TyS¤¤¤15280">Zongshen ZS50 Q-3 (E12812) udstedt 05-08-2003</option>
		<option value="TyS¤¤¤15380">Yamaha TZR 50 (E12857) udstedt 26-08-2003</option>
		<option value="TyS¤¤¤15856">Aprilia SR50LC (E13038) udstedt 07-11-2003</option>
		<option value="TyS¤¤¤16703">Zhongyu ZY50QT-7 (E13278) udstedt 09-03-2004</option>
		<option value="TyS¤¤¤16881">Piaggio Vespa ET2 (E13358) udstedt 25-03-2004</option>
		<option value="TyS¤¤¤16986">Sachs RC 505/MadAss (E13381) udstedt 21-04-2004</option>
		<option value="TyS¤¤¤16995">PGO Comet (E13383) udstedt 23-04-2004</option>
		<option value="TyS¤¤¤17117">Yamaha DT50 (E13418) udstedt 10-05-2004</option>
		<option value="TyS¤¤¤17170">EVT 4000E (E13424) udstedt 17-05-2004</option>
		<option value="TyS¤¤¤17171">EVT 168 (E13425) udstedt 17-05-2004</option>
		<option value="TyS¤¤¤17205">Kymco People 50 (E13437) udstedt 24-05-2004</option>
		<option value="TyS¤¤¤17210">Kymco ZX50 Fever (E13439) udstedt 25-05-2004</option>
		<option value="TyS¤¤¤17263">Gilera Stalker (E13447) udstedt 28-05-2004</option>
		<option value="TyS¤¤¤17587">Kymco Super 9 (E13539) udstedt 07-07-2004</option>
		<option value="TyS¤¤¤17751">Piaggio APE50 (E13584) udstedt 30-07-2004</option>
		<option value="TyS¤¤¤17873">Aprilia Habana (E13608) udstedt 16-08-2004</option>
		<option value="TyS¤¤¤17882">Derbi Senda (E13611) udstedt 17-08-2004</option>
		<option value="TyS¤¤¤18001">PGO - (E13653) udstedt 02-09-2004</option>
		<option value="TyS¤¤¤18151">Honda NPS 50 Zoomer (E13678) udstedt 23-09-2004</option>
		<option value="TyS¤¤¤18158">Yamaha YN50 (E13680) udstedt 24-09-2004</option>
		<option value="TyS¤¤¤19247">Baotian BT50QT-9 (E13944) udstedt 20-01-2005</option>
		<option value="TyS¤¤¤19424">Piaggio NRG (E13772) udstedt 16-11-2004</option>
		<option value="TyS¤¤¤19458">Aprilia SR50R (E13781) udstedt 18-11-2004</option>
		<option value="TyS¤¤¤19483">Piaggio FLY (E13794) udstedt 23-11-2004</option>
		<option value="TyS¤¤¤19968">Keeway Focus (E13942) udstedt 19-01-2005</option>
		<option value="TyS¤¤¤20032">Derbi GPR50 (E13949) udstedt 26-01-2005</option>
		<option value="TyS¤¤¤20046">Keeway Hurricane (E13954) udstedt 28-01-2005</option>
		<option value="TyS¤¤¤20098">Hero Majestic Vogue (E13968) udstedt 02-02-2005</option>
		<option value="TyS¤¤¤20183">Skyteam Dax 50 (E14003) udstedt 11-02-2005</option>
		<option value="TyS¤¤¤20261">Skyteam Monkey (E14029) udstedt 22-02-2005</option>
		<option value="TyS¤¤¤2030">Beta Chrono (G68267) udstedt 02-05-1997</option>
		<option value="TyS¤¤¤20304">Her Chee Baboon (E14036) udstedt 28-02-2005</option>
		<option value="TyS¤¤¤20308">Her Chee Gazelle (E14037) udstedt 28-02-2005</option>
		<option value="TyS¤¤¤2033">Beta Quadra (G68268) udstedt 12-05-1997</option>
		<option value="TyS¤¤¤20335">Piaggio Liberty (E14042) udstedt 03-03-2005</option>
		<option value="TyS¤¤¤20461">Hero Mejestic City Flex Deluxe (E14081) udstedt 08-09-2005</option>
		<option value="TyS¤¤¤20614">HM Baja 50 (E14116) udstedt 30-03-2005</option>
		<option value="TyS¤¤¤20699">Baotian - (E14145) udstedt 07-04-2005</option>
         <option value="TyS¤¤¤20784">SYM JET EURO X 50 (E14185) udstedt 18-04-2005</option>
		<option value="TyS¤¤¤20793">Derbi GP1 50 (E14188) udstedt 18-04-2005</option>
		<option value="TyS¤¤¤20808">Kinroad Windbell (E14195) udstedt 19-04-2005</option>
		<option value="TyS¤¤¤20826">CPI GTR (E14203) udstedt 26-04-2005</option>
		<option value="TyS¤¤¤20836">Yamaha SC50 (E14202) udstedt 25-04-2005</option>
		<option value="TyS¤¤¤20870">Kinroad Prince (E14216) udstedt 28-04-2005</option>
		<option value="TyS¤¤¤20896">Kinroad Windbell (E14230) udstedt 02-05-2005</option>
		<option value="TyS¤¤¤20899">Kinroad Fresh Wind (E14231) udstedt 02-05-2005</option>
		<option value="TyS¤¤¤20922">Piaggio Vespa LX 50 (E14235) udstedt 02-05-2005</option>
		<option value="TyS¤¤¤20998">Kinroad Prince (E14257) udstedt 10-05-2005</option>
		<option value="TyS¤¤¤21046">Qingqi - (E14271) udstedt 13-05-2005</option>
		<option value="TyS¤¤¤21051">Kinroad Windbell (E14273) udstedt 13-05-2005</option>
		<option value="TyS¤¤¤21052">Keeway Matrix (E14274) udstedt 17-05-2005</option>
		<option value="TyS¤¤¤21200">Kymco Agility (E14297) udstedt 26-05-2005</option>
		<option value="TyS¤¤¤21429">Gilera - (E14348) udstedt 22-06-2005</option>
		<option value="TyS¤¤¤21473">Kinroad Prince (E14357) udstedt 28-06-2005</option>
		<option value="TyS¤¤¤23913">Kinroad Prince (E14233) udstedt 02-05-2005</option>
		<option value="TyS¤¤¤33293">SYM Orbit 50 (E16927) udstedt 02-07-2008</option>
		<option value="TyS¤¤¤33294">SYM Orbit 50 (E17163) udstedt 02-07-2008</option>
		<option value="TyS¤¤¤33300">NICOM - (E17166) udstedt 03-07-2008</option>
		<option value="TyS¤¤¤33318">YIBEN YB50QT (E17190) udstedt 22-07-2008</option>
		<option value="TyS¤¤¤33319">YIBEN YB50QT (E17191) udstedt 22-07-2008</option>
		<option value="TyS¤¤¤33320">YIBEN YB50QT (E17192) udstedt 22-07-2008</option>
		<option value="TyS¤¤¤33337">BAOTIAN BT49QT-12 (E16488) udstedt 26-09-2007</option>
		<option value="TyS¤¤¤33362">Skyteam Dax50 (E17173) udstedt 17-07-2008</option>
		<option value="TyS¤¤¤33389">AVANTI - (E17187) udstedt 21-07-2008</option>
		<option value="TyS¤¤¤33390">Sachs MadAss (E17188) udstedt 21-07-2008</option>
		<option value="TyS¤¤¤4532">She Lung - (E10119) udstedt 06-09-1999</option>
         <option value="TyS¤¤¤4571">Di Blasi - (E10124) udstedt 09-09-1999</option>
		<option value="TyS¤¤¤4975">Derbi Atlantis (E10282) udstedt 10-11-1999</option>
		<option value="TyS¤¤¤5042">Secma Fun Tech (E9620) udstedt 11-01-1999</option>
		<option value="TyS¤¤¤5928">Suzuki UF50Z (E10497) udstedt 23-03-2000</option>
		<option value="TyS¤¤¤5930">Derbi Senda R (E10501) udstedt 24-03-2000</option>
		<option value="TyS¤¤¤5934">Aprilia SR50AC (E10498) udstedt 23-03-2000</option>
		<option value="TyS¤¤¤6217">Secma Fun elec (E10567) udstedt 01-05-2000</option>
         <option value="TyS¤¤¤6334">Siamoto Birdie 50 (E9937) udstedt 15-06-1999</option>
         <option value="TyS¤¤¤6346">Chunlan Starway (E10592) udstedt 16-05-2000</option>
		<option value="TyS¤¤¤6576">Piaggio New Zip (E10648) udstedt 19-06-2000</option>
		<option value="TyS¤¤¤6731">Gilera DNA (E10681) udstedt 06-07-2000</option>
		<option value="TyS¤¤¤6777">CPI Hussar (E10698) udstedt 12-07-2000</option>
		<option value="TyS¤¤¤7059">Jincheng JC50Q-8 (E10566) udstedt 28-04-2000</option>
		<option value="TyS¤¤¤7378">Jincheng JC50Q-7 (E10927) udstedt 10-10-2000</option>
		<option value="TyS¤¤¤7715">Aprilia Habana (E9914) udstedt 08-06-1999</option>
		<option value="TyS¤¤¤7736">Aprilia SR50LC (E10504) udstedt 24-03-2000</option>
		<option value="TyS¤¤¤7913">Yamaha YN50 (E11135) udstedt 13-12-2000</option>
		<option value="TyS¤¤¤8167">Adly Moto - (E11199) udstedt 19-01-2001</option>
		<option value="TyS¤¤¤8168">Her Chee - (E10766) udstedt 14-08-2000</option>
		<option value="TyS¤¤¤8169">Adly Moto - (E11200) udstedt 19-01-2001</option>
		<option value="TyS¤¤¤8170">Her Chee - (E10736) udstedt 26-07-2000</option>
		<option value="TyS¤¤¤8181">Derbi Senda R (E10680) udstedt 05-07-2000</option>
		<option value="TyS¤¤¤8575">TGB - (E11269) udstedt 13-03-2001</option>
		<option value="TyS¤¤¤8685">Tugger 1D (E11284) udstedt 27-03-2001</option>
		<option value="TyS¤¤¤8692">Tugger 1B (E11285) udstedt 27-03-2001</option>
		<option value="TyS¤¤¤8695">Tugger 1A (E11286) udstedt 27-03-2001</option>
		<option value="TyS¤¤¤8964">Piaggio Typhoon (E11350) udstedt 02-05-2001</option>
		<option value="TyS¤¤¤9495">Jincheng JC50Q-5 (E11445) udstedt 25-06-2001</option>
		<option value="TyS¤¤¤9523">Peugeot Looxor (E11465) udstedt 13-07-2001</option>
		<option value="TyS¤¤¤9636">Gilera ICE (E11496) udstedt 31-07-2001</option>
         <option value="TyS¤¤¤9715">Simson Albatros 50 (E11485) udstedt 25-07-2001</option>
		<option value="TyS¤¤¤9727">Derbi GP1 (E11490) udstedt 26-07-2001</option>

	

		<option value="TyS¤¤¤33455">Aprilia Sportcity 50 (E17202) udstedt 19-08-2008</option>
		<option value="TyS¤¤¤33465">Tisong city (E17206) udstedt 20-08-2008</option>

	

		<option value="TyS¤¤¤33363">Skyteam Dax50 (E17174) udstedt 17-07-2008</option>
		<option value="TyS¤¤¤33564">Futong FT50QT-3 (E17220) udstedt 18-09-2008</option>

	

         <option value="TyS¤¤¤33690">Aprilia - (E16301) udstedt 29-03-2007</option>
		<option value="TyS¤¤¤33730">Rieju Pacific 50 (E17266) udstedt 29-10-2008</option>
		<option value="TyS¤¤¤33731">Rieju RS2 (E17267) udstedt 29-10-2008</option>
		<option value="TyS¤¤¤33742">Giantco Spartan (E17270) udstedt 23-10-2008</option>
		<option value="TyS¤¤¤33743">Giantco Spartan (E17271) udstedt 29-10-2008</option>
		<option value="TyS¤¤¤33778">Baotian BT49QT-12-d30 (E17246) udstedt 30-10-2008</option>

	

		<option value="TyS¤¤¤33885">TMS Offroad 50cc (E17316) udstedt 13-11-2008</option>
		<option value="TyS¤¤¤33886">TMS Classic 50cc (E17317) udstedt 13-11-2008</option>
		<option value="TyS¤¤¤33902">TMS Retro 50cc (E17324) udstedt 18-11-2008</option>


		<option value="TyS¤¤¤34133">Yamaha YN50F (E17432) udstedt 19-12-2008</option>

		
31-01-2008
29-02-2008
31-03-2008
30-04-2008
31-05-2008
30-06-2008
31-07-2008
31-08-2008
30-09-2008
31-10-2008
30-11-2008
31-12-2008

31-01-2009


		<option value="TyS¤¤¤34217">Aprilia Sportcity 50 4t (E17477) udstedt 13-01-2009</option>
		<option value="TyS¤¤¤34322">TMS Classic 50cc (E17516) udstedt 27-01-2009</option>

	
28-02-2009
		<option value="TyS¤¤¤1343">Hero Gizmo (S7888) udstedt 17-02-1997</option>
		<option value="TyS¤¤¤1373">Aprilia SR50 (S8162) udstedt 05-03-1997</option>
		<option value="TyS¤¤¤1375">Aprilia SR50 (S8163) udstedt 06-03-1997</option>
		<option value="TyS¤¤¤13799">Aprilia Scarabeo (S8999) udstedt 24-02-1998</option>
         <option value="TyS¤¤¤13802">Aprilia Rally LC (S9133) udstedt 06-05-1998</option>
         <option value="TyS¤¤¤13803">Aprilia Area 51 (S9265) udstedt 08-07-1998</option>
		<option value="TyS¤¤¤1418">Peugeot Speedfight (S8190) udstedt 19-03-1997</option>
		<option value="TyS¤¤¤1419">Peugeot Speedfight (S8191) udstedt 19-03-1997</option>
		<option value="TyS¤¤¤14203">Piaggio NRG (S8200) udstedt 22-05-1997</option>
         <option value="TyS¤¤¤1421">Baoxin TWS Scooty (S8194) udstedt 20-03-1997</option>
         <option value="TyS¤¤¤2029">SYM Super Fancy (S8171) udstedt 01-05-1997</option>
		<option value="TyS¤¤¤2038">Suzuki - (S8273) udstedt 21-05-1997</option>
         <option value="TyS¤¤¤2056">Sanyang Sym Jet 50 (S8172) udstedt 29-05-1997</option>
		<option value="TyS¤¤¤2097">Malaguti F 10 (S8260) udstedt 06-06-1997</option>
         <option value="TyS¤¤¤2123">Hyosung SB-50 (S8235) udstedt 25-06-1997</option>
		<option value="TyS¤¤¤2198">Peugeot Scoot'Elec (S8514) udstedt 26-08-1997</option>
		<option value="TyS¤¤¤2274">TGB Akros (S8467) udstedt 11-11-1997</option>
		<option value="TyS¤¤¤2374">Aprilia Sonic (S8964) udstedt 20-02-1998</option>
		<option value="TyS¤¤¤2398">Derbi GPR50R (S9007) udstedt 27-02-1998</option>
		<option value="TyS¤¤¤2426">TGB 101S (S9040) udstedt 16-03-1998</option>
		<option value="TyS¤¤¤2435">Aprilia RS 50 (S9056) udstedt 18-03-1998</option>
		<option value="TyS¤¤¤2439">Peugeot - (S9066) udstedt 01-04-1998</option>
		<option value="TyS¤¤¤2461">Italjet Dragster (S9089) udstedt 30-04-1998</option>
		<option value="TyS¤¤¤2507">Italjet Torpedo (S9288) udstedt 28-07-1998</option>
		<option value="TyS¤¤¤2510">Kymco K12 (S8627) udstedt 17-10-1997</option>
		<option value="TyS¤¤¤2560">Hero Winner 50 (S9286) udstedt 27-07-1998</option>
		<option value="TyS¤¤¤2671">Benelli - (S9356) udstedt 27-08-1998</option>
		<option value="TyS¤¤¤2690">Italjet Formula 50 (S9065) udstedt 31-03-1998</option>
         <option value="TyS¤¤¤2760">Sym Jungle50 (S9406) udstedt 26-10-1998</option>
		<option value="TyS¤¤¤3102">Malaguti Phantom F12 (S9786) udstedt 23-03-1999</option>
         <option value="TyS¤¤¤3236">Chun Lan - (S9891) udstedt 10-06-1999</option>
		<option value="TyS¤¤¤3237">PGO Big Max (S9613) udstedt 21-04-1999</option>
		<option value="TyS¤¤¤34359">Benda Scoot (E17548) udstedt 05-02-2009</option>
		<option value="TyS¤¤¤34361">Baotian Retro (E17549) udstedt 05-02-2009</option>
		<option value="TyS¤¤¤34364">Baotian Retro (E17550) udstedt 05-02-2009</option>
		<option value="TyS¤¤¤34365">Baotian Rebel (E17551) udstedt 05-02-2009</option>
		<option value="TyS¤¤¤34366">Baotian Rebel (E17552) udstedt 05-02-2009</option>
		<option value="TyS¤¤¤34367">Baotian Rebel (E17553) udstedt 05-02-2009</option>
		<option value="TyS¤¤¤34368">Baotian Rebel (E17554) udstedt 11-02-2009</option>
		<option value="TyS¤¤¤34378">Piaggio Liberty (E17560) udstedt 11-02-2009</option>
		<option value="TyS¤¤¤34379">Piaggio Liberty (E17561) udstedt 11-02-2009</option>
		<option value="TyS¤¤¤34384">PGO BF50 (E17563) udstedt 16-02-2009</option>
		<option value="TyS¤¤¤34385">PGO BF50 (E17564) udstedt 16-02-2009</option>
		<option value="TyS¤¤¤3530">Aprilia RS 50 (S9725) udstedt 19-02-1999</option>
         <option value="TyS¤¤¤3591">Aprilia Classic 50 (S9712) udstedt 22-03-1999</option>
		<option value="TyS¤¤¤3595">Malaguti Firefox F15 (S9787) udstedt 24-03-1999</option>
		<option value="TyS¤¤¤3778">Derbi Predator (S9427) udstedt 28-09-1998</option>
		<option value="TyS¤¤¤3798">Adly Jet 50 (S9859) udstedt 20-05-1999</option>
		<option value="TyS¤¤¤4190">Atala Hacker (S9011) udstedt 06-03-1998</option>
         <option value="TyS¤¤¤4226">Motorhispania Furia (S10373) udstedt 07-03-2000</option>
		<option value="TyS¤¤¤4318">Malaguti Phantom F12 (S9804) udstedt 14-07-1999</option>
		<option value="TyS¤¤¤4402">CPI Action (S9800) udstedt 08-09-1999</option>
		<option value="TyS¤¤¤4435">Piaggio APE50 (S10068) udstedt 16-06-1999</option>
		<option value="TyS¤¤¤4472">CPI Club (S9799) udstedt 08-09-1999</option>
		<option value="TyS¤¤¤4513">Atala - (S10104) udstedt 02-09-1999</option>
		<option value="TyS¤¤¤5248">Derbi Paddock (S8221) udstedt 30-04-1997</option>
		<option value="TyS¤¤¤5249">Derbi Hunter (S8133) udstedt 25-02-1997</option>
		<option value="TyS¤¤¤9214">Suzuki - (S9899) udstedt 02-06-1999</option>

	
31-03-2009
		<option value="TyS¤¤¤34333">Giantco Lambros (E17555) udstedt 10-03-2009</option>
		<option value="TyS¤¤¤34334">Giantco Lambros (E17556) udstedt 10-03-2009</option>
		<option value="TyS¤¤¤34539">Keeway F-Act Nkd (E17596) udstedt 19-03-2009</option>
		<option value="TyS¤¤¤34563">Shanghai Jmstar JSD50QT-13 (E17603) udstedt 27-03-2009</option>
		<option value="TyS¤¤¤34564">Shenke GY (E17604) udstedt 27-03-2009</option>
		<option value="TyS¤¤¤34565">Jonway AA (E17605) udstedt 27-03-2009</option>
		<option value="TyS¤¤¤34566">Jonway LY (E17606) udstedt 27-03-2009</option>

	
30-04-2009
         <option value="TyS¤¤¤34561">Macal PJ 50 (E17611) udstedt 01-04-2009</option>
		<option value="TyS¤¤¤34577">Baotian BT49QT (E17616) udstedt 01-04-2009</option>
		<option value="TyS¤¤¤34578">Baotian BT49QT (E17617) udstedt 01-04-2009</option>
		<option value="TyS¤¤¤34602">ZHONGNENG ZN50QT-E (E17622) udstedt 15-04-2009</option>
		<option value="TyS¤¤¤34603">ZHONGNENG ZN50QT-E (E17623) udstedt 15-04-2009</option>
		<option value="TyS¤¤¤34606">SYM Fiddle II (E17625) udstedt 16-04-2009</option>
		<option value="TyS¤¤¤34619">ZHONGNENG - (E17633) udstedt 27-04-2009</option>
		<option value="TyS¤¤¤34621">Zhongneng - (E17635) udstedt 28-04-2009</option>

	
31-05-2009
		<option value="TyS¤¤¤34634">Skyteam ST50-11 (E17638) udstedt 11-05-2009</option>
         <option value="TyS¤¤¤34648">Aprilia Sportcity 50 (E17641) udstedt 18-05-2009</option>
		<option value="TyS¤¤¤34649">Reiju SMX50 (E17642) udstedt 18-05-2009</option>
		<option value="TyS¤¤¤34654">Kinroad Chopper 30 (E17644) udstedt 20-05-2009</option>
		<option value="TyS¤¤¤34659">Yamasaki Bike 30 (E17646) udstedt 20-05-2009</option>
		<option value="TyS¤¤¤34662">Yamasaki Bike 45 (E17647) udstedt 20-05-2009</option>
		<option value="TyS¤¤¤34675">YAMASAKI - (E17652) udstedt 28-05-2009</option>
		<option value="TyS¤¤¤34676">YAMASAKI - (E17653) udstedt 28-05-2009</option>
		<option selected="selected" value="TyS¤¤¤34678">Seeyes - (E17654) udstedt 28-05-2009</option>

	
30-06-2009
         <option value="TyS¤¤¤34182">TMS Motard 50cc (E17698) udstedt 29-06-2009</option>
		<option value="TyS¤¤¤34751">QINGQI RMC-E 50 Racing Rep. (E17684) udstedt 17-06-2009</option>
		<option value="TyS¤¤¤34754">Kymco Super 8 (E17686) udstedt 19-06-2009</option>
		<option value="TyS¤¤¤34755">Kymco Super 8 (E17687) udstedt 19-06-2009</option>
		<option value="TyS¤¤¤34756">TMS F2 50cc (E17688) udstedt 19-06-2009</option>

	
31-07-2009
		<option value="TyS¤¤¤2494">Honda SZX50S (A9166) udstedt 26-05-1998</option>
		<option value="TyS¤¤¤34823">Kymco Vitality (E17725) udstedt 13-07-2009</option>

	
31-08-2009
		<option value="TyS¤¤¤28504">Rieju RS2 Matrix (E15348) udstedt 11-10-2007</option>
		<option value="TyS¤¤¤34913">HM CRE BAJA (E17766) udstedt 18-08-2009</option>
		<option value="TyS¤¤¤34914">AGM V641 (E17767) udstedt 19-08-2009</option>
		<option value="TyS¤¤¤34915">AGM V641 (E17768) udstedt 19-08-2009</option>
		<option value="TyS¤¤¤34948">TMS Retro 50cc (E17786) udstedt 28-08-2009</option>

	
30-09-2009
		<option value="TyS¤¤¤34896">Seeyes - (E17754) udstedt 10-08-2009</option>
		<option value="TyS¤¤¤34983">Xinling Txd500a/800a (E17808) udstedt 11-09-2009</option>
		<option value="TyS¤¤¤34986">LONGJIA Grido (E17810) udstedt 14-09-2009</option>

	
31-10-2009
		<option value="TyS¤¤¤35023">PGO Big Max (E15827) udstedt 06-10-2006</option>
		<option value="TyS¤¤¤35024">PGO - (E15619) udstedt 05-07-2006</option>

	
30-11-2009
		<option value="TyS¤¤¤35049">Rieju RS2 (E17847) udstedt 03-11-2009</option>
		<option value="TyS¤¤¤35093">E-Ton - (E17881) udstedt 12-11-2009</option>

	
31-12-2009
		<option value="TyS¤¤¤35132">Giantco e-Buddy (E17906) udstedt 14-12-2009</option>
		<option value="TyS¤¤¤35133">Giantco e-Buddy (E17907) udstedt 14-12-2009</option>

	
01-01-2010

31-01-2010
		<option value="TyS¤¤¤34798">PGO - (E17719) udstedt 30-06-2009</option>
		<option value="TyS¤¤¤35237">SYM Cello 50 (E17972) udstedt 22-01-2010</option>
		<option value="TyS¤¤¤35238">SYM Cello 50 (E17973) udstedt 22-01-2010</option>
		<option value="TyS¤¤¤35239">SYM Symphony 50 (E17974) udstedt 22-01-2010</option>

	
28-02-2010
		<option value="TyS¤¤¤35252">SYM Orbit II 50S (E17981) udstedt 02-02-2010</option>
		<option value="TyS¤¤¤35253">SYM Orbit II 50S (E17982) udstedt 02-02-2010</option>
		<option value="TyS¤¤¤35254">SYM Jet 4 (E17983) udstedt 02-02-2010</option>
		<option value="TyS¤¤¤35255">SYM Jet 4 (E17984) udstedt 02-02-2010</option>
		<option value="TyS¤¤¤35278">TMS S3 50cc (E18000) udstedt 04-02-2010</option>
		<option value="TyS¤¤¤35283">TMS Retro 50cc (E18006) udstedt 05-02-2010</option>
		<option value="TyS¤¤¤35285">Kymco Vitality (E18007) udstedt 16-02-2010</option>
		<option value="TyS¤¤¤35308">VARG Nora (E17839) udstedt 30-10-2009</option>
		<option value="TyS¤¤¤35309">VARG Bergen (E17838) udstedt 30-10-2009</option>
		<option value="TyS¤¤¤35310">VARG Oslo (E17837) udstedt 30-10-2009</option>
		<option value="TyS¤¤¤35311">VARG Bergen (E18027) udstedt 23-02-2010</option>
		<option value="TyS¤¤¤35312">VARG Oslo (E18028) udstedt 23-02-2010</option>

	
31-03-2010
		<option value="TyS¤¤¤26853">Giantco Venus (E15917) udstedt 31-10-2006</option>
		<option value="TyS¤¤¤26854">Giantco Venus (E15918) udstedt 31-10-2006</option>
		<option value="TyS¤¤¤30036">CPI Aragon (E15983) udstedt 06-08-2007</option>
		<option value="TyS¤¤¤34951">Ebretti EB-1500-TK (E17788) udstedt 01-09-2009</option>
		<option value="TyS¤¤¤34956">Ebretti EB-1500-TK (E17789) udstedt 01-09-2009</option>
		<option value="TyS¤¤¤35110">Giantco g-Buddy (E17894) udstedt 26-11-2009</option>
		<option value="TyS¤¤¤35111">Giantco g-Buddy (E17895) udstedt 26-11-2009</option>
		<option value="TyS¤¤¤35121">Shiweii - (E17898) udstedt 03-12-2009</option>
		<option value="TyS¤¤¤35358">Generic XOR 2 (E18067) udstedt 08-03-2010</option>
		<option value="TyS¤¤¤35359">Generic XOR 2 (E18068) udstedt 08-03-2010</option>
		<option value="TyS¤¤¤35360">Generic IDEO (E18069) udstedt 08-03-2010</option>
		<option value="TyS¤¤¤35361">Generic IDEO (E18070) udstedt 08-03-2010</option>
		<option value="TyS¤¤¤35362">Generic Trigger 50 (E18071) udstedt 08-03-2010</option>
		<option value="TyS¤¤¤35363">Generic RACE (E18072) udstedt 08-03-2010</option>
		<option value="TyS¤¤¤35364">Generic RACE (E18073) udstedt 08-03-2010</option>
		<option value="TyS¤¤¤35366">Giantco G10 (E18074) udstedt 10-03-2010</option>
		<option value="TyS¤¤¤35367">Giantco G10 (E18075) udstedt 10-03-2010</option>
		<option value="TyS¤¤¤35368">Giantco Venus II (E18076) udstedt 10-03-2010</option>
		<option value="TyS¤¤¤35369">Giantco Venus II (E18077) udstedt 10-03-2010</option>
		<option value="TyS¤¤¤35380">Piaggio Vespa LX 50 (E15968) udstedt 23-11-2006</option>
		<option value="TyS¤¤¤35400">Aprilia Habana (E18082) udstedt 17-03-2010</option>
		<option value="TyS¤¤¤35405">Giantco Sprint SE (E14667) udstedt 21-11-2005</option>
		<option value="TyS¤¤¤35406">Giantco Sprint SE (E15465) udstedt 01-06-2006</option>
		<option value="TyS¤¤¤35423">CPI Oliver City (E18096) udstedt 24-03-2010</option>
		<option value="TyS¤¤¤35429">CPI Oliver City (E15371) udstedt 11-05-2006</option>
		<option value="TyS¤¤¤35430">Xmotos - (E18100) udstedt 26-03-2010</option>

	
30-04-2010
		<option value="TyS¤¤¤35467">Gilera Runner (E18120) udstedt 12-04-2010</option>
		<option value="TyS¤¤¤35481">Aprilia SR50R (E18134) udstedt 14-04-2010</option>
         <option value="TyS¤¤¤35514">Yamasaki - (E18164) udstedt 21-04-2010</option>
         <option value="TyS¤¤¤35515">Yamasaki - (E18163) udstedt 20-04-2010</option>
		<option value="TyS¤¤¤35517">LONGJIA Firefly (E18165) udstedt 20-04-2010</option>
         <option value="TyS¤¤¤35537">Baotian Retro (E18182) udstedt 23-04-2010</option>
		<option value="TyS¤¤¤35550">E-TON 25 (E18191) udstedt 27-04-2010</option>
		<option value="TyS¤¤¤35551">E-TON 30 (E18192) udstedt 27-04-2010</option>

	
31-05-2010
         <option value="TyS¤¤¤35575">AGM - (E18202) udstedt 17-05-2010</option>
         <option value="TyS¤¤¤35576">AGM - (E18203) udstedt 17-05-2010</option>
		<option value="TyS¤¤¤35585">BAOTIAN - (E17318) udstedt 14-11-2008</option>
         <option value="TyS¤¤¤35587">BAOTIAN - (E16717) udstedt 19-11-2007</option>
		<option value="TyS¤¤¤35593">Baotian Baotian BT49QT-9 (E18215) udstedt 25-05-2010</option>
		<option value="TyS¤¤¤35594">Jonway AA (E18216) udstedt 25-05-2010</option>
		<option value="TyS¤¤¤35595">Jonway LN (E18217) udstedt 25-05-2010</option>
		<option value="TyS¤¤¤35596">Jonway AA (E18218) udstedt 25-05-2010</option>
		<option value="TyS¤¤¤35619">Piaggio LX (E18235) udstedt 28-05-2010</option>
		<option value="TyS¤¤¤35621">Gilera Stalker (E18237) udstedt 28-05-2010</option>
		<option value="TyS¤¤¤35623">Piaggio Zip (E18239) udstedt 28-05-2010</option>
		<option value="TyS¤¤¤35624">Aprilia Mojito (E18240) udstedt 28-05-2010</option>
		<option value="TyS¤¤¤35626">Derbi Senda (E18242) udstedt 28-05-2010</option>
		<option value="TyS¤¤¤35628">Piaggio Liberty (E18244) udstedt 28-05-2010</option>
         <option value="TyS¤¤¤35629">Aprilia - (E18245) udstedt 28-05-2010</option>
		<option value="TyS¤¤¤35631">Derbi Senda (E18246) udstedt 28-05-2010</option>
		<option value="TyS¤¤¤35632">Aprilia RS50 (E18247) udstedt 28-05-2010</option>
		<option value="TyS¤¤¤35635">Piaggio Liberty (E18250) udstedt 28-05-2010</option>

	
30-06-2010
		<option value="TyS¤¤¤14580">Peugeot Elystar 50 (E12607) udstedt 28-04-2003</option>
		<option value="TyS¤¤¤14582">Peugeot Jet-Force (E12608) udstedt 28-04-2003</option>
		<option value="TyS¤¤¤24917">Gilera Stalker (E15357) udstedt 10-05-2006</option>
		<option value="TyS¤¤¤25247">Peugeot TKR (E15481) udstedt 02-06-2006</option>
		<option value="TyS¤¤¤33009">Tomos Classic (E17111) udstedt 22-04-2008</option>
		<option value="TyS¤¤¤33508">Peugeot Viva 3 (E17212) udstedt 03-09-2008</option>
		<option value="TyS¤¤¤33729">Gilera Stalker (E15357) udstedt 10-05-2006</option>
		<option value="TyS¤¤¤34135">Peugeot Viva 3 (E17433) udstedt 19-12-2008</option>
		<option value="TyS¤¤¤34514">Peugeot V-Clic (E17586) udstedt 10-03-2009</option>
		<option value="TyS¤¤¤34644">Peugeot Speedfight 3 (E17639) udstedt 14-05-2009</option>
		<option value="TyS¤¤¤34645">Peugeot Speedfight 3 (E17640) udstedt 14-05-2009</option>
		<option value="TyS¤¤¤34695">Peugeot Ludix Pro (E17660) udstedt 02-06-2009</option>
		<option value="TyS¤¤¤35240">SYM Symphony 50 (E17975) udstedt 22-01-2010</option>
		<option value="TyS¤¤¤35468">Peugeot V-Clic (E18121) udstedt 12-04-2010</option>
		<option value="TyS¤¤¤35618">Piaggio ZIP (E18234) udstedt 28-05-2010</option>
		<option value="TyS¤¤¤35627">Piaggio Fly (E18243) udstedt 10-06-2010</option>
		<option value="TyS¤¤¤35634">Piaggio Fly (E18249) udstedt 28-05-2010</option>
		<option value="TyS¤¤¤35653">Busetto ZQTD-388-2 (E18266) udstedt 02-06-2010</option>
		<option value="TyS¤¤¤35654">Busetto ZQTD-388-2 (E18267) udstedt 02-06-2010</option>
		<option value="TyS¤¤¤35655">Lynx ZQTD-389 (E18268) udstedt 02-06-2010</option>
		<option value="TyS¤¤¤35656">Lynx ZQTD-690 (E18269) udstedt 02-06-2010</option>
		<option value="TyS¤¤¤35657">NICOM - (E18270) udstedt 02-06-2010</option>
         <option value="TyS¤¤¤35687">TMS S3 50cc 45 (E18293) udstedt 09-06-2010</option>
         <option value="TyS¤¤¤35689">Kreidler RMC-H-50 Galactia (E17764) udstedt 13-08-2009</option>
         <option value="TyS¤¤¤35690">Kreidler Jigger50 (E17785) udstedt 28-08-2009</option>
         <option value="TyS¤¤¤35691">Kreidler RMC-E-50 Hiker Sport (E17741) udstedt 16-07-2009</option>
         <option value="TyS¤¤¤35692">Kreidler RMC-H-50 Galactia (E17763) udstedt 13-08-2009</option>
         <option value="TyS¤¤¤35693">Kreidler Jigger 50 (E17784) udstedt 28-08-2009</option>
         <option value="TyS¤¤¤35694">Kreidler RMC-E-50 Hiker (E17783) udstedt 28-08-2009</option>
		<option value="TyS¤¤¤35695">Kreidler Hiker Amaze (E18065) udstedt 05-03-2010</option>
?hmm kan ikke hente?         <option value="TyS¤¤¤35696">Kreidler RMC-E-50 Hiker (E17782) udstedt 28-08-2009</option>
         <option value="TyS¤¤¤35697">Kreidler RMC-E-50 Hiker Sport (E17683) udstedt 17-06-2009</option>
		<option value="TyS¤¤¤35698">Qingqi RMC-G50 El Ninjo (E17682) udstedt 17-06-2009</option>
		<option value="TyS¤¤¤35703">Hooper Fourious (E18151) udstedt 16-04-2010</option>
		<option value="TyS¤¤¤35704">Hooper Fourious 30 (E18294) udstedt 10-06-2010</option>
               <option value="TyS¤¤¤35707">Kalkhoff Pro Connect S Herre (E18299) udstedt 29-06-2010</option>
               <option value="TyS¤¤¤35708">Kalkhoff Pro Connect S Dame (E18300) udstedt 29-06-2010</option>
               <option value="TyS¤¤¤35709">Kalkhoff Pro Connect S Dame (E18301) udstedt 29-06-2010</option>
               <option value="TyS¤¤¤35710">Kalkhoff Pro Connect S Herre (E18302) udstedt 29-06-2010</option>
		<option value="TyS¤¤¤35723">Aprilia Mojito (E18297) udstedt 28-06-2010</option>

	
31-07-2010
		<option value="TyS¤¤¤35731">HOOPER ONE 30 (E18109) udstedt 09-04-2010</option>
		<option value="TyS¤¤¤35732">HOOPER ONE 45 (E18110) udstedt 09-04-2010</option>
		<option value="TyS¤¤¤35738">HOOPER LEO (E18139) udstedt 15-04-2010</option>
		<option value="TyS¤¤¤35739">HOOPER LEO (E18140) udstedt 15-04-2010</option>
		<option value="TyS¤¤¤35816">YADEA EM05 (E18355) udstedt 12-07-2010</option>
		<option value="TyS¤¤¤35828">Keeway Hurricane (E18367) udstedt 14-07-2010</option>
		<option value="TyS¤¤¤35829">Yamaha DT50 (E18368) udstedt 14-07-2010</option>
		<option value="TyS¤¤¤35830">XIAOFEILU L1e (E18375) udstedt 19-07-2010</option>
		<option value="TyS¤¤¤35892">Peugeot V-Clic (E18403) udstedt 28-07-2010</option>
		<option value="TyS¤¤¤35893">Peugeot V-Clic (E18404) udstedt 28-07-2010</option>

	
31-08-2010
		<option value="TyS¤¤¤35633">Aprilia SR (E18248) udstedt 28-05-2010</option>

	
30-09-2010
         <option value="TyS¤¤¤35625">Aprilia - (E18241) udstedt 28-05-2010</option>
		<option value="TyS¤¤¤35980">Gilera - (E15356) udstedt 10-05-2006</option>
		<option value="TyS¤¤¤36067">Rieju RS3 (E18545) udstedt 22-09-2010</option>
		<option value="TyS¤¤¤36070">Benmal LB-852 (E18548) udstedt 22-09-2010</option>

	
31-10-2010
   tom
30-11-2010
   tom
31-12-2010
   tom



01-01-2011

31-01-2011
		<option value="TyS¤¤¤36429">XINGYUE DM82 (E18870) udstedt 17-01-2011</option>

	
28-02-2011
		<option value="TyS¤¤¤36485">SYM Symphony SR 50 (E18908) udstedt 01-02-2011</option>
		<option value="TyS¤¤¤36486">SYM Symphony SR 50 (E18909) udstedt 01-02-2011</option>
		<option value="TyS¤¤¤36487">SYM Tonik 50 (E18910) udstedt 03-02-2011</option>
		<option value="TyS¤¤¤36500">Piaggio APE50 (E18920) udstedt 08-02-2011</option>
		<option value="TyS¤¤¤36525">Peugeot Tweet (E18935) udstedt 25-02-2011</option>

	
31-03-2011
		<option value="TyS¤¤¤36633">CPI Aragon S-Line (E19035) udstedt 24-03-2011</option>
		<option value="TyS¤¤¤36634">CPI Aragon S-Line (E19036) udstedt 24-03-2011</option>
		<option value="TyS¤¤¤36635">CPI Oliver City (E19037) udstedt 24-03-2011</option>
		<option value="TyS¤¤¤36636">CPI Oliver City (E19038) udstedt 24-03-2011</option>

	
30-04-2011
		<option value="TyS¤¤¤36651">Generic Trigger 50 (E19053) udstedt 12-04-2011</option>
		<option value="TyS¤¤¤36658">Peugeot Tweet (E19054) udstedt 13-04-2011</option>
         <option value="TyS¤¤¤36697">Xinling - (E19071) udstedt 19-04-2011</option>
		<option value="TyS¤¤¤36705">Peugeot Kisbee (E19078) udstedt 26-04-2011</option>
		<option value="TyS¤¤¤36707">AGM V641 (E19080) udstedt 28-04-2011</option>
		<option value="TyS¤¤¤36708">AGM V641 (E19081) udstedt 28-04-2011</option>

	
31-05-2011
		<option value="TyS¤¤¤36501">VGA GRIDO (E18921) udstedt 10-05-2011</option>
		<option value="TyS¤¤¤36502">VGA GRIDO (E18922) udstedt 10-05-2011</option>
		<option value="TyS¤¤¤36578">A2B Metro (E18985) udstedt 09-03-2011</option>
		<option value="TyS¤¤¤36724">Aprilia Sport (E18304) udstedt 07-07-2010</option>
		<option value="TyS¤¤¤36726">SYM Mio 50 (E19093) udstedt 09-05-2011</option>
		<option value="TyS¤¤¤36752">YADEA OUHU (E19108) udstedt 16-05-2011</option>
		<option value="TyS¤¤¤36753">SYM Mio 50 (E19109) udstedt 16-05-2011</option>
		<option value="TyS¤¤¤36754">SYM Symphony SR 50 (E19110) udstedt 17-05-2011</option>
		<option value="TyS¤¤¤36755">SYM Tonik 50 (E19111) udstedt 17-05-2011</option>
         <option value="TyS¤¤¤36764">Baotian BT49QT (E19116) udstedt 23-05-2011</option>
         <option value="TyS¤¤¤36765">Baotian BT49QT (E19117) udstedt 23-05-2011</option>
         <option value="TyS¤¤¤36766">Baotian BT49QT (E19118) udstedt 23-05-2011</option>
         <option value="TyS¤¤¤36767">Baotian BT49QT (E19119) udstedt 23-05-2011</option>
		<option value="TyS¤¤¤36772">Leone Swan (E19121) udstedt 26-05-2011</option>
		<option value="TyS¤¤¤36773">Peugeot Ludix Pro (E19122) udstedt 26-05-2011</option>
         <option value="TyS¤¤¤36774">Kreidler Galactica 2.0 50 DD (E19123) udstedt 26-05-2011</option>
         <option value="TyS¤¤¤36775">Kreidler Galactica 2.0 50 DD (E19124) udstedt 26-05-2011</option>
         <option value="TyS¤¤¤36776">Kreidler Hiker 2.0 50 DD S (E19125) udstedt 26-05-2011</option>
         <option value="TyS¤¤¤36777">Kreidler Hiker 2.0 50 DD S (E19126) udstedt 26-05-2011</option>

	
30-06-2011
		<option value="TyS¤¤¤36808">Baotian BT49QT-12-d30 (E17039) udstedt 27-03-2008</option>
		<option value="TyS¤¤¤36809">Baotian BT49QT-12-d45 (E17139) udstedt 02-06-2008</option>
		<option value="TyS¤¤¤36810">Baotian BT49QT-9 (E17038) udstedt 27-03-2008</option>
		<option value="TyS¤¤¤36811">Baotian BT49QT-9d45 (E17138) udstedt 02-06-2008</option>
		<option value="TyS¤¤¤36812">Baotian BT49QT-20 (E17569) udstedt 23-02-2008</option>
		<option value="TyS¤¤¤36814">HOUNIAO RMC HN50QT-J (E17170) udstedt 14-07-2008</option>
		<option value="TyS¤¤¤36815">HUONIAO RMC HN50QT-K (E17168) udstedt 14-07-2008</option>
		<option value="TyS¤¤¤36816">HUONIAO RMC HN50QT-K (E17169) udstedt 14-07-2008</option>
		<option value="TyS¤¤¤36817">Apollo A36A50M30 (E17575) udstedt 24-02-2009</option>
		<option value="TyS¤¤¤36818">Apollo A36A50M30 (E17574) udstedt 24-02-2009</option>
		<option value="TyS¤¤¤36819">Apollo A30E50M30 (E17159) udstedt 30-06-2008</option>
		<option value="TyS¤¤¤36820">Apollo A30E50M30 (E17573) udstedt 24-02-2009</option>
		<option value="TyS¤¤¤36821">Apollo A29E50M30 (E17160) udstedt 30-06-2008</option>
		<option value="TyS¤¤¤36822">Apollo A29E50M30 (E17572) udstedt 24-02-2009</option>
		<option value="TyS¤¤¤36826">Derbi GPR (E19151) udstedt 23-06-2011</option>
		<option value="TyS¤¤¤36827">Generic RACE (E19152) udstedt 23-06-2011</option>
		<option value="TyS¤¤¤36829">Generic ONYX (E19154) udstedt 24-06-2011</option>
		<option value="TyS¤¤¤36834">Generic RACE (E19159) udstedt 24-06-2011</option>
		<option value="TyS¤¤¤36835">Kreidler Hiker Electro (E19160) udstedt 24-06-2011</option>
		<option value="TyS¤¤¤36836">Kreidler Jigger City 50 (E19161) udstedt 24-06-2011</option>
		<option value="TyS¤¤¤36837">Kreidler Jigger City 50 (E19162) udstedt 24-06-2011</option>
		<option value="TyS¤¤¤36838">Yamaha SC50M (E19163) udstedt 24-06-2011</option>

	
31-07-2011
		<option value="TyS¤¤¤36828">Generic ONYX (E19153) udstedt 24-06-2011</option>
		<option value="TyS¤¤¤36830">Generic Trigger 50 (E19155) udstedt 24-06-2011</option>
		<option value="TyS¤¤¤36831">Generic Trigger 50 (E19156) udstedt 24-06-2011</option>
		<option value="TyS¤¤¤36832">BETA Ark (E19157) udstedt 24-06-2011</option>
		<option value="TyS¤¤¤36833">BETA Ark (E19158) udstedt 24-06-2011</option>
		<option value="TyS¤¤¤36870">Tante Paula Ferdinand II (E19186) udstedt 20-07-2011</option>
		<option value="TyS¤¤¤36871">Tante Paula Maximilian II (E19187) udstedt 12-07-2011</option>
		<option value="TyS¤¤¤36876">SYM Jet4 50 (E19197) udstedt 12-07-2011</option>
		<option value="TyS¤¤¤36878">SYM Allo 50 (E19202) udstedt 13-07-2011</option>
		<option value="TyS¤¤¤36880">Generic IDEO (E19203) udstedt 13-07-2011</option>
		<option value="TyS¤¤¤36882">Generic IDEO (E19204) udstedt 13-07-2011</option>
		<option value="TyS¤¤¤36883">Generic XOR 2 (E19205) udstedt 13-07-2011</option>
		<option value="TyS¤¤¤36884">Generic XOR 2 (E19206) udstedt 13-07-2011</option>
		<option value="TyS¤¤¤36887">CPI GTR (E19208) udstedt 14-07-2011</option>
		<option value="TyS¤¤¤36888">CPI Supermoto (E19209) udstedt 14-07-2011</option>
		<option value="TyS¤¤¤36924">SYM Jet4 R Naked 50 (E19239) udstedt 26-07-2011</option>
		<option value="TyS¤¤¤36925">SYM Jet4 R 50 (E19240) udstedt 26-07-2011</option>

	
31-08-2011
		<option value="TyS¤¤¤36813">Baotian BT49QT-20 (E17568) udstedt 23-02-2009</option>
		<option value="TyS¤¤¤36950">SYM Orbit II 50 TS (E19264) udstedt 08-08-2011</option>
		<option value="TyS¤¤¤36951">SYM Orbit II 50 TS (E19265) udstedt 08-08-2011</option>
		<option value="TyS¤¤¤36953">Zhenhua ZH-CJL50 (E19267) udstedt 08-08-2011</option>
		<option value="TyS¤¤¤36954">Zhenhua ZH-CJL50 (E19268) udstedt 08-08-2011</option>
		<option value="TyS¤¤¤36955">Zhenhua ZH-SR50 (E19269) udstedt 08-08-2011</option>
		<option value="TyS¤¤¤36975">Baotian - (E19286) udstedt 12-08-2011</option>
		<option value="TyS¤¤¤37020">Yamasaki MC 45 (E19326) udstedt 24-08-2011</option>
		<option value="TyS¤¤¤37021">Yamasaki MC 30 (E19327) udstedt 24-08-2011</option>
		<option value="TyS¤¤¤37022">Xinling TXD (E19328) udstedt 24-08-2011</option>
		<option value="TyS¤¤¤37023">Xinling TXD (E19329) udstedt 24-08-2011</option>
		<option value="TyS¤¤¤37024">Xinling XL (E19330) udstedt 24-08-2011</option>
		<option value="TyS¤¤¤37025">Xinling XL (E19331) udstedt 24-08-2011</option>

	
30-09-2011
		<option value="TyS¤¤¤37055">SYM Symphony SR 50 (E19366) udstedt 27-09-2011</option>
		<option value="TyS¤¤¤37056">SYM Orbit II 50 (E19370) udstedt 27-09-2011</option>
         <option value="TyS¤¤¤37057">SYM Jet Euro 50 (E19371) udstedt 27-09-2011</option>
		<option value="TyS¤¤¤37059">YAMAHA YN50M (E16563) udstedt 26-09-2007</option>

	
31-10-2011
		<option value="TyS¤¤¤37111">SYM Jet4 R 50 (E19423) udstedt 10-10-2011</option>
		<option value="TyS¤¤¤37207">Honda NSC50 (E19447) udstedt 24-10-2011</option>

	
30-11-2011
		<option value="TyS¤¤¤37239">Piaggio Typhoon (E19482) udstedt 03-11-2011</option>

	
31-12-2011
   tom

01-01-2012

31-01-2012
		<option value="TyS¤¤¤29231">Keeway Focus (E15354) udstedt 10-05-2006</option>
               <option value="TyS¤¤¤32358">TGB 101R (E16892) udstedt 04-02-2008</option>
		<option value="TyS¤¤¤37259">Tante Paula Maximilian II (E19500) udstedt 11-11-2011</option>
		<option value="TyS¤¤¤37266">Piaggio ZIP (E19507) udstedt 21-11-2011</option>
		<option value="TyS¤¤¤37276">PGO - (E19516) udstedt 28-11-2011</option>
		<option value="TyS¤¤¤37359">Emax 110S (E19589) udstedt 11-01-2012</option>
		<option value="TyS¤¤¤37362">Skyteam Cobra (E19592) udstedt 12-01-2012</option>
		<option value="TyS¤¤¤37363">Skyteam Cobra (E19593) udstedt 12-01-2012</option>
		<option value="TyS¤¤¤37385">Leone Swan (E19423) udstedt 10-10-2011</option>
		<option value="TyS¤¤¤37386">Keeway Matrix (E19604) udstedt 19-01-2012</option>
		<option value="TyS¤¤¤37387">Keeway Matrix (E19605) udstedt 19-01-2012</option>
		<option value="TyS¤¤¤37388">Keeway Focus (E19606) udstedt 19-01-2012</option>
		<option value="TyS¤¤¤37389">Keeway Focus (E19607) udstedt 19-01-2012</option>
		<option value="TyS¤¤¤37390">Keeway Flash (E16033) udstedt 25-05-2007</option>
		<option value="TyS¤¤¤37391">Keeway Flash (E16034) udstedt 25-05-2007</option>
		<option value="TyS¤¤¤37392">Keeway X-Ray (E16390) udstedt 02-05-2007</option>
		<option value="TyS¤¤¤37393">Keeway F-Act/ matrix/ RY8/ RY9 (E16825) udstedt 20-12-2007</option>
		<option value="TyS¤¤¤37394">Keeway F-Act/ Matrix/ RY8/ RY9 (E16824) udstedt 20-12-2007</option>
		<option value="TyS¤¤¤37395">Keeway F-Act Nkd (E17596) udstedt 19-03-2009</option>
		<option value="TyS¤¤¤37397">Keeway Hurricane (E18367) udstedt 14-07-2010</option>
		<option value="TyS¤¤¤37421">VGA Mover (E19623) udstedt 26-01-2012</option>
		<option value="TyS¤¤¤37422">VGA Mover (E19624) udstedt 26-01-2012</option>

	
29-02-2012
		<option value="TyS¤¤¤37425">Emax 110S (E19625) udstedt 31-01-2012</option>
		<option value="TyS¤¤¤37426">Emax 80L (E19626) udstedt 31-01-2012</option>
		<option value="TyS¤¤¤37473">Kymco Like 50 (E19643) udstedt 21-02-2012</option>

	
31-03-2012
		<option value="TyS¤¤¤37535">Kymco Agility Carry (E19686) udstedt 22-03-2012</option>
		<option value="TyS¤¤¤37536">Kymco Agility Delivery (E19687) udstedt 22-03-2012</option>

	
30-04-2012
		<option value="TyS¤¤¤37595">Yamaha YN50FM (E19735) udstedt 13-04-2012</option>
		<option value="TyS¤¤¤37603">Baotian BT49QT-20 (E19740) udstedt 18-04-2012</option>
		<option value="TyS¤¤¤37629">Keeway RY6 (E19758) udstedt 25-04-2012</option>

	
31-05-2012
		<option value="TyS¤¤¤34573">Baotian BT49QT (E17612) udstedt 01-04-2009</option>
		<option value="TyS¤¤¤36495">VGA Digita (E18918) udstedt 07-02-2011</option>
		<option value="TyS¤¤¤36497">VGA Digita (E18919) udstedt 07-02-2011</option>
		<option value="TyS¤¤¤37277">PGO - (E19516) udstedt 13-01-2012</option>

	
30-06-2012
		<option value="TyS¤¤¤37663">Keeway RY6 (E19788) udstedt 14-05-2012</option>
		<option value="TyS¤¤¤37685">Emax 110S (E19801) udstedt 08-06-2012</option>
		<option value="TyS¤¤¤37686">Baotian BT49QT-9d25 (E19802) udstedt 12-06-2012</option>
		<option value="TyS¤¤¤37688">Baotian BT49QT-12 (E19803) udstedt 12-06-2012</option>
		<option value="TyS¤¤¤37689">Baotian BT49QT-20 (E19804) udstedt 12-06-2012</option>
		<option value="TyS¤¤¤37690">Baotian BT49QT-9d45 (E19805) udstedt 12-06-2012</option>
		<option value="TyS¤¤¤37691">Baotian BT49QT-12 (E19806) udstedt 12-06-2012</option>
		<option value="TyS¤¤¤37692">Baotian BT49QT-20 (E19807) udstedt 12-06-2012</option>
		<option value="TyS¤¤¤37704">VGA Digita (E18918) udstedt 07-12-2011</option>
		<option value="TyS¤¤¤37705">VGA Digita (E18919) udstedt 07-02-2011</option>
		<option value="TyS¤¤¤37706">VGA GRIDO (E18921) udstedt 10-05-2011</option>
		<option value="TyS¤¤¤37707">VGA GRIDO (E18922) udstedt 10-05-2011</option>
		<option value="TyS¤¤¤37708">VGA Versus (E19813) udstedt 14-06-2012</option>
		<option value="TyS¤¤¤37709">VGA Versus (E19814) udstedt 14-06-2012</option>

	
31-07-2012
		<option value="TyS¤¤¤37739">Keeway F-ACT EVO 50 (E19824) udstedt 09-07-2012</option>
		<option value="TyS¤¤¤37749">Sachs MadAss (E19829) udstedt 10-07-2012</option>
		<option value="TyS¤¤¤37753">Yamaha YN50FM NEOS MOFA 4T (E19840) udstedt 12-07-2012</option>
		<option value="TyS¤¤¤37754">Yamaha YN50F (NEOS 4-T) (E19841) udstedt 12-07-2012</option>
		<option value="TyS¤¤¤37755">Yamaha CS50M (JOG R MOFA) (E19842) udstedt 12-07-2012</option>
		<option value="TyS¤¤¤37757">Govecs 93 (E19844) udstedt 27-07-2012</option>
		<option value="TyS¤¤¤37759">Baotian Retro (E19846) udstedt 13-07-2012</option>
		<option value="TyS¤¤¤37761">AGM V641 (E19849) udstedt 13-07-2012</option>
		<option value="TyS¤¤¤37762">AGM V641 (E19850) udstedt 13-07-2012</option>
		<option value="TyS¤¤¤37816">TGB - (E19889) udstedt 26-07-2012</option>

	
31-08-2012
		<option value="TyS¤¤¤37557">Emax 110S (E19697) udstedt 02-04-2012</option>
		<option value="TyS¤¤¤37787">Baotian - (E19868) udstedt 23-07-2012</option>
         <option value="TyS¤¤¤37826">Yamaha CS50 (E19894) udstedt 02-08-2012</option>
         <option value="TyS¤¤¤37827">TGB - (E19895) udstedt 02-08-2012</option>
		<option value="TyS¤¤¤37902">Baotian Retro 30 (E19982) udstedt 30-08-2012</option>

	
30-09-2012
		<option value="TyS¤¤¤37920">GOVECS - (E20000) udstedt 11-09-2012</option>
		<option value="TyS¤¤¤37921">GOVECS - (E20001) udstedt 11-09-2012</option>

	
31-10-2012
   tom
30-11-2012
   tom
31-12-2012
		<option value="TyS¤¤¤38116">GOVECS - (E20174) udstedt 20-12-2012</option>
		<option value="TyS¤¤¤38117">GOVECS 93 (E20175) udstedt 20-12-2012</option>
		<option value="TyS¤¤¤38118">GOVECS - (E20176) udstedt 20-12-2012</option>
		<option value="TyS¤¤¤38131">Baotian - (E20189) udstedt 21-12-2012</option>

	
01-01-2013

31-01-2013
?		<option value="TyS¤¤¤38158">Honda - (E20210) udstedt 18-01-2013</option>
		<option value="TyS¤¤¤38163">Yamaha NS50 (E20214) udstedt 21-01-2013</option>

	
28-02-2013
		<option value="TyS¤¤¤38240">MGB MGB Delivery (E20293) udstedt 21-02-2013</option>
?		<option value="TyS¤¤¤38245">Honda - (E20210) udstedt 18-01-2013</option>

	
31-03-2013
		<option value="TyS¤¤¤38259">Yamaha YN50EM (E20302) udstedt 11-03-2013</option>

	
30-04-2013
		<option value="TyS¤¤¤38302">Derbi Senda R (E20400) udstedt 09-04-2013</option>

	
31-05-2013
		<option value="TyS¤¤¤38431">Baotian BT49QT-21 (E20456) udstedt 08-05-2013</option>
		<option value="TyS¤¤¤38432">Baotian BT49QT-21 (E20457) udstedt 14-05-2013</option>

	
30-06-2013
		<option value="TyS¤¤¤38481">Vespa LX50 (E20502) udstedt 31-05-2013</option>
		<option value="TyS¤¤¤38511">Aprillia SR50 (E20533) udstedt 07-06-2013</option>
		<option value="TyS¤¤¤38532">Vespa LX50 (E20554) udstedt 12-06-2013</option>
		<option value="TyS¤¤¤38543">VGA Versus LC (E20556) udstedt 20-06-2013</option>
		<option value="TyS¤¤¤38544">VGA  Versus LC (E20557) udstedt 20-06-2013</option>

	
31-07-2013
		<option value="TyS¤¤¤38545">Baotian BT49QT-12 (E20558) udstedt 01-07-2013</option>
		<option value="TyS¤¤¤38546">Baotian BT49QT-12 (E20559) udstedt 01-07-2013</option>
		<option value="TyS¤¤¤38588">Honda - (E20601) udstedt 10-07-2013</option>

	
31-08-2013
		<option value="TyS¤¤¤38638">Derbi Senda R (E20647) udstedt 19-08-2013</option>
		<option value="TyS¤¤¤38664">Kymco Super 8 50 (E20670) udstedt 29-08-2013</option>

	
30-09-2013
   fremtiden
31-10-2013
30-11-2013
31-12-2013
*/

$databasecenter = array(

'
introduktion
' => '
<div style="float: left; margin: 30px;">'.visbilled('1', 'billed2612.jpg', 'typegodkendelse', false, true).'</div>'
.'<div>Her på siden er typegodkendelser til 2 takt og 4 takt 50 cm³ scootere og elektriske scootere.

Typegodkendelserne stammer fra '.ahref('http://www.fstyr.biltorvet.dk/WebForm1.aspx', 'færdselsstyrelsens typegodkendelser').'.

Typegodkendelser indeholder information om en bestemt scooter/knallert model.
Information som anmelder, mærke, model, hastighed, fabrikantkode, begrænsning, vægt, dimensioner, motor type, fælg, dæk og andet.

Det variere hvor meget information der er i typegodkendelserne og det er ikke alle modeller jeg har kunne finde en typegodkendelse til da færdselsstyrelsen ikke har en komplet liste med typegodkendelser.

For det meste er der separate typegodkendelse for en 25, 30 km/t (lille knallert) og 45 km/t (stor knallert) selvom de næsten indeholder samme information.

Der findes vist kun typegodkendelser til de scootere/knallerter der skal have nummerplade, jeg har vist aldrig fundet nogen til 30 km/t 3 hjulet invaldeknallert som ikke skal have nummerplade. Jeg har heller aldrig fundet nogen typegodkendelser til 30 km/t knallert fra før 2006. For 45 km/t er de tidligste typegodkendelser jeg har fundet fra 1997.
<div class="clearboth"></div>
</div>
'

,'
filer
' => '
'.vismappe($GLOBALS['setup']['datamappe'] . '/' . $GLOBALS['setup']['downloadmappe'] . '/' . 'typegodkendelser').'
'


);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
