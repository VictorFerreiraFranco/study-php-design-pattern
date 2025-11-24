<?php

namespace Study\Design\SCAJ\Process\StateStrategy;

use Study\Design\SCAJ\Entity\Process;
use Study\Design\SCAJ\Process\State\State;

interface StateStrategy
{
    public function getState(): State;
    
    public function requestValidate(Process $process): void;
    
    public function requestAdjustment(Process $process): void;
    
    public function validate(Process $process): void;
    
    public function finilize(Process $process): void;
}