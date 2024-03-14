<?php
include "view/header.php";
//ROUTING
if ($_GET == []) {
    include "view/admin.php";
} else {
    if(isset($_GET['action'])){
        $chucNang = $_GET['action'];
        switch($chucNang) {
            case 'list_danhmuc':
                include "controller/danh_muc/list.php";
                break;
            case 'them_danhmuc':
                include "controller/danh_muc/add.php";
                break;
            case 'listsanpham':
                include "controller/sanpham/list.php";
                break;
            case 'themsanpham':
                include "controller/sanpham/add.php";
                break;
        }
    }
}
include "view/footer.php";
?>