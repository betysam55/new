<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$title=$_POST['title'];
$description=$_POST['description'];

   $sql="INSERT INTO `roles` (`id`, `title`, `description`, `created_at`, `update_at`) VALUES (NULL, '$title', '$description', CURRENT_TIMESTAMP, NULL);"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../users/roles.php');
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../users/add_role.php');

}
// print "<a href='../view_message.php'>View Message</a>";

?>