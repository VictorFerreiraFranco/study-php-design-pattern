<?php

namespace Study\Design\HTML\components;

use Study\Design\HTML\core\HTMLBuilder;

class DOCTYPE extends HTMLBuilder
{
    protected function getTag(): string { return 'DOCTYPE'; }
    
    protected function customOpenTag(): ?string { return "!{$this->getTag()} html"; }
    
    public static function builder(): self
    {
        return (new self())
            ->setCloseTag(false);
    }
}