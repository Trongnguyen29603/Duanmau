<div class="sign">
    <h3>Đăng lý tài khoản</h3>
    <?php
    if(isset($_SESSION['user'])){
        extract($_SESSION['user']);
        ?>
        <p>Xin Chào</p>
        <p>
            <?php
            echo $ten_tk."<br>"
            ?>
        </p>
        <!-- <li><a href="index.php?act=quen_mk">Quên mật khẩu</a></li><br> -->
        <li><a href="index.php?act=edit_tk">Cập nhật tài khoản</a></li><br>
        <?php
        if($vai_tro ==1){
            ?>
            <li><a href="admin/index.php">Đăng nhập admin</a></li><br>
            <?php
        }
        ?>
        <li><a href="index.php?act=log_out">Đăng xuất</a></li><br>
        <?php
    }else{
        ?>
        <form action="index.php?act=dangnhap" method="POST">
            <p>tên đăng nhập</p>
            <input type="text" name="user" id="username" class="nhap">
            <p>mật khẩu</p>
            <input type="password" name="pass" id="password" class="nhap">

            <input type="checkbox" name="" id=""> Ghi nhớ mật khâu<br>
            <input type="submit" value="đăng nhập" id="sign_in" name="dangnhap">
        </form>
        <li><a href="index.php?act=quen_mk">Quên mật khẩu</a></li>
        <li><a href="index.php?act=dang_ki">Đăng ký thành viên </a></li>
        <?php
    }
    ?>
</div>
                <br>
                <div class="category">
                    <h3>Danh mục</h3>
                    <div class="thanhphan">
                        <?php
                        foreach ($danhmuc as $item){
                            extract($item);
                            $linkdm = "index.php?act=sanpham&iddm=".$ma_loai;
                            echo ' <li><a href="'.$linkdm.'">'.$ten_loai.'</a></li>';
                        }
                        ?>

                    </div>
                    <div class="footer_category">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyword" id="">
                            <input type="submit" name="seach" value="tìm kiếm ">
                        </form>
                    </div>
                </div>
                <br>
                <div class="topproducts">
                    <h3>Top sản phẩm nổi bật</h3>
                    <div class="topcategory">
                        <?php
                        foreach ($dangsacahtop10 as $top){
                            extract($top);
                            $linksp = "index.php?act=sanphamct&idsp=".$ma_hh;
                            $img = $img_sp.$hinh;
                            echo '  <li><img src="'.$img.'" alt=""><a href="'.$linksp.'">'.$ten_hh.'</a></li>';
                        }
                        ?>

                    </div>
                </div>