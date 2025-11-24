<?php

namespace Study\Design\App\Login\Library\LoginManager\LockPolicy;

use Study\Design\App\Login\Exception\Login\UserBlockedException;
use Study\Design\App\Login\Model\User\User;
use Study\Design\App\Login\Service\UserService;

class RegularLockPolicy extends LockPolicy
{
    public function __construct(
        protected UserService $userService
    ) {}
    
    /**
     * @inheritDoc
     * @throws UserBlockedException
     */
    public function check(User $user): void
    {
        if ($this->userService->isBlocked($user))
            throw new UserBlockedException("User {$user->username} esta bloqueado temporariamente, até " . $user->blockedUntil->format('H:i:s'));
    }
}