<?php

namespace Study\Design\Shop\Services;

use Study\Design\Shop\Models\Order;

class PaymentService
{
    public function processPayment(Order $order): bool
    {
        echo "Processando pagamento de R$ {$order->getAmount()}<br/>";
        return true;
    }
}