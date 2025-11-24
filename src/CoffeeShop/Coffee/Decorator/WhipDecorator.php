<?php

namespace Study\Design\CoffeeShop\Coffee\Decorator;

class WhipDecorator extends CoffeeDecorator
{
    public function cost(): float
    {
        return $this->coffee->cost() + 1.4;
    }
    
    public function description(): string
    {
        return "{$this->coffee->description()}, chantilly";
    }
}