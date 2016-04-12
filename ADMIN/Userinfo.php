<?php 
class User{
		public $TENGOI;
	
		
	
		
		function login($email,$password,$id)
		{	  include 'Connection.php';
			$sqlext='';
			 if($password!='')
				 	$sqlext=' and PASSWORD="'.$password.'"';
			
			
			if( $email!='' && $sqlext!='')
			 {
				
				 
			 $sqlstr='SELECT * FROM admin where EMAIL="'.$email.'"'.$sqlext;
		
		
			$result=0;
			
			$connect = new Connection;
	     	$connect->Connect2DB();
			$result= $connect->ExecuteDB($sqlstr);
			$row= mysql_fetch_array($result) or die( mysql_error());
			
			if(count($row)>0)
			{
			 
				
				$this->EMAIL_NGUOIDUNG= $row[5];
				$this->TENGOI= $row[1];
		
				$result=1;
			}
			$connect->CloseDB();
			}
						
			return $result;
			
			
			
		}
		
		
	}
		
	
?>