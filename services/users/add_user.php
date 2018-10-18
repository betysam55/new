<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password='changeme';

   $sql="INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `recovery_hash`, `user_type`, `status`, `created_date`, `update_at`) VALUES (NULL, '$first_name', '$last_name', '$email', MD5('$password'), NULL, 'user', '0', CURRENT_TIMESTAMP, NULL);"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../users/index.php');
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../users/add_user.php');

}
// print "<a href='../view_message.php'>View Message</a>";

?>