<?php

namespace Study\Design\Shop\Services;

use Study\Design\Shop\Models\Order;

class InvoiceService
{
    public function generateInvoice(Order $order): void
    {
        echo "Gerando nota fiscal de {$order->getProduct()->getDescription()}<br/>";
    }
}