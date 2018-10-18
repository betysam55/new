<?php 
 include("connection.php");



 $id=$_POST['id'];
 $number=$_POST['number'];


$sms_send_sql=	"SELECT DISTINCT(number) FROM `customers_in3` WHERE Service ='test Kenema' AND `status` = 1";




if(!array_key_exists('productivity_tips', $_POST))
{$productivity_tips=0;}
else{$productivity_tips=$_POST['productivity_tips'];
$sms_send_sql=$sms_send_sql."  OR  Service = 'Productivity tips'";
}

if(!array_key_exists('communication_skill_tips', $_POST))
{$communication_skill_tips=0;}
else{$communication_skill_tips=$_POST['communication_skill_tips'];

$sms_send_sql=$sms_send_sql."  OR  Service = 'Communication Skill Tips'";
}

if(!array_key_exists('work_life_tips', $_POST))
{$work_life_tips=0;}
else{$work_life_tips=$_POST['work_life_tips'];
$sms_send_sql=$sms_send_sql."  OR  Service = 'Work Life Tips'";
}


if(!array_key_exists('motivational_tips', $_POST))
{$motivational_tips=0;}
else{$motivational_tips=$_POST['motivational_tips'];
$sms_send_sql=$sms_send_sql."  OR  Service = 'Motivational Tips'";

}


$sms_send_sql=$sms_send_sql." and Flag='Postpaid' ";

$test=0;
if(!array_key_exists('test', $_POST))
{$test=0;}
else{$test=$_POST['test'];}




$test_number=0;

$test_number=$_POST['test_number'];




  
   $flag = date("Y-m-d");
   date_default_timezone_set("Asia/Kuwait");
   $senddate=date('Y-m-d h:i:s A');
   set_time_limit(12000);

             mysql_query("set character_set_server='utf8'"); 
             mysql_query("set names 'utf8'");
             $sql= mysql_query(" SELECT * FROM `messages3` WHERE `id` = '$id'  limit 1");
			 
			 
			 
	
			


          
            
	
			 if( mysql_num_rows($sql) > 0)
			  {
			  
			  

			  	   $row=mysql_fetch_assoc($sql);
		         //$row = mysql_fetch_row($sql);
                 	  
                 $message = $row['SMS'];

                // print $message;
				 $len=strlen($message);
				//	$uni=isAsciiOnly($message);
				 $flag=$row['flag'];
				 if($flag==1)

								{	
								 if(array_key_exists('test', $_POST))
								 
								 
											{
													 sendSMS($message,$_POST['test_number'],$number); 

													 print "test sms sent to ".$_POST['test_number'];
													 print "<a href='../view_message_food.php'>View Message</a>";	
											}
								else{

									Print "This message have been sent to user please add a new message or use another one <br>";
									print "<a href='../view_message_food.php'>Go to  Message</a>";
									}

								}
				

				else
					{


					$msg_id=  $row['id'];
			        
				     $debug = true;
			         $dat = date("Y-m-d");
					// echo $dat.'<br>';
					 $sql1= mysql_query($sms_send_sql);


				 		
					 	if(array_key_exists('test', $_POST))
						 	{
						 			 sendSMS($message,$_POST['test_number'],$number); 

						 			 print "test sms sent to ".$_POST['test_number'];
						 			 print "<a href='../view_message_food.php'>View Message</a>";	
						 	}
				 		else{

				 			 while($row1=mysql_fetch_row($sql1))
				               {

								
								   $senddate=date('Y-m-d h:i:s A');
								   $sender=$row1[0];
								 
								   //echo free.$row1[0].'<br>';
								   sendSMS($message,$sender,$number); //send content
								   $msg=str_replace("'",' ',$message);
								  // print $sender.'<br>';
								  //mysql_query("INSERT INTO `sending_track`(`id`, `Number`, `SMS`, `Sentdate`, `Service`) VALUES (0, '$sender', '$msg', '$senddate',  'General');");
				                     //echo done.'<br>';


								 
								}
								 print "<a href='../view_message_food.php'>View Message</a>";
								  $sql1= mysql_query("UPDATE `messages3` SET `Flag` = '1' WHERE `Id` = $id LIMIT 1"); 
				 			}
				 
                 
			}  }
				
				
				 




/// sending code ends here



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
function after($date1,$days)
{ 
$EndTime1=$date1;
 $dat=explode("-",$EndTime1);
                            $d=$dat[2];
                            $m=$dat[1];
			                $Y=$dat[0];
							$nextmonth = mktime(0,0,0,date("$m"),date("$d")+$days,date("$Y"));
                           $EndTime2=date("Y-m-d",$nextmonth);  
						 
						 return $EndTime2;
}
 function sendSMS($msg, $recipient,$sr)
     {
		$URL = "http://127.0.0.1:9501\api?username=". urlencode("8380_server") . "&password=". urlencode("yokida123");
		$URL .= "&action=sendmessage&messagetype=SMS:TEXT&recipient=". urlencode($recipient);
		$URL .= "&messagedata=" . urlencode($msg);
	     $URL .="&originator=". urlencode($sr);
		//echo "Request: <br>$URL<br><br>";
		$response = httpRequest($URL);
		/*echo "Response: <br><pre>".
			str_replace(array("<",">"),array("&lt;","&gt;"),$response).
			"</pre><br>";*/
	 }

function isAsciiOnly($str) {
  $flag=1;
    for ($i = 0; $i <strlen($str);$i++)
	  {
	    $char=substr($str,$i,1);
		if (ord($char) > 127)
            $flag=0;
	}
  return $flag;
}

				








									







?>