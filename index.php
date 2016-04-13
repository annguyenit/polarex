<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Năm nay sài gòn có tuyết rơi</title>
<link href="page.css" type="text/css" rel="stylesheet" />
<link type="image/x-icon" href="pic/logo.ico" rel="shortcut icon" />
<link rel="stylesheet" href="FlexSlider/flexslider.css" type="text/css" media="screen" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script defer src="FlexSlider/jquery.flexslider.js"></script>

</head>

<body>

<?php 
$urlchude='./product/12chude/';
$urldaily='./product/daily/';

$chude=array_slice(scandir($urlchude), 2);
$daily=array_slice(scandir($urldaily), 2);

include './File_control/Connection.php';
$connect = new Connection;
$connect->Connect2DB();
?>

 
<style type="text/css">
.image_click{cursor:pointer}
.icon {padding-left:10px; padding-bottom:10px; width:21px;  height:23px}
.slideshow { 
        position:relative;
        height:369px;
		width:1004px;
        overflow:hidden;
    }
    .slideshow div {
        position:absolute; 
        top:0px;;
        left:0;
        z-index:8;
    }
    .slideshow div img
    {
        width:1004px; 
        height:369px;
    }
    .slideshow div.active {
        z-index:10;
    }
    .slideshow div.lastactive {
        z-index:9;
    }
    
    p.flex-caption {
        display: none;
        margin-top: -42px;
        text-align: center;
        padding: 12px 0;
        background: #000;
        color: #fff;
        opacity: 0.7;
        z-index: 100;
    }
</style>

<script> 

$(document).ready(function(){
	initSlideShow();
    $("#show_giave").click(function(){
									
        $("#giave").slideToggle("slow");
    });
	
	 $("#show_daily").click(function(){
									
        $("#daily").slideToggle("slow");
    });
    
    $("img").hover(function(){
        $(this).next().fadeIn();
        }
        ,function(){
            $(this).next().fadeOut();
        }
    );
});

    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 326,
	smoothHeight:200,
        itemMargin: 10,
       
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });

	function initSlideShow()
	{
		if($(".slideshow div").length > 1) 
		{
			var transationTime = 5000;
			$(".slideshow div:first").addClass('active');
			setInterval(slideChangeImage, transationTime); 
		}
	}
	
	
	function slideChangeImage()
	{
		var active = $(".slideshow div.active");
		if(active.length == 0)
		{
			active = $(".slideshow div:last"); 
		}
		
		var next = active.next().length ? active.next() : $(".slideshow div:first"); 
		active.addClass('lastactive');
		next.css({opacity:0.0}) 
				.addClass('active')
				.animate({opacity:1.0}, 1500, function()
				{
					active.removeClass("active lastactive");	
				});
		 
	}

</script>
<style> 


#giave {
    padding: 50px;
}
</style>

<script type="text/javascript">
function add(object)
{
	var value=0;
	if(isNaN(object.value)==false)
	{  
	 value=parseInt(object.value);
	value++;
	object.value=value;
	}else object.value=0;
}
function subtract(object)
{
	if(isNaN(object.value)==false)
	{
	var value=parseInt(object.value);
	if(value>0)value--;
	object.value=value;
	}else object.value=0;
}

</script>
	<?php include_once('header.html')?>
	<?php include_once('banner.php')?>
       
        <div style="background-color:#b6cdec; padding-top:5px"> 
            <?php include_once('chonve.php')?>
            
      	
        
        <div style="background-color:#9dbde4"> 
         <div >
        <table style="border:none" >
            <tr><td valign="top" width="565" ><iframe width="560" height="315" src="https://www.youtube.com/embed/4zqf_LW9OnU" frameborder="0" allowfullscreen></iframe></td>
            <td width="427"  style="vertical-align:text-top; font-size:14px">
                <p>
                    “TP.Hồ Chí Minh năm nay có tuyết rơi rồi!”. Đây sẽ là một tin vui vô cùng thú vị của người dân thành phố, với <b>Chương trình triển lãm “Bão Băng Tuyết vùng cực địa – sinh thái Nam Bắc Cực”</b> lần đầu tiên xuất hiện tại Việt Nam trong năm 2016, Triển lãm này đã được tổ chức cực kỳ thành công tại Đài Loan trong 4 năm qua dưới sự đầu tư chính của công ty Digi-Choice Culture Group (Đài Loan). Với kinh nghiệm tổ chức cùng với sự mới lạ của chương trình, chúng tôi cam kết sẽ đem đến cho bạn một <b>“Cơn bão Tuyết”</b> thật sự để xua tan những ngày Hè oi bức !
                </p>
                <p>
                    Cùng với tình trạng Trái Đất ấm dần lên và băng đang tan dần ở Nam – Bắc cực, sự kiện này sẽ góp phần nâng cao nhận thức về trách nhiệm bảo vệ môi trường – “sự sống của nhân loại”. Bên cạnh đó với không gian băng tuyết của triển lãm, bạn sẽ có cơ hội nhìn thấy mô hình các loài sinh vật tại 2 vùng cực địa Trái Đất, mô hình nhà băng của người Eskimo, mô hình xe ngựa quả bí pha lê, mô hình hồ cầu nguyện Mỹ Nhân Ngư,…
                </p>
                <p>
                    Khi tham gia chương trình vô cùng hấp dẫn này, các bạn sẽ được mặc áo khoác chống lạnh vàthưởng thức các trò chơi trong phong cảnh tuyệt mỹ nơi cực địa lên đến 1500m2 với nhiệt độ xuống tới - 15oC
                </p>
            </td>
            </tr>
        
        </table></div>
        </div>
        <div style="margin-top:20px; margin-bottom:20px" class="album"> 
       	 <section class="slider">
      	   <div class="flexslider carousel">
         	 <ul class="slides">
          <?php
            // Get chu de
              $sql = "SELECT * FROM chuyende";
              $result = $connect->ExecuteDB($sql);

              $arrChuDeKhac = array();
              while ($row = mysql_fetch_assoc($result)) {
                  $arrChuDeKhac[] = $row;
              }

              if(count($arrChuDeKhac)>0)
              {
                 for ($i = 0; $i < count($arrChuDeKhac); $i=$i+1) {

                      echo '<li>';
                      //echo '<a title="'. $arrChuDeKhac[$i]['TEN'] .'" href="/chuyende.php?idChude='. $arrChuDeKhac[$i]['ID'] .'"><img style="margin-bottom:5px;" src="' . $urlchude . $arrChuDeKhac[$i]['HINH_ANH'] . '" alt="' . $arrChuDeKhac[$i]['TEN'] . '" border="0" /></a>';
                      echo '<a title="'. $arrChuDeKhac[$i]['TEN'] .'" href="/chuyende.php?idChude='. $arrChuDeKhac[$i]['ID'] .'"><img src="' . $urlchude . $arrChuDeKhac[$i]['HINH_ANH'] . '" alt="' . $arrChuDeKhac[$i]['TEN'] . '" border="0" /><p class="flex-caption">'.$arrChuDeKhac[$i]['TEN'].'</p></a>';
                      echo '</li>';
                  } 
              }
        ?>	  
            </ul>
        </div>
     </section>
           
         
        
        </div>
         <div style="background-color:#9dbde4; padding-left:20px; "> 
            <li style="line-height:30px; font-size:18px"> Danh sách đại lý <span style="margin-left:5px"><img src="pic/arrow_down.gif" id="show_daily" class="image_click"/></span> </li>
         
         
         </div>
          <div id="daily" style="display:none;background-color:#9dbde4; padding-left:35px; padding-bottom:20px" ><img src="<?php echo $urldaily.$daily[0];?>"  alt="bao_cuc_dia_bang_dai_ly"/></div>
        <div style="background-color:white; padding-top:30px; padding-bottom:30px; position:relative"> 
           <div >  <span style="font-size:20px; font-weight:bold; letter-spacing:2px">&nbsp;&nbsp;  Đơn vị tài trợ</span></div>
          <div>
        
          <table align="center"   cellpadding="30"   style=" border-collapse:collapse" >
          <tr  >
          <td ><img src="pic/Logo/FFA.png" width="130" height="130" /></td>
           <td><img src="pic/Logo/FFC.png" width="130" height="130" /></td>
            <td><img src="pic/Logo/logo_vietopia.png"  width="130" height="130" /></td>
          </tr>
           <tr >
           <td><img src="pic/Logo/vietnam_airlines_logo.png"  width="150" height="100" /></td>
            <td ><img src="pic/Logo/unnamed.jpg" width="130" height="130"  /></td>
          </tr>
          </table>
          
          
          
          </div>
         
          
          
        </div>
        
        </div> 
       
        <?php include_once('footder.html')?>
    </div>


</body>
</html>