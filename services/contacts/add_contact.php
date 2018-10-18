<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$name=$_POST['firstname'];
$last=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
   $sql="INSERT INTO `contacts` (`first_name`, `last_name`, `email`, `phone_number`,`status`) VALUES ( '$name', '$last', '$email', '$phone','0');"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../contacts/contacts.php');
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../contacts/add_contact.php');

}
// print "<a href='../view_message.php'>View Message</a>";

?>