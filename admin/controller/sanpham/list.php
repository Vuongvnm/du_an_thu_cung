<?php
include "model/danh_muc.php";
include "model/sanpham.php";
// B1 lấy dữ liệu từ DB -> Giao cho model
if(isset($_GET['id_dm']))
{
    $id_danhmuc= $_GET['id_dm'];
    $listThucung= load_all_thucung_theo_id_danh_muc($id_danhmuc);
    include "view/sanpham/list.php";
}
$listDanhMuc = lay_danhmuc_tudb();
// B2 xử lý dữ liệu -> Giao cho controller

// B3 đưa dữ liệu ra màn hình -> Giao cho view