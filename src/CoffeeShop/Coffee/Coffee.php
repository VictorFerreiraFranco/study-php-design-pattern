<?php

namespace Study\Design\CoffeeShop\Coffee;

use Study\Design\CoffeeShop\Product;

class Coffee implements Product
{
    public function cost(): float
    {
        return 5;
    }
    
    public function description(): string
    {
        return 'Café';
    }
}