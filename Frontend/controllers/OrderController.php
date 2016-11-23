<?php

try {
    $connection = com\loabten\model\data\DatabaseUtils::connect();
    $orderDao = new com\loabten\model\data\OrderDao($connection);
    $productDao = new com\loabten\model\data\ProductDao($connection);
    $customerDao = new com\loabten\model\data\CustomerDao($connection);
    if ($action == 'add') {
        
        $username = $_GET['username'];
        $row = $customerDao->findByName($username);
        $product_id = $_GET['product_id'];
        $result= $productDao ->findById1($product_id);
        
        include './views/orders/cart.php';
    } elseif ($action == 'add_save') {
        
        $product_id = $_GET['product_id'];
        $customer_id = $_GET['customer_id'];
        $quantity = $_GET['quantity'];
        $date = $_GET['date'];
        $total = $_GET['total'];
        $status = $_GET['status'];
        
        $order = new com\loabten\model\Order();
        
        $order->setCustomer_id($customer_id);
        $order->setProduct_id($product_id);
        $order->setDate($date);
        $order->setQuantity($quantity);
        $order->setTotal($total);
        $order->setStatus($status);
        
        $result = $orderDao->insert($order);

//        $msg = "$result order has been inserted";
        include './views/home.php';
    } elseif ($action == 'delete') {
        $order_id = $_GET['order_id'];
        $result = $orderDao->delete($order_id);

        header("Location: index.php");
    } elseif ($action == 'edit') {
        $order_id = $_GET['order_id'];
        $row = $orderDao->findById($order_id);

        include './views/orders/edit.php';
    } elseif ($action == 'edit_save') {
        $order_id = $_GET['order_id'];
        $customer_id = $_GET['customer_id'];
        $product_id = $_GET['product_id'];
        $date = $_GET['date'];
        $quantity = $_GET['quantity'];
        $total = $_GET['total'];
        $status = $_GET['status'];

        $order = new com\loabten\model\Order();
        $order->setOrder_id($order_id);
        $order->setCustomer_id($customer_id);
        $order->setProduct_id($product_id);
        $order->setDate($date);
        $order->setQuantity($quantity);
        $order->setTotal($total);
        $order->setStatus($status);

        $orderDao->update($order);
        $msg = 'The order has been updated!';
        $result = $orderDao->findAll();
        include './views/orders/list.php';
        //header("Location: index.php");
        
    } elseif ($action == 'find') {
        $result = NULL;
        if (isset($_POST['order_id'])) {
            $name = $_POST['name'];
            $result = $orderDao->findByName($name);
            if (empty($result)) {
                $msg = "There aren't any orders";
            }
        } else {
            $result = $orderDao->findAll();
        }
        include './views/orders/find.php';
    } else  { //($action == 'list'){
        $result = $orderDao->findAll();
        
        include './views/orders/list.php';
    }
} catch (Exception $exc) {
    $error = $exc->getMessage();
}