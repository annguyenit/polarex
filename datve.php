<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

define('TRUCTIEP', 'tr');
define('GIANTIEP', 'gt');

$dondathang=split(',',$_POST['dondathang']);
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

$email = isset($_POST['email']) ? $_POST['email'] : '';
$hoten = isset($_POST['hoten']) ? $_POST['hoten'] : '';
$diachi = isset($_POST['diachi']) ? $_POST['diachi'] : '';
$thanhpho = isset($_POST['thanhpho']) ? $_POST['thanhpho'] : '';
$dienthoai = isset($_POST['dienthoai']) ? $_POST['dienthoai'] : '';
$hinhthucthanhtoan = isset($_POST['thanhtoan']) ? $_POST['thanhtoan'] : '';

$connect->ExecuteDB( 'INSERT INTO users VALUES("'.$MAKH.'","","'.$hoten.'","","","'.$diachi.' '.$thanhpho.'","'.$dienthoai.'","'.$email.'")');
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
$mail->AddAddress($email);
//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->From = 'info@saigonpolarexpo.com.vn';
$mail->FromName = 'Saigon Polar Expo';
$mail->Subject = 'Thông tin đặt vé';
//$mail->mailHeader = 'Content-type: text/html; charset=utf-8';

require 'emailTemplate.php';
$template = new EmailTemplate('mail_template/mail_template.php');
$template->hoten = $hoten;
$template->email = $email;
$template->diachi = $diachi . ', ' . $thanhpho;
$template->sodienthoai = $dienthoai;
$template->soluongvedat = $dondathang[2];
$template->giave = $giave;
$template->loaive = $dondathang[3];
$template->tongtien = $dondathang[1];
$template->makhachhang = $MAKH;

if ($hinhthucthanhtoan == TRUCTIEP) {
    $template->hinhthucthanhtoan = 'Thanh toán tiền mặt khi nhận hàng';
} else if ($hinhthucthanhtoan == GIANTIEP) {
    $template->hinhthucthanhtoan = 'Thanh toán qua tài khoản ngân hàng';
}

$template->ngaydatve = 'Ngày ' . date('d', $ngaydatve) . ' Tháng ' . date('m', $ngaydatve) . ' Năm ' . date('Y', $ngaydatve) . ' '. date('H:i:s', $ngaydatve);

$body = $template->compile();
$mail->Body = $body;

//$options["ssl"]=array("verify_peer"=>false,"verify_peer_name"=>false,"allow_self_signed"=>true);

$mail->smtpConnect();

$res = $mail->Send();

//$body = '
//    Bạn đã đặt vé thành công <br/>
//    Họ và tên: '.$hoten.' <br/>
//    Email: '.$email.' <br/>
//    Địa chỉ: '.$diachi.' <br/>
//    Thành phố: '.$thanhpho.' <br/>
//    Số điện thoại: '.$dienthoai.' <br/>
//    Số lượng vé đặt: '.$dondathang[2].' <br/>
//    Loại vé: '.$dondathang[3].' <br/>
//    Tổng tiền: '.$dondathang[1].' <br/>
//    
//';
//$to      = $email;
//$headers = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
//$headers .= 'From: Sai Gon Polarex <'.'info@saigonpolarexpo.com.vn'.'>' . "\r\n";
//$headers .= 'Reply-To: '. 'info@saigonpolarexpo.com.vn' . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
//
//mail($to, 'Thông tin đặt vé', $body, $headers);

header('location:datve_thanhcong.php');
