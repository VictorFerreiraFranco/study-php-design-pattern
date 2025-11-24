<?php

namespace Study\Design\Payment\Adapter;

use Study\Design\Payment\APIs\PayPal;

class PayPalAdapter implements PaymentGateway
{
    private PayPal $payPal;
    
    public function __construct(PayPal $payPal)
    {
        $this->payPal = $payPal;
    }
    
    public function pay(float $value): void
    {
        $this->payPal->sendPayment($value);
    }
}