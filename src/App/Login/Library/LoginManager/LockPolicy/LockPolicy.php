<?php

namespace Study\Design\App\Login\Library\LoginManager\LockPolicy;

use Study\Design\App\Login\Exception\Login\LoginException;
use Study\Design\App\Login\Model\User\User;

abstract class LockPolicy
{
    protected int $maxAttempts = 3;
    
    protected int $blockMinutes = 2;
    
    /**
     * @param User $user
     * @return void
     * @throws LoginException
     */
    abstract public function check(User $user): void;
    
    /**
     * @param User $user
     * @return void
     */
    public function recordFailure(User $user): void
    {
        $user->failedAttempts++;
        
        if ($user->failedAttempts >= $this->maxAttempts) {
            $user->blockedUntil = (new \DateTime())->modify("+{$this->blockMinutes} minutes");
            $user->failedAttempts = 0;
        }
    }
}