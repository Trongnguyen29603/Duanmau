<div class="mau_nhap">
    <div class="tieu_de">
        CẬP NHẬT TÀI KHOẢN
    </div>
    <div class="mau_input">
        <?php
        if(isset($_SESSION['user'])&& (is_array($_SESSION['user']))){
            extract($_SESSION['user']);
        }
        ?>
        <form action="index.php?act=edit_tk" method="post">
            EMAIL <br>
            <input type="email" name="email" value="<?php echo $email?>"><br>
            TÊN TÀI KHOẢN <br>
            <input type="text" name="user" value="<?php echo $ten_tk?>"></br>
            MẬT KHẨU <br>
            <input type="pasword" name="pass" value="<?php echo $mat_khau?>"><br>
            ĐỊA CHỈ <br>
            <input type="text" name="address"value="<?php echo $dia_chi?>"><br>
            SỐ ĐIỆN THOẠI <br>
            <input type="text" name=" sdt" value="<?php echo $sdt?>"><br>
            <input type="hidden" name="id" id="" value="<?php echo $ma_tk?>">
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
