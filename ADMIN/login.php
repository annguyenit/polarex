<?php
	session_start();
	if(isset($_SESSION['userinfo']))
		unset($_SESSION['userinfo']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập</title>

</head>
<link rel="stylesheet" href="login.css" type="text/css" />
<body>
<script src="Ajax.js" type="text/javascript"></script>
<script src="md5.js" type="text/javascript"></script>
<script src="_function_email.js" type="text/javascript"></script>
<script type="text/javascript">
	function sendinfo()
	{
		var user=document.getElementById('user');
		var password=document.getElementById('password');
		var title =document.getElementById('title');
		if( user.value.length >0 && password.value.length >0)
		{
			
		
		  if(check_email(user))
		    {
			var ajax = ajaxFunction();
			
			try{
				
				ajax.open("GET",'./CheckLogin.php?Email=' + user.value+'&PassWord=' + calcMD5(password.value),true);
				ajax.send(null);
				ajax.onreadystatechange= function(){ if(ajax.readyState==4)
														if(ajax.responseText!=0)
														{
															
															window.location=ajax.responseText;
														}
														else
											 				title.innerHTML='Kiểm tra lại username và password!';
													}
				}catch(e) {alert (e);}
			}
			else title.innerHTML='Kiểm tra lại username và password!';
		}
		else
			document.getElementById('title').innerHTML='Đang có mục để trống!!';
		
			
		
		
	}
	function eventkey(e)
	{
		if(e.keyCode==13)
			sendinfo();
		
	}


</script>
 <form method="post" action="CheckLogin.php" id="frmLogin">
  
<div style="margin:25% 30% auto; position:relative">
    	<div style="color:#FFF">
    	  <div style="padding:15px 15px 5px 5px; font-size:25px"><img src="image/Locked.png" width="24" height="30" /><span style="padding-left:10px"> Đăng nhập</span></div></div>
   	  <div style=" outline:#999 3px solid; margin-top:5px; padding-bottom:30px; background-color:#FFF">
        	<table cellpadding="10px" style="font-size:20px">
            	<tr>
                	<td>Email</td>
                	<td><input type="text" name="UserName"  id="user"  onkeypress="eventkey(event)"  /></td>
                </tr>
                <tr>
                	<td>Mật khẩu</td>
                    <td><input type="password" name="PassWord"   id="password"  onkeypress="eventkey(event)"  /></td>
                </tr>
                
            </table>
        </div>
     
<div id="input" style="position:absolute; left: 304px; top: 160px; cursor:pointer; color:#33F; width: 96px; font-size:23px; color:#009" onclick="sendinfo()">Xác nhận</div>
<div style="position:absolute; left: 79px; top: 165px; color:#F00; font-size:12px"><span id="title"></span></div>
   </div>
	</form>
</body>

</html>