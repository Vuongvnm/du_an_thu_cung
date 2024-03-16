<?php
  require_once "view/header.php";
  if($_GET == []) {
    require_once "view/content.php";
  } else {
    if(isset($_GET['action'])) {
      switch($_GET['action']) {

        /* BEGIN DANH MỤC */
        case 'danh_sach_danh_muc':
          require_once "controller/danh_muc/danh_sach_danh_muc.php";
          break;

        case 'chi_tiet_danh_muc':
          require_once "controller/danh_muc/chi_tiet_danh_muc.php";
          break;

        case 'them_danh_muc':
          require_once "controller/danh_muc/them_danh_muc.php";
          break;

        case 'xoa_dm':
          require_once "controller/danh_muc/xoa_danh_muc.php";
          break;

        case 'sua_dm':
          require_once "controller/danh_muc/sua_danh_muc.php";
          break;

        case 'cap_nhat_danh_muc':
          require_once "controller/danh_muc/cap_nhat_danh_muc.php";
          break;  
        
        /* END DANH MỤC */  

        /* START SẢN PHẨM */

        case 'danh_sach_san_pham':
          require_once "controller/san_pham/danh_sach_san_pham.php";
          break;

        case 'chi_tiet_san_pham':
          require_once "controller/san_pham/chi_tiet_san_pham.php";
          break;

        case 'them_san_pham':
          require_once "controller/san_pham/them_san_pham.php";
          break;

        /* END SẢN PHẨM */
        default:
          require_once "view/content.php"; 
          break;  
      }
    }
  }
  require_once "view/footer.php";
?>