<?php
  require_once "./model/san_pham.php";
  require_once "./model/danh_muc.php";
  require_once "./model/mau_sac.php";
  $danh_sach_danh_muc = danh_sach_danh_muc();
  $danh_sach_mau_sac = danh_sach_mau_sac();
  require_once "view/san_pham/them_san_pham.php";
  if(isset($_POST['them_moi'])) {
    $id_dm = $_POST['id_dm'];
    $id_ms = $_POST['id_ms'];
    $ten_sp = $_POST['ten_sp'];
    $gia_sp = $_POST['gia_sp'];
    $tuoi = $_POST['tuoi'];
    $gioi_tinh = $_POST['gioi_tinh'];
    $hinh_anh = $_FILES['hinh_anh']['name'];
    $nguon_goc = $_POST['nguon_goc'];
    $tiem_chung = $_POST['tiem_chung'];
    $ghi_chu = $_POST['ghi_chu'];
    $ngay_tao = $_POST['ngay_tao'];
    $ngay_cap_nhat = $_POST['ngay_cap_nhat'];
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
    them_san_pham($ten_sp, $gia_sp, $tuoi, $gioi_tinh, $hinh_anh, $nguon_goc, $tiem_chung, $ghi_chu, $ngay_tao, $ngay_cap_nhat, $id_dm, $id_ms);
    echo "<script type='text/javascript'>alert('Thêm thành công!');</script>";
  }
  require_once "them_san_pham.php";
?>