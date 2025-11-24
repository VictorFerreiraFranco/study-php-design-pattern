<?php

namespace Study\Design\SCAJ\VD\VDCalculator\Strategy;

use Study\Design\SCAJ\VD\Type\Type;

class StrategyMapping
{
    public static function map(Type $type): CalculatorStrategy
    {
        return match ($type) {
            Type::VD69001 => new VD69001CalculatorStrategy(),
            Type::VD69002 => new VD69002CalculatorStrategy(),
            Type::VD69003 => new VD69003CalculatorStrategy(),
        };
    }
}