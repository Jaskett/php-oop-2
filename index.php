<?php include_once __DIR__ . '/data/index.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css' integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==' crossorigin='anonymous'/>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">E-pet</span>
        </div>
    </nav>

    <main>
        <div class="container">
            <section id="food-products">
                <h2>Cibo <i class="<?= FoodProduct::$icon ?>"></i></h2>
                <div class="card">
                    <div class="card-header">
                        <i class="<?= FoodProduct::$icon ?>"></i>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"><?= $food->getName(); ?></h5>
                        <p class="card-text"><?= $food->getDescription() ?></p>
                        <p class="card-text">Prezzo: <?= $food->getPrice() ?> €</p>
                        <p class="card-text">Ingredienti: <?= $food->listIngredients() ?></p>
                        <p class="card-text">data di scadenza: <?= $food->getExpiration() ?></p>
                    </div>
                </div>
            </section>

            <section id="toy-products" class="mt-5">
                <h2>Giocattoli <i class="<?= ToyProduct::$icon ?>"></i></h2>
                <div class="card">
                    <div class="card-header">
                        <i class="<?= ToyProduct::$icon ?>"></i>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"><?= $toy->getName(); ?></h5>
                        <p class="card-text"><?= $toy->getDescription() ?></p>
                        <p class="card-text">Prezzo: <?= $toy->getPrice() ?> €</p>
                        <p class="card-text">Materiali: <?= $toy->listMaterials() ?></p>
                        <p class="card-text">Colore: <?= $toy->getColor() ?></p>
                    </div>
                </div>
            </section>

            <section id="kennel-products" class="mt-5">
                <h2>Cuccie <i class="<?= KennelProduct::$icon ?>"></i></h2>
                <div class="card">
                    <div class="card-header">
                        <i class="<?= KennelProduct::$icon ?>"></i>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"><?= $kennel->getName(); ?></h5>
                        <p class="card-text"><?= $kennel->getDescription() ?></p>
                        <p class="card-text">Prezzo: <?= $kennel->getPrice() ?> €</p>
                        <p class="card-text">Dimensioni: <?= $kennel->getSize() ?></p>
                        <p class="card-text">Colore: <?= $kennel->getColor() ?></p>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>
</html>