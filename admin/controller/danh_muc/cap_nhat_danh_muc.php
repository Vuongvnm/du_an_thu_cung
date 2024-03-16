<?php
  require_once "./model/danh_muc.php";
  if(isset($_POST['cap_nhat'])) {
    $id_dm = $_POST['id_dm'];
    $ten_dm = $_POST['ten_dm'];
    sua_danh_muc($id_dm, $ten_dm);
    echo "<script type='text/javascript'>alert('Sửa thành công!');</script>";
  }
  header('Location: index.php?action=danh_sach_danh_muc');
?>