<?php
require_once __DIR__."/classes/Category.php";
require_once __DIR__."/classes/Product.php";

$Categories = [
    'dog' => $dog = new Category('Dog', 'https://cdn-icons-png.flaticon.com/512/194/194279.png'),
    'cat' => $cat = new Category('Cat', 'https://cdn-icons-png.flaticon.com/512/208/208132.png')
];

$Snacks = [
    new Food('Snack 1', $Categories['dog'], 49, 'beef', 'large'),
    new Food('Snack 2', $Categories['dog'], 39, 'chicken', 'medium'),
    new Food('Snack 3', $Categories['cat'], 34, 'chicken', 'small')
];

$Beds = [
    new Bed('Bed 1', $Categories['dog'], 79, 'white', 'Polyester Fiber', ' 18 in L x 20 in W'),
    new Bed('Bed 2', $Categories['cat'], 69, 'pink', 'Polyester Fiber', '  20 in L x 17 in W')
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container py-5 d-flex justify-content-around flex-wrap">    
        <div class="card mb-3 position-relative" style="width: 18rem;">
        <img class="top-left" src="<?php echo $Snacks[0]->category->img?>" alt="">
            <img class="w-50 pt-4 mx-auto" src="https://s7d2.scene7.com/is/image/PetSmart/5266170?$CLEARjpg$" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><?php echo $Snacks[0]->name ?></h5>
                <ul class="text-start">
                    <li>Price: <?php echo $Snacks[0]->price ?>$ </li>
                    <li>Ingredient: <?php echo ucfirst($Snacks[0]->ingredient) ?></li>
                    <li>Size: <?php echo ucfirst($Snacks[0]->size) ?></li>
                </ul>
            </div>
        </div>

        <div class="card mb-3 position-relative" style="width: 18rem;">
            <img class="top-left" src="<?php echo $Snacks[1]->category->img?>" alt="">
            <img class="w-50 pt-4 mx-auto" src="https://s7d2.scene7.com/is/image/PetSmart/5279933?$CLEARjpg$" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><?php echo $Snacks[1]->name ?></h5>
                <ul class="text-start">
                    <li>Price: <?php echo $Snacks[1]->price ?>$ </li>
                    <li>Ingredient: <?php echo ucfirst($Snacks[1]->ingredient) ?></li>
                    <li>Size: <?php echo ucfirst($Snacks[1]->size) ?></li>
                </ul>
            </div>
        </div>

        <div class="card mb-3 position-relative" style="width: 18rem;">
            <img class="top-left" src="<?php echo $Snacks[2]->category->img?>" alt="">
            <img class="w-50 pt-4 mx-auto" src="https://s7d2.scene7.com/is/image/PetSmart/5154821?$CLEARjpg$" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><?php echo $Snacks[2]->name ?></h5>
                <ul class="text-start">
                    <li>Price: <?php echo $Snacks[2]->price ?>$ </li>
                    <li>Ingredient: <?php echo ucfirst($Snacks[2]->ingredient) ?></li>
                    <li>Size: <?php echo ucfirst($Snacks[2]->size) ?></li>
                </ul>
            </div>
        </div>

        <div class="card mb-3 position-relative" style="width: 18rem;">
            <img class="top-left" src="<?php echo $Beds[0]->category->img?>" alt="">
            <img class="w-50 pt-4 mx-auto" src="https://s7d2.scene7.com/is/image/PetSmart/5334527?$CLEARjpg$" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><?php echo $Beds[0]->name ?></h5>
                <ul class="text-start">
                    <li>Price: <?php echo $Beds[0]->price ?>$ </li>
                    <li>Color: <?php echo ucfirst($Beds[0]->color) ?></li>
                    <li>Material: <?php echo ucfirst($Beds[0]->material) ?></li>
                    <li>Dimensions: <?php echo ucfirst($Beds[0]->dimensions) ?></li>
                </ul>
            </div>
        </div>

        <div class="card mb-3 position-relative" style="width: 18rem;">
            <img class="top-left" src="<?php echo $Beds[1]->category->img?>" alt="">
            <img class="w-50 pt-4 mx-auto" src="https://s7d2.scene7.com/is/image/PetSmart/5321111?$CLEARjpg$" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><?php echo $Beds[1]->name ?></h5>
                <ul class="text-start">
                    <li>Price: <?php echo $Beds[1]->price ?>$ </li>
                    <li>Color: <?php echo ucfirst($Beds[1]->color) ?></li>
                    <li>Material: <?php echo ucfirst($Beds[1]->material) ?></li>
                    <li>Dimensions: <?php echo ucfirst($Beds[1]->dimensions) ?></li>
                </ul>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>