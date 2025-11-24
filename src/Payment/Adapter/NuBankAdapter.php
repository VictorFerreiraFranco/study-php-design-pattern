<?php

namespace Study\Design\Payment\Adapter;

use Study\Design\Payment\APIs\NuBank;

class NuBankAdapter implements PaymentGateway
{
    private NuBank $nuBank;
    
    public function __construct(NuBank $nuBank)
    {
        $this->nuBank = $nuBank;
    }
    
    public function pay(float $value): void
    {
        $this->nuBank->payment($value);
    }
}