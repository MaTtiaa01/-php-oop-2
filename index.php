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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                        <strong>TITLE:</strong> <?= $product->title ?>
                                    </div>
                                    <div class="details">
                                        <div class="price">
                                            <strong>PRICE:</strong> <?= $product->price ?> €
                                        </div>
                                        <div class="category">
                                            <strong>CATEGORY:</strong>
                                            <?php if ($product->category === "dog") : ?>
                                                <i class="fa-solid fa-dog"></i>
                                            <?php else : ?>
                                                <i class="fa-solid fa-cat"></i>
                                            <?php endif; ?>
                                        </div>
                                        <div class="type">
                                            <strong>TYPE:</strong> <?= $product->type ?>
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