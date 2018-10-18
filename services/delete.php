<?php
date_default_timezone_set("Asia/Kuwait");
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("MT_SMS",$con);
mysql_query("set character_set_server='utf8'"); 
mysql_query("set names 'utf8'");





 $sql = 'DELETE FROM `infocellvas`.`contact_group` WHERE `contact_group`.`status` = 0';
						$sql=mysql_query($sql);
						

?>