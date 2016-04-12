<?php 

$slvetreem=isset($_POST['treem']) ? $slvetreem : 0;
$loaive = $_POST['loaive']; 
$slvenguoilon=$_POST['nguoilon'];
$start_ve_array=0;

$tenloaive=($loaive=='nt')?'Ngày thường' : 'Ngày lễ';
include_once('File_control/Connection.php');
$connect = new Connection;
						$connect->Connect2DB();
						$result= $connect->ExecuteDB('select * from sanpham');

$ve=array();
		 while($row = mysql_fetch_array($result))
		{
					
					$ve[$row[0]]['TENVE']=$row[1];
					$ve[$row[0]]['nt']= $row[3];
					$ve[$row[0]]['nl']=$row[4];
		 }
		 
 $connect->CloseDB();
 $tamtinh=0;
?>

<div style="float:right; margin-right:40px">
        	<table style=" width:350px" class="thongtin_donhang" cellpadding="0" cellspacing="0">
            <tr ><td height="41"  colspan="2" style="text-indent:10px"  ><b>Thông tin đơn hàng</b></td></tr>
            <tr >
            	<td colspan="2">
                	<table width="100%" border="0" cellpadding="0" cellspacing="0"  style="margin-bottom:50px" class="thongtin_chitiet">
                    <th style="text-align:left">Sản phẩm</th>
                    <th>Số lượng </th>
                    <th>Giá</th>
                    <tr align="center" class="thongtin_chitiet_1" style="padding:0px; margin:0px">
                  
                    	<?php if($slvenguoilon>0)
						{ 
							echo' <td height="36" style="text-align:left"><span>'.$ve['NL']['TENVE'].'</span></td>';
						    echo'  <td>'.$slvenguoilon.'</td> <td>'.number_format($ve['NL'][$loaive],0,'','.').'</td>';
						  $tamtinh=$tamtinh+$ve['NL'][$loaive]*$slvenguoilon;
						   
						
						?>
                        
                          <script type="text/javascript"> datve_array[<?php echo $start_ve_array?>] = new Array(5); 
						  								   datve_array[<?php echo $start_ve_array?>][0]="Người lớn";
						                                   datve_array[<?php echo $start_ve_array?>][1]="<?php echo $slvenguoilon?>";
														   datve_array[<?php echo $start_ve_array?>][2]="<?php echo $ve['NL'][$loaive]?>";
														   datve_array[<?php echo $start_ve_array; $start_ve_array++; ?>][3]="<?php echo $tenloaive?>";
						  
						  </script>
                        <?php }?>
                     </tr>
                     <tr  align="center" class="thongtin_chitiet_1" style="padding:0px; margin:0px">
                     <?php   
						 if($slvetreem>0)
						{
							echo' <td height="36" style="text-align:left">'.$ve['TE']['TENVE'].'</td>';
						    echo'  <td>'.$slvetreem.'</td> <td>'.number_format($ve['TE'][$loaive],0,'','.').'</td>';
						     $tamtinh=$tamtinh+$ve['TE'][$loaive]*$slvetreem;
						
						
						?>
                        
                         <script type="text/javascript"> datve_array[<?php echo $start_ve_array?>] = new Array(5); 
						  								   datve_array[<?php echo $start_ve_array?>][0]="Trẻ em";
						                                   datve_array[<?php echo $start_ve_array?>][1]="<?php echo $slvetreem?>";
														   datve_array[<?php echo $start_ve_array?>][2]="<?php echo $ve['TE'][$loaive]?>";
														   datve_array[<?php echo $start_ve_array?>][3]="<?php echo $tenloaive?>";
						  
						  </script>
                        
                     <?php   } ?>
                    </tr>
                    </table>
                </td>
            
            </tr>
        
            <tr> 
            	<td>
                	<table width="100%" cellpadding="0" cellspacing="0" border="0" >
                    <tr class="chitiet" >
            <td width="115" height="40" class="chitiet_td" >Tạm tính</td>
            
            <td width="171" class="chitiet_gia"><?php echo number_format($tamtinh,0,'','.')?> VND</td>
            
            </tr>
             <tr class="chitiet"><td width="115"  class="chitiet_td" style="color:#67d665" >Phí vận chuyển</td>
             <td width="171" class="chitiet_gia" style="color:#67d665" >Miễn phí</td></tr>
                    	 <tr class="chitiet">
            					<td height="49" class="chitiet_td" style="border-top:solid thin #e4e8ea" >Thành tiền<br /><span style="font-size:14px">(Đã bao gồm thuế)</span></td>
                <td style="color:#F90; font-weight:bold;border-top:solid thin #e4e8ea"  class="chitiet_gia"><?php echo  number_format($tamtinh,0,'','.')?> VND</td>
                		
                    
                    </table>
                
                </td>
            
            </tr>
            
            
            </table>
        
        
        </div>