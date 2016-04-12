<?php

$dondathang=split(',',$_POST['dondathang']);
$thongtinkhachhang=split(',',$_POST['value']);
$diengiai=split(';',$dondathang[0]);
$dondathang[0]=$diengiai[0].' , ' . $diengiai[1];
include_once("File_control/Connection.php");
$connect = new Connection;
$connect->Connect2DB();
$MAKH='G'.date('dmYHis');

 $connect->ExecuteDB( 'INSERT INTO users VALUES("'.$MAKH.'","","'.$thongtinkhachhang[2].'","","","'.$thongtinkhachhang[3].' '.$thongtinkhachhang[4].'","'.$thongtinkhachhang[5].'")');
 
$connect->ExecuteDB('INSERT INTO don_hang VALUES("MH'.date('dmYHis').'","'.$MAKH.'","'.$dondathang[0].'","'.$dondathang[2].'","'.date('Y-m-d').'","0","'.$dondathang[1].'","'.$dondathang[3].'")');

header('location:datve_thanhcong.php');






?>