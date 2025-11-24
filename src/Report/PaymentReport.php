<?php

namespace Study\Design\Report;

use Study\Design\Report\Core\Report;

class PaymentReport extends Report
{
    public function generate(array $data): void
    {
        $this->reportType->output('Pagamentos', $data);
    }
}