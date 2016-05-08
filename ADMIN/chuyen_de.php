<?php
include_once('session_check.php');
include_once('Connection.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Danh sách chuyên đề</title>
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
                        $connect = new Connection;
                        $connect->Connect2DB();
                        $result = $connect->ExecuteDB('
                            SELECT chuyende.*
                            FROM chuyende
                            ORDER BY chuyende.ID');
                        
                include_once('header.html');
                include_once("inbox_info_user.php");
            ?>
            <div style=" position:relative; margin-top:10px; padding-top:10px; padding-left:10px; padding-right:10px; padding-bottom:10px; background-color:#FFF; font-weight:bold; font-size:14px">
                <table cellspacing="0" width="100%"  style="outline:thin #FFF7E6 solid;" >
                    <tr>
                        <th width="3%">#</th>
                        <th width="10%">Tên chuyên đề</th>
                        <th width="25%">Nội dung</th>
                        <th width="3%"></th>
                    </tr>
                    <?php
                        while ($row = mysql_fetch_array($result)) {
                            echo "<tr>";
                                echo "<td>". $row['ID'] . "</td>";
                                echo "<td>". $row['TEN'] . "</td>";
                                echo "<td>". $row['NOI_DUNG'] . "</td>";
                                echo "<td><a href='cap_nhat_chuyen_de.php?id=".$row['ID']."'>Cập nhật</a></td>";
                            echo "</tr>";

                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>