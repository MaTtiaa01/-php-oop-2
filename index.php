<?php


require_once __DIR__ . '/Models/Product.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Pet E-commerce </title>
</head>

<body>
    <?php if (count($products) > 0) : ?>
        <section class="products">
            <div class="container">
                <h1 class="text-center my-5">Pet Products</h1>
                <div class="row g-5">
                    <?php foreach ($products as $product) : ?>
                        <div class="col">
                            <div class="card p-3">
                                <div class="card-head text-center">
                                    <img src="<?= $product->img ?>" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="title">
                                        <?= $product->title ?>
                                    </div>
                                    <div class="details">
                                        <div class="price">
                                            <?= $product->price ?> €
                                        </div>
                                        <div class="category">
                                            <?= $product->category ?>
                                        </div>
                                        <div class="type">
                                            <?= $product->type ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

</body>

</html>