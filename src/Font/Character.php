<?php

namespace Study\Design\Font;

interface Character
{
    public function render(string $font, int $size): void;
}