<?php
date_default_timezone_set("Asia/Kuwait");
//$con=mysql_connect("localhost","root","");
//$db=mysql_select_db("MT_SMS",$con);
//mysql_query("set character_set_server='utf8'"); 
//mysql_query("set names 'utf8'");

$sender = $_GET['sender'];
$receiver = $_GET['receiver'];
$sms = $_GET['sms'];
//die($sms);
///uzuki/incoming_routing.php?sender=0912779155&receiver=8480&sms=all1

set_time_limit(80000);

//$url = 'http://infocellvas.example.com:8090/recievesms?access_code='.$receiver.'&phone_number='.$sender.'&content='.$sms;
$url = 'http://172.17.243.3:80/recievesms?access_code='.$receiver.'&phone_number='.$sender.'&content='.$sms;
$response = httpRequest($url);
//echo $response; 

//if ($receiver=="+8480" || $receiver=="+8490")
//httpRequest($url);
//{header('Location:http://127.0.0.1/vas/services/Subscribing_8480_20161011.php?sender='.$sender.'&sms='.$sms);}
//	{
		//include ("Subscribing_8480_20161011.php");
//	}
//elseif ($receiver=="+8680" || $receiver=="+8690")
//{
//header('Location:http://127.0.0.1/vas/services/Subscribing_8480_20161214.php?sender='.$sender.'&sms='.$sms);

//include ("Subscribing_8680_20170412.php");
//}

//elseif ($receiver=="+8380" || $receiver=="+8390")
//{
//header('Location:http://127.0.0.1/vas/services/Subscribing_8480_20161214.php?sender='.$sender.'&sms='.$sms);

//include ("Subscribing_8380_20171130.php");
//}


function httpRequest($url){
	$pattern = "/http...([0-9a-zA-Z-.]*).([0-9]*).(.*)/";
	preg_match($pattern,$url,$args);
	print_r($args);
	
	$in = "";
	$fp = fsockopen("$args[1]", $args[2], $errno, $errstr, 30);
	if (!$fp) {
	   return("$errstr ($errno)");
	} else {
		$out = "GET /$args[3] HTTP/1.1\r\n";
		$out .= "Host: $args[1]:$args[2]\r\n";
		//$out .= "User-agent: Ozeki PHP client\r\n";
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

?>