<div class="row">
    <div class="rowformtile">
        <h1>danh mục loại hàng</h1>
    </div>
    <div class="rowtable">
        <table border="1px">
            <tr>
                <th></th>
                <th>mã loại</th>
                <th>tên loại </th>
                <th>giá </th>
                <th>hình </th>
                <th>mô tả </th>
                <th>đặc biệt </th>
                <th>lượt xem</th>
                <th></th>

            </tr>
            <?php
            foreach ($sanpham as $value ){
                extract($value);
                $suasp="index.php?act=suasp&id=".$ma_hh;
                $xoasp="index.php?act=xoasp&id=".$ma_hh;
                $hinh_anh = "../uploadimg/".$hinh;
                if(is_file($hinh_anh)){
                    $hinh = "<img src='".$hinh_anh."' height='80'>";
                }else{
                    $hinh = "no photo";
                }
                echo ' 
                         <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$ma_hh.'</td>
                        <td>'.$ten_hh.'</td>
                        <td>'.$don_gia.'</td>    
                         <td>'.$hinh.'</td>                                                
                        <td>'.$mo_ta.'</td>
                        <td>'.$dac_biet.'</td>
                         <td>'.$view.'</td>
                         <td>'.$ten_hh.'</td>
                        <td><a href="'.$suasp.'"><input type="button" name="" id="" value="sửa"></a> <a href="'.$xoasp.'"><input type="button" name="" id="" value="xóa"></a></td>
                         </tr>
                         
                    ';
            }
            ?>

        </table>
    </div>
    <div class="rowbuttom">
<!--        <input type="button" name="" id="" value="chọn tất cả">-->
<!--        <input type="button" name="" id="" value=" bỏ chọn tất cả">-->
<!--        <input type="button" name="" id="" value="xóa các danh mục dã chọn">-->
        <a href="index.php?act=addsp"><input type="button" name="" id="" value="nhập thêm"></a>
    </div>
</div>

        