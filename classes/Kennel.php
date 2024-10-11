<?php
require_once __DIR__ . '/Products.php';


class Kennel extends Products {
public $comfort ;

public function __construct(string $title ,float $price ,Category $category , float $weight, string $comfort)
{
    parent::__construct($title,$price, $category, $weight);
    $this->comfort = $comfort ;
   
}

    // Getter and Setter for comfort
    public function getComfort(): string {
        return $this->comfort;
    }

    public function setComfort(string $comfort): void {
        $this->comfort = $comfort;
    }

}