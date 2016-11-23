<?php
try {
    $connection = com\loabten\model\data\DatabaseUtils::connect();
    $productDao = new com\loabten\model\data\ProductDao($connection);
    $categoryDao = new com\loabten\model\data\CategoryDao($connection);
    $customerDao = new com\loabten\model\data\CustomerDao($connection);
    if ($action == 'detail') {
        $product_id = $_GET['product_id'];
        $row =  $productDao->findById($product_id);
        
        include './views/products/detail.php';
    }elseif ($action == 'detail_login') {
        $username = $_POST['username'];
        $crow = $customerDao->findByName($username);
        $product_id = $_GET['product_id'];
        $row =  $productDao->findById($product_id);
        
        include './views/login/detail_login.php';
    }
    elseif ($action == 'id=1') {
        $category_id = 1;
        $crow = $categoryDao->findById($category_id);
        $result = $productDao->findByIdCategory($category_id);
        
        include './views/chuck.php';
    }
    elseif ($action == 'id=3') {
        $category_id = 3;
        $crow = $categoryDao->findById($category_id);
        $result = $productDao->findByIdCategory($category_id);
        
        include './views/chuck.php';
    }
    elseif ($action == 'id=4') {
        $category_id = 4;
        $crow = $categoryDao->findById($category_id);
        $result = $productDao->findByIdCategory($category_id);
        
        include './views/chuck.php';
    }
    elseif ($action == 'id=5') {
        $category_id = 5;
        $crow = $categoryDao->findById($category_id);
        $result = $productDao->findByIdCategory($category_id);
        
        include './views/chuck.php';
    }
    elseif ($action == 'id=6') {
        $category_id = 6;
        $crow = $categoryDao->findById($category_id);
        $result = $productDao->findByIdCategory($category_id);
        
        include './views/chuck.php';
    }
    elseif ($action == 'id=9') {
        $category_id = 9;
        $crow = $categoryDao->findById($category_id);
        $result = $productDao->findByIdCategory($category_id);
        
        include './views/chuck.php';
    }
} catch (Exception $exc) {
   $error = $exc->getMessage();
    include './views/error/error.php';
}