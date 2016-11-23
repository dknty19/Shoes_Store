<?php
namespace com\loabten\model;

class Customer {

    private $customer_id;
    private $username;
    private $password;
    
    function __construct($customer_id = 0, $username = null, $password = null) {
        $this->customer_id = $customer_id;
        $this->username = $username;
        $this->password = $password;
    }

    function getCustomer_id() {
        return $this->customer_id;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function setCustomer_id($customer_id) {
        $this->customer_id = $customer_id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }
}
