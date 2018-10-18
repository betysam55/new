<?php 
 include("connection.php");

$message=$_POST['message'];
$date=$_POST['date'];






$flag=0;



$sql = "INSERT INTO `messages3` (`id`, `SMS`, `Type`, `char_count`, `flag`,`date`) VALUES (NULL, '$message', NULL, '255', '$flag' , '$date');";

$final=mysql_query($sql);



print("message inserted to DB. please click bellow <br>!!");


print "<a href='../view_message_food.php'>View Message</a>";

?>