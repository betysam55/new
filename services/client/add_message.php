<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
$category_id=$_SESSION['user_category'];
$content=$_POST['content'];
$user_id=$_SESSION['user_id'];
$service_id=$_SESSION['user_service'];
// print($category_id);
// print($content);
// print($user_id);
// print($service_id);
// print($_SESSION['is_user_has_client_message_permission']);
   $sql="INSERT INTO `clients_message` (`id`, `user_id`, `category_id`, `service_id`, `content`, `status`, `created_at`, `updated_at`) VALUES (NULL, '$user_id', '$category_id', '$service_id', '$content', '0', CURRENT_TIMESTAMP, NULL);";
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../client/client_message.php');
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../client/add_client_message.php');

}
// print "<a href='../view_message.php'>View Message</a>";

?>