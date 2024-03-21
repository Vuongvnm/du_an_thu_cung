<?php
  require_once "./model/mau_sac.php";
  require_once "view/mau_sac/them_mau_sac.php";
  if(isset($_POST['them_moi'])) {
    $ten_ms = $_POST['ten_ms'];
    them_mau_sac($ten_ms);
    echo "<script type='text/javascript'>alert('Thêm thành công!');</script>";
  }
?>