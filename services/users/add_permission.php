<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$name=$_POST['name'];
$description=$_POST['description'];

   $sql="INSERT INTO `permissions` (`id`, `name`, `description`, `created_at`, `update_at`) VALUES (NULL, '$name', '$description', CURRENT_TIMESTAMP, NULL);"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../users/permissions.php');
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../users/add_permission.php');

}
// print "<a href='../view_message.php'>View Message</a>";

?>