<?php

namespace Study\Design\SCAJ\VD\VDCalculator\Strategy;

use Study\Design\SCAJ\Entity\VD;
use Study\Design\SCAJ\VD\VDCalculator\Core\CoautorCalculator;

class VD69003CalculatorStrategy extends CalculatorStrategy
{
    public function calculate(CoautorCalculator $coautorCalculator, VD $VD): null|float
    {
        // regra de calculo
        if ($VD->getYearMonth() == '2021-12')
            return null;
        
        return 60 - $this->getAmountReceived();
    }
}