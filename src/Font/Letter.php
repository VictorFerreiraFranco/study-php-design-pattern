<?php

namespace Study\Design\Font;

use Study\Design\Font\Character;

class Letter implements Character
{
    private string $symbol;
    
    public function __construct(string $symbol)
    {
        $this->symbol = $symbol;
    }
    
    public function render(string $font, int $size): void
    {
        echo "Renderizando letra '{$this->symbol}' com fonte {$font} e tamanho {$size}<br/>";
    }
}