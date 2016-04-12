<?php session_start();
	if(isset($_SESSION['userinfo'])==FALSE) 
		
    	header('Location: login.php');
		
    else 
	{
		include('Userinfo.php');
	    $userinfo= unserialize($_SESSION['userinfo']);
	
		
		
	}
	
			