<?php 
require_once __DIR__."/../classes/traits.php";
class Category {
    public $type;
    use Image;

    public function __construct(string $type, string $img) {
        $this->type=$type;
        $this->img=$img;
    }
}
?>