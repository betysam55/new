<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
// $category_id=$_SESSION['user_category'];
$content=$_POST['content'];
$id=$_GET['id'];
$category_id=$_GET['category_id'];
// $service_id=$_SESSION['user_service'];
// print($category_id);
// print($content);
// print($user_id);
// print($service_id);
// print($_SESSION['is_user_has_client_message_permission']);
   $sql="UPDATE `clients_message` SET `content` = '$content' WHERE `clients_message`.`id` = $id;";
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../messages/send_client_message.php?id='.$id.'&&category_id='.$category_id);
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../messages/client_edit_message.php?id='.$id.'&&category_id='.$category_id);

}
// print "<a href='../view_message.php'>View Message</a>";

?>