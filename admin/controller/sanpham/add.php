<?php 
if(!isset($_POST['themsanpham'])) {
    include "model/danh_muc.php";
    $listDanhMuc = lay_danhmuc_tudb();
    include "model/mausac.php";
    $listmausac = lay_mausac();
    include "view/sanpham/add.php";
} else {
    include "model/sanpham.php";
    // B1 Lấy dữ liệu từ người dùng, xử lý dữ liệu -> Giao cho controller
    if(isset($_POST['id_sp'])) {
        $id_danhmuc=$_POST['iddm'];
        $ten = $_POST['ten'];
        $gia=$_POST['gia'];
        $tuoi=$_POST['tuoi'];
        $gioitinh=$_POST['gioitinh'];
        $nguongoc=$_POST['nguongoc'];
        $tiemchung=$_POST['tiemchung'];
        $soluong=$_POST['soluong'];
        $ghichu=$_POST['ghichu'];
        add_sanpham($id_danhmuc,$mausac,$ten,$gia,$tuoi,$gioitinh,$nguongoc,$tiemchung,$soluong,$ghichu);
    }

    header('Location: index.php?chucnang=listsanpham');
}
