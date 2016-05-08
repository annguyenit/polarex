<?php include_once('session_check.php');
	  include_once('Connection.php');
          $connect = new Connection;
          $connect->Connect2DB();
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cập nhật chuyên đề</title>

</head>

<style type="text/css">

td{border-bottom: thin  solid #E0E0E0;  height:25px; line-height:130%}
th{background-color:#FC0; height:40px; font-weight:bold; font-size:16px; text-align:left}
.popup{position:absolute; width:600px; height:250px; display:block; z-index:3;  background-color:#FFF}
#popup_{display:none}

#Add_pr_step{margin-left:40px; float:left; height:35px; width:100px; text-align:center; line-height:250%; font-size:16px; font-weight:bold; background-color:#F5F5F5; color:#999
}

.add_item{padding-top:10px}
input{ background-color:#CCC; border:none; height:25px; font-size:17px; font-weight:bold }
textarea{ font-size:16px}
</style>
<link rel="stylesheet" href="admin.css" type="text/css" />
<body>

<div style="position:relative">
<?php 
include_once('header.html');

$message = '';
$error = 0;
if (isset($_POST['ok_chuyende'])) {
    if (empty($_POST['tenchuyende'])) {
        $error = 1;
        $message = 'Vui lòng điền tên chuyên đề';
    }
    
    if ($error == 0 && empty($message)) {
        $result = $connect->ExecuteDB('UPDATE chuyende SET TEN = "'.$_POST['tenchuyende'].'", NOI_DUNG = "'.$_POST['noidung'].'" WHERE ID = ' . $_POST['id_chuyende']);
        if ($result) {
           $message = 'Cập nhật thành công'; 
           header('Location: chuyen_de.php');
        }
    }
}

if (isset($_GET['id']) && $_GET['id']) {
    $idChuyende = $_GET['id'];
    
    $result = $connect->ExecuteDB('SELECT * FROM chuyende WHERE ID = ' . $idChuyende);
    $result = mysql_fetch_assoc($result);
    
}
 ?>
    <div style=" position:relative; margin-top:10px; padding-top:35px; padding-left:10px; padding-right:10px; padding-bottom:10px; background-color:#FFF; font-weight:bold; font-size:14px">
         <?php echo !empty($message) ? $message : ''; ?>
         <div style="margin-bottom:20px; font-size:22px; font-weight:bold">Cập nhật chuyên đề</div>
         <form action="cap_nhat_chuyen_de.php" method="post" name="form_chuyende">
             <label>Tên chuyên đề: </label>
             <input type="text" name="tenchuyende" value="<?php echo isset($result['TEN']) ? $result['TEN'] : ''; ?>" />
             <br/><br/>
             <label>Nội dung: </label><br/><br/>
             <textarea cols="50" rows="10" name="noidung"><?php echo isset($result['NOI_DUNG']) ? $result['NOI_DUNG'] : ''; ?></textarea>
             <br/>
             <input type="hidden" name="id_chuyende" value="<?php echo $_GET['id'] ?>" />
             <input type="submit" name="ok_chuyende" value="Lưu" />
         </form>
       
    </div>
</div>


</body>
</html>
