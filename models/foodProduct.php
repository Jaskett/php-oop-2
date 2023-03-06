<?php
    require_once __DIR__ . '/product.php';

    class FoodProduct extends Product {
        private $ingredients;
        private $expiration;
        public static $icon = 'fa-solid fa-bowl-food';

        public function __construct($name, $description, $price, Category $category, array $ingredients, $expiration) {
            parent::__construct($name, $description, $price, $category);

            $this->setExpiration($expiration);
            $this->setIngredients($ingredients);
        }

        public function getExpiration() {
            return date('d-m-y', $this->expiration);
        }

        public function setExpiration($expiration) {
            $date = strtotime($expiration);
    
            if ($this->isExpired($date)) {
                return false;
            }
    
            $this->expiration = $date;
    
            return $this;
        }

        public function isExpired($date = null): bool  {
            $today = strtotime(date('y-m-d'));
    
            if($date) return $date < $today;
            return $this->expiration < $today;
        }

        public function getIngredients() {
            return $this->ingredients;
        }
    
        public function listIngredients() {
            return implode(', ', $this->ingredients);
        }

        public function setIngredients($ingredients) {
            $this->ingredients = $ingredients;
    
            return $this;
        }
    }
?>