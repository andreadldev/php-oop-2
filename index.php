<?php
require_once __DIR__."/classes/Category.php";
require_once __DIR__."/classes/Product.php";

$Categories = [
    'dog' => $dog = new Category('Dog', 'https://cdn-icons-png.flaticon.com/512/194/194279.png'),
    'cat' => $cat = new Category('Cat', 'https://cdn-icons-png.flaticon.com/512/208/208132.png')
];

$Snacks = [
    new Food('Snack 1', $Categories['dog'], 49, 'https://s7d2.scene7.com/is/image/PetSmart/5266170?$CLEARjpg$', 'beef', 'large'),
    new Food('Snack 2', $Categories['dog'], 39, 'https://s7d2.scene7.com/is/image/PetSmart/5279933?$CLEARjpg$', 'chicken', 'medium'),
    new Food('Snack 3', $Categories['cat'], 34, 'https://s7d2.scene7.com/is/image/PetSmart/5154821?$CLEARjpg$', 'chicken', 'small')
];

$Beds = [
    new Bed('Bed 1', $Categories['dog'], 79, 'https://s7d2.scene7.com/is/image/PetSmart/5334527?$CLEARjpg$', 'white', 'Polyester Fiber', ' 18 in L x 20 in W'),
    new Bed('Bed 2', $Categories['cat'], 69, 'https://s7d2.scene7.com/is/image/PetSmart/5321111?$CLEARjpg$', 'pink', 'Polyester Fiber', '  20 in L x 17 in W')
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
        <?php for ($x = 0; $x < count($Snacks); $x++) { ?>
            <div class="card mb-3 position-relative" style="width: 18rem;">
                <img class="top-left" src="<?php echo $Snacks[$x]->category->img?>" alt="">
                <img class="w-50 pt-4 mx-auto" src="<?php echo $Snacks[$x]->img?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $Snacks[$x]->name ?></h5>
                    <ul class="text-start">
                        <li>Price: <?php echo $Snacks[$x]->price ?>$ </li>
                        <li>Ingredient: <?php echo ucfirst($Snacks[$x]->ingredient) ?></li>
                        <li>Size: <?php echo ucfirst($Snacks[$x]->size) ?></li>
                    </ul>
                </div>
            </div>
        <?php } ?>

        <?php for ($x = 0; $x < count($Beds); $x++) { ?>
            <div class="card mb-3 position-relative" style="width: 18rem;">
                <img class="top-left" src="<?php echo $Beds[$x]->category->img?>" alt="">
                <img class="w-50 pt-4 mx-auto" src="<?php echo $Beds[$x]->img?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $Beds[$x]->name ?></h5>
                    <ul class="text-start">
                        <li>Price: <?php echo $Beds[$x]->price ?>$ </li>
                        <li>Color: <?php echo ucfirst($Beds[$x]->color) ?></li>
                        <li>Material: <?php echo ucfirst($Beds[$x]->material) ?></li>
                        <li>Dimensions: <?php echo ucfirst($Beds[$x]->dimensions) ?></li>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>