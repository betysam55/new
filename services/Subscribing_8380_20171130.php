<?php
$sender=$_GET['sender'];
$sms=$_GET['sms'];
//$sms="ok";
//$sender="+251912655466";
$s=substr(trim($sms),0,3); //for delivery
$sms=TrimStr($sms);

print $sms;
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
	$str=str_replace("8380",'',$str);
	$str=str_replace("8390",'',$str);
	
	$str=str_replace("አቁም",'stop',$str);
	$str=str_replace("ስቶፕ",'stop',$str);
    $str=str_replace("ምክሮች",'',$str);
	

		
	$str=str_replace("ስለስራ1",'1',$str);
	$str=str_replace("ስለስራ",'1',$str);
	$str=str_replace("ስራ",'1',$str);
	
	
	$str=str_replace("ለማበረታታቻ2",'2',$str);
	$str=str_replace("ለማበረታታቻ",'2',$str);
	$str=str_replace("ማበረታታቻ",'2',$str);
	
	
	$str=str_replace("ለአለምአቀፍድርጅቶች3",'3',$str);
	$str=str_replace("ለአለምአቀፍድርጅቶች",'3',$str);
	$str=str_replace("አለምአቀፍድርጅቶች",'3',$str);
	
	
	$str=str_replace("ለሃገራትባህልናልማዶች4",'4',$str);
	$str=str_replace("ለሃገራትባህልናልማዶች",'4',$str);
	$str=str_replace("ሃገራትባህልናልማዶች",'4',$str);
	
	$str=str_replace("ለሃገራትዋናከተሞች5",'5',$str);
	$str=str_replace("ለሃገራትዋናከተሞች",'5',$str);
	$str=str_replace("ሃገራትዋናከተሞች",'5',$str);
	
	str=str_replace("ከመዝናኛውአለም6",'6',$str);
	$str=str_replace("ከመዝናኛውአለም",'6',$str);
	$str=str_replace("መዝናኛውአለም",'6',$str);
	
	
	$str=str_replace("ለሃገራትመሪዎችናታሪኮቻቸው7",'7',$str);
	$str=str_replace("ለሃገራትመሪዎችናታሪኮቻቸው",'7',$str);
	$str=str_replace("ሃገራትመሪዎችናታሪኮቻቸው",'7',$str);
	
	$str=str_replace("ለቀናትናክብረባሕላት8",'8',$str);
	$str=str_replace("ለቀናትናክብረባሕላት",'8',$str);
	$str=str_replace("ቀናትናክብረባሕላት",'8',$str);
	
	$str=str_replace("ለእድልእናእድለኞች9",'9',$str);
	$str=str_replace("ለእድልእናእድለኞች",'9',$str);
	$str=str_replace("እድልእናእድለኞች",'9',$str);
	
	$str=str_replace("ለወቅታዊመረጃዎች10",'10',$str);
	$str=str_replace("ለወቅታዊመረጃዎች",'10',$str);
	$str=str_replace("ወቅታዊመረጃዎች",'10',$str);
	
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
	$str=str_replace("8380",'',$str);
	$str=str_replace("8390",'',$str);
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
	
	$str=str_replace("1forproductivity",'1',$str);
	$str=str_replace("forproductivity",'1',$str);
	$str=str_replace("1productivity",'1',$str);
	$str=str_replace("productivity",'1',$str);

	
	
	$str=str_replace("2forcommunicationskill",'2',$str);
	$str=str_replace("forcommunicationskill",'2',$str);
	$str=str_replace("2communicationskill",'2',$str);
	$str=str_replace("communicationskill",'2',$str);
	$str=str_replace("communication",'2',$str);
	
	
	$str=str_replace("3forworklife",'3',$str);
	$str=str_replace("forworklife",'3',$str);
	$str=str_replace("worklife",'3',$str);
	$str=str_replace("work",'3',$str);


	$str=str_replace("4formotivationaltips",'4',$str);
	$str=str_replace("formotivationaltips",'4',$str);
	$str=str_replace("motivationaltips",'4',$str);
	$str=str_replace("motivational",'4',$str);
	
	
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
 mysql_query("INSERT INTO `bulk3`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");

$msg_ns="You have not subscribed to any of the services yet. To subscribe, Send:
1 for Work Life tips
2 for Motivational tips
3 for world organisation and their services
4 for nations culture and belief
5 for countries and their capital city
Price 1ETB/msg;
For more services, Send ok";
$msg_amh_ns="ለየትኛውም አገልግሎት አልተመዘገቡም:: ለመመዝገብ
ስለስራ ምክሮች 1
ለማበረታታቻ መልእክቶች 2
ለአለም አቀፍ ድርጅቶችና ስራዎቻቸው 3
ለሃገራት ባህልና ልማዶች 4
ለሃገራት ዋናከተሞች 5
ለተጨማሪ አገልግሎት ok ብለው ይላኩ";

 $sql_found=mysql_query("SELECT Service FROM `customers_in3` WHERE `Number`='$sender'");
 $num_rows=mysql_num_rows($sql_found);

  if($num_rows!=0 && $num_rows<5 )
  { 
  $i=0;
 
while($row_cus=mysql_fetch_row($sql_found)){

$msg1.=$row_cus[$i].', ';
}
    $msg="Dear Customer, You have been subscribed for the following services: 
$msg1";
    $msg_amh="ክቡር ደንበኛችን ከዚህ ቀጥሎ ለተዘረዘሩት አገልግሎቶች ተመዝግበዋል:
$msg1";
$msg2="Do you want to subscribe for all of the services? 
Send SALL
You want more services? 
Send ok 
If you want unsubscribe from all of the services send STOPALL";

$msg2_amh="ለሁሉም አገልግሎቶች መመዝገብ ይፈልጋሉ？
SALL ብለው ይላኩ
ተጨማሪ አገልግሎቶች ይፈለጋሉ？
ok ብለው ይላኩ";
    
	sendSMS($msg,$sender,8380);
	sendSMS($msg_amh,$sender,8380);
	 sleep(10);
 sendSMS($msg2,$sender,8380);
  sendSMS($msg2_amh,$sender,8380);
 //echo $msg1;
 //echo $msg2;
 }
  elseif ( $num_rows>15)
  {
  $msg_all="Dear Customer, You have subscribed to all of infocell Services." ;
  $msg_all_amh="ክቡር ደንበኛችን ለሁሉም አገልግሎቶች ተመዝግበዋል";
	//echo $msg_all;
	sendSMS($msg_all,$sender,8380);
	sendSMS($msg_all_amh,$sender,8380);
	}
	 elseif ($num_rows==0){
    	 sendSMS($msg_ns,$sender,8380);
		  sendSMS($msg_amh_ns,$sender,8380);
		}
	 //echo $msg;
	 
}

function Remove($sender,$sms)
{

 $dat=nextmonth("Y-m-d");	
 mysql_query("INSERT INTO `bulk3`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
 
$sql_found=mysql_query("SELECT `Number` ,`Service` FROM `customers_in3` WHERE `Number` LIKE '$sender'");
$row_found = mysql_fetch_row($sql_found);
if(mysql_num_rows($sql_found)!=0)
   {
    if($sms=="stop")
	       {
		     $sql_all=mysql_query("select `Service` from `customers_in3` WHERE `Number` LIKE '$sender'");
              while($row_all=mysql_fetch_row($sql_all))
                {
                $d1=$row_all[0];
			
				$in= mysql_query("INSERT INTO `customers_out3` values('$sender' ,'$d1','$dat')");
	             }
				
		     $sqlQuery3 =mysql_query("delete from `customers_in3` WHERE Number='$sender'"); 
		     $MS=" You have unsubscribed from all of your Services. 

 If you have any suggestions, please don't hesitate to call us on 0944103601.";
			$MS_amh="ሁሉንም የኢፎሴል አግልግሎት አቋርጠዋል:: ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን";
	        sendSMS($MS,$sender,8380);
			 sendSMS($MS_amh,$sender,8380);
			
          }
		 else
	 {
     $sc=mysql_query("SELECT `Service`,`Aname`, `key` FROM `services3` WHERE `key2`like '$sms'");//select to service 
	 $row = mysql_fetch_row($sc);
     $d1=$row[0];
	 $name=$row[1];
	 $reg_id=$row[2];
	 $sql_InService=mysql_query("select * from `customers_in3` WHERE `Number` LIKE '$sender' and `Service` LIKE '$d1' and Flag='Postpaid'");
     if(mysql_num_rows($sql_InService)!=0)
       {
	    
	     $in= mysql_query("INSERT INTO `customers_out3` values('$sender' ,'$d1','$dat')");
	     //$sqlQuery3 =mysql_query("UPDATE `customers_in` SET Enddate= '$dat',flag = 'Removed' WHERE Number='$sender' and Service='$d1'"); 
	     $sqlQuery3 =mysql_query("delete from `customers_in3` WHERE Number='$sender' and Service='$d1'"); 
		 
		 $MS=" You have unsubscribed from $name News Service. If you would like to subscribe back send $reg_id. If you have any suggestions, please don't hesitate to call us on 0944103601. ";
 $MS_amh="የ$name ዜና አገልግሎት ደንበኝነቶን አቋርጠዋል:: በድጋሚ ለመመዝገብ ከፈለጉ $reg_id ብለው ይላኩ:: ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን";
	    // echo $MS;
		 
         sendSMS($MS,$sender,8380);
		  sendSMS($MS_amh,$sender,8380);
	   }
	    else
	   {
         $MS="To unsubscribe 
Send STOP followed by one of the following keywords 
example STOP7
1 for Work Life tips
2 for Motivational tips
3 for world organisation and their services
4 for nations culture and belief
5 for countries and their capital city";
		// echo $MS;
		 sendSMS($MS,$sender,8380);
		}
	}
}	
		 else
		 {
           $MS="Would you like to subscribe? Use the following keywords:
1 for Work Life tips
2 for Motivational tips
3 for world organisation and their services
4 for nations culture and belief
5 for countries and their capital city
For more services, Send more";
          // echo $MS;
$msg_amh="ለየትኛውም አገልግሎት አልተመዘገቡም:: ለመመዝገብ
ስለስራ ምክሮች 1
ለማበረታታቻ መልእክቶች 2
ለአለም አቀፍ ድርጅቶችና ስራዎቻቸው 3
ለሃገራት ባህልና ልማዶች 4
ለሃገራት ዋናከተሞች 5
ለተጨማሪ አገልግሎቶች more ብለው ይላኩ";
		  sendSMS($MS,$sender,8380);
		  sendSMS($msg_amh,$sender,8380);
		 }

}




//*************************---Start---********************************
$status=0;
if($s!="id:")
   {
    
     if($sms=="more") 
	   {
	    $dat=nextmonth("Y-m-d");	
 mysql_query("INSERT INTO `bulk3`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
 
	     $MS='More services...
6 for entertainment
7 for world leaders and their story
8 for days and celebrations
9 for luck and lucky people
10 for latest news
For More services send ok';

$MS_amh="ከመዝናኛው አለም 6
ለሃገራት መሪዎችና ታሪኮቻቸው 7
ለቀናትና ክብረባሕላት 8
ለእድል እና እድለኞች 9
ለወቅታዊ መረጃዎች 10
ለሌሎች አገልግሎቶች ok ብለው ይላኩ";

         
		     sendSMS($MS,$sender,8680);
		     sendSMS($MS_amh,$sender,8680);
			 	    $status="more";

			 }
elseif($s!="id:")
   {
    if($sms=="hulum") 
	   {
	      $dat = nextmonth("Y-m-d");
		     mysql_query("INSERT INTO `bulk3`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
		   $enddat=nextmonth($dat);
		 
		  $sql_delete = mysql_query("DELETE FROM `customers_in3` WHERE `Number`='$sender';");
	 mysql_query("INSERT INTO `customers_in3`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', 'world organisation and their services'),(0, '$sender', '$dat', '$enddat', '1', 'nations culture and belief'),(0, '$sender', '$dat', '$enddat', '1', 'countries and their capital city'),(0, '$sender', '$dat', '$enddat', '1', 'entertainment'),(0, '$sender', '$dat', '$enddat', '1', 'world leaders and their story'),(0, '$sender', '$dat', '$enddat', '1', 'days and celebrations'),(0, '$sender', '$dat', '$enddat', '1', 'luck and lucky people'),(0, '$sender', '$dat', '$enddat', '1', 'latest news'),(0, '$sender', '$dat', '$enddat', '1', 'Work Life tips'),(0, '$sender', '$dat', '$enddat', '1', 'Motivational tips');");	 
		 
		 
		 $MS='Dear Customer, You have subscribed to all of The Services.';
		 $MS_amh='ክቡር ደንበኛችን ለሁሉም አገልግሎቶች ተመዝግበዋል';

         
		     sendSMS($MS,$sender,8380);
		     sendSMS($MS_amh,$sender,8380);
			 	    $status="hulum";

			 }

	   elseif($sms=="all") 
	    $status="all";
	elseif($sms=="stop")
		 $status="remove";
	    //$status="ALL";
		
	elseif($sms=="chk")
	{  $chq= mysql_query("SELECT * FROM `customers_in3`");
	  $chq_no=mysql_num_rows($chq);
	  if ($sender=="251912655466") {
	 sendSMS($chq_no, $sender, 8380);
	$status="chk";}
	elseif ( $sender=="251910302822")
	{
	$chq_no2=$chq_no;
	sendSMS($chq_no2, $sender, 8380);
	//sendSMS8380($chq_no2, $sender, 8380);
	$status="chk";}
	elseif ( $sender=="251911226165")
	{
	$chq_no2=$chq_no;
	sendSMS($chq_no2, $sender, 8380);
	//sendSMS8380($chq_no2, $sender, 8380);
	$status="chk";}
	
	else {
	$rmsg="This service is available only for infocell staff members.";
	sendSMS($rmsg, $sender, 8380) ;
	  $status="chk";
	     }
	  }
	elseif($sms=="ok")
	 {
	    $dat = nextmonth("Y-m-d");
	 mysql_query("INSERT INTO `bulk3`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
	    $MS='Welcome! Subscribe to get Latest tips. Send:
1 for Work Life tips
2 for Motivational tips
3 for world organisation and their services
4 for nations culture and belief
5 for countries and their capital city
Price 1ETB/Msg;
For more services, Send more';
$MS_amh="የሚፈልጉትን አገልግሎት ተመዝግበው ይገልገሉ
ስለስራ ምክሮች 1
ለማበረታታቻ መልእክቶች 2
ለአለም አቀፍ ድርጅቶችና ስራዎቻቸው 3
ለሃገራት ባህልና ልማዶች 4
ለሃገራት ዋናከተሞች 5
ለተጨማሪ አገልግሎት more ብለው ይላኩ";

		     sendSMS($MS,$sender,8380);
		     sendSMS($MS_amh,$sender,8380);
			$status="ok";

			 }
		 
	 else
	 {
      //Correct key word for remove
       $sql_Cancel=mysql_query("SELECT * FROM `services3` WHERE key2 LIKE '$sms'");
       $row_Cancel = mysql_fetch_row($sql_Cancel);
       if(mysql_num_rows($sql_Cancel)!=0)  
	       $status="remove";
	   else   //correct keyword for subscribe
         {
           $correct_key=mysql_query("SELECT Service,Aname,key2 FROM `services3` WHERE `key` ='$sms'");
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
		mysql_query("INSERT INTO `bulk3`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
	      $det=mysql_fetch_row($correct_key);
		  $service=$det[0];
	  	  $Aname=$det[1];
		  $key2=$det[2];
		  	$key2=str_replace("ALL",'',$key2);
	      $srh=mysql_query("SELECT Enddate FROM `customers_in3` WHERE `Number` = '$sender' AND `Service` = '$service'");	
          if(mysql_num_rows($srh) > 0)    // Number is found
           { 
		     $row = mysql_fetch_row($srh);
             $d=$row[0];    $enddat=nextmonth($d);
             $sqlQuery3 =mysql_query("UPDATE `customers_in3` SET Enddate= '$enddat', NumSMS = NumSMS +1,flag='Postpaid' WHERE Number='$sender' and Service='$service'"); 
             $MS="Welcome to Infocell Technologies! You have already subscribed for $service tips Service. For more Service, send ok";
             $MS_amh="ለ$service የቲፕ አገልግሎት ቀደም ብለው ተመዝግበዋል::
			 
ተጨማሪ አገልግሎት ይፈለጋሉ？
ok ብለው ይላኩ
ስለመረጡን ደስ ብሎናል";
		     sendSMS($MS,$sender,8380);
		     sendSMS($MS_amh,$sender,8380);
		     // echo $MS." correct Re-new";
           }
	     else // number not found
	       {
		    $dat = nextmonth("Y-m-d");。+
			
		    $enddat=nextmonth($dat);
	    	mysql_query("INSERT INTO `customers_in3`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
            $MS="Welcome to Infocell Technologies! You have subscribed for $service tips Service. You will be charged 1ETB when you receive tip. For more service, send ok. To unsubscribe send $key2";
			$MS_amh="ለ$service አገልግሎት ተመዝግበዋል
ተጨማሪ አገልግሎት ይፈለጋሉ? ok ብለው ይላኩ
ለማቋረጥ $key2 ብለው ይላኩ
አገልግሎት ሲደርሶት ከስልኮ ላይ አንድ ብር ተቆራጭ ይሆናል";
           sendSMS($MS,$sender,8380);
           sendSMS($MS_amh,$sender,8380);
		   $sql_con= mysql_query("SELECT `sms` FROM `first_msg` where type like '$service' order by rand() limit 1");
		  // $row_con = mysql_fetch_row($sql_con);
            //sendSMS($row_con[0],$sender,8442);
		   //echo $row_con[0]." correct new"; 

		  // echo $MS." correct new";
		 }
	   break;
	   case "ErrorKey":
	     $srch=mysql_query("SELECT `Service` FROM `customers_in3` WHERE number ='$sender'");	
	     $rows_exist=mysql_num_rows($srch);
	     if($rows_exist==0) //Not Found
	      {
		   //default case: First subscribe with error key
		   $service="Arsenal";
		   $dat = nextmonth("Y-m-d");
		   //	mysql_query("INSERT INTO `customers_in`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
		  mysql_query("INSERT INTO `bulk3`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
         $MS='Welcome! Subscribe to get Latest tips. Send:
1 for Work Life tips
2 for Motivational tips
3 for world organisation and their services
4 for nations culture and belief
5 for countries and their capital city
Price 1ETB/Msg;
For more services, Send more';
$MS_amh="ለሚፈልጉት አገልግሎት ይመዝገቡ
ስለስራ ምክሮች 1
ለማበረታታቻ መልእክቶች 2
ለአለም አቀፍ ድርጅቶችና ስራዎቻቸው 3
ለሃገራት ባህልና ልማዶች 4
ለሃገራት ዋናከተሞች 5
ለተጨማሪ አገልግሎት more ብለው ይላኩ";
           sendSMS($MS,$sender,8380);
           sendSMS($MS_amh,$sender,8380);
		   $sql_con= mysql_query("SELECT `sms` FROM `first_msg` where type like '$service' order by rand() limit 1");
		  // $row_con = mysql_fetch_row($sql_con);
           //sendSMS($row_con[0],$sender,8442);
           //echo $MS;
	     }
		  elseif($rows_exist<16)    // Number is found and not in all services
		   { 
		    
					  
 $dat = nextmonth("Y-m-d");
		   //	mysql_query("INSERT INTO `customers_in`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
		  mysql_query("INSERT INTO `bulk3`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");

       $MS='Dear Customer, Your Command was not recognized. Send OK to get full description.

Infocell Sport';
$MS_amh="የላኩልንን መልእክት መርዳት አልቻልንም:: የአገልግሎታችንን ዝርዝር ለማግኘት OK ብለው ይላኩ:: ጥያቄ ወይም ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን";
            sendSMS($MS,$sender,8380);
            sendSMS($MS_amh,$sender,8380);
			/*$sql_con= mysql_query("SELECT `sms` FROM `first_msg` where type like '$service' order by rand() limit 1");
		   $row_con = mysql_fetch_row($sql_con);
           sendSMS($row_con[0],$sender,8442);*/
            //echo $MS;	 
		   }
		 else
		  { 
		    //Number is found with removed flag
		    $srch=mysql_query("SELECT `Service` FROM `customers_in3` WHERE number ='$sender' and Flag='Removed'");	
	        $rows_exist=mysql_num_rows($srch);
            
			 $dat = nextmonth("Y-m-d");
		   //	mysql_query("INSERT INTO `customers_in3`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
		  mysql_query("INSERT INTO `bulk3`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");

			  //Default renew in one
			  $service="Arsenal";
			
		      $sqlQuery1 =mysql_query("SELECT Enddate FROM `customers_in3`  WHERE number ='$sender'  And Service ='$service'");
              $row = mysql_fetch_row($sqlQuery1);
              $d=$row[0];
		      if($d<=$dat) $enddat= nextmonth($dat); else $enddat=nextmonth($d);
		      $sqlQuery3 =mysql_query("UPDATE `customers_in3` SET Enddate= '$enddat', NumSMS = NumSMS +1 WHERE Number='$sender' and Service='$service'"); 
              $MS="Dear Customer, You've already Subscribed to all of the Services. If you need any help, please don't hesitate to call us on 0944103601

Infocell Sport";
$MS_amh="ክቡር ደንበኛችን ለሁሉም ክለቦች ተመዝግበዋል:: የላኩልንን መልእክት መርዳት አልቻልንም:: ጥያቄ ወይም ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን ";
		      sendSMS($MS,$sender,8380);
		      sendSMS($MS_amh,$sender,8380);
			  //echo $MS;
		      
			}
		
		  break;
		  
	}
	}
		
	
 ?>