<div class="row">
    <div class="rowformtile">
        <h1>danh sách bình luận </h1>
    </div>
    <div class="rowtable">
        <table border="1px">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Nội dung bình luận</th>
                <th>Iduser</th>
                <th>Idpro</th>
                <th>Ngày bình luận</th>
                <th></th>
            </tr>
            <?php
          foreach ($listbinhluan as $binhluan) {
              extract($binhluan);
              $xoabl = "index.php?act=xoabl&id=" . $id;
              echo ' <tr>
                                <td><input type="checkbox" name="" id=""</td>
                                <td>' . $id . '</td>
                                <td>' . $noi_dung . '</td>
                                <td>' . $iduser . '</td>
                                <td>' . $idpro . '</td>
                                <td>' . $ngay_bl . '</td>
                                                           
                               <td> <a href="' . $xoabl . '"><input type="button" value="Xóa"></a></td>
                                </tr>';
          }
            ?>

        </table>
    </div>
<!--    <div class="rowbuttom">-->
<!--        <input type="button" name="" id="" value="chọn tất cả">-->
<!--        <input type="button" name="" id="" value=" bỏ chọn tất cả">-->
<!--        <input type="button" name="" id="" value="xóa các danh mục dã chọn">-->
<!--        <a href="index.php?act=addsp"><input type="button" name="" id="" value="nhập thêm"></a>-->
<!--    </div>-->
</div>
