<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$contact_id=$_GET['contact_id'];
$service_id=$_GET['service'];
$category_id=$_GET['category'];
   $sql="INSERT INTO `contact_group` (`id`, `contact_id`, `service_contact_id`, `category_id`, `start_date`, `end_date`, `status`, `created_at`, `update_at`) VALUES (NULL, '$contact_id', '$service_id', '$category_id', CURRENT_TIMESTAMP, NULL, '1', CURRENT_TIMESTAMP, NULL);"; 


	$final=mysql_query($sql);
	
if ($final){
			$sql="update
					  contacts
					set
					  status = 1
					where
					  id ='$contact_id'
					";
				$result=mysql_query($sql);	
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../contacts/contact_history.php?id='.$contact_id);
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../contacts/add_subscription.php?id='.$contact_id);

}

?>