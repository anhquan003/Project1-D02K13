<?php
function view_cart() {
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
}
function update_cart() {
    foreach($_POST['qtt'] as $prd_id => $qtt) {
        $_SESSION['cart'][$prd_id] = $qtt;
    }
}
function del_cart() {
    $prd_id = $_GET["id"];
    unset($_SESSION["cart"][$prd_id]);
    echo count($_SESSION["cart"]);
    if(count($_SESSION["cart"]) == 0){
        unset($_SESSION["cart"]);
    }
}
switch($action) {
    case '': $arr = view_cart(); break;
    case 'add': add_cart(); break;
    case 'update': update_cart(); break;
    case 'del': del_cart(); break;

}

?>