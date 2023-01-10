<?php 
class Product {
    public $name;
    public $category;
    public $price;

    public function __construct(string $name, $category, int $price) {
        $this->name=$name;
        $this->category=$category;
        $this->price=$price;
    }
}

class Food extends Product {
    public $ingredient;
    public $size;

    public function __construct(string $name, $category, int $price, string $ingredient, string $size) {
        parent::__construct($name, $category, $price);
        $this->ingredient=$ingredient;
        $this->size=$size;
    }
}

class Bed extends Product {
    public $color;
    public $material;
    public $dimensions;

    public function __construct(string $name, $category, int $price, string $color, string $material, string $dimensions) {
        parent::__construct($name, $category, $price);
        $this->color=$color;
        $this->material=$material;
        $this->dimensions=$dimensions;
    }
}
?>