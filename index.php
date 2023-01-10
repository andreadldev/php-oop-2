<?php
require_once __DIR__."/classes/Category.php";
require_once __DIR__."/classes/Product.php";

$Categories = [
    new Category("Dog", "https://cdn-icons-png.flaticon.com/512/194/194279.png"),
    new Category("Cat", "https://cdn-icons-png.flaticon.com/512/208/208132.png")
];

$example = new Product("Prova", $Categories[0]);
var_dump($example);
?>