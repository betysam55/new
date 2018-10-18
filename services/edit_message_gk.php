<?php 
 include("connection.php");



$id=$_POST['id'];
$message=$_POST['message'];
$date=$_POST['date'];


$status="edited";


  $sql= mysql_query("UPDATE `draft_message` SET `status` = 'Edited',  `content` = '$message' WHERE `Id` = $id LIMIT 1"); 


$final=mysql_query($sql);



print("message updated. please click bellow <br>!!");


print "<a href='../view_message_gk.php'>View Message</a>";

?>