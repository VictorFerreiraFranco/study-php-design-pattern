<?php

namespace Study\Design\SCAJ\VD\VDCalculator\Core;

use Study\Design\SCAJ\Entity\Coautor;

class CoautorCalculator
{
    private Coautor $coautor;
    
    /**
     * @var array<VDContextCalculator>
     */
    private array $vdsContexts;
    
    public function __construct(
        Coautor $coautor
    ) {
        $this->coautor = $coautor;
    }
    
    public function getCoautor(): Coautor
    {
        return $this->coautor;
    }
    
    public function setCoautor(Coautor $coautor): void
    {
        $this->coautor = $coautor;
    }
    
    public function getVdsContexts(): array
    {
        return $this->vdsContexts;
    }
    
    public function addVdContext(VDContextCalculator $VDContextCalculator): void
    {
        $this->vdsContexts[] = $VDContextCalculator;
    }
}