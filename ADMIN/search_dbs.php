<?php 	 include_once('session_check.php');

	

include_once('Connection.php');
	      
		 start();
		   
    function start()
	{  
			$keys=$_GET['keys'];
		
		switch ($_GET['condition'])
		{
			case 'kh':
			  $keys= ' USER_TEN LIKE "%' . $keys . '%"';
			   search_($keys);
			 break;
			  case 'dt':
			  $keys= ' DIENTHOAI LIKE "%' . $keys . '%"';
			 search_($keys);
			 break;
			 case 'sp':
			  $keys= ' LOAIVE LIKE "%' . $keys . '%"';
			 search_($keys);
			 break;
			/* case 'em':
			 $keys= ' USER_EMAIL LIKE "%' . $keys . '%"';
			  search_($keys);*/
			 case 'dv':
			
			 search_date($keys);
			 break;
			
		}
	}		
			
?>


<?php

function search_date($keys)
{
	
	$value= split('~',$keys);
	if (count($value)>1)
		$key= ' NGAYDATVE BETWEEN "' . $value[0] . '" AND "' . $value[1].'"';
	else 
	    $key = ' NGAYDATVE="'.$value[0].'"';
	
	search_($key);
}


function search_($keys)
		{
			 $connect = new Connection;
		   $connect->Connect2DB();
			
			echo '   <table cellspacing="0" width="100%"  style="outline:thin #FFF7E6 solid" >
                 <th width="2%"></th>
                
<th width="7%">Họ tên</th>
                      <th width="14%">Ngày đặt vé</th>
                       <th width="8%">Email</th>
                        
<th width="12%"> Địa chỉ</th>
                         
                           <th width="11%">Điện thoại</th>
<th width="9%">Loại vé</th>
                            <th width="13%">Diễn giải</th>
                            <th width="22%" >Thành tiền</th>
                 <td width="2%"></th>';
                 
                	$result= $connect->ExecuteDB('SELECT users.*,TINHTRANG,don_hang.NGAYDATVE,LOAIVE,DIEN_GIAI,THANHTIEN,don_hang.SOLUONG,MSDH FROM users,don_hang
													  WHERE users.USER_EMAIL=don_hang.USER_EMAIL 
													  AND ' . $keys . '
													  GROUP BY USER_EMAIL
													  ORDER BY don_hang.NGAYDATVE
');
					
					while($row = mysql_fetch_array($result))
					{
						
						echo'<tr style="cursor:pointer"  onmouseover="OverSelectRow(this)" onmouseout="OutSelectRow(this)"    >
						
						<td width="3%"  onmouseover="OverSelectRow(this)" onmouseout="OutSelectRow(this)" >';
						
						if ( $row['TINHTRANG']==1)	echo '<img src="image/check.png" name="MSDH" id="'.$row['MSDH'].'" />';
						else         				echo '<img src="image/Delete.gif" name="MSDH" id="'.$row['MSDH'].'" />';
						
						echo '
						</td>
						<td  width="15%"   >'.$row['USER_TEN'].'</td>
                        <td width="9%"  >'.$row['NGAYDATVE'] .'</td>
					    <td width="8%" >'.$row['USER_EMAIL'].'</td>
                      	<td width="8%" >'.$row['DIACHI'].'</td>
						<td width="8%" >'.$row['DIENTHOAI'].'</td>
						<td width="11%">'.$row['LOAIVE'].'</td>
						<td width="8%" >'.$row['DIEN_GIAI'].'</td>
						<td width="22%" align="right">'.number_format($row['THANHTIEN'],0,'','.').' VNĐ</td>
						 
                 		</tr>'	;
							
					}
				
				
			
			
			
		}
			
			

?>


