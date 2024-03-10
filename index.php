<?php
//ROUTING
if ($_GET == []) {
    include "index.html";
} else {
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        switch($action) {
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
