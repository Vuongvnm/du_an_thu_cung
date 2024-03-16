<?php
  require_once "../model/pdo.php";

  function danh_sach_san_pham() {
    $sql = "SELECT * FROM san_pham ORDER BY id_sp DESC";
    return pdo_query($sql);
  }

  function them_san_pham($ten_sp, $gia_sp, $tuoi, $gioi_tinh, $hinh_anh, $nguon_goc, $tiem_chung, $ghi_chu, $ngay_tao, $ngay_cap_nhat, $id_dm, $id_ms) {
    $sql = "INSERT INTO san_pham (ten_sp, gia_sp, tuoi, gioi_tinh, hinh_anh, nguon_goc, tiem_chung, ghi_chu, ngay_tao, ngay_cap_nhat) VALUES ('$ten_sp', '$gia_sp', '$tuoi', '$gioi_tinh', '$hinh_anh', '$nguon_goc', '$tiem_chung', '$ghi_chu', '$ngay_tao', '$ngay_cap_nhat') WHERE id_dm = $id_dm AND id_ms = $id_ms";
    pdo_execute($sql);
  }
?>