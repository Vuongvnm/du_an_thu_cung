<?php
include "model/pdo.php";
function lay_danhmuc_tudb() {
    $sql = "SELECT * FROM danh_muc";
    return pdo_query($sql);
}

function them_mot_danhmuc($ten_dm) {
    $sql = "INSERT INTO danh_muc (ten_dm) VALUES ('$ten_dm')";
    pdo_execute($sql);
}
?>