<?php

namespace com\loabten\model\data;

class UserDao {
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    function insert($user) {
        $sql = "INSERT INTO `mvcprojectdemo`.`user` "
                . " (`username`,`name`,`password`,`gender`,`address`,`email`,`phone`)"
                . " VALUES(?,?,?,?,?,?,?)";
        $command = $this->db->prepare($sql);

        $command->bindValue(1, $user->getUsername());
        $command->bindValue(2, $user->getName());
        $command->bindValue(3, $user->getPassword());
        $command->bindValue(4, $user->getGender());
        $command->bindValue(5, $user->getAddress());
        $command->bindValue(6, $user->getEmail());
        $command->bindValue(7, $user->getPhone());
        $result = $command->execute();
        return $result;
    }

    function update($user) {
        $sql = "UPDATE `mvcprojectdemo`.`user` SET `username` = ?,`name` = ?,`password` = ?,`gender` = ?,"
                . " `address` = ?,`email` = ?,`phone` = ? WHERE `user_id` = ?;";
        $command = $this->db->prepare($sql);

        $command->bindValue(1, $user->getUsername());
        $command->bindValue(2, $user->getName());
        $command->bindValue(3, $user->getPassword());
        $command->bindValue(4, $user->getGender());
        $command->bindValue(5, $user->getAddress());
        $command->bindValue(6, $user->getEmail());
        $command->bindValue(7, $user->getPhone());
        $command->bindValue(8, $user->getUser_id());
        $result = $command->execute();
        return $result;
    }

    function checkLogin($username, $password) {
        $sql = "select * from user where username=? and password = ?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $username);
        $command->bindValue(2, $password);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return !empty($result);
    }

    function findById($user_id) {
        $sql = "select * from user where user_id=?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $user_id);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return $result;
    }

    function findByName($name) {
        $sql = "select * from user where name like ?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, '%' . $name . '%');
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }

    function delete($user_id) {
        $sql = "delete from user where user_id =?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, $user_id);
        $result = $command->execute();
        return $result;
    }

    function findAll() {
        $sql = "select * from user";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }

}
