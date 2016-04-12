<?php include_once('session_check.php');

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm kiếm</title>
</head>
<!--
 search theo tenkh, sanpham, dien thoai, ngay dat ve

 -->
<body>
<style type="text/css">
	.search{color:#FFF; font-size:14px}


</style>
<script src="Ajax.js" type="text/javascript"></script>
<link rel="stylesheet" href="admin.css" type="text/css" />

 <script type="text/javascript">
		
		var condition='kh';
		
		xmlhttp=ajaxFunction();
	 
		function Ajax_(gp,filename)
		{ 
			
			
				 	 xmlhttp.onreadystatechange=function()
					{ 
							Ajax_info();
					}
			        para='?condition='+condition+'&keys='+document.getElementById('input_keys').value;
					
					xmlhttp.open(gp,filename+para,true);
					
					xmlhttp.send(null);
		
			
		}
	
	  function Ajax_info()
	  {
		  
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		{  
					
					
					document.getElementById('info').innerHTML=xmlhttp.responseText;
				
				   
		}
	
	  }
	  
	 function eventkey()
	{
		
			Ajax_('GET','search_dbs.php');
		
	}
	  
	function change_condition(object)
	{
		
		condition=object.id;
		input_ = document.getElementById('input_keys');
		input_ .value='';
		document.getElementById('input_keys').placeholder=' ' + object.innerHTML;
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
	<div style="position:relative">
	<?php 

		include_once('header.html');
		include_once("inbox_info_user.php");
 	?>
    
    
    	<div style="margin-left:150px; padding-top:10px">
          <div ><input id="input_keys" style=" width:600px; height:30px; font-size:16px" type="text" placeholder=" Tên khách hàng" onkeyup="eventkey()" /></div>   
          <div style="margin-top:10px;">
      	   <li class="search" id="kh" onclick="change_condition(this)">Tên khách hàng</li>
          <!-- <li class="search" id="em" onclick="change_condition(this)">Email</li>-->
           <li class="search" id='sp' onclick="change_condition(this)" >Loại vé</li>
           <li class="search" id='dt' onclick="change_condition(this)">Điện thoại</li>
           <li class="search" id='dv' onclick="change_condition(this)">Ngày đặt vé</li>
          </div>
      
        </div>
       
       <div style=" background-color:white; margin-top:50px" id="info">
       
        
       
       
       
       </div>
       
       
       
       
       
       
    
    
        </div>
        </div>
 	   </div>
 	</div>
</body>
</html>