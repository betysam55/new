<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
$user_id=$_GET['user_id'];
$service_id=$_GET['service_id'];
$category_id=$_GET['category_id'];
   $sql="DELETE FROM `user_categoery` WHERE `user_categoery`.`user_id` = '$user_id' AND `user_categoery`.`category_id` = '$category_id' AND `user_categoery`.service_id='$service_id';";

	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact Updated Successfully';
			header('Location: ../../users/user_detail.php?id='.$user_id);
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	
	header('Location: ../../users/user_detail.php?id='.$user_id);

}

// print "<a href='../view_message.php'>View Message</a>";

?>