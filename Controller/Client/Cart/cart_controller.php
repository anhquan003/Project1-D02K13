<?php
switch($action) {
    case '' :
        require_once('Model/Client/Cart/cart_model.php');
        require_once('Views/Client/cart.php');
        break;
    case 'add' :
        require_once('Model/Client/index_model.php');
        require_once('Model/Client/Cart/cart_model.php');
        header('Location:index.php?redirect=cart');
        break;
}
?>