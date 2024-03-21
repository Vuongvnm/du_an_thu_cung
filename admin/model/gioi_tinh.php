<?php
  require_once "../model/pdo.php";

  function danh_sach_gioi_tinh() {
    $sql = "SELECT * FROM gioi_tinh";
    return pdo_query($sql);
  }

  function hien_thi_idgt_by_idsp($id_sp) {
    $sql = "SELECT * FROM san_pham WHERE id_sp = '$id_sp'";
    return pdo_query_one($sql)['id_gt'];
  }
?>