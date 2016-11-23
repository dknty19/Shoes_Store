<?php
namespace com\loabten\model;

class Admin {

    private $username;
    private $password;
    private $admin_id;
    private $fullname;
    private $gender;
    private $birthday;
    private $address;
    private $phone;
    private $email;

    function __construct($username = null, $password = null, $admin_id = 0, $fullname = null, $gender = 0, $birthday = null, $address = null, $phone = null, $email = null) {
        $this->username = $username;
        $this->password = $password;
        $this->user_id = $admin_id;
        $this->name = $fullname;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
    }
    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getAdmin_id() {
        return $this->admin_id;
    }

    function getFullname() {
        return $this->fullname;
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

    function getPhone() {
        return $this->phone;
    }

    function getEmail() {
        return $this->email;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setAdmin_id($admin_id) {
        $this->admin_id = $admin_id;
    }

    function setFullname($fullname) {
        $this->fullname = $fullname;
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

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setEmail($email) {
        $this->email = $email;
    }
}