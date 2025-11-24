<?php

namespace Study\Design\Report\Types;

class PDFReportType implements ReportType
{
    public function output(string $title, array $data): void
    {
        echo "Gerando relatório PDF: {$title}";
    }
}