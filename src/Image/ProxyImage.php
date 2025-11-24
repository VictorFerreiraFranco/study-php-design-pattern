<?php

namespace Study\Design\Image;

class ProxyImage implements Image
{
    private string $filename;
    
    private ?RealImage $realImage = null;
    
    public function __construct(string $filename) {
        $this->filename = $filename;
    }
    
    public function display(): void
    {
        if ($this->realImage === null)
            $this->realImage = new RealImage($this->filename);
        
        $this->realImage->display();
    }
}