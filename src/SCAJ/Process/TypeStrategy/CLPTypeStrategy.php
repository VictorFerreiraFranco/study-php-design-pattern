<?php

namespace Study\Design\SCAJ\Process\TypeStrategy;

use Study\Design\SCAJ\Entity\Process;
use Study\Design\SCAJ\Process\Type\Type;

class CLPTypeStrategy implements TypeStrategy
{
    public function getType(): Type
    {
        return Type::CLP;
    }
    
    public function canFinalize(Process $process): bool
    {
        return true;
    }
}