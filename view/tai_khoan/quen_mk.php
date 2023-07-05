<div class="mau_nhap">
    <div class="tieu_de">
        QUÊN MẬT KHẨU
    </div>
    <div class="mau_input">
        <form action="index.php?act=quen_mk" method="post">
            <input type="email" name="email">


            <input type="submit" name="quenmk" value="Gửi">
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