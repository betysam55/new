<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

$id=$_GET['id'];


   $sql="DELETE FROM `clients_message` WHERE `clients_message`.`id` = $id";
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../client/client_message.php');
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../client/client_message.php');

}
// print "<a href='../view_message.php'>View Message</a>";

?>