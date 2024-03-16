<?php
  require_once "../model/pdo.php";

  function danh_sach_danh_muc() {
    $sql = "SELECT * FROM danh_muc ORDER BY id_dm DESC";
    return pdo_query($sql);
  }

  function them_danh_muc($ten_dm) {
    $sql = "INSERT INTO danh_muc (ten_dm) VALUES ('$ten_dm')";
    pdo_execute($sql);
  }

  function xoa_danh_muc($id_dm) {
    $sql = "DELETE FROM danh_muc WHERE id_dm = $id_dm";
    pdo_execute($sql);
  }

  function mot_danh_muc($id_dm) {
    $sql = "SELECT * FROM danh_muc WHERE id_dm = $id_dm";
    return pdo_query_one($sql);
  }

  function sua_danh_muc($id_dm, $ten_dm) {
    $sql = "UPDATE danh_muc SET ten_dm ='".$ten_dm."' WHERE id_dm = $id_dm";
    pdo_execute($sql);
  }
?>