<?php
if(is_array($suakh)){
    extract($suakh);
}

?>
<div class="mau_nhap">
    <div class="tieu_de">
        CẬP NHẬT TÀI KHOẢN
    </div>
    <div class="mau_input">

        <form action="index.php?act=update_kh" method="post">
            EMAIL <br>
            <input type="email" name="email" value="<?php if(isset($email)&& ($email!= "")) echo $email; ?>"><br>
            TÊN TÀI KHOẢN <br>
            <input type="text" name="ten_tk" value="<?php if(isset($ten_tk)&& ($ten_tk!= "")) echo $ten_tk; ?>"></br>
            MẬT KHẨU <br>
            <input type="pasword" name="mat_khau" value="<?php if(isset($mat_khau)&& ($mat_khau!= "")) echo $mat_khau; ?>"><br>
            ĐỊA CHỈ <br>
            <input type="text" name="dia_chi"value="<?php if(isset($dia_chi)&& ($dia_chi!= "")) echo $dia_chi; ?>"><br>
            SỐ ĐIỆN THOẠI <br>
            <input type="text" name=" sdt" value="<?php if(isset($sdt)&& ($sdt!= "")) echo $sdt; ?>"><br>
            VAI TRÒ <br>
            <input type="text" name="vai_tro" value="<?php if(isset($vai_tro)&& ($vai_tro!= "")) echo $vai_tro; ?>"><br>
            <input type="hidden" name="id" id="" value="<?php if(isset($ma_tk)&& ($ma_tk!= "")) echo $ma_tk; ?>">

            <input type="submit" name="capnhat" value="Cập Nhật">
            <input type="submit" value="Nhập lại" name="nhap_lai">

            <h2 class="thong_bao">
                <?php
                if(isset($thong_bao)){
                    echo $thong_bao;
                }

                ?>
            </h2></form>

    </div>
</div>
