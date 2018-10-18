<?php
date_default_timezone_set("Asia/Kuwait");
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("infocellvas",$con);
mysql_query("set character_set_server='utf8'"); 
mysql_query("set names 'utf8'");

$sender="+251921594349";
$sms="stop1";
$receiver = "+8680";


		   /// menue key like ok and more are checked her
			$sql = "SELECT * FROM `contact_group` WHERE `category_id` = 0 ORDER BY `created_at` DESC";
			$sqlresult=mysql_query($sql);
			
			$keywords=mysql_num_rows($sqlresult);
			for($i=1;$i<100000;$i++){
			
			$row = mysql_fetch_assoc($sqlresult);
			$category_id=$row ['category_id'];
			$service_contact_id=$row ['service_contact_id'];
			$id=$row ['id'];
			$contact_id=$row ['contact_id'];
			
		
						
	
					
				
					$sql_service = "SELECT * FROM `services` WHERE  `id` = '$service_contact_id'";
								
					$sql_service_result=mysql_query($sql_service);
					
						$x=mysql_num_rows($sql_service_result);
					$row1 = mysql_fetch_assoc($sql_service_result);
					$service_category_id=$row1 ['category_id'];
					
					
					
					$sq3="UPDATE `infocellvas`.`contact_group` SET `category_id` = '$service_category_id' WHERE `contact_group`.`id` = '$id'";
					mysql_query($sq3);
					
			
			
			
			
				
				}
				
				
				
				
	
 ?>