<?php
require_once __DIR__."/classes/Category.php";
require_once __DIR__."/classes/Product.php";

$Categories = [
    'dog' => $dog = new Category('Dog', 'https://cdn-icons-png.flaticon.com/512/194/194279.png'),
    'cat' => $cat = new Category('Cat', 'https://cdn-icons-png.flaticon.com/512/208/208132.png')
];

$example = new Product('Prova', $Categories['dog']);
var_dump($example);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>