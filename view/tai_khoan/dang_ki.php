<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div>
    <div class="dang_ky">
        <div class="box_trai">
            <div class="mau_nhap">
                <div class="tieu_de" style="background-color:yellowgreen ; font-size: 30px;text-align: center;padding-top:20px;padding-bottom: 20px; border-radius:10px;">
                    ĐĂNG KÍ TÀI KHOẢN
                </div>
                <div class="mau_input">
                    <form action="index.php?act=dang_ki" method="post">
                        <p>email</p>
                        <input type="email" name="email"><br>
                        <p>Tên đăng nhập<p>
                            <input type="text" name="user"><br>
                        <p>Mật khẩu</p>
                        <input type="pasword" name="pass"><br>
                        <p></p>


                        <input type="submit" name="dang_ky" value="Đăng kí">
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
        </div>

    </div>
</div>
</body>
</html>
