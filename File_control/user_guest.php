<?php 
include_once('Connection.php');
class User{
		public $TENGOI;
		public $MATKHAU;
		public $EMAIL_NGUOIDUNG;
	    public $SINHSONGTAI;
		public $HINHANH;
		public $NGAYTHAMGIA;
		public $NGAYDANGNHAP;
		public $DIENTHOAI;
		public $GIOITINH;
		public $STATUS;
	
		
		function login($email,$password,$id)
		{	  
			$sqlext='';
			 if($password!='')
				 	$sqlext=' and PASSW="'.$password.'"';
			// else   $sqlext=' and EMAIL="'.$id.'"';
			
			if( $email!='' && $sqlext!='')
			 {
				
				 
			 $sqlstr='SELECT * FROM nguoidung where EMAIL="'.$email.'"'.$sqlext;
		
		
			$result=0;
			
			$connect = new Connection;
			$connect->Connect2DB();
			$result= $connect->ExecuteDB($sqlstr);
			$row= mysql_fetch_array($result) or die( mysql_error());
			
			if(count($row)>0)
			{
			   	$this->TENGOI= $row[1];
				//$this->MATKHAU= $row[1];
				
				$this->EMAIL_NGUOIDUNG= $row[6];
				
				$this->NGAYSINH= $row[2];
				$this->SINHSONGTAI= $row[5];
				$this->HINHANH= $row[3];
				//$this->LIKE= $row[6];
		    	//$this->DISLIKE= $row[7];
				$this->DIENTHOAI= $row[7]; 
				$this->GIOITINH= $row[8]; 
				$this->NGAYDANGNHAP=$row[9];
				$this->STATUS = $row[12];
				$result=1;
			}
			$connect->CloseDB();
			}
						
			return $result;
			
			
			
		}
		
		
	}
		
	// $user = new User;
	// $result=$user->login("k@gmail.com", "j2jd241gd2kh41g42tjj52hd685g2hk",'');
	// echo $result;
?>