<?php include_once('session_check.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change password</title>
</head>

<body>
<link rel="stylesheet" href="admin.css" type="text/css" />
<script src="Ajax.js" type="text/javascript"></script>
<script src="md5.js" type="text/javascript"></script>

<style type="text/css">
   
   input{margin-top:20px; font-size:14px; width:90%; height:40px; border:none; outline:none; font-size:16px; padding-left:20px }
   
</style>

<div style="position:relative">
<?php 

include_once('header.html');

 ?>
 
 <script type="text/javascript">
		
		
		xmlhttp=ajaxFunction();
	 
		function Ajax_(gp,filename)
		{ 
			var passcu = document.getElementById('passcu').value;
			var passmoi = document.getElementsByName('passmoi');
			var error_ = 0;
		    if (passcu.length>0);
			   if(passmoi.item(0).value==passmoi.item(1).value) 
			   { 
				 	 xmlhttp.onreadystatechange=function()
					{
							Ajax_info();
					}
			        para='?passcu='+calcMD5(passcu)+'&passmoi='+calcMD5(passmoi.item(0).value);
					xmlhttp.open(gp,filename+para,true);
					xmlhttp.send(null);
			  }
			  else alert('Password mới không trùng khớp với password nhập lần 2');
			
		}
	
	  function Ajax_info()
	  {
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
   		{   
					if(xmlhttp.responseText==1)		window.location='admin.php';
					
				    else alert('Nhập sai password cũ');
		}
	
	  }
	  
	  function eventkey(e)
	{
		if(e.keyCode==13)
			Ajax_('GET','save_pass.php');
		
	}
	  
 	</script>
 <div>
<div style="margin:10% 15% auto; width:450px; height:280px;  border:#FFF thin solid; position:relative">
    <div style="padding-top:10px; font-weight:bold; padding-left:20px; font-size:24px; height:35px; background-color:#FC0">Đổi mật khẩu Admin</div>
    <div style="margin-left:20px"> <!-- content -->
		<div>
    	
    		<input onkeypress="eventkey(event)" id="passcu" type="password" placeholder='Mật khẩu hiện giờ'  />
            
    	</div>
		<div>
    	
    		<input onkeypress="eventkey(event)" name="passmoi" id="passmoi" type="password" placeholder='Mật khẩu mới'  />
            
    	</div>
   		 <div>
    	
    		<input onkeypress="eventkey(event)" name="passmoi" type="password" placeholder='Mật khẩu mới lần nữa'  />
            
    	</div>
     </div>
    <div style=" cursor:pointer;position:absolute; left: 404px; top: 11px; font-weight:bold; font-size:20px" onclick="Ajax_('GET','save_pass.php')">Save</div>
	</div>
 
</div>
</div>

</body>
</html>