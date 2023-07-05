<div class="row">
            <div class="rowformtile">
                <h1>danh mục loại hàng</h1>
            </div>
            <div class="rowtable" style="width: 100%;">
                <table border="1px" style="width: 100%;">
                    <tr style="color: red" >
                        <th style="background-color: #666;">mã loại</th>
                        <th style="background-color: #666;">tên loại </th>
                        <th style="background-color: #666;"></th>
                    </tr>
                    <?php
                         foreach ($danhmuc as $value ){
                             extract($value);
                             $suadm="index.php?act=suadm&id=".$ma_loai;
                             $xoadm="index.php?act=xoadm&id=".$ma_loai;
                             echo ' 
                         <tr>
                        <td>'.$ma_loai.'</td>
                        <td>'.$ten_loai.'</td>
                        <td><a href="'.$suadm.'"><input type="button" name="" id="" value="sửa"></a> <a href="'.$xoadm.'"><input type="button" name="" id="" value="xóa"></a></td>
                         </tr>
                    ';
                         }
                    ?>

                </table>
            </div>
            <div class="rowbuttom">

                <a href="index.php?act=adddm"><input type="button" name="" id="" value="nhập thêm"></a>
            </div>
        </div>
        