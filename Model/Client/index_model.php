<?php
function index() {
    include_once('Config/connect.php');
    $sql_cate = "SELECT * FROM category ORDER BY id ASC";
    $query_cate = mysqli_query($connect, $sql_cate);
    $sql_prd_featured = "SELECT * FROM product WHERE featured = 1 ORDER BY id DESC LIMIT 6";
    $query_prd_featured = mysqli_query($connect, $sql_prd_featured);
    $sql_prd_new = "SELECT * FROM product ORDER BY id DESC LIMIT 6";
    $query_prd_new = mysqli_query($connect, $sql_prd_new);
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['category'] = $query_cate;
    $arr['featured'] = $query_prd_featured;
    $arr['new'] = $query_prd_new;
    return $arr;
}
switch($redirect) {
    case '': $arr = index(); break;
}
?>