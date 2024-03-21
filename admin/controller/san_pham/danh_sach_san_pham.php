<?php
  require_once "./model/san_pham.php";
  require_once "./model/gioi_tinh.php";
  $danh_sach_san_pham = danh_sach_san_pham();
  $danh_sach_gioi_tinh = danh_sach_gioi_tinh();
  require_once "view/san_pham/danh_sach_san_pham.php";
?>