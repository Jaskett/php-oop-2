<?php
    class Product {
        private $categoryAnimal;
        private $price;

        public function __construct($categoryAnimal, $price)
        {
            $this->setCategoryAnimal($categoryAnimal);
            $this->setPrice($price);
        }

        public function setCategoryAnimal($categoryAnimal) {
            $this->categoryAnimal = $categoryAnimal;
        }

        public function getCategoryAnimal() {
            return $this->categoryAnimal;
        }

        public function setPrice($price) {
            $this->price = $price;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getHtml() {
            return "<h1>Categoria Animale: " . $this->categoryAnimal . "</h1>"
                . "<h3>Prezzo: " . $this->price . "</h3>";
        }
    }
?>