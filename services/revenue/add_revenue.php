<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$short_code_id=$_POST['short_code_id'];
$amount=$_POST['amount'];
$month=$_POST['month'];
$year=$_POST['year'];

   $sql="INSERT INTO `revenue` (`id`, `short_code_id`, `amount`, `month`, `year`, `updated_at`, `created_at`) VALUES (NULL, '$short_code_id', '$amount', '$month', '$year', NULL, CURRENT_TIMESTAMP);"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../revenue/revenue.php');
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../revenue/add_revenue.php');

}
// print "<a href='../view_message.php'>View Message</a>";

?>