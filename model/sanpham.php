<?php
function insert_sanpham($ten_hh,$don_gia,$hinh,$mota,$dacbiet,$ma_loai){
    $spl = "insert into hang_hoa values (null,'$ten_hh','$don_gia','$hinh','$mota','$dacbiet',null,'$ma_loai')";
    pdo_execute($spl);
}
function delete_sanpham($ma_hh){
      $sqle = "delete from hang_hoa where ma_hh =".$ma_hh;
      pdo_execute($sqle);
}
function loadall_sp_home(){
    $result = "select * from hang_hoa where 1 order by ma_hh desc limit 0,9";
    $sanpham=pdo_query($result);
    return $sanpham;
}
function loadall_sp_top10(){
    $result = "select * from hang_hoa where 1 order by view desc limit 0,10";
    $sanpham=pdo_query($result);
    return $sanpham;
}
function loadall_sp($kyw, $ma_loai){
    $sql = "select * from hang_hoa where 1";
    if ($kyw != ''){
        $sql .= " AND ten_hh LIKE '%" . $kyw . "%'";
    }
    if ($ma_loai > 0){
        $sql .= " and ma_loai ='".$ma_loai."'";
    }
    $sql .= " order by ma_hh desc";
    $listSanPham = pdo_query($sql);
    return $listSanPham;
}
function loadone_sp($ma_hh){
    $sql = "select * from hang_hoa where ma_hh = ".$ma_hh;
    $suasp = pdo_query_one($sql);
    return $suasp;
}
function loadone_ctsp($ma_hh){
    $sql = "select * from hang_hoa where ma_hh = ".$ma_hh;
    $sp = pdo_query_one($sql);
    return $sp;
}
//function loadone_dmsp($ma_loai){
//    $sql = "select * from hang_hoa where ma_loai = ".$ma_loai;
//    $sp = pdo_query($sql);
//    return $sp;
//}

function loadone_sp_cungloai($ma_hh,$ma_loai){
    $sql = "select * from hang_hoa where ma_loai = ".$ma_loai." and ma_hh <> ".$ma_hh;
    $sanpham=pdo_query($sql);
    return $sanpham;
}
function update_sanpham($ma_hh,$ten_hh,$don_gia,$hinh,$mota,$dacbiet,$ma_loai){
    if($hinh !=" "){
        $sql ='update hang_hoa set ma_hh = "'.$ma_hh.'",ten_hh = "'.$ten_hh.'",don_gia = "'.$don_gia.'",hinh = "'.$hinh.'",mo_ta = "'.$mota.'",dac_biet = "'.$dacbiet.'",ma_loai = "'.$ma_loai.'" where ma_hh = '.$ma_hh;
    }else{
        $sql ='update hang_hoa set ma_hh = "'.$ma_hh.'",ten_hh = "'.$ten_hh.'",don_gia = "'.$don_gia.'",hinh = "'.$hinh.'",mo_ta = "'.$mota.'",dac_biet = "'.$dacbiet.'",ma_loai = "'.$ma_loai.'" where ma_hh = '.$ma_hh;
    }
    pdo_execute($sql);
}
?>
