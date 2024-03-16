<?php
  require_once "./model/danh_muc.php";
  require_once "view/danh_muc/them_danh_muc.php";
  if(isset($_GET['id_dm']) && $_GET['id_dm'] > 0) {
    $id_dm = $_GET['id_dm'];
    xoa_danh_muc($id_dm);
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>"; // Không hiển thị
  }
  header('Location: index.php?action=danh_sach_danh_muc');
?>