<?php
header('Content-Type: text/html; charset=utf-8');
header('Content-Type: application/vnd.ms-excel; charset=utf-8');
header('Content-Disposition: attachment;filename="danhsachdonhang.xls"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header ('Cache-Control: cache, must-revalidate');
header ('Pragma: public');

include_once('session_check.php');
include_once('Connection.php');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/PHPExcel/Classes/PHPExcel.php';

$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objPHPExcel = $objReader->load("mau_xuat_excel.xlsx");

$connect = new Connection;
$connect->Connect2DB();
$sql = 'SELECT users.*, don_hang.* FROM users,don_hang WHERE users.USER_EMAIL=don_hang.USER_EMAIL AND TINHTRANG = 0 ORDER BY don_hang.NGAYDATVE';
$result = $connect->ExecuteDB($sql);

$count_row = 3;
$count = 1;
while ($row = mysql_fetch_array($result)) {
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A' . $count_row, $count++)
            ->setCellValue('B' . $count_row, isset($row['NGAYDATVE']) ? $row['NGAYDATVE'] : '') 
            ->setCellValue('C' . $count_row, isset($row['USER_EMAIL']) ? $row['USER_EMAIL'] : '') 
            ->setCellValue('D' . $count_row, isset($row['USER_TEN']) ? $row['USER_TEN'] : '') 
            ->setCellValue('E' . $count_row, isset($row['DIACHI']) ? $row['DIACHI'] : '') 
            ->setCellValueExplicit('F' . $count_row, isset($row['DIENTHOAI']) ? $row['DIENTHOAI'] : '', PHPExcel_Cell_DataType::TYPE_STRING)
            ->setCellValue('G' . $count_row, isset($row['LOAIVE']) ? $row['LOAIVE'] : '') 
            ->setCellValue('H' . $count_row, isset($row['SOLUONG']) ? $row['SOLUONG'] : '') 
            ->setCellValue('I' . $count_row, $row['TINHTRANG'] == 0 ? 'CHƯA THANH TOÁN' : 'ĐÃ THANH TOÁN');
   
   $count_row++;
}

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;