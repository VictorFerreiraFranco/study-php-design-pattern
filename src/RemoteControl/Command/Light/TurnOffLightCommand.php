<?php

namespace Study\Design\RemoteControl\Command\Light;

use Study\Design\RemoteControl\Command\Command;

class TurnOffLightCommand implements Command
{
    private Light $light;
    
    public function __construct(Light $light)
    {
        $this->light = $light;
    }
    
    public function execute(): bool
    {
        return $this->light->turnOff();
    }
    
    public function undo(): bool
    {
        return $this->light->turnOn();
    }
}