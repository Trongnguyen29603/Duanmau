<?php
   if(is_array($suadm)){
       extract($suadm);
   }

?>
<div class="row">
    <div class="rowformtile">
        <h1>Cấp nhật loại hàng </h1>
    </div>
    <div class="rowformcontenr">
        <form action="index.php?act=updatedm" method="post">
            <div class="rowinput">
                Mã loại <br>
                <input type="text" name="ma_loai" id="" disabled placeholder="   mã loại đã tự thêm admin ko cần thêm gì cả ">
            </div>
            <div class="rowinput">
                Tên loại <br>
                <input type="text" name="ten_loai" id="" value="<?php if(isset($ten_loai)&& ($ten_loai!= "")) echo $ten_loai; ?>">
            </div>
            <div class="rowsubmit">
                <input type="hidden" name="id" value="<?php if(isset($ma_loai)&& ($ma_loai>0)) echo $ma_loai; ?>">
                <input type="submit" name="capnhat" id="" value="update">
                <input type="reset" name="" id="" value="nhập lại">
                <a href="index.php?act=listdm"><input type="button" name="" id="" value="danh sách"></a>
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