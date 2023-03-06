<?php
    require_once __DIR__ . '/product.php';

    class ToyProduct extends Product {
        private $color;
        private $materials;
        public static $icon = 'fa-solid fa-bone';

        public function __construct($name, $description, $price, Category $category, array $materials, $color) {
            parent::__construct($name, $description, $price, $category);

            $this->setColor($color);
            $this->setMaterials($materials);
        }

        public function getColor() {
            return $this->color;
        }

        public function setColor($color) {
            $this->color = $color;
    
            return $this;
        }

        public function getMaterials() {
            return $this->materials;
        }

        public function listMaterials() {
            return implode(', ', $this->materials);
        }

        public function setMaterials($materials) {
            $this->materials = $materials;
    
            return $this;
        }
    }
?>