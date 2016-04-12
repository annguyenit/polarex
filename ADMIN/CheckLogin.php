<?php
	include('Userinfo.php');
	 $user = new User;
	 $result=$user->login($_GET['Email'], $_GET['PassWord'],'');
		
	
	if($result) 
	{	
		
			session_start();
			$_SESSION['userinfo']=serialize($user);
			
		echo './admin.php';
		
	}
	else 
		echo $result; //dang nhap that bai tuong duong result =0
?>