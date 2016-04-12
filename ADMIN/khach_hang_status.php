<?php include_once('session_check.php');
	  include_once('Connection.php');
	   $keys= $_GET['keys'];
	   $kind= $_GET['kind'];
	   
	   
	   	
 		   $connect = new Connection;
		   $connect->Connect2DB();
		
		   $result= $connect->ExecuteDB('UPDATE don_hang set TINHTRANG="'.$kind.'" where MSDH="'.$keys.'"');
		     $connect->CloseDB();
	
?>