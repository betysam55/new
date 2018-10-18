<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$service_type=$_POST['service_type'];
$code_service=$_POST['code_service'];
$description=$_POST['description'];

   $sql="INSERT INTO `categories` (`service_type`, `code_service`, `description`) VALUES ( '$service_type', '$code_service', '$description');"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../categories/categories.php');
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../categories/add_categories.php');

}
// print "<a href='../view_message.php'>View Message</a>";

?>