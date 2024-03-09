<?php
//ROUTING
if ($_GET == []) {
    include "index.html";
} else {
    if(isset($_GET['chucnang'])){
        $chucNang = $_GET['chucnang'];
        switch($chucNang) {
            case 'sanpham':
                include "danhsach.html";
                break;
            case 'bieudo':
                include "bieudo.html";
                break;
        }
    }
}
?>
