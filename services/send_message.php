<?php 
 include("connection.php");


$id=$_POST['id'];
$number=$_POST['number'];
$test=0;
if(!array_key_exists('test', $_POST))
{$test=0;}
else{$test=$_POST['test'];}



$sms_send_sql=	"SELECT DISTINCT(contact_id) FROM `contact_group` WHERE Service_contact_id ='0'";

	


 for ($i = 1; $i <99;$i++)
	{
	  
				  if(array_key_exists($i, $_POST))
				  {
				  $sms_send_sql=$sms_send_sql."  OR   Service_contact_id ='$i'";
				 }
	}
	

		



$test_number=0;

$test_number=$_POST['test_number'];
   $flag = date("Y-m-d");
   date_default_timezone_set("Asia/Kuwait");
   $senddate=date('Y-m-d h:i:s A');
   set_time_limit(12000);

             mysql_query("set character_set_server='utf8'"); 
             mysql_query("set names 'utf8'");
             $sql= mysql_query(" SELECT * FROM `draft_message` WHERE `id` = '$id'  limit 1");
			 
			
            
	
			 if( mysql_num_rows($sql) > 0)
			  {
			  
				

			  	   $row=mysql_fetch_assoc($sql);
		         //$row = mysql_fetch_row($sql);
                 	  
                 $message = $row['content'];

                // print $message;
				
				 $len=strlen($message);
				//	$uni=isAsciiOnly($message);
				 $flag=$row['status'];
				 if($flag=="Sent")
						
								{	
								 if(array_key_exists('test', $_POST))
								 
								 
											{
													 sendSMS($message,$_POST['test_number'],$number); 

													 print "test sms sent to ".$_POST['test_number'];
													 print "<a href='../view_message.php'>View Message</a>";	
											}
								else{

									Print "This message have been sent to user please add a new message or use another one <br>";
									print "<a href='../view_message.php'>Go to  Message</a>";
									}

								}
				

				else
					{
			
					

					$msg_id=  $row['id'];
					
					$z=0;
			        
				     $debug = true;
			         $dat = date("Y-m-d");
					// echo $dat.'<br>';
					

						$z=0;
				 		
					 	if(array_key_exists('test', $_POST))
						
						
						 	{
							
								 sendSMS($message,$_POST['test_number'],$number); 

						 			 print "test sms sent to ".$_POST['test_number'];
						 			 print "<a href='../view_message.php'>View Message</a>";	
						 	}
				 		else{
						
			
						
								$sql1= mysql_query($sms_send_sql);
								
								
								
				 			 while($row1=mysql_fetch_row($sql1))
				               {
									
										
								   $senddate=date('Y-m-d h:i:s A');
								   
								      
								   $reciver=$row1[0];
							
								  /// EXTRACTING PHONE NUMBER FROM CONTACTS TABLE FROM ID FOUND UNDER CONTACT GROUP FROM SUBSCRITPION
								  
								   $findNumberQuery = "SELECT * FROM `contacts` WHERE `id` = '$reciver'";
								    $recivernumber= mysql_query($findNumberQuery) ;
									
									$phoneverification=mysql_num_rows($recivernumber);
									
									if($phoneverification>0){
								    
								     	$recivernumber=mysql_fetch_assoc($recivernumber);
									    $reciver= $recivernumber['phone_number'];
											sendSMS($message,$reciver,$number); //send content
											 $msg=str_replace("'",' ',$message);
											 $z=$z+1;
								  	} 
								    //mysql_query("INSERT INTO `sending_track`(`id`, `Number`, `SMS`, `Sentdate`, `Service`) VALUES (0, '$reciver', '$msg', '$senddate',  'General');");
				                     //echo done.'<br>';
									
								}
								
								
								
								
								mysql_query( "INSERT INTO `infocellvas`.`report` (`id`, `category_id`, `draft_message_id`, `count`, `date`) VALUES (NULL, '1', '$id', '$z', CURRENT_TIMESTAMP)");
				                    
								
								
							
								 print "<a href='../view_message.php'>View Message</a>";
								  $sql1= mysql_query("UPDATE `draft_message` SET `status` = 'Sent' WHERE `id` = $id LIMIT 1"); 
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
		$URL = "http://127.0.0.1:9501\api?username=". urlencode("Server") . "&password=". urlencode("yokida123");
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