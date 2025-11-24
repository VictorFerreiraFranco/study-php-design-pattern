<?php

namespace Study\Design\RemoteControl\Command\Light;

class Light
{
    private bool $on = false;
    
    public function turnOn(): bool {
        
        if ($this->on)
            return false;
            
        $this->on = true;
        
        echo "Luz acesa. <br/>";
        return true;
    }
    
    public function turnOff(): bool {
        
        if (!$this->on)
            return false;
        
        $this->on = false;
        
        echo "Luz apagada. <br/>";
        return true;
    }
}