<?php
  require_once "./model/danh_muc.php";
  if(isset($_GET['id_dm']) && ($_GET['id_dm']) > 0) {
    $id_dm = $_GET['id_dm'];
    $danh_sach_san_pham = san_pham_id_danh_muc($id_dm);
  }
  require_once "view/danh_muc/chi_tiet_danh_muc.php";
?>