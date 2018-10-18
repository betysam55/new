<?php 
 include("../connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();;
$email=$_POST['email'];
$password=$_POST['password'];
$enc_password=md5($password);

$sql="SELECT * FROM users WHERE email='$email';";
  $result=mysql_query($sql);
  
	
if ($result){
	$row =mysql_fetch_assoc($result);
	if ($row['password']==$enc_password) {
		$_SESSION['login_user']= $row['id'].$row['email'];
		$_SESSION['user_id']=$row['id'];
		$_SESSION['use_email']=$row['email'];
		$user_id=$row['id'];
		$sql1="SELECT * FROM users_roles WHERE user_id=$user_id;";
		$result1=mysql_query($sql1);
		if (isset($result1)) {
		$row1=mysql_fetch_assoc($result1);
		$id=$row1['role_id'];
		// $role_id=$row1['role_id'];
		$sql2="SELECT * FROM roles WHERE id=$id;";
		$result2=mysql_query($sql2);
		if($result2){
		$row2=mysql_fetch_assoc($result2);
		$_SESSION['myrole']=$row2['title'];
		$sql3="SELECT * FROM `user_categoery` WHERE user_id=$user_id;";
		$result3=mysql_query($sql3);
		$number_of_rows3=mysql_num_rows($result3);
		if ($number_of_rows3!=0) {
				$row3=mysql_fetch_assoc($result3);
				$_SESSION['user_category']=$row3['category_id'];
				$_SESSION['user_service']=$row3['service_id'];
				$_SESSION['user_short_code']=$row3['short_code_id'];
				$_SESSION['is_user_has_client_message_permission']="1";
		}
		
		$sql4="SELECT * FROM `roles_permissions` WHERE role_id=$id;";
		$result4=mysql_query($sql4);
		if($result4){
		$number_of_rows=mysql_num_rows($result4);
		for ($i=0; $i <$number_of_rows ; $i++) { 
			$row4=mysql_fetch_assoc($result4);
			if ($row4['permission_id']==1) {
				$_SESSION['permission_message']=$row4['permission_id'];
			}if ($row4['permission_id']==2) {
				$_SESSION['permission_category']=$row4['permission_id'];
			}if ($row4['permission_id']==3) {
				$_SESSION['permission_contact']=$row4['permission_id'];
			}if ($row4['permission_id']==4) {
				$_SESSION['permission_promotion']=$row4['permission_id'];
			}if ($row4['permission_id']==5) {
				$_SESSION['permission_revenue']=$row4['permission_id'];
			}if ($row4['permission_id']==6) {
				$_SESSION['permission_user']=$row4['permission_id'];
			}if ($row4['permission_id']==7) {
				$_SESSION['permission_clients']=$row4['permission_id'];
			}if ($row4['permission_id']==8) {
				$_SESSION['permission_setting']=$row4['permission_id'];
			}if ($row4['permission_id']==9) {
				$_SESSION['permission_dashboard']=$row4['permission_id'];
			}else{
				header("Location:logout.php");
			}
			
				}
			}
		}else{
			header("Location:logout.php");
		}
		if($_SESSION['myrole'])
		header('Location: ../../dashboard/index.php');

		}else
			header("Location:logout.php");
	}
	else{
		$_SESSION['session']='Failed to add Contact';
	header("Location:logout.php");
	}

			
			
}

else{
	$_SESSION['session']='Failed to add Contact';
	header('Location: ../../login/index.php');

}
// print "<a href='../view_message.php'>View Message</a>";

?>