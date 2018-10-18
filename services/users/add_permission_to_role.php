<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$permission_id=$_POST['permission_id'];
$role_id=$_POST['role_id'];

   $sql="INSERT INTO `roles_permissions` (`id`, `permission_id`, `role_id`, `created_at`, `update_at`) VALUES (NULL, '$permission_id', '$role_id', CURRENT_TIMESTAMP, NULL);"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../users/role_detail.php?id='.$role_id);
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../users/add_permission_to_role.php');

}
// print "<a href='../view_message.php'>View Message</a>";

?>