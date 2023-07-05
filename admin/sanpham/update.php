<?php
   if(is_array($suasp)){
       extract($suasp);
   }
$hinh_anh = "../uploadimg/".$hinh;
if(is_file($hinh_anh)){
    $hinh = "<img src ='".$hinh_anh."' height='80'>";
}else{
    $hinh = "no photo";
}
?>

<div class="row">
    <div class="rowformtile">
        <h1>Cấp nhật loại hàng </h1>
    </div>
    <div class="rowformcontenr">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data" >
            <div class="rowinput">
                Mã sản phẩm <br>
                <input type="text" name="ma_sp" id="" disabled placeholder="   mã loại đã tự thêm admin ko cần thêm gì cả ">
            </div>
            <div class="rowinput">
                Tên sản phẩm <br>
                <input type="text" name="ten_sp" id="" value="<?php if(isset($ten_hh)&& ($ten_hh!= "")) echo $ten_hh; ?>">
            </div>
            <div class="rowinput">
                giá <br>
                <input type="text" name="gia_sp" id="" value="<?php if(isset($don_gia)&& ($don_gia>0)) echo $don_gia; ?>">
            </div>
            <div class="rowinput">
                hình <br>

                <input type="file" name="hinh_sp" id=""  >
               <?php echo $hinh;?>
            </div>
            <div class="rowinput">
                mô tả <br>
                <textarea name="mota" id="" cols="30" rows="10"><?php if(isset($mo_ta)&& ($mo_ta!= "")) echo $mo_ta; ?></textarea>
            </div>
            <div class="rowinput">
               đặc biệt   <br>
                <input type="text" name="dacbiet" id="" value="<?php if(isset($dac_biet)&& ($dac_biet!= "")) echo $dac_biet; ?>">
            </div>
            <div class="rowinput">
                ma loại <br>
                <input type="text" name="ma_loai" id="" value="<?php if(isset($ma_loai)&& ($ma_loai!= "")) echo $ma_loai; ?>">
            </div>
            <div class="rowsubmit">
                <input type="hidden" name="id" value="<?php if(isset($ma_hh) && ($ma_hh != '')) echo $ma_hh; ?>">
                <input type="submit" name="capnhat" id="" value="cập nhật">
                <input type="reset" name="" id="" value="nhập lại">
                <a href="index.php?act=listsp"><input type="button" name="" id="" value="danh sách"></a>
            </div>
            <?php
            if(isset($thongbao)&& $thongbao!= ""){
                echo $thongbao;
            }
            ?>
        </form>
    </div>

</div>

</div>