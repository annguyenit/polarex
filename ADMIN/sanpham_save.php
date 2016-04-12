<?php 

include_once('session_check.php');
include_once('Connection.php');
 $connect = new Connection;
 $connect->Connect2DB();
 
 if ($_GET['kind']=='s')
 {
 	$hinh=$_GET['hinh'];
	$gia=$_GET['gia'];
	$giangayle=$_GET['giangayle'];
	$ms=$_GET['MS'];
	$tablename='sanpham';
	$sqlstr=' HINHSP="'.$hinh.'", ' . ' GIA="'.$gia. '", ' . ' GIANGAYLE="' . $giangayle . '"';
	$sqlwhere= ' WHERE MSSP="'. $ms. '"';
	
 }
 else
 {
	 $status=$_GET['status'];
	$thongtin=$_GET['thongtin'];
	$ms=$_GET['MS'];
	 $ten=$_GET['ten'];
	$tablename='khuyenmai';
	$sqlstr=' STATUS="'.$status.'", ' . ' THONGTIN="'.$thongtin. '", ' . ' TENKHUYENMAI="' . $ten . '"';
	$sqlwhere= ' WHERE MSKHUYENMAI="'. $ms. '"';
	
 }
 
 $result= $connect->ExecuteDB('update '.$tablename.' set '.$sqlstr.$sqlwhere);
					
					$connect->CloseDB();
						    echo '1';
			

?>