<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$user_id=$_POST['user_id'];
$role_id=$_POST['role_id'];

   $sql="INSERT INTO `users_roles` (`id`, `role_id`, `user_id`, `created_at`, `update_at`) VALUES (NULL, '$role_id', '$user_id', CURRENT_TIMESTAMP, NULL);"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../users/user_detail.php?id='.$user_id);
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../users/add_role_to_user.php?id='.$user_id);

}
// print "<a href='../view_message.php'>View Message</a>";

?>