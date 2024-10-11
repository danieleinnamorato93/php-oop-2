<?php
require_once __DIR__ . '/Products.php';

class Games extends Products {
public $material ;

public function __construct(string $title , float $price ,Category $category , float $weight, string $material)
{
    parent::__construct($title , $price , $category , $weight);
    $this->material = $material ;
   
}

public function getMaterial(): string {
    return $this->material;
}

public function setMaterial(string $material): void {
    $this->material = $material;
}
}