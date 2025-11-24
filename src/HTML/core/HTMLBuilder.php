<?php

namespace Study\Design\HTML\core;

abstract class HTMLBuilder
{
    protected array $children = [];
    
    protected array $attributes = [];
    
    protected bool $closeTag = true;
    
    abstract protected function getTag(): string;
    
    public function render(): void
    {
        $attrs = '';
        foreach ($this->attributes as $name => $value)
            $attrs .= " $name=\"$value\"";
        
        echo "<" . ($this->customOpenTag() ?? $this->getTag()) . "{$attrs}>";
        
        if (!$this->closeTag)
            return;
        
        foreach ($this->children as $child)
        {
            if ($child instanceof HTMLBuilder)
                $child->render();
            elseif (is_string($child))
                echo $child;
        }
        
        echo "</" . ($this->customCloseTag() ?? $this->getTag()) . ">";
    }
    
    public function __toString(): string
    {
        ob_start();
        
        $this->render();
        
        return ob_get_clean();
    }
    
    protected function customOpenTag(): ?string { return null; }
    
    protected function customCloseTag(): ?string { return null; }

    protected function setAttribute(Attribute $attribute, mixed $valeu, bool $concat = false): self
    {
        if ($concat && isset($this->attributes[$attribute->name]))
            $this->attributes[$attribute->name] .= $valeu;
        else
            $this->attributes[$attribute->name] = $valeu;
            
        return $this;
    }
    
    protected function getAttribute(Attribute $attribute): mixed
    {
        return $this->attributes[$attribute->name];
    }
    
    protected function setCloseTag(bool $closeTag): self
    {
        $this->closeTag = $closeTag;
        return $this;
    }
    
    public function children(...$args): self
    {
        if (!$this->closeTag)
            return $this;
        
        $this->children = [...$this->children, ...$args];
        return $this;
    }
    
    /**
     * @attribute
     */
    public function id(string $id): self
    {
        return $this->setAttribute(Attribute::ID, $id);
    }
    
    /**
     * @attribute
     */
    public function class(string $class, bool $concat = false): self
    {
        return $this->setAttribute(Attribute::CLASSES, $class, $concat);
    }
}