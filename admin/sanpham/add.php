<div class="row">
<div class="rowformtile">
    <h1>Thêm mới sản phẩm  </h1>
</div>
<div class="rowformcontenr">
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" >
        <div class="rowinput">
            Mã sản phẩm <br>
            <input type="text" name="ma_sp" id="" disabled placeholder="   mã loại đã tự thêm admin ko cần thêm gì cả ">
        </div>
        <div class="rowinput">
            Tên sản phẩm <br>
            <input type="text" name="ten_sp" id="">
        </div>
        <div class="rowinput">
            giá <br>
            <input type="text" name="gia_sp" id="">
        </div>
        <div class="rowinput">
            hình <br>
            <input type="file" name="hinh_sp" id="">
        </div>
        <div class="rowinput">
            mô tả <br>
           <textarea name="mota" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="rowinput">
            đặc biệt  <br>
            <input type="text" name="dacbiet" id="">
        </div>
        <div class="rowinput">
            ma_loai <br>
           <select name="ma_loai">
               <?php
                   foreach ($danhmuc as $item=>$value){ ?>
                     <option value="<?php echo $value['ma_loai'] ?>"><?php echo $value['ten_loai'] ?>
               <?php
                   }
               ?>
           </select>
        </div>

        <div class="rowsubmit">
            <input type="submit" name="themmoi" id="" value="thêm mới">
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