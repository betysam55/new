<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
$user_id=$_GET['user_id'];
$role_id=$_GET['role_id'];
   $sql="DELETE FROM `users_roles` WHERE `users_roles`.`user_id` = '$user_id' and `users_roles`.`role_id` = '$role_id'";

	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact Updated Successfully';
			header('Location: ../../users/index.php');
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	
	header('Location: ../../users/user_detail.php?id='.$user_id);

}

// print "<a href='../view_message.php'>View Message</a>";

?>