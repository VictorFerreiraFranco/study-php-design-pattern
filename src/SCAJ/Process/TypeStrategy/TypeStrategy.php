<?php

namespace Study\Design\SCAJ\Process\TypeStrategy;

use Study\Design\SCAJ\Entity\Process;
use Study\Design\SCAJ\Process\Type\Type;

interface TypeStrategy
{
    public function getType(): Type;
    
    public function canFinalize(Process $process): bool;
}