<?php
require_once "./Models/pdo.php";
require_once "./Models/product.php";
$list_prodcut = product_get_all() ;
require_once "./Views/home.php";
