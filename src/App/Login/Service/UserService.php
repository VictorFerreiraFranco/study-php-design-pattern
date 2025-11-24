<?php

namespace Study\Design\App\Login\Service;

use Study\Design\App\Login\Model\User\User;

class UserService
{
    /**
     * Verifica se o usuario esta bloqueado
     * @param User $user
     * @return bool
     */
    public function isBlocked(User $user): bool
    {
        return $user->blockedUntil && new \DateTime() < $user->blockedUntil;
    }
}