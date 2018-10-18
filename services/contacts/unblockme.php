<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
$id=$_GET['id'];
$sql="select * from contact_group where contact_id=$id and status=1";
			$result=mysql_query($sql);
			$number_of_rows=mysql_num_rows($result);
			if ($number_of_rows==0) {
$sql0="UPDATE `contacts` SET `status` = '2' WHERE `contacts`.`id` = $id";
    $final0=mysql_query($sql0);
if ($final0){
			$query=mysql_query("select * from contacts where id=$id");
			$row=mysql_fetch_assoc($query);
			$phone_number=$row['phone_number'];

			$sql="select * from blocked where contact_id=$id or phone_number=$phone_number";

			$result=mysql_query($sql);
			$number_of_rows=mysql_num_rows($result);
			if ($number_of_rows==0) {
				$sql="INSERT INTO `blocked` (`id`, `contact_id`, `phone_number`, `created_at`, `update_at`) VALUES (NULL, '$id', '$phone_number', CURRENT_TIMESTAMP, NULL);";
				$result=mysql_query($sql);	
			}
			print'success';
			die();
			$_SESSION['notification']='Contact Updated Successfully';
			header('Location: ../../contacts/contact_history.php?id='.$id);
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	
	header('Location: ../../contacts/contact_history.php?id='.$id);

}
}
else{
	$_SESSION['session']='You must unsubscribe all services first ';
	
	header('Location: ../../contacts/contact_history.php?id='.$id);

}



?>