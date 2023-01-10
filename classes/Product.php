<?php 
class Product {
    public $name;
    public $category;

    public function __construct(string $name, $category) {
        $this->name=$name;
        $this->category=$category;
    }
}
?>