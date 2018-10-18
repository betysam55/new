<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
 include("connection.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
 if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 100;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_pages_sql = "SELECT COUNT(*) FROM contacts";
        $result0 = mysql_query($total_pages_sql);
        $total_rows = mysql_fetch_array($result0)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        
$sql="SELECT DISTINCT(contact_id) FROM contact_group WHERE category_id=1;"; 
$result=mysql_query($sql);
$num_rows=mysql_num_rows($result);

for ($i=0; $i <$num_rows; $i++) { 
		
		$row=mysql_fetch_assoc($result);
		$contact_id=$row['contact_id'];
		$sql1="select
						  *
						from
						  contacts
						  where id=$contact_id
						 limit $offset, $no_of_records_per_page";
		$result1=mysql_query($sql1);
		$num_rows1=mysql_num_rows($result1);
		for ($j=0; $j <$num_rows1 ; $j++) { 
			$row2=mysql_fetch_assoc($result1);
			print($row2['phone_number']."<br>");
		}
		
	
}


?>

 <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</body>
</html>
</body>
</html>