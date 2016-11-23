<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace com\loabten\model;

/**
 * Description of Information
 *
 * @author Vinh
 */
class Information {
    private $admin_id;
    private $customer_id;
    private $name;
    private $gender;
    private $birthday;
    private $address;
    private $email;
    private $phone;
    
    function __construct($admin_id=0, $customer_id=0, $name=null, $gender = 0,$birthday=null, $address =null, $email=null, $phone=0) {
        $this->admin_id=$admin_id;
        $this->customer_id=$customer_id;
        $this->name=$name;
        $this->gender=$gender;
        $this->birthday=$birthday;
        $this->address=$address;
        $this->email=$email;
        $this->phone=$phone;
    }
    function getAdmin_id() {
        return $this->admin_id;
    }

    function getCustomer_id() {
        return $this->customer_id;
    }

    function getName() {
        return $this->name;
    }

    function getGender() {
        return $this->gender;
    }

    function getBirthday() {
        return $this->birthday;
    }

    function getAddress() {
        return $this->address;
    }

    function getEmail() {
        return $this->email;
    }

    function getPhone() {
        return $this->phone;
    }

    function setAdmin_id($admin_id) {
        $this->admin_id = $admin_id;
    }

    function setCustomer_id($customer_id) {
        $this->customer_id = $customer_id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function setBirthday($birthday) {
        $this->birthday = $birthday;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }


    
    
}
