<?php
function insert_danhmuc($ten_loai){
    $spl = "insert into loai_hang(ten_loai) value('$ten_loai')";
    pdo_execute($spl);
}
function delete_danhmuc($ma_loai){
      $sqle = "delete from loai_hang where ma_loai =".$ma_loai;
      pdo_execute($sqle);
}
function loadall(){
    $result = "select * from loai_hang order by ma_loai";
    $danhmuc=pdo_query($result);
    return $danhmuc;
}
function loadone($ma_loai){
    $sql = "select * from loai_hang where ma_loai = ".$ma_loai;
    $suadm = pdo_query_one($sql);
    return $suadm;
}
function update_danhmuc($ma_loai,$ten_loai){
    $sql="update loai_hang set ten_loai = '".$ten_loai."' where ma_loai=".$ma_loai;
    pdo_execute($sql);
}
?>
