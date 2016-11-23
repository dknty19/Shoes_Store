<?php

namespace com\loabten\model;

class Product {

    private $product_id;
    private $name;
    private $quantity;
    private $unit_price;
    private $produced_date;
    private $vendor;
    private $description;
    private $status;
    private $image_url;
    private $entered_date;
    private $is_featured;
    private $category_id;

    public function __construct($product_id = 0, $name = NULL, $quantity = 0, $unit_price = 0.0, $produced_date = NULL, $vendor = NULL, $description = NULL, $status = NULL, $image_url = NULL) {
        $this->product_id = $product_id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->unit_price = $unit_price;
        $this->produced_date = $produced_date;
        $this->vendor = $vendor;
        $this->description = $description;
        $this->status = $status;
        $this->name = $name;
        $this->image_url = $image_url;
    }

    function getProduct_id() {
        return $this->product_id;
    }

    function getName() {
        return $this->name;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getUnit_price() {
        return $this->unit_price;
    }

    function getProduced_date() {
        return $this->produced_date;
    }

    function getVendor() {
        return $this->vendor;
    }

    function getDescription() {
        return $this->description;
    }

    function getStatus() {
        return $this->status;
    }

    function getImage_url() {
        return $this->image_url;
    }

    function getEntered_date() {
        return $this->entered_date;
    }

    function getIs_featured() {
        return $this->is_featured;
    }

    function getCategory_id() {
        return $this->category_id;
    }

    function setProduct_id($product_id) {
        $this->product_id = $product_id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    function setUnit_price($unit_price) {
        $this->unit_price = $unit_price;
    }

    function setProduced_date($produced_date) {
        $this->produced_date = $produced_date;
    }

    function setVendor($vendor) {
        $this->vendor = $vendor;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setImage_url($image_url) {
        $this->image_url = $image_url;
    }

    function setEntered_date($entered_date) {
        $this->entered_date = $entered_date;
    }

    function setIs_featured($is_featured) {
        $this->is_featured = $is_featured;
    }

    function setCategory_id($category_id) {
        $this->category_id = $category_id;
    }


    }
