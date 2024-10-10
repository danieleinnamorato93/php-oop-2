<?php
require_once __DIR__ . '/Category.php';
class Products {
    public $title;
    public $price;
    public $category;
    public $weight;

    public function __construct(string $title ,float $price, Category $category, float $weight )
    {
        $this->title = $title ;
        $this->price = $price ;
        $this->category = $category ;
        $this->weight = $weight ;
    }
    
 public function showCard(){
    return "$this->title";
    } 

}