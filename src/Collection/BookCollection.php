<?php

namespace Study\Design\Collection;

use Study\Design\Collection\CollectionIterator;

class BookCollection extends CollectionIterator
{
    public function type(): string
    {
        return Book::class;
    }
}