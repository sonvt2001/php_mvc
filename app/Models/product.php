<?php 
function product_get_all(){
    $sql = "SELECT * FROM product ORDER BY id DESC";
    return get_all($sql);
}