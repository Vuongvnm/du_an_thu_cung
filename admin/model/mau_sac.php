<?php
  require_once "../model/pdo.php";

  function danh_sach_mau_sac() {
    $sql = "SELECT * FROM mau_sac ORDER BY id_ms DESC";
    return pdo_query($sql);
  }

  function san_pham_id_mau_sac($id_ms) {
    $sql = "SELECT * FROM san_pham WHERE id_ms = $id_ms";
    return pdo_query($sql);
  }

  function them_mau_sac($ten_ms) {
    $sql = "INSERT INTO mau_sac (ten_ms) VALUES ('$ten_ms')";
    pdo_execute($sql);
  }

  function xoa_mau_sac($id_ms) {
    $sql = "DELETE FROM mau_sac WHERE id_ms = $id_ms";
    pdo_execute($sql);
  }

  function mot_mau_sac($id_ms) {
    $sql = "SELECT * FROM mau_sac WHERE id_ms = $id_ms";
    return pdo_query_one($sql);
  }

  function sua_mau_sac($id_ms, $ten_ms) {
    $sql = "UPDATE mau_sac SET ten_ms ='".$ten_ms."' WHERE id_ms = $id_ms";
    pdo_execute($sql);
  }

  function hien_thi_idms_by_idms($id_sp) {
    $sql = "SELECT * FROM san_pham WHERE id_sp = '$id_sp'";
    return pdo_query_one($sql)['id_ms'];
  }
?>