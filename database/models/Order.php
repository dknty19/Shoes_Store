<?php
namespace com\loabten\model;

class Order {

    private $order_id;
    private $customer_id;
    private $product_id;
    private $date;
    private $quantity;
    private $total;
    private $status;

    function __construct($order_id = 0, $customer_id = 0, $product_id = 0, $date = null, $quantity = 0, $total = 0, $status = null) {
        $this->order_id = $order_id;
        $this->customer_id = $customer_id;
        $this->product_id = $product_id;
        $this->date = $date;
        $this->quantity = $quantity;
        $this->total = $total;
        $this->status = $status;
    }

    function getOrder_id() {
        return $this->order_id;
    }

    function getCustomer_id() {
        return $this->customer_id;
    }

    function getProduct_id() {
        return $this->product_id;
    }

    function getDate() {
        return $this->date;
    }
    
    function getQuantity(){
        return $this->quantity;
    }
                
    function getTotal() {
        return $this->total;
    }

    function getStatus() {
        return $this->status;
    }

    function setOrder_id($order_id) {
        $this->order_id = $order_id;
    }

    function setCustomer_id($customer_id) {
        $this->customer_id = $customer_id;
    }

    function setProduct_id($product_id) {
        $this->product_id = $product_id;
    }

    function setDate($date) {
        $this->date = $date;
    }
    
    function setQuantity($quantity){
        $this->quantity=$quantity;
    }
    
    function setTotal($total) {
        $this->total = $total;
    }

    function setStatus($status) {
        $this->status = $status;
    }
}
