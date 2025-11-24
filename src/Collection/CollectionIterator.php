<?php

namespace Study\Design\Collection;

abstract class CollectionIterator implements \Iterator
{
    protected array $collection = [];
    
    private int $position = 0;
    
    abstract public function type(): string;
    
    public function __construct(?array $collection = null)
    {
        if (empty($collection))
            return;
            
        $this->collection = $collection;
    }
    
    public function current(): mixed
    {
        return $this->collection[$this->position];
    }
    
    public function key(): int
    {
        return $this->position;
    }
    
    public function next(): void
    {
        $this->position++;
    }
    
    public function rewind(): void
    {
        $this->position = 0;
    }
    
    public function valid(): bool
    {
        return isset($this->collection[$this->position]);
    }
    
    public function add(mixed $item): void
    {
        $expected = $this->type();
        
        if (!($item instanceof $expected)) {
            echo "Item deve ser instância de {$expected}, " . get_class($item) . " recebido. <br/>";
            return;
        }
        
        $this->collection[] = $item;
    }
}