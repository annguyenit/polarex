<?php
   class Connection{
	   
	   function Connect2DB()
	   {	 
	   		global $con;
	   		
		   //$con= mysql_connect(localhost,'saigonpolarexpo','saigonexpo159753',FALSE,131072) or die (mysql_errno()) ;
                        $con= mysql_connect('localhost','root','root',FALSE,131072) or die (mysql_errno()) ;
						
		 	 mysql_select_db('saigonpolarexpo_banve_dbs');
		
		 
	   }
	   
	   function CloseDB()
	   {	
	   		global $con;
	   		mysql_close($con);
			
			
	   }
	   
	   function ExecuteDB($sqlstr)
	   {
	   		global $con;
			
			mysql_set_charset('utf8',$con);
	   		$result = mysql_query($sqlstr,$con) or die(mysql_error());
			
			 
			 return $result;
			
			  
		}
	   
	   
	   function Delete($table,$condition)
	   {
		   global $con;
		   $sqlstr='Delete from '.$table.' where ' . $condition;
		   return mysql_query($sqlstr,$con) or die (mysql_error());
	   }
	   
	   
   }


?>