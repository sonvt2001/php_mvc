<?php 

function get_all_product() {
    $sql = " SELECT * FROM product WHERE 1 ORDER BY id DESC";
    return get_all($sql);
}


function pagination( $soluong_sp){

    // kiểm tra xem đang ở trang nào? tạo limit
    $page = isset($_GET['page']) ? ($_GET['page'] == 0 ? 1 : $_GET['page']) : 1 ;
    $start = ($page - 1 ) * $soluong_sp;

    $sql = " SELECT * FROM product WHERE 1 ";
    $sql .= " ORDER BY id ASC ";
    $sql .= " LIMIT ".$start .", ".$soluong_sp;

    return get_all($sql);
}

function show_index_page($soluong_sp,$list_prodcut) {
    $total_product = count( $list_prodcut );
    $index_page = ceil($total_product / $soluong_sp);

    $html_index_page = "";
    for ($i=1; $i <= $index_page; $i++) { 
        $html_index_page .= ' <a href="_index.php?page='.$i.'">'.$i.'</a>';
    }
    return $html_index_page;
}




// function product_get_all($view, $limit, $page){

//     $sql = "SELECT * FROM product WHERE 1";
//     if( $view > 0 ) {
//         $sql .= " ORDER BY view DESC ";
//         $sql .= " LIMIT ".$limit;
//     }else{
//         $sql .= " ORDER BY price DESC ";
//         $sql .= " LIMIT ".$limit;
//     }
//     return get_all($sql);
// }
