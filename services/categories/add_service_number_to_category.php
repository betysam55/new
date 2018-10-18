<?php 
include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$category_id=$_GET['id'];
$access_code_id=$_POST['access_code_id'];
   $sql="INSERT INTO `category_config` (`id`, `category_id`, `access_code_id`, `created_at`, `update_at`) VALUES (NULL, '$category_id', '$access_code_id', CURRENT_TIMESTAMP, NULL);"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../categories/service.php?id='.$category_id);
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../categories/add_service_number_to_category.php?id='.$category_id);

}
// print "<a href='../view_message.php'>View Message</a>";

?>