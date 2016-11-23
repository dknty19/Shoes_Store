<?php

require '../database/models/Product.php';
require '../database/models/data/ProductDao.php';
require '../database/models/Order.php';
require '../database/models/data/OrderDao.php';
require '../database/models/Information.php';
require '../database/models/data/InformationDao.php';
require '../database/models/Customer.php';
require '../database/models/data/CustomerDao.php';
require '../database/models/Category.php';
require '../database/models/data/CategoryDao.php';
require '../database/models/data/DatabaseUtils.php';

$customerDao = new com\loabten\model\data\CustomerDao(com\loabten\model\data\DatabaseUtils::connect());
$productDao = new com\loabten\model\data\ProductDao(com\loabten\model\data\DatabaseUtils::connect());
$action = "list";

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
}
if ($action == 'login'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($customerDao->checkLogin($username, $password)){
        $crow = $customerDao->findByName($username);
        session_start();
        $_SESSION['username']= $username;
//        header('Location: index.php');
    $featured_products = $productDao->findFeaturedProducts(6);
    $new_products = $productDao->findNewProducts(6);
        include './views/login/login_page.php';
    }  else {
        $msg = 'Password incorrect!!! Please check your username or password!';
        include './views/login/login_fail.php';
    }
}elseif ($action == 'logout') {
    session_start();
    unset($_SESSION['username']);
    session_destroy();
    header("location: index.php");
    exit;
}elseif (strpos($action, 'order_add') !== false) {
    $product_id = $_GET['product_id']; 
    $action = substr($action, 6);
    $type = 'order';
    
    include './controllers/OrderController.php';
}elseif (strpos($action, 'order_add_save') !== false) {
    $customer_id = $_GET['customer_id']; 
    $action = substr($action, 6);
    $type = 'order';
    
    include './controllers/OrderController.php';
}
//}elseif (strpos($action, 'category') !== false) {
//        $action = substr($action, 6);
//        $type = 'order';
//
//        include './controllers/OrderController.php';
    
 elseif (strpos($action, 'product_detail')!==FALSE) {
    $action = substr($action, 8);
    
    include './controllers/ProductController.php';
}elseif (strpos($action,'category_id=1')!==FALSE) {
    $action = substr($action,9);
    
    include './controllers/ProductController.php';
 
}elseif (strpos($action,'category_id=3')!==FALSE) {
    $action = substr($action,9);
    
    include './controllers/ProductController.php';
 
}elseif (strpos($action,'category_id=4')!==FALSE) {
    $action = substr($action,9);
    
    include './controllers/ProductController.php';
    
}elseif (strpos($action,'category_id=5')!==FALSE) {
    $action = substr($action,9);
    
    include './controllers/ProductController.php';
 
}elseif (strpos($action,'category_id=6')!==FALSE) {
    $action = substr($action,9);
    
    include './controllers/ProductController.php';
    
}elseif (strpos($action,'category_id=9')!==FALSE) {
    $action = substr($action,9);
    
    include './controllers/ProductController.php';
} 

else//($action == 'home')
{
    $featured_products = $productDao->findFeaturedProducts(6);
    $new_products = $productDao->findNewProducts(6);
    include '../Frontend/views/home.php';
}