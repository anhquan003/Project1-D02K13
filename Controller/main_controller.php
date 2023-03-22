<?php
// Lấy giá trị Controller nào đang làm việc với Client
$controller = $_GET['controller'] ?? '';
// Điều khiển Controller làm gì
$action = $_GET['action'] ?? '';
// Gọi chức năng cho Client
if(!isset($_GET['controller'])) {
    require_once('Controller/Client/main_client_controller.php');
}else {
    switch($controller) {
        case 'admin' : require_once('Controller/Admin/main_admin_controller.php'); break;
        case 'login' : require_once('login/login_controller.php'); break;
    }
}

// switch($controller) {
//     case 'admin' :
//         if(isset($_SESSION['user']) && isset($_SESSION['pass'])) {
//             require_once('Views/index.php');
//         }else{
//             header('location: ?controller=login&action=login');
//         }
//         ; break;
//     case 'login' : require_once('login/login_controller.php'); break;
//     case 'user' : 
//         if(isset($_SESSION['user']) && isset($_SESSION['pass'])) {
//             require_once('User/user_controller.php');
//         }else{
//             header('location: ?controller=login&action=login');
//         }
//         ; break;
//     case 'product' : 
//         if(isset($_SESSION['user']) && isset($_SESSION['pass'])) {
//             require_once('Product/product_controller.php');
//         }else{
//             header('location: ?controller=login&action=login');
//         }
//         ; break;
// }

?>