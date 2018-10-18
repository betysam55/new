<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
$user_id=$_SESSION['user_id'];

$old=md5($_POST['old']);
$new=$_POST['new'];
$confirm=$_POST['confirm'];
$sql="select * from users where id=$user_id"; 
	$result=mysql_query($sql);
	$row=mysql_fetch_assoc($result);
	if ($old==$row['password']) {
		if($new==$confirm){
			$newpassword=md5($confirm);
			$sql2="UPDATE `users` SET `password` = '$newpassword' WHERE `users`.`id` = $user_id;";
			$final=mysql_query($sql2);
			if ($final){
			$_SESSION['notification']='password successfuly changed';
			header('Location: ../../users/profile.php');
			}

			else{
				$_SESSION['notification']='Failed to change password';
				header('Location: ../../users/profile.php');

			}

		}
	}
		else{
				$_SESSION['notification']='Failed to change password';
				header('Location: ../../users/profile.php');

	}


   


// print "<a href='../view_message.php'>View Message</a>";

?>