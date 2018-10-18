<?php 
 include("../connection.php");
 error_reporting(E_ALL);
ini_set('display_errors', 'off');
session_start();

 $number=$_POST['short_code'];
 //print$number;
 $id=$_POST['content_id'];
 $service_id=$_POST['service_id'];
 $count=count($service_id);
 $number_of_services=$count;
$category_id=$_POST['category_id'];
 //print('ser='.$service_id[0].'service_id'.$id."sdaf");
$test=0;
if(!array_key_exists('test', $_POST))
{$test=0;}
else{$test=$_POST['test'];}



//preparing sql
$sms_send_sql=	"SELECT
					  DISTINCT(contact_id)
					FROM
					  `contact_group`
					WHERE
					service_contact_id = '0'
					AND status=1";
 for ($i = 0; $i <$count;$i++)
	{			  
		$sms_send_sql=$sms_send_sql."  OR   service_contact_id ='$service_id[$i] 'AND status=1";
	}
	
	// print($sms_send_sql);

		$test_number=0;

		$test_number=$_POST['test_number'];

   $flag = date("Y-m-d");
   date_default_timezone_set("Asia/Kuwait");
   $senddate=date('Y-m-d h:i:s A');
   set_time_limit(12000);

             mysql_query("set character_set_server='utf8'"); 
             mysql_query("set names 'utf8'");
             $sql= mysql_query("SELECT * FROM `draft_message` WHERE `id` = '$id'  limit 1");
			 if( mysql_num_rows($sql) > 0)
			  {
			  	    $row=mysql_fetch_assoc($sql);
                    $message = $row['content'];
				 	$len=strlen($message);
					$flag=$row['status'];
				if($flag=="Sent")
								{	
								 if(array_key_exists('test', $_POST))
								 
								 
											{
													 sendSMS($message,$_POST['test_number'],$number); 
													 // print "test sms sent to ".$_POST['test_number'];
													$_SESSION['status']="sent";
				 				header("Location:../../messages/view_by_category.php?id=".$category_id);
											}
								else{

									$_SESSION['status']="sent";
				 				header("Location:../../messages/view_by_category.php?id=".$category_id);
									
									}

								}
				else
					{
					$msg_id=  $row['id'];
				    $debug = true;
			        $dat = date("Y-m-d");
						$z=0;
					 	if(array_key_exists('test', $_POST))
						 	{
								    sendSMS($message,$_POST['test_number'],$number); 
						 			// print "test sms sent to ".$_POST['test_number'];
						 			$_SESSION['status']="sent";
				 				header("Location:../../messages/view_by_category.php?id=".$category_id);	
						 	}
				 		else{
				 			
							$sql1= mysql_query($sms_send_sql);
							
							$number_of_rows=mysql_num_rows($sql1);
// print("number_of_rows=".$number_of_rows);
				 			 for ($i=0; $i < $number_of_rows; $i++) { 
									$row1=mysql_fetch_assoc($sql1);				 			 
									$z=$z+1;

								   $senddate=date('Y-m-d h:i:s A');
								   $reciver=$row1['contact_id'];
									// print "reciver=".$reciver;
								  /// EXTRACTING PHONE NUMBER FROM CONTACTS TABLE FROM ID FOUND UNDER CONTACT GROUP FROM SUBSCRITPION
								  
								   $findNumberQuery = "SELECT * FROM `contacts` WHERE `id` = '$reciver' and status=1";
								    $recivernumber= mysql_query($findNumberQuery) ;
								    $recivernumber=mysql_fetch_assoc($recivernumber);
									  $reciver1= $recivernumber['phone_number'];
									  // print(' _message='.$message);
									  // print('-reciver1='.$reciver1);
									  // print('-number='.$number);
								  // sendSMS($message,$reciver1,$number); //send content
									 print($message.$reciver1.$number);
									 print('<br>');
								   $msg=str_replace("'",' ',$message);
									
								}
									print($number_of_services.'<br>');
									print($number_of_rows);
								 for ($i = 0; $i <$number_of_services;$i++){
								 	$query="select distinct(contact_id) from contact_group where service_contact_id=$service_id[$i] and status=1";
								 	$result=mysql_query($query);
								 	$count=mysql_num_rows($result);
								mysql_query("INSERT INTO
												  `report` (
												    `id`,
												    `category_id`,
												    `service_id`,
												    `draft_message_id`,
												    `count`,
												    `date`
												  )
												VALUES
												  (
												    NULL,
												    '$category_id',
												    '$service_id[$i]',
												    '$id',
												    '$count',
												    CURRENT_TIMESTAMP
												  );");
							}
								  // $sql1= mysql_query("UPDATE `draft_message` SET `status` = 'Sent' WHERE `id` = $id LIMIT 1"); 
				 				$_SESSION['status']="sent";
				 				die();
				 				header("Location:../../messages/view_by_category.php?id=".$category_id);
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
		$URL = "http://127.0.0.1:9501\api?username=". urlencode("8680_server") . "&password=". urlencode("yokida123");
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