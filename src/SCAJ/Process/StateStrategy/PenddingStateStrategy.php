<?php

namespace Study\Design\SCAJ\Process\StateStrategy;

use Study\Design\SCAJ\Entity\Process;
use Study\Design\SCAJ\Process\State\State;

class PenddingStateStrategy implements StateStrategy
{
    public function getState(): State
    {
        return State::PENDDING;
    }
    
    public function requestValidate(Process $process): void
    {
        $process->setStateStrategy(new AwaitingValidationStateStrategy());
        echo "Processo solicitado validação";
    }
    
    public function validate(Process $process): void
    {
        throw new \Exception("Processo não pode ser validado!");
    }
    
    public function requestAdjustment(Process $process): void
    {
        throw new \Exception("Processo não pode solicitar ajustes!");
    }
    
    public function finilize(Process $process): void
    {
        throw new \Exception("O processo não pode ser finalizado");
    }
}