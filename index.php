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
$urlgiave='./product/banggiave/';
$urlbanner='./product/banner/';
$urlchude='./product/12chude/';
$urldaily='./product/daily/';
$giave = array_slice(scandir($urlgiave), 2);
$banner=array_slice(scandir($urlbanner), 2);
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

    $('.read-more-content').css('display','none');
    $('.show-less').css('display','none');

    // Set up the toggle.
    $('.show-more').on('click', function() {
      $('.read-more-content').css('display','block');
      $('.show-more').css('display','none');
      $('.show-less').css('display','block');
    });
    
    // Set up the toggle.
    $('.show-less').on('click', function() {
      $('.read-more-content').css('display','none');
      $('.show-more').css('display','block');
      $('.show-less').css('display','none');
    });

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
        
        <div style="position:relative">
             <div class="slideshow"><?php foreach($banner as $value) {
																		echo '<div><img src="'.$urlbanner.$value;
																		$temp=explode('.',$value);
																		echo '" alt="'.$temp[0].'" border="0" /></div>';
																	}
								   ?>
	        </div>
        </div>
       
        <div style="background-color:#b6cdec; padding-top:5px"> 
        
          <div class="menu" style="margin:0px 35px 0px 35px; height:32px"> 
        		<li>Giá vé <span style="margin-left:5px"><img src="pic/arrow_down.gif" id="show_giave" class="image_click"/></span> </li> 
                
                <li>
                <span>Số vé đặt</span> 
              	  <span style="background-color:white;  height:40px; margin-left:5px; "> 
               	  <span style="margin-left:5px"><img class="image_click" src="pic/add.gif" onclick="add(document.getElementById('nguoilon'))" /></span>
                   <span > <input type="text" id="nguoilon"  name="nguoilon" align="bottom" style="font-size:11px; height:10px; font-weight:bold; text-align:center;width:23px; border:none" value="0"/></span>
                   <span style="margin-right:5px"><img  class="image_click" src="pic/substract.gif" align="absmiddle" onclick="subtract(document.getElementById('nguoilon'))"/></span>
                </span>
                </li>
                
             
                <li>
                <span><select id="loaive" style="border:none;  background-color:#b6cdec; font-weight:bold"><option>Chọn ngày tham quan</option><option  value="nt">Ngày thường</option><option value="nl">Ngày lễ và chủ nhật</option></select></span> 
              	                
                </li>
                <script type="text/javascript">
                  function change_datve_img_over(object)
				  {
					  object.src='pic/button_dat_ve2.gif';
				  }
				  function change_datve_img_out(object)
				  {
					  object.src='pic/button_dat_ve.gif';
				  }
              function change_page()
			  {
					var is_error=0;
					var loaive = document.getElementById('loaive');
					
					if(loaive.selectedIndex!=0)
				{
					var form_object = document.createElement('form');
					var input_object_1 = document.createElement('input');
					var input_object_2 = document.createElement('input');
					var input_object_3 = document.createElement('input');
					var nguoilon = parseInt(document.getElementById('nguoilon').value);
				   
					
					if(nguoilon>0){
				    					input_object_1.type='text'; input_object_1.value=nguoilon;
										input_object_1.name='nguoilon';form_object.appendChild(input_object_1);
					              }
					else  is_error=1;
					     
						
				
					
					if(is_error==0)
					{
					input_object_3.type='text';
							
					input_object_3.value=loaive.value;
									
					input_object_3.name='loaive';
					
					 form_object.method='post';
					 form_object.action='dangky_dangnhap_.php';
					 
					
					 form_object.appendChild(input_object_3);
					 form_object.submit();
					}
				}
		  }
                </script>
                <li><img onclick="change_page();" src="pic/button_dat_ve.gif" align="absbottom" style="cursor:pointer" onmouseover="change_datve_img_over(this)" onmouseout="change_datve_img_out(this)" /></li>
                
          </div>
          <div id="giave" style="display:none"><img src="<?php echo $urlgiave.$giave[0];?>"  alt="bao_cuc_dia_bang_gia_ve"/></div>
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
                    Khi tham gia chương trình vô cùng hấp dẫn này, các bạn sẽ được mặc áo khoác chống lạnh vàthưởng thức các trò chơi trong phong cảnh tuyệt mỹ nơi cực địa lên đến 1500m2 với nhiệt độ xuống tới - 15oC như:
                </p>
                <a class="show-more" style="cursor: pointer; color: blue;">Đọc thêm >></a>
                <div class="read-more-content">
                    <h4>Trượt băng cảm giác mạnh:</h4>
                    <p>Cùng trèo lên núi băng và khám phá những con đường băng đầy thách thức với cầu tuột băng lên đến 4 làn, bạn sẽ bất ngờ với trò chơi cảm giác mạnh tuyệt vời suốt mùa hè nóng nực.</p>

                    <h4>Mô hình tàu phá băng vùng cực địa: </h4>
                    <p>Tàu phá băng đượctạo hìnhhoành tráng không kém phần tao nhã, chào đón các bạn cùng thám hiểm Bắc Băng Dương, lưu lại những khoảnh khắc đáng nhớ với gia đình và bạn bè qua những tấm ảnhkỷ niệm thật tuyệt vời.</p>

                    <h4>Xe trượt tuyết tuần lộc:</h4>
                    <p>Những chú tuần lộc sẽ đưa bạn tham quan những cảnh quan mới lạ đem lại trải nghiệm cực lạnh thú vị trong ánh sáng lấp lánh huyền diệu của những tinh thể mang đậm giá trị nghệ thuật điêu khắc. Điều đặc biệt hơn là bạn sẽ có được những ký ức khó quên chưa từng trải nghiệm trước đây.</p>

                    <h4>Động vật vùng cực địa:</h4>
                    <p>Nơi hội tụ của những chú gấu trắng Bắc Cực, hải cẩu, chim cách cụt, chim hải âu, cáo tuyết Bắc Cực, sư tử biển…tất cả những binh lính đặc chủng của vùng Cực địa này sẽ được điêu khắc dưới bàn tay điêu luyện của các nghệ nhân tài năng đến từ vùng Cáp Nhĩ Tân, hãy thử xem bạn có nhận ra được họ không nhé.</p>

                    <h4>Hành lang tuyết trắng 3D:</h4>
                    <p>Với hình ảnh 3D phủ đầy tuyết trắng được trưng bày dọc hành lang đón khách, bạn sẽ kinh ngạc trước những bức tranh 3D núi băng hùng vĩ, ngắm nhìn những chú chim cánh cụt siêu dễ thương “Say Hello!”.</p>

                    <h4>Khu chơi tuyết/ ném tuyết:</h4>
                    <p>Vui đùa dưới bụi cây, bên cạnh những động vật vùng Bắc Cực được điêu khắc bằng đá tuyết, các bạn còn được hòa mình dưới những <b>“trận mưa tuyết thật sự”</b> cùng bạn bè tự tay nắn người tuyết, “tử chiến” với trò ném tuyết trong không gian lạnh -15°C. Đây chắc chắn sẽ là một trải nghiệm cực kỳ khó quên cho bạn và gia đình.</p>

                    <h4>Khu vui chơi vùng cực:</h4>
                    <p>Bùng nổ niềm vui cùng các trò chơi thú vị: bể bóng Polar đầy màu sắc, trổ tài ném bóng rổ, phóng phi tiêu… tại vùng bão băng trên nền nhạc sôi động xua tan đi những ngày hè nóng bức.</p>

                    <h4>Cực quang 3D – ánh sáng Bắc Cực:</h4>
                    <p>Chiêm ngưỡng hiện tượng Bắc cực quang 3D về đêm – “ánh hào quang mỹ lệ”tượng trưng cho sự may mắn và niềm hạnh phúc.</p>

                    <h4>Triển lãm ảnh thám hiểm vùng Cực địa:</h4>
                    <p>Bộ sưu tập về hình ảnh đến từ nơi lạnh nhất của Trái Đất được thực hiện bởi các nhà thám hiểm. Với mỗi hình ảnh vùng cực địa phong phú và trữ tình đều là những tác phẩm nghệ thuật đặc sắc, khó phai đem đến các bạn cái nhìn cụ thể hơn về nơi khắc nghiệt nhất hành tinh.</p>

                    <h4>Ice Bar – Quầy bar băng giá:</h4>
                    <p>Bạn sẽ cực kỳ ấn tượng đến kinh ngạc dưới sự hoành tráng của <b>Quán Ice Bar</b> điêu khắc hoàn toàn bằng băngtừ những chiếc bàn, ghế đến cả cái ly bạn uống, <b>Quán Ice Bar</b> được tái bản theo phong cách London, Tokyo tiên tiến và hiện đại. Sẽ không còn gì thú vị hơn khi được thưởng thức những thức uống ấm bụng hay lạnh tê lưỡi và cùng buôn chuyện với gia đình, bạn bè, người thântrong một không gian thật “Bắc Cực”. Bên cạnh đó, trên mỗi vé có phần ưu đãi giảm giá nước uống.</p>
                </div>
                <a class="show-less" style="cursor: pointer; color: blue; margin: 10px 0;"><< Thu lại</a>
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
                      echo '<a title="'. $arrChuDeKhac[$i]['TEN'] .'" href="/chuyende.php?idChude='. $arrChuDeKhac[$i]['ID'] .'"><img style="margin-bottom:5px;" src="' . $urlchude . $arrChuDeKhac[$i]['HINH_ANH'] . '" alt="' . $arrChuDeKhac[$i]['TEN'] . '" border="0" /></a>';
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
         <div style="position:absolute; top: 243px; left: 176px;"><img src="pic/left_arrow.gif" /></div>
          <div style="position:absolute; left: 812px; top: 241px;"><img src="pic/right-arrow.gif" /></div>
          <div>
        
          <table align="center"   cellpadding="30"   style=" border-collapse:collapse" >
          <tr  >
          <td ><img src="pic/Logo/FFA.png" width="130" height="130" /></td>
           <td><img src="pic/Logo/FFC.png" width="130" height="130" /></td>
            <td><img src="pic/Logo/logo_vietopia.png"  width="130" height="130" /></td>
          </tr>
           <tr >
          <td ><img src="pic/Logo/logo_vietopia.png" width="130" height="130" /></td>
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