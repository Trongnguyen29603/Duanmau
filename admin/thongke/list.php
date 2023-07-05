<div class="row">
    <div class="rowformtile">
        <h1>thống kê</h1>
    </div>
    <div class="rowtable">
        <table border="1px">
            <tr>

                <th>mã loại</th>
                <th>tên loại hàng</th>
                <th>số lượng sản phẩm</th>
                <th>giá thấp nhất</th>
                <th>giá cao nhất</th>
                <th>trung bình</th>



            </tr>
            <?php
            foreach ($listtk as $key => $value){

                ?>
                <tr>

                    <td><?php echo $value['madm']?></td>
                    <td><?php echo $value['tendm']?></td>
                    <td><?php echo $value['countsp']?></td>
                    <td><?php echo $value['minprice']?></td>
                    <td><?php echo $value['maxprice']?></td>
                    <td><?php echo $value['trungbinh']?></td>
                </tr>

            <?php } ?>
        </table>
    </div>
<!--    <div class="rowbuttom">-->
<!--        <input type="button" value="Chọn tất cả">-->
<!--        <input type="button" value="Bỏ chọn tất cả">-->
<!--        <input type="button" value="Xóa mục đã chọn ">-->
<!--    </div>-->
</div>