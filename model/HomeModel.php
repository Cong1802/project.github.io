<?php
    trait HomeModel
    {
        public function modelHotProducts()
        {
            $conn = Connection::getInstance();
            $query = $conn->query("select * from products order by id desc limit 0,5");
            return $query->fetchAll();
        }
        public function modelCategories()
        {
            $conn = Connection::getInstance();
            $query = $conn->query("select * from categories where id in (select category_id from products)");
            return $query->fetchAll();
        }
        public function modelProducts($category_id)
        {
            $conn = Connection::getInstance();
            $query = $conn->query("select * from categories where category_id = $category_id order by id desc limit 0,5");
            return $query->fetchAll();
        }
    }
?>