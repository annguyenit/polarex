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
            include './File_control/Connection.php';
            $connect = new Connection;
            $connect->Connect2DB();

            $urlgiave = './product/banggiave/';
            $urlbanner = './product/banner/';
            $urlchude = './product/12chude/';

            $giave = array_slice(scandir($urlgiave), 2);
            $banner = array_slice(scandir($urlbanner), 2);

            $idChude = isset($_GET['idChude']) && $_GET['idChude'] > 0 && $_GET['idChude'] < 12 ? $_GET['idChude'] : 1;

            $urlhinhchude = './product/hinhchude/' . $idChude . '/';
            $hinhchude = array_slice(scandir($urlhinhchude), 2);
            
            $chude = array();
            if ($idChude) {
                $sql = 'SELECT * FROM chuyende WHERE ID = ' . $idChude;
                $result = $connect->ExecuteDB($sql);
                $chude = mysql_fetch_assoc($result);
            }
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

            $(document).ready(function () {
                initSlideShow();
                $("#show_giave").click(function () {

                    $("#giave").slideToggle("slow");
                });

                $("#show_daily").click(function () {

                    $("#daily").slideToggle("slow");
                });

            });

            $(function () {
                SyntaxHighlighter.all();
            });
//            $(window).load(function () {
//                $('.flexslider').flexslider({
//                    animation: "slide",
//                    animationLoop: true,
//                    itemWidth: 326,
//                    smoothHeight: 200,
//                    itemMargin: 10,
//                    start: function (slider) {
//                        $('body').removeClass('loading');
//                    }
//                });
//            });
            $(window).load(function() {
                
                $('.flex2').flexslider({
                  animation: "slide",
                  animationLoop: false,
                  itemWidth: 330,
                  itemMargin: 5
                });

              // The slider being synced must be initialized first
              $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 210,
                itemMargin: 5,
                asNavFor: '#slider'
              });

              $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel"
              });
            });

            function initSlideShow()
            {
                if ($(".slideshow div").length > 1)
                {
                    var transationTime = 5000;
                    $(".slideshow div:first").addClass('active');
                    setInterval(slideChangeImage, transationTime);
                }
            }


            function slideChangeImage()
            {
                var active = $(".slideshow div.active");
                if (active.length == 0)
                {
                    active = $(".slideshow div:last");
                }

                var next = active.next().length ? active.next() : $(".slideshow div:first");
                active.addClass('lastactive');
                next.css({opacity: 0.0})
                        .addClass('active')
                        .animate({opacity: 1.0}, 1500, function ()
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
                var value = 0;
                if (isNaN(object.value) == false)
                {
                    value = parseInt(object.value);
                    value++;
                    object.value = value;
                } else
                    object.value = 0;
            }
            function subtract(object)
            {
                if (isNaN(object.value) == false)
                {
                    var value = parseInt(object.value);
                    if (value > 0)
                        value--;
                    object.value = value;
                } else
                    object.value = 0;
            }

        </script>
        <?php include_once('header.html') ?>

        <div style="position:relative">
            <div class="slideshow"><?php
                foreach ($banner as $value) {
                    echo '<div><img src="' . $urlbanner . $value;
                    $temp = explode('.', $value);
                    echo '" alt="' . $temp[0] . '" border="0" /></div>';
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
                        object.src = 'pic/button_dat_ve2.gif';
                    }
                    function change_datve_img_out(object)
                    {
                        object.src = 'pic/button_dat_ve.gif';
                    }
                    function change_page()
                    {
                        var is_error = 0;
                        var loaive = document.getElementById('loaive');

                        if (loaive.selectedIndex != 0)
                        {
                            var form_object = document.createElement('form');
                            var input_object_1 = document.createElement('input');
                            var input_object_2 = document.createElement('input');
                            var input_object_3 = document.createElement('input');
                            var nguoilon = parseInt(document.getElementById('nguoilon').value);


                            if (nguoilon > 0) {
                                input_object_1.type = 'text';
                                input_object_1.value = nguoilon;
                                input_object_1.name = 'nguoilon';
                                form_object.appendChild(input_object_1);
                            }
                            else
                                is_error = 1;




                            if (is_error == 0)
                            {
                                input_object_3.type = 'text';

                                input_object_3.value = loaive.value;

                                input_object_3.name = 'loaive';

                                form_object.method = 'post';
                                form_object.action = 'dangky_dangnhap_.php';


                                form_object.appendChild(input_object_3);
                                form_object.submit();
                            }
                        }
                    }
                </script>
                <li><img onclick="change_page();" src="pic/button_dat_ve.gif" align="absbottom" style="cursor:pointer" onmouseover="change_datve_img_over(this)" onmouseout="change_datve_img_out(this)" /></li>

            </div>
            <div id="giave" style="display:none"><img src="<?php echo $urlgiave . $giave[0]; ?>"  alt="bao_cuc_dia_bang_gia_ve"/></div>
            <div style="background-color:#9dbde4; padding: 20px;">
                
                <h3><?php echo isset($chude['TEN']) ? $chude['TEN'] : '' ?></h3>
                
                <p>
                    <?php echo isset($chude['NOI_DUNG']) ? $chude['NOI_DUNG'] : '' ?>
                </p>
                
                <section class="slider">
                    <!-- Place somewhere in the <body> of your page -->
                    <div id="slider" class="flexslider">
                      <ul class="slides">
                            <?php
                            foreach ($hinhchude as $value) {
                                echo '<li><img    src="' . $urlhinhchude . $value;
                                $temp = explode('.', $value);
                                echo '" alt="' . $temp[0] . '" border="0" /></li>';
                            }
                            ?>	
                        <!-- items mirrored twice, total of 12 -->
                      </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                      <ul class="slides">
                            <?php
                            foreach ($hinhchude as $value) {
                                echo '<li><img    src="' . $urlhinhchude . $value;
                                $temp = explode('.', $value);
                                echo '" alt="' . $temp[0] . '" border="0" /></li>';
                            }
                            ?>
                        <!-- items mirrored twice, total of 12 -->
                      </ul>
                    </div>
                </section>
            </div>

            <div style="background-color:white; padding-top:30px; padding-bottom:30px; position:relative"> 
                <span style="font-size:20px; font-weight:bold; letter-spacing:2px">&nbsp;&nbsp;  CÁC CHUYÊN ĐỀ KHÁC</span>
                <div style="margin-top:20px; margin-bottom:20px" class="album"> 
                    <!-- Place somewhere in the <body> of your page -->
                    <div class="flexslider flex2">
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
                           for ($i = 0; $i < count($arrChuDeKhac); $i=$i+2) {
                                                                
                                echo '<li>';
                                echo '<a title="'. $arrChuDeKhac[$i]['TEN'] .'" href="/chuyende.php?idChude='. $arrChuDeKhac[$i]['ID'] .'"><img style="margin-bottom:5px;" src="' . $urlchude . $arrChuDeKhac[$i]['HINH_ANH'] . '" alt="' . $arrChuDeKhac[$i]['TEN'] . '" border="0" /></a>';
                                echo '<a title="'. $arrChuDeKhac[$i+1]['TEN'] .'" href="/chuyende.php?idChude=' . $arrChuDeKhac[$i+1]['ID'] . '"><img src="' . $urlchude . $arrChuDeKhac[$i+1]['HINH_ANH'] . '" alt="' . $arrChuDeKhac[$i+1]['TEN'] . '" border="0" /></a>';
                                echo '</li>';
                            } 
                        }
                            ?>	
                        <!-- items mirrored twice, total of 12 -->
                      </ul>
                    </div>
                </div>
            </div>
            
        </div> 
        <?php include_once('footder.html') ?>
        </div>
    </body>
</html>