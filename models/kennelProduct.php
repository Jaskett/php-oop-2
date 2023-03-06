<?php
    require_once __DIR__ . '/Product.php';

    class KennelProduct extends Product {
        private $size;
        private $color;
        public static $icon = 'fa-solid fa-house';

        public function __construct($name, $description, $price, Category $category, $size, $color) {
            parent::__construct($name, $description, $price, $category);

            $this->setColor($color);
            $this->setSize($size);
        }

        public function getColor() {
            return $this->color;
        }

        public function setColor($color) {
            $this->color = $color;

            return $this;
        }

        public function getSize() {
            return $this->size;
        }

        public function setSize($size) {
            $this->size = $size;

            return $this;
        }
    }
?>