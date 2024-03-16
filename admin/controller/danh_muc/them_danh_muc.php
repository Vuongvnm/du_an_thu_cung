<?php
  require_once "./model/danh_muc.php";
  require_once "view/danh_muc/them_danh_muc.php";
  if(isset($_POST['them_moi'])) {
    $ten_dm = $_POST['ten_dm'];
    them_danh_muc($ten_dm);
    echo "<script type='text/javascript'>alert('Thêm thành công!');</script>";
  }
  require_once "them_danh_muc.php";
?>