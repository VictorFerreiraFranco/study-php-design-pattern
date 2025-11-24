<?php

namespace Study\Design\HTML\components;

use Study\Design\HTML\core\Attribute;
use Study\Design\HTML\core\HTMLBuilder;
use Study\Design\HTML\core\Lang;

class HTML extends HTMLBuilder
{
    protected function getTag(): string { return 'html'; }
    
    public static function builder(): self
    {
        return new self();
    }
    
    /**
     * @attribute
     */
    public function lang(Lang $lang): self
    {
        return $this->setAttribute(Attribute::LANG, $lang->value);
    }
}