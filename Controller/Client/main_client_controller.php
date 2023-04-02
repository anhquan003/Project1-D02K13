<?php
$redirect = $_GET['redirect'] ?? '';
$action = $_GET['action'] ?? '';

if($redirect == '') {
    // Gọi trang chủ
    require_once('Model/Client/index_model.php');
    require_once('Views/Client/index.php');
}else {
    switch($redirect) {
        // Gọi các trang con
        case 'product': 
            require_once('Model/Client/Product/product_model.php');
            require_once('Views/Client/index.php');
            require_once('Views/Client/product.php');
            ; break;
        case 'cart': 
            // require_once('Model/Client/Cart/cart_model.php');
            
            // require_once('Views/Client/index.php');
            require_once('Controller/Client/Cart/cart_controller.php');
            require_once('Views/Client/cart.php');
            ; break;
    }
}


?>