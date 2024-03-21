<?php
  require_once "./model/san_pham.php";
  // include_once "view/san_pham/them_san_pham.php";
  if(isset($_GET['id_sp']) && $_GET['id_sp'] > 0) {
    $id_sp = $_GET['id_sp'];
    xoa_san_pham($id_sp);
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>"; // Không hiển thị
  }
  // error_reporting(E_ERROR | E_PARSE);
  header('Location: index.php?action=danh_sach_san_pham');
?>