<?php
    require_once __DIR__ . '/category.php';

    class Product {
        protected $id;
        protected $name;
        protected $description;
        protected $price;
        protected $category;

        public function __construct($name, $description, $price, Category $category) {
            $this->setId();
            $this->setName($name);
            $this->setDescription($description);
            $this->setPrice($price);
            $this->setCategory($category);
        }

        public function getId() {
            return $this->id;
        }

        public function setId() {
            $this->id = uniqid();

            return $this;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;

            return $this;
        }

        public function getDescription() {
            return $this->description;
        }

        public function setDescription($description) {
            $this->description = $description;

            return $this;
        }

        public function getPrice() {
            return $this->price;
        }

        public function setPrice($price) {
            $this->price = $price;
    
            return $this;
        }

        public function getCategory() {
            return $this->category;
        }

        public function setCategory($category) {
            if($category instanceof Category === false) return false;
            $this->category = $category;
    
            return $this;
        }
    }
?>