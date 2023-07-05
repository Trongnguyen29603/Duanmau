<?php
  session_start();
  include "../../model/pdo.php";
  include "../../model/binhluan.php ";
   $idpro = $_REQUEST['idpro'];
   $dsbl = loadall_binhluan($idpro);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>


  <div class="category">
                    <h3>Bình luận </h3>
                    <div class="thanhphan">
                        <table>

                        <?php
                        foreach ($dsbl as $item){
                            extract($item);
                            echo '<tr> <td>'.$noi_dung.'</td>' ;
                            echo '<td>'.$iduser.'</td>' ;
                            echo '<td>'.$ngay_bl.'</td></tr>' ;
                        }
                        ?>
                        </table>
                    </div>
                    <div class="footer_category">
                        <?php
                        if(isset($_SESSION['user'])){
                        ?>
                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                            <input type="hidden" name="idpro" value="<?=$idpro?>">
                            <input type="text" name="noidung" id="">
                            <input type="submit" name="guibinhluan" value="binh luận  ">
                        </form>
                          <?php
                        }
                        else{
                            echo 'bạn cần đăng ký tài khoản ';
                        }
                          ?>
                    </div>
        <?php
       if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
           $noi_dung = $_POST['noidung'];
           $idpro = $_POST['idpro'];
           $iduser = $_SESSION['user']['ma_tk'];
           $ngay_bl = date('h:i:sa d/m/Y');
           insert_binhluan($noi_dung, $iduser, $idpro, $ngay_bl);
           header("location:  ".$_SERVER['HTTP_REFERER']);
         }
        ?>
  </div>
</body>
</html>