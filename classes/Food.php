<?php
require_once __DIR__ . '/Products.php';

class Food extends Products {
public $taste ;

public function __construct(string $title ,float $price ,Category $category , $weight, string $taste)
{
    parent::__construct($title,$price, $category, $weight);
    $this->taste = $taste ;
   
}
/*public fuction printCard(){
    parent::printCard();
    echo "<h4>: {this->$taste}</h4>";
}*/
}