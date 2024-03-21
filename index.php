<?php
  require_once "view/header.php";
  if($_GET == []) {
    require_once "view/content.php";
  } else {
    if(isset($_GET['action'])) {
      switch($_GET['action']) {
        /* BEGIN DANH MỤC */
        /* END DANH MỤC */
        /* BEGIN SẢN PHẨM */
        case 'danh_sach_san_pham':
          require_once "controller/san_pham/danh_sach_san_pham.php";
          break;  
        /* END SẢN PHẨM */

        /* BEGIN TÀI KHOẢN */
        case 'dang_ky':
          require_once "controller/tai_khoan/dang_ky.php";
          break;
        case 'dang_nhap':
          require_once "controller/tai_khoan/dang_nhap.php";
          break;
        
        /* END TÀI KHOẢN */
        default:
          require_once "view/content.php";
          break;
      }
    }
  }
  require_once "view/footer.php";
?>