<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace com\loabten\model\data;

/**
 * Description of InformationDao
 *
 * @author Vinh
 */
class InformationDao {
    //put your code here
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    function insert($information) {
        $sql = "INSERT INTO `mvcprojectdemo`.`information` "
                . " (`name`,`gender`,`birthday`,`address`,`phone`,`email`)"
                . " VALUES(?,?,?,?,?,?)";
        $command = $this->db->prepare($sql);

        $command->bindValue(1, $information->getName());
        $command->bindValue(2, $information->getGender());
        $command->bindValue(3, $information->getBirthday());
        $command->bindValue(4, $information->getAddress());
        $command->bindValue(5, $information->getPhone());
        $command->bindValue(6, $information->getEmail());
        
        $result1 = $command->execute();
        return $result1;
    }

    function update($information) {
        $sql = "UPDATE `mvcprojectdemo`.`information` SET `name` = ?, `gender` = ?,`birthday`=?, `address`=?, `email`=?, `phone`=? WHERE `customer_id` = ?,`admin_id`=?";
        $command = $this->db->prepare($sql);

        $command->bindValue(1, $information->getName());
        $command->bindValue(2, $information->getGender());
        $command->bindValue(3, $information->getBirthday());
        $command->bindValue(4, $information->getAddress());
        $command->bindValue(5, $information->getEmail());
        $command->bindValue(6, $information->getPhone());

        $result = $command->execute();
        return $result;
    }

    function findById($customer_id) {
        $sql = "select * from `mvcprojectdemo`.`information` where customer_id=?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $customer_id);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return $result;
    }

    function findByName($name) {
        $sql = "select * from `mvcprojectdemo`.`information` where name like ?";
        $command =  $this->db->prepare($sql);
        $command->bindValue(1, '%' . $name . '%');
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return $result;
    }

    function delete($id) {
        $sql = "delete from information where id =?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, id);
        $result = $command->execute();
        return $result;
    }

    function findAll() {
        $sql = "select * from `mvcprojectdemo`.`information`";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return $result;
    }
}
