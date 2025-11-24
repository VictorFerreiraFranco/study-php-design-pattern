<?php

namespace Study\Design\RemoteControl;

use Study\Design\RemoteControl\Command\Command;
use Study\Design\RemoteControl\Command\Fan\Fan;
use Study\Design\RemoteControl\Command\Fan\TurnOffFanCommand;
use Study\Design\RemoteControl\Command\Fan\TurnOnFanCommand;
use Study\Design\RemoteControl\Command\Light\Light;
use Study\Design\RemoteControl\Command\Light\TurnOffLightCommand;
use Study\Design\RemoteControl\Command\Light\TurnOnLightCommand;

class RemoteControl
{
    /**
     * @var array<Command>
     */
    private array $historic = [];
    
    private TurnOnLightCommand $turnOnLightCommand;
    
    private TurnOffLightCommand $turnOffLightCommand;
    
    private TurnOnFanCommand $turnOnFanCommand;
    
    private TurnOffFanCommand $turnOffFanCommand;
    
    /**
     * @param Light $light
     * @param Fan $fan
     */
    public function __construct(Light $light, Fan $fan)
    {
        $this->turnOnLightCommand = new TurnOnLightCommand($light);
        $this->turnOffLightCommand = new TurnOffLightCommand($light);
        
        $this->turnOnFanCommand = new TurnOnFanCommand($fan);
        $this->turnOffFanCommand = new TurnOffFanCommand($fan);
    }
    
    public function turnOnLight(): void
    {
        $this->execute($this->turnOnLightCommand);
    }
    
    public function turnOffLight(): void
    {
        $this->execute($this->turnOffLightCommand);
    }
    
    public function turnOnFan(): void
    {
        $this->execute($this->turnOnFanCommand);
    }
    
    public function turnOffFan(): void
    {
        $this->execute($this->turnOffFanCommand);
    }
    
    public function undo(): void
    {
        $last = end($this->historic);
        
        if ($last && $last->undo())
            array_pop($this->historic);
    }
    
    private function execute(Command $command): void
    {
        if ($command->execute())
            $this->historic[] = $command;
    }
    
}