<?php
require_once __DIR__ . '/Products.php';

class Food extends Products {
public $taste ;

public function __construct($title ,$price ,$category ,$kindOfProduct , $weight, string $taste)
{
    parent::__construct();
    $this->taste = $taste ;
   
}
/*public fuction printCard(){
    parent::printCard();
    echo "<h4>: {this->$taste}</h4>";
}*/
}