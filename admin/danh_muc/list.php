<?php
include "model/danh_muc.php";
$listDanhMuc = lay_danhmuc_tudb();
include "view/danh_muc/list.php";