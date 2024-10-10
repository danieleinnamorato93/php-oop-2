<?php
class Category {
    public $name ;
    public $icon ;
    public function __construct(string $name ,$icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }
    public function getName(){
        return $this->name;
    }
    public function getIcon(){
        return $this->icon;
    }
}