<?php
include_once('session_check.php');
include_once('Connection.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Quản trị</title>
    </head>
    <script src="Ajax.js" type="text/javascript"></script>
    <script src="khach_hang_status.js" type="text/javascript"></script>
    <script type="text/javascript">
        function OverSelectRow(object)
        {
            object.style.backgroundColor = "#FFF7E6";
        }
        function OutSelectRow(object)
        {
            object.style.backgroundColor = "#fff";
        }
    </script>
    <style type="text/css">
        td{border-bottom: thin  solid #E0E0E0;  height:25px; line-height:130%}
        th{background-color:#FC0; height:40px; font-weight:bold; font-size:16px; text-align:left}
        .popup{position:absolute; width:600px; height:250px; display:block; z-index:3;  background-color:#FFF}
        #popup_{display:none}
        #Add_pr_step{margin-left:40px; float:left; height:35px; width:100px; text-align:center; line-height:250%; font-size:16px; font-weight:bold; background-color:#F5F5F5; color:#999
        }
        .add_item{padding-top:10px}
        input{ background-color:#CCC; border:none; height:25px; font-size:18px; font-weight:bold }
        textarea{ font-size:16px}
    </style>
    <link rel="stylesheet" href="admin.css" type="text/css" />
    <body>
        <div style="position:relative">
            <?php
                include_once('header.html');
                include_once("inbox_info_user.php");
            ?>
            <div style=" position:relative; margin-top:10px; padding-top:10px; padding-left:10px; padding-right:10px; padding-bottom:10px; background-color:#FFF; font-weight:bold; font-size:14px">
                <a href="/admin/xuatexcelchuagiao.php" style="float: right;  margin-bottom: 5px;"><img src="image/excel-xls-icon.png" alt="Xuất excel" title="Xuất excel" width="30" height="30" /></a>
                <table cellspacing="0" width="100%"  style="outline:thin #FFF7E6 solid;" >
                    <th width="2%"></th>
                    <th width="7%">Họ tên</th>
                    <th width="14%">Ngày đặt vé</th>
                    <th width="8%">Email</th>
                    <th width="12%"> Địa chỉ</th>
                    <th width="11%">Điện thoại</th>
                    <th width="9%">Loại vé</th>
                    <th width="13%">Diễn giải</th>
                    <th width="22%" >Thành tiền</th>
                    <td width="2%"></th>
                        <?php
                        $connect = new Connection;
                        $connect->Connect2DB();
                        $result = $connect->ExecuteDB('SELECT users.*,don_hang.NGAYDATVE,don_hang.DIEN_GIAI, don_hang.THANHTIEN,LOAIVE, MSDH FROM users,don_hang,sanpham
													  WHERE users.USER_EMAIL=don_hang.USER_EMAIL  AND TINHTRANG=0
													  GROUP BY USER_EMAIL
													  ORDER BY don_hang.NGAYDATVE
');
                        while ($row = mysql_fetch_array($result)) {

                            echo'<tr style="cursor:pointer"  onmouseover="OverSelectRow(this)" onmouseout="OutSelectRow(this)" onclick="remove_object(this,1)" id="' . $row['MSDH'] . '"   >
						
						<td width="3%" ><img src="image/Delete.gif" name="MSDH" id="' . $row['MSDH'] . '" /></td>
						<td  width="15%"   >' . $row['USER_TEN'] . '</td>
                        <td width="9%"  >' . $row['NGAYDATVE'] . '</td>
					    <td width="8%" >' . $row['EMAIL'] . '</td>
                      	<td width="8%" >' . $row['DIACHI'] . '</td>
						<td width="8%" >' . $row['DIENTHOAI'] . '</td>
						<td width="11%">' . $row['LOAIVE'] . '</td>
						<td width="8%" >' . $row['DIEN_GIAI'] . '</td>
						<td width="22%" align="right">' . number_format($row['THANHTIEN'], 0, '', '.') . ' VNĐ</td>
						 
                 		</tr>';
                        }
                        ?>
                </table>
            </div>
        </div>
    </body>
</html>