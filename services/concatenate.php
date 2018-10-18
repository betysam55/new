<?php
date_default_timezone_set("Asia/Kuwait");
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("MT_SMS",$con);
mysql_query("set character_set_server='utf8'"); 
mysql_query("set names 'utf8'");
$sql_ci=mysql_query("SELECT number FROM `customers_in` WHERE `Number` LIKE '% %' ");



//$sql_bulk=mysql_query("SELECT `number`  FROM `bulk` WHERE `Number` LIKE '%251919%'");
//$sql_co=mysql_query("SELECT `number`  FROM `customers_out` WHERE `Number` LIKE '%251919%'");

/*while($row1=mysql_fetch_row($sql_ci)){
 $number=$row1[0];
if (mysql_num_rows($sql_ci) > 0 ){
mysql_query("DELETE FROM `mt_sms`.`backup_19` WHERE `backup_19`.`Number` = '$number'");
}
}*/

while($row1=mysql_fetch_row($sql_ci)){
 $number1=$row1[0];
 //print $number1;
 //$number='+'.$row1[0];
 
 $new_number=substr(trim($number1),0,14);
 $new_number=str_replace(" ",'',$new_number);
 print $new_number.'</br>';
mysql_query("UPDATE `customers_in` SET `Number` = '$new_number' WHERE `customers_in`.`Number` = '$number1';");
}

/*
while($row1=mysql_fetch_row($sql_bulk)){
 $number=$row1[0];
if (mysql_num_rows($sql_bulk) > 0 ){

mysql_query("DELETE FROM `mt_sms`.`backup_19` WHERE `backup_19`.`Number` = '$number'");
}
}*/

?>