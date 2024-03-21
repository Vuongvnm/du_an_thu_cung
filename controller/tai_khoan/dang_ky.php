<?php
  require_once "./model/thuoc_tinh.php";
  require_once "./view/thuoc_tinh/tai_khoan.php";
  if(isset($_POST['dang_ky'])) {
    $ten_nguoi_dung = $_POST['ten_nguoi_dung'];
    $email = $_POST['email'];
    $mat_khau = $_POST['mat_khau'];
    dang_ky($ten_nguoi_dung, $email, $mat_khau);
  }
  error_reporting(E_ERROR | E_PARSE);
  header('Location: index.php')
?>