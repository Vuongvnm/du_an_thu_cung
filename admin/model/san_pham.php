<?php
  require_once "../model/pdo.php";

  function danh_sach_san_pham() {
    $sql = "SELECT * FROM san_pham ORDER BY id_sp DESC";
    return pdo_query($sql);
  }

  function mot_san_pham($id_sp) {
    $sql = "SELECT * FROM san_pham WHERE id_sp = $id_sp";
    return pdo_query_one($sql);
  }

  function them_san_pham($ten_sp, $gia_sp, $tuoi, $gioi_tinh, $hinh_anh, $nguon_goc, $tiem_chung, $ghi_chu, $id_dm, $id_ms) {
    $sql = "INSERT INTO san_pham (ten_sp, gia_sp, tuoi, gioi_tinh, hinh_anh, nguon_goc, tiem_chung, ghi_chu, id_dm, id_ms) VALUES ('$ten_sp', '$gia_sp', '$tuoi', '$gioi_tinh', '$hinh_anh', '$nguon_goc', '$tiem_chung', '$ghi_chu', '$id_dm', '$id_ms')";
    pdo_execute($sql);
  }
?>