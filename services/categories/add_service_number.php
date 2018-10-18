<?php 
include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$access_code=$_POST['access_code'];
$payment_method=$_POST['payment_method'];
$price=$_POST['price'];
   $sql="INSERT INTO `short_code` (`id`, `access_code`, `payment_method`, `price`, `created_at`, `updated_at`) VALUES (NULL, '$access_code', '$payment_method', '$price', CURRENT_TIMESTAMP, NULL);"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../categories/service_numbers.php');
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../categories/add_service_number.php');

}
// print "<a href='../view_message.php'>View Message</a>";

?>