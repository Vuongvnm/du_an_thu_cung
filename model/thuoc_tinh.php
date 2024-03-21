<?php
  require_once "pdo.php";

  function danh_sach_danh_muc() {
    $sql = "SELECT * FROM danh_muc ORDER BY id_dm ASC";
    return pdo_query($sql);
  }

  function san_pham_ban_chay() {
    $sql = "SELECT * FROM san_pham ORDER BY luot_xem DESC LIMIT 5";
    return pdo_query($sql);
  }

  function dang_ky($ten_nguoi_dung, $email, $mat_khau) {
    $sql = "INSERT INTO tai_khoan (ten_nguoi_dung, email, mat_khau) VALUES ('$ten_nguoi_dung', '$email', '$mat_khau')";
    pdo_execute($sql);
  }
?>