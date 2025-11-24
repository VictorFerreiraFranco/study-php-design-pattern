<?php

namespace Study\Design\FileSystem;

class Directory implements FileSystem
{
    private string $name;
    
    /**
     * @var array<FileSystem>
     */
    private array $children = [];
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    public function getName(): string
    {
        return $this->name;
    }
    
    public function getSize(): int
    {
        $total = 0;
        
        foreach ($this->children as $child)
            $total += $child->getSize();
        
        return $total;
    }
    
    public function add(FileSystem $fileSystem): void
    {
        $this->children[] = $fileSystem;
    }
}