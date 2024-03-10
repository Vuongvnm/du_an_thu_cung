<?php
if(!isset($_POST['them_moi'])) {
    include "view/dan_hmuc/add.php";
} else {
    include "model/danh_muc.php";
    if(isset($_POST['ten'])) {
        $ten = $_POST['ten'];
        them_mot_danhmuc($ten);
    }
    header('Location: index.php?action=list_danhmuc');
}
