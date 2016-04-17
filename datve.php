<?php

$dondathang=split(',',$_POST['dondathang']);
$thongtinkhachhang=split(',',$_POST['value']);
$diengiai=split(';',$dondathang[0]);
$dondathang[0]=$diengiai[0].' , ' . $diengiai[1];
include_once("File_control/Connection.php");
$connect = new Connection;
$connect->Connect2DB();
$MAKH='G'.date('dmYHis');
$MADH = 'MH'.date('dmYHis');
$ngaydatve = time();
$giave = explode('x', $diengiai[0]);
$giave = (int)$giave[1];

$connect->ExecuteDB( 'INSERT INTO users VALUES("'.$MAKH.'","","'.$thongtinkhachhang[2].'","","","'.$thongtinkhachhang[3].' '.$thongtinkhachhang[4].'","'.$thongtinkhachhang[5].'","'.$thongtinkhachhang[0].'")');
$connect->ExecuteDB('INSERT INTO don_hang VALUES("'.$MADH.'","'.$MAKH.'","'.$dondathang[0].'","'.$dondathang[2].'","'.date('Y-m-d', $ngaydatve).'","0","'.$dondathang[1].'","'.$dondathang[3].'")');

// Sendmail cho khach hang
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
// Setting up PHPMailer
$mail->IsSMTP();                                      // Set mailer to use SMTP

$mail->Host = 'saigonpolarexpo.com.vn';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
//This is the email that you need to set so PHPMailer will send the email from
$mail->Username = '';             // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';
$mail->Port = 25;                                    // TCP port to connect to
// Add the address to send the mail to
$mail->AddAddress($thongtinkhachhang[0]);
//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->From = 'info@saigonpolarexpo.com.vn';
$mail->FromName = 'Saigon Polar Expo';
$mail->Subject = 'Thông tin đặt vé';
//$mail->mailHeader = 'Content-type: text/html; charset=utf-8';

require 'emailTemplate.php';
$template = new EmailTemplate('mail_template/mail_template.php');
$template->hoten = $thongtinkhachhang[2];
$template->email = $thongtinkhachhang[0];
$template->diachi = $thongtinkhachhang[3] . ', ' . $thongtinkhachhang[4];
$template->sodienthoai = $thongtinkhachhang[5];
$template->soluongvedat = $dondathang[2];
$template->giave = $giave;
$template->loaive = $dondathang[3];
$template->tongtien = $dondathang[1];
$template->madonhang = $MADH;

$template->ngaydatve = 'Ngày ' . date('d', $ngaydatve) . ' Tháng ' . date('m', $ngaydatve) . ' Năm ' . date('Y', $ngaydatve) . ' '. date('H:i:s', $ngaydatve);

$body = $template->compile();

$mail->Body = $body;

//$options["ssl"]=array("verify_peer"=>false,"verify_peer_name"=>false,"allow_self_signed"=>true);

$mail->smtpConnect();

$res = $mail->Send();

//$body = '
//    Bạn đã đặt vé thành công <br/>
//    Họ và tên: '.$thongtinkhachhang[2].' <br/>
//    Email: '.$thongtinkhachhang[0].' <br/>
//    Địa chỉ: '.$thongtinkhachhang[3].' <br/>
//    Thành phố: '.$thongtinkhachhang[4].' <br/>
//    Số điện thoại: '.$thongtinkhachhang[5].' <br/>
//    Số lượng vé đặt: '.$dondathang[2].' <br/>
//    Loại vé: '.$dondathang[3].' <br/>
//    Tổng tiền: '.$dondathang[1].' <br/>
//    
//';
//$to      = $thongtinkhachhang[0];
//$headers = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
//$headers .= 'From: Sai Gon Polarex <'.'info@saigonpolarexpo.com.vn'.'>' . "\r\n";
//$headers .= 'Reply-To: '. 'info@saigonpolarexpo.com.vn' . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
//
//mail($to, 'Thông tin đặt vé', $body, $headers);

header('location:datve_thanhcong.php');
