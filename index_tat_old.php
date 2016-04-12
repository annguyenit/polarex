<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Năm nay sài gòn có tuyết rơi</title>
<link href="page.css" type="text/css" rel="stylesheet" />
<link type="image/x-icon" href="pic/logo.ico" rel="shortcut icon" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>

<body>

<?php 
$urlgiave='./product/banggiave/';
$giave = array_slice(scandir($urlgiave), 2);



?>



<style type="text/css">
.image_click{cursor:pointer}


</style>

<script> 
$(document).ready(function(){
    $("#show_giave").click(function(){
									
        $("#giave").slideToggle("slow");
    });
});
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
        
        <div style="position:relative"><!-- slide show -->
        
        
        
        	<img src="pic/0.jpg" style="width:100%; height:369px" />
            <span style="position:absolute; font-size:14px; left: 484px; top: 348px; font-weight:bold">
            <span style="font-size:16px">< </span>
             1 / 2 <span  style="font-size:16px"> ></span>
             </span>
		</div><!-- slide show -->
       
        <div style="background-color:#b6cdec; padding-top:5px"> <!-- page content -->
        
          <div class="menu" style="margin:0px 35px 0px 35px; height:32px"> <!-- sell ticket -->
        		<li>Giá vé <span style="margin-left:5px"><img src="pic/arrow_down.gif" id="show_giave" class="image_click"/></span> </li> 
                
                <li>
                <span><img src="pic/adult.png"  align="absbottom"/></span> 
              	  <span style="background-color:white;  height:40px; margin-left:5px; "> 
               	  <span style="margin-left:5px"><img class="image_click" src="pic/add.gif" onclick="add(document.getElementById('nguoilon'))" /></span>
                   <span > <input type="text" id="nguoilon"  name="nguoilon" align="bottom" style="font-size:11px; height:10px; font-weight:bold; text-align:center;width:23px; border:none" value="0"/></span>
                   <span style="margin-right:5px"><img  class="image_click" src="pic/substract.gif" align="absmiddle" onclick="subtract(document.getElementById('nguoilon'))"/></span>
                </span>
                </li>
                
                 <li>
                <span><img src="pic/children.png"  align="absmiddle"/></span> 
              	  <span style="background-color:white;  height:30px; margin-left:5px; "> 
               	  <span style="margin-left:5px"><img   class="image_click" src="pic/add.gif" onclick="add(document.getElementById('treem'))" /></span>
                   <span > <input type="text" id="treem"  name="treem"  style="font-size:11px; height:10px; font-weight:bold; text-align:center;width:23px; border:none; "  value="0" /></span>
                   <span style="margin-right:5px"><img  class="image_click"  src="pic/substract.gif" align="absmiddle" onclick="subtract(document.getElementById('treem'))"/></span>
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
				    var treem = parseInt(document.getElementById('treem').value);
					
					if(nguoilon>0){
				    					input_object_1.type='text'; input_object_1.value=nguoilon;
										input_object_1.name='nguoilon';form_object.appendChild(input_object_1);
					              }
					else  is_error=1;
					     
						
					if(treem>0)	 
					{
						is_error=0;
						input_object_2.type='text';input_object_2.value=treem;
						input_object_2.name='treem'; form_object.appendChild(input_object_2);
					} else if(is_error!=0)is_error=1;
					
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
                
          </div><!-- sell ticket -->
          <div id="giave" style="display:none"><img src="<?php echo $urlgiave.$giave[0];?>"  alt="bao_cuc_dia_bang_gia_ve"/></div>
      	<div style="background-color:#9dbde4"> <!-- gioi thieu -->
        
        	
       	
        <div >
        <table style="border:none" >
        	<tr><td width="565" ><iframe width="560" height="315" src="https://www.youtube.com/embed/4zqf_LW9OnU" frameborder="0" allowfullscreen></iframe></td>
            <td width="427"  style="vertical-align:text-top; font-size:14px">Hiện nay các bạn đã được đọc nhiều thông tin trên sách báo về tình trạng trái đất nóng dần lên kéo theo các vấn đề như: băng tan, lỗ thủng tầng ozone, bảo vệ môi trường và hệ sinh thái,...Và vào mùa hè năm nay, chúng tôi sẽ tổ chức triển lãm "Chương trình cảnh thực Bão BĂNG TUYẾT vùng cực địa (Saigon Polar-Expo 2016)" tại khu đô thị HimLam (<font color="#0000FF">Số 02-04, đường số 9, khu đô thị HimLam, P.Tân Hưng, Q.7, TP.HCM</font>) vào ngày <font color="#0000FF">14/4/2016</font>. <p>
            Khi tham gia chương trình vô cùng hấp dẫn này, các bạn sẽ có cơ hội được mặc áo khoác chống lạnh và thưởng thức phong cảnh như thực ở Nam Bắc cực với nhiệt độ xuống tới - 18oC cực kì thú vị.</p><p>
Tại núi băng tuyết, các bạn có thể nhìn thấy gấu bắc cực và họ hàng nhà chim cánh cụt đang có nguy cơ tuyệt chủng. Ngoài ra, trên khắp các vùng đất băng tuyết là những phong cảnh vùng cực địa vô cùng đẹp sẽ khiến các bạn ngỡ ngàng với nhiều chủ đề khác nhau.</p></td>
            </tr>
        
        </table></div>
        </div><!-- gioi thieu -->
        <div style="margin-top:20px; margin-bottom:20px" class="album"> <!-- album anh -->
        	<li>
              <img src="pic/download.jpg" width="326" height="200" />
            </li>
            <li>
              <img src="pic/falling_snow_effect.jpeg" width="326" height="200" />
            </li>
            <li style="margin-right:0px">
              <img src="pic/images.jpg" width="326" height="200" />
            </li>
            
        
        
        </div><!-- album anh -->
      
        <div style="background-color:white; padding-top:30px; padding-bottom:30px; position:relative"> <!-- Đơn vị tài trợ -->
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
         
          
          
        </div><!-- Đơn vị tài trợ -->
        
        </div> <!-- page content-->
       
        <?php include_once('footder.html')?>
    </div><!-- page -->


</body>
</html>