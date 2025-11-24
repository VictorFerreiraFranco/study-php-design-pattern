<?php

namespace Study\Design\SCAJ\Entity;

use Study\Design\SCAJ\Process\StateStrategy\StateStrategy;
use Study\Design\SCAJ\Process\State\State;
use Study\Design\SCAJ\Process\Type\Type;
use Study\Design\SCAJ\Process\TypeStrategy\TypeStrategy;

class Process
{
    private string $processNumber;
    
    private StateStrategy $stateStrategy;
    
    private TypeStrategy $typeStrategy;
    
    public function __construct(string $processNumber, StateStrategy $state, TypeStrategy $typeStrategy)
    {
        $this->setProcessNumber($processNumber);
        $this->setStateStrategy($state);
        $this->setTypeStrategy($typeStrategy);
    }
    
    public function getProcessNumber(): string
    {
        return $this->processNumber;
    }
    
    public function setProcessNumber(string $processNumber): void
    {
        $this->processNumber = $processNumber;
    }
    
    public function setStateStrategy(StateStrategy $stateStrategy): void
    {
        $this->stateStrategy = $stateStrategy;
    }
    
    public function getState(): State
    {
        return $this->stateStrategy->getState();
    }
    
    public function requestValidate(): void
    {
        $this->stateStrategy->requestValidate($this);
    }
    
    public function validade(): void
    {
        $this->stateStrategy->validate($this);
    }
    
    public function requestAdjustment(): void
    {
        $this->stateStrategy->requestAdjustment($this);
    }
    
    public function finilize(): void
    {
        $this->stateStrategy->finilize($this);
    }
    
    public function setTypeStrategy(TypeStrategy $typeStrategy): void
    {
        $this->typeStrategy = $typeStrategy;
    }
    
    public function getType(): Type
    {
        return $this->typeStrategy->getType();
    }
    
    public function canFinalize(): bool
    {
        return $this->typeStrategy->canFinalize($this);
    }
}