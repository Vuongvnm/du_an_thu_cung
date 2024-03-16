<?php
  require_once "../model/pdo.php";

  function danh_sach_mau_sac() {
    $sql = "SELECT * FROM mau_sac ORDER BY id_ms ASC";
    return pdo_query($sql);
  }
?>