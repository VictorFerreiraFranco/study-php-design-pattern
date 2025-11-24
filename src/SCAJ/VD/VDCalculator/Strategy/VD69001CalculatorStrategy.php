<?php

namespace Study\Design\SCAJ\VD\VDCalculator\Strategy;

use Study\Design\SCAJ\Entity\VD;
use Study\Design\SCAJ\VD\VDCalculator\Core\CoautorCalculator;

class VD69001CalculatorStrategy extends CalculatorStrategy
{
    public function calculate(CoautorCalculator $coautorCalculator, VD $VD): null|float
    {
        // regra de calculo
        return 1.9 - $this->getAmountReceived();
    }
}