<?php
    $urlbanner='./product/banner/';
    $banner=array_slice(scandir($urlbanner), 2);
?>

<div style="position:relative">
    <div class="slideshow"><?php foreach($banner as $value) {
        echo '<div><img src="'.$urlbanner.$value;
        $temp=explode('.',$value);
        echo '" alt="'.$temp[0].'" border="0" /></div>';
        }
        ?>
    </div>
</div>