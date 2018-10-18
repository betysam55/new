<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$user_id=$_GET['id'];
$category_id=$_GET['category_id'];
$service_id=$_GET['service_id'];
$short_code_id=$_GET['short_code_id'];


   $sql="INSERT INTO `user_categoery` (`id`, `user_id`, `category_id`, `service_id`, `short_code_id`, `created_at`, `updated_at`) VALUES (NULL, '$user_id', '$category_id', '$service_id', '$short_code_id', CURRENT_TIMESTAMP, NULL);"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../users/user_detail.php?id='.$user_id);
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../users/add_category_and_service_to_user.php?id='.$user_id);

}
// print "<a href='../view_message.php'>View Message</a>";

?>