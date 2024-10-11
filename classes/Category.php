<?php
class Category {
    public $name ;
    public $iconUrl ;
    public function __construct(string $name ,string $iconUrl)
    {
        $this->name = $name;
        $this->iconUrl = $iconUrl;
    }
    // Getter and Setter for name
    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    // Getter and Setter for iconUrl
    public function getIconUrl(): string {
        return $this->iconUrl;
    }

    public function setIconUrl(string $iconUrl): void {
        $this->iconUrl = $iconUrl;
    }
}