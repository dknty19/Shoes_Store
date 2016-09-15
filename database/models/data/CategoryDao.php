<?php

namespace com\loabten\model\data;

class CategoryDao{
    private $db;

    function __construct($db) {
        $this->db = $db;
    }
    /**
     * Insert new category
     * @param type $category
     * @return type
     */
    function insert($category) {
        $sql = "INSERT INTO `mvcprojectdemo`.`category` (`category_id`, `name`) VALUES (:category_id, :name)";
        $command = $this->db->prepare($sql);

        $args = array(
            'category_id'=>$category->getcategory_id(),
            'name' => $category->getName()
        );

        $result = $command->execute($args);
        return $result;
    }
    function update($category) {
        $sql = "UPDATE `mvcprojectdemo`.`category` SET `name` = :name WHERE `category_id` = :category_id";
        $command = $this->db->prepare($sql);

        $args = array(
            'category_id'=>$category->getcategory_id(),
            'name' => $category->getName()
        );

        $result = $command->execute($args);
        return $result;
    }
    function findById($category_id) {
        $sql = "select * from category where category_id=?";
        $command = $command = $this->db->prepare($sql);
        $command->bindValue(1, $category_id);
        $command->execute();
        $result = $command->fetch();
        $command->closeCursor();
        return $result;
    }

    function findByName($name) {
        $sql = "select * from category where name like ?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, '%' . $name . '%');
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }

    function delete($category_id) {
        $sql = "delete from category where category_id =?";
        $command = $this->db->prepare($sql);
        $command->bindValue(1, $category_id);
        $result = $command->execute();
        return $result;
    }
    function findAll() {
        $sql = "select * from category";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }
    function findSortedAll($sorted_fields) {
        $sql = "select * from category order by $sorted_fields";
        $command = $this->db->prepare($sql);
        $command->execute();
        $result = $command->fetchAll();
        $command->closeCursor();
        return $result;
    }
}