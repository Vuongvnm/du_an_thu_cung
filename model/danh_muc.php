<?php
  require_once "pdo.php";
  
  function danh_sach_danh_muc() {
    $sql = "SELECT * FROM danh_muc ORDER BY id_dm DESC";
    return pdo_query($sql);
  }

  function san_pham_ban_chay() {
    $sql = "SELECT * FROM san_pham ORDER BY luot_xem LIMIT 0.5";
    return pdo_query($sql);
  }
?>