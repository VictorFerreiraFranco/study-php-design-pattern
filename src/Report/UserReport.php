<?php

namespace Study\Design\Report;

use Study\Design\Report\Core\Report;

class UserReport extends Report
{
    public function generate(array $data): void
    {
        $this->reportType->output('Usuário', $data);
    }
}