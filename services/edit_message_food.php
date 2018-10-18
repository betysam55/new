<?php 
 include("connection.php");



$id=$_POST['id'];



$message=$_POST['message'];
$date=$_POST['date'];


$flag=0;


  $sql= mysql_query("UPDATE `messages3` SET `Flag` = '0', `date` ='$date', `SMS` = '$message' WHERE `Id` = $id LIMIT 1"); 


$final=mysql_query($sql);



print("Message updated. please click bellow <br>!!");


print "<a href='../view_message_food.php'>View Message</a>";

?>