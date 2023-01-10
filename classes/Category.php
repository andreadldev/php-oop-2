<?php 
class Category {
    public $type;
    public $img;

    public function __construct(string $type, string $img) {
        $this->type=$type;
        $this->img=$img;
    }
}
?>