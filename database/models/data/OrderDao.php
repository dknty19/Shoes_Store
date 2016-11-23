<?php

namespace com\loabten\model\data;

class OrderDao {
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    function insert($order) {
        $sql = "INSERT INTO `mvcprojectdemo`.`order` "
                . " (`order_id`,`customer_id`,`product_id`,`date`,`quantity`,`total`,`status`)"
                . " VALUES(?,?,?,?,?,?)";
        $command = $this->db->prepare($sql);

        $command->bindValue(1, $order->getOrder_id());
        $command->bindValue(2, $order->getCustomer_id());
        $command->bindValue(3, $order->getProduct_id());
        $command->bindValue(4, $order->getDate());
        $command->bindValue(5, $order->getQuantity());
        $command->bindValue(6, $order->getTotal());
        $command->bindValue(7, $order->getStatus());

        $result = $command->execute();
        return $result;
    }

    function update($order) {
        $sql = "UPDATE `mvcprojectdemo`.`order` SET `order_id` = ?,`customer_id` = ?,`product_id` = ?,`date` = ?,`quantity` = ?,"
                . " `total` = ?,`status` = ? WHERE `order_id` = ?;";
        $command = $this->db->prepare($sql);

        $command->bindValue(1, $order->getOrder_id());
        $command->bindValue(2, $order->getCustomer_id());
        $command->bindValue(3, $order->getProduct_id());
        $command->bindValue(3, $order->getDate());
        $command->bindValue(4, $order->getQuantity());
        $command->bindValue(5, $order->getTotal());
        $command->bindValue(6, $order->getStatus());
//        $command->bindValue(8, $order->getOrder_id());
        
        $result = $command->execute();
        return $result;
    }

    function findById($order_id) {
        $sql = "select * from `mvcprojectdemo`.`order` where order_id=?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $order_id);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }

    function findByDate($date) {
        $sql = "select * from `mvcprojectdemo`.`order` where date like ?";
        $command =  $this->db->prepare($sql);
        $command->bindValue(1, '%' . $date . '%');
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }

    function delete($order_id) {
        $sql = "delete from `mvcprojectdemo`.`order` where order_id =?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, $order_id);
        $result = $command->execute();
        return $result;
    }

//    function findAll() {
//        $sql = "select * from order";
//        $command = $this->db->prepare($sql);
//        $command->execute();
//        $result = $command->fetchAll();
//        $command->closeCursor();
//        return $result;
//    }
     function findAll() {
        $sql = "select * from `mvcprojectdemo`.`order`";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }
    
    
}
