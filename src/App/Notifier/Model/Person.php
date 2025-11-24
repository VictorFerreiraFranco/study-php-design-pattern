<?php

namespace Study\Design\App\Notifier\Model;

class Person
{
    public function __construct(
        public string $nome,
        public string $email,
        public ?string $phone = null
    ) {}
}