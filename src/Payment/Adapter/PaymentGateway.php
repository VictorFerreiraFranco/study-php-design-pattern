<?php

namespace Study\Design\Payment\Adapter;

interface PaymentGateway
{
    public function pay(float $value): void;
}