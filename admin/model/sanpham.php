<?php
 require_once "model/pdo.php";
function load_all_thucung_theo_id_danh_muc($id_danhmuc){
    $sql = "SELECT * FROM thucung WHERE id_danhmuc = $id_danhmuc";
    return pdo_query($sql);
}
function add_thucung($id_danhmuc,$mausac,$ten,$gia,$tuoi,$gioitinh,$nguongoc,$tiemchung,$soluong,$ghichu) {
    $sql = "INSERT INTO `thucung`(id_danhmuc,id_mausac,ten,gia,tuoi,gioi_tinh,nguon_goc,tiem_chung,soluong,ghi_chu) 
    VALUES ('$id_danhmuc','$mausac','$ten','$gia','$tuoi','$gioitinh','$nguongoc','$tiemchung','$soluong','$ghichu'";
    pdo_execute($sql); 
}
?>
