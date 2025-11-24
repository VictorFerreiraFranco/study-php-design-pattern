<?php

namespace Study\Design\HTML\components;

use Study\Design\HTML\core\Attribute;
use Study\Design\HTML\core\HTMLBuilder;
use Study\Design\HTML\core\InputType;

class Input extends HTMLBuilder
{
    protected function getTag(): string { return 'input'; }
    
    public static function builder(): self
    {
        return (new self())
            ->setCloseTag(false);
    }
    
    /**
     * @attribute
     */
    public function name(string $name): self
    {
        return $this->setAttribute(Attribute::NAME, $name);
    }
    
    /**
     * @attribute
     */
    public function type(InputType $type): self
    {
        return $this->setAttribute(Attribute::TYPE, $type->value);
    }
    
    /**
     * @attribute
     */
    public function value(string $value): self
    {
        return $this->setAttribute(Attribute::VALUE, $value);
    }
}