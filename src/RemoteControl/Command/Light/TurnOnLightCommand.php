<?php

namespace Study\Design\RemoteControl\Command\Light;

use Study\Design\RemoteControl\Command\Command;

class TurnOnLightCommand implements Command
{
    private Light $light;
    
    public function __construct(Light $light)
    {
        $this->light = $light;
    }
    
    public function execute(): bool
    {
        return $this->light->turnOn();
    }
    
    public function undo(): bool
    {
        return $this->light->turnOff();
    }
}