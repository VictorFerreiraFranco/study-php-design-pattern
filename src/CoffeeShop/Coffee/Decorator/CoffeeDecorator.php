<?php

namespace Study\Design\CoffeeShop\Coffee\Decorator;

use Study\Design\CoffeeShop\Coffee\Coffee;

abstract class CoffeeDecorator extends Coffee
{
    protected Coffee $coffee;
    
    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }
}