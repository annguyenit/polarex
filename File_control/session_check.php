<?php session_start();
	if(isset($_SESSION['guest'])==FALSE) 
		
    	$_SESSION['guest']='G'.date('dmYhis').rand(0,1000);
		
    else 
	{
		if($_SESSION['guest'][0]!='G')
		{
			 include_once('user_guest.php');
		
	   		 $guest= unserialize($_SESSION['guest']);
		}
	
		
		
	}
	
			?>