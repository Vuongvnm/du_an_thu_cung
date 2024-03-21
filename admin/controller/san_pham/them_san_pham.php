<?php
  require_once "./model/san_pham.php";
  require_once "./model/danh_muc.php";
  require_once "./model/mau_sac.php";
  require_once "./model/gioi_tinh.php";
  require_once "./model/tiem_chung.php";
  $danh_sach_danh_muc = danh_sach_danh_muc();
  $danh_sach_mau_sac = danh_sach_mau_sac();
  $danh_sach_gioi_tinh = danh_sach_gioi_tinh();
  $danh_sach_tiem_chung = danh_sach_tiem_chung();
  require_once "view/san_pham/them_san_pham.php";
  if(isset($_POST['them_moi'])) {
    $id_dm = $_POST['id_dm'];
    $id_ms = $_POST['id_ms'];
    $id_gt = $_POST['id_gt'];
    $id_tc = $_POST['id_tc'];
    $ten_sp = $_POST['ten_sp'];
    $gia_sp = $_POST['gia_sp'];
    $tuoi = $_POST['tuoi'];
    $hinh_anh = $_FILES['hinh_anh']['name'];
    $nguon_goc = $_POST['nguon_goc'];
    $so_luong = $_POST['so_luong'];
    $ghi_chu = $_POST['ghi_chu'];
    $target_dir = "../assets/uploads/";
    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
    them_san_pham($ten_sp, $gia_sp, $tuoi, $hinh_anh, $nguon_goc, $so_luong, $ghi_chu, $id_dm, $id_ms, $id_gt, $id_tc);
    echo "<script type='text/javascript'>alert('Thêm thành công!');</script>";
  }
?>