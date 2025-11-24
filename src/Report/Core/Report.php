<?php

namespace Study\Design\Report\Core;

use Study\Design\Report\Types\ReportType;

abstract class Report
{
    protected ReportType $reportType;
    
    public function __construct(ReportType $reportType)
    {
        $this->reportType = $reportType;
    }
    
    abstract public function generate(array $data): void;
}