<?php
 include_once("Connection.php");
	$page=$_GET['page'];
	switch($page)
	{
		case 2:
		     echo dangky_dangnhap_thongtin();
			 break;
	    case 3:
		    dangky_dangnhap_thanhtoan();
			 break; 
	   
	}

function dangky_dangnhap_thongtin()
{
	
	
$connect = new Connection;
$connect->Connect2DB();
$connect->Connect2DB();
$result= $connect->ExecuteDB('select * from tinhthanh');
	echo '<div style="float:left; margin-left:40px">
   	  <table width="550" style="border:#e4e8ea solid 1.5px" cellpadding="0" cellspacing="0">
            	<tr >
            	  <td height="41" style="text-indent:15px; border-bottom:solid thin #e4e8ea" ><b>Địa chỉ giao hàng của quý khách</b></td></tr>
            	<tr>
                <td>
                <table width="536" style=" margin-bottom:50px; margin-top:30px">
                	<tr valign="top">
                	<td width="235"  align="right" ><b>Họ tên</b></td>
                	<td width="289" height="35"><input type="text" placeholder="Họ và tên" id="hoten" name="acc_info"  /></td>
                  </tr>
                  <tr ><td align="right"><b>Địa chỉ giao hàng (Số nhà , Đường)</b></td><td height="24"><input style="height:40px" type="text" placeholder="Địa chỉ giao hàng (Số nhà , Đường) " id="diachi" name="acc_info" /></td></tr>
                   <tr><td align="right"><b>Tỉnh/Thành phố</b></td><td height="44"> <select id="thanhpho" name="acc_info"  >';
				    while($rows=mysql_fetch_array($result))
				     { echo    '<option value="'.$rows[1].'">'.$rows[1].'</option>';
					 }
                  
                  echo ' </select></td></tr>
				  
				  <tr><td width="235"  align="right"  ><b>Địa thoại di động</b></td>
               	  <td width="289" height="43"><input id="dienthoai" type="text" placeholder="Số điện thoại" name="acc_info"   /></td></tr>
                     <tr><td></td><td height="48" align="center" bgcolor="cbe8fa" onclick="check_acc_info()"  style="cursor:pointer" > Tiếp tục</td></tr>
                  </table>
                  </td>
                </tr>
            </table>
        
        </div>';
}

function dangky_dangnhap_thanhtoan()
{
	echo '<div style="float:left; margin-left:40px">
   	 <table  style="border:#e4e8ea solid 1.5px; padding-bottom:80px" cellpadding="0" cellspacing="0"><tr><td>
<table width="550" style="vertical-align:top">
            	<tr >
            		  <td height="41" style="text-indent:15px; border-bottom:solid thin #e4e8ea" ><b>Địa chỉ giao hàng của quý khách</b></td></tr>
            	<tr>
               		 <td height="35"><input type="radio"  name="thanhtoan" checked="checked" value="tr"/><span style="padding-left:10px">Thanh toán trực tiếp	</span>	 </td>
          </tr>
                 <tr>
               		 <td height="35"><input type="radio"  name="thanhtoan" value="gt"/><span style="padding-left:10px">Thanh toán qua ngân lượng		 </span></td>
                 </tr>
                   <tr><td height="48" >&nbsp;</td></tr>
        </table>
           </td></tr><tr><td height="48" align="center" bgcolor="cbe8fa" onclick="hoantat()" style="cursor:pointer" > Hoàn tất</td></tr></table>
        </div>
  <div style="float:right; margin-right:40px; padding-bottom:16px" > 
  <table  style="width:350px; text-indent:10px" cellpadding="0" cellspacing="0" class="thongtin_donhang">
   <tr  ><td height="53"  style=" border-bottom: solid thin #e4e8ea"><b>Địa chỉ giao hàng <span style="color:#65bcce; font-size:11px; cursor:pointer">Chỉnh sửa</span></b></td></tr>
  <tr><td height="35" style="font-size:14px">Họ và tên: <b><span id="tenkhachhangspan"></span></b></td></tr>
  <tr><td height="24" style="font-size:14px">Email: <span id="emailspan"></span></td></tr>
  <tr><td height="24" style="font-size:14px">Địa chỉ giao hàng: <span id="diachispan"></span></td></tr>
  <tr><td style="font-size:14px">Thành phố: <span id="thanhphospan"></span></td></tr>
  <tr><td style="font-size:14px" height="23">Điện thoại di động: <span id="dienthoaispan"></span></td></tr>
  <tr><td>&nbsp;</td></tr>
  </table>
  </div>';
}

?>
