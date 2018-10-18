<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
$id=$_GET['status'];
$service_id=$_GET['service_id'];
   $sql="UPDATE `contact_group` SET `status` = '0', `end_date`=CURRENT_TIMESTAMP WHERE `contact_group`.`contact_id` = $id AND `contact_group`.`service_contact_id`= $service_id";

	$final=mysql_query($sql);
if ($final){
			$sql="select * from contact_group where contact_id=$id and status=1";
			$result=mysql_query($sql);
			$number_of_rows=mysql_num_rows($result);
			if ($number_of_rows==0) {
				$sql="update
					  contacts
					set
					  status = 0
					where
					  id ='$id'
					";
				$result=mysql_query($sql);	
			}
			$_SESSION['notification']='Contact Updated Successfully';
			header('Location: ../../contacts/contact_history.php?id='.$id);
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	
	header('Location: ../../contacts/contact_history.php?id='.$id);

}

// print "<a href='../view_message.php'>View Message</a>";

?>