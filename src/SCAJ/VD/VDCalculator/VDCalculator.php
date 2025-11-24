<?php

namespace Study\Design\SCAJ\VD\VDCalculator;

use Study\Design\SCAJ\Entity\VD;
use Study\Design\SCAJ\VD\VDCalculator\Core\CoautorCalculator;

class VDCalculator
{
    private bool $ready = false;
    
    private CoautorCalculator $coautorCalculator;
    
    public function __construct(CoautorCalculator $coautorCalculator)
    {
        $this->coautorCalculator = $coautorCalculator;
    }
    
    /**
     * @throws \DateMalformedPeriodStringException
     * @throws \Exception
     */
    public function calculate(): void
    {
        foreach ($this->coautorCalculator->getVdsContexts() as $VdsContext)
            $VdsContext->calculate($this->coautorCalculator);
        
        $this->ready = true;
    }
    
    /**
     * @return array<VD>
     * @throws \Exception
     */
    public function getVDscalculated(): array
    {
        if (!$this->ready)
            throw new \Exception('Realize o calculo');
        
        $vdsCalculated = [];
        
        foreach ($this->coautorCalculator->getVdsContexts() as $VdsContext)
            $vdsCalculated = [...$vdsCalculated, ...$VdsContext->getValues()];
        
        return $vdsCalculated;
    }
    
    private function getCoautorCalculator(): CoautorCalculator
    {
        return $this->coautorCalculator;
    }
}