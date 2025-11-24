<?php

namespace Study\Design\Report\Types;

class HTMLReportType implements ReportType
{
    public function output(string $title, array $data): void
    {
        echo "Gerando relatório HTML: {$title}";
    }
}