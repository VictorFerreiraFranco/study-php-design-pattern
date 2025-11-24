<?php

namespace Study\Design\Report\Types;

interface ReportType
{
    public function output(string $title, array $data): void;
}