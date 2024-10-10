<?php
require_once __DIR__ . '/Category.php';
class Products {
    public $title;
    public $price;
    public $category;
    public $kindOfProduct;

    public function __construct(string $title ,float $price, string $category, string $kindOfProduct )
    {
        $this->title = $title ;
        $this->price = $price ;
        $this->category = $category ;
        $this->kindOfProduct = $kindOfProduct ;
    }
    }

    public function printCard(){
echo "<div class="card">
<h2>{$this->title}</h2>
h2>{$this->category}</h2>
<h3>{$this->kindOfProduct}</h3>
<p>{$this->price}</p>
</div> "
    }