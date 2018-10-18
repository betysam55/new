<?php 
if(isset($_GET['short_code_id'])){
$access_code_id=$_GET['short_code_id'];
  $sql1="select * from category_config";
  $result1=mysql_query($sql1);
        
          $row1 =mysql_fetch_assoc($result1);
          $category_id=$row1['category_id'];  
          echo $category_id."asdf";
          $sql2="select * from services where category_id=$category_id";
          $result2=mysql_query($sql2);
          $row2=mysql_fetch_assoc($result2);
          print($row2['name']);
        }
   ?>