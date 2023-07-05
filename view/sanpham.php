
<!--<div class="slider_baner">-->
<!--    <img src="./view/img/00.png" alt="" id="show" onclick="changeImage()">-->
<!---->
<!--</div>-->

<main>
    <div class="tools">
        <?php include "boxright.php"; ?>
    </div>
    <div class="products">
        <div class="topproducts">

            <h3>sản phẩm</h3>
            <div class="topcategory danhmuc">
                <?php
                       foreach ($dmsp as $value){
                           extract($value);
                           $anh = $img_sp.$hinh;
                           $linksp = "index.php?act=sanphamct&idsp=".$ma_hh;
                          echo ' 
                         <div class="card inspdanhmuc">
                        <div class="card_producs anh">
                            <img src="'.$anh.'" alt="">
                            <div class="title">
                                <h2>'.$ten_hh.'</h2>                           
                                <p>'.$don_gia.'</p>
                            </div>
                        </div>
                        <button><a href="'.$linksp.'"> Xem Chi tiết </a></button>
                    </div>
                   
                    ';
                    }

                ?>
            </div>
        </div>
    </div>

</main>
