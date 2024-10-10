<?php
class Category {
    public $name ;
    public $img ;
    public function __construct(string $name ,$img)
    {
        $this->name = $name;
        $this->img = $img;
    }
    public function getName(){
        return $this->name;
    }
    public function getIcon(){
        return $this->icon;
    }
}