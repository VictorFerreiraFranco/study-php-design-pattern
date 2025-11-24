<?php

namespace Study\Design\CoffeeShop;

interface Product
{
    public function cost(): float;
    public function description(): string;
}