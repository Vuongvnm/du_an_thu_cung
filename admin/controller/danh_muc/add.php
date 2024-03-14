<?php
if(!isset($_POST['them_moi'])) {
    include "view/danh_muc/add.php";
} else {
    include "model/danh_muc.php";
    if(isset($_POST['ten_dm'])) {
        $ten_dm = $_POST['ten_dm'];
        them_mot_danhmuc($ten_dm);
    }
    header('Location: index.php?action=list_danhmuc');
}
