<?php

namespace Study\Design\Shop\Services;

use Study\Design\Shop\Models\Order;

class NotificationService
{
    public function sendConfirmation(Order $order): void {
        echo "Enviando email de confirmação para {$order->getClient()->getEmail()}\n";
    }
}