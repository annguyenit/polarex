<?php
    $urlgiave='./product/banggiave/';
    $giave = array_slice(scandir($urlgiave), 2);
?>

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
                                else {  
                                    alert('Bạn vui lòng chọn số vé cần đặt');
                                    is_error=1;
                                }




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
                        } else {
                            alert('Bạn vui lòng chọn ngày tham quan');
                        }
          }
        </script>
        <li><img onclick="change_page();" src="pic/button_dat_ve.gif" align="absbottom" style="cursor:pointer" onmouseover="change_datve_img_over(this)" onmouseout="change_datve_img_out(this)" /></li>
</div>
<div id="giave" style="display:none"><img src="<?php echo $urlgiave.$giave[0];?>"  alt="bao_cuc_dia_bang_gia_ve"/></div>