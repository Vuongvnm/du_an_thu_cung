<?php
function lay_mausac(){
    $sql = "SELECT * FROM mau_sac";
    return pdo_query($sql);
}