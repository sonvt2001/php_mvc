<?php
require_once "./Models/pdo.php";
require_once "./Models/product.php";

$soluong_sp = 4;

$list_product = get_all_product();

$pagination = pagination( $soluong_sp) ;

$show_pagination = show_index_page($soluong_sp, $list_product );


// $list_prodcut_home = product_get_all(0, 9, $page) ;
// $list_prodcut_view = product_get_all(1, 4, $page) ;

require_once "./Views/home.php";
