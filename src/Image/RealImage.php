<?php

namespace Study\Design\Image;

class RealImage implements Image
{
    private string $filename;
    
    private bool $loaded = false;
    
    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }
    
    public function display(): void
    {
        $this->loadFromDisk();
        echo "Exibindo {$this->filename} <br/>";
    }
    
    private function loadFromDisk(): void
    {
        if (!$this->loaded)
            echo "Carregando {$this->filename} do disco... <br/>";
        
        $this->loaded = true;
    }
}