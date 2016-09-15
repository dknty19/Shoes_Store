<?php
namespace com\loabten\model;

class User {

    private $user_id;
    private $username;
    private $name;
    private $password;
    private $gender;
    private $address;
    private $email;
    private $phone;

    function __construct($user_id = 0, $username = null, $name = null, $password = null, $gender = 0, $address = null, $email = null, $phone = null) {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->name = $name;
        $this->password = $password;
        $this->gender = $gender;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
    }

    function getUser_id() {
        return $this->user_id;
    }

    function getUsername() {
        return $this->username;
    }

    function getName() {
        return $this->name;
    }

    function getPassword() {
        return $this->password;
    }

    function getGender() {
        return $this->gender;
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

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setGender($gender) {
        $this->gender = $gender;
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
