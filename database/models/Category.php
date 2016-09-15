<?php

namespace com\loabten\model;

class Category{
    private $category_id;
    private $name;
    
    function __construct($category_id=0, $name=null) {
        $this->category_id = $category_id;
        $this->name = $name;
    }
    function getCategory_id() {
        return $this->category_id;
    }

    function getName() {
        return $this->name;
    }

    function setCategory_id($category_id) {
        $this->category_id = $category_id;
    }

    function setName($name) {
        $this->name = $name;
    }


}