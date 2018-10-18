<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
$user_id=$_SESSION['user_id'];
$company_name=$_POST['company_name'];
$address=$_POST['address'];
$tin=$_POST['tin'];
$contact_person_name=$_POST['contact_person'];
$phone=$_POST['phone'];
$bank_type=$_POST['bank_type'];
$bank_name=$_POST['bank_name'];
$account_no=$_POST['account_no'];
$query=mysql_query("select * from client_information where user_id=$user_id");
$num_rows=mysql_num_rows($query);
if($num_rows==0){

   $sql="INSERT INTO `client_information` (`id`, `user_id`, `company_name`, `address`, `tin`, `contact_person_name`, `phone`, `bank_type`, `bank_name`, `account_no`, `created_at`, `updated_at`) VALUES (NULL, '$user_id', '$company_name', '$address', '$tin', '$contact_person_name', '$phone', '$bank_type', '$bank_name', '$account_no', CURRENT_TIMESTAMP, NULL);";
	$final=mysql_query($sql);
if ($final){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../client/information.php');
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../client/edit_client_information.php');

}
}if ($num_rows==1) {
		$sql=mysql_query("UPDATE `client_information` SET `company_name` = '$company_name', `address` = '$address', `tin` = '$tin', `contact_person_name` = '$contact_person_name', `phone` = '$phone', `bank_type` = '$bank_type', `bank_name` = '$bank_name', `account_no` = '$account_no', `updated_at` = CURRENT_TIMESTAMP WHERE `client_information`.`user_id` = $user_id;");
		if ($sql){
			$_SESSION['notification']='Contact created  successfully';
			header('Location: ../../client/information.php');
		}

		else{
			$_SESSION['session']='Failed to add Contact';
			header('Location: ../../client/edit_client_information.php');

		}

}
// print "<a href='../view_message.php'>View Message</a>";

?>