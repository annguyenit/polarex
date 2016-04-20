<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đặt vé thành công</title>
<link href="page.css" rel="stylesheet" type="text/css" />
<link type="image/x-icon" href="pic/logo.ico" rel="shortcut icon" />
</head>

<body>

<?php include_once('header.html')?>

<div style="background-color:white; padding-top:100px; padding-bottom:80px">
       
        <div align="center"><h1>Cám ơn bạn, bạn đã đặt vé thành công !! <br /> Saigon Polar Expo đã tiếp nhận đơn hàng  và  gửi thông tin chi tiết đơn hàng đến Email bạn, hãy kiểm tra trong hộp thư Spam</h1></div>
        <div align="center"><h6>sau <span id="time">10 </span> giây page sẽ tự động chuyển</h6></div>
        
        <div style="clear:both"></div>
      </div>
<script type="text/javascript">
var dem=9; 
var t;
chuyentrang();
function chuyentrang()
{
		document.getElementById('time').innerHTML=dem;
	dem=dem-1;
if(dem>0)t=setTimeout(function(){chuyentrang()},1000);
else setTimeout(function(){window.location='index.php'},1000);

}

</script>

 <?php include_once('footder.html') ?>
</body>
</html>