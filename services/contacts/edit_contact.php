<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
$id=$_POST['id'];
$name=$_POST['firstname'];
$last=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
   $sql="UPDATE `contacts` SET `first_name` = '$name', `last_name` = '$last', `email`= '$email', `phone_name`= '$phone', `status` = '0' WHERE `contacts`.`id` = $id;";
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact Updated Successfully';
			header('Location: ../../contacts/contacts.php');
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	
	header('Location: ../../contacts/edit_contact.php?id='.$id);

}

// print "<a href='../view_message.php'>View Message</a>";

?>