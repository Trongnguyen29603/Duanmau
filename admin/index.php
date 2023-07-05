<?php
include "../model/pdo.php";
    include "header.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
   include "../model/binhluan.php";
   include "../model/tai_khoan.php";
   include "../model/thongke.php";
    //controller 
  if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'adddm' :
          if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
            $ten_loai = $_POST['ten_loai'];
            insert_danhmuc($ten_loai);
            $thongbao = "thêm thành công";
          }
             include "danhmuc/add.php";

         break;
        case  'listdm':
            $danhmuc=loadall();
            include "danhmuc/list.php";
         break;
        case 'xoadm':
           if(isset($_GET['id']) && ($_GET['id']>0)) {
               delete_danhmuc($_GET['id']);
           }
            $danhmuc=loadall();
            include "danhmuc/list.php";
        break;
        case 'suadm':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                 $suadm = loadone($_GET['id']);
            }
                include "danhmuc/update.php";
           break;

        case 'updatedm' :
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $ten_loai = $_POST['ten_loai'];
                $id = $_POST['id'];
               update_danhmuc($id,$ten_loai);
                $thongbao = "thêm thành công";
            }
            $danhmuc=loadall();
            include "danhmuc/list.php";
            break;
// san phẩm
     case 'addsp' :
              if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                  $ten_hh = $_POST['ten_sp'];
                  $don_gia = $_POST['gia_sp'];
                  $ma_loai = $_POST['ma_loai'];
                  $dacbiet = $_POST['dacbiet'];
                  $mota = $_POST['mota'];
                  $hinh=$_FILES['hinh_sp']['name'];
                  $target_dir = "../uploadimg/";
                  $target_file = $target_dir.$hinh;
                  if(move_uploaded_file($_FILES['hinh_sp']['tmp_name'], $target_file)){
//                      echo "ảnh của bạn đã được thêm thành công ";
                  }else{
//                      echo 'sorry, ảnh của bạn ko được uplead';
                  }
                  insert_sanpham($ten_hh,$don_gia,$hinh,$mota,$dacbiet,$ma_loai);
                  $thongbao = "thêm thành công";
              }
              $danhmuc=loadall();
              include "sanpham/add.php";

              break;
          case  'listsp':
              $sanpham=loadall_sp('',0);
              include "sanpham/list.php";
              break;
          case 'xoasp':
              if(isset($_GET['id']) && ($_GET['id']>0)) {
                  delete_sanpham($_GET['id']);
              }
              $sanpham=loadall_sp('',0);
              include "sanpham/list.php";
              break;
          case 'suasp':
              if(isset($_GET['id']) && ($_GET['id']>0)){
                  $suasp = loadone_sp($_GET['id']);
              }else{
                  echo "bạn cần nhập lại";
              }
              include "sanpham/update.php";
              break;

          case 'updatesp':
                if(isset($_POST['capnhat']) && ($_POST['capnhat']!='') ){
                    $ma_hh = $_POST['id'];
                    $ten_hh = $_POST['ten_sp'];
                    $don_gia = $_POST['gia_sp'];
                    $mota = $_POST['mota'];
                    $dacbiet = $_POST['dacbiet'];
                    $ma_loai = $_POST['ma_loai'];
                    $hinh=$_FILES['hinh_sp']['name'];
                    $target_dir = "../uploadimg/";
                    $target_file = $target_dir.$hinh;
                    if(move_uploaded_file($_FILES['hinh_sp']['tmp_name'], $target_file)){
//                      echo "ảnh của bạn đã được thêm thành công ";
                    }else{
                     echo 'sorry, ảnh của bạn ko được uplead';
                    }
                   update_sanpham($ma_hh,$ten_hh,$don_gia,$hinh,$mota,$dacbiet,$ma_loai);
                    $thongbao = "thêm thành công";
                }
              $sanpham=loadall_sp('',0);
               include "sanpham/list.php";
                break;

                //tài khoản

          case 'dskh':
              $list_taikhoan=loadall_tk();
              include "taikhoan/list.php";
              break;
          case 'xoa_kh':
              if(isset($_GET['id']) && ($_GET['id']>0)) {
                  delete_tk($_GET['id']);
                  header('location:index.php?act=dskh');
              }
              else
              {
                  header('location:index.php?act=dskh');
                  echo "Không xóa được tài khoản";
              }
              $list_taikhoan=loadall_tk();
              include "taikhoan/list.php";
              break;
          case 'sua_tk':
              if(isset($_GET['id']) && ($_GET['id']>0)){
                  $suakh = loadone_tk($_GET['id']);
              }
              include "taikhoan/update.php";
              break;

          case 'update_kh':
              if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                  $vai_tro = $_POST['vai_tro'];
                  $ten_tk = $_POST['ten_tk'];
                  $mat_khau = $_POST['mat_khau'];
                  $email = $_POST['email'];
                  $dia_chi = $_POST['dia_chi'];
                  $sdt = $_POST['sdt'];
                  $ma_tk = $_POST['id'];
                  update_tk($ma_tk,$ten_tk,$mat_khau,$email,$dia_chi,$sdt,$vai_tro);
                  header('location:index.php?act=dskh');

              }
              include "taikhoan/update.php";
              break;
              //bình luận
          case 'dsbl';
              $listbinhluan=loadall_binhluan(0);
              include "binhluan/list.php";
              break;

          case 'xoabl';
              if(isset($_GET['id'])&&($_GET['id']>0)){
                  delete_binhluan($_GET['id']);
              }
              $listbinhluan= loadall_binhluan(0);
              include "binhluan/list.php";
              break;
//thống kê
          case 'thongke':
              $listtk = loadall_thongke();
              include 'thongke/list.php';
              break;
              //thoát

          default:
         include "home.php";
         break;
    }

  }
  else{
      include "home.php";
  }

  include "footer.php";

?>