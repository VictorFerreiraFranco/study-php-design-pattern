<?php

namespace Study\Design\Payment\APIs;

class NuBank
{
    public function payment(float $value): void
    {
        echo "Pagamento do NuBank no valor de {$value}";
        
    }
}