<div class="row">
<div class="rowformtile">
    <h1>Thêm mới loại hàng </h1>
</div>
<div class="rowformcontenr">
    <form action="index.php?act=adddm" method="post">
        <div class="rowinput">
            Mã loại <br>
            <input type="text" name="ma_loai" id="" disabled placeholder="   mã loại đã tự thêm admin ko cần thêm gì cả ">
        </div>
        <div class="rowinput">
            Tên loại <br>
            <input type="text" name="ten_loai" id="">
        </div>
        <div class="rowsubmit">
            <input type="submit" name="themmoi" id="" value="thêm mới">
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