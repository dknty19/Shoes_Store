<?php

namespace com\loabten\model\data;

class ProductDao {

    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    function insert($product) {
        $sql = "INSERT INTO `mvcprojectdemo`.`product` (`name`,`quantity`,`unit_price`,`produced_date`,`vendor`,"
                . " `description`,`status`, `image_url`,`entered_date`,`is_featured`,`category_id`)"
                . " VALUES(:name,:quantity,:unit_price,:produced_date,:vendor,:description,"
                . ":status, :image_url, :entered_date, :is_featured,:category_id);";
        $command = $this->db->prepare($sql);

        $args = array(
            'name' => $product->getName(),
            'quantity' => $product->getQuantity(),
            'unit_price' => $product->getunit_price(),
            'produced_date' => $product->getproduced_date(),
            'vendor' => $product->getvendor(),
            'description' => $product->getdescription(),
            'status' => $product->getstatus(),
            'image_url'=>$product->getimage_url(),
            'entered_date'=>$product->getentered_date(),
            'is_featured'=>$product->getis_featured(),
            'category_id'=>$product->getcategory_id()
        );

        $result = $command->execute($args);
        return $result;
    }
    
    function update($product) {
        $sql = "UPDATE `mvcprojectdemo`.`product` "
                . " SET `product_id` = :product_id,`name` = :name,`quantity` = :quantity,"
                . " `unit_price` = :unit_price,`produced_date` = :produced_date,`vendor` = :vendor,"
                . " `description` = :description,`status` = :status, image_url = :image_url, "
                . " is_featured=:is_featured, category_id=:category_id "
                . " WHERE `product_id` = :product_id";
        $command = $this->db->prepare($sql);

        $args = array(
            'name' => $product->getName(),
            'quantity' => $product->getQuantity(),
            'unit_price' => $product->getunit_price(),
            'produced_date' => $product->getproduced_date(),
            'vendor' => $product->getvendor(),
            'description' => $product->getdescription(),
            'status' => $product->getstatus(),
            'image_url'=>$product->getimage_url(),
            'product_id'=>$product->getproduct_id(),
            'is_featured'=>$product->getis_featured(),
            'category_id'=>$product->getcategory_id()
        );

        $result = $command->execute($args);
        return $result;
    }
    function findById($product_id) {
        $sql = "select * from product where product_id=?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $product_id);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return $result;
    }

    function findByName($name) {
        $sql = "select * from product where name like ?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, '%' . $name . '%');
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }

    function delete($product_id) {
        $sql = "delete from product where product_id =?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, $product_id);
        $result = $command->execute();
        return $result;
    }
    function findAll() {
        $sql = "select * from product";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }
    
    /**
     * Find the list of featured products. It is used to display in the front-end home page.
     * @param type $count
     * @return type
     */
    function findFeaturedProducts($count) {
        $sql = "select * from product where is_featured=1 order by entered_date limit $count";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }
    function findNewProducts($count) {
        $sql = "select * from product where status = 'New' order by entered_date limit $count";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }
    
}
