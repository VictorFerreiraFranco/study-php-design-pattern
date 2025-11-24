<?php

namespace Study\Design\Shop\Models;

class Product
{
    private string $description;
    
    public function __construct(string $description)
    {
        $this->setDescription($description);
    }
    
    public function getDescription(): string
    {
        return $this->description;
    }
    
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}