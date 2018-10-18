<?php
date_default_timezone_set("Asia/Kuwait");
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("MT_SMS",$con);
mysql_query("set character_set_server='utf8'"); 
mysql_query("set names 'utf8'");

$sender=$_GET['sender'];
$sms=$_GET['sms'];


//$sms="ሞር2";
//$sender="+251912655466";
$s=substr(trim($sms),0,3); //for delivery
$sms=TrimStr($sms);


//echo $sms.'<br>';
$dat = date("Y-m-d");
$enddat= nextmonth($dat);
set_time_limit(80000);
 
function TrimStr($str){
    $str = str_replace(' ', '', $str);
	$str=str_replace("\r",'',$str);
	$str=str_replace("\n",'',$str);
	$str=str_replace("\t",'',$str);
	$str=str_replace("/",'',$str);
	$str=str_replace('"','',$str);
	$str=str_replace("'",'',$str);
	$str=str_replace("\\",'',$str);
	$str=str_replace(" ",'',$str);
	$str=str_replace(":",'',$str);
    $str=str_replace(".",'',$str);
    $str=str_replace(",",'',$str);
	$str=str_replace("8680",'',$str);
	$str=str_replace("8690",'',$str);
	
	$str=str_replace("አቁም",'stop',$str);
	$str=str_replace("ለሌሎችክለቦች",'more',$str);
	$str=str_replace("ለሌሎች",'more',$str);
	$str=str_replace("ክለቦች",'more',$str);
	$str=str_replace("ስቶፕ",'stop',$str);
	$str=str_replace("ሞር",'more',$str);
	
	$str=str_replace("ለጠቅላላእውቀት1",'1',$str);
   	$str=str_replace("ለጠቅላላእውቀት",'1',$str);
	$str=str_replace("ጠቅላላእውቀት1",'1',$str);
	$str=str_replace("1ለጠቅላላእውቀት",'1',$str);
	$str=str_replace("ለጠቅላላእውቀት",'1',$str);
    
	$str=str_replace("ለታዋቂሰዎችአባባል2",'2',$str);
	$str=str_replace("ለታዋቂሰዎችአባባል",'2',$str);
	$str=str_replace("ታዋቂሰዎችአባባል2",'2',$str);
	$str=str_replace("2ታዋቂሰዎችአባባል",'2',$str);
	$str=str_replace("ታዋቂሰዎችአባባል",'2',$str);
	
	$str=str_replace("ለተረትእናምሳሌ3",'3',$str);
	$str=str_replace("ለተረትእናምሳሌ",'3',$str);
	$str=str_replace("ተረትእናምሳሌ3",'3',$str);
	$str=str_replace("3ለተረትእናምሳሌ",'3',$str);
	$str=str_replace("ተረትእናምሳሌ",'3',$str);
	
	
	$str=str_replace("ለእንቆቅልሽ4",'4',$str);
	$str=str_replace("ለእንቆቅልሽ",'4',$str);
	$str=str_replace("እንቆቅልሽ4",'4',$str);
	$str=str_replace("4እንቆቅልሽ",'4',$str);
	$str=str_replace("እንቆቅልሽ",'4',$str);

	
	$str=str_replace("ለአማርኛየቀኑቃል5",'5',$str);
	$str=str_replace("ለአማርኛየቀኑቃል",'5',$str);
	$str=str_replace("አማርኛየቀኑቃል5",'5',$str);
	$str=str_replace("5አማርኛየቀኑቃል",'5',$str);
	$str=str_replace("አማርኛየቀኑቃል",'5',$str);
	
	$str=str_replace("ለቅኔ6",'6',$str);
	$str=str_replace("ቅኔ6",'6',$str);
	$str=str_replace("ለቅኔ",'6',$str);
	$str=str_replace("ቅኔ",'6',$str);
	
	$str=str_replace("ለአለምታሪክ7",'7',$str);
	$str=str_replace("ለአለምታሪክ",'7',$str);
	$str=str_replace("አለምታሪክ7",'7',$str);
	$str=str_replace("7አለምታሪክ",'7',$str);
	$str=str_replace("አለምታሪክ",'7',$str);
	
	$str=str_replace("ለጊነስቡክ8",'8',$str);
	$str=str_replace("ለጊነስቡክ",'8',$str);
	$str=str_replace("ጊነስቡክ8",'8',$str);
	$str=str_replace("8ጊነስቡክ",'8',$str);
	$str=str_replace("ጊነስቡክ",'8',$str);

	
	$str=str_replace("ለሳይንስናቴክኖሎጂ9",'9',$str);
	$str=str_replace("ለሳይንስናቴክኖሎጂ",'9',$str);
	$str=str_replace("ሳይንስናቴክኖሎጂ9",'9',$str);
	$str=str_replace("9ሳይንስናቴክኖሎጂ",'9',$str);
	$str=str_replace("ሳይንስናቴክኖሎጂ",'9',$str);
	
	$str=str_replace("ለዝንቅ16",'16',$str);
	$str=str_replace("ለዝንቅ",'16',$str);
	$str=str_replace("ዝንቅ16",'16',$str);
	$str=str_replace("16ዝንቅ",'16',$str);
	$str=str_replace("ዝንቅ",'16',$str);
	
	$str=str_replace("ለቱሪዝምበቴክስት11",'11',$str);
	$str=str_replace("ለቱሪዝምበቴክስት",'11',$str);
	$str=str_replace("ቱሪዝምበቴክስት11",'11',$str);
	$str=str_replace("11ቱሪዝምበቴክስት",'11',$str);
	$str=str_replace("ቱሪዝምበቴክስት",'11',$str);
		
	$str=str_replace("ለታዋቂሰዎችህይወትተሞክሮ12",'12',$str);
	$str=str_replace("ለታዋቂሰዎችህይወትተሞክሮ",'12',$str);
	$str=str_replace("ታዋቂሰዎችህይወትተሞክሮ12",'12',$str);
	$str=str_replace("12ታዋቂሰዎችህይወትተሞክሮ",'12',$str);
	$str=str_replace("ታዋቂሰዎችህይወትተሞክሮ",'12',$str);

	
	$str=str_replace("ለአማርኛጥቅሶች13",'13',$str);
	$str=str_replace("ለአማርኛጥቅሶች",'13',$str);
	$str=str_replace("አማርኛጥቅሶች13",'13',$str);
	$str=str_replace("13አማርኛጥቅሶች",'13',$str);
	$str=str_replace("አማርኛጥቅሶች",'13',$str);

	$str=str_replace("ለአማርኛዘይቤዎች14",'14',$str);
	$str=str_replace("ለአማርኛዘይቤዎች",'14',$str);
	$str=str_replace("አማርኛዘይቤዎች14",'14',$str);
	$str=str_replace("14አማርኛዘይቤዎች",'14',$str);
	$str=str_replace("አማርኛዘይቤዎች",'14',$str);
	
	
	$str=str_replace("ለአስገራሚእውነታዎች15",'15',$str);
	$str=str_replace("ለአስገራሚእውነታዎች",'15',$str);
	$str=str_replace("አስገራሚእውነታዎች15",'15',$str);
	$str=str_replace("14አስገራሚእውነታዎች",'15',$str);
	$str=str_replace("አስገራሚ እውነታዎች",'15',$str);
	
	
	$str=str_replace("ለዓለምአቀፍህጎች17",'17',$str);
	$str=str_replace("ለዓለምአቀፍህጎች",'17',$str);
	$str=str_replace("ዓለምአቀፍህጎች17",'17',$str);
	$str=str_replace("17ዓለምአቀፍህጎች",'17',$str);
	$str=str_replace("ዓለምአቀፍህጎች",'17',$str);
	
	
	$str=str_replace("ለእስፓርትእውነታዎች18",'18',$str);
	$str=str_replace("ለእስፓርትእውነታዎች",'18',$str);
	$str=str_replace("እስፓርትእውነታዎች18",'18',$str);
	$str=str_replace("18እስፓርትእውነታዎች",'18',$str);
	$str=str_replace("እስፓርትእውነታዎች",'18',$str);
	
	$str=str_replace("ለእግርኳስህጎች19",'19',$str);
	$str=str_replace("ለእግርኳስህጎች",'19',$str);
	$str=str_replace("እግርኳስህጎች19",'19',$str);
	$str=str_replace("19እግርኳስህጎች",'19',$str);
	$str=str_replace("እግርኳስህጎች",'19',$str);
	
	$str=str_replace("ለእንግሊዘኛቃላት21",'21',$str);
	$str=str_replace("ለእንግሊዘኛቃላት",'21',$str);
	$str=str_replace("እንግሊዘኛቃላት21",'21',$str);
	$str=str_replace("21እንግሊዘኛቃላት",'21',$str);
	$str=str_replace("እንግሊዘኛቃላት",'21',$str);
	
	
	$str=str_replace("ለፈሊጣዊአነጋገሮች23",'23',$str);
	$str=str_replace("ለፈሊጣዊአነጋገሮች",'23',$str);
	$str=str_replace("ፈሊጣዊአነጋገሮች23",'23',$str);
	$str=str_replace("23ፈሊጣዊአነጋገሮች",'23',$str);
	$str=str_replace("ፈሊጣዊአነጋገሮች",'23',$str);
	
   $str = trim($str);
	$str = strtolower($str);
	$str = preg_replace('/\s+/','',$str);
	$str = str_replace(' ', '', $str);
	$str=str_replace("\r",'',$str);
	$str=str_replace("\n",'',$str);
	$str=str_replace("\t",'',$str);
	$str=str_replace("/",'',$str);
	$str=str_replace('"','',$str);
	$str=str_replace("'",'',$str);
	$str=str_replace("\\",'',$str);
	$str=str_replace(" ",'',$str);
	$str=str_replace(".",'',$str);
	$str=str_replace(",",'',$str);
	$str=str_replace("8680",'',$str);
	$str=str_replace("8690",'',$str);
	$str=str_replace("send",'',$str);
	$str=str_replace("1etb",'',$str);
	$str=str_replace("[oK]",'ok',$str);
	$str=str_replace("ÄokÑ",'ok',$str);
	$str=str_replace("okay",'ok',$str);
	$str=str_replace("OKAY",'ok',$str);
	$str=str_replace("ÄokÑ",'ok',$str);
	$str=str_replace("Okay",'ok',$str);
	$str=str_replace("ÄokÑ",'ok',$str);
	$str=str_replace("sall",'hulum',$str);
	
	$str=str_replace("1forgeneralknowledge",'1',$str);
	$str=str_replace("forgeneralknowledge",'1',$str);
	$str=str_replace("1generalknowledge",'1',$str);
	$str=str_replace("generalknowledge1",'1',$str);
	$str=str_replace("generalknowledge",'1',$str);
	$str=str_replace("gk",'1',$str);
	
	$str=str_replace("2forfamousquotes",'2',$str);
	$str=str_replace("forfamousquotes",'2',$str);
	$str=str_replace("2famousquotes",'2',$str);
	$str=str_replace("famousquotes2",'2',$str);
	$str=str_replace("famousquotes",'2',$str);
	$str=str_replace("22",'2',$str);
	
	
	$str=str_replace("3forteretenamisale",'3',$str);
	$str=str_replace("forteretenamisale",'3',$str);
	$str=str_replace("3teretenamisale",'3',$str);
	$str=str_replace("teretenamisale",'3',$str);


	$str=str_replace("4forenkoklesh",'4',$str);
	$str=str_replace("forenkoklesh",'4',$str);
	$str=str_replace("4enkoklesh",'4',$str);
	$str=str_replace("enkoklesh4",'4',$str);
	$str=str_replace("enkolesh",'4',$str);
	$str=str_replace("ok",'OK',$str);
		
	$str=str_replace("5foramharicwordoftheday",'5',$str);
	$str=str_replace("forAmharicWordoftheday",'5',$str);
	$str=str_replace("5amharicwordoftheday",'5',$str);
	$str=str_replace("amharicwordoftheday5",'5',$str);
	$str=str_replace("amharicwordoftheday",'5',$str);
	
	$str=str_replace("6forqene",'6',$str);
	$str=str_replace("forqene",'6',$str);
	$str=str_replace("6qene",'6',$str);
	$str=str_replace("qene6",'6',$str);
	$str=str_replace("qene",'6',$str);
	
	$str=str_replace("7forWorldHistory",'7',$str);
	$str=str_replace("forWorldHistory",'7',$str);
	$str=str_replace("7WorldHistory",'7',$str);
	$str=str_replace("WorldHistory7",'7',$str);
	$str=str_replace("WorldHistory",'7',$str);
	$str=str_replace("77",'7',$str);
	
	$str=str_replace("8forGuinnessbook",'8',$str);
	$str=str_replace("forGuinnessbook",'8',$str);
	$str=str_replace("8Guinnessbook",'8',$str);
	$str=str_replace("Guinnessbook8",'8',$str);
	$str=str_replace("Guinnessbook",'8',$str);
	$str=str_replace("88",'8',$str);
	
	$str=str_replace("9forScienceandtechnology",'9',$str);
	$str=str_replace("forScienceandtechnology",'9',$str);
	$str=str_replace("9Scienceandtechnology",'9',$str);
	$str=str_replace("Scienceandtechnology9",'9',$str);
	$str=str_replace("Scienceandtechnology",'9',$str);
	$str=str_replace("99",'9',$str);
	
	$str=str_replace("16forZenqe",'16',$str);
	$str=str_replace("forZenqe",'16',$str);
	$str=str_replace("16Zenqe",'16',$str);
	$str=str_replace("Zenqe16",'16',$str);
	$str=str_replace("Zenqe",'16',$str);
	
    $str=str_replace("11forTourismbytext",'11',$str);
	$str=str_replace("forTourismbytext",'11',$str);
	$str=str_replace("11Tourismbytext",'11',$str);
	$str=str_replace("Tourismbytext11",'11',$str);
	$str=str_replace("Tourismbytext",'11',$str);
	$str=str_replace("111",'11',$str);
	
	$str=str_replace("12forfamousPeoplelifeexperience",'12',$str);
	$str=str_replace("forfamousPeoplelifeexperience",'12',$str);
	$str=str_replace("12famousPeoplelifeexperience",'12',$str);
	$str=str_replace("famousPeoplelifeexperience12",'12',$str);
	$str=str_replace("famousPeoplelifeexperience",'12',$str);
	$str=str_replace("122",'12',$str);
	
	$str=str_replace("13forAmharicProverbs",'13',$str);
	$str=str_replace("forAmharicProverbs",'13',$str);
	$str=str_replace("13AmharicProverbs",'13',$str);
	$str=str_replace("AmharicProverbs13",'13',$str);
	$str=str_replace("AmharicProverbs",'13',$str);
	$str=str_replace("133",'13',$str);
	
	$str=str_replace("14forAmharicZayba",'14',$str);
	$str=str_replace("forAmharicZayba",'14',$str);
	$str=str_replace("14AmharicZayba",'14',$str);
	$str=str_replace("AmharicZayba14",'14',$str);
	$str=str_replace("AmharicZayba",'14',$str);
	$str=str_replace("144",'14',$str);
	
	
	$str=str_replace("15forAmazingfacts",'15',$str);
	$str=str_replace("forAmazingfacts",'15',$str);
	$str=str_replace("15Amazingfacts",'15',$str);
	$str=str_replace("Amazingfacts15",'15',$str);
	$str=str_replace("Amazingfacts",'15',$str);
	$str=str_replace("155",'15',$str);

	
	$str=str_replace("17forrules",'17',$str);
	$str=str_replace("forrules",'17',$str);
	$str=str_replace("17rules",'17',$str);
	$str=str_replace("rules17",'17',$str);
	$str=str_replace("rules",'17',$str);
	$str=str_replace("177",'17',$str);
	
	$str=str_replace("18forfootballfacts",'18',$str);
	$str=str_replace("forfootballfacts",'18',$str);
	$str=str_replace("18footballfacts",'18',$str);
	$str=str_replace("footballfacts18",'18',$str);
	$str=str_replace("footballfacts",'18',$str);
	$str=str_replace("188",'18',$str);
	
	$str=str_replace("19forrulesofthegame",'19',$str);
	$str=str_replace("forrulesofthegame",'19',$str);
	$str=str_replace("19rulesofthegame",'19',$str);
	$str=str_replace("rulesofthegame19",'19',$str);
	$str=str_replace("rulesofthegame",'19',$str);
	$str=str_replace("199",'19',$str);
	
	
	$str=str_replace("21forenglishwords",'21',$str);
	$str=str_replace("forenglishwords",'21',$str);
	$str=str_replace("21englishwords",'21',$str);
	$str=str_replace("englishwords21",'21',$str);
	$str=str_replace("englishwords",'21',$str);
	$str=str_replace("121",'21',$str);
	
	
	$str=str_replace("23forflitawiword",'23',$str);
	$str=str_replace("forflitawiword",'23',$str);
	$str=str_replace("23flitawiword",'23',$str);
	$str=str_replace("flitawiword23",'23',$str);
	$str=str_replace("flitawiword",'23',$str);
	$str=str_replace("123",'23',$str);
	

	$str=str_replace("more",'mor',$str);
	$str=str_replace("mor",'more',$str);
	$str=str_replace("mur",'more',$str);
	$str=str_replace("mer",'more',$str);
	$str=str_replace("mar",'more',$str);
	$str=str_replace("more",'MRE',$str);
	
	
	$str=str_replace("gotohell",'stop',$str);
	$str=str_replace("fuckyou",'stop',$str);
	$str=str_replace("fucku",'stop',$str);
	$str=str_replace("fuck",'stop',$str);
	$str=str_replace("cancel",'stop',$str);
	$str=str_replace("exit",'stop',$str);
	$str=str_replace("st0p",'stop',$str);
	$str=str_replace("stup",'stop',$str);
	$str=str_replace("stip",'stop',$str);
	$str=str_replace("step",'stop',$str);
	$str=str_replace("stope",'stop',$str);	
	$str=str_replace("stpe",'stop',$str);	
	$str=str_replace("stp",'stop',$str);	
	$str=str_replace("stopall",'stop',$str);
	$str=str_replace("አቁም",'stop',$str);
	$str=str_replace("stob",'stop',$str);
	$str=str_replace("allstop",'stop',$str);
	$str=str_replace("ok",'OK',$str);
	$str=str_replace("10",'onthetablebutwhereisthetabel',$str);
	$str=str_replace("20",'omyasshereisyourtableyousonofabitch',$str);
	$str=str_replace("0",'stop',$str);
	$str=str_replace("onthetablebutwhereisthetabel",'10',$str);
	$str=str_replace("omyasshereisyourtableyousonofabitch",'20',$str);
	$str=str_replace("buna",'10',$str);
	$str=str_replace("stop",'whatwasthatagain',$str);
	$str=str_replace("o",'whatwasthatagain',$str);
	$str=str_replace("whatwasthatagain",'stop',$str);
	$str=str_replace("OK",'ok',$str);
	$str=str_replace("MRE",'more',$str);


	
	$str=trim($str);
	
    return $str;
}

function httpRequest($url){
      $pattern = "/http...([0-9a-zA-Z-.]*).([0-9]*).(.*)/";
      preg_match($pattern,$url,$args);
      $in = "";
      $fp = fsockopen("$args[1]", $args[2], $errno, $errstr, 30);
      if (!$fp) {
         return("$errstr ($errno)");
      } else {
          $out = "GET /$args[3] HTTP/1.1\r\n";
          $out .= "Host: $args[1]:$args[2]\r\n";
          $out .= "User-agent: Ozeki PHP client\r\n";
          $out .= "Accept: */*\r\n";
          $out .= "Connection: Close\r\n\r\n";
          fwrite($fp, $out);
          while (!feof($fp)) {
             $in.=fgets($fp, 128);
          }
      }
      fclose($fp);
      return($in);
   }

function sendSMS($msg, $recipient,$sr) {
		$URL = "http://127.0.0.1:9501\api?username=". urlencode("Monthly_Services_Server") . "&password=". urlencode("yokida123");
		$URL .= "&action=sendmessage&messagetype=SMS:TEXT&recipient=". urlencode($recipient);
		$URL .= "&messagedata=" . urlencode($msg);
	    $URL .="&originator=". urlencode($sr);
		//echo "Request: <br>$URL<br><br>";
		$response = httpRequest($URL);
	/* echo "Response: <br><pre>".
			str_replace(array("<",">"),array("&lt;","&gt;"),$response).
			"</pre><br>"; */
	}
	
		
function nextmonth($date1)
{ 
$EndTime1=$date1;
 $dat=explode("-",$EndTime1);
                            $d=$dat[2];
                            $m=$dat[1];
			                $Y=$dat[0];
							$nextmonth = mktime(0,0,0,date("$m"),date("$d")+0,date("$Y"));
                            $EndTime2=date("Y-m-d",$nextmonth);  
						    return $EndTime2;
}	

function ALL($sender)
{
 $sms="all";
 $dat=nextmonth("Y-m-d");
 mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");

$msg_ns="You have not subscribed to any of the services yet. To subscribe, Send:
1 for General Knowledge
2 for Famous Quotes 
3 for teret ena misale
4 for enkoklesh
6 for qene
Price 1ETB/msg;
For more services, Send MORE";
$msg_amh_ns="ለየትኛውም አገልግሎት አልተመዘገቡም:: ለመመዝገብ
ለጠቅላላ እውቀት 1
ለታዋቂ ሰዎች አባባል 2
ለተረት እና ምሳሌ 3
ለእንቆቅልሽ 4
ለቅኔ 6
ለተጨማሪ አገልግሎት MORE ብለው ይላኩ";

 $sql_found=mysql_query("SELECT Service FROM `customers_in2` WHERE `Number`='$sender'");
 $num_rows=mysql_num_rows($sql_found);

  if($num_rows!=0 && $num_rows<16 )
  { 
  $i=0;
 
while($row_cus=mysql_fetch_row($sql_found)){

$msg1.=$row_cus[$i].', ';
}
    $msg="Dear Customer, You have been subscribed for the following services: 
$msg1";
    $msg_amh="ክቡር ደንበኛችን ከዚህ ቀጥሎ ለተዘረዘሩት አገልግሎት ተመዝግበዋል:
$msg1";
$msg2="Do you want to subscribe for all of the services? 
Send SALL
You want more services? 
Send MORE 
If you want unsubscribe from all of the services send STOPALL";

$msg2_amh="ለሁሉም አገልግሎት መመዝገብ ይፈልጋሉ？
SALL ብለው ይላኩ
ተጨማሪ አገልግሎት ይፈለጋሉ？
MORE ብለው ይላኩ";
    
	sendSMS($msg,$sender,8680);
	sendSMS($msg_amh,$sender,8680);
	 sleep(10);
 sendSMS($msg2,$sender,8680);
  sendSMS($msg2_amh,$sender,8680);
 //echo $msg1;
 //echo $msg2;
 }
  elseif ( $num_rows>15)
  {
  $msg_all="Dear Customer, You have subscribed to all of Yokida's Services." ;
  $msg_all_amh="ክቡር ደንበኛችን ለሁሉም አገልግሎት ተመዝግበዋል";
	//echo $msg_all;
	sendSMS($msg_all,$sender,8680);
	sendSMS($msg_all_amh,$sender,8680);
	}
	 elseif ($num_rows==0){
    	 sendSMS($msg_ns,$sender,8680);
		  sendSMS($msg_amh_ns,$sender,8680);
		}
	 //echo $msg;
	 
}

function Remove($sender,$sms)
{

 $dat=nextmonth("Y-m-d");	
 mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
 
$sql_found=mysql_query("SELECT `Number` ,`Service` FROM `customers_in2` WHERE `Number` LIKE '$sender'");
$row_found = mysql_fetch_row($sql_found);
if(mysql_num_rows($sql_found)!=0)
   {
    if($sms=="stop")
	       {
		     $sql_all=mysql_query("select `Service` from `customers_in2` WHERE `Number` LIKE '$sender'");
              while($row_all=mysql_fetch_row($sql_all))
                {
                $d1=$row_all[0];
			
				$in= mysql_query("INSERT INTO `customers_out2` values('$sender' ,'$d1','$dat')");
	             }
				
		     $sqlQuery3 =mysql_query("delete from `customers_in2` WHERE Number='$sender'"); 
		     $MS=" You have unsubscribed from all of your Services. 

 If you have any suggestions, please don't hesitate to call us on 0944103601.";
			$MS_amh="ሁሉንም የኢፎሴል አግልግሎት አቋርጠዋል:: ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን";
	        sendSMS($MS,$sender,8680);
			 sendSMS($MS_amh,$sender,8680);
			
          }
		 else
	 {
     $sc=mysql_query("SELECT `Service`,`Aname`, `key` FROM `services2` WHERE `key2`like '$sms'");//select to service 
	 $row = mysql_fetch_row($sc);
     $d1=$row[0];
	 $name=$row[1];
	 $reg_id=$row[2];
	 $sql_InService=mysql_query("select * from `customers_in2` WHERE `Number` LIKE '$sender' and `Service` LIKE '$d1' and Flag='Postpaid'");
     if(mysql_num_rows($sql_InService)!=0)
       {
	    
	     $in= mysql_query("INSERT INTO `customers_out2` values('$sender' ,'$d1','$dat')");
	     //$sqlQuery3 =mysql_query("UPDATE `customers_in` SET Enddate= '$dat',flag = 'Removed' WHERE Number='$sender' and Service='$d1'"); 
	     $sqlQuery3 =mysql_query("delete from `customers_in2` WHERE Number='$sender' and Service='$d1'"); 
		 
		 $MS=" You have unsubscribed from $name Service. If you would like to subscribe back send $reg_id. If you have any suggestions, please don't hesitate to call us on 0944103601. ";
 $MS_amh="የ$name አገልግሎት ደንበኝነቶን አቋርጠዋል:: በድጋሚ ለመመዝገብ ከፈለጉ $reg_id ብለው ይላኩ:: ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን";
	    // echo $MS;
		 
         sendSMS($MS,$sender,8680);
		  sendSMS($MS_amh,$sender,8680);
	   }
	    else
	   {
         $MS="To unsubscribe 
Send STOP followed by one of the following keywords 
example STOP7
1 for General Knowledge
2 for Famous Quotes 
3 for teret ena misale
4 for enkoklesh
6 for qene";
		// echo $MS;
		 sendSMS($MS,$sender,8680);
		}
	}
}	
		 else
		 {
           $MS="Would you like to subscribe? Use the following keywords:
1 for General Knowledge
2 for Famous Quotes 
3 for teret ena misale
4 for enkoklesh
6 for qene
For more services, Send more";
          // echo $MS;
$msg_amh="ለየትኛውም አገልግሎት አልተመዘገቡም:: ለመመዝገብ
ለጠቅላላ እውቀት 1
ለታዋቂ ሰዎች አባባል 2
ለተረት እና ምሳሌ 3
ለእንቆቅልሽ 4
ለቅኔ 6
ለተጨማሪ አገልግሎት MORE ብለው ይላኩ";
		  sendSMS($MS,$sender,8680);
		  sendSMS($msg_amh,$sender,8680);
		 }

}




//*************************---Start---********************************
$status=0;

if($s!="id:")
   {
    if($sms=="more") 
	   {
	    $dat=nextmonth("Y-m-d");	
 mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
 
	     $MS='More services...
7 for World History
8 for Guinness book
9 for Science and technology
11 for Tourism by text
16 for Zenqe
For More services send MORE1';

$MS_amh="ለአለም ታሪክ 7
ለጊነስ ቡክ 8
ለሳይንስና ቴክኖሎጂ 9
ለቱሪዝም በቴክስት 11
ለዝንቅ 16
ለሌሎች አገልግሎቶች MORE1 ብለው ይላኩ";

         
		     sendSMS($MS,$sender,8680);
		     sendSMS($MS_amh,$sender,8680);
			 	    $status="more";
					}
     elseif($sms=="more1") 
	   {
	    $dat=nextmonth("Y-m-d");	
 mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
 
	     $MS='More services...
12 for famous People life experience
13 for Amharic Proverbs
14 for Amharic Zayba
15 for Amazing facts
17 for rules
For More services send MORE2';

$MS_amh="ለታዋቂ ሰዎች ህይወት ተሞክሮ 12
ለአማርኛ ጥቅሶች 13
ለአማርኛ ዘይቤዎች 14
ለአስገራሚ እውነታዎች 15
ለዓለም አቀፍ ህጎች 17
ለሌሎች አገልግሎቶች MORE2 ብለው ይላኩ";

         
		     sendSMS($MS,$sender,8680);
		     sendSMS($MS_amh,$sender,8680);
			 	    $status="more1";

			 }
	elseif($sms=="more2")
	
	
	{
	     $dat=nextmonth("Y-m-d");	
         mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");

$MS='More services...
5 for amharic word of the day
18 for football facts
19 for rules of the game
21 for english words
23 for flitawi word';

$MS_amh="ለአማርኛ የቀኑቃል 5
ለእስፓርት እውነታዎች 18
ለእግርኳስ ህጎች 19
ለእንግሊዘኛ ቃላት 21
ለፈሊጣዊ አነጋገሮች 23
ብለው ይላኩ";
         
		     sendSMS($MS,$sender,8680);
		     sendSMS($MS_amh,$sender,8680);
			 	    $status="more2";

			 }
	
	
	
elseif($sms=="hulum") 
	   {
	      $dat = nextmonth("Y-m-d");
		     mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
		   $enddat=nextmonth($dat);
		 
		  $sql_delete = mysql_query("DELETE FROM `customers_in2` WHERE `Number`='$sender';");
	 mysql_query("INSERT INTO `customers_in2`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', 'Famous Quotes'),(0, '$sender', '$dat', '$enddat', '1', 'Qene'),(0, '$sender', '$dat', '$enddat', '1', 'General Knowledge'),(0, '$sender', '$dat', '$enddat', '1', 'Teret ena Misale'),(0, '$sender', '$dat', '$enddat', '1', 'Enkoklesh'),(0, '$sender', '$dat', '$enddat', '1', 'Amharic Word of the Day'),(0, '$sender', '$dat', '$enddat', '1', 'World History'),(0, '$sender', '$dat', '$enddat', '1', 'Science and technology'),(0, '$sender', '$dat', '$enddat', '1', 'Guinness book of records'),(0, '$sender', '$dat', '$enddat', '1', 'Zenqe'),(0, '$sender', '$dat', '$enddat', '1', 'Tourism by text'),(0, '$sender', '$dat', '$enddat', '1', 'famous People life experience'),(0, '$sender', '$dat', '$enddat', '1', 'Amharic Proverbs'),(0, '$sender', '$dat', '$enddat', '1', 'Amharic Zayba'),(0, '$sender', '$dat', '$enddat', '1', 'Amazing facts'),(0, '$sender', '$dat', '$enddat', '1', 'Rules'),(0, '$sender', '$dat', '$enddat', '1', 'Football facts'),(0, '$sender', '$dat', '$enddat', '1', 'Rules of the game'),(0, '$sender', '$dat', '$enddat', '1', 'English words'),(0, '$sender', '$dat', '$enddat', '1', 'flitawi word');");
		 
		 $MS='Dear Customer, You have subscribed to all of The Services.';
		 $MS_amh='ክቡር ደንበኛችን ለሁሉም አገልግሎቶች ተመዝግበዋል';

         
		     sendSMS($MS,$sender,8680);
		     sendSMS($MS_amh,$sender,8680);
			 	    $status="hulum";

			 }

	   elseif($sms=="all") 
	    $status="all";
	elseif($sms=="stop")
		 $status="remove";
	    //$status="ALL";
		
	elseif($sms=="chk")
	{  $chq= mysql_query("SELECT * FROM `customers_in2`");
	  $chq_no=mysql_num_rows($chq);
	  if ($sender=="251912655466") {
	 sendSMS($chq_no, $sender, 8680);
	$status="chk";}
	elseif ( $sender=="251910302822")
	{
	$chq_no2=$chq_no;
	sendSMS($chq_no2, $sender, 8680);
	//sendSMS8680($chq_no2, $sender, 8680);
	$status="chk";}
	elseif ( $sender=="251911226165")
	{
	$chq_no2=$chq_no;
	sendSMS($chq_no2, $sender, 8680);
	//sendSMS8680($chq_no2, $sender, 8680);
	$status="chk";}
	
	else {
	$rmsg="This service is available only for Yokida Sport staff members.";
	sendSMS($rmsg, $sender, 8680) ;
	  $status="chk";
	     }
	  }
	  
	 
	elseif($sms=="ok")
	 {
	    $dat = nextmonth("Y-m-d");
	 mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
	    $MS='Welcome! Subscribe and broaden your knowledge. Send:
1 for General Knowledge
2 for Famous Quotes 
3 for teret ena misale
4 for enkoklesh
6 for qene
Price 1ETB/Msg;
For more Service, Send MORE';
$MS_amh="ለአገልግሎታችን ተመዝግበው እውቀቶን ያስፉ
ለጠቅላላ እውቀት 1
ለታዋቂ ሰዎች አባባል 2
ለተረት እና ምሳሌ 3
ለእንቆቅልሽ 4
ለቅኔ 6
ለተጨማሪ አገልግሎት MORE ብለው ይላኩ";

		     sendSMS($MS,$sender,8680);
		     sendSMS($MS_amh,$sender,8680);
			$status="ok";

			 }
		 
	 else
	 {
      //Correct key word for remove
       $sql_Cancel=mysql_query("SELECT * FROM `services2` WHERE key2 LIKE '$sms'");
       $row_Cancel = mysql_fetch_row($sql_Cancel);
       if(mysql_num_rows($sql_Cancel)!=0)  
	       $status="remove";
	   else   //correct keyword for subscribe
         {
           $correct_key=mysql_query("SELECT Service,Aname,key2 FROM `services2` WHERE `key` ='$sms'");
           if(mysql_num_rows($correct_key)!=0) 
		      $status="CorrectKey";
		   else
	          $status="ErrorKey";
       
		 }
     }	
	
switch ($status)
	 {
	 case "more": 
	       
	  break;
	   case "more1": 
	       
	  break;
	  
	  case "more2": 
	       
	  break;
	  case "hulum":
	  break;
	 
	  case "ok": 
	       
	  break;
	  
	  case "chk":
	  break;
	   
	  case "all": 
	        ALL($sender);
	  break;
	  
	  case "remove": 
	         Remove($sender,$sms);
	  break;
	  case "CorrectKey":   //if customer found
	    $dat = nextmonth("Y-m-d");
		mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
	      $det=mysql_fetch_row($correct_key);
		  $service=$det[0];
	  	  $Aname=$det[1];
		  $key2=$det[2];
		  	$key2=str_replace("ALL",'',$key2);
	      $srh=mysql_query("SELECT Enddate FROM `customers_in2` WHERE `Number` = '$sender' AND `Service` = '$service'");	
          if(mysql_num_rows($srh) > 0)    // Number is found
           { 
		     $row = mysql_fetch_row($srh);
             $d=$row[0];    $enddat=nextmonth($d);
             $sqlQuery3 =mysql_query("UPDATE `customers_in2` SET Enddate= '$enddat', NumSMS = NumSMS +1,flag='Postpaid' WHERE Number='$sender' and Service='$service'"); 
             $MS="Welcome to Infocell Technologies! You have already subscribed for $service Service. For more services, send MORE";
             $MS_amh="ለ$service አገልግሎት ቀደም ብለው ተመዝግበዋል::
			 
ተጨማሪ አገልግሎት ይፈለጋሉ？
MORE ብለው ይላኩ
ስለመረጡን ደስ ብሎናል";
		     sendSMS($MS,$sender,8680);
		     sendSMS($MS_amh,$sender,8680);
		     // echo $MS." correct Re-new";
           }
	     else // number not found
	       {
		    $dat = nextmonth("Y-m-d");。+
			
		    $enddat=nextmonth($dat);
	    	mysql_query("INSERT INTO `customers_in2`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
            $MS="Welcome to Infocell Technologies! You have subscribed for $service Service. You will be charged 1ETB when you receive news. For more services, send MORE. To unsubscribe send $key2";
			$MS_amh="ለ$service አገልግሎት ተመዝግበዋል
ተጨማሪ አገልግሎት ይፈለጋሉ? MORE ብለው ይላኩ
ለማቋረጥ $key2 ብለው ይላኩ
ዜና ሲደርሶት ከስልኮ ላይ አንድ ብር ተቆራጭ ይሆናል";
           sendSMS($MS,$sender,8680);
           sendSMS($MS_amh,$sender,8680);
		   $sql_con= mysql_query("SELECT `sms` FROM `first_msg` where type like '$service' order by rand() limit 1");
		  // $row_con = mysql_fetch_row($sql_con);
            //sendSMS($row_con[0],$sender,8442);
		   //echo $row_con[0]." correct new"; 

		  // echo $MS." correct new";
		 }
	   break;
	   case "ErrorKey":
	     $srch=mysql_query("SELECT `Service` FROM `customers_in2` WHERE number ='$sender'");	
	     $rows_exist=mysql_num_rows($srch);
	     if($rows_exist==0) //Not Found
	      {
		   //default case: First subscribe with error key
		   $service="Qene";
		   $dat = nextmonth("Y-m-d");
		   //	mysql_query("INSERT INTO `customers_in`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
		  mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
         $MS='Welcome! Subscribe and broaden your knowledge. Send:
1 for General Knowledge
2 for Famous Quotes 
3 for teret ena misale
4 for enkoklesh
6 for qene
Price 1ETB/Msg;
For more clubs, Send MORE';
$MS_amh="ለአገልግሎታችን ተመዝግበው እውቀቶን ያስፉ
ለጠቅላላ እውቀት 1
ለታዋቂ ሰዎች አባባል 2
ለተረት እና ምሳሌ 3
ለእንቆቅልሽ 4
ለቅኔ 6
ለተጨማሪ አገልግሎት MORE ብለው ይላኩ";
           sendSMS($MS,$sender,8680);
           sendSMS($MS_amh,$sender,8680);
		   $sql_con= mysql_query("SELECT `sms` FROM `first_msg` where type like '$service' order by rand() limit 1");
		  // $row_con = mysql_fetch_row($sql_con);
           //sendSMS($row_con[0],$sender,8442);
           //echo $MS;
	     }
		  elseif($rows_exist<16)    // Number is found and not in all services
		   { 
		    
					  
 $dat = nextmonth("Y-m-d");
		   //	mysql_query("INSERT INTO `customers_in`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
		  mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");

       $MS='Dear Customer, Your Command was not recognized. Send OK to get full description.

Infocell Sport';
$MS_amh="የላኩልንን መልእክት መርዳት አልቻልንም:: የአገልግሎታችንን ዝርዝር ለማግኘት OK ብለው ይላኩ:: ጥያቄ ወይም ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን";
            sendSMS($MS,$sender,8680);
            sendSMS($MS_amh,$sender,8680);
			/*$sql_con= mysql_query("SELECT `sms` FROM `first_msg` where type like '$service' order by rand() limit 1");
		   $row_con = mysql_fetch_row($sql_con);
           sendSMS($row_con[0],$sender,8442);*/
            //echo $MS;	 
		   }
		 else
		  { 
		    //Number is found with removed flag
		    $srch=mysql_query("SELECT `Service` FROM `customers_in2` WHERE number ='$sender' and Flag='Removed'");	
	        $rows_exist=mysql_num_rows($srch);
            
			 $dat = nextmonth("Y-m-d");
		   //	mysql_query("INSERT INTO `customers_in`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
		  mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");

			  //Default renew in one
			  $service="Qene";
			
		      $sqlQuery1 =mysql_query("SELECT Enddate FROM `customers_in2`  WHERE number ='$sender'  And Service ='$service'");
              $row = mysql_fetch_row($sqlQuery1);
              $d=$row[0];
		      if($d<=$dat) $enddat= nextmonth($dat); else $enddat=nextmonth($d);
		      $sqlQuery3 =mysql_query("UPDATE `customers_in2` SET Enddate= '$enddat', NumSMS = NumSMS +1 WHERE Number='$sender' and Service='$service'"); 
              $MS="Dear Customer, You've already Subscribed to all of the Services. If you need any help, please don't hesitate to call us on 0944103601

Infocell Sport";
$MS_amh="ክቡር ደንበኛችን ለሁሉም አገልግሎቶች ተመዝግበዋል:: የላኩልንን መልእክት መርዳት አልቻልንም:: ጥያቄ ወይም ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን ";
		      sendSMS($MS,$sender,8680);
		      sendSMS($MS_amh,$sender,8680);
			  //echo $MS;
		      
			}
		
		  break;
		  
	}
	}
		
	
 ?>