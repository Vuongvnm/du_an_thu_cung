<?php
  require_once "./model/san_pham.php";
  if(isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
    $id_sp = $_GET['id_sp'];
    $mot_san_pham = mot_san_pham($id_sp);
  }
  require_once "view/san_pham/chi_tiet_san_pham.php";
?>