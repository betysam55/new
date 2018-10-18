<?php 
include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$category_id=$_GET['id'];
$name=$_POST['name'];
$amharic_name=$_POST['amharic_name'];
$description=$_POST['description'];
$menu_key=$_POST['menu_key'];
$stop_key=$_POST['stop_key'];
   $sql="INSERT INTO `services` (`id`, `category_id`, `name`, `amharic_name`, `description`, `menu_key`, `stop_key`, `created_at`, `update_at`) VALUES (NULL, '$category_id', '$name', '$amharic_name', '$description', '$menu_key', '$stop_key', CURRENT_TIMESTAMP, NULL);"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../categories/service.php?id='.$category_id);
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../categories/add_service.php?id='.$category_id);

}
// print "<a href='../view_message.php'>View Message</a>";

?>