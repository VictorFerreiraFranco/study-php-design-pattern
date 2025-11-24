<?php

namespace Study\Design\RemoteControl\Command\Fan;

class Fan
{
    private bool $on = false;
    
    
    public function turnOn(): bool {
        
        if ($this->on)
            return false;
        
        $this->on = true;
        
        echo "Ventilador ligado. <br/>";
        return true;
    }
    
    public function turnOff(): bool {
        
        if (!$this->on)
            return false;
        
        $this->on = false;
        
        echo "Ventilador desligado. <br/>";
        return true;
    }
}