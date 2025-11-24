<?php

namespace Study\Design\SCAJ\Process\StateStrategy;

use Study\Design\SCAJ\Entity\Process;
use Study\Design\SCAJ\Process\State\State;

class ValidatedStateStrategy implements StateStrategy
{
    public function getState(): State
    {
        return State::VALIDATED;
    }
    
    public function requestValidate(Process $process): void
    {
        throw new \Exception("Processo não pode ser solicitar validação");
    }
    
    public function validate(Process $process): void
    {
        throw new \Exception("Processo já esta validado");
    }
    
    public function requestAdjustment(Process $process): void
    {
        throw new \Exception("Processo não pode ser solicitar ajustes");
    }
    
    public function finilize(Process $process): void
    {
        if (!$process->canFinalize())
            throw new \Exception("O processo não pode ser finalizado");
        
        echo "Processo finalizado";
    }
}