<?php
function index() {
    $arr = array();
    $temp = array();
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY id ASC");
    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $prd_id) {
            $temp[] = $prd_id;
        }
    }
    $str_id = implode(', ', $temp);
    $sql = "SELECT * FROM product WHERE id IN ($str_id)";
    $query = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    $arr['product'] = $query;
    $arr['category'] = $cate;
    return $arr;
}
function add_cart() {
    $prd_id = $_GET['id'];
    if(isset($_SESSION['cart'][$prd_id])) {
        $_SESSION['cart'][$prd_id]++;
    }else {
        $_SESSION['cart'][$prd_id] = 1;
    }
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY id ASC");
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['category'] = $cate;
    return $arr;
}
switch($action) {
    case '': $arr = index(); break;
    case 'add': $arr = add_cart(); break;

}

?>