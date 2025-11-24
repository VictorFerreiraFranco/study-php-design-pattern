<?php

namespace Study\Design\FileSystem;

interface FileSystem
{
    public function getName(): string;
    
    public function getSize(): int;
}