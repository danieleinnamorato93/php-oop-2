<?php
class Category {
    public $name ;
    public $img ;
    public function __construct(string $name ,string $img)
    {
        $this->name = $name;
        $this->img = $img;
    }
    public function getName(){
        return $this->name;
    }
    public function getImg(){
        return $this->img;
    }
}