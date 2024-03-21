<?php
  require_once "./model/mau_sac.php";
  if(isset($_GET['id_ms']) && $_GET['id_ms'] > 0) {
    $id_ms = $_GET['id_ms'];
    xoa_mau_sac($id_ms);
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>"; // Không hiển thị
  }
  header('Location: index.php?action=danh_sach_mau_sac');
?>