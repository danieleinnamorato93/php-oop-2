<?php
require_once __DIR__ . '/../traits/Greetable.php';
require_once __DIR__ . '/Category.php';
class Products {
    public $title;
    public $price;
    public Category $category;
    public $weight;

    use Greetable;

    public function __construct(string $title ,float $price, Category $category, float $weight )
    {
        $this->title = $title ;
        $this->price = $price ;
        $this->category = $category ;
        $this->weight = $weight ;

        $this->checkPrice($price);
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
    //!Inserimento Exception!
    public function checkPrice(float $price): void {
        if ($price < 0) {
            throw new InvalidProductException("Il prezzo non può mai essere inferiore a 0 €");
        }
        }
    }
   