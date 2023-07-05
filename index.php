<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "view/header.php";
include "model/tai_khoan.php";
include "global.php";
$sanpham = loadall_sp_home();
$danhmuc = loadall();
$dangsacahtop10 = loadall_sp_top10();
if((isset($_GET['act'])) && ($_GET['act']!= "")){
    $act = $_GET['act'];
    switch ($act){
        case 'dang_ki':
            if(isset($_POST['dang_ky']) && ($_POST['dang_ky'])) {
                $email = $_POST['email'];
                $ten_tk = $_POST['user'];
                $mat_khau = $_POST['pass'];
                insert_taikhoan($ten_tk,$mat_khau,$email);
                $thong_bao = "Đăng kí tài khoản thành công. Vui lòng đăng nhập để sử dụng!" ;
            }
            include "view/tai_khoan/dang_ki.php";

            break;
        case 'dangnhap':
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {

                $ten_tk = $_POST['user'];
                $mat_khau = $_POST['pass'];
                $checkuser = checkuser($ten_tk,$mat_khau);
                if(is_array($checkuser)){
                    $_SESSION['user'] = $checkuser;
                    // $thong_bao = "Đăng nhập thành công" ;
                    header('location: index.php?act=trangchu');
                }
                else{
                    $thong_bao = "Tài khoản không tồn tại vui lòng kiểm tra lại hoặc đăng kí" ;
                    header('location:view/tai_khoan/dang_ki.php');
                }
            }


            break;
        case 'edit_tk':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $ten_tk = $_POST['user'];
                $mat_khau = $_POST['pass'];
                $email = $_POST['email'];
                $dia_chi = $_POST['address'];
                $sdt = $_POST['sdt'];
                $ma_tk = $_POST['id'];
                update_tk($ma_tk,$ten_tk,$mat_khau,$email,$dia_chi,$sdt);
                $_SESSION['user']=checkuser($ten_tk,$mat_khau);
                header('location:index.php?act=edit_tk');

            }
            include "view/tai_khoan/edit_tk.php";
            break;
        case 'quen_mk':
            if(isset($_POST['quenmk']) && ($_POST['quenmk'])) {
                $email = $_POST['email'];
                $check = checkresetpass($email);
                if(is_array($check)){
                    $thong_bao = "Mật khẩu của bạn là: ".$check['mat_khau'];
                }else{
                    $thong_bao = " email không tồn tại. Vui lòng kiểm tra lại!";
                }
            }
            include "view/tai_khoan/quen_mk.php";
            break;
        case 'log_out':
            session_unset();
            header('location: index.php');
            break;
        case 'sanpham':
            if(isset($_POST['kyword'])&&($_POST['kyword'])){
                $kyw = $_POST['kyword'];

            }else{
                $kyw = '';
            }
            if(isset($_GET['iddm']) && ($_GET['iddm']>0)) {
                $ma_loai = $_GET['iddm'];

            }else{
                $ma_loai = 0;
            }
            $dmsp = loadall_sp($kyw,$ma_loai);
            include "view/sanpham.php";
            break;
        case 'sanphamct':
            if(isset($_GET['idsp']) && ($_GET['idsp']>0)){
                $id=$_GET['idsp'];
                $onesp = loadone_ctsp($id);
                extract($onesp);
                $sp_cungloai = loadone_sp_cungloai($id,$ma_loai);
                include "view/sanphamct.php";
            }
            else{
                include "view/home.php";
            }
            break;

        default;
            include "view/home.php";
            break;
    }

}else{
    include "view/home.php";
}

include  "view/footer.php";
?>
