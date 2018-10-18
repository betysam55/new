<?php
date_default_timezone_set("Asia/Kuwait");
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("infocellvas",$con);
mysql_query("set character_set_server='utf8'"); 
mysql_query("set names 'utf8'");

$sender=$_GET['sender'];
$sms=$_GET['msgdata'];
$receiver = $_GET['receiver'];





set_time_limit(80000);

if ($receiver=="+8480" || $receiver=="+8490")
//httpRequest($url);
//{header('Location:http://127.0.0.1/vas/services/Subscribing_8480_20161011.php?sender='.$sender.'&sms='.$sms);}
	{
		//include ("Subscribing_8480_20161011.php");
		include ("8480.php");
		
	}
elseif ($receiver=="+8680" || $receiver=="+8690")
{
//header('Location:http://127.0.0.1/vas/services/Subscribing_8480_20161214.php?sender='.$sender.'&sms='.$sms);

//include ("Subscribing_8680_20170412.php");

      include ("8680.php");
}

elseif ($receiver=="+8380" || $receiver=="+8390")
{
//header('Location:http://127.0.0.1/vas/services/Subscribing_8480_20161214.php?sender='.$sender.'&sms='.$sms);

///include ("Subscribing_8380_20171130.php");
}

?>