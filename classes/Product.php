<?php
require_once __DIR__."/../classes/traits.php";

class Product {
    public $name;
    public $category;
    public $price;
    use Image;
    
    public function __construct(string $name, $category, int $price, string $img) {
        $this->name=$name;
        $this->category=$category;
        $this->price=$price;
        $this->img=$img;
    }
}

class Food extends Product {
    public $ingredient;
    public $size;

    public function __construct(string $name, $category, int $price, string $img, string $ingredient, string $size) {
        parent::__construct($name, $category, $price, $img);
        $this->ingredient=$ingredient;
        $this->size=$size;
    }
}

class Bed extends Product {
    public $color;
    public $material;
    public $dimensions;

    public function __construct(string $name, $category, int $price, string $img, string $color, string $material, string $dimensions) {
        parent::__construct($name, $category, $price, $img);
        $this->color=$color;
        $this->material=$material;
        $this->dimensions=$dimensions;
    }
}
?>