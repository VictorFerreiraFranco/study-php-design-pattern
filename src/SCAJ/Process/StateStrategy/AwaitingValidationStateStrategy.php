<?php

namespace Study\Design\SCAJ\Process\StateStrategy;

use Study\Design\SCAJ\Entity\Process;
use Study\Design\SCAJ\Process\State\State;

class AwaitingValidationStateStrategy implements StateStrategy
{
    public function getState(): State
    {
        return State::AWAITING_VALIDATION;
    }
    
    public function requestValidate(Process $process): void
    {
        throw new \Exception("Processo já esta agurdando validação");
    }
    
    public function validate(Process $process): void
    {
        $process->setStateStrategy(new ValidatedStateStrategy());
        echo "Processo validado";
    }
    
    public function requestAdjustment(Process $process): void
    {
        $process->setStateStrategy(new RectifyStateStrategy());
        echo "Processo solicitado ajuste";
    }
    
    public function finilize(Process $process): void
    {
        throw new \Exception("O processo não pode ser finalizado");
    }
}