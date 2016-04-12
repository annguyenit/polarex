<?php  include_once("File_control/Connection.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập | Đăng ký</title>
<link href="page.css" rel="stylesheet" type="text/css" />
<link type="image/x-icon" href="pic/logo.ico" rel="shortcut icon" />
<script type="text/javascript" src="File_control/Ajax.js"></script>
<script type="text/javascript" src="File_control/_function_email.js"></script>

<style type="text/css">
<!--
a {
	font-family: Minion Pro, Times New Roman, Arial;
	color: #57b7ca;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
	cursor:pointer;
}
a:active {
	text-decoration: none;
}
-->
body{font-family:Arial, Helvetica, sans-serif; font-size:15px; color:#737373}
li{display:inline}
#email,#password,#hoten,#diachi,#thanhpho,#quanhuyen,#dienthoai{width:250px; height:25px; border:thin #e4e8ea solid}
.chitiet,th{background-color:#f8f9fa}
th{ line-height:41px}
.chitiet_gia{text-align:right; padding-right:20px}

.chitiet .chitiet_td, .chitiet .chitiet_gia{border:none}
.thongtin_chitiet_1,.chitiet .chitiet_td,.chitiet .chitiet_gia,th, input{text-indent:10px}
.thongtin_donhang{border:#e4e8ea thin solid}
.thongtin_chitiet_1, .thongtin_chitiet{background-color:#FFF}
.thongtin_chitiet td{border:none}
</style></head>

<body>

<script type="text/javascript">
var type_guest='gus';
var acc_info_array=[];
var datve_array=[];
var start=0;
//var end=2;
var page=1;
	function dangnhap_(object)
	{ var focus_object=[];
		focus_object[0]= document.getElementById('password');
		focus_object[1]=document.getElementById('email')
	   if(object.id=='signed_on') {focus_object[0].disabled='';focus_object[1].disabled=''; type_guest='acc'; focus_object[1].focus(); }
		else                      {focus_object[0].disabled='disabled';focus_object[1].disabled='disabled'; type_guest='gus';}
	   
		
	}

 function check_acc()
 { 
   start=0;
   var is_error=false;
 
    var acc_info=document.getElementsByName('acc_info');
   // if(check_email(document.getElementById('email'))==false) is_error=true;
	 if(type_guest=='acc')
	     if(document.getElementById('password').value.length==0) is_error=true;
	
	 if(is_error==false)
	 {
		 add_array(acc_info);
		 page++;
		style_img_arrow_status_bar();
		 sendinfo();
	 }
	 
	 
	  
 }
 function style_img_arrow_status_bar()
 {
  	 
	 var status_bar=document.getElementById('img_arrow_status').style;
	// alert(status_bar.paddingLeft.split('px',1));
     var status_bar_int=parseInt (status_bar.paddingLeft.split('px',1))+200;
	 status_bar.paddingLeft=status_bar_int+'px';
	
 }
function check_acc_info()
{ 
    start=2;
	var i=0;
	 var  acc_info=document.getElementsByName('acc_info');
	 var phone_info=document.getElementById('dienthoai');
	var is_error=false;
    var object_error="";

  if((isNaN(phone_info.value)==false) && (phone_info.value.length>0 ))
  {
	  
  	while(i<2)
    {
	   if(acc_info.item(i).value.length<=0) {is_error=true; object_error=acc_info.item(i); break;}
	   i++;
    }
    
  
  
     if (is_error==false) 
	 {
		 add_array(acc_info);
		 style_img_arrow_status_bar()
		 page++;
		 sendinfo();
	 }
  
  }
  else  object_error=document.getElementById('dienthoai');
  
  object_error.style.backgroundColor='#e4e8ea';
 
	
	
}

 function add_array(acc_info)
	{
		var i=0;
		 while(i<acc_info.length)
		 {
			 
							  
			 acc_info_array[start]=acc_info.item(i).value;
			 start++;i++;
		 }
		 
		
	}


     function sendinfo()
	{
		// while(start<end)
		// {
			// acc[start]
		// }
		
		 
			var ajax = ajaxFunction();
			
			try{
				
				ajax.open("GET",'File_control/control_page.php?page='+page,true);
				ajax.send(null);
				ajax.onreadystatechange= function(){ if(ajax.readyState==4)	
															
															 document.getElementById('info1').innerHTML=ajax.responseText;
															 
														  if(page==3) thongtinkhachhang();
														
													}
				}catch(e) {alert (e);}
			}
			
		
    function thongtinkhachhang()
	{
		var tenkhachhang = document.getElementById('tenkhachhangspan');
		var diachi = document.getElementById('diachispan');
		var thanhpho = document.getElementById('thanhphospan');
		var dienthoai = document.getElementById('dienthoaispan');
												   
			tenkhachhang.innerHTML=		acc_info_array[2];		
			diachi.innerHTML=		acc_info_array[3];	
			thanhpho.innerHTML=		acc_info_array[4];	
			dienthoai.innerHTML= acc_info_array[5];
		
		
	}
	function hoantat()
	{
		var form_object = document.createElement('form');
		var input_object = document.createElement('input');
		input_object.value=acc_info_array.toString();
		input_object.type='text';
	    input_object.name='value';
		form_object.method='post';
		form_object.action='datve.php';
		form_object.appendChild(input_object);
		
		
		
		
		
		 var i=0;
	 var slvedat=0;
	 var thanhtien=0;
	 var diengiai='';
	
	while(i<datve_array.length)
	 {
		 
		 diengiai =diengiai+datve_array[i][1]+ ' vé '+ datve_array[i][0] + ' x ' +datve_array[i][2] + " ; ";
		
	  thanhtien= thanhtien + parseInt(datve_array[i][1]) * parseInt(datve_array[i][2]);
		
		
		 slvedat = slvedat + parseInt(datve_array[i][1]);
		 i++;
	 }
	
	 var don_dat_hang = document.createElement('input');
	     don_dat_hang.value=diengiai+','+thanhtien+','+slvedat+','+datve_array[0][3];
		don_dat_hang.type='text';
	    don_dat_hang.name='dondathang';
	    form_object.appendChild(don_dat_hang);
	    //alert(datve_array);
	form_object.submit();
	}
		
	

</script>

	<?php include_once('header.html')?>
    
    	<?php include_once('status_bar.html')?>
    	<div style="background-color:white; padding-top:50px; padding-bottom:80px">
         <span id="info1"> <?php include_once('dangky_dangnhap_template.php') ?></span>
           
           <span id="info2"> <?php include_once('thongtin_donhang.php')?></span>
        
        
        <div style="clear:both"></div>
      </div>
      <?php include_once('footder.html') ?>
    </div> <!-- page -->


</body>
</html>