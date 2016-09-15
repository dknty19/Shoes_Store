<?php

require '../database/models/data/ProductDao.php';
require '../database/models/data/DatabaseUtils.php';

$action = "home";

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
}

$productDao = new com\loabten\model\data\ProductDao(\com\loabten\model\data\DatabaseUtils::connect());
if ($action == 'home'){
    $featured_products = $productDao->findFeaturedProducts(6);
    $new_products = $productDao->findNewProducts(6);
    include '../Frontend/views/home.php';
}
