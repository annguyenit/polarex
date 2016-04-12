<?php
						include_once('Connection.php');
						$connect = new Connection;
						$connect->Connect2DB();
						$passmoi = $_GET['passmoi'];
						$passcu = $_GET['passcu'];
						$result= $connect->ExecuteDB('SELECT COUNT(HOTEN) FROM admin WHERE PASSWORD="'.$passcu.'"') ;
						$row = mysql_fetch_row($result);
						
						if($row[0]>=1)
						 {
						    $result= $connect->ExecuteDB('update admin set PASSWORD="'.$passmoi.'"');

							$connect->CloseDB();
						    echo '1';
						  }
					else echo '0';

?>