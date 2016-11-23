<?php

namespace com\loabten\model\data;

class AdminDao {
    //put your code here
    private $db;
    
    function __construct($db) {
        $this->db = $db;
    }
    
    function insert($admin){
        $sql = "INSERT into `mvcprojectdemon`.`admin` 
            (`username`,`password`,`fullname`,`gender`,`birthday`,`address`,`phone`,`email`)
            VALUES(?,?,?,?,?,?,?,?)";
        $command = $this->db->prepare($sql);
        
        $command ->bindValue(1,$admin->getUsername());
        $command ->bindValue(2,$admin->getPassword());
        $command ->bindValue(3,$admin->getFullname());
        $command ->bindValue(4,$admin->getGender());
        $command ->bindValue(5,$admin->getBirthday());
        $command ->bindValue(6,$admin->getAddress());
        $command ->bindValue(7,$admin->getPhone());
        $command ->bindValue(8,$admin->getEmail());
        
        $result = $command->execute();
        return $result;
    }
    
    function update($admin){
        $sql = "UPDATE `mvcprojectdemon`.`admin` SET `username=?`,`password=?`,`fullname=?`,`gender=?`,`birthday=?`,`address=?`,`phone=?`,`email=?` where `admin_id=?`";
        
        $command = $this->db->prepare($sql);
        
        $command ->bindValue(1,$admin->getUsername());
        $command ->bindValue(2,$admin->getPassword());
        $command ->bindValue(3,$admin->getFullname());
        $command ->bindValue(4,$admin->getGender());
        $command ->bindValue(5,$admin->getBirthday());
        $command ->bindValue(6,$admin->getAddress());
        $command ->bindValue(7,$admin->getPhone());
        $command ->bindValue(8,$admin->getEmail());
        $command ->bindValue(9,$admin->getAdmin_id());
        
        $result = $command->execute();
        return $result;
    }   
    
    function delete($admin_id){
        $sql = "DELETE from `mvcprojectdemo`.`admin` where `admin_id = ?`";
        $command=$this->db->prepare($sql);
        $command->bindValue(1,$admin_id);
        $result = $command->execute();
        return $result;
    }
    
    function check_login($username,$password){
        $sql = "SELECT * FROM `mvcprojectdemo`.`admin` where username=? and password=?";
        
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $username);
        $command->bindValue(2, $password);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return !empty($result);
    }
}
