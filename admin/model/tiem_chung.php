<?php
  function danh_sach_tiem_chung() {
    $sql = "SELECT * FROM tiem_chung";
    return pdo_query($sql);
  }
?>