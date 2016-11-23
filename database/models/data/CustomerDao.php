<?php

namespace com\loabten\model\data;


class CustomerDao {
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    function insert($customer) {
        $sql = "INSERT INTO `mvcprojectdemo`.`customer` "
                . " (`username`,`password`)"
                . " VALUES(?,?)";
        $command = $this->db->prepare($sql);

        $command->bindValue(1, $customer->getUsername());
        $command->bindValue(2, $customer->getPassword());
        
        $result = $command->execute();
        return $result;
    }

    function update($customer) {
        $sql = "UPDATE `mvcprojectdemo`.`customer` SET `username` = ?, `password` = ? WHERE `customer_id` = ?";
        $command = $this->db->prepare($sql);

        $command->bindValue(1, $customer->getUsername());
        $command->bindValue(2, $customer->getPassword());

        $result = $command->execute();
        return $result;
    }

    function checkLogin($username, $password) {
        $sql = "select * from `mvcprojectdemo`.`customer` where username=? and password = ?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $username);
        $command->bindValue(2, $password);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return !empty($result);
    }

    function findById($customer_id) {
        $sql = "select * from `mvcprojectdemo`.`customer`,`mvcprọectdemo`.`information` where customer_id=name?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $customer_id);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }

    function findByName($username) {
        $sql = "select * from `mvcprojectdemo`.`customer` where username like ?";
        $command =  $this->db->prepare($sql);
        $command->bindValue(1, '%' . $username . '%');
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return $result;
    }

    function delete($customer_id) {
        $sql = "delete from customer where customer_id =?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, $customer_id);
        $result = $command->execute();
        return $result;
    }

    function findAll() {
        $sql = "select * from `mvcprojectdemo`.`customer`";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }
    
//    function findID(){
//        $sql = "select `admin_id` from `mvcprojectdemon`.`customer`";
//        $command = $this->db->prepare($sql);
//        $command->execute();
//        $result = $command->fetchAll();
//        $command->closeCursor();
//        return $result;
//    }
    
}
