<?php
require_once __DIR__ . '/classes/Category.php';
require_once __DIR__ . '/classes/Products.php';
require_once __DIR__ . '/classes/Games.php';
require_once __DIR__ . '/classes/Food.php';

$cani = new Category("Cani", "https://www.repstatic.it/content/contenthub/img/2024/10/07/124609127-f7162860-76a0-4047-8d82-6b8ac4a2ce10.jpg" );
//var_dump($cani);
$gatti = new Category("Gatti", "https://www.viridea.it/wp-content/uploads/2019/06/consiglio-cosa-fare-casa-arriva-gatto.jpg" );
//var_dump($gatti);

/*$games = new Games("Osso per cani", 7 , $cani, 0.70, "gommapiuma");

$games = new Games("Tiragraffi", 30 , $gatti, 6, "sisal");
//var_dump($games); */

$products= [];
$products [] = new Games("Osso per cani", 7 , $cani, 0.70, "gommapiuma");
$products [] = new Games("Tiragraffi", 30 , $gatti, 6, "sisal");
$products [] = new Food("Crocchette", 1.50,$cani, 1,"pollo");
$products [] = new Food("Scatoletta", 2.0,$gatti, 0.70,"salmone");








?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP-OOP-2</title>
</head>

<body>
    <div class="container text-center">
        <div class="row align-items-start justify-content-center">
            <h2>Prodotti:</h2>

            <?php foreach ($products as $product): ?>
            <div class="col-3 card ">

                <div class="card-body">

                    <h3>Nome: <?php echo $product->title; ?> </h3>
                    <h3>Prezzo: <?php echo $product->price; ?>€ </h3>
                    <h3>Peso: <?php echo $product->weight; ?> kg</h3>

                </div>



            </div>


            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>