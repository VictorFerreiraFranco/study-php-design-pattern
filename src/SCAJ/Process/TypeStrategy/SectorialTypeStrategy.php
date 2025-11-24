<?php

namespace Study\Design\SCAJ\Process\TypeStrategy;

use Study\Design\SCAJ\Entity\Process;
use Study\Design\SCAJ\Process\Type\Type;

class SectorialTypeStrategy implements TypeStrategy
{
    public function getType(): Type
    {
        return Type::SECTORIAL;
    }
    
    public function canFinalize(Process $process): bool
    {
        return false;
    }
}