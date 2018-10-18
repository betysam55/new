<?php
/*create a connection with the server */
$link = mysql_connect ('localhost', 'infocell', '');




 
 /*if there is a fail in connection it will print error*/
 
 if($link=='false'){
 	print "error in databse coonection";
 }
/*  select databse from all the availabe databses */

 
// old link for old data base //$selected = mysql_select_db('mt_sms');
$selected = mysql_select_db('infocellvas');
 
  /*if there is a fail in selection of database  it will print error*/
 if(!$selected)
 { print "error in databse selection";}

else{


	mysql_query("set character_set_server='utf8'"); 
mysql_query("set names 'utf8'");
}


 
 ?>