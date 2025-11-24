<?php

namespace Study\Design\SCAJ\Entity;

class Coautor
{
    private string $name;
    
    public function getName(): string
    {
        return $this->name;
    }
    
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}