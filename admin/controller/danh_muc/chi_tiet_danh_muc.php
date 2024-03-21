<?php
  require_once "./model/danh_muc.php";
  require_once "./model/gioi_tinh.php";
  if(isset($_GET['id_dm']) && ($_GET['id_dm']) > 0) {
    $id_dm = $_GET['id_dm'];
    $danh_sach_san_pham = san_pham_id_danh_muc($id_dm);
  }
  $mot_danh_muc = mot_danh_muc($id_dm);
  $danh_sach_gioi_tinh = danh_sach_gioi_tinh();
  require_once "view/danh_muc/chi_tiet_danh_muc.php";
?>