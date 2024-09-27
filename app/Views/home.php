<?php require_once "./Views/header.php"; ?>
<?php
$html_product_home = "";
// $html_product_view = "";
foreach ($pagination as $item) {
    extract($item);
    $html_product_home .= ' <div class="product">
                                <img src="'.$img.'" alt="">
                                <h3>'.$name.'</h3>
                                <p>$'.$price.'</p>
                            </div>';
}

// foreach ($list_prodcut_view as $item) {
//     extract($item);
//     $html_product_view .= ' <div class="product">
//                                 <img src="'.$img.'" alt="">
//                                 <h3>'.$name.'</h3>
//                                 <p>$'.$price.'</p>
//                                 <p>View : '.$view.'</p>
//                             </div>';
// }
 ?>
<main>
    <div class="container">
        <h2>Sản Phẩm Mới</h2>
        <div class="product-box">
           <?=$html_product_home;?>
        </div>
    </div>
    <!-- <div class="container">
        <h2>Sản Phẩm Xem Nhiều</h2>
        <div class="product-box">
           <?=$html_product_view;?>
        </div>
    </div> -->
    <div class="pagination">
           <?php
                echo $show_pagination;
            ?>
        </div>
</main>

<?php require_once "./Views/footer.php"; ?>