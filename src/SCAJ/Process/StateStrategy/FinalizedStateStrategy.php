<?php

namespace Study\Design\SCAJ\Process\StateStrategy;

use Study\Design\SCAJ\Entity\Process;
use Study\Design\SCAJ\Process\State\State;

class FinalizedStateStrategy implements StateStrategy
{
    public function getState(): State
    {
        return State::FINALIZED;
    }
    
    public function requestValidate(Process $process): void
    {
        throw new \Exception("Processo não pode ser solicitar validação");
    }
    
    public function validate(Process $process): void
    {
        throw new \Exception("Processo não pode ser validado");
    }
    
    public function requestAdjustment(Process $process): void
    {
        throw new \Exception("Processo não pode ser solicitar ajustes");
    }
    
    public function finilize(Process $process): void
    {
        throw new \Exception("Processo já esta finalizado");
    }
}