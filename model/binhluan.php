<?php
function insert_binhluan($noi_dung,$iduser,$idpro,$ngay_bl){
    $spl = "insert into binh_luan(noi_dung,iduser,idpro,ngay_bl) value('$noi_dung','$iduser','$idpro','$ngay_bl')";
    pdo_execute($spl);
}

function loadall_binhluan($idpro){
    $sql="select * from binh_luan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'";
    $sql.=" order by id desc";
    $listbl=pdo_query($sql);
    return $listbl;
}

function delete_binhluan($id){
    $sql="delete from binh_luan where id=".$id;
    pdo_execute($sql);
}
?>