<?php
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
	$str=str_replace("ስቶፕ",'stop',$str);
	
	$str=str_replace("ለቅኔ1",'1',$str);
	$str=str_replace("ቅኔ1",'1',$str);
	$str=str_replace("ለቅኔ",'1',$str);
	$str=str_replace("ቅኔ",'1',$str);
 

	$str=str_replace("ለጠቅላላእውቀት2",'2',$str);
   	$str=str_replace("ለጠቅላላእውቀት",'2',$str);
	$str=str_replace("ጠቅላላእውቀት2",'2',$str);
	$str=str_replace("2ለጠቅላላእውቀት",'2',$str);
	$str=str_replace("ለጠቅላላእውቀት",'2',$str);
	
		
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
	
	$str=str_replace("ለታዋቂሰዎችአባባል6",'6',$str);
	$str=str_replace("ለታዋቂሰዎችአባባል",'6',$str);
	$str=str_replace("ታዋቂሰዎችአባባል6",'6',$str);
	$str=str_replace("6ታዋቂሰዎችአባባል",'6',$str);
	$str=str_replace("ታዋቂሰዎችአባባል",'6',$str);
	
	
	
	
   $str = trim($str);
	$str = strtolower($str);
	//$str = preg_replace('/\s+/','',$str);
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
	
	
	
	$str=str_replace("1forqene",'1',$str);
	$str=str_replace("forqene",'1',$str);
	$str=str_replace("1qene",'1',$str);
	$str=str_replace("qene1",'1',$str);
	$str=str_replace("qene",'1',$str);
	
	
	$str=str_replace("2forgeneralknowledge",'2',$str);
	$str=str_replace("forgeneralknowledge",'2',$str);
	$str=str_replace("2generalknowledge",'2',$str);
	$str=str_replace("generalknowledge2",'2',$str);
	$str=str_replace("generalknowledge",'2',$str);
	$str=str_replace("gk",'2',$str);
	
	
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

	
	$str=str_replace("6forfamousquotes",'6',$str);
	$str=str_replace("forfamousquotes",'6',$str);
	$str=str_replace("6famousquotes",'6',$str);
	$str=str_replace("famousquotes6",'6',$str);
	$str=str_replace("famousquotes",'6',$str);
	
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
	$str=str_replace("0",'stop',$str);
	$str=str_replace("stop",'whatwasthatagain',$str);
	$str=str_replace("o",'whatwasthatagain',$str);
	$str=str_replace("whatwasthatagain",'stop',$str);
	$str=str_replace("OK",'ok',$str);
	
	
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
							$nextmonth = mktime(0,0,0,date("$m"),date("$d")+165,date("$Y"));
                            $EndTime2=date("Y-m-d",$nextmonth);  
						    return $EndTime2;
}	
	
function ALL($sender)
{
$sms="all";
$dat = nextmonth("Y-m-d");
mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
$msg="You have not subscribed to any of the services yet. To subscribe, Send:
1 for Qene
2 for General Knowledge
3 for Teret ena Misale
4 for Enkoklesh
5 for Amharic Word of the Day
6 for Famous Quotes 
Price 1ETB/msg;";
$msg_amh="ለየትኛውም አገልግሎት አልተመዘገቡም:: ለመመዝገብ
ለቅኔ 1
ለጠቅላላ እውቀት 2
ለተረት እና ምሳሌ 3
ለእንቆቅልሽ 4
ለአማርኛ የቀኑ ቃል 5
ለታዋቂ ሰዎች አባባል 6
ዋጋ 1ብር/መልእክት";

 $sql_found=mysql_query("SELECT Service FROM `customers_in2` WHERE `Number`='$sender' AND `Flag` = 'Postpaid'");
 $num_rows=mysql_num_rows($sql_found);

  if($num_rows!=0 && $num_rows<5 )
  { 
  $i=0;
 
while($row_cus=mysql_fetch_row($sql_found)){

$msg1.=$row_cus[$i].', ';
}
    $msg="Dear Customer, You have been subscribed for the following Services: 
$msg1";
    $msg_amh="ክቡር ደንበኛችን ከዚህ ቀጥሎ ለተዘረዘሩት አገልግሎቶች ተመዝግበዋል:
$msg1";
$msg2="Do you want to subscribe for all of the services? 
Send SALL
You want more services? 
Send OK 
If you want unsubscribe from all of the services send STOPALL";

$msg2_amh="ለሁሉም አገልግሎቶች መመዝገብ ይፈልጋሉ？
SALL ብለው ይላኩ
ተጨማሪ ክለቦችን ይፈለጋሉ？
OK ብለው ይላኩ";
    
	//sendSMS($msg,$sender,8680);
	//sendSMS($msg_amh,$sender,8680);
	 sleep(10);
 sendSMS($msg2,$sender,8680);
  sendSMS($msg2_amh,$sender,8680);
  
 //echo $msg1;
 //echo $msg2;
 }
  elseif ( $num_rows>5)
  {
  $msg_all="Dear Customer, You have subscribed to all of Yokida's  Services." ;
  $msg_all_amh="ክቡር ደንበኛችን ለሁሉም አገልግሎቶች ተመዝግበዋል";
	//echo $msg_all;
	sendSMS($msg_all,$sender,8680);
	sendSMS($msg_all_amh,$sender,8680);
	}
	 else 
    	 sendSMS($msg,$sender,8680);
		  sendSMS($msg_amh,$sender,8680);
	 //echo $msg;
	 
}

function Remove($sender,$sms)
{
 $dat=nextmonth("Y-m-d");	 
$sql_found=mysql_query("SELECT `Number` ,`Service` FROM `customers_in2` WHERE `Number` LIKE '$sender'");
$row_found = mysql_fetch_row($sql_found);
mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
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
			$MS_amh="ሁሉንም የዮኪዳ አግልግሎት አቋርጠዋል:: ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን";
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
	     //$sqlQuery3 =mysql_query("UPDATE `customers_in2` SET Enddate= '$dat',flag = 'Removed' WHERE Number='$sender' and Service='$d1'"); 
	     $sqlQuery3 =mysql_query("delete from `customers_in2` WHERE Number='$sender' and Service='$d1'"); 
		 
		 $MS=" You have unsubscribed from $name Service. If you would like to subscribe back send $reg_id. If you have any suggestions, please don't hesitate to call us on 0944103601. ";
 $MS_amh="ከ$name አገልግሎት ደንበኝነቶን አቋርጠዋል:: በድጋሚ ለመመዝገብ ከፈለጉ $reg_id ብለው ይላኩ:: ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን";
	    // echo $MS;
		 
         sendSMS($MS,$sender,8680);
		  sendSMS($MS_amh,$sender,8680);
	   }
	    else
	   {
         $MS="To unsubscribe 
Send STOP followed by one of the following keywords 
example STOP7
1 for Qene
2 for General Knowledge
3 for Teret ena Misale
4 for Enkoklesh
5 for Amharic Word of the Day
6 for Famous Quotes";
		// echo $MS;
		 sendSMS($MS,$sender,8680);
		}
	}
}	
		 else
		 {
           $MS="You have not subscribed yet. Would you like to subscribe? Use the following keywords:
1 for Qene
2 for General Knowledge
3 for Teret ena Misale
4 for Enkoklesh
5 for Amharic Word of the Day
6 for Famous Quotes";
          // echo $MS;
$msg_amh="ለየትኛውም አገልግሎት አልተመዘገቡም:: ለመመዝገብ
ለቅኔ 1
ለጠቅላላ እውቀት 2
ለተረት እና ምሳሌ 3
ለእንቆቅልሽ 4
ለአማርኛ የቀኑ ቃል 5
ለታዋቂ ሰዎች አባባል 6";
		  sendSMS($MS,$sender,8680);
		  sendSMS($msg_amh,$sender,8680);
		 }

}




//*************************---Start---********************************
$status=0;

if($s!="id:")
   {
    

if($sms=="hulum") 
	   {
	      $dat = nextmonth("Y-m-d");
		  mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
		   $enddat=nextmonth($dat);
		  $sql_delete = mysql_query("DELETE FROM `customers_in2` WHERE `Number`='$sender';");
	 mysql_query("INSERT INTO `customers_in2`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', 'Qene'),(0, '$sender', '$dat', '$enddat', '1', 'General Knowledge'),(0, '$sender', '$dat', '$enddat', '1', 'Teret ena Misale'),(0, '$sender', '$dat', '$enddat', '1', 'Enkoklesh'),(0, '$sender', '$dat', '$enddat', '1', 'Amharic Word of the Day');");		 
		 
		 
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
	sendSMS($chq_no, $sender, 8680);
	//sendSMS8680($chq_no2, $sender, 8680);
	$status="chk";}
	elseif ( $sender=="251912650515")
	{
	sendSMS($chq_no, $sender, 8680);
	//sendSMS8680($chq_no2, $sender, 8680);
	$status="chk";}
	
	else {
	$rmsg="This service is available only for Yokida  staff members.";
	sendSMS($rmsg, $sender, 8680) ;
	  $status="chk";
	     }
	  }
	elseif($sms=="ok")
	 {
	 $dat = nextmonth("Y-m-d");
		  mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
	    $MS="Welcome! Subscribe and broaden your knowledge. Send:
1 for Qene
2 for General Knowledge
3 for Teret ena Misale
4 for Enkoklesh
5 for Amharic Word of the Day
6 for Famous Quotes
Price 1ETB/msg";

$MS_amh="ለአገልግሎታችን ተመዝግበው እውቀቶን ያስፉ።
ለቅኔ 1
ለጠቅላላ እውቀት 2
ለተረት እና ምሳሌ 3
ለእንቆቅልሽ 4
ለአማርኛ የቀኑ ቃል 5
ለታዋቂ ሰዎች አባባል 6
ዋጋ 1ብር/መልእክት";

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
	      $det=mysql_fetch_row($correct_key);
		  $service=$det[0];
	  	  $Aname=$det[1];
		  $key2=$det[2];
		  	$key2=str_replace("ALL",'',$key2);
			$dat = nextmonth("Y-m-d");
		  mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
	      $srh=mysql_query("SELECT Enddate FROM `customers_in2` WHERE `Number` = '$sender' AND `Service` = '$service'");	
          if(mysql_num_rows($srh) > 0)    // Number is found
           { 
		     $row = mysql_fetch_row($srh);
             $d=$row[0];    $enddat=nextmonth($d);
             $sqlQuery3 =mysql_query("UPDATE `customers_in2` SET Enddate= '$enddat', NumSMS = NumSMS +1,flag='Postpaid' WHERE Number='$sender' and Service='$service'"); 
             $MS="Welcome to Yokida! You have already subscribed for $service Service.";
             $MS_amh="ለ$service አገልግሎት ቀደም ብለው ተመዝግበዋል::
			 
ተጨማሪ አገልግሎት ይፈለጋሉ？
OK ብለው ይላኩ
ስለመረጡን ደስ ብሎናል";
		     sendSMS($MS,$sender,8680);
		     sendSMS($MS_amh,$sender,8680);
		     // echo $MS." correct Re-new";
           }
	     else // number not found
	       {
		    $dat = nextmonth("Y-m-d");
		    $enddat=nextmonth($dat);
	    	mysql_query("INSERT INTO `customers_in2`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
            $MS="Welcome to Yokida! You have subscribed for $service Service. You will be charged 1ETB when you receive message. For more services, send OK. To unsubscribe send $key2";
			$MS_amh="ለ$service አገልግሎት ተመዝግበዋል
ተጨማሪ አገልግሎት ይፈለጋሉ? OK ብለው ይላኩ
ለማቋረጥ $key2 ይጠቀሙ
መልእክት ሲደርሶት ከስልኮ ላይ አንድ ብር ተቆራጭ ይሆናል";
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
		 $dat = nextmonth("Y-m-d");
		  mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
	     if($rows_exist==0) //Not Found
	      {
		   //default case: First subscribe with error key
		   $service="Qene";
		   //	mysql_query("INSERT INTO `customers_in2`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
		 // mysql_query("INSERT INTO `bulk2`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
    	    $MS="Welcome! Subscribe and broaden your knowledge. Send:
1 for Qene
2 for General Knowledge
3 for Teret ena Misale
4 for Enkoklesh
5 for Amharic Word of the Day
6 for Famous Quotes
Price 1ETB/msg";

$MS_amh="ለአገልግሎታችን ተመዝግበው እውቀቶን ያስፉ።
ለቅኔ 1
ለጠቅላላ እውቀት 2
ለተረት እና ምሳሌ 3
ለእንቆቅልሽ 4
ለአማርኛ የቀኑ ቃል 5
ለታዋቂ ሰዎች አባባል 6
ዋጋ 1ብር/መልእክት";
           sendSMS($MS,$sender,8680);
           sendSMS($MS_amh,$sender,8680);
		   $sql_con= mysql_query("SELECT `sms` FROM `first_msg` where type like '$service' order by rand() limit 1");
		  // $row_con = mysql_fetch_row($sql_con);
           //sendSMS($row_con[0],$sender,8442);
           //echo $MS;
	     }
		  elseif($rows_exist<5)    // Number is found and not in all services
		   { 
		    
					  

       $MS='Dear Customer, Your Command was not recognized. Send OK to get full description.

Yokida Consult';
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
            
			
			  //Default renew in one
			  $service="Qene";
			
		      $sqlQuery1 =mysql_query("SELECT Enddate FROM `customers_in2`  WHERE number ='$sender'  And Service ='$service'");
              $row = mysql_fetch_row($sqlQuery1);
              $d=$row[0];
		      if($d<=$dat) $enddat= nextmonth($dat); else $enddat=nextmonth($d);
		      $sqlQuery3 =mysql_query("UPDATE `customers_in2` SET Enddate= '$enddat', NumSMS = NumSMS +1 WHERE Number='$sender' and Service='$service'"); 
              $MS="Dear Customer, You've already Subscribed to all of the Services. If you need any help, please don't hesitate to call us on 0944103601

Yokida Consult";
$MS_amh="ክቡር ደንበኛችን ለሁሉም አገልግሎቶች ተመዝግበዋል:: የላኩልንን መልእክት መርዳት አልቻልንም:: ጥያቄ ወይም ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን ";
		      sendSMS($MS,$sender,8680);
		      sendSMS($MS_amh,$sender,8680);
			  //echo $MS;
		      
			}
		
		  break;
		  
	}
	}
		
	
 ?>