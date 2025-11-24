<?php

namespace Study\Design\Payment\APIs;

class PayPal
{
    public function sendPayment(float $value): void
    {
        echo "Pagamento do PayPal no valor de {$value}";
    }
}