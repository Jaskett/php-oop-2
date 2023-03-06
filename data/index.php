<?php
    include __DIR__ . './../models/category.php';
    include __DIR__ . './../models/toyProduct.php';
    include __DIR__ . './../models/foodProduct.php';
    include __DIR__ . './../models/kennelProduct.php';

    $dog_category = new Category('Dog', 'fa-solid fa-dog');
    $cat_category = new Category('Cat', 'fa-solid fa-cat');

    $food = new FoodProduct('Scatoletta', 'Cibo in scatola per gatti', 3.49, $cat_category, ['carne', 'additivi'], '2023/11/01');
    $toy = new ToyProduct('Osso', 'Osso di gomma per cagnolini', 2.44, $dog_category, ['gomma', 'plastica'], 'rosso');
    $kennel = new KennelProduct('Cuccia', 'Cuccia da esterni', 10.56, $dog_category, '29mt', 'giallo');
?>