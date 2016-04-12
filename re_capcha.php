<?php

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
   
    if ($result->success)
    {
        echo "1";
    }
    else {
        echo "0";
    }
}

?>