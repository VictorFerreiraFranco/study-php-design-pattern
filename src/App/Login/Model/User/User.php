<?php

namespace Study\Design\App\Login\Model\User;

class User
{
    public function __construct(
        public string $username,
        public string $passwordHash,
        public UserType $type,
        public int $failedAttempts = 0,
        public ?\DateTime $blockedUntil = null,
    ) { }
}