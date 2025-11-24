<?php

namespace Study\Design\RemoteControl\Command\Fan;

use Study\Design\RemoteControl\Command\Command;

class TurnOnFanCommand implements Command
{
    private Fan $fan;
    
    public function __construct(Fan $fan)
    {
        $this->fan = $fan;
    }
    
    public function execute(): bool
    {
        return $this->fan->turnOn();
    }
    
    public function undo(): bool
    {
        return $this->fan->turnOff();
    }
}