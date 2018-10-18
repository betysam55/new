<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

$company_name=$_POST['company_name'];
$user_id=$_POST['user_id'];
$address=$_POST['address'];
$tin=$_POST['tin'];
$contact_person_name=$_POST['contact_person'];
$phone=$_POST['phone'];
$bank_type=$_POST['bank_type'];
$bank_name=$_POST['bank_name'];
$account_no=$_POST['account_no'];

   $sql="INSERT INTO `client_information` (`id`, `user_id`, `company_name`, `address`, `tin`, `contact_person_name`, `phone`, `bank_type`, `bank_name`, `account_no`, `created_at`, `updated_at`) VALUES (NULL, '$user_id', '$company_name', '$address', '$tin', '$company_name', '$phone', '$bank_type', '$bank_name', '$account_no', CURRENT_TIMESTAMP, NULL);"; 
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../client/information.php');
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../client/information.php');

}
// print "<a href='../view_message.php'>View Message</a>";

?>