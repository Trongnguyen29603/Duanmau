<?php
function loadall_thongke(){
    $sql = "select loai_hang.ma_loai as madm, loai_hang.ten_loai as tendm, count(hang_hoa.ma_hh) as countsp, min(hang_hoa.don_gia) as minprice, max(hang_hoa.don_gia) as maxprice, avg(hang_hoa.don_gia) as trungbinh from hang_hoa left join loai_hang on loai_hang.ma_loai=hang_hoa.ma_loai group by loai_hang.ma_loai order by loai_hang.ma_loai desc";
    $dstk = pdo_query($sql);
    return $dstk;
}
?>