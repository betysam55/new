<?php 
 include("connection.php");

$message=$_POST['message'];







$flag=0;

$sql = "INSERT INTO `infocellvas`.`draft_message` (`id`, `category_id`, `content`, `status`, `created_at`, `update_at`) VALUES (NULL, '2', '$message', 'UnTested', CURRENT_TIMESTAMP, NULL);";



$final=mysql_query($sql);



print("message inserted to DB. please click bellow <br>!!");


print "<a href='../view_message_gk.php'>View Message</a>";

?>