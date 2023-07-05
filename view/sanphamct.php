<div class="slider_baner">
    <img src="./view/img/00.png" alt="" id="show" onclick="changeImage()">

</div>

<main>
    <div class="tools">
        <?php include "boxright.php"; ?>
    </div>
    <div class="products">
        <div class="topproducts">
            <?php
            extract($onesp);
            ?>
            <h3><?=$ten_hh?></h3>
            <div class="topcategory">
                <?php

                       $img = $img_sp.$hinh;
                       echo '<div class = "spct"><img src = "'.$img.'"></div>';
                       echo $mo_ta;
                 ?>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                        $("#binhluan").load("view/binhluan/binhluanform.php", {idpro:<?=$ma_hh?>});
               });
           </script>

        <div class="topproducts" id="binhluan">

        </div>

        <div class="topproducts">
            <h3>sản phẩm liên quan  </h3>
            <div class="topcategory">
                <?php
                    foreach ($sp_cungloai as $value){
                        extract($value);
                        $linksp = "index.php?act=sanphamct&idsp=".$ma_hh;
                        echo '<li><a href="'.$linksp.'">'.$ten_hh.'</a></li>';
                    }
                ?>
            </div>
        </div>

    </div>

</main>
