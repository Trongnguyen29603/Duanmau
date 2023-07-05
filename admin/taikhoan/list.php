
<div class="row">
            <div class="rowformtile">
                <h1>danh mục khach hang</h1>
            </div>
            <div class="rowtable">
                <table border="1px">
                    <tr>
                        <th></th>
                        <th>STT</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th></th>

                    </tr>
                    <?php
                         foreach ($list_taikhoan as $value ){
                             extract($value);
                             $suakh="index.php?act=sua_tk&id=".$ma_tk;
                             $xoakh="index.php?act=xoa_kh=".$ma_tk;
                             echo ' 
                         <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$ma_tk.'</td>
                        <td>'.$ten_tk.'</td>
                        <td>'.$mat_khau.'</td>
                        <td>'.$email.'</td>
                        <td>'.$dia_chi.'</td>
                        <td>'.$sdt.'</td>
                        <td>'.$vai_tro.'</td>
                        <td><a href="'.$suakh.'"><input type="button" name="" id="" value="sửa"></a> <a href="'.$xoakh.'"><input type="button" name="" id="" value="xóa"></a></td>
                         </tr>
                    ';
                         }
                    ?>

                </table>
            </div>
<!--            <div class="rowbuttom">-->
<!--                <input type="button" name="" id="" value="chọn tất cả">-->
<!--                <input type="button" name="" id="" value=" bỏ chọn tất cả">-->
<!--                <input type="button" name="" id="" value="xóa các danh mục dã chọn">-->
<!---->
<!--            </div>-->
        </div>
