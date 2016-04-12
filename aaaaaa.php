<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script src = 'https: //www.google.com/recaptcha/api.js'> </script>
</head>

<body>
<?php

//if ($handle = opendir('./product/Album/ice_bar/')) {
//while (false !== ($file = readdir($handle))) {
//        echo "$file\n";
 //   }
//}
/*
$files = array_slice(scandir('product/banggiave/'), 2); //doc file bien file thanh chuoi

$i=0;
while ($files[$i])
{
	echo $files[$i];
	$i++;
}

	*/
?>






<script src='https://www.google.com/recaptcha/api.js'></script>
<form method="post" id="form_info" name="form_info">
    <div class="g-recaptcha" data-sitekey="6Ld21xwTAAAAAO3MT5bbp1bWtTFKNLejnB6IUdxs"></div>
    <input type="submit" name="caplcha" value="Kiểm Tra Mã Captcha" />
</form>
<?php
/* tạo mã bảo vệ */
    $response_string = urlencode($_REQUEST['g-recaptcha-response']);
    $secret = urlencode('6Ld21xwTAAAAALi74i_nr1FGnwwpthLVb1xVKpX9');
    $remoteip = urlencode($_SERVER['REMOTE_ADDR']);
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$response_string.'&remoteip='.$remoteip;
  
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $r = curl_exec($ch);
    $result = json_decode($r);
  
if (isset($_REQUEST['caplcha'])) {  
    /** Kiểm tra mã bảo vệ */
    if ($result->success)
    {
        echo "Mã bảo vệ đúng!";
    }
    else {
        echo "Mã bảo vệ sai!";
    }
}
?>


</body>
</html>




