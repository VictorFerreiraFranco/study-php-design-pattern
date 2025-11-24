<?php

namespace Study\Design\SCAJ\VD\VDCalculator\Strategy;

use Study\Design\SCAJ\Entity\VD;
use Study\Design\SCAJ\VD\VDCalculator\Core\CoautorCalculator;

abstract class CalculatorStrategy
{
    abstract public function calculate(CoautorCalculator $coautorCalculator, VD $VD): null|float;
    
    protected function getAmountReceived(): float
    {
        return 1.5;
    }
}