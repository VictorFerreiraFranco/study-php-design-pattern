<?php

namespace Study\Design\CoffeeShop\Coffee\Decorator;

class MilkDecorator extends CoffeeDecorator
{
    public function cost(): float
    {
        return $this->coffee->cost() + 2.5;
    }
    
    public function description(): string
    {
        return "{$this->coffee->description()}, leite";
    }
}