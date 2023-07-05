<?php
function insert_taikhoan($ten_tk,$mat_khau,$email){
    $spl = "insert into tai_khoan values (null,'$ten_tk','$mat_khau','$email',null,null,null)";
    pdo_execute($spl);
}
function checkuser($ten_tk,$mat_khau){
    $sql = "select * from tai_khoan where ten_tk = '".$ten_tk."' AND mat_khau = '".$mat_khau."'";
    $tk = pdo_query_one($sql);
    return $tk;
}
function update_tk($ma_tk,$ten_tk,$mat_khau,$email,$dia_chi,$sdt,$vai_tro){
    $sql ='update tai_khoan set ten_tk = "'.$ten_tk.'",mat_khau = "'.$mat_khau.'",email = "'.$email.'",dia_chi = "'.$dia_chi.'",sdt = "'.$sdt.'",vai_tro = "'.$vai_tro.'" where ma_tk = '.$ma_tk;
    pdo_execute($sql);
}
function checkresetpass($email){
    $sql = "select * from tai_khoan where email = '".$email."'";
    $passreset = pdo_query_one($sql);
    return $passreset;
}
//function update_pass($ma_tk,$mat_khau){
//    $sql ='update tai_khoan set mat_khau = "'.$mat_khau.'"where ma_tk = '.$ma_tk;
//    pdo_execute($sql);
//}
function loadall_tk(){
    $result = "select * from tai_khoan order by ma_tk";
    $taikhoan=pdo_query($result);
    return $taikhoan;
}
function loadone_tk($ma_tk){
    $sql = "select * from tai_khoan where ma_tk = ".$ma_tk;
    $suatk = pdo_query_one($sql);
    return $suatk;
}
function delete_tk($ma_tk){
    $sqle = "delete from tai_khoan where ma_tk =".$ma_tk;
    pdo_execute($sqle);
}

?>
