<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Games.php';
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/Kennel.php';
class Products {
    public $title;
    public $price;
    public Category $category;
    public $weight;

    public function __construct(string $title ,float $price, Category $category, float $weight )
    {
        $this->title = $title ;
        $this->price = $price ;
        $this->category = $category ;
        $this->weight = $weight ;
    }
    
    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    // Getter and Setter for price
    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    // Getter and Setter for category
    public function getCategory(): Category {
        return $this->category;
    }

    public function setCategory(Category $category): void {
        $this->category = $category;
    }

    // Getter and Setter for weight
    public function getWeight(): float {
        return $this->weight;
    }

    public function setWeight(float $weight): void {
        $this->weight = $weight;
    }

    public function showCard(): string {
        return "$this->title";
    }
}