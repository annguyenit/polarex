<?php include_once('session_check.php');
	  include_once('Connection.php');
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị</title>

</head>

<script src="Ajax.js" type="text/javascript"></script>


<script type="text/javascript">
		
		
		xmlhttp=ajaxFunction();
	 
		function Ajax_(gp,filename,para,position)
		{
			
			xmlhttp.onreadystatechange=function()
			{
				Ajax_info(position);
			}
			
			xmlhttp.open(gp,filename+para,true);
			xmlhttp.send(null);
			
			
		}
	
	  function Ajax_info(position)
	  {
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		{
					position.innerHTML=xmlhttp.responseText;
					
		}
	
	  }
 		
function OverSelectRow(object)
	 {
		
		object.style.backgroundColor="#FFF7E6";
	 }
     function OutSelectRow(object)
	 {
		
		   object.style.backgroundColor="#fff";
		   
	 }
	
	

function toPage(object)
{
	
	var email = document.getElementsByName(object.id)[0];
	window.location.href='info_product_daugia.php?id='+object.id+'&user='+email.innerHTML;
	
}

</script>
<style type="text/css">

td{border-bottom: thin  solid #E0E0E0;  height:25px; line-height:130%}
th{background-color:#FC0; height:40px; font-weight:bold; font-size:16px; text-align:left}
.popup{position:absolute; width:600px; height:250px; display:block; z-index:3;  background-color:#FFF}
#popup_{display:none}

#Add_pr_step{margin-left:40px; float:left; height:35px; width:100px; text-align:center; line-height:250%; font-size:16px; font-weight:bold; background-color:#F5F5F5; color:#999
}

.add_item{padding-top:10px}
input{ background-color:#CCC; border:none; height:25px; font-size:18px; font-weight:bold }
textarea{ font-size:16px}
</style>
<link rel="stylesheet" href="admin.css" type="text/css" />
<body>



<div style="position:relative">
<?php 
include_once('header.html');
include_once("inbox_info_user.php");
 ?>
 	
   		  <div style=" position:relative; margin-top:10px; padding-top:35px; padding-left:10px; padding-right:10px; padding-bottom:10px; background-color:#FFF; font-weight:bold; font-size:14px">
            	
            	<table cellspacing="0" width="100%"  style="outline:thin #FFF7E6 solid" >
            	  
            	  
<th width="auto">Mã khách hàng</th>

<th width="auto">Họ tên</th>
                    
                       <th width="auto">Email</th>
                        
<th width="auto"> Địa chỉ</th>
                         
                           <th width="auto">Điện thoại</th>

                           
                 <td width="auto"></th>
                 
                 <?php
						$connect = new Connection;
						$connect->Connect2DB();
						$result= $connect->ExecuteDB('SELECT users.* FROM users  WHERE USER_EMAIL NOT LIKE "%@%" ORDER BY USER_TEN 
');
					while($row = mysql_fetch_array($result))
					{
						
						echo'<tr style="cursor:pointer"  onmouseover="OverSelectRow(this)" onmouseout="OutSelectRow(this)"    >
						
						<td  width="auto"   >'.$row['USER_EMAIL'].'</td>
						<td  width="auto"   >'.$row['USER_TEN'].'</td>
                         <td width="auto" >'.$row['EMAIL'].'</td>
                      	<td width="auto" >'.$row['DIACHI'].'</td>
						<td width="auto" >'.$row['DIENTHOAI'].'</td>
						
										 
                 		</tr>'	;
							
					}
				
				 ?>
					
                
                 	
             </table>
      
       
    </div>





</div>



</body>
</html>
