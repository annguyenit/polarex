<?php

$dondathang=split(',',$_POST['dondathang']);
$thongtinkhachhang=split(',',$_POST['value']);
$diengiai=split(';',$dondathang[0]);
$dondathang[0]=$diengiai[0].' , ' . $diengiai[1];
include_once("File_control/Connection.php");
$connect = new Connection;
$connect->Connect2DB();
$MAKH='G'.date('dmYHis');

$connect->ExecuteDB( 'INSERT INTO users VALUES("'.$MAKH.'","","'.$thongtinkhachhang[2].'","","","'.$thongtinkhachhang[3].' '.$thongtinkhachhang[4].'","'.$thongtinkhachhang[5].'","'.$thongtinkhachhang[0].'")');
 
$connect->ExecuteDB('INSERT INTO don_hang VALUES("MH'.date('dmYHis').'","'.$MAKH.'","'.$dondathang[0].'","'.$dondathang[2].'","'.date('Y-m-d').'","0","'.$dondathang[1].'","'.$dondathang[3].'")');

// Sendmail cho khach hang
$body = '
    Bạn đã đặt vé thành công <br/>
    Họ và tên: '.$thongtinkhachhang[2].' <br/>
    Email: '.$thongtinkhachhang[0].' <br/>
    Địa chỉ: '.$thongtinkhachhang[3].' <br/>
    Thành phố: '.$thongtinkhachhang[4].' <br/>
    Số điện thoại: '.$thongtinkhachhang[5].' <br/>
    Số lượng vé đặt: '.$dondathang[2].' <br/>
    Loại vé: '.$dondathang[3].' <br/>
    Tổng tiền: '.$dondathang[1].' <br/>
    
';
$to      = $thongtinkhachhang[0];
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: Sai Gon Polarex <'.'SaiGonpolarex@gmail.com'.'>' . "\r\n";
$headers .= 'Reply-To: '. 'SaiGonpolarex@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$res = mail($to, 'Thông tin đặt vé', $body, $headers);

header('location:datve_thanhcong.php');






?>