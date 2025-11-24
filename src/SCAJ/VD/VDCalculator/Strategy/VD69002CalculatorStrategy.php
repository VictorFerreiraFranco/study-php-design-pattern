<?php

namespace Study\Design\SCAJ\VD\VDCalculator\Strategy;

use Study\Design\SCAJ\Entity\VD;
use Study\Design\SCAJ\VD\VDCalculator\Core\CoautorCalculator;

class VD69002CalculatorStrategy extends CalculatorStrategy
{
    public function calculate(CoautorCalculator $coautorCalculator, VD $VD): null|float
    {
        // regra de calculo
        return 3.6 - $this->getAmountReceived();
    }
}