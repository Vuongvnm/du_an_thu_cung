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

  function them_san_pham($ten_sp, $gia_sp, $tuoi, $hinh_anh, $nguon_goc, $so_luong, $ghi_chu, $id_dm, $id_ms, $id_gt, $id_tc) {
    $sql = "INSERT INTO san_pham (ten_sp, gia_sp, tuoi, hinh_anh, nguon_goc, so_luong, ghi_chu, id_dm, id_ms, id_gt, id_tc) VALUES ('$ten_sp', '$gia_sp', '$tuoi', '$hinh_anh', '$nguon_goc', '$so_luong', '$ghi_chu', '$id_dm', '$id_ms', '$id_gt', '$id_tc')";
    pdo_execute($sql);
  }

  function xoa_san_pham($id_sp) {
    $sql = "DELETE FROM san_pham WHERE id_sp = $id_sp";
    pdo_execute($sql);
  }

  function hien_thi_iddm_by_idsp($id_sp) {
    $sql = "SELECT * FROM san_pham WHERE id_sp = '$id_sp'";
    return pdo_query_one($sql)['id_dm'];
  }

?>