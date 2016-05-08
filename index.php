<!DOCTYPE html>
<html lang="vi">
<head>
<title>Saigon Polar Expo chương trình triễn lãm bão băng tuyết vùng cực địa</title>
<link type="image/x-icon" href="pic/logo.ico" rel="shortcut icon" />
  <meta charset="utf-8">
  <meta name="description" content="“TP.Hồ Chí Minh năm nay có tuyết rơi rồi!”. Đây sẽ là một tin vui vô cùng thú vị của người dân thành phố, với Chương trình triển lãm “Bão Băng Tuyết vùng cực địa – sinh thái Nam Bắc Cực” lần đầu tiên xuất hiện tại Việt Nam trong năm 2016, Triển lãm này đã được tổ chức cực kỳ thành công tại Đài Loan trong 4 năm qua dưới sự đầu tư chính của công ty Digi-Choice Culture Group (Đài Loan). Với kinh nghiệm tổ chức cùng với sự mới lạ của chương trình, chúng tôi cam kết sẽ đem đến cho bạn một “Cơn bão Tuyết” thật sự để xua tan những ngày Hè oi bức !">
<meta name="keywords" content="băng đăng, saigon polar expo,triễn lãm, tuyết, khu vui chơi giải trí, địa điểm tham quan, tuyết rơi,mát lạnh, điểm tham quan thú vị, quận 7,Số 02 – 04 Đường 09, Khu đô thị HimLam, P. Tân Hưng, Quận 7, Tp.Hồ Chí Minh, cổng vietopia ">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style>
a:link {
    text-decoration: none;
}
a:hover {
   
color:#8ce0ff
}


.bg-1 { 
    background-color: #d6ffff; /* light blue */
    color: #242e2e;
}
.bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
}
.bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
}
 
  
 /* Add a dark background color with a little bit see-through */ 
.navbar {
    margin-bottom: 0;
	
    background-color: #68aabd;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity:0.9;
	position:static;
}

/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand { 
    color: #ffffff !important;
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
    color: #fff !important;
}

/* The active link */
.navbar-nav li.active a {
    color: #fff !important;
    background-color:#95d6e8 !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
    border-color: transparent;
}

/* Dropdown */
.open .dropdown-toggle {
    color: #fff ;
    background-color: #555 !important;
}

/* Dropdown links */
.dropdown-menu li a {
    color: #000 !important;
}

/* On hover, the dropdown links will turn red */
.dropdown-menu li a:hover {
    background-color: red !important;
}
 
 .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
}

.thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
	text-align:center;
}

.thumbnail img {
    width: 100%;
    height:100%;
    margin-bottom:10px;
}
 
 .logo {
    font-size: 200px;
	margin:10px;
}
@media screen and (max-width: 768px) {
    .col-sm-4 {
        text-align: center;
        margin: 25px 0;
    }
	
}

/* Add a dark background color to the footer */
footer {
     background-color: #68aabd;
    color: #f5f5f5;
    padding: 32px;
}

footer a {
    color: #f5f5f5;
}

footer a:hover {
    color: #777;
    text-decoration: none;
}

.book
{
	font-size:14px;
	padding:25px;
	background-color:#80b5ff;
}
.introduce
{
	padding:30px;
	margin:5px;
}   
.thuvienanh
{
	padding-bottom:50px;
	
}
.daily{
	pading:50px;
}
.logotext
{
	background-color: #68aabd;
	margin-bottom:0;
    font-size: 20px !important;
    letter-spacing: 4px;
   
}
</style>
  
  </head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<?php
    $urlgiave='./product/banggiave/';
	$urldaily='./product/daily/';
	$urlbanner='./product/banner/';
	
    $giave = array_slice(scandir($urlgiave), 2);
	$daily=array_slice(scandir($urldaily), 2);
	$banner=array_slice(scandir($urlbanner),2);
	
include './File_control/Connection.php';
$connect = new Connection;
$connect->Connect2DB();
?>

<div align="center" class="logotext"><a href=""><span style="color:white">Saigon</span> <span style="color:yellow">Polar Expo </span><span style="color:white">2016</span></a></div>
<!--Menu-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
 <!--  <a class="navbar-brand" href="#myPage"><p align="center" class="text-center">SAIGON POLAR EXPO</p></a> -->
	
	</div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<li><a href="#datVe">ĐẶT VÉ</a></li>
        <li><a href="#gioiThieu">GIỚI THIỆU</a></li>
        <li><a href="#thuVienAnh">THƯ VIỆN ẢNH</a></li>
        <li><a href="#daily">DANH SÁCH ĐẠI LÝ</a></li>
        <li><a href="#lienhe">LIÊN HỆ</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--Couralsel-->
<?php include_once('banner2.php')?>
<!--End carousel-->

<!--Dat ve-->
<!--
<div id="datVe" class="container-fluid book">

	
	
	<form class="form-inline" role="form">
		<div class="col-sm-4">
		<div class="form-group">
			<input class="form-control" id="focusedInput" type="text" value="Nhập số vé">
		</div>
		</div>
		<div class="col-sm-4">
		<div class="form-group">
			<select class="form-control" id="sel1">
				<option>Chọn ngày đặt vé</option>
				<option>Ngày thường</option>
				<option>Ngày lễ và chủ nhật</option>
			</select>
		</div>
		</div>
		<div class="col-sm-4">
		<div class="form-group">
			<button type="button" class="btn btn-primary">Đặt Vé</button>
		
		</div>
		</div>
	</form>
	
	
	
</div>
-->
<?php include_once('chonve2.php')?>

<div id="giaVe" class="container-fluid" align="center">
		<img src="<?php echo $urlgiave.$giave[0];?>"  alt="bao_cuc_dia_bang_gia_ve" class="img-responsive"/>
</div>

<!--gioi thieu-->
<div id="gioiThieu" class="container-fluid introduce bg-1">
<div class="row">
    <div class="col-sm-4">
      <div class="logo" align="center"><img src="pic/logo(mang).png"/></div> 
    </div>
    <div class="col-sm-8">
      <h2>Năm Nay Sài Gòn Có Tuyết Rơi!</h2>
      <h4>Đây sẽ là một tin vui vô cùng thú vị của người dân thành phố, với<strong> Chương trình triển lãm “Bão Băng Tuyết vùng cực địa – sinh thái Nam Bắc Cực”</strong> lần đầu tiên xuất hiện tại Việt Nam trong năm 2016</h4> 
      <p>Triển lãm này đã được tổ chức cực kỳ thành công tại Đài Loan trong 4 năm qua dưới sự đầu tư chính của công ty Digi-Choice Culture Group (Đài Loan). Với kinh nghiệm tổ chức cùng với sự mới lạ của chương trình, chúng tôi cam kết sẽ đem đến cho bạn một <strong>“Cơn bão Tuyết”</strong> thật sự để xua tan những ngày Hè oi bức !</p>
		<p>Cùng với tình trạng Trái Đất ấm dần lên và băng đang tan dần ở Nam – Bắc cực, sự kiện này sẽ góp phần nâng cao nhận thức về trách nhiệm bảo vệ môi trường – “sự sống của nhân loại”. Bên cạnh đó với không gian băng tuyết của triển lãm, bạn sẽ có cơ hội nhìn thấy mô hình các loài sinh vật tại 2 vùng cực địa Trái Đất, mô hình nhà băng của người Eskimo, mô hình xe ngựa quả bí pha lê, mô hình hồ cầu nguyện Mỹ Nhân Ngư,…</p>
		<p>Khi tham gia chương trình vô cùng hấp dẫn này, các bạn sẽ được mặc áo khoác chống lạnh và thưởng thức các trò chơi trong phong cảnh tuyệt mỹ nơi cực địa lên đến 1500m2 với nhiệt độ xuống tới - 15oC</p>
	</div>
	</div>
	
	<!--video-->
	
	<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item introduce" src="https://www.youtube.com/embed/DRAj8MPdhWA"></iframe>
	</div>

</div>
<!--end gioi thieu-->



<!--Thu Vien Anh-->

<div id="thuVienAnh" class="container-fluid">
	<h2 align="center">THƯ VIỆN ẢNH</h2>
	<h4 align="center" class="thuvienanh">Các ảnh chuyên mục</h4>
  <div class="row">
	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="product/12chude/TauPhaBangCucDia.jpg" alt="Tau Pha Bang Cuc Dia">
			<p><strong>Mô hình tàu phá băng vùng cực</strong></p>
			<p><a href="/chuyende.php?idChude=2">xem thêm</a></p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="product/12chude/XeTruotTuyenTuanLoc.jpg" alt="Xe trượt tuyết tuần Lộc">
			<p><strong>Xe trượt tuyết tuần Lộc</strong></p>
			<p><a href="/chuyende.php?idChude=3">xem thêm</a></p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="product/12chude/KhuVucNemTuyet.jpg" alt="Khu chơi tuyết">
			<p><strong>Khu chơi tuyết</strong></p>
			<p><a href="/chuyende.php?idChude=6">xem thêm</a></p>
		</div>
	</div>
  </div>
   <div class="row">
	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="product/12chude/TruotBangCamGiacManh.jpg" alt="Trượt băng cảm giác mạnh">
			<p><strong>Trượt băng cảm giác mạnh</strong></p>
			<p><a href="/chuyende.php?idChude=1">xem thêm</a></p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="product/12chude/IceBar.jpg" alt="Ice Bar-Quầy bar băng giá">
			<p><strong>Ice Bar-Quầy bar băng giá</strong></p>
			<p><a href="/chuyende.php?idChude=10">xem thêm</a></p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="product/12chude/HoCauNguyen.jpg" alt="Hồ cầu nguyện">
			<p><strong>Hồ cầu nguyện</strong></p>
			<p><a href="/chuyende.php?idChude=11">xem thêm</a></p>
		</div>
	</div>
  </div>
   <div class="row">
	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="product/12chude/TrienLamAnhThamHiemVungCucDia.jpg" alt="Triển lãm ảnh thám hiểm vùng cực địa">
			<p><strong>Triển lãm ảnh thám hiểm vùng cực địa</strong></p>
			<p><a href="/chuyende.php?idChude=9">xem thêm</a></p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="product/12chude/KhuVuiChoiCungCuc.jpg" alt="Khu vui chơi vùng cực">
			<p><strong>Khu vui chơi vùng cực</strong></p>
			<p><a href="/chuyende.php?idChude=7">xem thêm</a></p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="product/12chude/DongVatVungCucDia.jpg" alt="Động vật vùng cực địa">
			<p><strong>Động vật vùng cực địa</strong></p>
			<p><a href="/chuyende.php?idChude=4">xem thêm</a></p>
		</div>
	</div>
  </div>
   <div class="row">
	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="product/12chude/HanhLangTuyetTrang3D.jpg" alt="Hành lang tuyết trắng">
			<p><strong>Hành lang tuyết trắng</strong></p>
			<p><a href="/chuyende.php?idChude=5">xem thêm</a></p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="product/12chude/CucQuang3D.jpg" alt="Cực quang 3D-Ánh sáng bắc cực">
			<p><strong>Cực quang 3D-Ánh sáng bắc cực</strong></p>
			<p><a href="/chuyende.php?idChude=8">xem thêm</a></p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="product/12chude/ChuDeKhac.jpg" alt="Chuyên mục khác">
			<p><strong>Chuyên mục khác</strong></p>
			<p><a href="/chuyende.php?idChude=12">xem thêm</a></p>
		</div>
	</div>
  </div>
<div>
<!--end thu vien anh-->

<!--Lien He-->
<div id="daily" class="container-fluid daily" align="center">

		<img src="<?php echo $urldaily.$daily[0];?>"  alt="bao_cuc_dia_bang_dai_ly" class="img-responsive"/>

</div>

<!--To Top-->
<footer class="text-center container-fluid" id="lienhe">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="Trở về đầu trang">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  
    <div>
        <p align="center">Công ty TNHH MTV Dịch Vụ và Tư Vấn Tân Đạt Thuận - Đơn vị phân phối vé trực tiếp Triển lãm Saigon Polar Expo.</p>
        <p align="center">Địa chỉ văn phòng: Số 4, Út Tịch, Phường 4, Quận Tân Bình, Tp.Hồ Chí Minh - Số điện thoại: (08)6654 6410 - (08)6654 6412 - (08)6654 6413 </p>
        <p align="center">Liên hệ đặt đoàn, đại lý: 0984.126.333 ( Mr.Khánh)  - 01664.318.529 ( Mr.Bảo) – 0908.616.990 (Ms. Hương)</p>
    </div>
	
	<div align="center">
	
	<a href="https://www.facebook.com/SaigonPolarExpo" target="_blank"><img src="pic/facebook.ico" width="60px" height="60px"></a>
	<a href="https://www.youtube.com/channel/UC39zCoapoYzRWBSWA06_CCg" target="_blank"><img src="pic/youtube.ico" width="60px" height="60px"></a><br />
        <a href="mailto:saigon.polarexpo@gmail.com" target="_top" style="color: black">saigon.polarexpo@gmail.com</a>
        
</div>
	
</footer>


<script>
$(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip(); 
})
</script>
<!--end To Top-->

</body>
</html>