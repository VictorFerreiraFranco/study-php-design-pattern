<?php

namespace Study\Design\HTML\components;

use Study\Design\HTML\core\HTMLBuilder;

class Div extends HTMLBuilder
{
    protected function getTag(): string { return 'div'; }
    
    public static function builder(): self
    {
        return new self();
    }
}