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
	 
		function Ajax_(object)
		{
			
		
			var kind=object.id;
			var value= document.getElementsByName(object.value);
			var i=0;
			var keys='';
			var iserror=0;
			while (i<value.length)
			{
				if(value.item(i).id=='status')
				{
					if(value.item(i).checked==false) value.item(i).value=0;
					else value.item(i).value=1;
				}
				if((value.item(i).id=='gia')||(value.item(i).id=='giangayle'))
				{
					if(isNaN(value.item(i).value)==true) iserror=1;
				}
				
			    keys=keys+value.item(i).id+'='+value.item(i).value+'&';
				i++;
			}
			
			if(iserror==0)
			{
				keys=keys+'kind='+kind;
				keys=keys+'&MS='+object.value;
			
			
			
			
				xmlhttp.onreadystatechange=function()
				{
					Ajax_info();
				}
		
				xmlhttp.open('GET','sanpham_save.php?'+keys,true);
				xmlhttp.send(null);
			
			}
			else 
				alert('Nhập sai số');
		
		}
	 
	  function Ajax_info()
	  {
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		{
					alert('Đã lưu thành công');
					
					
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
	
	


</script>
<style type="text/css">

td{border-bottom: thin  solid #E0E0E0;  height:25px; line-height:130%}
th{background-color:#FC0; height:40px; font-weight:bold; font-size:16px; text-align:left}
.popup{position:absolute; width:600px; height:250px; display:block; z-index:3;  background-color:#FFF}
#popup_{display:none}

#Add_pr_step{margin-left:40px; float:left; height:35px; width:100px; text-align:center; line-height:250%; font-size:16px; font-weight:bold; background-color:#F5F5F5; color:#999
}

.add_item{padding-top:10px}
input{ background-color:#CCC; border:none; height:25px; font-size:17px; font-weight:bold }
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
            	
                 
         <div style="margin-bottom:20px; font-size:22px; font-weight:bold">Giá vé</div>
                 <table cellspacing="0" width="100%"  style="outline:thin #FFF7E6 solid" >
                
						<th width="25%">Loại vé</th>
                    
                       <th width="25%">Hình</th>
                           <th width="25%">Giá</th>
						<th width="25%">Giá ngày lễ</th>
                           
               
                 
                 <?php
						$connect = new Connection;
						$connect->Connect2DB();
						$result= $connect->ExecuteDB('SELECT *FROM sanpham');
					while($row = mysql_fetch_array($result))
					{
						
						echo'<tr >
						
						
						
                         <td width="25%"  ><input type="text" value="'.$row['TENSP'].'"  disabled="disabled" /></td>
                       <td  ><input type="text" value="'.$row['HINHSP'].'" name="'.$row['MSSP'].'" id="hinh"  /></td>
						<td ><input type="text" value="'.$row['GIA'].'"   name="'.$row['MSSP'].'" id="gia" /></td>
						<td  ><input type="text" value="'.$row['GIANGAYLE'].'" name="'.$row['MSSP'].'" id="giangayle" /></td>
						<td    ><button id="s" value="'.$row['MSSP'].'" onclick="Ajax_(this)">Lưu</button></td>				 
                 		</tr>'	;
							
					}
				
				 ?>
					
                
                 	
             </table>
      
      
      <div style="margin-bottom:20px; font-size:22px; font-weight:bold; margin-top:30px">Khuyến mãi</div>
                 <table cellspacing="0" width="100%"  style="outline:thin #FFF7E6 solid" >
                
						<th width="25%">Tên khuyến mãi</th>
                    
                       <th width="25%">Thông tin</th>
                           <th width="25%">Tình trạng</th>
						
                           
               
                 
                 <?php
						
						$result= $connect->ExecuteDB('SELECT *FROM khuyenmai');
					while($row = mysql_fetch_array($result))
					{
						
						echo'<tr >
						
						
						
                         <td width="25%"  ><input type="text" value="'.$row['TENKHUYENMAI'].'" name="'.$row['MSKHUYENMAI'].'" id="ten"   /></td>
                       <td  ><input type="text" value="'.$row['THONGTIN'].'" name="'.$row['MSKHUYENMAI'].'" id="thongtin"  /></td>
						<td ><input type="checkbox" value="'.$row['STATUS'].'"   name="'.$row['MSKHUYENMAI'].'" id="status" ';
						if ($row['STATUS']==1) echo ' checked="checked"';
						
						echo '/></td>
						
						<td    ><button id="k" value="'.$row['MSKHUYENMAI'].'" onclick="Ajax_(this)">Lưu</button></td>				 
                 		</tr>'	;
							
					}
				
				 ?>
					
                
                 	
             </table>
      
       
    </div>
      
      
       
    </div>


 


</div>



</body>
</html>
