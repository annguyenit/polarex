

<!DOCTYPE html>
<html lang="vi">
<head>
<title>Năm nay sài gòn có tuyết rơi</title>
<link type="image/x-icon" href="pic/logo.ico" rel="shortcut icon" />
  <meta charset="utf-8">
  <meta name="description" content="“TP.Hồ Chí Minh năm nay có tuyết rơi rồi!”. Đây sẽ là một tin vui vô cùng thú vị của người dân thành phố, với Chương trình triển lãm “Bão Băng Tuyết vùng cực địa – sinh thái Nam Bắc Cực” lần đầu tiên xuất hiện tại Việt Nam trong năm 2016, Triển lãm này đã được tổ chức cực kỳ thành công tại Đài Loan trong 4 năm qua dưới sự đầu tư chính của công ty Digi-Choice Culture Group (Đài Loan). Với kinh nghiệm tổ chức cùng với sự mới lạ của chương trình, chúng tôi cam kết sẽ đem đến cho bạn một “Cơn bão Tuyết” thật sự để xua tan những ngày Hè oi bức !">
<meta name="keywords" content="băng đăng, saigon polar expo,triễn lãm, tuyết, khu vui chơi giải trí, địa điểm tham quan, tuyết rơi,mát lạnh, điểm tham quan thú vị, quận 7,Số 02 – 04 Đường 09, Khu đô thị HimLam, P. Tân Hưng, Quận 7, Tp.Hồ Chí Minh, cổng vietopia ">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <script defer src="FlexSlider/jquery.flexslider.js"></script>
	 <link rel="stylesheet" href="FlexSlider/flexslider.css" type="text/css" media="screen" />
	 

   

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

            $idChude = isset($_GET['idChude']) && $_GET['idChude'] > 0 && $_GET['idChude'] <= 12 ? $_GET['idChude'] : 1;

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

            $(document).ready(function () {
                initSlideShow();
                $("#show_giave").click(function () {

                    $("#giave").slideToggle("slow");
                });

                $("#show_daily").click(function () {

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

            $(function () {
                SyntaxHighlighter.all();
            });
            $(window).load(function() {
                
                $('.flex2').flexslider({
                  animation: "slide",
                  animationLoop: false,
                  itemWidth: 330,
                  itemMargin: 5,
                  slideshow: false
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
        <?php include_once('banner2.php')?>

        <div style="background-color:#b6cdec; padding-top:5px"> 
            <?php include_once('chonve2.php')?>
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
                           for ($i = 0; $i < count($arrChuDeKhac); $i=$i+1) {
                                                                
                                echo '<li>';
                                echo '<a title="'. $arrChuDeKhac[$i]['TEN'] .'" href="/chuyende.php?idChude='. $arrChuDeKhac[$i]['ID'] .'"><img src="' . $urlchude . $arrChuDeKhac[$i]['HINH_ANH'] . '" alt="' . $arrChuDeKhac[$i]['TEN'] . '" border="0" /><p class="flex-caption">'.$arrChuDeKhac[$i]['TEN'].'</p></a>';
                                //echo '<a title="'. $arrChuDeKhac[$i]['TEN'] .'" href="/chuyende.php?idChude='. $arrChuDeKhac[$i]['ID'] .'"><img style="margin-bottom:5px;" src="' . $urlchude . $arrChuDeKhac[$i]['HINH_ANH'] . '" alt="' . $arrChuDeKhac[$i]['TEN'] . '" border="0" /><p class="flex-caption">'.$arrChuDeKhac[$i]['TEN'].'</p></a>';
                                //echo '<a title="'. $arrChuDeKhac[$i+1]['TEN'] .'" href="/chuyende.php?idChude=' . $arrChuDeKhac[$i+1]['ID'] . '"><img src="' . $urlchude . $arrChuDeKhac[$i+1]['HINH_ANH'] . '" alt="' . $arrChuDeKhac[$i+1]['TEN'] . '" border="0" /><p class="flex-caption">'.$arrChuDeKhac[$i+1]['TEN'].'</p></a>';
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