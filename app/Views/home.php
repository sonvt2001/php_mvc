<?php require_once "./Views/header.php"; ?>
<?php
$html_product_home = "";
foreach ($list_prodcut as $item) {
    extract($item);
    $html_product_home .= ' <div class="product">
                                <img src="'.$img.'" alt="">
                                <h3>'.$name.'</h3>
                                <p>$'.$price.'</p>
                            </div>';
}
 ?>
<main>
    <div class="container">
        <h2>Sản Phẩm Mới</h2>
        <div class="product-box">
           <?=$html_product_home;?>
        </div>
    </div>
</main>

<?php require_once "./Views/footer.php"; ?>