<?php

namespace Study\Design\Shop\Services;

use Study\Design\Shop\Models\Product;

class InventoryService
{
    public function checkStock(Product $product): bool
    {
        echo "Verificando estoque de {$product->getDescription()}<br/>";
        return true;
    }
}