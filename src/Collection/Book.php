<?php

namespace Study\Design\Collection;

class Book
{
    public function __construct(public string $title) {}
    
    public function getTitle(): string
    {
        return $this->title;
    }
    
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}