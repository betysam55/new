<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$category_id=$_GET['id'];
$content=$_POST['content'];

   $sql="INSERT INTO `draft_message` (`id`, `category_id`, `content`, `status`, `created_at`, `update_at`) VALUES (NULL, '$category_id', '$content', 'UnTested', CURRENT_TIMESTAMP, NULL);"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../messages/view_by_category.php?id='.$category_id);
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../messages/add_message.php');

}
// print "<a href='../view_message.php'>View Message</a>";

?>